-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 04, 2020 at 07:23 PM
-- Server version: 5.6.38
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `collegeinventory`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `name` varchar(35) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `username`, `password`) VALUES
('Abc Bcd', 'admin', 'admin'),
('newadmin', 'newadmin', 'newadmin');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `dr_id` varchar(35) NOT NULL,
  `category` varchar(20) NOT NULL,
  `d_name` varchar(25) NOT NULL,
  `reason` varchar(100) NOT NULL,
  `maint` varchar(15) NOT NULL,
  `expenditure` int(25) NOT NULL,
  `info` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`dr_id`, `category`, `d_name`, `reason`, `maint`, `expenditure`, `info`) VALUES
('Hshsbshsha', 'Vagzvsmxa', 'Ysbdj', 'Whbsah', 'Sbsjsb', 646, ' Ahvsks');

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `dr_id` varchar(35) NOT NULL,
  `category` varchar(30) NOT NULL,
  `d_name` varchar(20) NOT NULL,
  `location` varchar(50) NOT NULL,
  `brand` varchar(25) NOT NULL,
  `inst_date` varchar(25) NOT NULL,
  `bill_date` varchar(25) NOT NULL,
  `store_no` int(10) NOT NULL,
  `other` varchar(100) NOT NULL,
  `status` varchar(25) NOT NULL,
  `price` int(20) NOT NULL,
  `assistance` varchar(40) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`dr_id`, `category`, `d_name`, `location`, `brand`, `inst_date`, `bill_date`, `store_no`, `other`, `status`, `price`, `assistance`) VALUES
('Hshsh', 'Hdhdh', 'Hshs', 'Hshs', 'Hssh', 'Shhs', 'Hssh', 0, ' Shhssh', 'Hssh', 246, 'Gshsh'),
('Xjfg', 'Fhbhs', 'Bsbsb', 'Bzbzbs', 'Bzsb', 'Bxbdb', 'Bdbdbd', 0, ' Bdbsbsbs', 'Jdjd', 246, 'Sbbsbs'),
('Vfcjvfc', 'Vgcrvhv', 'Jvutvhvuf', 'Ifcjdc', 'Jfcufcu', 'Jfcjdc', 'Jfcjfc', 8282, ' Ufcjrcuf', 'Ufcydx', 648, 'Jgufxufx'),
('Hsbisbs', 'Vsolavod', 'Gsjbskbs', 'Hshvsksb', 'Hsjbskbdb', 'Hdbsjbs', 'Hsbdnbs', 6494, ' Hahrgbs', 'Hshvshs', 6194, 'Hsbshbs');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `name` varchar(255) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `username`, `password`) VALUES
('Abc Bcd', 'user', 'user'),
('premchand', 'premchand', 'premchand');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
