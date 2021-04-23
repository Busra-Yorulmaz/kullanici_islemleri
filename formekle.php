<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kayıt sayfası</title>
    <link rel="stylesheet" href="kayit.css">
</head>
<body>
    <div class="ortala">
        <div class="container" style="opacity: 0.8; display: flex; justify-content: center;">         
            <form action="ekleveri.php" method="POST">
                <div class="baslik"><h1>KAYIT İŞLEMLERİ</h1></div>
                <?php if(isset($_GET['durum'])){ ?>
                  <h3 class="page-subhead-line" style="color:<?php  if($_GET['durum']=='mail' ){echo "red"; } ?>"><?php
                  if($_GET['durum']=='mail'){ echo "Kayıtlı email...";} 
              }?> 
              <div class="textbox">
                <i class="fa fa-user" aria-hidden="true"></i>
                <input type="text"  placeholder="İSİM" name="fg_isim"required>
            </div>
            <div class="textbox">
                <i class="fa fa-user" aria-hidden="true"></i>
                <input type="text" placeholder="SOYİSİM" name="fg_soyisim" value="" required>
            </div>
            <div class="textbox">
                <i class="fa fa-user" aria-hidden="true"></i>
                <input type="number" placeholder="TELEFON" name="fg_telefon" required>
            </div>
            <div class="textbox">
                <i class="fa fa-user" aria-hidden="true"></i>
                <input type="email"  placeholder="MAİL"  name="fg_mail" required>
            </div>
            <div class="textbox">
                <i class="fa fa-user" aria-hidden="true"></i>
                <input type="text" placeholder="ADRES" name="fg_adres" required>
            </div>
            <div class="textbox">
                <i class="fa fa-user" aria-hidden="true"></i>
                <input type="date" placeholder="DOGUM TARİHİ" name="fg_dt" required>
            </div>
            <div class="textbox">
                <i class="fa fa-user" aria-hidden="true"></i>
                <input type="text" placeholder="KULLANİCİ ADİ" name="fg_kadi" required>
            </div>
            <div class="textbox">
                <i class="fa fa-user" aria-hidden="true"></i>
                <input type="password" placeholder="SİFRE" name="fg_sifre" required>
            </div>
            <input class="btn" type="submit" name="kaydet" value="KAYDET">
        </form>
    </div>
</div>
</body>
</html>