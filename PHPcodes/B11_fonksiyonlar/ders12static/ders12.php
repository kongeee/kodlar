<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type" content = "text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content = "tr">
    <meta charset="UTF-8">
    
    <title>b11d12</title>
</head>
<body>

<?php

    function fonk1(){
        $deger = 0;
        $deger++;

        echo $deger . "<br>";
    }
    
    fonk1(); 
    fonk1();
    fonk1();
    //TODO : burada her fonksiyon çağrısından sonra ekrana 1 yazılır. Çünkü fonksiyondaki değişken fonksiyonun işi bitince yok edilir

    echo "<br><br><br>";

    function fonk2(){
        static $eleman = 0;
        $eleman++;

        echo $eleman . "<br>";
    }
    
    fonk2(); 
    fonk2();
    fonk2();
    // TODO : buradaki değişken static olduğundan 1 defa değer ataması yapılır ve program bitene kadar hafızada tutulur böylece ehr artırma işleminden etkilenir.
?>
    
</body>
</html>