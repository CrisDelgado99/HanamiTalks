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
            ],
            [
                "title" => "Numbers 10-99",
                "description" => "To create numbers from 10 to 99, we use the 十 (juu) kanji. Numbers before it represent the tens place, and numbers after it represent the units place.",
                "example" => "'二十三' (nijuu san) means 23",
                "grammar_id" => 4
            ],
            [
                "title" => "Numbers 100-999",
                "description" => "To create numbers from 100 to 999, we use the 百 (hyaku) kanji. Numbers before it represent the hundreds place, and numbers after it represent the tens and units place.",
                "example" => "'四百九十六' (yon hyaku kyuu juu roku) means 496",
                "grammar_id" => 4
            ],
            [
                "title" => "Numbers 1000-9999",
                "description" => "To create numbers from 1000 to 9999, we use the 千 (sen) kanji. Numbers before it represent the thousands place, and numbers after it represent the hundreds.",
                "example" => "'二千三百四十五' (ni sen san byaku yon juu go) means 2345",
                "grammar_id" => 4
            ],
            [
                "title" => "Numbers 10,000-99,999",
                "description" => "To create numbers from 10,000 to 99,999, we use the 万 (man) kanji. Numbers before it represent the ten thousands place, and numbers after it represent the thousands.",
                "example" => "'五万六千七百八十九' (go man roku sen nana hyaku hachi juu kyuu) means 56,789",
                "grammar_id" => 4
            ],
            [
                "title" => "Numbers 100,000-999,999",
                "description" => "To create numbers from 100,000 to 999,999, we use the 十万 (juuman) kanji. Numbers before it represent the hundred thousands place, and numbers after it represent the ten thousands.",
                "example" => "'三十五万四千二百十' (san juu go man yon sen ni hyaku juu) means 354,210",
                "grammar_id" => 4
            ],
            [
                "title" => "Numbers 1,000,000-9,999,999",
                "description" => "To create numbers from 1,000,000 to 9,999,999, we use the 百万 (hyakuman) kanji. Numbers before it represent the millions place, and numbers after it represent the hundred thousands.",
                "example" => "'七百六十五万四千三百二十一' (nana hyaku roku juu go man yon sen san byaku ni juu ichi) means 7,654,321",
                "grammar_id" => 4
            ],
            [
                "title" => "Hours (じ)",
                "description" => "We use the sufix じ, 'ji', after the hour we are refering to.",
                "example" => "'五じ', 'go ji', means 5 hours.",
                "grammar_id" => 5
            ],
            [
                "title" => "Minutes (ぷん、ふん)",
                "description" => "If the minutes end in a consonant, we use ふん, 'fun'. If they don't, we use ぷん, 'pun'",
                "example" => "'十五ふん', 'juugofun', means 15 minutes.",
                "grammar_id" => 5
            ],
            [
                "title" => "Seconds (びょう)",
                "description" => "We use the sufix びょう, 'byou', after the seconds.",
                "example" => "'十びょう', 'juubyou', means 10 seconds.",
                "grammar_id" => 5
            ],
            [
                "title" => "Duration in hours (かん)",
                "description" => "We usually use the sufix かん, 'kan', tu reffer to the duration of something. It doesn't work with minutes, just hours.",
                "example" => "'ニじかんニ十っぷんかかります', 'nijikan nijippun kakarimasu', means 'It takes 2 hours and 20 minutes'.",
                "grammar_id" => 5
            ],
            [
                "title" => "Time o'clock (ちょうど)",
                "description" => "We add the word ちょうど, 'choudo', before an hour to express it is that time o'clock.",
                "example" => "'ちょうど五じです', 'choudo go ji', means it's 5 o'clock.",
                "grammar_id" => 6
            ],
            [
                "title" => "Half past hour (はん)",
                "description" => "When we want to say it's half past an hour, we use the word 'はん', 'han'",
                "example" => "'七じはんです', 'nanaji han desu', means it's 7:30.",
                "grammar_id" => 6
            ],
            [
                "title" => "Minutes past hour",
                "description" => "When we want to say that the time is past an hour, before half an hour, we just say the hour and then the minutes (Adding the sufixes)",
                "example" => "'九じ十五ふんです', 'kuji juugofun desu', means it's 9:15.",
                "grammar_id" => 6
            ]
        ];

        DB::table('grammar_uses')->insert($grammarUseData);
    }
}
