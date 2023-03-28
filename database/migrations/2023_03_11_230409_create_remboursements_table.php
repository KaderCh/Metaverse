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
        Schema::create('remboursements', function (Blueprint $table) {
            $table->id();
            $table->integer("remboursement_montant");
            $table->string('remboursement_reference');
            $table->string('remboursement_methode');
            $table->integer('remboursement_status');
            $table->foreignIdFor(\App\Models\Utilisateur::class);
            $table->foreignIdFor(\App\Models\Panier::class);
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
        Schema::dropIfExists('remboursements');
    }
};
