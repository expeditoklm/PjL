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
        Schema::create('personnes', function (Blueprint $table) {
            $table->id();
            $table->string('cin');
            $table->string('nomPers');
            $table->string('prenomPers');
            $table->boolean('sexe');
            $table->timestamp('dateNaiss');
            $table->string('adressePers');
            $table->string('emailPers');
            $table->string('mdpPers');
            $table->string('telPers');
            $table->string('professionPers');
            $table->string('paysPers');
            $table->string('villePers');
            $table->string('imgProfil');
            $table->boolean('deleted');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personnes');
    }
};
