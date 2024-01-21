-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 03, 2019 at 11:30 AM
-- Server version: 5.6.34-log
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sih`
--

-- --------------------------------------------------------

--
-- Table structure for table `asha`
--

CREATE TABLE `asha` (
  `ashaid` int(11) NOT NULL,
  `regid_asha` varchar(30) NOT NULL,
  `fname` varchar(24) NOT NULL,
  `lname` varchar(24) NOT NULL,
  `email` varchar(64) NOT NULL,
  `pwd` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `asha`
--

INSERT INTO `asha` (`ashaid`, `regid_asha`, `fname`, `lname`, `email`, `pwd`) VALUES
(1, '1001', 'aditya', 'Porwal', 'aditya@gmail.com', 'aditya'),
(2, '1002', 'Dinesh', 'Mittal', 'dinesh@gmail.com', 'aditya'),
(3, '1003', 'Vaishnavi', 'Patil', 'vaishnavi@gmail.com', 'aditya'),
(4, '1004', 'shraddha', 'Jadhav', 'shraddha@gmail.com', 'aditya'),
(5, '1005', 'komal', 'patil', 'komalpatil@gmail.com', 'aditya');

-- --------------------------------------------------------

--
-- Table structure for table `death`
--

CREATE TABLE `death` (
  `regid_user` int(250) NOT NULL,
  `fname` varchar(250) NOT NULL,
  `lname` varchar(250) NOT NULL,
  `dob` date NOT NULL,
  `dod` date NOT NULL,
  `reason` varchar(250) NOT NULL,
  `gender` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `death`
--

INSERT INTO `death` (`regid_user`, `fname`, `lname`, `dob`, `dod`, `reason`, `gender`) VALUES
(102, 'Nikunj', 'Saraf', '1998-05-12', '0000-00-00', '', 'male'),
(111, 'aaa', '', '0000-00-00', '0000-00-00', '', ''),
(121, 'aditya', 'test1', '0000-00-00', '0000-00-00', '', 'male');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `docid` int(11) NOT NULL,
  `regid_doc` varchar(24) NOT NULL,
  `fname` varchar(24) NOT NULL,
  `lname` varchar(24) NOT NULL,
  `email` varchar(64) NOT NULL,
  `pwd` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`docid`, `regid_doc`, `fname`, `lname`, `email`, `pwd`) VALUES
(7, '7868', 'hjgjhg', 'ghj', 'kgkgk@gmail.com', 'khkgfhgfhf'),
(8, '7658758', 'aditya', 'porwal', 'lkhkugk@gmail.com', 'hgkyfkjkvj'),
(9, '1298', 'adityap', 'porwal', 'aditya@gmail.com', 'aditya'),
(10, '123', 'dinesh', 'mittal', 'dineshmittal@gmail.com', '12345'),
(11, '1234', 'dinesh', 'mittal', 'dinesh@gmail.com', '1234'),
(12, '', '', '', '', ''),
(13, 'test2', 'test2', 'test2', 'test2@gmail.com', 'aditya');

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `regid_user` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`regid_user`, `date`) VALUES
(106, '2019-03-03'),
(104, '2019-03-03'),
(103, '2019-03-03'),
(101, '2019-03-03'),
(102, '2019-03-03'),
(105, '2019-03-02');

-- --------------------------------------------------------

--
-- Table structure for table `medical`
--

CREATE TABLE `medical` (
  `userid` int(250) NOT NULL,
  `regid_user` int(250) NOT NULL,
  `organ` varchar(30) NOT NULL,
  `disease` varchar(30) NOT NULL,
  `symptoms` varchar(1000) NOT NULL,
  `duration` varchar(256) NOT NULL,
  `intensity` varchar(500) NOT NULL,
  `ashaid` varchar(256) NOT NULL,
  `additional_info` varchar(512) NOT NULL,
  `Date` date NOT NULL,
  `remark` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medical`
--

