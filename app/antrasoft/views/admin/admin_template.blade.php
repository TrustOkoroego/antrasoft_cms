<?php $res_bknd = URL::to('/').'/res/backend';?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>antrasoft  - Admin </title>

    <!-- Bootstrap core CSS -->

    <link href="{{$res_bknd}}/css/bootstrap.min.css" rel="stylesheet">

    <link href="{{$res_bknd}}/fonts/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{$res_bknd}}/css/animate.min.css" rel="stylesheet">

    <!-- Custom styling plus plugins -->
    <link href="{{$res_bknd}}/css/custom.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{$res_bknd}}/css/maps/jquery-jvectormap-2.0.1.css" />
    <link href="{{$res_bknd}}/css/icheck/flat/green.css" rel="stylesheet" />
    <link href="{{$res_bknd}}/css/floatexamples.css" rel="stylesheet" type="text/css" />
    @yield('styles')

    <script src="{{$res_bknd}}/js/jquery.min.js"></script>


    <!--[if lt IE 9]>
    <script src="../assets/js/ie8-responsive-file-warning.js"></script>
    <![endif]-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>


<body class="nav-md">

<div class="container body">


<div class="main_container">

<div class="col-md-3 left_col">
    <div class="left_col scroll-view">

        <div class="navbar nav_title" style="border: 0;">
            <a href="index.blade.php" class="site_title"><i class="fa fa-paw"></i> <span>Antrasoft - Admin</span></a>
        </div>
        <div class="clearfix"></div>

        <!-- menu prile quick info -->
        <div class="profile">
            <div class="profile_pic">
                <img src="{{$res_bknd}}/images/img.jpg" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
                <span>Welcome,</span>
                <h2>{{Auth::user()->firstname.' '.Auth::user()->lastname}}</h2>
            </div>
        </div>
        <!-- /menu prile quick info -->

        <br />

        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

            <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                    <li><a><i class="fa fa-users"></i> User Manager <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu" style="display: none">
                            <li><a href="{{URL::to('/')}}/admin/users">Users</a>
                            </li>
                            <li><a href="index2.html">Dashboard2</a>
                            </li>
                            <li><a href="index3.html">Dashboard3</a>
                            </li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-edit"></i> Blog <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu" style="display: none">
                            <li><a href="form.html">New Blog Post</a>
                            </li>
                            <li><a href="form_advanced.html">Posts</a>
                            </li>
                            <li><a href="form_validation.html">Settings</a>
                            </li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-edit"></i> Gallery <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu" style="display: none">
                            <li><a href="form.html">new Gallery</a>
                            </li>
                            <li><a href="form_advanced.html">Add Image</a>
                            </li>
                            <li><a href="form_validation.html">Manage Gallery</a>
                            </li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-users"></i> File Manager <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu" style="display: none">
                            <li><a href="#">Images</a>
                            </li>
                            <li><a href="#">Files</a>
                            </li>
                            <li><a href="#">Videos</a>
                            </li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-edit"></i> Forums <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu" style="display: none">
                            <li><a href="form.html">New Post</a>
                            </li>
                            <li><a href="form_advanced.html">Topics</a>
                            </li>
                            <li><a href="form_validation.html">Comments</a>
                            </li>
                            <li><a href="form_wizards.html">Settings</a>
                            </li>
                            <li><a href="form_upload.html">Form Upload</a>
                            </li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-desktop"></i> Slides <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu" style="display: none">
                            <li><a href="general_elements.html">Add new Slide</a>
                            </li>
                            <li><a href="media_gallery.html">Manage Slides</a>
                            </li>
                            <li><a href="typography.html">Typography</a>
                            </li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-desktop"></i> E-commerce <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu" style="display: none">
                            <li><a href="general_elements.html">Sock</a>
                            </li>
                            <li><a href="media_gallery.html">Categories</a>
                            </li>
                            <li><a href="typography.html">Sub Categories</a>
                            </li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-bar-chart-o"></i> Emailing <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu" style="display: none">
                            <li><a href="chartjs.html">Compose Bulk Email</a>
                            </li>
                            <li><a href="chartjs2.html">Chart JS2</a>
                            </li>
                            <li><a href="morisjs.html">Moris JS</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>

        </div>
        <!-- /sidebar menu -->

        <!-- /menu footer buttons -->
        <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Logout">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
        </div>
        <!-- /menu footer buttons -->
    </div>
</div>

<!-- top navigation -->
<div class="top_nav">

    <div class="nav_menu">
        <nav class="" role="navigation">
            <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>

            <ul class="nav navbar-nav navbar-right">
                <li class="">
                    <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        <img src="{{$res_bknd}}/images/img.jpg" alt="">John Doe
                        <span class=" fa fa-angle-down"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-usermenu animated fadeInDown pull-right">
                        <li>
                            <a href="javascript:;">
                                <span>Settings</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;">Help</a>
                        </li>
                        <li><a href="{{URL::to('/')}}/admin/logout"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                        </li>
                    </ul>
                </li>

                <li role="presentation" class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-envelope-o"></i>
                        <span class="badge bg-green">6</span>
                    </a>
                    <ul id="menu1" class="dropdown-menu list-unstyled msg_list animated fadeInDown" role="menu">
                       <li>
                            <a>
                                            <span class="image">
                                        <img src="images/img.jpg" alt="Profile Image" />
                                    </span>
                                            <span>
                                        <span>John Smith</span>
                                            <span class="time">3 mins ago</span>
                                            </span>
                                            <span class="message">
                                        Film festivals used to be do-or-die moments for movie makers. They were where... 
                                    </span>
                            </a>
                        </li>
                        <li>
                            <div class="text-center">
                                <a>
                                    <strong><a href="inbox.html">See All Alerts</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </div>
                        </li>
                    </ul>
                </li>

            </ul>
        </nav>
    </div>

