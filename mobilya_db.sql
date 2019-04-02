-- phpMyAdmin SQL Dump
-- version 3.4.3.2
-- http://www.phpmyadmin.net
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 05 Oca 2018, 21:05:52
-- Sunucu sürümü: 5.5.15
-- PHP Sürümü: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Veritabanı: `mobilya_db`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `mesajlar`
--

CREATE TABLE IF NOT EXISTS `mesajlar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ad_soyad` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `konu` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `mesaj` text COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=20 ;

--
-- Tablo döküm verisi `mesajlar`
--

INSERT INTO `mesajlar` (`id`, `ad_soyad`, `email`, `konu`, `mesaj`) VALUES
(1, 'kerim Erarslan', 'erarslannkerim@gmail.com', 'yemek masası', 'yemek masam daha gelmedi'),
(2, 'kerim erarslan', 'erarslannkerim@gmail.com', 'yataklar', 'belimi ağrıtıyor.'),
(3, 'kenan', 'kenanerarslan@gmail.com', 'deneme', 'http://cdn.gold.com.tr/UrunResim/BuyukResim/2018121259497870.jpg'),
(4, 'qweqwe', 'werwer', 'twtert', 'qesadzxc'),
(5, 'kemal erarslan', 'kemalerarslan@gmail.com', 'yatak odası', 'aasdasdasdsdsdas'),
(6, 'berkin akkaya', 'berkin@akkaya.com', 'yatak', 'bu yatak çok kötü'),
(7, 'batuhan şener', 'batuhan@şener.com', 'asdasdasd', 'wewerweqweqweqwe'),
(8, 'qweqweqweqwe', 'qweqwe123123', '1232131', '123123123'),
(9, 'qweqweqweqwe', 'qweqwe123123', '1232131', '123123123'),
(10, 'qweqweqweqwe', 'qweqwe123123', '1232131', '123123123'),
(11, 'qweqweqweqwe', 'qweqwe123123', '1232131', '123123123'),
(12, 'qweqweqweqwe', 'qweqwe123123', '1232131', '123123123'),
(13, 'qweqweqweqwe', 'qweqwe123123', '1232131', '123123123'),
(14, 'qweqweqweqwe', 'qweqwe123123', '1232131', '123123123'),
(15, 'qweqweqweqwe', 'qweqwe123123', '1232131', '123123123'),
(16, 'kerim erarslan', 'erarslannkerim@gmail.com', 'sayfa yönlendirme', 'aqwe'),
(17, 'kerim erarslan', 'erarslannkerim@gmail.com', 'erarslan', 'kerim'),
(18, 'kerim erarslan', 'erarslannkerim@gmail.com', 'erarslan', 'kerim'),
(19, 'batuhan şener', 'qweqwe', 'qweqe', 'asdasdasdasd');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `urun`
--

CREATE TABLE IF NOT EXISTS `urun` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `ISIM` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `ACIKLAMA` text COLLATE utf8_turkish_ci NOT NULL,
  `FOTOGRAF` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `ID` (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=43 ;

--
-- Tablo döküm verisi `urun`
--

INSERT INTO `urun` (`ID`, `ISIM`, `ACIKLAMA`, `FOTOGRAF`) VALUES
(25, 'ANDORA OTURMA GRUPLARI', 'Modern hatlara sahip şık tasarım.\r\nKolay temizlenebilen ve dayanıklı nubuk kumaş.', 'andora_oturma_gruplari.jpg'),
(28, 'BROWN YATAK', 'Üç ayrı özel Pocket ve Micro Pocket Yay katmanından oluşur.', 'brown_yatak.jpg'),
(29, ' ANTİK OTURMA GRUBU', 'Dinamik ve spor tasarım.\r\nGeniş oturum alanı.\r\nYüksek DNS sünger ile desteklenmiş oturum Konforu.', 'antik_oturma_grubu.jpg'),
(31, 'MAVENNA GENÇ ODASI', 'Kullanım kolaylığı ve ürün ömrünün artırılması amacı ile kapaklarında stoplama mekanizma vardır.', 'mavenna_genc_odasi.jpg'),
(32, 'MARTA BEBEK ODASI', 'Beşik kısmı çıkartıldığı takdirde 80x190 ebatlarında yatak kullanılarak karyola şeklinde kullanılabilme özelliğine sahiptir', 'marta_bebek_odasi.jpg'),
(33, 'GOLD YATAK ODASI', 'İnsan sağlığına dost, kanserojen madde içermeyen E1 standartlarında malzemeler kullanılmaktadır.', 'gold_yatak_odasi.jpg'),
(35, 'qweqweqwqwe', 'asdasdasdqweqasdqwe', '005.jpg'),
(36, 'qweqweqweqwe', 'adasdsadasd', '001.jpg'),
(37, 'qweqweqweqwe', 'adasdsadasd', '001.jpg'),
(38, 'asdasda', 'asdqweqweasd', '003.jpg'),
(39, 'qweasdasd', 'eqweadsqwe', '002.jpg'),
(40, 'wdasdqwe', 'aseqwsadqw', '004.jpg'),
(41, 'eqweqds', 'qdqweasewq', '005.jpg'),
(42, 'akjsdhajkd', 'qwaılsjdlkasd', '005.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
