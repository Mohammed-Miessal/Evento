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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('image_path')->nullable();
            $table->dateTime('date');
            $table->string('description');
            $table->integer('price');
            $table->string('location');
            $table->enum('status', ['pending', 'published', 'unpublished'])->default('pending');
            $table->integer('capacity');

            $table->foreignId('categorie_id')->constrained('categories');
            $table->foreignId('organisateur_id')->constrained('users');
            
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};


     
        
          
           
            // 