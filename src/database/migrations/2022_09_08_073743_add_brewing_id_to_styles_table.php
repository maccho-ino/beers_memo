<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddBrewingIdToStylesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('styles', function (Blueprint $table) {
            $table->bigInteger('brewing_id')->nullable();
            $table->foreign('brewing_id')->references('id')->on('styles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('styles', function (Blueprint $table) {
            $table->dropForeign('styles_brewing_id_foreign');
            $table->dropColumn('brewing_id');
        });
    }
}
