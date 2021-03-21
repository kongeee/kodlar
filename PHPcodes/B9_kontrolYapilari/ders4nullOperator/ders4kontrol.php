<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type" content = "text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content = "tr">
    <meta charset="UTF-8">
    
    <title>b9d4kontrol</title>
</head>
<body>

<?php 
    $gelenIsim = $_GET["isim"] ?? "NULL";
    $gelenSoyad = $_GET["soyad"] ?? "NULL";
    
    echo "Hoş geldin " . $gelenIsim . " " . $gelenSoyad;
?>

    
</body>
</html>