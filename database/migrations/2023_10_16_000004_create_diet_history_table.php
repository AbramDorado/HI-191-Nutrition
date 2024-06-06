<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDietHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diet_history', function (Blueprint $table) {
            $table->id('diet_history_id');
            $table->dateTime('diet_history_dt')->nullable();
            $table->decimal('ht', 3, 1)->nullable();
            $table->decimal('wt', 3, 1)->nullable();
            $table->decimal('wasit_cir', 3, 1)->nullable();
            $table->decimal('body_fat', 3, 1)->nullable();
            $table->decimal('bmi_2', 3, 1)->nullable();
            $table->decimal('dbw', 3, 1)->nullable();
            $table->decimal('dbw_range', 3, 1)->nullable();
            $table->string('case')->nullable();
            $table->string('diet_rx')->nullable();
            $table->dateTime('food_recall_time')->nullable();
            $table->string('where_eaten')->nullable();
            $table->string('foods')->nullable();
            $table->string('description')->nullable();
            $table->unsignedInteger('amount')->nullable();
            $table->string('food_taken')->nullable();
            $table->string('food_taken_1')->nullable();
            $table->string('exercise')->nullable();
            $table->decimal('target_weight', 3, 1)->nullable();
            $table->decimal('weight_loss', 3, 1)->nullable();
            $table->decimal('total_energy_allowance', 3, 1)->nullable();
            $table->string('vegetable_a')->nullable();
            $table->string('vegetable_b')->nullable();
            $table->string('fruit')->nullable();
            $table->string('milk')->nullable();
            $table->string('rice_cereal')->nullable();
            $table->string('meat')->nullable();
            $table->string('fat')->nullable();
            $table->string('sugar')->nullable();

            $table->boolean('is_archived')->default(false);
            $table->unsignedInteger('patient_number')->nullable();
            
            // Foreign key with ON DELETE CASCADE
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
        Schema::dropIfExists('diet_history');
    }
}
