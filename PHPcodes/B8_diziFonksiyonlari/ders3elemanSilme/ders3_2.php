<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type" content = "text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content = "tr">
    <meta charset="UTF-8">
    
    <title>b8d3_2</title>
</head>
<body>
<?php 

    //Önemli kural : array_shift fonksiyonunda baştan sildiğimiz için keyler karışık verilmiş olsa bile 
    //silinme işleminden sonra tekrar düzenlenir.(Bu durum array_pop fonksiyonunda mevcut değildir onda yapı bozulmaz)

    $dizi = array(3=>"Furkan", 1=>"Eren", 2=>"Aytekin", 0=>"Ayşe");

    echo "<pre>";
    print_r($dizi);
    echo "</pre>";

    array_shift($dizi); // normalde bu işlemden sonra şu output beklenir 
    /*
    1=> Eren
    2=> Aytekin
    0 => Ayşe

    Fakat baştan düzenlendiği için 0 eren, 1 aytekin, 2 ayşe olur
    */ 

    echo "<pre>";
    print_r($dizi);
    echo "</pre>";



?>
    
</body>
</html>