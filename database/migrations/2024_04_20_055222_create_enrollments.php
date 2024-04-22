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
            $table->string('grade_to_enroll');
            $table->string('with_lrn');
            $table->string('balik_aral');
            $table->string('track');
            $table->string('strand');
            $table->string('specialization');
            $table->string('psa_no');
            $table->string('lrn');
            $table->text('name');
            $table->date('birthdate');
            $table->integer('age');
            $table->string('sex');
            $table->string('birth_place');
            $table->string('mother_tongue');
            $table->string('house_no');
            $table->string('street');
            $table->string('brngy');
            $table->string('mun_city');
            $table->string('province');
            $table->string('country');
            $table->string('zip_code');
            $table->string('f_lastname');
            $table->string('f_firstname');
            $table->string('f_midname');
            $table->string('f_contact_no');
            $table->string('m_lastname');
            $table->string('m_firstname');
            $table->string('m_midname');
            $table->string('m_contact_no');
            $table->string('g_lastname');
            $table->string('g_firstname');
            $table->string('g_midname');
            $table->string('g_contact_no');
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
