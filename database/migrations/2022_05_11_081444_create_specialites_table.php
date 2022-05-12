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
        Schema::create('specialites', function (Blueprint $table) {
            $table->unsignedBigInteger('idSpec')->autoIncrement();
            $table->string('nomSpec', 30);
            $table->integer('effectifSpec');
            $table->unsignedBigInteger('idFiliere');
            $table->foreign('idFiliere')->references('idFiliere')->on('filieres');
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
        Schema::dropIfExists('specialites');
    }
};
