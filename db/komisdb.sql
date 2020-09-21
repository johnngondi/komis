-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 10, 2018 at 07:43 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `komisdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `disease`
--

CREATE TABLE `disease` (
  `diseaseid` varchar(50) NOT NULL,
  `diseasecat` varchar(100) NOT NULL,
  `diseasename` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `disease`
--

INSERT INTO `disease` (`diseaseid`, `diseasecat`, `diseasename`) VALUES
('12345', 'Tropical', 'Malaria'),
('12346', 'Waterborne', 'Cholera'),
('12347', 'Bacterial', 'Syphilis'),
('12348', 'Bacterial', 'Pneumonia'),
('12349', 'Waterborne', 'Diarrhea'),
('57575', 'Tropical', 'Yellow Fever'),
('656565', 'Tropical', 'Tuberculosis');

-- --------------------------------------------------------

--
-- Table structure for table `drug`
--

CREATE TABLE `drug` (
  `drugid` varchar(50) NOT NULL,
  `drugcat` varchar(100) NOT NULL,
  `drugname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `drug`
--

INSERT INTO `drug` (`drugid`, `drugcat`, `drugname`) VALUES
('12345', 'Pain Killer', 'Panadol'),
('12346', 'Antibiotic', 'Piriton'),
('12349', 'pain killer', 'Aspirin'),
('1235', 'pain killer', 'Paracetamol');

-- --------------------------------------------------------

--
-- Table structure for table `examination`
--

