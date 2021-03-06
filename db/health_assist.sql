-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2018 at 06:46 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `health_assist`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` bigint(15) UNSIGNED NOT NULL,
  `status` int(2) NOT NULL,
  `title` varchar(65) NOT NULL,
  `date` date NOT NULL,
  `description` varchar(255) NOT NULL,
  `doctorId` bigint(15) UNSIGNED NOT NULL,
  `patientId` bigint(15) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `status`, `title`, `date`, `description`, `doctorId`, `patientId`) VALUES
(1, 0, 'meeting', '2018-01-04', 'sdfsdfsdfsdf', 1, 1),
(2, 0, 'dfsdfs', '0000-00-00', 'ssfsfdfsd', 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `id` bigint(15) UNSIGNED NOT NULL,
  `firstName` varchar(65) NOT NULL,
  `lastName` varchar(65) NOT NULL,
  `placeName` varchar(65) NOT NULL,
  `city` varchar(65) NOT NULL,
  `fee` varchar(65) NOT NULL,
  `phoneNo` int(10) NOT NULL,
  `email` varchar(125) NOT NULL,
  `username` varchar(125) NOT NULL,
  `password` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`id`, `firstName`, `lastName`, `placeName`, `city`, `fee`, `phoneNo`, `email`, `username`, `password`) VALUES
(1, 'Neel', 'Khalade', 'Ramnagar Society', 'Bhosari', '100', 456564654, 'doctor@doctor.com', 'doctor', 'doctor'),
(2, 'sfsdf', 'sdfsd', 'dfsd', 'sdfsdf', '54', 0, 'dsfsd', 'ssdfsd', 'sfdsd');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` bigint(15) UNSIGNED NOT NULL,
  `username` varchar(125) NOT NULL,
  `password` varchar(125) NOT NULL,
  `email` varchar(125) NOT NULL,
  `firstName` varchar(65) NOT NULL,
  `lastName` varchar(65) NOT NULL,
  `placeName` varchar(65) NOT NULL,
  `city` varchar(65) NOT NULL,
  `fee` int(65) NOT NULL,
  `phoneNo` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `username`, `password`, `email`, `firstName`, `lastName`, `placeName`, `city`, `fee`, `phoneNo`) VALUES
(1, 'nk', 'nk', '', '', '', '', '', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `id` bigint(15) UNSIGNED NOT NULL,
  `username` varchar(125) NOT NULL,
  `password` varchar(125) NOT NULL,
  `email` varchar(125) NOT NULL,
  `firstName` varchar(65) NOT NULL,
  `lastName` varchar(65) NOT NULL,
  `phoneNo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`id`, `username`, `password`, `email`, `firstName`, `lastName`, `phoneNo`) VALUES
(1, 'user', 'user', 'user@user.com', 'user', 'user', 84654565),
(2, 'sfsdfsdf', 'sadasdasasd', '1@ga.com', 'sads', 'asddas', 5465465),
(3, 'sfsdfsdf', 'dsddss', '1@ga.com', 'sads', 'asddas', 5465465),
(7, 'asda', '0cc175b9c0f1b6a831c399e269772661', 'asdas', 'asds', 'asddas', 53586),
(10, 'neel', '7220d65820839700b6c9ae74f87b48e0', 'nk@gmail.com', 'neel', 'nk', 12345),
(11, 'nk', '7220d65820839700b6c9ae74f87b48e0', 'nk@gmail.com', '', '', 0),
(12, 'as', 'f970e2767d0cfe75876ea857f92e319b', 'asdasas@a.com', 'as', 'as', 554686);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` bigint(15) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `id` bigint(15) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` bigint(15) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `id` bigint(15) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
