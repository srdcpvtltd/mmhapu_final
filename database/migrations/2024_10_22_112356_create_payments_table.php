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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->integer('certificate_id')->nullable();
            $table->string('amount')->nullable();
            $table->string('transaction_date')->nullable();
            $table->string('transaction_number')->nullable();
            $table->string('method')->nullable();
            $table->string('currency')->nullable();
            $table->longText('json_response')->nullable();
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
        Schema::dropIfExists('payments');
    }
};
