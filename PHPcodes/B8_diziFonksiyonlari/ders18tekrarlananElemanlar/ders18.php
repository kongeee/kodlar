<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type" content = "text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content = "tr">
    <meta charset="UTF-8">
    
    <title>b8d18</title>
</head>
<body>

<?php 
    //array_unique() -> dizi içinde tekrar eden elemanlardan birini (ilkini) alır.
    //! anahtarlar korunur

    $dizi = array("Furkan", 3.14, "Ekici", 3.14, 7, 97, "Ekici", "Eren");

    echo "İlk hali :<pre>";
    print_r($dizi);
    echo "</pre> <br> <br>";

    $sonuc = array_unique($dizi); // TODO : tekrar eden elemanlar diziden atıldı

    echo "Tekrar eden elemanlar kaldırıldı :<pre>";
    print_r($sonuc);
    echo "</pre> <br> <br>";
    

    

?>
    
</body>
</html>