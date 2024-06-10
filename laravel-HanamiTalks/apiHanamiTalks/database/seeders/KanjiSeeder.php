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
                "symbol" => "川",
                "kunyomi" => "かわ",
                "onyomi" => "セン",
                "translation" => "River",
                "topicTitle" => "Nature 2",
                "level" => 4
            ],
            [
                "symbol" => "海",
                "kunyomi" => "うみ",
                "onyomi" => "カイ",
                "translation" => "Sea, ocean",
                "topicTitle" => "Nature 2",
                "level" => 4
            ],
            [
                "symbol" => "湖",
                "kunyomi" => "みずうみ",
                "onyomi" => "コ",
                "translation" => "Lake",
                "topicTitle" => "Nature 2",
                "level" => 4
            ],
            [
                "symbol" => "森",
                "kunyomi" => "もり",
                "onyomi" => "シン",
                "translation" => "Forest",
                "topicTitle" => "Nature 2",
                "level" => 4
            ],
            [
                "symbol" => "林",
                "kunyomi" => "はやし",
                "onyomi" => "リン",
                "translation" => "Grove",
                "topicTitle" => "Nature 2",
                "level" => 4
            ],
            [
                "symbol" => "右",
                "kunyomi" => "みぎ",
                "onyomi" => "ウ、ユウ",
                "translation" => "Right",
                "topicTitle" => "Directions",
                "level" => 5
            ],
            [
                "symbol" => "左",
                "kunyomi" => "ひだり",
                "onyomi" => "サ",
                "translation" => "Left",
                "topicTitle" => "Directions",
                "level" => 5
            ],
            [
                "symbol" => "北",
                "kunyomi" => "きた",
                "onyomi" => "ホク",
                "translation" => "North",
                "topicTitle" => "Directions",
                "level" => 5
            ],
            [
                "symbol" => "南",
                "kunyomi" => "みなみ",
                "onyomi" => "ナン",
                "translation" => "South",
                "topicTitle" => "Directions",
                "level" => 5
            ],
            [
                "symbol" => "東",
                "kunyomi" => "ひがし",
                "onyomi" => "トウ",
                "translation" => "East",
                "topicTitle" => "Directions",
                "level" => 5
            ],
            [
                "symbol" => "西",
                "kunyomi" => "にし",
                "onyomi" => "セイ",
                "translation" => "West",
                "topicTitle" => "Directions",
                "level" => 5
            ],
            [
                "symbol" => "上",
                "kunyomi" => "うえ",
                "onyomi" => "ジョウ",
                "translation" => "Up",
                "topicTitle" => "Directions",
                "level" => 5
            ],
            [
                "symbol" => "下",
                "kunyomi" => "した",
                "onyomi" => "カ、ゲ",
                "translation" => "Down",
                "topicTitle" => "Directions",
                "level" => 5
            ],
            [
                "symbol" => "国",
                "kunyomi" => "くに",
                "onyomi" => "コク",
                "translation" => "Country",
                "topicTitle" => "Geography",
                "level" => 6
            ],
            [
                "symbol" => "島",
                "kunyomi" => "しま",
                "onyomi" => "トウ",
                "translation" => "Island",
                "topicTitle" => "Geography",
                "level" => 6
            ],
            [
                "symbol" => "谷",
                "kunyomi" => "たに",
                "onyomi" => "コク",
                "translation" => "Valley",
                "topicTitle" => "Geography",
                "level" => 6
            ],
            [
                "symbol" => "体",
                "kunyomi" => "からだ",
                "onyomi" => "タイ",
                "translation" => "Body",
                "topicTitle" => "Parts of the Body",
                "level" => 7
            ],
            [
                "symbol" => "手",
                "kunyomi" => "て",
                "onyomi" => "シュ",
                "translation" => "Hand",
                "topicTitle" => "Parts of the Body",
                "level" => 7
            ],
            [
                "symbol" => "目",
                "kunyomi" => "め",
                "onyomi" => "モク",
                "translation" => "Eye",
                "topicTitle" => "Parts of the Body",
                "level" => 7
            ],
            [
                "symbol" => "耳",
                "kunyomi" => "みみ",
                "onyomi" => "ジ",
                "translation" => "Ear",
                "topicTitle" => "Parts of the Body",
                "level" => 7
            ],
            [
                "symbol" => "足",
                "kunyomi" => "あし",
                "onyomi" => "ソク",
                "translation" => "Leg/Foot",
                "topicTitle" => "Parts of the Body",
                "level" => 7
            ],
            [
                "symbol" => "鼻",
                "kunyomi" => "はな",
                "onyomi" => "ビ",
                "translation" => "Nose",
                "topicTitle" => "Parts of the Body",
                "level" => 7
            ],
            [
                "symbol" => "口",
                "kunyomi" => "くち",
                "onyomi" => "コウ",
                "translation" => "Mouth",
                "topicTitle" => "Parts of the Body",
                "level" => 7
            ],
            [
                "symbol" => "首",
                "kunyomi" => "くび",
                "onyomi" => "シュ",
                "translation" => "Neck",
                "topicTitle" => "Parts of the Body",
                "level" => 7
            ],
            [
                "symbol" => "腕",
                "kunyomi" => "うで",
                "onyomi" => "ワン",
                "translation" => "Arm",
                "topicTitle" => "Parts of the Body",
                "level" => 7
            ]
        ];

        DB::table('kanjis')->insert($kanjiData);
    }
}