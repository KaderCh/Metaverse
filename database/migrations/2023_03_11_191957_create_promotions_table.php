<?php

use App\Models\Partenaire;
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
        Schema::create('promotions', function (Blueprint $table) {
            $table->id();
            $table->string('promotion_code_promo');
            $table->integer('promotion_pourcentage_reduction');
            $table->date('promotion_date_validite');
            $table->integer('promotion_nombre_beneficiaire_prevu');
            $table->integer('promotion_nombre_beneficiaire_actuel');
            $table->foreignIdFor(Partenaire::class);
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
        Schema::dropIfExists('promotions');
    }
};
