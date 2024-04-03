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
        Schema::create('consultation__correspondances', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('correspondance_id');
            $table->foreign('correspondance_id')->references('id')->on('correspondances')->onDelete('cascade');
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
        Schema::dropIfExists('consultation__correspondances');
    }
};
