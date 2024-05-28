<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GrammarUseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('grammar_uses')->truncate();
        
        $grammarUseData = [
            [
                "title" => "Possessive の Particle",
                "description" => "The の particle is frequently used in Japanese to indicate possession or association between nouns. It is equivalent to the English possessive 's' or 'of'.",
                "example" => "'ジョンの本', 'Jhon no hon', means 'Jhon's book'",
                "grammar_id" => 1
            ],
            [
                "title" => "の to indicate relation to something",
                "description" => "Sometimes, the の particle is used to indicate the relation that someone or something has to other things like towns, courses, groups...",
                "example" => "'この町の人々', 'kono machi no hitobito', means 'The people of this town'",
                "grammar_id" => 1
            ],
            [
                "title" => "Adjective nominalization with の Particle",
                "description" => "Adjectives in Japanese can be nominalized using the の particle to create noun phrases.",
                "example" => "'大きいの家', 'ookii no ie', means 'A big house'",
                "grammar_id" => 1
            ]
        ];

        DB::table('grammar_uses')->insert($grammarUseData);
    }
}
