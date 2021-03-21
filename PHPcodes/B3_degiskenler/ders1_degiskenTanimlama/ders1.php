<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type" content = "text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content = "tr">
    <meta charset="UTF-8">
    
    <title>b3d1</title>
</head>
<body>
<?php
    /*Değiken isimlendirme kuralları C ile aynı*/

    $isim = "Furkan Ekici <br/>";
    echo($isim);

    
    /////////////////////////////////////////////////////////////////////////
    $isim1 = "Furkan";
    $isim2 = $isim1;
    echo $isim2."<br/>"; // $isim 1 in içeriği yazdırılır;

    $soyisim = "Ekici";

    $birlestir = "Merhaba {$isim1} {$soyisim} nasılsın?";
    echo $birlestir;
    echo "<br/>";
    echo "<br/>";
    echo "<br/>";
    //////////////////////////////////////////////////////////////////////////
    echo "<strong>REFERANS İLE ATAMA</strong>";
    echo "<br/>";
    echo "<br/>";
    /* Referansla değer atama */
    $deger1 = "Furkan";
    $deger2 = $deger1;
    $deger1 = "Ekici";
    echo $deger2; //normalde deger2 üstte atandığı için deger1 in değişmesinden etkilenmez

    echo "<br/>";
    echo "<br/>";

    $deger1 = "Furkan";
    $deger2 = &$deger1;
    $deger1 = "Ekici";
    echo $deger2; //ama referans kullanırsak deger1 nerede değişirse değişsin deger2 onun içindekini alır.

    echo "<br/>";
    echo "<br/>";
    /////////////////////////////////////////////////////////////////////////////////////

    /* Değişken değikenleri (Garip bir konu) NAdir kullanılır*/

    $degisken = "xxx";

    $$degisken = "YYY"; //değişken değişkeni (asıl değişkenin değerini temsil eder)

    echo $xxx; //ouyput = YYY

    echo "<br/>";
    echo "<br/>";
    ////////////////////////////////////////////////////////////////////////////////////

    /* Değişkenleri birleştirme */

    $value1 = "Değişken";
    $value2 = "Birleştirme.";
    $value3 = 79;

    $birlestirildi = $value1 ." ". $value2 ." ". $value3;
    echo $birlestirildi;

    echo "<br/>";
    echo "<br/>";
    ///////////////////////////////////////////////////////////////////////////////////

    /*String indexlerine erişme*/

    $string = "Furkan Ekici";
    echo $string[2];

?>
    
</body>
</html>