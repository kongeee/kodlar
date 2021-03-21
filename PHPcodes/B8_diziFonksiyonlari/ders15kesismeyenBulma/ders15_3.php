<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type" content = "text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content = "tr">
    <meta charset="UTF-8">
    
    <title>b8d15_3</title>
</head>
<body>

<?php 
    //array_intersect_assoc() -> Birden fazla dizi içindeki keyi ve değeri aynı olanları bulur ve bunlardan yeni bir dizi oluşturur. 
    
    $dizi1 = array("meyve"=>"armut", "sebze"=>"pırasa", "hayvan"=>"kedi", "arac"=>"gemi", "isim"=>"ekici");
    $dizi2 = array("meyve"=>"armut", "esya"=>"sehpa", "hayvan"=>"köpek", "arac"=>"gemi");

    echo "<pre>";
    print_r($dizi1);
    echo "</pre>";

    echo "<pre>";
    print_r($dizi2);
    echo "</pre>";

    $yeni = array_diff_assoc($dizi1, $dizi2);

    echo "ORTAK OLMAYAN ANAHTARLAR VE ELEMAN İKİLİLERİNİN LİSTESİ :<pre>";
    print_r($yeni);
    echo "</pre>";

?>
    
</body>
</html>