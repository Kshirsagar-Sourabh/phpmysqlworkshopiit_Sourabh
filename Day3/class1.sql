-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 01, 2020 at 07:37 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `result`
--

-- --------------------------------------------------------

--
-- Table structure for table `class1`
--

CREATE TABLE `class1` (
  `unique numeric id` int(30) NOT NULL,
  `id` bigint(30) NOT NULL,
  `name` char(80) NOT NULL,
  `sub1` int(3) NOT NULL,
  `sub2` int(3) NOT NULL,
  `sub3` int(3) NOT NULL,
  `sub4` int(3) NOT NULL,
  `sub5` int(3) NOT NULL,
  `total obtained` int(5) NOT NULL,
  `total marks` int(5) NOT NULL,
  `percentage` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `class1`
--

INSERT INTO `class1` (`unique numeric id`, `id`, `name`, `sub1`, `sub2`, `sub3`, `sub4`, `sub5`, `total obtained`, `total marks`, `percentage`) VALUES
(1, 1, 'Sourabh Kshirsagar', 100, 60, 89, 98, 98, 400, 500, 90),
(2, 2, 'Sahil', 12, 12, 12, 12, 12, 60, 500, 12),
(3, 109, 'Atharva', 76, 76, 90, 95, 100, 437, 500, 87.4),
(4, 23, 'Damyanti', 98, 100, 100, 69, 89, 456, 500, 91.2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `class1`
--
ALTER TABLE `class1`
  ADD PRIMARY KEY (`unique numeric id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `class1`
--
ALTER TABLE `class1`
  MODIFY `unique numeric id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
