-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2025 at 12:51 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `animefiguredb`
--

-- --------------------------------------------------------

--
-- Table structure for table `figures`
--

CREATE TABLE `figures` (
  `FigureID` int(11) NOT NULL,
  `FigureName` varchar(100) DEFAULT NULL,
  `Series` varchar(100) DEFAULT NULL,
  `ManufacturerName` varchar(100) DEFAULT NULL,
  `SellerName` varchar(100) DEFAULT NULL,
  `UserName` varchar(100) DEFAULT NULL,
  `DateGotten` date DEFAULT NULL,
  `DateRelease` date DEFAULT NULL,
  `Price` decimal(10,2) DEFAULT NULL,
  `CountryOfOrigin` varchar(100) DEFAULT NULL,
  `CountryOfUser` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `manufacturer`
--

CREATE TABLE `manufacturer` (
  `ManufacturerID` int(11) NOT NULL,
  `ManufacturerName` varchar(100) DEFAULT NULL,
  `ManufactureCountry` varchar(100) DEFAULT NULL,
  `ManufactureSite` varchar(200) DEFAULT NULL,
  `SellerName` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `seller`
--

CREATE TABLE `seller` (
  `SellerID` int(11) NOT NULL,
  `SellerName` varchar(100) DEFAULT NULL,
  `RetailerLocation` varchar(100) DEFAULT NULL,
  `Price` decimal(10,2) DEFAULT NULL,
  `SellerSite` varchar(200) DEFAULT NULL,
  `ManufacturerName` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UserID` int(11) NOT NULL,
  `UserName` varchar(100) DEFAULT NULL,
  `ValueOfFigures` decimal(10,2) DEFAULT NULL,
  `CountryOfUser` varchar(100) DEFAULT NULL,
  `BroughtFrom` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `figures`
--
ALTER TABLE `figures`
  ADD PRIMARY KEY (`FigureID`),
  ADD KEY `ManufacturerName` (`ManufacturerName`),
  ADD KEY `SellerName` (`SellerName`),
  ADD KEY `UserName` (`UserName`);

--
-- Indexes for table `manufacturer`
--
ALTER TABLE `manufacturer`
  ADD PRIMARY KEY (`ManufacturerID`),
  ADD UNIQUE KEY `ManufacturerName` (`ManufacturerName`),
  ADD KEY `fk_SellerName` (`SellerName`);

--
-- Indexes for table `seller`
--
ALTER TABLE `seller`
  ADD PRIMARY KEY (`SellerID`),
  ADD UNIQUE KEY `SellerName` (`SellerName`),
  ADD KEY `ManufacturerName` (`ManufacturerName`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserID`),
  ADD UNIQUE KEY `UserName` (`UserName`),
  ADD KEY `BroughtFrom` (`BroughtFrom`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `figures`
--
ALTER TABLE `figures`
  ADD CONSTRAINT `figures_ibfk_1` FOREIGN KEY (`ManufacturerName`) REFERENCES `manufacturer` (`ManufacturerName`),
  ADD CONSTRAINT `figures_ibfk_2` FOREIGN KEY (`SellerName`) REFERENCES `seller` (`SellerName`),
  ADD CONSTRAINT `figures_ibfk_3` FOREIGN KEY (`UserName`) REFERENCES `users` (`UserName`);

--
-- Constraints for table `manufacturer`
--
ALTER TABLE `manufacturer`
  ADD CONSTRAINT `fk_SellerName` FOREIGN KEY (`SellerName`) REFERENCES `seller` (`SellerName`);

--
-- Constraints for table `seller`
--
ALTER TABLE `seller`
  ADD CONSTRAINT `seller_ibfk_1` FOREIGN KEY (`ManufacturerName`) REFERENCES `manufacturer` (`ManufacturerName`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`BroughtFrom`) REFERENCES `seller` (`SellerName`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
