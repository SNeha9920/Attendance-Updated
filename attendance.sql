-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2022 at 07:03 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `attendance`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `student_id` varchar(50) NOT NULL,
  `subject_id` varchar(20) NOT NULL,
  `attendance` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL DEFAULT '{"days":{}}'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`student_id`, `subject_id`, `attendance`) VALUES
('2019FHCO001', '14', '{\"days\": {\"2022-01\": 45}}'),
('2019FHCO001', '15', '{\"days\": {\"2022-01\": 20}}'),
('2019FHCO002', '14', '{\"days\": {\"2022-01\": 15}}'),
('2019FHCO002', '15', '{\"days\": {\"2022-01\": 30}}');

-- --------------------------------------------------------

--
-- Table structure for table `position`
--

CREATE TABLE `position` (
  `teacher_id` bigint(20) NOT NULL,
  `subject_id` varchar(20) DEFAULT NULL,
  `incharge` varchar(50) NOT NULL,
  `academic_year` varchar(50) NOT NULL,
  `scheme` varchar(50) NOT NULL,
  `year` varchar(50) NOT NULL,
  `semester` varchar(50) NOT NULL,
  `division` varchar(50) NOT NULL,
  `batch` varchar(50) DEFAULT NULL,
  `lectures_taken` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL DEFAULT '{"days":{}}' CHECK (json_valid(`lectures_taken`))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` varchar(25) NOT NULL,
  `roll_no` bigint(20) NOT NULL,
  `name` varchar(200) NOT NULL,
  `academic_year` varchar(50) NOT NULL,
  `scheme` varchar(50) NOT NULL,
  `mother_name` varchar(50) NOT NULL,
  `year` varchar(50) NOT NULL,
  `semester` varchar(50) NOT NULL,
  `division` enum('A','B','C') NOT NULL,
  `batch` varchar(10) NOT NULL,
  `DLOC` varchar(50) DEFAULT NULL,
  `ILOC` varchar(50) DEFAULT NULL,
  `student_email` varchar(100) NOT NULL,
  `parent_email` varchar(100) NOT NULL,
  `mobile_no` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `roll_no`, `name`, `academic_year`, `scheme`, `mother_name`, `year`, `semester`, `division`, `batch`, `DLOC`, `ILOC`, `student_email`, `parent_email`, `mobile_no`) VALUES
('2019FHCO001', 56, 'Abc Xyz', '2021-22', 'R-19', 'lmn', 'SE', 'Semester 4', 'B', 'B2', '', '', 'jaykumarsankpal92@gmail.com', 'xyz@gmail.com', '4545454545'),
('2019FHCO002', 28, 'Jaykumar Sankpal', '2021-22', 'R-19', 'lmn', 'SE', 'Semester 4', 'B', 'B2', '', '', 'nehasawant.9920@gmail.com', 'nehasawant.9920@gmail.com', '4545454545');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `subject_id` varchar(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `year` varchar(50) NOT NULL,
  `semester` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subject_id`, `name`, `year`, `semester`) VALUES
