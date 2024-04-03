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
        Schema::create('fichier_administratifs', function (Blueprint $table) {
            $table->id();
            $table->string('numFichierAdministratifs');
            $table->string('cheminFichierAdministratifs');
            $table->unsignedBigInteger('personne_id');
            $table->foreign('personne_id')->references('id')->on('personnes')->onDelete('cascade');
            $table->unsignedBigInteger('typeFichierAdministratifs_id');
            $table->foreign('typeFichierAdministratifs_id')->references('id')->on('type_fichier_administratifs')->onDelete('cascade');
            $table->boolean('deleted');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fichier_administratifs');
    }
};
