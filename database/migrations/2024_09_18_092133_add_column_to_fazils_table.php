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
        Schema::table('fazils', function (Blueprint $table) {
            $table->string('managment')->nullable()->after('designation');
            $table->string('regulating')->nullable()->after('name');
            $table->string('course')->nullable()->after('regulating');
            $table->string('intake')->nullable()->after('course');
            $table->string('district')->nullable()->after('intake');
            $table->string('address')->nullable()->after('district');
            $table->string('incharge')->nullable()->after('email');
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
        Schema::table('fazils', function (Blueprint $table) {
            $table->dropColumn('fazils');
        });
    }
};
