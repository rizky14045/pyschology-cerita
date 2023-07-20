-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 20, 2023 at 08:07 PM
-- Server version: 10.5.20-MariaDB-cll-lve
-- PHP Version: 8.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `n1576244_bagikan`
--

-- --------------------------------------------------------

--
-- Table structure for table `albums`
--

CREATE TABLE `albums` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `album_image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `albums`
--

INSERT INTO `albums` (`id`, `album_image`, `created_at`, `updated_at`) VALUES
(1, 'bagikan-cerita-album-1681029791.jpg', '2023-04-02 00:51:56', '2023-04-09 01:43:21'),
(2, 'album29.jpg', '2023-04-07 15:56:53', '2023-04-07 15:56:53'),
(3, 'album14.jpg', '2023-04-07 16:00:30', '2023-04-07 16:00:30'),
(5, 'bagikan-cerita-album-1684133728.jpg', '2023-04-07 16:15:06', '2023-05-15 06:55:28');

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `banner_image` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `body` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `user_id`, `slug`, `banner_image`, `description`, `body`, `created_at`, `updated_at`) VALUES
(3, 'Saat berduka tidak selamanya hanya bisa bersedih', 3, 'saat-berduka-tidak-selamanya-hanya-bisa-bersedih', 'bagikan-cerita-banner-1683881218.jpg', 'Segala sesuatu kehidupan yang ada di bumi ini tentunya tidak ada yang abadi. Termaksud orang yang kita sayangi bahkan hewan peliharaan yang kita punya sekalipun. Seiring berjalannya waktu, dalam kehidupan sosial kita saling melengkapi dan membutuhkan satu sama lain. Dalam hubungan sosial ini, manusia akan membangun sebuah koneksi, yang dimana terjalin sebuah hubungan keluarga dan pertemanan. Hubungan yang terjalin setiap hari akan membuat manusia menjadi ketergantungan, sehingga Ketika sesorang manusia pergi / meninggalkan dunia akan meninggalkan sebuah luka yang mendalam bagi kita.', '<p style=\"text-align:justify\"><span style=\"color:#000000\"><strong>Oleh: Devina Winarto, M. Psi., Psikolog</strong></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">Segala sesuatu kehidupan yang ada di bumi ini tentunya tidak ada yang abadi. Termaksud orang yang kita sayangi bahkan hewan peliharaan yang kita punya sekalipun. Seiring berjalannya waktu, dalam kehidupan sosial kita saling melengkapi dan membutuhkan satu sama lain. Dalam hubungan sosial ini, manusia akan membangun sebuah koneksi, yang dimana terjalin sebuah hubungan keluarga dan pertemanan. Hubungan yang terjalin setiap hari akan membuat manusia menjadi ketergantungan, sehingga Ketika sesorang manusia pergi/ meninggalkan dunia akan meninggalkan sebuah luka yang mendalam bagi kita. </span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">Reaksi ini sangatlah normal, dan kita kenal sebagai rasa &ldquo;<strong>berduka&rdquo; (Grieving) . </strong>Semakin besar rasa kasih kita pada sosok yang telah meninggal, maka semakin kuat rasa duka yang kita rasakan. <em>Berduka (Grieving) </em>sendiri merupakan pengalaman yang membawa kesedihan yang mendalam setelah mengalami kehilangan. Seseorang yang mengalami <em>Grief </em>&nbsp;umumnya akan mengalami ketidaknyamanan psikologis seperti; kecemasan akan perpisahan, penyesalan, kebingungungan, rasa kosong dan kesendirian, serta ketakutan akan masa depan. </span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">Menurut K&uuml;bler-Ross &amp; Kessler (2009), seseorang yg sedang dalam kondisi berduka/ griefe akan melalui enam tahap. Tahapan berikut merupakan:</span></span></span></p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<ol>\r\n	<li style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">Denial ( penyangkalan)</span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">Anger ( kemarahan)</span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">Berganing (tawar menawar) </span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">Depression (depresi)</span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">Acceptance ( penderimaan)</span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">Menemukan makna hidup baru (Finding a meaning)</span></span></span></li>\r\n</ol>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">Tidak hanya efek psikologis, kedukaan juga dapat menimbulkan efek psikis. Contoh dari efek psikis dan psikologis yang dialami, diantaranya adalah : </span></span></span></p>\r\n\r\n<ul>\r\n	<li style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">Iritasi dengan orang lain </span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">Merasa Kebal</span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">Merasa pedih/ kehidupan pedih </span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">Menjauhkan diri dari orang lain </span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">Pikiran di penuhi oleh kenangan dengan almarhum</span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">Tidak mampu menunjukan rasa senang/ keinginan untuk bersenang-senang</span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">Dan lainnya</span></span></span></li>\r\n</ul>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">Sedangkan, ciri efek psikis yang dapat dirasakan diantaranya:</span></span></span></p>\r\n\r\n<ul>\r\n	<li style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">Merasa Lelah</span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">Gangguan pencernaan</span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">Pegal-pegal </span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">Sakit dada</span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">Sakit kepala</span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">Sulit tidur</span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">Dll</span></span></span></li>\r\n</ul>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">Berikut ini merupakan cara berduka yang sehat menurut K&uuml;bler-Ross &amp; Kessler (2009)</span></span></span></p>\r\n\r\n<ol>\r\n	<li style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">Untuk Berusaha melewati rasa sakit </span></span></span></li>\r\n</ol>\r\n\r\n<ul>\r\n	<li style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">Eksplorasi dan regulasi emosi yang baik </span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">Menderima emosi dan perasaan yang di rasakan dan membiccarakan tentang kepergian almarhum</span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">Menyadari ketakutan dan kecemasan yang ada dalam diri</span></span></span></li>\r\n</ul>\r\n\r\n<p style=\"margin-left:96px; text-align:justify\">&nbsp;</p>\r\n\r\n<ol start=\"2\">\r\n	<li style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">Untuk Menyesuaikan hidup tanpa almarhum</span></span></span></li>\r\n</ol>\r\n\r\n<ul>\r\n	<li style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">Mengatur perubahan dalam rutinitas</span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">Mangatur perubahan dalam peran</span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">Menjaga diri dan orang lain dengan tetap memiliki pola makan dan istirahat yang sehat </span></span></span></li>\r\n</ul>\r\n\r\n<ol start=\"3\">\r\n	<li style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">Untuk Menderima Realita sebuah kehilangan </span></span></span></li>\r\n</ol>\r\n\r\n<ul>\r\n	<li style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">Tidak memberikan batas waktu</span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">Mencari arti hidup baru </span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">Mencari closure secukupnya ( bukan letting go)</span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">Tidak mengatakan &ldquo;Selamat tinggal&rdquo;</span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">Mencari bantuan orang lain untuk melakukan grief</span></span></span></li>\r\n</ul>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">Penting bagi kita untuk kemudian mengenali tanda-tanda kedukaan yang tidak sehat. Ketika seseorang mengalami rasa berduka yang kuat dan tidak mampu menghadapi masalah yang terjadi, maka mereka disarankan untuk mendapatkan bantuan professional. Berikut ini adalah beberapa ciri berduka yang butuh dibantu oleh profesional: </span></span></span></p>\r\n\r\n<ul>\r\n	<li style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">Merasakan emosi yang kuat dan tidak dapat mengatasi rasa kehilangan </span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">Kesulitan fokus pada hal yang dikerjakan dan terpaku terhadap rasa kehilangan terus menerus</span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">Terlalu fokus tentang rasa kehilangan/ sebaliknya sangat menghindari rasa kehilangan tersebut</span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">Tidak dapat menderima kenyataan yang ada </span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">Merasa kurang memiliki tujuan dan arti hidup tanpa almarhum</span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">Kehilangan identitas</span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">Ketidakmampuan dalam melakukan aktifitas normal / rutinitas hidup </span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">Menjauhi intreaksi sosial dan melakukan isolasi</span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">Berharap ingin pergi bersama almarhum</span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">Memiliki keinginan bunuh diri</span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">Merasa bersalah dan berpikir bahwa ada kemungkinan kepergian almarhum dapat dihindari</span></span></span></li>\r\n</ul>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">Ingatlah bahwa kita dapat menemukan keindahan dan koneksi positif dalam sebuah kedukaan. Kesedihan yang anda rasakan dapat diuraikan menjadi suatu hal berharga yang dapat kita gunakan untuk menjaga hubungan dengan sosok yang telah tiada.</span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">Jika kamu mengalami hal diatas dan membuat hidupmu tidak menentu, kamu bisa menghubungi<a href=\"https://wa.me/6281399991459\" target=\"_blank\"> </a></span></span></span><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><a href=\"https://wa.me/6281399991459\" target=\"_blank\"><span style=\"color:#3498db\">bagikanceritamu.com</span></a></span></span></p>', '2023-05-12 08:46:58', '2023-05-25 10:13:19'),
(4, 'Cara Orang Tua Menjaga Remaja dari Paparan Negatif Sosial Media', 3, 'cara-orang-tua-menjaga-remaja-dari-paparan-negatif-sosial-media', 'bagikan-cerita-banner-1684134571.jpg', 'Peran orang tua dalam pengasuhan anak di era teknologi seperti saat ini menjadi lebih menantang daripada era sebelum teknologi berkembang pesat. Hal ini utamanya dirasakan oleh orang tua yang memiliki anak berusia remaja. Kita dapat melihat dari kepemilikan gadget pribadi (bisa berupa HP, laptop, tablet, bahkan headphone) untuk remaja sebagai hal yang lumrah.', '<p><strong><span style=\"color:#000000\">Oleh: Khadijah Auliaur Rohmaani, S.Psi., M.Psi., Psikolog</span></strong></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\">Peran orang tua dalam pengasuhan anak di era teknologi seperti saat ini menjadi lebih menantang daripada era sebelum teknologi berkembang pesat. Hal ini utamanya dirasakan oleh orang tua yang memiliki anak berusia remaja. Kita dapat melihat dari kepemilikan gadget pribadi (bisa berupa HP, laptop, tablet, bahkan headphone) untuk remaja sebagai hal yang lumrah. Bahkan rasanya seperti ketinggalan zaman ketika orang tua tidak mampu memberikan akses gadget pada anaknya. Didukung juga dengan situasi pandemi COVID-19 yang membuat anak-anak terbiasa menggunakan gadget secara intens untuk mendukungnya melakukan pembelajaran jarak jauh.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\">Tidak dapat dipungkiri bahwa anak-anak, terutama di usia remaja, lebih cepat mengikuti perkembangan teknologi dan berbagai aplikasi yang ada di gadget dibandingkan orang tuanya. Hal ini juga yang dapat menjadi sumber berbagai konﬂik orang tua dan remaja. Menurut Pakar Perkembangan Psikososial Erik Erikson, remaja di usia 11-18 tahun sedang berada pada tahap pembentukan identitas diri. Oleh sebab itu, remaja akan lebih banyak mencari tahu dunia luar, membangun hubungan sosial yang luas, dan mulai menjauh dari orang tuanya.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\">Kemudahan akses informasi yang seringkali didapatkan dari paparan berbagai media sosial oleh remaja semakin melebarkan perbedaan pandangan antara orang tua dan remaja. Mulai muncul perbedaan value yang dimiliki remaja dengan yang ditanamkan orang tuanya dan menurunnya kepercayaan remaja pada orang tua. Misalnya, remaja mengidolakan boyband/girlband tertentu sehingga abai dengan pekerjaan rumah, remaja lebih familiar dengan berbagai istilah kesehatan mental sedangkan orang tua masih menganggap tabu, atau remaja mulai terbuka dengan LGBTQ+ dan orang tua cenderung lebih tertutup ketika mendiskusikan hal tersebut.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\">Lalu, bagaimana cara orang tua menjaga remaja dari paparan negatif sosial media dan akses informasi yang sangat cepat seperti saat ini?</span></p>\r\n\r\n<div class=\"WordSection1\">\r\n<ol>\r\n	<li style=\"text-align:left\"><span style=\"color:#000000\">Menjadi teman</span></li>\r\n</ol>\r\n</div>\r\n\r\n<div class=\"WordSection2\">\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\">Orang tua terbiasa berperan sebagai &lsquo;sosok yang lebih berkuasa&rsquo; di rumah. Hal tersebut yang umumnya membuat remaja merasa tidak dipahami dan sulit bersikap terbuka pada orang tuanya. Oleh sebab itu, orang tua perlu menjadi teman untuk remaja agar hubungan keduanya lebih nyaman untuk saling berbagi cerita atau pengalaman masing-masing. Orang tua bisa memulai dengan lebih dulu mengungkapkan perasaan, pikiran, dan keinginannya kepada anak ketika anak melakukan sesuatu yang tidak diharapkannya dibandingkan langsung meluruskan dengan perintah dan intonasi yang tidak bersahabat.</span></p>\r\n\r\n<ol start=\"2\">\r\n	<li style=\"text-align:justify\"><span style=\"color:#000000\">Menunjukkan Rasa Ingin Tahu</span></li>\r\n</ol>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\">Ketika orang tua tahu remaja mulai memiliki pandangan atau <em>value </em>berbeda dengan yang selama ini sudah ditanamkan di dalam keluarga, orang tua perlu lebih dulu mengelola emosinya sebelum melakukan konfrontasi pada anak. Setelah itu, orang tua dapat bertanya kepada anak dengan menunjukkan rasa ingin tahu yang tulus tentang apa yang dipikirkan dan dipahami anak tentang topik tersebut. Orang tua perlu menahan diri agar tidak langsung memberi nasihat pada anak tetapi berusaha membuat ruang diskusi sehingga pada akhirnya terdapat kesimpulan yang tepat dari pandangan masing-masing.</span></p>\r\n\r\n<ol start=\"3\">\r\n	<li style=\"text-align:justify\"><span style=\"color:#000000\">Tidak Memberi Hukuman</span></li>\r\n</ol>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\">Ketika orang tua tidak setuju dengan perilaku atau kesalahan yang dilakukan remaja, orang tua sebaiknya tidak memberi hukuman. Orang tua dapat mengajarkan anak untuk lebih bertanggung jawab dengan cara mengungkapkan perasaannya tentang perilaku anak, menyampaikan harapannya secara jelas, memberi pilihan pada anak tentang cara memperbaiki kesalahan, dan menentukan konsekuensi langsung yang sesuai dengan kesalahan untuk menunjukkan keseriusan orang tua tentang kesalahan anak.</span></p>\r\n\r\n<ol start=\"4\">\r\n	<li style=\"text-align:justify\"><span style=\"color:#000000\">Melakukan Mediasi Aktif</span></li>\r\n</ol>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\">Orang tua dapat membatasi remaja dalam penggunaan <em>gadget </em>atau akses informasi dan media sosial. Hal ini dapat dilakukan dengan cara orang tua memberikan pembatasan, mediasi aktif, dan penggunaan bersama. Pembatasan dapat berupa orang tua membatasi waktu pemakaian <em>gadget </em>dan hanya mengizinkan menggunakan media sosial tertentu untuk remaja. Mediasi aktif dapat dilakukan dengan orang tua menjelaskan dan mengevaluasi konten media sosial yang diakses remaja lalu membuka ruang diskusi untuk meningkatkan kemampuan berpikir kritis remaja. Penggunaan bersamaan dilakukan dengan cara orang tua selalu membersamai remaja ketika menggunakan <em>gadget </em>atau mengakses media sosial sehingga orang tua mengetahui secara langsung penggunaan <em>gadget </em>dan akses informasi yang dilakukan remaja.</span></p>\r\n</div>\r\n\r\n<ol start=\"5\">\r\n	<li style=\"text-align:justify\"><span style=\"color:#000000\">Melakukan Pemantauan Berkala</span></li>\r\n</ol>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\">Orang tua perlu memantau penggunaan <em>gadget </em>dan akses informasi atau media sosial yang dilakukan remaja. Orang tua perlu mengetahui kapan dan berapa lama waktu yang dibutuhkan remaja dalam menggunakan <em>gadget</em>, media sosial, termasuk apa yang remaja lakukan dengan media sosial tersebut dan dengan siapa remaja berkomunikasi. Pemantauan orang tua tersebut juga membutuhkan komunikasi aktif orang tua dan anak. Orang tua dapat meminta akses media sosial milik remaja (akun dan <em>password</em>), memberikan kontrol, memberlakukan aturan dan batasan atau pengawasan.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\">Kalau kamu ingin berdiskusi prihal dunia parenting , kamu dapat menghubungin admin </span><a href=\"https://wa.me/6281399991459\" target=\"_blank\"><span style=\"color:#3498db\">bagikanceritamu.com</span></a></p>', '2023-05-15 07:06:57', '2023-05-16 03:10:22'),
(5, 'Apakah Aku Mengalami Gangguan Stres Pasca Trauma ?', 3, 'apakah-aku-mengalami-gangguan-stres-pasca-trauma', 'bagikan-cerita-banner-1684332373.jpg', 'Kita pasti sudah mengalami berbagai peristiwa dalam kehidupan. Salah satu peristiwa yang mungkin pernah kita alami adalah peristiwa traumatis. Suatu peristiwa dapat dianggap sebagai peristiwa traumatis ketika memiliki tiga ciri utama, yaitu (1) ketidakmampuan kita dalam mengontrol peristiwa tersebut terjadi; (2) persepsi kita bahwa peristiwa tersebut adalah pengalaman yang sangat negatif (membahayakan atau mengancam secara fisik maupun emosional); dan (3) perstiwa tersebut terjadi dengan sangat tiba-tiba.', '<p style=\"text-align:justify\"><strong><span style=\"color:#000000\">Oleh: Khadijah Auliaur Rohmaani, S.Psi., M.Psi., Psikolog</span></strong></p>\r\n\r\n<div class=\"WordSection1\">\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\">Kita pasti sudah mengalami berbagai peristiwa dalam kehidupan. Salah satu peristiwa yang mungkin pernah kita alami adalah peristiwa traumatis. Suatu peristiwa dapat dianggap sebagai peristiwa traumatis ketika memiliki tiga ciri utama, yaitu (1) ketidakmampuan kita dalam mengontrol peristiwa tersebut terjadi; (2) persepsi kita bahwa peristiwa tersebut adalah pengalaman yang sangat negatif (membahayakan atau mengancam secara fisik maupun emosional); dan (3) perstiwa tersebut terjadi dengan sangat tiba-tiba. Gejala-gejala trauma dapat muncul ketika kita merasa tidak memiliki kemampuan yang memadai untuk mengontrol peristiwa tersebut jika terdapat kemungkinan terjadi lagi. Perasaan sangat negatif yang muncul dari pengalaman traumatis tersebut juga meningkatkan perasaan tidak berdaya pada diri kita dan ketakutan yang luar biasa untuk bertahan hidup (<em>survive</em>) secara fisik maupun psikologis.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\">Tidak semua individu memunculkan gejala-gejala trauma dan berkembang menjadi gangguan stres pasca-trauma (<em>Post-Traumatic</em><em> Stress Disorder</em>; PTSD) meskipun pernah mengalami peristiwa traumatis. Respon kita terhadap pengalaman traumatis sangat dipengaruhi oleh lima faktor, yaitu (1) faktor biologis; (2) kematangan emosional pada saat pertistiwa traumatis terjadi; (3) tingkat keparahan stres akibat peristiwa traumatis; (4) konteks sosial sebelum dan setelah peristiwa traumatis, dan (5) peristiwa kehidupan lain yang dialami sebelum maupun sesudah peristiwa traumatis. Gabungan dari kelima faktor tersebut membuat kita memiliki persepsi, pemahaman, dan tingkat ambang batas yang berbeda dalam merespon trauma.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\">Respon utama yang muncul setelah individu mendapatkan pengalaman traumatis adalah gejala mengalami kembali dan penghindaran yang terus-menerus melalui pikiran, perasaan, perilaku, atau kondisi fisik. Gejala mengalami kembali peristiwa traumatis dapat muncul dengan adanya pikiran-pikiran yang mengganggu, kecemasan, perasaan marah, gelisah/ingin terus bergerak, perilaku agresif, reaktivitas fisik pada hal-hal yang mengingatkan peristiwa traumatis, kilas balik (<em>ﬂashback</em>), dan mimpi buruk. Gejala penghindaran dapat muncul dengan adanya amnesia/sulit mengingat peristiwa traumatis, perasaan terpisah dari realita/tubuh, mati rasa secara emosional,</span></p>\r\n</div>\r\n\r\n<div class=\"WordSection2\">\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\">sulit merasakan emosi tertentu, menghindar secara reﬂeks pada situasi yang mengingatkan peristiwa traumatis, mudah terkejut, mati rasa secara fisik, atau gabungan dari berbagai gejala penghindaran yang sulit didefinisikan. Gejala-gejala trauma yang muncul dapat bervariasi dan tidak semua gejala khusus harus muncul setelah kita mengalami pengalaman traumatis. Gejala- gejala trauma tersebut tidak selalu langsung muncul dan bisa bertahan mingguan, bulanan, bahkan tahunan setelah pengalaman traumatis terjadi.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\">Respon sekunder yang dapat muncul setelah individu mengalami peristiwa traumatis adalah gejala depresi, agresivitas yang meningkat, penyalahgunaan NAPZA, muncul penyakit-penyakit fisik, <em>self-esteem </em>yang rendah, kebingungan identitas, kesulitan dalam membangun hubungan interpersonal, dan perasaan bersalah serta malu.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\">Lalu, apa yang perlu kita lakukan ketika mengalami peristiwa traumatis dan mulai muncul gejala- gejala trauma?</span></p>\r\n\r\n<ol>\r\n	<li style=\"list-style-type:none\">\r\n	<ol>\r\n		<li style=\"text-align:justify\"><span style=\"color:#000000\">Latihan Relaksasi</span></li>\r\n	</ol>\r\n	</li>\r\n</ol>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\">Reaksi fisiologis atau kondisi tubuh kita setelah terjadinya pengalaman traumatis umumnya terasa tidak nyaman atau terjadi <em>hyperarousal</em>. Oleh sebab itu, kita perlu menyeimbangkan kembali reaksi fisiologis kita menjadi lebih tenang dengan latihan relaksasi mulai dari pernapasan, cara kita berbicara, dan bergerak. Contohnya, kita dapat latihan pernapasan sadar, latihan yoga, dan mencoba melakukan meditasi.</span></p>\r\n\r\n<ol>\r\n	<li style=\"list-style-type:none\">\r\n	<ol start=\"2\">\r\n		<li style=\"text-align:justify\"><span style=\"color:#000000\">Mindfulness dan Mengenali <em>Triggers </em>dari Gejala Trauma</span></li>\r\n	</ol>\r\n	</li>\r\n</ol>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\">Kesadaran diri adalah inti dari proses pemulihan trauma. Kita perlu menyadari apa yang sedang terjadi pada tubuh, pikiran, dan perasaan kita. Ketika kita sudah sadar tentang yang kita alami, mengenali perasaan tidak nyaman yang sedang kita hadapi, kita akan lebih mudah menerima dan mengubah persepsi tentang kondisi yang sedang kita alami. Contohnya, ketika kita menyadari bahwa kita selalu melihat ke arah pintu dan memastikan pintu sudah terkunci setiap ada suara berisik di luar pintu, kita akan lebih cepat menerima bahwa kita sedang merasa cemas dan mulai dapat mengubah respon tubuh kita yang ketakutan karena sadar bahwa pintu sudah terkunci dan kita berada di tempat aman.</span></p>\r\n</div>\r\n\r\n<ol>\r\n	<li style=\"list-style-type:none\">\r\n	<ol start=\"3\">\r\n		<li style=\"text-align:justify\"><span style=\"color:#000000\">Menumbuhkan Perasaan Aman</span></li>\r\n	</ol>\r\n	</li>\r\n</ol>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\">Memiliki orang yang dapat dipercaya atau tempat yang dapat dituju ketika merasa cemas dan takut dapat meminimalisir gejala-gejala trauma yang muncul. Kita perlu meyakinkan pikiran, perasaan, dan tubuh kita bahwa kita memiliki tempat aman. Ketika kita perasaan aman tersebut tumbuh maka kita akan lebih mudah menghadapi pengalaman traumatis yang terjadi dan mengurangi gejala-gejala trauma yang kita alami.</span></p>\r\n\r\n<ol>\r\n	<li style=\"list-style-type:none\">\r\n	<ol start=\"4\">\r\n		<li style=\"text-align:justify\"><span style=\"color:#000000\">Mencari Pertolongan Profesional</span></li>\r\n	</ol>\r\n	</li>\r\n</ol>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\">Ketika kita merasa pengalaman traumatis yang kita alami terus menghantui dan gejala- gejala trauma yang kita alami terus-menerus muncul maka kita perlu mencari pertolongan profesional untuk memproses peristiwa traumatis dan reaksi tubuh dari pengalaman traumatis tersebut. Profesional seperti psikiter atau psikolog dapat membantu kita mencari akar masalah dari pengalaman traumatis yang pernah kita alami, mengajarkan penerimaan terhadap diri dan pengalaman yang terjadi, dan membimbing kita menemukan solusi paling tepat sesuai dengan kebutuhan kita.</span></p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">Jika kamu bingung atau butuh bantuan dalam mengatasi masalahmu yuk jadwalkan sekarang konsultasi dengan psikolog profesional kami, kamu bisa menghubungi<a href=\"https://wa.me/6281399991459\" target=\"_blank\"> </a><a href=\"https://wa.me/6281399991459\" target=\"_blank\">bagikanceritamu.com</a></p>', '2023-05-17 14:06:13', '2023-05-25 10:14:27'),
(6, 'BUDAK CINTA ATAU ADIKSI CINTA ?', 3, 'budak-cinta-atau-adiksi-cinta', 'bagikan-cerita-banner-1684935121.jpg', 'Aspek percintaan merupakan salah satu hal penting yang harus dieksplorasi oleh seseorang, dan biasanya dimulai pada usia remaja akhir hingga dewasa awal. Eksplorasi pada aspek percintaan ini dapat membantu seseorang untuk memenuhi salah satu tahap perkembangan, yaitu menjalin hubungan romantis. Hubungan romantis atau lebih dikenal dengan istilah “pacaran” adalah interaksi timbal balik, untuk membentuk perjanjian atau komitmen secara sukarela, antara dua orang yang tertarik secara sosial, romantis, atau seksual. Hubungan romantis ditandai dengan ekspresi spesifik terkait kasih sayang dan keintiman.', '<p style=\"text-align:justify\"><span style=\"color:#000000\"><strong>Oleh : Agnes Nugrawati Salim, M.Psi.</strong></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\">Aspek percintaan merupakan salah satu hal penting yang harus dieksplorasi oleh seseorang, dan biasanya dimulai pada usia remaja akhir hingga dewasa awal. Eksplorasi pada aspek percintaan ini dapat membantu seseorang untuk memenuhi salah satu tahap perkembangan, yaitu menjalin hubungan romantis. Hubungan romantis atau lebih dikenal dengan istilah &ldquo;pacaran&rdquo; adalah interaksi timbal balik, untuk membentuk perjanjian atau komitmen secara sukarela, antara dua orang yang tertarik secara sosial, romantis, atau seksual. Hubungan romantis ditandai dengan ekspresi spesifik terkait kasih sayang dan keintiman.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\">Menjalin sebuah hubungan romantis atau pacaran ini sebenarnya merupakan hal yang penting dan dapat membantu untuk menjaga kesehatan mental seseorang. Berkaitan dengan pacaran, beberapa tahun belakangan ini mulai muncul fenomena yang disebut dengan budakcinta atau bucin. Definisi bucin sendiri belum tercantum secara resmi pada Kamus Besar Bahasa Indonesia (KBBI). Namun, bucin seringkali diartikan sebagai pasangan yang menunjukan perilaku secara berlebihan untuk mencari perhatian, merasa disayangi, atau dicintai oleh pasangannya. Bucin juga sering dinilai dalam konotasi negatif. Istilah bucin biasanya diberikan pada seseorang yang seolah-olah rela melakukan dan mengorbankan segalanya untuk pasangannya.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\">Meskipun bucin seringkali dilihat negatif, namun hal ini tidak sepenuhnya benar. Perilaku bucin mungkin saja memberikan dampak yang positif jika disalurkan atau diekspresikan dengan cara yang sesuai. Begitu sebaliknya, ketika ditunjukkan dengan cara yang kurang tepat, tentunya akan mengarah pada hasil atau dampak yang negatif. Oleh karena itu, penting bagi orang yang sedang menjalin hubungan romantis untuk dapat mengetahui perilaku berpacaran yang &ldquo;sehat&rdquo;. Beberapa dampak negatif dari perilaku bucin saat berpacaran misalnya:</span></p>\r\n\r\n<ol>\r\n	<li style=\"text-align:justify\"><span style=\"color:#000000\">Pemerasan keuangan,</span></li>\r\n	<li style=\"text-align:justify\"><span style=\"color:#000000\">Kekerasan dalam pacaran,</span></li>\r\n	<li style=\"text-align:justify\"><span style=\"color:#000000\">Hubungan seksual di luar nikah.</span></li>\r\n</ol>\r\n\r\n<p style=\"text-align:justify\"><br />\r\n<span style=\"color:#000000\">Perilaku bucin secara tidak sehat dan terus menerus dapat berdampak pada kesehatan mental orang yang melakukannya. Salah satu dampak yang mungkin terjadi adalah adiksi terhadap cinta. Adiksi cinta sendiri dapat didefinisikan sebagai romantisme yang tidak dewasa, yaitu ketika pasangan melewati batas privasi pasangannya, melibatkan perilaku tidak terkendali yang berulang, dan menyebabkan konsekuensi negatif dalam kehidupan dirinya maupun pasangan.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\">Pada awalnya adiksi cinta akan memunculkan perasaan yang menyenangkan dan pemikiran obsesif, sehingga seseorang terus merasa ingin bersatu dengan pasangannya. Sayangnya, jika terjadi secara berlebihan, dapat mengganggu fungsi kehidupan kedua pasangan tersebut. Terdapat beberapa tanda maupun pemikiran obsesif yang dimiliki seseorang dengan adiksi cinta, misalnya:</span></p>\r\n\r\n<ol>\r\n	<li style=\"text-align:justify\"><span style=\"color:#000000\">Pemikiran bahwa dirinya tidak dapat hidup tanpa pasangan,</span></li>\r\n	<li style=\"text-align:justify\"><span style=\"color:#000000\">Merasa bahwa ia tidak bisa berbuat apapun tanpa cinta dari pasangan,</span></li>\r\n	<li style=\"text-align:justify\"><span style=\"color:#000000\">Mengikuti apapun keinginan dari pasangannya, meskipun hal tersebut tidak baik, merugikan, atau tidak masuk akal.</span></li>\r\n</ol>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\">Konsekuensi dari adiksi cinta yang dimiliki seseorang terhadap pasangannya dapat berbeda-beda, tergantung dari tingkat adiksi yang dimiliki. Pada tingkat tertentu, bisa mencapai dampak yang serupa dengan adiksi narkotika. Beberapa konsekuensi dari adiksi cinta, misalnya:</span></p>\r\n\r\n<ol>\r\n	<li style=\"text-align:justify\"><span style=\"color:#000000\">Membahayakan fisik maupun lingkungan sosial,</span></li>\r\n	<li style=\"text-align:justify\"><span style=\"color:#000000\">Melakukan tindakan ilegal,</span></li>\r\n	<li style=\"text-align:justify\"><span style=\"color:#000000\">Menyebabkan seseorang tidak dapat bekerja dan berfungsi di berbagai aspek penting dalam kehidupannya.</span></li>\r\n</ol>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\">Beberapa contoh tindakan &ldquo;tidak sehat&rdquo; yang dilakukan oleh seseorang dengan tanda-tanda adiksi cinta adalah mengirimkan pesan dan panggilan telepon setiap waktu kepada pasangannya, sulit bergaul dengan orang lain karena terobsesi terhadap pasangan, serta terlalu posesif terhadap pasangannya.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\">Maka dari itu, penting untuk memiliki hubungan romantis yang sehat, dan memilih perilaku secara bijak, sehingga sebuah hubungan dapat berjalan dengan adaptif, serta kedua pasangan tetap bisa mendapatkan manfaat kesehatan mental yang baik dari hubungan romantis tersebut. Kalau kamu merasakan hal yang tidak nyaman dalam hubunganmu, lebih baik konsultasikan dengan tenaga profesional ya. Jadi, apakah hubunganmu sudah sehat?</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\">J</span>ika kamu bingung atau butuh bantuan dalam mengatasi masalahmu yuk jadwalkan sekarang konsultasi dengan psikolog profesional kami, kamu bisa menghubungi<a href=\"https://wa.me/6281399991459\" target=\"_blank\"> </a><a href=\"https://wa.me/6281399991459\" target=\"_blank\">bagikanceritamu.com</a></p>', '2023-05-24 13:31:33', '2023-05-26 03:40:18'),
(7, 'Fatherhood vs. Fatherless / Keterlibatan Ayah dalam Perkembangan Anak', 3, 'fatherhood-vs-fatherless-keterlibatan-ayah-dalam-perkembangan-anak', 'bagikan-cerita-banner-1685453861.jpg', 'Setiap orang bisa menjadi ayah, namun ternyata tidak semua ayah menjalankan perannya dalam pengasuhan anak. Padahal, peran ayah bagi perkembangan anak tidak kalah penting dengan peran ibu. Peran ini berdampak besar pada perkembangan anak dan membentuk kepribadian mereka di masa mendatang.', '<p style=\"text-align:justify\"><span style=\"color:#000000\">Setiap orang bisa menjadi ayah, namun ternyata tidak semua ayah menjalankan perannya dalam pengasuhan anak. Padahal, peran ayah bagi perkembangan anak tidak kalah penting dengan peran ibu. Peran ini berdampak besar pada perkembangan anak dan membentuk kepribadian mereka di masa mendatang.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\">Dalam perkembangan emosional, ayah dapat menekankan pentingnya aturan serta memastikan aturan tersebut dijalankan oleh anak mereka. Anak-anak juga memerlukan rasa aman secara fisik dan emosional dari kehadiran ayah mereka. Banyak studi yang menyatakan bahwa ketika ayah dapat memberikan kasih sayang dan dukungan kepada anak mereka, perkembangan kongitif dan sosial anak dapat berkembang lebih baik (Jieun, Hyoun, Capaldi, &amp; Snodgrass, 2021). Lebih lanjut, untuk mendukung perkembangan sosial, ayah tidak hanya mendukung perkembangan kepribadian anak, tetapi juga cara anak dalam berelasi dengan orang lain. Cara ayah dalam memperlakukan anak, membekali mereka untuk dapat berelasi dengan orang lain. Selain itu, persepsi anak terhadap relasinya dengan ayah mereka dapat mendasarkan mereka untuk memilih teman, pacar, dan pasangan.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\">Lalu bagaimana jika ayah tidak ada atau kurang terlibat dalam pengasuhan anak? Ketidakhadiran ayah dalam kehidupan anak sudah menjadi hal yang biasa. Berdasarkan studi yang dilakukan oleh U.S Census Bureau tahun 2019 (dalam Edwards, 2020), hampir 16 juta anak atau sekitar 21% anak hanya tinggal dengan ibu, dibandingkan tahun 1960 yang hanya sekitar 8%. Keterlibatan ayah yang minim menjadi fenomena yang umum terjadi dalam budaya patriarki, termasuk di Indonesia. Dalam konteks budaya patriarki, ibu dituntut lebih berperan dalam urusan domestik dan mengurus anak. Sementara, ayah dituntut untuk bertanggung jawab dalam mencari nafkah. Selain itu, minimnya keterlibatan ayah dalam pengasuhan juga dapat dipengaruhi ketidaktahuan ayan terkait cara mengasuh dan tidak adanya model/ acuan yang bisa ditiru.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\">Secara statistik, ketidakhadiran ayah dalam perkembangan anak dapat berdampak pada beberapa hal (Kruk, 2012), diantaranya adalah konsep diri yang rendah, masalah perilaku, buruknya performa akademik dan meningkatkan kemungkinan bolos sekolah, kecenderungan melakukan perilaku kriminal, perilaku seksual pranikah dan kehamilan pada usia remaja, penyalahgunaan obat dan alkohol, tidak memiliki tempat tinggal, penganiayaan, masalah kesehatan fisik, masalah relasi di masa mendatang, serta gangguan kesehatan mental.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\">Di sisi lain, bagaimana jika keterlibatan ayah memang rendah dan/ atau ayah tidak hadir dalam pengasuhan anak? Tentunya setiap keluarga, memiliki dinamikanya masing-masing. Adakalanya ayah memang tidak ada atau kehadiran ayah justru berpotensi membahayakan anak. Misalnya, memaksakan anak berada dalam situasi rumah tangga yang penuh konflik, sebenarnya juga dapat berdampak pada rendahnya kesejahteraan anak (Grover, 2016). Dalam situasi seperti ini, relasi orangtua yang buruk dapat memperburuk kondisi anak dibandingkan anak diasuh hanya salah satu orang tua, dalam hal ini adalah ibu.&nbsp;</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\">Berdasarkan uraian tersebut, peran dan keberadaan ayah dapat berdampak positif bagi perkembangan anak jika kualitasnya baik. Ayah perlu tampil sebagai sosok yang mendukung dan sensitif terhadap kebutuhan anak (Landsford, 2021). Ayah juga diharapkan dapat memiliki relasi positif yang terus-menerus dijalin dengan anak. Anak tidak dapat memilih ayah mereka, namun mereka dapat mencari figur ayah, role model, ataupun mentor. Perlu diketahui bahwa bertumbuh dan berkembang dalam situasi yang ideal, dimana didalamnya terdapat ayah dan ibu, tidak menjamin munculnya kebahagiaan. Kita dapat memfokuskan diri pada siapa yang ada, bukan siapa yang tidak ada (Grover, 2016).</span></p>\r\n\r\n<p><span style=\"color:#000000\">Referensi:<br />\r\nEdwards, B. G. 2020. The effcts of absent fathering on children&rsquo;s well-being: Nearly 16 million children &ndash; about 21% - live without fathers.&nbsp;</span><a href=\"https://www.psychologytoday.com/us/blog/progress-notes/202004/the-effects-absent-fathering-childrens-well-being\" target=\"_blank\"><span style=\"color:#3498db\">https://www.psychologytoday.com/us/blog/progress-notes/202004/the-effects-absent-fathering-childrens-well-being</span></a></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\">Grover, S. 2016. Boys without fathers: 3 myths, 3 miracles: &ldquo;who&rsquo;s missing&rdquo; from a child&rsquo;s life isn&rsquo;t as important as &ldquo;who&rsquo;s there.&rdquo; </span><a href=\"https://www.psychologytoday.com/us/blog/when-kids-call-the-shots/201606/boys-without-fathers-3-myths-3-miracles \" target=\"_blank\"><span style=\"color:#3498db\">https://www.psychologytoday.com/us/blog/when-kids-call-the-shots/201606/boys-without-fathers-3-myths-3-miracles&nbsp;</span></a></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\">Jieun, C., Hyoun, K. Capaldi, D., Snodgrass, J. 2021. Long Term Effect of Father Involvement in childhood on their son&rsquo;s physiological stress regulation system in adulthood. Published in final edited form as: Dev Psychobiol. 2021 Sep; 63(6): e22152.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\">Kruk, E. 2012. Father absence, father deficit, father hunger: The vital importance of paternal presence in children&rsquo;s lives. </span><a href=\"https://www.psychologytoday.com/intl/blog/co-parenting-after-divorce/201205/father-absence-father-deficit-father-hunger\" target=\"_blank\"><span style=\"color:#3498db\">https://www.psychologytoday.com/intl/blog/co-parenting-after-divorce/201205/father-absence-father-deficit-father-hunger</span></a></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\">Landsford, J. E. 2021. The importance of fathers for child development: How fathers contribute to children&rsquo;s well-being. </span><a href=\"https://www.psychologytoday.com/intl/blog/parenting-and-culture/202106/the-importance-fathers-child-development \" target=\"_blank\"><span style=\"color:#3498db\">https://www.psychologytoday.com/intl/blog/parenting-and-culture/202106/the-importance-fathers-child-development&nbsp;</span></a></p>', '2023-05-30 13:37:42', '2023-05-30 13:39:40');
INSERT INTO `articles` (`id`, `title`, `user_id`, `slug`, `banner_image`, `description`, `body`, `created_at`, `updated_at`) VALUES
(8, 'Menua dan Kesejahteraan Mental', 3, 'menua-dan-kesejahteraan-mental', 'bagikan-cerita-banner-1686198013.jpg', 'Proses penuaan atau bertambah tua merupakan sebuah proses yang bersifatmultifaktor, artinya, proses ini dapat mempengaruhi tubuh seseorang dalam setiap tingkat serta berdampak pada terjadinya perubahan biologis maupun psikologis. Berbicara terkait proses penuaan, tentunya tidak terlepas dari konsep usia.', '<p style=\"text-align:justify\"><strong><span style=\"color:#000000\">Oleh : Agnes Nugrawati Salim, M. Psi., Psikolog</span></strong></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\">Proses penuaan atau bertambah tua merupakan sebuah proses yang bersifat multifaktor, artinya, proses ini dapat mempengaruhi tubuh seseorang dalam setiap tingkat serta berdampak pada terjadinya perubahan biologis maupun psikologis. Berbicara terkait proses penuaan, tentunya tidak terlepas dari konsep usia. Banyaknya perkembangan jaman dan teknologi, terutama yang berkaitan dengan intervensi medis, juga berkaitan dengan tingkat harapan hidup seseorang yang semakin meningkat seiring berkembangnya ilmu kesehatan medis.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\">Meningkatnya usia harapan hidup ini mengarah pada berbagai hal, khususnya yang berkaitan dengan persepsi akan usia. Seseorang dapat memiliki pandangan bahwa dirinya lebih muda atau lebih tua dibandingkan usia yang sebenarnya, dan persepsi ini disebut juga dengan subjective age. Berbagai penelitian mengatakan bahwa subjective age dapat mempengaruhi pemilihan perilaku dan tingkat kesejahteraan hidup seseorang. Selain itu, penelitian juga menunjukkan bahwa seseorang memiliki kecenderungan untuk merasa lebih muda dibandingkan usia yang sebenarnya. Namun, kecenderungan tersebut juga berkaitan dengan lingkungan dan budaya tempat seseorang tinggal. Pandangan ataupun stereotipe dari masyarakat terkait kapasitas dan keberfungsian lansia dapat mempengaruhi produktivitas dan kesehatan dari lansia tersebut secara negatif.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\">Subjective age merupakan hal yang penting dalam proses penuaan yang sedang terjadi pada seseorang. Hal ini dikarenakan pandangan akan usia dirinya dapat mempengaruhi kesehatan fisik, perilaku, kapasitas kognitif, dan kesehatan mental seseorang. Misalnya:</span></p>\r\n\r\n<ol>\r\n	<li style=\"text-align:justify\"><span style=\"color:#000000\">Seseorang dengan subjective age sama atau lebih muda dari usia sebenarnya memiliki kesehatan otak yang lebih baik dan terhindar dari berbagai penyakit karena penuaan.</span></li>\r\n	<li style=\"text-align:justify\"><span style=\"color:#000000\">Pengalaman stress dan rasa takut akan kematian dapat meningkat pada orang dengan ,subjective age lebih tua.</span></li>\r\n	<li style=\"text-align:justify\"><span style=\"color:#000000\">Subjective age yang lebih muda dapat meminimalisir resiko depresi dan peningkatan kesehatan mental.</span></li>\r\n</ol>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\">Depresi merupakan salah satu dari masalah kesehatan mental yang paling umum terjadi dan bisa dialami seseorang kapanpun dalam rentang kehidupannya. Tidak hanya kesehatan mental, namun depresi juga bisa menyebabkan peningkatan kortisol sehingga sistem imun menurun. Sayangnya, lebih dari setengah kasus depresi terjadi pada seseorang diusia tuanya. Ditambah lagi, orang dengan depresi juga sering memiliki perasaan cemas dan ketakutan yang tinggi, sehingga memperparah kondisi kesehatan mentalnya. Studi longitudinal menunjukan bahwa semakin tua subjective age dapat meningkatkan kemungkinan munculnya gejala depresi. Sebaliknya, subjective age yang lebih muda dapat meminimalisir secara signifikan kemungkinan gejala depresi. Maka dari itu, bagaimana pandangan seseorang terhadap usianya dapat mempengaruhi kondisi kesehatan mentalnya.<br />\r\nSelain depresi, subjective age juga dapat dikaitkan dengan beberapa hal sebagai berikut:</span></p>\r\n\r\n<ol>\r\n	<li style=\"text-align:justify\"><span style=\"color:#000000\">Fungsi kognitif. Subjective age dapat mempengaruhi keberfungsian kognitif seseorang dan berasosiasi dengan tingkat demensia serta sistem saraf.</span></li>\r\n	<li style=\"text-align:justify\"><span style=\"color:#000000\">Ciri kepribadian. Seseorang dengan subjective age lebih muda cenderung lebih terbuka, lebih taat, dan mudah bersosialisasi.</span></li>\r\n	<li style=\"text-align:justify\"><span style=\"color:#000000\">Kematian. Tingginya resiko kematian dapat berkaitan dengan subjective age yang lebih tua pula.</span></li>\r\n	<li style=\"text-align:justify\"><span style=\"color:#000000\">Kepuasan hidup. Seseorang yang secara psikologis merasa lebih muda, cenderung lebih puas dengan kehidupannya.</span></li>\r\n</ol>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\">Seluruh penjabaran di atas menunjukkan bahwa subjective age merupakan hal yang penting bagi kesehatan individu, baik biologis maupun psikologis. Oleh karena itu, penting untuk mengetahui cara-cara yang bisa dilakukan agar individu memiliki proses penuaan yang sehat.<br />\r\nBeberapa cara yang dapat dilakukan adalah sebagai berikut:</span></p>\r\n\r\n<ol>\r\n	<li style=\"text-align:justify\"><span style=\"color:#000000\">Memperhatikan kesehatan fisik. Dengan menjadi lebih sehat, diharapkan dapat memperlambat proses penurunan yang dialami akibat penyakit degeneratif. Beberapa contoh yang aktivitas yang dapat dilakukan adalah berolahraga, memilih makanan dengan bijak, meningkatkan kualitas tidur, berhenti merokok, alkohol, dan narkotika, serta emeriksakan kesehatan mental secara rutin</span></li>\r\n	<li style=\"text-align:justify\"><span style=\"color:#000000\">Mempedulikan kondisi mental. Kesehatan mental dapat berkaitan dengan kualitas hidup secara keseluruhan. Mengolah rasa kesepian, stres, depresi, dan mood merupakan kunci untuk mencapai penuaan yang sehat, melalui beberapa cara berikut:</span></li>\r\n</ol>\r\n\r\n<ol style=\"list-style-type:lower-alpha; margin-left:40px\">\r\n	<li style=\"text-align:justify\"><span style=\"color:#000000\">Mencari kelompok sosial dan sering melakukan interaksi sosial</span></li>\r\n	<li style=\"text-align:justify\"><span style=\"color:#000000\">Melatih praktik meditasi</span></li>\r\n	<li style=\"text-align:justify\"><span style=\"color:#000000\">Menulis jurnal untuk mengidentifikasi pemikiran negatif</span></li>\r\n	<li style=\"text-align:justify\"><span style=\"color:#000000\">Melakukan hobi dan aktivitas santai</span></li>\r\n</ol>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\">Menua dengan sehat merupakan hal yang penting untuk dimiliki individu. Namun, tentu proses menuju penuaan yang sehat tidak selamanya mudah. Jadi, kalau Anda atau lansia disekitar Anda mengalami permahasalan yang mengganggu terkait proses penuaan, segera konsultasikan dengan tenaga profesional ya.</span></p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>', '2023-06-08 04:20:14', '2023-06-08 04:22:54'),
(9, 'Self-Harm, Bukan Sekedar Menyakiti Diri', 3, 'self-harm-bukan-sekedar-menyakiti-diri', 'bagikan-cerita-banner-1688539886.jpg', 'Pernahkah Anda mendengar bahwa sekitar 17% orang melakukan self-harm dalam\r\nhidupnya, 45% orang menggunakan cutting sebagai cara melukai diri, serta sekitar 50%\r\norang mencari bantuan terkait self-harm bukan kepada tenaga ahli ?', '<p style=\"text-align:justify\"><span style=\"color:#000000\"><strong>Ditulis oleh :&nbsp;Farica Tanojo, S.Psi., Psikolog</strong></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\">Pernahkah Anda mendengar bahwa sekitar 17% orang melakukan self-harm dalam hidupnya, 45% orang menggunakan cutting sebagai cara melukai diri, serta sekitar 50% orang mencari bantuan terkait self-harm bukan kepada tenaga ahli? Hal-hal tersebut merupakan fakta dari adanya fenomena self-harm di dunia. Self-harm merupakan berbagai bentuk perilaku seseorang yang menyebabkan bahaya atau luka kepada dirinya. Bentuk yang paling umum dilakukan seperti memotong (cutting) pergelangan tangan, membakar, membenturkan kepala, menggigit, dan mencabut luka. Self-harm dilakukan sebagai cara untuk mengatasi pikiran dan perasaan yang menyulitkan. Biasanya, orang yang melakukan self-harm tidak memiliki tujuan untuk bunuh diri. Meskipun berbeda dengan percobaan bunuh diri, self-harm dapat meningkatkan risiko kematian dan keinginan untuk melakukan percobaan bunuh diri. </span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\">Setiap orang memiliki kemampuan yang berbeda-beda dalam menghadapi berbagai masalah. Ketika seseorang tidak mampu untuk mengungkapkan emosi dan membicarakan penyebab stres, maka hal itu bisa bertumpuk serta menjadi tak tertahankan. Kondisi ini membuat sebagian orang menggunakan tubuhnya untuk mengekspresikan pikiran dan perasaan yang tidak mampu ia ungkapkan, sehingga melukai dirinya saat merasa tidak tahan. Setelah melukai diri, akan muncul perasaan lega sesaat dari rasa sakit yang dialaminya. Selanjutnya muncul perasaan bersalah dan malu pada orang tersebut, yang kemudian membuat dirinya kerap mengulangi perilaku self-harm untuk menangani perasaan negatif. Maka dari itu, self-harm menjadi cara normal bagi seseorang dalam menghadapi permasalahan hidup.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\">Tujuan seseorang melakukan self-harm umumnya untuk keluar dari perasaan negatif, mengatasi stress, mengekspresikan perasaan negatif, menghukum dirinya sendiri, serta merasakan euforia. Beberapa contoh pemicu seseorang melakukan self-harm antara lain bullying, tekanan dari keluarga atau sekolah, depresi, kecemasan, diskriminasi, trauma dan kepercayaan diri rendah. Berbagai mitos atau kesalahpahaman terkait self-harm berkembang luas di tengah masyarakat. Kesalahpahaman tersebut dapat menjadi hambatan bagi seseorang untuk mengungkapkan masalah dan mencari bantuan. Berikut ini beberapa contoh mitos dari fenomena self-harm:</span></p>\r\n\r\n<ol>\r\n	<li style=\"text-align:justify\"><span style=\"color:#000000\">Sebagai cara untuk mencari perhatian: padahal banyak orang yang melakukan self-harm tidak membicarakan hal tersebut, serta terasa sulit bagi mereka untuk mengumpulkan keberanian mencari pertolongan. Mereka cenderung merasa malu dan ingin menyembunyikan perilaku tersebut.</span></li>\r\n	<li style=\"text-align:justify\"><span style=\"color:#000000\">Anak muda melakukannya agar diterima teman: self-harm muncul sebagai reaksi atas ketidak cocokan dengan teman, sehingga membantu mereka menghadapi masalah dan mengelola emosi yang tidak menyenangkan.</span></li>\r\n	<li style=\"text-align:justify\"><span style=\"color:#000000\">Orang yang melakukan pasti menikmatinya: tidak ada bukti terkait orang yang melakukan self-harm merasakan sakit secara berbeda dari orang lainnya. Mengalami depresi dapat membuat seseorang mati rasa, sehingga ingin melakukan apapun agar merasa hidup, meskipun menyebabkan rasa sakit. Orang lain juga mendeskripsikan rasa sakit dari self-harm sebagai hukuman.</span></li>\r\n	<li style=\"text-align:justify\"><span style=\"color:#000000\">Cenderung ingin bunuh diri: sebagian besar orang menganggap melakukan self-harm sebagai cara mengatasi perasaan dan keadaan yang sulit. Beberapa orang juga menyebutkan sebagai cara bertahan hidup saat menghadapi masalah.</span></li>\r\n	<li style=\"text-align:justify\"><span style=\"color:#000000\">Seseorang bisa langsung berhenti melakukannya, jika ia mau: self-harm merupakan masalah kompleks yang dapat terbentuk menjadi kebiasaan. Maka dari itu, hanya meminta seseorang untuk berhenti melakukan tidak dapat membantu dengan efektif.</span></li>\r\n</ol>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\">Terdapat beberapa tanda dari adanya perilaku self-harm pada seseorang, yaitu adanya luka atau memar yang tidak dapat dijelaskan pada bagian tubuh, selalu memakai pakaian tertutup atau kebesaran untuk menutupi luka, menghindari situasi sosial, mengurung diri di dalam kamar, serta menunjukkan tanda-tanda depresi. Perlu diingat bahwa self-harm dapat terjadi kepada siapa saja, tanpa memandang usia maupun jenis kelamin. Maka dari itu, penting bagi kita untuk lebih menyadari tanda-tanda self-harm di sekitar kita. Kalau kamu atau orang di sekitar menunjukkan adanya tanda-tanda yang mengarah pada perilaku self-harm, lebih baik segera mencari bantuan ke tenaga profesional ya. Dengan demikian, bantuan dan dukungan yang tepat dapat diberikan untuk mengakhiri siklus self-harm.</span></p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>', '2023-07-05 06:51:28', '2023-07-05 23:18:45');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, '1. Apa yang saya dapatkan setelah konseling ?', '<p style=\"text-align:justify\">Proses konseling / hasil konseling pastinya tidak akan sama. Akan tetapi setelah kamu menceritakan masalahmu dengan ahlinya ( psikolog) diharapakan kamu akan merasa tenang dan mendapat perspektif bagaimana kamu bisa menyelesaikan permasalahan yang sedang kamu hadapi.</p>', '2023-03-25 08:45:36', '2023-04-30 14:35:03'),
(2, '2. Berapa kali konseling saya baru bisa mendapatkan jalan keluar dari masalah saya ?', '<p style=\"text-align:justify\">Konseling itu tidak instant ya, tetapi ada beberap proses yang harus kamu jalanin sesuai dengan saran dari psikolog</p>', '2023-03-25 08:57:46', '2023-04-30 14:34:54'),
(3, '3. Bagaimana jika saya butuh sesi konseling lanjutan?', '<p>Jika kamu membutuhkan sesi konseling lanjutan, jangan ragu untuk menghubungi customer service Bagikan Ceritamu.com</p>', '2023-04-30 14:35:32', '2023-04-30 14:35:32'),
(4, '4. Apakah kerahasian data saya terjamin?', '<p>Tentunya ya, kerahasian data mu akan terjamin100% karna kami memegang teguh kode etik psikologi</p>', '2023-04-30 14:36:17', '2023-04-30 14:36:17'),
(5, '5. Apa saja layanan yang ada di Bagikan Ceritamu.com?', '<p>Untuk layanan yang kami sediakan ada konseling online dan konseling offline (tatap muka) yang ada di Jakarta</p>', '2023-04-30 14:36:50', '2023-04-30 14:36:50'),
(6, '6. Apakah ada batasan usia untuk mengakses/menggunakan layanan Bagikan Ceritamu.com?', '<p style=\"text-align:justify\">Tidak ada Batasan usia dalam menggunakan layanan konseling ini, yang terpenting klien tersebut sudah bersedian dan menyanggupi proses konseling yang akan di jalanin ( secara sadar dan tanpa paksaan)</p>', '2023-04-30 14:37:28', '2023-04-30 14:37:28'),
(7, '7. Masalah apa saja yang bisa saya ceritakan/konsultasikan ?', '<p style=\"text-align:justify\">Bagaimana pun perasaan dan masalah yang sedang kamu hadapi, jangan ragu untuk bagikan ceritamu dengan psikolog kami. Psikolog kami tidak akan pernah judge mental, jadi kamu bisa mencari psikolog berdasarkan keahlian dan sesuai dengan kebutuhan.</p>', '2023-04-30 14:38:00', '2023-04-30 14:38:00'),
(8, '8. Apakah layanan Bagikan Ceritamu.com berbayar?', '<p>Layanan yang kami sediakan merupakan layanan konseling yang berbayar, karena kami menyediakan jasa konseling professional. Namun untuk biaya terjangkau kok</p>', '2023-04-30 14:38:28', '2023-04-30 14:38:28'),
(9, '9. Bagaimana saya bisa menghubungi Bagikan Ceritamu.com?', '<p style=\"text-align:justify\">Kamu bisa mengklik tombol icon whatsaap yang ada di web kami, nantinya customer service kami akan membalas pesan mu, jika kamu menghubungi diluar jam jam kerja, pesan mu akan dibalas keesokan harinya ya</p>', '2023-04-30 14:38:54', '2023-04-30 14:38:54');

-- --------------------------------------------------------

--
-- Table structure for table `headers`
--

CREATE TABLE `headers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `header_image` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `sub_description` text DEFAULT NULL,
  `position` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `headers`
