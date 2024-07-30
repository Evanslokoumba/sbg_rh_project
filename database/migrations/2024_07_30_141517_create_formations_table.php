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
            $table->string('FORMATEUR');
            $table->string('DESCRIPTION');
            $table->string('MATRICULE_DEMANDEUR');
            $table->string('PERIODE');
            $table->string('SITE');
            $table->string('TYPE_FORMATEUR');
            $table->string('FORMATEUR');
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
