-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2021 at 08:16 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `payroll_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `ID` int(11) NOT NULL,
  `FCountryID` varchar(3) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `FDescription` varchar(50) CHARACTER SET utf8 NOT NULL,
  `FActive` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`ID`, `FCountryID`, `FDescription`, `FActive`) VALUES
(1, 'AFG', 'Afghanistan', 0),
(2, 'ALB', 'Albania', 0),
(3, 'DZA', 'Algeria', 0),
(4, 'ASM', 'American Samoa', 0),
(5, 'AND', 'Andorra', 0),
(6, 'AGO', 'Angola', 0),
(7, 'AIA', 'Anguilla', 0),
(8, 'ATA', 'Antarctica', 0),
(9, 'ATG', 'Antigua and Barbuda', 0),
(10, 'ARG', 'Argentina', 0),
(11, 'ARM', 'Armenia', 0),
(12, 'ABW', 'Aruba', 0),
(13, 'AUS', 'Australia', 0),
(14, 'AUT', 'Austria', 0),
(15, 'AZE', 'Azerbaijan', 0),
(16, 'BHS', 'Bahamas', 0),
(17, 'BHR', 'Bahrain', 0),
(18, 'BGD', 'Bangladesh', 0),
(19, 'BRB', 'Barbados', 0),
(20, 'BLR', 'Belarus', 0),
(21, 'BEL', 'Belgium', 0),
(22, 'BLZ', 'Belize', 0),
(23, 'BEN', 'Benin', 0),
(24, 'BMU', 'Bermuda', 0),
(25, 'BTN', 'Bhutan', 0),
(26, 'BOL', 'Bolivia', 0),
(27, 'BES', 'Bonaire', 0),
(28, 'BIH', 'Bosnia and Herzegovina', 0),
(29, 'BWA', 'Botswana', 1),
(30, 'BVT', 'Bouvet Island', 0),
(31, 'BRA', 'Brazil', 0),
(32, 'IOT', 'British Indian Ocean Territory', 0),
(33, 'BRN', 'Brunei Darussalam', 0),
(34, 'BGR', 'Bulgaria', 0),
(35, 'BFA', 'Burkina Faso', 0),
(36, 'BDI', 'Burundi', 0),
(37, 'KHM', 'Cambodia', 0),
(38, 'CMR', 'Cameroon', 0),
(39, 'CAN', 'Canada', 0),
(40, 'CPV', 'Cape Verde', 0),
(41, 'CYM', 'Cayman Islands', 0),
(42, 'CAF', 'Central African Republic', 0),
(43, 'TCD', 'Chad', 0),
(44, 'CHL', 'Chile', 0),
(45, 'CHN', 'China', 0),
(46, 'CXR', 'Christmas Island', 0),
(47, 'CCK', 'Cocos (Keeling) Islands', 0),
(48, 'COL', 'Colombia', 0),
(49, 'COM', 'Comoros', 0),
(50, 'COG', 'Congo', 0),
(51, 'COD', 'Democratic Republic of the Congo', 0),
(52, 'COK', 'Cook Islands', 0),
(53, 'CRI', 'Costa Rica', 0),
(54, 'HRV', 'Croatia', 0),
(55, 'CUB', 'Cuba', 0),
(56, 'CUW', 'Curaçao', 0),
(57, 'CYP', 'Cyprus', 0),
(58, 'CZE', 'Czech Republic', 0),
(59, 'CIV', 'Côte d\'Ivoire', 0),
(60, 'DNK', 'Denmark', 0),
(61, 'DJI', 'Djibouti', 0),
(62, 'DMA', 'Dominica', 0),
(63, 'DOM', 'Dominican Republic', 0),
(64, 'ECU', 'Ecuador', 0),
(65, 'EGY', 'Egypt', 0),
(66, 'SLV', 'El Salvador', 0),
(67, 'GNQ', 'Equatorial Guinea', 0),
(68, 'ERI', 'Eritrea', 0),
(69, 'EST', 'Estonia', 0),
(70, 'ETH', 'Ethiopia', 0),
(71, 'FLK', 'Falkland Islands (Malvinas)', 0),
(72, 'FRO', 'Faroe Islands', 0),
(73, 'FJI', 'Fiji', 0),
(74, 'FIN', 'Finland', 0),
(75, 'FRA', 'France', 0),
(76, 'GUF', 'French Guiana', 0),
(77, 'PYF', 'French Polynesia', 0),
(78, 'ATF', 'French Southern Territories', 0),
(79, 'GAB', 'Gabon', 0),
(80, 'GMB', 'Gambia', 0),
(81, 'GEO', 'Georgia', 0),
(82, 'DEU', 'Germany', 0),
(83, 'GHA', 'Ghana', 0),
(84, 'GIB', 'Gibraltar', 0),
(85, 'GRC', 'Greece', 0),
(86, 'GRL', 'Greenland', 0),
(87, 'GRD', 'Grenada', 0),
(88, 'GLP', 'Guadeloupe', 0),
(89, 'GUM', 'Guam', 0),
(90, 'GTM', 'Guatemala', 0),
(91, 'GGY', 'Guernsey', 0),
(92, 'GIN', 'Guinea', 0),
(93, 'GNB', 'Guinea-Bissau', 0),
(94, 'GUY', 'Guyana', 0),
(95, 'HTI', 'Haiti', 0),
(96, 'HMD', 'Heard Island and McDonald Mcdonald Islands', 0),
(97, 'VAT', 'Holy See (Vatican City State)', 0),
(98, 'HND', 'Honduras', 0),
(99, 'HKG', 'Hong Kong', 0),
(100, 'HUN', 'Hungary', 0),
(101, 'ISL', 'Iceland', 0),
(102, 'IND', 'India', 0),
(103, 'IDN', 'Indonesia', 0),
(104, 'IRN', 'Iran, Islamic Republic of', 0),
(105, 'IRQ', 'Iraq', 0),
(106, 'IRL', 'Ireland', 0),
(107, 'IMN', 'Isle of Man', 0),
(108, 'ISR', 'Israel', 0),
(109, 'ITA', 'Italy', 0),
(110, 'JAM', 'Jamaica', 0),
(111, 'JPN', 'Japan', 0),
(112, 'JEY', 'Jersey', 0),
(113, 'JOR', 'Jordan', 0),
(114, 'KAZ', 'Kazakhstan', 0),
(115, 'KEN', 'Kenya', 0),
(116, 'KIR', 'Kiribati', 0),
(117, 'PRK', 'Korea, Democratic People\'s Republic of', 0),
(118, 'KOR', 'Korea, Republic of', 0),
(119, 'KWT', 'Kuwait', 0),
(120, 'KGZ', 'Kyrgyzstan', 0),
(121, 'LAO', 'Lao People\'s Democratic Republic', 0),
(122, 'LVA', 'Latvia', 0),
(123, 'LBN', 'Lebanon', 0),
(124, 'LSO', 'Lesotho', 1),
(125, 'LBR', 'Liberia', 0),
(126, 'LBY', 'Libya', 0),
(127, 'LIE', 'Liechtenstein', 0),
(128, 'LTU', 'Lithuania', 0),
(129, 'LUX', 'Luxembourg', 0),
(130, 'MAC', 'Macao', 0),
(131, 'MKD', 'Macedonia, the Former Yugoslav Republic of', 0),
(132, 'MDG', 'Madagascar', 0),
(133, 'MWI', 'Malawi', 0),
(134, 'MYS', 'Malaysia', 0),
(135, 'MDV', 'Maldives', 0),
(136, 'MLI', 'Mali', 0),
(137, 'MLT', 'Malta', 0),
(138, 'MHL', 'Marshall Islands', 0),
(139, 'MTQ', 'Martinique', 0),
(140, 'MRT', 'Mauritania', 0),
(141, 'MUS', 'Mauritius', 0),
(142, 'MYT', 'Mayotte', 0),
(143, 'MEX', 'Mexico', 0),
(144, 'FSM', 'Micronesia, Federated States of', 0),
(145, 'MDA', 'Moldova, Republic of', 0),
(146, 'MCO', 'Monaco', 0),
(147, 'MNG', 'Mongolia', 0),
(148, 'MNE', 'Montenegro', 0),
(149, 'MSR', 'Montserrat', 0),
(150, 'MAR', 'Morocco', 0),
(151, 'MOZ', 'Mozambique', 1),
(152, 'MMR', 'Myanmar', 0),
(153, 'NAM', 'Namibia', 1),
(154, 'NRU', 'Nauru', 0),
(155, 'NPL', 'Nepal', 0),
(156, 'NLD', 'Netherlands', 0),
(157, 'NCL', 'New Caledonia', 0),
(158, 'NZL', 'New Zealand', 0),
(159, 'NIC', 'Nicaragua', 0),
(160, 'NER', 'Niger', 0),
(161, 'NGA', 'Nigeria', 0),
(162, 'NIU', 'Niue', 0),
(163, 'NFK', 'Norfolk Island', 0),
(164, 'MNP', 'Northern Mariana Islands', 0),
(165, 'NOR', 'Norway', 0),
(166, 'OMN', 'Oman', 0),
(167, 'PAK', 'Pakistan', 0),
(168, 'PLW', 'Palau', 0),
(169, 'PSE', 'Palestine, State of', 0),
(170, 'PAN', 'Panama', 0),
(171, 'PNG', 'Papua New Guinea', 0),
(172, 'PRY', 'Paraguay', 0),
(173, 'PER', 'Peru', 0),
(174, 'PHL', 'Philippines', 0),
(175, 'PCN', 'Pitcairn', 0),
(176, 'POL', 'Poland', 0),
(177, 'PRT', 'Portugal', 0),
(178, 'PRI', 'Puerto Rico', 0),
(179, 'QAT', 'Qatar', 0),
(180, 'ROU', 'Romania', 0),
(181, 'RUS', 'Russian Federation', 0),
(182, 'RWA', 'Rwanda', 0),
(183, 'REU', 'Reunion', 0),
(184, 'BLM', 'Saint Barthelemy', 0),
(185, 'SHN', 'Saint Helena', 0),
(186, 'KNA', 'Saint Kitts and Nevis', 0),
(187, 'LCA', 'Saint Lucia', 0),
(188, 'MAF', 'Saint Martin (French part)', 0),
(189, 'SPM', 'Saint Pierre and Miquelon', 0),
(190, 'VCT', 'Saint Vincent and the Grenadines', 0),
(191, 'WSM', 'Samoa', 0),
(192, 'SMR', 'San Marino', 0),
(193, 'STP', 'Sao Tome and Principe', 0),
(194, 'SAU', 'Saudi Arabia', 0),
(195, 'SEN', 'Senegal', 0),
(196, 'SRB', 'Serbia', 0),
(197, 'SYC', 'Seychelles', 0),
(198, 'SLE', 'Sierra Leone', 0),
(199, 'SGP', 'Singapore', 0),
(200, 'SXM', 'Sint Maarten (Dutch part)', 0),
(201, 'SVK', 'Slovakia', 0),
(202, 'SVN', 'Slovenia', 0),
(203, 'SLB', 'Solomon Islands', 0),
(204, 'SOM', 'Somalia', 0),
(205, 'ZAF', 'South Africa', 1),
(206, 'SGS', 'South Georgia and the South Sandwich Islands', 0),
(207, 'SSD', 'South Sudan', 0),
(208, 'ESP', 'Spain', 0),
(209, 'LKA', 'Sri Lanka', 0),
(210, 'SDN', 'Sudan', 0),
(211, 'SUR', 'Suriname', 0),
(212, 'SJM', 'Svalbard and Jan Mayen', 0),
(213, 'SWZ', 'Swaziland', 1),
(214, 'SWE', 'Sweden', 0),
(215, 'CHE', 'Switzerland', 0),
(216, 'SYR', 'Syrian Arab Republic', 0),
(217, 'TWN', 'Taiwan, Province of China', 0),
(218, 'TJK', 'Tajikistan', 0),
(219, 'TZA', 'United Republic of Tanzania', 0),
(220, 'THA', 'Thailand', 0),
(221, 'TLS', 'Timor-Leste', 0),
(222, 'TGO', 'Togo', 0),
(223, 'TKL', 'Tokelau', 0),
(224, 'TON', 'Tonga', 0),
(225, 'TTO', 'Trinidad and Tobago', 0),
(226, 'TUN', 'Tunisia', 0),
(227, 'TUR', 'Turkey', 0),
(228, 'TKM', 'Turkmenistan', 0),
(229, 'TCA', 'Turks and Caicos Islands', 0),
(230, 'TUV', 'Tuvalu', 0),
(231, 'UGA', 'Uganda', 1),
(232, 'UKR', 'Ukraine', 0),
(233, 'ARE', 'United Arab Emirates', 0),
(234, 'GBR', 'United Kingdom', 0),
(235, 'USA', 'United States', 0),
(236, 'UMI', 'United States Minor Outlying Islands', 0),
(237, 'URY', 'Uruguay', 0),
(238, 'UZB', 'Uzbekistan', 0),
(239, 'VUT', 'Vanuatu', 0),
(240, 'VEN', 'Venezuela', 0),
(241, 'VNM', 'Viet Nam', 0),
(242, 'VGB', 'British Virgin Islands', 0),
(243, 'VIR', 'US Virgin Islands', 0),
(244, 'WLF', 'Wallis and Futuna', 0),
(245, 'ESH', 'Western Sahara', 0),
(246, 'YEM', 'Yemen', 0),
(247, 'ZMB', 'Zambia', 1),
(248, 'ZWE', 'Zimbabwe', 1),
(249, 'ALA', 'Aland Islands', 0);

-- --------------------------------------------------------

--
-- Table structure for table `designations`
--

CREATE TABLE `designations` (
  `jobCode` varchar(10) NOT NULL,
  `jobTitle` varchar(40) NOT NULL,
  `basicSalary` double NOT NULL,
  `normalOvertime` double(10,2) NOT NULL,
  `saturdayOvertime` double(10,2) NOT NULL,
  `holidayOvertime` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `designations`
--

INSERT INTO `designations` (`jobCode`, `jobTitle`, `basicSalary`, `normalOvertime`, `saturdayOvertime`, `holidayOvertime`) VALUES
('DTC521', 'Desktop Technical ', 1200, 90.00, 210.00, 270.00),
('PTM465', 'Project Manager', 24000, 210.00, 230.00, 260.00),
('SDR001', 'Software Developer', 25000, 100.00, 210.00, 280.00),
('SLD125', 'SQL Developer', 1300, 100.00, 210.00, 280.00),
('TST001', 'Technical Support', 27000, 101.00, 215.00, 251.00);

-- --------------------------------------------------------

--
-- Table structure for table `employee_info`
--

CREATE TABLE `employee_info` (
  `id` int(10) UNSIGNED NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `middlename` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `FCitizenship` varchar(50) NOT NULL,
  `idpassword` varchar(13) NOT NULL,
  `FDateofBirth` date NOT NULL,
  `FGender` varchar(6) NOT NULL,
  `FCellNo` varchar(10) NOT NULL,
  `FAddress` varchar(80) NOT NULL,
  `FNextofKin` varchar(50) NOT NULL,
  `FNextofKin_CellNo` varchar(10) NOT NULL,
  `FRelationship` varchar(50) NOT NULL,
  `employeeNumber` varchar(10) NOT NULL,
  `jobCode` varchar(10) NOT NULL COMMENT 'Will use it to join the designation table',
  `payDate` varchar(2) NOT NULL,
  `FAppointmentDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee_info`
--

INSERT INTO `employee_info` (`id`, `firstname`, `middlename`, `lastname`, `FCitizenship`, `idpassword`, `FDateofBirth`, `FGender`, `FCellNo`, `FAddress`, `FNextofKin`, `FNextofKin_CellNo`, `FRelationship`, `employeeNumber`, `jobCode`, `payDate`, `FAppointmentDate`) VALUES
(6, 'Thima', '', 'The Ripper', 'Texas', '46545454654', '2021-09-09', 'Male', '0744958744', '94 Visual Studio Street, NYC , Johannesburg', 'Mangeni K', '0615554654', 'Girlfriend', 'EMP46546', 'SDR001', '15', '2021-09-16'),
(17, 'James', '', 'Mazivise', 'Zimbabwe', 'CN077533', '2020-10-07', 'Male', '0768782276', '76 Lenevo Street Cleremont, Johannesburg', 'Jones Leeroy', '0615554654', 'brother', 'EMP46542', 'DTC521', '25', '2021-10-05'),
(18, 'Collen', '', 'Peterson', 'Mongolia', '528288838375', '1997-07-05', 'Male', '0768782276', '94 Petersburg Street Bendor , Polokwane', 'Luke', '0615554654', 'Friend', 'EMP46642', 'SDR001', '25', '2021-10-03'),
(19, 'Joash', '', 'Coder', 'South Africa', 'CN034533', '1999-05-15', 'Male', '0746958744', '94 Newlands Street Seshego, Polokwane', 'Paul', '0615554654', 'Uncle', 'EMP46346', 'TST001', '25', '2021-10-05'),
(20, 'JET ', '', 'LEE', 'South Africa', 'CN077533556', '1997-01-03', 'Male', '0152565654', '94 Hill  Street Cleremont, Johannesburg', 'Rock Lee', '0645455555', 'brother', 'E020', 'DTC521', '15', '2021-10-21'),
(21, 'JUSTIN', '', 'LEE', 'South Africa', '4654545468545', '1998-02-05', 'Male', '0125315255', '94 Petersburg Street Bendor , Polokwane', 'Marry', '0768782276', 'Mother', 'E021', 'PTM465', '15', '2021-10-20');

--
-- Triggers `employee_info`
--
DELIMITER $$
CREATE TRIGGER `createMonthlyRecords` AFTER INSERT ON `employee_info` FOR EACH ROW INSERT INTO monthlyrecords VALUES(NEW.employeeNumber, "0","0","0","0","0","false")
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `deleteEmployee` BEFORE DELETE ON `employee_info` FOR EACH ROW DELETE FROM monthlyrecords WHERE employeeNumber = OLD.employeeNumber
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `tr_before_ins_` BEFORE INSERT ON `employee_info` FOR EACH ROW BEGIN
  SET NEW.id = (SELECT IFNULL((SELECT MAX(id) FROM `employee_info`),0)+1 FROM DUAL);
  SET NEW.employeeNumber = CAST(NEW.id AS CHAR);
  SET NEW.employeeNumber = CONCAT('E',LPAD(NEW.employeeNumber,3,'0'));
  
  SET NEW.firstname = UPPER(NEW.firstname);
  SET NEW.middlename = UPPER(NEW.middlename);
  SET NEW.lastname = UPPER(NEW.lastname);
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `monthlyrecords`
--

CREATE TABLE `monthlyrecords` (
  `employeeNumber` varchar(10) NOT NULL,
  `loans` int(11) NOT NULL,
  `bonus` int(11) NOT NULL,
  `overTime` int(11) NOT NULL,
  `saturdaysOverTime` int(11) NOT NULL,
  `holidayOverTime` int(11) NOT NULL,
  `processed` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `monthlyrecords`
--

INSERT INTO `monthlyrecords` (`employeeNumber`, `loans`, `bonus`, `overTime`, `saturdaysOverTime`, `holidayOverTime`, `processed`) VALUES
('E020', 600, 0, 0, 0, 0, 'false'),
('E021', 0, 0, 0, 0, 0, 'false'),
('EMP46346', 0, 0, 0, 0, 0, 'false'),
('EMP46542', 0, 0, 0, 0, 0, 'false'),
('EMP46546', 150, 0, 3, 0, 0, 'false'),
('EMP46642', 0, 0, 0, 0, 0, 'false');

-- --------------------------------------------------------

--
-- Table structure for table `salaries`
--

CREATE TABLE `salaries` (
  `employeeNumber` varchar(10) NOT NULL,
  `fullName` varchar(50) NOT NULL,
  `payDate` varchar(2) NOT NULL,
  `jobCode` varchar(10) NOT NULL,
  `jobTitle` varchar(40) NOT NULL,
  `basicSalary` decimal(10,0) NOT NULL,
  `overtime` decimal(10,0) NOT NULL,
  `bonus` double NOT NULL,
  `loan` decimal(10,0) NOT NULL,
  `otherDeductions` double NOT NULL,
  `otherearning` double NOT NULL,
  `totalWage` decimal(10,0) NOT NULL,
  `dateProcessed` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `salaries`
--

INSERT INTO `salaries` (`employeeNumber`, `fullName`, `payDate`, `jobCode`, `jobTitle`, `basicSalary`, `overtime`, `bonus`, `loan`, `otherDeductions`, `otherearning`, `totalWage`, `dateProcessed`) VALUES
('E020', 'JET  LEE', '15', 'DTC521', 'Desktop Technical ', '1200', '0', 0, '600', 600, 10, '10', 'October 2021'),
('E021', 'JUSTIN LEE', '15', 'PTM465', 'Project Manager', '24000', '0', 0, '0', 0, 300, '24300', 'October 2021'),
('EMP46346', 'Joash Coder', '25', 'TST001', 'Technical Support', '27000', '0', 0, '0', 0, 100, '27100', 'October 2021'),
('EMP46542', 'James Mazivise', '25', 'DTC521', 'Desktop Technical ', '1200', '0', 0, '0', 200, 0, '1000', 'October 2021'),
('EMP46642', 'Collen Peterson', '25', 'SDR001', 'Software Developer', '25000', '0', 600, '500', 0, 100, '25200', 'October 2021'),
('EMP46542', 'James Mazivise', '25', 'DTC521', 'Desktop Technical ', '1200', '0', 0, '0', 100, 0, '1100', 'October 2021'),
('EMP46346', 'Joash Coder', '25', 'TST001', 'Technical Support', '27000', '0', 0, '0', 0, 100, '27100', 'October 2021');

--
-- Triggers `salaries`
--
DELIMITER $$
CREATE TRIGGER `tr_salaries_after_ins` AFTER INSERT ON `salaries` FOR EACH ROW BEGIN
UPDATE `monthlyrecords` SET processed = 'true' where employeeNumber = NEW.employeeNumber;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`) VALUES
('system@admin.com', 'pass123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`ID`) USING BTREE,
  ADD UNIQUE KEY `FCountryID` (`FCountryID`) USING BTREE;

--
-- Indexes for table `designations`
--
ALTER TABLE `designations`
  ADD PRIMARY KEY (`jobCode`),
  ADD UNIQUE KEY `jobCode` (`jobCode`);

--
-- Indexes for table `employee_info`
--
ALTER TABLE `employee_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `employeeNumber` (`employeeNumber`),
  ADD UNIQUE KEY `employeeNumber_2` (`employeeNumber`),
  ADD UNIQUE KEY `idpassword` (`idpassword`);

--
-- Indexes for table `monthlyrecords`
--
ALTER TABLE `monthlyrecords`
  ADD PRIMARY KEY (`employeeNumber`),
  ADD UNIQUE KEY `employeeNumber` (`employeeNumber`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=250;

--
-- AUTO_INCREMENT for table `employee_info`
--
ALTER TABLE `employee_info`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
