<?php

use Illuminate\Database\Seeder;

class TastesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tastes')->insert([
            'taste' => 'しょうゆ'
        ]);

        DB::table('tastes')->insert([
            'taste' => 'しお'
        ]);

        DB::table('tastes')->insert([
            'taste' => 'とんこつ'
        ]);

        DB::table('tastes')->insert([
            'taste' => '家系'
        ]);

        DB::table('tastes')->insert([
            'taste' => '二郎'
        ]);

        DB::table('tastes')->insert([
            'taste' => 'その他'
        ]);
    }
}
