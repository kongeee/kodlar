<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type" content = "text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content = "tr">
    <meta charset="UTF-8">
    
    <title>b4d3</title>
</head>
<body>

<?php 

/* Arama çubuğundan veya form işlemlerinde get metodu ile gönderilen verileri alır */ 

$gelen_isim     = $_GET["isim"];  //HTML içeriğinde input alanına verdiğiniz isimleri get ile alıyoruz
$gelen_soyisim   = $_GET["soyisim"];

echo "Merhaba " . $gelen_isim ." ". $gelen_soyisim . "<br/>";

?>
    
</body>
</html>