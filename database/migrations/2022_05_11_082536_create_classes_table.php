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
        Schema::create('classes', function (Blueprint $table) {
            $table->unsignedBigInteger('idClasse')->primary();
            $table->string('nomClasse',15);
            $table->unsignedBigInteger('idFiliere');
            $table->string('groupe', 1);
            $table->integer('effectif');
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
        Schema::dropIfExists('classes');
    }
};
