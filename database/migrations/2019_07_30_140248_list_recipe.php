<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ListRecipe extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('liste_retete', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_lista')->foreign('id_lista')->references('id')->on('liste');
            $table->integer('id_reteta')->foreign('id_reteta')->references('id')->on('retete');
            $table->tinyInteger('order');
            $table->date('finished')->nullable()->default(NULL);
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
        Schema::dropIfExists('liste_retete');
    }
}
