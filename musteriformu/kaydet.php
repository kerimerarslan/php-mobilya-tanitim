<?php
include '../include/connect.php';
$isim=$_POST['isim'];
$email=$_POST['email'];
$konu=$_POST['konu'];
$mesaj=$_POST['mesaj'];
$sql = "INSERT INTO `mesajlar`( `ad_soyad`, `email`, `konu`, `mesaj`) "
        . "VALUES ('$isim','$email','$konu','$mesaj')";

mysqli_query($link, $sql) //link üzerinde sql i çalıştır
        or die('olmadı');//olmazsa olmadı yaz.

echo 'Mesajınız Kaydedildi.';
