<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->bigIncrements('id');
            $table->integer('users_id');
            $table->string('email')->unique();
            $table->string('gender');
            $table->string('height');
            $table->string('countries');
            $table->string('languages');
            $table->string('dob');
            $table->string('user_age');
            $table->text('mybio');
            $table->text('myinterest');
            $table->tinyInteger('status');
            //$table->enum('status', ['inactive', 'active']);
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
