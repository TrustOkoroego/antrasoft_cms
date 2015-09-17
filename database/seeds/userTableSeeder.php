<?php

use Illuminate\Database\Seeder;
use App\antrasoft\models\User;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->username = "faker";
        $user->lastname = "benson";
        $user->firstname = "umuomo";
        $user->email = "dev@antrasoft.com";
        $user->password = Hash::make("password");
        $user->confirmation_token = str_random();
        $user->usertype = 'admin'; // admin|users
        $user->privilege = "can_write_post,can_approve_comment,can_manage_users";
        $user->profile_image = "img.jpg";
        $user->save();



    }
}
