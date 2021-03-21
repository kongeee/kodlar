<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type" content = "text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content = "tr">
    <meta charset="UTF-8">
    
    <title>b8d3_1</title>
</head>
<body>
<?php 

    //array_unshift : dizinin başından eleman silmek için kullanılır.(Tek bir eleman siler)
    //array_push    : dizinin sonundan eleman silmek için kullanılır.(Tek bir eleman siler)

    //Her ikisinde de silinen elemanın değeri döndürülür

    $dizi = array("Furkan", "Eren", "Ato", "Yasri");

    echo "<pre>";
    print_r($dizi);
    echo "</pre>";

    $silinen = array_shift($dizi); //dizinin başındaki elemanı sildik ve silinen elemanın değerini silinen değişkenine aktardık

    echo "<pre>";
    print_r($dizi);
    echo "</pre>";

    echo "silinen elemanın değeri : " . $silinen . "<br> <br> <br> <br>";

    //Birden fazla silmek istediğimiz zaman (baştan veya sondan fark etmez) fonksiyonları tekrar tekrar yazıyoruz
    //tek seferde birden fazla eleman silemiyoruz.

    array_pop($dizi); //sondan eleman sildi

    echo "<pre>";
    print_r($dizi);
    echo "</pre>";





?>
    
</body>
</html>