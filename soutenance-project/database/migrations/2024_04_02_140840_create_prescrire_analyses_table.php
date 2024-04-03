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
        Schema::create('prescrire_analyses', function (Blueprint $table) {
            $table->id();
            $table->string('detailsAnalyse');
            $table->unsignedBigInteger('typeAnalyse_id');
            $table->foreign('typeAnalyse_id')->references('id')->on('type_analyses')->onDelete('cascade');
            $table->unsignedBigInteger('consultation_id');
            $table->foreign('consultation_id')->references('id')->on('consultations')->onDelete('cascade');
            $table->boolean('deleted');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prescrire_analyses');
    }
};
