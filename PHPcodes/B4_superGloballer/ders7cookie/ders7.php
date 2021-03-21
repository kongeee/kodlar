<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type" content = "text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content = "tr">
    <meta charset="UTF-8">
    
    <title>b4d7</title>
</head>
<body>

<?php

//Cookie, kullanıcının browser'ına yerleştirilen bilgilerdir. Bu bilgilere $_COOKIE süper globali ile ulaşabiliriz.

setcookie("Cookie_ismi","Cookie_değeri");//önce ismi sonra değeri girilir ve browser kapanana kadar browser da bu bilgiler tutulur.
//browser'ın cookie bölmesine gidildiğinde coookie bilgileri (içeriği de dahil) görünür.


$cookie_bilgi = $_COOKIE["Cookie_ismi"]; //Cookie ismi süper globale verilir bu da bize çerezin içeriğini döndürür.(ismi verilen çerez yoksa hata döndürür)

echo $cookie_bilgi;


?>


    
</body>
</html>