-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 01, 2022 at 10:30 AM
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
  `questionID` bigint(20) UNSIGNED NOT NULL,
  `answer` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `answer_packages`
--

CREATE TABLE `answer_packages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `userID` bigint(20) UNSIGNED NOT NULL,
  `questionGroupID` bigint(20) UNSIGNED NOT NULL,
  `questionSectionID` bigint(20) UNSIGNED NOT NULL,
  `questionSubSectionID` bigint(20) UNSIGNED NOT NULL,
  `isDone` tinyint(1) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `periodeID` bigint(20) UNSIGNED NOT NULL
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
-- Table structure for table `jabatans`
--

CREATE TABLE `jabatans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `userID` bigint(20) UNSIGNED NOT NULL,
  `jabatanListID` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jabatan_lists`
--

CREATE TABLE `jabatan_lists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jabatanName` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mengajars`
--

CREATE TABLE `mengajars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `userID` bigint(20) UNSIGNED NOT NULL,
  `mengajarListID` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mengajar_lists`
--

CREATE TABLE `mengajar_lists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mengajarName` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
(5, '2022_08_15_135721_create_roles_table', 1),
(6, '2022_08_15_135901_add_relations_to_users_table', 1),
(7, '2022_08_15_140618_create_question_groups_table', 1),
(8, '2022_08_15_141300_create_question_sections_table', 1),
(9, '2022_08_15_141332_create_question_sub_sections_table', 1),
(10, '2022_08_15_141356_create_questions_table', 1),
(11, '2022_08_15_145755_create_answer_packages_table', 1),
(12, '2022_08_15_150234_create_answers_table', 1),
(13, '2022_08_15_152123_add_relations_to_questions_table', 1),
(14, '2022_08_15_152246_add_relations_to_answer_packages_table', 1),
(15, '2022_08_15_152425_add_relations_to_answers_table', 1),
(16, '2022_08_19_064134_create_pangkats_table', 1),
(17, '2022_08_19_064259_create_jabatans_table', 1),
(18, '2022_08_19_064428_create_jabatan_lists_table', 1),
(19, '2022_08_19_064716_add_relations_to_jabatans_table', 1),
(20, '2022_08_19_065106_create_mengajars_table', 1),
(21, '2022_08_19_065220_create_mengajar_lists_table', 1),
(22, '2022_08_19_065304_add_relations_to_mengajars_table', 1),
(23, '2022_08_19_065610_create_penilaian_g_p_a_s_table', 1),
(24, '2022_08_19_065832_create_penilaian_g_p_s_table', 1),
(25, '2022_08_19_080234_add_relations_to_users_table', 1),
(26, '2022_08_31_150203_create_periodes_table', 1),
(27, '2022_08_31_150322_add_periode_column_on_answer_packages_table', 1),
(28, '2022_08_31_150541_add_relations_to_penilaian_g_p_s_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pangkats`
--

CREATE TABLE `pangkats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pangkatName` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
  `GPA` double NOT NULL DEFAULT 0,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Sangat Buruk',
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
  `GPS` double NOT NULL DEFAULT 0,
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
  `periode` varchar(255) COLLATE utf8_unicode_ci NOT NULL
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
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `groupID` bigint(20) UNSIGNED NOT NULL,
  `sectionID` bigint(20) UNSIGNED NOT NULL,
  `subsectionID` bigint(20) UNSIGNED NOT NULL,
  `question` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `questionType` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `minimumScore` int(10) UNSIGNED DEFAULT 0,
  `maximumScore` int(10) UNSIGNED DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `groupID`, `sectionID`, `subsectionID`, `question`, `questionType`, `minimumScore`, `maximumScore`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 'Nama', 'text', 0, 0, '2022-09-01 01:29:28', '2022-09-01 01:29:28'),
