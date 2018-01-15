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
        return res;
    }
    </script>

<header>
    <section class="parallax parallax01">
        <div class="container">
            <div class = "header_text">
                <h2>ТЕРРИТОРИЯ РОСТА |</h2>
                <p><em>Центр игр по развитию финансового мышления <br> в Краснодаре</em></p>
            </div>
            <div class="row">
                <div class="preffix_4 grid_4">
                    <form class='rd-mailform' method="post" action="../handler.php" style =
                            "text-align: center;
                             font-family: 'CenturyGothicRegular',
                             sans-serif;
                             font-weight: bold;">
                        <input type="hidden" name="form-type" value="contact"/>
                        <fieldset>
                            <p style = "color:#FAFA05; font-size:20px;">Скидка на первую игру 50%</p> <br>

                            <?php include('timer.php'); ?>

                            <input type = "text" style = "width: 60%; height: 40px; border-radius: 20px; padding-left: 15px; color: #000" name = "name" placeholder="Имя">
                            <p class = "form_errors name_error" hidden> Формат имени неверный. <br> Запрещено использование цифр и тегов </p>
                            <p class = "form_errors name_error_empty" hidden> Данное поле не может быть пустым </p>
                            <input type = "text" style = "width: 60%; height: 40px; border-radius: 20px; padding-left: 15px; color:#000; margin-top:30px;" name = "phone" placeholder="+7 (ххх) хх хх ххх">
                            <p class = "form_errors phone_error" hidden> Формат телефона неверный.<br> Правильный формат: +7 (ххх) хх хх ххх </p>
                            <p class = "form_errors phone_error_empty" hidden> Данное поле не может быть пустым </p>

                            <br> <br>
                            <button class = "valid-button" onclick="return validation()" type = "submit" style = "background-color: #FAFA05; color: #000; margin-top: 15px; padding: 10px 15px 10px 15px; border-radius: 20px; font-size: 18px;"> Хочу на игру! </button>
                        </fieldset>
                      </form>
                </div>
            </div>
        </div>
    </section>
</header>



