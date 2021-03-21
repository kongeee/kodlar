<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type" content = "text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content = "tr">
    <meta charset="UTF-8">
    
    <title>b4d2</title>
</head>
<body>
    <?php

        /* $_SERVER, aldığı parametrelerle birlikte server değerleini döner */

        echo '$_SERVER["PHP_SELF"] => '. $_SERVER["PHP_SELF"]."<br/>";// çalışmakta olan php dosyasının yol bilgisini döndürür.(sitenin alan adını içermez)
        echo '$_SERVER["GATEWAY_INTERFACE"] => '. $_SERVER["GATEWAY_INTERFACE"] . "<br/>";//Serverin CGI sürüm bilgisi.
        echo '$_SERVER["SERVER_ADDR"] => '.$_SERVER["SERVER_ADDR"]."<br/>";//Serverin IP adresi
        echo '$_SERVER["SERVER_NAME"] => '.$_SERVER["SERVER_NAME"]."<br/>";//Server ismi
        echo '$_SERVER["SERVER_SOFTWARE"] => '.$_SERVER["SERVER_SOFTWARE"]."<br/>";//Serverin kullandığı yazılım bilgileri
        echo '$_SERVER["SERVER_PROTOCOL"] => '.$_SERVER["SERVER_PROTOCOL"] . "<br/>";//Server prokolünün ismi ve sürümü (HTTP)
        echo '$_SERVER["REQUEST_METHOD"] => ' . $_SERVER["REQUEST_METHOD"] . "<br/>"; //Bu siteye arama çuğundan mı(GET) yoksa bir formdan mı(POST) erişildiğini gösterir
        echo '$_SERVER["REQUEST_TIME"] => ' . $_SERVER["REQUEST_TIME"] . "<br/>";//Zaman bilgisini saniye cinsinden verir
        echo '$_SERVER["REQUEST_TIME_FLOAT"] => ' . $_SERVER["REQUEST_TIME_FLOAT"] . "<br/>";//zaman bilgisinin sonuna mikrosaniye ekler
        echo '$_SERVER["QUERY_STRING"] => ' . $_SERVER["QUERY_STRING"] . "<br/>"; /*Siteye erişilirken yapılan sorgu Örneğin:
        https://www.google.com/search?q=php&oq=php&aqs=chrome.0.69i59l4j35i39j69i60l3.455j0j7&sourceid=chrome&ie=UTF-8 
        urlinde                      ^ bundan sonraki kısım sorgu stringidir.*/
        
        echo '$_SERVER["DOCUMENT_ROOT"] => ' . $_SERVER["DOCUMENT_ROOT"] . "<br/>";//Gerçerli PHP dosyasının root dizinini gösterir
        echo '$_SERVER["HTTP_ACCEPT"] => ' . $_SERVER["HTTP_ACCEPT"] . "<br/>";//Erişim için kabul edilen başlık bilgileri
        echo '$_SERVER["HTTP_ACCEPT_ENCODING"] => ' . $_SERVER["HTTP_ACCEPT_ENCODING"] . "<br/>"; // PHP dosyasına erişim için kabul edilen kodlama başlık bilgileri
        echo '$_SERVER["HTTP_ACCEPT_LANGUAGE"] => ' . $_SERVER["HTTP_ACCEPT_LANGUAGE"] . "<br/>";//  "   "           "     "     "     "     dil    "        "
        echo '$_SERVER["HTTP_CONNECTION"] => ' . $_SERVER["HTTP_CONNECTION"] . "<br/>"; //PHP dosyasına erişim için kabul edilen bağlantı başlık bilgisi (bu sitede : keep-alive)
        echo '$_SERVER["HTTP_HOST"] => ' . $_SERVER["HTTP_HOST"] . "<br/>";//Host' un ismi

        //**************************************** vvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvv
        echo '$_SERVER["HTTP_REFERER"] => ' . $_SERVER["HTTP_REFERER"] . "<br/>";/*ÇOK ÖNEMLİ! Bu siteye hangi siteden ulaşıldı bilgisini
        verir(URL olarak). Örneğin bir reklam verdik bir siteye gelen kişinin o siteden tıkladığını bunun sayesinde tutup o siteden kaç kişinin
        yönlendirildiğini bulabiliriz.
        */ 

        //*****************************************^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
        
        echo '$_SERVER["HTTP_USER_AGENT"] => ' . $_SERVER["HTTP_USER_AGENT"] . "<br/>"; //Kullanıcının browser bilgileri
        echo '$_SERVER["HTTPS] => ' .  $_SERVER["HTTPS"] . "<br/>"; //HTTPS'in açık veya kapalı olduğunu gösterir. (Bunu öğrenmek için url'in başına http yerine https yaz)

        echo '$_SERVER["REMOTE_ADDR"] => ' . $_SERVER["REMOTE_ADDR"] . "<br/>";//SIK KULLAILIR!!!! Kullanıcının IP adresini alır
        echo '$_SERVER["REMOTE_HOST"] => ' . $_SERVER["REMOTE_HOST"] . "<br/>";//Kullanıcının bilgisayar adını döndürür
        echo '$_SERVER["REMOTE_PORT"] => ' . $_SERVER["REMOTE_PORT"] . "<br/>";//Kullanıcının bu siteye hangi porttan bağlandığını döndürür

        echo '$_SERVER["SCRIPT_FILENAME"] => ' . $_SERVER["SCRIPT_FILENAME"] . "<br/>";// PHP dosyasının site dosyaları arasındaki konumunu gösterir
        echo '$_SERVER["SERVER_ADMIN"] => ' . $_SERVER["SERVER_ADMIN"] . "<br/>";//Server admininin e mailini döndürür
        echo '$_SERVER["SERVER_PORT"] => ' . $_SERVER["SERVER_PORT"] . "<br/>";//Serverin port bilgisi
        echo '$_SERVER["SERVER_SIGNATURE"] => ' . $_SERVER["SERVER_SIGNATURE"] . "<br/>";// SERVER_SOFTWARE, HTTP_HOST, SERVER_PORT bilgileri döndürülür.

        echo '$_SERVER["SCRIPT_NAME"] => ' . $_SERVER["SCRIPT_NAME"] . "<br/>";//PHP dosyasının server üzerindeki yolu PHP_SELF gibi
        echo '$_SERVER["REQUEST_URI"] => ' . $_SERVER["REQUEST_URI"] . "<>br/";//PHP dosyasının klasörünü döndürür


        







    
    ?>
    
</body>
</html>