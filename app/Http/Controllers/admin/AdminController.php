<?php
/**
 * Created by PhpStorm.
 * User: trust.okoroego
 * Date: 8/13/15
 * Time: 3:14 PM
 */

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;


class AdminController extends Controller{

    public function getIndex()
    {
        return view('admin/index');
    }

    public function getUsers()
    {
        return view('admin/users');
    }


} 