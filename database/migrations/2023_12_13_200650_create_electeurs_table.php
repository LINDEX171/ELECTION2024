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
        Schema::create('electeurs', function (Blueprint $table) {
            $table->id();
            $table->String("Nom");
            $table->String("Prenom");
            $table->mediumText("CNI")->nullable();
            $table->String("Adresse");
            $table->unsignedBigInteger('candidat_id')->nullable();
            $table->foreign('candidat_id')->references('id')->on('candidats')->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('electeurs');
    }
};
