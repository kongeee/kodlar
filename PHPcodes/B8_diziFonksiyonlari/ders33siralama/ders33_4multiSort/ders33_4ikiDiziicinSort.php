<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type" content = "text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content = "tr">
    <meta charset="UTF-8">
    
    <title>b8d33_4_devam</title>
</head>
<body>

<?php 
    //multisort iki dizi için de kullanılabilir.
    //! dizi boyutları tutarlı olmalıdır

    $dizi1 = array("Furkan", "Ayşe", "Eren", "Aytekin", "Fadime");
    $dizi2 = array("Furkan", "Ayşe", "Eren", "Aytekin", "Fadime");

    echo "Dizi1 : <pre>";
    print_r($dizi1);
    echo "</pre>";
    
    echo "Dizi2 : <pre>";
    print_r($dizi2);
    echo "</pre>";

    array_multisort($dizi1,SORT_REGULAR, $dizi2); //? veya array_multisort($dizi1, $dizi2); , parametere vereceksek böyle veriyoruz

    echo "Dizi1(sıralı) : <pre>";
    print_r($dizi1);
    echo "</pre>";
    
    echo "Dizi2(sıralı) : <pre>";
    print_r($dizi2);
    echo "</pre>";


?>
    
</body>
</html>