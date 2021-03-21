<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type" content = "text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content = "tr">
    <meta charset="UTF-8">
    
    <title>b8d30</title>
</head>
<body>

<?php 
    // array_rand() -> diziden belirtilen eleman sayısı kadar eleman çeker ve bunların anahtarlarıyla yeni dizi oluşturur. ilk param dizi, ikinci param kaç elemanın seçileceği

    $dizi = array("Furkan", "Eren", "Aytekin", "Fadime", "Ayşe");

    echo "Ana dizi : <pre>";
    print_r($dizi);
    echo "</pre>";

    $rastgele = array_rand($dizi, 2); //TODO : dizi isimli diziden rastegele 2 elemanın anahtar değerlerini rastgele dizisine aktar

    echo "Rastegele elemanların anahtarları : <pre>";
    print_r($rastgele);
    echo "</pre>";

    //? Burada değerleri görmek istiyorsak şöyle bir yönteme başvurabiliriz

    echo $dizi[$rastgele[0]] . "<br>";
    echo $dizi[$rastgele[1]] . "<br>";

    //! rastgele dizisinin ilk indisi(0) dizi isimli dizinin rastegele seçilen ilk elemanının anahtarını tuttuğundan bu yöntemle ana dizide anahtar verilmiş olsa dahi elemanlara ulaşabiliriz


    
?>
    
</body>
</html>