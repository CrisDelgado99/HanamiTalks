<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KanjiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('kanjis')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1');

        $kanjiData = [
            [
                "symbol" => "一",
                "kunyomi" => "ひと",
                "onyomi" => "イチ、イツ",
                "translation" => "One",
                "topicTitle" => "Numbers",
                "level" => 1
            ],
            [
                "symbol" => "二",
                "kunyomi" => "ふた",
                "onyomi" => "ニ",
                "translation" => "Two",
                "topicTitle" => "Numbers",
                "level" => 1
            ],
            [
                "symbol" => "三",
                "kunyomi" => "みっつ",
                "onyomi" => "サン",
                "translation" => "Three",
                "topicTitle" => "Numbers",
                "level" => 1
            ],
            [
                "symbol" => "四",
                "kunyomi" => "よっつ",
                "onyomi" => "ヨン",
                "translation" => "Four",
                "topicTitle" => "Numbers",
                "level" => 1
            ],
            [
                "symbol" => "五",
                "kunyomi" => "いつつ",
                "onyomi" => "ゴ",
                "translation" => "Five",
                "topicTitle" => "Numbers",
                "level" => 1
            ],
            [
                "symbol" => "六",
                "kunyomi" => "むっつ",
                "onyomi" => "ロク",
                "translation" => "Six",
                "topicTitle" => "Numbers",
                "level" => 1
            ],
            [
                "symbol" => "七",
                "kunyomi" => "ななつ",
                "onyomi" => "ナナ、シチ",
                "translation" => "Seven",
                "topicTitle" => "Numbers",
                "level" => 1
            ],
            [
                "symbol" => "八",
                "kunyomi" => "やっつ",
                "onyomi" => "ハチ",
                "translation" => "Eight",
                "topicTitle" => "Numbers",
                "level" => 1
            ],
            [
                "symbol" => "九",
                "kunyomi" => "ここのつ",
                "onyomi" => "キュウ",
                "translation" => "Nine",
                "topicTitle" => "Numbers",
                "level" => 1
            ],
            [
                "symbol" => "十",
                "kunyomi" => "とお",
                "onyomi" => "ジュウ",
                "translation" => "Ten",
                "topicTitle" => "Numbers",
                "level" => 1
            ],
            [
                "symbol" => "百",
                "kunyomi" => "ひゃく",
                "onyomi" => "ヒャク",
                "translation" => "Hundred",
                "topicTitle" => "Numbers 2",
                "level" => 2
            ],
            [
                "symbol" => "千",
                "kunyomi" => "せん",
                "onyomi" => "セン",
                "translation" => "Thousand",
                "topicTitle" => "Numbers 2",
                "level" => 2
            ],
            [
                "symbol" => "万",
                "kunyomi" => "よろず",
                "onyomi" => "マン",
                "translation" => "Ten Thousand",
                "topicTitle" => "Numbers 2",
                "level" => 2
            ],
            [
                "symbol" => "水",
                "kunyomi" => "みず",
                "onyomi" => "スイ",
                "translation" => "Water",
                "topicTitle" => "Nature",
                "level" => 3
            ],
            [
                "symbol" => "木",
                "kunyomi" => "き",
                "onyomi" => "ボク、モク",
                "translation" => "Tree",
                "topicTitle" => "Nature",
                "level" => 3
            ],
            [
                "symbol" => "火",
                "kunyomi" => "ひ",
                "onyomi" => "カ",
                "translation" => "Fire",
                "topicTitle" => "Nature",
                "level" => 3
            ],
            [
                "symbol" => "土",
                "kunyomi" => "つち",
                "onyomi" => "ド、ト",
                "translation" => "Ground, Earth",
                "topicTitle" => "Nature",
                "level" => 3
            ],
            [
                "symbol" => "日",
                "kunyomi" => "ひ、か",
                "onyomi" => "ニチ、ジツ",
                "translation" => "Day, Sun",
                "topicTitle" => "Nature",
                "level" => 3
            ],
            [
                "symbol" => "月",
                "kunyomi" => "つき",
                "onyomi" => "ガツ、ゲツ",
                "translation" => "Moon",
                "topicTitle" => "Nature",
                "level" => 3
            ],
            [
                "symbol" => "花",
                "kunyomi" => "はな",
                "onyomi" => "カ",
                "translation" => "Flower",
                "topicTitle" => "Nature",
                "level" => 3
            ],
            [
                "symbol" => "山",
                "kunyomi" => "やま",
                "onyomi" => "サン",
                "translation" => "Mountain",
                "topicTitle" => "Nature",
                "level" => 3
            ],
            [
                "symbol" => "右",
                "kunyomi" => "みぎ",
                "onyomi" => "ウ、ユウ",
                "translation" => "Right",
                "topicTitle" => "Directions",
                "level" => 4
            ],
            [
                "symbol" => "左",
                "kunyomi" => "ひだり",
                "onyomi" => "サ",
                "translation" => "Left",
                "topicTitle" => "Directions",
                "level" => 4
            ],
            [
                "symbol" => "北",
                "kunyomi" => "きた",
                "onyomi" => "ホク",
                "translation" => "North",
                "topicTitle" => "Directions",
                "level" => 4
            ],
            [
                "symbol" => "南",
                "kunyomi" => "みなみ",
                "onyomi" => "ナン",
                "translation" => "South",
                "topicTitle" => "Directions",
                "level" => 4
            ],
            [
                "symbol" => "東",
                "kunyomi" => "ひがし",
                "onyomi" => "トウ",
                "translation" => "East",
                "topicTitle" => "Directions",
                "level" => 4
            ],
            [
                "symbol" => "西",
                "kunyomi" => "にし",
                "onyomi" => "セイ",
                "translation" => "West",
                "topicTitle" => "Directions",
                "level" => 4
            ]
        ];

        DB::table('kanjis')->insert($kanjiData);
    }
}