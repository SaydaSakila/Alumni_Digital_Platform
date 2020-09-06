-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 06, 2020 at 06:43 PM
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
(32, 'Sayda', '16303029@iubat.edu', '16303029', '6bbf02ea9ba19a0c3caa280a9f630aa36a5cbd1b', '2020-08-15 12:20:36');

-- --------------------------------------------------------

--
-- Table structure for table `batches`
--

CREATE TABLE `batches` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `batches`
--

INSERT INTO `batches` (`id`, `name`, `created_at`) VALUES
(2, 'Spring-10', '2020-08-28 19:50:10'),
(3, 'Summer-10', '2020-08-28 19:50:15'),
(4, 'Fall-10', '2020-08-28 20:25:44'),
(5, 'Spring-11', '2020-08-28 20:27:21'),
(6, 'Summer-11', '2020-08-28 20:27:27'),
(7, 'Fall-11', '2020-08-28 20:27:33'),
(8, 'Spring-12', '2020-08-28 20:27:44'),
(9, 'Summer-12', '2020-08-28 20:28:12'),
(10, 'Fall-12', '2020-08-28 20:28:17'),
(11, 'Spring-13', '2020-08-28 20:28:23'),
(12, 'Summer-13', '2020-08-28 20:28:32'),
(13, 'Fall-13', '2020-08-28 20:28:39'),
(14, 'Spring-14', '2020-08-28 20:28:45'),
(15, 'Summer-14', '2020-08-28 20:28:53'),
(16, 'Fall-14', '2020-08-28 20:29:00'),
(17, 'Spring-15', '2020-08-28 20:29:18'),
(18, 'Summer-15', '2020-08-28 20:29:23'),
(19, 'Fall-15', '2020-08-28 20:29:27'),
(20, 'Spring-16', '2020-08-28 20:29:32'),
(21, 'Summer-16', '2020-08-28 20:29:40'),
(22, 'Fall-16', '2020-08-28 20:29:45'),
(23, 'Spring-17', '2020-08-28 20:30:03'),
(24, 'Summer-17', '2020-08-28 20:30:08'),
(25, 'Fall-17', '2020-08-28 20:30:12'),
(26, 'Spring-18', '2020-08-28 20:30:17'),
(27, 'Summer-18', '2020-08-28 20:30:23'),
(28, 'Fall-18', '2020-08-28 20:30:30'),
(29, 'Spring-19', '2020-08-28 20:30:36'),
(30, 'Summer-19', '2020-08-28 20:30:41'),
(31, 'Fall-19', '2020-08-28 20:30:45'),
(32, 'Spring-20', '2020-08-28 20:31:02'),
(33, 'Summer-20', '2020-08-28 20:31:11');

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
(14, 'Academic', '2020-08-19 09:48:17'),
(15, 'Career', '2020-08-19 09:48:26'),
(16, 'Personal', '2020-08-19 09:48:35'),
(17, 'Others', '2020-08-19 09:49:11');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_type` varchar(200) NOT NULL,
  `comment` varchar(1000) NOT NULL,
  `post_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `message` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `subject`, `message`, `created_at`) VALUES
