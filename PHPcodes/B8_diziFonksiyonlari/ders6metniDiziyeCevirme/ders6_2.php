<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type" content = "text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content = "tr">
    <meta charset="UTF-8">
    
    <title>b8d6_2</title>
</head>
<body>
<?php 

    $duz_metin = "Fenerbahçe Galatasaray Beşiktaş Adanaspor Demirspor";
    echo "Düz metin : " . $duz_metin . "<br><br><br>";
    
    $metinden_diziye2 = explode(" ", $duz_metin, 3);//düz metni en fazla 3 eleman olacak şekilde boşluklardan ayır
    
    echo "diziboyutu parametresi 3 verilirse : <br>";

    echo "<pre>";
    print_r($metinden_diziye2);
    echo "</pre>";
    
    $metinden_diziye3 = explode(" ", $duz_metin, -3);//düz metni diziye çevir sonra son 3 elemanı sil

    echo "diziboyutu parametresi -3 verilirse : <br>";
    
    echo "<pre>";
    print_r($metinden_diziye3);
    echo "</pre>";


?>
    
</body>
</html>