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
        Schema::dropIfExists('consultations');
        Schema::create('consultations', function (Blueprint $table) {
        $table->id();
        $table->foreignId('id_Patient');
        //$table->foreignId('id_Rendez_vous');
        $table->dateTime('Date_et_Heure', $precision = 0);
        $table->longText('Raison');
        $table->longText('Diagnostic');
        $table->dateTime('Prochain_Rendez_vous', $precision = 0);
        $table->set('Statut',['Annulé','Terminé']);
        $table->longText('Remarques')->nullable();
        $table->foreign('id_Patient')->references('id')->on('patients')->onDelete('cascade')->onUpdate('cascade');
        //$table->foreign('id_Rendez_vous')->references('id')->on('rendez_vous')->onDelete('cascade')->onUpdate('cascade');
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
