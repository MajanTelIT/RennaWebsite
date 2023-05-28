-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2023 at 10:41 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rennawebsite`
--

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `banner_name` varchar(100) DEFAULT NULL,
  `banner_image` varchar(100) DEFAULT NULL,
  `image_path` varchar(500) DEFAULT NULL,
  `language` varchar(50) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `meta_title` varchar(50) DEFAULT NULL,
  `meta_description` varchar(50) DEFAULT NULL,
  `meta_keywords` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `status`, `banner_name`, `banner_image`, `image_path`, `language`, `updated_at`, `created_at`, `meta_title`, `meta_description`, `meta_keywords`) VALUES
(3, 1, 'GENERALsss', NULL, 'banner/1685262748.jpg', '1', '2023-05-28 08:32:28', '2023-05-28 08:13:51', 'GENERALs', 'GENERALs', 'GENERALs');

-- --------------------------------------------------------

--
-- Table structure for table `static_pages`
--

CREATE TABLE `static_pages` (
  `id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `title` varchar(50) DEFAULT NULL,
  `url` varchar(50) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `arabic_description` text DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `static_pages`
--

INSERT INTO `static_pages` (`id`, `status`, `updated_at`, `title`, `url`, `description`, `arabic_description`, `created_at`) VALUES
(1, 2, '2023-05-28 07:04:53', 'present promotion1', 'present promotion1', '<p>present promotion1<br></p>', '<p>present promotion1<br></p>', '2023-05-28 07:02:13');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `msisdn` varchar(50) DEFAULT NULL,
  `password_origional` varchar(100) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `msisdn`, `password_origional`, `updated_at`, `status`, `email`, `created_at`) VALUES
(1, 'manish singh', '$2y$10$EU1Yj26MJXZ5kxZRrIW/YO4wp0sDGnXT4lLDvsPf3bfvkueqTE4fW', '71007500', 'manish2507', '2023-05-28 06:27:08', 1, 'manishsingh2507@gmail.com', '2023-05-28 06:27:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `static_pages`
--
ALTER TABLE `static_pages`
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
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `static_pages`
--
ALTER TABLE `static_pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
