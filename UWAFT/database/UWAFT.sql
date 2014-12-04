-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2014-11-28 17:35:39
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
-- 创建时间： 2014-11-28 04:27:20
--

DROP TABLE IF EXISTS `PublicEvent`;
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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `PublicEvent`
--
ALTER TABLE `PublicEvent`
 ADD PRIMARY KEY (`PublicEventID`), ADD KEY `Date` (`Date`,`Time`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `PublicEvent`
--
ALTER TABLE `PublicEvent`
MODIFY `PublicEventID` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
