<?php

use Illuminate\Database\Seeder;

class BrewingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('brewings')->insert([
            'name' => 'エール系（上面発酵）',
        ]);

        DB::table('brewings')->insert([
            'name' => 'ラガー系（下面発酵）',
        ]);

        DB::table('brewings')->insert([
            'name' => '天然発酵系',
        ]);
    }
}
