<!-- php dosyalarında html css js kodlarını olabileceğini gördük -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>b1d1</title>
    
    <!--CSS içeriği de yazılabilir. Arkaplan siyah olsun yazı beyaz olsun-->
    <style>  
        body{
            background-color:black; 
            color:white;
        }
    </style>
    
    <!--JS içeriği de yazılabilir.-->
    <script type="text/javascript" language="javascript">

        function deneme(){
            document.getElementById("ilk_div").innerHTML = "Tıklama başarılı";
        }

    </script>

</head>
<body>
    <?php
       echo ("Furkan Ekici"."<br />"); //alt satıra geçmek için br kullan.
        
    ?>

    <!--Butona tıklayınca deneme() fonksiyonu jsde çalışsın ve js de alttaki div e yazı yazsın-->

    <input type="button" value="JS kodunu dene" onClick="deneme();"> 
    <div id="ilk_div"></div>
</body>
</html>