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
                                <p style="font-weight:bold;margin-bottom: 0px"><strong>Date: </strong><span style="color:#003973"> {{DateTime::createFromFormat('Y-m-d', $ev->published_date)->format('d, M Y')}} to {{DateTime::createFromFormat('Y-m-d', $ev->stop_published)->format('d, M Y')}}</span></p>
                                <p style="font-weight:bold;margin:0px;padding:0px"><strong>Venue: </strong><span style="color:#003366">{{$ev->intro_text}}</span></p>
                            </div>
                            <div class="col-md-2">
                                <a href="{{URL::to('/')}}/eventdetail/{{$ev->id}}/{{str_replace(' ','-',$ev->title)}}">View Program</a>
                            </div>
                        </div>
                        <hr style="margin: 15px">

                    @endforeach
                    {!! str_replace('/?','?',$events->render()) !!}
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

                </div>
            </aside>
            <!-- sidebar end -->

        </div>
    </div>
</section>
@stop