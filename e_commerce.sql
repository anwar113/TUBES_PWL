-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2020 at 02:02 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_commerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `barus`
--

CREATE TABLE `barus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` int(11) NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `barus`
--

INSERT INTO `barus` (`id`, `nama`, `harga`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'Kaos Navy Motif Need more space', 34000, 'images/EE7kHF58t5gZi7LhXDIJ7gcYHFHB3Yq3GtUFNNOa.jpg', NULL, '2020-12-28 13:24:40'),
(3, 'Sweater Rajut Zico', 160000, 'images/GF07flzdB7l0n99fCpxRe7qrscqipPviVCMuIA9I.jpg', '2020-12-21 02:43:20', '2020-12-28 08:59:03'),
(4, 'Jaket Uniqlo', 500000, 'images/BHLJX6HstfKkqL5x1rs3uq48Gn6TIglJsG0rOjid.jpg', '2020-12-21 02:44:46', '2020-12-28 08:59:24'),
(5, 'Kaos Herschel', 500000, 'images/pxI3uGvq1nVJzPL7s4ub43EiOHhaS7ETtAbSTZB4.jpg', '2020-12-21 04:57:24', '2020-12-28 09:00:54'),
(6, 'Gamis Elzatta', 329000, 'images/lbL6moivvUERWzxZFSID3cBfJSi9TwwLckoJOFkp.jpg', '2020-12-21 04:59:04', '2020-12-28 09:01:18'),
(7, 'Sweater Hush Puppies', 150000, 'images/ZWcxJoWsFCoJHFKv4XYB3xtv5FAbe3pZpinkqrJ8.png', '2020-12-21 04:59:45', '2020-12-28 09:01:38'),
(8, 'Kaos Oshkosh Bgosh', 133000, 'images/KAvSuzmrsUBbFXXZQ68ertY5gWYV64sEWmuELICl.jpg', '2020-12-21 05:00:43', '2020-12-28 09:02:13'),
(9, 'Jaket Sport Anak', 209000, 'images/cZIuvTAu05DF5TvJRlu7pifpqhpzcIEsCcQehN9x.jpg', '2020-12-21 05:01:31', '2020-12-28 09:02:36'),
(10, 'Sweater Anak', 179500, 'images/pY9SjkY2bGb2undfTb67am6EgmA1qLAzwWfK5Jb0.jpg', '2020-12-21 05:02:16', '2020-12-28 09:03:13');

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
-- Table structure for table `kids`
--

