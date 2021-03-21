<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type" content = "text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content = "tr">
    <meta charset="UTF-8">
    
    <title>b9d8</title>
</head>
<body>

<?php 
    // fatal errorlar ve kritik hatalar(örn parse) hariç @ işareti ile hata gönderilmesini engelleyebiliriz

    echo @$deger; // normalde olmayan bir değişkeni yazdırmaya çalışmak bir notice hatasıdır. ama @ koyduğumuz içib bize hata vermeyecektir ve logda kaydı tutulmayacaktır.

    //? @trim(); //trim fonksiyonu stringin başındaki ve sonundaki boşlukları siler, bir parametre ister, vermezsek warning(uyarı verir) bunu da @ ile kapatabiliriz
            
?>
    
</body>
</html>