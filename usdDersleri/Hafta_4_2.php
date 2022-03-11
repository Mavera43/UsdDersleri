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
    <div class="card-header">
        Hafta 4. 1. Uygulama
    </div>
    <div class="card-body bg-light">
    <?php 
       /* Örnek: Bu örnekte basit bir vergi hesabı programı geliştirmek istiyoruz.
       Gelir vergisinin aşağıdaki kurallara göre belirlendiğini varsayalım:*/
       $gelir=50000;
       $vergiKesintisi=0; //hesaplatılacak
       $netGelir=0;  //hesaplatılacak

        if($gelir <= 150000)
            $vergiKesintisi = $gelir * 0.25;
        else if($gelir <= 300000)
            $vergiKesintisi = $gelir * 0.30;
        else if($gelir <= 600000)
            $vergiKesintisi = $gelir * .35;
            else
            $vergiKesintisi = $gelir * .40;
        $netGelir = $gelir - $vergiKesintisi; 
        echo "Net Gelir : {$netGelir} <br>";
    
        echo "Vergi Kesitisi {$vergiKesintisi} <br>";

        



  
    ?>       
    </div>
    <div class="card-footer bg-info  "></div>
  </div>
</div>

</body>
</html>
