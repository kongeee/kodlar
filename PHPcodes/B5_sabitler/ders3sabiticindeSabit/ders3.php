<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type" content = "text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content = "tr">
    <meta charset="UTF-8">
    
    <title>b5d3</title>
</head>
<body>

<?php
   //Sabit oluşturup onu değerini bir sabit ile alabiliriz (Burada cosnt sıkıntı çıkarmaz)

    const ISIM = "Furkan Ekici";
    const KULLANICI = ISIM;
    echo KULLANICI;

    print("<br>");

    define("AGE", 27);
    define("YAS", AGE);
    echo YAS;

    print("<br>");

    //Bunları birbirlerinin kombinasyonu şeklinde de yazabiliriz.(const ile tanımlanan sabiti define içine atma veya define
    //ile oluşturulmuş bir sabiti const ile eşitleme)

    const VARIABLE = 3.14;
    define("SABIT", VARIABLE);
    echo SABIT;

    print("<br/>");
    
    
    
    //Normalde const ile bir değişken değerini alamyıyorduk ama bunu artık şu şekilde alabiliriz.
    $degisken = "const ile değişken aldık(define ile tanımlanmış ekstra bir sabit kullanarak)";
    define("TEMP", $degisken);
    const DEGER = TEMP;

    echo DEGER;

    print("<br>");


    //Sabitleri de . ile birleştirebiliriz.(ne ile oluşturuldukları farketmeksizin)
    define("DENEME1","deneme1");
    const DENEME2 = "deneme2";

    const SONUC = DENEME1 . " ve " . DENEME2 . " nokta ile birleştirildi.";//nokta ile birleştirip atadık
    echo SONUC;


    






?>
    
</body>
</html>