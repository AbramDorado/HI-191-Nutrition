<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSoapTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('soap', function (Blueprint $table) {
            $table->bigIncrements('soap_id'); 
            $table->dateTime('soap_dt')->nullable();
            $table->string('subjective')->nullable();
            $table->decimal('bp', 3, 1)->nullable();
            $table->decimal('pr', 3, 1)->nullable();
            $table->decimal('rr', 3, 1)->nullable();
            $table->decimal('temp', 3, 1)->nullable();
            $table->decimal('height', 5, 1)->nullable();
            $table->decimal('weight', 5, 1)->nullable();
            $table->decimal('bmi_1', 3, 1)->nullable();
            $table->string('ecg')->nullable();
            $table->string('cxr')->nullable();
            $table->string('cbc')->nullable();
            $table->string('u/a')->nullable();
            $table->string('crea')->nullable();
            $table->string('bun')->nullable();
            $table->string('bua')->nullable();
            $table->string('lipid_profile')->nullable();
            $table->string('sgot')->nullable();
            $table->string('sgpt')->nullable();
            $table->string('fbs')->nullable();
            $table->string('nark')->nullable();
            $table->string('hbalic')->nullable();
            $table->string('hepabs')->nullable();
            $table->string('others')->nullable();
            $table->string('assessment')->nullable();
            $table->string('plan')->nullable();
            
            $table->boolean('is_archived')->default(false);
            $table->unsignedBigInteger('patient_number')->nullable();

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
        Schema::dropIfExists('soap');
    }
}
