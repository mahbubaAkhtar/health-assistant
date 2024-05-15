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
        Schema::create('generic_eligibilities', function (Blueprint $table) {
            $table->id();
            $table->string('key');
            $table->string('value');
            $table->integer('from_value');
            $table->integer('to_value');
            $table->foreignId('generic_id')->constrained('generics','id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('generic_eligibilities');
    }
};
