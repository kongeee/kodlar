<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type" content = "text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content = "tr">
    <meta charset="UTF-8">
    
    <title>b8d28</title>
</head>
<body>

<?php 
    // array_change_key_case() -> dizinin anahtarlarının tüm harflerini büyük veya tüm harflerini küçük yapar, ilk param dizi, ikinci param CASE_LOWER(default) veya CASE_UPPER

    $dizi = array("AnahtarBir"=>"Veri1", "AnahtarIki"=>"Veri2", "AnahtarUC"=>"Veri3", "Veri4", "Veri5" );
    echo "Ana dizi : <pre>";
    print_r($dizi);
    echo "</pre>";
    
    $sonuc1 = array_change_key_case($dizi, CASE_LOWER); //TODO : anahtlarların harflerini küçültür case lower yazılmasa da bu işi yapardı zaten default olarak

    echo "Anahtarlar küçük harf : <pre>";
    print_r($sonuc1);
    echo "</pre>";

    $sonuc2 = array_change_key_case($dizi, CASE_UPPER); //TODO : anahtarların harflerini büyültür.

    echo "Anahtarlar büyük harf : <pre>";
    print_r($sonuc2);
    echo "</pre>";
    
    
    
?>
    
</body>
</html>