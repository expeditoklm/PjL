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
        Schema::create('personnel_sante__hopitals', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('personnelSante_id');
            $table->foreign('personnelSante_id')->references('id')->on('personnel_santes')->onDelete('cascade');
            $table->unsignedBigInteger('hopital_id');
            $table->foreign('hopital_id')->references('id')->on('hopitals')->onDelete('cascade');
            $table->boolean('deleted');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personnel_sante__hopitals');
    }
};
