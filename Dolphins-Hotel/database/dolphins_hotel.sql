-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2024 at 06:14 PM
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
-- Database: `dolphins_hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_cred`
--

CREATE TABLE `admin_cred` (
  `sr_no` int(11) NOT NULL,
  `admin_name` varchar(50) NOT NULL,
  `admin_pass` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_cred`
--

INSERT INTO `admin_cred` (`sr_no`, `admin_name`, `admin_pass`) VALUES
(1, 'xuxhia07', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `contact_details`
--

CREATE TABLE `contact_details` (
  `sr_no` int(11) NOT NULL,
  `address` varchar(50) NOT NULL,
  `gmap` varchar(100) NOT NULL,
  `pn1` varchar(20) NOT NULL,
  `pn2` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `fb` varchar(100) NOT NULL,
  `ig` varchar(100) NOT NULL,
  `tw` varchar(100) NOT NULL,
  `tk` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_details`
--

INSERT INTO `contact_details` (`sr_no`, `address`, `gmap`, `pn1`, `pn2`, `email`, `fb`, `ig`, `tw`, `tk`) VALUES
(1, 'Blue Hotel , City of Dasma , Philippines', 'https://maps.app.goo.gl/AhHcaRz336t3Peha9', '6391234567890', '6391234567890', 'dolphinshotel@gmail.com', 'https://www.facebook.com/', 'https://www.instagram.com/', 'https://www.twitter.com/', 'https://www.tiktok.com/');

-- --------------------------------------------------------

--
-- Table structure for table `facilities`
--

CREATE TABLE `facilities` (
  `id` int(11) NOT NULL,
  `icon` varchar(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `facilities`
--

INSERT INTO `facilities` (`id`, `icon`, `name`, `description`) VALUES
(1, 'IMG_26092.svg', 'Wifi', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate, quam accusamus voluptates officia recusandae veniam minima saepe nisi! Tempora fuga voluptatibus minima.'),
(2, 'IMG_26135.svg', 'Aircon', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate, quam accusamus voluptates officia recusandae veniam minima saepe nisi! Tempora fuga voluptatibus minima.'),
(3, 'IMG_55732.svg', 'Television', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate, quam accusamus voluptates officia recusandae veniam minima saepe nisi! Tempora fuga voluptatibus minima.'),
(4, 'IMG_52563.svg', 'Bathtub', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate, quam accusamus voluptates officia recusandae veniam minima saepe nisi! Tempora fuga voluptatibus minima.'),
(5, 'IMG_13675.svg', 'Wardrobe', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate, quam accusamus voluptates officia recusandae veniam minima saepe nisi! Tempora fuga voluptatibus minima.'),
(6, 'IMG_82731.svg', 'Toiletries', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate, quam accusamus voluptates officia recusandae veniam minima saepe nisi! Tempora fuga voluptatibus minima.'),
(7, 'IMG_14936.svg', 'Spa', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate, quam accusamus voluptates officia recusandae veniam minima saepe nisi! Tempora fuga voluptatibus minima.'),
(8, 'IMG_39501.svg', 'Room Service', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate, quam accusamus voluptates officia recusandae veniam minima saepe nisi! Tempora fuga voluptatibus minima.'),
(9, 'IMG_74048.svg', 'Refrigerator', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate, quam accusamus voluptates officia recusandae veniam minima saepe nisi! Tempora fuga voluptatibus minima.'),
(10, 'IMG_28179.svg', 'Pool', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate, quam accusamus voluptates officia recusandae veniam minima saepe nisi! Tempora fuga voluptatibus minima.'),
(11, 'IMG_52170.svg', 'Gym', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate, quam accusamus voluptates officia recusandae veniam minima saepe nisi! Tempora fuga voluptatibus minima.'),
(12, 'IMG_18061.svg', 'Desk', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate, quam accusamus voluptates officia recusandae veniam minima saepe nisi! Tempora fuga voluptatibus minima.'),
(13, 'IMG_54199.svg', 'Café', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate, quam accusamus voluptates officia recusandae veniam minima saepe nisi! Tempora fuga voluptatibus minima.'),
(14, 'IMG_79814.svg', 'Free Breakfast', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate, quam accusamus voluptates officia recusandae veniam minima saepe nisi! Tempora fuga voluptatibus minima.'),
(15, 'IMG_41746.svg', 'Mini Bar', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate, quam accusamus voluptates officia recusandae veniam minima saepe nisi! Tempora fuga voluptatibus minima.');

-- --------------------------------------------------------

--
-- Table structure for table `features`
--

CREATE TABLE `features` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `features`
--

INSERT INTO `features` (`id`, `name`) VALUES
(1, 'Room'),
(2, 'Bed'),
(3, 'Bathroom'),
(4, 'Kitchen'),
(5, 'Balcony'),
(6, 'Sofa'),
(7, 'Living Area');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `area` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `adult` int(11) NOT NULL,
  `children` int(11) NOT NULL,
  `description` varchar(350) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `name`, `area`, `price`, `quantity`, `adult`, `children`, `description`, `status`) VALUES
(14, 'Simple Room', 123, 600, 100, 1, 1, 'This is my room', 1);

-- --------------------------------------------------------

--
-- Table structure for table `room_images`
--

CREATE TABLE `room_images` (
  `sr_no` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `image` varchar(150) NOT NULL,
  `thumb` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `sr_no` int(11) NOT NULL,
  `site_title` varchar(50) NOT NULL,
  `site_about` varchar(250) NOT NULL,
  `shutdown` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`sr_no`, `site_title`, `site_about`, `shutdown`) VALUES
(1, 'Dolphins Hotel', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_queries`
--

CREATE TABLE `user_queries` (
  `sr_no` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `message` varchar(500) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `seen` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_queries`
--

INSERT INTO `user_queries` (`sr_no`, `name`, `email`, `subject`, `message`, `date`, `seen`) VALUES
(3, 'Customer', 'customer123@gmail.com', 'Customer', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua', '2024-04-25', 1),
(4, 'Customer1', 'customer123@gmail.com', 'Customer', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua', '2024-04-25', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_cred`
--
ALTER TABLE `admin_cred`
  ADD PRIMARY KEY (`sr_no`);

--
-- Indexes for table `contact_details`
--
ALTER TABLE `contact_details`
  ADD PRIMARY KEY (`sr_no`);

--
-- Indexes for table `facilities`
--
ALTER TABLE `facilities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `features`
--
ALTER TABLE `features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room_images`
--
ALTER TABLE `room_images`
  ADD PRIMARY KEY (`sr_no`),
  ADD KEY `room_id` (`room_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`sr_no`);

--
-- Indexes for table `user_queries`
--
ALTER TABLE `user_queries`
  ADD PRIMARY KEY (`sr_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_cred`
--
ALTER TABLE `admin_cred`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact_details`
--
ALTER TABLE `contact_details`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `facilities`
--
ALTER TABLE `facilities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `features`
--
ALTER TABLE `features`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `room_images`
--
ALTER TABLE `room_images`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_queries`
--
ALTER TABLE `user_queries`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `room_images`
--
ALTER TABLE `room_images`
  ADD CONSTRAINT `room_images_ibfk_1` FOREIGN KEY (`room_id`) REFERENCES `rooms` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
