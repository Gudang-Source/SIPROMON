-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Nov 2018 pada 16.41
-- Versi server: 10.1.36-MariaDB
-- Versi PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sipromon`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `nip` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `last_login` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `employee`
--

INSERT INTO `employee` (`id`, `nip`, `name`, `username`, `password`, `last_login`) VALUES
(1, '1234555555', 'Dr. Eko Winar Irianto M.T.', 'ekowinar', '7815696ecbf1c96e6894b779456d330e', '2018-05-06 07:01:34'),
(2, '4321', 'Drs. Ratna Adiana', 'ratnaadiana', '21232f297a57a5a743894a0e4a801fc3', '2018-05-06 07:01:34'),
(3, '', 'Ir. Dery Iryawan M.T', '', '', '2018-05-06 07:01:34'),
(4, '', 'Drs. Endar P. Satriyanto, M.M.', '', '', '2018-05-06 07:01:34'),
(5, '', 'Ir. Tati Kurniati, M.T.', '', '', '2018-05-06 07:01:34'),
(6, '', 'Slamet Lestari, S.T., M.T.', '', '', '2018-05-06 07:01:34'),
(7, '', 'Drs. Irfan Sudono, M.T.', '', '', '2018-05-06 07:01:34'),
(8, '', 'Ir. Nur Fizli Kifli, M.T.', '', '', '2018-05-06 07:01:34'),
(9, '', 'Rahmat Suria Lubis, S.T., M.T.', 'rahmatsuria', '7815696ecbf1c96e6894b779456d330e', '2018-05-06 07:01:34'),
(10, '', 'Ir. Dwi Kristiananto, M.Eng', '', '', '2018-05-06 07:01:34'),
(11, '', 'Parlimbongan Simangkali, S.T. MPSDA', '', '', '2018-05-06 07:01:34'),
(12, '', 'Dr. Leo Eliasta, S.T. M.Sc.', '', '', '2018-05-06 07:01:34'),
(13, '', 'Drs. Irfan Sudono, M.T.', '', '', '2018-05-06 07:01:34'),
(14, '090021278', 'Mas\'ud Adhi Putra, M.Kom.', 'kangmas', 'kangmas', '2018-05-08 07:10:56'),
(15, '131183112206', 'Ayat Suhaya S.E. M.M', 'asuh68', '21232f297a57a5a743894a0e4a801fc3', '2018-05-20 14:01:18');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL COMMENT 'Judul Kegiatan',
  `tahun_anggaran` int(11) NOT NULL,
  `jenis` varchar(255) NOT NULL,
  `pagu` int(11) DEFAULT NULL,
  `output` varchar(255) DEFAULT NULL,
  `volume` varchar(255) DEFAULT NULL,
  `unitof` varchar(255) DEFAULT NULL,
  `rabtitle` varchar(255) DEFAULT NULL,
  `att4` varchar(255) DEFAULT NULL,
  `att5` varchar(255) DEFAULT NULL,
  `rmp_stats` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kegiatan`
--

