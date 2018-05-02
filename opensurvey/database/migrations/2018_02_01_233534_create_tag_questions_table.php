<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTagQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
		
		
        Schema::create('tag__questions', function (Blueprint $table) {
            $table->increments('id');
			$table->unsignedInteger('tag_id');
			$table->integer('question_id');
            $table->timestamps();
			
			$table->foreign('tag_id')->references('id')->on('tags');
			$table->foreign('question_id')->references('id')->on('questions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
		Schema::dropIfExists('tag__questions');
        //
    }
}
