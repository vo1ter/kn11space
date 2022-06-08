-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 07, 2022 at 07:34 PM
-- Server version: 5.7.34-log
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kn11`
--

-- --------------------------------------------------------

--
-- Table structure for table `hackers`
--

CREATE TABLE `hackers` (
  `id` int(11) NOT NULL,
  `time` int(11) NOT NULL,
  `ip` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hackers`
--

INSERT INTO `hackers` (`id`, `time`, `ip`) VALUES
(1, 1637102093, '::1'),
(2, 1637102121, '192.168.0.104'),
(3, 1637179246, '::1'),
(4, 1637179253, '::1'),
(5, 1637179312, '::1'),
(6, 1637179317, '::1'),
(7, 1638308388, '141.101.104.192'),
(8, 1639867887, '::1'),
(9, 1639867903, '::1'),
(10, 1639868000, '::1'),
(11, 1639868068, '::1'),
(12, 1639868089, '::1'),
(13, 1639903231, '141.101.77.28'),
(14, 1639903242, '141.101.77.28'),
(15, 1639903253, '141.101.77.28'),
(16, 1639903416, '141.101.77.28'),
(17, 1639903428, '141.101.77.28'),
(18, 1639903509, '::1'),
(19, 1639903515, '::1'),
(20, 1639903521, '::1'),
(21, 1639903557, '::1'),
(22, 1639903610, '::1'),
(23, 1639903623, '::1'),
(24, 1639903679, '::1'),
(25, 1643161047, '::1'),
(26, 1643193844, '::1'),
(27, 1643193853, '::1'),
(28, 1643754870, '172.70.246.175');

-- --------------------------------------------------------

--
-- Table structure for table `ism`
--

CREATE TABLE `ism` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `link` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ism`
--

INSERT INTO `ism` (`id`, `name`, `link`) VALUES
(1, 'ГДЗ Математика (Істер)', 'https://vshkole.com/10-klass/reshebniki/matematika/os-ister-2018'),
(2, 'ГДЗ Українська мова (Авраменко)', 'https://vshkole.com/10-klass/reshebniki/ukrayinska-mova/om-avramenko-2018'),
(3, 'ГДЗ Англійська мова (Верба)', 'https://en.calameo.com/read/0038142666c8d46f63cbe'),
(4, 'ГДЗ Фізика (Божинова)', 'https://4book.org/gdz-reshebniki-ukraina/10-klass/reshebnik-zoshit-fizika-10-klas-bozhinova-2018-gdz');

-- --------------------------------------------------------

--
-- Table structure for table `s_friday`
--

CREATE TABLE `s_friday` (
  `lesson_number` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `cabinet` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `s_friday`
--

INSERT INTO `s_friday` (`lesson_number`, `name`, `cabinet`) VALUES
(1, 'Іноземна мова (1)<br>Іноземна мова (2)', '21<br>34'),
(2, 'Фізика', '34'),
(3, 'Географія', '34'),
(4, '-', '-'),
(5, '-', '-'),
(6, '-', '-');

-- --------------------------------------------------------

--
-- Table structure for table `s_monday`
--

CREATE TABLE `s_monday` (
  `lesson_number` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `cabinet` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `s_monday`
--

INSERT INTO `s_monday` (`lesson_number`, `name`, `cabinet`) VALUES
(1, 'Іноземна мова (1)', '21'),
(2, 'Історія України', '34'),
(3, 'Математика', '40'),
(4, 'Захист України', 'ЦРР'),
(5, '-', '-'),
(6, '-', '-');

-- --------------------------------------------------------

--
-- Table structure for table `s_thursday`
--

CREATE TABLE `s_thursday` (
  `lesson_number` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `cabinet` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `s_thursday`
--

INSERT INTO `s_thursday` (`lesson_number`, `name`, `cabinet`) VALUES
(1, 'Всесвітня історія', '34'),
(2, 'Зарубіжна література', '40'),
(3, 'Укр. мова', '34'),
(4, '-<hr>Хімія', '-<hr>34'),
(5, '-', '-'),
(6, '-', '-');

-- --------------------------------------------------------

--
-- Table structure for table `s_tuesday`
--

CREATE TABLE `s_tuesday` (
  `lesson_number` int(11) NOT NULL,
  `name` varchar(96) NOT NULL,
  `cabinet` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `s_tuesday`
--

INSERT INTO `s_tuesday` (`lesson_number`, `name`, `cabinet`) VALUES
(1, 'Інформатика', '43<br>44'),
(2, 'Біологія', '34'),
(3, 'Фіз-ра', 'с.з. / стадіон'),
(4, 'Фізика', '34'),
(5, 'Математика (допи)<hr>Укр. мова (допи)', '?<hr>?'),
(6, '-', '-');

-- --------------------------------------------------------

--
-- Table structure for table `s_wednesday`
--

CREATE TABLE `s_wednesday` (
  `lesson_number` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `cabinet` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `s_wednesday`
--

INSERT INTO `s_wednesday` (`lesson_number`, `name`, `cabinet`) VALUES
(1, 'Іноземна мова (2)', '42'),
(2, 'Укр. література', '34'),
(3, 'Математика', '40'),
(4, 'Хімія', '34'),
(5, 'Історія України (допи)', '?'),
(6, '-', '-');

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE `tickets` (
  `id` int(11) NOT NULL,
  `creator` varchar(128) NOT NULL,
  `date` varchar(64) NOT NULL,
  `content` varchar(1024) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tickets`