(1, 'Sakila', '16303029@iubat.edu', 'Login', 'login problem', '2020-08-26 10:13:53'),
(2, 'asdasd', 'a@gmail.com', 'asdsdasds', 'asdasdsad', '2020-08-26 10:13:53'),
(3, 'Petra Paul', 'zidezuj@mailinator.com', 'Id ex hic elit est', 'Neque eveniet fugit', '2020-08-26 10:13:53'),
(4, 'Joan Robles', 'puwupa@mailinator.com', 'Deleniti velit duis', 'Anim eum ad non magn', '2020-08-26 10:13:53'),
(5, 'Jasmine Ware', 'kepow@mailinator.com', 'Officiis sed esse op', 'Provident anim fugi', '2020-08-26 10:13:53'),
(9, 'Conan Fulton', 'gumik@mailinator.com', 'Facere dolor quasi s', 'Sed nulla cupidatat', '2020-08-26 10:13:53'),
(10, 'Madeline Hinton', 'vokoxyta@mailinator.com', 'Fugiat sed deserunt', 'Do dicta voluptatem', '2020-08-26 10:13:53'),
(11, 'Abel Flowers', 'tohijove@mailinator.com', 'Est ipsum fugit r', 'Reiciendis quia cons', '2020-08-26 10:13:53'),
(12, 'Thaddeus Guerra', 'hucu@mailinator.com', 'Mollitia similique a', 'Officia dolorem eos', '2020-08-26 10:13:53'),
(13, 'Bianca Gilbert', 'gogeqepy@mailinator.com', 'Excepteur voluptates', 'Ipsum officia quasi', '2020-08-26 10:13:53'),
(14, 'Charity Simon', 'dorifesa@mailinator.com', 'Quae deserunt magni', 'Velit suscipit ut p', '2020-08-26 10:13:53'),
(15, 'Allegra Forbes', 'zyjazoqohy@mailinator.com', 'Exercitationem fuga', 'Culpa elit dolorem', '2020-08-26 10:13:53'),
(16, 'Adam Gibbs', 'nemuzigy@mailinator.com', 'Sed voluptates esse', 'Debitis labore eveni', '2020-08-26 10:13:53'),
(17, 'Nichole Barber', 'vyduhuhube@mailinator.com', 'Ab soluta est assum', 'Eos excepteur in dol', '2020-08-26 10:13:53'),
(18, 'Sakillaaaa', 'pyda@mailinator.com', 'sddsfeius fu', 'Aut adipisci eiusmod', '2020-08-26 10:13:53'),
(19, 'Abra Mcintosh', 'xohimot@mailinator.com', 'Est ipsum eum non in', 'Ut amet unde odit l', '2020-08-26 10:13:53');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `name`, `created_at`) VALUES
(1, 'BCSE', '2020-08-24 09:57:11'),
(2, 'BSME', '2020-08-24 09:58:41'),
(3, 'BSEEE', '2020-08-24 09:58:48'),
(4, 'BSCE', '2020-08-24 09:59:07'),
(5, 'BBA', '2020-08-24 09:59:13'),
(6, 'MBA', '2020-08-24 09:59:22'),
(7, 'BSAg', '2020-08-24 09:59:36'),
(8, 'BATHM', '2020-08-24 09:59:42'),
(9, 'BSN', '2020-08-24 09:59:46'),
(10, 'BAEcon', '2020-08-24 10:00:03'),
(12, 'BA in English', '2020-08-24 10:08:35');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `content` text NOT NULL,
  `date` datetime NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `dept_id` text NOT NULL,
  `batch_id` text NOT NULL,
  `photo` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `name`, `content`, `date`, `status`, `dept_id`, `batch_id`, `photo`, `created_at`) VALUES
(45, 'fghg', 'dgchfh', '2020-09-03 18:46:00', 1, '[\"1\",\"2\"]', '[\"3\",\"4\",\"5\",\"6\"]', '', '2020-09-03 17:45:52'),
(46, 'sakila', ' hg', '2020-09-04 00:00:00', 1, '[\"2\",\"3\"]', '[\"2\",\"4\"]', '', '2020-09-03 18:40:24'),
(47, 'Dale Guerrero', ' Dicta fuga Omnis vo', '2020-09-26 00:00:00', 1, '[\"1\",\"5\",\"6\",\"7\",\"8\",\"10\"]', '[\"3\",\"9\",\"12\",\"14\",\"15\",\"18\",\"23\",\"27\",\"29\",\"31\"]', '', '2020-09-05 12:41:12'),
(48, 'Keith Bullock', 'Ea quae omnis nulla ', '2020-09-18 08:38:00', 1, '[\"2\",\"3\",\"4\",\"5\",\"6\",\"7\",\"9\"]', '[\"6\",\"7\",\"9\",\"11\",\"12\",\"14\",\"15\",\"16\",\"17\",\"18\",\"19\",\"20\",\"21\",\"24\",\"26\",\"27\"]', '', '2020-09-05 19:28:31'),
(53, 'Sakila', '  <p>df dhd</p>', '2020-09-12 00:00:00', 0, '[\"5\",\"6\"]', '[\"14\",\"15\"]', '', '2020-09-05 19:55:06'),
(54, 'Courtney Cherry', 'Eius sunt exercitat', '2020-09-27 11:17:00', 1, '[\"3\",\"4\"]', '[\"3\",\"19\",\"26\"]', '', '2020-09-06 19:29:54');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(11) NOT NULL,
  `dept_id` int(11) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(300) NOT NULL,
  `experience` varchar(300) NOT NULL,
  `cname` varchar(300) NOT NULL,
  `address` varchar(500) NOT NULL,
  `salary` varchar(200) NOT NULL,
  `hour` varchar(200) NOT NULL,
  `info` varchar(500) NOT NULL,
  `education` varchar(500) NOT NULL,
  `deadline` datetime NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `dept_id`, `user_id`, `title`, `experience`, `cname`, `address`, `salary`, `hour`, `info`, `education`, `deadline`, `created_at`) VALUES
