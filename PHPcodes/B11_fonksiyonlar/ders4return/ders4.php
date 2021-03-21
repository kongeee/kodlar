<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type" content = "text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content = "tr">
    <meta charset="UTF-8">
    
    <title>b11d4</title>
</head>
<body>

<?php
    // klasik return (çoklu eleman döndürmek için . operatörü veya array kullan)

    //? . operatörü ile çoklu değer döndürme:

    function degerleri_al(){

        $isim = "Furkan ";
        $soyad = "Ekici";

        return $isim . $soyad;

    }

    $sonuc = degerleri_al(); // Fonksiyonu çağırıp değerleri döndürdük
    echo $sonuc;

    //***********************************************************************************************************************************

    //? array ile çoklu değer döndürme

    function array_ile_dondur(){
        $isim = "Furkan";
        $soyad = "Ekici";
        $yas = 23;


        return array($isim, $soyad, $yas);
    }

    $donen_degerler = array_ile_dondur(); // TODO : gelen degerler adlı değişken bir diziye dönüşür

    echo "<br> <br>Dizi ile çoklu eleman döndürme :<pre>";
    print_r($donen_degerler);
    echo "</pre>";

    /*

    Anonim Fonksiyonlarda return ifadesi :

    $anonFonk = function(){

        $isim = "Furkan";

        return $isim;
    };

    $sonuc2 = $anonFonk();

    echo $sonuc2
*/

?>
    
</body>
</html>