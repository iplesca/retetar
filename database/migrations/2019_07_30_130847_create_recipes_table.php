<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecipesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('retete', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nume', 255);
            $table->smallInteger('nr_portii');
            $table->text('ingrediente');
            $table->text('descriere');
            $table->tinyInteger('pondere');

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
        Schema::dropIfExists('retete');
    }
}
