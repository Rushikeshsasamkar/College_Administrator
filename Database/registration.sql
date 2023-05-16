-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2020 at 01:30 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `addteacher`
--

CREATE TABLE `addteacher` (
  `id` int(11) NOT NULL,
  `tName` varchar(30) NOT NULL,
  `eMail` varchar(20) NOT NULL,
  `mNumber` bigint(13) NOT NULL,
  `sName` varchar(20) NOT NULL,
  `addr` varchar(50) NOT NULL,
  `gender` char(1) NOT NULL,
  `religion` varchar(15) NOT NULL,
  `caste` varchar(15) NOT NULL,
  `adhar` bigint(16) NOT NULL,
  `dob` date NOT NULL,
  `doj` date NOT NULL,
  `designation` varchar(20) NOT NULL,
  `course` varchar(20) NOT NULL,
  `education` varchar(20) NOT NULL,
  `tExp` bigint(4) NOT NULL,
  `rExp` bigint(5) NOT NULL,
  `publication` varchar(15) NOT NULL,
  `pat` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `addteacher`
--

INSERT INTO `addteacher` (`id`, `tName`, `eMail`, `mNumber`, `sName`, `addr`, `gender`, `religion`, `caste`, `adhar`, `dob`, `doj`, `designation`, `course`, `education`, `tExp`, `rExp`, `publication`, `pat`) VALUES
(6, 'Patil xyz', 'xyz@gmail.com', 7060809876, 'pwp', ' iofjaduiof33hxjhch', 'M', 'hi', 'ma', 44667778990, '2020-02-18', '2020-02-12', 'hod', 'CE', 'mtech', 1, 0, 'no', '3'),
(9, 'sd', 'fgg@gmail.com', 88888888, 'php', ' vvgg', 'F', 'hi', 'hhh', 2353645645234, '2020-02-13', '2020-02-07', 'nn', 'rff', 'xxccv', 1, 1, 'no', '0'),
(14, '', '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', '', '', '', 0, 0, '', ''),
(15, '', '', 0, '', '', '', '', '', 0, '0000-00-00', '0000-00-00', '', '', '', 0, 0, '', ''),
(16, 'sds', '', 0, '', ' ', 'M', '', '', 0, '0000-00-00', '0000-00-00', '', '', '', 0, 0, '', ''),
(17, 'rushikesh SASAMKAR', 'rushikeshsasamakar94', 0, '', 'Okhla phase 1\r\nOkhla phase 1', 'S', '', '', 0, '0000-00-00', '0000-00-00', '', '', '', 0, 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `FullName` varchar(100) DEFAULT NULL,
  `AdminEmail` varchar(120) DEFAULT NULL,
  `UserName` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `updationDate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `FullName`, `AdminEmail`, `UserName`, `Password`, `updationDate`) VALUES
(1, 'Anuj Kumar', 'phpgurukulofficial@gmail.com', 'admin', '21232f297a57a5a743894a0e4a801fc3', '2020-04-19 05:59:39');

-- --------------------------------------------------------

--
-- Table structure for table `adminres`
--

CREATE TABLE `adminres` (
  `Name` varchar(25) NOT NULL,
  `Email_Address` varchar(25) NOT NULL,
  `User_Name` varchar(25) NOT NULL,
  `Password` varchar(25) NOT NULL,
  `Mobile_No` int(10) NOT NULL,
  `picsource` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminres`
--

INSERT INTO `adminres` (`Name`, `Email_Address`, `User_Name`, `Password`, `Mobile_No`, `picsource`) VALUES
('rushikesh Dilip SASAMKAR', 'rushikeshsasamakar94@gmai', 'admin', 'admin', 2147483647, ''),
('SuperAdmin', 'wwww@gmail.com', 'SuperAdmin', 'SuperAdmin', 2147483647, '');

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

CREATE TABLE `documents` (
  `SchoolLeavingTransfercertificate` varchar(100) NOT NULL,
  `sscmarkmemo` varchar(100) NOT NULL,
  `HscMarkmemo` varchar(100) NOT NULL,
  `CasteCertificate` varchar(100) NOT NULL,
  `NonCreamyLayer` varchar(100) NOT NULL,
  `NationalityCertificate` varchar(100) NOT NULL,
  `Iti` varchar(100) NOT NULL,
  `8thMarkmemo` varchar(100) NOT NULL,
  `9thMarkmemo` varchar(100) NOT NULL,
  `ZForm` varchar(100) NOT NULL,
  `Mcvc` varchar(100) NOT NULL,
  `Voc` varchar(100) NOT NULL,
  `StudentAdharCard` varchar(100) NOT NULL,
  `IncomeCertificate` varchar(100) NOT NULL,
  `BirthCertificate` varchar(100) NOT NULL,
  `NForm` varchar(100) NOT NULL,
  `InhabitantOrResidentOf` varchar(100) NOT NULL,
  `ProfarmaN` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `documents`
--

INSERT INTO `documents` (`SchoolLeavingTransfercertificate`, `sscmarkmemo`, `HscMarkmemo`, `CasteCertificate`, `NonCreamyLayer`, `NationalityCertificate`, `Iti`, `8thMarkmemo`, `9thMarkmemo`, `ZForm`, `Mcvc`, `Voc`, `StudentAdharCard`, `IncomeCertificate`, `BirthCertificate`, `NForm`, `InhabitantOrResidentOf`, `ProfarmaN`) VALUES
('documents/l1.jpg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('documents/00.jpg', 'documents/IMG_20190319_143436.jpg', 'documents/', 'documents/IMG20190110161353.jpg', 'documents/IMG20190110161358.jpg', 'documents/IMG20190110162431.jpg', 'documents/IMG20190110163918.jpg', 'documents/IMG20190110163937.jpg', 'documents/IMG20190110163956.jpg', 'documents/IMG20190110164608.jpg', 'documents/IMG20190110164633.jpg', 'documents/IMG20190110164638.jpg', 'documents/IMG20190110162446.jpg', 'documents/IMG20190225132647.jpg', 'documents/IMG20190228133446.jpg', 'documents/IMG20190110163918.jpg', 'documents/IMG20190110162446.jpg', 'documents/IMG20190110162446.jpg'),
('documents/', 'documents/', 'documents/00.jpg', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/'),
('documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/IMG20190110162446.jpg', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/'),
('documents/IMG20190110162431.jpg', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/'),
('documents/IMG20190110162446.jpg', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/');

-- --------------------------------------------------------

--
-- Table structure for table `hi`
--

CREATE TABLE `hi` (
  `Name` varchar(20) NOT NULL,
  `Branch` varchar(20) NOT NULL,
  `Email_Address` varchar(20) NOT NULL,
  `User_Name` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hi`
--

INSERT INTO `hi` (`Name`, `Branch`, `Email_Address`, `User_Name`, `Password`) VALUES
('njnjk1', 'jbjhbhjb1', 'jug', 'njkkjpp', '44');

-- --------------------------------------------------------

--
-- Table structure for table `hodres`
--

CREATE TABLE `hodres` (
  `Name` varchar(25) NOT NULL,
  `Department` varchar(20) NOT NULL,
  `Email_Address` varchar(25) NOT NULL,
  `User_Name` varchar(25) NOT NULL,
  `Password` varchar(25) NOT NULL,
  `picsource` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `studentres`
--

CREATE TABLE `studentres` (
  `Enrollment_Id` int(10) NOT NULL,
  `Name` text NOT NULL,
  `Branch` varchar(10) NOT NULL,
  `Semister` text NOT NULL,
  `Roll_No` int(2) NOT NULL,
  `Email_Address` text NOT NULL,
  `User_Name` text NOT NULL,
  `Password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studentres`
--

INSERT INTO `studentres` (`Enrollment_Id`, `Name`, `Branch`, `Semister`, `Roll_No`, `Email_Address`, `User_Name`, `Password`) VALUES
(1711520045, 'rushikesh Dilip SASAMKAR', 'Electronic', 'sdsd', 3, 'a@gmail.com', 'njknjk', 'x');

-- --------------------------------------------------------

--
-- Table structure for table `student_record`
--

CREATE TABLE `student_record` (
  `Enrollment_Id` int(100) NOT NULL,
  `Branch` varchar(50) NOT NULL,
  `First_Name` varchar(30) NOT NULL,
  `Middle_Name` varchar(30) NOT NULL,
  `Last_Name` varchar(30) NOT NULL,
  `Birthday_Day` varchar(30) NOT NULL,
  `Birthday_Month` varchar(30) NOT NULL,
  `Birthday_Year` varchar(20) NOT NULL,
  `Email_Id` varchar(30) NOT NULL,
  `Mobile_Number` varchar(10) NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `City` varchar(20) NOT NULL,
  `Pin_Code` varchar(10) NOT NULL,
  `State` varchar(20) NOT NULL,
  `Country` varchar(20) NOT NULL,
  `Caste` varchar(20) NOT NULL,
  `Last_Class_Attended` varchar(20) NOT NULL,
  `Date_Of_Admission` varchar(20) NOT NULL,
  `Mother_Name` varchar(20) NOT NULL,
  `Father_Name` varchar(20) NOT NULL,
  `Place_Of_Birth` varchar(20) NOT NULL,
  `ClassVIII_Board` varchar(20) NOT NULL,
  `ClassVIII_Percentage` varchar(20) NOT NULL,
  `ClassVIII_YrofPassing` varchar(20) NOT NULL,
  `ClassIX_Board` varchar(20) NOT NULL,
  `ClassIX_Percentage` varchar(20) NOT NULL,
  `ClassIX_YrofPassing` varchar(20) NOT NULL,
  `ClassX_Board` varchar(20) NOT NULL,
  `ClassX_Percentage` varchar(20) NOT NULL,
  `ClassX_YrofPassing` varchar(20) NOT NULL,
  `ClassXII_Board` varchar(20) NOT NULL,
  `ClassXII_Percentage` varchar(20) NOT NULL,
  `ClassXII_YrofPassing` varchar(20) NOT NULL,
  `Year` varchar(20) NOT NULL,
  `picsource` varchar(10000) NOT NULL,
  `Tc_No` int(20) NOT NULL,
  `SchoolLeavingTransfercertificate` varchar(100) NOT NULL,
  `sscmarkmemo` varchar(100) NOT NULL,
  `HscMarkmemo` varchar(100) NOT NULL,
  `CasteCertificate` varchar(100) NOT NULL,
  `NonCreamyLayer` varchar(100) NOT NULL,
  `NationalityCertificate` varchar(100) NOT NULL,
  `Iti` varchar(100) NOT NULL,
  `8thMarkmemo` varchar(100) NOT NULL,
  `9thMarkmemo` varchar(100) NOT NULL,
  `ZForm` varchar(100) NOT NULL,
  `Mcvc` varchar(100) NOT NULL,
  `Voc` varchar(100) NOT NULL,
  `StudentAdharCard` varchar(100) NOT NULL,
  `IncomeCertificate` varchar(100) NOT NULL,
  `BirthCertificate` varchar(100) NOT NULL,
  `NForm` varchar(100) NOT NULL,
  `InhabitantOrResidentOf` varchar(100) NOT NULL,
  `ProfarmaN` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_record`
--

INSERT INTO `student_record` (`Enrollment_Id`, `Branch`, `First_Name`, `Middle_Name`, `Last_Name`, `Birthday_Day`, `Birthday_Month`, `Birthday_Year`, `Email_Id`, `Mobile_Number`, `Gender`, `Address`, `City`, `Pin_Code`, `State`, `Country`, `Caste`, `Last_Class_Attended`, `Date_Of_Admission`, `Mother_Name`, `Father_Name`, `Place_Of_Birth`, `ClassVIII_Board`, `ClassVIII_Percentage`, `ClassVIII_YrofPassing`, `ClassIX_Board`, `ClassIX_Percentage`, `ClassIX_YrofPassing`, `ClassX_Board`, `ClassX_Percentage`, `ClassX_YrofPassing`, `ClassXII_Board`, `ClassXII_Percentage`, `ClassXII_YrofPassing`, `Year`, `picsource`, `Tc_No`, `SchoolLeavingTransfercertificate`, `sscmarkmemo`, `HscMarkmemo`, `CasteCertificate`, `NonCreamyLayer`, `NationalityCertificate`, `Iti`, `8thMarkmemo`, `9thMarkmemo`, `ZForm`, `Mcvc`, `Voc`, `StudentAdharCard`, `IncomeCertificate`, `BirthCertificate`, `NForm`, `InhabitantOrResidentOf`, `ProfarmaN`) VALUES
(171152069, 'Mechanical Engineering', 'new', 'Dilip', 'SASAMKAR', '-1', '-1', '2000', 'rushikeshsasamakar94@gmail.com', '5545454456', 'Male', '			Okhla phase 1\r\nOkhla phase 1			', 'New Delhi', '110020', 'Delhi', 'India', 'ok', 'kop', '21/06/2020', 'kpo', 'kpok', 'pok', 'ok', 'opkpo', 'kpo', '4', 'kpo', 'pokpko', 'pok', 'pok', 'pok', 'pokpko', 'pko', 'pko', 'Second_Year', 'images/IMG_8627.JPG', 77, 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/'),
(1711520022, 'Civil Engineering', 'Rushikesh', 'Dilip', 'Sasamkar', '-1', '-1', '-1', '', '', 'Male', 'Near maroti Temple,waki Jadid ,Tq-Kannad, 431147, ', 'Kannad', '431147', 'Maharashtra', 'India', 'okop', 'kop', '23/07/2020', 'kpo', 'kpkop', 'kpo', 'kpo', 'opk', '', '', '', '', '', '', '', '', '', '', '', 'images/', 81, 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/'),
(1711520033, 'Electrical Engineering', 'rushikesh', 'Dilip', 'SASAMKAR', '-1', '-1', '-1', 'rushikeshsasamakar94@gmail.com', '8989898999', 'Male', 'Okhla phase 1\r\nOkhla phase 1', 'New Delhi', '110020', 'Delhi', 'India', 'joij', 'oj', '23/07/2020', 'oij', 'jo', 'jo', 'joi', '', '', '', '', '', '', '', '', '', '', '', '', 'images/', 79, 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/'),
(1711520043, 'Mechanical Engineering', 'new', 'Dilip', 'SASAMKAR', '-1', '-1', '2000', 'rushikeshsasamakar94@gmail.com', '5545454456', 'Male', 'Okhla phase 1\r\nOkhla phase 1', 'New Delhi', '110020', 'Delhi', 'India', 'ok', 'kop', '21/06/2020', 'kpo', 'kpok', 'pok', 'ok', 'opkpo', 'kpo', 'okp', 'kpo', 'pokpko', 'pok', 'pok', 'pok', 'pokpko', 'pko', 'pko', 'Poly1st Year', 'images/', 75, 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/'),
(1711520045, 'Computer Engineering', 'rushikesh', 'Dilip', 'Sasamkar', '7', 'March', '2001', 'rushikeshsasamakar94@gmail.com', '8989898999', 'Male', 'Okhla phase 1\r\nOkhla phase 1', 'New Delhi', '431147', 'Delhi', 'India', 'Sutar (Hindu)', '10th', '13/06/2020', 'Shobha', 'DIlip', 'Waki', '45', '4', '45', '45', '44', '54', '54', '54', '4', '45', '44', '54', 'Poly1st Year', 'images/IMG_8627.JPG', 72, 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/'),
(1711520055, 'Mechanical Engineering', 'new', 'Dilip', 'SASAMKAR', '-1', '-1', '2000', 'rushikeshsasamakar94@gmail.com', '5545454456', 'Male', 'Okhla phase 1\r\nOkhla phase 1', 'New Delhi', '110020', 'Delhi', 'India', 'ok', 'kop', '21/06/2020', 'kpo', 'kpok', 'pok', 'ok', 'opkpo', 'kpo', 'okp', 'kpo', 'pokpko', 'pok', 'pok', 'pok', 'pokpko', 'pko', 'pko', 'Poly1st Year', 'images/', 76, 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/'),
(1711520078, 'Mechanical Engineering', 'rushikesh', 'Dilip', 'SASAMKAR', '-1', '-1', '2000', 'rushikeshsasamakar94@gmail.com', '5545454455', 'Male', 'Okhla phase 1\r\nOkhla phase 1', 'New Delhi', '110020', 'Delhi', 'India', 'opk', 'poj', '21/06/2020', 'popo', 'kop', 'k', 'pokp', 'okp', 'okpo', 'kpo', 'k', 'pok', 'pok', 'opk', 'pok', 'po', 'kpo', 'kpo', 'Poly1st Year', 'images/img002.jpg', 78, 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/'),
(1711520323, 'Computer Engineering', 'rushikesh', 'Dilip', 'SASAMKAR', '-1', '-1', '-1', 'rushikeshsasamakar94@gmail.com', '8989898989', 'Male', '									Okhla phase 1\r\nOkhla phase 1									', 'New Delhi', '110020', 'Delhi', 'India', 'jo', 'ijoi', '30/07/2020', 'jio', 'joi', 'jio', 'joi', 'j', 'oijo', '4', 'oj', 'oi', 'joi', 'joi', 'joj', 'oij', 'oj', 'oj', 'Third_Year', 'images/', 82, 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/'),
(1711520325, 'Electrical Engineering', 'yash', 'arun', 'karwa', '19', 'September', '2000', 'yashkarwa94@gmail.com', '5545454456', 'Male', 'Okhla phase 1\r\nOkhla phase 1', 'New Delhi', '110020', 'Delhi', 'India', 'maratha', '10th', '21/06/2020', 'Mmmk', 'Arun', 'Jalna', '8', '8', '89', '89', '89', '8', '9', '8', '89', '8', '8', '98', 'Poly1st Year', '', 74, 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/'),
(1711520333, 'Electronics & Telecommunication Engineering', 'yash', 'arun', 'karwa', '-1', '-1', '2000', 'rushikeshsasamakar94@gmail.com', '5545454456', 'Male', 'Okhla phase 1\r\nOkhla phase 1', 'New Delhi', '110020', 'Delhi', 'India', 'juj', 'ioj', '23/07/2020', 'oj', 'jjio', 'joi', 'joi', 'ijo', 'oij', '', '', '', '', '', '', '', '', '', '', 'images/', 80, 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/'),
(1711544444, 'Mechanical Engineering', 'rushikesh', 'Dilip', 'SASAMKAR', '-1', '-1', '-1', 'rushikeshsasamakar94@gmail.com', '8989898989', 'Male', 'Okhla phase 1\r\nOkhla phase 1', 'New Delhi', '110020', 'Delhi', 'India', 'jioj', 'oijoi', '30/07/2020', 'joi', 'j', 'jo', 'joi', 'joij', 'oij', 'oj', 'oij', 'oijo', 'joi', 'joij', 'oij', 'oi', 'jo', 'j', 'Third_Year', 'images/', 83, 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/'),
(1733333333, 'Mechanical Engineering', 'new', 'Dilip', 'SASAMKAR', '-1', '-1', '-1', 'rushikeshsasamakar94@gmail.com', '5545454456', 'Male', 'Okhla phase 1\r\nOkhla phase 1', 'New Delhi', '110020', 'Delhi', 'India', 'hjkhk', 'hjk', '30/07/2020', 'hkj', 'hkj', 'hkj', 'hkj', 'hk', 'jhk', 'jh', 'kj', 'kjh', 'kj', 'hkjk', 'jkj', 'hk', 'jh', 'kj', 'Second_Year', 'images/', 84, 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/', 'documents/');

-- --------------------------------------------------------

--
-- Table structure for table `tblauthors`
--

CREATE TABLE `tblauthors` (
  `id` int(11) NOT NULL,
  `AuthorName` varchar(159) DEFAULT NULL,
  `creationDate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblauthors`
--

INSERT INTO `tblauthors` (`id`, `AuthorName`, `creationDate`, `UpdationDate`) VALUES
(1, 'Anuj kumar', '2017-07-08 12:49:09', '2017-07-08 15:16:59'),
(2, 'Chetan Bhagatt', '2017-07-08 14:30:23', '2017-07-08 15:15:09'),
(3, 'Anita Desai', '2017-07-08 14:35:08', NULL),
(4, 'HC Verma', '2017-07-08 14:35:21', NULL),
(5, 'R.D. Sharma ', '2017-07-08 14:35:36', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblbooks`
--

CREATE TABLE `tblbooks` (
  `id` int(11) NOT NULL,
  `BookName` varchar(255) DEFAULT NULL,
  `CatId` int(11) DEFAULT NULL,
  `AuthorId` int(11) DEFAULT NULL,
  `ISBNNumber` int(11) DEFAULT NULL,
  `BookPrice` int(11) DEFAULT NULL,
  `RegDate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblbooks`
--

INSERT INTO `tblbooks` (`id`, `BookName`, `CatId`, `AuthorId`, `ISBNNumber`, `BookPrice`, `RegDate`, `UpdationDate`) VALUES
(1, 'PHP And MySql programming', 5, 1, 222333, 20, '2017-07-08 20:04:55', '2017-07-15 05:54:41'),
(3, 'physics', 6, 4, 1111, 15, '2017-07-08 20:17:31', '2017-07-15 06:13:17'),
(4, 'Data Structure', 5, 1, 2147483647, 500, '2020-06-21 06:50:08', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblcategory`
--

CREATE TABLE `tblcategory` (
  `id` int(11) NOT NULL,
  `CategoryName` varchar(150) DEFAULT NULL,
  `Status` int(1) DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcategory`
--

INSERT INTO `tblcategory` (`id`, `CategoryName`, `Status`, `CreationDate`, `UpdationDate`) VALUES
(5, 'Technology', 1, '2017-07-04 18:35:39', '2017-07-08 17:13:03'),
(6, 'Science', 1, '2017-07-04 18:35:55', '0000-00-00 00:00:00'),
(7, 'Management', 1, '2017-07-04 18:36:16', '2020-06-21 06:48:05'),
(8, 'adventure', 1, '2020-06-21 06:47:54', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tblissuedbookdetails`
--

CREATE TABLE `tblissuedbookdetails` (
  `id` int(11) NOT NULL,
  `BookId` int(11) DEFAULT NULL,
  `StudentID` varchar(150) DEFAULT NULL,
  `IssuesDate` timestamp NULL DEFAULT current_timestamp(),
  `ReturnDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `RetrunStatus` int(1) DEFAULT NULL,
  `fine` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblissuedbookdetails`
--

INSERT INTO `tblissuedbookdetails` (`id`, `BookId`, `StudentID`, `IssuesDate`, `ReturnDate`, `RetrunStatus`, `fine`) VALUES
(1, 1, 'SID002', '2017-07-15 06:09:47', '2017-07-15 11:15:20', 1, 0),
(2, 1, 'SID002', '2017-07-15 06:12:27', '2017-07-15 11:15:23', 1, 5),
(3, 3, 'SID002', '2017-07-15 06:13:40', NULL, 0, NULL),
(4, 3, 'SID002', '2017-07-15 06:23:23', '2017-07-15 11:22:29', 1, 2),
(5, 1, 'SID009', '2017-07-15 10:59:26', NULL, 0, NULL),
(6, 3, 'SID011', '2017-07-15 18:02:55', '2020-05-30 05:23:53', 1, 550);

-- --------------------------------------------------------

--
-- Table structure for table `tblstudents`
--

CREATE TABLE `tblstudents` (
  `id` int(11) NOT NULL,
  `StudentId` varchar(100) DEFAULT NULL,
  `FullName` varchar(120) DEFAULT NULL,
  `EmailId` varchar(120) DEFAULT NULL,
  `MobileNumber` char(11) DEFAULT NULL,
  `Password` varchar(120) DEFAULT NULL,
  `Status` int(1) DEFAULT NULL,
  `RegDate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblstudents`
--

INSERT INTO `tblstudents` (`id`, `StudentId`, `FullName`, `EmailId`, `MobileNumber`, `Password`, `Status`, `RegDate`, `UpdationDate`) VALUES
(11, '1', 'yash arun karwa', 'rrr@gmail.com', '5545454456', '202cb962ac59075b964b07152d234b70', 0, '2020-06-04 06:32:29', '2020-08-02 07:22:52'),
(12, '2', 'rushikesh Dilip SASAMKAR', 'rushikeshsasamakar94@gmail.com', '8989898989', '81dc9bdb52d04dc20036dbd8313ed055', 1, '2020-06-06 04:30:04', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `teacherres`
--

CREATE TABLE `teacherres` (
  `Name` varchar(30) NOT NULL,
  `Branch` text NOT NULL,
  `Email_Address` text NOT NULL,
  `User_Name` varchar(20) NOT NULL,
  `Password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacherres`
--

INSERT INTO `teacherres` (`Name`, `Branch`, `Email_Address`, `User_Name`, `Password`) VALUES
('zxz', 'Computer', 'zxzx@gmail.com', 'teacher', 'Teacher');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addteacher`
--
ALTER TABLE `addteacher`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adminres`
--
ALTER TABLE `adminres`
  ADD PRIMARY KEY (`User_Name`);

--
-- Indexes for table `hodres`
--
ALTER TABLE `hodres`
  ADD PRIMARY KEY (`User_Name`);

--
-- Indexes for table `studentres`
--
ALTER TABLE `studentres`
  ADD PRIMARY KEY (`Enrollment_Id`),
  ADD UNIQUE KEY `Enrollment_Id` (`Enrollment_Id`);

--
-- Indexes for table `student_record`
--
ALTER TABLE `student_record`
  ADD PRIMARY KEY (`Enrollment_Id`),
  ADD UNIQUE KEY `02` (`Tc_No`);

--
-- Indexes for table `tblauthors`
--
ALTER TABLE `tblauthors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblbooks`
--
ALTER TABLE `tblbooks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblcategory`
--
ALTER TABLE `tblcategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblissuedbookdetails`
--
ALTER TABLE `tblissuedbookdetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblstudents`
--
ALTER TABLE `tblstudents`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `StudentId` (`StudentId`);

--
-- Indexes for table `teacherres`
--
ALTER TABLE `teacherres`
  ADD PRIMARY KEY (`User_Name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addteacher`
--
ALTER TABLE `addteacher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `student_record`
--
ALTER TABLE `student_record`
  MODIFY `Tc_No` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `tblauthors`
--
ALTER TABLE `tblauthors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tblbooks`
--
ALTER TABLE `tblbooks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tblcategory`
--
ALTER TABLE `tblcategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tblissuedbookdetails`
--
ALTER TABLE `tblissuedbookdetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tblstudents`
--
ALTER TABLE `tblstudents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
