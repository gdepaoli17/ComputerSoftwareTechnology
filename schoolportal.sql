-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2022 at 07:46 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `schoolportal`
--

-- --------------------------------------------------------

--
-- Table structure for table `courseenrollment`
--

CREATE TABLE `courseenrollment` (
  `enrollmentID` int(11) NOT NULL,
  `studentID` int(11) NOT NULL,
  `offeringID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courseenrollment`
--

INSERT INTO `courseenrollment` (`enrollmentID`, `studentID`, `offeringID`) VALUES
(1, 1, 1),
(2, 1, 6),
(3, 1, 13),
(4, 1, 17),
(5, 1, 19),
(7, 2, 27),
(8, 2, 29),
(9, 2, 33),
(10, 2, 38),
(11, 2, 42),
(12, 2, 49),
(13, 3, 53),
(14, 3, 55),
(15, 3, 59),
(16, 3, 65),
(17, 3, 69),
(18, 3, 74),
(19, 4, 1),
(20, 4, 6),
(21, 4, 13),
(22, 4, 17),
(23, 4, 19),
(24, 4, 23),
(65, 1, 88),
(66, 1, 88);

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `courseID` int(11) NOT NULL,
  `courseName` varchar(255) NOT NULL,
  `maxNumStudents` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`courseID`, `courseName`, `maxNumStudents`) VALUES
(1, 'ART 101: Intro To Art', 2),
(2, 'ART 102: Composition', 3),
(3, 'MTH 101: College Algebra', 3),
(4, 'CST 101: Intro to computer Science', 5),
(5, 'CST 301: Software Technology & Design', 3),
(6, 'CST 304: Software Requirements & Analysis', 3),
(7, 'CST 307: Software Architecture & Design', 5),
(8, 'CST 310: Software Development', 5);

-- --------------------------------------------------------

--
-- Table structure for table `coursesoffered`
--

