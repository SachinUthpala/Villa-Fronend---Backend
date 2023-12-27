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

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(11) NOT NULL,
  `name` varchar(111) NOT NULL,
  `email` varchar(111) NOT NULL,
  `password` varchar(111) NOT NULL,
  `signup_date` varchar(122) NOT NULL,
  `isAdmin` tinyint(1) NOT NULL DEFAULT 0,
  `Img` varchar(2222) NOT NULL DEFAULT 'dUser.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `name`, `email`, `password`, `signup_date`, `isAdmin`, `Img`) VALUES
(21, 'Sachin', 'Sachin@gmail.com', 'Sachin-123', '12/27/2023', 1, 'Img-658c3614cdbe18.75646805.png'),
(22, 'Uthpala', 'Uthpala@gmail.com', 'Uthpala123', '12/27/2023', 0, 'dUser.jpg'),
(23, 'Test', 'Test@gmail.com', 'Testing', '12/27/2023', 0, 'Img-658c356ee71cc8.20061181.jpg'),
(24, 'Amila', 'Amila@gmail.com', 'Amila', '12/27/2023', 0, 'dUser.jpg'),
(25, 'Kalum', 'k@gmail.com', 'KKK', '12/27/2023', 0, 'dUser.jpg'),
(26, 'p', 'p@gmail.com', 'ppappa', '12/27/2023', 0, 'dUser.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `usermassages`
--
ALTER TABLE `usermassages`
  ADD PRIMARY KEY (`Mid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `usermassages`
--
ALTER TABLE `usermassages`
  MODIFY `Mid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
