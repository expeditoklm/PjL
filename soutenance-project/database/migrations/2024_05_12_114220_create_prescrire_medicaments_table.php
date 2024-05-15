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
        Schema::create('prescrire_medicaments', function (Blueprint $table) {
            $table->id();
            $table->string('qte');
            $table->string('dose');
            $table->string('nbFois');
            $table->string('intervPrise');
            $table->string('datePremPrise');
            $table->string('autresInstructions');
            $table->boolean('deleted');
            $table->unsignedBigInteger('ordonnance_id');
            $table->foreign('ordonnance_id')->references('id')->on('ordonnances')->onDelete('cascade');
            $table->unsignedBigInteger('medicament_id');
            $table->foreign('medicament_id')->references('id')->on('medicaments')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prescrire_medicaments');
    }
};
