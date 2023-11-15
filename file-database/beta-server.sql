-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2023 at 06:58 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `beta-server`
--

-- --------------------------------------------------------

--
-- Table structure for table `diary`
--

CREATE TABLE `diary` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `story` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `diary`
--

INSERT INTO `diary` (`id`, `date`, `story`) VALUES
(1, '2022-05-21', 'Go to Bangkok for working'),
(2, '2022-10-22', 'Thailand Game Show 2022 Day 2'),
(3, '2022-10-23', 'Thailand Game Show 2022 Day 3'),
(4, '2023-03-14', 'Return To Home'),
(6, '2022-05-21', 'First Date Poktokki Eating'),
(7, '2022-06-27', 'Go First Work Developer'),
(8, '2022-06-11', 'First Seminar in Bangkok'),
(9, '2022-05-28', 'First Steak eating'),
(10, '2022-06-12', 'First Cheki Idol pic');

-- --------------------------------------------------------

--
-- Table structure for table `gamelist`
--

CREATE TABLE `gamelist` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `gen_id` int(11) NOT NULL,
  `year` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gamelist`
--

INSERT INTO `gamelist` (`id`, `name`, `gen_id`, `year`) VALUES
(1, 'DUNE 2000', 2, '1998'),
(2, 'Command & Conquer 3 : Tiberian Wars', 4, '2007'),
(3, 'Renegade X', 4, '2014'),
(4, 'Need For Speed Most Wanted(2005)', 3, '2005'),
(5, 'Need For Speed Undercover', 4, '2008'),
(6, 'Mirrors Edge : Catalyst', 5, '2016'),
(7, 'HONKAI IMPACT 3RD(PC & Mobile)', 6, '2017'),
(8, 'PANGYA Mobile(Stopped Support)(Mobile)', 6, '2018'),
(9, 'Among Us(PC & Mobile)', 6, '2018'),
(10, 'Arknights(Mobile)', 6, '2019'),
(11, 'Date A Live : Spirit Pledge', 6, '2020'),
(12, 'Dragon Raja(Mobile)', 6, '2019'),
(13, 'Goddess Of Genesis(Closed ON SEA Server)(Mobile)', 6, '2020'),
(14, 'Fallout 3', 5, '2008'),
(15, 'Fallout 4', 5, '2015'),
(16, 'Fallout Shelter', 5, '2016'),
(17, 'HACKNET(PC)', 6, '2015'),
(18, 'Command & Conquer : Tiberian Sun & Firestorm', 1, '2000'),
(19, 'The Sims 1', 2, '2000'),
(20, 'Command & Conquer : Red Alert 2 & Yuri\'s Revenge', 2, '2000'),
(21, 'Tales Runner(First Game Online for myself)', 2, '2005'),
(22, 'Command & Conquer : Renegade', 3, '2002'),
(23, 'Angry Birds', 3, '2009'),
(24, 'Command & Conquer : Red Alert 1', 3, '1996'),
(25, 'Command & Conquer', 3, '1995'),
(26, 'Resident Evil 6', 4, '2012'),
(27, 'LINE let\'s get rich(Mobile)', 4, '2014'),
(28, 'Need For Speed Carbon', 4, '2006'),
(29, 'The Sims 2', 5, '2004'),
(30, 'Need For Speed Shift', 4, '2009'),
(31, 'Mirrors Edge', 4, '2009'),
(32, 'SimCity 4', 4, '2003'),
(33, 'PUBG LITE(Stopped Support)(PC)', 6, '2016'),
(34, 'Cyber Hunter(PC & Mobile)', 6, '2019'),
(35, 'GENSHIN IMPACT(Multi-Platforms)', 6, '2020'),
(36, 'UNO(Multi-Platforms)', 6, '2016'),
(37, 'EVE ONLINE(PC)', 6, '2003'),
(38, 'EVE ECHOES(Mobile)', 6, '2020'),
(39, 'Command & Conquer : Red Alert 3', 4, '2008'),
(40, 'Command & Conquer : Red Alert 3 Uprissing', 4, '2009'),
(41, 'Command & Conquer 3 : Kane\'s Wrath', 4, '2008'),
(42, 'Command & Conquer 4 : Tiberian Twilights', 4, '2010'),
(43, 'Bioshock 1 Remastered', 5, '2016'),
(44, 'Bioshock 2 Remastered', 5, '2016'),
(45, 'Bioshock Infinite', 5, '2013'),
(46, 'Fallout New Vegas', 5, '2010'),
(47, 'Mobius Final Fantasy(Closed)', 5, '2016'),
(48, 'The Sims 4', 5, '2014'),
(49, 'The Sims 3', 5, '2009'),
(50, 'Slither.io', 5, '2016'),
(51, 'APEX LEGENDS(STEAM+ORIGIN)', 6, '2019'),
(52, 'CALLS OF DUTY MOBILE(Mobile)', 6, '2019'),
(53, 'Identity V(Multi-Platforms)', 6, '2018'),
(54, 'Darkness Rises(Mobile)', 6, '2018'),
(55, 'Starcraft', 1, '1998'),
(56, 'Bright Memory(PC)', 6, '2020'),
(57, 'Audition', 2, '2004'),
(58, 'RayCity', 2, '2005'),
(59, 'Simcity(2013)', 4, '2013'),
(60, 'Need For Speed Prostreet', 4, '2007'),
(61, 'Fruit Ninja', 4, '2010'),
(62, 'Counter Strike : Global Offensive(STEAM)', 5, '2012'),
(63, 'Cities Skylines', 5, '2015'),
(64, 'Agar.io', 5, '2015'),
(65, 'MARVEL Super War(Mobile)', 6, '2019'),
(66, 'Creative Destruction(Stopped Support)', 6, '2018'),
(67, 'Angel Legion(PC & Mobile)', 6, '2019'),
(68, 'PUBG MOBILE(Mobile)', 6, '2018'),
(69, 'Life After(Multi-Platforms)', 6, '2019'),
(70, 'Audition Mobile(Mobile)', 6, '2019'),
(71, 'Dead Or Alive Xtreme Venus Vacation(PC)', 6, '2017'),
(72, 'Illusion Connect(Mobile)', 6, '2020'),
(73, 'Extreme Football(Mobile)', 6, '2019'),
(74, 'Tomb Raider(2013)(PC)', 6, '2013'),
(75, 'Rise Of The Tomb Raider(2015)(PC)', 6, '2015'),
(76, 'Tom and Jerry : Chase(Mobile)', 6, '2019'),
(77, 'AxE : Alliance vs Empire(Closed)', 6, '2019'),
(78, 'League Of Legend : Wild Raft(Mobile)', 6, '2020'),
(79, 'Disorder(Mobile)', 6, '2020'),
(80, 'Fallout Shelter Online(Mobile)', 6, '2020'),
(81, 'ORWELL', 6, '2016'),
(82, 'Super Mecha Champions(SMC)(Multi-Platforms)', 6, '2020'),
(83, 'OVERWATCH(BATTLE.NET)', 6, '2016'),
(84, 'PALADINS(STEAM)', 6, '2016'),
(85, 'CRISIS : S(Mobile)', 6, '2019'),
(86, 'Ultimate Tennis(Mobile)', 6, '2020'),
(87, 'Onmyoji Arena(Mobile)', 6, '2018'),
(88, 'Just Cause 3(PC)', 6, '2015'),
(89, 'Just Cause 2(PC)', 6, '2010'),
(90, 'New State Mobile(Mobile)', 6, '2021'),
(91, 'PC Building Simulator(PC)', 6, '2018'),
(92, 'Assassins Creed Unity(PC,Ubisoft Connect)', 6, '2014'),
(93, 'Lost Light(Multi-Platforms)', 6, '2021'),
(94, 'YU-GI-OH Master Duel(Multi-Platforms)', 6, '2022'),
(95, 'Watch Dogs(PC,Ubisoft Connect)', 6, '2014'),
(96, 'Watch Dogs 2(PC,Ubisoft Connect)', 6, '2016'),
(97, 'APEX Legends Mobile(Android+IOS)', 6, '2022'),
(98, 'Chimera Land(Multi-Platforms)', 6, '2022'),
(99, 'Shadow Verse(Multi-Platforms)', 6, '2016'),
(100, 'Prop And Seek(PC)', 6, '2020'),
(101, 'Cluedo(PC+Mobile)', 6, '2017'),
(102, 'Need For Speed No Limits(Mobile)', 6, '2015'),
(103, 'Crab Game(PC)', 6, '2021'),
(104, 'Rogue Company(PC)', 6, '2020'),
(105, 'Naraka Bradepoint(PC)', 7, '2021'),
(106, 'Need For Speed 2015(STEAM+ORIGIN)', 6, '2015'),
(107, 'House Flipper(PC)', 6, '2018'),
(108, 'Dead by Daylight Mobile(Mobile)', 6, '2019'),
(109, 'Dead by Daylight(PC)', 7, '2016'),
(110, 'Watch Dogs Legion(PC)', 7, '2020'),
(111, 'Valorant(PC)', 6, '2020'),
(112, 'Valorant Mobile(Mobile)', 7, '0000'),
(113, 'Shadow of the Tomb Raider(2018)(PC)', 7, '2018'),
(114, 'Naraka Breakpoint Mobile(Mobile)', 7, '0000'),
(115, 'Tom Clancy\'s : Rainbow Six Siege(PC)', 7, '2015'),
(116, 'Battlefield Mobile(Mobile)', 7, '2022'),
(117, 'Punk Royale 2052(Mobile)', 7, '0000'),
(118, 'Honkai Star Rail(Multi-Platforms)', 7, '2021'),
(119, 'NIKKE : The Goddess of Victory(Mobile)', 6, '2022'),
(120, 'Azur Lane(Mobile)', 6, '2017'),
(121, 'Game Of Dice(Mobile)', 6, '2015'),
(122, 'Strike Royale(Mobile)', 6, '2018'),
(123, 'Need For Speed Underground 1', 3, '2003'),
(124, 'Need For Speed Underground 2', 3, '2004'),
(125, 'Zuma\'s Collection', 3, '2003'),
(126, 'Plants VS Zombies', 3, '2009'),
(127, 'Tower Of Fantasy', 6, '2022'),
(128, 'Honey Select', 5, '2015'),
(129, 'Honey Select 2 Libido', 6, '2020'),
(130, 'Bright Memory Infinite', 7, '2017'),
(131, 'Assassins Creed', 5, '2007'),
(132, 'Assassins Creed 2', 5, '2009'),
(133, 'Assassins Creed Syndicate', 5, '2015'),
(134, 'Counter:Side', 6, '2020'),
(135, 'Hill Climb Racing', 4, '2011'),
(136, 'Hyper Front', 6, '2020'),
(137, 'The Division Resurgence', 7, '0000'),
(138, 'Call Of Duty Warzone Mobile', 7, '2023'),
(139, 'Call Of Duty Modern Warfare II(2022)', 7, '2022'),
(140, 'Need For Speed Most Wanted(2012)', 5, '2012'),
(141, '911 Operrator', 5, '2016'),
(142, '112 Operrator', 6, '2022'),
(143, 'Sigma Theory', 6, '2018'),
(144, 'Rise Of Eros(NSFW GAME)', 6, '2022'),
(145, 'Future Football Manager', 6, '2022'),
(146, 'Alchemy Stars', 6, '2021'),
(147, 'Among Us', 6, '2018'),
(148, 'Astracraft', 6, '2019'),
(149, 'Assassin\'s Creed Pirates', 6, '2015'),
(150, 'Badlanders', 6, '2018'),
(151, 'Bullet Angel', 6, '2019'),
(152, 'Cookie Run', 4, '2013'),
(153, 'Dislyte', 6, '0000'),
(154, 'Eclipse Isle', 6, '0000'),
(155, 'Extraordinary Ones', 6, '0000'),
(156, 'Farlight 84', 6, '0000'),
(157, 'Figure Fantasy', 6, '0000'),
(158, 'Need For Speed Heat', 7, '0000'),
(159, 'Surviving Mars', 7, '0000'),
(160, 'We Become What We Behold', 6, '0000'),
(161, 'Internet Cafe Simulator', 6, '0000'),
(162, 'Internet Cafe Simulator 2', 7, '0000'),
(163, 'Deceit', 6, '0000');

-- --------------------------------------------------------

--
-- Table structure for table `generation`
--

CREATE TABLE `generation` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `generation`
--

INSERT INTO `generation` (`id`, `name`) VALUES
(1, 'GEN 1 (2007-2008)'),
(2, 'GEN 2 (2008-2009)'),
(3, 'GEN 3 (2009-2011)'),
(4, 'GEN 4&4.5 (2012-2014)'),
(5, 'GEN 5 (2015-2017)'),
(6, 'SPECTRUM & NEOSPECTRUM GEN (2017-Present)'),
(7, 'NeoNext SPECTRUM(NextToPresent)');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `project_name` varchar(255) NOT NULL,
  `status_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `project_name`, `status_id`) VALUES
