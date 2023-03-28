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
        Schema::create('remboursements_details', function (Blueprint $table) {
            $table->id();
            $table->integer('remboursements_detail_montant_rembourser');
            $table->foreignIdFor(\App\Models\Remboursements_detail::class);
            $table->foreignIdFor(\App\Models\Panier::class);
            $table->foreignIdFor(\App\Models\Reservation::class);
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
        Schema::dropIfExists('remboursements_details');
    }
};
