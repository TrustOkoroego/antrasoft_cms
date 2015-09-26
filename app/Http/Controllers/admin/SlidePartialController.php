<?php
/**
 * Created by PhpStorm.
 * User: trust.okoroego
 * Date: 9/19/15
 * Time: 4:13 AM
 */

namespace App\Http\Controllers\admin;

use Request,URL,Redirect;
use App\antrasoft\models\Image;


trait SlidePartialController{

    public function getSlides()
    {
        $slides = Image::where('image_type',1)->orderBy('weight','asc')->orderBy('created_at','desc')->get();
        return view('admin/slide/slide',compact('slides'));
    }

    public function getNewslide()
    {
        return view('admin/slide/newslide');
    }

    public function postNewslide()
    {
        $error = '';
        $desc1 = Request::input('description1');
        $desc2 = Request::input('description2');
        $img_url = str_replace(URL::to('/'),"",Request::input('imageurl'));
        if($desc1=="")
        {
            $error = 'Please fill the empty fields';
            return view('admin/slide/newslide',compact('error'));
        }
        $image = new Image();
        $image->image_url = $img_url;
        $image->image_description = $desc1;
        $image->image_type = 1;
        $image->save();

        return Redirect::to('admin/slides');
    }

    public function postChangeweight()
    {
        $slideid = Request::input('slideid');
        $weight = Request::input('weight');
        $slide = Image::find($slideid);
        if(!$slide)
        {
            return 0;
        }
        $slide->weight = $weight;
        $slide->save();
        return 1;
    }

    public function postChangepublish()
    {
        $slideid = Request::input('slideid');
        $slide = Image::find($slideid);
        if($slide->published==0)
        {
            $slide->published = 1;
            $slide->save();
            return 1;
        }else{
            $slide->published = 0;
            $slide->save();
            return 0;
        }

    }
} 