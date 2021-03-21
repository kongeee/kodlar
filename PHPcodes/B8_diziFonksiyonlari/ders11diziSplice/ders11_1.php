<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type" content = "text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content = "tr">
    <meta charset="UTF-8">
    
    <title>b8d11_1</title>
</head>
<body>

<?php 
    //array_splice() -> Dizide ekleme silme yapabilir, belirtilen yerden bölüp başka bir değişkene aktarılabilir
    //dizinin kendisi kullanılırsa farklı, bir değişkene aktarılırsa farklı sonuç verir
    //anahtar kullanırsak anahtarlar bu böünmelerden etkilenmez(tek dizide)

    $isimler = ["Furkan","İbo","Enes","Ato","Hakkı","Yasir","Mete","Oğulcan","Yusuf"];
    
    echo "<pre>";
    print_r($isimler);
    echo "</pre>";

    array_splice($isimler, 4);//ilk 4 elemanı alır tekrar aynı diziye atar diğer elemanları siler.
    echo "Kendi üzerine uygulanınca (Belirtilen sayıdaki elemanı baştan alır):<pre>";
    print_r($isimler);
    echo "</pre>";

    echo "////////////////////////////////////////////////////////////////////////////////////////////////<br>";

    $isimler = ["Furkan","İbo","Enes","Ato","Hakkı","Yasir","Mete","Oğulcan","Yusuf"];
    $yeniDizi = array_splice($isimler, 4); //bu kez ilk 4 elemanı görmez kalanları yeniDiziye alır.
                                          //bu işelm sonucunda ana değişkenin yapısı da değişir

    echo "Yeni diziye aktarılınca(belirtilen sayıdaki elemandan sonraki elemanları alır) :<pre>";
    print_r($yeniDizi);
    echo "</pre>";

    echo "ana dizinin yapısı da değişir :<pre>";
    print_r($isimler);
    echo "</pre>";



?>
    
</body>
</html>