<!DOCTYPE html>
<!--[if gt IE 8]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title>Финансовая свобода</title>

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

        function send_present(){
            var name = $("#name2").val();
            var phone = $("#phone2").val();
            var email = $("#email2").val();
            var source = "present";

            $.post('/handler.php', {name:name, phone:phone, source:source, email: email});
            $('#thanks').modal('show');
        }

        function standart_send(){
            var name = $("#name3").val();
            var phone = $("#phone3").val();
            var email = $("#email3").val();
            var source = "standart";

            $.post('/handler.php', {name:name, phone:phone, source:source, email: email});
            $('#thanks').modal('show');
        }
    </script>
</head>

    <body id="body">

        <div id="preloader">
            <img src="img/preloader.gif" alt="Preloader">
        </div>

        <img src="img/1111.png" width="200" style = "position: fixed; z-index: 11;">

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
                </div>

                <!-- main nav -->
                <nav class="collapse navbar-collapse navbar-right" role="navigation">
                    <ul id="nav" class="nav navbar-nav" style="color: #fff">
                        <li class="current"><a href="#features">ОБ ИГРЕ</a></li>
                        <li><a href="#present">ПОДАРОК</a></li>
                        <li><a href="#details">ПОДРОБНОСТИ</a></li>
                        <li><a href="#contacts">КОНТАКТЫ</a></li>
                        <li><a style = "color: #FAFA05">8 (918) 57-90-191</a></li>
                    </ul>
                </nav>
                <!-- /main nav -->
            </div>
        </header>



        </div>

        <?php include('blocks/header.php'); ?>

        <!--
        Features
        ==================================== -->

        <section id="features" class="features">
            <div class="container full">
                <p style = "color: #000; font-size:20px; text-align: center; font-style: italic; margin-bottom: 10px; font-weight: bold;">
                    Впервые в Краснодаре и только у нас! </p>
                <div class="devider"></div>
                <div class="row people">
                    <div class="sec-title text-center">
                         <h2 style = "color:#fff!important;">Игра будет полезна, если у тебя:</h2>
                      </div>
                    <div class="container" style = "margin-top: 50px; color: #fff!important;">
                        <div class="row number-counters">
                            <!-- first count item -->
                            <div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms">
                                <div class="counters-item peoples">
                                    <img src = "img/man1.png" width = "100" style = "border:1px dashed #FAFA05;
                                    padding: 5px; border-radius:50%;">
                                    <p> До сих пор нет источников <b style = "color: #FAFA05;">пассивного дохода</b> </p>
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="300ms">
                                <div class="counters-item peoples">
                                    <img src = "img/man2.png" width = "100" style = "border:1px dashed #FAFA05;
                                    padding: 5px; border-radius:50%;">
                                    <p><b style = "color: #FAFA05;">Денег</b> всегда не хватает</p>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="600ms">
                                <div class="counters-item peoples">
                                    <img src = "img/man3.png" width = "100" style = "border:1px dashed #FAFA05;
                                    padding: 5px; border-radius:50%;">
                                    <p>Нет идей для развития <b style = "color: #FAFA05;"> бизнеса </b></p>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="900ms">
                                <div class="counters-item peoples">
                                    <img src = "img/man4.png" width = "100" style = "border:1px dashed #FAFA05;
                                    padding: 5px; border-radius:50%;">
                                    <p> Боишься начать <b style = "color: #FAFA05;"> свое дело </b> </p>
                                </div>
                            </div>
                            <!-- end first count item -->
                        </div>
                    </div>
                </div>
                </div>

            <div class = "container full">
                <div class = "row" style = "background-color: #fff; padding: 0;">
                    <img src = "img/phrase.png" style = "width: 100%;">
                    <div class="sec-title text-center" style = "margin-bottom: 50px;">
                        <h2 style = "color:#000!important; margin-top: 30px;">На игре ты научишься:</h2>
                    </div>

                    <div style="padding: 0 100px;">
                        <p style = "font-size: 30px; color: #000; padding: 0; margin:0;">
                            <img src="img/circle1.png" width = "70" style="border-radius:50%; margin-right: 40px;">
                            <span class = "text"> Вести <b style = "font-weight:bold">переговоры </b> с партнерами</span>
                        </p>
                        <img class = "line" src = "img/line.png" height = "70" style = "padding:0; margin-right: 40px;">
                        <br>
                        <p style = "font-size: 30px; color: #000; margin: 0; padding: 0;">
                            <img src="img/circle2.png" width = "70" style="border-radius:50%; margin-right: 40px;">
                            <span class = "text"> Создавать источники <b style = "font-weight:bold"> пассивного дохода</b>
                        </p>
                        <img class = "line" src = "img/line.png" height = "70" style = "padding:0">
                        <br>
                        <p style = "font-size: 30px; color: #000;">
                            <img src="img/circle3.png" width = "70" style="border-radius:50%; margin-right: 40px;">
                            <span class = "text">  Находить необходимые <b style = "font-weight:bold">ресурсы</b></span>
                        </p>
                        <img class = "line" src = "img/line.png" height = "70" style = "padding:0">
                        <br>
                        <p style = "font-size: 30px; color: #000;">
                            <img src="img/circle4.png" width = "70" style="border-radius:50%; margin-right: 40px;">
                            <span class = "text"> Быстро принимать <b style = "font-weight:bold"> решения </b></span>
                        </p>
                        <img class = "line" src = "img/line.png" height = "70" style = "padding:0">
                        <br>
                        <p style = "font-size: 30px; color: #000;">
                            <img src="img/circle5.png" width = "70"  style="border-radius:50%; margin-right: 40px;">
                            <span class = "text"> Работать в условиях <b style = "font-weight:bold"> стресса </b></span>
                        </p>
                        <img class = "line" src = "img/line.png" height = "70" style = "padding:0">
                        <br>
                        <p style = "font-size: 30px; color: #000;">
                            <img src="img/circle6.png" width = "70" style="border-radius:50%; margin-right: 40px;">
                            <span class = "text">Использовать каждую <span style = "font-weight:bold"> возможность</span></span>
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <div class = "container full" style = "font-size: 25px;">
            <div class = "row">
                <div style = "width: 100%; background-color:#E7DFE7; color: #000; text-align: center; padding: 30px;">
                    <p> Успей забронировать место на игру. </p>
                    <p style ="font-weight: bold;"> Количество мест строго ограничено!</p>
                    <button style = "margin-top:10px;" class = "go-to-game-last" data-toggle="modal" data-target="#feedbackForm"> Забронировать место </button>
                </div>
            </div>
        </div>

        <section id="present" class="features">
            <div class = "container full">
                <div class="row number-counters bonus" style="margin: auto; margin-top: 20px; margin-bottom: 20px; border-radius: 10%;">
                    <div class="sec-title text-center mb50 wow rubberBand animated" data-wow-duration="1000ms" style = "font-size: 25px; font-family: 'CenturyGothicRegular', sans-serif;">
                        <h2 style = "color: #FAFA05!important; font-family: 'CenturyGothicRegular', sans-serif; font-weight: 100">видео-бонус</h2>
                        <p style = "font-size: 25px; color: #fff;"> Получи 8 правил, которые позволят
                        сохранить и приумножить твои деньги!</p>
                        <form method = post action="handler.php" onsubmit = "send_present(); return false;">
                            <input id = "name2" type = "text" style = "font-size:15px; width: 50%; height: 35px; border-radius: 20px; padding-left: 15px; color: #000; margin-top:25px;" name = "name" placeholder="Имя" required>
                            <input id = "phone2" type = "text" style = "font-size:15px; width: 50%; height: 35px; border-radius: 20px; padding-left: 15px; color:#000; margin-top:15px;" name = "phone" placeholder="+7 (ххх) хх хх ххх" required>
                            <input id = "email2" type = "email" style = "font-size:15px; width: 50%; height: 35px; border-radius: 20px; padding-left: 15px; color: #000; margin-top:15px;" name = "name" placeholder="Email" required>

                            <br><button type = "submit" class = "get-bonus"> Получить бонус </button>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <section id="details" class="features">
            <div class = "container full" style = "border: 7px double #FAFA05; margin-bottom: 20px;">
                <div class = "row">
