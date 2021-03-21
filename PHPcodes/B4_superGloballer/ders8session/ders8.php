<?php

session_start();

?>
<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type" content = "text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content = "tr">
    <meta charset="UTF-8">
    
    <title>b4d8</title>
</head>
<body>

<?php
    //$_SESSION süper globali ile kullanıcı oturumları oluşturup bunlara ulaşabiliyoruz.(Öncelikle en üstte sessionları başlat)

    $_SESSION["session_ismi"] = "session_degeri"; //bu sessionun içeriği server tarafında tmp dosyası içinde barınır(D:\XAMPP\tmp) ve hiçbir 
    //client(kullanıcı,user) buraya erişemez. Dolayısıyla güvenlidir. Bu da çerezler kısmında görünür ama içeriği orada görünmez.
    //içerik kısmında yazan değer serverde sessionun tutulduğu dosyanın adıdır.

    $_SESSION["e_mail"] = "info@localhost.com";

    //Mevcut sessionun değerine ulaşabiliriz demiştik.

    echo $_SESSION["session_ismi"]; //Sessionun değerini yazdırır.

    print("<br/>");

    echo $_SESSION["e_mail"];


    //Bunun kullanım amacı : sayfaya giriş yapan üyeyi bulmak, siteye giriş yapılmadan sepete ürün eklenmişse giriş yapıldıktan sonra
    // o ürünleri kişinin seperine ekliyoruz vs......


?>


    
</body>
</html>