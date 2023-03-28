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
        Schema::create('paniers', function (Blueprint $table) {
            $table->id();
            $table->string('panier_canal_reservation');
            $table->string('panier_methode_paiement');
            $table->integer('panier_montant_total');
            $table->string('panier_reference_paiement');
            $table->integer('panier_nombre_reservation');
            $table->foreignIdFor(\App\Models\Utilisateur::class);
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
        Schema::dropIfExists('paniers');
    }
};
