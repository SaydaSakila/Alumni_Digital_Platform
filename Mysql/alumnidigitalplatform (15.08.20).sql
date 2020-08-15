-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2020 at 08:21 AM
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
(4, 'Sakila', '2020-08-15 00:31:50');

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
(2, 1, 1, 'Website', 'dskjfhsdddddddddddddddddddddflzxvbxjcbgssidfhszmbcxzxmnvbsalgiufkdbcxbxcbvsidfxbcd sdhkfluisfdbvljsdbg shdflsdbfmnbdsj sdflkdshfbc xfhsdkfhsuidfhdi', NULL, '2020-08-14 22:09:38'),
(4, 2, 0, 'Sakila', 'She is a good girl', NULL, '2020-08-14 23:08:18'),
(7, 2, 0, 'Website', 'meeeeeeeeeeeeeeeeeeeeee', NULL, '2020-08-15 01:37:36');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `universityid` int(11) NOT NULL,
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
(4, 'Sakila', 'zejufi', 'vucyq@mailinator.com', 19103002, '2ba1d845c0c78d8308d3d98b28c9b8be33126b88', '+1 (187) 147-5624', 'Magni distinctio Se', 'Spring 19', '2020-08-04 11:08:03'),
(6, 'Sayda', '16303030', '16303030@iubat.edu', 16303030, '878c4b1e07b378c2c35fe121d175adff8ba7e970', '+1 (756) 889-2651', 'Uttara', 'Fall 16', '2020-08-13 21:22:09'),
(8, '16303029', '16303029', '16303029@iubat.edu', 0, '6bbf02ea9ba19a0c3caa280a9f630aa36a5cbd1b', '', '', 'Fall 16', '2020-08-15 12:14:09');

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
(18, 'alumni', 'alumni@gmail.com', 'alumniii', '6df73cc169278dd6daab5fe7d6cacb1fed537131', '+1 (466) ', 'Quia in ', 'fall 19', 'fall 24', NULL, '2020-07-26 15:23:13'),
(22, 'Destiny Burton', 'byhupisi@mailinato', 'cojivix', 'd98117fc586863a7e238f341c6afc6b140f28b9a', '+1 (798) 747', 'Aperiam exp', 'summer 15', 'fall 2019', NULL, '2020-08-04 00:02:13'),
(25, 'Walter ', 'hytyqi@mailinator.com', 'barik', 'cc4c44ffa2b1acb812f03b0b9014adca2e8829a4', '+1 (691) ', 'Optio ull', 'Summer 15', 'Spring 19', NULL, '2020-08-04 00:47:08'),
(26, 'Justin Valenzuela', 'nygac@mailinator.com', 'tetir', '061421dbf3ed6e5cdaf4a689765a4c696d6d8896', '+1 (448) 20', 'Sit nihil ', '2020', '2012', NULL, '2020-08-12 16:46:33'),
(29, 'nemecowoxy', 'mudexilu@mailinator.com', '20', '2ba1d845c0c78d8308d3d98b28c9b8be33126b88', '123', '123', '2009', '2013', NULL, '2020-08-13 01:18:57'),
(30, 'hylyqoden@mailinator.com', 'dumaxyji@mailinator.com', '16', 'ac748cb38ff28d1ea98458b16695739d7e90f22d', NULL, NULL, '1887', '1991', NULL, '2020-08-13 10:12:09'),
(40, '16303029', '16303029@iubat.edu', '16303029', '6bbf02ea9ba19a0c3caa280a9f630aa36a5cbd1b', NULL, NULL, 'Fall 16', 'Summer 20', NULL, '2020-08-15 12:17:17');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
