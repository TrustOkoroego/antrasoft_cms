<?php
/**
 * Created by PhpStorm.
 * User: trust.okoroego
 * Date: 9/19/15
 * Time: 4:13 AM
 */

namespace App\Http\Controllers\admin;


trait SlidePartialController{

    public function getSlides()
    {
        return view('admin/slide/slide');
    }
} 