-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2024 at 04:18 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webdevfinalproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(1) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `con_password` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `fullname`, `email`, `password`, `con_password`, `type`) VALUES
(1, 'asd', 'asd', 'asd', 'asd', 'admin'),
(2, 'Keth Dominic Keth Dominic Tacatani', 'kethdominic.tacatani@bisu.edu.ph', '123', '123', 'admin'),
(3, 'asd', 'asd', 'asd', 'asd', 'user'),
(4, 'sdf', 'sdf', 'asda', 'asd', 'user'),
(5, 'chandol', 'chand@gmail.com', 'qwe', 'qwe', 'admin'),
(6, 'tiyo', 'tiyo@gmail.com', 'qwe', 'qwe', 'user'),
(7, 'Keth Dominic Tacatani', 'kethtacatani@gmail.com', '123', '123', 'admin'),
(8, 'Mylene Bulala', 'mylenebulala123@gmail.com', '123', '123', 'admin'),
(9, 'ricky aranas', 'rickars@gmail.com', '123', '123', 'admin'),
(10, 'asdasd', 'asdas@gns', 'qwe', 'qwe', 'admin'),
(11, 'we', 'qwe@gm', '123', '123', 'admin'),
(12, 'keth', 'kethtacatani1@gmail.com', 'qwe', 'qwe', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` enum('active','not active') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `email`, `password`, `status`) VALUES
(10, 'John Doe2', 'doe2@gmail.com', 'admin1234', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `website_info`
--

CREATE TABLE `website_info` (
  `id` int(1) NOT NULL,
  `site_name` varchar(100) NOT NULL,
  `about` varchar(5000) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `location` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `website_info`
--

INSERT INTO `website_info` (`id`, `site_name`, `about`, `contact`, `email`, `location`) VALUES
(3, 'Keth Tacatani Travels', ' HEllo and Welcome to the enchanting city of Veridian! Nestled amidst breathtaking landscapes and steeped in rich history, Veridian is a mesmerizing tourist destination that promises an unforgettable experience. As you wander through its cobbled streets, you\'ll be captivated by the fusion of old-world charm and modern elegance that permeates the air. Explore the ancient ruins that whisper tales of bygone eras or lose yourself in the vibrant local markets, where artisans proudly showcase their craftsmanship. For nature enthusiasts, Veridian offers an abundance of natural wonders, from majestic waterfalls cascading down verdant mountains to serene lakes shimmering like liquid diamonds. Immerse yourself in the city\'s cultural tapestry by attending lively festivals that celebrate music, art, and gastronomy. Don\'t forget to indulge in Veridian\'s renowned culinary delights, where traditional recipes are given a contemporary twist, leaving your taste buds yearning for more. With its warm hospitality and a multitude of attractions, Veridian beckons you to embark on an extraordinary journey filled with awe-inspiring sights and unforgettable memories. \r\n\r\n\r\n\r\n\r\n', '013123123', 'keth@gmail.coms', 'San Isidro Calape Bohols');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `website_info`
--
ALTER TABLE `website_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `website_info`
--
ALTER TABLE `website_info`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
