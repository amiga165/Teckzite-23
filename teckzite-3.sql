-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Mar 10, 2023 at 10:05 AM
-- Server version: 5.7.39
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `album`
--

INSERT INTO `album` (`id`, `heading`, `eve_date`, `msg`, `link`, `image`) VALUES
(1, 'helo', '2023-03-24', 'helo guys is dlddlddmdd', 'www.youtube.com', 'IMG-640988e34199c6.88195989.jpeg'),
(2, 'siddhu', '2023-03-15', 'good morning all', 'www.google.com', 'IMG-640ac8e84d8f01.28950712.jpg'),
(3, 'hello ', '2023-03-29', ' adfsfa', 'asdfasf', 'IMG-640afcd75954e3.83309152.png'),
(4, 'fgh', '2023-03-23', ' dfg', 'dfgh', 'IMG-640afdeadda7f0.32951650.jpg');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `competitions`
--

INSERT INTO `competitions` (`eveSno`, `eveName`, `eveDepartment`, `eveImg`, `description`, `structure`, `timeline`, `prizeMoney`, `contact_info`, `minTeam`, `maxTeam`) VALUES
(1, 'cube ', 'cse', 'cube -640ac5dc2b7c17.38713267.jpg', 'asdfkjasldkfhaslkj', 'stag1 = winners runners, \r\nstag2 = winners runners,\r\n', '24:50 pm', '45rs', 'contact for information : 1234567898,  contact 12345678, cibt =123456789', 2, 2),
(5, 'asdfas', 'mech', 'asdfas-640af88fa77786.08638273.png', 'asdf', 'asdf', 'dsaf', 'asd', 'asd', 1, 1);

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `events_reg`
--

