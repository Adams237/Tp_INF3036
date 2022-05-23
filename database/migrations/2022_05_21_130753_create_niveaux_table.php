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
        Schema::create('niveaux', function (Blueprint $table) {
            $table->id();
            $table->integer('niveau');
            $table->integer('effectif');
            $table->unsignedBigInteger('id_filiere');
            $table->unsignedBigInteger('id_spec')->nullable();
            $table->foreign('id_spec')->references('id')->on('specialites');
            $table->foreign('id_filiere')->references('id')->on('filieres');
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
        Schema::dropIfExists('niveaux');
    }
};
