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
        $fpost = $this->bm->getFeaturedPost();
        $blogs = $getBlog[1];
        $pagination = $getBlog[0];
        $ads = $this->bm->getAds();
        return view('site/Blog',compact('blogs','pagination','fpost','ads'));
    }

    public function getPost($id)
    {
        $post = $this->bm->getSingleBlog($id);
        $fpost = $this->bm->getFeaturedPost();
        $ads = $this->bm->getAds();
        return view('site/mainblog',compact('post','fpost','ads'));
    }

} 