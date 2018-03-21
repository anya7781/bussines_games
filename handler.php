<?php

$link = mysql_connect('localhost', 'crimeabiru_genue', 'Kerriwalsh97');
mysql_select_db('crimeabiru_genue');


if (isset($_POST['source'])){
    $source = $_POST['source'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $date = date('y-m-s H:i:s');
    $email = $_POST['email'];

    $query = 'INSERT INTO User (name, phone, date, source, email) VALUES ("'.$name.'", 
                            "'.$phone.'","'.$date.'","'.$source.'","'.$email.'")';
    mysql_query($query);

    if ($source != "present"){
        $to = $email;
        // тема письма
        $subject = 'Игра-тренинг Гений финансов';
        // текст письма
        $message = '<p>Здравствуйте, '.$name.'! </p>
                    <p> Мы очень рады, что Вы проявили интерес к нашему мероприятию.</p>
                    <p> Ждем Вас на игре-тренинге <span style = "font-weight: bold">24 марта в 17.00
                    </span> по адресу <span style = "font-weight: bold">ул. Северная 400, офис 405 </span></p>
                    <p> Если Ваши планы изменятся, просьба предупредить. </p>
                    <p> По любым вопросам звоните: </p>
                    <p> Анна +7 (918) 314-17-28 </p>
                    <p> До встречи на мероприятии!</p>
                    ';
        $headers = 'Content-type: text/html; charset = utf-8' . "\r\n";
        $headers .= 'From: Клуб "Финансовая свобода" <AlinaBuriy@gmail.com>';
        mail($to, $subject, $message, $headers);
    }

    $to = $email;
    // тема письма
    $subject = 'Игра-тренинг Гений финансов';
    // текст письма
    $message = '<div style = "text-align: center"><p>Здравствуйте, '.$name.'! </p>
                    <p>Предлагаем Вашему вниманию <span style="font-weight:bold;"> 8 правил частного инвестора </span> от Бизнес Тренера по финансовому развитию
                    Личности и профессионального инвестора Андрея Ховратова!</p><br>
                    
                    <p style="font-weight:bold;">1. Финансовая свобода и финансовая независимость - в чем различие?</p>
                    <a target="_blank" href = "https://www.youtube.com/watch?v=nQbfAONL3-o" > Смотреть видео </a> 
                    
                    <p style="font-weight:bold;">2. Что такое Активы и чем они отличаются от Пассивов </p>
                     <a target="_blank" href = "https://www.youtube.com/watch?v=GBiKdS3KEa4"> Смотреть видео </a> 
                     
                     <p style="font-weight:bold;">3. Что такое Инвестирование и в чем отличие от Инвестиций. Хоть слова и похожи, но суть разная. </p>
                     <a target="_blank" href = "https://www.youtube.com/watch?v=PyiVBlk8JAs"> Смотреть видео </a> 
                     
                     <p style="font-weight:bold;">4. Финансовые Планы. За сколько лет ты создашь Активы более 1’000’000$ </p>
                     <a target="_blank" href = "https://www.youtube.com/watch?v=SmwU37jPSlI"> Смотреть видео </a> 
                     
                     <p style="font-weight:bold;">5. Почему необходимо заниматься инвестированием. Не держи все яйца в одной корзине. </p>
                     <a target="_blank" href = "https://www.youtube.com/watch?v=TpD-4YnmbGY"> Смотреть видео </a> 
                     
                     <p style="font-weight:bold;">6.Золотые правила частного инвестора: Соблюдай инвестиционную дисциплину; Не будь жадным — жадность ведет к разорению. </p>
                     <a target="_blank" href = "https://www.youtube.com/watch?v=vNEE4aJqs9U"> Смотреть видео </a> 
                     
                     <p style="font-weight:bold;">7. Обучение - инвестиции в обучение является самой высокодоходной инвестицией </p>
                     <a target="_blank" href = "https://www.youtube.com/watch?time_continue=1&v=nD8OrDsSUnE"> Смотреть видео </a> 
                     
                     <p style="font-weight:bold;">8. Всегда Увеличивай свои капиталы </p>
                     <a target="_blank" href = "https://www.youtube.com/watch?time_continue=1&v=sJTLkiaBi5I"> Смотреть видео </a> 
                     </div>
                
                     <p> Приятного просмотра! </p> <br><br>
                     <p> Знания, полученные на этих видео, вы можете применить на игре-тренинге "Гений финансов". </p>
                     <p> Оставляйте заявку на <a href = "http://fin-freedom.club/">сайте </a> и развивайтесь вместе с нами! </p>
                      <br><br>
                      <p> По любым вопросам звоните: </p>
                      <p> Анна +7 (918) 314-17-28 </p>
                    ';
    $headers = 'Content-type: text/html; charset = utf-8' . "\r\n";
    $headers .= 'From: Клуб "Финансовая свобода" <AlinaBuriy@gmail.com>';
    mail($to, $subject, $message, $headers);


    /*Mail to me*/
    // // несколько получателей
    $to = 'cherednikova_any@mail.ru, cherednikova.any@gmail.com';
    // тема письма
    $subject = 'Новая заявка| Гений финансов';
    // текст письма
    $message = '<p>Вам пришла новая заявка:</p>
                            <p>Имя:'.$name.'</p> <p>Телефон:'.$phone.'</p> <p> Источник:'.$source.' </p>';
    // Для отправки HTML-письма должен быть установлен заголовок Content-type
    $headers = 'Content-type: text/html; charset = utf-8' . "\r\n";
    $headers .= 'From: Клуб "Финансовая свобода" <AlinaBuriy@gmail.com>';
    mail($to, $subject, $message, $headers);
}
