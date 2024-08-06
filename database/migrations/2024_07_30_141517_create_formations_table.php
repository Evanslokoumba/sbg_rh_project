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
        Schema::create('formations', function (Blueprint $table) {
            $table->bigIncrements('ID');
            $table->string('TITRE');
            $table->string('DESCRIPTION');
            $table->string('MATRICULE_DEMANDEUR');
            $table->string('MOIS');
            $table->string('SITE');
            $table->string('SERVICE');
            $table->string('DIRECTION');
            $table->string('TYPE_FORMATEUR');
            $table->string('ID_FORMATEUR');
            $table->string('FORMATEUR');
            $table->integer('STATUT');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('formations');
    }
};
