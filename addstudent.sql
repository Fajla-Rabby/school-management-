-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2022 at 07:43 PM
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
-- Database: `addstudent`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `ID` int(11) DEFAULT NULL,
  `Fname` varchar(50) DEFAULT NULL,
  `Lname` varchar(50) DEFAULT NULL,
  `Gender` varchar(10) DEFAULT NULL,
  `Major` varchar(10) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`ID`, `Fname`, `Lname`, `Gender`, `Major`, `Email`) VALUES
(1811561121, 'MD MUHTASIM', 'RAHMAN ', 'Male', 'CST', 'muhtasim3535@gmail.com'),
(1811561130, 'MD ASIM', 'AKRAM', 'Male', 'CST', 'asimakram@gmail.com'),
(1811561121, 'REZAUL KARIM', 'TUSHER', 'Male', 'CST', 'tusher.karim@gmail.com'),
(1811561124, 'RIMON', 'MAHMUD', 'Male', 'CST', 'rimon.mahmud@gmail.com'),
(1811561111, 'RAMJAN', 'ALI', 'Male', 'CST', 'ali.ramjan@gmail.com'),
(1811561134, 'MD PAMEL ', 'TALUKDAR', 'Male', 'CST', 'pamel.talukdar@gmail.com'),
(1811561126, 'MST TANIA', 'AKTER', 'Female', 'CST', 'akter.tania@gmail.com'),
(1811561144, 'MD PARVEZ', 'RAHMAN', 'Male', 'CST', 'parvej.rahman@gmail.com'),
(1811561136, 'SHEPON ', 'CHANDRA', 'Male', 'CST', 'shipon.chandra@gmail.com'),
(1811561132, 'HASSAN SHAHRIARE', 'SHABID', 'Male', 'CST', 'sabid.hassan@gmail.com'),
(1811561142, 'OUSSAMA', 'GADROURI', 'Male', 'CST', 'gadrouri.oussama@gmail.com'),
(1811561143, 'ANDREW ALICK', 'SAKALA', 'Male', 'CST', 'andrew.alick@gmail.com'),
(1811561105, 'FELITYO SELINA', 'KIBANGALI', 'Female', 'CST', 'selina.kibangali@gmail.com'),
(1811561148, 'CHARLES KELVIN', 'MCHAKI', 'Male', 'CST', 'charless.kelvin@gmail.com'),
(1811561143, 'MILLION MIKYAS', 'ZEYEDE', 'Male', 'CST', 'million.mikyas@gmail.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
