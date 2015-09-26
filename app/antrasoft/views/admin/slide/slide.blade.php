@extends('admin/admin_template')
@section('container')
<?php $res_bknd = URL::to('/').'/res/backend';?>

<div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <input type="hidden" id="token" name="_token" value="{{ csrf_token() }}">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2><i class="fa fa-slideshare"></i> Slides <small></small></h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li>
                                        <button onclick="window.location='{{URL::to('/')}}/admin/newslide'" class="btn btn-success"><i class="fa fa-plus"></i> Add New Slide </button>
                                    </li>
                                    <li>
                                        <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> Search </button>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <table id="example" class="table table-striped responsive-utilities jambo_table">
                                    <thead>
                                    <tr class="headings">

                                        <th> Slide Image </th>
                                        <th> Description </th>
                                        <th> Weight </th>
                                        <th class="col-sm-1"> Published </th>
                                        <th>created_at </th>
                                        <th>updated_at</th>
                                        <th>

                                        </th>

                                    </tr>
                                    </thead>

                                    <tbody>
                                    @foreach($slides as $sl)
                                    <tr class="odd pointer">
                                        <td class="">
                                            <img src="{{URL::to('/')}}/{{$sl->image_url}}" width="300px">
                                        </td>
                                        <td class=" ">{{$sl->image_description}}</td>
                                        <td class=" "><select slid="{{$sl->id}}"  name="weight" class="form-control weight_check">
                                                <option>{{$sl->weight}}</option>
                                                @for($i=1;$i<31;$i++)
                                                <option value="{{$i}}">{{$i}}</option>
                                                @endfor
                                            </select></td>
                                        <td class=" ">
                                            <div class="checkbox">
                                                <label class="">
                                                    <div slid="{{$sl->id}}" slid="{{$sl->id}}" style="position: relative;" class="published_check icheckbox_flat-green
                                                    <?php if($sl->published==1){ ?>
                                                    checked
                                                    <?php } ?>
                                                    "><input style="position: absolute; opacity: 0;" class="flat"
                                                        <?php if($sl->published==1){ ?>
                                                        checked="checked"
                                                        <?php } ?>
                                                        type="checkbox"><ins style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;" class="iCheck-helper"></ins></div>
                                                </label>
                                            </div>
                                        </td>
                                        </td><td class="">
                                            {{$sl->updated_at->format('d/m/Y')}}
                                        </td>
                                        <td class="">
                                            {{$sl->created_at->format('d/m/Y')}}
                                        </td>
                                        <td class="col-sm-1">
                                            <a href="">Edit Slide</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                    </tbody>

                                </table>
                            </div>
                        </div>
                        <br>
                        <br>
                        <br>
                    </div>
                </div>

@include('admin.slide.slidemodal',array('res_bknd',$res_bknd));

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
@stop
