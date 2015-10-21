<?php
/**
 * Created by PhpStorm.
 * User: trust.okoroego
 * Date: 9/15/15
 * Time: 11:40 AM
 */

namespace App\antrasoft\account;
use App\antrasoft\models\User;
use App\antrasoft\models\Privilege;
use Hash,Response;


class UserRepository {

    public function getUserPriviledges()
    {
        /**
         * return all user priviledges from database
         */
        return Privilege::all();
    }

    public function getUserType()
    {
        return array('admin','non-admin');
    }

    public function createUserFromAdmin($firstname,$lastname,$email,$privileges,$usertype, $password)
    {

        $message = "";
        $user = User::where('email',$email)->count();
        if($user>0)
        {
            $message.='<div class="alert alert-error alert-dismissible fade in" role="alert">';
            $message.= '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>';
            $message.=  '</button><strong>Sorry!</strong> An account with the same email Already Exist. </div>';

            return $message;

        }
        if($firstname=="" || $lastname=="" | $email=="" || $usertype=="")
        {
            $message.='<div class="alert alert-error alert-dismissible fade in" role="alert">';
            $message.= '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>';
            $message.=  '</button><strong>Sorry!</strong> Please fill the required fields </div>';
            return $message;
        }

        if(!filter_var($email,FILTER_VALIDATE_EMAIL))
        {
            $message.='<div class="alert alert-error alert-dismissible fade in" role="alert">';
            $message.= '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>';
            $message.=  '</button><strong>Sorry!</strong> Please provide a valid email</div>';
            return $message;
        }
        $u = new User();
        $u->firstname = $firstname;
        $u->lastname = $lastname;
        $u->email = $email;
        $u->usertype = $usertype;
        $u->privilege = $privileges;
        $u->username = $email;
        $u->password = Hash::make($password);
        $u->save();
        $message.='<div class="alert alert-success alert-dismissible fade in" role="alert">';
        $message.= '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>';
        $message.=  '</button><strong>Done!</strong> Account Created </div>';
        return $message;


    }

    public function updateUserFromAdmin($firstname,$lastname,$email,$privileges,$usertype,$userid)
    {

        $message = "";
        $u = User::find($userid);
        if(count($u)<1)
        {
            return "Sorry. This User does not exist";
        }
        if($firstname=="" || $lastname=="" | $email=="" || $usertype=="")
        {
            $message.='<div class="alert alert-error alert-dismissible fade in" role="alert">';
            $message.= '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>';
            $message.=  '</button><strong>Sorry!</strong> Please fill the required fields </div>';
            return $message;
        }

        if(!filter_var($email,FILTER_VALIDATE_EMAIL))
        {
            $message.='<div class="alert alert-error alert-dismissible fade in" role="alert">';
            $message.= '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>';
            $message.=  '</button><strong>Sorry!</strong> Please provide a valid email</div>';
            return $message;
        }

        $u->firstname = $firstname;
        $u->lastname = $lastname;
        $u->email = $email;
        $u->usertype = $usertype;
        $u->privilege = $privileges;
        $u->username = $email;
        $u->save();

        $message.='<div class="alert alert-success alert-dismissible fade in" role="alert">';
        $message.= '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>';
        $message.=  '</button><strong>Done!</strong> Account Updated </div>';
        return array('ok',$message);


    }
    public function getUsers()
    {
        return User::all();
    }

    public function getUsersBasedOnType($type)
    {
        return User::where('privilege','like','%'.$type.'%')->get();
    }

    public function getOneUser($id)
    {
        return User::find($id);
    }

    public function getPrivileges()
    {

    }

} 