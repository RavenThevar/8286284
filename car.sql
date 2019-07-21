-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2019 at 08:00 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `car`
--

-- --------------------------------------------------------

--
-- Table structure for table `acc`
--

CREATE TABLE `acc` (
  `accID` int(11) NOT NULL,
  `acc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `acc`
--

INSERT INTO `acc` (`accID`, `acc`) VALUES
(1, 'Moon Roof'),
(2, 'Performance Floor Mats'),
(3, 'Floating Centre Caps Logo');

-- --------------------------------------------------------

--
-- Table structure for table `colour`
--

CREATE TABLE `colour` (
  `cID` int(11) NOT NULL,
  `colour` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `colour`
--

INSERT INTO `colour` (`cID`, `colour`) VALUES
(1, 'ALPINE WHITE'),
(2, 'BLACK SAPPHIRE'),
(3, 'SUNSET ORANGE'),
(4, 'BLUE BEACH');

-- --------------------------------------------------------

--
-- Table structure for table `header`
--

CREATE TABLE `header` (
  `he1` text NOT NULL,
  `he2` text NOT NULL,
  `he3` text NOT NULL,
  `he4` text NOT NULL,
  `he5` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `header`
--

INSERT INTO `header` (`he1`, `he2`, `he3`, `he4`, `he5`) VALUES
('Home', 'Select Model', 'Technical Specifications', 'About Us', 'Login / Register');

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `desc1` text NOT NULL,
  `desc2` text NOT NULL,
  `desc3` text NOT NULL,
  `desc4` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`desc1`, `desc2`, `desc3`, `desc4`) VALUES
('The Need For Speed - 3.. 2.. 1.. Go', '150 years of engineering excellence', 'Pedal to the Metal - 0 - 60 under 2.5 seconds', 'Built with Class in mind');

-- --------------------------------------------------------

--
-- Table structure for table `interior`
--

CREATE TABLE `interior` (
  `itID` int(11) NOT NULL,
  `interior` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `interior`
--

INSERT INTO `interior` (`itID`, `interior`) VALUES
(1, 'WHITE'),
(2, 'BEIGE'),
(3, 'MOCHA');

-- --------------------------------------------------------

--
-- Table structure for table `landing`
--

CREATE TABLE `landing` (
  `title1` text NOT NULL,
  `title2` text NOT NULL,
  `desc1` text NOT NULL,
  `desc2` text NOT NULL,
  `button1` text NOT NULL,
  `button2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `landing`
--

INSERT INTO `landing` (`title1`, `title2`, `desc1`, `desc2`, `button1`, `button2`) VALUES
('Login', 'Register', 'Login now to select models, view profile and etc.', 'New here.? Click to register.', 'LOGIN', 'REGISTER');

-- --------------------------------------------------------

--
-- Table structure for table `model`
--

CREATE TABLE `model` (
  `mID` int(1) NOT NULL,
  `model` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `model`
--

INSERT INTO `model` (`mID`, `model`) VALUES
(1, 'DMW M2 Coupe'),
(2, 'DMW M4 Coupe');

-- --------------------------------------------------------

--
-- Table structure for table `ordert`
--

CREATE TABLE `ordert` (
  `ID` int(2) NOT NULL,
  `model` text NOT NULL,
  `colour` text NOT NULL,
  `interior` text NOT NULL,
  `trimm` text NOT NULL,
  `acc1` text,
  `acc2` text,
  `acc3` text,
  `username` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ordert`
--

INSERT INTO `ordert` (`ID`, `model`, `colour`, `interior`, `trimm`, `acc1`, `acc2`, `acc3`, `username`) VALUES
(1, '/', '/', '/', '/', NULL, '/', '/', 'najib04'),
(2, '/', '/', '/', '/', NULL, '/', '/', 'najib04'),
(3, '/', '/', '/', '/', NULL, '/', '/', 'najib04'),
(4, '$model[0]', '/', '/', '/', NULL, '/', NULL, 'najib04'),
(5, 'ljkjlj', '/', '/', '/', NULL, '/', NULL, 'najib04'),
(6, 'DMW', '/', '/', '/', NULL, '/', NULL, 'najib04'),
(7, 'DMW', '/', '/', '/', NULL, '/', NULL, 'najib04'),
(8, 'DMW M2 Coupe', '/', '/', '/', NULL, '/', NULL, 'najib04'),
(9, '/', '/', '/', '/', '/', '/', NULL, 'najib04'),
(10, 'DMW M4 Coupe', 'SUNSET ORANGE', 'BEIGE', 'BLACK HIGH GLOSS', NULL, 'Performance Floor Mats', 'Floating Centre Caps Logo', 'najib04'),
(11, 'DMW M4 Coupe', 'SUNSET ORANGE', 'BEIGE', 'BLACK HIGH GLOSS', NULL, 'Performance Floor Mats', 'Floating Centre Caps Logo', 'najib04'),
(12, 'DMW M4 Coupe', 'SUNSET ORANGE', 'BEIGE', 'BLACK HIGH GLOSS', NULL, 'Performance Floor Mats', NULL, 'najib04'),
(13, 'DMW M4 Coupe', 'SUNSET ORANGE', 'BEIGE', 'BLACK HIGH GLOSS', NULL, 'Performance Floor Mats', 'Floating Centre Caps Logo', 'najib04'),
(14, 'DMW M4 Coupe', 'SUNSET ORANGE', 'BEIGE', 'BLACK HIGH GLOSS', 'Moon Roof', 'Performance Floor Mats', 'Floating Centre Caps Logo', 'najib04'),
(15, 'DMW M4 Coupe', 'SUNSET ORANGE', 'BEIGE', 'BLACK HIGH GLOSS', 'Moon Roof', 'Performance Floor Mats', 'Floating Centre Caps Logo', 'najib04'),
(16, 'DMW M2 Coupe', 'SUNSET ORANGE', 'BEIGE', 'BLACK HIGH GLOSS', 'Moon Roof', 'Performance Floor Mats', 'Floating Centre Caps Logo', 'najib04'),
(17, 'DMW M2 Coupe', 'SUNSET ORANGE', 'BEIGE', 'BLACK HIGH GLOSS', 'Moon Roof', 'Performance Floor Mats', 'Floating Centre Caps Logo', 'najib04'),
(18, 'DMW M4 Coupe', 'SUNSET ORANGE', 'BEIGE', 'BLACK HIGH GLOSS', 'Moon Roof', 'Performance Floor Mats', 'Floating Centre Caps Logo', 'najib04'),
(19, 'DMW M2 Coupe', 'SUNSET ORANGE', 'BEIGE', 'BLACK HIGH GLOSS', NULL, 'Performance Floor Mats', NULL, 'najib04'),
(20, 'DMW M4 Coupe', 'SUNSET ORANGE', 'BEIGE', 'BLACK HIGH GLOSS', NULL, NULL, NULL, 'najib04'),
(21, 'DMW M2 Coupe', 'SUNSET ORANGE', 'BEIGE', 'BLACK HIGH GLOSS', NULL, NULL, NULL, 'najib04');

-- --------------------------------------------------------

--
-- Table structure for table `selectd`
--

CREATE TABLE `selectd` (
  `title1` text NOT NULL,
  `title1b` text NOT NULL,
  `title2` text NOT NULL,
  `title3` text NOT NULL,
  `title4` text NOT NULL,
  `title5` text NOT NULL,
  `title6` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `selectd`
--

INSERT INTO `selectd` (`title1`, `title1b`, `title2`, `title3`, `title4`, `title5`, `title6`) VALUES
('MODELS', 'Choose between:', 'COLOURS', 'INTERIOR', 'TRIM', 'ACCESSORIES', 'SUMMARY');

-- --------------------------------------------------------

--
-- Table structure for table `tech`
--

CREATE TABLE `tech` (
  `title` text NOT NULL,
  `desc1` text NOT NULL,
  `desc2` text NOT NULL,
  `desc3` text NOT NULL,
  `desc4` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tech`
--

INSERT INTO `tech` (`title`, `desc1`, `desc2`, `desc3`, `desc4`) VALUES
('Technical Specifications', 'Soak in the sound of the M2 Competition Coupe’s Dual Exhaust system. Engineered with electronically controlled flaps that improve air flow and boost performance – at every punch of the pedal, the authoritative exhaust notes will leave you smiling from gear to gear.', 'This champion 3.0-liter M TwinPower Turbo inline-6 Cylinder delivers 405 horsepower, redlines at 7,600 rpms, and adds an extra punch of power with two turbochargers. The result is a screaming symphony of metal in motion that crescendos from 0-60 in only 4.2 seconds.', 'Equipped with a standard 6-speed Manual Transmission – the power of the M2 Competition Coupe is yours to command. For those looking for automatic precision – opt for the 7-speed M Double-Clutch Transmission.', 'Stay firmly planted in the sharpest corners with the lightweight, performance-ready standard M Sport Seats. These seats take aesthetics up a notch with Black Dakota Leather with contrast stitching and prominent M badges.');

-- --------------------------------------------------------

--
-- Table structure for table `trimm`
--

CREATE TABLE `trimm` (
  `tID` int(11) NOT NULL,
  `trim` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `trimm`
--

INSERT INTO `trimm` (`tID`, `trim`) VALUES
(1, 'CARBON FIBRE'),
(2, 'BLACK HIGH GLOSS');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`) VALUES
('Bayek06', 'password123'),
('Herods03', 'abcd'),
('najib04', 'password123');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `email` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `age` int(2) NOT NULL,
  `username` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`email`, `fname`, `lname`, `age`, `username`) VALUES
('medjay@gmail.com', 'Bayek', 'Siwa', 23, 'Bayek06'),
('najib04@yahoo.com', 'Najib', 'Razak', 60, 'najib04'),
('oddysey@gmail.com', 'Herodotus', 'Senu', 23, 'Herods03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acc`
--
ALTER TABLE `acc`
  ADD PRIMARY KEY (`accID`);

--
-- Indexes for table `colour`
--
ALTER TABLE `colour`
  ADD PRIMARY KEY (`cID`);

--
-- Indexes for table `interior`
--
ALTER TABLE `interior`
  ADD PRIMARY KEY (`itID`);

--
-- Indexes for table `model`
--
ALTER TABLE `model`
  ADD PRIMARY KEY (`mID`);

--
-- Indexes for table `ordert`
--
ALTER TABLE `ordert`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `trimm`
--
ALTER TABLE `trimm`
  ADD PRIMARY KEY (`tID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`email`),
  ADD KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acc`
--
ALTER TABLE `acc`
  MODIFY `accID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `colour`
--
ALTER TABLE `colour`
  MODIFY `cID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `interior`
--
ALTER TABLE `interior`
  MODIFY `itID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `model`
--
ALTER TABLE `model`
  MODIFY `mID` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ordert`
--
ALTER TABLE `ordert`
  MODIFY `ID` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `trimm`
--
ALTER TABLE `trimm`
  MODIFY `tID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ordert`
--
ALTER TABLE `ordert`
  ADD CONSTRAINT `ordert_ibfk_1` FOREIGN KEY (`username`) REFERENCES `userinfo` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD CONSTRAINT `userinfo_ibfk_1` FOREIGN KEY (`username`) REFERENCES `user` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
