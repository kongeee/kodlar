<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type" content = "text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content = "tr">
    <meta charset="UTF-8">
    
    <title>b8d26</title>
</head>
<body>

<?php 
    /*
    array_count_values() -> dizi elemanlarının kaç kere terarlandığını bulmamızı sağlar. ( bunu yeni bir dizi oluşturarak yapar , dizi elemanlarını anahtar yapar karşılık olarak da kaç kere tekrarlandıklarını yazar).
    */

    $dizi = array("Furkan", "Ense", "Furkan", "Hakkı", "Solucan", "Furkan", "Ato", "Ato", "Masir", "Furkan");
    echo "Ana dizi :<pre>";
    print_r($dizi);
    echo "</pre>";

    $frekanslar = array_count_values($dizi); //TODO : elemanların frekanslarını (tekrar sayılarını bul)
    echo "Elemanların tekrar sayısı :<pre>";
    print_r($frekanslar);
    echo "</pre>";





    
    
?>
    
</body>
</html>