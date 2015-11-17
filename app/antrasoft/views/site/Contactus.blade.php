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


@section('content')
<div style="margin-top: 0px;" class="banner">
    <div class="fixed-image dark-translucent-bg section" style="background-image:url('site/images/page-contact-banner.jpg');">
        <div class="container">
            <h1>Get in Touch</h1>
            <div class="separator-2"></div>
            <p class="lead">Our Customer service agent are avaliable 24/7 please feel freee to contact us any time </p>
           <strong> <h2>Business hours</h2></strong>

            <p class="lead"> Monday - Friday 9am to 5pm<br>
            Saturday - 9am to 2pm<br>
           Sunday - Closed</p>

        </div>
    </div>
</div>
<div style="margin-top: 0px;" class="page-intro">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ol class="breadcrumb">
                    <li><i class="fa fa-home pr-10"></i><a href="{{URL::to('/')}}">Home</a></li>
                    <li class="active">Contact</li>
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
            <div class="main col-md-12">

                <!-- page-title start -->
                <!-- ================ -->
                <h1 class="page-title">Contact Us</h1>
                <!-- page-title end -->
                <div class="row">
                    <form method="post" action="" id="messageform">
                     <div class="col-md-6">
                         <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <p>Please drop a message for us and we will contact you.</p>
                        {!!$msg!!}
                        <div class="alert alert-danger hidden" id="MessageNotSent">
                            Please fill all required fields
                        </div>
                        <div class="contact-form">
                            <form novalidate="novalidate" id="contact-form" role="form">
                                <div class="form-group has-feedback">
                                    <label for="name">Name*</label>
                                    <input class="form-control" id="username" name="username" placeholder="" type="text">
                                    <i class="fa fa-user form-control-feedback"></i>
                                </div>
                                <div class="form-group has-feedback">
                                    <label for="email">Email*</label>
                                    <input class="form-control" id="email" name="email" placeholder="" type="email">
                                    <i class="fa fa-envelope form-control-feedback"></i>
                                </div>
                                <div class="form-group has-feedback">
                                    <label for="subject">Subject*</label>
                                    <input class="form-control" id="subject" name="subject" placeholder="" type="text">
                                    <i class="fa fa-navicon form-control-feedback"></i>
                                </div>
                                <div class="form-group has-feedback">
                                    <label for="message">Message*</label>
                                    <textarea class="form-control" rows="6" id="message" name="message" placeholder=""></textarea>
                                    <i class="fa fa-pencil form-control-feedback"></i>
                                </div>
                                <input id="submitmessage" value="Submit" class="submit-button btn btn-default" type="submit">
                            </form>
                        </div>
                    </div>
                    </form>
                    <div class="col-md-6">
                        <!-- google maps start -->
                        <div id="map-canvas"><div style="overflow: hidden; width: 555px; height: 450px;"><img src="https://maps.googleapis.com/maps/api/js/StaticMapService.GetMapImage?1m2&amp;1i530331&amp;2i391412&amp;2e1&amp;3u12&amp;4m2&amp;1u555&amp;2u450&amp;5m5&amp;1e0&amp;5sen-US&amp;6sus&amp;10b1&amp;12b1&amp;token=79278" style="width: 555px; height: 450px;"></div></div>
                        <!-- google maps end -->
                    </div>
                </div>
            </div>
            <!-- main end -->

        </div>
    </div>
</section>

<div style="background-position: 50% 13px;" class="section parallax dark-translucent-bg parallax-bg-2">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <img width="200px" src="{{URL::to('/')}}/site/images/logo_dark_header_white.png" />
                <ul class="list">
                    <li><strong></strong></li>

                    <li><i class="fa fa-home pr-10"></i>No 1 Old Odukpani Road by Eburutu Barracks Gate,<br><span class="pl-20"> Calabar, Cross Rivers Nigeria</span></li>
                    <li><i class="fa fa-phone pr-10"></i><abbr title="Phone">P:</abbr> +234.802.313.1282</li>
                    <li><i class="fa fa-mobile pr-10 pl-5"></i><abbr title="Phone">P:</abbr> +234.803.425.6748</li>
                    <li><i class="fa fa-envelope pr-10"></i><a href="mailto:info@idea.com"> info@serviceride.com</a></li>
                </ul>
            </div>
            <div class="col-sm-8">
                <h2 class="title">Subscribe to our News letter</h2>
                <p class="lead">Keep up on our always evolving product features and technology. Enter your e-mail and subscribe to our newsletter.</p>
                <p class="lead">
                    We provide weekley update on your career part. You wouldnt want to miss any of our articles or updates
                </p>
            </div>
        </div>
    </div>
</div>


@stop

@section('scripts')
<script>
    $('#submitmessage').click(function(e){
        e.preventDefault();
        var message = "";

        if($('#username').val()=="")
        {
            $(this).addClass('error');
            message += 'Your name is required! </br>';
        }

        if($('#subject').val()=="")
        {
            message += 'Subject of your message is required! </br>';
        }
        if($('#message').val()=="")
        {
            message += 'Message is required! </br>';
        }
        if($('#email').val()=="")
        {
            message +='Email is required! </br>';
        }

        if(message=="")
        {
            $('#messageform').submit();
        }
        else{
            $('#MessageNotSent').html(message).fadeIn().removeClass('hidden');
        }
    });
</script>


@stop