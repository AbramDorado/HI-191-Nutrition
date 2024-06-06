<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePcwm2Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pcwm2', function (Blueprint $table) {
            $table->id('pcwm2_id');
            $table->dateTime('pcwm2_dt')->nullable();
            $table->decimal('actual_weekly_weight', 3, 1)->nullable();
            $table->decimal('loss', 3, 1)->nullable();
            $table->decimal('gain', 3, 1)->nullable();

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
        Schema::dropIfExists('pcwm2');
    }
}
