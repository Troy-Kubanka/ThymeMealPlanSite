-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 25, 2024 at 12:33 AM
-- Server version: 11.0.1-MariaDB-1:11.0.1+maria~ubu2204-log
-- PHP Version: 8.1.2-1ubuntu2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `CSC3212_S24_cfield_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `mealPlan`
--

CREATE TABLE `mealPlan` (
  `mealPlanID` int(11) NOT NULL,
  `mealID` int(11) DEFAULT NULL,
  `drinkID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mealPlan`
--

INSERT INTO `mealPlan` (`mealPlanID`, `mealID`, `drinkID`) VALUES
(1, 1, NULL),
(54, NULL, 1),
(63, NULL, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mealPlan`
--
ALTER TABLE `mealPlan`
  ADD PRIMARY KEY (`mealPlanID`),
  ADD UNIQUE KEY `uniqueID` (`mealID`),
  ADD UNIQUE KEY `drinkID` (`drinkID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mealPlan`
--
ALTER TABLE `mealPlan`
  MODIFY `mealPlanID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
