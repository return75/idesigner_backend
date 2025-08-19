<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('sizes', function (Blueprint $table) {
            $table->id();
            $table->string('code', 10);
            $table->string('name_en');
            $table->string('name_fa');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('sizes');
    }
};
