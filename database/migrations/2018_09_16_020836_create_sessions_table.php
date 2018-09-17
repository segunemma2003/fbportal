<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSessionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sessions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_organisation')->nullable();
            $table->string('expected')->nullable();
            $table->string('venue')->nullable();
            $table->string('location')->nullable();
            $table->string('trainnig')->nullable();
            $table->string('time')->nullable();
            $table->tinyInteger('status')->default(0);
            $table->integer('user_id')->unsigned();

            $table->foreign('user_id')->references('id')->on('users')
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
        Schema::dropIfExists('sessions');
    }
}
