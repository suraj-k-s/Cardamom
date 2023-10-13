-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2023 at 07:29 AM
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
-- Database: `db_auction`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(50) NOT NULL,
  `admin_email` varchar(50) NOT NULL,
  `admin_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_name`, `admin_email`, `admin_password`) VALUES
(2, 'Cardamom Auction Management System', 'e-auction@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_auctionbody`
--

CREATE TABLE `tbl_auctionbody` (
  `auctionbody_id` int(11) NOT NULL,
  `auctionbody_status` int(11) NOT NULL,
  `auctionbody_time` varchar(15) NOT NULL,
  `auctionhead_id` int(11) NOT NULL,
  `lot_id` int(11) NOT NULL,
  `trader_id` int(11) NOT NULL,
  `auctionbody_amount` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_auctionbody`
--

INSERT INTO `tbl_auctionbody` (`auctionbody_id`, `auctionbody_status`, `auctionbody_time`, `auctionhead_id`, `lot_id`, `trader_id`, `auctionbody_amount`) VALUES
(4085, 0, '01:03:01 PM', 23, 17, 18, '2252'),
(4086, 0, '01:03:03 PM', 23, 17, 18, '2254'),
(4087, 0, '01:03:08 PM', 23, 17, 18, '2256'),
(4088, 0, '01:03:13 PM', 23, 17, 18, '2258'),
(4089, 0, '01:03:23 PM', 23, 17, 18, '2260'),
(4090, 0, '01:03:29 PM', 23, 18, 18, '3152'),
(4091, 0, '01:03:30 PM', 23, 18, 18, '3154'),
(4092, 0, '03:08:39 PM', 24, 20, 19, '2252'),
(4093, 0, '03:08:44 PM', 24, 20, 18, '2252'),
(4094, 0, '03:08:48 PM', 24, 20, 18, '2254'),
(4095, 0, '03:08:52 PM', 24, 20, 19, '2254'),
(4096, 0, '03:09:22 PM', 24, 21, 18, '1002'),
(4097, 0, '03:09:27 PM', 24, 21, 18, '1004'),
(4098, 0, '03:09:28 PM', 24, 21, 18, '1006'),
(4099, 0, '03:09:33 PM', 24, 21, 18, '1008'),
(4100, 0, '03:09:35 PM', 24, 21, 18, '1010'),
(4101, 0, '03:09:36 PM', 24, 21, 18, '1012'),
(4102, 0, '03:09:36 PM', 24, 21, 18, '1014'),
(4103, 0, '03:09:36 PM', 24, 21, 18, '1016'),
(4104, 0, '03:09:36 PM', 24, 21, 18, '1018'),
(4105, 0, '03:09:36 PM', 24, 21, 18, '1020'),
(4106, 0, '03:09:37 PM', 24, 21, 18, '1022'),
(4107, 0, '10:00:42 AM', 26, 17, 18, '2252'),
(4108, 0, '10:00:44 AM', 26, 17, 18, '2262'),
(4109, 0, '10:00:47 AM', 26, 17, 18, '2264'),
(4110, 0, '10:00:55 AM', 26, 17, 18, '2266'),
(4111, 0, '10:01:04 AM', 26, 18, 18, '3152'),
(4112, 0, '10:01:05 AM', 26, 18, 18, '3156'),
(4113, 0, '10:01:10 AM', 26, 18, 18, '3158'),
(4114, 0, '10:01:11 AM', 26, 18, 18, '3160'),
(4115, 0, '10:01:11 AM', 26, 18, 18, '3162'),
(4116, 0, '10:01:11 AM', 26, 18, 18, '3164'),
(4117, 0, '10:01:12 AM', 26, 18, 18, '3166'),
(4118, 0, '10:01:12 AM', 26, 18, 18, '3168'),
(4119, 0, '10:01:12 AM', 26, 18, 18, '3170'),
(4120, 0, '10:01:12 AM', 26, 18, 18, '3172'),
(4121, 0, '10:01:15 AM', 26, 18, 18, '3174'),
(4122, 0, '10:01:19 AM', 26, 18, 18, '3176'),
(4123, 0, '10:01:19 AM', 26, 18, 18, '3178'),
(4124, 0, '10:01:23 AM', 26, 18, 18, '3180'),
(4125, 0, '10:01:23 AM', 26, 18, 18, '3182'),
(4126, 0, '10:01:23 AM', 26, 18, 18, '3184'),
(4127, 0, '10:01:29 AM', 26, 18, 18, '3186'),
(4128, 0, '10:01:33 AM', 26, 18, 18, '3188'),
(4129, 0, '10:01:34 AM', 26, 18, 18, '3190'),
(4130, 0, '10:01:34 AM', 26, 18, 18, '3192'),
(4131, 0, '10:01:34 AM', 26, 18, 18, '3194'),
(4132, 0, '10:01:34 AM', 26, 18, 18, '3196'),
(4133, 0, '10:01:52 AM', 26, 20, 18, '2252'),
(4134, 0, '10:27:13 AM', 26, 21, 18, '1002'),
(4135, 0, '10:27:15 AM', 26, 21, 18, '1024'),
(4136, 0, '10:27:19 AM', 26, 21, 18, '1026'),
(4137, 0, '10:27:19 AM', 26, 21, 18, '1028'),
(4138, 0, '10:27:19 AM', 26, 21, 18, '1030'),
(4139, 0, '02:31:20 PM', 27, 17, 18, '2252'),
(4140, 0, '02:31:21 PM', 27, 17, 18, '2268'),
(4141, 0, '02:31:21 PM', 27, 17, 18, '2270'),
(4142, 0, '02:31:22 PM', 27, 17, 18, '2272'),
(4143, 0, '02:31:22 PM', 27, 17, 18, '2274'),
(4144, 0, '02:31:27 PM', 27, 17, 18, '2276'),
(4145, 0, '02:31:29 PM', 27, 17, 18, '2278'),
(4146, 0, '02:31:29 PM', 27, 17, 18, '2280'),
(4147, 0, '02:31:30 PM', 27, 17, 18, '2282'),
(4148, 0, '02:31:33 PM', 27, 17, 18, '2284'),
(4149, 0, '02:31:33 PM', 27, 17, 18, '2286'),
(4150, 0, '02:31:38 PM', 27, 17, 18, '2288'),
(4151, 0, '02:31:38 PM', 27, 17, 18, '2290'),
(4152, 0, '02:31:38 PM', 27, 17, 18, '2292'),
(4153, 0, '02:31:38 PM', 27, 17, 18, '2294'),
(4154, 0, '02:31:53 PM', 27, 18, 18, '3152'),
(4155, 0, '02:31:54 PM', 27, 18, 18, '3198'),
(4156, 0, '02:31:56 PM', 27, 18, 18, '3200'),
(4157, 0, '02:33:42 PM', 27, 20, 18, '2252'),
(4158, 0, '02:34:01 PM', 27, 21, 18, '1002'),
(4159, 0, '02:34:03 PM', 27, 21, 18, '1032'),
(4160, 0, '02:34:04 PM', 27, 21, 18, '1034'),
(4161, 0, '02:37:56 PM', 29, 17, 18, '2252'),
(4162, 0, '02:37:59 PM', 29, 17, 18, '2296'),
(4163, 0, '02:38:05 PM', 29, 17, 18, '2298'),
(4164, 0, '02:38:11 PM', 29, 17, 18, '2300'),
(4165, 0, '02:38:17 PM', 29, 17, 18, '2302'),
(4166, 0, '02:38:24 PM', 29, 17, 18, '2304'),
(4167, 0, '02:42:53 PM', 29, 18, 18, '3152'),
(4168, 0, '02:42:54 PM', 29, 18, 18, '3202'),
(4169, 0, '02:42:54 PM', 29, 18, 18, '3204'),
(4170, 0, '02:42:55 PM', 29, 18, 18, '3206'),
(4171, 0, '02:42:55 PM', 29, 18, 18, '3208'),
(4172, 0, '02:43:37 PM', 29, 20, 18, '2252'),
(4173, 0, '02:43:39 PM', 29, 20, 18, '2256'),
(4174, 0, '02:43:40 PM', 29, 20, 18, '2258'),
(4175, 0, '02:43:40 PM', 29, 20, 18, '2260'),
(4176, 0, '02:43:45 PM', 29, 20, 18, '2262'),
(4177, 0, '02:46:54 PM', 29, 21, 20, '1002'),
(4178, 0, '02:46:56 PM', 29, 21, 20, '1036'),
(4179, 0, '02:47:00 PM', 29, 21, 18, '1002'),
(4180, 0, '02:47:06 PM', 29, 21, 18, '1038'),
(4181, 0, '02:47:10 PM', 29, 21, 20, '1038'),
(4182, 0, '02:47:29 PM', 29, 21, 18, '1040'),
(4183, 0, '02:35:00 PM', 33, 17, 18, '2252'),
(4184, 0, '02:35:01 PM', 33, 17, 18, '2306'),
(4185, 0, '02:35:01 PM', 33, 17, 18, '2308'),
(4186, 0, '02:35:07 PM', 33, 17, 18, '2310'),
(4187, 0, '02:35:28 PM', 33, 18, 18, '3152'),
(4188, 0, '02:35:28 PM', 33, 18, 18, '3210'),
(4189, 0, '02:36:36 PM', 33, 20, 18, '2252'),
(4190, 0, '02:36:38 PM', 33, 20, 18, '2264'),
(4191, 0, '02:36:38 PM', 33, 20, 18, '2266'),
(4192, 0, '02:36:41 PM', 33, 20, 20, '2252'),
(4193, 0, '02:36:41 PM', 33, 20, 20, '2268'),
(4194, 0, '02:37:00 PM', 33, 21, 18, '1002'),
(4195, 0, '02:37:00 PM', 33, 21, 18, '1042');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_auctionhead`
--

CREATE TABLE `tbl_auctionhead` (
  `auctionhead_id` int(11) NOT NULL,
  `auctionhead_date` varchar(30) NOT NULL,
  `auctionhead_time` varchar(30) NOT NULL,
  `auctionhead_status` int(11) NOT NULL,
  `company_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_auctionhead`
--

INSERT INTO `tbl_auctionhead` (`auctionhead_id`, `auctionhead_date`, `auctionhead_time`, `auctionhead_status`, `company_id`) VALUES
(32, '2023-09-17', '02:30 PM - 06:30 PM', 0, 8),
(33, '2023-09-24', '02:30 PM - 06:30 PM', 0, 8);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_company`
--

CREATE TABLE `tbl_company` (
  `company_id` int(11) NOT NULL,
  `company_name` varchar(50) NOT NULL,
  `company_contact` varchar(10) NOT NULL,
  `company_email` varchar(30) NOT NULL,
  `company_address` varchar(50) NOT NULL,
  `company_logo` varchar(150) NOT NULL,
  `company_proof` varchar(150) NOT NULL,
  `company_v_status` int(11) NOT NULL DEFAULT 0,
  `company_doj` date NOT NULL,
  `place_id` int(11) NOT NULL,
  `company_shortname` varchar(30) NOT NULL,
  `company_gst` varchar(20) NOT NULL,
  `company_licenseno` varchar(30) NOT NULL,
  `company_password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_company`
--

INSERT INTO `tbl_company` (`company_id`, `company_name`, `company_contact`, `company_email`, `company_address`, `company_logo`, `company_proof`, `company_v_status`, `company_doj`, `place_id`, `company_shortname`, `company_gst`, `company_licenseno`, `company_password`) VALUES
(8, 'SugandhaGiri', '9063571920', 'sugandhagiri@gmail.com', 'Nedumkandam', 'Screenshot_2023_0807_191206.jpg', 'Screenshot_2023_0807_191821.jpg', 1, '2023-05-30', 11, 'SG', '8756', '001117648', '12345'),
(12, 'Header System Limited', '8765432190', 'header@gmail.com', 'Theni', 'Screenshot_2023_0807_191337.jpg', 'Screenshot_2023_0807_191834.jpg', 0, '2023-08-07', 0, 'HSL', '50', '110015', '876543'),
(13, 'KCPMC', '9876567890', 'kcpmc@gmail.com', 'rajakumary', 'Screenshot_2023_0807_191143.jpg', 'Screenshot_2023_0807_191821.jpg', 0, '2023-08-08', 0, 'KCPMC', '12%', '123456776', '098765'),
(14, 'sdfghjk', '1234567890', 'dfghjk@gmail.com', 'sdfghjk', 'IMG_20210518_154128.jpg', 'IMG_20210921_141713.jpg', 1, '2023-08-15', 9, 'dfghj', '45%', '0098765', '123455'),
(15, 'kcpmc', '908765432', 'kcpmc@gmail.com', 'kavalakkal', 'Screenshot_2023_0807_191337.jpg', 'IMG_20210518_154128.jpg', 0, '2023-09-15', 0, 'KCPMC', '12%', '12345', '123456'),
(16, 'abcd', '123456789', 'abcd@gmail.com', 'fahgfhsa', 'Screenshot_2023_0807_191659 - Copy.jpg', 'Screenshot_2023_0807_191337 - Copy.jpg', 0, '2023-09-29', 19, '1234', '1231', '2342', '124567'),
(17, 'anna', '765423984', 'anna@gmail.com', 'abcd', 'Screenshot_2023_0807_191206 - Copy.jpg', 'Screenshot_2023_0807_191143 - Copy.jpg', 0, '2023-09-29', 19, '12345', '1243242', '321324235', '1234567');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_complaint`
--

CREATE TABLE `tbl_complaint` (
  `complaint_id` int(11) NOT NULL,
  `complaint_content` varchar(30) NOT NULL,
  `complaint_title` varchar(30) NOT NULL,
  `complaint_status` int(11) NOT NULL,
  `complaint_reply` varchar(30) NOT NULL DEFAULT 'Waiting for Reply',
  `trader_id` int(11) NOT NULL,
  `complaint_date` varchar(15) NOT NULL,
  `company_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_district`
--

CREATE TABLE `tbl_district` (
  `district_id` int(11) NOT NULL,
  `district_name` varchar(30) NOT NULL,
  `state_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_district`
--

INSERT INTO `tbl_district` (`district_id`, `district_name`, `state_id`) VALUES
(6, 'idukki', 14),
(7, 'Ernakulam', 14),
(8, 'Kasargod', 14),
(9, 'Kannur', 14),
(10, 'Wayanad', 14),
(11, 'KoZhikode', 14),
(12, 'Malappuram', 14),
(13, 'Palakkad', 14),
(14, 'Thrissur', 14),
(15, 'Kottayam', 14),
(16, 'AlappuZha', 14),
(17, 'Pathanamthitta', 14),
(18, 'Kollam', 14),
(19, 'Thiruvananthapuram', 14),
(20, 'Ariyalur', 18),
(21, 'Chengalpottu', 18),
(22, 'Chennai', 18),
(23, 'Coimbatore', 18),
(24, 'Cuddalore', 18),
(25, '', 0),
(26, 'Dharmapuri', 18),
(27, 'Dindigul', 18),
(28, 'Erode', 18),
(29, 'Kallakurichi', 18),
(30, 'Kanchipuram', 18),
(31, 'Kanniyakumari', 18),
(32, 'Karur', 18),
(33, 'Krishnagiri', 18),
(34, 'Madurai', 18),
(35, 'Mayiladuthurai', 18),
(36, 'Nagapattanam', 18),
(37, 'Namakkal', 18),
(38, 'Nilgiris', 18),
(39, 'Perambalur', 18),
(40, 'Pudukottai', 18),
(41, '', 0),
(42, 'Ramananthapuram', 18),
(43, 'Ranipet', 18),
(44, 'Salem', 18),
(45, 'Sivagangai', 18),
(46, 'Tenkasi', 18),
(47, 'Thanjavur', 18),
(48, 'Theni', 18),
(49, 'Thoothukudi', 18),
(50, 'Tiruchirappalli', 39),
(51, 'Tirunalveli', 18),
(52, 'Tiruppur', 18);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feedback`
--

CREATE TABLE `tbl_feedback` (
  `feedback_id` int(11) NOT NULL,
  `feedback_content` varchar(30) NOT NULL,
  `feedback_title` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_lot`
--

CREATE TABLE `tbl_lot` (
  `lot_id` int(11) NOT NULL,
  `lot_number` varchar(30) NOT NULL,
  `lot_litreweight` varchar(20) NOT NULL,
  `lot_quantity` varchar(30) NOT NULL,
  `lot_bag` varchar(20) NOT NULL,
  `lot_plantername` varchar(50) NOT NULL,
  `lot_type` varchar(50) NOT NULL,
  `lot_status` int(11) NOT NULL,
  `company_id` int(11) NOT NULL,
  `lot_startingprice` varchar(30) NOT NULL,
  `lot_finalprice` varchar(30) NOT NULL DEFAULT 'Pending',
  `trader_id` int(11) NOT NULL,
  `lot_photo` varchar(150) NOT NULL,
  `lot_qualitydetails` varchar(60) NOT NULL,
  `lot_minimumamount` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_lot`
--

INSERT INTO `tbl_lot` (`lot_id`, `lot_number`, `lot_litreweight`, `lot_quantity`, `lot_bag`, `lot_plantername`, `lot_type`, `lot_status`, `company_id`, `lot_startingprice`, `lot_finalprice`, `trader_id`, `lot_photo`, `lot_qualitydetails`, `lot_minimumamount`) VALUES
(17, '101', '1234', '4352', '14', 'Joshwa', 'Planter', 1, 8, '2250', '2310', 18, 'Koala.jpg', 'Better', '2200'),
(18, '102', '345', '234', '10', 'Chaandi', 'Planter', 1, 8, '3150', '3210', 18, 'Jellyfish.jpg', 'Better', '2000'),
(20, '104', '12.1', '150', '3', 'Sonu', 'Trader', 1, 8, '2250', '2268', 20, 'CarSpice.jpeg', 'Average', '1000'),
(21, '105', '12.1', '155', '3', 'manu', 'Trader', 1, 8, '1000', '1042', 18, 'CarSpice.jpeg', 'Average', '1000');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_place`
--

CREATE TABLE `tbl_place` (
  `place_id` int(11) NOT NULL,
  `place_name` varchar(50) NOT NULL,
  `place_pincode` varchar(10) NOT NULL,
  `district_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_place`
--

INSERT INTO `tbl_place` (`place_id`, `place_name`, `place_pincode`, `district_id`) VALUES
(9, 'Adimali', '685561', 6),
(12, 'Bisonvalley', '685565', 6),
(13, 'Calvari Mount', '685515', 6),
(14, 'Puttady', '685551', 6),
(16, 'Nedumkandam', '685553', 6),
(17, 'Aluva', '683101', 7),
(18, 'Angamally', '683572', 7),
(19, 'Muvattupuzha', '686661', 7),
(20, 'Nedumbassery', '683585', 7),
(21, 'Perumbavoor', '683542', 7),
(22, 'Adur B.O', '671543', 8),
(23, 'Chamundikunnu B.O', '671532', 8),
(24, 'Nileshwar S.O', '671314', 8),
(25, 'Parakalayi B.O', '671531', 8),
(26, 'Vorkadi B.O', '671323', 8),
(27, 'Alancherry', '670650', 9),
(28, 'Alakode', '670571', 9),
(29, 'Azhikkal', '670009', 9),
(30, 'Kottiyur', '670651', 9),
(31, 'Neerveli', '670701', 9),
(32, 'Arattuthara B.O', '670645', 10),
(33, 'Chembra B.O', '673577', 10),
(34, 'Kabanigiri B.O', '673579', 10),
(35, 'Payyampalli B.O', '670646', 10),
(36, 'Vythiri S.O', '673576', 10),
(37, 'Alli B.O', '673602', 11),
(38, 'Calicut H.O', '673001', 11),
(39, 'Eramala B.O', '673501', 11),
(40, 'Irivallur B.O', '673617', 11),
(41, 'Kalathur B.O', '673315', 11),
(42, 'Amayur', '676123', 12),
(43, 'Chullippara', '676508', 12),
(44, 'Edapal', '679576', 12),
(45, 'Edayur', '676554', 12),
(46, 'Kakkad', '676306', 12),
(47, 'Ariyur', '678583', 13),
(48, 'Chittadi', '678706', 13),
(49, 'Chittur Pg', '678101', 13),
(50, 'Mannarkkad', '678582', 13),
(51, 'Paloor', '678582', 13),
(52, 'Alur', '680683', 14),
(53, 'Chalakudi', '680307', 14),
(54, 'cheruvallur', '680321', 14),
(55, 'Eravu', '680620', 14),
(56, 'Eravathur', '680734', 14),
(57, 'Elampally B.O', '686503', 15),
(58, 'Erumely S.O', '686509', 15),
(59, 'Gandhi Nagar S.O', '686008', 15),
(60, 'Neelor B.O', '686651', 15),
(61, 'Pala Town S.O', '686575', 15),
(62, 'Areekare', '689505', 16),
(63, 'Aroor', '688534', 16),
(64, 'Haripad', '690514', 16),
(65, 'Kalavoor', '688522', 16),
(66, 'Karikad', '688527', 16),
(67, 'Anikad', '689585', 17),
(68, 'Chittar', '689663', 17),
(69, 'Elanthur', '689643', 17),
(70, 'Gavi', '685533', 17),
(71, 'Kaviyoor', '689182', 17),
(72, 'Karicode', '691005', 18),
(73, 'Eravipuram', '691011', 18),
(74, 'Anchal', '691306', 18),
(75, 'Ayoor', '691533', 18),
(76, 'chirakara', '691578', 18),
(77, 'Anavoor', '695124', 19),
(78, 'Arayur', '695122', 19),
(79, 'Edava', '695311', 19),
(80, 'Karipur', '695541', 19),
(81, 'Kochuvila', '695563', 0),
(82, 'Kovalam', '695527', 19),
(83, 'Alathiyur', '621719', 16),
(84, 'adimali', '', 6),
(85, 'vannapuram', '685607', 6);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_state`
--

CREATE TABLE `tbl_state` (
  `state_id` int(11) NOT NULL,
  `state_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_state`
--

INSERT INTO `tbl_state` (`state_id`, `state_name`) VALUES
(14, 'Kerala'),
(18, 'Tamilnad'),
(19, 'Goa'),
(20, 'Andhra Pradesh'),
(21, 'Arunachal Pradesh'),
(22, 'Assam'),
(23, 'Chattisgarh'),
(24, 'Gujarat'),
(25, 'Haryana'),
(26, 'Himachal Pradesh'),
(27, 'Jharkhand'),
(28, 'Karnataka'),
(29, 'Madhya Pradesh'),
(30, 'Maharashtra'),
(31, 'Manipur'),
(32, 'Meghalaya'),
(33, 'MiZoram'),
(34, 'Nagaland'),
(35, 'Odisha'),
(36, 'Punjab'),
(37, 'Rajasthan'),
(38, 'Sikkim'),
(39, 'Telangana'),
(40, 'Uttar Pradesh'),
(41, 'West Bengal'),
(42, 'Uttarakhand'),
(43, 'Bihar'),
(44, 'Tripura'),
(45, 'Uttar Pradesh');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_time`
--

CREATE TABLE `tbl_time` (
  `time_id` int(11) NOT NULL,
  `time_count` int(11) NOT NULL,
  `lot_id` int(11) NOT NULL,
  `trader_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_trader`
--

CREATE TABLE `tbl_trader` (
  `trader_id` int(11) NOT NULL,
  `trader_name` varchar(50) NOT NULL,
  `trader_contact` varchar(10) NOT NULL,
  `trader_email` varchar(50) NOT NULL,
  `trader_password` varchar(20) NOT NULL,
  `trader_address` varchar(50) NOT NULL,
  `trader_photo` varchar(150) NOT NULL,
  `trader_v_status` varchar(50) NOT NULL DEFAULT '0',
  `trader_doj` varchar(50) NOT NULL,
  `place_id` int(11) NOT NULL,
  `trader_licenseno` varchar(50) NOT NULL,
  `trader_license_date` varchar(50) NOT NULL,
  `trader_rc` varchar(30) NOT NULL,
  `trader_gst` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_trader`
--

INSERT INTO `tbl_trader` (`trader_id`, `trader_name`, `trader_contact`, `trader_email`, `trader_password`, `trader_address`, `trader_photo`, `trader_v_status`, `trader_doj`, `place_id`, `trader_licenseno`, `trader_license_date`, `trader_rc`, `trader_gst`) VALUES
(18, 'Adham', '9870654312', 'adham@gmail.com', '234567', 'Bhargavinilayam', 'Screenshot_2023_0807_191659.jpg', '1', '2023-08-07', 69, '000103', '1998-07-24', '1003', '15'),
(19, 'Anamika', '9876504213', 'anamika@gmail.com', '345678', 'Haven', 'Screenshot_2023_0807_191447.jpg', '2', '2023-08-07', 76, '000105', '2000-10-30', '1005', '20'),
(20, 'diya', '1234567890', 'diya@gmail.com', '123456', 'kavalakkal', 'IMG_20210921_141713.jpg', '1', '2023-09-15', 9, '123456', '2023-09-28', '123', '50%');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_auctionbody`
--
ALTER TABLE `tbl_auctionbody`
  ADD PRIMARY KEY (`auctionbody_id`);

--
-- Indexes for table `tbl_auctionhead`
--
ALTER TABLE `tbl_auctionhead`
  ADD PRIMARY KEY (`auctionhead_id`);

--
-- Indexes for table `tbl_company`
--
ALTER TABLE `tbl_company`
  ADD PRIMARY KEY (`company_id`);

--
-- Indexes for table `tbl_complaint`
--
ALTER TABLE `tbl_complaint`
  ADD PRIMARY KEY (`complaint_id`);

--
-- Indexes for table `tbl_district`
--
ALTER TABLE `tbl_district`
  ADD PRIMARY KEY (`district_id`);

--
-- Indexes for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  ADD PRIMARY KEY (`feedback_id`);

--
-- Indexes for table `tbl_lot`
--
ALTER TABLE `tbl_lot`
  ADD PRIMARY KEY (`lot_id`);

--
-- Indexes for table `tbl_place`
--
ALTER TABLE `tbl_place`
  ADD PRIMARY KEY (`place_id`);

--
-- Indexes for table `tbl_state`
--
ALTER TABLE `tbl_state`
  ADD PRIMARY KEY (`state_id`);

--
-- Indexes for table `tbl_time`
--
ALTER TABLE `tbl_time`
  ADD PRIMARY KEY (`time_id`);

--
-- Indexes for table `tbl_trader`
--
ALTER TABLE `tbl_trader`
  ADD PRIMARY KEY (`trader_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_auctionbody`
--
ALTER TABLE `tbl_auctionbody`
  MODIFY `auctionbody_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4196;

--
-- AUTO_INCREMENT for table `tbl_auctionhead`
--
ALTER TABLE `tbl_auctionhead`
  MODIFY `auctionhead_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `tbl_company`
--
ALTER TABLE `tbl_company`
  MODIFY `company_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_complaint`
--
ALTER TABLE `tbl_complaint`
  MODIFY `complaint_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_district`
--
ALTER TABLE `tbl_district`
  MODIFY `district_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  MODIFY `feedback_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_lot`
--
ALTER TABLE `tbl_lot`
  MODIFY `lot_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tbl_place`
--
ALTER TABLE `tbl_place`
  MODIFY `place_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `tbl_state`
--
ALTER TABLE `tbl_state`
  MODIFY `state_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `tbl_time`
--
ALTER TABLE `tbl_time`
  MODIFY `time_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=839;

--
-- AUTO_INCREMENT for table `tbl_trader`
--
ALTER TABLE `tbl_trader`
  MODIFY `trader_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
