<?php
/**
 * Created by PhpStorm.
 * User: trust.okoroego
 * Date: 10/18/15
 * Time: 4:38 PM
 */

namespace App\antrasoft\site;
use App\antrasoft\models\Image;
use App\antrasoft\content\ContentManager;



class ComponentGetters {
    public function getSlide($count=2)
    {
        $slides = Image::where('image_type',1)
            ->where('published',1)
            ->orderBy('weight','asc')
            ->orderBy('created_at','desc')
            ->take($count)->get();
        return $slides;
    }

    public function getTestimony()
    {
        $cm = new ContentManager();
        return $cm->getTestimony(); // return user testimonies
    }

    public function getEvents($param=null)
    {
        $cm = new ContentManager();
        return $cm->getEvenList($param); // return user testimonies
    }

    public function getEventDetail($id)
    {
        $cm = new ContentManager();
        return $cm->getEventDetails($id); // return user testimonies
    }

    public function getAds()
    {
        $cm = new ContentManager();
        return $cm->getAds();
    }

    public function getSearchResult($param)
    {
        $cm = new ContentManager();
        return $cm->searchallcontent($param);
    }

    public function getProgrammes()
    {
        $cm = new ContentManager();
        return $cm->getProgrammes();
    }
    public function getOneProgrammes($id)
    {
        $cm = new ContentManager();
        return $cm->getOneProgramme($id);
    }

} 