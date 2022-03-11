
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Php Sabitler, Değişkenler, Karar yapıları</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body> 
<div  class="container ">
  <h2> </h2>
  <div class="card">
    <div class="card-header bg-danger">
        Header
    </div>
    <div class="card-body bg-light">
   
     <?php
        // $x=1;
        // $y="1";
        // $sonuc1=$x==$y;// değer karşılaştırması yapılıyor
        // $sonuc2=$x===$y;  // değer ve tür karşılaştırması
        // var_dump($sonuc1);
        // echo "<br>";
        // var_dump($sonuc2);
        // echo "<hr>";
        // $str1="Bilgisayar";
        // $str2="Computer";
        // // ve operatöründe tüm koşullar sağlanırsa sonuç true olur.
        // // bir tanesi bile false olursa sonuç  false olur.
        // $sonuc3 = ($x==$y) && ($str1!=$str2);
        // echo "<br>";
        // var_dump($sonuc3);
        // // veya (||) alt+gr tuşu ve < tuşu operatöründe tüm koşullardan
        // //bir tanesi sağlanırsa sonuç true olur.
        // // tümü false olursa sonuç  false olur.
        // $y=5;
        // $sonuc3 = ($x==$y) || ($str1==$str2);
        // echo "<br>";
        // var_dump($sonuc3);
        // echo "<hr> ! değil operatörü";
        // $sonuc3 = !($x==$y);
        // var_dump($sonuc3);
    //Örnek: gno 3 ve üzeri ise alabilecği krediyi 8 artırsın
         //   ve harç tutarını %50 azaltsın ve ekrana yazdırsın;
         //gno <3 alabileceği kredi 4 artırsın.
         //harç tutarınıda %20 eksiltsin
    $gno = 1.5;
    $harc = 500;
    $kredi = 24;
    $result = ($gno >= 3);
    /*if($result)
        $kredi = kredi + 8;*/ 
        // if esle ifadelerinde true veya false olma durumlarında birden fazla
        // deyim işlem görecekse işlemler süslü parantez içinde yazılır.{}

    if($gno >= 3)
    {
        $kredi +=8; // eşitliğin sağındaki değeri solundaki değişken değerine ekler.
        $harc /=2;
    }
    else
    {
        $kredi +=4;
        $harc = $harc *(1-0.20);
    }

    echo "Öğrencinin Genel Ortalaması
     <span style=color:red;font-weight:bolder>{$gno}</span>";
    echo "<br>";
    echo "Öğrencinin Alabileceği Kredi
     <span style=color:blue;font-weight:bolder> {$kredi}</span>";
    echo "<br>";
    echo "Öğrencinin Ödeyeceği Harç Tutarı 
    <span style=color:orange;font-weight:bolder>{$harc}</span>";


        
         
        
        
        //false ise yapılacak işlem;
        



        

?>
         
    </div>
    <div class="card-footer bg-info  ">Footer</div>
  </div>
</div>

</body>
</html>
