<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type" content = "text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content = "tr">
    <meta charset="UTF-8">
    
    <title>b8d10</title>
</head>
<body>

<?php 
    //array_slice() -> verilen diziyi belirtilen indisten böler

    $anaDizi = array("Furkan","Eren","Ayşe","Aytekin","Fadime");

    echo "<pre>";
    print_r($anaDizi);
    echo "</pre>";

    $bolunenDizi = array_slice($anaDizi, 1, 2); //anadiziyi birinci indisten başlayarak toplam iki eleman olacak şekilde böl

    echo "<pre>";
    print_r($bolunenDizi);//Görülrüğü gibi burda önceki anahtarlar korunmadı yeniden anahtar atandı bu anahtarları korumak için
    echo "</pre>";        //array_slice() fonksiyonuna son parametere olarak true verilmeli**************

    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    $anaDizi = array("A1" =>"Furkan","A2" =>"Eren","A3" =>"Ayşe","A4" =>"Aytekin","A5" =>"Fadime");

    echo "<pre>";
    print_r($anaDizi);
    echo "</pre>";

    $bolunenDizi = array_slice($anaDizi, 1, 2); //anadiziyi birinci indisten başlayarak toplam iki eleman olacak şekilde böl

    echo "<pre>";
    print_r($bolunenDizi);//Görülrüğü gibi burda önceki anahtarlar korunur.
    echo "</pre>";        






?>
    
</body>
</html>