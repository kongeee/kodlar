<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type" content = "text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content = "tr">
    <meta charset="UTF-8">
    
    <title>b4d5</title>
</head>
<body>

<?php

//$_REQUEST süper globali hem post hem de get metodlarından gelen veriler üzerinde uygulanabilir (Verileri almak için bunu kullan get ve postla uğraşma).

$isim = $_REQUEST["isim"];
$soyad = $_REQUEST["soyisim"];

echo $isim . " " . $soyad;



?>


    
</body>
</html>