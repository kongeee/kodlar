<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type" content = "text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content = "tr">
    <meta charset="UTF-8">
    
    <title>b8d16_1</title>
</head>
<body>

<?php 
    //array_replace() -> Eğer anahtarlar aynıysa ikinci dizideki elemanları birinci dizide o anahtara karşılık gelen elemanla değiştirir
    //tek boyutlu dizilerde kullanılır.

    $anahtarsiz1 = array("At", "Eşek", "İnek", "Köpek", "Kedi");
    $anahtarsiz2 = array("Elma", "Armut", "Kavun");

    echo "<pre>";
    print_r($anahtarsiz1);
    echo "</pre> <br>";

    echo "<pre>";
    print_r($anahtarsiz2);
    echo "</pre> <br>";

    $sonuc = array_replace($anahtarsiz1, $anahtarsiz2);//Elma armut ve kavun birinci dizideki at eşek inek yerine geçer
    //birinci dizideki geriye kalan elemanlar korunur.

    echo "Array_Replace kullanıldı :(Anahtarları aynı olan birinci dizi elemanları yerine ikinci dizi elemanları getirildi)<pre>";
    print_r($sonuc);
    echo "</pre> <br>###############################################################################################################";


    $anahtarli1 = array("hayvan1"=>"At", "hayvan2"=>"Eşek", "hayvan3"=>"İnek", "hayvan4"=>"Köpek", "hayvan5"=>"Kedi");
    $anahtarli2 = array("meyve1"=>"Elma", "meyve2"=>"Armut", "meyve3"=>"Kavun");

    echo "<pre>";
    print_r($anahtarli1);
    echo "</pre> <br>";

    echo "<pre>";
    print_r($anahtarli2);
    echo "</pre> <br>";

    $sonuc2 = array_replace($anahtarli1, $anahtarli2);//Birinci ve ikinci dizide aynı olan anahtarlar yok bundan dolayı
    //iki dizinin de tüm elemanları yazılır
    echo "Array_Replace kullanıldı :(Aynı anahtar olamdığından tüm elemanlar yazıldı aynı anahtar olsaydı birinci dizideki eleman yerine aynı anahtara sahip ikinci dizi elemanı yazılırdı)<pre>";
    print_r($sonuc2);
    echo "</pre> <br>";


/*array_replace içine 3 dizi yazılsaydı en uzun dizinin eleman sayısı kadar eleman olurdu.Örn: 

dizi1 : ######
dizi2 : ++++
dizi3 : $$$

bunlar sırayla array_replace() fonksiyonuna sokulursa sonuc:

$$$+##

Örneğin 0. indis için birinci dizide # oluyor, ikinci dizideki 0. indis + olduğu için bu güncellendi, üçüncü dizide 0. indis $ olduğu
için tekrar güncellendi ve son değer oalrak 0. indis $ olarak kaldı. Diğerlerine de bu işlem yapıldı.


*/
?>
    
</body>
</html>