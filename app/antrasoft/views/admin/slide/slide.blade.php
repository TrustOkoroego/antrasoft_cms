@extends('admin/admin_template')
@section('container')
<?php $res_bknd = URL::to('/').'/res/backend';?>

<div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2><i class="fa fa-slideshare"></i> Slides <small></small></h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li>
                                        <button  id="addnewslide" class="btn btn-success"><i class="fa fa-plus"></i> Add New Slide </button>
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
                                        <th>
                                            #id
                                        </th>
                                        <th>Slide Image </th>
                                        <th> Description </th>
                                        <th> Weight </th>
                                        <th class="col-sm-1"> Published </th>
                                        <th>created_at </th>
                                        <th>updated_at</th>

                                    </tr>
                                    </thead>

                                    <tbody>
                                    <tr class="odd pointer">
                                        <td class="col-sm-1">
1
                                        </td>
                                        <td class=""></td>
                                        <td class=" ">we are the one stop market</td>
                                        <td class=" "><select name="weight" class="form-control">
                                                <option>0</option>
                                                @for($i=1;$i<31;$i++)
                                                <option value="{{$i}}">{{$i}}</option>
                                                @endfor



                                            </select></td>
                                        <td class=" ">
                                            <div class="checkbox">
                                                <label class="">
                                                    <div style="position: relative;" class="icheckbox_flat-green checked"><input style="position: absolute; opacity: 0;" class="flat" checked="checked" type="checkbox"><ins style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;" class="iCheck-helper"></ins></div>
                                                </label>
                                            </div>
                                        </td>
                                        </td><td class="">
                                            10/12/2015
                                        </td>
                                        <td class="">
                                            10/12/2015
                                        </td>
                                    </tr>

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
<!-- Custom styling plus plugins -->
<link href="{{$res_bknd}}/css/custom.css" rel="stylesheet">
<link href="{{$res_bknd}}/css/crop.css" rel="stylesheet">
<link href="{{$res_bknd}}/css/icheck/flat/green.css" rel="stylesheet">
<link href="{{$res_bknd}}/css/spinner.css" rel="stylesheet">
<!--<link rel="stylesheet" href="http://css-spinners.com/css/spinner/inner-circles.css" type="text/css">-->
@stop

@section('script')
<script src="{{$res_bknd}}/js/cropping/cropper.min.js"></script>
<script src="{{$res_bknd}}/js/croppingcode.js"></script>
@stop
