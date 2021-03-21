<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type" content = "text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content = "tr">
    <meta charset="UTF-8">
    
    <title>b8d33_2</title>
</head>
<body>

<?php 
    //sort()  -> elemanları küçükten büyüğe sıralar (anahtarlar korunmaz)
    //krsort() -> elemanları büyüksek küçüğe sıralar (anahtarlar korunmaz)
    //asort()  -> elemanları küçükten büyüğe sıralar (anahtarlar korunur)
    //arsort() -> elemanları büyüksek küçüğe sıralar (anahtarlar korunur)

    //! bunları bir değişkene atma... Bu fonksiyonlar direkt oalrak diziye etki eder. İşlem başarılı olursa 1 sonucunun dönderirler. Yani bunları bir değişkene atarsak ekranda sıralanmış diziyi değil 1 değerini dörürüz

    $dizi = array("Isim"=>"Furkan", "Yas"=>"23", "Soyad"=>"Ekici", "Okul"=>"ÇÜ", "Numara"=>"2017555017"); 
    echo "Ana dizi : <pre>";
    print_r($dizi);
    echo "</pre>";

    sort($dizi); //TODO : dizi elamnları küçükten büyüğe sırala (anahtar korumadan)

    echo "elemanları küçükten büyüğe sıralanmış dizi(anahtar korunmadı) : <pre>";
    print_r($dizi);
    echo "</pre>";

    rsort($dizi); //TODO : dizi anahtarlarını büyükten küçüğe sırala

    echo "elemanları büyükten küçüğe sıralanmış dizi(anahtar korunmadı) : <pre>";
    print_r($dizi);
    echo "</pre>";
    
    //?-----------------------------------------------------------------------------------------------------
    
    
    $dizi = array("Isim"=>"Furkan", "Yas"=>"23", "Soyad"=>"Ekici", "Okul"=>"ÇÜ", "Numara"=>"2017555017");//? bu fonskyionlar direkt olarak dizinin yapısını değiştirdiği için (yukarıda anahtarlar koyunmadığı için kayboldu) tekrar yazmamız gerekiyor
    asort($dizi); //TODO : dizi elamnları küçükten büyüğe sırala (anahtar korumadan)

    echo "elemanları küçükten büyüğe sıralanmış dizi(anahtar korundu) : <pre>";
    print_r($dizi);
    echo "</pre>";

    arsort($dizi); //TODO : dizi anahtarlarını büyükten küçüğe sırala

    echo "elemanları büyükten küçüğe sıralanmış dizi(anahtar korundu) : <pre>";
    print_r($dizi);
    echo "</pre>";



?>
    
</body>
</html>