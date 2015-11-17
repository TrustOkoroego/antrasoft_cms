@extends('site.master')

@section('content')
<div style="margin-top: 0px;" class="page-intro">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ol class="breadcrumb">
                    <li><i class="fa fa-home pr-10"></i><a href="{{URL::to('/')}}"">Home</a></li>
                    <li class="active">Blog</li>
                </ol>
            </div>
        </div>
    </div>
</div>





<section style="margin-top: 0px;" class="main-container">

<div class="container">
<div class="row">

<!-- main start -->
<!-- ================ -->
<div class="main col-md-8">

    <!-- page-title start -->
    <!-- ================ -->
    <h1 class="page-title">Blog</h1>
    <div class="separator-2"></div>
    <p class="lead"> Welcome to service ride blog post<br class="hidden-sm hidden-xs"> </p>
    <!-- page-title end -->


    <!-- blogpost start -->
    @foreach($blogs as $bg)
    <article class="clearfix blogpost object-non-visible" data-animation-effect="fadeInUpSmall" data-effect-delay="200">
        <div >
            {!!$bg['featured_image']!!}
        </div>
        <div class="blogpost-body">
            <div class="post-info">
                <span class="day">{{$bg['published_date']['day']}}</span>
                <span class="month">{{$bg['published_date']['month']}} {{$bg['published_date']['year']}}</span>
            </div>
            <div class="blogpost-content">
                <header>
                    <h2 class="title"><a href="{{URL::to('/')}}{{$bg['link']}}">{{$bg['title']}}</a></h2>
                    <div class="submitted"><i class="fa fa-user pr-5"></i> by <a >{{$bg['poster']}}</a></div>
                </header>
                <p>
                    {{$bg['intro_text']}}
                </p>
            </div>
        </div>
        <footer class="clearfix">
            <ul class="links pull-left">
                <li><i class="fa fa-comment-o pr-5"></i> <a href="#">{{$bg['commentcount']}} comments</a> |</li>
                <li><i class="fa fa-tags pr-5"></i> <a href="#">tag 1</a>, <a href="#">tag 2</a>, <a href="#">long tag 3</a> </li>
            </ul>
            <a class="pull-right link" href="{{URL::to('/').$bg['link']}}"><span>Read more</span></a>
        </footer>
    </article>
    @endforeach
    <!-- blogpost end -->
    <!-- pagination start -->
    {!! str_replace('/?','?',$pagination->render()) !!}

</div>
<!-- main end -->

<!-- sidebar start -->
<aside class="col-md-3 col-md-offset-1">
    <div class="sidebar">
        <div class="block clearfix">
            <h3 class="title">Featured Post</h3>
            <div class="separator"></div>
            <div class="image-box">
                <div class="image-box-body">
                    <h3 class="title"><a href="blog-post.html">{{$fpost['title']}}</a></h3>
                    <p>{{$fpost['intro_text']}}</p>
                    <a href="{{URL::to('/')}}{{$fpost['link']}}" class="link"><span>Read More</span></a>
                </div>
            </div>
        </div>
        <div class="block clearfix">
                @include('site/inc/ads',array($ads))
        </div>
        <div class="block clearfix">
            <form role="search">
                <div class="form-group has-feedback">
                    <input class="form-control" placeholder="Search" type="text">
                    <i class="fa fa-search form-control-feedback"></i>
                </div>
            </form>
        </div>
    </div>
</aside>
<!-- sidebar end -->

</div>
</div>
</section>
@stop