<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->unsignedBigInteger('id');
            $table->unsignedBigInteger('patient_number');
            $table->string('role')->nullable();
            $table->string('password')->nullable();

            // Composite primary key
            $table->primary(['id', 'patient_number']);

            // Foreign key references
            $table->foreign('id')->references('id')->on('users');
            $table->foreign('patient_number')->references('patient_number')->on('patient');

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
        Schema::dropIfExists('roles');
    }
}
