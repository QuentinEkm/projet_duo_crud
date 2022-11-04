<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// - il doit y avoir maximum 4 articles affichés
// 	- le contenu des articles doit être rajouté manuellement dans votre DB
// 		- le titre sera en string, limité à 30 caractères
// 		- l'image sera en string, limité à 100 caractères
// 		- la description sera en text
return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {

            $table->id();
            $table->string("title",30);
            $table->string("image",100);
            $table->text("description");
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
        Schema::dropIfExists('blogs');
    }
};
