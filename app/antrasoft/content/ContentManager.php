<?php
/**
 * Created by PhpStorm.
 * User: trust.okoroego
 * Date: 10/15/15
 * Time: 6:08 AM
 */

namespace App\antrasoft\content;
use App\antrasoft\models\Comment;
use App\antrasoft\models\Content;
use App\antrasoft\models\Contenttype;
use App\antrasoft\account\UserRepository;
use Illuminate\Support\Facades\Response;
use Session,Request;


class ContentManager {

    private $content;
    private $contentLink;
    private $contentComments;

    public function __Construct($content=null)
    {
        $this->content = $content;
    }

    public function getUsersBasedOnType($type)
    {
       $user = new UserRepository();
       return $user->getUsersBasedOnType($type);
    }

    public function getContents()
    {
        $eachcontent = array();
        foreach($this->content as $c)
        {
            // for the content to a readable format
            $carray = array(
            "id" => $c->id,
            "title"=> $c->title,
            "intro_text" => $c->intro_text,
            "featured_image" => $c->featured_image,
            "main_text" => $c->main_text,
            "tg" => $this->getTags($c->tags),
            "link" => '2015/12/3/'.str_replace(' ','-',$c->title),
            "published_date" => $c->created_at->format('d/m/Y'),
            "comments"=> $this->getComments($c->id),
            "weight"=>$c->weight,
            "published" => $c->published,
            "status"=>$c->status,
            "created_at"=>$c->created_at
            );
            array_push($eachcontent,$carray);
        }

        return $eachcontent;
    }

    public function cretaeContent()
    {
        $content =  new Content();
        $content->title = Request::input('description1');
        $content->intro_text = Request::input('description2');;
        $content->featured_image = Request::input('imageurl');
        $content->main_text = Request::input('editor');
        $content->content_type = Response::input('contenttype');
        if(Request::input('publisheddate')=="")
        {
            $content->published_date = \Carbon\Carbon::now();
        }else{
            $content->published_data = "to be continued..."   /10/21/2015
        }
        $content->status = 1;
        $content->user = Response::input('contentpublisher');
        $content->weight = 0;
        $content->save();
    }

    public function setContentType($id)
    {
        Session::put("contenttype",$id);
        return 1;
    }

    public function getContentTypes()
    {
        return Contenttype::all();
    }

    public function getActiveContenttype($id)
    {
       return Contenttype::find($id);
    }

    public function setWeight()
    {
        // set the weight content ie ordring
        $content_id = Request::input('contentid');
        $weight = Request::input('weight');
        $content = Content::find($content_id);
        if(!$content)
        {
            return 0;
        }
        $content->weight = $weight;
        $content->save();
        return 1;
    }

    public function setPublished()
    {
        // publish and unpublish a content
        $contentid = Request::input('contentid');
        $content = Content::find($contentid);

        if($content->published==0)
        {
            $content->published = 1;
            $content->save();
            return 1;
        }else{
            $content->published = 0;
            $content->save();
            return 0;
        }
    }

    private function getTags($tags)
    {
        $tags = explode(',',$tags);
        $tg = "";
        foreach($tags as $t)
        {
            if($t!="")
            {
                $tg.='<span class="tag"><span>'.$tg.'&nbsp;&nbsp;</span></span>';
            }
        }
        return $tg;
    }

    private function getComments($contentid)
    {
        $getComments = Comment::where('postid',$contentid)->get();
        return $getComments;
    }
} 