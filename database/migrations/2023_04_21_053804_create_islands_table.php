<?php

use App\Models\Island;
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
        Schema::create('islands', function (Blueprint $table) {
            $table->id();
            $table->string('atoll'); 
            $table->string('name');
            $table->unique(['atoll', 'name']); # the combination of these two columns should be unique
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('islands');
    }
};
