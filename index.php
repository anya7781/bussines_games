<!DOCTYPE html>
<!--[if gt IE 8]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title>Гений финансов</title>

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

    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
        (function (d, w, c) {
            (w[c] = w[c] || []).push(function() {
                try {
                    w.yaCounter48080003 = new Ya.Metrika({
                        id:48080003,
                        clickmap:true,
                        trackLinks:true,
                        accurateTrackBounce:true,
                        webvisor:true
                    });
                } catch(e) { }
            });

            var n = d.getElementsByTagName("script")[0],
                s = d.createElement("script"),
                f = function () { n.parentNode.insertBefore(s, n); };
            s.type = "text/javascript";
            s.async = true;
            s.src = "https://mc.yandex.ru/metrika/watch.js";

            if (w.opera == "[object Opera]") {
                d.addEventListener("DOMContentLoaded", f, false);
            } else { f(); }
        })(document, window, "yandex_metrika_callbacks");
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/48080003" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->

    <script type="text/javascript">(window.Image ? (new Image()) : document.createElement('img')).src = 'https://vk.com/rtrg?p=VK-RTRG-226058-fgnc1';</script>

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

            $('#present-text').modal('show');
            $.post('/handler.php', {name:name, phone:phone, source:source, email: email});
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
    <script>(function(){var script = document.createElement('script');
            script.type = 'text/javascript';script.async = true;script.charset = 'utf-8';
            script.src = 'https://152фз.рф/widget/89912d89f9aa01cc92fbd92361ed8660';
            document.getElementsByTagName('head')[0].appendChild(script);})();</script>
    <div id="fz_wrap"></div>
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
                <li><a href="#details">ПОДРОБНОСТИ</a></li>
                <li><a href="#present">ПОДАРОК</a></li>
                <li><a href="#contacts">КОНТАКТЫ</a></li>
                <li><a style = "color: #FAFA05">8 (918) 31-41-728</a></li>
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
                            <p> Боишься начать <b style = "color: #FAFA05;"> свое дело </b> </p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="900ms">
                        <div class="counters-item peoples">
                            <img src = "img/man4.png" width = "100" style = "border:1px dashed #FAFA05;
                                    padding: 5px; border-radius:50%;">
                            <p>Нет идей для развития <b style = "color: #FAFA05;"> бизнеса </b></p>
                        </div>
                    </div>
                    <!-- end first count item -->
                </div>
            </div>
        </div>
    </div>

    <div class = "container full">
        <div class = "row" style = "background-color: #fff; padding: 0; width: 100%;">
            <img src = "img/phrase.png" style = "width: 100%;">
            <div class="sec-title text-center" style = "margin-bottom: 50px;">
                <h2 style = "color:#000!important; margin-top: 30px;">На игре ты научишься:</h2>
            </div>

            <div class = "benefit">
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
                    <span class = "text">  Находить скрытые <b style = "font-weight:bold">возможности</b></span>
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
                    <span class = "text">  Находить необходимые <b style = "font-weight:bold">ресурсы</b></span>
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

