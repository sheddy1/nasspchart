-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2022 at 01:14 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nassp`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `employee` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`employee`) VALUES
('Shadrach Kumusu'),
('Ogunsaya Korede'),
('Adam Adam MOhammed'),
('Micheal Adetola');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `employee` varchar(50) NOT NULL,
  `table1` varchar(50) NOT NULL,
  `month1` varchar(50) NOT NULL,
  `id` int(10) NOT NULL,
  `userid` varchar(50) NOT NULL,
  `1` varchar(50) NOT NULL,
  `2` varchar(50) NOT NULL,
  `3` varchar(50) NOT NULL,
  `4` varchar(50) NOT NULL,
  `5` varchar(50) NOT NULL,
  `6` varchar(50) NOT NULL,
  `7` varchar(50) NOT NULL,
  `8` varchar(50) NOT NULL,
  `9` varchar(50) NOT NULL,
  `10` varchar(50) NOT NULL,
  `11` varchar(50) NOT NULL,
  `12` varchar(50) NOT NULL,
  `13` varchar(50) NOT NULL,
  `14` varchar(50) NOT NULL,
  `15` varchar(50) NOT NULL,
  `16` varchar(50) NOT NULL,
  `17` varchar(50) NOT NULL,
  `18` varchar(50) NOT NULL,
  `19` varchar(50) NOT NULL,
  `20` varchar(50) NOT NULL,
  `21` varchar(50) NOT NULL,
  `22` varchar(50) NOT NULL,
  `23` varchar(50) NOT NULL,
  `24` varchar(50) NOT NULL,
  `25` varchar(50) NOT NULL,
  `26` varchar(50) NOT NULL,
  `27` varchar(50) NOT NULL,
  `28` varchar(50) NOT NULL,
  `29` varchar(50) NOT NULL,
  `30` varchar(50) NOT NULL,
  `31` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`employee`, `table1`, `month1`, `id`, `userid`, `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `9`, `10`, `11`, `12`, `13`, `14`, `15`, `16`, `17`, `18`, `19`, `20`, `21`, `22`, `23`, `24`, `25`, `26`, `27`, `28`, `29`, `30`, `31`) VALUES
