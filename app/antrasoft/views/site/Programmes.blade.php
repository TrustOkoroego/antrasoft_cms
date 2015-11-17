@extends('site.master')

@section('content')
<div style="margin-top: 0px;" class="page-intro">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ol class="breadcrumb">
                    <li><i class="fa fa-home pr-10"></i><a href="{{URL::to('/')}}"">Home</a></li>
                    <li class="active">Serviceride Programmes</li>
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
                <h1 class="page-title">Our Programmes</h1>
                <div class="separator-2"></div>
                <p class="lead"> Below are the list of service ride programmes<br class="hidden-sm hidden-xs"> </p>
                <!-- page-title end -->


                <!-- blogpost start -->
                @foreach($programmes as $p)
                <article class="clearfix blogpost object-non-visible" data-animation-effect="fadeInUpSmall" data-effect-delay="200">
                    <div style="padding: 5px">
                        <div class="col-md-4">
                            <img style="width:100%" src="{{URL::to('/').$p->featured_image}}" />
                        </div>
                        <div class=" col-md-8">
                            <header>
                                <h2 class="title"><a href="{{URL::to('/')}}/program/{{$p->id}}/{{str_replace(' ','-',$p->title)}}">{{$p->title}}</a></h2>

                            </header>
                            <p>
                                {{$p->intro_text}}
                            </p>
                        </div>
                    </div>
                    <footer class="clearfix" >
                        <a class="pull-right link" href="{{URL::to('/')}}/program/{{$p->id}}/{{str_replace(' ','-',$p->title)}}"><span>View Program details..</span></a>
                    </footer>
                </article>
                @endforeach

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