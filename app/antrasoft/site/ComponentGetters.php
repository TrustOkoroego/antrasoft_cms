<?php
/**
 * Created by PhpStorm.
 * User: trust.okoroego
 * Date: 10/18/15
 * Time: 4:38 PM
 */

namespace App\antrasoft\site;
use App\antrasoft\models\Image;



class ComponentGetters {
    public function getSlide($count=2)
    {
        $slides = Image::where('image_type',1)->orderBy('weight','asc')->orderBy('created_at','desc')->take($count)->get();
        return $slides;
    }
} 