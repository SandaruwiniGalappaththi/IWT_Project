-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2020 at 07:56 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iwt`
--

-- --------------------------------------------------------

--
-- Table structure for table `agentbooking`
--

CREATE TABLE `agentbooking` (
  `id` int(11) NOT NULL,
  `agent` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `adults` int(11) NOT NULL,
  `children` int(11) NOT NULL,
  `interests` varchar(255) NOT NULL,
  `hotel_type` varchar(100) NOT NULL,
  `budget` int(11) NOT NULL,
  `like_go` varchar(100) NOT NULL,
  `req` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agentbooking`
--

INSERT INTO `agentbooking` (`id`, `agent`, `fname`, `lname`, `mobile`, `email`, `adults`, `children`, `interests`, `hotel_type`, `budget`, `like_go`, `req`) VALUES
(1, 'Miss', 'yasiru', 'nawanjana', '11111111111', 'nawa@gmail.com', 3, 3, 'animal,', 'fiveSHotel', 50, 'idea', 'aaaaaaaaa');

-- --------------------------------------------------------

--
-- Table structure for table `booked_trips`
--

CREATE TABLE `booked_trips` (
  `id` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `location` varchar(255) NOT NULL,
  `6_12` int(5) NOT NULL,
  `12_18` int(5) NOT NULL,
  `18_18` int(5) NOT NULL,
  `payment` int(50) NOT NULL,
  `booked_date` date NOT NULL,
  `arrive_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booked_trips`
--

INSERT INTO `booked_trips` (`id`, `fname`, `lname`, `email`, `phone`, `location`, `6_12`, `12_18`, `18_18`, `payment`, `booked_date`, `arrive_date`) VALUES
(1, '', '', '', '', 'udawalawa', 3, 2, 2, 0, '2020-10-24', '2020-10-24');

-- --------------------------------------------------------

--
-- Table structure for table `contactinfo`
--

CREATE TABLE `contactinfo` (
  `contactid` int(10) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `about` varchar(255) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `locationd`
--

CREATE TABLE `locationd` (
  `location` varchar(100) NOT NULL,
  `number_of_guest` int(3) NOT NULL,
  `booking_date` date NOT NULL,
  `arrive_date` date NOT NULL,
  `total_payment` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `card_type` varchar(50) NOT NULL,
  `card_number` int(10) NOT NULL,
  `card_holder` varchar(20) NOT NULL,
  `expiration_date` varchar(50) NOT NULL,
  `cvcpin` int(10) NOT NULL,
  `total_payment` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `card_type`, `card_number`, `card_holder`, `expiration_date`, `cvcpin`, `total_payment`) VALUES
(1, 'visa', 1234567890, 'yasiru', '1122', 121, 5000);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` int(11) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `zip` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `mobile`, `address`, `city`, `zip`, `password`, `user_role`) VALUES
(3, 'yasiru', 'nawanjana', 'nawa@gmail.com', 718026008, '14/A Araliya uyana Eksath Mawatha', 'Kadawatha', '222222', '827ccb0eea8a706c4c34a16891f84e7b', 'traveler'),
(4, 'hello', 'nawanjana', 'isujayawardana1220@gmail.com', 718026008, '14/A Araliya uyana Eksath Mawatha', 'kadawatha', '112122c', 'e78582c7fa761cb9358009503f2810a9', 'traveler'),
(5, 'yasiru', 'nawanjana', 'theshoepalaces@gmail.com', 718026008, '14/A Araliya uyana Eksath Mawatha', 'kadawatha', '112122c', '827ccb0eea8a706c4c34a16891f84e7b', 'traveler');

-- --------------------------------------------------------

--
-- Table structure for table `vacancies`
--

CREATE TABLE `vacancies` (
  `id` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vacancies`
--

INSERT INTO `vacancies` (`id`, `fname`, `lname`, `email`, `mobile`, `address`) VALUES
(1, 'yasiru', 'nawanjana', 'yasirunawanjana70@gmail.com', '0703090971', '14/A Araliya uyana Eksath Mawatha');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agentbooking`
--
ALTER TABLE `agentbooking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booked_trips`
--
ALTER TABLE `booked_trips`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactinfo`
--
ALTER TABLE `contactinfo`
  ADD PRIMARY KEY (`contactid`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vacancies`
--
ALTER TABLE `vacancies`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agentbooking`
--
ALTER TABLE `agentbooking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `booked_trips`
--
ALTER TABLE `booked_trips`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contactinfo`
--
ALTER TABLE `contactinfo`
  MODIFY `contactid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `vacancies`
--
ALTER TABLE `vacancies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