INSERT INTO `events_reg` (`event_id`, `teamsize`, `branch`, `tzid1`, `tzid2`, `tzid3`, `tzid4`, `tzid5`, `tzid6`, `tzid7`, `tzid8`, `tzid9`, `tzid10`) VALUES
('CSE02', '3', 'CSE', 'TZ2k230001', 'TZ2k230001', 'TZ2k230001', '-', '-', '-', '-', '-', '-', '-'),
('CSE02', '3', 'CSE', 'TZ2k230004', 'TZ2k230003', 'TZ2k230002', '-', '-', '-', '-', '-', '-', '-'),
('CSE02', '3', 'CSE', 'TZ2k230005', 'TZ2k230005', 'TZ2k230005', '-', '-', '-', '-', '-', '-', '-'),
('OPENTTOALL5', '1', 'OPEN TO ALL', 'TZ2k230002', '-', '-', '-', '-', '-', '-', '-', '-', '-'),
('CSE1', '1', 'CSE', 'TZ2k230001', '-', '-', '-', '-', '-', '-', '-', '-', '-'),
('CSE4', '1', 'CSE', 'TZ2k230001', '-', '-', '-', '-', '-', '-', '-', '-', '-'),
('CSE5', '1', 'CSE', 'TZ2k230001', '-', '-', '-', '-', '-', '-', '-', '-', '-'),
('CSE6', '2', 'CSE', 'TZ2k230001', 'TZ2k230002', '-', '-', '-', '-', '-', '-', '-', '-'),
('OPENTTOALL3', '1', 'OPEN TO ALL', 'TZ2k230005', '-', '-', '-', '-', '-', '-', '-', '-', '-'),
('CSE1', '1', 'CSE', 'TZ2k230005', '-', '-', '-', '-', '-', '-', '-', '-', '-'),
('OPENTTOALL1', '1', 'OPEN TO ALL', 'TZ2k230005', '-', '-', '-', '-', '-', '-', '-', '-', '-'),
('OPENTTOALL1', '1', 'OPEN TO ALL', 'TZ2K230001', '-', '-', '-', '-', '-', '-', '-', '-', '-'),
('OPENTTOALL3', '1', 'OPEN TO ALL', 'TZ2K230001', '-', '-', '-', '-', '-', '-', '-', '-', '-'),
('OPENTTOALL6', '1', 'OPEN TO ALL', 'TZ2K230001', '-', '-', '-', '-', '-', '-', '-', '-', '-'),
('OPENTTOALL3', '1', 'OPEN TO ALL', 'TZ2K230002', '-', '-', '-', '-', '-', '-', '-', '-', '-'),
('1', '3', 'ece', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-'),
('eid4', '5', 'FORALL', 'TZ2K230004', 'TZ2K230005', 'TZ2K230007', 'TZ2K230002', 'TZ2K230002', '-', '-', '-', '-', '-');

-- --------------------------------------------------------

--
-- Table structure for table `HMS`
--

CREATE TABLE `HMS` (
  `Tzid` varchar(50) NOT NULL,
  `Block` varchar(50) NOT NULL,
  `Room` varchar(50) NOT NULL,
  `checkin` varchar(50) NOT NULL,
  `checkout` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `HMS`
--

INSERT INTO `HMS` (`Tzid`, `Block`, `Room`, `checkin`, `checkout`) VALUES
('TZ2K230001', 'I3-Right-wing', '343', '2023-03-07 12:46:41', 'NOT YET'),
('TZ2K230007', 'I3-Left-wing', '56', '2023-03-07 18:54:12', '2023-03-07 18:54:50'),
('TZ2K230005', 'I3-Left-wing', 'fd', '2023-03-09 12:30:58', '2023-03-09 12:31:10'),
('TZ2K230008', 'I3-Left-wing', '54', '2023-03-09 23:21:07', '2023-03-09 23:22:31'),
('TZ2K230004', 'I3-Right-wing', '10', '2023-03-10 07:35:50', 'NOT YET'),
('TZ2K230002', 'I3-Right-wing', '10', '2023-03-10 07:37:55', 'NOT YET'),
('TZ2K230006', 'I3-Left-wing', '4', '2023-03-10 07:38:32', 'NOT YET');

-- --------------------------------------------------------

--
-- Table structure for table `HMS-admins`
--

CREATE TABLE `HMS-admins` (
  `user_name` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `HMS-admins`
--

INSERT INTO `HMS-admins` (`user_name`, `password`) VALUES
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notifactions`
--

INSERT INTO `notifactions` (`id`, `notification_name`, `eventdate`, `eventmsg`, `evelink`, `eveactive`) VALUES
(0, 'hello', '2023-03-29', 'sdfasdfasfsafasf', 'ddsa', 'YES');

-- --------------------------------------------------------

--
-- Table structure for table `Registrations`
--

CREATE TABLE `Registrations` (
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Registrations`
--

INSERT INTO `Registrations` (`Id`, `First_name`, `Last_name`, `Collage`, `Year`, `Gender`, `Email`, `City`, `District`, `State`, `Phone_no`, `Paid`, `password`, `id_card_photo`, `clgid`) VALUES
('TZ2K230001', 'a', 'fa', 'fs', 'fsd@gmail', 'Male', 'sd@gmail', 'sdf', 'fdff', 'd', 'd', 250, '$2y$10$O7vsffuXcbznGGpKF9Cho.TlDpDP3ik0Yqfej1QFO43Jm1TTsD3bq', '', 'd'),
('TZ2K230002', 'fga', 'fddf', 'fg', 'qfd', 'Female', 'df@f', 'fd', 'fd', 'f', 'f', 250, '$2y$10$bIJRyeIEACDDG8Re35D3he7Ewp.MA30BN84xGF5X3adODzm002zJu', '', 'f'),
('TZ2K230003', 'vamsi', 'vk', 'vk', 'vk', 'Male', 'vk@gmail', 'vk', 'vk', 'v', 'asdfasfasfsfsd', 250, '$2y$10$ZKUXQuByNQK4Dteghhrgt.P4kEtt3AqfGYGRWihvfI6cMUWMNdo5C', '', 'v'),
('TZ2K230004', 'vamsi', 'vk', 'rgukt', '4', 'Female', 'vamsi@gmail.com', 'Nuzvidrty', 'dfghj', 'ardhdd', '7578900', 250, '$2y$10$kYVjsUamvvZ1SgET.pbK6uCli/PgFPeJSwCDhkIs4lg93klKIGlIW', 'IMG-6408c81c3e0527.78780612.jpeg', 'N1819191'),
('TZ2K230005', 'jknkj', 'KKJ', 'LKD', 'LDK', 'Male', 'DLKSJ@GMAIL', 'LKDFJ', 'LKDFJL', 'LDSKFJ', '1234567234', 250, '$2y$10$hNT/ORZitwVEurLKZqywCuvj2pIKa1pDf5BE2YP4tibCbHxV8dauS', 'TZ2K23000564093bd0bdc476.26715928.png', 'FD'),
('TZ2K230006', 'jknkj', 'KKJ', 'LKD', 'LDK', 'Male', 'DLKSJ@GMAIL', 'LKDFJ', 'LKDFJL', 'LDSKFJ', '1234567234', 250, '$2y$10$WxMIWGQPCbID5OgJfU/Mxeb8qUTLuRTVdZgAsbfzDFy3r5AWhDqmq', 'TZ2K230006-64093c378f0fd2.81818133.png', 'FD'),
('TZ2K230007', 'vk', 'vk', 'vk', 'vk', 'Male', 'vk@gmail', 'k', 'v', 'v', '1234567890', 250, '$2y$10$iYnwJuBLd64hDHGqtVpsI.455IvJYzrOLphQA1GRKKOTS3LQzrOs6', 'TZ2K230007-64094594e945b3.75852068.jpeg', 'v'),
('TZ2K230008', 'sa', 'asdf', 'asd', 'asd', 'Male', 'dfgs@gmail', 'asd', 'asd', 'asdf', '1234567890', 250, '$2y$10$a2vtLHjGyHrqOyFFmlnCAO0TFVQwH9wzEcyC2JFBb9kc8PWS7fSGS', 'TZ2K230008-640a18177d4b68.07266334.png', 'f');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `workshops_reg`
--

INSERT INTO `workshops_reg` (`workshop`, `first_name`, `last_name`, `college`, `gender`, `email`, `phono`, `rollno`) VALUES
('option-1', 'ads', 'sda', 'sd', 'Male', 'asdf@gmail', 'asd', 'asd'),
('option-1', 'fs', 'dsf', 'df', 'Male', 'dsf@gmail', 'sdf', 'df');

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
-- Indexes for table `Registrations`
--
ALTER TABLE `Registrations`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `album`
--
ALTER TABLE `album`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `competitions`
--
ALTER TABLE `competitions`
  MODIFY `eveSno` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
