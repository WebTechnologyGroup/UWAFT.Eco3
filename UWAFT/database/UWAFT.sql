-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2014-12-12 19:24:48
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
-- 表的结构 `communications`
--

CREATE TABLE IF NOT EXISTS `communications` (
`id` int(11) NOT NULL,
  `firstName` text NOT NULL,
  `lastName` text NOT NULL,
  `position` text NOT NULL,
  `program` text NOT NULL,
  `growup` text NOT NULL,
  `favEco` text NOT NULL,
  `cereal` text NOT NULL,
  `bucket` text NOT NULL,
  `facts` text NOT NULL,
  `profileImage` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `communications`
--

INSERT INTO `communications` (`id`, `firstName`, `lastName`, `position`, `program`, `growup`, `favEco`, `cereal`, `bucket`, `facts`, `profileImage`) VALUES
(1, 'Yvonne', 'Jin', 'Business Events Lead', 'Business Administration with a concentration in Marketing and Brand Communications', 'Mermaid or a Baker', 'The ability to learn about the technical side and how much support the business and technical side had for one another to make a successful team', 'Cinnamon Toast Crunch', 'â€¢ Visit the 7 Wonders of the world\r\nâ€¢ Visit Love padlocks on Pont des Arts, Paris\r\nâ€¢ Visit The Maritimes', 'Love to be involved in philanthropy projects and very family oriented', 'images/Yvonne.jpg'),
(2, 'Anton', 'Kabanov', 'Strategy and Marketing', 'Mechanical Engineering 4A', 'A Car Designer', 'The potential for innovation', 'Sausage with Eggs', 'Drive an F1, have a drink with Jeremy Clarkson, skydiving with a wing suit in Norway.', 'If I set a goal, I never give up on it. Get bored really easily â€“ need to keep myself active.', 'images/Anton.jpg'),
(3, 'Marla', 'Baker', 'Media Lead', 'Honours Bachelor of Business Administration', 'A stand-up comedian', 'Spreading the word of the importance of renewable energy', 'Kelloggâ€™s Rice Krispies! SNAP, CRACKLE, POP!', '-Travel Greece\r\n-Star in a viral video\r\n-Contribute to making the world a more environmentally friendly place', '-I love hockey\r\n-I love cats', 'images/Marla.jpg');

-- --------------------------------------------------------

--
-- 表的结构 `projectmanagement`
--

CREATE TABLE IF NOT EXISTS `projectmanagement` (
`id` int(11) NOT NULL,
  `firstName` text NOT NULL,
  `lastName` text NOT NULL,
  `position` text NOT NULL,
  `program` text NOT NULL,
  `growup` text NOT NULL,
  `favEco` text NOT NULL,
  `cereal` text NOT NULL,
  `bucket` text NOT NULL,
  `facts` text NOT NULL,
  `profileImage` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- 转存表中的数据 `projectmanagement`
--

INSERT INTO `projectmanagement` (`id`, `firstName`, `lastName`, `position`, `program`, `growup`, `favEco`, `cereal`, `bucket`, `facts`, `profileImage`) VALUES
(7, 'Daniel', 'van Lanen', 'Project Manager', 'Chemical Engineering', 'Too many different things', 'Random lunch breaks', 'Bulletproof Coffee', 'Visit all 7 continents, Be fluent in 6 languages, Do a bike tour of Europe.', 'Wish I could be barefoot all the time, Have 6 siblings', 'images/Daniel.JPG'),
(8, 'Brian', 'Xu', 'Development Officer', 'Master of Business Administration', 'Be an inventor', 'Opportunity to learn new skills and immediately apply them, whilst receiving continuous feedback.', 'Coffee + Dunkinâ€™ Donuts', 'Skydiving in Dubai, Macchiato in Italy, Attempt to max a Bugatti Veyron on the Autobahn', 'I have a passion for photography and a love for exotic cars.', 'images/Brian.JPG'),
(9, 'Oluwabukola', 'Oluwatobi Fasubaa', 'Human Resources Lead', 'Economics', 'a Banker', 'Being in the bay with the technical team.', 'Special K Almond and Vanilla', 'To travel the world, write a book and start a charity organization.', 'Iâ€™m Nigerian and I love leopard print.\r\nme in a small percentage of the world population. Significantly boosts my ego!', 'images/IMG_6958.JPG'),
(10, 'SALMAN', 'RANA', 'INTEGRATION LEAD', 'HONOURS ECONOMICS AND FINANCIAL MANAGEMENT', 'Supermanâ€™s Sidekick', 'University backed start-up working with leaders in automotive industry.  Despite all this, having autonomy to do what we think will win us the competition', 'Coco-Puffs (I think they only have Nesquik in North America)', 'Live on a Boat for a summer, Learn Mandarin, Name a Street or Town', 'Known to be able to grow pretty bad ass moustaches, Left handed and an identical twin, which puts', 'images/profile8.jpg');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- 转存表中的数据 `PublicEvent`
--

INSERT INTO `PublicEvent` (`PublicEventID`, `Title`, `Message`, `Date`, `Time`) VALUES
(2, 'Sarah Young accepted your friend request', NULL, '2014-11-26', '07:00:00'),
(3, 'Jay White commented on your post', 'Take me to your leader! Switzerland is small and neutral! We are more like Germany, ambitious and misunderstood!', '2014-11-25', '00:17:13'),
(4, 'Mina Lee uploaded new photos', NULL, '2014-11-27', '14:15:23'),
(6, 'test', 'test\r\ntest\r\ntest\r\ntest', '2014-11-26', '00:00:00'),
(7, 'hello world', 'hello everybody', '2014-11-25', '11:16:00'),
(9, 'wow', 'wowowowowowow', '2014-11-23', '00:22:00'),
(10, 'sdf', '1  222', '1234-12-12', '12:12:12');

-- --------------------------------------------------------

--
-- 表的结构 `TeamSchedule`
--

CREATE TABLE IF NOT EXISTS `TeamSchedule` (
`TeamScheduleID` int(10) unsigned NOT NULL,
  `Title` varchar(50) NOT NULL,
  `StartDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `EndDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `AllDay` tinyint(1) DEFAULT NULL,
  `url` text,
  `Color` varchar(10) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- 转存表中的数据 `TeamSchedule`
--

INSERT INTO `TeamSchedule` (`TeamScheduleID`, `Title`, `StartDate`, `EndDate`, `AllDay`, `url`, `Color`) VALUES
(1, 'All Day Event', '2014-12-07 17:41:02', '2014-12-08 00:00:00', 0, NULL, '#f56954'),
(2, 'Long Event', '2014-12-07 19:00:00', '2014-12-11 20:00:00', NULL, NULL, '#f39c12'),
(3, 'Meeting', '2014-12-11 10:30:00', '2014-12-11 12:00:00', NULL, NULL, '#0073b7'),
(5, 'Click for Google', '2014-12-14 00:00:00', '2014-12-14 20:00:00', 1, 'http://google.com/', '#3c8dbc'),
(18, 'tt', '2014-12-19 12:00:00', '2014-12-21 19:00:00', 0, NULL, '#F39C12');

-- --------------------------------------------------------

--
-- 表的结构 `technical`
--

CREATE TABLE IF NOT EXISTS `technical` (
`id` int(11) NOT NULL,
  `firstName` text NOT NULL,
  `lastName` text NOT NULL,
  `position` text NOT NULL,
  `program` text NOT NULL,
  `growup` text NOT NULL,
  `favEco` text NOT NULL,
  `cereal` text NOT NULL,
  `bucket` text NOT NULL,
  `facts` text NOT NULL,
  `profileImage` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `technical`
--

INSERT INTO `technical` (`id`, `firstName`, `lastName`, `position`, `program`, `growup`, `favEco`, `cereal`, `bucket`, `facts`, `profileImage`) VALUES
(1, 'Ben', 'Gaffney', 'Engineering Manager', 'Masterâ€™s of Applied Science, Mechanical Engineering', 'A firefighter', 'Being able to work with the entire vehicle and seeing a design go from initial conceptual ideas to something that is fabricated, tested, and installed in the car.', 'Vector', '1) Travel the Vietnamese coast by motorcycle\r\n2) Cross the country by car\r\n3) Win EcoCAR', '1) Car nut\r\n2) Eager for new challenges and experiences', 'images/Ben.JPG'),
(2, 'Thomas', 'Abdallah', 'Innovations Team Lead', 'Electronics Systems Engineering', 'Race car driver', 'Getting something to work for the first time after countless 4AM+ nights.', 'Coffee', 'Work on a World Championship winning Formula 1 team, see every continent, step foot in every ocean.', 'Borderline obsessive Automotive & Motorsport enthusiast, world class grilled cheese maker.', 'images/thomasabdallah.JPG'),
(3, 'Brandon', 'Walton', 'Controls Team Lead', 'Honours Physics', 'A Scientist or Architect', 'Getting the vehicle to move under its own power after months of planning, modeling, simulation, integration and tears', 'Reese''s Puffs', '1. Design and build my own house 2. Contribute something novel to the field of physics 3. Author a book on something', 'I enjoy solving problems 2. I hold the UWAFT record for “Largest Coffee Cup Pyramid”', 'images/brandonwalton.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `communications`
--
ALTER TABLE `communications`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projectmanagement`
--
ALTER TABLE `projectmanagement`
 ADD PRIMARY KEY (`id`);

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
-- Indexes for table `technical`
--
ALTER TABLE `technical`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `communications`
--
ALTER TABLE `communications`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `projectmanagement`
--
ALTER TABLE `projectmanagement`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `PublicEvent`
--
ALTER TABLE `PublicEvent`
MODIFY `PublicEventID` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `TeamSchedule`
--
ALTER TABLE `TeamSchedule`
MODIFY `TeamScheduleID` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `technical`
--
ALTER TABLE `technical`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
