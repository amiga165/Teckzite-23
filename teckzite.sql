-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2023 at 09:13 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `teckzite`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `user_name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `position` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user_name`, `password`, `position`) VALUES
('Tz2k23admin', 'vk123$$', ''),
('admin', 'admin', ''),
('vamsi', 'vk', 'admin'),
('vamsi', 'vk', 'Hms');

-- --------------------------------------------------------

--
-- Table structure for table `album`
--

CREATE TABLE `album` (
  `id` int(11) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `eve_date` date NOT NULL,
  `msg` varchar(300) NOT NULL,
  `link` varchar(255) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `album`
--

INSERT INTO `album` (`id`, `heading`, `eve_date`, `msg`, `link`, `image`) VALUES
(1, 'helo', '2023-03-24', 'helo guys is dlddlddmdd', 'www.youtube.com', 'IMG-640988e34199c6.88195989.jpeg'),
(2, 'siddhu', '2023-03-15', 'good morning all', 'www.google.com', 'IMG-640ac8e84d8f01.28950712.jpg'),
(3, 'hello ', '2023-03-29', ' adfsfa', 'asdfasf', 'IMG-640afcd75954e3.83309152.png'),
(4, 'fgh', '2023-03-23', ' dfg', 'dfgh', 'IMG-640afdeadda7f0.32951650.jpg'),
(5, 'vamsi', '3333-03-22', ' dkksksks', 'sdksjkdkss', 'IMG-640b1c5a1a4030.45648295.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `competitions`
--

CREATE TABLE `competitions` (
  `eveSno` int(255) NOT NULL,
  `eveName` varchar(255) NOT NULL,
  `eveDepartment` varchar(255) NOT NULL,
  `eveImg` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `structure` text NOT NULL,
  `timeline` varchar(255) NOT NULL,
  `prizeMoney` varchar(255) NOT NULL,
  `contact_info` varchar(255) NOT NULL,
  `minTeam` int(11) NOT NULL,
  `maxTeam` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `competitions`
--

INSERT INTO `competitions` (`eveSno`, `eveName`, `eveDepartment`, `eveImg`, `description`, `structure`, `timeline`, `prizeMoney`, `contact_info`, `minTeam`, `maxTeam`) VALUES
(1, 'website', 'cse', 'website-640b0f3f7b7871.54888281.jpg', 'hello guys it is the website event please participate in this event.', 'runner and winner,\r\nrunner and winner,\r\nrunner and winner', '14:10', '200', 'vamsi: 8247252286,\r\nvamsi: 2345,\r\nsiddhu: 2345,\r\nsiva: 2345678', 1, 4),
(2, 'siddhu', 'cse', 'siddhu-640b29c259a981.94937578.jpg', 'kdddddddksksklsfl;ajofffke', 'sksksk,ksksksk,slslskdkd,kskkss', '14:10', '200', 'kdkskkss,\r\nksksksks,\r\nskskskkss,\r\nssskksks', 1, 3),
(3, 'teckzite', 'civil', 'teckzite-640c007da470f8.91599654.jpeg', 'Ok guys get ready for the event teckzite ', 'hello,\r\nhi,\r\nbye,\r\nok,\r\nhm,\r\nnice', '12:00', '1000', 'vamsi:8247252286,\r\nram:9573319095', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `events_reg`
--

CREATE TABLE `events_reg` (
  `event_id` varchar(30) NOT NULL,
  `teamsize` varchar(30) NOT NULL,
  `branch` varchar(30) NOT NULL,
  `tzid1` varchar(30) NOT NULL,
  `tzid2` varchar(30) NOT NULL,
  `tzid3` varchar(30) NOT NULL,
  `tzid4` varchar(30) NOT NULL,
  `tzid5` varchar(30) NOT NULL,
  `tzid6` varchar(6) NOT NULL,
  `tzid7` varchar(30) NOT NULL,
  `tzid8` varchar(30) NOT NULL,
  `tzid9` varchar(30) NOT NULL,
  `tzid10` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `events_reg`
--

INSERT INTO `events_reg` (`event_id`, `teamsize`, `branch`, `tzid1`, `tzid2`, `tzid3`, `tzid4`, `tzid5`, `tzid6`, `tzid7`, `tzid8`, `tzid9`, `tzid10`) VALUES
('teckzite', '1', 'CIVIL', 'TZ2K230009', '-', '-', '-', '-', '-', '-', '-', '-', '-');

-- --------------------------------------------------------

--
-- Table structure for table `hms`
--

CREATE TABLE `hms` (
  `Tzid` varchar(50) NOT NULL,
  `Block` varchar(50) NOT NULL,
  `Room` varchar(50) NOT NULL,
  `checkin` varchar(50) NOT NULL,
  `checkout` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `hms`
--

INSERT INTO `hms` (`Tzid`, `Block`, `Room`, `checkin`, `checkout`) VALUES
('TZ2K230009', 'I3-Left-wing', '4', '2023-03-10 18:10:32', '2023-03-10 18:11:45'),
('TZ2K230008', 'I3-Left-wing', '4', '2023-03-10 18:19:30', '2023-03-10 18:20:30'),
('TZ2K230001', 'I3-Left-wing', '4', '2023-03-10 18:21:12', '2023-03-10 18:21:19'),
('TZ2K230002', 'I3-Right-wing', '10', '2023-03-10 18:21:43', '2023-03-10 18:21:49');

-- --------------------------------------------------------

--
-- Table structure for table `hms-admins`
--

CREATE TABLE `hms-admins` (
  `user_name` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `hms-admins`
--

INSERT INTO `hms-admins` (`user_name`, `password`) VALUES
('hms@admin', 'hms@admin123');

-- --------------------------------------------------------

--
-- Table structure for table `notifactions`
--

CREATE TABLE `notifactions` (
  `id` int(11) NOT NULL,
  `notification_name` varchar(255) NOT NULL,
  `eventdate` date NOT NULL,
  `eventmsg` varchar(255) NOT NULL,
  `evelink` varchar(255) NOT NULL,
  `eveactive` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notifactions`
--

INSERT INTO `notifactions` (`id`, `notification_name`, `eventdate`, `eventmsg`, `evelink`, `eveactive`) VALUES
(0, 'hello', '2023-03-29', 'sdfasdfasfsafasf', 'ddsa', 'YES');

-- --------------------------------------------------------

--
-- Table structure for table `registrations`
--

CREATE TABLE `registrations` (
  `Id` varchar(50) NOT NULL,
  `First_name` varchar(50) NOT NULL,
  `Last_name` varchar(50) NOT NULL,
  `Collage` varchar(50) NOT NULL,
  `Year` varchar(20) NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `City` varchar(50) NOT NULL,
  `District` varchar(50) NOT NULL,
  `State` varchar(40) NOT NULL,
  `Phone_no` varchar(100) NOT NULL,
  `Paid` int(100) NOT NULL,
  `password` varchar(60) NOT NULL,
  `id_card_photo` text NOT NULL,
  `clgid` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `registrations`
--

INSERT INTO `registrations` (`Id`, `First_name`, `Last_name`, `Collage`, `Year`, `Gender`, `Email`, `City`, `District`, `State`, `Phone_no`, `Paid`, `password`, `id_card_photo`, `clgid`) VALUES
('TZ2K230009', 'vamsi', 'veeramalla', 'rgukt nuzvid', 'e-3', 'Male', 'nice@gmail.com', 'RAJAHMUNDRY', 'kakinada', 'ap', '8247252286', 250, '$2y$10$ahUQhh.DgMptukdJEKKjJuZiVfQR78qMlyaiH06Xq4SJo3vqJNCWW', 'TZ2K230009-640b0c15561112.87414746.jpg', 'N181165'),
('TZ2K230010', 'siva', 'helo', 'rgukt', '4', 'Male', 'vamsi@gmail', 'nuzvid', 'ksksks', 'ap', '8833738383', 250, '$2y$10$0g/1c7PLbgb8ExXqGYG0POcH5KHITnNI.NsQ67HPScdb6YIq/nobe', 'TZ2K230010-640c0726e8aef2.84689385.png', 'N181160');

-- --------------------------------------------------------

--
-- Table structure for table `workshops`
--

CREATE TABLE `workshops` (
  `id` int(11) NOT NULL,
  `wrk_name` varchar(255) NOT NULL,
  `branch` varchar(250) NOT NULL,
  `wrk_info` varchar(250) NOT NULL,
  `wrk_des` varchar(250) NOT NULL,
  `amaount` varchar(250) NOT NULL,
  `venue_time` varchar(250) NOT NULL,
  `duration` varchar(250) NOT NULL,
  `ph_no` varchar(250) NOT NULL,
  `photo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `workshops`
--

INSERT INTO `workshops` (`id`, `wrk_name`, `branch`, `wrk_info`, `wrk_des`, `amaount`, `venue_time`, `duration`, `ph_no`, `photo`) VALUES
(1, 'nemasthe', 'civil', 'good morning', 'ok guys it is for fun', '243', '7383', '2hours', '9573319095', 'IMG-640b5afcac9445.31456129.jpg'),
(2, 'siddhu', 'mech', 'skskkss', 'kdksllsls', 'kdkkskkd', 'kdkdkd', '3hours', '3319095', 'IMG-640b60c69885e7.12783829.jpg'),
(3, 'siddhu from srikakulam', 'cse', 'hi this is siddh fr', 'qwertyuioplkjhgfdsaszxcvbn', '10000', 'tiem an', '3hours', '9398848215', 'IMG-640b6d19489d64.40125601.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `workshops_reg`
--

CREATE TABLE `workshops_reg` (
  `workshop` varchar(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `college` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phono` varchar(30) NOT NULL,
  `rollno` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `workshops_reg`
--

INSERT INTO `workshops_reg` (`workshop`, `first_name`, `last_name`, `college`, `gender`, `email`, `phono`, `rollno`) VALUES
('siddhu', 'siva', 'helo', 'rgukt', 'Male', 'hi@gmail.com', '8247252286', 'N181165'),
('siddhu from srikakulam', 'siddhu', 'asdkasndj', 'sadlksajdkl', 'Male', 'co@gmail.com', 'dfds', 'ds'),
('siddhu from srikakulam', 'yash', 'yash', 'yash', 'Male', 'yash@yash', '8330930505', 'yash'),
('siddhu from srikakulam', 'siva', 'helo', 'rguktn', 'Male', 'vamsi@gmail', '8833738383', 'N181160');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `competitions`
--
ALTER TABLE `competitions`
  ADD PRIMARY KEY (`eveSno`);

--
-- Indexes for table `events_reg`
--
ALTER TABLE `events_reg`
  ADD KEY `branch` (`branch`);

--
-- Indexes for table `registrations`
--
ALTER TABLE `registrations`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `workshops`
--
ALTER TABLE `workshops`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `album`
--
ALTER TABLE `album`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `competitions`
--
ALTER TABLE `competitions`
  MODIFY `eveSno` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `workshops`
--
ALTER TABLE `workshops`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
