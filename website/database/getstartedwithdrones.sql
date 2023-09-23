-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 23, 2023 at 11:12 PM
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
-- Table structure for table `fpv_goggles`
--

CREATE TABLE `fpv_goggles` (
  `id` int(11) NOT NULL,
  `goggles_name` varchar(255) NOT NULL,
  `manufacturer` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `receiver_type` varchar(50) DEFAULT NULL,
  `receiver_upgradable` tinyint(1) DEFAULT NULL,
  `receiver_replaceable` tinyint(1) DEFAULT NULL,
  `analog` tinyint(1) DEFAULT NULL,
  `digital` tinyint(1) DEFAULT NULL,
  `display_type` varchar(15) NOT NULL,
  `screen_resolution` varchar(50) DEFAULT NULL,
  `field_of_view` varchar(50) DEFAULT NULL COMMENT 'FOV',
  `screen_ratio` varchar(55) NOT NULL,
  `lenses_ipd` varchar(255) NOT NULL,
  `screen_size` varchar(50) DEFAULT NULL,
  `screen_refresh_rate` varchar(50) DEFAULT NULL,
  `screen_focal_adjust` varchar(255) NOT NULL COMMENT 'for people with glasses',
  `antenna_connector` varchar(50) DEFAULT NULL,
  `dvr` tinyint(1) DEFAULT NULL,
  `audio` tinyint(1) DEFAULT NULL,
  `hdmi_input` tinyint(1) DEFAULT NULL,
  `weight` varchar(55) NOT NULL COMMENT 'in grams',
  `battery_voltage` varchar(50) DEFAULT NULL,
  `power_consumption` varchar(50) DEFAULT NULL,
  `user_manual` varchar(255) DEFAULT NULL,
  `other_features` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fpv_prebuilds`
--

CREATE TABLE `fpv_prebuilds` (
  `id` int(11) NOT NULL,
  `fpv_prebuild_name` varchar(55) NOT NULL,
  `manufacturer` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `drone_class` tinyint(2) DEFAULT NULL COMMENT '1=race\r\n2=freestyle\r\n3=race/freestyle\r\n4=cinewhoop\r\n5=cinelifter\r\n6=tinywhoop',
  `frame` varchar(128) DEFAULT NULL,
  `arms` int(3) DEFAULT NULL COMMENT 'arm thickness in mm',
  `wheelbase` int(5) DEFAULT NULL COMMENT 'wheelbase in mm',
  `prop_duct` tinyint(1) DEFAULT NULL COMMENT '0=no 1=yes',
  `fc` varchar(128) DEFAULT NULL,
  `micro_controler` varchar(55) DEFAULT NULL,
  `imu` varchar(55) DEFAULT NULL COMMENT 'inertial measurement unit (gyro)',
  `bluetooth_ble` varchar(55) DEFAULT NULL,
  `osd_chip` varchar(55) DEFAULT NULL,
  `blackbox` varchar(55) DEFAULT NULL,
  `fc_usb_plug` tinyint(1) DEFAULT NULL COMMENT '0=none\r\n1=micro-usb\r\n2=usb-c',
  `esc` varchar(128) DEFAULT NULL,
  `power_input` varchar(128) DEFAULT NULL COMMENT 'power input of the esc',
  `vtx` varchar(128) DEFAULT NULL,
  `camera` varchar(128) DEFAULT NULL,
  `antenna` varchar(128) DEFAULT NULL COMMENT 'antenna of the vtx',
  `reciever` varchar(128) DEFAULT NULL,
  `buzzer` varchar(55) DEFAULT NULL,
  `motors` varchar(128) DEFAULT NULL,
  `props` varchar(128) DEFAULT NULL,
  `gps` varchar(128) DEFAULT NULL,
  `weight` varchar(45) DEFAULT NULL COMMENT 'without battery',
  `length_width_height` varchar(55) DEFAULT NULL COMMENT 'Length×Width×Height in mm',
  `strap` varchar(128) DEFAULT NULL COMMENT 'battery strap',
  `led_lighting` varchar(128) DEFAULT NULL,
  `battery_conector` varchar(45) DEFAULT NULL,
  `other` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fpv_prebuilds`
--

INSERT INTO `fpv_prebuilds` (`id`, `fpv_prebuild_name`, `manufacturer`, `description`, `drone_class`, `frame`, `arms`, `wheelbase`, `prop_duct`, `fc`, `micro_controler`, `imu`, `bluetooth_ble`, `osd_chip`, `blackbox`, `fc_usb_plug`, `esc`, `power_input`, `vtx`, `camera`, `antenna`, `reciever`, `buzzer`, `motors`, `props`, `gps`, `weight`, `length_width_height`, `strap`, `led_lighting`, `battery_conector`, `other`) VALUES
(1, 'DJI FPV', '', 'Combines ease of use with FPV excitement.', 3, 'DJI Frame', 4, 200, 0, 'DJI FC', 'DJI Microcontroller', 'DJI IMU', 'Yes', 'DJI OSD Chip', 'Yes', 2, 'DJI ESC', '6S LiPo', 'DJI VTX', 'DJI Camera', 'DJI Antenna', 'DJI Receiver', 'Yes', 'DJI Motors', 'DJI Props', 'Yes', '750g', '200×200×50', 'DJI Strap', 'Yes', 'XT60', NULL),
(2, 'iFlight Nazgul5', '', 'Known for durability and performance.', 3, 'iFlight Frame', 5, 250, 0, 'iFlight FC', 'iFlight Microcontroller', 'iFlight IMU', 'No', 'iFlight OSD Chip', 'Yes', 2, 'iFlight ESC', '4S LiPo', 'iFlight VTX', 'iFlight Camera', 'iFlight Antenna', 'iFlight Receiver', 'No', 'iFlight Motors', 'iFlight Props', 'No', '300g', '250×250×60', 'iFlight Strap', 'No', 'XT60', NULL),
(3, 'EMAX Tinyhawk II', '', 'Micro FPV drone for indoor and outdoor flying.', 6, 'EMAX Frame', 2, 75, 1, 'EMAX FC', 'EMAX Microcontroller', 'EMAX IMU', 'No', 'EMAX OSD Chip', 'No', 1, 'EMAX ESC', '1S LiPo', 'EMAX VTX', 'EMAX Camera', 'EMAX Antenna', 'EMAX Receiver', 'Yes', 'EMAX Motors', 'EMAX Props', 'No', '32g', '75×75×25', 'EMAX Strap', 'No', 'PH2.0', NULL);

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
  `manufacturer` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `weight` varchar(45) DEFAULT NULL,
  `buildin_rf` varchar(128) DEFAULT NULL,
  `supported_protocols` varchar(128) DEFAULT NULL,
  `frequency` varchar(45) DEFAULT NULL,
  `rf_power` varchar(128) DEFAULT NULL,
  `rf_channels` varchar(45) DEFAULT NULL,
  `control_distance` varchar(45) DEFAULT NULL,
  `antenna_gain` varchar(45) DEFAULT NULL,
  `operation_voltage` varchar(45) DEFAULT NULL,
  `operation_current` varchar(45) DEFAULT NULL,
  `operating_system` varchar(45) DEFAULT NULL,
  `firmware_upgrade_method` varchar(45) DEFAULT NULL,
  `display` varchar(45) DEFAULT NULL,
  `speaker` varchar(45) DEFAULT NULL,
  `battery` varchar(45) DEFAULT NULL,
  `battery_type` varchar(45) DEFAULT NULL,
  `charching` varchar(45) DEFAULT NULL,
  `ports` varchar(128) DEFAULT NULL,
  `gimbal` varchar(45) DEFAULT NULL,
  `module_bay` varchar(45) DEFAULT NULL,
  `length_width_height` varchar(55) DEFAULT NULL,
  `built_material` varchar(45) DEFAULT NULL,
  `user_manual` varchar(252) DEFAULT NULL,
  `other` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transmitters`
--

INSERT INTO `transmitters` (`id`, `transmitter_name`, `manufacturer`, `description`, `weight`, `buildin_rf`, `supported_protocols`, `frequency`, `rf_power`, `rf_channels`, `control_distance`, `antenna_gain`, `operation_voltage`, `operation_current`, `operating_system`, `firmware_upgrade_method`, `display`, `speaker`, `battery`, `battery_type`, `charching`, `ports`, `gimbal`, `module_bay`, `length_width_height`, `built_material`, `user_manual`, `other`) VALUES
(1, 'Radiomaster TX16S', '', 'The Radiomaster TX16S is a versatile and popular FPV transmitter designed for drone enthusiasts. It comes with a variety of advanced features and customization options.', '980 grams', 'Built-in RF: FrSky R9M Lite Pro', 'Supported Protocols: FrSky, ELRS, Crossfire', '2.4GHz', '100mW', '16', 'Up to 1,000 meters', 'Antenna Gain: 2dBi', 'Operation Voltage: 7.4V', 'Operation Current: 350mA', 'Operating System: OpenTX', 'Firmware Upgrade Method: USB-C', '3.5-inch color touchscreen', 'Built-in speaker and audio jack', '4,000mAh Li-ion battery', 'Battery Type: Lithium-ion', 'Charging: USB-C', 'Ports: Micro USB, Headphone jack', 'Hall effect gimbals ', 'Module Bay: Yes', 'Dimensions: 180mm x 190mm x 58mm', 'Built Material: Plastic and Metal', 'User Manual: https://example.com/tx16s-user-manual.pdf', NULL),
(2, 'Radiomaster TX12', '', 'The Radiomaster TX12 is an excellent entry-level FPV transmitter designed for drone enthusiasts. It offers a balance between features and affordability.', '680 grams', 'Built-in RF: FrSky R9M Lite Pro', 'Supported Protocols: FrSky, ELRS', '2.4GHz', '100mW', '16', 'Up to 800 meters', 'Antenna Gain: 2dBi', 'Operation Voltage: 7.4V', 'Operation Current: 250mA', 'Operating System: OpenTX', 'Firmware Upgrade Method: USB-C', '2.8-inch color touchscreen', 'Built-in speaker and audio jack', '2,500mAh Li-ion battery', 'Battery Type: Lithium-ion', 'Charging: USB-C', 'Ports: Micro USB, Headphone jack', 'Hall effect gimbals ', 'Module Bay: No', 'Dimensions: 170mm x 180mm x 52mm', 'Built Material: Plastic', 'User Manual: https://example.com/tx12-user-manual.pdf', NULL),
(3, 'Radiomaster Zoro', '', 'The Radiomaster Zoro is a high-end FPV transmitter designed for professional drone pilots. It offers advanced features and precision control.', '730 grams', 'Built-in RF: FrSky R9M Lite Pro', 'Supported Protocols: FrSky, ELRS', '2.4GHz', '500mW', '24', 'Up to 1,000 meters', 'Antenna Gain: 3dBi', 'Operation Voltage: 7.4V', 'Operation Current: 300mA', 'Operating System: OpenTX', 'Firmware Upgrade Method: SD Card', '4.3-inch color touchscreen', 'Built-in speaker and audio jack', '3,000mAh LiPo battery', 'Battery Type: Lithium Polymer', 'Charging: USB-C', 'Ports: USB-C, Headphone jack', 'Hall effect gimbals ', 'Module Bay: Yes, JR bay', 'Dimensions: 190mm x 200mm x 58mm', 'Built Material: Aluminum alloy and plastic', 'User Manual: https://example.com/zoro-user-manual.pdf', NULL),
(4, 'FrSky Taranis X9D Plus', '', 'Reliable and feature-rich transmitter', '880g', 'Yes', 'FrSky ACCST', '2.4GHz', '100mW', '16', 'Over 1km', 'N/A', '7.2V', '260mA', 'OpenTX', 'SD Card', 'Yes', 'Yes', '2000mAh', 'NiMH', 'Yes', 'USB, SD Card', 'Hall effect gimbals ', 'Yes', '190x215x85mm', 'Plastic', 'FrSky Taranis X9D Plus Manual', NULL),
(5, 'Flysky Nirvana NV14', '', 'Ergonomic transmitter with good build quality', '700g', 'Yes', 'AFHDS 2A', '2.4GHz', '100mW', '10', 'Over 1km', 'N/A', '7.4V', '260mA', 'OpenTX', 'USB', 'Yes', 'Yes', '2200mAh', 'LiPo', 'Yes', 'USB', 'Hall effect gimbals ', 'Yes', '200x95x185mm', 'Plastic', 'Flysky Nirvana NV14 Manual', NULL),
(6, 'Jumper T-Lite', '', 'Compact and affordable transmitter', '250g', 'Yes', 'Multi-protocol', '2.4GHz', '100mW', '4', 'Over 1km', 'N/A', '7.4V', '260mA', 'OpenTX', 'USB', 'No', 'No', '1000mAh', 'LiPo', 'Yes', 'USB', 'Hall effect gimbals ', 'No', '170x159x108mm', 'Plastic', 'Jumper T-Lite Manual', NULL),
(7, 'Futaba 16SZ', '', 'High-quality transmitter with extensive features', '1400g', 'Yes', 'FASSTest', '2.4GHz', '100mW', '18', 'Over 1km', 'N/A', '7.2V', '260mA', 'Futaba', 'SD Card', 'Yes', 'Yes', '4000mAh', 'LiFe', 'Yes', 'USB, SD Card', 'Hall effect gimbals ', 'Yes', '234x190x69mm', 'Aluminum', 'Futaba 16SZ Manual', NULL),
(8, 'FrSky X-Lite', '', 'Compact game controller-style transmitter', '300g', 'Yes', 'FrSky ACCST', '2.4GHz', '100mW', '16', 'Over 1km', 'N/A', '7.2V', '260mA', 'OpenTX', 'SD Card', 'Yes', 'Yes', '1850mAh', 'LiPo', 'Yes', 'USB, SD Card', 'Hall effect gimbals ', 'Yes', '180x190x95mm', 'Plastic', 'FrSky X-Lite Manual', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fpv_goggles`
--
ALTER TABLE `fpv_goggles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fpv_prebuilds`
--
ALTER TABLE `fpv_prebuilds`
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
-- AUTO_INCREMENT for table `fpv_goggles`
--
ALTER TABLE `fpv_goggles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fpv_prebuilds`
--
ALTER TABLE `fpv_prebuilds`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
