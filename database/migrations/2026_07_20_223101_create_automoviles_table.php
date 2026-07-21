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
        Schema::create('automoviles', function (Blueprint $table) {
            $table->id();
            $table->string('marca');
            $table->string('modelo')->unique();
            $table->string('cilindraje')->nullable();

            $table->foreignId('concesionario_id')->constrained('concesionarios')->onDelete('cascade');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('automoviles');
    }
};
