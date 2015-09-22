<?php
/**
 * Created by PhpStorm.
 * User: trust.okoroego
 * Date: 9/18/15
 * Time: 4:56 PM
 */

namespace App\Http\Controllers\admin;
use Request,Auth,URL;

trait MediaController{

    public function getMedia()
    {
        return view('admin/media/home');
    }


    public function postUploadimage($type)
    {

        if($type==1) // check for slide image ulpload
        {
            $imageName = 'img'.time().Auth::user()->id.'.'.Request::file('image')->getClientOriginalExtension();
            Request::file('image')->move(base_path() . '/public/images/slide/', $imageName);

            $imagic = new \Imagick(base_path() . '/public/images/slide/'.$imageName);
            $imagic->cropimage(400,200,4,6);


            return URL::to('/').'/images/slide/'.$imageName;
        }

        if($type==2) // check for gallery image upload
        {
            $imageName = 'img'.time().Auth::user()->id.'.'.Request::file('image')->getClientOriginalExtension();
            Request::file('image')->move(base_path() . '/public/images/slide/', $imageName);
            return URL::to('/').'/images/gallery/'.$imageName;
        }



    }
} 