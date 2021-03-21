<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type" content = "text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content = "tr">
    <meta charset="UTF-8">
    
    <title>b9d7</title>
</head>
<body>

<?php 
    /* 
    
    error_reporting() : ekranda gösterilecek ve log kayıtlarında tutulacak hata seviyelerini ayarlar

    E_ALL : Tüm hata seviyeleri
    E_ERROR : fatal errorlar (olmayan bir fonksiyonu çağırma)
    E_WARNING : uyarılar (parametre isten bi fonskiyona parametre girmeme)
    E_PARSE : derleme zamanı ayrıştırma hataları (değişkeni $ degisken gibi hatalı olsuturma)
    E_NOTICE : çalışma zamanı bildirimleri (olmayan bir değişkeni ekrana yazdırmak)
    0 : tüm hataları gizler
    */
    //! hata logları için : XAMPP -> apache -> logs klasörünün altındaki error.log dosyasında tutulur
    
    //örneğin olmayan bir fonksiyonu çağırmak bir fatal error' dur

    
    error_reporting(0); //böyle yazarsak hiçbir hatayı ve uyarıyı göstermez ve kayıt altına almaz
    //? denemeFonksiyonu(); yorum satırını kaldır ve çalıştır

    /*
    error_reporting(E_ERROR | E_WARNING) -> fatal errorları veya uyarıları göster (diğerleri gösterilmez)
    error_reporting(E_ALL ^ E_NOTICE) -> enotice hataları hariç tüm hataları göster

    */
            
?>
    
</body>
</html>