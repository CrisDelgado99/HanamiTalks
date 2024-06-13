<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Grammar;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\GrammarUse>
 */
class GrammarUseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $grammar = Grammar::factory()->create();
        return [
            'title' => $this->faker->word,
            'description' => $this->faker->sentence,
            'example' => $this->faker->sentence,
            'grammar_id' => $grammar->id,
        ];
    }
}
