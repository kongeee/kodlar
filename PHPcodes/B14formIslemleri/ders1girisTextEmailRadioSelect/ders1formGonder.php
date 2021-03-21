<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type" content = "text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content = "tr">
    <meta charset="UTF-8">
    
    <title>B14d1 Form Gönder</title>
</head>
<body>
    <!-- Bu dosya php uzantılı olmasına rağmen hiçbir php kodu yazmadık, .php uzantılı dosyaların içinde yalnızca html kodları olabilir -->

    
    <!-- action kısmı formun verilerini hangi dosyaya göndereceğimizi, method kısmı formun gönderilme metodunu belirler. -->
    <!-- post ile gönderilen formlar gizlidir, get ile gönderilen formlara girilen bilgiler arama çubuğunda yer alır -->
    <form action="ders1formAl.php" method="GET"> 
        İsim Soyad : <input type="text" name="isim_soyad"><br> <!-- name'e verdiğimiz değer ile verileri alıyoruz -->
        E-mail : <input type="email" name="email"><br> <!-- type = email yaptığımızda input alanında @ işaretini kontrol eder -->
        
        <!-- radio butonları, tek seçenek seçme imkanı sunar bize -->
        Cinsiyet : <input type="radio" name="cinsiyet" value="Erkek">Erkek
                   <input type="radio" name="cinsiyet" value="Kadın">Kadın <br>

        <!-- select kısmı da bir input alanıdır, optionlar ile belirtilen seçeneklerden birisi seçilir. -->
        Yaş : <select name="yas">
            <option value=""></option>
            <option value="20">20</option>
            <option value="21">21</option>
            <option value="22">22</option>
            <option value="23">23</option>
            <option value="24">24</option>
            <option value="25">25</option>
            
            </select>
            <br>
        
            <!-- submit type'ı bir butondur ve üzerinde value'deki değer yazılıdır. Bu butona basıldığında form, action ile belirtilen dosyaya gönderilir  -->
            <input type="submit" value="Gönder">
            
            

        

    </form>


</body>
</html>