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
<div style="margin-top: 0px;" class="page-intro">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ol class="breadcrumb">
                    <li><i class="fa fa-home pr-10"></i><a href="{{URL::to('/')}}">Home</a></li>
                    <li class="active">Register</li>
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
                    <div class="main col-md-8">
                        <div class="form-block center-block">
                            <h2 class="title">Sign Up</h2>
                            <hr>
                            <div>
                                {!!$msg!!}
                            </div>
                            <form class="form-horizontal" role="form" method="post">
                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                <div class="form-group has-feedback">
                                    <label for="inputName" class="col-sm-3 control-label">First Name <span class="text-danger small">*</span></label>
                                    <div class="col-sm-8">
                                        <input name="firstname" class="form-control" id="inputName" placeholder="Fisrt Name" required="" type="text">
                                        <i class="fa fa-pencil form-control-feedback"></i>
                                    </div>
                                </div>
                                <div class="form-group has-feedback">
                                    <label for="inputLastName" class="col-sm-3 control-label">Last Name <span class="text-danger small">*</span></label>
                                    <div class="col-sm-8">
                                        <input name="lastname" class="form-control" id="inputLastName" placeholder="Last Name" required="" type="text">
                                        <i class="fa fa-pencil form-control-feedback"></i>
                                    </div>
                                </div>
                                <div class="form-group has-feedback">
                                    <label for="inputEmail" class="col-sm-3 control-label">Email <span class="text-danger small">*</span></label>
                                    <div class="col-sm-8">
                                        <input name="email" class="form-control" id="inputEmail" placeholder="Email" required="" type="email">
                                        <i class="fa fa-envelope form-control-feedback"></i>
                                    </div>
                                </div>
                                <div class="form-group has-feedback">
                                    <label for="inputPassword" class="col-sm-3 control-label">Password <span class="text-danger small">*</span></label>
                                    <div class="col-sm-8">
                                        <input name="password" class="form-control" id="inputPassword" placeholder="Password" required="" type="password">
                                        <i class="fa fa-lock form-control-feedback"></i>
                                    </div>
                                </div>
                                <div class="form-group has-feedback">
                                    <label for="inputPassword" class="col-sm-3 control-label">Confirm Password <span class="text-danger small">*</span></label>
                                    <div class="col-sm-8">
                                        <input name="cpassword" class="form-control" id="inputPassword" placeholder="Password" required="" type="password">
                                        <i class="fa fa-lock form-control-feedback"></i>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-3 col-sm-8">
                                        <div class="checkbox">
                                            <label>
                                                <input required="" type="checkbox"> Accept our <a href="#">privacy policy</a> and <a href="#">customer agreement</a>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-3 col-sm-8">
                                        <button type="submit" class="btn btn-default">Sign Up</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="main col-md-4">
                        <div class="">
                            <h2 class="title">Login</h2>
                            <hr>
                            <form class="form-horizontal" role="form">
                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                <div class="form-group has-feedback">
                                    <label for="inputName" class="col-sm-3 control-label">Email</label>
                                    <div class="col-sm-8">
                                        <input class="form-control" id="inputName" placeholder="email address" required="" type="email">
                                        <i class="fa fa-pencil form-control-feedback"></i>
                                    </div>
                                </div>
                                <div class="form-group has-feedback">
                                    <label for="inputUserName" class="col-sm-3 control-label">Password</label>
                                    <div class="col-sm-8">
                                        <input class="form-control" id="inputUserName" placeholder="Password" required="" type="password">
                                        <i class="fa fa-user form-control-feedback"></i>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-3 col-sm-8">
                                        <button type="submit" class="btn btn-default">Login</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- main end -->

            </div>
        </div>
</section>




@stop
@stop