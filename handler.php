
<?php
    require 'plugin-mail/3rdparty/PHPMailer/PHPMailerAutoload.php';

    $link = mysql_connect('localhost', 'root', '');
    mysql_select_db('genues');


    if (isset($_POST['source'])){
        $source = $_POST['source'];
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $date = date('y-m-s H:i:s');

        if (isset($_POST['email'])){
            $email = $_POST['email'];
            $query = 'INSERT INTO User (name, phone, date, source, email) VALUES ("'.$name.'", 
                            "'.$phone.'","'.$date.'","'.$source.'","'.$email.'")';
            mysql_query($query);

            /* if present, send video */
        }
        else{
            $query = 'INSERT INTO User (name, phone, date, source) VALUES ("'.$name.'", 
                            "'.$phone.'","'.$date.'","'.$source.'")';
            mysql_query($query);
        }
    }

        // несколько получателей
        $to = 'cherednikova_any@mail.ru';
        // тема письма
        $subject = 'Новая заявка| Клуб Финансовая свобода';
        // текст письма
        $message = '<p>Вам пришла новая заявка:</p>
                <p>Имя:'.$name.'</p> <p>Телефон:'.$phone.'</p> <p> Источник: </p>'.$source;
        // Для отправки HTML-письма должен быть установлен заголовок Content-type
        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        // Дополнительные заголовки
        $headers[] = 'To: Pavel <cherednikova_any@mail.ru>';
        $headers[] = 'From: Admin <cherednikova_any@mail.ru>';
        // Отправляем
        mail($to, $subject, $message, implode("\r\n", $headers));