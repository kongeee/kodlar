<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type" content = "text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content = "tr">
    <meta charset="UTF-8">
    
    <title>b11d2</title>
</head>
<body>

<?php
    //global keywordü ile global alandaki bir değişken fonksiyonun etki alanına alınabilir (pythondaki gibi)

    $isim = "Furkan Ekici";

    define("DEGER", 3.14);//? sabit oluştur.

    function func(){
        global $isim; // TODO : global alandaki değişkeni fonksiyonun etki alanına taşıdık.(Artık fonksiyon içinden erişilebilir.). Bunu yazmasaydık echo ile değişkeni kullanınca hata verirdi.
        echo $isim . "<br>";
       
        echo DEGER; // TODO : sabitler için global keywordünü kullanmaya gerek yok. Çünkü sabitler her alana etki eder.
    }

    func();

?>
    
</body>
</html>