<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use App\Models\Vocabulary;

class VocabularyTest extends TestCase
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

    public function test_fetch_vocabulary_with_authorization()
    {
        $headers = $this->authorization();

        $response = $this->withHeaders($headers)->get('/api/vocabularies');

        $response->assertStatus(200)
            ->assertJsonStructure([
                'data' => [
                    '*' => [
                        'word',
                        'kana',
                        'romaji',
                        'translation',
                        'topicTitle',
                        'level'
                    ],
                ],
            ]);
    }

    public function test_fetch_vocabulary_without_authorization()
    {
        $response = $this->withHeaders(['Accept' => 'application/json',])->get('/api/vocabularies');

        $response->assertStatus(401)
            ->assertJson([
                'message' => 'Unauthenticated.',
            ]);
    }

    public function test_fetch_single_vocabulary_with_authorization()
    {
        $headers = $this->authorization();

        $vocabulary = Vocabulary::factory()->create();

        $response = $this->withHeaders($headers)->get('/api/vocabularies/' . $vocabulary->id);

        $response->assertStatus(200)
            ->assertJsonStructure([
                'data' => [
                    'word',
                    'kana',
                    'romaji',
                    'translation',
                    'topicTitle',
                    'level'
                ],
            ]);
    }

    public function test_fetch_single_vocabulary_without_authorization()
    {
        $vocabulary = Vocabulary::factory()->create();

        $response = $this->withHeaders(['Accept' => 'application/json',])->get('/api/vocabularies/' . $vocabulary->id);

        $response->assertStatus(401)
            ->assertJson([
                'message' => 'Unauthenticated.',
            ]);
    }

    public function test_create_vocabulary_with_authorization()
    {
        $headers = $this->authorization();

        $newVocabulary = [
            'word' => '水',
            'kana' => 'みず',
            'romaji' => 'mizu',
            'translation' => 'Water',
            'topicTitle' => 'Test topic',
            'level' => 1
        ];

        $response = $this->withHeaders($headers)->post('/api/vocabularies', $newVocabulary);

        $response->assertStatus(201)
            ->assertJsonStructure([
                'data' => [
                    'word',
                    'kana',
                    'romaji',
                    'translation',
                    'topicTitle',
                    'level'
                ],
            ]);
    }

    public function test_create_vocabulary_without_authorization()
    {
        $headers = ['Accept' => 'application/json',];

        $newVocabulary = [
            'word' => '水',
            'kana' => 'みず',
            'romaji' => 'mizu',
            'translation' => 'Water',
            'topicTitle' => 'Test topic',
            'level' => 1
        ];

        $response = $this->withHeaders($headers)->post('/api/vocabularies', $newVocabulary);

        $response->assertStatus(401)
            ->assertJson([
                'message' => 'Unauthenticated.',
            ]);
    }

    public function test_update_vocabulary_with_authorization()
    {
        $headers = $this->authorization();

        $prevVocabulary = Vocabulary::factory()->create();

        $updateVocabulary = [
            'word' => '水',
            'kana' => 'みず',
            'romaji' => 'mizu',
            'translation' => 'Water',
            'topicTitle' => 'Test topic',
            'level' => 1
        ];

        $response = $this->withHeaders($headers)->put('/api/vocabularies/' . $prevVocabulary->id, $updateVocabulary);

        $response->assertStatus(200)
            ->assertJsonStructure([
                'data' => [
                    'word',
                    'kana',
                    'romaji',
                    'translation',
                    'topicTitle',
                    'level'
                ],
            ]);
    }

    public function test_update_vocabulary_without_authorization()
    {
        $headers = ['Accept' => 'application/json',];

        $prevVocabulary = Vocabulary::factory()->create();

        $updateVocabulary = [
            'word' => '水',
            'kana' => 'みず',
            'romaji' => 'mizu',
            'translation' => 'Water',
            'topicTitle' => 'Test topic',
            'level' => 1
        ];

        $response = $this->withHeaders($headers)->put('/api/vocabularies/' . $prevVocabulary->id, $updateVocabulary);

        $response->assertStatus(401)
            ->assertJson([
                'message' => 'Unauthenticated.',
            ]);
    }

    public function test_delete_vocabulary_with_authorization(){
        $headers = $this->authorization();

        $deleteVocabulary = Vocabulary::factory()->create();

        $response = $this->withHeaders($headers)->delete('/api/vocabularies/' . $deleteVocabulary->id);

        $response->assertStatus(200) 
        ->assertJsonStructure([
            'success'
        ]);
    }

    public function test_delete_vocabulary_without_authorization(){
        $headers = ['Accept' => 'application/json',];

        $deleteVocabulary = Vocabulary::factory()->create();

        $response = $this->withHeaders($headers)->delete('/api/vocabularies/' . $deleteVocabulary->id);

        $response->assertStatus(401)
            ->assertJson([
                'message' => 'Unauthenticated.',
            ]);
    }
}
