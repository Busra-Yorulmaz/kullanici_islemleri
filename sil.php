<?php include "veritabani/baglanti.php";
$kid = $_GET['id'];
$delete = $baglan->exec("DELETE FROM personel where id = {$kid}");
echo "<script>alert('Veriler başarıyla silindi');window.location.assign('index.php');</script>"; ?>