(2, 1, 2, 2, 'Pendidik dapat mengidentifikasi karakteristik belajar setiap peserta didik di kelasnya.', 'number', 1, 100, '2022-09-01 01:29:28', '2022-09-01 01:29:28'),
(3, 1, 2, 2, 'Pendidik  memastikan  bahwa  semua  peserta  didik  mendapatkan  kesempatan  yang  sama  untuk  berpartisipasi aktif dalam kegiatan pembelajaran.', 'number', 1, 100, '2022-09-01 01:29:28', '2022-09-01 01:29:28'),
(4, 1, 2, 2, 'Pendidik dapat mengatur  kelas untuk  memberikan  kesempatan  belajar  yang sama pada semua  peserta  didik dengan kelainan fisik dan kemampuan belajar yang berbeda.', 'number', 1, 100, '2022-09-01 01:29:28', '2022-09-01 01:29:28'),
(5, 1, 2, 2, 'Pendidik mencoba mengetahui  penyebab  penyimpangan  perilaku peserta didik untuk mencegah  agar perilaku tersebut tidak merugikan peserta didik lainnya.', 'number', 1, 100, '2022-09-01 01:29:29', '2022-09-01 01:29:29'),
(6, 1, 2, 2, 'Pendidik membantu mengembangkan  potensi dan mengatasi kekurangan/kelemahan peserta didik.', 'number', 1, 100, '2022-09-01 01:29:29', '2022-09-01 01:29:29'),
(7, 1, 2, 2, 'Pendidik memperhatikan peserta didik dengan kelemahan fisik tertentu agar dapat mengikuti aktivitas pembelajaran.', 'number', 1, 100, '2022-09-01 01:29:29', '2022-09-01 01:29:29'),
(8, 1, 2, 2, 'Memberikan motivasi/ dorongan/ tantangan kepada siswa sehingga menjadi bersemangat belajar', 'number', 1, 100, '2022-09-01 01:29:29', '2022-09-01 01:29:29'),
(9, 1, 2, 2, 'Memberi kesempatan kepada siswa untuk bereksplorasi, berefleksi, dan bernegosiasi', 'number', 1, 100, '2022-09-01 01:29:29', '2022-09-01 01:29:29'),
(10, 1, 2, 2, 'Membimbing siswa secara perorangan berdasarkan pemahaman atas situasi atau pribadi khas siswa tersebut', 'number', 1, 100, '2022-09-01 01:29:29', '2022-09-01 01:29:29'),
(11, 1, 2, 2, 'Guru melibatkan aktivitas mental, emosional, sosial, dan kultur siswa dalam mengajar.', 'number', 1, 100, '2022-09-01 01:29:29', '2022-09-01 01:29:29'),
(12, 1, 2, 3, 'Pendidik menguasai teori belajar dan prinsip-prinsip pembelajaran yang mendidik.', 'number', 1, 100, '2022-09-01 01:29:29', '2022-09-01 01:29:29'),
(13, 1, 2, 3, 'Pendidik menguasai materi, struktur, konsep, dan pola pikir keilmuan yang mendukung mata pelajaran yang diampu', 'number', 1, 100, '2022-09-01 01:29:29', '2022-09-01 01:29:29'),
(14, 1, 2, 3, 'Pendidik memahami capaian pembelajaran dan menurunkannya dalam Tujuan pembelajaran dan alur tujuan pembelajaran pada mata pelajaran yang diampu', 'number', 1, 100, '2022-09-01 01:29:29', '2022-09-01 01:29:29'),
(15, 1, 2, 3, 'Pendidik mampu memperkaya mata pelajaran yang diampu dengan permasalahan kontekstual dan perkembangan mutakhir.', 'number', 1, 100, '2022-09-01 01:29:29', '2022-09-01 01:29:29'),
(16, 1, 2, 3, 'Pendidik menggunakan berbagai teknik untuk memotiviasi kemauan belajar peserta didik.', 'number', 1, 100, '2022-09-01 01:29:29', '2022-09-01 01:29:29'),
(17, 1, 2, 3, 'Pendidik merencanakan kegiatan pembelajaran yang saling terkait satu sama lain, dengan memperhatikan tujuan pembelajaran maupun proses belajar peserta didik.', 'number', 1, 100, '2022-09-01 01:29:29', '2022-09-01 01:29:29'),
(18, 1, 2, 3, 'Pendidik memperhatikan respon peserta didik yang belum/kurang memahami materi pembelajaran yang diajarkan dan menggunakannya untuk memperbaiki rancangan pembelajaran berikutnya.', 'number', 1, 100, '2022-09-01 01:29:29', '2022-09-01 01:29:29'),
(19, 1, 2, 4, 'Pendidik dapat menyusun silabus/Alur Tujuan Pembelajaran yang sesuai dengan kurikulum (pengalaman belajar siswa dan pencapaian tujuan pembelajaran tergambar dengan jelas)', 'number', 1, 100, '2022-09-01 01:29:29', '2022-09-01 01:29:29'),
(20, 1, 2, 4, 'Pendidik merancang rencana pembelajaran/ modul ajar yang sesuai dengan silabus/ATP dengan pemilihan dan pengorganisasian  materi yang sesuai dengan dengan kontek siswa.', 'number', 1, 100, '2022-09-01 01:29:30', '2022-09-01 01:29:30'),
(21, 1, 2, 4, 'Pendidik dapat merancang RPP/Modul ajar dengan instrumen penilaian secara kreatif dan variatif(tidak monoton)  yang sesuai dengan tujuan pembelajaran dan capaian pembelajaran.', 'number', 1, 100, '2022-09-01 01:29:30', '2022-09-01 01:29:30'),
(22, 1, 2, 4, 'Pendidik memilih materi pembelajaran yang: sesuai dengan tujuan pembelajaran, tepat, dan mutakhir, sesuai dengan usia dan tingkat kemampuan belajar peserta didik, dapat dilaksanakan di kelas, sesuai dengan konteks kehidupan sehari-hari peserta didik.', 'number', 1, 100, '2022-09-01 01:29:30', '2022-09-01 01:29:30'),
(23, 1, 2, 5, 'Pedidik mengembangkan kompetensi siswa (sebagai perpaduan pengetahuan, kecakapan, sikap, dan values)', 'number', 1, 100, '2022-09-01 01:29:30', '2022-09-01 01:29:30'),
(24, 1, 2, 5, 'Pendidik melaksanakan aktivitas pembelajaran yang menyenangkan dengan menggunakan berbagai media   untuk membantu siswa belajar mengakses informasi dan mendukung interaksi siswa dengan sumber belajar.', 'number', 1, 100, '2022-09-01 01:29:30', '2022-09-01 01:29:30'),
(25, 1, 2, 5, 'Pendidik menyampaikan informasi baru (misalnya materi tambahan) sesuai dengan usia dan tingkat kemampuan belajar peserta didik.', 'number', 1, 100, '2022-09-01 01:29:30', '2022-09-01 01:29:30'),
(26, 1, 2, 5, 'Pendidik menyikapi kesalahan yang dilakukan peserta didik dengan ucapan, mimik muka, dan gerakan tubuh mencerminkan sikap menghormati pribadi siswa dan memandang kesalahan sebagai tahapan proses pembelajaran.', 'number', 1, 100, '2022-09-01 01:29:31', '2022-09-01 01:29:31'),
(27, 1, 2, 5, 'Pendidik melaksanakan kegiatan pembelajaran sesuai isi kurikulum dan mengkaitkannya dengan konteks kehidupan sehari‐hari.', 'number', 1, 100, '2022-09-01 01:29:31', '2022-09-01 01:29:31'),
(28, 1, 2, 5, 'Pendidik melakukan aktivitas pembelajaran secara bervariasi/berbagai metode yang mendorong keterlibatan siswa secara aktif.', 'number', 1, 100, '2022-09-01 01:29:31', '2022-09-01 01:29:31'),
(29, 1, 2, 5, 'Pendidik mengelola kelas dengan efektif tanpa mendominasi atau sibuk dengan kegiatannya sendiri agar semua waktu peserta dapat termanfaatkan secara produktif.', 'number', 1, 100, '2022-09-01 01:29:31', '2022-09-01 01:29:31'),
(30, 1, 2, 5, 'Pendidik mampu mendengarkan dan memahami harapan/gagasaan siswa, kemudian merespon dengan terbuka.', 'number', 1, 100, '2022-09-01 01:29:31', '2022-09-01 01:29:31'),
(31, 1, 2, 5, 'Pendidik memberikan banyak kesempatan kepada peserta didik untuk bertanya, mempraktikkan, dan berinteraksi dengan peserta didik lain.', 'number', 1, 100, '2022-09-01 01:29:31', '2022-09-01 01:29:31'),
(32, 1, 2, 5, 'Pendidik mengatur pelaksanaan aktivitas pembelajaran secara sistematis untuk membantu proses belajar peserta didik.', 'number', 1, 100, '2022-09-01 01:29:31', '2022-09-01 01:29:31'),
(33, 1, 2, 5, 'Pendidik menggunakan alat bantu mengajar, dan/atau audio‐visual (termasuk TIK) untuk meningkatkan motivasi belajar peserta didik dalam mencapai tujuan pembelajaran.', 'number', 1, 100, '2022-09-01 01:29:31', '2022-09-01 01:29:31'),
(34, 1, 2, 6, 'Pendidik menganalisis hasil belajar berdasarkan segala bentuk penilaian terhadap setiap peserta didik untuk mengetahui tingkat kemajuan masing‐masing.', 'number', 1, 100, '2022-09-01 01:29:31', '2022-09-01 01:29:31'),
(35, 1, 2, 6, 'Pendidik merancang dan melaksanakan aktivitas pembelajaran yang mendorong peserta didik untuk belajar sesuai dengan kecakapan dan pola belajar masing‐masing.', 'number', 1, 100, '2022-09-01 01:29:31', '2022-09-01 01:29:31'),
(36, 1, 2, 6, 'Pendidik merancang dan melaksanakan aktivitas pembelajaran untuk memunculkan daya kreativitas dan kemampuan berpikir kritis peserta didik.', 'number', 1, 100, '2022-09-01 01:29:31', '2022-09-01 01:29:31'),
(37, 1, 2, 6, 'Pendidik secara aktif membantu peserta didik dalam proses pembelajaran dengan memberikan perhatian kepada setiap individu.', 'number', 1, 100, '2022-09-01 01:29:31', '2022-09-01 01:29:31'),
(38, 1, 2, 6, 'Pendidik dapat mengidentifikasi dengan benar tentang bakat, minat, potensi, dan kesulitan belajar masing‐masing peserta didik.', 'number', 1, 100, '2022-09-01 01:29:31', '2022-09-01 01:29:31'),
(39, 1, 2, 6, 'Pendidik memberikan kesempatan belajar kepada peserta didik sesuai dengan cara belajarnya masing‐masing.', 'number', 1, 100, '2022-09-01 01:29:31', '2022-09-01 01:29:31'),
(40, 1, 2, 6, 'Pendidik memusatkan perhatian pada interaksi dengan peserta didik dan mendorongnya untuk memahami dan menggunakan informasi yang disampaikan.', 'number', 1, 100, '2022-09-01 01:29:31', '2022-09-01 01:29:31'),
(41, 1, 2, 7, 'Pendidik menggunakan pertanyaan untuk mengetahui pemahaman dan mendorong partisipasi peserta didik, termasuk memberikan pertanyaan terbuka yang menuntut peserta didik untuk menjawab dengan ide dan pengetahuan mereka.', 'number', 1, 100, '2022-09-01 01:29:31', '2022-09-01 01:29:31'),
(42, 1, 2, 7, 'Pendidik memberikan perhatian dan mendengarkan semua pertanyaan dan tanggapan peserta didik, tanpa menginterupsi, kecuali jika diperlukan untuk membantu atau mengklarifikasi pertanyaan/tanggapan tersebut.', 'number', 1, 100, '2022-09-01 01:29:31', '2022-09-01 01:29:31'),
(43, 1, 2, 7, 'Pendidik menanggapi pertanyaan peserta didik secara tepat, benar, dan mutakhir, sesuai tujuan pembelajaran dan isi kurikulum, tanpa mempermalukannya.', 'number', 1, 100, '2022-09-01 01:29:31', '2022-09-01 01:29:31'),
(44, 1, 2, 7, 'Pendidik menyajikan kegiatan pembelajaran yang dapat menumbuhkan kerja sama yang baik antar peserta didik.', 'number', 1, 100, '2022-09-01 01:29:31', '2022-09-01 01:29:31'),
(45, 1, 2, 7, 'Pendidik mendengarkan dan memberikan perhatian terhadap semua jawaban peserta didik baik yang benar maupun yang dianggap salah untuk mengukur tingkat pemahaman peserta didik.', 'number', 1, 100, '2022-09-01 01:29:31', '2022-09-01 01:29:31'),
(46, 1, 2, 7, 'Pendidik memberikan perhatian terhadap pertanyaan peserta didik dan meresponnya secara lengkap dan relevan untuk menghilangkan kebingungan pada peserta didik.', 'number', 1, 100, '2022-09-01 01:29:31', '2022-09-01 01:29:31'),
(47, 1, 2, 8, 'Pendidik memanfaatkan TIK untuk memperdalam penguasaan materi.', 'number', 1, 100, '2022-09-01 01:29:31', '2022-09-01 01:29:31'),
(48, 1, 2, 8, 'Pendidik memanfaatkan TIK untuk memperoleh informasi dari berbagai sumber.', 'number', 1, 100, '2022-09-01 01:29:31', '2022-09-01 01:29:31'),
(49, 1, 2, 8, 'Pendidik memanfaatkan TIK untuk mempercepat penyampaian pesan: informasi, tugas, materi pembelajaran sehingga pembelajaran aktual dan efektif.', 'number', 1, 100, '2022-09-01 01:29:32', '2022-09-01 01:29:32'),
(50, 1, 2, 8, 'Pendidik memanfaatkan TIK sebagai media belajar yang efektif dan menarik.', 'number', 1, 100, '2022-09-01 01:29:32', '2022-09-01 01:29:32'),
(51, 1, 2, 9, 'Pendidik menyusun alat penilaian yang sesuai dengan tujuan pembelajaran untuk mencapai kompetensi tertentu seperti yang tertulis dalam RPP/Modul ajar.', 'number', 1, 100, '2022-09-01 01:29:32', '2022-09-01 01:29:32'),
(52, 1, 2, 9, 'Pendidik melaksanakan asesmen diagnostif, formatif dan sumatif  dengan berbagai teknik (penilaian otentik)', 'number', 1, 100, '2022-09-01 01:29:32', '2022-09-01 01:29:32'),
(53, 1, 2, 9, 'Pendidik membantu siswa yang belum mencapai tujuan pembelajaran dan memberikan tantangan bagi siswa yang sudah mencapai tujuan pembelajaran melalui pembelajaran berdeferensiasi atau program remedial dan pengayaan.', 'number', 1, 100, '2022-09-01 01:29:32', '2022-09-01 01:29:32'),
(54, 1, 2, 9, 'Pendidik memanfaatkan masukan dari peserta didik dan merefleksikannya untuk meningkatkan pembelajaran selanjutnya, dan dapat membuktikannya melalui catatan, jurnal pembelajaran, rancangan pembelajaran, materi tambahan, dan sebagainya.', 'number', 1, 100, '2022-09-01 01:29:32', '2022-09-01 01:29:32'),
(55, 1, 2, 9, 'Pendidik memanfatkan hasil penilaian sebagai bahan penyusunan rancangan pembelajaran yang akan dilakukan selanjutnya.', 'number', 1, 100, '2022-09-01 01:29:32', '2022-09-01 01:29:32'),
(56, 1, 2, 10, 'Pendidik melakukan tindakan reflektif setiap selesai mengajar.', 'number', 1, 100, '2022-09-01 01:29:32', '2022-09-01 01:29:32'),
(57, 1, 2, 10, 'Pendidik membuat jurnal reflektif pembelajaran.', 'number', 1, 100, '2022-09-01 01:29:32', '2022-09-01 01:29:32'),
(58, 1, 2, 10, 'Pendidik menganalisis isi jurnal reflektif  untuk memperbaiki dan/atau meningkatkan kualitas pembelajaran.', 'number', 1, 100, '2022-09-01 01:29:32', '2022-09-01 01:29:32'),
(59, 1, 2, 10, 'Pendidik berpartisipasi aktif dalam kegiatan lesson study.', 'number', 1, 100, '2022-09-01 01:29:32', '2022-09-01 01:29:32'),
(60, 1, 2, 10, 'Pendidik berpartisipasi aktif dalam kegiatan PTK .', 'number', 1, 100, '2022-09-01 01:29:32', '2022-09-01 01:29:32'),
(61, 1, 2, 11, 'Pendidik memformulasikan tujuan  pembelajaran dalam RPP/ Modul Ajar sesuai dengan kurikulum/silabus dan memperhatikan karakteristik peserta didik.', 'number', 1, 100, '2022-09-01 01:29:32', '2022-09-01 01:29:32'),
(62, 1, 2, 11, 'Pendidik menyusun  bahan ajar secara runut, logis, kontekstual dan mutakhir.', 'number', 1, 100, '2022-09-01 01:29:32', '2022-09-01 01:29:32'),
(63, 1, 2, 11, 'Pendidik merencanakan kegiatan pembelajaran yang efektif dan menarik.', 'number', 1, 100, '2022-09-01 01:29:32', '2022-09-01 01:29:32'),
(64, 1, 2, 11, 'Pendidik memilih sumber belajar/ media pembelajaran sesuai dengan materi dan strategi pembelajaran.', 'number', 1, 100, '2022-09-01 01:29:32', '2022-09-01 01:29:32'),
(65, 1, 2, 12, 'Pendidik memulai pembelajaran dengan efektif dan menarik.', 'number', 1, 100, '2022-09-01 01:29:32', '2022-09-01 01:29:32'),
(66, 1, 2, 12, 'Pendidik menguasai materi pelajaran.', 'number', 1, 100, '2022-09-01 01:29:32', '2022-09-01 01:29:32'),
(67, 1, 2, 12, 'Pendidik menerapkan pendekatan/strategi pembelajaran yang efektif.', 'number', 1, 100, '2022-09-01 01:29:32', '2022-09-01 01:29:32'),
(68, 1, 2, 12, 'Pendidik memanfaatan sumber belajar/ media dalam pembelajaran.', 'number', 1, 100, '2022-09-01 01:29:32', '2022-09-01 01:29:32'),
(69, 1, 2, 12, 'Pendidik mendorong  keterlibatan siswa dalam pembelajaran.', 'number', 1, 100, '2022-09-01 01:29:32', '2022-09-01 01:29:32'),
(70, 1, 2, 12, 'Pendidik memfasilitasi siswa untuk berprestasi tinggi dan memahami masalah yang lebih kompleks.', 'number', 1, 100, '2022-09-01 01:29:32', '2022-09-01 01:29:32'),
(71, 1, 2, 12, 'Pendidik mampu mengenali dan memecahkan masalah pembelajaran.', 'number', 1, 100, '2022-09-01 01:29:33', '2022-09-01 01:29:33'),
(72, 1, 2, 12, 'Pendidik menggunakan bahasa yang benar dan tepat dalam pembelajaran.', 'number', 1, 100, '2022-09-01 01:29:33', '2022-09-01 01:29:33'),
(73, 1, 2, 12, 'Pendidik mampu melakukan improvisasi.', 'number', 1, 100, '2022-09-01 01:29:33', '2022-09-01 01:29:33'),
(74, 1, 2, 12, 'Pendidik memonitor pembelajaran.', 'number', 1, 100, '2022-09-01 01:29:33', '2022-09-01 01:29:33'),
(75, 1, 2, 12, 'Pendidik mengakhiri pembelajaran dengan efektif, indikatornya: siswa sungguh menguasai materi pelajaran, ada simpulan/rangkuman, refleksi, rencana yang akan datang.', 'number', 1, 100, '2022-09-01 01:29:33', '2022-09-01 01:29:33'),
(76, 1, 2, 13, 'Pendidik merancang alat penilaian  untuk mengukur kemajuan dan keberhasilan belajar peserta didik.', 'number', 1, 100, '2022-09-01 01:29:33', '2022-09-01 01:29:33'),
(77, 1, 2, 13, 'Pendidik menggunakan berbagai strategi dan metode penilaian  untuk memantau kemajuan dan hasil belajar peserta didik dalam mencapai tujuan pembelajaran  sebagaimana yang tertulis dalam RPP/modul ajar.', 'number', 1, 100, '2022-09-01 01:29:33', '2022-09-01 01:29:33'),
(78, 1, 2, 13, 'Pendidik memanfatkan berbagai  hasil penilaian dan analisanya untuk memberikan umpan balik bagi peserta didik tentang kemajuan belajarnya dan  bahan penyusunan rancangan pembelajaran selanjutnya.', 'number', 1, 100, '2022-09-01 01:29:33', '2022-09-01 01:29:33'),
(79, 1, 3, 14, 'Pendidik menghargai dan mempromosikan prinsip‐prinsip pendidikan Jesuit dan Pancasila.', 'number', 1, 100, '2022-09-01 01:29:33', '2022-09-01 01:29:33'),
(80, 1, 3, 14, 'Pendidik mampumengambil keputusan secara bijak dengan mempertimbangkan norma yang berlaku.', 'number', 1, 100, '2022-09-01 01:29:33', '2022-09-01 01:29:33'),
(81, 1, 3, 14, 'Pendidik bersikap  saling menghormati dan menghargai orang lain dengan bertingkah laku dan bertutur kata sesuai norma.', 'number', 1, 100, '2022-09-01 01:29:33', '2022-09-01 01:29:33'),
(82, 1, 3, 14, 'Pendidik memiliki rasa persatuan dan kesatuan sebagai bangsa Indonesia dengan memberi tekanan pada nilai adil.', 'number', 1, 100, '2022-09-01 01:29:33', '2022-09-01 01:29:33'),
(83, 1, 3, 14, 'Pendidik mempunyai pandangan yang luas tentang keberagaman bangsa Indonesia dengan memberi tekanan pada nilai inklusif dan plural.', 'number', 1, 100, '2022-09-01 01:29:33', '2022-09-01 01:29:33'),
(84, 1, 3, 15, 'Pendidik bersikap jujur, satunya antara kata dengan perbuatan (konsisten) dengan mengedepankan keteladanan.', 'number', 1, 100, '2022-09-01 01:29:33', '2022-09-01 01:29:33'),
(85, 1, 3, 15, 'Pendidik menunjukkan pandangan yang positif tentang dirinya dan orang lain.', 'number', 1, 100, '2022-09-01 01:29:33', '2022-09-01 01:29:33'),
(86, 1, 3, 15, 'Pendidik bertindak sesuai dengan nilai, keyakinan, dan prinsip yang dipegangnya.', 'number', 1, 100, '2022-09-01 01:29:33', '2022-09-01 01:29:33'),
(87, 1, 3, 15, 'Pendidik selalu konsisten untuk bertindak adil, bersikap tegas, dan berjiwa besar serta bijak dalam mengambil keputusan.', 'number', 1, 100, '2022-09-01 01:29:33', '2022-09-01 01:29:33'),
(88, 1, 3, 15, 'Pendidik bertindak berdasarkan data dengan menjunjung tinggi akuntabilitas dan kredibilitas.', 'number', 1, 100, '2022-09-01 01:29:33', '2022-09-01 01:29:33'),
(89, 1, 3, 15, 'Pendidik secara objektif menilai kinerja sendiri dan penuh syukur.', 'number', 1, 100, '2022-09-01 01:29:33', '2022-09-01 01:29:33'),
(90, 1, 3, 15, 'Pendidik mengembangkan diri secara mandiri dan berkelanjutan serta melaksanakan tugas sebagai panggilan hidup.', 'number', 1, 100, '2022-09-01 01:29:33', '2022-09-01 01:29:33'),
(91, 1, 3, 16, 'Pendidik bertingkah laku sopan dalam berbicara, berpenampilan, dan berbuat arif terhadap semua peserta didik, orang tua, dan teman sejawat.', 'number', 1, 100, '2022-09-01 01:29:34', '2022-09-01 01:29:34'),
(92, 1, 3, 16, 'Pendidik mau membagi pengalamannya dengan teman sejawat, termasuk mengundang mereka untuk mengobservasi cara mengajarnya dan memberikan masukan.', 'number', 1, 100, '2022-09-01 01:29:34', '2022-09-01 01:29:34'),
(93, 1, 3, 16, 'Pendidik mampu mengelola pembelajaran yang membuktikan bahwa Pendidik dihormati oleh peserta didik, sehingga semua peserta didik selalu memperhatikan Pendidik dan berpartisipasi aktif dalam proses pembelajaran.', 'number', 1, 100, '2022-09-01 01:29:34', '2022-09-01 01:29:34'),
(94, 1, 3, 16, 'Pendidik bersikap dewasa dalam menerima masukan dari peserta didik dan memberikan kesempatan kepada peserta didik untuk berpartisipasi dalam proses pembelajaran.', 'number', 1, 100, '2022-09-01 01:29:34', '2022-09-01 01:29:34'),
(95, 1, 3, 16, 'Pendidik memahami, menerima apa adanya dan memperlakukan siswa dan kolega dengan hormat tanpa membedakan latar belakang berbeda.', 'number', 1, 100, '2022-09-01 01:29:34', '2022-09-01 01:29:34'),
(96, 1, 3, 17, 'Pendidik mengawali dan mengakhiri pembelajaran dengan tepat waktu.', 'number', 1, 100, '2022-09-01 01:29:34', '2022-09-01 01:29:34'),
(97, 1, 3, 17, 'Pendidik menunjukkan sikap bertanggung-jawab dalam melaksanakan pekerjaan.', 'number', 1, 100, '2022-09-01 01:29:34', '2022-09-01 01:29:34'),
(98, 1, 3, 17, 'Pendidik bersedia menjalankan tugas yang ditugaskan pimpinan.', 'number', 1, 100, '2022-09-01 01:29:34', '2022-09-01 01:29:34'),
(99, 1, 3, 17, 'Pendidik proaktif terlibat/peduli dalam kegiatan sekolah.', 'number', 1, 100, '2022-09-01 01:29:34', '2022-09-01 01:29:34'),
(100, 1, 3, 17, 'Pendidik menyelesaikan semua tugas administratif dan non‐pembelajaran dengan tepat waktu sesuai standar yang ditetapkan.', 'number', 1, 100, '2022-09-01 01:29:34', '2022-09-01 01:29:34'),
(101, 1, 3, 17, 'Pendidik memanfaatkan waktu luang selain mengajar untuk kegiatan yang produktif terkait dengan tugasnya.', 'number', 1, 100, '2022-09-01 01:29:35', '2022-09-01 01:29:35'),
(102, 1, 3, 17, 'Pendidik memberikan kontribusi terhadap pengembangan sekolah dan mempunyai prestasi yang berdampak positif terhadap nama baik sekolah.', 'number', 1, 100, '2022-09-01 01:29:35', '2022-09-01 01:29:35'),
(103, 1, 3, 17, 'Pendidik merasa bangga dengan profesinya sebagai Pendidik.', 'number', 1, 100, '2022-09-01 01:29:35', '2022-09-01 01:29:35'),
(104, 1, 3, 18, 'Pendidik  membimbing peserta didik dengan penuh kasih.', 'number', 1, 100, '2022-09-01 01:29:35', '2022-09-01 01:29:35'),
(105, 1, 3, 18, 'Pendidik memiliki kejujuran profesi.', 'number', 1, 100, '2022-09-01 01:29:35', '2022-09-01 01:29:35'),
(106, 1, 3, 18, 'Pendidik berkomunikasi untuk memperoleh informasi.', 'number', 1, 100, '2022-09-01 01:29:35', '2022-09-01 01:29:35'),
(107, 1, 3, 18, 'Pendidik menciptakan suasana yang baik dan hubungan yang sinergis.', 'number', 1, 100, '2022-09-01 01:29:35', '2022-09-01 01:29:35'),
(108, 1, 3, 18, 'Pendidik mengembangkan mutu profesi', 'number', 1, 100, '2022-09-01 01:29:35', '2022-09-01 01:29:35'),
(109, 1, 3, 18, 'Pendidik menciptakan hubungan yang harmonis dengan Kepala Sekolah, sesama Pendidik, dan Tenaga Kependidikan.', 'number', 1, 100, '2022-09-01 01:29:35', '2022-09-01 01:29:35'),
(110, 1, 3, 18, 'Pendidik mendukung kebijakan Sekolah dan yayasan.', 'number', 1, 100, '2022-09-01 01:29:35', '2022-09-01 01:29:35'),
(111, 1, 3, 18, 'Pendidik memahami dan mematuhi kode etik pendidik dan PUK Yayasan.', 'number', 1, 100, '2022-09-01 01:29:35', '2022-09-01 01:29:35'),
(112, 1, 3, 19, 'Pendidik memperlakukan semua peserta didik secara adil, memberikan perhatian dan bantuan sesuai kebutuhan masing‐masing.', 'number', 1, 100, '2022-09-01 01:29:35', '2022-09-01 01:29:35'),
(113, 1, 3, 19, 'Pendidik menjaga hubungan baik dan peduli dengan teman sejawat (bersifat inklusif), serta berkontribusi positif terhadap semua diskusi formal dan informal terkait dengan pekerjaannya.', 'number', 1, 100, '2022-09-01 01:29:35', '2022-09-01 01:29:35'),
(114, 1, 3, 19, 'Pendidik sering berinteraksi dengan peserta didik dan tidak membatasi perhatiannya hanya pada kelompok tertentu (misalnya: peserta didik yang pandai, kaya, berasal dari daerah yang sama dengan Pendidik).', 'number', 1, 100, '2022-09-01 01:29:35', '2022-09-01 01:29:35'),
(115, 1, 3, 19, 'Pendidik respek terhadap Kepala Sekolah, sesama Pendidik,Tenaga Kependidikan, dan peserta didik.', 'number', 1, 100, '2022-09-01 01:29:35', '2022-09-01 01:29:35'),
(116, 1, 3, 20, 'Pendidik menyampaikan informasi tentang kemajuan, kesulitan, dan potensi peserta didik kepada orang tua / wali murid secara periodik.', 'number', 1, 100, '2022-09-01 01:29:35', '2022-09-01 01:29:35'),
(117, 1, 3, 20, 'Pendidik ikut berperan aktif dalam kegiatan di luar pembelajaran yang diselenggarakan oleh sekolah dan masyarakat dan dapat memberikan bukti keikutsertaannya.', 'number', 1, 100, '2022-09-01 01:29:35', '2022-09-01 01:29:35'),
(118, 1, 3, 20, 'Pendidik memperhatikan sekolah sebagai bagian dari masyarakat, berkomunikasi dengan masyarakat sekitar, serta berperan dalam kegiatan sosial di masyarakat.', 'number', 1, 100, '2022-09-01 01:29:35', '2022-09-01 01:29:35'),
(119, 1, 3, 20, 'Pendidik dalam berkomunikasi dengan mempertimbangkan situasi orang lain.', 'number', 1, 100, '2022-09-01 01:29:35', '2022-09-01 01:29:35'),
(120, 1, 3, 20, 'Pendidik mendengarkan pandangan/ pendapat orang lain secara serius dan antusias.', 'number', 1, 100, '2022-09-01 01:29:35', '2022-09-01 01:29:35'),
(121, 1, 3, 20, 'Pendidik memberikan tanggapan secara proporsional atas pendapat/ pandangan prang lain.', 'number', 1, 100, '2022-09-01 01:29:35', '2022-09-01 01:29:35'),
(122, 1, 3, 20, 'Pendidik menunjukkan sikap menghargai melalui pilihan kata yang digunakan dalam berkomunikasi.', 'number', 1, 100, '2022-09-01 01:29:35', '2022-09-01 01:29:35'),
(123, 1, 3, 21, 'Pendidik menghargai budaya masyarakat di lingkungan kerjanya.', 'number', 1, 100, '2022-09-01 01:29:36', '2022-09-01 01:29:36'),
(124, 1, 3, 21, 'Menghargai perbedaan pendapat/ pandangan kolega dan siswa.', 'number', 1, 100, '2022-09-01 01:29:36', '2022-09-01 01:29:36'),
(125, 1, 3, 21, 'Pendidik mampu beradaptasi dan menyesuaikan diri dengan nilai- nilai yang dijunjung tinggi oleh komunitas sekolah.', 'number', 1, 100, '2022-09-01 01:29:36', '2022-09-01 01:29:36'),
(126, 1, 3, 21, 'Pendidik menerapkan prinsip-prinsip persaudaraan dan semangat kebersamaan.', 'number', 1, 100, '2022-09-01 01:29:36', '2022-09-01 01:29:36'),
(127, 1, 3, 22, 'Pendidik mampu memberikan prioritas pada pencapaian tujuan bersama daripada tujuan pribadi/ kelompok.', 'number', 1, 100, '2022-09-01 01:29:36', '2022-09-01 01:29:36'),
(128, 1, 3, 22, 'Pendidik mampu membangun jejaring dengan sesama Pendidik baik melalui media tulis maupun media elektronik.', 'number', 1, 100, '2022-09-01 01:29:36', '2022-09-01 01:29:36'),
(129, 1, 3, 22, 'Pendidik bersedia menjalankan keputusan yang telah disepakati bersama.', 'number', 1, 100, '2022-09-01 01:29:36', '2022-09-01 01:29:36'),
(130, 1, 3, 22, 'Pendidik bersedia berbagi pengetahuan/ informasi dengan kolega.', 'number', 1, 100, '2022-09-01 01:29:36', '2022-09-01 01:29:36'),
(131, 1, 4, 23, 'Pendidik memandang secara positif dinamika yang terjadi di dalam dirinya dan komunitas sekolah.', 'number', 1, 100, '2022-09-01 01:29:36', '2022-09-01 01:29:36'),
(132, 1, 4, 23, 'Pendidik menunjukkan sikap kritis terhadap dinamika yang terjadi di dalam dirinya dan komunitas sekolah.', 'number', 1, 100, '2022-09-01 01:29:37', '2022-09-01 01:29:37'),
(133, 1, 4, 24, 'Pendidik menerima dan memanfaatkan kritik/ masukan dari kolega.', 'number', 1, 100, '2022-09-01 01:29:37', '2022-09-01 01:29:37'),
(134, 1, 4, 24, 'Pendidik menunjukkan kerelaan untuk mengakui kesalahan/ kekurangan dengan rendah hati.', 'number', 1, 100, '2022-09-01 01:29:37', '2022-09-01 01:29:37'),
(135, 1, 4, 24, 'Pendidik menunjukkan sikap terbuka terhadap perubahan dalam komunitas sekolah.', 'number', 1, 100, '2022-09-01 01:29:37', '2022-09-01 01:29:37'),
(136, 1, 4, 24, 'Pendidik aktif mendukung terciptanya komunitas yang mampu mengembangkan anggotanya.', 'number', 1, 100, '2022-09-01 01:29:37', '2022-09-01 01:29:37'),
(137, 1, 4, 25, 'Pendidik berusaha memahami situasi dan kebutuhan siswa dan kolega.', 'number', 1, 100, '2022-09-01 01:29:37', '2022-09-01 01:29:37'),
(138, 1, 4, 25, 'Pendidik bersedia memberi perhatian kepada siswa dan kolega yang sedang menghadapi kesulitan.', 'number', 1, 100, '2022-09-01 01:29:37', '2022-09-01 01:29:37'),
(139, 1, 4, 25, 'Pendidik bersedia memberi bantuan kepada siswa dan kolega yang membutuhkan.', 'number', 1, 100, '2022-09-01 01:29:37', '2022-09-01 01:29:37'),
(140, 1, 4, 26, 'Berusaha membina hubungan positif dengan siswa dan kolega.', 'number', 1, 100, '2022-09-01 01:29:37', '2022-09-01 01:29:37'),
(141, 1, 4, 26, 'Bersedia memaafkan dan meminta maaf kepada siswa dan kolega.', 'number', 1, 100, '2022-09-01 01:29:37', '2022-09-01 01:29:37'),
(142, 1, 4, 27, 'Menunjukkan sikap adil ketika menghadapi persoalan dengan siswa dan kolega.', 'number', 1, 100, '2022-09-01 01:29:37', '2022-09-01 01:29:37'),
(143, 1, 4, 27, 'Bersedia menjelaskan harapan dan berbesar hati apabila orang lain belum bisa memenuhi.', 'number', 1, 100, '2022-09-01 01:29:37', '2022-09-01 01:29:37'),
(144, 2, 5, 28, 'Nama', 'text', 0, 0, '2022-09-01 01:29:38', '2022-09-01 01:29:38'),
(145, 2, 6, 29, 'Penguasaan dan Penerapan Paradigma Pedagogi Ignatian dalam mendidik siswa.', 'text', 0, 0, '2022-09-01 01:29:38', '2022-09-01 01:29:38'),
(146, 2, 6, 29, 'Penguasaan dan Penerapan Paradigma Pedagogi Ignatian dalam mendidik siswa.', 'checkbox', 1, 6, '2022-09-01 01:29:38', '2022-09-01 01:29:38'),
(147, 2, 6, 29, 'Mampu mengembangkan materi pembelajaran secara kreatif.', 'text', 0, 0, '2022-09-01 01:29:38', '2022-09-01 01:29:38'),
(148, 2, 6, 29, 'Mampu mengembangkan materi pembelajaran secara kreatif.', 'checkbox', 1, 6, '2022-09-01 01:29:38', '2022-09-01 01:29:38'),
(149, 2, 6, 29, 'Mampu mengembangkan kurikulum yang terkait dengan bidang pengembangan yang diampu.', 'text', 0, 0, '2022-09-01 01:29:38', '2022-09-01 01:29:38'),
(150, 2, 6, 29, 'Mampu mengembangkan kurikulum yang terkait dengan bidang pengembangan yang diampu.', 'checkbox', 1, 6, '2022-09-01 01:29:38', '2022-09-01 01:29:38'),
(151, 2, 6, 29, 'Mampu menyelenggarakan kegiatan pengembangan yang mendidik.', 'text', 0, 0, '2022-09-01 01:29:38', '2022-09-01 01:29:38'),
(152, 2, 6, 29, 'Mampu menyelenggarakan kegiatan pengembangan yang mendidik.', 'checkbox', 1, 6, '2022-09-01 01:29:38', '2022-09-01 01:29:38'),
(153, 2, 6, 29, 'Memfasilitasi pengembangan potensi peserta didik untuk mengaktualisasikan berbagai potensi yang dimiliki.', 'text', 0, 0, '2022-09-01 01:29:38', '2022-09-01 01:29:38'),
(154, 2, 6, 29, 'Memfasilitasi pengembangan potensi peserta didik untuk mengaktualisasikan berbagai potensi yang dimiliki.', 'checkbox', 1, 6, '2022-09-01 01:29:38', '2022-09-01 01:29:38'),
(155, 2, 6, 29, 'Berkomunikasi secara efektif, empatik, dan santun dengan peserta didik.', 'text', 0, 0, '2022-09-01 01:29:38', '2022-09-01 01:29:38'),
(156, 2, 6, 29, 'Berkomunikasi secara efektif, empatik, dan santun dengan peserta didik.', 'checkbox', 1, 6, '2022-09-01 01:29:38', '2022-09-01 01:29:38'),
(157, 2, 6, 29, 'Memanfaatkan TIK (Teknologi Informasi dan Komunikasi) untuk kepentingan penyelenggaraan kegiatan pengembangan yang mendidik.', 'text', 0, 0, '2022-09-01 01:29:38', '2022-09-01 01:29:38'),
(158, 2, 6, 29, 'Memanfaatkan TIK (Teknologi Informasi dan Komunikasi) untuk kepentingan penyelenggaraan kegiatan pengembangan yang mendidik.', 'checkbox', 1, 6, '2022-09-01 01:29:38', '2022-09-01 01:29:38'),
(159, 2, 6, 29, 'Melakukan penilaian dan evaluasi proses dan hasil belajar, memanfaatkan hasil penilaian dan evaluasi untuk kepentingan pembelajaran.', 'text', 0, 0, '2022-09-01 01:29:38', '2022-09-01 01:29:38'),
(160, 2, 6, 29, 'Melakukan penilaian dan evaluasi proses dan hasil belajar, memanfaatkan hasil penilaian dan evaluasi untuk kepentingan pembelajaran.', 'checkbox', 1, 6, '2022-09-01 01:29:38', '2022-09-01 01:29:38'),
(161, 2, 6, 29, 'Melakukan tindakan reflektif untuk peningkatan kualitas pembelajaran melalui PKB(Peningkatan Kompetensi Berkelanjutan).', 'text', 0, 0, '2022-09-01 01:29:38', '2022-09-01 01:29:38'),
(162, 2, 6, 29, 'Melakukan tindakan reflektif untuk peningkatan kualitas pembelajaran melalui PKB(Peningkatan Kompetensi Berkelanjutan).', 'checkbox', 1, 6, '2022-09-01 01:29:39', '2022-09-01 01:29:39'),
(163, 2, 6, 29, 'Membuat Perencanaan Pembelajaran.', 'text', 0, 0, '2022-09-01 01:29:39', '2022-09-01 01:29:39'),
(164, 2, 6, 29, 'Membuat Perencanaan Pembelajaran.', 'checkbox', 1, 6, '2022-09-01 01:29:39', '2022-09-01 01:29:39'),
(165, 2, 6, 29, 'Pelaksanaan Kegiatan Pembelajaran yang Aktif, Efektif, dan Menyenangkan dengan dinamika PPI.', 'text', 0, 0, '2022-09-01 01:29:39', '2022-09-01 01:29:39'),
(166, 2, 6, 29, 'Pelaksanaan Kegiatan Pembelajaran yang Aktif, Efektif, dan Menyenangkan dengan dinamika PPI.', 'checkbox', 1, 6, '2022-09-01 01:29:39', '2022-09-01 01:29:39'),
(167, 2, 6, 29, 'Penilaian Pembelajaran.', 'text', 0, 0, '2022-09-01 01:29:39', '2022-09-01 01:29:39'),
(168, 2, 6, 29, 'Penilaian Pembelajaran.', 'checkbox', 1, 6, '2022-09-01 01:29:39', '2022-09-01 01:29:39'),
(169, 2, 7, 30, 'Bertindak sesuai dengan norma agama, hukum, sosial, dan kebudayaan Nasional Indonesia.', 'text', 0, 0, '2022-09-01 01:29:39', '2022-09-01 01:29:39'),
(170, 2, 7, 30, 'Bertindak sesuai dengan norma agama, hukum, sosial, dan kebudayaan Nasional Indonesia.', 'checkbox', 1, 6, '2022-09-01 01:29:39', '2022-09-01 01:29:39'),
(171, 2, 7, 30, 'Menampilkan diri sebagai pribadi yang matang ( jujur, berkarakter baik, menjadi teladan bagi peserta didik dan masyarakat).', 'text', 0, 0, '2022-09-01 01:29:39', '2022-09-01 01:29:39'),
(172, 2, 7, 30, 'Menampilkan diri sebagai pribadi yang matang ( jujur, berkarakter baik, menjadi teladan bagi peserta didik dan masyarakat).', 'checkbox', 1, 6, '2022-09-01 01:29:39', '2022-09-01 01:29:39'),
(173, 2, 7, 30, 'Menampilkan diri sebagai pribadi yang mantap, stabil, dewasa, arif, dan berwibawa.', 'text', 0, 0, '2022-09-01 01:29:39', '2022-09-01 01:29:39'),
(174, 2, 7, 30, 'Menampilkan diri sebagai pribadi yang mantap, stabil, dewasa, arif, dan berwibawa.', 'checkbox', 1, 6, '2022-09-01 01:29:39', '2022-09-01 01:29:39'),
(175, 2, 7, 30, 'Menunjukkan etos kerja, tanggung jawab yang tinggi, rasa bangga menjadi Pendidik, dan rasa percaya diri (Etos kerja tinggi).', 'text', 0, 0, '2022-09-01 01:29:39', '2022-09-01 01:29:39'),
(176, 2, 7, 30, 'Menunjukkan etos kerja, tanggung jawab yang tinggi, rasa bangga menjadi Pendidik, dan rasa percaya diri (Etos kerja tinggi).', 'checkbox', 1, 6, '2022-09-01 01:29:39', '2022-09-01 01:29:39'),
(177, 2, 7, 30, 'Menjunjung tinggi kode etik profesi Pendidik dan PUK yayasan.', 'text', 0, 0, '2022-09-01 01:29:39', '2022-09-01 01:29:39'),
(178, 2, 7, 30, 'Menjunjung tinggi kode etik profesi Pendidik dan PUK yayasan.', 'checkbox', 1, 6, '2022-09-01 01:29:39', '2022-09-01 01:29:39'),
(179, 2, 7, 30, 'Bertindak objektif serta tidak diskriminatif karena pertimbangan jenis kelamin, agama, ras, kondisi fisik, latar belakang keluarga, dan status sosial ekonomi (memartabatkan).', 'text', 0, 0, '2022-09-01 01:29:39', '2022-09-01 01:29:39'),
(180, 2, 7, 30, 'Bertindak objektif serta tidak diskriminatif karena pertimbangan jenis kelamin, agama, ras, kondisi fisik, latar belakang keluarga, dan status sosial ekonomi (memartabatkan).', 'checkbox', 1, 6, '2022-09-01 01:29:40', '2022-09-01 01:29:40'),
(181, 2, 7, 30, 'Berkomunikasi secara efektif, empatik, dan santun dengan sesama pendidik, tenaga kependidikan, orang tua, dan masyarakat.', 'text', 0, 0, '2022-09-01 01:29:40', '2022-09-01 01:29:40'),
(182, 2, 7, 30, 'Berkomunikasi secara efektif, empatik, dan santun dengan sesama pendidik, tenaga kependidikan, orang tua, dan masyarakat.', 'checkbox', 1, 6, '2022-09-01 01:29:40', '2022-09-01 01:29:40'),
(183, 2, 7, 30, 'Mampu beradaptasi dengan lingkungan kerja.', 'text', 0, 0, '2022-09-01 01:29:40', '2022-09-01 01:29:40'),
(184, 2, 7, 30, 'Mampu beradaptasi dengan lingkungan kerja.', 'checkbox', 1, 6, '2022-09-01 01:29:40', '2022-09-01 01:29:40'),
(185, 2, 7, 30, 'Menunjukkan sikap bersedia bekerjasama dengan kolega.', 'text', 0, 0, '2022-09-01 01:29:40', '2022-09-01 01:29:40'),
(186, 2, 7, 30, 'Menunjukkan sikap bersedia bekerjasama dengan kolega.', 'checkbox', 1, 6, '2022-09-01 01:29:40', '2022-09-01 01:29:40'),
(187, 2, 8, 31, 'Berusaha memperjuangkan kebenaran', 'text', 0, 0, '2022-09-01 01:29:40', '2022-09-01 01:29:40'),
(188, 2, 8, 31, 'Berusaha memperjuangkan kebenaran', 'checkbox', 1, 6, '2022-09-01 01:29:40', '2022-09-01 01:29:40'),
(189, 2, 8, 31, 'Berusaha terus menerus mengejar keunggulan.', 'text', 0, 0, '2022-09-01 01:29:40', '2022-09-01 01:29:40'),
(190, 2, 8, 31, 'Berusaha terus menerus mengejar keunggulan.', 'checkbox', 1, 6, '2022-09-01 01:29:40', '2022-09-01 01:29:40'),
(191, 2, 8, 31, 'Bersedia untuk melayani sesama.', 'text', 0, 0, '2022-09-01 01:29:40', '2022-09-01 01:29:40'),
(192, 2, 8, 31, 'Bersedia untuk melayani sesama.', 'checkbox', 1, 6, '2022-09-01 01:29:40', '2022-09-01 01:29:40'),
(193, 2, 8, 31, 'Berusaha mewujudkan kasih kepada sesama.', 'text', 0, 0, '2022-09-01 01:29:40', '2022-09-01 01:29:40'),
(194, 2, 8, 31, 'Berusaha mewujudkan kasih kepada sesama.', 'checkbox', 1, 6, '2022-09-01 01:29:40', '2022-09-01 01:29:40'),
(195, 2, 8, 31, 'Berkomitmen terhadap keadilan.', 'text', 0, 0, '2022-09-01 01:29:40', '2022-09-01 01:29:40'),
(196, 2, 8, 31, 'Berkomitmen terhadap keadilan.', 'checkbox', 1, 6, '2022-09-01 01:29:41', '2022-09-01 01:29:41');

