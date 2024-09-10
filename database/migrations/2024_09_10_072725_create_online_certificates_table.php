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
        Schema::create('online_certificates', function (Blueprint $table) {
            $table->id();
            $table->string('reg_no')->nullable();
            $table->string('roll_no')->nullable();
            $table->string('name')->nullable();
            $table->string('hindi_name')->nullable();
            $table->string('gender')->nullable();
            $table->string('email')->nullable();
            $table->string('number')->nullable();
            $table->string('certificate')->nullable();
            $table->string('college')->nullable();
            $table->string('session')->nullable();
            $table->string('passing_year')->nullable();
            $table->string('recive_degree')->nullable();
            $table->string('recive_mode')->nullable();
            $table->string('address')->nullable();
            $table->string('request_id')->nullable();
            $table->string('payment')->nullable();
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
        Schema::dropIfExists('online_certificates');
    }
};
