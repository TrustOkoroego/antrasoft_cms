@extends('admin/admin_template')
@section('container')
<?php $res_bknd = URL::to('/').'/res/backend';?>
<div class="row">

    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2><i class="fa fa-users"></i> Subscribers <small></small></h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li>
                        <button id="tt" onclick="tableToExcel('subscribers', 'serviceride_subscribers')" class="btn btn-success"><i class="fa fa-file-excel-o"></i> Export </button>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content" style="max-height: 1000px;overflow: scroll">
                <table id="subscribers" class="table table-striped responsive-utilities jambo_table">
                    <thead>
                    <tr class="headings">
                        <th>
                            #id
                        </th>
                        <th>Firstname </th>
                        <th>Lastname </th>
                        <th>Email </th>
                        <th>Subscription Date </th>
                        </th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($subscribers as $u)
                    <tr class="odd pointer">
                        <td class="a-center ">
                            {{$u->id}}
                        </td>
                        <td class=" ">{{$u->firstname}}</td>
                        <td class=" ">{{$u->lastname}}</td>
                        <td class=" ">{{$u->email}}</td>
                        <td class=" ">{{$u->created_at->format('d/m/Y')}}</td>
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


        @section('script')
        @section('script')
        <script>
            $('tt').click(function(e){e.preventDefault()});
            var tableToExcel = (function() {
                var uri = 'data:application/vnd.ms-excel;base64,'
                    , template = '<html xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:x="urn:schemas-microsoft-com:office:excel" xmlns="http://www.w3.org/TR/REC-html40"><head><!--[if gte mso 9]><xml><x:ExcelWorkbook><x:ExcelWorksheets><x:ExcelWorksheet><x:Name>{worksheet}</x:Name><x:WorksheetOptions><x:DisplayGridlines/></x:WorksheetOptions></x:ExcelWorksheet></x:ExcelWorksheets></x:ExcelWorkbook></xml><![endif]--></head><body><table>{table}</table></body></html>'
                    , base64 = function(s) { return window.btoa(unescape(encodeURIComponent(s))) }
                    , format = function(s, c) { return s.replace(/{(\w+)}/g, function(m, p) { return c[p]; }) }
                return function(table, name) {
                    if (!table.nodeType) table = document.getElementById(table)
                    var ctx = {worksheet: name || 'Worksheet', table: table.innerHTML}
                    window.location.href = uri + base64(format(template, ctx))
                }
            })()
        </script>

        @stop
        @stop
