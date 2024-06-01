<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GrammarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('grammars')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1');

        $grammarData = [
            [
                "topicTitle" => "の Particle",
                "description" => 'The の particle in Japanese is used to indicate possession or association between nouns. It can also be used to create noun modifiers.',
                "level" => 1
            ],
            [
                "topicTitle" => "は Particle",
                "description" => "By placing the は particle after a noun, pronoun or grammatical subject, we can indicate that it is the topic of a sentence. Even though it is written like 'は', 'ha', it is pronounced as 'wa'.",
                "level" => 2
            ],
            [
                "topicTitle" => "が Particle",
                "description" => "The が particle is often used to indicate who or what performs the action of the verb. Unlike the は particle which indicates the topic, the が particle emphasizes the subject.",
                "level" => 3
            ]
        ];

        DB::table('grammars')->insert($grammarData);
    }
}
