-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 13 Mei 2018 pada 08.47
-- Versi Server: 10.1.9-MariaDB
-- PHP Version: 7.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
(1, '', 'Dr. Eko Winar Irianto M.T.', 'ekowinar', '21232f297a57a5a743894a0e4a801fc3', '2018-05-06 07:01:34'),
(2, '', 'Drs. Ratna Adiana', 'ratnaadiana', '21232f297a57a5a743894a0e4a801fc3', '2018-05-06 07:01:34'),
(3, '', 'Ir. Dery Iryawan M.T', '', '', '2018-05-06 07:01:34'),
(4, '', 'Drs. Endar P. Satriyanto, M.M.', '', '', '2018-05-06 07:01:34'),
(5, '', 'Ir. Tati Kurniati, M.T.', '', '', '2018-05-06 07:01:34'),
(6, '', 'Slamet Lestari, S.T., M.T.', '', '', '2018-05-06 07:01:34'),
(7, '', 'Drs. Irfan Sudono, M.T.', '', '', '2018-05-06 07:01:34'),
(8, '', 'Ir. Nur Fizli Kifli, M.T.', '', '', '2018-05-06 07:01:34'),
(9, '', 'Rahmat Suria Lubis, S.T., M.T.', 'rahmatsuria', '21232f297a57a5a743894a0e4a801fc3', '2018-05-06 07:01:34'),
(10, '', 'Ir. Dwi Kristiananto, M.Eng', '', '', '2018-05-06 07:01:34'),
(11, '', 'Parlimbongan Simangkali, S.T. MPSDA', '', '', '2018-05-06 07:01:34'),
(12, '', 'Dr. Leo Eliasta, S.T. M.Sc.', '', '', '2018-05-06 07:01:34'),
(13, '', 'Drs. Irfan Sudono, M.T.', '', '', '2018-05-06 07:01:34'),
(14, '090021278', 'Mas''ud Adhi Putra, M.Kom.', 'kangmas', 'kangmas', '2018-05-08 07:10:56');

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
  `rmp_stats` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kegiatan`
--

INSERT INTO `kegiatan` (`id`, `user_id`, `judul`, `tahun_anggaran`, `jenis`, `rmp_stats`) VALUES
(4, 1, 'Pengembangan Website SIPROMON', 2018, 'Layanan Internal', 1),
(7, 1, 'Tes Rekomtek', 2018, 'Rekomtek', 1);

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
  `persyaratanteknis` text,
  `persyaratanadministrasi` text,
  `strukturorg` varchar(255) DEFAULT NULL,
  `prasarana` text,
  `lingkungan` text,
  `baganalir` varchar(255) DEFAULT NULL,
  `cek` longtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rmp`
--

