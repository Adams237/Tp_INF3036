<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cours', function (Blueprint $table) {
            $table->unsignedBigInteger('idCour')->primary();
            $table->string('nomCour', 10);
            $table->unsignedBigInteger('idEns');
            $table->foreign('idEns')->references('idEns')->on('enseignants');
            $table->unsignedBigInteger('idClasse');
            $table->foreign('idClasse')->references('idClasse')->on('classes');
            $table->unsignedBigInteger('idSalle');
            $table->foreign('idSalle')->references('idSalle')->on('salles');
            $table->unsignedBigInteger('idSpec');
            $table->foreign('idSpec')->references('idSpec')->on('specialites');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cours');
    }
};
