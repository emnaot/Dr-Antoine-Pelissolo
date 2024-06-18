<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::dropIfExists('patients');
        Schema::create('patients', function (Blueprint $table) {
        $table->id();
        $table->string('Nom');
        $table->string('Prénom');
        $table->tinyInteger('Age')->nullable();
        $table->set('Sexe',['M','F'])->nullable();
        $table->date('Date_de_naissance')->nullable();
        $table->string('Adresse')->nullable();
        $table->string('Numéro_de_téléphone')->nullable();
        $table->string('E_mail');
        $table->set('Statut',['actif','inactif'])->default('inactif');
        $table->longText('Remarques')->nullable();
        $table->timestamps();



    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
