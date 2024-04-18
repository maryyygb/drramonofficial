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
        Schema::create('parents_guardians_info', function (Blueprint $table) {
            $table->id('parents_guardian_id');
            $table->bigInteger('students_id');
            $table->string('father_lastname');
            $table->string('father_firstname');
            $table->string('father_middlename');
            $table->string('father_contactno');
            $table->string('mother_lastname');
            $table->string('mother_firstname');
            $table->string('mother_middlename');
            $table->string('mother_contactno');
            $table->string('guardian_lastname');
            $table->string('guardian_firstname');
            $table->string('guardian_middlename');
            $table->string('guardian_contactno');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('parents_guardians_info');
    }
};
