<!DOCTYPE html>
<html lang="en">
<head>
    <title>Vintage Express</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/responsive.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/touchTouch.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/kwicks-slider.css" type="text/css" media="screen">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
    <script src="js/jquery.js"></script>
    <script src="js/superfish.js"></script>
    <script src="js/jquery.flexslider-min.js"></script>
    <script src="js/jquery.kwicks-1.5.1.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.cookie.js"></script>
    <script src="js/touchTouch.jquery.js"></script>
    <script>
        if ($(window).width() > 1024) {
            document.write("<" + "script src='js/jquery.preloader.js'></" + "script>");
        }
    </script>
    <script>
        jQuery(window).load(function () {
            $x = $(window).width();
            if ($x > 1024) {
                jQuery("#content .row").preloader();
            }
            jQuery('.magnifier').touchTouch();
            jQuery('.spinner').animate({
                'opacity': 0
            }, 1000, 'easeOutCubic', function () {
                jQuery(this).css('display', 'none')
            });
        });
    </script>
    <!--[if lt IE 8]>
    <div style='text-align:center'><a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://www.theie6countdown.com/img/upgrade.jpg"border="0"alt=""/></a></div>
    <![endif]-->
    <!--[if (gt IE 9)|!(IE)]><!-->
    <!--<![endif]-->
    <!--[if lt IE 9]>
    <script src="js/html5.js"></script>
    <link rel="stylesheet" href="css/docs.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400' rel='stylesheet' type='text/css'>
    <![endif]-->
</head>
<body>

<div class="spinner"></div>

<!-- header start -->
<header>
    <div class="container clearfix">
        <div class="row">
            <div class="span12">
                <div class="navbar navbar_">
                    <div class="container">
                        <h1 class="brand brand_"><a href="HomeLoggato.php"><img alt="" src="img/logo3.png"> </a></h1>
                        <a class="btn btn-navbar btn-navbar_" data-toggle="collapse" data-target=".nav-collapse_">Menu <span class="icon-bar"></span> </a>
                        <div class="nav-collapse nav-collapse_  collapse">
                            <ul class="nav sf-menu">
                                <li class="active"><a href="index.html">Home</a></li>
                                <li class="sub-menu"><a href="process.html">Auto</a>
                                    <ul>
                                        <li><a href="#">Fiat</a></li>
                                        <li><a href="#">Alfa Romeo</a></li>
                                        <li><a href="#">Peugeot</a></li>
                                    </ul>
                                </li>
                                <li><a href="Login.php">Login</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>