</div>
<!-- /top navigation -->


<!-- page content -->
<div class="right_col" role="main">
    @yield('container')
</div>
<!-- /page content -->

</div>

</div>

<div id="custom_notifications" class="custom-notifications dsp_none">
    <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
    </ul>
    <div class="clearfix"></div>
    <div id="notif-group" class="tabbed_notifications"></div>
</div>

<script src="{{$res_bknd}}/js/bootstrap.min.js"></script>


<!-- bootstrap progress js -->
<script src="{{$res_bknd}}/js/progressbar/bootstrap-progressbar.min.js"></script>
<script src="{{$res_bknd}}/js/nicescroll/jquery.nicescroll.min.js"></script>
<!-- icheck -->
<script src="{{$res_bknd}}/js/icheck/icheck.min.js"></script>
<!-- daterangepicker -->
<script type="text/javascript" src="{{$res_bknd}}/js/moment.min.js"></script>
<script type="text/javascript" src="{{$res_bknd}}/js/datepicker/daterangepicker.js"></script>

<script src="{{$res_bknd}}/js/custom.js"></script>

<!-- flot js -->
<!--[if lte IE 8]><script type="text/javascript" src="js/excanvas.min.js"></script><![endif]-->
<script type="text/javascript" src="{{$res_bknd}}/js/flot/jquery.flot.js"></script>
<script type="text/javascript" src="{{$res_bknd}}/js/flot/jquery.flot.pie.js"></script>
<script type="text/javascript" src="{{$res_bknd}}/js/flot/jquery.flot.orderBars.js"></script>
<script type="text/javascript" src="{{$res_bknd}}/js/flot/jquery.flot.time.min.js"></script>
<script type="text/javascript" src="{{$res_bknd}}/js/flot/date.js"></script>
<script type="text/javascript" src="{{$res_bknd}}/js/flot/jquery.flot.spline.js"></script>
<script type="text/javascript" src="{{$res_bknd}}/js/flot/jquery.flot.stack.js"></script>
<script type="text/javascript" src="{{$res_bknd}}/js/flot/curvedLines.js"></script>
<script type="text/javascript" src="{{$res_bknd}}/js/flot/jquery.flot.resize.js"></script>
<script>
    $(document).ready(function () {
        // [17, 74, 6, 39, 20, 85, 7]
        //[82, 23, 66, 9, 99, 6, 2]
        var data1 = [[gd(2012, 1, 1), 17], [gd(2012, 1, 2), 74], [gd(2012, 1, 3), 6], [gd(2012, 1, 4), 39], [gd(2012, 1, 5), 20], [gd(2012, 1, 6), 85], [gd(2012, 1, 7), 7]];

        var data2 = [[gd(2012, 1, 1), 82], [gd(2012, 1, 2), 23], [gd(2012, 1, 3), 66], [gd(2012, 1, 4), 9], [gd(2012, 1, 5), 119], [gd(2012, 1, 6), 6], [gd(2012, 1, 7), 9]];
        $("#canvas_dahs").length && $.plot($("#canvas_dahs"), [
            data1, data2
        ], {
            series: {
                lines: {
                    show: false,
                    fill: true
                },
                splines: {
                    show: true,
                    tension: 0.4,
                    lineWidth: 1,
                    fill: 0.4
                },
                points: {
                    radius: 0,
                    show: true
                },
                shadowSize: 2
            },
            grid: {
                verticalLines: true,
                hoverable: true,
                clickable: true,
                tickColor: "#d5d5d5",
                borderWidth: 1,
                color: '#fff'
            },
            colors: ["rgba(38, 185, 154, 0.38)", "rgba(3, 88, 106, 0.38)"],
            xaxis: {
                tickColor: "rgba(51, 51, 51, 0.06)",
                mode: "time",
                tickSize: [1, "day"],
                //tickLength: 10,
                axisLabel: "Date",
                axisLabelUseCanvas: true,
                axisLabelFontSizePixels: 12,
                axisLabelFontFamily: 'Verdana, Arial',
                axisLabelPadding: 10
                //mode: "time", timeformat: "%m/%d/%y", minTickSize: [1, "day"]
            },
            yaxis: {
                ticks: 8,
                tickColor: "rgba(51, 51, 51, 0.06)",
            },
            tooltip: false
        });

        function gd(year, month, day) {
            return new Date(year, month - 1, day).getTime();
        }
    });
</script>

@yield('scripts')
<!-- /datepicker -->
<!-- /footer content -->
</body>

</html>
