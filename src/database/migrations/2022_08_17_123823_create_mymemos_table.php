<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMymemosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mymemos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->bigInteger('country_id')->nullable();
            $table->bigInteger('style_id')->nullable();
            $table->string('degree')->nullable();
            $table->string('place');
            $table->string('coment')->nullable();
            $table->string('image_path')->nullable();
            $table->bigInteger('user_id')->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('country_id')->references('id')->on('countries');
            $table->foreign('style_id')->references('id')->on('styles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('mymemos', function (Blueprint $table) {
            $table->dropForeign('mymemos_user_id_foreign');
            $table->dropForeign('mymemos_country_id_foreign');
            $table->dropForeign('mymemos_style_id_foreign');
        });

        Schema::dropIfExists('mymemos');
    }
}
