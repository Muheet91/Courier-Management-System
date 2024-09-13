-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2024 at 05:56 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `courier`
--

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `com_id` int(255) NOT NULL,
  `com_name` varchar(255) NOT NULL,
  `com_email` varchar(255) NOT NULL,
  `com_address` varchar(222) NOT NULL,
  `com_pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`com_id`, `com_name`, `com_email`, `com_address`, `com_pass`) VALUES
(6, 'dhl', 'dhl@gmail.com', 'near saifee Hospital', 'dhl12345'),
(8, 'tcs', 'tcs@gmail.com', 'near Dolmen Mall', 'tcs12345'),
(9, 'leopards', 'leo@gmail.com', 'near aptech', 'leopards');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `c_id` int(255) NOT NULL,
  `c_name` varchar(255) NOT NULL,
  `c_email` varchar(255) NOT NULL,
  `c_message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`c_id`, `c_name`, `c_email`, `c_message`) VALUES
(15, 'hassan', 'hassan@gmail.com', 'mere account mai masla araha hai plz solve krdein'),
(16, 'anus', 'anus@gmail.com', 'mere order track nh ho raha '),
(17, 'shazaib', 'shazaib@gmail.com', 'mera order nh horaha hai'),
(18, 'nabeel', 'nabeel@gmail.com', 'mera na order horaha hai na signup horaha hai '),
(19, 'usman', 'usman@gmail.com', 'mujhe order krwana 1kg ki price kia hai plz jaldi baten');

-- --------------------------------------------------------

--
-- Stand-in structure for view `orderdata`
-- (See below for the actual view)
--
CREATE TABLE `orderdata` (
`Id` int(255)
,`sen_name` varchar(255)
,`sen_add` varchar(255)
,`sen_no` varchar(255)
,`rec_name` varchar(255)
,`rec_add` varchar(255)
,`rec_no` varchar(255)
,`weight` varchar(255)
,`company_name` int(255)
,`del_date` varchar(255)
,`message` varchar(255)
,`com_id` int(255)
,`com_name` varchar(255)
,`com_email` varchar(255)
,`com_address` varchar(222)
,`com_pass` varchar(255)
);

-- --------------------------------------------------------

--
-- Table structure for table `parcels`
--

