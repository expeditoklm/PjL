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
        Schema::create('fichier_analyses', function (Blueprint $table) {
            $table->id();
            $table->string('libFichierAnalyse');
            $table->string('cheminFichierAnalyse');
            $table->unsignedBigInteger('FaireAnalyse_id');
            $table->foreign('FaireAnalyse_id')->references('id')->on('Faire_analyses')->onDelete('cascade');
            $table->boolean('deleted');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fichier_analyses');
    }
};
