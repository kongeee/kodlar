<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type" content = "text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content = "tr">
    <meta charset="UTF-8">
    
    <title>b7d6</title>
</head>
<body>

<?php
    $cok_boyutlu_dizi = array("Furkan", array("Kalem", "Silgi"), "Ekici", "deneme");

    echo "<pre>";
    print_r($cok_boyutlu_dizi);
    echo "</pre>";

    //Bunun elemanlarını tek tek almak istersek (C ile aynı mantık)

    echo $cok_boyutlu_dizi[0] . "<br>";
    echo $cok_boyutlu_dizi[1][0] . "<br>"; // ikinci boyuta geçtik (içteki arraye).
    echo $cok_boyutlu_dizi[1][1] . "<br>";
    echo $cok_boyutlu_dizi[2] . "<br>";
    echo $cok_boyutlu_dizi[3] . "<br>";
    
    
?>
    
</body>
</html>