<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContentAboutTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('content_about', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('block_quota')->nullable();
            $table->text('about')->nullable();
            $table->string('phone')->nullable();
            $table->integer('year')->nullable();
            $table->string('title_year')->nullable();
            $table->string('photo')->nullable();
            $table->string('circle_photo')->nullable();
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
        Schema::dropIfExists('content_about');
    }
}
