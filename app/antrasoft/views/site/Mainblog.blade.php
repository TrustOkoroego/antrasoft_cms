@extends('site.master')

@section('content')
<div style="margin-top: 0px;" class="page-intro">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ol class="breadcrumb">
                    <li><i class="fa fa-home pr-10"></i><a href="{{URL::to('/')}}">Home</a></li>
                    <li><a href="{{URL::to('/')}}/blog">Blog</a></li>
                    <li class="active"><a href="{{URL::to('/')}}{{$post['link']}}">{{$post['title']}}</a> </li>
                </ol>
            </div>
        </div>
    </div>
</div>














<section style="margin-top: 0px;" class="main-container">

<div class="container">
<div class="row">

<div class="main col-md-8">

    <!-- page-title start -->
    <!-- ================ -->
    <h1 class="page-title">{{$post['title']}}</h1>
    <!-- page-title end -->

    <!-- blogpost start -->
    <article class="clearfix blogpost full">
        <div class="blogpost-body">
            <div class="side">
                <div class="post-info">
                    <span class="day">{{$post['published_date']['day']}}</span>
                    <span class="month">{{$post['published_date']['month']}} {{$post['published_date']['year']}}</span>
                </div>
                <div class="affix" id="affix">
                    <span class="share">Share This</span>
                    <div class="sharrre" id="share"></div>
                </div>
            </div>
            <div class="blogpost-content">
                <header>
                    <div class="submitted"><i class="fa fa-user pr-5"></i> by <a href="#">{{$post['poster']}}</a></div>
                </header>
                <div id="post">
                    {!!$post['main_text']!!}
                </div>
            </div>
        </div>
        <footer class="clearfix">
            <ul class="links pull-left">
                <li><i class="fa fa-comment-o pr-5"></i> <a href="#">{{$post['commentcount']}} comments</a> |</li>
                <li><i class="fa fa-tags pr-5"></i> <a href="#">tag 1</a>, <a href="#">tag 2</a>, <a href="#">long tag 3</a> </li>
            </ul>
        </footer>
    </article>
    <!-- blogpost end -->

    <!-- comments start -->
    <div class="comments">
        <!-- comment start -->
        <div class="comment clearfix">
            <div class="comment-avatar">
                <img src="images/avatar.jpg" alt="avatar">
            </div>
            <div class="comment-content">
                <h3>Comment title</h3>
                <div class="comment-meta">By <a href="#">admin</a> | Today, 12:31</div>
                <div class="comment-body clearfix">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo </p>
                </div>
            </div>
            <!-- comment end -->
        </div>
    </div>
    <!-- comments end -->

    <!-- comments form start -->
    <div class="comments-form">
        <h2 class="title">Add comment</h2>
        <form role="form" id="comment-form">
            <div class="form-group has-feedback">
                <textarea class="form-control" rows="8" id="message4" placeholder="" name="message4" required=""></textarea>
                <i class="fa fa-envelope-o form-control-feedback"></i>
            </div>
            <input value="Submit" class="btn btn-default" type="submit">
        </form>
    </div>
    <!-- comments form end -->

</div>
<!-- main end -->

<!-- sidebar start -->
<aside class="col-md-3 col-md-offset-1">
    <div class="sidebar">
        <div class="block clearfix">
            <h3 class="title">Featured Post</h3>
            <div class="separator"></div>
            <div class="image-box">
                <div class="overlay-container">
                    <img src="images/blog-sidebar.jpg" alt="">
                    <div class="overlay">
                        <div class="overlay-links">
                            <a href="blog-post.html"><i class="fa fa-link"></i></a>
                            <a href="images/blog-sidebar.jpg" class="popup-img-single" title="image title"><i class="fa fa-search-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="image-box-body">
                    <h3 class="title"><a href="blog-post.html">{{$fpost['title']}}</a></h3>
                    <p>{{$fpost['intro_text']}}</p>
                    <a href="{{URL::to('/')}}{{$fpost['link']}}" class="link"><span>Read More</span></a>
                </div>
            </div>
        </div>
        <div class="block clearfix">
            <div class="block clearfix">
                @include('site/inc/ads',array($ads))
            </div>
        </div>
        <div class="block clearfix">

        </div>
    </div>
</aside>
<!-- sidebar end -->

</div>
</div>
</section>
@stop