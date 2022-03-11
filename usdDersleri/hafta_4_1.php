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
    //2. koşul = ortalaması 3 ve üzeri olanlara +4 kredi ilave edilecek.
    // Krediniz artırıldı şeklinde mesaj yazdıralım. 
    //3'ün altında olanlara +2 kredi ilave edilecek. Yine mesaj yazılacak.
            //ortalama 3'Ün üzerinde ise harç tutarı %50 indirimli olacak.
    
        $ortalama = 3.99;
        $alabilecegiKredi=24;
        $harcTutari = 250;

      /*  if($ortalama >= 3 )
        {
            $alabilecegiKredi +=4;                          //1. işlem
            echo "Alabileceği Kredi : {$alabilecegiKredi}"; //2. işlem
        }
        else
        {
            $alabilecegiKredi +=2;                           //1. işlem
            echo "Alabileceği Kredi : {$alabilecegiKredi}"; //2. işlem
        }*/
        if($ortalama >= 3)  //true olursa 4 kredi artırdı
          { 
              $alabilecegiKredi +=4;
              $harcTutari /=2;
          }
            else //false olursa 2 kredi artırdı.
            {
               
                if($ortalama>2)
                    $alabilecegiKredi +=2;  
                    else 
                    echo "Ortalamanız 2'nin altında olduğu için kredi artırımı yapılmadı";
                    echo "<br>";

            }
           

        echo "Alabileceği Kredi : {$alabilecegiKredi}";
        echo "<br>";//Yeni satır oluşturur.
        echo "Ödeyeceğiniz Harç Tutarı :{$harcTutari}";
        echo "<br>";


            


          


    ?>       
    </div>
    <div class="card-footer bg-info  "></div>
  </div>
</div>

</body>
</html>
