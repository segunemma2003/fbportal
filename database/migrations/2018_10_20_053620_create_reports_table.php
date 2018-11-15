<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('session_id')->unsigned();
            $table->string('partner');
            $table->string('trainning_date');
            $table->string('venue');
            $table->string('level');
            $table->string('press');
            $table->string('females');
            $table->string('male');
            $table->string('facebook');
            $table->string('newfacebook');
            $table->string('instagram');
            $table->string('newinstagram');
            $table->string('whatsapp');
            $table->string('question');
            $table->string('allquestion')->nullable();
            $table->string('answer')->nullable();
            $table->string('trainer_feedback')->nullable();
            $table->string('assistance')->nullable();
            $table->string('googledrivelink');
            $table->string('pictureslink');
            $table->string('status')->default(0);
            $table->string('reply')->nullable();
            $table->foreign('session_id')->references('id')->on('sessions')
            ->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('reports');
    }
}
