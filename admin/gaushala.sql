-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2024 at 05:34 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gaushala`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(3) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `Email` varchar(60) NOT NULL,
  `Phone` bigint(10) NOT NULL,
  `Message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `Name`, `Email`, `Phone`, `Message`) VALUES
(1, 'Raj kumar', 'vedprakashsharma2246@gmail.com', 2122112212, 'kkkkkkkkkkkkkkkk'),
(2, 'Vijay', 'vedprakashsharma2246@gmail.com', 2122112212, 'dsafdsfdsafsdafsadf'),
(3, 'Raj kumar', 'vedprakashsharma2246@gmail.com', 7705063770, 'sdfdsfasdfad'),
(4, 'kumar', 'rahuljaiswal273158@gmail.com', 7705063770, 'dddddddddddd'),
(5, 'V555', 'rahuljaiswal273158@gcom', 7705063770, 'sddddddddddddd'),
(6, 'Vijay', 'we@fad', 2122112212, 'dfdfd'),
(7, 'wesdd', 'vedprakashsharma2246.@com', 2122112212, 'dfdfd'),
(8, 'vedprakash', 'vedprakashsharma2246@gmail.com', 7705063770, 'ddddddddddddddd'),
(9, 'Akshay ', 'vedprakashsharma2246@gmail.com', 2122112212, 'gggggggg'),
(10, 'Akshay ', 'rahuljaiswal273158@gmail.com', 7705063770, 'ssssssssssssssssss');

-- --------------------------------------------------------

--
-- Table structure for table `cow_adoption`
--

