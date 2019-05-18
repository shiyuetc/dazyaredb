<?php

use Illuminate\Database\Seeder;

class LogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('logs')->insert([
            [ 'user_id' => 'test1', 'gag_id' => mktime(0, 0, 0, 1, 1, 2019), 'command' => 'create', 'after_text' => 'これはテスト1のだじゃれです', 'after_yomi' => 'これはてすといちのだじゃれです' ],
            [ 'user_id' => 'test1', 'gag_id' => mktime(0, 0, 0, 2, 1, 2019), 'command' => 'create', 'after_text' => 'これはテスト2のだじゃれです', 'after_yomi' => 'これはてすとにのだじゃれです' ],
            [ 'user_id' => 'test2', 'gag_id' => mktime(0, 0, 0, 3, 1, 2019), 'command' => 'create', 'after_text' => 'これはテスト3のだじゃれです', 'after_yomi' => 'これはてすとさんのだじゃれです' ],
        ]);
    }
}
