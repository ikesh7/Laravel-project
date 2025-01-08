-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2021 at 04:31 AM
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
-- Database: `bonjoymaster`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `id` int(11) NOT NULL,
  `district` varchar(255) NOT NULL,
  `ward` varchar(3) DEFAULT NULL,
  `temporary_address` text DEFAULT NULL,
  `permanent_address` text DEFAULT NULL,
  `street_address` varchar(255) NOT NULL,
  `country` text NOT NULL,
  `province` varchar(255) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `zipcode` int(11) NOT NULL,
  `city` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`id`, `district`, `ward`, `temporary_address`, `permanent_address`, `street_address`, `country`, `province`, `user_id`, `zipcode`, `city`) VALUES
(4, 'Kailali', NULL, NULL, NULL, 'Navadurga Tole', 'Dhangadhi', 'Sudurpashchim Province', 57, 0, ''),
(5, 'Kathmandu', NULL, NULL, NULL, 'sfasfasf', 'Nepal', 'Province 4', 66, 12531, 'Assumenda reprehende'),
(6, 'Kathmandu', NULL, NULL, NULL, 'sfasfasf', 'adsasd', 'Province 4', 67, 12531, 'Pokhara'),
(7, 'Fugit minim veniam', NULL, NULL, NULL, 'Qui voluptate delect', 'Ea dolores tempore', 'Province 3', 68, 41196, 'Kathmandu'),
(8, 'Voluptatum et tempor', NULL, NULL, NULL, 'Aspernatur est magna', 'Ea dolorem quidem ad', 'Province 4', 69, 24122, 'Butwal'),
(9, 'Et molestiae sit ex', NULL, NULL, NULL, 'Dolor molestiae ea v', 'Ex elit ea pariatur', 'Province 1', 70, 87585, 'Kathmandu'),
(10, 'Ut a nemo perferendi', NULL, NULL, NULL, 'Velit laboris dolor', 'Non eum harum delect', 'Province 6', 71, 96803, 'Kathmandu'),
(11, 'Sed aspernatur animi', NULL, NULL, NULL, 'Voluptate nemo paria', 'In fugit ipsum aliq', 'Province 3', 72, 18683, 'Kathmandu'),
(12, 'Qui ullam nisi sequi', NULL, NULL, NULL, 'Illo numquam atque c', 'Enim velit sint lore', 'Province 7', 73, 63758, 'Butwal'),
(13, 'Tempore voluptatem', NULL, NULL, NULL, 'Debitis distinctio', 'Illo do deserunt qua', 'Province 5', 74, 38597, 'Butwal'),
(14, 'Assumenda aut nihil', NULL, NULL, NULL, 'Explicabo Nam sint', 'Repellendus Autem v', 'Province 5', 75, 98940, 'Dharan'),
(15, 'Incididunt voluptas', NULL, NULL, NULL, 'Pariatur Nobis pers', 'Asperiores non vero', 'Province 5', 76, 85221, 'Kathmandu'),
(16, 'Nesciunt aute sint', NULL, NULL, NULL, 'Incidunt sunt ullam', 'Sint lorem dolor qu', 'Province 5', 77, 34193, 'Kathmandu'),
(17, 'Neque et assumenda e', NULL, NULL, NULL, 'Quo minima quia erro', 'Adipisicing asperior', 'Province 5', 78, 22551, 'Butwal'),
(18, 'Amet id beatae cons', NULL, NULL, NULL, 'Duis quibusdam cum q', 'Irure impedit qui i', 'Province 7', 79, 24557, 'Dharan'),
(19, 'Non facere accusamus', NULL, NULL, NULL, 'Eu officiis minus al', 'Quae voluptate harum', 'Province 1', 80, 71550, 'Dharan'),
(20, 'Voluptatibus cum con', NULL, NULL, NULL, 'Magnam cum esse ips', 'Minim cillum eaque c', 'Province 6', 81, 75244, 'Kathmandu'),
(21, 'Kailali', NULL, NULL, NULL, 'Navadurga Tole', 'Nepal', 'Province 3', 82, 10900, 'Kathmandu');

-- --------------------------------------------------------

--
-- Table structure for table `amenity`
--

