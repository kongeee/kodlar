<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type" content = "text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content = "tr">
    <meta charset="UTF-8">
    
    <title>b8d24_1</title>
</head>
<body>

<?php 
    // array_search() -> Belirtilen elaman dizide varsa anahtarının döndürür. ilk param aranan eleman, ikinci param dizi, üçüncü param eğer veri tipine göre arama yapacaksak true verilir

    $tayfa = array("A0"=>"7", "A1"=>"Hakkı", "A2"=>"İbo", "A3"=>"Ense", "A4"=>"Ato", "A5"=>"Mete", "A6"=>7);

    echo "Ana dizi :<pre>";
    print_r($tayfa);
    echo "</pre> <br> <br>";

    $arama1 = array_search("Ense", $tayfa); //TODO : ense dizi içinde varsa anahtarını döndürür, yoksa null döndürür
    echo "Aranan elemanın (Ense) anahtarı : " . $arama1 . "<br>";

    $arama2 = array_search(7, $tayfa, true); //TODO : true dediğimizde veri tipi de kontrol edilir ve sonuç olarak A6 yazılır eğer true yazmasaydı sonuç A0 olurdu
    echo "Aranan elemanın veri tipi kontrolü(int arıyoruz) yapıldı : " . $arama2;


    


    
?>
    
</body>
</html>