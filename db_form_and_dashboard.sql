-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2022 at 10:10 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_form_and_dashboard`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `answerPackageID` bigint(20) UNSIGNED NOT NULL,
  `questionSectionID` bigint(20) UNSIGNED NOT NULL,
  `questionSubSectionID` bigint(20) UNSIGNED NOT NULL,
  `answer` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `answer_packages`
--

CREATE TABLE `answer_packages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `dinilaiID` bigint(20) UNSIGNED NOT NULL,
  `penilaiID` bigint(20) UNSIGNED NOT NULL,
  `questionGroupID` bigint(20) UNSIGNED NOT NULL,
  `isDone` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `connection` text COLLATE utf8_unicode_ci NOT NULL,
  `queue` text COLLATE utf8_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `golongan_lists`
--

CREATE TABLE `golongan_lists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `golongan_lists`
--

INSERT INTO `golongan_lists` (`id`, `name`) VALUES
(1, '1A'),
(2, '2A'),
(3, '3A');

-- --------------------------------------------------------

--
-- Table structure for table `kelas_lists`
--

CREATE TABLE `kelas_lists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `kelas_lists`
--

INSERT INTO `kelas_lists` (`id`, `name`) VALUES
(1, '7'),
(2, '8'),
(3, '9'),
(4, '10'),
(5, '11'),
(6, '12'),
(7, 'Tidak Mengajar');

-- --------------------------------------------------------

--
-- Table structure for table `mata_pelajaran_lists`
--

CREATE TABLE `mata_pelajaran_lists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `mata_pelajaran_lists`
--

INSERT INTO `mata_pelajaran_lists` (`id`, `name`) VALUES
(1, 'IPA'),
(2, 'IPS');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_09_02_155709_create_user_details_table', 1),
(6, '2022_09_02_160025_create_posisi_lists_table', 1),
(7, '2022_09_02_160101_create_golongan_lists_table', 1),
(8, '2022_09_02_160135_create_unit_lists_table', 1),
(9, '2022_09_02_160204_create_kelas_lists_table', 1),
(10, '2022_09_02_160233_create_mata_pelajaran_lists_table', 1),
(11, '2022_09_02_160311_add_relations_to_user_details_table', 1),
(12, '2022_09_02_160731_create_question_groups_table', 1),
(13, '2022_09_02_160849_create_question_sections_table', 1),
(14, '2022_09_02_161139_create_question_sub_sections_table', 1),
(15, '2022_09_02_161811_create_questions_table', 1),
(16, '2022_09_02_162358_create_answer_packages_table', 1),
(17, '2022_09_02_162950_create_answers_table', 1),
(18, '2022_09_02_163348_create_rekapan_e_d_p_s_table', 1),
(19, '2022_09_02_163832_create_penilaian_g_p_a_s_table', 1),
(20, '2022_09_02_163957_create_penilaian_g_p_s_table', 1),
(21, '2022_09_02_164126_create_periodes_table', 1),
(22, '2022_09_02_164201_add_relations_to_penilaian_g_p_s_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `penilaian_g_p_a_s`
--

CREATE TABLE `penilaian_g_p_a_s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `userID` bigint(20) UNSIGNED NOT NULL,
  `GPA` double NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `penilaian_g_p_s`
--

CREATE TABLE `penilaian_g_p_s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `penilaianGPAID` bigint(20) UNSIGNED NOT NULL,
  `GPS` double NOT NULL,
  `periodeID` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `periodes`
--

CREATE TABLE `periodes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posisi_lists`
--

CREATE TABLE `posisi_lists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `posisi_lists`
--

INSERT INTO `posisi_lists` (`id`, `name`) VALUES
(1, 'Direktur 1'),
(2, 'Direktur 2'),
(3, 'Staff');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `groupID` bigint(20) UNSIGNED NOT NULL,
  `sectionID` bigint(20) UNSIGNED NOT NULL,
  `subsectionID` bigint(20) UNSIGNED NOT NULL,
  `question` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `questionType` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `minimumScore` int(11) DEFAULT NULL,
  `maximumScore` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `groupID`, `sectionID`, `subsectionID`, `question`, `questionType`, `minimumScore`, `maximumScore`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 'Pendidik dapat mengidentifikasi karakteristik belajar setiap peserta didik di kelasnya.', 'number', 1, 4, '2022-09-04 00:31:11', '2022-09-04 00:31:11'),
