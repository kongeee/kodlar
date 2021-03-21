<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type" content = "text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content = "tr">
    <meta charset="UTF-8">
    
    <title>b9d2</title>
</head>
<body>

<?php 
    // klasik switch case yapısı olduğu gibi case kısımlarına if'in içi gibi karşılaştırma verilebilir

    $saat = 20;

    switch($saat){
        case 21:          //? klasik C' deki case
            echo "aaa";
            break;
        case $saat>=10:  //? karşılaştırmalı case
            echo "bbb";
            break;
        
        default:
            echo "AAA";
    }

    //! if' de olduğu gibi bunda da süsülü parantezler olmadan
    /*
    switch($saat): //! : ile başlanır
        case 21:          
            echo "aaa";
            break;
        case $saat>=10:  
            echo "bbb";
            break;
        
        default:
            echo "AAA";
    endswitch; //!endswitch ile bitirilir
    */

            
?>
    
</body>
</html>