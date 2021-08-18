-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 18, 2021 at 05:53 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `belajar_sholat`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

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
-- Table structure for table `tbl_sholatashar`
--

CREATE TABLE `tbl_sholatashar` (
  `id_ashar` int(11) NOT NULL,
  `judul_ashar` varchar(30) NOT NULL,
  `deskripsi_ashar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_sholatashar`
--

INSERT INTO `tbl_sholatashar` (`id_ashar`, `judul_ashar`, `deskripsi_ashar`) VALUES
(1, 'Sholat ashar', 'Sholat ashar');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sholatdzuhur`
--

CREATE TABLE `tbl_sholatdzuhur` (
  `id_dzuhur` int(11) NOT NULL,
  `judul_dzuhur` varchar(30) NOT NULL,
  `deskripsi_dzuhur` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_sholatdzuhur`
--

INSERT INTO `tbl_sholatdzuhur` (`id_dzuhur`, `judul_dzuhur`, `deskripsi_dzuhur`) VALUES
(1, 'Sholat dzuhur', 'Sholat dzuhur');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sholatisya`
--

CREATE TABLE `tbl_sholatisya` (
  `id_isya` int(11) NOT NULL,
  `judul_isya` varchar(30) NOT NULL,
  `deskripsi_isya` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_sholatisya`
--

INSERT INTO `tbl_sholatisya` (`id_isya`, `judul_isya`, `deskripsi_isya`) VALUES
(1, 'Sholat isya', 'Sholat isya');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sholatmaghrib`
--

CREATE TABLE `tbl_sholatmaghrib` (
  `id_maghrib` int(11) NOT NULL,
  `judul_maghrib` varchar(30) NOT NULL,
  `deskripsi_maghrib` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_sholatmaghrib`
--

INSERT INTO `tbl_sholatmaghrib` (`id_maghrib`, `judul_maghrib`, `deskripsi_maghrib`) VALUES
(1, 'Sholat maghrib', 'Sholat maghrib');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sholatsubuh`
--

CREATE TABLE `tbl_sholatsubuh` (
  `id` int(11) NOT NULL,
  `judul_subuh` varchar(30) NOT NULL,
  `deskripsi_subuh` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_sholatsubuh`
--

INSERT INTO `tbl_sholatsubuh` (`id`, `judul_subuh`, `deskripsi_subuh`) VALUES
(1, 'Sholat subuh', 'Sholat subuh');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_soal`
--

CREATE TABLE `tbl_soal` (
  `id` int(5) NOT NULL,
  `soal` text NOT NULL,
  `a` text NOT NULL,
  `b` text NOT NULL,
  `c` text NOT NULL,
  `jwaban` int(2) NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_soal`
--

INSERT INTO `tbl_soal` (`id`, `soal`, `a`, `b`, `c`, `jwaban`, `gambar`) VALUES
(1, 'Apa nama latin dari gambar di bawah ini?', 'Tamarindus indica', 'Averrhoa bilimbi', 'Phyllanthus acidus', 1, 'asam.jpg'),
(2, 'Apa nama latin dari gambar di bawah ini?', 'Tamarindus indica', 'Averrhoa bilimbi', 'Phyllanthus acidus', 2, 'belimbingwuluh.jpg'),
(3, 'Apa nama latin dari gambar di bawah ini?', 'Tamarindus indica', 'Averrhoa bilimbi', 'Phyllanthus acidus', 3, 'cermai.jpg'),
(4, 'Apa nama latin dari gambar di bawah ini?', 'Uncaria gambir', 'Jatropha curcas', 'Citrus x hystrix', 1, 'gambir.jpg'),
(5, 'Apa nama latin dari gambar di bawah ini?', 'Uncaria gambir', 'Jatropha curcas', 'Citrus x hystrix', 2, 'jarak_pagar.jpg'),
(6, 'Apa nama latin dari gambar di bawah ini?', 'Uncaria gambir', 'Jatropha curcas', 'Citrus x hystrix', 3, 'jeruk_purut.jpg'),
(7, 'Apa nama latin dari gambar di bawah ini?', 'Vigna radiata', 'Cocos nucifera', 'Stelechocarpus burahol', 1, 'kacang.jpg'),
(8, 'Apa nama latin dari gambar di bawah ini?', 'Vigna radiata', 'Cocos nucifera', 'Stelechocarpus burahol', 2, 'kelapa.jpg'),
(9, 'Apa nama latin dari gambar di bawah ini?', 'Vigna radiata', 'Cocos nucifera', 'Stelechocarpus burahol', 3, 'kepel.jpg'),
(10, 'Apa nama latin dari gambar di bawah ini?', 'Curcuma longa', 'Alpinia galanga', 'Passiflora edulis', 1, 'kunyit.jpg'),
(11, 'Apa nama latin dari gambar di bawah ini?', 'Curcuma longa', 'Alpinia galanga', 'Passiflora edulis', 2, 'lengkuas.jpg'),
(12, 'Apa nama latin dari gambar di bawah ini?', 'Curcuma longa', 'Alpinia galanga', 'Passiflora edulis', 3, 'markisa.jpg'),
(13, 'Apa nama latin dari gambar di bawah ini?', 'Cucumis sativus', 'Nephelium lappaceum', 'Citrullus lanatus', 1, 'mentimun.jpg'),
(14, 'Apa nama latin dari gambar di bawah ini?', 'Cucumis sativus', 'Nephelium lappaceum', 'Citrullus lanatus', 2, 'rambutan.jpg'),
(15, 'Apa nama latin dari gambar di bawah ini?', 'Cucumis sativus', 'Nephelium lappaceum', 'Citrullus lanatus', 3, 'semangka.jpg'),
(16, 'Apa nama latin dari gambar di bawah ini?', 'Piper betle', 'Curcuma xanthorrhiza', 'Zea mays ssp. mays', 1, 'sirih.jpg'),
(17, 'Apa nama latin dari gambar di bawah ini?', 'Piper betle', 'Curcuma xanthorrhiza', 'Zea mays ssp. mays', 2, 'temulawak.jpg'),
(18, 'Apa nama latin dari gambar di bawah ini?', 'Piper betle', 'Curcuma xanthorrhiza', 'Zea mays ssp. mays', 3, 'jagung.jpg'),
(19, 'Apa nama latin dari gambar di bawah ini?', 'Solanum lycopersicum', 'Orthosiphon aristatus', 'Piper betle', 1, 'tomat.jpg'),
(20, 'Apa nama latin dari gambar di bawah ini?', 'Solanum lycopersicum', 'Orthosiphon aristatus', 'Piper betle', 2, 'kumiskucing.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tentangkami`
--

CREATE TABLE `tbl_tentangkami` (
  `id_tentang` int(11) NOT NULL,
  `judul_tentang` varchar(30) NOT NULL,
  `deskripsi_tentang` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_tentangkami`
--

INSERT INTO `tbl_tentangkami` (`id_tentang`, `judul_tentang`, `deskripsi_tentang`) VALUES
(1, 'Tentang kami', 'Tentang kami');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_wudhu`
--

CREATE TABLE `tbl_wudhu` (
  `id_wudhu` int(11) NOT NULL,
  `judul_wudhu` varchar(30) NOT NULL,
  `deskripsi_wudhu` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_wudhu`
--

INSERT INTO `tbl_wudhu` (`id_wudhu`, `judul_wudhu`, `deskripsi_wudhu`) VALUES
(1, 'Berwudhu', 'Berwudhu');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `name`, `password`) VALUES
(1, 'maulanadedi', 'Dedi Maulana', 'dedibae123');

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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `tbl_sholatashar`
--
ALTER TABLE `tbl_sholatashar`
  ADD PRIMARY KEY (`id_ashar`);

--
-- Indexes for table `tbl_sholatdzuhur`
--
ALTER TABLE `tbl_sholatdzuhur`
  ADD PRIMARY KEY (`id_dzuhur`);

--
-- Indexes for table `tbl_sholatisya`
--
ALTER TABLE `tbl_sholatisya`
  ADD PRIMARY KEY (`id_isya`);

--
-- Indexes for table `tbl_sholatmaghrib`
--
ALTER TABLE `tbl_sholatmaghrib`
  ADD PRIMARY KEY (`id_maghrib`);

--
-- Indexes for table `tbl_sholatsubuh`
--
ALTER TABLE `tbl_sholatsubuh`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_soal`
--
ALTER TABLE `tbl_soal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_tentangkami`
--
ALTER TABLE `tbl_tentangkami`
  ADD PRIMARY KEY (`id_tentang`);

--
-- Indexes for table `tbl_wudhu`
--
ALTER TABLE `tbl_wudhu`
  ADD PRIMARY KEY (`id_wudhu`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_sholatashar`
--
ALTER TABLE `tbl_sholatashar`
  MODIFY `id_ashar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_sholatdzuhur`
--
ALTER TABLE `tbl_sholatdzuhur`
  MODIFY `id_dzuhur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_sholatisya`
--
ALTER TABLE `tbl_sholatisya`
  MODIFY `id_isya` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_sholatmaghrib`
--
ALTER TABLE `tbl_sholatmaghrib`
  MODIFY `id_maghrib` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_sholatsubuh`
--
ALTER TABLE `tbl_sholatsubuh`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_soal`
--
ALTER TABLE `tbl_soal`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbl_tentangkami`
--
ALTER TABLE `tbl_tentangkami`
  MODIFY `id_tentang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_wudhu`
--
ALTER TABLE `tbl_wudhu`
  MODIFY `id_wudhu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
