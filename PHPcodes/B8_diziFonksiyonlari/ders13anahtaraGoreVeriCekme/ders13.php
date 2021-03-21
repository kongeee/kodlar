<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type" content = "text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content = "tr">
    <meta charset="UTF-8">
    
    <title>b8d13</title>
</head>
<body>

<?php 
    //array_column() -> verilen çok boyutlu dizinin aynı anahara sahip değerlerini tek bir dizide toplar

    $takimlar = array(array("Yil"=>"1903", "Isim"=>"Beşiktaş"), 
    array("Yil"=>"1905", "Isim"=>"Galatasaray"), array("Yil"=>"1907", "Isim"=>"Fenerbahçe"));//iki boyutlu dizi
    echo "<pre>";
    print_r($takimlar);
    echo "</pre>";

    $sonuc = array_column($takimlar, "Yil");//anahtarları Yil olan verileri çek ve yeni diziye aktar

    echo "Yil girildi :<br><pre>";
    print_r($sonuc);
    echo "</pre>";

    //Yil verisini key, Isim verisini de eleman yapabiliriz. Bunun için fonksiyonun son değeri olarak anahtar olacak eleman girilmeli

    $sonuc = array_column($takimlar, "Isim", "Yil");//iki veriyi de çek ismi değer yılı key yap

    echo "Isim ve Yil :<br><pre>";
    print_r($sonuc);
    echo "</pre>";

    

 

?>
    
</body>
</html>