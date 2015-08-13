<?php

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
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password', 60);
            $table->string('confirmation_token');
            $table->integer('usertype'); // 1 for admin, 0 for site users
            $table->string('privileges'); // empty for usertype = 0
            $table->integer('subscribed'); // 1 for true , 0 for false
            $table->string('status',10); // user account status suspended/open/unconfirmed
            $table->string('profile_image'); // user profile picture
            $table->rememberToken();
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
        Schema::drop('users');
    }
}