(2, 1, 1, 1, 'Pendidik  memastikan  bahwa  semua  peserta  didik  mendapatkan  kesempatan  yang  sama  untuk  berpartisipasi aktif dalam kegiatan pembelajaran.', 'number', 1, 4, '2022-09-04 00:31:11', '2022-09-04 00:31:11'),
(3, 1, 1, 1, 'Pendidik dapat mengatur  kelas untuk  memberikan  kesempatan  belajar  yang sama pada semua  peserta  didik dengan kelainan fisik dan kemampuan belajar yang berbeda.', 'number', 1, 4, '2022-09-04 00:31:11', '2022-09-04 00:31:11'),
(4, 1, 1, 1, 'Pendidik mencoba mengetahui  penyebab  penyimpangan  perilaku peserta didik untuk mencegah  agar perilaku tersebut tidak merugikan peserta didik lainnya.', 'number', 1, 4, '2022-09-04 00:31:11', '2022-09-04 00:31:11'),
(5, 1, 1, 1, 'Pendidik membantu mengembangkan  potensi dan mengatasi kekurangan/kelemahan peserta didik.', 'number', 1, 4, '2022-09-04 00:31:11', '2022-09-04 00:31:11'),
(6, 1, 1, 1, 'Pendidik memperhatikan peserta didik dengan kelemahan fisik tertentu agar dapat mengikuti aktivitas pembelajaran.', 'number', 1, 4, '2022-09-04 00:31:12', '2022-09-04 00:31:12'),
(7, 1, 1, 1, 'Memberikan motivasi/ dorongan/ tantangan kepada siswa sehingga menjadi bersemangat belajar', 'number', 1, 4, '2022-09-04 00:31:12', '2022-09-04 00:31:12'),
(8, 1, 1, 1, 'Memberi kesempatan kepada siswa untuk bereksplorasi, berefleksi, dan bernegosiasi', 'number', 1, 4, '2022-09-04 00:31:12', '2022-09-04 00:31:12'),
(9, 1, 1, 1, 'Membimbing siswa secara perorangan berdasarkan pemahaman atas situasi atau pribadi khas siswa tersebut', 'number', 1, 4, '2022-09-04 00:31:12', '2022-09-04 00:31:12'),
(10, 1, 1, 1, 'Guru melibatkan aktivitas mental, emosional, sosial, dan kultur siswa dalam mengajar.', 'number', 1, 4, '2022-09-04 00:31:12', '2022-09-04 00:31:12'),
(11, 1, 1, 2, 'Pendidik menguasai teori belajar dan prinsip-prinsip pembelajaran yang mendidik.', 'number', 1, 4, '2022-09-04 00:31:12', '2022-09-04 00:31:12'),
(12, 1, 1, 2, 'Pendidik menguasai materi, struktur, konsep, dan pola pikir keilmuan yang mendukung mata pelajaran yang diampu', 'number', 1, 4, '2022-09-04 00:31:12', '2022-09-04 00:31:12'),
(13, 1, 1, 2, 'Pendidik memahami capaian pembelajaran dan menurunkannya dalam Tujuan pembelajaran dan alur tujuan pembelajaran pada mata pelajaran yang diampu', 'number', 1, 4, '2022-09-04 00:31:12', '2022-09-04 00:31:12'),
(14, 1, 1, 2, 'Pendidik mampu memperkaya mata pelajaran yang diampu dengan permasalahan kontekstual dan perkembangan mutakhir.', 'number', 1, 4, '2022-09-04 00:31:12', '2022-09-04 00:31:12'),
(15, 1, 1, 2, 'Pendidik menggunakan berbagai teknik untuk memotiviasi kemauan belajar peserta didik.', 'number', 1, 4, '2022-09-04 00:31:12', '2022-09-04 00:31:12'),
(16, 1, 1, 2, 'Pendidik merencanakan kegiatan pembelajaran yang saling terkait satu sama lain, dengan memperhatikan tujuan pembelajaran maupun proses belajar peserta didik.', 'number', 1, 4, '2022-09-04 00:31:12', '2022-09-04 00:31:12'),
(17, 1, 1, 2, 'Pendidik memperhatikan respon peserta didik yang belum/kurang memahami materi pembelajaran yang diajarkan dan menggunakannya untuk memperbaiki rancangan pembelajaran berikutnya.', 'number', 1, 4, '2022-09-04 00:31:12', '2022-09-04 00:31:12'),
(18, 1, 1, 3, 'Pendidik dapat menyusun silabus/Alur Tujuan Pembelajaran yang sesuai dengan kurikulum (pengalaman belajar siswa dan pencapaian tujuan pembelajaran tergambar dengan jelas)', 'number', 1, 4, '2022-09-04 00:31:12', '2022-09-04 00:31:12'),
(19, 1, 1, 3, 'Pendidik merancang rencana pembelajaran/ modul ajar yang sesuai dengan silabus/ATP dengan pemilihan dan pengorganisasian  materi yang sesuai dengan dengan kontek siswa.', 'number', 1, 4, '2022-09-04 00:31:12', '2022-09-04 00:31:12'),
(20, 1, 1, 3, 'Pendidik dapat merancang RPP/Modul ajar dengan instrumen penilaian secara kreatif dan variatif(tidak monoton)  yang sesuai dengan tujuan pembelajaran dan capaian pembelajaran.', 'number', 1, 4, '2022-09-04 00:31:12', '2022-09-04 00:31:12'),
(21, 1, 1, 3, 'Pendidik memilih materi pembelajaran yang: sesuai dengan tujuan pembelajaran, tepat, dan mutakhir, sesuai dengan usia dan tingkat kemampuan belajar peserta didik, dapat dilaksanakan di kelas, sesuai dengan konteks kehidupan sehari-hari peserta didik.', 'number', 1, 4, '2022-09-04 00:31:12', '2022-09-04 00:31:12'),
(22, 1, 1, 4, 'Pedidik mengembangkan kompetensi siswa (sebagai perpaduan pengetahuan, kecakapan, sikap, dan values)', 'number', 1, 4, '2022-09-04 00:31:13', '2022-09-04 00:31:13'),
(23, 1, 1, 4, 'Pendidik melaksanakan aktivitas pembelajaran yang menyenangkan dengan menggunakan berbagai media   untuk membantu siswa belajar mengakses informasi dan mendukung interaksi siswa dengan sumber belajar.', 'number', 1, 4, '2022-09-04 00:31:13', '2022-09-04 00:31:13'),
(24, 1, 1, 4, 'Pendidik menyampaikan informasi baru (misalnya materi tambahan) sesuai dengan usia dan tingkat kemampuan belajar peserta didik.', 'number', 1, 4, '2022-09-04 00:31:13', '2022-09-04 00:31:13'),
(25, 1, 1, 4, 'Pendidik menyikapi kesalahan yang dilakukan peserta didik dengan ucapan, mimik muka, dan gerakan tubuh mencerminkan sikap menghormati pribadi siswa dan memandang kesalahan sebagai tahapan proses pembelajaran.', 'number', 1, 4, '2022-09-04 00:31:13', '2022-09-04 00:31:13'),
(26, 1, 1, 4, 'Pendidik melaksanakan kegiatan pembelajaran sesuai isi kurikulum dan mengkaitkannya dengan konteks kehidupan sehari‐hari.', 'number', 1, 4, '2022-09-04 00:31:13', '2022-09-04 00:31:13'),
(27, 1, 1, 4, 'Pendidik melakukan aktivitas pembelajaran secara bervariasi/berbagai metode yang mendorong keterlibatan siswa secara aktif.', 'number', 1, 4, '2022-09-04 00:31:13', '2022-09-04 00:31:13'),
(28, 1, 1, 4, 'Pendidik mengelola kelas dengan efektif tanpa mendominasi atau sibuk dengan kegiatannya sendiri agar semua waktu peserta dapat termanfaatkan secara produktif.', 'number', 1, 4, '2022-09-04 00:31:13', '2022-09-04 00:31:13'),
(29, 1, 1, 4, 'Pendidik mampu mendengarkan dan memahami harapan/gagasaan siswa, kemudian merespon dengan terbuka.', 'number', 1, 4, '2022-09-04 00:31:13', '2022-09-04 00:31:13'),
(30, 1, 1, 4, 'Pendidik memberikan banyak kesempatan kepada peserta didik untuk bertanya, mempraktikkan, dan berinteraksi dengan peserta didik lain.', 'number', 1, 4, '2022-09-04 00:31:13', '2022-09-04 00:31:13'),
(31, 1, 1, 4, 'Pendidik mengatur pelaksanaan aktivitas pembelajaran secara sistematis untuk membantu proses belajar peserta didik.', 'number', 1, 4, '2022-09-04 00:31:13', '2022-09-04 00:31:13'),
(32, 1, 1, 4, 'Pendidik menggunakan alat bantu mengajar, dan/atau audio‐visual (termasuk TIK) untuk meningkatkan motivasi belajar peserta didik dalam mencapai tujuan pembelajaran.', 'number', 1, 4, '2022-09-04 00:31:14', '2022-09-04 00:31:14'),
(33, 1, 1, 5, 'Pendidik menganalisis hasil belajar berdasarkan segala bentuk penilaian terhadap setiap peserta didik untuk mengetahui tingkat kemajuan masing‐masing.', 'number', 1, 4, '2022-09-04 00:31:14', '2022-09-04 00:31:14'),
(34, 1, 1, 5, 'Pendidik merancang dan melaksanakan aktivitas pembelajaran yang mendorong peserta didik untuk belajar sesuai dengan kecakapan dan pola belajar masing‐masing.', 'number', 1, 4, '2022-09-04 00:31:14', '2022-09-04 00:31:14'),
(35, 1, 1, 5, 'Pendidik merancang dan melaksanakan aktivitas pembelajaran untuk memunculkan daya kreativitas dan kemampuan berpikir kritis peserta didik.', 'number', 1, 4, '2022-09-04 00:31:14', '2022-09-04 00:31:14'),
(36, 1, 1, 5, 'Pendidik secara aktif membantu peserta didik dalam proses pembelajaran dengan memberikan perhatian kepada setiap individu.', 'number', 1, 4, '2022-09-04 00:31:14', '2022-09-04 00:31:14'),
(37, 1, 1, 5, 'Pendidik dapat mengidentifikasi dengan benar tentang bakat, minat, potensi, dan kesulitan belajar masing‐masing peserta didik.', 'number', 1, 4, '2022-09-04 00:31:14', '2022-09-04 00:31:14'),
(38, 1, 1, 5, 'Pendidik memberikan kesempatan belajar kepada peserta didik sesuai dengan cara belajarnya masing‐masing.', 'number', 1, 4, '2022-09-04 00:31:14', '2022-09-04 00:31:14'),
(39, 1, 1, 5, 'Pendidik memusatkan perhatian pada interaksi dengan peserta didik dan mendorongnya untuk memahami dan menggunakan informasi yang disampaikan.', 'number', 1, 4, '2022-09-04 00:31:14', '2022-09-04 00:31:14'),
(40, 1, 1, 6, 'Pendidik menggunakan pertanyaan untuk mengetahui pemahaman dan mendorong partisipasi peserta didik, termasuk memberikan pertanyaan terbuka yang menuntut peserta didik untuk menjawab dengan ide dan pengetahuan mereka.', 'number', 1, 4, '2022-09-04 00:31:14', '2022-09-04 00:31:14'),
(41, 1, 1, 6, 'Pendidik memberikan perhatian dan mendengarkan semua pertanyaan dan tanggapan peserta didik, tanpa menginterupsi, kecuali jika diperlukan untuk membantu atau mengklarifikasi pertanyaan/tanggapan tersebut.', 'number', 1, 4, '2022-09-04 00:31:14', '2022-09-04 00:31:14'),
(42, 1, 1, 6, 'Pendidik menanggapi pertanyaan peserta didik secara tepat, benar, dan mutakhir, sesuai tujuan pembelajaran dan isi kurikulum, tanpa mempermalukannya.', 'number', 1, 4, '2022-09-04 00:31:14', '2022-09-04 00:31:14'),
(43, 1, 1, 6, 'Pendidik menyajikan kegiatan pembelajaran yang dapat menumbuhkan kerja sama yang baik antar peserta didik.', 'number', 1, 4, '2022-09-04 00:31:15', '2022-09-04 00:31:15'),
(44, 1, 1, 6, 'Pendidik mendengarkan dan memberikan perhatian terhadap semua jawaban peserta didik baik yang benar maupun yang dianggap salah untuk mengukur tingkat pemahaman peserta didik.', 'number', 1, 4, '2022-09-04 00:31:15', '2022-09-04 00:31:15'),
(45, 1, 1, 6, 'Pendidik memberikan perhatian terhadap pertanyaan peserta didik dan meresponnya secara lengkap dan relevan untuk menghilangkan kebingungan pada peserta didik.', 'number', 1, 4, '2022-09-04 00:31:15', '2022-09-04 00:31:15'),
(46, 1, 1, 7, 'Pendidik memanfaatkan TIK untuk memperdalam penguasaan materi.', 'number', 1, 4, '2022-09-04 00:31:15', '2022-09-04 00:31:15'),
(47, 1, 1, 7, 'Pendidik memanfaatkan TIK untuk memperoleh informasi dari berbagai sumber.', 'number', 1, 4, '2022-09-04 00:31:15', '2022-09-04 00:31:15'),
(48, 1, 1, 7, 'Pendidik memanfaatkan TIK untuk mempercepat penyampaian pesan: informasi, tugas, materi pembelajaran sehingga pembelajaran aktual dan efektif.', 'number', 1, 4, '2022-09-04 00:31:15', '2022-09-04 00:31:15'),
(49, 1, 1, 7, 'Pendidik memanfaatkan TIK sebagai media belajar yang efektif dan menarik.', 'number', 1, 4, '2022-09-04 00:31:15', '2022-09-04 00:31:15'),
(50, 1, 1, 8, 'Pendidik menyusun alat penilaian yang sesuai dengan tujuan pembelajaran untuk mencapai kompetensi tertentu seperti yang tertulis dalam RPP/Modul ajar.', 'number', 1, 4, '2022-09-04 00:31:15', '2022-09-04 00:31:15'),
(51, 1, 1, 8, 'Pendidik melaksanakan asesmen diagnostif, formatif dan sumatif  dengan berbagai teknik (penilaian otentik)', 'number', 1, 4, '2022-09-04 00:31:15', '2022-09-04 00:31:15'),
(52, 1, 1, 8, 'Pendidik membantu siswa yang belum mencapai tujuan pembelajaran dan memberikan tantangan bagi siswa yang sudah mencapai tujuan pembelajaran melalui pembelajaran berdeferensiasi atau program remedial dan pengayaan.', 'number', 1, 4, '2022-09-04 00:31:15', '2022-09-04 00:31:15'),
(53, 1, 1, 8, 'Pendidik memanfaatkan masukan dari peserta didik dan merefleksikannya untuk meningkatkan pembelajaran selanjutnya, dan dapat membuktikannya melalui catatan, jurnal pembelajaran, rancangan pembelajaran, materi tambahan, dan sebagainya.', 'number', 1, 4, '2022-09-04 00:31:15', '2022-09-04 00:31:15'),
(54, 1, 1, 8, 'Pendidik memanfatkan hasil penilaian sebagai bahan penyusunan rancangan pembelajaran yang akan dilakukan selanjutnya.', 'number', 1, 4, '2022-09-04 00:31:16', '2022-09-04 00:31:16'),
(55, 1, 1, 9, 'Pendidik melakukan tindakan reflektif setiap selesai mengajar.', 'number', 1, 4, '2022-09-04 00:31:16', '2022-09-04 00:31:16'),
(56, 1, 1, 9, 'Pendidik membuat jurnal reflektif pembelajaran.', 'number', 1, 4, '2022-09-04 00:31:16', '2022-09-04 00:31:16'),
(57, 1, 1, 9, 'Pendidik menganalisis isi jurnal reflektif  untuk memperbaiki dan/atau meningkatkan kualitas pembelajaran.', 'number', 1, 4, '2022-09-04 00:31:16', '2022-09-04 00:31:16'),
(58, 1, 1, 9, 'Pendidik berpartisipasi aktif dalam kegiatan lesson study.', 'number', 1, 4, '2022-09-04 00:31:16', '2022-09-04 00:31:16'),
(59, 1, 1, 9, 'Pendidik berpartisipasi aktif dalam kegiatan PTK .', 'number', 1, 4, '2022-09-04 00:31:16', '2022-09-04 00:31:16'),
(60, 1, 1, 10, 'Pendidik memformulasikan tujuan  pembelajaran dalam RPP/ Modul Ajar sesuai dengan kurikulum/silabus dan memperhatikan karakteristik peserta didik.', 'number', 1, 4, '2022-09-04 00:31:16', '2022-09-04 00:31:16'),
(61, 1, 1, 10, 'Pendidik menyusun  bahan ajar secara runut, logis, kontekstual dan mutakhir.', 'number', 1, 4, '2022-09-04 00:31:16', '2022-09-04 00:31:16'),
(62, 1, 1, 10, 'Pendidik merencanakan kegiatan pembelajaran yang efektif dan menarik.', 'number', 1, 4, '2022-09-04 00:31:16', '2022-09-04 00:31:16'),
(63, 1, 1, 10, 'Pendidik memilih sumber belajar/ media pembelajaran sesuai dengan materi dan strategi pembelajaran.', 'number', 1, 4, '2022-09-04 00:31:16', '2022-09-04 00:31:16'),
(64, 1, 1, 11, 'Pendidik memulai pembelajaran dengan efektif dan menarik.', 'number', 1, 4, '2022-09-04 00:31:16', '2022-09-04 00:31:16'),
(65, 1, 1, 11, 'Pendidik menguasai materi pelajaran.', 'number', 1, 4, '2022-09-04 00:31:16', '2022-09-04 00:31:16'),
(66, 1, 1, 11, 'Pendidik menerapkan pendekatan/strategi pembelajaran yang efektif.', 'number', 1, 4, '2022-09-04 00:31:16', '2022-09-04 00:31:16'),
(67, 1, 1, 11, 'Pendidik memanfaatan sumber belajar/ media dalam pembelajaran.', 'number', 1, 4, '2022-09-04 00:31:16', '2022-09-04 00:31:16'),
(68, 1, 1, 11, 'Pendidik mendorong  keterlibatan siswa dalam pembelajaran.', 'number', 1, 4, '2022-09-04 00:31:16', '2022-09-04 00:31:16'),
(69, 1, 1, 11, 'Pendidik memfasilitasi siswa untuk berprestasi tinggi dan memahami masalah yang lebih kompleks.', 'number', 1, 4, '2022-09-04 00:31:16', '2022-09-04 00:31:16'),
(70, 1, 1, 11, 'Pendidik mampu mengenali dan memecahkan masalah pembelajaran.', 'number', 1, 4, '2022-09-04 00:31:16', '2022-09-04 00:31:16'),
(71, 1, 1, 11, 'Pendidik menggunakan bahasa yang benar dan tepat dalam pembelajaran.', 'number', 1, 4, '2022-09-04 00:31:16', '2022-09-04 00:31:16'),
(72, 1, 1, 11, 'Pendidik mampu melakukan improvisasi.', 'number', 1, 4, '2022-09-04 00:31:17', '2022-09-04 00:31:17'),
(73, 1, 1, 11, 'Pendidik memonitor pembelajaran.', 'number', 1, 4, '2022-09-04 00:31:17', '2022-09-04 00:31:17'),
(74, 1, 1, 11, 'Pendidik mengakhiri pembelajaran dengan efektif, indikatornya: siswa sungguh menguasai materi pelajaran, ada simpulan/rangkuman, refleksi, rencana yang akan datang.', 'number', 1, 4, '2022-09-04 00:31:17', '2022-09-04 00:31:17'),
(75, 1, 1, 12, 'Pendidik merancang alat penilaian  untuk mengukur kemajuan dan keberhasilan belajar peserta didik.', 'number', 1, 4, '2022-09-04 00:31:17', '2022-09-04 00:31:17'),
(76, 1, 1, 12, 'Pendidik menggunakan berbagai strategi dan metode penilaian  untuk memantau kemajuan dan hasil belajar peserta didik dalam mencapai tujuan pembelajaran  sebagaimana yang tertulis dalam RPP/modul ajar.', 'number', 1, 4, '2022-09-04 00:31:17', '2022-09-04 00:31:17'),
(77, 1, 1, 12, 'Pendidik memanfatkan berbagai  hasil penilaian dan analisanya untuk memberikan umpan balik bagi peserta didik tentang kemajuan belajarnya dan  bahan penyusunan rancangan pembelajaran selanjutnya.', 'number', 1, 4, '2022-09-04 00:31:17', '2022-09-04 00:31:17'),
(78, 1, 2, 13, 'Pendidik menghargai dan mempromosikan prinsip‐prinsip pendidikan Jesuit dan Pancasila.', 'number', 1, 4, '2022-09-04 00:31:17', '2022-09-04 00:31:17'),
(79, 1, 2, 13, 'Pendidik mampumengambil keputusan secara bijak dengan mempertimbangkan norma yang berlaku.', 'number', 1, 4, '2022-09-04 00:31:17', '2022-09-04 00:31:17'),
(80, 1, 2, 13, 'Pendidik bersikap  saling menghormati dan menghargai orang lain dengan bertingkah laku dan bertutur kata sesuai norma.', 'number', 1, 4, '2022-09-04 00:31:17', '2022-09-04 00:31:17'),
(81, 1, 2, 13, 'Pendidik memiliki rasa persatuan dan kesatuan sebagai bangsa Indonesia dengan memberi tekanan pada nilai adil.', 'number', 1, 4, '2022-09-04 00:31:17', '2022-09-04 00:31:17'),
(82, 1, 2, 13, 'Pendidik mempunyai pandangan yang luas tentang keberagaman bangsa Indonesia dengan memberi tekanan pada nilai inklusif dan plural.', 'number', 1, 4, '2022-09-04 00:31:17', '2022-09-04 00:31:17'),
(83, 1, 2, 14, 'Pendidik bersikap jujur, satunya antara kata dengan perbuatan (konsisten) dengan mengedepankan keteladanan.', 'number', 1, 4, '2022-09-04 00:31:18', '2022-09-04 00:31:18'),
(84, 1, 2, 14, 'Pendidik menunjukkan pandangan yang positif tentang dirinya dan orang lain.', 'number', 1, 4, '2022-09-04 00:31:18', '2022-09-04 00:31:18'),
(85, 1, 2, 14, 'Pendidik bertindak sesuai dengan nilai, keyakinan, dan prinsip yang dipegangnya.', 'number', 1, 4, '2022-09-04 00:31:18', '2022-09-04 00:31:18'),
(86, 1, 2, 14, 'Pendidik selalu konsisten untuk bertindak adil, bersikap tegas, dan berjiwa besar serta bijak dalam mengambil keputusan.', 'number', 1, 4, '2022-09-04 00:31:18', '2022-09-04 00:31:18'),
(87, 1, 2, 14, 'Pendidik bertindak berdasarkan data dengan menjunjung tinggi akuntabilitas dan kredibilitas.', 'number', 1, 4, '2022-09-04 00:31:18', '2022-09-04 00:31:18'),
(88, 1, 2, 14, 'Pendidik secara objektif menilai kinerja sendiri dan penuh syukur.', 'number', 1, 4, '2022-09-04 00:31:18', '2022-09-04 00:31:18'),
(89, 1, 2, 14, 'Pendidik mengembangkan diri secara mandiri dan berkelanjutan serta melaksanakan tugas sebagai panggilan hidup.', 'number', 1, 4, '2022-09-04 00:31:18', '2022-09-04 00:31:18'),
(90, 1, 2, 15, 'Pendidik bertingkah laku sopan dalam berbicara, berpenampilan, dan berbuat arif terhadap semua peserta didik, orang tua, dan teman sejawat.', 'number', 1, 4, '2022-09-04 00:31:18', '2022-09-04 00:31:18'),
(91, 1, 2, 15, 'Pendidik mau membagi pengalamannya dengan teman sejawat, termasuk mengundang mereka untuk mengobservasi cara mengajarnya dan memberikan masukan.', 'number', 1, 4, '2022-09-04 00:31:18', '2022-09-04 00:31:18'),
(92, 1, 2, 15, 'Pendidik mampu mengelola pembelajaran yang membuktikan bahwa Pendidik dihormati oleh peserta didik, sehingga semua peserta didik selalu memperhatikan Pendidik dan berpartisipasi aktif dalam proses pembelajaran.', 'number', 1, 4, '2022-09-04 00:31:18', '2022-09-04 00:31:18'),
(93, 1, 2, 15, 'Pendidik bersikap dewasa dalam menerima masukan dari peserta didik dan memberikan kesempatan kepada peserta didik untuk berpartisipasi dalam proses pembelajaran.', 'number', 1, 4, '2022-09-04 00:31:18', '2022-09-04 00:31:18'),
(94, 1, 2, 15, 'Pendidik memahami, menerima apa adanya dan memperlakukan siswa dan kolega dengan hormat tanpa membedakan latar belakang berbeda.', 'number', 1, 4, '2022-09-04 00:31:18', '2022-09-04 00:31:18'),
(95, 1, 2, 16, 'Pendidik mengawali dan mengakhiri pembelajaran dengan tepat waktu.', 'number', 1, 4, '2022-09-04 00:31:18', '2022-09-04 00:31:18'),
(96, 1, 2, 16, 'Pendidik menunjukkan sikap bertanggung-jawab dalam melaksanakan pekerjaan.', 'number', 1, 4, '2022-09-04 00:31:18', '2022-09-04 00:31:18'),
(97, 1, 2, 16, 'Pendidik bersedia menjalankan tugas yang ditugaskan pimpinan.', 'number', 1, 4, '2022-09-04 00:31:18', '2022-09-04 00:31:18'),
(98, 1, 2, 16, 'Pendidik proaktif terlibat/peduli dalam kegiatan sekolah.', 'number', 1, 4, '2022-09-04 00:31:19', '2022-09-04 00:31:19'),
(99, 1, 2, 16, 'Pendidik menyelesaikan semua tugas administratif dan non‐pembelajaran dengan tepat waktu sesuai standar yang ditetapkan.', 'number', 1, 4, '2022-09-04 00:31:19', '2022-09-04 00:31:19'),
(100, 1, 2, 16, 'Pendidik memanfaatkan waktu luang selain mengajar untuk kegiatan yang produktif terkait dengan tugasnya.', 'number', 1, 4, '2022-09-04 00:31:19', '2022-09-04 00:31:19'),
(101, 1, 2, 16, 'Pendidik memberikan kontribusi terhadap pengembangan sekolah dan mempunyai prestasi yang berdampak positif terhadap nama baik sekolah.', 'number', 1, 4, '2022-09-04 00:31:19', '2022-09-04 00:31:19'),
(102, 1, 2, 16, 'Pendidik merasa bangga dengan profesinya sebagai Pendidik.', 'number', 1, 4, '2022-09-04 00:31:19', '2022-09-04 00:31:19'),
(103, 1, 2, 17, 'Pendidik  membimbing peserta didik dengan penuh kasih.', 'number', 1, 4, '2022-09-04 00:31:19', '2022-09-04 00:31:19'),
(104, 1, 2, 17, 'Pendidik memiliki kejujuran profesi.', 'number', 1, 4, '2022-09-04 00:31:19', '2022-09-04 00:31:19'),
(105, 1, 2, 17, 'Pendidik berkomunikasi untuk memperoleh informasi.', 'number', 1, 4, '2022-09-04 00:31:19', '2022-09-04 00:31:19'),
(106, 1, 2, 17, 'Pendidik menciptakan suasana yang baik dan hubungan yang sinergis.', 'number', 1, 4, '2022-09-04 00:31:19', '2022-09-04 00:31:19'),
(107, 1, 2, 17, 'Pendidik mengembangkan mutu profesi', 'number', 1, 4, '2022-09-04 00:31:19', '2022-09-04 00:31:19'),
(108, 1, 2, 17, 'Pendidik menciptakan hubungan yang harmonis dengan Kepala Sekolah, sesama Pendidik, dan Tenaga Kependidikan.', 'number', 1, 4, '2022-09-04 00:31:19', '2022-09-04 00:31:19'),
(109, 1, 2, 17, 'Pendidik mendukung kebijakan Sekolah dan yayasan.', 'number', 1, 4, '2022-09-04 00:31:19', '2022-09-04 00:31:19'),
(110, 1, 2, 17, 'Pendidik memahami dan mematuhi kode etik pendidik dan PUK Yayasan.', 'number', 1, 4, '2022-09-04 00:31:19', '2022-09-04 00:31:19'),
(111, 1, 2, 18, 'Pendidik memperlakukan semua peserta didik secara adil, memberikan perhatian dan bantuan sesuai kebutuhan masing‐masing.', 'number', 1, 4, '2022-09-04 00:31:19', '2022-09-04 00:31:19'),
(112, 1, 2, 18, 'Pendidik menjaga hubungan baik dan peduli dengan teman sejawat (bersifat inklusif), serta berkontribusi positif terhadap semua diskusi formal dan informal terkait dengan pekerjaannya.', 'number', 1, 4, '2022-09-04 00:31:20', '2022-09-04 00:31:20'),
(113, 1, 2, 18, 'Pendidik sering berinteraksi dengan peserta didik dan tidak membatasi perhatiannya hanya pada kelompok tertentu (misalnya: peserta didik yang pandai, kaya, berasal dari daerah yang sama dengan Pendidik).', 'number', 1, 4, '2022-09-04 00:31:20', '2022-09-04 00:31:20'),
(114, 1, 2, 18, 'Pendidik respek terhadap Kepala Sekolah, sesama Pendidik,Tenaga Kependidikan, dan peserta didik.', 'number', 1, 4, '2022-09-04 00:31:20', '2022-09-04 00:31:20'),
(115, 1, 2, 19, 'Pendidik menyampaikan informasi tentang kemajuan, kesulitan, dan potensi peserta didik kepada orang tua / wali murid secara periodik.', 'number', 1, 4, '2022-09-04 00:31:20', '2022-09-04 00:31:20'),
(116, 1, 2, 19, 'Pendidik ikut berperan aktif dalam kegiatan di luar pembelajaran yang diselenggarakan oleh sekolah dan masyarakat dan dapat memberikan bukti keikutsertaannya.', 'number', 1, 4, '2022-09-04 00:31:20', '2022-09-04 00:31:20'),
(117, 1, 2, 19, 'Pendidik memperhatikan sekolah sebagai bagian dari masyarakat, berkomunikasi dengan masyarakat sekitar, serta berperan dalam kegiatan sosial di masyarakat.', 'number', 1, 4, '2022-09-04 00:31:20', '2022-09-04 00:31:20'),
(118, 1, 2, 19, 'Pendidik dalam berkomunikasi dengan mempertimbangkan situasi orang lain.', 'number', 1, 4, '2022-09-04 00:31:20', '2022-09-04 00:31:20'),
(119, 1, 2, 19, 'Pendidik mendengarkan pandangan/ pendapat orang lain secara serius dan antusias.', 'number', 1, 4, '2022-09-04 00:31:20', '2022-09-04 00:31:20'),
(120, 1, 2, 19, 'Pendidik memberikan tanggapan secara proporsional atas pendapat/ pandangan prang lain.', 'number', 1, 4, '2022-09-04 00:31:20', '2022-09-04 00:31:20'),
(121, 1, 2, 19, 'Pendidik menunjukkan sikap menghargai melalui pilihan kata yang digunakan dalam berkomunikasi.', 'number', 1, 4, '2022-09-04 00:31:20', '2022-09-04 00:31:20'),
(122, 1, 2, 20, 'Pendidik menghargai budaya masyarakat di lingkungan kerjanya.', 'number', 1, 4, '2022-09-04 00:31:20', '2022-09-04 00:31:20'),
(123, 1, 2, 20, 'Menghargai perbedaan pendapat/ pandangan kolega dan siswa.', 'number', 1, 4, '2022-09-04 00:31:20', '2022-09-04 00:31:20'),
(124, 1, 2, 20, 'Pendidik mampu beradaptasi dan menyesuaikan diri dengan nilai- nilai yang dijunjung tinggi oleh komunitas sekolah.', 'number', 1, 4, '2022-09-04 00:31:20', '2022-09-04 00:31:20'),
(125, 1, 2, 20, 'Pendidik menerapkan prinsip-prinsip persaudaraan dan semangat kebersamaan.', 'number', 1, 4, '2022-09-04 00:31:21', '2022-09-04 00:31:21'),
(126, 1, 2, 21, 'Pendidik mampu memberikan prioritas pada pencapaian tujuan bersama daripada tujuan pribadi/ kelompok.', 'number', 1, 4, '2022-09-04 00:31:21', '2022-09-04 00:31:21'),
(127, 1, 2, 21, 'Pendidik mampu membangun jejaring dengan sesama Pendidik baik melalui media tulis maupun media elektronik.', 'number', 1, 4, '2022-09-04 00:31:21', '2022-09-04 00:31:21'),
(128, 1, 2, 21, 'Pendidik bersedia menjalankan keputusan yang telah disepakati bersama.', 'number', 1, 4, '2022-09-04 00:31:21', '2022-09-04 00:31:21'),
(129, 1, 2, 21, 'Pendidik bersedia berbagi pengetahuan/ informasi dengan kolega.', 'number', 1, 4, '2022-09-04 00:31:21', '2022-09-04 00:31:21'),
(130, 1, 3, 22, 'Pendidik memandang secara positif dinamika yang terjadi di dalam dirinya dan komunitas sekolah.', 'number', 1, 4, '2022-09-04 00:31:21', '2022-09-04 00:31:21'),
(131, 1, 3, 22, 'Pendidik menunjukkan sikap kritis terhadap dinamika yang terjadi di dalam dirinya dan komunitas sekolah.', 'number', 1, 4, '2022-09-04 00:31:21', '2022-09-04 00:31:21'),
(132, 1, 3, 23, 'Pendidik menerima dan memanfaatkan kritik/ masukan dari kolega.', 'number', 1, 4, '2022-09-04 00:31:21', '2022-09-04 00:31:21'),
(133, 1, 3, 23, 'Pendidik menunjukkan kerelaan untuk mengakui kesalahan/ kekurangan dengan rendah hati.', 'number', 1, 4, '2022-09-04 00:31:22', '2022-09-04 00:31:22'),
(134, 1, 3, 23, 'Pendidik menunjukkan sikap terbuka terhadap perubahan dalam komunitas sekolah.', 'number', 1, 4, '2022-09-04 00:31:22', '2022-09-04 00:31:22'),
(135, 1, 3, 23, 'Pendidik aktif mendukung terciptanya komunitas yang mampu mengembangkan anggotanya.', 'number', 1, 4, '2022-09-04 00:31:22', '2022-09-04 00:31:22'),
(136, 1, 3, 24, 'Pendidik berusaha memahami situasi dan kebutuhan siswa dan kolega.', 'number', 1, 4, '2022-09-04 00:31:22', '2022-09-04 00:31:22'),
(137, 1, 3, 24, 'Pendidik bersedia memberi perhatian kepada siswa dan kolega yang sedang menghadapi kesulitan.', 'number', 1, 4, '2022-09-04 00:31:22', '2022-09-04 00:31:22'),
(138, 1, 3, 24, 'Pendidik bersedia memberi bantuan kepada siswa dan kolega yang membutuhkan.', 'number', 1, 4, '2022-09-04 00:31:22', '2022-09-04 00:31:22'),
(139, 1, 3, 25, 'Berusaha membina hubungan positif dengan siswa dan kolega.', 'number', 1, 4, '2022-09-04 00:31:22', '2022-09-04 00:31:22'),
(140, 1, 3, 25, 'Bersedia memaafkan dan meminta maaf kepada siswa dan kolega.', 'number', 1, 4, '2022-09-04 00:31:22', '2022-09-04 00:31:22'),
(141, 1, 3, 26, 'Menunjukkan sikap adil ketika menghadapi persoalan dengan siswa dan kolega.', 'number', 1, 4, '2022-09-04 00:31:22', '2022-09-04 00:31:22'),
(142, 1, 3, 26, 'Bersedia menjelaskan harapan dan berbesar hati apabila orang lain belum bisa memenuhi.', 'number', 1, 4, '2022-09-04 00:31:22', '2022-09-04 00:31:22');

