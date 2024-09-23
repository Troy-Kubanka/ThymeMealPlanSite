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
-- Table structure for table `drinks`
--

CREATE TABLE `drinks` (
  `drinkID` int(11) NOT NULL,
  `strDrink` varchar(255) NOT NULL,
  `strCategory` varchar(255) DEFAULT NULL,
  `strInstructions` text DEFAULT NULL,
  `strAlcoholic` varchar(255) DEFAULT NULL,
  `strGlass` varchar(255) DEFAULT NULL,
  `strDrinkThumb` varchar(255) DEFAULT NULL,
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
  `strIngredient11` varchar(255) DEFAULT NULL,
  `strIngredient12` varchar(255) DEFAULT NULL,
  `strIngredient13` varchar(255) DEFAULT NULL,
  `strIngredient14` varchar(255) DEFAULT NULL,
  `strIngredient15` varchar(255) DEFAULT NULL,
  `strIngredient16` varchar(255) DEFAULT NULL,
  `strIngredient17` varchar(255) DEFAULT NULL,
  `strIngredient18` varchar(255) DEFAULT NULL,
  `strIngredient19` varchar(255) DEFAULT NULL,
  `strIngredient20` varchar(255) DEFAULT NULL,
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
  `strMeasure11` varchar(255) DEFAULT NULL,
  `strMeasure12` varchar(255) DEFAULT NULL,
  `strMeasure13` varchar(255) DEFAULT NULL,
  `strMeasure14` varchar(255) DEFAULT NULL,
  `strMeasure15` varchar(255) DEFAULT NULL,
  `strMeasure16` varchar(255) DEFAULT NULL,
  `strMeasure17` varchar(255) DEFAULT NULL,
  `strMeasure18` varchar(255) DEFAULT NULL,
  `strMeasure19` varchar(255) DEFAULT NULL,
  `strMeasure20` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `drinks`
--

INSERT INTO `drinks` (`drinkID`, `strDrink`, `strCategory`, `strInstructions`, `strAlcoholic`, `strGlass`, `strDrinkThumb`, `strIngredient1`, `strIngredient2`, `strIngredient3`, `strIngredient4`, `strIngredient5`, `strIngredient6`, `strIngredient7`, `strIngredient8`, `strIngredient9`, `strIngredient10`, `strIngredient11`, `strIngredient12`, `strIngredient13`, `strIngredient14`, `strIngredient15`, `strIngredient16`, `strIngredient17`, `strIngredient18`, `strIngredient19`, `strIngredient20`, `strMeasure1`, `strMeasure2`, `strMeasure3`, `strMeasure4`, `strMeasure5`, `strMeasure6`, `strMeasure7`, `strMeasure8`, `strMeasure9`, `strMeasure10`, `strMeasure11`, `strMeasure12`, `strMeasure13`, `strMeasure14`, `strMeasure15`, `strMeasure16`, `strMeasure17`, `strMeasure18`, `strMeasure19`, `strMeasure20`) VALUES
(1, 'Green Goblin', 'Beer', '\"Cider First, Lager then Curacao\",', 'Alcoholic', 'Pint Glass', 'https://www.thecocktaildb.com/images/media/drink/qxprxr1454511520.jpg', 'Cider', 'Lager', 'Blue Curacao', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1/2 pint hard', '1/2 pint', '1 shot', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'Surf City Lifesaver', 'Gin', 'Lots of ice and soda top up in tall glass with cherry and a grin', 'Alcoholic', 'Highball Glass', 'https://www.thecocktaildb.com/images/media/drink/2rzfer1487602699.jpg', 'Ouzo', 'Bailey\'s Irish Cream', 'Gin', 'Grand Marnier', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1 part', '1 part', '2 parts', '1/2 part', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'Tom Collins', 'Gin', 'In a shaker half-filled with ice cubes, combine the gin, lemon juice, and sugar. Shake well. Strain into a collins glass alomst filled with ice cubes. Add the club soda. Stir and garnish with the cherry and the orange slice.', 'Alcoholic', 'Collins glass', 'https://www.thecocktaildb.com/images/media/drink/7cll921606854636.jpg', 'Gin', 'Lemon Juice', 'Sugar', 'Club Soda', 'Maraschino Cherry', 'Orange', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2 oz', '1 oz', '1 tsp superfine', '3 oz', '1', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `drinks`
--
ALTER TABLE `drinks`
  ADD PRIMARY KEY (`drinkID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `drinks`
--
ALTER TABLE `drinks`
  MODIFY `drinkID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
