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
            ],
            [
                "word" => "スペイン",
                "kana" => "スペイン",
                "romaji" => "supein",
                "translation" => "Spain",
                "topicTitle" => "Countries",
                "level" => 4
            ],
            [
                "word" => "中国",
                "kana" => "ちゅうごく",
                "romaji" => "chuugoku",
                "translation" => "China",
                "topicTitle" => "Countries",
                "level" => 4
            ],
            [
                "word" => "韓国",
                "kana" => "かんこく",
                "romaji" => "kankoku",
                "translation" => "Korea",
                "topicTitle" => "Countries",
                "level" => 4
            ],
            [
                "word" => "日本",
                "kana" => "にほん",
                "romaji" => "nihon",
                "translation" => "Japan",
                "topicTitle" => "Countries",
                "level" => 4
            ],
            [
                "word" => "フランス",
                "kana" => "フランス",
                "romaji" => "furansu",
                "translation" => "France",
                "topicTitle" => "Countries",
                "level" => 4
            ],
            [
                "word" => "イギリス",
                "kana" => "イギリス",
                "romaji" => "igirisu",
                "translation" => "England",
                "topicTitle" => "Countries",
                "level" => 4
            ],
            [
                "word" => "イタリア",
                "kana" => "イタリア",
                "romaji" => "itaria",
                "translation" => "Italy",
                "topicTitle" => "Countries",
                "level" => 4
            ],
            [
                "word" => "ドイツ",
                "kana" => "ドイツ",
                "romaji" => "doitsu",
                "translation" => "Germany",
                "topicTitle" => "Countries",
                "level" => 4
            ],
            [
                "word" => "アメリカ",
                "kana" => "アメリカ",
                "romaji" => "amerika",
                "translation" => "United States",
                "topicTitle" => "Countries",
                "level" => 4
            ],
            [
                "word" => "カナダ",
                "kana" => "カナダ",
                "romaji" => "kanada",
                "translation" => "Canada",
                "topicTitle" => "Countries",
                "level" => 4
            ],
            [
                "word" => "タイ",
                "kana" => "タイ",
                "romaji" => "tai",
                "translation" => "Thailand",
                "topicTitle" => "Countries 2",
                "level" => 5
            ],
            [
                "word" => "インド",
                "kana" => "インド",
                "romaji" => "indo",
                "translation" => "India",
                "topicTitle" => "Countries 2",
                "level" => 5
            ],
            [
                "word" => "モルドバ",
                "kana" => "モルドバ",
                "romaji" => "morudoba",
                "translation" => "Moldova",
                "topicTitle" => "Countries 2",
                "level" => 5
            ],
            [
                "word" => "スウェーデン",
                "kana" => "スウェーデン",
                "romaji" => "suweeden",
                "translation" => "Sweden",
                "topicTitle" => "Countries 2",
                "level" => 5
            ],
            [
                "word" => "ブラジル",
                "kana" => "ブラジル",
                "romaji" => "burajiru",
                "translation" => "Brazil",
                "topicTitle" => "Countries 2",
                "level" => 5
            ],
            [
                "word" => "アルゼンチン",
                "kana" => "アルゼンチン",
                "romaji" => "aruzenchin",
                "translation" => "Argentina",
                "topicTitle" => "Countries 2",
                "level" => 5
            ],
            [
                "word" => "ロシア",
                "kana" => "ロシア",
                "romaji" => "roshia",
                "translation" => "Russia",
                "topicTitle" => "Countries 2",
                "level" => 5
            ],
            [
                "word" => "オーストラリア",
                "kana" => "オーストラリア",
                "romaji" => "oosutoraria",
                "translation" => "Australia",
                "topicTitle" => "Countries 2",
                "level" => 5
            ],
            [
                "word" => "エジプト",
                "kana" => "エジプト",
                "romaji" => "ejiputo",
                "translation" => "Egypt",
                "topicTitle" => "Countries 2",
                "level" => 5
            ],
            [
                "word" => "南アフリカ",
                "kana" => "みなみアフリカ",
                "romaji" => "minami afurika",
                "translation" => "South Africa",
                "topicTitle" => "Countries 2",
                "level" => 5
            ],
            [
                "word" => "アジア",
                "kana" => "アジア",
                "romaji" => "ajia",
                "translation" => "Asia",
                "topicTitle" => "Continents",
                "level" => 6
            ],
            [
                "word" => "ヨーロッパ",
                "kana" => "ヨーロッパ",
                "romaji" => "yooroppa",
                "translation" => "Europe",
                "topicTitle" => "Continents",
                "level" => 6
            ],
            [
                "word" => "アフリカ",
                "kana" => "アフリカ",
                "romaji" => "afurika",
                "translation" => "Africa",
                "topicTitle" => "Continents",
                "level" => 6
            ],
            [
                "word" => "北アメリカ",
                "kana" => "きたアメリカ",
                "romaji" => "kita amerika",
                "translation" => "North America",
                "topicTitle" => "Continents",
                "level" => 6
            ],
            [
                "word" => "南アメリカ",
                "kana" => "みなみアメリカ",
                "romaji" => "minami amerika",
                "translation" => "South America",
                "topicTitle" => "Continents",
                "level" => 6
            ],
            [
                "word" => "オセアニア",
                "kana" => "オセアニア",
                "romaji" => "oseania",
                "translation" => "Oceania",
                "topicTitle" => "Continents",
                "level" => 6
            ],
            [
                "word" => "南極",
                "kana" => "なんきょく",
                "romaji" => "nankyoku",
                "translation" => "Antarctica",
                "topicTitle" => "Continents",
                "level" => 6
            ],
            [
                "word" => "北極",
                "kana" => "ほっきょく",
                "romaji" => "hokkyoku",
                "translation" => "Arctic",
                "topicTitle" => "Continents",
                "level" => 6
            ],
            [
                "word" => "コンピュータ",
                "kana" => "コンピュータ",
                "romaji" => "konpyu-ta",
                "translation" => "Computer",
                "topicTitle" => "Technology",
                "level" => 7
            ],
            [
                "word" => "ヘッドフォン",
                "kana" => "ヘッドフォン",
                "romaji" => "heddofon",
                "translation" => "Headphones",
                "topicTitle" => "Technology",
                "level" => 7
            ],
            [
                "word" => "マウス",
                "kana" => "マウス",
                "romaji" => "mausu",
                "translation" => "Mouse",
                "topicTitle" => "Technology",
                "level" => 7
            ],
            [
                "word" => "キーボード",
                "kana" => "キーボード",
                "romaji" => "kiiboodo",
                "translation" => "Keyboard",
                "topicTitle" => "Technology",
                "level" => 7
            ],
            [
                "word" => "スマートフォン",
                "kana" => "スマートフォン",
                "romaji" => "sumaato foon",
                "translation" => "Smartphone",
                "topicTitle" => "Technology",
                "level" => 7
            ],
            [
                "word" => "タブレット",
                "kana" => "タブレット",
                "romaji" => "taburetto",
                "translation" => "Tablet",
                "topicTitle" => "Technology",
                "level" => 7
            ],
            [
                "word" => "ラップトップ",
                "kana" => "ラップトップ",
                "romaji" => "rapputoppu",
                "translation" => "Laptop",
                "topicTitle" => "Technology",
                "level" => 7
            ],
            [
                "word" => "プリンター",
                "kana" => "プリンター",
                "romaji" => "purintaa",
                "translation" => "Printer",
                "topicTitle" => "Technology",
                "level" => 7
            ],
            [
                "word" => "カメラ",
                "kana" => "カメラ",
                "romaji" => "kamera",
                "translation" => "Camera",
                "topicTitle" => "Technology",
                "level" => 7
            ],
            [
                "word" => "携帯電話",
                "kana" => "けいたいでんわ",
                "romaji" => "keitai denwa",
                "translation" => "Mobile phone",
                "topicTitle" => "Technology 2",
                "level" => 8
            ],
            [
                "word" => "コンピュータープログラム",
                "kana" => "コンピュータープログラム",
                "romaji" => "konpyuutaa puroguramu",
                "translation" => "Computer program",
                "topicTitle" => "Technology 2",
                "level" => 8
            ],
            [
                "word" => "ウェブサイト",
                "kana" => "ウェブサイト",
                "romaji" => "uebusaito",
                "translation" => "Website",
                "topicTitle" => "Technology 2",
                "level" => 8
            ],
            [
                "word" => "電子書籍",
                "kana" => "でんししょせき",
                "romaji" => "denshi shoseki",
                "translation" => "E-book",
                "topicTitle" => "Technology 2",
                "level" => 8
            ],
            [
                "word" => "人工知能",
                "kana" => "じんこうちのう",
                "romaji" => "jinkou chinou",
                "translation" => "Artificial intelligence",
                "topicTitle" => "Technology 2",
                "level" => 8
            ],
            [
                "word" => "仮想現実",
                "kana" => "かそうげんじつ",
                "romaji" => "kasou genjitsu",
                "translation" => "Virtual reality",
                "topicTitle" => "Technology 2",
                "level" => 8
            ],
            [
                "word" => "データベース",
                "kana" => "データベース",
                "romaji" => "deeta beesu",
                "translation" => "Database",
                "topicTitle" => "Technology 2",
                "level" => 8
            ]
        ];

        DB::table('vocabularies')->insert($vocabularyData);
    }
}