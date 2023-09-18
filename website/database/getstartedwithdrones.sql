-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2023 at 05:05 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `getstartedwithdrones`
--

-- --------------------------------------------------------

--
-- Table structure for table `fpv-prebuilds`
--

CREATE TABLE `fpv-prebuilds` (
  `id` int(11) NOT NULL,
  `fpv-prebuild_name` varchar(55) NOT NULL,
  `description` varchar(550) NOT NULL,
  `drone-class` tinyint(2) DEFAULT NULL COMMENT 'race\r\nfreestyle\r\ncinewhoop\r\ncinelifter\r\ntinywhoop',
  `frame` varchar(128) DEFAULT NULL,
  `arms` int(3) DEFAULT NULL COMMENT 'arm thickness in mm',
  `wheelbase` int(5) DEFAULT NULL COMMENT 'wheelbase in mm',
  `prop-duct` tinyint(1) DEFAULT NULL COMMENT '0=no 1=yes',
  `fc` varchar(128) DEFAULT NULL,
  `micro-controler` varchar(55) DEFAULT NULL,
  `imu` varchar(55) DEFAULT NULL COMMENT 'inertial measurement unit (gyro)',
  `bluetooth-ble` varchar(55) DEFAULT NULL,
  `osd-chip` varchar(55) DEFAULT NULL,
  `blackbox` varchar(55) DEFAULT NULL,
  `fc-usb-plug` tinyint(1) DEFAULT NULL COMMENT '0=micro-usb\r\n1=usb-c',
  `esc` varchar(128) DEFAULT NULL,
  `power-input` varchar(128) DEFAULT NULL COMMENT 'power input of the esc',
  `vtx` varchar(128) DEFAULT NULL,
  `camera` varchar(128) DEFAULT NULL,
  `antenna` varchar(128) DEFAULT NULL COMMENT 'antenna of the vtx',
  `reciever` varchar(128) DEFAULT NULL,
  `buzzer` varchar(55) DEFAULT NULL,
  `motors` varchar(128) DEFAULT NULL,
  `props` varchar(128) DEFAULT NULL,
  `gps` varchar(128) DEFAULT NULL,
  `weight` varchar(45) DEFAULT NULL COMMENT 'without battery',
  `Length-Width-Height` varchar(55) DEFAULT NULL COMMENT 'Length×Width×Height in mm',
  `strap` varchar(128) DEFAULT NULL COMMENT 'battery strap',
  `led-lighting` varchar(128) DEFAULT NULL,
  `battery-conector` varchar(45) DEFAULT NULL,
  `other` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `userid` varchar(11) NOT NULL,
  `useragent` varchar(255) NOT NULL,
  `action` tinyint(1) NOT NULL COMMENT '0=select\r\n1=insert\r\n2=update\r\n3=delete\r\n4=login\r\n5=logout\r\n6=restore',
  `info` varchar(255) DEFAULT NULL,
  `tableid` tinyint(4) NOT NULL COMMENT '1=beeway\r\n2=disciplines\r\n3=groups\r\n4=maintheme\r\n5=schools\r\n6=users',
  `interactionid` int(11) NOT NULL,
  `error` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0=no error\r\n1=Unauthorized access\r\n2=not allowed\r\n3=unknown\r\n4=failed login\r\n5=failed'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` int(11) NOT NULL,
  `place_id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `media_dir` varbinary(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transmitters`
--

CREATE TABLE `transmitters` (
  `id` int(11) NOT NULL,
  `transmitter_name` varchar(45) NOT NULL,
  `description` varchar(550) NOT NULL,
  `weight` varchar(45) DEFAULT NULL,
  `buildin-rf` varchar(128) DEFAULT NULL,
  `supported-protocols` varchar(128) DEFAULT NULL,
  `frequency` varchar(45) DEFAULT NULL,
  `rf-power` varchar(128) DEFAULT NULL,
  `rf-channels` varchar(45) DEFAULT NULL,
  `control-distance` varchar(45) DEFAULT NULL,
  `antenna-gain` varchar(45) DEFAULT NULL,
  `operation-voltage` varchar(45) DEFAULT NULL,
  `operation-current` varchar(45) DEFAULT NULL,
  `operating-system` varchar(45) DEFAULT NULL,
  `firmware-upgrade-method` varchar(45) DEFAULT NULL,
  `display` varchar(45) DEFAULT NULL,
  `speaker` varchar(45) DEFAULT NULL,
  `battery` varchar(45) DEFAULT NULL,
  `battery-type` varchar(45) DEFAULT NULL,
  `charching` varchar(45) DEFAULT NULL,
  `ports` varchar(128) DEFAULT NULL,
  `bimbal` varchar(45) DEFAULT NULL,
  `module-bay` varchar(45) DEFAULT NULL,
  `Length-Width-Height` varchar(55) DEFAULT NULL,
  `built-material` varchar(45) DEFAULT NULL,
  `user-manual` varchar(252) DEFAULT NULL,
  `other` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fpv-prebuilds`
--
ALTER TABLE `fpv-prebuilds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transmitters`
--
ALTER TABLE `transmitters`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fpv-prebuilds`
--
ALTER TABLE `fpv-prebuilds`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transmitters`
--
ALTER TABLE `transmitters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
