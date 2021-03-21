<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type" content = "text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content = "tr">
    <meta charset="UTF-8">
    
    <title>B14d2 Form Gönder</title>
</head>
<body>
    
    <form action="ders2formAl.php" method="GET"> 
        İsim Soyad : <input type="text" name="isim_soyad"><br> <!-- name'e verdiğimiz değer ile verileri alıyoruz -->
        
        
        <!-- checkbox kullanırken name değerlerini aynı yapıp sonuna bir köşeli parantez açıp kapatıyoruz. Bu sayede işaretlediklerimizin value kısmında depolanan değerler formu aldığımız dosyaya bir dizi oalrak aktarılıyor. -->
        İlgilendiğiniz diller :<br>
        <input type="checkbox" name="diller[]" value="assembly">Assembly <br>
        <input type="checkbox" name="diller[]" value="c">C <br>
        <input type="checkbox" name="diller[]" value="c++">C++ <br>
        <input type="checkbox" name="diller[]" value="php">PHP <br>
        <input type="checkbox" name="diller[]" value="python">Python <br>
        <input type="checkbox" name="diller[]" value="javascrpit">JavaScript <br>

        <input type="submit" value="Formu Gönder">

        

    </form>


</body>
</html>