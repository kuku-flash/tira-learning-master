<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlphabetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alphabets', function (Blueprint $table) {
            $table->id();
            $table->string('small_letter');
            $table->string('capital_letter');
            $table->string('letter_audio')->nullable();
            $table->string('illustration_text');
            $table->string('illustration_audio')->nullable();
            $table->string('illustration_image')->nullable();
            $table->string('illustration_text_trans_eng')->nullable();
            $table->string('illustration_text_trans_ar')->nullable();
            $table->unsignedBigInteger('language_id');
            $table->foreign('language_id')->references('id')->on('languages')->onDelete('cascade');

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
        Schema::dropIfExists('alphabets');
    }
}