(3, 1, 40, 'Programmer', 'No Need', 'Datatrix', 'Mirpur-10', '15000-20000', 'Full Time', 'Should Be able to solve programming related Problem', 'Graduate from CSE', '2020-09-04 00:00:00', '2020-08-24 19:51:01'),
(4, 5, 40, 'Saunders Rowe Associates', 'Cross and Gilbert Traders', 'Bridges Melendez Inc', 'Lopez Mueller LLC', '25000', 'Full Time', ' Finley Duncan Traders', 'Luna Contreras Trading', '2020-09-14 00:00:00', '2020-08-24 22:49:38'),
(9, 1, 40, 'System Administrator', '1 Year', 'Wilkinson Richmond Associates', 'Uttara', '30000/=', 'Part Time', ' Participate in the entire application lifecycle, focusing on coding and debugging\r\n\r\nWrite clean code to develop functional web applications\r\n\r\nTroubleshoot and debug applications', 'Fuller and Shepherd Traders', '2020-08-29 00:00:00', '2020-08-25 10:14:07'),
(10, 1, 40, 'Software Engr.', 'More Than 3 Years', 'CodeWeavers', 'Uttara, Dhaka', '20,000', 'Full Time', ' Senior Software Engineer', 'Graduate in CSE', '2020-08-19 00:00:00', '2020-08-26 09:49:15'),
(11, 10, 40, 'Buckner Landry Plc', 'Mccormick Landry Inc', 'Ellison and Hodges Associates', 'Blevins and Wyatt Trading', 'Anderson and Tucker Associates', 'Mullen Burnett Traders', 'Eum quia quibusdam i', 'Strong and Santiago Trading', '2021-07-11 00:00:00', '2020-08-27 12:49:24');

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
(9, 1, 32, 'Reiciendis magna neq', ' In mollitia laudanti', NULL, '2020-08-15 13:03:59');

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `dept_id` int(11) NOT NULL,
  `batch_id` int(11) NOT NULL,
  `passingyear` varchar(200) NOT NULL,
  `message` varchar(500) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`id`, `name`, `email`, `username`, `password`, `dept_id`, `batch_id`, `passingyear`, `message`, `created_at`) VALUES
(35, 'tizex', '16303029@iubat.edu', '16303029', 'ac748cb38ff28d1ea98458b16695739d7e90f22d', 10, 14, '1996', 'University ID: 16303029, Department ID: 10, Batch ID: 14 and Passing Year: 1996 would like to request an account for Alumni.', '2020-09-03 13:14:55'),
(37, 'zejyleri@mailinator.com', 'gezytybura@mailinator.com', 'vefisi', 'ac748cb38ff28d1ea98458b16695739d7e90f22d', 1, 2, '1995', 'University ID: vefisi, Department ID: 1, Batch ID: 2 and Passing Year: 1995 would like to request an account for Alumni.', '2020-09-03 20:10:22');

-- --------------------------------------------------------

--
-- Table structure for table `sposts`
--

