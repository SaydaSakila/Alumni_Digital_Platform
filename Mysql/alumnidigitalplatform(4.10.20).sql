-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2020 at 08:48 AM
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
(1, 'Sayda Parvin', 'admin@gmail.com', 'Admin', '6bbf02ea9ba19a0c3caa280a9f630aa36a5cbd1b', '2020-09-18 23:15:51');

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
  `hide` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `user_type`, `comment`, `post_id`, `hide`, `created_at`) VALUES
(9, 18, 'users', 'good', 34, 0, '2020-09-11 09:57:04'),
(11, 8, 'students', 'good blog', 8, 0, '2020-09-11 10:06:24'),
(14, 8, 'students', 'Blog commenting is defined as a relationship between blogs, bloggers and blog readers. It is a great way to exchange ideas, thoughts or opinions about what people feel for a particular topic or a blog post. Blog comments helps the blog to attract traffic and makes it social.', 45, 0, '2020-09-11 11:14:01'),
(15, 40, 'users', 'hjghk', 8, 0, '2020-09-11 11:33:17'),
(16, 40, 'users', 'Blog commenting is defined as a relationship between blogs, bloggers and blog readers. It is a great way to exchange ideas, thoughts or opinions about what people feel for a particular topic or a blog post. Blog comments helps the blog to attract traffic and makes it social.', 45, 0, '2020-09-11 15:03:02'),
(23, 40, 'users', 'fghjd', 0, 0, '2020-09-12 21:21:04'),
(25, 18, 'users', 'ghgfx\r\n', 29, 0, '2020-09-12 21:34:36'),
(26, 18, 'users', 'fcxh', 45, 0, '2020-09-12 21:35:45'),
(27, 18, 'users', 'sgch', 31, 0, '2020-09-12 21:39:00'),
(28, 40, 'users', 'yfgy', 8, 0, '2020-09-12 21:42:46'),
(29, 40, 'users', 'cv', 29, 0, '2020-09-12 21:53:51'),
(30, 8, 'students', 'gjcgh', 8, 0, '2020-09-12 21:55:39'),
(31, 8, 'students', 'wow', 9, 0, '2020-09-12 21:57:27'),
(32, 40, 'users', 'nice blog', 9, 0, '2020-09-12 22:01:56'),
(39, 40, 'users', 'gfhfgh', 45, 1, '2020-09-19 13:34:42'),
(52, 40, 'users', 'goooood', 45, 0, '2020-09-20 17:24:44'),
(54, 40, 'users', 'good blog\r\n', 9, 0, '2020-09-20 18:27:50'),
(55, 8, 'students', 'informative blog', 45, 0, '2020-09-20 18:31:28'),
(57, 14, 'students', 'wow', 9, 0, '2020-09-28 20:23:52'),
(58, 40, 'users', 'Nice Blog!', 28, 0, '2020-10-03 22:58:45'),
(59, 8, 'students', 'Informative', 46, 0, '2020-10-03 23:20:45');

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
  `user_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `content` text NOT NULL,
  `date` datetime NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `dept_id` text NOT NULL,
  `batch_id` text NOT NULL,
  `is_show` int(11) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `user_id`, `name`, `content`, `date`, `status`, `dept_id`, `batch_id`, `is_show`, `photo`, `created_at`) VALUES
(45, 18, 'Convocation-2021', 'dgchfh', '2020-09-03 18:46:00', 1, '[\"1\",\"2\"]', '[\"3\",\"4\",\"5\",\"6\"]', 1, '', '2020-09-03 17:45:52'),
(46, 18, 'sakila', '  hg', '2020-09-04 00:00:00', 0, '[\"2\",\"3\"]', '[\"2\",\"4\"]', 1, '', '2020-09-03 18:40:24'),
(47, 40, 'Seminar on ML', '  Dicta fuga Omnis vo', '2020-10-28 00:00:00', 1, '[\"1\",\"5\",\"6\",\"7\",\"8\",\"10\"]', '[\"3\",\"9\",\"12\",\"14\",\"15\",\"18\",\"23\",\"27\",\"29\",\"31\"]', 1, '', '2020-09-05 12:41:12'),
(48, 40, 'Foundation Day Celebration', '  Ea quae omnis nulla ', '2020-11-20 11:00:00', 1, '[\"2\",\"3\",\"4\",\"5\",\"6\",\"7\",\"9\"]', '[\"6\",\"7\",\"9\",\"11\",\"12\",\"14\",\"15\",\"16\",\"17\",\"18\",\"19\",\"20\",\"21\",\"24\",\"26\",\"27\"]', 0, '', '2020-09-05 19:28:31'),
(53, 18, 'Sakila', '  <p>df dhd</p>', '2020-09-12 10:00:00', 0, '[\"5\",\"6\"]', '[\"14\",\"15\"]', 1, '', '2020-09-05 19:55:06'),
(54, 40, 'Dua Mahfil', '    Eius sunt exercitat', '2020-10-09 17:00:00', 0, '[\"1\",\"3\"]', '[\"3\",\"19\",\"26\"]', 1, '', '2020-09-06 19:29:54'),
(57, 40, 'Get Together of Fall-163', '     <b>Consequat</b>. Sed in vo.', '2020-10-29 00:00:00', 1, '[\"1\",\"2\"]', '[\"2\"]', 1, '', '2020-09-28 16:03:37'),
(62, 40, 'Career Guideline for Final Year Student', '<p>Respected Alumni will come and give their valuable guideline for upcoming graduate.</p>', '2020-10-26 12:30:00', 1, '[\"1\"]', '[\"22\"]', 1, '', '2020-10-03 23:27:07'),
(64, 0, 'Iftar Mahfil-2020', 'Iftaer Mahfil for all student', '2020-10-31 17:30:00', 1, '[\"1\"]', '[\"2\",\"3\",\"4\",\"5\",\"6\",\"7\",\"8\",\"9\",\"10\",\"11\",\"12\",\"13\",\"14\",\"15\",\"16\",\"17\",\"18\",\"19\"]', 1, '', '2020-10-04 11:36:17');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `title` varchar(30) NOT NULL,
  `image` varchar(50) NOT NULL,
  `status` int(11) NOT NULL,
  `is_show` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `user_id`, `title`, `image`, `status`, `is_show`, `created_at`) VALUES
(11, 40, 'Convocation', 'e717c5cbe4.jpg', 0, 0, '2020-09-27 23:19:18'),
(14, 40, 'Alumni Day', 'ce280431a1.jpg', 0, 0, '2020-09-27 23:21:15'),
(15, 40, 'Reunion', '41f03764b5.jpg', 0, 0, '2020-09-27 23:22:16'),
(16, 18, 'Farewell', '25da9db6b7.jpg', 0, 0, '2020-09-27 23:22:42'),
(17, 18, '1310 Squad', '191b1afcca.jpg', 0, 0, '2020-09-27 23:24:33'),
(18, 18, 'Our Pride', '063f9636dc.jpg', 0, 0, '2020-09-27 23:27:21'),
(21, 40, 'Blogger', 'a08e750767.png', 1, 1, '2020-09-27 23:58:52'),
(22, 40, 'ICFL-2019', 'aec5c22b06.jpg', 0, 0, '2020-09-28 15:37:22'),
(23, 40, 'Bangladesh', '3bb9d9e8f7.png', 1, 1, '2020-09-28 20:09:16'),
(24, 40, 'Website', '61381f8910.png', 1, 1, '2020-09-28 20:11:18'),
(35, 40, 'Alumni Day 2020', 'a6696f4577.jpg', 0, 0, '2020-09-28 22:48:03'),
(36, 40, 'Alumni Day 2020', '82529b3992.jpg', 0, 1, '2020-09-28 22:49:37'),
(39, 40, 'NCPC', '3043775bbb.jpg', 0, 1, '2020-09-28 22:51:59'),
(40, 40, 'Social Media', '4b6594d9d6.png', 0, 1, '2020-10-04 10:50:38');

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
(3, 1, 40, 'Programmer', 'No Need', 'Datatrix', 'Mirpur-10', '15000-20000', 'Full Time', ' Should Be able to solve programming related Problem', 'Graduate from CSE', '2020-11-02 00:00:00', '2020-08-24 19:51:01'),
(9, 1, 18, 'System Administrator', '1 Year', 'Wilkinson Richmond Associates', 'Uttara', '30000/=', 'Part Time', '  Participate in the entire application lifecycle, focusing on coding and debugging\r\n\r\nWrite clean code to develop functional web applications\r\n\r\nTroubleshoot and debug applications', 'Fuller and Shepherd Traders', '2020-10-27 00:00:00', '2020-08-25 10:14:07'),
(10, 1, 65, 'Software Engr.', 'More Than 3 Years', 'CodeWeavers', 'Uttara, Dhaka', '20,000', 'Full Time', '  Senior Software Engineer', 'Graduate in CSE', '2020-10-29 00:00:00', '2020-08-26 09:49:15'),
(11, 2, 40, 'Junior Officer', 'Mccormick Landry Inc', 'Ellison and Hodges Associates', 'Blevins and Wyatt Trading', '12000/=', 'part Time', '    Eum quia quibusdam i', 'Strong and Santiago Trading', '2020-11-01 00:00:00', '2020-08-27 12:49:24');

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
(37, 'zejyleri', 'gezytybura@mailinator.com', 'vefisi', 'ac748cb38ff28d1ea98458b16695739d7e90f22d', 1, 2, '1995', 'University ID: vefisi, Department ID: 1, Batch ID: 2 and Passing Year: 1995 would like to request an account for Alumni.', '2020-09-03 20:10:22');

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
(8, 15, 8, 'Website', '<p>dzgfdz gd</p>', '470de6f20f.png', '2020-08-28 13:15:00'),
(9, 14, 8, 'Website', ' <p><span style=\"color: rgb(34, 34, 34); font-family: arial, sans-serif; font-size: 14px;\">A blog is a discussion or informational website published on the World Wide Web consisting of discrete, often informal diary-style text entries. Posts are typically displayed in reverse chronological order, so that the most recent post appears first, at the top of the web page</span><br></p>', '', '2020-09-12 21:57:20');

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
(8, 'Sayda', '16303030', '16303029@iubat.edu', 1, '6bbf02ea9ba19a0c3caa280a9f630aa36a5cbd1b', '+1 (756) 889-2651', 'Sector-10, Uttara, Dhaka', 22, '', '2020-08-15 12:14:09'),
(14, 'Topu', '16303039', 'dujemy@mailinator.com', 1, 'ab5cfab93a33297da1a43bb49d6e7584a3c6874b', '+1 (202) 385-7575', 'Cupiditate ea aliqua', 24, '', '2020-08-25 11:21:59'),
(18, 'Quinn Robles', '19303030', 'dosihywi@mailinator.com', 1, 'ac748cb38ff28d1ea98458b16695739d7e90f22d', '+1 (727) 738-5253', 'Aliquip ut dolorem e', 31, '', '2020-08-26 17:06:41');

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

--
-- Dumping data for table `sturequests`
--

INSERT INTO `sturequests` (`id`, `name`, `email`, `username`, `password`, `dept_id`, `batch_id`, `message`, `created_at`) VALUES
(7, 'vymihony', 'varozah@mailinator.com', 'haxab', 'ac748cb38ff28d1ea98458b16695739d7e90f22d', 6, 6, 'University ID: haxab, Department ID: 6 and Batch ID: 6  would like to request an account for Student.', '2020-09-25 12:30:01');

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
(28, 16, 18, 'blog', '  hxfjfxjhvjndtnhgchfxg', '', '2020-08-26 12:11:35'),
(29, 17, 18, 'Photo', 'chffxghh', '', '2020-08-26 12:12:39'),
(31, 14, 18, 'Blogger', 'new <b><u><font color=\"#000000\" style=\"background-color: rgb(255, 255, 0);\">image</font></u></b>', '', '2020-08-26 18:22:33'),
(34, 15, 40, 'Job Market', '   Sunt, vel <b>quis </b>excep.', '', '2020-08-26 18:32:01'),
(37, 16, 40, 'Impedit voluptatem', 'Aut quia <b>reprehender</b>.', '521717e01d.png', '2020-08-27 13:00:09'),
(45, 15, 40, 'Work It Daily', ' Amet, <b>debitis </b>volupt.', '599244fff4.jpg', '2020-08-30 23:53:44'),
(46, 17, 40, 'Social Media', '<p>Facebook</p>', 'dc91a54469.png', '2020-10-03 23:02:34');

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
(18, 'Mim', 'mim@gmail.com', '16103055', 'a075ad4853c68fa5dab8464a92fb06ef4e642134', 1, '+1 (466) ', 'Quia in ', 20, 'Spring-20', 'Datatrix', 'Junior Soft Engr', 'https://www.facebook.com/suraiya.mim.12', 'https://www.linkedin.com/', 'c36706581b.jpg', '2020-07-26 15:23:13'),
(40, 'Sakila', 'parvin@gmail.com', '16303020', '6bbf02ea9ba19a0c3caa280a9f630aa36a5cbd1b', 1, '+8801622064668', '1283, Begum Rokyea Sarani. Mirpur-10, Dhaka-1216', 3, 'Summer 20', 'Datatrix Soft', 'Soft Engr', 'https://www.facebook.com/chotto.bondhu.20', 'https://www.linkedin.com/feed/', '', '2020-08-15 12:17:17'),
(60, 'Sumi', '16303030@iubat.edu', '16303030', 'd1fd3426df069e5df6f3678f3c4c3c2a50d3f490', 1, NULL, NULL, 3, 'Summer-20', 'CodeWeaver', 'Programmer', NULL, '', NULL, '2020-08-28 20:09:38'),
(65, 'Topu', 'topu@mailinator.com', '16303039', 'ab5cfab93a33297da1a43bb49d6e7584a3c6874b', 10, '01689228860', 'Uttara, Dhaka', 22, 'Summer-20', 'CodeWeaver', 'Project Manager', 'https://www.facebook.com/tofiqurrahman.topu', 'https://www.linkedin.com/', '48b2aa81aa.png', '2020-08-29 13:35:56'),
(96, 'Jesmoon Jahan', 'lia@gmail.com', '16303396', 'af0d2f0715fa7ae9fd7e70c83d65ba75246fcd8a', 1, '01622120631', 'Uttara, Dhaka', 20, 'Fall-19', 'ThemeXpert', 'Content Writer', 'https://www.facebook.com/lia.jahan.129', 'https://www.linkedin.com/', '3d0540bc97.jpg', '2020-09-28 23:00:23');

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
-- Indexes for table `images`
--
ALTER TABLE `images`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `sposts`
--
ALTER TABLE `sposts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `sturequests`
--
ALTER TABLE `sturequests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `uposts`
--
ALTER TABLE `uposts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

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
