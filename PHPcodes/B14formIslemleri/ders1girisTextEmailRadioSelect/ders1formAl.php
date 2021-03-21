<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type" content = "text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content = "tr">
    <meta charset="UTF-8">
    
    <title>B14d1 Form Al</title>
</head>
<body>

<?php

    //?Aynı sayfada birden fazla form gönderilecekse herbir forma için name tanımlanmalıdır.

   //! formu hangi methodla gönderdiysek onunla almamız gerekiyor. ($_GET -> get metodu için, $_POST -> post metodu için, $_REQUEST -> her iki metod için de bu kullanılabilir)

   //biz get modu ile gönderdiğimiz için get metodu ile form alanından gönderilen inputların name değeri ile bu verileri alabiliriz.

   //TODO : verileri aşağıdaki gibi alıyoruz
   $gelen_isim      = $_GET["isim_soyad"];
   $gelen_email     = $_GET["email"];
   $gelen_cinsiyet  = $_GET["cinsiyet"];
   $gelen_yas       = $_GET["yas"];


   echo "İsim : " .$gelen_isim . "<br>";
   echo "E mail : " .$gelen_email . "<br>";
   echo "Cinsiyet : " .$gelen_cinsiyet . "<br>";
   echo "Yaş : " .$gelen_yas . "<br>";

   //Bunları tek bir dizi de de alabiliriz.

   $gelen_degerler = $_GET; //? $_GET aslında gelen verilerin tutulduğu bir dizidir

   echo "<br><br>Gelen verileri dizi şeklinde de alabiriz : <pre>";
   print_r($gelen_degerler);
   echo "</pre>";
?>
    
</body>
</html>