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
            [ 'id' => 'test1', 'name' => 'test_user1', 'password' => bcrypt('test1') ],
            [ 'id' => 'test2', 'name' => 'test_user2', 'password' => bcrypt('test2') ],
            [ 'id' => 'test3', 'name' => 'test_user3', 'password' => bcrypt('test3') ],
        ]);
    }
}
