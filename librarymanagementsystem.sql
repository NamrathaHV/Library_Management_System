-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2021 at 04:38 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `librarymanagementsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ADMIN_ID` int(11) NOT NULL,
  `BRANCH_ID` int(11) NOT NULL,
  `PASSWORD` varchar(255) NOT NULL,
  `PHONE_NUMBER` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ADMIN_ID`, `BRANCH_ID`, `PASSWORD`, `PHONE_NUMBER`) VALUES
(1000000001, 10000, '827ccb0eea8a706c4c34a16891f84e7b', 1234599011),
(1000000002, 10001, '827ccb0eea8a706c4c34a16891f84e7b', 1234567892),
(1000000003, 10002, '827ccb0eea8a706c4c34a16891f84e7b', 2147483647),
(1000000004, 10003, '827ccb0eea8a706c4c34a16891f84e7b', 2134454577),
(1000000005, 10004, '827ccb0eea8a706c4c34a16891f84e7b', 2141012345),
(1000000006, 10005, '827ccb0eea8a706c4c34a16891f84e7b', 2121777777);

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE `authors` (
  `AUTHOR_NAME` varchar(20) NOT NULL,
  `AUTHOR_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`AUTHOR_NAME`, `AUTHOR_ID`) VALUES
('A. P. Godse', 1000000000),
('A.M. Jones', 1000000005),
('B. S. Grewal', 1000000009),
('Glencoe McGraw Hill', 1000000006),
('Peter A. Fritzson', 1000000001),
('RD Sharma', 1000000008),
('Reema Thareja', 1000000002),
('S.Sharanya', 1000000004),
('Scott Meyers', 1000000007),
('Siddharth Santosh', 1000000003);

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `ISBN` int(11) NOT NULL,
  `TITLE` varchar(128) NOT NULL,
  `EDITION` int(11) NOT NULL,
  `YEAR_OF_PUBLICATION` int(11) NOT NULL,
  `PRICE` int(11) NOT NULL,
  `BRANCH_ID` int(11) NOT NULL,
  `PUBLISHER_ID` int(11) NOT NULL,
  `AUTHOR_ID` int(11) NOT NULL,
  `SECTION_NO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`ISBN`, `TITLE`, `EDITION`, `YEAR_OF_PUBLICATION`, `PRICE`, `BRANCH_ID`, `PUBLISHER_ID`, `AUTHOR_ID`, `SECTION_NO`) VALUES
(1000000001, 'Computer Fundamentals and Programming in C', 1, 2015, 495, 10001, 1000000002, 1000000002, 100),
(1000000002, 'Object-Oriented Analysis and Design', 2, 2004, 1020, 10003, 1000000000, 1000000003, 100),
(1000000003, 'Algebra 1', 1, 2000, 550, 10003, 1000000003, 1000000006, 111),
(1000000004, 'Algebra 2', 1, 2004, 750, 10003, 1000000003, 1000000006, 111),
(1000000005, 'Java 2', 3, 1997, 1055, 10001, 1000000000, 1000000007, 100),
(1000000006, 'Higher Engineering Mathematics', 2, 1995, 2035, 10002, 1000000000, 1000000009, 111),
(1000000007, 'The Network Designer’s Handbook: 51 CSE', 1, 1999, 350, 10002, 1000000001, 1000000003, 100),
(1000000008, 'Computer Graphics', 4, 1998, 1455, 10004, 1000000004, 1000000001, 100),
(1000000009, 'Basic Electrical Engineering by C. L Wadhwa', 4, 2004, 5505, 10004, 1000000002, 1000000000, 103),
(1000000010, 'Electronic Devices and Circuit Theory', 5, 1997, 755, 10000, 1000000004, 1000000007, 105),
(1000000011, 'A Course in Electronic Measurements and Instrumentation', 1, 2003, 495, 10000, 1000000000, 1000000006, 105),
(1000000012, ' Bioorganic Chemistry', 1, 2000, 1055, 10004, 1000000000, 1000000005, 101),
(1000000013, 'The Development of Jet and Turbine Aero Engines', 1, 1995, 1053, 10005, 1000000001, 1000000008, 107),
(1000000014, 'Organic and Inorganic Chemistry', 1, 1997, 1055, 10001, 1000000003, 1000000007, 110),
(1000000015, 'Fluid Mechanics and Hydraulic Machines', 1, 2015, 1300, 10002, 1000000001, 1000000001, 102),
(1000000016, 'Understanding Smart Sensors', 0, 2008, 3445, 10000, 1000000000, 1000000002, 104),
(1000000017, 'Software Project Management', 1, 1997, 1055, 10000, 1000000002, 1000000003, 106),
(1000000018, 'Fundamentals of Engineering Thermodynamics', 10, 2014, 495, 10000, 1000000003, 1000000007, 108),
(1000000019, 'Introduction to solid-state physics', 7, 2007, 7341, 10000, 1000000001, 1000000007, 109);

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `BRANCH_ID` int(11) NOT NULL,
  `BRANCH_NAME` varchar(128) NOT NULL,
  `LOCATION` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`BRANCH_ID`, `BRANCH_NAME`, `LOCATION`) VALUES
(10000, 'Indira Nagar', '#690 17th E Cross Rd, 2nd Stage, Laksmipuram, Indiranagar, Bengaluru,Karnataka-560038'),
(10001, 'RR Nagar', 'West of Chord Road, 2nd Stage, Nagapura, Bengaluru, Arisinakunte, Karnataka- 560086'),
(10002, 'MG Road', 'MG Road, Bangalore, Karnataka -560023'),
(10003, 'Jayanagar', '36th Cross East End B Main Road, No.33, 26th Main Rd, Jayanagar East, 4th T Block East, Jayanagar, Bengaluru, Karnataka 560041'),
(10004, 'Banashankari 2nd Stage', '#633, 19th Main Rd, Siddanna Layout, Banashankari Stage II, Banashankari, Bengaluru, Karnataka 560070'),
(10005, 'Seoul', '42 Teheran-ro 108-gil, Daechi-dong, Gangnam-gu, Seoul, South Korea');

-- --------------------------------------------------------

--
-- Table structure for table `issue_req`
--

CREATE TABLE `issue_req` (
  `ISBN` int(11) NOT NULL,
  `USER_ID` int(11) NOT NULL,
  `REQ_DATE` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `issue_req`
--

INSERT INTO `issue_req` (`ISBN`, `USER_ID`, `REQ_DATE`) VALUES
(1000000007, 1000000003, '2021-01-31'),
(1000000011, 1000000001, '2021-01-31'),
(1000000019, 1000000005, '2021-01-31');

-- --------------------------------------------------------

--
-- Table structure for table `publisher`
--

CREATE TABLE `publisher` (
  `PUBLISHER_NAME` varchar(128) NOT NULL,
  `PUBLISHER_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `publisher`
