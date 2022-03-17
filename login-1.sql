-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2017 at 10:39 AM
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
('0977777', 'AQAQAQ', '156', 567, 876, 658779, 'juuuuuuuuuu', 66778, '13'),
('1000', 'antibacteria', '8989', 9899, 90909, 789098, 'gondar', 6788, '12/09/2020'),
('77', 'hh', '67', 56, 900, 66776, 'h', 55, '12/09/2020'),
('666', 'para', '7', 56, 788, 876, 'gondar', 45, '12//09/09');

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
-- Table structure for table `caccount`
--

CREATE TABLE `caccount` (
  `id` int(19) NOT NULL,
  `firstname` varchar(45) NOT NULL,
  `middlename` varchar(56) NOT NULL,
  `patientname` varchar(45) NOT NULL,
  `password` varchar(34) NOT NULL,
  `nationality` varchar(67) NOT NULL,
  `gender` varchar(5) NOT NULL,
  `age` int(4) NOT NULL,
  `zone` varchar(45) NOT NULL,
  `woreda` varchar(45) NOT NULL,
  `kebele` varchar(34) NOT NULL,
  `phonenumber` int(23) NOT NULL,
  `status` varchar(56) NOT NULL,
  `role` varchar(5) NOT NULL,
  `occupation` varchar(45) NOT NULL,
  `year` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
  `gama` varchar(255) NOT NULL,
  `labid` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clinicalchemistry`
--

INSERT INTO `clinicalchemistry` (`patient_id`, `patientname`, `patientaddress`, `age`, `sex`, `clinicaldata`, `hospitalnumber`, `dateofcollection`, `glufasting`, `bun`, `glurandom`, `totalprotein`, `albumin`, `ldh`, `alpha1globulin`, `alpha2globulin`, `betaglobulin`, `gama`, `labid`) VALUES
(1133, 'pogba', 'ww', 34, 'm', 'dara', 2, '12/5/2009', '', 'on', 'on', '', 'on', '', '', 'on', '', 'on', 61),
(3225, 'cc', 'assss', 23, 'm', 'dara', 12, '12/09/2010', '', 'on', 'on', 'on', 'on', 'cr77777777777', '', '', '', '', 59),
(3225, 'cc', 'gondar', 22, 'f', 'dara', 87, '12/09/2010', 'on', '', 'on', '', 'on', '', 'on', '', 'on', '', 60),
(1515, 'sdsdsd', 'tttt', 67, 'm', 'fdfdf', 67, '56', '56', 'on', 'on', 'on', 'on', 'on', 'on', 'noneeeeeeeeee', 'on', 'congratulatino for all ethiopian', 55),
(3225, 'cc', 'assss', 23, 'm', 'dara', 12, '12/09/2010', '', 'on', 'on', 'on', 'on', 'on', '', '', '', '', 58),
(1270, 'husene', 'AA', 56, 'm', 'gada', 7, '121/10/2010', 'on', 'on', '', '', 'on', '', '', 'on', '', '', 56),
(15811, 'alemework', 'wollo', 22, 'm', 'data', 78, '121/10/2010', 'on', '', 'on', '', '', '', '', 'on', '', 'on', 57);

-- --------------------------------------------------------

--
-- Table structure for table `createaccount`
--

CREATE TABLE `createaccount` (
  `id` int(23) NOT NULL,
  `firstname` varchar(34) NOT NULL,
  `middlename` varchar(23) NOT NULL,
  `patientname` varchar(34) NOT NULL,
  `password` varchar(100) NOT NULL,
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

INSERT INTO `createaccount` (`id`, `firstname`, `middlename`, `patientname`, `password`, `nationality`, `gender`, `age`, `zone`, `woreda`, `kebele`, `phonenumber`, `status`, `role`, `occupation`, `year`) VALUES
(1, 'q', 'e', 'e', '3', 'ethiopia', 'Male', 22, 'fr', 'ty', 67, 56, 'single', 'patient', 'gt', 8),
(1979, 'xx', 'vv', 'nn', '1234', 'ethiopia', 'Male', 23, 'gondar', 'gondar', 9, 989878877, 'single', 'patient', 'studen', 2009),
(32, 'sdf', 'fgh', 'fg', 'f', 'ethiopia', 'Female', 34, 'gghhh', 'trt', 6, 876578, 'single', 'patient', 'student', 5678),
(780, 'tttttttt', 'rrrrrrrrrr', 'gggggggg', '12345', 'ethiopia', 'Male', 12, 'wollo', 'm/saint', 908, 915816867, 'single', 'patient', 'student', 6578),
(3235, 'aa', 'bb', 'cc', '123', 'ethiopia', 'Male', 23, 'gondar', 'gondar', 18, 90909090, 'single', 'patient', 'studen', 2010),
(1871, 'teshe', 'techal', 'tadesse', '1224', 'ethiopia', 'Male', 22, 'souuthwollo', 'm/saint', 31, 932358368, 'single', 'admin', 'admin', 2010),
(323, 'aa', 'bb', 'cc', '123', 'ethiopia', 'Male', 23, 'gondar', 'gondar', 18, 90909090, 'single', 'patient', 'studen', 2010),
(9878, 'a', 'dfgd', 'tfy', 'ffu', 'ethiopia', 'Male', 34, 'gjgy', 'hgf', 6, 86789, 'single', 'admin', 'admin', 68),
(120, 'pepe', 'popo', 'pepe', '123', 'ethiopia', 'Male', 33, 'sp', 'spa', 6, 96543, 'single', 'admin', 'defender', 2010),
(1720, 'ramos', 'popo', 'pepe', '1278', 'ethiopia', 'Male', 33, 'sp', 'spa', 6, 96543, 'single', 'admin', 'defender', 2010),
(1247, 'ademe', 'techal', 'ademe', '1220', 'ethiopia', 'male', 22, 'gondar', 'gondar', 18, 9876534, 'single', 'doctor', 'student', 2008),
(1246, 'wosen', 'wosen', 'wosen', '1246', 'ethiopia', 'male', 22, 'gondar', 'gondar', 19, 9876534, 'single', 'doctor', 'student', 2009),
(130, 'messi', 'popo', 'pepe', '1220', 'ethiopia', 'Male', 33, 'sp', 'spa', 6, 96543, 'single', 'patient', 'defender', 2010),
(55, 'tt', 'hh', 'kk', '81dc9bdb52d04dc20036dbd8313ed055', 'ethiopia', 'Male', 45, 'gg', 'yy', 8, 9876543, 'single', 'patient', 'student', 2009),
(434, 'teshe', 'xx', 'cc', '81dc9bdb52d04dc20036dbd8313ed055', 'ethiopia', 'Male', 34, 'gondar', 'gondar', 9, 989764567, 'single', 'pharmacist', 'student', 2009),
(65, 'ablel', 'makbel', 'alemu', '9090', 'ethiopia', 'Male', 45, 'ddd', 'gg', 6, 96543, 'single', 'patient', 'student', 2010),
(656, 'aa', 'bb', 'cc', '81dc9bdb52d04dc20036dbd8313ed055', 'ethiopia', 'Male', 56, 'mm', 'nnn', 9, 989887, 'single', 'patient', 'student', 2008),
(456, 'aa', 'cc', 'ww', '12', 'ethiopia', 'Male', 23, 'erere', 'jkiji', 878, 9456753, 'single', 'laboratorist', 'labtechnicial', 2010),
(3823, 'bb', 'bb', 'cc', '123', 'ethiopia', 'Male', 23, 'gondar', 'gondar', 18, 90909090, 'single', 'patient', 'studen', 2010),
(3245, 'belay', 'abebe', 'hussen', '1212', 'ethiopia', 'Male', 23, 'erere', 'jkiji', 878, 9456753, 'single', 'laboratorist', 'labtechnicial', 2010),
(654, 'zz', 'vv', 'jj', '1234', 'ethiopia', 'Male', 23, 'nmn', 'gtgtg', 45, 915816867, 'single', 'patient', 'student', 2010),
(6547, 'hhh', 'mmm', 'pppp', '1234', 'ethiopia', 'Male', 23, 'nmn', 'gtgtg', 45, 915816867, 'single', 'patient', 'student', 2010),
(1240, 'wonde', 'teshome ', 'eshetu', '1234', 'ethiopia', 'Male', 23, 's/wolo', 'tenta', 2, 935261643, 'single', 'admin', 'student', 2009),
(12403, 'wendee', 'wendee', 'teshome', '1234', 'ethiopia', 'Male', 24, 'mm', 'nn', 21, 915816867, 'single', 'admin', 'students', 2009),
(1241, 'wonde', 'teshome ', 'eshetu', '1234', 'ethiopia', 'Male', 23, 's/wolo', 'tenta', 2, 935261643, 'single', 'admin', 'student', 2009),
(1242, 'wonde', 'teshome ', 'eshetu', '81dc9bdb52d04dc20036dbd8313ed055', 'ethiopia', 'Male', 23, 's/wolo', 'tenta', 2, 935261643, 'single', 'admin', 'student', 2009),
(100, 'teshe', 'techal', 'tadesse', '68d13cf26c4b4f4f932e3eff990093ba', 'ethiopia', 'Male', 22, 'southwollo', 'denssa', 31, 932654678, 'single', 'admin', 'striker', 2009),
(1000, 'kido', 'techal', 'tadesse', 'c60d060b946d6dd6145dcbad5c4ccf6f', 'ethiopia', 'Male', 22, 'southwollo', 'denssa', 31, 932654678, 'single', 'laboratorist', 'striker', 2009),
(100000, 'ademe', 'techal', 'tadesse', 'b24d516bb65a5a58079f0f3526c87c57', 'ethiopia', 'Male', 22, 'southwollo', 'denssa', 31, 932654678, 'single', 'pharmacist', 'striker', 2009),
(1000000, 'messi', 'techal', 'tadesse', 'b24d516bb65a5a58079f0f3526c87c57', 'ethiopia', 'Male', 22, 'southwollo', 'denssa', 31, 932654678, 'single', 'patient', 'striker', 2009);

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
  `bleedingtime` varchar(255) NOT NULL,
  `labid` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hematology`
--

INSERT INTO `hematology` (`patient_id`, `patientname`, `patientaddress`, `age`, `sex`, `clinicaldata`, `hospitalnumber`, `dateofcollection`, `bands`, `lymphocytes`, `basophils`, `hematocrit`, `bloodparasite`, `segments`, `monocytes`, `rbc`, `hemoglobin`, `bleedingtime`, `labid`) VALUES
(1133, 'pogba', 'aa', 23, 'm', 'data', 13, '12/09/2010', '', '', '', '', '', '', 'kerhjgjkhdnfhmnfb,', 'safe', 'safe', 'safe', 84),
(1270, 'mmm', 'AAA', 23, 'm', 'sdd', 3, '12/09/6', 'onhjfkjirrjri', 'hgjhhireuejirj', '', '', '', 'onhgfjhkgj', '', '', '', '', 83),
(77, 'mm', 'adisababa', 45, 'm', 'data', 67, '12/09/2010', 'secure soon', 'secure soon', 'secure soon', '', '', 'secure soon', 'secure soon vbbbbbbbbbbbbbbbbbbbbbbbbb', '', '', '', 82),
(2345, 'kebede', 'aa', 23, 'm', 'data', 67, '12', '', '', 'on', 'on', '', 'on', 'on', '', '', '', 81),
(2345, 'kebede', 'aa', 23, 'm', 'data', 67, '12', '', '', 'congratulatino for all ethiopian', 'she will be secure soon', '', 'she will be secure soon', 'she will be secure soon', '', '', '', 80),
(1133, 'pogba', 'ppp', 22, 'm', 'ggg', 78, '12/09/2010', 'excellent  status', '', '', '', 'excellent  status', 'excellent  status', '', 'excellent  status', '', '', 79),
(1270, 'kidist', 'gondar', 22, 'f', 'gaaa', 8, '121/10/2010', 'bands', 'on', '', '', '', 'on', 'madridddddddddd', '', '', '', 71),
(1270, 'kidist', 'gojamm', 22, 'f', 'jaa', 98, '12/2345/2009', 'bands', 'on', '', '', '', 'on', 'on', '', 'teshager techal', 'kidst wondmu', 72),
(1270, 'queen', 'AA', 34, 'm', 'hu', 34, '12/09/2010', '', '', '', '', '', 'on', 'on', 'on', 'on', '', 73),
(1261, 'alexis', 'gondar', 25, 'm', 'diseases', 34, '12/09/2010', 'on', 'on', '', '', '', 'on', 'on', 'on', '', '', 74),
(1190, 'tsehay', 'wollo', 78, 'm', 'fataa', 8, '121/10/2010', 'on', 'on', '', '', '', 'uniteddd', 'unitedddd', '', '', '', 75),
(3225, 'cc', 'uuuu', 23, 'm', 'dara', 6, '12/09/2010', 'on', 'on', 'on', '', '', 'on', 'on', 'on', '', '', 78);

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
(61, '261932_222724457760200_100000679430641_760388_970806_n.jpg', ''),
(62, '261932_222724457760200_100000679430641_760388_970806_n.jpg', 'fhtgtyghfvjhgjh'),
(63, '62440_437679081259_711471259_5555505_84067_n.jpg', 'gdeydeeuud'),
(57, '224367_128726110538417_100002030859358_180941_2172179_n.jpg', 'dfjhcgihfbjgkxdnisdjxknfgdfjsk');

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
-- Table structure for table `orderdrug`
--

CREATE TABLE `orderdrug` (
  `patient_id` int(12) NOT NULL,
  `patientname` varchar(34) NOT NULL,
  `drugname` varchar(56) NOT NULL,
  `quantity` varchar(56) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orderdrug`
--

INSERT INTO `orderdrug` (`patient_id`, `patientname`, `drugname`, `quantity`) VALUES
(1270, 'mmm', 'paracetamol', '100'),
(1270, 'mmm', 'amoxalin', '123'),
(1270, 'mmm', 'amoxalin', '123'),
(8790, 'rodrguez', 'amoxalin', '3'),
(8790, 'rodrguez', 'amoxalin', '3'),
(8790, 'rodrguez', 'paracetamol', '3'),
(8790, 'rodrguez', 'paracetamol', '3'),
(1270, 'mmm', 'amoxa', '2'),
(77, 'mm', 'amoxa', '7'),
(65, 'gg', 'parcetamol', '10'),
(1133, 'pogba', 'parcetamol', '5');

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
(39, 1133, 'pogba', 'gsfkdhgdfj,gn', 'heefhdfbvmbfj,hffjfhbmngm'),
(38, 1133, 'pogba', 'define virus??', 'ghuygvghnbv '),
(37, 1133, 'pogba', 'define bacteria???', NULL),
(36, 56, 'ii', 'define??', NULL),
(30, 8888, 'liben', 'define biology', NULL),
(31, 1190, 'tsehay', 'what is HIV AIDS?', NULL),
(32, 1190, 'tsehay', 'what is HIV AIDS?', NULL),
(33, 2345, 'kebede', 'define clinical chemistry??', 'it is nothingggggggggggg!!!'),
(34, 77, 'mm', 'define ,oxygen??', 'sgdrgjhfmmhnkbvmbjbcnxbc'),
(35, 77, 'mm', 'dehwgsdfbj', 'sennnnnnnnnnnnnnnnnnnnn');

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
  `patientname` varchar(23) NOT NULL,
  `password` varchar(100) NOT NULL,
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

INSERT INTO `registerr` (`patient_id`, `firstname`, `middlename`, `patientname`, `password`, `nationality`, `gender`, `age`, `zone`, `woreda`, `kebele`, `phonenumber`, `status`, `role`, `occupation`, `year`) VALUES
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
(1270, 'zedd', 'dar', 'mmm', '1233', 'ethiopia', 'Male', 22, 'mmm', 'kkkk', 98, 96543, 'single', 'patient', 'student', 2010),
(1900, 'teshome', 'belete', 'amanuel', '1234', 'ethiopia', 'Male', 22, 'gondar', 'gondar', 18, 989909096, 'single', 'patient', 'student', 2010),
(1261, 'alexis', 'sanchez', 'abebe', '1233', 'ethiopia', 'Male', 23, 'gondar', 'gondar', 23, 915816867, 'single', 'patient', 'student', 2010),
(12618, 'oliver', 'giroud', 'abebe', '000', 'ethiopia', 'Male', 23, 'gondar', 'gondar', 23, 915816867, 'single', 'patient', 'student', 2010),
(1891, 'alexis', 'sanches', 'abebe', '1234', 'ethiopia', 'Male', 23, 'gondar', 'gondar', 9, 915675677, 'single', 'patient', 'studen', 2010),
(1287, 'tesheeee', 'teshome', 'abebe', '1233', 'ethiopia', 'Male', 23, 'jjjj', 'iiii', 9, 987654322, 'single', 'patient', 'student', 2010),
(1111, 'kidst', 'wondmu', 'kidst', '1234', 'ethiopia', 'Male', 12, 'gondar', 'gondar', 9, 989878877, 'single', 'patient', 'student', 2010),
(11101, 'genet', 'admasu', 'geni', '1234', 'ethiopia', 'Male', 23, 'hhh', 'iiii', 9, 909090909, 'single', 'patient', 'student', 2010),
(12, 'genet', 'abebe', 'alemu', '1234', 'ethiopia', 'Male', 23, 'gondar', 'gondar', 8, 90909090, 'single', 'patient', 'student', 2011),
(8888, 'genet', 'alebachew', 'liben', '12', 'ethiopia', 'Male', 23, 'gondar', 'gondar', 9, 987665544, 'single', 'patient', 'student', 2011),
(1322, 'AAA', 'BBB', 'CCC', '1235', 'ethiopia', 'Male', 67, 'VVV', 'hh', 9, 91698766, 'single', 'patient', 'student', 2010),
(15811, 'genet', 'abebe', 'alemework', '1223', 'ethiopia', 'Male', 23, 'n/gondar', 'gondar', 9, 915816867, 'single', 'patient', 'student', 2010),
(1190, 'genet', 'abebe', 'tsehay', '1223', 'ethiopia', 'Male', 23, 'n/gondar', 'gondar', 9, 915816867, 'single', 'patient', 'student', 2010),
(3225, 'aa', 'bb', 'cc', '123', 'ethiopia', 'Male', 34, 'gondar', 'hhh', 78, 915675677, 'single', 'patient', 'studen', 1223),
(1133, 'pogba', 'pogba', 'pogba', '1234', 'ethiopia', 'Male', 25, 'gondar', 'gondar', 31, 989909096, 'single', 'patient', 'player', 2009),
(1240, 'wonde', 'wonde', 'wonde', '81dc9bdb52d04dc20036dbd8313ed055', 'ethiopia', 'Male', 22, 'tenta', 'tenta', 9, 915816867, 'single', 'patient', 'student', 2009),
(2345, 'abeb', 'alemu', 'kebede', '81dc9bdb52d04dc20036dbd8313ed055', 'ethiopia', 'Male', 55, 'n/gondar', 'gondar', 9, 915816867, 'marrige', 'patient', 'student', 2009),
(22345, 'abebaw', 'alemu', 'kebede', '81dc9bdb52d04dc20036dbd8313ed055', 'ethiopia', 'Male', 55, 'n/gondar', 'gondar', 9, 915816867, 'marrige', 'patient', 'student', 2009),
(909, 'aa', 'bb', 'cc', '81dc9bdb52d04dc20036dbd8313ed055', 'ethiopia', 'Male', 23, 'gondar', 'gondar', 98, 987654356, 'single', 'patient', 'student', 2008),
(77, 'tt', 'nn', 'mm', '81dc9bdb52d04dc20036dbd8313ed055', 'ethiopia', 'Male', 34, 'gondar', 'gondar', 56, 87654, 'single', 'patient', 'student', 2009),
(65, 'ff', 'dd', 'gg', '81dc9bdb52d04dc20036dbd8313ed055', 'ethiopia', 'Male', 56, 'ff', 'yy', 7, 9876543, 'marrige', 'patient', 'student', 2009),
(65788, 'ff', 'dd', 'gg', '81dc9bdb52d04dc20036dbd8313ed055', 'ethiopia', 'Male', 56, 'ff', 'yy', 7, 9876543, 'marrige', 'patient', 'student', 2009),
(788, 'ff', 'dd', 'gg', '81dc9bdb52d04dc20036dbd8313ed055', 'ethiopia', 'Male', 56, 'ff', 'yy', 7, 9876543, 'marrige', 'patient', 'student', 2009),
(44444, 'ygfv', 'nfvg', 'hnvg', '81dc9bdb52d04dc20036dbd8313ed055', 'ethiopia', 'Male', 67, 'ggg', 'jjjj', 9, 986523456, 'single', 'patient', 'student', 2010),
(786, 'geni', 'abebe', 'abebe', '81dc9bdb52d04dc20036dbd8313ed055', 'ethiopia', 'Male', 23, 'guuu', 'ddd', 890, 987656546, 'single', 'patient', 'student', 2009),
(343433, 'ff', 'dddddd', 'sssssssss', '81dc9bdb52d04dc20036dbd8313ed055', 'ethiopia', 'Male', 34, 'ffff', 'hhhh', 87, 987654323, 'single', 'patient', 'student', 2008),
(33, 'ff', 'dddddd', 'sssssssss', '81dc9bdb52d04dc20036dbd8313ed055', 'ethiopia', 'Male', 34, 'ffff', 'hhhh', 87, 987654323, 'single', 'patient', 'student', 2008),
(998877, 'ff', 'bb', 'vv', '81dc9bdb52d04dc20036dbd8313ed055', 'ethiopia', 'Male', 25, 'ddd', 'hhh', 9, 987655433, 'single', 'patient', 'student', 2009),
(56, 'gg', 'yy', 'ii', '81dc9bdb52d04dc20036dbd8313ed055', 'ethiopia', 'Male', 23, 'gondar', 'gondar', 9, 987656546, 'single', 'patient', 'studen', 90),
(12700, 'zz', 'mm', 'nn', '81dc9bdb52d04dc20036dbd8313ed055', 'USA', 'Male', 25, 'n/gondar', 'gondar', 9, 915816867, 'single', 'patient', 'student', 2009);

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
  `bacteria` varchar(34) NOT NULL,
  `labid` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `urinalysis`
--

INSERT INTO `urinalysis` (`patient_id`, `patientname`, `patientaddress`, `age`, `sex`, `clinicaldata`, `hospitalnumber`, `dateofcollection`, `color`, `ph`, `gravity`, `albumin`, `glucose`, `ketone`, `bilirubin`, `blood`, `urobilinogen`, `nitrite`, `urinehcg`, `rbc`, `wbc`, `epithelialcell`, `castrbc`, `castwbc`, `granularcast`, `crystals`, `bacteria`, `labid`) VALUES
('65', 'gg', 'ggggg', 34, 'f', 'data', 33, '12/09/2010', '', 'on', '', 'on', 'on', '', 'on', '', 'on', '', '', '', '', '', '', '', '', '', '', 32),
('1133', 'pogba', 'po', 23, 'm', 'damaa', 67, '1', '', 'excellent and safe condtion', '', 'excellent and safe condtion', 'on', '', 'on', '', 'excellent and safe condtion', '', '', '', '', '', '', '', '', '', '', 31),
('3225', 'cc', 'gondar', 22, 'm', 'dara', 23, '12/09/2010', 'on', 'on', 'on', 'on', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 30),
('15811', 'jery', 'AA', 22, 'f', 'ggg', 8, '12/2345/2009', '', '', 'on', 'on', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 27),
('15811', 'Alemework', 'werth', 90, 'm', 'data', 89, '121/10/2010', 'on', 'on', 'on', 'on', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 28),
('1190', 'tsehay', 'AA', 34, 'm', 'fddf', 56, '121/10/2010', 'on', 'on', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 29);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adddrug`
--
ALTER TABLE `adddrug`
  ADD PRIMARY KEY (`stockcode`);

--
-- Indexes for table `clinicalchemistry`
--
ALTER TABLE `clinicalchemistry`
  ADD PRIMARY KEY (`labid`);

--
-- Indexes for table `hematology`
--
ALTER TABLE `hematology`
  ADD PRIMARY KEY (`labid`);

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
-- Indexes for table `urinalysis`
--
ALTER TABLE `urinalysis`
  ADD PRIMARY KEY (`labid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clinicalchemistry`
--
ALTER TABLE `clinicalchemistry`
  MODIFY `labid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
--
-- AUTO_INCREMENT for table `hematology`
--
ALTER TABLE `hematology`
  MODIFY `labid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;
--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `urinalysis`
--
ALTER TABLE `urinalysis`
  MODIFY `labid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
