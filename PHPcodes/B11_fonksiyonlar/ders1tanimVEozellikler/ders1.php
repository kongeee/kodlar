<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type" content = "text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content = "tr">
    <meta charset="UTF-8">
    
    <title>b11d1</title>
</head>
<body>

<?php
    /*
    Bazı özellikler:
        -Fonksiyon isimlerinde _ dışında özel karakter kullanılamaz (- kullanamıyoruz)
        -Birden fazla kez kullanılmaz
        -Case sensitive değildir.(DeNeMe, DENEME, deneme, DeneME, ... hepsi aynıdır aslında deneme ismiyle oluşturduğumuz bir fonksiyonu main kısmında DENEME() diye çağırabiliriz)
    */

    function ilkFonksiyon(){
        echo "İlk fonksiyon başarıyla çalıştı";
    }

    ilkFonksiyon(); //fonksiyon çağrısı

?>
    
</body>
</html>