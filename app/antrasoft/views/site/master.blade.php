<?php use Illuminate\Support\Facades\Request as Request;

?>
<!DOCTYPE html>
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
    <meta charset="utf-8">
    <title>Seriveride: @yield('title')</title>
    <meta name="description" content="service ride">
    <meta name="author" content="trust okoroego" email="trustokoroego@outlook.com">

    <!-- Mobile Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon -->
    <!--<link rel='shortcut icon' href="/images/favicon.ico" type='image/x-icon'/ >-->

    <!-- Web Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,700,300&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=PT+Serif' rel='stylesheet' type='text/css'>

    <!-- Bootstrap core CSS -->
    <link href="{{URL::to('/')}}/site/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Font Awesome CSS -->
    <link href="{{URL::to('/')}}/site/fonts/font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Fontello CSS -->
    <link href="{{URL::to('/')}}/site/fonts/fontello/css/fontello.css" rel="stylesheet">

    <!-- Plugins -->
    <link href="{{URL::to('/')}}/site/plugins/rs-plugin/css/settings.css" media="screen" rel="stylesheet">
    <link href="{{URL::to('/')}}/site/plugins/rs-plugin/css/extralayers.css" media="screen" rel="stylesheet">
    <link href="{{URL::to('/')}}/site/plugins/magnific-popup/magnific-popup.css" rel="stylesheet">
    <link href="{{URL::to('/')}}/site/css/animations.css" rel="stylesheet">
    <link href="{{URL::to('/')}}/site/plugins/owl-carousel/owl.carousel.css" rel="stylesheet">

    <!-- iDea core CSS file -->
    <link href="{{URL::to('/')}}/site/css/style.css" rel="stylesheet">

    <!-- Color Scheme (In order to change the color scheme, replace the red.css with the color scheme that you prefer)-->
    <link href="{{URL::to('/')}}/site/css/skins/blue.css" rel="stylesheet">

    <!-- Custom css -->
    <link href="{{URL::to('/')}}/site/css/custom.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    @yield('style')
    <![endif]-->
</head>

<!-- body classes:
        "boxed": boxed layout mode e.g. <body class="boxed">
        "pattern-1 ... pattern-9": background patterns for boxed layout mode e.g. <body class="boxed pattern-1">
-->
<body class="front no-trans">
<!-- scrollToTop -->
<!-- ================ -->
<div class="scrollToTop"><i class="icon-up-open-big"></i></div>

<!-- page wrapper start -->
<!-- ================ -->
<div class="page-wrapper">

