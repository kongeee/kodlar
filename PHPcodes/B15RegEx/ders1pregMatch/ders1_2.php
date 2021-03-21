<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type" content = "text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content = "tr">
    <meta charset="UTF-8">
    
    <title>B15d1_2 Preg Match</title>
</head>
<body>

<?php
    $metin = "Merhaba ben Furkan Ekici. Çukurova Üniversitesi'nde öğrenciyim. LinkedIn'de Furkan Ekici yazarak bana ulaşabilirsiniz.";
    $desen = "/\w/"; //TODO : bu desen tüm karakterleri, sayıları ve alt çizgileri alır. Diğer hiçbir sembolü almaz.

    preg_match_all($desen, $metin, $sonuc); //? preg_match_all kullandık. Çünkü preg_match kullansaydık ilk harften sonra duracaktı ama biz bütün harfleri almak istiyoruz.

    echo "<pre>";
    print_r($sonuc);
    echo "</pre>";


?>

    
</body>
</html>