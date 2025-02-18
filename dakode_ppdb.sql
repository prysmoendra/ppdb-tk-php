-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 12, 2023 at 09:33 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dakode_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(15) NOT NULL,
  `nama` varchar(60) NOT NULL,
  `email` varchar(50) NOT NULL,
  `komentar` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `nama`, `email`, `komentar`, `created_at`, `updated_at`) VALUES
(1, 'BEJO SUMERJIO', 'bejosumjio@gmail.com', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Neque ea necessitatibus velit veritatis, sapiente dolore omnis sunt culpa, doloribus doloremque blanditiis possimus saepe iste corporis, illo dolor quibusdam fugit sit.', '2023-08-11 18:06:49', '2023-08-12 01:06:49'),
(2, 'SOEKAMTNO JAILIDIN', 'soekamtono@gmail.com', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Neque ea necessitatibus velit veritatis, sapiente dolore omnis sunt culpa, doloribus doloremque blanditiis possimus saepe iste corporis, illo dolor quibusdam fugit sit.', '2023-08-11 18:06:49', '2023-08-12 01:06:49'),
(3, 'TRI GUNARTI', 'trikemlinti@gmai.com', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Neque ea necessitatibus velit veritatis, sapiente dolore omnis sunt culpa, doloribus doloremque blanditiis possimus saepe iste corporis, illo dolor quibusdam fugit sit.', '2023-08-11 18:06:49', '2023-08-12 01:06:49');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(15) NOT NULL,
  `nama` varchar(60) NOT NULL,
  `email` varchar(50) NOT NULL,
  `sub_judul` varchar(50) NOT NULL,
  `message` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `nama`, `email`, `sub_judul`, `message`, `created_at`, `updated_at`) VALUES
(1, 'AGUNG SUDERAJAT', 'agungagung@gmail.com', 'Bertanya Tentang Pendaftaran', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Neque ea necessitatibus velit veritatis, sapiente dolore omnis sunt culpa, doloribus doloremque blanditiis possimus saepe iste corporis, illo dolor quibusdam fugit sit.', '2023-08-11 18:07:14', '2023-08-12 01:07:14'),
(2, 'MAMAT ABDULRAHMAT', 'matmatabdul@gmail.com', 'Bertanya Tentang Kurikulum', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Neque ea necessitatibus velit veritatis, sapiente dolore omnis sunt culpa, doloribus doloremque blanditiis possimus saepe iste corporis, illo dolor quibusdam fugit sit.', '2023-08-11 18:07:14', '2023-08-12 01:07:14'),
(3, 'KASINO MUNGGONO', 'kasinosayno@gmail.com', 'Biaya Pendidikan di TK Nusantara', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Neque ea necessitatibus velit veritatis, sapiente dolore omnis sunt culpa, doloribus doloremque blanditiis possimus saepe iste corporis, illo dolor quibusdam fugit sit.', '2023-08-11 18:07:14', '2023-08-12 01:07:14');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(14) NOT NULL,
  `namalengkap` varchar(60) NOT NULL,
  `tempat` varchar(25) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` varchar(60) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `jk` varchar(1) DEFAULT NULL,
  `agama` varchar(15) DEFAULT NULL,
  `nama_ibu` varchar(60) DEFAULT NULL,
  `nama_ayah` varchar(60) DEFAULT NULL,
  `nohp_ibu` varchar(15) DEFAULT NULL,
  `nohp_ayah` varchar(15) DEFAULT NULL,
  `prov` varchar(60) DEFAULT NULL,
  `kota` varchar(60) DEFAULT NULL,
  `kec` varchar(60) DEFAULT NULL,
  `kel` varchar(60) DEFAULT NULL,
  `rt` varchar(5) DEFAULT NULL,
  `rw` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `namalengkap`, `tempat`, `tgl_lahir`, `alamat`, `created_at`, `updated_at`, `jk`, `agama`, `nama_ibu`, `nama_ayah`, `nohp_ibu`, `nohp_ayah`, `prov`, `kota`, `kec`, `kel`, `rt`, `rw`) VALUES
(1, 'WILLIAM AHIL PAMUNGKAS', 'KEDIRI', '2013-05-28', 'JL. SERSAN BAHRUN NO. 154', '2023-08-10 07:37:00', '2023-08-11 05:25:16', 'L', 'ISLAM', 'EUIS ROHIMAH', 'DAVIK SUHENDRA', '081333344444', '081234567898', 'JAWA TIMUR', 'KOTA KEDIRI', 'MOJOROTO', 'MRICAN', '05', '01'),
(2, 'FAJAR KRISMAHENDRA BINTANG PANGESTU', 'KEDIRI', '2022-05-25', 'JL. SERSAN BAHRUN NO. 154', '2023-08-10 07:37:00', '2023-08-10 14:37:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'ATIFA SIAMY ARACELLI', 'BANDUNG', '2016-09-08', 'JL. SERSAN BAHRUN NO. 154', '2023-08-10 07:37:00', '2023-08-10 14:37:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'IKHSANUL AKRAMA', 'ACEH', '2020-06-07', 'Jl. Sanasini No.123', '2023-08-10 07:37:00', '2023-08-10 14:37:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'GHINA MUTIA AZKALA', 'JAKARTA', '2020-01-22', 'Jl. Panjangsatu No.123', '2023-08-10 07:37:00', '2023-08-10 14:37:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'GHINA MUTIA AZKALA', 'JAKARTA', '2020-01-22', 'Jl. Panjangsatu No.123', '2023-08-10 07:37:00', '2023-08-10 14:37:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'GHINA MUTIA AZKALA', 'JAKARTA', '2020-01-22', 'Jl. Panjangsatu No.123', '2023-08-10 07:37:00', '2023-08-10 14:37:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 'JOKO HOHO', 'SURABAYA', '2017-02-28', 'Jl. Sanasini No.123', '2023-08-10 07:37:00', '2023-08-10 14:37:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, 'ADEL ENDEL', 'LAMPUNG', '2009-08-22', 'JL. SUSAHAMAT NO.123', '2023-08-10 07:37:00', '2023-08-10 14:37:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, 'JAJAT SUDERAJAT', 'BANTEN', '2006-07-06', 'JL. SUSAHAMAT NO.123', '2023-08-10 07:37:00', '2023-08-10 14:37:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, 'BEJO SEMBRONO', 'BOJONEGORO', '2008-12-22', 'JL. MONDARMANDIR NO123', '2023-08-10 07:37:00', '2023-08-10 14:37:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, 'Tatang Sutarman', 'Banten', '2007-02-17', 'Jl. Sersan Bahrun no. 154', '2023-08-10 07:37:00', '2023-08-10 14:37:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, 'MAMAT KRAMAT', 'BATAM', '2003-08-30', 'JL. MONDARMANDIR NO123', '2023-08-11 20:31:28', '2023-08-12 03:31:28', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `nama` varchar(60) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `nohp` varchar(15) NOT NULL,
  `user_roles` varchar(5) NOT NULL DEFAULT 'user',
  `password` varchar(255) NOT NULL,
  `students_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `nama`, `email`, `nohp`, `user_roles`, `password`, `students_id`, `created_at`, `updated_at`) VALUES
(1, 'krismo', 'FAJAR KRISMAHENDRA BINTANG PANGESTU', 'krismahendra@gmail.com', '081359235756', 'user', '12345678', 8, '2023-08-10 07:35:03', '2023-08-10 14:35:03'),
(2, 'admin', 'SuperAdmin', 'addminn@gmail.com', '081212121212', 'admin', '1234', NULL, '2023-08-10 07:35:03', '2023-08-12 14:32:50'),
(3, 'endro', 'SUHENDRO', 'endro@gmail.com', '08123123123', 'user', '12345678', 1, '2023-08-10 07:35:03', '2023-08-10 14:35:03'),
(4, 'sopo', 'ADIT SOPO JARWO', 'aditsopojarwo@gmail.com', '08111222333', 'user', '1234', 9, '2023-08-10 07:35:03', '2023-08-10 14:35:03'),
(5, 'jarwo', 'JARWO SUTEJO', 'jarwohoho@gmail.com', '088880088080', 'user', '1234', 10, '2023-08-10 07:35:03', '2023-08-10 14:35:03'),
(6, 'tejo', 'SUTEJO BEJO', 'sutejobejo@gmail.com', '0812233435', 'user', '1234', 11, '2023-08-10 07:35:03', '2023-08-10 14:35:03'),
(7, 'tian', 'TIANDRY', 'amkxnkawnx@gmail.com', '12342345678', 'user', '1234', 6, '2023-08-10 07:35:03', '2023-08-12 03:29:50'),
(8, 'ryanmhildan', 'Ryan', 'ryanmhildan@gmail.com', '0895371937227', 'user', '77612101', 12, '2023-08-10 07:35:03', '2023-08-10 14:35:03'),
(9, 'paul', 'PAUL SANPAULO', 'pauuul@gmail.com', '0812345678', 'user', '1234', 13, '2023-08-10 07:39:48', '2023-08-12 03:31:28'),
(10, 'tian', 'TIANDRY', 'amkxnkawnx@gmail.com', '12342345678', 'user', '1234', 7, '2023-08-10 07:35:03', '2023-08-10 14:35:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
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
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
