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
        Schema::create('prescriptions', function (Blueprint $table) {
            $table->id();
            $table->string('patient_name');
            $table->integer('patient_age');
            $table->enum('patient_gender', ['male', 'female']);
            $table->text('advice');
            $table->text('symptom');
            $table->string('follow_up')->nullable();
            $table->foreignId('consultation_id')->constrained('consultations','id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prescriptions');
    }
};