CREATE TABLE `kids` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_produk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` int(11) NOT NULL,
  `jenis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ukuran` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stok` int(11) NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kids`
--

INSERT INTO `kids` (`id`, `nama_produk`, `keterangan`, `harga`, `jenis`, `ukuran`, `stok`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'Kaos I Love Indonesia Special 2019 Limited Edition', 'Bahannya sangat berkualitas dan nyaman dipakai, stok untuk ukuran S = 15, M = 5, L = 25', 135000, 'Kaos lengan pendek', 'S,M', 40, 'images/sWscLAZMk7KEeJCxlUO0TxcxEdjM5zIJMvUXEyEk.webp', NULL, '2020-12-28 19:47:44'),
(3, 'Kaos INFI KIDS', 'Kain nyaman dipakai, dingin, kualitas sablon mumpuni, stok ukuran S = 35, M = 45', 98000, 'Kaos lengan pendek', 'S,M', 130, 'images/oO7aFLT8NOniLo24ZrGl5quu2gWrTQwA4Orlyiz1.jpg', '2020-12-28 19:13:18', '2020-12-28 19:48:07'),
(4, 'INDONESIA 1945', 'LIMITED EDITION, Kaos Indonesia 1945 dengan bahan dingin dan nyaman dipakai tersedia berbagai ukuran, stok ukuran S = 56, M = 65', 127000, 'Kaos lengan pendek', 'S,M', 121, 'images/CdyKOvqo3HS3Ae6Dde6yLdNHdujwf7tNLjmaWb3L.webp', '2020-12-28 19:20:59', '2020-12-28 19:48:49'),
(5, 'Yello Blue Wiuw Wiuw', 'Bahan kaos nyaman dan hangat, serta tebal. Stok Ukuran S = 24, M = 44', 145000, 'Sweater', 'S,M', 68, 'images/Llp1tYMroUF807HIYv1Lo1DVjln3hlFr1ftqjkZa.jpg', '2020-12-28 19:23:42', '2020-12-28 19:55:08'),
(6, 'Sweater Cloudy Mody Lovely', 'Hangat dan nyaman di pakai, Stok S = 56, M = 72', 152000, 'Sweater', 'S,M', 128, 'images/iSogiMWIkntVPEBMX0AJemeyHZcf9mM4NfJIsuxW.jpg', '2020-12-28 19:25:52', '2020-12-28 19:55:50'),
(7, 'Sweater Gray Color Puing Puing', 'Hangat, nyaman dan kain tebal, Stok ukuran S = 45, M =15', 148000, 'Sweater', 'S,M', 60, 'images/erIixKsd8Rp0QsQD0GxdZMGLpwPgQQ23BgnMeonD.jpg', '2020-12-28 19:29:59', '2020-12-28 19:29:59'),
(8, 'INFI KIDS LONG BROWN GRAY', 'Nyaman dipakai, kain dingin dan halus, Stok ukuran S = 56, M = 72', 167000, 'Kaos lengan panjang', 'S,M', 128, 'images/vBwzaLb4OFXcUDBT89zLsrRwS0cbBouyHmBz1NRL.jpg', '2020-12-28 19:32:25', '2020-12-28 19:32:25'),
(9, 'TDLR SPLIT THE THUNDER BLACK', 'Nyaman dipakai, mudah menyerap keringat, dingin, Stok ukuran S = 25, M = 35', 175000, 'Kaos lengan panjang', 'S,M', 60, 'images/xataizAifqhdgh4Z3Ji0v2jBEbdUSHwWvv5bvziN.jpg', '2020-12-28 19:34:37', '2020-12-28 19:34:37'),
(10, 'Welborn Kids RED S', 'Kain nyaman, dingin, halus, menyerap keringat, Stok ukuran S = 24, M = 61', 150000, 'Kaos lengan panjang', 'S,M', 85, 'images/cz1RWS9d6NvCzFDQ6Vw6Np6KzIviPc3eFQ2SIDYv.jpg', '2020-12-28 19:37:00', '2020-12-28 19:37:00'),
(11, 'Jacket HORSEWARE', 'Bahan kualitas tinggi, hangat, ringan, nyaman dipakai. Stok ukuran S = 43, M = 41', 142000, 'Jaket', 'S,M', 84, 'images/6WpTxckMReln9t3gHlpb5ty72GAY76qTp7hlT411.jpg', '2020-12-28 19:43:04', '2020-12-28 19:43:04'),
(12, 'U.S NAVY Marinir N.I.R N.I.R', 'Bahan tebal, hangat, kuat seperti menjadi marinir Stok ukuran S = 34, M = 51', 147000, 'Jaket', 'S,M', 85, 'images/ZgJxYGoo9nQ230kIAsCI3fRYMieYyyF6ktHsBKtP.jpg', '2020-12-28 19:45:11', '2020-12-28 19:45:11'),
(13, 'Blue Blue Flower Flower', 'Jacket anak dengan tema musim, Stok ukuran S = 34, M = 52', 143000, 'Jaket', 'S,M', 86, 'images/PLfQu7SZEPCUvc50qnnbMpT4CTr9ASDIN2R1lrzG.jpg', '2020-12-28 19:46:47', '2020-12-28 19:56:45');

-- --------------------------------------------------------

--
-- Table structure for table `komen1s`
--

CREATE TABLE `komen1s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_produk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `komentar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `komen1s`
--

INSERT INTO `komen1s` (`id`, `nama`, `nama_produk`, `komentar`, `created_at`, `updated_at`) VALUES
(1, 'Dhika Ainul Luthfi', 'Kaos Navy Motif Need more space', 'Barang yang dateng emang sesuai dengan gambarnya serta nyaman dipakai', NULL, '2020-12-29 19:26:44'),
(4, 'Saiful Anwar', 'T-shirt PS Alone', 'Kaosnya trendi banget gaes', '2020-12-29 19:28:47', '2020-12-29 19:28:47'),
(5, 'Faiz Hilmawan M', 'T-shirt Dragon', 'Kaosnya keren dan bahannya juga bagus', '2020-12-29 19:29:51', '2020-12-29 19:29:51');

-- --------------------------------------------------------

--
-- Table structure for table `komen2s`
--

CREATE TABLE `komen2s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_produk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `komentar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `komen2s`
--

INSERT INTO `komen2s` (`id`, `nama`, `nama_produk`, `komentar`, `created_at`, `updated_at`) VALUES
(1, 'Dhika Ainul Luthfi', 'Kaos Baju Lengan Panjang Kombinasi Heracle', 'Desainnya memang trendi dan kekinian tidak rugi untuk membelinya', NULL, '2020-12-29 09:48:53'),
(5, 'Saiful Anwar', 'Kaos pria sweater lengan panjang cowok', 'Barang yang dateng emang sesuai dengan gambarnya serta nyaman dipakai', '2020-12-29 19:31:09', '2020-12-29 19:31:33'),
(6, 'Rafli Maulana', 'kaos pria sweater lengan panjang cowok', 'Bajunya trendi banget gk rugi untuk beli', '2020-12-29 19:32:47', '2020-12-29 19:32:47');

-- --------------------------------------------------------

--
-- Table structure for table `komen3s`
--

CREATE TABLE `komen3s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_produk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `komentar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `komen3s`
--

INSERT INTO `komen3s` (`id`, `nama`, `nama_produk`, `komentar`, `created_at`, `updated_at`) VALUES
(1, 'Dhika Ainul Luthfi', 'Jaket Sweater Sweater Hoodie Pria Morte Fleece - Hitam', 'bahan kainnya lembut banget nyaman dipakai uhuy', NULL, '2020-12-29 10:03:54'),
(4, 'Vinka Amalia Safitri', 'Jaket Sweater Switer Pria HC Hoodie Fleece', 'Sweaternya bagus banget sesuai dengan gambar', '2020-12-29 19:34:26', '2020-12-29 19:38:13'),
(5, 'Mukhlas Abdul B', 'FortKlass DANIEL SWEATER HODIE RAJUT PRIA VARIASI LIST OUTERWEAR COWOK - Maroon', 'Meskipun harganya murah tapi barangnya berkualitas, recommended banget nih jaketnya', '2020-12-29 19:35:35', '2020-12-29 19:35:35');

-- --------------------------------------------------------

--
-- Table structure for table `komen4s`
--

CREATE TABLE `komen4s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_produk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `komentar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `komen4s`
--

INSERT INTO `komen4s` (`id`, `nama`, `nama_produk`, `komentar`, `created_at`, `updated_at`) VALUES
(1, 'Dhika Ainul Luthfi', 'JAKET GUNUNG PRIA OUTDOOR WATERPROOF', 'Jaketnya anti air dan hangat banget saat dipakai', NULL, NULL),
(3, 'Wahyu Budi S', 'Jaket pria', 'Jaketnya bagus banget trendi', '2020-12-29 19:37:41', '2020-12-29 19:37:41');

-- --------------------------------------------------------

--
-- Table structure for table `komen5s`
--

CREATE TABLE `komen5s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_produk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `komentar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `komen5s`
--

INSERT INTO `komen5s` (`id`, `nama`, `nama_produk`, `komentar`, `created_at`, `updated_at`) VALUES
(1, 'Vinka Amalia S', 'Kaos Herschel', 'Memang bahannya sangat berkualitas dan nyaman saat dipakai', NULL, NULL),
(2, 'Sofiana Nabila', 'Kaos Herschel', 'Bahanya bagus banget nyaman sekali saat dipakai', '2020-12-29 19:39:29', '2020-12-29 19:39:29');

-- --------------------------------------------------------

--
-- Table structure for table `komen6s`
--

CREATE TABLE `komen6s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_produk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `komentar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `komen6s`
--

INSERT INTO `komen6s` (`id`, `nama`, `nama_produk`, `komentar`, `created_at`, `updated_at`) VALUES
(1, 'Vinka Amalia S', 'Kaos long sleeve', 'Bajunya sesuai deskripsi dangat bagus dan trendi', NULL, NULL),
(3, 'Varda Diana', 'Kaos long sleeve', 'Kaosnya bagus banget, top banget deh recomended baju ini', '2020-12-29 14:02:30', '2020-12-29 19:41:23');

-- --------------------------------------------------------

--
-- Table structure for table `komen7s`
--

CREATE TABLE `komen7s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_produk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `komentar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `komen7s`
--

INSERT INTO `komen7s` (`id`, `nama`, `nama_produk`, `komentar`, `created_at`, `updated_at`) VALUES
(1, 'Vinka Amalia S', 'Sweater Hush Puppies', 'Sweaternya nyaman banget saat dipakai serta hangat', NULL, NULL),
(3, 'Ema Kurnia W', 'Sweater Hush Puppies', 'Mantep banget deh sweaternya hangat banget saat dipakai', '2020-12-29 19:43:36', '2020-12-29 19:43:36');

-- --------------------------------------------------------

--
-- Table structure for table `komen8s`
--

CREATE TABLE `komen8s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_produk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `komentar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `komen8s`
--

INSERT INTO `komen8s` (`id`, `nama`, `nama_produk`, `komentar`, `created_at`, `updated_at`) VALUES
(1, 'Vinka Amalia S', 'Jaket Rimas Fleece', 'Jaketnya nyaman banget saat dipakai serta hangat', NULL, NULL),
(3, 'Putrianti', 'Jaket Rimas Fleece', 'Jaketnya trendi banget guys', '2020-12-29 15:56:15', '2020-12-29 19:45:25');

-- --------------------------------------------------------

--
-- Table structure for table `komen9s`
--

CREATE TABLE `komen9s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_produk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `komentar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `komen9s`
--

INSERT INTO `komen9s` (`id`, `nama`, `nama_produk`, `komentar`, `created_at`, `updated_at`) VALUES
(1, 'Vinka Amalia S', 'Gamis Elzatta', 'Motifnya bagus banget dan nyaman dipakai', NULL, NULL),
(3, 'Wasiatul Alfi', 'Gamis Elzatta', 'Motif gamisnya bagus banget', '2020-12-29 19:46:52', '2020-12-29 19:47:04');

-- --------------------------------------------------------

--
-- Table structure for table `komen10s`
--

CREATE TABLE `komen10s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_produk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `komentar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `komen10s`
--

INSERT INTO `komen10s` (`id`, `nama`, `nama_produk`, `komentar`, `created_at`, `updated_at`) VALUES
(1, 'Saiful anwar', 'Kaos I Love Indonesia Special 2019 Limited Edition', 'Kaosnya bagus banget cocok untuk sikecil', NULL, NULL),
(3, 'Dendy Kurniawan', 'Kaos INFI KIDS', 'Cocok banget untuk sikecil, sablonnya juga top deh', '2020-12-29 19:51:44', '2020-12-29 19:51:44'),
(4, 'Fian Andriano', 'INDONESIA 1945', 'Bagus banget sablonannya', '2020-12-29 19:52:19', '2020-12-29 19:52:19');

-- --------------------------------------------------------

--
-- Table structure for table `komen11s`
--

CREATE TABLE `komen11s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_produk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `komentar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `komen11s`
--

INSERT INTO `komen11s` (`id`, `nama`, `nama_produk`, `komentar`, `created_at`, `updated_at`) VALUES
(1, 'Saiful anwar', 'INFI KIDS LONG BROWN GRAY', 'Kaosnya bagus banget dan kekinian serta nyaman dipakai', NULL, NULL),
(3, 'Alexandro R', 'TDLR SPLIT THE THUNDER BLACK', 'Kualitas bahan dan sablonannya bagus banget deh, recomended buat sikecil', '2020-12-29 19:53:45', '2020-12-29 19:53:45'),
(4, 'The Rock', 'Welborn Kids RED S', 'Bagus banget deh bajunya', '2020-12-29 19:54:43', '2020-12-29 19:54:43');

-- --------------------------------------------------------

--
-- Table structure for table `komen12s`
--

CREATE TABLE `komen12s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_produk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `komentar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `komen12s`
--

INSERT INTO `komen12s` (`id`, `nama`, `nama_produk`, `komentar`, `created_at`, `updated_at`) VALUES
(1, 'Saiful anwar', 'Sweater Cloudy Mody Lovely', 'Sweaternya bagus dan nyaman serta hangat saat dipakai', NULL, NULL),
(4, 'Leonardo The Caprio', 'Yello Blue Wiuw Wiuw', 'Wah cocok banget saaat dipakai anak gue, jadi ucul banget', '2020-12-29 19:56:01', '2020-12-29 19:56:01'),
(5, 'Kirigaya Kazuto', 'Sweater Gray Color Puing Puing', 'Bajunya cocok banget untuk sibuah hati', '2020-12-29 19:57:24', '2020-12-29 19:57:24');

-- --------------------------------------------------------

--
-- Table structure for table `komen13s`
--

CREATE TABLE `komen13s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_produk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `komentar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `komen13s`
--

INSERT INTO `komen13s` (`id`, `nama`, `nama_produk`, `komentar`, `created_at`, `updated_at`) VALUES
(1, 'Saiful anwar', 'U.S NAVY Marinir N.I.R N.I.R', 'Jaketnya bagus banget berasa seperti anak menjadi tentara angakatan laut', NULL, NULL),
(3, 'Kazuma', 'Jacket HORSEWARE', 'Jaketnya sangat bagus berkualitas, saat dicoba olek anakku cocok banget', '2020-12-29 19:58:57', '2020-12-29 19:58:57'),
(4, 'Subaru', 'Blue Blue Flower Flower', 'Sablonnya bagus banget slur, gk rugi untuk membeli', '2020-12-29 19:59:39', '2020-12-29 19:59:39');

-- --------------------------------------------------------

--
-- Table structure for table `mens`
--

CREATE TABLE `mens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_produk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` int(11) NOT NULL,
  `jenis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ukuran` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stok` int(11) NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mens`
--

INSERT INTO `mens` (`id`, `nama_produk`, `keterangan`, `harga`, `jenis`, `ukuran`, `stok`, `gambar`, `created_at`, `updated_at`) VALUES
(4, 'Kaos Navy Motif Need more space', 'kondisi barang asli baik warna, ukuran dan bentuk sesuai dengan foto serta nyaman dipakai, Stok untuk ukuran S = 25, ukuran L = 25', 34000, 'Kaos lengan pendek', 'S,L', 50, 'images/YqblBHennz3HcdClTTAbicK5LYH1XjA4xs2qZnsz.jpg', '2020-12-28 13:14:53', '2020-12-28 13:22:53'),
(5, 'T-shirt PS Alone', 'Kaos berbahan cotton combed yang didesain trendi Stok untuk ukuran S = 10, ukuran M = 30', 34000, 'Kaos lengan pendek', 'S,M', 40, 'images/28NH84f399U45Sh8oXJ3h9HIVUzxE4s77wGMPL2I.jpg', '2020-12-28 13:16:20', '2020-12-28 13:23:30'),
(6, 'T-shirt Dragon', 'Quality Import, Jahitan Double Stick dan Rapih, Stok  ukuran M = 30, ukuran L = 30', 33000, 'Kaos lengan pendek', 'M,L', 60, 'images/bM1KSmU7gNEjDNqTVcPVYhweKwAkSw4uwyk1H28X.jpg', '2020-12-28 13:20:22', '2020-12-28 13:24:01'),
(7, 'Jaket Sweater Sweater Hoodie Pria Morte Fleece - Hitam', 'Desainnya trendi dan material fleece lembut saat dipakai , Stok  ukuran L = 10, ukuran XL = 5, ukuran XXL = 10', 54000, 'Sweater', 'L,XL,XXL', 25, 'images/MhrFGBmBVxX0kLdgu4lFXw70Cz1FhXzGH8YLxJRy.jpg', '2020-12-28 13:39:22', '2020-12-28 13:39:22'),
(8, 'Jaket Sweater Switer Pria HC Hoodie Fleece', 'Bahanya tebal dan lembut saat dipakai , Stok ukuran M = 5, ukuran L = 5, ukuran XL = 5', 60000, 'Sweater', 'M,L,XL', 15, 'images/q1NyqqT2E8jLAIenCgxMv54qMySqSr9uD2ozPD56.jpg', '2020-12-28 13:43:03', '2020-12-28 13:43:03'),
(9, 'FortKlass DANIEL SWEATER HODIE RAJUT PRIA VARIASI LIST OUTERWEAR COWOK - Maroon', 'Desainnya trendi dan material fleece lembut saat dipakai , Stok ukuran M = 20, ukuran L = 20, ukuran XXL = 20', 52000, 'Sweater', 'M,L,XXL', 60, 'images/h6ZvpRDlzWXKeRPGkCN7uzT9viAh4WQRPeNc1LLX.jpg', '2020-12-28 13:46:49', '2020-12-28 13:46:49'),
(10, 'Kaos Baju Lengan Panjang Kombinasi Heracle', 'Desainnya trendi dan material kapas lembut saat dipakai , Stok ukuran M = 20, ukuran L = 20', 60000, 'Kaos lengan panjang', 'M,L', 40, 'images/zzxCpXH69udwycYR9ouJ4KMwxKriLNXXeIuPgnHi.jpg', '2020-12-28 14:50:23', '2020-12-28 14:50:23'),
(11, 'kaos pria sweater lengan panjang cowok', 'bahan babyterry baju sangat lembut dan enak dipakai, Stok ukuran L = 20, ukuran XL = 20 XXL = 10', 50000, 'Kaos lengan panjang', 'M,L,XL', 50, 'images/182r3bPxBZADfOkxh9O2a1tHxdZoc3bjpjnJgEL4.jpg', '2020-12-28 14:52:36', '2020-12-28 14:52:36'),
(12, 'kaos pria sweater lengan panjang cowok', 'bahan babyterry baju sangat lembut dan enak dipakai, Stok ukuran L = 20, ukuran XL = 20 XXL = 10', 50000, 'Kaos lengan panjang', 'L,XL,XXL', 50, 'images/SPLnSHhm01dlOoVvzYeWRYcLjqnWJwxuV97OxWMZ.jpg', '2020-12-28 14:53:46', '2020-12-28 14:53:46'),
(13, 'Jaket pria', 'Berbahan Fleece yang sangat lembut dan nyaman ketika dipakai , Stok ukuran L = 10, ukuran XL = 20 XXL = 10', 80000, 'Jaket', 'L,XL,XXL', 40, 'images/3NqvAdRwOYJXERI3i3mlwLUjakun8b0A8Cw4vaMU.jpg', '2020-12-28 15:03:36', '2020-12-28 15:03:36'),
(14, 'Jaket pria', 'Berbahan Fleece yang sangat lembut dan nyaman ketika dipakai , Stok ukuran L = 20, ukuran XL = 20 XXL = 10', 80000, 'Jaket', 'L,XL,XXL', 50, 'images/7HzJsaW2Zw4CZZDoabhMMwPV0AfQkuPLD3O4UZjJ.jpg', '2020-12-28 15:05:15', '2020-12-28 15:05:15'),
(15, 'JAKET GUNUNG PRIA OUTDOOR WATERPROO', 'MATERIAL TASLAN WATERPROOF ANTI AIR PRODUK ORIGINAL, , Stok ukuran L = 5, ukuran XL = 10 XXL = 10', 100000, 'Jaket', 'L,XL,XXL', 25, 'images/P6tfoamyrh035tgtmSVmXptiWuqC4Osvvka366Xv.jpg', '2020-12-28 15:07:11', '2020-12-28 15:07:11');

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
(4, '2020_12_20_122036_create_terbaru_table', 2),
(5, '2020_12_21_072104_create_news_table', 3),
(6, '2020_12_21_073509_create_barus_table', 4),
(7, '2020_12_24_131142_create_womens_table', 5),
(8, '2020_12_25_124411_create_womens_table', 6),
(9, '2020_12_28_012112_create_mens_table', 7),
(10, '2020_12_28_083038_create_kids_table', 8),
(11, '2020_12_28_125812_create_komentars_table', 9),
(12, '2020_12_28_132101_create_komentars_table', 10),
(13, '2020_12_28_134000_create_komentars_table', 11),
(14, '2020_12_28_134808_create_menbajupendeks_table', 12),
(15, '2020_12_29_000402_create__komenmbjpdk_table', 13),
(16, '2020_12_29_003409_create_komen1s_table', 14),
(17, '2020_12_29_012908_create_komen2s_table', 15),
(18, '2020_12_29_015308_create_komen3s_table', 16),
(19, '2020_12_29_020723_create_komen4s_table', 17),
(20, '2020_12_29_045416_create_komen5s_table', 18),
(21, '2020_12_29_052500_create_komen6s_table', 19),
(22, '2020_12_29_054711_create_komen7s_table', 20),
(23, '2020_12_29_060904_create_komen8s_table', 21),
(24, '2020_12_29_074108_create_komen9s_table', 22),
(25, '2020_12_29_075815_create_komen10s_table', 23),
(26, '2020_12_29_084450_create_komen11s_table', 24),
(27, '2020_12_29_090740_create_komen12s_table', 25),
(28, '2020_12_29_092918_create_komen13s_table', 26);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `womens`
--

CREATE TABLE `womens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_produk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` int(11) NOT NULL,
  `jenis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ukuran` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stok` int(11) NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `womens`
