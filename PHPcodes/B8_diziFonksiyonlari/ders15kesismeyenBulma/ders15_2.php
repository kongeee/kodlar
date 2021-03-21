<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type" content = "text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content = "tr">
    <meta charset="UTF-8">
    
    <title>b8d15_2</title>
</head>
<body>

<?php 
    //array_diff_key() -> Birden fazla dizi içindeki farklı keyleri bulur ve bunlardan yeni bir dizi oluşturur.
    //yine birinci dizi baz alınır.

    

    $dizi1 = array("meyve"=>"elma", "sebze"=>"pırasa", "hayvan"=>"kedi");
    $dizi2 = array("meyve"=>"armut", "esya"=>"sehpa","hayvan"=>"köpek", "arac"=>"gemi");

    echo "<pre>";
    print_r($dizi1);
    echo "</pre>";

    echo "<pre>";
    print_r($dizi2);
    echo "</pre>";

    $yeni = array_diff_key($dizi1, $dizi2);

    echo "ORTAK OLMAYAN ANAHTARLARIN LİSTESİ :<pre>";
    print_r($yeni);
    echo "</pre>";

?>
    
</body>
</html>