<!-- header-top start (Add "dark" class to .header-top in order to enable dark header-top e.g <div class="header-top dark">) -->
<!-- ================ -->
<div class="header-top">
    <div class="container">
        <div class="row">
            <div class="col-xs-2  col-sm-6">

                <!-- header-top-first start -->
                <!-- ================ -->
                <div class="header-top-first clearfix">
                    <ul class="social-links clearfix hidden-xs">
                        <!--<li class="twitter"><a target="_blank" href="http://www.twitter.com"><i class="fa fa-twitter"></i></a></li>-->
                        <!--<li class="linkedin"><a target="_blank" href="http://www.linkedin.com"><i class="fa fa-linkedin"></i></a></li>-->
                        <!--<li class="youtube"><a target="_blank" href="http://www.youtube.com"><i class="fa fa-youtube-play"></i></a></li>-->
                        <li class="facebook"><a target="_blank" href="https://www.facebook.com/Serviceride-Limited-147647652050748"><i class="fa fa-facebook"></i></a></li>
                    </ul>
                    <div class="social-links hidden-lg hidden-md hidden-sm">
                        <div class="btn-group dropdown">
                            <button type="button" class="btn dropdown-toggle" data-toggle="dropdown"><i class="fa fa-share-alt"></i></button>
                            <ul class="dropdown-menu dropdown-animation">
                                <li class="twitter"><a target="_blank" href="http://www.twitter.com"><i class="fa fa-twitter"></i></a></li>
                                <li class="linkedin"><a target="_blank" href="http://www.linkedin.com"><i class="fa fa-linkedin"></i></a></li>
                                <li class="youtube"><a target="_blank" href="http://www.youtube.com"><i class="fa fa-youtube-play"></i></a></li>
                                <li class="facebook"><a target="_blank" href="http://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- header-top-first end -->

            </div>
            <div class="col-xs-10 col-sm-6">

                <!-- header-top-second start -->
                <!-- ================ -->
                <div id="header-top-second"  class="clearfix">

                    <!-- header top dropdowns start -->
                    <!-- ================ -->
                    <div class="header-top-dropdown">
                        <div class="btn-group dropdown">
                            <button type="button" class="btn dropdown-toggle" data-toggle="dropdown"><i class="fa fa-search"></i> Search</button>
                            <ul class="dropdown-menu dropdown-menu-right dropdown-animation">
                                <li>
                                    <form role="search" action="{{URL::to('/')}}/search" class="search-box">
                                        <div class="form-group has-feedback">
                                            <input type="text" name="param" class="form-control" placeholder="Search">
                                            <i class="fa fa-search form-control-feedback"></i>
                                        </div>
                                    </form>
                                </li>
                            </ul>
                        </div>
                       <!-- <div class="btn-group dropdown">
                            <button type="button" class="btn dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Login</button>
                            <ul class="dropdown-menu dropdown-menu-right dropdown-animation">
                                <li>
                                    <form class="login-form">
                                        <div class="form-group has-feedback">
                                            <label class="control-label">Username</label>
                                            <input type="text" class="form-control" placeholder="">
                                            <i class="fa fa-user form-control-feedback"></i>
                                        </div>
                                        <div class="form-group has-feedback">
                                            <label class="control-label">Password</label>
                                            <input type="password" class="form-control" placeholder="">
                                            <i class="fa fa-lock form-control-feedback"></i>
                                        </div>
                                        <button type="submit" class="btn btn-group btn-dark btn-sm">Log In</button>
                                        <span>or</span>
                                        <button type="submit" class="btn btn-group btn-default btn-sm">Sign Up</button>

                                        <ul>
                                            <li><a href="#">Forgot your password?</a></li>
                                        </ul>
                                        <div class="divider"></div>
                                        <span class="text-center">Login with</span>
                                        <ul class="social-links clearfix">
                                            <li class="facebook"><a target="_blank" href="http://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
                                            <li class="twitter"><a target="_blank" href="http://www.twitter.com"><i class="fa fa-twitter"></i></a></li>
                                            <li class="googleplus"><a target="_blank" href="http://plus.google.com"><i class="fa fa-google-plus"></i></a></li>
                                        </ul>
                                    </form>
                                </li>
                            </ul>
                        </div>-->

                    </div>
                    <!--  header top dropdowns end -->

                </div>
                <!-- header-top-second end -->

            </div>
        </div>
    </div>
</div>
<!-- header-top end -->

<!-- header start classes:
    fixed: fixed navigation mode (sticky menu) e.g. <header class="header fixed clearfix">
     dark: dark header version e.g. <header class="header dark clearfix">
================ -->
<header class="header fixed clearfix" style="padding-bottom: 3px;">
<div class="container">
<div class="row">
<div class="col-md-3">

    <!-- header-left start -->
    <!-- ================ -->
    <div class="header-left clearfix">

        <!-- logo -->
        <div class="logo" style="margin-top: -10px" >
            <a href="{{URL::to('/')}}"><img id="logo" src="{{URL::to('/')}}/site/images/logo_dark_header_blue.png" alt="service ride"></a>
        </div>

        <div class="site-slogan" style="text-align:left;margin-top: -10px;margin-left:70px">
            Your career's next level
        </div>


    </div>
    <!-- header-left end -->

</div>
<div class="col-md-9">

<!-- header-right start -->
<!-- ================ -->
<div class="header-right clearfix">

