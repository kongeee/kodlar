<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type" content = "text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content = "tr">
    <meta charset="UTF-8">
    
    <title>b11d9</title>
</head>
<body>

<?php
    //bir değikene fonksiyonun ismini vererek (string olarak) o değişkeni fonksiyon gibi kullanabiliriz.

    $degisken = "deneme";

    function deneme(){
        echo "Furkan Ekici";
    }

    $degisken(); //!anonim fonksiyon gibi
    
?>
    
</body>
</html>