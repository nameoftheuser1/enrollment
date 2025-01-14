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
        Schema::create('enrollments', function (Blueprint $table) {
            $table->id();
            $table->string('school_year');
            $table->string('learners_reference_no');
            $table->string('grade_to_enroll')->nullable();
            $table->foreignId('personal_information_id')->constrained('personal_information')->cascadeOnDelete();
            $table->foreignId('home_address_id')->nullable()->constrained('addresses')->nullOnDelete();
            $table->unsignedBigInteger('current_address_id')->nullable()->after('home_address_id');
            $table->foreign('current_address_id')->references('id')->on('addresses')->nullOnDelete();
            $table->foreignId('parent_information_id')->nullable()->constrained('parent_information')->nullOnDelete();
            $table->foreignId('special_need_id')->nullable()->constrained('special_needs')->nullOnDelete();
            $table->foreignId('returning_learner_id')->nullable()->constrained('returning_learners')->nullOnDelete();
            $table->foreignId('learner_senior_id')->nullable()->constrained('learner_seniors')->nullOnDelete();
            $table->string('distance_learning_preference')->nullable();
            $table->string('status')->default('pending');
            $table->timestamp('is_verified')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('enrollments');
    }
};
