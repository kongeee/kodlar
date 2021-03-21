<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type" content = "text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content = "tr">
    <meta charset="UTF-8">
    
    <title>b11d14</title>
</head>
<body>

<?php
    function Bir(){
        echo "Selam Bir<br>";

        function Iki(){
            echo "Selam Iki<br>";

            function Uc(){
                echo "Selam Uc";
            }
        }

        //Uc(); bu fonksiyonu burada da çağırabiliriz (ama bir in altında çağıramayız.)
    }

    //Uc isimli fonksiyona ulaşmak için Uc() yazarsak hata verir. Daha öncesinde üst fonksyionlarının çağırlmış olması istenir.

    Bir();
    Iki();
    Uc();

    //! bir ve iki çağırılmadan uc çağırılırsa hata verir, böyle bir fonk yok der
?>
    
</body>
</html>