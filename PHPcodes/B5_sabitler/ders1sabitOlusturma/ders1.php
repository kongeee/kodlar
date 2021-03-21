<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type" content = "text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content = "tr">
    <meta charset="UTF-8">
    
    <title>b5d1</title>
</head>
<body>

<?php
    //Sabitleri oluştururken define() fonksiyonu veya const komutu kullanılır.
    //Değişkenlere yalnızca 1 defa değer atanabilir ve değeri değiştirilemez.(C gibi)


    //define() kullanımı
    
    define("SABIT_ADI","sabitin Değeri");// 2 parametre alır , ilki sabit ismi , ikincisi sabitin değeri.
    echo SABIT_ADI; // Sabiti kullanırken dolar işareti $ kullanmıyoruz.


    print("<br>");
    //const kullanımı
    
    const SABIT = "Furkan Ekici";
    echo SABIT;


    print("<br>");
    //Normalde sabit isimleri de diğer değişken isimleri gibi case sensitivedir.(büyük/küçük harf duyarlı).
    //Fakat sabitlerde bunu kapatabiliyoruz.

    define("PI",3.1415,TRUE);//3. parametreyi TRUE yapınca case sensitive özelliği kayboluyor
    echo pi;


    //define() ile oluşturulan sabit nerede tanımlanırsa tanımlansın(localde veya globalde) her yerden erişilebilirdir.
    function func(){
        define("FONK_ICI","Fonksiyon içindeki sabite globalden(mainden kısmından) erişildi.");


    }
    func();//fonksiyonu çağırmadığımızda fonksiyonun içi çalışmaz
    echo FONK_ICI;

    echo "<br>";


    //Aynı yapıtı const ile yaparsak hata verir. Yani localde const ile oluşturulan sabite main kısmından erişemeyiz.!!!!!!
    /*
    function func2(){
        const CONST_ILE = "Const ile çağrı başarısız.";
    }
    func2();

    echo CONST_ILE;//HATA VERİR
    */


    //!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!Sabitlerde de index ile değere erişebiliriz.
    echo "<strong>İNDEXLER :<strong/><br>";
    echo SABIT_ADI[4]; // define ile oluşturuldu
    print("<br>");
    echo SABIT[7]; // echo ile oluşturuldu








?>
    
</body>
</html>