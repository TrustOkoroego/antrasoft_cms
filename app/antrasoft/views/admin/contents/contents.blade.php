@extends('admin/admin_template')
@section('container')
<?php $res_bknd = URL::to('/').'/res/backend';?>

<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <input type="hidden" id="token" name="_token" value="{{ csrf_token() }}">
        <div class="x_panel">
            <div class="x_title">
                <h2><i class="fa fa-slideshare"></i> Content Manager <small></small></h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li>
                        <button onclick="window.location='{{URL::to('/')}}/admin/newcontent'" class="btn btn-success"><i class="fa fa-plus"></i> Add New Content </button>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <div style="margin-bottom: 10px">
                    <select id="contenttype" class="form-control" style="width:150px">
                        @if(count($activeContentType)<1)
                        <option value="">All</option>
                        @else
                        <option value="{{$activeContentType->id}}">{{$activeContentType->contenttype_name}}</option>
                        @endif

                        @foreach($ctypes as $c)
                        <option value="{{$c->id}}"> {{$c->contenttype_name}} </option>
                        @endforeach
                        <option value="">All</option>
                    </select>

                </div>
                <table id="example" class="table table-striped responsive-utilities jambo_table">
                    <thead>
                    <tr class="headings">
                        <th> Title </th>
                        <th> Description </th>
                        <th> Featured Image </th>
                        <th class="col-sm-1"> Weight </th>
                        <th class="col-sm-1"> Published </th>
                        <th>Published Date</th>
                        <th>Date Created </th>
                        <th>

                        </th>

                    </tr>
                    </thead>

                    <tbody>

                    @foreach($content as $con)
                    <tr class="odd pointer">
                        <td class="">
                            {{$con['title']}}
                        </td>
                        <td class="">
                            {{$con['intro_text']}}
                        </td>
                        <td class="">
                            <img src="{{URL::to('/')}}/{{$con['featured_image']}}" width="200px">
                        </td>

                        <td class=" "><select contentid="{{$con['id']}}"  name="weight" class="form-control weight_check">
                                <option>{{$con['weight']}}</option>
                                @for($i=1;$i<31;$i++)
                                <option value="{{$i}}">{{$i}}</option>
                                @endfor
                            </select></td>
                        <td class=" ">
                            <div class="checkbox">
                                <label class="">
                                    <div contentid="{{$con['id']}}" slid="{{$con['id']}}" style="position: relative;" class="published_check icheckbox_flat-green
                                                    <?php if($con['status']==1){ ?>
                                                    checked
                                                    <?php } ?>
                                                    "><input style="position: absolute; opacity: 0;" class="flat"
                                            <?php if($con['published']==1){ ?>
                                                checked="checked"
                                            <?php } ?>
                                                             type="checkbox"><ins style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;" class="iCheck-helper"></ins></div>
                                </label>
                            </div>
                        </td>
                        </td><td class="">
                            {{$con['published_date']}}
                        </td>
                        <td class="">
                            {{$con['created_at']->format('d/m/Y')}}
                        </td>
                        <td class="col-sm-1">
                            <a title="edit slide" href="{{URL::to('/')}}/admin/editcontent/{{$con['id']}}"><i class="fa fa-pencil"></i></a>
                            &nbsp;&nbsp;&nbsp;&nbsp;
                            <a style="cursor:pointer;" title="delete slide"  class="delete_slide" id="{{$con['id']}}"><i class="fa fa-trash"></i></a>
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
<script src="{{$res_bknd}}/js/contents.js"></script>
@stop
