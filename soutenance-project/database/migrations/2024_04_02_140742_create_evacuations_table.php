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
            $table->string('motifEvacuation');
            $table->string('hopitalDestination');
            $table->unsignedBigInteger('sortieMedicale_id');
            $table->foreign('sortieMedicale_id')->references('id')->on('sortie_medicales')->onDelete('cascade');
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
