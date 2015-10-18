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
        $error = "";
        return view('admin/slide/newslide',compact('error'));
    }

    public function postNewslide()
    {
        $error = '';
        $desc1 = Request::input('description1');
        $desc2 = Request::input('description2');
        $img_url = str_replace(URL::to('/'),"",Request::input('imageurl'));
        if($desc1=="")
        {
            $error = '<div class="alert alert-danger alert-dismissible fade in" role="alert">';
            $error.= '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>';
            $error.=  '</button><strong> Please fill the empty field.</strong> </div>';
            return view('admin/slide/newslide',compact('error'));
        }
        if($img_url=="")
        {
            $error = '<div class="alert alert-danger alert-dismissible fade in" role="alert">';
            $error.= '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>';
            $error.=  '</button><strong>No image Selected.</strong> </div>';
            return view('admin/slide/newslide',compact('error'));
        }
        $image = new Image();
        $image->image_url = $img_url;
        $image->image_description = str_replace('[b]','</br>',$desc1);
        $image->image_description2 = str_replace('[b]','</br>',$desc2);
        $image->image_type = 1;
        $image->save();

        return Redirect::to('admin/slides');
    }


    public function getEditslide($slideId=0)
    {
        $slide = Image::find($slideId);
        if(count($slide)<1)
        {
            return 'Page not found';
        }
        $error = "";
        return view('admin/slide/editslide',compact('error','slide'));
    }
    public function postEditslide($slideId=0)
    {
        $error = '';
        $desc1 = Request::input('description1');
        $desc2 = Request::input('description2');
        $img_url = str_replace(URL::to('/'),"",Request::input('imageurl'));

        // check if the slide user wants to edit is existing
        $slide = Image::find($slideId);
        if(count($slide)<1)
        {
            return 'Page not found'; // if no slide for the id. throw a page not found exception.
        }

        if($desc1=="")
        {
            $error = '<div class="alert alert-danger alert-dismissible fade in" role="alert">';
            $error.= '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>';
            $error.=  '</button><strong> Please fill the empty field.</strong> </div>';
            return view('admin/slide/editslide',compact('error'));
        }
        if($img_url=="")
        {
            $error = '<div class="alert alert-danger alert-dismissible fade in" role="alert">';
            $error.= '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>';
            $error.=  '</button><strong>No image Selected.</strong> </div>';
            return view('admin/slide/editslide',compact('error'));
        }
        $image = Image::find($slideId);
        if(count($image)>0)
        {
            $image->image_url = $img_url;
            $image->image_description = str_replace('[b]','</br>',$desc1);
            $image->image_description2 = str_replace('[b]','</br>',$desc2);
            $image->image_type = 1;
            $image->save();
        }

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

    public function postDltsld()
    {
        $slideid = Request::input('slideid');
        $slide = Image::find($slideid);
        if(count($slide)>0)
        {
            $slide->delete();
            return 1;
        }
    }
} 