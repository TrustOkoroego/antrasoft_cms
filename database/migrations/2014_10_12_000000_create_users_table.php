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
            $table->string('username');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('email')->unique();
            $table->string('password', 60);
            $table->string('confirmation_token',100);
            $table->string('usertype'); // 1 for admin, 0 for site users
            $table->string('privilege'); // empty for usertype = 0
            $table->string('profile_image',300); // empty for usertype = 0
            $table->integer('subscribed')->default(1); // 1subscribed to news letter
            $table->string('status',10); // user account status suspended/open/unconfirmed
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