CREATE TABLE `examination` (
  `examid` int(100) NOT NULL,
  `examination` longtext NOT NULL,
  `idnumber` int(10) NOT NULL,
  `staffid` varchar(20) NOT NULL,
  `hosid` varchar(20) NOT NULL,
  `day` int(3) NOT NULL,
  `month` int(3) NOT NULL,
  `year` int(5) NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `examination`
--

INSERT INTO `examination` (`examid`, `examination`, `idnumber`, `staffid`, `hosid`, `day`, `month`, `year`, `time`) VALUES
(31, 'lisg ah ulccf hpaq @`??iq```hcjcp= saemr ivx rcixisrc ', 12345678, '31427610', '234566', 5, 6, 2017, '03:42:35'),
(32, 'vieuci ivx ucwdepcu ivx rwssefu uuueufcszcx ctscuuwjc cizwvm ah pwsc ', 1234567, '29734194', '123456', 5, 6, 2017, '04:23:42'),
(33, 'vieuci hcjcp iz vwmrz ', 1234567, '31427610', '234566', 5, 6, 2017, '04:27:48'),
(34, 'hcjcp ivx vieuci ivx rcixisrc``` ', 12345678, '31427610', '234566', 6, 6, 2017, '10:22:36'),
(35, 'liemrwvm iloiyu` `` ', 12345678, '31427610', '234566', 27, 6, 2017, '01:47:27'),
(36, 'jrmbm rmbgm mbgmbgr bmbm^^$^mr^#^$^n$$ ^#^#^ ', 12345678, '31427610', '234566', 26, 5, 2018, '03:25:18'),
(37, 'lisg ah ulccf= saemr= rcixisrc ', 12345678, '31427610', '234566', 19, 7, 2018, '07:49:35'),
(38, 'zrwu ivx zriz ', 12345678, '31427610', '234566', 21, 8, 2018, '09:40:27'),
(39, 'qapc ', 12345678, '31427610', '234566', 21, 8, 2018, '09:41:49'),
(40, 'hh choh ', 12345678, '31427610', '234566', 21, 8, 2018, '09:43:00'),
(41, 'hihih ', 12345678, '31427610', '234566', 21, 8, 2018, '09:58:37'),
(42, 'mxumux hchc ', 12345678, '31427610', '234566', 21, 8, 2018, '09:58:52'),
(43, 'chchc ', 12345678, '31427610', '234566', 21, 8, 2018, '10:25:21'),
(44, 'cpmcmjn ', 29734194, '31427610', '234566', 21, 8, 2018, '10:58:49'),
(45, ':chkh ', 29734194, '31427610', '234566', 21, 8, 2018, '11:00:41'),
(46, 'uxux ', 12345678, '31427610', '234566', 21, 8, 2018, '11:04:12'),
(47, 'mco ', 12345678, '31427610', '234566', 21, 8, 2018, '11:05:27'),
(48, 'hpmpc  ', 29734194, '31427610', '234566', 21, 8, 2018, '11:05:42'),
(49, 'mjxujx ', 12345678, '31427610', '234566', 21, 8, 2018, '06:09:59'),
(50, 'rwmr hcjcp= uzaqisr fiwv= rcixisrc= lauu ah iffczwzc` ', 1234567, '1234567', '234566', 28, 8, 2018, '07:43:51');

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE `hospital` (
  `hosid` varchar(20) NOT NULL,
  `hosname` varchar(100) NOT NULL,
  `hoskey` char(18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`hosid`, `hosname`, `hoskey`) VALUES
('0', '-HQ-', ''),
('12345', 'Meru University Hospital', 'KOMIS-9473-4222-17'),
('123456', 'Agah Khan', 'KOMIS-8489-3659-17'),
('234566', 'Meru Teaching and Refferal Hospital', 'KOMIS-5090-2551-17'),
('MRU', 'Mediwell', 'KOMIS-8966-2252-17');

-- --------------------------------------------------------

--
-- Table structure for table `logfile`
--

CREATE TABLE `logfile` (
  `logid` int(11) NOT NULL,
  `details` mediumtext NOT NULL,
  `user` mediumtext NOT NULL,
  `datetime` datetime NOT NULL,
  `ipaddress` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logfile`
--

INSERT INTO `logfile` (`logid`, `details`, `user`, `datetime`, `ipaddress`) VALUES
(260, 'New Patient Registred to the System Patient Id = 30906937', ' -  - ', '2017-06-06 10:15:35', '127.0.0.1'),
(261, 'Staff Login Activity', '1234567890 - Admin - sudo', '2017-06-06 10:17:08', '127.0.0.1'),
(262, 'Logout Activity', '1234567890 - Admin - sudo', '2017-06-06 10:17:28', '127.0.0.1'),
(263, 'Staff Login Activity', '1234567890 - Admin - sudo', '2017-06-06 10:17:50', '127.0.0.1'),
(264, 'Logout Activity', '1234567890 - Admin - sudo', '2017-06-06 10:20:09', '127.0.0.1'),
(265, 'Staff Login Activity', '31427610 - John Murithi Ngondi - doctor', '2017-06-06 10:20:23', '127.0.0.1'),
(266, 'Treatment History for 12345678 accessed', '31427610 - John Murithi Ngondi - doctor', '2017-06-06 10:20:48', '127.0.0.1'),
(267, 'Patient dignosed Patient Id= 12345678', '31427610 - John Murithi Ngondi - doctor', '2017-06-06 10:22:36', '127.0.0.1'),
(268, 'Disease assigned to Patient PatientId = 12345678 Disease = 12345', '31427610 - John Murithi Ngondi - doctor', '2017-06-06 10:22:54', '127.0.0.1'),
(269, 'Medication activity, Drug Id = 12345, dosage = (1x3) for 10 days Patient = 12345678', '31427610 - John Murithi Ngondi - doctor', '2017-06-06 10:23:17', '127.0.0.1'),
(270, 'Medication activity, Drug Id = 12346, dosage = (2x3) for 10 days Patient = 12345678', '31427610 - John Murithi Ngondi - doctor', '2017-06-06 10:23:24', '127.0.0.1'),
(271, 'Drug assigned to Patient removed PatientId = 12345678 DrugId = 12345', '31427610 - John Murithi Ngondi - doctor', '2017-06-06 10:23:28', '127.0.0.1'),
(272, 'Medication activity, Drug Id = 12346, dosage = (2x3) for 10 days Patient = 12345678', '31427610 - John Murithi Ngondi - doctor', '2017-06-06 10:23:35', '127.0.0.1'),
(273, 'Logout Activity', '31427610 - John Murithi Ngondi - doctor', '2017-06-06 10:26:13', '127.0.0.1'),
(274, 'Staff Login Activity', '1234567890 - Admin - sudo', '2017-06-06 10:27:29', '127.0.0.1'),
(275, 'Disease analysis report generated', '1234567890 - Admin - sudo', '2017-06-06 10:27:38', '127.0.0.1'),
(276, 'Disease analysis report generated', '1234567890 - Admin - sudo', '2017-06-06 10:28:37', '127.0.0.1'),
(277, 'Log File Accessed', '1234567890 - Admin - sudo', '2017-06-06 10:30:53', '127.0.0.1'),
(278, 'Logout Activity', '1234567890 - Admin - sudo', '2017-06-06 10:32:53', '127.0.0.1'),
(279, 'Logout Activity', '12345678 - Jane Doe - patient', '2017-06-07 04:39:12', '127.0.0.1'),
(280, 'Staff Login Activity', '31427610 - John Murithi Ngondi - doctor', '2017-06-07 04:39:34', '127.0.0.1'),
(281, 'Logout Activity', '31427610 - John Murithi Ngondi - doctor', '2017-06-07 04:41:43', '127.0.0.1'),
(282, 'Logout Activity', '12345678 - Jane Doe - patient', '2017-06-18 10:03:33', '127.0.0.1'),
(283, 'Staff Login Activity', '31427610 - John Murithi Ngondi - doctor', '2017-06-27 01:44:33', '127.0.0.1'),
(284, 'Treatment History for 12345678 accessed', '31427610 - John Murithi Ngondi - doctor', '2017-06-27 01:45:41', '127.0.0.1'),
(285, 'Patient dignosed Patient Id= 12345678', '31427610 - John Murithi Ngondi - doctor', '2017-06-27 01:47:27', '127.0.0.1'),
(286, 'Disease assigned to Patient PatientId = 12345678 Disease = 12345', '31427610 - John Murithi Ngondi - doctor', '2017-06-27 01:47:34', '127.0.0.1'),
(287, 'Disease assigned to Patient removed PatientId = 12345678 Disease = 12345', '31427610 - John Murithi Ngondi - doctor', '2017-06-27 01:47:39', '127.0.0.1'),
(288, 'Disease assigned to Patient PatientId = 12345678 Disease = 12346', '31427610 - John Murithi Ngondi - doctor', '2017-06-27 01:47:47', '127.0.0.1'),
(289, 'Disease assigned to Patient PatientId = 12345678 Disease = 12345', '31427610 - John Murithi Ngondi - doctor', '2017-06-27 01:47:53', '127.0.0.1'),
(290, 'Disease assigned to Patient removed PatientId = 12345678 Disease = 12346', '31427610 - John Murithi Ngondi - doctor', '2017-06-27 01:47:58', '127.0.0.1'),
(291, 'Medication activity, Drug Id = 12345, dosage = (2x3) for 3 days Patient = 12345678', '31427610 - John Murithi Ngondi - doctor', '2017-06-27 01:48:29', '127.0.0.1'),
(292, 'Treatment History for 12345678 accessed', '31427610 - John Murithi Ngondi - doctor', '2017-06-27 01:48:55', '127.0.0.1'),
(293, 'Logout Activity', '31427610 - John Murithi Ngondi - doctor', '2017-06-27 01:49:51', '127.0.0.1'),
(294, 'Staff Login Activity', '31427610 - John Murithi Ngondi - doctor', '2018-05-26 03:18:47', '127.0.0.1'),
(295, 'Treatment History for 12345678 accessed', '31427610 - John Murithi Ngondi - doctor', '2018-05-26 03:24:53', '127.0.0.1'),
(296, 'Patient dignosed Patient Id= 12345678', '31427610 - John Murithi Ngondi - doctor', '2018-05-26 03:25:18', '127.0.0.1'),
(297, 'Disease assigned to Patient PatientId = 12345678 Disease = 12346', '31427610 - John Murithi Ngondi - doctor', '2018-05-26 03:25:27', '127.0.0.1'),
(298, 'Medication activity, Drug Id = 12345, dosage = (2x3) Patient = 12345678', '31427610 - John Murithi Ngondi - doctor', '2018-05-26 03:25:49', '127.0.0.1'),
(299, 'Treatment History for 12345678 accessed', '31427610 - John Murithi Ngondi - doctor', '2018-05-26 03:26:00', '127.0.0.1'),
(300, 'Logout Activity', '12345678 - Jane Doe - patient', '2018-07-19 07:15:26', '127.0.0.1'),
(301, 'Staff Login Activity', '12345678 - Admin - sudo', '2018-07-19 07:17:03', '127.0.0.1'),
(302, 'Log File Accessed', '12345678 - Admin - sudo', '2018-07-19 07:17:18', '127.0.0.1'),
(303, 'New Patient Registred to the System Patient Id = 29734194', ' -  - ', '2018-07-19 07:26:31', '127.0.0.1'),
(304, 'Logout Activity', '29734194 - Njeri William - patient', '2018-07-19 07:29:54', '127.0.0.1'),
(305, 'Staff Login Activity', '12345678 - Admin - sudo', '2018-07-19 07:30:09', '127.0.0.1'),
(306, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-07-19 07:30:18', '127.0.0.1'),
(307, 'Logout Activity', '12345678 - Admin - sudo', '2018-07-19 07:30:54', '127.0.0.1'),
(308, 'Staff Login Activity', '12345678 - Admin - sudo', '2018-07-19 07:38:14', '127.0.0.1'),
(309, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-07-19 07:39:10', '127.0.0.1'),
(310, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-07-19 07:39:38', '127.0.0.1'),
(311, 'Drug analysis report generated', '12345678 - Admin - sudo', '2018-07-19 07:41:03', '127.0.0.1'),
(312, 'Log File Accessed', '12345678 - Admin - sudo', '2018-07-19 07:41:32', '127.0.0.1'),
(313, 'Logout Activity', '12345678 - Admin - sudo', '2018-07-19 07:42:10', '127.0.0.1'),
(314, 'Staff Login Activity', '31427610 - John Murithi Ngondi - doctor', '2018-07-19 07:43:24', '127.0.0.1'),
(315, 'Treatment History for 29734194 accessed', '31427610 - John Murithi Ngondi - doctor', '2018-07-19 07:44:24', '127.0.0.1'),
(316, 'Logout Activity', '31427610 - John Murithi Ngondi - doctor', '2018-07-19 07:45:58', '127.0.0.1'),
(317, 'Staff Login Activity', '31427610 - John Murithi Ngondi - doctor', '2018-07-19 07:46:55', '127.0.0.1'),
(318, 'Treatment History for 12345678 accessed', '31427610 - John Murithi Ngondi - doctor', '2018-07-19 07:47:35', '127.0.0.1'),
(319, 'Treatment History for 12345678 accessed', '31427610 - John Murithi Ngondi - doctor', '2018-07-19 07:48:50', '127.0.0.1'),
(320, 'Patient dignosed Patient Id= 12345678', '31427610 - John Murithi Ngondi - doctor', '2018-07-19 07:49:35', '127.0.0.1'),
(321, 'Disease assigned to Patient PatientId = 12345678 Disease = 12346', '31427610 - John Murithi Ngondi - doctor', '2018-07-19 07:49:50', '127.0.0.1'),
(322, 'Medication activity, Drug Id = 12345, dosage = (2x3) for 5 days Patient = 12345678', '31427610 - John Murithi Ngondi - doctor', '2018-07-19 07:51:14', '127.0.0.1'),
(323, 'Logout Activity', '31427610 - John Murithi Ngondi - doctor', '2018-07-19 07:52:10', '127.0.0.1'),
(324, 'Logout Activity', '12345678 - Jane Doe - patient', '2018-07-19 07:53:31', '127.0.0.1'),
(325, 'Logout Activity', ' -  - ', '2018-07-19 07:54:03', '127.0.0.1'),
(326, 'Staff Login Activity', '29734194 - William Waweru - pharmacist', '2018-07-19 07:54:18', '127.0.0.1'),
(327, 'Drug dispensed Drug id = 12345 to Patient Id = 12345678', '29734194 - William Waweru - pharmacist', '2018-07-19 07:55:07', '127.0.0.1'),
(328, 'Logout Activity', '29734194 - William Waweru - pharmacist', '2018-07-19 07:55:57', '127.0.0.1'),
(329, 'Staff Login Activity', '12345678 - Admin - sudo', '2018-08-21 08:18:27', '127.0.0.1'),
(330, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 08:18:32', '127.0.0.1'),
(331, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 08:22:28', '127.0.0.1'),
(332, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 08:23:06', '127.0.0.1'),
(333, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 08:25:34', '127.0.0.1'),
(334, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 08:26:28', '127.0.0.1'),
(335, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 08:27:35', '127.0.0.1'),
(336, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 08:32:10', '127.0.0.1'),
(337, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 08:32:19', '127.0.0.1'),
(338, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 08:32:39', '127.0.0.1'),
(339, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 08:33:07', '127.0.0.1'),
(340, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 08:35:04', '127.0.0.1'),
(341, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 08:35:14', '127.0.0.1'),
(342, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 08:35:32', '127.0.0.1'),
(343, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 08:35:44', '127.0.0.1'),
(344, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 08:36:04', '127.0.0.1'),
(345, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 08:36:13', '127.0.0.1'),
(346, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 08:36:25', '127.0.0.1'),
(347, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 08:36:53', '127.0.0.1'),
(348, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 08:37:01', '127.0.0.1'),
(349, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 08:37:29', '127.0.0.1'),
(350, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 08:37:43', '127.0.0.1'),
(351, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 08:38:06', '127.0.0.1'),
(352, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 08:38:21', '127.0.0.1'),
(353, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 08:38:40', '127.0.0.1'),
(354, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 08:39:15', '127.0.0.1'),
(355, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 08:39:30', '127.0.0.1'),
(356, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 08:39:47', '127.0.0.1'),
(357, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 08:40:01', '127.0.0.1'),
(358, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 08:40:13', '127.0.0.1'),
(359, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 08:40:23', '127.0.0.1'),
(360, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 08:41:05', '127.0.0.1'),
(361, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 08:41:18', '127.0.0.1'),
(362, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 08:41:31', '127.0.0.1'),
(363, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 08:46:24', '127.0.0.1'),
(364, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 08:46:45', '127.0.0.1'),
(365, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 08:47:03', '127.0.0.1'),
(366, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 08:47:11', '127.0.0.1'),
(367, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 08:47:46', '127.0.0.1'),
(368, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 08:48:23', '127.0.0.1'),
(369, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 08:49:01', '127.0.0.1'),
(370, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 08:49:23', '127.0.0.1'),
(371, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 08:49:39', '127.0.0.1'),
(372, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 08:49:54', '127.0.0.1'),
(373, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 08:50:23', '127.0.0.1'),
(374, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 08:50:23', '127.0.0.1'),
(375, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 08:50:24', '127.0.0.1'),
(376, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 08:50:24', '127.0.0.1'),
(377, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 08:50:24', '127.0.0.1'),
(378, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 08:50:46', '127.0.0.1'),
(379, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 08:50:57', '127.0.0.1'),
(380, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 08:51:07', '127.0.0.1'),
(381, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 08:51:23', '127.0.0.1'),
(382, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 08:51:42', '127.0.0.1'),
(383, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 08:52:02', '127.0.0.1'),
(384, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 08:52:26', '127.0.0.1'),
(385, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 08:52:27', '127.0.0.1'),
(386, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 08:52:27', '127.0.0.1'),
(387, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 08:52:27', '127.0.0.1'),
(388, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 08:52:28', '127.0.0.1'),
(389, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 08:55:01', '127.0.0.1'),
(390, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 08:55:40', '127.0.0.1'),
(391, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 08:55:41', '127.0.0.1'),
(392, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 08:55:41', '127.0.0.1'),
(393, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 08:56:04', '127.0.0.1'),
(394, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 08:56:17', '127.0.0.1'),
(395, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 08:56:38', '127.0.0.1'),
(396, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 08:56:59', '127.0.0.1'),
(397, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 08:57:00', '127.0.0.1'),
(398, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 08:57:00', '127.0.0.1'),
(399, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 08:57:13', '127.0.0.1'),
(400, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 08:57:13', '127.0.0.1'),
(401, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 08:57:14', '127.0.0.1'),
(402, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 08:57:21', '127.0.0.1'),
(403, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 08:57:21', '127.0.0.1'),
(404, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 08:57:36', '127.0.0.1'),
(405, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 08:57:52', '127.0.0.1'),
(406, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 08:57:53', '127.0.0.1'),
(407, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 08:58:03', '127.0.0.1'),
(408, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 08:58:04', '127.0.0.1'),
(409, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 08:58:04', '127.0.0.1'),
(410, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 08:58:13', '127.0.0.1'),
(411, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 08:58:21', '127.0.0.1'),
(412, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 08:58:21', '127.0.0.1'),
(413, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 08:58:21', '127.0.0.1'),
(414, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 08:58:33', '127.0.0.1'),
(415, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 08:58:34', '127.0.0.1'),
(416, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 08:58:34', '127.0.0.1'),
(417, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 08:58:34', '127.0.0.1'),
(418, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 08:58:34', '127.0.0.1'),
(419, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 08:58:47', '127.0.0.1'),
(420, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 08:58:58', '127.0.0.1'),
(421, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 08:59:09', '127.0.0.1'),
(422, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 08:59:19', '127.0.0.1'),
(423, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 08:59:28', '127.0.0.1'),
(424, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 08:59:28', '127.0.0.1'),
(425, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 08:59:40', '127.0.0.1'),
(426, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 08:59:50', '127.0.0.1'),
(427, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 08:59:51', '127.0.0.1'),
(428, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 09:00:00', '127.0.0.1'),
(429, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 09:02:08', '127.0.0.1'),
(430, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 09:02:18', '127.0.0.1'),
(431, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 09:02:31', '127.0.0.1'),
(432, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 09:02:58', '127.0.0.1'),
(433, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 09:03:12', '127.0.0.1'),
(434, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 09:03:34', '127.0.0.1'),
(435, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 09:03:47', '127.0.0.1'),
(436, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 09:03:47', '127.0.0.1'),
(437, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 09:03:48', '127.0.0.1'),
(438, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 09:03:48', '127.0.0.1'),
(439, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 09:04:27', '127.0.0.1'),
(440, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 09:04:46', '127.0.0.1'),
(441, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 09:05:11', '127.0.0.1'),
(442, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 09:05:42', '127.0.0.1'),
(443, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 09:06:01', '127.0.0.1'),
(444, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 09:06:39', '127.0.0.1'),
(445, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 09:07:04', '127.0.0.1'),
(446, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 09:08:15', '127.0.0.1'),
(447, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 09:08:57', '127.0.0.1'),
(448, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 09:10:23', '127.0.0.1'),
(449, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 09:10:24', '127.0.0.1'),
(450, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 09:10:24', '127.0.0.1'),
(451, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 09:10:24', '127.0.0.1'),
(452, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 09:13:00', '127.0.0.1'),
(453, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 09:13:09', '127.0.0.1'),
(454, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 09:13:09', '127.0.0.1'),
(455, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 09:13:09', '127.0.0.1'),
(456, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 09:13:10', '127.0.0.1'),
(457, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 09:14:51', '127.0.0.1'),
(458, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 09:15:08', '127.0.0.1'),
(459, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 09:15:57', '127.0.0.1'),
(460, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 09:15:58', '127.0.0.1'),
(461, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 09:16:09', '127.0.0.1'),
(462, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 09:17:01', '127.0.0.1'),
(463, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 09:17:03', '127.0.0.1'),
(464, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 09:17:03', '127.0.0.1'),
(465, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 09:17:04', '127.0.0.1'),
(466, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 09:17:04', '127.0.0.1'),
(467, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 09:17:18', '127.0.0.1'),
(468, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 09:18:17', '127.0.0.1'),
(469, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 09:19:15', '127.0.0.1'),
(470, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 09:20:16', '127.0.0.1'),
(471, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 09:20:17', '127.0.0.1'),
(472, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 09:20:17', '127.0.0.1'),
(473, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 09:20:38', '127.0.0.1'),
(474, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 09:22:30', '127.0.0.1'),
(475, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 09:26:40', '127.0.0.1'),
(476, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 09:27:24', '127.0.0.1'),
(477, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 09:27:50', '127.0.0.1'),
(478, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 09:28:41', '127.0.0.1'),
(479, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 09:30:45', '127.0.0.1'),
(480, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 09:30:55', '127.0.0.1'),
(481, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 09:31:21', '127.0.0.1'),
(482, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 09:31:40', '127.0.0.1'),
(483, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 09:32:00', '127.0.0.1'),
(484, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 09:32:04', '127.0.0.1'),
(485, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 09:32:07', '127.0.0.1'),
(486, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 09:32:39', '127.0.0.1'),
(487, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 09:34:24', '127.0.0.1'),
(488, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 09:34:40', '127.0.0.1'),
(489, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 09:35:03', '127.0.0.1'),
(490, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 09:35:13', '127.0.0.1'),
(491, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 09:35:23', '127.0.0.1'),
(492, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 09:35:38', '127.0.0.1'),
(493, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 09:36:57', '127.0.0.1'),
(494, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 09:37:13', '127.0.0.1'),
(495, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 09:37:25', '127.0.0.1'),
(496, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 09:37:44', '127.0.0.1'),
(497, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 09:37:47', '127.0.0.1'),
(498, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 09:37:53', '127.0.0.1'),
(499, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 09:38:14', '127.0.0.1'),
(500, 'A New Disease registered to System Disease ID = 656565', '12345678 - Admin - sudo', '2018-08-21 09:39:15', '127.0.0.1'),
(501, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 09:39:19', '127.0.0.1'),
(502, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 09:39:28', '127.0.0.1'),
(503, 'Logout Activity', '12345678 - Admin - sudo', '2018-08-21 09:39:38', '127.0.0.1'),
(504, 'Staff Login Activity', '31427610 - John Murithi Ngondi - doctor', '2018-08-21 09:40:09', '127.0.0.1'),
(505, 'Patient dignosed Patient Id= 12345678', '31427610 - John Murithi Ngondi - doctor', '2018-08-21 09:40:27', '127.0.0.1'),
(506, 'Disease assigned to Patient PatientId = 12345678 Disease = 656565', '31427610 - John Murithi Ngondi - doctor', '2018-08-21 09:40:30', '127.0.0.1'),
(507, 'Disease assigned to Patient PatientId = 12345678 Disease = 12346', '31427610 - John Murithi Ngondi - doctor', '2018-08-21 09:40:35', '127.0.0.1'),
(508, 'Medication activity, Drug Id = 12346, dosage = (2x3) for 5 days Patient = 12345678', '31427610 - John Murithi Ngondi - doctor', '2018-08-21 09:40:58', '127.0.0.1'),
(509, 'Logout Activity', '31427610 - John Murithi Ngondi - doctor', '2018-08-21 09:41:02', '127.0.0.1'),
(510, 'Staff Login Activity', '12345678 - Admin - sudo', '2018-08-21 09:41:14', '127.0.0.1'),
(511, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 09:41:17', '127.0.0.1'),
(512, 'Logout Activity', '12345678 - Admin - sudo', '2018-08-21 09:41:30', '127.0.0.1'),
(513, 'Staff Login Activity', '31427610 - John Murithi Ngondi - doctor', '2018-08-21 09:41:38', '127.0.0.1'),
(514, 'Patient dignosed Patient Id= 12345678', '31427610 - John Murithi Ngondi - doctor', '2018-08-21 09:41:49', '127.0.0.1'),
(515, 'Disease assigned to Patient PatientId = 12345678 Disease = 12345', '31427610 - John Murithi Ngondi - doctor', '2018-08-21 09:41:53', '127.0.0.1'),
(516, 'Medication activity, Drug Id = 12345, dosage = (2x3) for 5 days Patient = 12345678', '31427610 - John Murithi Ngondi - doctor', '2018-08-21 09:42:00', '127.0.0.1'),
(517, 'Logout Activity', '31427610 - John Murithi Ngondi - doctor', '2018-08-21 09:42:14', '127.0.0.1'),
(518, 'Staff Login Activity', '12345678 - Admin - sudo', '2018-08-21 09:42:23', '127.0.0.1'),
(519, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 09:42:26', '127.0.0.1'),
(520, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 09:42:36', '127.0.0.1'),
(521, 'Logout Activity', '12345678 - Admin - sudo', '2018-08-21 09:42:39', '127.0.0.1'),
(522, 'Staff Login Activity', '31427610 - John Murithi Ngondi - doctor', '2018-08-21 09:42:49', '127.0.0.1'),
(523, 'Patient dignosed Patient Id= 12345678', '31427610 - John Murithi Ngondi - doctor', '2018-08-21 09:43:00', '127.0.0.1'),
(524, 'Disease assigned to Patient PatientId = 12345678 Disease = 12345', '31427610 - John Murithi Ngondi - doctor', '2018-08-21 09:43:06', '127.0.0.1'),
(525, 'Medication activity, Drug Id = 12345, dosage = (2x3) for 5 days Patient = 12345678', '31427610 - John Murithi Ngondi - doctor', '2018-08-21 09:43:10', '127.0.0.1'),
(526, 'Logout Activity', '31427610 - John Murithi Ngondi - doctor', '2018-08-21 09:43:26', '127.0.0.1'),
(527, 'Staff Login Activity', '12345678 - Admin - sudo', '2018-08-21 09:43:35', '127.0.0.1'),
(528, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 09:43:39', '127.0.0.1'),
(529, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 09:44:10', '127.0.0.1'),
(530, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 09:45:00', '127.0.0.1'),
(531, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 09:51:14', '127.0.0.1'),
(532, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 09:56:24', '127.0.0.1'),
(533, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 09:56:52', '127.0.0.1'),
(534, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 09:57:04', '127.0.0.1'),
(535, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 09:58:09', '127.0.0.1'),
(536, 'Logout Activity', '12345678 - Admin - sudo', '2018-08-21 09:58:13', '127.0.0.1'),
(537, 'Staff Login Activity', '31427610 - John Murithi Ngondi - doctor', '2018-08-21 09:58:24', '127.0.0.1'),
(538, 'Patient dignosed Patient Id= 12345678', '31427610 - John Murithi Ngondi - doctor', '2018-08-21 09:58:37', '127.0.0.1'),
(539, 'Patient dignosed Patient Id= 12345678', '31427610 - John Murithi Ngondi - doctor', '2018-08-21 09:58:52', '127.0.0.1'),
(540, 'Disease assigned to Patient PatientId = 12345678 Disease = 12346', '31427610 - John Murithi Ngondi - doctor', '2018-08-21 09:58:54', '127.0.0.1'),
(541, 'Disease assigned to Patient removed PatientId = 12345678 Disease = 12346', '31427610 - John Murithi Ngondi - doctor', '2018-08-21 09:59:13', '127.0.0.1'),
(542, 'Disease assigned to Patient PatientId = 12345678 Disease = 12346', '31427610 - John Murithi Ngondi - doctor', '2018-08-21 09:59:15', '127.0.0.1'),
(543, 'Disease assigned to Patient PatientId = 12345678 Disease = 12345', '31427610 - John Murithi Ngondi - doctor', '2018-08-21 09:59:20', '127.0.0.1'),
(544, 'Medication activity, Drug Id = 12346, dosage = (2x3) for 5 days Patient = 12345678', '31427610 - John Murithi Ngondi - doctor', '2018-08-21 09:59:28', '127.0.0.1'),
(545, 'Medication activity, Drug Id = 12345, dosage = (2x3) for 5 days Patient = 12345678', '31427610 - John Murithi Ngondi - doctor', '2018-08-21 10:09:48', '127.0.0.1'),
(546, 'Patient dignosed Patient Id= 12345678', '31427610 - John Murithi Ngondi - doctor', '2018-08-21 10:25:21', '127.0.0.1'),
(547, 'Disease assigned to Patient PatientId = 12345678 Disease = 656565', '31427610 - John Murithi Ngondi - doctor', '2018-08-21 10:25:24', '127.0.0.1'),
(548, 'Medication activity, Drug Id = 12346, dosage = (2x3) for 5 days Patient = 12345678', '31427610 - John Murithi Ngondi - doctor', '2018-08-21 10:25:30', '127.0.0.1'),
(549, 'Logout Activity', '31427610 - John Murithi Ngondi - doctor', '2018-08-21 10:31:50', '127.0.0.1'),
(550, 'Logout Activity', '12345678 - Jane Doe - patient', '2018-08-21 10:56:40', '127.0.0.1'),
(551, 'Logout Activity', '29734194 - Njeri William - patient', '2018-08-21 10:58:08', '127.0.0.1'),
(552, 'Staff Login Activity', '12345678 - Admin - sudo', '2018-08-21 10:58:15', '127.0.0.1'),
(553, 'Logout Activity', '12345678 - Admin - sudo', '2018-08-21 10:58:18', '127.0.0.1'),
(554, 'Staff Login Activity', '31427610 - John Murithi Ngondi - doctor', '2018-08-21 10:58:40', '127.0.0.1'),
(555, 'Patient dignosed Patient Id= 29734194', '31427610 - John Murithi Ngondi - doctor', '2018-08-21 10:58:49', '127.0.0.1'),
(556, 'Disease assigned to Patient PatientId = 29734194 Disease = 12346', '31427610 - John Murithi Ngondi - doctor', '2018-08-21 10:58:51', '127.0.0.1'),
(557, 'Medication activity, Drug Id = 12345, dosage = (2x3) for 5 days Patient = 29734194', '31427610 - John Murithi Ngondi - doctor', '2018-08-21 10:58:56', '127.0.0.1'),
(558, 'Logout Activity', '31427610 - John Murithi Ngondi - doctor', '2018-08-21 10:59:21', '127.0.0.1'),
(559, 'Logout Activity', '29734194 - Njeri William - patient', '2018-08-21 11:00:26', '127.0.0.1'),
(560, 'Staff Login Activity', '31427610 - John Murithi Ngondi - doctor', '2018-08-21 11:00:33', '127.0.0.1'),
(561, 'Patient dignosed Patient Id= 29734194', '31427610 - John Murithi Ngondi - doctor', '2018-08-21 11:00:41', '127.0.0.1'),
(562, 'Disease assigned to Patient PatientId = 29734194 Disease = 12345', '31427610 - John Murithi Ngondi - doctor', '2018-08-21 11:00:45', '127.0.0.1'),
(563, 'Medication activity, Drug Id = 12345, dosage = (2x3) for 5 days Patient = 29734194', '31427610 - John Murithi Ngondi - doctor', '2018-08-21 11:00:50', '127.0.0.1'),
(564, 'Logout Activity', '31427610 - John Murithi Ngondi - doctor', '2018-08-21 11:00:55', '127.0.0.1'),
(565, 'Logout Activity', '29734194 - Njeri William - patient', '2018-08-21 11:01:12', '127.0.0.1'),
(566, 'Staff Login Activity', '12345678 - Admin - sudo', '2018-08-21 11:01:19', '127.0.0.1'),
(567, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 11:01:25', '127.0.0.1'),
(568, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 11:02:37', '127.0.0.1'),
(569, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 11:03:04', '127.0.0.1'),
(570, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 11:03:04', '127.0.0.1'),
(571, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 11:03:05', '127.0.0.1'),
(572, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 11:03:05', '127.0.0.1'),
(573, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 11:03:15', '127.0.0.1'),
(574, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 11:03:17', '127.0.0.1'),
(575, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 11:03:29', '127.0.0.1'),
(576, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 11:03:30', '127.0.0.1'),
(577, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 11:03:45', '127.0.0.1'),
(578, 'Logout Activity', '12345678 - Admin - sudo', '2018-08-21 11:03:56', '127.0.0.1'),
(579, 'Staff Login Activity', '31427610 - John Murithi Ngondi - doctor', '2018-08-21 11:04:05', '127.0.0.1'),
(580, 'Patient dignosed Patient Id= 12345678', '31427610 - John Murithi Ngondi - doctor', '2018-08-21 11:04:12', '127.0.0.1'),
(581, 'Disease assigned to Patient PatientId = 12345678 Disease = 12345', '31427610 - John Murithi Ngondi - doctor', '2018-08-21 11:04:15', '127.0.0.1'),
(582, 'Medication activity, Drug Id = 12345, dosage = (2x3) for 5 days Patient = 12345678', '31427610 - John Murithi Ngondi - doctor', '2018-08-21 11:04:18', '127.0.0.1'),
(583, 'Logout Activity', '31427610 - John Murithi Ngondi - doctor', '2018-08-21 11:04:26', '127.0.0.1'),
(584, 'Staff Login Activity', '12345678 - Admin - sudo', '2018-08-21 11:04:33', '127.0.0.1'),
(585, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 11:04:35', '127.0.0.1'),
(586, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 11:05:00', '127.0.0.1'),
(587, 'Logout Activity', '12345678 - Admin - sudo', '2018-08-21 11:05:13', '127.0.0.1'),
(588, 'Staff Login Activity', '31427610 - John Murithi Ngondi - doctor', '2018-08-21 11:05:20', '127.0.0.1'),
(589, 'Patient dignosed Patient Id= 12345678', '31427610 - John Murithi Ngondi - doctor', '2018-08-21 11:05:27', '127.0.0.1'),
(590, 'Disease assigned to Patient PatientId = 12345678 Disease = 12346', '31427610 - John Murithi Ngondi - doctor', '2018-08-21 11:05:28', '127.0.0.1'),
(591, 'Medication activity, Drug Id = 12345, dosage = (2x3) for 5 days Patient = 12345678', '31427610 - John Murithi Ngondi - doctor', '2018-08-21 11:05:34', '127.0.0.1'),
(592, 'Patient dignosed Patient Id= 29734194', '31427610 - John Murithi Ngondi - doctor', '2018-08-21 11:05:42', '127.0.0.1'),
(593, 'Disease assigned to Patient PatientId = 29734194 Disease = 12346', '31427610 - John Murithi Ngondi - doctor', '2018-08-21 11:05:44', '127.0.0.1'),
(594, 'Disease assigned to Patient PatientId = 29734194 Disease = 12346', '31427610 - John Murithi Ngondi - doctor', '2018-08-21 11:05:45', '127.0.0.1'),
(595, 'Medication activity, Drug Id = 12346, dosage = (2x3) for 5 days Patient = 29734194', '31427610 - John Murithi Ngondi - doctor', '2018-08-21 11:05:50', '127.0.0.1'),
(596, 'Logout Activity', '31427610 - John Murithi Ngondi - doctor', '2018-08-21 11:05:53', '127.0.0.1'),
(597, 'Staff Login Activity', '12345678 - Admin - sudo', '2018-08-21 11:06:05', '127.0.0.1'),
(598, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 11:06:13', '127.0.0.1'),
(599, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 11:07:32', '127.0.0.1'),
(600, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 11:07:33', '127.0.0.1'),
(601, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 11:07:33', '127.0.0.1'),
(602, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 11:07:33', '127.0.0.1'),
(603, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 11:07:34', '127.0.0.1'),
(604, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 11:07:52', '127.0.0.1'),
(605, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 11:09:00', '127.0.0.1'),
(606, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 11:09:24', '127.0.0.1'),
(607, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 11:09:37', '127.0.0.1'),
(608, 'Logout Activity', '12345678 - Admin - sudo', '2018-08-21 12:08:52', '127.0.0.1'),
(609, 'Staff Login Activity', '12345678 - Admin - sudo', '2018-08-21 06:06:27', '127.0.0.1'),
(610, 'Staff Login Activity', '12345678 - Admin - sudo', '2018-08-21 06:07:14', '127.0.0.1'),
(611, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 06:07:20', '127.0.0.1'),
(612, 'A New Disease registered to System Disease ID = 57575', '12345678 - Admin - sudo', '2018-08-21 06:09:25', '127.0.0.1'),
(613, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 06:09:29', '127.0.0.1'),
(614, 'Logout Activity', '12345678 - Admin - sudo', '2018-08-21 06:09:39', '127.0.0.1'),
(615, 'Staff Login Activity', '31427610 - John Murithi Ngondi - doctor', '2018-08-21 06:09:50', '127.0.0.1'),
(616, 'Patient dignosed Patient Id= 12345678', '31427610 - John Murithi Ngondi - doctor', '2018-08-21 06:09:59', '127.0.0.1'),
(617, 'Disease assigned to Patient PatientId = 12345678 Disease = 57575', '31427610 - John Murithi Ngondi - doctor', '2018-08-21 06:10:02', '127.0.0.1'),
(618, 'Medication activity, Drug Id = 12345, dosage = (2x3) for 5 days Patient = 12345678', '31427610 - John Murithi Ngondi - doctor', '2018-08-21 06:10:05', '127.0.0.1'),
(619, 'Logout Activity', '31427610 - John Murithi Ngondi - doctor', '2018-08-21 06:10:12', '127.0.0.1'),
(620, 'Staff Login Activity', '12345678 - Admin - sudo', '2018-08-21 06:10:21', '127.0.0.1'),
(621, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-21 06:10:25', '127.0.0.1'),
(622, 'Logout Activity', ' -  - ', '2018-08-21 06:12:16', '127.0.0.1'),
(623, 'Staff Login Activity', '12345678 - Admin - sudo', '2018-08-24 08:00:03', '127.0.0.1'),
(624, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-24 08:00:06', '127.0.0.1'),
(625, 'Logout Activity', ' -  - ', '2018-08-24 09:41:28', '127.0.0.1'),
(626, 'Staff Login Activity', '12345678 - Admin - sudo', '2018-08-25 10:48:31', '127.0.0.1'),
(627, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-25 10:48:33', '127.0.0.1'),
(628, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-25 10:49:06', '127.0.0.1'),
(629, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-25 10:49:11', '127.0.0.1'),
(630, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-25 10:49:16', '127.0.0.1'),
(631, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-25 10:49:20', '127.0.0.1'),
(632, 'Staff Login Activity', '12345678 - Admin - sudo', '2018-08-27 04:55:40', '127.0.0.1'),
(633, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-27 04:55:43', '127.0.0.1'),
(634, 'Logout Activity', '12345678 - Admin - sudo', '2018-08-27 07:03:35', '127.0.0.1'),
(635, 'Staff Login Activity', '29734194 - William Waweru - pharmacist', '2018-08-27 07:07:01', '127.0.0.1'),
(636, 'Logout Activity', '29734194 - William Waweru - pharmacist', '2018-08-27 07:20:18', '127.0.0.1'),
(637, 'Staff Login Activity', '12345678 - Admin - sudo', '2018-08-27 07:20:45', '127.0.0.1'),
(638, 'Log File Accessed', '12345678 - Admin - sudo', '2018-08-27 07:21:45', '127.0.0.1'),
(639, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-27 07:28:54', '127.0.0.1'),
(640, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-27 07:29:01', '127.0.0.1'),
(641, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-27 07:29:21', '127.0.0.1'),
(642, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-27 07:29:35', '127.0.0.1'),
(643, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-27 07:29:43', '127.0.0.1'),
(644, 'Staff Login Activity', '12345678 - Admin - sudo', '2018-08-28 07:03:28', '127.0.0.1'),
(645, 'A New Disease registered to System Disease ID = 12347', '12345678 - Admin - sudo', '2018-08-28 07:11:59', '127.0.0.1'),
(646, 'A New Disease registered to System Disease ID = 12348', '12345678 - Admin - sudo', '2018-08-28 07:12:54', '127.0.0.1'),
(647, 'New Drug Added to System Drug ID = 12349', '12345678 - Admin - sudo', '2018-08-28 07:27:03', '127.0.0.1'),
(648, 'New Drug Added to System Drug ID = 1235', '12345678 - Admin - sudo', '2018-08-28 07:30:11', '127.0.0.1'),
(649, 'A New Disease registered to System Disease ID = 12349', '12345678 - Admin - sudo', '2018-08-28 07:31:34', '127.0.0.1'),
(650, 'Logout Activity', '12345678 - Admin - sudo', '2018-08-28 07:38:03', '127.0.0.1'),
(651, 'Logout Activity', '1234567 - Jere Doe - patient', '2018-08-28 07:38:40', '127.0.0.1'),
(652, 'Staff Login Activity', '29734194 - William Waweru - pharmacist', '2018-08-28 07:38:55', '127.0.0.1'),
(653, 'Logout Activity', '29734194 - William Waweru - pharmacist', '2018-08-28 07:39:26', '127.0.0.1'),
(654, 'Logout Activity', ' -  - ', '2018-08-28 07:42:06', '127.0.0.1'),
(655, 'Staff Login Activity', '1234567 - John Murithi Ngondi - doctor', '2018-08-28 07:42:29', '127.0.0.1'),
(656, 'Patient dignosed Patient Id= 1234567', '1234567 - John Murithi Ngondi - doctor', '2018-08-28 07:43:51', '127.0.0.1'),
(657, 'Disease assigned to Patient PatientId = 1234567 Disease = 12348', '1234567 - John Murithi Ngondi - doctor', '2018-08-28 07:43:59', '127.0.0.1'),
(658, 'Medication activity, Drug Id = 12349, dosage = (2x3) for 5 days Patient = 1234567', '1234567 - John Murithi Ngondi - doctor', '2018-08-28 07:44:15', '127.0.0.1'),
(659, 'Medication activity, Drug Id = 1235, dosage = (1x3) for 5days Patient = 1234567', '1234567 - John Murithi Ngondi - doctor', '2018-08-28 07:44:35', '127.0.0.1'),
(660, 'Medication activity, Drug Id = 12346, dosage = (2x3) for 3days Patient = 1234567', '1234567 - John Murithi Ngondi - doctor', '2018-08-28 07:44:47', '127.0.0.1'),
(661, 'Logout Activity', '1234567 - John Murithi Ngondi - doctor', '2018-08-28 07:46:36', '127.0.0.1'),
(662, 'Staff Login Activity', '29734194 - William Waweru - pharmacist', '2018-08-28 07:46:51', '127.0.0.1'),
(663, 'Drug dispensed Drug id = 1235 to Patient Id = 1234567', '29734194 - William Waweru - pharmacist', '2018-08-28 07:47:17', '127.0.0.1'),
(664, 'Drug dispensed Drug id = 12346 to Patient Id = 1234567', '29734194 - William Waweru - pharmacist', '2018-08-28 07:47:24', '127.0.0.1'),
(665, 'Drug dispensed Drug id = 12349 to Patient Id = 1234567', '29734194 - William Waweru - pharmacist', '2018-08-28 07:47:28', '127.0.0.1'),
(666, 'Logout Activity', '29734194 - William Waweru - pharmacist', '2018-08-28 07:47:34', '127.0.0.1'),
(667, 'Logout Activity', '1234567 - Jere Doe - patient', '2018-08-28 07:47:59', '127.0.0.1'),
(668, 'Staff Login Activity', '12345678 - Admin - sudo', '2018-08-28 07:48:09', '127.0.0.1'),
(669, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-28 07:48:15', '127.0.0.1'),
(670, 'Disease analysis report generated', '12345678 - Admin - sudo', '2018-08-28 07:48:27', '127.0.0.1'),
(671, 'Logout Activity', '12345678 - Admin - sudo', '2018-08-28 07:48:44', '127.0.0.1'),
(672, 'Logout Activity', '1234567 - Jere Doe - patient', '2018-08-28 09:28:48', '127.0.0.1'),
(673, 'Staff Login Activity', '1234567 - John Murithi Ngondi - doctor', '2018-08-28 09:32:20', '127.0.0.1'),
(674, 'Logout Activity', '1234567 - John Murithi Ngondi - doctor', '2018-08-28 09:32:34', '127.0.0.1'),
(675, 'Staff Login Activity', '29734194 - William Waweru - pharmacist', '2018-08-28 09:32:48', '127.0.0.1'),
(676, 'Logout Activity', '29734194 - William Waweru - pharmacist', '2018-08-28 09:33:16', '127.0.0.1'),
(677, 'Staff Login Activity', '12345678 - Admin - sudo', '2018-08-28 10:37:09', '127.0.0.1'),
(678, 'Logout Activity', '12345678 - Admin - sudo', '2018-08-28 10:37:11', '127.0.0.1'),
(679, 'Staff Login Activity', '1234567 - John Murithi Ngondi - doctor', '2018-08-28 10:37:22', '127.0.0.1'),
(680, 'Logout Activity', '1234567 - John Murithi Ngondi - doctor', '2018-08-28 10:37:29', '127.0.0.1');

-- --------------------------------------------------------

--
-- Table structure for table `medication`
--

CREATE TABLE `medication` (
  `medid` int(10) NOT NULL,
  `drugid` varchar(50) NOT NULL,
  `idnumber` int(10) NOT NULL,
  `dose` varchar(20) NOT NULL,
  `staffid` varchar(20) NOT NULL,
  `hosid` varchar(20) NOT NULL,
  `examid` varchar(20) NOT NULL,
  `day` int(3) NOT NULL,
  `month` int(3) NOT NULL,
  `year` int(5) NOT NULL,
  `time` time NOT NULL,
  `state` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medication`
--

INSERT INTO `medication` (`medid`, `drugid`, `idnumber`, `dose`, `staffid`, `hosid`, `examid`, `day`, `month`, `year`, `time`, `state`) VALUES
(39, '12345', 12345678, '(2x3) for 7 days', '32363404', '234566', '31', 5, 6, 2017, '03:43:35', 1),
(40, '12346', 12345678, '(1x1) for 7 days', '30906937', '234566', '31', 5, 6, 2017, '03:43:55', 0),
(41, '12346', 1234567, '(2x3) for 7 days', '30906937', '123456', '32', 5, 6, 2017, '04:24:07', 1),
(42, '12345', 1234567, '(1x1) for 7 days', '32363404', '234566', '33', 5, 6, 2017, '04:27:58', 1),
(44, '12346', 12345678, '(2x3) for 10 days', '31427610', '234566', '34', 6, 6, 2017, '10:23:24', 0),
(45, '12346', 12345678, '(2x3) for 10 days', '31427610', '', '34', 6, 6, 2017, '10:23:35', 0),
(46, '12345', 12345678, '(2x3) for 3 days', '31427610', '234566', '35', 27, 6, 2017, '01:48:29', 0),
(47, '12345', 12345678, '(2x3)', '31427610', '234566', '36', 26, 5, 2018, '03:25:49', 0),
(48, '12345', 12345678, '(2x3) for 5 days', '29734194', '234566', '37', 19, 7, 2018, '07:51:14', 1),
(49, '12346', 12345678, '(2x3) for 5 days', '31427610', '234566', '38', 21, 8, 2018, '09:40:58', 0),
(50, '12345', 12345678, '(2x3) for 5 days', '31427610', '234566', '39', 21, 8, 2018, '09:42:00', 0),
(51, '12345', 12345678, '(2x3) for 5 days', '31427610', '234566', '40', 21, 8, 2018, '09:43:10', 0),
(52, '12346', 12345678, '(2x3) for 5 days', '31427610', '234566', '42', 21, 8, 2018, '09:59:28', 0),
(53, '12345', 12345678, '(2x3) for 5 days', '31427610', '234566', '42', 21, 8, 2018, '10:09:48', 0),
(54, '12346', 12345678, '(2x3) for 5 days', '31427610', '234566', '43', 21, 8, 2018, '10:25:29', 0),
(55, '12345', 29734194, '(2x3) for 5 days', '31427610', '234566', '44', 21, 8, 2018, '10:58:56', 0),
(56, '12345', 29734194, '(2x3) for 5 days', '31427610', '234566', '45', 21, 8, 2018, '11:00:50', 0),
(57, '12345', 12345678, '(2x3) for 5 days', '31427610', '234566', '46', 21, 8, 2018, '11:04:18', 0),
(58, '12345', 12345678, '(2x3) for 5 days', '31427610', '234566', '47', 21, 8, 2018, '11:05:34', 0),
(59, '12346', 29734194, '(2x3) for 5 days', '31427610', '234566', '48', 21, 8, 2018, '11:05:50', 0),
(60, '12345', 12345678, '(2x3) for 5 days', '31427610', '234566', '49', 21, 8, 2018, '06:10:05', 0),
(61, '12349', 1234567, '(2x3) for 5 days', '29734194', '234566', '50', 28, 8, 2018, '07:44:15', 1),
(62, '1235', 1234567, '(1x3) for 5days', '29734194', '234566', '50', 28, 8, 2018, '07:44:35', 1),
(63, '12346', 1234567, '(2x3) for 3days', '29734194', '234566', '50', 28, 8, 2018, '07:44:47', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pattable`
--

CREATE TABLE `pattable` (
  `image` varchar(40) NOT NULL DEFAULT '',
  `idnumber` char(9) NOT NULL,
  `names` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` char(6) NOT NULL,
  `password` varchar(10) NOT NULL,
  `regdate` datetime NOT NULL,
  `next_visit` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pattable`
--

INSERT INTO `pattable` (`image`, `idnumber`, `names`, `email`, `gender`, `password`, `regdate`, `next_visit`) VALUES
('newCliff.jpg', '1234567', 'Jere Doe', 'jere@gmail.com', 'male', '123456789', '2017-06-05 04:21:42', '2018-08-30'),
('Bree 20161027_063615.jpg', '12345678', 'Jane Doe', 'janedoe@gmail.com', 'female', '123456789', '2017-06-05 03:35:07', '2018-08-22'),
('93c0d1a5c6432d2ca3489648709bd8fb.png', '29734194', 'Njeri William', 'williamwawerunjeri@gmail.com', 'male', '1234', '2018-07-19 07:26:31', '2018-08-22'),
('pharm1.png', '30906937', 'KAGO PAUL', 'njo212@gmail.com', 'male', '1234567890', '2017-06-06 10:15:35', '');

-- --------------------------------------------------------

--
-- Table structure for table `prescription`
--

CREATE TABLE `prescription` (
  `prescid` int(10) NOT NULL,
  `idnumber` int(10) NOT NULL,
  `diseaseid` varchar(50) NOT NULL,
  `staffid` varchar(20) NOT NULL,
  `examid` varchar(20) NOT NULL,
  `day` int(3) NOT NULL,
  `month` int(3) NOT NULL,
  `year` int(5) NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prescription`
--

INSERT INTO `prescription` (`prescid`, `idnumber`, `diseaseid`, `staffid`, `examid`, `day`, `month`, `year`, `time`) VALUES
(38, 12345678, '12345', '31427610', '31', 5, 6, 2017, '03:42:54'),
(40, 1234567, '12345', '29734194', '32', 5, 6, 2017, '04:23:57'),
(41, 1234567, '12346', '31427610', '33', 5, 6, 2017, '04:27:52'),
(42, 12345678, '12345', '31427610', '34', 6, 6, 2017, '10:22:54'),
(45, 12345678, '12345', '31427610', '35', 27, 6, 2017, '01:47:53'),
(46, 12345678, '12346', '31427610', '36', 26, 5, 2018, '03:25:27'),
(47, 12345678, '12346', '31427610', '37', 19, 7, 2018, '07:49:49'),
(48, 12345678, '656565', '31427610', '38', 21, 8, 2018, '09:40:30'),
(50, 12345678, '12345', '31427610', '39', 21, 8, 2018, '09:41:53'),
(51, 12345678, '12345', '31427610', '40', 21, 8, 2018, '09:43:06'),
(53, 12345678, '12346', '31427610', '42', 21, 8, 2018, '09:59:15'),
(54, 12345678, '12345', '31427610', '42', 21, 8, 2018, '09:59:20'),
(55, 12345678, '656565', '31427610', '43', 21, 8, 2018, '10:25:24'),
(56, 29734194, '12346', '31427610', '44', 21, 8, 2018, '10:58:51'),
(57, 29734194, '12345', '31427610', '45', 21, 8, 2018, '11:00:45'),
(58, 12345678, '12345', '31427610', '46', 21, 8, 2018, '11:04:15'),
(59, 12345678, '12345', '31427610', '47', 21, 8, 2018, '11:05:28'),
(60, 29734194, '12346', '31427610', '48', 21, 8, 2018, '11:05:44'),
(61, 29734194, '12345', '31427610', '48', 21, 8, 2018, '11:05:45'),
(62, 12345678, '57575', '31427610', '49', 21, 8, 2018, '06:10:02'),
(63, 1234567, '12348', '1234567', '50', 28, 8, 2018, '07:43:59');

-- --------------------------------------------------------

--
-- Table structure for table `stafftable`
--

CREATE TABLE `stafftable` (
  `idnumber` varchar(20) NOT NULL,
  `image` varchar(40) NOT NULL,
  `names` varchar(70) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` char(6) NOT NULL,
  `role` varchar(10) NOT NULL,
  `hosid` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL,
  `regdate` datetime NOT NULL,
  `state` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stafftable`
--

INSERT INTO `stafftable` (`idnumber`, `image`, `names`, `email`, `gender`, `role`, `hosid`, `password`, `regdate`, `state`) VALUES
('1234567', 'IMG_20170618_021910.jpg', 'John Murithi Ngondi', 'johnmurithi@gmail.com', 'male', 'doctor', '234566', '123456789', '2017-06-05 03:05:09', 1),
('12345678', '', 'Admin', 'admin@gmail.com', 'male', 'sudo', '0', '123456789', '2017-06-01 04:08:11', 1),
('29734194', 'wille.png', 'William Waweru', 'william@gmail.com', 'male', 'pharmacist', '234566', '123456789', '2017-06-05 04:19:10', 1),
('30906937', 'kago.png', 'Kago Paul', 'kagopaul@gmail.com', 'male', 'pharmacist', '123456', '123456789', '2017-06-05 03:46:52', 1),
('32363404', 'jose.png', 'Josephat Bett', 'jbett@gmail.com', 'male', 'pharmacist', '123456', '123456789', '2017-06-05 03:25:54', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `disease`
--
ALTER TABLE `disease`
  ADD PRIMARY KEY (`diseaseid`),
  ADD UNIQUE KEY `diseasename` (`diseasename`);

--
-- Indexes for table `drug`
--
ALTER TABLE `drug`
  ADD PRIMARY KEY (`drugid`);

--
-- Indexes for table `examination`
--
ALTER TABLE `examination`
  ADD PRIMARY KEY (`examid`);

--
-- Indexes for table `hospital`
--
ALTER TABLE `hospital`
  ADD PRIMARY KEY (`hosid`),
  ADD UNIQUE KEY `hoskey` (`hoskey`);

--
-- Indexes for table `logfile`
--
ALTER TABLE `logfile`
  ADD PRIMARY KEY (`logid`);

--
-- Indexes for table `medication`
--
ALTER TABLE `medication`
  ADD PRIMARY KEY (`medid`);

--
-- Indexes for table `pattable`
--
ALTER TABLE `pattable`
  ADD PRIMARY KEY (`idnumber`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `prescription`
--
ALTER TABLE `prescription`
  ADD PRIMARY KEY (`prescid`);

--
-- Indexes for table `stafftable`
--
ALTER TABLE `stafftable`
  ADD PRIMARY KEY (`idnumber`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `staffid` (`idnumber`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `examination`
--
ALTER TABLE `examination`
  MODIFY `examid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT for table `logfile`
--
ALTER TABLE `logfile`
  MODIFY `logid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=681;
--
-- AUTO_INCREMENT for table `medication`
--
ALTER TABLE `medication`
  MODIFY `medid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
--
-- AUTO_INCREMENT for table `prescription`
--
ALTER TABLE `prescription`
  MODIFY `prescid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
