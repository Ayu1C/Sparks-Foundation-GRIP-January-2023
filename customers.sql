-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2023 at 07:31 PM
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
-- Database: `customers`
--

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `SNo` int(2) NOT NULL,
  `FirstName` varchar(15) NOT NULL,
  `LastName` varchar(15) NOT NULL,
  `AccountNo` int(10) NOT NULL,
  `ContactNo` varchar(13) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `CurrentBalance` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`SNo`, `FirstName`, `LastName`, `AccountNo`, `ContactNo`, `Email`, `CurrentBalance`) VALUES
(1, 'Atul ', 'Baghel', 58370, '7834920423', 'atul.baghel@gmail.com', 22000),
(2, 'Arnav', 'Singh', 58371, '8309228610', 'arnavsingh02@gmail.com', 149000),
(3, 'Krish ', 'Rana', 58373, '9300217933', 'krishrana2000@gmail.com', 20089),
(4, 'Karishma', 'Sheikh', 58374, '7712081376', 'karishma.sheikh@gmail.com', 78400),
(5, 'Riti', 'Sharma', 58375, '8200163807', 'ritisharma05@gmail.com', 4200),
(6, 'Gunjan', 'Mahajan', 58376, '9956120075', 'gunjanmahajan@gmail.com', 65500),
(7, 'Ishika', 'Agrawal', 58377, '6744083268', 'ishikaagrawal20@gmail.com', 54000),
(8, 'John', 'Maxwell', 58378, '8067229756', 'john.maxwell@gmail.com', 178000),
(9, 'Naina', 'Ranka', 58379, '6700238383', 'rankanaina@gmail.com', 5600),
(10, 'Nick', 'George', 58380, '9400279100', 'nickgeorge03@gmail.com', 9603);

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `SNo` int(2) NOT NULL,
  `TransferFrom` int(10) NOT NULL,
  `TransferTo` int(10) NOT NULL,
  `Amount` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`SNo`, `TransferFrom`, `TransferTo`, `Amount`) VALUES
(0, 0, 0, 200),
(0, 0, 0, 200),
(0, 0, 0, 500),
(0, 0, 0, 500),
(0, 0, 0, 100),
(0, 0, 0, 600),
(0, 0, 0, 500),
(0, 0, 0, 100);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`AccountNo`),
  ADD UNIQUE KEY `S.No.` (`SNo`,`AccountNo`,`ContactNo`,`Email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
