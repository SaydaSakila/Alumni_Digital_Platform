-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 26, 2020 at 09:47 AM
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
  `date` date NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `name`, `content`, `date`, `created_at`) VALUES
(1, 'Iftar', 'Iftar Mahfil 2020', '2020-08-31', '2020-08-24 11:45:29'),
(4, 'Megan Norton', 'Quam <b>labore </b>odio odi.', '2020-08-25', '2020-08-24 13:18:40'),
(5, 'Sayda', '<p style=\"margin-bottom: 25px; font-family: Roboto; font-size: 15px;\">Department of CSE is organizing a seminar titled&nbsp;<span style=\"margin: 0px; padding: 0px; font-weight: 700;\">â€œ</span><span style=\"margin: 0px; padding: 0px; font-weight: 700;\">Industry 4.0 â€“ Technical Evolution on Career &amp; Skill Sets.â€</span>&nbsp;â€“ A Perspective view and Guidelines from Leading IT Organizations this 15th and 16th March 2020 at 10:00 AM to 10:00 PM IUBAT Conference Hall.</p><p style=\"margin-bottom: 25px; font-family: Roboto; font-size: 15px;\">In the seminar, each of the invited companies will present for 30 minutes in front of students, guests, faculty members, staff and other audiences.&nbsp;<span style=\"margin: 0px; padding: 0px; font-weight: 700;\">Our goal is to make our students aware of current industry trends, views and guidelines for them so that their skill sets are aligned to industry requirements.</span>&nbsp;Discussions may have but not limited to the following issues â€“</p>', '2020-08-26', '2020-08-24 13:32:54');

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
(4, 5, 40, 'Saunders Rowe Associates', 'Cross and Gilbert Traders', 'Bridges Melendez Inc', 'Lopez Mueller LLC', 'Roman Espinoza Trading', 'Delgado Schmidt Plc', 'Finley Duncan Traders', 'Luna Contreras Trading', '1974-06-12 00:00:00', '2020-08-24 22:49:38'),
(5, 10, 40, 'Moreno and Vega Associates', 'Jennings Ochoa Plc', 'Cochran and Lopez LLC', 'Kerr and Davenport LLC', 'Barber and Keith Associates', 'Clemons Mcmillan Plc', 'Kim and Morrow Traders', 'Vinson and Long Inc', '1970-10-01 00:00:00', '2020-08-25 10:13:43'),
(6, 3, 40, 'Garrett Holcomb Co', 'Mcgee Robbins Traders', 'Berry Dodson Plc', 'Lowery Frederick Trading', 'Nichols Cohen LLC', 'Adkins and Henry Co', 'Jacobs and Slater Co', 'Green and Mcclure LLC', '2004-04-28 00:00:00', '2020-08-25 10:13:47'),
(7, 6, 40, 'Hooper Contreras Inc', 'Noel Gaines LLC', 'Alston and Roman Trading', 'Ochoa Villarreal Trading', 'Stark and Rosales Plc', 'Mcdowell Mack Traders', 'Solis Strickland Associates', 'Pacheco Cash Plc', '2010-11-14 00:00:00', '2020-08-25 10:13:50'),
(8, 2, 40, 'Gallegos and Orr Trading', 'Kidd Kirby Co', 'Wilkins Woods Traders', 'Burt Parrish Associates', 'Jimenez and Dotson Co', 'Miles and Shaw Plc', 'Gentry and Trujillo Traders', 'Kirk and Barnett Associates', '2017-12-10 00:00:00', '2020-08-25 10:13:58'),
(9, 1, 40, 'Russo England Traders', '1 Year', 'Wilkinson Richmond Associates', 'Uttara', 'Tanner George Inc', 'Part Time', 'Participate in the entire application lifecycle, focusing on coding and debugging\r\n\r\nWrite clean code to develop functional web applications\r\n\r\nTroubleshoot and debug applications', 'Fuller and Shepherd Traders', '2020-09-03 00:00:00', '2020-08-25 10:14:07'),
(10, 1, 40, 'Software Engr.', 'More Than 3 Years', 'CodeWeavers', 'Uttara, Dhaka', '20,000', 'Full Time', 'Senior Software Engineer', 'Graduate in CSE', '2020-09-05 00:00:00', '2020-08-26 09:49:15');

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
(16, 14, 32, 'Laborum Itaque erro', '  <span style=\"font-family: \"Comic Sans MS\";\">Adipisci </span><b><font color=\"#000000\" style=\"background-color: rgb(255, 255, 0);\">quae </font></b><span style=\"font-family: \"Comic Sans MS\";\">quidem.</span>', NULL, '2020-08-18 11:19:06'),
(18, 15, 32, 'Rerum et velit fugia', '    This is Admin Pannel', NULL, '2020-08-18 11:31:51');

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
(4, 15, 8, 'Elit eveniet ut qu', 'Dolorem <font color=\"#000000\" style=\"background-color: rgb(255, 255, 0);\">ipsum </font>animi.', NULL, '2020-08-19 10:24:42'),
(5, 16, 8, 'Cum officia nobis ve', 'Itaque est <b>dolore </b>ut.', NULL, '2020-08-19 11:08:25'),
(6, 14, 8, 'Bloggs', '  This is Students Blogg', NULL, '2020-08-19 14:03:44');

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
  `dept_id` int(11) NOT NULL,
  `password` varchar(200) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(200) NOT NULL,
  `batch` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `username`, `email`, `universityid`, `dept_id`, `password`, `phone`, `address`, `batch`, `created_at`) VALUES
