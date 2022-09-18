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
        Schema::table('address', function (Blueprint $table) {
            $table->index('id_building_eas', 'idbld_index');
          //  $table->foreign('id_geonim')->references('id')->on('geonim');
           // $table->foreign('id_okrug')->references('id')->on('okrug');
          //  $table->foreign('id_prefiks')->references('id')->on('prefiks');
          //  $table->foreign('id_raion')->references('id')->on('raion');
           // $table->foreign('id_user')->references('id')->on('users');
          //  $table->foreign('id_building_eas')->references('id_building_eas')->on('buildings');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('address', function (Blueprint $table) {
            //
        });
    }
};
