-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2014-12-08 06:01:48
-- 服务器版本： 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `UWAFT`
--
CREATE DATABASE IF NOT EXISTS `UWAFT` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `UWAFT`;

-- --------------------------------------------------------

--
-- 表的结构 `PublicEvent`
--

CREATE TABLE IF NOT EXISTS `PublicEvent` (
`PublicEventID` int(10) unsigned NOT NULL,
  `Title` varchar(50) NOT NULL,
  `Message` text,
  `Date` date NOT NULL,
  `Time` time NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- 转存表中的数据 `PublicEvent`
--

INSERT INTO `PublicEvent` (`PublicEventID`, `Title`, `Message`, `Date`, `Time`) VALUES
(1, 'Support Team sent you and email', 'Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles, weebly ning heekya handango imeem plugg dopplr jibjab, movity jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle quora plaxo ideeli hulu weebly balihoo...\r\n\r\n\\nDDSF\r\n\\r\r\nSDF\r\n\r\nSDF\r\nSF', '2014-11-27', '04:16:25'),
(2, 'Sarah Young accepted your friend request', NULL, '2014-11-26', '07:00:00'),
(3, 'Jay White commented on your post', 'Take me to your leader! Switzerland is small and neutral! We are more like Germany, ambitious and misunderstood!', '2014-11-25', '00:17:13'),
(4, 'Mina Lee uploaded new photos', NULL, '2014-11-27', '14:15:23'),
(6, 'test', 'test\r\ntest\r\ntest\r\ntest', '2014-11-26', '00:00:00'),
(7, 'hello world', 'hello everybody', '2014-11-25', '11:16:00'),
(9, 'wow', 'wowowowowowow', '2014-11-23', '00:22:00');

-- --------------------------------------------------------

--
-- 表的结构 `TeamSchedule`
--

CREATE TABLE IF NOT EXISTS `TeamSchedule` (
`TeamScheduleID` int(10) unsigned NOT NULL,
  `Title` varchar(50) NOT NULL,
  `StartDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `EndDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `AllDate` tinyint(1) DEFAULT NULL,
  `url` text,
  `Color` varchar(10) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `TeamSchedule`
--

INSERT INTO `TeamSchedule` (`TeamScheduleID`, `Title`, `StartDate`, `EndDate`, `AllDate`, `url`, `Color`) VALUES
(1, 'All Day Event', '2014-12-07 17:41:02', '2014-12-08 00:00:00', 0, NULL, '#f56954'),
(2, 'Long Event', '2014-12-07 19:00:00', '2014-12-11 20:00:00', NULL, NULL, '#f39c12'),
(3, 'Meeting', '2014-12-11 10:30:00', '2014-12-11 12:00:00', NULL, NULL, '#0073b7'),
(5, 'Click for Google', '2014-12-14 00:00:00', '2014-12-14 20:00:00', 1, 'http://google.com/', '#3c8dbc');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `PublicEvent`
--
ALTER TABLE `PublicEvent`
 ADD PRIMARY KEY (`PublicEventID`), ADD KEY `Date` (`Date`,`Time`), ADD KEY `Date_2` (`Date`,`Time`);

--
-- Indexes for table `TeamSchedule`
--
ALTER TABLE `TeamSchedule`
 ADD PRIMARY KEY (`TeamScheduleID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `PublicEvent`
--
ALTER TABLE `PublicEvent`
MODIFY `PublicEventID` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `TeamSchedule`
--
ALTER TABLE `TeamSchedule`
MODIFY `TeamScheduleID` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
