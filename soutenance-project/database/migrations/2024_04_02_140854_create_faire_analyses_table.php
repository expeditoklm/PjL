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
        Schema::create('faire_analyses', function (Blueprint $table) {
            $table->id();
            $table->string('detailsFaireAnalyse');
            $table->string('resultatsFaireAnalyse');
            $table->unsignedBigInteger('typeAnalyse_id');
            $table->foreign('typeAnalyse_id')->references('id')->on('type_analyses')->onDelete('cascade');
            $table->unsignedBigInteger('patient_id');
            $table->foreign('patient_id')->references('id')->on('patients')->onDelete('cascade');
            $table->unsignedBigInteger('personnelSante_id');
            $table->foreign('personnelSante_id')->references('id')->on('personnel_santes')->onDelete('cascade');
            $table->unsignedBigInteger('hopital_id');
            $table->foreign('hopital_id')->references('id')->on('hopitals')->onDelete('cascade');
            $table->boolean('deleted');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('faire_analyses');
    }
};
