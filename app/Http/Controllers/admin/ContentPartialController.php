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

trait ContentPartialController {

    public function getContents()
    {
        $type = "";

        if($type!="")
        {
            $contents = Content::where("content_type",$type)->get();
        }

        $cmanager = new ContentManager(Content::all());
        $content = $cmanager->getContents();
        return view('admin/contents/contents',compact('content'));
    }
} 