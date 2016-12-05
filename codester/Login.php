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
                        <h1 class="brand brand_"><a href="Home.php"><img alt="" src="img/logo2.png"> </a></h1>
                        <a class="btn btn-navbar btn-navbar_" data-toggle="collapse" data-target=".nav-collapse_">Menu <span class="icon-bar"></span> </a>
                        <div class="nav-collapse nav-collapse_  collapse">
                            <ul class="nav sf-menu">
                                <li class="active"><a href="Home.php">Home</a></li>
                                <li class="sub-menu"><a href="process.html">Auto</a>
                                    <ul>
                                        <li><a href="#">Fiat</a></li>
                                        <li><a href="#">Alfa Romeo</a></li>
                                        <li><a href="#">Peugeot</a></li>
                                    </ul>
                                </li>                                <li><a href="">Login</a></li>
                                <li><a href="">Registrati</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="bg-content">

    <div id="content" >
        <div class="ic" ></div>
        <div class="container">
            <div class="row">
                <article class="span6">
                    <h3>Login</h3>
                    <div class="inner-1">
                        <form id="contact-form" action="#">
                            <div class="success"> Your message has been sent succesfuly!<strong> We will be in touch soon.</strong> </div>
                            <fieldset>
                                <div>
                                    <label class="name">
                                        <input type="text" placeholder="Email">
                                        <br>
                                        <span class="error">*This is not a valid name.</span> <span class="empty">*This field is required.</span> </label>
                                </div>
                                <div>
                                    <label class="phone">
                                        <input type="tel" placeholder="Password" ">
                                        <br>
                                        <span class="error">*This is not a valid phone number.</span> <span class="empty">*This field is required.</span> </label>
                                </div>
                                <div class="buttons-wrapper"><a class="btn btn-1" data-type="submit">Login</a><a class="btn btn-1" data-type="reset">Password dimenticata?</a> </div>
                            </fieldset>
                        </form>
                    </div>
                </article>
                <article class="span6">
                    <h3>Registrati</h3>
                    <div class="inner-1">
                        <form id="contact-form" action="#">
                            <div class="success"> Your message has been sent succesfuly!<strong> We will be in touch soon.</strong> </div>
                            <fieldset>
                                <div>
                                    <label class="name">
                                        <input type="text" placeholder="Nome">
                                        <br>
                                        <span class="error">*This is not a valid name.</span> <span class="empty">*This field is required.</span> </label>
                                </div>
                                <div>
                                    <label class="phone">
                                        <input type="tel" placeholder="Email">
                                        <br>
                                        <span class="error">*This is not a valid phone number.</span> <span class="empty">*This field is required.</span> </label>
                                </div>
                                <div>
                                    <label class="email">
                                        <input type="email" placeholder="Password">
                                        <br>
                                        <span class="error">*This is not a valid email address.</span> <span class="empty">*This field is required.</span> </label>
                                </div>
                                <div class="buttons-wrapper"> <a class="btn btn-1" data-type="reset">Cancella</a> <a class="btn btn-1" data-type="submit">Registrati</a></div>
                            </fieldset>
                        </form>
                    </div>
                </article>

            </div>
            <div class="row">
                <article class="span12">
                    <h4>Services</h4>
                </article>
                <div class="clear"></div>
                <ul class="thumbnails thumbnails-1 list-services">
                    <li class="span4">
                        <div class="thumbnail thumbnail-1"> <img src="img/service-1.jpg" alt="">
                            <section> <a href="#" class="link-1">At vero eos et accusamus et iusto </a>
                                <p>Deleniti atque corrupti quos dolores molestias excepturi sint occaecati cupiditate nonprovident similique sunt in culpa.</p>
                            </section>
                        </div>
                    </li>
                    <li class="span4">
                        <div class="thumbnail thumbnail-1"> <img src="img/service-2.jpg" alt="">
                            <section> <a href="#" class="link-1">At vero eos et accusamus et iusto </a>
                                <p>Deleniti atque corrupti quos dolores molestias excepturi sint occaecati cupiditate nonprovident similique sunt in culpa.</p>
                            </section>
                        </div>
                    </li>
                    <li class="span4">
                        <div class="thumbnail thumbnail-1"> <img src="img/service-3.jpg" alt="">
                            <section> <a href="#" class="link-1">At vero eos et accusamus et iusto </a>
                                <p>Deleniti atque corrupti quos dolores molestias excepturi sint occaecati cupiditate nonprovident similique sunt in culpa.</p>
                            </section>
                        </div>
                    </li>
                </ul>
            </div>

        </div>
    </div>
</div>


</body>

</html>