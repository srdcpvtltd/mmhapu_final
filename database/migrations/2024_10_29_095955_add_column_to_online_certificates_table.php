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
        Schema::table('online_certificates', function (Blueprint $table) {
            $table->string('apaar_id')->nullable()->after('adhar_number');
            $table->string('document')->nullable()->after('apaar_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('online_certificates', function (Blueprint $table) {
            //
        });
    }
};
