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
        Schema::table('bproperties', function (Blueprint $table) {
            $table->index('id_building_eas', 'idbldp_index');
           // $table->foreign('id_user')->references('id')->on('users');
           // $table->foreign('id_building_eas')->references('id_building_eas')->on('buildings');
           // $table->foreign('id_properties')->references('id')->on('properties');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('bproperties', function (Blueprint $table) {
            //
        });
    }
};