--

INSERT INTO `publisher` (`PUBLISHER_NAME`, `PUBLISHER_ID`) VALUES
('Aleph Book Company', 1000000004),
('Amazon Westland', 1000000002),
('Penguin Random House', 1000000000),
('Rachna Sagar Pvt. Ltd', 1000000001),
('Scholastic India', 1000000003);

-- --------------------------------------------------------

--
-- Table structure for table `readers`
--

CREATE TABLE `readers` (
  `USER_ID` int(11) NOT NULL,
  `FULL_NAME` varchar(20) NOT NULL,
  `PHONE_NO` int(11) NOT NULL,
  `MAIL_ID` varchar(128) NOT NULL,
  `ADDRESS` varchar(1024) NOT NULL,
  `PASSWORD` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `readers`
--

INSERT INTO `readers` (`USER_ID`, `FULL_NAME`, `PHONE_NO`, `MAIL_ID`, `ADDRESS`, `PASSWORD`) VALUES
(1000000001, 'Inchara.J.M', 2147483644, 'hasjdgj@KAJHSDG', '#418 12TH MAIN, 15TH CROSS', '827ccb0eea8a706c4c34a16891f84e7b'),
(1000000002, 'Kim Nam Joon', 1147483641, 'bighitbts@gmail.com', 'Ilsan, South Korea', '827ccb0eea8a706c4c34a16891f84e7b'),
(1000000003, 'Bushra', 2147483647, 'bushra7@gmail.com', '#418 12TH MAIN, 15TH CROSS', '827ccb0eea8a706c4c34a16891f84e7b'),
(1000000004, 'Namratha.H.V', 2123459901, 'namrathahv067@gmail.com', 'pp nagar, bangalore, karnataka-560024', '827ccb0eea8a706c4c34a16891f84e7b'),
(1000000005, 'Sahana S Gowda', 2123459922, 'sahanasg@gmail.com', 'vidya nagar,hassan, Karnataka-230021', '827ccb0eea8a706c4c34a16891f84e7b'),
(1000000006, 'Kim Seok Jin', 2147483647, 'jinhit7@gmail.com', 'Bighit Complex ,Seoul, South Korea', '827ccb0eea8a706c4c34a16891f84e7b'),
(1000000007, 'Min Yoongi', 2134347717, 'swagsuga@gmail.com', 'Mysore, Karnataka, India', '827ccb0eea8a706c4c34a16891f84e7b'),
(1000000008, 'Jung Hoseok', 2112091209, 'hopeworld@gmail.com', 'Gwangju, South Korea', '827ccb0eea8a706c4c34a16891f84e7b'),
(1000000009, 'Park Jimin', 2123232377, 'lachimolala@gmail.com', 'Busan, South Korea', '827ccb0eea8a706c4c34a16891f84e7b'),
(1000000010, 'Kim Taehyung', 2133337777, 'winterbearV@gmail.com', 'Daegu, South Korea', '827ccb0eea8a706c4c34a16891f84e7b'),
(1000000011, 'Jeon JungKook', 2147483647, 'kookie@gmail.com', 'Rajajinagar, Bangalore, India-560041', '827ccb0eea8a706c4c34a16891f84e7b');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `REG_NO` int(11) NOT NULL,
  `ISSUE_DATE` date NOT NULL,
  `RETURN_DATE` date DEFAULT NULL,
  `DUE_DATE` date DEFAULT NULL,
  `ISBN` int(11) NOT NULL,
  `USER_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`REG_NO`, `ISSUE_DATE`, `RETURN_DATE`, `DUE_DATE`, `ISBN`, `USER_ID`) VALUES
(34, '2021-01-30', '2021-01-19', '2021-04-30', 1000000002, 1000000001),
(35, '2021-01-30', '2021-01-31', '2021-04-30', 1000000001, 1000000003),
(36, '2021-01-31', NULL, '2021-05-01', 1000000015, 1000000001),
(37, '2021-01-31', '2021-01-31', '2021-05-01', 1000000004, 1000000004),
(38, '2021-01-31', NULL, '2021-05-01', 1000000002, 1000000005),
(39, '2021-01-31', '2021-01-31', '2021-05-01', 1000000004, 1000000001),
(40, '2021-01-31', NULL, '2021-05-01', 1000000008, 1000000002),
(41, '2021-01-31', NULL, '2021-05-01', 1000000009, 1000000005),
(42, '2021-01-31', NULL, '2021-05-01', 1000000010, 1000000007);

-- --------------------------------------------------------

--
-- Table structure for table `requested_book`
--

CREATE TABLE `requested_book` (
  `REQ_ID` int(11) NOT NULL,
  `BOOK_NAME` varchar(128) NOT NULL,
  `AUTHOR_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `requested_book`
--

INSERT INTO `requested_book` (`REQ_ID`, `BOOK_NAME`, `AUTHOR_ID`) VALUES
(4, 'Fundamentals of Computer Science Engineering for RGPV', 1000000002),
(2, 'MEIT', 1000000000);

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE `section` (
  `SECTION_NAME` varchar(128) NOT NULL,
  `SECTION_NO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`SECTION_NAME`, `SECTION_NO`) VALUES
('Aeronautical', 107),
('BioTechnology', 101),
('Chemistry', 110),
('Civil', 102),
('Computer Science', 100),
('Electrical', 103),
('Electrical and Instrumentation', 104),
('Electronics and Communication', 105),
('Information Technology', 106),
('Mathematics', 111),
('Mechanical', 108),
('Physics', 109);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ADMIN_ID`),
  ADD UNIQUE KEY `BRANCH_ID` (`BRANCH_ID`),
  ADD KEY `ADMIN_ID` (`ADMIN_ID`),
  ADD KEY `PASSWORD` (`PASSWORD`);

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`AUTHOR_ID`),
  ADD KEY `AUTHOR_NAME` (`AUTHOR_NAME`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`ISBN`),
  ADD KEY `AUTHOR_ID` (`AUTHOR_ID`),
  ADD KEY `SECTION_NO` (`SECTION_NO`),
  ADD KEY `BRANCH_ID` (`BRANCH_ID`),
  ADD KEY `PUBLISHER_ID` (`PUBLISHER_ID`),
  ADD KEY `ISBN` (`ISBN`),
  ADD KEY `TITLE` (`TITLE`);

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`BRANCH_ID`),
  ADD KEY `BRANCH_NAME` (`BRANCH_NAME`);

