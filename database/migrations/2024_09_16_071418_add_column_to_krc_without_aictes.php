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
        Schema::table('krc_without_aictes', function (Blueprint $table) {
            $table->string('file_no')->nullable()->before('designation');
            $table->string('management')->nullable()->before('email');
            $table->string('affiliating')->nullable()->before('email');
            $table->string('course_name')->nullable()->before('email');
            $table->string('intake')->nullable()->before('email');
            $table->string('session')->nullable()->before('email');
            $table->string('district')->nullable()->before('email');
            $table->text('address')->nullable()->before('email');
            $table->string('incharge')->nullable()->before('contact');
            $table->string('code')->nullable()->before('resume');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('krc_without_aictes', function (Blueprint $table) {
            $table->dropColumn('krc_without_aictes');
        });
    }
};
