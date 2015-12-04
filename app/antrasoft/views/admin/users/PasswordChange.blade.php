@extends('admin/admin_template')
@section('container')
<?php $res_bknd = URL::to('/').'/res/backend';?>
<div class="row">

    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2><i class="fa fa-user"></i> Password Reset <small></small></h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li>
                        <button onclick="window.location='{{URL::to('/')}}/admin/users'" type="submit" class="btn btn-success"><i class="fa fa-plus"></i> Back to Users </button>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <form method="post" action=""  data-parsley-validate="" class="form-horizontal form-label-left">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"><span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            {!!$message!!}
                            @if (session('message'))
                            {!! session('message') !!}
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Email <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input data-parsley-id="7785" id="first-name" value="" name="email" required="required" class="form-control col-md-7 col-xs-12" type="text"><ul id="parsley-id-7785" class="parsley-errors-list"></ul>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email" class="control-label col-md-3 col-sm-3 col-xs-12">Password</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input data-parsley-id="9562" id="email" value="" class="form-control col-md-7 col-xs-12" name="password" type="text"><ul id="parsley-id-9562" class="parsley-errors-list"></ul>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email" class="control-label col-md-3 col-sm-3 col-xs-12">Confirm-Password</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input data-parsley-id="9562" id="email" value="" class="form-control col-md-7 col-xs-12" name="password2" type="text"><ul id="parsley-id-9562" class="parsley-errors-list"></ul>
                        </div>
                    </div>

                    <div class="ln_solid"></div>

                    <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                            <button type="submit" class="btn btn-success">Reset</button>
                            <button type="submit" class="btn btn-primary">Cancel</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
        <br />
        <br />
        <br />
        @stop

        @section('styles')
        <!-- Custom styling plus plugins -->
        <link href="{{$res_bknd}}/css/custom.css" rel="stylesheet">
        <link href="{{$res_bknd}}/css/icheck/flat/green.css" rel="stylesheet">
        @stop
