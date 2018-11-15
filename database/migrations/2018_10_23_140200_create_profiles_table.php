<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->date('dob');
            $table->string('street');
            $table->string('city');
            $table->string('state');
            $table->string('profile_picture');
            $table->string('certificate');
            $table->string('kinLastName');
            $table->string('kinFirstName');
            $table->string('kinEmail')->nullable();
            $table->string('kinPhone');
            $table->string('relationship');
            $table->string('accountname');
            $table->string('accountno');
            $table->string('bank');
            $table->string('bvn');
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
        Schema::dropIfExists('profiles');
    }
}
