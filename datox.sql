-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2024 at 08:17 PM
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
-- Database: `datox`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(11) NOT NULL,
  `firstName` varchar(100) NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `email` varchar(300) NOT NULL,
  `adminImage` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL,
  `reset_token` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `firstName`, `lastName`, `email`, `adminImage`, `password`, `reset_token`) VALUES
(1, 'Umar', 'Ghori', 'umarghori567@gmail.com', '../media/14.png', '123456', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `id` int(11) NOT NULL,
  `senderId` varchar(255) NOT NULL,
  `receiverId` varchar(255) NOT NULL,
  `msg` varchar(800) NOT NULL,
  `published` timestamp(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`id`, `senderId`, `receiverId`, `msg`, `published`) VALUES
(91, '2', '5', 'Hlo', '2024-03-04 11:49:50.773919'),
(92, '2', '5', 'How are you?', '2024-03-04 11:54:09.611955'),
(93, '3', '2', 'Hi', '2024-03-04 11:55:36.650910'),
(94, '2', '3', 'yes', '2024-03-04 12:00:25.992713'),
(95, '2', '3', 'hi', '2024-03-04 12:02:36.597585'),
(96, '2', '3', 'how are you', '2024-03-04 12:02:58.374317'),
(97, '3', '3', 'hu', '2024-03-04 12:03:24.935436'),
(98, '3', '2', 'hi umar', '2024-03-04 12:13:34.401643'),
(99, '3', '2', 'what are you doing?', '2024-03-04 12:14:28.949864'),
(100, '2', '3', 'Nothing ', '2024-03-04 12:15:55.523241'),
(101, '3', '2', 'and you?', '2024-03-04 12:16:30.973126'),
(102, '3', '2', 'Hi', '2024-03-04 12:20:45.461555'),
(103, '3', '2', 'Hi example', '2024-03-04 12:23:31.902789'),
(104, '2', '3', 'Yes', '2024-03-04 12:23:39.670700'),
(105, '3', '2', 'What are you doing?', '2024-03-04 12:24:04.022630'),
(106, '2', '3', 'nothing', '2024-03-04 12:24:14.858343'),
(107, '3', '2', 'Hi', '2024-03-04 12:26:28.123776'),
(108, '2', '3', 'Hi Fahad', '2024-03-04 12:49:29.154831'),
(109, '3', '2', 'Hi', '2024-03-04 12:49:39.271408'),
(110, '3', '2', 'you just fuck off', '2024-03-04 12:49:45.498604'),
(111, '3', '2', 'Hi', '2024-03-04 18:46:50.424708'),
(112, '2', '8', 'Hi', '2024-03-05 12:27:09.115943'),
(113, '8', '2', 'yes', '2024-03-05 12:27:15.297232'),
(114, '2', '8', 'how are you?', '2024-03-05 12:27:27.162760'),
(115, '8', '2', 'I am Good', '2024-03-05 12:27:33.984938'),
(116, '2', '8', 'hi', '2024-03-05 18:25:58.198055');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` int(11) NOT NULL,
  `groupName` varchar(300) NOT NULL,
  `groupImage` varchar(300) NOT NULL,
  `published` datetime(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `groupName`, `groupImage`, `published`) VALUES
(1, 'Concerts', '../media/club.jpg', '2024-02-26 17:27:10.688849'),
(2, 'Musées', '../media/image.jpg', '2024-02-26 17:29:19.405729'),
(3, 'Expositions', '../media/hotel.jpg', '2024-02-26 17:30:01.831791'),
(4, 'Cafés', '../media/cafes.jpg', '2024-02-26 17:32:20.198376'),
(5, 'Restaurants', '../media/resturent.jpg', '2024-02-27 16:06:05.674881'),
(6, 'Travel', '../media/adventure.jpg', '2024-02-27 16:08:42.601817'),
(7, 'Cars', '../media/car.jpg', '2024-02-27 16:12:11.115590'),
(8, 'Bike', '../media/bike.jpg', '2024-02-27 16:28:30.488962'),
(10, 'hdjksal', '../media/Crafty (1).png', '2024-03-05 17:47:04.889346');

-- --------------------------------------------------------

--
-- Table structure for table `language`
--

CREATE TABLE `language` (
  `id` int(11) NOT NULL,
  `french` varchar(50) NOT NULL DEFAULT '0',
  `english` varchar(50) NOT NULL DEFAULT '0',
  `germany` varchar(50) NOT NULL DEFAULT '0',
  `italian` varchar(50) NOT NULL DEFAULT '0',
  `spainsh` varchar(50) NOT NULL DEFAULT '0',
  `userId` varchar(300) NOT NULL,
  `published` datetime(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `privacy`
--

CREATE TABLE `privacy` (
  `id` int(11) NOT NULL,
  `privacyContent` varchar(2700) NOT NULL,
  `published` datetime(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `privacy`
--

INSERT INTO `privacy` (`id`, `privacyContent`, `published`) VALUES
(2, 'PGg1PkJlIHlvdXJzZWxmPC9oNT4NCjxwPkxvcmVtIGlwc3VtIGRvbG9yIHNpdCBhbWV0LCBjb25zZWN0ZXR1ciBhZGlwaXNpY2luZyBlbGl0LCBzZWQgZG8gZWl1c21vZCZuYnNwO3RlbXBvciBpbmNpZGlkdW50IHV0IGxhYm9yZSBldCBkb2xvcmUgbWFnbmEgYWxpcXVhLiBVdCBlbmltIGFkIG1pbmltIHZlbmlhbSwgcXVpcyBub3N0cnVkIGV4ZXJjaXRhdGlvbiB1bGxhbWNvIGxhYm9yaXMgbmlzaSB1dCBhbGlxdWlwIGV4IGVhIGNvbW1vZG8mbmJzcDtjb25zZXF1YXQuPC9wPg0KPGg1PlN0YXkgc2FmZTwvaDU+DQo8cD5Mb3JlbSBpcHN1bSBkb2xvciBzaXQgYW1ldCwgY29uc2VjdGV0dXIgYWRpcGlzaWNpbmcgZWxpdCwgc2VkIGRvIGVpdXNtb2QmbmJzcDt0ZW1wb3IgaW5jaWRpZHVudCB1dCBsYWJvcmUgZXQgZG9sb3JlIG1hZ25hIGFsaXF1YS4gVXQgZW5pbSBhZCBtaW5pbSB2ZW5pYW0sIHF1aXMgbm9zdHJ1ZCBleGVyY2l0YXRpb24gdWxsYW1jbyBsYWJvcmlzIG5pc2kgdXQgYWxpcXVpcCBleCBlYSBjb21tb2RvJm5ic3A7Y29uc2VxdWF0LiZuYnNwOzwvcD4NCjxoNT5QbGF5IGl0IGNvb2w8L2g1Pg0KPHA+TG9yZW0gaXBzdW0gZG9sb3Igc2l0IGFtZXQsIGNvbnNlY3RldHVyIGFkaXBpc2ljaW5nIGVsaXQsIHNlZCBkbyBlaXVzbW9kJm5ic3A7dGVtcG9yIGluY2lkaWR1bnQgdXQgbGFib3JlIGV0IGRvbG9yZSBtYWduYSBhbGlxdWEuIFV0IGVuaW0gYWQgbWluaW0gdmVuaWFtLCBxdWlzIG5vc3RydWQgZXhlcmNpdGF0aW9uIHVsbGFtY28gbGFib3JpcyBuaXNpIHV0IGFsaXF1aXAgZXggZWEgY29tbW9kbyZuYnNwO2NvbnNlcXVhdC48L3A+DQo8aDU+QmUgUHJvYWN0aXZlPC9oNT4NCjxwPkxvcmVtIGlwc3VtIGRvbG9yIHNpdCBhbWV0LCBjb25zZWN0ZXR1ciBhZGlwaXNpY2luZyBlbGl0LCBzZWQgZG8gZWl1c21vZCZuYnNwO3RlbXBvciBpbmNpZGlkdW50IHV0IGxhYm9yZSBldCBkb2xvcmUgbWFnbmEgYWxpcXVhLiBVdCBlbmltIGFkIG1pbmltIHZlbmlhbSwgcXVpcyBub3N0cnVkIGV4ZXJjaXRhdGlvbiB1bGxhbWNvIGxhYm9yaXMgbmlzaSB1dCBhbGlxdWlwIGV4IGVhIGNvbW1vZG8mbmJzcDtjb25zZXF1YXQuJm5ic3A7PC9wPg0KPHA+Jm5ic3A7PC9wPg==', '2024-02-26 01:01:53.617075');

-- --------------------------------------------------------

--
-- Table structure for table `usergroup`
--

CREATE TABLE `usergroup` (
  `id` int(11) NOT NULL,
  `email` varchar(300) NOT NULL,
  `usergroupId` varchar(300) NOT NULL,
  `published` datetime(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usergroup`
--

INSERT INTO `usergroup` (`id`, `email`, `usergroupId`, `published`) VALUES
(54, 'umarghori567@gmail.com', '1', '2024-02-28 17:55:30.955180'),
(55, 'umarghori567@gmail.com', '3', '2024-02-28 17:55:30.969173'),
(56, 'umarghori567@gmail.com', '5', '2024-02-28 17:55:30.982194'),
(57, 'umarghori567@gmail.com', '8', '2024-02-28 17:55:30.996342'),
(58, 'umarghori567@gmail.com', '6', '2024-02-28 17:55:31.009257'),
(59, 'test@gmail.com', '5', '2024-03-01 03:09:17.539888'),
(60, 'test@gmail.com', '8', '2024-03-01 03:09:17.558766'),
(61, 'test@gmail.com', '7', '2024-03-01 03:09:17.570901'),
(62, 'test@gmail.com', '6', '2024-03-01 03:09:17.582923'),
(63, 'test@gmail.com', '2', '2024-03-01 03:09:17.606701'),
(69, 'test1@gmail.com', '7', '2024-03-01 17:32:36.667475'),
(70, 'test1@gmail.com', '2', '2024-03-01 17:32:36.679539'),
(71, 'test1@gmail.com', '1', '2024-03-01 17:32:36.692754'),
(72, 'test1@gmail.com', '5', '2024-03-01 17:32:36.706974'),
(73, 'test1@gmail.com', '6', '2024-03-01 17:32:36.718291'),
(74, 'jhontest@gmail.com', '8', '2024-03-01 17:36:03.637113'),
(75, 'jhontest@gmail.com', '4', '2024-03-01 17:36:03.649861'),
(76, 'jhontest@gmail.com', '1', '2024-03-01 17:36:03.682940'),
(77, 'jhontest@gmail.com', '3', '2024-03-01 17:36:03.707020'),
(78, 'jhontest@gmail.com', '2', '2024-03-01 17:36:03.723108'),
(79, 'jordan@gmail.com', '1', '2024-03-01 17:46:28.580857'),
(80, 'jordan@gmail.com', '2', '2024-03-01 17:46:28.592876'),
(81, 'jordan@gmail.com', '3', '2024-03-01 17:46:28.607297'),
(82, 'jordan@gmail.com', '4', '2024-03-01 17:46:28.622711');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullName` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `countryCode` varchar(300) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `gender` varchar(200) NOT NULL,
  `dateBirth` varchar(100) NOT NULL,
  `password` varchar(300) NOT NULL,
  `bio` varchar(400) NOT NULL,
  `lookfor` varchar(200) NOT NULL,
  `interest` varchar(200) NOT NULL,
  `address` varchar(300) NOT NULL,
  `country` varchar(300) NOT NULL,
  `pic1` varchar(300) NOT NULL,
  `pic2` varchar(300) NOT NULL,
  `pic3` varchar(300) NOT NULL,
  `pic4` varchar(300) NOT NULL,
  `pic5` varchar(300) NOT NULL,
  `pic6` varchar(300) NOT NULL,
  `straight` varchar(20) DEFAULT '0',
  `gay` varchar(20) DEFAULT '0',
  `lesbian` varchar(20) DEFAULT '0',
  `bisexual` varchar(20) DEFAULT '0',
  `asexual` varchar(20) DEFAULT '0',
  `queer` varchar(20) DEFAULT '0',
  `demisexual` varchar(20) DEFAULT '0',
  `showOrien` varchar(20) DEFAULT '0',
  `published` datetime(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullName`, `email`, `countryCode`, `phone`, `gender`, `dateBirth`, `password`, `bio`, `lookfor`, `interest`, `address`, `country`, `pic1`, `pic2`, `pic3`, `pic4`, `pic5`, `pic6`, `straight`, `gay`, `lesbian`, `bisexual`, `asexual`, `queer`, `demisexual`, `showOrien`, `published`) VALUES
