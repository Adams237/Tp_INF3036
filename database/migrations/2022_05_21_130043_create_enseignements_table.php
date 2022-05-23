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
        Schema::create('enseignements', function (Blueprint $table) {
            $table->id();
            $table->string('heure_debut',10);
            $table->string('heure_fin',10);
            $table->unsignedBigInteger('id_ens');
            $table->unsignedBigInteger('id_filiere');
            $table->foreign('id_ens')->references('id')->on('enseignants');
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
        Schema::dropIfExists('enseignements');
    }
};
