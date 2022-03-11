
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
        $yil = 1980;
        $kosul1 = ($yil % 400 ==0);
        $kosul2 = ($yil % 4==0)&&($yil % 100 !=0);
        $sonuc = $kosul1 || $kosul2;
        if ($sonuc)
            {
                echo "Girdiğiniz 
                <span style=color:orange >{$yil}</span> yılı ARTIK BİR YILDIR";                    
            }
            else
            {
                echo "Girdiğiniz  <span style=color:red >{$yil} </span>yılı ARTIK BİR YIL DEĞİLDİR!";
            }

    ?>
         
    </div>
    <div class="card-footer bg-info  ">
        <?php
        echo "<h4> Artırma ve eksiltme operatörleri</h4>";
        //     $x = 10;
        //    $x++; //x değişkeninin değerini bir artırır
        //    echo "x değişkeninin değeri : {$x} <br>";
        //    $x--; //x değişkeninin değerini bir azaltır
        //    echo "x değişkeninin değeri : {$x} <br>"; 
        //     echo "<hr>";
           $x = 10;
           // --$x; //değişkenin değerini 1 azaltır. Önce azaltır sonra değişkeni işleme sokar.
           // ++$x; //değişkenin değerini 1 artırır. Önce artırır sonra değişkeni işleme sokar.

          /* echo "x değişkeninin değeri :  ".(++$x); 
           echo "x değişkeninin değeri :  ".(--$x); */
           $x = 10;
           $x++;
           $x--;
           ++$x;
           --$x;
           echo "x değişkeninin değeri :  ".($x); 





        ?>


    </div>
  </div>
</div>

</body>
</html>
