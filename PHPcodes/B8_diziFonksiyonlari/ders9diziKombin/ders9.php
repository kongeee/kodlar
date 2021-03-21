<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type" content = "text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content = "tr">
    <meta charset="UTF-8">
    
    <title>b8d9</title>
</head>
<body>

<?php 
    //array_combine -> iki diziyi ilişkisel olarak birleştirir. Yani birinci dizinin elemanlarını ikinci dizinin elemanlarının keyi yapar.

    $dizi1 = array("Furkan", "Eren", "Aytekin");
    $dizi2 = array("Yeşil", "Mavi", "Sarı"); //Her iki dizi de eşit sayıda elamana sahip olmalıdır.

    $kombin = array_combine($dizi1, $dizi2);

    echo "<pre>";
    print_r($dizi1);
    echo "</pre>";

    echo "<pre>";
    print_r($dizi2);
    echo "</pre>";

    echo "<pre>";
    print_r($kombin);
    echo "</pre>";

    echo "<br><br> Çok boyutlu dizi örneği<br><br>";

    //dizi1 ve dizi2 deki elemanların anahtarının olmansının hiçbir önemi yoktur yine yukarıdaki gibi çalışır.
    //Çok boyutlularda ise şöyle çalışır

    $array1 = array("Meyveler", "Renkler");
    $array2 = array(array("Armut","Elma","Kiraz","Karpuz"), array("Mavi", "Yeşil","Turuncu"));

    $kombin2 = array_combine($array1, $array2);

    echo "<pre>";
    print_r($kombin2);
    echo "</pre>";

    



?>
    
</body>
</html>