<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type" content = "text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content = "tr">
    <meta charset="UTF-8">
    
    <title>B13d5</title>
</head>
<body>

<?php
    //rand() -> 1. param : başlangıç, 2. param : bitiş , hiç parametre verilmezse 0 - 2147483647 arasında bir tamsayı üretir
    //getrandmax() -> rand ile üretilebilecek max sayıyı bize döndürür

    //?mt_rand() ve mt_getrandmax() metodları da var. mt_rand() metodu yukarıdakinden farkı bir algoritma kullanarak sayı üretir tek farkalrı budur

    $rastgele1 = rand(); //TODO :  php tarafından rastgele sayı üretilir
    echo "rand() fonksiyonuna parametre verilmeden ürettiği sayı : " . $rastgele1 . "<br>Max üretilebilecek sayı : ". getrandmax() ."<br><br><br>";

    $rastgele2 = rand(100, 200); //TODO :  bizim tarafımızdan rastgele sayı üretilir
    echo "rand() fonksiyonuna parametre olarak 100 ve 200 verildiğinde ürettiği sayı : " . $rastgele2;
    

    


?>
    
</body>
</html>