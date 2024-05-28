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
                "topicTitle" => "の particle",
                "description" => 'The の particle in Japanese is used to indicate possession or association between nouns. It can also be used to create noun modifiers.',
                "level" => 1
            ]
        ];

        DB::table('grammars')->insert($grammarData);
    }
}
