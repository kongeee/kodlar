<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type" content = "text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content = "tr">
    <meta charset="UTF-8">
    
    <title>b8d20_2</title>
</head>
<body>

<?php 
    //array_fill_keys() -> içinde bazı eleman olan dizilerde çalışır. Önceki elemanları anahtar yapar. ilk paramtre doldurulacak dizi, ikinci parametre ne ile doldurulacağı

    $dizi = array("Furkan", "Eren", "Aytekin", "Fadime", "Ayşe");
    
    echo "Dizi :<pre>";
    print_r($dizi);
    echo "</pre> <br> <br>";

    $sonuc = array_fill_keys($dizi, 0.17); //TODO : verilen dizinin elemanlarını anahtar yap ve her anahtarın karşısına 0.17 değerini koy

    echo "array_fill_keys() ile doldurulmuş hali :<pre>";
    print_r($sonuc);
    echo "</pre> <br> <br>";





    

    

?>
    
</body>
</html>