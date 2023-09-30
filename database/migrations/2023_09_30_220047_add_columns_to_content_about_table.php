<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToContentAboutTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('content_about', function (Blueprint $table) {
            $table->string('logo')->nullable();
            $table->string('address')->nullable();
            $table->string('from_time')->nullable();
            $table->string('to_time')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('content_about', function (Blueprint $table) {
            $table->dropColumn('logo');
            $table->dropColumn('address');
            $table->dropColumn('from_time');
            $table->dropColumn('to_time');
        });
    }
}
