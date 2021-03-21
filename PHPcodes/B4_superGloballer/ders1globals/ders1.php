<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type" content = "text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content = "tr">
    <meta charset="UTF-8">
    
    <title>b4d1</title>
</head>
<body>
    <?php

        /* $GLOBALS, değişkenin etki alanını artırarak her yerden erişilebilir hale getirir. */

        function deneme(){
            $GLOBALS["isim"] = "Furkan Ekici";// $isim değişkenini global yapıp değer atadık
        }
        deneme();// fonksiyon çağırısı yapılmadan fonksyion çalışmaz

        echo $isim; // normalde fonksiyon içindeki yerel değişkene main kısmından ulaşamayız 
                    //ama burada $isim değişkeni global olarak tanımlanmış.

        print "<br/>";
    
        echo $GLOBALS["isim"]; //böyle de ulaşabiliriz aynı şey

    
    ?>
    
</body>
</html>