CREATE TABLE `amenity` (
  `ID` int(11) NOT NULL,
  `name_en` varchar(255) NOT NULL,
  `desciption_en` text NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `amenity`
--

INSERT INTO `amenity` (`ID`, `name_en`, `desciption_en`, `price`) VALUES
(5, 'Amenity #1', 'Amenity #1 Desc', 100);

-- --------------------------------------------------------

--
-- Table structure for table `amnity_hotel`
--

CREATE TABLE `amnity_hotel` (
  `id` int(9) NOT NULL,
  `amnity_id` int(11) NOT NULL,
  `hotel_id` int(11) NOT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `amnity_hotel`
--

INSERT INTO `amnity_hotel` (`id`, `amnity_id`, `hotel_id`, `time_stamp`) VALUES
(2, 5, 2, '2021-04-10 17:47:41');

-- --------------------------------------------------------

--
-- Table structure for table `amnity_room`
--

CREATE TABLE `amnity_room` (
  `id` int(9) NOT NULL,
  `amnity_id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `applicaion_settings`
--

CREATE TABLE `applicaion_settings` (
  `ID` int(11) NOT NULL,
  `key` varchar(255) NOT NULL,
  `value` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `apps_countries`
--

CREATE TABLE `apps_countries` (
  `id` int(11) NOT NULL,
  `country_code` varchar(2) NOT NULL DEFAULT '',
  `country_name` varchar(100) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `apps_countries`
--

INSERT INTO `apps_countries` (`id`, `country_code`, `country_name`) VALUES
(1, 'AF', 'Afghanistan'),
(2, 'AL', 'Albania'),
(3, 'DZ', 'Algeria'),
(4, 'DS', 'American Samoa'),
(5, 'AD', 'Andorra'),
(6, 'AO', 'Angola'),
(7, 'AI', 'Anguilla'),
(8, 'AQ', 'Antarctica'),
(9, 'AG', 'Antigua and Barbuda'),
(10, 'AR', 'Argentina'),
(11, 'AM', 'Armenia'),
(12, 'AW', 'Aruba'),
(13, 'AU', 'Australia'),
(14, 'AT', 'Austria'),
(15, 'AZ', 'Azerbaijan'),
(16, 'BS', 'Bahamas'),
(17, 'BH', 'Bahrain'),
(18, 'BD', 'Bangladesh'),
(19, 'BB', 'Barbados'),
(20, 'BY', 'Belarus'),
(21, 'BE', 'Belgium'),
(22, 'BZ', 'Belize'),
(23, 'BJ', 'Benin'),
(24, 'BM', 'Bermuda'),
(25, 'BT', 'Bhutan'),
(26, 'BO', 'Bolivia'),
(27, 'BA', 'Bosnia and Herzegovina'),
(28, 'BW', 'Botswana'),
(29, 'BV', 'Bouvet Island'),
(30, 'BR', 'Brazil'),
(31, 'IO', 'British Indian Ocean Territory'),
(32, 'BN', 'Brunei Darussalam'),
(33, 'BG', 'Bulgaria'),
(34, 'BF', 'Burkina Faso'),
(35, 'BI', 'Burundi'),
(36, 'KH', 'Cambodia'),
(37, 'CM', 'Cameroon'),
(38, 'CA', 'Canada'),
(39, 'CV', 'Cape Verde'),
(40, 'KY', 'Cayman Islands'),
(41, 'CF', 'Central African Republic'),
(42, 'TD', 'Chad'),
(43, 'CL', 'Chile'),
(44, 'CN', 'China'),
(45, 'CX', 'Christmas Island'),
(46, 'CC', 'Cocos (Keeling) Islands'),
(47, 'CO', 'Colombia'),
(48, 'KM', 'Comoros'),
(49, 'CG', 'Congo'),
(50, 'CK', 'Cook Islands'),
(51, 'CR', 'Costa Rica'),
(52, 'HR', 'Croatia (Hrvatska)'),
(53, 'CU', 'Cuba'),
(54, 'CY', 'Cyprus'),
(55, 'CZ', 'Czech Republic'),
(56, 'DK', 'Denmark'),
(57, 'DJ', 'Djibouti'),
(58, 'DM', 'Dominica'),
(59, 'DO', 'Dominican Republic'),
(60, 'TP', 'East Timor'),
(61, 'EC', 'Ecuador'),
(62, 'EG', 'Egypt'),
(63, 'SV', 'El Salvador'),
(64, 'GQ', 'Equatorial Guinea'),
(65, 'ER', 'Eritrea'),
(66, 'EE', 'Estonia'),
(67, 'ET', 'Ethiopia'),
(68, 'FK', 'Falkland Islands (Malvinas)'),
(69, 'FO', 'Faroe Islands'),
(70, 'FJ', 'Fiji'),
(71, 'FI', 'Finland'),
(72, 'FR', 'France'),
(73, 'FX', 'France, Metropolitan'),
(74, 'GF', 'French Guiana'),
(75, 'PF', 'French Polynesia'),
(76, 'TF', 'French Southern Territories'),
(77, 'GA', 'Gabon'),
(78, 'GM', 'Gambia'),
(79, 'GE', 'Georgia'),
(80, 'DE', 'Germany'),
(81, 'GH', 'Ghana'),
(82, 'GI', 'Gibraltar'),
(83, 'GK', 'Guernsey'),
(84, 'GR', 'Greece'),
(85, 'GL', 'Greenland'),
(86, 'GD', 'Grenada'),
(87, 'GP', 'Guadeloupe'),
(88, 'GU', 'Guam'),
(89, 'GT', 'Guatemala'),
(90, 'GN', 'Guinea'),
(91, 'GW', 'Guinea-Bissau'),
(92, 'GY', 'Guyana'),
(93, 'HT', 'Haiti'),
(94, 'HM', 'Heard and Mc Donald Islands'),
(95, 'HN', 'Honduras'),
(96, 'HK', 'Hong Kong'),
(97, 'HU', 'Hungary'),
(98, 'IS', 'Iceland'),
(99, 'IN', 'India'),
(100, 'IM', 'Isle of Man'),
(101, 'ID', 'Indonesia'),
(102, 'IR', 'Iran (Islamic Republic of)'),
(103, 'IQ', 'Iraq'),
(104, 'IE', 'Ireland'),
(105, 'IL', 'Israel'),
(106, 'IT', 'Italy'),
(107, 'CI', 'Ivory Coast'),
(108, 'JE', 'Jersey'),
(109, 'JM', 'Jamaica'),
(110, 'JP', 'Japan'),
(111, 'JO', 'Jordan'),
(112, 'KZ', 'Kazakhstan'),
(113, 'KE', 'Kenya'),
(114, 'KI', 'Kiribati'),
(115, 'KP', 'Korea, Democratic People\'s Republic of'),
(116, 'KR', 'Korea, Republic of'),
(117, 'XK', 'Kosovo'),
(118, 'KW', 'Kuwait'),
(119, 'KG', 'Kyrgyzstan'),
(120, 'LA', 'Lao People\'s Democratic Republic'),
(121, 'LV', 'Latvia'),
(122, 'LB', 'Lebanon'),
(123, 'LS', 'Lesotho'),
(124, 'LR', 'Liberia'),
(125, 'LY', 'Libyan Arab Jamahiriya'),
(126, 'LI', 'Liechtenstein'),
(127, 'LT', 'Lithuania'),
(128, 'LU', 'Luxembourg'),
(129, 'MO', 'Macau'),
(130, 'MK', 'Macedonia'),
(131, 'MG', 'Madagascar'),
(132, 'MW', 'Malawi'),
(133, 'MY', 'Malaysia'),
(134, 'MV', 'Maldives'),
(135, 'ML', 'Mali'),
(136, 'MT', 'Malta'),
(137, 'MH', 'Marshall Islands'),
(138, 'MQ', 'Martinique'),
(139, 'MR', 'Mauritania'),
(140, 'MU', 'Mauritius'),
(141, 'TY', 'Mayotte'),
(142, 'MX', 'Mexico'),
(143, 'FM', 'Micronesia, Federated States of'),
(144, 'MD', 'Moldova, Republic of'),
(145, 'MC', 'Monaco'),
(146, 'MN', 'Mongolia'),
(147, 'ME', 'Montenegro'),
(148, 'MS', 'Montserrat'),
(149, 'MA', 'Morocco'),
(150, 'MZ', 'Mozambique'),
(151, 'MM', 'Myanmar'),
(152, 'NA', 'Namibia'),
(153, 'NR', 'Nauru'),
(154, 'NP', 'Nepal'),
(155, 'NL', 'Netherlands'),
(156, 'AN', 'Netherlands Antilles'),
(157, 'NC', 'New Caledonia'),
(158, 'NZ', 'New Zealand'),
(159, 'NI', 'Nicaragua'),
(160, 'NE', 'Niger'),
(161, 'NG', 'Nigeria'),
(162, 'NU', 'Niue'),
(163, 'NF', 'Norfolk Island'),
(164, 'MP', 'Northern Mariana Islands'),
(165, 'NO', 'Norway'),
(166, 'OM', 'Oman'),
(167, 'PK', 'Pakistan'),
(168, 'PW', 'Palau'),
(169, 'PS', 'Palestine'),
(170, 'PA', 'Panama'),
(171, 'PG', 'Papua New Guinea'),
(172, 'PY', 'Paraguay'),
(173, 'PE', 'Peru'),
(174, 'PH', 'Philippines'),
(175, 'PN', 'Pitcairn'),
(176, 'PL', 'Poland'),
(177, 'PT', 'Portugal'),
(178, 'PR', 'Puerto Rico'),
(179, 'QA', 'Qatar'),
(180, 'RE', 'Reunion'),
(181, 'RO', 'Romania'),
(182, 'RU', 'Russian Federation'),
(183, 'RW', 'Rwanda'),
(184, 'KN', 'Saint Kitts and Nevis'),
(185, 'LC', 'Saint Lucia'),
(186, 'VC', 'Saint Vincent and the Grenadines'),
(187, 'WS', 'Samoa'),
(188, 'SM', 'San Marino'),
(189, 'ST', 'Sao Tome and Principe'),
(190, 'SA', 'Saudi Arabia'),
(191, 'SN', 'Senegal'),
(192, 'RS', 'Serbia'),
(193, 'SC', 'Seychelles'),
(194, 'SL', 'Sierra Leone'),
(195, 'SG', 'Singapore'),
(196, 'SK', 'Slovakia'),
(197, 'SI', 'Slovenia'),
(198, 'SB', 'Solomon Islands'),
(199, 'SO', 'Somalia'),
(200, 'ZA', 'South Africa'),
(201, 'GS', 'South Georgia South Sandwich Islands'),
(202, 'ES', 'Spain'),
(203, 'LK', 'Sri Lanka'),
(204, 'SH', 'St. Helena'),
(205, 'PM', 'St. Pierre and Miquelon'),
(206, 'SD', 'Sudan'),
(207, 'SR', 'Suriname'),
(208, 'SJ', 'Svalbard and Jan Mayen Islands'),
(209, 'SZ', 'Swaziland'),
(210, 'SE', 'Sweden'),
(211, 'CH', 'Switzerland'),
(212, 'SY', 'Syrian Arab Republic'),
(213, 'TW', 'Taiwan'),
(214, 'TJ', 'Tajikistan'),
(215, 'TZ', 'Tanzania, United Republic of'),
(216, 'TH', 'Thailand'),
(217, 'TG', 'Togo'),
(218, 'TK', 'Tokelau'),
(219, 'TO', 'Tonga'),
(220, 'TT', 'Trinidad and Tobago'),
(221, 'TN', 'Tunisia'),
(222, 'TR', 'Turkey'),
(223, 'TM', 'Turkmenistan'),
(224, 'TC', 'Turks and Caicos Islands'),
(225, 'TV', 'Tuvalu'),
(226, 'UG', 'Uganda'),
(227, 'UA', 'Ukraine'),
(228, 'AE', 'United Arab Emirates'),
(229, 'GB', 'United Kingdom'),
(230, 'US', 'United States'),
(231, 'UM', 'United States minor outlying islands'),
(232, 'UY', 'Uruguay'),
(233, 'UZ', 'Uzbekistan'),
(234, 'VU', 'Vanuatu'),
(235, 'VA', 'Vatican City State'),
(236, 'VE', 'Venezuela'),
(237, 'VN', 'Vietnam'),
(238, 'VG', 'Virgin Islands (British)'),
(239, 'VI', 'Virgin Islands (U.S.)'),
(240, 'WF', 'Wallis and Futuna Islands'),
(241, 'EH', 'Western Sahara'),
(242, 'YE', 'Yemen'),
(243, 'ZR', 'Zaire'),
(244, 'ZM', 'Zambia'),
(245, 'ZW', 'Zimbabwe');

-- --------------------------------------------------------

--
-- Table structure for table `bedtype`
--

CREATE TABLE `bedtype` (
  `id` int(11) NOT NULL,
  `name_en` varchar(255) NOT NULL,
  `desciption_en` varchar(1024) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bedtype`
--

INSERT INTO `bedtype` (`id`, `name_en`, `desciption_en`) VALUES
(1, 'Masted Bed #1', 'Bed #1'),
(6, 'Abcd', 'Adklsja'),
(7, 'rdtyguhkj', 'jfsakd,alks');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `ID` int(11) NOT NULL,
  `booking_type` varchar(255) DEFAULT NULL,
  `booking_code` int(8) NOT NULL,
  `user_id` int(11) NOT NULL,
  `agentId` int(9) DEFAULT NULL,
  `timestamps` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `ipaddress` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`ID`, `booking_type`, `booking_code`, `user_id`, `agentId`, `timestamps`, `ipaddress`) VALUES
(8, '', 56693307, 82, NULL, '2021-05-03 14:57:54', '::1'),
(9, '', 10133562, 57, 51, '2021-05-09 03:41:18', '::1'),
(11, '', 78299064, 57, 51, '2021-05-09 03:41:14', '::1'),
(12, '', 54392781, 57, 51, '2021-05-09 03:41:01', '::1'),
(13, '', 99094057, 2, 51, '2021-05-12 02:07:38', '::1'),
(14, '', 22526899, 2, 51, '2021-05-12 02:08:23', '::1'),
(15, '', 28928728, 2, 51, '2021-05-12 02:08:56', '::1'),
(16, '', 95991331, 2, 51, '2021-05-12 02:11:23', '::1'),
(17, '', 85767605, 2, 80, '2021-05-12 02:12:04', '::1');

-- --------------------------------------------------------

--
-- Table structure for table `booking_details`
--

CREATE TABLE `booking_details` (
  `id` int(11) NOT NULL,
  `booking_id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `no_of_guest_adult` int(11) NOT NULL,
  `no_of_guest_children` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `check_in` date NOT NULL,
  `check_out` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking_details`
--

INSERT INTO `booking_details` (`id`, `booking_id`, `room_id`, `price`, `time_stamp`, `no_of_guest_adult`, `no_of_guest_children`, `first_name`, `last_name`, `gender`, `check_in`, `check_out`) VALUES
(3, 8, 17, 1500, '2021-05-03 14:57:54', 8, 2, 'Sulav', 'Rimal', 'Rimal', '2021-05-09', '2021-05-15'),
(4, 9, 20, 1200, '2021-05-09 03:25:33', 2, 2, 'Yogesh', 'Kamti', 'Male', '2021-05-10', '2021-05-12'),
(5, 11, 21, 1200, '2021-05-09 03:27:11', 2, 1, 'FName', 'LName', 'Male', '2021-05-12', '2021-05-12'),
(6, 12, 20, 1200, '2021-05-09 03:41:02', 1, 1, 'FName #1', 'LName #1', 'Male', '2021-05-13', '2021-05-21'),
(7, 17, 19, 921, '2021-05-12 02:12:04', 2, 2, '', '', '', '2021-05-13', '2021-05-15');

-- --------------------------------------------------------

--
-- Table structure for table `booking_events`
--

CREATE TABLE `booking_events` (
  `id` int(11) NOT NULL,
  `booking_id` int(11) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 0,
  `timestamps` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking_events`
--

INSERT INTO `booking_events` (`id`, `booking_id`, `status`, `timestamps`) VALUES
(3, 8, 1, '2021-05-17 03:07:09'),
(4, 9, 1, '2021-05-09 09:26:22'),
(5, 11, 1, '2021-05-09 09:27:04'),
(6, 12, 2, '2021-05-09 06:46:21'),
(7, 14, 0, '2021-05-12 02:08:24'),
(8, 15, 0, '2021-05-12 02:08:57'),
(9, 17, 0, '2021-05-12 02:12:04');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` int(9) NOT NULL,
  `name` varchar(255) NOT NULL,
  `district` int(9) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `name`, `district`) VALUES
(1, 'Kathmandu', 1),
(2, 'Pokhara', 1),
(3, 'Dharan', 1),
(4, 'Butwal', 1);

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `ID` int(11) NOT NULL,
  `Name_en` varchar(255) NOT NULL,
  `is_active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `district/state`
--

CREATE TABLE `district/state` (
  `ID` int(11) NOT NULL,
  `Name_en` varchar(255) NOT NULL,
  `province_id` int(11) NOT NULL,
  `is_active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `facilities_services`
--

CREATE TABLE `facilities_services` (
  `id` int(9) NOT NULL,
  `parking` tinyint(1) NOT NULL,
  `breakfast` tinyint(1) NOT NULL,
  `breakfast_type` varchar(255) NOT NULL,
  `breakfast_price` int(11) NOT NULL,
  `free_wifi` tinyint(1) NOT NULL,
  `restaurant` tinyint(1) NOT NULL,
  `room_service` tinyint(1) NOT NULL,
  `bar` tinyint(1) NOT NULL,
  `front_desk` tinyint(1) NOT NULL,
  `sauna` tinyint(1) NOT NULL,
  `fitness_center` tinyint(1) NOT NULL,
  `garden` tinyint(1) NOT NULL,
  `terrace` tinyint(1) NOT NULL,
  `non_smoking_rooms` tinyint(1) NOT NULL,
  `airport_shuttle` tinyint(1) NOT NULL,
  `family_rooms` tinyint(1) NOT NULL,
  `spa` tinyint(1) NOT NULL,
  `hot_tub_jaccuzi` tinyint(1) NOT NULL,
  `air_conditioning` tinyint(1) NOT NULL,
  `water_park` tinyint(1) NOT NULL,
  `swimming_pool` tinyint(1) NOT NULL,
  `others` longtext DEFAULT NULL,
  `userid` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `facilities_services`
--

INSERT INTO `facilities_services` (`id`, `parking`, `breakfast`, `breakfast_type`, `breakfast_price`, `free_wifi`, `restaurant`, `room_service`, `bar`, `front_desk`, `sauna`, `fitness_center`, `garden`, `terrace`, `non_smoking_rooms`, `airport_shuttle`, `family_rooms`, `spa`, `hot_tub_jaccuzi`, `air_conditioning`, `water_park`, `swimming_pool`, `others`, `userid`) VALUES
(3, 0, 1, 'wq', 23, 1, 0, 0, 1, 1, 0, 0, 1, 0, 0, 1, 0, 0, 1, 0, 1, 0, '[{\"parking\":\"0\"},{\"breakfast\":\"1\"},{\"breakfast_type\":\"wq\"},{\"breakfast_price\":\"23\"},{\"free_wifi\":\"1\"},{\"restaurant\":\"0\"},{\"room_service\":\"0\"},{\"bar\":\"1\"},{\"front_desk\":\"1\"},{\"sauna\":\"0\"},{\"fitness_center\":\"0\"},{\"garden\":\"1\"},{\"terrace\":\"0\"},{\"non_smoking_rooms\":\"0\"},{\"airport_shuttle\":\"1\"},{\"family_rooms\":\"0\"},{\"spa\":\"0\"},{\"hot_tub_jaccuzi\":\"1\"},{\"air_conditioning\":\"0\"},{\"water_park\":\"1\"},{\"swimming_pool\":\"0\"}]', 57),
(10, 1, 0, 'mexican', 40, 1, 0, 1, 0, 1, 0, 1, 0, 0, 0, 1, 0, 1, 0, 1, 0, 1, '[{\"parking\":\"1\"},{\"breakfast\":\"0\"},{\"breakfast_type\":\"mexican\"},{\"breakfast_price\":\"40\"},{\"free_wifi\":\"1\"},{\"restaurant\":\"0\"},{\"room_service\":\"1\"},{\"bar\":\"0\"},{\"front_desk\":\"1\"},{\"sauna\":\"0\"},{\"fitness_center\":\"1\"},{\"garden\":\"0\"},{\"terrace\":\"0\"},{\"non_smoking_rooms\":\"0\"},{\"airport_shuttle\":\"1\"},{\"family_rooms\":\"0\"},{\"spa\":\"1\"},{\"hot_tub_jaccuzi\":\"0\"},{\"air_conditioning\":\"1\"},{\"water_park\":\"0\"},{\"swimming_pool\":\"1\"}]', 69),
(11, 1, 0, 'mexican', 120, 0, 0, 1, 0, 1, 0, 1, 0, 1, 0, 1, 0, 1, 0, 1, 0, 1, '[{\"parking\":\"0\"},{\"breakfast\":\"0\"},{\"breakfast_type\":\"mexican\"},{\"breakfast_price\":\"120\"},{\"free_wifi\":\"1\"},{\"restaurant\":\"0\"},{\"room_service\":\"1\"},{\"bar\":\"0\"},{\"front_desk\":\"1\"},{\"sauna\":\"0\"},{\"fitness_center\":\"1\"},{\"garden\":\"0\"},{\"terrace\":\"1\"},{\"non_smoking_rooms\":\"0\"},{\"airport_shuttle\":\"1\"},{\"family_rooms\":\"0\"},{\"spa\":\"1\"},{\"hot_tub_jaccuzi\":\"0\"},{\"air_conditioning\":\"1\"},{\"water_park\":\"0\"},{\"swimming_pool\":\"1\"}]', 2),
(12, 1, 0, 'mexican', 120, 0, 0, 1, 0, 1, 0, 1, 0, 1, 0, 1, 0, 1, 0, 1, 0, 0, '[{\"parking\":\"1\"},{\"breakfast\":\"0\"},{\"breakfast_type\":\"mexican\"},{\"breakfast_price\":\"120\"},{\"free_wifi\":\"0\"},{\"restaurant\":\"0\"},{\"room_service\":\"1\"},{\"bar\":\"0\"},{\"front_desk\":\"1\"},{\"sauna\":\"0\"},{\"fitness_center\":\"1\"},{\"garden\":\"0\"},{\"terrace\":\"1\"},{\"non_smoking_rooms\":\"0\"},{\"airport_shuttle\":\"1\"},{\"family_rooms\":\"0\"},{\"spa\":\"1\"},{\"hot_tub_jaccuzi\":\"0\"},{\"air_conditioning\":\"1\"},{\"water_park\":\"0\"},{\"swimming_pool\":\"0\"}]', 2),
(13, 0, 0, 'Reprehenderit numqua', 218, 1, 1, 0, 1, 1, 0, 0, 0, 1, 0, 0, 0, 1, 1, 0, 0, 1, '[{\"parking\":\"0\"},{\"breakfast\":\"0\"},{\"breakfast_type\":\"Reprehenderit numqua\"},{\"breakfast_price\":\"218\"},{\"free_wifi\":\"1\"},{\"restaurant\":\"1\"},{\"room_service\":\"0\"},{\"bar\":\"1\"},{\"front_desk\":\"1\"},{\"sauna\":\"0\"},{\"fitness_center\":\"0\"},{\"garden\":\"0\"},{\"terrace\":\"1\"},{\"non_smoking_rooms\":\"0\"},{\"airport_shuttle\":\"0\"},{\"family_rooms\":\"0\"},{\"spa\":\"1\"},{\"hot_tub_jaccuzi\":\"1\"},{\"air_conditioning\":\"0\"},{\"water_park\":\"0\"},{\"swimming_pool\":\"1\"}]', 78),
(14, 1, 1, 'Dolorem ut molestiae', 986, 0, 0, 0, 1, 0, 0, 1, 1, 0, 0, 1, 0, 0, 1, 0, 1, 1, '[{\"parking\":\"1\"},{\"breakfast\":\"1\"},{\"breakfast_type\":\"Dolorem ut molestiae\"},{\"breakfast_price\":\"986\"},{\"free_wifi\":\"0\"},{\"restaurant\":\"0\"},{\"room_service\":\"0\"},{\"bar\":\"1\"},{\"front_desk\":\"0\"},{\"sauna\":\"0\"},{\"fitness_center\":\"1\"},{\"garden\":\"1\"},{\"terrace\":\"0\"},{\"non_smoking_rooms\":\"0\"},{\"airport_shuttle\":\"1\"},{\"family_rooms\":\"0\"},{\"spa\":\"0\"},{\"hot_tub_jaccuzi\":\"1\"},{\"air_conditioning\":\"0\"},{\"water_park\":\"1\"},{\"swimming_pool\":\"1\"}]', 79),
(15, 1, 1, 'Consequatur Accusam', 712, 0, 1, 1, 0, 0, 0, 0, 1, 1, 0, 0, 1, 0, 1, 0, 0, 0, '[{\"parking\":\"1\"},{\"breakfast\":\"1\"},{\"breakfast_type\":\"Consequatur Accusam\"},{\"breakfast_price\":\"712\"},{\"free_wifi\":\"0\"},{\"restaurant\":\"1\"},{\"room_service\":\"1\"},{\"bar\":\"0\"},{\"front_desk\":\"0\"},{\"sauna\":\"0\"},{\"fitness_center\":\"0\"},{\"garden\":\"1\"},{\"terrace\":\"1\"},{\"non_smoking_rooms\":\"0\"},{\"airport_shuttle\":\"0\"},{\"family_rooms\":\"1\"},{\"spa\":\"0\"},{\"hot_tub_jaccuzi\":\"1\"},{\"air_conditioning\":\"0\"},{\"water_park\":\"0\"},{\"swimming_pool\":\"0\"}]', 80),
(16, 0, 0, 'Veniam ipsum lorem', 236, 0, 0, 0, 1, 1, 0, 1, 1, 0, 0, 1, 0, 1, 1, 1, 0, 1, '[{\"parking\":\"0\"},{\"breakfast\":\"0\"},{\"breakfast_type\":\"Veniam ipsum lorem\"},{\"breakfast_price\":\"236\"},{\"free_wifi\":\"0\"},{\"restaurant\":\"0\"},{\"room_service\":\"0\"},{\"bar\":\"1\"},{\"front_desk\":\"1\"},{\"sauna\":\"0\"},{\"fitness_center\":\"1\"},{\"garden\":\"1\"},{\"terrace\":\"0\"},{\"non_smoking_rooms\":\"0\"},{\"airport_shuttle\":\"1\"},{\"family_rooms\":\"0\"},{\"spa\":\"1\"},{\"hot_tub_jaccuzi\":\"1\"},{\"air_conditioning\":\"1\"},{\"water_park\":\"0\"},{\"swimming_pool\":\"1\"}]', 81);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `ID` int(11) NOT NULL,
  `type_of_property` varchar(255) NOT NULL,
  `name_of_property` varchar(255) NOT NULL,
  `star_rating` varchar(255) NOT NULL,
  `contact_name` varchar(255) NOT NULL,
  `contact_no` varchar(255) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL DEFAULT 'Kathmandu',
  `is_active` tinyint(1) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `verified_by` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `registration_document` text DEFAULT NULL,
  `citizen_front` text DEFAULT NULL,
  `citizen_back` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`ID`, `type_of_property`, `name_of_property`, `star_rating`, `contact_name`, `contact_no`, `user_id`, `address`, `city`, `is_active`, `slug`, `verified_by`, `image`, `registration_document`, `citizen_front`, `citizen_back`) VALUES
(3, 'Resort', 'Property #2', '4', '9845659878', '9845987865', 1, 'Kathmandu', 'Kathmandu', 1, 'property-2', '1', NULL, NULL, NULL, NULL),
(6, 'Hotel', 'Hotel #1', '4', 'Sulav Rimal', '9814698278', 2, 'Gyaneshwor', 'Kathmandu', 0, 'hotel-1', '-', '1618728696.png', NULL, NULL, NULL),
(7, 'Guest House', 'Ananda', '2', 'sadfdsdafd', '9843457739', 66, 'Gyaneshwor', 'Dharan', 1, 'single', '-', '1618769043.png', NULL, NULL, NULL),
(8, 'Hotel', 'Sulav Rimal', '2', 'sadfdsdafd', '585858', 67, 'Gyaneshwor', 'Pokhara', 1, 'asdas', '-', '1618769632.png', NULL, NULL, NULL),
(9, 'Guest House', 'Sahitya', '3', 'Sulav Rimal', '9843457739', 70, 'Gyaneshwor', 'Butwal', 0, 'asdsads', '-', '1618818911.png', NULL, NULL, NULL),
(10, 'Resort', 'Hotel Radission', '2', 'Sulav Rimal', '9843457739', 74, 'Gyaneshwor', 'Pokhara', 1, 'mandala', '-', '1619259244.png', NULL, NULL, NULL),
(11, 'Resort', 'safdasdf', '3', 'sadfdasdf', '9843457739', 75, 'sfasfasf', 'Pokhara', 1, 'asdads', '-', '1619259340.png', NULL, NULL, NULL),
(12, 'Guest House', 'asdsdfd', '3', 'safsafd', '21212', 76, 'Gyaneshwor', 'Kathmandu', 1, 'asdads', '-', '1619259419.png', NULL, NULL, NULL),
(13, 'Resort', 'hhhhh', '2', 'asdasd', '9843457739', 77, 'sfasfasf', 'Kathmandu', 1, 'Double', '-', '1619259505.png', NULL, NULL, NULL),
(14, 'Hotel', 'adads', '3', 'sadfdasdf', '585858', 78, 'Gyaneshwor', 'Kathmandu', 1, 'sadsd', '-', '1619259645.png', NULL, NULL, NULL),
(15, 'Hotel', 'Sulav Rimal', '2', 'Sulav Rimal', '585858', 79, 'Gyaneshwor', 'Kathmandu', 1, 'www', '-', '1619259722.png', NULL, NULL, NULL),
(16, 'Guest House', 'Tucker Weber', '3', 'Derek Whitney', '88', 80, 'Quia impedit ad est', 'Kathmandu', 1, 'Ipsam non nihil magn', '-', '1619259779.png', NULL, NULL, NULL),
(17, 'Resort', 'Chastity Lott', '3', 'Zahir Campbell', '15', 81, 'Exercitationem lauda', 'Kathmandu', 1, 'Voluptate quis proid', '-', '1619259827.png', NULL, NULL, NULL),
(18, 'Guest House', 'Laravel Property', '4', 'Laravel', '6545859685', 51, 'Laravel', 'Kathmandu', 1, 'laravel-ktm', '-', '51_1620530658.png', '51_doc_1620530658.png', '51_cf_1620530658.jpg', '51_cb_1620530658.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `hotel_user`
--

CREATE TABLE `hotel_user` (
  `info_id` int(11) NOT NULL,
  `hotel_id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `timestamps` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `layout_pricing`
--

CREATE TABLE `layout_pricing` (
  `id` int(9) NOT NULL,
  `room_type` varchar(255) NOT NULL,
  `room_name` varchar(255) NOT NULL,
  `custom_name` varchar(255) NOT NULL,
  `room_capacity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `no_of_room` int(11) NOT NULL,
  `others` longtext DEFAULT NULL,
  `userid` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `layout_pricing`
--

INSERT INTO `layout_pricing` (`id`, `room_type`, `room_name`, `custom_name`, `room_capacity`, `price`, `no_of_room`, `others`, `userid`) VALUES
(1, 'fasfdasfa', 'fasd', 'fads', 2, 2, 2, NULL, 0),
(2, 'AC Room', 'A101', 'A101', 2, 1200, 1, NULL, 0),
(3, 'AC Room', 'A101', 'A101', 2, 1200, 1, '[{\"room_type\":\"AC Room\"},{\"room_name\":\"A101\"},{\"custom_name\":\"A101\"},{\"room_capacity\":\"2\"},{\"price\":\"1200\"},{\"no_of_room\":\"1\"},{\"fasfsad\":\"741\"},{\"field_2\":\"142\"}]', 0),
(4, 'AC Room', 'A101', 'A101', 2, 1200, 1, '[{\"room_type\":\"AC Room\"},{\"room_name\":\"A101\"},{\"custom_name\":\"A101\"},{\"room_capacity\":\"2\"},{\"price\":\"1200\"},{\"no_of_room\":\"1\"},{\"fasfsad\":\"741\"},{\"field_2\":\"142\"}]', 0),
(5, 'AC Room', 'A101', 'A101', 2, 1200, 1, '[{\"room_type\":\"AC Room\"},{\"room_name\":\"A101\"},{\"custom_name\":\"A101\"},{\"room_capacity\":\"2\"},{\"price\":\"1200\"},{\"no_of_room\":\"1\"},{\"fasfsad\":\"741\"},{\"field_2\":\"142\"}]', 0),
(6, 'AC Room', 'A101', 'A101', 2, 1200, 1, '[{\"room_type\":\"AC Room\"},{\"room_name\":\"A101\"},{\"custom_name\":\"A101\"},{\"room_capacity\":\"2\"},{\"price\":\"1200\"},{\"no_of_room\":\"1\"},{\"fasfsad\":\"741\"},{\"field_2\":\"142\"}]', 0),
(7, 'saddd', 'saddas', 'asdsda', 5, 7, 8, '[{\"room_type\":\"saddd\"},{\"room_name\":\"saddas\"},{\"custom_name\":\"asdsda\"},{\"room_capacity\":\"5\"},{\"price\":\"7\"},{\"no_of_room\":\"8\"},{\"field_2\":\"7\"},{\"saroj\":\"sadf\"},{\"hotel\":\"on\"}]', 0),
(8, 'AC Room', 'AC Room', 'AB', 12, 10000, 4, '[{\"room_type\":\"Abcd\"},{\"room_name\":\"Abcd\"},{\"custom_name\":\"ABcd\"},{\"room_capacity\":\"5\"},{\"price\":\"1000\"},{\"no_of_room\":\"2\"},{\"abcd_#2\":\"1212\"}]', 2),
(10, 'a', 'a', 'a', 2, 222, 2, '[{\"room_type\":\"a\"},{\"room_name\":\"a\"},{\"custom_name\":\"a\"},{\"room_capacity\":\"2\"},{\"price\":\"222\"},{\"no_of_room\":\"2\"},{\"abcd_#2\":\"2\"},{\"label_#1\":\"2\"}]', 57);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_03_07_063151_laratrust_setup_tables', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'users-create', 'Create Users', 'Create Users', '2021-03-07 00:51:57', '2021-03-07 00:51:57'),
(2, 'users-read', 'Read Users', 'Read Users', '2021-03-07 00:51:57', '2021-03-07 00:51:57'),
(3, 'users-update', 'Update Users', 'Update Users', '2021-03-07 00:51:58', '2021-03-07 00:51:58'),
(4, 'users-delete', 'Delete Users', 'Delete Users', '2021-03-07 00:51:58', '2021-03-07 00:51:58'),
(5, 'payments-create', 'Create Payments', 'Create Payments', '2021-03-07 00:51:58', '2021-03-07 00:51:58'),
(6, 'payments-read', 'Read Payments', 'Read Payments', '2021-03-07 00:51:58', '2021-03-07 00:51:58'),
(7, 'payments-update', 'Update Payments', 'Update Payments', '2021-03-07 00:51:58', '2021-03-07 00:51:58'),
(8, 'payments-delete', 'Delete Payments', 'Delete Payments', '2021-03-07 00:51:58', '2021-03-07 00:51:58'),
(9, 'profile-read', 'Read Profile', 'Read Profile', '2021-03-07 00:51:58', '2021-03-07 00:51:58'),
(10, 'profile-update', 'Update Profile', 'Update Profile', '2021-03-07 00:51:58', '2021-03-07 00:51:58');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1),
(1, 2),
(2, 1),
(2, 2),
(3, 1),
(3, 2),
(4, 1),
(4, 2),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(9, 2),
(9, 3),
(10, 1),
(10, 2),
(10, 3);

-- --------------------------------------------------------

--
-- Table structure for table `permission_user`
--

CREATE TABLE `permission_user` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `propertytype`
--

CREATE TABLE `propertytype` (
  `ID` int(11) NOT NULL,
  `Name_en` varchar(255) NOT NULL,
  `is_active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `province`
--

CREATE TABLE `province` (
  `ID` int(11) NOT NULL,
  `Name_en` varchar(255) NOT NULL,
  `country_id` int(11) NOT NULL,
  `is_active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Admin', 'Admin', '2021-03-07 00:51:57', '2021-03-07 00:51:57'),
(2, 'agent', 'Agent', 'Agent', '2021-03-07 00:51:58', '2021-03-07 00:51:58'),
(3, 'user', 'User', 'User', '2021-03-07 00:51:58', '2021-03-07 00:51:58');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `id` int(9) NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`id`, `role_id`, `user_id`, `user_type`) VALUES
(1, 3, 1, 'App\\Models\\User'),
(2, 2, 2, 'App\\Models\\User'),
(4, 1, 4, 'App\\Models\\User'),
(8, 2, 51, 'App\\Models\\User'),
(9, 1, 52, 'App\\Models\\User'),
(12, 3, 57, 'App\\Models\\User'),
(13, 2, 66, 'App\\Models\\User'),
(14, 2, 67, 'App\\Models\\User'),
(15, 2, 68, 'App\\Models\\User'),
(16, 2, 69, 'App\\Models\\User'),
(17, 2, 70, 'App\\Models\\User'),
(18, 2, 71, 'App\\Models\\User'),
(19, 2, 72, 'App\\Models\\User'),
(20, 3, 73, 'App\\Models\\User'),
(21, 2, 74, 'App\\Models\\User'),
(22, 2, 75, 'App\\Models\\User'),
(23, 2, 76, 'App\\Models\\User'),
(24, 2, 77, 'App\\Models\\User'),
(25, 2, 78, 'App\\Models\\User'),
(26, 2, 79, 'App\\Models\\User'),
(27, 2, 80, 'App\\Models\\User'),
(28, 2, 81, 'App\\Models\\User'),
(29, 3, 82, 'App\\Models\\User');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `id` int(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `room_type_id` int(11) NOT NULL,
  `bed_type_id` int(11) NOT NULL,
  `room_capacity_adult` int(11) NOT NULL,
  `room_capacity_childd` int(11) NOT NULL,
  `base_price` int(11) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `userid` int(9) NOT NULL DEFAULT 0,
  `available` int(9) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`id`, `name`, `room_type_id`, `bed_type_id`, `room_capacity_adult`, `room_capacity_childd`, `base_price`, `is_active`, `userid`, `available`) VALUES
(3, 'Room #1234567890', 5, 1, 4, 4, 4444, 1, 2, NULL),
(4, 'sadf', 1, 6, 2, 2, 1200, 1, 74, NULL),
(5, 'asfdfsa', 1, 6, 3, 2, 1500, 1, 74, NULL),
(6, 'safd', 1, 6, 3, 3, 1700, 1, 74, NULL),
(7, 'safdsdf', 1, 6, 2, 4, 1200, 1, 75, NULL),
(8, 'gggg', 1, 6, 2, 1, 1500, 1, 75, NULL),
(9, 'ggggg', 1, 6, 2, 3, 2000, 1, 75, NULL),
(10, 'sdaffa', 7, 6, 2, 1, 1299, 1, 76, NULL),
(11, 'qwdas', 8, 7, 2, 2, 2500, 1, 76, NULL),
(12, 'sadfdsfd', 7, 1, 2, 2, 12222, 1, 77, NULL),
(13, 'asfaf', 1, 6, 22, 22, 22222, 1, 77, NULL),
(14, 'asddsa', 7, 1, 2, 2, 1277, 1, 78, NULL),
(15, 'asdsda', 7, 1, 2, 1, 2222, 1, 78, NULL),
(16, 'asddasasd', 7, 1, 2, 1, 12999, 1, 79, NULL),
(17, 'das', 1, 1, 2, 2, 1500, 1, 79, NULL),
(18, 'Jermaine Chan', 8, 1, 75, 82, 41, 1, 80, NULL),
(19, 'Rachel Hopkins', 8, 6, 92, 56, 921, 1, 80, NULL),
(20, 'Laravel Room', 1, 1, 1, 1, 1200, 1, 51, 5),
(22, 'Room ssssss', 1, 1, 2, 2, 200, 1, 2, 5);

-- --------------------------------------------------------

--
-- Table structure for table `roomtype`
--

CREATE TABLE `roomtype` (
  `id` int(11) NOT NULL,
  `name_en` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `description_en` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `roomtype`
--

INSERT INTO `roomtype` (`id`, `name_en`, `slug`, `description_en`) VALUES
(1, 'Room Type #1', 'room-type-1', NULL),
(7, 'asdf', 'sadf', 'sadffsafd'),
(8, 'sadfdsdafdfs', 'sdafdfsdd', 'sfaddsadfdfsa');

-- --------------------------------------------------------

--
-- Table structure for table `search_results`
--

CREATE TABLE `search_results` (
  `ID` int(11) NOT NULL,
  `city` text NOT NULL,
  `date_of_arrival` date NOT NULL,
  `date_of_departure` date NOT NULL,
  `pax` int(11) DEFAULT NULL,
  `nationality` varchar(255) NOT NULL DEFAULT 'Nepali',
  `capacity_adult` int(9) DEFAULT NULL,
  `capacity_child` int(9) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `search_results`
--

INSERT INTO `search_results` (`ID`, `city`, `date_of_arrival`, `date_of_departure`, `pax`, `nationality`, `capacity_adult`, `capacity_child`) VALUES
(1, 'Kathmandu', '2021-04-30', '2021-05-01', 3, 'Nepali', NULL, NULL),
(2, 'Kathmandu', '2021-05-05', '2021-05-07', NULL, 'Nepali', NULL, NULL),
(3, 'Kathmandu', '2021-05-05', '2021-05-07', NULL, 'Nepali', NULL, NULL),
(4, 'Kathmandu', '2021-05-12', '2021-05-13', 3, 'Nepali', NULL, NULL),
(5, 'Kathmandu', '2021-05-04', '2021-05-06', 1, 'Nepali', NULL, NULL),
(6, 'Kathmandu', '2021-05-11', '2021-05-06', NULL, 'Nepali', NULL, NULL),
(7, 'Kathmandu', '2021-05-14', '2021-05-22', NULL, 'Nepali', NULL, NULL),
(8, 'Kathmandu', '2021-05-14', '2021-05-22', 2, 'Nepali', NULL, NULL),
(9, 'Kathmandu', '2021-05-09', '2021-05-15', NULL, 'Nepali', NULL, NULL),
(10, 'Kathmandu', '2021-05-10', '2021-05-12', 2, 'Nepali', NULL, NULL),
(11, 'Kathmandu', '2021-05-12', '2021-05-12', 1, 'Nepali', NULL, NULL),
(12, 'Kathmandu', '2021-05-13', '2021-05-21', 1, 'Nepali', NULL, NULL),
(13, 'Kathmandu', '2021-05-14', '2021-05-16', 2, 'Nepali', NULL, NULL),
(14, 'Kathmandu', '2021-05-14', '2021-05-16', 2, 'Nepali', NULL, NULL),
(15, 'Kathmandu', '2021-05-13', '2021-05-15', 2, 'Nepali', NULL, NULL),
(16, 'Pokhara', '2021-05-18', '2021-05-19', 2, 'Nepali', NULL, NULL),
(17, 'Kathmandu', '2021-05-31', '2021-06-02', 2, 'Nepali', 1, 1),
(18, 'Kathmandu', '2021-06-02', '2021-06-05', 3, 'Nepali', 2, 1),
(19, 'Kathmandu', '2021-05-19', '2021-05-20', NULL, 'Nepali', 1, 1),
(20, 'Kathmandu', '2021-05-19', '2021-05-20', NULL, 'Nepali', 1, 1),
(21, 'Kathmandu', '2021-05-19', '2021-05-20', NULL, 'Nepali', 1, 1),
(22, 'Kathmandu', '2021-05-19', '2021-05-20', NULL, 'Nepali', 1, 1),
(23, 'Kathmandu', '2021-05-20', '2021-05-22', NULL, 'Nepali', 2, 2),
(24, 'Kathmandu', '2021-05-20', '2021-05-22', NULL, 'Nepali', 2, 2),
(25, 'Kathmandu', '2021-05-20', '2021-05-22', NULL, 'Nepali', 2, 2),
(26, 'Kathmandu', '2021-05-20', '2021-05-22', NULL, 'Nepali', 2, 2),
(27, 'Kathmandu', '2021-05-20', '2021-05-22', NULL, 'Nepali', 2, 2),
(28, 'Kathmandu', '2021-05-20', '2021-05-22', NULL, 'Nepali', 2, 2),
(29, 'Kathmandu', '2021-05-21', '2021-05-23', NULL, 'Nepali', 2, 1),
(30, 'Kathmandu', '2021-05-20', '2021-05-22', NULL, 'Nepali', 2, 2),
(31, 'Kathmandu', '2021-05-20', '2021-05-22', NULL, 'Nepali', 2, 2),
(32, 'Kathmandu', '2021-05-20', '2021-05-22', NULL, 'Nepali', 2, 2),
(33, 'Kathmandu', '2021-05-21', '2021-05-23', NULL, 'Nepali', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_forms_inputs`
--

CREATE TABLE `tbl_forms_inputs` (
  `id` int(9) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `input_type` varchar(255) DEFAULT NULL,
  `form_section` varchar(100) DEFAULT NULL,
  `option_values` longtext DEFAULT NULL,
  `required` varchar(100) DEFAULT NULL,
  `others` longtext DEFAULT NULL,
  `userid` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_forms_inputs`
--

INSERT INTO `tbl_forms_inputs` (`id`, `title`, `input_type`, `form_section`, `option_values`, `required`, `others`, `userid`) VALUES
(24, 'Hotel', 'Checkbox', '3', NULL, NULL, NULL, 4);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hotels`
--

CREATE TABLE `tbl_hotels` (
  `id` int(9) NOT NULL,
  `firstname` varchar(100) DEFAULT NULL,
  `lastname` varchar(100) DEFAULT NULL,
  `contact_no` varchar(15) DEFAULT NULL,
  `property_type` varchar(100) DEFAULT NULL,
  `property_name` varchar(100) DEFAULT NULL,
  `star_rating` varchar(100) DEFAULT NULL,
  `contact_name` varchar(100) DEFAULT NULL,
  `contact_detail` varchar(100) DEFAULT NULL,
  `property_address` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_hotels`
--

INSERT INTO `tbl_hotels` (`id`, `firstname`, `lastname`, `contact_no`, `property_type`, `property_name`, `star_rating`, `contact_name`, `contact_detail`, `property_address`) VALUES
(1, 'dklja', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, 'Sulav', 'Rimal', '9843457739', 'GUESTHOUSE', 'Mando', '2', 'Sulav Rimal', '9843457739', 'Kathmandu'),
(13, 'Sulav', 'Rimal', '9843457739', 'GUESTHOUSE', 'sdfadsfa', '2', 'sadfdsdafd', 'sfdsadf', 'sdadfdsadf');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` int(11) NOT NULL,
  `booking_id` int(11) NOT NULL,
  `total` int(20) NOT NULL,
  `discounts` int(11) NOT NULL,
  `discount_type` int(11) NOT NULL,
  `coupoun_id` int(11) NOT NULL,
  `grand_total` int(11) NOT NULL,
  `payment_method` varchar(255) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title2` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `gender` varchar(7) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_no` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_birth` date NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`first_name`, `last_name`, `id`, `email`, `title2`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `gender`, `user_type`, `contact_no`, `date_of_birth`, `address`) VALUES
('', '', 1, 'abc@abc.com', NULL, NULL, '$2y$10$l4MTEzb9St.t8w5PrrVGN.0qe7RH9tDi26owMdepoRfjJ6A2b4Ika', NULL, '2021-03-07 01:03:30', '2021-03-07 01:03:30', '', '', '0', '0000-00-00', ''),
('', '', 2, 'test@test.com', NULL, NULL, '$2y$10$MnSOijLoNMX.vMQvhY8w1.SfhtUM6iKaYmCdyUVwyBphPST5EpZcO', NULL, '2021-03-07 01:04:19', '2021-03-07 01:04:19', '', '2', '0', '0000-00-00', ''),
('', '', 4, 'admin@admin.com', NULL, NULL, '$2y$10$qkRVWpb5lmE5/y/e15tkKOx0NrcKAbnDA9R76K9HOyjZJxbHUe2T.', NULL, '2021-03-07 01:22:51', '2021-03-07 01:22:51', '', '', '0', '0000-00-00', ''),
('Yogesh', 'Kamti', 51, 'yogeshkamti@gmail.com', 'Mr.', NULL, '$2y$10$pb8RjRpEx1IdSlMO6djT/.krRZm/RilMWWdU8N5LKGaBk7Vd1IIim', NULL, '2021-04-04 19:54:43', '2021-04-04 19:54:43', 'Male', NULL, '9814698278', '1995-06-27', 'A'),
('dsa', 'dsA', 52, 'test@tes222t.com', 'Mr.', NULL, '$2y$10$BSasSFWyt4vqKysitg4Zx.yf6Z6sWAvV6u88Yg9UST4dQjNKK2Zo2', NULL, '2021-04-05 04:57:11', '2021-04-05 04:57:11', 'Male', NULL, '9814698278', '2010-01-06', 'Address'),
('Yogesh', 'Kamti', 57, 'yogesh_kamti@yahoo.com', 'Mr.', NULL, '$2y$10$YFXtgNgcil.FjcIsJXbcZ.pS98snXGGReiQ8Mo9Eha1uYV.N8LAv6', NULL, '2021-04-11 23:49:05', '2021-04-11 23:49:05', 'Male', '3', '9814698278', '1995-02-19', NULL),
('Clarke', 'Gallegos', 73, 'tiwuwi@mailinator.com', 'Mrs.', NULL, '$2y$10$tYuEUUvPNqzQtatOrio3I.ayOYKUr7ZDBQppPVRB2P/wbWKq8dVN2', NULL, '2021-04-24 04:28:19', '2021-04-24 04:28:19', 'Others', '3', '+1 (146) 523-8203', '1982-08-08', NULL),
('Judah', 'Silva', 74, 'mili@mailinator.com', 'Mrs.', NULL, '$2y$10$VXASGEh9IvIQ6Y3zxkCB1uCHWKsCGBaGInMWd1UKOAvOIrTzVx/lm', NULL, '2021-04-24 04:28:35', '2021-04-24 04:28:35', 'Male', '2', '+1 (875) 266-1406', '2009-05-31', NULL),
('Hermione', 'Garza', 75, 'moqelu@mailinator.com', 'Ms.', NULL, '$2y$10$oFEfxoM3Aa8dMGr7iG5Ftuq5EmBLe3.HNM.JKGJJ8l1BE.Rh91zaS', NULL, '2021-04-24 04:30:20', '2021-04-24 04:30:20', 'Female', '2', '+1 (827) 223-4165', '1988-05-26', NULL),
('Lucius', 'Dale', 76, 'qubyhasesi@mailinator.com', 'Mr.', NULL, '$2y$10$Z0SHwj7SbZh9HamXavEc6.cGX/XNaQ1DNkwwCmZDahlstLGYD8T7C', NULL, '2021-04-24 04:31:42', '2021-04-24 04:31:42', 'Others', '2', '+1 (157) 674-2298', '2007-09-19', NULL),
('Christian', 'Rivers', 77, 'juma@mailinator.com', 'Ms.', NULL, '$2y$10$KsmTwYxB.bvDRAK2SmpELuwpltLrFty2j09.X1CLER67TuxECl6mG', NULL, '2021-04-24 04:33:07', '2021-04-24 04:33:07', 'Others', '2', '+1 (871) 902-1019', '1985-07-13', NULL),
('Haley', 'Odonnell', 78, 'ruvekajic@mailinator.com', 'Ms.', NULL, '$2y$10$3Ng4oudR1U7msu9oTsS0NeqO4tyv3Shn7P5JEZ.fhI6TDf4GDiIOG', NULL, '2021-04-24 04:35:31', '2021-04-24 04:35:31', 'Female', '2', '+1 (695) 181-3601', '2003-03-09', NULL),
('Cheyenne', 'Lester', 79, 'pajejox@mailinator.com', 'Mr.', NULL, '$2y$10$g4GdYPlXQ36IpRl7oHNBs.Y.ddoFKZ7zQnpWmuG8lvpqx9id/GT7.', NULL, '2021-04-24 04:36:46', '2021-04-24 04:36:46', 'Others', '2', '+1 (381) 697-3973', '2004-06-05', NULL),
('Amethyst', 'Wall', 80, 'juhaki@mailinator.com', 'Mr.', NULL, '$2y$10$chD5OE8yYXRPrV6H0nk7heytKDYLgkj1jFQyD7.VYtGP3CuHhnBWO', NULL, '2021-04-24 04:37:46', '2021-04-24 04:37:46', 'Others', '2', '+1 (529) 678-1864', '1987-04-14', NULL),
('Baxter', 'Byrd', 81, 'kokagypyse@mailinator.com', 'Ms.', NULL, '$2y$10$iGSqSCNdO5vtCOhHH.mkcOHOorqVB78DIAJT6yOmu2Gg4hSCtanBy', NULL, '2021-04-24 04:38:36', '2021-04-24 04:38:36', 'Female', '2', '+1 (344) 555-4705', '2016-03-14', NULL),
('Yogesh', 'Kamti', 82, 'yogesh000@yahoo.com', 'Mr.', NULL, '$2y$10$jamDNJcqVVjDOk6PJHLwP.6REkj9KEaBPjH2ZtxflWYzGfBrP9Rya', NULL, '2021-05-02 22:05:48', '2021-05-02 22:05:48', 'Male', '3', '9814698278', '1995-07-26', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`id`),
  ADD KEY `foreign key` (`user_id`);

--
-- Indexes for table `amenity`
--
ALTER TABLE `amenity`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `amnity_hotel`
--
ALTER TABLE `amnity_hotel`
  ADD PRIMARY KEY (`id`),
  ADD KEY `amnity_id` (`amnity_id`),
  ADD KEY `room_id` (`hotel_id`);

--
-- Indexes for table `amnity_room`
--
ALTER TABLE `amnity_room`
  ADD PRIMARY KEY (`id`),
  ADD KEY `amnity_id` (`amnity_id`),
  ADD KEY `room_id` (`room_id`);

--
-- Indexes for table `applicaion_settings`
--
ALTER TABLE `applicaion_settings`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `apps_countries`
--
ALTER TABLE `apps_countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bedtype`
--
ALTER TABLE `bedtype`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `booking_details`
--
ALTER TABLE `booking_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking_events`
--
ALTER TABLE `booking_events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `district/state`
--
ALTER TABLE `district/state`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `facilities_services`
--
ALTER TABLE `facilities_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `layout_pricing`
--
ALTER TABLE `layout_pricing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_unique` (`name`);

--
-- Indexes for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD PRIMARY KEY (`permission_id`);

--
-- Indexes for table `propertytype`
--
ALTER TABLE `propertytype`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `province`
--
ALTER TABLE `province`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roomtype`
--
ALTER TABLE `roomtype`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `search_results`
--
ALTER TABLE `search_results`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_forms_inputs`
--
ALTER TABLE `tbl_forms_inputs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_hotels`
--
ALTER TABLE `tbl_hotels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `amenity`
--
ALTER TABLE `amenity`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `amnity_hotel`
--
ALTER TABLE `amnity_hotel`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `amnity_room`
--
ALTER TABLE `amnity_room`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `applicaion_settings`
--
ALTER TABLE `applicaion_settings`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `apps_countries`
--
ALTER TABLE `apps_countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=246;

--
-- AUTO_INCREMENT for table `bedtype`
--
ALTER TABLE `bedtype`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `booking_details`
--
ALTER TABLE `booking_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `booking_events`
--
ALTER TABLE `booking_events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `district/state`
--
ALTER TABLE `district/state`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `facilities_services`
--
ALTER TABLE `facilities_services`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `hotel`
--
ALTER TABLE `hotel`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `layout_pricing`
--
ALTER TABLE `layout_pricing`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `permission_user`
--
ALTER TABLE `permission_user`
  MODIFY `permission_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `propertytype`
--
ALTER TABLE `propertytype`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `province`
--
ALTER TABLE `province`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `roomtype`
--
ALTER TABLE `roomtype`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `search_results`
--
ALTER TABLE `search_results`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `tbl_forms_inputs`
--
ALTER TABLE `tbl_forms_inputs`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tbl_hotels`
--
ALTER TABLE `tbl_hotels`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
