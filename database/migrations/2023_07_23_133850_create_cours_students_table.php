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
        Schema::create('cours_students', function (Blueprint $table) {
            $table->id();
            $table->foreignId('Students_id')->constrained('students')->references('id');
            $table->foreignId('Courss_id')->constrained('cours')->references('id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cours_students');
    }
};
