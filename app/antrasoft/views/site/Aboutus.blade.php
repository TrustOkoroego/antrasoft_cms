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
    <div class="fixed-image dark-translucent-bg section" style="background-image:url('site/images/about.png');">
        <div class="container">
            <h1>About Us</h1>
            <div class="separator-2"></div>
            <p class="lead">We Help you Progress </p>
            <p class="lead">Service Ride Nig. Ltd is incorporated in Nigeria. The company has been in business since 1998 and has contributed immensely in the manpower development of the Country. </p>

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
                <!-- page-title end -->
                <div class="row">
                    <div class="main col-md-6">
                        <h3>Our Core Business Areas</h3>
                        1. Tax, Finance and Management Consultancy <br>
                        2. Training and workshops in<br>
                        3. Shipping/Clearing<br>
                        4. Logistics/Procurement 5. Warehouse Management<br>
                        6. Accounting and financial management G. Business strategies and management<br>
                        7. Human resources management<br>
                        8. Personal development<br>
                        9. Marketing skills and management<br>
                        10. Selling/Sales management skills<br>
                    </div>
                    <div class="main col-md-6">
                        <h3>Our Philosophy</h3>
                        Our philosophy is to enhance skills, through our programs for productive management. We hold the following views:
                        1.Continuous stimulation of the mind through workshops and training programs will cause that which is dormant in the individual to be awakened for greater responsibilities<br>
                        2.That which is done unconsciously, if consciously done can ignite the creative abilities of the individual for best performance.
                    </div>

                    <div class="main col-md-6">
                    <h3> Training Venue</h3>
                    While our training/development centre is undergoing construction, for now, Green valley Hotel is our choice training venue, located off Ikot-Eshi Market roundabout by system metal road Calabar. The venue is a wonderful learning environment for our subscribers. With a tourist outlook, it is designed for comfort and luxury that you will love to be associated with. The training Halls are designed to meet the best standard anywhere.



                </div>
            </div>
            <!-- main end -->

        </div>
    </div>
</section>




@stop
@stop