-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2023 at 02:59 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cgv`
--

-- --------------------------------------------------------

--
-- Table structure for table `cinemas`
--

CREATE TABLE `cinemas` (
  `id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `name` varchar(127) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cinemas`
--

INSERT INTO `cinemas` (`id`, `city_id`, `name`, `address`) VALUES
(1, 13, 'Focal Point', 'Focal Point Mall Lt. 3 - Jl. Ring Road Setiabudi, Medan'),
(2, 1, 'Grand Indonesia', 'Grand Indonesia, West Mall Building 8th Floor Jl. M.H. Thamrin No. 1 Jakarta - Pusat'),
(3, 1, 'Pacific Place', 'One Pacific Place Mall 6th Floor, Jl. Jendral Sudirman Kav. 52 - 53 Sudirman Central Business District Jakarta Pusat'),
(4, 1, 'Central Park', 'Mall Central Park (Podomoro City) -Level 8 ( P13 ) Jl. Jend. S. Parman Kav 28 Jakarta Barat 11470'),
(5, 1, 'Slipi Jaya', 'Plaza Slipi Jaya Lantai 4 Jl. Letjend S Parman no. Kav 17-18 - Jakarta Barat 11410'),
(6, 1, 'Green Pramuka Hall', 'Green Pramuka Square 1st Floor, Jl. Jendral Ahmad Yani Kav. 49, Rawasari Cempaka Putih, Central Jakarta 10570'),
(7, 2, 'Paris Van Java', 'Paris van Java Resort Lifestyle Place - Jl. Sukajadi 137-139, Ground floor, Level 1 dan Level 2 Bandung 40162'),
(8, 3, 'Paradise Walk Serpong', 'Paradise Walk Serpong UG Floor Jl. Paradise Serpong City, Babakan, Kec. Setu, Kota Tangerang Selatan, Banten 15315'),
(9, 4, 'Bekasi Cyber Park', 'Mall Bekasi Cyber Park Lantai 3 Jl. KH Noer Alie no. 177 - Bekasi'),
(10, 5, 'Plaza Balikpapan', 'Plaza Balikpapan Lt. 1 - Jl. Jend. Sudirman No. 1, Kelandasan Ilir, Balikpapan'),
(11, 6, 'Jwalk Mall', 'Sahid J-Walk Mall 3rd fl. Jl Babarsari No.2 Catur Tunggal, Depok, Sleman. DI Yogyakarta 55281'),
(12, 7, 'Ecoplaza Citraraya Cikupa', 'Eco Plaza Lt. 2 - Jl. Ecopolis BoulevardSelatan, Citra Raya, Cikupa'),
(13, 8, 'Grage City Mall', 'Grage City Mall Lt. 2 - Jl. Ahmad Yani, Pegambiran, Cirebon'),
(14, 9, 'Marvell City', 'Marvel City Mall 2nd floor Jl. Ngagel No 123, Wonokromo, Surabaya, Jawa Timur 60246'),
(15, 10, 'Festive Walk', 'Festive Walk Mall lantai 5 Jl Galuh Mas Raya Komplek Perumahan Galuh - Karawang barat 41361'),
(16, 11, 'Grand Kawanua City', 'Grand Kawanua Citywalk Lt. 1 - Jl. Mr A.A. Maramis, Kayuwatu / Kairagi II , Manado'),
(17, 12, 'Grand Kawanua City', 'Grand Kawanua Citywalk Lt. 1 - Jl. Mr A.A. Maramis, Kayuwatu / Kairagi II , Manado'),
(18, 14, 'Rita Supermall', 'Rita Supermall Lt. 5 - Jl. Jend Sudirman No. 296, Sokanegara, Purwokerto'),
(19, 15, 'Transmart Palembang', 'Transmart Palembang 3rd floor, 26 Ilir, Bukit Kecil, Kota Palembang, Sumatera Selatan 30127'),
(20, 16, 'Depok Mall', 'DMall Depok Lt. 4 - Jl. Margonda Raya Kav 88 , Kemiri Muka , Beji'),
(21, 17, 'Transmart Tegal', 'Transmart Tegal Lt. 1 - Jl. Kolonel Sugiono, Kemandungan, Tegal 52112'),
(22, 18, 'Holiday Pekanbaru', 'Holiday 88 Jalan Sultan Syarif Qasim No.120, Kota Tinggi, LimaPuluh, Rintis, LimaPuluh, Kota Pekanbaru, Riau 28112'),
(23, 19, 'Transmart Mataram', 'Transmart Mataram Lt. 1 - Jl. Selaparang No. 60, Mataram, Nusa Tenggara Barat'),
(24, 20, 'Transmart Solo', 'Transmart Solo Pabelan 5th floor Jl. Raya A. Yani No. 234, Pabelan Kartosuro, Pabelan, Kartasura, Kabupaten Sukoharjo, Jawa Tengah 57162'),
(25, 21, 'Transmart Lampung', 'Transmart Lampung 4th floor Jl. Sultan Agung No.283, Way Halim Permai, Way Halim, Kota Bandar Lampung, Lampung 35132'),
(27, 22, 'Icon Mall Gresik', 'Jl. Dr. Wahidin S.H. No. 712, Kembangan,Kebomas, Kabupaten Gresik, Jawa Timur 61124'),
(28, 23, 'Vivo Sentul', 'Vivo Sentul Bogor Jl. Raya Bogor KM 50, Cimandala, 16710, Jawa Barat, Kab. Bogor'),
(29, 24, 'Blitar Square', 'Blitar Square, Jl. Merdeka No.6-7 Lantai 3 kepanjen lor, kepanjen kidul, Blitar - Jawa Timur'),
(30, 25, 'Plaza Mulia', 'Jl. Bhayangkara No.58, 01, Bugis, Kec. Samarinda Ulu, Kota Samarinda, Kalimantan Timur 75242'),
(31, 26, 'Park Avenue Batam', 'Park Avenue Batam Upper Ground, Jl.Orchard Boulevard, Belian, Batamkota, Kep. Riau 29444'),
(32, 27, 'Sadang Terminal Square', 'Sadang Town Square, Jl. Veteran, ciwangi, 242B, bungur sari, Purwakarta - Jawa Barat 41118'),
(33, 28, 'Plaza Lawu Madiun', 'Plaza Lawu Madiun Lantai 3, JL. Pahlawan, Kartoharjo, Madiun - Jawa Timur 63117'),
(34, 29, 'Kediri Mall', 'Kediri Mall Lantai 7 Jl. Hayam Wuruk No. 46, Kediri, Jawa Timur.'),
(35, 30, 'Living Plaza Jababeka', 'Living Plaza Jababeka Lt. 1, Mekarmukti,Kec. Cikarang Utara, Kabupaten Bekasi, Jawa Barat 17530'),
(36, 31, 'Wijaya Kusuma', 'Wijaya Kusuma Mall, Jl. Mangunharjo, Mayangan Probolinggo, Jawa timur 67218'),
(37, 32, 'Panakkukang Square', 'PANAKKUKANG MALL Lantai 2 Jalan Adhyaksa No.1 Panakkukang Mas Makassar, Sulawesi Selatan'),
(38, 33, 'Malang City Point', 'Malang City Point Jl. Terusan Dieng No.32, Pisang Candi, Kec. Sukun, Kota Malang, Jawa Timur 65115'),
(39, 34, 'Malang City Point', 'Malang City Point Jl. Terusan Dieng No.32, Pisang Candi, Kec. Sukun, Kota Malang, Jawa Timur 65115'),
(40, 35, 'Raya Padang', 'Jalan Ps. Baru 2 No. 2, Kampung Jao, Padang Barat, Kp. Jao, Padang Bar, Kota Padang, Sumatera Barat'),
(41, 36, 'Ecoplaza Citra Maja Raya', 'Kabupaten Serang, Banten Jalan Raya Kopo, Citra Maja Raya,');

-- --------------------------------------------------------

--
-- Table structure for table `cinema_auditoriums`
--

CREATE TABLE `cinema_auditoriums` (
  `id` int(11) NOT NULL,
  `cinema_id` int(11) NOT NULL,
  `name` varchar(127) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `city_id` int(11) NOT NULL,
  `city_name` varchar(127) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`city_id`, `city_name`) VALUES
(1, 'Jakarta'),
(2, 'Bandung'),
(3, 'Tanggerang Selatan'),
(4, 'Bekasi'),
(5, 'Balik Papan'),
(6, 'Yogyakarta'),
(7, 'Tanggerang'),
(8, 'Cirebon'),
(9, 'Surabaya'),
(10, 'Karawang'),
(11, 'Manado'),
(12, 'Mojokerto'),
(13, 'Medan'),
(14, 'Purwokerto'),
(15, 'Palembang'),
(16, 'Depok'),
(17, 'Tegal'),
(18, 'Pekanbaru'),
(19, 'Mataram'),
(20, 'Solo'),
(21, 'Lampung'),
(22, 'Gresik'),
(23, 'Bogor'),
(24, 'Blitar'),
(25, 'Samarinda'),
(26, 'Batam'),
(27, 'Purwakarta'),
(28, 'Madiun'),
(29, 'Kediri'),
(30, 'Cikarang'),
(31, 'Probolinggo'),
(32, 'Makasar'),
(33, 'Malang'),
(34, 'Jember'),
(35, 'Padang'),
(36, 'Serang');

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `description` text NOT NULL,
  `censor_rating` varchar(11) NOT NULL,
  `language` varchar(64) NOT NULL,
  `subtitle` varchar(64) NOT NULL,
  `duration` varchar(64) NOT NULL,
  `poster` varchar(128) NOT NULL,
  `trailer` varchar(128) NOT NULL,
  `starring` varchar(128) DEFAULT NULL,
  `director` varchar(128) DEFAULT NULL,
  `genre` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `title`, `description`, `censor_rating`, `language`, `subtitle`, `duration`, `poster`, `trailer`, `starring`, `director`, `genre`) VALUES
(1, 'FAST X', 'Selama banyak misi dan melawan rintangan yang mustahil, Dom Toretto dan keluarganya telah mengakali dan mengalahkan setiap musuh di jalan mereka. Sekarang, mereka menghadapi lawan paling mematikan yang pernah mereka hadapi: Ancaman mengerikan yang muncul dari bayang-bayang masa lalu yang dipicu oleh dendam berdarah, dan yang bertekad untuk menghancurkan keluarga ini dan menghancurkan segalanya dan semua orang yang dicintai Dom, selamanya. Dalam Fast Five 2011, Dom dan krunya mengalahkan gembong narkoba Brasil Hernan Reyes yang jahat dan meruntuhkanl kerajaannya di sebuah jembatan di Rio De Janeiro. Apa yang tidak mereka ketahui adalah bahwa putra Reyes, Dante, menyaksikan semuanya dan telah menghabiskan 12 tahun terakhir mendalangi rencana untuk membuat Dom membayar harga tertinggi. Plot Dante akan menyebarkan keluarga Dom dari Los Angeles ke katakombe Roma, dari Brasil ke London dan dari Portugal ke Antartika. Sekutu baru akan dikumpulkan dan musuh lama akan muncul kembali. Tapi semuanya berubah ketika Dom menemukan bahwa putranya sendiri yang berusia 8 tahun adalah target utama balas dendam Dante.', '13+', 'English', 'BAHASA INDONESIA', '141 minutes', 'fast_x.jpg', 'fast_x2.png', 'Vin Diesel, Michelle Rodriguez, Jordana Brewster, Tyrese Gibson', 'Louis Leterrier', 'ACTION'),
(3, 'THE LITTLE MERMAID', 'Ariel, putri Raja Triton yang bungsu sekaligus yang paling membangkang, mendambakan untuk kenal lebih jauh kehidupan di atas laut, dan ketika sedang berkunjung ke daratan, ia jatuh cinta pada Pangeran Eric yang menawan. Kaum putri duyung dilarang bergaul dengan manusia, namun Ariel merasa harus mengikuti kata hatinya. Lalu ia membuat kesepakatan dengan penyihir jahat, Ursula, yang menjanjikannya pengalaman hidup di daratan, tetapi kesepakatan itu ternyata menaruh nyawanya—serta tahta ayahnya—dalam bahaya.', 'SU', 'English', 'BAHASA INDONESIA', '135 Minutes', 'the_little_mermaid.jpg', 'the_little_mermaid2.png', 'Halle Bailey, Jonah Hauer-King, Melissa McCarthy', 'Rob Marshall', 'FANTASY'),
(4, 'SPIDER-MAN: ACROSS THE SPIDER-VERSE', 'Miles Morales melontarkan diri melintasi Multiverse, di mana dia bertemu dengan tim Spider-People yang bertugas melindungi keberadaannya. Saat para pahlawan bentrok tentang cara menangani ancaman baru, Miles harus mendefinisikan kembali arti dari menjadi seorang pahlawan.', 'SU', 'English', 'BAHASA INDONESIA', '140 Minutes', 'spider_man.jpg', 'spider_man2.png', 'Shameik Moore, Hailee Steinfeld, Oscar Isaac\r\n', 'Joaquim Dos Santos, Kemp Powers, Justin K. Thompson', 'ANIMATION'),
(5, 'GUARDIANS OF THE GALAXY VOL. 3', 'Masih bersedih karena kehilangan Gamora, Peter Quill mengumpulkan timnya untuk mempertahankan alam semesta dan salah satu dari mereka, sebuah misi yang bisa menjadi akhir dari Penjaga jika tidak berhasil.', '13+', 'English', 'BAHASA INDONESIA', '150 Minutes', 'guardian_of_galaxy.jpg', 'guardian_of_galaxy2.png', 'Chris Pratt, Zoe Saldana, Dave Bautista', 'James Gunn', 'ACTION'),
(6, 'THE GHOST STATION', 'Na-young, reporter yang membutuhkan berita eksklusif yang hit. Berkat bantuan temannya Woo-won, dia belajar tentang serangkaian kematian di stasiun kereta bawah tanah Oksu. Dia memulai laporan dengan bantuannya, dan kejadian aneh mulai terjadi padanya… Ada yang mengintai… di stasiun Oksu…', '13+', 'Korean', 'BAHASA INDONESIA', '80 Minutes', 'the_ghost_station.jpg', 'the_ghost_station2.png', 'KIM Bo-ra, KIM Jae-hyun, SHIN So-yul\r\n', 'JEONG Yong-ki', 'HORROR'),
(7, 'HELLO GHOST', 'Setelah percobaan bunuh dirinya gagal, Kresna mendapati dirinya dikuntit oleh empat hantu dengan karakter yang berbeda-beda. Kuatno, hantu tua bangka yang mata keranjang, Bima, hantu perokok yang dulunya adalah supir angkot, Lita, hantu melankolis yang mudah menangis, dan Chika, hantu kecil yang senang menggunakan sepatu roda. Mereka hanya akan pergi jika Kresna mau memenuhi permintaan mereka masing-masing. Kresna tidak berdaya, akhirnya menuruti keinginan mereka. Namun ternyata, dalam proses menuntaskan misi tersebut, Kresna sendiri yang menemukan makna baru bagi hidupnya dan juga cintanya pada Suster Linda.', '13+', 'BAHASA INDONESIA', 'None', '114 Minutes', 'hello_ghost.jpg', 'hello_ghost2.png', 'Onadio Leonardo, Enzy Storia, Indro Warkop', 'Indra Gunawan', 'COMEDY'),
(8, 'SEWU DINO', 'Ditengah kesulitan ekonomi, Sri diterima bekerja untuk keluarga Atmojo dengan bayaran yang tinggi, karena keunikan yang ia miliki, yaitu lahir pada hari Jumat Kliwon. Bersama Erna dan Dini, mereka dibawa ke sebuah gubuk tersembunyi di tengah hutan. Di gubuk tersebut, Sri, Erna, dan Dini bertugas untuk memandikan Dela Atmojo, cucu dari Mbah Karsa Atmojo yang tidak sadarkan diri karena kutukan santet Sewu Dino, salah satu santet yang paling mengerikan. Mereka tidak bisa lari dari gubuk tersebut karena terikat perjanjian mistis dengan Mbah Karsa Atmojo, dan mereka harus selesaikan ritual sampai hari ke 1000. Jika melanggar, kematian menanti mereka.\r\n', '13+', 'BAHASA INDONESIA', 'None', '121 Minutes', 'sewu_dino.jpg', 'sewu_dino2.png', 'Mikha Tambayong, Rio Dewanto, Givina', 'Kimo Stamboel', 'HORROR'),
(9, 'HATI SUHITA', 'Kisah Alina Suhita. Perempuan teguh, matang dan pantang menyerah. Ketabahan memandunya menghadapi badai rumah tangga yang terjadi bahkan sejak malam pertama. Perjuangan lahir batinnya diuji untuk merengkuh cinta Gus Birru, suaminya sendiri.', 'None', 'BAHASA INDONESIA', 'None', '137 Minutes', 'hati_suhita.jpg', 'hati_suhita2.png', 'Nadya Arina, Omar Daniel, Anggika Bolsterli', 'Archie Hekagery', 'DRAMA');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `news_id` int(11) NOT NULL,
  `news_title` varchar(128) NOT NULL,
  `news_img` varchar(128) NOT NULL,
  `news_content` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `news_title`, `news_img`, `news_content`) VALUES
(1, 'Pengumuman Seleksi Tahap 1 CGV Campus Ambassador', 'pengumuman_ba.jpg', '<p>\n    <b>\n        <span style=\"font-size: 11pt; font-family: Poppins, sans-serif; color: rgb(0, 0, 0); background-color: rgb(255, 255, 255); font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;\">Hai Teman Seru! </span>\n        <span style=\"color: rgb(0, 0, 0); font-family: &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: medium;\">👋</span>\n    </b>\n</p>\n<p>\n    <span style=\"color: rgb(0, 0, 0); font-family: Poppins, sans-serif; font-size: 11pt; white-space: pre-wrap;\">Terima kasih untuk seluruh mahasiswa/i yang telah mendaftar pada program CGV Campus Ambassador. Setelah melalui proses seleksi, kami dengan senang hati ingin mengumumkan daftar siswa yang berhasil lolos ke tahap selanjutnya.</span>\n    <br>\n</p>\n<p>\n    <span style=\"font-size:11pt;font-family:Poppins,sans-serif;color:#000000;background-color:#ffffff;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Selamat untuk calon CGV Campus Ambassador terpilih:</span>\n</p>\n<div dir=\"ltr\" style=\"margin-left:0pt;\" align=\"left\">\n    <table style=\"border:none;border-collapse:collapse;\">\n        <colgroup>\n            <col width=\"275\">\n        </colgroup>\n        <tbody>\n            <tr style=\"height:15.75pt\">\n                <td>\n                    <ol>\n                        <li dir=\"ltr\"\n                            \n                            aria-level=\"1\">\n                            <p dir=\"ltr\" style=\"line-height:1.38;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\">\n                                <span\n                                    >eph**anpran**a@gmail.com</span>\n                            </p>\n                        </li>\n                    </ol>\n                </td>\n            </tr>\n            <tr style=\"height:15.75pt\">\n                <td style=\"vertical-align:top;padding:2pt 2pt 2pt 2pt;overflow:hidden;overflow-wrap:break-word;\">\n                    <ol start=\"2\">\n                        <li dir=\"ltr\"\n                            \n                            aria-level=\"1\">\n                            <p dir=\"ltr\" style=\"line-height:1.38;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\">\n                                <span\n                                    >ko*n*li*s177*@gmail.com</span>\n                            </p>\n                        </li>\n                    </ol>\n                </td>\n            </tr>\n            <tr style=\"height:15.75pt\">\n                <td style=\"vertical-align:top;padding:2pt 2pt 2pt 2pt;overflow:hidden;overflow-wrap:break-word;\">\n                    <ol start=\"3\">\n                        <li dir=\"ltr\"\n                            \n                            aria-level=\"1\">\n                            <p dir=\"ltr\" style=\"line-height:1.38;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\">\n                                <span\n                                    >fa**ur.sa**ta@gmail.com</span>\n                            </p>\n                        </li>\n                    </ol>\n                </td>\n            </tr>\n            <tr style=\"height:15.75pt\">\n                <td style=\"vertical-align:top;padding:2pt 2pt 2pt 2pt;overflow:hidden;overflow-wrap:break-word;\">\n                    <ol start=\"4\">\n                        <li dir=\"ltr\"\n                            \n                            aria-level=\"1\">\n                            <p dir=\"ltr\" style=\"line-height:1.38;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\">\n                                <span\n                                    >au**lialo**b@gmail.com</span>\n                            </p>\n                        </li>\n                    </ol>\n                </td>\n            </tr>\n            <tr style=\"height:15.75pt\">\n                <td style=\"vertical-align:top;padding:2pt 2pt 2pt 2pt;overflow:hidden;overflow-wrap:break-word;\">\n                    <ol start=\"5\">\n                        <li dir=\"ltr\"\n                            \n                            aria-level=\"1\">\n                            <p dir=\"ltr\" style=\"line-height:1.38;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\">\n                                <span\n                                    >di**.ar***sy@student.president.ac.id</span>\n                            </p>\n                        </li>\n                    </ol>\n                </td>\n            </tr>\n            <tr style=\"height:15.75pt\">\n                <td style=\"vertical-align:top;padding:2pt 2pt 2pt 2pt;overflow:hidden;overflow-wrap:break-word;\">\n                    <ol start=\"6\">\n                        <li dir=\"ltr\"\n                            \n                            aria-level=\"1\">\n                            <p dir=\"ltr\" style=\"line-height:1.38;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\">\n                                <span\n                                    >fa***rach**dani*5@gmail.com</span>\n                            </p>\n                        </li>\n                    </ol>\n                </td>\n            </tr>\n            <tr style=\"height:15.75pt\">\n                <td style=\"vertical-align:top;padding:2pt 2pt 2pt 2pt;overflow:hidden;overflow-wrap:break-word;\">\n                    <ol start=\"7\">\n                        <li dir=\"ltr\"\n                            \n                            aria-level=\"1\">\n                            <p dir=\"ltr\" style=\"line-height:1.38;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\">\n                                <span\n                                    >an***asyas**taneh*@gmail.com</span>\n                            </p>\n                        </li>\n                    </ol>\n                </td>\n            </tr>\n            <tr style=\"height:15.75pt\">\n                <td style=\"vertical-align:top;padding:2pt 2pt 2pt 2pt;overflow:hidden;overflow-wrap:break-word;\">\n                    <ol start=\"8\">\n                        <li dir=\"ltr\"\n                            \n                            aria-level=\"1\">\n                            <p dir=\"ltr\" style=\"line-height:1.38;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\">\n                                <span\n                                    >E***nagit*2@gmail.com</span>\n                            </p>\n                        </li>\n                    </ol>\n                </td>\n            </tr>\n            <tr style=\"height:15.75pt\">\n                <td style=\"vertical-align:top;padding:2pt 2pt 2pt 2pt;overflow:hidden;overflow-wrap:break-word;\">\n                    <ol start=\"9\">\n                        <li dir=\"ltr\"\n                            \n                            aria-level=\"1\">\n                            <p dir=\"ltr\" style=\"line-height:1.38;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\">\n                                <span\n                                    >car***aruw*l@gmail.com</span>\n                            </p>\n                        </li>\n                    </ol>\n                </td>\n            </tr>\n            <tr style=\"height:15.75pt\">\n                <td style=\"vertical-align:top;padding:2pt 2pt 2pt 2pt;overflow:hidden;overflow-wrap:break-word;\">\n                    <ol start=\"10\">\n                        <li dir=\"ltr\"\n                            \n                            aria-level=\"1\">\n                            <p dir=\"ltr\" style=\"line-height:1.38;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\">\n                                <span\n                                    >Win**50*@gmail.com</span>\n                            </p>\n                        </li>\n                    </ol>\n                </td>\n            </tr>\n            <tr style=\"height:15.75pt\">\n                <td>\n                    <ol start=\"11\">\n                        <li dir=\"ltr\"\n                            \n                            aria-level=\"1\">\n                            <p dir=\"ltr\" style=\"line-height:1.38;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\">\n                                <span\n                                    >jose***a.kawi**rang@gmail.com</span>\n                            </p>\n                        </li>\n                    </ol>\n                </td>\n            </tr>\n            <tr style=\"height:15.75pt\">\n                <td>\n                    <ol start=\"12\">\n                        <li dir=\"ltr\"\n                            \n                            aria-level=\"1\">\n                            <p dir=\"ltr\" style=\"line-height:1.38;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\">\n                                <span\n                                    >pa**lajou**a@gmail.com</span>\n                            </p>\n                        </li>\n                    </ol>\n                </td>\n            </tr>\n            <tr style=\"height:15.75pt\">\n                <td>\n                    <ol start=\"13\">\n                        <li dir=\"ltr\"\n                            \n                            aria-level=\"1\">\n                            <p dir=\"ltr\" style=\"line-height:1.38;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\">\n                                <span\n                                    >gra*ete**aa*3@gmail.com</span>\n                            </p>\n                        </li>\n                    </ol>\n                </td>\n            </tr>\n            <tr style=\"height:15.75pt\">\n                <td>\n                    <ol start=\"14\">\n                        <li dir=\"ltr\"\n                            \n                            aria-level=\"1\">\n                            <p dir=\"ltr\" style=\"line-height:1.38;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\">\n                                <span\n                                    >sc**last***wils*n@gmail.com</span>\n                            </p>\n                        </li>\n                    </ol>\n                </td>\n            </tr>\n            <tr style=\"height:15.75pt\">\n                <td>\n                    <ol start=\"15\">\n                        <li dir=\"ltr\"\n                            \n                            aria-level=\"1\">\n                            <p dir=\"ltr\" style=\"line-height:1.38;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\">\n                                <span\n                                    >aq*ldr***at@gmail.com</span>\n                            </p>\n                        </li>\n                    </ol>\n                </td>\n            </tr>\n            <tr style=\"height:15.75pt\">\n                <td>\n                    <ol start=\"16\">\n                        <li dir=\"ltr\"\n                            \n                            aria-level=\"1\">\n                            <p dir=\"ltr\" style=\"line-height:1.38;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\">\n                                <span\n                                    >fa***sli*h@gmail.com</span>\n                            </p>\n                        </li>\n                    </ol>\n                </td>\n            </tr>\n            <tr style=\"height:15.75pt\">\n                <td>\n                    <ol start=\"17\">\n                        <li dir=\"ltr\"\n                            \n                            aria-level=\"1\">\n                            <p dir=\"ltr\" style=\"line-height:1.38;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\">\n                                <span\n                                    >fer*a**ogot**a03@gmail.com</span>\n                            </p>\n                        </li>\n                    </ol>\n                </td>\n            </tr>\n            <tr style=\"height:15.75pt\">\n                <td>\n                    <ol start=\"18\">\n                        <li dir=\"ltr\"\n                            \n                            aria-level=\"1\">\n                            <p dir=\"ltr\" style=\"line-height:1.38;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\">\n                                <span\n                                    >abel***alu3*@gmail.com</span>\n                            </p>\n                        </li>\n                    </ol>\n                </td>\n            </tr>\n            <tr style=\"height:15.75pt\">\n                <td>\n                    <ol start=\"19\">\n                        <li dir=\"ltr\"\n                            \n                            aria-level=\"1\">\n                            <p dir=\"ltr\" style=\"line-height:1.38;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\">\n                                <span\n                                    >kir**am***r@gmail.com</span>\n                            </p>\n                        </li>\n                    </ol>\n                </td>\n            </tr>\n            <tr style=\"height:15.75pt\">\n                <td>\n                    <ol start=\"20\">\n                        <li dir=\"ltr\"\n                            \n                            aria-level=\"1\">\n                            <p dir=\"ltr\" style=\"line-height:1.38;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\">\n                                <span\n                                    >ryl**ne**e@gmail.com</span>\n                            </p>\n                        </li>\n                    </ol>\n                </td>\n            </tr>\n            <tr style=\"height:15.75pt\">\n                <td>\n                    <ol start=\"21\">\n                        <li dir=\"ltr\"\n                            \n                            aria-level=\"1\">\n                            <p dir=\"ltr\" style=\"line-height:1.38;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\">\n                                <span\n                                    >pit**vin**3@gmail.com</span>\n                            </p>\n                        </li>\n                    </ol>\n                </td>\n            </tr>\n            <tr style=\"height:15.75pt\">\n                <td>\n                    <ol start=\"22\">\n                        <li dir=\"ltr\"\n                            \n                            aria-level=\"1\">\n                            <p dir=\"ltr\" style=\"line-height:1.38;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\">\n                                <span\n                                    >she***nsherl**616@gmail.com</span>\n                            </p>\n                        </li>\n                    </ol>\n                </td>\n            </tr>\n            <tr style=\"height:15.75pt\">\n                <td>\n                    <ol start=\"23\">\n                        <li dir=\"ltr\"\n                            \n                            aria-level=\"1\">\n                            <p dir=\"ltr\" style=\"line-height:1.38;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\">\n                                <span\n                                    >muh**mad**tfi1*11@gmail.com</span>\n                            </p>\n                        </li>\n                    </ol>\n                </td>\n            </tr>\n            <tr style=\"height:15.75pt\">\n                <td>\n                    <ol start=\"24\">\n                        <li dir=\"ltr\"\n                            \n                            aria-level=\"1\">\n                            <p dir=\"ltr\" style=\"line-height:1.38;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\">\n                                <span\n                                    >kr**nadw**a01@gmail.com</span>\n                            </p>\n                        </li>\n                    </ol>\n                </td>\n            </tr>\n            <tr style=\"height:15.75pt\">\n                <td>\n                    <ol start=\"25\">\n                        <li dir=\"ltr\"\n                            \n                            aria-level=\"1\">\n                            <p dir=\"ltr\" style=\"line-height:1.38;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\">\n                                <span\n                                    >inka**e*5@gmail.com</span>\n                            </p>\n                        </li>\n                    </ol>\n                </td>\n            </tr>\n            <tr style=\"height:15.75pt\">\n                <td>\n                    <ol start=\"26\">\n                        <li dir=\"ltr\"\n                            \n                            aria-level=\"1\">\n                            <p dir=\"ltr\" style=\"line-height:1.38;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\">\n                                <span\n                                    >f***nath**ine@gmail.com</span>\n                            </p>\n                        </li>\n                    </ol>\n                </td>\n            </tr>\n            <tr style=\"height:15.75pt\">\n                <td>\n                    <ol start=\"27\">\n                        <li dir=\"ltr\"\n                            \n                            aria-level=\"1\">\n                            <p dir=\"ltr\" style=\"line-height:1.38;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\">\n                                <span\n                                    >r*nie***na14@gmail.com</span>\n                            </p>\n                        </li>\n                    </ol>\n                </td>\n            </tr>\n            <tr style=\"height:15.75pt\">\n                <td>\n                    <ol start=\"28\">\n                        <li dir=\"ltr\"\n                            \n                            aria-level=\"1\">\n                            <p dir=\"ltr\" style=\"line-height:1.38;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\">\n                                <span\n                                    >chin***adin**22@gmail.com</span>\n                            </p>\n                        </li>\n                    </ol>\n                </td>\n            </tr>\n            <tr style=\"height:15.75pt\">\n                <td>\n                    <ol start=\"29\">\n                        <li dir=\"ltr\"\n                            \n                            aria-level=\"1\">\n                            <p dir=\"ltr\" style=\"line-height:1.38;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\">\n                                <span\n                                    >Sabri***azayape***naputri@gmail.com</span>\n                            </p>\n                        </li>\n                    </ol>\n                </td>\n            </tr>\n            <tr style=\"height:15.75pt\">\n                <td>\n                    <ol start=\"30\">\n                        <li dir=\"ltr\"\n                            \n                            aria-level=\"1\">\n                            <p dir=\"ltr\" style=\"line-height:1.38;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\">\n                                <span\n                                    >c*llis***ove*s@gmail.com</span>\n                            </p>\n                        </li>\n                    </ol>\n                </td>\n            </tr>\n            <tr style=\"height:15.75pt\">\n                <td>\n                    <ol start=\"31\">\n                        <li dir=\"ltr\"\n                            \n                            aria-level=\"1\">\n                            <p dir=\"ltr\" style=\"line-height:1.38;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\">\n                                <span\n                                    >zav**d*salsa***a@gmail.com</span>\n                            </p>\n                        </li>\n                    </ol>\n                </td>\n            </tr>\n            <tr style=\"height:15.75pt\">\n                <td>\n                    <ol start=\"32\">\n                        <li dir=\"ltr\"\n                            \n                            aria-level=\"1\">\n                            <p dir=\"ltr\" style=\"line-height:1.38;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\">\n                                <span\n                                    >g*lih***kie1@gmail.com</span>\n                            </p>\n                        </li>\n                    </ol>\n                </td>\n            </tr>\n            <tr style=\"height:15.75pt\">\n                <td>\n                    <ol start=\"33\">\n                        <li dir=\"ltr\"\n                            \n                            aria-level=\"1\">\n                            <p dir=\"ltr\" style=\"line-height:1.38;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\">\n                                <span\n                                    >i*ah***53@gmail.com</span>\n                            </p>\n                        </li>\n                    </ol>\n                </td>\n            </tr>\n            <tr style=\"height:15.75pt\">\n                <td>\n                    <ol start=\"34\">\n                        <li dir=\"ltr\"\n                            \n                            aria-level=\"1\">\n                            <p dir=\"ltr\" style=\"line-height:1.38;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\">\n                                <span\n                                    >sip***yan***i@gmail.com</span>\n                            </p>\n                        </li>\n                    </ol>\n                </td>\n            </tr>\n            <tr style=\"height:15.75pt\">\n                <td>\n                    <ol start=\"35\">\n                        <li dir=\"ltr\"\n                            \n                            aria-level=\"1\">\n                            <p dir=\"ltr\" style=\"line-height:1.38;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\">\n                                <span\n                                    >ste***nch**dra.chandra@gmail.com</span>\n                            </p>\n                        </li>\n                    </ol>\n                </td>\n            </tr>\n            <tr style=\"height:15.75pt\">\n                <td>\n                    <ol start=\"36\">\n                        <li dir=\"ltr\"\n                            \n                            aria-level=\"1\">\n                            <p dir=\"ltr\" style=\"line-height:1.38;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\">\n                                <span\n                                    >n*di***fira.n*f@gmail.com</span>\n                            </p>\n                        </li>\n                    </ol>\n                </td>\n            </tr>\n            <tr style=\"height:15.75pt\">\n                <td>\n                    <ol start=\"37\">\n                        <li dir=\"ltr\"\n                            \n                            aria-level=\"1\">\n                            <p dir=\"ltr\" style=\"line-height:1.38;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\">\n                                <span\n                                    >sh*f.ni**ya@gmail.com</span>\n                            </p>\n                        </li>\n                    </ol>\n                </td>\n            </tr>\n            <tr style=\"height:15.75pt\">\n                <td>\n                    <ol start=\"38\">\n                        <li dir=\"ltr\"\n                            \n                            aria-level=\"1\">\n                            <p dir=\"ltr\" style=\"line-height:1.38;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\">\n                                <span\n                                    >ang**ain*zahi*ah@gmail.com</span>\n                            </p>\n                        </li>\n                    </ol>\n                </td>\n            </tr>\n            <tr style=\"height:15.75pt\">\n                <td>\n                    <ol start=\"39\">\n                        <li dir=\"ltr\"\n                            \n                            aria-level=\"1\">\n                            <p dir=\"ltr\" style=\"line-height:1.38;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\">\n                                <span\n                                    >g*if**yy29@gmail.com</span>\n                            </p>\n                        </li>\n                    </ol>\n                </td>\n            </tr>\n            <tr style=\"height:15.75pt\">\n                <td>\n                    <ol start=\"40\">\n                        <li dir=\"ltr\"\n                            \n                            aria-level=\"1\">\n                            <p dir=\"ltr\" style=\"line-height:1.38;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\">\n                                <span\n                                    >lai**an***eal@gmail.com</span>\n                            </p>\n                        </li>\n                    </ol>\n                </td>\n            </tr>\n            <tr style=\"height:15.75pt\">\n                <td>\n                    <ol start=\"41\">\n                        <li dir=\"ltr\"\n                            \n                            aria-level=\"1\">\n                            <p dir=\"ltr\" style=\"line-height:1.38;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\">\n                                <span\n                                    >ad*l**ang*l*2@gmail.com</span>\n                            </p>\n                        </li>\n                    </ol>\n                </td>\n            </tr>\n            <tr style=\"height:15.75pt\">\n                <td>\n                    <ol start=\"42\">\n                        <li dir=\"ltr\"\n                            \n                            aria-level=\"1\">\n                            <p dir=\"ltr\" style=\"line-height:1.38;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\">\n                                <span\n                                    >a*die**fari**dy*3@gmail.com</span>\n                            </p>\n                        </li>\n                    </ol>\n                </td>\n            </tr>\n            <tr style=\"height:15.75pt\">\n                <td>\n                    <ol start=\"43\">\n                        <li dir=\"ltr\"\n                            \n                            aria-level=\"1\">\n                            <p dir=\"ltr\" style=\"line-height:1.38;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\">\n                                <span\n                                    >ta*it**ss**a03@gmail.com</span>\n                            </p>\n                        </li>\n                    </ol>\n                </td>\n            </tr>\n            <tr style=\"height:15.75pt\">\n                <td>\n                    <ol start=\"44\">\n                        <li dir=\"ltr\"\n                            \n                            aria-level=\"1\">\n                            <p dir=\"ltr\" style=\"line-height:1.38;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\">\n                                <span\n                                    >ari**ora**mah*lu@gmail.com</span>\n                            </p>\n                        </li>\n                    </ol>\n                </td>\n            </tr>\n            <tr style=\"height:15.75pt\">\n                <td>\n                    <ol start=\"45\">\n                        <li dir=\"ltr\"\n                            \n                            aria-level=\"1\">\n                            <p dir=\"ltr\" style=\"line-height:1.38;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\">\n                                <span\n                                    >jer*mi**uses*7@gmail.com</span>\n                            </p>\n                        </li>\n                    </ol>\n                </td>\n            </tr>\n            <tr style=\"height:15.75pt\">\n                <td>\n                    <ol start=\"46\">\n                        <li dir=\"ltr\"\n                            \n                            aria-level=\"1\">\n                            <p dir=\"ltr\" style=\"line-height:1.38;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\">\n                                <span\n                                    >bel*i**ab98@gmail.com</span>\n                            </p>\n                        </li>\n                    </ol>\n                </td>\n            </tr>\n            <tr style=\"height:15.75pt\">\n                <td>\n                    <ol start=\"47\">\n                        <li dir=\"ltr\"\n                            \n                            aria-level=\"1\">\n                            <p dir=\"ltr\" style=\"line-height:1.38;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\">\n                                <span\n                                    >re*za**13@gmail.com</span>\n                            </p>\n                        </li>\n                    </ol>\n                </td>\n            </tr>\n            <tr style=\"height:15.75pt\">\n                <td>\n                    <ol start=\"48\">\n                        <li dir=\"ltr\"\n                            \n                            aria-level=\"1\">\n                            <p dir=\"ltr\" style=\"line-height:1.38;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\">\n                                <span\n                                    >jss**mwn@gmail.com</span>\n                            </p>\n                        </li>\n                    </ol>\n                </td>\n            </tr>\n            <tr style=\"height:15.75pt\">\n                <td>\n                    <ol start=\"49\">\n                        <li dir=\"ltr\"\n                            \n                            aria-level=\"1\">\n                            <p dir=\"ltr\" style=\"line-height:1.38;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\">\n                                <span\n                                    >ab*ulla**han79@gmail.com</span>\n                            </p>\n                        </li>\n                    </ol>\n                </td>\n            </tr>\n            <tr style=\"height:15.75pt\">\n                <td>\n                    <ol start=\"50\">\n                        <li dir=\"ltr\"\n                            \n                            aria-level=\"1\">\n                            <p dir=\"ltr\" style=\"line-height:1.38;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\">\n                                <span\n                                    >mati*da**ngsi*8k@gmail.com</span>\n                            </p>\n                        </li>\n                    </ol>\n                </td>\n            </tr>\n            <tr style=\"height:15.75pt\">\n                <td>\n                    <ol start=\"51\">\n                        <li dir=\"ltr\"\n                            \n                            aria-level=\"1\">\n                            <p dir=\"ltr\" style=\"line-height:1.38;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\">\n                                <span\n                                    >Far*h**tyad**da@gmail.com</span>\n                            </p>\n                        </li>\n                    </ol>\n                </td>\n            </tr>\n            <tr style=\"height:15.75pt\">\n                <td>\n                    <ol start=\"52\">\n                        <li dir=\"ltr\"\n                            \n                            aria-level=\"1\">\n                            <p dir=\"ltr\" style=\"line-height:1.38;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\">\n                                <span\n                                    >end**ha*4@gmail.com</span>\n                            </p>\n                        </li>\n                    </ol>\n                </td>\n            </tr>\n            <tr style=\"height:15.75pt\">\n                <td>\n                    <ol start=\"53\">\n                        <li dir=\"ltr\"\n                            \n                            aria-level=\"1\">\n                            <p dir=\"ltr\" style=\"line-height:1.38;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\">\n                                <span\n                                    >pu*ri.**la46@gmail.com</span>\n                            </p>\n                        </li>\n                    </ol>\n                </td>\n            </tr>\n            <tr style=\"height:15.75pt\">\n                <td>\n                    <ol start=\"54\">\n                        <li dir=\"ltr\"\n                            \n                            aria-level=\"1\">\n                            <p dir=\"ltr\" style=\"line-height:1.38;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\">\n                                <span\n                                    >vnp***itasa*i@apps.ipb.ac.id</span>\n                            </p>\n                        </li>\n                    </ol>\n                </td>\n            </tr>\n            <tr style=\"height:15.75pt\">\n                <td>\n                    <ol start=\"55\">\n                        <li dir=\"ltr\"\n                            \n                            aria-level=\"1\">\n                            <p dir=\"ltr\" style=\"line-height:1.38;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\">\n                                <span\n                                    >alfar**z*8@gmail.com</span>\n                            </p>\n                        </li>\n                    </ol>\n                </td>\n            </tr>\n            <tr style=\"height:15.75pt\">\n                <td>\n                    <ol start=\"56\">\n                        <li dir=\"ltr\"\n                            \n                            aria-level=\"1\">\n                            <p dir=\"ltr\" style=\"line-height:1.38;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\">\n                                <span\n                                    >retn**ndra**ti91@gmail.com</span>\n                            </p>\n                        </li>\n                    </ol>\n                </td>\n            </tr>\n            <tr style=\"height:15.75pt\">\n                <td>\n                    <ol start=\"57\">\n                        <li dir=\"ltr\"\n                            \n                            aria-level=\"1\">\n                            <p dir=\"ltr\" style=\"line-height:1.38;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\">\n                                <span\n                                    >idz*is***ster@gmail.com</span>\n                            </p>\n                        </li>\n                    </ol>\n                </td>\n            </tr>\n            <tr style=\"height:15.75pt\">\n                <td>\n                    <ol start=\"58\">\n                        <li dir=\"ltr\"\n                            \n                            aria-level=\"1\">\n                            <p dir=\"ltr\" style=\"line-height:1.38;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\">\n                                <span\n                                    >ilha**arh*n1*07@gmail.com</span>\n                            </p>\n                        </li>\n                    </ol>\n                </td>\n            </tr>\n            <tr style=\"height:15.75pt\">\n                <td>\n                    <ol start=\"59\">\n                        <li dir=\"ltr\"\n                            \n                            aria-level=\"1\">\n                            <p dir=\"ltr\" style=\"line-height:1.38;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\">\n                                <span\n                                    >poe*raw***oe09@gmail.com</span>\n                            </p>\n                        </li>\n                    </ol>\n                </td>\n            </tr>\n            <tr style=\"height:15.75pt\">\n                <td style=\"vertical-align:bottom;padding:2pt 2pt 2pt 2pt;overflow:hidden;overflow-wrap:break-word;\">\n                    <ol start=\"60\">\n                        <li dir=\"ltr\"\n                            \n                            aria-level=\"1\">\n                            <p dir=\"ltr\" style=\"line-height:1.38;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\">\n                                <span\n                                    >ed*a.ti*a@gmail.com</span>\n                            </p>\n                        </li>\n                    </ol>\n                </td>\n            </tr>\n            <tr style=\"height:15.75pt\">\n                <td style=\"vertical-align:bottom;padding:2pt 2pt 2pt 2pt;overflow:hidden;overflow-wrap:break-word;\">\n                    <ol start=\"61\">\n                        <li dir=\"ltr\"\n                            \n                            aria-level=\"1\">\n                            <p dir=\"ltr\" style=\"line-height:1.38;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\">\n                                <span\n                                    >pri*l**deli*1@gmail.com</span>\n                            </p>\n                        </li>\n                    </ol>\n                </td>\n            </tr>\n            <tr style=\"height:15.75pt\">\n                <td style=\"vertical-align:bottom;padding:2pt 2pt 2pt 2pt;overflow:hidden;overflow-wrap:break-word;\">\n                    <ol start=\"62\">\n                        <li dir=\"ltr\"\n                            \n                            aria-level=\"1\">\n                            <p dir=\"ltr\" style=\"line-height:1.38;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\">\n                                <span\n                                    >dper**na*7@gmail.com</span>\n                            </p>\n                        </li>\n                    </ol>\n                </td>\n            </tr>\n            <tr style=\"height:15.75pt\">\n                <td style=\"vertical-align:bottom;padding:2pt 2pt 2pt 2pt;overflow:hidden;overflow-wrap:break-word;\">\n                    <ol start=\"63\">\n                        <li dir=\"ltr\"\n                            \n                            aria-level=\"1\">\n                            <p dir=\"ltr\" style=\"line-height:1.38;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\">\n                                <span\n                                    >ic*a16*1@gmail.com</span>\n                            </p>\n                        </li>\n                    </ol>\n                </td>\n            </tr>\n            <tr style=\"height:15.75pt\">\n                <td style=\"vertical-align:bottom;padding:2pt 2pt 2pt 2pt;overflow:hidden;overflow-wrap:break-word;\">\n                    <ol start=\"64\">\n                        <li dir=\"ltr\"\n                            \n                            aria-level=\"1\">\n                            <p dir=\"ltr\" style=\"line-height:1.38;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\">\n                                <span\n                                    >m**nt**gfh79@gmail.com</span>\n                            </p>\n                        </li>\n                    </ol>\n                </td>\n            </tr>\n            <tr style=\"height:15.75pt\">\n                <td style=\"vertical-align:bottom;padding:2pt 2pt 2pt 2pt;overflow:hidden;overflow-wrap:break-word;\">\n                    <ol start=\"65\">\n                        <li dir=\"ltr\"\n                            \n                            aria-level=\"1\">\n                            <p dir=\"ltr\" style=\"line-height:1.38;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\">\n                                <span\n                                    >pr**iwilar**dhea@gmail.com</span>\n                            </p>\n                        </li>\n                    </ol>\n                </td>\n            </tr>\n            <tr style=\"height:15.75pt\">\n                <td style=\"vertical-align:bottom;padding:2pt 2pt 2pt 2pt;overflow:hidden;overflow-wrap:break-word;\">\n                    <ol start=\"66\">\n                        <li dir=\"ltr\"\n                            \n                            aria-level=\"1\">\n                            <p dir=\"ltr\" style=\"line-height:1.38;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\">\n                                <span\n                                    >feb*andasi***gon03@gmail.com</span>\n                            </p>\n                        </li>\n                    </ol>\n                </td>\n            </tr>\n            <tr style=\"height:15.75pt\">\n                <td style=\"vertical-align:bottom;padding:2pt 2pt 2pt 2pt;overflow:hidden;overflow-wrap:break-word;\">\n                    <ol start=\"67\">\n                        <li dir=\"ltr\"\n                            \n                            aria-level=\"1\">\n                            <p dir=\"ltr\" style=\"line-height:1.38;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\">\n                                <span\n                                    >kar*ika***ialya@gmail.com</span>\n                            </p>\n                        </li>\n                    </ol>\n                </td>\n            </tr>\n            <tr style=\"height:15.75pt\">\n                <td style=\"vertical-align:bottom;padding:2pt 2pt 2pt 2pt;overflow:hidden;overflow-wrap:break-word;\">\n                    <ol start=\"68\">\n                        <li dir=\"ltr\"\n                            \n                            aria-level=\"1\">\n                            <p dir=\"ltr\" style=\"line-height:1.38;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\">\n                                <span\n                                    >nu*ul***ma01*1@gmail.com</span>\n                            </p>\n                        </li>\n                    </ol>\n                </td>\n            </tr>\n            <tr style=\"height:15.75pt\">\n                <td style=\"vertical-align:bottom;padding:2pt 2pt 2pt 2pt;overflow:hidden;overflow-wrap:break-word;\">\n                    <ol start=\"69\">\n                        <li dir=\"ltr\"\n                            \n                            aria-level=\"1\">\n                            <p dir=\"ltr\" style=\"line-height:1.38;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\">\n                                <span\n                                    >axe*w**son*54@gmail.com</span>\n                            </p>\n                        </li>\n                    </ol>\n                </td>\n            </tr>\n            <tr style=\"height:15.75pt\">\n                <td style=\"vertical-align:bottom;padding:2pt 2pt 2pt 2pt;overflow:hidden;overflow-wrap:break-word;\">\n                    <ol start=\"70\">\n                        <li dir=\"ltr\"\n                            \n                            aria-level=\"1\">\n                            <p dir=\"ltr\" style=\"line-height:1.38;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\">\n                                <span\n                                    >n*diy***rayog**7@gmail.com</span>\n                            </p>\n                        </li>\n                    </ol>\n                </td>\n            </tr>\n        </tbody>\n    </table>\n</div>\n<p>\n    <span style=\"color: rgb(0, 0, 0); font-family: Poppins, sans-serif; font-size: 11pt; white-space: pre-wrap;\">\n        <i>*Email yang tertera sesuai dengan email yang terisi pada form registrasi.</i>\n    </span>\n</p>\n<p>\n    <span style=\"color: rgb(0, 0, 0); font-family: Poppins, sans-serif; font-size: 11pt; white-space: pre-wrap;\">Informasi mengenai proses seleksi berikutnya akan diinformasikan melalui email masing-masing peserta dalam waktu 1x24 jam.</span>\n    <br>\n</p>\n<p>\n    <span style=\"font-size:11pt;font-family:Poppins,sans-serif;color:#000000;background-color:#ffffff;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Bagi mahasiswa/i yang belum berhasil lolos, jangan berkecil hati dan tunggu kabar baik untuk CGV Campus Ambassador selanjutnya ya! Cek sosial media @cgv.id untuk info CGV terupdate.</span>\n</p>\n<p>\n    <span style=\"font-size:11pt;font-family:Poppins,sans-serif;color:#000000;background-color:#ffffff;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Terima kasih untuk ketertarikan dan semangatnya, Teman Seru!</span>\n</p>\n<p></p>\n<p>\n    <span style=\"font-size:11pt;font-family:Poppins,sans-serif;color:#000000;background-color:#ffffff;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Sampai bertemu di proses selanjutnya </span>\n    <span style=\"color: rgb(0, 0, 0); font-family: &quot;Segoe UI Web (West European)&quot;, &quot;Segoe UI&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, sans-serif; font-size: medium;\">😉</span>\n</p>');
INSERT INTO `news` (`news_id`, `news_title`, `news_img`, `news_content`) VALUES
(2, 'CGV Ecoplaza Maja Citra Raya siap Temani Liburanmu!', 'cgv_ecoplaza.jpg', '<p>\n                            Memberikan opsi hiburan untuk masyarakat jelang libur Hari Raya Idul Fitri, bioskop CGV Indonesia menambah lokasi baru di CGV Ecoplaza Maja Raya yang siap beroperasi mulai \n                            Rabu, 19 April 2023\n                            . Hadirnya CGV Ecoplaza Maja Raya ini menandai dibukanya bioskop pertama di kawasan Maja, Lebak Banten yang turut mengawali ekspansi bisnis PT. Graha Layar Prima di tahun ini.&nbsp;\n                        </p>\n                        <p>\n                            <br>\n                        </p>\n                        <p>\n                            Berlokasi strategis di kawasan komersial Ecoplaza Citra Maja Raya yang dikembangkan oleh Ciputra Grup, bioskop CGV dikelilingi oleh berbagai fasilitas publik mulai dari sekolah, universitas, tempat ibadah, perumahan, taman terbuka, supermarket dan lainnya untuk mengakomodasi masyarakat sekitar. Demikian pula dengan akses tol Jakarta - Merak, Stasiun Commuter Line Maja, serta \n                            shuttle bus \n                            Tangerang - Jakarta yang dapat menjadi pilihan masyarakat menuju lokasi bioskop.\n                        </p>\n                        <p>\n                            <br>\n                        </p>\n                        <p>\n                            Menyasar generasi Z dan keluarga muda, CGV Ecoplaza Citra Maja Raya hadir dengan konsep \n                            family camp\n                            yang membawa suasana outdoor di dalam ruangan, dengan warna-warna netral yang hangat dan dilengkapi spot-spot kekinian yang \n                            menjadi pilihan tepat untuk berswafoto, berbincang dan menghabiskan waktu bersama orang-orang tersayang.&nbsp;\n                        </p>\n                        <p>\n                            <br>\n                        </p>\n                        <p>\n                            Rangakaian promo film, FnB dan tayangan lebaran disiapkan sambut masyarakat Maja\n                        </p>\n                        <p>\n                            <br>\n                        </p>\n                        <p>\n                            Menghadirkan 4 auditorium regular, CGV Ecoplaza Maja Citra Maja siap mengakomodasi hingga 618 penonton, termasuk 4 kursi yang dipersiapkan untuk \n                            difabel. \n                            Tiket nonton dapat dibanderol dengan harga terjangkau mulai dari \n                            Rp35.000 hingga Rp45.000\n                            sesuai waktu menonton yang dipilih. Tempat ngopi dan ngemil seru, \n                            CINE CAFE\n                            turut hadir menyediakan variasi menu minuman mulai dari yang manis hingga segar, serta cemilan croffle dengan berbagai pilihan topping yang jadi andalan sambil menemani teman seru mengerjakan tugas, \n                            hangout\n                            , atau dibawa ke dalam auditorium saat menikmati film favorit.\n                        </p>\n                        <p>\n                            <br>\n                        </p>\n                        <p>\n                            Deretan promo disiapkan untuk meramaikan opening lokasi baru CGV ini, diantaranya:\n                        </p>\n                        <ul>\n                            <li>\n                                <p>\n                                    Popcorn Salty GRATIS\n                                    khusus pengunjung yang membeli tiket nonton film dan \n                                    mengikuti\n                                    akun Instagram @cgv.id pada 19 - 22 April 2023 &nbsp;\n                                </p>\n                            </li>\n                            <li>\n                                <p>\n                                    Harga khusus Rp 25.000 Combo Opening\n                                    (1 \n                                    Medium \n                                    Popcorn + 1 \n                                    Small\n                                    \n                                    Beverage\n                                    )\n                                </p>\n                            </li>\n                            <li>\n                                <p>\n                                    Special Price \n                                    untuk seluruh varian kopi di CINE CAFE. Nikmati segarnya Kopi Susu Gula Aren, \n                                    Caramel Latte, Hazelnut Latt\n                                    e dan \n                                    Dolce Latte\n                                    cukup dengan Rp20.000 mulai dari tanggal 19 - 28 April 2023 &nbsp;\n                                </p>\n                            </li>\n                            <li>\n                                <p>\n                                    FREE merchandise \n                                    movie\n                                    setiap pembelian FnB minimal Rp50.000 dengan kuota terbatas\n                                </p>\n                            </li>\n                            <li>\n                                <p>\n                                    Lebih untung dengan CGV member! \n                                    Cashback 50%\n                                    minimal pembelian dua tiket pada periode promo 19 - 20 April 2023\n                                </p>\n                            </li>\n                            <li>\n                                <p>\n                                    Point reward 10K\n                                    \n                                    untuk 200 pendaftar pertama member baru CGV\n                                </p>\n                            </li>\n                        </ul>\n                        <p>\n                            <br>\n                        </p>\n                        <p>\n                            Ajak keluarga menikmati momen liburan bersama dengan nonton film-film favorit berikut:\n                        </p>\n                        <ul>\n                            <li>\n                                <p>\n                                    Film Patients of a Saint dan Guns Akimbo akan ditayangkan\n                                    GRATIS\n                                    pada 19 - 20 April 2023\n                                </p>\n                            </li>\n                            <li>\n                                <p>\n                                    Film Waktu Magrib dan Jalan Yang Jauh Jangan Lupa Pulang dapat ditonton hanya dengan\n                                    Rp10.000\n                                    pada 19 - 20 April 2023.\n                                </p>\n                            </li>\n                            <li>\n                                <p>\n                                    Deretan film Indonesia lebaran siap tayang: \n                                    Sewu Dino, Khanzab, Buya Hamka dan Jin &amp;Jun. \n                                    Tiket sudah dapat dibeli di aplikasi CGV atau www.cgv.id.\n                                </p>\n                            </li>\n                        </ul>\n                        <p>\n                            <br>\n                        </p>\n                        <p>\n                            Datang, ramaikan dan dapatkan seluruh promo serunya sekarang! Bagikan momen spesialmu di sosial media dan tag @cgv.id untuk tahu lebih banyak info dan film seru selanjutnya.\n                        </p>'),
(3, 'Pendaftaran CGV Campus Ambassador telah dibuka!', 'pendaftaran_cgv_ba.jpg', '<p>\n    <span>Hai Teman Seru!</span>\n</p>\n<p>\n    <span>Membuka kesempatan dan merangkul mahasiswa/i penonton setia di daerah Jakarta, bioskop CGV Indonesia menghadirkan </span>\n    <span>CGV Campus Ambassador</span>\n    <span>,&nbsp;yaitu program khusus bagi mahasiswa/i terpilih yang menjadi perwakilan dari kampus untuk memperkenalkan ragam film, jenis auditorium, varian FnB dan produk CGV lainnya kepada lingkungan kampus dan masyarakat luas, serta mendukung berbagai kegiatan di bioskop CGV.&nbsp;</span>\n</p>\n<p>\n    <span>Program ini dilaksanakan untuk mewadahi mahasiswa/i yang memiliki minat pada industri perfilman agar dapat mengembangkan diri, berkreasi dan melahirkan ide-ide kreatif baru yang relevan dengan tren saat ini.</span>\n    <span>Pendaftaran CGV Campus Ambassador akan dibuka mulai tanggal</span>\n    <span>18 April 2023 hingga 12 Mei 2023.</span>\n    <span>Para pendaftar dapat melakukan registrasi CGV member di aplikasi atau website, dan mengisi pertanyaan pada laman </span>\n    <a href=\"https://docs.google.com/forms/d/1wrOBEdURZtDUcYCnh3WlRisfa5Zl8GsCsU3ERHls6ts/prefill\" style=\"text-decoration:none;\">\n        <span>bit.ly/CGVCampusAmbassador</span>\n    </a>\n    <span>, dengan kualifikasi sebagai berikut:</span>\n</p>\n<ol style=\"margin-top:0;margin-bottom:0;padding-inline-start:48px;\">\n    <li>\n        <p role=\"presentation\">\n            <span>Mahasiswa/i aktif domisili Jakarta &nbsp;</span>\n        </p>\n    </li>\n    <li>\n        <p>\n            <span>Memiliki kemampuan komunikasi yang baik</span>\n        </p>\n    </li>\n    <li>\n        <p>\n            <span>Kreatif dan aktif menggunakan media sosial</span>\n        </p>\n    </li>\n    <li>\n        <p>\n            <span>Memiliki ketertarikan pada industri film</span>\n        </p>\n    </li>\n    <li>\n        <p>\n            <span>Aktif dalam organisasi atau kegiatan kampus</span>\n        </p>\n    </li>\n</ol>\n<p>\n    <span>Mahasiswa/i terpilih akan diberikan pembekalan mengenai operasional bioskop, cara mempromosikan sebuah film baik dari sisi </span>\n    <span>offline</span>\n    <span>maupun digital, berkesempatan berdiskusi langsung dengan tim dan jajaran manajemen CGV seputar hal yang berhubungan dengan ekosistem perfilman.</span>\n    <span>Selama 3 bulan, para peserta akan turut menjembatani dan meningkatan kesadaran juga pemahaman seputar bioskop kepada teman dan lingkup kampus secara langsung maupun melalui </span>\n    <span>platform </span>\n    <span>digital. Mahasiswa/i akan mendapatkan beragam benefit diantaranya:&nbsp;</span>\n</p>\n<ol style=\"margin-top:0;margin-bottom:0;padding-inline-start:48px;\">\n    <li>\n        <p role=\"presentation\">\n            <span>Voucher nonton di CGV</span>\n        </p>\n    </li>\n    <li>\n        <p>\n            <span>Voucher FnB</span>\n        </p>\n    </li>\n    <li>\n        <p>\n            <span>Uang saku</span>\n        </p>\n    </li>\n    <li>\n        <p>\n            <span>Kesempatan menghadiri </span>\n            <span>movie screening</span>\n        </p>\n    </li>\n    <li>\n        <p>\n            <span>Pengalaman dan relasi di dunia kerja</span>\n        </p>\n    </li>\n    <li>\n        <p>\n            <span>Sertifikat digital</span>\n        </p>\n    </li>\n</ol>\n<p>\n    <span>‘’Kami merangkul dan memberi kesempatan kepada mahasiswa/i untuk dapat mengembangkan diri dan menggali potensi kreatif dengan menjadi bagian dari Teman Seru CGV melalui program ini. Kami yakin bahwa generasi milenial saat ini dapat berkontribusi dengan baik dalam lingkup profesional’’, jelas Ssun Kim Cheol Head of Marketing Department CGV Indonesia. </span>\n</p>\n<p>\n    <font color=\"#000000\" face=\"Calibri, sans-serif\">\n        <span>Berikut peran dan tugas CGV Brand Ambassador:</span>\n    </font>\n</p>\n<p>\n    <font color=\"#000000\" face=\"Calibri, sans-serif\">\n        <span>a. Meningkatkan pemahaman dan kecintaan publik terhadap CGV di lingkungan kampus</span>\n    </font>\n</p>\n<p>\n    <font color=\"#000000\" face=\"Calibri, sans-serif\">\n        <span>b. Menjelaskan  produk, layanan dan campaign CGV</span>\n    </font>\n</p>\n<p>\n    <font color=\"#000000\" face=\"Calibri, sans-serif\">\n        <span>c. Membuat konten kreatif di akun sosial media pribadi</span>\n    </font>\n</p>\n<p>\n    <font color=\"#000000\" face=\"Calibri, sans-serif\">\n        <span>d. Menjembatani CGV dengan pihak kampus untuk kolaborasi/event</span>\n    </font>\n</p>\n<p>\n    <font color=\"#000000\" face=\"Calibri, sans-serif\">\n        <span>e. Memberikan ide dan masukan mengenai produk/layanan CGV</span>\n    </font>\n</p>\n<p>\n    <font color=\"#000000\" face=\"Calibri, sans-serif\">\n        <span>Cek secara berkala info updatenya di sosial media @cgv.id</span>\n    </font>\n</p>  '),
(4, 'Hanya Untuk ‘Kita’, Nikmati Pengalaman Menonton Lebih Eksklusif dan Intimate di Private Box CGV', 'news4_depan.jpg', 'news_4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `promotion`
--

CREATE TABLE `promotion` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `promotion_img` varchar(255) NOT NULL,
  `promotion_content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `promotion`
