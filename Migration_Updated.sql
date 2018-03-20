-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2018 at 12:16 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `migration`
--

-- --------------------------------------------------------

--
-- Table structure for table `apply_migration`
--

CREATE TABLE `apply_migration` (
  `id` int(11) NOT NULL,
  `full_name` text NOT NULL,
  `gender` text NOT NULL,
  `admission_no` varchar(15) NOT NULL,
  `father_name` text NOT NULL,
  `last_college` text NOT NULL,
  `last_college_status` text NOT NULL,
  `branch` text NOT NULL,
  `admission_time` text NOT NULL,
  `qualification_time` text NOT NULL,
  `challan_amount` text NOT NULL,
  `challan_no` text NOT NULL,
  `challan_date` text NOT NULL,
  `challan_bank` text NOT NULL,
  `address` text NOT NULL,
  `permanent_address` text NOT NULL,
  `phone` varchar(12) NOT NULL,
  `university_address` text NOT NULL,
  `signature` text NOT NULL,
  `photo` text NOT NULL,
  `degree` text NOT NULL,
  `first_sem` text NOT NULL,
  `second_sem` text NOT NULL,
  `third_sem` text NOT NULL,
  `fourth_sem` text NOT NULL,
  `fifth_sem` text NOT NULL,
  `sixth_sem` text NOT NULL,
  `status` varchar(2) NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `apply_migration`
--

INSERT INTO `apply_migration` (`id`, `full_name`, `gender`, `admission_no`, `father_name`, `last_college`, `last_college_status`, `branch`, `admission_time`, `qualification_time`, `challan_amount`, `challan_no`, `challan_date`, `challan_bank`, `address`, `permanent_address`, `phone`, `university_address`, `signature`, `photo`, `degree`, `first_sem`, `second_sem`, `third_sem`, `fourth_sem`, `fifth_sem`, `sixth_sem`, `status`, `email`) VALUES
(6, '', 'MALE', '', '', '', 'Completed', '', '', '', '', '', '', '', '', '', '', '', '2015 Happy New Year Champagne Celebration iPhone 6 Wallpaper.jpg', '117752.jpg', '117788.jpg', '274435-gautam-gulati.jpg', '318777-gautam-gulati.jpg', 'A89i91WCYAE0Arg.jpg large.jpg', 'Abraham Lincoln in Mist iPhone 5 Wallpaper .jpg', 'A89i91WCYAE0Arg.jpg large.jpg', 'Air Jordan iPhone Wallpaper.jpg', '1', 'jawadlee01@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apply_migration`
--
ALTER TABLE `apply_migration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apply_migration`
--
ALTER TABLE `apply_migration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
