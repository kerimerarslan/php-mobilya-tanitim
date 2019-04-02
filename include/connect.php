<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "mobilya_db";

$link = mysqli_connect($dbhost, $dbuser, $dbpass)//Bu veri tabanına bağlan ve bağlantıyı al 
        or die("Error connecting to database");//Bağlanamazsan hata yaz.
mysqli_select_db($link,$dbname);//link bağlantısının üzerinden veri tabanı seç
mysqli_query($link,"SET NAMES 'utf8'");//bağlantının karakter setini utf8 yap.


//mysql_connect eski versiyonlarda geçerli yeni versiyonlarda desteklenmiyor. Yenisinde mysqli_connect var.