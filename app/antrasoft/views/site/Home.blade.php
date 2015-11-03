@extends('site/master')

@section('style')
<style>
    .eventHover:hover
    {
        background-color: #CCCCCC !important;
        border: thin solid #888888;
    }
</style>
@stop

@section('banner')
<div class="banner">
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.5&appId=493590497425601";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>

    <!-- slideshow start -->
    <!-- ================ -->
    <div class="slideshow white-bg">

        <!-- slider revolution start -->
        <!-- ================ -->
        <div class="slider-banner-container">
            <div class="slider-banner-2 bullets-with-bg">
                <ul>
                    <!-- slide 1 start -->
                    @foreach($slide as $s)
                    <li data-transition="fade" data-slotamount="7" data-masterspeed="1000" data-saveperformance="on" data-title="Slide 1">

                        <!-- main image -->
                        <img src="{{URL::to('/').$s->image_url}}"  alt="slidebg1" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">

                        <!-- Translucent background -->
                        <div class="tp-caption dark-translucent-bg"
                             data-x="center"
                             data-y="bottom"
                             data-speed="800"
                             data-start="0"
                             style="background-color:rgba(0,0,0,0.5);">
                        </div>

                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption very_large_text sfl tp-resizeme"
                             data-x="center"
                             data-y="70"
                             data-speed="600"
                             data-start="0"
                             data-end="10000"
                             data-endspeed="600">{!!$s->image_description!!}
                        </div>

                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption small_thin_white sfr text-center tp-resizeme"
                             data-x="center"
                             data-y="170"
                             data-speed="600"
                             data-start="0"
                             data-end="10000"
                             data-endspeed="600">{!!$s->image_description2!!}
                        </div>

                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption tp-resizeme sfl"
                             data-x="center"
                             data-y="300"
                             data-speed="600"
                             data-start="0"
                             data-end="10000"
                             data-endspeed="600"><a href="page-services.html" class="btn btn-default btn-lg">Tell Me More <i class="fa fa-angle-double-right pl-10"></i></a>
                        </div>

                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <!-- slider revolution end -->

    </div>
    <!-- slideshow end -->

</div>
@stop


@section('content')

<div class="page-top object-non-visible" data-animation-effect="fadeInUpSmall" data-effect-delay="100">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center title">Our Services</h1>
                <div class="separator"></div>
                <p class="text-center"></p>
                <div class="row grid-space-12" >
                    <div class="col-sm-4">
                        <div class="box-style-2">
                            <div class="body" style="margin-left: 0px">
                                <h2>Training & Managment Consultancy</h2>
                                <p>We specialize in management consultancy and training. With our team of professionals,
                                    we have greatly contributed to the manpower needs of many organizations in Nigeria.
                                    We have built efficient and dynamic management systems sustaining top organizations.</p>
                                <a href="#" class="link"><span>Read More</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="box-style-2">
                            <div class="body" style="margin: 0 auto">
                                <h2>Chartered Tax Practitioners & Chartered Accountant</h2>
                                <p>Our team of professional tax practitioners will train you in this field from start to finish.</p>

                                    <p>Do you desire to be a CHATERED ACCOUNTANT? We have a very professional
                                    team that can deliver proficiently to you on any accounting certification of your choice..</p>
                                <a href="page-services.html" class="link"><span>Read More</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="box-style-2">
                            <div class="body" style="margin-right: 0px">
                                <h2>Inventory Management</h2>
                                <p>
                                    You are better off when you outsource your inventory management to a specialist like us,
                                    than when you engage your staff to man the responsibility;</p><p>
                                    1.	We can take absolute responsibility on your inventory management needs.</p><p>
                                    2.	We can train your staff to be more efficient and productive on inventory management.
                                    Feel free to call us for any inventory problem you may have or for more education.</p>
                                </p>
                                <a href="page-services.html" class="link"><span>Read More</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- page-top end -->