--
-- Indexes for table `issue_req`
--
ALTER TABLE `issue_req`
  ADD PRIMARY KEY (`ISBN`,`USER_ID`),
  ADD KEY `USER_ID` (`USER_ID`);

--
-- Indexes for table `publisher`
--
ALTER TABLE `publisher`
  ADD PRIMARY KEY (`PUBLISHER_ID`),
  ADD KEY `PUBLISHER_NAME` (`PUBLISHER_NAME`);

--
-- Indexes for table `readers`
--
ALTER TABLE `readers`
  ADD PRIMARY KEY (`USER_ID`),
  ADD UNIQUE KEY `MAIL_ID` (`MAIL_ID`),
  ADD KEY `FULL_NAME` (`FULL_NAME`,`USER_ID`),
  ADD KEY `PASSWORD` (`PASSWORD`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`REG_NO`),
  ADD UNIQUE KEY `ISBN_2` (`ISBN`,`USER_ID`,`ISSUE_DATE`),
  ADD KEY `ISBN` (`ISBN`),
  ADD KEY `USER_ID` (`USER_ID`);

--
-- Indexes for table `requested_book`
--
ALTER TABLE `requested_book`
  ADD PRIMARY KEY (`REQ_ID`),
  ADD UNIQUE KEY `BOOK_NAME_2` (`BOOK_NAME`,`AUTHOR_ID`),
  ADD KEY `AUTHOR_ID` (`AUTHOR_ID`),
  ADD KEY `BOOK_NAME` (`BOOK_NAME`);

