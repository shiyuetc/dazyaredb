<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [ 'id' => 'test1', 'name' => 'test_user1', 'password' => bcrypt('test1'), 'remember_token' => self::createRememberToken() ],
            [ 'id' => 'test2', 'name' => 'test_user2', 'password' => bcrypt('test2'), 'remember_token' => self::createRememberToken() ],
            [ 'id' => 'test3', 'name' => 'test_user3', 'password' => bcrypt('test3'), 'remember_token' => self::createRememberToken() ],
        ]);
    }

    public static function createRememberToken()
    {
        $str = array_merge(range('a', 'z'), range('0', '9'), range('A', 'Z'));
        $r_str = null;
        for ($i = 0; $i < 60; $i++) {
            $r_str .= $str[rand(0, count($str) - 1)];
        }
        return $r_str;
    }
}
