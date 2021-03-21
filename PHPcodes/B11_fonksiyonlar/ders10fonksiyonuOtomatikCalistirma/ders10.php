<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type" content = "text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content = "tr">
    <meta charset="UTF-8">
    
    <title>b11d10</title>
</head>
<body>

<?php
    //normalde fonksiyonun çalışması için onu çağırmamız gerekiyordu fonk_ismi() şeklinde ama otomaik çalışmasını istersek şunları yapmamız gerekir : 

    ($oto_fonksiyon = function(){
        echo "Furkan Ekici<br>";
    })();
    //? böyle bir yapı kurarsak fonksiyonu çağırmamız gerekmez.

    
    
    // VEYA (geğer döndüren fonksiyonlar için)

    echo ($oto_fonksiyon2 = function(){
        return "Eren Ekici<br>";
    })();



    //!Parametre göndermek istersek

    ($oto_fonksiyon3 = function($deger1, $deger2){ // varsayılan parametre de yazabilirdik
        echo $deger1 . " " . $deger2;
    })("Fadime", "Ekici"); //TODO : buradaki parametreleri fonksiyona yollar

    
?>
    
</body>
</html>