(6, 'Sayda', '16303030', '16303030@iubat.edu', 16303030, 0, '878c4b1e07b378c2c35fe121d175adff8ba7e970', '+1 (756) 889-2651', 'Uttara', 'Fall 16', '2020-08-13 21:22:09'),
(8, 'Sakilaaa', '16303029', '16303029@iubat.edu', 16303029, 0, '6bbf02ea9ba19a0c3caa280a9f630aa36a5cbd1b', '+1 (756) 889-2651', 'Uttara, Dhaka', 'Fall 16', '2020-08-15 12:14:09'),
(12, 'luno@mailinator.com', 'cubefuki', 'kogizofu@mailinator.com', NULL, 0, 'ac748cb38ff28d1ea98458b16695739d7e90f22d', '', '', 'Iure neque voluptas ', '2020-08-17 11:22:47'),
(13, 'sugyde@mailinator.com', 'fepefu', 'zygepaked@mailinator.com', NULL, 9, 'ac748cb38ff28d1ea98458b16695739d7e90f22d', '', '', 'Et est soluta dolor ', '2020-08-25 11:10:47'),
(14, 'Adrienne Bush', 'vafivysyni', 'dujemy@mailinator.com', 0, 4, 'ac748cb38ff28d1ea98458b16695739d7e90f22d', '+1 (202) 385-7575', 'Cupiditate ea aliqua', 'Sed eum sit id ex f', '2020-08-25 11:21:59'),
(15, 'fibu@mailinator.com', 'hubihatunu', 'fofexyl', NULL, 7, 'ac748cb38ff28d1ea98458b16695739d7e90f22d', '', '', 'Qui aut ipsum exerc', '2020-08-26 07:03:18'),
(16, 'lecose@mailinator.com', 'nasucyh', 'gyvyloruw', NULL, 1, 'ac748cb38ff28d1ea98458b16695739d7e90f22d', '', '', 'Rerum ut cupidatat c', '2020-08-26 07:04:54');

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
(16, 17, 18, 'Website', 'helloo', NULL, '2020-08-18 13:57:14'),
(25, 14, 40, 'Facebook', 'Voluptas&nbsp;<span style=\"font-weight: bolder;\">reprehender</span>.', NULL, '2020-08-19 17:37:56'),
(27, 15, 40, 'Blogger', '   <p class=\"MsoNormal\" style=\"margin-bottom: 7.5pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; vertical-align: baseline;\"><span style=\"font-size:12.0pt;font-family:&quot;Times New Roman&quot;,serif;\r\nmso-fareast-font-family:&quot;Times New Roman&quot;\">The substr() function allows 3\r\nparameters or arguments out of which two are mandatory and one is optional.<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin: 0in 0in 0.0001pt 27pt; text-indent: -0.25in; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; vertical-align: baseline;\"><!--[if !supportLists]--><span style=\"font-size:12.0pt;font-family:&quot;Times New Roman&quot;,serif;\r\nmso-fareast-font-family:&quot;Times New Roman&quot;\">1.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;\">&nbsp;&nbsp;&nbsp;&nbsp; </span></span><!--[endif]--><b><span style=\"font-size:12.0pt;font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:\r\n&quot;Times New Roman&quot;;border:none windowtext 1.0pt;mso-border-alt:none windowtext 0in;\r\npadding:0in\">string_name:</span></b><span style=\"font-size:12.0pt;font-family:\r\n&quot;Times New Roman&quot;,serif;mso-fareast-font-family:&quot;Times New Roman&quot;\">&nbsp;In\r\nthis parameter, we pass the original string or the string that needs to cut or\r\nmodified. This is a mandatory parameter<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin: 0in 0in 0.0001pt 27pt; text-indent: -0.25in; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; vertical-align: baseline;\"><!--[if !supportLists]--><span style=\"font-size:12.0pt;font-family:&quot;Times New Roman&quot;,serif;\r\nmso-fareast-font-family:&quot;Times New Roman&quot;\">2.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;\">&nbsp;&nbsp;&nbsp;&nbsp; </span></span><!--[endif]--><b><span style=\"font-size:12.0pt;font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:\r\n&quot;Times New Roman&quot;;border:none windowtext 1.0pt;mso-border-alt:none windowtext 0in;\r\npadding:0in\">start_position:</span></b><span style=\"font-size:12.0pt;\r\nfont-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:&quot;Times New Roman&quot;\">&nbsp;This\r\nrefers to the position of the original string from where the part needs to be\r\nextracted. In this, we pass an integer. If the integer is positive it refers to\r\nthe start of the position in the string from the beginning. If the integer is\r\nnegative then it refers to the start of the position from the end of the\r\nstring. This is also a mandatory parameter.<o:p></o:p></span></p><p>\r\n\r\n\r\n\r\n\r\n\r\n</p><p class=\"MsoNormal\" style=\"margin: 0in 0in 0.0001pt 27pt; text-indent: -0.25in; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; vertical-align: baseline;\"><!--[if !supportLists]--><span style=\"font-size:12.0pt;font-family:&quot;Times New Roman&quot;,serif;\r\nmso-fareast-font-family:&quot;Times New Roman&quot;\">3.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;\">&nbsp;&nbsp;&nbsp;&nbsp; </span></span><!--[endif]--><b><span style=\"font-size:12.0pt;font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:\r\n&quot;Times New Roman&quot;;border:none windowtext 1.0pt;mso-border-alt:none windowtext 0in;\r\npadding:0in\">string_length_to_cut:</span></b><span style=\"font-size:12.0pt;\r\nfont-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:&quot;Times New Roman&quot;\">&nbsp;This\r\nparameter is optional and of integer type. This refers to the length of the\r\npart of the string that needs to be cut from the original string. If the\r\ninteger is positive, it refers to start from start_position and extract length\r\nfrom the beginning. If the integer is negative then it refers to start from\r\nstart_position and extract length from the end of the string. If this parameter\r\nis not passed, then the substr() function will return the string starting from\r\nstart_position till the end of string.<o:p></o:p></span></p>', NULL, '2020-08-20 01:33:49'),
(28, 16, 40, 'Image', 'hxfjfxjhvjndtnhgchfxgjxrfyuxfyyfiyitf', '', '2020-08-26 12:11:35'),
(29, 17, 40, 'Photo', 'chffxghh', '', '2020-08-26 12:12:39');

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
  `batch` varchar(200) NOT NULL,
  `passingyear` varchar(200) NOT NULL,
  `cname` varchar(200) DEFAULT NULL,
  `jposition` varchar(200) DEFAULT NULL,
  `photo` varchar(50) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `username`, `password`, `dept_id`, `phone`, `address`, `batch`, `passingyear`, `cname`, `jposition`, `photo`, `created_at`) VALUES
