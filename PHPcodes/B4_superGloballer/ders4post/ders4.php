<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type" content = "text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content = "tr">
    <meta charset="UTF-8">
    
    <title>b4d4</title>
</head>
<body>

<?php 

/* form işlemlerinde post metodu ile gönderilen verileri alır (verilerin url kısmında yazmayıp gizli kalmasını istiyorsan bunu kullan)*/ 

$gelen_isim     = $_POST["isim"];  //HTML içeriğinde input alanına verdiğiniz isimleri post ile alıyoruz
$gelen_soyisim   = $_POST["soyisim"];

echo "Merhaba " . $gelen_isim ." ". $gelen_soyisim . "<br/>";

?>
    
</body>
</html>