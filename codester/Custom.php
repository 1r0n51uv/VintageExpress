<?php
include 'Queries.php';


$code = $_GET['code'];

$riga = null;
$riga2 = null;
$db = new Connector();
$sql = "SELECT * FROM Annuncio Where Codice = $code";
$result = mysqli_query($db->getConnector(), $sql);
$num_righe = mysqli_num_rows($result);
for ($i = 0; $i < $num_righe; $i++) {
    $riga = mysqli_fetch_row($result);
}

$sql2 = "SELECT * FROM Utente Where Id = $riga[8]";
$result2 = mysqli_query($db->getConnector(), $sql2);
$num_righe2 = mysqli_num_rows($result2);
for ($i = 0; $i < $num_righe2; $i++) {
    $riga2 = mysqli_fetch_row($result2);
}

session_start();
if (isset($_SESSION['Username'])) {
    $user = $_SESSION['Username'];


    ?>

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
        <div style='text-align:center'><a
                href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img
                src="http://www.theie6countdown.com/img/upgrade.jpg" border="0" alt=""/></a></div>
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
                        <h1 class="brand brand_"><a href="HomeReal.php"><img alt="" src="img/logo2.png"> </a></h1>
                        <a class="btn btn-navbar btn-navbar_" data-toggle="collapse" data-target=".nav-collapse_">Menu <span class="icon-bar"></span> </a>
                        <div class="nav-collapse nav-collapse_  collapse">
                            <ul class="nav sf-menu">
                                <li class=""><a href="HomeReal.php">Home</a></li>
                                <li class="sub-menu"><a href="#">Auto</a>
                                    <ul>
                                        <li><a href="Auto.php">Visualizza</a></li>
                                        <li><a href="#">Inserisci</a></li>
                                    </ul>
                                </li>
                                <li class="sub-menu active"><a href="#"><?php echo $user?></a>
                                    <ul>
                                        <li><a href="LogoutControl.php">Logout</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>


<div class="bg-content">
    <!--  content  -->
    <div id="content">
        <div class="ic"></div>
        <div class="container">
            <div class="row">
                <article class="span8">
                    <div class="inner-1">

                        <h3><?php echo $riga[1] ?> <br>
                            <?php echo $riga[2] ?>          </h3>
                        <div class="name-author"><i class="icon-user icon-white"></i> <a><?php echo $riga2[2] ?></a>
                        </div>
                        <img alt="" src="<?php echo $riga[5] ?>">
                        <p>Grazie al kit di ribassamento del pianale, progettato e realizzato da Focaccia Group, Nuovo
                            Fiat Doblò Maxi F-Style One è ideale per famiglie, associazioni e taxi che hanno necessità
                            di trasportare una persona con disabilità in carrozzina e si contraddistingue per la
                            sicurezza, il confort e il design. </p>

                    </div>
                </article>
                <article class="span4">
                    <h3 class="extra"></h3>
                    <form id="search" action="#" method="GET" accept-charset="utf-8">
                        <div class="clearfix">
                    </form>
                    <h3>Informazioni</h3>
                    <ul class="list extra extra1">
                        <li>Marca:<h4><?php echo $riga[1] ?></h4></li>
                        <li>Modello:<h4><?php echo $riga[2] ?></h4></li>
                        <li>Prezzo:<h4><?php echo $riga[3] ?>€</h4></li>
                        <li>Posizione:<h4><?php echo $riga[4] ?></h4></li>

                    </ul>

                </article>
            </div>
        </div>
    </div>
</div>
</body>
    </html>

<?php

} else {

        ?>



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
        <div style='text-align:center'><a
                href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img
                src="http://www.theie6countdown.com/img/upgrade.jpg" border="0" alt=""/></a></div>
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
                            <h1 class="brand brand_"><a href="HomeReal.php"><img alt="" src="img/logo3.png"> </a></h1>
                            <a class="btn btn-navbar btn-navbar_" data-toggle="collapse" data-target=".nav-collapse_">Menu <span class="icon-bar"></span> </a>
                            <div class="nav-collapse nav-collapse_  collapse">
                                <ul class="nav sf-menu">
                                    <li class=""><a href="HomeReal.php">Home</a></li>
                                    <li class="sub-menu"><a href="#">Auto</a>
                                        <ul>
                                            <li><a href="Auto.php">Visualizza</a></li>
                                            <li><a href="#">Inserisci</a></li>
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
        <!--  content  -->
        <div id="content">
            <div class="ic"></div>
            <div class="container">
                <div class="row">
                    <article class="span8">
                        <div class="inner-1">

                            <h3><?php echo $riga[1] ?> <br>
                                <?php echo $riga[2] ?>          </h3>
                            <div class="name-author"><i class="icon-user icon-white"></i> <a><?php echo $riga2[2] ?></a>
                            </div>
                            <img alt="" src="<?php echo $riga[5] ?>">
                            <p>Grazie al kit di ribassamento del pianale, progettato e realizzato da Focaccia Group, Nuovo
                                Fiat Doblò Maxi F-Style One è ideale per famiglie, associazioni e taxi che hanno necessità
                                di trasportare una persona con disabilità in carrozzina e si contraddistingue per la
                                sicurezza, il confort e il design. </p>

                        </div>
                    </article>
                    <article class="span4">
                        <h3 class="extra"></h3>
                        <form id="search" action="#" method="GET" accept-charset="utf-8">
                            <div class="clearfix">
                        </form>
                        <h3>Informazioni</h3>
                        <ul class="list extra extra1">
                            <li>Marca:<h4><?php echo $riga[1] ?></h4></li>
                            <li>Modello:<h4><?php echo $riga[2] ?></h4></li>
                            <li>Prezzo:<h4><?php echo $riga[3] ?>€</h4></li>
                            <li>Posizione:<h4><?php echo $riga[4] ?></h4></li>

                        </ul>

                    </article>
                </div>
            </div>
        </div>
    </div>
    </body>
    </html>





        <?php
    }
    ?>
