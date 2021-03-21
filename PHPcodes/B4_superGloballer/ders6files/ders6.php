<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type" content = "text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content = "tr">
    <meta charset="UTF-8">
    
    <title>b4d6</title>
</head>
<body>
<?php

    /* Her türlü dosya (.png .exe .zip .rar .html .py .c vs.) yüklenebilir*/

    $dosya_bilgisi = $_FILES["dosya"];//html içinde dosya yükleme inputuna verdiğimiz isim

    echo "<pre>";//daha güzel görünmesi için
    print_r($dosya_bilgisi); //dosya bilgisi bir array olduğundan exho ile yazdıramıyoruz
    echo "</pre>"."<br/>";

    //Bu bilgilere özel olarak şu şekilde de erişilebilir $_FILES["dosya"] bir array döndürüyorsa(iki boyutlu array gibi düşünebiliriz)

    echo $_FILES["dosya"]["name"]."<br/>";
    echo $_FILES["dosya"]["size"]."<br/>";


?>
    
</body>
</html>