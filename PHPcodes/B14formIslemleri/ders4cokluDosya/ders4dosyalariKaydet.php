<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type" content = "text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content = "tr">
    <meta charset="UTF-8">
    
    <title>B14d4 Dosyayı Kaydet</title>
</head>
<body>

<?php
    //move_uploaded_file() fonksiyonu için temp uzantısı ve yeni dosya yoluna ihtiyacmız var

    $gelen_dosya = $_FILES["dosya"]; //TODO : gelen dosyaların isimleri ana dizi içindeki name dizisi altında sırayla bulunur şöyle ki :  
    /*
        ana_dizi(
            name(
                1.dosya
                2.dosya
                ...
            )
            temp_name(
                1.dosya
                2.dosya
                ...
            )
            boyut(
                ...
            )
            ...
        )
    
    */
    
    foreach($gelen_dosya["tmp_name"] as $anahtar=>$deger){//? burada 2 boyutlu bir dizi vardır

        //aşağıdaki 2 satır sayesinde temp ismi alınan dosyanın normal ismi de alınmış oldu
        $temp_ismi = $gelen_dosya["tmp_name"][$anahtar];
        $dosya_ismi = $gelen_dosya["name"][$anahtar];

        $yol = "Dosyalar/" . $dosya_ismi;

        if(move_uploaded_file($temp_ismi, $yol)){
            echo "Yükleme başarılı!<br> Yüklenen dosya : " . $dosya_ismi . "<br><br><br><br>";
            

        }else{echo "Yükleme başarısız!!<br>";}

    }
    

   
   
?>
    
</body>
</html>