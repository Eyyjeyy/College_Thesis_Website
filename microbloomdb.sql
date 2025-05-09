-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2023 at 04:50 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `microbloomdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutitems`
--

CREATE TABLE `aboutitems` (
  `id` int(11) NOT NULL,
  `about1_header_text1` varchar(50) NOT NULL,
  `about1_subtext1` varchar(500) NOT NULL,
  `about1_header_text2` varchar(50) NOT NULL,
  `about1_subtext2` varchar(500) NOT NULL,
  `page_header` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aboutitems`
--

INSERT INTO `aboutitems` (`id`, `about1_header_text1`, `about1_subtext1`, `about1_header_text2`, `about1_subtext2`, `page_header`) VALUES
(1, 'OUR CLIENT', 'A gamified software development company that utilizes gamification and human- centered design principles to turn ideas, systems, and processes into fun and meaningful experiences.', 'THE TEAM', 'Group SLM is a student group composed of students Group SLM is a student group composed of students from FEU Institute of Technology, specializing in Animation and Game Development.                         With the dream to create games that will be remembered, the team formed is responsible for making the game, Micro-Bloom.', '');

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `ID` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`ID`, `username`, `password`) VALUES
(1, 'adminuser', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `homeitems`
--

CREATE TABLE `homeitems` (
  `id` int(11) NOT NULL,
  `container1_header` varchar(500) NOT NULL,
  `container1_background` varchar(500) NOT NULL,
  `container2_header` varchar(500) NOT NULL,
  `container2_subtext` varchar(500) NOT NULL,
  `container2_icon1` varchar(2000) NOT NULL,
  `container2_icon1_desc` varchar(2000) NOT NULL,
  `container2_icon2` varchar(2000) NOT NULL,
  `container2_icon2_desc` varchar(2000) NOT NULL,
  `container2_icon3` varchar(2000) NOT NULL,
  `container2_icon3_desc` varchar(2000) NOT NULL,
  `container3_header` varchar(500) NOT NULL,
  `container3_subtext` varchar(500) NOT NULL,
  `container3_trailerdesc` varchar(500) NOT NULL,
  `container3_highlight1` varchar(200) NOT NULL,
  `container3_highlight2` varchar(200) NOT NULL,
  `container3_highlight3` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `homeitems`
--

INSERT INTO `homeitems` (`id`, `container1_header`, `container1_background`, `container2_header`, `container2_subtext`, `container2_icon1`, `container2_icon1_desc`, `container2_icon2`, `container2_icon2_desc`, `container2_icon3`, `container2_icon3_desc`, `container3_header`, `container3_subtext`, `container3_trailerdesc`, `container3_highlight1`, `container3_highlight2`, `container3_highlight3`) VALUES
(1, 'WELCOME TO MICROBLOOM', 'https://cdn1.epicgames.com/ue/product/Featured/LowPolyForest_featured-894x488-11fb4e107d18b1a080ec82b9cb6ee5ac.png', 'GAME FEATURES', 'Unleash your inner adventurer with our platform\'s captivating features. Discover the thrill of combat, embark on epic explorations, and know your own plants up close', '<svg xmlns=\"http://www.w3.org/2000/svg\"  fill=\"currentColor\" class=\"bi bi-tree-fill\" viewBox=\"0 0 16 16\">                     <path d=\"M8.416.223a.5.5 0 0 0-.832 0l-3 4.5A.5.5 0 0 0 5 5.5h.098L3.076 8.735A.5.5 0 0 0 3.5 9.5h.191l-1.638 3.276a.5.5 0 0 0 .447.724H7V16h2v-2.5h4.5a.5.5 0 0 0 .447-.724L12.31 9.5h.191a.5.5 0 0 0 .424-.765L10.902 5.5H11a.5.5 0 0 0 .416-.777l-3-4.5z\"/>                     </svg>', 'Learn all the plants as you make your way to survival. Know your plants the way no one has ever done before.', '<svg xmlns=\"http://www.w3.org/2000/svg\" class=\"combat-hands\" viewBox=\"0 0 448 512\"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d=\"M192 0c17.7 0 32 14.3 32 32V144H160V32c0-17.7 14.3-32 32-32zM64 64c0-17.7 14.3-32 32-32s32 14.3 32 32v80H64V64zm192 0c0-17.7 14.3-32 32-32s32 14.3 32 32v96c0 17.7-14.3 32-32 32s-32-14.3-32-32V64zm96 64c0-17.7 14.3-32 32-32s32 14.3 32 32v64c0 17.7-14.3 32-32 32s-32-14.3-32-32V128zm-96 88l0-.6c9.4 5.4 20.3 8.6 32 8.6c13.2 0 25.4-4 35.6-10.8c8.7 24.9 32.5 42.8 60.4 42.8c11.7 0 22.6-3.1 32-8.6V256c0 52.3-25.1 98.8-64 128v96c0 17.7-14.3 32-32 32H160c-17.7 0-32-14.3-32-32V401.6c-17.3-7.9-33.2-18.8-46.9-32.5L69.5 357.5C45.5 333.5 32 300.9 32 267V240c0-35.3 28.7-64 64-64h88c22.1 0 40 17.9 40 40s-17.9 40-40 40H128c-8.8 0-16 7.2-16 16s7.2 16 16 16h56c39.8 0 72-32.2 72-72z\"/></svg>', 'Survive by fighting through nature\'s residents. Who would have thought that such forces of nature would be small but terrible... now deadly', '<svg xmlns=\"http://www.w3.org/2000/svg\" class=\"explore-map\" viewBox=\"0 0 576 512\"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d=\"M408 120c0 54.6-73.1 151.9-105.2 192c-7.7 9.6-22 9.6-29.6 0C241.1 271.9 168 174.6 168 120C168 53.7 221.7 0 288 0s120 53.7 120 120zm8 80.4c3.5-6.9 6.7-13.8 9.6-20.6c.5-1.2 1-2.5 1.5-3.7l116-46.4C558.9 123.4 576 135 576 152V422.8c0 9.8-6 18.6-15.1 22.3L416 503V200.4zM137.6 138.3c2.4 14.1 7.2 28.3 12.8 41.5c2.9 6.8 6.1 13.7 9.6 20.6V451.8L32.9 502.7C17.1 509 0 497.4 0 480.4V209.6c0-9.8 6-18.6 15.1-22.3l122.6-49zM327.8 332c13.9-17.4 35.7-45.7 56.2-77V504.3L192 449.4V255c20.5 31.3 42.3 59.6 56.2 77c20.5 25.6 59.1 25.6 79.6 0zM288 152a40 40 0 1 0 0-80 40 40 0 1 0 0 80z\"/>           </svg>', 'Discover things both great and terrible throughout your journey. The once-familiar landscapes transformed into vast, treacherous expanses.', 'Explore-Learn-Survive!', 'Put your survival skills to the test in this open-world game! Learn all<br> that nature has to offer that is if you survive                      to tell the tale. ', 'It\'s time to see the world from a whole new perspective.                     It\'s a game of survival, strategy, and skill – do you have what it takes to come out on top? <br><br>Find out now                     and play the one of a kind survival-adventure game where you meet plants and insects either friend or foe.', '5 zones in one massive open-world map', 'Interactable NPCs', 'Variety of Debuff Effects');

-- --------------------------------------------------------

--
-- Table structure for table `homeitems2`
--

CREATE TABLE `homeitems2` (
  `id` int(11) NOT NULL,
  `container3_img1` varchar(300) NOT NULL,
  `container3_img2` varchar(300) CHARACTER SET utf8 NOT NULL,
  `container3_img3` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `homeitems2`
--

INSERT INTO `homeitems2` (`id`, `container3_img1`, `container3_img2`, `container3_img3`) VALUES
(1, 'https://creazilla-store.fra1.digitaloceanspaces.com/three_d_models/1795191/low-poly-scenery-hills-and-lake-3d-model-80271-md.png', 'https://creazilla-store.fra1.digitaloceanspaces.com/three_d_models/1432907/low-poly-fantasy-asset-pack-3d-model-79279-md.png', 'https://creazilla-store.fra1.digitaloceanspaces.com/three_d_models/1411221/low-poly-forest-3d-model-79181-md.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `pictureitems`
--

CREATE TABLE `pictureitems` (
  `pictureID` int(11) NOT NULL,
  `pictureMessage` varchar(200) NOT NULL,
  `pictureImage` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pictureitems`
--

INSERT INTO `pictureitems` (`pictureID`, `pictureMessage`, `pictureImage`) VALUES
(138, 'Explore the world of nature', 'http://localhost/revisethesis_website/uploads/game1.png'),
(139, 'Survive its gigantic denizens', 'http://localhost/revisethesis_website/uploads/game2.png'),
(140, 'Will You Bloom or Will You be Lost', 'http://localhost/revisethesis_website/uploads/game3.png'),
(141, 'Journey through a World Gone Wrong', 'http://localhost/revisethesis_website/uploads/game4.png'),
(142, 'Learn its Secrets', 'http://localhost/revisethesis_website/uploads/game5.png'),
(143, 'Enter the Domain of Predators', 'http://localhost/revisethesis_website/uploads/game6.png'),
(153, 'Play and Have Fun', 'http://localhost/final_revisethesis_website_second/uploads/game7.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutitems`
--
ALTER TABLE `aboutitems`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `homeitems`
--
ALTER TABLE `homeitems`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homeitems2`
--
ALTER TABLE `homeitems2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pictureitems`
--
ALTER TABLE `pictureitems`
  ADD PRIMARY KEY (`pictureID`),
  ADD UNIQUE KEY `pictureMessage` (`pictureMessage`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutitems`
--
ALTER TABLE `aboutitems`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `homeitems`
--
ALTER TABLE `homeitems`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `homeitems2`
--
ALTER TABLE `homeitems2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pictureitems`
--
ALTER TABLE `pictureitems`
  MODIFY `pictureID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=155;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
