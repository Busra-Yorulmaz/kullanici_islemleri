<?php include "veritabani/baglanti.php";
$isim           = $_POST['fg_isim'];
$soyisim        = $_POST['fg_soyisim'];
$telefon        = $_POST['fg_telefon'];
$mail           = $_POST['fg_mail'];
$adres          = $_POST['fg_adres'];
$dt             = $_POST['fg_dt'];
$kullaniciadi   = $_POST['fg_kadi'];
$sifre          = $_POST['fg_sifre'];
$sorgu = $baglan->prepare("UPDATE personel SET 
    isim            = :tmp_isim,
    soyisim         = :tmp_soyisim,
    telefon         = :tmp_telefon,
    mail            = :tmp_mail,
    adres           = :tmp_adres,
    dogum_tarihi    = :tmp_dt,
    kullanici_adi   = :tmp_ka,
    sifre           = :tmp_sifre
    where id = {$_GET['id']}
");
$guncelle = $sorgu->execute(array(
    "tmp_isim"      =>   $isim,
    "tmp_soyisim"   =>   $soyisim,  
    "tmp_telefon"   =>   $telefon,
    "tmp_mail"      =>   $mail,
    "tmp_adres"     =>   $adres,
    "tmp_dt"        =>   $dt,
    "tmp_ka"        =>   $kullaniciadi,
    "tmp_sifre"     =>   $sifre
));
if($guncelle){
    echo "<script>alert('Veriler başarıyla güncellendi');window.location.assign('index.php');</script>";
}
?>
