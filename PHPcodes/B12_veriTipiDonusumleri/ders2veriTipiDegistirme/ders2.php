<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type" content = "text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content = "tr">
    <meta charset="UTF-8">
    
    <title>b12d2</title>
</head>
<body>

<?php
    //settype() -> bir değişkenin veri türünü değiştirmemizi sağlar. ilk param -> değişken, ikinci param -> dönüştürülecek veri tipi

    $deger = "8";

    echo "Değer : " . $deger;
    echo "<br>Tip : " . gettype($deger);

    echo "<br><br>settype'dan sonra :<br><br>";

    settype($deger, "integer"); // TODO : deger isimli değişkenin tipini integer yapar (integer yerine int, boolean yerine bool yazılabilir)(null da kullanabiliriz)
    echo "Yeni değer : " . $deger;
    echo "<br>Tip : " . gettype($deger);

    echo "<br><br>***************************************************************************************************************<br>";

    //? VEYA şu şekilde yapabiliriz :

    $deger2 = "8";

    echo "Değer2 : " . $deger2;
    echo "<br>Tip2 : " . gettype($deger2);

    echo "<br><br>(double)'dan sonra :<br><br>";

    $deger3 = (double) $deger2; // TODO : deger2 yi double yapıp deger3'e aktar.(burada null için (unset) yazılmalı)
    echo "Yeni değer3 : " . $deger3;
    echo "<br>Tip3 : " . gettype($deger3);
?>
    
</body>
</html>