CREATE TABLE `parcels` (
  `Id` int(255) NOT NULL,
  `sen_name` varchar(255) NOT NULL,
  `sen_add` varchar(255) NOT NULL,
  `sen_no` varchar(255) NOT NULL,
  `rec_name` varchar(255) NOT NULL,
  `rec_add` varchar(255) NOT NULL,
  `rec_no` varchar(255) NOT NULL,
  `weight` varchar(255) NOT NULL,
  `company_name` int(255) NOT NULL,
  `del_date` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `parcels`
--

INSERT INTO `parcels` (`Id`, `sen_name`, `sen_add`, `sen_no`, `rec_name`, `rec_add`, `rec_no`, `weight`, `company_name`, `del_date`, `message`) VALUES
(40, 'humza', 'nazimabad block A221', '02147483647', 'Saad', 'qazba block A321', '02147483647', '6kg', 8, '2024-05-24', 'w8ing'),
(41, 'Saad', 'qazba block A321', '02147483647', 'humza', 'nazimabad block A221', '02147483647', '50kg', 6, '2024-05-24', 'no message'),
(42, 'Saad', 'qazba block A321', '02147483647', 'humza', 'nazimabad block A221', '02147483647', '50kg', 8, '2024-05-24', 'no message'),
(43, 'humza', 'nazimabad block A221', '02147483647', 'saad', 'qazba block A321', '02147483647', '44kg', 6, '2024-05-30', 'no'),
(44, 'Anus', 'metroville block A121', '03216549871', 'Hassan', 'orangi town b22', '01239874569', '6kg', 6, '2024-05-24', 'tootna nh chahiye'),
(45, 'Anus', 'metroville block A121', '03216549871', 'Hassan', 'orangi town b22', '01239874569', '6kg', 8, '2024-05-24', 'tootna nh chahiye'),
(46, 'Anus', 'metroville block A121', '03216549871', 'Hassan', 'orangi town b22', '01239874569', '6kg', 9, '2024-05-24', 'tootna nh chahiye'),
(47, 'Hassan', 'orangi town b22', '01239874569', 'Anus', 'metroville block A121', '03216549871', '1kg', 9, '2024-05-31', 'time pr plz'),
(48, 'Hassan', 'orangi town b22', '01239874569', 'Anus', 'metroville block A121', '03216549871', '1kg', 8, '2024-05-31', 'time pr plz'),
(49, 'Hassan', 'orangi town b22', '01239874569', 'Anus', 'metroville block A121', '03216549871', '1kg', 6, '2024-05-31', 'time pr plz'),
(50, 'Shahzaib', 'saima city block s221', '03321654987', 'Nabeel', 'north Karchi block A222', '03698521477', '65kg', 6, '2024-05-28', 'no'),
(51, 'Shahzaib', 'saima city block s221', '03321654987', 'Nabeel', 'north Karchi block A222', '03698521477', '65kg', 8, '2024-05-28', 'no'),
(52, 'Shahzaib', 'saima city block s221', '03321654987', 'Nabeel', 'north Karchi block A222', '03698521477', '65kg', 9, '2024-05-28', 'no'),
(53, 'Nabeel', 'north Karchi block A222', '03698521477', 'Shahzaib', 'saima city block s221', '03321654987', '4kg', 6, '2024-06-18', 'jldi'),
(54, 'Nabeel', 'north Karchi block A222', '03698521477', 'Shahzaib', 'saima city block s221', '03321654987', '4kg', 8, '2024-06-18', 'jldi'),
(55, 'Nabeel', 'north Karchi block A222', '03698521477', 'Shahzaib', 'saima city block s221', '03321654987', '4kg', 9, '2024-06-18', 'jldi'),
(56, 'Ahmed', 'naya nazimabad Block C255', '03553987456', 'Faraz', 'nazimbad block A114', '03698521478', '3kg', 6, '2024-06-10', 'nope'),
(57, 'Ahmed', 'naya nazimabad Block C255', '03553987456', 'Faraz', 'nazimbad block A114', '03698521478', '3kg', 8, '2024-06-10', 'nope'),
(58, 'Ahmed', 'naya nazimabad Block C255', '03553987456', 'Faraz', 'nazimbad block A114', '03698521478', '3kg', 9, '2024-06-10', 'nope'),
(59, 'Faraz', 'nazimbad block A114', '03698521478', 'Ahmed', 'naya nazimabad Block C255', '03553987456', '2kg', 6, '2024-06-04', 'glass hai '),
(60, 'Faraz', 'nazimbad block A114', '03698521478', 'Ahmed', 'naya nazimabad Block C255', '03553987456', '2kg', 8, '2024-06-04', 'glass hai '),
(61, 'Faraz', 'nazimbad block A114', '03698521478', 'Ahmed', 'naya nazimabad Block C255', '03553987456', '2kg', 9, '2024-06-04', 'glass hai '),
(62, 'tabish', 'bharia', '03215487966', 'usman', 'landhi', '02121369852', '7kg', 6, '2024-06-30', 'kuch nh'),
(63, 'tabish', 'bharia', '03215487966', 'usman', 'landhi', '02121369852', '7kg', 8, '2024-06-30', 'kuch nh'),
(64, 'tabish', 'bharia', '03215487966', 'usman', 'landhi', '02121369852', '7kg', 9, '2024-06-30', 'kuch nh'),
(65, 'usman', 'landhi', '02121369852', 'tabish', 'bharia', '03215487966', '34kg', 6, '2024-06-13', 'bus poucha do'),
(66, 'usman', 'landhi', '02121369852', 'tabish', 'bharia', '03215487966', '34kg', 8, '2024-06-13', 'bus poucha do'),
(67, 'usman', 'landhi', '02121369852', 'tabish', 'bharia', '03215487966', '34kg', 9, '2024-06-13', 'bus poucha do'),
(68, 'Muheet', 'Metroville Site Block B333', '03333913214', 'Noman', 'Metroville Site Block A112', '03212196587', '17kg', 6, '2024-07-02', 'no'),
(69, 'Muheet', 'Metroville Site Block B333', '03333913214', 'Noman', 'Metroville Site Block A112', '03212196587', '17kg', 8, '2024-07-02', 'no'),
(70, 'Muheet', 'Metroville Site Block B333', '03333913214', 'Noman', 'Metroville Site Block A112', '03212196587', '17kg', 9, '2024-07-02', 'no'),
(71, 'Noman', 'Metroville Site Block A112', '03212196587', 'Muheet', 'Metroville Site Block B333', '03333913214', '19kg', 6, '2024-07-23', 'nh'),
(72, 'Noman', 'Metroville Site Block A112', '03212196587', 'Muheet', 'Metroville Site Block B333', '03333913214', '19kg', 8, '2024-07-23', 'nh'),
(73, 'Noman', 'Metroville Site Block A112', '03212196587', 'Muheet', 'Metroville Site Block B333', '03333913214', '19kg', 9, '2024-07-23', 'nh'),
(74, 'Arsalan', 'Tariq road block D333', '03262678945', 'Aliyan', 'korangi block k789', '03212632512', '29kg', 6, '2024-06-10', 'time pr plz'),
(75, 'Arsalan', 'Tariq road block D333', '03262678945', 'Aliyan', 'korangi block k789', '03212632512', '29kg', 8, '2024-06-10', 'time pr plz'),
(76, 'Arsalan', 'Tariq road block D333', '03262678945', 'Aliyan', 'korangi block k789', '03212632512', '29kg', 9, '2024-06-10', 'time pr plz'),
(77, 'Aliyan', 'korangi block k789', '03212632512', 'Arsalan', 'Tariq road block D333', '03262678945', '21kg', 6, '2024-06-01', 'time pr'),
(78, 'Aliyan', 'korangi block k789', '03212632512', 'Arsalan', 'Tariq road block D333', '03262678945', '21kg', 8, '2024-06-01', 'time pr'),
(79, 'Aliyan', 'korangi block k789', '03212632512', 'Arsalan', 'Tariq road block D333', '03262678945', '21kg', 9, '2024-06-01', 'time pr'),
(80, 'Ali', 'liyari block k789', '03212632512', 'Imran', 'hyderi block D333', '03262678945', '65kg', 6, '2024-06-11', 'w8ing'),
(81, 'Ali', 'liyari block k789', '03212632512', 'Imran', 'hyderi block D333', '03262678945', '65kg', 8, '2024-06-11', 'w8ing'),
(82, 'Ali', 'liyari block k789', '03212632512', 'Imran', 'hyderi block D333', '03262678945', '65kg', 9, '2024-06-11', 'w8ing'),
(83, 'Saleem', 'new Karchi block k789', '03212632512', 'Shoib', 'DHA Phase 6 223', '03262678945', '13kg', 6, '2024-06-11', 'w8ing'),
(84, 'Saleem', 'new Karchi block k789', '03212632512', 'Shoib', 'DHA Phase 6 223', '03262678945', '13kg', 8, '2024-06-11', 'w8ing'),
(85, 'Saleem', 'new Karchi block k789', '03212632512', 'Shoib', 'DHA Phase 6 223', '03262678945', '13kg', 9, '2024-06-11', 'w8ing');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `Id` int(222) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(222) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`Id`, `Name`, `Email`, `Password`) VALUES
(1, 'medi', 'medi@gmail.com', 'medi1234'),
(3, 'humza', 'humza@gmail.com', 'humza123'),
(4, 'Saad', 'saad@gmail.com', 'saad1234'),
(7, 'tabish', 'tabish@gmail.com', 'tabish12'),
(8, 'warda', 'warda@gmail.com', 'warda123'),
(9, 'ahmed', 'ahmed@gmail.com', 'ahmed123');