--

INSERT INTO `tickets` (`id`, `creator`, `date`, `content`) VALUES
(16, '1751921258', '1635631948970', '123'),
(17, '1751921258', '1635632090115', '123'),
(18, '860410065', '1635632526910', 'Влад красачик'),
(19, '1751921258', '1635632679042', '123123123 123123'),
(20, '1751921258', '1635632701494', 'test'),
(21, '1751921258', '1635632779666', '12312testset setst'),
(22, '1751921258', '1635667084180', 'kryto da?'),
(23, '1751921258', '1635681232419', '5555'),
(24, '1751921258', '1635681403232', '5555'),
(25, '1751921258', '1635681427583', '55555'),
(26, '1751921258', '1635681478753', '55555'),
(27, '1751921258', '1635681515528', '123'),
(28, '1751921258', '1635681942237', '123123');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` varchar(16) NOT NULL,
  `pass` varchar(32) NOT NULL,
  `telegram` varchar(32) NOT NULL,
  `status` int(11) NOT NULL,
  `theme` varchar(5) NOT NULL DEFAULT 'light',
  `lastip` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `login`, `pass`, `telegram`, `status`, `theme`, `lastip`) VALUES
(3, 'root', '2987b5dbd4fc1359db4379c4bba34203', 'iwillbedeaduntilnextmorning', 1, 'light', '::1'),
(9, 'kn11', 'eb03037efd680c33f29cfcef110fdcfb', 'none', 1, 'light', '172.68.238.113'),
(13, 'Назар', 'f7d0c9e799d45b4f45dee35d0982e467', 'nazarS123', 0, 'light', '172.68.238.141'),
(14, 'Feeld', 'f29f8af431c68379c91182e4cbfb6692', 'feeld_nt', 1, 'light', '141.101.76.243');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hackers`
--
ALTER TABLE `hackers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ism`
--
ALTER TABLE `ism`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `s_friday`
--
ALTER TABLE `s_friday`
  ADD PRIMARY KEY (`lesson_number`);

--
-- Indexes for table `s_monday`
--
ALTER TABLE `s_monday`
  ADD PRIMARY KEY (`lesson_number`);

--
-- Indexes for table `s_thursday`
--
ALTER TABLE `s_thursday`
  ADD PRIMARY KEY (`lesson_number`);

--
-- Indexes for table `s_tuesday`
--
ALTER TABLE `s_tuesday`
  ADD PRIMARY KEY (`lesson_number`);

--
-- Indexes for table `s_wednesday`
--
ALTER TABLE `s_wednesday`
  ADD PRIMARY KEY (`lesson_number`);

--
-- Indexes for table `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hackers`
--
ALTER TABLE `hackers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `ism`
--
ALTER TABLE `ism`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `s_friday`
--
ALTER TABLE `s_friday`
  MODIFY `lesson_number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `s_monday`
--
ALTER TABLE `s_monday`
  MODIFY `lesson_number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `s_thursday`
--
ALTER TABLE `s_thursday`
  MODIFY `lesson_number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `s_tuesday`
--
ALTER TABLE `s_tuesday`
  MODIFY `lesson_number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `s_wednesday`
--
ALTER TABLE `s_wednesday`
  MODIFY `lesson_number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tickets`
--
ALTER TABLE `tickets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
