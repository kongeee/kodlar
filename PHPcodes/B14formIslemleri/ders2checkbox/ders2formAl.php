<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type" content = "text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content = "tr">
    <meta charset="UTF-8">
    
    <title>B14d2 Form Al</title>
</head>
<body>

<?php
   
   $gelen_isim      = $_GET["isim_soyad"];
   $gelen_diller    = $_GET["diller"]; //TODO : form sayfasında işaretlenen tüm değerleri dizide depolar


   echo "İsim : " .$gelen_isim . "<br>";
   echo "İlgilendiği diller : <br>";
   foreach($gelen_diller as $dil){
       echo "- " . $dil . "<br>";
   }
?>
    
</body>
</html>