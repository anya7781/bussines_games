<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="../css/grid.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/rd-mailform.css">
</head>

<script>
    function validation() {
        // var name =  document.getElementsByName('name')[0].value;
        // var exp1 = new RegExp('^[a-zA-Zа-яА-Я\.]{1,20}$');
        //
        // var phone = document.getElementsByName('phone')[0].value;
        // var exp2 = new RegExp('^((8|\\+7)[\\- ]?)?(\\(?\\d{3}\\)?[\\- ]?)?[\\d\\- ]{7,10}$');
        //
        // var res = true;
        //
        //
        //
        // if(phone.length > 0) {
        //     if (!exp2.test(phone)) {
        //         document.getElementsByClassName('phone_error_empty')[0].setAttribute('hidden', 'true');
        //         res = false;
        //         document.getElementsByClassName('phone_error')[0].removeAttribute('hidden');
        //     }
        //     else{
        //         document.getElementsByClassName('phone_error')[0].setAttribute('hidden', 'true');
        //         document.getElementsByClassName('phone_error_empty')[0].setAttribute('hidden', 'true');
        //     }
        // }
        //    if (res) $('#thanks').modal('show');
        //    return res;
    }


    function send_header(){
        var name = $("#name1").val();
        var phone = $("#phone1").val();
        var email = $("#email1").val();
        var source = "header";

        $.post('/handler.php', {name:name, phone:phone, email:email, source:source});
        $('#thanks').modal('show');
    }
</script>

<header>
    <section class="parallax parallax01">
        <div class="container">
            <div style = "border: 1px solid #FAFA05; padding: 15px; text-align:center; width: 230px; margin:auto;">
                <p style = "color: #FAFA05!important; font-size: 20px;"> Ближайшая игра: 24 марта в 17.00 </p>
            </div>
            <p class = "game-name"> ГЕНИЙ ФИНАНСОВ </p><br>
            <p class = "header-desc"> Игра-тренинг, которая формирует мышление богатого человека. </p>

            <div class="row">
                <div class="preffix_4 grid_4">
                    <fieldset>
                        <form onsubmit ="send_header(); return false;" class='rd-mailform'
                              method="post" style = "text-align: center;
                             font-family: 'CenturyGothicRegular',
                             sans-serif;
                             font-weight: bold;">
                            <p style = "color:#FAFA05; font-size:20px;">Запишись на первую игру!</p> <br>
                            <?php //include('timer.php'); ?>

                            <input type="hidden" name="form-type" value="contact"/>
                            <input id = "name1" type = "text" style = "width: 60%; height: 35px; border-radius: 20px; padding-left: 15px; color: #000" name = "name" placeholder="Имя" required>
                            <input id = "phone1" type = "text" style = "width: 60%; height: 35px; border-radius: 20px; padding-left: 15px; color:#000; margin-top:20px;" name = "phone" placeholder="+7 (ххх) хх хх ххх" required>
                            <p class = "form_errors phone_error" hidden> Формат телефона неверный.<br> Правильный формат: +7 (ххх) хх хх ххх </p>
                            <input id = "email1" type = "email" style = "width: 60%; height: 35px; border-radius: 20px; padding-left: 15px; color:#000; margin-top:20px;" name = "email" placeholder="Email" required>
                            <br>
                            <p style = "margin-top:15px; line-height:15px">
                                <input type = "checkbox" required>
                                <span style = "font-size:10px; color:#fff">Нажимая на кнопку "Хочу на игру",
                        я даю согласие на <a style = "color:#71C5FA;" href="https://xn--152-1dd8d.xn--p1ai/get_prv/89912d89f9aa01cc92fbd92361ed8660" id="fz_privacy">обработку персональных данных </a>.</span></p>
                            <input data-toggle="modal" data-target="" class = "valid-button" value = "Хочу на игру!"  type = "submit" style = "background-color: #FAFA05; color: #000; margin-top: 15px; padding: 10px 15px 10px 15px; border-radius: 20px; font-size: 18px;">
                        </form>
                    </fieldset>
                </div>
            </div>
        </div>
    </section>
</header>