<!-- main-container start -->
<div class="clearfix light-gray-bg object-non-visible animated object-visible fadeInUpSmall" data-animation-effect="fadeInUpSmall" data-effect-delay="200">
    <div class="full-width-section">
        <div class="full-image-container">
            <img class="center-block" src="{{URL::to('/')}}/site/images/section-image-8.jpg" alt="">
        </div>
        <div class="full-text-container">
            <h1>Who we are</h1>
            <div class="separator-2"></div>
            <p class="lead" style="font-size: 18px">Service Ride Ltd is incorporated under the Companies and Allied Matters Act of 1990, and with the registration
                No RC748792. The company’s core business is in Training, Finance, and Management consultancy, while her ancillaries are
                in Local and Foreign Trade.</p> <p class="lead" style="font-size: 18px">The company has built repute in procurement specialties and skills since incorporation, with
                good business relationship with many companies. The company has a wide range of business network with multinational
                companies across borders and is well known for her contribution in career development and management. The Principal
                consultant of the company has in this regards, written several career books that are in high demand overseas today.</p>
           </div>
    </div>
    <!-- main start -->
    <!-- ================ -->
    <div class="section  dark-bg pattern-6">
        <div class="container">
            <div class="call-to-action">
                <div class="row">
                    <div class="col-md-8">
                        <h1 class="title text-center">Join Us today and start learning..</h1>
                    </div>
                    <div class="col-md-4">
                        <div class="text-center">
                            <a style="margin-top: -10px" href="#" class="btn btn-default btn-lg">Register</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- main end -->

    <section style="margin-top: 0px;" class="main-container">

        <div class="container">
            <div class="row">

                <!-- main start -->
                <!-- ================ -->
                <div class="main col-md-12">

                    <!-- page-title start -->
                    <!-- page-title end -->
                    <div class="row">
                        <div class="col-md-6">
                            <h3>Our Resources</h3>
                            <div class="separator-2"></div>
                            <p>We also provide free materials for students to read. Bleow are some of our resources</p>
                            <div class="col-md-12" style="padding-left: 0px">
                                <div class="col-md-6" style="padding-left: 0px"><img width="100%" src="{{URL::to('/')}}/images/book1.png" /></div>
                                <div class="col-md-6" style="padding-right: 0px"><img width="100%" src="{{URL::to('/')}}/images/book2.png" /></div>
                            </div>
                        </div>
                        <div class="col-md-6" style="background-color: #FFFFFF; height: 500px">
                            <h3>Recent Programmes</h3>
                            <div class="separator-2"></div>

                            @foreach($events as $ev)
                            <a href="" class="eventHover">
                            <div class="testimonial clearfix eventHover" style="margin-top: 3px;margin-bottom: 3px">
                                <div class="col-md-2">
                                    <img src="{{URL::to('/')}}{{$ev->featured_image}}" alt="" title="file" class="img-container">
                                </div>
                                <div class="col-md-10">
                                    <h4 style="margin-bottom: 3px;margin-top: 0px">{{$ev->title}} </h4>
                                    <p style="font-weight:bold;margin-bottom: 0px"> {{$ev->published_date}} to {{$ev->stop_published}}</p>
                                    <p style="font-weight:bold;margin:0px;padding:0px"> @ 20 Calabar road</p>
                                 </div>
                            </div>
                            <hr style="margin: 15px">
                            </a>
                            @endforeach
                            <a href="#" class="btn btn-gray btn-sm">View all Programms</a>
                        </div>
                    </div>
                </div>
                <!-- main end -->

            </div>
        </div>
    </section>
</div>
<!-- main-container end -->
<!-- section start -->
<!-- ================ -->
<div class="section object-non-visible" data-animation-effect="fadeIn" data-effect-delay="300">
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h2 style="margin-top: 0px"><i class="fa fa-facebook" style="color: #0000C2"></i> Like us  on  Facebook</h2>
                <hr>
                <div class="fb-page" data-href="https://www.facebook.com/Serviceride-Limited-147647652050748/" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="false"></div>
            </div>
            <div class="col-md-8">
                <h2 style="margin-top: 0px"><i class="fa fa-comment" style="color: #888888"></i> Testimonies</h2>
                <hr>
                <div class="owl-carousel content-slider-with-controls-bottom">
                    @foreach($testimony as $tm)
                    <div class="testimonial margin-clear clearfix">
                        <h4 class="title">{{$tm->intro_text}}</h4>
                        <div class="testimonial-image">
                            <img src="{{URL::to('/')}}{{$tm->featured_image}}" alt="{{$tm->title}}" title="" class="img-circle">
                        </div>
                        <div class="testimonial-body">
                            <p>{!!$tm->main_text!!}</p>
                            <div class="testimonial-info-2">{{$tm->title}}</div>
                        </div>
                        <hr class="clear">
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <br>
</div>
<!-- section end -->



@stop