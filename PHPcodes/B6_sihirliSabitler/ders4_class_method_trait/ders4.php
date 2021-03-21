<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type" content = "text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content = "tr">
    <meta charset="UTF-8">
    
    <title>b6d4</title>
</head>
<body>

<?php
    //__CLASS__, bulunduğu classın ismini döndürür.(değişkene atanabilir.)
    //__METHOD__, bulundğu sınıfın ve metodun ismini döndürür.(değişkene atanabilir.)
    
    class Insan{                   //Class oluştur
        function isim_soyle(){     // Class içinde fonksiyon(metod) tanımla
            echo "Class ismi : " . __CLASS__;        //sınıfın ismini __CLASS__ ile al
            print("<br>");
            echo "Metod ismi : " . __METHOD__;       //metod ismini __METHOD__ ile al
            print("<br>");
        }
    }

    $eren = new Insan;             //Bu sınıftan bir nesne oluştur.
    $eren ->isim_soyle();          //nesneyi kullanarak metoda eriş(Fonksiyonlarla aynı mantık çağırmazsan çalışmaz)

    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //__TRAIT__, kalıtım yapılan classı döndürür.(değişkene atanabilir.)
    //base class trait keyword ü ile oluşturulur ve derived class içerisinde use keywordü ile çağırılır.

    trait baseClass{
        function metod1(){
            echo "Bu metod şu classtan alınmıştır : " . __TRAIT__;

        }
    }

    class derivedClass{
        use baseClass;
    }

    $nesne = new derivedClass;
    $nesne->metod1();
?>
    
</body>
</html>