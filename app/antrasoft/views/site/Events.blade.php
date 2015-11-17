@extends('site.master')

@section('content')
<div style="margin-top: 0px;" class="page-intro">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ol class="breadcrumb">
                    <li><i class="fa fa-home pr-10"></i><a href="{{URL::to('/')}}">Home</a></li>
                    <li class="active"><a href="#">events</a> </li>
                </ol>
            </div>
        </div>
    </div>
</div>














<section style="margin-top: 0px;" class="main-container">

    <div class="container">
        <div class="row">

            <div class="main col-md-8">

                <h2><i class="fa fa-calendar"></i> Our Events</h2>
                <div class="separator-2"></div>
                <!-- ================ -->
                <!-- blogpost start -->
                <article class="clearfix blogpost full">
                    @foreach($events as $ev)

                        <div class="testimonial clearfix eventHover" style="margin-top: 3px;margin-bottom: 3px">
                            <div class="col-md-2">
                                <img src="{{URL::to('/')}}{{$ev->featured_image}}" alt="" title="file" class="img-container">
                            </div>
                            <div class="col-md-8">
                                <h4 style="margin-bottom: 3px;margin-top: 0px">{{$ev->title}} </h4>
                                <p style="font-weight:bold;margin-bottom: 0px"> {{DateTime::createFromFormat('Y-m-d', $ev->published_date)->format('d, M Y')}} to {{DateTime::createFromFormat('Y-m-d', $ev->stop_published)->format('d, M Y')}}</p>
                                <p style="font-weight:bold;margin:0px;padding:0px"><strong>Venue: </strong><span style="color:#003366">{{$ev->intro_text}}</span></p>
                            </div>
                            <div class="col-md-2">
                                <a href="{{URL::to('/')}}/eventdetail/{{$ev->id}}">View Program</a>
                            </div>
                        </div>
                        <hr style="margin: 15px">

                    @endforeach
                </article>
            </div>
            <!-- main end -->

            <!-- sidebar start -->
            <aside class="col-md-3 col-md-offset-1">
                <div class="sidebar">
                    <div class="block clearfix">
                        <div class="block clearfix">
                            @include('site/inc/ads',array($ads))
                        </div>
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