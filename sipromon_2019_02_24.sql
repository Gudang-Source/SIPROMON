/*
 Navicat Premium Data Transfer

 Source Server         : Sipromon
 Source Server Type    : MySQL
 Source Server Version : 100119
 Source Host           : sipromon.pusair-pu.go.id:2106
 Source Schema         : sipromon

 Target Server Type    : MySQL
 Target Server Version : 100119
 File Encoding         : 65001

 Date: 24/02/2019 10:01:37
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for emon_akun_2019
-- ----------------------------
DROP TABLE IF EXISTS `emon_akun_2019`;
CREATE TABLE `emon_akun_2019`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kdsatker` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `kdpaket` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nmpaket` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `kdmak` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nmmak` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `pagu` double NOT NULL,
  `realisasi` double NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1496 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of emon_akun_2019
-- ----------------------------
INSERT INTO `emon_akun_2019` VALUES (622, '11279842', '1', 'Rancangan Pedoman R0 Penggunaan Bahan Karet Komposit untuk komponen  Pintu Air Irigasi', '521211', 'Belanja Bahan', 22690000, 0);
INSERT INTO `emon_akun_2019` VALUES (623, '11279842', '1', 'Rancangan Pedoman R0 Penggunaan Bahan Karet Komposit untuk komponen  Pintu Air Irigasi', '521811', 'Belanja Barang Untuk Persediaan Barang Konsumsi', 10600000, 0);
INSERT INTO `emon_akun_2019` VALUES (624, '11279842', '1', 'Rancangan Pedoman R0 Penggunaan Bahan Karet Komposit untuk komponen  Pintu Air Irigasi', '522141', 'Belanja Sewa', 22488000, 0);
INSERT INTO `emon_akun_2019` VALUES (625, '11279842', '1', 'Rancangan Pedoman R0 Penggunaan Bahan Karet Komposit untuk komponen  Pintu Air Irigasi', '522151', 'Belanja Jasa Profesi', 98400000, 0);
INSERT INTO `emon_akun_2019` VALUES (626, '11279842', '1', 'Rancangan Pedoman R0 Penggunaan Bahan Karet Komposit untuk komponen  Pintu Air Irigasi', '524111', 'Belanja perjalanan biasa', 111858000, 0);
INSERT INTO `emon_akun_2019` VALUES (627, '11279842', '1', 'Rancangan Pedoman R0 Penggunaan Bahan Karet Komposit untuk komponen  Pintu Air Irigasi', '524119', 'Belanja Perjalanan Dinas Paket Meeting Luar Kota', 88140000, 0);
INSERT INTO `emon_akun_2019` VALUES (628, '11279842', '2', 'Penerapan Teknologi Irigasi Hemat Air Berbahan Lokal', '521211', 'Belanja Bahan', 10450000, 0);
INSERT INTO `emon_akun_2019` VALUES (629, '11279842', '2', 'Penerapan Teknologi Irigasi Hemat Air Berbahan Lokal', '521213', 'Honor Output Kegiatan', 156800000, 0);
INSERT INTO `emon_akun_2019` VALUES (630, '11279842', '2', 'Penerapan Teknologi Irigasi Hemat Air Berbahan Lokal', '521219', 'Belanja Barang Non Operasional Lainnya', 321955000, 0);
INSERT INTO `emon_akun_2019` VALUES (631, '11279842', '2', 'Penerapan Teknologi Irigasi Hemat Air Berbahan Lokal', '521811', 'Belanja Barang Untuk Persediaan Barang Konsumsi', 18000000, 0);
INSERT INTO `emon_akun_2019` VALUES (632, '11279842', '2', 'Penerapan Teknologi Irigasi Hemat Air Berbahan Lokal', '522141', 'Belanja Sewa', 82207000, 0);
INSERT INTO `emon_akun_2019` VALUES (633, '11279842', '2', 'Penerapan Teknologi Irigasi Hemat Air Berbahan Lokal', '522151', 'Belanja Jasa Profesi', 81400000, 0);
INSERT INTO `emon_akun_2019` VALUES (634, '11279842', '2', 'Penerapan Teknologi Irigasi Hemat Air Berbahan Lokal', '522191', 'Belanja Jasa Lainnya', 49000000, 0);
INSERT INTO `emon_akun_2019` VALUES (635, '11279842', '2', 'Penerapan Teknologi Irigasi Hemat Air Berbahan Lokal', '524111', 'Belanja perjalanan biasa', 559096000, 0);
INSERT INTO `emon_akun_2019` VALUES (636, '11279842', '2', 'Penerapan Teknologi Irigasi Hemat Air Berbahan Lokal', '524119', 'Belanja Perjalanan Dinas Paket Meeting Luar Kota', 32140000, 0);
INSERT INTO `emon_akun_2019` VALUES (637, '11279842', '2', 'Penerapan Teknologi Irigasi Hemat Air Berbahan Lokal', '532111', 'Belanja Modal Peralatan dan Mesin', 345481000, 0);
INSERT INTO `emon_akun_2019` VALUES (638, '11279842', '3', 'Penerapan Teknologi DSS SMOPI Dalam Mendukung Modernisasi Irigasi', '521211', 'Belanja Bahan', 28260000, 0);
INSERT INTO `emon_akun_2019` VALUES (639, '11279842', '3', 'Penerapan Teknologi DSS SMOPI Dalam Mendukung Modernisasi Irigasi', '521213', 'Honor Output Kegiatan', 245760000, 0);
INSERT INTO `emon_akun_2019` VALUES (640, '11279842', '3', 'Penerapan Teknologi DSS SMOPI Dalam Mendukung Modernisasi Irigasi', '521219', 'Belanja Barang Non Operasional Lainnya', 264900000, 0);
INSERT INTO `emon_akun_2019` VALUES (641, '11279842', '3', 'Penerapan Teknologi DSS SMOPI Dalam Mendukung Modernisasi Irigasi', '521811', 'Belanja Barang Untuk Persediaan Barang Konsumsi', 33000000, 0);
INSERT INTO `emon_akun_2019` VALUES (642, '11279842', '3', 'Penerapan Teknologi DSS SMOPI Dalam Mendukung Modernisasi Irigasi', '522131', 'Belanja Jasa Konsultan', 99700000, 0);
INSERT INTO `emon_akun_2019` VALUES (643, '11279842', '3', 'Penerapan Teknologi DSS SMOPI Dalam Mendukung Modernisasi Irigasi', '522141', 'Belanja Sewa', 271212000, 0);
INSERT INTO `emon_akun_2019` VALUES (644, '11279842', '3', 'Penerapan Teknologi DSS SMOPI Dalam Mendukung Modernisasi Irigasi', '522151', 'Belanja Jasa Profesi', 162000000, 0);
INSERT INTO `emon_akun_2019` VALUES (645, '11279842', '3', 'Penerapan Teknologi DSS SMOPI Dalam Mendukung Modernisasi Irigasi', '522191', 'Belanja Jasa Lainnya', 49000000, 0);
INSERT INTO `emon_akun_2019` VALUES (646, '11279842', '3', 'Penerapan Teknologi DSS SMOPI Dalam Mendukung Modernisasi Irigasi', '524111', 'Belanja perjalanan biasa', 615522000, 0);
INSERT INTO `emon_akun_2019` VALUES (647, '11279842', '3', 'Penerapan Teknologi DSS SMOPI Dalam Mendukung Modernisasi Irigasi', '524119', 'Belanja Perjalanan Dinas Paket Meeting Luar Kota', 143640000, 0);
INSERT INTO `emon_akun_2019` VALUES (648, '11279842', '3', 'Penerapan Teknologi DSS SMOPI Dalam Mendukung Modernisasi Irigasi', '532111', 'Belanja Modal Peralatan dan Mesin', 191880000, 0);
INSERT INTO `emon_akun_2019` VALUES (649, '11279842', '3', 'Penerapan Teknologi DSS SMOPI Dalam Mendukung Modernisasi Irigasi', '534121', 'Belanja Modal Irigasi', 97313000, 0);
INSERT INTO `emon_akun_2019` VALUES (650, '11279842', '4', 'Penerapan terbatas pembuka pintu air portabel', '521211', 'Belanja Bahan', 30775000, 0);
INSERT INTO `emon_akun_2019` VALUES (651, '11279842', '4', 'Penerapan terbatas pembuka pintu air portabel', '521213', 'Honor Output Kegiatan', 119040000, 0);
INSERT INTO `emon_akun_2019` VALUES (652, '11279842', '4', 'Penerapan terbatas pembuka pintu air portabel', '521219', 'Belanja Barang Non Operasional Lainnya', 528086000, 0);
INSERT INTO `emon_akun_2019` VALUES (653, '11279842', '4', 'Penerapan terbatas pembuka pintu air portabel', '521811', 'Belanja Barang Untuk Persediaan Barang Konsumsi', 15268000, 0);
INSERT INTO `emon_akun_2019` VALUES (654, '11279842', '4', 'Penerapan terbatas pembuka pintu air portabel', '522141', 'Belanja Sewa', 42256000, 0);
INSERT INTO `emon_akun_2019` VALUES (655, '11279842', '4', 'Penerapan terbatas pembuka pintu air portabel', '522151', 'Belanja Jasa Profesi', 98400000, 0);
INSERT INTO `emon_akun_2019` VALUES (656, '11279842', '4', 'Penerapan terbatas pembuka pintu air portabel', '522191', 'Belanja Jasa Lainnya', 41300000, 0);
INSERT INTO `emon_akun_2019` VALUES (657, '11279842', '4', 'Penerapan terbatas pembuka pintu air portabel', '524111', 'Belanja perjalanan biasa', 272079000, 0);
INSERT INTO `emon_akun_2019` VALUES (658, '11279842', '4', 'Penerapan terbatas pembuka pintu air portabel', '532111', 'Belanja Modal Peralatan dan Mesin', 1026655000, 0);
INSERT INTO `emon_akun_2019` VALUES (659, '11279842', '5', 'Penerapan Teknologi Bangunan Ukur Modular di Petak Tersier Untuk Mendukung  Modernisasi Irigasi', '521211', 'Belanja Bahan', 14200000, 0);
INSERT INTO `emon_akun_2019` VALUES (660, '11279842', '5', 'Penerapan Teknologi Bangunan Ukur Modular di Petak Tersier Untuk Mendukung  Modernisasi Irigasi', '521213', 'Honor Output Kegiatan', 46400000, 0);
INSERT INTO `emon_akun_2019` VALUES (661, '11279842', '5', 'Penerapan Teknologi Bangunan Ukur Modular di Petak Tersier Untuk Mendukung  Modernisasi Irigasi', '521219', 'Belanja Barang Non Operasional Lainnya', 103858000, 0);
INSERT INTO `emon_akun_2019` VALUES (662, '11279842', '5', 'Penerapan Teknologi Bangunan Ukur Modular di Petak Tersier Untuk Mendukung  Modernisasi Irigasi', '521811', 'Belanja Barang Untuk Persediaan Barang Konsumsi', 10000000, 0);
INSERT INTO `emon_akun_2019` VALUES (663, '11279842', '5', 'Penerapan Teknologi Bangunan Ukur Modular di Petak Tersier Untuk Mendukung  Modernisasi Irigasi', '522141', 'Belanja Sewa', 67104000, 0);
INSERT INTO `emon_akun_2019` VALUES (664, '11279842', '5', 'Penerapan Teknologi Bangunan Ukur Modular di Petak Tersier Untuk Mendukung  Modernisasi Irigasi', '522151', 'Belanja Jasa Profesi', 75600000, 0);
INSERT INTO `emon_akun_2019` VALUES (665, '11279842', '5', 'Penerapan Teknologi Bangunan Ukur Modular di Petak Tersier Untuk Mendukung  Modernisasi Irigasi', '524111', 'Belanja perjalanan biasa', 185720000, 0);
INSERT INTO `emon_akun_2019` VALUES (666, '11279842', '5', 'Penerapan Teknologi Bangunan Ukur Modular di Petak Tersier Untuk Mendukung  Modernisasi Irigasi', '534121', 'Belanja Modal Irigasi', 84812000, 0);
INSERT INTO `emon_akun_2019` VALUES (667, '11279842', '6', 'Penyelenggaraan Laboratorium Balai Litbang Irigasi', '521211', 'Belanja Bahan', 5330000, 0);
INSERT INTO `emon_akun_2019` VALUES (668, '11279842', '6', 'Penyelenggaraan Laboratorium Balai Litbang Irigasi', '521213', 'Honor Output Kegiatan', 64000000, 0);
INSERT INTO `emon_akun_2019` VALUES (669, '11279842', '6', 'Penyelenggaraan Laboratorium Balai Litbang Irigasi', '521219', 'Belanja Barang Non Operasional Lainnya', 220447000, 0);
INSERT INTO `emon_akun_2019` VALUES (670, '11279842', '6', 'Penyelenggaraan Laboratorium Balai Litbang Irigasi', '521811', 'Belanja Barang Untuk Persediaan Barang Konsumsi', 10000000, 0);
INSERT INTO `emon_akun_2019` VALUES (671, '11279842', '6', 'Penyelenggaraan Laboratorium Balai Litbang Irigasi', '522141', 'Belanja Sewa', 5763000, 0);
INSERT INTO `emon_akun_2019` VALUES (672, '11279842', '6', 'Penyelenggaraan Laboratorium Balai Litbang Irigasi', '522151', 'Belanja Jasa Profesi', 8100000, 0);
INSERT INTO `emon_akun_2019` VALUES (673, '11279842', '6', 'Penyelenggaraan Laboratorium Balai Litbang Irigasi', '522191', 'Belanja Jasa Lainnya', 55000000, 0);
INSERT INTO `emon_akun_2019` VALUES (674, '11279842', '6', 'Penyelenggaraan Laboratorium Balai Litbang Irigasi', '524111', 'Belanja perjalanan biasa', 88594000, 0);
INSERT INTO `emon_akun_2019` VALUES (675, '11279842', '7', 'Evaluasi Penerapan Teknologi dan Pengelolaan Sistem Informasi Bidang Irigasi', '521211', 'Belanja Bahan', 15136000, 0);
INSERT INTO `emon_akun_2019` VALUES (676, '11279842', '7', 'Evaluasi Penerapan Teknologi dan Pengelolaan Sistem Informasi Bidang Irigasi', '521213', 'Honor Output Kegiatan', 28800000, 0);
INSERT INTO `emon_akun_2019` VALUES (677, '11279842', '7', 'Evaluasi Penerapan Teknologi dan Pengelolaan Sistem Informasi Bidang Irigasi', '521811', 'Belanja Barang Untuk Persediaan Barang Konsumsi', 15000000, 0);
INSERT INTO `emon_akun_2019` VALUES (678, '11279842', '7', 'Evaluasi Penerapan Teknologi dan Pengelolaan Sistem Informasi Bidang Irigasi', '522141', 'Belanja Sewa', 30368000, 0);
INSERT INTO `emon_akun_2019` VALUES (679, '11279842', '7', 'Evaluasi Penerapan Teknologi dan Pengelolaan Sistem Informasi Bidang Irigasi', '522151', 'Belanja Jasa Profesi', 113400000, 0);
INSERT INTO `emon_akun_2019` VALUES (680, '11279842', '7', 'Evaluasi Penerapan Teknologi dan Pengelolaan Sistem Informasi Bidang Irigasi', '524111', 'Belanja perjalanan biasa', 258472000, 0);
INSERT INTO `emon_akun_2019` VALUES (681, '11279842', '8', 'Penyusunan RKA-KL dan DIPA', '521211', 'Belanja Bahan', 4539000, 0);
INSERT INTO `emon_akun_2019` VALUES (682, '11279842', '8', 'Penyusunan RKA-KL dan DIPA', '521811', 'Belanja Barang Untuk Persediaan Barang Konsumsi', 9482000, 0);
INSERT INTO `emon_akun_2019` VALUES (683, '11279842', '8', 'Penyusunan RKA-KL dan DIPA', '524111', 'Belanja perjalanan biasa', 70979000, 0);
INSERT INTO `emon_akun_2019` VALUES (684, '11279842', '9', 'Penerbitan Jurnal dan Buku', '521211', 'Belanja Bahan', 64092000, 0);
INSERT INTO `emon_akun_2019` VALUES (685, '11279842', '9', 'Penerbitan Jurnal dan Buku', '521213', 'Honor Output Kegiatan', 42300000, 0);
INSERT INTO `emon_akun_2019` VALUES (686, '11279842', '9', 'Penerbitan Jurnal dan Buku', '521811', 'Belanja Barang Untuk Persediaan Barang Konsumsi', 9733000, 0);
INSERT INTO `emon_akun_2019` VALUES (687, '11279842', '9', 'Penerbitan Jurnal dan Buku', '522151', 'Belanja Jasa Profesi', 43200000, 0);
INSERT INTO `emon_akun_2019` VALUES (688, '11279842', '9', 'Penerbitan Jurnal dan Buku', '524111', 'Belanja perjalanan biasa', 50675000, 0);
INSERT INTO `emon_akun_2019` VALUES (689, '11279842', '10', 'Administrasi Kesatkeran', '521115', 'Honor Operasional Satuan Kerja', 128400000, 0);
INSERT INTO `emon_akun_2019` VALUES (690, '11279842', '10', 'Administrasi Kesatkeran', '521211', 'Belanja Bahan', 4605000, 0);
INSERT INTO `emon_akun_2019` VALUES (691, '11279842', '10', 'Administrasi Kesatkeran', '521213', 'Honor Output Kegiatan', 57060000, 0);
INSERT INTO `emon_akun_2019` VALUES (692, '11279842', '10', 'Administrasi Kesatkeran', '521811', 'Belanja Barang Untuk Persediaan Barang Konsumsi', 9494000, 0);
INSERT INTO `emon_akun_2019` VALUES (693, '11279842', '10', 'Administrasi Kesatkeran', '524111', 'Belanja perjalanan biasa', 226760000, 0);
INSERT INTO `emon_akun_2019` VALUES (694, '11279842', '11', 'Pembayaran Gaji dan Tunjangan', '511111', 'Belanja Gaji Pokok PNS', 1362989000, 209844900);
INSERT INTO `emon_akun_2019` VALUES (695, '11279842', '11', 'Pembayaran Gaji dan Tunjangan', '511119', 'Belanja Pembulatan Gaji PNS', 20000, 3057);
INSERT INTO `emon_akun_2019` VALUES (696, '11279842', '11', 'Pembayaran Gaji dan Tunjangan', '511121', 'Belanja Tunj. Suami/Istri PNS', 92289000, 13779260);
INSERT INTO `emon_akun_2019` VALUES (697, '11279842', '11', 'Pembayaran Gaji dan Tunjangan', '511122', 'Belanja Tunj. Anak PNS', 24668000, 3935876);
INSERT INTO `emon_akun_2019` VALUES (698, '11279842', '11', 'Pembayaran Gaji dan Tunjangan', '511123', 'Belanja Tunj. Struktural PNS', 7020000, 3600000);
INSERT INTO `emon_akun_2019` VALUES (699, '11279842', '11', 'Pembayaran Gaji dan Tunjangan', '511124', 'Belanja Tunj. Fungsional PNS', 111150000, 19300000);
INSERT INTO `emon_akun_2019` VALUES (700, '11279842', '11', 'Pembayaran Gaji dan Tunjangan', '511125', 'Belanja Tunj. PPh PNS', 11536000, 7924);
INSERT INTO `emon_akun_2019` VALUES (701, '11279842', '11', 'Pembayaran Gaji dan Tunjangan', '511126', 'Belanja Tunj. Beras PNS', 74420000, 11659620);
INSERT INTO `emon_akun_2019` VALUES (702, '11279842', '11', 'Pembayaran Gaji dan Tunjangan', '511129', 'Belanja Uang Makan PNS', 159588000, 0);
INSERT INTO `emon_akun_2019` VALUES (703, '11279842', '11', 'Pembayaran Gaji dan Tunjangan', '511151', 'Belanja Tunjangan Umum PNS', 57265000, 8070000);
INSERT INTO `emon_akun_2019` VALUES (704, '11279842', '12', 'Tunjangan Kinerja', '512411', 'Belanja pegawai (Tunjangan Khusus/Kegiatan)', 1637539000, 1837115);
INSERT INTO `emon_akun_2019` VALUES (705, '11279842', '13', 'Uang Lembur dan Uang Makan Lembur', '512211', 'Belanja uang lembur', 19470000, 0);
INSERT INTO `emon_akun_2019` VALUES (706, '11279842', '14', 'Perlengkapan Perkantoran', '521111', 'Belanja Keperluan Perkantoran', 47120000, 0);
INSERT INTO `emon_akun_2019` VALUES (707, '11279842', '14', 'Perlengkapan Perkantoran', '521113', 'Belanja Penambah Daya Tahan Tubuh', 15200000, 0);
INSERT INTO `emon_akun_2019` VALUES (708, '11279842', '15', 'Perawatan Gedung Kantor', '523111', 'Belanja Biaya Pemeliharaan Gedung dan Bangunan', 533000000, 0);
INSERT INTO `emon_akun_2019` VALUES (709, '11279842', '16', 'Perawatan Sarana dan Prasarana Gedung', '523121', 'Belanja Biaya Pemeliharaan Peralatan dan Mesin', 98990000, 0);
INSERT INTO `emon_akun_2019` VALUES (710, '11279842', '17', 'Perbaikan Peralatan Kantor', '523121', 'Belanja Biaya Pemeliharaan Peralatan dan Mesin', 40686000, 0);
INSERT INTO `emon_akun_2019` VALUES (711, '11279842', '18', 'Perawatan Kendaraan Bermotor Roda 4/6/8/10', '523121', 'Belanja Biaya Pemeliharaan Peralatan dan Mesin', 166750000, 0);
INSERT INTO `emon_akun_2019` VALUES (712, '11279842', '19', 'Langganan Daya dan Jasa', '522111', 'Belanja Langganan Listrik', 256144000, 20491109);
INSERT INTO `emon_akun_2019` VALUES (713, '11279842', '19', 'Langganan Daya dan Jasa', '522112', 'Belanja Langganan Telepon', 29256000, 0);
INSERT INTO `emon_akun_2019` VALUES (714, '11279842', '19', 'Langganan Daya dan Jasa', '522113', 'Belanja Langganan Air', 600000, 0);
INSERT INTO `emon_akun_2019` VALUES (715, '11279842', '19', 'Langganan Daya dan Jasa', '522119', 'Belanja Langganan Daya dan Jasa Lainnya', 114000000, 9356000);
INSERT INTO `emon_akun_2019` VALUES (716, '11279842', '20', 'Pengiriman Pos dan Giro', '521114', 'Belanja pengiriman surat dinas pos pusat', 7200000, 0);
INSERT INTO `emon_akun_2019` VALUES (717, '11279842', '21', 'Satpam, Pengemudi, Petugas Kebersihan, dan Pramubakti', '521111', 'Belanja Keperluan Perkantoran', 1481078000, 0);
INSERT INTO `emon_akun_2019` VALUES (718, '11279842', '21', 'Satpam, Pengemudi, Petugas Kebersihan, dan Pramubakti', '521119', 'Belanja Barang Operasional Lainnya', 752050000, 60566000);
INSERT INTO `emon_akun_2019` VALUES (719, '11279842', '22', 'Operasional Perkantoran dan Pimpinan', '524111', 'Belanja perjalanan biasa', 103250000, 0);
INSERT INTO `emon_akun_2019` VALUES (720, '11279842', '23', 'Pakaian Dinas Pegawai', '521219', 'Belanja Barang Non Operasional Lainnya', 17081000, 0);
INSERT INTO `emon_akun_2019` VALUES (721, '11279842', '24', 'Penyelenggaraan Perpustakaan', '521219', 'Belanja Barang Non Operasional Lainnya', 20000000, 0);
INSERT INTO `emon_akun_2019` VALUES (722, '11279842', '24', 'Penyelenggaraan Perpustakaan', '521811', 'Belanja Barang Untuk Persediaan Barang Konsumsi', 4502000, 0);
INSERT INTO `emon_akun_2019` VALUES (723, '11279842', '24', 'Penyelenggaraan Perpustakaan', '524111', 'Belanja perjalanan biasa', 20264000, 0);
INSERT INTO `emon_akun_2019` VALUES (724, '11279860', '1', 'Perawatan Sarana dan Prasarana Gedung', '523121', 'Belanja Biaya Pemeliharaan Peralatan dan Mesin', 114125000, 0);
INSERT INTO `emon_akun_2019` VALUES (725, '11279860', '2', 'Konsep Pedoman (R0) Ring Net Barrier untuk Pengendalian Aliran Debris', '521211', 'Belanja Bahan', 19720000, 0);
INSERT INTO `emon_akun_2019` VALUES (726, '11279860', '2', 'Konsep Pedoman (R0) Ring Net Barrier untuk Pengendalian Aliran Debris', '521213', 'Honor Output Kegiatan', 50000000, 0);
INSERT INTO `emon_akun_2019` VALUES (727, '11279860', '2', 'Konsep Pedoman (R0) Ring Net Barrier untuk Pengendalian Aliran Debris', '521219', 'Belanja Barang Non Operasional Lainnya', 4790000, 0);
INSERT INTO `emon_akun_2019` VALUES (728, '11279860', '2', 'Konsep Pedoman (R0) Ring Net Barrier untuk Pengendalian Aliran Debris', '521811', 'Belanja Barang Untuk Persediaan Barang Konsumsi', 15000000, 0);
INSERT INTO `emon_akun_2019` VALUES (729, '11279860', '2', 'Konsep Pedoman (R0) Ring Net Barrier untuk Pengendalian Aliran Debris', '521821', 'Belanja Barang Persediaan Bahan Baku', 40000000, 0);
INSERT INTO `emon_akun_2019` VALUES (730, '11279860', '2', 'Konsep Pedoman (R0) Ring Net Barrier untuk Pengendalian Aliran Debris', '522141', 'Belanja Sewa', 35000000, 0);
INSERT INTO `emon_akun_2019` VALUES (731, '11279860', '2', 'Konsep Pedoman (R0) Ring Net Barrier untuk Pengendalian Aliran Debris', '522151', 'Belanja Jasa Profesi', 75600000, 0);
INSERT INTO `emon_akun_2019` VALUES (732, '11279860', '2', 'Konsep Pedoman (R0) Ring Net Barrier untuk Pengendalian Aliran Debris', '524111', 'Belanja perjalanan biasa', 294308000, 0);
INSERT INTO `emon_akun_2019` VALUES (733, '11279860', '3', 'Konsep Pedoman (R0) Drainase Bawah permukaan Untuk Pengendalian Stabilitas Lereng', '521211', 'Belanja Bahan', 20195000, 0);
INSERT INTO `emon_akun_2019` VALUES (734, '11279860', '3', 'Konsep Pedoman (R0) Drainase Bawah permukaan Untuk Pengendalian Stabilitas Lereng', '521811', 'Belanja Barang Untuk Persediaan Barang Konsumsi', 10000000, 0);
INSERT INTO `emon_akun_2019` VALUES (735, '11279860', '3', 'Konsep Pedoman (R0) Drainase Bawah permukaan Untuk Pengendalian Stabilitas Lereng', '522141', 'Belanja Sewa', 8750000, 0);
INSERT INTO `emon_akun_2019` VALUES (736, '11279860', '3', 'Konsep Pedoman (R0) Drainase Bawah permukaan Untuk Pengendalian Stabilitas Lereng', '522151', 'Belanja Jasa Profesi', 64800000, 0);
INSERT INTO `emon_akun_2019` VALUES (737, '11279860', '3', 'Konsep Pedoman (R0) Drainase Bawah permukaan Untuk Pengendalian Stabilitas Lereng', '524111', 'Belanja perjalanan biasa', 177012000, 0);
INSERT INTO `emon_akun_2019` VALUES (738, '11279860', '4', 'Penyelenggaraan Laboratorium Balai Litbang Sabo', '521211', 'Belanja Bahan', 16960000, 0);
INSERT INTO `emon_akun_2019` VALUES (739, '11279860', '4', 'Penyelenggaraan Laboratorium Balai Litbang Sabo', '521213', 'Honor Output Kegiatan', 60000000, 0);
INSERT INTO `emon_akun_2019` VALUES (740, '11279860', '4', 'Penyelenggaraan Laboratorium Balai Litbang Sabo', '521219', 'Belanja Barang Non Operasional Lainnya', 30000000, 0);
INSERT INTO `emon_akun_2019` VALUES (741, '11279860', '4', 'Penyelenggaraan Laboratorium Balai Litbang Sabo', '521811', 'Belanja Barang Untuk Persediaan Barang Konsumsi', 15000000, 0);
INSERT INTO `emon_akun_2019` VALUES (742, '11279860', '4', 'Penyelenggaraan Laboratorium Balai Litbang Sabo', '521821', 'Belanja Barang Persediaan Bahan Baku', 60564000, 0);
INSERT INTO `emon_akun_2019` VALUES (743, '11279860', '4', 'Penyelenggaraan Laboratorium Balai Litbang Sabo', '522141', 'Belanja Sewa', 17154000, 0);
INSERT INTO `emon_akun_2019` VALUES (744, '11279860', '4', 'Penyelenggaraan Laboratorium Balai Litbang Sabo', '522151', 'Belanja Jasa Profesi', 67500000, 0);
INSERT INTO `emon_akun_2019` VALUES (745, '11279860', '4', 'Penyelenggaraan Laboratorium Balai Litbang Sabo', '524111', 'Belanja perjalanan biasa', 212428000, 0);
INSERT INTO `emon_akun_2019` VALUES (746, '11279860', '5', 'Evaluasi Penerapan Teknologi dan Pengelolaan Sistem Informasi Bidang Sabo', '521211', 'Belanja Bahan', 27614000, 0);
INSERT INTO `emon_akun_2019` VALUES (747, '11279860', '5', 'Evaluasi Penerapan Teknologi dan Pengelolaan Sistem Informasi Bidang Sabo', '521213', 'Honor Output Kegiatan', 206040000, 0);
INSERT INTO `emon_akun_2019` VALUES (748, '11279860', '5', 'Evaluasi Penerapan Teknologi dan Pengelolaan Sistem Informasi Bidang Sabo', '521219', 'Belanja Barang Non Operasional Lainnya', 209979000, 0);
INSERT INTO `emon_akun_2019` VALUES (749, '11279860', '5', 'Evaluasi Penerapan Teknologi dan Pengelolaan Sistem Informasi Bidang Sabo', '521811', 'Belanja Barang Untuk Persediaan Barang Konsumsi', 15000000, 0);
INSERT INTO `emon_akun_2019` VALUES (750, '11279860', '5', 'Evaluasi Penerapan Teknologi dan Pengelolaan Sistem Informasi Bidang Sabo', '522141', 'Belanja Sewa', 47924000, 0);
INSERT INTO `emon_akun_2019` VALUES (751, '11279860', '5', 'Evaluasi Penerapan Teknologi dan Pengelolaan Sistem Informasi Bidang Sabo', '522151', 'Belanja Jasa Profesi', 103500000, 0);
INSERT INTO `emon_akun_2019` VALUES (752, '11279860', '5', 'Evaluasi Penerapan Teknologi dan Pengelolaan Sistem Informasi Bidang Sabo', '524111', 'Belanja perjalanan biasa', 668493000, 0);
INSERT INTO `emon_akun_2019` VALUES (753, '11279860', '6', 'Pengadaan Perlengkapan Sarana Gedung', '532111', 'Belanja Modal Peralatan dan Mesin', 147310000, 0);
INSERT INTO `emon_akun_2019` VALUES (754, '11279860', '7', 'Penyusunan RKA-KL dan DIPA', '521211', 'Belanja Bahan', 3000000, 0);
INSERT INTO `emon_akun_2019` VALUES (755, '11279860', '7', 'Penyusunan RKA-KL dan DIPA', '521811', 'Belanja Barang Untuk Persediaan Barang Konsumsi', 9954000, 0);
INSERT INTO `emon_akun_2019` VALUES (756, '11279860', '7', 'Penyusunan RKA-KL dan DIPA', '524111', 'Belanja perjalanan biasa', 100762000, 0);
INSERT INTO `emon_akun_2019` VALUES (757, '11279860', '8', 'Administrasi Kesatkeran', '521115', 'Honor Operasional Satuan Kerja', 148800000, 0);
INSERT INTO `emon_akun_2019` VALUES (758, '11279860', '8', 'Administrasi Kesatkeran', '521211', 'Belanja Bahan', 22044000, 0);
INSERT INTO `emon_akun_2019` VALUES (759, '11279860', '8', 'Administrasi Kesatkeran', '521213', 'Honor Output Kegiatan', 21600000, 0);
INSERT INTO `emon_akun_2019` VALUES (760, '11279860', '8', 'Administrasi Kesatkeran', '521811', 'Belanja Barang Untuk Persediaan Barang Konsumsi', 29708000, 0);
INSERT INTO `emon_akun_2019` VALUES (761, '11279860', '8', 'Administrasi Kesatkeran', '524111', 'Belanja perjalanan biasa', 516517000, 0);
INSERT INTO `emon_akun_2019` VALUES (762, '11279860', '8', 'Administrasi Kesatkeran', '524113', 'Belanja Perjalanan Dinas Dalam Kota', 17400000, 0);
INSERT INTO `emon_akun_2019` VALUES (763, '11279860', '9', 'Pengadaan Buku Perpustakaan', '536111', 'Belanja Modal Lainnya', 27985000, 0);
INSERT INTO `emon_akun_2019` VALUES (764, '11279860', '11', 'Uang Lembur dan Uang Makan Lembur', '512211', 'Belanja uang lembur', 15640000, 0);
INSERT INTO `emon_akun_2019` VALUES (765, '11279860', '12', 'Perlengkapan Perkantoran', '521111', 'Belanja Keperluan Perkantoran', 98800000, 0);
INSERT INTO `emon_akun_2019` VALUES (766, '11279860', '13', 'Perawatan Gedung Kantor', '523111', 'Belanja Biaya Pemeliharaan Gedung dan Bangunan', 557761000, 0);
INSERT INTO `emon_akun_2019` VALUES (767, '11279860', '14', 'Perbaikan Peralatan  Kantor', '523121', 'Belanja Biaya Pemeliharaan Peralatan dan Mesin', 145159000, 0);
INSERT INTO `emon_akun_2019` VALUES (768, '11279860', '15', 'Perawatan Kendaraan Bermotor Roda 4/6/8/10', '523121', 'Belanja Biaya Pemeliharaan Peralatan dan Mesin', 75000000, 0);
INSERT INTO `emon_akun_2019` VALUES (769, '11279860', '16', 'Perawatan Kendaraan Bermotor Roda 2', '523121', 'Belanja Biaya Pemeliharaan Peralatan dan Mesin', 18000000, 0);
INSERT INTO `emon_akun_2019` VALUES (770, '11279860', '17', 'Layanan daya dan Jasa', '521111', 'Belanja Keperluan Perkantoran', 264000000, 0);
INSERT INTO `emon_akun_2019` VALUES (771, '11279860', '17', 'Layanan daya dan Jasa', '522111', 'Belanja Langganan Listrik', 264000000, 37563546);
INSERT INTO `emon_akun_2019` VALUES (772, '11279860', '17', 'Layanan daya dan Jasa', '522112', 'Belanja Langganan Telepon', 36000000, 3295241);
INSERT INTO `emon_akun_2019` VALUES (773, '11279860', '18', 'Pengiriman Pos dan Giro', '521114', 'Belanja pengiriman surat dinas pos pusat', 5089000, 0);
INSERT INTO `emon_akun_2019` VALUES (774, '11279860', '19', 'Satpam, Pengemudi, Petugas Kebersihan dan Pramubakti', '521111', 'Belanja Keperluan Perkantoran', 364637000, 28049000);
INSERT INTO `emon_akun_2019` VALUES (775, '11279860', '19', 'Satpam, Pengemudi, Petugas Kebersihan dan Pramubakti', '521119', 'Belanja Barang Operasional Lainnya', 745550000, 57350000);
INSERT INTO `emon_akun_2019` VALUES (776, '11279860', '20', 'Operasional Perkantoran dan Pimpinan', '521111', 'Belanja Keperluan Perkantoran', 25982000, 0);
INSERT INTO `emon_akun_2019` VALUES (777, '11279860', '20', 'Operasional Perkantoran dan Pimpinan', '524111', 'Belanja perjalanan biasa', 104200000, 0);
INSERT INTO `emon_akun_2019` VALUES (778, '11279860', '21', 'Pakaian Dinas Pegawai', '521219', 'Belanja Barang Non Operasional Lainnya', 54477000, 0);
INSERT INTO `emon_akun_2019` VALUES (779, '11279860', '22', 'Penyelenggaraan Perpustakaan', '521211', 'Belanja Bahan', 4050000, 0);
INSERT INTO `emon_akun_2019` VALUES (780, '11279860', '22', 'Penyelenggaraan Perpustakaan', '521219', 'Belanja Barang Non Operasional Lainnya', 15000000, 0);
INSERT INTO `emon_akun_2019` VALUES (781, '11279860', '22', 'Penyelenggaraan Perpustakaan', '521811', 'Belanja Barang Untuk Persediaan Barang Konsumsi', 8180000, 0);
INSERT INTO `emon_akun_2019` VALUES (782, '11279860', '22', 'Penyelenggaraan Perpustakaan', '524111', 'Belanja perjalanan biasa', 32484000, 0);
INSERT INTO `emon_akun_2019` VALUES (783, '11279860', '23', 'Konsep Pedoman (R0) Teknologi Sabodam Modular', '521211', 'Belanja Bahan', 36774000, 0);
INSERT INTO `emon_akun_2019` VALUES (784, '11279860', '23', 'Konsep Pedoman (R0) Teknologi Sabodam Modular', '521213', 'Honor Output Kegiatan', 72000000, 0);
INSERT INTO `emon_akun_2019` VALUES (785, '11279860', '23', 'Konsep Pedoman (R0) Teknologi Sabodam Modular', '521219', 'Belanja Barang Non Operasional Lainnya', 4790000, 0);
INSERT INTO `emon_akun_2019` VALUES (786, '11279860', '23', 'Konsep Pedoman (R0) Teknologi Sabodam Modular', '521811', 'Belanja Barang Untuk Persediaan Barang Konsumsi', 14800000, 0);
INSERT INTO `emon_akun_2019` VALUES (787, '11279860', '23', 'Konsep Pedoman (R0) Teknologi Sabodam Modular', '522141', 'Belanja Sewa', 63000000, 0);
INSERT INTO `emon_akun_2019` VALUES (788, '11279860', '23', 'Konsep Pedoman (R0) Teknologi Sabodam Modular', '522151', 'Belanja Jasa Profesi', 64800000, 0);
INSERT INTO `emon_akun_2019` VALUES (789, '11279860', '23', 'Konsep Pedoman (R0) Teknologi Sabodam Modular', '524111', 'Belanja perjalanan biasa', 244116000, 0);
INSERT INTO `emon_akun_2019` VALUES (790, '11279860', '24', 'Drainase Bawah Permukaan Untuk Pengendalian Stabilitas Lereng', '521211', 'Belanja Bahan', 20195000, 0);
INSERT INTO `emon_akun_2019` VALUES (791, '11279860', '24', 'Drainase Bawah Permukaan Untuk Pengendalian Stabilitas Lereng', '521213', 'Honor Output Kegiatan', 53200000, 0);
INSERT INTO `emon_akun_2019` VALUES (792, '11279860', '24', 'Drainase Bawah Permukaan Untuk Pengendalian Stabilitas Lereng', '521219', 'Belanja Barang Non Operasional Lainnya', 24525000, 0);
INSERT INTO `emon_akun_2019` VALUES (793, '11279860', '24', 'Drainase Bawah Permukaan Untuk Pengendalian Stabilitas Lereng', '521811', 'Belanja Barang Untuk Persediaan Barang Konsumsi', 10000000, 0);
INSERT INTO `emon_akun_2019` VALUES (794, '11279860', '24', 'Drainase Bawah Permukaan Untuk Pengendalian Stabilitas Lereng', '522141', 'Belanja Sewa', 43750000, 0);
INSERT INTO `emon_akun_2019` VALUES (795, '11279860', '24', 'Drainase Bawah Permukaan Untuk Pengendalian Stabilitas Lereng', '522151', 'Belanja Jasa Profesi', 37800000, 0);
INSERT INTO `emon_akun_2019` VALUES (796, '11279860', '24', 'Drainase Bawah Permukaan Untuk Pengendalian Stabilitas Lereng', '522191', 'Belanja Jasa Lainnya', 49776000, 0);
INSERT INTO `emon_akun_2019` VALUES (797, '11279860', '24', 'Drainase Bawah Permukaan Untuk Pengendalian Stabilitas Lereng', '524111', 'Belanja perjalanan biasa', 207000000, 0);
INSERT INTO `emon_akun_2019` VALUES (798, '11279860', '24', 'Drainase Bawah Permukaan Untuk Pengendalian Stabilitas Lereng', '526112', 'Belanja Peralatan dan Mesin untuk diserahkan kepada masyarakat/Pemda', 785350000, 0);
INSERT INTO `emon_akun_2019` VALUES (799, '11279860', '25', 'Tunjangan Kinerja', '512411', 'Belanja pegawai (Tunjangan Khusus/Kegiatan)', 2496376000, 0);
INSERT INTO `emon_akun_2019` VALUES (800, '11279860', '26', 'Pembayaran Gaji dan Tunjangan', '511111', 'Belanja Gaji Pokok PNS', 2252646000, 521769100);
INSERT INTO `emon_akun_2019` VALUES (801, '11279860', '26', 'Pembayaran Gaji dan Tunjangan', '511119', 'Belanja Pembulatan Gaji PNS', 35000, 6759);
INSERT INTO `emon_akun_2019` VALUES (802, '11279860', '26', 'Pembayaran Gaji dan Tunjangan', '511121', 'Belanja Tunj. Suami/Istri PNS', 186752000, 43225690);
INSERT INTO `emon_akun_2019` VALUES (803, '11279860', '26', 'Pembayaran Gaji dan Tunjangan', '511122', 'Belanja Tunj. Anak PNS', 56365000, 12717140);
INSERT INTO `emon_akun_2019` VALUES (804, '11279860', '26', 'Pembayaran Gaji dan Tunjangan', '511123', 'Belanja Tunj. Struktural PNS', 37440000, 8640000);
INSERT INTO `emon_akun_2019` VALUES (805, '11279860', '26', 'Pembayaran Gaji dan Tunjangan', '511124', 'Belanja Tunj. Fungsional PNS', 158275000, 51925000);
INSERT INTO `emon_akun_2019` VALUES (806, '11279860', '26', 'Pembayaran Gaji dan Tunjangan', '511125', 'Belanja Tunj. PPh PNS', 19452000, 836997);
INSERT INTO `emon_akun_2019` VALUES (807, '11279860', '26', 'Pembayaran Gaji dan Tunjangan', '511126', 'Belanja Tunj. Beras PNS', 153490000, 35268540);
INSERT INTO `emon_akun_2019` VALUES (808, '11279860', '26', 'Pembayaran Gaji dan Tunjangan', '511129', 'Belanja Uang Makan PNS', 492060000, 32380000);
INSERT INTO `emon_akun_2019` VALUES (809, '11279860', '26', 'Pembayaran Gaji dan Tunjangan', '511151', 'Belanja Tunjangan Umum PNS', 99320000, 22180000);
INSERT INTO `emon_akun_2019` VALUES (810, '11576981', '1', 'Prototipe Peredam Gelombang Menggunakan Susunan Tiang', '521211', 'Belanja Bahan', 9930000, 0);
INSERT INTO `emon_akun_2019` VALUES (811, '11576981', '1', 'Prototipe Peredam Gelombang Menggunakan Susunan Tiang', '521213', 'Honor Output Kegiatan', 27740000, 0);
INSERT INTO `emon_akun_2019` VALUES (812, '11576981', '1', 'Prototipe Peredam Gelombang Menggunakan Susunan Tiang', '521219', 'Belanja Barang Non Operasional Lainnya', 49000000, 0);
INSERT INTO `emon_akun_2019` VALUES (813, '11576981', '1', 'Prototipe Peredam Gelombang Menggunakan Susunan Tiang', '521811', 'Belanja Barang Untuk Persediaan Barang Konsumsi', 17407000, 0);
INSERT INTO `emon_akun_2019` VALUES (814, '11576981', '1', 'Prototipe Peredam Gelombang Menggunakan Susunan Tiang', '521821', 'Belanja Barang Persediaan Bahan Baku', 30000000, 0);
INSERT INTO `emon_akun_2019` VALUES (815, '11576981', '1', 'Prototipe Peredam Gelombang Menggunakan Susunan Tiang', '522131', 'Belanja Jasa Konsultan', 340000000, 0);
INSERT INTO `emon_akun_2019` VALUES (816, '11576981', '1', 'Prototipe Peredam Gelombang Menggunakan Susunan Tiang', '522141', 'Belanja Sewa', 21573000, 0);
INSERT INTO `emon_akun_2019` VALUES (817, '11576981', '1', 'Prototipe Peredam Gelombang Menggunakan Susunan Tiang', '522151', 'Belanja Jasa Profesi', 31200000, 0);
INSERT INTO `emon_akun_2019` VALUES (818, '11576981', '1', 'Prototipe Peredam Gelombang Menggunakan Susunan Tiang', '524111', 'Belanja perjalanan biasa', 353446000, 0);
INSERT INTO `emon_akun_2019` VALUES (819, '11576981', '1', 'Prototipe Peredam Gelombang Menggunakan Susunan Tiang', '526311', 'Belanja Barang Lainnya untuk diserahkan kepada masyarakat/Pemda', 15000000000, 0);
INSERT INTO `emon_akun_2019` VALUES (820, '11576981', '2', 'Efek Propagasi Gelombang Tsunami Terhadap Tanggul Laut NCICD dari Aktifitas Lempeng Tektonik', '521211', 'Belanja Bahan', 20440000, 0);
INSERT INTO `emon_akun_2019` VALUES (821, '11576981', '2', 'Efek Propagasi Gelombang Tsunami Terhadap Tanggul Laut NCICD dari Aktifitas Lempeng Tektonik', '521213', 'Honor Output Kegiatan', 19200000, 0);
INSERT INTO `emon_akun_2019` VALUES (822, '11576981', '2', 'Efek Propagasi Gelombang Tsunami Terhadap Tanggul Laut NCICD dari Aktifitas Lempeng Tektonik', '521811', 'Belanja Barang Untuk Persediaan Barang Konsumsi', 25000000, 0);
INSERT INTO `emon_akun_2019` VALUES (823, '11576981', '2', 'Efek Propagasi Gelombang Tsunami Terhadap Tanggul Laut NCICD dari Aktifitas Lempeng Tektonik', '522141', 'Belanja Sewa', 35000000, 0);
INSERT INTO `emon_akun_2019` VALUES (824, '11576981', '2', 'Efek Propagasi Gelombang Tsunami Terhadap Tanggul Laut NCICD dari Aktifitas Lempeng Tektonik', '522151', 'Belanja Jasa Profesi', 102400000, 5400000);
INSERT INTO `emon_akun_2019` VALUES (825, '11576981', '2', 'Efek Propagasi Gelombang Tsunami Terhadap Tanggul Laut NCICD dari Aktifitas Lempeng Tektonik', '524111', 'Belanja perjalanan biasa', 412412000, 16224000);
INSERT INTO `emon_akun_2019` VALUES (826, '11576981', '3', 'Penyelenggaraan Laboratorium Balai Litbang Pantai', '521211', 'Belanja Bahan', 9500000, 0);
INSERT INTO `emon_akun_2019` VALUES (827, '11576981', '3', 'Penyelenggaraan Laboratorium Balai Litbang Pantai', '521213', 'Honor Output Kegiatan', 86400000, 0);
INSERT INTO `emon_akun_2019` VALUES (828, '11576981', '3', 'Penyelenggaraan Laboratorium Balai Litbang Pantai', '521811', 'Belanja Barang Untuk Persediaan Barang Konsumsi', 7260000, 0);
INSERT INTO `emon_akun_2019` VALUES (829, '11576981', '3', 'Penyelenggaraan Laboratorium Balai Litbang Pantai', '521821', 'Belanja Barang Persediaan Bahan Baku', 29850000, 0);
INSERT INTO `emon_akun_2019` VALUES (830, '11576981', '3', 'Penyelenggaraan Laboratorium Balai Litbang Pantai', '522151', 'Belanja Jasa Profesi', 21600000, 0);
INSERT INTO `emon_akun_2019` VALUES (831, '11576981', '3', 'Penyelenggaraan Laboratorium Balai Litbang Pantai', '523121', 'Belanja Biaya Pemeliharaan Peralatan dan Mesin', 104921000, 0);
INSERT INTO `emon_akun_2019` VALUES (832, '11576981', '3', 'Penyelenggaraan Laboratorium Balai Litbang Pantai', '524111', 'Belanja perjalanan biasa', 266866000, 0);
INSERT INTO `emon_akun_2019` VALUES (833, '11576981', '4', 'Evaluasi Penerapan Teknologi serta Pengelolaan Sistem Informasi Bidang Pantai', '521211', 'Belanja Bahan', 14330000, 0);
INSERT INTO `emon_akun_2019` VALUES (834, '11576981', '4', 'Evaluasi Penerapan Teknologi serta Pengelolaan Sistem Informasi Bidang Pantai', '521213', 'Honor Output Kegiatan', 38400000, 0);
INSERT INTO `emon_akun_2019` VALUES (835, '11576981', '4', 'Evaluasi Penerapan Teknologi serta Pengelolaan Sistem Informasi Bidang Pantai', '521811', 'Belanja Barang Untuk Persediaan Barang Konsumsi', 22382000, 0);
INSERT INTO `emon_akun_2019` VALUES (836, '11576981', '4', 'Evaluasi Penerapan Teknologi serta Pengelolaan Sistem Informasi Bidang Pantai', '521821', 'Belanja Barang Persediaan Bahan Baku', 35000000, 0);
INSERT INTO `emon_akun_2019` VALUES (837, '11576981', '4', 'Evaluasi Penerapan Teknologi serta Pengelolaan Sistem Informasi Bidang Pantai', '522141', 'Belanja Sewa', 28710000, 0);
INSERT INTO `emon_akun_2019` VALUES (838, '11576981', '4', 'Evaluasi Penerapan Teknologi serta Pengelolaan Sistem Informasi Bidang Pantai', '522151', 'Belanja Jasa Profesi', 28800000, 0);
INSERT INTO `emon_akun_2019` VALUES (839, '11576981', '4', 'Evaluasi Penerapan Teknologi serta Pengelolaan Sistem Informasi Bidang Pantai', '523121', 'Belanja Biaya Pemeliharaan Peralatan dan Mesin', 75000000, 0);
INSERT INTO `emon_akun_2019` VALUES (840, '11576981', '4', 'Evaluasi Penerapan Teknologi serta Pengelolaan Sistem Informasi Bidang Pantai', '524111', 'Belanja perjalanan biasa', 478360000, 0);
INSERT INTO `emon_akun_2019` VALUES (841, '11576981', '5', 'Penyusunan RKA-KL dan DIPA Balai Litbang Pantai', '521211', 'Belanja Bahan', 6064000, 0);
INSERT INTO `emon_akun_2019` VALUES (842, '11576981', '5', 'Penyusunan RKA-KL dan DIPA Balai Litbang Pantai', '521811', 'Belanja Barang Untuk Persediaan Barang Konsumsi', 13500000, 0);
INSERT INTO `emon_akun_2019` VALUES (843, '11576981', '5', 'Penyusunan RKA-KL dan DIPA Balai Litbang Pantai', '524111', 'Belanja perjalanan biasa', 115436000, 0);
INSERT INTO `emon_akun_2019` VALUES (844, '11576981', '6', 'Administrasi Kesatkeran', '521115', 'Honor Operasional Satuan Kerja', 159960000, 0);
INSERT INTO `emon_akun_2019` VALUES (845, '11576981', '6', 'Administrasi Kesatkeran', '521211', 'Belanja Bahan', 22444000, 0);
INSERT INTO `emon_akun_2019` VALUES (846, '11576981', '6', 'Administrasi Kesatkeran', '521213', 'Honor Output Kegiatan', 8400000, 0);
INSERT INTO `emon_akun_2019` VALUES (847, '11576981', '6', 'Administrasi Kesatkeran', '521811', 'Belanja Barang Untuk Persediaan Barang Konsumsi', 25000000, 0);
INSERT INTO `emon_akun_2019` VALUES (848, '11576981', '6', 'Administrasi Kesatkeran', '522151', 'Belanja Jasa Profesi', 9000000, 0);
INSERT INTO `emon_akun_2019` VALUES (849, '11576981', '6', 'Administrasi Kesatkeran', '524111', 'Belanja perjalanan biasa', 380152000, 20636259);
INSERT INTO `emon_akun_2019` VALUES (850, '11576981', '7', 'Pembayaran Gaji dan Tunjangan', '511111', 'Belanja Gaji Pokok PNS', 464741000, 81788300);
INSERT INTO `emon_akun_2019` VALUES (851, '11576981', '7', 'Pembayaran Gaji dan Tunjangan', '511119', 'Belanja Pembulatan Gaji PNS', 8000, 974);
INSERT INTO `emon_akun_2019` VALUES (852, '11576981', '7', 'Pembayaran Gaji dan Tunjangan', '511121', 'Belanja Tunj. Suami/Istri PNS', 39435000, 7555480);
INSERT INTO `emon_akun_2019` VALUES (853, '11576981', '7', 'Pembayaran Gaji dan Tunjangan', '511122', 'Belanja Tunj. Anak PNS', 7289000, 1499396);
INSERT INTO `emon_akun_2019` VALUES (854, '11576981', '7', 'Pembayaran Gaji dan Tunjangan', '511123', 'Belanja Tunj. Struktural PNS', 16380000, 4680000);
INSERT INTO `emon_akun_2019` VALUES (855, '11576981', '7', 'Pembayaran Gaji dan Tunjangan', '511124', 'Belanja Tunj. Fungsional PNS', 127400000, 16100000);
INSERT INTO `emon_akun_2019` VALUES (856, '11576981', '7', 'Pembayaran Gaji dan Tunjangan', '511125', 'Belanja Tunj. PPh PNS', 11897000, 497540);
INSERT INTO `emon_akun_2019` VALUES (857, '11576981', '7', 'Pembayaran Gaji dan Tunjangan', '511126', 'Belanja Tunj. Beras PNS', 28838000, 5286660);
INSERT INTO `emon_akun_2019` VALUES (858, '11576981', '7', 'Pembayaran Gaji dan Tunjangan', '511129', 'Belanja Uang Makan PNS', 100881000, 0);
INSERT INTO `emon_akun_2019` VALUES (859, '11576981', '7', 'Pembayaran Gaji dan Tunjangan', '511151', 'Belanja Tunjangan Umum PNS', 12025000, 1850000);
INSERT INTO `emon_akun_2019` VALUES (860, '11576981', '8', 'Tunjangan Kinerja', '512411', 'Belanja pegawai (Tunjangan Khusus/Kegiatan)', 873245000, 0);
INSERT INTO `emon_akun_2019` VALUES (861, '11576981', '9', 'Uang Makan dan Lembur', '512211', 'Belanja uang lembur', 11010000, 0);
INSERT INTO `emon_akun_2019` VALUES (862, '11576981', '10', 'Perlengkapan Perkantoran', '521111', 'Belanja Keperluan Perkantoran', 61290000, 0);
INSERT INTO `emon_akun_2019` VALUES (863, '11576981', '11', 'Perawatan Gedung Kantor', '523111', 'Belanja Biaya Pemeliharaan Gedung dan Bangunan', 608011000, 0);
INSERT INTO `emon_akun_2019` VALUES (864, '11576981', '12', 'Perawatan Sarana dan Prasarana Gedung', '523121', 'Belanja Biaya Pemeliharaan Peralatan dan Mesin', 130000000, 0);
INSERT INTO `emon_akun_2019` VALUES (865, '11576981', '13', 'Perbaikan Peralatan Kantor', '523121', 'Belanja Biaya Pemeliharaan Peralatan dan Mesin', 75160000, 0);
INSERT INTO `emon_akun_2019` VALUES (866, '11576981', '14', 'Perawatan Kendaraan Bermotor Roda 4/6/8/10', '523121', 'Belanja Biaya Pemeliharaan Peralatan dan Mesin', 140840000, 0);
INSERT INTO `emon_akun_2019` VALUES (867, '11576981', '15', 'Langganan Daya dan Jasa', '521111', 'Belanja Keperluan Perkantoran', 324000000, 0);
INSERT INTO `emon_akun_2019` VALUES (868, '11576981', '15', 'Langganan Daya dan Jasa', '522111', 'Belanja Langganan Listrik', 400347000, 52405634);
INSERT INTO `emon_akun_2019` VALUES (869, '11576981', '15', 'Langganan Daya dan Jasa', '522112', 'Belanja Langganan Telepon', 28800000, 0);
INSERT INTO `emon_akun_2019` VALUES (870, '11576981', '15', 'Langganan Daya dan Jasa', '522113', 'Belanja Langganan Air', 30000000, 0);
INSERT INTO `emon_akun_2019` VALUES (871, '11576981', '16', 'Pengiriman Pos dan Giro', '522121', 'Belanja Jasa Pos dan Giro', 4800000, 0);
INSERT INTO `emon_akun_2019` VALUES (872, '11576981', '17', 'Satpam, Pengemudi, Petugas Kebersihan, dan Pramubakti', '521111', 'Belanja Keperluan Perkantoran', 725799000, 57597000);
INSERT INTO `emon_akun_2019` VALUES (873, '11576981', '17', 'Satpam, Pengemudi, Petugas Kebersihan, dan Pramubakti', '521119', 'Belanja Barang Operasional Lainnya', 801645000, 61665000);
INSERT INTO `emon_akun_2019` VALUES (874, '11576981', '18', 'Pakaian Dinas Pegawai', '521219', 'Belanja Barang Non Operasional Lainnya', 39210000, 0);
INSERT INTO `emon_akun_2019` VALUES (875, '11622323', '1', 'Satpam, Pengemudi, Petugas Kebersihan, Dokter dan Non PNS', '521111', 'Belanja Keperluan Perkantoran', 3800603000, 64300000);
INSERT INTO `emon_akun_2019` VALUES (876, '11622323', '1', 'Satpam, Pengemudi, Petugas Kebersihan, Dokter dan Non PNS', '521119', 'Belanja Barang Operasional Lainnya', 4651400000, 515283000);
INSERT INTO `emon_akun_2019` VALUES (877, '11622323', '2', 'Konsep Pedoman (R0) Pembuatan Indeks Kekeringan Hidrologi', '521211', 'Belanja Bahan', 57230000, 0);
INSERT INTO `emon_akun_2019` VALUES (878, '11622323', '2', 'Konsep Pedoman (R0) Pembuatan Indeks Kekeringan Hidrologi', '521811', 'Belanja Barang Untuk Persediaan Barang Konsumsi', 10000000, 0);
INSERT INTO `emon_akun_2019` VALUES (879, '11622323', '2', 'Konsep Pedoman (R0) Pembuatan Indeks Kekeringan Hidrologi', '522141', 'Belanja Sewa', 25696000, 0);
INSERT INTO `emon_akun_2019` VALUES (880, '11622323', '2', 'Konsep Pedoman (R0) Pembuatan Indeks Kekeringan Hidrologi', '522151', 'Belanja Jasa Profesi', 73200000, 0);
INSERT INTO `emon_akun_2019` VALUES (881, '11622323', '2', 'Konsep Pedoman (R0) Pembuatan Indeks Kekeringan Hidrologi', '524111', 'Belanja perjalanan biasa', 131102000, 0);
INSERT INTO `emon_akun_2019` VALUES (882, '11622323', '3', 'Konsep Pedoman (R0) Perhitungan Indeks Ketahanan Air Pada Wilayah Sungai di Indonesia', '521211', 'Belanja Bahan', 53275000, 0);
INSERT INTO `emon_akun_2019` VALUES (883, '11622323', '3', 'Konsep Pedoman (R0) Perhitungan Indeks Ketahanan Air Pada Wilayah Sungai di Indonesia', '521811', 'Belanja Barang Untuk Persediaan Barang Konsumsi', 10000000, 0);
INSERT INTO `emon_akun_2019` VALUES (884, '11622323', '3', 'Konsep Pedoman (R0) Perhitungan Indeks Ketahanan Air Pada Wilayah Sungai di Indonesia', '522141', 'Belanja Sewa', 23560000, 0);
INSERT INTO `emon_akun_2019` VALUES (885, '11622323', '3', 'Konsep Pedoman (R0) Perhitungan Indeks Ketahanan Air Pada Wilayah Sungai di Indonesia', '522151', 'Belanja Jasa Profesi', 73800000, 0);
INSERT INTO `emon_akun_2019` VALUES (886, '11622323', '3', 'Konsep Pedoman (R0) Perhitungan Indeks Ketahanan Air Pada Wilayah Sungai di Indonesia', '524111', 'Belanja perjalanan biasa', 107732000, 0);
INSERT INTO `emon_akun_2019` VALUES (887, '11622323', '4', 'Pengembangan Teknologi Sirkulasi untuk Perbaikan Kualitas Air dengan Menghambat Pertumbuhan Alga di ', '521211', 'Belanja Bahan', 102823000, 0);
INSERT INTO `emon_akun_2019` VALUES (888, '11622323', '4', 'Pengembangan Teknologi Sirkulasi untuk Perbaikan Kualitas Air dengan Menghambat Pertumbuhan Alga di ', '521213', 'Honor Output Kegiatan', 43200000, 0);
INSERT INTO `emon_akun_2019` VALUES (889, '11622323', '4', 'Pengembangan Teknologi Sirkulasi untuk Perbaikan Kualitas Air dengan Menghambat Pertumbuhan Alga di ', '521219', 'Belanja Barang Non Operasional Lainnya', 257753000, 0);
INSERT INTO `emon_akun_2019` VALUES (890, '11622323', '4', 'Pengembangan Teknologi Sirkulasi untuk Perbaikan Kualitas Air dengan Menghambat Pertumbuhan Alga di ', '521811', 'Belanja Barang Untuk Persediaan Barang Konsumsi', 20000000, 0);
INSERT INTO `emon_akun_2019` VALUES (891, '11622323', '4', 'Pengembangan Teknologi Sirkulasi untuk Perbaikan Kualitas Air dengan Menghambat Pertumbuhan Alga di ', '522141', 'Belanja Sewa', 52192000, 0);
INSERT INTO `emon_akun_2019` VALUES (892, '11622323', '4', 'Pengembangan Teknologi Sirkulasi untuk Perbaikan Kualitas Air dengan Menghambat Pertumbuhan Alga di ', '522151', 'Belanja Jasa Profesi', 212000000, 0);
INSERT INTO `emon_akun_2019` VALUES (893, '11622323', '4', 'Pengembangan Teknologi Sirkulasi untuk Perbaikan Kualitas Air dengan Menghambat Pertumbuhan Alga di ', '524111', 'Belanja perjalanan biasa', 167090000, 0);
INSERT INTO `emon_akun_2019` VALUES (894, '11622323', '5', 'Konsep Pedoman (R-0) Teknologi Blok Beton Terkunci Sebagai Bendung Modular', '521211', 'Belanja Bahan', 13150000, 0);
INSERT INTO `emon_akun_2019` VALUES (895, '11622323', '5', 'Konsep Pedoman (R-0) Teknologi Blok Beton Terkunci Sebagai Bendung Modular', '521219', 'Belanja Barang Non Operasional Lainnya', 21410000, 0);
INSERT INTO `emon_akun_2019` VALUES (896, '11622323', '5', 'Konsep Pedoman (R-0) Teknologi Blok Beton Terkunci Sebagai Bendung Modular', '521811', 'Belanja Barang Untuk Persediaan Barang Konsumsi', 40000000, 0);
INSERT INTO `emon_akun_2019` VALUES (897, '11622323', '5', 'Konsep Pedoman (R-0) Teknologi Blok Beton Terkunci Sebagai Bendung Modular', '522141', 'Belanja Sewa', 25760000, 0);
INSERT INTO `emon_akun_2019` VALUES (898, '11622323', '5', 'Konsep Pedoman (R-0) Teknologi Blok Beton Terkunci Sebagai Bendung Modular', '522151', 'Belanja Jasa Profesi', 91200000, 0);
INSERT INTO `emon_akun_2019` VALUES (899, '11622323', '5', 'Konsep Pedoman (R-0) Teknologi Blok Beton Terkunci Sebagai Bendung Modular', '524111', 'Belanja perjalanan biasa', 66568000, 0);
INSERT INTO `emon_akun_2019` VALUES (900, '11622323', '6', 'Konsep Pedoman (R-0) Teknologi Airlock System Sebagai Pengganti Pintu Pada Intake Bendungan', '521211', 'Belanja Bahan', 2588000, 0);
INSERT INTO `emon_akun_2019` VALUES (901, '11622323', '6', 'Konsep Pedoman (R-0) Teknologi Airlock System Sebagai Pengganti Pintu Pada Intake Bendungan', '521219', 'Belanja Barang Non Operasional Lainnya', 48000000, 0);
INSERT INTO `emon_akun_2019` VALUES (902, '11622323', '6', 'Konsep Pedoman (R-0) Teknologi Airlock System Sebagai Pengganti Pintu Pada Intake Bendungan', '521811', 'Belanja Barang Untuk Persediaan Barang Konsumsi', 24000000, 0);
INSERT INTO `emon_akun_2019` VALUES (903, '11622323', '6', 'Konsep Pedoman (R-0) Teknologi Airlock System Sebagai Pengganti Pintu Pada Intake Bendungan', '522141', 'Belanja Sewa', 14912000, 0);
INSERT INTO `emon_akun_2019` VALUES (904, '11622323', '6', 'Konsep Pedoman (R-0) Teknologi Airlock System Sebagai Pengganti Pintu Pada Intake Bendungan', '522151', 'Belanja Jasa Profesi', 71200000, 0);
INSERT INTO `emon_akun_2019` VALUES (905, '11622323', '6', 'Konsep Pedoman (R-0) Teknologi Airlock System Sebagai Pengganti Pintu Pada Intake Bendungan', '524111', 'Belanja perjalanan biasa', 101300000, 0);
INSERT INTO `emon_akun_2019` VALUES (906, '11622323', '7', 'Konsep Pedoman (R-0) Evaluasi Risiko Keamanan Bendungan', '521211', 'Belanja Bahan', 6640000, 0);
INSERT INTO `emon_akun_2019` VALUES (907, '11622323', '7', 'Konsep Pedoman (R-0) Evaluasi Risiko Keamanan Bendungan', '521811', 'Belanja Barang Untuk Persediaan Barang Konsumsi', 40000000, 0);
INSERT INTO `emon_akun_2019` VALUES (908, '11622323', '7', 'Konsep Pedoman (R-0) Evaluasi Risiko Keamanan Bendungan', '522141', 'Belanja Sewa', 33896000, 0);
INSERT INTO `emon_akun_2019` VALUES (909, '11622323', '7', 'Konsep Pedoman (R-0) Evaluasi Risiko Keamanan Bendungan', '522151', 'Belanja Jasa Profesi', 21600000, 0);
INSERT INTO `emon_akun_2019` VALUES (910, '11622323', '7', 'Konsep Pedoman (R-0) Evaluasi Risiko Keamanan Bendungan', '524111', 'Belanja perjalanan biasa', 209862000, 0);
INSERT INTO `emon_akun_2019` VALUES (911, '11622323', '8', 'Konsep Pedoman (R-0) Teknologi Pengendali Muka Air (Hydraulic Elevator Dam)', '521211', 'Belanja Bahan', 11420000, 0);
INSERT INTO `emon_akun_2019` VALUES (912, '11622323', '8', 'Konsep Pedoman (R-0) Teknologi Pengendali Muka Air (Hydraulic Elevator Dam)', '521213', 'Honor Output Kegiatan', 20000000, 0);
INSERT INTO `emon_akun_2019` VALUES (913, '11622323', '8', 'Konsep Pedoman (R-0) Teknologi Pengendali Muka Air (Hydraulic Elevator Dam)', '521219', 'Belanja Barang Non Operasional Lainnya', 48000000, 0);
INSERT INTO `emon_akun_2019` VALUES (914, '11622323', '8', 'Konsep Pedoman (R-0) Teknologi Pengendali Muka Air (Hydraulic Elevator Dam)', '521811', 'Belanja Barang Untuk Persediaan Barang Konsumsi', 40000000, 0);
INSERT INTO `emon_akun_2019` VALUES (915, '11622323', '8', 'Konsep Pedoman (R-0) Teknologi Pengendali Muka Air (Hydraulic Elevator Dam)', '522141', 'Belanja Sewa', 58160000, 0);
INSERT INTO `emon_akun_2019` VALUES (916, '11622323', '8', 'Konsep Pedoman (R-0) Teknologi Pengendali Muka Air (Hydraulic Elevator Dam)', '522151', 'Belanja Jasa Profesi', 82000000, 0);
INSERT INTO `emon_akun_2019` VALUES (917, '11622323', '8', 'Konsep Pedoman (R-0) Teknologi Pengendali Muka Air (Hydraulic Elevator Dam)', '524111', 'Belanja perjalanan biasa', 302020000, 0);
INSERT INTO `emon_akun_2019` VALUES (918, '11622323', '9', 'Naskah Ilmiah Studi kerentanan Keamanan Bendungan Terhadap Gempa Sesar', '521211', 'Belanja Bahan', 34960000, 0);
INSERT INTO `emon_akun_2019` VALUES (919, '11622323', '9', 'Naskah Ilmiah Studi kerentanan Keamanan Bendungan Terhadap Gempa Sesar', '521213', 'Honor Output Kegiatan', 30000000, 0);
INSERT INTO `emon_akun_2019` VALUES (920, '11622323', '9', 'Naskah Ilmiah Studi kerentanan Keamanan Bendungan Terhadap Gempa Sesar', '521219', 'Belanja Barang Non Operasional Lainnya', 162330000, 0);
INSERT INTO `emon_akun_2019` VALUES (921, '11622323', '9', 'Naskah Ilmiah Studi kerentanan Keamanan Bendungan Terhadap Gempa Sesar', '521811', 'Belanja Barang Untuk Persediaan Barang Konsumsi', 40000000, 0);
INSERT INTO `emon_akun_2019` VALUES (922, '11622323', '9', 'Naskah Ilmiah Studi kerentanan Keamanan Bendungan Terhadap Gempa Sesar', '522131', 'Belanja Jasa Konsultan', 100000000, 0);
INSERT INTO `emon_akun_2019` VALUES (923, '11622323', '9', 'Naskah Ilmiah Studi kerentanan Keamanan Bendungan Terhadap Gempa Sesar', '522141', 'Belanja Sewa', 53445000, 0);
INSERT INTO `emon_akun_2019` VALUES (924, '11622323', '9', 'Naskah Ilmiah Studi kerentanan Keamanan Bendungan Terhadap Gempa Sesar', '522151', 'Belanja Jasa Profesi', 132000000, 0);
INSERT INTO `emon_akun_2019` VALUES (925, '11622323', '9', 'Naskah Ilmiah Studi kerentanan Keamanan Bendungan Terhadap Gempa Sesar', '524111', 'Belanja perjalanan biasa', 466815000, 0);
INSERT INTO `emon_akun_2019` VALUES (926, '11622323', '10', 'Perumusan Standar, Pedoman, Manual Bidang Sumber Daya Air', '521211', 'Belanja Bahan', 94327000, 0);
INSERT INTO `emon_akun_2019` VALUES (927, '11622323', '10', 'Perumusan Standar, Pedoman, Manual Bidang Sumber Daya Air', '521219', 'Belanja Barang Non Operasional Lainnya', 250000000, 0);
INSERT INTO `emon_akun_2019` VALUES (928, '11622323', '10', 'Perumusan Standar, Pedoman, Manual Bidang Sumber Daya Air', '521811', 'Belanja Barang Untuk Persediaan Barang Konsumsi', 20000000, 0);
INSERT INTO `emon_akun_2019` VALUES (929, '11622323', '10', 'Perumusan Standar, Pedoman, Manual Bidang Sumber Daya Air', '522141', 'Belanja Sewa', 24358000, 0);
INSERT INTO `emon_akun_2019` VALUES (930, '11622323', '10', 'Perumusan Standar, Pedoman, Manual Bidang Sumber Daya Air', '522151', 'Belanja Jasa Profesi', 528000000, 0);
INSERT INTO `emon_akun_2019` VALUES (931, '11622323', '10', 'Perumusan Standar, Pedoman, Manual Bidang Sumber Daya Air', '524111', 'Belanja perjalanan biasa', 343584000, 0);
INSERT INTO `emon_akun_2019` VALUES (932, '11622323', '11', 'Penyusunan SPM Bidang Bangunan Hidraulik dan Geoteknik Keairan', '521211', 'Belanja Bahan', 6482000, 0);
INSERT INTO `emon_akun_2019` VALUES (933, '11622323', '11', 'Penyusunan SPM Bidang Bangunan Hidraulik dan Geoteknik Keairan', '521811', 'Belanja Barang Untuk Persediaan Barang Konsumsi', 7000000, 0);
INSERT INTO `emon_akun_2019` VALUES (934, '11622323', '11', 'Penyusunan SPM Bidang Bangunan Hidraulik dan Geoteknik Keairan', '522141', 'Belanja Sewa', 9152000, 0);
INSERT INTO `emon_akun_2019` VALUES (935, '11622323', '11', 'Penyusunan SPM Bidang Bangunan Hidraulik dan Geoteknik Keairan', '522151', 'Belanja Jasa Profesi', 30200000, 0);
INSERT INTO `emon_akun_2019` VALUES (936, '11622323', '11', 'Penyusunan SPM Bidang Bangunan Hidraulik dan Geoteknik Keairan', '524111', 'Belanja perjalanan biasa', 79622000, 0);
INSERT INTO `emon_akun_2019` VALUES (937, '11622323', '12', 'Penyusunan SPM Bidang Lingkungan Keairan', '521211', 'Belanja Bahan', 11422000, 0);
INSERT INTO `emon_akun_2019` VALUES (938, '11622323', '12', 'Penyusunan SPM Bidang Lingkungan Keairan', '521811', 'Belanja Barang Untuk Persediaan Barang Konsumsi', 7000000, 0);
INSERT INTO `emon_akun_2019` VALUES (939, '11622323', '12', 'Penyusunan SPM Bidang Lingkungan Keairan', '522141', 'Belanja Sewa', 16566000, 0);
INSERT INTO `emon_akun_2019` VALUES (940, '11622323', '12', 'Penyusunan SPM Bidang Lingkungan Keairan', '522151', 'Belanja Jasa Profesi', 38500000, 0);
INSERT INTO `emon_akun_2019` VALUES (941, '11622323', '12', 'Penyusunan SPM Bidang Lingkungan Keairan', '524111', 'Belanja perjalanan biasa', 27104000, 0);
INSERT INTO `emon_akun_2019` VALUES (942, '11622323', '13', 'Penyusunan SPM Bidang Hidrologi dan Tata Air', '521211', 'Belanja Bahan', 6964000, 0);
INSERT INTO `emon_akun_2019` VALUES (943, '11622323', '13', 'Penyusunan SPM Bidang Hidrologi dan Tata Air', '521811', 'Belanja Barang Untuk Persediaan Barang Konsumsi', 7000000, 0);
INSERT INTO `emon_akun_2019` VALUES (944, '11622323', '13', 'Penyusunan SPM Bidang Hidrologi dan Tata Air', '522141', 'Belanja Sewa', 11016000, 0);
INSERT INTO `emon_akun_2019` VALUES (945, '11622323', '13', 'Penyusunan SPM Bidang Hidrologi dan Tata Air', '522151', 'Belanja Jasa Profesi', 30200000, 0);
INSERT INTO `emon_akun_2019` VALUES (946, '11622323', '13', 'Penyusunan SPM Bidang Hidrologi dan Tata Air', '524111', 'Belanja perjalanan biasa', 47752000, 0);
INSERT INTO `emon_akun_2019` VALUES (947, '11622323', '14', 'Penyusunan SPM Bidang Irigasi', '521211', 'Belanja Bahan', 6904000, 0);
INSERT INTO `emon_akun_2019` VALUES (948, '11622323', '14', 'Penyusunan SPM Bidang Irigasi', '521811', 'Belanja Barang Untuk Persediaan Barang Konsumsi', 7000000, 0);
INSERT INTO `emon_akun_2019` VALUES (949, '11622323', '14', 'Penyusunan SPM Bidang Irigasi', '522141', 'Belanja Sewa', 9152000, 0);
INSERT INTO `emon_akun_2019` VALUES (950, '11622323', '14', 'Penyusunan SPM Bidang Irigasi', '522151', 'Belanja Jasa Profesi', 30200000, 0);
INSERT INTO `emon_akun_2019` VALUES (951, '11622323', '14', 'Penyusunan SPM Bidang Irigasi', '524111', 'Belanja perjalanan biasa', 38060000, 0);
INSERT INTO `emon_akun_2019` VALUES (952, '11622323', '15', 'Penyusunan SPM Bidang Sabo', '521211', 'Belanja Bahan', 5872000, 0);
INSERT INTO `emon_akun_2019` VALUES (953, '11622323', '15', 'Penyusunan SPM Bidang Sabo', '521811', 'Belanja Barang Untuk Persediaan Barang Konsumsi', 7000000, 0);
INSERT INTO `emon_akun_2019` VALUES (954, '11622323', '15', 'Penyusunan SPM Bidang Sabo', '522151', 'Belanja Jasa Profesi', 29300000, 0);
INSERT INTO `emon_akun_2019` VALUES (955, '11622323', '15', 'Penyusunan SPM Bidang Sabo', '524111', 'Belanja perjalanan biasa', 76168000, 0);
INSERT INTO `emon_akun_2019` VALUES (956, '11622323', '16', 'Penyusunan SPM Bidang Pantai', '521211', 'Belanja Bahan', 6400000, 0);
INSERT INTO `emon_akun_2019` VALUES (957, '11622323', '16', 'Penyusunan SPM Bidang Pantai', '521811', 'Belanja Barang Untuk Persediaan Barang Konsumsi', 7000000, 0);
INSERT INTO `emon_akun_2019` VALUES (958, '11622323', '16', 'Penyusunan SPM Bidang Pantai', '522141', 'Belanja Sewa', 6860000, 0);
INSERT INTO `emon_akun_2019` VALUES (959, '11622323', '16', 'Penyusunan SPM Bidang Pantai', '522151', 'Belanja Jasa Profesi', 30200000, 0);
INSERT INTO `emon_akun_2019` VALUES (960, '11622323', '16', 'Penyusunan SPM Bidang Pantai', '524111', 'Belanja perjalanan biasa', 86483000, 0);
INSERT INTO `emon_akun_2019` VALUES (961, '11622323', '17', 'Penyusunan SPM Bidang Sungai', '521211', 'Belanja Bahan', 5920000, 0);
INSERT INTO `emon_akun_2019` VALUES (962, '11622323', '17', 'Penyusunan SPM Bidang Sungai', '521811', 'Belanja Barang Untuk Persediaan Barang Konsumsi', 7000000, 0);
INSERT INTO `emon_akun_2019` VALUES (963, '11622323', '17', 'Penyusunan SPM Bidang Sungai', '522151', 'Belanja Jasa Profesi', 30200000, 0);
INSERT INTO `emon_akun_2019` VALUES (964, '11622323', '17', 'Penyusunan SPM Bidang Sungai', '524111', 'Belanja perjalanan biasa', 64992000, 0);
INSERT INTO `emon_akun_2019` VALUES (965, '11622323', '18', 'Penyusunan SPM Bidang Rawa', '521211', 'Belanja Bahan', 6296000, 0);
INSERT INTO `emon_akun_2019` VALUES (966, '11622323', '18', 'Penyusunan SPM Bidang Rawa', '521811', 'Belanja Barang Untuk Persediaan Barang Konsumsi', 7000000, 0);
INSERT INTO `emon_akun_2019` VALUES (967, '11622323', '18', 'Penyusunan SPM Bidang Rawa', '522151', 'Belanja Jasa Profesi', 29500000, 0);
INSERT INTO `emon_akun_2019` VALUES (968, '11622323', '18', 'Penyusunan SPM Bidang Rawa', '524111', 'Belanja perjalanan biasa', 106526000, 0);
INSERT INTO `emon_akun_2019` VALUES (969, '11622323', '19', 'Penerapan Sistem Pengelolaan SDA Pintar (Smart Water Management System (SWMS))', '521211', 'Belanja Bahan', 26845000, 0);
INSERT INTO `emon_akun_2019` VALUES (970, '11622323', '19', 'Penerapan Sistem Pengelolaan SDA Pintar (Smart Water Management System (SWMS))', '521219', 'Belanja Barang Non Operasional Lainnya', 45079000, 0);
INSERT INTO `emon_akun_2019` VALUES (971, '11622323', '19', 'Penerapan Sistem Pengelolaan SDA Pintar (Smart Water Management System (SWMS))', '521811', 'Belanja Barang Untuk Persediaan Barang Konsumsi', 10000000, 0);
INSERT INTO `emon_akun_2019` VALUES (972, '11622323', '19', 'Penerapan Sistem Pengelolaan SDA Pintar (Smart Water Management System (SWMS))', '522141', 'Belanja Sewa', 44736000, 0);
INSERT INTO `emon_akun_2019` VALUES (973, '11622323', '19', 'Penerapan Sistem Pengelolaan SDA Pintar (Smart Water Management System (SWMS))', '522151', 'Belanja Jasa Profesi', 101600000, 0);
INSERT INTO `emon_akun_2019` VALUES (974, '11622323', '19', 'Penerapan Sistem Pengelolaan SDA Pintar (Smart Water Management System (SWMS))', '524111', 'Belanja perjalanan biasa', 112820000, 0);
INSERT INTO `emon_akun_2019` VALUES (975, '11622323', '19', 'Penerapan Sistem Pengelolaan SDA Pintar (Smart Water Management System (SWMS))', '532111', 'Belanja Modal Peralatan dan Mesin', 162425000, 0);
INSERT INTO `emon_akun_2019` VALUES (976, '11622323', '20', 'Pengendalian Limbah Cair Pada Air Permukaan', '521211', 'Belanja Bahan', 98590000, 0);
INSERT INTO `emon_akun_2019` VALUES (977, '11622323', '20', 'Pengendalian Limbah Cair Pada Air Permukaan', '521213', 'Honor Output Kegiatan', 58800000, 0);
INSERT INTO `emon_akun_2019` VALUES (978, '11622323', '20', 'Pengendalian Limbah Cair Pada Air Permukaan', '521219', 'Belanja Barang Non Operasional Lainnya', 678217000, 0);
INSERT INTO `emon_akun_2019` VALUES (979, '11622323', '20', 'Pengendalian Limbah Cair Pada Air Permukaan', '521811', 'Belanja Barang Untuk Persediaan Barang Konsumsi', 20000000, 0);
INSERT INTO `emon_akun_2019` VALUES (980, '11622323', '20', 'Pengendalian Limbah Cair Pada Air Permukaan', '522131', 'Belanja Jasa Konsultan', 250000000, 0);
INSERT INTO `emon_akun_2019` VALUES (981, '11622323', '20', 'Pengendalian Limbah Cair Pada Air Permukaan', '522141', 'Belanja Sewa', 156576000, 0);
INSERT INTO `emon_akun_2019` VALUES (982, '11622323', '20', 'Pengendalian Limbah Cair Pada Air Permukaan', '522151', 'Belanja Jasa Profesi', 210800000, 0);
INSERT INTO `emon_akun_2019` VALUES (983, '11622323', '20', 'Pengendalian Limbah Cair Pada Air Permukaan', '522191', 'Belanja Jasa Lainnya', 49500000, 0);
INSERT INTO `emon_akun_2019` VALUES (984, '11622323', '20', 'Pengendalian Limbah Cair Pada Air Permukaan', '524111', 'Belanja perjalanan biasa', 380830000, 0);
INSERT INTO `emon_akun_2019` VALUES (985, '11622323', '20', 'Pengendalian Limbah Cair Pada Air Permukaan', '524113', 'Belanja Perjalanan Dinas Dalam Kota', 112370000, 0);
INSERT INTO `emon_akun_2019` VALUES (986, '11622323', '20', 'Pengendalian Limbah Cair Pada Air Permukaan', '534131', 'Belanja Modal Jaringan', 3000000000, 0);
INSERT INTO `emon_akun_2019` VALUES (987, '11622323', '21', 'Penerapan Teknologi Blok Beton Sebagai Peredam Energi Bertingkat', '521211', 'Belanja Bahan', 15000000, 0);
INSERT INTO `emon_akun_2019` VALUES (988, '11622323', '21', 'Penerapan Teknologi Blok Beton Sebagai Peredam Energi Bertingkat', '521213', 'Honor Output Kegiatan', 20000000, 0);
INSERT INTO `emon_akun_2019` VALUES (989, '11622323', '21', 'Penerapan Teknologi Blok Beton Sebagai Peredam Energi Bertingkat', '521219', 'Belanja Barang Non Operasional Lainnya', 46102000, 0);
INSERT INTO `emon_akun_2019` VALUES (990, '11622323', '21', 'Penerapan Teknologi Blok Beton Sebagai Peredam Energi Bertingkat', '521811', 'Belanja Barang Untuk Persediaan Barang Konsumsi', 35000000, 0);
INSERT INTO `emon_akun_2019` VALUES (991, '11622323', '21', 'Penerapan Teknologi Blok Beton Sebagai Peredam Energi Bertingkat', '522141', 'Belanja Sewa', 63376000, 0);
INSERT INTO `emon_akun_2019` VALUES (992, '11622323', '21', 'Penerapan Teknologi Blok Beton Sebagai Peredam Energi Bertingkat', '522151', 'Belanja Jasa Profesi', 101600000, 0);
INSERT INTO `emon_akun_2019` VALUES (993, '11622323', '21', 'Penerapan Teknologi Blok Beton Sebagai Peredam Energi Bertingkat', '524111', 'Belanja perjalanan biasa', 170522000, 0);
INSERT INTO `emon_akun_2019` VALUES (994, '11622323', '22', 'Penyelenggaraan Diseminasi dan Pameran', '521211', 'Belanja Bahan', 174718000, 0);
INSERT INTO `emon_akun_2019` VALUES (995, '11622323', '22', 'Penyelenggaraan Diseminasi dan Pameran', '521219', 'Belanja Barang Non Operasional Lainnya', 145025000, 0);
INSERT INTO `emon_akun_2019` VALUES (996, '11622323', '22', 'Penyelenggaraan Diseminasi dan Pameran', '521811', 'Belanja Barang Untuk Persediaan Barang Konsumsi', 20000000, 0);
INSERT INTO `emon_akun_2019` VALUES (997, '11622323', '22', 'Penyelenggaraan Diseminasi dan Pameran', '522141', 'Belanja Sewa', 168592000, 0);
INSERT INTO `emon_akun_2019` VALUES (998, '11622323', '22', 'Penyelenggaraan Diseminasi dan Pameran', '522151', 'Belanja Jasa Profesi', 49500000, 0);
INSERT INTO `emon_akun_2019` VALUES (999, '11622323', '22', 'Penyelenggaraan Diseminasi dan Pameran', '524111', 'Belanja perjalanan biasa', 449856000, 0);
INSERT INTO `emon_akun_2019` VALUES (1000, '11622323', '23', 'Advis Teknis dan Pendampingan Teknis Bidang Sumber Daya Air', '521211', 'Belanja Bahan', 135101000, 0);
INSERT INTO `emon_akun_2019` VALUES (1001, '11622323', '23', 'Advis Teknis dan Pendampingan Teknis Bidang Sumber Daya Air', '521219', 'Belanja Barang Non Operasional Lainnya', 31546000, 0);
INSERT INTO `emon_akun_2019` VALUES (1002, '11622323', '23', 'Advis Teknis dan Pendampingan Teknis Bidang Sumber Daya Air', '521811', 'Belanja Barang Untuk Persediaan Barang Konsumsi', 20000000, 0);
INSERT INTO `emon_akun_2019` VALUES (1003, '11622323', '23', 'Advis Teknis dan Pendampingan Teknis Bidang Sumber Daya Air', '522141', 'Belanja Sewa', 158400000, 0);
INSERT INTO `emon_akun_2019` VALUES (1004, '11622323', '23', 'Advis Teknis dan Pendampingan Teknis Bidang Sumber Daya Air', '522151', 'Belanja Jasa Profesi', 785500000, 0);
INSERT INTO `emon_akun_2019` VALUES (1005, '11622323', '23', 'Advis Teknis dan Pendampingan Teknis Bidang Sumber Daya Air', '524111', 'Belanja perjalanan biasa', 1982367000, 0);
INSERT INTO `emon_akun_2019` VALUES (1006, '11622323', '24', 'Dukungan Perencanaan Darurat Penanggulangan Bencana', '521211', 'Belanja Bahan', 13806000, 0);
INSERT INTO `emon_akun_2019` VALUES (1007, '11622323', '24', 'Dukungan Perencanaan Darurat Penanggulangan Bencana', '521219', 'Belanja Barang Non Operasional Lainnya', 46752000, 0);
INSERT INTO `emon_akun_2019` VALUES (1008, '11622323', '24', 'Dukungan Perencanaan Darurat Penanggulangan Bencana', '521811', 'Belanja Barang Untuk Persediaan Barang Konsumsi', 15000000, 0);
INSERT INTO `emon_akun_2019` VALUES (1009, '11622323', '24', 'Dukungan Perencanaan Darurat Penanggulangan Bencana', '522141', 'Belanja Sewa', 29575000, 0);
INSERT INTO `emon_akun_2019` VALUES (1010, '11622323', '24', 'Dukungan Perencanaan Darurat Penanggulangan Bencana', '522151', 'Belanja Jasa Profesi', 121200000, 0);
INSERT INTO `emon_akun_2019` VALUES (1011, '11622323', '24', 'Dukungan Perencanaan Darurat Penanggulangan Bencana', '524111', 'Belanja perjalanan biasa', 369272000, 0);
INSERT INTO `emon_akun_2019` VALUES (1012, '11622323', '25', 'Penerapan Sistem Penanganan Banjir Bandung', '521211', 'Belanja Bahan', 22850000, 0);
INSERT INTO `emon_akun_2019` VALUES (1013, '11622323', '25', 'Penerapan Sistem Penanganan Banjir Bandung', '521219', 'Belanja Barang Non Operasional Lainnya', 51330000, 0);
INSERT INTO `emon_akun_2019` VALUES (1014, '11622323', '25', 'Penerapan Sistem Penanganan Banjir Bandung', '521811', 'Belanja Barang Untuk Persediaan Barang Konsumsi', 10000000, 0);
INSERT INTO `emon_akun_2019` VALUES (1015, '11622323', '25', 'Penerapan Sistem Penanganan Banjir Bandung', '522141', 'Belanja Sewa', 40076000, 0);
INSERT INTO `emon_akun_2019` VALUES (1016, '11622323', '25', 'Penerapan Sistem Penanganan Banjir Bandung', '522151', 'Belanja Jasa Profesi', 79200000, 0);
INSERT INTO `emon_akun_2019` VALUES (1017, '11622323', '25', 'Penerapan Sistem Penanganan Banjir Bandung', '524111', 'Belanja perjalanan biasa', 152490000, 0);
INSERT INTO `emon_akun_2019` VALUES (1018, '11622323', '25', 'Penerapan Sistem Penanganan Banjir Bandung', '524113', 'Belanja Perjalanan Dinas Dalam Kota', 4080000, 0);
INSERT INTO `emon_akun_2019` VALUES (1019, '11622323', '26', 'Kajian Penyelidikan Amblesan (Subsidence) dikawasan Jakarta Dukungan PTPIN-NCICD', '521211', 'Belanja Bahan', 9840000, 0);
INSERT INTO `emon_akun_2019` VALUES (1020, '11622323', '26', 'Kajian Penyelidikan Amblesan (Subsidence) dikawasan Jakarta Dukungan PTPIN-NCICD', '521213', 'Honor Output Kegiatan', 40000000, 0);
INSERT INTO `emon_akun_2019` VALUES (1021, '11622323', '26', 'Kajian Penyelidikan Amblesan (Subsidence) dikawasan Jakarta Dukungan PTPIN-NCICD', '521219', 'Belanja Barang Non Operasional Lainnya', 24215000, 0);
INSERT INTO `emon_akun_2019` VALUES (1022, '11622323', '26', 'Kajian Penyelidikan Amblesan (Subsidence) dikawasan Jakarta Dukungan PTPIN-NCICD', '521811', 'Belanja Barang Untuk Persediaan Barang Konsumsi', 21012000, 0);
INSERT INTO `emon_akun_2019` VALUES (1023, '11622323', '26', 'Kajian Penyelidikan Amblesan (Subsidence) dikawasan Jakarta Dukungan PTPIN-NCICD', '522131', 'Belanja Jasa Konsultan', 100000000, 0);
INSERT INTO `emon_akun_2019` VALUES (1024, '11622323', '26', 'Kajian Penyelidikan Amblesan (Subsidence) dikawasan Jakarta Dukungan PTPIN-NCICD', '522141', 'Belanja Sewa', 105368000, 0);
INSERT INTO `emon_akun_2019` VALUES (1025, '11622323', '26', 'Kajian Penyelidikan Amblesan (Subsidence) dikawasan Jakarta Dukungan PTPIN-NCICD', '522151', 'Belanja Jasa Profesi', 42500000, 0);
INSERT INTO `emon_akun_2019` VALUES (1026, '11622323', '26', 'Kajian Penyelidikan Amblesan (Subsidence) dikawasan Jakarta Dukungan PTPIN-NCICD', '524111', 'Belanja perjalanan biasa', 95065000, 0);
INSERT INTO `emon_akun_2019` VALUES (1027, '11622323', '27', 'Pemodelan Kualitas Air Sungai dan Teluk Jakarta', '521211', 'Belanja Bahan', 18900000, 0);
INSERT INTO `emon_akun_2019` VALUES (1028, '11622323', '27', 'Pemodelan Kualitas Air Sungai dan Teluk Jakarta', '521213', 'Honor Output Kegiatan', 12000000, 0);
INSERT INTO `emon_akun_2019` VALUES (1029, '11622323', '27', 'Pemodelan Kualitas Air Sungai dan Teluk Jakarta', '521219', 'Belanja Barang Non Operasional Lainnya', 144258000, 0);
INSERT INTO `emon_akun_2019` VALUES (1030, '11622323', '27', 'Pemodelan Kualitas Air Sungai dan Teluk Jakarta', '521811', 'Belanja Barang Untuk Persediaan Barang Konsumsi', 20000000, 0);
INSERT INTO `emon_akun_2019` VALUES (1031, '11622323', '27', 'Pemodelan Kualitas Air Sungai dan Teluk Jakarta', '522141', 'Belanja Sewa', 61512000, 0);
INSERT INTO `emon_akun_2019` VALUES (1032, '11622323', '27', 'Pemodelan Kualitas Air Sungai dan Teluk Jakarta', '522151', 'Belanja Jasa Profesi', 52800000, 0);
INSERT INTO `emon_akun_2019` VALUES (1033, '11622323', '27', 'Pemodelan Kualitas Air Sungai dan Teluk Jakarta', '524111', 'Belanja perjalanan biasa', 212194000, 0);
INSERT INTO `emon_akun_2019` VALUES (1034, '11622323', '28', 'Basis Data dan Knowledge Management NCICD', '521211', 'Belanja Bahan', 90837000, 0);
INSERT INTO `emon_akun_2019` VALUES (1035, '11622323', '28', 'Basis Data dan Knowledge Management NCICD', '521219', 'Belanja Barang Non Operasional Lainnya', 30000000, 0);
INSERT INTO `emon_akun_2019` VALUES (1036, '11622323', '28', 'Basis Data dan Knowledge Management NCICD', '521811', 'Belanja Barang Untuk Persediaan Barang Konsumsi', 30000000, 0);
INSERT INTO `emon_akun_2019` VALUES (1037, '11622323', '28', 'Basis Data dan Knowledge Management NCICD', '522141', 'Belanja Sewa', 36860000, 0);
INSERT INTO `emon_akun_2019` VALUES (1038, '11622323', '28', 'Basis Data dan Knowledge Management NCICD', '522151', 'Belanja Jasa Profesi', 602000000, 0);
INSERT INTO `emon_akun_2019` VALUES (1039, '11622323', '28', 'Basis Data dan Knowledge Management NCICD', '522191', 'Belanja Jasa Lainnya', 66784000, 0);
INSERT INTO `emon_akun_2019` VALUES (1040, '11622323', '28', 'Basis Data dan Knowledge Management NCICD', '524111', 'Belanja perjalanan biasa', 529053000, 0);
INSERT INTO `emon_akun_2019` VALUES (1041, '11622323', '29', 'Strategi Penanggulangan Dampak Pengambilan Air Tanah Berlebihan di Wilayah Perkotaan', '521211', 'Belanja Bahan', 5250000, 0);
INSERT INTO `emon_akun_2019` VALUES (1042, '11622323', '29', 'Strategi Penanggulangan Dampak Pengambilan Air Tanah Berlebihan di Wilayah Perkotaan', '521213', 'Honor Output Kegiatan', 14560000, 0);
INSERT INTO `emon_akun_2019` VALUES (1043, '11622323', '29', 'Strategi Penanggulangan Dampak Pengambilan Air Tanah Berlebihan di Wilayah Perkotaan', '521219', 'Belanja Barang Non Operasional Lainnya', 88250000, 0);
INSERT INTO `emon_akun_2019` VALUES (1044, '11622323', '29', 'Strategi Penanggulangan Dampak Pengambilan Air Tanah Berlebihan di Wilayah Perkotaan', '521811', 'Belanja Barang Untuk Persediaan Barang Konsumsi', 10000000, 0);
INSERT INTO `emon_akun_2019` VALUES (1045, '11622323', '29', 'Strategi Penanggulangan Dampak Pengambilan Air Tanah Berlebihan di Wilayah Perkotaan', '522141', 'Belanja Sewa', 37000000, 0);
INSERT INTO `emon_akun_2019` VALUES (1046, '11622323', '29', 'Strategi Penanggulangan Dampak Pengambilan Air Tanah Berlebihan di Wilayah Perkotaan', '522151', 'Belanja Jasa Profesi', 72000000, 0);
INSERT INTO `emon_akun_2019` VALUES (1047, '11622323', '29', 'Strategi Penanggulangan Dampak Pengambilan Air Tanah Berlebihan di Wilayah Perkotaan', '524111', 'Belanja perjalanan biasa', 163380000, 0);
INSERT INTO `emon_akun_2019` VALUES (1048, '11622323', '30', 'Updating dan Perumusan Debit Banjir Desain Jakarta', '521211', 'Belanja Bahan', 31017000, 0);
INSERT INTO `emon_akun_2019` VALUES (1049, '11622323', '30', 'Updating dan Perumusan Debit Banjir Desain Jakarta', '521219', 'Belanja Barang Non Operasional Lainnya', 54288000, 0);
INSERT INTO `emon_akun_2019` VALUES (1050, '11622323', '30', 'Updating dan Perumusan Debit Banjir Desain Jakarta', '521811', 'Belanja Barang Untuk Persediaan Barang Konsumsi', 10000000, 0);
INSERT INTO `emon_akun_2019` VALUES (1051, '11622323', '30', 'Updating dan Perumusan Debit Banjir Desain Jakarta', '522141', 'Belanja Sewa', 40560000, 0);
INSERT INTO `emon_akun_2019` VALUES (1052, '11622323', '30', 'Updating dan Perumusan Debit Banjir Desain Jakarta', '522151', 'Belanja Jasa Profesi', 101200000, 0);
INSERT INTO `emon_akun_2019` VALUES (1053, '11622323', '30', 'Updating dan Perumusan Debit Banjir Desain Jakarta', '524111', 'Belanja perjalanan biasa', 187000000, 0);
INSERT INTO `emon_akun_2019` VALUES (1054, '11622323', '31', 'Pemodelan dan Pemantauan Kualitas Air', '521211', 'Belanja Bahan', 46800000, 0);
INSERT INTO `emon_akun_2019` VALUES (1055, '11622323', '31', 'Pemodelan dan Pemantauan Kualitas Air', '521213', 'Honor Output Kegiatan', 50000000, 0);
INSERT INTO `emon_akun_2019` VALUES (1056, '11622323', '31', 'Pemodelan dan Pemantauan Kualitas Air', '521219', 'Belanja Barang Non Operasional Lainnya', 444698000, 0);
INSERT INTO `emon_akun_2019` VALUES (1057, '11622323', '31', 'Pemodelan dan Pemantauan Kualitas Air', '521811', 'Belanja Barang Untuk Persediaan Barang Konsumsi', 20000000, 0);
INSERT INTO `emon_akun_2019` VALUES (1058, '11622323', '31', 'Pemodelan dan Pemantauan Kualitas Air', '522141', 'Belanja Sewa', 156576000, 0);
INSERT INTO `emon_akun_2019` VALUES (1059, '11622323', '31', 'Pemodelan dan Pemantauan Kualitas Air', '522151', 'Belanja Jasa Profesi', 131200000, 0);
INSERT INTO `emon_akun_2019` VALUES (1060, '11622323', '31', 'Pemodelan dan Pemantauan Kualitas Air', '522191', 'Belanja Jasa Lainnya', 49500000, 0);
INSERT INTO `emon_akun_2019` VALUES (1061, '11622323', '31', 'Pemodelan dan Pemantauan Kualitas Air', '524111', 'Belanja perjalanan biasa', 368590000, 0);
INSERT INTO `emon_akun_2019` VALUES (1062, '11622323', '31', 'Pemodelan dan Pemantauan Kualitas Air', '524113', 'Belanja Perjalanan Dinas Dalam Kota', 24480000, 0);
INSERT INTO `emon_akun_2019` VALUES (1063, '11622323', '31', 'Pemodelan dan Pemantauan Kualitas Air', '532118', 'Belanja Modal Perjalanan Peralatan dan Mesin', 49000000, 0);
INSERT INTO `emon_akun_2019` VALUES (1064, '11622323', '32', 'Penyelenggaraan Laboratorium Balai Litbang Lingkungan Keairan', '521211', 'Belanja Bahan', 34716000, 0);
INSERT INTO `emon_akun_2019` VALUES (1065, '11622323', '32', 'Penyelenggaraan Laboratorium Balai Litbang Lingkungan Keairan', '521213', 'Honor Output Kegiatan', 7200000, 0);
INSERT INTO `emon_akun_2019` VALUES (1066, '11622323', '32', 'Penyelenggaraan Laboratorium Balai Litbang Lingkungan Keairan', '521219', 'Belanja Barang Non Operasional Lainnya', 263620000, 0);
INSERT INTO `emon_akun_2019` VALUES (1067, '11622323', '32', 'Penyelenggaraan Laboratorium Balai Litbang Lingkungan Keairan', '521811', 'Belanja Barang Untuk Persediaan Barang Konsumsi', 20000000, 0);
INSERT INTO `emon_akun_2019` VALUES (1068, '11622323', '32', 'Penyelenggaraan Laboratorium Balai Litbang Lingkungan Keairan', '522141', 'Belanja Sewa', 44736000, 0);
INSERT INTO `emon_akun_2019` VALUES (1069, '11622323', '32', 'Penyelenggaraan Laboratorium Balai Litbang Lingkungan Keairan', '522151', 'Belanja Jasa Profesi', 48000000, 0);
INSERT INTO `emon_akun_2019` VALUES (1070, '11622323', '32', 'Penyelenggaraan Laboratorium Balai Litbang Lingkungan Keairan', '524111', 'Belanja perjalanan biasa', 104802000, 0);
INSERT INTO `emon_akun_2019` VALUES (1071, '11622323', '33', 'Penyelenggaraan Laboratorium Balai Litbang HITA', '521211', 'Belanja Bahan', 41400000, 0);
INSERT INTO `emon_akun_2019` VALUES (1072, '11622323', '33', 'Penyelenggaraan Laboratorium Balai Litbang HITA', '521213', 'Honor Output Kegiatan', 32000000, 0);
INSERT INTO `emon_akun_2019` VALUES (1073, '11622323', '33', 'Penyelenggaraan Laboratorium Balai Litbang HITA', '521219', 'Belanja Barang Non Operasional Lainnya', 93350000, 0);
INSERT INTO `emon_akun_2019` VALUES (1074, '11622323', '33', 'Penyelenggaraan Laboratorium Balai Litbang HITA', '521811', 'Belanja Barang Untuk Persediaan Barang Konsumsi', 10000000, 0);
INSERT INTO `emon_akun_2019` VALUES (1075, '11622323', '33', 'Penyelenggaraan Laboratorium Balai Litbang HITA', '522141', 'Belanja Sewa', 17894000, 0);
INSERT INTO `emon_akun_2019` VALUES (1076, '11622323', '33', 'Penyelenggaraan Laboratorium Balai Litbang HITA', '522151', 'Belanja Jasa Profesi', 75600000, 0);
INSERT INTO `emon_akun_2019` VALUES (1077, '11622323', '33', 'Penyelenggaraan Laboratorium Balai Litbang HITA', '524111', 'Belanja perjalanan biasa', 131724000, 0);
INSERT INTO `emon_akun_2019` VALUES (1078, '11622323', '34', 'Penyelenggaraan Laboratorium Balai Litbang Bangunan Hidraulik dan Geoteknik Keairan', '521211', 'Belanja Bahan', 9675000, 0);
INSERT INTO `emon_akun_2019` VALUES (1079, '11622323', '34', 'Penyelenggaraan Laboratorium Balai Litbang Bangunan Hidraulik dan Geoteknik Keairan', '521213', 'Honor Output Kegiatan', 50000000, 0);
INSERT INTO `emon_akun_2019` VALUES (1080, '11622323', '34', 'Penyelenggaraan Laboratorium Balai Litbang Bangunan Hidraulik dan Geoteknik Keairan', '521219', 'Belanja Barang Non Operasional Lainnya', 76855000, 0);
INSERT INTO `emon_akun_2019` VALUES (1081, '11622323', '34', 'Penyelenggaraan Laboratorium Balai Litbang Bangunan Hidraulik dan Geoteknik Keairan', '521811', 'Belanja Barang Untuk Persediaan Barang Konsumsi', 40000000, 0);
INSERT INTO `emon_akun_2019` VALUES (1082, '11622323', '34', 'Penyelenggaraan Laboratorium Balai Litbang Bangunan Hidraulik dan Geoteknik Keairan', '522141', 'Belanja Sewa', 18811000, 0);
INSERT INTO `emon_akun_2019` VALUES (1083, '11622323', '34', 'Penyelenggaraan Laboratorium Balai Litbang Bangunan Hidraulik dan Geoteknik Keairan', '522151', 'Belanja Jasa Profesi', 38400000, 0);
INSERT INTO `emon_akun_2019` VALUES (1084, '11622323', '34', 'Penyelenggaraan Laboratorium Balai Litbang Bangunan Hidraulik dan Geoteknik Keairan', '524111', 'Belanja perjalanan biasa', 58107000, 0);
INSERT INTO `emon_akun_2019` VALUES (1085, '11622323', '35', 'Dokumen Dam Operational Improvement And Safety Project II', '521211', 'Belanja Bahan', 6562000, 0);
INSERT INTO `emon_akun_2019` VALUES (1086, '11622323', '35', 'Dokumen Dam Operational Improvement And Safety Project II', '521811', 'Belanja Barang Untuk Persediaan Barang Konsumsi', 30000000, 0);
INSERT INTO `emon_akun_2019` VALUES (1087, '11622323', '35', 'Dokumen Dam Operational Improvement And Safety Project II', '522131', 'Belanja Jasa Konsultan', 232000000, 0);
INSERT INTO `emon_akun_2019` VALUES (1088, '11622323', '35', 'Dokumen Dam Operational Improvement And Safety Project II', '522141', 'Belanja Sewa', 16398000, 0);
INSERT INTO `emon_akun_2019` VALUES (1089, '11622323', '35', 'Dokumen Dam Operational Improvement And Safety Project II', '522151', 'Belanja Jasa Profesi', 18000000, 0);
INSERT INTO `emon_akun_2019` VALUES (1090, '11622323', '35', 'Dokumen Dam Operational Improvement And Safety Project II', '524111', 'Belanja perjalanan biasa', 129040000, 0);
INSERT INTO `emon_akun_2019` VALUES (1091, '11622323', '35', 'Dokumen Dam Operational Improvement And Safety Project II', '532111', 'Belanja Modal Peralatan dan Mesin', 13121000000, 0);
INSERT INTO `emon_akun_2019` VALUES (1092, '11622323', '35', 'Dokumen Dam Operational Improvement And Safety Project II', '533121', 'Belanja Penambahan Nilai Gedung dan Bangunan', 10000000000, 0);
INSERT INTO `emon_akun_2019` VALUES (1093, '11622323', '36', 'Kesekretariatan Lembaga Inspeksi Bidang Sumber Daya Air', '521211', 'Belanja Bahan', 14260000, 0);
INSERT INTO `emon_akun_2019` VALUES (1094, '11622323', '36', 'Kesekretariatan Lembaga Inspeksi Bidang Sumber Daya Air', '521811', 'Belanja Barang Untuk Persediaan Barang Konsumsi', 7200000, 0);
INSERT INTO `emon_akun_2019` VALUES (1095, '11622323', '36', 'Kesekretariatan Lembaga Inspeksi Bidang Sumber Daya Air', '522141', 'Belanja Sewa', 9320000, 0);
INSERT INTO `emon_akun_2019` VALUES (1096, '11622323', '36', 'Kesekretariatan Lembaga Inspeksi Bidang Sumber Daya Air', '522151', 'Belanja Jasa Profesi', 43200000, 0);
INSERT INTO `emon_akun_2019` VALUES (1097, '11622323', '36', 'Kesekretariatan Lembaga Inspeksi Bidang Sumber Daya Air', '524111', 'Belanja perjalanan biasa', 35672000, 0);
INSERT INTO `emon_akun_2019` VALUES (1098, '11622323', '37', 'Layanan Inspeksi Kinerja Pos Duga Air Balai Litbang HITA', '521211', 'Belanja Bahan', 3600000, 0);
INSERT INTO `emon_akun_2019` VALUES (1099, '11622323', '37', 'Layanan Inspeksi Kinerja Pos Duga Air Balai Litbang HITA', '521213', 'Honor Output Kegiatan', 7200000, 0);
INSERT INTO `emon_akun_2019` VALUES (1100, '11622323', '37', 'Layanan Inspeksi Kinerja Pos Duga Air Balai Litbang HITA', '521219', 'Belanja Barang Non Operasional Lainnya', 25060000, 0);
INSERT INTO `emon_akun_2019` VALUES (1101, '11622323', '37', 'Layanan Inspeksi Kinerja Pos Duga Air Balai Litbang HITA', '521811', 'Belanja Barang Untuk Persediaan Barang Konsumsi', 5200000, 0);
INSERT INTO `emon_akun_2019` VALUES (1102, '11622323', '37', 'Layanan Inspeksi Kinerja Pos Duga Air Balai Litbang HITA', '522141', 'Belanja Sewa', 4774000, 0);
INSERT INTO `emon_akun_2019` VALUES (1103, '11622323', '37', 'Layanan Inspeksi Kinerja Pos Duga Air Balai Litbang HITA', '522151', 'Belanja Jasa Profesi', 16200000, 0);
INSERT INTO `emon_akun_2019` VALUES (1104, '11622323', '37', 'Layanan Inspeksi Kinerja Pos Duga Air Balai Litbang HITA', '524111', 'Belanja perjalanan biasa', 37642000, 0);
INSERT INTO `emon_akun_2019` VALUES (1105, '11622323', '38', 'Layanan Inspeksi Lingkup Kinerja Instalasi Pengolahan Air Limbah Balai Litbang LK', '521211', 'Belanja Bahan', 6685000, 0);
INSERT INTO `emon_akun_2019` VALUES (1106, '11622323', '38', 'Layanan Inspeksi Lingkup Kinerja Instalasi Pengolahan Air Limbah Balai Litbang LK', '521213', 'Honor Output Kegiatan', 4800000, 0);
INSERT INTO `emon_akun_2019` VALUES (1107, '11622323', '38', 'Layanan Inspeksi Lingkup Kinerja Instalasi Pengolahan Air Limbah Balai Litbang LK', '521219', 'Belanja Barang Non Operasional Lainnya', 35051000, 0);
INSERT INTO `emon_akun_2019` VALUES (1108, '11622323', '38', 'Layanan Inspeksi Lingkup Kinerja Instalasi Pengolahan Air Limbah Balai Litbang LK', '521811', 'Belanja Barang Untuk Persediaan Barang Konsumsi', 4800000, 0);
INSERT INTO `emon_akun_2019` VALUES (1109, '11622323', '38', 'Layanan Inspeksi Lingkup Kinerja Instalasi Pengolahan Air Limbah Balai Litbang LK', '522141', 'Belanja Sewa', 9320000, 0);
INSERT INTO `emon_akun_2019` VALUES (1110, '11622323', '38', 'Layanan Inspeksi Lingkup Kinerja Instalasi Pengolahan Air Limbah Balai Litbang LK', '522151', 'Belanja Jasa Profesi', 22200000, 0);
INSERT INTO `emon_akun_2019` VALUES (1111, '11622323', '38', 'Layanan Inspeksi Lingkup Kinerja Instalasi Pengolahan Air Limbah Balai Litbang LK', '524111', 'Belanja perjalanan biasa', 23320000, 0);
INSERT INTO `emon_akun_2019` VALUES (1112, '11622323', '39', 'Layanan Inspeksi Kinerja Sistem Irigasi Balai Litbang Irigasi', '521211', 'Belanja Bahan', 3800000, 0);
INSERT INTO `emon_akun_2019` VALUES (1113, '11622323', '39', 'Layanan Inspeksi Kinerja Sistem Irigasi Balai Litbang Irigasi', '521213', 'Honor Output Kegiatan', 8450000, 0);
INSERT INTO `emon_akun_2019` VALUES (1114, '11622323', '39', 'Layanan Inspeksi Kinerja Sistem Irigasi Balai Litbang Irigasi', '521219', 'Belanja Barang Non Operasional Lainnya', 5600000, 0);
INSERT INTO `emon_akun_2019` VALUES (1115, '11622323', '39', 'Layanan Inspeksi Kinerja Sistem Irigasi Balai Litbang Irigasi', '521811', 'Belanja Barang Untuk Persediaan Barang Konsumsi', 4000000, 0);
INSERT INTO `emon_akun_2019` VALUES (1116, '11622323', '39', 'Layanan Inspeksi Kinerja Sistem Irigasi Balai Litbang Irigasi', '522141', 'Belanja Sewa', 8370000, 0);
INSERT INTO `emon_akun_2019` VALUES (1117, '11622323', '39', 'Layanan Inspeksi Kinerja Sistem Irigasi Balai Litbang Irigasi', '522151', 'Belanja Jasa Profesi', 28800000, 0);
INSERT INTO `emon_akun_2019` VALUES (1118, '11622323', '39', 'Layanan Inspeksi Kinerja Sistem Irigasi Balai Litbang Irigasi', '524111', 'Belanja perjalanan biasa', 46894000, 0);
INSERT INTO `emon_akun_2019` VALUES (1119, '11622323', '40', 'Layanan Inspeksi Kinerja Bangunan Sabo Balai Litbang Sabo', '521211', 'Belanja Bahan', 3653000, 0);
INSERT INTO `emon_akun_2019` VALUES (1120, '11622323', '40', 'Layanan Inspeksi Kinerja Bangunan Sabo Balai Litbang Sabo', '521213', 'Honor Output Kegiatan', 1440000, 0);
INSERT INTO `emon_akun_2019` VALUES (1121, '11622323', '40', 'Layanan Inspeksi Kinerja Bangunan Sabo Balai Litbang Sabo', '521219', 'Belanja Barang Non Operasional Lainnya', 9100000, 0);
INSERT INTO `emon_akun_2019` VALUES (1122, '11622323', '40', 'Layanan Inspeksi Kinerja Bangunan Sabo Balai Litbang Sabo', '521811', 'Belanja Barang Untuk Persediaan Barang Konsumsi', 4000000, 0);
INSERT INTO `emon_akun_2019` VALUES (1123, '11622323', '40', 'Layanan Inspeksi Kinerja Bangunan Sabo Balai Litbang Sabo', '522141', 'Belanja Sewa', 5820000, 0);
INSERT INTO `emon_akun_2019` VALUES (1124, '11622323', '40', 'Layanan Inspeksi Kinerja Bangunan Sabo Balai Litbang Sabo', '522151', 'Belanja Jasa Profesi', 21600000, 0);
INSERT INTO `emon_akun_2019` VALUES (1125, '11622323', '40', 'Layanan Inspeksi Kinerja Bangunan Sabo Balai Litbang Sabo', '524111', 'Belanja perjalanan biasa', 81292000, 0);
INSERT INTO `emon_akun_2019` VALUES (1126, '11622323', '41', 'Pengelolaan Basis Data dan TIK', '521211', 'Belanja Bahan', 19070000, 0);
INSERT INTO `emon_akun_2019` VALUES (1127, '11622323', '41', 'Pengelolaan Basis Data dan TIK', '521219', 'Belanja Barang Non Operasional Lainnya', 220000000, 0);
INSERT INTO `emon_akun_2019` VALUES (1128, '11622323', '41', 'Pengelolaan Basis Data dan TIK', '521811', 'Belanja Barang Untuk Persediaan Barang Konsumsi', 20000000, 0);
INSERT INTO `emon_akun_2019` VALUES (1129, '11622323', '41', 'Pengelolaan Basis Data dan TIK', '522141', 'Belanja Sewa', 10974000, 0);
INSERT INTO `emon_akun_2019` VALUES (1130, '11622323', '41', 'Pengelolaan Basis Data dan TIK', '522151', 'Belanja Jasa Profesi', 21600000, 0);
INSERT INTO `emon_akun_2019` VALUES (1131, '11622323', '41', 'Pengelolaan Basis Data dan TIK', '524111', 'Belanja perjalanan biasa', 98356000, 0);
INSERT INTO `emon_akun_2019` VALUES (1132, '11622323', '42', 'Pengelolaan Basis Data dan Sistem Informasi SDA Bidang Bangunan Hidraulik dan Geoteknik Keairan', '521211', 'Belanja Bahan', 7815000, 0);
INSERT INTO `emon_akun_2019` VALUES (1133, '11622323', '42', 'Pengelolaan Basis Data dan Sistem Informasi SDA Bidang Bangunan Hidraulik dan Geoteknik Keairan', '521213', 'Honor Output Kegiatan', 20000000, 0);
INSERT INTO `emon_akun_2019` VALUES (1134, '11622323', '42', 'Pengelolaan Basis Data dan Sistem Informasi SDA Bidang Bangunan Hidraulik dan Geoteknik Keairan', '521219', 'Belanja Barang Non Operasional Lainnya', 79404000, 0);
INSERT INTO `emon_akun_2019` VALUES (1135, '11622323', '42', 'Pengelolaan Basis Data dan Sistem Informasi SDA Bidang Bangunan Hidraulik dan Geoteknik Keairan', '521811', 'Belanja Barang Untuk Persediaan Barang Konsumsi', 25000000, 0);
INSERT INTO `emon_akun_2019` VALUES (1136, '11622323', '42', 'Pengelolaan Basis Data dan Sistem Informasi SDA Bidang Bangunan Hidraulik dan Geoteknik Keairan', '522141', 'Belanja Sewa', 46096000, 0);
INSERT INTO `emon_akun_2019` VALUES (1137, '11622323', '42', 'Pengelolaan Basis Data dan Sistem Informasi SDA Bidang Bangunan Hidraulik dan Geoteknik Keairan', '522151', 'Belanja Jasa Profesi', 40500000, 0);
INSERT INTO `emon_akun_2019` VALUES (1138, '11622323', '42', 'Pengelolaan Basis Data dan Sistem Informasi SDA Bidang Bangunan Hidraulik dan Geoteknik Keairan', '524111', 'Belanja perjalanan biasa', 236985000, 0);
INSERT INTO `emon_akun_2019` VALUES (1139, '11622323', '43', 'Evaluasi Penerapan Teknologi dan Pengelolaan Sistem Informasi Bidang Lingkungan Keairan', '521211', 'Belanja Bahan', 16110000, 0);
INSERT INTO `emon_akun_2019` VALUES (1140, '11622323', '43', 'Evaluasi Penerapan Teknologi dan Pengelolaan Sistem Informasi Bidang Lingkungan Keairan', '521213', 'Honor Output Kegiatan', 22000000, 0);
INSERT INTO `emon_akun_2019` VALUES (1141, '11622323', '43', 'Evaluasi Penerapan Teknologi dan Pengelolaan Sistem Informasi Bidang Lingkungan Keairan', '521219', 'Belanja Barang Non Operasional Lainnya', 125324000, 0);
INSERT INTO `emon_akun_2019` VALUES (1142, '11622323', '43', 'Evaluasi Penerapan Teknologi dan Pengelolaan Sistem Informasi Bidang Lingkungan Keairan', '521811', 'Belanja Barang Untuk Persediaan Barang Konsumsi', 20000000, 0);
INSERT INTO `emon_akun_2019` VALUES (1143, '11622323', '43', 'Evaluasi Penerapan Teknologi dan Pengelolaan Sistem Informasi Bidang Lingkungan Keairan', '522141', 'Belanja Sewa', 41008000, 0);
INSERT INTO `emon_akun_2019` VALUES (1144, '11622323', '43', 'Evaluasi Penerapan Teknologi dan Pengelolaan Sistem Informasi Bidang Lingkungan Keairan', '522151', 'Belanja Jasa Profesi', 53200000, 0);
INSERT INTO `emon_akun_2019` VALUES (1145, '11622323', '43', 'Evaluasi Penerapan Teknologi dan Pengelolaan Sistem Informasi Bidang Lingkungan Keairan', '524111', 'Belanja perjalanan biasa', 176826000, 0);
INSERT INTO `emon_akun_2019` VALUES (1146, '11622323', '44', 'Pusat Studi Hidroinformatika Nasional', '521211', 'Belanja Bahan', 15601000, 0);
INSERT INTO `emon_akun_2019` VALUES (1147, '11622323', '44', 'Pusat Studi Hidroinformatika Nasional', '521213', 'Honor Output Kegiatan', 6560000, 0);
INSERT INTO `emon_akun_2019` VALUES (1148, '11622323', '44', 'Pusat Studi Hidroinformatika Nasional', '521219', 'Belanja Barang Non Operasional Lainnya', 66207000, 0);
INSERT INTO `emon_akun_2019` VALUES (1149, '11622323', '44', 'Pusat Studi Hidroinformatika Nasional', '521811', 'Belanja Barang Untuk Persediaan Barang Konsumsi', 10000000, 0);
INSERT INTO `emon_akun_2019` VALUES (1150, '11622323', '44', 'Pusat Studi Hidroinformatika Nasional', '522141', 'Belanja Sewa', 16776000, 0);
INSERT INTO `emon_akun_2019` VALUES (1151, '11622323', '44', 'Pusat Studi Hidroinformatika Nasional', '522151', 'Belanja Jasa Profesi', 51000000, 0);
INSERT INTO `emon_akun_2019` VALUES (1152, '11622323', '44', 'Pusat Studi Hidroinformatika Nasional', '522191', 'Belanja Jasa Lainnya', 202000000, 0);
INSERT INTO `emon_akun_2019` VALUES (1153, '11622323', '44', 'Pusat Studi Hidroinformatika Nasional', '524111', 'Belanja perjalanan biasa', 98196000, 0);
INSERT INTO `emon_akun_2019` VALUES (1154, '11622323', '45', 'Jaringan Hidrologi Secara Realtime', '521211', 'Belanja Bahan', 20550000, 0);
INSERT INTO `emon_akun_2019` VALUES (1155, '11622323', '45', 'Jaringan Hidrologi Secara Realtime', '521213', 'Honor Output Kegiatan', 76160000, 0);
INSERT INTO `emon_akun_2019` VALUES (1156, '11622323', '45', 'Jaringan Hidrologi Secara Realtime', '521219', 'Belanja Barang Non Operasional Lainnya', 175025000, 0);
INSERT INTO `emon_akun_2019` VALUES (1157, '11622323', '45', 'Jaringan Hidrologi Secara Realtime', '521811', 'Belanja Barang Untuk Persediaan Barang Konsumsi', 10000000, 0);
INSERT INTO `emon_akun_2019` VALUES (1158, '11622323', '45', 'Jaringan Hidrologi Secara Realtime', '522141', 'Belanja Sewa', 102740000, 0);
INSERT INTO `emon_akun_2019` VALUES (1159, '11622323', '45', 'Jaringan Hidrologi Secara Realtime', '522151', 'Belanja Jasa Profesi', 60800000, 0);
INSERT INTO `emon_akun_2019` VALUES (1160, '11622323', '45', 'Jaringan Hidrologi Secara Realtime', '524111', 'Belanja perjalanan biasa', 179448000, 0);
INSERT INTO `emon_akun_2019` VALUES (1161, '11622323', '46', 'Manajemen Pengelolaan Data dan Basis Data Hidrologi', '521211', 'Belanja Bahan', 36451000, 0);
INSERT INTO `emon_akun_2019` VALUES (1162, '11622323', '46', 'Manajemen Pengelolaan Data dan Basis Data Hidrologi', '521219', 'Belanja Barang Non Operasional Lainnya', 20000000, 0);
INSERT INTO `emon_akun_2019` VALUES (1163, '11622323', '46', 'Manajemen Pengelolaan Data dan Basis Data Hidrologi', '521811', 'Belanja Barang Untuk Persediaan Barang Konsumsi', 10000000, 0);
INSERT INTO `emon_akun_2019` VALUES (1164, '11622323', '46', 'Manajemen Pengelolaan Data dan Basis Data Hidrologi', '522141', 'Belanja Sewa', 25605000, 0);
INSERT INTO `emon_akun_2019` VALUES (1165, '11622323', '46', 'Manajemen Pengelolaan Data dan Basis Data Hidrologi', '522151', 'Belanja Jasa Profesi', 89100000, 0);
INSERT INTO `emon_akun_2019` VALUES (1166, '11622323', '46', 'Manajemen Pengelolaan Data dan Basis Data Hidrologi', '524111', 'Belanja perjalanan biasa', 417557000, 0);
INSERT INTO `emon_akun_2019` VALUES (1167, '11622323', '47', 'Dukungan, Pemantauan dan Evaluasi Teknis Hidrologi Wilayah Sungai', '521211', 'Belanja Bahan', 11235000, 0);
INSERT INTO `emon_akun_2019` VALUES (1168, '11622323', '47', 'Dukungan, Pemantauan dan Evaluasi Teknis Hidrologi Wilayah Sungai', '521213', 'Honor Output Kegiatan', 12000000, 0);
INSERT INTO `emon_akun_2019` VALUES (1169, '11622323', '47', 'Dukungan, Pemantauan dan Evaluasi Teknis Hidrologi Wilayah Sungai', '521219', 'Belanja Barang Non Operasional Lainnya', 20000000, 0);
INSERT INTO `emon_akun_2019` VALUES (1170, '11622323', '47', 'Dukungan, Pemantauan dan Evaluasi Teknis Hidrologi Wilayah Sungai', '521811', 'Belanja Barang Untuk Persediaan Barang Konsumsi', 10000000, 0);
INSERT INTO `emon_akun_2019` VALUES (1171, '11622323', '47', 'Dukungan, Pemantauan dan Evaluasi Teknis Hidrologi Wilayah Sungai', '522131', 'Belanja Jasa Konsultan', 737909000, 0);
INSERT INTO `emon_akun_2019` VALUES (1172, '11622323', '47', 'Dukungan, Pemantauan dan Evaluasi Teknis Hidrologi Wilayah Sungai', '522141', 'Belanja Sewa', 29562000, 0);
INSERT INTO `emon_akun_2019` VALUES (1173, '11622323', '47', 'Dukungan, Pemantauan dan Evaluasi Teknis Hidrologi Wilayah Sungai', '522151', 'Belanja Jasa Profesi', 57600000, 0);
INSERT INTO `emon_akun_2019` VALUES (1174, '11622323', '47', 'Dukungan, Pemantauan dan Evaluasi Teknis Hidrologi Wilayah Sungai', '524111', 'Belanja perjalanan biasa', 138518000, 0);
INSERT INTO `emon_akun_2019` VALUES (1175, '11622323', '48', 'Pengembangan Knowledge Management dan Sistem Informasi Terintegrasi Puslitbang SDA', '521211', 'Belanja Bahan', 145178000, 0);
INSERT INTO `emon_akun_2019` VALUES (1176, '11622323', '48', 'Pengembangan Knowledge Management dan Sistem Informasi Terintegrasi Puslitbang SDA', '521811', 'Belanja Barang Untuk Persediaan Barang Konsumsi', 40000000, 0);
INSERT INTO `emon_akun_2019` VALUES (1177, '11622323', '48', 'Pengembangan Knowledge Management dan Sistem Informasi Terintegrasi Puslitbang SDA', '522141', 'Belanja Sewa', 64505000, 0);
INSERT INTO `emon_akun_2019` VALUES (1178, '11622323', '48', 'Pengembangan Knowledge Management dan Sistem Informasi Terintegrasi Puslitbang SDA', '522151', 'Belanja Jasa Profesi', 475200000, 0);
INSERT INTO `emon_akun_2019` VALUES (1179, '11622323', '48', 'Pengembangan Knowledge Management dan Sistem Informasi Terintegrasi Puslitbang SDA', '524111', 'Belanja perjalanan biasa', 755940000, 0);
INSERT INTO `emon_akun_2019` VALUES (1180, '11622323', '49', 'Administrasi Kegiatan PNBP', '521115', 'Honor Operasional Satuan Kerja', 51840000, 0);
INSERT INTO `emon_akun_2019` VALUES (1181, '11622323', '49', 'Administrasi Kegiatan PNBP', '521811', 'Belanja Barang Untuk Persediaan Barang Konsumsi', 40000000, 0);
INSERT INTO `emon_akun_2019` VALUES (1182, '11622323', '49', 'Administrasi Kegiatan PNBP', '522151', 'Belanja Jasa Profesi', 21600000, 0);
INSERT INTO `emon_akun_2019` VALUES (1183, '11622323', '49', 'Administrasi Kegiatan PNBP', '524111', 'Belanja perjalanan biasa', 61354000, 0);
INSERT INTO `emon_akun_2019` VALUES (1184, '11622323', '49', 'Administrasi Kegiatan PNBP', '524113', 'Belanja Perjalanan Dinas Dalam Kota', 4590000, 0);
INSERT INTO `emon_akun_2019` VALUES (1185, '11622323', '49', 'Administrasi Kegiatan PNBP', '532111', 'Belanja Modal Peralatan dan Mesin', 18166000, 0);
INSERT INTO `emon_akun_2019` VALUES (1186, '11622323', '50', 'Jasa Pelayanan Litbang Bidang SDA', '521211', 'Belanja Bahan', 93600000, 0);
INSERT INTO `emon_akun_2019` VALUES (1187, '11622323', '50', 'Jasa Pelayanan Litbang Bidang SDA', '521213', 'Honor Output Kegiatan', 225520000, 0);
INSERT INTO `emon_akun_2019` VALUES (1188, '11622323', '50', 'Jasa Pelayanan Litbang Bidang SDA', '521219', 'Belanja Barang Non Operasional Lainnya', 1668632000, 0);
INSERT INTO `emon_akun_2019` VALUES (1189, '11622323', '50', 'Jasa Pelayanan Litbang Bidang SDA', '521811', 'Belanja Barang Untuk Persediaan Barang Konsumsi', 40000000, 0);
INSERT INTO `emon_akun_2019` VALUES (1190, '11622323', '50', 'Jasa Pelayanan Litbang Bidang SDA', '522141', 'Belanja Sewa', 15194000, 0);
INSERT INTO `emon_akun_2019` VALUES (1191, '11622323', '50', 'Jasa Pelayanan Litbang Bidang SDA', '522151', 'Belanja Jasa Profesi', 81000000, 0);
INSERT INTO `emon_akun_2019` VALUES (1192, '11622323', '50', 'Jasa Pelayanan Litbang Bidang SDA', '524111', 'Belanja perjalanan biasa', 84254000, 0);
INSERT INTO `emon_akun_2019` VALUES (1193, '11622323', '50', 'Jasa Pelayanan Litbang Bidang SDA', '524113', 'Belanja Perjalanan Dinas Dalam Kota', 4250000, 0);
INSERT INTO `emon_akun_2019` VALUES (1194, '11622323', '50', 'Jasa Pelayanan Litbang Bidang SDA', '532111', 'Belanja Modal Peralatan dan Mesin', 40000000, 0);
INSERT INTO `emon_akun_2019` VALUES (1195, '11622323', '51', 'Penyusunan Rencana Kerja dan Anggaran', '521211', 'Belanja Bahan', 155001000, 0);
INSERT INTO `emon_akun_2019` VALUES (1196, '11622323', '51', 'Penyusunan Rencana Kerja dan Anggaran', '521811', 'Belanja Barang Untuk Persediaan Barang Konsumsi', 30000000, 0);
INSERT INTO `emon_akun_2019` VALUES (1197, '11622323', '51', 'Penyusunan Rencana Kerja dan Anggaran', '522141', 'Belanja Sewa', 52192000, 0);
INSERT INTO `emon_akun_2019` VALUES (1198, '11622323', '51', 'Penyusunan Rencana Kerja dan Anggaran', '522151', 'Belanja Jasa Profesi', 320000000, 0);
INSERT INTO `emon_akun_2019` VALUES (1199, '11622323', '51', 'Penyusunan Rencana Kerja dan Anggaran', '524111', 'Belanja perjalanan biasa', 417647000, 0);
INSERT INTO `emon_akun_2019` VALUES (1200, '11622323', '51', 'Penyusunan Rencana Kerja dan Anggaran', '524113', 'Belanja Perjalanan Dinas Dalam Kota', 25160000, 0);
INSERT INTO `emon_akun_2019` VALUES (1201, '11622323', '52', 'Pemantauan, Evaluasi dan Pelaporan', '521211', 'Belanja Bahan', 152993000, 0);
INSERT INTO `emon_akun_2019` VALUES (1202, '11622323', '52', 'Pemantauan, Evaluasi dan Pelaporan', '521811', 'Belanja Barang Untuk Persediaan Barang Konsumsi', 30000000, 0);
INSERT INTO `emon_akun_2019` VALUES (1203, '11622323', '52', 'Pemantauan, Evaluasi dan Pelaporan', '522141', 'Belanja Sewa', 66560000, 0);
INSERT INTO `emon_akun_2019` VALUES (1204, '11622323', '52', 'Pemantauan, Evaluasi dan Pelaporan', '522151', 'Belanja Jasa Profesi', 518800000, 0);
INSERT INTO `emon_akun_2019` VALUES (1205, '11622323', '52', 'Pemantauan, Evaluasi dan Pelaporan', '524111', 'Belanja perjalanan biasa', 725527000, 0);
INSERT INTO `emon_akun_2019` VALUES (1206, '11622323', '52', 'Pemantauan, Evaluasi dan Pelaporan', '524113', 'Belanja Perjalanan Dinas Dalam Kota', 6120000, 0);
INSERT INTO `emon_akun_2019` VALUES (1207, '11622323', '53', 'Pengelolaan Keuangan', '521211', 'Belanja Bahan', 52785000, 0);
INSERT INTO `emon_akun_2019` VALUES (1208, '11622323', '53', 'Pengelolaan Keuangan', '521213', 'Honor Output Kegiatan', 22800000, 0);
INSERT INTO `emon_akun_2019` VALUES (1209, '11622323', '53', 'Pengelolaan Keuangan', '521219', 'Belanja Barang Non Operasional Lainnya', 3350000, 0);
INSERT INTO `emon_akun_2019` VALUES (1210, '11622323', '53', 'Pengelolaan Keuangan', '521811', 'Belanja Barang Untuk Persediaan Barang Konsumsi', 15000000, 0);
INSERT INTO `emon_akun_2019` VALUES (1211, '11622323', '53', 'Pengelolaan Keuangan', '522151', 'Belanja Jasa Profesi', 43200000, 0);
INSERT INTO `emon_akun_2019` VALUES (1212, '11622323', '53', 'Pengelolaan Keuangan', '524111', 'Belanja perjalanan biasa', 369493000, 0);
INSERT INTO `emon_akun_2019` VALUES (1213, '11622323', '53', 'Pengelolaan Keuangan', '524113', 'Belanja Perjalanan Dinas Dalam Kota', 5400000, 0);
INSERT INTO `emon_akun_2019` VALUES (1214, '11622323', '54', 'Pengembangan Sumber Daya Manusia dan Pengelolaan Administrasi Kepegawaian', '521211', 'Belanja Bahan', 188086000, 0);
INSERT INTO `emon_akun_2019` VALUES (1215, '11622323', '54', 'Pengembangan Sumber Daya Manusia dan Pengelolaan Administrasi Kepegawaian', '521219', 'Belanja Barang Non Operasional Lainnya', 279500000, 0);
INSERT INTO `emon_akun_2019` VALUES (1216, '11622323', '54', 'Pengembangan Sumber Daya Manusia dan Pengelolaan Administrasi Kepegawaian', '521811', 'Belanja Barang Untuk Persediaan Barang Konsumsi', 25000000, 0);
INSERT INTO `emon_akun_2019` VALUES (1217, '11622323', '54', 'Pengembangan Sumber Daya Manusia dan Pengelolaan Administrasi Kepegawaian', '522141', 'Belanja Sewa', 51539000, 0);
INSERT INTO `emon_akun_2019` VALUES (1218, '11622323', '54', 'Pengembangan Sumber Daya Manusia dan Pengelolaan Administrasi Kepegawaian', '522151', 'Belanja Jasa Profesi', 464000000, 0);
INSERT INTO `emon_akun_2019` VALUES (1219, '11622323', '54', 'Pengembangan Sumber Daya Manusia dan Pengelolaan Administrasi Kepegawaian', '524111', 'Belanja perjalanan biasa', 1059982000, 0);
INSERT INTO `emon_akun_2019` VALUES (1220, '11622323', '54', 'Pengembangan Sumber Daya Manusia dan Pengelolaan Administrasi Kepegawaian', '524113', 'Belanja Perjalanan Dinas Dalam Kota', 27200000, 0);
INSERT INTO `emon_akun_2019` VALUES (1221, '11622323', '54', 'Pengembangan Sumber Daya Manusia dan Pengelolaan Administrasi Kepegawaian', '524219', 'Belanja perjalanan lainnya - luar negeri', 212500000, 0);
INSERT INTO `emon_akun_2019` VALUES (1222, '11622323', '55', 'Penyelenggaraan Seminar dan Lomba Karya Ilmiah', '521211', 'Belanja Bahan', 189832000, 0);
INSERT INTO `emon_akun_2019` VALUES (1223, '11622323', '55', 'Penyelenggaraan Seminar dan Lomba Karya Ilmiah', '521219', 'Belanja Barang Non Operasional Lainnya', 105000000, 0);
INSERT INTO `emon_akun_2019` VALUES (1224, '11622323', '55', 'Penyelenggaraan Seminar dan Lomba Karya Ilmiah', '521811', 'Belanja Barang Untuk Persediaan Barang Konsumsi', 30000000, 0);
INSERT INTO `emon_akun_2019` VALUES (1225, '11622323', '55', 'Penyelenggaraan Seminar dan Lomba Karya Ilmiah', '522141', 'Belanja Sewa', 27082000, 0);
INSERT INTO `emon_akun_2019` VALUES (1226, '11622323', '55', 'Penyelenggaraan Seminar dan Lomba Karya Ilmiah', '522151', 'Belanja Jasa Profesi', 238600000, 0);
INSERT INTO `emon_akun_2019` VALUES (1227, '11622323', '55', 'Penyelenggaraan Seminar dan Lomba Karya Ilmiah', '524111', 'Belanja perjalanan biasa', 400269000, 0);
INSERT INTO `emon_akun_2019` VALUES (1228, '11622323', '55', 'Penyelenggaraan Seminar dan Lomba Karya Ilmiah', '524113', 'Belanja Perjalanan Dinas Dalam Kota', 5950000, 0);
INSERT INTO `emon_akun_2019` VALUES (1229, '11622323', '55', 'Penyelenggaraan Seminar dan Lomba Karya Ilmiah', '524119', 'Belanja Perjalanan Dinas Paket Meeting Luar Kota', 5000, 0);
INSERT INTO `emon_akun_2019` VALUES (1230, '11622323', '56', 'Pengelolaan HKI', '521211', 'Belanja Bahan', 6793000, 0);
INSERT INTO `emon_akun_2019` VALUES (1231, '11622323', '56', 'Pengelolaan HKI', '521219', 'Belanja Barang Non Operasional Lainnya', 19450000, 0);
INSERT INTO `emon_akun_2019` VALUES (1232, '11622323', '56', 'Pengelolaan HKI', '521811', 'Belanja Barang Untuk Persediaan Barang Konsumsi', 3000000, 0);
INSERT INTO `emon_akun_2019` VALUES (1233, '11622323', '56', 'Pengelolaan HKI', '522141', 'Belanja Sewa', 3728000, 0);
INSERT INTO `emon_akun_2019` VALUES (1234, '11622323', '56', 'Pengelolaan HKI', '522151', 'Belanja Jasa Profesi', 24800000, 0);
INSERT INTO `emon_akun_2019` VALUES (1235, '11622323', '56', 'Pengelolaan HKI', '524111', 'Belanja perjalanan biasa', 32229000, 0);
INSERT INTO `emon_akun_2019` VALUES (1236, '11622323', '57', 'Pengelolaan dan Pembinaan  BMN dan Tata Persuratan dan Kearsipan', '521211', 'Belanja Bahan', 17757000, 0);
INSERT INTO `emon_akun_2019` VALUES (1237, '11622323', '57', 'Pengelolaan dan Pembinaan  BMN dan Tata Persuratan dan Kearsipan', '521219', 'Belanja Barang Non Operasional Lainnya', 58000000, 0);
INSERT INTO `emon_akun_2019` VALUES (1238, '11622323', '57', 'Pengelolaan dan Pembinaan  BMN dan Tata Persuratan dan Kearsipan', '521811', 'Belanja Barang Untuk Persediaan Barang Konsumsi', 20000000, 0);
INSERT INTO `emon_akun_2019` VALUES (1239, '11622323', '57', 'Pengelolaan dan Pembinaan  BMN dan Tata Persuratan dan Kearsipan', '522141', 'Belanja Sewa', 30756000, 0);
INSERT INTO `emon_akun_2019` VALUES (1240, '11622323', '57', 'Pengelolaan dan Pembinaan  BMN dan Tata Persuratan dan Kearsipan', '522151', 'Belanja Jasa Profesi', 35000000, 0);
INSERT INTO `emon_akun_2019` VALUES (1241, '11622323', '57', 'Pengelolaan dan Pembinaan  BMN dan Tata Persuratan dan Kearsipan', '524111', 'Belanja perjalanan biasa', 469916000, 0);
INSERT INTO `emon_akun_2019` VALUES (1242, '11622323', '57', 'Pengelolaan dan Pembinaan  BMN dan Tata Persuratan dan Kearsipan', '524113', 'Belanja Perjalanan Dinas Dalam Kota', 3600000, 0);
INSERT INTO `emon_akun_2019` VALUES (1243, '11622323', '58', 'Humas dan Protokoler', '521211', 'Belanja Bahan', 35205000, 0);
INSERT INTO `emon_akun_2019` VALUES (1244, '11622323', '58', 'Humas dan Protokoler', '521213', 'Honor Output Kegiatan', 4800000, 0);
INSERT INTO `emon_akun_2019` VALUES (1245, '11622323', '58', 'Humas dan Protokoler', '521219', 'Belanja Barang Non Operasional Lainnya', 238000000, 0);
INSERT INTO `emon_akun_2019` VALUES (1246, '11622323', '58', 'Humas dan Protokoler', '521811', 'Belanja Barang Untuk Persediaan Barang Konsumsi', 20000000, 0);
INSERT INTO `emon_akun_2019` VALUES (1247, '11622323', '58', 'Humas dan Protokoler', '522151', 'Belanja Jasa Profesi', 62400000, 0);
INSERT INTO `emon_akun_2019` VALUES (1248, '11622323', '58', 'Humas dan Protokoler', '522191', 'Belanja Jasa Lainnya', 180342000, 0);
INSERT INTO `emon_akun_2019` VALUES (1249, '11622323', '58', 'Humas dan Protokoler', '524111', 'Belanja perjalanan biasa', 134253000, 0);
INSERT INTO `emon_akun_2019` VALUES (1250, '11622323', '58', 'Humas dan Protokoler', '532111', 'Belanja Modal Peralatan dan Mesin', 75000000, 0);
INSERT INTO `emon_akun_2019` VALUES (1251, '11622323', '59', 'Kerjasama Dalam dan Luar Negeri', '521211', 'Belanja Bahan', 96731000, 0);
INSERT INTO `emon_akun_2019` VALUES (1252, '11622323', '59', 'Kerjasama Dalam dan Luar Negeri', '521811', 'Belanja Barang Untuk Persediaan Barang Konsumsi', 20000000, 0);
INSERT INTO `emon_akun_2019` VALUES (1253, '11622323', '59', 'Kerjasama Dalam dan Luar Negeri', '522141', 'Belanja Sewa', 45928000, 0);
INSERT INTO `emon_akun_2019` VALUES (1254, '11622323', '59', 'Kerjasama Dalam dan Luar Negeri', '522151', 'Belanja Jasa Profesi', 49700000, 0);
INSERT INTO `emon_akun_2019` VALUES (1255, '11622323', '59', 'Kerjasama Dalam dan Luar Negeri', '524111', 'Belanja perjalanan biasa', 284362000, 0);
INSERT INTO `emon_akun_2019` VALUES (1256, '11622323', '59', 'Kerjasama Dalam dan Luar Negeri', '524219', 'Belanja perjalanan lainnya - luar negeri', 100974000, 0);
INSERT INTO `emon_akun_2019` VALUES (1257, '11622323', '60', 'Peningkatan Sarana Kelitbangan', '521211', 'Belanja Bahan', 110074000, 0);
INSERT INTO `emon_akun_2019` VALUES (1258, '11622323', '60', 'Peningkatan Sarana Kelitbangan', '521219', 'Belanja Barang Non Operasional Lainnya', 946500000, 0);
INSERT INTO `emon_akun_2019` VALUES (1259, '11622323', '60', 'Peningkatan Sarana Kelitbangan', '521811', 'Belanja Barang Untuk Persediaan Barang Konsumsi', 20000000, 0);
INSERT INTO `emon_akun_2019` VALUES (1260, '11622323', '60', 'Peningkatan Sarana Kelitbangan', '522141', 'Belanja Sewa', 14446000, 0);
INSERT INTO `emon_akun_2019` VALUES (1261, '11622323', '60', 'Peningkatan Sarana Kelitbangan', '522151', 'Belanja Jasa Profesi', 116400000, 0);
INSERT INTO `emon_akun_2019` VALUES (1262, '11622323', '60', 'Peningkatan Sarana Kelitbangan', '524111', 'Belanja perjalanan biasa', 589180000, 0);
INSERT INTO `emon_akun_2019` VALUES (1263, '11622323', '60', 'Peningkatan Sarana Kelitbangan', '524113', 'Belanja Perjalanan Dinas Dalam Kota', 3400000, 0);
INSERT INTO `emon_akun_2019` VALUES (1264, '11622323', '61', 'Penyelenggaraan Perpustakaan', '521211', 'Belanja Bahan', 12269000, 0);
INSERT INTO `emon_akun_2019` VALUES (1265, '11622323', '61', 'Penyelenggaraan Perpustakaan', '521219', 'Belanja Barang Non Operasional Lainnya', 80000000, 0);
INSERT INTO `emon_akun_2019` VALUES (1266, '11622323', '61', 'Penyelenggaraan Perpustakaan', '521811', 'Belanja Barang Untuk Persediaan Barang Konsumsi', 20000000, 0);
INSERT INTO `emon_akun_2019` VALUES (1267, '11622323', '61', 'Penyelenggaraan Perpustakaan', '522141', 'Belanja Sewa', 9320000, 0);
INSERT INTO `emon_akun_2019` VALUES (1268, '11622323', '61', 'Penyelenggaraan Perpustakaan', '522151', 'Belanja Jasa Profesi', 7200000, 0);
INSERT INTO `emon_akun_2019` VALUES (1269, '11622323', '61', 'Penyelenggaraan Perpustakaan', '524111', 'Belanja perjalanan biasa', 79501000, 0);
INSERT INTO `emon_akun_2019` VALUES (1270, '11622323', '61', 'Penyelenggaraan Perpustakaan', '524113', 'Belanja Perjalanan Dinas Dalam Kota', 5100000, 0);
INSERT INTO `emon_akun_2019` VALUES (1271, '11622323', '62', 'Penyusunan Dan Pencetakan Jurnal Bidang Sumber Daya Air', '521211', 'Belanja Bahan', 265488000, 0);
INSERT INTO `emon_akun_2019` VALUES (1272, '11622323', '62', 'Penyusunan Dan Pencetakan Jurnal Bidang Sumber Daya Air', '521213', 'Honor Output Kegiatan', 103240000, 0);
INSERT INTO `emon_akun_2019` VALUES (1273, '11622323', '62', 'Penyusunan Dan Pencetakan Jurnal Bidang Sumber Daya Air', '521219', 'Belanja Barang Non Operasional Lainnya', 160000000, 0);
INSERT INTO `emon_akun_2019` VALUES (1274, '11622323', '62', 'Penyusunan Dan Pencetakan Jurnal Bidang Sumber Daya Air', '521811', 'Belanja Barang Untuk Persediaan Barang Konsumsi', 21500000, 0);
INSERT INTO `emon_akun_2019` VALUES (1275, '11622323', '62', 'Penyusunan Dan Pencetakan Jurnal Bidang Sumber Daya Air', '522141', 'Belanja Sewa', 10252000, 0);
INSERT INTO `emon_akun_2019` VALUES (1276, '11622323', '62', 'Penyusunan Dan Pencetakan Jurnal Bidang Sumber Daya Air', '522151', 'Belanja Jasa Profesi', 81700000, 0);
INSERT INTO `emon_akun_2019` VALUES (1277, '11622323', '62', 'Penyusunan Dan Pencetakan Jurnal Bidang Sumber Daya Air', '524111', 'Belanja perjalanan biasa', 57820000, 0);
INSERT INTO `emon_akun_2019` VALUES (1278, '11622323', '63', 'Administrasi Kesatkeran', '521115', 'Honor Operasional Satuan Kerja', 261840000, 0);
INSERT INTO `emon_akun_2019` VALUES (1279, '11622323', '63', 'Administrasi Kesatkeran', '521211', 'Belanja Bahan', 123928000, 0);
INSERT INTO `emon_akun_2019` VALUES (1280, '11622323', '63', 'Administrasi Kesatkeran', '521213', 'Honor Output Kegiatan', 13620000, 0);
INSERT INTO `emon_akun_2019` VALUES (1281, '11622323', '63', 'Administrasi Kesatkeran', '521811', 'Belanja Barang Untuk Persediaan Barang Konsumsi', 33087000, 0);
INSERT INTO `emon_akun_2019` VALUES (1282, '11622323', '63', 'Administrasi Kesatkeran', '522141', 'Belanja Sewa', 55920000, 0);
INSERT INTO `emon_akun_2019` VALUES (1283, '11622323', '63', 'Administrasi Kesatkeran', '522151', 'Belanja Jasa Profesi', 149400000, 0);
INSERT INTO `emon_akun_2019` VALUES (1284, '11622323', '63', 'Administrasi Kesatkeran', '524111', 'Belanja perjalanan biasa', 348874000, 0);
INSERT INTO `emon_akun_2019` VALUES (1285, '11622323', '63', 'Administrasi Kesatkeran', '524113', 'Belanja Perjalanan Dinas Dalam Kota', 6000000, 0);
INSERT INTO `emon_akun_2019` VALUES (1286, '11622323', '64', 'Pembayaran Gaji dan Tunjangan', '511111', 'Belanja Gaji Pokok PNS', 6982931000, 1629817100);
INSERT INTO `emon_akun_2019` VALUES (1287, '11622323', '64', 'Pembayaran Gaji dan Tunjangan', '511119', 'Belanja Pembulatan Gaji PNS', 120000, 22081);
INSERT INTO `emon_akun_2019` VALUES (1288, '11622323', '64', 'Pembayaran Gaji dan Tunjangan', '511121', 'Belanja Tunj. Suami/Istri PNS', 595129000, 125342240);
INSERT INTO `emon_akun_2019` VALUES (1289, '11622323', '64', 'Pembayaran Gaji dan Tunjangan', '511122', 'Belanja Tunj. Anak PNS', 141931000, 30221140);
INSERT INTO `emon_akun_2019` VALUES (1290, '11622323', '64', 'Pembayaran Gaji dan Tunjangan', '511123', 'Belanja Tunj. Struktural PNS', 257530000, 55650000);
INSERT INTO `emon_akun_2019` VALUES (1291, '11622323', '64', 'Pembayaran Gaji dan Tunjangan', '511124', 'Belanja Tunj. Fungsional PNS', 1026610000, 237388000);
INSERT INTO `emon_akun_2019` VALUES (1292, '11622323', '64', 'Pembayaran Gaji dan Tunjangan', '511125', 'Belanja Tunj. PPh PNS', 137623000, 8620353);
INSERT INTO `emon_akun_2019` VALUES (1293, '11622323', '64', 'Pembayaran Gaji dan Tunjangan', '511126', 'Belanja Tunj. Beras PNS', 426981000, 90307740);
INSERT INTO `emon_akun_2019` VALUES (1294, '11622323', '64', 'Pembayaran Gaji dan Tunjangan', '511129', 'Belanja Uang Makan PNS', 1177506000, 89116000);
INSERT INTO `emon_akun_2019` VALUES (1295, '11622323', '64', 'Pembayaran Gaji dan Tunjangan', '511151', 'Belanja Tunjangan Umum PNS', 239200000, 47530552);
INSERT INTO `emon_akun_2019` VALUES (1296, '11622323', '65', 'Tunjangan Kinerja', '512411', 'Belanja pegawai (Tunjangan Khusus/Kegiatan)', 8289865000, 0);
INSERT INTO `emon_akun_2019` VALUES (1297, '11622323', '66', 'Uang Lembur dan Uang Makan Lembur', '512211', 'Belanja uang lembur', 66320000, 0);
INSERT INTO `emon_akun_2019` VALUES (1298, '11622323', '67', 'Perlengkapan Perkantoran', '521111', 'Belanja Keperluan Perkantoran', 256880000, 0);
INSERT INTO `emon_akun_2019` VALUES (1299, '11622323', '68', 'Perawatan Gedung Kantor', '523111', 'Belanja Biaya Pemeliharaan Gedung dan Bangunan', 1241640000, 0);
INSERT INTO `emon_akun_2019` VALUES (1300, '11622323', '68', 'Perawatan Gedung Kantor', '523119', 'Belanja Biaya Pemeliharaan Gedung dan Bangunan Lainnya', 307400000, 0);
INSERT INTO `emon_akun_2019` VALUES (1301, '11622323', '69', 'Perawatan Sarana dan Prasarana Gedung', '523121', 'Belanja Biaya Pemeliharaan Peralatan dan Mesin', 414657000, 0);
INSERT INTO `emon_akun_2019` VALUES (1302, '11622323', '70', 'Perbaikan Peralatan Kantor', '523121', 'Belanja Biaya Pemeliharaan Peralatan dan Mesin', 84440000, 0);
INSERT INTO `emon_akun_2019` VALUES (1303, '11622323', '71', 'Perawatan Kendaraan Bermotor Roda 4/6/8/10', '523121', 'Belanja Biaya Pemeliharaan Peralatan dan Mesin', 533600000, 0);
INSERT INTO `emon_akun_2019` VALUES (1304, '11622323', '72', 'Perawatan Kendaraan Bermotor Roda 2', '523121', 'Belanja Biaya Pemeliharaan Peralatan dan Mesin', 7340000, 0);
INSERT INTO `emon_akun_2019` VALUES (1305, '11622323', '73', 'Langganan Daya dan Jasa', '521111', 'Belanja Keperluan Perkantoran', 541151000, 0);
INSERT INTO `emon_akun_2019` VALUES (1306, '11622323', '73', 'Langganan Daya dan Jasa', '522111', 'Belanja Langganan Listrik', 756000000, 99035883);
INSERT INTO `emon_akun_2019` VALUES (1307, '11622323', '73', 'Langganan Daya dan Jasa', '522112', 'Belanja Langganan Telepon', 79200000, 2988504);
INSERT INTO `emon_akun_2019` VALUES (1308, '11622323', '73', 'Langganan Daya dan Jasa', '522113', 'Belanja Langganan Air', 6000000, 0);
INSERT INTO `emon_akun_2019` VALUES (1309, '11622323', '74', 'Pengiriman Pos dan Giro', '522121', 'Belanja Jasa Pos dan Giro', 27600000, 0);
INSERT INTO `emon_akun_2019` VALUES (1310, '11622323', '75', 'Jamuan Tamu', '521111', 'Belanja Keperluan Perkantoran', 51750000, 0);
INSERT INTO `emon_akun_2019` VALUES (1311, '11622323', '76', 'Operasional Perkantoran dan Pimpinan', '521111', 'Belanja Keperluan Perkantoran', 43322000, 0);
INSERT INTO `emon_akun_2019` VALUES (1312, '11622323', '76', 'Operasional Perkantoran dan Pimpinan', '521811', 'Belanja Barang Untuk Persediaan Barang Konsumsi', 20000000, 0);
INSERT INTO `emon_akun_2019` VALUES (1313, '11622323', '76', 'Operasional Perkantoran dan Pimpinan', '524111', 'Belanja perjalanan biasa', 110751000, 0);
INSERT INTO `emon_akun_2019` VALUES (1314, '11622323', '76', 'Operasional Perkantoran dan Pimpinan', '524113', 'Belanja Perjalanan Dinas Dalam Kota', 6000000, 0);
INSERT INTO `emon_akun_2019` VALUES (1315, '11622323', '77', 'Obat-obatan', '521111', 'Belanja Keperluan Perkantoran', 110400000, 0);
INSERT INTO `emon_akun_2019` VALUES (1316, '11636846', '1', 'Konsep Pedoman (R0) Perencanaan Teknis Pompa Air Tenaga Hidro Dengan Turbin Turbo Propeller', '521211', 'Belanja Bahan', 13906000, 0);
INSERT INTO `emon_akun_2019` VALUES (1317, '11636846', '1', 'Konsep Pedoman (R0) Perencanaan Teknis Pompa Air Tenaga Hidro Dengan Turbin Turbo Propeller', '521213', 'Honor Output Kegiatan', 13540000, 0);
INSERT INTO `emon_akun_2019` VALUES (1318, '11636846', '1', 'Konsep Pedoman (R0) Perencanaan Teknis Pompa Air Tenaga Hidro Dengan Turbin Turbo Propeller', '521219', 'Belanja Barang Non Operasional Lainnya', 25000000, 0);
INSERT INTO `emon_akun_2019` VALUES (1319, '11636846', '1', 'Konsep Pedoman (R0) Perencanaan Teknis Pompa Air Tenaga Hidro Dengan Turbin Turbo Propeller', '521811', 'Belanja Barang Untuk Persediaan Barang Konsumsi', 8100000, 0);
INSERT INTO `emon_akun_2019` VALUES (1320, '11636846', '1', 'Konsep Pedoman (R0) Perencanaan Teknis Pompa Air Tenaga Hidro Dengan Turbin Turbo Propeller', '522141', 'Belanja Sewa', 18288000, 0);
INSERT INTO `emon_akun_2019` VALUES (1321, '11636846', '1', 'Konsep Pedoman (R0) Perencanaan Teknis Pompa Air Tenaga Hidro Dengan Turbin Turbo Propeller', '522151', 'Belanja Jasa Profesi', 75600000, 0);
INSERT INTO `emon_akun_2019` VALUES (1322, '11636846', '1', 'Konsep Pedoman (R0) Perencanaan Teknis Pompa Air Tenaga Hidro Dengan Turbin Turbo Propeller', '524111', 'Belanja perjalanan biasa', 133112000, 15829166);
INSERT INTO `emon_akun_2019` VALUES (1323, '11636846', '2', 'Konsep Pedoman (R-0) Pemanfaatan Lumpur Sidoarjo untuk Material Timbunan Tanggul', '521211', 'Belanja Bahan', 12291000, 0);
INSERT INTO `emon_akun_2019` VALUES (1324, '11636846', '2', 'Konsep Pedoman (R-0) Pemanfaatan Lumpur Sidoarjo untuk Material Timbunan Tanggul', '521213', 'Honor Output Kegiatan', 48180000, 0);
INSERT INTO `emon_akun_2019` VALUES (1325, '11636846', '2', 'Konsep Pedoman (R-0) Pemanfaatan Lumpur Sidoarjo untuk Material Timbunan Tanggul', '521219', 'Belanja Barang Non Operasional Lainnya', 2575000, 0);
INSERT INTO `emon_akun_2019` VALUES (1326, '11636846', '2', 'Konsep Pedoman (R-0) Pemanfaatan Lumpur Sidoarjo untuk Material Timbunan Tanggul', '521811', 'Belanja Barang Untuk Persediaan Barang Konsumsi', 9350000, 0);
INSERT INTO `emon_akun_2019` VALUES (1327, '11636846', '2', 'Konsep Pedoman (R-0) Pemanfaatan Lumpur Sidoarjo untuk Material Timbunan Tanggul', '522141', 'Belanja Sewa', 18288000, 0);
INSERT INTO `emon_akun_2019` VALUES (1328, '11636846', '2', 'Konsep Pedoman (R-0) Pemanfaatan Lumpur Sidoarjo untuk Material Timbunan Tanggul', '522151', 'Belanja Jasa Profesi', 79200000, 0);
INSERT INTO `emon_akun_2019` VALUES (1329, '11636846', '2', 'Konsep Pedoman (R-0) Pemanfaatan Lumpur Sidoarjo untuk Material Timbunan Tanggul', '524111', 'Belanja perjalanan biasa', 133563000, 4492000);
INSERT INTO `emon_akun_2019` VALUES (1330, '11636846', '3', 'Prototipe Teknologi Pelindung Tebing Sungai Dengan Interlocking Permeable Revertment', '521211', 'Belanja Bahan', 12759000, 0);
INSERT INTO `emon_akun_2019` VALUES (1331, '11636846', '3', 'Prototipe Teknologi Pelindung Tebing Sungai Dengan Interlocking Permeable Revertment', '521213', 'Honor Output Kegiatan', 140280000, 0);
INSERT INTO `emon_akun_2019` VALUES (1332, '11636846', '3', 'Prototipe Teknologi Pelindung Tebing Sungai Dengan Interlocking Permeable Revertment', '521219', 'Belanja Barang Non Operasional Lainnya', 745024000, 0);
INSERT INTO `emon_akun_2019` VALUES (1333, '11636846', '3', 'Prototipe Teknologi Pelindung Tebing Sungai Dengan Interlocking Permeable Revertment', '521811', 'Belanja Barang Untuk Persediaan Barang Konsumsi', 15000000, 0);
INSERT INTO `emon_akun_2019` VALUES (1334, '11636846', '3', 'Prototipe Teknologi Pelindung Tebing Sungai Dengan Interlocking Permeable Revertment', '521821', 'Belanja Barang Persediaan Bahan Baku', 175161000, 0);
INSERT INTO `emon_akun_2019` VALUES (1335, '11636846', '3', 'Prototipe Teknologi Pelindung Tebing Sungai Dengan Interlocking Permeable Revertment', '522141', 'Belanja Sewa', 44704000, 0);
INSERT INTO `emon_akun_2019` VALUES (1336, '11636846', '3', 'Prototipe Teknologi Pelindung Tebing Sungai Dengan Interlocking Permeable Revertment', '522151', 'Belanja Jasa Profesi', 115200000, 0);
INSERT INTO `emon_akun_2019` VALUES (1337, '11636846', '3', 'Prototipe Teknologi Pelindung Tebing Sungai Dengan Interlocking Permeable Revertment', '522191', 'Belanja Jasa Lainnya', 3600000, 0);
INSERT INTO `emon_akun_2019` VALUES (1338, '11636846', '3', 'Prototipe Teknologi Pelindung Tebing Sungai Dengan Interlocking Permeable Revertment', '524111', 'Belanja perjalanan biasa', 287188000, 14949875);
INSERT INTO `emon_akun_2019` VALUES (1339, '11636846', '4', 'Penerapan Teknologi Pemanfaatan Saluran Irigasi untuk Pembangkit Listrik Tenaga Mikrohidro', '521211', 'Belanja Bahan', 11635000, 0);
INSERT INTO `emon_akun_2019` VALUES (1340, '11636846', '4', 'Penerapan Teknologi Pemanfaatan Saluran Irigasi untuk Pembangkit Listrik Tenaga Mikrohidro', '521213', 'Honor Output Kegiatan', 58600000, 0);
INSERT INTO `emon_akun_2019` VALUES (1341, '11636846', '4', 'Penerapan Teknologi Pemanfaatan Saluran Irigasi untuk Pembangkit Listrik Tenaga Mikrohidro', '521811', 'Belanja Barang Untuk Persediaan Barang Konsumsi', 12000000, 0);
INSERT INTO `emon_akun_2019` VALUES (1342, '11636846', '4', 'Penerapan Teknologi Pemanfaatan Saluran Irigasi untuk Pembangkit Listrik Tenaga Mikrohidro', '522141', 'Belanja Sewa', 42649000, 0);
INSERT INTO `emon_akun_2019` VALUES (1343, '11636846', '4', 'Penerapan Teknologi Pemanfaatan Saluran Irigasi untuk Pembangkit Listrik Tenaga Mikrohidro', '522151', 'Belanja Jasa Profesi', 73600000, 0);
INSERT INTO `emon_akun_2019` VALUES (1344, '11636846', '4', 'Penerapan Teknologi Pemanfaatan Saluran Irigasi untuk Pembangkit Listrik Tenaga Mikrohidro', '522191', 'Belanja Jasa Lainnya', 32000000, 0);
INSERT INTO `emon_akun_2019` VALUES (1345, '11636846', '4', 'Penerapan Teknologi Pemanfaatan Saluran Irigasi untuk Pembangkit Listrik Tenaga Mikrohidro', '524111', 'Belanja perjalanan biasa', 316161000, 8629678);
INSERT INTO `emon_akun_2019` VALUES (1346, '11636846', '4', 'Penerapan Teknologi Pemanfaatan Saluran Irigasi untuk Pembangkit Listrik Tenaga Mikrohidro', '534121', 'Belanja Modal Irigasi', 489111000, 0);
INSERT INTO `emon_akun_2019` VALUES (1347, '11636846', '5', 'Penerapan Perangkat Lunak Inspeksi Sungai dan Prasarana Sungai', '521211', 'Belanja Bahan', 20514000, 0);
INSERT INTO `emon_akun_2019` VALUES (1348, '11636846', '5', 'Penerapan Perangkat Lunak Inspeksi Sungai dan Prasarana Sungai', '521213', 'Honor Output Kegiatan', 48670000, 0);
INSERT INTO `emon_akun_2019` VALUES (1349, '11636846', '5', 'Penerapan Perangkat Lunak Inspeksi Sungai dan Prasarana Sungai', '521219', 'Belanja Barang Non Operasional Lainnya', 39364000, 0);
INSERT INTO `emon_akun_2019` VALUES (1350, '11636846', '5', 'Penerapan Perangkat Lunak Inspeksi Sungai dan Prasarana Sungai', '521811', 'Belanja Barang Untuk Persediaan Barang Konsumsi', 19800000, 0);
INSERT INTO `emon_akun_2019` VALUES (1351, '11636846', '5', 'Penerapan Perangkat Lunak Inspeksi Sungai dan Prasarana Sungai', '522141', 'Belanja Sewa', 44608000, 0);
INSERT INTO `emon_akun_2019` VALUES (1352, '11636846', '5', 'Penerapan Perangkat Lunak Inspeksi Sungai dan Prasarana Sungai', '522151', 'Belanja Jasa Profesi', 116000000, 0);
INSERT INTO `emon_akun_2019` VALUES (1353, '11636846', '5', 'Penerapan Perangkat Lunak Inspeksi Sungai dan Prasarana Sungai', '522191', 'Belanja Jasa Lainnya', 25000000, 0);
INSERT INTO `emon_akun_2019` VALUES (1354, '11636846', '5', 'Penerapan Perangkat Lunak Inspeksi Sungai dan Prasarana Sungai', '524111', 'Belanja perjalanan biasa', 419414000, 10727907);
INSERT INTO `emon_akun_2019` VALUES (1355, '11636846', '6', 'Penyelenggaraan Laboratorium Balai Litbang Sungai', '521211', 'Belanja Bahan', 28956000, 0);
INSERT INTO `emon_akun_2019` VALUES (1356, '11636846', '6', 'Penyelenggaraan Laboratorium Balai Litbang Sungai', '521219', 'Belanja Barang Non Operasional Lainnya', 86121000, 0);
INSERT INTO `emon_akun_2019` VALUES (1357, '11636846', '6', 'Penyelenggaraan Laboratorium Balai Litbang Sungai', '521811', 'Belanja Barang Untuk Persediaan Barang Konsumsi', 11000000, 0);
INSERT INTO `emon_akun_2019` VALUES (1358, '11636846', '6', 'Penyelenggaraan Laboratorium Balai Litbang Sungai', '522141', 'Belanja Sewa', 18288000, 0);
INSERT INTO `emon_akun_2019` VALUES (1359, '11636846', '6', 'Penyelenggaraan Laboratorium Balai Litbang Sungai', '522151', 'Belanja Jasa Profesi', 32400000, 0);
INSERT INTO `emon_akun_2019` VALUES (1360, '11636846', '6', 'Penyelenggaraan Laboratorium Balai Litbang Sungai', '522191', 'Belanja Jasa Lainnya', 20000000, 0);
INSERT INTO `emon_akun_2019` VALUES (1361, '11636846', '6', 'Penyelenggaraan Laboratorium Balai Litbang Sungai', '524111', 'Belanja perjalanan biasa', 196570000, 6618568);
INSERT INTO `emon_akun_2019` VALUES (1362, '11636846', '6', 'Penyelenggaraan Laboratorium Balai Litbang Sungai', '532111', 'Belanja Modal Peralatan dan Mesin', 104316000, 0);
INSERT INTO `emon_akun_2019` VALUES (1363, '11636846', '7', 'Evaluasi Penerapan Teknologi dan Pengelolaan Sistem Informasi Bidang Sungai', '521211', 'Belanja Bahan', 9628000, 0);
INSERT INTO `emon_akun_2019` VALUES (1364, '11636846', '7', 'Evaluasi Penerapan Teknologi dan Pengelolaan Sistem Informasi Bidang Sungai', '521219', 'Belanja Barang Non Operasional Lainnya', 37500000, 0);
INSERT INTO `emon_akun_2019` VALUES (1365, '11636846', '7', 'Evaluasi Penerapan Teknologi dan Pengelolaan Sistem Informasi Bidang Sungai', '521811', 'Belanja Barang Untuk Persediaan Barang Konsumsi', 4500000, 0);
INSERT INTO `emon_akun_2019` VALUES (1366, '11636846', '7', 'Evaluasi Penerapan Teknologi dan Pengelolaan Sistem Informasi Bidang Sungai', '522141', 'Belanja Sewa', 11176000, 0);
INSERT INTO `emon_akun_2019` VALUES (1367, '11636846', '7', 'Evaluasi Penerapan Teknologi dan Pengelolaan Sistem Informasi Bidang Sungai', '522151', 'Belanja Jasa Profesi', 10800000, 0);
INSERT INTO `emon_akun_2019` VALUES (1368, '11636846', '7', 'Evaluasi Penerapan Teknologi dan Pengelolaan Sistem Informasi Bidang Sungai', '522191', 'Belanja Jasa Lainnya', 20000000, 0);
INSERT INTO `emon_akun_2019` VALUES (1369, '11636846', '7', 'Evaluasi Penerapan Teknologi dan Pengelolaan Sistem Informasi Bidang Sungai', '524111', 'Belanja perjalanan biasa', 208974000, 8362040);
INSERT INTO `emon_akun_2019` VALUES (1370, '11636846', '11', 'Pembayaran Gaji dan Tunjangan', '511111', 'Belanja Gaji Pokok PNS', 1341311000, 268986900);
INSERT INTO `emon_akun_2019` VALUES (1371, '11636846', '11', 'Pembayaran Gaji dan Tunjangan', '511119', 'Belanja Pembulatan Gaji PNS', 22000, 4116);
INSERT INTO `emon_akun_2019` VALUES (1372, '11636846', '11', 'Pembayaran Gaji dan Tunjangan', '511121', 'Belanja Tunj. Suami/Istri PNS', 115288000, 24078390);
INSERT INTO `emon_akun_2019` VALUES (1373, '11636846', '11', 'Pembayaran Gaji dan Tunjangan', '511122', 'Belanja Tunj. Anak PNS', 21647000, 4472268);
INSERT INTO `emon_akun_2019` VALUES (1374, '11636846', '11', 'Pembayaran Gaji dan Tunjangan', '511123', 'Belanja Tunj. Struktural PNS', 37440000, 12960000);
INSERT INTO `emon_akun_2019` VALUES (1375, '11636846', '11', 'Pembayaran Gaji dan Tunjangan', '511124', 'Belanja Tunj. Fungsional PNS', 237900000, 52950000);
INSERT INTO `emon_akun_2019` VALUES (1376, '11636846', '11', 'Pembayaran Gaji dan Tunjangan', '511125', 'Belanja Tunj. PPh PNS', 30699000, 2556960);
INSERT INTO `emon_akun_2019` VALUES (1377, '11636846', '11', 'Pembayaran Gaji dan Tunjangan', '511126', 'Belanja Tunj. Beras PNS', 79071000, 16294500);
INSERT INTO `emon_akun_2019` VALUES (1378, '11636846', '11', 'Pembayaran Gaji dan Tunjangan', '511129', 'Belanja Uang Makan PNS', 292913000, 15704000);
INSERT INTO `emon_akun_2019` VALUES (1379, '11636846', '11', 'Pembayaran Gaji dan Tunjangan', '511151', 'Belanja Tunjangan Umum PNS', 40365000, 6585000);
INSERT INTO `emon_akun_2019` VALUES (1380, '11636846', '12', 'Tunjangan Kinerja', '512411', 'Belanja pegawai (Tunjangan Khusus/Kegiatan)', 1577550000, 0);
INSERT INTO `emon_akun_2019` VALUES (1381, '11636846', '13', 'Uang Lembur', '512211', 'Belanja uang lembur', 13960000, 0);
INSERT INTO `emon_akun_2019` VALUES (1382, '11636846', '14', 'Perlengkapan Perkantoran', '521111', 'Belanja Keperluan Perkantoran', 60870000, 0);
INSERT INTO `emon_akun_2019` VALUES (1383, '11636846', '15', 'Perawatan Gedung Kantor', '523111', 'Belanja Biaya Pemeliharaan Gedung dan Bangunan', 718300000, 19092150);
INSERT INTO `emon_akun_2019` VALUES (1384, '11636846', '16', 'Perawatan Sarana dan Prasarana Gedung', '523121', 'Belanja Biaya Pemeliharaan Peralatan dan Mesin', 119480000, 0);
INSERT INTO `emon_akun_2019` VALUES (1385, '11636846', '17', 'Perbaikan Peralatan Kantor', '523121', 'Belanja Biaya Pemeliharaan Peralatan dan Mesin', 63380000, 0);
INSERT INTO `emon_akun_2019` VALUES (1386, '11636846', '18', 'Perawatan Kendaraan Bermotor Roda 4/6/8/10', '523121', 'Belanja Biaya Pemeliharaan Peralatan dan Mesin', 174400000, 0);
INSERT INTO `emon_akun_2019` VALUES (1387, '11636846', '19', 'Langganan Daya dan Jasa', '521111', 'Belanja Keperluan Perkantoran', 192000000, 0);
INSERT INTO `emon_akun_2019` VALUES (1388, '11636846', '19', 'Langganan Daya dan Jasa', '522111', 'Belanja Langganan Listrik', 240000000, 26210794);
INSERT INTO `emon_akun_2019` VALUES (1389, '11636846', '19', 'Langganan Daya dan Jasa', '522112', 'Belanja Langganan Telepon', 12000000, 408449);
INSERT INTO `emon_akun_2019` VALUES (1390, '11636846', '19', 'Langganan Daya dan Jasa', '522113', 'Belanja Langganan Air', 24000000, 2668400);
INSERT INTO `emon_akun_2019` VALUES (1391, '11636846', '20', 'Pengiriman Pos dan Giro', '521114', 'Belanja pengiriman surat dinas pos pusat', 3000000, 0);
INSERT INTO `emon_akun_2019` VALUES (1392, '11636846', '21', 'Satpam, Pengemudi, Petugas Kebersihan, dan Pramubakti', '521111', 'Belanja Keperluan Perkantoran', 837122000, 60644387);
INSERT INTO `emon_akun_2019` VALUES (1393, '11636846', '21', 'Satpam, Pengemudi, Petugas Kebersihan, dan Pramubakti', '521119', 'Belanja Barang Operasional Lainnya', 1069250000, 91738000);
INSERT INTO `emon_akun_2019` VALUES (1394, '11636846', '22', 'Operasional Perkantoran dan Pimpinan', '524111', 'Belanja perjalanan biasa', 130000000, 30401702);
INSERT INTO `emon_akun_2019` VALUES (1395, '11636846', '23', 'Pengadaan Pakaian Seragam Pegawai', '521119', 'Belanja Barang Operasional Lainnya', 33195000, 0);
INSERT INTO `emon_akun_2019` VALUES (1396, '11636846', '24', 'Penyelenggaraan Perpustakaan', '521211', 'Belanja Bahan', 14347000, 0);
INSERT INTO `emon_akun_2019` VALUES (1397, '11636846', '24', 'Penyelenggaraan Perpustakaan', '521811', 'Belanja Barang Untuk Persediaan Barang Konsumsi', 4000000, 0);
INSERT INTO `emon_akun_2019` VALUES (1398, '11636846', '24', 'Penyelenggaraan Perpustakaan', '524111', 'Belanja perjalanan biasa', 26720000, 0);
INSERT INTO `emon_akun_2019` VALUES (1399, '11636846', '25', 'Penyusunan RKA-KL dan DIPA', '521211', 'Belanja Bahan', 2430000, 0);
INSERT INTO `emon_akun_2019` VALUES (1400, '11636846', '25', 'Penyusunan RKA-KL dan DIPA', '521811', 'Belanja Barang Untuk Persediaan Barang Konsumsi', 5500000, 0);
INSERT INTO `emon_akun_2019` VALUES (1401, '11636846', '25', 'Penyusunan RKA-KL dan DIPA', '524111', 'Belanja perjalanan biasa', 89086000, 7925000);
INSERT INTO `emon_akun_2019` VALUES (1402, '11636846', '26', 'Administrasi Kesatkeran', '521115', 'Honor Operasional Satuan Kerja', 167520000, 7940000);
INSERT INTO `emon_akun_2019` VALUES (1403, '11636846', '26', 'Administrasi Kesatkeran', '521211', 'Belanja Bahan', 11191000, 0);
INSERT INTO `emon_akun_2019` VALUES (1404, '11636846', '26', 'Administrasi Kesatkeran', '521811', 'Belanja Barang Untuk Persediaan Barang Konsumsi', 21400000, 0);
INSERT INTO `emon_akun_2019` VALUES (1405, '11636846', '26', 'Administrasi Kesatkeran', '524111', 'Belanja perjalanan biasa', 362022000, 48022465);
INSERT INTO `emon_akun_2019` VALUES (1406, '11636846', '27', 'Penyelenggaraan Perpustakaan Balai Litbang Sungai', '536111', 'Belanja Modal Lainnya', 20000000, 0);
INSERT INTO `emon_akun_2019` VALUES (1407, '11636850', '1', 'Penerapan Teknologi Kampas Beton Dalam Mendukung Modernisasi Irigasi pada Lahan Rawa', '521211', 'Belanja Bahan', 36920000, 1327000);
INSERT INTO `emon_akun_2019` VALUES (1408, '11636850', '1', 'Penerapan Teknologi Kampas Beton Dalam Mendukung Modernisasi Irigasi pada Lahan Rawa', '521213', 'Honor Output Kegiatan', 73054000, 0);
INSERT INTO `emon_akun_2019` VALUES (1409, '11636850', '1', 'Penerapan Teknologi Kampas Beton Dalam Mendukung Modernisasi Irigasi pada Lahan Rawa', '521219', 'Belanja Barang Non Operasional Lainnya', 340665000, 0);
INSERT INTO `emon_akun_2019` VALUES (1410, '11636850', '1', 'Penerapan Teknologi Kampas Beton Dalam Mendukung Modernisasi Irigasi pada Lahan Rawa', '521811', 'Belanja Barang Untuk Persediaan Barang Konsumsi', 25000000, 15045800);
INSERT INTO `emon_akun_2019` VALUES (1411, '11636850', '1', 'Penerapan Teknologi Kampas Beton Dalam Mendukung Modernisasi Irigasi pada Lahan Rawa', '521821', 'Belanja Barang Persediaan Bahan Baku', 11156000, 0);
INSERT INTO `emon_akun_2019` VALUES (1412, '11636850', '1', 'Penerapan Teknologi Kampas Beton Dalam Mendukung Modernisasi Irigasi pada Lahan Rawa', '521832', 'Belanja Barang Persediaan Lainnya', 4666000, 0);
INSERT INTO `emon_akun_2019` VALUES (1413, '11636850', '1', 'Penerapan Teknologi Kampas Beton Dalam Mendukung Modernisasi Irigasi pada Lahan Rawa', '522131', 'Belanja Jasa Konsultan', 320000000, 0);
INSERT INTO `emon_akun_2019` VALUES (1414, '11636850', '1', 'Penerapan Teknologi Kampas Beton Dalam Mendukung Modernisasi Irigasi pada Lahan Rawa', '522141', 'Belanja Sewa', 478700000, 0);
INSERT INTO `emon_akun_2019` VALUES (1415, '11636850', '1', 'Penerapan Teknologi Kampas Beton Dalam Mendukung Modernisasi Irigasi pada Lahan Rawa', '522151', 'Belanja Jasa Profesi', 172800000, 0);
INSERT INTO `emon_akun_2019` VALUES (1416, '11636850', '1', 'Penerapan Teknologi Kampas Beton Dalam Mendukung Modernisasi Irigasi pada Lahan Rawa', '524111', 'Belanja perjalanan biasa', 1017986000, 26969423);
INSERT INTO `emon_akun_2019` VALUES (1417, '11636850', '1', 'Penerapan Teknologi Kampas Beton Dalam Mendukung Modernisasi Irigasi pada Lahan Rawa', '526311', 'Belanja Barang Lainnya untuk diserahkan kepada masyarakat/Pemda', 6352964000, 0);
INSERT INTO `emon_akun_2019` VALUES (1418, '11636850', '4', 'Penerapan Teknologi Tata Air Mikro Sistem Satu Arah', '521211', 'Belanja Bahan', 11130000, 0);
INSERT INTO `emon_akun_2019` VALUES (1419, '11636850', '4', 'Penerapan Teknologi Tata Air Mikro Sistem Satu Arah', '521213', 'Honor Output Kegiatan', 29600000, 0);
INSERT INTO `emon_akun_2019` VALUES (1420, '11636850', '4', 'Penerapan Teknologi Tata Air Mikro Sistem Satu Arah', '521219', 'Belanja Barang Non Operasional Lainnya', 61000000, 0);
INSERT INTO `emon_akun_2019` VALUES (1421, '11636850', '4', 'Penerapan Teknologi Tata Air Mikro Sistem Satu Arah', '521811', 'Belanja Barang Untuk Persediaan Barang Konsumsi', 20000000, 0);
INSERT INTO `emon_akun_2019` VALUES (1422, '11636850', '4', 'Penerapan Teknologi Tata Air Mikro Sistem Satu Arah', '522141', 'Belanja Sewa', 81680000, 0);
INSERT INTO `emon_akun_2019` VALUES (1423, '11636850', '4', 'Penerapan Teknologi Tata Air Mikro Sistem Satu Arah', '522151', 'Belanja Jasa Profesi', 148000000, 0);
INSERT INTO `emon_akun_2019` VALUES (1424, '11636850', '4', 'Penerapan Teknologi Tata Air Mikro Sistem Satu Arah', '522191', 'Belanja Jasa Lainnya', 49000000, 0);
INSERT INTO `emon_akun_2019` VALUES (1425, '11636850', '4', 'Penerapan Teknologi Tata Air Mikro Sistem Satu Arah', '524111', 'Belanja perjalanan biasa', 358126000, 12053250);
INSERT INTO `emon_akun_2019` VALUES (1426, '11636850', '4', 'Penerapan Teknologi Tata Air Mikro Sistem Satu Arah', '526311', 'Belanja Barang Lainnya untuk diserahkan kepada masyarakat/Pemda', 791000000, 0);
INSERT INTO `emon_akun_2019` VALUES (1427, '11636850', '5', 'Pendampingan Teknis Mini Polder di Rawa Lebak', '521211', 'Belanja Bahan', 16948000, 0);
INSERT INTO `emon_akun_2019` VALUES (1428, '11636850', '5', 'Pendampingan Teknis Mini Polder di Rawa Lebak', '521213', 'Honor Output Kegiatan', 29600000, 0);
INSERT INTO `emon_akun_2019` VALUES (1429, '11636850', '5', 'Pendampingan Teknis Mini Polder di Rawa Lebak', '521219', 'Belanja Barang Non Operasional Lainnya', 71927000, 0);
INSERT INTO `emon_akun_2019` VALUES (1430, '11636850', '5', 'Pendampingan Teknis Mini Polder di Rawa Lebak', '521811', 'Belanja Barang Untuk Persediaan Barang Konsumsi', 20000000, 0);
INSERT INTO `emon_akun_2019` VALUES (1431, '11636850', '5', 'Pendampingan Teknis Mini Polder di Rawa Lebak', '522141', 'Belanja Sewa', 101130000, 0);
INSERT INTO `emon_akun_2019` VALUES (1432, '11636850', '5', 'Pendampingan Teknis Mini Polder di Rawa Lebak', '522151', 'Belanja Jasa Profesi', 162400000, 0);
INSERT INTO `emon_akun_2019` VALUES (1433, '11636850', '5', 'Pendampingan Teknis Mini Polder di Rawa Lebak', '522191', 'Belanja Jasa Lainnya', 70000000, 0);
INSERT INTO `emon_akun_2019` VALUES (1434, '11636850', '5', 'Pendampingan Teknis Mini Polder di Rawa Lebak', '524111', 'Belanja perjalanan biasa', 152092000, 6367956);
INSERT INTO `emon_akun_2019` VALUES (1435, '11636850', '6', 'Penyelenggaraan Laboratorium Balai Litbang Rawa', '521211', 'Belanja Bahan', 10792000, 643500);
INSERT INTO `emon_akun_2019` VALUES (1436, '11636850', '6', 'Penyelenggaraan Laboratorium Balai Litbang Rawa', '521213', 'Honor Output Kegiatan', 9600000, 0);
INSERT INTO `emon_akun_2019` VALUES (1437, '11636850', '6', 'Penyelenggaraan Laboratorium Balai Litbang Rawa', '521219', 'Belanja Barang Non Operasional Lainnya', 44534000, 1188000);
INSERT INTO `emon_akun_2019` VALUES (1438, '11636850', '6', 'Penyelenggaraan Laboratorium Balai Litbang Rawa', '521811', 'Belanja Barang Untuk Persediaan Barang Konsumsi', 25000000, 9998450);
INSERT INTO `emon_akun_2019` VALUES (1439, '11636850', '6', 'Penyelenggaraan Laboratorium Balai Litbang Rawa', '521821', 'Belanja Barang Persediaan Bahan Baku', 45631000, 0);
INSERT INTO `emon_akun_2019` VALUES (1440, '11636850', '6', 'Penyelenggaraan Laboratorium Balai Litbang Rawa', '522141', 'Belanja Sewa', 39930000, 1800000);
INSERT INTO `emon_akun_2019` VALUES (1441, '11636850', '6', 'Penyelenggaraan Laboratorium Balai Litbang Rawa', '523121', 'Belanja Biaya Pemeliharaan Peralatan dan Mesin', 179930000, 0);
INSERT INTO `emon_akun_2019` VALUES (1442, '11636850', '6', 'Penyelenggaraan Laboratorium Balai Litbang Rawa', '524111', 'Belanja perjalanan biasa', 192494000, 15272881);
INSERT INTO `emon_akun_2019` VALUES (1443, '11636850', '6', 'Penyelenggaraan Laboratorium Balai Litbang Rawa', '532111', 'Belanja Modal Peralatan dan Mesin', 637980000, 0);
INSERT INTO `emon_akun_2019` VALUES (1444, '11636850', '8', 'Evaluasi Penerapan Teknologi dan Pengelolaan Sistem Informasi Bidang Rawa', '521211', 'Belanja Bahan', 3000000, 0);
INSERT INTO `emon_akun_2019` VALUES (1445, '11636850', '8', 'Evaluasi Penerapan Teknologi dan Pengelolaan Sistem Informasi Bidang Rawa', '521213', 'Honor Output Kegiatan', 22400000, 0);
INSERT INTO `emon_akun_2019` VALUES (1446, '11636850', '8', 'Evaluasi Penerapan Teknologi dan Pengelolaan Sistem Informasi Bidang Rawa', '521219', 'Belanja Barang Non Operasional Lainnya', 10000000, 0);
INSERT INTO `emon_akun_2019` VALUES (1447, '11636850', '8', 'Evaluasi Penerapan Teknologi dan Pengelolaan Sistem Informasi Bidang Rawa', '521811', 'Belanja Barang Untuk Persediaan Barang Konsumsi', 20000000, 0);
INSERT INTO `emon_akun_2019` VALUES (1448, '11636850', '8', 'Evaluasi Penerapan Teknologi dan Pengelolaan Sistem Informasi Bidang Rawa', '522141', 'Belanja Sewa', 6224000, 750000);
INSERT INTO `emon_akun_2019` VALUES (1449, '11636850', '8', 'Evaluasi Penerapan Teknologi dan Pengelolaan Sistem Informasi Bidang Rawa', '522151', 'Belanja Jasa Profesi', 36800000, 0);
INSERT INTO `emon_akun_2019` VALUES (1450, '11636850', '8', 'Evaluasi Penerapan Teknologi dan Pengelolaan Sistem Informasi Bidang Rawa', '524111', 'Belanja perjalanan biasa', 177128000, 19917258);
INSERT INTO `emon_akun_2019` VALUES (1451, '11636850', '9', 'Pengadaan Fasilitas Kantor Balai Litbang Rawa', '532111', 'Belanja Modal Peralatan dan Mesin', 13000000, 0);
INSERT INTO `emon_akun_2019` VALUES (1452, '11636850', '10', 'Pengadaan Gedung/ Bangunan Pembangunan Prasarana dan Sarana Internal', '533113', 'Belanja Modal Upah Tenaga Kerja dan Honor Pengelola Teknis Gedung dan Bangunan', 8960000, 0);
INSERT INTO `emon_akun_2019` VALUES (1453, '11636850', '10', 'Pengadaan Gedung/ Bangunan Pembangunan Prasarana dan Sarana Internal', '533115', 'Belanja Modal Perencanaan dan Pengawasan Gedung dan Bangunan', 212565000, 0);
INSERT INTO `emon_akun_2019` VALUES (1454, '11636850', '10', 'Pengadaan Gedung/ Bangunan Pembangunan Prasarana dan Sarana Internal', '533121', 'Belanja Penambahan Nilai Gedung dan Bangunan', 7039588000, 6330608);
INSERT INTO `emon_akun_2019` VALUES (1455, '11636850', '11', 'Penyusunan RKA-KL dan DIPA Balai Litbang Raw', '521211', 'Belanja Bahan', 2399000, 105000);
INSERT INTO `emon_akun_2019` VALUES (1456, '11636850', '11', 'Penyusunan RKA-KL dan DIPA Balai Litbang Raw', '521213', 'Honor Output Kegiatan', 9750000, 0);
INSERT INTO `emon_akun_2019` VALUES (1457, '11636850', '11', 'Penyusunan RKA-KL dan DIPA Balai Litbang Raw', '521811', 'Belanja Barang Untuk Persediaan Barang Konsumsi', 7631000, 4994550);
INSERT INTO `emon_akun_2019` VALUES (1458, '11636850', '11', 'Penyusunan RKA-KL dan DIPA Balai Litbang Raw', '524111', 'Belanja perjalanan biasa', 93365000, 13909848);
INSERT INTO `emon_akun_2019` VALUES (1459, '11636850', '12', 'Administrasi Kesatkeran', '521115', 'Honor Operasional Satuan Kerja', 153000000, 0);
INSERT INTO `emon_akun_2019` VALUES (1460, '11636850', '12', 'Administrasi Kesatkeran', '521211', 'Belanja Bahan', 19045000, 45000);
INSERT INTO `emon_akun_2019` VALUES (1461, '11636850', '12', 'Administrasi Kesatkeran', '521811', 'Belanja Barang Untuk Persediaan Barang Konsumsi', 25000000, 4985200);
INSERT INTO `emon_akun_2019` VALUES (1462, '11636850', '12', 'Administrasi Kesatkeran', '522151', 'Belanja Jasa Profesi', 11200000, 0);
INSERT INTO `emon_akun_2019` VALUES (1463, '11636850', '12', 'Administrasi Kesatkeran', '524111', 'Belanja perjalanan biasa', 340030000, 48167868);
INSERT INTO `emon_akun_2019` VALUES (1464, '11636850', '12', 'Administrasi Kesatkeran', '524113', 'Belanja Perjalanan Dinas Dalam Kota', 9120000, 0);
INSERT INTO `emon_akun_2019` VALUES (1465, '11636850', '13', 'Pembayaran Gaji dan Tunjangan', '511111', 'Belanja Gaji Pokok PNS', 641005000, 148255500);
INSERT INTO `emon_akun_2019` VALUES (1466, '11636850', '13', 'Pembayaran Gaji dan Tunjangan', '511119', 'Belanja Pembulatan Gaji PNS', 14000, 2290);
INSERT INTO `emon_akun_2019` VALUES (1467, '11636850', '13', 'Pembayaran Gaji dan Tunjangan', '511121', 'Belanja Tunj. Suami/Istri PNS', 38747000, 9166530);
INSERT INTO `emon_akun_2019` VALUES (1468, '11636850', '13', 'Pembayaran Gaji dan Tunjangan', '511122', 'Belanja Tunj. Anak PNS', 11864000, 2818122);
INSERT INTO `emon_akun_2019` VALUES (1469, '11636850', '13', 'Pembayaran Gaji dan Tunjangan', '511123', 'Belanja Tunj. Struktural PNS', 23400000, 5400000);
INSERT INTO `emon_akun_2019` VALUES (1470, '11636850', '13', 'Pembayaran Gaji dan Tunjangan', '511124', 'Belanja Tunj. Fungsional PNS', 104650000, 25250000);
INSERT INTO `emon_akun_2019` VALUES (1471, '11636850', '13', 'Pembayaran Gaji dan Tunjangan', '511125', 'Belanja Tunj. PPh PNS', 6472000, 251934);
INSERT INTO `emon_akun_2019` VALUES (1472, '11636850', '13', 'Pembayaran Gaji dan Tunjangan', '511126', 'Belanja Tunj. Beras PNS', 38140000, 8907660);
INSERT INTO `emon_akun_2019` VALUES (1473, '11636850', '13', 'Pembayaran Gaji dan Tunjangan', '511129', 'Belanja Uang Makan PNS', 146178000, 0);
INSERT INTO `emon_akun_2019` VALUES (1474, '11636850', '13', 'Pembayaran Gaji dan Tunjangan', '511151', 'Belanja Tunjangan Umum PNS', 21580000, 4055000);
INSERT INTO `emon_akun_2019` VALUES (1475, '11636850', '14', 'Tunjangan Kinerja', '512411', 'Belanja pegawai (Tunjangan Khusus/Kegiatan)', 865540000, 0);
INSERT INTO `emon_akun_2019` VALUES (1476, '11636850', '15', 'Uang Lembur dan Uang Makan Lembur', '512211', 'Belanja uang lembur', 10630000, 0);
INSERT INTO `emon_akun_2019` VALUES (1477, '11636850', '16', 'Perlengkapan Perkantoran', '521111', 'Belanja Keperluan Perkantoran', 56784000, 4992581);
INSERT INTO `emon_akun_2019` VALUES (1478, '11636850', '17', 'Perawatan Gedung Kantor', '523111', 'Belanja Biaya Pemeliharaan Gedung dan Bangunan', 84229000, 0);
INSERT INTO `emon_akun_2019` VALUES (1479, '11636850', '18', 'Pemeliharaan Rumah Dinas', '523119', 'Belanja Biaya Pemeliharaan Gedung dan Bangunan Lainnya', 5620000, 0);
INSERT INTO `emon_akun_2019` VALUES (1480, '11636850', '19', 'Perawatan Sarana dan Prasarana Gedung', '523121', 'Belanja Biaya Pemeliharaan Peralatan dan Mesin', 22440000, 0);
INSERT INTO `emon_akun_2019` VALUES (1481, '11636850', '20', 'Perbaikan Peralatan Kantor', '523121', 'Belanja Biaya Pemeliharaan Peralatan dan Mesin', 21665000, 0);
INSERT INTO `emon_akun_2019` VALUES (1482, '11636850', '21', 'Perawatan Kendaraan Bermotor Roda 4/6/8/10', '523121', 'Belanja Biaya Pemeliharaan Peralatan dan Mesin', 102480000, 0);
INSERT INTO `emon_akun_2019` VALUES (1483, '11636850', '22', 'Langganan Daya dan Jasa', '521111', 'Belanja Keperluan Perkantoran', 6000000, 275000);
INSERT INTO `emon_akun_2019` VALUES (1484, '11636850', '22', 'Langganan Daya dan Jasa', '522111', 'Belanja Langganan Listrik', 104664000, 16951198);
INSERT INTO `emon_akun_2019` VALUES (1485, '11636850', '22', 'Langganan Daya dan Jasa', '522112', 'Belanja Langganan Telepon', 25344000, 3690441);
INSERT INTO `emon_akun_2019` VALUES (1486, '11636850', '22', 'Langganan Daya dan Jasa', '522113', 'Belanja Langganan Air', 23988000, 205400);
INSERT INTO `emon_akun_2019` VALUES (1487, '11636850', '22', 'Langganan Daya dan Jasa', '522119', 'Belanja Langganan Daya dan Jasa Lainnya', 3000000, 0);
INSERT INTO `emon_akun_2019` VALUES (1488, '11636850', '23', 'Pengiriman Pos dan Giro', '521114', 'Belanja pengiriman surat dinas pos pusat', 3500000, 914000);
INSERT INTO `emon_akun_2019` VALUES (1489, '11636850', '24', 'Satpam, Pengemudi, Petugas Kebersihan, dan Pramubakti', '521111', 'Belanja Keperluan Perkantoran', 395239000, 33416000);
INSERT INTO `emon_akun_2019` VALUES (1490, '11636850', '24', 'Satpam, Pengemudi, Petugas Kebersihan, dan Pramubakti', '521119', 'Belanja Barang Operasional Lainnya', 796250000, 61250000);
INSERT INTO `emon_akun_2019` VALUES (1491, '11636850', '25', 'Operasional Perkantoran dan Pimpinan', '521211', 'Belanja Bahan', 1400000, 0);
INSERT INTO `emon_akun_2019` VALUES (1492, '11636850', '25', 'Operasional Perkantoran dan Pimpinan', '521811', 'Belanja Barang Untuk Persediaan Barang Konsumsi', 7892000, 0);
INSERT INTO `emon_akun_2019` VALUES (1493, '11636850', '25', 'Operasional Perkantoran dan Pimpinan', '522141', 'Belanja Sewa', 9336000, 0);
INSERT INTO `emon_akun_2019` VALUES (1494, '11636850', '25', 'Operasional Perkantoran dan Pimpinan', '524111', 'Belanja perjalanan biasa', 86165000, 56344907);
INSERT INTO `emon_akun_2019` VALUES (1495, '11636850', '26', 'Pakaian Dinas Pegawai', '521219', 'Belanja Barang Non Operasional Lainnya', 33554000, 0);

-- ----------------------------
-- Table structure for emon_data_2019
-- ----------------------------
DROP TABLE IF EXISTS `emon_data_2019`;
CREATE TABLE `emon_data_2019`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kdsatker` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nmsatker` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `kdgiat` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nmgiat` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `kdoutput` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nmoutput` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `kode_rkakl` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `kdpaket` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nmpaket` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `target` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `pagu` double NOT NULL,
  `realisasi` double NOT NULL,
  `progreskeu` double NOT NULL,
  `progresfis` double NOT NULL,
  `tglkirim` varchar(25) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 193 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of emon_data_2019
-- ----------------------------
INSERT INTO `emon_data_2019` VALUES (1, '11279842', 'BALAI PENELITIAN DAN PENGEMBANGAN IRIGASI BEKASI', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '051', 'Teknologi Terapan', '04-2431-05100-005-111-A', '1', 'Rancangan Pedoman R0 Penggunaan Bahan Karet Komposit untuk komponen  Pintu Air Irigasi', '1 TEKNOLOGI', 354176, 0, 0, 0, '08-02-2019  15:23:49');
INSERT INTO `emon_data_2019` VALUES (2, '11279842', 'BALAI PENELITIAN DAN PENGEMBANGAN IRIGASI BEKASI', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '053', 'Penerapan Teknologi Terbatas (Pilot Project)', '04-2431-05300-003-301-A', '2', 'Penerapan Teknologi Irigasi Hemat Air Berbahan Lokal', '1 UNIT', 1656529, 0, 0, 0, '08-02-2019  15:23:49');
INSERT INTO `emon_data_2019` VALUES (3, '11279842', 'BALAI PENELITIAN DAN PENGEMBANGAN IRIGASI BEKASI', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '053', 'Penerapan Teknologi Terbatas (Pilot Project)', '04-2431-05300-003-301-B', '3', 'Penerapan Teknologi DSS SMOPI Dalam Mendukung Modernisasi Irigasi', '1 UNIT', 2202187, 0, 0, 0, '08-02-2019  15:23:49');
INSERT INTO `emon_data_2019` VALUES (4, '11279842', 'BALAI PENELITIAN DAN PENGEMBANGAN IRIGASI BEKASI', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '053', 'Penerapan Teknologi Terbatas (Pilot Project)', '04-2431-05300-003-301-C', '4', 'Penerapan terbatas pembuka pintu air portabel', '1 UNIT', 2173859, 0, 0, 0, '08-02-2019  15:23:49');
INSERT INTO `emon_data_2019` VALUES (5, '11279842', 'BALAI PENELITIAN DAN PENGEMBANGAN IRIGASI BEKASI', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '053', 'Penerapan Teknologi Terbatas (Pilot Project)', '04-2431-05300-003-301-D', '5', 'Penerapan Teknologi Bangunan Ukur Modular di Petak Tersier Untuk Mendukung  Modernisasi Irigasi', '1 UNIT', 587694, 0, 0, 0, '08-02-2019  15:23:49');
INSERT INTO `emon_data_2019` VALUES (6, '11279842', 'BALAI PENELITIAN DAN PENGEMBANGAN IRIGASI BEKASI', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '054', 'Layanan Teknis dan Alih Teknologi', '04-2431-05400-003-403-A', '6', 'Penyelenggaraan Laboratorium Balai Litbang Irigasi', '1 DOK', 457234, 0, 0, 0, '08-02-2019  15:23:49');
INSERT INTO `emon_data_2019` VALUES (7, '11279842', 'BALAI PENELITIAN DAN PENGEMBANGAN IRIGASI BEKASI', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '054', 'Layanan Teknis dan Alih Teknologi', '04-2431-05400-004-404-A', '7', 'Evaluasi Penerapan Teknologi dan Pengelolaan Sistem Informasi Bidang Irigasi', '1 DOK', 461176, 0, 0, 0, '08-02-2019  15:23:49');
INSERT INTO `emon_data_2019` VALUES (8, '11279842', 'BALAI PENELITIAN DAN PENGEMBANGAN IRIGASI BEKASI', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '951', 'Layanan Sarana dan Prasarana Internal', '04-2431-95100-001-915-A', '10', 'Administrasi Kesatkeran', '1 LAYANAN', 426319, 0, 0, 0, '08-02-2019  15:23:49');
INSERT INTO `emon_data_2019` VALUES (9, '11279842', 'BALAI PENELITIAN DAN PENGEMBANGAN IRIGASI BEKASI', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '951', 'Layanan Sarana dan Prasarana Internal', '04-2431-95100-001-902-A', '8', 'Penyusunan RKA-KL dan DIPA', '1 LAYANAN', 85000, 0, 0, 0, '08-02-2019  15:23:49');
INSERT INTO `emon_data_2019` VALUES (10, '11279842', 'BALAI PENELITIAN DAN PENGEMBANGAN IRIGASI BEKASI', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '951', 'Layanan Sarana dan Prasarana Internal', '04-2431-95100-001-914-A', '9', 'Penerbitan Jurnal dan Buku', '1 LAYANAN', 210000, 0, 0, 0, '08-02-2019  15:23:49');
INSERT INTO `emon_data_2019` VALUES (11, '11279842', 'BALAI PENELITIAN DAN PENGEMBANGAN IRIGASI BEKASI', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '994', 'Layanan Perkantoran', '04-2431-99400-994-001-A', '11', 'Pembayaran Gaji dan Tunjangan', '12 BULAN', 1900945, 270200, 14.21, 14.2, '08-02-2019  15:23:49');
INSERT INTO `emon_data_2019` VALUES (12, '11279842', 'BALAI PENELITIAN DAN PENGEMBANGAN IRIGASI BEKASI', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '994', 'Layanan Perkantoran', '04-2431-99400-994-001-B', '12', 'Tunjangan Kinerja', '1 TAHUN', 1637539, 1837, 0.11, 0.11, '08-02-2019  15:23:49');
INSERT INTO `emon_data_2019` VALUES (13, '11279842', 'BALAI PENELITIAN DAN PENGEMBANGAN IRIGASI BEKASI', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '994', 'Layanan Perkantoran', '04-2431-99400-994-001-C', '13', 'Uang Lembur dan Uang Makan Lembur', '1 TAHUN', 19470, 0, 0, 0, '08-02-2019  15:23:49');
INSERT INTO `emon_data_2019` VALUES (14, '11279842', 'BALAI PENELITIAN DAN PENGEMBANGAN IRIGASI BEKASI', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '994', 'Layanan Perkantoran', '04-2431-99400-994-002-A', '14', 'Perlengkapan Perkantoran', '12 BULAN', 62320, 0, 0, 0, '08-02-2019  15:23:49');
INSERT INTO `emon_data_2019` VALUES (15, '11279842', 'BALAI PENELITIAN DAN PENGEMBANGAN IRIGASI BEKASI', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '994', 'Layanan Perkantoran', '04-2431-99400-994-002-B', '15', 'Perawatan Gedung Kantor', '12 BULAN', 533000, 0, 0, 0, '08-02-2019  15:23:49');
INSERT INTO `emon_data_2019` VALUES (16, '11279842', 'BALAI PENELITIAN DAN PENGEMBANGAN IRIGASI BEKASI', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '994', 'Layanan Perkantoran', '04-2431-99400-994-002-D', '16', 'Perawatan Sarana dan Prasarana Gedung', '12 BULAN', 98990, 0, 0, 0, '08-02-2019  15:23:49');
INSERT INTO `emon_data_2019` VALUES (17, '11279842', 'BALAI PENELITIAN DAN PENGEMBANGAN IRIGASI BEKASI', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '994', 'Layanan Perkantoran', '04-2431-99400-994-002-E', '17', 'Perbaikan Peralatan Kantor', '12 BULAN', 40686, 0, 0, 0, '08-02-2019  15:23:49');
INSERT INTO `emon_data_2019` VALUES (18, '11279842', 'BALAI PENELITIAN DAN PENGEMBANGAN IRIGASI BEKASI', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '994', 'Layanan Perkantoran', '04-2431-99400-994-002-F', '18', 'Perawatan Kendaraan Bermotor Roda 4/6/8/10', '12 BULAN', 166750, 0, 0, 0, '08-02-2019  15:23:49');
INSERT INTO `emon_data_2019` VALUES (19, '11279842', 'BALAI PENELITIAN DAN PENGEMBANGAN IRIGASI BEKASI', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '994', 'Layanan Perkantoran', '04-2431-99400-994-002-H', '19', 'Langganan Daya dan Jasa', '12 BULAN', 400000, 29847, 7.46, 13.08, '08-02-2019  15:23:49');
INSERT INTO `emon_data_2019` VALUES (20, '11279842', 'BALAI PENELITIAN DAN PENGEMBANGAN IRIGASI BEKASI', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '994', 'Layanan Perkantoran', '04-2431-99400-994-002-I', '20', 'Pengiriman Pos dan Giro', '12 BULAN', 7200, 0, 0, 0, '08-02-2019  15:23:49');
INSERT INTO `emon_data_2019` VALUES (21, '11279842', 'BALAI PENELITIAN DAN PENGEMBANGAN IRIGASI BEKASI', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '994', 'Layanan Perkantoran', '04-2431-99400-994-002-K', '21', 'Satpam, Pengemudi, Petugas Kebersihan, dan Pramubakti', '12 BULAN', 2233128, 60566, 2.71, 7, '08-02-2019  15:23:49');
INSERT INTO `emon_data_2019` VALUES (22, '11279842', 'BALAI PENELITIAN DAN PENGEMBANGAN IRIGASI BEKASI', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '994', 'Layanan Perkantoran', '04-2431-99400-994-002-M', '22', 'Operasional Perkantoran dan Pimpinan', '12 BULAN', 103250, 0, 0, 0, '08-02-2019  15:23:49');
INSERT INTO `emon_data_2019` VALUES (23, '11279842', 'BALAI PENELITIAN DAN PENGEMBANGAN IRIGASI BEKASI', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '994', 'Layanan Perkantoran', '04-2431-99400-994-002-N', '23', 'Pakaian Dinas Pegawai', '12 BULAN', 17081, 0, 0, 0, '08-02-2019  15:23:49');
INSERT INTO `emon_data_2019` VALUES (24, '11279842', 'BALAI PENELITIAN DAN PENGEMBANGAN IRIGASI BEKASI', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '994', 'Layanan Perkantoran', '04-2431-99400-994-002-P', '24', 'Penyelenggaraan Perpustakaan', '12 BULAN', 44766, 0, 0, 0, '08-02-2019  15:23:49');
INSERT INTO `emon_data_2019` VALUES (25, '11279860', 'BALAI PENELITIAN DAN PENGEMBANGAN SABO YOGYAKARTA', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '051', 'Teknologi Terapan', '04-2431-05100-006-121-B', '2', 'Konsep Pedoman (R0) Ring Net Barrier untuk Pengendalian Aliran Debris', '1 TEKNOLOGI', 534418, 0, 0, 0, '14-02-2019  08:26:09');
INSERT INTO `emon_data_2019` VALUES (26, '11279860', 'BALAI PENELITIAN DAN PENGEMBANGAN SABO YOGYAKARTA', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '051', 'Teknologi Terapan', '04-2431-05100-006-121-A', '23', 'Konsep Pedoman (R0) Teknologi Sabodam Modular', '1 TEKNOLOGI', 500280, 0, 0, 0, '14-02-2019  08:26:09');
INSERT INTO `emon_data_2019` VALUES (27, '11279860', 'BALAI PENELITIAN DAN PENGEMBANGAN SABO YOGYAKARTA', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '051', 'Teknologi Terapan', '04-2431-05100-006-121-C', '3', 'Konsep Pedoman (R0) Drainase Bawah permukaan Untuk Pengendalian Stabilitas Lereng', '1 TEKNOLOGI', 280757, 0, 0, 0, '14-02-2019  08:26:09');
INSERT INTO `emon_data_2019` VALUES (28, '11279860', 'BALAI PENELITIAN DAN PENGEMBANGAN SABO YOGYAKARTA', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '053', 'Penerapan Teknologi Terbatas (Pilot Project)', '04-2431-05300-004-301-A', '24', 'Drainase Bawah Permukaan Untuk Pengendalian Stabilitas Lereng', '1 UNIT', 1231596, 0, 0, 0, '14-02-2019  08:26:09');
INSERT INTO `emon_data_2019` VALUES (29, '11279860', 'BALAI PENELITIAN DAN PENGEMBANGAN SABO YOGYAKARTA', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '054', 'Layanan Teknis dan Alih Teknologi', '04-2431-05400-003-403-A', '4', 'Penyelenggaraan Laboratorium Balai Litbang Sabo', '1 DOK', 479606, 0, 0, 0, '14-02-2019  08:26:09');
INSERT INTO `emon_data_2019` VALUES (30, '11279860', 'BALAI PENELITIAN DAN PENGEMBANGAN SABO YOGYAKARTA', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '054', 'Layanan Teknis dan Alih Teknologi', '04-2431-05400-004-404-A', '5', 'Evaluasi Penerapan Teknologi dan Pengelolaan Sistem Informasi Bidang Sabo', '1 DOK', 1278550, 0, 0, 0, '14-02-2019  08:26:09');
INSERT INTO `emon_data_2019` VALUES (31, '11279860', 'BALAI PENELITIAN DAN PENGEMBANGAN SABO YOGYAKARTA', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '951', 'Layanan Sarana dan Prasarana Internal', '04-2431-95100-001-997-A', '6', 'Pengadaan Perlengkapan Sarana Gedung', '1 LAYANAN', 147310, 0, 0, 0, '14-02-2019  08:26:09');
INSERT INTO `emon_data_2019` VALUES (32, '11279860', 'BALAI PENELITIAN DAN PENGEMBANGAN SABO YOGYAKARTA', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '970', 'Layanan Dukungan Manajemen Satker', '04-2431-97000-001-051-A', '7', 'Penyusunan RKA-KL dan DIPA', '1 LAYANAN', 113716, 0, 0, 0, '14-02-2019  08:26:09');
INSERT INTO `emon_data_2019` VALUES (33, '11279860', 'BALAI PENELITIAN DAN PENGEMBANGAN SABO YOGYAKARTA', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '970', 'Layanan Dukungan Manajemen Satker', '04-2431-97000-001-055-A', '8', 'Administrasi Kesatkeran', '1 LAYANAN', 756069, 0, 0, 0, '14-02-2019  08:26:09');
INSERT INTO `emon_data_2019` VALUES (34, '11279860', 'BALAI PENELITIAN DAN PENGEMBANGAN SABO YOGYAKARTA', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '970', 'Layanan Dukungan Manajemen Satker', '04-2431-97000-001-055-B', '9', 'Pengadaan Buku Perpustakaan', '1 LAP', 27985, 0, 0, 0, '14-02-2019  08:26:09');
INSERT INTO `emon_data_2019` VALUES (35, '11279860', 'BALAI PENELITIAN DAN PENGEMBANGAN SABO YOGYAKARTA', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '994', 'Layanan Perkantoran', '04-2431-99400-994-002-D', '1', 'Perawatan Sarana dan Prasarana Gedung', '1 LAYANAN', 114125, 0, 0, 0, '14-02-2019  08:26:09');
INSERT INTO `emon_data_2019` VALUES (36, '11279860', 'BALAI PENELITIAN DAN PENGEMBANGAN SABO YOGYAKARTA', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '994', 'Layanan Perkantoran', '04-2431-99400-994-001-C', '11', 'Uang Lembur dan Uang Makan Lembur', '1 LAYANAN', 15640, 0, 0, 0, '14-02-2019  08:26:09');
INSERT INTO `emon_data_2019` VALUES (37, '11279860', 'BALAI PENELITIAN DAN PENGEMBANGAN SABO YOGYAKARTA', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '994', 'Layanan Perkantoran', '04-2431-99400-994-002-A', '12', 'Perlengkapan Perkantoran', '1 LAYANAN', 98800, 0, 0, 0, '14-02-2019  08:26:09');
INSERT INTO `emon_data_2019` VALUES (38, '11279860', 'BALAI PENELITIAN DAN PENGEMBANGAN SABO YOGYAKARTA', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '994', 'Layanan Perkantoran', '04-2431-99400-994-002-B', '13', 'Perawatan Gedung Kantor', '1 LAYANAN', 557761, 0, 0, 0, '14-02-2019  08:26:09');
INSERT INTO `emon_data_2019` VALUES (39, '11279860', 'BALAI PENELITIAN DAN PENGEMBANGAN SABO YOGYAKARTA', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '994', 'Layanan Perkantoran', '04-2431-99400-994-002-E', '14', 'Perbaikan Peralatan  Kantor', '1 LAYANAN', 145159, 0, 0, 0, '14-02-2019  08:26:09');
INSERT INTO `emon_data_2019` VALUES (40, '11279860', 'BALAI PENELITIAN DAN PENGEMBANGAN SABO YOGYAKARTA', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '994', 'Layanan Perkantoran', '04-2431-99400-994-002-F', '15', 'Perawatan Kendaraan Bermotor Roda 4/6/8/10', '1 LAYANAN', 75000, 0, 0, 0, '14-02-2019  08:26:09');
INSERT INTO `emon_data_2019` VALUES (41, '11279860', 'BALAI PENELITIAN DAN PENGEMBANGAN SABO YOGYAKARTA', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '994', 'Layanan Perkantoran', '04-2431-99400-994-002-G', '16', 'Perawatan Kendaraan Bermotor Roda 2', '1 LAYANAN', 18000, 0, 0, 0, '14-02-2019  08:26:09');
INSERT INTO `emon_data_2019` VALUES (42, '11279860', 'BALAI PENELITIAN DAN PENGEMBANGAN SABO YOGYAKARTA', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '994', 'Layanan Perkantoran', '04-2431-99400-994-002-H', '17', 'Layanan daya dan Jasa', '1 LAYANAN', 564000, 40858, 7.24, 7.24, '14-02-2019  08:26:09');
INSERT INTO `emon_data_2019` VALUES (43, '11279860', 'BALAI PENELITIAN DAN PENGEMBANGAN SABO YOGYAKARTA', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '994', 'Layanan Perkantoran', '04-2431-99400-994-002-I', '18', 'Pengiriman Pos dan Giro', '1 LAYANAN', 5089, 0, 0, 0, '14-02-2019  08:26:09');
INSERT INTO `emon_data_2019` VALUES (44, '11279860', 'BALAI PENELITIAN DAN PENGEMBANGAN SABO YOGYAKARTA', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '994', 'Layanan Perkantoran', '04-2431-99400-994-002-K', '19', 'Satpam, Pengemudi, Petugas Kebersihan dan Pramubakti', '1 LAYANAN', 1110187, 85399, 7.69, 7.69, '14-02-2019  08:26:09');
INSERT INTO `emon_data_2019` VALUES (45, '11279860', 'BALAI PENELITIAN DAN PENGEMBANGAN SABO YOGYAKARTA', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '994', 'Layanan Perkantoran', '04-2431-99400-994-002-M', '20', 'Operasional Perkantoran dan Pimpinan', '1 LAYANAN', 130182, 0, 0, 0, '14-02-2019  08:26:09');
INSERT INTO `emon_data_2019` VALUES (46, '11279860', 'BALAI PENELITIAN DAN PENGEMBANGAN SABO YOGYAKARTA', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '994', 'Layanan Perkantoran', '04-2431-99400-994-002-N', '21', 'Pakaian Dinas Pegawai', '1 LAYANAN', 54477, 0, 0, 0, '14-02-2019  08:26:09');
INSERT INTO `emon_data_2019` VALUES (47, '11279860', 'BALAI PENELITIAN DAN PENGEMBANGAN SABO YOGYAKARTA', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '994', 'Layanan Perkantoran', '04-2431-99400-994-002-P', '22', 'Penyelenggaraan Perpustakaan', '1 LAYANAN', 59714, 0, 0, 0, '14-02-2019  08:26:09');
INSERT INTO `emon_data_2019` VALUES (48, '11279860', 'BALAI PENELITIAN DAN PENGEMBANGAN SABO YOGYAKARTA', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '994', 'Layanan Perkantoran', '04-2431-99400-994-001-B', '25', 'Tunjangan Kinerja', '1 LAYANAN', 2496376, 0, 0, 0, '14-02-2019  08:26:09');
INSERT INTO `emon_data_2019` VALUES (49, '11279860', 'BALAI PENELITIAN DAN PENGEMBANGAN SABO YOGYAKARTA', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '994', 'Layanan Perkantoran', '04-2431-99400-994-001-A', '26', 'Pembayaran Gaji dan Tunjangan', '1 LAYANAN', 3455835, 728949, 21.09, 21.09, '14-02-2019  08:26:09');
INSERT INTO `emon_data_2019` VALUES (50, '11576981', 'BALAI PENELITIAN DAN PENGEMBANGAN PANTAI BULELENG', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '053', 'Penerapan Teknologi Terbatas (Pilot Project)', '04-2431-05300-005-301-A', '1', 'Prototipe Peredam Gelombang Menggunakan Susunan Tiang', '1 UNIT', 15880296, 0, 0, 0, '05-02-2019  09:46:04');
INSERT INTO `emon_data_2019` VALUES (51, '11576981', 'BALAI PENELITIAN DAN PENGEMBANGAN PANTAI BULELENG', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '054', 'Layanan Teknis dan Alih Teknologi', '04-2431-05400-002-402-A', '2', 'Efek Propagasi Gelombang Tsunami Terhadap Tanggul Laut NCICD dari Aktifitas Lempeng Tektonik', '1 DOK', 614452, 21624, 3.52, 4.52, '05-02-2019  09:46:04');
INSERT INTO `emon_data_2019` VALUES (52, '11576981', 'BALAI PENELITIAN DAN PENGEMBANGAN PANTAI BULELENG', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '054', 'Layanan Teknis dan Alih Teknologi', '04-2431-05400-003-403-A', '3', 'Penyelenggaraan Laboratorium Balai Litbang Pantai', '1 DOK', 526397, 0, 0, 0, '05-02-2019  09:46:04');
INSERT INTO `emon_data_2019` VALUES (53, '11576981', 'BALAI PENELITIAN DAN PENGEMBANGAN PANTAI BULELENG', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '054', 'Layanan Teknis dan Alih Teknologi', '04-2431-05400-004-404-A', '4', 'Evaluasi Penerapan Teknologi serta Pengelolaan Sistem Informasi Bidang Pantai', '1 DOK', 720982, 0, 0, 0, '05-02-2019  09:46:04');
INSERT INTO `emon_data_2019` VALUES (54, '11576981', 'BALAI PENELITIAN DAN PENGEMBANGAN PANTAI BULELENG', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '970', 'Layanan Dukungan Manajemen Satker', '04-2431-97000-001-051-A', '5', 'Penyusunan RKA-KL dan DIPA Balai Litbang Pantai', '1 LAYANAN', 135000, 0, 0, 0, '05-02-2019  09:46:04');
INSERT INTO `emon_data_2019` VALUES (55, '11576981', 'BALAI PENELITIAN DAN PENGEMBANGAN PANTAI BULELENG', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '970', 'Layanan Dukungan Manajemen Satker', '04-2431-97000-001-055-A', '6', 'Administrasi Kesatkeran', '1 LAYANAN', 604956, 20636, 3.41, 4.41, '05-02-2019  09:46:04');
INSERT INTO `emon_data_2019` VALUES (56, '11576981', 'BALAI PENELITIAN DAN PENGEMBANGAN PANTAI BULELENG', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '994', 'Layanan Perkantoran', '04-2431-99400-994-002-A', '10', 'Perlengkapan Perkantoran', '1 LAYANAN', 61290, 0, 0, 0, '05-02-2019  09:46:04');
INSERT INTO `emon_data_2019` VALUES (57, '11576981', 'BALAI PENELITIAN DAN PENGEMBANGAN PANTAI BULELENG', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '994', 'Layanan Perkantoran', '04-2431-99400-994-002-B', '11', 'Perawatan Gedung Kantor', '1 LAYANAN', 608011, 0, 0, 0, '05-02-2019  09:46:04');
INSERT INTO `emon_data_2019` VALUES (58, '11576981', 'BALAI PENELITIAN DAN PENGEMBANGAN PANTAI BULELENG', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '994', 'Layanan Perkantoran', '04-2431-99400-994-002-D', '12', 'Perawatan Sarana dan Prasarana Gedung', '1 LAYANAN', 130000, 0, 0, 0, '05-02-2019  09:46:04');
INSERT INTO `emon_data_2019` VALUES (59, '11576981', 'BALAI PENELITIAN DAN PENGEMBANGAN PANTAI BULELENG', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '994', 'Layanan Perkantoran', '04-2431-99400-994-002-E', '13', 'Perbaikan Peralatan Kantor', '1 LAYANAN', 75160, 0, 0, 0, '05-02-2019  09:46:04');
INSERT INTO `emon_data_2019` VALUES (60, '11576981', 'BALAI PENELITIAN DAN PENGEMBANGAN PANTAI BULELENG', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '994', 'Layanan Perkantoran', '04-2431-99400-994-002-F', '14', 'Perawatan Kendaraan Bermotor Roda 4/6/8/10', '1 LAYANAN', 140840, 0, 0, 0, '05-02-2019  09:46:04');
INSERT INTO `emon_data_2019` VALUES (61, '11576981', 'BALAI PENELITIAN DAN PENGEMBANGAN PANTAI BULELENG', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '994', 'Layanan Perkantoran', '04-2431-99400-994-002-H', '15', 'Langganan Daya dan Jasa', '1 LAYANAN', 783147, 52405, 6.69, 7.69, '05-02-2019  09:46:04');
INSERT INTO `emon_data_2019` VALUES (62, '11576981', 'BALAI PENELITIAN DAN PENGEMBANGAN PANTAI BULELENG', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '994', 'Layanan Perkantoran', '04-2431-99400-994-002-I', '16', 'Pengiriman Pos dan Giro', '1 LAYANAN', 4800, 0, 0, 0, '05-02-2019  09:46:04');
INSERT INTO `emon_data_2019` VALUES (63, '11576981', 'BALAI PENELITIAN DAN PENGEMBANGAN PANTAI BULELENG', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '994', 'Layanan Perkantoran', '04-2431-99400-994-002-K', '17', 'Satpam, Pengemudi, Petugas Kebersihan, dan Pramubakti', '1 LAYANAN', 1527444, 119262, 7.81, 7.81, '05-02-2019  09:46:04');
INSERT INTO `emon_data_2019` VALUES (64, '11576981', 'BALAI PENELITIAN DAN PENGEMBANGAN PANTAI BULELENG', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '994', 'Layanan Perkantoran', '04-2431-99400-994-002-N', '18', 'Pakaian Dinas Pegawai', '1 LAYANAN', 39210, 0, 0, 0, '05-02-2019  09:46:04');
INSERT INTO `emon_data_2019` VALUES (65, '11576981', 'BALAI PENELITIAN DAN PENGEMBANGAN PANTAI BULELENG', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '994', 'Layanan Perkantoran', '04-2431-99400-994-001-A', '7', 'Pembayaran Gaji dan Tunjangan', '1 LAYANAN', 808894, 119258, 14.74, 14.74, '05-02-2019  09:46:04');
INSERT INTO `emon_data_2019` VALUES (66, '11576981', 'BALAI PENELITIAN DAN PENGEMBANGAN PANTAI BULELENG', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '994', 'Layanan Perkantoran', '04-2431-99400-994-001-B', '8', 'Tunjangan Kinerja', '1 LAYANAN', 873245, 0, 0, 0, '05-02-2019  09:46:04');
INSERT INTO `emon_data_2019` VALUES (67, '11576981', 'BALAI PENELITIAN DAN PENGEMBANGAN PANTAI BULELENG', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '994', 'Layanan Perkantoran', '04-2431-99400-994-001-C', '9', 'Uang Makan dan Lembur', '1 LAYANAN', 11010, 0, 0, 0, '05-02-2019  09:46:04');
INSERT INTO `emon_data_2019` VALUES (68, '11622323', 'PUSAT PENELITIAN DAN PENGEMBANGAN SUMBER DAYA AIR', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '051', 'Teknologi Terapan', '04-2431-05100-002-116-A', '2', 'Konsep Pedoman (R0) Pembuatan Indeks Kekeringan Hidrologi', '1 TEKNOLOGI', 297228, 0, 0, 0, '13-02-2019  16:49:34');
INSERT INTO `emon_data_2019` VALUES (69, '11622323', 'PUSAT PENELITIAN DAN PENGEMBANGAN SUMBER DAYA AIR', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '051', 'Teknologi Terapan', '04-2431-05100-002-116-B', '3', 'Konsep Pedoman (R0) Perhitungan Indeks Ketahanan Air Pada Wilayah Sungai di Indonesia', '1 TEKNOLOGI', 268367, 0, 0, 0, '13-02-2019  16:49:34');
INSERT INTO `emon_data_2019` VALUES (70, '11622323', 'PUSAT PENELITIAN DAN PENGEMBANGAN SUMBER DAYA AIR', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '051', 'Teknologi Terapan', '04-2431-05100-003-109-A', '4', 'Pengembangan Teknologi Sirkulasi untuk Perbaikan Kualitas Air dengan Menghambat Pertumbuhan Alga di ', '1 TEKNOLOGI', 855058, 0, 0, 0, '13-02-2019  16:49:34');
INSERT INTO `emon_data_2019` VALUES (71, '11622323', 'PUSAT PENELITIAN DAN PENGEMBANGAN SUMBER DAYA AIR', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '051', 'Teknologi Terapan', '04-2431-05100-005-101-A', '5', 'Konsep Pedoman (R-0) Teknologi Blok Beton Terkunci Sebagai Bendung Modular', '1 TEKNOLOGI', 258088, 0, 0, 0, '13-02-2019  16:49:34');
INSERT INTO `emon_data_2019` VALUES (72, '11622323', 'PUSAT PENELITIAN DAN PENGEMBANGAN SUMBER DAYA AIR', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '051', 'Teknologi Terapan', '04-2431-05100-005-101-B', '6', 'Konsep Pedoman (R-0) Teknologi Airlock System Sebagai Pengganti Pintu Pada Intake Bendungan', '1 TEKNOLOGI', 262000, 0, 0, 0, '13-02-2019  16:49:34');
INSERT INTO `emon_data_2019` VALUES (73, '11622323', 'PUSAT PENELITIAN DAN PENGEMBANGAN SUMBER DAYA AIR', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '051', 'Teknologi Terapan', '04-2431-05100-005-101-C', '7', 'Konsep Pedoman (R-0) Evaluasi Risiko Keamanan Bendungan', '1 TEKNOLOGI', 311998, 0, 0, 0, '13-02-2019  16:49:34');
INSERT INTO `emon_data_2019` VALUES (74, '11622323', 'PUSAT PENELITIAN DAN PENGEMBANGAN SUMBER DAYA AIR', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '051', 'Teknologi Terapan', '04-2431-05100-005-101-D', '8', 'Konsep Pedoman (R-0) Teknologi Pengendali Muka Air (Hydraulic Elevator Dam)', '1 TEKNOLOGI', 561600, 0, 0, 0, '13-02-2019  16:49:34');
INSERT INTO `emon_data_2019` VALUES (75, '11622323', 'PUSAT PENELITIAN DAN PENGEMBANGAN SUMBER DAYA AIR', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '051', 'Teknologi Terapan', '04-2431-05100-005-101-E', '9', 'Naskah Ilmiah Studi kerentanan Keamanan Bendungan Terhadap Gempa Sesar', '1 TEKNOLOGI', 1019550, 0, 0, 0, '13-02-2019  16:49:34');
INSERT INTO `emon_data_2019` VALUES (76, '11622323', 'PUSAT PENELITIAN DAN PENGEMBANGAN SUMBER DAYA AIR', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '052', 'Rekomendasi Kebijakan', '04-2431-05200-002-202-A', '10', 'Perumusan Standar, Pedoman, Manual Bidang Sumber Daya Air', '1 NASKAH', 1260269, 0, 0, 0, '13-02-2019  16:49:34');
INSERT INTO `emon_data_2019` VALUES (77, '11622323', 'PUSAT PENELITIAN DAN PENGEMBANGAN SUMBER DAYA AIR', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '052', 'Rekomendasi Kebijakan', '04-2431-05200-002-202-B', '11', 'Penyusunan SPM Bidang Bangunan Hidraulik dan Geoteknik Keairan', '1 NASKAH', 132456, 0, 0, 0, '13-02-2019  16:49:34');
INSERT INTO `emon_data_2019` VALUES (78, '11622323', 'PUSAT PENELITIAN DAN PENGEMBANGAN SUMBER DAYA AIR', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '052', 'Rekomendasi Kebijakan', '04-2431-05200-002-202-C', '12', 'Penyusunan SPM Bidang Lingkungan Keairan', '1 NASKAH', 100592, 0, 0, 0, '13-02-2019  16:49:34');
INSERT INTO `emon_data_2019` VALUES (79, '11622323', 'PUSAT PENELITIAN DAN PENGEMBANGAN SUMBER DAYA AIR', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '052', 'Rekomendasi Kebijakan', '04-2431-05200-002-202-D', '13', 'Penyusunan SPM Bidang Hidrologi dan Tata Air', '1 NASKAH', 102932, 0, 0, 0, '13-02-2019  16:49:34');
INSERT INTO `emon_data_2019` VALUES (80, '11622323', 'PUSAT PENELITIAN DAN PENGEMBANGAN SUMBER DAYA AIR', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '052', 'Rekomendasi Kebijakan', '04-2431-05200-002-202-E', '14', 'Penyusunan SPM Bidang Irigasi', '1 NASKAH', 91316, 0, 0, 0, '13-02-2019  16:49:34');
INSERT INTO `emon_data_2019` VALUES (81, '11622323', 'PUSAT PENELITIAN DAN PENGEMBANGAN SUMBER DAYA AIR', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '052', 'Rekomendasi Kebijakan', '04-2431-05200-002-202-F', '15', 'Penyusunan SPM Bidang Sabo', '1 NASKAH', 118340, 0, 0, 0, '13-02-2019  16:49:34');
INSERT INTO `emon_data_2019` VALUES (82, '11622323', 'PUSAT PENELITIAN DAN PENGEMBANGAN SUMBER DAYA AIR', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '052', 'Rekomendasi Kebijakan', '04-2431-05200-002-202-G', '16', 'Penyusunan SPM Bidang Pantai', '1 NASKAH', 136943, 0, 0, 0, '13-02-2019  16:49:34');
INSERT INTO `emon_data_2019` VALUES (83, '11622323', 'PUSAT PENELITIAN DAN PENGEMBANGAN SUMBER DAYA AIR', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '052', 'Rekomendasi Kebijakan', '04-2431-05200-002-202-H', '17', 'Penyusunan SPM Bidang Sungai', '1 NASKAH', 108112, 0, 0, 0, '13-02-2019  16:49:34');
INSERT INTO `emon_data_2019` VALUES (84, '11622323', 'PUSAT PENELITIAN DAN PENGEMBANGAN SUMBER DAYA AIR', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '052', 'Rekomendasi Kebijakan', '04-2431-05200-002-202-I', '18', 'Penyusunan SPM Bidang Rawa', '1 NASKAH', 149322, 0, 0, 0, '13-02-2019  16:49:34');
INSERT INTO `emon_data_2019` VALUES (85, '11622323', 'PUSAT PENELITIAN DAN PENGEMBANGAN SUMBER DAYA AIR', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '053', 'Penerapan Teknologi Terbatas (Pilot Project)', '04-2431-05300-001-301-A', '19', 'Penerapan Sistem Pengelolaan SDA Pintar (Smart Water Management System (SWMS))', '1 UNIT', 503505, 0, 0, 0, '13-02-2019  16:49:34');
INSERT INTO `emon_data_2019` VALUES (86, '11622323', 'PUSAT PENELITIAN DAN PENGEMBANGAN SUMBER DAYA AIR', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '053', 'Penerapan Teknologi Terbatas (Pilot Project)', '04-2431-05300-001-301-B', '20', 'Pengendalian Limbah Cair Pada Air Permukaan', '1 UNIT', 5015683, 0, 0, 0, '13-02-2019  16:49:34');
INSERT INTO `emon_data_2019` VALUES (87, '11622323', 'PUSAT PENELITIAN DAN PENGEMBANGAN SUMBER DAYA AIR', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '053', 'Penerapan Teknologi Terbatas (Pilot Project)', '04-2431-05300-002-301-A', '21', 'Penerapan Teknologi Blok Beton Sebagai Peredam Energi Bertingkat', '1 UNIT', 451600, 0, 0, 0, '13-02-2019  16:49:34');
INSERT INTO `emon_data_2019` VALUES (88, '11622323', 'PUSAT PENELITIAN DAN PENGEMBANGAN SUMBER DAYA AIR', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '054', 'Layanan Teknis dan Alih Teknologi', '04-2431-05400-001-401-A', '22', 'Penyelenggaraan Diseminasi dan Pameran', '1 DOK', 1007691, 0, 0, 0, '13-02-2019  16:49:34');
INSERT INTO `emon_data_2019` VALUES (89, '11622323', 'PUSAT PENELITIAN DAN PENGEMBANGAN SUMBER DAYA AIR', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '054', 'Layanan Teknis dan Alih Teknologi', '04-2431-05400-002-402-A', '23', 'Advis Teknis dan Pendampingan Teknis Bidang Sumber Daya Air', '1 DOK', 3112914, 0, 0, 0, '13-02-2019  16:49:34');
INSERT INTO `emon_data_2019` VALUES (90, '11622323', 'PUSAT PENELITIAN DAN PENGEMBANGAN SUMBER DAYA AIR', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '054', 'Layanan Teknis dan Alih Teknologi', '04-2431-05400-002-402-B', '24', 'Dukungan Perencanaan Darurat Penanggulangan Bencana', '1 DOK', 595605, 0, 0, 0, '13-02-2019  16:49:34');
INSERT INTO `emon_data_2019` VALUES (91, '11622323', 'PUSAT PENELITIAN DAN PENGEMBANGAN SUMBER DAYA AIR', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '054', 'Layanan Teknis dan Alih Teknologi', '04-2431-05400-002-402-C', '25', 'Penerapan Sistem Penanganan Banjir Bandung', '1 DOK', 360026, 0, 0, 0, '13-02-2019  16:49:34');
INSERT INTO `emon_data_2019` VALUES (92, '11622323', 'PUSAT PENELITIAN DAN PENGEMBANGAN SUMBER DAYA AIR', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '054', 'Layanan Teknis dan Alih Teknologi', '04-2431-05400-002-402-D', '26', 'Kajian Penyelidikan Amblesan (Subsidence) dikawasan Jakarta Dukungan PTPIN-NCICD', '1 DOK', 438000, 0, 0, 0, '13-02-2019  16:49:34');
INSERT INTO `emon_data_2019` VALUES (93, '11622323', 'PUSAT PENELITIAN DAN PENGEMBANGAN SUMBER DAYA AIR', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '054', 'Layanan Teknis dan Alih Teknologi', '04-2431-05400-002-402-E', '27', 'Pemodelan Kualitas Air Sungai dan Teluk Jakarta', '1 DOK', 521664, 0, 0, 0, '13-02-2019  16:49:34');
INSERT INTO `emon_data_2019` VALUES (94, '11622323', 'PUSAT PENELITIAN DAN PENGEMBANGAN SUMBER DAYA AIR', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '054', 'Layanan Teknis dan Alih Teknologi', '04-2431-05400-002-402-F', '28', 'Basis Data dan Knowledge Management NCICD', '1 DOK', 1385534, 0, 0, 0, '13-02-2019  16:49:34');
INSERT INTO `emon_data_2019` VALUES (95, '11622323', 'PUSAT PENELITIAN DAN PENGEMBANGAN SUMBER DAYA AIR', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '054', 'Layanan Teknis dan Alih Teknologi', '04-2431-05400-002-402-G', '29', 'Strategi Penanggulangan Dampak Pengambilan Air Tanah Berlebihan di Wilayah Perkotaan', '1 DOK', 390440, 0, 0, 0, '13-02-2019  16:49:34');
INSERT INTO `emon_data_2019` VALUES (96, '11622323', 'PUSAT PENELITIAN DAN PENGEMBANGAN SUMBER DAYA AIR', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '054', 'Layanan Teknis dan Alih Teknologi', '04-2431-05400-002-402-H', '30', 'Updating dan Perumusan Debit Banjir Desain Jakarta', '1 DOK', 424065, 0, 0, 0, '13-02-2019  16:49:34');
INSERT INTO `emon_data_2019` VALUES (97, '11622323', 'PUSAT PENELITIAN DAN PENGEMBANGAN SUMBER DAYA AIR', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '054', 'Layanan Teknis dan Alih Teknologi', '04-2431-05400-002-402-I', '31', 'Pemodelan dan Pemantauan Kualitas Air', '1 DOK', 1340844, 0, 0, 0, '13-02-2019  16:49:34');
INSERT INTO `emon_data_2019` VALUES (98, '11622323', 'PUSAT PENELITIAN DAN PENGEMBANGAN SUMBER DAYA AIR', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '054', 'Layanan Teknis dan Alih Teknologi', '04-2431-05400-003-403-A', '32', 'Penyelenggaraan Laboratorium Balai Litbang Lingkungan Keairan', '1 DOK', 523074, 0, 0, 0, '13-02-2019  16:49:34');
INSERT INTO `emon_data_2019` VALUES (99, '11622323', 'PUSAT PENELITIAN DAN PENGEMBANGAN SUMBER DAYA AIR', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '054', 'Layanan Teknis dan Alih Teknologi', '04-2431-05400-003-403-B', '33', 'Penyelenggaraan Laboratorium Balai Litbang HITA', '1 DOK', 401968, 0, 0, 0, '13-02-2019  16:49:34');
INSERT INTO `emon_data_2019` VALUES (100, '11622323', 'PUSAT PENELITIAN DAN PENGEMBANGAN SUMBER DAYA AIR', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '054', 'Layanan Teknis dan Alih Teknologi', '04-2431-05400-003-403-C', '34', 'Penyelenggaraan Laboratorium Balai Litbang Bangunan Hidraulik dan Geoteknik Keairan', '1 DOK', 291848, 0, 0, 0, '13-02-2019  16:49:34');
INSERT INTO `emon_data_2019` VALUES (101, '11622323', 'PUSAT PENELITIAN DAN PENGEMBANGAN SUMBER DAYA AIR', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '054', 'Layanan Teknis dan Alih Teknologi', '04-2431-05400-003-403-D', '35', 'Dokumen Dam Operational Improvement And Safety Project II', '1 UNIT', 23553000, 0, 0, 0, '13-02-2019  16:49:34');
INSERT INTO `emon_data_2019` VALUES (102, '11622323', 'PUSAT PENELITIAN DAN PENGEMBANGAN SUMBER DAYA AIR', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '054', 'Layanan Teknis dan Alih Teknologi', '04-2431-05400-003-403-F', '36', 'Kesekretariatan Lembaga Inspeksi Bidang Sumber Daya Air', '1 DOK', 109652, 0, 0, 0, '13-02-2019  16:49:34');
INSERT INTO `emon_data_2019` VALUES (103, '11622323', 'PUSAT PENELITIAN DAN PENGEMBANGAN SUMBER DAYA AIR', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '054', 'Layanan Teknis dan Alih Teknologi', '04-2431-05400-003-403-G', '37', 'Layanan Inspeksi Kinerja Pos Duga Air Balai Litbang HITA', '1 DOK', 99676, 0, 0, 0, '13-02-2019  16:49:34');
INSERT INTO `emon_data_2019` VALUES (104, '11622323', 'PUSAT PENELITIAN DAN PENGEMBANGAN SUMBER DAYA AIR', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '054', 'Layanan Teknis dan Alih Teknologi', '04-2431-05400-003-403-H', '38', 'Layanan Inspeksi Lingkup Kinerja Instalasi Pengolahan Air Limbah Balai Litbang LK', '1 DOK', 106176, 0, 0, 0, '13-02-2019  16:49:34');
INSERT INTO `emon_data_2019` VALUES (105, '11622323', 'PUSAT PENELITIAN DAN PENGEMBANGAN SUMBER DAYA AIR', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '054', 'Layanan Teknis dan Alih Teknologi', '04-2431-05400-003-403-I', '39', 'Layanan Inspeksi Kinerja Sistem Irigasi Balai Litbang Irigasi', '1 DOK', 105914, 0, 0, 0, '13-02-2019  16:49:34');
INSERT INTO `emon_data_2019` VALUES (106, '11622323', 'PUSAT PENELITIAN DAN PENGEMBANGAN SUMBER DAYA AIR', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '054', 'Layanan Teknis dan Alih Teknologi', '04-2431-05400-003-403-J', '40', 'Layanan Inspeksi Kinerja Bangunan Sabo Balai Litbang Sabo', '1 DOK', 126905, 0, 0, 0, '13-02-2019  16:49:34');
INSERT INTO `emon_data_2019` VALUES (107, '11622323', 'PUSAT PENELITIAN DAN PENGEMBANGAN SUMBER DAYA AIR', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '054', 'Layanan Teknis dan Alih Teknologi', '04-2431-05400-004-404-A', '41', 'Pengelolaan Basis Data dan TIK', '1 DOK', 390000, 0, 0, 0, '13-02-2019  16:49:34');
INSERT INTO `emon_data_2019` VALUES (108, '11622323', 'PUSAT PENELITIAN DAN PENGEMBANGAN SUMBER DAYA AIR', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '054', 'Layanan Teknis dan Alih Teknologi', '04-2431-05400-004-404-B', '42', 'Pengelolaan Basis Data dan Sistem Informasi SDA Bidang Bangunan Hidraulik dan Geoteknik Keairan', '1 DOK', 455800, 0, 0, 0, '13-02-2019  16:49:34');
INSERT INTO `emon_data_2019` VALUES (109, '11622323', 'PUSAT PENELITIAN DAN PENGEMBANGAN SUMBER DAYA AIR', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '054', 'Layanan Teknis dan Alih Teknologi', '04-2431-05400-004-404-C', '43', 'Evaluasi Penerapan Teknologi dan Pengelolaan Sistem Informasi Bidang Lingkungan Keairan', '1 DOK', 454468, 0, 0, 0, '13-02-2019  16:49:34');
INSERT INTO `emon_data_2019` VALUES (110, '11622323', 'PUSAT PENELITIAN DAN PENGEMBANGAN SUMBER DAYA AIR', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '054', 'Layanan Teknis dan Alih Teknologi', '04-2431-05400-004-404-D', '44', 'Pusat Studi Hidroinformatika Nasional', '1 DOK', 466340, 0, 0, 0, '13-02-2019  16:49:34');
INSERT INTO `emon_data_2019` VALUES (111, '11622323', 'PUSAT PENELITIAN DAN PENGEMBANGAN SUMBER DAYA AIR', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '054', 'Layanan Teknis dan Alih Teknologi', '04-2431-05400-004-404-E', '45', 'Jaringan Hidrologi Secara Realtime', '1 DOK', 624723, 0, 0, 0, '13-02-2019  16:49:34');
INSERT INTO `emon_data_2019` VALUES (112, '11622323', 'PUSAT PENELITIAN DAN PENGEMBANGAN SUMBER DAYA AIR', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '054', 'Layanan Teknis dan Alih Teknologi', '04-2431-05400-004-404-F', '46', 'Manajemen Pengelolaan Data dan Basis Data Hidrologi', '1 DOK', 598713, 0, 0, 0, '13-02-2019  16:49:34');
INSERT INTO `emon_data_2019` VALUES (113, '11622323', 'PUSAT PENELITIAN DAN PENGEMBANGAN SUMBER DAYA AIR', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '054', 'Layanan Teknis dan Alih Teknologi', '04-2431-05400-004-404-G', '47', 'Dukungan, Pemantauan dan Evaluasi Teknis Hidrologi Wilayah Sungai', '1 DOK', 1016824, 0, 0, 0, '13-02-2019  16:49:34');
INSERT INTO `emon_data_2019` VALUES (114, '11622323', 'PUSAT PENELITIAN DAN PENGEMBANGAN SUMBER DAYA AIR', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '054', 'Layanan Teknis dan Alih Teknologi', '04-2431-05400-004-404-H', '48', 'Pengembangan Knowledge Management dan Sistem Informasi Terintegrasi Puslitbang SDA', '1 DOK', 1480823, 0, 0, 0, '13-02-2019  16:49:34');
INSERT INTO `emon_data_2019` VALUES (115, '11622323', 'PUSAT PENELITIAN DAN PENGEMBANGAN SUMBER DAYA AIR', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '054', 'Layanan Teknis dan Alih Teknologi', '04-2431-05400-005-405-A', '49', 'Administrasi Kegiatan PNBP', '1 DOK', 197550, 0, 0, 0, '13-02-2019  16:49:34');
INSERT INTO `emon_data_2019` VALUES (116, '11622323', 'PUSAT PENELITIAN DAN PENGEMBANGAN SUMBER DAYA AIR', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '054', 'Layanan Teknis dan Alih Teknologi', '04-2431-05400-005-405-B', '50', 'Jasa Pelayanan Litbang Bidang SDA', '1 DOK', 2252450, 0, 0, 0, '13-02-2019  16:49:34');
INSERT INTO `emon_data_2019` VALUES (117, '11622323', 'PUSAT PENELITIAN DAN PENGEMBANGAN SUMBER DAYA AIR', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '970', 'Layanan Dukungan Manajemen Satker', '04-2431-97000-001-051-A', '51', 'Penyusunan Rencana Kerja dan Anggaran', '1 DOK', 1000000, 0, 0, 0, '13-02-2019  16:49:34');
INSERT INTO `emon_data_2019` VALUES (118, '11622323', 'PUSAT PENELITIAN DAN PENGEMBANGAN SUMBER DAYA AIR', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '970', 'Layanan Dukungan Manajemen Satker', '04-2431-97000-001-052-A', '52', 'Pemantauan, Evaluasi dan Pelaporan', '1 DOK', 1500000, 0, 0, 0, '13-02-2019  16:49:34');
INSERT INTO `emon_data_2019` VALUES (119, '11622323', 'PUSAT PENELITIAN DAN PENGEMBANGAN SUMBER DAYA AIR', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '970', 'Layanan Dukungan Manajemen Satker', '04-2431-97000-001-053-A', '53', 'Pengelolaan Keuangan', '1 DOK', 512028, 0, 0, 0, '13-02-2019  16:49:34');
INSERT INTO `emon_data_2019` VALUES (120, '11622323', 'PUSAT PENELITIAN DAN PENGEMBANGAN SUMBER DAYA AIR', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '970', 'Layanan Dukungan Manajemen Satker', '04-2431-97000-001-054-A', '54', 'Pengembangan Sumber Daya Manusia dan Pengelolaan Administrasi Kepegawaian', '1 DOK', 2307807, 0, 0, 0, '13-02-2019  16:49:34');
INSERT INTO `emon_data_2019` VALUES (121, '11622323', 'PUSAT PENELITIAN DAN PENGEMBANGAN SUMBER DAYA AIR', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '970', 'Layanan Dukungan Manajemen Satker', '04-2431-97000-001-054-B', '55', 'Penyelenggaraan Seminar dan Lomba Karya Ilmiah', '1 DOK', 996738, 0, 0, 0, '13-02-2019  16:49:34');
INSERT INTO `emon_data_2019` VALUES (122, '11622323', 'PUSAT PENELITIAN DAN PENGEMBANGAN SUMBER DAYA AIR', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '970', 'Layanan Dukungan Manajemen Satker', '04-2431-97000-001-054-C', '56', 'Pengelolaan HKI', '1 DOK', 90000, 0, 0, 0, '13-02-2019  16:49:34');
INSERT INTO `emon_data_2019` VALUES (123, '11622323', 'PUSAT PENELITIAN DAN PENGEMBANGAN SUMBER DAYA AIR', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '970', 'Layanan Dukungan Manajemen Satker', '04-2431-97000-001-055-A', '57', 'Pengelolaan dan Pembinaan  BMN dan Tata Persuratan dan Kearsipan', '1 DOK', 635029, 0, 0, 0, '13-02-2019  16:49:34');
INSERT INTO `emon_data_2019` VALUES (124, '11622323', 'PUSAT PENELITIAN DAN PENGEMBANGAN SUMBER DAYA AIR', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '970', 'Layanan Dukungan Manajemen Satker', '04-2431-97000-001-055-B', '58', 'Humas dan Protokoler', '1 DOK', 750000, 0, 0, 0, '13-02-2019  16:49:34');
INSERT INTO `emon_data_2019` VALUES (125, '11622323', 'PUSAT PENELITIAN DAN PENGEMBANGAN SUMBER DAYA AIR', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '970', 'Layanan Dukungan Manajemen Satker', '04-2431-97000-001-055-C', '59', 'Kerjasama Dalam dan Luar Negeri', '1 DOK', 597695, 0, 0, 0, '13-02-2019  16:49:34');
INSERT INTO `emon_data_2019` VALUES (126, '11622323', 'PUSAT PENELITIAN DAN PENGEMBANGAN SUMBER DAYA AIR', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '970', 'Layanan Dukungan Manajemen Satker', '04-2431-97000-001-055-D', '60', 'Peningkatan Sarana Kelitbangan', '1 DOK', 1800000, 0, 0, 0, '13-02-2019  16:49:34');
INSERT INTO `emon_data_2019` VALUES (127, '11622323', 'PUSAT PENELITIAN DAN PENGEMBANGAN SUMBER DAYA AIR', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '970', 'Layanan Dukungan Manajemen Satker', '04-2431-97000-001-055-E', '61', 'Penyelenggaraan Perpustakaan', '1 DOK', 213390, 0, 0, 0, '13-02-2019  16:49:34');
INSERT INTO `emon_data_2019` VALUES (128, '11622323', 'PUSAT PENELITIAN DAN PENGEMBANGAN SUMBER DAYA AIR', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '970', 'Layanan Dukungan Manajemen Satker', '04-2431-97000-001-055-F', '62', 'Penyusunan Dan Pencetakan Jurnal Bidang Sumber Daya Air', '1 DOK', 700000, 0, 0, 0, '13-02-2019  16:49:34');
INSERT INTO `emon_data_2019` VALUES (129, '11622323', 'PUSAT PENELITIAN DAN PENGEMBANGAN SUMBER DAYA AIR', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '970', 'Layanan Dukungan Manajemen Satker', '04-2431-97000-001-055-G', '63', 'Administrasi Kesatkeran', '1 DOK', 992669, 0, 0, 0, '13-02-2019  16:49:34');
INSERT INTO `emon_data_2019` VALUES (130, '11622323', 'PUSAT PENELITIAN DAN PENGEMBANGAN SUMBER DAYA AIR', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '994', 'Layanan Perkantoran', '04-2431-99400-994-002-K', '1', 'Satpam, Pengemudi, Petugas Kebersihan, Dokter dan Non PNS', '1 LAYANAN', 8452003, 579583, 6.86, 0, '13-02-2019  16:49:34');
INSERT INTO `emon_data_2019` VALUES (131, '11622323', 'PUSAT PENELITIAN DAN PENGEMBANGAN SUMBER DAYA AIR', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '994', 'Layanan Perkantoran', '04-2431-99400-994-001-A', '64', 'Pembayaran Gaji dan Tunjangan', '1 LAYANAN', 10985561, 2314015, 21.06, 6.79, '13-02-2019  16:49:34');
INSERT INTO `emon_data_2019` VALUES (132, '11622323', 'PUSAT PENELITIAN DAN PENGEMBANGAN SUMBER DAYA AIR', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '994', 'Layanan Perkantoran', '04-2431-99400-994-001-B', '65', 'Tunjangan Kinerja', '1 LAYANAN', 8289865, 0, 0, 0, '13-02-2019  16:49:34');
INSERT INTO `emon_data_2019` VALUES (133, '11622323', 'PUSAT PENELITIAN DAN PENGEMBANGAN SUMBER DAYA AIR', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '994', 'Layanan Perkantoran', '04-2431-99400-994-001-C', '66', 'Uang Lembur dan Uang Makan Lembur', '1 LAYANAN', 66320, 0, 0, 0, '13-02-2019  16:49:34');
INSERT INTO `emon_data_2019` VALUES (134, '11622323', 'PUSAT PENELITIAN DAN PENGEMBANGAN SUMBER DAYA AIR', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '994', 'Layanan Perkantoran', '04-2431-99400-994-002-A', '67', 'Perlengkapan Perkantoran', '1 LAYANAN', 256880, 0, 0, 0, '13-02-2019  16:49:34');
INSERT INTO `emon_data_2019` VALUES (135, '11622323', 'PUSAT PENELITIAN DAN PENGEMBANGAN SUMBER DAYA AIR', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '994', 'Layanan Perkantoran', '04-2431-99400-994-002-B', '68', 'Perawatan Gedung Kantor', '1 LAYANAN', 1549040, 0, 0, 0, '13-02-2019  16:49:34');
INSERT INTO `emon_data_2019` VALUES (136, '11622323', 'PUSAT PENELITIAN DAN PENGEMBANGAN SUMBER DAYA AIR', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '994', 'Layanan Perkantoran', '04-2431-99400-994-002-D', '69', 'Perawatan Sarana dan Prasarana Gedung', '1 LAYANAN', 414657, 0, 0, 0, '13-02-2019  16:49:34');
INSERT INTO `emon_data_2019` VALUES (137, '11622323', 'PUSAT PENELITIAN DAN PENGEMBANGAN SUMBER DAYA AIR', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '994', 'Layanan Perkantoran', '04-2431-99400-994-002-E', '70', 'Perbaikan Peralatan Kantor', '1 LAYANAN', 84440, 0, 0, 0, '13-02-2019  16:49:34');
INSERT INTO `emon_data_2019` VALUES (138, '11622323', 'PUSAT PENELITIAN DAN PENGEMBANGAN SUMBER DAYA AIR', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '994', 'Layanan Perkantoran', '04-2431-99400-994-002-F', '71', 'Perawatan Kendaraan Bermotor Roda 4/6/8/10', '1 LAYANAN', 533600, 0, 0, 0, '13-02-2019  16:49:34');
INSERT INTO `emon_data_2019` VALUES (139, '11622323', 'PUSAT PENELITIAN DAN PENGEMBANGAN SUMBER DAYA AIR', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '994', 'Layanan Perkantoran', '04-2431-99400-994-002-G', '72', 'Perawatan Kendaraan Bermotor Roda 2', '1 LAYANAN', 7340, 0, 0, 0, '13-02-2019  16:49:34');
INSERT INTO `emon_data_2019` VALUES (140, '11622323', 'PUSAT PENELITIAN DAN PENGEMBANGAN SUMBER DAYA AIR', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '994', 'Layanan Perkantoran', '04-2431-99400-994-002-H', '73', 'Langganan Daya dan Jasa', '1 LAYANAN', 1382351, 102024, 7.38, 3.8, '13-02-2019  16:49:34');
INSERT INTO `emon_data_2019` VALUES (141, '11622323', 'PUSAT PENELITIAN DAN PENGEMBANGAN SUMBER DAYA AIR', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '994', 'Layanan Perkantoran', '04-2431-99400-994-002-I', '74', 'Pengiriman Pos dan Giro', '1 LAYANAN', 27600, 0, 0, 0, '13-02-2019  16:49:34');
INSERT INTO `emon_data_2019` VALUES (142, '11622323', 'PUSAT PENELITIAN DAN PENGEMBANGAN SUMBER DAYA AIR', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '994', 'Layanan Perkantoran', '04-2431-99400-994-002-L', '75', 'Jamuan Tamu', '1 LAYANAN', 51750, 0, 0, 0, '13-02-2019  16:49:34');
INSERT INTO `emon_data_2019` VALUES (143, '11622323', 'PUSAT PENELITIAN DAN PENGEMBANGAN SUMBER DAYA AIR', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '994', 'Layanan Perkantoran', '04-2431-99400-994-002-M', '76', 'Operasional Perkantoran dan Pimpinan', '1 LAYANAN', 180073, 0, 0, 0, '13-02-2019  16:49:34');
INSERT INTO `emon_data_2019` VALUES (144, '11622323', 'PUSAT PENELITIAN DAN PENGEMBANGAN SUMBER DAYA AIR', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '994', 'Layanan Perkantoran', '04-2431-99400-994-002-O', '77', 'Obat-obatan', '1 LAYANAN', 110400, 0, 0, 0, '13-02-2019  16:49:34');
INSERT INTO `emon_data_2019` VALUES (145, '11636846', 'BALAI PENELITIAN DAN PENGEMBANGAN SUNGAI SURAKARTA', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '051', 'Teknologi Terapan', '04-2431-05100-002-110-A', '1', 'Konsep Pedoman (R0) Perencanaan Teknis Pompa Air Tenaga Hidro Dengan Turbin Turbo Propeller', '1 TEKNOLOGI', 287546, 15829, 5.5, 8, '15-02-2019  16:05:33');
INSERT INTO `emon_data_2019` VALUES (146, '11636846', 'BALAI PENELITIAN DAN PENGEMBANGAN SUNGAI SURAKARTA', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '051', 'Teknologi Terapan', '04-2431-05100-003-113-A', '2', 'Konsep Pedoman (R-0) Pemanfaatan Lumpur Sidoarjo untuk Material Timbunan Tanggul', '1 TEKNOLOGI', 303447, 4492, 1.48, 3.55, '15-02-2019  16:05:33');
INSERT INTO `emon_data_2019` VALUES (147, '11636846', 'BALAI PENELITIAN DAN PENGEMBANGAN SUNGAI SURAKARTA', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '051', 'Teknologi Terapan', '04-2431-05100-003-113-B', '3', 'Prototipe Teknologi Pelindung Tebing Sungai Dengan Interlocking Permeable Revertment', '1 TEKNOLOGI', 1538916, 14949, 0.97, 1.65, '15-02-2019  16:05:33');
INSERT INTO `emon_data_2019` VALUES (148, '11636846', 'BALAI PENELITIAN DAN PENGEMBANGAN SUNGAI SURAKARTA', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '053', 'Penerapan Teknologi Terbatas (Pilot Project)', '04-2431-05300-003-301-A', '4', 'Penerapan Teknologi Pemanfaatan Saluran Irigasi untuk Pembangkit Listrik Tenaga Mikrohidro', '1 UNIT', 1035756, 8629, 0.83, 0.76, '15-02-2019  16:05:33');
INSERT INTO `emon_data_2019` VALUES (149, '11636846', 'BALAI PENELITIAN DAN PENGEMBANGAN SUNGAI SURAKARTA', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '053', 'Penerapan Teknologi Terbatas (Pilot Project)', '04-2431-05300-004-301-A', '5', 'Penerapan Perangkat Lunak Inspeksi Sungai dan Prasarana Sungai', '1 UNIT', 733370, 10727, 1.46, 1.94, '15-02-2019  16:05:33');
INSERT INTO `emon_data_2019` VALUES (150, '11636846', 'BALAI PENELITIAN DAN PENGEMBANGAN SUNGAI SURAKARTA', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '054', 'Layanan Teknis dan Alih Teknologi', '04-2431-05400-003-403-A', '6', 'Penyelenggaraan Laboratorium Balai Litbang Sungai', '1 DOK', 497651, 6618, 1.33, 10, '15-02-2019  16:05:33');
INSERT INTO `emon_data_2019` VALUES (151, '11636846', 'BALAI PENELITIAN DAN PENGEMBANGAN SUNGAI SURAKARTA', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '054', 'Layanan Teknis dan Alih Teknologi', '04-2431-05400-004-404-A', '7', 'Evaluasi Penerapan Teknologi dan Pengelolaan Sistem Informasi Bidang Sungai', '1 DOK', 302578, 8362, 2.76, 4.46, '15-02-2019  16:05:33');
INSERT INTO `emon_data_2019` VALUES (152, '11636846', 'BALAI PENELITIAN DAN PENGEMBANGAN SUNGAI SURAKARTA', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '970', 'Layanan Dukungan Manajemen Satker', '04-2431-97000-001-051-A', '25', 'Penyusunan RKA-KL dan DIPA', '1 LAYANAN', 97016, 7925, 8.17, 8.17, '15-02-2019  16:05:33');
INSERT INTO `emon_data_2019` VALUES (153, '11636846', 'BALAI PENELITIAN DAN PENGEMBANGAN SUNGAI SURAKARTA', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '970', 'Layanan Dukungan Manajemen Satker', '04-2431-97000-001-055-A', '26', 'Administrasi Kesatkeran', '12 BULAN', 562133, 55962, 9.96, 9.96, '15-02-2019  16:05:33');
INSERT INTO `emon_data_2019` VALUES (154, '11636846', 'BALAI PENELITIAN DAN PENGEMBANGAN SUNGAI SURAKARTA', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '970', 'Layanan Dukungan Manajemen Satker', '04-2431-97000-001-055-B', '27', 'Penyelenggaraan Perpustakaan Balai Litbang Sungai', '1 PKT', 20000, 0, 0, 0, '15-02-2019  16:05:33');
INSERT INTO `emon_data_2019` VALUES (155, '11636846', 'BALAI PENELITIAN DAN PENGEMBANGAN SUNGAI SURAKARTA', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '994', 'Layanan Perkantoran', '04-2431-99400-994-001-A', '11', 'Pembayaran Gaji dan Tunjangan', '12 BULAN', 2196656, 404592, 18.42, 18.42, '15-02-2019  16:05:33');
INSERT INTO `emon_data_2019` VALUES (156, '11636846', 'BALAI PENELITIAN DAN PENGEMBANGAN SUNGAI SURAKARTA', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '994', 'Layanan Perkantoran', '04-2431-99400-994-001-B', '12', 'Tunjangan Kinerja', '12 BULAN', 1577550, 0, 0, 0, '15-02-2019  16:05:33');
INSERT INTO `emon_data_2019` VALUES (157, '11636846', 'BALAI PENELITIAN DAN PENGEMBANGAN SUNGAI SURAKARTA', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '994', 'Layanan Perkantoran', '04-2431-99400-994-001-C', '13', 'Uang Lembur', '12 BULAN', 13960, 0, 0, 0, '15-02-2019  16:05:33');
INSERT INTO `emon_data_2019` VALUES (158, '11636846', 'BALAI PENELITIAN DAN PENGEMBANGAN SUNGAI SURAKARTA', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '994', 'Layanan Perkantoran', '04-2431-99400-994-002-A', '14', 'Perlengkapan Perkantoran', '12 BULAN', 60870, 0, 0, 4.62, '15-02-2019  16:05:33');
INSERT INTO `emon_data_2019` VALUES (159, '11636846', 'BALAI PENELITIAN DAN PENGEMBANGAN SUNGAI SURAKARTA', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '994', 'Layanan Perkantoran', '04-2431-99400-994-002-B', '15', 'Perawatan Gedung Kantor', '12 BULAN', 718300, 19092, 2.66, 2.73, '15-02-2019  16:05:33');
INSERT INTO `emon_data_2019` VALUES (160, '11636846', 'BALAI PENELITIAN DAN PENGEMBANGAN SUNGAI SURAKARTA', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '994', 'Layanan Perkantoran', '04-2431-99400-994-002-D', '16', 'Perawatan Sarana dan Prasarana Gedung', '12 BULAN', 119480, 0, 0, 0, '15-02-2019  16:05:33');
INSERT INTO `emon_data_2019` VALUES (161, '11636846', 'BALAI PENELITIAN DAN PENGEMBANGAN SUNGAI SURAKARTA', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '994', 'Layanan Perkantoran', '04-2431-99400-994-002-E', '17', 'Perbaikan Peralatan Kantor', '12 BULAN', 63380, 0, 0, 2.22, '15-02-2019  16:05:33');
INSERT INTO `emon_data_2019` VALUES (162, '11636846', 'BALAI PENELITIAN DAN PENGEMBANGAN SUNGAI SURAKARTA', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '994', 'Layanan Perkantoran', '04-2431-99400-994-002-F', '18', 'Perawatan Kendaraan Bermotor Roda 4/6/8/10', '12 BULAN', 174400, 0, 0, 13.76, '15-02-2019  16:05:33');
INSERT INTO `emon_data_2019` VALUES (163, '11636846', 'BALAI PENELITIAN DAN PENGEMBANGAN SUNGAI SURAKARTA', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '994', 'Layanan Perkantoran', '04-2431-99400-994-002-H', '19', 'Langganan Daya dan Jasa', '12 BULAN', 468000, 29287, 6.26, 6.26, '15-02-2019  16:05:33');
INSERT INTO `emon_data_2019` VALUES (164, '11636846', 'BALAI PENELITIAN DAN PENGEMBANGAN SUNGAI SURAKARTA', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '994', 'Layanan Perkantoran', '04-2431-99400-994-002-I', '20', 'Pengiriman Pos dan Giro', '12 BULAN', 3000, 0, 0, 0, '15-02-2019  16:05:33');
INSERT INTO `emon_data_2019` VALUES (165, '11636846', 'BALAI PENELITIAN DAN PENGEMBANGAN SUNGAI SURAKARTA', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '994', 'Layanan Perkantoran', '04-2431-99400-994-002-K', '21', 'Satpam, Pengemudi, Petugas Kebersihan, dan Pramubakti', '12 BULAN', 1906372, 152382, 7.99, 8.33, '15-02-2019  16:05:33');
INSERT INTO `emon_data_2019` VALUES (166, '11636846', 'BALAI PENELITIAN DAN PENGEMBANGAN SUNGAI SURAKARTA', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '994', 'Layanan Perkantoran', '04-2431-99400-994-002-M', '22', 'Operasional Perkantoran dan Pimpinan', '12 BULAN', 130000, 30401, 23.39, 23.39, '15-02-2019  16:05:33');
INSERT INTO `emon_data_2019` VALUES (167, '11636846', 'BALAI PENELITIAN DAN PENGEMBANGAN SUNGAI SURAKARTA', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '994', 'Layanan Perkantoran', '04-2431-99400-994-002-O', '23', 'Pengadaan Pakaian Seragam Pegawai', '12 BULAN', 33195, 0, 0, 0, '15-02-2019  16:05:33');
INSERT INTO `emon_data_2019` VALUES (168, '11636846', 'BALAI PENELITIAN DAN PENGEMBANGAN SUNGAI SURAKARTA', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '994', 'Layanan Perkantoran', '04-2431-99400-994-002-P', '24', 'Penyelenggaraan Perpustakaan', '12 BULAN', 45067, 0, 0, 0, '15-02-2019  16:05:33');
INSERT INTO `emon_data_2019` VALUES (169, '11636850', 'BALAI PENELITIAN DAN PENGEMBANGAN RAWA BANJARMASIN', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '053', 'Penerapan Teknologi Terbatas (Pilot Project)', '04-2431-05300-003-301-A', '1', 'Penerapan Teknologi Kampas Beton Dalam Mendukung Modernisasi Irigasi pada Lahan Rawa', '1 UNIT', 8833911, 43342, 0.49, 0.49, '12-02-2019  15:38:04');
INSERT INTO `emon_data_2019` VALUES (170, '11636850', 'BALAI PENELITIAN DAN PENGEMBANGAN RAWA BANJARMASIN', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '053', 'Penerapan Teknologi Terbatas (Pilot Project)', '04-2431-05300-003-301-B', '4', 'Penerapan Teknologi Tata Air Mikro Sistem Satu Arah', '1 UNIT', 1549536, 12053, 0.78, 0.78, '12-02-2019  15:38:04');
INSERT INTO `emon_data_2019` VALUES (171, '11636850', 'BALAI PENELITIAN DAN PENGEMBANGAN RAWA BANJARMASIN', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '054', 'Layanan Teknis dan Alih Teknologi', '04-2431-05400-002-402-A', '5', 'Pendampingan Teknis Mini Polder di Rawa Lebak', '1 DOK', 624097, 6367, 1.02, 1.02, '12-02-2019  15:38:04');
INSERT INTO `emon_data_2019` VALUES (172, '11636850', 'BALAI PENELITIAN DAN PENGEMBANGAN RAWA BANJARMASIN', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '054', 'Layanan Teknis dan Alih Teknologi', '04-2431-05400-003-403-A', '6', 'Penyelenggaraan Laboratorium Balai Litbang Rawa', '1 DOK', 1185891, 28902, 2.44, 2.44, '12-02-2019  15:38:04');
INSERT INTO `emon_data_2019` VALUES (173, '11636850', 'BALAI PENELITIAN DAN PENGEMBANGAN RAWA BANJARMASIN', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '054', 'Layanan Teknis dan Alih Teknologi', '04-2431-05400-003-403-B', '6', 'Penyelenggaraan Laboratorium Balai Litbang Rawa', '1 DOK', 1185891, 28902, 2.44, 2.44, '12-02-2019  15:38:04');
INSERT INTO `emon_data_2019` VALUES (174, '11636850', 'BALAI PENELITIAN DAN PENGEMBANGAN RAWA BANJARMASIN', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '054', 'Layanan Teknis dan Alih Teknologi', '04-2431-05400-004-404-A', '8', 'Evaluasi Penerapan Teknologi dan Pengelolaan Sistem Informasi Bidang Rawa', '1 DOK', 275552, 20667, 7.5, 7.5, '12-02-2019  15:38:04');
INSERT INTO `emon_data_2019` VALUES (175, '11636850', 'BALAI PENELITIAN DAN PENGEMBANGAN RAWA BANJARMASIN', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '951', 'Layanan Sarana dan Prasarana Internal', '04-2431-95100-001-998-A', '10', 'Pengadaan Gedung/ Bangunan Pembangunan Prasarana dan Sarana Internal', '1 LAYANAN', 7261113, 6330, 0.09, 0.09, '12-02-2019  15:38:04');
INSERT INTO `emon_data_2019` VALUES (176, '11636850', 'BALAI PENELITIAN DAN PENGEMBANGAN RAWA BANJARMASIN', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '951', 'Layanan Sarana dan Prasarana Internal', '04-2431-95100-001-997-A', '9', 'Pengadaan Fasilitas Kantor Balai Litbang Rawa', '1 LAYANAN', 13000, 0, 0, 0, '12-02-2019  15:38:04');
INSERT INTO `emon_data_2019` VALUES (177, '11636850', 'BALAI PENELITIAN DAN PENGEMBANGAN RAWA BANJARMASIN', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '970', 'Layanan Dukungan Manajemen Satker', '04-2431-97000-001-051-A', '11', 'Penyusunan RKA-KL dan DIPA Balai Litbang Raw', '1 LAYANAN', 113145, 19009, 16.8, 16.8, '12-02-2019  15:38:04');
INSERT INTO `emon_data_2019` VALUES (178, '11636850', 'BALAI PENELITIAN DAN PENGEMBANGAN RAWA BANJARMASIN', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '970', 'Layanan Dukungan Manajemen Satker', '04-2431-97000-001-055-A', '12', 'Administrasi Kesatkeran', '1 LAYANAN', 557395, 53198, 9.54, 9.54, '12-02-2019  15:38:04');
INSERT INTO `emon_data_2019` VALUES (179, '11636850', 'BALAI PENELITIAN DAN PENGEMBANGAN RAWA BANJARMASIN', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '994', 'Layanan Perkantoran', '04-2431-99400-994-001-A', '13', 'Pembayaran Gaji dan Tunjangan', '1 LAYANAN', 1032050, 204107, 19.78, 19.78, '12-02-2019  15:38:04');
INSERT INTO `emon_data_2019` VALUES (180, '11636850', 'BALAI PENELITIAN DAN PENGEMBANGAN RAWA BANJARMASIN', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '994', 'Layanan Perkantoran', '04-2431-99400-994-001-B', '14', 'Tunjangan Kinerja', '1 LAYANAN', 865540, 0, 0, 0, '12-02-2019  15:38:04');
INSERT INTO `emon_data_2019` VALUES (181, '11636850', 'BALAI PENELITIAN DAN PENGEMBANGAN RAWA BANJARMASIN', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '994', 'Layanan Perkantoran', '04-2431-99400-994-001-C', '15', 'Uang Lembur dan Uang Makan Lembur', '1 LAYANAN', 10630, 0, 0, 0, '12-02-2019  15:38:04');
INSERT INTO `emon_data_2019` VALUES (182, '11636850', 'BALAI PENELITIAN DAN PENGEMBANGAN RAWA BANJARMASIN', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '994', 'Layanan Perkantoran', '04-2431-99400-994-002-A', '16', 'Perlengkapan Perkantoran', '1 LAYANAN', 56784, 4992, 8.79, 8.79, '12-02-2019  15:38:04');
INSERT INTO `emon_data_2019` VALUES (183, '11636850', 'BALAI PENELITIAN DAN PENGEMBANGAN RAWA BANJARMASIN', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '994', 'Layanan Perkantoran', '04-2431-99400-994-002-B', '17', 'Perawatan Gedung Kantor', '1 LAYANAN', 84229, 0, 0, 0, '12-02-2019  15:38:04');
INSERT INTO `emon_data_2019` VALUES (184, '11636850', 'BALAI PENELITIAN DAN PENGEMBANGAN RAWA BANJARMASIN', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '994', 'Layanan Perkantoran', '04-2431-99400-994-002-C', '18', 'Pemeliharaan Rumah Dinas', '1 LAYANAN', 5620, 0, 0, 0, '12-02-2019  15:38:04');
INSERT INTO `emon_data_2019` VALUES (185, '11636850', 'BALAI PENELITIAN DAN PENGEMBANGAN RAWA BANJARMASIN', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '994', 'Layanan Perkantoran', '04-2431-99400-994-002-D', '19', 'Perawatan Sarana dan Prasarana Gedung', '1 LAYANAN', 22440, 0, 0, 0, '12-02-2019  15:38:04');
INSERT INTO `emon_data_2019` VALUES (186, '11636850', 'BALAI PENELITIAN DAN PENGEMBANGAN RAWA BANJARMASIN', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '994', 'Layanan Perkantoran', '04-2431-99400-994-002-E', '20', 'Perbaikan Peralatan Kantor', '1 LAYANAN', 21665, 0, 0, 0, '12-02-2019  15:38:04');
INSERT INTO `emon_data_2019` VALUES (187, '11636850', 'BALAI PENELITIAN DAN PENGEMBANGAN RAWA BANJARMASIN', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '994', 'Layanan Perkantoran', '04-2431-99400-994-002-F', '21', 'Perawatan Kendaraan Bermotor Roda 4/6/8/10', '1 LAYANAN', 102480, 0, 0, 0, '12-02-2019  15:38:04');
INSERT INTO `emon_data_2019` VALUES (188, '11636850', 'BALAI PENELITIAN DAN PENGEMBANGAN RAWA BANJARMASIN', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '994', 'Layanan Perkantoran', '04-2431-99400-994-002-H', '22', 'Langganan Daya dan Jasa', '1 LAYANAN', 162996, 21122, 12.96, 12.96, '12-02-2019  15:38:04');
INSERT INTO `emon_data_2019` VALUES (189, '11636850', 'BALAI PENELITIAN DAN PENGEMBANGAN RAWA BANJARMASIN', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '994', 'Layanan Perkantoran', '04-2431-99400-994-002-I', '23', 'Pengiriman Pos dan Giro', '1 LAYANAN', 3500, 914, 26.11, 26.11, '12-02-2019  15:38:04');
INSERT INTO `emon_data_2019` VALUES (190, '11636850', 'BALAI PENELITIAN DAN PENGEMBANGAN RAWA BANJARMASIN', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '994', 'Layanan Perkantoran', '04-2431-99400-994-002-K', '24', 'Satpam, Pengemudi, Petugas Kebersihan, dan Pramubakti', '1 LAYANAN', 1191489, 94666, 7.95, 7.95, '12-02-2019  15:38:04');
INSERT INTO `emon_data_2019` VALUES (191, '11636850', 'BALAI PENELITIAN DAN PENGEMBANGAN RAWA BANJARMASIN', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '994', 'Layanan Perkantoran', '04-2431-99400-994-002-M', '25', 'Operasional Perkantoran dan Pimpinan', '1 LAYANAN', 104793, 56344, 53.77, 53.77, '12-02-2019  15:38:04');
INSERT INTO `emon_data_2019` VALUES (192, '11636850', 'BALAI PENELITIAN DAN PENGEMBANGAN RAWA BANJARMASIN', '2431', 'Penelitian dan Pengembangan Bidang Sumber Daya Air', '994', 'Layanan Perkantoran', '04-2431-99400-994-002-N', '26', 'Pakaian Dinas Pegawai', '1 LAYANAN', 33554, 0, 0, 0, '12-02-2019  15:38:04');

-- ----------------------------
-- Table structure for emon_rencanafis_2019
-- ----------------------------
DROP TABLE IF EXISTS `emon_rencanafis_2019`;
CREATE TABLE `emon_rencanafis_2019`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kdsatker` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `kdpaket` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `b1` double NOT NULL,
  `b2` double NOT NULL,
  `b3` double NOT NULL,
  `b4` double NOT NULL,
  `b5` double NOT NULL,
  `b6` double NOT NULL,
  `b7` double NOT NULL,
  `b8` double NOT NULL,
  `b9` double NOT NULL,
  `b10` double NOT NULL,
  `b11` double NOT NULL,
  `b12` double NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 192 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of emon_rencanafis_2019
-- ----------------------------
INSERT INTO `emon_rencanafis_2019` VALUES (1, '11279842', '1', 2.26, 5.06, 7.9, 15.13, 22.13, 29.26, 40.44, 57.58, 67.67, 88.85, 97.74, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (2, '11279842', '10', 3.76, 20.28, 29.84, 36.52, 43.55, 51.79, 66.6, 73, 80.29, 86.87, 95.11, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (3, '11279842', '11', 6.54, 13.79, 21.03, 28.27, 35.51, 49.3, 63.09, 70.33, 77.57, 84.81, 92.06, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (4, '11279842', '12', 0, 7.69, 15.38, 23.08, 30.77, 38.46, 53.85, 61.54, 69.23, 76.92, 84.62, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (5, '11279842', '13', 0, 0, 0, 0, 0, 100, 100, 100, 100, 100, 100, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (6, '11279842', '14', 0, 9.35, 18.69, 28.04, 32.85, 38.83, 49.78, 60.73, 71.68, 82.63, 93.58, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (7, '11279842', '15', 0, 0, 0, 0, 20.08, 53.47, 62.66, 68.29, 68.29, 68.29, 100, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (8, '11279842', '16', 0, 2.63, 13.03, 15.36, 17.8, 20.12, 30.53, 42.95, 63.46, 83.36, 97.68, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (9, '11279842', '17', 0, 0, 12.29, 12.29, 12.29, 20.77, 20.77, 31.11, 31.11, 37.2, 100, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (10, '11279842', '18', 0, 9, 17.99, 26.99, 35.98, 44.98, 53.97, 62.97, 71.96, 80.96, 91, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (11, '11279842', '19', 6.76, 13.65, 20.66, 28.09, 35.47, 42.93, 50.94, 59.2, 69.21, 79.23, 89.24, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (12, '11279842', '2', 1.62, 8.39, 14.85, 19.46, 24.93, 63.12, 69.39, 77.62, 86.08, 89.88, 98.68, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (13, '11279842', '20', 0, 0, 50, 50, 50, 50, 50, 50, 50, 50, 100, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (14, '11279842', '21', 8.09, 16.18, 24.27, 32.35, 40.44, 48.88, 59.56, 67.65, 75.73, 83.82, 91.91, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (15, '11279842', '22', 0, 4.62, 16.01, 22.77, 34.16, 45.54, 52.31, 63.7, 70.46, 81.85, 100, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (16, '11279842', '23', 0, 0, 0, 100, 100, 100, 100, 100, 100, 100, 100, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (17, '11279842', '24', 0, 10.5, 15.41, 62.55, 78.18, 80.64, 87.57, 90.03, 92.49, 94.94, 97.4, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (18, '11279842', '3', 0.43, 2.22, 7.53, 12.09, 17.5, 22.86, 42.46, 58.67, 79.25, 86.83, 94.08, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (19, '11279842', '4', 0.33, 2.98, 6.41, 40.31, 48.98, 60.19, 65.67, 76.33, 81.27, 89.83, 98.81, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (20, '11279842', '5', 3.03, 6.57, 9.16, 11.87, 18.75, 37.8, 50.49, 65.11, 79.1, 91.32, 98.07, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (21, '11279842', '6', 0.88, 3.26, 5.2, 14, 24.87, 40.64, 60.68, 78.52, 92.2, 96.61, 99.38, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (22, '11279842', '7', 0.47, 2.4, 11.63, 21.2, 35.18, 45.83, 57.75, 68.72, 79.82, 89.01, 94.38, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (23, '11279842', '8', 0, 13.2, 17.9, 21.73, 27.84, 38.43, 49.82, 65.12, 76.88, 83.06, 91.18, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (24, '11279842', '9', 1.32, 5.94, 10.58, 18.58, 34.82, 50.79, 54.89, 59.53, 67.46, 83.75, 99.5, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (25, '11279860', '1', 0, 16.67, 25, 33.33, 41.67, 50, 58.33, 66.67, 75, 83.33, 91.67, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (26, '11279860', '11', 0, 0, 0, 0, 0, 0, 0, 50, 50, 50, 100, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (27, '11279860', '12', 0, 16.67, 25, 33.33, 41.67, 50, 58.33, 66.67, 75, 83.33, 91.67, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (28, '11279860', '13', 0, 36.46, 36.46, 36.46, 62.75, 62.75, 80.68, 80.68, 80.68, 100, 100, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (29, '11279860', '14', 0, 16.67, 25, 33.33, 41.67, 50, 58.33, 66.67, 75, 83.33, 91.67, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (30, '11279860', '15', 0, 16.67, 25, 33.33, 41.67, 50, 58.33, 66.67, 75, 83.33, 91.67, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (31, '11279860', '16', 0, 16.67, 25, 33.33, 41.67, 50, 58.33, 66.67, 75, 83.33, 91.67, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (32, '11279860', '17', 4.43, 16.67, 25, 33.33, 41.67, 50, 58.33, 66.67, 75, 83.33, 91.67, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (33, '11279860', '18', 0, 14.81, 22.21, 29.61, 37.02, 44.42, 51.82, 59.23, 66.63, 74.03, 88.43, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (34, '11279860', '19', 4.84, 15.89, 23.83, 31.78, 39.72, 47.67, 55.61, 63.56, 71.5, 79.45, 90.99, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (35, '11279860', '2', 0.22, 3.68, 15.19, 25.03, 48.52, 61.68, 70.38, 89.02, 91.48, 95.81, 96.03, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (36, '11279860', '20', 6.67, 16.67, 25, 33.33, 41.67, 50, 58.33, 66.67, 75, 83.33, 91.67, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (37, '11279860', '21', 0, 0, 0, 100, 100, 100, 100, 100, 100, 100, 100, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (38, '11279860', '22', 14.55, 22.32, 30.09, 37.85, 45.62, 53.39, 61.16, 68.93, 76.7, 84.46, 92.23, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (39, '11279860', '23', 2.81, 7.68, 13.3, 19.99, 30.41, 46.47, 52.57, 59.15, 71.51, 81.31, 92.47, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (40, '11279860', '24', 0.29, 5.77, 8.74, 28.75, 48.86, 67.74, 85.24, 88.05, 91.67, 93.26, 96.57, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (41, '11279860', '25', 7.69, 15.38, 23.08, 30.77, 38.46, 53.85, 61.54, 69.23, 76.92, 84.62, 92.31, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (42, '11279860', '26', 2.8, 15.62, 23.44, 31.25, 39.06, 53.13, 60.94, 68.75, 76.56, 84.38, 92.19, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (43, '11279860', '3', 7.66, 17.14, 24.45, 31.93, 38.69, 48.71, 57.61, 68.44, 76.7, 88.53, 98.09, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (44, '11279860', '4', 7.3, 19.18, 37.82, 49.12, 54.29, 67.1, 78.21, 83.45, 89.03, 92.53, 95.87, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (45, '11279860', '5', 1.51, 12.55, 19.79, 31.02, 38.33, 42.83, 56.26, 67.08, 77.03, 84.03, 92.85, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (46, '11279860', '6', 0, 0, 0, 74.12, 94.57, 100, 100, 100, 100, 100, 100, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (47, '11279860', '7', 0, 0, 5.03, 12.98, 19.18, 26.98, 37.72, 48.45, 66.76, 77.5, 88.23, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (48, '11279860', '8', 6.63, 16.35, 25.94, 34.26, 40.7, 48.18, 59.42, 67.24, 76.54, 85.7, 93.87, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (49, '11279860', '9', 0, 0, 0, 0, 100, 100, 100, 100, 100, 100, 100, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (50, '11576981', '1', 0.19, 0.35, 0.59, 20.76, 20.96, 44.34, 44.54, 44.71, 68.07, 68.23, 99.9, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (51, '11576981', '10', 8.33, 16.67, 25, 33.33, 41.67, 50, 58.33, 66.67, 75, 83.33, 91.67, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (52, '11576981', '11', 0, 19.97, 50, 50, 50, 50, 69.97, 69.97, 100, 100, 100, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (53, '11576981', '12', 20, 20, 40, 40, 60, 60, 80, 80, 80, 100, 100, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (54, '11576981', '13', 0, 20, 20, 40, 40, 60, 60, 80, 80, 100, 100, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (55, '11576981', '14', 8.33, 16.67, 25, 33.33, 41.67, 50, 58.33, 66.67, 75, 83.33, 91.67, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (56, '11576981', '15', 8.33, 16.67, 25, 33.33, 41.67, 50, 58.33, 66.67, 75, 83.33, 91.67, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (57, '11576981', '16', 8.33, 16.67, 25, 33.33, 41.67, 50, 58.33, 66.67, 75, 83.33, 91.67, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (58, '11576981', '17', 0, 7.69, 15.38, 23.08, 30.77, 46.15, 53.85, 61.54, 69.23, 76.92, 84.62, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (59, '11576981', '18', 0, 100, 100, 100, 100, 100, 100, 100, 100, 100, 100, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (60, '11576981', '2', 0.92, 4.03, 8.69, 12.24, 22.06, 38.12, 46.97, 54.22, 62.25, 79.64, 96.5, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (61, '11576981', '3', 1.44, 6.51, 13.95, 20.81, 29.82, 37.55, 47.73, 62.06, 83.55, 91.29, 97.55, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (62, '11576981', '4', 1.66, 5.57, 9.19, 22.26, 34.54, 43.52, 53.43, 63.67, 76.66, 91.71, 98.14, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (63, '11576981', '5', 0.74, 6.12, 11.72, 16.29, 26.11, 28.68, 40.21, 51.49, 69.09, 77.16, 95.45, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (64, '11576981', '6', 10.26, 18.2, 29.65, 38.34, 43.79, 54.69, 60.37, 71.6, 78.28, 85.82, 93.4, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (65, '11576981', '7', 7.29, 14.58, 21.87, 29.17, 36.46, 50, 63.54, 70.83, 78.13, 85.42, 92.71, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (66, '11576981', '8', 7.69, 15.38, 23.08, 30.77, 38.46, 53.85, 61.54, 69.23, 76.92, 84.62, 92.31, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (67, '11576981', '9', 0, 0, 25, 33.33, 33.33, 33.33, 58.33, 58.33, 75, 83.33, 83.33, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (68, '11622323', '1', 1, 4.75, 8.5, 15, 22, 30, 37, 44, 51, 66, 75, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (69, '11622323', '10', 1, 4.75, 8.5, 15, 22, 30, 37, 44, 51, 66, 75, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (70, '11622323', '11', 1, 4.75, 8.5, 15, 22, 30, 37, 44, 51, 66, 75, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (71, '11622323', '12', 1, 4.75, 8.5, 15, 22, 30, 37, 44, 51, 66, 75, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (72, '11622323', '13', 1, 4.75, 8.5, 15, 22, 30, 37, 44, 51, 66, 75, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (73, '11622323', '14', 1, 4.75, 8.5, 15, 22, 30, 37, 44, 51, 66, 75, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (74, '11622323', '15', 1, 4.75, 8.5, 15, 22, 30, 37, 44, 51, 66, 75, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (75, '11622323', '16', 1, 4.75, 8.5, 15, 22, 30, 37, 44, 51, 66, 75, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (76, '11622323', '17', 1, 4.75, 8.5, 15, 22, 30, 37, 44, 51, 66, 75, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (77, '11622323', '18', 1, 4.75, 8.5, 15, 22, 30, 37, 44, 51, 66, 75, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (78, '11622323', '19', 1, 4.75, 8.5, 15, 22, 30, 37, 44, 51, 66, 75, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (79, '11622323', '2', 1, 4.75, 8.5, 15, 22, 30, 37, 44, 51, 66, 75, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (80, '11622323', '20', 1, 4.75, 8.5, 15, 22, 30, 37, 44, 51, 66, 75, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (81, '11622323', '21', 1, 4.75, 8.5, 15, 22, 30, 37, 44, 51, 66, 75, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (82, '11622323', '22', 1, 4.75, 8.5, 15, 22, 30, 37, 44, 51, 66, 75, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (83, '11622323', '23', 1, 4.75, 8.5, 15, 22, 30, 37, 44, 51, 66, 75, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (84, '11622323', '24', 1, 4.75, 8.5, 15, 22, 30, 37, 44, 51, 66, 75, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (85, '11622323', '25', 1, 4.75, 8.5, 15, 22, 30, 37, 44, 51, 66, 75, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (86, '11622323', '26', 1, 4.75, 8.5, 15, 22, 30, 37, 44, 51, 66, 75, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (87, '11622323', '27', 1, 4.75, 8.5, 15, 22, 30, 37, 44, 51, 66, 75, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (88, '11622323', '28', 1, 4.75, 8.5, 15, 22, 30, 37, 44, 51, 66, 75, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (89, '11622323', '29', 1, 4.75, 8.5, 15, 22, 30, 37, 44, 51, 66, 75, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (90, '11622323', '3', 1, 4.75, 8.5, 15, 22, 30, 37, 44, 51, 66, 75, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (91, '11622323', '30', 1, 4.75, 8.5, 15, 22, 30, 37, 44, 51, 66, 75, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (92, '11622323', '31', 1, 4.75, 8.5, 15, 22, 30, 37, 44, 51, 66, 75, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (93, '11622323', '32', 1, 4.75, 8.5, 15, 22, 30, 37, 44, 51, 66, 75, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (94, '11622323', '33', 1, 4.75, 8.5, 15, 22, 30, 37, 44, 51, 66, 75, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (95, '11622323', '34', 1, 4.75, 8.5, 15, 22, 30, 37, 44, 51, 66, 75, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (96, '11622323', '35', 1, 4.75, 8.5, 15, 22, 30, 37, 44, 51, 66, 75, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (97, '11622323', '36', 1, 4.75, 8.5, 15, 22, 30, 37, 44, 51, 66, 75, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (98, '11622323', '37', 1, 4.75, 8.5, 15, 22, 30, 37, 44, 51, 66, 75, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (99, '11622323', '38', 1, 4.75, 8.5, 15, 22, 30, 37, 44, 51, 66, 75, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (100, '11622323', '39', 1, 4.75, 8.5, 15, 22, 30, 37, 44, 51, 66, 75, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (101, '11622323', '4', 1, 4.75, 8.5, 15, 22, 30, 37, 44, 51, 66, 75, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (102, '11622323', '40', 1, 4.75, 8.5, 15, 22, 30, 37, 44, 51, 66, 75, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (103, '11622323', '41', 1, 4.75, 8.5, 15, 22, 30, 37, 44, 51, 66, 75, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (104, '11622323', '42', 1, 4.75, 8.5, 15, 22, 30, 37, 44, 51, 66, 75, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (105, '11622323', '43', 1, 4.75, 8.5, 15, 22, 30, 37, 44, 51, 66, 75, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (106, '11622323', '44', 1, 4.75, 8.5, 15, 22, 30, 37, 44, 51, 66, 75, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (107, '11622323', '45', 1, 4.75, 8.5, 15, 22, 30, 37, 44, 51, 66, 75, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (108, '11622323', '46', 1, 4.75, 8.5, 15, 22, 30, 37, 44, 51, 66, 75, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (109, '11622323', '47', 1, 4.75, 8.5, 15, 22, 30, 37, 44, 51, 66, 75, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (110, '11622323', '48', 1, 4.75, 8.5, 15, 22, 30, 37, 44, 51, 66, 75, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (111, '11622323', '49', 1, 4.75, 8.5, 15, 22, 30, 37, 44, 51, 66, 75, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (112, '11622323', '5', 1, 4.75, 8.5, 15, 22, 30, 37, 44, 51, 66, 75, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (113, '11622323', '50', 1, 4.75, 8.5, 15, 22, 30, 37, 44, 51, 66, 75, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (114, '11622323', '51', 1, 4.75, 8.5, 15, 22, 30, 37, 44, 51, 66, 75, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (115, '11622323', '52', 1, 4.75, 8.5, 15, 22, 30, 37, 44, 51, 66, 75, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (116, '11622323', '53', 1, 4.75, 8.5, 15, 22, 30, 37, 44, 51, 66, 75, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (117, '11622323', '54', 1, 4.75, 8.5, 15, 22, 30, 37, 44, 51, 66, 75, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (118, '11622323', '55', 1, 4.75, 8.5, 15, 22, 30, 37, 44, 51, 66, 75, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (119, '11622323', '56', 1, 4.75, 8.5, 15, 22, 30, 37, 44, 51, 66, 75, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (120, '11622323', '57', 1, 4.75, 8.5, 15, 22, 30, 37, 44, 51, 66, 75, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (121, '11622323', '58', 1, 4.75, 8.5, 15, 22, 30, 37, 44, 51, 66, 75, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (122, '11622323', '59', 1, 4.75, 8.5, 15, 22, 30, 37, 44, 51, 66, 75, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (123, '11622323', '6', 1, 4.75, 8.5, 15, 22, 30, 37, 44, 51, 66, 75, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (124, '11622323', '60', 1, 4.75, 8.5, 15, 22, 30, 37, 44, 51, 66, 75, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (125, '11622323', '61', 1, 4.75, 8.5, 15, 22, 30, 37, 44, 51, 66, 75, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (126, '11622323', '62', 1, 4.75, 8.5, 15, 22, 30, 37, 44, 51, 66, 75, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (127, '11622323', '63', 1, 4.75, 8.5, 15, 22, 30, 37, 44, 51, 66, 75, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (128, '11622323', '64', 1, 4.75, 8.5, 15, 22, 30, 37, 44, 51, 66, 75, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (129, '11622323', '65', 1, 4.75, 8.5, 15, 22, 30, 37, 44, 51, 66, 75, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (130, '11622323', '66', 1, 4.75, 8.5, 15, 22, 30, 37, 44, 51, 66, 75, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (131, '11622323', '67', 1, 4.75, 8.5, 15, 22, 30, 37, 44, 51, 66, 75, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (132, '11622323', '68', 1, 4.75, 8.5, 15, 22, 30, 37, 44, 51, 66, 75, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (133, '11622323', '69', 1, 4.75, 8.5, 15, 22, 30, 37, 44, 51, 66, 75, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (134, '11622323', '7', 1, 4.75, 8.5, 15, 22, 30, 37, 44, 51, 66, 75, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (135, '11622323', '70', 1, 4.75, 8.5, 15, 22, 30, 37, 44, 51, 66, 75, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (136, '11622323', '71', 1, 4.75, 8.5, 15, 22, 30, 37, 44, 51, 66, 75, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (137, '11622323', '72', 1, 4.75, 8.5, 15, 22, 30, 37, 44, 51, 66, 75, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (138, '11622323', '73', 1, 4.75, 8.5, 15, 22, 30, 37, 44, 51, 66, 75, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (139, '11622323', '74', 1, 4.75, 8.5, 15, 22, 30, 37, 44, 51, 66, 75, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (140, '11622323', '75', 1, 4.75, 8.5, 15, 22, 30, 37, 44, 51, 66, 75, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (141, '11622323', '76', 1, 4.75, 8.5, 15, 22, 30, 37, 44, 51, 66, 75, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (142, '11622323', '77', 1, 4.75, 8.5, 15, 22, 30, 37, 44, 51, 66, 75, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (143, '11622323', '8', 1, 4.75, 8.5, 15, 22, 30, 37, 44, 51, 66, 75, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (144, '11622323', '9', 1, 4.75, 8.5, 15, 22, 30, 37, 44, 51, 66, 75, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (145, '11636846', '1', 1.99, 12.33, 32.89, 41.32, 50.93, 66.76, 68.72, 84.79, 88.76, 93.85, 96.72, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (146, '11636846', '11', 6.67, 14.44, 22.22, 30, 37.78, 45.56, 60, 67.78, 75.56, 83.33, 91.11, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (147, '11636846', '12', 0, 7.14, 14.29, 21.43, 28.58, 42.87, 57.16, 64.3, 71.45, 78.59, 85.74, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (148, '11636846', '13', 0, 0, 0, 0, 0, 0, 100, 100, 100, 100, 100, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (149, '11636846', '14', 6.57, 13.14, 19.71, 26.29, 32.86, 39.43, 46, 52.57, 59.14, 72.76, 86.38, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (150, '11636846', '15', 0, 9.96, 15.06, 20.16, 25.25, 30.34, 38.51, 44.03, 53.35, 68.83, 84.3, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (151, '11636846', '16', 4.18, 8.37, 12.55, 16.74, 20.92, 25.11, 29.29, 33.48, 37.66, 54.4, 71.14, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (152, '11636846', '17', 4.73, 9.47, 14.2, 18.93, 23.67, 28.4, 33.13, 37.87, 42.6, 58.38, 74.16, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (153, '11636846', '18', 0, 13.76, 20.64, 27.52, 34.4, 41.28, 48.17, 55.05, 61.93, 68.81, 83.14, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (154, '11636846', '19', 4.49, 16.24, 24.57, 32.91, 41.24, 49.57, 57.91, 66.24, 74.57, 82.91, 91.24, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (155, '11636846', '2', 3.55, 7.25, 13, 19.83, 33.46, 49.87, 58.82, 64.17, 70.65, 79.38, 96.33, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (156, '11636846', '20', 0, 0, 0, 0, 0, 33.33, 33.33, 33.33, 33.33, 66.67, 66.67, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (157, '11636846', '21', 0, 7.89, 15.78, 23.68, 31.57, 39.46, 52.49, 60.38, 68.27, 76.16, 84.05, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (158, '11636846', '22', 8.08, 16.15, 24.23, 32.31, 40.38, 48.46, 56.54, 64.62, 72.69, 80.77, 92.31, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (159, '11636846', '23', 0, 0, 0, 0, 100, 100, 100, 100, 100, 100, 100, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (160, '11636846', '24', 0, 0, 4.44, 17.75, 22.19, 26.63, 31.06, 35.5, 39.94, 76.21, 89.53, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (161, '11636846', '25', 3.12, 4.26, 11.1, 18.77, 28.11, 37.95, 58.26, 65.86, 77.56, 87.16, 97.49, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (162, '11636846', '26', 1.8, 9.94, 19.82, 25.38, 31.05, 38.42, 48.28, 60.45, 70.54, 80.45, 90.49, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (163, '11636846', '27', 0, 0, 0, 0, 0, 0, 100, 100, 100, 100, 100, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (164, '11636846', '3', 0.12, 1.06, 5.1, 11.66, 26.16, 43.11, 55.92, 65.85, 78.83, 90.77, 99.09, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (165, '11636846', '4', 2.23, 5.29, 13.53, 47.5, 58.03, 71.25, 75.33, 80.05, 90.89, 98.31, 99.63, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (166, '11636846', '5', 1.82, 8.01, 13.56, 22.34, 29.75, 38.92, 49.83, 61.55, 70.08, 82.55, 91.02, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (167, '11636846', '6', 2.33, 5.52, 15.44, 34.87, 43.83, 55.84, 61.69, 66.77, 76.59, 89.09, 97.94, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (168, '11636846', '7', 0, 4.89, 12.83, 19.41, 29.84, 41.84, 52.71, 62.22, 71, 84.36, 96.09, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (169, '11636850', '1', 0.35, 1.37, 5.57, 18.13, 30.74, 47.96, 60.62, 76.97, 97.31, 98.56, 99.49, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (170, '11636850', '10', 0.01, 0.01, 0.01, 14.8, 29.66, 44.46, 59.46, 79.19, 99.26, 99.55, 99.85, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (171, '11636850', '11', 0, 5.09, 6.96, 12.33, 13.47, 34.72, 44.96, 48.93, 49.62, 53.6, 78.64, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (172, '11636850', '12', 3.18, 14.99, 24.53, 31.4, 38.28, 42.2, 54.69, 67.18, 74.06, 80.94, 93.43, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (173, '11636850', '13', 6.29, 13.75, 21.22, 28.68, 36.15, 48.05, 61.49, 68.96, 76.42, 83.89, 91.35, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (174, '11636850', '14', 0, 7.69, 15.38, 23.08, 30.77, 38.46, 53.85, 61.54, 69.23, 76.92, 84.62, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (175, '11636850', '15', 0, 20, 20, 20, 20, 40, 40, 60, 60, 60, 80, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (176, '11636850', '16', 0, 25, 25, 25, 50, 50, 50, 75, 75, 75, 100, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (177, '11636850', '17', 0, 40, 40, 60, 60, 80, 80, 100, 100, 100, 100, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (178, '11636850', '18', 0, 0, 100, 100, 100, 100, 100, 100, 100, 100, 100, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (179, '11636850', '19', 2.01, 22.99, 25, 27.01, 47.99, 50, 52.01, 72.99, 75, 95.99, 97.99, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (180, '11636850', '20', 0, 25, 25, 25, 50, 50, 50, 75, 75, 100, 100, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (181, '11636850', '21', 8.33, 16.67, 25, 33.33, 41.67, 50, 58.33, 66.67, 75, 83.33, 91.67, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (182, '11636850', '22', 8.33, 16.67, 25, 33.33, 41.67, 50, 58.33, 66.67, 75, 83.33, 91.67, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (183, '11636850', '23', 0, 10, 20, 30, 40, 50, 60, 70, 80, 90, 100, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (184, '11636850', '24', 7.69, 15.38, 23.08, 30.77, 43.6, 53.85, 61.54, 69.23, 76.92, 84.62, 92.31, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (185, '11636850', '25', 9.09, 18.18, 27.27, 36.36, 45.45, 54.55, 63.64, 72.73, 81.82, 90.91, 100, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (186, '11636850', '26', 0, 0, 100, 100, 100, 100, 100, 100, 100, 100, 100, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (187, '11636850', '4', 1.37, 4.17, 15.76, 25.97, 36.8, 47.05, 60.42, 71.15, 84.63, 94.21, 98.56, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (188, '11636850', '5', 3.16, 7.14, 21.51, 32.14, 37.27, 42.89, 47.71, 57.1, 65.85, 69.16, 97.87, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (189, '11636850', '6', 0.11, 1.11, 14.87, 17.53, 22.14, 75.5, 75.5, 80.67, 87.74, 92.37, 96.92, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (190, '11636850', '8', 4.47, 13.15, 26.27, 32.52, 41.37, 48.54, 57.27, 63.89, 69.83, 81.85, 91.93, 100);
INSERT INTO `emon_rencanafis_2019` VALUES (191, '11636850', '9', 0, 0, 0, 100, 100, 100, 100, 100, 100, 100, 100, 100);

-- ----------------------------
-- Table structure for emon_rencanakeu_2019
-- ----------------------------
DROP TABLE IF EXISTS `emon_rencanakeu_2019`;
CREATE TABLE `emon_rencanakeu_2019`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kdsatker` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `kdpaket` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `b1` double NOT NULL,
  `b2` double NOT NULL,
  `b3` double NOT NULL,
  `b4` double NOT NULL,
  `b5` double NOT NULL,
  `b6` double NOT NULL,
  `b7` double NOT NULL,
  `b8` double NOT NULL,
  `b9` double NOT NULL,
  `b10` double NOT NULL,
  `b11` double NOT NULL,
  `b12` double NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 192 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of emon_rencanakeu_2019
-- ----------------------------
INSERT INTO `emon_rencanakeu_2019` VALUES (1, '11279842', '1', 7987.5, 17920, 27962.5, 53601.75, 78363.25, 103633.75, 143241.5, 203936.5, 239686.75, 314701, 346176, 354176);
INSERT INTO `emon_rencanakeu_2019` VALUES (2, '11279842', '10', 16037, 86462, 127197, 155694, 185649, 220773, 283908, 311212, 342271, 370326, 405488, 426319);
INSERT INTO `emon_rencanakeu_2019` VALUES (3, '11279842', '11', 124382.643, 262064.285, 399745.928, 537427.572, 675109.215, 937173.5, 1199237.785, 1336919.428, 1474601.072, 1612282.715, 1749964.357, 1900945);
INSERT INTO `emon_rencanakeu_2019` VALUES (4, '11279842', '12', 0, 125964.538, 251929.077, 377893.615, 503858.154, 629822.692, 881751.771, 1007716.31, 1133680.848, 1259645.387, 1385609.925, 1637539);
INSERT INTO `emon_rencanakeu_2019` VALUES (5, '11279842', '13', 0, 0, 0, 0, 0, 19470, 19470, 19470, 19470, 19470, 19470, 19470);
INSERT INTO `emon_rencanakeu_2019` VALUES (6, '11279842', '14', 0, 5824, 11648, 17472, 20472, 24200, 31024, 37848, 44672, 51496, 58320, 62320);
INSERT INTO `emon_rencanakeu_2019` VALUES (7, '11279842', '15', 0, 0, 0, 0, 107000, 285000, 334000, 364000, 364000, 364000, 533000, 533000);
INSERT INTO `emon_rencanakeu_2019` VALUES (8, '11279842', '16', 0, 2600, 12900, 15200, 17620, 19920, 30220, 42520, 62820, 82520, 96690, 98990);
INSERT INTO `emon_rencanakeu_2019` VALUES (9, '11279842', '17', 0, 0, 5000, 5000, 5000, 8450, 8450, 12656, 12656, 15136, 40686, 40686);
INSERT INTO `emon_rencanakeu_2019` VALUES (10, '11279842', '18', 0, 15000, 30000, 45000, 60000, 75000, 90000, 105000, 120000, 135000, 151750, 166750);
INSERT INTO `emon_rencanakeu_2019` VALUES (11, '11279842', '19', 27050, 54600, 82650, 112344, 141894, 171700, 203750, 236800, 276850, 316900, 356950, 400000);
INSERT INTO `emon_rencanakeu_2019` VALUES (12, '11279842', '2', 26800, 138954.167, 246034.833, 322366.5, 412934, 1045641, 1149403.666, 1285753.834, 1425916.5, 1488819, 1634589, 1656529);
INSERT INTO `emon_rencanakeu_2019` VALUES (13, '11279842', '20', 0, 0, 3600, 3600, 3600, 3600, 3600, 3600, 3600, 3600, 7200, 7200);
INSERT INTO `emon_rencanakeu_2019` VALUES (14, '11279842', '21', 180631, 361262, 541893, 722524, 903155, 1091492, 1329973, 1510604, 1691235, 1871866, 2052497, 2233128);
INSERT INTO `emon_rencanakeu_2019` VALUES (15, '11279842', '22', 0, 4770, 16526, 23512, 35268, 47024, 54010, 65766, 72752, 84508, 103250, 103250);
INSERT INTO `emon_rencanakeu_2019` VALUES (16, '11279842', '23', 0, 0, 0, 17081, 17081, 17081, 17081, 17081, 17081, 17081, 17081, 17081);
INSERT INTO `emon_rencanakeu_2019` VALUES (17, '11279842', '24', 0, 4700, 6900, 28000, 35000, 36100, 39202, 40302, 41402, 42502, 43602, 44766);
INSERT INTO `emon_rencanakeu_2019` VALUES (18, '11279842', '3', 9430, 48811, 165798, 266205, 385366, 503431, 935010, 1292050.5, 1745215, 1912216.333, 2071850.667, 2202187);
INSERT INTO `emon_rencanakeu_2019` VALUES (19, '11279842', '4', 7012.244, 64927.3, 139444.934, 876356.534, 1064887.9, 1308572.15, 1427530.7, 1659171.5, 1766810.7, 1952850, 2147960.33, 2173858.88);
INSERT INTO `emon_rencanakeu_2019` VALUES (20, '11279842', '5', 17807.134, 38611.509, 53832.789, 69759.301, 110192.462, 222150.057, 296728.452, 382649.345, 464876.961, 536677.985, 576336.666, 587694);
INSERT INTO `emon_rencanakeu_2019` VALUES (21, '11279842', '6', 4023.659, 14905.829, 23776.168, 64012.761, 113714.095, 185819.897, 277449.591, 359014.886, 421551.073, 441718.672, 454391.012, 457234);
INSERT INTO `emon_rencanakeu_2019` VALUES (22, '11279842', '7', 2170, 11090, 53628, 97769.5, 162249.5, 211361.5, 266317.5, 316932, 368126.5, 410510, 435269, 461176);
INSERT INTO `emon_rencanakeu_2019` VALUES (23, '11279842', '8', 0, 11217, 15217, 18467, 23667, 32667, 42351, 55351, 65351, 70601, 77500, 85000);
INSERT INTO `emon_rencanakeu_2019` VALUES (24, '11279842', '9', 2775, 12475, 22225, 39025, 73115, 106665, 115265, 125023, 141673, 175865, 208940, 210000);
INSERT INTO `emon_rencanakeu_2019` VALUES (25, '11279860', '1', 0, 19020.833, 28531.25, 38041.667, 47552.083, 57062.5, 66572.917, 76083.333, 85593.75, 95104.167, 104614.583, 114125);
INSERT INTO `emon_rencanakeu_2019` VALUES (26, '11279860', '11', 0, 0, 0, 0, 0, 0, 0, 7820, 7820, 7820, 15640, 15640);
INSERT INTO `emon_rencanakeu_2019` VALUES (27, '11279860', '12', 0, 16466.667, 24700, 32933.333, 41166.667, 49400, 57633.333, 65866.667, 74100, 82333.333, 90566.667, 98800);
INSERT INTO `emon_rencanakeu_2019` VALUES (28, '11279860', '13', 0, 203373.667, 203373.667, 203373.667, 350000, 350000, 450000, 450000, 450000, 557761, 557761, 557761);
INSERT INTO `emon_rencanakeu_2019` VALUES (29, '11279860', '14', 0, 24193.167, 36289.75, 48386.333, 60482.917, 72579.5, 84676.083, 96772.667, 108869.25, 120965.833, 133062.417, 145159);
INSERT INTO `emon_rencanakeu_2019` VALUES (30, '11279860', '15', 0, 12500, 18750, 25000, 31250, 37500, 43750, 50000, 56250, 62500, 68750, 75000);
INSERT INTO `emon_rencanakeu_2019` VALUES (31, '11279860', '16', 0, 3000, 4500, 6000, 7500, 9000, 10500, 12000, 13500, 15000, 16500, 18000);
INSERT INTO `emon_rencanakeu_2019` VALUES (32, '11279860', '17', 25000, 94000, 141000, 188000, 235000, 282000, 329000, 376000, 423000, 470000, 517000, 564000);
INSERT INTO `emon_rencanakeu_2019` VALUES (33, '11279860', '18', 0, 753.5, 1130.25, 1507, 1883.75, 2260.5, 2637.25, 3014, 3390.75, 3767.5, 4500, 5089);
INSERT INTO `emon_rencanakeu_2019` VALUES (34, '11279860', '19', 53679.167, 176399.166, 264598.75, 352798.334, 440997.916, 529197.5, 617397.084, 705596.666, 793796.25, 881995.834, 1010195.416, 1110187);
INSERT INTO `emon_rencanakeu_2019` VALUES (35, '11279860', '2', 1180, 19674.95, 81156.7, 133776.85, 259287.75, 329632.5, 376133.75, 475736, 488875, 512048, 513228, 534418);
INSERT INTO `emon_rencanakeu_2019` VALUES (36, '11279860', '20', 8683.333, 21697, 32545.5, 43394, 54242.5, 65091, 75939.5, 86788, 97636.5, 108485, 119333.5, 130182);
INSERT INTO `emon_rencanakeu_2019` VALUES (37, '11279860', '21', 0, 0, 0, 54477, 54477, 54477, 54477, 54477, 54477, 54477, 54477, 54477);
INSERT INTO `emon_rencanakeu_2019` VALUES (38, '11279860', '22', 8688.667, 13327.333, 17966, 22604.667, 27243.333, 31882, 36520.667, 41159.333, 45798, 50436.667, 55075.333, 59714);
INSERT INTO `emon_rencanakeu_2019` VALUES (39, '11279860', '23', 14075, 38445, 66527, 100009, 152147, 232500.25, 262982.25, 295897.583, 357767.25, 406797.75, 462618.25, 500280);
INSERT INTO `emon_rencanakeu_2019` VALUES (40, '11279860', '24', 3600, 71055, 107675, 354095, 601715, 834285, 1049755, 1084375, 1129020, 1148540, 1189320, 1231596);
INSERT INTO `emon_rencanakeu_2019` VALUES (41, '11279860', '25', 192028.83, 384057.83, 576086.63, 768115.5, 960144.5, 1344202.6, 1536231.4, 1728260.2, 1920289.2, 2112318, 2304347, 2496376);
INSERT INTO `emon_rencanakeu_2019` VALUES (42, '11279860', '26', 96691.365, 539943.33, 809914.695, 1079886.06, 1349857.425, 1836006.79, 2105978.16, 2375949.525, 2645920.89, 2915892.26, 3185863.63, 3455835);
INSERT INTO `emon_rencanakeu_2019` VALUES (43, '11279860', '3', 21500, 48135, 68635, 89635, 108635, 136747, 161747, 192147, 215347, 248547, 275407, 280757);
INSERT INTO `emon_rencanakeu_2019` VALUES (44, '11279860', '4', 34996, 92000.8, 181390.6, 235569.4, 260355.7, 321793, 375118.3, 400222.6, 427005.4, 443772.2, 459819, 479606);
INSERT INTO `emon_rencanakeu_2019` VALUES (45, '11279860', '5', 19360, 160472.5, 253048, 396657, 490066.5, 547613.5, 719354.5, 857649, 984896.5, 1074382.5, 1187167, 1278550);
INSERT INTO `emon_rencanakeu_2019` VALUES (46, '11279860', '6', 0, 0, 0, 109185, 139310, 147310, 147310, 147310, 147310, 147310, 147310, 147310);
INSERT INTO `emon_rencanakeu_2019` VALUES (47, '11279860', '7', 0, 0, 5721, 14760, 21812, 30682, 42888, 55094, 75920, 88126, 100332, 113716);
INSERT INTO `emon_rencanakeu_2019` VALUES (48, '11279860', '8', 50091, 123601, 196135, 259055, 307725, 364305, 449233, 508343, 578673, 647963, 709719, 756069);
INSERT INTO `emon_rencanakeu_2019` VALUES (49, '11279860', '9', 0, 0, 0, 0, 27985, 27985, 27985, 27985, 27985, 27985, 27985, 27985);
INSERT INTO `emon_rencanakeu_2019` VALUES (50, '11576981', '1', 30600, 54803.5, 93503.5, 3296258.5, 3327758.5, 7040858.5, 7072958.5, 7099458.5, 10810262, 10835262, 15863626, 15880296);
INSERT INTO `emon_rencanakeu_2019` VALUES (51, '11576981', '10', 5107.5, 10215, 15322.5, 20430, 25537.5, 30645, 35752.5, 40860, 45967.5, 51075, 56182.5, 61290);
INSERT INTO `emon_rencanakeu_2019` VALUES (52, '11576981', '11', 0, 121430, 304005.5, 304005.5, 304005.5, 304005.5, 425435.5, 425435.5, 608011, 608011, 608011, 608011);
INSERT INTO `emon_rencanakeu_2019` VALUES (53, '11576981', '12', 26000, 26000, 52000, 52000, 78000, 78000, 104000, 104000, 104000, 130000, 130000, 130000);
INSERT INTO `emon_rencanakeu_2019` VALUES (54, '11576981', '13', 0, 15032, 15032, 30064, 30064, 45096, 45096, 60128, 60128, 75160, 75160, 75160);
INSERT INTO `emon_rencanakeu_2019` VALUES (55, '11576981', '14', 11736.667, 23473.333, 35210, 46946.667, 58683.333, 70420, 82156.667, 93893.333, 105630, 117366.667, 129103.333, 140840);
INSERT INTO `emon_rencanakeu_2019` VALUES (56, '11576981', '15', 65262.25, 130524.5, 195786.75, 261049, 326311.25, 391573.5, 456835.75, 522098, 587360.25, 652622.5, 717884.75, 783147);
INSERT INTO `emon_rencanakeu_2019` VALUES (57, '11576981', '16', 400, 800, 1200, 1600, 2000, 2400, 2800, 3200, 3600, 4000, 4400, 4800);
INSERT INTO `emon_rencanakeu_2019` VALUES (58, '11576981', '17', 0, 117495.692, 234991.385, 352487.077, 469982.769, 704974.154, 822469.846, 939965.538, 1057461.231, 1174956.923, 1292452.615, 1527444);
INSERT INTO `emon_rencanakeu_2019` VALUES (59, '11576981', '18', 0, 39210, 39210, 39210, 39210, 39210, 39210, 39210, 39210, 39210, 39210, 39210);
INSERT INTO `emon_rencanakeu_2019` VALUES (60, '11576981', '2', 5624.12, 24761.728, 53377.758, 75220.916, 135523.356, 234200.314, 288590.926, 333130.972, 382488.4, 489354.516, 592944.7, 614452);
INSERT INTO `emon_rencanakeu_2019` VALUES (61, '11576981', '3', 7600.006, 34256.813, 73435.204, 109536.596, 156946.239, 197680.55, 251238.727, 326706.238, 439818.852, 480553.167, 513512.983, 526397);
INSERT INTO `emon_rencanakeu_2019` VALUES (62, '11576981', '4', 11943.84, 40192.4, 66238.4, 160478, 249015.2, 313756.04, 385247.82, 459023.8, 552735.25, 661197.35, 707570, 720982);
INSERT INTO `emon_rencanakeu_2019` VALUES (63, '11576981', '5', 1000, 8259.25, 15827.25, 21986.75, 35248.75, 38723.5, 54279.5, 69507.5, 93269.5, 104165.5, 128853, 135000);
INSERT INTO `emon_rencanakeu_2019` VALUES (64, '11576981', '6', 62052, 110094, 179348, 231938, 264924, 330872, 365216, 433154, 473548, 519170, 565052, 604956);
INSERT INTO `emon_rencanakeu_2019` VALUES (65, '11576981', '7', 58979.108, 117958.213, 176937.321, 235916.429, 294895.537, 404447, 513998.463, 572977.571, 631956.679, 690935.787, 749914.892, 808894);
INSERT INTO `emon_rencanakeu_2019` VALUES (66, '11576981', '8', 67172.692, 134345.385, 201518.077, 268690.769, 335863.462, 470208.846, 537381.539, 604554.231, 671726.923, 738899.615, 806072.308, 873245);
INSERT INTO `emon_rencanakeu_2019` VALUES (67, '11576981', '9', 0, 0, 2752.5, 3670, 3670, 3670, 6422.5, 6422.5, 8257.5, 9175, 9175, 11010);
INSERT INTO `emon_rencanakeu_2019` VALUES (68, '11622323', '1', 84520.03, 401470.143, 718420.255, 1267800.45, 1859440.66, 2535600.9, 3127241.11, 3718881.32, 4310521.53, 5578321.98, 6339002.25, 8452003);
INSERT INTO `emon_rencanakeu_2019` VALUES (69, '11622323', '10', 12602.69, 59862.778, 107122.865, 189040.35, 277259.18, 378080.7, 466299.53, 554518.36, 642737.19, 831777.54, 945201.75, 1260269);
INSERT INTO `emon_rencanakeu_2019` VALUES (70, '11622323', '11', 1324.56, 6291.66, 11258.76, 19868.4, 29140.32, 39736.8, 49008.72, 58280.64, 67552.56, 87420.96, 99342, 132456);
INSERT INTO `emon_rencanakeu_2019` VALUES (71, '11622323', '12', 1005.92, 4778.12, 8550.32, 15088.8, 22130.24, 30177.6, 37219.04, 44260.48, 51301.92, 66390.72, 75444, 100592);
INSERT INTO `emon_rencanakeu_2019` VALUES (72, '11622323', '13', 1029.32, 4889.27, 8749.22, 15439.8, 22645.04, 30879.6, 38084.84, 45290.08, 52495.32, 67935.12, 77199, 102932);
INSERT INTO `emon_rencanakeu_2019` VALUES (73, '11622323', '14', 913.16, 4337.51, 7761.86, 13697.4, 20089.52, 27394.8, 33786.92, 40179.04, 46571.16, 60268.56, 68487, 91316);
INSERT INTO `emon_rencanakeu_2019` VALUES (74, '11622323', '15', 1183.4, 5621.15, 10058.9, 17751, 26034.8, 35502, 43785.8, 52069.6, 60353.4, 78104.4, 88755, 118340);
INSERT INTO `emon_rencanakeu_2019` VALUES (75, '11622323', '16', 1369.43, 6504.793, 11640.155, 20541.45, 30127.46, 41082.9, 50668.91, 60254.92, 69840.93, 90382.38, 102707.25, 136943);
INSERT INTO `emon_rencanakeu_2019` VALUES (76, '11622323', '17', 1081.12, 5135.32, 9189.52, 16216.8, 23784.64, 32433.6, 40001.44, 47569.28, 55137.12, 71353.92, 81084, 108112);
INSERT INTO `emon_rencanakeu_2019` VALUES (77, '11622323', '18', 1493.22, 7092.795, 12692.37, 22398.3, 32850.84, 44796.6, 55249.14, 65701.68, 76154.22, 98552.52, 111991.5, 149322);
INSERT INTO `emon_rencanakeu_2019` VALUES (78, '11622323', '19', 5035.05, 23916.489, 42797.925, 75525.75, 110771.1, 151051.5, 186296.85, 221542.2, 256787.55, 332313.3, 377628.75, 503505);
INSERT INTO `emon_rencanakeu_2019` VALUES (79, '11622323', '2', 2972.28, 14118.33, 25264.38, 44584.2, 65390.16, 89168.4, 109974.36, 130780.32, 151586.28, 196170.48, 222921, 297228);
INSERT INTO `emon_rencanakeu_2019` VALUES (80, '11622323', '20', 50156.83, 238244.943, 426333.055, 752352.45, 1103450.26, 1504704.9, 1855802.71, 2206900.52, 2557998.33, 3310350.78, 3761762.25, 5015683);
INSERT INTO `emon_rencanakeu_2019` VALUES (81, '11622323', '21', 4516, 21451, 38386, 67740, 99352, 135480, 167092, 198704, 230316, 298056, 338700, 451600);
INSERT INTO `emon_rencanakeu_2019` VALUES (82, '11622323', '22', 10076.91, 47865.323, 85653.735, 151153.65, 221692.02, 302307.3, 372845.67, 443384.04, 513922.41, 665076.06, 755768.25, 1007691);
INSERT INTO `emon_rencanakeu_2019` VALUES (83, '11622323', '23', 31129.14, 147863.416, 264597.69, 466937.1, 684841.08, 933874.2, 1151778.18, 1369682.16, 1587586.14, 2054523.24, 2334685.5, 3112914);
INSERT INTO `emon_rencanakeu_2019` VALUES (84, '11622323', '24', 5956.05, 28291.238, 50626.425, 89340.75, 131033.1, 178681.5, 220373.85, 262066.2, 303758.55, 393099.3, 446703.75, 595605);
INSERT INTO `emon_rencanakeu_2019` VALUES (85, '11622323', '25', 3600.26, 17101.235, 30602.21, 54003.9, 79205.72, 108007.8, 133209.62, 158411.44, 183613.26, 237617.16, 270019.5, 360026);
INSERT INTO `emon_rencanakeu_2019` VALUES (86, '11622323', '26', 4380, 20805.001, 37230, 65700, 96360, 131400, 162060, 192720, 223380, 289080, 328500, 438000);
INSERT INTO `emon_rencanakeu_2019` VALUES (87, '11622323', '27', 5216.64, 24779.04, 44341.44, 78249.6, 114766.08, 156499.2, 193015.68, 229532.16, 266048.64, 344298.24, 391248, 521664);
INSERT INTO `emon_rencanakeu_2019` VALUES (88, '11622323', '28', 13855.34, 65812.866, 117770.39, 207830.1, 304817.48, 415660.2, 512647.58, 609634.96, 706622.34, 914452.44, 1039150.5, 1385534);
INSERT INTO `emon_rencanakeu_2019` VALUES (89, '11622323', '29', 3904.4, 18545.9, 33187.4, 58566, 85896.8, 117132, 144462.8, 171793.6, 199124.4, 257690.4, 292830, 390440);
INSERT INTO `emon_rencanakeu_2019` VALUES (90, '11622323', '3', 2683.67, 12747.433, 22811.195, 40255.05, 59040.74, 80510.1, 99295.79, 118081.48, 136867.17, 177122.22, 201275.25, 268367);
INSERT INTO `emon_rencanakeu_2019` VALUES (91, '11622323', '30', 4240.65, 20143.088, 36045.525, 63609.75, 93294.3, 127219.5, 156904.05, 186588.6, 216273.15, 279882.9, 318048.75, 424065);
INSERT INTO `emon_rencanakeu_2019` VALUES (92, '11622323', '31', 13408.44, 63690.09, 113971.74, 201126.6, 294985.68, 402253.2, 496112.28, 589971.36, 683830.44, 884957.04, 1005633, 1340844);
INSERT INTO `emon_rencanakeu_2019` VALUES (93, '11622323', '32', 5230.74, 24846.015, 44461.29, 78461.1, 115076.28, 156922.2, 193537.38, 230152.56, 266767.74, 345228.84, 392305.5, 523074);
INSERT INTO `emon_rencanakeu_2019` VALUES (94, '11622323', '33', 4019.68, 19093.48, 34167.28, 60295.2, 88432.96, 120590.4, 148728.16, 176865.92, 205003.68, 265298.88, 301476, 401968);
INSERT INTO `emon_rencanakeu_2019` VALUES (95, '11622323', '34', 2918.48, 13862.782, 24807.08, 43777.2, 64206.56, 87554.4, 107983.76, 128413.12, 148842.48, 192619.68, 218886, 291848);
INSERT INTO `emon_rencanakeu_2019` VALUES (96, '11622323', '35', 235530, 1118767.502, 2002005, 3532950, 5181660, 7065900, 8714610, 10363320, 12012030, 15544980, 17664750, 23553000);
INSERT INTO `emon_rencanakeu_2019` VALUES (97, '11622323', '36', 1096.52, 5208.47, 9320.42, 16447.8, 24123.44, 32895.6, 40571.24, 48246.88, 55922.52, 72370.32, 82239, 109652);
INSERT INTO `emon_rencanakeu_2019` VALUES (98, '11622323', '37', 996.76, 4734.61, 8472.46, 14951.4, 21928.72, 29902.8, 36880.12, 43857.44, 50834.76, 65786.16, 74757, 99676);
INSERT INTO `emon_rencanakeu_2019` VALUES (99, '11622323', '38', 1061.76, 5043.361, 9024.96, 15926.4, 23358.72, 31852.8, 39285.12, 46717.44, 54149.76, 70076.16, 79632, 106176);
INSERT INTO `emon_rencanakeu_2019` VALUES (100, '11622323', '39', 1059.14, 5030.915, 9002.69, 15887.1, 23301.08, 31774.2, 39188.18, 46602.16, 54016.14, 69903.24, 79435.5, 105914);
INSERT INTO `emon_rencanakeu_2019` VALUES (101, '11622323', '4', 8550.58, 40615.256, 72679.93, 128258.7, 188112.76, 256517.4, 316371.46, 376225.52, 436079.58, 564338.28, 641293.5, 855058);
INSERT INTO `emon_rencanakeu_2019` VALUES (102, '11622323', '40', 1269.05, 6027.988, 10786.925, 19035.75, 27919.1, 38071.5, 46954.85, 55838.2, 64721.55, 83757.3, 95178.75, 126905);
INSERT INTO `emon_rencanakeu_2019` VALUES (103, '11622323', '41', 3900, 18525, 33150, 58500, 85800, 117000, 144300, 171600, 198900, 257400, 292500, 390000);
INSERT INTO `emon_rencanakeu_2019` VALUES (104, '11622323', '42', 4558, 21650.501, 38743, 68370, 100276, 136740, 168646, 200552, 232458, 300828, 341850, 455800);
INSERT INTO `emon_rencanakeu_2019` VALUES (105, '11622323', '43', 4544.68, 21587.23, 38629.78, 68170.2, 99982.96, 136340.4, 168153.16, 199965.92, 231778.68, 299948.88, 340851, 454468);
INSERT INTO `emon_rencanakeu_2019` VALUES (106, '11622323', '44', 4663.4, 22151.151, 39638.9, 69951, 102594.8, 139902, 172545.8, 205189.6, 237833.4, 307784.4, 349755, 466340);
INSERT INTO `emon_rencanakeu_2019` VALUES (107, '11622323', '45', 6247.23, 29674.343, 53101.455, 93708.45, 137439.06, 187416.9, 231147.51, 274878.12, 318608.73, 412317.18, 468542.25, 624723);
INSERT INTO `emon_rencanakeu_2019` VALUES (108, '11622323', '46', 5987.13, 28438.869, 50890.605, 89806.95, 131716.86, 179613.9, 221523.81, 263433.72, 305343.63, 395150.58, 449034.75, 598713);
INSERT INTO `emon_rencanakeu_2019` VALUES (109, '11622323', '47', 10168.24, 48299.141, 86430.04, 152523.6, 223701.28, 305047.2, 376224.88, 447402.56, 518580.24, 671103.84, 762618, 1016824);
INSERT INTO `emon_rencanakeu_2019` VALUES (110, '11622323', '48', 14808.23, 70339.093, 125869.955, 222123.45, 325781.06, 444246.9, 547904.51, 651562.12, 755219.73, 977343.18, 1110617.25, 1480823);
INSERT INTO `emon_rencanakeu_2019` VALUES (111, '11622323', '49', 1975.5, 9383.625, 16791.75, 29632.5, 43461, 59265, 73093.5, 86922, 100750.5, 130383, 148162.5, 197550);
INSERT INTO `emon_rencanakeu_2019` VALUES (112, '11622323', '5', 2580.88, 12259.18, 21937.48, 38713.2, 56779.36, 77426.4, 95492.56, 113558.72, 131624.88, 170338.08, 193566, 258088);
INSERT INTO `emon_rencanakeu_2019` VALUES (113, '11622323', '50', 22524.5, 106991.375, 191458.25, 337867.5, 495539, 675735, 833406.5, 991078, 1148749.5, 1486617, 1689337.5, 2252450);
INSERT INTO `emon_rencanakeu_2019` VALUES (114, '11622323', '51', 10000, 47500.001, 85000, 150000, 220000, 300000, 370000, 440000, 510000, 660000, 750000, 1000000);
INSERT INTO `emon_rencanakeu_2019` VALUES (115, '11622323', '52', 15000, 71250.001, 127500, 225000, 330000, 450000, 555000, 660000, 765000, 990000, 1125000, 1500000);
INSERT INTO `emon_rencanakeu_2019` VALUES (116, '11622323', '53', 5120.28, 24321.331, 43522.38, 76804.2, 112646.16, 153608.4, 189450.36, 225292.32, 261134.28, 337938.48, 384021, 512028);
INSERT INTO `emon_rencanakeu_2019` VALUES (117, '11622323', '54', 23078.07, 109620.833, 196163.595, 346171.05, 507717.54, 692342.1, 853888.59, 1015435.08, 1176981.57, 1523152.62, 1730855.25, 2307807);
INSERT INTO `emon_rencanakeu_2019` VALUES (118, '11622323', '55', 9967.38, 47345.056, 84722.73, 149510.7, 219282.36, 299021.4, 368793.06, 438564.72, 508336.38, 657847.08, 747553.5, 996738);
INSERT INTO `emon_rencanakeu_2019` VALUES (119, '11622323', '56', 900, 4275.001, 7650, 13500, 19800, 27000, 33300, 39600, 45900, 59400, 67500, 90000);
INSERT INTO `emon_rencanakeu_2019` VALUES (120, '11622323', '57', 6350.29, 30163.878, 53977.465, 95254.35, 139706.38, 190508.7, 234960.73, 279412.76, 323864.79, 419119.14, 476271.75, 635029);
INSERT INTO `emon_rencanakeu_2019` VALUES (121, '11622323', '58', 7500, 35625.001, 63750, 112500, 165000, 225000, 277500, 330000, 382500, 495000, 562500, 750000);
INSERT INTO `emon_rencanakeu_2019` VALUES (122, '11622323', '59', 5976.95, 28390.513, 50804.075, 89654.25, 131492.9, 179308.5, 221147.15, 262985.8, 304824.45, 394478.7, 448271.25, 597695);
INSERT INTO `emon_rencanakeu_2019` VALUES (123, '11622323', '6', 2620, 12445, 22270, 39300, 57640, 78600, 96940, 115280, 133620, 172920, 196500, 262000);
INSERT INTO `emon_rencanakeu_2019` VALUES (124, '11622323', '60', 18000, 85500, 153000, 270000, 396000, 540000, 666000, 792000, 918000, 1188000, 1350000, 1800000);
INSERT INTO `emon_rencanakeu_2019` VALUES (125, '11622323', '61', 2133.9, 10136.026, 18138.15, 32008.5, 46945.8, 64017, 78954.3, 93891.6, 108828.9, 140837.4, 160042.5, 213390);
INSERT INTO `emon_rencanakeu_2019` VALUES (126, '11622323', '62', 7000, 33250, 59500, 105000, 154000, 210000, 259000, 308000, 357000, 462000, 525000, 700000);
INSERT INTO `emon_rencanakeu_2019` VALUES (127, '11622323', '63', 9926.69, 47151.778, 84376.865, 148900.35, 218387.18, 297800.7, 367287.53, 436774.36, 506261.19, 655161.54, 744501.75, 992669);
INSERT INTO `emon_rencanakeu_2019` VALUES (128, '11622323', '64', 109855.61, 521814.15, 933772.685, 1647834.15, 2416823.42, 3295668.3, 4064657.57, 4833646.84, 5602636.11, 7250470.26, 8239170.75, 10985561);
INSERT INTO `emon_rencanakeu_2019` VALUES (129, '11622323', '65', 82898.65, 393768.588, 704638.525, 1243479.75, 1823770.3, 2486959.5, 3067250.05, 3647540.6, 4227831.15, 5471310.9, 6217398.75, 8289865);
INSERT INTO `emon_rencanakeu_2019` VALUES (130, '11622323', '66', 663.2, 3150.2, 5637.2, 9948, 14590.4, 19896, 24538.4, 29180.8, 33823.2, 43771.2, 49740, 66320);
INSERT INTO `emon_rencanakeu_2019` VALUES (131, '11622323', '67', 2568.8, 12201.8, 21834.8, 38532, 56513.6, 77064, 95045.6, 113027.2, 131008.8, 169540.8, 192660, 256880);
INSERT INTO `emon_rencanakeu_2019` VALUES (132, '11622323', '68', 15490.4, 73579.4, 131668.4, 232356, 340788.8, 464712, 573144.8, 681577.6, 790010.4, 1022366.4, 1161780, 1549040);
INSERT INTO `emon_rencanakeu_2019` VALUES (133, '11622323', '69', 4146.57, 19696.208, 35245.845, 62198.55, 91224.54, 124397.1, 153423.09, 182449.08, 211475.07, 273673.62, 310992.75, 414657);
INSERT INTO `emon_rencanakeu_2019` VALUES (134, '11622323', '7', 3119.98, 14819.905, 26519.83, 46799.7, 68639.56, 93599.4, 115439.26, 137279.12, 159118.98, 205918.68, 233998.5, 311998);
INSERT INTO `emon_rencanakeu_2019` VALUES (135, '11622323', '70', 844.4, 4010.9, 7177.4, 12666, 18576.8, 25332, 31242.8, 37153.6, 43064.4, 55730.4, 63330, 84440);
INSERT INTO `emon_rencanakeu_2019` VALUES (136, '11622323', '71', 5336, 25346, 45356, 80040, 117392, 160080, 197432, 234784, 272136, 352176, 400200, 533600);
INSERT INTO `emon_rencanakeu_2019` VALUES (137, '11622323', '72', 73.4, 348.65, 623.9, 1101, 1614.8, 2202, 2715.8, 3229.6, 3743.4, 4844.4, 5505, 7340);
INSERT INTO `emon_rencanakeu_2019` VALUES (138, '11622323', '73', 13823.51, 65661.673, 117499.835, 207352.65, 304117.22, 414705.3, 511469.87, 608234.44, 704999.01, 912351.66, 1036763.25, 1382351);
INSERT INTO `emon_rencanakeu_2019` VALUES (139, '11622323', '74', 276, 1311, 2346, 4140, 6072, 8280, 10212, 12144, 14076, 18216, 20700, 27600);
INSERT INTO `emon_rencanakeu_2019` VALUES (140, '11622323', '75', 517.5, 2458.125, 4398.75, 7762.5, 11385, 15525, 19147.5, 22770, 26392.5, 34155, 38812.5, 51750);
INSERT INTO `emon_rencanakeu_2019` VALUES (141, '11622323', '76', 1800.73, 8553.468, 15306.205, 27010.95, 39616.06, 54021.9, 66627.01, 79232.12, 91837.23, 118848.18, 135054.75, 180073);
INSERT INTO `emon_rencanakeu_2019` VALUES (142, '11622323', '77', 1104, 5244, 9384, 16560, 24288, 33120, 40848, 48576, 56304, 72864, 82800, 110400);
INSERT INTO `emon_rencanakeu_2019` VALUES (143, '11622323', '8', 5616, 26676, 47736, 84240, 123552, 168480, 207792, 247104, 286416, 370656, 421200, 561600);
INSERT INTO `emon_rencanakeu_2019` VALUES (144, '11622323', '9', 10195.5, 48428.626, 86661.75, 152932.5, 224301, 305865, 377233.5, 448602, 519970.5, 672903, 764662.5, 1019550);
INSERT INTO `emon_rencanakeu_2019` VALUES (145, '11636846', '1', 5723, 35442, 94563, 118805, 146447, 191972, 197597, 243802, 255239, 269864, 278125, 287546);
INSERT INTO `emon_rencanakeu_2019` VALUES (146, '11636846', '11', 146441.8, 317293.1, 488144.4, 658995.7, 829847, 1000698.1, 1317990, 1488841.3, 1659692.6, 1830543.9, 2001395.2, 2196656);
INSERT INTO `emon_rencanakeu_2019` VALUES (147, '11636846', '12', 0, 112713, 225426, 338139, 450852, 676278, 901704, 1014417, 1127130, 1239843, 1352556, 1577550);
INSERT INTO `emon_rencanakeu_2019` VALUES (148, '11636846', '13', 0, 0, 0, 0, 0, 0, 13960, 13960, 13960, 13960, 13960, 13960);
INSERT INTO `emon_rencanakeu_2019` VALUES (149, '11636846', '14', 4000, 8000, 12000, 16000, 20000, 24000, 28000, 32000, 36000, 44290, 52580, 60870);
INSERT INTO `emon_rencanakeu_2019` VALUES (150, '11636846', '15', 0, 71586.54, 108173.08, 144759.62, 181346.16, 217932.7, 276634.62, 316298.08, 383228.86, 494390.4, 605551.94, 718300);
INSERT INTO `emon_rencanakeu_2019` VALUES (151, '11636846', '16', 5000, 10000, 15000, 20000, 25000, 30000, 35000, 40000, 45000, 65000, 85000, 119480);
INSERT INTO `emon_rencanakeu_2019` VALUES (152, '11636846', '17', 3000, 6000, 9000, 12000, 15000, 18000, 21000, 24000, 27000, 37000, 47000, 63380);
INSERT INTO `emon_rencanakeu_2019` VALUES (153, '11636846', '18', 0, 24000, 36000, 48000, 60000, 72000, 84000, 96000, 108000, 120000, 145000, 174400);
INSERT INTO `emon_rencanakeu_2019` VALUES (154, '11636846', '19', 21000, 76000, 115000, 154000, 193000, 232000, 271000, 310000, 349000, 388000, 427000, 468000);
INSERT INTO `emon_rencanakeu_2019` VALUES (155, '11636846', '2', 10782, 22007.5, 39448, 60173.5, 101521, 151337.5, 178501, 194721, 214384, 240881, 292316, 303447);
INSERT INTO `emon_rencanakeu_2019` VALUES (156, '11636846', '20', 0, 0, 0, 0, 0, 1000, 1000, 1000, 1000, 2000, 2000, 3000);
INSERT INTO `emon_rencanakeu_2019` VALUES (157, '11636846', '21', 0, 150436, 300872, 451308, 601744, 752180, 1000552, 1150988, 1301424, 1451860, 1602296, 1906372);
INSERT INTO `emon_rencanakeu_2019` VALUES (158, '11636846', '22', 10500, 21000, 31500, 42000, 52500, 63000, 73500, 84000, 94500, 105000, 120000, 130000);
INSERT INTO `emon_rencanakeu_2019` VALUES (159, '11636846', '23', 0, 0, 0, 0, 33195, 33195, 33195, 33195, 33195, 33195, 33195, 33195);
INSERT INTO `emon_rencanakeu_2019` VALUES (160, '11636846', '24', 0, 0, 2000, 8000, 10000, 12000, 14000, 16000, 18000, 34347, 40347, 45067);
INSERT INTO `emon_rencanakeu_2019` VALUES (161, '11636846', '25', 3030, 4130, 10770.25, 18207, 27268.5, 36815.25, 56516.75, 63894.25, 75245, 84556.25, 94578.5, 97016);
INSERT INTO `emon_rencanakeu_2019` VALUES (162, '11636846', '26', 10095, 55895, 111409, 142677.4, 174527.4, 215981.4, 271379.8, 339809.8, 396503.2, 452226.6, 508679, 562133);
INSERT INTO `emon_rencanakeu_2019` VALUES (163, '11636846', '27', 0, 0, 0, 0, 0, 0, 20000, 20000, 20000, 20000, 20000, 20000);
INSERT INTO `emon_rencanakeu_2019` VALUES (164, '11636846', '3', 1800, 16360.8, 78529.8, 179417.8, 402563.05, 663399.2, 860616.2, 1013430.95, 1213113.7, 1396915.7, 1524874.4, 1538916);
INSERT INTO `emon_rencanakeu_2019` VALUES (165, '11636846', '4', 23122.1, 54764.6, 140204.367, 492040.367, 600987.634, 737994.3, 780182.4, 829160.9, 941397.5, 1018210, 1031916, 1035756);
INSERT INTO `emon_rencanakeu_2019` VALUES (166, '11636846', '5', 13370, 58766, 99467, 163827, 218154.05, 285416.05, 365433.05, 451416.05, 513934.05, 605411, 667486, 733370);
INSERT INTO `emon_rencanakeu_2019` VALUES (167, '11636846', '6', 11620, 27460, 76860, 173555, 218145, 277887, 307015, 332303, 381159, 443354, 487419, 497651);
INSERT INTO `emon_rencanakeu_2019` VALUES (168, '11636846', '7', 0, 14793.325, 38828.15, 58744.975, 90276.3, 126603.8, 159499.3, 188276.633, 214817.966, 255246.6, 290734, 302578);
INSERT INTO `emon_rencanakeu_2019` VALUES (169, '11636850', '1', 31260, 120850, 1826423.8, 1934963.8, 3332326.96, 3852507.96, 5571429.32, 5681379.32, 8596157, 8707157, 8788957, 8833911);
INSERT INTO `emon_rencanakeu_2019` VALUES (170, '11636850', '10', 500, 500, 1431895.4, 1432395.4, 2808033.78, 2809313.78, 4542268.26, 4543548.26, 7207487, 7228767, 7250047, 7261113);
INSERT INTO `emon_rencanakeu_2019` VALUES (171, '11636850', '11', 0, 5762.5, 7870.501, 13953.5, 15236.5, 39289.5, 50867.5, 55367.5, 56142.5, 60642.5, 88982.5, 113145);
INSERT INTO `emon_rencanakeu_2019` VALUES (172, '11636850', '12', 17714.167, 83528.636, 136704.773, 175037.576, 213370.379, 235221.515, 304825.985, 374483.788, 412816.591, 451149.394, 520753.864, 557395);
INSERT INTO `emon_rencanakeu_2019` VALUES (173, '11636850', '13', 64866.48, 141914.464, 218962.444, 296010.428, 373058.409, 495892.462, 634628.591, 711676.572, 788724.556, 865772.536, 942820.52, 1032050);
INSERT INTO `emon_rencanakeu_2019` VALUES (174, '11636850', '14', 0, 66580, 133160, 199740, 266320, 332900, 466060, 532640, 599220, 665800, 732380, 865540);
INSERT INTO `emon_rencanakeu_2019` VALUES (175, '11636850', '15', 0, 2126, 2126, 2126, 2126, 4252, 4252, 6378, 6378, 6378, 8504, 10630);
INSERT INTO `emon_rencanakeu_2019` VALUES (176, '11636850', '16', 0, 14196, 14196, 14196, 28392, 28392, 28392, 42588, 42588, 42588, 56784, 56784);
INSERT INTO `emon_rencanakeu_2019` VALUES (177, '11636850', '17', 0, 33691.6, 33691.6, 50537.4, 50537.4, 67383.2, 67383.2, 84229, 84229, 84229, 84229, 84229);
INSERT INTO `emon_rencanakeu_2019` VALUES (178, '11636850', '18', 0, 0, 5620, 5620, 5620, 5620, 5620, 5620, 5620, 5620, 5620, 5620);
INSERT INTO `emon_rencanakeu_2019` VALUES (179, '11636850', '19', 450, 5160, 5610, 6060, 10770, 11220, 11670, 16380, 16830, 21540, 21990, 22440);
INSERT INTO `emon_rencanakeu_2019` VALUES (180, '11636850', '20', 0, 5416.25, 5416.25, 5416.25, 10832.5, 10832.5, 10832.5, 16248.75, 16248.75, 21665, 21665, 21665);
INSERT INTO `emon_rencanakeu_2019` VALUES (181, '11636850', '21', 8540, 17080, 25620, 34160, 42700, 51240, 59780, 68320, 76860, 85400, 93940, 102480);
INSERT INTO `emon_rencanakeu_2019` VALUES (182, '11636850', '22', 13583, 27166, 40749, 54332, 67915, 81498, 95081, 108664, 122247, 135830, 149413, 162996);
INSERT INTO `emon_rencanakeu_2019` VALUES (183, '11636850', '23', 0, 350, 700, 1050, 1400, 1750, 2100, 2450, 2800, 3150, 3500, 3500);
INSERT INTO `emon_rencanakeu_2019` VALUES (184, '11636850', '24', 91653, 183306, 274959, 366612, 519515, 641571, 733224, 824877, 916530, 1008183, 1099836, 1191489);
INSERT INTO `emon_rencanakeu_2019` VALUES (185, '11636850', '25', 9526.636, 19053.273, 28579.909, 38106.545, 47633.182, 57159.818, 66686.455, 76213.091, 85739.727, 95266.364, 104793, 104793);
INSERT INTO `emon_rencanakeu_2019` VALUES (186, '11636850', '26', 0, 0, 33554, 33554, 33554, 33554, 33554, 33554, 33554, 33554, 33554, 33554);
INSERT INTO `emon_rencanakeu_2019` VALUES (187, '11636850', '4', 21260, 64620, 244177, 402437, 570275, 729065, 936245, 1102535, 1311320, 1459816, 1527176, 1549536);
INSERT INTO `emon_rencanakeu_2019` VALUES (188, '11636850', '5', 19718.182, 44536.364, 134254.546, 200572.728, 232580.91, 267662.092, 297743.274, 356361.456, 410979.638, 431608.82, 610834, 624097);
INSERT INTO `emon_rencanakeu_2019` VALUES (189, '11636850', '6', 1300, 13142, 176310.5, 207922.5, 262616, 895348, 895348, 956681, 1040437, 1095371, 1149292, 1185891);
INSERT INTO `emon_rencanakeu_2019` VALUES (190, '11636850', '8', 12314, 36226.5, 72401, 89601, 113993, 133763, 157813, 176062, 192431, 225548, 253328, 275552);
INSERT INTO `emon_rencanakeu_2019` VALUES (191, '11636850', '9', 0, 0, 0, 13000, 13000, 13000, 13000, 13000, 13000, 13000, 13000, 13000);

-- ----------------------------
-- Table structure for employee
-- ----------------------------
DROP TABLE IF EXISTS `employee`;
CREATE TABLE `employee`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nip` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `name` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `username` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `password` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `last_login` timestamp(0) NOT NULL DEFAULT CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 16 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of employee
-- ----------------------------
INSERT INTO `employee` VALUES (1, '1234555555', 'Dr. Eko Winar Irianto M.T.', 'ekowinar', '7815696ecbf1c96e6894b779456d330e', '2018-05-06 14:01:34');
INSERT INTO `employee` VALUES (2, '4321', 'Drs. Ratna Adiana', 'ratnaadiana', '21232f297a57a5a743894a0e4a801fc3', '2018-05-06 14:01:34');
INSERT INTO `employee` VALUES (3, '', 'Ir. Dery Iryawan M.T', '', '', '2018-05-06 14:01:34');
INSERT INTO `employee` VALUES (4, '', 'Drs. Endar P. Satriyanto, M.M.', '', '', '2018-05-06 14:01:34');
INSERT INTO `employee` VALUES (5, '', 'Ir. Tati Kurniati, M.T.', '', '', '2018-05-06 14:01:34');
INSERT INTO `employee` VALUES (6, '131183112206', 'Slamet Lestari, S.T., M.T.', 'slametlestari', 'a8f5f167f44f4964e6c998dee827110c', '2018-05-06 14:01:34');
INSERT INTO `employee` VALUES (7, '', 'Drs. Irfan Sudono, M.T.', '', '', '2018-05-06 14:01:34');
INSERT INTO `employee` VALUES (8, '', 'Ir. Nur Fizli Kifli, M.T.', '', '', '2018-05-06 14:01:34');
INSERT INTO `employee` VALUES (9, '', 'Rahmat Suria Lubis, S.T., M.T.', 'rahmatsuria', '7815696ecbf1c96e6894b779456d330e', '2018-05-06 14:01:34');
INSERT INTO `employee` VALUES (10, '', 'Ir. Dwi Kristiananto, M.Eng', '', '', '2018-05-06 14:01:34');
INSERT INTO `employee` VALUES (11, '', 'Parlimbongan Simangkali, S.T. MPSDA', '', '', '2018-05-06 14:01:34');
INSERT INTO `employee` VALUES (12, '', 'Dr. Leo Eliasta, S.T. M.Sc.', '', '', '2018-05-06 14:01:34');
INSERT INTO `employee` VALUES (13, '', 'Drs. Irfan Sudono, M.T.', '', '', '2018-05-06 14:01:34');
INSERT INTO `employee` VALUES (14, '090021278', 'Mas\'ud Adhi Putra, M.Kom.', 'kangmas', 'kangmas', '2018-05-08 14:10:56');
INSERT INTO `employee` VALUES (15, '131183112206', 'Ayat Suhaya S.E. M.M', 'asuh68', '21232f297a57a5a743894a0e4a801fc3', '2018-05-20 21:01:18');

-- ----------------------------
-- Table structure for kegiatan
-- ----------------------------
DROP TABLE IF EXISTS `kegiatan`;
CREATE TABLE `kegiatan`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `judul` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL COMMENT 'Judul Kegiatan',
  `nodokumen` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tahun_anggaran` int(11) NOT NULL,
  `jenis` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `dipa` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `dipa_date` date NULL DEFAULT NULL,
  `pagu` int(11) NULL DEFAULT NULL,
  `output` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `volume` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `unitof` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `rabtitle` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `rabdocument` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `ringkasan` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `besaran` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `t_keuangan` float NOT NULL DEFAULT 0,
  `t_fisik` float NOT NULL DEFAULT 0,
  `r_keuangan` float NOT NULL DEFAULT 0,
  `r_fisik` float NOT NULL DEFAULT 0,
  `rmp_stats` tinyint(1) NULL DEFAULT NULL,
  `kdsatker` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kdpaket` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of kegiatan
-- ----------------------------
INSERT INTO `kegiatan` VALUES (1, 1, 'Pemaparan Layanan Jasa Teknik B4T oleh Kepala Bidang Standarisasi', NULL, 2019, 'Litbang', NULL, NULL, 1000000000, '-', '-', NULL, NULL, 'RAB_1549954348.JPG', NULL, NULL, 100, 100, 0, 0, NULL, '11636846', '1');
INSERT INTO `kegiatan` VALUES (2, 1, 'PPT Profil B4T ITJEN', NULL, 2019, 'Non-Litbang', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL);
INSERT INTO `kegiatan` VALUES (3, 33, 'KONSEP PEDOMAN (R-0) PEMANFAATAN LUMPUR SIDOARJO UNTUK MATERIAL TIMBUNAN TANGGUL', '213232', 2019, 'Litbang', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 0, 0, 0, 0, NULL, NULL, NULL);
INSERT INTO `kegiatan` VALUES (4, 34, 'KONSEP PEDOMAN (R-0) PEMANFAATAN LUMPUR SIDOARJO UNTUK MATERIAL TIMBUNAN TANGGUL', NULL, 2019, 'Litbang', NULL, NULL, 303447000, '-', '-', NULL, NULL, 'RAB_1549616002.xlsx', NULL, NULL, 100, 100, 0, 0, 1, NULL, NULL);

-- ----------------------------
-- Table structure for mnv_fisik
-- ----------------------------
DROP TABLE IF EXISTS `mnv_fisik`;
CREATE TABLE `mnv_fisik`  (
  `id_mnv_fisik` int(11) NOT NULL AUTO_INCREMENT,
  `id_kegiatan` int(11) NOT NULL,
  `biaya` int(11) NOT NULL,
  `biayaP` float NOT NULL,
  `fisik` int(11) NOT NULL,
  `fisik_real` float NOT NULL,
  `month` int(11) NOT NULL,
  `id_refer` int(11) NOT NULL,
  `output` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `deskripsi` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `kendala` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `tingkat_kendala` int(11) NOT NULL DEFAULT 0,
  `type` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id_mnv_fisik`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of mnv_fisik
-- ----------------------------
INSERT INTO `mnv_fisik` VALUES (1, 4, 1005000, 0, 100, 0, 1, 1, 'sk kegiatan', 'SK kegiatan', 'tidak ada kendala', 2, 'act');

-- ----------------------------
-- Table structure for mnv_kendala
-- ----------------------------
DROP TABLE IF EXISTS `mnv_kendala`;
CREATE TABLE `mnv_kendala`  (
  `id_mnv_kendala` int(11) NOT NULL AUTO_INCREMENT,
  `id_kegiatan` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `month` int(3) NOT NULL,
  `kendala` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `waktu_update` timestamp(0) NOT NULL ON UPDATE CURRENT_TIMESTAMP(0),
  `tingkat_kendala` int(2) NOT NULL,
  PRIMARY KEY (`id_mnv_kendala`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for mnv_keuangan
-- ----------------------------
DROP TABLE IF EXISTS `mnv_keuangan`;
CREATE TABLE `mnv_keuangan`  (
  `id_mnv_keuangan` int(11) NOT NULL AUTO_INCREMENT,
  `month` int(3) NOT NULL,
  `jml_uang` int(11) NOT NULL,
  `jml_uangP` float NOT NULL,
  `waktu_update` timestamp(0) NOT NULL DEFAULT CURRENT_TIMESTAMP(0),
  `id_rmp_sdk` int(11) NOT NULL,
  `id_kegiatan` int(11) NOT NULL,
  `kendala` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  PRIMARY KEY (`id_mnv_keuangan`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for revisi_uang
-- ----------------------------
DROP TABLE IF EXISTS `revisi_uang`;
CREATE TABLE `revisi_uang`  (
  `id_revisi_uang` int(11) NOT NULL AUTO_INCREMENT,
  `id_kegiatan` int(11) NOT NULL,
  `jml` double NOT NULL DEFAULT 0,
  PRIMARY KEY (`id_revisi_uang`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for rmp
-- ----------------------------
DROP TABLE IF EXISTS `rmp`;
CREATE TABLE `rmp`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kegiatan_id` int(11) NOT NULL,
  `latar` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `masalah` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `batasan` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `tujuan` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `tinjauan` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `kerangka` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `formulasi` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `manfaat` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `juduldansumber` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `lingkup` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `metode` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `lokasi` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `sasarankeluaran` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `sasaranmutu` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `acuanteknis` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `acuanadministrasi` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `strukturorg` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `prasarana` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `lingkungan` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `baganalir` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `cek` longtext CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `evaluatorId` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of rmp
-- ----------------------------
INSERT INTO `rmp` VALUES (1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'strukturorg_1549680097.jpg', NULL, '', NULL, NULL, 0);
INSERT INTO `rmp` VALUES (2, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0);
INSERT INTO `rmp` VALUES (3, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0);
INSERT INTO `rmp` VALUES (4, 4, '<p>Bencana semburan lumpur Sidoarjo atau biasa disebut juga lumpur Lapindo, merupakan salah satu bencana di Indonesia dengan tingkat kerugian yang besar. Pada awal munculnya Tahun 2006, volume semburan mencapai 100.000 &ndash; 120.000 m<sup>3</sup> per hari yang mengakibatkan 16 desa di tiga kecamatan terendam lumpur dengan ketinggian 6 (enam) meter dan lebih dari 25.000 jiwa harus diungsikan. Walaupun hingga saat ini volume semburan sudah mengalami penurunan hingga 10.000 &ndash; 40.000 m<sup>3</sup> per hari, namun belum ada tanda-tanda semburan tersebut akan berhenti.</p>\r\n\r\n<p>Untuk mengatasi semburan lumpur yang terus keluar, maka dibuatlah tanggul cincin yang mengelilingi pusat semburan dengan panjang &plusmn; 13.00 km untuk menampung luapan lumpur agar tidak meluas ke daerah disekitarnya. Untuk mempertahankan volume lumpur yang tertampung, maka sebagian lumpur dialirkan menuju Kali Porong menggunakan sistem pompa, untuk selanjutnya lumpur dibuang ke laut secara alami mengikuti (terbawa) aliran sungai.</p>\r\n\r\n<p>Endapan lumpur yang tertampung dalam tanggul cincin, dimanfaatkan sebagai bahan dasar atau tambahan dalam pencampuran tanah timbunan. Dari kegiatan pemanfaatan endapan lumpur, dilakukan percobaan dengan pembuatan tanggul uji coba (demplot) dari campuran lumpur dan tanah timbunan yang terbaik dari hasil uji laboratorium.</p>\r\n\r\n<p>Untuk mengkaji hasil penerapan pembuatan tanggul uji coba (demplot), dilakukan monitoring dan evaluasi dalam pelaksanaannya dan kinerja setelah pembangunan. Monitoring dan evaluasi yang dilakukan berupa pengamatan stabilitas lereng dan deformasi tanggul. Dari hasil monitoring dan evaluasi tersebut, dibuatkan Konsep Pedoman (R-0) Pemafaatan Lumpur Sidoarjo untuk Material Timbunan Tanggul dengan campuran material lainnya. Kegiatan ini termasuk dalam kelompok <em>output </em>Teknologi Terapan yang dilaksanakan pada Tahun Anggaran 2019.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', '<p>Identifikasi masalah dalam kegiatan ini adalah:</p>\r\n\r\n<ol>\r\n	<li>Kondisi tanggul Lumpur Sidoarjo yang cukup kritis akibat volume lumpur terus bertambah</li>\r\n	<li>Volume lumpur yang cukup banyak belum dipergunakan secara optimal, baik sebagai bahan bangunan atau lainnya</li>\r\n	<li>Belum tersedianya pedoman tentang pemanfaatan lumpur sidoarjo untuk material timbunan tanggul.</li>\r\n</ol>\r\n', NULL, '<p>Tujuan dari kegiatan ini adalah menghasilkan Teknologi Pemanfaatan Lumpur Sidoarjo untuk Material Timbunan Tanggul.</p>\r\n', '<p>Penelitian mengenai pemanfaatan potensi luapan Lumpur Sidoarjo sebenarnya telah banyak dilakukan oleh berbagai pihak, baik institusi pemerintah, swasta, maupun oleh akademisi. Berdasarkan hasil penelitian tersebut dapat diketahui bahwa Lumpur Sidoarjo memiliki potensi untuk dapat dimanfaatkan sebagai bahan dasar atau bahan tambah yang bisa menambah nilai ekonomis suatu produk, seperti: batu bata, batako, <em>cone block</em>, <em>paving block</em>, genting, beton ringan, dan lain sebagainya.</p>\r\n\r\n<p>Pada penelitian Ngk. Made Anom Wiryasa &amp; I Wayan Sudarsana (2009), mensubstitusi semen dengan Lumpur Lapindo dalam konteks volume bertujuan untuk mengetahui komposisi adukan yang paling ideal bila ditinjau dari segi kuat tekan dan penyerapan air dari bata beton pejal. Dari hasil penelitian ini menunjukkan bahwa penggunaan lumpur Sidoarjo sebagai bahan substitusi semen sebesar 24.56% mampu menurunkan persentase penyerapan air secara optimum yaitu sebesar 18.21% dan menghasilkan kuat tekan sebesar 71.50 kg/cm<sup>2</sup>, yang mana termasuk dalam mutu B1. Bila ditinjau dari segi kuat tekan, penggunaan Lumpur Sidoarjo sebesar 7.25% dapat menghasilkan bata beton pejal dengan mutu B2, dengan kuat tekan yang dihasilkan sebesar 100.10 kg/cm<sup>2</sup> dan persentase penyerapan air sebesar 20.72%.</p>\r\n\r\n<p>Beberapa penelitian terkait dengan pemanfaatan Lumpur Lapindo sebagai bahan konstruksi timbunan juga telah banyak dilakukan. Berdasarkan hasil penelitian (Utami, 2015), yang melakukan pencampuran (<em>mixing</em>) tanah urug yang berasal dari Sumenep dan lumpur lapindo dengan komposisi campuran 10%, 20%, 30%, 40%, dan 50%. Dalam penelitian tersebut dijelaskan bahwa tanah urug dari Sumenep yang digunakan merupakan tanah yang memiliki kandungan garam sebesar 15.03 %, dengan karakteristik tanah berupa tanah lempung plastisitas tinggi yang berpotensi mudah mengalami kembang susut. Dari hasil penelitian tersebut diketahui bahwa Lumpur Sidoarjo efektif untuk digunakan sebagai stabilisator tanah lempung ekspansif, khusunya untuk tanah di daerah Sumenep. Dengan penambahan komposisi lumpur 50% mengakibatkan menurunnya potensi kembang susut dari &plusmn; 11% menjadi &plusmn; 4% (nilai kembang susut sedang berada antara 1.5 &ndash; 5%). Penambahan komposisi lumpur 40% dapat meningkatkan berat volume kering, tegangan geser, serta daya dukung tanah dibandingkan dengan tanah aslinya.</p>\r\n\r\n<p>Pada tahun 2018, Balai Litbang Sungai telah melakukan penelitian tentang pemanfaatan lumpur sidoarjo sebagai bahan campuran dengan tanah <em>borrow area</em> untuk material timbunan tanggul. Dari hasil penelitian tersebut didapatkan formula campuran yang optimal sebagai bahan timbunan yaitu 70% Lumpur Sidoarjo dengan 30% tanah <em>borrow area</em>. Hasil tersebut diterapkan dengan pembuatan tanggul uji coba (<em>demplot</em>) di Porong, Sidoarjo, Jawa Timur.</p>\r\n', NULL, NULL, '<p>Penerima manfaat secara langsung dari kegiatan ini adalah Pusat Pengendalian Lumpur Sidoarjo (PPLS) sebagai pengelola tanggul lumpur sidoarjo. Dengan adanya konsep pedoman ini, diharapkan pengguna dapat memanfaatkan lumpur sidoarjo sebagai timbunan tanggul dengan aman sehingga dapat mengurangi biaya pengadaan tanah <em>borrow area</em> dan mengurangi volume lumpur yang ada.</p>\r\n\r\n<p style=\"margin-left:21.3pt\">&nbsp;&nbsp;</p>\r\n', NULL, NULL, NULL, '<p>Lokasi kegiatan penyusunan Konsep Pedoman (R-0) dilaksanakan di Balai Litbang Sungai, Surakarta dan Pusat litbang Sumber Daya Air, Bandung berdasarkan hasil kegiatan dan pengamatan tanggul berbahan campuran lumpur sidoarjo yang dibuat di sisi selatan tanggul Lumpur Sidoarjo, Porong, Kabupaten Sidoarjo, Jawa Timur. Lokasi ini dipilih sebagai tanggul sekunder Lumpur Sidoarjo yang direncanakan dibangun oleh PPLS. Lokasi pengamatan tanggul uji coba terletak pada koordinat 7&deg;32&#39;32.19&quot;S dan 112&deg;42&#39;29.23&quot;T.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><a name=\"_Toc534644967\"><em>sumber: earth.google.com</em></a></p>\r\n\r\n<p><strong>Gambar 1.1. </strong>Peta Lokasi Kegiatan</p>\r\n', '<p>Sasaran keluaran (<em>Output</em>) kegiatan Konsep Pedoman (R-0) Pemanfaatan Lumpur Sidoarjo untuk Material Timbunan Tanggul adalah 1 (satu) Teknologi Pemanfaatan Lumpur Sidoarjo untuk Material Timbunan Tanggul yang didukung oleh komponen <em>output</em>, berupa:</p>\r\n\r\n<ol>\r\n	<li>Naskah Ilmiah Kajian Pemanfaatan Lumpur Sidoarjo untuk Material Timbunan Tanggul pada tahun 2018</li>\r\n	<li>(R-0) Pemanfaatan Lumpur Sidoarjo untuk Material Timbunan Tanggul pada tahun 2019</li>\r\n	<li>Buku Teknologi dengan judul Pemanfaatan Lumpur Sidoarjo untuk Material Timbunan Tanggul pada tahun 2019</li>\r\n</ol>\r\n', '<p>Sasaran Mutu kegiatan Konsep Pedoman (R-0) Pemanfaatan Lumpur Sidoarjo Untuk Material Timbunan Tanggul adalah:</p>\r\n\r\n<ol>\r\n	<li>Tersedianya Konsep Pedoman (R-0) Pemanfaatan Lumpur Sidoarjo untuk Material Timbunan Tanggul dengan campuran material lain yang mengikuti Peraturan Kepala Badan Standardisasi Nasional No. 4 Tahun 2016 tentang Pedoman Penulisan Standar Nasional Indonesia pada bulan November 2019.</li>\r\n	<li>Tersedianya buku teknologi dengan judul Pemanfaatan Lumpur Sidoarjo untuk Material Timbunan Tanggul yang dikemas populer dan memenuhi syarat pengajuan ISBN pada bulan November 2019.</li>\r\n</ol>\r\n', '<p>Acuan teknis kegiatan ini adalah:</p>\r\n\r\n<ol>\r\n	<li>Pd M-01-2004-A tentang Uji Mutu Konstruksi Tubuh Bendungan Tipe Urugan</li>\r\n	<li>Pd T-08-2004-A tentang Instrumentasi Tubuh Bendungan Tipe Urugan dan Tanggul</li>\r\n	<li>Pd T-14-2004-A tentang Analisis stabilitas bendungan tipe urugan akibat beban gempa</li>\r\n	<li>Keputusan Ketua Komisi Keamanan Bendungan No. 05/KPTS/2003 tentang Pedoman Kriteria Umum Desain Bendungan</li>\r\n	<li>SNI 8062:2015 tentang Tata cara desain tubuh bendungan tipe urugan</li>\r\n	<li>SNI 8064:2016 tentang Metode analisis stabilitas lereng statik bendungan tipe urugan</li>\r\n	<li>SNI 1965:2008 tentang Cara uji penentuan kadar air tanah untuk tanah dan batuan di laboratorium</li>\r\n	<li>SNI 03-3637-1994 tentang Metode pengujian berat isi tanah berbutir halus dengan cetakan benda uji</li>\r\n	<li>SNI 1964:2008 tentang Cara uji berat jenis tanah</li>\r\n	<li>SNI 1967:2008 tentang Cara uji penentuan batas cair tanah</li>\r\n	<li>SNI 1966:2008 tentang Cara uji penentuan batas plastis dan indeks plastisitas tanah</li>\r\n	<li>SNI 3422:2008 tentang Cara uji penentuan batas susut tanah</li>\r\n	<li>SNI 3423:2008 tentang Cara uji analisis ukuran butir tanah</li>\r\n	<li>SNI 1742:2008 tentang Cara uji kepadatan ringan untuk tanah</li>\r\n	<li>SNI 2455:2015 tentang Cara uji triaksial untuk tanah dalam keadaan terkonsolidasi tidak terdrainase (<em>Consolidated Undrainated</em>/<em>CU</em>) dan terkonsolidasi terdrainase (<em>Consolidated Drainated</em>/<em>CD</em>)</li>\r\n	<li>SNI 4813:2015 tentang Cara uji triaksial untuk tanah kohesif dalam keadaan tidak terkonsolidasi dan tidak terdrainase (<em>UU</em>) (ASTM D2850-87, <em>Standard method for unconsolidated undrained compresive strength of cohesive soil in triaksial compression</em>, <em>MOD</em>)</li>\r\n	<li>SNI 03-6870:2002 tentang Cara uji kelulusan air di laboratorium untuk tanah berbutir halus dengan tinggi tekanan menurun</li>\r\n	<li>SNI 2812:2011 tentang Cara uji konsolidasi tanah satu dimensi</li>\r\n	<li>SNI 2828:2011 tentang Metode uji densitas tanah di tempat (lapangan) dengan alat konus pasir</li>\r\n	<li><em>Handbook of Geotechnical Investigation and Design Tables</em>, Burt G. Look, 2007, ISBN 13: 978-0-203094660-2</li>\r\n	<li>Peraturan Kepala Badan Standardisasi Nasional Nomor 4 Tahun 2016 tentang Pedoman Penulisan Standar Nasional Indonesia</li>\r\n</ol>\r\n', '<p>Acuan adminitrasi kegiatan ini adalah</p>\r\n\r\n<ol>\r\n	<li>Peraturan Menteri Pekerjaan Umum dan Perumahan Rakyat Nomor : 20/PRT/M/2016 Tanggal 23 Mei 2016 Tentang Organisasi dan Tata Kerja Unit Pelaksana Teknis di Kementerian Pekerjaan Umum dan Perumahan Rakyat</li>\r\n	<li>Peraturan Menteri Keuangan Nomor : 32/PMK.02/2018 Tentang Standar Biaya Masukan Tahun Anggaran 2019.</li>\r\n	<li>Daftar Isian Pelaksanaan Anggaran (DIPA) Satuan Kerja Balai Litbang Sungai Tahun<br />\r\n	Anggaran 2019 No. SP DIPA-033.11.1.636846/2009 tanggal 5 Desember 2018.</li>\r\n	<li>Rincian Kertas Kerja/RKA-KL Satker Balai Litbang Sungai TA. 2019</li>\r\n	<li>Surat Keputusan Kepala Puslitbang Sumber Daya Air/Kepala Satuan Kerja Puslitbang Sumber Daya Air tentang Penunjukan Susunan Tim Pelaksana Kegiatan, dan Pengangkatan/Penunjukan Narasumber</li>\r\n	<li>Panduan RMP Kegiatan di lingkungan Puslitbang Sumber Daya Air edisi tahun 2019</li>\r\n	<li>Peraturan Menteri PUPR Nomor 20/PRT/M/2018 tentang Penyelenggaraan Sistem Pengendalian Intern Pemerintah di Kementerian Pekerjaan Umum dan Perumahan Rakyat</li>\r\n</ol>\r\n', NULL, NULL, NULL, 'baganalir_1549514335.jpg', NULL, 0);

-- ----------------------------
-- Table structure for rmp_activity
-- ----------------------------
DROP TABLE IF EXISTS `rmp_activity`;
CREATE TABLE `rmp_activity`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rmp_id` int(11) NOT NULL,
  `kegiatan` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `deskripsi` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `parent` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `hasil` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `metode` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `kriteria` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `sarpras` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `anggaran` int(11) NOT NULL DEFAULT 0,
  `pj` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `waktu` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `bobot` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 20 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of rmp_activity
-- ----------------------------
INSERT INTO `rmp_activity` VALUES (1, 4, 'Penyusunan Tim Pelaksana dan Narasumber', '', 'A', NULL, '', '', NULL, 1005000, NULL, NULL, NULL);
INSERT INTO `rmp_activity` VALUES (2, 4, 'Penyusunan Rencana Mutu Pelaksanaan (RMP)', '', 'A', NULL, '', '', NULL, 9777000, NULL, NULL, NULL);
INSERT INTO `rmp_activity` VALUES (4, 4, 'Penyusunan konsep pedoman (R-0)', '', 'B', NULL, '', '', NULL, 0, NULL, NULL, NULL);
INSERT INTO `rmp_activity` VALUES (5, 4, 'Penyusunan Buku Teknologi', '', 'B', NULL, '', '', NULL, 0, NULL, NULL, NULL);
INSERT INTO `rmp_activity` VALUES (6, 4, 'Penyusunan Laporan Berkala Simonev', '', 'C', NULL, '', '', NULL, 1035000, NULL, NULL, NULL);
INSERT INTO `rmp_activity` VALUES (7, 4, 'Penyusunan Laporan Interim', '', 'C', NULL, '', '', NULL, 900000, NULL, NULL, NULL);
INSERT INTO `rmp_activity` VALUES (8, 4, 'Penyusunan Konsep Laporan Akhir dan Konsep Output Kegiatan', '', 'C', NULL, '', '', NULL, 8396000, NULL, NULL, NULL);
INSERT INTO `rmp_activity` VALUES (9, 4, 'Penyusunan Laporan Akhir dan Output Kegiatan', '', 'C', NULL, '', '', NULL, 11131000, NULL, NULL, NULL);
INSERT INTO `rmp_activity` VALUES (10, 1, 'A', '', 'A', NULL, '', '', NULL, 0, NULL, NULL, NULL);
INSERT INTO `rmp_activity` VALUES (11, 1, 'B', '', 'A', NULL, '', '', NULL, 15000, NULL, NULL, NULL);
INSERT INTO `rmp_activity` VALUES (12, 1, 'C', '', 'A', NULL, '', '', NULL, 5000, NULL, NULL, NULL);
INSERT INTO `rmp_activity` VALUES (13, 1, 'AA', '', 'B', NULL, '', '', NULL, 42000, NULL, NULL, NULL);
INSERT INTO `rmp_activity` VALUES (14, 1, 'BB', '', 'B', NULL, '', '', NULL, 20000, NULL, NULL, NULL);
INSERT INTO `rmp_activity` VALUES (15, 1, 'CC', '', 'B', NULL, '', '', NULL, 0, NULL, NULL, NULL);
INSERT INTO `rmp_activity` VALUES (16, 1, 'DD', '', 'B', NULL, '', '', NULL, 0, NULL, NULL, NULL);
INSERT INTO `rmp_activity` VALUES (17, 1, 'AAA', '', 'C', NULL, '', '', NULL, 15000, NULL, NULL, NULL);
INSERT INTO `rmp_activity` VALUES (18, 1, 'BBB', '', 'C', NULL, '', '', NULL, 0, NULL, NULL, NULL);
INSERT INTO `rmp_activity` VALUES (19, 1, 'CCC', '', 'C', NULL, '', '', NULL, 9546, NULL, NULL, NULL);

-- ----------------------------
-- Table structure for rmp_activity_executor
-- ----------------------------
DROP TABLE IF EXISTS `rmp_activity_executor`;
CREATE TABLE `rmp_activity_executor`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rmp_activity_id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for rmp_analisis
-- ----------------------------
DROP TABLE IF EXISTS `rmp_analisis`;
CREATE TABLE `rmp_analisis`  (
  `anal_id` int(11) NOT NULL AUTO_INCREMENT,
  `rmp_id` int(11) NOT NULL,
  `anal_isu` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `anal_risiko` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `anal_tindakan` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `anal_rencana` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`anal_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of rmp_analisis
-- ----------------------------
INSERT INTO `rmp_analisis` VALUES (1, 4, 'Diperlukan material/borrow area tertentu sebagai bahan campuran', 'Jika menggunakan jenis material yang lebih jelek dari karakteristik lumpur tidak akan mendapatkan nilai shear strenght yang di inginkan', 'Material borrow area harus sesuai dengan hasil percobaan di laboratorium untuk mendapatkan nilai shear strenght yang optimum', 'Lihat Lampiran 2 butir pelaksanaan 2a) kolom acuan pemeriksaan');
INSERT INTO `rmp_analisis` VALUES (2, 4, 'Metode pencampuran diperlukan alat berat untuk mencapai campuran yang optimum', 'Ketidaktersediaan alat berat yang sesuai, pencampuran lumpur dengan tanah borrow area tidak tercapai dengan baik', 'Pencampuran dilapangan harus  menggunakan alat pemadat dan alat berat yang dipersyaratkan untuk mendapatkan campuran yang sesuai', 'Lihat Lampiran 2 butir pelaksanaan 2a) kolom acuan pemeriksaan');
INSERT INTO `rmp_analisis` VALUES (3, 4, 'Lumpur sebagai bahan material timbunan mudah didapat dan volume banyak', 'Material lumpur yang melimpah dapat digunakan dengan jumlah volume yang cukup besar', 'Material tanah timbunan dominan menggunakan material lumpur sidoarjo', 'Lihat Lampiran 2 butir pelaksanaan 2a) kolom acuan pemeriksaan');
INSERT INTO `rmp_analisis` VALUES (4, 4, 'Pedoman ini dibutuhkan pengelola lumpur sidoarjo (PPLS) atau pengguna lainnya', 'isu tidak sesuai', 'isu tidak sesuai', 'isu tidak sesuai');
INSERT INTO `rmp_analisis` VALUES (5, 4, 'Tanah dasar yang lunak mempengaruhi stabilitas dan deformasi tanggul', 'Lokasi dengan karakteristik tanah lunak perlu dilakukan perbaikan (soil improvement) yang mampu menahan daya dukung sesuai hasil pemodelan.', 'Melakukan analisis numerik perbaikan tanah/fondasi tanggul yang aman terhadap penurunan tanggul.', 'Lihat Lampiran 2 butir pelaksanaan 2a) kolom acuan pemeriksaan');
INSERT INTO `rmp_analisis` VALUES (6, 4, 'Dapat mengurangi beban volume lumpur', 'harusnya isunya : Perbandingan campuran lumpur terhadap tanah borrow area tidak lebih dari 70%', 'harusnya isu : Perbandingan campuran lumpur terhadap tanah borrow area tidak lebih dari 70%', 'harusnya isunya : Perbandingan campuran lumpur terhadap tanah borrow area tidak lebih dari 70%');

-- ----------------------------
-- Table structure for rmp_bibliography
-- ----------------------------
DROP TABLE IF EXISTS `rmp_bibliography`;
CREATE TABLE `rmp_bibliography`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rmp_id` int(11) NOT NULL,
  `bib_author` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `bib_year` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `bib_title` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `bib_publisher` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `bib_city` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of rmp_bibliography
-- ----------------------------
INSERT INTO `rmp_bibliography` VALUES (1, 4, 'epartemen Permukiman dan Prasarana Wilayah. (2004). Pedoman Instrumentasi Tubuh Bendungan Tipe Urugan dan Tanggul. Jakarta, DKI Jakarta, Indonesia: Departemen Permukiman dan Prasarana Wilayah.', '2004', ' Pedoman Instrumentasi Tubuh Bendungan Tipe Urugan dan Tanggul. Jakarta, DKI Jakarta, Indonesia: Departemen Permukiman dan Prasarana Wilayah.', ' Pedoman Instrumentasi Tubuh Bendungan Tipe Urugan dan Tanggul. Jakarta, DKI Jakarta, Indonesia: Departemen Permukiman dan Prasarana Wilayah.', 'Jakarta, DKI Jakarta, Indonesia');

-- ----------------------------
-- Table structure for rmp_document
-- ----------------------------
DROP TABLE IF EXISTS `rmp_document`;
CREATE TABLE `rmp_document`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rmp_id` int(11) NOT NULL,
  `document_name` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `document_num` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for rmp_evaluator
-- ----------------------------
DROP TABLE IF EXISTS `rmp_evaluator`;
CREATE TABLE `rmp_evaluator`  (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `username` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `password` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for rmp_position
-- ----------------------------
DROP TABLE IF EXISTS `rmp_position`;
CREATE TABLE `rmp_position`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `kompetensi` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `tugas` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `tanggungjawab` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `wewenang` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of rmp_position
-- ----------------------------
INSERT INTO `rmp_position` VALUES (1, 'Pengendali Mutu', 'Kepala Balai Litbang', 'Mengendalikan Pelaksanaan Kegiatan sesuai Penetapan Kinerja (PK) dan RKA-K/L dan DIPA Satuan Kerja Balai Litbang Tahun Anggaran 2019', 'Bertanggung jawab kepada Kepala Puslitbang Sumber Daya Air terhadap tercapainya output kegiatan sesuai PK', 'Mengusulkan personil pelaksana kegiatan dan menetapkan arah kebijakan pelaksanaan dan penggunaan anggaran kegiatna');
INSERT INTO `rmp_position` VALUES (2, 'Pengelola Mutu', 'Kepala Subbag Tata Usaha', 'Menbantu Pengendali Mutu mengekoordinasikan dan mengevaluasi kegiatan', 'Bertanggung jawab kepada pengendali Mutu terhadap kelancaran kegiatan', 'Melakukan supervisi teknis dan administrasi pelaksanaan serta penggunaan anggaran kegiatan');

-- ----------------------------
-- Table structure for rmp_rab_activity
-- ----------------------------
DROP TABLE IF EXISTS `rmp_rab_activity`;
CREATE TABLE `rmp_rab_activity`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rmp_sdk_id` int(11) NOT NULL,
  `fisik` int(11) NOT NULL,
  `keuangan` int(11) NOT NULL,
  `json` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for rmp_record_list
-- ----------------------------
DROP TABLE IF EXISTS `rmp_record_list`;
CREATE TABLE `rmp_record_list`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rmp_id` int(11) NOT NULL,
  `record_name` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `location` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `period` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for rmp_revisi
-- ----------------------------
DROP TABLE IF EXISTS `rmp_revisi`;
CREATE TABLE `rmp_revisi`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rmpId` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for rmp_revisi_detail
-- ----------------------------
DROP TABLE IF EXISTS `rmp_revisi_detail`;
CREATE TABLE `rmp_revisi_detail`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rmpId` int(11) NOT NULL,
  `bab` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `komentar` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `sifat` tinyint(4) NULL DEFAULT NULL,
  `keterangan` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `kesesuaian` tinyint(4) NULL DEFAULT NULL,
  `catatan` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for rmp_roles
-- ----------------------------
DROP TABLE IF EXISTS `rmp_roles`;
CREATE TABLE `rmp_roles`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rmp_id` int(11) NOT NULL,
  `jabatan` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `tugas` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `tanggungjawab` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `wewenang` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for rmp_sdk
-- ----------------------------
DROP TABLE IF EXISTS `rmp_sdk`;
CREATE TABLE `rmp_sdk`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rmp_id` int(11) NOT NULL,
  `no` int(11) NOT NULL,
  `akun` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `jenis` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `biaya` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for rmp_sdk_list
-- ----------------------------
DROP TABLE IF EXISTS `rmp_sdk_list`;
CREATE TABLE `rmp_sdk_list`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rmp_sdk_title_id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `details` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `jml` int(11) NOT NULL,
  `satuan` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for rmp_sdk_plan_act
-- ----------------------------
DROP TABLE IF EXISTS `rmp_sdk_plan_act`;
CREATE TABLE `rmp_sdk_plan_act`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `act_id` int(11) NOT NULL,
  `month` int(11) NOT NULL,
  `week` int(11) NOT NULL,
  `sdk_id` int(11) NOT NULL,
  `id_kegiatan` int(11) NOT NULL,
  `biaya` double(11, 0) NOT NULL,
  `biayaP` double NOT NULL DEFAULT 0,
  `fisik` double NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 35 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of rmp_sdk_plan_act
-- ----------------------------
INSERT INTO `rmp_sdk_plan_act` VALUES (27, 11, 4, 0, 0, 1, 15000, 5.2165566552829805, 5.2165566552829805);
INSERT INTO `rmp_sdk_plan_act` VALUES (28, 12, 5, 0, 0, 1, 5000, 1.7388522184276605, 1.7388522184276605);
INSERT INTO `rmp_sdk_plan_act` VALUES (29, 13, 6, 0, 0, 1, 12000, 4.173245324226384, 4.173245324226384);
INSERT INTO `rmp_sdk_plan_act` VALUES (30, 13, 7, 0, 0, 1, 30000, 10.433113310565961, 10.433113310565961);
INSERT INTO `rmp_sdk_plan_act` VALUES (31, 14, 7, 0, 0, 1, 20000, 6.955408873710642, 6.955408873710642);
INSERT INTO `rmp_sdk_plan_act` VALUES (32, 17, 11, 0, 0, 1, 10000, 3.477704436855321, 3.477704436855321);
INSERT INTO `rmp_sdk_plan_act` VALUES (33, 19, 12, 0, 0, 1, 9546, 3.3198166554220894, 3.3229959728183);
INSERT INTO `rmp_sdk_plan_act` VALUES (34, 17, 12, 0, 0, 1, 5000, 1.7388522184276605, 1.7388522184276605);

-- ----------------------------
-- Table structure for rmp_sdk_plan_stage
-- ----------------------------
DROP TABLE IF EXISTS `rmp_sdk_plan_stage`;
CREATE TABLE `rmp_sdk_plan_stage`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `stage_id` int(11) NOT NULL,
  `sdk_id` int(11) NOT NULL,
  `id_kegiatan` int(11) NOT NULL,
  `month` int(11) NOT NULL,
  `week` int(11) NOT NULL,
  `biaya` double(11, 0) NOT NULL,
  `biayaP` double NOT NULL DEFAULT 0,
  `fisik` double NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 69 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of rmp_sdk_plan_stage
-- ----------------------------
INSERT INTO `rmp_sdk_plan_stage` VALUES (52, 9, 0, 1, 1, 0, 10000, 3.477704436855321, 3.5);
INSERT INTO `rmp_sdk_plan_stage` VALUES (53, 9, 0, 1, 2, 0, 10000, 3.477704436855321, 3.3);
INSERT INTO `rmp_sdk_plan_stage` VALUES (54, 10, 0, 1, 2, 0, 10000, 3.477704436855321, 3.477704436855321);
INSERT INTO `rmp_sdk_plan_stage` VALUES (55, 11, 0, 1, 3, 0, 21000, 7.303179317396173, 7.303179317396173);
INSERT INTO `rmp_sdk_plan_stage` VALUES (56, 9, 0, 1, 3, 0, 1000, 0.34777044368553206, 0.5);
INSERT INTO `rmp_sdk_plan_stage` VALUES (57, 12, 0, 1, 8, 0, 35000, 12.171965528993622, 12.171965528993622);
INSERT INTO `rmp_sdk_plan_stage` VALUES (58, 13, 0, 1, 9, 0, 18000, 6.259867986339578, 6.259867986339578);
INSERT INTO `rmp_sdk_plan_stage` VALUES (59, 14, 0, 1, 10, 0, 20000, 6.955408873710642, 6.955408873710642);
INSERT INTO `rmp_sdk_plan_stage` VALUES (60, 15, 0, 1, 11, 0, 15000, 5.2165566552829805, 5.2165566552829805);
INSERT INTO `rmp_sdk_plan_stage` VALUES (61, 16, 0, 1, 11, 0, 5000, 1.7388522184276605, 1.7388522184276605);
INSERT INTO `rmp_sdk_plan_stage` VALUES (62, 17, 0, 1, 10, 0, 10000, 3.477704436855321, 3.477704436855321);
INSERT INTO `rmp_sdk_plan_stage` VALUES (63, 17, 0, 1, 11, 0, 5000, 1.7388522184276605, 1.7388522184276605);
INSERT INTO `rmp_sdk_plan_stage` VALUES (64, 18, 0, 1, 9, 0, 2000, 0.6955408873710641, 0.6955408873710641);
INSERT INTO `rmp_sdk_plan_stage` VALUES (65, 18, 0, 1, 10, 0, 2000, 0.6955408873710641, 0.6955408873710641);
INSERT INTO `rmp_sdk_plan_stage` VALUES (66, 18, 0, 1, 11, 0, 2000, 0.6955408873710641, 0.6955408873710641);
INSERT INTO `rmp_sdk_plan_stage` VALUES (67, 18, 0, 1, 12, 0, 5000, 1.7388522184276605, 1.7388522184276605);
INSERT INTO `rmp_sdk_plan_stage` VALUES (68, 19, 0, 1, 12, 0, 10000, 3.477704436855321, 3.477704436855321);

-- ----------------------------
-- Table structure for rmp_sdk_title
-- ----------------------------
DROP TABLE IF EXISTS `rmp_sdk_title`;
CREATE TABLE `rmp_sdk_title`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rmp_sdk_id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `details` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `jml` int(11) NOT NULL,
  `satuan` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for rmp_sdm
-- ----------------------------
DROP TABLE IF EXISTS `rmp_sdm`;
CREATE TABLE `rmp_sdm`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rmp_id` int(11) NOT NULL,
  `rmp_position` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of rmp_sdm
-- ----------------------------
INSERT INTO `rmp_sdm` VALUES (2, 4, 2);
INSERT INTO `rmp_sdm` VALUES (3, 4, 1);
INSERT INTO `rmp_sdm` VALUES (4, 1, 1);

-- ----------------------------
-- Table structure for rmp_stages
-- ----------------------------
DROP TABLE IF EXISTS `rmp_stages`;
CREATE TABLE `rmp_stages`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `act_id` int(11) NOT NULL,
  `kegiatan` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `deskripsi` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `hasil` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `metode` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `kriteria` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `sarpras` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `anggaran` int(11) NOT NULL DEFAULT 0,
  `pj` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `waktu` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `bobot` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 20 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of rmp_stages
-- ----------------------------
INSERT INTO `rmp_stages` VALUES (1, 4, 'Pengamatan stabilitas lereng dan deformasi tanggul', NULL, NULL, '', '', NULL, 90325000, NULL, NULL, NULL);
INSERT INTO `rmp_stages` VALUES (2, 4, 'Analisa kinerja tanggul', NULL, NULL, '', '', NULL, 20622000, NULL, NULL, NULL);
INSERT INTO `rmp_stages` VALUES (3, 4, 'Penyusunan konsep pedoman (R-0)', NULL, NULL, '', '', NULL, 40851000, NULL, NULL, NULL);
INSERT INTO `rmp_stages` VALUES (4, 4, 'Pembahasan / Forum Grup Discussion (FGD) Konsep (R-0)', NULL, NULL, '', '', NULL, 40469500, NULL, NULL, NULL);
INSERT INTO `rmp_stages` VALUES (5, 4, 'Finalisasi konsep pedoman (R-0)', NULL, NULL, '', '', NULL, 28535500, NULL, NULL, NULL);
INSERT INTO `rmp_stages` VALUES (6, 5, 'Penyusunan Buku', NULL, NULL, '', '', NULL, 14400000, NULL, NULL, NULL);
INSERT INTO `rmp_stages` VALUES (7, 5, 'FGD', NULL, NULL, '', '', NULL, 36000000, NULL, NULL, NULL);
INSERT INTO `rmp_stages` VALUES (8, 5, 'Revisi dan Finalisasi Buku', NULL, NULL, '', '', NULL, 0, NULL, NULL, NULL);
INSERT INTO `rmp_stages` VALUES (9, 10, 'aa', NULL, 'ha', 'ha', 'ha', 'la', 21000, 'Dr. Eko Winar Irianto M.T.', '1-1', NULL);
INSERT INTO `rmp_stages` VALUES (10, 10, 'ab', NULL, NULL, '', '', NULL, 10000, NULL, NULL, NULL);
INSERT INTO `rmp_stages` VALUES (11, 10, 'ac', NULL, NULL, '', '', NULL, 21000, NULL, NULL, NULL);
INSERT INTO `rmp_stages` VALUES (12, 15, 'cca', NULL, NULL, '', '', NULL, 35000, NULL, NULL, NULL);
INSERT INTO `rmp_stages` VALUES (13, 15, 'ccb', NULL, NULL, '', '', NULL, 18000, NULL, NULL, NULL);
INSERT INTO `rmp_stages` VALUES (14, 16, 'dda', NULL, NULL, '', '', NULL, 20000, NULL, NULL, NULL);
INSERT INTO `rmp_stages` VALUES (15, 16, 'ddb', NULL, NULL, '', '', NULL, 15000, NULL, NULL, NULL);
INSERT INTO `rmp_stages` VALUES (16, 18, 'bbba', NULL, NULL, '', '', NULL, 5000, NULL, NULL, NULL);
INSERT INTO `rmp_stages` VALUES (17, 18, 'bbbb', NULL, NULL, '', '', NULL, 15000, NULL, NULL, NULL);
INSERT INTO `rmp_stages` VALUES (18, 18, 'bbbc', NULL, NULL, '', '', NULL, 11000, NULL, NULL, NULL);
INSERT INTO `rmp_stages` VALUES (19, 18, 'bbbd', NULL, NULL, '', '', NULL, 10000, NULL, NULL, NULL);

-- ----------------------------
-- Table structure for rmp_stages_executor
-- ----------------------------
DROP TABLE IF EXISTS `rmp_stages_executor`;
CREATE TABLE `rmp_stages_executor`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rmp_stages_id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of rmp_stages_executor
-- ----------------------------
INSERT INTO `rmp_stages_executor` VALUES (1, 9, 'la');

-- ----------------------------
-- Table structure for rmp_swot
-- ----------------------------
DROP TABLE IF EXISTS `rmp_swot`;
CREATE TABLE `rmp_swot`  (
  `swot_id` int(11) NOT NULL AUTO_INCREMENT,
  `rmp_id` int(11) NOT NULL,
  `swot_factor` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `swot_u` int(11) NOT NULL,
  `swot_s` int(11) NOT NULL,
  `swot_g` int(11) NOT NULL,
  `swot_parent` int(11) NOT NULL,
  PRIMARY KEY (`swot_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 24 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of rmp_swot
-- ----------------------------
INSERT INTO `rmp_swot` VALUES (1, 4, 'Lumpur Sidoarjo dapat termanfaatkan dan dapat diaplikasikan di lokasi lain', 4, 5, 3, 1);
INSERT INTO `rmp_swot` VALUES (2, 4, 'Dapat mengurangi beban volume lumpur', 5, 5, 5, 1);
INSERT INTO `rmp_swot` VALUES (3, 4, 'Hasil penelitian pencampuran lumpur dengan tanah borrow area dapat meningkatkan shear strenght', 5, 5, 4, 1);
INSERT INTO `rmp_swot` VALUES (4, 4, 'Pedoman ini dibutuhkan pengelola lumpur sidoarjo (PPLS) atau pengguna lainnya', 5, 5, 5, 1);
INSERT INTO `rmp_swot` VALUES (6, 4, 'Biaya konstruksi tanggul dengan campuran lumpur lebih murah', 5, 5, 3, 1);
INSERT INTO `rmp_swot` VALUES (7, 4, 'Hasil pemodelan numerik timbunan tanggul (campuran lumpur dan tanah borrow area) menunjukkan stabilitas yang  memenuhi persyaratan keamanan (safety factor)', 4, 5, 3, 1);
INSERT INTO `rmp_swot` VALUES (8, 4, 'Rentan jika terjadi rembesan, karena campuran di dominasi lumpur', 3, 5, 5, 2);
INSERT INTO `rmp_swot` VALUES (9, 4, 'Metode pencampuran diperlukan alat berat untuk mencapai campuran yang optimum', 5, 4, 5, 2);
INSERT INTO `rmp_swot` VALUES (10, 4, 'Diperlukan material/borrow area tertentu sebagai bahan campuran', 5, 4, 5, 2);
INSERT INTO `rmp_swot` VALUES (11, 4, 'Rentan longsor (failure) jika kondisi tanah timbunan campuran lumpur kondisinya jenuh', 3, 5, 5, 2);
INSERT INTO `rmp_swot` VALUES (12, 4, 'Kembang susut campuran lumpur dan tanah borrow area cukup tinggi, bisa membuat retakan timbunan yang cukup besar dan mudah terisi air', 3, 5, 5, 2);
INSERT INTO `rmp_swot` VALUES (13, 4, 'Lumpur sebagai bahan material timbunan mudah didapat dan volume banyak', 5, 5, 5, 3);
INSERT INTO `rmp_swot` VALUES (14, 4, 'Belum pernah digunakan sebagai timbunan tanggul', 5, 5, 4, 3);
INSERT INTO `rmp_swot` VALUES (15, 4, 'Potensi lumpur sidoarjo sebagai bahan timbunan belum terpublikasi', 4, 4, 4, 3);
INSERT INTO `rmp_swot` VALUES (16, 4, 'Pengelola lumpur sidoarjo (PPLS) sangat mendukung rencana penggunaan material lumpur sidoarjo untuk timbunan tanggul', 5, 5, 5, 3);
INSERT INTO `rmp_swot` VALUES (17, 4, 'Potensi untuk dimanfaatkan lebih besar', 5, 5, 5, 3);
INSERT INTO `rmp_swot` VALUES (18, 4, 'Tanah dasar yang lunak mempengaruhi stabilitas dan deformasi tanggul', 5, 5, 5, 4);
INSERT INTO `rmp_swot` VALUES (19, 4, 'Hujan yang terus menerus dan intensitas lebat dapat mempengaruhi kestabilan tanggul', 5, 5, 5, 4);
INSERT INTO `rmp_swot` VALUES (20, 4, 'Ketidaksediaan alat pemadat dan alat berat lainnya yang memadai', 5, 4, 4, 4);
INSERT INTO `rmp_swot` VALUES (21, 4, 'Keterbatasan material borrow area yang memadai', 5, 5, 5, 4);
INSERT INTO `rmp_swot` VALUES (22, 4, 'Perbandingan campuran lumpur terhadap tanah borrow area tidak lebih dari 70%', 5, 5, 5, 4);
INSERT INTO `rmp_swot` VALUES (23, 1, 'Terdapat beberapa orang peneliti dan perkeayasa sebagai sumber referensi judul buku sekaligus pengguna buku', 3, 3, 3, 1);

-- ----------------------------
-- Table structure for roles
-- ----------------------------
DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `position` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `employee_id` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 38 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of roles
-- ----------------------------
INSERT INTO `roles` VALUES (1, 'Kepala Pusat Litbang Sumber Daya Air', 1);
INSERT INTO `roles` VALUES (2, 'Kepala Bagian Keuangan dan Umum', 2);
INSERT INTO `roles` VALUES (3, 'Kepala Bidang Standarisasi dan Kerjasama', 3);
INSERT INTO `roles` VALUES (4, 'Kepala Bidang Sumberdaya Kelitbangan', 4);
INSERT INTO `roles` VALUES (5, 'Kepala Bidang Program dan Evaluasi', 5);
INSERT INTO `roles` VALUES (6, 'Kepala Balai Litbang Bangunan Hidraulik dan Geoteknik Keairan', 6);
INSERT INTO `roles` VALUES (7, 'Kepala Balai Litbang Hidrologi dan Tata Air', 7);
INSERT INTO `roles` VALUES (8, 'Kepala Balai Litbang Lingkungan Keairan', 8);
INSERT INTO `roles` VALUES (9, 'Kepala Balai Litbang Sungai', 9);
INSERT INTO `roles` VALUES (10, 'Kepala Balai Litbang Sabo', 10);
INSERT INTO `roles` VALUES (11, 'Kepala Balai Litbang Rawa', 11);
INSERT INTO `roles` VALUES (12, 'Kepala Balai Litbang Pantai', 12);
INSERT INTO `roles` VALUES (13, 'Kepala Balai Litbang Irigasi', 13);
INSERT INTO `roles` VALUES (14, 'Eselon 4 BHGK 1', 15);
INSERT INTO `roles` VALUES (15, 'Eselon 4 BHGK 2', 14);
INSERT INTO `roles` VALUES (16, 'Eselon 4 BHGK 3', 14);
INSERT INTO `roles` VALUES (17, 'Eselon 4 HTA 1', 14);
INSERT INTO `roles` VALUES (18, 'Eselon 4 HTA 2', 14);
INSERT INTO `roles` VALUES (19, 'Eselon 4 HTA 3', 14);
INSERT INTO `roles` VALUES (20, 'Eselon 4 LK 1', 14);
INSERT INTO `roles` VALUES (21, 'Eselon 4 LK 2', 14);
INSERT INTO `roles` VALUES (22, 'Eselon 4 LK 3', 14);
INSERT INTO `roles` VALUES (23, 'Eselon 4 Sungai 1', 14);
INSERT INTO `roles` VALUES (24, 'Eselon 4 Sungai 2', 14);
INSERT INTO `roles` VALUES (25, 'Eselon 4 Sungai 3', 14);
INSERT INTO `roles` VALUES (26, 'Eselon 4 Sabo 1', 14);
INSERT INTO `roles` VALUES (27, 'Eselon 4 Sabo 2', 14);
INSERT INTO `roles` VALUES (28, 'Eselon 4 Sabo 3', 14);
INSERT INTO `roles` VALUES (29, 'Eselon 4 Rawa 1', 14);
INSERT INTO `roles` VALUES (30, 'Eselon 4 Rawa 2', 14);
INSERT INTO `roles` VALUES (31, 'Eselon 4 Rawa 3', 14);
INSERT INTO `roles` VALUES (32, 'Eselon 4 Pantai 1', 14);
INSERT INTO `roles` VALUES (33, 'Eselon 4 Pantai 2', 14);
INSERT INTO `roles` VALUES (34, 'Eselon 4 Pantai 3', 14);
INSERT INTO `roles` VALUES (35, 'Eselon 4 Irigasi 1', 14);
INSERT INTO `roles` VALUES (36, 'Eselon 4 Irigasi 2', 14);
INSERT INTO `roles` VALUES (37, 'Eselon 4 Irigasi 3', 15);

-- ----------------------------
-- Table structure for satker
-- ----------------------------
DROP TABLE IF EXISTS `satker`;
CREATE TABLE `satker`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL COMMENT 'Nama Satker',
  `roles_id` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 13 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of satker
-- ----------------------------
INSERT INTO `satker` VALUES (1, 'Balai Bangunan Hidraulik & Geoteknik Keairan', 6);
INSERT INTO `satker` VALUES (2, 'Balai Lingkungan Keairan', 8);
INSERT INTO `satker` VALUES (3, 'Balai Hidrologi dan Tata Air', 7);
INSERT INTO `satker` VALUES (4, 'Balai Sungai', 9);
INSERT INTO `satker` VALUES (5, 'Balai Pantai', 12);
INSERT INTO `satker` VALUES (6, 'Balai Sabo', 10);
INSERT INTO `satker` VALUES (7, 'Balai Rawa', 11);
INSERT INTO `satker` VALUES (8, 'Balai Irigasi', 13);
INSERT INTO `satker` VALUES (9, 'Bagian Keuangan Umum', 2);
INSERT INTO `satker` VALUES (10, 'Bidang Program dan Evaluasi', 5);
INSERT INTO `satker` VALUES (11, 'Bidang Standarisasi dan Kerjasama', 3);
INSERT INTO `satker` VALUES (12, 'Bidang Sumber Daya Kelitbangan', 4);

-- ----------------------------
-- Table structure for structure_organization
-- ----------------------------
DROP TABLE IF EXISTS `structure_organization`;
CREATE TABLE `structure_organization`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nip` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `name` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `position` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `id_satker` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 14 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of structure_organization
-- ----------------------------
INSERT INTO `structure_organization` VALUES (1, '', 'Dr. Eko Winar Irianto M.T.', 'Kepala Pusat Litbang Sumber Daya Air', 99);
INSERT INTO `structure_organization` VALUES (2, '', 'Drs. Ratna Adiana', 'Kepala Bagian Keuangan dan Umum', 0);
INSERT INTO `structure_organization` VALUES (3, '', 'Ir. Dery Iryawan M.T', 'Kepala Bidang Standarisasi dan Kerjasama', 99);
INSERT INTO `structure_organization` VALUES (4, '', 'Drs. Endar P. Satriyanto, M.M.', 'Kepala Bidang Sumberdaya Kelitbangan', 99);
INSERT INTO `structure_organization` VALUES (5, '', 'Ir. Tati Kurniati, M.T.', 'Kepala Bidang Program dan Evaluasi\r\n', 99);
INSERT INTO `structure_organization` VALUES (6, '', 'Slamet Lestari, S.T., M.T.', 'Kepala Balai Litbang Bangunan Hidraulik dan Geoteknik Keairan', 1);
INSERT INTO `structure_organization` VALUES (7, '', 'Drs. Irfan Sudono, M.T.', 'Kepala Balai Litbang Hidrologi dan Tata Air', 3);
INSERT INTO `structure_organization` VALUES (8, '', 'Ir. Nur Fizli Kifli, M.T.', 'Kepala Balai Litbang Lingkungan Keairan', 2);
INSERT INTO `structure_organization` VALUES (9, '', 'Rahmat Suria Lubis, S.T., M.T.', 'Kepala Balai Litbang Sungai', 4);
INSERT INTO `structure_organization` VALUES (10, '', 'Ir. Dwi Kristiananto, M.Eng', 'Kepala Balai Litbang Sabo', 6);
INSERT INTO `structure_organization` VALUES (11, '', 'Parlimbongan Simangkali, S.T. MPSDA', 'Kepala Balai Litbang Rawa', 7);
INSERT INTO `structure_organization` VALUES (12, '', 'Dr. Leo Eliasta, S.T. M.Sc.', 'Kepala Balai Litbang Pantai', 5);
INSERT INTO `structure_organization` VALUES (13, '', 'Drs. Irfan Sudono, M.T.', 'Kepala Balai Litbang Irigasi', 8);

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL COMMENT 'Nama Lengkap dan Gelar',
  `username` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `password` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `satker_id` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `roles_id` int(11) NULL DEFAULT NULL COMMENT 'ID ATASAN',
  `roles` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `hp` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL COMMENT 'Tanggal Lahir',
  `email` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `last_login` timestamp(0) NOT NULL DEFAULT CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 36 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES (1, 'Faisal Syaiful Anwar, S.Kom', 'faisalsyfl', '7815696ecbf1c96e6894b779456d330e', '4', 15, 'Ketua', '0857934343577', 'faisalsyfl@gmail.com', '2018-04-14 10:28:49');
INSERT INTO `user` VALUES (2, 'Admin Pusair', 'admin', '42f8fa6a60345251252ea93cb1d71f05', '3', 0, 'Admin', '', '', '2018-05-08 11:07:47');
INSERT INTO `user` VALUES (3, 'Superadmin', 'suadmin', '42f8fa6a60345251252ea93cb1d71f05', '4', 0, 'Superadmin', '', '', '2018-05-08 11:09:02');
INSERT INTO `user` VALUES (30, 'Janur S.Kom', 'janur', '7815696ecbf1c96e6894b779456d330e', '1', 35, 'Ketua', '085793434357', 'nikoahmadg@gmail.com', '2018-07-30 23:15:49');
INSERT INTO `user` VALUES (31, 'Ahmad Z A', 'ahmad', '7815696ecbf1c96e6894b779456d330e', '5', 15, 'Ketua', NULL, 'ahmad.zainal565@gmail.com', '2018-09-29 14:44:46');
INSERT INTO `user` VALUES (32, 'Risna Desmayanti, S.Kom.', 'risna', '7815696ecbf1c96e6894b779456d330e', '12', 4, 'Ketua', '085793434357', 'risna@gmail.com', '2019-02-03 22:35:29');
INSERT INTO `user` VALUES (33, 'Litbang', 'litbang', '4bd1c147b3bfc11b3a4966dc5b392e87', '1', 3, 'Ketua', '2222222', 'rina.meyilani@gmail.com', '2019-02-06 08:18:45');
INSERT INTO `user` VALUES (34, 'litbang', 'litbang', '6cd79362def2bb2ecf812e2859f4a5d8', '1', 14, 'Ketua', '2222222', 'rina.meyilani@gmail.com', '2019-02-07 09:06:15');

SET FOREIGN_KEY_CHECKS = 1;
