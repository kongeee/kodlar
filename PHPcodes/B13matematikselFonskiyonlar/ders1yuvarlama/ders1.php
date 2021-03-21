<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type" content = "text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content = "tr">
    <meta charset="UTF-8">
    
    <title>B13d1</title>
</head>
<body>

<?php
    //sayı = 3.4 olsun
    //ceil() ->Yukarıya yuvarla (Sonuç 4)
    //floor() -> Aşağıya yuvarla (Sonuç 3)
    //round() -> Bildiğimiz yuvarlama (sonuç 3)

    $sayi = 3.4;
    echo "orijinal sayı = " . $sayi . "<br>";
    echo "ceil = " . ceil($sayi) . "<br>";
    echo "floor = " . floor($sayi) . "<br>";
    echo "round = " . round($sayi) . "<br>";

    $sayi2 = 12345;

    echo "<br><br>" . $sayi2 ."<br>";

    echo "Sondan 2 basamağına göre yuarlanmış hali : " . round($sayi2, -2); //TODOD : sondan 2. basamağına göre yuvarlar

?>
    
</body>
</html>