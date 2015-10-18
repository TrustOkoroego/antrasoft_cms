<?php
/**
 * Created by PhpStorm.
 * User: trust.okoroego
 * Date: 9/30/15
 * Time: 1:09 AM
 */

namespace App\Http\Controllers\admin;
use App\antrasoft\models\Image;


trait AlbumPartialController {
    public function getAlbums()
    {
        $albums = Image::where('image_type',1)->orderBy('weight','asc')->orderBy('created_at','desc')->get();
        return view('admin/gallery/albums',compact('albums'));
    }
} 