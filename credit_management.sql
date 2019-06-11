-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2018 at 06:18 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `credit_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `transfers`
--

CREATE TABLE `transfers` (
  `TransferID` int(20) NOT NULL,
  `SenderID` varchar(20) NOT NULL,
  `ReceiverID` varchar(20) NOT NULL,
  `Date` date NOT NULL,
  `Transferred_Credits` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transfers`
--

INSERT INTO `transfers` (`TransferID`, `SenderID`, `ReceiverID`, `Date`, `Transferred_Credits`) VALUES
(17, '102', '103', '2018-12-20', 40),
(18, '105', '107', '2018-12-20', 60),
(19, '109', '102', '2018-12-20', 32),
(20, '102', '105', '2018-12-20', 70),
(21, '102', '105', '2018-12-20', 70),
(22, '110', '105', '2018-12-20', 15),
(23, '110', '105', '2018-12-20', 1),
(24, '110', '105', '2018-12-20', 1),
(25, '110', '105', '2018-12-20', 1),
(26, '110', '105', '2018-12-20', 1),
(27, '104', '105', '2018-12-20', 4),
(28, '110', '103', '2018-12-21', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `UserID` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Credits` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`UserID`, `Name`, `Credits`) VALUES
(101, 'Aditya', 100),
(102, 'Parth', 57),
(103, 'Shubham', 156),
(104, 'Rajeev', 126),
(105, 'Lishika', 208),
(106, 'Shruti', 145),
(107, 'Anika', 160),
(108, 'Amit', 150),
(109, 'Preeti', 118),
(110, 'Anvesh', 150);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `transfers`
--
ALTER TABLE `transfers`
  ADD PRIMARY KEY (`TransferID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UserID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
