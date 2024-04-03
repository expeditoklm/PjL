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
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('groupeSanguinPers');
            $table->string('nomPere');
            $table->string('prenomPere');
            $table->string('pathologiePere');
            $table->string('nomMere');
            $table->string('prenomMere');
            $table->string('pathologieMere');
            $table->unsignedBigInteger('personne_id');
            $table->foreign('personne_id')->references('id')->on('personnes')->onDelete('cascade');
            $table->boolean('deleted');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
