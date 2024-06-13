<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use App\Models\Kanji;

class KanjiTest extends TestCase
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

    public function test_fetch_kanji_with_authorization()
    {
        $headers = $this->authorization();

        $response = $this->withHeaders($headers)->get('/api/kanjis');

        $response->assertStatus(200)
            ->assertJsonStructure([
                'data' => [
                    '*' => [
                        'symbol',
                        'kunyomi',
                        'onyomi',
                        'translation',
                        'topicTitle',
                        'level'
                    ],
                ],
            ]);
    }

    public function test_fetch_kanji_without_authorization()
    {
        $response = $this->withHeaders(['Accept' => 'application/json',])->get('/api/kanjis');

        $response->assertStatus(401)
            ->assertJson([
                'message' => 'Unauthenticated.',
            ]);
    }

    public function test_fetch_single_kanji_with_authorization()
    {
        $headers = $this->authorization();

        $kanji = Kanji::factory()->create();

        $response = $this->withHeaders($headers)->get('/api/kanjis/' . $kanji->id);

        $response->assertStatus(200)
            ->assertJsonStructure([
                'data' => [
                    'symbol',
                    'kunyomi',
                    'onyomi',
                    'translation',
                    'topicTitle',
                    'level'
                ],
            ]);
    }

    public function test_fetch_single_kanji_without_authorization()
    {
        $kanji = Kanji::factory()->create();
        $response = $this->withHeaders(['Accept' => 'application/json',])->get('/api/kanjis/' . $kanji->id);

        $response->assertStatus(401)
            ->assertJson([
                'message' => 'Unauthenticated.',
            ]);
    }

    public function test_create_kanji_with_authorization()
    {
        $headers = $this->authorization();

        $newKanji = [
            'symbol' => '水',
            'kunyomi' => 'みず',
            'onyomi' => 'いどんと',
            'translation' => 'Water',
            'topicTitle' => 'Test topic',
            'level' => 1
        ];

        $response = $this->withHeaders($headers)->post('/api/kanjis', $newKanji);

        $response->assertStatus(201)
            ->assertJsonStructure([
                'data' => [
                    'symbol',
                    'kunyomi',
                    'onyomi',
                    'translation',
                    'topicTitle',
                    'level'
                ],
            ]);
    }

    public function test_create_kanji_without_authorization()
    {
        $headers = ['Accept' => 'application/json',];

        $newKanji = [
            'symbol' => '水',
            'kunyomi' => 'みず',
            'onyomi' => 'いどんと',
            'translation' => 'Water',
            'topicTitle' => 'Test topic',
            'level' => 1
        ];

        $response = $this->withHeaders($headers)->post('/api/kanjis', $newKanji);

        $response->assertStatus(401)
            ->assertJson([
                'message' => 'Unauthenticated.',
            ]);
    }

    public function test_update_kanji_with_authorization()
    {
        $headers = $this->authorization();

        $prevKanji = Kanji::factory()->create();

        $updateKanji = [
            'symbol' => '水',
            'kunyomi' => 'みず',
            'onyomi' => 'いどんと',
            'translation' => 'Water',
            'topicTitle' => 'Test topic',
            'level' => 1
        ];

        $response = $this->withHeaders($headers)->put('/api/kanjis/' . $prevKanji->id, $updateKanji);

        $response->assertStatus(200)
            ->assertJsonStructure([
                'data' => [
                    'symbol',
                    'kunyomi',
                    'onyomi',
                    'translation',
                    'topicTitle',
                    'level'
                ],
            ]);
    }

    public function test_update_kanji_without_authorization()
    {
        $headers = ['Accept' => 'application/json',];

        $prevKanji = Kanji::factory()->create();

        $updateKanji = [
            'symbol' => '水',
            'kunyomi' => 'みず',
            'onyomi' => 'いどんと',
            'translation' => 'Water',
            'topicTitle' => 'Test topic',
            'level' => 1
        ];

        $response = $this->withHeaders($headers)->put('/api/kanjis/' . $prevKanji->id, $updateKanji);

        $response->assertStatus(401)
            ->assertJson([
                'message' => 'Unauthenticated.',
            ]);
    }

    public function test_delete_kanji_with_authorization(){
        $headers = $this->authorization();

        $deleteKanji = Kanji::factory()->create();

        $response = $this->withHeaders($headers)->delete('/api/kanjis/' . $deleteKanji->id);

        $response->assertStatus(200) 
        ->assertJsonStructure([
            'success'
        ]);
    }

    public function test_delete_kanji_without_authorization(){
        $headers = ['Accept' => 'application/json',];

        $deleteKanji = Kanji::factory()->create();

        $response = $this->withHeaders($headers)->delete('/api/kanjis/' . $deleteKanji->id);

        $response->assertStatus(401)
            ->assertJson([
                'message' => 'Unauthenticated.',
            ]);
    }
}