<section id="details" class="features" style = "padding-top:0">
    <div class = "container full" style = "background-color: #000; margin-bottom: 20px;">
        <div class = "row" style = "width: 100%; margin-bottom: 40px;">
            <div class="sec-title text-center">
                <h2 style = "color:#fff!important; margin: 40px 0 20px 0;">ГДЕ И КОГДА?</h2>
            </div>

            <div class="number-counters" style = "width: 80%; margin: auto;">

                <!-- first count item -->
                <div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated info-box"
                     id = "img1" data-wow-duration="500ms">
                    <div class="counters-item">
                        <p style = "color: #FAFA05; font-size: 30px; border-bottom: 2px solid #FAFA05;
                                padding-bottom: 5px;"> Когда?</p>
                        <p class = "info" style = "margin-top:70px;"> 24 марта </p>
                        <p class = "info"> 17.00 - 21.00 </p>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated info-box"
                     id = "img2" data-wow-duration="500ms" data-wow-delay="300ms">
                    <div class="counters-item">
                        <p style = "color: #FAFA05;font-size: 30px; border-bottom: 2px solid #FAFA05;
                                padding-bottom:10px;"> Какая цена?</p>
                        <p class = "money" style = "margin-top:70px"> Первая игра: 500р. </p>
                        <p class = "money"> После репоста <a target="_blank" style="text-decoration: underline" href="https://vk.com/fin_freedom.club?w=wall-156897542_37"> записи</a> VK: <span style="color:red;">300р.</span> </>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated info-box"
                     id = "img3" data-wow-duration="500ms" data-wow-delay="600ms">
                    <div class="counters-item">
                        <p style = "color: #FAFA05; font-size: 30px; border-bottom: 2px solid #FAFA05;
                                padding-bottom: 10px;"> Сколько участников?</p><br>
                        <p class = "info" style = "margin-top: 70px;"> до 8 человек </p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated info-box"
                     id = "img4" data-wow-duration="500ms" data-wow-delay="900ms">
                    <div class="counters-item">
                        <p style = "color: #FAFA05; font-size: 30px; border-bottom: 2px solid #FAFA05; padding-bottom: 10px;"> Где?</p>
                        <p class = "info" style = "margin-top: 70px;"> ул. Северная 400</p>
                        <p class = "info"> офис 405 </p>
                    </div>
                </div>
                <!-- end first count item -->
            </div>
        </div>
    </div>
</section>






<section id="present" class="features" style = "padding-top: 0">
    <div class = "container full">
        <div class="row number-counters bonus" style="margin: auto; border-radius: 10%;">
            <div class="sec-title text-center mb50 wow rubberBand animated" data-wow-duration="1000ms" style = "font-size: 25px; font-family: 'CenturyGothicRegular', sans-serif;">
                <h2 style = "color: #FAFA05!important; font-family: 'CenturyGothicRegular', sans-serif; font-weight: 100">видео-бонус</h2>
                <p class = "bonus-desc"> Получи 8 правил, которые позволят
                    сохранить и приумножить твои деньги!</p>
                <form style = "margin-top:25px;" method = post action="handler.php" onsubmit = "send_present(); return false;">
                    <input id = "name2" type = "text" style = "font-size:15px; width: 50%; height: 35px; border-radius: 20px; padding-left: 15px; color: #000; margin-top:25px;" name = "name" placeholder="Имя" required>
                    <input id = "phone2" type = "text" style = "font-size:15px; width: 50%; height: 35px; border-radius: 20px; padding-left: 15px; color:#000; margin-top:15px;" name = "phone" placeholder="+7 (ххх) хх хх ххх" required>
                    <input id = "email2" type = "email" style = "font-size:15px; width: 50%; height: 35px; border-radius: 20px; padding-left: 15px; color: #000; margin-top:15px;" name = "email" placeholder="Email" required>
                    <p style = "margin-top:15px; line-height:0"><input type = "checkbox" required>
                        <span style = "font-size:10px; color:#fff">Нажимая на кнопку "Получить бонус",
                        я даю согласие на <a style = "color:#71C5FA;" href="https://xn--152-1dd8d.xn--p1ai/get_prv/89912d89f9aa01cc92fbd92361ed8660" id="fz_privacy">обработку персональных данных </a>.</span></p>
                    <button data-toggle="modal" class = "get-bonus"> Получить бонус </button>
                </form>
            </div>
        </div>
    </div>
</section>


