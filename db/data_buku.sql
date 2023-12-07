-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2023 at 03:10 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-perpus`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_buku`
--

CREATE TABLE `data_buku` (
  `isbn_bk` varchar(20) NOT NULL,
  `judul_bk` varchar(100) NOT NULL,
  `id_kategori` int(20) NOT NULL,
  `penulis_bk` varchar(100) NOT NULL,
  `cover_bk` varchar(5000) NOT NULL,
  `file_bk` varchar(5000) NOT NULL,
  `sinop_bk` varchar(2000) NOT NULL,
  `jml_dwn_bk` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_buku`
--

INSERT INTO `data_buku` (`isbn_bk`, `judul_bk`, `id_kategori`, `penulis_bk`, `cover_bk`, `file_bk`, `sinop_bk`, `jml_dwn_bk`) VALUES
('1001', '5cm', 1, 'Makoto Shinkai', '5cm.jpg', '5cm.pdf', '5 Centimeters per Second adalah film anime bergenre romance. Film ini pada dasarnya bercerita tentang hubungan cinta dua remaja. Kisah mereka, selain terhalang oleh masalah jarak, juga terkendala soal keengganan untuk mengungkapkan perasaan satu sama lain.', 0),
('1002', '100 Cerita Rakyat Nusantara_2', 2, 'Dian Kristiani', '100 Cerita Rakyat Nusantara_2.jpeg', '100 Cerita Rakyat Nusantara_2.pdf', '“Di mana kami dapat menemukan nasi ini, Dewi?”tanya para penduduk. “Kalian tidak akan menemukannya, melainkan harus menanamnya,” sahut Dewi Sri.“Tapi, bagaimana caranya?” tanya Hyang Prabu Romo.', 0),
('1003', 'Ancika', 1, 'Pidi Baiq', 'Ancika.jpg', 'Ancika.pdf', 'Ancika 1995 bercerita tentang kisah cinta Dilan setelah putus dari Milea saat berada di bangku SMA. Cerita ini merupakan lanjutan dari trilogi Dilan, yaitu Dilan 1990, Dilan 1991, dan Milea: Suara dari Dilan.', 0),
('1004', 'Atomic Habit', 1, 'James Clear', 'Atomic Habit.jpg', 'Atomic Habit.pdf', 'Melalui Atomics Habits James Clear memberikan paparan teori bahwa kebiasaan remeh yang dilakukan setiap hari dapat menghasilkan sesuatu yang luar biasa. Kegiatan-kegiatan seperti bangun lebih cepat lima menit atau berolahraga ringan setiap hari dapat membentuk kebiasaan baik dan menghentikan kebiasaan buruk. Oleh karena itu, kebiasaan-kebiasaan remeh tersebut dikenal sebagai atomic habits atau kebiasaan atom.', 0),
('1005', 'Bahasa-Inggris-BS-KLS-I', 4, 'Lala Intan Gemala, Heni Dwi Utami, dan Ulin Farichah.', 'Bahasa-Inggris-BS-KLS-I.jpeg', 'Bahasa-Inggris-BS-KLS-I.pdf', 'Pelajaran  Bahasa  Inggris  untuk  peserta didik SD secara  Nasional masih belum merupakan\r\nmata pelajaran yang wajib diajarkan. Oleh sebab itu sekolah yang memutuskan untuk menambah\r\npelajaran bahasa Inggris kepada muridnya harus mengembangkan  berbagai  kebutuhan\r\npengajarannya sendiri. Sekolah harus  mengembangkan  silabus, materi  ajar  dan  evaluasinya,\r\nserta pengembangan gurunya.', 0),
('1006', 'Bau Wangi Tarumenyan', 2, 'Puji Retno Hardiningtyas', 'Bau Wangi Tarumenyan.jpeg', 'Bau Wangi Tarumenyan.pdf', 'Cerita ini berkisah tentang perjalanan Putra Sulung Dalem Solo untuk mencari sumber bau harum. Dalam waktu bersamaan, bau harum itu tercium hingga ke langit. Sang Dewi yang terpesona akan bau harum pun mencari-cari sumber bau wangi tersebut. ', 0),
('1007', 'Bermain Berbasis Buku-PAUD', 4, 'Arleen Amidjaja, Anna Farida Kurniasari, dan Ni Ekawati.', 'Bermain Berbasis Buku-PAUD.jpeg', 'Bermain Berbasis Buku-PAUD.pdf', 'Buku Bermain Berbasi Buku ini dirancang sebagai penghargaan untuk ibu dan bapak guru dalam mengakrabkan anak-anak dengan buku melalui berbagai kegiatan. Dengan harapan buku ini dapat menjadi sahabat bagi Ibu dan Bapak Guru beserta anak didiknya dalam berkegiatan. Belajar dan bermain Bersama buku akan membangun pengetahuan anak dengan penuh gembira.', 0),
('1008', 'buku-ilustrasi-anak_lumba-lumba', 2, 'Nurul Abidatul', 'buku-ilustrasi-anak_lumba-lumba.jpeg', 'buku-ilustrasi-anak_lumba-lumba.pdf', 'Buku cerita anak tentang hewan salah satu cara untuk memperkenalkan sains tentang makhluk hidup pada anak. Membantu proses imajinasi dan kreativitas sang anak agar peduli dengan apa yang ada di lingkungan sekitarnya dan menumbuhkan rasa kasih sayang terhadap sesama makhluk hidup.', 0),
('1009', 'BungouSD Vol.01', 3, 'Kafka Asagiri', 'BungouSD Vol.01.jpg', 'BungouSD Vol.01.pdf', 'Bungou Stray Dogs menceritakan seorang anak laki-laki bernama Atsushi Nakajima yang diusir oleh panti asuhan tempat dia diasuh sebelumnya dan kini hidup terlantar. Bersamaan dengan itu, ada rumor terkait \"Manusia Harimau\" yang sedang diselidiki oleh banyak pihak, termasuk Detektif Bersenjata.', 0),
('1010', 'Chainsaw.Man_Vol_01', 3, 'Tatsuki Fujimoto', 'Chainsaw.Man_Vol_01.jpg', 'Chainsaw.Man_Vol_01.pdf', 'Komik ini bercerita tentang Denji, seorang pemuda miskin yang terpaksa bekerja sebagai Devil Hunter sejak kecil demi melunasi utang mendiang orang tuanya. Suatu hari, Denji bertemu Chainsaw Devil yang terluka. Demi menolongnya, Denji kecil memberikan darahnya dan menjalin kontrak dengan devil tersebut, yang akhirnya dia pelihara dan\r\ndinamakan Pochita. Sejak saat itu, mereka berdua terus memburu devil demi upah yang tak seberapa.\r\n', 0),
('1011', 'Ebook-Seri-Belajar-Islam-Sejak-Usia-Dini-Nabi-Muhammad-Idolaku', 4, 'Nurul Ihsan', 'Ebook-Seri-Belajar-Islam-Sejak-Usia-Dini-Nabi-Muhammad-Idolaku-cover.jpg', 'Ebook-Seri-Belajar-Islam-Sejak-Usia-Dini-Nabi-Muhammad-Idolaku.pdf', 'Buku ini mengisahkan tentang laku hidup dan sifat-sifat teladan Rasulullah Muhammad Saw. adalah salah satu cara terbaik untuk membentuk kepribadian putra dan putri kita menjadi individu-individu yang saleh dan salihah', 0),
('1012', 'Fantastic Beasts The Crimes of Grindelwald', 1, 'J.K. Rowling', 'Fantastic Beasts The Crimes of Grindelwald.jpg', 'Fantastic Beasts The Crimes of Grindelwald.pdf', 'Buku ini merupakan lanjutan Fantastic Beasts and Where to Find Them, yang di bagian akhir ceritanya mengisahkan tertangkapnya penyihir kegelapan Gellert Grindelwald di New York dengan bantuan Newt Scamander. Grindelwald lalu lolos dari tahanan dan mulai mengumpulkan pengikut yang tidak curiga dengan rencananya yang sebenarnya: yakni membangkitkan kekuatan penyihir berdarah murni dan menindas semua makhluk non-magis.', 0),
('1013', 'Filosofi Teras', 1, 'Henry Manampiring', 'Filosofi Teras.jpg', 'Filosofi Teras.pdf', 'Filosofi Teras, diawali dengan menceritakan tentang sebuah survei kekhawatiran nasional yang semakin masif sekaligus menyajikan tentang sekilas kehidupan si penulis yang dipenuhi oleh emosi negatif yang berlebihan. ', 0),
('1014', 'Funiculi Funicula', 1, 'Toshikazu Kawaguchi', 'Funiculi Funicula (Toshikazu Kawaguchi).jpg', 'Funiculi Funicula (Toshikazu Kawaguchi).pdf', 'Di sebuah gang kecil di Tokyo, ada kafe tua yang bisa membawa pengunjungnya menjelajahi waktu. Keajaiban kafe itu menarik seorang wanita yang ingin memutar waktu untuk berbaikan dengan kekasihnya, seorang perawat yang ingin membaca surat yang tak sempat diberikan suaminya yang sakit, seorang kakak yang ingin menemui adiknya untuk terakhir kali, dan seorang ibu yang ingin bertemu dengan anak yang mungkin takkan pernah dikenalnya.', 0),
('1015', 'Geez Ann 1', 1, 'Rintik Sedu', 'Geez Ann 1 Rintik Sedu.png', 'Geez Ann 1 Rintik Sedu.pdf', 'Gazza Cahyadi atau Geez (Junior Robert) dan Kean Amanda alias Ann (Hanggini Purinda) pertama kali bertemu di sebuah acara pensi sekolah. Geez yang merupakan alumni, menjadi bintang tamu pengisi acara tersebut bersama grub bandnya, Indie Brothers. Setelah tampil, Geez meminta pendapat Ann tentang aksi panggungnya. Ann yang menjadi ketua panitia acara pensi tersebut menjawab pertanyaan Geez dengan jujur dan apa adanya.', 0),
('1016', 'Jakarta Sebelum Pagi', 1, 'Ziggy Zezsyazeoviennazabrizkie', 'Jakarta Sebelum Pagi.jpg', 'Jakarta Sebelum Pagi.pdf', 'Perkenalkan, namanya Emina, pekerja kantoran biasa dengan keunikannya tersendiri. Dimulai dari namanya saja, tidak ada yang menduga bahwa “Emina” adalah versi kebarat-baratan dari nama “Aminah” khas Timur Tengah. Dan tentunya masih banyak keunikan lain yang sosok tersebut miliki.Kehidupannya juga terbilang normal-normal saja, tidak ada yang begitu spesial kecuali sifat eksentriknya yang membuat hari-harinya lebih dari biasa saja. ', 0),
('1017', 'Kalah_oleh_Si_Cerdik', 2, 'Atisah', 'Kalah_oleh_Si_Cerdik.jpeg', 'Kalah_oleh_Si_Cerdik.pdf', 'Pada Suatu pagi yang cerah banyak binatang menuju sumber air. Sesampainya di pinggir telaga mereka tidak mau turun. Airnya kotor karena digunakan untuk berkubang oleh seekor badak.', 0),
('1018', 'Karang Melenguh', 2, 'Eva Krisna', 'Karang Melenguh.jpeg', 'Karang Melenguh.pdf\r\n', 'Buyuang Kacinduan adalah anak laki-laki dari seorang petani di Nagari Bayang, Pesisir Minangkabau. Buyuang memiliki perilaku baik, sopan, dan sangat patuh pada orang tuanya. Tak hanya ayah dan ibunya, seluruh warna Nagari Bayang pun sangat menyayanginya. ', 0),
('1019', 'KETIKA LILO PIKNIK - LOWRES', 3, 'Irawati Subrata', 'KETIKA LILO PIKNIK - LOWRES.jpeg', 'KETIKA LILO PIKNIK - LOWRES.pdf', 'Di Desa Karoten,ada acara piknik untuk merayakan panen wortel.Lilo belum pernah ikut piknik.Hari mimggu,ia datng membawa makanan paling enak.Saat piknik,semua petani saling berbagi dan mencicipi makanan.', 0),
('1020', 'Kimi no na wa', 1, 'Makoto Shinkai', 'kimi no nawa.jpg', 'Kimi no na wa.pdf', 'Kimi no Na wa\' menceritakan kisah kehidupan dua orang remaja yang bertukar tubuh ketika mereka tidur secara bergantian. Adalah Miyamizu Mitsuha, siswi SMA sekaligus gadis kuil yang tinggal di desa Itomori dekat gunung di pedalaman Gifu yang merasa bosan dengan kehidupan di pedesaan.', 0),
('1021', 'komik bulan imunisasi anak nasional', 3, 'Umarjono Hadi, S.Sn', 'komik bulan imunisasi anak nasional.jpeg', 'komik bulan imunisasi anak nasional.pdf', 'Kapten BIAN adalah superhero tangguh pelindung masyarakat dan  menjadi idola bagi anak-anak Indonesia. Kapten BIAN siap memberantas monster- monster menakutkan dan merugikan seperti  Campak, Rubela, Polio,  Difteri, Pertusis,  Hepatitis B, Pneumonia dan Meningitis.', 0),
('1022', 'Komik Keluarga Indah', 3, 'unknown author', 'Komik Keluarga Indah.jpeg', 'Komik Keluarga Indah.pdf', 'Pertengkaran kakak dan adik adalah hal wajar terjadi Ketika pertengkaran terjadi cobalah untuk memahami mereka . Bukan malah menyalahkan mereka. Tanamkan pengertian secara perlahan dengan mereka pada anak untuk saling mengasihani satu sama lain.', 0),
('1023', 'Komik Waspada Rabes', 3, 'Komang Candra Wiguna', 'Komik Waspada Rabes.jpeg', 'Komik Waspada Rabes.pdf', 'Virus ini bisa menular pada manusia, misalnya melalui  gigitan, sehingga sebaiknya langsung dilakukan cuci  luka dengan air mengalir dan sabun selama 15 menit.', 0),
('1024', 'Komik__TUPAI', 3, 'unknown author', 'Komik__TUPAI-ok.jpeg', 'Komik__TUPAI-ok.pdf', 'Cerita-cerita tentang persahabatan si tupai,kelinci kupu-kupu dan burung kenari, Merupakan serangkaian bahan belajar sambal bermainyang terdiri dari atas cerita gambar,cd lagu dan tari', 0),
('1025', 'Kumpulan_Cerita_Dongeng_Anak_2', 2, 'Stella Ernes', 'Kumpulan_Cerita_Dongeng_Anak_2.jpeg', 'Kumpulan_Cerita_Dongeng_Anak_2.pdf', 'Balas budi burung bangau\r\nDahulu kala disuatu tempat dijepang hidup sorang pemuda bernama yosaku.kerjanya mengambil kayu bakar di gunung dan mnjualnya kekota. Uang hasil penjualan dibelikan makanan. Terus setiap hari begitunya\r\n', 0),
('19562', 'efeafe', 0, '', 'qefef', 'sfvzsdv', 'sccasc', 0),
('19562659', 'efeafe', 0, '', 'WEFAWRF', 'vasrearffav', 'acddca', 0),
('19562659cac', 'efeafe', 0, '', 'qefef', 'ascasc', 'csacsc', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_buku`
--
ALTER TABLE `data_buku`
  ADD PRIMARY KEY (`isbn_bk`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
