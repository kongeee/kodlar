<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type" content = "text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content = "tr">
    <meta charset="UTF-8">
    
    <title>B14d3 Dosya Seçme Formu</title>
</head>
<body>

    <!-- Formdan dosya alacaksak kesinlikle metod post olmalı ve enctype = multipart/form-data olmalı -->
    
    <form action="ders3dosyayiKaydet.php" method="POST" enctype="multipart/form-data"> 
        
        Yüklenecek dosyayı seçin : <input type="file" name="dosya"><br> <!-- type file olunca dosya seçme butonu geliyor -->
        <input type="submit" value="Dosyayı Kaydet">

        

    </form>


</body>
</html>