CREATE TABLE `sposts` (
  `id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `student_id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `content` text NOT NULL,
  `photo` varchar(30) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sposts`
--

INSERT INTO `sposts` (`id`, `category_id`, `student_id`, `title`, `content`, `photo`, `created_at`) VALUES
(8, 15, 8, 'Website', '<p>dzgfdz gd</p>', '470de6f20f.png', '2020-08-28 13:15:00');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `dept_id` int(11) NOT NULL,
  `password` varchar(200) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(200) NOT NULL,
  `batch_id` int(11) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `username`, `email`, `dept_id`, `password`, `phone`, `address`, `batch_id`, `photo`, `created_at`) VALUES
(8, 'Sayda', '16303029', '16303029@iubat.edu', 1, '6bbf02ea9ba19a0c3caa280a9f630aa36a5cbd1b', '+1 (756) 889-2651', 'Sector-10, Uttara, Dhaka', 22, '', '2020-08-15 12:14:09'),
(14, 'Adrienne Bush', '17203030', 'dujemy@mailinator.com', 1, 'ac748cb38ff28d1ea98458b16695739d7e90f22d', '+1 (202) 385-7575', 'Cupiditate ea aliqua', 24, '', '2020-08-25 11:21:59'),
(15, 'fibu', '20105020', 'fofexyl', 2, 'ac748cb38ff28d1ea98458b16695739d7e90f22d', '', '', 32, '', '2020-08-26 07:03:18'),
(18, 'Quinn Robles', '19303030', 'dosihywi@mailinator.com', 1, 'ac748cb38ff28d1ea98458b16695739d7e90f22d', '+1 (727) 738-5253', 'Aliquip ut dolorem e', 31, '', '2020-08-26 17:06:41'),
(19, 'sadu', 'mezyxo', 'gupyrered@mailinator.com', 2, 'ac748cb38ff28d1ea98458b16695739d7e90f22d', '', '', 3, '', '2020-08-28 20:13:18'),
(20, 'koloxy', 'fixuc', 'gurajo@mailinator.com', 8, 'ac748cb38ff28d1ea98458b16695739d7e90f22d', '', '', 6, '', '2020-08-29 13:28:49'),
(21, 'Shahir', '16303019', 'pexojow@mailinator.com', 12, '255c733761c9b3db9dd069b1d5003c966a00896f', '', '', 22, '', '2020-08-29 13:34:24'),
(22, 'ratujys', 'miwiciqe', 'juhakyhy@mailinator.com', 10, 'ac748cb38ff28d1ea98458b16695739d7e90f22d', '', '', 11, '', '2020-08-29 16:18:51'),
(25, 'Ariel Snow', 'vabonoqew', 'zupifotyn@mailinator.com', 10, 'ac748cb38ff28d1ea98458b16695739d7e90f22d', '+1 (342) 553-5933', 'Tempore qui sint q', 10, '', '2020-09-02 00:05:28');

-- --------------------------------------------------------

--
-- Table structure for table `sturequests`
--

CREATE TABLE `sturequests` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(500) NOT NULL,
  `dept_id` int(11) NOT NULL,
  `batch_id` int(11) NOT NULL,
  `message` varchar(500) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(28, 16, 18, 'Image', ' hxfjfxjhvjndtnhgchfxg', '', '2020-08-26 12:11:35'),
(29, 17, 18, 'Photo', 'chffxghh', '', '2020-08-26 12:12:39'),
(31, 14, 18, 'Blogger', 'new <b><u><font color=\"#000000\" style=\"background-color: rgb(255, 255, 0);\">image</font></u></b>', '', '2020-08-26 18:22:33'),
(32, 15, 40, 'Cupiditate explicabo', 'Nulla <b>voluptatum </b>lor.', '', '2020-08-26 18:23:33'),
(33, 16, 40, 'Inventore consequat', 'Sit pariatur? <b>Quod </b>a.', '', '2020-08-26 18:25:22'),
(34, 17, 40, 'Fugit ipsam reicien', 'Sunt, vel <b>quis </b>excep.', '', '2020-08-26 18:32:01'),
(35, 17, 40, 'Eaque officia minim', 'Sunt, <b>consequat</b>. Qui.', '', '2020-08-27 11:29:23'),
(37, 16, 40, 'Impedit voluptatem', 'Aut quia <b>reprehender</b>.', '521717e01d.png', '2020-08-27 13:00:09'),
(45, 15, 40, 'Ut minima veniam no', 'Amet, <b>debitis </b>volupt.', '599244fff4.jpg', '2020-08-30 23:53:44');

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
  `dept_id` int(11) NOT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `batch_id` int(11) NOT NULL,
  `passingyear` varchar(200) NOT NULL,
  `cname` varchar(200) DEFAULT NULL,
  `jposition` varchar(200) DEFAULT NULL,
  `fb` varchar(500) DEFAULT NULL,
  `link` varchar(500) DEFAULT NULL,
  `photo` varchar(50) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `username`, `password`, `dept_id`, `phone`, `address`, `batch_id`, `passingyear`, `cname`, `jposition`, `fb`, `link`, `photo`, `created_at`) VALUES
(18, 'Mim', 'alumni@gmail.com', '16103055', 'a075ad4853c68fa5dab8464a92fb06ef4e642134', 1, '+1 (466) ', 'Quia in ', 20, 'Spring-20', 'Datatrix', 'Junior Soft Engr', '', '', 'b6933a2a46.jpg', '2020-07-26 15:23:13'),
(40, 'Sakila', '16303029@iubat.edu', '16303029', '6bbf02ea9ba19a0c3caa280a9f630aa36a5cbd1b', 1, '+1 (756) 889-26', 'Uttara, Dhaka', 3, 'Summer 20', 'Datatrix', 'Soft Engr', 'https://www.facebook.com/chotto.bondhu.20', 'https://www.linkedin.com/feed/', '1292ab6ef6.jpg', '2020-08-15 12:17:17'),
(55, 'Imani Rivera', 'kodacezet@mailinator.com', 'byhakybig', 'ac748cb38ff28d1ea98458b16695739d7e90f22d', 3, '+1 (598) 946-90', 'Fugit non ipsum al', 8, '2016', 'CodeWeaver', 'Programmer', '', '', NULL, '2020-08-25 11:18:38'),
(60, 'Sayda Parvin', '16303030@iubat.edu', '16303030', 'd1fd3426df069e5df6f3678f3c4c3c2a50d3f490', 1, NULL, NULL, 3, 'Summer-20', 'CodeWeaver', 'Programmer', NULL, '', NULL, '2020-08-28 20:09:38'),
(63, 'logyxol', 'ligo@mailinator.com', 'vytata', 'ac748cb38ff28d1ea98458b16695739d7e90f22d', 2, NULL, NULL, 20, '1976', 'Datatrix', 'Software Engineer', NULL, '', NULL, '2020-08-29 12:22:33'),
(65, 'Topu', 'bosuh@mailinator.com', '16303039', 'ab5cfab93a33297da1a43bb49d6e7584a3c6874b', 10, NULL, NULL, 22, '2009', 'BrainStation', 'Project Manahger', NULL, '', NULL, '2020-08-29 13:35:56'),
(81, 'Lia', 'hiro@mailinator.com', 'Lia', '7c222fb2927d828af22f592134e8932480637c0d', 1, NULL, NULL, 5, '1986', 'NTL Ninja', 'Designer', NULL, '', NULL, '2020-08-29 16:19:39'),
(95, 'Lia', 'lia@gmail.com', '16103396', 'd423c24ca4621ba1c1bf9c68663f7aaf90ef017a', 1, '+1 (756) 889-26', 'Uttara', 22, '2019', 'Datatrix', 'Junior Soft Engr', 'https://www.facebook.com/', 'https://www.linkedin.com/', NULL, '2020-09-04 20:15:04');

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
-- Indexes for table `batches`
--
ALTER TABLE `batches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dept_id` (`dept_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `admin_id` (`admin_id`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `sposts`
--
ALTER TABLE `sposts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `sturequests`
--
ALTER TABLE `sturequests`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

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
-- AUTO_INCREMENT for table `batches`
--
ALTER TABLE `batches`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `sposts`
--
ALTER TABLE `sposts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `sturequests`
--
ALTER TABLE `sturequests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `uposts`
--
ALTER TABLE `uposts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jobs`
--
ALTER TABLE `jobs`
  ADD CONSTRAINT `jobs_ibfk_1` FOREIGN KEY (`dept_id`) REFERENCES `departments` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `jobs_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sposts`
--
ALTER TABLE `sposts`
  ADD CONSTRAINT `sposts_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `sposts_ibfk_2` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE CASCADE;

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
