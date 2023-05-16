-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2021 at 07:34 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `UserName` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `updationDate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `UserName`, `Password`, `updationDate`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', '2021-12-14 07:42:19');

-- --------------------------------------------------------

--
-- Table structure for table `guider`
--

CREATE TABLE `guider` (
  `Id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `guider`
--

INSERT INTO `guider` (`Id`, `name`, `email`, `password`) VALUES
(20, 'mithu', 'mit123@gmail.com', '123'),
(21, 'abc', 'abc@gmail.com', '123'),
(22, 'admin', 'admin1@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `tblbooking`
--

CREATE TABLE `tblbooking` (
  `BookingId` int(11) NOT NULL,
  `PackageId` int(11) NOT NULL,
  `UserEmail` varchar(100) NOT NULL,
  `FromDate` varchar(100) NOT NULL,
  `ToDate` varchar(100) NOT NULL,
  `Comment` mediumtext NOT NULL,
  `RegDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(11) NOT NULL,
  `CancelledBy` varchar(5) DEFAULT NULL,
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `fromPlace` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblbooking`
--

INSERT INTO `tblbooking` (`BookingId`, `PackageId`, `UserEmail`, `FromDate`, `ToDate`, `Comment`, `RegDate`, `status`, `CancelledBy`, `UpdationDate`, `fromPlace`) VALUES
(13, 1, 'abc11@gmail.com', '2021-07-11', '2021-07-13', 'asdf', '2021-07-10 10:13:48', 1, NULL, '2021-12-14 07:43:05', NULL),
(14, 1, 'abc11@gmail.com', '2021-07-13', '2021-07-16', 'nice', '2021-07-11 05:01:24', 0, NULL, NULL, NULL),
(15, 1, 'a@abc.com', '2021-12-01', '2021-12-30', 'Test Comment', '2021-12-20 06:12:12', 0, NULL, NULL, NULL),
(16, 1, 'a@abc.com', '2021-12-01', '2021-12-30', 'Test Comment', '2021-12-20 06:12:54', 0, NULL, NULL, NULL),
(17, 1, 'a@abc.com', '2021-12-11', '2021-12-15', 'Test Comment', '2021-12-20 06:13:11', 0, NULL, NULL, NULL),
(18, 1, 'a@abc.com', '2021-12-02', '2021-12-17', 'Test Comment', '2021-12-20 06:14:52', 1, NULL, '2021-12-20 06:32:12', 'Colombo'),
(19, 4, 'mithu2@gmail.com', '2021-12-01', '2021-12-09', 'Test Comment', '2021-12-20 06:31:43', 1, NULL, '2021-12-20 06:32:08', 'Trinco');

-- --------------------------------------------------------

--
-- Table structure for table `tblenquiry`
--

CREATE TABLE `tblenquiry` (
  `id` int(11) NOT NULL,
  `FullName` varchar(100) NOT NULL,
  `EmailId` varchar(100) NOT NULL,
  `MobileNumber` char(10) NOT NULL,
  `Subject` varchar(100) NOT NULL,
  `Description` mediumtext NOT NULL,
  `PostingDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `Status` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblenquiry`
--

INSERT INTO `tblenquiry` (`id`, `FullName`, `EmailId`, `MobileNumber`, `Subject`, `Description`, `PostingDate`, `Status`) VALUES
(1, 'anuj', 'anuj.lpu1@gmail.com', '2354235235', 'The standard Lorem Ipsum passage, used since the 1500s', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', '2017-05-13 22:23:53', 1),
(2, 'efgegter', 'terterte@gmail.com', '3454353453', 'The standard Lorem Ipsum passage', 'nventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat volup', '2017-05-13 22:27:00', 1),
(3, 'fwerwetrwet', 'fwsfhrtre@hdhdhqw.com', '8888888888', 'erwt wet', 'nventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat volup', '2017-05-13 22:28:11', 1),
(4, 'Test', 'test@gm.com', '4747474747', 'Test', 'iidiidiidiidiidiidiidiidiidiidiidiidiidiidiidiidiidiidiidiidiidiidiidiidiidiid', '2017-05-14 07:54:07', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblissues`
--

CREATE TABLE `tblissues` (
  `id` int(11) NOT NULL,
  `UserEmail` varchar(100) NOT NULL,
  `Issue` varchar(100) NOT NULL,
  `Description` mediumtext NOT NULL,
  `PostingDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `AdminRemark` mediumtext DEFAULT NULL,
  `AdminremarkDate` timestamp NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblissues`
--

INSERT INTO `tblissues` (`id`, `UserEmail`, `Issue`, `Description`, `PostingDate`, `AdminRemark`, `AdminremarkDate`) VALUES
(4, 'anuj@gmail.com', 'Cancellation', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco ', '2017-05-13 22:03:33', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur', '2017-05-13 23:50:40'),
(5, 'sarita@gmail.com', 'Cancellation', 'tbt 3y 34y4 3y3hgg34t', '2017-05-14 05:12:14', 'sg sd gs g sdgfs ', '2017-05-14 07:52:07'),
(6, 'demo@test.com', 'Refund', 'demo test.com demo test.comdemo test.comdemo test.comdemo test.com', '2017-05-14 07:45:37', NULL, '0000-00-00 00:00:00'),
(7, 'abc@g.com', 'Refund', 'test test ttest test ttest test ttest test ttest test ttest test t', '2017-05-14 07:56:46', 'vetet ert erteryre', '2017-05-14 07:58:43');

-- --------------------------------------------------------

--
-- Table structure for table `tblpages`
--

CREATE TABLE `tblpages` (
  `id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL DEFAULT '',
  `detail` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblpages`
--

INSERT INTO `tblpages` (`id`, `type`, `detail`) VALUES
(1, 'terms', '										<p align=\"justify\"><font size=\"2\"><strong><font color=\"#990000\">(1) ACCEPTANCE OF TERMS</font><br></strong><br></font></p>\r\n										'),
(2, 'privacy', '																																																																																																														<div style=\"text-align: justify;\"><div><span style=\"font-family: verdana;\">Tour In SriLanka, is committed to maintaining the privacy of personal information that you provide to us when using the Journey Travel &amp; Tours web site. This Privacy Policy describes how we treat personal information received about you when you visit www.journeytours.com. We may make content or services from other web sites including our co-branded web sites available to you from links located on https://www.TourinSriLanka.com These other web sites are not subject to this Privacy Policy. We recommend that you review the privacy policy at each such web site to determine how that site protects your privacy.</span></div><div><span style=\"font-family: verdana;\"><br></span></div><div><span style=\"font-family: verdana;\"><span style=\"font-weight: bold;\">Privacy Policy Promise</span><br></span></div><div><span style=\"font-weight: bold; font-family: verdana;\"><br></span></div><div><div><span style=\"font-family: verdana;\">While information is the cornerstone of our ability to provide superior service, our most important asset is our clients’ trust. Keeping client information secure, and using it only as our clients would want us to, is a top priority for all of us at Journey Travel &amp; Tours. Here then, is our promise to our individual customers:</span></div></div><div><span style=\"font-family: verdana;\"><br></span></div></div><blockquote style=\"margin: 0 0 0 40px; border: none; padding: 0px;\"><div style=\"text-align: justify;\"><div><span style=\"font-family: verdana;\">We will safeguard, according to strict standards of security and confidentiality, any information our customers share with us.</span></div><div><span style=\"font-family: verdana;\"><br></span></div><div><span style=\"font-family: verdana; font-size: 16px;\">We will limit the collection and use of customer information to the minimum we require to deliver superior service to our customers, which includes advising our customers about our products, services and other opportunities, and to administer our business.</span></div><div><span style=\"font-family: verdana; font-size: 16px;\"><br></span></div><div><span style=\"font-family: verdana; font-size: 16px;\">We will permit only authorized employees, who are trained in the proper handling of customer information, to have access to that information. Employees who violate our Privacy Promise will be subject to our normal disciplinary process.</span></div><div><span style=\"font-family: verdana; font-size: 16px;\"><br></span></div><div><span style=\"font-family: verdana; font-size: 16px;\">We will not reveal customer information to any external organization unless we have previously informed the customer in disclosures or agreements, or are required by law.</span></div><div><span style=\"font-family: verdana; font-size: 16px;\"><br></span></div><div><span style=\"font-family: verdana; font-size: 16px;\">We will always maintain control over the confidentiality of our customer information. We may, however, share customer information with reputable companies when a customer has expressed an interest in their service or product. Please note that this Privacy Policy does not apply to these other company\'s use of customer information.</span></div><div><span style=\"font-family: verdana; font-size: 16px;\"><br></span></div><div><span style=\"font-family: verdana; font-size: 16px;\">Whenever we hire other organizations to provide support services, we will require them to conform to our privacy standards and to allow us to audit them for compliance.</span></div><div><span style=\"font-family: verdana; font-size: 16px;\"><br></span></div><div><span style=\"font-family: verdana; font-size: 16px;\">We will attempt to keep customer files complete, up-to-date, and accurate. We will tell our customers how and where to conveniently access their information (except when we’re prohibited by law) and how to notify us about errors which we will promptly correct.</span></div></div></blockquote><div style=\"text-align: justify;\"><div><br></div></div>\r\n										\r\n										\r\n										\r\n										\r\n										\r\n										\r\n										\r\n										\r\n										\r\n										\r\n										'),
(3, 'aboutus', '																				<div style=\"text-align: justify;\"><span style=\"color: rgb(0, 0, 0); font-family: &quot;PT Sans&quot;, sans-serif; font-size: 14px; text-align: center; font-weight: bold;\">We, Tour In SriLanka, are located in Colombo in the capital of Sri Lanka. We work as an Inbound Tour Operator and organize very interesting cultural tours and beach holidays only in Sri Lanka.&nbsp;</span></div>										<div style=\"text-align: justify;\"><span style=\"color: rgb(0, 0, 0); font-family: &quot;PT Sans&quot;, sans-serif; font-size: 14px; text-align: center; font-weight: bold;\">During the past few years we have organized many holiday packages and satisfied hundreds of guests from different parts of the world. Please do have a look at Our Gallery page to view some testimonials.</span></div><div style=\"text-align: justify;\"><span style=\"color: rgb(0, 0, 0); font-family: &quot;PT Sans&quot;, sans-serif; font-size: 14px; text-align: center; font-weight: bold;\">Our prime objective is to satisfy our clients to the best of our ability through dedication and hard work. We have a modern fleet of vehicles and employ English speaking and Italian speaking tour guides .&nbsp;</span></div><div style=\"text-align: justify;\"><span style=\"color: rgb(0, 0, 0); font-family: &quot;PT Sans&quot;, sans-serif; font-size: 14px; text-align: center; font-weight: bold;\">Please contact us and just tell your requirements. We may build up your tour plan together. You may request pricing information for any tour package without any obligation of purchase.</span>\r\n										</div>\r\n										\r\n										'),
(11, 'contact', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbltourpackages`
--

CREATE TABLE `tbltourpackages` (
  `PackageId` int(11) NOT NULL,
  `PackageName` varchar(200) NOT NULL,
  `PackageType` varchar(150) NOT NULL,
  `PackageLocation` varchar(100) NOT NULL,
  `PackagePrice` int(11) NOT NULL,
  `PackageFetures` varchar(255) NOT NULL,
  `PackageDetails` mediumtext NOT NULL,
  `PackageImage` varchar(100) NOT NULL,
  `Creationdate` timestamp NOT NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbltourpackages`
--

INSERT INTO `tbltourpackages` (`PackageId`, `PackageName`, `PackageType`, `PackageLocation`, `PackagePrice`, `PackageFetures`, `PackageDetails`, `PackageImage`, `Creationdate`, `UpdationDate`) VALUES
(1, 'Nuwara-Elia', 'Gold', 'Nuwara-Elia', 100, 'Pickup-Drop and Free Wifi', '*Route and  map details\r\n -  *We will provide Well experienced guider.\r\n -  *Hotel Details  -  most closely  hotels details and other Hotel details. We only provide Hotel details as pdf view. No bookings and other responsibilities.\r\n -  *Pickup-Drop\r\n -  *Offer 10% Discount\r\n', 'coorg-hill-station1.jpg', '2020-12-20 18:30:00', '2021-06-07 14:40:55'),
(4, 'Sigiria', 'Silver', 'Polanaruwa', 200, 'Free wifi, pickup and drop etc', '-Route and  map details\r\n-Well experienced guider\r\n-Hotel Details  -  most closely  hotels details and other Hotel details. We only provide Hotel details as pdf view. No bookings and other responsibilities.\r\n-No vehicle facilities\r\n-Offer 5% Discount\r\n\r\n\r\n                       ', 'sigiria.jpg', '2021-12-13 22:39:37', '2021-06-07 14:28:54'),
(5, 'Galle-Port', 'Bronze', 'Galle', 300, '0000', '-Provide route and  map details\r\n-Hotel Facilities\r\n-No guiders\r\n-No Vehicles \r\n-No any discount\r\n-This package specially designed for local travelers.\r\n', 'Galle Dutch Fort.jpg', '2021-12-13 22:42:10', '2021-06-07 14:29:27'),
(7, 'jaffna', 'Gold', 'Jaffna', 50, 'Pickup-Drop and Free Wifi', 'nill', 'images.jpg', '2021-06-08 08:54:24', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tblusers`
--

CREATE TABLE `tblusers` (
  `id` int(11) NOT NULL,
  `FullName` varchar(100) NOT NULL,
  `MobileNumber` char(10) NOT NULL,
  `EmailId` varchar(70) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `RegDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblusers`
--

INSERT INTO `tblusers` (`id`, `FullName`, `MobileNumber`, `EmailId`, `Password`, `RegDate`, `UpdationDate`) VALUES
(14, 'mn', '123', 'abc@gmail.com', 'b8c37e33defde51cf91e1e03e51657da', '2021-05-26 03:24:34', '2021-05-26 03:27:41'),
(15, 'abc', '012345678', 'abc11@gmail.com', '202cb962ac59075b964b07152d234b70', '2021-07-10 10:03:10', '0000-00-00 00:00:00'),
(16, 'user', '0123456789', 'user@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '2021-10-07 03:26:24', '0000-00-00 00:00:00'),
(17, 'mithu', '011111111', 'mithu@123.com', '81dc9bdb52d04dc20036dbd8313ed055', '2021-12-14 07:25:04', '0000-00-00 00:00:00'),
(18, 'a', '123', 'a@abc.com', '202cb962ac59075b964b07152d234b70', '2021-12-20 05:37:21', '0000-00-00 00:00:00'),
(19, 'mithu', '1234', 'mithu2@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '2021-12-20 06:31:10', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guider`
--
ALTER TABLE `guider`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tblbooking`
--
ALTER TABLE `tblbooking`
  ADD PRIMARY KEY (`BookingId`);

--
-- Indexes for table `tblenquiry`
--
ALTER TABLE `tblenquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblissues`
--
ALTER TABLE `tblissues`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblpages`
--
ALTER TABLE `tblpages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbltourpackages`
--
ALTER TABLE `tbltourpackages`
  ADD PRIMARY KEY (`PackageId`);

--
-- Indexes for table `tblusers`
--
ALTER TABLE `tblusers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `EmailId` (`EmailId`),
  ADD KEY `EmailId_2` (`EmailId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `guider`
--
ALTER TABLE `guider`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tblbooking`
--
ALTER TABLE `tblbooking`
  MODIFY `BookingId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tblenquiry`
--
ALTER TABLE `tblenquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tblissues`
--
ALTER TABLE `tblissues`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tblpages`
--
ALTER TABLE `tblpages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbltourpackages`
--
ALTER TABLE `tbltourpackages`
  MODIFY `PackageId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tblusers`
--
ALTER TABLE `tblusers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
