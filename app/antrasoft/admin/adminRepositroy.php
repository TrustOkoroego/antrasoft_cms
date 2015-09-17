<?php
/**
 * Created by PhpStorm.
 * User: trust.okoroego
 * Date: 9/15/15
 * Time: 11:44 AM
 */

namespace App\antrasoft\admin;
use App\antrasoft\account\UserRepository;
use Request;


class adminRepositroy {

    private $user;
    public function __construct(UserRepository $uRepo){
        $this->user=$uRepo;
    }


    public function getAccountPriviledges()
    {
        /**
         * Return user account priviledges
         */
        return $this->user->getUserPriviledges();
    }

    public function getUserTypes()
    {
        return $this->user->getUserType(); // returns user types.
    }

    public function createUser()
    {
        Request::flash();
        $privileges = "";
        $all_privilege = $this->user->getUserPriviledges();
        foreach($all_privilege as $p)
        {
            if(Request::Input($p->pr_name) == 'on')
            {
                $privileges.=','.$p->pr_name;
            }
        }
        $firstname = Request::Input('firstname');
        $lastname = Request::Input('lastname');
        $email = Request::Input('email');
        $usertype = Request::Input('usertype');
        $password = Request::Input('password');

        return  $this->user->createUserFromAdmin($firstname,$lastname,$email,$privileges,$usertype,$password);


    }

    public function updateUser($id)
    {

        $privileges = "";
        $all_privilege = $this->user->getUserPriviledges();
        foreach($all_privilege as $p)
        {
            if(Request::Input($p->pr_name) == 'on')
            {
                $privileges.=','.$p->pr_name;
            }
        }
        $firstname = Request::Input('firstname');
        $lastname = Request::Input('lastname');
        $email = Request::Input('email');
        $usertype = Request::Input('usertype');
        $password = Request::Input('password');

        return  $this->user->updateUserFromAdmin($firstname,$lastname,$email,$privileges,$usertype,$id);


    }

    public function getUsers()
    {
        return $this->user->getUsers();
    }

    public function getOneUser($id)
    {
        return $this->user->getOneUser($id);
    }

} 