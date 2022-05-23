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
        Schema::create('enseignement_ue', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_ense');
            $table->unsignedBigInteger('id_ue');
            $table->foreign('id_ense')->references('id')->on('enseignements');
            $table->foreign('id_ue')->references('id')->on('ues')->onDelete('cascade');
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
        Schema::dropIfExists('pivot_table_enseignement_ue');
    }
};
