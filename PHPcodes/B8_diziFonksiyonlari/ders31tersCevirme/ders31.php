<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type" content = "text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content = "tr">
    <meta charset="UTF-8">
    
    <title>b8d31</title>
</head>
<body>

<?php 
    // array_reverse() -> verilen diziyi ters çevirip yeni dizi oluşturur. 
    //! Eğer anahtarlar otomatik verilmişse korunmaz. Fakat anahtarları biz vermişsek korunur. (otomatik oluşturulmuş anahtarları da korumanın bir yöntemi var, array_reverse 2. parametere olarak true vermek)

    $isimler = array("Furkan", "Eren", "Ayşe", "Aytekin", "Fadime");

    echo "Ana dizi : <pre>";
    print_r($isimler);
    echo "</pre>";

    $ters = array_reverse($isimler); //TODO : diziyi ters çevirir (eğer sonuna true verilseydi ana dizideki otomatik verilen anahtarlar korunurdu)

    echo "Ters dizi : <pre>";
    print_r($ters);
    echo "</pre>";


    
?>
    
</body>
</html>