CREATE TABLE `coursesoffered` (
  `offeringID` int(11) NOT NULL,
  `courseID` int(11) NOT NULL,
  `year` year(4) NOT NULL,
  `semester` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `coursesoffered`
--

INSERT INTO `coursesoffered` (`offeringID`, `courseID`, `year`, `semester`) VALUES
(1, 1, 2022, 'Summer'),
(2, 1, 2022, 'Fall'),
(3, 1, 2023, 'Spring'),
(4, 1, 2023, 'Summer'),
(5, 1, 2023, 'Fall'),
(6, 2, 2022, 'Fall'),
(7, 2, 2023, 'Spring'),
(8, 2, 2023, 'Fall'),
(9, 3, 2022, 'Summer'),
(10, 3, 2023, 'Spring'),
(11, 3, 2023, 'Summer'),
(12, 4, 2022, 'Summer'),
(13, 4, 2022, 'Fall'),
(14, 4, 2023, 'Spring'),
(15, 4, 2023, 'Summer'),
(16, 4, 2023, 'Fall'),
(17, 5, 2022, 'Fall'),
(18, 5, 2023, 'Fall'),
(19, 6, 2022, 'Fall'),
(20, 6, 2023, 'Spring'),
(21, 6, 2023, 'Fall'),
(22, 7, 2022, 'Summer'),
(23, 7, 2022, 'Fall'),
(24, 7, 2023, 'Spring'),
(25, 7, 2023, 'Summer'),
(26, 7, 2023, 'Fall'),
(27, 8, 2022, 'Summer'),
(28, 8, 2023, 'Summer'),
(29, 8, 2022, 'Fall'),
(30, 8, 2023, 'Spring'),
(31, 8, 2023, 'Fall'),
(33, 2, 2022, 'Fall'),
(34, 2, 2023, 'Spring'),
(35, 2, 2023, 'Summer'),
(36, 2, 2023, 'Fall'),
(37, 3, 2022, 'Summer'),
(38, 3, 2022, 'Fall'),
(39, 3, 2023, 'Spring'),
(40, 3, 2023, 'Summer'),
(41, 3, 2023, 'Fall'),
(42, 4, 2022, 'Fall'),
(43, 4, 2023, 'Spring'),
(44, 4, 2023, 'Fall'),
(45, 5, 2022, 'Summer'),
(46, 5, 2023, 'Spring'),
(47, 5, 2023, 'Summer'),
(48, 6, 2022, 'Summer'),
(49, 6, 2022, 'Fall'),
(50, 6, 2023, 'Spring'),
(51, 6, 2023, 'Summer'),
(52, 6, 2023, 'Fall'),
(53, 7, 2022, 'Fall'),
(54, 7, 2023, 'Fall'),
(55, 8, 2022, 'Fall'),
(56, 8, 2023, 'Spring'),
(57, 8, 2023, 'Fall'),
(58, 1, 2022, 'Summer'),
(59, 1, 2022, 'Fall'),
(60, 1, 2023, 'Spring'),
(61, 1, 2023, 'Summer'),
(62, 1, 2023, 'Fall'),
(63, 2, 2022, 'Summer'),
(64, 2, 2023, 'Summer'),
(65, 3, 2022, 'Fall'),
(66, 3, 2023, 'Spring'),
(67, 3, 2023, 'Fall'),
(68, 4, 2022, 'Summer'),
(69, 4, 2022, 'Fall'),
(70, 4, 2023, 'Spring'),
(71, 4, 2023, 'Summer'),
(72, 4, 2023, 'Fall'),
(73, 5, 2022, 'Summer'),
(74, 5, 2022, 'Fall'),
(75, 5, 2023, 'Spring'),
(76, 5, 2023, 'Summer'),
(77, 5, 2023, 'Fall'),
(78, 6, 2022, 'Fall'),
(79, 6, 2023, 'Spring'),
(80, 6, 2023, 'Fall'),
(81, 7, 2022, 'Summer'),
(82, 7, 2023, 'Spring'),
(83, 7, 2023, 'Summer'),
(84, 8, 2022, 'Summer'),
(85, 8, 2022, 'Fall'),
(86, 8, 2023, 'Spring'),
(87, 8, 2023, 'Summer'),
(88, 8, 2023, 'Fall'),
(89, 1, 2022, 'Fall'),
(90, 1, 2023, 'Fall');

-- --------------------------------------------------------

--
-- Table structure for table `notifyuser`
--

CREATE TABLE `notifyuser` (
  `notificationID` int(11) NOT NULL,
  `studentID` int(11) NOT NULL,
  `offeringID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `studenttbl`
--

CREATE TABLE `studenttbl` (
  `id` int(100) NOT NULL,
  `firstName` varchar(100) NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `email` varchar(200) DEFAULT NULL,
  `password` varchar(100) NOT NULL,
  `phoneNumber` varchar(100) NOT NULL,
  `SSN` int(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `major` varchar(100) NOT NULL,
  `userName` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studenttbl`
--

INSERT INTO `studenttbl` (`id`, `firstName`, `lastName`, `email`, `password`, `phoneNumber`, `SSN`, `address`, `major`, `userName`) VALUES
(1, 'gino', 'depaoli', 'gino.depaoli@contoso.com', 'welcome123', '1231231234', 123121234, '123 barcelona st', 'Computers', 'gino.depaoli'),
(2, 'Mia', 'De Paoli', 'mia.depaoli@contoso.com', 'welcome123', '1231231234', 123456789, '123 Barca St', 'art', 'mia.depaoli'),
(3, 'Luca', 'DePaoli', 'luca.depaoli@contoso.com', 'welcome123', '1122223322', 123122121, '324 Madrid street', 'Math', 'luca.depaoli'),
(4, 'leo', 'depaoli', 'leo.depaoli@contoso.com', 'welcome123', '9129219212', 123321212, '123 Rome street', 'Art', 'leo.depaoli'),
(5, 'test', 'test', 'test@CONTOSO.COM', '1234', '1231231234', 1231231233, '123', 'science', 'test.test');

-- --------------------------------------------------------

--
-- Table structure for table `waitlist`
--

CREATE TABLE `waitlist` (
  `waitlistID` int(11) NOT NULL,
  `studentID` int(11) NOT NULL,
  `offeringID` int(11) NOT NULL,
  `timeOfAdd` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courseenrollment`
--
ALTER TABLE `courseenrollment`
  ADD PRIMARY KEY (`enrollmentID`),
  ADD KEY `studentID` (`studentID`),
  ADD KEY `offeringID` (`offeringID`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`courseID`);

--
-- Indexes for table `coursesoffered`
--
ALTER TABLE `coursesoffered`
  ADD PRIMARY KEY (`offeringID`),
  ADD KEY `courseID` (`courseID`);

--
-- Indexes for table `notifyuser`
--
ALTER TABLE `notifyuser`
  ADD PRIMARY KEY (`notificationID`),
  ADD KEY `studentID` (`studentID`),
  ADD KEY `offeringID` (`offeringID`);

--
-- Indexes for table `studenttbl`
--
ALTER TABLE `studenttbl`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `SSN` (`SSN`);

--
-- Indexes for table `waitlist`
--
ALTER TABLE `waitlist`
  ADD PRIMARY KEY (`waitlistID`),
  ADD KEY `studentID` (`studentID`),
  ADD KEY `offeringID` (`offeringID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courseenrollment`
--
ALTER TABLE `courseenrollment`
  MODIFY `enrollmentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `courseID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `coursesoffered`
--
ALTER TABLE `coursesoffered`
  MODIFY `offeringID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14521;

--
-- AUTO_INCREMENT for table `notifyuser`
--
ALTER TABLE `notifyuser`
  MODIFY `notificationID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `studenttbl`
--
ALTER TABLE `studenttbl`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `waitlist`
--
ALTER TABLE `waitlist`
  MODIFY `waitlistID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `courseenrollment`
--
ALTER TABLE `courseenrollment`
  ADD CONSTRAINT `courseenrollment_ibfk_1` FOREIGN KEY (`studentID`) REFERENCES `studenttbl` (`id`),
  ADD CONSTRAINT `courseenrollment_ibfk_2` FOREIGN KEY (`offeringID`) REFERENCES `coursesoffered` (`offeringID`);

--
-- Constraints for table `notifyuser`
--
ALTER TABLE `notifyuser`
  ADD CONSTRAINT `notifyuser_ibfk_1` FOREIGN KEY (`studentID`) REFERENCES `studenttbl` (`id`),
  ADD CONSTRAINT `notifyuser_ibfk_2` FOREIGN KEY (`offeringID`) REFERENCES `coursesoffered` (`offeringID`);

--
-- Constraints for table `waitlist`
--
ALTER TABLE `waitlist`
  ADD CONSTRAINT `waitlist_ibfk_1` FOREIGN KEY (`studentID`) REFERENCES `studenttbl` (`id`),
  ADD CONSTRAINT `waitlist_ibfk_2` FOREIGN KEY (`offeringID`) REFERENCES `coursesoffered` (`offeringID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
