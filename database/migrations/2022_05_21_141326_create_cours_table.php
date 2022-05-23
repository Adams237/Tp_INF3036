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
            $table->id();
            $table->string('jour',10);
            $table->string('heure_debut',10);
            $table->string('heure_fin',10);
            $table->unsignedBigInteger('id_ense');
            $table->unsignedBigInteger('id_salle');
            $table->foreign('id_salle')->references('id')->on('salles');
            $table->foreign('id_ense')->references('id')->on('enseignements');
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
