-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2020 at 08:37 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alumnidigitalplatform`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(200) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `username`, `password`, `created_at`) VALUES
(28, 'Admin', 'admin@gmail.com', 'admin', 'f865b53623b121fd34ee5426c792e5c33af8c227', '2020-08-12 16:40:36'),
(31, 'Sakila', 'sakila@gmail.com', 'sakila', '7c222fb2927d828af22f592134e8932480637c0d', '2020-08-14 23:16:56'),
(32, '16303029', '16303029@iubat.edu', '16303029', '6bbf02ea9ba19a0c3caa280a9f630aa36a5cbd1b', '2020-08-15 12:20:36');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`) VALUES
(1, 'Test', '2020-08-14 20:49:55'),
(2, 'Web Application', '2020-08-14 23:05:21'),
(4, 'Machine Learning', '2020-08-15 00:31:50'),
(5, 'News portal', '2020-08-16 18:12:26'),
(7, 'Sakila', '2020-08-17 13:33:26'),
(8, 'Me', '2020-08-17 13:36:15'),
(9, 'Meeeee', '2020-08-17 13:58:05'),
(10, 'Sayda', '2020-08-17 14:06:32'),
(11, 'Facebook', '2020-08-17 17:24:52'),
(12, 'Ahmed', '2020-08-17 17:26:43');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `admin_id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `content` text NOT NULL,
  `photo` varchar(30) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `category_id`, `admin_id`, `title`, `content`, `photo`, `created_at`) VALUES
(9, 1, 32, 'Reiciendis magna neq', ' In mollitia laudanti', NULL, '2020-08-15 13:03:59'),
(10, 2, 32, 'Odit sint consectetu', '   Quia temporibus ea e', NULL, '2020-08-15 13:18:51'),
(11, 4, 32, 'Quam nobis amet tot', 'Eum non eiusmod null', NULL, '2020-08-16 18:12:54'),
(13, 9, 32, 'Nostrum non vero cor', 'Et molestiae est ull', NULL, '2020-08-17 15:38:37'),
(14, 11, 32, 'Bangladesh', 'hgfmgfcgfcnh', NULL, '2020-08-17 17:25:24'),
(15, 9, 32, 'Est dolores tempor', 'Veritatis dolore del', NULL, '2020-08-17 17:27:02');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `universityid` int(11) DEFAULT NULL,
  `password` varchar(200) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(200) NOT NULL,
  `batch` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `username`, `email`, `universityid`, `password`, `phone`, `address`, `batch`, `created_at`) VALUES
(6, 'Sayda', '16303030', '16303030@iubat.edu', 16303030, '878c4b1e07b378c2c35fe121d175adff8ba7e970', '+1 (756) 889-2651', 'Uttara', 'Fall 16', '2020-08-13 21:22:09'),
(8, 'sayda', '16303029', '16303029@iubat.edu', 16303029, '6bbf02ea9ba19a0c3caa280a9f630aa36a5cbd1b', '+1 (756) 889-2651', 'Uttara, Dhaka', 'Fall 16', '2020-08-15 12:14:09'),
(12, 'luno@mailinator.com', 'cubefuki', 'kogizofu@mailinator.com', NULL, 'ac748cb38ff28d1ea98458b16695739d7e90f22d', '', '', 'Iure neque voluptas ', '2020-08-17 11:22:47');

-- --------------------------------------------------------

--
-- Table structure for table `uposts`
--

CREATE TABLE `uposts` (
  `id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `content` text NOT NULL,
  `photo` varchar(30) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uposts`
--

INSERT INTO `uposts` (`id`, `category_id`, `user_id`, `title`, `content`, `photo`, `created_at`) VALUES
(4, 2, 40, 'web', 'chfghfgh', NULL, '2020-08-17 23:19:10'),
(7, 4, 18, 'Diffrent User', ' vxbcvncv', NULL, '2020-08-18 00:21:38');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `batch` varchar(200) NOT NULL,
  `passingyear` varchar(200) NOT NULL,
  `photo` varchar(50) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `username`, `password`, `phone`, `address`, `batch`, `passingyear`, `photo`, `created_at`) VALUES
(18, 'alumni', 'alumni@gmail.com', 'alumniii', '728348f63167a287d2509edf88d74dbf79c44480', '+1 (466) ', 'Quia in ', 'fall 19', 'fall 24', NULL, '2020-07-26 15:23:13'),
(40, 'sakila', '16303029@iubat.edu', '16303029', '6bbf02ea9ba19a0c3caa280a9f630aa36a5cbd1b', '+1 (756) 889-26', 'Uttara, Dhaka', 'Fall 16', 'Summer 20', NULL, '2020-08-15 12:17:17'),
(43, 'powuc@mailinator.com', 'wuconak@mailinator.com', 'kasubysy', 'ac748cb38ff28d1ea98458b16695739d7e90f22d', NULL, NULL, 'Deleniti commodo asp', '1972', NULL, '2020-08-17 10:50:52'),
(45, 'cotalami@mailinator.com', 'gymiqipyfo@mailinator.com', 'kiziwahu', 'ac748cb38ff28d1ea98458b16695739d7e90f22d', NULL, NULL, 'Sed eiusmod dolore o', '1970', NULL, '2020-08-17 10:52:36'),
(46, 'jyvetezo@mailinator.com', 'metu@mailinator.com', 'kyduvona', 'ac748cb38ff28d1ea98458b16695739d7e90f22d', NULL, NULL, 'Non et in aperiam ob', '1989', NULL, '2020-08-17 10:54:09'),
(47, 'gupevebaf@mailinator.com', 'zanihabery@mailinator.com', 'dyvekapyg', 'ac748cb38ff28d1ea98458b16695739d7e90f22d', NULL, NULL, 'Veritatis qui magnam', '2015', NULL, '2020-08-17 10:55:57'),
(48, 'tikacaf@mailinator.com', 'kosicyj@mailinator.com', 'tyqoz', 'ac748cb38ff28d1ea98458b16695739d7e90f22d', NULL, NULL, 'Aliquam quia nisi do', '2004', NULL, '2020-08-17 10:56:20'),
(49, 'keqemupyza@mailinator.com', 'hopyt@mailinator.com', 'fywuboba', 'ac748cb38ff28d1ea98458b16695739d7e90f22d', NULL, NULL, 'Velit ipsam volupta', '2019', NULL, '2020-08-17 10:58:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `admin_id` (`admin_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `universityid` (`universityid`);

--
-- Indexes for table `uposts`
--
ALTER TABLE `uposts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `uposts`
--
ALTER TABLE `uposts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `uposts`
--
ALTER TABLE `uposts`
  ADD CONSTRAINT `uposts_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `uposts_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