--

INSERT INTO `promotion` (`id`, `judul`, `promotion_img`, `promotion_content`) VALUES
(1, 'Cashback sampai 20rb bayar pakai OVO di CGV', 'promotion.jpg', '<p>Hii Teman Seru CGV!</p><p><br></p><p>Nonton di CGV Makin Seru dengan OVO! Dapatkan Cashback sampai dengan 20rb untuk Setiap Transaksi pembelian Tiket &amp; F&amp;B Di CGV!&nbsp;</p><p>Cek syarat &amp; ketentuannya dibawah ini ya!</p><p><br></p><p>1. Cashback s.d. 20rb OVO Points (minimal transaksi 50RB) tiap pembelian tiket atau F&amp;B di CGV dengan menggunakan QR OVO sebagai metode pembayaran</p><p>2. Promo tidak dapat diuangkan, tidak berlaku kelipatan, dan tidak dapat digabungkan dengan promo lainnya</p><p>3. Promo berlaku setiap hari dari 14 April - 30 Juni 2023 di seluruh sites CGV</p><p>4. Kuota promo terbatas setiap bulannya</p><p>5. Cashback akan diberikan langsung kepada akun OVO customer</p><p>6. Customer tidak berhak mengajukan refund jika tidak mendapatkan promo dengan alasan apapun</p><p>7. Syarat dan ketentuan dapat berubah kapanpun tanpa informasi sebelumnya dan menjadi hak CGV sepenuhnya</p><div><br></div><div>Tunggu apalagi, buruan transaksi pakai OVO sekarang juga, dan dapatkan Cashbacknya!</div><div>Sampai ketemu di CGV Teman seru !</div><p><br></p>'),
(2, 'Buy 1 Get 1 YUP Paylater', 'promotion2.jpg', '<p>Hii teman seru CGV!</p><p><br></p><p>Makin seru dan hemat nonton di CGV kalo bayarnya pake YUP paylater, sekarang kamu bisa dapetin promo buy 1 get 1 jika bayar pakai aplikasi YUP paylater. </p><p>Mau tau caranya gimana? cek syarat dan ketentuannya dibawah ini ya!</p><p><br></p><p>1. Promo B1G1 minimal transaksi 2 tiket regular 2D di POS kasir</p><p>2. Promo akan valid untuk semua nasabah YUP</p><p>3. Promo berlaku di semua lokasi CGV dan untuk semua film</p><p>4. Berlaku hanya di hari Rabu</p><p>5. Periode promo berlangsung hingga 30 Juni 2023</p><p>6. Setiap nasabah hanya bisa menggunakan 1x promo/minggu</p><p>7. Tidak dapat digabungkan dengan promo lainnya</p><p>8. Tidak berlaku kelipatan</p><p>9. Tidak berlaku untuk special movie</p><p>10. Tidak berlaku advance ticket sales</p><p>11. Hanya berlaku untuk pembelian offline (kasir/POS) menggunakan EDC yang ada (BCA / BNI / CIMB)</p><p>12. Hanya valid untuk film regular 2D</p><p>13. Berlaku untuk semua metode pembayaran kecuali CGV point</p><p>14. Customer tidak berhak mengajukan refund jika tidak mendapatkan promo dengan alasan apapun</p><p>15. Syarat dan ketentuan bisa berubah kapanpun tanpa informasi sebelumnya dan menjadi hak CGV &amp; YUP sepenuhnya</p><div><br></div><div>Tunggu apalagi, buruan ke CGV dan jangan lupa bayarnya pakai aplikasi YUP ya.</div><div>Sampai ketemu di CGV !</div>'),
(3, 'Nonton hemat di CGV diskon 40% pakai kartu debit Jago Visa', 'promotion3.jpg', '<p>Hii Teman Seru CGV!</p><p><br></p><p>Ada lagi promo seru buat kamu yang mau nonon di CGV! sekarang kamu bisa dapetin Diskon 40% pakai kartu debit Jago Visa.</p><p>Cek syarat &amp; ketentuannya dibawah ini ya!</p><p><br></p><p>1. Diskon 40% maks 10K untuk pembayaran Bank Jago Debit Visa di CGV khusus pembelian melalui POS/kasir.</p><p>2. Minimum transaksi pembelian 1 tiket untuk bisa mendapatkan diskon 40% Maks 10K</p><p>3. Promo berlangsung setiap hari</p><p>4. Periode promo hingga 30 Juni 2023</p><p>5. Maksimal 1 transaksi / diskon / pengguna / hari</p><p>6. Promo berlaku di seluruh lokasi CGV</p><p>7. Promo diskon 10K Bank Jago tidak dapat digabungkan dengan promo lainnya</p><p>8. Customer tidak berhak mengajukan refund jika tidak mendapatkan promo dengan alasan apapun</p><p>9. Syarat dan ketentuan bisa berubah kapanpun tanpa informasi sebelumnya dan menjadi hak CGV sepenuhnya</p><div><br></div><div>Tunggu apalagi, buruan ke CGV dan transaksi pakai kartu debit Jago Visa biar dapet promonya.</div><div>Sampai ketemu di CGV teman seru!</div><p><br></p>'),
(4, 'Beli tiket di CGV dapat Cashback 40% pakai blu', 'promotion4.jpg', '<p>Hii Teman Seru CGV!</p><p><br></p><p>Beli tiket nonton di CGV dan bayar pakai blu kamu bisa dapetin Cashback sampai 40% loh, cek syarat dan ketentuannya dibawah ini ya!</p><p><br></p><p>Mekanisme Penggunaan Promo:</p><p>1. Pilih film pada CGV Apps</p><p>2. Pilih blu sebagai metode pembayaran</p><p>3. Pastikan kode voucher BLUCGVAPPS sudah terpasang di halaman konfirmasi sebelum melanjutkan pembayaran</p><p>4. Selesaikan transaksi</p><p><br></p><p>Syarat dan Ketentuan Umum:</p><p>1. Periode promo 1 Maret 2023 s.d. 21 Juli 2023</p><p>2. Nominal maksimal yang bisa diperoleh dari cashback 40% ini adalah Rp18.000</p><p>3. Minimum pembelian yang berlaku dalam 1 transaksi adalah Rp45.000</p><p>4. Promo berlaku 1x transaksi/user/minggu</p><p>5. Promo berlaku untuk tiket nonton di CGV</p><p>6. Promo dapat digunakan pada hari Senin s.d. Minggu</p><p>7. Promo hanya berlaku untuk pembelian di CGV apps</p><p>8. Cashback bisa didapatkan selama kuota masih ada</p><p>9. Promo berlaku di seluruh outlet CGV</p><p>10. Pastikan kode voucher BLUCGVAPPS sudah teraplikasikan di halaman pembayaran</p><p>11. Cashback akan secara otomatis dikreditkan ke pengguna blu 1x24 jam setelah pembayaran berhasil dilakukan</p><p><br></p><p>Tunggu apalagi, langsung transaksi pakai blu sekarang dan dapatkan Cashbacknya!</p><p>Sampai ketemu di CGV teman seru!</p>'),
(5, 'Buka Rekening blu di Aplikasi CGV dan dapatakan E-Voucher 25 Ribu', 'promotion5.jpg', '<p>Hii teman seru CGV!</p><p><br></p><p>Sudah tau belum? blu sekarang lagi bagi-bagi E-voucher 25Rb, buruan buka rekening blu di aplikasi CGV dan dapatkan E-vouchernya.</p><p><br></p><p><b>Syarat dan Ketentuan:</b></p><p>1. Periode program: 1 Maret - 21 Juli 2023</p><p>2. Program hanya berlaku untuk pelanggan CGV yang belum pernah membuka akun blu sebelumnya</p><p>3. Pelanggan CGV melakukan pembukaan rekening blu di Aplikasi CGV dan melakukan setoran minimal Rp 250.000,- akan mendapatkan e-voucher diskon CGV 100% sebesar Rp 25.000,- yang akan otomatis diberikan melalui akun pelanggan CGV sesuai email yang didaftarkan sesuai ketentuan sebagai berikut:</p><p>- Pelanggan CGV wajib menyelesaikan pembukaan rekening (hingga tahap verifikasi video call) maksimal di tanggal 31 setiap bulannya.</p><p>- Pelanggan CGV wajib melakukan setoran minimal Rp 250.000,- maksimal H+3 setelah verifikasi video call. Apabila setoran dilakukan melewati H+3 dari tanggal verifikasi video call, maka pelanggan CGV tidak akan mendapatkan reward berupa voucher diskon CGV</p><p>4. Voucher diskon akan diberikan paling lambat 8 hari kalender (H+8) sejak memenuhi ketentuan program (melakukan video call dan melakukan setoran)</p><p>5. Kuota program berlaku untuk 580 pelanggan CGV pertama setiap bulan yang memenuhi ketentuan program. Jika pelanggan CGV tidak meneria voucher diskon maka kuota program telah habis.</p><p>6. Setiap 1 (satu) akun customer CGV di aplikasi CGV hanya dapat mengikuti program sebanyak 1 (satu) kali selama periode program</p><p>7. BCA Digital &amp; CGV setiap saat berhak untuk melakukan analisis terhadap kewajaran transaksi dan berhak untuk membatalkan transaksi dan/atau menghentikan program sewaktu-waktu apabila ditemukan indikasi penyalahgunaan ataupun kecurangan.</p><p>8. BCA Digital terdaftar dan diawasi oleh OJK dan merupakan peserta penjaminan LPS.</p><p><br></p><p><b>Syarat dan Ketentuan Penggunaan Voucher Diskon CGV</b></p><p>1. Voucher diskon berlaku setiap hari termasuk Sabtu-Minggu dan Hari Libur Nasional</p><p>2. Satu kode voucher diskon hanya dapat digunakan 1 kali &amp; hanya untuk transaksi tiket saja</p><p>3. Jika jumlah transaksi di bawah nilai voucher, nominal sisa tidak dapat dikembalikan dengan uang tunai atau dianggap hangus</p><p>4. Nilai voucher di bawah jumlah transaksi dapat digabung dengan metode pembayaran lainnya (tunai, kartu debit, kartu kredit, dan lainnya yang berlaku)</p><p><br></p><p><b>Cara Menggunakan Voucher Diskon di Aplikasi CGV</b></p><p>1. Buka Aplikasi CGV</p><p>2. Pilih My CGV lalu log in/register apabila belum menjadi member</p><p>3. Pilih film, lokasi, dan jadwal tayang sampai SELECT SEAT</p><p>4. Pada menu pembayaran pilih E-COUPON</p><p>5. Ketik kode E-COUPON yang didapat pada kolom yang tersedia (1 transaksi hanya bisa 1 kode kupon)</p><p>6. Klik APPLY, E-COUPON akan otomatis memotong total transaksi</p><p>7. Selesaikan sisa yang harus dibayar dengan memilih metode pembayaran blu</p><p>8. Pembelian tiket menggunakan voucher diskon selesai, enjoy the show!</p><div><br></div><div>Tunggu apalagi, langsung buka aplikasi CGV dan Rekening blu sekarang juga!</div>'),
(6, 'Hemat Nonton + Bonus Saldo pakai Shinhan Bank', 'promotion6.jpg', '<p>Hi Teman Seru CGV!</p><p><br></p><p>Kapan lagi nih bisa dapet keuntungan HEMAT NONTON + BONUS SALDO s.d. Rp50RB</p><p>Menarik, hemat, dan pastinya bikin happy!</p><p><br></p><p>Mau tau gimana caranya? Yuk kepoin mekanismenya:</p><p><br></p><p>HEMAT NONTON</p><p>1. Buka rekening online dan aktivasi (membuat user ID dan login) di Aplikasi SOL Indonesia dengan menggunakan kode promo \"CGV\"</p><p>2. Jika pembukaan rekening online berhasil kamu akan mendapatkan KUPON CGV sebesar Rp25.000,-</p><p>3. Kupon CGV akan dikirimkan melalui SMS ke nomor ponsel yang terdaftar di Aplikasi SOL Indonesia</p><p><br></p><p>BONUS SALDO</p><p>1. Dapatkan BONUS SALDO Rp5.000,-/transaksi setiap kamu melakukan transaksi finansial seperti pembayaran, pembelian, top up e-money (OVO dan Gopay), dan QRIS min Rp25.000,- di Aplikasi SOL Indonesia (Maks. Bonus saldo Rp25.000,-)</p><p>2. BONUS SALDO akan dikreditkan ke rekening tabungan Bank Shinhan Indonesia</p><p><br></p><p>- Periode program 8 Maret - 31 Mei 2023</p><p>- Program hanya berlaku untuk pembukaan rekening menggunakan kode promo \"CGV\"</p><p>- Kupon CGV hanya berlaku untuk 1 kali pembayaran tiket film untuk pembelian online dan offline</p><p>- Kupon CGV akan dikirimkan maks. 14 hari kerja setelah pembukaan rekening berhasil</p><p>- Bonus saldo akan dikreditkan maks. 14 hari kerja setelah transaksi finansial berhasil dilakukan</p><p>- Kupon CGV berlaku untuk semua outlet dan semua kelas (Reguler, Satin, 4DX, Velvet, Starium, Gold Class)</p><p>- Program ini tidak dapat digabung dengan program lainnya</p><p>- Kuota program terbatas hanya untuk 1.000 orang pertama</p><p>- Bank Shinhan Indonesia berhak melakukan pembatalan pemberian kupon dan penutupan rekening jika diketahui terindikasi penipuan dan tindak kejahatan</p><p><br></p><p>Buruan buka rekening online dan aktivasi di Aplikasi SOL Indonesia, untuk dapatkan KEUNTUNGANNYA!!</p><div><br></div>'),
(7, 'Dapatkan Popcorn seharga 5Rb pakai blu', 'promotion7.jpg', '<p>Hi teman seru!</p><p><br></p><p>Siapa yang suka banget nonton sambil ngemil popcorn, sekarang kamu bisa beli popcorn dengan harga cuma 5Rb pakai blu. mau tau cara dapetinnya gimana? cek ketentuaanya dibawah ini ya!</p><p><br></p><p>Cara Mendapatkan Popcorn @Rp5.000 Pembelian via Aplikasi CGV dengan Metode Pembayaran blu:</p><p>1. Buka aplikasi CGV</p><p>2. Pilih My CGV lalu log in/register apabila belum menjadi member</p><p>3. Pilih film, lokasi, dan jadwal tayang sampai SELECT SEAT</p><p>4. Pilih metode pembayaran blu</p><p>5. Untuk mendapatkan popcorn dengan harga Rp 5.000, datang langsung ke concession dengan menunjukkan struk tiket dan menunjukkan bukti transaksi menggunakan blu</p><p><br></p><p>Cara Mendapatkan Popcorn @Rp5.000</p><p>1. Belanja tiket nonton di kasir outlet CGV</p><p>2. Pilih QRIS sebagai metode pembayaran</p><p>3. Scan QRIS menggunakan aplikasi blu</p><p>4. Selesaikan transaksi</p><p>5. Untuk mendapatkan popcorn dengan harga Rp 5.000, datang langsung ke concession dengan menunjukkan struk tiket dan menunjukkan bukti transaksi menggunakan blu</p><p><br></p><p>Syarat dan Ketentuan:</p><p>1. Periode program 1 Maret - 21 Juli 2023</p><p>2. Setiap pengguna blu yang melakukan transaksi pembelian tiket nonton melalui aplikasi CGV dengan metode pembayaran blu maupun transaksi via QRIS pada aplikasi blu</p><p>3. Kuota popcorn seharga Rp 5.000 terbatas</p><p>4. Pembelian popcorn wajib menggunakan QRIS pada aplikasi blu</p><p>5. Promo berlaku setiap hari Senin - Minggu</p><p>6. Program tidak dapat digabungkan dengan promo dari voucher lainnya yang sedang berjalan selain promo yang disediakan oleh BCA Digital</p><p>7. BCA Digital dan CGV setiap saat berhak untuk melakukan analisis terhadap kewajaran transaksi dan berhak untuk membatalkan transaksi dan/atau menghentikan program sewaktu-waktu apabila ditemukan indikasi penyalahgunaan ataupun kecurangan</p><p><br></p><p>Tunggu apalagi, beli tiket pakai blu biar kamu bisa dapetin popcorn seharaga 5rb.</p><p>sampai ketemu di CGV teman seru!</p>'),
(8, 'Nonton Hemat Tiap Jumat di CGV dengan Permata Debit Plus', 'promotion8.jpg', '<p>Hi teman seru CGV!</p><p><br></p><p>Mau nonton hemat di CGV? sekarang setiap hari Jumat kamu bisa nonton hemat di CGV pakai Permata Debit Plus.&nbsp;</p><p>Mau tau cara dapetinnya gimana, cek syarat &amp; ketentuannya dibawah ini ya.</p><p><br></p><p>1. Diskon 25% dengan pembelian minimal 2 tiket menggunakan Kartu Debit Bank Permata</p><p>2. Promo hanya berlaku untuk kelas reguler 2D</p><p>3. Promo hanya berlaku untuk pembelian tiket menggunakan CGV apps/website</p><p>4. Periode 10 Maret - 30 Juni 2023</p><p>5. Berlaku untuk 1 customer per hari (tidak berlaku kelipatan dan split transaksi)</p><p>6. Berlaku setiap hari Jumat</p><p>7. Berlaku di seluruh outlet CGV Cinemas</p><p>8. Kuota terbatas untuk 200 transaksi pertama setiap harinya</p><p>9. Promo tidak dapat digabungkan dengan promosi lainnya</p><p>10. Program berlaku untuk kartu Visa PermataMe, Reguler (iB), Preferred (iB), Moxa, Priority (iB), Private, dan Air Asia</p><p>11. Customer tidak berhak mengajukan refund jika tidak mendapatkan promo dengan alasan apapun</p><p>12. Syarat dan ketentuan bisa berubah kapanpun tanpa informasi sebelumnya dan menjadi hak CGV serta Bank Permata sepenuhnya</p><p><br></p><p>Tunggu apalagi, ajak teman, pasangan dan keluarga kamu ke CGV!</p><p>Sampai ketemu di CGV teman seru!</p>'),
(9, 'Makin hemat nonton di CGV Pakai Kredivo', 'promotion9.jpg', '<div>Hi Teman Seru CGV!</div><div><br></div><div>Beli tiket CGV pakai Kredivio sekarang bisa dapetin diskon sampai 100rb loh, cek syarat dan ketentuannya dibawah ini yuk:</div><div><br></div><div><b>Diskon hingga 50RB</b></div><div>1. Berlaku hingga 30 Juni 2023</div><div>2. Diskon 50% hingga Rp50.000 tanpa minimum transaksi</div><div>3. Berlaku khusus transaksi pertama untuk pengguna baru Kredivo</div><div>4. Tidak ada kuota untuk promo ini</div><div>5. Jika transaksi dibatalkan, diskon ini tidak dapat digunakan lagi untuk transaksi berikutnya</div><div>6. Berlaku untuk PayLater 30 hari &amp; Cicilan 3/6/12 bulan</div><div><br></div><div><b>Diskon hingga 100RB</b></div><div>1. Berlaku hingga 30 Juni 2023</div><div>2. Diskon 5% hingga Rp100.000 untuk minimum transaksi Rp1.000.000</div><div>3. Berlaku untuk semua pengguna Kredivo dan hanya bisa digunakan 1x/pengguna/bulan</div><div>4. Kuota promo terbatas hanya 150 pengguna/hari selama periode promo berlangsung</div><div>5. Jika transaksi dibatalkan, diskon ini tidak dapat digunakan lagi untuk transaksi berikutnya</div><div>6. Berlaku khusus Cicilan 6 &amp; 12 bulan</div><div><br></div><div>Tunggu apalagi, dapatkan promonya sekarang juga!</div>'),
(10, 'Buy 1 Get 1 Pakai KB Bukopin', 'promotion10.jpg', '<p>Hii Teman Seru CGV !</p><p><br></p><p>Dapatkan promo buy 1 get 1 di CGV pakai Kartu Kredit KB Bukopin setiap sabtu &amp; minggu . cek syarat dan kerentuannya dibawah ini:</p><p><br></p><p>1. Program Buy 1 Get 1 Free menggunakan Kartu Kredit KB Bukopin di CGV Cinemas</p><p>2. Promo berlaku khusus untuk kelas Reguler 2D</p><p>3. Berlaku khusus transaksi di hari Sabtu &amp; Minggu</p><p>4. Promo berlaku sampai dengan 31 Desember 2023</p><p>5. Gratis 1 tiket hanya berlaku 1 kali transaksi/dip/hari (berlaku untuk pembelian maksimum 1x transaksi per kartu sehingga Pemegang Kartu menerima 2 tiket)</p><p>6. Promo berlaku di seluruh site CGV</p><p>7. Promo berlaku khusus untuk CGV member</p><p>8. Promo kartu kredit KB Bukopin tidak dapat digabungkan dengan promo lainnya</p><p>9. Syarat dan ketentuan bisa berubah kapanpun tanpa informasi sebelumnya dan menjadi hak CGV sepenuhnya</p><div><br></div><div>Tunggu apalagi, buruan ke CGV dan dapatkan promonya!</div><div>Sampai ketemu di CGV teman seru!</div>'),
(11, 'Buy 1 Get 1 pakai kartu kredit BNI - Telkomsel', 'promotion11.jpg', '<p>Hi teman seru CGV!</p><p><br></p><p>Setiap hari rabu kamu bisa nonton hemat sekarang, karna ada promo buy 1 get 1 dengan menggunakan kartu kredit BNI - Telkomsel, Cek syarat dan ketentuannya dibawah ini ya.</p><p><br></p><p>1. Program Buy 1 Get 1 menggunakan Kartu Kredit BNI-Telkomsel di CGV Cinemas</p><p>2. Promo berlaku khusus kelas Reguler 2D</p><p>3. Berlaku khusus transaksi di hari Sabtu setiap minggunya</p><p>4. Promo berlaku sampai dengan 31 Desember 2023</p><p>5. Gratis 1 tiket hanya berlaku 1 kali transaksi/dip/hari (berlaku untuk pembelian maksimum 1x transaksi per kartu sehingga pemegang kartu menerima 2 tiket)</p><p>6. Promo ini memiliki kuota 5 transaksi/hari/site</p><p>7. Promo berlaku di site CGV area Jakarta</p><p>- CGV Grand Indonesia</p><p>- CGV Pacific Place</p><p>- CGV Central Park</p><p>- CGV Slipi Jaya</p><p>- CGV Green Pramuka Mall</p><p>- CGV Bella Terra Lifestyle Center</p><p>- CGV Transmart Cempaka Putih</p><p>- CGV Aeon Mall JGC</p><p>- CGV FX Sudirman</p><p>- CGV Sunter Mall</p><p>- CGV Buaran Plaza</p><p>- CGV Poins Mall</p><p><br></p><p>8. Promo berlaku khusus untuk CGV member</p><p>9. Promo kartu kredit BNI-Telkomsel tidak dapat digabungkan dengan promo lainnya</p><p>10. Syarat dan ketentuan bisa berubah kapanpun tanpa informasi sebelumnya dan menjadi hak CGV sepenuhnya</p><div><br></div><div>Ayo buruan ke CGV dan dapatkan promonya.</div><div>Sampai ketemu di CGV teman Seru!</div>'),
(12, 'BUY 1 GET 1 FREE WITH MAYAPADA VISA CREDIT CARD', 'promotion12.jpg', '<p>Hii Teman Seru CGV!</p><p><br></p><p>Untuk kamu pengguna Mayapada&nbsp; Visa Credit Card, sekarang kamu bisa nonton hemat setiap weekend di CGV loh, mau tau cara dapetinnya gimana? cek syarat dan ketentuannya dibawah ini ya !</p><ul><li>Beli 1 dapat 2 / buy 1 get 1 free ticket, setiap transaksi pembayaran kartu bank Mayapada credit card di CGV melalui POS kasir, web, dan aplikasi CGV.</li><li>Minimum input transaksi pembelian 2 tiket agar secara otomatis tiket tiket ke-2 menjadi gratis atau 0 rupiah</li><li>Pengguna Gold &amp; Platinum Credit Card promo hanya berlaku untuk regular 2D saja</li><li>Pengguna Signature Credit Card promo berlaku untuk all class (regular, starium, screenX, 4DX, SphereX, Gold, Velvet)</li><li>Promo berlangsung setiap hari Jumat, Sabtu, dan Minggu hingga 31 Desember 2023</li><li>Maksimal 1 transaksi diskon / pengguna / hari</li><li>Promo B1G1 Mayapada tidak dapat digabungkan dengan promo lainnya</li><li>Customer tidak berhak mengajukan refund jika tidak mendapatkan promo dengan alasan apapun</li><li>Syarat dan ketentuan bisa berubah kapanpun tanpa informasi sebelumnya dan menjadi hak CGV sepenuhnya</li></ul><div>Gimana makin seru kan nonton di CGV? tunggu apalagi langsung beli tiketnya dan dapatkan promonya!</div><div>Sampai ketemu di CGV teman seru!</div>'),
(13, 'Promo nonton di CGV dari BPJS Ketenagakerjaan', 'promotion13.jpg', '<p>Hii Teman Seru CGV!</p><p><br></p><p>Musim liburan sudah tiba tapi kamu bingung mau kemana? sekarang kamu ga perlu bingung, di CGV lagi ada promo menarik nih buat kamu.&nbsp;</p><p>BPJS ketenagakerjaan lagi bagi-bagi E-Coupon diskon buat para pesertanya. Cek syarat dan ketentuannya dibawah ini ya.</p><ul><li>Download aplikasi mobile JMO dan lakukan registrasi</li><li>Klik \"Menu Lainnya\" dan temukan Diskon Nonton CGV Cinemas pada bagian \"Promo\" (Akses dengan menggunakan perangkat android)</li><li>Berlaku khusus peserta aktif BPJS Ketenagakerjaan</li><li>E-Coupon berlaku setiap hari termasuk Sabtu-Minggu dan Hari Libur Nasional</li><li>Satu E-Coupon No hanya dapat digunakan pada 1 kali transaksi tiket nonton</li><li>E-Coupon dapat digunakan untuk pembelian tiket nonton di CGV website, mobile apps dan POS counter bioskop</li><li>Jika jumlah transaksi dibawah nilai E-Coupon, nominal sisa tidak dapat dikembalikan dengan uang tunai atau dianggap hangus</li><li>Nilai E-Coupon dibawah jumlah transaksi dapat digabung dengan metode pembayaran lainnya (tunai, kartu debit, kartu kredit, dan lainnya yang berlaku).</li><li>E-Coupon harus dipergunakan sebelum masa berlaku yang tertera habis</li><li>E-Coupon tidak bisa di refund dalam bentuk cash atau kredit</li><li>E-Coupon tidak bisa digunakan berbarengan dengan CGV membership point</li><li>E-Coupon tidak bisa digunakan bersamaan dengan transaksi produk F&amp;B.</li><li>Untuk penggunaan E-Coupon di CGV website &amp; mobile apps, e-coupon wajib diregistrasikan terlebih dahulu di masing-masing akun member setiap customer. Jika belum memiliki akun member silahkan mendaftar terlebih dahulu GRATIS.</li></ul><p>Tunggu apalagi, buka aplikasi JMO dan dapatkankan E-Couponnya.</p><p>Sampai ketemu di CGV teman seru!</p>'),
(14, 'BELI 1 GRATIS 1 TIKET PAKAI KARTU KREDIT OCBC NISP VOYAGE', 'promotion14.jpg', '<p>Hi teman seru CGV!</p><p><br></p><p>Segera ajak pasanganmu buat nonton ke CGV karena film-filmnya lagi bagus banget!</p><p>Sebelum itu, kalian harus cek penawaran menarik buat kamu pengguna kartu kredit OCBC NISP Voyage.</p><p>Syarat dan ketentuan promo dapat dilihat di bawah ini:</p><ul><li>Setiap pembelian 1 tiket di studio Gold Class, Velvet, 4DX, Satin, dan Screenx&nbsp; mendapatkan 1 tiket gratis&nbsp;</li><li>Promo berlangsung setiap hari Rabu</li><li>1 tiket gratis hanya berlaku pada waktu, lokasi, studio dan film yang sama</li><li>Berlaku hanya untuk kartu Kredit&nbsp;<span style=\"font-weight: 700;\">OCBC NISP Voyage</span></li><li>Periode promo&nbsp;<span style=\"font-weight: 700;\">7 September 2022 – 31 Agustus 2023</span></li><li>Berlaku di seluruh lokasi CGV&nbsp;</li><li>Berlaku untuk 1 kali transaksi/hari/nasabah</li><li>Promo tidak berlaku untuk film festival, presale, atau special show</li><li>Tidak dapat digabung dengan promo lainnya dan split bill</li><li>Transaksi promo ini tidak berlaku pembayaran menggunakan voucher, coupon, atau CGV point</li><li>Pihak OCBC NISP berhak membatasi kuota promo dan membatalkan transaksi apabila ditemukan indikasi kecurangan</li></ul><p><br></p><p>Yuk ajak pasangan kalian nonton ke CGV, dan dapatkan promonya dengan menggunakan kartu kredit OCBC NISP Voyage.</p>'),
(15, 'DAPATKAN 1 TIKET GRATIS DARI OCBC NISP UNTUK PENGGUNA KARTU PLATINUM', 'promotion15.jpg', '<p>Hi teman seru CGV!</p><p><br></p><p>Lagi bingung cari promo karena film-film lagi bagus?</p><p>Buat kamu pengguna kartu kredit OCBC NISP, dapatkan promo menarik bagi pengguna kartu Platinum.</p><p>Syarat dan ketentuan promo dapat dilihat di bawah ini:</p><ul><li>Setiap pembelian 3 tiket di studio Regular 2D, Sweetbox, Spherex, dan Starium 2D mendapatkan 1 tiket gratis&nbsp;</li><li>Promo berlangsung setiap hari Rabu</li><li>1 tiket gratis hanya berlaku pada waktu, lokasi, studio dan film yang sama</li><li>Berlaku hanya untuk kartu Kredit <b>OCBC NISP Platinum</b></li><li>Periode promo <b>7 September 2022 – 31 Agustus 2023</b></li><li>Berlaku di seluruh lokasi CGV&nbsp;</li><li>Berlaku untuk 1 kali transaksi/hari/nasabah</li><li>Promo tidak berlaku untuk film festival, presale, atau special show</li><li>Tidak dapat digabung dengan promo lainnya dan split bill</li><li>Transaksi promo ini tidak berlaku pembayaran menggunakan voucher, coupon, atau CGV point</li><li>Pihak OCBC NISP berhak membatasi kuota promo dan membatalkan transaksi apabila ditemukan indikasi kecurangan</li></ul><p><br></p><p>Yuk segera ajak geng nonton kalian ke CGV, dan dapatkan promonya dengan menggunakan kartu kredit OCBC NISP Platinum.</p>'),
(16, 'PAKAI BNI REWARDS POINT DI CGV BISA HEMAT HINGGA 70%', 'promotion16.jpg', '<p>Hi teman seru!</p><p><br></p><p>Buat kamu pengguna kartu kredit BNI, jangan lupa untuk pakai point kamu untuk bertransaksi di CGV karena bisa hemat hingga 70%.</p><p>Gimana? Seru dan hemat banget kan?</p><p>Caranya mudah banget kok, yuk liat dulu detail mekanismenya di bawah ini:</p><ul><li>Hemat hingga 70% dengan <span style=\"font-weight: bold;\">BNI Rewards Point</span> tanpa minimun transaksi</li><li>Promo belaku setiap hari termasuk hari libur nasional</li><li>1 kartu hanya bisa melakukan 1 kali penukaran poin per hari dan tidak berlaku split bill</li><li>Promo <span style=\"font-weight: bold;\">BNI Rewards point</span> berlaku di seluruh outlet CGV (nasional area) dan berlaku untuk seluruh kelas auditorium</li><li>Promo <span style=\"font-weight: bold;\">BNI Rewards point</span> berlaku untuk semua jenis kartu kredit BNI kecuali kartu kredit BNI co-brand Garuda &amp; corporate card</li><li>Periode promo ini berlaku hingga 31 Juli 2023</li></ul><p><br></p><p>Info lengkap tentang<span style=\"font-weight: bold;\"> BNI Rewards Point </span>bisa teman seru kunjungi lewat&nbsp;<a href=\"https://www.bni.co.id/creditcard/id-id/layananfasilitas/layanan/bnirewardpoints\" target=\"_blank\">website BNI</a>&nbsp;ini ya.</p><p>Yuk segera bertransaki di CGV menggunakan kartu kredit BNI dan kumpulkan point rewards kamu sekarang!</p>');

