<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type" content = "text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content = "tr">
    <meta charset="UTF-8">
    
    <title>b8d7</title>
</head>
<body>

<?php 
    //list() -> arrayin elemanalrını belirtilen değişkenlere atar

    $renkler = array("kırmızı", "mavi", "siyah", "turuncu", "yeşil");

    echo "<pre>";
    print_r($renkler);
    echo "</pre>";

    list($degisken1, $degisken2, $degisken3, $degisken4, $degisken5) = $renkler;//renklerin elemanlarını degiskenlere aktarır

    echo $degisken1 . "<br>";
    echo $degisken2 . "<br>";
    echo $degisken3 . "<br>";
    echo $degisken4 . "<br>";
    echo $degisken5 . "<br>";

    echo "<br> <br> <br>";

    //Dizinin her elemanı için bir değişken vermek zorunda değiliz örneğin sadece ilk ve son elemanı değişkene atamak istersek

    list($d1,,,,$d2) = $renkler; //istediğimiz verileri böyle alabiliriz

    echo $d1 . "<br>";
    echo $d2 . "<br>";


?>
    
</body>
</html>