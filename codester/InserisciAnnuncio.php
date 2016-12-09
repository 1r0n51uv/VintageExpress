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
                        <h1 class="brand brand_"><a href="HomeLoggato.php"><img alt="" src="img/logo2.png"> </a></h1>
                        <a class="btn btn-navbar btn-navbar_" data-toggle="collapse" data-target=".nav-collapse_">Menu <span class="icon-bar"></span> </a>
                        <div class="nav-collapse nav-collapse_  collapse">
                            <ul class="nav sf-menu">
                                <li class="active"><a href="HomeLoggato.php">Home</a></li>
                                <li><a href="Auto.php">Auto</a></li>
                                <li class="sub-menu"><a href="#">Profilo</a>
                                    <ul>
                                        <li><a href="#">Visualizza</a></li>
                                        <li><a href="#">Modifica</a></li>
                                        <li><a href="#">Logout</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="bg-content">

        <div id="content" >
            <div class="ic" ></div>
            <div class="container">
                <div class="row">
                    <article class="span6">
                        <h3>ANNUNCIO</h3>
                        <div class="inner-1">
                            <form id="contact-form" action="LoginControl.php" method="post">
                                <div class="success"> Il login è avvenuto con successo!<strong> A presto.</strong> </div>
                                <fieldset>
                                    <div>
                                        <label class="Marca">
                                            <input type="text" placeholder="Marca" name="Marca">
                                            <br>
                                            <span class="error">*Questo campo è sbagliato.</span> <span class="empty">*Questo campo è obbligatorio.</span> </label>
                                    </div>
                                    <div>
                                        <label class="Modello">
                                            <input type="text" placeholder="Modello" name="Modello">
                                            <br>
                                            <span class="error">*Questo campo è sbagliato.</span> <span class="empty">*Questo campo è obbligatorio.</span> </label>
                                    </div>
                                    <div>
                                        <label class="Prezzo">
                                            <input type="text" placeholder="Prezzo" name="Prezzo">
                                            <br>
                                            <span class="error">*Questo campo è sbagliato.</span> <span class="empty">*Questo campo è obbligatorio.</span> </label>
                                    </div>
                                    <div>
                                        <label class="Posizione">
                                            <input type="text" placeholder="Posizione" name="Posizione">
                                            <br>
                                            <span class="error">*Questo campo è sbagliato.</span> <span class="empty">*Questo campo è obbligatorio.</span> </label>
                                    </div>
                                    <div>
                                        <label class="Image">
                                            <input type="file" placeholder="Image" name="Image">
                                            <br>
                                            <span class="error">*Questo campo è sbagliato.</span> <span class="empty">*Questo campo è obbligatorio.</span> </label>
                                    </div>
                                    <div>
                                        <label class="Description">
                                            <textarea name="Description" placeholder="Descrizione. . ." rows="5" cols="50"></textarea>
                                            <br>
                                            <span class="error">*Questo campo è sbagliato.</span> <span class="empty">*Questo campo è obbligatorio.</span> </label>
                                    </div>
                                    <div class="buttons-wrapper"><button class="btn btn-1" type="submit">Inserisci</button>
                                </fieldset>
                            </form>
                        </div>
                    </article>
                    <article class="span6">
                        <div class="thumbnail thumbnail-1"> <img src="img/Car/Mercedes/ClasseV.jpg" alt="">
                            <section> <a href="#" class="link-1">Mercedes Classe V</a>
                                <p>Viene e prova nei nostri showroom la nuova Fiat Classe V 2016.</p>
                            </section>
                        </div>
                        <div class="thumbnail thumbnail-1"> <img src="img/Car/Mercedes/Citan.jpg" alt="">
                            <section> <a href="#" class="link-1">Mercedes Citan</a>
                                <p>Viene e prova nei nostri showroom la nuova Mercedes Citan 2016.</p>
                            </section>
                        </div>
                    </article>


                </div>
                <div class="row">
                    <article class="span12">
                        <h4>LE NOSTRE AUTO. . .</h4>
                    </article>
                    <div class="clear"></div>
                    <ul class="thumbnails thumbnails-1 list-services">
                        <li class="span4">
                            <div class="thumbnail thumbnail-1"> <img src="img/Car/Fiat/Ducato.jpg" alt="">
                                <section> <a href="#" class="link-1">Fiat Ducato</a>
                                    <p>Viene e prova nei nostri showroom la nuova Fiat Ducato 2016.</p>
                                </section>
                            </div>
                        </li>
                        <li class="span4">
                            <div class="thumbnail thumbnail-1"> <img src="img/Car/Ford/Tourneo.jpg" alt="">
                                <section> <a href="#" class="link-1">Ford Tourneo</a>
                                    <p>Viene e prova nei nostri showroom la nuova Ford Tourneo 2016.</p>
                                </section>
                            </div>
                        </li>
                        <li class="span4">
                            <div class="thumbnail thumbnail-1"> <img src="img/Car/Volkswagen/Wcrafter.jpg" alt="">
                                <section> <a href="#" class="link-1">Volkswagen Crafter</a>
                                    <p>Viene e prova nei nostri showroom la nuova Renault Crafter 2016.</p>
                                </section>
                            </div>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</header>
</body>
</html>




