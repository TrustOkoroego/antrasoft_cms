@extends('admin/admin_template')
@section('container')
<?php $res_bknd = URL::to('/').'/res/backend';?>
<div class="row">

    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2><i class="fa fa-user"></i> Edit User <small></small></h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li>
                        <button type="submit" class="btn btn-success"><i class="fa fa-plus"></i> Back to Users </button>
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
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">First Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input data-parsley-id="7785" id="first-name" value="{{$user->firstname}}" name="firstname" required="required" class="form-control col-md-7 col-xs-12" type="text"><ul id="parsley-id-7785" class="parsley-errors-list"></ul>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Last Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input data-parsley-id="5340" id="last-name" value="{{$user->lastname}}" name="lastname" required="required" class="form-control col-md-7 col-xs-12" type="text"><ul id="parsley-id-5340" class="parsley-errors-list"></ul>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email" class="control-label col-md-3 col-sm-3 col-xs-12">Email Address</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input data-parsley-id="9562" id="email" value="{{$user->email}}" class="form-control col-md-7 col-xs-12" name="email" type="text"><ul id="parsley-id-9562" class="parsley-errors-list"></ul>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">User Type:</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <select name="usertype" class="form-control">
                                <option value="{{$user->usertype}}"> {{$user->usertype}} </option>
                                @foreach($usertypes as $utype)
                                <option value="{{$utype}}">{{$utype}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="ln_solid"></div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Privileges <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            @foreach($privileges as $p)
                            <div class="checkbox">
                                <label class="">
                                    <div style="position: relative;" class="icheckbox_flat-green"><input name="{{$p->pr_name}}" style="position: absolute; opacity: 0;" class="flat"  type="checkbox" <?php if(in_array($p->pr_name,App\antrasoft\helper\AdminHelper::getPrivileges($user->privilege))){ echo 'checked="checked"';} ?>><ins style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;" class="iCheck-helper"></ins></div> {{$p->pr_name}} ( {{$p->pr_description}} )
                                </label>
                            </div>
                            @endforeach

                        </div>
                    </div>

                    <div class="ln_solid"></div>

                    <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                            <button type="submit" class="btn btn-success">Save</button>
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
