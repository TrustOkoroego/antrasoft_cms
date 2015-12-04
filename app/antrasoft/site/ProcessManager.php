<?php
/**
 * Created by PhpStorm.
 * User: trust.okoroego
 * Date: 11/5/15
 * Time: 3:01 PM
 */

namespace App\antrasoft\site;
use App\antrasoft\models\Message;
use App\antrasoft\models\Subscriber;
use App\antrasoft\models\User;
use Request,Hash;
use Mail;


class ProcessManager {
    public function sendMessage()
    {
        $username = Request::input('username');
        $subject = Request::input('subject');
        $message = Request::input('message');
        $email = Request::input('email');
        if(!filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            return ' <div class="alert alert-danger" id="MessageNotSent"> Please provide a valid email address.</div>';
        }

        if($username=="" || $subject=="" || $message=="" || $email=="" )
        {
            return ' <div class="alert alert-danger" id="MessageNotSent"> Please check and correct the form and submit again.</div>';
        }
        else{

            $mes = new Message();
            $mes->username = $username;
            $mes->subject = $subject;
            $mes->email = $email;
            $mes->message = $message;
            $mes->save();

            $data = array('msg'=>$message);
            // send message
            Mail::send('emails.messages', ['data' => $data], function ($m) use ($email,$username,$subject) {
                $m->from($email, $username);

                $m->to('willie.ebri@gmail.com', 'Willie Ebri')->subject($subject);
            });

            return '<div class="alert alert-success" id="MessageSent">We have received your message, we will contact you very soon.</div>';
        }


    }

    public function subscribe()
    {
        $em = Request::input('em');
        if(!filter_var($em,FILTER_VALIDATE_EMAIL))
        {
            return 'Email address is not valid!';
        }
        $check = Subscriber::where('email',$em)->count();
        if($check>0)
        {
            return 'Thank you, You have already subscribed!';
        }else{
            $s = new Subscriber();
            $s->email = $em;
            $s->save();
            return 1;
        }

    }

    public function createUser()
    {
        Request::flash();
        $firstname = Request::Input('firstname');
        $lastname = Request::Input('lastname');
        $email = Request::Input('email');
        $usertype ="" ;
        $password = Request::Input('password');
        $message = "";
        $user = User::where('email',$email)->count();
        if($user>0)
        {
            $message.='<div class="alert alert-error alert-dismissible fade in" role="alert">';
            $message.= '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>';
            $message.=  '</button><strong>Sorry!</strong> An account with the same email Already Exist. </div>';

            return $message;

        }
        if($firstname=="" || $lastname=="" | $email=="" || $password=="")
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
        $u->username = $email;
        $u->password = Hash::make($password);
        $u->save();

        return "created";


    }
}