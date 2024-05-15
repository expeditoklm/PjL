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
        Schema::table('soin_prescrits', function (Blueprint $table) {
            $table->unsignedBigInteger('type_soin_id');
            $table->foreign('type_soin_id')->references('id')->on('type_soins')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('soin_prescrits', function (Blueprint $table) {
            //
        });
    }
};
