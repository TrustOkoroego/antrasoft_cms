<?php
/**
 * Created by PhpStorm.
 * User: trust.okoroego
 * Date: 10/15/15
 * Time: 5:54 AM
 */

namespace App\Http\Controllers\admin;


use Request,URL,Redirect;
use App\antrasoft\content\ContentManager;
use App\antrasoft\models\Content;
use App\antrasoft\models\Comment;
use App\antrasoft\models\Tag;
use Session;

trait ContentPartialController {

    public function getContents()
    {
        $type = Session::get('contenttype');
        $contents ="";

        if($type!="")
        {
            $contents = Content::where("content_type",$type)->orderBy('weight','asc')->get();

        }else{
            $contents = Content::orderBy('weight','asc')->get();
        }

        $cmanager = new ContentManager($contents);
        $content = $cmanager->getContents($contents);
        $ctypes = $cmanager->getContentTypes();
        $activeContentType = $cmanager->getActiveContenttype($type);
        return view('admin/contents/contents',compact('content','ctypes','activeContentType'));
    }

    public function getNewcontent()
    {
        $type = Session::get('contenttype');
        $contents ="";
        $error = "";

        if($type!="")
        {
            $contents = Content::where("content_type",$type)->orderBy('weight','asc')->get();

        }else{
            $contents = Content::orderBy('weight','asc')->get();
        }

        $cmanager = new ContentManager($contents);
        $content = $cmanager->getContents($contents);
        $ctypes = $cmanager->getContentTypes();
        $publishers = $cmanager->getUsersBasedOnType('can_write_post');
        $activeContentType = $cmanager->getActiveContenttype($type);
       return view('admin/contents/newcontent',compact('content','ctypes','error','activeContentType','publishers'));
    }











    public function postSetcontenttype()
    {
        // set the content type session variable. return true and refresh the page

        $typeid = Request::input('ctypeid');
        $cmanager = new ContentManager();
        $cmanager->setContentType($typeid);
        return 1;

    }

    public function postChangecontentweight(ContentManager $cm)
    {
        return $cm->setWeight();
    }
    public function postChangecontentpublish(ContentManager $cm)
    {
        return $cm->setPublished();
    }
} 