<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type" content = "text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content = "tr">
    <meta charset="UTF-8">
    
    <title>b8d33_3</title>
</head>
<body>

<?php 
    //natsort()  -> elemanları küçükten büyüğe sıralar (case sensitive)
    //natcasesort() -> elemanları büyüksek küçüğe sıralar (case sensitice değil)

    //! anahtarlar korunur
    
    $dizi = array("A1"=>"Resim5", "A2"=>"Resim47", "A3"=>"Resim101","A4" =>"Resim1"); 
    echo "Ana dizi : <pre>";
    print_r($dizi);
    echo "</pre>";

    sort($dizi); //TODO : dizi elamnları küçükten büyüğe sırala. Burada harfler tek tek kontrol edilerek sıralanır. Yani resim101 , resim5' ten önce gelir harf mantığına göre

    echo "Standart sıralama : <pre>";
    print_r($dizi);
    echo "</pre>";

   
    $dizi = array("A1"=>"Resim5", "A2"=>"Resim47", "A3"=>"Resim101","A4" =>"Resim1"); 

    natsort($dizi); //TODO : dizi elamnları küçükten büyüğe sırala. Burada yukarıdaki durum düzeltilir (anahtarlar korunur)

    echo "Doğal sıralama : <pre>";
    print_r($dizi);
    echo "</pre>";

    echo "------------------------------------------------------------------------------------------------------<br>";
    //? ---------------------------------------------------------------------------------------------------------------------------
    
    $dizi = array("A1"=>"REsim5", "A2"=>"RESIM47", "A3"=>"Resim101","A4" =>"Resim1"); 

    natsort($dizi); //TODO : Burada natsort case sensitive olduğu için RESIM47 yi başta yazdıracaktır ve yine sıralama bozulacaktır

    echo "Doğal sıralama(natsort, case sensitive) : <pre>";
    print_r($dizi);
    echo "</pre>";

    $dizi = array("A1"=>"REsim5", "A2"=>"RESIM47", "A3"=>"Resim101","A4" =>"Resim1");  
    natcasesort($dizi); //TODO : Burada natcasesort case sensitive olmadığı için için istediğimiz şekilde sıralanacaktır
    echo "Doğal sıralama(natcasesort, case sensitive değil) : <pre>";
    print_r($dizi);
    echo "</pre>";



?>
    
</body>
</html>