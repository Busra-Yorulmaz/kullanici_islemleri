<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Veri Güncelleme</title>
    <link rel="stylesheet" href="kayit.css">
</head>
<body>
    <?php include "veritabani/baglanti.php";
    $kid = $_GET['id'];
    $sonuc = $baglan->query("SELECT * FROM personel WHERE id={$kid}")->fetch(PDO::FETCH_ASSOC);
    if ( $sonuc ){ ?>
        <div class="ortala">
            <div class="container" style="opacity: 0.8; display: flex; justify-content: center;">
                <form action="duzenleveri.php?id=<?php echo $kid ?>" method="POST">
                    <div class="baslik"><h1>DÜZENLEME İŞLEMLERİ</h1></div>
                    <div class="textbox">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <input type="text" name="fg_isim" value="<?php echo $sonuc['isim'] ?>">
                    </div>
                    <div class="textbox">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <input type="text" value="<?php echo $sonuc['soyisim'] ?>" name="fg_soyisim" >
                    </div> 
                    <div class="textbox">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <input type="number" value="<?php echo $sonuc['telefon'] ?>" name="fg_telefon">
                    </div>
                    <div class="textbox">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <input type="email"  value="<?php echo $sonuc['mail'] ?>"  name="fg_mail">
                    </div>
                    <div class="textbox">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <input type="text" value="<?php echo $sonuc['adres'] ?>" name="fg_adres">
                    </div>
                    <div class="textbox">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <input type="date" value="<?php echo $sonuc['dogum_tarihi'] ?>" name="fg_dt">
                    </div>
                    <div class="textbox">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <input type="text" value="<?php echo $sonuc['kullanici_adi'] ?>" name="fg_kadi">
                    </div>
                    <div class="textbox">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <input type="password" value="<?php echo $sonuc['sifre'] ?>" name="fg_sifre">
                    </div>
                    <input href="index.php" class="btn" type="submit" name="" value="KAYDET">
                </form>
            </div>
        </div>
    <?php } ?>
</body>
</html>