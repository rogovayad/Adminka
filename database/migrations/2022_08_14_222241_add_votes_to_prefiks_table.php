<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('prefiks', function (Blueprint $table) {
           // $table->foreign('id_geonim')->references('id')->on('geonim');
           // $table->foreign('id_town')->references('id')->on('town');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('prefiks', function (Blueprint $table) {
            //
        });
    }
};
