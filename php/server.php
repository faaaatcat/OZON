<?php
$text1 = $_GET["c"];
$file = fopen("x.txt", "a+"); //открываем файл для дозаписи
fwrite($file, $text1); //объединяем строки с помощью точки(в php это так делается)
fclose($file);
?>