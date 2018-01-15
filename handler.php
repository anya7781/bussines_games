<?php
    require 'plugin-mail/3rdparty/PHPMailer/PHPMailerAutoload.php';

    /* Get data from form */
    $name =  $_POST['name'];
    $phone =  $_POST['phone'];

    if (isset($_POST['game']))
        $game = $_POST['game'];
    else $game = 'запись из шапки';

    $date = date('F j, Y, g:i a');


//    /*  Write to file */
//    $file = 'sample.csv';
//    $tofile = "'$name';'$phone';'$game';'$date'; \n";
//    $bom = "\xEF\xBB\xBF";
//    @file_put_contents($file,  $tofile . file_get_contents($file));
//
//
//        /* Send mail  */
//        $mail = new PHPMailer();
//        $mail->SMTPOptions = array(
//            'ssl' => array(
//                'verify_peer' => false,
//                'verify_peer_name' => false,
//                'allow_self_signed' => true
//            )
//        );
//        $mail->From     = 'cherednikova.any@gmail.com';
//        $mail->FromName = 'Территория роста';
//        $mail->IsSMTP();
//        $mail->Mailer   = "smtp";
//        $mail->SMTPSecure = 'ssl';
//        $mail->Host       = 'smtp.gmail.com';
//        $mail->SMTPAuth   = true;
//        $mail->Port       = 465;
//        $mail->Username   = "cherednikova.any@gmail.com";
//        $mail->Password   = "kerriwalsh97";
//        $mail->addAddress('cherednikova_any@mail.ru');
//        $mail->CharSet = "UTF-8";
//        $mail->WordWrap = 50;                                 // Set word wrap to 50 characters
//        $mail->isHTML(true);                                  // Set email format to HTML
//        $mail->Subject = 'Обработка нового клиента';
//        $mail->Body    = 'Мы получили новую заявку <br> Имя: '.$name.'<br> Телефон: '.$phone.'<br> Игра: '.$game;
//        $mail->AltBody = 'Новый клиент занесен в базу';
//        $mail->send();

        header('Location: /thanks.php', true, 303);