INSERT INTO `medical` (`userid`, `regid_user`, `organ`, `disease`, `symptoms`, `duration`, `intensity`, `ashaid`, `additional_info`, `Date`, `remark`) VALUES
(112, 105, 'head', '', 'Blurred Vision,Illusion of surrounding being bigger or smaller they actually are ,Increased thirst and urinationt', 'More than a Week ', 'Moderate', '1', 'hello', '2019-03-02', ''),
(113, 105, 'Chest', 'Tuberculosis', 'Coughing ,Chest tightness ', '2 weeks', 'moderate', '1', 'NA', '2019-03-02', ''),
(114, 105, 'Chest', 'Tuberculosis', 'Coughing ,Chest tightness ', '2 weeks', 'moderate', '1', 'NA', '2019-03-02', ''),
(115, 102, 'head', '', 'Oversensitivity to light,sound,or smells,Vomiting,Vomiting,Difficulty  in sleeping,Sore throat,Food cravings,Increased thirst and urinationt', ' Less than 1 day', 'Moderate', '1', 'na', '2019-03-02', ''),
(116, 103, 'head', '', 'Oversensitivity to light,sound,or smells,Vomiting,Vomiting,Difficulty  in sleeping,Sore throat,Food cravings,Increased thirst and urinationt', ' Less than 1 day', 'Moderate', '1', 'test1', '2019-03-02', ''),
(117, 103, 'head', '', 'Oversensitivity to light,sound,or smells,Vomiting,Vomiting,Difficulty  in sleeping,Sore throat,Food cravings,Increased thirst and urinationt', ' Less than 1 day', 'Moderate', '1', 'test1', '2019-03-02', ''),
(118, 103, 'head', '', 'Oversensitivity to light,sound,or smells,Vomiting,Vomiting,Difficulty  in sleeping,Sore throat,Food cravings,Increased thirst and urinationt', ' Less than 1 day', 'Moderate', '1', 'test1', '2019-03-02', ''),
(119, 103, 'head', '', 'Oversensitivity to light,sound,or smells,Vomiting,Vomiting,Difficulty  in sleeping,Sore throat,Food cravings,Increased thirst and urinationt', ' Less than 1 day', 'Moderate', '1', 'test1', '2019-03-02', ''),
(120, 103, 'head', '', 'Oversensitivity to light,sound,or smells,Vomiting,Vomiting,Difficulty  in sleeping,Sore throat,Food cravings,Increased thirst and urinationt', ' Less than 1 day', 'Moderate', '1', 'test1', '2019-03-02', ''),
(121, 101, 'Head', '', 'Swelling of the joint lining,Soft tissue destruction ,Night pain,Limited range of motion and catching of the knee,Swelling or deformity in the joint', '2-3 days ', 'Severe', '1', '', '0000-00-00', ''),
(122, 103, 'knee', '', 'Swelling of the joint lining,Soft tissue destruction ,Night pain,Limited range of motion and catching of the knee,Swelling or deformity in the joint', '2-3 days ', 'Moderate', '1', 'test1', '2019-03-02', ''),
(123, 104, 'sexual organ', '', 'Discharge from the penis,Itching or irritation inside the penis ,Dark urine', ' Less than 1 day', 'moderate', '1', '', '2019-03-02', ''),
(124, 101, 'chest', '', 'Coughing,Anxiety,wheezing when breathing,swelling,chest pain', '2-3 days ', 'Moderate', '1', '', '2019-03-03', ''),
(125, 102, 'abdomen', '', 'pain around the bellybutton,Discomfort or pain in your stomach ,Viral Gastroenteritis (Stomach Flu),Vomiting, with or without blood', 'More than a Week ', 'Moderate', '1', '', '2019-03-03', ''),
(126, 103, 'abdomen', '', 'pain around the bellybutton,Discomfort or pain in your stomach ,Viral Gastroenteritis (Stomach Flu),Urinary Tract Infection,diarrhea', 'More than a Week ', 'Severe', '1', '', '2019-03-03', ''),
(127, 104, 'thigh', '', 'Inflammation,Sudden and severe pain during exercise,Bruising,numbness in the outer (lateral) part of your thigh', 'More than a Week ', 'Moderate', '1', '', '2019-03-03', ''),
(128, 106, 'sexual organ', '', 'Painful urination, blisters in the genital area', ' Less than 1 day', 'moderate', '1', '', '2019-03-03', '');

--
-- Triggers `medical`
--
DELIMITER $$
CREATE TRIGGER `logUpdate` AFTER INSERT ON `medical` FOR EACH ROW insert into log values(NEW.regid_user,NOW()) on DUPLICATE KEY UPDATE date=NOW()
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `medical_update`
--

