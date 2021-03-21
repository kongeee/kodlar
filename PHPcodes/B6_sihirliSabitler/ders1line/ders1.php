<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type" content = "text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content = "tr">
    <meta charset="UTF-8">
    
    <title>b6d1</title>
</head>
<body>

<?php
    //__LINE__ sihirli sabtti bulunduğu satır numarısını döndürür (değişkene aktarılabilir.
    //Eğer değikene aktarılırsa __LINE__ ın değişkene aktarıldığı satır baz alınır)

    echo __LINE__;// Burada 16 yazar

    print("<br>");
    $degisken = __LINE__;
    echo $degisken; // Burada 20 değil 19 yazar çünkü __LINE__ 19. satırda yazıldı.

?>
    
</body>
</html>