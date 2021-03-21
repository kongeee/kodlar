<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type" content = "text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content = "tr">
    <meta charset="UTF-8">
    
    <title>b7d5</title>
</head>
<body>

<?php
    //Birden fazla diziyi + operatörü ile birleştirip yeni bir diziye aktarabiliriz.
    //Anahtarı ayı olan elemanlar varsa önceki dizideki nahtar baz alınır.

    $dizi1 = array("Furkan","Eren");
    $dizi2 = array("Mavi","Sarı","Mor");

    $sonuc = $dizi1 + $dizi2; // her iki dizi de de anahtar aynı olan değerler var 0(sıfır) anahtarı için Furkan baz alınır
    //ve Mavi ile Sarı değerleri kaybolur

    echo "<pre>";
    print_r($sonuc);
    echo "</pre>";

    //Bunu düzeltmek için her değişkene bir key değeri verilebilir.(Hiçbir değer kaybolmaz)

    $dizi3 = array("isim1"=>"Furkan","isim2"=>"Eren");
    $dizi4 = array("deniz"=>"Mavi","gunes"=>"Sarı","lavanta"=>"Mor");

    $sonuc2 = $dizi3 + $dizi4;

    echo "<pre>";
    print_r($sonuc2);
    echo "</pre>";


    
    
?>
    
</body>
</html>