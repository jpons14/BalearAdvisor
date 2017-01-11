<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Establiments2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('establiments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom');
            $table->longText('descripcio_cat');
            $table->longText('descripcio_esp');
            $table->longText('horari_cat');
            $table->longText('horari_esp');
            $table->string('poblacio');
            $table->string('adreca');
            $table->string('telefon');
            $table->string('web');
            $table->string('preu');
            $table->longText('tipus_cuina');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('establiments');
    }
}
