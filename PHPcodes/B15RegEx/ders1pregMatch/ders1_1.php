<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type" content = "text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content = "tr">
    <meta charset="UTF-8">
    
    <title>B15d1_1 Preg Match</title>
</head>
<body>

<?php
    //preg_match() -> Belirtilen desene ait ilk eleman bulunduğunda bunu diziye kaydeder ve geri döndürür. 1. param : desen, 2.param : metin, 3. param : sonuç dizisi
   
    //preg_match_all ->Belirtilen desene ait tüm elemanları iki boyutlu bir dizi içine depolar

    //? desenler iki tane slash arasına yazılır.


    $metin = "Merhaba ben Furkan Ekici. Çukurova Üniversitesi'nde öğrenciyim. LinkedIn'de Furkan Ekici yazarak bana ulaşabilirsiniz.";
    $desen = "/Furkan/";

    preg_match($desen, $metin, $sonuc1); //TODO : metindeki desenleri bulup daha önce oluşturulmamış olan sonuc1 değişkenine ilk bulunan desene ekler ve durur(diğer uyan desenleri eklemez).

    preg_match_all($desen, $metin, $sonuc2); //TODO : metindeki desenleri bulup daha önce oluşturulmamış olan sonuc2 değişkenine tüm bulunan desenleri ekler.

    echo "Sonuç1 (preg_match) :<pre>";
    print_r($sonuc1);
    echo "</pre>";

    echo "Sonuç2 (preg_match_all) :<pre>";
    print_r($sonuc2);
    echo "</pre>";

    //!Genelde bu desen kullanıldığında metinde, bu desene uygun eleman var mı diye kontrol edilir. Yani yukarıdaki gibi yapmak yerine aşağıdaki gibi sonuc değişkeni dolu mu boş mu diye bakılır.

    if($sonuc1){
        echo "Desende yazılan altmetin, ana metinde vardır.";
    }else{
        echo "Desende yazılan altmetin, ana metinde yoktur.";
    }






?>

    
</body>
</html>