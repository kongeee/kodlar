<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type" content = "text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content = "tr">
    <meta charset="UTF-8">
    
    <title>b8d15_1</title>
</head>
<body>

<?php 
    //array_diff() -> Birden fazla dizi içindeki ortak olmayan elemanları bulur ve bunlardan yeni dizi oluşturur.
    //Bu fonkiyonda sadece ilk dizi baz alınır yani lk dizideki ortak olmayan elemanlar hesaba katılır.
    //anahtar değerleri korunur.

    $dizi1 = array(87, 67, 82, 44, 10, 53, 94, 22);
    $dizi2 = array(11, 22, 33, 44, 55 );

    echo "<pre>";
    print_r($dizi1);
    echo "</pre>";

    echo "<pre>";
    print_r($dizi2);
    echo "</pre>";

    $yeni = array_diff($dizi1, $dizi2);//22 ve 44 değerlerinin birinci dizideki anahtarları korunur

    echo "ORTAK OLMAYAN ELEMANLARIN LİSTESİ :<pre>";
    print_r($yeni);
    echo "</pre>";

?>
    
</body>
</html>