<section id="photos">
    <div class = "container full">
        <div class="row">
            <div class="sec-title text-center">
                <h2 style = "color:#000!important; margin: 40px 0 20px 0;">фОТО С ПРОШЛЫХ ИГР:</h2>
            </div>
            <div class="col-md-12">
                <ul id="portfolio-list">
                    <li>
                        <div class="portfolio-item">
                            <img src="img/face5.jpg" class="img-responsive" alt="" />
                        </div>
                    </li>
                    <li>
                        <div class="portfolio-item">
                            <img src="img/face6.jpg" class="img-responsive" alt="" />
                        </div>
                    </li>
                    <li>
                        <div class="portfolio-item">
                            <img src="img/face4.jpg" class="img-responsive" alt="" />
                        </div>
                    </li>
                    <li>
                        <div class="portfolio-item">
                            <img src="img/face1.jpg" class="img-responsive" alt="" />
                        </div>
                    </li>
                    <li>
                        <div class="portfolio-item">
                            <img src="img/face2.jpg" class="img-responsive" alt="" />
                        </div>
                    </li>
                    <li>
                        <div class="portfolio-item">
                            <img src="img/face3.jpg" class="img-responsive" alt="" />
                        </div>
                    </li>
                </ul>
                <!-- End Portfolio items -->
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

<section id="contacts" class="contacts" style = "padding: 0;">
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
                        <p><a target="_blank" href = "https://vk.com/fin_freedom.club"> https://vk.com/fin_freedom.club </a></p>
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
                        <input id = "email3" type = "email" style = "font-size:15px; width: 90%; height: 35px; border-radius: 20px; padding-left: 15px; color: #000; margin-top:15px;" name = "email" placeholder="Email" required>
                        <p style = "margin-top:15px; line-height:0"><input type = "checkbox" required>
                            <span style = "font-size:10px; color:#000">Нажимая на кнопку "Хочу на игру",
                        я даю согласие на <a style = "color:#71C5FA;" href="https://xn--152-1dd8d.xn--p1ai/get_prv/89912d89f9aa01cc92fbd92361ed8660" id="fz_privacy">обработку персональных данных </a>.</span></p>
                        <button type = "submit" class = "get-bonus"> Хочу на игру! </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="present-text" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document" style = "text-align: center; width: 400px; background-color: #000; margin:auto;">
        <div class="modal-content save-window">
            <div class="modal-body">
                <div style = "margin: auto;">
                    <p> Проверьте свою почту на наличие бонуса!</p>
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
<!DOCTYPE html>
<!--[if gt IE 8]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title>Гений финансов</title>

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

    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
        (function (d, w, c) {
            (w[c] = w[c] || []).push(function() {
                try {
                    w.yaCounter48080003 = new Ya.Metrika({
                        id:48080003,
                        clickmap:true,
                        trackLinks:true,
                        accurateTrackBounce:true,
                        webvisor:true
                    });
                } catch(e) { }
            });

            var n = d.getElementsByTagName("script")[0],
                s = d.createElement("script"),
                f = function () { n.parentNode.insertBefore(s, n); };
            s.type = "text/javascript";
            s.async = true;
            s.src = "https://mc.yandex.ru/metrika/watch.js";

            if (w.opera == "[object Opera]") {
                d.addEventListener("DOMContentLoaded", f, false);
            } else { f(); }
        })(document, window, "yandex_metrika_callbacks");
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/48080003" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->

    <script type="text/javascript">(window.Image ? (new Image()) : document.createElement('img')).src = 'https://vk.com/rtrg?p=VK-RTRG-226058-fgnc1';</script>

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

            $('#present-text').modal('show');
            $.post('/handler.php', {name:name, phone:phone, source:source, email: email});
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
    <script>(function(){var script = document.createElement('script');
            script.type = 'text/javascript';script.async = true;script.charset = 'utf-8';
            script.src = 'https://152фз.рф/widget/89912d89f9aa01cc92fbd92361ed8660';
            document.getElementsByTagName('head')[0].appendChild(script);})();</script>
    <div id="fz_wrap"></div>
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
                <li><a href="#details">ПОДРОБНОСТИ</a></li>
                <li><a href="#present">ПОДАРОК</a></li>
                <li><a href="#contacts">КОНТАКТЫ</a></li>
                <li><a style = "color: #FAFA05">8 (918) 31-41-728</a></li>
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
                            <p> Боишься начать <b style = "color: #FAFA05;"> свое дело </b> </p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="900ms">
                        <div class="counters-item peoples">
                            <img src = "img/man4.png" width = "100" style = "border:1px dashed #FAFA05;
                                    padding: 5px; border-radius:50%;">
                            <p>Нет идей для развития <b style = "color: #FAFA05;"> бизнеса </b></p>
                        </div>
                    </div>
                    <!-- end first count item -->
                </div>
            </div>
        </div>
    </div>

    <div class = "container full">
        <div class = "row" style = "background-color: #fff; padding: 0; width: 100%;">
            <img src = "img/phrase.png" style = "width: 100%;">
            <div class="sec-title text-center" style = "margin-bottom: 50px;">
                <h2 style = "color:#000!important; margin-top: 30px;">На игре ты научишься:</h2>
            </div>

            <div class = "benefit">
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
                    <span class = "text">  Находить скрытые <b style = "font-weight:bold">возможности</b></span>
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
                    <span class = "text">  Находить необходимые <b style = "font-weight:bold">ресурсы</b></span>
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

