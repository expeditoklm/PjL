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
        Schema::create('evacuations', function (Blueprint $table) {
            $table->id();
            $table->string('hopitalDestination');
            $table->string('motif');
            $table->unsignedBigInteger('sortieMedical_id');
            $table->foreign('sortieMedical_id')->references('id')->on('sortie_medicals')->onDelete('cascade');
            $table->unsignedBigInteger('patient_id');
            $table->foreign('patient_id')->references('id')->on('patients')->onDelete('cascade');
            $table->unsignedBigInteger('personnelSante_id');
            $table->foreign('personnelSante_id')->references('id')->on('personnel_santes')->onDelete('cascade');
            $table->boolean('deleted');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evacuations');
    }
};
