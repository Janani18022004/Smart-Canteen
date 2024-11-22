-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 19, 2023 at 09:31 AM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `college_campus_smart_canteen`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `username` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feedback`
--

CREATE TABLE `tbl_feedback` (
  `id` int(60) NOT NULL,
  `customer` varchar(60) NOT NULL,
  `fid` varchar(60) NOT NULL,
  `hotelname` varchar(60) NOT NULL,
  `foodname` varchar(60) NOT NULL,
  `feed` varchar(500) NOT NULL,
  `rdate` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_feedback`
--

INSERT INTO `tbl_feedback` (`id`, `customer`, `fid`, `hotelname`, `foodname`, `feed`, `rdate`) VALUES
(1, 'jebin', '1', 'karthikcanteen', 'doosa', 'nice ', '19-12-2023');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_food_booking`
--

CREATE TABLE `tbl_food_booking` (
  `id` int(60) NOT NULL,
  `customer` varchar(60) NOT NULL,
  `hotelname` varchar(60) NOT NULL,
  `fname` varchar(60) NOT NULL,
  `qty` varchar(60) NOT NULL,
  `price` varchar(60) NOT NULL,
  `status` varchar(60) NOT NULL,
  `rdate` varchar(60) NOT NULL,
  `tno` varchar(60) NOT NULL,
  `station` varchar(60) NOT NULL,
  `comp` varchar(60) NOT NULL,
  `seatno` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_food_booking`
--

INSERT INTO `tbl_food_booking` (`id`, `customer`, `hotelname`, `fname`, `qty`, `price`, `status`, `rdate`, `tno`, `station`, `comp`, `seatno`) VALUES
(1, 'jebin', 'karthikcanteen', 'doosa', '1', '40', '2', '19-12-2023', '9894918800', 'm.kumarasamy college', 'csc', '3');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hotel`
--

CREATE TABLE `tbl_hotel` (
  `id` int(60) NOT NULL,
  `hname` varchar(60) NOT NULL,
  `mobile1` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `station` varchar(500) NOT NULL,
  `mobile2` varchar(60) NOT NULL,
  `address` varchar(60) NOT NULL,
  `city` varchar(60) NOT NULL,
  `username` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  `file` varchar(60) NOT NULL,
  `status` varchar(60) NOT NULL,
  `rdate` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_hotel`
--

INSERT INTO `tbl_hotel` (`id`, `hname`, `mobile1`, `email`, `station`, `mobile2`, `address`, `city`, `username`, `password`, `file`, `status`, `rdate`) VALUES
(1, 'karthik canteen', '09894918800', 'selva@gmail.com', 'm.kumarasamy college', '06578945678', 'trichy', 'trichy', 'karthikcanteen', 'karthikcanteen', 'uploads/65815fa259639_download.jpg', '', '19-12-2023');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hotelfood`
--

CREATE TABLE `tbl_hotelfood` (
  `id` int(60) NOT NULL,
  `hotelname` varchar(60) NOT NULL,
  `fname` varchar(60) NOT NULL,
  `ftype` varchar(60) NOT NULL,
  `price` varchar(60) NOT NULL,
  `file` varchar(500) NOT NULL,
  `rdate` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_hotelfood`
--

INSERT INTO `tbl_hotelfood` (`id`, `hotelname`, `fname`, `ftype`, `price`, `file`, `rdate`) VALUES
(1, 'karthikcanteen', 'doosa', 'Veg', '40', 'uploads/food/image.jpg', '19-12-2023');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(60) NOT NULL,
  `name` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `mobile` varchar(60) NOT NULL,
  `username` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  `rdate` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `name`, `email`, `mobile`, `username`, `password`, `rdate`) VALUES
(1, 'jebin', 'selva@gmail.com', '09894918800', 'jebin', '1234', '19-12-2023');

-- --------------------------------------------------------

--
-- Table structure for table `your_booking_table`
--

CREATE TABLE `your_booking_table` (
  `hotelname` varchar(60) NOT NULL,
  `station` varchar(60) NOT NULL,
  `mobile` varchar(60) NOT NULL,
  `customer` varchar(60) NOT NULL,
  `foodname` varchar(60) NOT NULL,
  `quantity` varchar(60) NOT NULL,
  `price` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `your_booking_table`
--

