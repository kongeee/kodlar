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
    //array_replace_recursive() -> çok boyutlu dizilerde içteki elenaları da replace işlemine tabi tutar 

    $dizi1 = array(array("At", "Eşek"), array("İnek","Koyun"), "Köpek", "Kedi");
    $dizi2 = array(array("Elma"), array("Armut", "Kavun"));

    echo "<pre>";
    print_r($dizi1);
    echo "</pre> <br>";

    echo "<pre>";
    print_r($dizi2);
    echo "</pre> <br>";

    $sonuc = array_replace($dizi1, $dizi2);

    echo "Array_Replace kullanıldı :(birinci dizinin içindeki ilk dizi 2 elemana sahip ama ikinci dizinin içindeki  ilk dizi tek elemana sahip Sonucun içindeki ilk dizinin de iki elemanlı olması beklenir ama tek elemanlıdır)<pre>";
    print_r($sonuc);
    echo "</pre> <br>###############################################################################################################";


    $dizi1 = array(array("At", "Eşek"), array("İnek","Koyun"), "Köpek", "Kedi");
    $dizi2 = array(array("Elma"), array("Armut", "Kavun"));

    echo "<pre>";
    print_r($dizi1);
    echo "</pre> <br>";

    echo "<pre>";
    print_r($dizi2);
    echo "</pre> <br>";

    $sonuc = array_replace_recursive($dizi1, $dizi2);

    echo "Array_Replace_Recursive kullanıldı :(yukarıdaki durum giderildi ve içteki diziler için de recursive uygulandı)<pre>";
    print_r($sonuc);



?>
    
</body>
</html>