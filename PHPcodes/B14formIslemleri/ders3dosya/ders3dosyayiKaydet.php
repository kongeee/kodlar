<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type" content = "text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content = "tr">
    <meta charset="UTF-8">
    
    <title>B14d3 Dosyayı Kaydet</title>
</head>
<body>

<?php
    //move_uploaded_file() -> 1. param : gelen dosyanın temp ismi , 2.param : dosyanın yeni kayıt yeri
    //?aynı isimde bir dosya gelirse bu dosya öncekinin stüne yazılır (yani önceki silinir.)

    //! Gerçek bir sunucuya geçildiği zaman burada oluşturulan Dosya klasörüne FTP programından sağ tıklanarak izinler kısmına 777 değeri verilmelidir (yani herkes bu dosya üzerinde her değişikliği yapabilir)

    
    
    //!Dosya alacağın zaman bunu $_FILES ile yapmayı unutma!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
    $gelen_dosya = $_FILES["dosya"]; //TODO : dosya'nın bazı özelliklerini dizi şeklinde tutar
    
    

    //?Bu özellikler arasından temp adını ve dosyanın adını, move_uploaded_file fonksiyonunda kullanmak üzere alıyoruz

    $temp_adi = $gelen_dosya["tmp_name"];
    $isim = $gelen_dosya["name"];

    $yol = "Dosyalar/" . $isim; //TODO : dosyanın kaydedileceği klasörün adı ve dosya adı ile dosyanın tam yolu verilmiş olur

    if(move_uploaded_file($temp_adi, $yol)){
        echo "Dosya yükleme işlemi başarılı.<br>";

        echo "Gelen dosyanın özellikleri :<pre>";
        print_r($gelen_dosya);
        echo "</pre>";

        echo "<img src='{$yol}'>";
    }else{
        echo "Yükeleme başarısız!!!";
    }

   
   
?>
    
</body>
</html>