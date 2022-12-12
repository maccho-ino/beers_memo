<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMymemoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mymemo', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('country'); #ドロップダウンから選択
            $table->string('style')->nullable(); # ドロップダウンから選択
            $table->string('degree')->nullable();
            // $table-> #place（位置情報）
            $table->string('coment')->nullable();
            $table->string('image_path')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mymemo');
    }
}