<!--                    <div class = "about-game" style = "border: 1px solid red;">-->
                        <div class="sec-title text-center">
                            <h2 style = "color:#000!important; margin: 40px 0 20px 0;">ГДЕ И КОГДА?</h2>
                        </div>

                        <div class="col-md-6 about-game" style = "height: 300px; margin: 25px 0 20px 0;">
                            <p> <span style="font-weight: bold"> Дата:</span> 17 марта (суббота) </p>
                            <p> <span style="font-weight: bold"> Время:</span> 17.00 - 21.00 </p>
                            <p> <span style="font-weight: bold"> Кол-во участников:</span> до 8 человек </p>
                            <p> <span style="font-weight: bold"> Стоимость:</span> 1000р. </p>
                            <p> С репостом <a href="#" style = "color:blue;">этой записи </a> ВК,
                                стоимость <span style = "text-decoration: underline">первой </span> игры  <span style = "font-size: 25px; font-weight: bold;">300р</span></p>
                             <p> <span style="font-weight: bold"> Адрес:</span> ул. Северная 400, офис 405</p>
                        </div>

                        <div class="col-md-6" style="border-radius: 20px; margin: 40px 0 20px 0;
                            background: url('img/game.jpg'); background-size: cover; height: 300px;">
                        </div>


<!--                    </div>-->
                </div>
                <div style = "text-align: center; width: 100%;">
                    <br><button data-toggle="modal" data-target="#feedbackForm" style="background-color: #FAFA05;
                                                        color: #000;
                                                        margin-bottom: 20px;
                                                        padding: 10px 15px 10px 15px;
                                                        border-radius: 20px;
                                                        font-size: 18px;
                                                        font-weight: bold;">
                        Хочу на игру!
                    </button>
                </div>
            </div>
        </section>


