<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type" content = "text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content = "tr">
    <meta charset="UTF-8">
    
    <title>B13d2</title>
</head>
<body>

<?php
    //number_format() -> 1.param : değişken, 2.param : virgülden sonra kaç basamak olacak (2 girildiyse bu virgülden sonraki 3. basamağa bakar ve gereklli yuvarlamayı yapar), 3. param : virgülden sonraki kısmın hangi sembolle ayrılacağı, 4. param : binlik kısımların hangi sembolle ayrılacağı

    $sayi = 2548478968.56876;

    echo "Orijinal sayı : " . $sayi . "<br>";
    echo "Formatlanmış sayı : " . number_format($sayi, 3, "*", "!"); //TODO : sayı değişkeninin virgülden sonraki 2 basamağını al, virgülden sonraki kısım için * sembolü, bindelik kısımları ayırmak için ! semblolü kullan

?>
    
</body>
</html>