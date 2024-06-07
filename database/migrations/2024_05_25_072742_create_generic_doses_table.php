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
        Schema::create('generic_doses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('generic_id')->constrained('generics','id');
            $table->string("concern_key");
            $table->string("value")->nullable();
            $table->string("from_value")->nullable();
            $table->string("to_value")->nullable();
            $table->string("dose");
            $table->string("duration");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('generic_doses');
    }
};
