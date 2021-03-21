<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type" content = "text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content = "tr">
    <meta charset="UTF-8">
    
    <title>b10d5</title>
</head>
<body>

<?php
    //çok boyutlu diziler için foreach ile işlem yaparken iç dizi as dedikten sonraki değere atanırsa ve yazdırılmak istenirse sıkıntı olur. Çünkü as den sonraki değişken, dizinin elemanlarını tek tek tutuyor. Örneğin bir yazdırma işleminde echo ile elemanları yazdırırken iç dizi gerlise sorun olur. bunun için gelen elemanın dizi olup olmadğını is_array() fonksiyonu ile kontrol ediyoruz.


    $dizi = array("Kedi", "Köpek", array("Beyaz", "Siyah", "Turuncu", "Yeşil"), "At");

    echo "Ana dizi:<pre>";
    print_r($dizi);
    echo "</pre>";

    foreach($dizi as $eleman){
        
        if(is_array($eleman)){ //TODO : eğer eleman, dizi ise iç dizinin elemanlarını da bastırmak için tekrar bir foreach
            
            foreach($eleman as $ic_eleman){ //? eleman isimli değişkenin array olduğunu biliyoruz bunun elemanlarını tek tek al
                echo $ic_eleman . "<br>";

            }
            
        }else{ //? eleman değişkeni array değilse elemandır direkt olarak bastırılabilir
            echo $eleman . "<br>";
        }
    }
    
    //!bu işlemleri boyut sayısına göre artırabilirsin
    
?>
    
</body>
</html>