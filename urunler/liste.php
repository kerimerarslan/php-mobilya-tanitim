<?php
include '../include/connect.php';

$sonuc = mysqli_query($link, "select * from mesajlar");
?>
<table border="1">
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
