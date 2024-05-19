<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemoveForeignKeyFromDomaineInterventions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('domaine_interventions', function (Blueprint $table) {
            $table->dropForeign(['personnelSante_id']);
            $table->dropColumn('personnelSante_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('domaine_interventions', function (Blueprint $table) {
            $table->unsignedBigInteger('personnelSante_id');
            $table->foreign('personnelSante_id')->references('id')->on('personnel_santes')->onDelete('cascade');
        });
    }
}
