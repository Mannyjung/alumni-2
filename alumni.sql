-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 26, 2020 at 02:54 PM
-- Server version: 8.0.17
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alumni`
--

-- --------------------------------------------------------

--
-- Table structure for table `addr_home`
--

CREATE TABLE `addr_home` (
  `a_id` int(11) NOT NULL,
  `House-No` varchar(20) NOT NULL,
  `Moo-home` varchar(50) NOT NULL,
  `road-home` varchar(50) NOT NULL,
  `Province-home` varchar(50) NOT NULL,
  `Area-home` varchar(50) NOT NULL,
  `Sub-area-home` varchar(50) NOT NULL,
  `Postal-Code-home` varchar(5) NOT NULL,
  `Tel-home` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `addr_home`
--

INSERT INTO `addr_home` (`a_id`, `House-No`, `Moo-home`, `road-home`, `Province-home`, `Area-home`, `Sub-area-home`, `Postal-Code-home`, `Tel-home`) VALUES
(3, '31', '8', '-', 'นครปฐม', 'กำแพงแสน', 'สระสี่มุม', '73140', '-'),
(4, '34', '2', '-', 'นครปฐม', 'เมือง', 'สระกระเทียม', '73000', '-'),
(5, '13', '9', '-', 'ราชบุรี', 'โพธาราม', 'ท่าชุมพล', '70120', '-'),
(6, '31', '8', '-', 'นครปฐม', 'กำแพงแสน', 'สระสี่มุม', '73140', '-'),
(7, '52', '1', '-', 'นครปฐม', 'กำแพงแสน', 'กำแพงแสน', '73100', '0980733220'),
(8, '52', '1', '-', 'นครปฐม', 'กำแพงแสน', 'กำแพงแสน', '73100', '0980733220'),
(9, '25', '15', '-', 'ราชบุรี', 'เมือง', 'ดอนเร่', '70000', '0980754413'),
(10, '25', '15', '-', 'ราชบุรี', 'เมือง', 'ดอนเร่', '70000', '0980754413'),
(11, '212', '12', '-', 'นครปฐม', 'ดอนตูม', 'สามง่าม', '73150', '0886408164');

-- --------------------------------------------------------

--
-- Table structure for table `addr_work`
--

CREATE TABLE `addr_work` (
  `a_id` int(11) NOT NULL,
  `Work-No` varchar(10) NOT NULL,
  `Moo-work` varchar(50) NOT NULL,
  `road-work` varchar(50) NOT NULL,
  `Province-work` varchar(50) NOT NULL,
  `Area-work` varchar(50) NOT NULL,
  `Sub-area-work` varchar(50) NOT NULL,
  `Postal-Code-work` varchar(5) NOT NULL,
  `Tel-work` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `addr_work`
--

INSERT INTO `addr_work` (`a_id`, `Work-No`, `Moo-work`, `road-work`, `Province-work`, `Area-work`, `Sub-area-work`, `Postal-Code-work`, `Tel-work`) VALUES
(3, '86', '9', '-', 'นครปฐม', 'กำแพงแสน', 'กำแพงแสน', '73140', '-'),
(4, '34', '9', '-', 'นครปฐม', 'กำแพงแสน', 'กำแพงแสน', '73140', '-'),
(5, '13', '9', '-', 'ราชบุรี', 'โพธาราม', 'ท่าชุมพล', '70120', '-'),
(6, '31', '8', '-', 'นครปฐม', 'โพธาราม', 'ท่าชุมพล', '70120', '-'),
(7, '23', '3', '-', 'นครปฐม', 'เมือง', 'พระปฐม', '73000', '0985523263'),
(8, '23', '3', '-', 'นครปฐม', 'เมือง', 'พระปฐม', '73000', '0985523263'),
(9, '23', '3', '-', 'ราชบุรี', 'เมือง', 'ดอนเร่', '71000', '0985523263'),
(10, '23', '3', '-', 'ราชบุรี', 'เมือง', 'ดอนเร่', '71000', '0985523263'),
(11, '151', '15', 'guita', 'huhi', 'saqa', 'wertui', '12345', '0123456789');

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `a_id` int(11) NOT NULL,
  `title` varchar(10) NOT NULL,
  `fname` varchar(60) NOT NULL,
  `lname` varchar(60) NOT NULL,
  `idcard` char(13) NOT NULL,
  `idstd` varchar(9) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `sec` varchar(5) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `date` date NOT NULL,
  `job` varchar(100) NOT NULL,
  `tel` varchar(10) NOT NULL,
  `face` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(30) NOT NULL,
  `upload` varchar(155) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`a_id`, `title`, `fname`, `lname`, `idcard`, `idstd`, `sec`, `sex`, `date`, `job`, `tel`, `face`, `email`, `password`, `upload`) VALUES
(3, 'นาย', 'เมืองแมน', 'สระทองจีน', '1730201354430', '614259041', '61/47', 'ชาย', '2000-03-31', 'นักศึกษา', '0972745063', 'Mannyjung Eiei', 'srathongjeenm@gmail.com', '123456', 'm1.jpg'),
(4, 'นาย', 'ศิวกร', 'รามเรือง', '1730201230215', '614259048', '61/47', 'ชาย', '1999-07-07', 'นักศึกษา', '0993896785', 'Siwakorn Ram', 'siwa@gmail.com', '123456', 'k1.jpg'),
(5, 'นาย', 'ธนกต', 'ตินพ', '1523023698745', '614259034', '61/47', 'ชาย', '2000-02-07', 'นักศึกษา', '0659216799', 'Thanakit', 'Thanakit@gmail.com', '123456', 't1.jpg'),
(6, 'นาย', 'ธันวา', 'กุณทะมุณี', '1730203623456', '614259037', '61/47', 'ชาย', '2000-03-31', 'นักศึกษา', '0956362232', 'Tanva', 'Tanva636@gmail.com', '123456', 'j1.jpg'),
(7, 'นาย', 'ดิเรก', 'สุขสรร', '1300312363021', '614259033', '61/63', 'ชาย', '1999-12-03', 'Developer', '0952315630', 'Dirak suksas', 'Dirak@gmail.com', '123456', 'h1.jpg'),
(8, 'นาย', 'ธนพล', 'ใจตรง', '1523021362533', '614259012', '61/58', 'ชาย', '1999-12-03', 'Developer', '0952315630', 'Thanaphon Jaitong', 'thanaphon6@gmail.com', '123456', 'q1.jpg'),
(9, 'นางสาว', 'ศศิกา', 'กกทอง', '1300312465333', '551259033', '55/63', 'หญิง', '2002-11-21', 'นักศึกษา', '0952315454', 'Sasika Kokthong', 'sasika@gmail.com', '123456', 'g1.jpg'),
(10, 'นางสาว', 'ณัฐณิชา', 'ปั่นเปี่ยมทอง', '1730236531563', '614259012', '61/47', 'หญิง', '1999-05-14', 'นักศึกษา', '0952315454', 'Natthanicha', 'nattha@gmail.com', '123456', 'to1.jpg'),
(11, 'นาย', 'ชวกรณ์', 'บัวแก้ว', '0341126512348', '614259026', '61/47', 'ชาย', '2020-10-26', 'นักศึกษา', '0992126344', 'Chawakorn', 'korn@gmail.com', '123456', 'b68547d8e4923a56bf4d76dcb392d872.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `year`
--

CREATE TABLE `year` (
  `a_id` int(11) NOT NULL,
  `attend` varchar(4) NOT NULL,
  `finish` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `year`
--

INSERT INTO `year` (`a_id`, `attend`, `finish`) VALUES
(3, '2561', '2564'),
(4, '2561', '2564'),
(5, '2559', '2562'),
(6, '2556', '2561'),
(7, '2554', '2561'),
(8, '2554', '2561'),
(9, '2555', '2560'),
(10, '2555', '2560'),
(11, '2554', '2560');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addr_home`
--
ALTER TABLE `addr_home`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `addr_work`
--
ALTER TABLE `addr_work`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `year`
--
ALTER TABLE `year`
  ADD PRIMARY KEY (`a_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addr_home`
--
ALTER TABLE `addr_home`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `addr_work`
--
ALTER TABLE `addr_work`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `year`
--
ALTER TABLE `year`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `addr_home`
--
ALTER TABLE `addr_home`
  ADD CONSTRAINT `addr_home_ibfk_1` FOREIGN KEY (`a_id`) REFERENCES `info` (`a_id`);

--
-- Constraints for table `addr_work`
--
ALTER TABLE `addr_work`
  ADD CONSTRAINT `addr_work_ibfk_1` FOREIGN KEY (`a_id`) REFERENCES `info` (`a_id`);

--
-- Constraints for table `year`
--
ALTER TABLE `year`
  ADD CONSTRAINT `year_ibfk_1` FOREIGN KEY (`a_id`) REFERENCES `info` (`a_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
