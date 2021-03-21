<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type" content = "text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content = "tr">
    <meta charset="UTF-8">
    
    <title>b7d2</title>
</head>
<body>

<?php
    //Sabit bir değişken oluşturur gibi sabir bir dizi de oluşturabiliriz.

    define("SABIT", array("Furkan", "Ato", "Ense", "Hakkı")); //veya array yerine [] da kullanabilirdik
    const SABIT2 = array("İbo", "Yasir", "Ertu");

    //sabtlerde ve dizilerde görüğümüz her kural bu konu için de geçerlidir onun için tekrar yazmıyorum

    echo"<pre>";
    print_r(SABIT);
    echo"</pre>";

    echo"<pre>";
    print_r(SABIT2);
    echo"</pre>";






?>
    
</body>
</html>