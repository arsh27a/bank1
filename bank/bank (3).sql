-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2024 at 06:21 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `currentaccount`
--

CREATE TABLE `currentaccount` (
  `ID` int(11) NOT NULL,
  `CustomerID` varchar(100) NOT NULL,
  `BusinessName` varchar(100) DEFAULT NULL,
  `OwnerName` varchar(100) DEFAULT NULL,
  `Bank` varchar(100) DEFAULT NULL,
  `TAN` char(12) DEFAULT NULL,
  `BusinessAddress` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `currentaccount`
--

INSERT INTO `currentaccount` (`ID`, `CustomerID`, `BusinessName`, `OwnerName`, `Bank`, `TAN`, `BusinessAddress`) VALUES
(1, 'ABC123', 'Ajay Productions', 'Ajay Kumar', 'icici', '145HJU', '#123, Industrial Area, Chandigarh'),
(2, 'harnoor25', 'Noor productions', 'Harnoor Kaur', 'icici', 'hjg312', ''),
(3, 'harnoor25', 'Noor productions', 'Harnoor Kaur', 'icici', 'hjg312', '#2516, Industrial Area, Chandigarh');

-- --------------------------------------------------------

--
-- Table structure for table `customercare`
--

CREATE TABLE `customercare` (
  `ID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Mobile` int(11) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Pincode` int(11) NOT NULL,
  `Remarks` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customermaster`
--

CREATE TABLE `customermaster` (
  `CustomerID` varchar(100) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `FatherName` varchar(50) NOT NULL,
  `Gender` char(6) NOT NULL,
  `PAN` varchar(10) NOT NULL,
  `Mobile` int(10) NOT NULL,
  `Aadhar` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customermaster`
--

INSERT INTO `customermaster` (`CustomerID`, `Name`, `FatherName`, `Gender`, `PAN`, `Mobile`, `Aadhar`) VALUES
('ABC123', 'Ajay Kumar', 'Ram Kumar', 'male', 'ASH4581378', 1234567891, 2147483647),
('harnoor25', 'Harnoor ', 'Harvinder Singh', 'female', 'gh11234556', 2147483647, 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `fixeddeposit`
--

CREATE TABLE `fixeddeposit` (
  `ID` int(11) NOT NULL,
  `CustomerID` varchar(100) DEFAULT NULL,
  `Bank` varchar(20) NOT NULL,
  `Amount` int(11) NOT NULL,
  `Tenure` int(11) NOT NULL,
  `InterestRate` int(11) NOT NULL,
  `MaturedAmt` int(11) NOT NULL,
  `Date` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fixeddeposit`
--

INSERT INTO `fixeddeposit` (`ID`, `CustomerID`, `Bank`, `Amount`, `Tenure`, `InterestRate`, `MaturedAmt`, `Date`) VALUES
(1, 'ABC123', 'ICICI', 50000, 4, 5, 52250, '2024-03-31'),
(2, 'harnoor25', 'AXIS', 2147483647, 8, 7, 2147483647, '2024-04-11');

-- --------------------------------------------------------

--
-- Table structure for table `goldloan`
--

CREATE TABLE `goldloan` (
  `ID` int(11) NOT NULL,
  `CustomerID` varchar(100) NOT NULL,
  `Bank` varchar(100) NOT NULL,
  `GoldWeight` int(11) NOT NULL,
  `DemandAmt` int(11) NOT NULL,
  `Tenure` int(11) NOT NULL,
  `LoanAmt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `goldloan`
--

INSERT INTO `goldloan` (`ID`, `CustomerID`, `Bank`, `GoldWeight`, `DemandAmt`, `Tenure`, `LoanAmt`) VALUES
(1, 'ABC123', 'icici', 12, 12000, 1, 13200),
(2, 'harnoor25', 'axis', 15, 12000, 1, 13200);

-- --------------------------------------------------------

--
-- Table structure for table `homeloan`
--

CREATE TABLE `homeloan` (
  `ID` int(11) NOT NULL,
  `CustomerID` varchar(100) NOT NULL,
  `Bank` varchar(100) NOT NULL,
  `PlotArea` int(11) NOT NULL,
  `DemandAmt` int(11) NOT NULL,
  `Tenure` int(11) NOT NULL,
  `LoanAmt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `homeloan`
--

INSERT INTO `homeloan` (`ID`, `CustomerID`, `Bank`, `PlotArea`, `DemandAmt`, `Tenure`, `LoanAmt`) VALUES
(1, 'ABC123', 'icici', 15, 12000, 4, 15840),
(2, 'ABC123', 'pnb', 15, 12000, 4, 15840),
(3, 'harnoor25', 'axis', 14, 125000, 4, 124740);

-- --------------------------------------------------------

--
-- Table structure for table `savingsaccount`
--

CREATE TABLE `savingsaccount` (
  `ID` int(11) NOT NULL,
  `CustomerID` varchar(100) NOT NULL,
  `Bank` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `savingsaccount`
--

INSERT INTO `savingsaccount` (`ID`, `CustomerID`, `Bank`) VALUES
(1, 'ABC123', 'icici'),
(2, 'harnoor25', 'axis');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `currentaccount`
--
ALTER TABLE `currentaccount`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `CustomerID` (`CustomerID`);

--
-- Indexes for table `customercare`
--
ALTER TABLE `customercare`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `customermaster`
--
ALTER TABLE `customermaster`
  ADD PRIMARY KEY (`CustomerID`);

--
-- Indexes for table `fixeddeposit`
--
ALTER TABLE `fixeddeposit`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `CustomerID` (`CustomerID`);

--
-- Indexes for table `goldloan`
--
ALTER TABLE `goldloan`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `CustomerID` (`CustomerID`);

--
-- Indexes for table `homeloan`
--
ALTER TABLE `homeloan`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `CustomerID` (`CustomerID`);

--
-- Indexes for table `savingsaccount`
--
ALTER TABLE `savingsaccount`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `CustomerID` (`CustomerID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `currentaccount`
--
ALTER TABLE `currentaccount`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customercare`
--
ALTER TABLE `customercare`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fixeddeposit`
--
ALTER TABLE `fixeddeposit`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `goldloan`
--
ALTER TABLE `goldloan`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `homeloan`
--
ALTER TABLE `homeloan`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `savingsaccount`
--
ALTER TABLE `savingsaccount`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `currentaccount`
--
ALTER TABLE `currentaccount`
  ADD CONSTRAINT `currentaccount_ibfk_1` FOREIGN KEY (`CustomerID`) REFERENCES `customermaster` (`CustomerID`);

--
-- Constraints for table `fixeddeposit`
--
ALTER TABLE `fixeddeposit`
  ADD CONSTRAINT `fixeddeposit_ibfk_1` FOREIGN KEY (`CustomerID`) REFERENCES `customermaster` (`CustomerID`);

--
-- Constraints for table `goldloan`
--
ALTER TABLE `goldloan`
  ADD CONSTRAINT `goldloan_ibfk_1` FOREIGN KEY (`CustomerID`) REFERENCES `customermaster` (`CustomerID`);

--
-- Constraints for table `homeloan`
--
ALTER TABLE `homeloan`
  ADD CONSTRAINT `homeloan_ibfk_1` FOREIGN KEY (`CustomerID`) REFERENCES `customermaster` (`CustomerID`);

--
-- Constraints for table `savingsaccount`
--
ALTER TABLE `savingsaccount`
  ADD CONSTRAINT `savingsaccount_ibfk_1` FOREIGN KEY (`CustomerID`) REFERENCES `customermaster` (`CustomerID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
