<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type" content = "text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content = "tr">
    <meta charset="UTF-8">
    
    <title>b8d17</title>
</head>
<body>

<?php 
    //array_filter() -> dizi içindeki boş elemanları silerek yeni dizi oluşturur
    //! anahtarlar korunur
    //?

    $renkler = array("Mavi","","", "Kırmızı", "Yeşil", "", "Siyah");

    echo "Filtrelenmemiş hali :<pre>";
    print_r($renkler);
    echo "</pre> <br> <br>";

    $filtrele = array_filter($renkler); //TODO : renkler arrayindeki boş elemanları listeden atar

    echo "Filtrelenmiş hali :<pre>";
    print_r($filtrele);
    echo "</pre> <br> <br>";



?>
    
</body>
</html>