<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type" content = "text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content = "tr">
    <meta charset="UTF-8">
    
    <title>b9d1_1</title>
</head>
<body>

<?php 
    // klasik if else yapısı

    $saat = 20;

    if($saat>0 and $saat<6){
        echo "İyi geceler";
    }
    elseif($saat>6 and $saat<12){
        echo "Günaydın";
    }
    elseif($saat>12 and $saat<18){
        echo "İyi günler";
    }
    elseif($saat>18 and $saat<=23){
        echo "İyi akşamlar";
    }
    else{
        echo "Girdiğiniz saat hatalı!!";
    }


?>
    
</body>
</html>