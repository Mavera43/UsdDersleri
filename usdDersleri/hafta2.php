<?php define("sirketadı","ABC LTD ŞİRKETİ");  ?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php echo sirketadı; ?>  </title>
</head>
<body>
    <p>
        <h1> USD DERSLERİ </h1>
    </p>

    <?php
           

         $maas=9500;
         // yanlış değişken tanımlamaları
         // $1.adres;
         // $2.adres;
          // doğru değişken tanımlamaları
          $_1adres;
          $_2adres;

          $_1adres="Tavşanlı yolu 10.km. Kütahya";
          $adsoyad="Yahya Gökalp";
         // "süleyman konur"=$adsoyad;

         // br etiketi yeni bir satırbaşı yaptırır
         echo "Kişinin önceki maaşı : ".$maas."<br>";
         //$maas = $maas *(1.10);
         echo "Kişinin yeni maaşı :".$maas;
         //echo "<br>";
         echo "yeni bir satıra geçtik...<br>";
         //değişken adları mutlaka $ simgesi ile başlar.

         // yahya gökalp'in yeni maaşı : 8700 tl oldu.
         $adsoyad="Süleyman Konur";
         //$maas=$maas*(1.20);
        echo "$adsoyad'in yeni maaşı : ".($maas*(1.20))." TL'dir. <br>";

        define("siteUrl","https://www.dpu.edu.tr");   
        echo "<a href=".siteUrl.">web sitemiz</a>";
        echo "<hr><br>";
        echo "<a href = ".siteUrl."><img src=resimler/dpulogo.png></a>";
    ?>
  <!--  <a href="https://www.dpu.edu.tr"><img src=resimler/dpulogo.png>  </a> -->
</body>
</html>