-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2023 at 12:17 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_runforearth`
--

-- --------------------------------------------------------

--
-- Table structure for table `new_tbl`
--

CREATE TABLE `new_tbl` (
  `runnerID` int(11) NOT NULL DEFAULT 0,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `comAddress` varchar(255) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `nBday` date NOT NULL,
  `contactNum` int(30) DEFAULT NULL,
  `emailAdd` varchar(255) NOT NULL,
  `shirtSize` varchar(50) NOT NULL,
  `theAge` int(50) NOT NULL,
  `jRsR` varchar(50) NOT NULL,
  `regTime` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `new_tbl`
--

INSERT INTO `new_tbl` (`runnerID`, `firstName`, `lastName`, `comAddress`, `gender`, `nBday`, `contactNum`, `emailAdd`, `shirtSize`, `theAge`, `jRsR`, `regTime`) VALUES
(387, 'sasuke', 'sasuke', 'sasuke', 'Male', '2023-07-04', NULL, 'sadasdasd@gfgfgf', 'Medium', 50, 'Senior', 'Sunday, 16-Jul-2023 11:53:59 PM PHT'),
(388, 'sakura', 'sakura', 'sakura', 'Female', '2023-07-06', 2147483647, 'aer@gmail.com', 'Extra Large', 0, 'Junior', 'Sunday, 16-Jul-2023 11:53:59 PM PHT'),
(390, 'joy', 'joy', 'joy', 'Female', '2023-07-06', 2147483647, 'sadasdasd@gfgfgf', 'Small', 48, 'Senior', 'Sunday, 16-Jul-2023 11:56:17 PM PHT'),
(392, 'joy', 'joy', 'joy', 'Female', '2023-07-06', 2147483647, 'sadasdasd@gfgfgf', 'Small', 0, 'Junior', 'Sunday, 16-Jul-2023 11:57:55 PM PHT'),
(393, 'chicken', 'chicken', 'chicken', 'Male', '2023-07-07', NULL, 'sadasdasd@gfgfgf', 'Small', 0, 'Junior', 'Monday, 17-Jul-2023 12:29:14 AM PHT'),
(394, 'joy', 'joy', 'joy', 'Female', '2023-07-06', 2147483647, 'sadasdasd@gfgfgf', 'Small', 0, 'Junior', 'Monday, 17-Jul-2023 12:29:14 AM PHT'),
(395, 'chicken', 'chicken', 'chicken', 'Male', '2023-07-07', NULL, 'sadasdasd@gfgfgf', 'Small', 0, 'Junior', 'Monday, 17-Jul-2023 12:31:40 AM PHT'),
(396, 'joy', 'joy', 'joy', 'Female', '2023-07-06', 2147483647, 'sadasdasd@gfgfgf', 'Small', 0, 'Junior', 'Monday, 17-Jul-2023 12:31:40 AM PHT'),
(397, 'chicken', 'chicken', 'chicken', 'Male', '2023-07-07', NULL, 'sadasdasd@gfgfgf', 'Small', 0, 'Junior', 'Monday, 17-Jul-2023 12:33:35 AM PHT'),
(398, 'joy', 'joy', 'joy', 'Female', '2023-07-06', 2147483647, 'sadasdasd@gfgfgf', 'Small', 0, 'Junior', 'Monday, 17-Jul-2023 12:33:35 AM PHT'),
(399, 'jumbong bakulaw', 'jumbong bakulaw', 'jumbong bakulaw', 'Male', '2023-06-28', NULL, 'asdfsf@g.d', 'Large', 0, 'Junior', 'Monday, 17-Jul-2023 12:35:07 AM PHT'),
(400, 'raphtalia', 'raphtalia', 'raphtalia', 'Female', '2023-05-11', NULL, 'sadasdasd@gfgfgf', 'Medium', 0, 'Junior', 'Monday, 17-Jul-2023 12:35:07 AM PHT'),
(401, 'ulalo', 'ulalo', 'ulalo', 'Male', '2023-03-28', 2147483647, 'sadasdasd@gfgfgf', 'Small', 0, 'Junior', 'Monday, 17-Jul-2023 12:35:07 AM PHT'),
(402, 'jumbong bakulaw', 'jumbong bakulaw', 'jumbong bakulaw', 'Male', '2023-06-28', NULL, 'asdfsf@g.d', 'Large', 0, 'Junior', 'Monday, 17-Jul-2023 12:37:49 AM PHT'),
(403, 'raphtalia', 'raphtalia', 'raphtalia', 'Female', '2023-05-11', NULL, 'sadasdasd@gfgfgf', 'Medium', 0, 'Junior', 'Monday, 17-Jul-2023 12:37:49 AM PHT'),
(404, 'ulalo', 'ulalo', 'ulalo', 'Male', '2023-03-28', 2147483647, 'sadasdasd@gfgfgf', 'Small', 0, 'Junior', 'Monday, 17-Jul-2023 12:37:49 AM PHT'),
(405, 'jumbong bakulaw', 'jumbong bakulaw', 'jumbong bakulaw', 'Male', '2023-06-28', NULL, 'asdfsf@g.d', 'Large', 0, 'Junior', 'Monday, 17-Jul-2023 12:49:39 AM PHT'),
(406, 'raphtalia', 'raphtalia', 'raphtalia', 'Female', '2023-05-11', NULL, 'sadasdasd@gfgfgf', 'Medium', 0, 'Junior', 'Monday, 17-Jul-2023 12:49:39 AM PHT'),
(407, 'ulalo', 'ulalo', 'ulalo', 'Male', '2023-03-28', 2147483647, 'sadasdasd@gfgfgf', 'Small', 0, 'Junior', 'Monday, 17-Jul-2023 12:49:39 AM PHT'),
(408, 'red', 'ranger', 'red ranger', 'Male', '2023-07-06', NULL, 'sadasdasd@gfgfgf', 'Medium', 0, 'Junior', 'Monday, 17-Jul-2023 12:51:42 AM PHT'),
(409, 'dos', 'dos', 'dos', 'Male', '2023-06-27', 2147483647, 'aer@gmail.com', 'Small', 0, 'Junior', 'Monday, 17-Jul-2023 12:51:42 AM PHT'),
(410, 'NarutoTri', 'NarutoTri', 'NarutoTri', 'Male', '2023-06-26', NULL, 'sadasdasd@gfgfgf', 'Small', 0, 'Junior', 'Monday, 17-Jul-2023 12:51:42 AM PHT'),
(411, 'sadfsdf', 'sadfsdf', 'sadfsdf', 'Female', '2020-12-30', NULL, 'sadasdasd@gfgfgf', 'Extra Large', 2, 'Junior', 'Monday, 17-Jul-2023 12:51:42 AM PHT'),
(412, 'red', 'ranger', 'red ranger', 'Male', '2023-07-06', NULL, 'sadasdasd@gfgfgf', 'Medium', 0, 'Junior', 'Monday, 17-Jul-2023 12:52:35 AM PHT'),
(413, 'dos', 'dos', 'dos', 'Male', '2023-06-27', 2147483647, 'aer@gmail.com', 'Small', 0, 'Junior', 'Monday, 17-Jul-2023 12:52:35 AM PHT'),
(414, 'NarutoTri', 'NarutoTri', 'NarutoTri', 'Male', '2023-06-26', NULL, 'sadasdasd@gfgfgf', 'Small', 0, 'Junior', 'Monday, 17-Jul-2023 12:52:35 AM PHT'),
(415, 'sadfsdf', 'sadfsdf', 'sadfsdf', 'Female', '2020-12-30', NULL, 'sadasdasd@gfgfgf', 'Extra Large', 2, 'Junior', 'Monday, 17-Jul-2023 12:52:35 AM PHT'),
(416, 'red', 'ranger', 'red ranger', 'Male', '2023-07-06', NULL, 'sadasdasd@gfgfgf', 'Medium', 0, 'Junior', 'Monday, 17-Jul-2023 12:54:14 AM PHT'),
(417, 'dos', 'dos', 'dos', 'Male', '2023-06-27', 2147483647, 'aer@gmail.com', 'Small', 0, 'Junior', 'Monday, 17-Jul-2023 12:54:14 AM PHT'),
(418, 'NarutoTri', 'NarutoTri', 'NarutoTri', 'Male', '2023-06-26', NULL, 'sadasdasd@gfgfgf', 'Small', 0, 'Junior', 'Monday, 17-Jul-2023 12:54:14 AM PHT'),
(419, 'sadfsdf', 'sadfsdf', 'sadfsdf', 'Female', '2020-12-30', NULL, 'sadasdasd@gfgfgf', 'Extra Large', 2, 'Junior', 'Monday, 17-Jul-2023 12:54:14 AM PHT'),
(420, 'kenma', 'haikyuu', 'haikyuu', 'Male', '1998-12-28', NULL, 'sadasdasd@gfgfgf', 'Small', 24, 'Senior', 'Tuesday, 18-Jul-2023 02:54:11 AM PHT'),
(421, 'tanjiro', 'tanjiro', 'tanjiro', 'Male', '1996-12-30', NULL, 'sadasdasd@gfgfgf', 'Small', 26, 'Senior', 'Tuesday, 18-Jul-2023 02:54:11 AM PHT');

-- --------------------------------------------------------

--
-- Table structure for table `tblabove40`
--

CREATE TABLE `tblabove40` (
  `runnerID` int(11) NOT NULL DEFAULT 0,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `comAddress` varchar(255) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `nBday` date NOT NULL,
  `contactNum` varchar(255) DEFAULT NULL,
  `emailAdd` varchar(255) NOT NULL,
  `shirtSize` varchar(50) NOT NULL,
  `theAge` int(50) NOT NULL,
  `jRsR` varchar(50) NOT NULL,
  `regTime` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblabove40`
