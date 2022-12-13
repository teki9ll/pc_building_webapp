-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2022 at 11:05 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `parts`
--

-- --------------------------------------------------------

--
-- Table structure for table `cases`
--

CREATE TABLE `cases` (
  `case_id` int(20) NOT NULL,
  `parent_id` int(20) NOT NULL,
  `case_name` varchar(20) NOT NULL,
  `case_price` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cases`
--

INSERT INTO `cases` (`case_id`, `parent_id`, `case_name`, `case_price`) VALUES
(1, 1, 'MSI1', 100),
(2, 1, 'MSI2', 150),
(3, 1, 'MSI3', 250),
(4, 2, 'ASUS1', 120),
(5, 2, 'ASUS2', 150),
(6, 3, 'ANT ESPORTS1', 50),
(7, 3, 'ANT ESPORTS2', 90),
(8, 3, 'ANT ESPORTS3', 140),
(9, 4, 'NZXT1', 200),
(10, 4, 'NZXT2', 300);

-- --------------------------------------------------------

--
-- Table structure for table `casetype`
--

CREATE TABLE `casetype` (
  `type_id` int(100) NOT NULL,
  `type_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `casetype`
--

INSERT INTO `casetype` (`type_id`, `type_name`) VALUES
(1, 'MSI'),
(2, 'ASUS'),
(3, 'ANT ESPORTS'),
(4, 'NZXT');

-- --------------------------------------------------------

--
-- Table structure for table `cooler`
--

CREATE TABLE `cooler` (
  `cooler_id` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `cooler_name` varchar(20) NOT NULL,
  `cooler_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cooler`
--

INSERT INTO `cooler` (`cooler_id`, `parent_id`, `cooler_name`, `cooler_price`) VALUES
(1, 1, 'STOCK', 0),
(2, 2, 'AIR 1', 100),
(3, 2, 'AIR 2', 200),
(4, 3, 'AIO 1', 500),
(5, 3, 'AIO 2', 700);

-- --------------------------------------------------------

--
-- Table structure for table `coolertype`
--

CREATE TABLE `coolertype` (
  `type_id` int(11) NOT NULL,
  `type_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `coolertype`
--

INSERT INTO `coolertype` (`type_id`, `type_name`) VALUES
(1, 'STOCK'),
(2, 'AIR'),
(3, 'AIO');

-- --------------------------------------------------------

--
-- Table structure for table `cpu`
--

CREATE TABLE `cpu` (
  `cpu_id` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `cpu_name` varchar(20) NOT NULL,
  `cpu_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cpu`
--

INSERT INTO `cpu` (`cpu_id`, `parent_id`, `cpu_name`, `cpu_price`) VALUES
(1, 1, 'I3 10100f', 8000),
(2, 1, 'I5 10400', 12000),
(3, 2, 'R5 3100x', 7000),
(4, 2, 'R7 3700x', 17000);

-- --------------------------------------------------------

--
-- Table structure for table `cputype`
--

CREATE TABLE `cputype` (
  `type_id` int(11) NOT NULL,
  `type_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cputype`
--

INSERT INTO `cputype` (`type_id`, `type_name`) VALUES
(1, 'INTEL'),
(2, 'AMD');

-- --------------------------------------------------------

--
-- Table structure for table `gpu`
--

CREATE TABLE `gpu` (
  `gpu_id` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `gpu_name` varchar(20) NOT NULL,
  `gpu_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gpu`
--

INSERT INTO `gpu` (`gpu_id`, `parent_id`, `gpu_name`, `gpu_price`) VALUES
(1, 1, 'MSI GTX 1660 Super', 5000),
(2, 1, 'MSI RTX 2060 Super', 6000),
(3, 1, 'ASUS RTX 4090', 9999),
(4, 2, 'ASUS 6700XT', 4000),
(5, 2, 'MSI 7900XT', 7000),
(6, 3, 'ASUS INTEL 1', 1000);

-- --------------------------------------------------------

--
-- Table structure for table `gputype`
--

CREATE TABLE `gputype` (
  `type_id` int(11) NOT NULL,
  `type_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gputype`
--

INSERT INTO `gputype` (`type_id`, `type_name`) VALUES
(1, 'NVIDIA'),
(2, 'AMD'),
(3, 'INTEL');

-- --------------------------------------------------------

--
-- Table structure for table `mobo`
--

CREATE TABLE `mobo` (
  `mobo_id` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `mobo_name` varchar(20) NOT NULL,
  `mobo_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mobo`
--

INSERT INTO `mobo` (`mobo_id`, `parent_id`, `mobo_name`, `mobo_price`) VALUES
(1, 1, 'MOBO INTEL 1', 1000),
(2, 1, 'MOBO INTEL 2', 2000),
(3, 1, 'MOBO INTEL 3', 3000),
(4, 2, 'MOBO AMD 1', 800),
(5, 2, 'MOBO AMD 2', 1300),
(6, 2, 'MOBO AMD 3', 2000);

-- --------------------------------------------------------

--
-- Table structure for table `os`
--

CREATE TABLE `os` (
  `os_id` int(11) NOT NULL,
  `os_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `os`
--

INSERT INTO `os` (`os_id`, `os_name`) VALUES
(1, 'WINDOWS 10 32bit'),
(2, 'WINDOWS 10 64bit'),
(3, 'WINDOWS 11');

-- --------------------------------------------------------

--
-- Table structure for table `psu`
--

CREATE TABLE `psu` (
  `psu_id` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `psu_name` varchar(20) NOT NULL,
  `psu_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `psu`
--

INSERT INTO `psu` (`psu_id`, `parent_id`, `psu_name`, `psu_price`) VALUES
(1, 1, 'CORSAIR 1', 1000),
(2, 1, 'CORSAIR 2', 1500),
(3, 2, 'NZXT 1', 1200),
(4, 2, 'NZXT 2', 1800);

-- --------------------------------------------------------

--
-- Table structure for table `psutype`
--

CREATE TABLE `psutype` (
  `type_id` int(11) NOT NULL,
  `type_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `psutype`
--

INSERT INTO `psutype` (`type_id`, `type_name`) VALUES
(1, 'CORSAIR'),
(2, 'NZXT');

-- --------------------------------------------------------

--
-- Table structure for table `ram`
--

CREATE TABLE `ram` (
  `ram_id` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `ram_name` varchar(20) NOT NULL,
  `ram_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ram`
--

INSERT INTO `ram` (`ram_id`, `parent_id`, `ram_name`, `ram_price`) VALUES
(1, 1, 'CORSAIR RGB', 1000),
(2, 1, 'CORSAIR XYZ', 1500),
(3, 2, 'CORSAIR NON-RGB 1', 1000),
(4, 3, 'THERMALTAKE RGB 1', 2000);

-- --------------------------------------------------------

--
-- Table structure for table `ramtype`
--

CREATE TABLE `ramtype` (
  `type_id` int(11) NOT NULL,
  `type_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ramtype`
--

INSERT INTO `ramtype` (`type_id`, `type_name`) VALUES
(1, '3000Hz'),
(2, '3200Hz'),
(3, '3600Hz');

-- --------------------------------------------------------

--
-- Table structure for table `strg`
--

CREATE TABLE `strg` (
  `str_id` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `str_name` varchar(20) NOT NULL,
  `str_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `strg`
--

INSERT INTO `strg` (`str_id`, `parent_id`, `str_name`, `str_price`) VALUES
(1, 1, 'WD GREEN 240', 2500),
(2, 1, 'WD BLACK 512', 5500),
(3, 2, 'SEAGATE 512', 1500),
(4, 2, 'SEAGATE 1024', 2500);

-- --------------------------------------------------------

--
-- Table structure for table `strtype`
--

CREATE TABLE `strtype` (
  `type_id` int(11) NOT NULL,
  `type_name` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `strtype`
--

INSERT INTO `strtype` (`type_id`, `type_name`) VALUES
(1, 'SSD'),
(2, 'HDD');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cases`
--
ALTER TABLE `cases`
  ADD PRIMARY KEY (`case_id`);

--
-- Indexes for table `casetype`
--
ALTER TABLE `casetype`
  ADD PRIMARY KEY (`type_id`);

--
-- Indexes for table `cooler`
--
ALTER TABLE `cooler`
  ADD PRIMARY KEY (`cooler_id`);

--
-- Indexes for table `coolertype`
--
ALTER TABLE `coolertype`
  ADD PRIMARY KEY (`type_id`);

--
-- Indexes for table `cpu`
--
ALTER TABLE `cpu`
  ADD PRIMARY KEY (`cpu_id`);

--
-- Indexes for table `cputype`
--
ALTER TABLE `cputype`
  ADD PRIMARY KEY (`type_id`);

--
-- Indexes for table `gpu`
--
ALTER TABLE `gpu`
  ADD PRIMARY KEY (`gpu_id`);

--
-- Indexes for table `gputype`
--
ALTER TABLE `gputype`
  ADD PRIMARY KEY (`type_id`);

--
-- Indexes for table `mobo`
--
ALTER TABLE `mobo`
  ADD PRIMARY KEY (`mobo_id`);

--
-- Indexes for table `os`
--
ALTER TABLE `os`
  ADD PRIMARY KEY (`os_id`);

--
-- Indexes for table `psu`
--
ALTER TABLE `psu`
  ADD PRIMARY KEY (`psu_id`);

--
-- Indexes for table `psutype`
--
ALTER TABLE `psutype`
  ADD PRIMARY KEY (`type_id`);

--
-- Indexes for table `ram`
--
ALTER TABLE `ram`
  ADD PRIMARY KEY (`ram_id`);

--
-- Indexes for table `ramtype`
--
ALTER TABLE `ramtype`
  ADD PRIMARY KEY (`type_id`);

--
-- Indexes for table `strg`
--
ALTER TABLE `strg`
  ADD PRIMARY KEY (`str_id`);

--
-- Indexes for table `strtype`
--
ALTER TABLE `strtype`
  ADD PRIMARY KEY (`type_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cooler`
--
ALTER TABLE `cooler`
  MODIFY `cooler_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `coolertype`
--
ALTER TABLE `coolertype`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cpu`
--
ALTER TABLE `cpu`
  MODIFY `cpu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cputype`
--
ALTER TABLE `cputype`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `gpu`
--
ALTER TABLE `gpu`
  MODIFY `gpu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `gputype`
--
ALTER TABLE `gputype`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `os`
--
ALTER TABLE `os`
  MODIFY `os_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `psu`
--
ALTER TABLE `psu`
  MODIFY `psu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `psutype`
--
ALTER TABLE `psutype`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ram`
--
ALTER TABLE `ram`
  MODIFY `ram_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ramtype`
--
ALTER TABLE `ramtype`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `strg`
--
ALTER TABLE `strg`
  MODIFY `str_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
