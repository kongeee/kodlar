<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type" content = "text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content = "tr">
    <meta charset="UTF-8">
    
    <title>b10d6</title>
</head>
<body>

<?php
    //C'deki break ve continue


    $sayi = 0;

    while($sayi < 10){
        $sayi++;
        if($sayi==3 or $sayi==5){ //sayı 3 veya 5 ise döngü başına git
            continue;
        }
        if($sayi == 8){ //sayı 8 olursa döngüden çık
            break;
        }
        echo $sayi . "<br>";
        //! $sayi++; SAKIN BURADA KULLANMA, CONTINUE DONGU BAŞINA DÖNDÜĞÜ İÇİN BUNU ES GEÇER SONSUZ DÖNGÜ OLUR        
    }
    
?>
    
</body>
</html>