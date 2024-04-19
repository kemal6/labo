<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('theses', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->text('description');
            $table->enum('type', ['master', 'doctorat']);
            $table->string('url');
            $table->date('dateDebut');
            $table->date('dateFin');
            $table->unsignedBigInteger('membre_id');
            $table->foreign('membre_id')->references('id')->on('membres')->onDelete('cascade');        
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('theses');
    }
};
