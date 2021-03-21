<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type" content = "text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content = "tr">
    <meta charset="UTF-8">
    
    <title>b8d12</title>
</head>
<body>

<?php 

    //array_chunk() -> Verilen diziyi, verilen eleman sayısı kadar parçalara ayırıp iki boyutlu dizi haline getirir.

    $isimler = array("Furkan","Eren","Ayşe","Aytekin","Fadime","Nurgül","Nursel","Bilal","Nuriye","Arife","Aytaç","Mehmet","Giray");

    echo "<pre>";
    print_r($isimler);
    echo "</pre>";

    $yeni_dizi = array_chunk($isimler, 3); //3 elemanda bir ana dizi içine yeni bir alt dizi tanımla(sonda 3 elemandan az olabilir)
    //anahtarlar korunmaz. korunması için son parametre olarak 'true' değeri verilmelidir.

    echo "SONUÇ :<br><pre>";
    print_r($yeni_dizi);
    echo "</pre>";

 

?>
    
</body>
</html>