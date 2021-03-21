<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type" content = "text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content = "tr">
    <meta charset="UTF-8">
    
    <title>B14d4 Dosya Seçme Formu</title>
</head>
<body>

   
    
    <form action="ders4dosyalariKaydet.php" method="POST" enctype="multipart/form-data"> 
        <!-- Diğerinden farklı oalrak sadece multiple yazdık-->
        Yüklenecek dosyaları seçin : <input type="file" name="dosya[]" multiple><br> <!-- Birden fazla dosya olduğundan [] koy-->
        <input type="submit" value="Dosyayı Kaydet">

        

    </form>


</body>
</html>