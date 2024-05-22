-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2023 at 09:59 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nithish_jagadeesan`
--

-- --------------------------------------------------------

--
-- Table structure for table `teamdetails`
--

CREATE TABLE `teamdetails` (
  `teamId` int(11) NOT NULL,
  `teamName` varchar(30) NOT NULL,
  `collegeName` varchar(30) NOT NULL,
  `collegeAddress` varchar(30) NOT NULL,
  `collegeCity` varchar(20) NOT NULL,
  `collegeProvince` varchar(30) NOT NULL,
  `student1Name` varchar(30) NOT NULL,
  `student1Email` varchar(30) NOT NULL,
  `student2Name` varchar(30) NOT NULL,
  `student2Email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teamdetails`
--

INSERT INTO `teamdetails` (`teamId`, `teamName`, `collegeName`, `collegeAddress`, `collegeCity`, `collegeProvince`, `student1Name`, `student1Email`, `student2Name`, `student2Email`) VALUES
(1, 'CSK', 'Conestoga', 'Larch Street', 'Waterloo', 'New Brunswick', 'Nithish', 'nit@gmail.com', 'Jagadeesan', 'jag@gmail.com'),
(2, 'MI', 'Conestoga', 'Queen Street', 'Doon', 'Ontario', 'Nithish', 'nithish@conestoga.com', 'John', 'johnwick@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `teamdetails`
--
ALTER TABLE `teamdetails`
  ADD PRIMARY KEY (`teamId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `teamdetails`
--
ALTER TABLE `teamdetails`
  MODIFY `teamId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
