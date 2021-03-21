<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type" content = "text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content = "tr">
    <meta charset="UTF-8">
    
    <title>b12d1</title>
</head>
<body>

<?php
    //gettype() -> bir değişkenin veri türünü döndürür.

    $isim = "Furkan";
    $yas = 23;
    $ortalama = 3.3;
    $dizi = array("A", "B", "C");
    $dogru_yanlis = true;


    echo "isim değişkeninin türü :" . gettype($isim); //TODO : isim değişkeninin tipini al
    echo "<br>yas değişkeninin türü :" . gettype($yas);
    echo "<br>ortalama değişkeninin türü :" . gettype($ortalama);
    echo "<br>dizi değişkeninin türü :" . gettype($dizi);
    echo "<br>dogru_yanlis değişkeninin türü :" . gettype($dogru_yanlis);
?>
    
</body>
</html>