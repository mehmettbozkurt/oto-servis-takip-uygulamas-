-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost
-- Üretim Zamanı: 28 May 2021, 08:09:28
-- Sunucu sürümü: 5.7.31
-- PHP Sürümü: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `oto_servis_db`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `arac_bilgisi`
--

CREATE TABLE `arac_bilgisi` (
  `id` int(10) NOT NULL,
  `marka` varchar(25) COLLATE utf8_turkish_ci NOT NULL,
  `model` varchar(25) COLLATE utf8_turkish_ci NOT NULL,
  `segment` varchar(25) COLLATE utf8_turkish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `arac_bilgisi`
--

INSERT INTO `arac_bilgisi` (`id`, `marka`, `model`, `segment`) VALUES
(1, 'BMW', '2', 'C'),
(3, 'BMW', '3', 'D'),
(4, 'NISSAN', 'QASHQAI', 'C'),
(6, 'FORD', 'TRANSIT VAN', 'LCV'),
(7, 'RENAULT (OYAK)', 'MEGANE', 'C'),
(8, 'AUDI', 'Q5', 'E'),
(9, 'FIAT', 'DUCATO', 'LCV'),
(10, 'SEAT', 'IBIZA', 'B'),
(11, 'SEAT', 'LEON', 'C'),
(12, 'MG', 'ZS', 'C');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanicilar`
--

CREATE TABLE `kullanicilar` (
  `kullaniciId` int(11) NOT NULL,
  `kullaniciAdi` varchar(255) NOT NULL,
  `kullaniciSifre` varchar(255) NOT NULL,
  `kullaniciAd` varchar(255) NOT NULL,
  `kullaniciSoyad` varchar(255) NOT NULL,
  `kullaniciTarih` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `kullanicilar`
--

INSERT INTO `kullanicilar` (`kullaniciId`, `kullaniciAdi`, `kullaniciSifre`, `kullaniciAd`, `kullaniciSoyad`, `kullaniciTarih`) VALUES
(1, 'mehmet', '81dc9bdb52d04dc20036dbd8313ed055', 'Mehmet', 'Bozkurt', '2019-01-03 17:13:05');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `musteriler`
--

CREATE TABLE `musteriler` (
  `musteri_id` int(11) NOT NULL,
  `musteri_adi` varchar(255) NOT NULL,
  `musteri_kayit_tarihi` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `musteriler`
--

INSERT INTO `musteriler` (`musteri_id`, `musteri_adi`, `musteri_kayit_tarihi`) VALUES
(1, 'Test', '2021-05-27 23:59:50'),
(2, 'qwcqwe', '2021-05-28 00:31:07'),
(3, 'efwew', '2021-05-28 00:32:08'),
(4, 'Mehmet  Bozkurt', '2021-05-28 00:33:44'),
(5, 'rrre', '2021-05-28 00:35:09'),
(6, 'eee', '2021-05-28 00:36:11'),
(7, 'tss', '2021-05-28 07:50:29'),
(8, 'fwsfvwe', '2021-05-28 07:51:10'),
(9, 'fwef', '2021-05-28 07:51:46');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `servisler`
--

CREATE TABLE `servisler` (
  `id` int(11) NOT NULL,
  `tamir_turu` varchar(255) NOT NULL,
  `tamir_yeri` varchar(255) NOT NULL,
  `kayit_tarihi` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `servisler`
--

INSERT INTO `servisler` (`id`, `tamir_turu`, `tamir_yeri`, `kayit_tarihi`) VALUES
(1, 'Bakım', 'İstanbul', '2021-05-27 21:29:09'),
(2, 'Bakım', 'İzmir', '2021-05-27 21:29:09'),
(3, 'Kapota Boya', 'İstanbul', '2021-05-27 21:31:13'),
(4, 'Balata Değişimi', 'İstanbul Kadıköy', '2021-05-27 21:31:13'),
(5, 'Kapota Boya', 'Bursa', '2021-05-27 21:31:47'),
(6, 'Filtre Değişimi', 'İstanbul Kadıköy', '2021-05-27 21:31:47');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `servis_kayitlari`
--

CREATE TABLE `servis_kayitlari` (
  `id` int(11) NOT NULL,
  `musteri_id` int(11) NOT NULL,
  `arac_id` int(11) NOT NULL,
  `servis_id` int(11) NOT NULL,
  `tamir_tarihi` date NOT NULL,
  `tamir_saati` time NOT NULL,
  `tamir_durumu` tinyint(4) NOT NULL,
  `kayit_tarihi` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `servis_kayitlari`
--

INSERT INTO `servis_kayitlari` (`id`, `musteri_id`, `arac_id`, `servis_id`, `tamir_tarihi`, `tamir_saati`, `tamir_durumu`, `kayit_tarihi`) VALUES
(9, 1, 1, 4, '2021-05-29', '05:40:00', 0, '2021-05-28 00:39:37'),
(10, 1, 8, 1, '2021-05-28', '10:49:00', 0, '2021-05-28 07:49:31'),
(11, 7, 1, 4, '2021-05-28', '10:50:00', 0, '2021-05-28 07:50:29'),
(12, 8, 1, 4, '2021-05-28', '10:51:00', 0, '2021-05-28 07:51:10');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `arac_bilgisi`
--
ALTER TABLE `arac_bilgisi`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `kullanicilar`
--
ALTER TABLE `kullanicilar`
  ADD PRIMARY KEY (`kullaniciId`);

--
-- Tablo için indeksler `musteriler`
--
ALTER TABLE `musteriler`
  ADD PRIMARY KEY (`musteri_id`);

--
-- Tablo için indeksler `servisler`
--
ALTER TABLE `servisler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `servis_kayitlari`
--
ALTER TABLE `servis_kayitlari`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `arac_bilgisi`
--
ALTER TABLE `arac_bilgisi`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1255;

--
-- Tablo için AUTO_INCREMENT değeri `kullanicilar`
--
ALTER TABLE `kullanicilar`
  MODIFY `kullaniciId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `musteriler`
--
ALTER TABLE `musteriler`
  MODIFY `musteri_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Tablo için AUTO_INCREMENT değeri `servisler`
--
ALTER TABLE `servisler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Tablo için AUTO_INCREMENT değeri `servis_kayitlari`
--
ALTER TABLE `servis_kayitlari`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
