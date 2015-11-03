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
                    <h2 class="title"><a href="{{URL::to('/')}}/article/{{$bg['link']}}">{{$bg['title']}}</a></h2>
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
            <a class="pull-right link" href="{{URL::to('/')}}/article/{{$bg['link']}}"><span>Read more</span></a>
        </footer>
    </article>
    @endforeach
    <!-- blogpost end -->
    <!-- pagination start -->
    {!! $pagination->render() !!}
   <!-- <ul class="pagination">
        <li><a href="#">«</a></li>
        <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">5</a></li>
        <li><a href="#">»</a></li>
    </ul>
    -->
    <!-- pagination end -->

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
                    <h3 class="title"><a href="blog-post.html">Post Title</a></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                    <a href="blog-post.html" class="link"><span>Read More</span></a>
                </div>
            </div>
        </div>
        <div class="block clearfix">
            <h3 class="title">Text Sample</h3>
            <div class="separator"></div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos, nemo, necessitatibus, expedita voluptate esse ipsam aliquid blanditiis maxime sequi veniam suscipit atque sapiente cum voluptatum quos mollitia laborum? Esse, officia!</p>
        </div>
        <div class="block clearfix">
            <h3 class="title">Testimonial</h3>
            <div class="separator"></div>
            <blockquote class="margin-clear">
                <p>Design is not just what it looks like and feels like. Design is how it works.</p>
                <footer><cite title="Source Title">Steve Jobs </cite></footer>
            </blockquote>
            <blockquote class="margin-clear">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos dolorem.</p>
                <footer><cite title="Source Title">Steve Doe </cite></footer>
            </blockquote>
        </div>
        <div class="block clearfix">
            <h3 class="title">Portfolio</h3>
            <div class="separator"></div>
            <div class="gallery row">
                <div class="gallery-item col-xs-4">
                    <div class="overlay-container">
                        <img src="images/gallery-1.jpg" alt="">
                        <a href="portfolio-item.html" class="overlay small">
                            <i class="fa fa-link"></i>
                        </a>
                    </div>
                </div>
                <div class="gallery-item col-xs-4">
                    <div class="overlay-container">
                        <img src="images/gallery-2.jpg" alt="">
                        <a href="portfolio-item.html" class="overlay small">
                            <i class="fa fa-link"></i>
                        </a>
                    </div>
                </div>
                <div class="gallery-item col-xs-4">
                    <div class="overlay-container">
                        <img src="images/gallery-3.jpg" alt="">
                        <a href="portfolio-item.html" class="overlay small">
                            <i class="fa fa-link"></i>
                        </a>
                    </div>
                </div>
                <div class="gallery-item col-xs-4">
                    <div class="overlay-container">
                        <img src="images/gallery-4.jpg" alt="">
                        <a href="portfolio-item.html" class="overlay small">
                            <i class="fa fa-link"></i>
                        </a>
                    </div>
                </div>
                <div class="gallery-item col-xs-4">
                    <div class="overlay-container">
                        <img src="images/gallery-5.jpg" alt="">
                        <a href="portfolio-item.html" class="overlay small">
                            <i class="fa fa-link"></i>
                        </a>
                    </div>
                </div>
                <div class="gallery-item col-xs-4">
                    <div class="overlay-container">
                        <img src="images/gallery-6.jpg" alt="">
                        <a href="portfolio-item.html" class="overlay small">
                            <i class="fa fa-link"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="block clearfix">
            <h3 class="title">Tags</h3>
            <div class="separator"></div>
            <div class="tags-cloud">
                <div class="tag">
                    <a href="#">energy</a>
                </div>
                <div class="tag">
                    <a href="#">business</a>
                </div>
                <div class="tag">
                    <a href="#">food</a>
                </div>
                <div class="tag">
                    <a href="#">fashion</a>
                </div>
                <div class="tag">
                    <a href="#">finance</a>
                </div>
                <div class="tag">
                    <a href="#">culture</a>
                </div>
                <div class="tag">
                    <a href="#">health</a>
                </div>
                <div class="tag">
                    <a href="#">sports</a>
                </div>
                <div class="tag">
                    <a href="#">life style</a>
                </div>
                <div class="tag">
                    <a href="#">books</a>
                </div>
            </div>
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