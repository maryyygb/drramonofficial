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
        Schema::create('user_information', function (Blueprint $table) {
            $table->id('user_info_id');
            $table->bigInteger('students_id');
            $table->string('place_of_birth');
            $table->longText('mother_tongue');
            $table->longText('nationality');
            $table->string('4ps_beneficiary');
            $table->longText('home_no_street');
            $table->longText('street_name');
            $table->longText('brngy');
            $table->longText('municipality_city');
            $table->longText('province');
            $table->longText('country');
            $table->longText('zip_code');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_information');
    }
};
