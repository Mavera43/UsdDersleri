<?php
    //ilişkisek dizi tanımının yapısı: key-value şeklinde olur.
    $sehirler = array();
    $sehirler = ["43"=>"Kütahya","06"=>"Ankara","34"=>"İstanbul","16"=>"Bursa"];
    //yukarıdaki tanımların ikisinde farkı yok.
   // $sehirler[]=["43"=>"Kütahya"];

   //sonradan diziye ilişkisel bir eleman ekleyelim
   $sehirler["35"]="İzmir";
   $sehirler["01"]="Adana";
   //$sehirler=array_values($sehirler); 
   unset($sehirler["35"]); //35 nolu key'e sahip olan elemanı siler

   echo "<pre>";
    print_r($sehirler);
    unset($sehirler);//değişkeni yok eder. kaldırır.
   // print_r($sehirler);

    // dizilerde eleman arama
    echo "dizilerde eleman arama<br>";
    $aylar=array('ocak','mart','nisan','mayıs');
    //in_array dizide bir eleman arar. varsa true, yoksa 
    //false döndürür.
   if(in_array("nisan",$aylar))
        Echo 'aranan değer dizide bulundu';
    Else
        Echo 'aranan değer dizide bulunamadı';


?>