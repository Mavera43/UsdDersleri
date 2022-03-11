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
    <form name="verigir" method="post" action="hesapla.php" >
        <label> Ad Soyad </label><br>
        <input type="text" name="adsoyad"><br>
        <label> Vize Notu </label><br>
        <input type="number" name="vize" >
        <br>
        <label> Final Notu </label><br>
        <input type="number" name="final" ><br>
        <br>
        <input type="submit" name="btnHesapla" value="Hesapla">
    </form>

    <?php 
  


  
    ?>       
    </div>
    <div class="card-footer bg-info  "></div>
  </div>
</div>

</body>
</html>
