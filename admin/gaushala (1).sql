-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2024 at 01:06 PM
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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(3) NOT NULL,
  `Admin_Name` varchar(40) NOT NULL,
  `Image` varchar(150) NOT NULL,
  `Password` int(10) NOT NULL,
  `Email` varchar(60) NOT NULL,
  `Number` bigint(10) NOT NULL,
  `Position` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `Admin_Name`, `Image`, `Password`, `Email`, `Number`, `Position`) VALUES
(1, 'admin', 'gray-user-profile-icon-png-fP8Q1P.png', 12345, 'vedprakashsharma2246@gmail.com', 7705063770, 'developer');

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
(2, 'Vijay', 'vedprakashsharma2246@gmail.com', 2122112212, 'dsafdsfdsafsdafsadf'),
(3, 'Raj kumar', 'vedprakashsharma2246@gmail.com', 7705063770, 'sdfdsfasdfad'),
(4, 'kumar', 'rahuljaiswal273158@gmail.com', 7705063770, 'dddddddddddd'),
(5, 'V555', 'rahuljaiswal273158@gcom', 7705063770, 'sddddddddddddd'),
(6, 'Vijay', 'we@fad', 2122112212, 'dfdfd'),
(7, 'wesdd', 'vedprakashsharma2246.@com', 2122112212, 'dfdfd'),
(8, 'vedprakash', 'vedprakashsharma2246@gmail.com', 7705063770, 'ddddddddddddddd'),
(9, 'Akshay ', 'vedprakashsharma2246@gmail.com', 2122112212, 'gggggggg'),
(11, 'vivek sharma', 'rahuljaiswal273158@gmail.com', 7705803770, 'ddddddddddddddddddddd'),
(12, 'Mohit sharma', 'vedprakashsharma2246@gmail.com', 7705063770, 'ddddddddddddddddddddddddddddd');

-- --------------------------------------------------------

--
-- Table structure for table `cows`
--

