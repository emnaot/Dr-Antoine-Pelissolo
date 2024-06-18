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
        Schema::dropIfExists('ordonnances');

        Schema::create('ordonnances', function (Blueprint $table) {
        $table->id();
        $table->foreignId('id_Patient');

        $table->foreignId('id_Consultation');
        $table->longText('Description');

       $table->foreign('id_Consultation')->references('id')->on('consultations')->onDelete('cascade')->onUpdate('cascade');
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
