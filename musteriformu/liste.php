<html>
    <head>
    <title>TODO supply a title</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/css_sablonu.css"/>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
</head>
<body>
<div class="sablonum">
    <div class="logo"></div>
    <div class="baslik">DAMLA MOBİLYA</div>
    <div class="liste_menusu"><ul>
            <li><a href="../index.php">Ana Sayfa</a></li>
            <li><a href="../musteriformu.php" class="ust">Yorum Yap</a></li>
        </ul></div>
<?php
include '../include/connect.php';

$sonuc = mysqli_query($link, "select * from mesajlar");
?>
    <div class="mesaj_liste_sablonu">
<table border="1">
    <thead>
    <th>Ad Soyad</th>
    <th>Email</th>
    <th>Konu</th>
    <th>Mesaj</th>
    </thead>
    <?php
    while ($kayit = mysqli_fetch_array($sonuc)) {
        echo "<tr>";
        echo "<td>". $kayit["ad_soyad"] ."</td>";
        echo "<td>". $kayit["email"] ."</td>";
        echo "<td>". $kayit["konu"] ."</td>";
        echo "<td>". $kayit["mesaj"] ."</td>";
        echo "</tr>";
    }
    ?>
</table>
    </div>
</div>