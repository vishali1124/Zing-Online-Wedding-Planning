-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 21, 2017 at 02:43 PM
-- Server version: 5.5.35
-- PHP Version: 5.4.23

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `zing`
--

-- --------------------------------------------------------

--
-- Table structure for table `advertisement`
--

CREATE TABLE IF NOT EXISTS `advertisement` (
  `AdId` char(4) NOT NULL,
  `Description` varchar(150) NOT NULL,
  `Company` varchar(50) NOT NULL,
  `StartDate` date NOT NULL,
  `EndDate` date NOT NULL,
  `OfferPrice` float NOT NULL,
  PRIMARY KEY (`AdId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `advertisement`
--

INSERT INTO `advertisement` (`AdId`, `Description`, `Company`, `StartDate`, `EndDate`, `OfferPrice`) VALUES
('D001', 'Jewellery ', 'Saranya Jewellers', '2017-07-01', '2017-11-11', 200000),
('D002', 'Ketchup', 'Heinz ketchup', '2017-10-18', '2018-01-30', 100000);

-- --------------------------------------------------------

--
-- Table structure for table `offer`
--

CREATE TABLE IF NOT EXISTS `offer` (
  `OfferName` varchar(20) NOT NULL,
  `Description` varchar(100) NOT NULL,
  `OfferPrice` float NOT NULL,
  PRIMARY KEY (`OfferName`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `offer`
--

INSERT INTO `offer` (`OfferName`, `Description`, `OfferPrice`) VALUES
('Credit/Debit card ', 'Sampath Bank, Commercial Bank, People Bank', 10),
('Seasonal', 'April , May, December', 20);

-- --------------------------------------------------------

--
-- Table structure for table `wp_zing_addons`
--

CREATE TABLE IF NOT EXISTS `wp_zing_addons` (
  `aid` char(4) NOT NULL DEFAULT '',
  `aname` varchar(20) DEFAULT NULL,
  `aprice` float DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `wp_zing_addons`
--

INSERT INTO `wp_zing_addons` (`aid`, `aname`, `aprice`, `qty`) VALUES
('A001', 'Vehicle 1', 55000, 1),
('A002', 'Vehicle 2', 80000, 1),
('A003', 'Vehicle 3', 60000, 1),
('A004', 'Vehicle 4', 75000, 1),
('A005', 'Vehicle 5', 60000, 1),
('A006', 'Lights 1', 40000, 3),
('A007', 'Lights 2', 65000, 1),
('A008', 'Lights 3', 60000, 3),
('A009', 'Lights 4', 55000, 4),
('A010', 'Lights 5', 48000, 1),
('A011', 'Table 1', 15000, 3),
('A012', 'Table 2', 9500, 1),
('A013', 'Table 3', 12000, 3),
('A014', 'Table 4', 18000, 4),
('A015', 'Table 5', 25000, 1),
('A016', 'Card 1', 150, 1500),
('A017', 'Card 2', 120, 1500),
('A018', 'Card 3', 100, 1500),
('A019', 'Card 4', 130, 1500),
('A020', 'Card 5', 180, 1500),
('A021', 'Photoset 1', 150000, 1),
('A022', 'Photoset 2', 135000, 1),
('A023', 'Photoset 3', 100000, 1),
('A024', 'Photoset 4', 75000, 1),
('A025', 'Photoset 5', 18000, 1),
('A026', 'Band 1', 50000, 1),
('A027', ' Band 2', 80000, 1),
('A028', ' Band 3', 100000, 1),
('A029', ' Band 4', 75000, 1),
('A030', ' Band 5', 60000, 1),
('A031', 'Bouquets 1', 5000, 1),
('A032', ' Bouquets 2', 3000, 1),
('A033', ' Bouquets 3', 7000, 1),
('A034', ' Bouquets 4', 3000, 1),
('A035', ' Bouquets 5', 5000, 1),
('A036', 'B.Shoes  1', 5000, 10),
('A037', ' B.Shoes  2', 8000, 10),
('A038', ' B.Shoes  3', 6000, 10),
('A039', ' B.Shoes  4', 7500, 10),
('A040', ' B.Shoes  5', 6000, 10),
('A041', 'Headband  1', 1000, 10),
('A042', ' Headband  2', 600, 10),
('A043', ' Headband  3', 800, 10),
('A044', ' Headband  4', 1500, 10),
('A045', ' Headband  5', 9500, 10),
('A046', 'Hairstylist 1', 15000, 1),
('A047', ' Hairstylist 2', 80000, 1),
('A048', ' Hairstylist 3', 1000, 1),
('A049', ' Hairstylist 4', 25000, 1),
('A050', ' Hairstylist 5', 30000, 1),
('A051', 'Makeup  1', 250000, 1),
('A052', ' Makeup 2', 100000, 1),
('A053', ' Makeup 3', 90000, 1),
('A054', ' Makeup 4', 150000, 1),
('A055', ' Makeup  5', 100000, 1),
('A056', 'G.Shose  1', 5000, 10),
('A057', ' G.Shose  2', 8000, 10),
('A058', ' G.Shose  3', 6000, 10),
('A059', ' G.Shose  4', 7500, 10),
('A060', ' G.Shose  5', 6500, 10),
('A061', 'Dress 1', 15000, 15),
('A062', ' Dress 2', 10000, 15),
('A063', ' Dress 3', 20000, 15),
('A064', ' Dress 4', 7500, 15),
('A065', ' Dress 5', 5000, 15),
('A066', 'BBouquets  1', 5000, 10),
('A067', ' BBouquets 2', 2000, 10),
('A068', ' BBouquets 3', 2500, 10),
('A069', ' BBouquets 4', 3000, 10),
('A070', ' BBouquets  5', 5000, 10);

-- --------------------------------------------------------

--
-- Table structure for table `wp_zing_bill`
--

CREATE TABLE IF NOT EXISTS `wp_zing_bill` (
  `invoiceNo` char(5) NOT NULL DEFAULT '',
  `bdate` datetime DEFAULT NULL,
  `installment` float DEFAULT NULL,
  `amount` float DEFAULT NULL,
  `username` varchar(16) DEFAULT NULL,
  `orNo` char(10) DEFAULT NULL,
  PRIMARY KEY (`invoiceNo`),
  KEY `fk_bill` (`username`),
  KEY `fk_bill2` (`orNo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `wp_zing_bill`
--

INSERT INTO `wp_zing_bill` (`invoiceNo`, `bdate`, `installment`, `amount`, `username`, `orNo`) VALUES
('I1111', '0000-00-00 00:00:00', 150000, 10000000, 'visha123', 'B234567891'),
('I2222', '0000-00-00 00:00:00', 25000, 9000000, 'erandi123', 'A123456789'),
('I3333', '0000-00-00 00:00:00', 180000, 45000000, 'janadi123', 'C345678912'),
('I4444', '0000-00-00 00:00:00', 100000, 89000000, 'akshi123', 'D456789123'),
('I5555', '0000-00-00 00:00:00', 165000, 10000000, 'muubs123', 'F678912346');

-- --------------------------------------------------------

--
-- Table structure for table `wp_zing_books`
--

CREATE TABLE IF NOT EXISTS `wp_zing_books` (
  `aid` char(4) NOT NULL DEFAULT '',
  `username` varchar(16) NOT NULL DEFAULT '',
  PRIMARY KEY (`aid`,`username`),
  KEY `fk_books2` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `wp_zing_books`
--

INSERT INTO `wp_zing_books` (`aid`, `username`) VALUES
('A003', 'akshi123'),
('A004', 'erandi123'),
('A001', 'janadi123'),
('A002', 'rushda123'),
('A001', 'visha123');

-- --------------------------------------------------------

--
-- Table structure for table `wp_zing_employee`
--

CREATE TABLE IF NOT EXISTS `wp_zing_employee` (
  `eid` char(5) NOT NULL DEFAULT '',
  `Password` varchar(16) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `position` varchar(20) DEFAULT NULL,
  `salary` float DEFAULT NULL,
  `mangerId` char(5) DEFAULT NULL,
  PRIMARY KEY (`eid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `wp_zing_employee`
--

INSERT INTO `wp_zing_employee` (`eid`, `Password`, `name`, `dob`, `position`, `salary`, `mangerId`) VALUES
('E1111', '1111e', 'kumar', '1960-01-01', 'Web Developer', 75000, ''),
('E2222', '2222e', 'Sahan', '1991-11-02', 'Manager', 100000, 'M0002'),
('E3333', '3333e', 'shasi', '1983-05-22', 'System Operator', 65000, ''),
('E4444', '4444e', 'kapil', '1975-12-12', 'System Operator', 75000, ''),
('E5555', '5555e', 'kumar', '1970-02-04', 'System Operator', 65000, ''),
('E6666', '6666e', 'Vimal', '1990-04-14', 'System Operator', 65000, '');

-- --------------------------------------------------------

--
-- Table structure for table `wp_zing_feedback`
--

CREATE TABLE IF NOT EXISTS `wp_zing_feedback` (
  `fNo` char(5) NOT NULL DEFAULT '',
  `username` varchar(16) DEFAULT NULL,
  `eid` char(5) DEFAULT NULL,
  PRIMARY KEY (`fNo`),
  KEY `fk_feedback1` (`username`),
  KEY `fk_feedback2` (`eid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `wp_zing_feedback`
--

INSERT INTO `wp_zing_feedback` (`fNo`, `username`, `eid`) VALUES
('F1111', 'muubs123', 'E1111'),
('F2222', 'erandi123', 'E1111'),
('F3333', 'akshi123', 'E1111'),
('F4444', 'rushda123', 'E1111'),
('F5555', 'janadi123', 'E1111');

-- --------------------------------------------------------

--
-- Table structure for table `wp_zing_handles`
--

CREATE TABLE IF NOT EXISTS `wp_zing_handles` (
  `username` varchar(16) NOT NULL DEFAULT '',
  `eid` char(5) NOT NULL DEFAULT '',
  PRIMARY KEY (`eid`,`username`),
  KEY `fk_handles1` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `wp_zing_handles`
--

INSERT INTO `wp_zing_handles` (`username`, `eid`) VALUES
('akshi123', 'E4444'),
('erandi123', 'E4444'),
('muubs123', 'E1111'),
('rushda123', 'E4444'),
('visha123', 'E1111');

-- --------------------------------------------------------

--
-- Table structure for table `wp_zing_includes`
--

CREATE TABLE IF NOT EXISTS `wp_zing_includes` (
  `Id` char(4) NOT NULL DEFAULT '',
  `pcode` char(4) NOT NULL DEFAULT '',
  PRIMARY KEY (`Id`,`pcode`),
  KEY `fk_includes2` (`pcode`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `wp_zing_includes`
--

INSERT INTO `wp_zing_includes` (`Id`, `pcode`) VALUES
('O111', 'P111'),
('O111', 'P222'),
('O222', 'P333'),
('O333', 'P444'),
('O444', 'P555');

-- --------------------------------------------------------

--
-- Table structure for table `wp_zing_inquiry`
--

CREATE TABLE IF NOT EXISTS `wp_zing_inquiry` (
  `iNum` int(11) NOT NULL DEFAULT '0',
  `details` varchar(500) DEFAULT NULL,
  `username` varchar(16) DEFAULT NULL,
  `eid` char(5) DEFAULT NULL,
  PRIMARY KEY (`iNum`),
  KEY `fk_inquiry1` (`username`),
  KEY `fk_inquiry2` (`eid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `wp_zing_inquiry`
--

INSERT INTO `wp_zing_inquiry` (`iNum`, `details`, `username`, `eid`) VALUES
(1, 'how to get my orders', 'visha123', 'E1111'),
(2, 'how to get the addons', 'akshi123', 'E1111'),
(3, 'how to i change my dress color', 'janadi123', 'E1111'),
(4, 'how to pay', 'rushda123', 'E1111'),
(5, 'how to get offer', 'erandi123', 'E1111');

-- --------------------------------------------------------

--
-- Table structure for table `wp_zing_member`
--

CREATE TABLE IF NOT EXISTS `wp_zing_member` (
  `fname` varchar(20) DEFAULT NULL,
  `lname` varchar(20) DEFAULT NULL,
  `email` varchar(25) DEFAULT NULL,
  `username` varchar(16) NOT NULL DEFAULT '',
  `password` varchar(16) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `cNumber` char(10) DEFAULT NULL,
  `pcode` char(4) DEFAULT NULL,
  PRIMARY KEY (`username`),
  KEY `fk_member` (`pcode`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `wp_zing_member`
--

INSERT INTO `wp_zing_member` (`fname`, `lname`, `email`, `username`, `password`, `address`, `cNumber`, `pcode`) VALUES
('Akshi', 'Shaggy', 'akshi@gmail.com', 'akshi123', 'akshisuhasi.123', '21,Wellawatta', '0774567891', 'P111'),
('Erandi', 'Bachchan', 'erandi@gmail.com', 'erandi123', 'erandi.123', '56Rathmalana', '0771234567', 'P555'),
('Janadi', 'Kota', 'janadi@gmail.com', 'janadi123', 'janadi*abc', '50,Colombo 07', '0775678912', 'P444'),
('Mubina', 'Dryfish', 'mubina@gmail.com', 'muubs123', 'mubinarizvi', '11,Maradana', '0776789123', 'P222'),
('Rushda', 'Pumkin', 'rushda@gmail.com', 'rushda123', 'rushda.123', '76,MT.Lavinia', '0772345678', 'P333'),
('Visha', 'Barney', 'visha@gmail.com', 'visha123', 'visha.123', '9,Bambalapitiya', '0773456789', 'P555');

-- --------------------------------------------------------

--
-- Table structure for table `wp_zing_options`
--

CREATE TABLE IF NOT EXISTS `wp_zing_options` (
  `Id` char(4) NOT NULL DEFAULT '',
  `gdress` varchar(20) DEFAULT NULL,
  `bdress` varchar(20) DEFAULT NULL,
  `venue` varchar(20) DEFAULT NULL,
  `jewellery` varchar(20) DEFAULT NULL,
  `floral` varchar(20) DEFAULT NULL,
  `ring` varchar(20) DEFAULT NULL,
  `catering` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `wp_zing_options`
--

INSERT INTO `wp_zing_options` (`Id`, `gdress`, `bdress`, `venue`, `jewellery`, `floral`, `ring`, `catering`) VALUES
('O111', 'Dress1', 'Dress2', 'venue3', 'Jewellery Set 1', 'floral1', 'ring2', 'catering2'),
('O222', 'Dress1', 'Dress3', 'venue1', 'Jewellery Set 2', 'floral2', 'ring1', 'catering1'),
('O333', 'Dress2', 'Dress1', 'venue1', 'Jewellery Set 3', 'floral3', 'ring3', 'catering3'),
('O444', 'Dress3', 'Dress2', 'venue2', 'Jewellery Set 2', 'floral2', 'ring1', 'catering3'),
('O555', 'Dress1', 'Dress2', 'venue1', 'Jewellery Set 1', 'floral1', 'ring2', 'catering2');

-- --------------------------------------------------------

--
-- Table structure for table `wp_zing_order`
--

CREATE TABLE IF NOT EXISTS `wp_zing_order` (
  `orNo` char(10) NOT NULL DEFAULT '',
  `odate` datetime DEFAULT NULL,
  `details` varchar(500) DEFAULT NULL,
  `username` varchar(16) DEFAULT NULL,
  PRIMARY KEY (`orNo`),
  KEY `fk_order` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `wp_zing_order`
--

INSERT INTO `wp_zing_order` (`orNo`, `odate`, `details`, `username`) VALUES
('A123456789', '0000-00-00 00:00:00', 'Beach wedding planning', 'erandi123'),
('B234567891', '0000-00-00 00:00:00', 'Indian wedding planning', 'visha123'),
('C345678912', '0000-00-00 00:00:00', 'Ceremonial wedding planning', 'janadi123'),
('D456789123', '0000-00-00 00:00:00', 'Ceremonial wedding planning', 'akshi123'),
('E567891234', '0000-00-00 00:00:00', 'Fairytale wedding planning', 'rushda123'),
('F678912346', '0000-00-00 00:00:00', 'Garden wedding planning', 'muubs123');

-- --------------------------------------------------------

--
-- Table structure for table `wp_zing_organizes`
--

CREATE TABLE IF NOT EXISTS `wp_zing_organizes` (
  `orNo` char(10) NOT NULL DEFAULT '',
  `eid` char(5) NOT NULL DEFAULT '',
  `wedDate` date DEFAULT NULL,
  PRIMARY KEY (`orNo`,`eid`),
  KEY `fk_organizes2` (`eid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `wp_zing_organizes`
--

INSERT INTO `wp_zing_organizes` (`orNo`, `eid`, `wedDate`) VALUES
('A123456789', 'E1111', '0000-00-00'),
('B234567891', 'E1111', '0000-00-00'),
('D456789123', 'E1111', '0000-00-00'),
('E567891234', 'E1111', '0000-00-00'),
('F678912346', 'E1111', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `wp_zing_package`
--

CREATE TABLE IF NOT EXISTS `wp_zing_package` (
  `pcode` char(4) NOT NULL DEFAULT '',
  `pname` varchar(50) DEFAULT NULL,
  `pprice` float DEFAULT NULL,
  PRIMARY KEY (`pcode`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `wp_zing_package`
--

INSERT INTO `wp_zing_package` (`pcode`, `pname`, `pprice`) VALUES
('P111', 'Beach', 8000000),
('P222', 'Ceremonial', 10000000),
('P333', 'Fairytale', 7500000),
('P444', 'Garden', 6500000),
('P555', 'Indian', 8000000);

-- --------------------------------------------------------

--
-- Table structure for table `wp_zing_places`
--

CREATE TABLE IF NOT EXISTS `wp_zing_places` (
  `aid` char(4) NOT NULL DEFAULT '',
  `orNo` char(10) NOT NULL DEFAULT '',
  PRIMARY KEY (`aid`,`orNo`),
  KEY `fk_places2` (`orNo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `wp_zing_places`
--

INSERT INTO `wp_zing_places` (`aid`, `orNo`) VALUES
('A001', 'A123456789'),
('A005', 'A123456789'),
('A002', 'B234567891'),
('A003', 'B234567891'),
('A004', 'C345678912');

-- --------------------------------------------------------

--
-- Table structure for table `wp_zing_search`
--

CREATE TABLE IF NOT EXISTS `wp_zing_search` (
  `keyword` varchar(20) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `wp_zing_search`
--

INSERT INTO `wp_zing_search` (`keyword`, `description`) VALUES
('zing', 'we have bridal''s,groom''s dress.Go to our package page '),
('Vehicle', 'we have 5 type of vehicle. go to our addons page'),
('about Zing', 'go to about us link in the top bar');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `wp_zing_bill`
--
ALTER TABLE `wp_zing_bill`
  ADD CONSTRAINT `fk_bill` FOREIGN KEY (`username`) REFERENCES `wp_zing_member` (`username`),
  ADD CONSTRAINT `fk_bill2` FOREIGN KEY (`orNo`) REFERENCES `wp_zing_order` (`orNo`);

--
-- Constraints for table `wp_zing_books`
--
ALTER TABLE `wp_zing_books`
  ADD CONSTRAINT `fk_books1` FOREIGN KEY (`aid`) REFERENCES `wp_zing_addons` (`aid`),
  ADD CONSTRAINT `fk_books2` FOREIGN KEY (`username`) REFERENCES `wp_zing_member` (`username`);

--
-- Constraints for table `wp_zing_feedback`
--
ALTER TABLE `wp_zing_feedback`
  ADD CONSTRAINT `fk_feedback1` FOREIGN KEY (`username`) REFERENCES `wp_zing_member` (`username`),
  ADD CONSTRAINT `fk_feedback2` FOREIGN KEY (`eid`) REFERENCES `wp_zing_employee` (`eid`);

--
-- Constraints for table `wp_zing_handles`
--
ALTER TABLE `wp_zing_handles`
  ADD CONSTRAINT `fk_handles1` FOREIGN KEY (`username`) REFERENCES `wp_zing_member` (`username`),
  ADD CONSTRAINT `fk_handles2` FOREIGN KEY (`eid`) REFERENCES `wp_zing_employee` (`eid`);

--
-- Constraints for table `wp_zing_includes`
--
ALTER TABLE `wp_zing_includes`
  ADD CONSTRAINT `fk_includes1` FOREIGN KEY (`Id`) REFERENCES `wp_zing_options` (`Id`),
  ADD CONSTRAINT `fk_includes2` FOREIGN KEY (`pcode`) REFERENCES `wp_zing_package` (`pcode`);

--
-- Constraints for table `wp_zing_inquiry`
--
ALTER TABLE `wp_zing_inquiry`
  ADD CONSTRAINT `fk_inquiry1` FOREIGN KEY (`username`) REFERENCES `wp_zing_member` (`username`),
  ADD CONSTRAINT `fk_inquiry2` FOREIGN KEY (`eid`) REFERENCES `wp_zing_employee` (`eid`);

--
-- Constraints for table `wp_zing_member`
--
ALTER TABLE `wp_zing_member`
  ADD CONSTRAINT `fk_member` FOREIGN KEY (`pcode`) REFERENCES `wp_zing_package` (`pcode`);

--
-- Constraints for table `wp_zing_order`
--
ALTER TABLE `wp_zing_order`
  ADD CONSTRAINT `fk_order` FOREIGN KEY (`username`) REFERENCES `wp_zing_member` (`username`);

--
-- Constraints for table `wp_zing_organizes`
--
ALTER TABLE `wp_zing_organizes`
  ADD CONSTRAINT `fk_organizes1` FOREIGN KEY (`orNo`) REFERENCES `wp_zing_order` (`orNo`),
  ADD CONSTRAINT `fk_organizes2` FOREIGN KEY (`eid`) REFERENCES `wp_zing_employee` (`eid`);

--
-- Constraints for table `wp_zing_places`
--
ALTER TABLE `wp_zing_places`
  ADD CONSTRAINT `fk_places` FOREIGN KEY (`aid`) REFERENCES `wp_zing_addons` (`aid`),
  ADD CONSTRAINT `fk_places2` FOREIGN KEY (`orNo`) REFERENCES `wp_zing_order` (`orNo`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
