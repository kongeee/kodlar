<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type" content = "text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content = "tr">
    <meta charset="UTF-8">
    
    <title>b10d4</title>
</head>
<body>

<?php 
    //pythondaki for döngülerine benziyor

    foreach(range(1,10) as $deger){
        echo "Değer : {$deger}(foreach) <br>";
    }

    echo "<h2> VEYA dizi elemanlarını da alabiliriz </h2> <br>";

    $dizi = array("Furkan", "Eren", "Ayşe", "Aytekin", "Fadime");

    echo "Ana dizi :<pre>";
    print_r($dizi);
    echo "</pre>";

    echo "<br> foreach ile elemanlarını çektik : <br> <br>";

    
    foreach($dizi as $eleman){   //!veya foreach($dizi as $anahtar=>$eleman dersek her elemanın anahtarını da almış oluruz)
        echo "Dizi elemanı : {$eleman}<br>";
    }
    
    echo "<br><br> <strong>Anahtarlarını da alabiliriz</strong> :<br><br>";
    foreach($dizi as $anahtar=>$eleman){   
        echo "{$anahtar}. eleman : {$eleman}<br>";
    }


    /*
    veya :

    foreach(range(1,10) as $deger):
        echo "Değer : {$deger}(foreach) <br>";
    endforeach;


    
    */
    
?>
    
</body>
</html>