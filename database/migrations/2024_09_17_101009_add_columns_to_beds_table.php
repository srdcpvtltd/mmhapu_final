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
        Schema::table('beds', function (Blueprint $table) {
            $table->string('management')->nullable()->after('designation');
            $table->string('affiliting')->nullable()->after('management');
            $table->string('intake')->nullable()->after('name');
            $table->string('district')->nullable()->after('intake');
            $table->text('address')->nullable()->after('district');
            $table->string('website')->nullable()->after('email');
            $table->string('director')->nullable()->after('website');
            $table->string('code')->nullable()->after('contact');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('beds', function (Blueprint $table) {
            $table->dropColumn('beds');
        });
    }
};
