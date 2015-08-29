-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 29, 2015 at 11:37 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `loan`
--

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE IF NOT EXISTS `application` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `studentID` varchar(50) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `valid` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `application`
--

INSERT INTO `application` (`id`, `studentID`, `image`, `created`, `valid`) VALUES
(1, '1', 'Image (23).jpg', '2015-08-11 00:00:00', 'True'),
(2, '1', 'recommendation.jpg', '2015-08-03 19:35:28', 'True'),
(3, '2', 'IMG_15072015_105258.png', '2015-08-10 07:39:21', 'False'),
(4, '2', 'universal.jpg', '2015-08-10 07:40:02', 'False'),
(5, '2', 'Universal_Numbering_System.jpg', '2015-08-10 07:40:04', 'False'),
(6, '7', 'NGRA0001.GIF', '2015-08-26 12:25:57', 'True'),
(7, '7', 'UGAN0001.GIF', '2015-08-27 09:03:36', 'False'),
(8, '7', 'IMG_15072015_105258.png', '2015-08-27 09:03:51', 'True'),
(9, '7', '308375_2459913737260_1134567992_n.jpg', '2015-08-27 09:04:28', 'True'),
(10, '7', 'Universal_Numbering_System.jpg', '2015-08-27 09:04:50', 'False');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE IF NOT EXISTS `course` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `studentID` varchar(100) NOT NULL,
  `university` text NOT NULL,
  `stdNo` varchar(100) NOT NULL,
  `course` text NOT NULL,
  `duration` double NOT NULL,
  `fees` double NOT NULL,
  `disabled` text NOT NULL,
  `approved` text,
  `yearstudy` varchar(50) DEFAULT NULL,
  `yearadmitted` varchar(50) NOT NULL,
  `created` datetime DEFAULT NULL,
  `functional` varchar(50) DEFAULT NULL,
  `research` varchar(50) DEFAULT NULL,
  `aid` varchar(50) DEFAULT NULL,
  `total` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `studentID`, `university`, `stdNo`, `course`, `duration`, `fees`, `disabled`, `approved`, `yearstudy`, `yearadmitted`, `created`, `functional`, `research`, `aid`, `total`) VALUES
(1, '1', 'Makerere university', 'UG-BSC-uG/eve', 'Mathematics', 4, 1400000, 'No', 'Yes', NULL, '', '0000-00-00 00:00:00', '', '', '', ''),
(2, '7', 'Makerere university', 'UG-ST-897987/EVE', 'Political Science', 3, 1300000, 'No', 'Yes', NULL, '', '0000-00-00 00:00:00', '', '', '', ''),
(3, '8', 'MUBS', 'UG-EVE-BSC-YOU', 'Mathematics', 4, 1000000, '', 'No', '2015', '2009', '2015-08-27 08:55:59', '300000', '200000', '100000', '4000000');

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE IF NOT EXISTS `education` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `studentID` int(11) NOT NULL,
  `instituteName` text,
  `index` varchar(50) DEFAULT NULL,
  `gpa` varchar(50) DEFAULT NULL,
  `fees` varchar(50) DEFAULT NULL,
  `approved` text,
  `yearcomplete` varchar(50) DEFAULT NULL,
  `sponsor` text NOT NULL,
  `relationship` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`id`, `studentID`, `instituteName`, `index`, `gpa`, `fees`, `approved`, `yearcomplete`, `sponsor`, `relationship`) VALUES
(1, 8, 'Mubs', '0098/ug', '2', '1000000', 'No', '2008', 'Dad', 'Father'),
(2, 8, 'Mubs', '0098/ug', '2', '1000000', 'No', '2008', 'Dad', 'Father'),
(3, 8, 'Mubs', '0098/ug', '2', '1000000', 'No', '2008', 'Dad', 'Father');

-- --------------------------------------------------------

--
-- Table structure for table `guarantee`
--

CREATE TABLE IF NOT EXISTS `guarantee` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `studentID` int(11) NOT NULL,
  `name` text NOT NULL,
  `profession` text NOT NULL,
  `contact` varchar(50) NOT NULL,
  `occupation` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `guarantee`
--

INSERT INTO `guarantee` (`id`, `studentID`, `name`, `profession`, `contact`, `occupation`) VALUES
(1, 8, 'Moses', '', '07200400500', 'Lawyer'),
(2, 8, 'Moses', '', '07200400500', 'Lawyer');