<!-- main-navigation start -->
<!-- ================ -->
<div class="main-navigation animated">

    <!-- navbar start -->
    <!-- ================ -->
    <nav class="navbar navbar-default" role="navigation">
        <div class="container-fluid">

            <!-- Toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="{{ Request::is('/') ? 'active' : '' }}">
                        <a href="{{URL::to('/')}}" >HOME</a>
                    </li>
                    <li class="dropdown {{ Request::is('program/*')||Request::is('programmes') ? 'active' : '' }}">
                        <a href="{{URL::to('/')}}/programmes" class="dropdown-toggle" data-toggle="dropdown">Programmes</a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="{{URL::to('/')}}/program/22/Finance-and-Accounting-Management" class="dropdown-toggle" data-toggle="dropdown"> Finance and Accounting Management </a>
                            </li>
                            <li>
                                <a href="{{URL::to('/')}}/program/23/Business-Developement-Strategies" class="dropdown-toggle" data-toggle="dropdown"> Business Development Strategies </a>
                            </li>
                            <li>
                                <a href="{{URL::to('/')}}//program/24/Personal-Empowerment/Development" class="dropdown-toggle" data-toggle="dropdown"> Personal Empowerment/Development </a>
                            </li>
                            <li>
                                <a href="{{URL::to('/')}}/program/25/3---4-Weeks-Intensive-Courses" class="dropdown-toggle" data-toggle="dropdown">       3 - 4 Weeks Intensive Courses </a>
                            </li>

                        </ul>
                    </li>
                    <li class="dropdown {{ Request::is('aboutus')||Request::is('ourteam')||Request::is('businessdevelopement')? 'active' : '' }}">
                        <a href="{{URL::to('/')}}/aboutus" class="dropdown-toggle" data-toggle="dropdown">ABOUT US</a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="{{URL::to('/')}}/aboutus" class="dropdown-toggle" data-toggle="dropdown"> About Us </a>
                            </li>
                            <li>
                                <a href="{{URL::to('/')}}/ourteam" class="dropdown-toggle" data-toggle="dropdown"> Consulting Team </a>
                            </li>
                            <li>
                                <a href="{{URL::to('/')}}/businessdevelopement" class="dropdown-toggle" data-toggle="dropdown"> Business Developement Team </a>
                            </li>

                        </ul>
                    </li>
                    <!-- mega-menu start -->

                    <!-- mega-menu end -->
                    <!-- mega-menu start -->
                    <li class="{{ Request::is('events') ? 'active' : '' }}">
                        <a href="{{URL::to('/')}}/events" >Events</a>
                    </li>
                    <!-- mega-menu end -->
                    <li class="{{ Request::is('contact') ? 'active' : '' }}">
                        <a href="{{URL::to('/')}}/contact">Contact</a>
                    </li>
                    <li class="{{ Request::is('blog')||Request::is('blog/*') ? 'active' : '' }}">
                        <a href="{{URL::to('/')}}/blog">Blog</a>
                    </li>
                </ul>
            </div>

        </div>
    </nav>
    <!-- navbar end -->

</div>
<!-- main-navigation end -->

</div>
<!-- header-right end -->

</div>
</div>
</div>
</header>
<!-- header end -->

<!-- banner start -->
<!-- ================ -->
@yield('banner')
<!-- banner end -->

<!-- page-top start-->
<!-- ================ -->
@yield('content')
<!-- section end -->

