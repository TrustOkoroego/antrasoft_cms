@extends('admin/admin_template')
@section('container')
<?php $res_bknd = URL::to('/').'/res/backend';?>
<div class="row">
<div class="col-md-12">
<div class="x_panel">
<div class="x_title">
    <h2>Media Manager <small> </small></h2>
    <ul class="nav navbar-right panel_toolbox">
        <li>
            <button class="btn btn-success"><i class="fa fa-plus"></i> Upload New Image </button>
        </li>
        <li>
            <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> Search </button>
        </li>
    </ul>
    <div class="clearfix"></div>
</div>
<div class="x_content">

    <div class="row">
        @for($i=1;$i<20;$i++)
        <div class="col-md-55">
            <div class="thumbnail">
                <div class="image view view-first">
                    <img style="width: 100%; display: block;" src="{{$res_bknd}}/images/4.jpg" alt="image">
                </div>
                <div class="caption">
                    <p>water_card.png</p>
                </div>
            </div>
        </div>
        @endfor
    </div>

</div>
</div>
</div>
</div>
@stop

@section('styles')
<!-- Custom styling plus plugins -->
<link href="{{$res_bknd}}/css/custom.css" rel="stylesheet">
<link href="{{$res_bknd}}/css/icheck/flat/green.css" rel="stylesheet">
@stop
