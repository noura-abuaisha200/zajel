-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 12, 2020 at 08:41 PM
-- Server version: 5.6.35
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `zajel`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `courseId` int(11) NOT NULL,
  `courseName` varchar(200) NOT NULL,
  `courseClock` int(11) NOT NULL,
  `room` varchar(20) NOT NULL,
  `courseType` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`courseId`, `courseName`, `courseClock`, `room`, `courseType`) VALUES
(11111, 'انجليزي استدراكي', 3, '#00G	', 1),
(12345, 'لغه عربيه', 3, '#8412	', 1),
(22222, 'انجليززي 101', 3, 'GB12', 2),
(33333, 'انجليزي 102', 3, 'GF00', 2);

-- --------------------------------------------------------

--
-- Table structure for table `courseDepends`
--

CREATE TABLE `courseDepends` (
  `courseDependsId` int(11) NOT NULL,
  `courseId` int(11) NOT NULL,
  `courseDepends` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `courseDepends`
--

INSERT INTO `courseDepends` (`courseDependsId`, `courseId`, `courseDepends`) VALUES
(1, 11111, 22222),
(2, 11111, 33333);

-- --------------------------------------------------------

--
-- Table structure for table `courseSection`
--

CREATE TABLE `courseSection` (
  `courseId` int(11) NOT NULL,
  `sectionNumber` int(11) NOT NULL,
  `courseTeacher` varchar(200) NOT NULL,
  `campus` varchar(20) NOT NULL,
  `courseDay` varchar(200) NOT NULL,
  `courseFrom` varchar(11) NOT NULL,
  `CourseTo` varchar(11) NOT NULL,
  `capacity` int(11) NOT NULL,
  `numberOfStudent` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `courseSection`
--

INSERT INTO `courseSection` (`courseId`, `sectionNumber`, `courseTeacher`, `campus`, `courseDay`, `courseFrom`, `CourseTo`, `capacity`, `numberOfStudent`) VALUES
(11111, 2, 'احمد محمد', 'جديد', 'احد/ثلاثاء/خميس', '8', '9', 30, 0),
(11111, 3, 'محمد سعيد', 'قديم', 'اثنين/اربعاء', '8', '9:30', 60, 0);

-- --------------------------------------------------------

--
-- Table structure for table `Major`
--

CREATE TABLE `Major` (
  `majorId` int(11) NOT NULL,
  `majorName` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Major`
--

INSERT INTO `Major` (`majorId`, `majorName`) VALUES
(1, 'نظم المعلومات الادارية'),
(2, 'نظم المعلومات الحاسوبية');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `studentId` int(11) NOT NULL,
  `courseId` int(11) NOT NULL,
  `sectionId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `studentId` int(11) NOT NULL,
  `studentName` varchar(200) NOT NULL,
  `studentMobile` int(11) NOT NULL,
  `studentEmail` varchar(200) NOT NULL,
  `studentPassword` varchar(200) NOT NULL,
  `studentMajorId` int(11) NOT NULL,
  `idCard` int(11) NOT NULL,
  `stuudentPhoneIntro` int(11) NOT NULL,
  `avg` float NOT NULL DEFAULT '0',
  `superviserId` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`studentId`, `studentName`, `studentMobile`, `studentEmail`, `studentPassword`, `studentMajorId`, `idCard`, `stuudentPhoneIntro`, `avg`, `superviserId`) VALUES
(11243652, 'Malaak Nasser', 598123123, 'shreemtariq@gmail.com', '123', 1, 80529583, 2, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `superviser`
--

CREATE TABLE `superviser` (
  `superviserId` int(11) NOT NULL,
  `superviserName` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `superviser`
--

INSERT INTO `superviser` (`superviserId`, `superviserName`) VALUES
(1, 'لم يحدد');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`courseId`);

--
-- Indexes for table `courseDepends`
--
ALTER TABLE `courseDepends`
  ADD PRIMARY KEY (`courseDependsId`),
  ADD KEY `courseId` (`courseId`),
  ADD KEY `courseDepends` (`courseDepends`);

--
-- Indexes for table `courseSection`
--
ALTER TABLE `courseSection`
  ADD PRIMARY KEY (`courseId`,`sectionNumber`),
  ADD KEY `courseId` (`courseId`);

--
-- Indexes for table `Major`
--
ALTER TABLE `Major`
  ADD PRIMARY KEY (`majorId`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`studentId`,`courseId`),
  ADD KEY `studentId` (`studentId`),
  ADD KEY `courseId` (`courseId`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`studentId`),
  ADD KEY `studentMajorId` (`studentMajorId`),
  ADD KEY `superviserId` (`superviserId`);

--
-- Indexes for table `superviser`
--
ALTER TABLE `superviser`
  ADD PRIMARY KEY (`superviserId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `courseId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33334;
--
-- AUTO_INCREMENT for table `courseDepends`
--
ALTER TABLE `courseDepends`
  MODIFY `courseDependsId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `Major`
--
ALTER TABLE `Major`
  MODIFY `majorId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `superviser`
--
ALTER TABLE `superviser`
  MODIFY `superviserId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `courseDepends`
--
ALTER TABLE `courseDepends`
  ADD CONSTRAINT `coursedepends_ibfk_1` FOREIGN KEY (`courseId`) REFERENCES `course` (`courseId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `coursedepends_ibfk_2` FOREIGN KEY (`courseDepends`) REFERENCES `course` (`courseId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `courseSection`
--
ALTER TABLE `courseSection`
  ADD CONSTRAINT `coursesection_ibfk_1` FOREIGN KEY (`courseId`) REFERENCES `course` (`courseId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `signup`
--
ALTER TABLE `signup`
  ADD CONSTRAINT `signup_ibfk_1` FOREIGN KEY (`studentId`) REFERENCES `student` (`studentId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `signup_ibfk_2` FOREIGN KEY (`courseId`) REFERENCES `course` (`courseId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`studentMajorId`) REFERENCES `Major` (`majorId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `student_ibfk_2` FOREIGN KEY (`superviserId`) REFERENCES `superviser` (`superviserId`) ON DELETE CASCADE ON UPDATE CASCADE;
