<?php
/**
 * Created by PhpStorm.
 * User: trust.okoroego
 * Date: 8/13/15
 * Time: 3:14 PM
 */

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\antrasoft\admin\adminRepositroy;
use Carbon\Carbon;
use Carbon\CarbonInterval;
use Request;


class AdminController extends Controller{

    use MediaController;
    use SlidePartialController;
    use DirectoryreaderController;
    use AlbumPartialController;
    use ContentPartialController;


    private $adminRepo;
    public function __construct(adminRepositroy $adm)
    {
        $this->middleware('adminauth'); //
        $this->adminRepo = $adm;
    }

    public function getIndex()
    {
        return view('admin/index');
    }

    public function getUsers()
    {
        $users = $this->adminRepo->getUsers();
        return view('admin/users/users',compact('users'));
    }

    public function getNewuser()
    {
        $privileges = $this->adminRepo->getAccountPriviledges(); // load all available privileges
        $usertypes = $this->adminRepo->getUserTypes();
        $message="";
        return view('admin/users/newuser',compact('privileges','usertypes','message'));
    }
    public function postNewuser()
    {
        $privileges = $this->adminRepo->getAccountPriviledges(); // load all available privileges
        $usertypes = $this->adminRepo->getUserTypes();
        $message= $this->adminRepo->createUser();
        return view('admin/users/newuser',compact('message','privileges','usertypes'));

    }

    public function getUserprofile($userId=null)
    {
        $user = $this->adminRepo->getOneUser($userId);
        return view('admin/users/userprofile',compact('user'));
    }

    public function getEditprofile($id)
    {
        $privileges = $this->adminRepo->getAccountPriviledges(); // load all available privileges
        $usertypes = $this->adminRepo->getUserTypes();
        $user = $this->adminRepo->getOneUser($id);
        $message="";
        return view('admin/users/editprofile',compact('message','privileges','usertypes','user'));
    }
    public function postEditprofile($id)
    {
        $privileges = $this->adminRepo->getAccountPriviledges(); // load all available privileges
        $usertypes = $this->adminRepo->getUserTypes();
        $user = $this->adminRepo->getOneUser($id);
        $message=$this->adminRepo->updateUser($id);
        if($message[0]=='ok')
        {
            $message = $message[1];
            return redirect('admin/editprofile/'.$id)->with('message',$message);
        }
        $message = $message[1];
        return view('admin/users/editprofile',compact('message','privileges','usertypes','user'));
    }


} 