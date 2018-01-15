<!DOCTYPE html>
<!--[if lt IE 7]>      <html lang="en" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="en" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="en" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title>Территория роста</title>

    <meta name="description" content="Blue One Page Creative HTML5 Template">
    <meta name="keywords" content="one page, single page, onepage, responsive, parallax, creative, business, html5, css3, css3 animation">
    <meta name="author" content="Muhammad Morshed">

    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Google Font -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery.fancybox.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/media-queries.css">

    <link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon">


    <!-- Modernizer Script for old Browsers -->
    <script src="js/modernizr-2.6.2.min.js"></script>

    <!-- Essential jQuery Plugins
       ================================================== -->
    <!-- Main jQuery -->
    <script src="js/jquery-1.11.1.min.js"></script>
    <!-- Single Page Nav -->
    <script src="js/jquery.singlePageNav.min.js"></script>
    <!-- Twitter Bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- jquery.fancybox.pack -->
    <script src="js/jquery.fancybox.pack.js"></script>
    <!-- jquery.mixitup.min -->
    <script src="js/jquery.mixitup.min.js"></script>
    <!-- jquery.parallax -->
    <script src="js/jquery.parallax-1.1.3.js"></script>
    <!-- jquery.countTo -->
    <script src="js/jquery-countTo.js"></script>
    <!-- jquery.appear -->
    <script src="js/jquery.appear.js"></script>
    <!-- Contact form validation -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.32/jquery.form.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.11.1/jquery.validate.min.js"></script>
    <!-- Google Map -->
    <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
    <!-- jquery easing -->
    <script src="js/jquery.easing.min.js"></script>
    <!-- jquery easing -->
    <script src="js/wow.min.js"></script>
    <script>
        var wow = new WOW ({
                boxClass:     'wow',      // animated element css class (default is wow)
                animateClass: 'animated', // animation css class (default is animated)
                offset:       120,          // distance to the element when triggering the animation (default is 0)
                mobile:       false,       // trigger animations on mobile devices (default is true)
                live:         true        // act on asynchronously loaded content (default is true)
            }
        );
        wow.init();
    </script>
    <!-- Custom Functions -->
    <script src="js/custom.js"></script>

    <script type="text/javascript">
        $(function(){
            /* ========================================================================= */
            /*	Contact Form
             /* ========================================================================= */

            $('#contact-form').validate({
                rules: {
                    name: {
                        required: true,
                        minlength: 2
                    },
                    email: {
                        required: true,
                        email: true
                    },
                    message: {
                        required: true
                    }
                },
                messages: {
                    name: {
                        required: "come on, you have a name don't you?",
                        minlength: "your name must consist of at least 2 characters"
                    },
                    email: {
                        required: "no email, no message"
                    },
                    message: {
                        required: "um...yea, you have to write something to send this form.",
                        minlength: "thats all? really?"
                    }
                },
                submitHandler: function(form) {
                    $(form).ajaxSubmit({
                        type:"POST",
                        data: $(form).serialize(),
                        url:"process.php",
                        success: function() {
                            $('#contact-form :input').attr('disabled', 'disabled');
                            $('#contact-form').fadeTo( "slow", 0.15, function() {
                                $(this).find(':input').attr('disabled', 'disabled');
                                $(this).find('label').css('cursor','default');
                                $('#success').fadeIn();
                            });
                        },
                        error: function() {
                            $('#contact-form').fadeTo( "slow", 0.15, function() {
                                $('#error').fadeIn();
                            });
                        }
                    });
                }
            });
        });
    </script>
