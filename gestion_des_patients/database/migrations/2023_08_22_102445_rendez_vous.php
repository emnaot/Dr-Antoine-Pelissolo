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
        Schema::dropIfExists('rendez_vous');
        Schema::create('rendez_vous', function (Blueprint $table) {

        $table->id();
        $table->foreignId("id_Patient");
        $table->date('Date');
        $table->time('Heure');
        $table->set('Type_de_Rendez_vous',['En cours','Évaluation initiale ', 'Suivi de traitement','Thérapie individuelle','Thérapie de groupe'])->default("en cours");
        $table->set('Statut', ["En cours","Confirmé","Annulé","Terminé"])->default("en cours");
        $table->longText('Remarques')->nullable();
        $table->foreign('id_Patient')->references('id')->on('patients')->onDelete('cascade')->onUpdate('cascade');
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
