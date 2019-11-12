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
        $param = [
            'name' => '白井',
            'email' => 'shirai@example.com',
            'password' => bcrypt('123456')
        ];
        DB::table('users')->insert($param);
    }
}