<section id="details" class="features" style = "padding-top:0">
    <div class = "container full" style = "background-color: #000; margin-bottom: 20px;">
        <div class = "row" style = "width: 100%; margin-bottom: 40px;">
            <div class="sec-title text-center">
                <h2 style = "color:#fff!important; margin: 40px 0 20px 0;">ГДЕ И КОГДА?</h2>
            </div>

            <div class="number-counters" style = "width: 80%; margin: auto;">

                <!-- first count item -->
                <div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated info-box"
                     id = "img1" data-wow-duration="500ms">
                    <div class="counters-item">
                        <p style = "color: #FAFA05; font-size: 30px; border-bottom: 2px solid #FAFA05;
                                padding-bottom: 5px;"> Когда?</p>
                        <p class = "info" style = "margin-top:70px;"> 24 марта </p>
                        <p class = "info"> 17.00 - 21.00 </p>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated info-box"
                     id = "img2" data-wow-duration="500ms" data-wow-delay="300ms">
                    <div class="counters-item">
                        <p style = "color: #FAFA05;font-size: 30px; border-bottom: 2px solid #FAFA05;
                                padding-bottom:10px;"> Какая цена?</p>
                        <p class = "money" style = "margin-top:70px"> Первая игра: 500р. </p>
                        <p class = "money"> После репоста <a target="_blank" style="text-decoration: underline" href="https://vk.com/fin_freedom.club?w=wall-156897542_37"> записи</a> VK: <span style="color:red;">300р.</span> </>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated info-box"
                     id = "img3" data-wow-duration="500ms" data-wow-delay="600ms">
                    <div class="counters-item">
                        <p style = "color: #FAFA05; font-size: 30px; border-bottom: 2px solid #FAFA05;
                                padding-bottom: 10px;"> Сколько участников?</p><br>
                        <p class = "info" style = "margin-top: 70px;"> до 8 человек </p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated info-box"
                     id = "img4" data-wow-duration="500ms" data-wow-delay="900ms">
                    <div class="counters-item">
                        <p style = "color: #FAFA05; font-size: 30px; border-bottom: 2px solid #FAFA05; padding-bottom: 10px;"> Где?</p>
                        <p class = "info" style = "margin-top: 70px;"> ул. Северная 400</p>
                        <p class = "info"> офис 405 </p>
                    </div>
                </div>
                <!-- end first count item -->
            </div>
        </div>
    </div>
</section>