-- --------------------------------------------------------

--
-- Table structure for table `question_groups`
--

CREATE TABLE `question_groups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `question_groups`
--

INSERT INTO `question_groups` (`id`, `type`, `status`, `created_at`, `updated_at`) VALUES
(1, 'EDP', 1, '2022-09-01 01:29:27', '2022-09-01 01:29:27'),
(2, 'PKB', 1, '2022-09-01 01:29:27', '2022-09-01 01:29:27'),
(3, 'SKP', 1, '2022-09-01 01:29:27', '2022-09-01 01:29:27');

-- --------------------------------------------------------

--
-- Table structure for table `question_sections`
--

CREATE TABLE `question_sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `groupQuestionID` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `question_sections`
--

INSERT INTO `question_sections` (`id`, `groupQuestionID`, `name`) VALUES
(1, 1, 'Data Diri'),
(2, 1, 'KOMPETENSI  AKADEMIK (Pedagogi dan profesional)'),
(3, 1, 'KOMPETENSI KEPRIBADIAN DAN SOSIAL'),
(4, 1, 'KOMPETENSI  MORAL DAN SPIRITUAL'),
(5, 2, 'Data Diri'),
(6, 2, 'KOMPETENSI AKADEMIK'),
(7, 2, 'KOMPETENSI KEPRIBADIAN DAN SOSIAL'),
(8, 2, 'KOMPETENSI MORAL DAN SPIRITUAL');

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
(1, 1, 'Data Diri'),
(2, 2, 'Penguasaan dan Penerapan Paradigma Pedagogi Ignatian dalam mendidik siswa'),
(3, 2, 'Mampu mengembangkan materi pembelajaran secara kreatif'),
(4, 2, 'Mampu mengembangkan kurikulum yang terkait dengan bidang pengembangan yang diampu'),
(5, 2, 'Mampu menyelenggarakan kegiatan pengembangan yang mendidik'),
(6, 2, 'Memfasilitasi pengembangan potensi peserta didik untuk mengaktualisasikan berbagai potensi yang dimiliki.'),
(7, 2, 'Berkomunikasi secara efektif, empatik, dan santun dengan peserta didik.'),
(8, 2, 'Memanfaatkan TIK (Teknologi Informasi dan Komunikasi) untuk kepentingan penyelenggaraan kegiatan pengembangan yang mendidik.'),
(9, 2, 'Melakukan penilaian dan evaluasi proses dan hasil belajar, memanfaatkan hasil penilaian dan evaluasi untuk kepentingan pembelajaran.'),
(10, 2, 'Melakukan tindakan reflektif untuk peningkatan kualitas pembelajaran melalui PKB(Peningkatan Kompetensi Berkelanjutan)'),
(11, 2, 'Membuat Perencanaan Pembelajaran'),
(12, 2, 'Pelaksanaan Kegiatan Pembelajaran yang Aktif, Efektif, dan Menyenangkan dengan dinamika PPI'),
(13, 2, 'Penilaian Pembelajaran'),
(14, 3, 'Bertindak sesuai dengan norma agama, hukum, sosial, dan kebudayaan Nasional Indonesia.'),
(15, 3, 'Menampilkan diri sebagai pribadi yang matang ( jujur, berkarakter baik, menjadi teladan bagi peserta didik dan masyarakat)'),
(16, 3, 'Menampilkan diri sebagai pribadi yang mantap, stabil, dewasa, arif, dan berwibawa.'),
(17, 3, 'Menunjukkan etos kerja, tanggung jawab yang tinggi, rasa bangga menjadi Pendidik, dan rasa percaya diri (Etos kerja tinggi)'),
(18, 3, 'Menjunjung tinggi kode etik profesi Pendidik dan PUK yayasan '),
(19, 3, 'Bertindak objektif serta tidak diskriminatif karena pertimbangan jenis kelamin, agama, ras, kondisi fisik, latar belakang keluarga, dan status sosial ekonomi (memartabatkan).'),
(20, 3, 'Berkomunikasi secara efektif, empatik, dan santun dengan sesama pendidik, tenaga kependidikan, orang tua, dan masyarakat.'),
(21, 3, 'Mampu beradaptasi dengan lingkungan kerja'),
(22, 3, 'Menunjukkan sikap bersedia bekerjasama dengan kolega'),
(23, 4, 'Berusaha memperjuangkan kebenaran'),
(24, 4, 'Berusaha terus menerus mengejar keunggulan'),
(25, 4, 'Bersedia untuk melayani sesama'),
(26, 4, 'Berusaha mewujudkan kasih kepada sesama'),
(27, 4, 'Berkomitmen terhadap keadilan'),
(28, 5, 'Data Diri'),
(29, 6, '1'),
(30, 7, '2'),
(31, 8, '3');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `NIY` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pangkatID` bigint(20) UNSIGNED DEFAULT NULL,
  `satuanPendidikan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `roleID` bigint(20) UNSIGNED DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `answers_answerpackageid_foreign` (`answerPackageID`),
  ADD KEY `answers_questionid_foreign` (`questionID`);

