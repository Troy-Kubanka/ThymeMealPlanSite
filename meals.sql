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
-- Table structure for table `meals`
--

CREATE TABLE `meals` (
  `mealID` int(11) NOT NULL,
  `strMeal` varchar(255) NOT NULL,
  `strCategory` varchar(255) DEFAULT NULL,
  `strArea` varchar(255) DEFAULT NULL,
  `strInstructions` text DEFAULT NULL,
  `strTags` varchar(255) DEFAULT NULL,
  `strIngredient1` varchar(255) DEFAULT NULL,
  `strIngredient2` varchar(255) DEFAULT NULL,
  `strIngredient3` varchar(255) DEFAULT NULL,
  `strIngredient4` varchar(255) DEFAULT NULL,
  `strIngredient5` varchar(255) DEFAULT NULL,
  `strIngredient6` varchar(255) DEFAULT NULL,
  `strIngredient7` varchar(255) DEFAULT NULL,
  `strIngredient8` varchar(255) DEFAULT NULL,
  `strIngredient9` varchar(255) DEFAULT NULL,
  `strIngredient10` varchar(255) DEFAULT NULL,
  `strMeasure1` varchar(255) DEFAULT NULL,
  `strMeasure2` varchar(255) DEFAULT NULL,
  `strMeasure3` varchar(255) DEFAULT NULL,
  `strMeasure4` varchar(255) DEFAULT NULL,
  `strMeasure5` varchar(255) DEFAULT NULL,
  `strMeasure6` varchar(255) DEFAULT NULL,
  `strMeasure7` varchar(255) DEFAULT NULL,
  `strMeasure8` varchar(255) DEFAULT NULL,
  `strMeasure9` varchar(255) DEFAULT NULL,
  `strMeasure10` varchar(255) DEFAULT NULL,
  `strIngredient11` varchar(50) DEFAULT NULL,
  `strIngredient12` varchar(50) DEFAULT NULL,
  `strIngredient13` varchar(50) DEFAULT NULL,
  `strIngredient14` varchar(50) DEFAULT NULL,
  `strIngredient15` varchar(50) DEFAULT NULL,
  `strIngredient16` varchar(50) DEFAULT NULL,
  `strIngredient17` varchar(50) DEFAULT NULL,
  `strIngredient18` varchar(50) DEFAULT NULL,
  `strIngredient19` varchar(50) DEFAULT NULL,
  `strIngredient20` varchar(50) DEFAULT NULL,
  `strMeasure11` varchar(50) DEFAULT NULL,
  `strMeasure12` varchar(50) DEFAULT NULL,
  `strMeasure13` varchar(50) DEFAULT NULL,
  `strMeasure14` varchar(50) DEFAULT NULL,
  `strMeasure15` varchar(50) DEFAULT NULL,
  `strMeasure16` varchar(50) DEFAULT NULL,
  `strMeasure17` varchar(50) DEFAULT NULL,
  `strMeasure18` varchar(50) DEFAULT NULL,
  `strMeasure19` varchar(50) DEFAULT NULL,
  `strMeasure20` varchar(50) DEFAULT NULL,
  `strMealThumb` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `meals`
--

INSERT INTO `meals` (`mealID`, `strMeal`, `strCategory`, `strArea`, `strInstructions`, `strTags`, `strIngredient1`, `strIngredient2`, `strIngredient3`, `strIngredient4`, `strIngredient5`, `strIngredient6`, `strIngredient7`, `strIngredient8`, `strIngredient9`, `strIngredient10`, `strMeasure1`, `strMeasure2`, `strMeasure3`, `strMeasure4`, `strMeasure5`, `strMeasure6`, `strMeasure7`, `strMeasure8`, `strMeasure9`, `strMeasure10`, `strIngredient11`, `strIngredient12`, `strIngredient13`, `strIngredient14`, `strIngredient15`, `strIngredient16`, `strIngredient17`, `strIngredient18`, `strIngredient19`, `strIngredient20`, `strMeasure11`, `strMeasure12`, `strMeasure13`, `strMeasure14`, `strMeasure15`, `strMeasure16`, `strMeasure17`, `strMeasure18`, `strMeasure19`, `strMeasure20`, `strMealThumb`) VALUES
(1, 'Chicken Enchilada Casserole', 'Chicken', 'Mexican', 'INSERT INSTRUCTIONS HERE', 'Casserole, Cheesy, Meat', 'Enchilada Sauce', 'Shredded Monterey Jack Cheese', 'Corn Tortillas', 'Chicken Breasts', NULL, NULL, NULL, NULL, NULL, NULL, '14oz jar', '3 cups', '6', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'Beef Sunday Roast', 'Beef', 'British', 'INSTRUCTIONS', 'Beef, Vegetable', 'Beef', 'Broccoli', 'Potatoes', 'Carrots', 'Plain Flour', 'Eggs', 'Milk', 'Sunflower Oil', NULL, NULL, '8 slices', '12 florets', '1 packet', '1 packet', '140g', '4', '200ml', 'Drizzle (for cooking)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'Bean and Sausage Hotpot', 'Sausage', 'British', 'INSTRUCTIONS', 'Sausage, Soup', 'Sausages', 'Tomato Sauce', 'Butter Beans', 'Black Treacle', 'English Mustard', NULL, NULL, NULL, NULL, NULL, '8 large', '1 jar', '1200g', '1 tbls', '1 tsp', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `meals`
--
ALTER TABLE `meals`
  ADD PRIMARY KEY (`mealID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `meals`
--
ALTER TABLE `meals`
  MODIFY `mealID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