<!-- footer start (Add "light" class to #footer in order to enable light footer) -->
<!-- ================ -->
<footer id="footer">

    <!-- .footer start -->
    <!-- ================ -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="footer-content">
                        <div class="row">
                            <div class="col-sm-6">
                                <h2><i class="fa fa-map-marker pr-10"></i>Address</h2>
                                <ul class="list-icons">
                                    <li>
                                        <strong>Calabar:</strong> No 1 Old Odukpani Road by Eburutu Barracks Gate Calabar, Cross Rivers Nigeria<br>
                                        <br><strong>Port-Harcourt:</strong> No 73 Ikwere Road Port-Harcourt, Rivers Nigeria
                                    </li>
                                </ul>
                            </div>
                            <div class="col-sm-6">
                                <h2><i class="fa fa-phone"></i> Phone</h2>
                                <ul class="list-icons">
                                    <li><i class="fa fa-phone pr-10"></i>+234.802.313.1282<br>+234.803.425.6748 <br>+234.803.471.0111</li>
                                    <li><i class="fa fa-fax pr-10"></i>  +234.803.425.6748 </li>
                                    <li><i class="fa fa-envelope-o pr-10"></i> info@serviceride.com</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="space-bottom hidden-lg hidden-xs"></div>
                <div class="col-sm-6 col-md-2">
                    <div class="footer-content">
                        <h2><i class="fa fa-link"></i> Links</h2>
                        <nav>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="{{URL::to('/')}}">Home</a></li>
                                <li><a href="{{URL::to('/')}}/aboutus">About</a></li>
                                <li><a href="{{URL::to('/')}}/blog">Blog</a></li>
                                <li><a href="{{URL::to('/')}}/contact">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-md-offset-1">
                    <div class="footer-content">
                        <h2><i class="fa fa-envelope"></i> Subscribe</h2>
                        <div class="gallery row">
                            <input type="text" placeholder="Your Email address..." class="form-control" name="subscribe" id="subscribefooter">
                            <span class="btn btn-default small" id="footersubscribe" >Subscribe</span>

                            <ul class="social-links circle">
                                <li class="facebook"><a target="_blank" href="http://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
                                <li class="twitter"><a target="_blank" href="http://www.twitter.com"><i class="fa fa-twitter"></i></a></li>
                                <li class="googleplus"><a target="_blank" href="http://plus.google.com"><i class="fa fa-google-plus"></i></a></li>
                                <li class="skype"><a target="_blank" href="http://www.skype.com"><i class="fa fa-skype"></i></a></li>
                                <li class="linkedin"><a target="_blank" href="http://www.linkedin.com"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="space-bottom hidden-lg hidden-xs"></div>
        </div>
    </div>
    <!-- .footer end -->

    <!-- .subfooter start -->
    <!-- ================ -->
    <div class="subfooter">
        <div class="container">
            <div class="row">
                <div class="col-md-8" style="text-align: right">
                    <p>Copyright © {{Date('Y')}} Serviceride by <a target="_blank" href="http://antrasoft.com">antrasoft</a>. All Rights Reserved</p>
                </div>
                <div class="col-md-4">
                    <nav class="navbar navbar-default" role="navigation">
                        <!-- Toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-2">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="collapse navbar-collapse" id="navbar-collapse-2">
                            <ul class="nav navbar-nav">
                                <li><a href="{{URL::to('/')}}">Home</a></li>
                                <li><a href="{{URL::to('/')}}/aboutus">About</a></li>
                                <li><a href="{{URL::to('/')}}/blog">Blog</a></li>
                                <li><a href="{{URL::to('/')}}/contact">Contact</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- .subfooter end -->
    <input type="hidden" id="tkn" value="{{ csrf_token() }}">
</footer>
<!-- footer end -->

</div>
<!-- page-wrapper end -->

<!-- JavaScript files placed at the end of the document so the pages load faster
================================================== -->
<!-- Jquery and Bootstap core js files -->
<script type="text/javascript" src="{{URL::to('/')}}/site/plugins/jquery.min.js"></script>
<script type="text/javascript" src="{{URL::to('/')}}/site/bootstrap/js/bootstrap.min.js"></script>

<!-- Modernizr javascript -->
<script type="text/javascript" src="{{URL::to('/')}}/site/plugins/modernizr.js"></script>

<!-- jQuery REVOLUTION Slider  -->
<script type="text/javascript" src="{{URL::to('/')}}/site/plugins/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="{{URL::to('/')}}/site/plugins/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

<!-- Isotope javascript -->
<script type="text/javascript" src="{{URL::to('/')}}/site/plugins/isotope/isotope.pkgd.min.js"></script>

<!-- Owl carousel javascript -->
<script type="text/javascript" src="{{URL::to('/')}}/site/plugins/owl-carousel/owl.carousel.js"></script>

<!-- Magnific Popup javascript -->
<script type="text/javascript" src="{{URL::to('/')}}/site/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>

<!-- Appear javascript -->
<script type="text/javascript" src="{{URL::to('/')}}/site/plugins/jquery.appear.js"></script>

<!-- Count To javascript -->
<script type="text/javascript" src="{{URL::to('/')}}/site/plugins/jquery.countTo.js"></script>


<!-- Parallax javascript -->
<script src="{{URL::to('/')}}/site/plugins/jquery.parallax-1.1.3.js"></script>

<!-- Contact form -->
<script src="{{URL::to('/')}}/site/plugins/jquery.validate.js"></script>

<!-- SmoothScroll javascript -->
<script type="text/javascript" src="{{URL::to('/')}}/site/plugins/jquery.browser.js"></script>
<script type="text/javascript" src="{{URL::to('/')}}/site/plugins/SmoothScroll.js"></script>
<script type="text/javascript" src="{{URL::to('/')}}/site/plugins/jquery.sharrre.js"></script>

<!-- Initialization of Plugins -->
<script type="text/javascript" src="{{URL::to('/')}}/site/js/template.js"></script>

<!-- Custom Scripts -->
<script type="text/javascript" src="{{URL::to('/')}}/site/js/custom.js"></script>

<script>
    $('#footersubscribe').click(function(){
            var em = $('#subscribefooter').val();
            var tkn = $('#tkn').val();
            if(em=="")
            {
                alert("please fill in the email address");
            }else{
                $.post('{{URL::to('/')}}/subcribe',{em:em,_token:tkn},function(e){
                    if(e==1)
                    {
                        sessionStorage.setItem('sessionKey', 'active');
                       alert("Thanks You, Your subscription was successful");
                    }
                    else{
                        alert(e);
                    }
                })
            }
    });
</script>
@yield('scripts')
<script  type="text/javascript" >var BizChatId="90247b7d"; var WidgetId="a5527fd9";</script> <script src="https://dashboard.bizchatbox.com/Content/js/BizChat.js" type="text/javascript"></script>
</body>
</html>