--
-- Indexes for table `answer_packages`
--
ALTER TABLE `answer_packages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `answer_packages_userid_foreign` (`userID`),
  ADD KEY `answer_packages_questiongroupid_foreign` (`questionGroupID`),
  ADD KEY `answer_packages_questionsectionid_foreign` (`questionSectionID`),
  ADD KEY `answer_packages_questionsubsectionid_foreign` (`questionSubSectionID`),
  ADD KEY `answer_packages_periodeid_foreign` (`periodeID`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jabatans`
--
ALTER TABLE `jabatans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jabatans_userid_foreign` (`userID`),
  ADD KEY `jabatans_jabatanlistid_foreign` (`jabatanListID`);

--
-- Indexes for table `jabatan_lists`
--
ALTER TABLE `jabatan_lists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mengajars`
--
ALTER TABLE `mengajars`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mengajars_userid_foreign` (`userID`),
  ADD KEY `mengajars_mengajarlistid_foreign` (`mengajarListID`);

--
-- Indexes for table `mengajar_lists`
--
ALTER TABLE `mengajar_lists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pangkats`
--
ALTER TABLE `pangkats`
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
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_roleid_foreign` (`roleID`),
  ADD KEY `users_pangkatid_foreign` (`pangkatID`);

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
-- AUTO_INCREMENT for table `jabatans`
--
ALTER TABLE `jabatans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jabatan_lists`
--
ALTER TABLE `jabatan_lists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mengajars`
--
ALTER TABLE `mengajars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mengajar_lists`
--
ALTER TABLE `mengajar_lists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `pangkats`
--
ALTER TABLE `pangkats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

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
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=197;

