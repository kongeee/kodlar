<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type" content = "text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content = "tr">
    <meta charset="UTF-8">
    
    <title>b8d19</title>
</head>
<body>

<?php 
    //range() -> pythondaki range fonksiyonudur. (ilk parametere başlangıç, ikinci param. bitiş, üçüncü param artış miktarı(verilmezse 1))

    $sayilar = range(1, 21, 2); //TODO : 1 den başla 21 'e kadar 2 şer sayarak git (1 ve 21 dahil)
    echo "Sayılar :<pre>";
    print_r($sayilar);
    echo "</pre> <br> <br>";

    //! bu yöntemle harfleri de yazdırabiliriz

    $harfler = range("a" , "z");
    echo "Harfler :<pre>";
    print_r($harfler);
    echo "</pre> <br> <br>";


    

    

?>
    
</body>
</html>