--

INSERT INTO `womens` (`id`, `nama_produk`, `keterangan`, `harga`, `jenis`, `ukuran`, `stok`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'Kaos Herschel', 'Bahannya sangat berkualitas dan nyaman dipakai\r\nStok untuk ukuran S = 25, ukuran M = 25, ukuran L = 25, ukuran M = 25', 500000, 'Kaos lengan pendek', 'S,M,L,XL', 100, 'images/xeGBM7MUWSI1QYq4dF2cgrGJVF4JjAsyUu9AeZTa.jpg', NULL, '2020-12-28 09:09:13'),
(2, 'Kaos long sleeve', 'Kaos berbahan cotton combed yang didesain trendi\r\nStok untuk ukuran S = 10, ukuran M = 30, ukuran L = 30', 150000, 'Kaos lengan panjang', 'S,M', 70, 'images/Tt5tm3OapVnzju1shWfb3OQi80xSvno7swckrmVY.jpg', '2020-12-25 06:46:40', '2020-12-28 09:12:26'),
(3, 'Sweater Hush Puppies', 'Bahannya lembut dan nyaman dipakai\r\nStok ukuran L = 30, ukuran XL = 15, ukuran XXL = 10', 150000, 'Sweater', 'L,XL,XXL', 55, 'images/AR1bnCjnk4Owx7k8pagapRp7yrSVs5ltt2qOISNY.png', '2020-12-25 07:32:06', '2020-12-28 09:14:47'),
(4, 'Jaket Rimas Fleece', 'Desainnya trendi dan material fleece\r\nStok ukuran S = 5, ukuran M = 10, ukuran L = 10, ukuran XL = 5, ukuran XXL = 6, ukuran XXXL = 4', 116000, 'Jaket', 'S,M,L,XL,XXL,XXXL', 40, 'images/qR8up8yyb4Zaj8rmmEXf0B0YBWnE2wKH0bUMfKuC.jpg', '2020-12-25 08:25:38', '2020-12-28 09:16:14'),
(5, 'Gamis Elzatta', 'Bahannya lembut, banyak motif, dan trendi\r\nStok ukuran M = 2, ukuran L = 2, ukuran XL = 2, ukuran XXL = 2, ukuran XXXL = 2', 329000, 'Gamis', 'M,L,XL,XXL,XXXL', 10, 'images/TuBZBthjZFbFRPxp13JKe2NT1iwORMw1OIc25MGj.jpg', '2020-12-25 08:28:19', '2020-12-28 09:17:02');