(18, 'Mim', 'alumni@gmail.com', '16303039', 'ab5cfab93a33297da1a43bb49d6e7584a3c6874b', 0, '+1 (466) ', 'Quia in ', 'fall 19', 'fall 24', 'Datatrix', 'Junior SOft Engr', NULL, '2020-07-26 15:23:13'),
(40, 'Lia', '16303029@iubat.edu', '16303029', '6bbf02ea9ba19a0c3caa280a9f630aa36a5cbd1b', 0, '+1 (756) 889-26', 'Uttara, Dhaka', 'Fall 16', 'Summer 20', 'Datatrix', 'Junior Soft Engr', '', '2020-08-15 12:17:17'),
(43, 'Grady Park', 'kihufyly@mailinator.com', 'wupicabe', 'ac748cb38ff28d1ea98458b16695739d7e90f22d', 0, '+1 (141) 103-92', 'Quidem in veritatis ', 'Ipsa dignissimos am', '2004', NULL, NULL, NULL, '2020-08-17 10:50:52'),
(45, 'Chase White', 'zaqabis@mailinator.com', 'cejory', 'ac748cb38ff28d1ea98458b16695739d7e90f22d', 0, '+1 (835) 378-56', 'Labore dicta sit iru', 'Similique obcaecati ', '1997', NULL, NULL, NULL, '2020-08-17 10:52:36'),
(46, 'Jillian Ware', 'xike@mailinator.com', 'pareda', 'ac748cb38ff28d1ea98458b16695739d7e90f22d', 0, '+1 (503) 944-96', 'Non laborum Quia ut', 'Adipisci iste aut qu', '1986', NULL, NULL, NULL, '2020-08-17 10:54:09'),
(47, 'Astra Walsh', 'dyhiwe@mailinator.com', 'gizoji', 'ac748cb38ff28d1ea98458b16695739d7e90f22d', 0, '+1 (202) 493-87', 'Velit amet omnis ac', 'Voluptas occaecat pa', '2004', NULL, NULL, NULL, '2020-08-17 10:55:57'),
(48, 'Maia Lindsay', 'tepivuf@mailinator.com', 'libur', 'ac748cb38ff28d1ea98458b16695739d7e90f22d', 0, '+1 (216) 181-53', 'Non vel voluptatum e', 'Et qui dolore ut ea ', '1991', NULL, NULL, NULL, '2020-08-17 10:56:20'),
(49, 'Samuel Green', 'qykinovag@mailinator.com', 'hibiwaw', 'ac748cb38ff28d1ea98458b16695739d7e90f22d', 0, '+1 (834) 747-23', 'Similique modi culpa', 'Maiores eum vitae iu', '2017', NULL, NULL, NULL, '2020-08-17 10:58:20'),
(52, 'Rifat', '17103031@iubat.edu', '17103031', '7c222fb2927d828af22f592134e8932480637c0d', 0, NULL, NULL, 'Spring 20', '2030', NULL, NULL, NULL, '2020-08-18 12:34:57'),
(54, 'jahan', 'rojekysem@mailinator.com', 'pyfyse', '7c222fb2927d828af22f592134e8932480637c0d', 1, NULL, NULL, 'Consequatur exercit', '1977', NULL, NULL, NULL, '2020-08-25 11:01:39'),
(55, 'Imani Rivera', 'kodacezet@mailinator.com', 'byhakybig', 'ac748cb38ff28d1ea98458b16695739d7e90f22d', 3, '+1 (598) 946-90', 'Fugit non ipsum al', 'Ipsam vel aut non qu', '2016', NULL, NULL, NULL, '2020-08-25 11:18:38'),
(56, 'ducocu@mailinator.com', 'hakywu@123', 'harelijaw', 'ac748cb38ff28d1ea98458b16695739d7e90f22d', 2, NULL, NULL, 'Rem voluptatem sit ', '1985', NULL, NULL, NULL, '2020-08-26 07:01:03'),
(57, 'nipodabyb@mailinator.com', 'abcde@example.com', 'zuvelo', 'ac748cb38ff28d1ea98458b16695739d7e90f22d', 1, NULL, NULL, 'Id optio minima ver', '2016', NULL, NULL, NULL, '2020-08-26 07:05:27');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `sposts`
--
ALTER TABLE `sposts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `uposts`
--
ALTER TABLE `uposts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

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
