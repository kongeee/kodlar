<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type" content = "text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content = "tr">
    <meta charset="UTF-8">
    
    <title>B15d5 preg_quote</title>
</head>
<body>

<?php
    //preg_quote() -> verilen metin içerisinde özel karakterlerin başına bir ters slash ekler
    //?Özel karakterler : . \ + * ^ $ = ? ! | : [ ] ( ) < >
    //!Bunlar dışında başına ters slash gelmesini istediğimiz karakter olursa onu da ikinci parametre olarak belirtiyoruz

    $metin = "Merhaba nasılsınız?";

    $sonuc = preg_quote($metin);//TODO : verilen metindeki özel karakterlerin başına kaçırma operatörü koyar.

    echo "Orijinal metin : " . $metin . "<br>";
    echo "Quote'li metin : " . $sonuc . "<br>";
    
    
    

?>

    
</body>
</html>