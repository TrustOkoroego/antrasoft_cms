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

                <h2><span><i class="fa fa-calendar"></i> Events</span> <span ><a href="{{URL::to('/')}}/events" class="btn btn-primary" style="float:right"><i class="fa fa-arrow-left"></i> Back to Events</a> </span></h2>
                <div class="separator-2"></div>
                <!-- ================ -->
                <!-- blogpost start -->
                <article class="clearfix blogpost full " >
                    <h1 class="page-title">{{$ev->title}}</h1>
                    <div class="blogpost-body">
                        <div class="side">
                            <div class="post-info">
                                <span class="day">{{DateTime::createFromFormat('Y-m-d', $ev->published_date)->format('d')}}</span>
                                <span class="month">{{DateTime::createFromFormat('Y-m-d', $ev->published_date)->format('M')}} {{DateTime::createFromFormat('Y-m-d', $ev->published_date)->format('Y')}}</span>
                            </div>
                            <p style="text-align: center;padding: 10px;margin: 0px">TO</p>
                            <div class="post-info">
                                <span class="day">{{DateTime::createFromFormat('Y-m-d', $ev->published_date)->format('d')}}</span>
                                <span class="month">{{DateTime::createFromFormat('Y-m-d', $ev->stop_published)->format('M')}} {{DateTime::createFromFormat('Y-m-d', $ev->stop_published)->format('Y')}}</span>
                            </div>
                            <!--<div class="affix" id="affix">
                                <span class="share">Share This</span>
                                <div class="sharrre" id="share"></div>
                            </div>-->
                        </div>
                        <div class="blogpost-content">
                            <header>
                                <div style="font-size: 25px" class="submitted"><i class="fa fa-calendar"></i> <strong>Venue: </strong><span style="color:#003366">{{$ev->intro_text}}</span></div>
                            </header>
                            <div id="post">
                                {!!$ev->main_text!!}
                            </div>
                        </div>
                    </div>
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
                        @include('site/inc/search')
                    </div>
                </div>
            </aside>
            <!-- sidebar end -->

        </div>
    </div>
</section>
@stop