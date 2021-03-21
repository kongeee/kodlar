<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type" content = "text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content = "tr">
    <meta charset="UTF-8">
    
    <title>b11d13</title>
</head>
<body>

<?php
    // yield ifadeki return gibi değer döndürür ama fonksiyonu sonlandırmaz, döndürülen değerler hafızada tutulmadağından ramden tasarruf etmiş oluruz (fonk içinde döngü kullanacaksan bununla değer döndür)

    function yieldDeneme($baslangic, $bitis){

        while($baslangic <= $bitis){
            yield $baslangic;
            $baslangic++;
        }

    }

    $sonuc = yieldDeneme(1, 50000);

    foreach($sonuc as $eleman){
        echo $eleman . " ";
    }

    echo "<br><br> Bellek kullanımı : " . memory_get_usage() . "byte (return ile yapınca bunun 40 katı kadar bir değer çıkıyor) ";
?>
    
</body>
</html>