--

INSERT INTO `headers` (`id`, `header_image`, `description`, `sub_description`, `position`, `created_at`, `updated_at`) VALUES
(1, 'bagikan-cerita-header-1681307139.jpeg', '<h1>Yuk, Ceritakan <span style=\"color:#20bbc7\">Kegelisahanmu</span> Dapatkan Solusi Terbaik dari Para Psikolog Professional</h1>', 'Kami memberikan layanan psikolog profesional secara online counseling dan offline counseling untuk menjadi teman berbagi cerita atas solusi setiap masalahmu.', 'Homepage', '2023-04-02 00:59:59', '2023-04-12 06:45:39');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(6, '2014_10_12_000000_create_users_table', 1),
(7, '2014_10_12_100000_create_password_resets_table', 1),
(8, '2019_08_19_000000_create_failed_jobs_table', 1),
(9, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(10, '2023_03_25_061350_create_topics_table', 1),
(11, '2023_03_25_222209_create_faqs_table', 2),
(13, '2023_03_26_074140_create_articles_table', 3),
(15, '2023_03_27_032453_create_topics_table', 4),
(16, '2023_03_27_034915_create_testimonies_table', 5),
(17, '2023_03_27_065833_create_settings_table', 6),
(20, '2023_03_28_035830_create_products_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `prices`
--

CREATE TABLE `prices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `prices`
--

INSERT INTO `prices` (`id`, `title`, `type`, `price`, `created_at`, `updated_at`) VALUES
(1, 'Online', 'Individu', 229000, '2023-04-10 21:34:42', '2023-04-10 21:34:42'),
(2, 'Offline', 'Individu', 375000, '2023-04-10 21:35:05', '2023-04-27 23:05:47'),
(3, 'Online', 'Berpasangan', 319000, '2023-04-27 23:06:24', '2023-04-27 23:06:24'),
(4, 'Offline', 'Berpasangan', 550000, '2023-04-27 23:06:43', '2023-04-27 23:06:43');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `list_product` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `product_image`, `price`, `list_product`, `created_at`, `updated_at`, `type`) VALUES
(1, 'Konseling Offline- Individu', 'bagikan-cerita-product-1683553828.png', 375000, '[\"Berlokasi Di Wilayah Jakarta\",\"Bertemu Langsung Tatap Muka Dengan Psikolog\",\"Waktu Berkonsultasi 45 - 60 Menit\"]', '2023-03-27 21:48:21', '2023-05-08 06:50:28', 'Offline'),
(2, 'Konseling Online - Individu', 'bagikan-cerita-product-1683553900.png', 229000, '[\"Dilakukan Via Google Meet\",\"Tempat dan Waktu Fleksibel\",\"Melakukan Konsultasi Di Tempat Ternyaman Kamu\",\"Bisa Off Cam Sesuai Keinginan\"]', '2023-04-09 03:01:17', '2023-05-08 06:51:40', 'Online'),
(3, 'Konseling Online - Berpasangan', 'bagikan-cerita-product-1683553886.png', 319000, '[\"Dilakukan Via Google Meet\",\"Tempat Dan Waktu Fleksibel\",\"Melakukan Konsultasi Di Tempat Ternyaman Kamu\",\"Bisa Off Cam Sesuai Keinginan\",\"Sesi dilakukan secara bersama-sama dengan pasangan \\/ teman \\/ orang tua\"]', '2023-04-12 06:20:15', '2023-05-08 06:51:26', 'Online'),
(4, 'Konseling Offline - Berpasangan', 'bagikan-cerita-product-1683553809.png', 550000, '[\"Berlokasi Di Wilayah Jakarta\",\"Bertemu Langsung Tatap Muka Dengan Psikolog\",\"Waktu Berkonsultasi 45 - 60 Menit\",\"Sesi dilakukan secara bersama-sama dengan pasangan \\/ teman \\/ orang tua\"]', '2023-04-12 06:20:44', '2023-05-08 06:50:09', 'Offline');

-- --------------------------------------------------------

--
-- Table structure for table `psychologies`
--

CREATE TABLE `psychologies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `biography` text DEFAULT NULL,
  `code` varchar(255) NOT NULL,
  `psychology_image` varchar(255) NOT NULL,
  `number_license` text DEFAULT NULL,
  `education` text DEFAULT NULL,
  `personal_character` text DEFAULT NULL,
  `motto` text DEFAULT NULL,
  `experience` text DEFAULT NULL,
  `topics` text NOT NULL,
  `certificate` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `psychologies`
--

INSERT INTO `psychologies` (`id`, `name`, `biography`, `code`, `psychology_image`, `number_license`, `education`, `personal_character`, `motto`, `experience`, `topics`, `certificate`, `created_at`, `updated_at`) VALUES
(2, 'Sylvia Angelika,M. Psi., Psikolog.', '<p style=\"text-align:justify\">Sylvia Angelika adalah&nbsp;Psikolog Klinis lulusan dari Universitas Tarumanagara. Sylvia memiliki ketertarikan dalam bidang emosi, kecemasan, depresi, serta stres. Dengan pengalamannya praktik, Sylvia menangani kasus yang berkaitan dengan masalah dalam hubungan romantis, support system, stres, regulasi emosi, kecemasan, depresi, dan permasalahan psikologis lainnya.</p>', 'PSY-2', 'bagikan-cerita-psychology-1682744879.jpg', '<p>Nomor SIPP: 20191478-2022-02-0378</p>', '<ul>\r\n	<li>Pendidikan S1: Sarjana Psikologi Universitas Ukrida</li>\r\n	<li>Pendidikan S2: Magister Psikologi Profesi Klinis Universitas Tarumanagara</li>\r\n</ul>', NULL, '<p style=\"text-align:justify\">Menurut Sylvia, terbuka dan sikap penuh penerimaan merupakan kunci utama dalam proses pemulihan yang dilakukan bersama dengan Sylvia. Tentunya, Sylvia akan mendampingimu dalam berproses.</p>', '<p>Sejak tahun 2020&nbsp; hingga saat ini&nbsp;</p>', '[\"Gangguan Mood\",\"Gangguan Kepribadian\",\"Relationship\"]', '<ul>\r\n	<li>Selasa pukul 13.00 - 18.00 WIB</li>\r\n	<li>Rabu pukul 13.00 - 18.00 WIB&nbsp;</li>\r\n</ul>', '2023-04-05 02:07:09', '2023-07-10 12:20:25'),
(4, 'Devina Winarto, M. Psi., Psikolog.', '<p style=\"text-align:justify\">Devina adalah seorang psikolog klinis, lulusan dari Universitas Tarumanagara. Menurut Devina,&quot;Dari keberanian timbul kebahagiaan&quot; . Prinsip itu dipegang teguh oleh Devina, dimana ia percaya bahwa untuk mencapai kebahagiaan, seseorang harus berani menghadapi dan menyelesaikan masalah, bukan menghindarinya.</p>', 'PSY-3', 'bagikan-cerita-psychology-1682911832.jpg', '<p>Nomor SIPP: 26022010678</p>', '<ul>\r\n	<li>Pendidikan S1: Sarjana Psikologi Universitas Atmajaya</li>\r\n	<li>Pendidikan S2: Magister Psikologi Profesi Klinis Universitas Tarumanagara</li>\r\n</ul>', NULL, '<p style=\"text-align:justify\">Dalam hubungannya dengan klien, Devina melihat klien sebagai manusia yang setara. Pendekatannya ramah dan bersahabat, namun tegas. Hal ini bertujuan agar klien merasa rileks dan nyaman, sehingga lebih terbuka dan total dalam menceritakan permasalahan yang dihadapi.</p>', '<p>Sejak tahun 2020 hingga saat ini&nbsp;</p>', '[\"Gangguan Kepribadian\",\"Relationship\",\"Berduka\"]', '<ul>\r\n	<li>Senin pukul 10:00 - 19:00 WIB</li>\r\n	<li>Selasa pukul 11:00 - 19:00 WIB</li>\r\n	<li>Rabu pukul 11:00 - 19:00 WIB</li>\r\n	<li>Kamis pukul 11.00 - 17.00 WIB</li>\r\n	<li>Jumat pukul 11.00 - 17.00 WIB</li>\r\n	<li>Sabtu pukul 11.00 - 15.00 WIB<br />\r\n	&nbsp;</li>\r\n</ul>', '2023-04-30 20:30:33', '2023-06-14 08:11:19'),
(6, 'Ayzha Rizvy Abigail Anggorodi, M. Psi., Psikolog.', '<p style=\"text-align:justify\">Ayzha adalah seorang psikolog klinis lulusan dari Universitas Katolik Indonesia Atma Jaya Jakarta. Ayzha sangat memegang teguh prinsip &ldquo;feel what you feel until what you feel is healed&rdquo;. Hal tersebut dikarenakan ia percaya bahwa jika seseorang berusaha memahami dan berkata jujur terkait perasaannya. Maka, secara perlahan ia dapat berdamai dengan perasaannya dan dapat menyelesaikan masalahnya.</p>', 'PSY-5', 'bagikan-cerita-psychology-1685752534.jpeg', NULL, '<ul>\r\n	<li>Pendidikan S1:&nbsp;Sarjana Psikologi Universitas Katolik Indonesia Atma Jaya</li>\r\n	<li>Pendidikan S2:&nbsp;Magister Psikologi Profesi Klinis Universitas <span style=\"font-family:&quot;Arial&quot;,sans-serif\">Katolik Indonesia Atma Jaya </span></li>\r\n</ul>', NULL, '<p style=\"text-align:justify\">Terkait hubungannya dengan klien, Ayzha berusaha untuk menjadi pendengar yang baik. Ayzha juga mendengarkan cerita klien dengan empati dan tanpa menghakimi. Dalam pendekatan dengan klien, ia mengutamakan keramahan dan kejujuran. Hal tersebut bertujuan agar klien dapat bercerita secara terbuka dengan aman dan nyaman</p>', NULL, '[\"Gangguan Mood\",\"Gangguan Kepribadian\",\"Relationship\",\"Adiksi\",\"Dinamika keluarga\"]', '<ul>\r\n	<li>Senin pukul 10.00 - 19.00 WIB</li>\r\n	<li>Selasa&nbsp;pukul 10.00 - 19.00 WIB</li>\r\n	<li>Rabu&nbsp;pukul 10.00 - 19.00 WIB</li>\r\n	<li>Kamis&nbsp;pukul 10.00 - 19.00 WIB</li>\r\n	<li>Jumat pukul 10.00 - 16.00 WIB</li>\r\n	<li>Sabtu pukul 11.00 - 15.00 WIB</li>\r\n</ul>', '2023-05-28 07:52:53', '2023-06-14 08:09:54'),
(7, 'Agnes Nugrawati Salim, M. Psi., Psikolog.', '<p style=\"text-align:justify\">Agnes merupakan seorang psikolog klinis, lulusan dari Universitas Katolik Indonesia Atma Jaya. Agnes percaya bahwa&nbsp; kesuksesan maupun kegagalan bukanlah akhir segalanya, namun keberanian untuk melanjutkan kesuksesan serta bangkit dari kegagalan adalah hal yang lebih penting untuk seseorang berkembang. Hal inilah yang terus mendorong saya untuk selalu terbuka terhadap setiap tantangan baru.</p>', 'PSY-7', 'bagikan-cerita-psychology-1686131149.png', NULL, '<ul>\r\n	<li>Pendidikan S1: Sarjana Psikologi Universitas Katolik Indonesia Atma Jaya</li>\r\n	<li>Pendidikan S2: Magister Psikologi Profesi Klinis Universitas Katolik Indonesia Atma Jaya</li>\r\n</ul>', NULL, '<p style=\"text-align:justify\">Saat menjalin hubungan dengan klien, Agnes selalu berupaya untuk ramah dan terbuka. Ketika mendengarkan klien, Agnes juga selalu tulus dan bersahabat. Ia ingin mengajak klien untuk mau menghadapi masalah maupun tantangan dalam hidup. Hal ini bertujuan agar klien dapat merasa aman dan terbuka untuk bercerita, serta lebih berani untuk selalu berkembang secara sehat.</p>', NULL, '[\"Gangguan Mood\",\"Gangguan Kepribadian\",\"Relationship\",\"Adiksi\",\"Gangguan Seksual\"]', '<ul>\r\n	<li>Senin pukul&nbsp;13.00 - 19.00 WIB</li>\r\n	<li>Selasa pukul&nbsp;13.00 - 15.00 WIB</li>\r\n	<li>Rabu pukul 13.00 - 19.00 WIB</li>\r\n	<li>Kamis pukul 13.00 - 15.00 WIB</li>\r\n	<li>Minggu pukul&nbsp;pukul 13.00 - 16.00 WIB</li>\r\n</ul>', '2023-05-28 07:59:13', '2023-06-14 06:07:38'),
(8, 'Cindy Arlinda Christanty, M.Psi., Psikolog.', '<p>Cindy Arlinda&nbsp;adalah&nbsp;psikolog klinis lulusan dari Universitas Tarumanagara. Sebagai seorang psikolog klinis anak, Cindy berprinsip bahwa setiap anak memiliki kesempatan untuk dapat bertumbuh dan berkembang secara optimal dan untuk mendukung hal tersebut Cindy menggunakan kesempatannya sebagai seorang profesional untuk membantu para orangtua mengenali dan menggali potensi setiap anak.</p>', 'PSY-8', 'bagikan-cerita-psychology-1686533568.jpeg', '<p style=\"margin-left:255px\">&nbsp;</p>\r\n\r\n<p>Nomor SIPP: 20230373-2023-0424</p>', '<ul>\r\n	<li>Pendidikan S1 : Sarjana Psikologi Universitas Kristen Krida Wacana</li>\r\n	<li>Pendidikan S2 : Magister Psikologi Profesi Klinis Universitas Tarumanagara</li>\r\n</ul>', NULL, '<p>Let all you do be done in love merupakan motto pelayanan yang Cindy berikan. Menurut Cindy segala sesuatu perlu dilakukan dengan penuh kasih dimana di dalamnya terdapat empati dan passionate dalam memberikan pelayanan yang dibutuhkan oleh klien.</p>', NULL, '[\"Gangguan Mood\",\"Trauma\",\"Karir dan Pekerjaan\",\"Gangguan Seksual\",\"Gangguan Tumbuh Kembang\"]', '<ul>\r\n	<li>Senin pukul 10.00 - 17.00 WIB</li>\r\n	<li>Selasa pukul 10.00 - 17.00 WIB</li>\r\n	<li>Rabu pukul 10.00 - 17.00 WIB</li>\r\n	<li>Kamis pukul 10.00 - 17.00 WIB</li>\r\n	<li>Jumat pukul 10.00 - 17.00 WIB</li>\r\n	<li>Sabtu pukul 10.00 - 14.00 WIB&nbsp;</li>\r\n</ul>', '2023-06-02 00:43:13', '2023-06-14 08:10:39'),
(9, 'Farica Tanojo, S.Psi., Psikolog', '<p>Farica adalah psikolog klinis lulusan dari Universitas Katolik Indonesia Atma Jaya. Farica meyakini bahwa &ldquo;Ketika kita terbuka dengan kemungkinan baru, maka kita akan menemukannya&rdquo;. Hal tersebut membuat Farica percaya dengan adanya harapan, keinginan, dan usaha maka seseorang bisa mencapai berbagai hal dalam hidupnya.</p>', 'PSY-9', 'bagikan-cerita-psychology-1685967915.jpeg', NULL, '<ul>\r\n	<li>Pendidikan S1 : Sarjana Psikologi Universitas Indonesia&nbsp;</li>\r\n	<li>Pendidikan S2 : Magister Psikologi Profesi Klinis Universitas Katolik Indonesia Atma Jaya</li>\r\n</ul>', NULL, '<p>Farica percaya bahwa setiap individu memiliki proses masing-masing untuk berkembang. Maka dari itu, Farica dengan terbuka bersedia mendengarkan dan mendampingi klien dalam setiap prosesnya. Harapannya, klien dapat merasakan tempat aman dan nyaman&nbsp; bagi dirinya untuk bercerita, maupun menemukan pemahaman baru terkait permasalahannya.</p>', NULL, '[\"Gangguan Mood\",\"Gangguan Kepribadian\",\"Relationship\",\"Gangguan Kejiwaan\",\"Konsep Diri\"]', '<ul>\r\n	<li>Senin pukul 13.00 - 19.00 WIB&nbsp;</li>\r\n	<li>Selasa pukul 10.00 - 19.00 WIB&nbsp;</li>\r\n	<li>Kamis pukul 10.00 - 19.00 WIB</li>\r\n	<li>Jumat pukul 13.00 - 18.00 WIB&nbsp;</li>\r\n	<li>Sabtu pukul 08.00 -12.00 WIB</li>\r\n</ul>', '2023-06-02 00:58:54', '2023-06-14 08:09:38'),
(10, 'Jessica Clementine Sely , S.Psi., Psikolog', '<p>Jessica adalah seorang psikolog klinis dewasa, lulusan dari Universitas Katolik Indonesia Atma Jaya. &ldquo;Jangan lelah untuk belajar mengenal &amp; mengembangkan diri sendiri&rdquo;. Jessica meyakini bahwa pengenalan dan pemahaman akan diri menjadi awal yang baik untuk menumbuhkan kedewasaan, kebijaksanaan, dan kedamaian.</p>\r\n\r\n<p>&nbsp;</p>', 'PSY-10', 'bagikan-cerita-psychology-1685752357.jpeg', NULL, '<ul>\r\n	<li>Pendidikan S1:&nbsp; Sarjana Psikologi Universitas Katolik Indonesia Atma Jaya</li>\r\n	<li>Pendidikan S2: Magister Psikologi Profesi Klinis Universitas Katolik Indonesia Atma Jaya</li>\r\n</ul>', NULL, '<p>Jessica berprinsip bahwa semua manusia itu unik dan berharga, sehingga setiap keterbatasan&nbsp;maupun luka yang dimiliki masing-masing orang bukanlah sebuah momok, melainkan itu adalah bagian dari keunikannya. Hal ini mendasari Jessica di tengah hubungannya dengan klien, sehingga empati menjadi dasar yang utama.</p>', NULL, '[\"Gangguan Mood\",\"Trauma\",\"Relationship\",\"Dinamika keluarga\"]', '<ul>\r\n	<li>Senin pukul 11.00 - 15.00 WIB</li>\r\n	<li>Selasa pukul 15.00 - 19.00 WIB&nbsp;</li>\r\n	<li>Rabu pukul 11.00 - 15.00 WIB</li>\r\n	<li>Kamis pukul 15.00 - 19.00 WIB</li>\r\n	<li>Jumat pukul 11.00 - 15.00 WIB&nbsp;</li>\r\n</ul>', '2023-06-02 01:05:36', '2023-06-14 08:09:14'),
(11, 'Khansa Arma Fathiyah, S.Psi., Psikolog', '<p>Khansa adalah Psikolog Klinis yang menyelesaikan pendidikan magister psikologi profesi di Universitas Katolik Indonesia Atma Jaya. Baginya, setiap pencapaian dalam hidup layak untuk diperhitungkan, termasuk menyadari dan memutuskan untuk menghadapi masalah yang sedang dihadapi sebagai bagian dari proses.&nbsp;</p>', 'PSY-11', 'bagikan-cerita-psychology-1685752387.jpeg', NULL, '<ul>\r\n	<li>Pendidikan S1 : Sarjana Psikologi Universitas Bina Nusantara</li>\r\n	<li>Pendidikan S2 : Magister Psikologi Profesi Klinis Universitas Katolik Indonesia Atma Jaya</li>\r\n</ul>', NULL, '<p>Dalam memberikan konseling, Khansa mengedepankan kenyamanan dan keamanan klien dengan pendekatan yang bersahabat. Sebagai upaya untuk mengenali diri klien dengan lebih baik agar dapat mendampingi secara optimal, klien diterima apa adanya tanpapenilaian dan diberikan ruang untuk berkembang.</p>', NULL, '[\"Gangguan Mood\",\"Relationship\",\"Gangguan Seksual\",\"Konsep Diri\",\"Dinamika keluarga\"]', '<ul>\r\n	<li>Senin pukul 15.00 - 19.00 WIB&nbsp;</li>\r\n	<li>Selasa pukul 15.00 - 19.00 WIB&nbsp;</li>\r\n	<li>Rabu pukul 15.00 - 19.00 WIB</li>\r\n	<li>Kamis pukul 15.00 - 19.00 WIB&nbsp;</li>\r\n	<li>Jumat pukul 15.00 - 19.00 WIB&nbsp;</li>\r\n</ul>', '2023-06-02 01:10:26', '2023-06-14 08:08:58'),
(12, 'Rizky Bina Nirbayaningtyas, M.Psi., Psikolog.', '<p>Tyas adalah lulusan psikolog klinis dari Universitas Tarumanagara. Tyas percaya bahwa setiap anak hadir dengan kelebihan serta keunikannya masing-masing sebagai potensi yang dapat dioptimalkan. Tyas percaya bahwa peran orang tua dalam membersamai tumbuh kembang anak menjadi sangat penting untuk mencapai pertumbuhan dan perkembangan anak yang optimal.</p>', 'PSY-12', 'bagikan-cerita-psychology-1685967881.jpeg', '<p style=\"margin-left:255px\">&nbsp;</p>\r\n\r\n<p>Nomor SIPP:&nbsp;<span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"color:#000000\">20220090-2023-01-0846</span></span></span></p>', '<ul>\r\n	<li>Pendidikan S1 : Sarjana Psikologi Universitas Paramadina</li>\r\n	<li>Pendidikan S2 : Magister Psikologi Profesi Klinis Universitas Tarumanagara&nbsp;</li>\r\n</ul>', NULL, '<p>Dalam pelayanan konseling yang diberikan, Tyas selalu berusaha untuk menerapkan prinsip mendengarkan, memahami, serta membantu. Tyas akan mendampingi klien dengan sepenuh hati tanpa menghakimi untuk menemukan solusi bersama.</p>', NULL, '[\"Gangguan Mood\",\"Relationship\",\"Gangguan Kejiwaan\",\"Konsep Diri\",\"Gangguan Tumbuh Kembang\",\"Dinamika keluarga\"]', '<ul>\r\n	<li>Senin pukul 09.00 - 17.00 WIB</li>\r\n	<li>Selasa pukul 09.00 - 17.00 WIB</li>\r\n	<li>Rabu pukul 09.00 - 17.00 WIB</li>\r\n</ul>', '2023-06-02 01:14:23', '2023-06-14 08:08:40'),
(13, 'Shabrina Putriandina, S.Psi., Psikolog', '<p>Andin adalah seorang psikolog klinis, lulusan dari Universitas Katolik Indonesia Atma Jaya. Andin percaya bahwa determinasi merupakan kunci untuk mencapai berbagai hal dalam hidup. Prinsip itu dipegang teguh oleh Andin, dimana hal ini mendorong dirinya untuk menyelesaikan tanggung jawab yang diberikan dengan maksimal.</p>', 'PSY-13', 'bagikan-cerita-psychology-1685752447.jpeg', NULL, '<ul>\r\n	<li>Pendidikan S1:&nbsp; Sarjana Psikologi Universitas Katolik Indonesia Atma Jaya</li>\r\n	<li>Pendidikan S2: Magister Psikologi Profesi Klinis Universitas Katolik Indonesia Atma Jaya</li>\r\n</ul>', NULL, '<p>Determinasi merupakan kunci untuk mencapai berbagai hal dalam hidup, dengan memiliki determinasi berarti individu mampu untuk melakukan yang terbaik yang ia mampu untuk mencapai tujuan. Hal ini merupakan kunci utama yang Andin terapkan kepada klien. Ketika seseorang memiliki determinasi, individu terdorong untuk lebih mengenal masalah yang dimiliki.</p>', NULL, '[\"Gangguan Kepribadian\",\"Relationship\",\"Berduka\",\"Gangguan Kejiwaan\",\"Gangguan Seksual\",\"Konsep Diri\",\"Dinamika keluarga\"]', '<ul>\r\n	<li>Senin pukul 13.00 - 16.00 WIB&nbsp;</li>\r\n	<li>Selasa pukul 10.00 - 14.00 WIB</li>\r\n	<li>Rabu pukul 13.00 - 15.00 WIB</li>\r\n	<li>Kamis pukul 10.00 - 12.00 WIB&nbsp;</li>\r\n	<li>Jumat pukul 13.00 - 15.00 WIB&nbsp;</li>\r\n</ul>', '2023-06-02 01:17:50', '2023-06-14 08:08:26'),
(14, 'Sofia Tri Putri,M. Psi., Psikolog.', '<p style=\"text-align:justify\">Sofia berprofesi sebagai psikolog klinis yang lulus dari Program Studi Magister Profesi di Universitas Tarumanagara. Saya meyakini bahwa setiap manusia memiliki potensi kebaikan dalam dirinya. Adakalanya, klien maupun orang disekitarnya kesulitan untuk menemukan kebaikan tersebut sehingga memerlukan pendampingan dalam menemukan dan mengoptimalkannya.</p>', 'PSY-14', 'bagikan-cerita-psychology-1686576570.png', '<ul>\r\n	<li>Nomor SIPP: 0013-21-2-3</li>\r\n</ul>', '<ul>\r\n	<li>Pendidikan S1: &nbsp;Sarjana Psikologi Universitas Paramadina</li>\r\n	<li>Pendidikan S2: Magister Psikologi Profesi Klinis Universitas Tarumanagara<br />\r\n	&nbsp;</li>\r\n</ul>', NULL, '<p style=\"text-align:justify\">Setiap manusia dilahirkan dengan tujuan yang baik, meski dalam keterbatasan yang mereka miliki. Secara mandiri ataupun dengan dukungan orang lain, mereka berdaya (dan dapat diberdayakan) untuk menjalankan kehidupan dan/atau mengatasi ragam tantangan dalam hidup mereka.</p>', NULL, '[\"Parenting\",\"Relationship\"]', NULL, '2023-06-08 04:06:35', '2023-06-14 06:09:36');

-- --------------------------------------------------------

--
-- Table structure for table `psychology_orders`
--

CREATE TABLE `psychology_orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `session_id` varchar(255) NOT NULL,
  `client_name` varchar(255) NOT NULL,
  `client_phone` varchar(255) NOT NULL,
  `client_email` varchar(255) DEFAULT NULL,
  `psychology_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `time_start` time NOT NULL,
  `time_end` time NOT NULL,
  `source` varchar(255) NOT NULL,
  `number_counseling_session` float NOT NULL,
  `price_id` int(11) NOT NULL,
  `promo_id` int(11) DEFAULT NULL,
  `reschedule` tinyint(1) NOT NULL DEFAULT 0,
  `extended` tinyint(1) NOT NULL DEFAULT 0,
  `extended_counseling_minute` int(11) NOT NULL DEFAULT 0,
  `status` varchar(255) NOT NULL,
  `total_price` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `location` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `psychology_orders`
--

INSERT INTO `psychology_orders` (`id`, `session_id`, `client_name`, `client_phone`, `client_email`, `psychology_id`, `date`, `time_start`, `time_end`, `source`, `number_counseling_session`, `price_id`, `promo_id`, `reschedule`, `extended`, `extended_counseling_minute`, `status`, `total_price`, `created_at`, `updated_at`, `location`) VALUES
(4, 'cc99238c-7928-4bbb-b3cb-47491f629b54', 'Silvia Cahyono', '+62 812-8901-9190', 'sccahyono1@gmail.com', 12, '2023-06-09', '09:00:00', '10:00:00', 'Instagram', 1, 1, NULL, 0, 0, 0, 'Sudah Selesai', 229000, '2023-06-08 14:39:06', '2023-06-09 08:37:07', 'Gmeet'),
(5, 'f474a79c-05f4-4040-a0e4-e9ee0e628176', 'Rizal Taufiqurrafi', '085791207314', 'rizaltqrafi@gmail.com', 6, '2023-06-24', '11:00:00', '12:00:00', 'GoogleAds', 1, 1, NULL, 0, 0, 0, 'Sudah Selesai', 229000, '2023-06-23 03:53:49', '2023-06-25 07:47:03', 'sesi online video google meet'),
(6, 'a712ab36-a78e-4ee3-bd49-fdb263115cb2', 'Ratu namira nawal', '081779407099', 'Atusegeir@gmail.com', 6, '2023-06-25', '16:00:00', '17:00:00', 'GoogleAds', 1, 1, NULL, 0, 0, 0, 'Sudah Selesai', 229000, '2023-06-25 08:05:31', '2023-06-25 10:48:34', 'konseling online'),
(7, '7e75901b-7977-4549-9d65-5afb2d816bf5', 'DINA VIVIANTI', '+62 813-1310-0034', 'dinavt1229@gmail.com', 9, '2023-06-26', '17:00:00', '18:00:00', 'GoogleAds', 1, 1, NULL, 0, 0, 0, 'Sudah Selesai', 229000, '2023-06-26 06:34:04', '2023-06-26 12:19:01', 'konseling online via call whatsaap'),
(8, '02ec3c8c-562a-40a0-a308-7d8e717ee202', 'Ari Arief', '+62 853-9124-4567', 'iniorangbiasasaja@gmail.com', 14, '2023-06-27', '13:00:00', '14:00:00', 'GoogleAds', 1, 1, NULL, 0, 0, 0, 'Sudah Selesai', 229000, '2023-06-27 11:09:40', '2023-06-27 11:09:47', 'Wawancara tim kaltim pos'),
(9, '08245154-26c5-45e9-b4cd-4ec330051245', 'Muhklas Hidayat', '085249526965', 'Muhklashidayat123@gmail.com', 7, '2023-06-27', '21:00:00', '22:00:00', 'GoogleAds', 1, 1, NULL, 0, 0, 0, 'Sudah Selesai', 229000, '2023-06-27 12:36:08', '2023-06-27 15:12:41', 'konseling via voice call google meet'),
(10, '37c51c01-917f-4cb6-95c3-837bf89cc257', 'Rosmawati ( Surya anak berbakti)', '+62 823-7635-2174', 'Surya.aja910@gmail.com', 7, '2023-06-30', '09:00:00', '10:00:00', 'GoogleAds', 1, 1, NULL, 0, 0, 0, 'Sudah Selesai', 229000, '2023-06-29 02:40:24', '2023-06-30 13:08:57', 'yang konseling ibu Rosmawati via call whatsaap'),
(11, 'cdcdded9-25ac-4e5c-ad78-f70685c513c3', 'Amril', '085778825295', 'amrilsyaban.as@gmail.com', 7, '2023-07-04', '21:00:00', '22:00:00', 'GoogleAds', 1, 1, NULL, 0, 0, 0, 'Sudah Selesai', 229000, '2023-07-04 13:10:16', '2023-07-08 14:19:11', NULL),
(12, 'bd3c1067-9227-470c-9901-8539c6ea272b', 'Yulinda', '62 813-2320-5259', 'yulindandiana@gmail.com', 7, '2023-07-09', '16:00:00', '17:00:00', 'GoogleAds', 1, 1, NULL, 0, 0, 0, 'Sudah Selesai', 229000, '2023-07-08 14:51:20', '2023-07-10 05:52:39', NULL),
(13, '32df9904-e2e0-4641-ab0a-c7fa5b3d8b2d', 'Diki ( suami Yulinda)', '081321196626', 'Ikikamal24@gmail.com', 7, '2023-07-09', '17:00:00', '18:00:00', 'GoogleAds', 1, 1, NULL, 0, 0, 0, 'Sudah Selesai', 229000, '2023-07-08 14:52:50', '2023-07-10 05:52:32', NULL),
(14, '570691c6-06b0-4a7e-ac30-b7760b47fb60', 'Aida Febriani', '62 853-6348-3739', 'aidafebriani@gmail.com', 6, '2023-07-10', '13:00:00', '14:00:00', 'GoogleAds', 1, 1, NULL, 0, 0, 0, 'Sudah Selesai', 229000, '2023-07-10 06:09:37', '2023-07-10 10:00:58', 'konseling via whatsaap'),
(15, '582d9686-c953-4fea-88f6-79865c84fec6', 'Okta Menue', '+31 6 36546667', 'oktavianisitilia@gmail.com', 11, '2023-07-12', '14:30:00', '16:30:00', 'GoogleAds', 2, 1, NULL, 0, 0, 0, 'Sudah Selesai', 458000, '2023-07-11 13:19:09', '2023-07-12 09:38:09', 'whatsaap call'),
(16, '23dd785b-da70-4e47-ab23-5795efcc1dd0', 'Nurjannah', '085264558336', 'Nurjannahijan1@gmail.com', 8, '2023-07-15', '07:00:00', '08:00:00', 'GoogleAds', 1, 1, NULL, 0, 0, 0, 'Sudah Selesai', 229000, '2023-07-11 15:00:49', '2023-07-19 02:42:37', 'konseling via gmeet'),
(17, '3d9c9419-d4e0-4116-a21a-034e6204591c', 'Herman Ramli', '082239600263', 'hermanramli81@gmail.com', 8, '2023-07-13', '13:00:00', '14:00:00', 'GoogleAds', 1, 1, NULL, 0, 0, 0, 'Sudah Selesai', 229000, '2023-07-12 10:09:48', '2023-07-13 09:44:13', 'konselinf video call gmeet'),
(18, 'ec31b29a-2e4a-4c7b-b359-692f3e0dc17a', 'Herman Ramli', '082239600263', 'hermanramli81@gmail.com', 8, '2023-07-20', '19:00:00', '20:00:00', 'GoogleAds', 1, 1, NULL, 1, 0, 0, 'Belum Selesai', 229000, '2023-07-19 02:47:07', '2023-07-20 08:06:30', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `key` varchar(255) NOT NULL,
  `value` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `name`, `key`, `value`, `type`, `created_at`, `updated_at`) VALUES
(1, 'mail_mailer', 'mail_mailer', 'smtp', 'email', '2022-08-26 13:41:51', '2022-08-26 13:41:51'),
(2, 'mail_driver', 'mail_driver', 'smtp', 'email', '2022-08-26 13:41:51', '2022-08-26 13:41:51'),
(3, 'mail_host', 'mail_host', 'mail.ditamadigital.co.id', 'email', '2022-08-26 13:41:51', '2022-08-26 13:41:51'),
(4, 'mail_port', 'mail_port', '587', 'email', '2022-08-26 13:41:51', '2022-08-26 13:41:51'),
(5, 'mail_username', 'mail_username', 'system@ditamadigital.co.id', 'email', '2022-08-26 13:41:51', '2022-08-26 13:41:51'),
(6, 'mail_password', 'mail_password', 'system@ditamadigital.co.id', 'email', '2022-08-26 13:41:51', '2022-08-26 13:41:51'),
(7, 'mail_encryption', 'mail_encryption', 'tls', 'email', '2022-08-26 13:41:51', '2022-08-26 13:41:51'),
(8, 'mail_from_address', 'mail_from_address', 'system@ditamadigital.co.id', 'email', '2022-08-26 13:41:51', '2022-08-26 13:41:51'),
(9, 'mail_from_name', 'mail_from_name', 'Disbursement System Team', 'email', '2022-08-26 13:41:51', '2022-08-26 13:41:51'),
(10, 'name', 'name', 'Bagikan Ceritamu', 'General', '2022-08-26 13:41:51', '2023-03-27 01:01:07'),
(11, 'logo', 'logo', '84ad6a69-7987-4e06-b503-700c05317be5.png', 'General', '2022-08-26 13:41:51', '2023-04-01 20:21:09'),
(12, 'favicon', 'favicon', '90a9cefe-0bfe-4055-904f-a045a06c89ac.ico', 'General', '2022-08-26 13:41:51', '2023-05-30 04:08:56'),
(13, 'facebook', 'facebook', 'https://www.facebook.com/profile.php?id=100092706791234&mibextid=ZbWKwL', 'Social Link', '2022-08-26 14:11:53', '2023-05-22 10:21:24'),
(14, 'instagram', 'instagram', 'https://instagram.com/bagikancerita_mu?igshid=NTc4MTIwNjQ2YQ==', 'Social Link', '2022-08-26 14:11:53', '2023-05-22 10:21:24'),
(15, 'twitter', 'twitter', 'https://twitter.com/?lang=en', 'Social Link', NULL, '2023-03-27 23:40:54'),
(16, 'whatsapp', 'whatsapp', '6281399991459', 'Social Link', NULL, '2023-04-01 02:10:27'),
(17, 'email', 'email', 'temanberbagicerita23@gmail.com', 'Social Link', NULL, '2023-06-23 22:29:05'),
(19, 'phone', 'phone', '6281399991459', 'Social Link', NULL, '2023-05-29 01:13:23');

-- --------------------------------------------------------

--
-- Table structure for table `term_conditions`
--

CREATE TABLE `term_conditions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `term_conditions`
--

INSERT INTO `term_conditions` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Penggunaan Umum', '<p style=\"text-align:justify\">● Kami adalah <strong>PT Teman Berbagi Cerita</strong> suatu perusahaan yang bergerak di bidang penyediaan layanan konsultasi dan pelatihan dengan menghubungkan Pengguna dengan Penyedia Jasa Psikologi yang telah bekerja sama dengan kami ( Mitra)&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">● Layanan ini juga merupakan layanan konsultasi untuk menghubungkan pengguna dengan para Pakar yang tergabung dalam Teman Berbagi Cerita. Pengguna dapat mengkonsultasikan masalah pribadi pengguna dan juga belajar dari para Pakar terkait hal-hal penting dalam kehidupan.&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">● Layanan ini tidak diperuntukan untuk digunakan dalam kasus diagnosis kondisi kejiwaan yang akut.&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">● PLATFORM INI TIDAK DITUJUKAN UNTUK MENDIAGNOSA, TERMASUK MEMBERIKAN INFORMASI PERIHAL PEMAKAIAN OBAT-OBATAN ATAU PERAWATAN YANG SESUAI UNTUK ANDA, DAN ANDA DISARANKAN UNTUK MENGABAIKAN SARAN SEPERTI ITU APABILA DIBERIKAN KEPADA ANDA MELALUI PLATFROM INI.&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">● Anda setuju, yakin, dan mengakui bahwa Platform ini tidak diperuntukan sebagai hotline centre berkaitan dengan PERILAKU ATAU TINDAKAN YANG DAPAT MENYAKITI ATAU MEMBAHAYAKAN DIRI ANDA SENDIRI ATAUPUN ORANG LAIN; TERDAPAT ORANG LAIN YANG SEDANG DALAM BAHAYA, ATAU ANDA MEMILIKI KEBUTUHAN MEDIS DARURAT, ANDA HARUS SEGARA MENGHUBUNGI LAYANAN DARURAT YANG ADA DI AREA ANDA DAN MEMBERITAHU PIHAK YANG BEROTORITAS.&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">● Platform ini dapat memiliki beberapa konten, produk atau layanan lain yang telah diajukan atau disediakan oleh pihak ketiga (&ldquo;Konten milik Pihak Ketiga&rdquo;), tautan menuju Konten dari Pihak Ketiga (termasuk tetapi tidak dibatasi pada tautan menuju website lain), atau iklan yang berhubungan dengan Konten Pihak Ketiga. Anda memastikan dan mengakui bahwa Kami tidak bertanggung jawab atas Konten dari Pihak Ketiga, termasuk (tetapi tidak dibatasi pada) produk apapun yang berhubungan, praktek, syarat dan kebijakan, dan Kami tidak bertanggung jawab atas kerusakan atau kerugian yang disebabkan oleh Konten Pihak Ketiga. &nbsp;</p>', '2023-04-22 16:42:06', '2023-04-22 16:50:05'),
(2, 'Para Pakar dan Layanan Konsultasi', '<p style=\"text-align:justify\">● Anda setuju, yakin dan mengakui bahwa layanan konsultasi melalui Bagikanceritamu.com tidak dapat dijadikan sebagai satu-satunya acuan atas keputusan kesehatan atau permasalahan Anda. Kami menyarankan Anda untuk mencari saran atau layanan konsultasi oleh profesional yang berkualifikasi di bidangnya.&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">● Para Pakar Psikologis memiliki komitmen untuk memberikan upaya maksimal dalam mendengarkan, membantu dan memberikan saran pada permasalahan dan melindungi informasi pribadi Anda.&nbsp;<span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\"><span style=\"color:black\"> </span></span></span></span></span></p>', '2023-04-22 16:50:54', '2023-04-22 16:56:15'),
(3, 'Psikolog Bagikanceritamu.com', '<p style=\"text-align:justify\">Psikolog <strong>Bagikanceritamu.com</strong> merupakan Psikolog yang memiliki surat ijin praktek terdaftar dalam Himpunan Psikolog Indonesia serta mengikuti peraturan berkaitan tenaga kesehatan medis oleh Kementerian Kesehatan Republik Indonesia. Terdapat seleksi terlebih dahulu untuk menentukan Psikolog yang berafiliasi dengan <strong>Bagikanceritamu.com</strong> Kami berusaha memperbaiki dan memberikan pelayanan terbaik dari waktu ke waktu, dalam kebijakan Kami, harap Anda ketahui bahwa Kami tidak hadir untuk menguji, dan tidak menjamin verifikasi dari, keterampilan, gelar, kualifikasi, lisensi, sertifikat, kredensial, kemampuan atau latar belakang lainnya dari Para Pakar Psikologi..</p>', '2023-04-22 16:53:45', '2023-04-22 16:53:45'),
(4, 'Akun', '<p style=\"text-align:justify\">● Dengan ini Anda telah mengkonfirmasi dan setuju bahwa semua informasi yang Anda berikan dalam dan melalui layanan ini, serta informasi yang akan Anda berikan dalam dan melalui layanan ini di waktu kedepan adalah akurat, benar, terkini dan lengkap. Lebih lanjut, Anda setuju &nbsp;bahwa selama berlangsungnya Persetujuan ini Anda akan memastikan untuk memelihara dan memperbaharui informasi ini sehingga akan terus akurat, terkini dan lengkap.</p>\r\n\r\n<p style=\"text-align:justify\">● Dengan ini Anda telah mengkonfirmasi dan setuju bahwa Anda bertanggung jawab untuk menjaga kerahasiaan kata sandi Anda dan keamanan informasi lainnya yang berhubungan dengan akun Anda (umumnya &ldquo;akses akun&rdquo;). Kami menyarankan untuk Anda sering merubah kata sandi Anda dan untuk lebih berhati-hati dalam melindungi kata sandi Anda.</p>\r\n\r\n<p style=\"text-align:justify\">● Anda setuju untuk segera melapor kepada Kami tentang penggunaan akses akun Anda yang tidak sah atau masalah lain yang terkait dengan pelanggaran keamanan akun Anda.</p>\r\n\r\n<p style=\"text-align:justify\">● Anda setuju, yakin, dan mengakui bahwa Anda sepenuhnya bertanggung jawab terhadap semua aktifitas yang dilakukan melalui akses akun Anda. Lebih lanjut Anda mengakui dan setuju bahwa Kami akan memegang bahwa Anda bertanggung jawab atas kerusakan atau kehilangan yang terjadi karena penggunaan akses akun Anda oleh siapapun baik dengan atau tanpa persetujuan dan / atau pengetahuan Anda, dan Anda setuju untuk mengganti kerugian atas kerusakan dan kehilangan tersebut kepada kami.</p>\r\n\r\n<p style=\"text-align:justify\">●&nbsp; Anda setuju dan berkomitmen untuk tidak menggunakan akses akun atau akun orang lain untuk alasan apapun.</p>\r\n\r\n<p style=\"text-align:justify\">● Anda setuju dan berkomitmen untuk tidak menggunakan layanan ini untuk mempublikasi, mengirim atau menyampaikan salah satu dari hal berikut: (a) email dan / atau iklan yang tidak diminta atau promosi barang dan layanan; (b) perangkat lunak atau kode berbahaya; (c) konten yang melanggar hukum, melecehkan, melanggar privasi seseorang, kasar, mengancam, vulgar, cabul, SARA atau berpotensi berbahaya; (d) konten yang melanggar hak atau kekayaan intelektual Pihak Ketiga; (e) setiap konten yang dapat menyebabkan kerusakan pada Pihak Ketiga; (f) setiap konten yang dapat mengangkat, menyebabkan atau mendorong tindakan kriminal atau melanggar hukum yang berlaku.</p>\r\n\r\n<p style=\"text-align:justify\">● Anda setuju dan berkomitmen untuk tidak melanggar undang-undang hukum, aturan, kebijakan, regulasi atau kode etik setempat, negara, nasional atau internasional, dalam penggunaan layanan ini dan relasi Anda dengan Para Pakar dan kami.</p>\r\n\r\n<p style=\"text-align:justify\">● Anda akan mengganti kerugian Kami, membela Kami, dan tidak membahayakan Kami dari dan terhadap setiap dan semua tuduhan, kerugian, tindakan, tuntutan, kewajiban, biaya atau pengeluaran (termasuk, dan tanpa dibatasi, biaya perkara dan biaya pengacara yang wajar) yang timbul dari atau terkait dengan hal-hal berikut: (a) akses Anda atau penggunaan layanan; (b) tindakan apa pun yang dilakukan dengan akun atau akses akun Anda baik oleh Anda atau oleh orang lain; (c) pelanggaran Anda atas segala ketentuan dalam persetujuan ini; (d) tidak membayar untuk salah satu layanan (termasuk Layanan Konsultasi) yang telah diberikan melalui layanan; (e) pelanggaran Anda terhadap hak Pihak Ketiga manapun, termasuk, tanpa terkecuali, hak kekayaan intelektual, publikasi, kerahasiaan, hak milik atau hak pribadi. Pasal ini akan bertahan sampai kadaluarsa atau penghentian Persetujuan ini.</p>', '2023-04-22 16:54:54', '2023-04-22 16:55:59'),
(5, 'Privasi', '<p style=\"text-align:justify\">● Sesuai Kode Etik Psikologi Indonesia, dan pemberi Layanan Konsultasi (Psikolog dan Mentor) diwajibkan untuk menjamin kerahasiaan data, dokumen, dan informasi lainnya yang berkaitan dengan klien dan sesi Konsultasi terkait.</p>\r\n\r\n<p style=\"text-align:justify\">● DENGAN MENYETUJUI PERSETUJUAN INI DIARTIKAN BAHWA ANDA JUGA MENYETUJUI SYARAT DALAM PERSETUJUAN PRIVASI DARI PLRATFORM INI YANG TERSEDIA DI link berikut (&ldquo;PERSETUJUAN PRIVASI&quot;). PERSETUJUAN PRIVASI INI TERMASUK DAN BAGIAN DARI PERSETUJUAN INI. KETENTUAN YANG SAMA JUGA BERLAKU DALAM PERUBAHAN DAN REVISI DARI PERJANJIAN INI JUGA AKAN BERLAKU UNTUK PERUBAHAN DAN REVISI DALAM PERSETUJUAN PRIVASI.</p>', '2023-04-22 16:57:42', '2023-04-22 16:58:08'),
(6, 'Harga dan Pembayaran', '<p style=\"text-align:justify\">● Anda mengkonfirmasi dan menyetujui bahwa semua informasi terkait pembayaran yang Anda berikan dan akan diberikan di masa depan, kepada atau melalui Platform adalah akurat, terkini dan benar dan akan terus akurat, terkini dan benar.&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">● Anda mengkonfirmasi dan setuju untuk hanya menggunakan sarana pembayaran (kartu kredit atau lainnya) yang Anda miliki dan berwenang sepenuhnya untuk digunakan.&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">● Anda setuju bahwa semua interaksi saat ini dan masa depan (baik secara online atau offline) antara Anda dan Para Pakar Psikologi akan dibuat, dikelola dan ditagih melalui Platform.&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">● Anda setuju untuk membayar semua biaya dan biaya yang terkait dengan akun Anda secara tepat waktu dan sesuai dengan jadwal biaya, persyaratan dan tarif yang dipublikasikan di Platform. Biaya dan ongkos tersebut (termasuk pajak dan biaya keterlambatan, jika berlaku) dapat ditagih melalui kartu kredit Anda. Dengan memberikan</p>\r\n\r\n<p style=\"text-align:justify\">● Kami informasi kartu kredit Anda, Anda memberi kuasa kepada Kami untuk menagih dan meminta bayaran kepada Anda melalui kartu kredit itu. Anda setuju untuk mempertahankan informasi kartu kredit yang akurat dalam informasi akun Anda.&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">● Jika Anda melakukan pembayaran melalui Platform ini, atau melakukan pembayaran apapun melalui Kami, pembayaran tersebut adalah untuk Para Pakar Psikologi atas Layanan Konsultasinya. Kami mungkin membayar Para Pakar Psikologi dengan mengambil bagian dari pembayaran ini demi kelangsungan dan sistem operasi Platform ini (&ldquo;biaya mempergunakan Platform&rdquo;). Namun, terlepas dari biayanya Kami bukanlah Para Pakar Psikologi yang melakukan Lq`ayanan Konsultasi tersebut. Lebih lanjut, biaya untuk mempergunakan Platform ini dibuat oleh Para Pakar Psikologi dan bukan oleh Anda.</p>\r\n\r\n<p style=\"text-align:justify\">● Akan ada penambahan biaya jika anda reschedule jadwal konseling yang sudah terbooking. Biaya tambahan dapat dilihat pada bagian ketentuan reschedule.</p>', '2023-04-22 16:59:26', '2023-04-22 16:59:26'),
(7, 'Ketentuan Reschedule', '<p style=\"text-align:justify\">●Pengertian Reschedule adalah perubahan yang dapat dilakukan oleh client terkait dengan jadwal yang sudah dibooking oleh client.</p>\r\n\r\n<p style=\"text-align:justify\">● Hal yang dapat dilakukan oleh client melalui reschedule adalah melakukan pergantian jadwal dan atau pergantian Psikolog.</p>\r\n\r\n<p style=\"text-align:justify\">● Client dapat melakukan reschedule dengan cara menghubungi admin Bagikanceritamu.com&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">● Client dapat melakukan reschedule maksimal adalah 24 jam (dua puluh empat) sebelum sesi dimulai. Client tidak bisa melakukan reschedule apabila waktu sesi kurang dari 24 jam</p>\r\n\r\n<p style=\"text-align:justify\">● Client akan dikenakan biaya atas reschedule yang dilakukan. Adapun besarnya adalah Rp 75.000, - (Tujuh puluh Lima Ribu Rupiah) Untuk sesi offline Konseling dan Rp 150.000, - (Seratus lima puluh Ribu rupiah).</p>\r\n\r\n<p style=\"text-align:justify\">● Client hanya dapat melakukan 1x (satu) reschedule.</p>', '2023-04-22 17:00:41', '2023-04-22 17:00:41'),
(8, 'Batasan dan Kewajiban', '<p style=\"text-align:justify\">● ANDA SETUJU, YAKIN, DAN MENGETAHUI KEWAJIBAN YANG DISAMPAIKAN DALAM MENGGUNAKAN LAYANAN INI</p>\r\n\r\n<p style=\"text-align:justify\">● Pengguna tidak diperbolehkan untuk mengungkapkan informasi pribadi atau rahasia melalui Layanan, termasuk informasi akun bank, nomor identitas nasional, nomor telpon orang lain</p>\r\n\r\n<p style=\"text-align:justify\">● Pengguna dilarang melakukan tindakan yang bisa menyakiti atau merugikan diri sendiri ataupun orang lain termasuk didalamnya Para Pakar diluar kepentingan konsultasi</p>\r\n\r\n<p style=\"text-align:justify\">● Pengguna tidak dapat memodifikasi, mengadaptasi, atau mengubah Layanan atau situs web palsu yang mengaitkan dengan Satu Persen (layanan ini)</p>\r\n\r\n<p style=\"text-align:justify\">● Pengguna dilarang mengakses API pribadi dengan cara selain yang diizinkan oleh Satu Persen. Pengguna tidak dapat mengganggu atau mengacaukan Layanan atau server yang terhubung dengan layanan ini seperti mengirimkan worm, virus, spyware, malware atau kode lainnya yang bersifat merusak atau mengganggu.</p>\r\n\r\n<p style=\"text-align:justify\">● KAMI TIDAK AKAN BERTANGGUNG JAWAB ATAS DIRI ANDA ATAU PIHAK KETIGA UNTUK KERUSAKAN YANG TIDAK LANGSUNG, TIDAK SENGAJA, AKIBAT DARI SUATU KONSEKUENSI, KERUSAKAN KHUSUS, HUKUMAN DARI SUATU PERINGATAN.</p>\r\n\r\n<p style=\"text-align:justify\">● SECARA TEGAS KAMI MENOLAK TANGGUNG JAWAB APAPUN YANG BERUHUBUNGAN KEPADA GUGATAN ATAU TINDAKAN PIDANA YANG DIBUAT OLEH PROVIDER, YANG BERHUBUNGAN DENGAN LAYANAN PROVIDER MAUPUN TIDAK, YANG BERHUBUNGAN DENGAN PEMBAYARAN ANDA DENGAN LAYANAN PROVIDER TERSEBUT ATAU SEBALIKNYA. ANDA SETUJU, YAKIN, DAN MENGETAHUI UNTUK MENGHARGAI, MENJAGA DAN MENJAUHKAN KAMI DARI BAHAYA APAPUN YANG BERHUBUNGAN DENGAN GUGATAN DIATAS DAN SERUPA.</p>\r\n\r\n<p style=\"text-align:justify\">● Apabila hukum yang diterapkan tidak mengizinkan pembatasan tanggung jawab sebagaimana dimaksud di atas, maka pembatasan tersebut akan dianggap telah dimodifikasi semata-mata sejauh yang diperlukan untuk mematuhi undang-undang yang berlaku.</p>\r\n\r\n<p style=\"text-align:justify\">● Bagian ini (limitasi dan kewajiban) akan bertahan sampai kadaluarsa atau penghentian Persetujuan ini.</p>', '2023-04-22 17:02:04', '2023-04-22 17:02:04'),
(9, 'Penolakan Jaminan Lebih Lanjut', '<p style=\"text-align:justify\">● DENGAN INI ANDA MELEPASKAN KAMI DAN SETUJU UNTUK TIDAK MEMBAHAYAKAN KAMI DARI APAPUN, DAN TINDAKAN APAPUN, &nbsp;DAN TUDUHAN APAPUN YANG DIHASILKAN DARI LAYANAN INI, TERMASUK (TANPA DIBATASI) PERILAKU, KELALAIAN, SARAN, TANGGAPAN, NASEHAT, MASUKAN, INFORMASI DAN/ATAU LAYANAN KESEHATAN MENTAL PROFESIONAL APAPUN DAN LAYANAN LAINNYA YANG MEMBUTUHKAN LISENSI DAN/ATAU SERTIFIKAT, YANG DAPAT MEMILIKI AKSES DALAM LAYANAN INI.</p>\r\n\r\n<p style=\"text-align:justify\">● ANDA SETUJU, YAKIN, DAN MENGETAHUI BAHWA KAMI TIDAK MENINJAU, MEREKOMENDASI, MENGENDALIKAN, MENGEVALUASI ATAU MEMBERIKAN JAMINAN, PERWAKILAN ATAU GARANSI, DAN DENGAN TEGAS TIDAK MENGIKUTSERTAKAN SEMUA PERWAKILAN DAN GARANSI, SEHUBUNG DENGAN (A) PROVIDER APAPUN; (B) INFORMASI MENGENAI PROVIDER APAPUN TERMASUK TANPA PENGECUALIAN KUALIFIKASI, KEAHLIAN, PENGAKUAN ATAU LATAR BELAKANG DARI PENYEDIA LAYANAN APAPUN; (C) LAYANAN DARI PROVIDER APAPUN (PROVIDER DARI LAYANAN INI ATAUPUN TIDAK) TERMASUK DAN TANPA DIBATASI DENGAN PENDAPAT, &nbsp;SARAN, NASEHAT, REKOMENDASI, INFORMASI ATAU ARTIKEL KONTEN LAINNYA YANG DITULIS ATAU DIUTARAKAN OLEH PROVIDER TERSEBUT; (D) KONTEN DAN BAGIAN DARI LAYANAN PROVIDER TERSEBUT; (E) KONTEN DAN INFORMASI LAINNYA YANG DIUMUMKAN DALAM LAYANAN INI ATAU MELALUI LAYANAN INI; (F) VALIDITAS, KEAKURATAN, KETERSEDIAAN, KELENGKAPAN, KESELAMATAN, LEGALITAS, KEAMANAN, KERAHASIAAN, KUALITAS ATAU KETERLIBATAN PLATFORM DAN LAYANAN PROVIDER.</p>\r\n\r\n<p style=\"text-align:justify\">● ANDA SETUJU, YAKIN, DAN MENGETAHUI BAHWA LAYANAN INI DISEDIAKAN SEBAGAIMANA ADANYA DAN DENGAN ITU ANDA TIDAK AKAN MEMILIKI HAK ATAU TUNTUTAN TERHADAP KAMI. PEMAKAIAN LAYANAN INI ADALAH RESIKO DAN TANGGUNG JAWAB ANDA SENDIRI. &nbsp;DALAM BATASAN HUKUM YANG ADA SEMAKSIMAL MUNGKIN, KAMI DENGAN TEGAS MENOLAK SEMUA BENTUK JAMINAN APAPUN, BAIK TERSURAT MAUPUN TERSIRAT, TERMASUK TANPA DIBATASI PADA KELAYAKAN BERDAGANG, KEBEBASAN DARI PELANGGARAN, KEAMANAN, KESESUAIAN UNTUK TUJUAN ATAU KETELITIAN TERTENTU.</p>\r\n\r\n<p style=\"text-align:justify\">● KONSULTASI APAPUN DENGAN PROVIDER MELALUI LAYANAN INI TIDAK BISA DAN TIDAK DIANJURKAN MENGGANTIKAN PERTEMUAN DENGAN PROFESIONAL. ANDA DIANJURKAN UNTUK MELAKUKAN VERIFIKASI INFORMASI ATAS APAPUN YANG DIBERIKAN DARI PROVIDER APAPUN. KEPERCAYAAN APAPUN TERHADAP INFORMASI APAPUN MERUPAKAN TANGGUNG JAWAB DAN RESIKO DIRI ANDA SENDIRI.</p>\r\n\r\n<p style=\"text-align:justify\">● KAMI TIDAK MENANGGAPI, DAN TIDAK AKAN BERTANGGUNG JAWAB ATAS: (A) KEAKURATAN DAN KETERSEDIAAN DARI LAYANAN INI ATAU BAGIAN APAPUN DARI LAYANAN INI; ATAU (B) KERUSAKAN, KERUGIAN DAN LUKA APAPUN YANG DISEBABKAN ATAU BERHUBUNGAN DENGAN LAYANAN INI, PROVIDER ATAU LAYANAN PROVIDER APAPUN.</p>\r\n\r\n<p style=\"text-align:justify\">● Jika terjadi perselisihan mengenai transaksi yang dilakukan melalui layanan ini, dengan ini Anda membebaskan Kami dari berbagai tindakan, gugatan atau tuntutan dan dari setiap dan semua kerugian (secara langsung, tidak langsung, tanpa disengaja atau sebagai konsekuensi), kerusakan, kerugian atau biaya, termasuk, tanpa dibatasi, biaya pengadilan dan biaya pengacara, terhadap satu hal di atas atau lebih yang bertentangan dengan Anda.</p>\r\n\r\n<p style=\"text-align:justify\"><br />\r\n&nbsp;</p>', '2023-04-22 17:04:02', '2023-04-22 17:04:02'),
(10, 'Modifikasi, Penghentian, Interupsi dan Gangguan pada Layanan', '<p style=\"text-align:justify\">● Anda setuju, yakin, dan mengakui bahwa Kami dapat mengubah, menunda, mengganggu, atau menghentikan layanan, bagian dari layanan ini atau penggunaan layanan ini, baik untuk semua klien atau Anda secara khusus, kapan saja dengan atau tanpa pemberitahuan kepada Anda. Anda setuju dan mengakui bahwa Kami tidak bertanggung jawab atas tindakan-tindakan yang telah disebutkan di atas atau atas kerugian atau kerusakan yang diakibatkan oleh tindakan-tindakan disebutkan di atas.</p>\r\n\r\n<p style=\"text-align:justify\">● Untuk menghilangkan keraguan apapun, Kami dapat menghentikan atau mencegah Anda dalam penggunaan layanan apa pun yang disediakan oleh Satu Persen (termasuk dan tanpa dibatasi pada Layanan Konsultasi) atas pertimbangan Kami sendiri atas alasan apapun dan untuk jangka waktu kapanpun</p>\r\n\r\n<p style=\"text-align:justify\">● Layanan ini bergantung pada berbagai faktor seperti perangkat lunak, perangkat keras dan alat lainnya, baik yang dimiliki Kami atau yang dimiliki dan / atau dioperasikan oleh kontraktor dan pemasok Kita. Kami tidak menjamin bahwa layanan ini tidak akan mengalami gangguan atau akan aman, konsisten, tepat waktu atau bebas dari kesalahan.</p>', '2023-04-22 17:05:02', '2023-04-22 17:05:02'),
(11, 'Perhatian', '<p><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;PT Serif&quot;,serif\">Kami mungkin memberikan pemberitahuan atau komunikasi lainnya kepada Anda mengenai perjanjian ini atau aspek lainnya perihal layanan ini, melalui email ke alamat email yang sudah kami simpan dari Anda, melalui pos biasa atau dengan memasangnya secara online. Tanggal penerimaan akan dianggap tanggal pemberitahuan tersebut diberikan. Pemberitahuan yang dikirim kepada Kami harus dikirimkan ke email<a href=\"mailto: temanberbagicerita23@gmail.com\"> temanberbagicerita23@gmail.com</a></span></span></span></span></span></p>', '2023-04-22 17:06:25', '2023-04-22 17:06:25'),
(12, 'Catatan Penting Perihal Persetujuan Ini', '<p style=\"text-align:justify\">● Perjanjian ini dan hubungan Kami dengan Anda harus dimengertikan semata-mata sesuai dengan hukum Negara Indonesia, tidak termasuk peraturan yang mengatur pemilihan undang-undang.</p>\r\n\r\n<p style=\"text-align:justify\">● Anda tidak dapat menarik kembali persetujuan bahwa tempat yang ditentukan untuk tindakan atau proses yang timbul yang berhubungan dengan Persetujuan ini atau hubungan Kami dengan Anda, terlepas dari teori, adalah pengadilan negara yang berada di Indonesia. Anda tidak dapat menarik kembali persetujuan dari wilayah hukum dalam pengadilan yang disebutkan di atas dan dengan ini membebaskan keberatan apapun terhadap pelaksanaan wilayah hukum oleh pengadilan tercantum di atas.</p>\r\n\r\n<p style=\"text-align:justify\">● PERJANJIAN INI MENGKONSTITUSI KESELURUHAN PERSETUJUAN ANTARA ANDA DAN KAMI. ANDA MENGKONFIRMASI BAHWA ANDA TIDAK BERGANTUNG KEPADA PERJANJIAN ATAU PERWAKILAN APAPUN DENGAN KAMI KECUALI YANG TELAH DIAJUKAN DALAM PERSETUJUAN INI.</p>\r\n\r\n<p style=\"text-align:justify\">● Kami dapat mengubah Persetujuan ini dengan mempublikasi modifikasi tersebut pada layanan ini. Kecuali ditentukan oleh Kami, semua modifikasi akan secara langsung efektif pada saat publikasi. Oleh karena itu, Anda dianjurkan untuk sering memeriksa persyaratan Persetujuan ini. Tanggal terakhir dari Persetujuan ini akan dicantumkan di bagian bawah Persetujuan. Saat menggunakan layanan ini setelah perubahan Persetujuan menjadi efektif, maka Anda setuju untuk terikat dengan perubahan pada.</p>\r\n\r\n<p style=\"text-align:justify\">● Persetujuan ini. Jika Anda tidak menyetujui perubahan tersebut, Anda harus menghentikan akses ke layanan dan partisipasi dalam layanannya.</p>\r\n\r\n<p style=\"text-align:justify\">● Kami dapat dengan bebas mentransfer atau menetapkan Persetujuan ini atau apapun tanggung jawabnya sebagaimana telah diatur dalam ketentuan dokumen ini.</p>\r\n\r\n<p style=\"text-align:justify\">●&nbsp; Judul paragraf dalam Persetujuan ini semata-mata untuk kenyamanan dan tidak akan diterapkan dalam interpretasi Persetujuan ini.</p>\r\n\r\n<p style=\"text-align:justify\">● Jika ada ketentuan dalam Persetujuan ini yang dipegang oleh pengadilan dengan wilayah hukum yang kompeten sebagai tindakan ilegal, tidak sah, tidak dapat diterapkan, atau bertentangan dengan hukum, sisa ketentuan dalam Persetujuan ini akan tetap berlaku dan berlaku penuh.</p>\r\n\r\n<p style=\"text-align:justify\">● Untuk menghapus keraguan, semua pasal mengenai batasan kewajiban dan ganti rugi akan bertahan hingga penghentian atau berakhirnya Persetujuan ini.</p>', '2023-04-22 17:08:17', '2023-04-22 17:08:51');

-- --------------------------------------------------------

--
-- Table structure for table `testimonies`
--

CREATE TABLE `testimonies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_name` varchar(255) NOT NULL,
  `client_image` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `psychology_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonies`
--

INSERT INTO `testimonies` (`id`, `client_name`, `client_image`, `description`, `created_at`, `updated_at`, `psychology_id`) VALUES
(6, 'Klien M', 'bagikan-cerita-testimony-1683529560.png', 'Kak Devina ramah banget! Advice yang dia kasih pun juga bantu banget, selalu puas setiap habis sesi hehe', '2023-05-08 00:06:00', '2023-05-08 00:06:00', 4),
(7, 'Klien AY 1', 'bagikan-cerita-testimony-1683529614.png', '1. Setiap sesi dengan Devina sangat nyaman, karena saya merasa didengar total dan cara komunikasi Devina sangat baik, jadi saya bisa dengan mudah mengeluarkan apa yang saya tahan & memahami apa yang harus saya tangkap.\r\n\r\n2. Saya sempat di-diagnosa depresi karena ada suatu kejadian dan saya sempat ke psikolog dari RS namun kurang mendapat hal-hal yang bisa ditangkap. Namun waktu saya konsultasi dengan Devina, dari awal konseling sampai beberapa tahap sesi setelahnya, saya mendapat banyak hal baru, sudut pandang lain yang lebih baik, insight-insight yang sangat membantu, bisa mensyukuri banyak hal, dan akhirnya bisa meluruskan pikiran. Kalau saya waktu itu tidak konsultasi dengan Devina, mungkin saya tidak akan bisa berdiri lagi seperti sekarang.\r\n\r\n3. Tidak ada satupun sesi yang diberikan Devina yang kurang. Semua yang diberikan/dibahas sudah pas sesuai kadarnya.\"', '2023-05-08 00:06:55', '2023-05-08 00:06:55', 4),
(8, 'Klien AF', 'bagikan-cerita-testimony-1683529660.png', 'Sangat terbantu dengan konseling bersama Devina. Pendengar yang baik dan relatable. sangat friendly dan mudah untuk membuka diri.', '2023-05-08 00:07:41', '2023-05-08 00:07:41', 4),
(9, 'Klien KY', 'bagikan-cerita-testimony-1683529787.png', '1. Psikolog Devina Winarto sangat baik dan ramah. Dia dengan sangat sabar mau mendengarkan semua keluh kesah saya. Dia selalu berusaha sebisa mungkin membantu saya sembuh.\r\n2. Dari semua sesi konseling dengan Psikolog Devina Winarto, saya mulai bisa mengatur emosi saya dengan baik, membuka diri kepada orang-orang yang bisa dipercaya, mengetahui kepribadian dan kelebihan saya yang sebenarnya, dan beraktivitas dengan normal.', '2023-05-08 00:09:47', '2023-05-08 00:09:47', 4),
(10, 'Klien SI', 'bagikan-cerita-testimony-1683529817.png', 'Anak perempuan saya seorang remaja berumur 15 tahun, memiliki beberapa mental issue seperti low self esteem, anxiety, overthinking sampai trichotillomania yang sudah berjalan beberapa tahun. Memasuki SMA setelah 2 tahun sekolah online karena pandemic dia sulit menjalin pertemanan baru. Sewaktu masih di kelas 6 sudah pernah konsul beberapa waktu dengan seorang psikolog tetapi kurang cocok dan anak saya mogok tidak mau konsul lagi. Dengan mba Devina, anak saya merasa lebih nyambung komunikasi mengenai permasalahan dia, dan pendekatan mba Devina kepadanya lebih sesuai. Perlahan kemampuan komunikasi anak sy membaik, sekarang sudah punya beberapa teman di sekolahnya. Saat ini kemajuan lainnya, anak sy mulai mengurangi kebiasaannya mencabuti rambut, sehingga tidak terlihat terlalu botak lagi. Mba Devina juga berkomunikasi dengan saya mengenai perkembangan anak saya, memberikan saran-saran apa yang sebaiknya saya juga lakukan untuk anak saya.', '2023-05-08 00:10:17', '2023-05-08 00:10:17', 4),
(11, 'Klien F', 'bagikan-cerita-testimony-1683529845.png', '1. Kesan konseling dengan Devina : menyenangkan, sangat membantu dalam memecah + menyelesaikan permasalahan dan menenangkan diri dengan penyampaian yang tepat, membuka wawasan dan memberi sudut pandang lain terhadap permasalahan yang sedang dihadapi\r\n\r\n2.  Yang didapat saat dan setelah konseling dengan Devina : wawasan & sudut pandang lain dari suatu permasalahan, yang utama ketenangan diri, dan saya masih hidup hingga saat ini salah satunya atas konseling juga bantuan dari Devina', '2023-05-08 00:10:45', '2023-05-08 00:10:45', 4),
(12, 'Klien V', 'bagikan-cerita-testimony-1683529865.png', 'Konseling sangat membantu. Kak Devina tidak judgmental tapi sangat adil dalam memberikan komentar. Apa yang telah dikatakan Kak Devina sejauh ini sangat masuk akal dan juga actionable.', '2023-05-08 00:11:05', '2023-05-08 00:11:05', 4),
(13, 'Klien MA', 'bagikan-cerita-testimony-1683529889.png', 'Saya puas bercerita menumpahkan uneg2 tanpa ada judgement apapun... dan saya jadi merasa memiliki teman yang bisa membantu saya mencari solusi. Terimakasih banyak kak sylvia!', '2023-05-08 00:11:29', '2023-05-08 00:11:29', 2),
(14, 'Klien JB', 'bagikan-cerita-testimony-1683529910.png', 'Cukup baik untuk pengalaman pertama ke Psikolog, sangan helpful', '2023-05-08 00:11:50', '2023-05-08 00:11:50', 2),
(15, 'Client X', 'bagikan-cerita-testimony-1683529946.png', 'psikolog Sylvi dapat memahami masalah saya dan juga cepat dalam memberikan tanggapan juga solusi yang tepat', '2023-05-08 00:12:26', '2023-05-08 00:12:26', 2),
(16, 'Klien S', 'bagikan-cerita-testimony-1683531268.png', 'kak Sylvi mendengarkan dengan baik, memberi saya waktu, dan membantu saya menyelesaikan masalah dengan melibatkan diri saya sendiri', '2023-05-08 00:34:28', '2023-05-08 00:34:28', 2),
(17, 'kllien  N', 'bagikan-cerita-testimony-1683531291.png', 'Aku nyaman sekali dengan kak Sylvi. Menurutku beliau sangat capable sebagai psikolog yang memberi ruang aman bagiku.', '2023-05-08 00:34:51', '2023-05-08 00:34:51', 2),
(18, 'Klien F', 'bagikan-cerita-testimony-1683531310.png', 'kak Sylvia membantu saya melihat hal yang tidak saya sadari dan membantu saya memulai langkah perubahan.', '2023-05-08 00:35:10', '2023-05-08 00:35:10', 2),
(19, 'Klien S', 'bagikan-cerita-testimony-1688373902.png', 'Konseling dengan psikolog Tyas sesinya berjalan lancar, dalam sesi konseling di bahas lebih banyak diskusi. Konseling ini cukup membantu saya, psikolog Tyas memberikan pilihan kepada kami dan beliau tidak memberikan keputusan, semua tergantung kepada anak.', '2023-07-03 08:45:02', '2023-07-03 13:45:45', 12);

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

CREATE TABLE `topics` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `topic_name` varchar(255) NOT NULL,
  `topic_image` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`id`, `topic_name`, `topic_image`, `description`, `created_at`, `updated_at`) VALUES
(13, 'Gangguan Mood', 'mood swing.png', 'Gangguan mood adalah gangguan Kesehatan mental yang mempengaruhi keadaan emosi seseorang, gangguan ini biasa akan meluas dan berkepanjangan jika tidak dikendalikan. Mood yang tidak stabil tentunya akan mengganggu relasi kita dengan lingkungan social. Gangguan mood diantaranya adalah depresi, cemas, serta emosi yang cepat berubah dan tidak terkendali.', '2023-05-10 22:57:35', '2023-05-10 23:10:09'),
(14, 'Gangguan Kepribadian', 'personality disorder.png', 'Gangguan kepribadian adalah gangguan yang berkaitan dengan abnormalitas cara berpikir dan merasakan tentang diri sendiri dan orang lain. Hal ini secara signifikan akan mengganggu hubungan interpersonal dan intrapersonal seseorang yang akhirnya dapat mengganggu fungsi hidup seseorang. Gangguan kepribadian tersebut diantaranya borderline, narsistik, dependent, avoidant, histrionic, antisocial, paranoid, dan lainnya.', '2023-05-10 22:59:28', '2023-05-10 22:59:28'),
(15, 'Trauma', 'trauma.png', 'Trauma adalah perasaan takut dan cemas yang kuat, diakibatkan oleh kejadian, peristiwa, ataupun pengalaman yang dialami sendiri secara langsung maupun tidak langsung oleh seseorang. Gejala trauma biasanya muncul dalam bentuk serangan panic, kecemasan tinggi, ataupun mimpi buruk. Beberapa gangguan trauma diantaranya adalah, post traumatic stress disorder, fobia, trauma akut, dan lainnya.', '2023-05-10 22:59:53', '2023-05-10 22:59:53'),
(16, 'Parenting', 'parenting.png', 'Pola Asuh ( parenting) adalah pola orang tua dalam mengasuh dan mendidik anak dalam sebuah keluarga. Pola asuh yang sehat akan menghasilkan pengembangan moral, etika, serta perkembangan kepribadian dan konsep diri yang sehat pada anak. Hal ini dimulai sejak anak lahir hingga dewasa muda. Beberapa masalah yang sering terjadi dalam pola pengasuhan adalah hubungan komunikasi orangtua-anak yang kurang baik, emosi anak yang tidak terkendali, gangguan belajar, kenakalan remaja, kecanduan bermain, dan lainnya.', '2023-05-10 23:00:58', '2023-05-10 23:09:56'),
(17, 'Relationship', 'relationship.png', 'Hubungan (Relationship) adalah ikatan yang terus menerus yang dilakukan oleh dua orang atau lebih, seperti dalam sebuah keluarga, persahabatan, dan pernikahan. Dimana satu sama lain memiliki tingkat pengaruh yang kuat terhadap pemikiran, perasaan, dan tidakan satu sama lain. Permasalahan dalam hubungan biasanya dapat menyebabkan rasa tidak nyaman yang dapat mempengaruhi efektifitas kerja maupun fungsi hidup seseorang, terutama, mempengaruhi intimasi dari hubungan itu sendiri.', '2023-05-10 23:01:25', '2023-05-10 23:09:33'),
(18, 'Berduka', 'grieving.png', 'Berduka adalah kesedihan mendalam setelah mengalami kepergian dan kehilangan sosok yang dicintai baik orang terdekat maupun hewan peliharaan kesayangan. Semakin erat ikatan emosional kita dengan sosok almarhum, maka semakin berat perasaan berduka yang harus kita lewati. Tidak jarang menyebabkan tekanan pada aspek psikis maupun psikologis kita. Khususnya saat memikirkan rasa rindu, kesendirian, serta masa depan yang harus kita jalani tanpa sosok yang dicintai.', '2023-05-10 23:01:52', '2023-05-10 23:09:24'),
(19, 'Adiksi', 'addiction.png', 'Adiksi adalah suatu keadaan dimana orang merasa ketergantungan secara psikologis akan sebuah hal tertentu yang menyebabkan disfungsi rutinitas hidup dan ketidakmampuan untuk bekerja ataupun melanjutkan pendidikan. Adiksi dapat terdiri dari berbagai macam hal mulai dari obat-obatan terlarang, minuman keras, social media, penggunaan internet, game, seks, dan pornografi, ataupun hal lainnya.', '2023-05-10 23:02:33', '2023-05-10 23:02:33'),
(20, 'Karir dan Pekerjaan', 'carrer.png', 'Karir dan pekerjaan yang berkembang secara positif terbukti berbanding lurus dengan tingkat kepuasan hidup seseorang. Dalam berkarir, kita akan menghadapi proses untuk menghadapi masalah, mengolah organisasi, dan memilih jalan terbaik  untuk perkembangan karir kita. Namun, tidak jarang kita dihadapkan pada stagnasi dan kebingungan dalam pemilihan karir dan keputusan hidup. Saat menghadapi stagnasi, tidak sedikit orang yang mengalami kecemasan, depresi, maupun stress berkepanjangan yang dapat menyebabkan burnout.', '2023-05-10 23:03:13', '2023-05-10 23:03:13'),
(21, 'Gangguan Kejiwaan', 'schizophrenia.png', 'Gangguan kejiwaan  adalah suatu kondisi Kesehatan mental yang mempengaruhi perubahan emosi, pemikiran, dan perilaku, yang pada umumnya ditandai dengan halusinasi dan delusi. Gangguan jiwa, umumnya menyebabkan penurunan fungsi yang signifikan dalam aktifitas social, pekerjaan, dan hubungan keluarga. Beberapa contoh gangguan kejiwaan adalah schizophrenia, schizoaffective, dan lainnya.', '2023-05-10 23:03:36', '2023-05-10 23:03:36'),
(22, 'Gangguan Seksual', 'sex-02.png', 'Gangguan seksual merupakan gangguan yang menyebakan adanya penurunan hasrat seksual atau adanya hambatan dalam menikmati aktifitas seksual yang biasanya disebabkan oleh aspek psikologis, seperti kecemasan. Gangguan seksual biasanya dapat mengganggu keharmonisan hubungan pasangan.', '2023-06-05 12:27:42', '2023-06-05 14:40:37'),
(23, 'Konsep Diri', 'undraw_career_progress_ivdb.png', 'Konsep Diri merupakan deskripsi dan evaluasi dari seorang individu mengenai diri sendiri, termaksud karakteristik psikologis dan fisik, keterampilan, dan peran. Konsep diri berkontribusi pada identitas individu dari waktu ke waktu. Gangguan konsep diri diantaranya adalah body image, self esteem, dan eating disoder.', '2023-06-05 12:28:29', '2023-06-05 13:02:03'),
(24, 'Gangguan Tumbuh Kembang', 'adhd.png', 'Gangguan Tumbuh Kembang merupakan suatu kondisi dalam masa pertumbuhan seorang anak mengalami ketidakwajaran pada fisik atau mental. Gangguan tumbuh kembang anak diantaranya ialah ADHD, dyslexia, autism, gangguan sensorik motorik, CPAD, keterbelkangan mental dan celebral palsy.', '2023-06-05 12:28:54', '2023-06-05 13:05:04'),
(25, 'Dinamika keluarga', 'relationship.png', 'Dalam setiap keluarga, pasti terdapat ciri budaya dan interaksi antar anggota keluarga yang membentuk sebuah dinamika. Perubahan situasi, budaya, serta interaksi dalam keluarga dapat mempengaruhi dinamika keluarga tersebut baik secara positif maupun negatif. Hal ini juga mempengaruhi kesehatan mental setiap anggotanya. Dinamika keluarga yang positif dapat menjadi dasar kebahagiaan sebuah keluarga.', '2023-06-14 05:03:59', '2023-06-14 05:03:59');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `profile_image` varchar(255) DEFAULT NULL,
  `role` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `profile_image`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'admin', 'admin@admin.com', '$2y$10$nvYhMrnsoGLF14KRljGw4.T0eFSIP6mPa/KGnIAbiwMzp20n.ZbIu', 'foto_user.png', 'admin', NULL, '2023-03-25 00:44:14', '2023-05-12 08:49:08'),
