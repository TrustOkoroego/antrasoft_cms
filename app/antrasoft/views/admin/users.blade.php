@extends('admin/admin_template')

@section('container')

<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <h2>Users <small>Administrator</small></h2>
            <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Settings 1</a>
                        </li>
                        <li><a href="#">Settings 2</a>
                        </li>
                    </ul>
                </li>
                <li><a class="close-link"><i class="fa fa-close"></i></a>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>

        <div class="x_content">

            <p>Add class <code>bulk_action</code> to table for bulk actions options on row select</p>

            <table class="table table-striped responsive-utilities jambo_table bulk_action">
                <thead>
                <tr class="headings">
                    <th>
                        <div style="position: relative;" class="icheckbox_flat-green"><input style="position: absolute; opacity: 0;" id="check-all" class="flat" type="checkbox"><ins style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;" class="iCheck-helper"></ins></div>
                    </th>
                    <th style="display: table-cell;" class="column-title"> Name </th>
                    <th style="display: table-cell;" class="column-title"> Email </th>
                    <th style="display: table-cell;" class="column-title"> Type </th>
                    <th style="display: table-cell;" class="column-title"> Status </th>
                    <th style="display: table-cell;" class="column-title"> Reg Date </th>
                    <th style="display: table-cell;" class="column-title"> Last Login </th>
                    <th style="display: table-cell;" class="column-title no-link last"><span class="nobr">Action</span>
                    </th>
                    <th style="display: none;" class="bulk-actions" colspan="7">
                        <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt">1 Records Selected</span> ) <i class="fa fa-chevron-down"></i></a>
                    </th>
                </tr>
                </thead>

                <tbody>
                @for($i=1;$i<10;$i++)
                <tr class="even pointer">
                    <!--<td class="a-center "><div style="position: relative;" class="icheckbox_flat-green"><input style="position: absolute; opacity: 0;" class="flat" name="table_records" type="checkbox"><ins style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;" class="iCheck-helper"></ins></div></td>-->
                    <td><img src="http://localhost/antrasoft-cms/public/res/backend/images/img.jpg" alt="" width="27" class="img-circle"></td>
                    <td class=" ">Trust Okoroego</td>
                    <td class=" ">trustokoroego@outlook.com </td>
                    <td class=" "> normal user <i class="success fa fa-long-arrow-up"></i></td>
                    <td class=" "> active </td>
                    <td class=" ">{{Date('d/m/Y')}}</td>
                    <td class="a-right a-right ">{{Date('d/m/Y : h:i')}}</td>
                    <td class=" last"><a href="#">View</a>
                    </td>
                </tr>
                @endfor
                </tbody>

            </table>
        </div>
    </div>
</div>
@stop