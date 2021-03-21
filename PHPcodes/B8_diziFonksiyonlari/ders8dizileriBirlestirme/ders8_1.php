<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type" content = "text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content = "tr">
    <meta charset="UTF-8">
    
    <title>b8d8_1</title>
</head>
<body>

<?php 
    //array_merge() -> Verilen dizileri birleştirip yeni dizi yapar.
    //Eğer tüm anahtarlar sayısalsa hiçbir sıkıntı yok
    //Ama sayısal olmayan bir anahtar 2 dizide de varsa sonraki merge edilenin değerini alır diğerini/diğerlerini siler.

    $array1 = array("Furkan", "Eren", "Aytekin");
    $array2 = array("Sarı", "Yeşil", "Kımızı", "Mavi", "Mor");

    $birlestirildi = array_merge($array1, $array2); //2 den fazla dizi de merge edilebilir

    echo "<pre>";
    print_r($birlestirildi);
    echo "</pre>";

    //Aynı anahtara sahip olan elemanlar olsaydı

    $array1 = array("Eleman1"=>"Furkan", "Eren", "Eleman2"=>"Aytekin");
    $array2 = array("Sarı", "Eleman1"=>"Yeşil", "Eleman2"=>"Kırmızı", "Eleman3"=>"Mavi", "Mor");

    $birlestirildi1 = array_merge($array1, $array2); 

    echo "<pre>";
    print_r($birlestirildi1);
    echo "</pre>";



?>
    
</body>
</html>