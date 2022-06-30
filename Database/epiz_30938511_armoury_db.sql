-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql307.byetcluster.com
-- Generation Time: Jun 30, 2022 at 10:52 AM
-- Server version: 10.3.27-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epiz_30938511_armoury_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_username` varchar(20) NOT NULL,
  `admin_password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_username`, `admin_password`) VALUES
(1, 'minuteman1776', 'usa1776');

-- --------------------------------------------------------

--
-- Table structure for table `airborne_data`
--

CREATE TABLE `airborne_data` (
  `vehicle_id` int(11) NOT NULL,
  `vehicle_name` varchar(15) NOT NULL,
  `vehicle_origin` varchar(15) NOT NULL,
  `vehicle_category` varchar(15) NOT NULL,
  `vehicle_type` varchar(15) NOT NULL,
  `vehicle_picture` varchar(25) NOT NULL,
  `vehicle_weapon` varchar(15) NOT NULL,
  `vehicle_guide` varchar(15) NOT NULL,
  `vehicle_speed` int(11) NOT NULL,
  `vehicle_turn` int(11) NOT NULL,
  `vehicle_fuel` int(11) NOT NULL,
  `vehicle_ecm` int(11) NOT NULL,
  `vehicle_ammo` int(11) NOT NULL,
  `vehicle_accuary` int(11) NOT NULL,
  `vehicle_stabliliser` int(11) NOT NULL,
  `vehicle_power` int(11) NOT NULL,
  `vehicle_suppression` int(11) NOT NULL,
  `vehicle_range` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `airborne_data`
--

INSERT INTO `airborne_data` (`vehicle_id`, `vehicle_name`, `vehicle_origin`, `vehicle_category`, `vehicle_type`, `vehicle_picture`, `vehicle_weapon`, `vehicle_guide`, `vehicle_speed`, `vehicle_turn`, `vehicle_fuel`, `vehicle_ecm`, `vehicle_ammo`, `vehicle_accuary`, `vehicle_stabliliser`, `vehicle_power`, `vehicle_suppression`, `vehicle_range`) VALUES
(1, 'F-14 Tomcat', 'United States', 'Airborne', 'Jet', 'F14.jpg', 'AIM-54 Phoenix ', 'Radar', 1000, 400, 6500, 30, 4, 40, 40, 8, 320, 12600),
(2, 'F-22 Raptor', 'United States', 'Airborne', 'Jet', 'F22.jpg', 'AIM-120 AMRAAM', 'Radar Homing', 2414, 1300, 600, 92, 6, 80, 90, 10, 400, 75),
(3, 'Eurofighter', 'United Kingdom', 'Airborne', 'Jet', 'Eurofighter.jpg', 'AAM-N-5 Meteor', 'Radar Homing', 2495, 1150, 1642, 26, 6, 75, 50, 10, 370, 200),
(6, 'SU-35 Flanker-E', 'Russia', 'Airborne', 'Jet', 'Su35.jpg', 'Vympel R-77', 'Infrared', 2372, 1015, 1950, 45, 4, 65, 70, 15, 450, 180);

-- --------------------------------------------------------

--
-- Table structure for table `armoured_data`
--

CREATE TABLE `armoured_data` (
  `vehicle_id` int(11) NOT NULL,
  `vehicle_name` varchar(25) NOT NULL,
  `vehicle_origin` varchar(15) NOT NULL,
  `vehicle_category` varchar(15) NOT NULL,
  `vehicle_picture` varchar(25) NOT NULL,
  `vehicle_weapon` varchar(25) NOT NULL,
  `vehicle_calibre` int(11) NOT NULL,
  `vehicle_speed` int(11) NOT NULL,
  `vehicle_FrontArmour` int(11) NOT NULL,
  `vehicle_SideArmour` int(11) NOT NULL,
  `vehicle_RearArmour` int(11) NOT NULL,
  `vehicle_TopArmour` int(11) NOT NULL,
  `vehicle_ammo` int(11) NOT NULL,
  `vehicle_stabliliser` int(11) NOT NULL,
  `vehicle_AP` int(11) NOT NULL,
  `vehicle_HE` int(11) NOT NULL,
  `vehicle_range` int(11) NOT NULL,
  `vehicle_rate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `armoured_data`
--

