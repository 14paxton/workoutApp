-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2019 at 08:30 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `workout`
--
CREATE DATABASE IF NOT EXISTS `workout` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `workout`;

-- --------------------------------------------------------

--
-- Table structure for table `dailyroutine`
--

CREATE TABLE `dailyroutine` (
  `id` int(11) NOT NULL,
  `type` varchar(11) NOT NULL,
  `day` varchar(15) NOT NULL,
  `wo` varchar(20) NOT NULL,
  `w2` varchar(20) NOT NULL,
  `w3` varchar(20) NOT NULL,
  `w4` varchar(20) NOT NULL,
  `w5` varchar(20) NOT NULL,
  `w6` varchar(20) NOT NULL,
  `w7` varchar(20) NOT NULL,
  `w8` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dailyroutine`
--

INSERT INTO `dailyroutine` (`id`, `type`, `day`, `wo`, `w2`, `w3`, `w4`, `w5`, `w6`, `w7`, `w8`) VALUES
(1, 'wt', 'mon', 'bench', 'incline', 'db flys', 'db pushups', 'bent over row', 'pull ups', 'shrugs', 'abs'),
(3, 'wt', 'tue', 'preacher curl', 'conc. curl', 'reverse curl', 'seated curl', 'overhead tris', 'tri pull down', 'tri pushup', 'abs'),
(4, 'wt', 'wed', '6 way shoulders', 'external rotations', 'standing row', 'military press', 'forearms', 'squat', 'squat jumps', 'leg extentions'),
(9, 'wt', 'thu', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off'),
(10, 'wt', 'fri', 'bench', 'db incline', 'db bench', 'db dead stop', 'good morning', 'traps', 'lying pullups', 'abs'),
(11, 'wt', 'sat', 'standing curl', 'reverse curl', 'preacher curl', 'crazy 8\'s', 'single arm tri', 'flat bench tris', 'abs', 'none'),
(13, 'wt', 'sun', 'internal rotations', 'db shoulder press', 'shoulder lat raise', 'forearms', 'squat', 'lunge', 'leg curls', '3 way calves'),
(15, 'stren', 'mon', 'bench', 'incline', 'pull ups', 'bent over row', 'cable reverse', 'db hammer curl', 'wrist flexes', 'abs'),
(18, 'stren', 'wed', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off'),
(19, 'stren', 'tue', 'front squat', 'hack squat', 'good mornings', 'leg curls', 'leg press', 'calf raises', 'hanging leg raises', 'cable twists'),
(21, 'stren', 'thu', 'bench', 'cable flys', 'front lat', 'lawn mowers', 'military', 'front lat raise', 'db concentration', 'tricep dips'),
(22, 'stren', 'fri', 'back squat', 'lunges', 'deadlift', 'reverse hyperextend', 'standing calves', 'seated calves ', 'abs', 'sprint circuit'),
(25, 'stren', 'sun', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off'),
(26, 'stren', 'sat', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off'),
(29, 'tab', 'sun', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off'),
(30, 'tab', 'sun', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off'),
(31, 'tab', 'mon', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off'),
(32, 'tab', 'tue', 'quick feet 3x', 'burpees 3x', 'plank jacks 3x', 'db curl press 3x', 'hurdle jums 3x', 'push up to row 3x', 'box jumps 3x', 'hand planks 3x'),
(33, 'tab', 'thu', 'jump squats 8x', 'mountain climbers 6x', 'lung jumps 6x', 'high knees 4x', 'med ball side toss 4', 'skaters 4x', 'plank jacks 4x', 'none'),
(34, 'tab', 'wed', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off'),
(35, 'tab', 'fri', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off'),
(36, 'tab', 'sat', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `uName` varchar(150) NOT NULL,
  `pWord` varchar(150) NOT NULL,
  `image` varchar(150) NOT NULL DEFAULT 'custimages/hulk.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `uName`, `pWord`, `image`) VALUES
(1, 'bpaxt1', '$2y$10$fryZhJ/t2SP/62WlQj8kq.G9/8Q6kwUcFZhZUAvVkPie55fkUx6iy', 'custimages/hulk.jpg'),
(2, 'liam22', '$2y$10$6Gdf4d1nZ467uRK33LhOUuzh8OmdigG5ztpZCkIL6cek4rektuTq2', 'images/liam22.jpg'),
(3, 'liam223', '$2y$10$OhDW1Z55bmKNE8G644ifdutB2lTzL4Zha8AxLhzC/z5LJ..uOAUQq', 'images/liam223.png'),
(4, 'liam224', '$2y$10$T45GUluGjyO0RGfiKTce1.XDN3tlP.bWkqM/Jn/nb.qSmtCGNXvRS', 'images/liam224.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dailyroutine`
--
ALTER TABLE `dailyroutine`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dailyroutine`
--
ALTER TABLE `dailyroutine`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