-- --------------------------------------------------------

--
-- Table structure for table `refund`
--

CREATE TABLE IF NOT EXISTS `refund` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `proof` varchar(255) NOT NULL,
  `studentID` varchar(50) NOT NULL,
  `dor` date NOT NULL,
  `method` text NOT NULL,
  `amount` varchar(50) NOT NULL,
  `comment` text NOT NULL,
  `created` datetime NOT NULL,
  `active` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `refund`
--

INSERT INTO `refund` (`id`, `proof`, `studentID`, `dor`, `method`, `amount`, `comment`, `created`, `active`) VALUES
(1, 'aecf_logo1.jpg', '1', '2015-08-12', 'Cheque', '1200000', 'My first cheque', '2015-08-12 00:00:00', 'False'),
(2, 'acumen.jpg', '2', '2015-08-12', 'Cash', '300000', 'Another cheque', '2015-08-12 07:37:36', 'True'),
(3, 'acumen1.jpg', '2', '2015-08-12', 'Cash', '300000', 'Another cheque', '2015-08-12 07:38:21', 'False');

-- --------------------------------------------------------

--
-- Table structure for table `remittance`
--

CREATE TABLE IF NOT EXISTS `remittance` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `proof` varchar(255) NOT NULL,
  `studentID` varchar(20) NOT NULL,
  `dor` date NOT NULL,
  `method` text NOT NULL,
  `amount` varchar(100) NOT NULL,
  `comment` text NOT NULL,
  `created` datetime NOT NULL,
  `user` varchar(20) NOT NULL,
  `active` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `remittance`
--

INSERT INTO `remittance` (`id`, `proof`, `studentID`, `dor`, `method`, `amount`, `comment`, `created`, `user`, `active`) VALUES
(1, 'Invoice2.jpeg', '2', '2015-08-10', 'TT', '1500000', 'all paid out', '2015-08-08 00:00:00', 'Dennis Ogwang', 'False'),
(2, 'Uganda-Map.jpg', '1', '2015-08-12', 'Cash', '1400000', 'Mobile money to the loanee', '2015-08-12 00:00:00', 'Dennis Ogwang', 'False'),
(3, 'dashboard.1.1_(1).gif', '2', '0000-00-00', 'Cheque', '1900000', 'for  this month upkeep', '2015-08-27 00:00:00', 'Dennis Ogwang', 'True');

-- --------------------------------------------------------

--
-- Table structure for table `sibling`
--

CREATE TABLE IF NOT EXISTS `sibling` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `studentID` int(11) NOT NULL,
  `sibType` text NOT NULL,
  `sibName` text NOT NULL,
  `sibSchool` text NOT NULL,
  `sibStudy` text NOT NULL,
  `sibFees` varchar(50) NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `sibling`
--

INSERT INTO `sibling` (`id`, `studentID`, `sibType`, `sibName`, `sibSchool`, `sibStudy`, `sibFees`, `created`) VALUES
(1, 8, 'Dependant', 'Omondi James', 'Savio', 'P3', '1020000', '2015-08-27 00:00:00'),
(2, 8, 'Dependant', 'Omondi James', 'Savio', 'P3', '1020000', '2015-08-27 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `oname` text NOT NULL,
  `gender` text NOT NULL,
  `contact` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `social` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `image` varchar(255) NOT NULL,
  `IDtype` text,
  `IDnumber` int(11) DEFAULT NULL,
  `GuaranteeName` text,
  `GuaranteeContact` varchar(100) DEFAULT NULL,
  `GuaranteeName2` text,
  `GuaranteeContact2` varchar(100) DEFAULT NULL,
  `residence` text,
  `country` text,
  `physical` text,
  `region` text,
  `city` text,
  `comment` text,
  `valid` text,
  `approved` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `fname`, `lname`, `oname`, `gender`, `contact`, `email`, `social`, `password`, `created`, `image`, `IDtype`, `IDnumber`, `GuaranteeName`, `GuaranteeContact`, `GuaranteeName2`, `GuaranteeContact2`, `residence`, `country`, `physical`, `region`, `city`, `comment`, `valid`, `approved`) VALUES
