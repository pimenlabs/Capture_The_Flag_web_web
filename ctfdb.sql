-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2016 at 11:09 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ctfdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE IF NOT EXISTS `about` (
  `no` int(5) NOT NULL,
  `about` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `adm`
--

CREATE TABLE IF NOT EXISTS `adm` (
  `user` varchar(25) NOT NULL,
  `pass` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adm`
--

INSERT INTO `adm` (`user`, `pass`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `copyright`
--

CREATE TABLE IF NOT EXISTS `copyright` (
  `id` int(5) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `copyright`
--

INSERT INTO `copyright` (`id`, `text`) VALUES
(1, '<b id="kd">KeDai</b> <b id="cp">Computerworks</b>');

-- --------------------------------------------------------

--
-- Table structure for table `inbox`
--

CREATE TABLE IF NOT EXISTS `inbox` (
`no` int(5) NOT NULL,
  `user` varchar(25) NOT NULL,
  `pesan` text NOT NULL,
  `judul` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inbox`
--

INSERT INTO `inbox` (`no`, `user`, `pesan`, `judul`) VALUES
(1, 'OPPO', 'Selamat Bermain, Temukan Bonus yang terdapat dalam misi dan rajin-rajin baca info hehehe.... bila ada halangan dan kritik, saran silahkan hub <a href="http://fb.me/p1m3n">admin</a> ', 'info'),
(2, 'n', 'Selamat Bermain, Temukan Bonus yang terdapat dalam misi dan rajin-rajin baca info hehehe.... bila ada halangan dan kritik, saran silahkan hub <a href="http://fb.me/p1m3n">admin</a> ', 'info'),
(3, 'root', 'Selamat Bermain, Temukan Bonus yang terdapat dalam misi dan rajin-rajin baca info hehehe.... bila ada halangan dan kritik, saran silahkan hub <a href="http://fb.me/p1m3n">admin</a> ', 'info'),
(4, 'aduh mama eeee', 'Selamat Bermain, Temukan Bonus yang terdapat dalam misi dan rajin-rajin baca info hehehe.... bila ada halangan dan kritik, saran silahkan hub <a href="http://fb.me/p1m3n">admin</a> ', 'info'),
(8, 'KD-641', 'Selamat Bermain, Temukan Bonus yang terdapat dalam misi dan rajin-rajin baca info hehehe.... bila ada halangan dan kritik, saran silahkan hub <a href=http://fb.me/p1m3n>admin</a> ', 'info'),
(9, 'pimen', 'Selamat Bermain, Temukan Bonus yang terdapat dalam misi dan rajin-rajin baca info hehehe.... bila ada halangan dan kritik, saran silahkan hub <a href=http://fb.me/p1m3n>admin</a> ', 'info'),
(10, '1', 'Selamat Bermain, Temukan Bonus yang terdapat dalam misi dan rajin-rajin baca info hehehe.... bila ada halangan dan kritik, saran silahkan hub <a href=http://fb.me/p1m3n>admin</a> ', 'info'),
(11, 'come to papa', 'Selamat Bermain, Temukan Bonus yang terdapat dalam misi dan rajin-rajin baca info hehehe.... bila ada halangan dan kritik, saran silahkan hub <a href=http://fb.me/p1m3n>admin</a> ', 'info');

-- --------------------------------------------------------

--
-- Table structure for table `judul`
--

CREATE TABLE IF NOT EXISTS `judul` (
  `no` int(5) NOT NULL,
  `nama` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `judul`
--

INSERT INTO `judul` (`no`, `nama`) VALUES
(1, 'Challanges Tipu2');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
  `id` int(5) NOT NULL,
  `kategori` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kmisi`
--

CREATE TABLE IF NOT EXISTS `kmisi` (
  `id` int(5) NOT NULL,
  `level` varchar(25) NOT NULL,
  `ket` text NOT NULL,
  `info` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kmisi`
--

INSERT INTO `kmisi` (`id`, `level`, `ket`, `info`) VALUES
(1, 'Hardware', 'Level Hardware', ''),
(2, 'Linux', 'Level Linux', ''),
(3, 'Network', 'Level Network', ''),
(4, 'Bonus', 'Level Bonus', ''),
(5, 'Programming', 'Level Programming', ''),
(6, 'Web Hacking', 'Level Web Hacking', ''),
(7, 'Pangkat', 'Level Pangkat', ''),
(8, 'Steganografi', 'Level Steganograpy', ''),
(9, 'Crypto', 'Level Cryptograpy', ''),
(10, 'ultah', 'Level ulang tahun KeDai', '');

-- --------------------------------------------------------

--
-- Table structure for table `listip`
--

CREATE TABLE IF NOT EXISTS `listip` (
`id` int(1) NOT NULL,
  `ip` text NOT NULL,
  `ippub` text NOT NULL,
  `hostname` text NOT NULL,
  `browser` text NOT NULL,
  `iso` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `listip`
--

INSERT INTO `listip` (`id`, `ip`, `ippub`, `hostname`, `browser`, `iso`) VALUES
(1, '127.0.0.1', '', 'pimenlabs', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/48.0.2564.116 Safari/537.36', 'Windows NT PIMENLABS 6.1 build 7600 (Windows 7 Ultimate Edition) i586');

-- --------------------------------------------------------

--
-- Table structure for table `misi`
--

CREATE TABLE IF NOT EXISTS `misi` (
  `no` varchar(25) NOT NULL,
  `clue` varchar(50) NOT NULL,
  `soal` text NOT NULL,
  `answer` text NOT NULL,
  `level` varchar(25) NOT NULL,
  `point` int(5) NOT NULL,
  `waktu` varchar(35) NOT NULL,
  `idmisi` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `misi`
--

INSERT INTO `misi` (`no`, `clue`, `soal`, `answer`, `level`, `point`, `waktu`, `idmisi`) VALUES
('1', 'Belum Mandi', 'Pagi ini nenek sedang tertidur lelap di dalam <i>Kamar</i>, tak lama kemudian seorang cucu membangunkan sang nenek, dan nenek pun terbangun. sang cucu meminta kepada sang nenek ingin di<i>Mandi</i>kan oleh sang nenek akan tetapi sang nenek lupa menaruh alat peralatan sang cucu, bantulah sang nenek menemukan peralatan mandi sang cucu =D\r\n\r\nnb: jawab dulu baru saya ajak makan, teliti ya bro low pernah belajar bahasa indonesia pasti tau jawabnnya hehehehe', 'Kamar Mandi', 'Bonus', 50, '26-05-2014 06:59 PM', 1),
('10', 'Rapat Dimana Ya ??', 'Salam Folder, Salam <i>Ke</i>tawa <i>Da</i>ma<i>i</i> diinformasikan kepada seluruh AMD untuk menghadiri rapat anggota untuk membahas evaluasi akhir, Yuk ke <i>sekret</i>', 'KeDai', 'Bonus', 50, '26-05-2014 06:59 PM', 10),
('11', 'WIFI', ' Sebuah <i>teknologi</i> terkenal yang memanfaatkan peralatan elektronik untuk bertukar data secara nirkabel (menggunakan gelombang radio) melalui sebuah <i>jaringan</i> komputer, termasuk koneksi Internet berkecepatan tinggi. Wi-Fi Alliance mendefinisikan Wi-Fi sebagai "produk jaringan wilayah lokal nirkabel <i>(WLAN)</i>"', 'WLAN', 'network', 50, '26-05-2014 06:59 PM', 11),
('12', 'Jaringan', ' sebuah teknik yang mengizinkan para <i>administrator</i> jaringan untuk memanfaatkan 32 bit IP address yang tersedia dengan lebih efisien. <i>Teknik subnetting</i> membuat skala jaringan lebih luas dan tidak dibatas oleh kelas-kelas IP (<i>IP Classes</i>) A, B, dan C yang sudah diatur. Dengan subnetting, anda bisa membuat network dengan batasan host yang lebih realistis sesuai kebutuhan.', 'subnetting', 'network', 50, '26-05-2014 06:59 PM', 12),
('13', 'Jumlah <b>adalah</b>', 'Berapakah jumlah 255.255.255.128/25 <b> host tiap subnet</b> ?\r\n', 'host tiap subnet adalah 126', 'network', 50, '26-05-2014 06:59 PM', 13),
('14', 'BPH', 'Salam Folder salam ketawai damai, tau nggak apa <i>singkatan </i> dari BPH ? jika kamu gabung di KeDai pasti tau dong hehehehe', 'Badan Pengurus Harian', 'BPH', 50, '26-05-2014 06:59 PM', 14),
('15', 'BPH', 'Salam Folder salam ketawa damai, tau nggak ada berapa berapa devisi keilmuan di KeDai Computerworks ?', '3', 'BPH', 50, '26-05-2014 06:59 PM', 15),
('16', 'Spesial', 'Siapakah BPH yang sering Berlogat dan mengatakan "betul " ??\r\n\r\nnb : firman', 'firman', 'Bonus', -50, '26-05-2014 06:59 PM', 16),
('17', 'Bonus Poin', 'me = Kenapa kamu harus gabung di KeDai Computerworks ??\r\nandy = aku ingin cari ilmu dan cari <i>pengalaman</i> agar kelak aku akan jadi orang yang sukses\r\n\r\nme = ciyus loh ?\r\nandy = iya dong\r\nme = adu kk andy <i>stop tipu-tipu</i> ee\r\n\r\nandy = aduh..<i> mama</i> sayang ee ', 'stop tipu-tipu', 'Bonus', 50, '26-05-2014 06:59 PM', 17),
('18', 'Lupa Password !!', 'Pada hari ini sang <i>nenek</i> ingin mengecek jumlah saldo pada rekening via online, akan tetapi sang nenek lupa <i>password</i> pada saat iya ingin melakukan login, bantulah sang nenek untuk mengecek jumlah saldonya\r\n\r\ntempat login \r\nip_address/d4rk/saldo/login.php', 'Total Saldo Cucu Nenek Tersayang adalah Rp. 50.000.000', 'Web Hacking', 100, '26-05-2014 06:59 PM', 18),
('19', 'Slogan', 'Salam Folder salam ketawa damai, tau nggak slogan KeDai Computerworks ? loe tau apa coba', 'Berdiri Sama Tinggi Duduk Sama Rendah Ketawa Sama-Sama', 'BPH', 50, '26-05-2014 06:59 PM', 19),
('2', 'Mencari Alamat', 'Tau nggak alamat rumah <i>nenek</i> ??\r\n\r\n\r\nnb: <i>rumah qita2ji</i> salam <i>Ke</i>tawa <i>Da</i>ma<i>i</i>', 'Minasa Upa', 'Bonus', 50, '26-05-2014 - 07:28 PM', 2),
('20', 'basic', 'Disebut apakah metode penggunaan komputer berbasis teks atau perintah baris, dimana pengguna melakukan input/masukkan perintah berupa teks, agar nantinya menghasilkan output/keluaran berdasarkan perintah yang dimasukkan ??', 'Command Line Interface', 'Linux', 50, '26-05-2014 06:59 PM', 20),
('21', 'Hak Akses', '-rw-rw-rwx', '667', 'Linux', 50, '26-05-2014 06:59 PM', 21),
('22', 'Lupa ', '<img align=''left'' hight=''100'' width=''100'' src="img/nenek.jpg" style:''margin-right=30px; padding:5px;''><p align=''justify'' > Hari ini sang cucu menghubungi sang nenek dikampung, dan ia meminta foto kepada sang nenek untuk di arsipkan kedalam kartu keluarga, sang nenek pun menerima panggilan sang cucu. sang nenek menaruh <b>pesan</b> penting kedalam fotonya untuk disampaikan kepada sang cucu. bantulah sang cucu menemukan pesan yang di sisipkan kedalam foto yang di kirim oleh sang nenek\r\n </p>\r\nnb: cari <b name=''key:K3D41UM1''>key</b> di balik layar dan <i><b>Silenteye</b></i> yo hehehe\r\n', 'gerbang_didepan_mata_cu salam Ketawa Damai', 'Steganografi', 100, '26-05-2014 06:59 PM', 22),
('23', 'Decode', 'Di pagi hari sang nenek mendapat pesan surat dari sang cucu, akan tetapi sang nenek tidak dapat membaca <b><i name=''Z2VyYmFuZ19kaWRlcGFuX21hdGFfSzNENDE=\r\n''>pesan</i></b> tersebut, bantu lah sang nenek untuk membaca pesan tersebut\r\n\r\nnb : <b>Hide <i>massage</i></b>\r\nclue : dibalik layar hehehe....', 'gerbang_didepan_mata_K3D41', 'Crypto', 200, '26-05-2014 06:59 PM', 23),
('24', 'Anggota', 'Salam Folder salam ketawa damai, tau nggak  berapa <b>orang</b> anggota KeDai Computerworks UMI ? <a href="img/struktur.jpg">struktur</a>\r\n', '16 orang', 'BPH', 50, '26-05-2014 06:59 PM', 24),
('25', 'Ketukar', 'Salam Folder salam ketawa damai,sebutkan siapakah nama anggota KeDai Computerworks UMI yang tertukar namanya dalam struktur organisasi ???', 'Khaerun dan Adi', 'BPH', 50, '26-05-2014 06:59 PM', 25),
('26', 'Decrypt', 'Salam Folder tau nggak hasil decrypt dari kata berikut ???\r\n\r\nYWt1X3NheWFuZ19uM24za19zZWxhbHU=\r\n', 'aku_sayang_n3n3k_selalu', 'Crypto', 100, '26-05-2014 06:59 PM', 26),
('27', 'Penasaran', 'Temukan Pesan Di Dalam Gambar Berikut :\r\n\r\n<img src="img/kd.jpg" name="K3D41_UM1_D4M41" alt="Clue:Silenteye">', 'isi_pesan_adalah_k3t4w4_d4m41_itu_asyik_br0 gabung_bersama_kami', 'Steganografi', 100, '26-05-2014 06:59 PM', 27),
('28', 'Pesan Acak', 'Bantulah yang ke-<i><b>dua</b></i> kali sang nenek untu membaca pesan yang ia dapat dari cucunya :\r\n\r\nJK PGM. MCOK UGMGNWCTIC UGJCV-UGJCV UCLC FK MQVC, UGMCTCPI CMW UKDWM FCNCO QTICPKUCUK ACPI CFC FKMCORWU, QTICPKUCUKMW KVW SmXUW0XOV0fDVkDEBZLmcZLrZ3PjdYHhfInwB2frKGT1BJXtZ3PjdYHheoXwBIHqKGvnfIH3AUDbAY1jNZPjdYGiSmXUXGXPWGHWKGTLVWHNSXPVSXK=\r\nCMW UCPICV DCJCIKC OGPLCNCPMCP JKFWR FKUKPK, MCRCP-MCRCP UCAC DGTMWPLWPI MGTWOCJ PGPGM UGMGNWCTIC\r\n', 'BERSELOGAN Berdiri_sama_tinggi Duduk_sama_rendah Ketawa sama-sama BERTEMPAT DIMAKASSAR', 'Crypto', 200, '26-05-2014 06:59 PM', 28),
('29', 'Suara aneh', 'Bantulah yang ke-<i><b>tigabls</b></i> kali sang nenek untuk mendengarkan isi pesan suara yang ia dapat dari cucunya :\r\n\r\nfile : <a href="img/pesan.wav">pesan</a>\r\n\r\nSalam kami <b><i>silenteye</i></b>\r\n', 'BERSELOGAN Berdiri_sama_tinggi Duduk_sama_rendah Ketawa sama-sama BERTEMPAT DIMAKASSAR', 'Crypto', 200, '26-05-2014 06:59 PM', 29),
('3', 'cerutu', 'Malam ini nenek sedang asyik makan malam bersama sang cucu dengan sangat lahap, akan tetapi pada saat sang nenek selesai makan, nenek pun berpikir "<i>Setelah makan enaknya ngapain ya ??" g'' lama kemudian sang cucu mengajak sang nenek untuk ckckckck membeli sebatang <i>cerutu</i> untuk dihisap. bantulah sang nenek apakah iy akan menemani sang cucu untuk membeli <i>objek</i> tersebut ', 'Rokok', 'Bonus', 50, '26-05-2014 06:59 PM', 3),
('30', 'cerita lucu 583', 'Bantulah sang cucu membaca cerita lucu sang nenek <b>clue()</b>:\r\n\r\nIfqfr xjgzfm ujwofqfsfs pjwjyf fun Ofpfwyf – Gfsizsl, xjtwfsl fsfp rzif izizp gjwmfifu-mfifufs ijslfs xjtwfsl sjsjp. Xjqfrf qjgnm ifwn 3 ofr xn fsfp rzif xngzp xjpfqn ijslfs rjslzdfm ujwrjs pfwjysdf. Xjrjsyfwf xn sjsjp xjqfqz rjrfsifsl pj bfofm fsfp rzif nyz. Ifs xjyjqfm xfrufn in xyfxnzs Gfsizsl, fpmnwsdf gjwpfyfqfm xn sjsjp. “Dqa, juhycq aqiyx qjqi kiqxqck kdjka ruhsqaqf-sqaqf tudwqd dudua iufqdzqdw fuhzqbqdqd ydy. Jqfy fuhbk qdqa aujqxky rqxmq (dudua iurudqhdoq jkby).”', 'nenek sebenarnya tuli', 'Crypto', 300, '26-05-2014 06:59 PM', 30),
('31', 'Dengerin Musik (HMD5)', 'Hari ini sang nenek sedang mendengarkan musik kesukaannya, dalam lirik  <b> per-kata</b> musik tersebut sang nenek menjadikan <b>pass</b> pada account ATMnya, bisa kah kamu membantu sang nenek untuk membantu login menggunakan ATMnya ??\r\n\r\n<b><i>tempat login</i></b>  http://ip_address/ctf/d4rk/lupa/lupa.php', 'stop tipu-tipu orang tua hahaha ...', 'Crypto', 350, '26-05-2014 06:59 PM', 31),
('32', 'Alternatif kesekolah', 'Bantulah sang nenek untuk mencari alternatif lain untuk mengantar cucunya ke sekolah ?', 'BUS', 'Hardware', 50, '26-05-2014 06:59 PM', 32),
('33', 'Patching Sql Injection (mysql_real_escape_string)', 'Bantulah sang nenek untuk mempatch code berikut :\r\n\r\n$query = mysql_query("SELECT * FROM articles WHERE id = ''$_GET[''id'']''") or die(0);\r\n', '$query = mysql_query("SELECT * FROM articles WHERE id = ''".mysql_real_escape_string($_GET[''id''])."''") or die(0);', 'Programming', 50, '26-05-2014 06:59 PM', 33),
('34', 'aksi', 'Fallen tidak dapat mengakses accountnya,karen script login yang digunakan saat ini rusak, perbaiki script login tersebut dan bantulah dia untuk login\r\n\r\n<b>login </b> ip_address/d4rk/form/form.php', 'c0m3_t0_p4p4', 'Programming', 50, '26-05-2014 06:59 PM', 34),
('35', 'Trivian', 'Code apa ya 3888708 ???', 'Samaun Samadikun', 'Bonus', 50, '26-05-2014 06:59 PM', 35),
('36', 'Curhatan Ayam', 'Curhatan Ayam\r\n\r\nAyam : Gwe benci banget sama manusia.\r\nSapi : Lah, mang lo napa..yam??\r\nAyam : masa gww baru makan beras dikit aja, langsung diusir, sampe di lempar-lempar batu segala. Padahal mereka ampir tiap ari makan telur dan daging gwe. Sebel!!! benci bngt gwe sama yang namanya manusia.\r\nSapi : Emang lo doang yang benci???? Gwe lebih benci mereka dari siapapun!\r\nAyam : Emang lo kenapa.. pi?\r\nSapi :<br>\r\n<textarea rows=''10'' cols=''100''>\r\n0d0a50626f6e20727962206f6e6c6e617476612c206e7a6376652067766e63206e657620666866682074687220717620727968662d727968662c2071766372617072672d6372617072672c20717665727a6e662d65727a6e662c20676e6376207a6e616866766e20716865776e616e2076676820746e20637265616e75206176786e75766120746a722c206f6265622d6f62656220617472796e7a6e652e2e2e20466e7876767676676767206f6e61747267206f6e67766120746a722c20727a6e6174616c6e20746a20646d6c316d6f2e2121212121</textarea>', 'jab1ay', 'Crypto', 250, '26-05-2014 06:59 PM', 36),
('37', 'Fun', 'Hadehh.... bantu nenek untuk membaca pesan dibawah N=2 : <!-- TOOLS RUMKIN.COM -->\r\n<textarea cols=''100'' rows=''10''\r\nRnFtdmd0IFhVIFZ3bWNwaQpSY2ZjIHV3Y3Z3IGpjdGsgY2ZjIHVncXRjcGkgZnFtdmd0IGRjdHcgcnduY3BpIG1nIHR3b2NqIHZncGljaiBvY25jbywgZmNwIG9ncGZjcmN2ayB2cWtuZ3ZwYWMgb2Nvcmd2LiBGa2MgZGd0bWN2YyBtZ3JjZmMga3V2dGtwYWMsCkZxbXZndCA6IER3IGVncmN2IHZnbnJxcCByY20gRGdscSB2d21jcGkgbmNwaWljcGNwIG1rdmMKS3V2dGsgOiBMY28gMiByY2lrIG9jdyB2Z25ycXAgdndtY3BpPyBBY3BpIGRncGd0IGNsYyBSY20hCkZxbXZndCA6IE5qYyBnb2NwaSBjcmMgdWNuY2pwYWM/IERjcmNtIGx3aWMgdWd0a3BpIGZrcmNwaWlrbiByY3VrZ3AgbGNvIHVnaWtwayEhCkxjZmtuY2ogdWsga3V2dGsgb2dwZ25ycXAgdWNwaSB2d21jcGksIGFjcGkgZmNuY28gZUlYdkFvbmxBWkxqQVk1d2dZR2llb0htQVVEdEJaUG5kRUR0QVpMbmRvR2lkWVhiZkltaUJJSDBBWTVwS0lyamRVRGJCWWZyZkpXPQouIFVrIEtkdyBuY3BpdXdwaSBvZ3BpY3ZjbWNwIGpjbiBhY3BpIHVjb2MsCkt1dnRrIDogTWpjcCBkY3JjbSBsd2ljIHVndGtwaSBma3JjcGlpa24gdmdwaWNqIG9jbmNvIGljbSByY3JjLCBtZ3BjcmMgcmNtIEx3anRxIG9jdGNqPwpSd213biAzOjMwIHVjcGkgdndtY3BpIHZrZGMgZmdwaWNwIG9jdmMgb2d0Y2ouIFVjcGkgZnFtdmd0IG5jcGl1d3BpIG9ncGljcHZjdHBhYyBtZ3Zxa25ndiBhY3BpIG9jb3JndiBrdncuIFVrIHZ3bWNwaSBvZ3BpY29ka24gMiBkd3ZrdCB2Y2RuZ3YgZmN0ayB1Y213cGFjLCBvZ3BsY3Z3am1jcHBhYyBtZyBmY25jbyB2cWtuZ3YgZmNwIGRndG1jdmMsCkx3anRxIDogTWNuY3cgdmtmY20gY2ZjIHJndHdkY2pjcCwgdmduZ3JxcCB1Y2FjIHBjcHZrIHVrY3BpISBjaXBoZXI=\r\n</textarea>', 'pembicaraannya rada kesel karena mesti datang jam segitu', 'Crypto', 150, '26-05-2014 06:59 PM', 37),
('38', 'Jendral', 'Berapa Jumlah Digit dari hasil perpangkatan berikut : 38597<sup>99999</sup>  = ?\r\n\r\n<!-- tools http://ip_adrees/d4rk/pngkt/pangkat.php -->', '2060837', 'Pangkat', 50, '26-05-2014 06:59 PM', 38),
('39', 'Easy', 'Berapa Jumlah Digit dari hasil perpangkatan berikut : 987<sup>55\r\n</sup>  = ?\r\n\r\n<!-- tools http://ip_adrees/d4rk/pngkt/pangkat.php -->', '792', 'Pangkat', 50, '26-05-2014 06:59 PM', 39),
('4', 'Berapa Ya ??', 'Berapakah Hasil dari :\r\n   3*13*1231*9*9*0*3*13*1231*9*9 =\r\n\r\nnb: gunakan <i>huruf</i> yang benar y<i>O</i>', 'nol', 'Bonus', 50, '26-05-2014 06:59 PM', 4),
('40', 'Medium', 'Berapa Jumlah Digit dari hasil perpangkatan berikut : 456<sup>789</sup>  = ?\r\n\r\n<!-- tools http://ip_adrees/d4rk/pngkt/pangkat.php -->', '9306', 'Pangkat', 50, '26-05-2014 06:59 PM', 40),
('41', 'Hasil Decrypt', 'UzRsYW1fazN0NHdhX2Q0bTQx\r\n', 'S4lam_k3t4wa_d4m41', 'Crypto', 50, '26-05-2014 06:59 PM', 41),
('42', 'Pelantikan', 'Tau nggak tanggal berapa pelantikan angkatan XIV anggota tetap di KeDai Computerworks UMI ???', '15 june 2014', 'BPH', 50, '26-05-2014 06:59 PM', 42),
('43', 'Didirikan', 'Tau nggak tanggal berapa dibentuknya  KeDai Computerworks UMI ???', '6 october 2013', 'BPH', 50, '26-05-2014 06:59 PM', 43),
('44', 'kecelakaan mobil', '<img src="img/s.jpg" height="300px" width="190px" style="float:left; padding:5px; text-align:justify;"> <p>Cewek ini namanya nabilah, kemarin dia baru saja mengalami kecelakaan mobil ditengah perjalanannya menuju sekretariat organisasi yang dia ikuti semasa ia masih kuliah, dan akibat kecelakaan itu diapun terkena amnesia. Dia bahkan lupa apa nama organisasi yang dia ikuti itu.\r\n\r\nMenurut keterangan kepolisian mobilnya ditemukan dalam keadaan hancur dan nabilah pun sedang pingsan didalam mobil. Tepatnya, lokasi TKP di depan pintu gerbang Bumi Tamalanrea Permai, Makassar, Sulawesi Selatan\r\n\r\nHari ini dia akhirnya masuk kantor, dia pun masih amnesia dan akhirnya dia pun melupakan password komputernya. Sebagai teman yang baik dan sekaligus orang yang sedang berusaha mencari perhatian nabilah(berhubung dia lupa kalo dia sudah punya pacar, tentu ini kesempatan yg baik untuk anda :P). Anda pun datang dengan begitu heroik nya untuk membantu Nabilah menyelesaikan masalahnya. Dilain itu anda adalah IT Support di perusahaan ini, jadi memang sudah tugas dan tanggung jawab anda\r\n\r\nKeterangan dari nabilah dia hanya sedikit mengingat kalau dia selalu menggunakan password berupa nama orgaisasi yang dia ikuti dengan usia organisasi itu. Itu lah petunjuk bagi anda untuk membuktikan bahwa anda memang seorang Hero yang dibutuhkan Nabilah\r\n<i class=''stego with SilentEye''>tetap semangat </i>\r\n</p>', 'Ketawa Damai ultah ke-13', 'ultah', 100, '26-05-2014 06:59 PM', 44),
('45', 'God Job !!', '<img src="img/jkt48.jpg" height="400px" width="800px"  style="padding:5px; text-align:justify;"> <p>Good job ! Kamu berhasil membuat Nabilah terkesan, dan akhirnya dia pun kembali meminta bantuanmu untuk memecahkan sebuah rahasia lagi. Tentu kamu akan memberi yang terbaik untuk Nabilah\r\n\r\nRahasia ini tentang Profesi Nabilah sebelum mengalami kecelakaan, banyak orang yang mengatakan kalau dia adalah salah satu dari personel Idol Group yang saat ini sedang naik daun di Indonesia. Dan kamu pun teringat akan satu Group, Yah, karena memang hanya ada satu Idol Group di Indonesia saat ini.\r\n\r\nNabilah kemudian memberikan surat kepadamu yang berisi paragraf yang telah di enkripsi, dan dia hanya meminta tolong dengan sangat agar kamu mau membantunya menterjemahkan paragraf itu.\r\n\r\nBerikut isi suratnya : \r\n<b>UV, ANOVYNU. XRGNUHVYNU ONUJN FRORANEALN XNZH NQNYNU FNYNU FNGH QNEV NATTBGN VQBY TEBHC LNAT OREANZN WXG RZCNG QRYCNA. XNZH ZREHCNXNA FNYNU FNGH NATTBGN XNZV LNAT CNYVAT CBCHYRE. WNQV FRTRENYNU XRZONYV NXGVS XR QNYNZ TEBHC. JR ERNYYL ZVFF LBH. QNEV GRZNA XNZH, WRFFVPN INAVN\r\n</b>\r\nKata Nabilah, enkripsi yang digunakan ada hubungannya dengan gambar yang dia perlihatkan ke kamu (disamping). Dan yang dia butuhkan dari surat itu adalah dia ingin mencari siapa sebenarnya yang mengirimkan dia surat itu\r\n</p>', 'JESSICA VANIA', 'ultah', 100, '26-05-2014 06:59 PM', 45),
('46', 'network hacking', '<img src="img/theater.jpg" height="300px" width="400px"  style="padding:5px; float:left; text-align:justify;"> <p>Setelah kamu sebelumnya berhasil membantu Nabilah bertemu dengan temannya yang menuliskan surat kepadanya, Akhirnya Nabilah pun bertemu dengan temannya itu. Tapi ternyata temannya yang satu itu bukan merupakan teman yang dekat dengan Nabilah sebelumnya dan tidak begitu banyak mengetahui Informasi tentang latar belakang Nabilah.\r\n\r\nTeman Nabilah itu hanya memberikan sebuah file yang berisi rekaman data percakapan antara orang yang dipercaya dekat dengan Nabilah dan mengetahui banyak informasi tentang Nabilah. File tersebut merupakan file *.pcapng. Akhirnnya kamu pun mengambil file *.pcap itu dari Nabilah dan memutuskan untuk mencari informasi di dalam file itu.\r\n\r\nNabilah menjelaskan bahwa di dalam file tersebut terdapat Informasi tentang Alamat dari markas rahasia milik Idol Group tempatnya bergabung sebelum kehilangan ingatan. Dan ini saatnya bagi kamu untuk kembali membuktikan pada Nabilah bahwa kamu lah lelaki yang paling dia butuhkan di Muka Bumi ini !! <-- okeh ini lebay !!\r\n\r\nUntuk file *.pcapng nya bisa kamu dapatkan dari halaman ini !  <a href="d4rk/wire/ctf.pcapng">Click here</a>\r\n\r\n</p>', 'indonesianfinder.com', 'ultah', 500, '26-05-2014 06:59 PM', 46),
('47', 'lirik', 'Pada misi ini anda di harapkan melakukan metode brute dengan wordlist lirik lagu dibawah hehehe.... <a href="d4rk/b/post.php">lokasi</a>\r\n\r\n<b>Lirik Lagu</b>\r\n<p>The whispers in the morning Of lovers sleepin tight Are rolling like thunder now As I look your eyes hold on to body And feel each move you make Your voice is warm and tender A love that could\r\nnot forsake First chorusCause am lady are my ma Whenever reach for me "Ill" do all can Lost how "Im" feeling lying arms When world too Much take That ends when with Even though there may be times It seems far away Never wonder where always b side Repeat first Second heading something Somewhere never been Sometimes frightened But ready learn power of sound heart beating Made it clear Suddenly "cant" go Is light years\r\n</p>  ', 'S4l4m_k3t4wa_d4m41_k3d413', 'ultah', 100, '26-05-2014 06:59 PM', 47),
('48', 'bug sql', 'Dibawah merupakan bug sql injection, silahkan melakukan patching =D\r\n\r\n$query = mysql_query("SELECT * FROM articles WHERE id = ''$_GET[''id'']''") or die(0);\r\n', '$query = mysql_query("SELECT * FROM articles WHERE id = ''" . mysql_real_escape_string($_GET[''id'']) . "''") or die(0);', 'ultah', 100, '26-05-2014 06:59 PM', 48),
('49', 'Clasic ', 'Bantulah sang nenek membaca pesan dibawah: \r\n\r\nHIPILKMRDADJGBUAO\r\nADUBAEIIALAAAAGDS\r\nLATANTHTKINGKRAAT\r\nORERGIEAAMTATKKLW\r\nSIRUTGNHMAOBIEAAI\r\nTKWSAADUUTLADSLYT\r\nEEOAHBAKSROIAIIOH\r\nLDRJUEKAEANKKAMUO\r\nLAKANLMNBHGBMPAWU\r\nAISBYAEKUAKAEATIT\r\nKCKEASMEASAINPILI\r\nAOARNKBPHIMKYUTLT\r\nMMMUGAEAKAUAENUL-\r\n', 'YOU WILL LOST WITHOUT IT', 'ultah', 300, '26-05-2014 06:59 PM', 49),
('5', 'Berapa ya Kodenya ??', 'Selamat Bergabung di KeDai Computerworks UMI, tahukah kamu siapakah pemilik <i>KODE REGISTRASI</i> 583 di kepungurusan  KeDai Computerworks UMI ??\r\n\r\nnb : <i>Kode Ragiestrasi</i>', 'firman', 'Bonus', 50, '26-05-2014 06:59 PM', 5),
('6', 'Berapa ya Kodenya ??', 'Selamat Bergabung di KeDai Computerworks UMI, tahukah kamu berapakah <i>KODE REGISTRASI</i> Ketua Umum di kepungurusan  KeDai Computerworks UMI ??\r\n\r\nnb : <i>Kode Ragiestrasi</i>', '561', 'Bonus', 50, '26-05-2014 06:59 PM', 6),
('7', 'Cabang ??', 'Selamat Bergabung di KeDai Computerworks UMI, tahukah kamu cabang apa saja yang dimiliki KeDai Computerworks sekarang ?\r\n', 'stmikdp dan umi', 'BPH', 50, '26-05-2014 06:59 PM', 7),
('8', 'Berapa ya jumlah??', 'Selamat Bergabung di KeDai Computerworks UMI, tahukah kamu berapakah wakil di kepungurusan  KeDai Computerworks UMI ??\r\n\r\nnb : <i>Jabatan</i>', 'dua', 'Bonus', 50, '26-05-2014 06:59 PM', 8),
('9', 'Pusing Yah ???', ' Pada Siang Hari sang nenek sedang duduk di halaman rumahnya, ia sedang berpikir masa depan cucunya, "Jika law cucu saya besar nanti ia akan menjadi apa ya ??"\r\n \r\n Tak lama kemudian sang cucu membawakan secangkir minuman kepada sang nenek, minuman tersebut adalah <i>minuman</i> favorit sang nenek, nenek pun lupa jenis minuman apakah yang ia minum hingga malam hari ini ??\r\n\r\nnb : qita22ji', 'kopi', 'Bonus', 50, '26-05-2014 06:59 PM', 9);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(5) NOT NULL,
  `judul` varchar(45) NOT NULL,
  `ringkasan` text NOT NULL,
  `kategori` varchar(25) NOT NULL,
  `isi` text NOT NULL,
  `waktu` date NOT NULL,
  `postname` varchar(25) NOT NULL,
  `image` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `judul`, `ringkasan`, `kategori`, `isi`, `waktu`, `postname`, `image`) VALUES
(1, 'Fungsi Hash (Teknik Kriptography)', 'Fungsi Hash merupakan sebuah algoritma yang mengubah text atau message menjadi sederetan karakter acak yang memiliki jumlah karakter yang sama. Hash juga termasuk salah satu bentuk teknik kriptografi dan dikategorikan sebagai kriptografi tanpa key (unkeyed cryptosystem). Selain itu hash memiliki nama lain yang juga dikenal luas yaitu one-way function', 'ctf', 'Fungsi Hash merupakan sebuah algoritma yang mengubah text atau message menjadi sederetan karakter acak yang memiliki jumlah karakter yang sama. Hash juga termasuk salah satu bentuk teknik kriptografi dan dikategorikan sebagai kriptografi tanpa key (unkeyed cryptosystem). Selain itu hash memiliki nama lain yang juga dikenal luas yaitu “one-way function”.\r\n\r\nKita sering sekali menjumpai hash di website-website yang menyediakan layanan untuk download file ataupun program secara resmi. Hash memang umumnya digunakan untuk mengecek integritas dari sebuah pesan atau file. File atau pesan yang sudah berubah akan memiliki nilai hash yang berbeda. Sebagai contoh, dengan sebuah algoritma hash, pesan''hello'' akan memberikan nilai hash 12345 sedangkan pesan ''hallo'' memiliki nilai hash83746. Dengan kata lain output hash dari kata ''hello'' tidak akan sama dengan ''hallo''. Bahkan sekalipun dalam kacamata kita kedua pesan tersebut terlihat hanya memiliki perbedaan sedikit saja, namun nilai hash yang dimiliki oleh kedua pesan tersebut sangat jauh berbeda.\r\n\r\nBerbeda dengan teknik enkripsi dalam kriptografi, tujuan hash memang mengubah sebuah pesan yang dapat dibaca (readable text) menjadi pesan acak (unreadable text) sama seperti enkripsi, namun hal mendasar yang menjadi perbedaan dari hash adalah pesan yang telah acak tadi tidak dapat diubah kembali menjadi pesan yang seharusnya. Inilah mengapa hash disebut juga sebagai “one-way function“.', '2014-05-28', 'admin', 'ads.jpg'),
(2, 'Mengenal MD5 ', 'Pengertian MD5 (Message-Digest algortihm 5) adalah fungsi hash kriptografik yang digunakan secara luas dengan hash value 128-bit (sumber: wikipedia). MD5 itu adalah salah satu dari one-way hashing algorithms yg bisa menerima input dg arbitrary length lalu menghasilkan digest/output 128-bit.', 'cripto', ' Penjelasan MD5 secara sederhana : dari input yg panjangnya terserah bisa dicerna menjadi suatu "kode" yang panjangnya selalu sama (128 bit; kalo ditulis dlm hex jadi 32 characters). Yang dimaksud hash atau digest adalah sifatnya yg men-"cerna" menjadi "kode" pendek itu. Inputnya cuma beda satu bit aja maka outputnya berbeda dari yang aslinya ; sifat ini yang cocok untuk penerapan MD5 sebagai checksum (misalnya utk ngecek/verify untuk download corrupt apa nggak, bukan cuma ISO image aja, bisa file/data apa aja). Yang dimaksud one-way adalah proses MD5 itu adalah dari input ke output saja, jadi kalo cuma diketahui outputnya saja tidak bisa diketahui inputnya. Sifat ini menyebabkan MD5 cocok juga utk menyimpan hash dr password utk authentication (yg disimpan cukup hashnya, tidak perlu passwordnya, ini juga salah satu alasan kenapa kalo passwordnya lupa adminnya juga gak bisa recover jadi harus direset/ganti password baru). Jadi dengan fasilitas Anda hanya bisa mengacaknya saja, namun tidak bisa menterjemahkan apa arti dari Hasil MD5 tersebut. Makanya jangan heran, sebuah situs yang menggunakan password MD5 sebagai penyimpan passwordnya tidak mampu menrecover password yang hilang, hanya bisa mengganti / mereset  password yang hilang tersebut dengan password baru. Password MD5 merupakan salah satu perlindungan kepada user dalam menggunakan fasilitas internet di dunia maya, terutama yang berhubungan dengan password, karena sebuah password adalah kunci yang sangat berharga bagi kita yang sering melakukan aktifitas di dunia maya, bisa kita bayangkan apabila seorang cracker mampu menjebol database website misalnya situs pemerintah yang sifatnya sangat rahasia kemudian cracker tersebut mencari bug dari situs targetnya dengan berbagai macam metode/teknik Hacking (seperti : SQL Injection, Keylogger, Social Engineering, Trojan Horse, DDOS d.l.l) supaya cracker bisa menembus ke database dan mendapatkan password korbannya dalam bentuk hash, dan kalau berhasil mencuri passwordnya dalam bentuk hash yang totalnya berjumlah 32bit (contoh hash : fdf0ef0ea5c1620f77107f3f1047fb4c) maka dengan mudah password hash hasil encrypt MD5 tersebut tinggal di decrypt ke dalam bentuk plain text (teks biasa) dengan menggunakan tools/software yang bisa didownload gratis dari google maupun website penyedia layanan decrypt password hash MD5 ke password yang sebenarnya, dengan demikian secara otomatis sang cracker pun dengan leluasa melakukan semua  hal yang dia inginkan seperti mencuri data, merubah data, mengganti tampilan suatu website (Deface) dan bahkan ada yang hanya mendiamkannya saja karena maksud utamanya adalah untuk mengetes security dari situs targetnya saja dan untuk memenuhi rasa penasarannya  sampai dia bisa menembus databasenya dan tidak berniat untuk merusak, setelah bisa ditembus databasenya ditinggalkan begitu saja , biasanya hal tersebut dilakukan oleh seorang hacker golongan putih (WhiteHat).\r\n\r\nSejarah MD5\r\n\r\nSejarah singkat MD5 di mulai pada tahun 1991 yang didesain oleh Prof. Ronald Rivest dari universitas di Amerika Serikat yaitu MIT, Prof. Ronald Rivest mendesain MD5 karena telah ditemukan kelemahan pada MD4 yang ditemukan Hans Dobbertin. Pada Tahun 1996 Hans Dobbertin menemukan sebuah kerusakan/celah pada fungsi kompresi MD5, namun hal ini bukanlah serangan terhadap hash MD5 sepenuhnya, sehingga dia mengumumkan untuk para pengguna kriptografi menganjurkan supaya mengganti dengan WHIRLPOOL, SHA-1, atau RIPEMD-160.\r\nNamun lambat laun MD5 sudah tidak bisa diandalkan lagi karena hash hasil encrypt MD5 mulai menampakkan kerusakannya dan sudah diketahui rahasia algoritma pada MD5, hal tersebut ditemukan kerusakannya pada tanggal 17 Agustus 2004 oleh Xiaoyun Wang, Dengguo Feng, Xuejia Lay dan Hongbo Yu, kalau dilihat dari namanya mereka berasal dari negri tirai bambu China,  sekedar info saja bahwa serangan yang mereka lakukan untuk bisa men-decrypt hash MD5 ke plain text hanya membutuhkan waktu satu jam saja, dengan menggunakan IBM P690 cluster.\r\nKesimpulan : ”Bahwa didunia ini tidak ada Password yang aman untuk digunakan, karena semua itu masih menggunakan logika manusia untuk membuat Algoritmanya”.\r\n\r\nAgoritma dan Cara Kerja.\r\n\r\na. Penjelasan Algoritma MD5\r\nSetiap pesan yang akan dienkripsi, terlebih dahulu dicari berapa banyak bit yang terdapat pada pesan. Kita anggap sebanyak b bit. Di sini b adalah bit non negatif integer, b bisa saja nol dan tidak harus selalu kelipatan delapan.\r\n\r\nb. Cara Kerja MD5\r\n    Langkah-langkah pembuatan message digest secara garis besar:\r\n1. Penambahan bit-bit pengganjal (padding bits).\r\n2. Penambahan nilai panjang pesan semula.\r\n3. Inisialisasi penyangga (buffer) MD.\r\n4. Pengolahan pesan dalam blok berukuran 512 bit.\r\n\r\n1. Penambahan Bit-bit Pengganjal \r\nPesan ditambah dengan sejumlah bit pengganjal sedemikian sehingga panjang pesan (dalam satuan bit) kongruen dengan 448 modulo 512. \r\nJika panjang pesan 448 bit, maka pesan tersebut ditambah dengan 512 bit menjadi 960 bit. Jadi, panjang bit-bit pengganjal adalah antara 1 sampai 512. \r\nBit-bit pengganjal terdiri dari sebuah bit 1 diikuti dengan sisanya bit 0.\r\n2. Penambahan Nilai Panjang Pesan \r\nPesan yang telah diberi bit-bit pengganjal selanjutnya ditambah lagi dengan 64 bit yang menyatakan panjang pesan semula.\r\n Jika panjang pesan > 264 maka yang diambil adalah panjangnya dalam modulo 264. Dengan kata lain, jika panjang pesan semula adalah K bit, maka 64 bit yang ditambahkan menyatakan K modulo 264. \r\nSetelah ditambah dengan 64 bit, panjang pesan sekarang menjadi kelipatan 512 bit. \r\n3. Inisialisai Penyangga MD \r\nMD5 membutuhkan 4 buah penyangga (buffer) yang masing-masing      panjangnya 32 bit. Total panjangpenyangga adalah 4 ´ 32 = 128 bit.\r\nKeempat penyangga ini menampung hasil antara dan hasil akhir.Keempat penyangga ini diberi nama A, B, C, dan D. Setiap penyangga diinisialisasi dengan nilai-nilai (dalam notasi HEX) sebagai berikut :\r\nA = 01234567\r\nB = 89ABCDEF\r\nC = FEDCBA98\r\nD = 76543210\r\n\r\n4. Pengolahan Pesan dalam Blok Berukuran 512 bit\r\nPesan dibagi menjadi L buah blok yang masing-masing panjangnya 512 bit (Y0 sampai YL – 1). \r\n Setiap blok 512-bit diproses bersama dengan penyangga MD menjadi keluaran 128-bit, dan ini disebut proses HMD5.', '2014-05-14', 'admin', 'dl.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `on_online`
--

CREATE TABLE IF NOT EXISTS `on_online` (
`o_id` int(11) NOT NULL,
  `o_waktu` int(20) NOT NULL DEFAULT '0',
  `o_cookie` varchar(100) NOT NULL,
  `o_tanggal` date NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `on_online`
--

INSERT INTO `on_online` (`o_id`, `o_waktu`, `o_cookie`, `o_tanggal`) VALUES
(2, 1459804125, 'pimen', '2016-04-04');

-- --------------------------------------------------------

--
-- Table structure for table `plugin`
--

CREATE TABLE IF NOT EXISTS `plugin` (
`no` int(5) NOT NULL,
  `ket` text NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `plugin`
--

INSERT INTO `plugin` (`no`, `ket`, `status`) VALUES
(2, 'ip.php', 'off'),
(3, 'msk.php', 'off'),
(4, 'foto.php', 'off'),
(7, 'kscore.php', 'on'),
(8, 'address.php', 'off');

-- --------------------------------------------------------

--
-- Table structure for table `prices`
--

CREATE TABLE IF NOT EXISTS `prices` (
  `no` int(5) NOT NULL,
  `prices` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE IF NOT EXISTS `reg` (
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `hp` varchar(25) NOT NULL,
  `idmisi` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`username`, `password`, `email`, `hp`, `idmisi`) VALUES
('pimen', 'p1m3n', 'pimenlabs@gmail.com', '085299911570', 1);

-- --------------------------------------------------------

--
-- Table structure for table `rules`
--

CREATE TABLE IF NOT EXISTS `rules` (
  `no` int(5) NOT NULL,
  `rules` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rules`
--

INSERT INTO `rules` (`no`, `rules`) VALUES
(1, 'Bermain Sportif, Belajar, Bersenang-senang, Tidak Brengsek!\r\n\r\n--------------------------------------\r\n\r\n- Setiap player Hanya memiliki 1 akun \r\n\r\n- Setiap player Tidak diperbolehkan berbagi jawaban\r\n\r\n- Tidak dianjurkan untuk "menebak" Flag.\r\n\r\n- Memperlakukan Mesin CTF ini layaknya komputer anda sendiri');

-- --------------------------------------------------------

--
-- Table structure for table `score`
--

CREATE TABLE IF NOT EXISTS `score` (
`no` int(15) NOT NULL,
  `user` varchar(25) NOT NULL,
  `point` varchar(25) NOT NULL,
  `waktu` varchar(25) NOT NULL,
  `idmisi` varchar(25) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `score`
--

INSERT INTO `score` (`no`, `user`, `point`, `waktu`, `idmisi`) VALUES
(1, 'pimen', '0', '2016-04-04 23:08:45', '1');

-- --------------------------------------------------------

--
-- Table structure for table `smisi`
--

CREATE TABLE IF NOT EXISTS `smisi` (
  `id` int(5) NOT NULL,
  `user` varchar(55) NOT NULL,
  `level` varchar(55) NOT NULL,
  `status` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE IF NOT EXISTS `status` (
  `username` varchar(25) NOT NULL,
  `idmisi` int(5) NOT NULL,
  `status` varchar(52) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`username`, `idmisi`, `status`) VALUES
('pimen', 1, 'on'),
('pimen', 2, 'on'),
('pimen', 3, 'on'),
('pimen', 4, 'on'),
('pimen', 5, 'on'),
('pimen', 6, 'on'),
('pimen', 7, 'on'),
('pimen', 8, 'on'),
('pimen', 9, 'on'),
('pimen', 10, 'on'),
('pimen', 11, 'on'),
('pimen', 12, 'on'),
('pimen', 13, 'on'),
('pimen', 14, 'on'),
('pimen', 15, 'on'),
('pimen', 16, 'on'),
('pimen', 17, 'on'),
('pimen', 18, 'on'),
('pimen', 19, 'on'),
('pimen', 20, 'on'),
('pimen', 21, 'on'),
('pimen', 22, 'on'),
('pimen', 23, 'on'),
('pimen', 24, 'on'),
('pimen', 25, 'on'),
('pimen', 26, 'on'),
('pimen', 27, 'on'),
('pimen', 28, 'on'),
('pimen', 29, 'on'),
('pimen', 30, 'on'),
('pimen', 31, 'on'),
('pimen', 32, 'on'),
('pimen', 33, 'on'),
('pimen', 34, 'on'),
('pimen', 35, 'on'),
('pimen', 36, 'on'),
('pimen', 37, 'on'),
('pimen', 38, 'on'),
('pimen', 39, 'on'),
('pimen', 40, 'on'),
('pimen', 41, 'on'),
('pimen', 42, 'on'),
('pimen', 43, 'on'),
('pimen', 44, 'on'),
('pimen', 45, 'on'),
('pimen', 46, 'on'),
('pimen', 47, 'on'),
('pimen', 48, 'on'),
('pimen', 49, 'on');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adm`
--
ALTER TABLE `adm`
 ADD PRIMARY KEY (`user`);

--
-- Indexes for table `inbox`
--
ALTER TABLE `inbox`
 ADD PRIMARY KEY (`no`);

--
-- Indexes for table `kmisi`
--
ALTER TABLE `kmisi`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `listip`
--
ALTER TABLE `listip`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `misi`
--
ALTER TABLE `misi`
 ADD PRIMARY KEY (`no`), ADD UNIQUE KEY `idmisi` (`idmisi`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `on_online`
--
ALTER TABLE `on_online`
 ADD PRIMARY KEY (`o_id`);

--
-- Indexes for table `plugin`
--
ALTER TABLE `plugin`
 ADD PRIMARY KEY (`no`);

--
-- Indexes for table `reg`
--
ALTER TABLE `reg`
 ADD PRIMARY KEY (`username`);

--
-- Indexes for table `score`
--
ALTER TABLE `score`
 ADD PRIMARY KEY (`no`), ADD UNIQUE KEY `user` (`user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `inbox`
--
ALTER TABLE `inbox`
MODIFY `no` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `listip`
--
ALTER TABLE `listip`
MODIFY `id` int(1) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `on_online`
--
ALTER TABLE `on_online`
MODIFY `o_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `plugin`
--
ALTER TABLE `plugin`
MODIFY `no` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `score`
--
ALTER TABLE `score`
MODIFY `no` int(15) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
