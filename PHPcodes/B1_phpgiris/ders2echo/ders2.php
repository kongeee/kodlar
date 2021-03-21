<!-- echo'yu gördük. ekrana çıktı vermeyi sağlıyor printf gibi-->
<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type" content = "text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content = "tr">
    <meta charset="UTF-8">
    
    <title>b1d2</title>
</head>
<body>
    
    <?php 
        echo "Furkan Ekici <br />"; // string çift tırnak

        echo 'Furkan Ekici <br />'; // string tek tırnak
        
        echo 7           ."<br />"; //nümerik(sayısal) değer

        echo 3.14        ."<br />"; //double

        //Çok satırlı echo için(Sondaki END en sola yapışık olmak zorundadır)
        echo <<<END
        Bu 
        çok
        satırlı
        echodur
        <br />
        
END;
        
        //değişken yazdırma
        $ilk_string = "Bu ilk string değişkeninin içeriğidir.";
        echo "İlk içerik = {$ilk_string}","<br/>"; //değişken yazılacaksa çift tırnak kullan ve {} kullan

        //

        echo("Furkan Ekici ...echo fonksiyon olarak <br/>");
        //

        //kısa yol kullanım yöntemleri (!!!!!!!!genelde kullanılmaz)
        //<?="Furkan Ekici ?bitişik bunlar normalde> bu echo "Furkan Ekici"; ile aynıdır

        //birden fazla php tagı açıp birindeki değikeni diğerinde kullanabiliriz
    ?>
    <?=$ilk_string ?>
    
</body>
</html>