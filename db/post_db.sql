-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2019 at 07:40 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.1.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `post_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `description`) VALUES
(2, 'CodeIgniter Features 2', 'Some of the important features of CodeIgniter are listed below −\r\n\r\nModel-View-Controller Based System\r\n\r\nExtremely Light Weight\r\n\r\nFull Featured database classes with support for several platforms.\r\n\r\nQuery Builder Database Support\r\n\r\nForm and Data Validation\r\n\r\nSecurity and XSS Filtering\r\n\r\nSession Management', 'As the name indicates the Application folder contains all the code of your application that you are building. This is the folder where you will develop your project. The Application folder contains several other folders, which are explained below'),
(3, 'CodeIgniter Features 3', 'Some of the important features of CodeIgniter are listed below −\r\n\r\nModel-View-Controller Based System\r\n\r\nExtremely Light Weight\r\n\r\nFull Featured database classes with support for several platforms.\r\n\r\nQuery Builder Database Support\r\n\r\nForm and Data Validation\r\n\r\nSecurity and XSS Filtering\r\n\r\nSession Management', 'As the name indicates the Application folder contains all the code of your application that you are building. This is the folder where you will develop your project. The Application folder contains several other folders, which are explained below'),
(10, 'a', 'b', 'c'),
(18, 'b', 'b', 'b'),
(20, 'a', 'a', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `posts_extra`
--

CREATE TABLE `posts_extra` (
  `id` int(11) NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tags` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `keyword` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `posts_extra`
--

INSERT INTO `posts_extra` (`id`, `url`, `tags`, `keyword`) VALUES
(2, 'http://localhost/codeigniter/posts', 'Code, Crud', 'Codeigniter'),
(3, 'http://localhost/codeigniter/posts', 'Code, Crud', 'Codeigniter'),
(10, 'd', 'e', 'f'),
(18, 'b', 'b', 'b'),
(20, 'a', 'a', 'a');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts_extra`
--
ALTER TABLE `posts_extra`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `posts_extra`
--
ALTER TABLE `posts_extra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
