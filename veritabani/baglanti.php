<?php try{ $baglan = new PDO("mysql:host=127.0.0.1;dbname=kayit_islemleri", "root", "");}catch(PDOException $e){ echo $e->getMessage();} ?>