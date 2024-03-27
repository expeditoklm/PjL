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
            $table->unsignedBigInteger('telPers');
            $table->string('professionPers');
            $table->string('paysPers');
            $table->string('villePers');
            $table->string('groupeSanguinPers');
            $table->string('nomPere');
            $table->string('prenomPere');
            $table->string('nomMere');
            $table->string('prenomMere');
            $table->boolean('estPatient');
            $table->boolean('estMedecin');
            $table->boolean('estInfirmier');
            $table->boolean('estTechnicienLabo');
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
