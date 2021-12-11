-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2021 at 10:07 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `learn_and_co_66522023`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Admin ID` int(11) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Admin ID`, `Password`) VALUES
(1, 'Mixer4211');

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `Class_id` int(11) NOT NULL,
  `Coursename` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`Class_id`, `Coursename`) VALUES
(1, 'Core Math1'),
(2, 'Biology1'),
(3, 'Economics1'),
(4, 'English1'),
(5, 'Physics1'),
(6, 'Inter-Science1'),
(7, 'Cost Accounting1'),
(8, 'Financial Accounting1'),
(9, 'Chemistry1'),
(10, 'Business Management1'),
(11, 'Government1'),
(12, 'History1'),
(13, 'Economics1'),
(14, 'French1'),
(15, 'Literature 1'),
(16, 'Elective Math1');

-- --------------------------------------------------------

--
-- Table structure for table `classmembers`
--

CREATE TABLE `classmembers` (
  `Classid` int(11) DEFAULT NULL,
  `Student_id1` int(11) DEFAULT NULL,
  `Student_id2` int(11) DEFAULT NULL,
  `Student_id3` int(11) DEFAULT NULL,
  `Student_id4` int(11) DEFAULT NULL,
  `Student_id5` int(11) DEFAULT NULL,
  `Student_id6` int(11) DEFAULT NULL,
  `Student_id7` int(11) DEFAULT NULL,
  `Student_id8` int(11) DEFAULT NULL,
  `Student_id9` int(11) DEFAULT NULL,
  `Student_id10` int(11) DEFAULT NULL,
  `Student_id11` int(11) DEFAULT NULL,
  `Student_id12` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `classmembers`
--

INSERT INTO `classmembers` (`Classid`, `Student_id1`, `Student_id2`, `Student_id3`, `Student_id4`, `Student_id5`, `Student_id6`, `Student_id7`, `Student_id8`, `Student_id9`, `Student_id10`, `Student_id11`, `Student_id12`) VALUES
(1, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, NULL, NULL),
(2, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, NULL, NULL),
(3, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, NULL, NULL),
(4, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, NULL, NULL),
(5, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, NULL, NULL),
(6, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, NULL, NULL),
(7, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, NULL, NULL),
(8, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, NULL, NULL),
(9, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, NULL, NULL),
(10, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, NULL, NULL),
(11, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, NULL, NULL),
(12, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, NULL, NULL),
(13, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52),
(14, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52),
(15, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52),
(16, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52);

-- --------------------------------------------------------

--
-- Table structure for table `groupmembers`
--

CREATE TABLE `groupmembers` (
  `group_ids` int(11) DEFAULT NULL,
  `member_id` int(11) DEFAULT NULL,
  `member_id2` int(11) DEFAULT NULL,
  `member_id3` int(11) DEFAULT NULL,
  `member_id4` int(11) DEFAULT NULL,
  `member_id5` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `groupmembers`
--

INSERT INTO `groupmembers` (`group_ids`, `member_id`, `member_id2`, `member_id3`, `member_id4`, `member_id5`) VALUES
(1, 1, 2, 3, 4, 5),
(2, 6, 7, 8, 9, 10),
(3, 21, 22, 23, 24, 25),
(4, 26, 27, 28, 29, 30),
(5, 31, 32, 33, 34, 35),
(6, 36, 37, 38, 39, 40),
(7, 41, 42, 43, 44, 45),
(8, 46, 47, 48, 49, 50),
(9, 51, 52, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `Student_id` int(11) NOT NULL,
  `Fname` varchar(50) DEFAULT NULL,
  `Lname` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL CHECK (`email` like '%@%.%'),
  `tel` varchar(10) DEFAULT NULL,
  `Pword` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`Student_id`, `Fname`, `Lname`, `email`, `tel`, `Pword`) VALUES
(1, 'Gabyo', 'Lee', 'GabyLee@gmail.com', '211389274', 'dgfhjk'),
(2, 'Lilian', 'Lartey', 'LilLart@yahoo.com', '0211990383', 'Reallyreal2'),
(3, 'Rachel', 'Okai', 'RachelOkai@gmail.com', '0284936473', 'Reallyreal3'),
(4, 'Kwesi', 'Obeng', 'KwesiObeng@yahoo.com', '0200077777', 'Reallyreal4'),
(5, 'Imma', 'Krom', 'ImmaKrom@gmail.com', '0211111456', 'Reallyreal5'),
(6, 'Oppah', 'Lamptey', 'Olamptey@yahoo.com', '0223846374', 'Reallyreal6'),
(7, 'Raymond', 'Nelson', 'RayNEl@gmail.com', '0212238749', 'Reallyreal7'),
(8, 'Isaac', 'Rene', 'IsaacRene@yahoo.com', '0211122295', 'Reallyreal8'),
(9, 'Zoe', 'Abri', 'Zbri@gmail.com', '0244455443', 'Reallyreal9'),
(10, 'Abednego', 'Armah', 'AvednegoArmah@yahoo.com', '0233356489', 'Reallyreal10'),
(11, 'Aaron', 'Ayittey', 'Aaronayittey@yahoo.com', '0244448593', 'Rollyroll1'),
(12, 'Lynda', 'Macron', 'LynMac@gmail.com', '0200219083', 'Rollyroll2'),
(13, 'Issa', 'Abdul', 'IssaAbdul@yahoo.com', '0544272930', 'Rollyroll3'),
(14, 'Rachel', 'Mac', 'RachelMAc@gmail.com', '0544419083', 'Rollyroll4'),
(15, 'Pablo', 'Hermes', 'Pablohermes@yahoo.com', '0298590463', 'Rollyroll5'),
(16, 'Christabel', 'Nina', 'ChrisNina@gmail.com', '0219191919', 'Rollyroll6'),
(17, 'Julius', 'Randle', 'JuliusRandle@yahoo.com', '0233784693', 'Rollyroll7'),
(18, 'Kyrie', 'Mable', 'Kymable@gmail.com', '0255498765', 'Rollyroll8'),
(19, 'Isla', 'Rodri', 'IslaRodri@yahoo.com', '0544123456', 'Rollyroll9'),
(20, 'Kendrick', 'Perkins', 'Kennyperk@gmail.com', '0544020020', 'Rollyroll10'),
(21, 'Issabelle', 'Lee', 'IssaQueye@gmail.com', '0524467893', 'Reallyreal22'),
(22, 'Jackson', 'Lartey', 'JackieLartey@yahoo.com', '0520446472', 'Reallyreal23'),
(23, 'Rachel', 'Okai', 'RaOkai@gmail.com', '0524400893', 'Reallyreal24'),
(24, 'Mia', 'Obeng', 'MiaObeng@yahoo.com', '0527489374', 'Reallyreal25'),
(25, 'Cecil', 'Krom', 'Cecilkrom@gmail.com', '0208564738', 'Reallyreal26'),
(26, 'Hughes', 'Lamptey', 'HughesLamptey@yahoo.com', '0220849374', 'Reallyreal27'),
(27, 'Raphael', 'Nelson', 'RaphaelNel@gmail.com', '0210938957', 'Reallyreal28'),
(28, 'Paige', 'Rene', 'PaigeRene@yahoo.com', '0233284756', 'Reallyreal29'),
(29, 'Sage', 'Abri', 'SageAbri@gmail.com', '0532467893', 'Reallyreal30'),
(30, 'Selah', 'Armah', 'SelahArmah@yahoo.com', '0585937472', 'Reallyreal31'),
(31, 'Richmond', 'Osei', 'RichOsei@gmail.com', '0211389224', 'Reallyreal11'),
(32, 'Seth', 'Owusu', 'SethOwusu@yahoo.com', '0211373945', 'Reallyreal12'),
(33, 'Liangelo', 'Ocran', 'LiangeloOcran@gmail.com', '0222000876', 'Reallyreal13'),
(34, 'Lenny', 'Prempeh', 'LenPrem@yahoo.com', '0200077787', 'Reallyreal14'),
(35, 'Immanuel', 'Keta', 'ImmaKeta@gmail.com', '0291111456', 'Reallyreal15'),
(36, 'Okpoti', 'Lamptey', 'Oklamptey@yahoo.com', '0862346374', 'Reallyreal16'),
(37, 'Cecilia', 'Marfo', 'Cmarfo@gmail.com', '0879642749', 'Reallyreal17'),
(38, 'Ishmael', 'Brahimi', 'IshBrahi@yahoo.com', '0657229533', 'Reallyreal18'),
(39, 'Fatima', 'Adzo', 'FatiAdzo@gmail.com', '0243699683', 'Reallyreal19'),
(40, 'Naki', 'Arnold', 'NakiArnold@yahoo.com', '0299977783', 'Reallyreal20'),
(41, 'Afia', 'Lindor', 'AfiaLindor@yahoo.com', '0776565489', 'Reallyreal21'),
(42, 'Lilo', 'Osei', 'LiloOsei@gmail.com', '0598400893', 'Reallyreal32'),
(43, 'Perkins', 'Owusu', 'PerkOwusu@gmail.com', '0328764830', 'Reallyreal33'),
(44, 'Albert', 'Ocran', 'AlbertOcran@gmail.com', '0290487462', 'Reallyreal34'),
(45, 'Zoey', 'Prempeh', 'ZPremp@gmail.com', '0798374633', 'Reallyreal35'),
(46, 'Obo', 'Keta', 'OboKeta@gmail.com', '0268050531', 'Reallyreal36'),
(47, 'Hillary', 'Lamptey', 'HillaryLamptey@gmail.com', '0524420893', 'Reallyreal37'),
(48, 'Abel', 'Marfo', 'AbelMarfo@gmail.com', '0867543893', 'Reallyreal38'),
(49, 'Esau', 'Brahimi', 'EsauBrahimi@gmail.com', '0101300893', 'Reallyreal39'),
(50, 'Zainabu', 'Adzo', 'ZainAdzo@gmail.com', '0289737893', 'Reallyreal40'),
(51, 'Maki', 'Arnold', 'MakiArnold @gmail.com', '0524890893', 'Reallyreal41'),
(52, 'Eric', 'Lindor', 'EricLin@gmail.com', '0505311800', 'Reallyreal42'),
(53, 'Salome', 'Real', 'Salomereal@gmail.com', '0999263748', 'Rollyroll11'),
(54, 'Xing', 'Yong', 'Xiyong@gmail.com', '0202120210', 'Rollyroll12'),
(55, 'Naruhina', 'Perkins', 'Naruperk@gmail.com', '0202220220', 'Rollyroll13'),
(56, 'Xhudah', 'Yakung', 'Xhuyaku@gmail.com', '0202320230', 'Rollyroll14'),
(57, 'Jack', 'Sparrow', 'POTc@gmail.com', '0202420240', 'Rollyroll15'),
(58, 'Barbosa', 'Bosa', 'Bosa@gmail.com', '0202520250', 'Rollyroll16');

-- --------------------------------------------------------

--
-- Table structure for table `studentclasses`
--

CREATE TABLE `studentclasses` (
  `student_id` int(11) DEFAULT NULL,
  `class_id1` int(11) DEFAULT NULL,
  `class_id2` int(11) DEFAULT NULL,
  `class_id3` int(11) DEFAULT NULL,
  `class_id4` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studentclasses`
--

INSERT INTO `studentclasses` (`student_id`, `class_id1`, `class_id2`, `class_id3`, `class_id4`) VALUES
(1, 1, 2, 3, 4),
(2, 1, 2, 3, 4),
(3, 1, 2, 3, 4),
(4, 1, 2, 3, 4),
(5, 1, 2, 3, 4),
(6, 1, 2, 3, 4),
(7, 1, 2, 3, 4),
(8, 1, 2, 3, 4),
(9, 1, 2, 3, 4),
(10, 1, 2, 3, 4),
(21, 5, 6, 7, 8),
(22, 5, 6, 7, 8),
(23, 5, 6, 7, 8),
(24, 5, 6, 7, 8),
(25, 5, 6, 7, 8),
(26, 5, 6, 7, 8),
(27, 5, 6, 7, 8),
(28, 5, 6, 7, 8),
(29, 5, 6, 7, 8),
(30, 5, 6, 7, 8),
(31, 9, 10, 11, 12),
(32, 9, 10, 11, 12),
(33, 9, 10, 11, 12),
(34, 9, 10, 11, 12),
(35, 9, 10, 11, 12),
(36, 9, 10, 11, 12),
(37, 9, 10, 11, 12),
(38, 9, 10, 11, 12),
(39, 9, 10, 11, 12),
(40, 9, 10, 11, 12),
(41, 13, 14, 15, 16),
(42, 13, 14, 15, 16),
(43, 13, 14, 15, 16),
(44, 13, 14, 15, 16),
(45, 13, 14, 15, 16),
(46, 13, 14, 15, 16),
(47, 13, 14, 15, 16),
(48, 13, 14, 15, 16),
(49, 13, 14, 15, 16),
(50, 13, 14, 15, 16),
(51, 13, 14, 15, 16),
(52, 13, 14, 15, 16);

-- --------------------------------------------------------

--
-- Table structure for table `study_group`
--

CREATE TABLE `study_group` (
  `group_id` int(11) NOT NULL,
  `number_of_members` int(11) NOT NULL
) ;

--
-- Dumping data for table `study_group`
--

INSERT INTO `study_group` (`group_id`, `number_of_members`) VALUES
(1, 4),
(2, 4),
(3, 4),
(4, 4),
(5, 4),
(6, 4),
(7, 4),
(8, 4),
(9, 4),
(10, 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Admin ID`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`Class_id`);

--
-- Indexes for table `classmembers`
--
ALTER TABLE `classmembers`
  ADD KEY `Student_id1` (`Student_id1`),
  ADD KEY `Student_id2` (`Student_id2`),
  ADD KEY `Student_id3` (`Student_id3`),
  ADD KEY `Student_id4` (`Student_id4`),
  ADD KEY `Student_id5` (`Student_id5`),
  ADD KEY `Student_id6` (`Student_id6`),
  ADD KEY `Student_id7` (`Student_id7`),
  ADD KEY `Student_id8` (`Student_id8`),
  ADD KEY `Student_id9` (`Student_id9`),
  ADD KEY `Student_id10` (`Student_id10`),
  ADD KEY `Student_id11` (`Student_id11`),
  ADD KEY `Student_id12` (`Student_id12`);

--
-- Indexes for table `groupmembers`
--
ALTER TABLE `groupmembers`
  ADD KEY `ind_groupmem` (`group_ids`,`member_id`,`member_id2`,`member_id3`,`member_id4`),
  ADD KEY `member_id` (`member_id`),
  ADD KEY `member_id2` (`member_id2`),
  ADD KEY `member_id3` (`member_id3`),
  ADD KEY `member_id4` (`member_id4`),
  ADD KEY `member_id5` (`member_id5`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`Student_id`,`Pword`);

--
-- Indexes for table `studentclasses`
--
ALTER TABLE `studentclasses`
  ADD KEY `student_id` (`student_id`),
  ADD KEY `class_id1` (`class_id1`),
  ADD KEY `class_id2` (`class_id2`),
  ADD KEY `class_id3` (`class_id3`),
  ADD KEY `class_id4` (`class_id4`);

--
-- Indexes for table `study_group`
--
ALTER TABLE `study_group`
  ADD PRIMARY KEY (`group_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Admin ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `Class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `Student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `study_group`
--
ALTER TABLE `study_group`
  MODIFY `group_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `classmembers`
--
ALTER TABLE `classmembers`
  ADD CONSTRAINT `classmembers_ibfk_1` FOREIGN KEY (`Student_id1`) REFERENCES `student` (`Student_id`),
  ADD CONSTRAINT `classmembers_ibfk_10` FOREIGN KEY (`Student_id10`) REFERENCES `student` (`Student_id`),
  ADD CONSTRAINT `classmembers_ibfk_11` FOREIGN KEY (`Student_id11`) REFERENCES `student` (`Student_id`),
  ADD CONSTRAINT `classmembers_ibfk_12` FOREIGN KEY (`Student_id12`) REFERENCES `student` (`Student_id`),
  ADD CONSTRAINT `classmembers_ibfk_2` FOREIGN KEY (`Student_id2`) REFERENCES `student` (`Student_id`),
  ADD CONSTRAINT `classmembers_ibfk_3` FOREIGN KEY (`Student_id3`) REFERENCES `student` (`Student_id`),
  ADD CONSTRAINT `classmembers_ibfk_4` FOREIGN KEY (`Student_id4`) REFERENCES `student` (`Student_id`),
  ADD CONSTRAINT `classmembers_ibfk_5` FOREIGN KEY (`Student_id5`) REFERENCES `student` (`Student_id`),
  ADD CONSTRAINT `classmembers_ibfk_6` FOREIGN KEY (`Student_id6`) REFERENCES `student` (`Student_id`),
  ADD CONSTRAINT `classmembers_ibfk_7` FOREIGN KEY (`Student_id7`) REFERENCES `student` (`Student_id`),
  ADD CONSTRAINT `classmembers_ibfk_8` FOREIGN KEY (`Student_id8`) REFERENCES `student` (`Student_id`),
  ADD CONSTRAINT `classmembers_ibfk_9` FOREIGN KEY (`Student_id9`) REFERENCES `student` (`Student_id`);

--
-- Constraints for table `groupmembers`
--
ALTER TABLE `groupmembers`
  ADD CONSTRAINT `groupmembers_ibfk_1` FOREIGN KEY (`group_ids`) REFERENCES `study_group` (`group_id`),
  ADD CONSTRAINT `groupmembers_ibfk_2` FOREIGN KEY (`member_id`) REFERENCES `student` (`Student_id`),
  ADD CONSTRAINT `groupmembers_ibfk_3` FOREIGN KEY (`member_id2`) REFERENCES `student` (`Student_id`),
  ADD CONSTRAINT `groupmembers_ibfk_4` FOREIGN KEY (`member_id3`) REFERENCES `student` (`Student_id`),
  ADD CONSTRAINT `groupmembers_ibfk_5` FOREIGN KEY (`member_id4`) REFERENCES `student` (`Student_id`),
  ADD CONSTRAINT `groupmembers_ibfk_6` FOREIGN KEY (`member_id5`) REFERENCES `student` (`Student_id`);

--
-- Constraints for table `studentclasses`
--
ALTER TABLE `studentclasses`
  ADD CONSTRAINT `studentclasses_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `student` (`Student_id`),
  ADD CONSTRAINT `studentclasses_ibfk_2` FOREIGN KEY (`class_id1`) REFERENCES `class` (`Class_id`),
  ADD CONSTRAINT `studentclasses_ibfk_3` FOREIGN KEY (`class_id2`) REFERENCES `class` (`Class_id`),
  ADD CONSTRAINT `studentclasses_ibfk_4` FOREIGN KEY (`class_id3`) REFERENCES `class` (`Class_id`),
  ADD CONSTRAINT `studentclasses_ibfk_5` FOREIGN KEY (`class_id4`) REFERENCES `class` (`Class_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
