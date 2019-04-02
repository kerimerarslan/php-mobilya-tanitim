
<div class="logo"></div>
<div class="baslik">DAMLA MOBİLYA</div>
<div class="container">
    <div class="menu">
        <ul class="tabs">
            <li><a href="#tab1" class="ust">Ana Sayfa</a></li>
            <li><a href="#tab2" class="ust">Hakkımızda</a></li>
            <li><a href="#tab3" class="ust">Ürünler</a></li>
            <li><a href="#tab4" class="ust">İletişim</a></li>
        </ul>
    </div>

    <div id="icerik" class="tab_container">
        <div id="tab1" class="tab_content">
            <div class="slider">       <?php
                include 'standard.html';
                ?>
            </div>
            <div class="orta_ayrac"><strong><em>7/24 Satış Destek Hattı -(0382)1234567</em></strong></div>
            <div class="altsablon">
                <div class="altfotolar_1"></div>
                <div class="altfotolar_2">
                    <a href="musteriformu.php"></a>
                </div>
                <div class="altfotolar_3">
                    <a href="musteriformu/liste.php"></a>
                </div>
                <div class="altaciklama1"></div>
                <div class="altaciklama2"><strong>MÜŞTERİ MEMNUNİYETİ</strong><br>Şirketimiz müşteri memnuniyeti ve dürüstlüğü kendine prensip edinmiştir.İstek ve görüşlerinizi için bize ulaşın.</div>
                <div class="altaciklama3"><strong>HAKKIMIZDAKİ YORUMLAR</strong><br>Bize yapılan yorumlara bakmak için tıklayın.</div>
            </div>
            <div class="footer"><strong>&nbsp;© 2017 Damla Mobilya Aksaray - Her Hakkı Saklıdır.</strong></div>
        </div>
        <div id="tab2" class="tab_content">
            <?php
            include("hakkimizda.php");
            ?>
            <div class="footer"><strong>&nbsp;© 2017 Damla Mobilya Aksaray - Her Hakkı Saklıdır.</strong></div>
        </div>
        <div id="tab3" class="tab_content">
            <?php include("urunler.php") ?>
            <div class="urun_gir_buton"><a href="urunler/urungirme.php">Urun Gir</a></div>
            <div class="footer"><strong>&nbsp;© 2017 Damla Mobilya Aksaray - Her Hakkı Saklıdır.</strong></div>
        </div>
        
        <div id="tab4" class="tab_content">
            <?php include("iletisim.php"); ?>
            <div class="footer_iletisim"><strong>&nbsp;© 2017 Damla Mobilya Aksaray - Her Hakkı Saklıdır.</strong></div>
        </div>
    </div>
</div>


