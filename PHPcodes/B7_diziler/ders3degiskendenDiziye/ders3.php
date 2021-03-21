<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type" content = "text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content = "tr">
    <meta charset="UTF-8">
    
    <title>b7d3</title>
</head>
<body>

<?php
    
    // Dizi oluştururken array() veya [] dışında şu şekilde de oluşturabiliriz

    $isimler[] = "Furkan";
    $isimler[] = "Eren";
    $isimler[] = "Mustafa";
    //burada C'de olduğu gibi index vermeye gerek yok o otomatik kendisi veriyor

    echo"<pre>";
    print_r($isimler);
    echo"</pre>";

    //Burada key vermek istersek

    $isimler["ogrenci"] = "Hakan";
    $isimler[] = "Ense";
    $isimler["egitmen"] = "İbo";

    echo"<pre>";
    print_r($isimler);
    echo"</pre>";

    //Önceden oluşturulmuş bir diziye bu yapıyı kullanarak eleman da ekleyebiliriz.(istersek key de verebiliriz tabi)

    $yiyecekler = array("Ekmek", "Yoğurt");
    $yiyecekler[] = "Turşu";
    $yiyecekler[] = "Pilav";
    $yiyecekler["ana_yemek"] = "Kuru Fasülye";

    echo"<pre>";
    print_r($yiyecekler);
    echo"</pre>";

    echo "3.indeste bu var -> " . $yiyecekler[3];





?>
    
</body>
</html>