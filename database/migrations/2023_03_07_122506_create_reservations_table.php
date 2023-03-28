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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->date('reservation_date');
            $table->time('reservation_heure_debut');
            $table->time('reservation_heure_fin');
            $table->integer('reservation_nombre_personne');
            $table->text('reservation_commentaire');
            $table->integer('reservation_statutDeLaReservation');
            $table->string('reservation_source');
            $table->integer('reservation_cout_total');
            $table->foreignIdFor(\App\Models\Utilisateur::class);
            // $table->foreignIdFor(\App\Models\categoriedesjeux::class);
            $table->foreignIdFor(\App\Models\jeu::class);
            $table->foreignIdFor(\App\Models\Promotion::class);
            $table->foreignIdFor(\App\Models\Panier::class);
            $table->timestamps();
            // $table->unsignedBigInteger('IDDuJeuReserve');
            // $table->unsignedBigInteger('IDUtilisateur');
            // $table->foreign('IDDuJeuReserve')->references('id')->on('Jeus');
            // $table->foreign('IDUtilisateur')->references('id')->on('Utilisateurs');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservations');
    }
};
