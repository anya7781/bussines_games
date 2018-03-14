<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="../css/grid.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/rd-mailform.css">
</head>

<script>
    function validation() {
     var name =  document.getElementsByName('name')[0].value;
     var exp1 = new RegExp('^[a-zA-Zа-яА-Я\.]{1,20}$');

     var phone = document.getElementsByName('phone')[0].value;
     var exp2 = new RegExp('^((8|\\+7)[\\- ]?)?(\\(?\\d{3}\\)?[\\- ]?)?[\\d\\- ]{7,10}$');

     var res = true;


     if(name.length == 0){
         document.getElementsByClassName('name_error_empty')[0].removeAttribute('hidden');
         res = false;
     }
     else {
         if (!exp1.test(name)) {
             document.getElementsByClassName('name_error_empty')[0].setAttribute('hidden', 'true');
             res = false;
             document.getElementsByClassName('name_error')[0].removeAttribute('hidden');
         }
         else{
             document.getElementsByClassName('name_error')[0].setAttribute('hidden', 'true');
             document.getElementsByClassName('name_error_empty')[0].setAttribute('hidden', 'true');
         }
     }


     if(phone.length == 0){
            document.getElementsByClassName('phone_error_empty')[0].removeAttribute('hidden');
            res = false;
     }
     else {
         if (!exp2.test(phone)) {
             document.getElementsByClassName('phone_error_empty')[0].setAttribute('hidden', 'true');
             res = false;
             document.getElementsByClassName('phone_error')[0].removeAttribute('hidden');
         }
         else{
             document.getElementsByClassName('phone_error')[0].setAttribute('hidden', 'true');
             document.getElementsByClassName('phone_error_empty')[0].setAttribute('hidden', 'true');
         }
     }
        if (res) $('#thanks').modal('show');
        return res;
    }


    function send_header(){
        var name = $("#name1").val();
        var phone = $("#phone1").val();
        var source = "header";

       $.post('/handler.php', {name:name, phone:phone, source:source});
    }
    </script>

<header>
    <section class="parallax parallax01">
        <div class="container">
            <div style = "border: 1px solid #FAFA05; padding: 15px; text-align:center; width: 230px; margin:auto;">
                <p style = "color: #FAFA05!important; font-size: 20px;"> Ближайшая игра: 17 марта в 17.00 </p>
            </div>
            <p class = "game-name"> ГЕНИЙ ФИНАНСОВ </p><br>
            <p style = "color: #fff!important; font-size: 30px; margin-top:30px;"> Игра-тренинг, которая преобразует мышление бедного человека в мышление богатого </p>

            <div class="row">
                <div class="preffix_4 grid_4">
                    <form onsubmit ="send_header(); return false;" class='rd-mailform' method="post" action="../handler.php" style =
                            "text-align: center;
                             font-family: 'CenturyGothicRegular',
                             sans-serif;
                             font-weight: bold;">
                        <input type="hidden" name="form-type" value="contact"/>
                        <fieldset>
                            <p style = "color:#FAFA05; font-size:20px;">Запишись на первую игру!</p> <br>

                            <?php //include('timer.php'); ?>

                            <input id = "name1" type = "text" style = "width: 60%; height: 40px; border-radius: 20px; padding-left: 15px; color: #000" name = "name" placeholder="Имя">
                            <p class = "form_errors name_error" hidden> Формат имени неверный. <br> Запрещено использование цифр, тегов и пробелов </p>
                            <p class = "form_errors name_error_empty" hidden> Данное поле не может быть пустым </p>
                            <input id = "phone1" type = "text" style = "width: 60%; height: 40px; border-radius: 20px; padding-left: 15px; color:#000; margin-top:30px;" name = "phone" placeholder="+7 (ххх) хх хх ххх">
                            <p class = "form_errors phone_error" hidden> Формат телефона неверный.<br> Правильный формат: +7 (ххх) хх хх ххх </p>
                            <p class = "form_errors phone_error_empty" hidden> Данное поле не может быть пустым </p>

                            <br> <br>
                            <input data-toggle="modal" data-target="" class = "valid-button" value = "Хочу на игру!" onclick="return validation()" type = "submit" style = "background-color: #FAFA05; color: #000; margin-top: 15px; padding: 10px 15px 10px 15px; border-radius: 20px; font-size: 18px;">
                        </fieldset>
                      </form>
                </div>
            </div>
        </div>
    </section>
</header>