--
-- AUTO_INCREMENT for table `question_groups`
--
ALTER TABLE `question_groups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `question_sections`
--
ALTER TABLE `question_sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `question_sub_sections`
--
ALTER TABLE `question_sub_sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `answers`
--
ALTER TABLE `answers`
  ADD CONSTRAINT `answers_answerpackageid_foreign` FOREIGN KEY (`answerPackageID`) REFERENCES `answer_packages` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `answers_questionid_foreign` FOREIGN KEY (`questionID`) REFERENCES `questions` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `answer_packages`
--
ALTER TABLE `answer_packages`
  ADD CONSTRAINT `answer_packages_periodeid_foreign` FOREIGN KEY (`periodeID`) REFERENCES `periodes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `answer_packages_questiongroupid_foreign` FOREIGN KEY (`questionGroupID`) REFERENCES `question_groups` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `answer_packages_questionsectionid_foreign` FOREIGN KEY (`questionSectionID`) REFERENCES `question_sections` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `answer_packages_questionsubsectionid_foreign` FOREIGN KEY (`questionSubSectionID`) REFERENCES `question_sub_sections` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `answer_packages_userid_foreign` FOREIGN KEY (`userID`) REFERENCES `users` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `jabatans`
--
ALTER TABLE `jabatans`
  ADD CONSTRAINT `jabatans_jabatanlistid_foreign` FOREIGN KEY (`jabatanListID`) REFERENCES `jabatan_lists` (`id`),
  ADD CONSTRAINT `jabatans_userid_foreign` FOREIGN KEY (`userID`) REFERENCES `users` (`id`);

