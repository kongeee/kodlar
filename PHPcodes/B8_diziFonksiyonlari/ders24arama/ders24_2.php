<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type" content = "text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content = "tr">
    <meta charset="UTF-8">
    
    <title>b8d24_2</title>
</head>
<body>

<?php 
    /*
    array_key_exists() -> Belirtilen anahtar değerinin dizide olup olmadığını döndürür (varsa 1 yoksa null döner)
    in_array           -> Belirtilen eleman değerinin dizide olup olmadığını döndürür (varsa 1 yoksa null döner)
    */

    $tayfa = array("A0"=>"7", "A1"=>"Hakkı", "A2"=>"İbo", "A3"=>"Ense", "A4"=>"Ato", "A5"=>"Mete");
    echo "Ana dizi :<pre>";
    print_r($tayfa);
    echo "</pre> <br> <br>";
    
    $aranan_anahtar = array_key_exists("A4", $tayfa);//TODO : verilen anahtarın dizide olup olmadığını kontrol eder
    echo "A4 anahtarı dizide var mı ?(1 varsa var demektir) : " . $aranan_anahtar . "<br>"; 

    $aranan_eleman = in_array("Hakkı", $tayfa);//TODO : verilen elemanın dizide olup olmadığını kontrol eder
    echo "Hakkı elemanı dizide var mı ?(1 varsa var demektir) : " . $aranan_eleman . "<br>"; 

    //! yine burada da veri tipi kontrolu yapabiliriz

    $aranan_eleman2 = in_array(7, $tayfa, true); //TODO : sonuna true yazmasaydık bize 1 sonucunu döndürürdü ama biz integer 7 nin dizide eleman olup olmadığını arıyoruz.

    echo "integer 7 dizide var mı? (1 varsa var demektir)";
  
    
?>
    
</body>
</html>