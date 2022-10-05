<?php

use Illuminate\Database\Seeder;

class AreaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('areas')->insert([
            'name' => '欧州',
        ]);

        DB::table('areas')->insert([
            'name' => '北米・中南米',
        ]);

        DB::table('areas')->insert([
            'name' => 'アジア',
        ]);

        DB::table('areas')->insert([
            'name' => '大洋州',
        ]);
    }
}
