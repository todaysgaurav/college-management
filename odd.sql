-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 05, 2018 at 11:33 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `odd`
--

-- --------------------------------------------------------

--
-- Table structure for table `Admin`
--

CREATE TABLE `Admin` (
  `user_id` varchar(10) NOT NULL,
  `pwd` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Admin`
--

INSERT INTO `Admin` (`user_id`, `pwd`) VALUES
('ankit', 'krati');

-- --------------------------------------------------------

--
-- Table structure for table `Courses`
--

CREATE TABLE `Courses` (
  `course` varchar(20) DEFAULT NULL,
  `branch` varchar(20) DEFAULT NULL,
  `semester` int(11) DEFAULT NULL,
  `subject` varchar(20) DEFAULT NULL,
  `teacher` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Courses`
--

INSERT INTO `Courses` (`course`, `branch`, `semester`, `subject`, `teacher`) VALUES
('MCA', 'MCA', 3, 'Algorithm', 'Rupesh'),
('MCA', 'MCA', 3, 'OBM', 'Dharmendra'),
('MCA', 'MCA', 3, 'Operating System', 'Dinesh'),
('MCA', 'MCA', 3, 'Soft Computing', 'Amritesh'),
('MCA', 'MCA', 3, 'DBMS', 'Parth'),
('MCA', 'MCA', 3, 'Web Lab', 'Piyush'),
('MCA', 'MCA', 1, 'FOL', 'Ajeet'),
('MCA', 'MCA', 1, 'DCO', 'Rajesh'),
('MCA', 'MCA', 1, 'C Programming', 'Madan'),
('MCA', 'MCA', 1, 'IT Management', 'Rakesh'),
('MCA', 'MCA', 1, 'Shell Programming', 'Ajeet'),
('MCA', 'MCA', 5, 'Multimedia Technolog', 'Rajeeta'),
('MCA', 'MCA', 5, 'E Commerce', 'KK'),
('MCA', 'MCA', 5, 'Professional Ethics', 'Anil'),
('MCA', 'MCA', 5, 'Software Project Man', 'Mayank'),
('MCA', 'MCA', 5, 'Professional Electiv', 'Madan'),
('MCA', 'MCA', 5, 'Professional Electiv', 'Madan'),
('M.Tech', 'CS', 1, 'Research Methology', 'Suneeta'),
('M.Tech', 'CS', 1, 'Programming Lab', 'Madan'),
('M.Tech', 'CS', 1, 'Elective 1', 'Neeraj'),
('M.Tech', 'CS', 1, 'Elective 2', 'Suneeta'),
('M.Tech', 'CS', 1, 'Elective 3', 'Anil'),
('M.Tech', 'CS', 3, 'Project', 'Anil'),
('M.Tech', 'CS', 3, 'Term Project', 'Madan'),
('M.Tech', 'SE', 1, 'Research Methology', 'Suneeta'),
('M.Tech', 'SE', 1, 'Programming Lab 2', 'Mayank'),
('M.Tech', 'SE', 1, 'Elective 1', 'Dinesh'),
('M.Tech', 'SE', 1, 'Elective 2', 'Dharmendra'),
('M.Tech', 'SE', 1, 'Elective 3', 'Rupesh'),
('M.Tech', 'SE', 3, 'Project', 'Mayank'),
('M.Tech', 'SE', 3, 'Term Project', 'Anil'),
('M.Tech', 'IT', 1, 'Research Methology', 'Neeraj'),
('M.Tech', 'IT', 1, 'Programming Lab 1', 'Piyush'),
('M.Tech', 'IT', 1, 'Elective 1', 'KK'),
('M.Tech', 'IT', 1, 'Elective 2', 'Mayank'),
('M.Tech', 'IT', 1, 'Elective 3', 'Piyush'),
('M.Tech', 'IT', 3, 'Project', 'Ajeet'),
('M.Tech', 'IT', 3, 'Term Project', 'Anil'),
('B.Tech', 'CS', 3, 'Data Strcuture', 'Manoj'),
('B.Tech', 'CS', 3, 'Anolog &amp; Digital', 'Rajesh'),
('B.Tech', 'CS', 3, 'IT Management', 'Rakesh'),
('B.Tech', 'CS', 3, 'FOL', 'Ajeet'),
('B.Tech', 'CS', 3, 'OOP', 'Dharmendra'),
('B.Tech', 'CS', 5, 'Microprocessor', 'Rajesh'),
('B.Tech', 'CS', 5, 'Operating System', 'Dinesh'),
('B.Tech', 'CS', 5, 'OOM', 'Dharmendra'),
('B.Tech', 'CS', 5, 'Operationa Research', 'Piyush'),
('B.Tech', 'CS', 5, 'Computer Architectur', 'Rajesh'),
('B.Tech', 'CS', 7, 'Distributed System', 'Suneeta'),
('B.Tech', 'CS', 7, 'Mobile Networks', 'Neeraj'),
('B.Tech', 'CS', 7, 'Open Elective 1', 'Madan'),
('B.Tech', 'CS', 7, 'Professional Electiv', 'KK'),
('B.Tech', 'CS', 7, 'Professional Electiv', 'Mayank'),
('B.Tech', 'CS', 7, 'Distributed System L', 'Rupesh'),
('B.Tech', 'CS', 7, 'Project', 'Piyush'),
('B.Tech', 'IT', 3, 'Data Strcuture', 'Manoj'),
('B.Tech', 'IT', 3, 'IT Management', 'Rakesh'),
('B.Tech', 'IT', 3, 'Anolog &amp; Digital', 'Rajesh'),
('B.Tech', 'IT', 3, 'FOL', 'Ajeet'),
('B.Tech', 'IT', 3, 'OOP', 'Dharmendra'),
('B.Tech', 'IT', 5, 'Microprocessor', 'Rajesh'),
('B.Tech', 'IT', 5, 'Operating System', 'Divya'),
('B.Tech', 'IT', 5, 'DBMS', 'Parth'),
('B.Tech', 'IT', 5, 'OOM', 'Dharmendra'),
('B.Tech', 'IT', 5, 'Operationa Research', 'Piyush'),
('B.Tech', 'IT', 5, 'Computer Architectur', 'Rajesh'),
('B.Tech', 'IT', 5, 'Programming tool 2', 'Piyush'),
('B.Tech', 'IT', 7, 'Image Processing', 'Piyush'),
('B.Tech', 'IT', 7, 'Mobile Networks', 'Rajesh'),
('B.Tech', 'IT', 7, 'Open Elective 1', 'Piyush'),
('B.Tech', 'IT', 7, 'Professional Electiv', 'Anil'),
('B.Tech', 'IT', 7, 'Professional Electiv', 'Madan'),
('B.Tech', 'IT', 7, 'Project', 'Rupesh'),
('B.Tech', 'CS', 1, 'Physics 1', 'Rakesh'),
('B.Tech', 'CS', 1, 'English', 'Piyush'),
('B.Tech', 'CS', 1, 'Chemistry', 'Rupesh'),
('B.Tech', 'CS', 1, 'Mathematics 1', 'Dharmendra'),
('B.Tech', 'CS', 1, 'Engineer Graphics', 'Rajeeta'),
('B.Tech', 'CS', 1, 'Communication Skill', 'Piyush'),
('B.Tech', 'IT', 1, 'Physics 1', 'Rakesh'),
('B.Tech', 'IT', 1, 'English', 'Piyush'),
('B.Tech', 'IT', 1, 'Chemistry', 'Parth'),
('B.Tech', 'IT', 1, 'Mathematics 1', 'Dharmendra'),
('B.Tech', 'IT', 1, 'Engineer Graphics', 'Rajeeta'),
('B.Tech', 'IT', 1, 'Communication Skill', 'Piyush');

-- --------------------------------------------------------

--
-- Table structure for table `Teachers`
--

CREATE TABLE `Teachers` (
  `user_id` varchar(20) NOT NULL,
  `pwd` varchar(20) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `mname` varchar(20) DEFAULT NULL,
  `lname` varchar(20) DEFAULT NULL,
  `email` varchar(30) NOT NULL,
  `mob` varchar(11) NOT NULL,
  `address_line1` varchar(50) NOT NULL,
  `address_line2` varchar(50) DEFAULT NULL,
  `address_line3` varchar(50) DEFAULT NULL,
  `subject` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Teachers`
--

INSERT INTO `Teachers` (`user_id`, `pwd`, `fname`, `mname`, `lname`, `email`, `mob`, `address_line1`, `address_line2`, `address_line3`, `subject`) VALUES
('Ajeet', 'ajeet123', 'Ajeet', 'Babu', 'Pandey', 'ajeet@mnnit.ac.in', '9546321780', '78/12', 'Katra', 'Allahabad', 'FOL'),
('Amritesh', 'amritesh', 'Amritesh', '', 'Singh', 'amritesh@mnnit.ac.in', '9455155469', '13/12', 'Civil Lines', 'Allahabad', 'Soft Computing'),
('Anil', 'anil123', 'Anil', '', 'Singh', 'anil@mnnit.ac.in', '8796541230', '88/11', 'Civil Lines', 'Allahabad', 'Professional Ethics'),
('Dharmendra', 'dharmendra123', 'Dharmendra', 'Kumar', 'Yadav', 'dky@mnnit.ac.in', '8858352452', '03 Colony MNNIT', '', '', 'OBM'),
('Dinesh', 'dinesh123', 'Dinesh', '', '', 'dinesh@mnnit.ac.in', '9140552958', '01 Colony MNNIT', '', '', 'Operating System'),
('Divya', 'divya123', 'Divya', '', 'Kumar', 'divya@mnnit.ac.in', '7485693210', '89/321', 'MNNIT', 'Allahabad', 'Alogrithm'),
('KK', 'kk123', 'KK', '', 'Mishra', 'kk@mnnit.ac.in', '9852367410', '07 Civil  Colony', 'MNNIT', 'Allahabad', 'E Commerce'),
('Madan', 'madan123', 'Madan', 'Mohan', 'Gore', 'madan@mnnit.ac.in', '7390054040', ' 05 Colony MNNIT', ' ', ' ', 'C Programming'),
('Manoj', 'manoj123', 'Manoj', '', 'Wariya', 'manoj@mnnit.ac.in', '7845963210', '98/43', 'Civil Colony', 'Allahabad', 'DS'),
('Mayank', 'mayank123', 'Mayank', '', 'Pandey', 'mayank@mnnit.ac.in', '7845963210', '88/90', 'Civil Lines', 'Allahabad', 'Software Project Man'),
('Neeraj', 'Tyagi', 'Neeraj', '', 'Tyagi', 'neeraj@mnnit.ac.in', '7845963210', '78/56', 'MNNIT', 'Allahabad', 'Networking'),
('Parth', 'parth123', 'Parth', '', 'Srivastava', 'parth@mnnit.ac.in', '8858352452', '22/13', 'Civil Lines', 'Allahabad', 'DBMS'),
('Piyush', 'piyush123', 'Piyush', '', 'Kumar', 'piyush@mnnit.ac.in', '9140552958', 'IIIT', 'Allahabad', '', 'Web Lab'),
('Rajeeta', 'rajeeta', 'Rajeeta', '', 'B', 'rajeeta@mnnit.ac.in', '9874512360', '12/15', 'Katra', 'Allahabad', 'Multimedia Technolog'),
('Rajesh', 'rajesh123', 'Rajesh', '', 'Tripathi', 'rajesh@mnnit.ac.in', '8009423756', '05 Colony MNNIT', '', '', 'DCO'),
('Rakesh', 'rakesh123', 'Rakesh', 'Kumar', '', 'rakesh@mnnit.ac.in', '9874561230', '98/12', 'Civil Lines', 'Allahabad', 'IT Management'),
('Rupesh', 'rupesh123', 'Rupesh', '', '', 'rupesh@mnnit.ac.in', '9140552958', '02 Colony MNNIT', '', '', 'Algorithm'),
('Shashank', 'ahashank123', 'Shashank', '', 'Srivastava', 'shashank@mnnit.ac.in', '7894561423', '12/13', 'Civil Lines', 'Allahabad', 'Data Strcuture'),
('Suneeta', 'suneeta123', 'Suneeta', '', 'Agarwal', 'suneeta@mnnit.ac.in', '9685321740', '76/123', 'MNNIT', 'Allahabad', 'Operating System');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Admin`
--
ALTER TABLE `Admin`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `Courses`
--
ALTER TABLE `Courses`
  ADD KEY `teacher` (`teacher`);

--
-- Indexes for table `Teachers`
--
ALTER TABLE `Teachers`
  ADD PRIMARY KEY (`user_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Courses`
--
ALTER TABLE `Courses`
  ADD CONSTRAINT `Courses_ibfk_1` FOREIGN KEY (`teacher`) REFERENCES `Teachers` (`user_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
