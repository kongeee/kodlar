<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type" content = "text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content = "tr">
    <meta charset="UTF-8">
    
    <title>b11d3</title>
</head>
<body>

<?php
    // ismi yoktur bu fonksiyonların değişkenelre aktarılırlar


$fonk = function(){     // TODO : böyle tanımlanır.
        echo "Furkan Ekici";
    }; //! noktalı virgül unutma

    $fonk(); // TODO : böyle çağırılır.


    $dizi = array("Furkan", function(){echo "array içinde fonksiyon(fonksiyon çindeki echo sayesinde bastırılıyor)<br>";}, "Ekici");

    echo "Dizinin içeriği : <pre>";
    print_r($dizi);
    echo "</pre>";

    echo "<strong> Dizi elemanları :</strong> <br>";
    echo $dizi[0] . "<br>";
    $dizi[1](); //! dizi elemanı olduğunda  da böyle çağırılır (yine parantezler konur)
    echo $dizi[2];
       

?>
    
</body>
</html>