INSERT INTO `rmp` (`id`, `kegiatan_id`, `latar`, `masalah`, `batasan`, `tujuan`, `tinjauan`, `kerangka`, `formulasi`, `manfaat`, `juduldansumber`, `lingkup`, `metode`, `lokasi`, `sasarankeluaran`, `sasaranmutu`, `persyaratanteknis`, `persyaratanadministrasi`, `strukturorg`, `prasarana`, `lingkungan`, `baganalir`, `cek`) VALUES
(3, 4, '<p>Sungai merupakan salah satu sumber air yang sangat penting bagi kehidupan manusia. Sejak jaman dahulu sungai banyak dimanfaatkan manusia untuk memenuhi berbagai kebutuhan dasar manusia sebagai sumber air dan sumber pangan. Selain itu sungai juga dimanfaatkan sebagai sumber air pertanian dan sarana transportasi untuk mobilisasi manusia maupun barang.</p><p>Seiring berjalannya waktu, sungai maupun prasarana sungai akan mengalami degradasi kondisi fisik dan fungsi, baik akibat faktor internal (usia bangunan) maupun akibat faktor eksternal (aktifitas manusia atau bencana alam). Tanpa adanya pemeliharaan yang memadai terhadap sungai dan prasarana sungai, maka aktifitas eksploitasi dan operasi prasarana sungai akan terganggu ataupun dapat terhenti. Oleh karena itu, operasi dan pemeliharaan prasarana sungai maupun pemeliharaan sungai merupakan kesatuan kegiatan yang tidak dapat terpisahkan.</p><p>Agar pelaksanaan operasi dan pemeliharaan (OP) prasarana sungai serta pemeliharaan sungai dapat berjalan secara efektif dan efisien, maka diperlukan sebuah pedoman yang dapat menjadi acuan bagi para penyelenggara/ pelaksana. Oleh karena itu, dalam rangka menjaga kelestarian fungsi sungai serta mengoptimalkan pemanfaatan prasarana sungai di Indonesia, maka pada tanggal 9 Juni 2016 telah ditetapkan Surat Edaran Dirjen SDA Kementerian PUPR Nomor: 05/SE/D/2016, tentang Pedoman Penyelenggaraan Kegiatan Operasi dan Pemeliharaan Prasarana Sungai Serta Pemeliharaan Sungai.</p><p>Berdasarkan surat edaran tersebut, Instansi pengelola sungai memiliki tanggungjawab untuk memastikan bahwa pemeliharaan sungai dan prasarana sungai terus dilakukan secara berkelanjutan, berkala, dan terencana untuk menjaga kondisi sungai maupun prasarana sungai agar tetap berfungsi optimal. Selain itu pengelola sungai juga bertanggungjawab atas ketersediaan informasi mengenai kondisi sungai dan prasarana sungai sebagai dasar untuk pelaksanaan pemeliharaan. Pemeriksaan/ inspeksi rutin di lapangan merupakan salah satu cara yang dapat dilakukan untuk memperoleh informasi terkini <em>(realtime)</em> mengenai kondisi sungai maupun prasarana sungai agar gejala kerusakan yang lebih besar dapat diantisipasi sedini mungkin.</p><p>Untuk meningkatkan kualitas dan efektifitas inspeksi rutin sungai dan prasarana sungai, maka perlu didukung dengan panduan inspeksi yang detail serta sarana penunjang yang mampu mengelola data dan informasi hasil inspeksi. Salah satu upaya yang dapat dilakukan untuk mendukung kegiatan tersebut adalah dengan mengembangkan perangkat lunak inspeksi sungai yang dapat digunakan untuk pengelolaan data dan informasi hasil inspeksi sungai dan prasarana sungai.</p><p>Terkait dengan hal tersebut, maka sejak Tahun 2017 Balai Litbang Sungai, Pusat Litbang SDA, sudah mengembangkan panduan inspeksi serta perangkat lunak inspeksi yaitu tanggul tanah. Untuk melengkapi panduan dan perangkat lunak tersebut, mencakup seluruh komponen inspeksi sesuai dengan SE Dirjen No: 05/SE/D/2016, maka pada Tahun Anggaran 2018 perlu dilakukan kegiatan berupa &ldquo;Pengembangan Perangkat Lunak Inspeksi Sungai dan Prasarana Sungai&rdquo;. Dengan tercapainya sasaran kegiatan ini, diharapkan pelaksanaan inspeksi sungai dan prasarana sungai yang dilakukan oleh pengelola sungai akan menjadi lebih mudah, efektif, efisien, dan sistemastis.</p>', '<p>Permasalahan yang akan dikaji berdasarkan skala prioritas pada kegiatan ini, adalah:</p><ol style="margin-left: 20px;"><li>Prasarana sungai yang mengalami kerusakan tidak terdeteksi sejak dini</li><li>Pengambilan data inspeksi masih bersifat manual</li><li>Waktu pelaporan inspeksi dibutuhkan waktu yang lama</li></ol>', '<p>Tidak ada masalah</p>', '<p>Tujuan dari pelaksanaan Kegiatan Pengembangan Perangkat Lunak Inspeksi Sungai dan Prasarana Sungai adalah menghasilkan perangkat lunak inspeksi sungai dan prasarana sungai yang dapat digunakan oleh instansi pengelola wilayah sungai di Indonesia-sia.</p>', '<p>Acuan dalam rangka memelihara sumber air dan menjaga kelestarian fungsi sungai, mengoptimalkan pemanfaatan prasarana sungai, serta memberikan kejelasan proses penyusunan perhitungan angka kebutuhan nyata operasi dan pemeliharaan prasarana sungai secara efektif, efisien, dan berkelanjutan bagi Balai Besar Wilayah Sungai/ Balai Wilayah Sungai tertuang dalam Surat Edaran Dirjen SDA Nomor: 05/SE/D/2016. Salah satu metode dalam pemeliharaan prasarana sungai adalah pendataan kondisi bangunan prasarana tersebut, baik yang melintang maupun yang sejajar dengan alur sungai. Salah satu cara pendataan kehandalan prasarana sungai adalah dengan menginspeksi kondisi bangunan secara visual.</p><h2><a name="_Toc504750337">Inspeksi Sungai</a></h2><p>Berdasarkan SE dirjen NO.5., 2016 difinisi Inspeksi sungai adalah proses pengecekan atau pemeriksanan oleh petugas &nbsp;dengan tujuan untuk mengetahui bagian-bagian sungai yang bermasalah. Kegiatan inspeksi perlu membawa formulir untuk mengetahui bagian-bagian mana yang harus diperhatikan dalam pelaksanaan inspeksi pada setiap ruas sungai dan setiap jenis bangunan.</p><p>Berdasarkan SE dirjen NO.5., 2016 inspeksi kondisi bangunan dilakukan paling sedikit 1 (satu) kali dalam 1 bulan untuk memastikan kondisi bangunan dalam kondisi baik. Cara menginspeksi dilakukan dengan pengamatan atau visual serta identifikasi kerusakan bangunan. Apabila terjadi kondisi kerusakan kritis maka dilakukan pemeliharaan secara preventif berupa penelusuran (walkthrough). Inspeksi sungai dikerjakan oleh juru sungai yang dibantu oleh pengawas OP bangunan sungai dalam pelaksanaan penelusuran dan pengamatan perkembangan kondisi bangunan untuk segera dilaporkan ke petugas pengamat sungai.</p><p>Rangkuman cacatan inspeksi digunakan sebagai salah satu bahan pertimbangan dalam evaluasi program OP lima tahunan, serta &nbsp;menjadi masukan dalam penyusunan program OP pada tahun berikutnya. (SE dirjen NO.5., 2016).</p><h2><a name="_Toc504750338">Aplikasi Inspeksi Sungai</a></h2><p>Salah satu alat yang dapat digunakan dalam penginspeksian adalah dengan menggukan aplikasi maupun pengisian formulir. Aplikasi atau pengisian formulir secara manual ada kurang lebihnya, akan tetapi dengan berkembangnya teknologi saat ini penggunaan aplikasi akan mempermudah dalam pengisisan formulir inspeksi sungai. Formulir yang sebelumnya berupa <em>hardcopy</em> berubah menjadi <em>softcopy</em> dan secara <em>real time</em> dapat di unduh hasilnya oleh BBWS itu sendiri. Aplikasi ini berbasis <em>android</em> dan terdapat dalam <em>google play</em> yang bertujuan agar semua juru inspeksi dapat mengunduh secara gratis. Aplikasi ini familiar bagi segala jenjang pendidikan sehingga tidak perlu lama untuk pemahamannya<!--[if !supportAnnotations]--><a href="#_msocom_1" language="JavaScript" name="_msoanchor_1">[i1]</a><!--[endif]--> . (Sarwono, 2017).</p><p>Salah satu teknik inspeksi sungai dilakukan dengan pengisian formulir inspeksi sungai manual &nbsp;yang diinput ke <em>web server</em> pada aplikasi PAS (Pengelolaan Aset Sungai) yang dibuat oleh Dirjen SDA, Kementerian PUPR. Tujuan aplikasi data base secara online ini memudahkan dalam mengontrol secara cepat dan mudah. (Dirjen SDA, 2016)</p><h2><a name="_Toc504750339">Pemeliharaan&nbsp;</a>Sungai dan Prasarana Sungai</h2><h2><a name="_Toc504750340">Pemeliharaan sungai</a></h2><p>Berdasarkan SE dirjen NO.5., 2016 pemeliharaan sungai mencakup tindakan merawat, melindungi:</p><p>palung sungai senantiasa berfungsi sebagai tempat mengalir dan berlangsungnya kehidupan ekosistem sungai meliputi: tebing sungai, alur dasar sungai, dinamika meander, dan kegiatan di palung sungai.</p><p>Sempadan sungai berfungsi sebagai tempat penyangga antara ekosistem sungai dan dataran, agar fungsi dan kegiatan manusia tidak terganggu meliputi: kegiatan di bantaran maupun sempadan sungai.</p><h2><a name="_Toc504750341">Pemeliharaan bangunan prasarana sungai</a></h2><p>Berdasarkan SE dirjen NO.5., 2016 Pemeliharaan bangunan prasarana sungai mencakup tindakan/ kegiatan pencegahan kerusakan/ kemerosotan (preventif), perbaikan kerusakan (tindakan korektif) serta pemulihan kembali (tindakan rehabilitatif) yang meliputi: prasarana pelindung palung sungai, prasarana pendayagunaan sungai, prasarana pengendali aliran air sungai dan prasarana pemantau kondisi hidrologi, hidroklimatologi dan kualitas air.</p><ol style="margin-left: 20px;"><li>Jenis-jenis prasarana sungai meliputi:</li><li>Tanggul sungai.</li><li>Pelindung tebing / revertment.</li><li>Bangunan jetty.</li><li>Bangunan krib.</li><li>Bangunan pelimpah banjir.</li><li>Pintu pengendali aliran / banjir.</li><li>Pompa banjir.</li><li>Bendung karet.</li><li>Retention pond.</li><li>Bangunan groundsill.</li><li>Jalan inspeksi.</li><li>Bangunan pos pemantau H3.</li><li>Bangunan gedung kantor pendukung OP, laboratorium, bengkel dan Gardu jaga.</li><li>Prasarana peralatan, alat berat dan kendaraan operasi pendukung OP.</li><li>Peralatan informasi dan komunikasi.</li></ol><!--[if !supportAnnotations]-->', '<p><img src="https://i.froala.com/download/b8d70436f5d8cd2337744a1513912a0d1b8cd00b.JPG?1524983656" style="width: 332px;" class="fr-fic fr-dib"></p><p style="text-align: center;"><strong>Gambar 1.&nbsp;</strong>Kerangka Pikir</p>', '<p>Pengambilan data inspeksi yang masih bersifat manual memiliki kekurangan diantaranya; prasarana sungai yang mengalami kerusakan tidak terdeteksi sejak dini, waktu pelaporan inspeksi dibutuhkan lama dan sistematika data hasil inspeksi belum terstruktur maka dibutuhkan pengembangan perangkat lunak inspeksi sungai dan prasarana sungai dengan OS android yang cukup familiar bagi para juru sungai dan masyarakat.</p>', '<p>Aplikasi Inspeksi sungai akan bermanfaat bagi Balai Besar Wilayah Sungai Bengawan Solo sebagai lokasi penerapan perangkat lunak inspeksi sungai dan prasarana sungai sehingga mendapatkan informasi kondisi di Sungai Bengawan Solo. Aplikasi ini juga dapat bermanfaat bagi Balai Besar Wilayah Sungai/ Balai Wilayah Sungai di Lingkungan Direktorat Jenderal Sumber Daya Air dalam pelaksanaan inspeksi sungai dan prasarana sungai yang lebih mudah, cepat dan sistemastis</p>', '<p>Judul kegiatan ini adalah &ldquo;<strong>Pengembangan Perangkat Lunak Inspeksi Sungai dan Prasarana Sungai</strong>&rdquo; yang sesuai Daftar Isian Pelaksanaan Anggaran Satuan Kerja Balai Litbang Sungai Tahun Anggaran 2018 dengan nomor pengesahan DIPA-033.11.1.636846/2018 05 Desember 2017. Kegiatan ini dilaksanakan secara swakelola dan kontraktual.</p>', '<p>Lingkup pekerjaan yang akan dilaksanakan pada pekerjaan ini meliputi:</p><ol style="margin-left: 20px;"><li>Penyusunan panduan teknis inspeksi sungai dan prasaranan sungai, yang dapat membantu dalam menentukan prioritas penanganan sesuai tingkat kerusakan prasarana sungai</li><li>Pembuatan perangkat lunak inspeksi sungai dan prasarana sungai berbasis android dan website;</li><li>Uji coba perangkat lunak<em>&nbsp;</em>inspeksi sungai dan prasarana sungai;</li><li><em>Workshop</em> panduan dan perangkat lunak inspeksi sungai dan prasarana sungai.</li></ol>', NULL, '<p>Lokasi pelaksanaan kegiatan Pengembangan Perangkat Lunak Inspeksi Sungai dan Prasarana Sungai ini antara lain:</p><ol style="margin-left: 20px;"><li>Balai Litbang Sungai, Surakarta (Prop. Jawa Tengah): lokasi koordinasi tim, analisa data, penyusunan laporan kegiatan, dan pelaksanaan <em>workshop</em> perangkat lunak inspeksi Sungai dan Prasarana Sungai;</li><li>Pusat Litbang SDA, Bandung (Prop. Jawa Barat): lokasi kordinasi, diskusi dengan para pakar di Pusat Litbang SDA dan evaluator pusat;</li><li>Universitas Gajah Mada, DI Yogyakarta: lokasi diskusi dan konsultasi dengan narasumber;</li><li>Jakarta (DKI Jakarta): lokasi diskusi dan konsultasi dengan narasumber;</li><li>Sungai Bengawan Solo, Bojonegoro (Prop. Jawa Timur): Lokasi ini dipilih untuk melakukan simulasi perangkat lunak inspeksi karena memiliki tingkat permasalahan sungai yang komplek.</li></ol>', '<p>Sasaran keluaran (<em>output</em>) Kegiatan Pengembangan Perangkat Lunak Inspeksi Sungai dan Prasarana Sungai yang akan dihasilkan pada Tahun 2018 adalah &nbsp;1 (satu) teknologi Perangkat Lunak Inspeksi Sungai dan Prasarana Sungai, yang didukung komponen output sebagai berikut:</p><ol style="margin-left: 20px;"><li>Panduan teknis Inspeksi Sungai dan Prasarana Sungai;</li><li>Manual perangkat lunak Inspeksi Sungai dan Prasarana Sungai</li></ol>', '<p>Sasaran mutu Kegiatan Pengembangan Perangkat Lunak Inspeksi Sungai dan Prasarana Sungai, antara lain:</p><ol style="margin-left: 20px;"><li>Tersedianya Teknologi perangkat lunak inspeksi sungai dan prasarana sungai dengan jenis bangunan Pelindung tebing / revertment, Bangunan jetty, Bangunan krib, Bangunan pelimpah banjir, Pintu pengendali aliran / banjir, Pompa banjir, Bendung karet, Retention pond, groundsill &nbsp;yang dapat mengurangi waktu pelaporan dari hitungan hari menjadi hitungan menit, dan dicapai pada Bulan November 2018.</li><li>Tercapainya penerapan Perangkat Lunak inspeksi sungai dan prasarana sungai dengan minimal 1 (satu) lokasi objek inspeksi untuk setiap jenis prasarana sungai di Sungai Bengawan Solo.</li></ol>', '<p>Persyaratan teknis untuk pelaksanaan Kegiatan Pengembangan Perangkat Lunak Inspeksi Sungai dan Prasarana Sungai adalah:</p><ol style="margin-left: 20px;"><li>Peraturan Pemerintah Republik Indonesia No. 42 tahun 2008 tentang pengelolaan sumber daya air;</li><li>Peraturan Pemerintah Republik Indonesia No.35 Tahun 1991 tentang Sungai.</li><li>Keputusan Menteri Permukiman dan Prasarana Wilayah, Pedoman Konstruksi dan Bangunan Pd T-11-2004-A, tentang Pemeliharaan Bangunan Persungaian;</li><li>Surat Edaran Direktur Jenderal Sumber Daya Air No. 05/SE/D/2016 tanggal 9 Juni 2016, tentang Pedoman Penyelenggaraan Kegiatan Operasi dan Pemeliharaan Prasarana Sungai serta Pemeliharaan Sungai.</li><li><strong>&nbsp;</strong>Kerangka Acuan Kerja Kegiatan &ldquo;Pengembangan Perangkat Lunak Inspeksi Sungai dan Prasarana Sungai&rdquo;.</li></ol>', '<p>Persyaratan administrasi untuk pelaksanaan Kegiatan Pengembangan Perangkat Lunak Inspeksi Sungai dan Prasarana Sungai tahun 2018 adalah persyaratan yang tercantum dalam dokumen &ndash; dokumen sebagai berikut:</p><ol style="margin-left: 20px;"><li>Peraturan Menteri Keuangan Republik Indonesia No. 33/PMK.02/2017 tentang Standar Biaya Masukan Tahun Anggaran 2018.</li><li>Peraturan Menteri Pekerjaan Umum dan Perumahan Rakyat No.20/PRT/M/2016 Tanggal 23 Mei 2016 Tentang Organisasi Dan Tata Kerja Unit Pelaksana Teknis Kementerian Pekerjaan Umum Dan Perumahan Rakyat.</li><li>Daftar Isian Pelaksanaan Anggaran (DIPA) Satuan Kerja Balai litbang sungai TA. 2018 No. DIPA-033.11.1.636846/2018 Bulan Desember 2017.</li><li>Rincian Kertas Kerja/RKA-KL Satker Balai litbang sungai TA. 2018.</li><li>Surat Keputusan Kepala Satuan Kerja Balai litbang sungai tentang Penunjukan Susunan Tim Pelaksana Kegiatan, dan Pengangkatan/ Penunjukan Tenaga Narasumber.</li><li>Panduan RMP &nbsp;Kegiatan di lingkungan Puslitbang Sumber Daya Air edisi tahun 2018.</li></ol>', 'Strukturorg_1524299563.JPG', NULL, NULL, 'baganalir_1524986711.JPG', NULL),
(4, 7, '<p>a</p>', '<p>a</p>', '<p>a</p>', '<p>a</p>', '<p>a</p>', '', '', '<p>a</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `rmp_activity`
--

CREATE TABLE `rmp_activity` (
  `id` int(11) NOT NULL,
  `rmp_id` int(11) NOT NULL,
  `kegiatan` text NOT NULL,
  `deskripsi` text NOT NULL,
  `parent` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rmp_activity`
--

INSERT INTO `rmp_activity` (`id`, `rmp_id`, `kegiatan`, `deskripsi`, `parent`) VALUES
(2, 3, 'Penyusunan panduan teknis inspeksi sungai dan prasarana sungai', '', 'B'),
(3, 3, 'Penyusunan tim pelaksana dan narasumber', '', 'A'),
(6, 3, 'Pengembangan perangkat lunak inspeksi sungai dan prasarana sungai', '', 'B'),
(7, 3, 'Laporan Berkala (Bulanan) Simonev', '', 'C'),
(8, 3, 'Konsep laporan akhir dan konsep output kegiatan', '', 'C'),
(9, 3, 'Laporan akhir dan output kegiatan', '', 'C'),
(10, 3, 'Diskusi Rancangan Kerja', '', 'A'),
(11, 3, 'Penyusunan Rencana Mutu Pelaksanaan (RMP)', '', 'A');

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
  `bib_city` varchar(255) NOT NULL
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
(15, 4, 'Pengelolaan Kegiatan Penelitian ', 'DSM/PUSAIR/PP/04');

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
(4, 3, 'Ketua Sub Kegiatan Perangkat Lunak Inspeksi Sungai dan Prasarana Sungai', '<p>Merancang, memimpin dan melaporkan pelaksanaan sub kegiatan Perangkat Lunak Inspeksi Sungai dan Prasarana Sungai</p>', '<p>Bertanggung jawab kepada Pengelola Mutu sub kegiatan atas pelaksanaan sub kegiatan Perangkat Lunak Inspeksi Sungai dan Prasarana Sungai</p>', '<p>Mengusulkan dan menggunakan sumber daya dalam pelaksanaan sub kegiatan Perangkat Lunak Inspeksi Sungai dan Prasarana Sungai</p>');

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

-- --------------------------------------------------------

--
-- Struktur dari tabel `rmp_stages`
--

CREATE TABLE `rmp_stages` (
  `id` int(11) NOT NULL,
  `act_id` int(11) NOT NULL,
  `kegiatan` varchar(255) NOT NULL,
  `deskripsi` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rmp_stages`
--

INSERT INTO `rmp_stages` (`id`, `act_id`, `kegiatan`, `deskripsi`) VALUES
(1, 2, 'Penentuan parameter inspeksi sarana dan prasarana sungai', ''),
(2, 2, 'Penetapan prosedur dan metode inspeksi', ''),
(3, 2, 'Penyusunan draft panduan inspeksi', '<p>Panduan inspeksi disusun sebagai dasar petugas/juru melakukan inspeksi lapangan. Panduan inspeksi merupakan petunjuk teknis melakukan inspeksi sungai, hal-hal apa saja yang perlu diamati dilapangan saat melakukan inspeksi agar hasil yang didapatkan dapat menyimpulkan jenis kerusakan dan tindakan apa yang perlu dilakukan untuk memperbaiki jenis keruksan tersebut</p>'),
(4, 2, 'Forum group discussion ', ''),
(5, 2, 'Finalisasi panduan inspeksi', '<p>Tindak lanjut dari hasil diskusi dilakukan finalisasi dan panduan inspeksi yang disusun sebagai dasar pembuatan aplikasi perangkat &nbsp;lunak inspeksi sungai dan prasarana sungai</p>'),
(6, 6, 'Perencanaan perangkat lunak inspeksi', '<p>Perencanaan terhadap menu atau fitur yang perlu ditampilkan dalam aplikasi ,perumusan sistem alur informasi inspeksi sampai dengan pelaporan hasil inspeksi dan penetapan tingkat jenis kerusakan</p>'),
(7, 6, 'Pembuatan perangkat lunak inspeksi', '<p>Pembuatan Aplikasi sesuai dengan parameter yang ditetapkan dalam panduan inspeksi &nbsp;yang sudah dibuat. Pelaksanaan pembuatan dilakukan oleh konsultan perorangan</p>');

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
(37, 'Eselon 4 Irigasi 3', 14);

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
(1, 'Faisal Syaiful Anwar, S.Kom', 'faisalsyfl', '7815696ecbf1c96e6894b779456d330e', '4', 23, 'Ketua', '085793434357', 'faisalsyfl@gmail.com', '2018-04-14 03:28:49'),
(2, 'Admin Pusair', 'admin', '29ece5030d6679c65b6573ae20fc0ca6', '', 0, 'Admin', '', '', '2018-05-08 04:07:47'),
(3, 'Superadmin', 'suadmin', '42f8fa6a60345251252ea93cb1d71f05', '', 0, 'Superadmin', '', '', '2018-05-08 04:09:02'),
(5, NULL, 'hehehe', '7815696ecbf1c96e6894b779456d330e', NULL, NULL, 'Ketua', NULL, 'hehehe@gmail.com', '2018-05-12 08:17:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rmp`
--
ALTER TABLE `rmp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rmp_activity`
--
ALTER TABLE `rmp_activity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rmp_bibliography`
--
ALTER TABLE `rmp_bibliography`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rmp_document`
--
ALTER TABLE `rmp_document`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rmp_record_list`
--
ALTER TABLE `rmp_record_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rmp_roles`
--
ALTER TABLE `rmp_roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rmp_sdk`
--
ALTER TABLE `rmp_sdk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rmp_sdm`
--
ALTER TABLE `rmp_sdm`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rmp_stages`
--
ALTER TABLE `rmp_stages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `satker`
--
ALTER TABLE `satker`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `structure_organization`
--
ALTER TABLE `structure_organization`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `rmp`
--
ALTER TABLE `rmp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `rmp_activity`
--
ALTER TABLE `rmp_activity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `rmp_bibliography`
--
ALTER TABLE `rmp_bibliography`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `rmp_document`
--
ALTER TABLE `rmp_document`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `rmp_record_list`
--
ALTER TABLE `rmp_record_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `rmp_roles`
--
ALTER TABLE `rmp_roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `rmp_sdk`
--
ALTER TABLE `rmp_sdk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `rmp_sdm`
--
ALTER TABLE `rmp_sdm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `rmp_stages`
--
ALTER TABLE `rmp_stages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `satker`
--
ALTER TABLE `satker`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `structure_organization`
--
ALTER TABLE `structure_organization`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;