INSERT INTO `armoured_data` (`vehicle_id`, `vehicle_name`, `vehicle_origin`, `vehicle_category`, `vehicle_picture`, `vehicle_weapon`, `vehicle_calibre`, `vehicle_speed`, `vehicle_FrontArmour`, `vehicle_SideArmour`, `vehicle_RearArmour`, `vehicle_TopArmour`, `vehicle_ammo`, `vehicle_stabliliser`, `vehicle_AP`, `vehicle_HE`, `vehicle_range`, `vehicle_rate`) VALUES
(1, 'Leopard 2A4', 'Germany', 'Tank', 'Lepoard2.jpg', 'RH L/44', 120, 76, 80, 30, 20, 25, 42, 86, 478, 480, 1640, 7),
(2, 'M1A2 Abrams', 'United States', 'Tank', 'M1 Abrams.jpg', 'M256', 120, 76, 133, 62, 31, 25, 42, 70, 481, 480, 1670, 8),
(3, 'Challenger 2', 'United Kingdom', 'Tank', 'Challenger 2.jpg', 'L30A1', 120, 66, 130, 45, 20, 20, 50, 54, 497, 152, 1650, 6),
(4, 'T-80U', 'Russia', 'Tank', 'T80.jpg', '2A46M', 125, 67, 105, 80, 50, 20, 45, 64, 431, 550, 1660, 7),
(5, 'ZTZ99-II', 'China', 'Tank', 'ZTZ 96.jpg', 'ZPT98', 125, 73, 100, 80, 45, 15, 39, 53, 450, 480, 1740, 7);

-- --------------------------------------------------------

--
-- Table structure for table `support_data`
--

CREATE TABLE `support_data` (
  `vehicle_id` int(11) NOT NULL,
  `vehicle_name` varchar(25) NOT NULL,
  `vehicle_origin` varchar(15) NOT NULL,
  `vehicle_category` varchar(15) NOT NULL,
  `vehicle_picture` varchar(25) NOT NULL,
  `vehicle_weapon` varchar(25) NOT NULL,
  `vehicle_calibre` int(11) NOT NULL,
  `vehicle_speed` int(11) NOT NULL,
  `vehicle_FrontArmour` int(11) NOT NULL,
  `vehicle_SideArmour` int(11) NOT NULL,
  `vehicle_RearArmour` int(11) NOT NULL,
  `vehicle_TopArmour` int(11) NOT NULL,
  `vehicle_ammo` int(11) NOT NULL,
  `vehicle_stabliliser` int(11) NOT NULL,
  `vehicle_AP` int(11) NOT NULL,
  `vehicle_HE` int(11) NOT NULL,
  `vehicle_range` int(11) NOT NULL,
  `vehicle_rate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `support_data`
--

INSERT INTO `support_data` (`vehicle_id`, `vehicle_name`, `vehicle_origin`, `vehicle_category`, `vehicle_picture`, `vehicle_weapon`, `vehicle_calibre`, `vehicle_speed`, `vehicle_FrontArmour`, `vehicle_SideArmour`, `vehicle_RearArmour`, `vehicle_TopArmour`, `vehicle_ammo`, `vehicle_stabliliser`, `vehicle_AP`, `vehicle_HE`, `vehicle_range`, `vehicle_rate`) VALUES
(1, 'Flakpanzergepard', 'Germany', 'Support', 'FlakpanzerGepard.jpg', 'Twin GDF-001 	', 35, 65, 10, 2, 2, 2, 680, 45, 2, 1, 2800, 793),
(2, 'C-RAM', 'United States', 'Support', 'M247.jpg', 'Phalanx CIWS', 20, 90, 2, 2, 2, 2, 1550, 75, 1, 1, 5500, 4500),
(3, 'Chieftain Marksman', 'United Kingdom', 'Support', 'ChieftainMarksman.jpg', 'Twin KBA 	', 35, 80, 10, 4, 4, 3, 500, 35, 2, 1, 2625, 717),
(4, 'ZSU-23 Biryusa', 'Russia', 'Support', 'Tunguska.jpg', 'AZP-23 Amur 	', 23, 50, 8, 5, 5, 2, 1000, 45, 1, 2, 2450, 1538),
(5, 'PGZ-95', 'China', 'Support', 'PGZ.jpg', 'PLA 25 	', 25, 80, 8, 5, 4, 2, 1000, 50, 1, 2, 2625, 1515);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `airborne_data`
--
ALTER TABLE `airborne_data`
  ADD PRIMARY KEY (`vehicle_id`);

--
-- Indexes for table `armoured_data`
--
ALTER TABLE `armoured_data`
  ADD PRIMARY KEY (`vehicle_id`);

--
-- Indexes for table `support_data`
--
ALTER TABLE `support_data`
  ADD PRIMARY KEY (`vehicle_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `airborne_data`
--
ALTER TABLE `airborne_data`
  MODIFY `vehicle_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `armoured_data`
--
ALTER TABLE `armoured_data`
  MODIFY `vehicle_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `support_data`
--
ALTER TABLE `support_data`
  MODIFY `vehicle_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
