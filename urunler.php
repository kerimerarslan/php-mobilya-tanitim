<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>TODO supply a title</title>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="stylesheet" href="css/css_sablonu.css"/>
    </head>
    <body>
        <div class="urunler_sablon">
            <?php
            include 'include/connect.php';
            $sonuc = mysqli_query($link, "select * from urun");
            while ($kayit = mysqli_fetch_array($sonuc)) {
                ?>
            <div class="urun_foto_duzenleme">
                <div class="urun_ismi"><?php echo $kayit['ISIM'] ?></div>
                <div class="urun_alani"><img class="urun_alani" src="resimler/<?php echo $kayit['FOTOGRAF'] ?>"></div>

                <div class="urun_aciklamasi"><br><?php echo $kayit['ACIKLAMA'] ?></div>
            </div>
                <?php
            }
            ?>
        </div>
    </body>
</html>
