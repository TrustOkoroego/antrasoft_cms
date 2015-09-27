<?php
/**
 * Created by PhpStorm.
 * User: trust.okoroego
 * Date: 9/18/15
 * Time: 4:56 PM
 */

namespace App\Http\Controllers\admin;
use Request,Auth,URL;
use App\antrasoft\helper;


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
            return URL::to('/').'/images/slide/'.$imageName;
        }
        if($type==2) // check for gallery image upload
        {
            $imageName = 'img'.time().Auth::user()->id.'.'.Request::file('image')->getClientOriginalExtension();
            Request::file('image')->move(base_path() . '/public/images/slide/', $imageName);
            return URL::to('/').'/images/gallery/'.$imageName;
        }

    }

    public function getCropimage()
    {

       $imgP = new helper\ImageProcessing(base_path() . '/public/images/slide/img14431907277.jpg');
       $imgP->crop(0,0,600,300);
       $imgP->saveImage(base_path() . '/public/images/slide/tnew.jpg',90);
        return '<img src="'.URL::to('/') . '/images/slide/tnew.jpg" />';
    }



}