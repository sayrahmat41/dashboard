-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2020 at 07:38 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dashboard`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id` int(11) NOT NULL,
  `nama_anak` varchar(255) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `tinggi_badan` float DEFAULT NULL,
  `berat_badan` float DEFAULT NULL,
  `lingkar_kepala` float DEFAULT NULL,
  `lingkar_lengan_atas` float DEFAULT NULL,
  `lingkar_perut` float DEFAULT NULL,
  `hepatitis_b` int(11) DEFAULT NULL,
  `polio` int(11) DEFAULT NULL,
  `bcg` int(11) DEFAULT NULL,
  `dtp` int(11) DEFAULT NULL,
  `hib` int(11) DEFAULT NULL,
  `pcv` int(11) DEFAULT NULL,
  `rotavirus` int(11) DEFAULT NULL,
  `influenza` int(11) DEFAULT NULL,
  `campak` int(11) DEFAULT NULL,
  `mmr` int(11) DEFAULT NULL,
  `tifoid` int(11) DEFAULT NULL,
  `hepatitis_a` int(11) DEFAULT NULL,
  `varisela` int(11) DEFAULT NULL,
  `hpv` int(11) DEFAULT NULL,
  `japanese_encephalitis` int(11) DEFAULT NULL,
  `dangue` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `nama_anak`, `alamat`, `tinggi_badan`, `berat_badan`, `lingkar_kepala`, `lingkar_lengan_atas`, `lingkar_perut`, `hepatitis_b`, `polio`, `bcg`, `dtp`, `hib`, `pcv`, `rotavirus`, `influenza`, `campak`, `mmr`, `tifoid`, `hepatitis_a`, `varisela`, `hpv`, `japanese_encephalitis`, `dangue`) VALUES
(1, 'baron', 'jgc', 2, 2, 2, 2, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'faf', 'fafa', 2, 2, 2, 2, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'jhc', 'dada', 43, 43, 4, 44, 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'rah', 'adad', NULL, 43, 4, 44, 5, NULL, 1, 1, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 'imu', 'faug', NULL, 777, 77, 77, 77, 1, 1, 1, NULL, 1, 1, NULL, 1, 1, NULL, NULL, 1, 1, 1, NULL, 1),
(9, 'baron', 'faf', 3, 3, 3, 3, 3, 1, 1, NULL, 1, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, NULL, NULL, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sys_status`
--

CREATE TABLE `sys_status` (
  `id` int(11) NOT NULL,
  `status` varchar(100) NOT NULL,
  `class` varchar(100) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `modified_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sys_users`
--

CREATE TABLE `sys_users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` char(8) DEFAULT NULL,
  `status` smallint(5) DEFAULT 1 COMMENT '1=active user, 0=block,',
  `profile_picture` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `last_login` datetime DEFAULT NULL,
  `last_logout` datetime DEFAULT NULL,
  `last_accessed_ip` varchar(15) DEFAULT '0.0.0.0',
  `logins` smallint(4) DEFAULT 0,
  `created_by` int(11) DEFAULT 1 COMMENT 'default',
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sys_users`
--

INSERT INTO `sys_users` (`id`, `username`, `email`, `phone`, `status`, `profile_picture`, `password`, `last_login`, `last_logout`, `last_accessed_ip`, `logins`, `created_by`, `created_at`, `updated_by`, `updated_at`) VALUES
(13, 'test', 'test@gmail.com', '12345678', 1, '/uploads/images/2020/May/24/1590353371_43e4efcdd22419ec37b0.png', '$2y$10$MJgRd.iID3Q1Q1HMUjXMi./Q0uearXWRxbgNofh5vono745MEKbfC', '2020-12-02 10:23:20', '2020-12-01 02:19:47', '::1', 9, 1, '2020-05-24 15:49:31', NULL, '2020-12-02 10:23:20'),
(23, 'rahmatsayfuddin', 'rdlsecurity2@mailinator.com', '08888888', 1, NULL, '$2y$10$DRDJWoifKfdMOIS3SVCY4OznERiWiwt57uNr/kBc9rgKz1qxquAIi', NULL, NULL, '0.0.0.0', 0, 1, '2020-12-01 00:53:07', NULL, '2020-12-01 00:53:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sys_status`
--
ALTER TABLE `sys_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sys_users`
--
ALTER TABLE `sys_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `sys_status`
--
ALTER TABLE `sys_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sys_users`
--
ALTER TABLE `sys_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
