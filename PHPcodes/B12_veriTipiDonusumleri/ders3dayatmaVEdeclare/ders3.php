<?php 

declare(strict_types=1); //TODO : çok katı kurallar koy (fonksiyona veri tipini doğru gönder yoksa hata verdirir bu fonksiyon sayesinde)

?>
<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type" content = "text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content = "tr">
    <meta charset="UTF-8">
    
    <title>b12d3</title>
</head>
<body>

<?php

// fonksiyona gönderilecek verinin tipini belirtmeye tür dayatma denir.
//funciton deneme(int yas, string isim){...} gibi

//declare(strict_types=1) -> belirtilen dayatmalara çok katı kurallar koyar, //!mutlaka en üstte kullanılmalıdır
//!örneğin function deneme(int yas) yazdık ve deneme("23") dedik, hata vermez. declare kullanırsak kuralları daha katı hale getiririz böylece hata verir!!!!!!!!!!!!!

function deneme(string $isim, int $yas):string{ //:string kısmı return ile dönen değerin tür dayatmasıdır(bu foknsiyondan yalnızca string değer döner başka bir şey döndürülmeye çalışılırsa hata verir!!)
    $birlestir = $isim . ", " . $yas . " yaşındadır.";

    return $birlestir;
}

$sonuc = deneme("Furkan", 23);//? : burada "23" gönderirsek hata verir (declare den dolayı, declare olmasa hata vermez çalışır "23" olsa da)
echo $sonuc;

    
?>
    
</body>
</html>