(2, 'Jhon Doe', 'umarghori567@gmail.com', '+33', '937210082', 'Homme', '2001-12-02', '1234', 'Just moved back to jakarata after living at India for 10+ years. Di luar terlifiat cenger - center di', 'Amis', 'Tous', '2300 Traverwood Dr.Ann Arbor, MI 48105 ', 'United States', '../media/cafes.jpg', '../media/4.jpg', '', '', '', '', '1', '1', '1', '0', '0', '0', '0', '1', '2024-02-28 02:14:15.562959'),
(3, 'example', 'example@gmail.com', '+33', '34456775', 'Homme', '2002-12-03', '1234', 'Just moved back to jakarata after living at India for 10+ years. Di luar terlifiat cenger - center di dalam.', 'Indécis', 'Homme', '', '', '../media/s3.jpg', '../media/', '../media/', '../media/', '../media/', '../media/', '1', '0', '0', '0', '0', '0', '1', '1', '2024-02-28 05:23:05.496279'),
(5, 'test', 'test@gmail.com', '+33', '931711967', 'Homme', '2001-12-05', '1234', '', 'Libre', 'Tous', '2300 Traverwood Dr.Ann Arbor, MI 48105', 'United Kingdom', '../media/s1.jpg', '../media/', '../media/', '../media/', '../media/', '../media/', '1', '1', '', '', '', '1', '', '', '2024-03-01 03:13:28.353787'),
(6, 'test1', 'test1@gmail.com', '+33', '246697710', 'Homme', '2003-12-04', '1234', '', 'Indécis', 'Tous', '', '', '../media/bsp2.jpg', '../media/', '../media/', '../media/', '../media/', '../media/', '', '1', '', '', '1', '', '', '', '2024-03-01 17:32:52.283642'),
(7, 'John test', 'jhontest@gmail.com', '+33', '4745893012', 'Homme', '2002-12-02', '1234', 'My name is Umar Farooq i am a Freelancer with 3 years of experience', 'Libre', 'Homme', '2300 Traverwood Dr.Ann Arbor, MI 48105', 'United Kingdom', '../media/2.jpg', '../media/8.jpg', '../media/', '../media/', '../media/', '../media/', '1', '', '', '', '', '1', '', '', '2024-03-01 17:36:15.665989'),
(8, 'Jordan ', 'jordan@gmail.com', '+33', '246697720', 'Homme', '2004-12-03', '1234', 'My name is Umar Farooq i am a Freelancer with 3 years of experience', 'Libre', 'Femme', '2300 Traverwood Dr.Ann Arbor, MI 48105 ', 'US', '../media/9.jpg', '../media/6.jpg', '../media/', '../media/', '../media/', '../media/', '1', '1', '', '', '', '1', '', '', '2024-03-01 17:46:43.567133');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `id` int(11) NOT NULL,
  `userId` varchar(300) NOT NULL,
  `wishlistUser` varchar(300) NOT NULL,
  `published` datetime(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`id`, `userId`, `wishlistUser`, `published`) VALUES
(4, '7', '2', '2024-03-06 01:44:13.161740'),
(5, '8', '2', '2024-03-06 13:55:58.887108'),
(6, '3', '2', '2024-03-06 13:56:25.798738'),
(7, '5', '2', '2024-03-06 13:56:44.359804');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `language`
--
ALTER TABLE `language`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `privacy`
--
ALTER TABLE `privacy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usergroup`
--
ALTER TABLE `usergroup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `language`
--
ALTER TABLE `language`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `privacy`
--
ALTER TABLE `privacy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `usergroup`
--
ALTER TABLE `usergroup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
