<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type" content = "text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content = "tr">
    <meta charset="UTF-8">
    
    <title>b8d33_1</title>
</head>
<body>

<?php 
    //ksort()  -> anahtarları küçükten büyüğe sıralar
    //krsort() -> anahtarları büyüksek küçüğe sıralar

    //! bunları bir değişkene atma... Bu fonksiyonlar direkt oalrak diziye etki eder. İşlem başarılı olursa 1 sonucunun dönderirler. Yani bunları bir değişkene atarsak ekranda sıralanmış diziyi değil 1 değerini dörürüz

    $dizi = array("Isim"=>"Furkan", "Yas"=>"23", "Soyad"=>"Ekici", "Okul"=>"ÇÜ"); //? anahtar kısmına sayısal değer versek de sıralar
    echo "Ana dizi : <pre>";
    print_r($dizi);
    echo "</pre>";

    ksort($dizi); //TODO : dizi anahtarlarını küçükten büyüğe sırala

    echo "Anahtarları küçükten büyüğe sıralanmış dizi : <pre>";
    print_r($dizi);
    echo "</pre>";

    krsort($dizi); //TODO : dizi anahtarlarını büyükten küçüğe sırala

    echo "Anahtarları büyükten küçüğe sıralanmış dizi : <pre>";
    print_r($dizi);
    echo "</pre>";



?>
    
</body>
</html>