INSERT INTO `kegiatan` (`id`, `user_id`, `judul`, `tahun_anggaran`, `jenis`, `pagu`, `output`, `volume`, `unitof`, `rabtitle`, `att4`, `att5`, `rmp_stats`) VALUES
(4, 1, 'Pengembangan Website SIPROMON', 2018, 'Layanan Internal', 527686333, 'Aplikasi Simonev', '1 (Satu)', 'Aplikasi', 'Pengembangan Aplikasi', 'JadwalPersonil_1528037049.pdf', 'JadwalSarpras__1528037050.pdf', 1),
(15, 1, 'tes v4 nov 18', 2018, 'Litbang', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(16, 1, 'tes v4 nov 18 non lit', 2018, 'Non-Litbang', 65000000, 'aplikasi', '1 (satu)', 'Unit Aplikasi', 'Pengembangan Aplikasi', NULL, NULL, 1),
(17, 1, 'TEST LITBANG', 2019, 'Non-Litbang', 900000000, 'Aplikasi', 'Satu', 'Aplikasi', 'Gtws', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `mnv_fisik`
--

CREATE TABLE `mnv_fisik` (
  `id_mnv_fisik` int(11) NOT NULL,
  `id_rmp` int(11) NOT NULL,
  `persentase` int(11) NOT NULL,
  `persentase_real` float NOT NULL,
  `minggu` int(11) NOT NULL,
  `id_refer` int(11) NOT NULL,
  `output` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `kendala` text NOT NULL,
  `tingkat_kendala` int(11) NOT NULL DEFAULT '0',
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mnv_fisik`
--

INSERT INTO `mnv_fisik` (`id_mnv_fisik`, `id_rmp`, `persentase`, `persentase_real`, `minggu`, `id_refer`, `output`, `deskripsi`, `kendala`, `tingkat_kendala`, `type`) VALUES
(14, 3, 20, 0.018, 1, 3, 'dokumen', 'sss', 'asdasdd', 0, 'act'),
(15, 3, 50, 0.025, 7, 3, '', '', '', 0, 'act'),
(16, 3, 20, 3.79, 1, 1, 'dokumen', 'tes', 'ada penyelundupan uang', 4, 'stage'),
(17, 3, 0, 0, 6, 10, 'dokumen', 'harusnya 20%', 'akomodasi mogok', 5, 'act'),
(31, 3, 30, 0.007, 2, 3, 'dokumen', 'sss', 'dasd', 4, 'act'),
(38, 3, 35, 0.0115, 3, 3, 'ss', 'ss', '', 0, 'act');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mnv_keuangan`
--

CREATE TABLE `mnv_keuangan` (
  `id_mnv_keuangan` int(11) NOT NULL,
  `minggu` int(11) NOT NULL,
  `jml_uang` int(11) NOT NULL,
  `waktu_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_rmp_sdk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mnv_keuangan`
--

INSERT INTO `mnv_keuangan` (`id_mnv_keuangan`, `minggu`, `jml_uang`, `waktu_update`, `id_rmp_sdk`) VALUES
(23, 1, 3000000, '2018-10-03 04:14:30', 2),
(24, 1, 0, '2018-10-03 04:14:30', 3),
(25, 1, 0, '2018-10-03 04:14:30', 4),
(26, 1, 0, '2018-10-03 04:14:30', 5),
(27, 1, 0, '2018-10-03 04:14:30', 6),
(28, 1, 0, '2018-10-03 04:14:30', 7),
(29, 1, 0, '2018-10-03 04:14:30', 8),
(30, 1, 0, '2018-10-03 04:14:30', 9),
(31, 1, 0, '2018-10-03 04:14:30', 10),
(32, 1, 0, '2018-10-03 04:14:30', 11),
(33, 1, 0, '2018-10-03 04:14:30', 12),
(34, 4, 200000, '2018-10-03 04:14:49', 2),
(35, 4, 1000000, '2018-10-03 04:14:49', 3),
(36, 4, 1000000, '2018-10-03 04:14:49', 4),
(37, 4, 0, '2018-10-03 04:14:49', 5),
(38, 4, 0, '2018-10-03 04:14:49', 6),
(39, 4, 0, '2018-10-03 04:14:49', 7),
(40, 4, 0, '2018-10-03 04:14:49', 8),
(41, 4, 0, '2018-10-03 04:14:49', 9),
(42, 4, 0, '2018-10-03 04:14:49', 10),
(43, 4, 0, '2018-10-03 04:14:49', 11),
(44, 4, 0, '2018-10-03 04:14:49', 12),
(45, 7, 600000, '2018-10-28 15:59:11', 2),
(46, 7, 0, '2018-10-28 15:59:11', 3),
(47, 7, 0, '2018-10-28 15:59:11', 4),
(48, 7, 0, '2018-10-28 15:59:11', 5),
(49, 7, 0, '2018-10-28 15:59:11', 6),
(50, 7, 0, '2018-10-28 15:59:11', 7),
(51, 7, 0, '2018-10-28 15:59:11', 8),
(52, 7, 0, '2018-10-28 15:59:11', 9),
(53, 7, 0, '2018-10-28 15:59:11', 10),
(54, 7, 0, '2018-10-28 15:59:11', 11),
(55, 7, 0, '2018-10-28 15:59:11', 12);

-- --------------------------------------------------------

--
-- Struktur dari tabel `mnv_keuangan_total`
--

CREATE TABLE `mnv_keuangan_total` (
  `id_mnv_k_t` int(11) NOT NULL,
  `minggu` int(11) NOT NULL,
  `jml` int(11) NOT NULL,
  `jml_kumulatif` int(11) NOT NULL,
  `persentase` float NOT NULL,
  `persentase_kumulatif` float NOT NULL,
  `id_rmp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mnv_keuangan_total`
--

INSERT INTO `mnv_keuangan_total` (`id_mnv_k_t`, `minggu`, `jml`, `jml_kumulatif`, `persentase`, `persentase_kumulatif`, `id_rmp`) VALUES
(3, 1, 3000000, 3000000, 0.56852, 0.56852, 3),
(4, 4, 2200000, 5200000, 0.416914, 0.985434, 3),
(5, 7, 600000, 5800000, 0.113704, 0, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `rmp`
--

CREATE TABLE `rmp` (
  `id` int(11) NOT NULL,
  `kegiatan_id` int(11) NOT NULL,
  `latar` text,
  `masalah` text,
  `batasan` text,
  `tujuan` text,
  `tinjauan` text,
  `kerangka` text,
  `formulasi` text,
  `manfaat` text,
  `juduldansumber` text,
  `lingkup` text,
  `metode` text,
  `lokasi` text,
  `sasarankeluaran` text,
  `sasaranmutu` text,
  `acuanteknis` text,
  `acuanadministrasi` text,
  `strukturorg` varchar(255) DEFAULT NULL,
  `prasarana` text,
  `lingkungan` text,
  `baganalir` varchar(255) DEFAULT NULL,
  `cek` longtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rmp`
--

INSERT INTO `rmp` (`id`, `kegiatan_id`, `latar`, `masalah`, `batasan`, `tujuan`, `tinjauan`, `kerangka`, `formulasi`, `manfaat`, `juduldansumber`, `lingkup`, `metode`, `lokasi`, `sasarankeluaran`, `sasaranmutu`, `acuanteknis`, `acuanadministrasi`, `strukturorg`, `prasarana`, `lingkungan`, `baganalir`, `cek`) VALUES
(3, 4, '<p>Sungai merupakan salah satu sumber air yang sangat penting bagi kehidupan manusia. Sejak jaman dahulu sungai banyak dimanfaatkan manusia untuk memenuhi berbagai kebutuhan dasar manusia sebagai sumber air dan sumber pangan. Selain itu sungai juga dimanfaatkan sebagai sumber air pertanian dan sarana transportasi untuk mobilisasi manusia maupun barang.</p><p>Seiring berjalannya waktu, sungai maupun prasarana sungai akan mengalami degradasi kondisi fisik dan fungsi, baik akibat faktor internal (usia bangunan) maupun akibat faktor eksternal (aktifitas manusia atau bencana alam). Tanpa adanya pemeliharaan yang memadai terhadap sungai dan prasarana sungai, maka aktifitas eksploitasi dan operasi prasarana sungai akan terganggu ataupun dapat terhenti. Oleh karena itu, operasi dan pemeliharaan prasarana sungai maupun pemeliharaan sungai merupakan kesatuan kegiatan yang tidak dapat terpisahkan.</p><p>&nbsp;Agar pelaksanaan operasi dan pemeliharaan (OP) prasarana sungai serta pemeliharaan sungai dapat berjalan secara efektif dan efisien, maka diperlukan sebuah pedoman yang dapat menjadi acuan bagi para penyelenggara/ pelaksana. Oleh karena itu, dalam rangka menjaga kelestarian fungsi sungai serta mengoptimalkan pemanfaatan prasarana sungai di Indonesia, maka pada tanggal 9 Juni 2016 telah ditetapkan Surat Edaran Dirjen SDA Kementerian PUPR Nomor: 05/SE/D/2016, tentang Pedoman Penyelenggaraan Kegiatan Operasi dan Pemeliharaan Prasarana Sungai Serta Pemeliharaan Sungai.</p><p>Berdasarkan surat edaran tersebut, Instansi pengelola sungai memiliki tanggungjawab untuk memastikan bahwa pemeliharaan sungai dan prasarana sungai terus dilakukan secara berkelanjutan, berkala, dan terencana untuk menjaga kondisi sungai maupun prasarana sungai agar tetap berfungsi optimal. Selain itu pengelola sungai juga bertanggungjawab atas ketersediaan informasi mengenai kondisi sungai dan prasarana sungai sebagai dasar untuk pelaksanaan pemeliharaan. Pemeriksaan/ inspeksi rutin di lapangan merupakan salah satu cara yang dapat dilakukan untuk memperoleh informasi terkini <i>(realtime)</i> mengenai kondisi sungai maupun prasarana sungai agar gejala kerusakan yang lebih besar dapat diantisipasi sedini mungkin.</p><p>Untuk meningkatkan kualitas dan efektifitas inspeksi rutin sungai dan prasarana sungai, maka perlu didukung dengan panduan inspeksi yang detail serta sarana penunjang yang mampu mengelola data dan informasi hasil inspeksi. Salah satu upaya yang dapat dilakukan untuk mendukung kegiatan tersebut adalah dengan mengembangkan perangkat lunak inspeksi sungai yang dapat digunakan untuk pengelolaan data dan informasi hasil inspeksi sungai dan prasarana sungai.</p><p>Terkait dengan hal tersebut, maka sejak Tahun 2017 Balai Litbang Sungai, Pusat Litbang SDA, sudah mengembangkan panduan inspeksi serta perangkat lunak inspeksi yaitu tanggul tanah. Untuk melengkapi panduan dan perangkat lunak tersebut, mencakup seluruh komponen inspeksi sesuai dengan SE Dirjen No: 05/SE/D/2016, maka pada Tahun Anggaran 2018 perlu dilakukan kegiatan berupa “Pengembangan Perangkat Lunak Inspeksi Sungai dan Prasarana Sungai”. Dengan tercapainya sasaran kegiatan ini, diharapkan pelaksanaan inspeksi sungai dan prasarana sungai yang dilakukan oleh pengelola sungai akan menjadi lebih mudah, efektif, efisien, dan sistemastis.</p>', '<p>Permasalahan yang akan dikaji berdasarkan skala prioritas pada kegiatan ini, adalah:</p><ol><li>Prasarana sungai yang mengalami kerusakan tidak terdeteksi sejak dini</li><li>Pengambilan data inspeksi masih bersifat manual</li><li>Waktu pelaporan inspeksi dibutuhkan waktu yang lama</li></ol>', '<p>Tidak ada masalah</p>', '<p>Tujuan dari pelaksanaan Kegiatan Pengembangan Perangkat Lunak Inspeksi Sungai dan Prasarana Sungai adalah menghasilkan perangkat lunak inspeksi sungai dan prasarana sungai yang dapat digunakan oleh instansi pengelola wilayah sungai di Indonesia-sia.</p>', '<p>Acuan dalam rangka memelihara sumber air dan menjaga kelestarian fungsi sungai, mengoptimalkan pemanfaatan prasarana sungai, serta memberikan kejelasan proses penyusunan perhitungan angka kebutuhan nyata operasi dan pemeliharaan prasarana sungai secara efektif, efisien, dan berkelanjutan bagi Balai Besar Wilayah Sungai/ Balai Wilayah Sungai tertuang dalam Surat Edaran Dirjen SDA Nomor: 05/SE/D/2016. Salah satu metode dalam pemeliharaan prasarana sungai adalah pendataan kondisi bangunan prasarana tersebut, baik yang melintang maupun yang sejajar dengan alur sungai. Salah satu cara pendataan kehandalan prasarana sungai adalah dengan menginspeksi kondisi bangunan secara visual.</p><h2>Inspeksi Sungai</h2><p>Berdasarkan SE dirjen NO.5., 2016 difinisi Inspeksi sungai adalah proses pengecekan atau pemeriksanan oleh petugas &nbsp;dengan tujuan untuk mengetahui bagian-bagian sungai yang bermasalah. Kegiatan inspeksi perlu membawa formulir untuk mengetahui bagian-bagian mana yang harus diperhatikan dalam pelaksanaan inspeksi pada setiap ruas sungai dan setiap jenis bangunan.</p><p>Berdasarkan SE dirjen NO.5., 2016 inspeksi kondisi bangunan dilakukan paling sedikit 1 (satu) kali dalam 1 bulan untuk memastikan kondisi bangunan dalam kondisi baik. Cara menginspeksi dilakukan dengan pengamatan atau visual serta identifikasi kerusakan bangunan. Apabila terjadi kondisi kerusakan kritis maka dilakukan pemeliharaan secara preventif berupa penelusuran (walkthrough). Inspeksi sungai dikerjakan oleh juru sungai yang dibantu oleh pengawas OP bangunan sungai dalam pelaksanaan penelusuran dan pengamatan perkembangan kondisi bangunan untuk segera dilaporkan ke petugas pengamat sungai.</p><p>Rangkuman cacatan inspeksi digunakan sebagai salah satu bahan pertimbangan dalam evaluasi program OP lima tahunan, serta &nbsp;menjadi masukan dalam penyusunan program OP pada tahun berikutnya. (SE dirjen NO.5., 2016).</p><h2>Aplikasi Inspeksi Sungai</h2><p>Salah satu alat yang dapat digunakan dalam penginspeksian adalah dengan menggukan aplikasi maupun pengisian formulir. Aplikasi atau pengisian formulir secara manual ada kurang lebihnya, akan tetapi dengan berkembangnya teknologi saat ini penggunaan aplikasi akan mempermudah dalam pengisisan formulir inspeksi sungai. Formulir yang sebelumnya berupa <i>hardcopy</i> berubah menjadi <i>softcopy</i> dan secara <i>real time</i> dapat di unduh hasilnya oleh BBWS itu sendiri. Aplikasi ini berbasis <i>android</i> dan terdapat dalam <i>google play</i> yang bertujuan agar semua juru inspeksi dapat mengunduh secara gratis. Aplikasi ini familiar bagi segala jenjang pendidikan sehingga tidak perlu lama untuk pemahamannya<a href=\"#_msocom_1\">[i1]</a> . (Sarwono, 2017).</p><p>Salah satu teknik inspeksi sungai dilakukan dengan pengisian formulir inspeksi sungai manual &nbsp;yang diinput ke <i>web server</i> pada aplikasi PAS (Pengelolaan Aset Sungai) yang dibuat oleh Dirjen SDA, Kementerian PUPR. Tujuan aplikasi data base secara online ini memudahkan dalam mengontrol secara cepat dan mudah. (Dirjen SDA, 2016)</p><h2>Pemeliharaan&nbsp;Sungai dan Prasarana Sungai</h2><h2>Pemeliharaan sungai</h2><p>Berdasarkan SE dirjen NO.5., 2016 pemeliharaan sungai mencakup tindakan merawat, melindungi:</p><p>palung sungai senantiasa berfungsi sebagai tempat mengalir dan berlangsungnya kehidupan ekosistem sungai meliputi: tebing sungai, alur dasar sungai, dinamika meander, dan kegiatan di palung sungai.</p><p>Sempadan sungai berfungsi sebagai tempat penyangga antara ekosistem sungai dan dataran, agar fungsi dan kegiatan manusia tidak terganggu meliputi: kegiatan di bantaran maupun sempadan sungai.</p><h2>Pemeliharaan bangunan prasarana sungai</h2><p>Berdasarkan SE dirjen NO.5., 2016 Pemeliharaan bangunan prasarana sungai mencakup tindakan/ kegiatan pencegahan kerusakan/ kemerosotan (preventif), perbaikan kerusakan (tindakan korektif) serta pemulihan kembali (tindakan rehabilitatif) yang meliputi: prasarana pelindung palung sungai, prasarana pendayagunaan sungai, prasarana pengendali aliran air sungai dan prasarana pemantau kondisi hidrologi, hidroklimatologi dan kualitas air.</p><ol><li>Jenis-jenis prasarana sungai meliputi:</li><li>Tanggul sungai.</li><li>Pelindung tebing / revertment.</li><li>Bangunan jetty.</li><li>Bangunan krib.</li><li>Bangunan pelimpah banjir.</li><li>Pintu pengendali aliran / banjir.</li><li>Pompa banjir.</li><li>Bendung karet.</li><li>Retention pond.</li><li>Bangunan groundsill.</li><li>Jalan inspeksi.</li><li>Bangunan pos pemantau H3.</li><li>Bangunan gedung kantor pendukung OP, laboratorium, bengkel dan Gardu jaga.</li><li>Prasarana peralatan, alat berat dan kendaraan operasi pendukung OP.</li><li>Peralatan informasi dan komunikasi.</li></ol>', '<figure class=\"image\"><img src=\"https://i.froala.com/download/b8d70436f5d8cd2337744a1513912a0d1b8cd00b.JPG?1524983656\"></figure><p><strong>Gambar 1.&nbsp;</strong>Kerangka Pikir</p>', '<p>Pengambilan data inspeksi yang masih bersifat manual memiliki kekurangan diantaranya; prasarana sungai yang mengalami kerusakan tidak terdeteksi sejak dini, waktu pelaporan inspeksi dibutuhkan lama dan sistematika data hasil inspeksi belum terstruktur maka dibutuhkan pengembangan perangkat lunak inspeksi sungai dan prasarana sungai dengan OS android yang cukup familiar bagi para juru sungai dan masyarakat.</p>', '<p>Aplikasi Inspeksi sungai akan bermanfaat bagi Balai Besar Wilayah Sungai Bengawan Solo sebagai lokasi penerapan perangkat lunak inspeksi sungai dan prasarana sungai sehingga mendapatkan informasi kondisi di Sungai Bengawan Solo. Aplikasi ini juga dapat bermanfaat bagi Balai Besar Wilayah Sungai/ Balai Wilayah Sungai di Lingkungan Direktorat Jenderal Sumber Daya Air dalam pelaksanaan inspeksi sungai dan prasarana sungai yang lebih mudah, cepat dan sistemastis</p>', '<p><img alt=\"\" src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/a/a8/Wikipedia_article-creation-2.svg/260px-Wikipedia_article-creation-2.svg.png\" style=\"height:237px; width:260px\" /></p>\r\n\r\n<p>Judul kegiatan ini adalah &ldquo;<strong>Pengembangan Perangkat Lunak Inspeksi Sungai dan Prasarana Sungai</strong>&rdquo; yang sesuai Daftar Isian Pelaksanaan Anggaran Satuan Kerja Balai Litbang Sungai Tahun Anggaran 2018 dengan nomor pengesahan DIPA-033.11.1.636846/2018 05 Desember 2017. Kegiatan ini dilaksanakan secara swakelola dan kontraktual.</p>\r\n', '<p>Lingkungan yang digunakan</p>\r\n', '', '<p>Lokasi pelaksanaan kegiatan Pengembangan Perangkat Lunak Inspeksi Sungai dan Prasarana Sungai ini antara lain:</p>\r\n\r\n<ol style=\"margin-left:20px\">\r\n	<li>Balai Litbang Sungai, Surakarta (Prop. Jawa Tengah): lokasi koordinasi tim, analisa data, penyusunan laporan kegiatan, dan pelaksanaan <em>workshop</em> perangkat lunak inspeksi Sungai dan Prasarana Sungai;</li>\r\n	<li>Pusat Litbang SDA, Bandung (Prop. Jawa Barat): lokasi kordinasi, diskusi dengan para pakar di Pusat Litbang SDA dan evaluator pusat;</li>\r\n	<li>Universitas Gajah Mada, DI Yogyakarta: lokasi diskusi dan konsultasi dengan narasumber;</li>\r\n	<li>Jakarta (DKI Jakarta): lokasi diskusi dan konsultasi dengan narasumber;</li>\r\n	<li>Sungai Bengawan Solo, Bojonegoro (Prop. Jawa Timur): Lokasi ini dipilih untuk melakukan simulasi perangkat lunak inspeksi karena memiliki tingkat permasalahan sungai yang komplek.</li>\r\n</ol>\r\n', '<p>Sasaran keluaran (<em>output</em>) Kegiatan Pengembangan Perangkat Lunak Inspeksi Sungai dan Prasarana Sungai yang akan dihasilkan pada Tahun 2018 adalah &nbsp;1 (satu) teknologi Perangkat Lunak Inspeksi Sungai dan Prasarana Sungai, yang didukung komponen output sebagai berikut:</p><ol style=\"margin-left: 20px;\"><li>Panduan teknis Inspeksi Sungai dan Prasarana Sungai;</li><li>Manual perangkat lunak Inspeksi Sungai dan Prasarana Sungai</li></ol>', '<p>Sasaran mutu Kegiatan Pengembangan Perangkat Lunak Inspeksi Sungai dan Prasarana Sungai, antara lain:</p><ol style=\"margin-left: 20px;\"><li>Tersedianya Teknologi perangkat lunak inspeksi sungai dan prasarana sungai dengan jenis bangunan Pelindung tebing / revertment, Bangunan jetty, Bangunan krib, Bangunan pelimpah banjir, Pintu pengendali aliran / banjir, Pompa banjir, Bendung karet, Retention pond, groundsill &nbsp;yang dapat mengurangi waktu pelaporan dari hitungan hari menjadi hitungan menit, dan dicapai pada Bulan November 2018.</li><li>Tercapainya penerapan Perangkat Lunak inspeksi sungai dan prasarana sungai dengan minimal 1 (satu) lokasi objek inspeksi untuk setiap jenis prasarana sungai di Sungai Bengawan Solo.</li></ol>', '<p>Persyaratan teknis untuk pelaksanaan Kegiatan Pengembangan Perangkat Lunak Inspeksi Sungai dan Prasarana Sungai adalah:</p><ol style=\"margin-left: 20px;\"><li>Peraturan Pemerintah Republik Indonesia No. 42 tahun 2008 tentang pengelolaan sumber daya air;</li><li>Peraturan Pemerintah Republik Indonesia No.35 Tahun 1991 tentang Sungai.</li><li>Keputusan Menteri Permukiman dan Prasarana Wilayah, Pedoman Konstruksi dan Bangunan Pd T-11-2004-A, tentang Pemeliharaan Bangunan Persungaian;</li><li>Surat Edaran Direktur Jenderal Sumber Daya Air No. 05/SE/D/2016 tanggal 9 Juni 2016, tentang Pedoman Penyelenggaraan Kegiatan Operasi dan Pemeliharaan Prasarana Sungai serta Pemeliharaan Sungai.</li><li><strong>&nbsp;</strong>Kerangka Acuan Kerja Kegiatan &ldquo;Pengembangan Perangkat Lunak Inspeksi Sungai dan Prasarana Sungai&rdquo;.</li></ol>', '<p>Persyaratan administrasi untuk pelaksanaan Kegiatan Pengembangan Perangkat Lunak Inspeksi Sungai dan Prasarana Sungai tahun 2018 adalah persyaratan yang tercantum dalam dokumen &ndash; dokumen sebagai berikut:</p><ol style=\"margin-left: 20px;\"><li>Peraturan Menteri Keuangan Republik Indonesia No. 33/PMK.02/2017 tentang Standar Biaya Masukan Tahun Anggaran 2018.</li><li>Peraturan Menteri Pekerjaan Umum dan Perumahan Rakyat No.20/PRT/M/2016 Tanggal 23 Mei 2016 Tentang Organisasi Dan Tata Kerja Unit Pelaksana Teknis Kementerian Pekerjaan Umum Dan Perumahan Rakyat.</li><li>Daftar Isian Pelaksanaan Anggaran (DIPA) Satuan Kerja Balai litbang sungai TA. 2018 No. DIPA-033.11.1.636846/2018 Bulan Desember 2017.</li><li>Rincian Kertas Kerja/RKA-KL Satker Balai litbang sungai TA. 2018.</li><li>Surat Keputusan Kepala Satuan Kerja Balai litbang sungai tentang Penunjukan Susunan Tim Pelaksana Kegiatan, dan Pengangkatan/ Penunjukan Tenaga Narasumber.</li><li>Panduan RMP &nbsp;Kegiatan di lingkungan Puslitbang Sumber Daya Air edisi tahun 2018.</li></ol>', 'Strukturorg_1524299563.JPG', '<p>aasdadada</p>', '<p>Kondisi Lingkungan kantor yang dibutuhkan adalah nyaman, aman, tidak bising, pencahayaan yang terang, bersih, tidak lembab, sirkulasi udara yang baik dan bebas asap rokok.</p>', 'baganalir_1524986711.JPG', NULL),
(12, 15, '<p>Sungai merupakan salah satu sumber air yang sangat penting bagi kehidupan manusia. Sejak jaman dahulu sungai banyak dimanfaatkan manusia untuk memenuhi berbagai kebutuhan dasar manusia sebagai sumber air dan sumber pangan. Selain itu sungai juga dimanfaatkan sebagai sumber air pertanian dan sarana transportasi untuk mobilisasi manusia maupun barang.</p>\r\n\r\n<p>Seiring berjalannya waktu, sungai maupun prasarana sungai akan mengalami degradasi kondisi fisik dan fungsi, baik akibat faktor internal (usia bangunan) maupun akibat faktor eksternal (aktifitas manusia atau bencana alam). Tanpa adanya pemeliharaan yang memadai terhadap sungai dan prasarana sungai, maka aktifitas eksploitasi dan operasi prasarana sungai akan terganggu ataupun dapat terhenti. Oleh karena itu, operasi dan pemeliharaan prasarana sungai maupun pemeliharaan sungai merupakan kesatuan kegiatan yang tidak dapat terpisahkan.</p>\r\n\r\n<p>&nbsp;Agar pelaksanaan operasi dan pemeliharaan (OP) prasarana sungai serta pemeliharaan sungai dapat berjalan secara efektif dan efisien, maka diperlukan sebuah pedoman yang dapat menjadi acuan bagi para penyelenggara/ pelaksana. Oleh karena itu, dalam rangka menjaga kelestarian fungsi sungai serta mengoptimalkan pemanfaatan prasarana sungai di Indonesia, maka pada tanggal 9 Juni 2016 telah ditetapkan Surat Edaran Dirjen SDA Kementerian PUPR Nomor: 05/SE/D/2016, tentang Pedoman Penyelenggaraan Kegiatan Operasi dan Pemeliharaan Prasarana Sungai Serta Pemeliharaan Sungai.</p>\r\n\r\n<p>Berdasarkan surat edaran tersebut, Instansi pengelola sungai memiliki tanggungjawab untuk memastikan bahwa pemeliharaan sungai dan prasarana sungai terus dilakukan secara berkelanjutan, berkala, dan terencana untuk menjaga kondisi sungai maupun prasarana sungai agar tetap berfungsi optimal. Selain itu pengelola sungai juga bertanggungjawab atas ketersediaan informasi mengenai kondisi sungai dan prasarana sungai sebagai dasar untuk pelaksanaan pemeliharaan. Pemeriksaan/ inspeksi rutin di lapangan merupakan salah satu cara yang dapat dilakukan untuk memperoleh informasi terkini&nbsp;<em>(realtime)</em>&nbsp;mengenai kondisi sungai maupun prasarana sungai agar gejala kerusakan yang lebih besar dapat diantisipasi sedini mungkin.</p>\r\n\r\n<p>Untuk meningkatkan kualitas dan efektifitas inspeksi rutin sungai dan prasarana sungai, maka perlu didukung dengan panduan inspeksi yang detail serta sarana penunjang yang mampu mengelola data dan informasi hasil inspeksi. Salah satu upaya yang dapat dilakukan untuk mendukung kegiatan tersebut adalah dengan mengembangkan perangkat lunak inspeksi sungai yang dapat digunakan untuk pengelolaan data dan informasi hasil inspeksi sungai dan prasarana sungai.</p>\r\n\r\n<p>Terkait dengan hal tersebut, maka sejak Tahun 2017 Balai Litbang Sungai, Pusat Litbang SDA, sudah mengembangkan panduan inspeksi serta perangkat lunak inspeksi yaitu tanggul tanah. Untuk melengkapi panduan dan perangkat lunak tersebut, mencakup seluruh komponen inspeksi sesuai dengan SE Dirjen No: 05/SE/D/2016, maka pada Tahun Anggaran 2018 perlu dilakukan kegiatan berupa &ldquo;Pengembangan Perangkat Lunak Inspeksi Sungai dan Prasarana Sungai&rdquo;. Dengan tercapainya sasaran kegiatan ini, diharapkan pelaksanaan inspeksi sungai dan prasarana sungai yang dilakukan oleh pengelola sungai akan menjadi lebih mudah, efektif, efisien, dan sistemastis.</p>\r\n', '', NULL, '', NULL, NULL, NULL, '', NULL, NULL, NULL, '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, 16, '<p>Sungai merupakan salah satu sumber air yang sangat penting bagi kehidupan manusia. Sejak jaman dahulu sungai banyak dimanfaatkan manusia untuk memenuhi berbagai kebutuhan dasar manusia sebagai sumber air dan sumber pangan. Selain itu sungai juga dimanfaatkan sebagai sumber air pertanian dan sarana transportasi untuk mobilisasi manusia maupun barang.</p>\r\n\r\n<p>Seiring berjalannya waktu, sungai maupun prasarana sungai akan mengalami degradasi kondisi fisik dan fungsi, baik akibat faktor internal (usia bangunan) maupun akibat faktor eksternal (aktifitas manusia atau bencana alam). Tanpa adanya pemeliharaan yang memadai terhadap sungai dan prasarana sungai, maka aktifitas eksploitasi dan operasi prasarana sungai akan terganggu ataupun dapat terhenti. Oleh karena itu, operasi dan pemeliharaan prasarana sungai maupun pemeliharaan sungai merupakan kesatuan kegiatan yang tidak dapat terpisahkan.</p>\r\n\r\n<p>&nbsp;Agar pelaksanaan operasi dan pemeliharaan (OP) prasarana sungai serta pemeliharaan sungai dapat berjalan secara efektif dan efisien, maka diperlukan sebuah pedoman yang dapat menjadi acuan bagi para penyelenggara/ pelaksana. Oleh karena itu, dalam rangka menjaga kelestarian fungsi sungai serta mengoptimalkan pemanfaatan prasarana sungai di Indonesia, maka pada tanggal 9 Juni 2016 telah ditetapkan Surat Edaran Dirjen SDA Kementerian PUPR Nomor: 05/SE/D/2016, tentang Pedoman Penyelenggaraan Kegiatan Operasi dan Pemeliharaan Prasarana Sungai Serta Pemeliharaan Sungai.</p>\r\n\r\n<p>Berdasarkan surat edaran tersebut, Instansi pengelola sungai memiliki tanggungjawab untuk memastikan bahwa pemeliharaan sungai dan prasarana sungai terus dilakukan secara berkelanjutan, berkala, dan terencana untuk menjaga kondisi sungai maupun prasarana sungai agar tetap berfungsi optimal. Selain itu pengelola sungai juga bertanggungjawab atas ketersediaan informasi mengenai kondisi sungai dan prasarana sungai sebagai dasar untuk pelaksanaan pemeliharaan. Pemeriksaan/ inspeksi rutin di lapangan merupakan salah satu cara yang dapat dilakukan untuk memperoleh informasi terkini&nbsp;<em>(realtime)</em>&nbsp;mengenai kondisi sungai maupun prasarana sungai agar gejala kerusakan yang lebih besar dapat diantisipasi sedini mungkin.</p>\r\n\r\n<p>Untuk meningkatkan kualitas dan efektifitas inspeksi rutin sungai dan prasarana sungai, maka perlu didukung dengan panduan inspeksi yang detail serta sarana penunjang yang mampu mengelola data dan informasi hasil inspeksi. Salah satu upaya yang dapat dilakukan untuk mendukung kegiatan tersebut adalah dengan mengembangkan perangkat lunak inspeksi sungai yang dapat digunakan untuk pengelolaan data dan informasi hasil inspeksi sungai dan prasarana sungai.</p>\r\n\r\n<p>Terkait dengan hal tersebut, maka sejak Tahun 2017 Balai Litbang Sungai, Pusat Litbang SDA, sudah mengembangkan panduan inspeksi serta perangkat lunak inspeksi yaitu tanggul tanah. Untuk melengkapi panduan dan perangkat lunak tersebut, mencakup seluruh komponen inspeksi sesuai dengan SE Dirjen No: 05/SE/D/2016, maka pada Tahun Anggaran 2018 perlu dilakukan kegiatan berupa &ldquo;Pengembangan Perangkat Lunak Inspeksi Sungai dan Prasarana Sungai&rdquo;. Dengan tercapainya sasaran kegiatan ini, diharapkan pelaksanaan inspeksi sungai dan prasarana sungai yang dilakukan oleh pengelola sungai akan menjadi lebih mudah, efektif, efisien, dan sistemastis.</p>\r\n', '', NULL, '<p>Tujuan dari pelaksanaan Kegiatan Pengembangan Perangkat Lunak Inspeksi Sungai dan Prasarana Sungai adalah menghasilkan perangkat lunak inspeksi sungai dan prasarana sungai yang dapat digunakan oleh instansi pengelola wilayah sungai di Indonesia-sia.</p>\r\n', '', NULL, NULL, '<p>Aplikasi Inspeksi sungai akan bermanfaat bagi Balai Besar Wilayah Sungai Bengawan Solo sebagai lokasi penerapan perangkat lunak inspeksi sungai dan prasarana sungai sehingga mendapatkan informasi kondisi di Sungai Bengawan Solo. Aplikasi ini juga dapat bermanfaat bagi Balai Besar Wilayah Sungai/ Balai Wilayah Sungai di Lingkungan Direktorat Jenderal Sumber Daya Air dalam pelaksanaan inspeksi sungai dan prasarana sungai yang lebih mudah, cepat dan sistemastis</p>\r\n', NULL, NULL, NULL, '', '<p>Sasaran keluaran (<em>output</em>) Kegiatan Pengembangan Perangkat Lunak Inspeksi Sungai dan Prasarana Sungai yang akan dihasilkan pada Tahun 2018 adalah &nbsp;1 (satu) teknologi Perangkat Lunak Inspeksi Sungai dan Prasarana Sungai, yang didukung komponen output sebagai berikut:</p>\r\n\r\n<ol style=\"margin-left:20px\">\r\n	<li>Panduan teknis Inspeksi Sungai dan Prasarana Sungai;</li>\r\n	<li>Manual perangkat lunak Inspeksi Sungai dan Prasarana Sungai</li>\r\n</ol>\r\n', '<p>Sasaran mutu Kegiatan Pengembangan Perangkat Lunak Inspeksi Sungai dan Prasarana Sungai, antara lain:</p>\r\n\r\n<ol style=\"margin-left:20px\">\r\n	<li>Tersedianya Teknologi perangkat lunak inspeksi sungai dan prasarana sungai dengan jenis bangunan Pelindung tebing / revertment, Bangunan jetty, Bangunan krib, Bangunan pelimpah banjir, Pintu pengendali aliran / banjir, Pompa banjir, Bendung karet, Retention pond, groundsill &nbsp;yang dapat mengurangi waktu pelaporan dari hitungan hari menjadi hitungan menit, dan dicapai pada Bulan November 2018.</li>\r\n	<li>Tercapainya penerapan Perangkat Lunak inspeksi sungai dan prasarana sungai dengan minimal 1 (satu) lokasi objek inspeksi untuk setiap jenis prasarana sungai di Sungai Bengawan Solo.</li>\r\n</ol>\r\n', '<p>Persyaratan teknis untuk pelaksanaan Kegiatan Pengembangan Perangkat Lunak Inspeksi Sungai dan Prasarana Sungai adalah:</p>\r\n\r\n<ol style=\"margin-left:20px\">\r\n	<li>Peraturan Pemerintah Republik Indonesia No. 42 tahun 2008 tentang pengelolaan sumber daya air;</li>\r\n	<li>Peraturan Pemerintah Republik Indonesia No.35 Tahun 1991 tentang Sungai.</li>\r\n	<li>Keputusan Menteri Permukiman dan Prasarana Wilayah, Pedoman Konstruksi dan Bangunan Pd T-11-2004-A, tentang Pemeliharaan Bangunan Persungaian;</li>\r\n	<li>Surat Edaran Direktur Jenderal Sumber Daya Air No. 05/SE/D/2016 tanggal 9 Juni 2016, tentang Pedoman Penyelenggaraan Kegiatan Operasi dan Pemeliharaan Prasarana Sungai serta Pemeliharaan Sungai.</li>\r\n	<li><strong>&nbsp;</strong>Kerangka Acuan Kerja Kegiatan &ldquo;Pengembangan Perangkat Lunak Inspeksi Sungai dan Prasarana Sungai&rdquo;.</li>\r\n</ol>\r\n', '<p>Persyaratan administrasi untuk pelaksanaan Kegiatan Pengembangan Perangkat Lunak Inspeksi Sungai dan Prasarana Sungai tahun 2018 adalah persyaratan yang tercantum dalam dokumen &ndash; dokumen sebagai berikut:</p>\r\n\r\n<ol style=\"margin-left:20px\">\r\n	<li>Peraturan Menteri Keuangan Republik Indonesia No. 33/PMK.02/2017 tentang Standar Biaya Masukan Tahun Anggaran 2018.</li>\r\n	<li>Peraturan Menteri Pekerjaan Umum dan Perumahan Rakyat No.20/PRT/M/2016 Tanggal 23 Mei 2016 Tentang Organisasi Dan Tata Kerja Unit Pelaksana Teknis Kementerian Pekerjaan Umum Dan Perumahan Rakyat.</li>\r\n	<li>Daftar Isian Pelaksanaan Anggaran (DIPA) Satuan Kerja Balai litbang sungai TA. 2018 No. DIPA-033.11.1.636846/2018 Bulan Desember 2017.</li>\r\n	<li>Rincian Kertas Kerja/RKA-KL Satker Balai litbang sungai TA. 2018.</li>\r\n	<li>Surat Keputusan Kepala Satuan Kerja Balai litbang sungai tentang Penunjukan Susunan Tim Pelaksana Kegiatan, dan Pengangkatan/ Penunjukan Tenaga Narasumber.</li>\r\n	<li>Panduan RMP &nbsp;Kegiatan di lingkungan Puslitbang Sumber Daya Air edisi tahun 2018.</li>\r\n</ol>\r\n', NULL, NULL, '<p>aaaaaa</p>\r\n', NULL, NULL),
(14, 17, '<p>asd</p>\r\n', '', NULL, '<p>asd</p>\r\n', '', '', '', '<p>asd</p>\r\n', NULL, '<p>asd</p>\r\n', NULL, '', '<p>asd</p>\r\n', '<p>asd</p>\r\n', '<p>asd</p>\r\n', '<p>asd</p>\r\n', 'strukturorg_1541344374.jpeg', NULL, '<p>asdadsad</p>\r\n', 'baganalir_1541344533.jpeg', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `rmp_activity`
--

CREATE TABLE `rmp_activity` (
  `id` int(11) NOT NULL,
  `rmp_id` int(11) NOT NULL,
  `kegiatan` text NOT NULL,
  `deskripsi` text NOT NULL,
  `parent` varchar(255) DEFAULT NULL,
  `hasil` text,
  `metode` varchar(255) NOT NULL,
  `kriteria` varchar(255) NOT NULL,
  `sarpras` text,
  `anggaran` int(11) NOT NULL DEFAULT '0',
  `pj` varchar(255) DEFAULT NULL,
  `waktu` varchar(255) DEFAULT NULL,
  `bobot` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rmp_activity`
--

INSERT INTO `rmp_activity` (`id`, `rmp_id`, `kegiatan`, `deskripsi`, `parent`, `hasil`, `metode`, `kriteria`, `sarpras`, `anggaran`, `pj`, `waktu`, `bobot`) VALUES
(2, 3, 'Penyusunan panduan teknis inspeksi sungai dan prasarana sungai', '', 'B', '', '', '', '', 0, '', '', 0),
(3, 3, 'Penyusunan tim pelaksana dan narasumber', '', 'A', 'SK Narasumber dan Ketua', '', '', 'Printer, komputer, ATK', 0, 'Rahmat Suria Lubis, S.T., M.T.', '1-4', 0),
(6, 3, 'Pengembangan perangkat lunak inspeksi sungai dan prasarana sungai', '', 'B', '', '', '', '', 0, '', '', 0),
(7, 3, 'Laporan Berkala (Bulanan) Simonev', '', 'C', 'Laporan Berkala Simonev', '', '', 'Internet, komputer, printer', 0, 'Faisal Syaiful Anwar, S.Kom', '40-42', 0),
(8, 3, 'Konsep laporan akhir dan konsep output kegiatan', '', 'C', 'Laporan Konsep Akhir Kegiatan', '', '', 'Internet, komputer, printer', 0, 'Rahmat Suria Lubis, S.T., M.T.', '41-43', 0),
(9, 3, 'Laporan akhir dan output kegiatan', '', 'C', 'Laporan Akhir ', '', '', 'Printer, Komputer, ATK, Scanner', 0, 'Rahmat Suria Lubis, S.T., M.T.', '46-48', 0),
(10, 3, 'Diskusi Rancangan Kerja', '', 'A', 'Hasil Diskusi Raker', '', '', 'Laptop, Printer', 0, 'Rahmat Suria Lubis, S.T., M.T.', '5-8', 0),
(11, 3, 'Penyusunan Rencana Mutu Pelaksanaan (RMP)', '', 'A', 'Dokumen RMP', '', '', 'Printer, Komputer, ATK, Scanner, Internet', 0, 'Rahmat Suria Lubis, S.T., M.T.', '5-13', 0),
(13, 13, 'tes1', '', 'A', NULL, '', '', NULL, 3000000, NULL, NULL, NULL),
(14, 13, 'tes2', '', 'A', NULL, '', '', NULL, 4000000, NULL, NULL, NULL),
(15, 13, 'tes21', '', 'B', NULL, '', '', NULL, 0, NULL, NULL, NULL),
(16, 13, 'tes22', '', 'B', NULL, '', '', NULL, 13000000, NULL, NULL, NULL),
(17, 13, 'tes23', '', 'B', NULL, '', '', NULL, 20000000, NULL, NULL, NULL),
(18, 13, 'tes31', '', 'C', NULL, '', '', NULL, 2000000, NULL, NULL, NULL),
(19, 13, 'tess32', '', 'C', NULL, '', '', NULL, 0, NULL, NULL, NULL),
(20, 13, 'tes13', '', 'A', NULL, '', '', NULL, 0, NULL, NULL, NULL),
(21, 14, '1.1 tes', '', 'A', NULL, '', '', NULL, 0, NULL, NULL, NULL),
(22, 14, '2.1 asadsad', '', 'B', NULL, '', '', NULL, 0, NULL, NULL, NULL),
(23, 14, '3.1 laporan', '<p>h</p>\r\n', 'C', 'OK', 'GTW', 'Kriterai', 'OK', 0, 'Dr. Eko Winar Irianto M.T.', '7-12', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `rmp_activity_executor`
--

CREATE TABLE `rmp_activity_executor` (
  `id` int(11) NOT NULL,
  `rmp_activity_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rmp_activity_executor`
--

INSERT INTO `rmp_activity_executor` (`id`, `rmp_activity_id`, `name`) VALUES
(5, 3, 'Asep Sulaeman ST MT'),
(8, 10, 'Faisal Syaiful Anwar S.Kom'),
(9, 9, 'Faisal Syaiful Anwar S.Kom'),
(10, 11, ''),
(11, 11, 'Faisal Syaiful Anwar S.Kom'),
(12, 8, 'Asep Sulaeman ST MT'),
(13, 7, 'Agung Risnadi'),
(14, 10, ''),
(15, 23, 'ASDASDASD');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rmp_bibliography`
--

CREATE TABLE `rmp_bibliography` (
  `id` int(11) NOT NULL,
  `rmp_id` int(11) NOT NULL,
  `bib_author` varchar(255) NOT NULL,
  `bib_year` text NOT NULL,
  `bib_title` varchar(255) NOT NULL,
  `bib_publisher` varchar(255) NOT NULL,
  `bib_city` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rmp_bibliography`
--

INSERT INTO `rmp_bibliography` (`id`, `rmp_id`, `bib_author`, `bib_year`, `bib_title`, `bib_publisher`, `bib_city`) VALUES
(1, 3, 'Faisal Syaiful Anwar', '2018', 'An Implementaion of Levenshtein Distance and Natural Languange Processing', 'Arabian Journal', 'UEA');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rmp_document`
--

CREATE TABLE `rmp_document` (
  `id` int(11) NOT NULL,
  `rmp_id` int(11) NOT NULL,
  `document_name` varchar(255) NOT NULL,
  `document_num` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rmp_document`
--

INSERT INTO `rmp_document` (`id`, `rmp_id`, `document_name`, `document_num`) VALUES
(1, 3, 'Manual Sistem Manajemen Puslitbang SDA', 'DSM/PUSAIR/MM/01'),
(2, 3, 'Pengendalian Dokumen Sistem Manajemen Mutu', 'DSM/PUSAIR/PR/01'),
(3, 3, 'Pengendalian Rekaman', 'DSM/PUSAIR/PR/02'),
(4, 3, 'Audit Mutu Internal', 'DSM/PUSAIR/PR/03'),
(5, 3, 'Pengendalian Hasil Pekerjaan yang Tidak Sesuai (HPTS)', 'DSM/PUSAIR/PR/04'),
(6, 3, 'Tindakan Korektif dan Tindakan Pencegahan', 'DSM/PUSAIR/PR/05'),
(8, 3, 'Pengelolaan Kegiatan Penelitian', 'DSM/PUSAIR/PP/04'),
(9, 4, 'Manual Sistem Manajemen Puslitbang SDA', 'DSM/PUSAIR/MM/01'),
(10, 4, 'Pengendalian Dokumen Sistem Manajemen Mutu', 'DSM/PUSAIR/PR/01'),
(11, 4, 'Pengendalian Rekaman', 'DSM/PUSAIR/PR/02'),
(12, 4, 'Audit Mutu Internal', 'DSM/PUSAIR/PR/03'),
(13, 4, 'Pengendalian Hasil Pekerjaan yang Tidak Sesuai (HPTS)', 'DSM/PUSAIR/PR/04'),
(14, 4, 'Tindakan Korektif dan Tindakan Pencegahan', 'DSM/PUSAIR/PR/05'),
(15, 4, 'Pengelolaan Kegiatan Penelitian ', 'DSM/PUSAIR/PP/04'),
(16, 5, 'Manual Sistem Manajemen Puslitbang SDA', 'DSM/PUSAIR/MM/01'),
(17, 5, 'Pengendalian Dokumen Sistem Manajemen Mutu', 'DSM/PUSAIR/PR/01'),
(18, 5, 'Pengendalian Rekaman', 'DSM/PUSAIR/PR/02'),
(19, 5, 'Audit Mutu Internal', 'DSM/PUSAIR/PR/03'),
(20, 5, 'Pengendalian Hasil Pekerjaan yang Tidak Sesuai (HPTS)', 'DSM/PUSAIR/PR/04'),
(21, 5, 'Tindakan Korektif dan Tindakan Pencegahan', 'DSM/PUSAIR/PR/05'),
(22, 5, 'Pengelolaan Kegiatan Penelitian ', 'DSM/PUSAIR/PP/04'),
(23, 6, 'Manual Sistem Manajemen Puslitbang SDA', 'DSM/PUSAIR/MM/01'),
(24, 6, 'Pengendalian Dokumen Sistem Manajemen Mutu', 'DSM/PUSAIR/PR/01'),
(25, 6, 'Pengendalian Rekaman', 'DSM/PUSAIR/PR/02'),
(26, 6, 'Audit Mutu Internal', 'DSM/PUSAIR/PR/03'),
(27, 6, 'Pengendalian Hasil Pekerjaan yang Tidak Sesuai (HPTS)', 'DSM/PUSAIR/PR/04'),
(28, 6, 'Tindakan Korektif dan Tindakan Pencegahan', 'DSM/PUSAIR/PR/05'),
(29, 6, 'Pengelolaan Kegiatan Penelitian ', 'DSM/PUSAIR/PP/04'),
(30, 7, 'Manual Sistem Manajemen Puslitbang SDA', 'DSM/PUSAIR/MM/01'),
(31, 7, 'Pengendalian Dokumen Sistem Manajemen Mutu', 'DSM/PUSAIR/PR/01'),
(32, 7, 'Pengendalian Rekaman', 'DSM/PUSAIR/PR/02'),
(33, 7, 'Audit Mutu Internal', 'DSM/PUSAIR/PR/03'),
(34, 7, 'Pengendalian Hasil Pekerjaan yang Tidak Sesuai (HPTS)', 'DSM/PUSAIR/PR/04'),
(35, 7, 'Tindakan Korektif dan Tindakan Pencegahan', 'DSM/PUSAIR/PR/05'),
(36, 7, 'Pengelolaan Kegiatan Penelitian ', 'DSM/PUSAIR/PP/04'),
(37, 8, 'Manual Sistem Manajemen Puslitbang SDA', 'DSM/PUSAIR/MM/01'),
(38, 8, 'Pengendalian Dokumen Sistem Manajemen Mutu', 'DSM/PUSAIR/PR/01'),
(39, 8, 'Pengendalian Rekaman', 'DSM/PUSAIR/PR/02'),
(40, 8, 'Audit Mutu Internal', 'DSM/PUSAIR/PR/03'),
(41, 8, 'Pengendalian Hasil Pekerjaan yang Tidak Sesuai (HPTS)', 'DSM/PUSAIR/PR/04'),
(42, 8, 'Tindakan Korektif dan Tindakan Pencegahan', 'DSM/PUSAIR/PR/05'),
(43, 8, 'Pengelolaan Kegiatan Penelitian ', 'DSM/PUSAIR/PP/04'),
(44, 9, 'Manual Sistem Manajemen Puslitbang SDA', 'DSM/PUSAIR/MM/01'),
(45, 9, 'Pengendalian Dokumen Sistem Manajemen Mutu', 'DSM/PUSAIR/PR/01'),
(46, 9, 'Pengendalian Rekaman', 'DSM/PUSAIR/PR/02'),
(47, 9, 'Audit Mutu Internal', 'DSM/PUSAIR/PR/03'),
(48, 9, 'Pengendalian Hasil Pekerjaan yang Tidak Sesuai (HPTS)', 'DSM/PUSAIR/PR/04'),
(49, 9, 'Tindakan Korektif dan Tindakan Pencegahan', 'DSM/PUSAIR/PR/05'),
(50, 9, 'Pengelolaan Kegiatan Penelitian ', 'DSM/PUSAIR/PP/04'),
(51, 10, 'Manual Sistem Manajemen Puslitbang SDA', 'DSM/PUSAIR/MM/01'),
(52, 10, 'Pengendalian Dokumen Sistem Manajemen Mutu', 'DSM/PUSAIR/PR/01'),
(53, 10, 'Pengendalian Rekaman', 'DSM/PUSAIR/PR/02'),
(54, 10, 'Audit Mutu Internal', 'DSM/PUSAIR/PR/03'),
(55, 10, 'Pengendalian Hasil Pekerjaan yang Tidak Sesuai (HPTS)', 'DSM/PUSAIR/PR/04'),
(56, 10, 'Tindakan Korektif dan Tindakan Pencegahan', 'DSM/PUSAIR/PR/05'),
(57, 10, 'Pengelolaan Kegiatan Penelitian ', 'DSM/PUSAIR/PP/04'),
(58, 11, 'Manual Sistem Manajemen Puslitbang SDA', 'DSM/PUSAIR/MM/01'),
(59, 11, 'Pengendalian Dokumen Sistem Manajemen Mutu', 'DSM/PUSAIR/PR/01'),
(60, 11, 'Pengendalian Rekaman', 'DSM/PUSAIR/PR/02'),
(61, 11, 'Audit Mutu Internal', 'DSM/PUSAIR/PR/03'),
(62, 11, 'Pengendalian Hasil Pekerjaan yang Tidak Sesuai (HPTS)', 'DSM/PUSAIR/PR/04'),
(63, 11, 'Tindakan Korektif dan Tindakan Pencegahan', 'DSM/PUSAIR/PR/05'),
(64, 11, 'Pengelolaan Kegiatan Penelitian ', 'DSM/PUSAIR/PP/04'),
(65, 12, 'Manual Sistem Manajemen Terpadu (SIMPADU)', 'MM/PUSAIR/01'),
(66, 12, 'Pengendalian Informasi Terdokumentasi', 'PP/PUSAIR/01'),
(67, 12, 'Audit Internal', 'PP/PUSAIR/02'),
(68, 12, 'Pelaporan Ketidaksesuaian dan Tindakan Perbaikan', 'PP/PUSAIR/03'),
(69, 12, 'Pemantauan, Evaluasi, dan Pelaporan', 'PP/PUSAIR/08'),
(70, 13, 'Manual Sistem Manajemen Terpadu (SIMPADU)', 'MM/PUSAIR/01'),
(71, 13, 'Pengendalian Informasi Terdokumentasi', 'PP/PUSAIR/01'),
(72, 13, 'Audit Internal', 'PP/PUSAIR/02'),
(73, 13, 'Pelaporan Ketidaksesuaian dan Tindakan Perbaikan', 'PP/PUSAIR/03'),
(74, 13, 'Pemantauan, Evaluasi, dan Pelaporan', 'PP/PUSAIR/08'),
(75, 14, 'Manual Sistem Manajemen Terpadu (SIMPADU)', 'MM/PUSAIR/01'),
(76, 14, 'Pengendalian Informasi Terdokumentasi', 'PP/PUSAIR/01'),
(77, 14, 'Audit Internal', 'PP/PUSAIR/02'),
(78, 14, 'Pelaporan Ketidaksesuaian dan Tindakan Perbaikan', 'PP/PUSAIR/03'),
(79, 14, 'Pemantauan, Evaluasi, dan Pelaporan', 'PP/PUSAIR/08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rmp_position`
--

CREATE TABLE `rmp_position` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `kompetensi` varchar(255) NOT NULL,
  `tugas` text NOT NULL,
  `tanggungjawab` text NOT NULL,
  `wewenang` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rmp_position`
--

INSERT INTO `rmp_position` (`id`, `name`, `kompetensi`, `tugas`, `tanggungjawab`, `wewenang`) VALUES
(1, 'Pengelola Mutu', '', '<p>Mengendalikan pelaksanaan kegiatan sesuai &nbsp;Penetapan Kinerja (PK) dan RKA-K/L dan DIPA Satuan Kerja Balai Litbang Sungai Tahun Anggaran 2018</p>', '<p>Bertanggung jawab kepada Kepala Puslitbang Sumber Daya Air terhadap tercapainya output kegiatan sesuai PK.</p>', '<p>Mengusulkan personil pelaksana kegiatan dan menetapkan arah kebijakan pelaksanaan dan penggunaan anggaran kegiatan.</p>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rmp_rab_activity`
--

CREATE TABLE `rmp_rab_activity` (
  `id` int(11) NOT NULL,
  `rmp_sdk_id` int(11) NOT NULL,
  `fisik` int(11) NOT NULL,
  `keuangan` int(11) NOT NULL,
  `json` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `rmp_record_list`
--

CREATE TABLE `rmp_record_list` (
  `id` int(11) NOT NULL,
  `rmp_id` int(11) NOT NULL,
  `record_name` text NOT NULL,
  `location` varchar(255) NOT NULL,
  `period` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rmp_record_list`
--

INSERT INTO `rmp_record_list` (`id`, `rmp_id`, `record_name`, `location`, `period`) VALUES
(3, 3, 'Surat Keputusan Tim Pelaksana dan Tim Nara Sumber', 'Lemari No 2 Rak 1<br/>Ketua Tim', 'Aktif : 1 Tahun<br/>Inaktif : 3 Tahun'),
(4, 3, 'Rencana Mutu Pelaksanaan', 'Lemari No 2 Rak 1<br/>Ketua Tim', 'Aktif : 1 Tahun<br/>Inaktif : 3 Tahun'),
(5, 3, 'Laporan Pelaksanaan Kegiatan ', 'Lemari No 2 Rak 1<br/>Ketua Tim', 'Aktif : 1 Tahun<br/>Inaktif : 3 Tahun');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rmp_roles`
--

CREATE TABLE `rmp_roles` (
  `id` int(11) NOT NULL,
  `rmp_id` int(11) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `tugas` text NOT NULL,
  `tanggungjawab` text NOT NULL,
  `wewenang` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rmp_roles`
--

INSERT INTO `rmp_roles` (`id`, `rmp_id`, `jabatan`, `tugas`, `tanggungjawab`, `wewenang`) VALUES
(2, 3, 'Pengelola Mutu', '<p>Mengendalikan pelaksanaan kegiatan sesuai &nbsp;Penetapan Kinerja (PK) dan RKA-K/L dan DIPA Satuan Kerja Balai Litbang Sungai Tahun Anggaran 2018</p>', '<p>Bertanggung jawab kepada Kepala Puslitbang Sumber Daya Air terhadap tercapainya output kegiatan sesuai PK.</p>', '<p>Mengusulkan personil pelaksana kegiatan dan menetapkan arah kebijakan pelaksanaan dan penggunaan anggaran kegiatan.</p>'),
(3, 3, 'Pengendali Mutu', '<p>Membantu Pengelola Mutu mengkoordinasikan dan mengevaluasi kegiatan.</p>', '<p>Bertanggung jawab kepada Pengelola Mutu terhadap kelancaran kegiatan.</p>', '<p>Melakukan supervisi teknis dan administrasi pelaksanaan serta penggunaan anggaran kegiatan.</p>'),
(4, 3, 'Ketua Sub Kegiatan Perangkat Lunak Inspeksi Sungai dan Prasarana Sungai', '<p>Merancang, memimpin dan melaporkan pelaksanaan sub kegiatan Perangkat Lunak Inspeksi Sungai dan Prasarana Sungai</p>', '<p>Bertanggung jawab kepada Pengelola Mutu sub kegiatan atas pelaksanaan sub kegiatan Perangkat Lunak Inspeksi Sungai dan Prasarana Sungai</p>', '<p>Mengusulkan dan menggunakan sumber daya dalam pelaksanaan sub kegiatan Perangkat Lunak Inspeksi Sungai dan Prasarana Sungai</p>'),
(6, 9, 'Penanggung Jawab', 'Mengendalikan pelaksanaan kegiatan sesuai  Penetapan Kinerja (PK) dan RKA-K/L dan DIPA Satuan Kerja $satker. Tahun Anggaran $tahun', 'Bertanggungjawab kepada Kepala Puslitbang Sumber Daya Air terhadap tecapainya output kegiatan sesuai PK.', 'Mengusulkan personil pelaksana kegiatan dan menetapkan arah kebijakan pelaksanaan dan penggunaan anggaran kegiatan.'),
(7, 9, 'Koordinator ', 'Membantu Penanggung Jawab mengkoordinasikan dan mengevaluasi kegiatan.', 'Bertanggungjawab kepada Penanggung Jawab terhadap kelancaran kegiatan.', 'Melakukan supervisi teknis dan administrasi pelaksanaan serta penggunaan anggaran kegiatan.'),
(8, 9, 'Ketua Tim Kegiatan ', 'Merancang, memimpin dan memantau serta melaporkan pelaksanaan kegiatan', 'Bertanggung jawab kepada Penanggung jawab melalui koordinator atas pelaksanaan kegiatan.', 'Mengusulkan dan menggunakan sumber daya dalam pelaksanaan kegiatan.'),
(9, 10, 'Penanggung Jawab', 'Mengendalikan pelaksanaan kegiatan sesuai  Penetapan Kinerja (PK) dan RKA-K/L dan DIPA Satuan Kerja $satker. Tahun Anggaran $tahun', 'Bertanggungjawab kepada Kepala Puslitbang Sumber Daya Air terhadap tecapainya output kegiatan sesuai PK.', 'Mengusulkan personil pelaksana kegiatan dan menetapkan arah kebijakan pelaksanaan dan penggunaan anggaran kegiatan.'),
(10, 10, 'Koordinator ', 'Membantu Penanggung Jawab mengkoordinasikan dan mengevaluasi kegiatan.', 'Bertanggungjawab kepada Penanggung Jawab terhadap kelancaran kegiatan.', 'Melakukan supervisi teknis dan administrasi pelaksanaan serta penggunaan anggaran kegiatan.'),
(11, 10, 'Ketua Tim Kegiatan ', 'Merancang, memimpin dan memantau serta melaporkan pelaksanaan kegiatan', 'Bertanggung jawab kepada Penanggung jawab melalui koordinator atas pelaksanaan kegiatan.', 'Mengusulkan dan menggunakan sumber daya dalam pelaksanaan kegiatan.'),
(12, 11, 'Penanggung Jawab', 'Mengendalikan pelaksanaan kegiatan sesuai  Penetapan Kinerja (PK) dan RKA-K/L dan DIPA Satuan Kerja $satker. Tahun Anggaran $tahun', 'Bertanggungjawab kepada Kepala Puslitbang Sumber Daya Air terhadap tecapainya output kegiatan sesuai PK.', 'Mengusulkan personil pelaksana kegiatan dan menetapkan arah kebijakan pelaksanaan dan penggunaan anggaran kegiatan.'),
(13, 11, 'Koordinator ', 'Membantu Penanggung Jawab mengkoordinasikan dan mengevaluasi kegiatan.', 'Bertanggungjawab kepada Penanggung Jawab terhadap kelancaran kegiatan.', 'Melakukan supervisi teknis dan administrasi pelaksanaan serta penggunaan anggaran kegiatan.'),
(14, 11, 'Ketua Tim Kegiatan ', 'Merancang, memimpin dan memantau serta melaporkan pelaksanaan kegiatan', 'Bertanggung jawab kepada Penanggung jawab melalui koordinator atas pelaksanaan kegiatan.', 'Mengusulkan dan menggunakan sumber daya dalam pelaksanaan kegiatan.'),
(15, 12, 'Penanggung Jawab', 'Mengendalikan pelaksanaan kegiatan sesuai  Penetapan Kinerja (PK) dan RKA-K/L dan DIPA Satuan Kerja $satker. Tahun Anggaran $tahun', 'Bertanggungjawab kepada Kepala Puslitbang Sumber Daya Air terhadap tecapainya output kegiatan sesuai PK.', 'Mengusulkan personil pelaksana kegiatan dan menetapkan arah kebijakan pelaksanaan dan penggunaan anggaran kegiatan.'),
(16, 12, 'Koordinator ', 'Membantu Penanggung Jawab mengkoordinasikan dan mengevaluasi kegiatan.', 'Bertanggungjawab kepada Penanggung Jawab terhadap kelancaran kegiatan.', 'Melakukan supervisi teknis dan administrasi pelaksanaan serta penggunaan anggaran kegiatan.'),
(17, 12, 'Ketua Tim Kegiatan ', 'Merancang, memimpin dan memantau serta melaporkan pelaksanaan kegiatan', 'Bertanggung jawab kepada Penanggung jawab melalui koordinator atas pelaksanaan kegiatan.', 'Mengusulkan dan menggunakan sumber daya dalam pelaksanaan kegiatan.'),
(18, 13, 'Penanggung Jawab', 'Mengendalikan pelaksanaan kegiatan sesuai  Penetapan Kinerja (PK) dan RKA-K/L dan DIPA Satuan Kerja $satker. Tahun Anggaran $tahun', 'Bertanggungjawab kepada Kepala Puslitbang Sumber Daya Air terhadap tecapainya output kegiatan sesuai PK.', 'Mengusulkan personil pelaksana kegiatan dan menetapkan arah kebijakan pelaksanaan dan penggunaan anggaran kegiatan.'),
(19, 13, 'Koordinator ', 'Membantu Penanggung Jawab mengkoordinasikan dan mengevaluasi kegiatan.', 'Bertanggungjawab kepada Penanggung Jawab terhadap kelancaran kegiatan.', 'Melakukan supervisi teknis dan administrasi pelaksanaan serta penggunaan anggaran kegiatan.'),
(20, 13, 'Ketua Tim Kegiatan ', 'Merancang, memimpin dan memantau serta melaporkan pelaksanaan kegiatan', 'Bertanggung jawab kepada Penanggung jawab melalui koordinator atas pelaksanaan kegiatan.', 'Mengusulkan dan menggunakan sumber daya dalam pelaksanaan kegiatan.'),
(21, 14, 'Penanggung Jawab', 'Mengendalikan pelaksanaan kegiatan sesuai  Penetapan Kinerja (PK) dan RKA-K/L dan DIPA Satuan Kerja $satker. Tahun Anggaran $tahun', 'Bertanggungjawab kepada Kepala Puslitbang Sumber Daya Air terhadap tecapainya output kegiatan sesuai PK.', 'Mengusulkan personil pelaksana kegiatan dan menetapkan arah kebijakan pelaksanaan dan penggunaan anggaran kegiatan.'),
(22, 14, 'Koordinator ', 'Membantu Penanggung Jawab mengkoordinasikan dan mengevaluasi kegiatan.', 'Bertanggungjawab kepada Penanggung Jawab terhadap kelancaran kegiatan.', 'Melakukan supervisi teknis dan administrasi pelaksanaan serta penggunaan anggaran kegiatan.'),
(23, 14, 'Ketua Tim Kegiatan ', 'Merancang, memimpin dan memantau serta melaporkan pelaksanaan kegiatan', 'Bertanggung jawab kepada Penanggung jawab melalui koordinator atas pelaksanaan kegiatan.', 'Mengusulkan dan menggunakan sumber daya dalam pelaksanaan kegiatan.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rmp_sdk`
--

CREATE TABLE `rmp_sdk` (
  `id` int(11) NOT NULL,
  `rmp_id` int(11) NOT NULL,
  `no` int(11) NOT NULL,
  `akun` varchar(255) NOT NULL,
  `jenis` varchar(255) NOT NULL,
  `biaya` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rmp_sdk`
--

INSERT INTO `rmp_sdk` (`id`, `rmp_id`, `no`, `akun`, `jenis`, `biaya`) VALUES
(2, 3, 0, '521211', 'Bahan', '13560000'),
(3, 3, 0, '521213', 'Honor output kegiatan', '38170000'),
(4, 3, 0, '521219', 'Barang non operasional lainnya', '29488000'),
(5, 3, 0, '521811', 'Barang persediaan barang konsumsi', '20524000'),
(6, 3, 0, '522131', 'Jasa Konsultan', '98000000'),
(7, 3, 0, '522141', 'Sewa', '27696000'),
(8, 3, 0, '522151', 'Jasa Profesi', '66000000'),
(9, 3, 0, '524111', 'Perjalanan Biasa', '231976000'),
(10, 3, 0, '5212221', 'Jasa Konsultasi', '50000'),
(11, 3, 0, '5212221', 'asdad', '111'),
(12, 3, 0, '5212221', 'asdadsad', '2222222'),
(13, 13, 0, '112312', 'Bahan', '50000000'),
(14, 13, 0, '2311123', 'Transportasi', '10000000'),
(15, 13, 0, '232112', 'Pemateri', '5000000'),
(16, 14, 0, '512121', 'Honor Output Kegiatan', '200000000'),
(17, 14, 0, '5121222', 'Jasa', '700000000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rmp_sdk_list`
--

CREATE TABLE `rmp_sdk_list` (
  `id` int(11) NOT NULL,
  `rmp_sdk_title_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL,
  `jml` int(11) NOT NULL,
  `satuan` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `rmp_sdk_plan_act`
--

CREATE TABLE `rmp_sdk_plan_act` (
  `id` int(11) NOT NULL,
  `act_id` int(11) NOT NULL,
  `month` int(11) NOT NULL,
  `week` int(11) NOT NULL,
  `sdk_id` int(11) NOT NULL,
  `biaya` int(11) NOT NULL,
  `biayaP` float NOT NULL DEFAULT '0',
  `fisik` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rmp_sdk_plan_act`
--

INSERT INTO `rmp_sdk_plan_act` (`id`, `act_id`, `month`, `week`, `sdk_id`, `biaya`, `biayaP`, `fisik`) VALUES
(30, 13, 3, 0, 13, 2000000, 3.07692, 3.07692),
(31, 16, 2, 0, 13, 10000000, 15.3846, 15.3846),
(32, 14, 6, 0, 13, 4000000, 6.15385, 6.15385),
(33, 17, 9, 0, 13, 10000000, 15.3846, 15.3846),
(34, 17, 10, 0, 13, 10000000, 15.3846, 15.3846),
(35, 18, 11, 0, 14, 2000000, 3.07692, 3.07692),
(36, 16, 9, 0, 15, 3000000, 4.61538, 4.61538),
(37, 13, 1, 0, 13, 1000000, 1.53846, 1.53846);

-- --------------------------------------------------------

--
-- Struktur dari tabel `rmp_sdk_plan_stage`
--

CREATE TABLE `rmp_sdk_plan_stage` (
  `id` int(11) NOT NULL,
  `stage_id` int(11) NOT NULL,
  `sdk_id` int(11) NOT NULL,
  `month` int(11) NOT NULL,
  `week` int(11) NOT NULL,
  `biaya` int(11) NOT NULL,
  `biayaP` float NOT NULL DEFAULT '0',
  `fisik` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rmp_sdk_plan_stage`
--

INSERT INTO `rmp_sdk_plan_stage` (`id`, `stage_id`, `sdk_id`, `month`, `week`, `biaya`, `biayaP`, `fisik`) VALUES
(3, 8, 13, 1, 0, 1000000, 1.53846, 1.53846),
(4, 8, 13, 4, 0, 2000000, 3.07692, 3.07692),
(5, 8, 14, 4, 0, 1000000, 1.53846, 1.53846),
(6, 9, 14, 5, 0, 5000000, 7.69231, 7.69231),
(7, 9, 15, 7, 0, 2000000, 3.07692, 3.07692),
(8, 11, 13, 5, 0, 10000000, 15.3846, 15.3846),
(9, 10, 14, 11, 0, 2000000, 3.07692, 3.07692),
(12, 12, 16, 1, 0, 95000000, 10.5556, 10.5556);

-- --------------------------------------------------------

--
-- Struktur dari tabel `rmp_sdk_title`
--

CREATE TABLE `rmp_sdk_title` (
  `id` int(11) NOT NULL,
  `rmp_sdk_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL,
  `jml` int(11) NOT NULL,
  `satuan` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rmp_sdk_title`
--

INSERT INTO `rmp_sdk_title` (`id`, `rmp_sdk_id`, `name`, `details`, `jml`, `satuan`, `total`) VALUES
(2, 2, 'Fotokopi RMP', '40 lmbr x 8 kali', 320, 250, 80000),
(3, 2, 'Fotokopi Laporan Awal', '40 lmbr x 8 kali', 320, 250, 80000),
(4, 2, 'Fotokopi Laporan Interim', '50 lmbr x 8 kali', 400, 250, 100000),
(5, 2, 'Fotokopi Laporan Konsep Akhir', '60 lmbr x  8 kali', 480, 250, 120000),
(7, 3, 'Honor Narasumber', '1 org', 1, 20000000, 20000000),
(8, 3, 'Honor Narsum', '1org x 1 hari', 1, 18170000, 18170000),
(9, 13, 'Komputer', '1 x core i7', 1, 10000000, 10000000),
(11, 16, 'Beli Faisal', '1org x 3 bulan', 1, 120000000, 120000000),
(12, 17, 'Beli Jasa Ahmad', '2 bulan x 2 org', 2, 300000000, 600000000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `rmp_sdm`
--

CREATE TABLE `rmp_sdm` (
  `id` int(11) NOT NULL,
  `rmp_id` int(11) NOT NULL,
  `jabatan_org` varchar(255) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `kompetensi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rmp_sdm`
--

INSERT INTO `rmp_sdm` (`id`, `rmp_id`, `jabatan_org`, `jumlah`, `kompetensi`) VALUES
(1, 3, 'Pengelola Mutu', 1, 'Kepala Litbang Balai Sungai'),
(2, 3, 'Ketua Tim Kegiatan', 1, 'S-2 Teknik Sipil'),
(3, 3, 'asdad', 1, '<ul>\r\n	<li>HMM</li>\r\n	<li>HMM</li>\r\n	<li>HMM</li>\r\n</ul>\r\n'),
(4, 13, 'Pengelola mutu', 1, '<p>Kepala Litbang</p>\r\n'),
(5, 13, 'Pegawai', 3, '<p>...</p>\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rmp_stages`
--

CREATE TABLE `rmp_stages` (
  `id` int(11) NOT NULL,
  `act_id` int(11) NOT NULL,
  `kegiatan` varchar(255) NOT NULL,
  `deskripsi` text,
  `hasil` varchar(255) DEFAULT NULL,
  `metode` varchar(255) NOT NULL,
  `kriteria` varchar(255) NOT NULL,
  `sarpras` varchar(255) DEFAULT NULL,
  `anggaran` int(11) NOT NULL DEFAULT '0',
  `pj` varchar(255) DEFAULT NULL,
  `waktu` varchar(255) DEFAULT NULL,
  `bobot` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rmp_stages`
--

INSERT INTO `rmp_stages` (`id`, `act_id`, `kegiatan`, `deskripsi`, `hasil`, `metode`, `kriteria`, `sarpras`, `anggaran`, `pj`, `waktu`, `bobot`) VALUES
(1, 2, 'Penentuan parameter inspeksi sarana dan prasarana sungai', '', 'Parameter inspeksi', '', '', 'Printer, komputer, ATK', 0, 'Faisal Syaiful Anwar, S.Kom', '17-26', NULL),
(2, 2, 'Penetapan prosedur dan metode inspeksi', '', 'SK Prosedur dan MEtode', '', '', 'Printer, komputer, ATK', 0, 'Faisal Syaiful Anwar, S.Kom', '25-29', NULL),
(3, 2, 'Penyusunan draft panduan inspeksi', '<p>Panduan inspeksi disusun sebagai dasar petugas/juru melakukan inspeksi lapangan. Panduan inspeksi merupakan petunjuk teknis melakukan inspeksi sungai, hal-hal apa saja yang perlu diamati dilapangan saat melakukan inspeksi agar hasil yang didapatkan dapat menyimpulkan jenis kerusakan dan tindakan apa yang perlu dilakukan untuk memperbaiki jenis keruksan tersebut</p>', 'Draft Hasil Akhir', '', '', 'Printer, Komputer, ATK, Scanner, Internet', 0, 'Faisal Syaiful Anwar, S.Kom', '29-33', NULL),
(4, 2, 'Forum group discussion ', '', 'Laporan hasil diskusi FGD', '', '', 'Internet, komputer, printer', 0, '', '30-36', NULL),
(5, 2, 'Finalisasi panduan inspeksi', '<p>Tindak lanjut dari hasil diskusi dilakukan finalisasi dan panduan inspeksi yang disusun sebagai dasar pembuatan aplikasi perangkat &nbsp;lunak inspeksi sungai dan prasarana sungai</p>', 'Panduan PDF', '', '', 'Printer, Komputer, ATK, Scanner, Internet', 0, 'Faisal Syaiful Anwar, S.Kom', '35-36', NULL),
(6, 6, 'Perencanaan perangkat lunak inspeksi', '<p>Perencanaan terhadap menu atau fitur yang perlu ditampilkan dalam aplikasi ,perumusan sistem alur informasi inspeksi sampai dengan pelaporan hasil inspeksi dan penetapan tingkat jenis kerusakan</p>', 'Parameter inspeksi', '', '', 'Printer, Komputer, ATK, Scanner, Internet', 0, '', '37-40', NULL),
(7, 6, 'Pembuatan perangkat lunak inspeksi', '<p>Pembuatan Aplikasi sesuai dengan parameter yang ditetapkan dalam panduan inspeksi &nbsp;yang sudah dibuat. Pelaksanaan pembuatan dilakukan oleh konsultan perorangan</p>', 'Software Perangkat Lunak Inspeksi', '', '', 'Laptop, Printer, Internet', 0, 'Faisal Syaiful Anwar, S.Kom', '25-44', NULL),
(8, 15, 'tes211', '', NULL, '', '', NULL, 4000000, NULL, NULL, NULL),
(9, 15, 'tes212', '', NULL, '', '', NULL, 7000000, NULL, NULL, NULL),
(10, 19, 'tes322', '', NULL, '', '', NULL, 2000000, NULL, NULL, NULL),
(11, 20, 'tes131', '', NULL, '', '', NULL, 10000000, NULL, NULL, NULL),
(12, 21, '111 s', '', 'test', 'metode aja', 'apa yah', 'Internet, ah', 95000000, 'Faisal Syaiful Anwar, S.Kom', '1-7', NULL),
(13, 22, '2.1.2 hhhhhhhhhhhhhhh', '', NULL, '', '', NULL, 0, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `rmp_stages_executor`
--

CREATE TABLE `rmp_stages_executor` (
  `id` int(11) NOT NULL,
  `rmp_stages_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rmp_stages_executor`
--

INSERT INTO `rmp_stages_executor` (`id`, `rmp_stages_id`, `name`) VALUES
(3, 4, 'Ita Eka Pratiwi S Sos'),
(4, 6, 'Faisal Syaiful Anwar S.Kom'),
(5, 7, 'Galih Ginanjar'),
(6, 5, 'Harianto, S.T.'),
(7, 1, 'Ita Eka Pratiwi S Sos'),
(8, 2, 'Galih Ginanjar'),
(9, 3, 'Asep Sulaeman ST MT'),
(10, 12, 'Ahmad'),
(11, 12, 'Fikry');

-- --------------------------------------------------------

--
-- Struktur dari tabel `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `position` varchar(255) NOT NULL,
  `employee_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `roles`
--

INSERT INTO `roles` (`id`, `position`, `employee_id`) VALUES
(1, 'Kepala Pusat Litbang Sumber Daya Air', 1),
(2, 'Kepala Bagian Keuangan dan Umum', 2),
(3, 'Kepala Bidang Standarisasi dan Kerjasama', 3),
(4, 'Kepala Bidang Sumberdaya Kelitbangan', 4),
(5, 'Kepala Bidang Program dan Evaluasi', 5),
(6, 'Kepala Balai Litbang Bangunan Hidraulik dan Geoteknik Keairan', 6),
(7, 'Kepala Balai Litbang Hidrologi dan Tata Air', 7),
(8, 'Kepala Balai Litbang Lingkungan Keairan', 8),
(9, 'Kepala Balai Litbang Sungai', 9),
(10, 'Kepala Balai Litbang Sabo', 10),
(11, 'Kepala Balai Litbang Rawa', 11),
(12, 'Kepala Balai Litbang Pantai', 12),
(13, 'Kepala Balai Litbang Irigasi', 13),
(14, 'Eselon 4 BHGK 1', 14),
(15, 'Eselon 4 BHGK 2', 14),
(16, 'Eselon 4 BHGK 3', 14),
(17, 'Eselon 4 HTA 1', 14),
(18, 'Eselon 4 HTA 2', 14),
(19, 'Eselon 4 HTA 3', 14),
(20, 'Eselon 4 LK 1', 14),
(21, 'Eselon 4 LK 2', 14),
(22, 'Eselon 4 LK 3', 14),
(23, 'Eselon 4 Sungai 1', 14),
(24, 'Eselon 4 Sungai 2', 14),
(25, 'Eselon 4 Sungai 3', 14),
(26, 'Eselon 4 Sabo 1', 14),
(27, 'Eselon 4 Sabo 2', 14),
(28, 'Eselon 4 Sabo 3', 14),
(29, 'Eselon 4 Rawa 1', 14),
(30, 'Eselon 4 Rawa 2', 14),
(31, 'Eselon 4 Rawa 3', 14),
(32, 'Eselon 4 Pantai 1', 14),
(33, 'Eselon 4 Pantai 2', 14),
(34, 'Eselon 4 Pantai 3', 14),
(35, 'Eselon 4 Irigasi 1', 14),
(36, 'Eselon 4 Irigasi 2', 14),
(37, 'Eselon 4 Irigasi 3', 15);

-- --------------------------------------------------------

--
-- Struktur dari tabel `satker`
--

CREATE TABLE `satker` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL COMMENT 'Nama Satker',
  `roles_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `satker`
--

INSERT INTO `satker` (`id`, `name`, `roles_id`) VALUES
(1, 'Balai Bangunan Hidraulik & Geoteknik Keairan', 6),
(2, 'Balai Lingkungan Keairan', 8),
(3, 'Balai Hidrologi dan Tata Air', 7),
(4, 'Balai Sungai', 9),
(5, 'Balai Pantai', 12),
(6, 'Balai Sabo', 10),
(7, 'Balai Rawa', 11),
(8, 'Balai Irigasi', 13),
(9, 'Bagian Keuangan Umum', 2),
(10, 'Bidang Program dan Evaluasi', 5),
(11, 'Bidang Standarisasi dan Kerjasama', 3),
(12, 'Bidang Sumber Daya Kelitbangan', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `structure_organization`
--

CREATE TABLE `structure_organization` (
  `id` int(11) NOT NULL,
  `nip` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `id_satker` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `structure_organization`
--

INSERT INTO `structure_organization` (`id`, `nip`, `name`, `position`, `id_satker`) VALUES
(1, '', 'Dr. Eko Winar Irianto M.T.', 'Kepala Pusat Litbang Sumber Daya Air', 99),
(2, '', 'Drs. Ratna Adiana', 'Kepala Bagian Keuangan dan Umum', 0),
(3, '', 'Ir. Dery Iryawan M.T', 'Kepala Bidang Standarisasi dan Kerjasama', 99),
(4, '', 'Drs. Endar P. Satriyanto, M.M.', 'Kepala Bidang Sumberdaya Kelitbangan', 99),
(5, '', 'Ir. Tati Kurniati, M.T.', 'Kepala Bidang Program dan Evaluasi\r\n', 99),
(6, '', 'Slamet Lestari, S.T., M.T.', 'Kepala Balai Litbang Bangunan Hidraulik dan Geoteknik Keairan', 1),
(7, '', 'Drs. Irfan Sudono, M.T.', 'Kepala Balai Litbang Hidrologi dan Tata Air', 3),
(8, '', 'Ir. Nur Fizli Kifli, M.T.', 'Kepala Balai Litbang Lingkungan Keairan', 2),
(9, '', 'Rahmat Suria Lubis, S.T., M.T.', 'Kepala Balai Litbang Sungai', 4),
(10, '', 'Ir. Dwi Kristiananto, M.Eng', 'Kepala Balai Litbang Sabo', 6),
(11, '', 'Parlimbongan Simangkali, S.T. MPSDA', 'Kepala Balai Litbang Rawa', 7),
(12, '', 'Dr. Leo Eliasta, S.T. M.Sc.', 'Kepala Balai Litbang Pantai', 5),
(13, '', 'Drs. Irfan Sudono, M.T.', 'Kepala Balai Litbang Irigasi', 8);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) DEFAULT NULL COMMENT 'Nama Lengkap dan Gelar',
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `satker_id` varchar(255) DEFAULT NULL,
  `roles_id` int(11) DEFAULT NULL COMMENT 'ID ATASAN',
  `roles` varchar(255) NOT NULL,
  `hp` varchar(255) DEFAULT NULL COMMENT 'Tanggal Lahir',
  `email` varchar(255) NOT NULL,
  `last_login` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `fullname`, `username`, `password`, `satker_id`, `roles_id`, `roles`, `hp`, `email`, `last_login`) VALUES
(1, 'Faisal Syaiful Anwar, S.Kom', 'faisalsyfl', '7815696ecbf1c96e6894b779456d330e', '4', 25, 'Ketua', '0857934343577', 'faisalsyfl@gmail.com', '2018-04-14 03:28:49'),
(2, 'Admin Pusair', 'admin', '42f8fa6a60345251252ea93cb1d71f05', '', 0, 'Admin', '', '', '2018-05-08 04:07:47'),
(3, 'Superadmin', 'suadmin', '42f8fa6a60345251252ea93cb1d71f05', '', 0, 'Superadmin', '', '', '2018-05-08 04:09:02'),
(30, 'Janur S.Kom', 'janur', '', '8', 35, 'Ketua', '085793434357', 'nikoahmadg@gmail.com', '2018-07-30 16:15:49'),
(31, NULL, 'ahmad', '7815696ecbf1c96e6894b779456d330e', NULL, NULL, 'Ketua', NULL, 'ahmad.zainal565@gmail.com', '2018-09-29 07:44:46');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `mnv_fisik`
--
ALTER TABLE `mnv_fisik`
  ADD PRIMARY KEY (`id_mnv_fisik`);

--
-- Indeks untuk tabel `mnv_keuangan`
--
ALTER TABLE `mnv_keuangan`
  ADD PRIMARY KEY (`id_mnv_keuangan`);

--
-- Indeks untuk tabel `mnv_keuangan_total`
--
ALTER TABLE `mnv_keuangan_total`
  ADD PRIMARY KEY (`id_mnv_k_t`);

--
-- Indeks untuk tabel `rmp`
--
ALTER TABLE `rmp`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `rmp_activity`
--
ALTER TABLE `rmp_activity`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `rmp_activity_executor`
--
ALTER TABLE `rmp_activity_executor`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `rmp_bibliography`
--
ALTER TABLE `rmp_bibliography`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `rmp_document`
--
ALTER TABLE `rmp_document`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `rmp_rab_activity`
--
ALTER TABLE `rmp_rab_activity`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `rmp_record_list`
--
ALTER TABLE `rmp_record_list`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `rmp_roles`
--
ALTER TABLE `rmp_roles`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `rmp_sdk`
--
ALTER TABLE `rmp_sdk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `rmp_sdk_list`
--
ALTER TABLE `rmp_sdk_list`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `rmp_sdk_plan_act`
--
ALTER TABLE `rmp_sdk_plan_act`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `rmp_sdk_plan_stage`
--
ALTER TABLE `rmp_sdk_plan_stage`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `rmp_sdk_title`
--
ALTER TABLE `rmp_sdk_title`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `rmp_sdm`
--
ALTER TABLE `rmp_sdm`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `rmp_stages`
--
ALTER TABLE `rmp_stages`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `rmp_stages_executor`
--
ALTER TABLE `rmp_stages_executor`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `satker`
--
ALTER TABLE `satker`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `structure_organization`
--
ALTER TABLE `structure_organization`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `mnv_fisik`
--
ALTER TABLE `mnv_fisik`
  MODIFY `id_mnv_fisik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT untuk tabel `mnv_keuangan`
--
ALTER TABLE `mnv_keuangan`
  MODIFY `id_mnv_keuangan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT untuk tabel `mnv_keuangan_total`
--
ALTER TABLE `mnv_keuangan_total`
  MODIFY `id_mnv_k_t` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `rmp`
--
ALTER TABLE `rmp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `rmp_activity`
--
ALTER TABLE `rmp_activity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `rmp_activity_executor`
--
ALTER TABLE `rmp_activity_executor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `rmp_bibliography`
--
ALTER TABLE `rmp_bibliography`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `rmp_document`
--
ALTER TABLE `rmp_document`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT untuk tabel `rmp_rab_activity`
--
ALTER TABLE `rmp_rab_activity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `rmp_record_list`
--
ALTER TABLE `rmp_record_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `rmp_roles`
--
ALTER TABLE `rmp_roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `rmp_sdk`
--
ALTER TABLE `rmp_sdk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `rmp_sdk_list`
--
ALTER TABLE `rmp_sdk_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `rmp_sdk_plan_act`
--
ALTER TABLE `rmp_sdk_plan_act`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT untuk tabel `rmp_sdk_plan_stage`
--
ALTER TABLE `rmp_sdk_plan_stage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `rmp_sdk_title`
--
ALTER TABLE `rmp_sdk_title`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `rmp_sdm`
--
ALTER TABLE `rmp_sdm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `rmp_stages`
--
ALTER TABLE `rmp_stages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `rmp_stages_executor`
--
ALTER TABLE `rmp_stages_executor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT untuk tabel `satker`
--
ALTER TABLE `satker`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `structure_organization`
--
ALTER TABLE `structure_organization`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
