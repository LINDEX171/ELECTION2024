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

        Schema::create('candidats', function (Blueprint $table) {
            $table->id();
            $table->String("Nom");
            $table->String("Prenom");
            $table->String("Partie");
            $table->integer('votes')->default(0);
            $table->text("Biographie");
            $table->boolean("validité");
            $table->mediumText("photo")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('candidats');
    }
};
