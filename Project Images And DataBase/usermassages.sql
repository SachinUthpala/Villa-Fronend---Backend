-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2023 at 04:10 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `villa`
--

-- --------------------------------------------------------

--
-- Table structure for table `usermassages`
--

CREATE TABLE `usermassages` (
  `Mid` int(11) NOT NULL,
  `UserMail` varchar(100) NOT NULL,
  `UserName` varchar(100) NOT NULL,
  `Massage` varchar(100) NOT NULL,
  `SubmittedDate` varchar(100) NOT NULL,
  `read` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usermassages`
--

INSERT INTO `usermassages` (`Mid`, `UserMail`, `UserName`, `Massage`, `SubmittedDate`, `read`) VALUES
(1, 'Sachin', 'Sachin@gmail.com', 'Hello This is 1st Msg', '12/23/2023', 0),
(2, 'Sachin', 'Sachin@gmail.com', 'second massage', '12/23/2023', 1),
(3, 'Sachin', 'Sachin@gmail.com', '11111', '12/27/2023', 0),
(4, 'Sachin', 'Sachin@gmail.com', '11111111111111', '12/27/2023', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `usermassages`
--
ALTER TABLE `usermassages`
  ADD PRIMARY KEY (`Mid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `usermassages`
--
ALTER TABLE `usermassages`
  MODIFY `Mid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