--

INSERT INTO `tblabove40` (`runnerID`, `firstName`, `lastName`, `comAddress`, `gender`, `nBday`, `contactNum`, `emailAdd`, `shirtSize`, `theAge`, `jRsR`, `regTime`) VALUES
(448, 'Rafael', 'Santos', '789 Sunflower St., Quezon City', 'Male', '1970-12-05', '09155678901', 'rorafael.santos@example.com', 'Large', 52, 'Senior', 'Thursday, 27-Jul-2023 04:45:33 AM PHT'),
(449, 'Rose', 'Santos', '789 Sunflower St., Quezon City', 'Female', '1972-12-07', '09222345678', 'rorafael.santos@example.com', 'Medium', 50, 'Senior', 'Thursday, 27-Jul-2023 04:45:33 AM PHT');

-- --------------------------------------------------------

--
-- Table structure for table `tblbelow39`
--

CREATE TABLE `tblbelow39` (
  `runnerID` int(11) NOT NULL DEFAULT 0,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `comAddress` varchar(255) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `nBday` date NOT NULL,
  `contactNum` varchar(255) DEFAULT NULL,
  `emailAdd` varchar(255) NOT NULL,
  `shirtSize` varchar(50) NOT NULL,
  `theAge` int(50) NOT NULL,
  `jRsR` varchar(50) NOT NULL,
  `regTime` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblbelow39`
--

INSERT INTO `tblbelow39` (`runnerID`, `firstName`, `lastName`, `comAddress`, `gender`, `nBday`, `contactNum`, `emailAdd`, `shirtSize`, `theAge`, `jRsR`, `regTime`) VALUES
(440, 'Juan', 'Dela Cruz', '123 Rizal St., Makati City', 'Male', '2000-01-15', '09123456789', 'juan.delacruz@example.com', 'Medium', 23, 'Senior', 'Thursday, 27-Jul-2023 04:32:35 AM PHT'),
(443, 'Maria', 'Santos', '456 Sampaguita Ave., Quezon City', 'Female', '2020-04-28', '09187654321', 'maria.santos@example.com', 'Small', 3, 'Junior', 'Thursday, 27-Jul-2023 04:36:10 AM PHT'),
(444, 'Jose', 'Reyes', '789 Narra St., Caloocan City', 'Male', '1995-10-10', NULL, 'jose.reyes@example.com', 'Extra Large', 27, 'Senior', 'Thursday, 27-Jul-2023 04:36:10 AM PHT'),
(445, 'Ana', 'Garcia', '321 Sampaloc Ave., Pasig City', 'Female', '2015-02-10', NULL, 'ana.garcia@example.com', 'Medium', 8, 'Junior', 'Thursday, 27-Jul-2023 04:38:23 AM PHT'),
(446, 'Miguel', 'Ramos', '111 Tamarind St., Mandaluyong City', 'Male', '1992-02-11', '09171234567', 'miguel.ramos@example.com', 'Large', 31, 'Senior', 'Thursday, 27-Jul-2023 04:38:23 AM PHT'),
(447, 'Sofia', 'Tan', '222 Kamias St., Manila City', 'Female', '1987-12-03', '09209876543', 'sofia.tan@example.com', 'Small', 35, 'Senior', 'Thursday, 27-Jul-2023 04:39:03 AM PHT'),
(450, 'Rica', 'Santos', '789 Sunflower St., Quezon City', 'Female', '1990-02-22', '09163456789', 'rica.santos@example.com', 'Small', 33, 'Senior', 'Thursday, 27-Jul-2023 04:45:33 AM PHT'),
(451, 'Rico', 'Santos', '789 Sunflower St., Quezon City', 'Male', '1990-02-22', '09127654321', 'ric01.santos@example.com', 'Large', 33, 'Senior', 'Thursday, 27-Jul-2023 04:45:33 AM PHT'),
(452, 'Lourdes', 'Garcia', '456 Acacia St., Makati City', 'Female', '2018-07-18', '09171234567', 'lourdes.garcia@example.com', 'Medium', 5, 'Junior', 'Thursday, 27-Jul-2023 04:46:55 AM PHT'),
(453, 'Roberto', 'Reyes', '321 Mango St., Pasig City', 'Male', '2007-05-23', NULL, 'roberto.reyes@example.com', 'Small', 16, 'Junior', 'Thursday, 27-Jul-2023 04:47:59 AM PHT'),
(454, 'Rosario', 'Tan', '111 Orchid St., Mandaluyong City', 'Female', '1994-11-08', NULL, 'rosario.tan@example.com', 'Small', 28, 'Senior', 'Thursday, 27-Jul-2023 04:51:34 AM PHT'),
(455, 'Emmanuel', 'Ramos', '222 Cherry St., Manila City', 'Male', '2010-03-09', NULL, 'emmanuel.ramos@example.com', 'Medium', 13, 'Junior', 'Thursday, 27-Jul-2023 04:51:34 AM PHT'),
(456, 'Teresa', 'Dela Cruz', '123 Pine St., Makati City', 'Female', '2009-07-06', '09209876543', 'teresa.delacruz@example.com', 'Small', 14, 'Junior', 'Thursday, 27-Jul-2023 04:51:34 AM PHT'),
(457, 'Pedro', 'Santos', '789 Rose St., Quezon City', 'Male', '2005-01-05', '09155678901', 'pedro.santos@example.com', 'Extra Large', 18, 'Junior', 'Thursday, 27-Jul-2023 04:51:34 AM PHT'),
(458, 'Anita', 'Garcia', '456 Tulip St., Makati City', 'Female', '1993-12-04', '09222345678', 'anita.garcia@example.com', 'Small', 29, 'Senior', 'Thursday, 27-Jul-2023 04:53:16 AM PHT'),
(459, 'Miguelito', 'Reyes', '321 Cherry Blossom St., Pasig City', 'Male', '2017-02-10', '09163456789', 'miguelito.reyes@example.com', 'Large', 6, 'Junior', 'Thursday, 27-Jul-2023 04:59:45 AM PHT'),
(461, 'Gabriel', 'Ramos', '222 Acacia St., Manila City', 'Male', '2000-12-11', '09127654321', 'gabriel.ramos@example.com', 'Large', 22, 'Senior', 'Thursday, 27-Jul-2023 04:59:45 AM PHT'),
(462, 'Rosalinda', 'Dela Cruz', '123 Magnolia St., Makati City', 'Female', '1986-02-03', '09127654321', 'rosalinda.delacruz@example.com', 'Medium', 37, 'Senior', 'Thursday, 27-Jul-2023 04:59:45 AM PHT'),
(463, 'Alejandro', 'Santos', '789 Orchid St., Quezon City', 'Male', '2011-12-25', '2147483647', 'alejandro.santos@example.com', 'Extra Large', 11, 'Junior', 'Thursday, 27-Jul-2023 04:59:45 AM PHT'),
(467, 'Ramon', 'Reyes', '321 Tulip St., Pasig City', 'Male', '1997-05-28', '2147483647', 'ramon.reyes@example.com', 'Extra Large', 26, 'Senior', 'Thursday, 27-Jul-2023 05:04:38 AM PHT'),
(468, 'Cris', 'Tan', '111 Pine St., Mandaluyong City', 'Male', '1993-08-21', '2147483647', 'cristina.tan@example.com', 'Large', 29, 'Senior', 'Thursday, 27-Jul-2023 05:05:36 AM PHT'),
(469, 'haha', 'haha', 'haha', 'Male', '2020-12-19', '2147483647', 'sadasdasd@gfgfgf', 'Medium', 2, 'Junior', 'Thursday, 27-Jul-2023 05:25:54 AM PHT'),
(470, 'Naruto', 'Naruto', 'Naruto', 'Male', '2022-02-22', '09187654321', 'sadasdasd@gfgfgf', 'Small', 1, 'Junior', 'Thursday, 27-Jul-2023 05:31:17 AM PHT');

-- --------------------------------------------------------

--
-- Table structure for table `tblcontact`
--

CREATE TABLE `tblcontact` (
  `runnerID` int(11) NOT NULL DEFAULT 0,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `comAddress` varchar(255) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `nBday` date NOT NULL,
  `contactNum` varchar(255) DEFAULT NULL,
  `emailAdd` varchar(255) NOT NULL,
  `shirtSize` varchar(50) NOT NULL,
  `theAge` int(50) NOT NULL,
  `jRsR` varchar(50) NOT NULL,
  `regTime` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblcontact`
--

INSERT INTO `tblcontact` (`runnerID`, `firstName`, `lastName`, `comAddress`, `gender`, `nBday`, `contactNum`, `emailAdd`, `shirtSize`, `theAge`, `jRsR`, `regTime`) VALUES
(440, 'Juan', 'Dela Cruz', '123 Rizal St., Makati City', 'Male', '2000-01-15', '09123456789', 'juan.delacruz@example.com', 'Medium', 23, 'Senior', 'Thursday, 27-Jul-2023 04:32:35 AM PHT'),
(443, 'Maria', 'Santos', '456 Sampaguita Ave., Quezon City', 'Female', '2020-04-28', '09187654321', 'maria.santos@example.com', 'Small', 3, 'Junior', 'Thursday, 27-Jul-2023 04:36:10 AM PHT'),
(446, 'Miguel', 'Ramos', '111 Tamarind St., Mandaluyong City', 'Male', '1992-02-11', '09171234567', 'miguel.ramos@example.com', 'Large', 31, 'Senior', 'Thursday, 27-Jul-2023 04:38:23 AM PHT'),
(447, 'Sofia', 'Tan', '222 Kamias St., Manila City', 'Female', '1987-12-03', '09209876543', 'sofia.tan@example.com', 'Small', 35, 'Senior', 'Thursday, 27-Jul-2023 04:39:03 AM PHT'),
(448, 'Rafael', 'Santos', '789 Sunflower St., Quezon City', 'Male', '1970-12-05', '09155678901', 'rorafael.santos@example.com', 'Large', 52, 'Senior', 'Thursday, 27-Jul-2023 04:45:33 AM PHT'),
(449, 'Rose', 'Santos', '789 Sunflower St., Quezon City', 'Female', '1972-12-07', '09222345678', 'rorafael.santos@example.com', 'Medium', 50, 'Senior', 'Thursday, 27-Jul-2023 04:45:33 AM PHT'),
(450, 'Rica', 'Santos', '789 Sunflower St., Quezon City', 'Female', '1990-02-22', '09163456789', 'rica.santos@example.com', 'Small', 33, 'Senior', 'Thursday, 27-Jul-2023 04:45:33 AM PHT'),
(451, 'Rico', 'Santos', '789 Sunflower St., Quezon City', 'Male', '1990-02-22', '09127654321', 'ric01.santos@example.com', 'Large', 33, 'Senior', 'Thursday, 27-Jul-2023 04:45:33 AM PHT'),
(452, 'Lourdes', 'Garcia', '456 Acacia St., Makati City', 'Female', '2018-07-18', '09171234567', 'lourdes.garcia@example.com', 'Medium', 5, 'Junior', 'Thursday, 27-Jul-2023 04:46:55 AM PHT'),
(456, 'Teresa', 'Dela Cruz', '123 Pine St., Makati City', 'Female', '2009-07-06', '09209876543', 'teresa.delacruz@example.com', 'Small', 14, 'Junior', 'Thursday, 27-Jul-2023 04:51:34 AM PHT'),
(457, 'Pedro', 'Santos', '789 Rose St., Quezon City', 'Male', '2005-01-05', '09155678901', 'pedro.santos@example.com', 'Extra Large', 18, 'Junior', 'Thursday, 27-Jul-2023 04:51:34 AM PHT'),
(458, 'Anita', 'Garcia', '456 Tulip St., Makati City', 'Female', '1993-12-04', '09222345678', 'anita.garcia@example.com', 'Small', 29, 'Senior', 'Thursday, 27-Jul-2023 04:53:16 AM PHT'),
(459, 'Miguelito', 'Reyes', '321 Cherry Blossom St., Pasig City', 'Male', '2017-02-10', '09163456789', 'miguelito.reyes@example.com', 'Large', 6, 'Junior', 'Thursday, 27-Jul-2023 04:59:45 AM PHT'),
(461, 'Gabriel', 'Ramos', '222 Acacia St., Manila City', 'Male', '2000-12-11', '09127654321', 'gabriel.ramos@example.com', 'Large', 22, 'Senior', 'Thursday, 27-Jul-2023 04:59:45 AM PHT'),
(462, 'Rosalinda', 'Dela Cruz', '123 Magnolia St., Makati City', 'Female', '1986-02-03', '09127654321', 'rosalinda.delacruz@example.com', 'Medium', 37, 'Senior', 'Thursday, 27-Jul-2023 04:59:45 AM PHT'),
(463, 'Alejandro', 'Santos', '789 Orchid St., Quezon City', 'Male', '2011-12-25', '2147483647', 'alejandro.santos@example.com', 'Extra Large', 11, 'Junior', 'Thursday, 27-Jul-2023 04:59:45 AM PHT'),
(467, 'Ramon', 'Reyes', '321 Tulip St., Pasig City', 'Male', '1997-05-28', '2147483647', 'ramon.reyes@example.com', 'Extra Large', 26, 'Senior', 'Thursday, 27-Jul-2023 05:04:38 AM PHT'),
(468, 'Cris', 'Tan', '111 Pine St., Mandaluyong City', 'Male', '1993-08-21', '2147483647', 'cristina.tan@example.com', 'Large', 29, 'Senior', 'Thursday, 27-Jul-2023 05:05:36 AM PHT'),
(469, 'haha', 'haha', 'haha', 'Male', '2020-12-19', '2147483647', 'sadasdasd@gfgfgf', 'Medium', 2, 'Junior', 'Thursday, 27-Jul-2023 05:25:54 AM PHT'),
(470, 'Naruto', 'Naruto', 'Naruto', 'Male', '2022-02-22', '09187654321', 'sadasdasd@gfgfgf', 'Small', 1, 'Junior', 'Thursday, 27-Jul-2023 05:31:17 AM PHT');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_runforearth`
--

CREATE TABLE `tbl_runforearth` (
  `runnerID` int(11) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `comAddress` varchar(255) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `nBday` date NOT NULL,
  `contactNum` varchar(255) DEFAULT NULL,
  `emailAdd` varchar(255) NOT NULL,
  `shirtSize` varchar(50) NOT NULL,
  `theAge` int(50) NOT NULL,
  `jRsR` varchar(50) NOT NULL,
  `regTime` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_runforearth`
--

INSERT INTO `tbl_runforearth` (`runnerID`, `firstName`, `lastName`, `comAddress`, `gender`, `nBday`, `contactNum`, `emailAdd`, `shirtSize`, `theAge`, `jRsR`, `regTime`) VALUES
(440, 'Juan', 'Dela Cruz', '123 Rizal St., Makati City', 'Male', '2000-01-15', '09123456789', 'juan.delacruz@example.com', 'Medium', 23, 'Senior', 'Thursday, 27-Jul-2023 04:32:35 AM PHT'),
(443, 'Maria', 'Santos', '456 Sampaguita Ave., Quezon City', 'Female', '2020-04-28', '09187654321', 'maria.santos@example.com', 'Small', 3, 'Junior', 'Thursday, 27-Jul-2023 04:36:10 AM PHT'),
(444, 'Jose', 'Reyes', '789 Narra St., Caloocan City', 'Male', '1995-10-10', NULL, 'jose.reyes@example.com', 'Extra Large', 27, 'Senior', 'Thursday, 27-Jul-2023 04:36:10 AM PHT'),
(445, 'Ana', 'Garcia', '321 Sampaloc Ave., Pasig City', 'Female', '2015-02-10', NULL, 'ana.garcia@example.com', 'Medium', 8, 'Junior', 'Thursday, 27-Jul-2023 04:38:23 AM PHT'),
(446, 'Miguel', 'Ramos', '111 Tamarind St., Mandaluyong City', 'Male', '1992-02-11', '09171234567', 'miguel.ramos@example.com', 'Large', 31, 'Senior', 'Thursday, 27-Jul-2023 04:38:23 AM PHT'),
(447, 'Sofia', 'Tan', '222 Kamias St., Manila City', 'Female', '1987-12-03', '09209876543', 'sofia.tan@example.com', 'Small', 35, 'Senior', 'Thursday, 27-Jul-2023 04:39:03 AM PHT'),
(448, 'Rafael', 'Santos', '789 Sunflower St., Quezon City', 'Male', '1970-12-05', '09155678901', 'rorafael.santos@example.com', 'Large', 52, 'Senior', 'Thursday, 27-Jul-2023 04:45:33 AM PHT'),
(449, 'Rose', 'Santos', '789 Sunflower St., Quezon City', 'Female', '1972-12-07', '09222345678', 'rorafael.santos@example.com', 'Medium', 50, 'Senior', 'Thursday, 27-Jul-2023 04:45:33 AM PHT'),
(450, 'Rica', 'Santos', '789 Sunflower St., Quezon City', 'Female', '1990-02-22', '09163456789', 'rica.santos@example.com', 'Small', 33, 'Senior', 'Thursday, 27-Jul-2023 04:45:33 AM PHT'),
(451, 'Rico', 'Santos', '789 Sunflower St., Quezon City', 'Male', '1990-02-22', '09127654321', 'ric01.santos@example.com', 'Large', 33, 'Senior', 'Thursday, 27-Jul-2023 04:45:33 AM PHT'),
(452, 'Lourdes', 'Garcia', '456 Acacia St., Makati City', 'Female', '2018-07-18', '09171234567', 'lourdes.garcia@example.com', 'Medium', 5, 'Junior', 'Thursday, 27-Jul-2023 04:46:55 AM PHT'),
(453, 'Roberto', 'Reyes', '321 Mango St., Pasig City', 'Male', '2007-05-23', NULL, 'roberto.reyes@example.com', 'Small', 16, 'Junior', 'Thursday, 27-Jul-2023 04:47:59 AM PHT'),
(454, 'Rosario', 'Tan', '111 Orchid St., Mandaluyong City', 'Female', '1994-11-08', NULL, 'rosario.tan@example.com', 'Small', 28, 'Senior', 'Thursday, 27-Jul-2023 04:51:34 AM PHT'),
(455, 'Emmanuel', 'Ramos', '222 Cherry St., Manila City', 'Male', '2010-03-09', NULL, 'emmanuel.ramos@example.com', 'Medium', 13, 'Junior', 'Thursday, 27-Jul-2023 04:51:34 AM PHT'),
(456, 'Teresa', 'Dela Cruz', '123 Pine St., Makati City', 'Female', '2009-07-06', '09209876543', 'teresa.delacruz@example.com', 'Small', 14, 'Junior', 'Thursday, 27-Jul-2023 04:51:34 AM PHT'),
(457, 'Pedro', 'Santos', '789 Rose St., Quezon City', 'Male', '2005-01-05', '09155678901', 'pedro.santos@example.com', 'Extra Large', 18, 'Junior', 'Thursday, 27-Jul-2023 04:51:34 AM PHT'),
(458, 'Anita', 'Garcia', '456 Tulip St., Makati City', 'Female', '1993-12-04', '09222345678', 'anita.garcia@example.com', 'Small', 29, 'Senior', 'Thursday, 27-Jul-2023 04:53:16 AM PHT'),
(459, 'Miguelito', 'Reyes', '321 Cherry Blossom St., Pasig City', 'Male', '2017-02-10', '09163456789', 'miguelito.reyes@example.com', 'Large', 6, 'Junior', 'Thursday, 27-Jul-2023 04:59:45 AM PHT'),
(461, 'Gabriel', 'Ramos', '222 Acacia St., Manila City', 'Male', '2000-12-11', '09127654321', 'gabriel.ramos@example.com', 'Large', 22, 'Senior', 'Thursday, 27-Jul-2023 04:59:45 AM PHT'),
(462, 'Rosalinda', 'Dela Cruz', '123 Magnolia St., Makati City', 'Female', '1986-02-03', '09127654321', 'rosalinda.delacruz@example.com', 'Medium', 37, 'Senior', 'Thursday, 27-Jul-2023 04:59:45 AM PHT'),
(463, 'Alejandro', 'Santos', '789 Orchid St., Quezon City', 'Male', '2011-12-25', '', 'alejandro.santos@example.com', 'Extra Large', 11, 'Junior', 'Thursday, 27-Jul-2023 04:59:45 AM PHT'),
(467, 'Ramon', 'Reyes', '321 Tulip St., Pasig City', 'Male', '1997-05-28', '', 'ramon.reyes@example.com', 'Extra Large', 26, 'Senior', 'Thursday, 27-Jul-2023 05:04:38 AM PHT'),
(468, 'Cris', 'Tan', '111 Pine St., Mandaluyong City', 'Male', '1993-08-21', '', 'cristina.tan@example.com', 'Large', 29, 'Senior', 'Thursday, 27-Jul-2023 05:05:36 AM PHT'),
(469, 'haha', 'haha', 'haha', 'Male', '2020-12-19', '', 'sadasdasd@gfgfgf', 'Medium', 2, 'Junior', 'Thursday, 27-Jul-2023 05:25:54 AM PHT'),
(470, 'Naruto', 'Naruto', 'Naruto', 'Male', '2022-02-22', '09187654321', 'sadasdasd@gfgfgf', 'Small', 1, 'Junior', 'Thursday, 27-Jul-2023 05:31:17 AM PHT');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_search`
--

CREATE TABLE `tbl_search` (
  `runnerID` int(11) NOT NULL DEFAULT 0,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `comAddress` varchar(255) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `nBday` date NOT NULL,
  `contactNum` varchar(255) DEFAULT NULL,
  `emailAdd` varchar(255) NOT NULL,
  `shirtSize` varchar(50) NOT NULL,
  `theAge` int(50) NOT NULL,
  `jRsR` varchar(50) NOT NULL,
  `regTime` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_search`
--

INSERT INTO `tbl_search` (`runnerID`, `firstName`, `lastName`, `comAddress`, `gender`, `nBday`, `contactNum`, `emailAdd`, `shirtSize`, `theAge`, `jRsR`, `regTime`) VALUES
(467, 'Ramon', 'Reyes', '321 Tulip St., Pasig City', 'Male', '1997-05-28', '2147483647', 'ramon.reyes@example.com', 'Extra Large', 26, 'Senior', 'Thursday, 27-Jul-2023 05:04:38 AM PHT');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `new_tbl`
--
ALTER TABLE `new_tbl`
  ADD UNIQUE KEY `runnerID` (`runnerID`);

--
-- Indexes for table `tblabove40`
--
ALTER TABLE `tblabove40`
  ADD UNIQUE KEY `runnerID` (`runnerID`);

--
-- Indexes for table `tblbelow39`
--
ALTER TABLE `tblbelow39`
  ADD UNIQUE KEY `runnerID` (`runnerID`);

--
-- Indexes for table `tblcontact`
--
ALTER TABLE `tblcontact`
  ADD UNIQUE KEY `runnerID` (`runnerID`);

--
-- Indexes for table `tbl_runforearth`
--
ALTER TABLE `tbl_runforearth`
  ADD PRIMARY KEY (`runnerID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_runforearth`
--
ALTER TABLE `tbl_runforearth`
  MODIFY `runnerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=471;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