CREATE TABLE `cow_adoption` (
  `id` int(3) NOT NULL,
  `Breed` varchar(50) NOT NULL,
  `Category` varchar(60) NOT NULL,
  `Batch` int(6) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `Email` varchar(60) NOT NULL,
  `Number` bigint(10) NOT NULL,
  `Country` varchar(25) NOT NULL,
  `Pincode` int(15) NOT NULL,
  `Address` text NOT NULL,
  `Amount` int(5) NOT NULL,
  `Adoption_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cow_adoption`
--

INSERT INTO `cow_adoption` (`id`, `Breed`, `Category`, `Batch`, `Name`, `Email`, `Number`, `Country`, `Pincode`, `Address`, `Amount`, `Adoption_date`) VALUES
(2, 'JERSEY COW', 'Ox', 545, 'Vijay', 'vedprakash46@gmail.com', 7705063770, 'India', 2722050, 'gkp', 12223, '2024-07-11 17:53:10'),
(4, '3', 'COW', 240, 'lavkush', 'vedprakashsharma2246@gmail.com', 7705063770, 'India', 272205, 'hkoo', 2400, '2024-07-16 00:24:46'),
(6, 'GUERNSEY', 'COW', 41, 'Raj kumar', 'vedprakashsharma2246@gmail.com', 2122112212, 'India', 22222, 'ddddf', 3323, '2024-07-16 00:28:24'),
(7, 'AYRSHIRE', 'COW', 74, 'ramesh', 'rahuljaiswal273158@gmail.com', 7705066377, 'India', 272204, 'ghk', 2000, '2024-07-16 00:29:15'),
(8, '3', 'COW', 24, 'Raj', 'vedprakashsharma2246@gmail.com', 2122112212, 'India', 22402, 'ddaf', 1022, '2024-07-16 00:32:30');

-- --------------------------------------------------------

--
-- Table structure for table `cow_category`
--

CREATE TABLE `cow_category` (
  `id` int(3) NOT NULL,
  `Category` varchar(40) NOT NULL,
  `Breed` varchar(40) NOT NULL,
  `Batch` int(6) NOT NULL,
  `Image` varchar(150) NOT NULL,
  `DOB` date NOT NULL,
  `Age` int(3) NOT NULL,
  `Amount` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cow_category`
--

INSERT INTO `cow_category` (`id`, `Category`, `Breed`, `Batch`, `Image`, `DOB`, `Age`, `Amount`) VALUES
(1, 'Cow', 'jercey cow', 102, '', '2023-07-09', 1, 2500),
(2, 'Cow', 'jercey cow', 103, '', '2022-07-11', 2, 3000),
(3, 'Ox', 'Badari', 102, '', '2023-07-09', 1, 2300),
(4, 'Cow', 'Badari', 105, '', '2021-07-09', 3, 2000),
(5, 'Cow', 'Badari', 106, '', '2021-07-09', 3, 2100),
(6, 'Cow', 'jercey cow', 109, '', '2023-07-09', 1, 3000);

-- --------------------------------------------------------

--
-- Table structure for table `donations`
--

CREATE TABLE `donations` (
  `id` int(3) NOT NULL,
  `Title` varchar(5) NOT NULL,
  `First_Name` varchar(40) NOT NULL,
  `Last_Name` varchar(40) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Phone` bigint(10) NOT NULL,
  `Country` varchar(80) NOT NULL,
  `State` varchar(100) NOT NULL,
  `Address` text NOT NULL,
  `Donation_date` datetime NOT NULL DEFAULT current_timestamp(),
  `Amount` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donations`
--

INSERT INTO `donations` (`id`, `Title`, `First_Name`, `Last_Name`, `Email`, `Phone`, `Country`, `State`, `Address`, `Donation_date`, `Amount`) VALUES
(1, 'Mr.', 'vedprakash', 'sharma', 'vedprakashsharma2246@gmail.com', 7705063770, 'India', 'kklkk', 'kklkk', '2024-07-15 23:51:04', 501),
(2, 'Mr.', 'Raj', 'sharma', 'rahuljaiswal273158@gmail.com', 7705063770, 'India', 'hhhhhhhhhhhh', 'hhhhhhhhhhhh', '2024-07-15 23:52:52', 501),
(4, 'Mr.', 'chadani', 'sharma', 'vedprakashsharma2246@gmail.com', 7705063740, 'India', 'ddddddddd', 'ddddddddd', '2024-07-15 23:54:58', 501),
(5, 'Mr.', 'Ramesh', 'Jaiswal', 'vedprakashsharma2246@gmail.com', 7705063770, 'India', 'ddddddddddd', 'ddddddddddd', '2024-07-15 23:55:48', 501),
(6, 'Mr.', 'Kajal', 'sharma', 'vedprakashsharma2246@gmail.com', 9721308763, 'India', 'fffffffffff', 'fffffffffff', '2024-07-15 23:58:29', 501),
(7, 'Mr.', 'kailash', 'sharma', 'vedprakashsharma2246@gmail.com', 7705063770, 'India', 'utter pradesh', 'ddddd', '2024-07-16 00:01:36', 501),
(8, 'Mr.', 'Raj', 'chaurasiya', 'sds@fsd', 7705063770, 'India', 'utter pradesh', 'jjjjjjjjjj', '2024-07-16 00:15:41', 501),
(9, 'Mr.', 'vijay', 'Jaiswal', 'rahuljaiswal273158@gmail.com', 7705063770, 'India', 'utter pradesh', 'hhhhhhhhhhh', '2024-07-16 18:08:06', 501),
(10, 'Mr.', 'RAVI', 'chaurasiya', 'vedprakashsharma2246@gmail.com', 7705063770, 'India', 'utter pradesh', 'GGGGGGGGGGGG', '2024-07-16 21:03:43', 501);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(3) NOT NULL,
  `Event_Name` varchar(100) NOT NULL,
  `Event_Image` varchar(80) NOT NULL,
  `Event_Place` varchar(70) NOT NULL,
  `Event_description` text NOT NULL,
  `Event_Start_Date` datetime NOT NULL,
  `Event_End_Date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `Event_Name`, `Event_Image`, `Event_Place`, `Event_description`, `Event_Start_Date`, `Event_End_Date`) VALUES
(1, 'The Culture of India. Rebirth', '', 'Ghaziabad', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Debitis quisquam tenetur laboriosam quod, iste corrupti, doloremque sed aperiam quae sapiente a in adipisci at. Sit accusamus nemo non dignissimos porro?', '2024-07-16 13:16:49', '2024-07-18 13:16:49'),
(2, 'The Culture of India. Rebirth', '', 'Ghaziabad', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Debitis quisquam tenetur laboriosam quod, iste corrupti, doloremque sed aperiam quae sapiente a in adipisci at. Sit accusamus nemo non dignissimos porro?', '2024-07-16 13:16:49', '2024-07-20 13:16:49'),
(3, 'The Culture of India. Rebirth', '', 'Ghaziabad', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Debitis quisquam tenetur laboriosam quod, iste corrupti, doloremque sed aperiam quae sapiente a in adipisci at. Sit accusamus nemo non dignissimos porro?', '2024-07-16 13:16:49', '2024-07-30 13:16:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cow_adoption`
--
ALTER TABLE `cow_adoption`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cow_category`
--
ALTER TABLE `cow_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donations`
--
ALTER TABLE `donations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `cow_adoption`
--
ALTER TABLE `cow_adoption`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `cow_category`
--
ALTER TABLE `cow_category`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `donations`
--
ALTER TABLE `donations`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
