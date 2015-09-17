@extends('admin/admin_template')
@section('container')
<?php $res_bknd = URL::to('/').'/res/backend';?>
<div class="row">

<div class="col-md-12 col-sm-12 col-xs-12">
<div class="x_panel">
<div class="x_title">
    <h2><i class="fa fa-users"></i> Users Manager <small></small></h2>
    <ul class="nav navbar-right panel_toolbox">
        <li>
            <button  onclick="window.location = '{{URL::to('/')}}/admin/newuser'" class="btn btn-success"><i class="fa fa-plus"></i> Add New User </button>
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
    <th>Firstname </th>
    <th>Lastname </th>
    <th>Email </th>
    <th class="col-sm-1">Status </th>
    <th>usertype</th>
    <th>Register Date </th>
    <th>LastLogin </th>
    <th>Action</th>
    </th>
</tr>
</thead>

<tbody>
<tr class="odd pointer">
    <td class="col-sm-1">
        <input type="text" class="form-control" />
    </td>
    <td class=""><input type="text" class="form-control"  /></td>
    <td class=" "><input type="text" class="form-control" /></td>
    <td class=" "><input type="text" class="form-control" /></td>
    <td class=" "><input type="text" class="form-control" /></td>
    <td class=""><input type="text" class="form-control" /></td>
    <td class=""><input type="text" class="form-control" />
    <td class=""><input type="text" class="form-control" />
    <td class=""></td>
</tr>
@foreach($users as $u)
<tr class="odd pointer">
    <td class="a-center ">
     {{$u->id}}
    </td>
    <td class=" ">{{$u->firstname}}</td>
    <td class=" ">{{$u->lastname}}</td>
    <td class=" ">{{$u->email}}</td>
    <td class=" ">{{$u->status}}</td>
    <td class=" ">{{$u->usertype}}</td>
    <td class=" ">{{$u->created_at->format('d/m/Y')}}</td>
    <td class="a-right a-right ">{{$u->updated_at->format('d/m/Y')}}</td>
    <td class=" last"><a href="{{URL::to('/')}}/admin/userprofile/{{$u->id}}">View</a>
    </td>
</tr>
@endforeach
</tbody>

</table>
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
