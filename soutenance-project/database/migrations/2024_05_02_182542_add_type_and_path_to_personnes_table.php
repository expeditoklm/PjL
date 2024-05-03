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
            $table->unsignedBigInteger('typeCin');
            $table->string('cheminCin')->nullable();

            $table->foreign('typeCin')->references('id')->on('type_fichier_administratifs');
        
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('personnes', function (Blueprint $table) {
            $table->dropForeign(['typeCin']);
            $table->dropColumn(['typeCin', 'cheminCin']);
        });
    }
};
