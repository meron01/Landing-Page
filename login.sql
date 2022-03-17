-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2017 at 09:40 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `adddrug`
--

CREATE TABLE `adddrug` (
  `stockcode` varchar(255) NOT NULL,
  `itemname` varchar(255) NOT NULL,
  `unit` varchar(255) NOT NULL,
  `quantity` int(255) NOT NULL,
  `unitprice` int(255) NOT NULL,
  `totalsellingprice` int(255) NOT NULL,
  `manufacturer` varchar(255) NOT NULL,
  `batchnumber` int(255) NOT NULL,
  `expdate` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adddrug`
--

INSERT INTO `adddrug` (`stockcode`, `itemname`, `unit`, `quantity`, `unitprice`, `totalsellingprice`, `manufacturer`, `batchnumber`, `expdate`) VALUES
('wosen', 'alemu', '12', 12000, 12333, 4645798, 'wollo', 12, '12/12/2010'),
('12', 'paracetamol', '12', 12, 1200000, 120000000, 'gondar', 12, '12/12/2010'),
('55', 'tablets', '12', 10000, 2000000, 29000000, 'adisababa', 67, '12/09/2024'),
('1223', 'para', '3', 45, 34, 23, 'ethio', 2234, '2009'),
('09090', 'paracetamol', '4765', 657668889, 58778978, 868098, 'ethiopia', 12, '12/09/2024'),
('32677', 'amoxalin', '90', 8, 788, 899, 'USA12', 11, '2/09/2015'),
('888888888', 'amoxalin', '5677', 98890, 89999, 788899, 'USA', 9, '12/12/2010'),
('89', 'parecetamol', '78', 567, 200, 4300, 'gondar', 90, '12/09/2020'),
('6767', 'parecetamol', '44', 6687, 8785, 57787, 'gondar', 12445, '12/09/2024'),
('0977777', 'AQAQAQ', '156', 567, 876, 658779, 'juuuuuuuuuu', 66778, '13');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(44) NOT NULL,
  `password` varchar(66) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'password');

-- --------------------------------------------------------

--
-- Table structure for table `clinicalchemistry`
--

CREATE TABLE `clinicalchemistry` (
  `patient_id` int(11) NOT NULL,
  `patientname` varchar(255) NOT NULL,
  `patientaddress` varchar(255) NOT NULL,
  `age` int(3) NOT NULL,
  `sex` varchar(3) NOT NULL,
  `clinicaldata` varchar(255) NOT NULL,
  `hospitalnumber` int(255) NOT NULL,
  `dateofcollection` varchar(255) NOT NULL,
  `glufasting` varchar(255) NOT NULL,
  `bun` varchar(255) NOT NULL,
  `glurandom` varchar(255) NOT NULL,
  `totalprotein` varchar(255) NOT NULL,
  `albumin` varchar(255) NOT NULL,
  `ldh` varchar(255) NOT NULL,
  `alpha1globulin` varchar(255) NOT NULL,
  `alpha2globulin` varchar(255) NOT NULL,
  `betaglobulin` varchar(255) NOT NULL,
  `gama` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clinicalchemistry`
--

INSERT INTO `clinicalchemistry` (`patient_id`, `patientname`, `patientaddress`, `age`, `sex`, `clinicaldata`, `hospitalnumber`, `dateofcollection`, `glufasting`, `bun`, `glurandom`, `totalprotein`, `albumin`, `ldh`, `alpha1globulin`, `alpha2globulin`, `betaglobulin`, `gama`) VALUES
(0, 'kidst', 'hawassa', 22, 'f', 'kido', 23, 'hawasssa', '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', 'on on cells and tissues', 'on', 'lolololo'),
(0, 'teshager', 'wollo', 22, 'm', 'teshager', 12, '12/05/2000', '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', 'on on cells and tissues', 'on', 'lolololo'),
(0, 'teshe', 'wollo', 22, 'm', 'tes', 45, 't', '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', 'on on cells and tissues', 'on', 'lolololo'),
(0, 'mekdes', 'aa', 90, 'f', 'mekdi', 22, '12/2/2009', '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', 'on on cells and tissues', 'on', 'lolololo'),
(0, 'sister', 'aa', 66, 'm', 'ameoba', 89, '890', '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', 'on on cells and tissues', 'on', 'lolololo'),
(0, 'xxxxxxxxxxxxxxx', 'AAAA', 56, 'm', 'no', 23, '10/09/091', '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', 'on on cells and tissues', 'on', 'lolololo'),
(0, 'bbbbbbbbbbbbbb', 'rtrtrt', 7, '45r', 'dfdfdfd', 34, '78', '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', 'on on cells and tissues', 'on', 'lolololo'),
(0, 'ermias', 'ethio', 5, 'm', 'diseases', 67, '12/2345/2009', '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', 'on on cells and tissues', 'on', 'lolololo'),
(0, 'queen', 'ateee', 45, 'm', 'oxygen', 811, '12/2345/2009', '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', 'on on cells and tissues', 'on', 'lolololo'),
(0, 'mass media', 'BD', 100, 'm', 'hypetraion', 9, '12/2345/2009', '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', 'on on cells and tissues', 'on', 'lolololo'),
(0, 'clinical', 'AA', 46, 'm', 'dataum', 89, '12/09/2017', '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', 'on on cells and tissues', 'on', 'lolololo'),
(0, 'aynalem', 'AA', 18, 'f', 'dataum', 8, '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', 'on on cells and tissues', 'on', 'lolololo'),
(0, 'tsdeeeeeee', 'wolkite', 23, 'm', 'dde', 66, '12/2345/2009', '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', 'on on cells and tissues', 'on', 'lolololo'),
(0, 'qazxsw', 'dgfdf', 7, 'tf', 'fyg', 65, '12/2345/2009', '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', 'on on cells and tissues', 'on', 'lolololo'),
(0, 'alex sandro', 'eethiop', 33, 'm', 'dataloss', 12, '12/2345/2009', '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', 'on on cells and tissues', 'on', 'lolololo'),
(0, 'alex vidal', 'eethiop', 33, 'm', 'dataloss', 12, '12/2345/2009', '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', 'on on cells and tissues', 'on', 'lolololo'),
(0, 'massing', 'eethiop', 33, 'm', 'dataloss', 12, '12/2345/2009', '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', 'on on cells and tissues', 'on', 'lolololo'),
(0, 'munich', 'eethiop', 33, 'm', 'dataloss', 12, '12/2345/2009', '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', 'on on cells and tissues', 'on', 'lolololo'),
(0, 'abeb', 'wer', 56, 'm', 'gibrim', 1, '12/2345/2009', '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', 'on on cells and tissues', '', 'lolololo'),
(0, 'teshe', 'wollo', 22, 'm', 'o2', 12, '12/2345/2009', '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', 'on on cells and tissues', '', 'lolololo'),
(0, 'teshe', 'wollo', 22, 'm', 'o2', 12, '12/2345/2009', '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', 'on on cells and tissues', '', 'lolololo'),
(0, 'teshe', 'wollo', 22, 'm', 'o2', 12, '12/2345/2009', '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', 'on on cells and tissues', '', 'lolololo'),
(0, 'teshe', 'wollo', 22, 'm', 'o2', 12, '12/2345/2009', '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', 'on on cells and tissues', '', 'lolololo'),
(0, 'teshe', 'wollo', 22, 'm', 'o2', 12, '12/2345/2009', '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', 'on on cells and tissues', '', 'lolololo'),
(0, 'zzzz', 'dddddddd', 5, 'm', 'eeeeeeee', 56, '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', 'on on cells and tissues', '', 'lolololo'),
(0, 'zzzz', 'dddddddd', 5, 'm', 'eeeeeeee', 56, '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', 'on on cells and tissues', '', 'lolololo'),
(0, 'zzzz', 'dddddddd', 5, 'm', 'eeeeeeee', 56, '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', 'on on cells and tissues', '', 'lolololo'),
(0, 'london', 'alll', 9, 'm', 'dataloss', 12, '12/2345/2009', '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', 'on on cells and tissues', '', 'lolololo'),
(0, 'london', 'alll', 9, 'm', 'dataloss', 12, '12/2345/2009', '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', 'on on cells and tissues', '', 'lolololo'),
(0, 'london', 'alll', 9, 'm', 'dataloss', 12, '12/2345/2009', '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', 'on on cells and tissues', '', 'lolololo'),
(0, 'london', 'alll', 9, 'm', 'dataloss', 12, '12/2345/2009', '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', 'on on cells and tissues', '', 'lolololo'),
(0, 'london', 'alll', 9, 'm', 'dataloss', 12, '12/2345/2009', '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', 'on on cells and tissues', '', 'lolololo'),
(0, 'abebe', 'adisababa', 45, 'm', 'dat', 3, '12/2345/2009', '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', 'on on cells and tissues', '', 'lolololo'),
(0, 'abebe', 'adisababa', 45, 'm', 'dat', 3, '12/2345/2009', '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', 'on on cells and tissues', '', 'lolololo'),
(0, 'abebe', 'adisababa', 45, 'm', 'dat', 3, '12/2345/2009', '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', 'on on cells and tissues', '', 'lolololo'),
(0, 'abebe', 'adisababa', 45, 'm', 'dat', 3, '12/2345/2009', '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', 'on on cells and tissues', 'on', 'lolololo'),
(0, 'abebe', 'adisababa', 45, 'm', 'dat', 3, '12/2345/2009', '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', 'on on cells and tissues', 'on', 'lolololo'),
(0, 'abebe', 'adisababa', 45, 'm', 'dat', 3, '12/2345/2009', '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', 'on on cells and tissues', 'on', 'lolololo'),
(0, 'abebe', 'adisababa', 45, 'm', 'dat', 3, '12/2345/2009', '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', 'on on cells and tissues', 'on', 'lolololo'),
(0, 'errosion', 'ethip', 100, 'n', 'datata', 6, '12/2345/2009', '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', 'on on cells and tissues', 'on', 'lolololo'),
(0, 'famiiiiiiiiii', 'welega', 8, 'm', 'srtrtr', 8, '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', 'on on cells and tissues', 'on', 'lolololo'),
(1, 'tttt', 'yyyyyyy', 8, 'm', 'ggggggggg', 99, '12/2345/2009', '12/2345/2009', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'good results'),
(56, 'nnnnnn', 'hhhhhhh', 7, 'm', 'dffd', 76, '12/2345/2009', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on'),
(867, 'eriksen', 'eethiop', 8, 'm', 'rrt', 76, '1/2/33/', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on'),
(1224, 'teshe', 'wollo', 12, 'm', 'data', 9, '12/2345/2009', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on'),
(1224, 'teshe', 'wollo', 12, 'm', 'data', 9, '12/2345/2009', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on'),
(112, 'teshe', 'wollo', 12, 'm', 'data', 9, '12/2345/2009', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on'),
(1515, 'teshee', 'wollo', 34, 'm', 'ffdf', 56, '12/2345/2009', '56', 'on', 'on', 'on', 'on', 'on', 'on', 'noneeeeeeeeee', 'on', 'congratulatino for all ethiopian'),
(1515, 'teshee', 'wollo', 34, 'm', 'ffdf', 56, '12/2345/2009', '56', 'on', 'on', 'on', 'on', 'on', 'on', 'noneeeeeeeeee', 'on', 'congratulatino for all ethiopian'),
(567, 'kidstt', 'ttt', 22, 'f', 'dsd', 18, '12/2345/2009', '12/2345/2009', 'on', 'on', 'on', 'on', 'on', 'onhjghjb', 'fgdfhgdghfg', 'on', 'bbbbbbbbbbbbb'),
(10, 'qqqqq', 'aaaaaaaa', 66, 'm', 'ggg', 7, '12/2345/2009', '12/2345/2009', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'kodstttttttttttt'),
(10, 'aaaaa', 'lolol', 88, 'm', 'dadadada', 67, '12/2345/2009', '12/2345/2009', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'uniteddd'),
(1651, 'klian ', 'mpape', 33, 'mn', 'fgh', 34, '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', 'on', 'on', 'on', 'on', 'on', 'wendeeeeeeeeeee'),
(1651, 'klian ', 'mpape', 33, 'mn', 'fgh', 34, '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', '121/10/2010', 'on', 'on', 'on', 'on', 'on', 'wendeeeeeeeeeee'),
(1515, 'sdsdsd', 'tttt', 67, 'm', 'fdfdf', 67, '56', '56', 'on', 'on', 'on', 'on', 'on', 'on', 'noneeeeeeeeee', 'on', 'congratulatino for all ethiopian');

-- --------------------------------------------------------

--
-- Table structure for table `createaccount`
--

CREATE TABLE `createaccount` (
  `id` int(23) NOT NULL,
  `firstname` varchar(34) NOT NULL,
  `middlename` varchar(23) NOT NULL,
  `lastname` varchar(34) NOT NULL,
  `password` varchar(23) NOT NULL,
  `nationality` varchar(34) NOT NULL,
  `gender` varchar(23) NOT NULL,
  `age` int(23) NOT NULL,
  `zone` varchar(45) NOT NULL,
  `woreda` varchar(33) NOT NULL,
  `kebele` int(34) NOT NULL,
  `phonenumber` int(22) NOT NULL,
  `status` varchar(45) NOT NULL,
  `role` varchar(23) NOT NULL,
  `occupation` varchar(23) NOT NULL,
  `year` int(23) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `createaccount`
--

INSERT INTO `createaccount` (`id`, `firstname`, `middlename`, `lastname`, `password`, `nationality`, `gender`, `age`, `zone`, `woreda`, `kebele`, `phonenumber`, `status`, `role`, `occupation`, `year`) VALUES
(1, 'q', 'e', 'e', '3', 'ethiopia', 'Male', 22, 'fr', 'ty', 67, 56, 'single', 'patient', 'gt', 8),
(21, 'aa', 'tt', 'hh', '2334', 'ethiopia', 'Male', 23, 'sd', 'dr', 9, 902345678, '', 'pharmacist', 'pharmacist', 2000),
(1224, 'teshager', 'techal', 'tadesse', '1224', 'ethiopia', 'Male', 22, 's/wollo', 'm/saint', 31, 932358368, 'single', 'laboratorist', 'student', 2000),
(78, 'eeeeeee', 'rrrrrrrrrr', 'tttttttttt', '1234', 'ethiopia', 'Male', 23, 'hyyy', 'uio', 67, 915816867, 'single', 'pharmacist', 'pharmacist', 789098),
(32, 'sdf', 'fgh', 'fg', 'f', 'ethiopia', 'Female', 34, 'gghhh', 'trt', 6, 876578, 'single', 'patient', 'student', 5678),
(780, 'tttttttt', 'rrrrrrrrrr', 'gggggggg', '12345', 'ethiopia', 'Male', 12, 'wollo', 'm/saint', 908, 915816867, 'single', 'patient', 'student', 6578),
(1222, 'tesfaye', 'amerie', 'melkamu', '1234', 'USA', 'Male', 23, 'n/gondar', 'wew', 90, 922086578, 'single', 'pharmacist', 'pharmacist', 2010),
(1871, 'teshe', 'techal', 'tadesse', '1224', 'ethiopia', 'Male', 22, 'souuthwollo', 'm/saint', 31, 932358368, 'single', 'admin', 'admin', 2010),
(1091, 'nigyssie', 'meketaw', 'abebe', '1233', 'ethiopia', 'Male', 22, 'gondar', 'gondar', 44, 934567889, 'single', 'pharmacist', 'pharmacist', 2010),
(9878, 'a', 'dfgd', 'tfy', 'ffu', 'ethiopia', 'Male', 34, 'gjgy', 'hgf', 6, 86789, 'single', 'admin', 'admin', 68),
(120, 'pepe', 'popo', 'pepe', '123', 'ethiopia', 'Male', 33, 'sp', 'spa', 6, 96543, 'single', 'admin', 'defender', 2010),
(1720, 'ramos', 'popo', 'pepe', '1278', 'ethiopia', 'Male', 33, 'sp', 'spa', 6, 96543, 'single', 'admin', 'defender', 2010),
(11720, 'crisiano', 'popo', 'pepe', '1278', 'ethiopia', 'Male', 33, 'sp', 'spa', 6, 96543, 'single', 'laboratorist', 'defender', 2010),
(720, 'casemiro', 'popo', 'pepe', '1278', 'ethiopia', 'Male', 33, 'sp', 'spa', 6, 96543, 'single', 'pharmacist', 'defender', 2010),
(13, 'ademe', 'popo', 'pepe', '1220', 'ethiopia', 'Male', 33, 'sp', 'spa', 6, 96543, 'single', 'doctor', 'defender', 2010),
(130, 'messi', 'popo', 'pepe', '1220', 'ethiopia', 'Male', 33, 'sp', 'spa', 6, 96543, 'single', 'patient', 'defender', 2010),
(292, 'teju', 'techal', 'tadesse', '1234', 'ethiopia', 'Male', 23, 'souuthwollo', 'm/saint', 990, 915816867, 'single', 'doctor', 'student', 7),
(1942, 'jery', 'abebe', 'alemu', '1234', 'ethiopia', 'Female', 22, 'aa', 'we', 78, 936767686, 'single', 'doctor', 'student', 2100),
(65, 'ablel', 'makbel', 'alemu', '9090', 'ethiopia', 'Male', 45, 'ddd', 'gg', 6, 96543, 'single', 'patient', 'student', 2010);

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `username` varchar(444) NOT NULL,
  `password` varchar(77) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`username`, `password`) VALUES
('doctor', 'password');

-- --------------------------------------------------------

--
-- Table structure for table `drreply`
--

CREATE TABLE `drreply` (
  `role` varchar(45) NOT NULL,
  `answers` varchar(43) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `drreply`
--

INSERT INTO `drreply` (`role`, `answers`) VALUES
('TESHAGER', 'heade ache is problems of ethiopia'),
('ggggggg', 'nhhhhhhhhhhhhhhhhhhh'),
('wonde', 'bilharzia is nothing'),
('TESHAGER', 'jjjjjjjjjjjjjjjjjjjjjjjjjjjj'),
('TESHAGER', 'kepp your self for transmitted diseases.'),
('TESHAGER', 'computer is electronic device-------'),
('TESHAGER', 'billharzia ic water borne diseases'),
('TESHAGER', 'congratulation for all ethiopian people'),
('TESHAGER', 'hello ladies and gentlmans!!!!!!'),
('TESHAGER', 'dddddddddd'),
('TESHAGER', 'qtwrgethryjnhvnbfg;.jkghjhog'),
('TESHAGER', 'dfghxcvhtdfggiyifgghghghvb'),
('TESHAGER', 'care your selfs'),
('TESHAGER', 'is RBC condtion'),
('ggggggg', 'composaaaaaaaaaaaaaaa'),
('TESHAGER', 'tttttttttttttt');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `eve` text NOT NULL,
  `date` timestamp(5) NOT NULL,
  `mounth` int(23) NOT NULL,
  `year` int(23) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hematology`
--

CREATE TABLE `hematology` (
  `patient_id` int(12) NOT NULL,
  `patientname` varchar(24) NOT NULL,
  `patientaddress` varchar(33) NOT NULL,
  `age` int(3) NOT NULL,
  `sex` varchar(3) NOT NULL,
  `clinicaldata` varchar(255) NOT NULL,
  `hospitalnumber` int(4) NOT NULL,
  `dateofcollection` varchar(255) NOT NULL,
  `bands` text NOT NULL,
  `lymphocytes` varchar(255) NOT NULL,
  `basophils` varchar(255) NOT NULL,
  `hematocrit` varchar(255) NOT NULL,
  `bloodparasite` varchar(255) NOT NULL,
  `segments` varchar(255) NOT NULL,
  `monocytes` varchar(255) NOT NULL,
  `rbc` varchar(255) NOT NULL,
  `hemoglobin` varchar(255) NOT NULL,
  `bleedingtime` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hematology`
--

INSERT INTO `hematology` (`patient_id`, `patientname`, `patientaddress`, `age`, `sex`, `clinicaldata`, `hospitalnumber`, `dateofcollection`, `bands`, `lymphocytes`, `basophils`, `hematocrit`, `bloodparasite`, `segments`, `monocytes`, `rbc`, `hemoglobin`, `bleedingtime`) VALUES
(0, 'teshe', 'wollo', 22, 'm', 'abc', 6, '12', 'tamulochual', 'tamulochual', 'tamulochual', 'on', 'on', 'on', 'on', 'on', 'on', 'on'),
(0, 'kidst', 'wondmu', 22, 'f', 'kido', 12, '15', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on'),
(0, 'zenebesh', 'mekele', 22, 'f', 'zeni', 12, '780i', 'bacteria', 'litamem new', 'algaes', 'litamem new', 'litamem new', 'litamem new', 'litamem new', 'fungus', 'hiv', 'jardia'),
(0, 'tedy', 'gojam', 22, 'm', 'tes', 12, '12/11/22/', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on'),
(0, 'tewodros', 'gojam', 22, 'm', 'bbc', 12, '12/2/909', 'enkldam new ', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on'),
(0, 'tsedale', 'wulkite', 22, 'm', 'tsedale', 1, '12/2/05', 'tsedale is already sick', 'he nedds to be rest', 'he nedds special treatment', 'yaaaaaaaaa', 'on', 'on', 'on', 'on', 'on', 'on'),
(0, 'alemtsehay', 'adisababa', 10, 'f', 'headeache', 19, '10/10/2000', 'bands', 'manchester united', 'real madrid', 'all', 'on', 'on', 'on', 'on', 'on', 'oaaaaaaaaaaaaaa'),
(0, 'mahder', 'adisababa', 22, 'f', 'mahder', 17, '1/09/2007', 'bands', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'oaaaaaaaaaaaaaa'),
(0, 'azeb', 'aa', 22, '1f', 'ertyuiop', 32, '1123546', 'gjjfk', 'gfbgf`', 'gty', 'tghhy', 'onyyy', 'yu', 'yt', 'hjj', 'free', 'hhh'),
(0, 'rodrguez', 'madrid', 25, 'm', 'headeache', 23, '12/09/2017', 'he is free from diseases!!!', 'he is free from diseases!!', 'he is free from diseases!!', 'he is free from diseases!!', 'he is free from diseases!!', 'he is free from diseases!!', 'he is free from diseases!!', 'he is free from diseases!!', 'he is free from diseases!!', 'he is free from diseases!!'),
(0, 'kebede', 'aa', 44, 'm', 'dsfgdfg', 6, '12/2345/2009', 'he is free from diseases!!!', 'he is free from diseases!!!', 'he is free from diseases!!!', 'he is free from diseases!!!', 'he is free from diseases!!!', 'he is free from diseases!!!', 'he is free from diseases!!!', 'he is free from diseases!!!', 'he is free from diseases!!!', 'he is free from diseases!!!'),
(0, 'zenebesh draecha', 'mekle', 30, 'f', 'she is very sorry', 21, '12/2/2009', 'common cord', 'common cord', 'common cord', 'common cord', 'common cord com', 'common cord', 'common cord', 'common cord', 'common cord', 'common cord'),
(0, 'wodajeeee', 'gojam', 22, 'm', 'city', 587, 'tmbbm', 'altamemem', 'altamemem', 'altamemem', 'altamemem', 'altamemem', 'altamemem', 'on', 'tamoal', 'tamoal', 'tamoal'),
(0, 'mahlet', 'wolllo', 21, 'f', 'diseasers', 78, 'oppp', 'she will be secure soon', 'she will be secure soon', 'she will be secure soon', 'she will be secure soon', 'she will be secure soon', 'she will be secure soon', 'she will be secure soon', 'she will be secure soon', 'on', 'on'),
(0, 'tsedaleeee', 'wulkite', 22, 'm', 'ghty', 76, '9090', 'altamemem', 'litamem new', 'v', 'litamem new', 'litamem new', 'litamem new', 'litamem new', 'v', 'litamem new', 'v'),
(0, 'teshale', 'wollo', 3, 'm', 'headeache', 90, '244', 'bands', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on'),
(0, 'xxxxxxx', 'aa', 8, 'f', 'headeache', 12, '12/2345/2009', 'bands', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on'),
(0, 'ppppp', 'ethio', 76, 'm', 'tyu', 87, '12/2345/2009', 'no diseseasea', 'no diseseasea', 'v', 'no diseseasea', 'on', 'on', 'no diseseasea', 'no diseseasea', 'no diseseasea', 'no diseseasea'),
(0, 'zekarias', 'AA', 23, 'm', 'headeache', 3, '12/2345/2009', 'no diseases', 'no diseases', 'no diseases', 'no diseases', 'no diseases', 'no diseases', 'no diseases', 'no diseases', 'no diseases', 'yaaaaaaaa'),
(0, 'almgenet', 'woliso', 8, 'f', 'hhuuuu', 90, '12/09/2017', 'bands', 'on', 'on', 'on', 'such diseases existsuch diseases exist', 'such diseases exist', 'such diseases exist', 'such diseases exist', 'such diseases exist', 'such diseases exist'),
(0, 'mnmnmnmn', 'err', 5, 'm', 'cvv', 78, '89', 'bands', 'congratulatino for all ethiopian', 'congratulatino for all ethiopian', 'on', 'congratulatino for all ethiopian', 'on', 'she will be secure soon', 'on on cells and tissues', 'congratulatino for all ethiopian', 'on'),
(0, 'bbbvvvvvv', 'usa', 7, 'm', 'lop', 9, '1', 'bands', 'congratulatino for all ethiopian', 'congratulatino for all ethiopian', 'on', 'congratulatino for all ethiopian', 'on', 'she will be secure soon', 'on', 'congratulatino for all ethiopian', 'on'),
(0, 'cr7', 'potrugal', 8, 'm', 'sdf87iyutgh', 9, '12/2345/2009', 'bands', 'on', 'on', 'on', 'congratulatino for all ethiopian', 'on', 'on', 'on', 'on', 'secure soon'),
(0, 'masss', 'd', 34, 'f', 'd', 78, '46578', 'bands', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on'),
(0, 'eriksen', 'england', 24, 'm', 'diseases', 6, '12/2345/2009', 'bands', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on'),
(0, 'tsedea', 'wulkite', 23, 'm', 'common clold', 18, '13/09/2010', 'he wit his loved family come soon', 'all of them secure', 'on', 'all of them secure', 'on', 'all of them secure', 'on', 'all of them secure', 'on', 'all of them secure'),
(0, 'abdukiar', 'AA', 23, 'm', 'oxygen', 67, '13/09/2010', 'bands', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on'),
(0, 'lion', 'AA', 66, 'm', 'asks', 89, '12/2345/2009', 'bands', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on'),
(0, 'ping', 's', 5, 'm', 'bbb', 8, '2234', 'bands', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on'),
(0, 'XCXCXCXCXC', 'AAA', 34, 'm', 'des', 5, '2234', 'bands', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on'),
(0, 'pingmm', 's', 5, 'm', 'bbb', 8, '2234', 'bands', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on'),
(0, 'XCXCXCXCnXC', 'AAA', 34, 'm', 'des', 5, '2234', 'bands', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on'),
(0, 'aaaaaa', 'bbbbbbb', 6, 'm', 'uuuuu', 9, '78', 'bands', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on'),
(0, 'aaaaaa', 'bbbbbbb', 6, 'm', 'uuuuu', 9, '78', 'bands', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on'),
(0, 'm', 'l', 10, 'm', 'h', 8, '9', 'bands', 'she will be secure soon', 'on', 'on', 'common cord com', 'on', 'on', 'on', 'on', 'on'),
(0, 'tejesew', 'wollo', 22, 'f', 'tsedale', 12, '12/2345/2009', '12/2345/2009', 'bands', 'on', 'on', 'on', 'she will be secure soon', 'on', 'congratulatino for all ethiopian', 'on', 'list basic problems of common cold?'),
(0, 'owwww', 'qwr', 3, '56', 'desaaa', 56354, '12/2345/2009', 'bands', 'on', 'on', 'on', 'on', 'on', 'try your best god finish all the best!!', 'on', 'on', 'on'),
(0, 'uffffffffff', 'qwr', 3, '56', 'desaaa', 56354, '12/2345/2009', 'bands', 'on', 'on', 'on', 'on', 'she will be secure soon', 'on', 'see your selvs', 'on', 'on'),
(0, 'tazuuuuuuuu', 'gojamm', 22, 'm', 'dataum', 566, '12/2345/2009', 'bands', 'on', 'on', 'common cord', 'on', 'cr7777777777777', 'on', 'on', 'red devils and balancos', 'on'),
(0, 'nigusssie meketawo', 'gondar', 22, 'm', 'tyttyu', 78, '12/2345/2009', 'bands', 'on', 'on', 'altamemem', 'on', 'she will be secure soon', 'on', 'such diseases exist', 'on', 'on'),
(0, 'sandro', 'ethiopia', 45, 'm', 'nothing', 7, '12/2345/2009', 'bands', 'on', 'congratulatino for all ethiopian', 'she will be secure soon', 'common cord com', 'on', 'common cord', 'phaysicaly imatured', 'common cord', 'congratulatino for all ethiopian'),
(0, 'danieel', 'gondar', 23, 'm', 'dataloss', 6, '13/09/2010', 'bands', 'on', 'on', 'on', 'congratulatino for all ethiopian', 'on', 'on', 'on', 'on', 'on'),
(0, 'lkkk', 'kkk', 56, 'm', 'dataloss', 88, '12/2345/2009', 'bands', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on'),
(0, 'lkkkp', 'kkk', 56, 'm', 'dataloss', 88, '12/2345/2009', 'bands', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on'),
(0, 'pepe', 'spain', 33, 'm', 'da', 4, '12/2345/2009', 'bands', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'congratulatino for all ethiopian', 'defenderrrrrrrrrrr'),
(0, 'asmamaw', 'eethiop', 32, 'm', 'sfgh', 53, '13/09/2010', 'bands', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on'),
(0, 'teshe united', 'ethiopa', 22, 'm', 'dd', 665, '12/2345/2009', 'bands', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on'),
(0, 'colombia', 'europe', 3, 'm', 'data', 6, '12/2345/2009', 'bands', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on'),
(0, 'colombiaa', 'europe', 3, 'm', 'data', 6, '12/2345/2009', 'bands', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on'),
(0, 'getachew', 'ethiopia', 9, 'm', 'headeache', 25, '12/2345/2009', 'bands', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on'),
(0, 'mokee', 'AA', 22, 'm', 'dad', 6, '12/2345/2009', 'bands', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on'),
(10, 'anan', 'err', 34, 'm', 'wqwq', 12, '12/2345/2009', 'bands', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on'),
(10, 'anan', 'err', 34, 'm', 'wqwq', 12, '12/2345/2009', 'bands', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on'),
(97, 'kiki', 'koko', 90, 'm', 'data', 89, '12/2345/2009', 'bands', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on'),
(97, 'kiki', 'koko', 90, 'm', 'data', 89, '12/2345/2009', 'bands', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on'),
(1, 'uu', 'ghf', 34, 'm', 'gfjyg', 675, '12/2345/2009', '12/2345/2009', 'bands', 'on', 'on', 'congratulatino for all ethiopian', 'on', 'common cord', 'congratulatino for all ethiopian', 'onjzsdhflvdfjk,', 'common cord'),
(10, 'anan', 'err', 34, 'm', 'wqwq', 12, '12/2345/2009', 'bands', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on'),
(10, 'uu', 'ghf', 34, 'm', 'gfjyg', 675, '12/2345/2009', '12/2345/2009', 'bands', 'on', 'on', 'congratulatino for all ethiopian', 'on', 'common cord', 'congratulatino for all ethiopian', 'onjzsdhflvdfjk,', 'common cord'),
(12701, 'lll', 'ppp', 65, 'm', 'fff', 45, '12/2345/2009', 'bands', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on'),
(1651, 'kilian', 'mpapa', 32, 'm', 'ffghf', 4655, '12/2345/2009', '', '', '', '', '', '', '', 'hhjgbkmn ', 'truyfhyhf', 'uyjghyujhgyuvhj'),
(1651, 'kilian', 'mpapa', 32, 'm', 'ffghf', 4655, '12/2345/2009', '', '', '', '', '', '', '', 'hhjgbkmn ', 'truyfhyhf', 'uyjghyujhgyuvhj'),
(1651, 'kilian', 'mpapa', 32, 'm', 'ffghf', 4655, '12/2345/2009', '', '', '', '', '', '', '', 'hhjgbkmn ', 'truyfhyhf', 'uyjghyujhgyuvhj'),
(1651, 'kilian', 'mpapa', 32, 'm', 'ffghf', 4655, '12/2345/2009', '', '', '', '', '', '', '', 'hhjgbkmn ', 'truyfhyhf', 'uyjghyujhgyuvhj'),
(1515, 'ddd', 'yy', 8, 'm', 'fff', 7, '12/2345/2009', 'bands', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on'),
(1009, 'gfgf', 'uiuu', 44, 'm', 'fdf', 34, '12/2345/2009', 'bands', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on'),
(1009, 'gg', 'rrr', 56, 'm', 'yyhh', 56, '12/2345/2009', 'bands', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on'),
(1879, 'alexandar', 'asasas', 12, 'm', 'jjjjj', 45, '12/2345/2009', '', '', '', '', '', '', '', 'kikigqhasdjehsdmfbwejhsdm', '99999999999999999', 'such diseases exist');

-- --------------------------------------------------------

--
-- Table structure for table `hematologyy`
--

CREATE TABLE `hematologyy` (
  `patientname` varchar(255) NOT NULL,
  `patientaddress` varchar(255) NOT NULL,
  `age` int(255) NOT NULL,
  `sex` varchar(255) NOT NULL,
  `clinicaldata` varchar(255) NOT NULL,
  `hospitalnumber` int(255) NOT NULL,
  `dateofcollecttion` int(255) NOT NULL,
  `time` int(255) NOT NULL,
  `reportedby` varchar(255) NOT NULL,
  `labnumber` varchar(255) NOT NULL,
  `date` int(255) NOT NULL,
  `timee` int(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `image` varchar(200) NOT NULL,
  `text` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `image`, `text`) VALUES
(28, '224367_128726110538417_100002030859358_180941_2172179_n.jpg', 'Name service as a distinct service that is used by client processes to obtain attributes such as the addresses of resources or objects when given their names. The entities named can be of many types, and they may be managed by different services. For example, name services are often used to hold the addresses and other details of users, computers, network domains, services and remote objects. As well as name services, we describe directory services, which look up services when given some of their attributes. Basic design issues for name services, such as the structure and management of the space of names recognized by the service and the operations that the name service supports, are outlined and illustrated in the context of the Internet Domain Name System (DNS). A name service stores information about a collection of textual names, in the form of bindings between the names and the attributes of the entities they denote'),
(29, '261932_222724457760200_100000679430641_760388_970806_n.jpg', 'Name service as a distinct service that is used by client processes to obtain attributes such as the addresses of resources or objects when given their names. The entities named can be of many types, and they may be managed by different services. For example, name services are often used to hold the addresses and other details of users, computers, network domains, services and remote objects. As well as name services, we describe directory services, which look up services when given some of their attributes. Basic design issues for name services, such as the structure and management of the space of names recognized by the service and the operations that the name service supports, are outlined and illustrated in the context of the Internet Domain Name System (DNS). A name service stores information about a collection of textual names, in the form of bindings between the names and the attributes of the entities they denote'),
(30, '46020_1586387544721_1386776585_1509576_1879430_n.jpg', 'Name service as a distinct service that is used by client processes to obtain attributes such as the addresses of resources or objects when given their names. The entities named can be of many types, and they may be managed by different services. For example, name services are often used to hold the addresses and other details of users, computers, network domains, services and remote objects. As well as name services, we describe directory services, which look up services when given some of their attributes. Basic design issues for name services, such as the structure and management of the space of names recognized by the service and the operations that the name service supports, are outlined and illustrated in the context of the Internet Domain Name System (DNS). A name service stores information about a collection of textual names, in the form of bindings between the names and the attributes of the entities they denote'),
(27, '224367_128726110538417_100002030859358_180941_2172179_n.jpg', 'Name service as a distinct service that is used by client processes to obtain attributes such as the addresses of resources or objects when given their names. The entities named can be of many types, and they may be managed by different services. For example, name services are often used to hold the addresses and other details of users, computers, network domains, services and remote objects. As well as name services, we describe directory services, which look up services when given some of their attributes. Basic design issues for name services, such as the structure and management of the space of names recognized by the service and the operations that the name service supports, are outlined and illustrated in the context of the Internet Domain Name System (DNS). A name service stores information about a collection of textual names, in the form of bindings between the names and the attributes of the entities they denote');

-- --------------------------------------------------------

--
-- Table structure for table `laboratorist`
--

CREATE TABLE `laboratorist` (
  `username` varchar(21) NOT NULL,
  `password` varchar(62) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laboratorist`
--

INSERT INTO `laboratorist` (`username`, `password`) VALUES
('laboratorist', 'password');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `title_id` int(25) NOT NULL,
  `title` varchar(255) NOT NULL,
  `news` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`title_id`, `title`, `news`) VALUES
(1, 'congratulaltion for all gondar society', 'qrwetusdfghjkkusydfghjkfdshbnm'),
(2, 'congratulaltion for all gondar society', 'qrwetusdfghjkkusydfghjkfdshbnm'),
(3, 'congratulaltion for all gondar society', 'qrwetusdfghjkkusydfghjkfdshbnm'),
(12334, 'congratulaltion for all gondar society', 'qrwetusdfghjkkusydfghjkfdshbnm'),
(9090, 'congratulaltion for all gondar society', 'qrwetusdfghjkkusydfghjkfdshbnm'),
(894678945, 'congratulaltion for all gondar society', 'qrwetusdfghjkkusydfghjkfdshbnm'),
(90, 'congratulaltion for all gondar society', 'qrwetusdfghjkkusydfghjkfdshbnm'),
(6789, 'congratulaltion for all gondar society', 'qrwetusdfghjkkusydfghjkfdshbnm'),
(900000, 'congratulaltion for all gondar society', 'qrwetusdfghjkkusydfghjkfdshbnm'),
(8, 'congratulaltion for all gondar society', 'qrwetusdfghjkkusydfghjkfdshbnm'),
(890, 'congratulaltion for all gondar society', 'qrwetusdfghjkkusydfghjkfdshbnm'),
(9879008, 'congratulaltion for all gondar society', 'qrwetusdfghjkkusydfghjkfdshbnm'),
(78, 'congratulaltion for all gondar society', 'qrwetusdfghjkkusydfghjkfdshbnm'),
(9099, 'congratulaltion for all gondar society', 'qrwetusdfghjkkusydfghjkfdshbnm'),
(54677, 'congratulaltion for all gondar society', 'qrwetusdfghjkkusydfghjkfdshbnm'),
(7, 'congratulaltion for all gondar society', 'qrwetusdfghjkkusydfghjkfdshbnm'),
(111, 'congratulaltion for all gondar society', 'qrwetusdfghjkkusydfghjkfdshbnm'),
(5432, 'congratulaltion for all gondar society', 'qrwetusdfghjkkusydfghjkfdshbnm'),
(456786, 'cfhgvjhkhvghn', 'fh gjhkjmnhjgcvbihobjbn ');

-- --------------------------------------------------------

--
-- Table structure for table `news_master`
--

CREATE TABLE `news_master` (
  `news_name` varchar(55) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `dis` varchar(200) NOT NULL,
  `down_id` int(56) NOT NULL,
  `news_id` int(45) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `username` varchar(33) NOT NULL,
  `password` varchar(31) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`username`, `password`) VALUES
('patient', 'password');

-- --------------------------------------------------------

--
-- Table structure for table `patientregister`
--

CREATE TABLE `patientregister` (
  `id` int(11) NOT NULL,
  `first_name` varchar(22) NOT NULL,
  `last_name` varchar(22) NOT NULL,
  `age` varchar(3) NOT NULL,
  `gender` varchar(22) NOT NULL,
  `occupation` varchar(21) NOT NULL,
  `mobile` bigint(19) NOT NULL,
  `address` varchar(22) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patientregister`
--

INSERT INTO `patientregister` (`id`, `first_name`, `last_name`, `age`, `gender`, `occupation`, `mobile`, `address`) VALUES
(1, 'teshager', 'techal', '22', 'm', 'student', 915816867, 'ethiopia'),
(2, 'teshager', 'techal', '22', 'm', 'student', 915816867, 'ethiopia'),
(3, 'abebe', 'kebede', '22', 'm', 'teacher', 966657685, 'AA'),
(4, 'abebe', 'kebede', '22', 'm', 'teacher', 966657685, 'AA'),
(5, 'alemu', 'abebe', '21', 'm', 'student', 9090909, 'bd'),
(6, 'a', 'b', '12', 'f', 'student', 90909, 'aa'),
(7, 'teshager', 'techal', '22', 'm', 'student', 915816867, 'awwww'),
(8, 'teshager', 'techal', '22', 'm', 'student', 915816867, 'awwww'),
(9, 'teshager', 'techal', '22', 'm', 'student', 915816867, 'awwww'),
(10, 'teshager', 'techal', '22', 'm', 'student', 915816867, 'awwww');

-- --------------------------------------------------------

--
-- Table structure for table `pharmacist`
--

CREATE TABLE `pharmacist` (
  `username` varchar(90) NOT NULL,
  `password` varchar(66) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pharmacist`
--

INSERT INTO `pharmacist` (`username`, `password`) VALUES
('pharmacist', 'password');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `name` varchar(23) NOT NULL,
  `date` timestamp(1) NOT NULL,
  `description` text NOT NULL,
  `address` varchar(15) NOT NULL,
  `image` blob NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `postnews`
--

CREATE TABLE `postnews` (
  `news_title` text NOT NULL,
  `desc` varchar(255) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `image` varchar(45) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pquestion`
--

CREATE TABLE `pquestion` (
  `id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `patientname` varchar(23) DEFAULT NULL,
  `question` text,
  `ansewers` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pquestion`
--

INSERT INTO `pquestion` (`id`, `patient_id`, `patientname`, `question`, `ansewers`) VALUES
(1, 0, 'teshe', 'define bilharzia??', 'it is waterboorne diseases!!'),
(2, 0, 'teshe', 'define common cold??', 'nice gooooooddddddd'),
(3, 0, 'teshe', 'define common cold??', 'it is diseases that come in the form of dust!!'),
(4, 0, 'almaz getachew', 'define common cold??', 'seeennnnnnnn'),
(5, 0, 'tesfaye amare', 'define common cold??', 'is air borne diseases!'),
(6, 0, 'gashaw', 'define  biology??', 'natural scienc'),
(7, 0, 'wosennn', 'define headache??', 'iuruythyiortutjeroil'),
(8, 0, 'kk', 'define biology???', 'it gdshfgdgfjdsgfdhgbfdjkmghb'),
(9, 0, 'alemu', 'define commoncold?', 'air borne diseases!!!'),
(10, 0, 'qqqqqqqqq', 'define data mining??', NULL),
(11, 0, 'zzz', 'define virus??', NULL),
(12, 0, 'wodaje', 'define common cold??', 'denezzzzzzzzzzzzzzzzzzzzzzzz!!!!'),
(13, 8790, 'tesh', 'what is this ?', 'This is my answer'),
(15, 8790, 'tsedale', 'What is headack?', 'Yetiention wutiet new'),
(14, 8790, 'wonde', 'wecome', 'No question is it'),
(16, 1270, 'zedd', 'define bacteria??', 'it is air borne diseases.');

-- --------------------------------------------------------

--
-- Table structure for table `reggistere`
--

CREATE TABLE `reggistere` (
  `patient_id` varchar(3) NOT NULL,
  `firstname` varchar(43) NOT NULL,
  `middlename` varchar(34) NOT NULL,
  `lastname` varchar(34) NOT NULL,
  `nationality` varchar(34) NOT NULL,
  `gender` varchar(4) NOT NULL,
  `age` int(3) NOT NULL,
  `zone` varchar(23) NOT NULL,
  `woreda` varchar(43) NOT NULL,
  `kebele` varchar(45) NOT NULL,
  `phonenumber` varchar(34) NOT NULL,
  `role` varchar(34) NOT NULL,
  `occupation` varchar(34) NOT NULL,
  `year` int(23) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `Patient_Id` varchar(45) NOT NULL,
  `username` varchar(34) NOT NULL,
  `password` varchar(34) NOT NULL,
  `first_name` varchar(45) NOT NULL,
  `last_name` varchar(34) NOT NULL,
  `age` int(3) NOT NULL,
  `gender` varchar(3) NOT NULL,
  `occupation` varchar(55) NOT NULL,
  `mobile` int(15) NOT NULL,
  `address` varchar(55) NOT NULL,
  `role` varchar(18) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`Patient_Id`, `username`, `password`, `first_name`, `last_name`, `age`, `gender`, `occupation`, `mobile`, `address`, `role`) VALUES
('123', 'teshe', '1224', 'teshager', 'koria', 22, 'm', 'student', 915816867, 'wollo', 'patient'),
('12', 'zeni', '1270', 'zeni', 'darcha', 22, 'f', 'student', 927825035, 'axum', 'patient'),
('1', 'AA', '34', 'YT', 'LOP', 2, 'M', 'student', 909, 'OPOP', 'patient'),
('9', 'xx', 'yy', 'hun', 'labo', 34, 'm', 'student', 9, 'ethio', 'patient'),
('65', 'fhgj', 'hgf', 'chgv', 'cfhgv', 7, 'gvh', 'cfvg', 9, '8767', 'patient'),
('67', 'almaz', 'almaz', 'getachew', 'zeleke', 22, 'f', 'student', 93890909, 'wollo', 'patient'),
('1888', 'tt', '1224', 'tee', 'tec', 22, 'm', 'student', 989090909, 'wollo', 'patient'),
('9090', 'zz', '1234', 'gg', 'jj', 90, 'm', 'student', 989090909, 'opop', 'patient'),
('1900', 'moke', 'moke', 'moke', 'ay', 22, 'm', 'student', 931, 'AA', 'patient'),
('111', 'xxx', '1234', 'fff', 'hhh', 22, 'm', 's', 962876685, 'gondar', 'patient'),
('009', 'kllll', '090', 'oo', 'lklkl', 9, 'm', 'student', 915816867, 'wollo', 'patient'),
('89', 'hh', 'jj', 'jj', 'nnn', 9, 'm', 'gon', 989090909, 'opop', 'patient'),
('222', 'aea', '5', 'uu', 'lo', 9, 'm', 'student', 989090909, 'uouo', 'patient'),
('6565', 'petros', '345', 'peter', 'gubale', 33, 'm', 'student', 989090909, 'south ', 'patient'),
('788', 'teshe', '1244', 'uui', 'mmm', 22, 'm', 'student', 9, 'ethio', 'patient');

-- --------------------------------------------------------

--
-- Table structure for table `registere`
--

CREATE TABLE `registere` (
  `username` varchar(23) NOT NULL,
  `password` varchar(44) NOT NULL,
  `first_name` varchar(34) NOT NULL,
  `last_name` varchar(23) NOT NULL,
  `age` int(3) NOT NULL,
  `gender` varchar(4) NOT NULL,
  `occupation` varchar(45) NOT NULL,
  `mobile` int(11) NOT NULL,
  `address` varchar(12) NOT NULL,
  `role` varchar(23) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registere`
--

INSERT INTO `registere` (`username`, `password`, `first_name`, `last_name`, `age`, `gender`, `occupation`, `mobile`, `address`, `role`) VALUES
('ademe', '1220', 'ademe', 'techal', 23, 'm', 'doctor', 920, 'wollo', 'doctor'),
('zeni', '1270', 'zeni', 'darcha', 22, 'f', 'student', 927825035, 'axum', 'labratorist'),
('teshager', '1224', 'teshe', 'techal', 22, 'm', 'student', 9090909, 'ethio', 'pharmacist'),
('alex', '45', 'alex', 'abay', 22, 'm', 'no', 9890, 'ethio', 'labratorist'),
('tejsew', '1235', 'tejsew', 'demssie', 22, 'f', 'student', 962876685, 'ethio', 'doctor'),
('doctor', 'doctor', 'doctor', 'doctor', 33, 'm', 'doc', 912908900, 'UOG', 'labratorist');

-- --------------------------------------------------------

--
-- Table structure for table `registerr`
--

CREATE TABLE `registerr` (
  `patient_id` int(23) NOT NULL,
  `firstname` varchar(12) NOT NULL,
  `middlename` varchar(23) NOT NULL,
  `lastname` varchar(23) NOT NULL,
  `password` varchar(23) NOT NULL,
  `nationality` varchar(23) NOT NULL,
  `gender` varchar(4) NOT NULL,
  `age` int(34) NOT NULL,
  `zone` varchar(32) NOT NULL,
  `woreda` varchar(34) NOT NULL,
  `kebele` int(45) NOT NULL,
  `phonenumber` int(13) NOT NULL,
  `status` varchar(34) NOT NULL,
  `role` varchar(23) NOT NULL,
  `occupation` varchar(23) NOT NULL,
  `year` int(23) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registerr`
--

INSERT INTO `registerr` (`patient_id`, `firstname`, `middlename`, `lastname`, `password`, `nationality`, `gender`, `age`, `zone`, `woreda`, `kebele`, `phonenumber`, `status`, `role`, `occupation`, `year`) VALUES
(0, 'teshe', 'techal', 'tadesse', '', 'ethiopia', 'Male', 22, 's/wollo', 'm/saint', 31, 915816867, 'single', 'patient', 'student', 2009),
(0, 'wosen', 'alemu', 'abeb', '', 'ethiopia', 'Male', 22, 'n/gondar', 'gndar', 31, 932134566, 'single', 'patient', 'student', 2009),
(0, 'tttttt', 'ggggggggg', 'vvvvvvvvv', '', 'ethiopia', 'Male', 23, 'wollo', 'm/saint', 90, 9233444, 'single', 'patient', 'student', 2009),
(0, 'llllll', 'mmmmmmmm', 'nnnnnnnnnn', '', 'ethiopia', 'Male', 24, 'opo', 'ioio', 576, 915816867, 'single', 'patient', 'student', 9090),
(0, 'dxc', 'gc', 'vh', 'teshe', 'ethiopia', 'Male', 23, 'dd', 'gndar', 89, 9233444, 'single', 'patient', 'ttt', 789),
(0, 'mm', 'lllllllll', 'pppppppppppp', '1234', 'ethiopia', 'Male', 23, 'frt', 'we', 9, 9909098, 'single', 'admin', 'admin', 678),
(0, 'rr', 'tttt', 'ggggggg', '12', 'ethiopia', 'Male', 22, 'd', 'iooo', 55, 6578765, 'single', 'laboratorist', 'lab', 909),
(0, 'viva', 'tttt', 'ggggggg', '12', 'ethiopia', 'Male', 22, 'd', 'iooo', 55, 6578765, 'single', 'laboratorist', 'lab', 909),
(10000, 'aaaaaaa', 'zzzzzzzzz', 'ccccccc', 'xxxxxxxx', 'ethiopia', 'Male', 12, 'rrrrrrrrr', 'yyyyyyyy', 55, 912645647, 'single', 'patient', 'striker', 2019),
(3, 'ggggg', 'oooo', 'bnbbbnbn', 'werr', 'ethiopia', 'Male', 100, 'dodar', 'tyuu', 90, 234567, 'single', 'patient', 'pattient', 2910),
(567, 'teshager', 'teschal', 'tadese', 'sanches', 'USA', 'Male', 22, 'souuthwollo', 'm/saint', 31, 915816867, 'single', 'patient', 'student', 2009),
(12311, 'tsedale', 'misgea', 'hailu', 'ronaldo', 'USA', 'Male', 22, 'wulkite', 'wulkite', 78, 920707824, 'single', 'patient', 'student', 2010),
(1222, 'tesfaye', 'abebe', 'opera', '34', 'ethiopia', 'Male', 23, 'dfff', 'hh', 7, 9, 'single', 'patient', 'student', 2010),
(1, 'tesh', 'techal', 'tadesse', '1224', 'ethiopia', 'Male', 22, 'gondar', 'm/saint', 90, 932358368, 'single', 'patient', 'student', 2019),
(1321, 'tesh', 'techal', 'tadesse', '1224', 'ethiopia', 'Male', 22, 'gondar', 'm/saint', 90, 932358368, 'single', 'patient', 'student', 2019),
(1009, 'alemnew', 'aneeekifle', 'koiiii', '132', 'ethiopia', 'Male', 33, 'kki', 'uii', 99, 987654, 'single', 'patient', '2019', 18),
(10099, 'fasika', 'alemneh', 'debebe', '22345', 'ethiopia', 'Male', 33, 'kki', 'uii', 99, 987654, 'single', 'patient', '2019', 18),
(1879, 'wdnesh', 'balew', 'abebe', '345', 'ethiopia', 'Male', 23, 'koii', 'data', 455, 9, 'single', 'patient', 'student', 2010),
(97, 'toshba', 'aspas', 'queen', '12344', 'ethiopia', 'Male', 23, 'gondar', 'm/saint', 31, 915816867, 'single', 'patient', 'student', 2010),
(1515, 'elsabet', 'alebachew', 'bekele', '1234', 'ethiopia', 'Male', 23, 'mass', 'uuuuu', 87, 9233444, 'single', 'patient', 'student', 2021),
(10, 'kk', 'mm', 'll', '989', 'ethiopia', 'Male', 45, 'ter', 'yt', 98, 915816867, 'single', 'patient', 'student', 2992),
(12701, 'zzz', 'bb', 'lklk', '1234', 'ethiopia', 'Male', 22, 'mnmn', 'ghgh', 66, 915816867, 'single', 'patient', 'student', 2009),
(1651, 'kilian', 'mpape', 'mpapa', '324', 'ethiopia', 'Male', 23, 'jkb', 'hjn', 8, 976755678, 'single', 'patient', 'gkjb', 199),
(8790, 'antoan', 'greizman', 'rodrguez', '234', 'ethiopia', 'Male', 12, 'tyty', 'hyhy', 78, 915816867, 'single', 'patient', '2010', 564),
(1270, 'zedd', 'dar', 'mmm', '1233', 'ethiopia', 'Male', 22, 'mmm', 'kkkk', 98, 96543, 'single', 'patient', 'student', 2010);

-- --------------------------------------------------------

--
-- Table structure for table `serology`
--

CREATE TABLE `serology` (
  `patient_id` int(255) NOT NULL,
  `patientname` varchar(255) NOT NULL,
  `patientaddress` varchar(255) NOT NULL,
  `age` int(255) NOT NULL,
  `sex` varchar(3) NOT NULL,
  `hospitalnumber` int(255) NOT NULL,
  `dateofcollection` varchar(255) NOT NULL,
  `VDRL` varchar(255) NOT NULL,
  `widal` varchar(255) NOT NULL,
  `weil-flex` varchar(255) NOT NULL,
  `ASO` varchar(255) NOT NULL,
  `romatoiedfactor` varchar(255) NOT NULL,
  `CRP` varchar(255) NOT NULL,
  `antihcvantibody` varchar(255) NOT NULL,
  `TPHA` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_images`
--

CREATE TABLE `tbl_images` (
  `id` int(11) NOT NULL,
  `name` blob NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ur`
--

CREATE TABLE `ur` (
  `patient_id` int(11) NOT NULL,
  `patientname` varchar(34) NOT NULL,
  `patientaddress` varchar(33) NOT NULL,
  `age` int(3) NOT NULL,
  `sex` varchar(3) NOT NULL,
  `clinicaldata` varchar(34) NOT NULL,
  `hospitalnumber` int(3) NOT NULL,
  `dateofcollection` int(45) NOT NULL,
  `color` int(43) NOT NULL,
  `ph` varchar(43) NOT NULL,
  `gravity` varchar(45) NOT NULL,
  `albumin` varchar(43) NOT NULL,
  `glucose` varchar(54) NOT NULL,
  `ketone` varchar(37) NOT NULL,
  `bilirubin` varchar(23) NOT NULL,
  `blood` varchar(37) NOT NULL,
  `urobilinogen` varchar(32) NOT NULL,
  `nitrite` varchar(45) NOT NULL,
  `urinehcg` varchar(45) NOT NULL,
  `rbc` varchar(43) NOT NULL,
  `wbc` varchar(34) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `urinalysis`
--

CREATE TABLE `urinalysis` (
  `patient_id` varchar(23) NOT NULL,
  `patientname` varchar(56) NOT NULL,
  `patientaddress` varchar(56) NOT NULL,
  `age` int(4) NOT NULL,
  `sex` varchar(5) NOT NULL,
  `clinicaldata` varchar(34) NOT NULL,
  `hospitalnumber` int(54) NOT NULL,
  `dateofcollection` varchar(65) NOT NULL,
  `color` varchar(45) NOT NULL,
  `ph` varchar(45) NOT NULL,
  `gravity` varchar(67) NOT NULL,
  `albumin` varchar(76) NOT NULL,
  `glucose` varchar(67) NOT NULL,
  `ketone` varchar(46) NOT NULL,
  `bilirubin` varchar(56) NOT NULL,
  `blood` varchar(34) NOT NULL,
  `urobilinogen` varchar(45) NOT NULL,
  `nitrite` varchar(55) NOT NULL,
  `urinehcg` varchar(56) NOT NULL,
  `rbc` varchar(34) NOT NULL,
  `wbc` varchar(56) NOT NULL,
  `epithelialcell` varchar(32) NOT NULL,
  `castrbc` varchar(45) NOT NULL,
  `castwbc` varchar(54) NOT NULL,
  `granularcast` varchar(43) NOT NULL,
  `crystals` varchar(34) NOT NULL,
  `bacteria` varchar(34) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `urinalysis`
--

INSERT INTO `urinalysis` (`patient_id`, `patientname`, `patientaddress`, `age`, `sex`, `clinicaldata`, `hospitalnumber`, `dateofcollection`, `color`, `ph`, `gravity`, `albumin`, `glucose`, `ketone`, `bilirubin`, `blood`, `urobilinogen`, `nitrite`, `urinehcg`, `rbc`, `wbc`, `epithelialcell`, `castrbc`, `castwbc`, `granularcast`, `crystals`, `bacteria`) VALUES
('', 'bbbb', 'mkl', 9, 'm', 'bnmnm', 90, '10/09/091', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on'),
('', 'teshe', 'wollo', 7, 'm', 'headeache', 9, '12/2345/2009', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on'),
('', 'tewodros', 'gojam', 22, 'm', 'dfgg', 78, '121/10/2010', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on'),
('9', 'masss', 'england', 8, 'm', 'fuzzy', 8, '90', '90', 'on', 'on', 'on', 'on', 'on', '456789', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on'),
('1224', 'ppppppppp', 'opopo', 8, 'm', 'common clold', 8, '12/2345/2009', '12/2345/2009', '12/2345/2009', 'on', 'on', 'on', 'on', 'on', 'sennnnnnnnnnnnnn', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'okatttttttttttt'),
('7687689', 'qqqqqqqqqqqq', 'aaaaaaaaaaaaaa', 44, 'm', 'dfghj', 34567, '12/2345/2009', '12/2345/2009', 'on', 'on', 'on', 'on', 'gooooooooooooooooodddddd', 'on', 'on', 'on', 'alllllllllllllllllllllllllllll', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on'),
('9092', 'tttt', 'yyyyyyyy', 90, 'm', 'tyu', 87, '12/2345/2009', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on'),
('73', 'wwwwwwww', 'bbbbbb', 9, 'm', 'all', 7, '12/2345/2009', '12/2345/2009', '12/2345/2009', 'on', 'on', 'on', 'on', 'secure soon ok!!', 'on', 'on', 'wait fro 30 dayy!', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'sennnnnnnnnnnnnn'),
('1432', 'LLLLLPPPPPP', 'wwwwwwwwww', 7, 'h', 'nnn', 555555, '324567', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on'),
('1000000000', 'LLLLLPPPPPP', 'wwwwwwwwww', 7, 'h', 'nnn', 555555, '324567', '324567', 'on', 'on', 'on', 'on', 'on', 'on', 'sennnnnnnnnnnnn', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on'),
('987', 'gggggggnnnnn', 'hhhhh', 7, 'm', 'ttt', 7, '121/10/2010', '121/10/2010', 'on', 'on', 'on', 'on', 'on', 'on', 'take care ur self!', 'on', 'on', 'congratulatino for all ethiopian', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on'),
('612', 'tyr', 'werth', 5, 'm', 'dataloss', 9, '12', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on'),
('6128', 'huaweie', 'werth', 5, 'm', 'dataloss', 9, '12', '12', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'congratulatino for all ethiopian', 'on', 'go to usa', 'on', 'such diseases exist', 'on', 'on', 'congratulatino for all ethiopian'),
('565', 'mmm', 'esrdr', 6, 'm', 'wwere', 54, '12/2345/2009', '12/2345/2009', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'captain', 'such diseases exist', 'special', 'on', 'on', 's', 'on'),
('217', 'ramos', 'spain', 29, 'm', 'data', 12, '122', '122', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'congra madrid', 'congratulatino for all ethiopian', 'congratulatino for all ethiopian'),
('9878', 'brazil', 'latin', 7, 'm', 'daa', 7, '12/2345/2009', '12/2345/2009', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'iukjgbjh', 'khjhkjhb', 'kj,njkl,mn', 'jk,nm', 'jk,mn '),
('12331', 'bbbb', 'nnnnnn', 7, 'm', 'dasa', 7, '12/2345/2009', '12/2345/2009', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'munich', 'psg'),
('10', 'hyhy', 'yyu', 9, 'm', 'dddd', 34, '12/2345/2009', '12/2345/2009', '12/2345/2009', '12/2345/2009', '12/2345/2009', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'mmmmmm', 'mmmmm', 'mmmmmmm', 'mmmmmmm', 'mmmmmm', 'credentialism'),
('3', 'hyhy', 'yyu', 9, 'm', 'dddd', 34, '12/2345/2009', '12/2345/2009', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'madrid'),
('10', 'a', 'm', 8, 'm', 'c', 45, '12/2345/2009', '12/2345/2009', '12/2345/2009', '12/2345/2009', '12/2345/2009', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'mmmmmm', 'mmmmm', 'mmmmmmm', 'mmmmmmm', 'mmmmmm', 'credentialism'),
('1515', 'dddfdfd', 'reytr', 88, 'm', 'gfhhgf', 44, '12/2345/2009', '12/2345/2009', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'oooooooooo');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adddrug`
--
ALTER TABLE `adddrug`
  ADD PRIMARY KEY (`stockcode`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`title_id`,`title`);

--
-- Indexes for table `news_master`
--
ALTER TABLE `news_master`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `patientregister`
--
ALTER TABLE `patientregister`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pquestion`
--
ALTER TABLE `pquestion`
  ADD PRIMARY KEY (`id`,`patient_id`);

--
-- Indexes for table `reggistere`
--
ALTER TABLE `reggistere`
  ADD PRIMARY KEY (`patient_id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`Patient_Id`);

--
-- Indexes for table `serology`
--
ALTER TABLE `serology`
  ADD PRIMARY KEY (`patient_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `news_master`
--
ALTER TABLE `news_master`
  MODIFY `news_id` int(45) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `patientregister`
--
ALTER TABLE `patientregister`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `pquestion`
--
ALTER TABLE `pquestion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
