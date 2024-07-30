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
        Schema::create('type_formateurs', function (Blueprint $table) {
            $table->bigIncrements('ID');
            $table->string('TITRE');
            $table->string('MATRICULE_CREATEUR');
            $table->string('STATUT');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('type_formateurs');
    }
};
