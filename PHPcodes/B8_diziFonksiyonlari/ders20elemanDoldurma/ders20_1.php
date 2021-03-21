<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type" content = "text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content = "tr">
    <meta charset="UTF-8">
    
    <title>b8d20_1</title>
</head>
<body>

<?php 
    //array_fill() -> ilk parametresi başlangıç indisi, ikinci parametresi, kaç elemanlı olacağı, üçüncü paremtresi doldurulacak değeri belirtir

    $doldurulan_dizi = array_fill(0, 5, "Furkan");//TODO : 0. indisten başlayarak 5 elemanlı bir dizi oluştur. Her elemana Furkan değerini ata
    
    echo "Doldurulan dizi :<pre>";
    print_r($doldurulan_dizi);
    echo "</pre> <br> <br>";



    

    

?>
    
</body>
</html>