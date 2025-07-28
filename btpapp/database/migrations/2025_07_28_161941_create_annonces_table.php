<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('annonces', function (Blueprint $table) {
        $table->id();
        $table->string('titre');
        $table->text('introduction');
        $table->longText('details');
        $table->json('photos')->nullable(); // stocker les chemins des photos sous forme de JSON
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('annonces');
    }
};
