-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 09 Jun 2015 pada 09.15
-- Versi Server: 5.1.22-rc-community
-- PHP Version: 5.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hamil`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `gejalaberat`
--

CREATE TABLE IF NOT EXISTS `gejalaberat` (
  `idgejala` int(11) NOT NULL,
  `idpenyakit` int(11) DEFAULT NULL,
  `namagejala` char(100) DEFAULT NULL,
  PRIMARY KEY (`idgejala`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `gejalaberat`
--

INSERT INTO `gejalaberat` (`idgejala`, `idpenyakit`, `namagejala`) VALUES
(1, 12, 'Demam'),
(2, 12, 'Air seni keruh'),
(3, 12, 'Terjadi peningkatan darah'),
(4, 12, 'Mual-mual pada kehamilan selain trimester pertama'),
(5, 12, 'Nyeri di kepala'),
(6, 12, 'Rasa tidak nyaman di pinggang'),
(7, 13, 'Pendarahan pervaginam dari bercak hingga berjumlah banyak'),
(8, 13, 'Perut nyeri dan kaku'),
(9, 13, 'Pengeluaran sebagian produk konsepsi'),
(10, 13, 'Serviks dapat tertutup maupun terbuka'),
(11, 13, 'Ukuran uterus lebih kecil dari yang seharusnya'),
(12, 14, 'Pendarahan pervaginam dari bercak hingga berjumlah banyak'),
(13, 14, 'Mual dan muntah hebat'),
(14, 14, 'Ukuran uterus lebih besar dari usia kehamilan'),
(15, 14, 'Tidak ditemukan janin intrauteri'),
(16, 14, 'Nyeri perut'),
(17, 14, 'Serviks terbuka'),
(18, 14, 'Keluar jaringan seperti anggur, tidak ada janin'),
(19, 14, 'Takikardi, berdebar-debar'),
(20, 15, 'Tekanan darah tinggi >= 140/90 mmHg'),
(21, 15, 'Adanya riwayat hipertensi sebelum hamil'),
(22, 15, 'Adanya hipertensi pada usia kehamilan <= 20 minggu'),
(23, 15, 'Tidak ada proteinuria'),
(24, 16, 'Tekanan darah > 160/110 mmHg pada usia kehamilan >20 minggu'),
(25, 16, 'Tes celup urin menunjukkan proteinuria >=2+'),
(26, 16, 'Pemeriksaan protein kuantitatif menunjukkan hasil >5 g/24 jam'),
(27, 16, 'Trombositopenia <100000 sel/uL, hemolisis mikroangiopati'),
(28, 16, 'Peningkatan SGOT/SGPT, nyeri abdomen kuadran kanan atas'),
(29, 16, 'Sakit kepala, skotoma penglihatan'),
(30, 16, 'Pertumbuhan janin terhambat, oligohidramnion'),
(31, 16, 'Oliguria <500 ml/24 jam, kreatinin >1,2 mg/dl'),
(32, 17, 'Kejang umum dan atau koma'),
(33, 17, 'Ada tanda dan gejala preeklampsia'),
(34, 18, 'Sesak napas'),
(35, 18, 'Hipertensi'),
(36, 18, 'Batuk berbusa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gejalaringan`
--