-- --------------------------------------------------------

--
-- Table structure for table `question_groups`
--

CREATE TABLE `question_groups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `question_groups`
--

INSERT INTO `question_groups` (`id`, `title`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Evaluasi Diri Pendidik', 'Tolong isi 1 sampai 4 <br> 1. Buruk <br> 2. Cukup <br> 3. Baik <br> 4. Sangat Baik', 1, '2022-09-04 00:31:11', '2022-09-04 00:31:11'),
(2, 'Program Pengembangan Keprofesian Berkelanjutan', 'PKB', 1, '2022-09-04 00:31:11', '2022-09-04 00:31:11');

-- --------------------------------------------------------

--
-- Table structure for table `question_sections`
--

CREATE TABLE `question_sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `groupQuestionID` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `question_sections`
--

INSERT INTO `question_sections` (`id`, `groupQuestionID`, `name`) VALUES
(1, 1, 'KOMPETENSI  AKADEMIK (Pedagogi dan profesional)'),
(2, 1, 'KOMPETENSI KEPRIBADIAN DAN SOSIAL'),
(3, 1, 'KOMPETENSI  MORAL DAN SPIRITUAL');

-- --------------------------------------------------------

--
-- Table structure for table `question_sub_sections`
--

CREATE TABLE `question_sub_sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sectionQuestionID` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `question_sub_sections`
--

