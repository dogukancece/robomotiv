<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"><!--<![endif]-->
<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>Arch - HTML Construction, Building And Business Template</title>

    <meta name="author" content="themesflat.com">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Bootstrap  -->
    <link rel="stylesheet" type="text/css" href="{{asset('stylesheets/bootstrap.css')}}" >

    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="{{asset('stylesheets/style.css')}}">

    <!-- Responsive -->
    <link rel="stylesheet" type="text/css" href="{{asset('stylesheets/responsive.css')}}">

    <!-- Colors -->
    <link rel="stylesheet" type="text/css" href="{{asset('stylesheets/colors/color1.css')}}" id="colors">

    <!-- Animation Style -->
    <link rel="stylesheet" type="text/css" href="{{asset('stylesheets/animate.css')}}">

    <!-- Favicon and touch icons  -->
    <link href="{{asset('icon/apple-touch-icon-48-precomposed.png')}}" rel="apple-touch-icon-precomposed" sizes="48x48">
    <link href="{{asset('icon/apple-touch-icon-32-precomposed.png')}}" rel="apple-touch-icon-precomposed">
    <link href="{{asset('icon/favicon.png')}}" rel="shortcut icon">

    <!--[if lt IE 9]>
    <script src="{{asset('javascript/html5shiv.js')}}"></script>
    <script src="{{asset('javascript/respond.min.js')}}"></script>
    <![endif]-->
</head>
<body class="header_sticky">
<!-- Preloader -->
<section class="loading-overlay">
    <div class="Loading-Page">
        <h2 class="loader">Loading</h2>
    </div>
