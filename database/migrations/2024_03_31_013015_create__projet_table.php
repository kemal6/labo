<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('projets', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->text('description');
            $table->date('dateDebut');
            $table->date('dateFin');
            $table->unsignedBigInteger('departement_id');
            $table->foreign('departement_id')->references('id')->on('departements')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('projets');
    }
};
