<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type" content = "text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content = "tr">
    <meta charset="UTF-8">
    
    <title>b8d1</title>
</head>
<body>
<?php 

//count() ve sizoef() fonksiyonları dizi içindeki elemanları sayarlar.(ikisi de aynıdır)
//dizi içinde dizi varsa bunları saymak için COUNT_RECURSIVE kullanılır.

$dizi1 = array("Furkan","Eren","Aytein");

echo "<pre>";
print_r($dizi1);
echo "</pre>";

echo "count ile : " . count($dizi1) . " <br>sizeof ile : " . sizeof($dizi1);

///////////////////////////////////////////////////////////////////////////////

//çok boyutlu diziler için

$cok_boyutlu = array("Furkan",array("Mavi", "Kırmızı","Siyah",array("Sehpa", "Masa")),"Eren","Aytekin");
echo "<pre>";
print_r($cok_boyutlu);
echo "</pre>";

echo "no recursive : " . count($cok_boyutlu);//2. boyuttaki diziyi 1 eleman sayar. 3
//. boyuttaki diziyi hiç saymaz(1. boyuttaki dizinin elemanı değil)

echo "<br>";

echo "with recursive : " . count($cok_boyutlu, COUNT_RECURSIVE);//Burada normalde 8 gelmesini bekliyoruz çünkü 8 eleman var
//Ama 10 gelir. Çünkü içteki arrayler de(bütün olarak) birer eleman sayılırlar.



    


?>
    
</body>
</html>