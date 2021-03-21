<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type" content = "text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content = "tr">
    <meta charset="UTF-8">
    
    <title>b7d1</title>
</head>
<body>

<?php
    //C' deki array. 
    //array() fonksyionu veya [] ile oluşturulur. (Tercihen array fonksiyonu)
    //verilere anahtar verilmezse kendisi 0 dan başlayarak atar. Anahtar ismi değişken ismi gibi verilmelidir ("" içinde )
    //bir anahtar birden fazla değere verilirse, anahtar en son gelen değeri işaret eder.

    //array oluşturma
    $dizi = array("Furkan", "Ekici", 23, 3.13); //birinci oluşturma yöntemi (Önerilen)
    $dizi2 = ["Eren", "Ekici", 13 , 3.57]; // ikinci oluşturma yöntemi
    

    echo "<pre>";// HTML in pre etiketiyle array elemanları yan yana değil alt alta ve daha düzenli görünür.
    print_r($dizi); //arrayleri yazdırmak için bu fonksiyon kullanılır ezho ile yazdıramayız arrayin hepsini
    echo "</pre>";
    
    /*echo "<pre>";
    print_r($dizi2);  //Bu da ÇALIŞIR!!!!.
    echo "</pre>";*/

    echo $dizi[1]; //dizinin elemanlarının key değerleri olmadığı için PHP tarafından otomatik atanıyor 
    print("<br>");
    echo "<br>";

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Bununla birlikte dizi elemanlarına key atayabiliriz.

    $dizi3 = array("isim"=>"Aytekin", "soyisim"=>"Ekici" , "yas"=>55, "ortalama"=>2.78);//hepsine key verdik

    echo "<pre>";
    print_r($dizi3);
    echo "</pre>";

    echo $dizi3["isim"];// dizi elemanına key değeri ile erişiriz.
    echo "<br>";
    echo "<br>";

    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Bazılarına key atayıp bazılarına atamazsak, atanmayanlar 0 dan başlayıp sırayla gider

    $dizi4 = array("esya"=>"sehpa", "Oğulcan", "uye"=>"Yasir", "Ertu", "Ato", "usta"=>"Hakkı");

    echo "<pre>";
    print_r($dizi4);
    echo "</pre>";

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Aynı key birden fazla kullanılırsa sonuncu değeri alır

    $dizi5 = array("meyve"=>"elma", "sebze"=>"domates", 78=>5, "meyve"=>"erik");
    echo "<pre>";
    print_r($dizi5);//4 eleman olmasına rağmen 3 eleman yazdırılır meyve ilk keydir onun için baştadır ama değeri değişmiştir.
    echo "</pre>";



?>
    
</body>
</html>