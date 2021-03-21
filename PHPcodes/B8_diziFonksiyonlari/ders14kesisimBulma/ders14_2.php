<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type" content = "text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content = "tr">
    <meta charset="UTF-8">
    
    <title>b8d14_2</title>
</head>
<body>

<?php 
    //array_intersect_key() -> Birden fazla dizi içindeki aynı keyleri bulur ve bunlardan yeni bir dizi oluşturur. Bunlar anahtar olarak
    //kalır ve değerlerini ilk dizinin elemanlarından alır.

    $dizi1 = array("meyve"=>"elma", "sebze"=>"pırasa", "hayvan"=>"kedi");
    $dizi2 = array("meyve"=>"armut", "esya"=>"sehpa","hayvan"=>"köpek", "arac"=>"gemi");

    echo "<pre>";
    print_r($dizi1);
    echo "</pre>";

    echo "<pre>";
    print_r($dizi2);
    echo "</pre>";

    $ortaklar = array_intersect_key($dizi1, $dizi2);

    echo "ORTAK ANAHTARLARIN LİSTESİ :<pre>";
    print_r($ortaklar);
    echo "</pre>";

?>
    
</body>
</html>