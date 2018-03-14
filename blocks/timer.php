<?php
    $curday = date('d.m.Y h:i:s');
    $gameday = "17.03.2018 17:0:0";

    $d1 =  strtotime($gameday);
    $d2 = strtotime($curday);

//    if ($d1 - $d2 < 200){
//        $d1 = $d2 + 10000;
//    }

    $diff = $d1 - $d2;
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="../compiled/flipclock.css">
        <script src="../compiled/flipclock.js"></script>
    </head>

        <body>
            <div class="clock" style="margin:2em;"></div>
            <div class="message"></div>
            <input type="button" style = "position: absolute; visibility: hidden" id = "hidden-time" value="<?php echo $diff;  ?>">

            <script type="text/javascript">
                var clock;

                $(document).ready(function() {
                    var clock;

                    clock = $('.clock').FlipClock({
                        clockFace: 'DailyCounter',
                        autoStart: false,
                        callbacks: {
                            stop: function() {
                                $('.message').html('Событие уже прошло!')
                            }
                        }
                    });

                    var time1 = document.getElementById('hidden-time').value;

                    clock.setTime(time1);
                    clock.setCountdown(true);
                    clock.start();

                });
            </script>
        </body>
</html>