('1', 'Engineering Mathematics 3', 'SE', 'Semester 3'),
('10', 'Miniproject 1A', 'SE', 'Semester 3'),
('11', 'Engineering Mathematics 4', 'SE', 'Semester 4'),
('12', 'Analysis of Algorithm', 'SE', 'Semester 4'),
('13', 'Analysis of Algorithm Lab', 'SE', 'Semester 4'),
('14', 'Data Base Management Systems', 'SE', 'Semester 4'),
('15', 'Data Base Management Systems Lab', 'SE', 'Semester 4'),
('16', 'Operating System', 'SE', 'Semester 4'),
('17', 'Operating System Lab', 'SE', 'Semester 4'),
('18', 'Microprocessor', 'SE', 'Semester 4'),
('19', 'Microprocessor Lab', 'SE', 'Semester 4'),
('2', 'Data Structures', 'SE', 'Semester 3'),
('20', 'SBLC: Python Programming', 'SE', 'Semester 4'),
('21', 'SBLC: Python Programming Lab', 'SE', 'Semester 4'),
('22', 'Miniproject 1B', 'SE', 'Semester 4'),
('23', 'Theoretical computer science', 'TE', 'Semester 5'),
('24', 'Data warehousing and mining', 'TE', 'Semester 5'),
('25', 'Data warehousing and mining Lab', 'TE', 'Semester 5'),
('26', 'Software Engineering', 'TE', 'Semester 5'),
('27', 'Software Engineering Lab', 'TE', 'Semester 5'),
('28', 'Computer Network', 'TE', 'Semester 5'),
('29', 'Computer Network Lab', 'TE', 'Semester 5'),
('3', 'Data Structure Lab', 'SE', 'Semester 3'),
('30', 'Department Level Optional Course I - Internet Programming', 'TE', 'Semester 5'),
('31', 'Department Level Optional Course- Advanced DBMS', 'TE', 'Semester 5'),
('32', 'Department Level Optional Course- Advanced DBMS', 'TE', 'Semester 5'),
('33', 'Business Communication & Ethics II', 'TE', 'Semester 5'),
('34', 'Business Communication & Ethics II Lab', 'TE', 'Semester 5'),
('35', 'Miniproject 2A', 'TE', 'Semester 5'),
('36', 'System Programming and Compiler Construction', 'TE', 'Semester 6'),
('37', 'System Programming and Compiler Construction Lab', 'TE', 'Semester 6'),
('38', 'Cryptography and System Security', 'TE', 'Semester 6'),
('39', 'Cryptography and System Security Lab', 'TE', 'Semester 6'),
('4', 'Computer Graphics ', 'SE', 'Semester 3'),
('40', 'Mobile Computing', 'TE', 'Semester 6'),
('41', 'Mobile Computing Lab', 'TE', 'Semester 6'),
('42', 'Artificial Intelligence', 'TE', 'Semester 6'),
('43', 'Artificial Intelligence Lab', 'TE', 'Semester 6'),
('44', 'SBLC : Cloud Computing', 'TE', 'Semester 6'),
('45', 'Department Level Optional Course II - Internet Of Things', 'TE', 'Semester 6'),
('46', 'Department Level Optional Course II - Digital Signal & Image Processing', 'TE', 'Semester 6'),
('47', 'Department Level Optional Course II - Quantitative Analysis', 'TE', 'Semester 6'),
('48', 'Miniproject 2B', 'TE', 'Semester 6'),
('49', 'Digital Signal and Image Processing', 'BE', 'Semester 7'),
('5', 'Computer Graphics Lab', 'SE', 'Semester 3'),
('50', 'Digital Signal and Image Processing Lab', 'BE', 'Semester 7'),
('51', 'Mobile Communication and Computing', 'BE', 'Semester 7'),
('52', 'Mobile Communication and Computing Lab', 'BE', 'Semester 7'),
('53', 'Artificial Intelligence and Soft Computing', 'BE', 'Semester 7'),
('54', 'Artificial Intelligence and Soft Computing Lab', 'BE', 'Semester 7'),
('55', 'Network Threats and Attacks', 'BE', 'Semester 7'),
('56', 'Network Threats and Attacks Lab', 'BE', 'Semester 7'),
('57', 'Computational Lab 1', 'BE', 'Semester 7'),
('58', 'Major Project 1', 'BE', 'Semester 7'),
('59', 'Human Machine Interaction ', 'BE', 'Semester 8'),
('6', 'Discrete Sturctures and Graph Theory', 'SE', 'Semester 3'),
('60', 'Human Machine Interaction Lab', 'BE', 'Semester 8'),
('61', 'Distributed Computing', 'BE', 'Semester 8'),
('62', 'Distributed Computing Lab', 'BE', 'Semester 8'),
('63', 'Cloud computing', 'BE', 'Semester 8'),
('64', 'Cloud computing lab', 'BE', 'Semester 8'),
('65', 'Computational Lab 2', 'BE', 'Semester 8'),
('66', 'Major Project 2', 'BE', 'Semester 8'),
('7', 'Digital Logic and Computer Organization and Architecture', 'SE', 'Semester 3'),
('8', 'Digital Logic and Computer Organization and Architecture Lab', 'SE', 'Semester 3'),
('9', 'OOPM: Java Programming', 'SE', 'Semester 3');

-- --------------------------------------------------------

--
-- Table structure for table `term_work`
--

CREATE TABLE `term_work` (
  `student_id` varchar(50) NOT NULL,
  `subject_id` varchar(20) NOT NULL,
  `attendancemarks` int(11) NOT NULL,
  `assignment` int(11) DEFAULT NULL,
  `presentation` int(11) DEFAULT NULL,
  `exp_grade` int(11) NOT NULL,
  `overall` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `teacher_id` bigint(20) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `middle_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `gender` enum('male','female') NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`teacher_id`, `first_name`, `middle_name`, `last_name`, `gender`, `email`, `password`) VALUES
(1, 'Amol', 'Parshram', 'Pande', 'male', 'hodcomp@dmce.ac.in', 'ac1ab23d6288711be64a25bf13432baf1e60b2bd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD UNIQUE KEY `attendance_stu_sub_unique` (`student_id`,`subject_id`);

--
-- Indexes for table `position`
--
ALTER TABLE `position`
  ADD UNIQUE KEY `position_unique` (`teacher_id`,`subject_id`,`incharge`,`academic_year`,`scheme`,`year`,`semester`,`division`,`batch`),
  ADD KEY `position_subject_id` (`subject_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`subject_id`);

--
-- Indexes for table `term_work`
--
ALTER TABLE `term_work`
  ADD UNIQUE KEY `position_stu_sub_unique` (`student_id`,`subject_id`),
  ADD KEY `term_work_subject_id` (`subject_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`teacher_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `teacher_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attendance`
--
ALTER TABLE `attendance`
  ADD CONSTRAINT `attendance_student_id` FOREIGN KEY (`student_id`) REFERENCES `student` (`student_id`),
  ADD CONSTRAINT `attendance_subject_id` FOREIGN KEY (`subject_id`) REFERENCES `subject` (`subject_id`);

--
-- Constraints for table `position`
--
ALTER TABLE `position`
  ADD CONSTRAINT `position_subject_id` FOREIGN KEY (`subject_id`) REFERENCES `subject` (`subject_id`),
  ADD CONSTRAINT `position_teacher_id` FOREIGN KEY (`teacher_id`) REFERENCES `user` (`teacher_id`);

--
-- Constraints for table `term_work`
--
ALTER TABLE `term_work`
  ADD CONSTRAINT `term_work_student_id` FOREIGN KEY (`student_id`) REFERENCES `student` (`student_id`),
  ADD CONSTRAINT `term_work_subject_id` FOREIGN KEY (`subject_id`) REFERENCES `subject` (`subject_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
