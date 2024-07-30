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
        Schema::create('chiffrages', function (Blueprint $table) {
            $table->bigIncrements('ID');
            $table->string('NOM_MEMBRE');
            $table->string('INTITULE');
            $table->string('DESCRIPTION');
            $table->string('COUT');
            $table->string('NUMERO_DEVIS');
            $table->string('FOURNISSEUR');
            $table->string('STATUT');
            $table->string('DEVIS');
            $table->string('ID_FORMATION');
            $table->string('MATRICULE');
            $table->string('ID_FORMATEUR');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chiffrages');
    }
};
