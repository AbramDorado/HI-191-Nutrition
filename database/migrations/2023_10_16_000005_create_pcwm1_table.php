<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePcwm1Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pcwm1', function (Blueprint $table) {
            $table->id('pcwm1_id');
            $table->string('patient_name_2')->nullable();
            $table->unsignedInteger('age_3')->nullable();
            $table->string('prescribe_exer')->nullable();
            $table->decimal('target_weight_2', 3, 1)->nullable();
            $table->dateTime('target_date')->nullable();
            $table->decimal('starting_weight', 3, 1)->nullable();
            $table->dateTime('weighing_day')->nullable();
            $table->dateTime('weighing_time')->nullable();
            
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
        Schema::dropIfExists('pcwm1');
    }
}