-- --------------------------------------------------------

--
-- Table structure for table `schedules`
--

CREATE TABLE `schedules` (
  `id` int(11) NOT NULL,
  `movie_id` int(11) NOT NULL,
  `cinema_id` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `schedules`
--

INSERT INTO `schedules` (`id`, `movie_id`, `cinema_id`, `date`) VALUES
(1, 1, 1, '2023-06-04'),
(2, 1, 1, '2023-06-05'),
(3, 1, 2, '2023-06-04'),
(4, 1, 2, '2023-06-05'),
(5, 1, 3, '2023-06-04'),
(6, 1, 3, '2023-06-05'),
(7, 1, 4, '2023-06-04'),
(8, 1, 4, '2023-06-05'),
(9, 1, 8, '2023-06-04'),
(10, 1, 8, '2023-06-05'),
(11, 1, 12, '2023-06-04'),
(12, 1, 12, '2023-06-05'),
(13, 1, 17, '2023-06-04'),
(14, 1, 17, '2023-06-05'),
(15, 1, 23, '2023-06-04'),
(16, 1, 23, '2023-06-05'),
(17, 1, 28, '2023-06-04'),
(18, 1, 28, '2023-06-05'),
(19, 1, 31, '2023-06-04'),
(20, 1, 31, '2023-06-05'),
(21, 1, 33, '2023-06-04'),
(22, 1, 33, '2023-06-05'),
(23, 1, 36, '2023-06-04'),
(24, 1, 36, '2023-06-05'),
(25, 1, 37, '2023-06-04'),
(27, 1, 37, '2023-06-05'),
(28, 1, 39, '2023-06-04'),
(29, 1, 39, '2023-06-05'),
(30, 1, 40, '2023-06-04'),
(31, 1, 40, '2023-06-05'),
(33, 1, 6, '2023-06-04'),
(34, 1, 6, '2023-06-05'),
(35, 1, 9, '2023-06-04'),
(36, 1, 9, '2023-06-05'),
(37, 1, 15, '2023-06-04'),
(38, 1, 15, '2023-06-05'),
(39, 1, 21, '2023-06-04'),
(40, 1, 21, '2023-06-05'),
(41, 1, 25, '2023-06-04'),
(42, 1, 25, '2023-06-05'),
(43, 3, 5, '2023-06-04'),
(44, 3, 5, '2023-06-05'),
(45, 3, 10, '2023-06-04'),
(46, 3, 10, '2023-06-05'),
(47, 3, 11, '2023-06-04'),
(48, 3, 11, '2023-06-05'),
(49, 3, 13, '2023-06-04'),
(50, 3, 13, '2023-06-05'),
(51, 3, 14, '2023-06-04'),
(52, 3, 14, '2023-06-05'),
(53, 3, 16, '2023-06-04'),
(54, 3, 16, '2023-06-05'),
(55, 3, 18, '2023-06-04'),
(56, 3, 18, '2023-06-05'),
(57, 3, 19, '2023-06-04'),
(58, 3, 19, '2023-06-05'),
(59, 3, 20, '2023-06-04'),
(60, 3, 20, '2023-06-05'),
(61, 3, 22, '2023-06-04'),
(62, 3, 22, '2023-06-05'),
(63, 3, 24, '2023-06-04'),
(64, 3, 24, '2023-06-05'),
(65, 3, 27, '2023-06-04'),
(66, 3, 27, '2023-06-05'),
(67, 3, 29, '2023-06-04'),
(68, 3, 29, '2023-06-05'),
(69, 3, 30, '2023-06-04'),
(70, 3, 30, '2023-06-05'),
(71, 3, 32, '2023-06-04'),
(72, 3, 32, '2023-06-05'),
(73, 3, 34, '2023-06-04'),
(74, 3, 34, '2023-06-05'),
(75, 3, 35, '2023-06-04'),
(76, 3, 35, '2023-06-05'),
(77, 3, 38, '2023-06-04'),
(78, 3, 38, '2023-06-05'),
(79, 3, 41, '2023-06-04'),
(80, 3, 41, '2023-06-05'),
(81, 3, 7, '2023-06-04'),
(82, 3, 7, '2023-06-05'),
(83, 4, 1, '2023-06-04'),
(84, 4, 1, '2023-06-05'),
(85, 4, 3, '2023-06-04'),
(86, 4, 3, '2023-06-05'),
(87, 4, 5, '2023-06-04'),
(88, 4, 5, '2023-06-05'),
(89, 4, 7, '2023-06-04'),
(90, 4, 7, '2023-06-05'),
(91, 4, 9, '2023-06-04'),
(92, 4, 9, '2023-06-05'),
(93, 4, 11, '2023-06-04'),
(94, 4, 11, '2023-06-05'),
(95, 4, 13, '2023-06-04'),
(96, 4, 13, '2023-06-05'),
(97, 4, 15, '2023-06-04'),
(98, 4, 15, '2023-06-05'),
(99, 4, 17, '2023-06-04'),
(100, 4, 17, '2023-06-05'),
(101, 4, 19, '2023-06-04'),
(102, 4, 19, '2023-06-05'),
(103, 4, 21, '2023-06-04'),
(104, 4, 21, '2023-06-05'),
(105, 4, 23, '2023-06-04'),
(106, 4, 23, '2023-06-05'),
(107, 4, 25, '2023-06-04'),
(108, 4, 25, '2023-06-05'),
(109, 4, 27, '2023-06-04'),
(110, 4, 27, '2023-06-05'),
(111, 4, 29, '2023-06-04'),
(112, 4, 29, '2023-06-05'),
(113, 4, 31, '2023-06-04'),
(114, 4, 31, '2023-06-05'),
(115, 4, 33, '2023-06-04'),
(116, 4, 33, '2023-06-05'),
(117, 4, 35, '2023-06-04'),
(118, 4, 35, '2023-06-05'),
(119, 4, 37, '2023-06-04'),
(120, 4, 37, '2023-06-05'),
(121, 4, 39, '2023-06-04'),
(122, 4, 39, '2023-06-05'),
(123, 5, 2, '2023-06-04'),
(124, 5, 2, '2023-06-05'),
(125, 5, 4, '2023-06-04'),
(126, 5, 4, '2023-06-05'),
(127, 5, 6, '2023-06-04'),
(128, 5, 6, '2023-06-05'),
(129, 5, 8, '2023-06-04'),
(130, 5, 8, '2023-06-05'),
(131, 5, 10, '2023-06-04'),
(132, 5, 10, '2023-06-05'),
(133, 5, 12, '2023-06-04'),
(134, 5, 12, '2023-06-05'),
(135, 5, 14, '2023-06-04'),
(136, 5, 14, '2023-06-05'),
(137, 5, 16, '2023-06-04'),
(138, 5, 16, '2023-06-05'),
(139, 5, 18, '2023-06-04'),
(140, 5, 18, '2023-06-05'),
(141, 5, 20, '2023-06-04'),
(142, 5, 20, '2023-06-05'),
(143, 5, 22, '2023-06-04'),
(144, 5, 22, '2023-06-05'),
(145, 5, 24, '2023-06-04'),
(146, 5, 24, '2023-06-05'),
(147, 5, 28, '2023-06-04'),
(148, 5, 28, '2023-06-05'),
(149, 5, 30, '2023-06-04'),
(150, 5, 30, '2023-06-05'),
(151, 5, 32, '2023-06-04'),
(152, 5, 32, '2023-06-05'),
(153, 5, 34, '2023-06-04'),
(154, 5, 34, '2023-06-05'),
(155, 5, 36, '2023-06-04'),
(156, 5, 36, '2023-06-05'),
(157, 5, 38, '2023-06-04'),
(158, 5, 38, '2023-06-05'),
(159, 5, 40, '2023-06-04'),
(160, 5, 40, '2023-06-05'),
(161, 5, 41, '2023-06-04'),
(162, 5, 41, '2023-06-05'),
(163, 6, 1, '2023-06-04'),
(164, 6, 1, '2023-06-05'),
(165, 6, 3, '2023-06-04'),
(166, 6, 3, '2023-06-05'),
(167, 6, 5, '2023-06-04'),
(168, 6, 5, '2023-06-05'),
(169, 6, 7, '2023-06-04'),
(170, 6, 7, '2023-06-05'),
(172, 6, 9, '2023-06-04'),
(173, 6, 9, '2023-06-05'),
(174, 6, 11, '2023-06-04'),
(175, 6, 11, '2023-06-05'),
(176, 6, 13, '2023-06-04'),
(177, 6, 13, '2023-06-05'),
(178, 6, 15, '2023-06-04'),
(179, 6, 15, '2023-06-05'),
(180, 6, 17, '2023-06-04'),
(181, 6, 17, '2023-06-05'),
(183, 6, 19, '2023-06-04'),
(184, 6, 19, '2023-06-05'),
(185, 6, 21, '2023-06-04'),
(186, 6, 21, '2023-06-05'),
(187, 6, 23, '2023-06-04'),
(188, 6, 23, '2023-06-05'),
(189, 6, 25, '2023-06-04'),
(190, 6, 25, '2023-06-05'),
(191, 6, 27, '2023-06-04'),
(192, 6, 27, '2023-06-05'),
(193, 6, 29, '2023-06-04'),
(194, 6, 29, '2023-06-05'),
(195, 6, 31, '2023-06-04'),
(196, 6, 31, '2023-06-05'),
(197, 6, 33, '2023-06-04'),
(198, 6, 33, '2023-06-05'),
(199, 6, 35, '2023-06-04'),
(200, 6, 35, '2023-06-05'),
(201, 6, 37, '2023-06-04'),
(202, 6, 37, '2023-06-05'),
(203, 6, 39, '2023-06-04'),
(204, 6, 39, '2023-06-05'),
(205, 7, 2, '2023-06-04'),
(206, 7, 2, '2023-06-05'),
(207, 7, 4, '2023-06-04'),
(208, 7, 4, '2023-06-05'),
(209, 7, 6, '2023-06-04'),
(210, 7, 6, '2023-06-05'),
(211, 7, 8, '2023-06-04'),
(212, 7, 8, '2023-06-05'),
(213, 1, 10, '2023-06-04'),
(214, 1, 10, '2023-06-05'),
(215, 7, 12, '2023-06-04'),
(216, 7, 12, '2023-06-05'),
(217, 7, 14, '2023-06-04'),
(218, 7, 14, '2023-06-05'),
(219, 7, 16, '2023-06-04'),
(220, 7, 16, '2023-06-05'),
(221, 7, 18, '2023-06-04'),
(222, 7, 18, '2023-06-05'),
(223, 7, 20, '2023-06-04'),
(224, 7, 20, '2023-06-05'),
(225, 7, 22, '2023-06-04'),
(226, 7, 22, '2023-06-05'),
(227, 7, 24, '2023-06-04'),
(228, 7, 24, '2023-06-05'),
(229, 7, 28, '2023-06-04'),
(230, 7, 28, '2023-06-05'),
(231, 7, 30, '2023-06-04'),
(232, 7, 30, '2023-06-05'),
(233, 7, 32, '2023-06-04'),
(234, 7, 32, '2023-06-05'),
(235, 7, 34, '2023-06-04'),
(236, 7, 34, '2023-06-05'),
(237, 7, 36, '2023-06-04'),
(238, 7, 36, '2023-06-05'),
(239, 7, 38, '2023-06-04'),
(240, 7, 38, '2023-06-05'),
(241, 7, 40, '2023-06-04'),
(242, 7, 40, '2023-06-05'),
(243, 7, 41, '2023-06-04'),
(244, 7, 41, '2023-06-05'),
(245, 8, 1, '2023-06-04'),
(247, 8, 1, '2023-06-05'),
(248, 8, 3, '2023-06-04'),
(249, 8, 3, '2023-06-05'),
(250, 8, 5, '2023-06-04'),
(251, 8, 5, '2023-06-05'),
(252, 8, 7, '2023-06-04'),
(253, 8, 7, '2023-06-05'),
(254, 8, 9, '2023-06-04'),
(255, 8, 9, '2023-06-05'),
(256, 8, 11, '2023-06-04'),
(257, 8, 11, '2023-06-05'),
(258, 1, 13, '2023-06-04'),
(259, 8, 13, '2023-06-05'),
(260, 8, 15, '2023-06-04'),
(261, 8, 15, '2023-06-05'),
(262, 8, 17, '2023-06-04'),
(263, 8, 17, '2023-06-05'),
(264, 8, 19, '2023-06-04'),
(265, 8, 19, '2023-06-05'),
(266, 8, 21, '2023-06-04'),
(267, 8, 21, '2023-06-05'),
(268, 8, 23, '2023-06-04'),
(269, 8, 23, '2023-06-05'),
(270, 8, 25, '2023-06-04'),
(271, 8, 25, '2023-06-05'),
(272, 8, 27, '2023-06-04'),
(273, 8, 27, '2023-06-05'),
(274, 8, 29, '2023-06-04'),
(275, 8, 29, '2023-06-05'),
(276, 8, 31, '2023-06-04'),
(277, 8, 31, '2023-06-05'),
(278, 8, 33, '2023-06-04'),
(279, 8, 33, '2023-06-05'),
(280, 8, 35, '2023-06-04'),
(281, 8, 35, '2023-06-05'),
(282, 8, 37, '2023-06-04'),
(283, 8, 37, '2023-06-05'),
(284, 8, 39, '2023-06-04'),
(285, 8, 39, '2023-06-05'),
(286, 9, 2, '2023-06-04'),
(287, 9, 2, '2023-06-05'),
(289, 9, 4, '2023-06-04'),
(290, 9, 4, '2023-06-05'),
(291, 9, 6, '2023-06-04'),
(292, 9, 6, '2023-06-05'),
(293, 9, 8, '2023-06-04'),
(294, 9, 8, '2023-06-05'),
(295, 9, 10, '2023-06-04'),
(296, 9, 10, '2023-06-05'),
(297, 9, 12, '2023-06-04'),
(298, 9, 12, '2023-06-05'),
(299, 1, 14, '2023-06-04'),
(300, 9, 14, '2023-06-05'),
(301, 9, 16, '2023-06-04'),
(302, 9, 16, '2023-06-05'),
(303, 9, 18, '2023-06-04'),
(304, 9, 18, '2023-06-05'),
(305, 9, 20, '2023-06-04'),
(306, 9, 20, '2023-06-05'),
(307, 9, 22, '2023-06-04'),
(308, 9, 22, '2023-06-05'),
(309, 9, 24, '2023-06-05'),
(310, 9, 28, '2023-06-04'),
(311, 9, 28, '2023-06-05'),
(312, 9, 30, '2023-06-04'),
(313, 9, 30, '2023-06-05'),
(314, 9, 32, '2023-06-04'),
(315, 9, 32, '2023-06-05'),
(316, 9, 34, '2023-06-04'),
(317, 9, 34, '2023-06-05'),
(318, 9, 24, '2023-06-04'),
(319, 9, 36, '2023-06-04'),
(320, 9, 36, '2023-06-05'),
(321, 9, 38, '2023-06-04'),
(322, 9, 38, '2023-06-05'),
(323, 9, 40, '2023-06-04'),
(324, 9, 40, '2023-06-05'),
(325, 4, 41, '2023-06-04'),
(326, 9, 41, '2023-06-05');

-- --------------------------------------------------------

--
-- Table structure for table `schedule_locations`
--

CREATE TABLE `schedule_locations` (
  `id` int(11) NOT NULL,
  `schedule_id` int(11) NOT NULL,
  `cinema_auditorium_id` int(11) NOT NULL,
  `type` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `schedule_times`
--

CREATE TABLE `schedule_times` (
  `id` int(11) NOT NULL,
  `schedule_location_id` int(11) NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `seats`
--

CREATE TABLE `seats` (
  `id` int(11) NOT NULL,
  `seat_type_id` int(11) NOT NULL,
  `kolom` varchar(11) NOT NULL,
  `baris` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `seat_types`
--

CREATE TABLE `seat_types` (
  `id` int(11) NOT NULL,
  `cinema_auditorium_id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `logo` varchar(128) NOT NULL,
  `regular_days_price` varchar(64) NOT NULL,
  `fiday_price` varchar(64) NOT NULL,
  `weekday_holliday_price` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `special`
--

CREATE TABLE `special` (
  `special_id` int(11) NOT NULL,
  `special_title` varchar(128) NOT NULL,
  `cover_img` varchar(128) NOT NULL,
  `content_img` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `special`
--

INSERT INTO `special` (`special_id`, `special_title`, `cover_img`, `content_img`) VALUES
(1, 'PRIVATE BOX', 'private_box.jpg', 'private_box2.jpg'),
(2, 'Sweetbox', 'sweet_box.jpg', 'sweet_box2.jpg'),
(3, 'Starium', 'starium.jpg', 'starium2.jpg'),
(4, 'SpehereX', 'spherex.jpg', 'spherex2.jpg'),
(5, '4DX', '4dx.jpg', '4dx2.jpg'),
(6, 'ScreenX', 'screenx.jpg', 'screenx2.jpg'),
(7, 'Gold Class', 'gold_class.jpg', 'gold_class2.jpg'),
(8, 'Velvet Class', 'velvet_class.jpg', 'velvet_class2.jpg'),
(9, 'Satin Class', 'satin_class.jpg', 'satin_class2.jpg'),
(10, 'CGV SPORTS BAR', 'cgv_sport.jpg', 'cgv_sport2.jpg'),
(11, 'CGV WARUNG MIE', 'cgv_warung.jpg', 'cgv_warung2.jpg'),
(12, 'CGV KITCHEN', 'cgv_kitchen.jpg', 'cgv_kitchen2.jpg'),
(13, 'CGV CAFE', 'cgv_cafe.jpg', 'cgv_cafe2.jpg'),
(14, 'CGV SPORTS HALL MALL CIPUTRA TANGGERANG', 'cgv_sport_tanggerang.jpg', 'cgv_sport_tanggerang2.jpg'),
(15, 'CGV SPORTS HALL TERAS KOTA', 'cgv_sport_teras.jpg', 'cgv_sport_teras2.jpg'),
(16, 'CGV SPORTS HALL FX SUDIRMAN', 'cgv_sport_sudirman.jpg', 'cgv_sport_sudirman2.jpg'),
(17, 'HOW TO BUY TICKET ONLINE', 'how_to_buy.jpg', 'how_to_buy2.jpg'),
(18, 'HOW TO BUY F&B ONLINE', 'how_to_buyfnb.jpg', 'how_to_buyfnb2.jpg'),
(19, 'HOW TO PAY ONLINE', 'how_to_pay.jpg', 'how_to_pay2.jpg'),
(20, 'HOW TO USE E-TICKET', 'how_to_use.jpg', 'how_to_use2.jpg'),
(21, 'HOW TO PRINT TICKET', 'how_to_print.jpg', 'how_to_print2.jpg'),
(22, 'HOW TO USE QUICK PRINT TICKET', 'how_to_use_quick.jpg', 'how_to_use_quick2.jpg'),
(23, 'CGV X blu', 'cgv_blu.jpg', 'cgv_blu2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE `tickets` (
  `id` int(11) NOT NULL,
  `schedul_time_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `seat_id` int(11) NOT NULL,
  `paid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `username` varchar(100) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `city` varchar(11) NOT NULL,
  `email_address` varchar(200) NOT NULL,
  `birthdate` date NOT NULL,
  `preferred_cinema` varchar(100) NOT NULL,
  `pin` varchar(6) NOT NULL,
  `card_no` varchar(30) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `level` tinyint(1) NOT NULL DEFAULT 2
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `no_hp`, `username`, `gender`, `city`, `email_address`, `birthdate`, `preferred_cinema`, `pin`, `card_no`, `password`, `address`, `level`) VALUES
(1, 'Muhammad Luthfi', '088262450134', 'zeeroxc', 'Male', '13', 'luthfim904@gmail.com', '2004-03-26', '024', '123654', '', '$2y$10$cYo24xGK94wGAfD4iTytuOz6BTOcYgotE.Gq7JeD6db3CWtqnkOcS', '', 1),
(2, 'Ibra Rizqy Siregar', '083223533243', 'hyohoyh', 'Male', '13', 'rizqyibra@gmail.com', '2004-09-16', '002', '123456', '', '$2y$10$Sk5UzCuQmFj/2X5L696QA.tt.qrW9V3.CyTXNL043ZCS076qPC7Z2', 'Jalan Pondok Surya', 2),
(3, 'Christo Joseph Tua Carolus', '088243632385', 'christo', 'Male', '13', 'christo@gmail.com', '2004-01-01', '024', '123456', '', '$2y$10$JltsSqKHn4fwu5r9kdy6DeKYRJwD6Pd5mEPc0.T0ywrF8771SD25y', '', 2),
(5, 'test', '08', 'test', 'Male', '23', 'test@gmail/com', '2023-05-11', '014', '123456', '', '$2y$10$1zuupUYQsOzHUym5wGUXOuhmZ4oZh0JCeWhUaWEXKx4Wl8Hapam1a', NULL, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cinemas`
--
ALTER TABLE `cinemas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cinema-city` (`city_id`);

--
-- Indexes for table `cinema_auditoriums`
--
ALTER TABLE `cinema_auditoriums`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`city_id`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `promotion`
--
ALTER TABLE `promotion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schedules`
--
ALTER TABLE `schedules`
  ADD PRIMARY KEY (`id`),
  ADD KEY `movie-schedule` (`movie_id`),
  ADD KEY `cinema-schedule` (`cinema_id`);

--
-- Indexes for table `schedule_locations`
--
ALTER TABLE `schedule_locations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `schedule_id` (`schedule_id`),
  ADD KEY `cinema_auditorium_id` (`cinema_auditorium_id`);

--
-- Indexes for table `schedule_times`
--
ALTER TABLE `schedule_times`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seats`
--
ALTER TABLE `seats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seat_types`
--
ALTER TABLE `seat_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `special`
--
ALTER TABLE `special`
  ADD PRIMARY KEY (`special_id`);

--
-- Indexes for table `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cinemas`
--
ALTER TABLE `cinemas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `cinema_auditoriums`
--
ALTER TABLE `cinema_auditoriums`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `city_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `promotion`
--
ALTER TABLE `promotion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `schedules`
--
ALTER TABLE `schedules`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=327;

--
-- AUTO_INCREMENT for table `schedule_locations`
--
ALTER TABLE `schedule_locations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `schedule_times`
--
ALTER TABLE `schedule_times`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `seats`
--
ALTER TABLE `seats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `seat_types`
--
ALTER TABLE `seat_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `special`
--
ALTER TABLE `special`
  MODIFY `special_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tickets`
--
ALTER TABLE `tickets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cinemas`
--
ALTER TABLE `cinemas`
  ADD CONSTRAINT `cinema-city` FOREIGN KEY (`city_id`) REFERENCES `cities` (`city_id`);

--
-- Constraints for table `schedules`
--
ALTER TABLE `schedules`
  ADD CONSTRAINT `cinema-schedule` FOREIGN KEY (`cinema_id`) REFERENCES `cinemas` (`id`),
  ADD CONSTRAINT `movie-schedule` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`id`);

--
-- Constraints for table `schedule_locations`
--
ALTER TABLE `schedule_locations`
  ADD CONSTRAINT `schedule_locations_ibfk_1` FOREIGN KEY (`schedule_id`) REFERENCES `schedules` (`id`),
  ADD CONSTRAINT `schedule_locations_ibfk_2` FOREIGN KEY (`cinema_auditorium_id`) REFERENCES `cinema_auditoriums` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
