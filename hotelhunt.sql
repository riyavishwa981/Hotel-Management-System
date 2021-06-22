-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2020 at 03:57 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotelhunt`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id` int(11) NOT NULL,
  `name` int(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `address` varchar(250) NOT NULL,
  `hotelname` varchar(250) NOT NULL,
  `no_adults` int(11) NOT NULL,
  `no_kids` int(11) NOT NULL,
  `no_rooms` int(11) NOT NULL,
  `checkin_date` date NOT NULL,
  `checkout_date` date NOT NULL,
  `services` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `resortdetail`
--

CREATE TABLE `resortdetail` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `location` varchar(40) NOT NULL,
  `address` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `discount` int(11) NOT NULL,
  `contactno` int(11) NOT NULL,
  `email` varchar(40) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `detail` longtext DEFAULT NULL,
  `images` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `resortdetail`
--

INSERT INTO `resortdetail` (`id`, `name`, `location`, `address`, `price`, `discount`, `contactno`, `email`, `image`, `detail`, `images`) VALUES
(3, 'The Leela', 'Andheri', 'Airport road metro station, Andheri East', 12000, 6, 987654321, 'riyavishwa2001@gmail.com', 'upload/hotel0.jpg', 'Over the last three decades, The Leela Palaces, Hotels and Resorts have been on a continuous journey to delight our guests by providing unparalleled luxury in captivating environs ensconced in the lap of nature and wrapped in the graciousness of Indian ho', 'gallery_2.jpg gallery_3.jpg Hilton.jpg home_slider_1.jpg hotel0.jpg '),
(4, 'Kohinoor Villa', 'Bandra, Mumbai', 'poiuytresxdcfghjkmnbv c', 7000, 5, 87654398, 'kohinoor@gmail.com', 'upload/hotel4.jpg', 'oiuytrdfgvkjn,jbmvbc', 'room_4.jpg room_5.jpg room_8.jpg room_9.jpg '),
(6, 'The Resort', 'Mumbai', 'marve beach,malad', 3200, 5, 239876434, 'theresort@gmail.com', 'upload/Hilton.jpg', 'Overlooking the sandy Aksa Beach Madh Marve, this unpretentious resort is 6 km from Madh Fort and 38 km from Essel World amusement park.', 'room_1.jpg room_5.jpg room_6.jpg room_9.jpg '),
(7, 'Della Resort', 'lonavala', 'oiuytresdfghj', 15000, 8, 987654321, 'della@gmail.com', 'upload/ITCmaratha.jpg', 'pallu pallu palllu palluuuuuuu', 'room_1.jpg room_2.jpg room_3.jpg ');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Id` int(10) NOT NULL,
  `FirstName` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `Contact` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `CPassword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Id`, `FirstName`, `LastName`, `Contact`, `Address`, `Username`, `Password`, `CPassword`) VALUES
(1, 'Riya', 'Vishwa', '8356068046', 'Uganda', 'riya981', '$2y$10$D3nGqzsxJqcanToxjyJ9Rul6SGkI3ifloJabJzbohqT7YrAmLCqIG', '$2y$10$UO4uwVFIrryosTsNt47SBesjfuNEnVKbHIu3tB923ldFG/7A0pcVi'),
(14, 'safa', 'jdskfjk', '8732498326', 'hfisdahfiaew', 'safa778', '$2y$10$w8cXyU1aSYV4QwD1jjkX.uujy9jVfOk9HI9s3nxwsbWKFxr2gy7JK', '$2y$10$jGme54IrEUZ.HnxqRQ3n..YJbhmNOv58VZE431vaBuMq/o87w.zP.'),
(15, 'neelam ', 'jksajdA', '8347186473', 'gujarat', 'neelu66', '$2y$10$/ScgJ52z4euvQhDyt0nxeOEwFUxJ58lh/aKy7dGkMPDFuTxpozH.y', '$2y$10$YoXghFH.RIKeOgCyCXZBkOnbPMUh1jRF76t1ONy.MBPyWG7UQfo5W'),
(16, 'tanisha', 'hhhh', '9920709533', 'jhdkwd', 'tan123', '$2y$10$2hjPN8gUJvu5IXBsIUjh8eMZZ9RkVtqpQYPxg5qobqyIwtbfvjHSm', '$2y$10$gJRs.2kGu.G/Lo5SCYL41OJ00NRdHxBYOhSbvw7h9Jo/AXQGri2F2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `resortdetail`
--
ALTER TABLE `resortdetail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `Username` (`Username`),
  ADD UNIQUE KEY `Contact` (`Contact`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `resortdetail`
--
ALTER TABLE `resortdetail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
