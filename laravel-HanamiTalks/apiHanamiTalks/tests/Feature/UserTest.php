<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class UserTest extends TestCase
{
    use RefreshDatabase;
    public function test_register(){
        $newUser = [
            'username' => 'testUser',
            'nickname' => 'testUser',
            'email' => 'test@test.com',
            'type' => 'User',
            'kanjiLvl' => 1,
            'grammarLvl' => 1,
            'vocabLvl' => 1,
            'image' => 'none',
            'password' => 'passwordTest14',
            'password_confirmation' => 'passwordTest14'
        ];
    
        $headers = [
            'Accept' => 'application/json'
        ];
    
        $response = $this->withHeaders($headers)->post('/api/register', $newUser);

        $response->assertStatus(200)
            ->assertJsonStructure([
                'data' => [
                    'id',
                    'username',
                    'nickname',
                    'email',
                    'type',
                    'kanjiLvl',
                    'grammarLvl',
                    'vocabLvl',
                    'image',
                    'kanjis' => [],
                    'vocabularies' => [],
                    'grammars' => [],
                ],
                'access_token',
                'token_type',
            ]);
    }

    public function test_login(){
        $userLogin = User::factory()->create(['password' => 'password1']);

        $credentials = [
            'username' => $userLogin->username,
            'password' => 'password1'
        ];

        $response = $this->post('/api/login', $credentials);
        $response->assertStatus(200)
            ->assertJsonStructure([
                'data' => [
                    'id',
                    'username',
                    'nickname',
                    'email',
                    'type',
                    'kanjiLvl',
                    'grammarLvl',
                    'vocabLvl',
                    'image',
                    'kanjis' => [],
                    'vocabularies' => [],
                    'grammars' => [],
                ],
                'access_token',
                'token_type',
            ]);
    }

    public function test_logout(){
        $loggedUser = User::factory()->create();
        $token = $loggedUser->createToken('test_token');

        $header = [
            'Authorization' => 'Bearer ' . $token->plainTextToken
        ];

        $response = $this->withHeaders($header)->get('/api/logout');

        $response->assertStatus(200)
        ->assertJson([
            'message' => 'Session closed successfully.'
        ]);
    }

    public function test_logout_without_token(){
        $header = [
            'Accept' => 'application/json'
        ];

        $response = $this->withHeaders($header)->get('/api/logout');

        $response->assertStatus(401)
        ->assertJson([
            'message' => 'Unauthenticated.',
        ]);

    }
}



