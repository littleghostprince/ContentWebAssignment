-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 13, 2019 at 11:52 AM
-- Server version: 10.3.17-MariaDB-0+deb10u1
-- PHP Version: 7.3.9-1~deb10u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `content_data`
--

-- --------------------------------------------------------

--
-- Table structure for table `Main`
--

CREATE TABLE `Main` (
  `id` int(11) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `main_theme` varchar(20) NOT NULL,
  `main_title` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Main`
--

INSERT INTO `Main` (`id`, `user_name`, `password`, `main_theme`, `main_title`) VALUES
(1, 'admin', 'password', 'default ', 'Test Website');

-- --------------------------------------------------------

--
-- Table structure for table `Main_Pages`
--

CREATE TABLE `Main_Pages` (
  `id` int(11) NOT NULL,
  `user_name_id` int(11) NOT NULL,
  `page_name` varchar(20) NOT NULL,
  `content` varchar(500) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `sub_category` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Main_Pages`
--

INSERT INTO `Main_Pages` (`id`, `user_name_id`, `page_name`, `content`, `photo`, `sub_category`) VALUES
(1, 1, 'Home', 'This is my Home page.', 'https://thenypost.files.wordpress.com/2019/07/depot.jpg?quality=90&strip=all&w=618&h=410&crop=1', 4);

-- --------------------------------------------------------

--
-- Table structure for table `Sub_Pages`
--

CREATE TABLE `Sub_Pages` (
  `id` int(11) NOT NULL,
  `main_page_id` int(11) NOT NULL,
  `page_name` varchar(20) NOT NULL,
  `content` varchar(500) NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Sub_Pages`
--

INSERT INTO `Sub_Pages` (`id`, `main_page_id`, `page_name`, `content`, `photo`) VALUES
(4, 1, 'History', 'This is the History Page.', 'https://images-na.ssl-images-amazon.com/images/I/71mglRoZBKL._SX425_.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Main`
--
ALTER TABLE `Main`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Main_Pages`
--
ALTER TABLE `Main_Pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Sub_Pages`
--
ALTER TABLE `Sub_Pages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Main`
--
ALTER TABLE `Main`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `Main_Pages`
--
ALTER TABLE `Main_Pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `Sub_Pages`
--
ALTER TABLE `Sub_Pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
