<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type" content = "text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content = "tr">
    <meta charset="UTF-8">
    
    <title>b5d2</title>
</head>
<body>

<?php
   //define() fonksiyonu ile sabit oluştururken, bir değişkenin değerini bullanabiliriz

   $degisken = "Furkan Ekici";
   define("ISIM", $degisken); //Bu işlem define fkonksiyonu için tanımlıdır. C'deki gibi elle girmek zorunda değiliz.
   echo ISIM;
   
   print("<br>");

   //Tek bir değişken atamak zorunda değiliz .(birleştirme operatörü) ile birden fazla değişken atayabiliriz.
   $isim = "Furkan";
   $soyad = "Ekici";
   define("KULLANICI", $isim . " " . $soyad . " (birden fazla değişken)");
   echo KULLANICI;


   //Aynısını const ile yapamıyoruz. HATA VERİR!!!!

    /*
   $degisken2 = "hataliiii";
   const DEGER = $degisken2; // HATA
   echo DEGER;
   */


?>
    
</body>
</html>