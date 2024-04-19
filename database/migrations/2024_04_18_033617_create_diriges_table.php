<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('diriges', function (Blueprint $table) {
            $table->id();
            $table->text('codirecteur');
            $table->unsignedBigInteger('directeur_id');
            $table->unsignedBigInteger('these_id');
            $table->foreign('directeur_id')->references('id')->on('membres')->onDelete('cascade');
            $table->foreign('these_id')->references('id')->on('theses')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('diriges');
    }
};
