<?php

use Illuminate\Database\Seeder;

class StyleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('styles')->insert([
            'name' => 'ペールエール',
            'brewing_id' => '1'
        ]);

        DB::table('styles')->insert([
            'name' => 'IPA',
            'brewing_id' => '1'
        ]);

        DB::table('styles')->insert([
            'name' => 'ゴールデンエール',
            'brewing_id' => '1'
        ]);

        DB::table('styles')->insert([
            'name' => 'スタウト',
            'brewing_id' => '1'
        ]);

        DB::table('styles')->insert([
            'name' => 'ポーター',
            'brewing_id' => '1'
        ]);

        DB::table('styles')->insert([
            'name' => 'アンバーエール',
            'brewing_id' => '1'
        ]);

        DB::table('styles')->insert([
            'name' => 'ヴァイツェン',
            'brewing_id' => '1'
        ]);

        DB::table('styles')->insert([
            'name' => 'ホワイトエール',
            'brewing_id' => '1'
        ]);

        DB::table('styles')->insert([
            'name' => 'トラピスト',
            'brewing_id' => '1'
        ]);

        DB::table('styles')->insert([
            'name' => 'バーレイワイン',
            'brewing_id' => '1'
        ]);

        DB::table('styles')->insert([
            'name' => 'フルーツビール',
            'brewing_id' => '1'
        ]);

        DB::table('styles')->insert([
            'name' => 'ピルスナー',
            'brewing_id' => '2'
        ]);

        DB::table('styles')->insert([
            'name' => 'ラガー',
            'brewing_id' => '2'
        ]);

        DB::table('styles')->insert([
            'name' => 'ブロンドラガー',
            'brewing_id' => '2'
        ]);

        DB::table('styles')->insert([
            'name' => 'シュバルツ',
            'brewing_id' => '2'
        ]);

        DB::table('styles')->insert([
            'name' => 'ヘレス',
            'brewing_id' => '2'
        ]);

        DB::table('styles')->insert([
            'name' => 'メルツェン',
            'brewing_id' => '2'
        ]);

        DB::table('styles')->insert([
            'name' => 'ランビック',
            'brewing_id' => '3'
        ]);

        DB::table('styles')->insert([
            'name' => 'その他',
        ]);
    }
}
