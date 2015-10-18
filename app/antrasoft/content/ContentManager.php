<?php
/**
 * Created by PhpStorm.
 * User: trust.okoroego
 * Date: 10/15/15
 * Time: 6:08 AM
 */

namespace App\antrasoft\content;
use App\antrasoft\models\Comment;


class ContentManager {

    private $content;
    private $contentLink;
    private $contentComments;

    public function __Construct($content)
    {
        $this->content = $content;
    }

    public function getContents()
    {
        $eachcontent = array();
        foreach($this->content as $c)
        {
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
            "status"=>$c->status,
            "created_at"=>$c->created_at
            );
            array_push($eachcontent,$carray);
        }

        return $eachcontent;
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