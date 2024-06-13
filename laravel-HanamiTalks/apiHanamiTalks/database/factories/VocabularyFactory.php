<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vocabulary>
 */
class VocabularyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'word' => $this->faker->word, 
            'kana' => $this->faker->word,
            'romaji' => $this->faker->word,
            'translation' => $this->faker->word,
            'topicTitle' => $this->faker->word,
            'level' => $this->faker->numberBetween(1, 10),
        ];
    }
}
