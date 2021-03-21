<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type" content = "text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content = "tr">
    <meta charset="UTF-8">
    
    <title>b8d5</title>
</head>
<body>
<?php 
    //next() -> Göstericiyi bir sonraki elemana taşır
    //prev() -> Göstericiyi bir önceki elememana taşır
    //reset() ->Göstericinin konumunu sıfırlar(başa alır)

    $dizi = array("Furkan","Eren","Ayşe","Fadime","Aytekin");

    echo "<pre>";
    print_r($dizi);
    echo "</pre>";

    echo "Göstericinin keyi (ilk durum): " . key($dizi) . "<br>";
    echo "Göstericinin değeri (ilk durum): " . current($dizi) . "<br>";
   

    

    next($dizi);//NEXT
    next($dizi);
    
    echo "<br>";

    echo "Göstericinin keyi (2 nextten sonra): " . key($dizi) . "<br/>";
    echo "Göstericinin değeri (2 nextten sonra): " . current($dizi) . "<br/>";
   

    prev($dizi);//PREV
    echo "<br>";

    echo "Göstericinin keyi (prevden sonra): " . key($dizi) . "<br/>";
    echo "Göstericinin değeri (prevden sonra): " . current($dizi) . "<br/>";
  

    reset($dizi);//RESET
    echo "<br>";

    echo "Göstericinin keyi (reset sonrası): " . key($dizi) . "<br>";
    echo "Göstericinin değeri (reset sonrası): " . current($dizi) . "<br>";
     




?>
    
</body>
</html>