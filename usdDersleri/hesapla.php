<?php
  echo "Girilen Öğrencinin Not Ortalaması :";
  // post metodu ile gönderilen form elementlerinin değerleri 
  // $_POST isimli süper global değişkende saklanır.
  echo "<pre>";  //biçimlendirilmiş paragraf(html elementi)
  print_r($_POST);
  echo "</pre>";
echo "<hr>";
echo "Vize Notu : {$_POST['vize']}<br>";
echo "Final Notu : {$_POST['final']}<br>";
$ortalama = $_POST['vize'] * 0.4 + $_POST['final'] *.6;
echo "Vize Final Ortalaması : {$ortalama}<br>";
$kredi=24;
if($ortalama >=75 )
    echo "Yeni Kredi : ".($kredi + 4)."<br>";
else
    {
        if($ortalama>=50)
            echo "Yeni Kredi : ".($kredi + 2)."<br>";
            else
            echo "Ortalamanız 50'nin altında olduğundan krediniz artırılmadı";   
    }
    



?>