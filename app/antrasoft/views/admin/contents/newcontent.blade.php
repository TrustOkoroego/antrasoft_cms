@extends('admin/admin_template')
@section('container')
<?php $res_bknd = URL::to('/').'/res/backend';?>

<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <input type="hidden" id="token" name="_token" value="{{ csrf_token() }}">
        <div class="x_panel">
            <div class="x_title">
                <h2><i class="fa fa-plus"></i> Add new Content <small></small></h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li>
                        <button  id="addfeaturedimage" class="btn btn-success"><i class="fa fa-plus"></i> Upload featured Image</button>
                        <button  onclick="window.location='{{URL::to('/')}}/admin/contents'" class="btn btn-success"><i class="fa fa-arrow-left"></i> Back </button>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <div class="col-md-8 col-xs-12">
                    <div style="border: thin solid #CCCCCC">
                        <textarea id="editor" name="editor" cols="40" rows="40" ></textarea>
                        </div>
                </div>
                <div class="col-md-4 col-xs-12">
                    <div style="width: 100%;">
                        {!!$error!!}
                        <form method="post" id="newcontentform" action="" >
                            <img id="sldiepreview"  src=""  alt="Picture" style="width: 100%">
                            <br>
                            <input type="hidden" name="imageurl" id="imageurl" />
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <label for="message">Title:</label>
                            <input type="text" class="form-control" name="description1" id="title"  />
                            <br>
                            Publisher:
                            <select class="form-control" name="contentpublisher">
                                @foreach($publishers as $p)
                                <option value="{{$p->id}}"> {{$p->firstname.' '.$p->lastname}} </option>
                                @endforeach
                                <option value="">All</option>
                            </select>
                            <br>
                            <label>Published Date:</label>
                            <fieldset>
                                <div class="control-group">
                                    <div class="controls" style="margin-left: -10px">
                                        <div class="col-md-11 xdisplay_inputx form-group has-feedback">
                                            <input name="publisheddate" class="form-control has-feedback-left" id="single_cal1" placeholder="Published date" aria-describedby="inputSuccess2Status" type="text">
                                            <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                                            <span id="inputSuccess2Status" class="sr-only">(success)</span>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            <br>
                            <label for="message">Intro Text: </label>
                            <textarea class="form-control" name="description2" ></textarea>
                            <br>
                            <label>Content Type:</label>
                            <select class="form-control" name="contenttype" id="contenttypep">
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
                            <br>

                            <button class="btn btn-success" id="content_publish">Publish</button>
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
@stop

@section('script')
<!--<script src="{{$res_bknd}}/js/cropping/cropper.min.js"></script>-->
<script src="{{$res_bknd}}/js/contents.js"></script>
<script src="{{$res_bknd}}/ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="{{$res_bknd}}/js/moment.min2.js"></script>
<script type="text/javascript" src="{{$res_bknd}}/js/datepicker/daterangepicker.js"></script>
<script>
    $(document).ready(function () {
        CKEDITOR.replace( 'editor' );
        $('#single_cal1').daterangepicker({
            singleDatePicker: true,
            calender_style: "picker_1"
        }, function (start, end, label) {
            //console.log(start.toISOString(), end.toISOString(), label);
        });
    });

</script>
<script src="{{$res_bknd}}/js/slide.js"></script>
<script src="{{$res_bknd}}/js/imagebrowser.js"></script>
@stop