CREATE TABLE IF NOT EXISTS `gejalaringan` (
  `idgejala` int(11) NOT NULL,
  `idpenyakit` int(11) DEFAULT NULL,
  `namagejala` char(80) DEFAULT NULL,
  PRIMARY KEY (`idgejala`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `gejalaringan`
--

INSERT INTO `gejalaringan` (`idgejala`, `idpenyakit`, `namagejala`) VALUES
(1, 1, 'Mual dan muntah'),
(2, 1, 'Berat badan turun > 5% dari berat badan sebelum hamil'),
(3, 1, 'Dehidrasi'),
(4, 1, 'Ketidakseimbangan elektrolit'),
(5, 1, 'Turunnya selera makan'),
(6, 2, 'Berat badan naik > 1 Kg per minggu'),
(7, 2, 'Mata kaki dan tungkai membengkak'),
(8, 2, 'Kenaikan tekanan darah'),
(9, 2, 'Air seni keruh'),
(10, 2, 'Rasa nyeri di kepala dan pandangan berkunang-kunang'),
(11, 3, 'Detak jantung cepat saat tidak beraktivitas berat'),
(12, 3, 'Cepat lelah walaupun tidak beraktivitas berat'),
(13, 4, 'Wajah pucat'),
(14, 4, 'Mata merah dan telapak tangan ikut pucat'),
(15, 4, 'Mudah lelah,lesu dan lemah'),
(16, 5, 'Bagian kelopak mata sembab dan menonjol meskipun tidak sakit mata'),
(17, 5, 'Jemari terasa gemetar'),
(18, 5, 'Berdebar-debar walaupun tidak berkegiatan fisik'),
(19, 5, 'Meningkatnya suhu tubuh dan muncul keringat meskipun udara tidak panas'),
(20, 6, 'Demam tinggi lebih dari tiga hari');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gejalasedang`
--

CREATE TABLE IF NOT EXISTS `gejalasedang` (
  `idgejala` int(11) NOT NULL,
  `idpenyakit` int(11) DEFAULT NULL,
  `namagejala` char(80) DEFAULT NULL,
  PRIMARY KEY (`idgejala`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `gejalasedang`
--

INSERT INTO `gejalasedang` (`idgejala`, `idpenyakit`, `namagejala`) VALUES
(1, 7, 'Perut yang semakin mengecil seiring dengan waktu'),
(2, 7, 'Tidak membesar seperti layaknya orang hamil'),
(3, 8, 'Mudah terasa haus'),
(4, 8, 'Terjadi peningkatan frekuensi buang air kecil dan mudah merasa lapar'),
(5, 9, 'Tubuh terasa kaku'),
(6, 9, 'Badan terasa pegal'),
(7, 10, 'Keluar darah dan lendir disertai mual dan mulas'),
(8, 10, 'Keluar darah dan lendir disertai air ketuban'),
(9, 11, 'Muncul pendarahan di usia kehamilan kurang dari dua bulan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
  `idkategori` int(11) NOT NULL,
  `namakategori` char(30) DEFAULT NULL,
  PRIMARY KEY (`idkategori`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`idkategori`, `namakategori`) VALUES
(1, 'Keluhan Ringan'),
(2, 'Keluhan Sedang'),
(3, 'Keluhan Berat');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penyakit`
--

CREATE TABLE IF NOT EXISTS `penyakit` (
  `idpenyakit` int(11) NOT NULL,
  `idkategori` int(11) DEFAULT NULL,
  `namapenyakit` char(50) DEFAULT NULL,
  PRIMARY KEY (`idpenyakit`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penyakit`
--

INSERT INTO `penyakit` (`idpenyakit`, `idkategori`, `namapenyakit`) VALUES
(1, 1, 'Muntah-muntah'),
(2, 1, 'Naiknya berat badan berlebihan'),
(3, 1, 'Detak jantung kencang dan mudah lelah'),
(4, 1, 'Anemia'),
(5, 1, 'Kelenjar Gondok terganggu'),
(6, 1, 'Infeksi'),
(7, 2, 'Janin tidak bergerak di usia > 5 bulan'),
(8, 2, 'Diabetes'),
(9, 2, 'Kejang-kejang'),
(10, 2, 'Keluar darah dan lendir'),
(11, 2, 'Kehamilan Ektopik'),
(12, 3, 'Fungsi Ginjal Terganggu'),
(13, 3, 'Abortus'),
(14, 3, 'Mola Hidatidosa'),
(15, 3, 'Hipertensi'),
(16, 3, 'Preeklampsia'),
(17, 3, 'Eklampsia'),
(18, 3, 'Edema Paru');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
