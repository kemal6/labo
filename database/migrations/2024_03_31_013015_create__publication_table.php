<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('publications', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->text('resume');
            $table->date('datePublication');
            $table->string('lien');
            $table->unsignedBigInteger('membre_id');
            $table->foreign('membre_id')->references('id')->on('membres')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('publications');
    }
};
