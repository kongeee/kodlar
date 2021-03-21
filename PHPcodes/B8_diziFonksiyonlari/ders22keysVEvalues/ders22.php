<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type" content = "text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content = "tr">
    <meta charset="UTF-8">
    
    <title>b8d22</title>
</head>
<body>

<?php 
    // array_keys() -> verilen dizinin anahtarlarından yeni dizi oluşturur.
    //! eğer fonksiyona parametre olarak elemanlar verilirse yalnızca bu elemanların anahtarlarıyla yeni dizi oluşturur

    // array_values() -> verilen dizinin elemanlarından yeni dizi oluşturur

    $dizi = array("A1"=>"Furkan", "A2"=>"Ekici", "A3"=>"Eren", "A4"=>"Furkan", "A5"=>"Aytekin");
    echo "Ana dizi :<pre>";
    print_r($dizi);
    echo "</pre> <br> <br>";

    $anahtarlar = array_keys($dizi); // TODO : yalnızca ana dizinin anahtarlarını al ve bunlardan yeni bir dizi oluştur
    echo "Ana dizinin anahtarları :<pre>";
    print_r($anahtarlar);
    echo "</pre> <br> <br>";

    $anahtarlar2 = array_keys($dizi, "Furkan"); // TODO : sadece değeri Furkan olan anahtarlarla yeni dizi oluşturur
    echo "Ana dizide değeri Furkan olanların anahtarları :<pre>";
    print_r($anahtarlar2);
    echo "</pre> <br> <br>";

    //? ---------------------------------------------------------------------------------------------------------------------

    $elemanlar = array_values($dizi); // TODO : yalnızca ana dizinin elemanlarını al ve bunlardan yeni bir dizi oluştur
    echo "Ana dizinin elemanları :<pre>";
    print_r($elemanlar);
    echo "</pre> <br> <br>";

    

?>
    
</body>
</html>