<section id="present" class="features" style = "padding-top: 0">
    <div class = "container full">
        <div class="row number-counters bonus" style="margin: auto; border-radius: 10%;">
            <div class="sec-title text-center mb50 wow rubberBand animated" data-wow-duration="1000ms" style = "font-size: 25px; font-family: 'CenturyGothicRegular', sans-serif;">
                <h2 style = "color: #FAFA05!important; font-family: 'CenturyGothicRegular', sans-serif; font-weight: 100">видео-бонус</h2>
                <p class = "bonus-desc"> Получи 8 правил, которые позволят
                    сохранить и приумножить твои деньги!</p>
                <form style = "margin-top:25px;" method = post action="handler.php" onsubmit = "send_present(); return false;">
                    <input id = "name2" type = "text" style = "font-size:15px; width: 50%; height: 35px; border-radius: 20px; padding-left: 15px; color: #000; margin-top:25px;" name = "name" placeholder="Имя" required>
                    <input id = "phone2" type = "text" style = "font-size:15px; width: 50%; height: 35px; border-radius: 20px; padding-left: 15px; color:#000; margin-top:15px;" name = "phone" placeholder="+7 (ххх) хх хх ххх" required>
                    <input id = "email2" type = "email" style = "font-size:15px; width: 50%; height: 35px; border-radius: 20px; padding-left: 15px; color: #000; margin-top:15px;" name = "email" placeholder="Email" required>
                    <p style = "margin-top:15px; line-height:0"><input type = "checkbox" required>
                        <span style = "font-size:10px; color:#fff">Нажимая на кнопку "Получить бонус",
                        я даю согласие на <a style = "color:#71C5FA;" href="https://xn--152-1dd8d.xn--p1ai/get_prv/89912d89f9aa01cc92fbd92361ed8660" id="fz_privacy">обработку персональных данных </a>.</span></p>
                    <button data-toggle="modal" class = "get-bonus"> Получить бонус </button>
                </form>
            </div>
        </div>
    </div>
</section>


<section id="photos">
    <div class = "container full">
        <div class="row">
            <div class="sec-title text-center">
                <h2 style = "color:#000!important; margin: 40px 0 20px 0;">фОТО С ПРОШЛЫХ ИГР:</h2>
            </div>
            <div class="col-md-12">
                <ul id="portfolio-list">
                    <li>
                        <div class="portfolio-item">
                            <img src="img/face5.jpg" class="img-responsive" alt="" />
                        </div>
                    </li>
                    <li>
                        <div class="portfolio-item">
                            <img src="img/face6.jpg" class="img-responsive" alt="" />
                        </div>
                    </li>
                    <li>
                        <div class="portfolio-item">
                            <img src="img/face4.jpg" class="img-responsive" alt="" />
                        </div>
                    </li>
                    <li>
                        <div class="portfolio-item">
                            <img src="img/face1.jpg" class="img-responsive" alt="" />
                        </div>
                    </li>
                    <li>
                        <div class="portfolio-item">
                            <img src="img/face2.jpg" class="img-responsive" alt="" />
                        </div>
                    </li>
                    <li>
                        <div class="portfolio-item">
                            <img src="img/face3.jpg" class="img-responsive" alt="" />
                        </div>
                    </li>
                </ul>
                <!-- End Portfolio items -->
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

<section id="contacts" class="contacts" style = "padding: 0;">
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
                        <p><a target="_blank" href = "https://vk.com/fin_freedom.club"> https://vk.com/fin_freedom.club </a></p>
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
                        <input id = "email3" type = "email" style = "font-size:15px; width: 90%; height: 35px; border-radius: 20px; padding-left: 15px; color: #000; margin-top:15px;" name = "email" placeholder="Email" required>
                        <p style = "margin-top:15px; line-height:0"><input type = "checkbox" required>
                            <span style = "font-size:10px; color:#000">Нажимая на кнопку "Хочу на игру",
                        я даю согласие на <a style = "color:#71C5FA;" href="https://xn--152-1dd8d.xn--p1ai/get_prv/89912d89f9aa01cc92fbd92361ed8660" id="fz_privacy">обработку персональных данных </a>.</span></p>
                        <button type = "submit" class = "get-bonus"> Хочу на игру! </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="present-text" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document" style = "text-align: center; width: 400px; background-color: #000; margin:auto;">
        <div class="modal-content save-window">
            <div class="modal-body">
                <div style = "margin: auto;">
                    <p> Проверьте свою почту на наличие бонуса!</p>
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
