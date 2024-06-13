<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use App\Models\GrammarUse;
use App\Models\Grammar;

class GrammarUseTest extends TestCase
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

    public function test_fetch_grammar_use_with_authorization()
    {
        $headers = $this->authorization();

        $response = $this->withHeaders($headers)->get('/api/grammarUses');

        $response->assertStatus(200)
            ->assertJsonStructure([
                'data' => [
                    '*' => [
                        'title',
                        'description',
                        'example',
                        'grammar_id',
                    ],
                ],
            ]);
    }

    public function test_fetch_grammar_use_without_authorization()
    {
        $response = $this->withHeaders(['Accept' => 'application/json',])->get('/api/grammarUses');

        $response->assertStatus(401)
            ->assertJson([
                'message' => 'Unauthenticated.',
            ]);
    }

    public function test_fetch_single_grammar_use_with_authorization()
    {
        $headers = $this->authorization();

        $grammarUse = GrammarUse::factory()->create();

        $response = $this->withHeaders($headers)->get('/api/grammarUses/' . $grammarUse->id);

        $response->assertStatus(200)
            ->assertJsonStructure([
                'data' => [
                    'title',
                    'description',
                    'example',
                    'grammar_id',
                ],
            ]);
    }

    public function test_fetch_single_grammar_use_without_authorization()
    {

        $grammarUse = GrammarUse::factory()->create();

        $response = $this->withHeaders(['Accept' => 'application/json',])->get('/api/grammarUses/' . $grammarUse->id);

        $response->assertStatus(401)
            ->assertJson([
                'message' => 'Unauthenticated.',
            ]);
    }

    public function test_create_grammar_use_with_authorization()
    {
        $headers = $this->authorization();

        $grammar = Grammar::factory()->create();

        $newGrammarUse = [
            'title' => 'Title',
            'description' => 'This is a test description',
            'example' => 'This is a test example',
            'grammar_id' => $grammar->id
        ];

        $response = $this->withHeaders($headers)->post('/api/grammarUses', $newGrammarUse);

        $response->assertStatus(201)
        ->assertJsonStructure([
            'data' => [
                'title',
                'description',
                'example',
                'grammar_id',
            ],
        ]);
    }

    public function test_create_grammar_use_without_authorization()
    {
        $headers = ['Accept' => 'application/json',];

        $grammar = Grammar::factory()->create();

        $newGrammarUse = [
            'title' => 'Title',
            'description' => 'This is a test description',
            'example' => 'This is a test example',
            'grammar_id' => $grammar->id
        ];

        $response = $this->withHeaders($headers)->post('/api/grammarUses', $newGrammarUse);

        $response->assertStatus(401)
            ->assertJson([
                'message' => 'Unauthenticated.',
            ]);
    }

    public function test_update_grammar_use_with_authorization()
    {
        $headers = $this->authorization();

        $prevGrammarUse = GrammarUse::factory()->create();

        $updateGrammarUse = [
            'title' => 'Title',
            'description' => 'This is a test description',
            'example' => 'This is a test example',
            'grammar_id' => $prevGrammarUse->grammar_id
        ];

        $response = $this->withHeaders($headers)->put('/api/grammarUses/' . $prevGrammarUse->id, $updateGrammarUse);

        $response->assertStatus(200)
        ->assertJsonStructure([
            'data' => [
                'title',
                'description',
                'example',
                'grammar_id',
            ],
        ]);
    }

    public function test_update_grammar_use_without_authorization()
    {
        $headers = ['Accept' => 'application/json',];

        $prevGrammarUse = GrammarUse::factory()->create();

        $updateGrammarUse = [
            'title' => 'Title',
            'description' => 'This is a test description',
            'example' => 'This is a test example',
            'grammar_id' => $prevGrammarUse->grammar_id
        ];

        $response = $this->withHeaders($headers)->put('/api/grammarUses/' . $prevGrammarUse->id, $updateGrammarUse);

        $response->assertStatus(401)
            ->assertJson([
                'message' => 'Unauthenticated.',
            ]);
    }

    public function test_delete_grammar_use_with_authorization(){
        $headers = $this->authorization();

        $deleteGrammarUse = GrammarUse::factory()->create();

        $response = $this->withHeaders($headers)->delete('/api/grammarUses/' . $deleteGrammarUse->id);

        $response->assertStatus(200) 
        ->assertJsonStructure([
            'success'
        ]);
    }

    public function test_delete_grammar_use_without_authorization(){
        $headers = ['Accept' => 'application/json',];

        $deleteGrammarUse = GrammarUse::factory()->create();

        $response = $this->withHeaders($headers)->delete('/api/grammarUses/' . $deleteGrammarUse->id);

        $response->assertStatus(401)
            ->assertJson([
                'message' => 'Unauthenticated.',
            ]);
    }
}
