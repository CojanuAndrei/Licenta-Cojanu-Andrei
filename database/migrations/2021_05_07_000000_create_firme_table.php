<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFirmeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('firme', function (Blueprint $table) {
            $table->id();
            $table->string('nume_firma');
            $table->integer('id_user');
            $table->string('nume_admin');
            $table->string('adresa_firma');
            $table->string('telefon');
            $table->integer('cod_fiscal')->unique();
            $table->integer('numar_inregistrare')->unique();
            $table->timestamp('data_inregistrare');
            $table->integer('incadrare_legala');
            $table->double('cf_1');
            $table->double('cf_2');
            $table->double('cf_3');
            $table->string('email_firma')->unique();

            $table->timestamp('email_verified_at')->nullable();
            $table->string('verification_code')->nullable();
            $table->integer('is_verified')->default(0);
            $table->rememberToken();
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
        Schema::dropIfExists('firme');
    }
}
