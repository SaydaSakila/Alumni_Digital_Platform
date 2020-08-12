-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 12, 2020 at 01:29 PM
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
(28, 'Admin', 'admin@gmail.com', 'admin', 'f865b53623b121fd34ee5426c792e5c33af8c227', '2020-08-12 16:40:36');

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
(5, 'Sumiiii', 'luruq', 'wegenaga@mailinator.com', 20103030, '2ba1d845c0c78d8308d3d98b28c9b8be33126b88', '+1 (627) 813-7195', 'Non inventore qui et', 'Spring 20', '2020-08-08 20:51:29');

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
(17, 'Sakila', 'dore@mailinator.com', 'sayda', 'f6bcfd2fcde5c91c33ac9debdc1aaa9495ea9f69', '+1 (308) 692-90', 'volupta', 'fall 16', 'fall 20', NULL, '2020-07-26 14:30:41'),
(18, 'Sumi', 'voju@mailinator.com', 'pyryg', 'e47110e8495ceb4e8e256a923e90868f3f394b72', '+1 (466) ', 'Quia in proident', 'fall 19', 'fall 24', NULL, '2020-07-26 15:23:13'),
(22, 'Destiny Burton', 'byhupisi@mailinato', 'cojivix', 'd98117fc586863a7e238f341c6afc6b140f28b9a', '+1 (798) 747', 'Aperiam exp', 'summer 15', 'fall 2019', NULL, '2020-08-04 00:02:13'),
(25, 'Walter ', 'hytyqi@mailinator.com', 'barik', '418665ebbec3e1a4d6dc21e91095e7e6004259de', '+1 (691) 431-93', 'Optio similique ull', 'Summer 15', 'Spring 19', NULL, '2020-08-04 00:47:08'),
(26, 'Justin Valenzuela', 'nygac@mailinator.com', 'tetir', '3fba846a332c4c428ba0d6ce7592e9ae12698b2d', '+1 (448) 208-60', 'Sit nihil molestias', 'Qui aut nostrud vero', '2012', NULL, '2020-08-12 16:46:33');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
