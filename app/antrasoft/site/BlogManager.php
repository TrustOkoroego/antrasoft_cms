<?php
/**
 * Created by PhpStorm.
 * User: trust.okoroego
 * Date: 11/3/15
 * Time: 7:56 PM
 */

namespace App\antrasoft\site;
use App\antrasoft\models\Comment;
use App\antrasoft\models\Content;
use App\antrasoft\models\Contenttype;
use App\antrasoft\account\UserRepository;
use App\antrasoft\content\ContentManager;
use App\antrasoft\models\User;
use DateTime,URL;

class BlogManager extends ContentManager {
    private $cmanager;
    function __construct(ContentManager $cm)
    {
        $this->cmanager = $cm;
    }
    public function getBlogs()
    {
        $content = Content::where('content_type',1)->where('published',1)->orderBy('published_date','desc')->paginate(3);

        $eachcontent = array();
        foreach($content as $c)
        {
            // for the content to a readable format
            $carray = array(
                "id" => $c->id,
                "title"=> $c->title,
                "intro_text" => $c->intro_text!="" ? $this->truncate($c->intro_text):$this->truncate(strip_tags($c->main_text)),
                "featured_image" => $this->getFearturedImage($c->featured_image),
                "main_text" => $c->main_text,
                "poster"=> $this->getPoster($c->userid),
                "tg" => $this->getTags($c->tags),
                "link" => $c->id.'/'.$c->created_at->format('Y/m').'/'.str_replace(' ','-',$c->title),
                "published_date" => array(
                    "day"=> DateTime::createFromFormat('Y-m-d', $c->published_date)->format('d'),
                    "month"=> DateTime::createFromFormat('Y-m-d', $c->published_date)->format('M'),
                    "year"=> DateTime::createFromFormat('Y-m-d', $c->published_date)->format('Y')),
                "comments"=> $this->getComments($c->id),
                "commentcount"=>count($this->getComments($c->id)),
                "weight"=>$c->weight,
                "published" => $c->published,
                "status"=>$c->status,
                "created_at"=>$c->created_at
            );
            array_push($eachcontent,$carray);
        }

        return $ret = array($content,$eachcontent);
    }



    public function getSingleBlog($idblogpost)
    {
        $c = Content::where('id',$idblogpost)->where('content_type',1)->where('published',1)->first();
        if(count($c)<1)
        {
            return 'article has been moved or is unavailable';
        }
            // for the content to a readable format
        $carray = array(
            "id" => $c->id,
            "title"=> $c->title,
            "intro_text" => $c->intro_text!="" ? $this->truncate($c->intro_text):$this->truncate(strip_tags($c->main_text)),
            "featured_image" => $this->getFearturedImage($c->featured_image),
            "main_text" => $c->main_text,
            "poster"=> $this->getPoster($c->userid),
            "tg" => $this->getTags($c->tags),
            "link" => $c->id.'/'.$c->created_at->format('Y/m').'/'.str_replace(' ','-',$c->title),
            "published_date" => array(
                "day"=> DateTime::createFromFormat('Y-m-d', $c->published_date)->format('d'),
                "month"=> DateTime::createFromFormat('Y-m-d', $c->published_date)->format('M'),
                "year"=> DateTime::createFromFormat('Y-m-d', $c->published_date)->format('Y')),
            "comments"=> $this->getComments($c->id),
            "commentcount"=>count($this->getComments($c->id)),
            "weight"=>$c->weight,
            "published" => $c->published,
            "status"=>$c->status,
            "created_at"=>$c->created_at
        );

        return $carry;

    }



    private function truncate($string,$length=100,$append="&hellip;") {
        $string = trim($string);

        if(strlen($string) > $length) {
            $string = wordwrap($string, $length);
            $string = explode("\n", $string, 2);
            $string = $string[0] . $append;
        }

        return $string;
    }
    private function getPoster($id)
    {
       $u = User::find($id);
        return $u->firstname.' '.$u->lastname;
    }

    private function getFearturedImage($image)
    {
        if($image=="")
        {
            return "";
        }else{
            return '<img style="width:100%" src="'.URL::to('/').$image.'" />';
        }
    }

} 