CREATE TABLE `cows` (
  `id` int(6) NOT NULL,
  `Image` varchar(200) NOT NULL,
  `Batch_Id` int(8) NOT NULL,
  `Breed` varchar(60) NOT NULL,
  `Category` varchar(30) NOT NULL,
  `Cow_DOB` varchar(15) NOT NULL,
  `Age` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cows`
--

INSERT INTO `cows` (`id`, `Image`, `Batch_Id`, `Breed`, `Category`, `Cow_DOB`, `Age`) VALUES
(1, 'cow1.avif', 124, 'BROWN SWISS', 'BROWN SWISS', '12/10/2022', 2),
(2, 'cow1.avif', 142, 'JERSEY COW', 'JERSEY COW', '12/10/2022', 2),
(3, 'cow2.avif', 1235, 'BROWN SWISS', 'BROWN SWISS', '12/12/2022', 2),
(4, 'cow3.avif', 1256, 'GUERNSEY', 'GUERNSEY', '12/10/2023', 1),
(5, 'cow1.avif', 212, 'JERSEY COW', 'JERSEY COW', '12/10/12/10/202', 2),
(6, 'cow1.avif', 321, 'JERSEY COW', 'JERSEY COW', '12/10/2022', 2);

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
(6, 'GUERNSEY', 'COW', 41, 'Raj kumar', 'vedprakashsharma2246@gmail.com', 2122112212, 'India', 22222, 'ddddf', 3323, '2024-07-16 00:28:24'),
(7, 'AYRSHIRE', 'COW', 74, 'ramesh', 'rahuljaiswal273158@gmail.com', 7705066377, 'India', 272204, 'ghk', 2000, '2024-07-16 00:29:15'),
(9, 'JERSEY COW', 'COW', 212, 'Vijay', 'vedprakashsharma2246@gmail.com', 7705063770, 'India', 272205, 'gkp', 2500, '2024-07-26 15:41:56');

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
(1, 'Cow', 'jercey cow', 102, 'cow2.avif', '2023-07-09', 1, 2500),
(2, 'Cow', 'jercey cow', 103, 'cow1.avif', '2022-07-11', 2, 3000),
(3, 'Ox', 'Badari', 102, 'cow1.avif', '2023-07-09', 1, 2300),
(4, 'Cow', 'Badari', 105, 'cow2.avif', '2021-07-09', 3, 2000),
(6, 'Cow', 'jercey cow', 109, 'cow3.avif', '2023-07-09', 1, 3000);

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
(5, 'Mr.', 'Ramesh', 'Jaiswal', 'vedprakashsharma2246@gmail.com', 7705063770, 'India', 'ddddddddddd', 'ddddddddddd', '2024-07-15 23:55:48', 501),
(6, 'Mr.', 'Kajal', 'sharma', 'vedprakashsharma2246@gmail.com', 9721308763, 'India', 'fffffffffff', 'fffffffffff', '2024-07-15 23:58:29', 501),
(7, 'Mr.', 'kailash', 'sharma', 'vedprakashsharma2246@gmail.com', 7705063770, 'India', 'utter pradesh', 'ddddd', '2024-07-16 00:01:36', 501),
(9, 'Mr.', 'vijay', 'Jaiswal', 'rahuljaiswal273158@gmail.com', 7705063770, 'India', 'utter pradesh', 'hhhhhhhhhhh', '2024-07-16 18:08:06', 501),
(10, 'Mr.', 'RAVI', 'chaurasiya', 'vedprakashsharma2246@gmail.com', 7705063770, 'India', 'utter pradesh', 'GGGGGGGGGGGG', '2024-07-16 21:03:43', 501),
(11, 'Mrs.', 'Kajal', 'Jaiswal', 'vedprakashsharma2246@gmail.com', 7705063770, 'India', 'utter pradesh', 'delhi', '2024-07-26 15:35:33', 501);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(3) NOT NULL,
  `Event_Name` varchar(100) NOT NULL,
  `Event_Image` varchar(80) NOT NULL,
  `Date` date NOT NULL DEFAULT current_timestamp(),
  `Event_start_time` varchar(20) NOT NULL,
  `Event_end_time` varchar(20) NOT NULL,
  `Event_description` text NOT NULL,
  `Publish_Status` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `Event_Name`, `Event_Image`, `Date`, `Event_start_time`, `Event_end_time`, `Event_description`, `Publish_Status`) VALUES
(5, 'gobhardhan pooja2', 'IMG_0916.JPG', '2024-07-18', '05:20', '20:06', 'ssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss', 1),
(6, 'gobhardhan pooja2', 'IMG_0921.JPG', '2024-07-25', '14:44', '06:56', 'wwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwww', 1),
(8, 'gobhardhan pooja2', 'IMG_0919.JPG', '2024-08-01', '10:20', '14:05', 'dssssssdswwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwww', 0),
(9, 'vishavakarma pooja', 'IMG_0917.JPG', '2024-07-27', '16:03', '15:43', 'wsasfsfafsfafwsasfsfafsfafwsasfsfafsfafwsasfsfafsfafwsasfsfafsfafwsasfsfafsfafwsasfsfafsfafwsasfsfafsfafwsasfsfafsfaf', 1),
(10, 'vishavakarma pooja', 'IMG_0917.JPG', '2024-07-27', '16:03', '15:43', 'wsasfsfaaaaaaaaasddddddddddddddddddddafsfafwsasfsfaaaaaaaaasddddddddddddddddddddafsfafwsasfsfaaaaaaaaasddddddddddddddddddddafsfafwsasfsfaaaaaaaaasddddddddddddddddddddafsfafwsasfsfaaaaaaaaasddddddddddddddddddddafsfaf', 1);

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` int(3) NOT NULL,
  `Photos` varchar(150) NOT NULL,
  `Added_by` varchar(40) NOT NULL,
  `Date&Time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `Photos`, `Added_by`, `Date&Time`) VALUES
(2, 'IMG_0916.JPG', 'ved', '2024-07-23 11:57:34'),
(4, 'IMG_1089.JPG', 'Raj', '2024-07-23 16:41:15');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` int(3) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Image` varchar(150) NOT NULL,
  `Position` varchar(120) NOT NULL,
  `Date&Time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `Name`, `Image`, `Position`, `Date&Time`) VALUES
(1, 'Vijay', 'gray-user-profile-icon-png-fP8Q1P.png', 'hr', '2024-07-24 11:05:34'),
(2, 'vedprakash', 'IMG_1072.JPG', 'developer', '2024-07-24 11:08:11'),
(3, 'Akshay ', 'IMG_0930.JPG', 'developer', '2024-07-24 11:08:51'),
(4, 'Raj kumar', 'IMG_0927.JPG', 'fronted developer', '2024-07-24 11:10:38'),
(5, 'Akshay ', 'IMG_0932.JPG', 'sssssss', '2024-07-24 11:15:31'),
(6, 'Akshay ', 'IMG_0918.JPG', 'hr', '2024-07-24 11:19:16'),
(7, 'Rahul', 'IMG_0922.JPG', 'developer', '2024-07-24 12:15:36'),
(9, 'Akshay ', 'gray-user-profile-icon-png-fP8Q1P.png', 'developer', '2024-07-24 12:19:56'),
(10, 'Vijay', 'gray-user-profile-icon-png-fP8Q1P.png', 'developer', '2024-07-24 12:21:03'),
(11, 'vedprakash', 'gray-user-profile-icon-png-fP8Q1P.png', 'hr', '2024-07-24 12:21:35'),
(12, 'Raj kumar', 'gray-user-profile-icon-png-fP8Q1P.png', 'fronted developer', '2024-07-24 12:23:13');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` int(3) NOT NULL,
  `Videos` int(200) NOT NULL,
  `Added_by` int(40) NOT NULL,
  `Date&Time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cows`
--
ALTER TABLE `cows`
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
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `cows`
--
ALTER TABLE `cows`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `cow_adoption`
--
ALTER TABLE `cow_adoption`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `cow_category`
--
ALTER TABLE `cow_category`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `donations`
--
ALTER TABLE `donations`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
