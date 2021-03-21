<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type" content = "text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content = "tr">
    <meta charset="UTF-8">
    
    <title>b11d7</title>
</head>
<body>

<?php
    function TLyeCevir($paraBirimi, $tutar){ // TODO : para birimi ve tutar alınır, para birimine göre kur değeri güncellenir.
        if($paraBirimi == "Dolar"):
            $kur = 7.05;
        
        elseif($paraBirimi == "Euro"):        
            $kur = 8.5;
        
        elseif($paraBirimi == "Sterlin"):
            $kur = 9.69;
        else:
            $kur = 0; //geçersiz para birimi girilmiştir
        endif;

        return Hesapla($kur, $tutar); //TODO : elde edilen kur değerini ve miktar bilgisini hesapla fonksiyonuna yolla gelen sonucu da döndür

    }

    function Hesapla($kur, $miktar){ //TODO : kur * miktar yaparak para biriminin tl karşılığını bul ve bu değeri döndür
        $sonuc = $kur * $miktar;

        return $sonuc;
    }

    $Tlkarsilik = TLyeCevir("Dolar", 1259); // 1259 doları tl ye çevir.
    echo "Sonuç :" . $Tlkarsilik . "TL";

?>
    
</body>
</html>