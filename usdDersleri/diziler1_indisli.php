<?php
//dizi değişkenlerde dizinin boyutunu vermek gerekmez.
$meyveler=array("elma","armut","vişne","kiraz");  //1.yöntem
$sehirler=[];                                     //2.yöntem
$bolumler=["makina","elektronik","endüstri"];     //3.yöntem
$parabirimleri=array();                           //4.yöntem

// aşağıdaki işlem bir değişkenin dizi olup olmadığın belirler.
// echo gettype($parabirimleri)."<br>";

//dizilere değer aktarma
$sehirler[]="Kütahya";
$sehirler[]="İstanbul";
$sehirler[]="Ankara";
$sehirler[]="Bursa";


//echo $sehirler; //array
// echo       // string parametre alır. o yüzden dizileri(arrayleri) yazdıramaz

echo "<pre>";
//dizinin tüm elemanlarını yazdırır
print_r($sehirler);
//dizinin 3.elemanını yazdırmak istersek
echo $sehirler[3];
//echo $sehirler[8];//bu satır hata verir.
// çünkü sehirler dizisinin 8.indekinde eleman yok.

$sehirler[]="İzmir";

//dizideki eleman sayısını öğrenmek için count kullanılır
$sayi=count($sehirler);

//for döngüsü ile dizi elemanlarını yazdırmak 
// for ($i=0; $i < $sayi ; $i++) { 

// }
//for döngüsü ile dizi elemanlarını yazdırmak 
for ($i=0; $i < count($sehirler) ; $i++) { 
    echo $i."=>".$sehirler[$i]."<br>";
}

echo "foreach döngüsü ile diziyi yazdırmak";
//foreach döngüsü 
//$sehirler değişkeninin indislerini
// $key değişkenine, değerlerini de $value değişkenine aktarı
foreach ($sehirler as  $value) {
    echo  $value."<br>";
}

















?>