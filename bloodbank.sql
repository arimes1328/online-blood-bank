-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2021 at 01:31 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `himajimn_bloodbank`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog_post`
--

CREATE TABLE `blog_post` (
  `id_post` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` varchar(1600) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `district` varchar(50) NOT NULL,
  `dob` varchar(250) NOT NULL,
  `bloodgroup` varchar(10) NOT NULL,
  `gender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog_post`
--

INSERT INTO `blog_post` (`id_post`, `id_user`, `first_name`, `last_name`, `title`, `description`, `image`, `createdAt`, `district`, `dob`, `bloodgroup`, `gender`) VALUES
(15, 0, 'Tiqotek', 'Inc', 'Donate Blood Today', 'Blood donors are grouped into voluntary donors, replacement donors, and paid donors. The safest of these is the voluntary donor blood. Blood banking is highly regulated to ensure both donor and recipient safety. The goal of blood banking is to provide adequate and safe blood to recipients at no risk to donors.[1] Baseline hemoglobin of 12 g/dl and 13 g/dl for potential female and male donors\' respectively,[2] and a donation interval of 12 weeks minimum have been stipulated in some countries to ensure donor safety.[3] As a way of attaining this goal, voluntary nonremunerated blood donation is encouraged and the World Health Organization (WHO) has set a target of achieving 100% voluntary non remunerated donation by 2020.[4] Nigeria as a member nation of WHO has made little progress with volu', '60cdd8d62b98d.png', '2021-06-19 11:45:26', 'Batticaloa', '1989-06-14', 'O+', 'male');

-- --------------------------------------------------------

--
-- Table structure for table `blood`
--

