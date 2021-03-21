<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type" content = "text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content = "tr">
    <meta charset="UTF-8">
    
    <title>b8d2</title>
</head>
<body>
<?php 

//array_unshift : dizinin başına eleman veya elemanlar eklemek için kullanılır.
//array_push    : dizinin sonuna eleman veya elemanlar eklemek için kullanılır.

//Her iki fonksiyon da, elemean eklendikten sonraki arrayin boyutunu int olarak döner.
//Bu fonksiyonları kullarak ekleme yaparken KEY veremiyoruz!!!!!!!!!

$dizi = array("Furkan","Eren");

echo "<pre>";
print_r($dizi);
echo "</pre>";

$son_boyut = array_unshift($dizi, "Ayşe", "Aytekin", "Fadime"); // başa eleman ekler (eklendikten sonraki eleman sayısını döndürür)

echo "<pre>";
print_r($dizi);
echo "</pre>";
echo "Son eklemeden sonraki dizi boyutu : " . $son_boyut . "<br>";

//////////

$son_boyut = array_push($dizi, "Ahmet", "Mehmet"); // sona eleman ekler (eklendikten sonraki eleman sayısını döndürür)

echo "<pre>";
print_r($dizi);
echo "</pre>";

echo "Son eklemeden sonraki dizi boyutu : " . $son_boyut . "<br>**************************************************************";

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//Bu işlemleri çok boyutlu diziler için de yapabiliriz.

$yiyecekler = array("Pilav", "Yoğurt", array("Elma","Armut"), "Turşu");

echo "<pre>";
print_r($yiyecekler);
echo "</pre>";

array_push($yiyecekler, array("Turp", "Ispanak", "Brokoli"));//ana dizinin sonuna bir iç dizi ekledik

echo "<pre>";
print_r($yiyecekler);
echo "</pre>";

array_unshift($yiyecekler[2], "Muz","Şeftali"); //içteki dizinin başına elemanlar ekledik sonuçta yiyecekler[2] de bir dizi

echo "<pre>";
print_r($yiyecekler);
echo "</pre>";


?>
    
</body>
</html>