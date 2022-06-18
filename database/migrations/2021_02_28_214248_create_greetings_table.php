<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGreetingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('greetings', function (Blueprint $table) {
            $table->id();
            $table->string('option')->nullable();
            $table->string('main_word')->nullable();
            $table->string('question')->nullable();
            $table->string('trans_eng')->nullable();
            $table->string('trans_ar')->nullable();
            $table->string('image')->nullable();
            $table->string('audio')->nullable();

            $table->unsignedBigInteger('topic_id')->nullable();
            $table->unsignedBigInteger('level_id')->nullable();


            $table->foreign('topic_id')->references('id')->on('topics')->onDelete('cascade');
            $table->foreign('level_id')->references('id')->on('levels')->onDelete('cascade');
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
        Schema::dropIfExists('greetings');
    }
}