CREATE TABLE `blood` (
  `BloodID` int(2) NOT NULL,
  `Type` varchar(50) NOT NULL,
  `Description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blood`
--

INSERT INTO `blood` (`BloodID`, `Type`, `Description`) VALUES
(1, 'O+', 'O Positive'),
(2, 'O-', 'O Negative'),
(3, 'A+', 'A Positive'),
(4, 'A-', 'A Negative'),
(5, 'B+', 'B Positive'),
(6, 'B-', 'B Negative'),
(7, 'AB+', 'AB Positive'),
(8, 'AB-', 'AB Negative');

-- --------------------------------------------------------

--
-- Table structure for table `blood_bank_admin`
--

CREATE TABLE `blood_bank_admin` (
  `BAdminID` int(10) NOT NULL,
  `NIC` varchar(15) NOT NULL,
  `FirstName` varchar(100) NOT NULL,
  `LastName` varchar(100) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Grade` varchar(50) NOT NULL,
  `BloodBankID` int(10) NOT NULL,
  `Email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blood_bank_admin`
--

INSERT INTO `blood_bank_admin` (`BAdminID`, `NIC`, `FirstName`, `LastName`, `Password`, `Grade`, `BloodBankID`, `Email`) VALUES
(16, '123456', 'INANA', 'OGHALE PRINCE', '$2y$10$lTxgHiCIZoHspAOnC8yFy..gopgWyJjEMAnEDf9m714aRHr0TjveO', '', 12, 'prince@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `blood_bank_hospital`
--

CREATE TABLE `blood_bank_hospital` (
  `HospitalID` int(100) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `District` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blood_bank_hospital`
--

INSERT INTO `blood_bank_hospital` (`HospitalID`, `Name`, `Address`, `District`) VALUES
(12, 'Evergreen Hospital', 'Lekki', '12');

-- --------------------------------------------------------

--
-- Table structure for table `blood_bank_hospital_telephone`
--

CREATE TABLE `blood_bank_hospital_telephone` (
  `BBID` int(10) NOT NULL,
  `TelephoneNo` int(10) NOT NULL,
  `Flag` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blood_bank_hospital_telephone`
--

INSERT INTO `blood_bank_hospital_telephone` (`BBID`, `TelephoneNo`, `Flag`) VALUES
(12, 2147483647, 1);

-- --------------------------------------------------------

--
-- Table structure for table `blood_bank_request`
--

CREATE TABLE `blood_bank_request` (
  `ID` varchar(100) NOT NULL,
  `SenderID` int(100) NOT NULL,
  `ReceiverID` varchar(100) NOT NULL,
  `Type` varchar(50) NOT NULL,
  `Amount` varchar(500) NOT NULL,
  `Dates` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `blood_stock`
--

CREATE TABLE `blood_stock` (
  `StockID` int(100) NOT NULL,
  `BloodID` int(10) NOT NULL,
  `Volume` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blood_stock`
--

INSERT INTO `blood_stock` (`StockID`, `BloodID`, `Volume`) VALUES
(12, 1, NULL),
(12, 2, NULL),
(12, 3, 1),
(12, 4, NULL),
(12, 5, NULL),
(12, 6, NULL),
(12, 7, NULL),
(12, 8, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `campaign`
--

CREATE TABLE `campaign` (
  `CampaignID` int(10) NOT NULL,
  `Name` varchar(500) NOT NULL,
  `Location` varchar(500) NOT NULL,
  `Estimate` varchar(500) NOT NULL,
  `BHospitalID` int(10) NOT NULL,
  `Dates` varchar(12) NOT NULL,
  `Tme` time NOT NULL,
  `OrganizationID` varchar(100) NOT NULL,
  `Flag` tinyint(1) NOT NULL,
  `Email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cash_donation`
--

CREATE TABLE `cash_donation` (
  `CashID` int(100) NOT NULL,
  `RequesterID` varchar(10) NOT NULL,
  `Amount` int(250) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `choose_campaign`
--

CREATE TABLE `choose_campaign` (
  `Id` int(100) NOT NULL,
  `campId` int(100) NOT NULL,
  `donorId` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `choose_hospital`
--

CREATE TABLE `choose_hospital` (
  `Id` int(100) NOT NULL,
  `donorId` int(100) NOT NULL,
  `hodId` int(100) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `donate_campaign`
--

CREATE TABLE `donate_campaign` (
  `DonateID` int(100) NOT NULL,
  `CampID` int(100) NOT NULL,
  `DonorID` varchar(15) NOT NULL,
  `Volume` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `donate_hospital`
--

CREATE TABLE `donate_hospital` (
  `DonateID` int(100) NOT NULL,
  `HospitalID` int(100) NOT NULL,
  `DonorID` varchar(15) NOT NULL,
  `Dates` date NOT NULL,
  `Tme` varchar(15) NOT NULL,
  `Volume` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

CREATE TABLE `donor` (
  `nic` varchar(15) NOT NULL,
  `password` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `bloodgroup` varchar(4) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `district` varchar(20) NOT NULL,
  `addressline1` varchar(255) NOT NULL,
  `addressline2` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `status` varchar(5000) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `validation` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donor`
--

INSERT INTO `donor` (`nic`, `password`, `first_name`, `last_name`, `dob`, `bloodgroup`, `gender`, `district`, `addressline1`, `addressline2`, `email`, `status`, `created_at`, `validation`) VALUES
('0000', '$2y$10$63j.hAImzuq.ybGR3XsgCOAMjpyDgCgcrPrqKv0GzExDF0SWXDsAS', 'Tiqotek', 'Inc', '2000-03-12', 'O+', 'male', 'Lagos', '2 floor, marina lagos', '', 'tiqotek@gmail.com', '', '2021-06-21 00:29:38', 0);

-- --------------------------------------------------------

--
-- Table structure for table `donor_reservation`
--

CREATE TABLE `donor_reservation` (
  `ID` int(10) NOT NULL,
  `HosID` int(10) NOT NULL,
  `DonorID` varchar(15) NOT NULL,
  `Dates` date NOT NULL,
  `Tme` time NOT NULL,
  `Flag` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `donor_satisfaction`
--

CREATE TABLE `donor_satisfaction` (
  `HospitalID` int(5) NOT NULL,
  `DonorID` varchar(15) NOT NULL,
  `Satisfaction` int(2) NOT NULL,
  `Validation` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `donor_telephone`
--

CREATE TABLE `donor_telephone` (
  `NIC` varchar(15) NOT NULL,
  `TelephoneNo` varchar(10) NOT NULL,
  `Flag` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donor_telephone`
--

INSERT INTO `donor_telephone` (`NIC`, `TelephoneNo`, `Flag`) VALUES
('0000', '0811457071', 1);

-- --------------------------------------------------------

--
-- Table structure for table `normal_blood_request`
--

CREATE TABLE `normal_blood_request` (
  `ID` int(100) NOT NULL,
  `SenderID` int(100) NOT NULL,
  `ReceiverID` int(100) NOT NULL,
  `Type` varchar(50) NOT NULL,
  `Amount` varchar(500) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `normal_hospital`
--

CREATE TABLE `normal_hospital` (
  `NHospitalID` int(11) NOT NULL,
  `UserName` varchar(200) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `District` varchar(15) NOT NULL,
  `Chief` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `normal_hospital`
--

INSERT INTO `normal_hospital` (`NHospitalID`, `UserName`, `Name`, `Address`, `District`, `Chief`, `Password`, `Email`) VALUES
(1, 'kelina', 'Kelina Hospital', '2 floor, marina lagos', 'Abuja', 'Dr. Majedun', '$2y$10$/w7ToXaNJgqQBWomSMGRYu53vp7fKK/ZBgOH9tj.ND3.0NaYs89pu', '');

-- --------------------------------------------------------

--
-- Table structure for table `normal_hospital_telephone`
--

CREATE TABLE `normal_hospital_telephone` (
  `username` varchar(100) NOT NULL,
  `TelephoneNo` int(10) NOT NULL,
  `flag` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `organization`
--

CREATE TABLE `organization` (
  `UserName` varchar(100) NOT NULL,
  `OrganizationName` varchar(200) NOT NULL,
  `District` varchar(50) NOT NULL,
  `President` varchar(100) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Purpose` varchar(500) NOT NULL,
  `Created_At` datetime DEFAULT current_timestamp(),
  `Email` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `organization`
--

INSERT INTO `organization` (`UserName`, `OrganizationName`, `District`, `President`, `Password`, `Purpose`, `Created_At`, `Email`) VALUES
('Red Cross', 'Red Cross', 'Lagos', 'Mr. Olufolabi', '$2y$10$fYYtyBc61clKrT8qC6andefa6w2QJkS0d8lr8UVuTMRrAG7BqHth6', 'We provide immediate treatments to patients', '2021-06-20 21:03:45', 'red@cross.com');

-- --------------------------------------------------------

--
-- Table structure for table `organization_telephone`
--

CREATE TABLE `organization_telephone` (
  `OrgId` varchar(100) NOT NULL,
  `TelephoneNo` varchar(11) NOT NULL,
  `Flag` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `organization_telephone`
--

INSERT INTO `organization_telephone` (`OrgId`, `TelephoneNo`, `Flag`) VALUES
('Red Cross', '08114570714', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `requestor`
--

CREATE TABLE `requestor` (
  `NIC` varchar(15) NOT NULL,
  `FirstName` varchar(20) NOT NULL,
  `LastName` varchar(20) NOT NULL,
  `DateOfBirth` date NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Lane1` varchar(100) NOT NULL,
  `Lane2` varchar(20) DEFAULT NULL,
  `District` varchar(100) NOT NULL,
  `Gender` varchar(7) NOT NULL,
  `CreatedAt` datetime DEFAULT current_timestamp(),
  `Email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `requestor`
--

INSERT INTO `requestor` (`NIC`, `FirstName`, `LastName`, `DateOfBirth`, `Password`, `Lane1`, `Lane2`, `District`, `Gender`, `CreatedAt`, `Email`) VALUES
('000000', 'Tiqotek', 'Inc', '2000-02-12', '$2y$10$wfkyfFib7XhfXBpyT010mOdO2rtRQO70ETFCHT6s5c0kiMSc9Rq7a', '2 floor, marina lagos', 'Lagos Island', 'Benin', 'male', '2021-06-21 00:23:17', 'tiqotek@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `requestor_telephone`
--

CREATE TABLE `requestor_telephone` (
  `NIC` varchar(15) NOT NULL,
  `TelephoneNo` varchar(10) NOT NULL,
  `Flag` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `requestor_telephone`
--

INSERT INTO `requestor_telephone` (`NIC`, `TelephoneNo`, `Flag`) VALUES
('000000', '0811457071', 1);

-- --------------------------------------------------------

--
-- Table structure for table `super_admin`
--

CREATE TABLE `super_admin` (
  `SID` int(3) NOT NULL,
  `UserName` varchar(200) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `super_admin`
--

INSERT INTO `super_admin` (`SID`, `UserName`, `Password`, `Email`) VALUES
(1, 'Admin', '$2y$10$.VPPMislFQQIpkH.g05jnOH7uqaJvWwQSxDkjwN6Cep5t0fiv1OFK', 'admin@admin.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog_post`
--
ALTER TABLE `blog_post`
  ADD PRIMARY KEY (`id_post`);

--
-- Indexes for table `blood`
--
ALTER TABLE `blood`
  ADD PRIMARY KEY (`BloodID`);

--
-- Indexes for table `blood_bank_admin`
--
ALTER TABLE `blood_bank_admin`
  ADD PRIMARY KEY (`BAdminID`),
  ADD KEY `BloodBankID` (`BloodBankID`);

--
-- Indexes for table `blood_bank_hospital`
--
ALTER TABLE `blood_bank_hospital`
  ADD PRIMARY KEY (`HospitalID`);

--
-- Indexes for table `blood_bank_hospital_telephone`
--
ALTER TABLE `blood_bank_hospital_telephone`
  ADD PRIMARY KEY (`BBID`,`TelephoneNo`);

--
-- Indexes for table `blood_bank_request`
--
ALTER TABLE `blood_bank_request`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ReceiverID` (`ReceiverID`),
  ADD KEY `SenderID` (`SenderID`);

--
-- Indexes for table `blood_stock`
--
ALTER TABLE `blood_stock`
  ADD PRIMARY KEY (`StockID`,`BloodID`),
  ADD KEY `blood_stock_ibfk_2` (`BloodID`);

--
-- Indexes for table `campaign`
--
ALTER TABLE `campaign`
  ADD PRIMARY KEY (`CampaignID`),
  ADD KEY `campaign_ibfk_3` (`BHospitalID`),
  ADD KEY `campaign_ibfk_4` (`OrganizationID`);

--
-- Indexes for table `cash_donation`
--
ALTER TABLE `cash_donation`
  ADD PRIMARY KEY (`CashID`),
  ADD KEY `cash_donation_ibfk_1` (`RequesterID`);

--
-- Indexes for table `choose_campaign`
--
ALTER TABLE `choose_campaign`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `choose_hospital`
--
ALTER TABLE `choose_hospital`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `donate_campaign`
--
ALTER TABLE `donate_campaign`
  ADD PRIMARY KEY (`DonateID`),
  ADD KEY `donate_campaign_ibfk_3` (`CampID`);

--
-- Indexes for table `donate_hospital`
--
ALTER TABLE `donate_hospital`
  ADD PRIMARY KEY (`DonateID`),
  ADD KEY `hosId` (`HospitalID`);

--
-- Indexes for table `donor`
--
ALTER TABLE `donor`
  ADD PRIMARY KEY (`nic`);

--
-- Indexes for table `donor_reservation`
--
ALTER TABLE `donor_reservation`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `HosID` (`HosID`),
  ADD KEY `DonorID` (`DonorID`);

--
-- Indexes for table `donor_satisfaction`
--
ALTER TABLE `donor_satisfaction`
  ADD PRIMARY KEY (`HospitalID`,`DonorID`),
  ADD KEY `DonorID` (`DonorID`);

--
-- Indexes for table `donor_telephone`
--
ALTER TABLE `donor_telephone`
  ADD PRIMARY KEY (`NIC`,`TelephoneNo`);

--
-- Indexes for table `normal_blood_request`
--
ALTER TABLE `normal_blood_request`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `SenderID` (`SenderID`);

--
-- Indexes for table `normal_hospital`
--
ALTER TABLE `normal_hospital`
  ADD PRIMARY KEY (`UserName`),
  ADD UNIQUE KEY `unique` (`NHospitalID`);

--
-- Indexes for table `normal_hospital_telephone`
--
ALTER TABLE `normal_hospital_telephone`
  ADD PRIMARY KEY (`TelephoneNo`,`username`) USING BTREE,
  ADD KEY `username` (`username`);

--
-- Indexes for table `organization`
--
ALTER TABLE `organization`
  ADD PRIMARY KEY (`UserName`);

--
-- Indexes for table `organization_telephone`
--
ALTER TABLE `organization_telephone`
  ADD PRIMARY KEY (`TelephoneNo`,`OrgId`) USING BTREE,
  ADD KEY `OrgId` (`OrgId`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD UNIQUE KEY `token` (`token`);

--
-- Indexes for table `requestor`
--
ALTER TABLE `requestor`
  ADD PRIMARY KEY (`NIC`);

--
-- Indexes for table `requestor_telephone`
--
ALTER TABLE `requestor_telephone`
  ADD PRIMARY KEY (`NIC`,`TelephoneNo`);

--
-- Indexes for table `super_admin`
--
ALTER TABLE `super_admin`
  ADD PRIMARY KEY (`SID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog_post`
--
ALTER TABLE `blog_post`
  MODIFY `id_post` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `blood_bank_admin`
--
ALTER TABLE `blood_bank_admin`
  MODIFY `BAdminID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `blood_bank_hospital`
--
ALTER TABLE `blood_bank_hospital`
  MODIFY `HospitalID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `campaign`
--
ALTER TABLE `campaign`
  MODIFY `CampaignID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `cash_donation`
--
ALTER TABLE `cash_donation`
  MODIFY `CashID` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `choose_campaign`
--
ALTER TABLE `choose_campaign`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `choose_hospital`
--
ALTER TABLE `choose_hospital`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `donate_campaign`
--
ALTER TABLE `donate_campaign`
  MODIFY `DonateID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `donate_hospital`
--
ALTER TABLE `donate_hospital`
  MODIFY `DonateID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `donor_reservation`
--
ALTER TABLE `donor_reservation`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `normal_blood_request`
--
ALTER TABLE `normal_blood_request`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `normal_hospital`
--
ALTER TABLE `normal_hospital`
  MODIFY `NHospitalID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `super_admin`
--
ALTER TABLE `super_admin`
  MODIFY `SID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blood_bank_admin`
--
ALTER TABLE `blood_bank_admin`
  ADD CONSTRAINT `blood_bank_admin_ibfk_1` FOREIGN KEY (`BloodBankID`) REFERENCES `blood_bank_hospital` (`HospitalID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `blood_bank_hospital_telephone`
--
ALTER TABLE `blood_bank_hospital_telephone`
  ADD CONSTRAINT `blood_bank_hospital_telephone_ibfk_1` FOREIGN KEY (`BBID`) REFERENCES `blood_bank_hospital` (`HospitalID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `blood_bank_request`
--
ALTER TABLE `blood_bank_request`
  ADD CONSTRAINT `blood_bank_request_ibfk_1` FOREIGN KEY (`ReceiverID`) REFERENCES `normal_hospital` (`UserName`),
  ADD CONSTRAINT `blood_bank_request_ibfk_2` FOREIGN KEY (`SenderID`) REFERENCES `blood_bank_hospital` (`HospitalID`);

--
-- Constraints for table `blood_stock`
--
ALTER TABLE `blood_stock`
  ADD CONSTRAINT `blood_stock_ibfk_1` FOREIGN KEY (`StockID`) REFERENCES `blood_bank_hospital` (`HospitalID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `blood_stock_ibfk_2` FOREIGN KEY (`BloodID`) REFERENCES `blood` (`BloodID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `campaign`
--
ALTER TABLE `campaign`
  ADD CONSTRAINT `campaign_ibfk_3` FOREIGN KEY (`BHospitalID`) REFERENCES `blood_bank_hospital` (`HospitalID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `campaign_ibfk_4` FOREIGN KEY (`OrganizationID`) REFERENCES `organization` (`UserName`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cash_donation`
--
ALTER TABLE `cash_donation`
  ADD CONSTRAINT `cash_donation_ibfk_1` FOREIGN KEY (`RequesterID`) REFERENCES `requestor` (`NIC`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `donate_campaign`
--
ALTER TABLE `donate_campaign`
  ADD CONSTRAINT `donate_campaign_ibfk_3` FOREIGN KEY (`CampID`) REFERENCES `campaign` (`CampaignID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `donate_hospital`
--
ALTER TABLE `donate_hospital`
  ADD CONSTRAINT `donate_hospital_ibfk_1` FOREIGN KEY (`HospitalID`) REFERENCES `blood_bank_hospital` (`HospitalID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `donor_reservation`
--
ALTER TABLE `donor_reservation`
  ADD CONSTRAINT `donor_reservation_ibfk_1` FOREIGN KEY (`HosID`) REFERENCES `blood_bank_hospital` (`HospitalID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `donor_reservation_ibfk_2` FOREIGN KEY (`DonorID`) REFERENCES `donor` (`nic`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `donor_satisfaction`
--
ALTER TABLE `donor_satisfaction`
  ADD CONSTRAINT `donor_satisfaction_ibfk_1` FOREIGN KEY (`HospitalID`) REFERENCES `blood_bank_hospital` (`HospitalID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `donor_satisfaction_ibfk_2` FOREIGN KEY (`DonorID`) REFERENCES `donor` (`nic`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `donor_telephone`
--
ALTER TABLE `donor_telephone`
  ADD CONSTRAINT `donor_telephone_ibfk_1` FOREIGN KEY (`NIC`) REFERENCES `donor` (`nic`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `normal_blood_request`
--
ALTER TABLE `normal_blood_request`
  ADD CONSTRAINT `normal_blood_request_ibfk_3` FOREIGN KEY (`SenderID`) REFERENCES `blood_bank_hospital` (`HospitalID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `normal_hospital_telephone`
--
ALTER TABLE `normal_hospital_telephone`
  ADD CONSTRAINT `normal_hospital_telephone_ibfk_1` FOREIGN KEY (`username`) REFERENCES `normal_hospital` (`UserName`);

--
-- Constraints for table `organization_telephone`
--
ALTER TABLE `organization_telephone`
  ADD CONSTRAINT `organization_telephone_ibfk_1` FOREIGN KEY (`OrgId`) REFERENCES `organization` (`UserName`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `requestor_telephone`
--
ALTER TABLE `requestor_telephone`
  ADD CONSTRAINT `requestor_telephone_ibfk_1` FOREIGN KEY (`NIC`) REFERENCES `requestor` (`NIC`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
