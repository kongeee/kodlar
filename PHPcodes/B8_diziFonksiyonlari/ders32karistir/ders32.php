<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type" content = "text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content = "tr">
    <meta charset="UTF-8">
    
    <title>b8d32</title>
</head>
<body>

<?php 
    // shuffle() : verilen dizinin elemanlarını rastegele karıştırır
    //! anahtarlar korunmaz.(kendimiz versek bile php tarafından otomatik anahtar oluşturulur.)

    $isimler = array("A1"=>"Furkan", "Eren", "A2"=>"Ayşe", "Aytekin", "Fadime", "Mehmet");

    echo "Ana dizi : <pre>";
    print_r($isimler);
    echo "</pre>";

    shuffle($isimler);

    echo "Karışık dizi(anahtarlar otomatik verildi ve korunmadı) : <pre>";
    print_r($isimler);
    echo "</pre>";






    
?>
    
</body>
</html>