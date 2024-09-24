-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2022 at 08:31 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `21183577`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `AdminID` int(10) NOT NULL,
  `FirstName` varchar(100) NOT NULL,
  `LastName` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `PostCode` varchar(100) NOT NULL,
  `Country` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`AdminID`, `FirstName`, `LastName`, `Address`, `PostCode`, `Country`, `Email`) VALUES
(1, 'Aadil', 'Ali', '22 Birmingham Street', 'B63 4JS', 'United Kingdom', 'aadil@hotmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `CartID` int(10) NOT NULL,
  `Products` varchar(100) NOT NULL,
  `TotalPrice` varchar(100) NOT NULL,
  `ProductID` int(10) NOT NULL,
  `CustomerID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `CustomerID` int(10) NOT NULL,
  `FirstName` varchar(100) NOT NULL,
  `LastName` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `PostCode` varchar(100) NOT NULL,
  `Country` varchar(100) NOT NULL,
  `DateOfBirth` varchar(100) NOT NULL,
  `EmailAddress` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`CustomerID`, `FirstName`, `LastName`, `Address`, `PostCode`, `Country`, `DateOfBirth`, `EmailAddress`, `password`) VALUES
(8, 'zain', 'ali', 'lister', 'dy28xl', 'england', '2022-12-17', 'aadil@hotmail.com', 'aadil'),
(9, 'zain', 'asif', '1234', '1234', 'uk', '2022-12-28', 'aadil123@hotmail.com', 'aadil');

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `InvoiceID` int(10) NOT NULL,
  `CartID` int(10) NOT NULL,
  `CustomerID` int(10) NOT NULL,
  `AdminID` int(10) NOT NULL,
  `Date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `OrderID` int(10) NOT NULL,
  `CustomerID` int(10) NOT NULL,
  `ProductID` int(10) NOT NULL,
  `NameOnCard` varchar(100) DEFAULT NULL,
  `CardNumber` int(20) DEFAULT NULL,
  `ExpiringDate` varchar(100) DEFAULT NULL,
  `CVC` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`OrderID`, `CustomerID`, `ProductID`, `NameOnCard`, `CardNumber`, `ExpiringDate`, `CVC`) VALUES
(13, 0, 1, 'aadil', 0, '2022-12-15', 123),
(14, 8, 1, 'aadil', 213123123, '2022-12-22', 123),
(15, 8, 2, 'zain', 173821, '2022-12-31', 134),
(16, 8, 4, 'aadil', 12344512, '2022-12-31', 123),
(17, 8, 1, 'test', 111111111, '2022-12-23', 121);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `ProductID` int(10) NOT NULL,
  `CarMake` varchar(100) DEFAULT NULL,
  `CarModel` varchar(100) DEFAULT NULL,
  `CarYear` varchar(100) DEFAULT NULL,
  `CarColor` varchar(100) DEFAULT NULL,
  `Price` varchar(100) NOT NULL,
  `CarReg` varchar(100) DEFAULT NULL,
  `Image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ProductID`, `CarMake`, `CarModel`, `CarYear`, `CarColor`, `Price`, `CarReg`, `Image`) VALUES
(1, 'BMW', '1 SERIES F21', '2016', 'GREY', '10995', 'X44DXL', 'images/bmw_gray.jpg'),
(2, 'Audi', 'A7', '2012', 'BLACK', '13000', 'RF61LMS', 'images/a72012.jpg'),
(3, 'Mercedes', 'A Class', '2021', 'White', '29500', 'YF21FMX', 'images/aclass.jpg'),
(4, 'Volkswagon', 'Golf R', '2018', 'Blue', '21000', 'BF18FXK', 'images/golfr.jpg'),
(5, 'Audi', 'A3 Black Edition', '2017', 'Black', '16995', 'KF17GNX', 'images/audia3.jpg'),
(6, 'Bmw', '320I Msport', '2019', 'White', '21000', 'JK19FMK', 'images/bmw320i.jpg'),
(7, 'Mercades', 'C Class', '2018', 'Silver', '17795', 'LS18FMN', 'images/c-class.jpg'),
(8, 'AUDI', 'A5', '2019', 'Gray', '20995', 'BF19GJH', 'images/a5.jpg'),
(9, 'BMW ', '525I Msport', '2020', 'Blue', '27450', 'KD20FMK', 'images/525.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`AdminID`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`CartID`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`CustomerID`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`InvoiceID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`OrderID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ProductID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `AdminID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `CartID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `CustomerID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `InvoiceID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `OrderID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `ProductID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
