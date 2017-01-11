<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Comentaris extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comentaris', function(Blueprint $table){
           $table->increments('id');
           $table->string('usuari');
           $table->string('establiment');
           $table->string('text');
           $table->string('data');
           $table->string('hora');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('comentaris');
    }
}
