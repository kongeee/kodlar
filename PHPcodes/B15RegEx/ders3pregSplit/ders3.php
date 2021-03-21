<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type" content = "text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content = "tr">
    <meta charset="UTF-8">
    
    <title>B15d3 preg_split</title>
</head>
<body>

<?php
    //preg_split() -> verilen desenle karşılaşıldığında ana metni böler ve bir diziye aktarır.
    
    $metin = "Merhaba ben Furkan Ekici. Çukurova Üniversitesi'nde öğrenciyim. LinkedIn'de Furkan Ekici yazarak bana ulaşabilirsiniz.";
    $desen = "/ /"; //desen : boşluk.

    $sonuc = preg_split($desen, $metin); //TODO : metni boşluklardan böler

    echo "Orijinal metin : " . $metin;

    echo "<br><br>";

    echo "Boşluklardan bölündü: <pre>";
    print_r($sonuc);
    echo "</pre>";
    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    echo "<br><br>";

    $desen2 = "//u";
    $sonuc2 = preg_split($desen2, $metin);

    echo "Tüm harfler (Türkçe karakterleri dahil etmek için u ayarı kullanıldı)<pre>";
    print_r($sonuc2);
    echo "</pre>";

?>

    
</body>
</html>