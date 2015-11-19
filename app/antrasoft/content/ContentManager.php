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
use Session,Request,URL;


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
            "link" => $c->created_at->format('Y/m').'/'.$c->id.'/'.str_replace(' ','-',$c->title),
            "published_date" => $c->published_date,
            "end_published_date" => $c->stop_published,
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

    public function getOneContent()
    {
        $eachcontent = "";
        $c=$this->content;
            $carray = array(
                "id" => $c->id,
                "title"=> $c->title,
                "intro_text" => $c->intro_text,
                "featured_image" => $c->featured_image,
                "main_text" => $c->main_text,
                "contenttype" => $c->content_type,
                "tg" => $this->getTags($c->tags),
                "main_link" => $c->main_link,
                "link" => $c->created_at->format('Y/m').'/'.$c->id.'/'.str_replace(' ','-',$c->title),
                "published_date" => $c->published_date,
                "end_published_date" => $c->stop_published,
                "comments"=> $this->getComments($c->id),
                "weight"=>$c->weight,
                "published" => $c->published,
                "status"=>$c->status,
                "created_at"=>$c->created_at
            );
        return $carray;
    }

    public function createContent()
    {
        $content =  new Content();
        $content->title = Request::input('description1');
        $content->intro_text = Request::input('description2');
        $content->featured_image = str_replace(URL::to('/'),"",Request::input('imageurl'));
        $content->main_text = Request::input('editor');
        $content->main_link = Request::input('mainlink');
        $content->content_type = Request::input('contenttype');
        if(Request::input('publisheddate')=="")
        {
            $content->published_date = \Carbon\Carbon::now()->format('Y-m-d');
            $content->stop_published = \Carbon\Carbon::now()->format('Y-m-d');
        }else{
            $content->published_date = Request::input('publisheddate');
            $content->stop_published = Request::input('endpublisheddate');
        }
        $content->status = 1;
        $content->userid = Request::input('contentpublisher');
        $content->weight = 0;
        $content->save();

    }

    public function editContent()
    {

        $content=$this->content;

        $content->title = Request::input('description1');
        $content->intro_text = Request::input('description2');
        $content->featured_image = str_replace(URL::to('/'),"",Request::input('imageurl'));
        $content->main_text = Request::input('editor');
        $content->main_link = Request::input('mainlink');
        $content->content_type = Request::input('contenttype');

        if(Request::input('publisheddate')=="")
        {

        }else{
            $content->published_date = Request::input('publisheddate');
            $content->stop_published = Request::input('endpublisheddate');
        }

        $content->userid = Request::input('contentpublisher');
        $content->save();
        return 1;

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

    public function getTags($tags)
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

    public function getComments($contentid)
    {
        $getComments = Comment::where('postid',$contentid)->get();
        return $getComments;
    }

    // testimony

    public function getTestimony()
    {
        $testimony =  Content::where('content_type',4)->where('published',1)->limit(8)->get();
        return $testimony;
    }


    // get events
    public function getEvenList($type=null)   // eventtype is intro|full
    {
        if($type=='intro')
        {
            $event =  Content::where('content_type',3)->where('published',1)->orderBy('weight','asc')->paginate(3);
        }else{
            $event =  Content::where('content_type',3)->where('published',1)->orderBy('published_date','asc')->paginate(6);
        }
        return $event;
    }
    public function getEventDetails($eventid)   // eventtype is intro|full
    {

       $event =  Content::where('id',$eventid)->where('content_type',3)->where('published',1)->first();
       return $event;

    }


    public function getProgrammes()
    {
        $programmes =  Content::where('content_type',6)->where('published',1)->orderBy('weight','asc')->get();
        return $programmes;
    }

    public function getOneProgramme($id)
    {
        $programmes =  Content::find($id);
        return $programmes;
    }

    // delete a content
    public function deleContent($id)
    {
        $content = Content::find($id);
        if(count($content)>0)
        {
            $content->delete();
            return 1;
        }
    }


    public function getAds()
    {
        $content = Content::where('content_type',5)->where('published',1)->orderBy('weight','asc')->limit(4)->get();
        return $content;
    }


    public function searchallcontent($param)
    {
        $res = Content::where(function($q){
            $q->Where('content_type',1)
                ->orWhere('content_type',2)
                ->orWhere('content_type',3);
        })->Where(function($t) use ($param){
               $t->Where('main_text','like','%'.$param.'%')
               ->orWhere('title','like','%'.$param.'%');
            });
        $resP = $res->paginate(4);

        $result = array();
        foreach($resP as $c)
        {
            $carray = array(
                "id" => $c->id,
                "title"=> $c->title,
                "intro_text" => $c->intro_text,
                "main_text" => $c->main_text,
                "link" => $this->getSearchResultLink($c->id,$c->content_type,$c->title,$c->created_at),
                "published_date" => $c->created_at->format('d/m/Y'),
            );
            array_push($result,$carray);
        }
        $resCount = $res->count();


        return array('result'=>$resP,'result_main'=>$result,'resultCount'=>$resCount);
    }

    private function getSearchResultLink($id,$type,$title,$created_at)
    {
        // check the result type and return appropriate link
        if($type==1 || $type==2)
        {
            return URL::to('/').'/blog/post/'.$id.'/'.$created_at->format('Y/m').'/'.str_replace(' ','-',$title);
        }

        return URL::to('/').'/eventdetail/'.$id.'/'.str_replace(' ','-',$title);
    }
}
