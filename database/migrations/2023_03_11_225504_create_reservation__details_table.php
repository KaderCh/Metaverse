<?php

use App\Models\Poste;
use App\Models\Reservation;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservation__details', function (Blueprint $table) {
            $table->id();
            $table->integer('reservation_details_duree_jeu');
            $table->foreignIdFor(Poste::class);
            $table->foreignIdFor(Reservation::class);
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
        Schema::dropIfExists('reservation__details');
    }
};
