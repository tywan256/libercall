<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::table('users', function (Blueprint $table) {
        //     $table->increments('id');
        //     $table->string('name')->nullable();
        //     $table->string('email')->unique()->nullable();
        //     $table->string('mobile')->nullable();
        //     $table->string('invitationcode')->nullable();
        //     $table->string('gender')->nullable();
        //     $table->string('dateofbirth')->nullable();
        //     $table->string('country')->nullable();
        //     $table->string('password')->nullable();
        //     $table->string('credit')->nullable();
        //     $table->rememberToken();
        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
