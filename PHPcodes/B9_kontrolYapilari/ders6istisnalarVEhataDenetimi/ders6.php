<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type" content = "text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content = "tr">
    <meta charset="UTF-8">
    
    <title>b9d6</title>
</head>
<body>

<?php 
    /*
    try : hata yapabilecek kod bloğu
    catch : hata olduğunda gelinecek yer
    finally : hata olsa da olmasa da çalışacak kısım

    Exception : hatanın türü için sınıf
    getMessage() : Exception sınıfının bir metodudur. Sınıftan nesne üretilirken içine verilen mesajı gösterir.
    */

    // 0'a bölme hatası örneği (Normalde hata verir division by zero hatası)

    

    try{
        $deger1 = 100; //? bunlar dışarıda da olabilir çok öneli değil
        $deger2 = 0;

        if($deger2 == 0){ //hata oluşturacak durum
            throw new Exception("Burada bir hata meydana geldi!!!"); //throw ile hata fırlat, Exception ile hatayı oluştur (koşula göre birden fazla throw ifadesi olabilir.)
        }

        echo "Sonucunuz :" . $deger1 / $deger2; //eğer hata meydana gelmezse(yani payda 0 olmazsa) sonuc gösterilir

    }catch(Exception $sonucNesnesi){ //Exception sınıfına ait bir nesne türet
        echo $sonucNesnesi->getMessage(); //sonuc nesnesinin bir metodunu bu şekilde çağırıyoruz.
    }finally{
        echo "<br>finally bloğu çalıştı <br>";
    }


   
    
            
?>
    
</body>
</html>