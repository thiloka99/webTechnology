-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 05, 2022 at 02:57 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ovp`
--

-- --------------------------------------------------------

--
-- Table structure for table `moh_table`
--

CREATE TABLE `moh_table` (
  `Id` varchar(20) NOT NULL,
  `District` varchar(15) NOT NULL,
  `Name_of_MOH` varchar(20) NOT NULL,
  `firstName` varchar(20) NOT NULL,
  `lastName` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `mobile` int(10) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `moh_table`
--

INSERT INTO `moh_table` (`Id`, `District`, `Name_of_MOH`, `firstName`, `lastName`, `address`, `mobile`, `password`) VALUES
('A0002', 'Gampaha', 'Vavuniya', 'sammai', 'perera', 'kadirana', 777778213, '456987'),
('A001', 'Colombo', 'colombo', 'Thiloka', 'fernando', 'Colombo', 711234561, '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `moh_table`
--
ALTER TABLE `moh_table`
  ADD PRIMARY KEY (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