INSERT INTO `question_sub_sections` (`id`, `sectionQuestionID`, `name`) VALUES
(1, 1, 'Penguasaan dan Penerapan Paradigma Pedagogi Ignatian dalam mendidik siswa'),
(2, 1, 'Mampu mengembangkan materi pembelajaran secara kreatif'),
(3, 1, 'Mampu mengembangkan kurikulum yang terkait dengan bidang pengembangan yang diampu'),
(4, 1, 'Mampu menyelenggarakan kegiatan pengembangan yang mendidik'),
(5, 1, 'Memfasilitasi pengembangan potensi peserta didik untuk mengaktualisasikan berbagai potensi yang dimiliki.'),
(6, 1, 'Berkomunikasi secara efektif, empatik, dan santun dengan peserta didik.'),
(7, 1, 'Memanfaatkan TIK (Teknologi Informasi dan Komunikasi) untuk kepentingan penyelenggaraan kegiatan pengembangan yang mendidik.'),
(8, 1, 'Melakukan penilaian dan evaluasi proses dan hasil belajar, memanfaatkan hasil penilaian dan evaluasi untuk kepentingan pembelajaran.'),
(9, 1, 'Melakukan tindakan reflektif untuk peningkatan kualitas pembelajaran melalui PKB(Peningkatan Kompetensi Berkelanjutan)'),
(10, 1, 'Membuat Perencanaan Pembelajaran'),
(11, 1, 'Pelaksanaan Kegiatan Pembelajaran yang Aktif, Efektif, dan Menyenangkan dengan dinamika PPI'),
(12, 1, 'Penilaian Pembelajaran'),
(13, 2, 'Bertindak sesuai dengan norma agama, hukum, sosial, dan kebudayaan Nasional Indonesia.'),
(14, 2, 'Menampilkan diri sebagai pribadi yang matang ( jujur, berkarakter baik, menjadi teladan bagi peserta didik dan masyarakat)'),
(15, 2, 'Menampilkan diri sebagai pribadi yang mantap, stabil, dewasa, arif, dan berwibawa.'),
(16, 2, 'Menunjukkan etos kerja, tanggung jawab yang tinggi, rasa bangga menjadi Pendidik, dan rasa percaya diri (Etos kerja tinggi)'),
(17, 2, 'Menjunjung tinggi kode etik profesi Pendidik dan PUK yayasan '),
(18, 2, 'Bertindak objektif serta tidak diskriminatif karena pertimbangan jenis kelamin, agama, ras, kondisi fisik, latar belakang keluarga, dan status sosial ekonomi (memartabatkan).'),
(19, 2, 'Berkomunikasi secara efektif, empatik, dan santun dengan sesama pendidik, tenaga kependidikan, orang tua, dan masyarakat.'),
(20, 2, 'Mampu beradaptasi dengan lingkungan kerja'),
(21, 2, 'Menunjukkan sikap bersedia bekerjasama dengan kolega'),
(22, 3, 'Berusaha memperjuangkan kebenaran'),
(23, 3, 'Berusaha terus menerus mengejar keunggulan'),
(24, 3, 'Bersedia untuk melayani sesama'),
(25, 3, 'Berusaha mewujudkan kasih kepada sesama'),
(26, 3, 'Berkomitmen terhadap keadilan');

