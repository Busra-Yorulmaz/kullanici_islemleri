<?php include "veritabani/baglanti.php";
if(isset($_POST['kaydet'])){
    $isim           = $_POST['fg_isim'];
    $soyisim        = $_POST['fg_soyisim'];
    $telefon        = $_POST['fg_telefon'];
    $mail           = $_POST['fg_mail'];
    $adres          = $_POST['fg_adres'];
    $dt             = $_POST['fg_dt'];
    $kullaniciadi   = $_POST['fg_kadi'];
    $sifre          = $_POST['fg_sifre'];
    $personel=$baglan->prepare("SELECT * FROM `personel` where mail='$mail'"); // mail konturolu olacaktır
	$personel->execute();
 	$count=$personel->rowCount(); // aynı maıl var 1 yoksa 0
	if ($count<1) { // maıl dogruysa ıf gırdı
            $sorgu = $baglan->prepare("INSERT INTO personel SET 
                isim            = :tmp_isim,
                soyisim         = :tmp_soyisim,
                telefon         = :tmp_telefon,
                mail            = :tmp_mail,
                adres           = :tmp_adres,
                dogum_tarihi    = :tmp_dt,
                kullanici_adi   = :tmp_ka,
                sifre           = :tmp_sifre
            ");
            $kayit = $sorgu->execute(array(
                "tmp_isim"      =>   $isim,
                "tmp_soyisim"   =>   $soyisim,  
                "tmp_telefon"   =>   $telefon,
                "tmp_mail"      =>   $mail,
                "tmp_adres"     =>   $adres,
                "tmp_dt"        =>   $dt,
                "tmp_ka"        =>   $kullaniciadi,
                "tmp_sifre"     =>   $sifre
            ));
            if($kayit){
                echo "<script>alert('Veriler başarıyla eklendi');window.location.assign('index.php');</script>";
            }
    }elseif($count==1){
        header("Location:formekle.php?durum=mail");// kayitlı email var başvuru sayfasına yönlendirme yapılır. 
    }
}
?>