(1, 'The Five Boys(2007)', 5),
(2, 'NeoNexus Production(2010)', 3),
(3, 'The Five Boys Evolution(2014)', 4),
(4, 'The Five Girls Evolution(2014)', 5),
(5, 'FANGPLAY Dance\'s Attack(2015)', 4),
(6, 'FANGPLAY Dance\'s Attack II(2016)', 3),
(7, 'FANGPLAYLVX Cosplay Podcast Series(2022)', 2),
(8, 'FANGPLAYLVX Newbie Gamer(2019)', 3),
(9, 'STGNeo Team Created(2019)', 4),
(10, 'NeoNext SPECTRUM Gen(2023)', 4),
(16, 'SPECTRUM GEN Created(2017)', 4),
(17, 'NEOSPECTRUM GEN Created(2020)', 4),
(18, 'STGNeo Group On Social(2020)', 7),
(19, 'Trinity FriendShip Band(2020)', 3),
(20, 'Change To \'NeoXFANGPLAY\' from \'FANGPLAYLVX\'(2022)', 4),
(21, 'Upscale social platforms of \'NeoxFANGPLAY\'(2023)', 2),
(22, 'Making Computer Room & Gamer Room(2023)', 1),
(23, 'Goodbye \'AUICUTE\' forever Project(2022)', 4),
(24, 'เล่นเกมในตำนานรอบสิบปี Project(2022)', 2),
(25, 'Practicing Programming & Casting(2022)', 2),
(26, 'ADCYMIN G Channel', 7),
(27, 'FANGPLAY Official Website', 4),
(28, 'Making Game', 1),
(29, 'Diary Website', 2),
(30, 'Blog Website', 1),
(31, 'API Full Stack', 2);

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id`, `name`) VALUES
(1, 'Planning'),
(2, 'In-Progress'),
(3, 'Cancelled'),
(4, 'Complete'),
(5, 'Incomplete'),
(6, 'Creating'),
(7, 'Ended');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `diary`
--
ALTER TABLE `diary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gamelist`
--
ALTER TABLE `gamelist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `generation`
--
ALTER TABLE `generation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `diary`
--
ALTER TABLE `diary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `gamelist`
--
ALTER TABLE `gamelist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=164;

--
-- AUTO_INCREMENT for table `generation`
--
ALTER TABLE `generation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
