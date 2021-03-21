<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type" content = "text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content = "tr">
    <meta charset="UTF-8">
    
    <title>B15d2 preg_replace ve preg_filter</title>
</head>
<body>

<?php
    //preg_filter() -> Verilen desene (veya desenlere) göre ana metinde arama yapar ve bulduğu değerleri belirtilen değerle (veya değerlerle) değiştirir. Düz metinlere uygulanabildiği gibi, dizilere de uygulanabilir. 1.pram : desen, 2. param : verilen desenlerin yerine ne gelecek, 3. param : ana metin veya dizi

    //preg_replace() -> Aynı işi yapar
    
    $metin = "Merhaba ben Furkan Ekici. Çukurova Üniversitesi'nde öğrenciyim. LinkedIn'de Furkan Ekici yazarak bana ulaşabilirsiniz.";
    $desen = array("/Furkan/" , "/\./"); //TODO : Furkan olanları ve nokta olanları seç
    $yerine_gelecekler = array("Eren", "*"); //TODO : Furkan yerine Eren, nokta yerine yıldız sembolü gelecek

    $sonuc = preg_filter($desen, $yerine_gelecekler, $metin);
    
    echo "Orijinal metin : " . $metin . "<br>";
    echo "Deseni değiştirilmiş metin : " . $sonuc . "<br>";


    //? Bu işlemi bir dizi üzerine de uygulayabiliriz

    $dizi = array(1, 71, 64, "06-12-2019");
    $desen2 = array("/1/", "/-/"); 
    $yerine2 = array(9, "/"); //TODO : 1 yerine 9, - yerine / gelecek

    $sonuc2 = preg_replace($desen2, $yerine2, $dizi);
    
    
    echo "<br><br>";
    echo "Orijinal dizi :<pre>";
    print_r($dizi);
    echo "</pre>";

    echo "Deseni değiştirilmiş dizi :<pre>";
    print_r($sonuc2);
    echo "</pre>";

?>

    
</body>
</html>