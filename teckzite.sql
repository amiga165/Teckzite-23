-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2023 at 04:41 AM
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
  `sno` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `position` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`sno`, `user_name`, `password`, `position`) VALUES
(1, 'vamsi', 'admin', 'admin');

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
  `sno` int(11) NOT NULL,
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

INSERT INTO `competitions` (`sno`, `eveSno`, `eveName`, `eveDepartment`, `eveImg`, `description`, `structure`, `timeline`, `prizeMoney`, `contact_info`, `minTeam`, `maxTeam`) VALUES
(1, 1, 'website', 'cse', 'website-640b0f3f7b7871.54888281.jpg', 'hello guys it is the website event please participate in this event.', 'runner and winner,\r\nrunner and winner,\r\nrunner and winner', '14:10', '200', 'vamsi: 8247252286,\r\nvamsi: 2345,\r\nsiddhu: 2345,\r\nsiva: 2345678', 1, 4),
(2, 2, 'siddhu', 'cse', 'siddhu-640b29c259a981.94937578.jpg', 'kdddddddksksklsfl;ajofffke', 'sksksk,ksksksk,slslskdkd,kskkss', '14:10', '200', 'kdkskkss,\r\nksksksks,\r\nskskskkss,\r\nssskksks', 1, 3),
(3, 3, 'teckzite', 'civil', 'teckzite-640c007da470f8.91599654.jpeg', 'Ok guys get ready for the event teckzite ', 'hello,\r\nhi,\r\nbye,\r\nok,\r\nhm,\r\nnice', '12:00', '1000', 'vamsi:8247252286,\r\nram:9573319095', 1, 1),
(4, 0, 'website', 'forall', 'website-641081f64eb8c1.43079502.png', 'awesxrdctfvyvyg', 'yygfgfgyc,gvyfcftc', '14:10', '100000', 'fctfctfc,uvygv', 1, 1),
(5, 0, 'vamsi', 'robotics', 'vamsi-641137ccc41cd3.32592436.png', 'helo mam and sir good morning this is admin panel for check updates in teckzite ', 'helo,\r\nhi,\r\nwhat, is the name of the robot', '12:00', '200', 'contact:8247252286,\r\ncontact:9573319095,\r\ncontact:8790367209', 1, 2),
(6, 0, 'vamsi', 'robotics', 'vamsi-641137e7cef1b0.10001067.png', 'helo mam and sir good morning this is admin panel for check updates in teckzite ', 'helo,\r\nhi,\r\nwhat, is the name of the robot', '12:00', '200', 'contact:8247252286,\r\ncontact:9573319095,\r\ncontact:8790367209', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `events_reg`
--

CREATE TABLE `events_reg` (
  `sno` int(11) NOT NULL,
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

INSERT INTO `events_reg` (`sno`, `event_id`, `teamsize`, `branch`, `tzid1`, `tzid2`, `tzid3`, `tzid4`, `tzid5`, `tzid6`, `tzid7`, `tzid8`, `tzid9`, `tzid10`) VALUES
(1, 'teckzite', '1', 'CIVIL', 'TZ2K230009', '-', '-', '-', '-', '-', '-', '-', '-', '-'),
(2, 'website', '1', 'FORALL', '-', '', '', '', '', '', '', '', '', ''),
(3, 'website', '1', 'FORALL', '', '', '', '', '', '', '', '', '', ''),
(4, 'website', '1', 'FORALL', 'TZ2K230003', '-', '-', '-', '-', '-', '-', '-', '-', '-');

-- --------------------------------------------------------

--
-- Table structure for table `hms`
--

CREATE TABLE `hms` (
  `sno` int(11) NOT NULL,
  `Tzid` varchar(50) NOT NULL,
  `Block` varchar(50) NOT NULL,
  `Room` varchar(50) NOT NULL,
  `checkin` varchar(50) NOT NULL,
  `checkout` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `hms`
--

INSERT INTO `hms` (`sno`, `Tzid`, `Block`, `Room`, `checkin`, `checkout`) VALUES
(1, 'TZ2K230009', 'I3-Left-wing', '4', '2023-03-10 18:10:32', '2023-03-10 18:11:45'),
(2, 'TZ2K230008', 'I3-Left-wing', '4', '2023-03-10 18:19:30', '2023-03-10 18:20:30'),
(3, 'TZ2K230001', 'I3-Left-wing', '4', '2023-03-10 18:21:12', '2023-03-10 18:21:19'),
(4, 'TZ2K230002', 'I3-Right-wing', '10', '2023-03-10 18:21:43', '2023-03-10 18:21:49');

-- --------------------------------------------------------

--
-- Table structure for table `hms-admins`
--

CREATE TABLE `hms-admins` (
  `sno` int(11) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `hms-admins`
--

INSERT INTO `hms-admins` (`sno`, `user_name`, `password`) VALUES
(1, 'hms@admin', 'hms@admin123');

-- --------------------------------------------------------

--
-- Table structure for table `notifactions`
--

CREATE TABLE `notifactions` (
  `sno` int(11) NOT NULL,
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

INSERT INTO `notifactions` (`sno`, `id`, `notification_name`, `eventdate`, `eventmsg`, `evelink`, `eveactive`) VALUES
(1, 0, 'hello', '2023-03-29', 'sdfasdfasfsafasf', 'ddsa', 'YES');

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
('TZ2K230002', 'siva', 'helo', 'rgukt nuzvid', '5', 'Male', 'N181164@rguktn.ac.in', 'nuzvid', 'ksksks', 'ap', '08833738383', 250, '25d55ad283aa400af464c76d713c07ad', 'TZ2K230002-6410a41f5fb569.52376379.jpg', '7272722'),
('TZ2K230001', 'siva', 'helo', 'rgukt', '3', 'Male', 'N181165@rguktn.ac.in', 'nuzvid', 'kksksks', 'ap', '08833738383', 250, 'cd6790e431c20429fa67bc59955e99e1', 'TZ2K230001-64108f0393aaa0.99739453.png', 'N181116'),
('TZ2K230003', 'siva', 'helo', 'rguktn', '4', 'Male', 'siva@gmail.com', 'nuzvid', 'kkd', 'ap', '08247252286', 400, 'cd6790e431c20429fa67bc59955e99e1', 'TZ2K230003-6410ccb884b3a0.13051983.jpeg', 'N181165');

-- --------------------------------------------------------

--
-- Table structure for table `workshops`
--

CREATE TABLE `workshops` (
  `sno` int(11) NOT NULL,
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

INSERT INTO `workshops` (`sno`, `id`, `wrk_name`, `branch`, `wrk_info`, `wrk_des`, `amaount`, `venue_time`, `duration`, `ph_no`, `photo`) VALUES
(1, 1, 'nemasthe', 'civil', 'good morning', 'ok guys it is for fun', '243', '7383', '2hours', '9573319095', 'IMG-640b5afcac9445.31456129.jpg'),
(2, 2, 'siddhu', 'mech', 'skskkss', 'kdksllsls', 'kdkkskkd', 'kdkdkd', '3hours', '3319095', 'IMG-640b60c69885e7.12783829.jpg'),
(3, 3, 'siddhu from srikakulam', 'cse', 'hi this is siddh fr', 'qwertyuioplkjhgfdsaszxcvbn', '10000', 'tiem an', '3hours', '9398848215', 'IMG-640b6d19489d64.40125601.jpg'),
(4, 0, 'gg', 'cse', 'gdgfgfyykskskskks\r\nsissiisiiiiiiiiidfsljljsfllss', 'vamsi is the one of the team  member in the sdcac and siddhu also a skskskkss\r\n sisis s dwevaemesie 2\r\ns', '23456', '12:30', '2 hours', 'contact:llllll,\r\ncontact: sksksks,\r\ncoantacct:sksksls,\r\nskskskksks:sksks', 'IMG-6410ad0b9b46e6.20734307.jpg'),
(5, 0, 'veeramalla', 'civil', 'hi helo good morning', 'good morning to one and all today we will going to be developing a website for teckzite .I hope it will be done successfully.', '23456', 'Ab-2 first floor 10:30', '2 hours', 'contact:8247252286,\r\ncontact:9912691390,\r\ncontact:8247259099,\r\ncontact:7207201053', 'IMG-641138cb461b49.43338822.png'),
(6, 0, 'helo', 'robotics', 'rkskskksks', 'kskskskksksklslslsllslslfslskkkkkkkkkkkllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllll', '23456', '12:30', '2 hours', 'siva,\r\nhi,\r\nhelo,\r\nskkks,\r\nkskskks', 'IMG-64113d19f3d995.23682279.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `workshops_reg`
--

CREATE TABLE `workshops_reg` (
  `sno` int(11) NOT NULL,
  `workshop` varchar(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `college` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phono` varchar(30) NOT NULL,
  `rollno` varchar(30) NOT NULL,
  `paid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `workshops_reg`
--

INSERT INTO `workshops_reg` (`sno`, `workshop`, `first_name`, `last_name`, `college`, `gender`, `email`, `phono`, `rollno`, `paid`) VALUES
(7, 'veeramalla', 'siva', 'helo', 'rgukt', 'Male', 'siva@gmail.com', '8833738383', 'N181160', 100);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `competitions`
--
ALTER TABLE `competitions`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `events_reg`
--
ALTER TABLE `events_reg`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `hms`
--
ALTER TABLE `hms`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `hms-admins`
--
ALTER TABLE `hms-admins`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `notifactions`
--
ALTER TABLE `notifactions`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `registrations`
--
ALTER TABLE `registrations`
  ADD PRIMARY KEY (`Email`);

--
-- Indexes for table `workshops`
--
ALTER TABLE `workshops`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `workshops_reg`
--
ALTER TABLE `workshops_reg`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `competitions`
--
ALTER TABLE `competitions`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `events_reg`
--
ALTER TABLE `events_reg`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `hms`
--
ALTER TABLE `hms`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `hms-admins`
--
ALTER TABLE `hms-admins`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `notifactions`
--
ALTER TABLE `notifactions`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `workshops`
--
ALTER TABLE `workshops`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `workshops_reg`
--
ALTER TABLE `workshops_reg`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
