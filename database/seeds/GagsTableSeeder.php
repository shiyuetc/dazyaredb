<?php

use Illuminate\Database\Seeder;

class GagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('gags')->insert([
            [ 'id' => mktime(0, 0, 0, 1, 1, 2019), 'text' => 'これはテスト1のだじゃれです', 'yomi' => 'これはてすといちのだじゃれです', 'author_id' => 'test1' ],
            [ 'id' => mktime(0, 0, 0, 2, 1, 2019), 'text' => 'これはテスト2のだじゃれです', 'yomi' => 'これはてすとにのだじゃれです', 'author_id' => 'test1' ],
            [ 'id' => mktime(0, 0, 0, 3, 1, 2019), 'text' => 'これはテスト3のだじゃれです', 'yomi' => 'これはてすとさんのだじゃれです', 'author_id' => 'test2' ],
        ]);
    }
}
