@extends('site.master')

@section('title')
{{$post['title']}}
@stop

@section('content')
<div style="margin-top: 0px;" class="page-intro">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ol class="breadcrumb">
                    <li><i class="fa fa-home pr-10"></i><a href="{{URL::to('/')}}">Home</a></li>
                    <li><a href="{{URL::to('/')}}/blog">Blog</a></li>
                    <li class="active">{{$post['title']}}</li>
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
                <div class="affix" id="affix"><span class="share">Share This</span><div class="sharrre" id="share"><ul class="social-links clearfix"><li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li><li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li><li class="googleplus"><a href="#"><i class="fa fa-google-plus"></i></a></li></ul></div></div>
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
        <hr>
    </article>
    <!-- blogpost end -->

    <!-- comments start -->
    <div class="comments">
        <div id="disqus_thread"></div>
        <div id="disqus_thread"></div>
        <script>
            /**
             *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
             *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables
             */

             var disqus_config = function () {
             this.page.url = '{{URL::to('/')}}{{$post['link']}}'; // Replace PAGE_URL with your page's canonical URL variable
             this.page.identifier = {{$post['id']}};  // Replace PAGE_IDENTIFIER with your page's unique identifier variable
             };

            (function() {  // DON'T EDIT BELOW THIS LINE
                var d = document, s = d.createElement('script');

                s.src = '//serviceride.disqus.com/embed.js';

                s.setAttribute('data-timestamp', +new Date());
                (d.head || d.body).appendChild(s);
            })();
        </script>
        <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>

    </div>

</div>
<!-- main end -->

<!-- sidebar start -->
<aside class="col-md-3 col-md-offset-1">
    <div class="sidebar">
        <div class="block clearfix">
            @include('site/inc/search')
        </div>
        <div class="block clearfix">
            <h3 class="title">Featured Post</h3>
            <div class="separator"></div>
            <div class="image-box">
                <div class="overlay-container">

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
<script id="dsq-count-scr" src="//serviceridetest.disqus.com/count.js" async></script>
@stop