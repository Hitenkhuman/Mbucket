-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2020 at 06:38 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mbucket`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(11) NOT NULL,
  `brand_name` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_name`) VALUES
(1, 'samsung'),
(2, 'oneplus'),
(3, 'vivo'),
(4, 'realme'),
(5, 'oppo'),
(6, 'mi');

-- --------------------------------------------------------

--
-- Table structure for table `mobiles`
--

CREATE TABLE `mobiles` (
  `mobile_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `model_id` int(11) NOT NULL,
  `sim` varchar(128) NOT NULL,
  `screen_dimenstion` varchar(128) NOT NULL,
  `battery` varchar(128) NOT NULL,
  `rear_camera` varchar(128) NOT NULL,
  `front_camera` varchar(128) NOT NULL,
  `ram` varchar(128) NOT NULL,
  `rom` varchar(128) NOT NULL,
  `processor` varchar(128) NOT NULL,
  `display` varchar(128) NOT NULL,
  `weight` varchar(128) NOT NULL,
  `charging` varchar(128) NOT NULL,
  `fingerprint_sensor` varchar(128) NOT NULL,
  `price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mobiles`
--

INSERT INTO `mobiles` (`mobile_id`, `brand_id`, `model_id`, `sim`, `screen_dimenstion`, `battery`, `rear_camera`, `front_camera`, `ram`, `rom`, `processor`, `display`, `weight`, `charging`, `fingerprint_sensor`, `price`) VALUES
(1, 1, 1, '4G+4G', '159x75.1x8.9', '6000', '48+8+5', '20', '4,6', '64,128', 'Exynos 9611', 'super AMOLED 6.4 inches', '188', 'fast charging 15W', 'rear-mounted', 13999),
(2, 1, 2, '4G+4G', '159.2x75.1x8.9', '6000', '64+8+5+5', '32', '6,8', '64,128', 'Exynos 9611', 'super AMOLED,6.4 inches', '191', 'Fast charging 15W', 'rear-mounted', 16499),
(3, 1, 3, '4G+4G', '159.3 x 74.4 x 9.3', '6000', '64+12+5+5', '32', '6,8', '64,128', 'Exynos 9611', 'Super AMOLED,6.5 inches', '203', 'Fast Charging 25W,Reverse CHarging', 'side-mounted', 19499),
(4, 1, 4, '4G+4G', '163.9 x 76.3 x 9.5', '7000', '64+12+5+5', '32', '6,8', '128', 'Qualcomm SDM730 Snapdragon 730G', 'Super AMOLED Plus,6.7 inches', '213', 'Fast charging 25W,Reverse Charging', 'side-mounted', 24999),
(5, 2, 5, '4G+4G', '162.6 x 75.9 x 8.8', 'Li-Po 4085', '48+8+16', '16', '8,12', '256', 'Qualcomm SM8150 Snapdragon 855+', 'Fluid AMOLED, 90Hz, HDR10+,6.67 inches', '206', 'Fast charging 30W', 'under display', 43999),
(6, 2, 6, '5G+5G', '160.2 x 72.9 x 8', 'Li-Po 4300', '48+16+2', '16', '8,12', '128,256', 'Qualcomm SM8250 Snapdragon 865', 'Fluid AMOLED, 90Hz, HDR10+,6.55 inches', '180', 'Fast charging 30W', 'under display', 41999),
(7, 2, 7, '5G+5G', '158.3 x 73.3 x 8.2', 'Li-Po 4115', '48+8+5+2', '32+8', '6,8,12', '128,256', 'Qualcomm SDM765 Snapdragon 765G', 'Fluid AMOLED, 90Hz, HDR10+,6.44 inches', '184', 'Fast charging 30W', 'under display', 24999),
(8, 3, 8, '4G+4G', '159.6 x 75 x 8.5', 'Li-Po 4500', '48+8+2+2', '32+8', '8', '128,256', 'Qualcomm SDM712 Snapdragon 712', 'Super AMOLED, HDR10, 1200 nits,6.44 inches', '186.5', 'Fast charging 33W', 'under display', 24990),
(9, 3, 9, '5G+5G', '158.5 x 72.8 x 8', 'Li-Po 4315', '48+8+13+6', '32', '8', '128,256', 'Qualcomm SDM765 Snapdragon 765G ', 'AMOLED, 90Hz, HDR10+,6.56 inches', '181.5', 'Fast charging 33W', 'under display', 49990),
(10, 4, 10, '4G+4G', '160.9 x 74.3 x 8.7', 'Li-Po 4500', '64+8+2+2', '32', '6,8', '128', 'Qualcomm SM7125 Snapdragon 720G', 'Super AMOLED,	6.4 inches', '182', 'Fast charging 65W', 'under display', 23889),
(11, 4, 11, '4G+4G', '163.8 x 75.8 x 8.9', 'Li-Po 4200', '64+12+8+2', '16+8', '6,8', '128', 'Qualcomm SM8150 Snapdragon 855+ ', 'IPS LCD, 120Hz,6.6 inches', '202', 'Fast charging 30W', 'side-mounted', 24999),
(12, 5, 12, '4G+4G', '159.8 x 72.8 x 7.5', 'Li-Po 4015', '16+8+2+2', '16', '4,6,8', '64,128', 'Qualcomm SM6115 Snapdragon 662', 'Super AMOLED,6.44 inches', '163', 'Fast charging 30W', 'under display', 17990),
(13, 5, 13, '4G+4G', '158.8 x 73.4 x 8.1 ', 'Li-Po 4025', '64+13+8+2', '44+2', '8', '128,256', 'Mediatek Helio P95', 'Super AMOLED, 500 nits,6.4 inches', '175', 'Fast charging 30W', 'under display', 25000),
(14, 5, 14, '4G+4G', '160.2 x 73.2 x 7.7', 'Li-Po 4000', '48+8+2+2', '32', '8', '128,256', 'Qualcomm SM7125 Snapdragon 720G ', 'Super AMOLED, 90Hz, HDR10, 500 nits,	6.5 inches', '161', 'Fast charging 65W', 'under display', 34990),
(15, 6, 15, '5G+5G', '162.5 x 74.8 x 9 ', 'Li-Po 4780', '108+13+2+2', '20', '8,12', '128,256', 'Qualcomm SM8250 Snapdragon 865 ', 'Super AMOLED, 90Hz, HDR10+, 500 nits,6.67 inches', '208', 'Fast charging 30W', 'under display', 49990),
(16, 6, 16, '4G+4G', '162.3 x 77.2 x 8.9', 'Li-Po 5020', '48+8+2+2', '13', '3,4', '64,128', 'MediaTek Helio G85 ', 'IPS LCD, 450 nits,6.53 inches', '199', 'Fast charging 18W\r\nReverse charging 9W', 'rear-mounted', 11999),
(17, 6, 17, '4G+4G', '165.8 x 76.7 x 8.8', 'Li-Po 5020', '48+8+5+2', '16', '4,6', '64,128', 'Qualcomm SM7125 Snapdragon 720G', 'IPS LCD, 450 nits,6.67 inches', '209', 'Fast charging 18W', 'side-mounted', 13999);

-- --------------------------------------------------------

--
-- Table structure for table `models`
--

CREATE TABLE `models` (
  `model_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `mobile_name` varchar(128) NOT NULL,
  `launch_date` date NOT NULL,
  `recommendation` int(11) DEFAULT NULL,
  `mobile_image` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `models`
--

INSERT INTO `models` (`model_id`, `brand_id`, `mobile_name`, `launch_date`, `recommendation`, `mobile_image`) VALUES
(1, 1, 'm21', '2020-03-18', 9, 'samsungm21'),
(2, 1, 'm31', '2020-03-04', 10, 'samsungm31'),
(3, 1, 'm31s', '2020-07-30', 10, 'samsungm31s'),
(4, 1, 'm51', '2020-08-31', 10, 'samsungm51'),
(5, 2, '7t pro', '2019-10-10', 10, 'oneplus7tpro'),
(6, 2, '8', '2020-04-24', 10, 'oneplus8'),
(7, 2, 'nord', '2020-07-21', 10, 'oneplusnord'),
(8, 3, 'v19', '2020-04-06', 8, 'vivov19'),
(9, 3, 'x50 pro', '2020-06-06', 8, 'vivox50pro'),
(10, 4, '7 pro', '2020-07-29', 8, 'realme7pro'),
(11, 4, 'x3', '2020-06-25', 8, 'realmex3'),
(12, 5, 'f17', '2020-09-02', 8, 'oppof17'),
(13, 5, 'reno 3 pro', '2020-03-02', 9, 'opporeno3pro'),
(14, 5, 'reno 4 pro', '2020-07-31', 9, 'opporeno4pro'),
(15, 6, 'mi10', '2020-06-13', 9, 'mi10'),
(16, 6, 'note 9', '2020-07-20', 8, 'redminote9'),
(17, 6, 'note 9 pro', '2020-08-29', 8, 'redminote9pro');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `review_id` int(11) NOT NULL,
  `mobile_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `review_date` date NOT NULL,
  `review` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `suggestion`
--

CREATE TABLE `suggestion` (
  `user_id` int(11) DEFAULT NULL,
  `name` varchar(128) NOT NULL,
  `email_id` varchar(128) NOT NULL,
  `mobile_number` varchar(15) NOT NULL,
  `suggestion` text NOT NULL,
  `sugg_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `user_id` int(11) NOT NULL,
  `fname` varchar(128) NOT NULL,
  `lname` varchar(128) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `image` varchar(128) DEFAULT NULL,
  `dob` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `email_id` varchar(128) NOT NULL,
  `mobile_number` varchar(15) NOT NULL,
  `password` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `email_id`, `mobile_number`, `password`) VALUES
