<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLotsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lots', function (Blueprint $table) {
            $table->id();
            $table->integer('id_licitatie');
            $table->string('denumire_lot');
            $table->string('descriere_achizitie');
            $table->string('criteriu_atribuire');
            $table->string('info_variante');
            $table->string('durata_contract');
            $table->double('valoare_totala_ftva');
            $table->string('valoare_garantie_ftva');
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
        Schema::dropIfExists('lots');
    }
}
