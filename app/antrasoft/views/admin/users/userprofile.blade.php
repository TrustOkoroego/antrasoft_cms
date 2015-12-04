@extends('admin/admin_template')
@section('container')
<?php $res_bknd = URL::to('/').'/res/backend';?>
<div class="row">

    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2><i class="fa fa-users"></i> Users Profile <small></small></h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li>
                        <button type="submit" onclick="window.location='{{URL::to('/')}}/admin/newuser'" class="btn btn-success"><i class="fa fa-plus"></i> Add New User </button>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">

            <div class="col-md-3 col-sm-3 col-xs-12 profile_left">

                <div class="profile_img">

                    <!-- end of image cropping -->
                    <div id="crop-avatar">
                        <!-- Current avatar -->
                        <div data-original-title="Change the avatar" class="avatar-view" title="">
                            <img src="{{URL::to('/')}}/<?php if($user->profile_image==''){echo "res/user.png";}else{echo $user->profile_image;} ?>" alt="Avatar">
                        </div>

                        <!-- Loading state -->
                        <div class="loading" aria-label="Loading" role="img" tabindex="-1"></div>
                    </div>
                    <!-- end of image cropping -->

                </div>
                <h3>{{$user->firstname.' '.$user->lastname}}</h3>

                <ul class="list-unstyled user_data">
                    <li><i class="fa fa-envelope user-profile-icon"></i> {{$user->email}}
                    </li>

                    <li>
                        <p><i class="fa fa-user-md user-profile-icon "></i> {{$user->usertype}}</p>
                    </li>
                </ul>

                <a href="{{URL::to('/')}}/admin/editprofile/{{$user->id}}" class="btn btn-success"><i class="fa fa-edit m-right-xs"></i>Edit Profile</a>
                <a href="{{URL::to('/')}}/admin/passwordreset" class="btn btn-success"><i class="fa fa-edit m-right-xs"></i>Change Password</a>
                <br>
            </div>
            <div class="col-md-9 col-sm-9 col-xs-12">

                <div class="profile_title">
                    <div class="col-md-6">
                        <h2>Last Seen:</h2>
                    </div>
                    <div class="col-md-6">

                        <div id="reportrange" class="pull-right" style="margin-top: 5px; background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #E6E9ED">
                            <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                            <span>{{$user->updated_at}}</span> <b class="caret"></b>
                        </div>
                    </div>
                </div>
                <div class="" role="tabpanel" data-example-id="togglable-tabs">
                    <div class="ln_solid"></div>
                    <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12">Privileges <span class="required">*</span>
                        </label>
                        <div class="col-md-7 col-sm-7 col-xs-12">
                            <?php
                            $prev = App\antrasoft\helper\AdminHelper::getPrivileges($user->privilege);
                            if(count($prev)>1)
                            {
                                foreach($prev as $p)
                                {
                                    if($p!=""){
                                        echo '<span class="tag"><span>'.$p.'&nbsp;&nbsp;</span></span>' ;
                                    }
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
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
