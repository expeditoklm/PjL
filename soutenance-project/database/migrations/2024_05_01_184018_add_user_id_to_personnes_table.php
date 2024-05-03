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
        Schema::table('personnes', function (Blueprint $table) {
             // Ajouter la colonne personne_id pour stocker l'ID de l'utilisateur
             $table->unsignedBigInteger('user_id')->nullable();

             // Ajouter la contrainte de clé étrangère pour lier user_id à l'ID de la table users
             $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('personnes', function (Blueprint $table) {
            // Supprimer la contrainte de clé étrangère
            $table->dropForeign(['user_id']);

            // Supprimer la colonne personne_id
            $table->dropColumn('user_id');
        });
    }
};
