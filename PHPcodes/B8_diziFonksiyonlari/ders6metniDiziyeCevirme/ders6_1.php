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
    //explode(ayraç, dizi, diziboyutu(opsiyonel)) -> belirtilen ayraca göre stringi bölüp diziye çevirir (split eder)
    //implode(ayraç, dizi) -> diziyi belirtilen ayracı her elemanın arasında kullanrak bir düz metne çevirir

    $duz_metin = "Fenerbahçe Galatasaray Beşiktaş Adanaspor Demirspor";
    $metinden_diziye = explode(" ", $duz_metin); //düz metni boşluklardan ayır
    
    
    echo "<pre>";
    print_r($metinden_diziye);
    echo "</pre>";

    $diziden_metne = implode(", ", $metinden_diziye);//her elemanın arasına virgül boşluk koy (son elemandan sonra koymaz)

    echo $diziden_metne;

   


?>
    
</body>
</html>