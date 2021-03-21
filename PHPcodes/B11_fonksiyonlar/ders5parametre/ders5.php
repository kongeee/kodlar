<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type" content = "text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content = "tr">
    <meta charset="UTF-8">
    
    <title>b11d5</title>
</head>
<body>

<?php
    //klasik parametre mantığı

    function topla($deger1=0, $deger2=0){ // TODO : varsayılan değer atadık parametrelere yani değer gelmezse bunlar kullanılacak
        echo "Sonuç = " . ($deger1 + $deger2);
        echo "<br>";
       
    }

    $sayi1 = 17;
    $sayi2 = 13;

    topla($sayi1, $sayi2);

    topla(37); //! ikinci parametreyi göndermedik

?>
    
</body>
</html>