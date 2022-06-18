<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGreetingResponsesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('greeting_responses', function (Blueprint $table) {
            $table->id();
            $table->string('option')->nullable();
            $table->string('response')->nullable();
            $table->string('trans_eng')->nullable();
            $table->string('trans_ar')->nullable();
            $table->string('audio')->nullable();

            $table->unsignedBigInteger('greetings_id')->nullable();


            $table->foreign('greetings_id')->references('id')->on('greetings')->onDelete('cascade');
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
        Schema::dropIfExists('greeting_responses');
    }
}
