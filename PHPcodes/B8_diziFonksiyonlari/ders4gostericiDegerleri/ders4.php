<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type" content = "text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content = "tr">
    <meta charset="UTF-8">
    
    <title>b8d4</title>
</head>
<body>
<?php 
    //Diziler bir göstericiye sahiptir. Bu değiştirilmediği sürece ilk elemandır
    
    //key() -> Göstericinin key'ini döndürür
    //current() -> Göstericinin değerini döndürür
    //pos() -> Göstericinin değerini döndürür
    //end() -> Göstericiyi son konumdaki elemana götürür ve bu elemananın değerini döndürür.

    $dizi = array("Ekici","Ertu","Yasir","Emre");

    echo "<pre>";
    print_r($dizi);
    echo "</pre>";

    echo "Göstericinin keyi (key ile)       : " . key($dizi) . "<br>";
    echo "Göstericinin değeri (current ile) : " . current($dizi) . "<br>";
    echo "Göstericinin değeri (pos ile)     : " . pos($dizi) . "<br>";
    echo "Göstericinin son değeri (end ile) : " . end($dizi) . "<br>";
    





?>
    
</body>
</html>