-- --------------------------------------------------------

--
-- Table structure for table `rekapan_e_d_p_s`
--

CREATE TABLE `rekapan_e_d_p_s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `userID` bigint(20) UNSIGNED NOT NULL,
  `questionSectionID` bigint(20) UNSIGNED NOT NULL,
  `questionSubSectionID` bigint(20) UNSIGNED NOT NULL,
  `average` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `unit_lists`
--

CREATE TABLE `unit_lists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `unit_lists`
--

INSERT INTO `unit_lists` (`id`, `name`) VALUES
(1, 'SMP'),
(2, 'SMA');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Leonardo Wijaya', 'admin1@admin.com', '$2y$10$IGpwQ2h1XCHrCWSzOp1JNuQAI3nVgryxkbWW1E.Q63VdsPZ9d46km', NULL, '2022-09-04 00:31:24', '2022-09-04 00:31:24', NULL),
(2, 'Silvia Pasifica', 'guru1@guru.com', '$2y$10$vUJTQ7.APTp1wwubyHWqDuqPNGjcO7r6X2CFAhDQiwUouDW9FWfba', NULL, '2022-09-04 00:31:24', '2022-09-04 00:31:24', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `userID` bigint(20) UNSIGNED NOT NULL,
  `NIY` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `posisiID` bigint(20) UNSIGNED DEFAULT NULL,
  `golonganID` bigint(20) UNSIGNED DEFAULT NULL,
  `unitID` bigint(20) UNSIGNED DEFAULT NULL,
  `kelasID` bigint(20) UNSIGNED DEFAULT NULL,
  `mataPelajaranID` bigint(20) UNSIGNED DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`id`, `userID`, `NIY`, `posisiID`, `golonganID`, `unitID`, `kelasID`, `mataPelajaranID`, `avatar`) VALUES
