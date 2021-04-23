<?php include "veritabani/baglanti.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kullannıcı Verileri</title>
    <link rel="stylesheet" href="kayit.css">
</head>
<body>
    <div class="ortala">
        <div class="container">
            <link href="https://fonts.googleapis.com/css?family=Montserrat:100,300" rel="stylesheet">
            <table id="personel">
                <tr>
                    <th>ID</th>
                    <th>İsim</th>
                    <th>Soyisim</th>
                    <th>Telefon</th>
                    <th>Mail</th>
                    <th>Adres</th>
                    <th>Doğum Tarihi</th>
                    <th>DÜZENLE</th>
                    <th>SİL</th>
                </tr>
                <?php $sorgu = $baglan->query("SELECT * FROM personel ",PDO::FETCH_ASSOC);
                if ($sorgu->rowCount()) {
                    foreach($sorgu as $k){ ?>
                        <tr>
                            <td><?php echo $k['id'] ?></td>
                            <td><?php echo $k['isim'] ?></td>
                            <td><?php echo $k['soyisim'] ?></td>
                            <td><?php echo $k['telefon'] ?></td>
                            <td><?php echo $k['mail'] ?></td>  
                            <td><?php echo $k['adres'] ?></td>
                            <td><?php echo $k['dogum_tarihi'] ?></td>
                            <td><a href="duzenle.php?id=<?php echo $k['id'];?>">DÜZENLE</a></td>
                            <td><a href="sil.php?id=<?php echo $k['id'];?>">SİL</a></td>
                        </tr>
                    <?php }
                }  ?>
            </table>
            <div style="display: flex; justify-content: center;float: right; with=100px; margin:30px">
                <a href="formekle.php">YENİ VERİ EKLE</a>
            </div>  
        </div>
    </div>
</body>
</html>