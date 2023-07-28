-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2022 at 06:23 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_sms`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `sl_no` int(5) NOT NULL,
  `st_name` varchar(50) NOT NULL,
  `reg_no` varchar(11) NOT NULL,
  `dob` date NOT NULL,
  `fathers_name` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `ph_no` varchar(11) NOT NULL,
  `branch` varchar(4) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `ad_type` text NOT NULL,
  `adress` varchar(50) NOT NULL,
  `city` varchar(20) NOT NULL,
  `semester` varchar(15) NOT NULL,
  `district` varchar(35) NOT NULL,
  `zip_cod` varchar(10) NOT NULL,
  `st_image` varchar(50) NOT NULL,
  `ad_date` date NOT NULL,
  `date_time` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`sl_no`, `st_name`, `reg_no`, `dob`, `fathers_name`, `email`, `ph_no`, `branch`, `gender`, `ad_type`, `adress`, `city`, `semester`, `district`, `zip_cod`, `st_image`, `ad_date`, `date_time`) VALUES
(1, 'Helo', 'D111111111', '2022-05-01', 'DAS GUPTAGG HH', 'das@gmail.com', '2222222222', 'ETC', 'Female', 'Jexpo', 'TAPAN, 733127', 'BALURGHAT', 'Semester - V', 'North 24 Parganas', '733123', 'WhatsApp Image 2021-11-06 at 12.24.38 PM.jpeg', '2022-06-10', '2022-06-11 16:57:54'),
(2, 'HII', 'D111111112', '2014-01-01', 'LOGO JIIII', 'addd@gmail.com', '1111111111', 'ETC', 'Female', 'Voclet', 'SDDDFGG', 'ADDDAAA', 'Semester - I', 'Paschim Medinipur', '111111', 'BHPUd0d.jpg', '2022-06-01', '2022-06-19 15:13:36'),
(3, 'CVGBCFXGVHB', 'D111111122', '2021-06-10', 'DSFD', 'dfg@kk.dd', '4444444444', 'ETC', 'Female', 'Jexpo', 'Dfgxfdgh', 'Gfvjgvhj', 'Semester I', 'Paschim Bardhaman', '666666', 'wp3850825 (1).jpg', '2022-06-08', '2022-06-11 16:58:39'),
(4, 'LOGO MAKER', 'D112233221', '2021-03-31', 'HELO MINI', 'dsjags@mah.vom', '1111111111', 'EE', 'Female', '', 'LoKaghfad HHHAaad', 'IIjbsdfhjgsf', 'Semester III', 'Paschim Medinipur', '222222', 'wp3461372-4k-for-pc-wallpapers.jpg', '0000-00-00', '2022-06-11 16:58:32'),
(5, 'PROTIK SARKAR', 'D112233445', '2003-02-13', 'UMA NATH SARKAR', 'student@gmail.com', '1122222222', 'CST', 'Male', 'Jexpo', 'ITAHAR,UTTAR DINAJPUR,WEST BENGAL', 'ITAHAR', 'Semester - IV', 'Uttar Dinajpur', '733128', 'MY JPG.jpg', '2022-06-10', '2022-06-11 16:58:42'),
(6, 'Test Student', 'D112255336', '2022-05-28', 'Test', 'test@gmail.com', '1234567890', 'ETC', 'Male', '', 'Test', 'Test', 'Semester I', 'Purba Bardhaman', '123456', 'wp6059211-4k-for-pc-wallpapers.jpg', '0000-00-00', '2022-06-11 16:58:15'),
(7, 'Pig', 'D123123123', '2022-05-02', 'Big Pig', 'pig@gmail.com', '2211445587', 'ETC', 'Male', '', 'Local Boy ', 'Jalpaiguri', 'Semester IV', 'Nadia', '023568', '2021-09-05.png', '0000-00-00', '2022-06-11 16:58:09'),
(8, 'Hello', 'D124568799', '5522-02-12', 'Hi..', 'helo@gmail.com', '1234455889', 'CST', 'Female', 'Jexpo', 'india', 'India', 'Semester III', 'Darjeeling', '231111', 'c9c93cbf56d24aa825cd1286049f91cf.jpg', '2022-06-10', '2022-06-11 16:58:12'),
(9, 'Rohan', 'D192011144', '1999-01-01', 'Lalu', 'rohan@g.c', '9999999999', 'EE', 'Trnasgende', '', 'Kolkata ', 'Mujaffapur', 'Semester I', 'Murshidabad', '325401', '1636711475133 (1).jpg', '0000-00-00', '2022-06-11 16:57:56'),
(10, 'PROTIK SARKAR', 'D192011145', '2003-02-13', 'UMANATH SARKAR', 'sarkarprotik240@gmail.com', '8972708471', 'CST', 'Male', 'Jexpo', 'Chavot, Itahar, Uttar Dinajpur', 'Itahar', 'Semester III', 'South 24 Parganas', '733128', 'MY JPG.jpg', '2022-06-24', '2022-06-10 14:33:58'),
(11, 'S', 'D192011146', '2022-05-29', 'FFDD', 'S@H.D', '1111111111', 'CST', 'Female', '', 'D', 'D', 'Semester I', 'South 24 Parganas', '111111', '10 copy.jpg', '0000-00-00', '2022-06-11 16:57:46'),
(12, 'Supriya Das', 'D192022242', '1989-05-22', 'Suman Das', 'student@gmail.com', '9997788999', 'ETC', 'Female', 'Jexpo', 'Kolkata', 'Kolkata', 'Semester I', 'Kolkata', '700001', 'IMG_20210908_185858.jpg', '2022-06-03', '2022-06-11 16:57:51'),
(13, 'Dog ', 'D202020202', '2022-05-01', 'Big Dog', 'dog@gmail.com', '1231231231', 'CST', 'Female', '', 'Itahar, Bus Stand, North Dinajpur, 733128', 'Itahar', 'Semester VI', 'Uttar Dinajpur', '112233', 'download.jfif', '0000-00-00', '2022-06-11 16:58:06'),
(14, 'Subho Basak', 'D202020231', '1999-05-13', 'Goli Basak', 'subho@gmail.com', '9999999999', 'ETC', 'Male', '', 'Siliguri , Darjiling , West Bengal', 'Siliguri', '', 'Darjeeling', '010200', 'IMG_20211030_161152.jpg', '0000-00-00', '2022-06-11 16:57:59'),
(15, 'Test 2', 'D203569877', '2022-05-22', 'TEST F', 'testf@gmail.com', '2589631470', 'EE', 'Female', '', 'TEST TO TEST', 'TEST', 'Semester - III', 'Kolkata', '123344', 'wp6058934-4k-for-pc-wallpapers.jpg', '0000-00-00', '2022-06-12 15:45:31'),
(16, 'HII JACK', 'D222200000', '2022-01-01', 'JACK JACK', 'kkg@hotmail.com', '2000111111', 'ETC', 'Female', 'Voclet', 'SPACE LOCATION FROM SPACE', 'SPACE TOWN', 'Semester - V', 'Uttar Dinajpur', '111111', 'hii.jpg', '2022-06-01', '2022-06-19 15:12:48'),
(17, 'Sarkar', 'D222222222', '2001-05-12', 'GHOSH', 'sarkar@gmail.com', '9999887722', 'ETC', 'Female', '', 'DINJAPUR', 'LOCAL', 'Semester - III', 'Paschim Bardhaman', '123456', 'IMG_20210908_203441.jpg', '0000-00-00', '2022-06-11 16:58:04'),
(18, 'hello', 'D225423554', '2022-03-23', 'hiiii', 'hi@k.l', '5555555555', 'CST', 'Female', '', 'puruliya', 'itahar', 'Semester I', 'Hooghly', '111111', 'wp6058934-4k-for-pc-wallpapers.jpg', '0000-00-00', '2022-06-11 16:58:23'),
(19, 'SDFDF', 'D333333333', '2022-06-10', 'SDFS', 'dfgd@f.ll', '3333333333', 'EE', 'Female', '', 'SRDFTGFDFGHFGUTFGVGHHG', 'HGVGJ', 'Semester - II', 'Paschim Medinipur', '666666', 'dark-wallpaper-16.jpg', '0000-00-00', '2022-06-12 15:44:46'),
(22, 'SURAJ DAS', 'D334455111', '2000-02-02', 'SUBHAS DAS', 'suraj@gmail.com', '8877954001', 'CST', 'Female', 'Voclet', 'TEST ECHO', 'TEST', 'Semester - III', 'Kolkata', '666666', 'logo.png', '2022-06-15', '2022-06-19 15:12:52'),
(20, 'Logo', 'D445600000', '2022-06-12', 'Hwloiiu', 'deeee@kkk.lll', '4444444444', 'CST', 'Male', '', 'sfdxdllllooo', 'sdfsdgdffg', 'Semester I', 'Cooch Behar', '111114', 'wp3850825 (1).jpg', '0000-00-00', '2022-06-11 16:58:20'),
(21, 'SAGAR DAS', 'D555555555', '2022-05-01', 'BUDHA DAS', 'sagardas@gmail.com', '9875420015', 'EE', 'Male', 'Jexpo', 'KOLKATA WEST BENGAL 733128', 'KOLKATA', 'Semester - II', 'Kolkata', '700000', 'MY.png', '2022-06-01', '2022-06-12 13:58:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`reg_no`) USING BTREE,
  ADD KEY `sl_no` (`sl_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `sl_no` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
