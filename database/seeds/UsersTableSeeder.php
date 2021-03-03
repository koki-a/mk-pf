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
            'name' => 'test1',
            'email' => 'test@test.com',
            'password' => bcrypt('testtest')
        ]);
        DB::table('users')->insert([
            'name' => 'test2',
            'email' => 'test2@test.com',
            'password' => bcrypt('testtest2')
        ]);
        DB::table('users')->insert([
            'name' => 'test3',
            'email' => 'test3@test.com',
            'password' => bcrypt('testtest3')
        ]);
        DB::table('users')->insert([
            'name' => 'test4',
            'email' => 'test4@test.com',
            'password' => bcrypt('testtest4')
        ]);
        DB::table('users')->insert([
            'name' => 'test5',
            'email' => 'test5@test.com',
            'password' => bcrypt('test5')
        ]);
        DB::table('users')->insert([
            'name' => 'guest',
            'email' => 'guest@gmail.com',
            'password' => bcrypt('guestpassword')
        ]);
    }
}
