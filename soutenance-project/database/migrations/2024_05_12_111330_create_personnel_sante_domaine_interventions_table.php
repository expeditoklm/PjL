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
        Schema::create('personnel_sante_domaine_interventions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('personnel_sante_id');
            $table->foreign('personnel_sante_id')->references('id')->on('personnel_santes')->onDelete('cascade');
            $table->unsignedBigInteger('domaine_interv_id');
            $table->foreign('domaine_interv_id')->references('id')->on('domaine_interventions')->onDelete('cascade');
            $table->boolean('deleted');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personnel_sante_domaine_interventions');
    }
};
