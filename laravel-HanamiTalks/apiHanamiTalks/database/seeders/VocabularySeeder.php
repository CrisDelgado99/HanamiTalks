<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VocabularySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('vocabularies')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1');

        $vocabularyData = [
            [
                "word" => "男の人",
                "kana" => "おとこのひと",
                "romaji" => "otokonohito",
                "translation" => "Man",
                "topicTitle" => "People",
                "level" => 1
            ],
            [
                "word" => "男の子",
                "kana" => "おとこのこ",
                "romaji" => "otokonoko",
                "translation" => "Boy, kid (male)",
                "topicTitle" => "People",
                "level" => 1
            ],
            [
                "word" => "女の人",
                "kana" => "おんなのひと",
                "romaji" => "onnanohito",
                "translation" => "Woman",
                "topicTitle" => "People",
                "level" => 1
            ],
            [
                "word" => "女の子",
                "kana" => "おんなのこ",
                "romaji" => "onnanoko",
                "translation" => "Girl, kid (female)",
                "topicTitle" => "People",
                "level" => 1
            ],
            [
                "word" => "若者",
                "kana" => "わかもの",
                "romaji" => "wakamono",
                "translation" => "Youth, young person",
                "topicTitle" => "People",
                "level" => 1
            ],
            [
                "word" => "少女",
                "kana" => "しょうじょ",
                "romaji" => "shoujo",
                "translation" => "Young woman, girl",
                "topicTitle" => "People",
                "level" => 1
            ],
            [
                "word" => "少年",
                "kana" => "しょうねん",
                "romaji" => "shounen",
                "translation" => "Young man, boy",
                "topicTitle" => "People",
                "level" => 1
            ],
            [
                "word" => "月曜日",
                "kana" => "げつようび",
                "romaji" => "getsuyoubi",
                "translation" => "Monday",
                "topicTitle" => "Days of the Week",
                "level" => 2
            ],
            [
                "word" => "火曜日",
                "kana" => "かようび",
                "romaji" => "kayoubi",
                "translation" => "Tuesday",
                "topicTitle" => "Days of the Week",
                "level" => 2
            ],
            [
                "word" => "水曜日",
                "kana" => "すいようび",
                "romaji" => "suiyoubi",
                "translation" => "Wednesday",
                "topicTitle" => "Days of the Week",
                "level" => 2
            ],
            [
                "word" => "木曜日",
                "kana" => "もくようび",
                "romaji" => "mokuyoubi",
                "translation" => "Thursday",
                "topicTitle" => "Days of the Week",
                "level" => 2
            ],
            [
                "word" => "金曜日",
                "kana" => "きんようび",
                "romaji" => "kinyoubi",
                "translation" => "Friday",
                "topicTitle" => "Days of the Week",
                "level" => 2
            ],
            [
                "word" => "土曜日",
                "kana" => "どようび",
                "romaji" => "doyoubi",
                "translation" => "Saturday",
                "topicTitle" => "Days of the Week",
                "level" => 2
            ],
            [
                "word" => "日曜日",
                "kana" => "にちようび",
                "romaji" => "nichiyoubi",
                "translation" => "Sunday",
                "topicTitle" => "Days of the Week",
                "level" => 2
            ],
            [
                "word" => "一月",
                "kana" => "いちがつ",
                "romaji" => "ichigatsu",
                "translation" => "January",
                "topicTitle" => "Months",
                "level" => 3
            ],
            [
                "word" => "二月",
                "kana" => "にがつ",
                "romaji" => "nigatsu",
                "translation" => "February",
                "topicTitle" => "Months",
                "level" => 3
            ],
            [
                "word" => "三月",
                "kana" => "さんがつ",
                "romaji" => "sangatsu",
                "translation" => "March",
                "topicTitle" => "Months",
                "level" => 3
            ],
            [
                "word" => "四月",
                "kana" => "しがつ",
                "romaji" => "shigatsu",
                "translation" => "April",
                "topicTitle" => "Months",
                "level" => 3
            ],
            [
                "word" => "五月",
                "kana" => "ごがつ",
                "romaji" => "gogatsu",
                "translation" => "May",
                "topicTitle" => "Months",
                "level" => 3
            ],
            [
                "word" => "六月",
                "kana" => "ろくがつ",
                "romaji" => "rokugatsu",
                "translation" => "June",
                "topicTitle" => "Months",
                "level" => 3
            ],
            [
                "word" => "七月",
                "kana" => "しちがつ",
                "romaji" => "shichigatsu",
                "translation" => "July",
                "topicTitle" => "Months",
                "level" => 3
            ],
            [
                "word" => "八月",
                "kana" => "はちがつ",
                "romaji" => "hachigatsu",
                "translation" => "August",
                "topicTitle" => "Months",
                "level" => 3
            ],
            [
                "word" => "九月",
                "kana" => "くがつ",
                "romaji" => "kugatsu",
                "translation" => "September",
                "topicTitle" => "Months",
                "level" => 3
            ],
            [
                "word" => "十月",
                "kana" => "じゅうがつ",
                "romaji" => "juugatsu",
                "translation" => "October",
                "topicTitle" => "Months",
                "level" => 3
            ],
            [
                "word" => "十一月",
                "kana" => "じゅういちがつ",
                "romaji" => "juuichigatsu",
                "translation" => "November",
                "topicTitle" => "Months",
                "level" => 3
            ],
            [
                "word" => "十二月",
                "kana" => "じゅうにがつ",
                "romaji" => "juunigatsu",
                "translation" => "December",
                "topicTitle" => "Months",
                "level" => 3
            ]
        ];

        DB::table('vocabularies')->insert($vocabularyData);
    }
}