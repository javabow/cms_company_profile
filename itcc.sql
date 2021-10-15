-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2021 at 07:52 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `itcc`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id_faq` int(11) NOT NULL,
  `pertanyaan` varchar(250) NOT NULL,
  `jawaban` varchar(400) NOT NULL,
  `type` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `guide`
--

CREATE TABLE `guide` (
  `id_artikel` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `judul` varchar(150) NOT NULL,
  `isi` text NOT NULL,
  `image` varchar(150) NOT NULL,
  `header_image` varchar(200) DEFAULT NULL,
  `url` varchar(150) NOT NULL,
  `page` varchar(50) NOT NULL,
  `type` varchar(10) NOT NULL,
  `active` int(11) NOT NULL DEFAULT 1,
  `kan` int(11) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guide`
--

INSERT INTO `guide` (`id_artikel`, `created_at`, `updated_at`, `judul`, `isi`, `image`, `header_image`, `url`, `page`, `type`, `active`, `kan`) VALUES
(1, '2021-03-19 06:37:18', '2021-10-15 05:46:23', 'ISO 9001:2015', '<p><strong>Sertifikasi Sistem Manajemen Mutu</strong></p>\r\n<p>ISO 9001 adalah standar manajemen mutu internasional. Ini dengan cepat menjadi standar kualitas paling populer di dunia. Ribuan organisasi di lebih dari 100 negara telah mengadopsinya, dan lebih banyak lagi sedang dalam proses untuk melakukannya. Mengapa? Karena itu mengontrol kualitas. Menghemat uang. Pelanggan mengharapkannya. Dan pesaing menggunakannya.</p>\r\n<p>ISO 9001 berlaku untuk semua jenis organisasi. Tidak peduli apa ukurannya atau apa fungsinya. Ini dapat membantu organisasi berorientasi produk dan layanan mencapai standar kualitas yang diakui dan dihormati di seluruh dunia.</p>\r\n<p>ISO adalah Organisasi Internasional untuk Standardisasi. Itu terletak di Swiss dan didirikan pada tahun 1947 untuk mengembangkan standar internasional umum di banyak bidang. Anggotanya berasal dari lebih dari 150 badan standar nasional. Tujuan ISO adalah untuk memfasilitasi perdagangan internasional dengan menyediakan satu set standar yang akan dikenali dan dihormati oleh semua orang di mana pun.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Siapa yang dapat menggunakan ISO 9001?</strong></p>\r\n<p>Setiap jenis organisasi dapat memanfaatkan penerapan persyaratan ISO 9001 berdasarkan delapan prinsip manajemen:</p>\r\n<ul style=\"list-style-type: circle;\">\r\n<li>organisasi yang berfokus pada pelanggan</li>\r\n<li>kepemimpinan</li>\r\n<li>keterlibatan orang</li>\r\n<li>pendekatan proses</li>\r\n<li>pendekatan sistematis untuk manajemen</li>\r\n<li>pengambilan keputusan berdasarkan pendekatan nyata</li>\r\n<li>hubungan dengan pemasok dengan saling menguntungkan</li>\r\n<li>perbaikan terus-menerus</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<p><strong>Apa keuntungan dari registrasi ISO 9001?</strong><br /><strong>Kepuasan pelanggan</strong></p>\r\n<p>dengan pengiriman produk secara konsisten memenuhi kebutuhan pelanggan</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Mengurangi biaya pengoperasian</strong></p>\r\n<p>dengan peningkatan berkelanjutan dalam proses dan hasil efisiensi operasional</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Hubungan pemangku kepentingan yang lebih baik</strong></p>\r\n<p>termasuk staf, pelanggan, dan pemasok</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Kepatuhan hukum</strong></p>\r\n<p>dengan memahami bagaimana persyaratan peraturan dan perundang-undangan yang memiliki pengaruh tertentu pada organisasi dan pelanggan Anda</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Peningkatan pengendalian manajemen risiko</strong></p>\r\n<p>dengan konsistensi terus menerus dan adanya ketertelusuran produk dan layanan</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Tercapainya kepercayaan masyarakat pada bisnis</strong></p>\r\n<p>dibuktikan dengan verifikasi pihak ketiga independen terhadap standar yang diakui</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Kemampuan untuk memenangkan lebih banyak bisnis</strong></p>\r\n<p>khususnya pemenuhan spesifikasi pengadaan memerlukan sertifikasi sebagai persyaratan penyediaan barang dan jasa</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Bagaimana cara mendaftar sertifikasi ISO 9001?</strong></p>\r\n<p>Proses pendaftaran mengikuti tiga langkah sederhana:</p>\r\n<p>Pemohon mengajukan permohonan registrasi dengan mengisi kuesioner QMS</p>\r\n<p>Asesmen terhadap ISO 9001 dilakukan oleh ITCC International - dimana suatu organisasi harus dapat menunjukkan bahwa manajemen mutu memang telah benar-benar berjalan setidaknya dalam jangka waktu tiga bulan sesuai seluruh urutan (siklus) audit internal.</p>\r\n<p>Pendaftaran diberikan oleh ITCC International, tahap selanjutnya harus dilakukan oleh klien. Program tahunan pengawasan kunjungan audit (surveillance) harus dilaksanakan sepenuhnya dan proses sertifikasi ulang setelah tiga tahun berlakunya sertifikasi ISO 9001.</p>', 'https://localhost/icc/photos/shares/artikel/tentang_iso_9001.jpg', 'https://localhost/icc/cms_company_profile/photos/shares/carlos-lindner-53wcYH4IOig-unsplash.jpg', 'iso-9001-2015', 'service', '1', 1, 0),
(2, '2021-03-19 06:39:55', '2021-03-25 02:25:31', 'ISO/IEC 27001:2013', '<p><strong>ISO / IEC 27001: 2013 Sistem Manajemen Keamanan Informasi</strong></p>\r\n<p>ISO / IEC 27001 adalah standar internasional untuk Sistem Manajemen Keamanan Informasi (ISMS). Ini telah diadopsi secara global dengan lebih dari 15.000 sertifikat yang diterbitkan di 117 negara.</p>\r\n<p>Standar ini memberikan kerangka kerja untuk SMKI yang memungkinkan aksesibilitas berkelanjutan, kerahasiaan dan integritas informasi serta kepatuhan hukum.</p>\r\n<p>Implementasi adalah respons yang ideal untuk pelanggan dan persyaratan hukum seperti Undang-Undang Perlindungan Data dan potensi ancaman keamanan termasuk:</p>\r\n<ul style=\"list-style-type: circle;\">\r\n<li>Vandalisme / terorisme</li>\r\n<li>Api</li>\r\n<li>Penyalahgunaan</li>\r\n<li>Pencurian</li>\r\n<li>Serangan virus</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<p>ISO / IEC 27001 juga disusun agar kompatibel dengan standar sistem manajemen lain seperti ISO 9001 dan itu adalah teknologi dan vendor netral, yang berarti itu sepenuhnya independen dari platform TI apa pun.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Siapa yang dapat menggunakan ISO / IEC 27001?</strong></p>\r\n<p>Itu tepat untuk Anda dan organisasi Anda jika Anda memerlukan bukti atau jaminan bahwa aset terpenting Anda dilindungi dari penyalahgunaan, korupsi, atau kerugian.</p>\r\n<p><br /><strong>Apa keuntungan dari Pendaftaran ISO / IEC 27001?</strong><br /><strong>Kepuasan pelanggan</strong></p>\r\n<p>dengan pengiriman produk secara konsisten memenuhi kebutuhan pelanggan.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Mengurangi biaya pengoperasian</strong></p>\r\n<p>dengan peningkatan berkelanjutan dalam proses dan hasil efisiensi operasional.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Hubungan pemangku kepentingan yang lebih baik</strong></p>\r\n<p>termasuk staf, pelanggan, dan pemasok.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Kepatuhan hukum</strong></p>\r\n<p>dengan memahami bagaimana persyaratan peraturan dan perundang-undangan yang memiliki pengaruh tertentu pada organisasi dan pelanggan Anda.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Peningkatan pengendalian manajemen risiko</strong></p>\r\n<p>dengan konsistensi terus menerus dan adanya ketertelusuran produk dan layanan.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Tercapainya kepercayaan masyarakat pada bisnis</strong></p>\r\n<p>dibuktikan dengan verifikasi pihak ketiga independen terhadap standar yang diakui.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Kemampuan untuk memenangkan lebih banyak bisnis</strong></p>\r\n<p>khususnya pemenuhan spesifikasi pengadaan memerlukan sertifikasi sebagai persyaratan penyediaan barang dan jasa.</p>\r\n<p>&nbsp;</p>', 'https://localhost/icc/photos/shares/artikel/header_page/iso-9001-enhaii.jpg', 'https://localhost/icc/photos/shares/artikel/header_page/iso-27001-enhaii.jpg', 'iso-iec-27001-2013', 'service', '1', 1, 0),
(3, '2021-03-22 02:41:38', '2021-03-25 03:00:46', 'Mengenai Apa Itu ISO 22000', '<p>ISO 22000:2018, Food safety management systems &ndash; Requirements for any organization in the food chain (Sistem Manajemen Keamanan Pangan &ndash; Persyaratan bagi setiap organisasi yang bergerak dalam rantai pangan), metetapkan serangkaian persyaratan bagi sistem manajemen kemanan pangan. Standar ini mendefiniskan apa yang harus dilakukan organisasi dalam rangka menunjukkan kemampuannya dalam pengendalian segala bahaya keamanan pangan serta memastikan keamanannya untuk dikonsumsi.</p>\r\n<p><br /><strong>Bagi siapa sajakah ISO 22000?</strong><br />ISO 22000 berlaku bagi semua organisasi yang bergerak dalam industry pangan dan makanan, terlepas dari ukuran atau bidangnya. Dengan mengikuti . Following the same High-Level Structure (HLS) &ndash; Struktur Tingkat Tinggi sebagaimana standar dari sistem manajemen ISO lainnya, seperti ISO 9001 (manajemen mutu), Standar ini didesain sedemikian rupa sehingga dapat diintegrasikan ke dalam proses manajemen organisasi yang berjalan, namun bisa juga berjalan sendiri.</p>\r\n<p><br /><strong>Apa saja Manfaatnya bagi bisnis saya ?</strong><br />ISO 22000 membantu organisasi untuk menerapkan sistem manajemen pangan yang bermanfaat dalam rangka meningkatkan keseluruhan kinerja yang berkaitan dengan keamanan pangan.<br />Potensi manfaat utama dari penggunaan standar ini mencakup:</p>\r\n<ul style=\"list-style-type: circle;\">\r\n<li>Kemampuan untuk secara konsisten menyediakan produk dan layanan pangan yang aman dan sesuai dengan persyaratan peraturan.</li>\r\n<li>Semakin baiknya manajemen risiko dalam proses keamanan pangan</li>\r\n<li>Menunjukkan keterikatan yang lebih kuat dengan United Nations&rsquo; Codex Alimentarius, yang mengembangkan panduan keamanan pangan bagi pemerintah.</li>\r\n</ul>\r\n<p><br /><strong>Mengapa Standar ini direvisi ?</strong><br />Semua standar ISO senantiasa di-review dan direvisi secara reguler untuk memastikan relevansinya terhadap pangsa pasar. ISO 22000:2018 menekankan pada persayaratan mutakhir keamanan pangan beseerta tren-trennya dan seiring waktu tanggap terhadap segala tantangan global yang meningkat yang dihadapi industry pangan. Standar ini juga membantu menanggapi semakin tumbuhnya kebutuhan untuk memastikan sistem perlindungan pangan yang ada dapat diandalkan dan berkelanjutan. ISO 22000:2018 mencakup perbaikan-perbaikan terhadap definisi, termasuk definisi yang selaras dengan Codex Alimentarius. Revisi juga memberikan pemahaman baru mengenai konsep risiko, yang membedakannya antara risiko pada level operasional dan pada level strategis sistem manajemen.</p>\r\n<p><br /><strong>Bagaimana tentang sertifikasi ?</strong><br />Sertifikasi bukanlah persayaratan dari ISO 22000 dan banyak organisasi mendapatkan manfaat dengan menggunakan satandar ini tanpa mendapatkan sertifikasi. Jika anda memilih untuk tersertifikasi, langkah pertama adalah mendapatkan lembaga sertifikasi dengan reputasi baik, karena ISO tidak melaksanakan sertifikasi. Untuk informasi lebih lanjut, hubungi anggota ISO di negara anda.</p>\r\n<p><br /><strong>Bagaimana hubungan Standar ini dengan Codex Alimentarius ?</strong><br />Codex Alimentarius, juga dikenal sebagai &ldquo;Kode Pangan&rdquo;, merupakan serangkaian standar dan panduan internasional yang dijadikan acuan di banyak hukum negara, yang memberikan fondasi bagi kebanyakan otoritas pemerintahan untuk memastikan keamanan pangan bagi konsumen. Kode ini dekembangkan oleh Codex Alimentarius Commission (CAC), yang merupakan hasil kerjasama antara Food and Agriculture Organization of the United Nations (FAO) &ndash; Organisasi Pangan Dunia dan World Health Organization (WHO) &ndash; Organisasi Kesehatan Dunia. ISO 22000 didasarkan pada prinsip-prinsip Codex bagi higinietas pangan dan membantu pihak yang berwenang untuk mengacu pada ISO 22000 dalam menetapkan persyaratan nasionalnya serta dalam melaksanakan inspeksi pemerintah sebagai upaya untuk memastikan terpenuhinya semua kriteria keamanan pangan.</p>\r\n<p>&nbsp;</p>\r\n<p>Sumber: iso.org</p>', 'https://localhost/icc/photos/shares/artikel/artikel_penjelasan_iso_21001.jpg', 'https://localhost/icc/photos/shares/artikel/header_page/apa-itu-iso-21001-enhaii.jpg', 'mengenai-apa-itu-iso-22000', 'artikel', '1', 1, 0),
(4, '2021-03-22 02:42:04', '2021-03-25 03:02:55', 'Penjelasan Tentang Apa Itu ISO 14001', '<p>ISO 14001 merupakan standar yang disepakati secara internasional yang menetapkan persyaratan bagi sistem manajemen lingkungan. Standar ini membantu organisasi dalam meningkatkan kinerja lingkungannya melalui penggunaan yang lebih efisien dari segala sumber daya dan mengurangi limbah, sehingga mendapatkan manfaat yang kompetitif dan kepercayaan dari para stakeholders.</p>\r\n<p><br /><strong>Apa itu Sistem Manajemen Lingkungan ?</strong><br />Sistem Manajemen Lingkungan membantu semua organisasi dalam mengidentifikasi, mengelola, mengawasi, dan mengendalikan isu-isu yang berkaitan dengan lingkungan dengan cara yang &ldquo;holistik&rdquo;.</p>\r\n<p>Standar ISO yang fokus pada sistem manajemen yang berbeda, seperti ISO 9001 untuk manajemen mutu dan ISO 45001 untuk kesehatan dan keselamatan kerja, semuanya menggunakan struktur tingkat tinggi. Dengan demikian, ISO 14001 dapat diintegrasikan dengan mudah dengan sistem manajemen ISO manapun. ISO 14001 sesuai bagi organisasi dengan jenis dan ukuran apapun, baik perusahaan swasta, non-profit ataupun pemerintahan. Standar ini mengharuskan suatu organisasi untuk mempertimbangkan semua isu lingkungan yang berhubungan dengan operasi atau kegiatannya, seperti polusi udara, isu air dan salurannya, pengelolaan limbah, kontaminasi tanah, mitigasi perubahan iklim, serta penggunaan dan efisiensi sumber daya.</p>\r\n<p>Seperti standar sistem manajemen ISO lainnya, ISO 14001 mencakup perlunya perbaikan yang terus menerus dari sistem organisasi dan dari pendekatan terhadap persoalan lingkungan. Standar ini telah melalui revisi, dengan perbaikan-perbaikan utama seperti pada aspek semakin pentingnya manajemen lingkungan dalam proses perencanaan strategis organisasi, input yang lebih luas dari kepemimpinan, dan komitmen yang lebih kuat untuk bersikap proaktif terhadap inisiatif-inisiatif yang meningkatkan kinerja lingkungan.</p>\r\n<p><br /><strong>Apa manfaat yang diberikan Standar ini bagi usaha atau organisasi saya ?</strong><br />Banyak alasan mengapa suatu organisasi harus melakukan pendekatan strategis dalam rangka meningkatkan kinerja lingkungannya. Mereka yang sudah menggunakan Standar ini menyampaikan bahwa ISO 14001 dapat membentu mereka dalam :</p>\r\n<ul style=\"list-style-type: circle;\">\r\n<li>Menunjukkan kepatuhan terhadap segala persyaratan peraturan dan hukum saat ini dan yang akan datang</li>\r\n<li>Meningkatkan keterlibatan kepemimpinan dan keterikatan karyawan</li>\r\n<li>Meningkatkan reputasi organisasi dan kepercayaan para stakeholders melalui komunikasi strategis</li>\r\n<li>Meraih tujuan-tujuan bisnis strategis dengan menyertakan isu-isu lingkungan ke dalam manajemen bisnis</li>\r\n<li>Memberikan keuntungan keuangan dan kompetitif melalui peningkatan efisiensi dan pengurangan biaya</li>\r\n<li>Mendorong kinerja lingkungan yang lebih baik dari para pemasok dengan mengintegrasikan mereka ke dalam sistem bisnis organisasi</li>\r\n</ul>\r\n<p><br />Semua Standar ISO senantiasa direvisi secara reguler untuk memastikan keberadaannya tetap relevan.</p>\r\n<p><strong>Mengapa ISO 14001 direvisi ?</strong><br />Semua Standar ISO senantiasa di-review dan direvisi secara reguler untuk memastikan relevansinya terhadap pangsa pasar. ISO 14001:2015 harus dapat merespon tren-tren mutakhir, termasuk meningkatnya pengakuan banyak perusahaan akan pentingnya mempertimbangkan unsur-unsur internal dan eksternal yang berpengaruh terhadap faktor lingkungan, seperti iklim yang terus berubah-ubah dan konteks persaingan yang terjadi. Perubahan-perubahan yang dibuat juga untuk memastikan bahwa standar ini sejalan dengan standar sistem manajemen lainnya.</p>\r\n<p><strong>&nbsp;</strong></p>\r\n<p><strong>Apa saja yang menjadi perbaikan atau peningkatan utama ?</strong><br />ISO 14001:2015 saat ini mensyaratkan:</p>\r\n<ul style=\"list-style-type: circle;\">\r\n<li>Manajemen lingkungan yang lebih diperhatikan dalam arah strategis organisasi</li>\r\n<li>Komitmen kepemimpinan yang lebih luas</li>\r\n<li>Implementasi dari inisiatif proaktif untuk melindungi lingkungan dari bahaya dan degradasi, seperti penggunaan sumber yang berkelanjutan dan mitigasi perubahan iklim</li>\r\n<li>Fokus pada pola pikir siklus hidup untuk memastikan dipertimbangkannya aspek-aspek lingkungan dari perkembangan hingga akhir hidup</li>\r\n<li>Bertambah fokusnya strategi komunikasi dengan stakeholder</li>\r\n</ul>\r\n<p>Standar ini juga membantu integrasi yang lebih mudah ke dalam sistem manajemen lainnya, dikarenakan kesamaan struktur, istilah, dan definisi.</p>\r\n<p><br /><strong>Jika Saya sudah tersertifikasi ISO 14001:2004, Apa artinya revisi ini bagi Saya ?</strong><br />Setiap organisasi diberikan masa transisi tiga tahun untuk pindah ke edisi terbaru dari standar ini, ketika revisinya sudah dipublikasikan. Setelah masa transisi, jika menginginkan sertifikat kembali, maka Anda harus mendapatkan sertifikasi dengan versi terbaru.</p>\r\n<p><br /><strong>Haruskah Saya tersertifikasi ISO 14001 ?</strong><br />Sertifkasi ISO 14001 yang terkreditasi bukanlah sebuah keharusan, karena setiap organisasi dapat memperoleh banyak manfaat dari standar ini tanpa melalui proses sertfikasi yang terakreditasi.</p>\r\n<p>Akan tetapi, sertifikasi pihak ketiga &ndash; dimana lembaga sertifikasi independen melakukan audit terhadap segala kegiatan organisasi anda berdasarkan semua persyaratan dari standar ini&ndash; merupakan cara memberitahukan para pembeli, pelanggan, pemasok, dan stakeholder lainnya bahwa anda telah mengimplementasikan standar ini dengan tepat. Apalagi? Bagi sebagian organisasi, standar ini membantu mereka menunjukkan bagaimana mereka memenuhi segala persayaratan kontrak dan regulasi.</p>\r\n<p>Meskipun kami mengembangkan dan mempublikasikan standar-standar, ISO tidak melakukan sertifikasi. Untuk informasi lanjut mengenai proses sertifikasi dan bagaimana menemukan lembaga sertifikasi yang tepat, silahkan kunjungi bagian &ldquo;sertifikasi&rdquo; di website kami (www.iso.org).</p>\r\n<p><br /><strong>Bagaimana Saya memulai dengan ISO 14001:2015 ?</strong><br />Sejumlah sumber, termasuk The ISO 14001 checklist for small business (Ceklis ISO 14001 untuk UMKM), memberikan panduan rinci mengenai bagaimana menggunakan standar ini, namun berikut adalah beberapa tip bagi anda untuk memulainya:</p>\r\n<p><strong>Tip 1</strong> &ndash; Perjelas tujuan-tujuan anda. Apa yang anda ingin capai dengan standar ini?</p>\r\n<p><strong>Tip 2</strong> &ndash; Dapatkan dukungan dari manajemen senior. Sangat penting bahwa para pemimpin organisasi anda mendukung tujuan dari sistem manajemen lingkungan yang efektif dan berkomitmen terhadap prosesnya.</p>\r\n<p><strong>Tip 3</strong> &ndash; Lakukan tinjauan yang baik mengenai semua sistem dan proses yang ada yang relevan dengan dampak lingkungan organisasi anda. Hal ini dapat menjadi dasar bagi sistem manajemen lingkungan anda dan membantu mengidentifikasi segala kekurangan dengan lebih mudah.</p>\r\n<p><br />Standar-standar lain di satu rumpun yang dapat membantu<br />Rumpun ISO 14000 terdiri dari sejumlah standar yang melengkapi ISO 14001, sebagian dari standar tersebut dijelaskan di bawah ini. Anda dapat juga memperoleh informasi lanjut di brosur Environ mental management &ndash; The ISO 14000 family of International Standards (Manajemen Lingkungan &ndash; Rumpun Standar Internasional ISO 14001), sebagai pengantar dasar dari rangkaian standar ISO 14000.</p>\r\n<ul style=\"list-style-type: circle;\">\r\n<li>ISO 14004 memberikan panduan mengenai penetapan, implementasi, pemeliharaan dan perbaikan sistem manajemen lingkungan dan koordinasinya dengan sistem manjemen lainnya.</li>\r\n<li>ISO 14006 diperuntukkan bagi organisasi apapun yang telah mengimplementasikan sistem manajemen lingkungan sesuai dengan ISO 14001, namun dapat membantu pengintegrasian eco-design ke dalam sistem manajemen lainnya.</li>\r\n<li>ISO 14064-1 memperjelas prinsip dan persyaratan pada tingkat organisasi mengenai kuantifikasi dan pelaporan efek gas emisi dan buang dari rumah kaca (greenhouse gas (GHG)).</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<p>Sumber: iso.org</p>', 'https://localhost/icc/photos/shares/artikel/mengenai-haccp-enhaii.jpg', 'https://localhost/icc/photos/shares/artikel/header_page/11-prinsip-iso-21001.jpg', 'penjelasan-tentang-apa-itu-iso-14001', 'artikel', '1', 1, 0),
(5, '2021-03-22 02:42:28', '2021-03-25 03:03:50', 'Catatan Singkat ISO 13485', '<p>Standar ini dirancang untuk digunakan oleh organisasi apapun yang terlibat dalam siklus perlatan medis, mulai dari konsepsi awal hingga produksi dan pasca produksi, termasuk penarikan dan pembuangan akhir. Standar ini juga mencakup aspek penyimpanan, distribusi, pemasangan, dan layanan perbaikan, serta penyediaan layanan-layanan terkait lainnya.</p>\r\n<p>Selain itu, standar ini dapat digunakan baik oleh pihak internal maupun eskternal, seperti lembaga sertifikasi, untuk membantu pihak-pihak tersebut dengan proses sertifikasi, atau oleh semua organisasi dari rantai pasokan (supply chain) yang disyaratkan oleh perjanjian untuk dinilai kesesuaiannya (conformity). ISO 13485 membantu organisasi merancang sistem manajemen mutu yang menetapkan dan mempertahankan efektifitas dari semua prosesnya. Hal ini mencerminkan komitmen yang kuat terhadap perbaikan terus menerus dan memberikan kepercayanan kepada pelanggan dalam aspek kemampuan memberikan produk yang aman dan efektif di pasaran.</p>\r\n<p><br /><strong>Apa itu peralatan medis ?</strong><br />Peralatan emdis merupakan instrumen, alat, mesin, implant, in vitro reagent, atau barang lain yang sejenis, yang diperuntukkan bagi diagnosa, pencegahan, dan perawatan penyakit atau kondisi medis lainnya. Ada banyak ragam peralatan medis, mulai dari perkakas tangan hingga mesin rumit yang dikendalikan komputer. Hal ini mencakup perban luka dan pisau bedah; peralatan tahan lama seprtti kursi roda atau krusi dokter gigi; peralatan implant seperti alat pacu jantung dan monitornya, kaki/tangan buatan dan sendi buatan; peralatan penunjang kehidupan seperti respirator dan ventilator paru-paru; peralatan canggih yang dikendalikan software seperti CT scanners dan MRI machines; serta in vitro diagnostic reagents dan test kits.</p>\r\n<p><br /><strong>Apa itu Sistem Manajemen Mutu ?</strong><br />Sistem manajemen mutu (SMM) merupakan serangkaian kebijakan, proses, dan prosedur yang membantu organisasi memenuhi persyaratan yang diharapkan oleh para stakeholders. Standar ini mengikuti siklus Plan-Do-Check-Act, metode manajemen empat langkah yang digunakan di dunia bisnis untuk pengendalian dan perbaikan terus menerus proses-proses dan produknya.</p>\r\n<p>DI industri peralatan medis, SMM diwajibkan oleh pihak yang berwenang di banyak negara. ISO 13485 membantu organisasi untuk secara konsisten menyediakan peralatan medis yang aman dan efektif serta memenuhi persyaratan aturan dan pelanggan. Standar ini cukup fleksibel dalam memenuhi setiap kebutuhan dari berbagai jenis organisasi peralatan medis yang berbeda-beda.</p>\r\n<p>Regulasinya secara luas berbeda dari satu negara dengan negara lain. Untuk itulah, ISO 13485 tidak menetapkan persyaratan ayng rinci, namun meminta organisasi peralatan medis untuk mengidentifikasi persyaratan regulasi tersebut yang relevan dengan setiap situasi dan menyertakannya ke dalam SMM. Selain itu, standar ini dapat selaras dengan sistem manajemen organisasi lainnya.</p>\r\n<p><br /><strong>Manfaat apa yang didapat oleh organisasi saya ?</strong><br />Kinerja dan keamanan dari perlatan medis merupakan hal penting di industry yang penuh aturan ini; itulah mengapa sistem manajemen mutu menjadi persyaratan regulasi atau hukum di banyak negara. ISO 13485 dapat membantu semua organisasi yang terlibat di dalam bagian apapun dari siklus peralatan medis:</p>\r\n<ul style=\"list-style-type: circle;\">\r\n<li>Menunujukan kepatuhan terhadap ketentuan aturan dan hukum</li>\r\n<li>Memastikan penetapan SMM secara konsisten untuk menghasilkan peralatan medis yang aman dan efektif</li>\r\n<li>Mengelola risiko secafa efektif</li>\r\n<li>Meningkatkan proses dan efisiensi sebagai sebuah kebutuhan</li>\r\n<li>Mendapatkan keuntungan kompetitif</li>\r\n</ul>\r\n<p><br /><strong>Mengapa ISO 13485 direvisi ?</strong><br />Semua standari ISO di-review dan direvisi secara reguler untuk memastikan relevansinya terhadap pangsa pasar. ISO 13485:2016 merupakan respon terhadap prkatek-prakterk SMM mutakhir, yang mencerminkan evolusi dari teknologi peralatan medis dan perubahan-perubahan dari ekspektasi dan ketentuan regulasi. Dengan revisi ini, dapat dipastikan bahwa standar ini selaras dengan standar sistem manajemen lainnya, termasuk ISO 9001 edisi terbaru.</p>\r\n<p><br /><strong>Apa saja perbaikan utamanya ?</strong><br />Versi terbaru ISO 13485 memberikan penekanan lebih pada aspek manajemen risiko dan pengambilan keputusan berbasis risiko dari proses-proses di luar ranah realisasi produk. Fokusnya adalah pada segala risiko yang dihubungkan dengan keamanan dan kinerja peralatan medis dan kepatuhan pada ketentuan regulasi. Selain itu, standar ini meminta organisasi untuk lebih tegas ketika berurusan dengan proses-proses outsourcing dengan menerapkan pengendalian, seperti perjanjian tertulis berbasis risiko, untuk menilai kinerja para pemasok.</p>\r\n<p>ISO 13485 juga mencerminkan meningkatnya persyaratan regulasi bagi organisasi yang ada di jaringan pasokan (supply chain) peralatan medis, yaitu:</p>\r\n<ul style=\"list-style-type: circle;\">\r\n<li>Penekanan yang lebih besar terhadap infrastruktur yang tepat, terutama untuk produksi peralatan medis yang steril, serta persyaratan tambahan bagi validasi atas hal-hal yang menghalagi kesterilan.</li>\r\n<li>Meningkatnya keselarasan dengan persyaratan regulasi dan, khususnya, dengan aturan dokumentasi.</li>\r\n<li>Perhatian lebih terhadap aktifitas pasca-pasar, termasuk penanganan komplain dan aturan pelaporan.</li>\r\n<li>Memperluas penerapan standar untuk melibatkan organisasi yang berinteraksi dengan perusahaan manufaktur peralatan medis.</li>\r\n<li>Persyaratan tambahan dalam disain dan pengembangan dari peralatan medis, yang mempertimbangkan kegunaannya, pemanfaatan standar-standar, dan perencanaan yang lebih mapan untuk verifikasi, validasi, peralihan, catatan perawatan dari semua aktifitas disain dan pengembangan.</li>\r\n<li>Harmonisasi semua persyaratan validasi untuk aplikasi software yang berbeda, seperti software SMM, <br />Software kendali proses, software untuk monitoring dan pengukuran</li>\r\n</ul>\r\n<p><br /><strong>Saya tersertifikasi ISO 13485:2003, Apa artinya bagi saya?</strong><br />Sertifikasi bukanlah persyaratan dari ISO 13485, dan organisasi dapat memperoleh manfaat dari standar ini tanpa harus tersertifikasi. Akan tetapi, sertifikasi pihak ketiga &ndash; yaitu adanya audit dari lembaga sertifikasi mengenai kepatuhan terhadap standar &ndash; dapat menjadi cara untuk menunjukkan kepada para stakeholders dan otoritas regulasi bahwa organisasi anda memenuhi semua persyaratan. Semua organisasi yang tersertifikasi ISO 13485:2003 diberikan masa transisi tiga tahun untuk beralih ke standar edisi terbaru. Setelah masa ini, jika anda menginginkan validasi dari pihak ketiga, anda harus mendapatkan sertifikasi versi terbaru. Untuk informasi lebih lanjut mengenai transisi ke ISO 13485:2016, diskusikan dengan lembaga sertifikasi di tempat anda. Informasi tambahan daapt diperoleh di www.iso.org/iso/certification.</p>\r\n<p><br /><strong>Hubungannya dengan ISO 9001</strong><br />ISO 13485 merupakan standar yang berdiri sendiri, keberadannya sama dengan ISO 9001, Quality management systems, dalam hal maksud dan cakupannya. Standar ini mengandung persyaratan tambahan yang spesifik bagi semua organisasi yang terlibat dalam siklus peralatan kesehatan, dengan beberapa elemen dari ISO 9001 telah dihilangkan yang dianggap tidak relevan sebagai ketentuan regulasi. Sebagaimana semua standar sistem manajemen ISO, standar ini didisain untuk dapat dipadukan dengan sistem manajemen organisasi yang berjalan.</p>\r\n<p><strong>Sumber: iso.org</strong></p>', 'https://localhost/icc/photos/shares/artikel/haruskah_sertifikasi_ISO_14001.jpg', 'https://localhost/icc/photos/shares/artikel/header_page/apa-itu-iso-50001-enhaii.jpg', 'catatan-singkat-iso-13485', 'artikel', '1', 1, 0),
(6, '2021-03-23 01:37:17', '2021-03-25 02:13:04', 'ISO 14001:2015', '<p><strong>Sertifikasi Sistem Manajemen Lingkungan ISO 14001</strong></p>\r\n<p>ISO 14001 merupakan standar internasional untuk Sistem Manajemen Lingkungan (EMS) yang saat ini banyak menggunakan EMS di dunia, dengan lebih dari 6.000 sertifikasi di Inggris dan 111.000 di 138 negara di seluruh dunia.</p>\r\n<p>ISO 14001 adalah standar sistem manajemen utama yang menetapkan persyaratan untuk pembentukan dan pemeliharaan EMS. Tiga komitmen mendasar untuk mendukung kebijakan lingkungan untuk memenuhi persyaratan ISO 14001, antara lain:</p>\r\n<ul style=\"list-style-type: circle;\">\r\n<li>pencegahan polusi</li>\r\n<li>kepatuhan dengan hukum yang ada</li>\r\n<li>perbaikan berkelanjutan dari Sistem Manajemen Lingkungan</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<p>Komitmen ini memberikan panduan peningkatan kinerja lingkungan secara keseluruhan. ISO 14001 dapat digunakan sebagai alat; fokus pada aspek lingkungan dari kontrol atau arah aktivitas produk dan layanan Anda yang berkaitan dengan pengelolaan lingkungan; misalnya, emisi udara, tanah, atau air.</p>\r\n<p>Organisasi harus menjelaskan apa yang akan mereka lakukan, mengikuti prosedur dan mencatat upaya mereka untuk menunjukkan kepatuhan dan peningkatan. Anda akan menetapkan tujuan, sasaran dan melaksanakan program untuk meningkatkan kinerja lingkungan Anda yang pada akhirnya akan memberikan keuntungan finansial.</p>\r\n<p>Organisasi perlu mengenali hukum yang berlaku, hukum yang terkait, dan persyaratan terkait lainnya. Hal-hal penting terkait munculnya regulasi pemerintah mengakui bahwa ukuran tingkat kepatuhan dapat diadopsi dan dievaluasi secara berkala untuk memastikan persyaratan tersebut dipahami oleh karyawan dan dapat diterapkan secara efektif.</p>\r\n<p>Standar ISO 14001 disertai dengan ISO 14004, Sistem Manajemen Lingkungan - Panduan umum tentang prinsip, sistem, dan dukungan teknis. Standar ini terdiri dari beberapa bagian, seperti penerapan, implementasi, pemeliharaan dan peningkatan Sistem Manajemen serta pembahasan mengenai penggunaan prinsip-prinsip yang terkait.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Siapa yang dapat menggunakan ISO 14001?</strong></p>\r\n<p>Organisasi dari berbagai jenis, sektor dan ukuran dapat meningkatkan kinerja lingkungannya melalui penerapan standar ini.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Apa keuntungan dari pendaftaran ISO 14001?</strong><br /><strong>Pengelolaan lingkungan yang lebih baik</strong></p>\r\n<p>Identifikasi potensi dampak dan terapkan kontrol dan tindakan untuk menjaga risiko serendah mungkin.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Kepatuhan hukum</strong></p>\r\n<p>Pahami bagaimana persyaratan undang-undang dan peraturan memengaruhi organisasi Anda dan tetap berpegang pada hukum.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Mengurangi biaya pengoperasian</strong></p>\r\n<p>Mencapai efisiensi dalam penggunaan energi dan air dan melalui minimalisasi limbah berarti menghemat uang.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Hubungan pemangku kepentingan yang lebih baik</strong></p>\r\n<p>Jadikan lingkungan sebagai prioritas dan orang-orang akan merespons organisasi Anda secara positif.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Kredensial bisnis yang terbukti</strong></p>\r\n<p>Verifikasi independen terhadap standar yang diakui berbicara banyak dan meningkatkan merek Anda.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Kemampuan untuk memenangkan lebih banyak bisnis</strong></p>\r\n<p>Spesifikasi pengadaan sering kali memerlukan sertifikasi sebagai syarat untuk memasok, sehingga mendapatkan pintu terbuka standar.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Bagaimana cara mendaftar sertifikasi ISO 14001?</strong><br /><strong>Proses pendaftaran mengikuti tiga langkah sederhana:</strong></p>\r\n<p>Pemohon mengajukan permohonan pendaftaran dengan mengisi kuesioner EMS, audit ISO 14001 yang dilakukan oleh ITCC International. Ini terdiri dari dua kunjungan audit utama dengan menggunakan formulir Audit Sertifikasi Awal.</p>\r\n<p>Permohonan pendaftaran disetujui oleh ITCC Internasional, langkah selanjutnya harus dilakukan oleh klien. Pelestarian sertifikasi ISO 14001 dikonfirmasi melalui program audit pengawasan tahunan dan proses sertifikasi selama tiga tahun setelah waktu sertifikasi ISO 14001.</p>', 'https://localhost/icc/photos/shares/artikel/artikel_penjelasan_iso_21001.jpg', 'https://localhost/icc/photos/shares/artikel/header_page/iso-14001-enhaii-2.jpg', 'iso-14001-2015', 'service', '1', 1, 0),
(7, '2021-03-23 01:38:27', '2021-03-25 02:20:05', 'OHSAS 18001:2017', '<p><strong>Sistem Manajemen Kesehatan dan Keselamatan Kerja ISO 18001</strong></p>\r\n<p>OHSAS 18001 adalah standar manajemen kesehatan dan keselamatan kerja. Ini mendefinisikan satu set persyaratan manajemen kesehatan dan keselamatan kerja (K3) untuk sistem manajemen kesehatan dan keselamatan kerja (OHSMS).</p>\r\n<p>Ini dikembangkan oleh OHSAS Project Group, sebuah konsorsium yang terdiri dari 43 organisasi dari 28 negara. Konsorsium ini mencakup badan standar nasional, registrar (badan sertifikasi), konsultan, dan lembaga kesehatan dan keselamatan kerja.</p>\r\n<p>Versi baru OHSAS 18001 adalah standar OHSAS 18001: 2007 yang resmi diterbitkan pada bulan Juli 2007. Ini membatalkan dan menggantikan OHSAS 18001: 1999. Sejak pertama kali diterbitkan pada tahun 1999, OHSAS 18001 dengan cepat menjadi standar manajemen kesehatan dan keselamatan kerja internasional yang paling banyak digunakan. Ini berlaku untuk semua jenis organisasi. Tidak peduli apa ukurannya atau apa fungsinya.</p>\r\n<p>Tujuan OHSAS 18001 adalah untuk membantu organisasi mengelola dan mengendalikan risiko kesehatan dan keselamatan kerja serta meningkatkan kinerja kesehatan dan keselamatan kerja. Mereka dapat mencapai tujuan ini dengan mengembangkan sistem manajemen kesehatan dan keselamatan kerja (SMK3) yang sesuai dengan standar.</p>\r\n<p>SMK3 adalah jaringan elemen yang saling terkait. Elemen-elemen ini mencakup tanggung jawab, wewenang, hubungan, fungsi, aktivitas, proses, praktik, prosedur, dan sumber daya. Elemen-elemen ini digunakan untuk menetapkan kebijakan, rencana, program, dan tujuan K3.</p>\r\n<p><br /><strong>Siapa yang dapat menggunakan OHSAS 18001?</strong></p>\r\n<p>Standar ini berlaku untuk organisasi mana pun yang ingin menghilangkan atau meminimalkan risiko bagi karyawan dan pemangku kepentingan lainnya yang terkait langsung dengan risiko aspek kesehatan dan keselamatan yang menyertai aktivitas yang ada.</p>\r\n<p>Banyak organisasi memiliki elemen yang disyaratkan oleh OHSAS 18001 tersedia di titik penggunaan yang dapat saling melengkapi untuk menciptakan sistem manajemen terintegrasi yang lebih baik sesuai dengan persyaratan standar ini.</p>\r\n<p>Organisasi yang menerapkan OHSAS 18001 memiliki struktur manajemen yang diatur oleh wewenang dan tanggung jawab perusahaan, target perbaikan yang jelas, pencapaian hasil yang dapat diukur dan pendekatan terstruktur untuk penilaian risiko. Demikian pula pengawasan terhadap kegagalan manajemen, mengaudit kinerja dan melakukan review terhadap kebijakan dan tujuan kesehatan dan keselamatan kerja.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Apa keuntungan dari registrasi OHSAS 18001?</strong><br /><strong>Kepuasan pelanggan</strong></p>\r\n<p>melalui pengiriman produk yang secara konsisten memenuhi persyaratan pelanggan dengan perlindungan kesehatan dan properti pelanggan.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Mengurangi biaya pengoperasian</strong></p>\r\n<p>dengan mengurangi waktu kerja yang hilang karena kecelakaan dan penurunan kesehatan dan pengurangan biaya sehubungan dengan biaya dan kompensasi legal.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Meningkatkan hubungan dengan pihak terkait</strong></p>\r\n<p>perlindungan kesehatan dan properti karyawan, pelanggan, dan mitra.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Kepatuhan hukum</strong></p>\r\n<p>dengan memahami bagaimana persyaratan peraturan dan perundang-undangan yang memiliki pengaruh tertentu pada organisasi dan pelanggan Anda.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Peningkatan pengendalian manajemen risiko</strong></p>\r\n<p>dengan konsistensi terus menerus dan adanya ketertelusuran produk dan layanan.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Tercapainya kepercayaan masyarakat pada bisnis</strong></p>\r\n<p>dibuktikan dengan verifikasi pihak ketiga independen terhadap standar yang diakui.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Kemampuan untuk memenangkan lebih banyak bisnis</strong></p>\r\n<p>khususnya pemenuhan spesifikasi pengadaan memerlukan sertifikasi sebagai persyaratan penyediaan barang dan jasa.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Bagaimana cara mendaftar sertifikasi OHSAS 18001?</strong><br /><strong>Proses pendaftaran mengikuti tiga langkah sederhana:</strong></p>\r\n<p>Pemohon mengajukan permohonan registrasi dengan mengisi kuesioner OHSAS 18001</p>\r\n<p>Asesmen terhadap OHSAS 18001 dilakukan oleh ITCC International - dimana suatu organisasi harus dapat menunjukkan bahwa manajemen mutu memang telah benar-benar berjalan setidaknya dalam jangka waktu tiga bulan sesuai seluruh urutan (siklus) audit internal.</p>\r\n<p>Pendaftaran diberikan oleh ITCC International, tahap selanjutnya harus dilakukan oleh klien. Program tahunan pengawasan kunjungan audit (surveillance) harus dilaksanakan sepenuhnya dan proses sertifikasi ulang setelah tiga tahun berlakunya sertifikasi OHSAS 18001.</p>', 'https://localhost/icc/photos/shares/artikel/standar_usaha_hotel_1.jpg', 'https://localhost/icc/photos/shares/artikel/header_page/apa-itu-iso-22000-enhaii.jpg', 'ohsas-18001-2017', 'service', '1', 1, 0),
(8, '2021-03-25 02:36:23', '2021-03-25 02:36:23', 'ISO 22000:2015', '<p><strong>Sertifikasi Sistem Manajemen Keamanan Pangan ISO 22000</strong></p>\r\n<p>ISO 22000 adalah standar sistem manajemen keamanan pangan generik. Ini mendefinisikan satu set persyaratan keamanan pangan umum yang berlaku untuk semua organisasi dalam rantai makanan.</p>\r\n<p>Jika organisasi Anda adalah bagian dari rantai makanan, ISO 22000 ingin Anda menetapkan sistem manajemen keamanan pangan (FSMS). Kemudian Anda ingin menggunakan sistem ini untuk memastikan bahwa produk makanan tidak menyebabkan efek buruk bagi kesehatan manusia.</p>\r\n<p>ISO 22000 selaras dengan sistem manajemen lain, seperti ISO 9001 dan ISO 14001, untuk memungkinkan integrasi sistem yang efektif.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Siapa yang dapat menggunakan ISO 22000?</strong></p>\r\n<p>ISO 22000 dapat digunakan oleh organisasi mana pun yang secara langsung atau tidak langsung terlibat dalam rantai makanan termasuk:</p>\r\n<ul style=\"list-style-type: circle;\">\r\n<li>Produsen utama</li>\r\n<li>Prosesor</li>\r\n<li>Produsen</li>\r\n<li>Penyedia layanan makanan</li>\r\n<li>Penyedia layanan lainnya</li>\r\n<li>Pemasok produk</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<p>Singkatnya, sebagian atau seluruh persyaratan ISO 22000 akan berlaku untuk produk apa pun yang berhubungan dengan industri makanan atau rantai makanan.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Apa keuntungan dari pendaftaran ISO 22000?</strong><br /><strong>Kepuasan pelanggan</strong></p>\r\n<p>Melalui pengiriman produk yang secara konsisten memenuhi persyaratan pelanggan termasuk kualitas, keamanan dan legalitas.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Mengurangi biaya pengoperasian</strong></p>\r\n<p>Melalui peningkatan proses yang berkelanjutan dan efisiensi operasional yang dihasilkan.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Efisiensi operasional</strong></p>\r\n<p>Dengan mengintegrasikan program prasyarat (PRP &amp; OPRP), HACCP dengan filosofi Plan-Do-Check-Act ISO 9001 untuk meningkatkan efektivitas Sistem Manajemen Keamanan Pangan.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Hubungan pemangku kepentingan yang lebih baik</strong></p>\r\n<p>Termasuk staf, pelanggan, dan pemasok.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Kepatuhan hukum</strong></p>\r\n<p>Dengan memahami bagaimana persyaratan undang-undang dan peraturan memengaruhi organisasi dan pelanggannya serta menguji kepatuhan melalui audit internal dan tinjauan manajemen</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Manajemen risiko yang lebih baik</strong></p>\r\n<p>Melalui konsistensi dan ketertelusuran produk yang lebih besar.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Kredensial bisnis yang terbukti</strong></p>\r\n<p>Melalui verifikasi independen terhadap standar yang diakui.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Kemampuan untuk memenangkan lebih banyak bisnis</strong></p>\r\n<p>Khususnya di mana spesifikasi pengadaan memerlukan sertifikasi sebagai syarat untuk memasok.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Bagaimana cara mendaftar sertifikasi ISO 22000?</strong></p>\r\n<p><strong>Proses pendaftaran mengikuti tiga langkah sederhana:</strong></p>\r\n<p>Pemohon mengajukan permohonan pendaftaran dengan mengisi kuesioner ISO 22000, Ini memberikan informasi tentang organisasi Anda sehingga kami dapat menentukan ruang lingkup penilaian secara akurat.</p>\r\n<p>Penilaian terhadap ISO 22000 dilakukan oleh ITCC Internasional - ini terdiri dari dua kunjungan wajib yang membentuk Audit Sertifikasi Awal (dijelaskan di bawah). Harap dicatat bahwa organisasi harus dapat menunjukkan bahwa sistem manajemen mutunya telah beroperasi penuh minimal selama tiga bulan dan telah menjalani siklus audit internal penuh.</p>\r\n<p>Pendaftaran diberikan oleh ITCC International, tahap selanjutnya harus dilakukan oleh klien. Program tahunan pengawasan kunjungan audit (surveillance) harus dilaksanakan sepenuhnya dan proses sertifikasi ulang setelah tiga tahun berlakunya sertifikasi ISO 22000.</p>', 'https://localhost/icc/photos/shares/artikel/tentang_penjelasan_iso_22000.jpg', 'https://localhost/icc/photos/shares/artikel/header_page/apa-itu-iso-22000-enhaii.jpg', 'iso-22000-2015', 'service', '1', 1, 0),
(9, '2021-03-25 02:40:59', '2021-03-25 02:40:59', 'ISO 13485:2016', '<p><strong>Sistem Manajemen Alat Kesehatan ISO 13485</strong></p>\r\n<p>ISO 13485 didasarkan pada pendekatan model proses ISO 9001: 2000 dan merupakan standar sistem manajemen yang secara khusus dikembangkan untuk pembuatan perangkat medis. Tujuan utamanya adalah untuk memfasilitasi persyaratan peraturan perangkat medis yang selaras.<br />Standar tersebut berisi persyaratan khusus untuk pembuatan, pemasangan dan servis serta panggilan untuk:</p>\r\n<ul style=\"list-style-type: circle;\">\r\n<li>Penerapan Sistem Manajemen Mutu dengan beberapa peningkatan</li>\r\n<li>Pendekatan Manajemen Risiko untuk pengembangan produk dan realisasi produk</li>\r\n<li>Validasi proses</li>\r\n<li>Kepatuhan dengan persyaratan hukum dan peraturan</li>\r\n<li>Ketertelusuran produk yang efektif dan sistem penarikan kembali</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<p><strong>Siapa yang dapat menggunakan ISO 13485?</strong></p>\r\n<p>ISO 13485 berisi persyaratan yang penting untuk setiap organisasi yang beroperasi di tingkat mana pun dalam perangkat medis dan rantai pasokan farmasi. Hal ini sangat relevan untuk produsen yang ingin menunjukkan persyaratan peraturan yang berlaku, dan oleh organisasi yang layanannya mendukung produsen perangkat medis.</p>\r\n<p><br /><strong>Apa keuntungan dari Pendaftaran ISO 13485?</strong><br /><strong>Kepuasan pelanggan</strong></p>\r\n<p>melalui pengiriman produk yang secara konsisten memenuhi persyaratan pelanggan serta persyaratan kualitas, keamanan, dan hukum.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Mengurangi biaya pengoperasian</strong></p>\r\n<p>melalui peningkatan proses yang berkelanjutan dan efisiensi operasional yang dihasilkan.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Hubungan pemangku kepentingan yang lebih baik</strong></p>\r\n<p>termasuk staf, pelanggan, dan pemasok.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Kepatuhan hukum</strong></p>\r\n<p>dengan memahami bagaimana persyaratan undang-undang dan peraturan memengaruhi organisasi dan pelanggannya.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Manajemen risiko yang lebih baik</strong></p>\r\n<p>melalui konsistensi dan ketertelusuran produk yang lebih baik dan penggunaan teknik manajemen risiko.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Kemampuan untuk memenangkan lebih banyak bisnis</strong></p>\r\n<p>Spesifikasi pengadaan sering kali memerlukan sertifikasi sebagai syarat untuk memasok, jadi memperoleh sertifikasi membuka pintu.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Kredensial bisnis yang terbukti</strong></p>\r\n<p>melalui verifikasi independen terhadap standar yang diakui.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Kemampuan untuk memenangkan lebih banyak bisnis</strong></p>\r\n<p>terutama jika spesifikasi pengadaan memerlukan sertifikasi sebagai syarat untuk memasok di sektor yang diatur dengan ketat.</p>', 'https://localhost/icc/photos/shares/artikel/11_prinsip_ISO_21001_2018.jpg', 'https://localhost/icc/photos/shares/artikel/header_page/iso-27001-enhaii.jpg', 'iso-13485-2016', 'service', '1', 1, 0),
(10, '2021-03-25 02:46:43', '2021-03-25 02:46:43', 'ISO/TS 16949:2009', '<p><strong>Sistem Manajemen Kualitas Otomotif ISO / TS 16949</strong></p>\r\n<p>ISO / TS 16949 dikembangkan bersama oleh anggota The International Automotive Task Force (IATF) dan diserahkan ke Organisasi Internasional untuk Standardisasi (ISO) untuk persetujuan dan publikasi. Dokumen tersebut merupakan persyaratan sistem mutu otomotif yang umum berdasarkan ISO 9001: 2008, dan persyaratan khusus pelanggan dari sektor otomotif.</p>\r\n<p>ISO / TS 16949 menekankan pengembangan sistem manajemen mutu yang berorientasi pada proses yang menyediakan:</p>\r\n<ul style=\"list-style-type: circle;\">\r\n<li>Perbaikan berkelanjutan</li>\r\n<li>Pencegahan cacat</li>\r\n<li>Pengurangan variasi dan pemborosan dalam rantai pasokan</li>\r\n<li>Tujuannya adalah untuk memenuhi kebutuhan pelanggan secara efisien dan efektif</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<p><strong>Siapa yang dapat menggunakan ISO / TS 16949?</strong></p>\r\n<p>Standar ini berlaku untuk semua organisasi yang memproduksi komponen, rakitan, dan suku cadang untuk disuplai ke industri otomotif.</p>\r\n<p>Manufaktur didefinisikan sebagai proses pembuatan atau fabrikasi bahan produksi, suku cadang produksi atau servis, perakitan atau perlakuan panas, pengelasan, pengecatan, pelapisan atau layanan finishing lainnya.</p>\r\n<p><br /><strong>Apa keuntungan dari Pendaftaran ISO / TS 16949?</strong><br /><strong>Kepuasan pelanggan</strong></p>\r\n<p>dengan pengiriman produk secara konsisten memenuhi kebutuhan pelanggan.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Mengurangi biaya pengoperasian</strong></p>\r\n<p>dengan perbaikan terus-menerus dari proses dan efisiensi operasional yang dihasilkan berarti menghemat uang.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Hubungan pemangku kepentingan yang lebih baik</strong></p>\r\n<p>termasuk staf, pelanggan, dan pemasok.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Kredensial bisnis yang terbukti</strong></p>\r\n<p>Verifikasi independen terhadap standar industri yang diakui secara global berbicara banyak.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Kemampuan untuk memenangkan lebih banyak bisnis</strong></p>\r\n<p>Spesifikasi pengadaan sering kali memerlukan sertifikasi sebagai syarat untuk memasok, jadi memperoleh sertifikasi membuka pintu.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Pengakuan internasional</strong></p>\r\n<p>Keyakinan tambahan untuk sumber global.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Pendekatan kualitas yang konsisten</strong></p>\r\n<p>Pendekatan umum dalam rantai pasokan untuk pengembangan pemasok / subkontraktor.</p>', 'https://localhost/icc/photos/shares/artikel/tentang_apa_itu_iso_50001_lengkap.jpg', 'https://localhost/icc/photos/shares/artikel/header_page/iso-50001-enhaii.jpg', 'iso-ts-16949-2009', 'service', '1', 1, 0),
(11, '2021-10-15 05:49:30', '2021-10-15 05:49:30', 'Testing Service', '<p>testing</p>', 'https://localhost/icc/cms_company_profile/photos/shares/21001.jpg', 'https://localhost/icc/cms_company_profile/photos/shares/2service1920x600.png', 'testing-service', 'service', '1', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `label`
--

CREATE TABLE `label` (
  `id_label` int(11) NOT NULL,
  `nama_label` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `label`
--

INSERT INTO `label` (`id_label`, `nama_label`, `created_at`, `updated_at`) VALUES
(1, 'Sertifikasi Managemen', '2021-03-19 06:35:38', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_08_31_082802_create_proposals_table', 2),
(5, '2020_08_31_083857_create_marketing_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('tester1k3@gmail.com', '$2y$10$1l1dRJTLczswx3Ee/W1jYeT4oJoQX7Tw71TwRF0cNCIoR221mH18u', '2020-09-03 08:01:32'),
('hfarhandika@gmail.com', '$2y$10$oyRruFlBVAhFz8AMHYTGueFGgsCOec1UmIFow2ABb2FXJmMYmPWWS', '2020-09-11 02:20:27'),
('gifaralpar@gmail.com', '$2y$10$ZrCEuJNNcU208f9HZHHXEuCkqzgZTqle8.oCgefkL9f.AlCVtLTau', '2020-10-16 06:45:56'),
('dika1k10@gmail.com', '$2y$10$64nJm2enB5ACkQIXqgfA6uTWqgGr2A.rFpSIVC9ZcDakBE4C2HPCW', '2020-10-16 08:22:00');

-- --------------------------------------------------------

--
-- Table structure for table `tag`
--

CREATE TABLE `tag` (
  `id_tag` int(11) NOT NULL,
  `nama_tag` varchar(100) NOT NULL,
  `id_artikel` int(4) NOT NULL,
  `page_type` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tag`
--

INSERT INTO `tag` (`id_tag`, `nama_tag`, `id_artikel`, `page_type`, `created_at`, `updated_at`) VALUES
(1, 'ISO 9001', 1, 'service', '2021-03-19 06:37:18', '2021-03-19 06:37:18'),
(2, 'ISO 27001', 2, 'service', '2021-03-19 06:39:55', '2021-03-19 06:39:55'),
(3, 'Keamanan', 2, 'service', '2021-03-19 06:39:55', '2021-03-19 06:39:55'),
(21, 'ISO 14001', 4, 'artikel', '2021-03-25 03:02:55', '2021-03-25 03:02:55'),
(23, 'hahaha', 11, 'service', '2021-10-15 05:49:30', '2021-10-15 05:49:30'),
(11, 'ISO 14001', 6, 'service', '2021-03-24 01:41:38', '2021-03-24 01:41:38'),
(14, 'OHSAS 18001', 7, 'service', '2021-03-25 02:20:05', '2021-03-25 02:20:05'),
(20, 'ISO 22000', 3, 'artikel', '2021-03-25 03:00:46', '2021-03-25 03:00:46'),
(19, 'ISO', 3, 'artikel', '2021-03-25 03:00:46', '2021-03-25 03:00:46'),
(22, 'ISO 13485', 5, 'artikel', '2021-03-25 03:03:50', '2021-03-25 03:03:50'),
(15, 'ISO 22000', 8, 'service', '2021-03-25 02:36:23', '2021-03-25 02:36:23'),
(16, 'ISO 13485', 9, 'service', '2021-03-25 02:41:00', '2021-03-25 02:41:00'),
(17, 'ISO 16949', 10, 'service', '2021-03-25 02:46:43', '2021-03-25 02:46:43'),
(18, 'TS 16949', 10, 'service', '2021-03-25 02:46:43', '2021-03-25 02:46:43'),
(24, 'jajaja', 11, 'service', '2021-10-15 05:49:30', '2021-10-15 05:49:30'),
(25, 'lalalal', 11, 'service', '2021-10-15 05:49:30', '2021-10-15 05:49:30');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` int(11) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_id` int(11) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `phone`, `state`, `email`, `role`, `email_verified_at`, `password`, `status_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', NULL, NULL, 'hfarhandika@gmail.com', 1, NULL, '$2y$10$lzCTKfCrT.YVtaIMfhU7i.qMJQnJfngDaJ1NDH7K2lpKeTkkb4D0u', NULL, 'axOaGjBm54Mf5YanpDGeiOW5vKYVdOwZgNjbRHW0BD0Bn6p2QMeK96W97bn5', '2020-08-31 01:33:20', '2020-09-08 03:32:24'),
(4, 'Sertifikasi', NULL, NULL, 'tester123@gmail.com', 2, NULL, '$2y$10$NWpw92sX5MapAG.FqRmhg.1MhTUySu89349/bcy7nZNSpr371eanC', NULL, 'JytLIi6srMvIJPIs8sUus0VRJte5scAhBqjOYqYFxDokDiqYPEXWk5HwxGoM', '2020-09-08 02:07:11', '2020-09-08 03:17:54'),
(5, 'Admin', NULL, NULL, 'adm@enhaiimandiri.com', 1, NULL, '$2y$10$pgO.RnWiMZEiVsn0hPQVO.IiDeh9dUJMJnHjIG/XSMpALW5K7N72e', NULL, 'byURnyv6NOCPMVD5iTxSFoEWoP7IeqKJDgybuc9nGVAu2CDpNtxYohXsNUHh', '2020-09-09 01:16:55', '2020-09-11 02:23:21'),
(6, 'Hilmi Farhandika', NULL, NULL, 'dika1k10@gmail.com', 2, NULL, '$2y$10$dR54SY3K/8dzZiLTKw.j1OLSXBXWTex2axwt6rAMt.DM2R0jTZlNy', NULL, '4Ac5Olfn2dJMp2YUtmN9hRIEURfIAOLFq9Vt26P06EDDWnwk6RkFbbcMFzfv', '2020-09-09 07:19:17', '2020-09-09 07:19:17'),
(7, 'Ghifar', NULL, NULL, 'gifaralpar@gmail.com', 1, NULL, '$2y$10$bLLG7ej5x8eozXCAuM0yvePcl475bJfe42zcKU1etrXYT//jptAle', NULL, 'MsPGjmExVvMexmhgZyoe3XF3upKWD02sVsH85XCtbHJJE0sIA1iFY84ADF6W', '2020-10-16 06:45:10', '2020-10-16 06:45:10'),
(8, 'Tester 123', NULL, NULL, 'dika1k5@gmail.com', 2, NULL, '$2y$10$s8qucTQ853YX4a72BvvkUeB3qmm6IsmwpsTWV1Rp7nfUrj5izc3gS', NULL, NULL, '2020-12-22 08:43:23', '2020-12-22 08:43:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id_faq`);

--
-- Indexes for table `guide`
--
ALTER TABLE `guide`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `label`
--
ALTER TABLE `label`
  ADD PRIMARY KEY (`id_label`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `tag`
--
ALTER TABLE `tag`
  ADD PRIMARY KEY (`id_tag`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id_faq` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `guide`
--
ALTER TABLE `guide`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `label`
--
ALTER TABLE `label`
  MODIFY `id_label` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tag`
--
ALTER TABLE `tag`
  MODIFY `id_tag` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
