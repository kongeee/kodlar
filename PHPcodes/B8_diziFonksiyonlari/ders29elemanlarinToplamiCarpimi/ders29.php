<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type" content = "text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content = "tr">
    <meta charset="UTF-8">
    
    <title>b8d29</title>
</head>
<body>

<?php 
    /*
    array_sum() -> dizinin elemanlarının toplamlarını döndürür
    array_product() -> dizinin elemanlarının çarpımlarını döndürür
    */

    $veriler = array(2, 3.14, 2.71, 17, 10);

    echo "<pre>";
    print_r($veriler);
    echo "</pre>";

    echo "Elamanların toplamı = " . array_sum($veriler) . "<br>";
    echo "Elamanların çarpımı = " . array_product($veriler);


    
?>
    
</body>
</html>