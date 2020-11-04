-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 13, 2020 at 06:40 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cars`
--

-- --------------------------------------------------------

--
-- Table structure for table `car`
--

CREATE TABLE `car` (
  `Manufacturer` varchar(40) NOT NULL,
  `Model` varchar(40) NOT NULL,
  `Price` int(11) NOT NULL,
  `Feature` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `car`
--

INSERT INTO `car` (`Manufacturer`, `Model`, `Price`, `Feature`) VALUES
('Audi', 'A4 allroad Premium Plus 2021', 3914400, '261hp, Intercooled Turbo Gas/Electric I-4'),
('Audi', 'Q5', 7484400, '188hp, TDI Quattro Engine'),
('Audi', 'S7', 7047600, 'Prestige quattro 4dr Sedan AWD (2.9L 6cyl Twincharger gas/electric hybrid 8A'),
('BMW', '540i ', 5980800, '335hp, Intercooled Turbo Premium Unleaded I-6'),
('BMW', 'X7', 37200000, 'A twin-turbocharged 4.4-liter V8 with 456 horsepower'),
('Ford', 'F-150 Super Cab', 4000000, '450hp,3.5L V6 EcoBoost'),
('Lexus', 'RX 450h', 4477200, '247hp, V6 Cylinder Engine'),
('Lexus', 'ES350', 3360000, '4dr Sedan 3.5L 6cyl 8A 4dr Sedan (3.5L 6cyl 8A)'),
('Toyota', 'Land Cruiser', 10900000, '285.4bhp, V-Type Engine'),
('Toyota', 'Corolla', 920000, '125hp,In-Line Engine');

-- --------------------------------------------------------

--
-- Table structure for table `manufacturer`
--

CREATE TABLE `manufacturer` (
  `Manufacturer ID` int(11) NOT NULL,
  `Manufacturer Name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manufacturer`
--

INSERT INTO `manufacturer` (`Manufacturer ID`, `Manufacturer Name`) VALUES
(1, 'Audi'),
(2, 'BMW'),
(3, 'Ford'),
(4, 'Lexus'),
(5, 'Toyota');

-- --------------------------------------------------------

--
-- Table structure for table `model`
--

CREATE TABLE `model` (
  `Model ID` int(11) NOT NULL,
  `Model Name` varchar(100) NOT NULL,
  `Manufacturer ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `model`
--

INSERT INTO `model` (`Model ID`, `Model Name`, `Manufacturer ID`) VALUES
(1, 'A4 Allroad', 1),
(2, 'Q5', 1),
(3, 'S7', 1),
(4, '540i', 2),
(5, 'X7', 2),
(6, 'F-150 Super Cab', 3),
(7, 'RX 450h', 4),
(8, 'ES 350', 4),
(9, 'Land Cruiser', 5),
(10, 'Corolla', 5);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