<div class="bg-content">
    <div class="container">
        <div class="row">
            <div class="span12">
                <!-- slider -->
                <div class="flexslider">
                    <ul class="slides">
                        <li> <img src="img/Car/Kangoo.jpg" alt=""> </li>
                        <li> <img src="img/Car/range.jpg" alt=""> </li>
                        <li> <img src="img/Car/Kangoo.jpg" alt=""> </li>
                        <li> <img src="img/Car/range.jpg" alt=""> </li>
                        <li> <img src="img/Car/Kangoo.jpg" alt=""> </li>
                    </ul>
                </div>
                <span id="responsiveFlag"></span>
                <div class="block-slogan">
                    <h2>Auto per tutti!</h2>
                    <div>
                        <p>Su Vintage Express puoi trovare una lista di auto dedite al trasporto per disabili. Mettiti in contatto con la più vicina concessionaria, grazie alle informazioni che troverai per ogni autoveicolo</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- content -->
    <div id="content" class="content-extra">
        <div class="ic"></div>
        <div class="row-1">
            <div class="container">
                <div class="row">
                    <article class="span12">
                        <h4>Le più gettonate</h4>
                    </article>
                    <div class="clear"></div>
                    <ul class="portfolio clearfix">
                        <li class="box"><a href="img/image-blank.png" class="magnifier" ><img alt="" src="img/work/1.jpg"></a></li>
                        <li class="box"><a href="img/image-blank.png" class="magnifier" ><img alt="" src="img/work/2.jpg"></a></li>
                        <li class="box"><a href="img/image-blank.png" class="magnifier" ><img alt="" src="img/work/3.jpg"></a></li>
                        <li class="box"><a href="img/image-blank.png" class="magnifier" ><img alt="" src="img/work/4.jpg"></a></li>
                        <li class="box"><a href="img/image-blank.png" class="magnifier" ><img alt="" src="img/work/5.jpg"></a></li>
                        <li class="box"><a href="img/image-blank.png" class="magnifier" ><img alt="" src="img/work/6.jpg"></a></li>
                        <li class="box"><a href="img/image-blank.png" class="magnifier" ><img alt="" src="img/work/7.jpg"></a></li>
                        <li class="box"><a href="img/image-blank.png" class="magnifier" ><img alt="" src="img/work/8.jpg"></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row-2">
            <div class="container">
                <h3>Completly Customizable and Responsive</h3>
                <h3>Easy to Use. Totally Free to Download. Made with love!</h3>
                <p>The complete template is created using the Bootstrap framework, which is highly customizable with lots of options.</p>
                <a href="#" class="btn btn-1">Download</a> </div>
        </div>
        <div class="row-1">
            <div class="container">
                <div class="row">
                    <article class="span12">
                        <h4>From blog</h4>
                    </article>
                    <ul class="thumbnails thumbnails-1">
                        <li class="span3">
                            <div class="thumbnail thumbnail-1">
                                <h3>Web Design</h3>
                                <img src="img/blog-featured-01.jpg" alt="">
                                <section> <a href="#">
                                        <h3>At vero eos et accusamus et iusto </h3>
                                    </a>
                                    <div class="meta">
                                        <time datetime="2012-11-09" class="date-1"><i class="icon-calendar"></i> 9.11.2012</time>
                                        <div class="name-author"><i class="icon-user"></i> <a href="#">Admin</a></div>
                                        <a href="#" class="comments"><i class="icon-comment"></i> 7 comments</a> </div>
                                    <div class="clear"></div>
                                    <p>Vivamus sollicitudin libero auctor arcu pulvinar commodo.</p>
                                    <a href="#" class="btn btn-1">Read More</a> </section>
                            </div>
                        </li>
                        <li class="span3">
                            <div class="thumbnail thumbnail-1">
                                <h3>Graphics</h3>
                                <img src="img/blog-featured-02.jpg" alt="">
                                <section> <a href="#">
                                        <h3>Deleniti atque corrupti quos</h3>
                                    </a>
                                    <div class="meta">
                                        <time datetime="2012-11-09" class="date-1"><i class="icon-calendar"></i> 9.11.2012</time>
                                        <div class="name-author"><i class="icon-user"></i> <a href="#">Admin</a></div>
                                        <a href="#" class="comments"><i class="icon-comment"></i> 4 comments</a> </div>
                                    <div class="clear"></div>
                                    <p>Vestibulum volutpat urna sed sapien vehicula varius.</p>
                                    <a href="#" class="btn btn-1">Read More</a> </section>
                            </div>
                        </li>
                        <li class="span3">
                            <div class="thumbnail thumbnail-1">
                                <h3>Social Media</h3>
                                <img src="img/blog-featured-03.jpg" alt="">
                                <section> <a href="#">
                                        <h3>Similique sunt in culpa qui officia</h3>
                                    </a>
                                    <div class="meta">
                                        <time datetime="2012-11-09" class="date-1"><i class="icon-calendar"></i> 9.11.2012</time>
                                        <div class="name-author"><i class="icon-user"></i> <a href="#">Admin</a></div>
                                        <a href="#" class="comments"><i class="icon-comment"></i> 9 comments</a> </div>
                                    <div class="clear"></div>
                                    <p>Pellentesque mi justo, laoreet non bibendum non, auctor imperdiet eros.</p>
                                    <a href="#" class="btn btn-1">Read More</a> </section>
                            </div>
                        </li>
                        <li class="span3">
                            <div class="thumbnail thumbnail-1">
                                <h3 class="title-1 extra">Photography</h3>
                                <img src="img/blog-featured-04.jpg" alt="">
                                <section> <a href="#">
                                        <h3>Similique sunt in culpa qui officia</h3>
                                    </a>
                                    <div class="meta">
                                        <time datetime="2012-11-09" class="date-1"><i class="icon-calendar"></i> 9.11.2012</time>
                                        <div class="name-author"><i class="icon-user"></i> <a href="#">Admin</a></div>
                                        <a href="#" class="comments"><i class="icon-comment"></i> 1 comment</a> </div>
                                    <div class="clear"></div>
                                    <p>Vestibulum volutpat urna sed sapien vehicula varius.</p>
                                    <a href="#" class="btn btn-1">Read More</a> </section>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <article class="span6">
                    <h3>Shortly about us</h3>
                    <div class="wrapper">
                        <figure class="img-indent"><img src="img/15.jpg " alt=""></figure>
                        <div class="inner-1 overflow extra">
                            <div class="txt-1">Mauris scelerisque odio quis leo viverra ac porttitor sem blandit. Sed tincidunt mattis varius. Nunc sodales ipsum nisl, eget lacinia nibh.</div>
                            Cras lacus tortor, tempus vitae porta nec, hendrerit id dolor. Nam volutpat gravida porta. Suspendisse turpis nibh, volutpat. </div>
                    </div>
                </article>
                <article class="span6">
                    <h3>Some quick links</h3>
                    <div class="wrapper">
                        <ul class="list list-pad">
                            <li><a href="#">Campaigns</a></li>
                            <li><a href="#">Portraits</a></li>
                            <li><a href="#">Fashion</a></li>
                            <li><a href="#">Fine Art</a></li>
                        </ul>
                        <ul class="list list-pad">
                            <li><a href="#">Campaigns</a></li>
                            <li><a href="#">Portraits</a></li>
                            <li><a href="#">Fashion</a></li>
                            <li><a href="#">Fine Art</a></li>
                        </ul>
                        <ul class="list list-pad">
                            <li><a href="#">Campaigns</a></li>
                            <li><a href="#">Portraits</a></li>
                            <li><a href="#">Fashion</a></li>
                            <li><a href="#">Fine Art</a></li>
                        </ul>
                        <ul class="list">
                            <li><a href="#">Advertising</a></li>
                            <li><a href="#">Lifestyle</a></li>
                            <li><a href="#">Love story</a></li>
                            <li><a href="#">Landscapes</a></li>
                        </ul>
                    </div>
                </article>
            </div>
        </div>
    </div>
</div>


<!-- footer -->
<footer>
    <div class="container clearfix">
        <ul class="list-social pull-right">
            <li><a class="icon-1" href="#"></a></li>
            <li><a class="icon-2" href="#"></a></li>
            <li><a class="icon-3" href="#"></a></li>
            <li><a class="icon-4" href="#"></a></li>
        </ul>
        <div class="privacy pull-left">&copy; 2013 | <a href="http://www.dzyngiri.com">Dzyngiri</a> | Demo Illustrations by <a href="http://justinmezzell.com">Justin Mezzell</a></div>
    </div>
</footer>
<script src="js/bootstrap.js"></script>
</body>
</html>
