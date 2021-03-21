<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type" content = "text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content = "tr">
    <meta charset="UTF-8">
    
    <title>b8d11_2</title>
</head>
<body>

<?php 
   
    $isimler = ["Furkan","İbo","Enes","Ato","Hakkı","Yasir","Mete","Oğulcan","Yusuf"];

    array_splice($isimler, 1, -2);//baştan bir eleman al, -2. elemeana kadar hepsini sil kalanları aynı diziye tekrar ata

    echo "<pre>";
    print_r($isimler);
    echo "</pre>";
    
    $isimler = ["Furkan","İbo","Enes","Ato","Hakkı","Yasir","Mete","Oğulcan","Yusuf"];

    array_splice($isimler, 1, 3);//baştan 1 eleman al, sonraki 3 elemeanı sil, geriye kalan elemenları aynı diziye ata

    echo "<pre>";
    print_r($isimler);
    echo "</pre>";
   
    



?>
    
</body>
</html>