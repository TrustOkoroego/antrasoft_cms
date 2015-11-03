<?php
/**
 * Created by PhpStorm.
 * User: trust.okoroego
 * Date: 11/3/15
 * Time: 7:55 PM
 */

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use App\antrasoft\site\ComponentGetters;
use App\antrasoft\site\BlogManager;


class BlogController extends Controller {
    private $bm;
    function __construct(BlogManager $bm)
    {
        $this->bm = $bm;
    }

    public function getIndex()
    {
        $getBlog = $this->bm->getBlogs();
        $blogs = $getBlog[1];
        $pagination = $getBlog[0];
        return view('site/Blog',compact('blogs','pagination'));
    }

    public function getPost($id)
    {
        dd($this->bm->getSingleBlog($id));
    }
} 