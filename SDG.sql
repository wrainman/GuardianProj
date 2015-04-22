-- phpMyAdmin SQL Dump
-- version 3.4.11.1deb2+deb7u1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 21, 2015 at 07:58 PM
-- Server version: 5.5.40
-- PHP Version: 5.4.36-0+deb7u1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `SDG`
--

-- --------------------------------------------------------

--
-- Table structure for table `codes`
--

CREATE TABLE IF NOT EXISTS `codes` (
  `codes` varchar(25) NOT NULL,
  PRIMARY KEY (`codes`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `codes`
--

INSERT INTO `codes` (`codes`) VALUES
('1'),
('123logan456'),
('new1');

-- --------------------------------------------------------

--
-- Table structure for table `coursesplayed`
--

CREATE TABLE IF NOT EXISTS `coursesplayed` (
  `courseid` int(5) NOT NULL,
  `userid` int(5) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  KEY `userid` (`userid`),
  KEY `courseid` (`courseid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `coursesplayed`
--

INSERT INTO `coursesplayed` (`courseid`, `userid`, `timestamp`) VALUES
(7, 1, '2015-04-18 20:59:32'),
(0, 1, '2015-04-18 20:59:32'),
(0, 1, '2015-04-18 21:03:28'),
(0, 1, '2015-04-18 21:03:36'),
(1, 55, '2015-04-18 23:59:22'),
(0, 55, '2015-04-18 23:59:22'),
(2, 55, '2015-04-19 00:00:12'),
(0, 55, '2015-04-19 00:00:12'),
(3, 55, '2015-04-19 00:01:02'),
(0, 55, '2015-04-19 00:01:03'),
(4, 55, '2015-04-19 00:05:55'),
(0, 55, '2015-04-19 00:05:55'),
(0, 55, '2015-04-19 00:06:28'),
(5, 55, '2015-04-19 00:06:28'),
(0, 55, '2015-04-19 00:08:06'),
(0, 55, '2015-04-19 00:08:45'),
(0, 55, '2015-04-19 00:09:37'),
(0, 55, '2015-04-19 00:10:45'),
(0, 55, '2015-04-19 00:11:07'),
(0, 55, '2015-04-19 00:11:53'),
(0, 55, '2015-04-19 00:12:58'),
(0, 55, '2015-04-19 00:13:12'),
(0, 55, '2015-04-19 00:15:02'),
(6, 55, '2015-04-19 00:21:42'),
(0, 55, '2015-04-19 00:21:42'),
(7, 55, '2015-04-19 00:23:54'),
(0, 55, '2015-04-19 00:23:54'),
(8, 55, '2015-04-19 00:25:22'),
(0, 55, '2015-04-19 00:25:22'),
(9, 55, '2015-04-19 00:26:02'),
(0, 55, '2015-04-19 00:26:02'),
(18, 55, '2015-04-19 00:27:00'),
(0, 55, '2015-04-19 00:27:00'),
(10, 55, '2015-04-19 00:27:44'),
(0, 55, '2015-04-19 00:27:44'),
(11, 55, '2015-04-19 00:29:31'),
(0, 55, '2015-04-19 00:29:31'),
(12, 55, '2015-04-19 00:30:20'),
(0, 55, '2015-04-19 00:30:20'),
(13, 55, '2015-04-19 00:30:54'),
(0, 55, '2015-04-19 00:30:54'),
(14, 55, '2015-04-19 00:31:40'),
(0, 55, '2015-04-19 00:31:40'),
(15, 55, '2015-04-19 00:33:30'),
(0, 55, '2015-04-19 00:33:30'),
(17, 55, '2015-04-19 00:34:10'),
(0, 55, '2015-04-19 00:34:10'),
(16, 55, '2015-04-19 00:34:52'),
(0, 55, '2015-04-19 00:34:52'),
(0, 55, '2015-04-19 00:35:21'),
(0, 55, '2015-04-19 00:36:35'),
(0, 55, '2015-04-19 00:37:13'),
(0, 55, '2015-04-19 00:37:44'),
(12, 1, '2015-04-19 00:51:52'),
(0, 1, '2015-04-19 00:51:52'),
(1, 1, '2015-04-19 01:25:38'),
(0, 1, '2015-04-19 01:25:38'),
(2, 1, '2015-04-19 02:08:10'),
(0, 1, '2015-04-19 02:08:10'),
(0, 1, '2015-04-19 06:48:12'),
(15, 1, '2015-04-19 19:43:22'),
(0, 1, '2015-04-19 19:43:22'),
(0, 55, '2015-04-19 19:52:21');

-- --------------------------------------------------------

--
-- Table structure for table `golfcourses`
--

CREATE TABLE IF NOT EXISTS `golfcourses` (
  `courseId` int(5) NOT NULL AUTO_INCREMENT,
  `courseName` varchar(50) NOT NULL,
  `courseStipulations` varchar(200) NOT NULL,
  `courseLocation` varchar(50) NOT NULL,
  `courseWebsite` varchar(50) NOT NULL,
  `courseAddress` varchar(50) NOT NULL,
  `coursePhone` varchar(15) NOT NULL,
  PRIMARY KEY (`courseId`),
  KEY `courseName` (`courseName`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `golfcourses`
--

INSERT INTO `golfcourses` (`courseId`, `courseName`, `courseStipulations`, `courseLocation`, `courseWebsite`, `courseAddress`, `coursePhone`) VALUES
(1, 'Lee Park Golf Course', 'B: 18 holes with 25% discount', 'Aberdeen South Dakota', 'www.aberdeen.sd.us/leepark', '1028 8th Ave NW, Aberdeen, SD 57401', '(605) 626-7092'),
(2, 'Rolling Hills Golf Course', 'B: 9 holes free with 9 holes paid', 'Aberdeen South Dakota', '', '546 E Palmer Cir, Aberdeen, SD 57401', '(605) 226-4487'),
(3, 'Alcester Municipal Golf Club', 'A: Free 9 holes *Rental Golf Cart Required*', 'Alcester South Dakota', 'www.alcestergolfclub.com', '', '(605) 934-1839'),
(4, 'Lake Region Golf Club', 'B: 18 holes at 9 hole rate *No use with aft?', 'Arlington South Dakota', 'www.lakeregiongolfcourse.com', '', '(605) 983-5437'),
(5, 'Bridges at Beresford Golf Club', 'A: Free 9 holes *Rental Golf Cart Required*', 'Beresford South Dakota', 'www.beresfordbridges.com', '', '(605) 763-2202'),
(6, 'Bowdle Golf Club', 'B: 9 holes free with 9 holes paid', 'Bowdle South Dakota', '', '', '(605) 285-6500'),
(7, 'Brandon Golf Course', 'B: 18 holes at 9 hole rate *Valid M-F*', 'Brandon South Dakota', '', '', '(605) 582-7100'),
(8, 'Brittion County Club', 'A: Free 9 holes', 'Britton South Dakota', '', '', '(605) 448-2512'),
(9, 'Brookings Country Club', 'B: 18 holes at 9 hole rate *Must Rent Golf Cart* *No use Tuesday or Wednesday*', 'Brookings South Dakota', 'www.brookingscc.com', '', '(605) 693-4315'),
(10, 'Edgebrook Golf Course', 'B: 18 holes at 9 hole rate', 'Brookings South Dakota', '', '', '(605) 692-6995'),
(11, 'Buffalo Golf Course', 'A: Free 9 holes', 'Buffalo South Dakota', '', '', ''),
(12, 'Hiawatha Golf Course', 'B: 18 holes at 9 hole rate *Must Rent Golf Cart*\n*No use Wednesday after 4pm or Thursday after 3pm*', 'Canton South Dakota', 'www.hiawathagc.com', '', '(605) 987-2474'),
(13, 'CastleWood Golf Course', 'A: Free 9 holes', 'Castlewood South Dakota', 'www.castlewoodcity.com/golf.ht', '', '(605) 793-2510'),
(14, 'Chamberlain Country Club', 'B: 9 holes free with 9 holes paid', 'Chamberlain South Dakota', '', '', '(605) 734-4451'),
(15, 'Clark Golf Club', 'B: 18 holes at 50% off', 'Clark South Dakota', '', '', '(605) 532-5871'),
(16, 'Clear Lake Golf Club', 'B: 18 holes at 9 hole rate', 'Clear Lake South Dakota', '', '', '(605) 874-2641'),
(17, 'Sunrise Ridge Golf Course', 'A: Free 9 holes', 'Coleman South Dakota', '', '', '(605) 534-3121'),
(18, 'Lakeview Golf Course', 'A: Free 9 holes', 'Corsica South Dakota', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `piv`
--

CREATE TABLE IF NOT EXISTS `piv` (
  `userId` int(11) NOT NULL,
  `courseId` int(11) NOT NULL,
  PRIMARY KEY (`userId`,`courseId`),
  KEY `courseId` (`courseId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `piv2`
--

CREATE TABLE IF NOT EXISTS `piv2` (
  `courseId` int(5) NOT NULL,
  `userid` int(5) NOT NULL,
  PRIMARY KEY (`courseId`,`userid`),
  KEY `userid` (`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `userid` int(20) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(25) CHARACTER SET utf8 NOT NULL,
  `last_name` varchar(25) CHARACTER SET utf8 NOT NULL,
  `birthdate` date NOT NULL,
  `email_address` varchar(50) CHARACTER SET utf8 NOT NULL,
  `username` varchar(15) CHARACTER SET utf8 NOT NULL,
  `password` varchar(500) CHARACTER SET utf8 NOT NULL,
  `code` varchar(50) CHARACTER SET utf8 NOT NULL,
  `last_loggedin` varchar(100) CHARACTER SET utf8 NOT NULL DEFAULT 'never',
  `user_level` enum('1','2','3','4','5') CHARACTER SET utf8 NOT NULL DEFAULT '1',
  `forgot` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `status` enum('live','suspended','pending') CHARACTER SET utf8 NOT NULL DEFAULT 'live',
  `zipcode` int(8) NOT NULL,
  `city` varchar(25) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT COMMENT='Membership Information' AUTO_INCREMENT=59 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `first_name`, `last_name`, `birthdate`, `email_address`, `username`, `password`, `code`, `last_loggedin`, `user_level`, `forgot`, `status`, `zipcode`, `city`) VALUES
(1, 'Administrative', 'Administrative', '0000-00-00', 'lvwray@pluto.dsu.edug', 'Administrative', 'dc76e9f0c0006e8f919e0c515c66dbba3982f785', '', '19/04/15 15:43:01', '5', NULL, 'live', 0, ''),
(54, 'joee', 'scmoh', '1991-11-26', 'bsawsdf@hotmail.com', 'root', '435b41068e8665513a20070c033b08b9c66e4332', '', '21/04/15 19:56:48', '1', NULL, 'live', 232, ''),
(55, 'Aaron', 'Swartz', '1995-06-25', 'asdfasd@mit.edu', 'as', 'dc76e9f0c0006e8f919e0c515c66dbba3982f785', 'password', '19/04/15 15:54:23', '4', NULL, 'live', 23232, 'Madison'),
(58, 'justin', 'bieber', '2000-06-18', 'jb@gmail.com', 'jb123', 'dc76e9f0c0006e8f919e0c515c66dbba3982f785', 'new1', 'never', '4', NULL, 'live', 130, '');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `piv`
--
ALTER TABLE `piv`
  ADD CONSTRAINT `piv_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `users` (`userid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `piv_ibfk_2` FOREIGN KEY (`courseId`) REFERENCES `golfcourses` (`courseId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `piv2`
--
ALTER TABLE `piv2`
  ADD CONSTRAINT `piv2_ibfk_1` FOREIGN KEY (`courseId`) REFERENCES `coursesplayed` (`courseid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `piv2_ibfk_2` FOREIGN KEY (`userid`) REFERENCES `users` (`userid`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
