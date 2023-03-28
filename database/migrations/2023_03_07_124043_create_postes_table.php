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
        Schema::create('postes', function (Blueprint $table) {
            $table->id();
            $table->string('poste_nomination');
            $table->string('poste_adresseip');
            $table->integer('poste_statut');
            $table->timestamps();

            // $table->unsignedBigInteger('IDDeReservation');
            // $table->foreign('IDDeReservation')->references('id')->on('Reservations');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('postes');
    }
};
