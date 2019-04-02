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
    <div class="urun_girme_menusu"><ul><li><a href="../index.php">Anasayfa</a></li></ul></div>
    <div id="mesajsablonu">
        <div class="mesaj_yazi_sablonu">
            <form>
                <h1>&nbsp; Ürün Girişi</h1>
                <label for="isim">&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; <strong>Ürün Adı:</strong></label><br/><br/>
                <label for="mesajiniz">&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; <strong>Ürün Açıklaması:</strong></label>
            </form>
        </div>
        <div class="mesaj_yazi_sablonu3">
            <form action="kaydet.php" method="POST" enctype="multipart/form-data" >
                <input type="text" name="urun_isim" id="urun_isim" placeholder=" Ürün Adını Giriniz.." size="48"></input><br/><br/>
                <textarea name="urun_aciklama" id="urun_aciklama" cols="50" rows="5" placeholder="..."></textarea>
                <input type="file" name="dosya" />
                <input type="submit" value="Gönder"></input>
            </form>
        </div>
    </div>
</div>
</body>
</html>
