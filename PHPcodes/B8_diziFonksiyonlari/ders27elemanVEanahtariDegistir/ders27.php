<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type" content = "text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content = "tr">
    <meta charset="UTF-8">
    
    <title>b8d27</title>
</head>
<body>

<?php 
    // array_flip() -> verilen dizinin anahtarları ve elemanlarını yer değiştirir(yani elemanları anahtar, anahtarları eleman yapar.)

    $dizi = array("Anahtar1"=>"Veri1", "Anahtar2"=>"Veri2", "Anahtar3"=>"Veri3", "Veri4", "Veri5" );
    echo "Ana dizi : <pre>";
    print_r($dizi);
    echo "</pre>";
    
    $sonuc = array_flip($dizi); //TODO : anahtarlar ve elemanları yer değiştirir ve yeni dizi oluşturur

    echo "Anahtar ve elemanları yer değiştirmiş dizi : <pre>";
    print_r($sonuc);
    echo "</pre>";
    
    
    
?>
    
</body>
</html>