CREATE TABLE `medical_update` (
  `count` int(11) NOT NULL,
  `date` date NOT NULL,
  `regid_user` int(128) NOT NULL,
  `docid` int(128) NOT NULL,
  `Disease` varchar(255) NOT NULL,
  `remark` varchar(512) NOT NULL,
  `lab` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medical_update`
--

INSERT INTO `medical_update` (`count`, `date`, `regid_user`, `docid`, `Disease`, `remark`, `lab`) VALUES
(1, '2019-03-02', 102, 1298, 'Fever', 'symptoms of viral ffever', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `pregnancy`
--

CREATE TABLE `pregnancy` (
  `regid_user` int(255) NOT NULL,
  `fname` varchar(512) NOT NULL,
  `lname` varchar(512) NOT NULL,
  `lmp` date NOT NULL,
  `pcount` int(128) NOT NULL,
  `weight` int(128) NOT NULL,
  `blg` varchar(28) NOT NULL,
  `height` int(128) NOT NULL,
  `history` varchar(256) NOT NULL,
  `edd` date NOT NULL,
  `ashaid` int(255) NOT NULL,
  `ap1` date NOT NULL,
  `ap2` date NOT NULL,
  `ap3` date NOT NULL,
  `ap4` date NOT NULL,
  `ap5` date NOT NULL,
  `ap6` date NOT NULL,
  `ap7` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pregnancy`
--

INSERT INTO `pregnancy` (`regid_user`, `fname`, `lname`, `lmp`, `pcount`, `weight`, `blg`, `height`, `history`, `edd`, `ashaid`, `ap1`, `ap2`, `ap3`, `ap4`, `ap5`, `ap6`, `ap7`) VALUES
(0, '', '', '0000-00-00', 0, 0, 'Blood Group', 0, '', '2019-12-08', 685978578, '2019-03-03', '2019-05-22', '2019-07-11', '2019-08-30', '2019-10-09', '2019-11-08', '2019-12-08'),
(103, 'aa', 'aaa', '2019-03-03', 2, 70, 'A-', 78, 'na', '2019-12-08', 685978578, '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00'),
(104, 'aa', 'aaa', '2019-03-03', 2, 70, 'A-', 78, 'na', '2019-04-22', 685978578, '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00'),
(108, 'nikunj ', 'saraj', '2019-03-08', 200, 90, 'AB-', 120, 'no', '2019-12-13', 685978578, '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00'),
(110, 'Vidya', 'Mehra', '2019-02-20', 1, 71, 'B+', 145, 'no', '2019-11-27', 685978578, '2019-03-03', '2019-05-11', '2019-06-30', '2019-08-19', '2019-09-28', '2019-10-28', '2019-11-27'),
(111, '', '', '2019-02-27', 0, 0, 'Blood Group', 0, '', '2019-12-04', 685978578, '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00'),
(112, 'Kiran', 'Patil', '2019-02-14', 2, 78, 'AB+', 150, 'no', '2019-11-21', 685978578, '2019-03-03', '2019-05-05', '2019-06-24', '2019-08-13', '2019-09-22', '2019-10-22', '2019-11-21'),
(1111, '', '', '2019-01-02', 0, 0, 'Blood Group', 0, '', '2019-10-09', 685978578, '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00'),
(3312312, 'Nikunj', '', '0000-00-00', 0, 0, 'Blood Group', 0, '', '2019-12-08', 685978578, '2019-03-03', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `userid` int(11) NOT NULL,
  `regid_user` varchar(30) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `weight` int(30) NOT NULL,
  `blg` varchar(60) NOT NULL,
  `height` int(30) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `ashaid` varchar(256) NOT NULL,
  `history` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`userid`, `regid_user`, `firstname`, `lastname`, `gender`, `dob`, `weight`, `blg`, `height`, `phone`, `ashaid`, `history`) VALUES
(101, '101', 'Vaishnavi', 'Patil', 'Female', '1998-02-14', 40, 'B+', 154, '9879807081', 'aditya@gmail.com', 'na'),
(116, '102', 'Nikhunj', 'Saraf', 'male', '1997-03-05', 71, 'AB+', 171, '8987657546', '1001', 'no'),
(117, '103', 'Tejas', 'Mandavgane', 'male', '1995-03-06', 87, 'A+', 176, '8989687689', '1001', ''),
(118, '104', 'Shraddha', 'Jadhav', 'male', '2000-12-05', 45, 'B+', 145, '9887685875', '1001', 'TB'),
(119, '105', 'dinesh', 'mittal', 'male', '1996-03-03', 78, 'A-', 187, '9098798978', '1001', 'no'),
(120, '106', 'Shalini', 'Singh', 'Female', '2001-03-29', 78, 'A+', 171, '89878907686', '1001', 'no');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `asha`
--
ALTER TABLE `asha`
  ADD PRIMARY KEY (`ashaid`);

--
-- Indexes for table `death`
--
ALTER TABLE `death`
  ADD PRIMARY KEY (`regid_user`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`docid`),
  ADD UNIQUE KEY `regid_doc` (`regid_doc`);

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`regid_user`);

--
-- Indexes for table `medical`
--
ALTER TABLE `medical`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `medical_update`
--
ALTER TABLE `medical_update`
  ADD PRIMARY KEY (`count`);

--
-- Indexes for table `pregnancy`
--
ALTER TABLE `pregnancy`
  ADD PRIMARY KEY (`regid_user`),
  ADD UNIQUE KEY `regid_user` (`regid_user`);

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`regid_user`),
  ADD UNIQUE KEY `regid_user` (`regid_user`),
  ADD KEY `userid` (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `asha`
--
ALTER TABLE `asha`
  MODIFY `ashaid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `docid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `regid_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2147483647;
--
-- AUTO_INCREMENT for table `medical`
--
ALTER TABLE `medical`
  MODIFY `userid` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;
--
-- AUTO_INCREMENT for table `medical_update`
--
ALTER TABLE `medical_update`
  MODIFY `count` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