(4, 'admin test', 'mrizkysaputra.xmia1@gmail.com', '$2y$10$Gif1eQEoTyk0Spu0i9CHE.CwBSXYtAKqHkfuuZMRIUbg1bAQFJyHK', 'Capture.PNG', 'admin', NULL, '2023-03-25 02:50:43', '2023-03-25 02:50:43'),
(5, 'test', 'test@gmail.com', '$2y$10$t3xHkN19.FQVq.lt84AvXuDZQzJ548LcDYwcEPY5.rP5W9YegyPdi', NULL, 'finance', NULL, '2023-05-23 11:43:01', '2023-05-23 12:02:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `albums`
--
ALTER TABLE `albums`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `headers`
--
ALTER TABLE `headers`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `prices`
--
ALTER TABLE `prices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `psychologies`
--
ALTER TABLE `psychologies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `psychology_orders`
--
ALTER TABLE `psychology_orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `term_conditions`
--
ALTER TABLE `term_conditions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonies`
--
ALTER TABLE `testimonies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `topics`
--
ALTER TABLE `topics`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `albums`
--
ALTER TABLE `albums`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `headers`
--
ALTER TABLE `headers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `prices`
--
ALTER TABLE `prices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `psychologies`
--
ALTER TABLE `psychologies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `psychology_orders`
--
ALTER TABLE `psychology_orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `term_conditions`
--
ALTER TABLE `term_conditions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `testimonies`
--
ALTER TABLE `testimonies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `topics`
--
ALTER TABLE `topics`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