</head>

    <body id="body">

        <div id="preloader">
            <img src="img/preloader.gif" alt="Preloader">
        </div>

        <!--
        Fixed Navigation
        ==================================== -->
        <header id="navigation" class="navbar-fixed-top navbar" style = "height:70px; font-weight: bold;">
            <div class="container" style = "padding-top:15px">
                <div class="navbar-header">
                    <!-- responsive nav button -->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <i class="fa fa-bars fa-2x"></i>
                    </button>
                    <!-- /responsive nav button -->

                    <!-- logo -->
                    <a class="navbar-brand" href="#body">
                        <h1 id="logo">
                            <img src="img/logo1.png" alt="Brandi">
                        </h1>
                    </a>
                    <!-- /logo -->

                    <a class="navbar-brand phone" href="#body" style = "margin: 15px 0 0 100px; color: #B5B5B5;">
                        <h1>
                          +7 (918) 57 90 191
                        </h1>
                    </a>

                </div>

                <!-- main nav -->
                <nav class="collapse navbar-collapse navbar-right" role="navigation">
                    <ul id="nav" class="nav navbar-nav" style="color: #B5B5B5">
                        <li class="current"><a href="#body">ГЛАВНАЯ</a></li>
                        <li><a href="#features">ИГРЫ-ТРЕНИНГИ</a></li>
                        <li><a href="#facts">ЗАПИСЬ</a></li>
                        <li><a href="#contacts">КОНТАКТЫ</a></li>
                    </ul>
                </nav>
                <!-- /main nav -->
            </div>
        </header>

        <?php include('blocks/header.php'); ?>

        <!--
        Features
        ==================================== -->

        <section id="features" class="features">
            <div class="container">
                <div class="row">

                    <div class="sec-title text-center">
                         <h2>ИГРЫ-ТРЕНИНГИ</h2>
                         <div class="devider"></div>
                      </div>

                    <!--------------------------- First ------------------------------>
                    <div class = "game-box mb50 wow bounceInLeft animated" data-wow-duration="1000ms">

                        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

                        <div class = "game-description">
                            <p class = "price">ЦЕНА: 200р.</p>
                            <div class = "description">
                                <p style="font-size: 23px; color: #000; margin-top: 15px; font-weight: bold;">CASH FLOW 101</p>
                                <a href="#facts"><button type = "submit" class = "go-to-game"> Хочу на игру! </button></a>

                                <div class = "icon-description">
                                    <span class="glyphicon glyphicon-ok icon-ok"></span>
                                    <p>Учит грамотно распоряжаться деньгами </p>
                                </div>

                                <div class = "icon-description">
                                    <span class="glyphicon glyphicon-ok icon-ok"></span>
                                    <p>Знакомит с основами инвестирования</p>
                                </div>

                                <div class = "icon-description">
                                    <span class="glyphicon glyphicon-ok icon-ok"></span>
                                    <p> Отлично подходит для новичков </p>
                                </div>

                            </div>
                        </div>

                        <div class = "game-image">
                        </div>

                        <div class = "game-number">
                            <p>01</p>
                        </div>
                    </div>

                    <!--------------------------- Second ------------------------------>
                    <div class = "game-box mb50 wow bounceInRight animated" data-wow-duration="1000ms">

                        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

                        <div class = "game-description-back">
                            <p class = "price-back">ЦЕНА: 300р.</p>
                            <div class = "description-back">
                                <p style="font-size: 23px; color: #000; margin-top: 15px; font-weight: bold;">CASH FLOW 202</p>
                                <a href="#facts"><button type = "submit" class = "go-to-game-back"> Хочу на игру! </button></a>

                                <div class = "icon-description-back">
                                    <span class="glyphicon glyphicon-ok icon-ok-back"></span>
                                    <p> Обучает технической торговле на фондовом рынке </p>
                                </div>

                                <div class = "icon-description-back">
                                    <span class="glyphicon glyphicon-ok icon-ok-back"></span>
                                    <p>Учит зарабатывать на росте и спаде рынка</p>
                                </div>

                                <div class = "icon-description-back">
                                    <span class="glyphicon glyphicon-ok icon-ok-back"></span>
                                    <p>Требует базовые знания о финансах и инвестициях</p>
                                </div>
                            </div>
                        </div>

                        <div class = "game-image-back cash2">
                        </div>

                        <div class = "game-number-back">
                            <p>02</p>
                        </div>
                    </div>


                    <!--------------------------- Third ------------------------------>
                    <div class = "game-box mb50 wow bounceInLeft animated" data-wow-duration="1000ms">

                        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

                        <div class = "game-description">
                            <p class = "price mobile-down" style = "bottom: 10%">ЦЕНА: <strike> 1000р</strike>.<br><br> <b style = "color: red; margin-left: 55%"> 500р. </b></p>
                            <div class = "description">
                                <p style="font-size: 23px; color: #000; margin-top: 15px; font-weight: bold;">Гений финансов</p>
                                <a href="#facts"><button type = "submit" class = "go-to-game"> Хочу на игру! </button></a>

                                <p class = "condition">Условие участия: успешное прохождение cash flow 101 или 202</p>

                                <div class = "icon-description">
                                    <span class="glyphicon glyphicon-ok icon-ok"></span>
                                    <p> Адапритрована под российский рынок </p>
                                </div>

                                <div class = "icon-description">
                                    <span class="glyphicon glyphicon-ok icon-ok"></span>
                                    <p>Требует уверенных знаний в области финансов и инвестирования</p>
                                </div>

                                <div class = "icon-description">
                                    <span class="glyphicon glyphicon-ok icon-ok"></span>
                                    <p>Не имеет аналогов и существует всего в нескольких экземплярах</p>
                                </div>
                            </div>
                        </div>

                        <div class = "game-image genues">
                        </div>

                        <div class = "game-number">
                            <p>03</p>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!--
        End Features
        ==================================== -->



        <!--
        Register from
        ==================================== -->

        <section id="facts" class="facts">
            <div class="parallax-overlay">
                <div class="container">
                    <div class="row number-counters">

                        <div class="sec-title text-center mb50 wow rubberBand animated" data-wow-duration="1000ms" style = "font-size: 25px; font-family: 'CenturyGothicRegular', sans-serif;">
                            <h2 style = "color: #ffffff; font-family: 'CenturyGothicRegular', sans-serif; font-weight: 100">Записаться на игру-тренинг</h2>
                            <div class="devider"></div>

                            <form method = post action="handler.php">
                                <input type = "text" style = "width: 50%; height: 55px; border-radius: 20px; padding-left: 15px; color: #000; margin-top:30px;" name = "name" placeholder="Имя" required>
                                <input type = "text" style = "width: 50%; height: 55px; border-radius: 20px; padding-left: 15px; color:#000; margin-top:30px;" name = "phone" placeholder="+7 (ххх) хх хх ххх" required>

                                <select style = "width: 50%; height: 55px; border-radius: 20px; padding-left: 15px; color:#000; margin-top:30px;" name = "game">
                                    <option value="101">Cash flow 101</option>
                                    <option value="202">Cash flow 202</option>
                                    <option value="genues">Гений финансов</option>
                                </select>

                                <br><button type = "submit" class = "go-to-game-last"> Хочу на игру! </button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <!--
        End Register from
        ==================================== -->


        <!--
        Contacts
        ==================================== -->

        <section id="contacts" class="contacts" style = "padding: 0">
            <div class="parallax-overlay" style = "background: rgba(255,255, 0, 0.5)">
                <div class="container">
                    <div class="row number-counters">

                        <div class="sec-title text-center mb50 wow rubberBand animated" data-wow-duration="1000ms">
                            <h2 style="color: #000000; font-family: 'CenturyGothicRegular', sans-serif; font-weight: 100">Как нас найти?</h2>
                        </div>

                        <!-- first count item -->
                        <div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms">
                            <div class="counters-item">
                                <i class="fa fa-map-marker fa-3x"></i>
