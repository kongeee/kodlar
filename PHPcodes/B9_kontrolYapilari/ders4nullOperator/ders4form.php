<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type" content = "text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content = "tr">
    <meta charset="UTF-8">
    
    <title>b9d4form</title>
</head>
<body>

<?php 
    // ! ?? : null operatörüdür. Eğer bir formdan işlem  yapılıyorsa ve değer boş gelirse ekranda hata mesajı görünür (kötü niyetli bir kullanıcı incele diyip örneğin isim text alanını koddan silerse ve sadece soyadını yazıp gönder derse bu hata mesajı görünmesine yol açar). Bunun görünmemesi için null gelirse şunu yap diye belirtiyoruz . (kontrol kısmında kullandım bunu)        
?>
<form method="get" action="ders4kontrol.php">
    İsim : <input type="text" name="isim"> <br>
    Soyisim : <input type="text" name="soyad"> <br>
    <input type="submit" value="Gönder">


</form>
    
</body>
</html>