--
-- Indexes for table `section`
--
ALTER TABLE `section`
  ADD PRIMARY KEY (`SECTION_NO`),
  ADD KEY `SECTION_NAME` (`SECTION_NAME`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ADMIN_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1000000067;

--
-- AUTO_INCREMENT for table `authors`
--
ALTER TABLE `authors`
  MODIFY `AUTHOR_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1000000011;

--
-- AUTO_INCREMENT for table `branch`
--
ALTER TABLE `branch`
  MODIFY `BRANCH_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10007;

--
-- AUTO_INCREMENT for table `publisher`
--
ALTER TABLE `publisher`
  MODIFY `PUBLISHER_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1000000007;

--
-- AUTO_INCREMENT for table `readers`
--
ALTER TABLE `readers`
  MODIFY `USER_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1000000067;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `REG_NO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `requested_book`
--
ALTER TABLE `requested_book`
  MODIFY `REQ_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `section`
--
ALTER TABLE `section`
  MODIFY `SECTION_NO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`BRANCH_ID`) REFERENCES `branch` (`BRANCH_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_ibfk_1` FOREIGN KEY (`AUTHOR_ID`) REFERENCES `authors` (`AUTHOR_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `books_ibfk_2` FOREIGN KEY (`SECTION_NO`) REFERENCES `section` (`SECTION_NO`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `books_ibfk_3` FOREIGN KEY (`BRANCH_ID`) REFERENCES `branch` (`BRANCH_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `books_ibfk_4` FOREIGN KEY (`PUBLISHER_ID`) REFERENCES `publisher` (`PUBLISHER_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `issue_req`
--
ALTER TABLE `issue_req`
  ADD CONSTRAINT `issue_req_ibfk_1` FOREIGN KEY (`ISBN`) REFERENCES `books` (`ISBN`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `issue_req_ibfk_2` FOREIGN KEY (`USER_ID`) REFERENCES `readers` (`USER_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `register`
--
ALTER TABLE `register`
  ADD CONSTRAINT `register_ibfk_1` FOREIGN KEY (`ISBN`) REFERENCES `books` (`ISBN`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `register_ibfk_2` FOREIGN KEY (`USER_ID`) REFERENCES `readers` (`USER_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `requested_book`
--
ALTER TABLE `requested_book`
  ADD CONSTRAINT `requested_book_ibfk_1` FOREIGN KEY (`AUTHOR_ID`) REFERENCES `authors` (`AUTHOR_ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
