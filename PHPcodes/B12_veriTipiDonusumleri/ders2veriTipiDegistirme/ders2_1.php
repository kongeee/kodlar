<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type" content = "text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content = "tr">
    <meta charset="UTF-8">
    
    <title>b12d2_1</title>
</head>
<body>

<?php
    /*
    boolval()    
    intval()    
    doubleval() 
    
    değişkenin orijinal tipini korur, sadece ekrana bastırılırken vs bool int double göstermek için kullanılırlar.
    
    */

    $deger = 8.55;
    echo "Orijinal değer ve tip : " .$deger . ", " . gettype($deger) . "<br>";

    echo "intval() kullanılınca tip : " . intval($deger);


?>
    
</body>
</html>