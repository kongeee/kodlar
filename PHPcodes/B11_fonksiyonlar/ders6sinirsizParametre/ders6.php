<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type" content = "text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content = "tr">
    <meta charset="UTF-8">
    
    <title>b11d6</title>
</head>
<body>

<?php
    /* 
    pythondaki *args gibi

    func_num_args() : gelen parametre sayısı
    func_get_args() : gelen parametreli diziye çevirir
    func_get_arg()  : gelen parametreler arasından birini seçmeyi sağlar
    */

    function sinirsizParametre(){
        $eleman_sayisi = func_num_args(); // TODO : gelen parametre sayısını değişkene aktarır
        echo "Gelen eleman sayısı : " . $eleman_sayisi . "<br> <br> <br>";

        $gelen_elemanlar = func_get_args(); // TODO : gelen parametreleri dizi yapar ve gelen_elemanalr değişkenine aktarır

        foreach($gelen_elemanlar as $anahtar=>$eleman){
            echo $anahtar . ". elemean : " . $eleman . "<br>";
        }
        echo "<br> <br>";
        $istenen_eleman = func_get_arg(3); //TODO : anahtarı 3 olan elemanı istenen eleman değişkenine aktarır

        echo "Anahtarı 3 olan eleman : " . $istenen_eleman;
    }

    sinirsizParametre("Furkan", "Ekici", 23, "Adana", "furkanekici1997@gmail.com", "Çukurova");

?>
    
</body>
</html>