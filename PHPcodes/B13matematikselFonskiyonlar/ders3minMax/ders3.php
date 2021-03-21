<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type" content = "text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content = "tr">
    <meta charset="UTF-8">
    
    <title>B13d3</title>
</head>
<body>

<?php
    //min() -> dizideki en küçük değeri döndürür
    //max() -> dizideki en büyük değeri döndürür

    $degerler = array(1,3,6,9,7,5,6,6,6,4,2,32,9,8,7,4,4);

    echo "Dizi :<pre>";
    print_r($degerler);
    echo "</pre>";
    
    echo "En küçük değer : " . min($degerler) . "<br>";
    echo "En büyük değer : " . max($degerler);


?>
    
</body>
</html>