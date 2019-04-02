<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
</head>

<?php
include '../include/connect.php';
$urun_isim = $_POST['urun_isim'];
$urun_aciklama = $_POST['urun_aciklama'];
$urun_foto=$_FILES['dosya']['name'];
$sqlm = "INSERT INTO URUN (ISIM,ACIKLAMA,FOTOGRAF) "
        ."VALUES('$urun_isim','$urun_aciklama','$urun_foto')";

mysqli_query($link, $sqlm) //link üzerinde sql i çalıştır
        or die('olmadı'); //olmazsa olmadı yaz.

echo 'Mesajınız kaydedildi.';

if(isset($_FILES['dosya']))
{
echo "Dosya Geldi İşleme Başlanıyor... <br>";
 
$Error = $_FILES['dosya']['error'];
if($Error != 0)
{
echo "Dosyada Bir Hata Mevcut. <br>";
}
else
{
$file_size = $_FILES['dosya']['size'];
if($file_size > (1024*1024*5))
{
echo "Dosya boyutu 5 MB'den büyük olamaz. <br>";
}
else
{
$file_type = $_FILES['dosya']['type']; 
$file_name = $_FILES['dosya']['name'];
$file_extension = explode('.', $file_name);
$file_extension = $file_extension[count($file_extension)-1];
$target_folder='../resimler/';
 
if($file_extension != 'jpg')
{
echo "Sadece .jpg uzantılı dosyaları yükleyebilirsiniz. <br>";
}
else
{
$temp_file = $_FILES['dosya']['tmp_name'];
move_uploaded_file($temp_file, $target_folder . $file_name);
echo "Dosyanız <b>" .$target_folder. "</b> Klasörüne <b>" . $file_name. " </b> Adıyla Yüklendi.";
header('Refresh: 2; url=../index.php');
}
}
}
}
else
{
echo "Dosya Gelmedi";
}