</section>
<!-- Boxed -->
<div class="boxed">

    <div class="top">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <ul class="flat-information">
                        <li class="phone"><a href="+84905010025">Call Us: +84 905 01 00 25</a></li>
                        <li class="email"><a href="mailto:Themesflat@gmail.com">Email Us: themesflat@gmail.com</a></li>

                    </ul>
                </div><!-- /.col-md-6 -->
                <div class="col-md-6">
                    <div class="social-links">
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-google-plus"></i></a>
                        <a href="#"><i class="fa fa-pinterest"></i></a>
                        <a href="#"><i class="fa fa-behance"></i></a>
                    </div>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.top -->
    <header id="header" class="header clearfix">
        <div class="container">
            <div class="row">
                <div class="header-wrap clearfix">
                    <div class="col-md-4">
                        <div id="logo" class="logo">
                            <a href="{{route("index")}}" rel="home">
                                <img src="images/logo.png" alt="image">
                            </a>
                        </div><!-- /.logo -->
                        <div class="btn-menu">
                            <span></span>
                        </div><!-- //mobile menu button -->
                    </div>
                    <div class="col-md-8 pos-static">
                        <div class="nav-wrap has-megamenu">
                            <nav id="mainnav" class="mainnav">
                                <ul class="menu">
                                    <li class=home">
                                        <a href="{{route("index")}}">Home</a>
                                    </li>
                                    <li><a href="{{route("abouts")}}">About</a></li>
                                    <li><a href="services.html">Services</a></li>
                                    <li><a href="work.html">Work</a>
                                        <ul class="submenu">
                                            <li><a href="work-single.html">Work Single </a>
                                            </li>
                                        </ul><!-- /.submenu -->
                                    </li>
                                    <li><a href="contact.html">Contact Us</a></li>
                                    <li><a href="blog.html">Journal</a>
                                        <ul class="submenu right-sub-menu">
                                            <li><a href="blog.html">Blog </a>
                                            </li>
                                            <li><a href="blog-single.html">Blog Single</a>
                                            </li>
                                        </ul><!-- /.submenu -->
                                    </li>
                                    <li class="has-mega-menu">
                                        <a class="has-mega" href="#mega">Element</a>
                                        <div class="submenu mega-menu">
                                            <div class="row">
                                                <div class="container">
                                                    <div class="col-md-4">
                                                        <ul class="mega-menu-sub">
                                                            <li><a href="iconbox.html">
                                                                    <i class="fa fa-flag"></i>
                                                                    Icon Box
                                                                </a></li>
                                                            <li><a href="imagebox.html"><i class="fa fa-image"></i>Image Box</a></li>
                                                            <li><a href="counter.html"><i class="fa fa-fire"></i> Counter</a></li>
                                                            <li><a href="teammember.html"><i class="fa fa-user"></i> Team Member</a></li>
                                                            <li><a href="testimonial.html"><i class="fa fa-comments-o"></i>Testimonial</a></li>

                                                        </ul>
                                                    </div><!-- /.col-md-4 -->

                                                    <div class="col-md-4">
                                                        <ul class="mega-menu-sub">
                                                            <li><a href="tab.html">
                                                                    <i class="fa fa-plus-square-o"></i>
                                                                    Tabs
                                                                </a></li>
                                                            <li><a href="accordion.html"><i class="fa fa-level-down"></i>Accordion</a></li>
                                                            <li><a href="progressbar.html"><i class="fa fa-tasks"></i>Progress Bar </a></li>
                                                            <li><a href="imagegallery.html"><i class="fa fa-image"></i> Image Gallery </a></li>
                                                            <li><a href="pricingtable.html"><i class="fa fa-usd"></i>Pricing Tables</a></li>
                                                        </ul>
                                                    </div><!-- /.col-md-4 -->
                                                    <div class="col-md-4">
                                                        <ul class="mega-menu-sub border-none">
                                                            <li><a href="latestpost.html"><i class="fa fa-file-text-o"></i>Latest Posts</a></li>
                                                            <li><a href="promobox.html"><i class="fa fa-th-large"></i>Promobox</a></li>
                                                            <li><a href="button.html"><i class="fa fa-external-link"></i>Button</a></li>
                                                            <li><a href="list.html"><i class="fa fa-list"></i>List</a></li>
                                                        </ul>
                                                    </div><!-- /.col-md-4 -->
                                                </div><!-- /.container -->
                                            </div><!-- /.row -->
                                        </div><!-- /.submenu -->
                                    </li><!-- /.flat-mega-menu -->
                                </ul><!-- /.menu -->
                            </nav><!-- /.mainnav -->
                        </div><!-- /.nav-wrap -->
                        <ul class="menu menu-extra">
                            <li class="off-canvas-toggle">
                                <a href="#"><i class="fa fa-bars"></i></a>
                            </li>
                        </ul>
                    </div>
                </div><!-- /.header-inner -->
            </div><!-- /.row -->
        </div>
    </header><!-- /.header -->
    @yield("content")
    <!-- Footer -->
    <footer class="footer">
        <div class="footer-widgets">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="widget widget_text widget_info">
                            <h4 class="widget-title">about us</h4>
                            <div class="textwidget">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi elementum nibh quis massa tristique pulvinar.</p>
                                <ul class="footer-info">
                                    <li class="address">95 Amphitheatre<br>London WC1N 3BG</li>
                                    <li class="phone">+44 900 468 5555</li>
                                    <li class="email">contact@arch.com</li>
                                </ul>
                            </div><!-- /.textwidget -->
                        </div><!-- /.widget -->
                    </div><!-- /.col-md-3 -->

                    <div class="col-md-3">
                        <div class="widget widget-recent-post">
                            <h5 class="widget-title">Recent Posts </h5>
                            <ul>
                                <li class="clearfix">
                                    <div class="thumb images-hover">
                                        <div class="overlay"></div>
                                        <a href="#"><img src="images/blog/f1.jpg" alt="image"></a>
                                    </div>
                                    <div class="content">
                                        <h3 class="title"><a href="#">Within the construction </a></h3>
                                        <div class="meta">By Admin / 02 March 2016</div>
                                        <div class="sumary">Lorem ipsum dolor sit amet, consectetur</div>
                                    </div>
                                </li>
                                <li class="clearfix">
                                    <div class="thumb images-hover">
                                        <div class="overlay"></div>
                                        <a href="#"><img src="images/blog/f2.jpg" alt="image"></a>
                                    </div>
                                    <div class="content">
                                        <h3 class="title"><a href="#">Prepare a room painting</a></h3>
                                        <div class="meta">By Admin / 02 March 2016</div>
                                        <div class="sumary">Lorem ipsum dolor sit amet, consectetur</div>
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </div><!-- /.col-md-3 -->

                    <div class="col-md-3">
                        <div class="widget widget_tweets">
                            <h2 class="widget-title">Twitter</h2>
                            <ul>
                                <li><a class="author" href="#">@Arch</a> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis est sem.</li>
                                <li><a class="author" href="#">@Arch</a> Donec sed congue elit. Suspendisse sed tincidunt libero <a href="#">http://bit.ly/58788998</a></li>

                            </ul>
                        </div>
                    </div><!-- /.col-md-3 -->

                    <div class="col-md-3">
                        <div class="widget widget_instagram">
                            <h2 class="widget-title">Instagram</h2>
                            <ul class="clearfix">
                                <li>
                                    <div class="thumb images-hover images-hover">
                                        <div class="overlay"></div>
                                        <a href="#">
                                            <span><img src="images/flickr/4.jpg" alt="image"></span>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="thumb images-hover">
                                        <div class="overlay"></div>
                                        <a href="#">
                                            <span><img src="images/flickr/5.jpg" alt="image"></span>
                                        </a>
                                    </div>
                                </li>
                                <li class="last">
                                    <div class="thumb images-hover">
                                        <div class="overlay"></div>
                                        <a href="#">
                                            <span><img src="images/flickr/6.jpg" alt="image"></span>
                                        </a>
                                    </div>
                                </li>
                                <li class="last">
                                    <div class="thumb images-hover">
                                        <div class="overlay"></div>
                                        <a href="#">
                                            <span><img src="images/flickr/7.jpg" alt="image"></span>
                                        </a>
                                    </div>
                                </li>
                                <li class="last">
                                    <div class="thumb images-hover">
                                        <div class="overlay"></div>
                                        <a href="#">
                                            <span><img src="images/flickr/8.jpg" alt="image"></span>
                                        </a>
                                    </div>
                                </li>
                                <li class="last">
                                    <div class="thumb images-hover">
                                        <div class="overlay"></div>
                                        <a href="#">
                                            <span><img src="images/flickr/9.jpg" alt="image"></span>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div><!-- /.col-md-3 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.footer-widgets -->

    </footer>
    <!-- Bottom -->
    <div class="bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="copyright">
                        <p>© Copyright <a href="#">Themesflat</a> 2016. All Rights Reserved.
                        </p>
                    </div>
                </div><!-- /.col-md-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div>

    <!-- Go Top -->
    <a class="go-top">
        <i class="fa fa-angle-up"></i>
    </a>

    <div id="site-off-canvas">
        <span class="close"></span>
        <div class="wrapper">

            <div class="widget widget_search">
                <form role="search" method="get" class="search-form" action="#">
                    <label>
                        <input type="search" class="search-field" placeholder="Search …" value="" name="s">
                    </label>
                    <input type="submit" class="search-submit" value="Search">
                </form>
            </div><!-- /.widget-search -->


            <div id="nav_menu-2" class="widget widget-categories">
                <h4 class="widget-title">Extra Pages</h4>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="blog.html">Blog</a></li>
                    <li><a href="blogsingle.html">Blog Single</a></li>
                    <li><a href="#">Left Sidebar</a></li>
                    <li><a href="#">Right Sidebar</a></li>
                    <li><a href="#">Full Width</a></li>
                </ul>
            </div>
        </div>
    </div>

