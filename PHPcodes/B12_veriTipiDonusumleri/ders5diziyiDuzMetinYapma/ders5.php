<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type" content = "text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content = "tr">
    <meta charset="UTF-8">
    
    <title>b12d5</title>
</head>
<body>

<?php

//serialize() -> verilen diziyi tek bir satır haline getirir. Böylece diziyi veritabanında saklayabiliriz.
//unserialize() -> düz metne çevrilmiş diziyi tekrar eski haline getirir


$dizi = array("İsim"=>"Furkan", "Soyad"=>"Ekici", "Yas"=>23);

echo "Orijinal dizi :<pre>";
print_r($dizi);
echo "</pre>";

$duzMetinYap = serialize($dizi);
echo "<br><br>Düz metin olmuş hali (serialize) :<br>" . $duzMetinYap . "<br><br>";

$tekrarDiziYap = unserialize($duzMetinYap);

echo "Diziyi eski haline getir (unserialize) :<pre>";
print_r($tekrarDiziYap);
echo "</pre>";



    
?>
    
</body>
</html>