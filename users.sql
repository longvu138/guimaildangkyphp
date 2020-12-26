-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2020 at 01:50 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thuchanh4`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` mediumint(6) UNSIGNED NOT NULL,
  `first_name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` char(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `registration_date` datetime NOT NULL,
  `class` char(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_level` tinyint(1) UNSIGNED NOT NULL DEFAULT 0,
  `address1` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address2` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state_country` char(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zcode_pcode` char(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` char(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paid` enum('No','Yes') COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `activation_code` int(100) NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `first_name`, `last_name`, `email`, `password`, `registration_date`, `class`, `user_level`, `address1`, `address2`, `city`, `state_country`, `zcode_pcode`, `phone`, `paid`, `status`, `activation_code`, `avatar`) VALUES
(1, 'Trần Long ', 'Vũ', 'tranlongvu138@gmail.com', 'longvu1308', '2020-12-02 11:31:44', 'abc', 0, 'ha noi', 'ha noi', 'ha noi', 'hung yen', '10', '0389709577', 'Yes', '1', 0, ''),
(2, 'Hoàng Văn', 'Quang', 'hoangvanquang@gmail.com', 'quanghoang', '2020-12-24 21:34:17', '', 0, 'ha nam', 'ha nam', 'ha nam', 'ha nam', '', '0389709568', 'Yes', '0', 0, ''),
(3, 'thanhkien', 'tran', 'thankien@gmail.com', 'thankkien', '2020-12-26 14:37:13', 'abc', 0, 'ha noi', NULL, 'ha noi', 'hung yen', '10', NULL, 'Yes', '0', 0, ''),
(4, 'hoanglong', 'nguyen', 'hoanglong@gmail.com', 'hoanglong', '2020-12-26 15:30:20', '', 0, 'ha nam', NULL, 'ha noi', 'ha nam', '11', NULL, 'No', '0', 0, ''),
(24, 'tranlongvu', 'longvu', 'tranlongvu12345@gmail.com.vn', 'a', '2020-12-26 16:16:00', '', 0, 'ha noi', '', 'hung yen', 'hung yen', '10', '0389709570', 'No', '0', 0, ''),
(25, 'hoang nam', 'tien', 'hnt@gmail.com', 'namtien', '2020-12-26 19:17:00', '', 0, 'nghe an', 'ha noi', 'ha noi', 'nghe an', '25', '256785191', 'No', '0', 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`),
  ADD UNIQUE KEY `userid` (`userid`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `phone` (`phone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` mediumint(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
