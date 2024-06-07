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
        Schema::create('symptom_questions', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->enum('input_type', ['text','number','radio', 'dropdown','textarea']);
            $table->json('input_options')->nullable();
            $table->boolean('input_is_required')->default(true);
            $table->foreignId('symptom_id')->constrained('symptoms','id');
            $table->string('concern_key');
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('symptom_questions');
    }
};
