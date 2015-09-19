<?php
/**
 * Created by PhpStorm.
 * User: trust.okoroego
 * Date: 9/18/15
 * Time: 4:56 PM
 */

namespace App\Http\Controllers\admin;

trait MediaController{

    public function getMedia()
    {
        return view('admin/media/home');
    }
} 