(1, 'hitenkhuman15@gmail.com', '7069990357', 'Hiten@8225'),
(2, 'mihirsangani2001@gmail.com', '9723821144', 'Mihir@1234'),
(90, 'hitenkhuman@gmail.com', '8140699542', 'Hiten@123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`),
  ADD KEY `brand_id` (`brand_id`);

--
-- Indexes for table `mobiles`
--
ALTER TABLE `mobiles`
  ADD PRIMARY KEY (`mobile_id`),
  ADD KEY `brand_id` (`brand_id`),
  ADD KEY `model_id` (`model_id`),
  ADD KEY `mobile_id` (`mobile_id`,`price`);

--
-- Indexes for table `models`
--
ALTER TABLE `models`
  ADD PRIMARY KEY (`model_id`),
  ADD KEY `brand_id` (`brand_id`),
  ADD KEY `model_id` (`model_id`,`mobile_image`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`review_id`),
  ADD KEY `mobile_id` (`mobile_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `review_id` (`review_id`,`mobile_id`);

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `userIndex` (`user_id`,`image`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email_id` (`email_id`),
  ADD UNIQUE KEY `mobile_number` (`mobile_number`),
  ADD KEY `email_id_2` (`email_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `mobiles`
--
ALTER TABLE `mobiles`
  MODIFY `mobile_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `models`
--
ALTER TABLE `models`
  MODIFY `model_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `mobiles`
--
ALTER TABLE `mobiles`
  ADD CONSTRAINT `mobiles_ibfk_1` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`brand_id`),
  ADD CONSTRAINT `mobiles_ibfk_2` FOREIGN KEY (`model_id`) REFERENCES `models` (`model_id`);

--
-- Constraints for table `models`
--
ALTER TABLE `models`
  ADD CONSTRAINT `models_ibfk_1` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`brand_id`);

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_ibfk_1` FOREIGN KEY (`mobile_id`) REFERENCES `mobiles` (`mobile_id`),
  ADD CONSTRAINT `review_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD CONSTRAINT `FK_userid` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
