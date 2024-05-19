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
        Schema::table('administre_soins', function (Blueprint $table) {
            $table->unsignedBigInteger('typeSoin_id');
            $table->foreign('typeSoin_id')->references('id')->on('type_soins')->onDelete('cascade');
           
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('administre_soins', function (Blueprint $table) {
            //
        });
    }
};
