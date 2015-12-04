<?php
/**
 * Created by PhpStorm.
 * User: trust.okoroego
 * Date: 10/18/15
 * Time: 11:53 AM
 */

namespace App\Http\Controllers\site;
use App\antrasoft\content\ContentManager;
use App\antrasoft\site\BlogManager;
use App\Http\Controllers\Controller;
use App\antrasoft\site\ComponentGetters;
use App\antrasoft\site\ProcessManager;
use Request;


class HomeController extends Controller{
    private $component;
    public function __construct(ComponentGetters $c)
    {
        $this->component = $c;
    }
    public function getIndex()
    {
        $slide = $this->component->getSlide(4);
        $testimony = $this->component->getTestimony();
        $events = $this->component->getEvents('intro');
        return view('site/Home',compact('slide','testimony','events'));
    }

    public function getContact()
    {
        $msg = "";
        return view('site/Contactus',compact('msg'));
    }
    public function postContact()
    {
        $processManager = new ProcessManager();
        $msg = $processManager->sendMessage();
        return view('site/Contactus',compact('msg'));
    }

    public function postSubcribe()
    {
        $p = new ProcessManager();
        return $p->subscribe();
    }


    public function getSearch()
    {
        $param = Request::input('param')=="" ? "tryrbffgfbffhjjdbdndnbdbffhfbfbdbdbf" : Request::input('param');
        $ads = $this->component->getAds();
        $re =  $this->component->getSearchResult($param);
        $result = $re['result'];
        $count = $re['resultCount'];
        $result_main = $re['result_main'];
        $param = Request::input('param');

        return view('site/Search',compact('result','ads','param','count','result_main'));

    }

    public function getEvents()
    {
        $ads = $this->component->getAds();
        $events = $this->component->getEvents();
        return view('site/Events',compact('ads','events'));
    }

    public function getEventdetail($id,$title=null)
    {
        $ads = $this->component->getAds();
        $ev = $this->component->getEventDetail($id);
        if(count($ev)<1)
        {
            return 'Event not found';
        }
        return view('site/Eventdetails',compact('ads','ev'));
    }


    public function getProgrammes()
    {

        $programmes = $this->component->getProgrammes();
        $events = $this->component->getEvents();
        $cm = new ContentManager();
        $ads = $cm->getAds();
        $bm = new BlogManager();
        $fpost = $bm->getFeaturedPost();
        return view('site/Programmes',compact('programmes','events','fpost','ads'));
    }

    public function getProgram($id,$title=null)
    {

        $p = $this->component->getOneProgrammes($id);
        if(count($p)<1)
        {
            return "<h2>Content not found</h2>";
        }
        $events = $this->component->getEvents();
        $cm = new ContentManager();
        $ads = $cm->getAds();
        $bm = new BlogManager();
        $fpost = $bm->getFeaturedPost();
        return view('site/Program',compact('p','events','fpost','ads'));
    }


    public function getAboutus()
    {
        return view('site/Aboutus');
    }

    public function getBusinessdevelopement()
    {
        return view('site/businessdevelopment');
    }


    public function getOurteam()
    {
        return view('site/Ourteam');
    }


    public function getRegister()
    {
        $msg = "";
        return view('site/Register',compact('msg'));
    }

    public function postRegister()
    {
        $processManager = new ProcessManager();
        $msg = $processManager->createUser();
        if($msg=="created")
        {
            return view('site/Accountcreated');
        }
        return view('site/Register',compact('msg'));
    }
}
