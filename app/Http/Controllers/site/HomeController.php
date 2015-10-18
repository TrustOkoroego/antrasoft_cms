<?php
/**
 * Created by PhpStorm.
 * User: trust.okoroego
 * Date: 10/18/15
 * Time: 11:53 AM
 */

namespace App\Http\Controllers\site;
use App\Http\Controllers\Controller;
use App\antrasoft\site\ComponentGetters;


class HomeController extends Controller{
    private $component;
    public function __construct(ComponentGetters $c)
    {
        $this->component = $c;
    }
    public function getIndex()
    {
        $slide = $this->component->getSlide(4);
        return view('site/home',compact('slide'));
    }
} 