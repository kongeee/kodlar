<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type" content = "text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content = "tr">
    <meta charset="UTF-8">
    
    <title>b7d4</title>
</head>
<body>

<?php
    //değişken ve sabitleri isimleriyle diziye ekliyoruz istersek anahtar da verebiliriz.

    $isim = "Furkan";
    $soyisim = "Ekici";
    $yas = 23;

    define("RENK", "kırmızı");
    const YEMEK = "pilav";

    $dizi = array($isim, "soyad_key"=>$soyisim, $yas, RENK, "deneme_key"=>YEMEK, "kendimiz de ekleyebiliriz böyle");

    echo"<pre>";
    print_r($dizi);
    echo"</pre>";
    
?>
    
</body>
</html>