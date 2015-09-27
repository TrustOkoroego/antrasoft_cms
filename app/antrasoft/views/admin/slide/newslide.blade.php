@extends('admin/admin_template')
@section('container')
<?php $res_bknd = URL::to('/').'/res/backend';?>

<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2><i class="fa fa-plus"></i> Add new Slide <small></small></h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li>
                        <button  id="addnewslide" class="btn btn-success"><i class="fa fa-plus"></i> Upload Image </button>
                        <button  onclick="window.location='{{URL::to('/')}}/admin/slides'" class="btn btn-success"><i class="fa fa-arrow-left"></i> Back </button>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <div class="col-md-8 col-xs-12">
                    <div style="width: 100%;">
                        <img id="sldiepreview"  src=""  alt="Picture" style="width: 100%">
                    </div>
                </div>
                <div class="col-md-4 col-xs-12">
                    <div style="width: 100%;">
                        {!!$error!!}
                        <form method="post" action="" >
                            <input type="hidden" name="imageurl" id="imageurl" />
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <label for="message">Description :</label>
                            <textarea class="form-control" name="description1" ></textarea>
                            <br>
                            <label for="message">Description 2 :</label>
                            <textarea class="form-control" name="description2" ></textarea>
                            <br>
                            <button class="btn btn-success">Publish</button>
                            </p>
                        </form>
                    </div>
                </div>
            </div>

            </div>
        </div>
        <br>
        <br>
        <br>
    </div>
</div>

@include('admin.slide.slidemodal',array('res_bknd',$res_bknd));
@include('admin.media.imagebrowser',array('res_bknd',$res_bknd));

@stop

@section('styles')
<!-- Custom styling plus plugins
<link href="{{$res_bknd}}/css/custom.css" rel="stylesheet">
<link href="{{$res_bknd}}/css/crop.css" rel="stylesheet">
<link href="{{$res_bknd}}/css/icheck/flat/green.css" rel="stylesheet">
<link href="{{$res_bknd}}/css/spinner.css" rel="stylesheet">
<link rel="stylesheet" href="http://css-spinners.com/css/spinner/inner-circles.css" type="text/css">-->
@stop

@section('script')
<!--<script src="{{$res_bknd}}/js/cropping/cropper.min.js"></script>-->
<script src="{{$res_bknd}}/js/slide.js"></script>
<script src="{{$res_bknd}}/js/imagebrowser.js"></script>
@stop
