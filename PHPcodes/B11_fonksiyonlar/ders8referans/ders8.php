<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type" content = "text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content = "tr">
    <meta charset="UTF-8">
    
    <title>b11d8</title>
</head>
<body>

<?php
    //klasik referans (&) mantığı
    
    $isim = "Furkan";

    function referansileGonder(&$degisken){
        $degisken = "Eren";
        
    }

    referansileGonder($isim);

    echo $isim; //? normalde $isim değişkeninin değeri furkandı, referans ile fonksiyona gönderdiğimiz için ve fonksiyon içinde bu değişkenin değeri değiştiği için ana değişken de bu değişiklikten etkilenir ve eren olur.
?>
    
</body>
</html>