('Apera Iorwa', 'RRR spot check', 'April', 41551, '90023', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open'),
('Kabir Mohammed', 'RRR spot check', 'April', 41551, '74104', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open'),
('Abdullahi Lawal', 'RRR spot check', 'April', 41551, '90470', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open'),
('Ngozi', 'RRR spot check', 'April', 41551, '33667', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open'),
('Ashu Angu', 'RRR spot check', 'April', 41551, '59668', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open'),
('Kofo', 'RRR spot check', 'April', 41551, '73258', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open'),
('Bridget', 'RRR spot check', 'April', 41551, '16204', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open'),
('Tijani Salihu', 'RRR spot check', 'April', 41551, '93845', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open'),
('Martins ', 'RRR spot check', 'April', 41551, '39137', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open'),
('Mahdi', 'RRR spot check', 'April', 41551, '52395', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open'),
('Modusola Balogun', 'RRR spot check', 'April', 41551, '18080', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open'),
('Sember Oteyi', 'RRR spot check', 'April', 41551, '64982', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open'),
('Ruth Adgazu', 'RRR spot check', 'April', 41551, '65228', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open'),
('Cyntia', 'RRR spot check', 'April', 41551, '67698', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open'),
('Esther Peke', 'RRR spot check', 'April', 41551, '54511', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open'),
('Amaka Asiegbu ', 'RRR spot check', 'April', 41551, '89794', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open'),
('Dikko BAla\r\n', 'RRR spot check', 'April', 41551, '92272', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open'),
('Victor', 'RRR spot check', 'April', 41551, '79302', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open'),
('Sesugh Nongo', 'RRR spot check', 'April', 41551, '84817', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open'),
('Shadrach Godwin', 'RRR spot check', 'April', 41551, '12452', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open'),
('Hamma Nasiru', 'RRR spot check', 'April', 41551, '84500', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open'),
('Murtala Mohammed', 'RRR spot check', 'April', 41551, '24915', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open'),
('Murtala LAu', 'RRR spot check', 'April', 41551, '48755', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open'),
('Korede ogunsaya', 'RRR spot check', 'April', 41551, '19573', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open'),
('Emetulu Augustine', 'RRR spot check', 'April', 41551, '48398', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open'),
('Mustapha', 'RRR spot check', 'April', 41551, '95740', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open'),
('Awalu Ibrahim', 'RRR spot check', 'April', 41551, '33913', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open'),
('Oluwaseun Dniel', 'RRR spot check', 'April', 41551, '49987', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open'),
('Amber Daniel', 'RRR spot check', 'April', 41551, '15524', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open'),
('Adam Adam MOhammed', 'RRR spot check', 'April', 41551, '81348', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open'),
('Ezikel Bala', 'RRR spot check', 'April', 41551, '70599', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open'),
('Emmanuel Nnaji', 'RRR spot check', 'April', 41551, '11834', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open'),
('Amos Dauda', 'RRR spot check', 'April', 41551, '95207', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open'),
('Shadrach Kumusu', 'RRR spot check', 'April', 41551, '91606', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open'),
('Orduene Shambe', 'RRR spot check', 'April', 41551, '69876', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open'),
('Malik Lawal ', 'RRR spot check', 'April', 41551, '91336', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open'),
('Orijime Benjamin', 'RRR spot check', 'April', 41551, '45855', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open'),
('Joe Abuju', 'RRR spot check', 'April', 41551, '78353', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open'),
('Yusuf Gana', 'RRR spot check', 'April', 41551, '98992', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open'),
('Joe', 'RRR spot check', 'April', 41551, '23311', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open'),
('Shadrach Kumusu', 'Review Meeting', 'January', 49587, '51561', 'open', 'open', 'open', 'closed', 'closed', 'closed', 'closed', 'closed', 'closed', 'closed', 'closed', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open'),
('Ogunsaya Korede', 'Review Meeting', 'January', 49587, '63941', 'open', 'open', 'open', 'closed', 'closed', 'closed', 'closed', 'closed', 'closed', 'closed', 'closed', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open'),
('Adam Adam MOhammed', 'Review Meeting', 'January', 49587, '53799', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open'),
('Micheal Adetola', 'Review Meeting', 'January', 49587, '63598', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open');

-- --------------------------------------------------------

--
-- Table structure for table `names`
--

CREATE TABLE `names` (
  `names` varchar(50) NOT NULL,
  `id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `names`
--

INSERT INTO `names` (`names`, `id`) VALUES
('Shadrach Kumusu', 51561),
('Ogunsaya Korede', 63941);

-- --------------------------------------------------------

--
-- Table structure for table `nassp_employees`
--

CREATE TABLE `nassp_employees` (
  `employees` varchar(100) NOT NULL,
  `id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nassp_employees`
--

INSERT INTO `nassp_employees` (`employees`, `id`) VALUES
('Apera Iorwa', 100),
('Kabir Mohammed', 101),
('Abdullahi Lawal', 102),
('Ngozi', 103),
('Ashu Angu', 104),
('Kofo', 105),
('Bridget', 106),
('Tijani Salihu', 107),
('Martins ', 108),
('Mahdi', 109),
('Modusola Balogun', 110),
('Sember Oteyi', 111),
('Ruth Adgazu', 112),
('Cyntia', 113),
('Esther Peke', 114),
('Amaka Asiegbu ', 115),
('Dikko BAla\r\n', 116),
('Victor', 117),
('Sesugh Nongo', 118),
('Shadrach Godwin', 119),
('Hamma Nasiru', 120),
('Murtala Mohammed', 121),
('Murtala LAu', 122),
('Korede ogunsaya', 123),
('Emetulu Augustine', 124),
('Mustapha', 125),
('Awalu Ibrahim', 126),
('Oluwaseun Dniel', 127),
('Amber Daniel', 128),
('Adam Adam MOhammed', 129),
('Ezikel Bala', 130),
('Emmanuel Nnaji', 131),
('Amos Dauda', 132),
('Shadrach Kumusu', 133),
('Orduene Shambe', 134),
('Malik Lawal ', 135),
('Orijime Benjamin', 136),
('Joe Abuju', 137),
('Yusuf Gana', 138),
('Joe', 139);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
