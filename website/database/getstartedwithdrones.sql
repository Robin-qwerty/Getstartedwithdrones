-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 26, 2023 at 03:03 PM
-- Server version: 8.0.34-0ubuntu0.22.04.1
-- PHP Version: 8.1.2-1ubuntu2.14

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
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` int NOT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_by` int DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fpv-prebuilds`
--

CREATE TABLE `fpv-prebuilds` (
  `id` int NOT NULL,
  `fpv-prebuild_name` varchar(55) COLLATE utf8mb4_general_ci NOT NULL,
  `description` varchar(550) COLLATE utf8mb4_general_ci NOT NULL,
  `drone-class` tinyint DEFAULT NULL COMMENT 'race\r\nfreestyle\r\ncinewhoop\r\ncinelifter\r\ntinywhoop',
  `frame` varchar(128) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `arms` int DEFAULT NULL COMMENT 'arm thickness in mm',
  `wheelbase` int DEFAULT NULL COMMENT 'wheelbase in mm',
  `prop-duct` tinyint(1) DEFAULT NULL COMMENT '0=no 1=yes',
  `fc` varchar(128) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `micro-controler` varchar(55) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `imu` varchar(55) COLLATE utf8mb4_general_ci DEFAULT NULL COMMENT 'inertial measurement unit (gyro)',
  `bluetooth-ble` varchar(55) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `osd-chip` varchar(55) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `blackbox` varchar(55) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `fc-usb-plug` tinyint(1) DEFAULT NULL COMMENT '0=micro-usb\r\n1=usb-c',
  `esc` varchar(128) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `power-input` varchar(128) COLLATE utf8mb4_general_ci DEFAULT NULL COMMENT 'power input of the esc',
  `vtx` varchar(128) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `camera` varchar(128) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `antenna` varchar(128) COLLATE utf8mb4_general_ci DEFAULT NULL COMMENT 'antenna of the vtx',
  `reciever` varchar(128) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `buzzer` varchar(55) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `motors` varchar(128) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `props` varchar(128) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `gps` varchar(128) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `weight` varchar(45) COLLATE utf8mb4_general_ci DEFAULT NULL COMMENT 'without battery',
  `Length-Width-Height` varchar(55) COLLATE utf8mb4_general_ci DEFAULT NULL COMMENT 'Length×Width×Height in mm',
  `strap` varchar(128) COLLATE utf8mb4_general_ci DEFAULT NULL COMMENT 'battery strap',
  `led-lighting` varchar(128) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `battery-conector` varchar(45) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `other` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `id` int NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `userid` varchar(11) COLLATE utf8mb4_general_ci NOT NULL,
  `useragent` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `action` tinyint(1) NOT NULL COMMENT '0=select\r\n1=insert\r\n2=update\r\n3=delete\r\n4=login\r\n5=logout\r\n6=restore',
  `info` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tableid` tinyint NOT NULL COMMENT '1=beeway\r\n2=disciplines\r\n3=groups\r\n4=maintheme\r\n5=schools\r\n6=users',
  `interactionid` int NOT NULL,
  `error` tinyint NOT NULL DEFAULT '0' COMMENT '0=no error\r\n1=Unauthorized access\r\n2=not allowed\r\n3=unknown\r\n4=failed login\r\n5=failed'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` int NOT NULL,
  `place_id` int NOT NULL,
  `name` varchar(45) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `media_dir` varbinary(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transmitters`
--

CREATE TABLE `transmitters` (
  `id` int NOT NULL,
  `transmitter_name` varchar(45) COLLATE utf8mb4_general_ci NOT NULL,
  `description` varchar(550) COLLATE utf8mb4_general_ci NOT NULL,
  `weight` varchar(45) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `buildin-rf` varchar(128) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `supported-protocols` varchar(128) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `frequency` varchar(45) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `rf-power` varchar(128) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `rf-channels` varchar(45) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `control-distance` varchar(45) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `antenna-gain` varchar(45) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `operation-voltage` varchar(45) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `operation-current` varchar(45) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `operating-system` varchar(45) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `firmware-upgrade-method` varchar(45) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `display` varchar(45) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `speaker` varchar(45) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `battery` varchar(45) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `battery-type` varchar(45) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `charching` varchar(45) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `ports` varchar(128) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `bimbal` varchar(45) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `module-bay` varchar(45) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Length-Width-Height` varchar(55) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `built-material` varchar(45) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `user-manual` varchar(252) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `other` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` tinyint NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` int DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `updated_by` int DEFAULT NULL,
  `archive` tinyint NOT NULL COMMENT '0=not archived\r\n1=archived'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `role`, `created_at`, `created_by`, `updated_at`, `updated_by`, `archive`) VALUES
(1, 'system', '', '', 3, '2023-09-26 12:49:45', 0, NULL, NULL, 0),
(2, 'Robin', 'test@test', '$2y$10$O3QnOy2yKUtx8Sym3Azk0.nKusvZWh/S8Drw.uXOR2pEXjbyHI/kW', 0, '2023-09-26 12:54:28', 0, NULL, NULL, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fpv-prebuilds`
--
ALTER TABLE `fpv-prebuilds`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transmitters`
--
ALTER TABLE `transmitters`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
