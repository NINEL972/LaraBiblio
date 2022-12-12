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
        Schema::create('emprunteurs', function (Blueprint $table) {
            //l'attribut "numeroCarte" est un entier
            $table->integer('numeroCarte');
            //les attributs "nom" et « prénom » sont des chaînes qui peuvent être NULL
            $table->string('nom', 30)->nullable();
            $table->string('prenom', 30)->nullable();
            //l'attribut "adresse" est une chaîne qui peut être NULL
            $table->text('adresse')->nullable();
            //l'attribut "telephone" est un entier qui peut être NULL
            $table->integer('telephone')->nullable();
            //la clé primaire est "numeroCarte"
            $table->primary('numeroCarte');
            //le jeu de caractères à utiliser
            $table->charset = 'utf8mb4';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('emprunteurs');
    }
};
