<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type" content = "text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content = "tr">
    <meta charset="UTF-8">
    
    <title>b8d14_3</title>
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

    $ortaklar = array_intersect_assoc($dizi1, $dizi2);

    echo "ORTAK ANAHTARLAR VE ELEMAN İKİLİLERİNİN LİSTESİ :<pre>";
    print_r($ortaklar);
    echo "</pre>";

?>
    
</body>
</html>