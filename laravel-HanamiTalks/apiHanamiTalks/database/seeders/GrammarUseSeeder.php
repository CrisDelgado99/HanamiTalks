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
            ],
            [
                "title" => "Indicating the Topic with は Particle",
                "description" => "The は particle is used to indicate the topic of a sentence, highlighting what the sentence is about. It sets the context for the rest of the sentence.",
                "example" => "'私は学生です', 'Watashi wa gakusei desu', means 'I am a student'. Here, は indicates that 'I' is the topic of the sentence.",
                "grammar_id" => 2
            ],
            [
                "title" => "が Particle to Mark the Subject",
                "description" => "The が particle is used to mark the grammatical subject of a sentence, highlighting who or what performs the action.",
                "example" => "'猫が好きです', 'Neko ga suki desu', means 'I like cats'. Here, が indicates that 'cats' is the subject of the sentence.",
                "grammar_id" => 3
            ],
            [
                "title" => "が Particle in Questions",
                "description" => "The が particle can be used after a question word to indicate the subject of the question.",
                "example" => "'誰がしましたか', 'Dare ga shimashita ka', means 'Who did it?'",
                "grammar_id" => 3
            ]
        ];

        DB::table('grammar_uses')->insert($grammarUseData);
    }
}
