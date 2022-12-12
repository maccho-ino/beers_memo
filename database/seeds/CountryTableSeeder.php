<?php

use Illuminate\Database\Seeder;

class CountryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('countries')->insert([
            'name' => 'ドイツ',
            'area_id' => '1'
        ]);


        DB::table('countries')->insert([
            'name' => 'イギリス',
            'area_id' => '1'
        ]);

        DB::table('countries')->insert([
            'name' => 'ベルギー',
            'area_id' => '1'
        ]);

        DB::table('countries')->insert([
            'name' => 'チェコ',
            'area_id' => '1'
        ]);

        DB::table('countries')->insert([
            'name' => 'イタリア',
            'area_id' => '1'
        ]);

        DB::table('countries')->insert([
            'name' => 'スペイン',
            'area_id' => '1'
        ]);

        DB::table('countries')->insert([
            'name' => 'オランダ',
            'area_id' => '1'
        ]);

        DB::table('countries')->insert([
            'name' => 'スウェーデン',
            'area_id' => '1'
        ]);

        DB::table('countries')->insert([
            'name' => 'アメリカ',
            'area_id' => '2'
        ]);

        DB::table('countries')->insert([
            'name' => 'カナダ',
            'area_id' => '2'
        ]);

        DB::table('countries')->insert([
            'name' => 'メキシコ',
            'area_id' => '2'
        ]);

        DB::table('countries')->insert([
            'name' => '日本',
            'area_id' => '3'
        ]);

        DB::table('countries')->insert([
            'name' => '台湾',
            'area_id' => '3'
        ]);

        DB::table('countries')->insert([
            'name' => 'タイ',
            'area_id' => '3'
        ]);

        DB::table('countries')->insert([
            'name' => 'ベトナム',
            'area_id' => '3'
        ]);

        DB::table('countries')->insert([
            'name' => 'カンボジア',
            'area_id' => '3'
        ]);

        DB::table('countries')->insert([
            'name' => 'インド',
            'area_id' => '3'
        ]);

        DB::table('countries')->insert([
            'name' => 'フィリピン',
            'area_id' => '3'
        ]);

        DB::table('countries')->insert([
            'name' => 'インドネシア',
            'area_id' => '3'
        ]);

        DB::table('countries')->insert([
            'name' => 'オーストラリア',
            'area_id' => '4'
        ]);

        DB::table('countries')->insert([
            'name' => 'ニュージーランド',
            'area_id' => '4'
        ]);

        DB::table('countries')->insert([
            'name' => 'その他',
        ]);
    }
}
