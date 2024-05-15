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
        Schema::create('prescription_generics', function (Blueprint $table) {
            $table->id();
            $table->integer('frequency');
            $table->integer('duration');
            $table->text('instruction');
            $table->foreignId('generic_id')->constrained('generics','id');
            $table->foreignId('prescription_id')->constrained('prescriptions','id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prescription_generics');
    }
};
