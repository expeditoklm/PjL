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
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['personne_id']);

            // Supprimer la colonne personne_id
            $table->dropColumn('personne_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->unsignedBigInteger('personne_id');
            
            // Ajouter à nouveau la contrainte de clé étrangère
            $table->foreign('personne_id')->references('id')->on('personnes')->onDelete('cascade');
        
        });
    }
};
