<html>
    <head>
    <title>TODO supply a title</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/css_sablonu.css"/>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
    <script type="text/javascript" src="jq/jquery.js"></script>

</head>
<body id="musteriformu">

<div class="sablonum">
    <div class="logo"></div>
    <div class="baslik">DAMLA MOBİLYA</div>
    <div class="musteri_formu_menusu">
        <ul>
            <li><a href="index.php">Ana Sayfa</a></li>
            <li><a href="musteriformu/liste.php" class="ust">Yorumlar</a></li>
        </ul>
    </div>
    <div id="mesajsablonu">
        <h1>&nbsp; Bize Ulaşın!</h1>
        <h4>&nbsp;&nbsp;&nbsp;&nbsp; Görüş, öneri ve şikayetleriniz için formu doldurarak bizimle iletişime geçebilirsiniz.</h4>
        <div class="mesaj_yazi_sablonu">

            <form>
                <label for="isim">&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; <strong>Ad ve Soyadı:</strong></label><br/><br/>
                <label for="mail">&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; <strong>Email:</strong></label><br/><br/>
                <label for="konu">&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; <strong>Konu:</strong></label><br/><br/>
                <label for="mesajiniz">&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; <strong>Mesaj:</strong></label>

            </form>
        </div>

        <div class="mesaj_yazi_sablonu2">
            <form id="mesaj_form" action="musteriformu/kaydet.php" method="POST">

                <input type="text" name="isim" id="isim" placeholder=" Adınız ve Soyadınız.." size="48"></input><br/><br/>
                <input type="text" name="email" id="email" placeholder=" Email.." size="48"></input><br/><br/>
                <input type="text" name="konu" id="konu" placeholder=" Ne Hakkında.." size="48"></input><br/><br/>
                <textarea name="mesaj" id="mesaj" cols="50" rows="5" placeholder="..."></textarea>
                <input type="button" value="Gönder" id="btn_mesaj_kayit"></input>
            </form>
        </div>
    </div>


</div>
<script type="text/javascript" >
    $("#btn_mesaj_kayit").click(function (e) {

        var url = "musteriformu/kaydet.php";

        $.ajax({
            type: "POST",
            url: url,
            data: $("#mesaj_form").serialize(),
            success: function (data)
            {
                alert(data);
            }
        });

        e.preventDefault();
    });
</script>
</body>

</html>