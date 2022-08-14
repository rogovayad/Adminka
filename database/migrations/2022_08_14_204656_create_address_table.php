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
        Schema::create('address', function (Blueprint $table) {
            $table->increments('id_address_eas');
    $table->integer('id_building_eas');
    $table->integer('id_raion');
    $table->integer('id_okrug');
    $table->integer('id_prefiks');
    $table->integer('id_geonim');
    $table->string('house')->nullable();
    $table->string('corpus')->nullable();
    $table->string('liter')->nullable();
    $table->string('villa') ->nullable();
    $table->string('parcel')->nullable();
    $table->string('construction')->nullable();
    $table->string('build_number')->nullable();
    $table->string('paddress');
    $table->string('base_address_flag');
    $table->integer('id_user');
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
        Schema::dropIfExists('address');
    }
};
