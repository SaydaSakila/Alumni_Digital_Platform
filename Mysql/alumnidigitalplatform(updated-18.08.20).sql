-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 18, 2020 at 01:38 PM
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
(15, 9, 32, 'Est dolores tempor', 'Veritatis dolore del', NULL, '2020-08-17 17:27:02'),
(16, 7, 32, 'Laborum Itaque erro', ' <span style=\"font-family: &quot;Comic Sans MS&quot;;\">Adipisci </span><b><font color=\"#000000\" style=\"background-color: rgb(255, 255, 0);\">quae </font></b><span style=\"font-family: &quot;Comic Sans MS&quot;;\">quidem.</span>', NULL, '2020-08-18 11:19:06'),
(18, 4, 32, 'Rerum et velit fugia', '   <p><img src=\"data:image/png;base64,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\" data-filename=\"logoadp.png\" style=\"width: 128px; float: left;\" class=\"note-float-left\">Iure minus minus qui.</p>', NULL, '2020-08-18 11:31:51');

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
  `content` varchar(60000) NOT NULL,
  `photo` varchar(30) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uposts`
--

INSERT INTO `uposts` (`id`, `category_id`, `user_id`, `title`, `content`, `photo`, `created_at`) VALUES
(11, 1, 18, 'Website', '  <p><img src=\"data:image/png;base64,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\" data-filename=\"logoadp.png\" style=\"width: 128px;\">sakilar kolla<br></p>', NULL, '2020-08-18 13:00:14'),
(14, 1, 18, 'Blogger', ' <p>adasdsadasdasdasd</p>', NULL, '2020-08-18 13:22:19'),
(15, 1, 18, 'Website', ' <p>adasdasdasdasdsadsadsadsd<img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAAAsQAAALEBxi1JjQAAABl0RVh0U29mdHdhcmUAd3d3Lmlua3NjYXBlLm9yZ5vuPBoAAAL1SURBVFiFxZfLS1RRHMe/33POnTtN2r0ZZtGmXRS0iB7YJgUhwmrTA+lBSX+AjBERFMFdRrR0I5MULWoRBEIkEbUQReiBobTqQajjDHrvwJSPcebOaZMy6DjOQ53v8t7f43N+/M7vnEOtNaopUYmz4zjCcRxVSQyWU4GOjo5DQoh2rfVlz/PqlFIjJB/09PQ83zCAcDjcoLW+QrJda31w8fv09PSSjZRyXin1VghxNxKJjFYM4DhOIJFInNVatwM4BWBFuXMBcmUYRlwp9cw0Taerq+tvSQDhcPio1vo6gEsA6gqtYDWApQSkNgxjVEr5KBKJPF0VoLOzc7fv+1dJtgM4UDBqCQC5klKmpJTvDMO4193dPQwAHHyy/9qf1NY7f1Nb9gEseVd8+R7Cr+mCRcorwzCmpJT3ufBezElmgyVH+K+JhIU7L0+X5SulTCnJbDDlG+k33xpluRUoR4sVUABgynS0/+fh41XpAf8DNIDfolnvXTRsa2u7FQgEHlqWBSllRQAkkU6nMTc397q3t/fM8v95x6jrut9JIh6Po7a2FpZloaamBiTXXmaOPM/D+Pg4fN9HKBQayWdTcI5rrZFMJpFMJqGUgmVZsG0bpmnmtSeJmZkZjI2NYXZ2tijIog+STCYD13Xhui6CwSBs24ZlWUslnpycLKkfSgbI1fz8PGKxGGKxGKLRKCo50is6jgFUlHxVAJIbcUvJGzMvgJSyH0BxXVSESMI0zcdFA/T19XkkI+sFYJrm14GBgR9FAwCAbds3SYYB/Ck3MUkdCoVeLSwsHFvVJt8kzFVLS8sekjdIngTQiGU7Z2JiYoVPIBBISik/GYZxe2ho6HNByLUActXa2rrN9/0j2Wx2F8n6bDa70/O8ZiFEnGSU5C+l1IvBwcGVVGsAJMQU6nFR+8U6rpcWe2B7ZgeaNjt5LgAEcaGqACDOwSn9QrJ+AEBDpgknqgkAAZzfbAClgY/UGAbRCq7f+C1W1BoEqvdEFtVMDgD/AJnoMCGnCEx2AAAAAElFTkSuQmCC\" data-filename=\"university.png\" style=\"width: 32px;\"></p>', NULL, '2020-08-18 13:25:34'),
(16, 1, 18, 'Website', ' <p>aadasdasdasdsad</p>', NULL, '2020-08-18 13:57:14'),
(17, 7, 40, 'Blogger', ' <p>vvhhghfghfhgfghfghfghfh</p>', NULL, '2020-08-18 14:12:16'),
(18, 12, 40, 'Blogger', '<p>adsadsadasdasdasd</p>', NULL, '2020-08-18 14:15:55'),
(19, 11, 40, 'Website', '<p>asasasasasas</p><p>asasas</p><p>asasas</p><p>asasasas</p>', NULL, '2020-08-18 14:16:28'),
(21, 1, 40, 'UML', '  <p style=\"text-align: center; \"><img src=\"data:image/png;base64,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\" data-filename=\"logoadp.png\" style=\"width: 128px;\"></p><p style=\"text-align: center; \"><font color=\"#000000\" style=\"background-color: rgb(255, 255, 0);\">Classssssssssssssssss</font></p>', NULL, '2020-08-18 16:51:47'),
(22, 10, 40, 'Sit ut dolor dolorem', '<b><u><font style=\"background-color: rgb(255, 255, 0);\" color=\"#0000ff\">Ullam rem est aut ra.</font></u></b>', NULL, '2020-08-18 17:36:27');

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
(18, 'Ratul', 'alumni@gmail.com', '15303008', 'e4cdae8eb84fc27667c29438a118f414be1513af', '+1 (466) ', 'Quia in ', 'fall 19', 'fall 24', NULL, '2020-07-26 15:23:13'),
(40, 'sakila', '16303029@iubat.edu', '16303029', '6bbf02ea9ba19a0c3caa280a9f630aa36a5cbd1b', '+1 (756) 889-26', 'Uttara, Dhaka', 'Fall 16', 'Summer 20', NULL, '2020-08-15 12:17:17'),
(43, 'powuc@mailinator.com', 'wuconak@mailinator.com', 'kasubysy', 'ac748cb38ff28d1ea98458b16695739d7e90f22d', NULL, NULL, 'Deleniti commodo asp', '1972', NULL, '2020-08-17 10:50:52'),
(45, 'cotalami@mailinator.com', 'gymiqipyfo@mailinator.com', 'kiziwahu', 'ac748cb38ff28d1ea98458b16695739d7e90f22d', NULL, NULL, 'Sed eiusmod dolore o', '1970', NULL, '2020-08-17 10:52:36'),
(46, 'jyvetezo@mailinator.com', 'metu@mailinator.com', 'kyduvona', 'ac748cb38ff28d1ea98458b16695739d7e90f22d', NULL, NULL, 'Non et in aperiam ob', '1989', NULL, '2020-08-17 10:54:09'),
(47, 'gupevebaf@mailinator.com', 'zanihabery@mailinator.com', 'dyvekapyg', 'ac748cb38ff28d1ea98458b16695739d7e90f22d', NULL, NULL, 'Veritatis qui magnam', '2015', NULL, '2020-08-17 10:55:57'),
(48, 'tikacaf@mailinator.com', 'kosicyj@mailinator.com', 'tyqoz', 'ac748cb38ff28d1ea98458b16695739d7e90f22d', NULL, NULL, 'Aliquam quia nisi do', '2004', NULL, '2020-08-17 10:56:20'),
(49, 'keqemupyza@mailinator.com', 'hopyt@mailinator.com', 'fywuboba', 'ac748cb38ff28d1ea98458b16695739d7e90f22d', NULL, NULL, 'Velit ipsam volupta', '2019', NULL, '2020-08-17 10:58:20'),
(52, 'Rifat', '17103031@iubat.edu', '17103031', '7c222fb2927d828af22f592134e8932480637c0d', NULL, NULL, 'Spring 20', '2030', NULL, '2020-08-18 12:34:57');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `uposts`
--
ALTER TABLE `uposts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

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
