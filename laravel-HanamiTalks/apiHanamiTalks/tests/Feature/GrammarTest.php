<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use App\Models\Grammar;

class GrammarTest extends TestCase
{
    use RefreshDatabase;
    public function authorization()
    {
        $user = User::factory()->create();
        $token = $user->createToken('test_token');

        return [
            'Authorization' => 'Bearer ' . $token->plainTextToken
        ];
    }

    public function test_fetch_grammar_with_authorization()
    {
        $headers = $this->authorization();

        $response = $this->withHeaders($headers)->get('/api/grammars');

        $response->assertStatus(200)
            ->assertJsonStructure([
                'data' => [
                    '*' => [
                        'topicTitle',
                        'description',
                        'level',
                    ],
                ],
            ]);
    }

    public function test_fetch_grammar_without_authorization()
    {
        $response = $this->withHeaders(['Accept' => 'application/json',])->get('/api/grammars');

        $response->assertStatus(401)
            ->assertJson([
                'message' => 'Unauthenticated.',
            ]);
    }

    public function test_fetch_single_grammar_with_authorization()
    {
        $headers = $this->authorization();

        $grammar = Grammar::factory()->create();

        $response = $this->withHeaders($headers)->get('/api/grammars/' . $grammar->id);

        $response->assertStatus(200)
            ->assertJsonStructure([
                'data' => [
                    'topicTitle',
                    'description',
                    'level',
                ],
            ]);
    }

    public function test_fetch_single_grammar_without_authorization()
    {

        $grammar = Grammar::factory()->create();

        $response = $this->withHeaders(['Accept' => 'application/json',])->get('/api/grammarUses/' . $grammar->id);

        $response->assertStatus(401)
            ->assertJson([
                'message' => 'Unauthenticated.',
            ]);
    }

    public function test_create_grammar_use_with_authorization()
    {
        $headers = $this->authorization();

        $newGrammar = [
            'topicTitle' => 'Title',
            'description' => 'This is a test description',
            'level' => 1
        ];

        $response = $this->withHeaders($headers)->post('/api/grammars', $newGrammar);

        $response->assertStatus(201)
        ->assertJsonStructure([
            'data' => [
                'topicTitle',
                'description',
                'level',
            ],
        ]);
    }

    public function test_create_grammar_without_authorization()
    {
        $headers = ['Accept' => 'application/json',];

        $newGrammar = [
            'topicTitle' => 'Title',
            'description' => 'This is a test description',
            'level' => 1
        ];

        $response = $this->withHeaders($headers)->post('/api/grammars', $newGrammar);

        $response->assertStatus(401)
            ->assertJson([
                'message' => 'Unauthenticated.',
            ]);
    }

    public function test_update_grammar_use_with_authorization()
    {
        $headers = $this->authorization();

        $prevGrammar = Grammar::factory()->create();

        $updateGrammar = [
            'topicTitle' => 'Title',
            'description' => 'This is a test description',
            'level' => 1
        ];

        $response = $this->withHeaders($headers)->put('/api/grammars/' . $prevGrammar->id, $updateGrammar);

        $response->assertStatus(200)
        ->assertJsonStructure([
            'data' => [
                'topicTitle',
                'description',
                'level',
            ],
        ]);
    }

    public function test_update_grammar_without_authorization()
    {
        $headers = ['Accept' => 'application/json',];

        $prevGrammar = Grammar::factory()->create();

        $updateGrammar = [
            'topicTitle' => 'Title',
            'description' => 'This is a test description',
            'level' => 1
        ];

        $response = $this->withHeaders($headers)->put('/api/grammars/' . $prevGrammar->id, $updateGrammar);

        $response->assertStatus(401)
            ->assertJson([
                'message' => 'Unauthenticated.',
            ]);
    }

    public function test_delete_grammar_with_authorization(){
        $headers = $this->authorization();

        $deleteGrammar = Grammar::factory()->create();

        $response = $this->withHeaders($headers)->delete('/api/grammars/' . $deleteGrammar->id);

        $response->assertStatus(200) 
        ->assertJsonStructure([
            'success'
        ]);
    }

    public function test_delete_grammar_without_authorization(){
        $headers = ['Accept' => 'application/json',];

        $deleteGrammar = Grammar::factory()->create();

        $response = $this->withHeaders($headers)->delete('/api/grammars/' . $deleteGrammar->id);

        $response->assertStatus(401)
            ->assertJson([
                'message' => 'Unauthenticated.',
            ]);
    }
}
