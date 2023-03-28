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
        Schema::create('utilisateurs', function (Blueprint $table) {
            $table->id();
            $table->string('utilisateur_nom');
            $table->string('utilisateur_prenom');
            $table->string('utilisateur_telephone');
            $table->string('utilisateur_email');
            $table->string('utilisateur_password');
            $table->string('utilisateur_date_inscription');
            $table->string('utilisateur_statut_inscription');
            $table->timestamps();
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('utilisateurs');
    }
};
