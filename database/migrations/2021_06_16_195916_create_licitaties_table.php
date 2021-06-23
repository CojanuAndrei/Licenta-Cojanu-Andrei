<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLicitatiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('licitaties', function (Blueprint $table) {
            $table->id();
            $table->integer('id_user');
            $table->integer('id_firma');
            $table->string('nume_personalizat');
            $table->string('nume_licitatie');
            $table->string('fisa_date');
            $table->string('file_path');
            $table->string('autoritate_contractanta');
            $table->string('cod_fiscal');
            $table->string('adresa')->nullable();
            $table->string('localitate')->nullable();
            $table->string('cod_postal')->nullable();
            $table->string('tara')->nullable();
            $table->string('cod_nuts')->nullable();
            $table->string('email')->nullable();
            $table->string('telefon')->nullable();
            $table->string('fax')->nullable();
            $table->string('persoana_contact')->nullable();
            $table->string('titlu')->nullable();
            $table->string('tip_contract')->nullable();
            $table->string('descriere_succinta')->nullable();
            $table->double('valoare_totala_ftva')->nullable();
            $table->string('moneda')->nullable();
            $table->integer('informatii_suplimentare')->nullable();
            $table->integer('nr_loturi')->nullable();

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
        Schema::dropIfExists('licitaties');
    }
}
