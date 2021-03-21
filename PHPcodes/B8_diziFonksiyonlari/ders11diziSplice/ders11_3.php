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

    //eleman ekleme 
   
    $isimler = ["Furkan","İbo","Enes","Ato","Hakkı","Yasir","Mete","Oğulcan","Yusuf"];


    //sona ekleme
    //Baştaki iki elemanı al, dizinin sonuna git oraya Ekici koy yani toplamda 3 eleman olacak
    array_splice($isimler, 2, count($isimler), "Ekici");//count' usona gitmek için kullandık

    echo "Sona eleman ekleme :<pre>";
    print_r($isimler);
    echo "</pre>";

    //////////////////////////////////////////////////////////////////////////////////////////
    $isimler = ["Furkan","İbo","Enes","Ato","Hakkı","Yasir","Mete","Oğulcan","Yusuf"];


    //araya
    //İlk iki elemanı al, sonraki 3 elemeanı sil sonra ekici yaz sonra da akalan eleamnları yaz
    array_splice($isimler, 2, 3, "Ekici");//birden fazla değer eklenebilir array_splice($isimler, 2, 3, array("Ekici","Ertu","Mert"));
                                                                                                            // Bu elemanlar başka bir diziye aktarılıp o dizinin adı da buraya yazılabilir
    echo "Araya eleman ekleme :<pre>";
    print_r($isimler);
    echo "</pre>";


    /////////////////////////////////////////////////////////////////////////////////////////////////////
    
    //ana dizinin anahtarları öenmliyken ek dizinin anahtarlaının önemi yoktur, ek dizinin anahatarları 0, 1, 2 , 3..
    //diye düzenlenir

    $isimler = array("A1"=>"Furkan","A2"=>"İbo","A3"=>"Enes","A4"=>"Ato","A5"=>"Hakkı","A6"=>"Yasir","A7"=>"Mete","A8"=>"Oğulcan","A9"=>"Yusuf");
    $ek_isimler = array("B1"=>"Ekici","B2"=>"Ertu","B3"=>"Mert","B4"=>"Harun");

    
    array_splice($isimler, 1, 6 , $ek_isimler);//baştan 1 eleman al sonraki 6 elemanı sil daha sonra ek isimleri koy daha sorna kalan elemanalrı koy
    echo "Anahtarla ekeleme (iki dizi) :<pre>";
    print_r($isimler);
    echo "</pre>";


    
   
    



?>
    
</body>
</html>