-- --------------------------------------------------------

--
-- Table structure for table `worker`
--

CREATE TABLE `worker` (
  `worker_id` int(222) NOT NULL,
  `worker_firstName` varchar(222) NOT NULL,
  `worker_lastName` varchar(222) NOT NULL,
  `worker_city` varchar(222) NOT NULL,
  `worker_address` varchar(222) NOT NULL,
  `worker_mail` varchar(222) NOT NULL,
  `worker_phone` varchar(255) NOT NULL,
  `worker_pass` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `worker`
--

INSERT INTO `worker` (`worker_id`, `worker_firstName`, `worker_lastName`, `worker_city`, `worker_address`, `worker_mail`, `worker_phone`, `worker_pass`) VALUES
(33, 'saad', 'mansoori', 'karachi', 'Qazba block C255', 'saad@gmail.com', '03223323456', 'saad1234'),
(34, 'humza', 'qureshi', 'karachi', 'qazba block A331', 'hq@gmail.com', '03563323455', 'humza123'),
(38, 'Tabish', 'Khan', 'Karachi', 'five star chorangi', 'tabish@gmail.com', '03789323433', 'tabish12'),
(40, 'Ahmed', 'Imran', 'Karachi', 'nazimbad block A', 'ahmed@gmail.com', '03344517867', 'ahmed123'),
(41, 'Muhammad', 'Anus', 'Karachi', 'Metroville Block B1480', 'anus@gmail.com', '03446574831', 'anus1234');

-- --------------------------------------------------------

--
-- Structure for view `orderdata`
--
DROP TABLE IF EXISTS `orderdata`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `orderdata`  AS SELECT `parcels`.`Id` AS `Id`, `parcels`.`sen_name` AS `sen_name`, `parcels`.`sen_add` AS `sen_add`, `parcels`.`sen_no` AS `sen_no`, `parcels`.`rec_name` AS `rec_name`, `parcels`.`rec_add` AS `rec_add`, `parcels`.`rec_no` AS `rec_no`, `parcels`.`weight` AS `weight`, `parcels`.`company_name` AS `company_name`, `parcels`.`del_date` AS `del_date`, `parcels`.`message` AS `message`, `company`.`com_id` AS `com_id`, `company`.`com_name` AS `com_name`, `company`.`com_email` AS `com_email`, `company`.`com_address` AS `com_address`, `company`.`com_pass` AS `com_pass` FROM (`parcels` join `company` on(`parcels`.`company_name` = `company`.`com_id`)) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`com_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `parcels`
--
ALTER TABLE `parcels`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `com_name` (`company_name`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `worker`
--
ALTER TABLE `worker`
  ADD PRIMARY KEY (`worker_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `com_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `c_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `parcels`
--
ALTER TABLE `parcels`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `Id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `worker`
--
ALTER TABLE `worker`
  MODIFY `worker_id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `parcels`
--
ALTER TABLE `parcels`
  ADD CONSTRAINT `parcels_ibfk_1` FOREIGN KEY (`company_name`) REFERENCES `company` (`com_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
