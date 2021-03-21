<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type" content = "text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content = "tr">
    <meta charset="UTF-8">
    
    <title>b8d14_1</title>
</head>
<body>

<?php 
    //array_intersect() -> Birden fazla dizi içindeki aynı elemanları bulur ve bunlardan yeni bir dizi oluşturur. Anahtar değerleri korunur
    //(ilk yazdığımız dizinin anahtar değerleri korunur!!!)

    $dizi1 = array(87, 67, 82, 44, 10, 53, 94, 22);
    $dizi2 = array(11, 22, 33, 44, 55 );

    echo "<pre>";
    print_r($dizi1);
    echo "</pre>";

    echo "<pre>";
    print_r($dizi2);
    echo "</pre>";

    $ortaklar = array_intersect($dizi1, $dizi2);//22 ve 44 değerlerinin birinci dizideki anahtarları korunur

    echo "ORTAK ELEMANLARIN LİSTESİ :<pre>";
    print_r($ortaklar);
    echo "</pre>";

?>
    
</body>
</html>