--
-- Constraints for table `mengajars`
--
ALTER TABLE `mengajars`
  ADD CONSTRAINT `mengajars_mengajarlistid_foreign` FOREIGN KEY (`mengajarListID`) REFERENCES `mengajar_lists` (`id`),
  ADD CONSTRAINT `mengajars_userid_foreign` FOREIGN KEY (`userID`) REFERENCES `users` (`id`);

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
  ADD CONSTRAINT `questions_groupid_foreign` FOREIGN KEY (`groupID`) REFERENCES `question_groups` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `questions_sectionid_foreign` FOREIGN KEY (`sectionID`) REFERENCES `question_sections` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `questions_subsectionid_foreign` FOREIGN KEY (`subsectionID`) REFERENCES `question_sub_sections` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `question_sections`
--
ALTER TABLE `question_sections`
  ADD CONSTRAINT `question_sections_groupquestionid_foreign` FOREIGN KEY (`groupQuestionID`) REFERENCES `question_groups` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `question_sub_sections`
--
ALTER TABLE `question_sub_sections`
  ADD CONSTRAINT `question_sub_sections_sectionquestionid_foreign` FOREIGN KEY (`sectionQuestionID`) REFERENCES `question_sections` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_pangkatid_foreign` FOREIGN KEY (`pangkatID`) REFERENCES `pangkats` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `users_roleid_foreign` FOREIGN KEY (`roleID`) REFERENCES `users` (`id`) ON DELETE SET NULL ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
