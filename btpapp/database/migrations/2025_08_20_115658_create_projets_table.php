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
        Schema::create('projets', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->text('description')->nullable();
            $table->enum('categorie', ['commercial', 'residential', 'healthcare']);
            $table->string('lieu')->nullable();
            $table->string('image_principale');
            $table->json('galerie_images')->nullable(); // Pour stocker plusieurs images
            $table->text('details')->nullable();
            $table->date('date_debut')->nullable();
            $table->date('date_fin')->nullable();
            $table->enum('statut', ['en_cours', 'termine', 'suspendu'])->default('termine');
            $table->decimal('budget', 15, 2)->nullable();
            $table->string('client')->nullable();
            $table->boolean('featured')->default(false);
            $table->boolean('actif')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projets');
    }
};