<!--                                <strong data-to="25.10">20.50</strong>-->
                                <p>г. Краснодар <br> ул. Северная 400 <br> офис 405 </p>
                            </div>
                        </div>


                        <div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="300ms">
                            <div class="counters-item">
                                <i class="fa fa-phone fa-3x"></i>
                                <p>+7 (918) 57 90 191</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="600ms">
                            <div class="counters-item">
                                <i class="fa fa-envelope fa-3x"></i>
                                <p> cherednikova_any@mail.ru </p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="900ms">
                            <div class="counters-item">
                                <i class="fa fa-vk fa-3x"></i>
                                <p><a target="_blank" href = "https://vk.com/growth_area"> https://vk.com/growth_area </a></p>
                            </div>
                        </div>
                        <!-- end first count item -->
                    </div>
                </div>
            </div>

            <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Ad9dd96c4dc8822ba23ab0862a54ce088d75e9a4112add780446720013a86f40e&amp;source=constructor" width="100%" height="300" frameborder="0"></iframe>

        </section>

        <!--
        End Contact Us
        ==================================== -->


        <footer id="footer" class="footer" style="padding-top: 0;">
            <p style = "padding-top: 20px"> @Территория роста 2018 </p>
        </footer>

        <a href="javascript:void(0);" id="back-top"><i class="fa fa-angle-up fa-3x"></i></a>

    </body>
</html>
