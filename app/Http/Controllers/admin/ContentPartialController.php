<?php
/**
 * Created by PhpStorm.
 * User: trust.okoroego
 * Date: 10/15/15
 * Time: 5:54 AM
 */

namespace App\Http\Controllers\admin;


use Mockery\CountValidator\Exception;
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
        $cmanager = new ContentManager($contents);
        $ctypes = $cmanager->getContentTypes();
        $publishers = $cmanager->getUsersBasedOnType('can_write_post');
        $activeContentType = $cmanager->getActiveContenttype($type);
       return view('admin/contents/newcontent',compact('ctypes','error','activeContentType','publishers'));
    }
    public function postNewcontent()
    {

        $type = Session::get('contenttype');
        $contents ="";
        $error = "";
        $cmanager = new ContentManager($contents);
        try{
            $cmanager->createContent();
        }
        catch(Exception $ex)
        {
            return $ex->getMessage();
        }

        $ctypes = $cmanager->getContentTypes();
        $publishers = $cmanager->getUsersBasedOnType('can_write_post');
        $activeContentType = $cmanager->getActiveContenttype($type);
        return view('admin/contents/newcontent',compact('ctypes','error','activeContentType','publishers'));
    }

    public function getEditcontent($id)
    {
        $contents = Content::find($id);
        if(count($contents)<1){
            return "Content not found";
        }

        $error = "";
        $cmanager = new ContentManager($contents);
        $ctypes = $cmanager->getContentTypes();
        $publishers = $cmanager->getUsersBasedOnType('can_write_post');

        $cont = $cmanager->getOneContent();
        $type = $cont['contenttype'];
        $activeContentType = $cmanager->getActiveContenttype($type);
        //dd($cont);
        return view('admin/contents/editcontent',compact('ctypes','error','activeContentType','publishers','cont'));
    }

    public function postEditcontent($id)
    {
        $cont = Content::find($id);
        if(count($cont)<1)
        {
            return "Page not found";
        }
        $type = Session::get('contenttype');
        $contents ="";
        $error = "";
        $cmanager = new ContentManager($cont);
        try{
            $cmanager->editContent();
        }
        catch(Exception $ex)
        {
            return $ex->getMessage();
        }
        $cont = $cmanager->getOneContent();
        $ctypes = $cmanager->getContentTypes();
        $publishers = $cmanager->getUsersBasedOnType('can_write_post');
        $activeContentType = $cmanager->getActiveContenttype($type);
        return view('admin/contents/editcontent',compact('ctypes','error','activeContentType','publishers','cont'));
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

    public function postDltcontent(ContentManager $cm)
    {
      if(!Request::Ajax())
      {
          return "Not allowed";
      }
      return $cm->deleContent(Request::input('contentid'));
    }
} 