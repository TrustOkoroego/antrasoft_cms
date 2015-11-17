@extends('site.master')

@section('content')
<div style="margin-top: 0px;" class="page-intro">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ol class="breadcrumb">
                    <li><i class="fa fa-home pr-10"></i><a href="{{URL::to('/')}}">Home</a></li>
                    <li><a href="{{URL::to('/')}}/search">search</a></li>
                    <li class="active"><a href="#">{{$param}}</a> </li>
                </ol>
            </div>
        </div>
    </div>
</div>














<section style="margin-top: 0px;" class="main-container">

<div class="container">
<div class="row">

<div class="main col-md-8">

    <h2><i class="fa fa-search"></i>Search</h2>
    <div class="separator-2"></div>
    <!-- ================ -->
    <h3 class="page-title">Your search for <strong>{{$param}}</strong> returned <strong>({{$count}})</strong> results</h3>
    <!-- page-title end -->

    <!-- blogpost start -->
    <article class="clearfix blogpost full">
       <!-- search result goes here-->

        @foreach($result_main as $rs)
            <div class="result">
                <a href="{{$rs['link']}}">
                    <p style="margin-bottom: 2px"><strong>{{$rs['title']}}</strong></p>
                    <p>
                        {{substr(strip_tags($rs['main_text']),0,200)}}...
                    </p>
                </a>
            </div>
        @endforeach
        {!! str_replace('/?','?',$result->appends(['param' => $param])->render()) !!}
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

        </div>
    </div>
</aside>
<!-- sidebar end -->

</div>
</div>
</section>
@stop