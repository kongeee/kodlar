<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type" content = "text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content = "tr">
    <meta charset="UTF-8">
    
    <title>B15d4 preg_grep</title>
</head>
<body>

<?php
    //preg_grep() -> verilen deseni dizi içinde kontrol eder, eğer bu deseni içeren elemanlar varsa bunları yeni diziye atar ve döndürür
    //!anahtarlar korunur.

    $dizi = array(11, 21, 35,"Hakan", 59, 71, 9641, "Furkan", "Eren");
    $desen1 = "/1/";

    $sonuc = preg_grep($desen1, $dizi);
    echo "/1/ deseni (içinde 1 geçen elemanlar) : <pre>";
    print_r($sonuc);
    echo "</pre>";

    echo "<br><br>";

    $desen2 = "/kan/";
    
    $sonuc2 =preg_grep($desen2, $dizi);
    echo "/kan/ deseni(içinde kan geçen elemanlar) : <pre>";
    print_r($sonuc2);
    echo "</pre>";

    
    

?>

    
</body>
</html>