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
    if(!$_GET){ //TODO : eğer get ile bir şey gelmemişse formu göster
?>
    <form action="ders5.php" method="GET">
        İsim Soyad : <input type="text" name="isim_soyad"> <br>
        E posta : <input type="email" name="email"> <br>
        Mesajınız : <textarea name="mesaj" id="" cols="30" rows="10"></textarea>  <br>
        <input type="submit" value="Gönder">
        
    </form>
<?php
    }//yukarıdaki if 'in sonlanma süslü parantezi
    else{//TODO : get ile herhangi bir değer geldiyse (yani gönder butonun basıldıysa) form kaybolacak ve burası çalışacak

        $isim = $_GET["isim_soyad"];
        $email = $_GET["email"];
        $mesaj = $_GET["mesaj"];


        echo $isim . " isimli kullanıcının :<br>";
        echo "E-posta adresi -> " . $email . "<br>";
        echo "Mesajı -> " .$mesaj;

    }
?>

    
</body>
</html>