</div>

<!-- Javascript -->
<script type="text/javascript" src="{{asset('javascript/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('javascript/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('javascript/jquery.easing.js')}}"></script>
<script type="text/javascript" src="{{asset('javascript/imagesloaded.min.js')}}"></script>
<script type="text/javascript" src="{{asset('javascript/jquery.isotope.min.js')}}"></script>
<script type="text/javascript" src="{{asset('javascript/jquery-waypoints.js')}}"></script>
<script type="text/javascript" src="{{asset('javascript/jquery.magnific-popup.min.js')}}"></script>
<script type="text/javascript" src="{{asset('javascript/jquery.cookie.js')}}"></script>
<script type="text/javascript" src="{{asset('javascript/jquery.fitvids.js')}}"></script>
<script type="text/javascript" src="{{asset('javascript/parallax.js')}}"></script>
<script type="text/javascript" src="{{asset('javascript/smoothscroll.js')}}"></script>
<script type="text/javascript" src="{{asset('javascript/jquery.flexslider-min.js')}}"></script>
<script type="text/javascript" src="{{asset('javascript/owl.carousel.js')}}"></script>
<script type="text/javascript" src="{{asset('javascript/jquery-validate.js')}}"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script type="text/javascript" src="{{asset('javascript/gmap3.min.js')}}"></script>
<script type="text/javascript" src="{{asset('javascript/main.js')}}"></script>

<!-- Revolution Slider -->
<script type="text/javascript" src="{{asset('javascript/jquery.themepunch.tools.min.js')}}"></script>
<script type="text/javascript" src="{{asset('javascript/jquery.themepunch.revolution.min.js')}}"></script>
<script type="text/javascript" src="{{asset('javascript/slider.js')}}"></script>

</body>
</html>
