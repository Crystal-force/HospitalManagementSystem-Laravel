<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_data', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('birthday');
            $table->string('gender');
            $table->string('phone');
            $table->string('email');
            $table->string('address');
            $table->string('language');
            $table->string('provider');
            $table->string('medicalnum');
            $table->string('medicalrelease');
            $table->string('firstsign');
            $table->string('test');
            $table->string('exam');
            $table->string('secondsign');
            $table->string('state');
            $table->string('code');
            $table->string('date');
            $table->string('category_id');
            $table->string('front_driving_licence_document');
            $table->string('rear_driving_licence_document');
            $table->string('front_licence_certificate_document');
            $table->string('rear_licence_certificate_document');
            $table->string('do_insurance_certificate')
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patient_data');
    }
}
