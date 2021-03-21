<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type" content = "text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content = "tr">
    <meta charset="UTF-8">
    
    <title>b8d21</title>
</head>
<body>

<?php 
    //compact() -> içine bi dizi verilmişse bu dizinin elemanlarını anahtar olarak kabul edip, yeni ahatarlarla aynı ismi sahip değişken varsa bunalrın değerini dizinin değeri yapıyor. Eğer sadece compact içine yazılmışsa bir takım şeyler, bunları anahtar kabul edip yine bu anahtarlarla aynı isimde değişken varsa onların değerini kendi değeri yapıp diziye dönüştürüyor.

    $isim = "Furkan";
    $soyad = "Ekici";
    $dogum = "1997";

    $dizi = array("isim", "soyad", "dogum");
    $sonuc_dizi = compact($dizi); //TODO : dizi nin elemanlarını anahtar yaptı. Eğer bu anahtar isimleriyle aynı isme sahip bir değişken varsa bunun değerini dizinin değerine dönüştürdü ["isim"] => "Furkan" yaptı yani

    echo "Compact dizi kullanıldı :<pre>";
    print_r($sonuc_dizi);
    echo "</pre> <br> <br>";

    //? veya herhangi bir diziye ihtiyaç duyulmadan şu şekilde yapılabilir

    $sonuc_compact = compact("isim", "soyad", "dogum"); //!değişken isimleriyle aynı isimde olmalılar

    echo "Sadece compact ifadesi kullanıldı :<pre>";
    print_r($sonuc_dizi);
    echo "</pre> <br> <br>";


    

?>
    
</body>
</html>