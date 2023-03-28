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
        Schema::create('jeus', function (Blueprint $table) {
            $table->id()->unique();
            $table->string('jeu_nom');
            $table->text('jeu_description');
            $table->string('jeu_image');
            $table->string('jeu_teaser');
            $table->string('jeu_editeur');
            $table->integer('jeu_age_minimum');
            $table->integer('jeu_duree_minimale');
            $table->integer('jeu_duree_maximale');
            $table->integer('jeu_tarif');
            $table->integer('jeu_nombre_min_joueurs');
            $table->integer('jeu_nombre_max_joueurs');
            $table->foreignIdFor(\App\Models\categoriedesjeux::class);
            $table->timestamps();
            // $table->foreignId('categories_id')->constrained()->onUpdate('restrict')->onDelete('restrict');
            // $table->unsignedBigInteger('Categories_id');
            // $table->foreign('categories_id')->constrained()->references('id')->on('categoriesdesjeuxes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jeus');
    }
};
