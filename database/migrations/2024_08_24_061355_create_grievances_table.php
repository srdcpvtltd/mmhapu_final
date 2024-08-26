<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grievances', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('gender')->nullable();
            $table->string('mobile')->nullable();
            $table->string('enrolment')->nullable();
            $table->string('department')->nullable();
            $table->string('center')->nullable();
            $table->string('course')->nullable();
            $table->text('present_address')->nullable();
            $table->string('present_state')->nullable();
            $table->string('present_pincode')->nullable();
            $table->text('permanent_address')->nullable();
            $table->string('permanent_state')->nullable();
            $table->string('permanent_pincode')->nullable();
            $table->string('category')->nullable();
            $table->string('other_grievance_category')->nullable();
            $table->text('grievance_description')->nullable();
            $table->string('uploadCheck')->nullable();
            $table->string('doc')->nullable();
            $table->text('proposed_solution')->nullable();
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
        Schema::dropIfExists('grievances');
    }
};
