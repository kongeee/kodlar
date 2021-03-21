<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type" content = "text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content = "tr">
    <meta charset="UTF-8">
    
    <title>b8d25</title>
</head>
<body>

<?php 
    /*
    min() -> dizinin en küçük elamanını döndürür
    max() -> dizinin en büyük elemanını döndürür
    */

    $sayilar = array(1, 5 , 89, -47, 156, -2, 98);
    echo "Ana dizi :<pre>";
    print_r($sayilar);
    echo "</pre> <br> <br>";

    $en_kucuk = min($sayilar);
    $en_buyuk = max($sayilar);

    echo "En küçük eleman : " . $en_kucuk . "<br>";
    echo "En büyük eleman : " . $en_buyuk;


    
    
?>
    
</body>
</html>