(1, 1, '12345678', 1, 1, 1, 7, 1, NULL),
(2, 2, '12345678', 3, 1, 1, 2, 1, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `answers_answerpackageid_foreign` (`answerPackageID`),
  ADD KEY `answers_questionsectionid_foreign` (`questionSectionID`),
  ADD KEY `answers_questionsubsectionid_foreign` (`questionSubSectionID`);

--
-- Indexes for table `answer_packages`
--
ALTER TABLE `answer_packages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `answer_packages_dinilaiid_foreign` (`dinilaiID`),
  ADD KEY `answer_packages_penilaiid_foreign` (`penilaiID`),
  ADD KEY `answer_packages_questiongroupid_foreign` (`questionGroupID`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `golongan_lists`
--
ALTER TABLE `golongan_lists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kelas_lists`
--
ALTER TABLE `kelas_lists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mata_pelajaran_lists`
--
ALTER TABLE `mata_pelajaran_lists`
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
-- Indexes for table `penilaian_g_p_a_s`
--
ALTER TABLE `penilaian_g_p_a_s`
  ADD PRIMARY KEY (`id`),
  ADD KEY `penilaian_g_p_a_s_userid_foreign` (`userID`);

--
-- Indexes for table `penilaian_g_p_s`
--
ALTER TABLE `penilaian_g_p_s`
  ADD PRIMARY KEY (`id`),
  ADD KEY `penilaian_g_p_s_penilaiangpaid_foreign` (`penilaianGPAID`),
  ADD KEY `penilaian_g_p_s_periodeid_foreign` (`periodeID`);

--
-- Indexes for table `periodes`
--
ALTER TABLE `periodes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `posisi_lists`
--
ALTER TABLE `posisi_lists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `questions_groupid_foreign` (`groupID`),
  ADD KEY `questions_sectionid_foreign` (`sectionID`),
  ADD KEY `questions_subsectionid_foreign` (`subsectionID`);

--
-- Indexes for table `question_groups`
--
ALTER TABLE `question_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `question_sections`
--
ALTER TABLE `question_sections`
  ADD PRIMARY KEY (`id`),
  ADD KEY `question_sections_groupquestionid_foreign` (`groupQuestionID`);

--
-- Indexes for table `question_sub_sections`
--
ALTER TABLE `question_sub_sections`
  ADD PRIMARY KEY (`id`),
  ADD KEY `question_sub_sections_sectionquestionid_foreign` (`sectionQuestionID`);

--
-- Indexes for table `rekapan_e_d_p_s`
--
ALTER TABLE `rekapan_e_d_p_s`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rekapan_e_d_p_s_userid_foreign` (`userID`),
  ADD KEY `rekapan_e_d_p_s_questionsectionid_foreign` (`questionSectionID`),
  ADD KEY `rekapan_e_d_p_s_questionsubsectionid_foreign` (`questionSubSectionID`);

--
-- Indexes for table `unit_lists`
--
ALTER TABLE `unit_lists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_details_userid_foreign` (`userID`),
  ADD KEY `user_details_posisiid_foreign` (`posisiID`),
  ADD KEY `user_details_golonganid_foreign` (`golonganID`),
  ADD KEY `user_details_unitid_foreign` (`unitID`),
  ADD KEY `user_details_kelasid_foreign` (`kelasID`),
  ADD KEY `user_details_matapelajaranid_foreign` (`mataPelajaranID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `answer_packages`
--
ALTER TABLE `answer_packages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `golongan_lists`
--
ALTER TABLE `golongan_lists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kelas_lists`
--
ALTER TABLE `kelas_lists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `mata_pelajaran_lists`
--
ALTER TABLE `mata_pelajaran_lists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `penilaian_g_p_a_s`
--
ALTER TABLE `penilaian_g_p_a_s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `penilaian_g_p_s`
--
ALTER TABLE `penilaian_g_p_s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `periodes`
--
ALTER TABLE `periodes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posisi_lists`
--
ALTER TABLE `posisi_lists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=143;

--
-- AUTO_INCREMENT for table `question_groups`
--
ALTER TABLE `question_groups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `question_sections`
--
ALTER TABLE `question_sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `question_sub_sections`
--
ALTER TABLE `question_sub_sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `rekapan_e_d_p_s`
--
ALTER TABLE `rekapan_e_d_p_s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `unit_lists`
--
ALTER TABLE `unit_lists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `answers`
--
ALTER TABLE `answers`
  ADD CONSTRAINT `answers_answerpackageid_foreign` FOREIGN KEY (`answerPackageID`) REFERENCES `answer_packages` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `answers_questionsectionid_foreign` FOREIGN KEY (`questionSectionID`) REFERENCES `question_sections` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `answers_questionsubsectionid_foreign` FOREIGN KEY (`questionSubSectionID`) REFERENCES `question_sub_sections` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `answer_packages`
--
ALTER TABLE `answer_packages`
  ADD CONSTRAINT `answer_packages_dinilaiid_foreign` FOREIGN KEY (`dinilaiID`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `answer_packages_penilaiid_foreign` FOREIGN KEY (`penilaiID`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `answer_packages_questiongroupid_foreign` FOREIGN KEY (`questionGroupID`) REFERENCES `question_groups` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `penilaian_g_p_a_s`
--
ALTER TABLE `penilaian_g_p_a_s`
  ADD CONSTRAINT `penilaian_g_p_a_s_userid_foreign` FOREIGN KEY (`userID`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `penilaian_g_p_s`
--
ALTER TABLE `penilaian_g_p_s`
  ADD CONSTRAINT `penilaian_g_p_s_penilaiangpaid_foreign` FOREIGN KEY (`penilaianGPAID`) REFERENCES `penilaian_g_p_a_s` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `penilaian_g_p_s_periodeid_foreign` FOREIGN KEY (`periodeID`) REFERENCES `periodes` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `questions_groupid_foreign` FOREIGN KEY (`groupID`) REFERENCES `question_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `questions_sectionid_foreign` FOREIGN KEY (`sectionID`) REFERENCES `question_sections` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `questions_subsectionid_foreign` FOREIGN KEY (`subsectionID`) REFERENCES `question_sub_sections` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `question_sections`
--
ALTER TABLE `question_sections`
  ADD CONSTRAINT `question_sections_groupquestionid_foreign` FOREIGN KEY (`groupQuestionID`) REFERENCES `question_groups` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `question_sub_sections`
--
ALTER TABLE `question_sub_sections`
  ADD CONSTRAINT `question_sub_sections_sectionquestionid_foreign` FOREIGN KEY (`sectionQuestionID`) REFERENCES `question_sections` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `rekapan_e_d_p_s`
--
ALTER TABLE `rekapan_e_d_p_s`
  ADD CONSTRAINT `rekapan_e_d_p_s_questionsectionid_foreign` FOREIGN KEY (`questionSectionID`) REFERENCES `question_sections` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `rekapan_e_d_p_s_questionsubsectionid_foreign` FOREIGN KEY (`questionSubSectionID`) REFERENCES `question_sub_sections` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `rekapan_e_d_p_s_userid_foreign` FOREIGN KEY (`userID`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_details`
--
ALTER TABLE `user_details`
  ADD CONSTRAINT `user_details_golonganid_foreign` FOREIGN KEY (`golonganID`) REFERENCES `golongan_lists` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_details_kelasid_foreign` FOREIGN KEY (`kelasID`) REFERENCES `kelas_lists` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_details_matapelajaranid_foreign` FOREIGN KEY (`mataPelajaranID`) REFERENCES `mata_pelajaran_lists` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_details_posisiid_foreign` FOREIGN KEY (`posisiID`) REFERENCES `posisi_lists` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_details_unitid_foreign` FOREIGN KEY (`unitID`) REFERENCES `unit_lists` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_details_userid_foreign` FOREIGN KEY (`userID`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
