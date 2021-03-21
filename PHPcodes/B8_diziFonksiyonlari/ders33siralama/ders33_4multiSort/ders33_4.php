<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type" content = "text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content = "tr">
    <meta charset="UTF-8">
    
    <title>b8d33_4</title>
</head>
<body>

<?php 
    /*
    array_multisort() -> şu ana kadar gördüğümüz sıralama işlemlerrini tek başına yapabilir. (bazı parametreler sayesinde)
    SORT_ASC     : küçükten büyüğe 
    SORT_DESC    : büyükten küçüğe
    SORT_REGULAR : standart sıralama (default olarak bu parametre vardır multisort fonksiyonunda)
    SORT_NUMERIC : rakamsal sıralama
    SORT_STRING  : string sıralama
    SORT_NATURAL : doğal sıralama
    */
    //! anahtarlar otomatik verilirse bozulur, biz verirsek bozulmaz
    //? birden fazla dizi için de uygulanabilir

    $dizi = array("Furkan", 3.14, "Eren", 8, "Ayşe", 19, "Fadime", "Aytekin", 217);
    echo "Ana dizi : <pre>";
    print_r($dizi);
    echo "</pre>";

    $dizi = array("Furkan", 3.14, "Eren", 8, "Ayşe", 19, "Fadime", "Aytekin", 217);
    array_multisort($dizi, SORT_ASC);// TODO : stringleri kendi arasında, sayısal değerleri kendi arasında küçükten büyüğe sıralar
    echo "SORT_ASC (küçükten büyüğe sırala) : <pre>";
    print_r($dizi);
    echo "</pre>";

    $dizi = array("Furkan", 3.14, "Eren", 8, "Ayşe", 19, "Fadime", "Aytekin", 217);
    array_multisort($dizi, SORT_DESC);// TODO : stringleri kendi arasında, sayısal değerleri kendi arasında büyükten küçüğe sıralar
    echo "SORT_DESC (büyükten küçüğe sırala) : <pre>";
    print_r($dizi);
    echo "</pre>";

    $dizi = array("Furkan", 3.14, "Eren", 8, "Ayşe", 19, "Fadime", "Aytekin", 217);
    array_multisort($dizi, SORT_REGULAR);// TODO : varsayılan değerdir(küçükten büyüğe).
    echo "SORT_REGULAR : <pre>";
    print_r($dizi);
    echo "</pre>";

    $dizi = array("Furkan", 3.14, "Eren", 8, "Ayşe", 19, "Fadime", "Aytekin", 217);
    array_multisort($dizi, SORT_NUMERIC);// TODO : sadece sayısal değerler sıralanaır(küçükten büyüğe).
    echo "SORT_NUMERIC(sadece sayılasal değerler sıralanır) : <pre>";
    print_r($dizi);
    echo "</pre>";

    $dizi = array("Furkan", 3.14, "Eren", 8, "Ayşe", 19, "Fadime", "Aytekin", 217);
    array_multisort($dizi, SORT_STRING);// TODO : string gizi sıralanır. (stringlerde sorun olmaz ama sayılarda 217, 8 den önce gelir çünkü karakter karakter bakılır).
    echo "SORT_STRING(karakter karakter bakılır değerlere) : <pre>";
    print_r($dizi);
    echo "</pre>";

    $dizi = array("Furkan", 3.14, "Eren", 8, "Ayşe", 19, "Fadime", "Aytekin", 217);
    array_multisort($dizi, SORT_NATURAL);// TODO : sadece sayısal değerler sıralanaır(küçükten büyüğe).
    echo "SORT_NATURAL(doğal sıralama yapar (yani karakter karakter bakmaz sayısal değerler baz alınır)) : <pre>";
    print_r($dizi);
    echo "</pre>";


    

?>
    
</body>
</html>