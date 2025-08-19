<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tshirt_variants', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tshirt_id')->constrained('tshirts')->cascadeOnDelete();
            $table->foreignId('color_id')->constrained('colors');
            $table->foreignId('size_id')->constrained('sizes');
            $table->foreignId('material_id')->constrained('sizes');
            $table->string('image')->nullable();
            $table->timestamps();
        });

    }

    public function down(): void
    {
        Schema::dropIfExists('tshirt_variants');
    }
};