<!--        <section id="facts" class="facts">-->
<!--            <div class="parallax-overlay">-->
<!--                <div class="container">-->
<!--                    <div class="row number-counters">-->
<!--                        <div class="sec-title text-center mb50 wow rubberBand animated" data-wow-duration="1000ms" style = "font-size: 25px; font-family: 'CenturyGothicRegular', sans-serif;">-->
<!--                            <h2 style = "color: #FAFA05!important; font-family: 'CenturyGothicRegular', sans-serif; font-weight: 100">Записаться на игру-тренинг</h2>-->
<!---->
<!--                            <form method = post action="handler.php">-->
<!--                                <input type = "text" style = "width: 50%; height: 55px; border-radius: 20px; padding-left: 15px; color: #000; margin-top:30px;" name = "name" placeholder="Имя" required>-->
<!--                                <input type = "text" style = "width: 50%; height: 55px; border-radius: 20px; padding-left: 15px; color:#000; margin-top:30px;" name = "phone" placeholder="+7 (ххх) хх хх ххх" required>-->
<!--                                <input type = "email" style = "width: 50%; height: 55px; border-radius: 20px; padding-left: 15px; color: #000; margin-top:30px;" name = "name" placeholder="Email" required>-->
<!---->
<!--                                <br><button type = "submit" class = "go-to-game-last"> Хочу на игру! </button>-->
<!--                            </form>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </section>-->

        <!--
        End Register from
        ==================================== -->


        <!--
        Contacts
        ==================================== -->

        <section id="contacts" class="contacts" style = "padding-top: 0;">
            <div class="parallax-overlay" style = "background: rgba(255,255, 0, 1); padding: 20px 0 20px 0;">
                <div class="container">
                    <div class="row number-counters">

                        <div class="last-title text-center mb50 wow rubberBand animated" data-wow-duration="1000ms">
                            <h2 style="color: #000000; font-family: 'CenturyGothicRegular', sans-serif; font-weight: 100">Как нас найти?</h2>
                        </div>

                        <!-- first count item -->
                        <div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms">
                            <div class="counters-item contacts">
                                <i class="fa fa-map-marker fa-3x"></i>
                                <p>г. Краснодар <br> ул. Северная 400 <br> офис 405 </p>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="300ms">
                            <div class="counters-item contacts">
                                <i class="fa fa-phone fa-3x"></i>
                                <p>+7 (918) 57 90 191</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="600ms">
                            <div class="counters-item contacts">
                                <i class="fa fa-envelope fa-3x"></i>
                                <p> cherednikova_any@mail.ru </p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="900ms">
                            <div class="counters-item contacts">
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

        <!-- Форма обратной связи в модальном окне -->
        <div class="modal fade" id="feedbackForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document" style = "text-align: center; width: 400px; background-color: #000; margin:auto;">
                <div class="modal-content save-window">
                    <div class="modal-header">
                        <h2 style = "color: #000; font-family: 'CenturyGothicRegular', sans-serif; font-weight: 100">ЗАПИСЬ НА ИГРУ</h2>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <div style ="margin: auto;">
                                <form method = post action="handler.php" onsubmit="standart_send(); return false;">
                                    <input id = "name3" type = "text" style = "font-size:15px; width: 90%; height: 35px; border-radius: 20px; padding-left: 15px; color: #000; margin-top:25px;" name = "name" placeholder="Имя" required>
                                    <input id = "phone3" type = "text" style = "font-size:15px; width: 90%; height: 35px; border-radius: 20px; padding-left: 15px; color:#000; margin-top:15px;" name = "phone" placeholder="+7 (ххх) хх хх ххх" required>
                                    <input id = "email3" type = "email" style = "font-size:15px; width: 90%; height: 35px; border-radius: 20px; padding-left: 15px; color: #000; margin-top:15px;" name = "name" placeholder="Email" required>

                                    <br><button type = "submit" class = "get-bonus"> Хочу на игру! </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        <div class="modal fade" id="thanks" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document" style = "text-align: center; width: 400px; background-color: #000; margin:auto;">
                <div class="modal-content save-window">
                    <div class="modal-body">
                        <div style = "margin: auto;">
                            <p> Благодарим, ваша заявка принята, наш менеджер с вами свяжется!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <footer id="footer" class="footer" style="padding-top: 0;">
            <p style = "padding-top: 20px"> @Клуб "Финансовая свобода" 2018 </p>
        </footer>

        <a href="#body" id="back-top"><i class="fa fa-angle-up fa-3x"></i></a>

    </body>
</html>
