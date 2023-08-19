-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 06, 2023 at 08:48 AM
-- Server version: 8.0.30
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `recipe`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `firstname` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`firstname`, `lastname`, `email`, `message`) VALUES
('abc', 'aaa', 'new@gmail.com', 'aaaaa'),
('bbb', 'ccc', 'new@gmail.com', 'nnnnn'),
('abc', 'b', 'super_admin@gmail.com', 'cvcccvcv');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `firstname` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `psw` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`firstname`, `lastname`, `email`, `psw`) VALUES
('dfdf', 'sadjsa', 'new@gmail.com', '11111'),
('abc', 'aaa', 'new@gmail.com', '$2y$10$rDSl3hT9qQmEgggSkGV.1uQq.211tgmEre.mL3M0blTwLXuk6aYw2'),
('abc', 'aaa', 'new@gmail.com', '$2y$10$kx6Z54AzmX6GKUodGXea8echdxCoZKLgEWs/5xPngXXBz.sCyACPi'),
('aaa', 'aaa', 'new@gmail.com', '$2y$10$5ezgYkAcJKtDhi5D5c/UseXicXrOOsbPhy1wDgpbBGi/XP6ryBU/u'),
('a', 'b', 'a@gmail.com', '$2y$10$qraulppmFz3mBHDzBExFwulG3jEwl4oiJHbh7uI6d9UW2CyU7n5La');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
