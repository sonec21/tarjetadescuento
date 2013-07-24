<!doctype html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="nl"><![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8" lang="nl"><![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9" lang="nl"><![endif]-->
<!--[if IE]><html class="no-js ie" lang="nl"><![endif]-->
<!--[if !IE]><!--><html class="no-js" lang="nl"><!--<![endif]-->

    <head>
        <meta charset="utf-8">
        <title>tarjeta descuento</title>
        <meta name="description" content="Page description here">
        <meta name="author" content="BigBase - D. Tiems">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Ubuntu">
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=McLaren">
        <link rel="stylesheet" href="css/style.css">
         <link rel="stylesheet" href="css/animated.css">
        <link rel="stylesheet" href="css/nivo-slider.css">
        <link rel="stylesheet" href="nivo-themes/bar/bar.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="nivo-themes/light/light.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="bootstrap/css/bootstrap-responsive.min.css">
        <script src="js/config.js"></script>
        <script src="js/modernizr-2.6.2.min.js"></script>
        <script src="js/jquery-1.8.1.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="js/jquery.nivo.slider.pack.js"></script>
        <script src="js/respond.min.js"></script>
        <script src="js/script.js"></script>
        <script>
              $(document).ready(function () {
                    $("#hand_card").tooltip({
                      'selector': '',
                      'placement': 'left'
                    });

                     $('#hand_card').hover(function(){
                        animationHover(this,"shake");
                     });
                      $('.pulsehover').hover(function(){
                        animationHover(this,"pulse");
                     });
                  });

        </script>
        <script type="text/javascript" charset="utf-8" async defer>
                function animationHover(element, animation){
                    element = $(element);
                    element.hover(
                        function() {
                            element.addClass('animated ' + animation);
                        },
                        function(){
                            //wait for animation to finish before removing classes
                            window.setTimeout( function(){
                                element.removeClass('animated ' + animation);
                            }, 2000);
                        });
                }

                function animationClick(element, animation){
                    element = $(element);
                    element.click(
                        function() {
                            element.addClass('animated ' + animation);
                            //wait for animation to finish before removing classes
                            window.setTimeout( function(){
                                element.removeClass('animated ' + animation);
                            }, 2000);

                        });
                }
        </script>
    </head>

    <body>

        <!-- Facebook div for like button -->
        <div id="fb-root"></div>

        <!-- Div for shade line -->
        <div class="header-shadow"></div>

        <!-- Use class "container-fluid" on the following div for making complete website fluid -->
        <div class="container-fluid">

            <div class="row-fluid print-hide">
                <div class="span3">
                    <img  id="logo" class="logo pulsehover" src="img/logo.png" alt="Logo">
                </div>
                <div class="span4">
                    <div class="row-fluid print-hide">
                        <div class="span12">
                            <div class="navbar header-search-nav">
                                       <!--span class="label label-info">Busca y encuentra</span-->
                            </div>
                        </div>
                    </div>
                    <div class="row-fluid print-hide" style="margin-top:35px">
                        <div class="span12">
                            <form class="form-search header-search">
                                <div class="input-append">
                                    <input class="input-large search-query" type="text" placeholder="producto o tema">
                                    <button class="btn btn-danger pulsehover" type="submit">Buscar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <br>
                </div>
                <div class="span3" style="text-align:right">
                    <a  href="#" title="Adquiere tu tarjeta descuento hoy!"  class="">
                        <img  id="hand_card" class="hand_card" src="img/logo2.png" alt="hand_card">
                    </a>
                </div>

                <div class="span2">
                       <div class="social-icons pull-right">
                            <a href="#"><img src="img/icon-facebook.png" alt="facebook"></a>
                            <a href="#"><img src="img/icon-twitter.png" alt="twitter"></a>
                            <a href="#"><img src="img/icon-linkedin.png" alt="linkedin"></a>
                            <a  href="#">
                                  <span class="label label-info">Mexicali</span>
                            </a>
                        </div>
                </div>
            </div>

            <div class="row-fluid print-hide">
                <div class="span12">
                    <div class="navbar main-nav">
                        <div class="navbar-inner">
                            <div class="container">
                                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">menu</a>
                                <div class="nav-collapse">
                                    <ul class="nav">
                                        <li class="active"><a href="index.html"><i class="icon-home"></i></a></li>
                                        <li class="divider-vertical"></li>
                                        <li class="dropdown">
                                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Descuentos por Categoria
                                                <span class="caret"></span></a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="column1.html">Comida</a></li>
                                                    <li><a href="column2.html">Calzado</a></li>
                                                    <li><a href="column3.html">Vacaciones</a></li>
                                                </ul>
                                        </li>
                                        <li><a href="products.html">Que hay para hoy!</a></li>
                                        <li><a href="detail.html">Descuentos de la Semana</a></li>
                                        <li><a href="contact.html">Contactanos</a></li>
                                        <li><a href="order.html">Yo quiero mi tarjeta!</a></li>

                                    </ul>
                                    <ul class="nav pull-right">
                                        <li class="divider-vertical"></li>
                                        <li class="dropdown">
                                            <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-question-sign"></i></a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <div class="dropdown-content dropdown-content-wide">
                                                        <form class="form-search">
                                                            <div class="input-append">
                                                                <input type="text" class="search-query" placeholder="Type your question...">
                                                                <button class="btn">ok</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-envelope"></i></a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <div class="dropdown-content">
                                                        <address>
                                                            <strong>CompanyName</strong><br>
                                                            Address 123<br>
                                                            Zipcode, State and City
                                                        </address>
                                                    </div>
                                                </li>
                                                <li class="divider"></li>
                                                <li>
                                                    <div class="dropdown-content">
                                                        <strong>Phone</strong>: 012-345 67 89<br>
                                                    </div>
                                                </li>
                                                <li><a href="#"><strong>E-mail</strong>: info@example.com</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-shopping-cart"></i></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="#"><span class="pull-left"><small>5x</small> Product A</span> &nbsp; <small class="pull-right label label-info">&euro; 123,-</small></a></li>
                                                <li><a href="#"><span class="pull-left"><small>1x</small> Product B</span> &nbsp; <small class="pull-right label label-info">&euro; 139,-</small></a></li>
                                                <li class="divider"></li>
                                                <li><a href="#">Show all items in shopping cart <i class="icon-chevron-right"></i></a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>