-- --------------------------------------------------------

--
-- Table structure for table `_komenmbjpdk`
--

CREATE TABLE `_komenmbjpdk` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_produk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `komentar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barus`
--
ALTER TABLE `barus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kids`
--
ALTER TABLE `kids`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `komen1s`
--
ALTER TABLE `komen1s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `komen2s`
--
ALTER TABLE `komen2s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `komen3s`
--
ALTER TABLE `komen3s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `komen4s`
--
ALTER TABLE `komen4s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `komen5s`
--
ALTER TABLE `komen5s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `komen6s`
--
ALTER TABLE `komen6s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `komen7s`
--
ALTER TABLE `komen7s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `komen8s`
--
ALTER TABLE `komen8s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `komen9s`
--
ALTER TABLE `komen9s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `komen10s`
--
ALTER TABLE `komen10s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `komen11s`
--
ALTER TABLE `komen11s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `komen12s`
--
ALTER TABLE `komen12s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `komen13s`
--
ALTER TABLE `komen13s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mens`
--
ALTER TABLE `mens`
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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `womens`
--
ALTER TABLE `womens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `_komenmbjpdk`
--
ALTER TABLE `_komenmbjpdk`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barus`
--
ALTER TABLE `barus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kids`
--
ALTER TABLE `kids`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `komen1s`
--
ALTER TABLE `komen1s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `komen2s`
--
ALTER TABLE `komen2s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `komen3s`
--
ALTER TABLE `komen3s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `komen4s`
--
ALTER TABLE `komen4s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `komen5s`
--
ALTER TABLE `komen5s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `komen6s`
--
ALTER TABLE `komen6s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `komen7s`
--
ALTER TABLE `komen7s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `komen8s`
--
ALTER TABLE `komen8s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `komen9s`
--
ALTER TABLE `komen9s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `komen10s`
--
ALTER TABLE `komen10s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `komen11s`
--
ALTER TABLE `komen11s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `komen12s`
--
ALTER TABLE `komen12s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `komen13s`
--
ALTER TABLE `komen13s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `mens`
--
ALTER TABLE `mens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `womens`
--
ALTER TABLE `womens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `_komenmbjpdk`
--
ALTER TABLE `_komenmbjpdk`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
