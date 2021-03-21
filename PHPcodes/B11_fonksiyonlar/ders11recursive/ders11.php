<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type" content = "text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content = "tr">
    <meta charset="UTF-8">
    
    <title>b11d11</title>
</head>
<body>

<?php

    //en başta bir bitirme koşulu olmalı, aşağısında da azalan veya artan bir yazpı olmalı ve kendini çağırmalı


    function faktoriyel($deger){
        if ($deger==0 or $deger==1){
            return 1;
        }

        return $deger * faktoriyel($deger-1); 
    }

    $sonuc = faktoriyel(6);

    echo $sonuc;
    
?>
    
</body>
</html>