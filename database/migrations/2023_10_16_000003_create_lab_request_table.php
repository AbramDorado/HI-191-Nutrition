<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLabRequestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lab_request', function (Blueprint $table) {
            $table->bigIncrements('lab_request_id');
            $table->dateTime('lab_request_dt');
            $table->string('patient_name_1')->nullable();
            $table->unsignedInteger('age_2')->nullable();
            $table->string('sex_2')->nullable();
            $table->string('request')->nullable();
            $table->string('others')->nullable();
            $table->string('medical_officer')->nullable();
            $table->unsignedInteger('license_num')->nullable();
            
            $table->boolean('is_archived')->default(false);
            $table->unsignedInteger('patient_number')->nullable();

            $table->foreign('patient_number')->references('patient_number')->on('patient')->onDelete('cascade'); // This line adds ON DELETE CASCADE
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
        Schema::dropIfExists('lab_request');
    }
}
