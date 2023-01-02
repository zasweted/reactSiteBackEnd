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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('short_title');
            $table->text('short_description');
            $table->string('short_image');
            $table->string('long_title');
            $table->text('long_description');
            $table->string('total_lecture');
            $table->string('total_duration');
            $table->smallInteger('total_student');
            $table->string('total_category');
            $table->string('total_tags');
            $table->string('total_instructor');
            $table->decimal('total_price', 10, 2);
            $table->string('skill_all');
            $table->string('video_url');
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
        Schema::dropIfExists('courses');
    }
};