(1, 'Bashir ', 'Twesigye', 'Cred', 'Male', '078339012', 'bashir@cred.co.ug', 'www.facebook.com/twesigye', 'YhitJxfVTXr9qv6Ik9OmDy0WSblIRADCCkfHUHHmiAVoTkEBA0qxxybFbVmbW7/Ke24w/0887FgkpusSuVPUZA==', '2015-08-02 21:51:46', 'bashirimg.jpg', 'Driving permit', 89234422, 'Rubona', '0712902345', 'Aziz', '0412902387', 'Kamwokya, Kampala, Central Region, Uganda', 'Uganda', 'Kanjokya House', 'Central Region', 'Kampala', 'All validated', 'True', 'Yes'),
(2, 'Richard', 'Magezi', '', 'Male', '0753388221', 'weredouglas@gmail.com', 'www.facebook.com/richard', 'vcv5aEtrNWrHMO4vrtod5byPEJewacVRLozJlsW8eRoJcBXo8atHmF4DyV1IKWRaGUOhHb0kuBRAwpn317DLcg==', '2015-08-10 07:38:38', '24.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'your are pending', 'True', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `studentinfo`
--

CREATE TABLE IF NOT EXISTS `studentinfo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `gender` text NOT NULL,
  `contact` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `age` int(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `personal` text,
  `created` datetime NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `comment` text NOT NULL,
  `valid` text NOT NULL,
  `approved` text NOT NULL,
  `resident` text,
  `education` text,
  `institution` text,
  `loan` text,
  `parent` text,
  `history` text,
  `sibling` text,
  `economic` text,
  `check` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `studentinfo`
--

INSERT INTO `studentinfo` (`id`, `name`, `gender`, `contact`, `email`, `age`, `password`, `personal`, `created`, `image`, `comment`, `valid`, `approved`, `resident`, `education`, `institution`, `loan`, `parent`, `history`, `sibling`, `economic`, `check`) VALUES
(6, 'James Okello', 'Female', '0789234455', 'Info@loan.com', 56, 'Lm00ltlBCTCXvZ792xm/d+jsRdIPZGPvmCVjQPuOpK7oz5GPi0C8cu+la4Kag7/G4BqWaajKaA6t0MAlXzNWhA==', '{"first name":"James","Last name":"Okello","other name":"","gender":"Female","age":"56","pobox":"112 kampala","district":"Bukedi","county":"Malaba","parish":"Mulilo","village":"Komi","town":"Gatraud","married":"Single","contact":"0789234455","email":"Info@loan.com","social":"www.facebook.com\\/mary","twitter":"twittere\\/mary","whatsapp":"078923445","password":"123456","password2":"123456"}', '2015-08-25 17:16:42', '', '', '', 'none', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(7, 'Moses John Bosco', 'Male', '07891233234', 'moses@loan.com', 26, 'd835Jwg+n9nO+d8EYRooejGcqzevPGFtIonVi63ilvXod7mGVDPxJwtwp10gLk4uKEZjLG7fUtrNbWtoEOFl7Q==', '{"first name":"Moses","last name":"John Bosco","other name":"Muli","gender":"Male","age":"26","pobox":"","district":"Kalangala","county":"Muko","parish":"","village":"","town":"","married":"Single","contact":"07891233234","email":"moses@loan.com","social":"","twitter":"","whatsapp":"","password":"123456","password2":"123456"}', '2015-08-26 08:57:49', '24.jpg', '', '', 'none', '{"district":"Busia","subcountry":"","parish":"","village":"","street":"","plot":"","autocomplete":"","IDtype":"Passport","IDnumber":"","ContactName":"","ContactNo":"","KinName":"","KinContact":"","KinRelationship":"","physical":""}', NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(8, 'Omondi Paul', 'Male', '07200400500', 'info@aws.com', 34, 'pN0HFuhDPCZukrt1OGyCHtagT153LHicS0MSkldQ8bKVxDDVaEwGB1Kjt9YKwB/ui+JJxH+KPMPhLO6NImXkow==', '{"fname":"Omondi","lname":"Paul","oname":"","gender":"Male","age":"34","pobox":"","district":"Kampala","county":"","parish":"","village":"Kisaasi","town":"Malaba","married":"Single","contact":"07200400500","email":"info@aws.com","social":"","twitter":"","whatsapp":"","password":"123456","password2":"123456"}', '2015-08-27 09:05:21', '', '', '', 'none', '{"KinName":"Douglas","KinContact":"0782300900","KinRelationship":"Cousin","ContactName":"John Lubeges","ContactNo":"00712334887","IDtype":"Driving permit","IDnumber":"UG-00908-EVER"}', NULL, NULL, NULL, '{"parent":"Mother","surname":"Dennis","firstname":"John","dob":"","email":"Info@loan.com","district":"Kalangala","subcounty":"","town":"","parish":"","village":"","profession":"","education":"","contact":"","income":"","residential":"","state":"Deceased","districtorigin":"","countyorigin":""}', NULL, NULL, '{"children":"2","mothers":"2","stay":"2","stayingparent":"Father","familyresidence":"Rented","housetype":"Permanent","rooms":"3","monthly":"2","expenses":"Rent","cost":"3000000","medical":"Government health Facility","transportmeans":"Private","reasons":"Develoment","educationhistory":"Development"}', '{"nationalID":"on","admission":"on","fees":"on","parentID":"on","certificate":"on","slips":"on","declarations":"on","agreements":"on"}'),
(9, 'Mary  Lokeke', 'Female', '', 'info@awss.com', 0, 'qzWsj0AsXlWsEU936Jq+sBZDgnB/YivKOAwLxBoA6kbisSNpjOS2n4m4npn7Lyw5wJX/FYF3RJsapJ1N3OqoqA==', '{"fname":"Mary ","lname":"Lokeke","oname":"","gender":"Female","age":"","pobox":"","district":"","county":"","parish":"","village":"","town":"","married":"Single","contact":"","email":"info@awss.com","social":"","twitter":"","whatsapp":"","password":"123456","password2":"123456"}', '2015-08-28 19:39:21', '', '', '', 'none', '{"KinName":"james","KinContact":"Onen","KinRelationship":"Dad","ContactName":"were","ContactNo":"0412334345","IDtype":"Passport","IDnumber":"4543543-UG"}', NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(10, 'Mary  Lokeke', 'Female', '', 'info@awssa.com', 0, 'hWGMPze+cFU5j7r3768wXLMRgcKYZ2E+FVWc3jp/tIy4UN0KEq0fQk78p0D8PnM+wiZUfieD6Uv83fXmPbIWFw==', '{"fname":"Mary ","lname":"Lokeke","oname":"","gender":"Female","age":"","pobox":"","district":"","county":"","parish":"","village":"","town":"","married":"Single","contact":"","email":"info@awssa.com","social":"","twitter":"","whatsapp":"","password":"123456","password2":"123456"}', '2015-08-28 19:44:35', '', '', '', 'none', '{"KinName":"james","KinContact":"Onen","KinRelationship":"Dad","ContactName":"were","ContactNo":"0412334345","IDtype":"Passport","IDnumber":"4543543-UG"}', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `university`
--

CREATE TABLE IF NOT EXISTS `university` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `location` text NOT NULL,
  `detail` text NOT NULL,
  `type` text NOT NULL,
  `created` datetime NOT NULL,
  `logo` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `university`
--

INSERT INTO `university` (`id`, `name`, `location`, `detail`, `type`, `created`, `logo`) VALUES
(1, 'Makerere University', 'Kampala', 'Makerere University Kampala is Uganda''s largest and third-oldest institution of higher learning, first established as a technical school in 1922, and is now part of Uganda Christian University<br>', 'Government aided', '2015-07-31 18:41:20', 'muk.jpg'),
(2, 'Kyambogo University', 'Kampala Banda', 'Kyambogo University, is a public university in Uganda. It is one of the eight public universities and degree-awarding institutions in the country<br>', 'Government aided', '2015-07-31 18:45:55', 'kyambogo.jpg'),
(3, 'Kampala International University', 'Kampala Kabalagala', 'Kampala International University ] is a private multi-campus university in Uganda, the third-largest economy in the East African Community.<br>', 'Private', '2015-07-31 18:47:40', 'Kiu.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `name` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `created`, `name`) VALUES
(1, 'weredouglas@gmail.com', 'jWxEAAXxHlGMBkg+gsmbVn/BQgUlaR2290OaSmR09dl0u0iX4HOCm5vd8Oyezo5IRdksDaGsx1oIOhLH2TpgqQ==', '2015-08-10 13:14:43', 'Mahende Paul'),
(2, 'robert@mak.ac.ug', 'w4DwtxuyyncgOzQGVsG6T0rNzboBDDeLtA2+rLg6DKLnzyNF5dhmIHTKwvebLGYgWWNH6tB84WHAPRei6orK2w==', '2015-08-10 19:29:37', 'Robert');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
