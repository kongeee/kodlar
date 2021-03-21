<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type" content = "text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content = "tr">
    <meta charset="UTF-8">
    
    <title>B13d11</title>
</head>
<body>

<?php
   //bindec() -> 2'lik tabandaki sayıyı 10'luk tabana çevirir.
   //octdec() -> 8'lik tabandaki sayıyı 10'luk tabana çevirir.
   //hexdec() -> 16'lık tabandaki sayıyı 10'luk tabana çevirir.


   //?Aşağıdakiler de yukarıdakilerin tersini yapar
   //decbin() 
   //decoct()
   //dechex()

   //?base_convert() -> 1.param : sayı, 2.param : sayının hangi tabanda olduğu, 3. param : sayının dönüştürüleceği taban

   $ikilik = 11001; //! ikilik sayının başındaki sıfırları at
   $sekizlik = 56467;
   $onaltilik = "15FA";//16'lık tabansa çift tırnak içine al harfleri yazmak için

   echo $ikilik . "(2) = " . bindec($ikilik) . "(10)<br>";
   echo $sekizlik . "(8) = " . octdec($sekizlik) . "(10)<br>";
   echo $onaltilik . "(16) = " . hexdec($onaltilik) . "(10)<br>";


   $sayi = 14569;

   echo "<br><br>base_convert kullanımı(11 lik tabandan 6 lık tabana sayı(14569) çevirdik ) :" . base_convert($sayi, 11, 6); //TODO : 11 tabanınındaki sayıyı 6'lık tabana çevirir







    


?>
    
</body>
</html>