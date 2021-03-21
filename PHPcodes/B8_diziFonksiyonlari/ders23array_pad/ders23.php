<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type" content = "text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content = "tr">
    <meta charset="UTF-8">
    
    <title>b8d23</title>
</head>
<body>

<?php 
    // array_pad() -> verilen diziyi belirtilen eleman sayısına çıkarır ve verilen değerle doldurur. ilk param dizi, ikinci param yeni boyut (+ verilirse sona, - verilirse başa ekler), üçüncü param doldurulacak(eklenecek) eleman
    //! anahtarlar korunur

    $renkler = array("A1"=>"Mavi", "Yeşil", "Turuncu");
    echo "Ana dizi :<pre>";
    print_r($renkler);
    echo "</pre> <br> <br>";

    $sona_ekle = array_pad($renkler, 7, "Siyah"); //TODO : renkler dizisinin boyutunu 7'ye çıkar ve yeni elemanların hepsinin değerini siyah yap (sona ekler)
    echo "Sona eleman ekle(siyah) :<pre>";
    print_r($sona_ekle);
    echo "</pre> <br> <br>";

    $basa_ekle = array_pad($renkler, -5, "Beyaz"); //TODO : renkler dizisinin boyutunu 5'e çıkar ve yeni elemanların hepsinin değerini beyaz yap (başa ekler)
    echo "Başa eleman ekle(beyaz) :<pre>";
    print_r($basa_ekle);
    echo "</pre> <br> <br>";


    
?>
    
</body>
</html>