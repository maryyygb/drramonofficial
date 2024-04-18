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
        Schema::create('enrollment_list', function (Blueprint $table) {
            $table->id('enrollment_id');
            $table->bigInteger('students_id');
            $table->integer('lrn');
            $table->string('ip_community');
            $table->integer('school_year');
            $table->string('grade_level');
            $table->bigInteger('track');
            $table->bigInteger('strand');
            $table->longText('last_grade_level');
            $table->longText('last_school_year');
            $table->longText('last_school_attended');
            $table->integer('schoolId');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('enrollment_list');
    }
};
