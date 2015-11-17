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
<section style="margin-top: 0px;" class="main-container">

    <div class="container">
        <div class="row">

            <!-- main start -->
            <!-- ================ -->
            <div class="main col-md-12">
                <div class="row">

                    <!-- main start -->
                    <!-- ================ -->
                    <div class="main col-md-12">

                        <!-- page-title start -->
                        <!-- ================ -->
                        <h1 class="page-title">Account Created!</h1>
                        <!-- page-title end -->
                        <p>Congratulations!, Account created. We have sent an email to you, please click
                            on the link sent to you to activate your account.</p>
                        <button class="btn btn-default"> Continue </button>
                    </div>
                    <!-- main end -->

                </div>

            </div>
        </div>
</section>




@stop
@stop