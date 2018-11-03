-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2018 at 11:29 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pis_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment_tbl`
--

CREATE TABLE `appointment_tbl` (
  `appointment_id` int(11) NOT NULL,
  `doctor_id` int(11) DEFAULT NULL,
  `time` time NOT NULL,
  `day` varchar(15) DEFAULT NULL,
  `appointment_date` date NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `patient_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `appointment_tbl`
--

INSERT INTO `appointment_tbl` (`appointment_id`, `doctor_id`, `time`, `day`, `appointment_date`, `status`, `patient_id`) VALUES
(1, NULL, '08:00:00', NULL, '2018-09-03', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `banner_tbl`
--

CREATE TABLE `banner_tbl` (
  `banner_id` int(11) NOT NULL,
  `banner_picture` varchar(160) NOT NULL,
  `banner_order` int(11) NOT NULL,
  `banner_status` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `banner_tbl`
--

INSERT INTO `banner_tbl` (`banner_id`, `banner_picture`, `banner_order`, `banner_status`, `status`) VALUES
(6, '_bannerImage_1537949778.jpg', 1, 0, 1),
(7, '_bannerImage_1537951954.jpg', 1, 1, 0),
(8, '_bannerImage_1537952016.png', 2, 1, 0),
(11, '_bannerImage_1537952119.jpg', 6, 0, 1),
(12, '_bannerImage_1537952131.jpg', 7, 0, 1),
(13, '_bannerImage_1537952145.jpg', 8, 0, 0),
(14, '_bannerImage_1537968955.jpg', 9, 0, 0),
(15, '_bannerImage_1538287153.jpg', 3, 1, 0),
(17, '_bannerImage_1538288227.jpg', 4, 1, 0),
(18, '_bannerImage_1538289568.jpg', 5, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `barangay_tbl`
--

CREATE TABLE `barangay_tbl` (
  `barangay_id` int(11) NOT NULL,
  `barangay_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `zip_code` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `city_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `barangay_tbl`
--

INSERT INTO `barangay_tbl` (`barangay_id`, `barangay_name`, `zip_code`, `city_id`) VALUES
(1, 'Barangay 287', '1006', 6),
(2, 'Barangay 288', '1006', 6),
(3, 'Barangay 289', '1006', 6),
(4, 'Barangay 290', '1006', 6),
(5, 'Barangay 291', '1006', 6),
(6, 'Barangay 292', '1006', 6),
(7, 'Barangay 293', '1006', 6),
(8, 'Barangay 294', '1006', 6),
(9, 'Barangay 295', '1006', 6),
(10, 'Barangay 296', '1006', 6),
(11, 'Barangay 659', '1000', 7),
(12, 'Barangay 659-A', '1000', 7),
(13, 'Barangay 660', '1000', 7),
(14, 'Barangay 660-A', '1000', 7),
(15, 'Barangay 661', '1000', 7),
(16, 'Barangay 663', '1000', 7),
(17, 'Barangay 663-A', '1000', 7),
(18, 'Barangay 664', '1000', 7),
(19, 'Barangay 666', '1000', 7),
(20, 'Barangay 667', '1000', 7),
(21, 'Barangay 668', '1000', 7),
(22, 'Barangay 669', '1000', 7),
(23, 'Barangay 670', '1000', 7),
(24, 'Barangay 654', '1002', 8),
(25, 'Barangay 655', '1002', 8),
(26, 'Barangay 656', '1002', 8),
(27, 'Barangay 657', '1002', 8),
(28, 'Barangay 658', '1002', 8),
(59, 'Barangay 662', '1007', 10),
(60, 'Barangay 664-A', '1007', 10),
(61, 'Barangay 671', '1007', 10),
(62, 'Barangay 672', '1007', 10),
(63, 'Barangay 673', '1007', 10),
(64, 'Barangay 674', '1007', 10),
(65, 'Barangay 675', '1007', 10),
(66, 'Barangay 676', '1007', 10),
(67, 'Barangay 677', '1007', 10),
(68, 'Barangay 678', '1007', 10),
(69, 'Barangay 679', '1007', 10),
(70, 'Barangay 680', '1007', 10),
(71, 'Barangay 681', '1007', 10),
(72, 'Barangay 682', '1007', 10),
(73, 'Barangay 683', '1007', 10),
(74, 'Barangay 833', '1011', 11),
(75, 'Barangay 834', '1011', 11),
(76, 'Barangay 835', '1011', 11),
(77, 'Barangay 836', '1011', 11),
(78, 'Barangay 837', '1011', 11),
(79, 'Barangay 838', '1011', 11),
(80, 'Barangay 839', '1011', 11),
(81, 'Barangay 840', '1011', 11),
(82, 'Barangay 841', '1011', 11),
(83, 'Barangay 842', '1011', 11),
(84, 'Barangay 843', '1011', 11),
(85, 'Barangay 844', '1011', 11),
(86, 'Barangay 845', '1011', 11),
(87, 'Barangay 846', '1011', 11),
(88, 'Barangay 847', '1011', 11),
(89, 'Barangay 649', '1018', 12),
(90, 'Barangay 650', '1018', 12),
(91, 'Barangay 651', '1018', 12),
(92, 'Barangay 652', '1018', 12),
(93, 'Barangay 653', '1018', 12),
(94, 'Barangay 306', '1001', 13),
(95, 'Barangay 307', '1001', 13),
(96, 'Barangay 308', '1001', 13),
(97, 'Barangay 309', '1001', 13),
(98, 'Barangay 383', '1001', 13),
(99, 'Barangay 384', '1001', 13),
(100, 'Barangay 385', '1001', 13),
(101, 'Barangay 386', '1001', 13),
(102, 'Barangay 387', '1001', 13),
(103, 'Barangay 388', '1001', 13),
(104, 'Barangay 395', '1008', 14),
(105, 'Barangay 396', '1008', 14),
(106, 'Barangay 397', '1008', 14),
(107, 'Barangay 398', '1008', 14),
(108, 'Barangay 399', '1008', 14),
(109, 'Barangay 400', '1008', 14),
(110, 'Barangay 401', '1008', 14),
(111, 'Barangay 402', '1008', 14),
(112, 'Barangay 403', '1008', 14),
(113, 'Barangay 404', '1008', 14),
(114, 'Barangay 405', '1008', 14),
(115, 'Barangay 406', '1008', 14),
(116, 'Barangay 407', '1008', 14),
(117, 'Barangay 408', '1008', 14),
(118, 'Barangay 409', '1008', 14),
(119, 'Barangay 637', '1005', 16),
(120, 'Barangay 638', '1005', 16),
(121, 'Barangay 639', '1005', 16),
(122, 'Barangay 640', '1005', 16),
(123, 'Barangay 641', '1005', 16),
(124, 'Barangay 642', '1005', 16),
(125, 'Barangay 643', '1005', 16),
(126, 'Barangay 644', '1005', 16),
(127, 'Barangay 645', '1005', 16),
(128, 'Barangay 646', '1005', 16),
(129, 'Barangay 647', '1005', 16),
(130, 'Barangay 648', '1005', 16),
(131, 'Barangay 268', '1010', 17),
(132, 'Barangay 269', '1010', 17),
(133, 'Barangay 270', '1010', 17),
(134, 'Barangay 271', '1010', 17),
(135, 'Barangay 272', '1010', 17),
(136, 'Barangay 273', '1010', 17),
(137, 'Barangay 274', '1010', 17),
(138, 'Barangay 275', '1010', 17),
(139, 'Barangay 276', '1010', 17),
(140, 'Barangay 277', '1010', 17),
(141, 'Barangay 278', '1010', 17),
(142, 'Barangay 279', '1010', 17),
(143, 'Barangay 280', '1010', 17),
(144, 'Barangay 281', '1010', 17),
(145, 'Barangay 282', '1010', 17),
(146, 'Barangay 745', '1009', 18),
(147, 'Barangay 746', '1009', 18),
(148, 'Barangay 747', '1009', 18),
(149, 'Barangay 748', '1009', 18),
(150, 'Barangay 749', '1009', 18),
(151, 'Barangay 750', '1009', 18),
(152, 'Barangay 751', '1009', 18),
(153, 'Barangay 752', '1009', 18),
(154, 'Barangay 753', '1009', 18),
(155, 'Barangay 754', '1009', 18),
(156, 'Barangay 755', '1009', 18),
(157, 'Barangay 756', '1009', 18),
(158, 'Barangay 757', '1009', 18),
(159, 'Barangay 758', '1009', 18),
(160, 'Barangay 759', '1009', 18),
(176, 'Barangay 1', '1013', 21),
(177, 'Barangay 2', '1013', 21),
(178, 'Barangay 3', '1013', 21),
(179, 'Barangay 4', '1013', 21),
(180, 'Barangay 5', '1013', 21),
(181, 'Barangay 6', '1013', 21),
(182, 'Barangay 7', '1013', 21),
(183, 'Barangay 8', '1013', 21),
(184, 'Barangay 9', '1013', 21),
(185, 'Barangay 10', '1013', 21),
(186, 'Barangay 11', '1013', 21),
(187, 'Barangay 12', '1013', 21),
(188, 'Barangay 13', '1013', 21),
(189, 'Barangay 14', '1013', 21),
(190, 'Barangay 15', '1013', 21),
(191, 'Barangay 587', '1016', 20),
(192, 'Barangay 587-A', '1016', 20),
(193, 'Barangay 588', '1016', 20),
(194, 'Barangay 589', '1016', 20),
(195, 'Barangay 590', '1016', 20),
(196, 'Barangay 591', '1016', 20),
(197, 'Barangay 592', '1016', 20),
(198, 'Barangay 593', '1016', 20),
(199, 'Barangay 594', '1016', 20),
(200, 'Barangay 595', '2016', 20),
(201, 'Barangay 596', '1016', 20),
(202, 'Barangay 597', '1016', 20),
(203, 'Barangay 598', '1016', 20),
(204, 'Barangay 599', '1016', 20),
(205, 'Barangay 600', '1016', 20),
(206, 'Amparo', '1425', 1),
(207, 'Baesa', '1401', 1),
(208, 'Bagong Silang', '1428', 1),
(209, 'Bagumbong', '1421', 1),
(210, 'Deparo', '1420', 1),
(211, 'Grace Park East', '1403', 1),
(212, 'Grace Park West', '1406', 1),
(213, 'Kanluran Village', '1409', 1),
(214, 'Maypajo', '1410', 1),
(215, 'Sangandaan', '1408', 1),
(216, 'Sta. Quiteria', '1402', 1),
(217, 'University Hills', '1407', 1),
(218, 'Almanza', '1750', 2),
(219, 'Manuyo', '1744', 2),
(220, 'Pulang Lupa', '1742', 2),
(221, 'Zapote', '1742', 2),
(222, 'Bangkal', '1233', 3),
(223, 'Bel-Air', '1209', 3),
(224, 'Cembo', '1214', 3),
(225, 'Comembo', '1217', 3),
(226, 'Dasmarinas Village', '1221', 3),
(227, 'Forbes Park', '1219', 3),
(228, 'Guadalupe Nuevo', '1212', 3),
(229, 'Guadalupe Viejo', '1211', 3),
(230, 'La Paz', '1204', 3),
(231, 'Singkamas', '1204', 3),
(232, 'Tejeros', '1204', 3),
(233, 'Carmona', '1207', 3),
(234, 'Pasong Tamo', '1231', 3),
(235, 'Pembo', '1218', 3),
(236, 'Pinagkaisahan', '1213', 3),
(237, 'Poblacion', '1210', 3),
(238, 'East Rembo', '1216', 3),
(239, 'West Rembo', '1215', 3),
(240, 'Rizal', '1208', 3),
(241, 'Urdaneta', '1225', 3),
(242, 'Acacia', '1474', 4),
(243, 'Dampalit', '1480', 4),
(244, 'Flores', '1471', 4),
(245, 'Longos', '1472', 4),
(246, 'Maysilo', '1477', 4),
(247, 'Muzon', '1479', 4),
(248, 'Potrero', '1475', 4),
(249, 'Santolan', '1478', 4),
(250, 'Tonsuya', '1473', 4),
(251, 'Addition Hills', '1550', 5),
(252, 'Bagong Silang', '1550', 5),
(253, 'Barangka Ilaya', '1550', 5),
(254, 'Daang Bakal', '1550', 5),
(255, 'Hangdang Bato Itaas', '1550', 5),
(256, 'Hulo', '1550', 5),
(257, 'Highway Hills', '1550', 5),
(258, 'Namayan', '1550', 5),
(259, 'San Jose', '1550', 5),
(260, 'Pleasant Hills', '1550', 5),
(261, 'Poblacion', '1550', 5),
(262, 'Burol', '1550', 5),
(263, 'Barangka', '1803', 22),
(264, 'Dela Pena', '1804', 22),
(265, 'Malanday', '1805', 22),
(266, 'Dangka', '1808', 22),
(267, 'Parang', '1809', 22),
(268, 'San Roque', '1801', 22),
(269, 'Calumpang', '1801', 22),
(270, 'Tanongo', '1803', 22),
(271, 'Concepcion', '1807', 22),
(272, 'Marikina Heights', '1810', 22),
(273, 'Alabang', '1780', 23),
(274, 'Ayala Alabang', '1799', 23),
(275, 'Bayanan', '1772', 23),
(276, 'Buli', '1771', 23),
(277, 'Kupang', '1771', 23),
(278, 'Pearl Heights', '1775', 23),
(279, 'Pleasant Village', '1777', 23),
(280, 'Poblacion', '1776', 23),
(281, 'Putatan', '1772', 23),
(282, 'Sucat', '1770', 23),
(283, 'Suzana Heights', '1774', 23),
(284, 'Tunasan', '1773', 23),
(285, 'Daanghari', '1409', 24),
(286, 'San Jose', '1409', 24),
(287, 'San Rafael Village', '1409', 24),
(288, 'San Roque', '1409', 24),
(289, 'Sipac-Almacen', '1409', 24),
(290, 'Tangos', '1489', 24),
(291, 'Tanza', '1490', 24),
(292, 'Bangculasi', '1409', 24),
(293, 'Bagumbayan North', '1409', 24),
(294, 'Bagumbayan South', '1409', 24),
(295, 'Baclaran', '1702', 25),
(296, 'Don Bosco', '1700', 25),
(297, 'Don Galo', '1700', 25),
(298, 'La Huerta', '1700', 25),
(299, 'Merville', '1700', 25),
(300, 'Moonwalk', '1709', 25),
(301, 'Pulo', '1706', 25),
(302, 'San Antonio', '1707', 25),
(303, 'San Dionisio', '1700', 25),
(304, 'San Isidro', '1700', 25),
(305, 'San Martin de Porres', '1700', 25),
(306, 'Sun Valley', '1700', 25),
(307, 'Tambo', '1701', 25),
(308, 'Vitalez', '1700', 25),
(309, 'United Subdivision', '1713', 25),
(310, 'Barangay 1', '1300', 26),
(311, 'Barangay 10', '1300', 26),
(312, 'Barangay 20', '1300', 26),
(313, 'Barangay 30', '1300', 26),
(314, 'Barangay 40', '1300', 26),
(315, 'Barangay 50', '1300', 26),
(316, 'Barangay 60', '1300', 26),
(317, 'Barangay 70', '1300', 26),
(318, 'Barangay 80', '1300', 26),
(319, 'Barangay 90', '1300', 26),
(320, 'Barangay 100', '1300', 26),
(321, 'Barangay 110', '1300', 26),
(322, 'Barangay 120', '1300', 26),
(323, 'Barangay 130', '1300', 26),
(324, 'Barangay 140', '1300', 26),
(325, 'Bagong Ilog', '1600', 27),
(326, 'Bagong Katipunan', '1600', 27),
(327, 'Buting', '1600', 27),
(328, 'Dela Paz', '1600', 27),
(329, 'Kalawaan', '1600', 27),
(330, 'Kapasigan ', '1600', 27),
(331, 'Kapitolyo', '1603', 27),
(332, 'Malinao', '1600', 27),
(333, 'Manggahan', '1611', 27),
(334, 'Maybunga', '1607', 27),
(335, 'Pinagbuhatan', '1602', 27),
(336, 'Pineda', '1600', 27),
(337, 'Rosario', '1609', 27),
(338, 'San Joaquin', '1601', 27),
(339, 'San Miguel', '1600', 27),
(340, 'Aguho', '1620', 28),
(341, 'Sta. Ana', '1621', 28),
(342, 'Holy Spirit', '1127', 29),
(343, 'Fairview', '1118', 29),
(344, 'Batasan Hills', '1126', 29),
(345, 'Commonwealth', '1121', 29),
(346, 'Damayan', '1104', 29),
(347, 'Katipunan', '1105', 29),
(348, 'Loyola Heights', '1108', 29),
(349, 'Maharlika', '1114', 29),
(350, 'Mangga', '1109', 29),
(351, 'Milagrosa', '1109', 29),
(352, 'Pansol', '1108', 29),
(353, 'Pinagkaisahan', '1111', 29),
(354, 'Tandang Sora', '1116', 29),
(355, 'Ugong Norte', '1110', 29),
(356, 'Valencia', '1112', 29),
(357, 'Batis', '1500', 30),
(358, 'Eisenhower-Crame', '1504', 30),
(359, 'Greenhills', '1502', 30),
(360, 'Halo-Halo', '1500', 30),
(361, 'Isabelita', '1500', 30),
(362, 'Little Baguio', '1500', 30),
(363, 'Maytunas', '1500', 30),
(364, 'Pedro Cruz', '1500', 30),
(365, 'Rivera', '1500', 30),
(366, 'Salapan', '1500', 30),
(367, 'Sta. Lucia', '1500', 30),
(368, 'Tibagan', '1500', 30),
(369, 'West Crame', '1500', 30),
(370, 'Bagumbayan', '1630', 31),
(371, 'Bambang', '1630', 31),
(372, 'Bicutan', '1631', 31),
(373, 'Central Signal Village', '1637', 31),
(374, 'Hagonoy', '1630', 31),
(375, 'Katuparan', '1637', 31),
(376, 'Lower Bicutan', '1637', 31),
(377, 'Nichols-McKinley', '1634', 31),
(378, 'Pinagsama', '1637', 31),
(379, 'Signal Village', '1630', 31),
(380, 'Tuktukan', '1637', 31),
(381, 'Ususan', '1632', 31),
(382, 'Wawa', '1630', 31),
(383, 'Magtanggol', '1620', 28),
(384, 'Poblacion', '1620', 28),
(385, 'San Pedro', '1620', 28),
(386, 'Sta. Ana', '1621', 28),
(387, 'Santo Rosario-Kanluran', '1620', 28),
(388, 'Santo Rosario-Silangan', '1620', 28),
(389, 'Tabacalera', '1620', 28),
(390, 'Balangkas', '1445', 32),
(391, 'Bignay', '1440', 32),
(392, 'Bisig', '1440', 32),
(393, 'Caloong', '1445', 32),
(394, 'Dalandanan', '1443', 32),
(395, 'Isla', '1440', 32),
(396, 'Karuhatan', '1441', 32),
(397, 'Laoag Bato', '1447', 32),
(398, 'Malanday', '1444', 32),
(399, 'Maysan', '1440', 32),
(400, 'Palasan', '1440', 32),
(401, 'Parada', '1440', 32),
(402, 'Pasolo', '1444', 32),
(403, 'Pulo', '1444', 32),
(404, 'Punturin', '1447', 32);

-- --------------------------------------------------------

--
-- Table structure for table `billing_details_tbl`
--

CREATE TABLE `billing_details_tbl` (
  `billing_details_id` int(11) NOT NULL,
  `spec_service_id` int(11) NOT NULL,
  `amount` decimal(8,2) NOT NULL,
  `billing_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `billing_tbl`
--

CREATE TABLE `billing_tbl` (
  `billing_id` int(11) NOT NULL,
  `billing_date` date DEFAULT NULL,
  `total_amount` decimal(8,2) DEFAULT NULL,
  `patient_id` int(11) NOT NULL,
  `discounted` decimal(8,2) DEFAULT NULL,
  `balance` decimal(8,2) DEFAULT NULL,
  `isPaid` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `city_tbl`
--

CREATE TABLE `city_tbl` (
  `city_id` int(11) NOT NULL,
  `city_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `city_tbl`
--

INSERT INTO `city_tbl` (`city_id`, `city_name`) VALUES
(1, 'Caloocan'),
(2, 'Las Pinas'),
(3, 'Makati'),
(4, 'Malabon'),
(5, 'Mandaluyong'),
(6, 'Manila (Binondo)'),
(7, 'Manila (Ermita)'),
(8, 'Manila (Intramuros)'),
(9, 'Manila (Malate)'),
(10, 'Manila (Paco)'),
(11, 'Manila (Pandacan)'),
(12, 'Manila (Port Area)'),
(13, 'Manila (Quiapo)'),
(14, 'Manila (Sampaloc)'),
(16, 'Manila (San Miguel)'),
(17, 'Manila (San Nicolas)'),
(18, 'Manila (Santa Ana)'),
(19, 'Manila (Santa Cruz)'),
(20, 'Manila (Santa Mesa)'),
(21, 'Manila (Tondo)'),
(22, 'Marikina'),
(23, 'Muntinlupa'),
(24, 'Navotas'),
(25, 'Paranaque'),
(26, 'Pasay'),
(27, 'Pasig'),
(28, 'Pateros'),
(29, 'Quezon City'),
(30, 'San Juan'),
(31, 'Taguig'),
(32, 'Valenzuela');

-- --------------------------------------------------------

--
-- Table structure for table `clinic_contact_tbl`
--

CREATE TABLE `clinic_contact_tbl` (
  `clinic_contact_id` int(11) NOT NULL,
  `clinic_contact` varchar(15) NOT NULL,
  `clinic_location` varchar(250) NOT NULL,
  `clinic_days` text NOT NULL,
  `clinic_open_time` time NOT NULL,
  `clinic_close_time` time NOT NULL,
  `clinic_map` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `clinic_contact_tbl`
--

INSERT INTO `clinic_contact_tbl` (`clinic_contact_id`, `clinic_contact`, `clinic_location`, `clinic_days`, `clinic_open_time`, `clinic_close_time`, `clinic_map`, `status`) VALUES
(1, '09123733941', 'Quezon City', 'Monday-Friday', '00:00:00', '00:00:00', '', 1),
(2, '09123739520', 'Marikina City', 'Monday-Saturday', '00:00:00', '00:00:00', '', 1),
(3, '981-0300', 'East Avenue, Quezon City 1100 Philippines', 'Monday-Friday', '08:00:00', '17:00:00', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `company_tbl`
--

CREATE TABLE `company_tbl` (
  `company_id` int(11) NOT NULL,
  `company_name` varchar(160) DEFAULT NULL,
  `company_desc` text,
  `company_clinic_logo` varchar(150) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `company_tbl`
--

INSERT INTO `company_tbl` (`company_id`, `company_name`, `company_desc`, `company_clinic_logo`, `status`) VALUES
(1, 'Dr. Joy Gali', 'Romero Company Description', '_CompanyLogo_1537954571.png', 0);

-- --------------------------------------------------------

--
-- Table structure for table `contact_us_tbl`
--

CREATE TABLE `contact_us_tbl` (
  `contact_us_id` int(11) NOT NULL,
  `contact_name` varchar(200) NOT NULL,
  `contact_email` varchar(80) DEFAULT NULL,
  `contact_phone` varchar(15) NOT NULL,
  `contact_inquiry` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `contact_us_tbl`
--

INSERT INTO `contact_us_tbl` (`contact_us_id`, `contact_name`, `contact_email`, `contact_phone`, `contact_inquiry`, `status`, `created_at`, `updated_at`) VALUES
(8, 'Annthonite', 'annthoniteb@gmail.com', '09485044516', 'Hi', 0, '2018-11-03 10:11:20', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `expense_tbl`
--

CREATE TABLE `expense_tbl` (
  `expense_id` int(11) NOT NULL,
  `name` varchar(160) NOT NULL,
  `cost` decimal(8,2) NOT NULL,
  `expense_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `faq_tbl`
--

CREATE TABLE `faq_tbl` (
  `faq_id` int(11) NOT NULL,
  `faq_question` text NOT NULL,
  `faq_answer` text NOT NULL,
  `faq_category` varchar(60) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `faq_tbl`
--

INSERT INTO `faq_tbl` (`faq_id`, `faq_question`, `faq_answer`, `faq_category`, `status`) VALUES
(10, 'What is vascular disease?', 'Blood vessels --arteries carrying oxygen-rich blood and veins carrying blood back to the heart -- are the roadways of the circulatory system.\r\nWithout smoothly flowing blood, the body cannot function. Conditions such as hardening of the arteries can create “traffic jams” when plaque obstructs the flow of blood to any part of the body. Other vascular problems may be congenital or develop after pregnancy or a health issue.', 'surgery', 0),
(11, 'What is a vascular surgeon?', 'Vascular surgeons are highly trained to treat diseases of the vascular system. Simply being referred to a vascular surgeon does not automatically mean you will have surgery. Vascular surgeons can do any kind of vascular surgery, but many patients don’t require it and can be treated with medication or exercise.', 'surgery', 1),
(12, 'What is chronic venous insufficiency (CVI)?', 'The illness that generates the most queries to SVS occurs in the veins, which return blood to the heart to receive more oxygen. Veins have valves that push the blood “uphill” to the heart.\r\nCVI occurs when valves in your veins (usually in the legs but sometimes the arms) don\'t work properly, causing blood to pool in your extremities and putting increased pressure on the walls of the veins. Valve dysfunction can be hereditary or due to valve destruction after a deep vein thrombosis (DVT) or blood clot.', 'surgery', 1),
(13, 'What is a carotid endarterectomy (CEA)?', 'Carotid arteries in the neck bring oxygenated blood to the brain. If a carotid artery becomes more than 50 percent blocked, a vascular surgeon may recommend that the artery be cleaned out with a CAE procedure to prevent a stroke. Like many kinds of vascular surgery, CEA is a constantly evolving procedure, so be sure to ask the surgeon about all your options.', 'surgery', 1),
(14, 'What is an abdominal aortic aneurysm (AAA)?', 'Many people have heard of brain aneurysms in which a brain blood vessel bursts, but the same thing can happen in the aorta, the largest artery in the body.\r\nThe aorta runs from the heart to the lower abdomen, where it splits off to send blood to the legs. Aneurysms can occur anywhere along the aorta. An AAA is extremely serious, and is the 10th leading cause of death in men over age 55. While aneurysms tend to run in families, the good news is that today surgeons have much better tools and techniques to save lives endangered by AAA.', 'surgery', 1),
(15, 'What is endovascular repair of abdominal aortic aneurysms (EVAR)?', 'One of the most important advances in the treatment of AAA is EVAR, in which the aorta can be repaired through a small incision. Vascular surgeons slide very tiny equipment through the arteries to the site of the aneurysm and install a stent. Depending on where the aneurysm is located, they may perform more complex repairs by sewing in a device that exactly fits with your anatomy.', 'surgery', 1),
(16, 'What is an angiogram?', 'An angiogram is an X-ray procedure that can be both diagnostic and therapeutic. It is considered the gold standard for evaluating blockages in the arterial system. An angiogram detects blockages using X-rays taken during the injection of a contrast agent (iodine dye). The procedure provides information that helps your vascular surgeon determine your best treatment options.', 'surgery', 1),
(17, 'What is a vascular specialist?', 'A vascular surgeon is a specialist who cares for patients with diseases that affect the arteries, veins, and lymphatic systems exclusive of the heart and intracranial (within the brain) circulations. Hardening of the arteries or atherosclerosis is a common cause of vascular disease. Specialists in this field perform open operations, endovascular catheter-based procedures, and non-invasive vascular testing and interpretations. Common problems treated include stroke prevention by managing arterial blockages in the neck and upper chest, revascularization of upper and lower limbs for poor circulation, management of aneurysms such as occur in the abdomen and elsewhere, vascular trauma, and varicose veins. Treatment also includes angioplasty—stenting of arterial blockages, repair of abdominal aneurysms by less-invasive endovascular techniques—as well as medical management of vascular disorders. Vascular surgeons are board certified in general surgery and then complete additional training and testing in vascular surgery.', 'service', 1),
(18, 'What kinds of vascular conditions do you treat?', 'At Surgical Care Associates, we offer treatment for a wide variety of vascular conditions and disorders. These include PAD, carotid artery stenosis, aneurysms, renal artery stenosis and more. To learn more about the disorders we treat, see our Conditions page.', 'service', 1),
(19, 'What kind of treatments and procedures does Surgical Care Associates have to offer?', 'We provide a variety of advanced procedures and treatment methods for the conditions we treat. To learn more about the surgical and non-surgical treatments we offer at our offices, please see our Services page.', 'service', 1),
(20, 'Do you have a Vascular Lab on-site? Is it fully accredited?', 'Yes. Our Vascular Lab is ICAVL accredited for non-invasive studies.', 'service', 1),
(21, 'Are you accepting new patients?', 'Yes we are! To schedule an appointment with one of our skilled vascular specialists, please contact us today.', 'service', 1),
(22, 'When can I go back to work after my heart attack or heart surgery?', 'The amount of time you should be off from work is determined on an individual basis by your physician. Depending on the amount of damage sustained from a heart attack, your general state of health, whether you had heart surgery and what type of work you do.', 'recovery', 1),
(23, 'When can I travel again?', 'Check with your physician before taking long car trip, going to the mountains or to a place that is very hot and humid. If your physician agrees, by the fifth week after hospitalization you may ride to an elevation of 8,000 feet or less.\r\nAirplane travel is usually permitted within one to two months after discharge from the hospital. Remember that you should plan ahead so you don\'t have to hurry through the airport or carry heavy luggage. It is also important to consider how strenuous and/or stressful the activities will be once you reach your destination. For example, long sightseeing tours, long distance walking, stressful business trips should be discussed with your physician.', 'recovery', 1),
(24, 'When can I resume sex after my heart attack or heart surgery?', 'It is natural for a couple to be nervous about resuming sexual activity after a heart attack and/or heart surgery. Many people are afraid sexual relations may place too much strain on the heart. However, sex with your usual partner is safe approximately three to four weeks following a heart attack or surgery. It is important to be patient, to communicate openly and to allow both partners to be emotionally and physically ready in order to alleviate any anxiety either may feel.', 'recovery', 1),
(25, 'Will bypass surgery fix my heart?', 'Coronary artery bypass grafts supply the heart muscle with the oxygen and blood supply it needs to function more normally and to relieve chest discomfort. The underlying disease, atherosclerosis, is not cured when this surgery is performed. Numerous research reports show a substantial correlation between positive lifestyle behaviors and the reduced risk of recurrent heart disease. Initiating changes in certain areas of your everyday life will help you develop and maintain a healthy heart.', 'recovery', 1),
(26, 'Is it normal to be depressed after a heart attack or heart surgery?', 'Yes. Having a heart attack or heart surgery is a frightening experience and one that is frequently accompanied by a variety of emotions for most patients. Some individuals have a tendency to deny that anything is wrong. Others may experience varying degrees of depression, anxiety, anger, and frustration. All of these feelings are common and very natural. Just like your physical recovery, emotional recovery requires time and patience. It is important to identify your feelings, accept them and work through them in order to get back to a healthy and normal lifestyle.', 'recovery', 1),
(27, 'How do I progress my activity after a heart attack or bypass surgery?', 'The best guide for activity the first two months following a heart attack or bypass surgery is to walk at a comfortable pace that does not make you short of breath or feel you are having to exert yourself to keep up the pace. The walk should be easy, slow, and on flat ground. Do what you can do without becoming tired. Rest when you begin to tire. Never overexert yourself during the first 8 weeks of recovery.', 'recovery', 1),
(28, 'What information will the Patient Services Representative need to schedule an appointment?', 'When calling to schedule an appointment please have the following patient information ready:\r\nPatient’s full name (including middle initial)\r\nContact number\r\nEmail address\r\nPreferred Date and Time\r\nPurpose of the appointment', 'appointment', 1),
(29, 'What if I can\'t make my appointment and I need to reschedule?', 'Please call your physician’s office as soon as you realize you will not be able to keep your appointment. We prefer all cancellations be made at least 24 hours prior to your scheduled appointment time. This will allow us to give another patient the opportunity to be seen.', 'appointment', 1),
(30, 'If I call with a question for the staff or doctor, when can I expect a call back?', 'Our staffs and doctors are with patients throughout the day, so it is usually not possible for them to immediately answer phone calls. We will return your call as soon as possible. To help us get back to you quickly leave us your full name, date of birth, reason for the call and current phone number.', 'appointment', 1),
(31, 'Will you bill my insurance?', 'Yes. As a service to our patients, primary insurance is billed. We have recently enhanced our system to accommodate automatic billing of secondary insurance. Please be sure to keep us informed of your insurance coverage.', 'payments', 1),
(32, 'What Is The Difference Between Varicose Veins And Spider Veins?', 'Varicose veins are larger, bumpy, and have a thick rope-like appearance, potentially causing significant pain and discomfort. Spider Veins are visible at the surface of the skin but are not raised. Prior to any type of treatment a specialist will review your case and discuss the best treatment options you.', 'others', 1),
(33, 'Do you accept insurance?', 'Yes, we accept most all insurances.', 'payments', 1),
(34, 'What Causes Varicose Veins And Why Do I Have Them?', 'Heredity is an important factor in the development of both varicose and spider veins. Varicose veins are caused by malfunctioning valves that help carry blood to the heart. When the vein fails the blood is no longer being pushed upwards, causing the blood to pool in the vein. The vein then becomes enlarged, ropelike and raised.', 'others', 1),
(35, 'Why Is An Ultrasound Used Before Treatment?', 'The ultrasound assists in identifying incompetent veins and when reflux is present. Reflux is when the blood leaks through the damaged valve.', 'others', 1),
(36, 'What is vascular disease?', 'Blood vessels --arteries carrying oxygen-rich blood and veins carrying blood back to the heart -- are the roadways of the circulatory system. Without smoothly flowing blood, the body cannot function. Conditions such as hardening of the arteries can create “traffic jams” when plaque obstructs the flow of blood to any part of the body. Other vascular problems may be congenital or develop after pregnancy or a health issue.', 'others', 0);

-- --------------------------------------------------------

--
-- Table structure for table `features_tbl`
--

CREATE TABLE `features_tbl` (
  `features_id` int(11) NOT NULL,
  `feature_title` varchar(80) NOT NULL,
  `feature_description` text NOT NULL,
  `feature_image` varchar(150) DEFAULT NULL,
  `feature_video` text,
  `feature_order` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `features_tbl`
--

INSERT INTO `features_tbl` (`features_id`, `feature_title`, `feature_description`, `feature_image`, `feature_video`, `feature_order`, `status`) VALUES
(6, 'Echocardiography', 'Echocardiography (echo) is a painless test that uses sound waves to create pictures of your heart. This test gives your doctor information about the size and shape of your heart and how well your heart\'s chambers and valves are working.\r\n\r\n2-D (two-dimensional) echocardiogram. This technique is used to see the actual structures and motion of the heart structures. A 2-D echo view looks cone-shaped on the monitor, and the real-time motion of the heart\'s structures can be seen. This allows the doctor to see the various heart structures at work and evaluate them.\r\n\r\n3-D (three-dimensional) echocardiogram. 3-D echo technique captures 3-D views of the heart structures with greater depth than 2-D echo. The live or \"real time\" images allow for a more accurate assessment of heart function by using measurements taken while the heart is beating. 3-D echo shows enhanced views of the heart\'s anatomy and can be used to determine best treatment plan.', NULL, NULL, NULL, 0),
(7, '3D echo Droppler', 'The assessment of ventricular systolic function is one of the most crucial tasks of echocardiography. Evaluation of the right ventricle (RV) function has a very significant role in prognosing the outcome of patients with myocardial infarction (MI), especially in those with right ventricular myocardial infarction (RVMI). Imaging of the RV is difficult owing to its complex crescent-shaped structure, heavy trabeculation, and retrosternal location.1 Conventional two-dimensional echocardiography does not provide exact images of this chamber. Therefore, tissue Doppler echocardiography (TDE) and especially real-time three-dimensional echocardiography (RT3DE) are gaining importance in the assessment of RV performance. They become more commonly used owing to their accuracy, feasibility, and reliability. The accuracy and reliability of these methods may be compared with the Cardiac Magnetic Resonance (CMR) imaging, ventriculography, and thermodilution,6 but they are far more accessible, safer and easier to perform.', NULL, NULL, NULL, 0),
(8, 'Dobutamine Stress Echocardiogram', 'A dobutamine stress echocardiogram (DSE) may be used if you are unable to exercise. Dobutamine is put in a vein and causes the heart to beat faster. It mimics the effects of exercise on the heart.\r\n\r\nDuring an echo, a transducer (like a microphone) sends out ultrasonic sound waves at a frequency too high to be heard. When the transducer is placed on the chest at certain locations and angles, the ultrasonic sound waves move through the skin and other body tissues to the heart tissues, where the waves bounce or \"echo\" off of the heart structures. The transducer picks up the reflected waves and sends them to a computer. The computer displays the echoes as images of the heart walls and valves.', NULL, NULL, NULL, 0),
(9, 'Stress Test and Treadmill Test', 'The exercise stress test -- also known as an exercise electrocardiogram, treadmill test, graded exercise test, or stress EKG -- is used most often. It lets your doctor know how your heart responds to being pushed. You\'ll walk on a treadmill or pedal a stationary bike. It gets more difficult as you go. Your electrocardiogram, heart rate, and blood pressure will be tracked throughout.', NULL, NULL, NULL, 0),
(10, 'Electrocardiogram', 'The electrocardiogram (ECG or EKG) is a diagnostic tool that is routinely used to assess the electrical and muscular functions of the heart. While it is a relatively simple test to perform, the interpretation of the ECG tracing requires significant amounts of training.', NULL, NULL, NULL, 0),
(11, 'Plethysmography', 'Plethysmography measures changes in volume in different areas of your body. It measures these changes with blood pressure cuffs or other sensors. These are attached to a machine called a plethysmograph.\r\n\r\nPlethysmography is especially effective in detecting changes caused by blood flow. It can help your doctor determine if you have a blood clot in your arm or leg. It can also help your doctor calculate the volume of air your lungs can hold.', NULL, NULL, NULL, 0),
(12, 'Doppler Ultrasound', 'A Doppler ultrasound is a test that uses high-frequency sound waves to measure the amount of blood flow through your arteries and veins, usually those that supply blood to your arms and legs. Vascular flow studies, also known as blood flow studies, can detect abnormal flow within an artery or blood vessel.', NULL, NULL, NULL, 0),
(13, 'Duplex Ultrasound', 'A duplex ultrasound combines: Traditional ultrasound: This uses sound waves that bounce off blood vessels to create pictures. Doppler ultrasound: This records sound waves reflecting off moving objects, such as blood, to measure their speed and other aspects of how they flow.', NULL, NULL, NULL, 0),
(14, 'Laser Doppler Imaging', 'Laser Doppler Imaging (LDI) is used to measure superficial blood flow in the skin. A laser Doppler perfusion imager functions by projecting an infrared laser beam over the skin. When light interacts with moving blood cells a small portion of it is shifted, detected, and converted into an electrical signal. LDI provides a direct measure of female sexual response that does not require genital contact; signals are gathered at a depth of two to three millimetres below the skins surface.', NULL, NULL, NULL, 0),
(15, 'Holter Monitor', 'A Holter monitor is a battery-operated portable device that measures and records your hearts activity (ECG) continuously for 24 to 48 hours or longer depending on the type of monitoring used. The device is the size of a small camera. It has wires with silver dollar-sized electrodes that attach to your skin. The Holter monitor and other devices that record your ECG as you go about your daily activities are called ambulatory electrocardiograms', NULL, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `holiday_tbl`
--

CREATE TABLE `holiday_tbl` (
  `holiday_id` int(11) NOT NULL,
  `holiday_date` date NOT NULL,
  `day` varchar(15) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `medical_file_record_tbl`
--

CREATE TABLE `medical_file_record_tbl` (
  `medical_file_record_id` int(11) NOT NULL,
  `file_title` varchar(160) NOT NULL,
  `file` text NOT NULL,
  `medical_record_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `medical_records_tbl`
--

CREATE TABLE `medical_records_tbl` (
  `medical_record_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `med_hist_date` date NOT NULL,
  `weight` decimal(5,2) NOT NULL,
  `height` varchar(6) NOT NULL,
  `med_hist_procedure` text NOT NULL,
  `temperature` decimal(3,1) NOT NULL,
  `treatment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `news_tbl`
--

CREATE TABLE `news_tbl` (
  `news_id` int(11) NOT NULL,
  `news_title` varchar(160) NOT NULL,
  `news_desc` text NOT NULL,
  `news_picture` varchar(190) NOT NULL,
  `news_order` int(11) NOT NULL,
  `isActive` tinyint(1) NOT NULL DEFAULT '1',
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `news_tbl`
--

INSERT INTO `news_tbl` (`news_id`, `news_title`, `news_desc`, `news_picture`, `news_order`, `isActive`, `status`) VALUES
(7, 'SEC. FRANCISCO DUQUE III VISITS PATIENTS WITH LEPTOSPIROSIS AT NKTI GYM', 'Department of Health (DOH) Sec. Francisco Duque III went to the National Kidney and Transplant Institute in Quezon City to visit Leptospirosis patients, with some already staying in the hospital’s gymnasium due to their numbers.\r\n\r\nIn an interview with DZRH, Duque confirmed that, as of June 22, eight patients have died due to Leptospirosis.\r\n\r\nThe Health secretary reminded the public to wear boots and avoid wading through floods, especially if there are open wounds in your feet to avoid being infected by Leptospira bacteria.\r\n\r\nAll over the Philippines, the DOH has recorded 1,033 cases of Leptospirosis from January 1 to June 9, while 92 people have died due to the said infection.\r\n\r\n“Sinasabi natin paulit-ulit kayo ay mag-suot ng botas at lalong-lalo na kung may mga sugat ang inyong mga paa. Huwag na huwag kayong malublob ang inyong mga paa sa baha,” Duque said.\r\n\r\nLeptospirosis is an infection caused by Leptospira bacteria, which is usually transmitted through the urine of rats, and could result to kidney failure, brain damage, internal bleeding, and death.\r\n\r\nSymptoms of the disease include include fever, headache, muscle ache, abdominal pain, reddening of the eyes, and skin rash.\r\n\r\nAccording to Dr. Romina Danguilan, chief of the Hemodialysis unit of the NKTI, 22 patients are currently undergoing dialysis after the Leptospira bacteria affected their kidney.', 'SEC. FRANCISCO DUQUE III VISITS PATIENTS WITH LEPTOSPIROSIS AT NKTI GYM_NewsImg_1537955088.jpg', 2, 1, 0),
(8, 'DR. JADE JAMIAS WANTS PHILIPPINES TO LEAD ASEAN IN ERADICATING LIVER DISEASES', 'A gastrointestinal and liver specialist has vowed to be a warrior in placing the Philippines at the top among ASEAN members in eradicating gastrointestinal and liver diseases.\r\n\r\n\"It’s a collective effort. The government must spend more for public hospitals—higher than what private hospitals do in eradicating gut and liver diseases,\" says Dr. Jade Jamias. \"We need machines and technology for liver and biliary surgeries, including liver transplantation. We must lower the cost of these procedures.\"\r\n\r\nThe 44-year-old is the head of the National Kidney Transplant Institute\'s (NKTI) Liver Center, a world-class facility in liver transplant and in the management of hepatic and pancreaticobiliary disorders, \"at par with the region and the country’s best private hospitals,\" he declares.\r\n\r\n\"But we want more patients; improved treatment; accessible vaccinations; and intensified awareness campaign. The Philippines must do more in comparison with efforts to end gut and liver diseases region-wide,\" Jamias admits.\r\n\r\nThe NKTI boasts of a total of 29 liver transplant operations since 1988. Twenty-one of these were performed before its Liver Center activated its transplant program from 2012 to 2014. It was designed to accommodate five liver transplant operations a year, but has only had eight cases since 2012. One patient, a 54-year-old taxi driver, underwent a successful simultaneous liver and kidney transplant operation in 2014.\r\n\r\n\"The NKTI has performed double liver-kidney, or pancreas-kidney transplant operations ahead of any other transplant center in Asia,\" attests NKTI executive director Dr. Rosemarie Liquete, the country’s first woman kidney transplant doctor.\r\n\r\n\"Perfecting the country’s capability to end liver problem is simultaneous with perfecting liver transplantation. The NKTI is doing that,\" says Jamias.\r\n\r\nIn 2014, the NKTI, the health department, and the Philippine Charity Sweepstakes Office (PCSO) signed a memorandum of agreement allowing government agencies to shoulder P1.5 million for every poor liver transplant patient, lowering NKTI’s cost to P2.5 million. The procedure costs P4 million in private institutions. \r\n\r\nWith NKTI’s 28 liver transplant cases since 1988; St Luke’s Medical Center’s 12 liver transplant operations since 2011; and Medical City’s three cases since 2009, the Philippines boasts of a total of 43 liver transplant cases. In comparison, Taiwan (Asia’s liver transplant center) has conducted 1,006 liver transplant operations since 1984; Singapore, a total of 276 cases since 1990.\r\n\r\nThe Philippines will catch up soon, Jamias says with optimism. The government’s free medical education program in state universities and colleges can produce more doctors. There are only 500 GI specialists and 20 liver specialists for 100 million Filipinos. Half of these specialists are based in Metro Manila.', 'DR. JADE JAMIAS WANTS PHILIPPINES TO LEAD ASEAN IN ERADICATING LIVER DISEASES_NewsImg_1537955410.jpg', 1, 0, 0),
(9, 'Cagent Vascular raises US$11.87M funding', 'Cagent Vascular has announced the completion of US$11.87 million in Series B funding. The round was led by two strategic investors including one that participated in the Series A financing. Additional participants included Balestier Investments, Ben Franklin Technology Partners1, Synergy Ventures, and other private investors. Proceeds will be used to scale manufacturing and initiate a limited launch of Cagent Vascular’s first product, the Serranator Alto.', 'Cagent Vascular raises US$11.87M funding_NewsImg_1537955667.png', 5, 1, 1),
(10, 'Cook Medical receives FDA approval for first 5mm diameter SFA drug-eluting stent', 'Cook Medical have announced that a new 5mm diameter version of Zilver PTX was approved by the US Food and Drug Administration (FDA). It is the first 5mm drug-eluting stent in the USA with lengths available up to 140mm that is indicated to treat vessels as small as 4mm in diameter. The range of Zilver PTX stent diameters now available will address treatment of vessel sizes from 4–7mm in diameter. The new diameter is better sized for smaller anatomy than previous sizes of the stent and provides an additional option to treat patients with lesions in their superficial femoral arteries (SFAs).', 'Cook Medical receives FDA approval for first 5mm diameter SFA drug-eluting stent_NewsImg_1537955813.jpg', 4, 0, 0),
(11, 'Vascular Simulations launches Replicator PRO for realistic replication in endovascular simulations', 'Medical technology company Vascular Simulations has released Replicator PRO, a realistic vascular replication system, at the 2018 Transcatheter Cardiovascular Therapeutics meeting (TCT; 21–25 September, San Diego, USA).', 'Vascular Simulations launches Replicator PRO for realistic replication in endovascular simulations_NewsImg_1537955931.jpg', 5, 1, 1),
(12, 'HART PAD blood test accurately diagnoses peripheral arterial disease in diabetic patients', 'Prevencio has announced data demonstrating its HART PAD test accurately diagnoses peripheral arterial disease (PAD) in diabetes mellitus patients, a patient population in which PAD prevalence has traditionally been difficult to assess. Researchers believe these important findings, presented at the 2018 European Society of Cardiology Congress (ESC; 25–29 August, Munich, Germany), could lead to early identification of PAD and improve patient clinical outcomes, as well as prevent patients without PAD from undergoing unnecessary, expensive, and invasive tests.', 'HART PAD blood test accurately diagnoses peripheral arterial disease in diabetic patients_NewsImg_1537956034.jpg', 6, 1, 1),
(13, 'Gore moulding and occlusion balloon for endovascular aortic repair receives approval in the USA, Japan, and Europe', 'Gore has announced FDA 510(k) clearance, approval from the Japanese Ministry of Health, Labour, and Welfare, and receipt of CE mark for the innovative Gore moulding and occlusion balloon, a compliant polyurethane balloon catheter designed in close collaboration with clinicians to assist in the expansion of self-expanding stent grafts or to temporarily occlude large-diameter vessels. The new device meets all endovascular aortic repair (EVAR) procedural requirements—a single balloon that replaces the need for multiple moulding and occlusion balloons.', 'Gore moulding and occlusion balloon for endovascular aortic repair receives approval in the USA, Japan, and Europe_NewsImg_1537956109.jpg', 7, 1, 1),
(14, 'Bayer announces new licensed indication for use of Xarelto in patients with coronary or peripheral arterial disease', 'Xarelto, co-administered with aspirin, is indicated in the EU for the prevention of atherothrombotic events in adult patients with coronary artery disease (CAD) or symptomatic peripheral arterial disease (PAD) at high risk of ischaemic events.', 'Bayer announces new licensed indication for use of Xarelto in patients with coronary or peripheral arterial disease_NewsImg_1537956172.png', 8, 1, 1),
(17, 'Microcirculation: Exploring and understanding the unknown', 'Everything is in the microcirculation. According to Dr Ricardo Quintos II, most medical problems, particularly serious ones like stroke, kidney failure or heart attack, can trace its roots to circulation. \r\nMedical practitioners need to focus on, and have a better understanding of, the blood flow through the smallest vessels in the circulatory system, or microcirculation, he said. Just like vascular surgery, of which Dr Quintos is a pioneer of in the Philippines, he is now setting his sights on looking at the unseen.\r\n“One of the reasons that made me go into vascular is the realization that all these organs are served by the vascular tree,” Quintos told MIMS in an interview. \r\nThe vascular tree is made up of arteries, arterioles, capillaries, venules and veins. All together, these constitute the complex system that is at the heart of circulation - capillary exchange.\r\nTo illustrate the importance of microcirculation, Quintos used cancer as an example. \r\nOne reason there is cancer is because of a disordered growth in the vascular tree supplying cancer cells with too much blood and nutrients, he explained. Using chemotherapy agents is not the answer to treat the cancer because not only will it kill the cancerous cells, but also the normal ones. The better treatment course is to address the vascular problem.\r\n“What you do is just starve the cancer cells. You give antiandrogenic substances so that vascular tree will just shrink. And once that happens, they will have no more blood and will just die.”\r\nA second example is how to treat vascular problems when a patient has a heart attack. Instead of doing a bypass to allow more blood to go to the heart, Quintos recommended making the heart “grow its own arteries.” More specifically, to give androgenic factors to make the arteries grow its own bypasses, which is not only less risky but also more natural.\r\n“And that is what we mean by looking into the microcirculation,” Quintos stressed.\r\nThe vascular surgeon said they have put up their own microcirculatory laboratory and undertaken research on microcirculation. \r\n“All of these vascular procedures will not work if your microcirculation is not working,” he explained.\r\nHe said a heart attack is not the result of blockage in the arteries of the heart, but rather the microcirculation of the heart is not working very well, because the cells there are poor. The brain, Quintos pointed out, stops working not due to poor circulation but because microcirculation to the brain breaks down.\r\nHaving made great inroads in the field of vascular surgery, Quintos now sees microcirculation as the future in medical treatment.\r\n“We have to look into what we cannot see before. And the thing we cannot see in the vascular world is microcirculation,” he said, adding, “Ultimately, it’s all for the patient.”', 'Microcirculation: Exploring and understanding the unknown_NewsImg_1538291775.png', 1, 1, 1),
(18, 'Wanted: Identity branding for peripheral vascular surgeons', 'Vascular surgeons, at least those from the Integrated Vascular Services Complex (iVASC), are faced with a challenge – branding the identity of a peripheral vascular surgeon.\r\n\r\nDr Joy M Gali tells MIMS that they have never had that kind of identity where a patient would automatically think of their specialty in relation to a vascular-related ailment.\r\n\r\nThe new set of National Kidney and Transplant Institute (NKTI) vascular surgeons need to have that kind of identity or branding that would distinguish them from other specialists. Gali is the first graduate of NKTI’s Integrated Vascular Surgery Training Program in 2010 and now serves as consultant and adviser at iVASC.\r\n\r\nThe iVASC is the first integrated center in the Philippines and is located within the compound of the NKTI. It functions as a one-stop center for people afflicted with diseases such as diabetic foot ulcers, varicose veins and aneurysm, among others.\r\n\r\n“Filipino patients do know the existence of vascular diseases but they could be unsure of where to go, so we have to introduce ourselves to them,” Gali said. \r\n\r\nWhen aortic aneurysm or atherosclerosis comes to mind, patients tend to think of specialists, but not a vascular surgeon, she lamented. They are distinct from cardiac and thoracic surgeons. They specialize in veins, arteries, and lymphatics.\r\n\r\nIndividualized care is emphasized in the center, but more importantly, it revolutionized the passive role of a surgeon in patient management.\r\n\r\nHer years of experience in iVASC has taught Gali that a vascular surgeon can take on the role of leader to a team of doctors treating a patient with vascular disease. She found it evolutionary in the sense that working at the center enabled them to get out of the usual “fix-the-body” approach and be more involved in the care of patients holistically.\r\n\r\nDr Ricardo Quintos II, iVASC’s founding head, is proud that the center is now performing 7,000 peripheral vascular procedures annually. \r\n\r\nA female thriving in a male-dominated field, Gali was drawn to vascular surgery primarily due to the uncertainty and “challenging-the-norms” approach of the training program then.\r\n\r\nIn spite the expanded role vascular surgeons play in the center, she was quick to dispel the notion that they were discounting the work of other specialist doctors. It is simply giving them the right to assert their roles in the field they specialize in and know best.\r\n\r\nThey may be making inroads for this medical subspecialty, but the iVASC team hope they eventually achieve that branding so they become top-of-mind when it comes to vascular diseases.', 'Wanted: Identity branding for peripheral vascular surgeons_NewsImg_1538292309.png', 2, 1, 1),
(19, 'Shorter but more focused training for vascular surgery', 'The road to becoming one of the Philippines’ most renowned vascular surgeons was a long one for Dr Ricardo Quintos II. \r\nFour years of pre-med, another four years for med proper, a year of internship, five years of general surgery, two years of thoracic cardiovascular surgery, and finally, two years of vascular surgery. \r\nThe nearly 20 years of study and training got him to a field of specialization, where training was initially only offered abroad. \r\nToday, the pioneer and founder of National Kidney and Transplant Institute’s iVASC or Integrated Vascular Surgery Complex, has introduced an innovation where training to become a vascular surgeon is abbreviated.\r\nOne reason for innovating, according to Dr Quintos, is because what he learned in general surgery and thoracic, he had to unlearn when he decided to focus on vascular surgery.\r\n“We took a look at it (training program) and looked at what are the necessary and unnecessary for those who just want to do vascular,” he explained.\r\nThe result of the evaluation was to distill it to five years after medicine proper, which meant doing away with general surgery and TCD training, a total of seven years. \r\n“That’s one of our innovations and we started the innovation way back in 2002,” he said.\r\nWhat adds to Dr Quintos’ pride is that in terms of training, the Philippines is ahead of the United States. “Because in the US, they started their 5-year program only in 2008. (So), we were first.”\r\nAfter completing the vascular surgery training program offered at the NKTI, young physicians are equipped with the skills and knowledge to perform vascular surgery, including EVAR or endovascular aneurysm repair, a minimally invasive procedure used to correct abdominal aortic aneurysm in particular.\r\nTrainees are asked to be part of a EVAR surgical team, usually made up of two surgeons. At the time of the interview with Dr Quintos, he was overseeing an EVAR procedure and the team included three vascular surgeon trainees.\r\nDr Quintos explained the procedure is not as difficult during the actual performance and can be done using local anesthesia, which makes it easier for the patient, who may be discharged after three days.\r\n“That’s how easy it is for the patient. But the difficulty is in how to precisely place, and how to precisely measure,” he pointed out. \r\nThis is what he means by the need to prepare for the procedure beforehand. “Everything is prepared. Before we went in, we already knew what size, what stent we are going to put in, what length, what diameter. We know this because we have the imaging, we guided ourselves.”\r\nAn advocate of imaging-guided procedures, Dr Quintos has argued that this is the safer way to perform even complex procedures because surgeons do not go about it blind. This minimizes, if not eliminates, complications and reduces risk for both the patient and medical professionals.\r\nAfter training, he encourages the new vascular surgeons when they start working in other medical facilities where imaging-guided procedures is not the norm, to fight for its adoption, even with the extra cost, because it will distinguish the facility as a safe one.', 'Shorter but more focused training for vascular surgery_NewsImg_1538292491.png', 3, 1, 1),
(20, 'NKTI’s iVASC – First integrated vascular center in Asia', 'The National Kidney and Transplant Institute is now known as the country\'s main referral hospital for kidney diseases. It has since evolved into a public tertiary specialty medical centre engaged in research and transplant procedures of the kidney, liver, bone marrow, stem cells and pancreas aside from providing affordable but excellent healthcare services.\r\n\r\nIt is also a leader in blood services, dialysis and is the home of HOPE or the Human Organ Procurement Effort, tasked with advocating for organ donation, as well as organ retrieval.\r\n\r\nFrom its beginnings in 1981, when it was then known as the National Kidney Foundation, the NKTI has since branched out to provide other specialized facilities and has been recognized not just in the field of kidney treatments but other medical sub-specialties. In particular, it has established the Center for Urology and Men\'s Health, the Ambulatory Surgery and Endoscopy Center and the iVASC or the Integrated Vascular Services Complex.\r\n\r\nThe NKTI complex is a stone\'s throw away from other public specialty hospitals, specifically the Philippine Heart Center, Lung Center of the Philippines, East Avenue Medical Center and the Philippine Children\'s Medical Center, all strategically located to facilitate easy referral of patients.', 'NKTI’s iVASC – First integrated vascular center in Asia_NewsImg_1538292583.png', 4, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `official_receipt_tbl`
--

CREATE TABLE `official_receipt_tbl` (
  `or_id` int(11) NOT NULL,
  `or_number` int(11) NOT NULL,
  `or_date` date NOT NULL,
  `billing_id` int(11) NOT NULL,
  `amount_paid` decimal(8,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `other_services_tbl`
--

CREATE TABLE `other_services_tbl` (
  `other_services_id` int(11) NOT NULL,
  `other_image` varchar(190) DEFAULT NULL,
  `other_title` varchar(160) NOT NULL,
  `other_desc` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `other_services_tbl`
--

INSERT INTO `other_services_tbl` (`other_services_id`, `other_image`, `other_title`, `other_desc`, `status`) VALUES
(5, 'Electrocardiogram_OtherServiceImg_1537956915.jpg', 'Electrocardiogram', 'The electrocardiogram (ECG or EKG) is a diagnostic tool that is routinely used to assess the electrical and muscular functions of the heart. While it is a relatively simple test to perform, the interpretation of the ECG tracing requires significant amounts of training.', 1),
(6, 'Plethysmography_OtherServiceImg_1537957053.jpg', 'Plethysmography', 'Plethysmography measures changes in volume in different areas of your body. It measures these changes with blood pressure cuffs or other sensors. These are attached to a machine called a plethysmograph.\r\n\r\nPlethysmography is especially effective in detecting changes caused by blood flow. It can help your doctor determine if you have a blood clot in your arm or leg. It can also help your doctor calculate the volume of air your lungs can hold.', 0),
(7, 'Doppler Ultrasound_OtherServiceImg_1537957123.png', 'Doppler Ultrasound', 'A Doppler ultrasound is a test that uses high-frequency sound waves to measure the amount of blood flow through your arteries and veins, usually those that supply blood to your arms and legs. Vascular flow studies, also known as blood flow studies, can detect abnormal flow within an artery or blood vessel.', 0),
(8, 'Duplex Ultrasound_OtherServiceImg_1537957199.jpg', 'Duplex Ultrasound', 'In addition to reconstruction of blood vessel, the vascular surgery service is responsible for the medical care of patients with wide variety of vascular disorders including vasospastic diseases, hypercoagulable syndromes, large artery vasculitis, and other nonsurgical ischemic syndromes. Outpatients services are available and has been instrumental in centralizing the growing referral practice of complex vascular problems, coordinating multi-disciplinary management and treatment of patients? vascular disease and co-morbid conditions, and providing longitudinal follow-up. To serve the needs of vascular disease patients, state-of-the art, non-invasive examinations are directed by the vascular service at the Cardiac and Non-Invasive Vascular Laboratory and are staffed with vascular nurse technologists and ultrasonographers. These individuals perform variety of tests based on Doppler ultrasound plethysmography and duplex ultrasonography with color imaging. Nearly 1,000 studies are performed yearly in the laboratory, which is fully compliant with the standards set by the Intersocietal Commission for the Accreditation of Vascular Laboratories.', 1),
(9, 'Laser Doppler Imaging_OtherServiceImg_1537957361.png', 'Laser Doppler Imaging', 'Laser Doppler Imaging (LDI) is used to measure superficial blood flow in the skin. A laser Doppler perfusion imager functions by projecting an infrared laser beam over the skin. When light interacts with moving blood cells a small portion of it is shifted, detected, and converted into an electrical signal. LDI provides a direct measure of female sexual response that does not require genital contact; signals are gathered at a depth of two to three millimetres below the skin\'s surface.', 0),
(10, 'Holter Monitor_OtherServiceImg_1537957443.jpeg', 'Holter Monitor', 'A Holter monitor is a battery-operated portable device that measures and records your heart\'s activity (ECG) continuously for 24 to 48 hours or longer depending on the type of monitoring used. The device is the size of a small camera. It has wires with silver dollar-sized electrodes that attach to your skin. The Holter monitor and other devices that record your ECG as you go about your daily activities are called ambulatory electrocardiograms.', 0),
(12, 'Tenckoff Catheter Insertion_OtherServiceImg_1538187961.jpeg', 'Tenckoff Catheter Insertion', 'The Division has the task of providing both peritoneal (Tenckoff Catheter insertion) and hemodialysis access such as Internal Jugular, Subclavian, Femoral, and Scribner Catheter insertion. Permanent access is provided by AV Fistula creation with or without Goretex graft interposition and Perm Cath.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `other_service_vid_tbl`
--

CREATE TABLE `other_service_vid_tbl` (
  `video_id` int(11) NOT NULL,
  `other_service_id` int(11) NOT NULL,
  `video` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `other_service_vid_tbl`
--

INSERT INTO `other_service_vid_tbl` (`video_id`, `other_service_id`, `video`) VALUES
(2, 5, 'https://www.youtube.com/embed/v3b-YhZmQu8'),
(3, 6, 'https://www.youtube.com/embed/zac7OBsTNdE'),
(4, 7, 'https://www.youtube.com/embed/tQn8jKtwk6o'),
(5, 8, 'https://www.youtube.com/embed/eZp-AFVKQ6A'),
(6, 9, 'https://www.youtube.com/embed/t-egppJ9kEU'),
(7, 10, 'https://www.youtube.com/embed/dLb-tsDmii8'),
(11, 12, 'https://www.youtube.com/embed/2VZXAZUcVXI');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('ibrahimsamson05@gmail.com', '$2y$10$r.kgh3G5xMzUrJ269JfTS.NvBXjoM8nQ6G5zq7N6i5TiR7An10aQS', '2018-09-30 16:20:49');

-- --------------------------------------------------------

--
-- Table structure for table `patient_information_tbl`
--

CREATE TABLE `patient_information_tbl` (
  `patient_info_id` int(11) NOT NULL,
  `address` text NOT NULL,
  `barangay` varchar(160) NOT NULL,
  `city` varchar(160) NOT NULL,
  `zip_code` varchar(5) NOT NULL,
  `blood_type` varchar(5) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `birthday` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `patient_tbl`
--

CREATE TABLE `patient_tbl` (
  `patient_id` int(11) NOT NULL,
  `lname` varchar(80) NOT NULL,
  `fname` varchar(80) NOT NULL,
  `mname` varchar(80) NOT NULL,
  `contact_no` varchar(15) NOT NULL,
  `email` varchar(160) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `patient_tbl`
--

INSERT INTO `patient_tbl` (`patient_id`, `lname`, `fname`, `mname`, `contact_no`, `email`) VALUES
(1, 'Buena', 'Annthonite', 'Nanez', '09485044516', 'annthoniteb@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `profile_tbl`
--

CREATE TABLE `profile_tbl` (
  `profile_id` int(11) NOT NULL,
  `introduction` text NOT NULL,
  `skills` text NOT NULL,
  `picture` text NOT NULL,
  `title` varchar(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `specialty_service_tbl`
--

CREATE TABLE `specialty_service_tbl` (
  `spec_service_id` int(11) NOT NULL,
  `spec_image_icon` varchar(190) DEFAULT NULL,
  `spec_title` varchar(160) NOT NULL,
  `spec_desc` text NOT NULL,
  `price` decimal(8,2) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `specialty_service_tbl`
--

INSERT INTO `specialty_service_tbl` (`spec_service_id`, `spec_image_icon`, `spec_title`, `spec_desc`, `price`, `status`) VALUES
(9, '2D & 3D Echocardiography/Doppler_SpecialtyServiceImg_1537955777.jpg', '2D & 3D Echocardiography/Doppler', 'Echocardiography (echo) is a painless test that uses sound waves to create pictures of your heart. This test gives your doctor information about the size and shape of your heart and how well your heart\'s chambers and valves are working.\r\n\r\n2-D (two-dimensional) echocardiogram. This technique is used to see the actual structures and motion of the heart structures. A 2-D echo view looks cone-shaped on the monitor, and the real-time motion of the heart\'s structures can be seen. This allows the doctor to see the various heart structures at work and evaluate them.\r\n\r\n3-D (three-dimensional) echocardiogram. 3-D echo technique captures 3-D views of the heart structures with greater depth than 2-D echo. The live or \"real time\" images allow for a more accurate assessment of heart function by using measurements taken while the heart is beating. 3-D echo shows enhanced views of the heart\'s anatomy and can be used to determine best treatment plan.', NULL, 1),
(10, 'Dobutamine Stress Echocardiography_SpecialtyServiceImg_1537956209.jpg', 'Dobutamine Stress Echocardiography', 'A dobutamine stress echocardiogram (DSE) may be used if you are unable to exercise. Dobutamine is put in a vein and causes the heart to beat faster. It mimics the effects of exercise on the heart.\r\n\r\nDuring an echo, a transducer (like a microphone) sends out ultrasonic sound waves at a frequency too high to be heard. When the transducer is placed on the chest at certain locations and angles, the ultrasonic sound waves move through the skin and other body tissues to the heart tissues, where the waves bounce or \"echo\" off of the heart structures. The transducer picks up the reflected waves and sends them to a computer. The computer displays the echoes as images of the heart walls and valves.', NULL, 1),
(11, 'Stress Test and Treadmill Test_SpecialtyServiceImg_1537956570.jpg', 'Stress Test and Treadmill Test', 'The exercise stress test also known as an exercise electrocardiogram, treadmill test, graded exercise test, or stress EKG -- is used most often. It lets your doctor know how your heart responds to being pushed. You\'ll walk on a treadmill or pedal a stationary bike. It\'ll get more difficult as you go. Your electrocardiogram, heart rate, and blood pressure will be tracked throughout.', NULL, 0),
(12, 'Anesthesia_SpecialtyServiceImg_1538182462.jpg', 'Anesthesia', 'The Department provides valuable services from monitored anesthesia care to anesthesia for major surgery, including transplant and vascular surgeries, urologic cases, orthopedic cases, ENT cases, general surgery and cardiothoracic surgery. It also caters to providing anesthesia outside of the operating room set-up. These procedures include the following: endoscopies, nuclear scans, CT scans and extracorporeal shock wave lithotripsy. Further, the Department answers to calls for patient resuscitation and referrals for acute and chronic pain management services.', '750.00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `specialty_service_vid_tbl`
--

CREATE TABLE `specialty_service_vid_tbl` (
  `video_id` int(11) NOT NULL,
  `specialty_service_id` int(11) NOT NULL,
  `video` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `specialty_service_vid_tbl`
--

INSERT INTO `specialty_service_vid_tbl` (`video_id`, `specialty_service_id`, `video`) VALUES
(2, 9, 'https://www.youtube.com/embed/_ozpd1BhSMY'),
(3, 10, 'https://www.youtube.com/embed/UqRqQak-0pw'),
(4, 11, 'https://www.youtube.com/embed/WD75wZgNpTc'),
(8, 12, 'https://www.youtube.com/embed/B_tTymvDWXk');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Marlon Villa Niño', 'marlon_nino@yahoo.com', NULL, '$2y$10$5o8j9iU1lSA0uR1QIc2Bl.tFWmoZjR6LjrOUmniKSWzCLyr98PCii', NULL, '2018-09-24 01:07:02', '2018-09-24 01:07:02'),
(2, 'Annthonite Buena', 'annthoniteb@gmail.com', NULL, '$2y$10$w6env5aXq4ifOG6EYVRPG.f8jR42Sw39gMkdRQmNHQGT/N1XAurpO', 'Acv8bSCvleoRAPC1PcsQxNSFIU1zohtM5eHjZmwXw6MYANrsrjLsJ6pXs0RD', '2018-09-25 21:15:44', '2018-09-25 21:15:44'),
(3, 'Marlon Villa Niño', 'ninomarlonvilla@gmail.com', NULL, '$2y$10$c9GrmXmpyoVxZy18HeraW.hCSZxpHamLXBNAeBKVFBZV6qkiONPia', 'D21oLdHOeRgstyBbHRKLOZlWImD9NN0VfrmvSMtEYxKrdZD3JG8P3VwCahpr', '2018-09-26 03:39:15', '2018-09-26 03:39:15'),
(4, 'Ibrahim Samson', 'ibrahimsamson05@gmail.com', NULL, '$2y$10$da13sq0Z71Dz7LTaKqny8ea1wjgq4yEBIKL49LjbTYnJ0a4jzh1xi', NULL, '2018-09-26 13:32:20', '2018-09-26 13:32:20'),
(5, 'Lhexy Romero', 'lhexyromero@gmail.com', NULL, '$2y$10$DHePi3Lczvw1KfObvdqRfuJeeCRUEUYK9wGXqd4ItKeVIvg0vIt0O', NULL, '2018-09-29 00:44:30', '2018-09-29 00:44:30'),
(6, 'paul', 'christianpaultupas@gmail.com', NULL, '$2y$10$oUkqAlCBNriYi12v26eAIOnPnPLaAl288YTvjhznkaRAROjSTwega', NULL, '2018-09-30 14:32:02', '2018-09-30 14:32:02');

-- --------------------------------------------------------

--
-- Table structure for table `user_tbl`
--

CREATE TABLE `user_tbl` (
  `user_id` int(11) NOT NULL,
  `username` varchar(60) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(15) NOT NULL,
  `lname` varchar(80) NOT NULL,
  `fname` varchar(80) NOT NULL,
  `mname` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_tbl`
--

INSERT INTO `user_tbl` (`user_id`, `username`, `password`, `role`, `lname`, `fname`, `mname`) VALUES
(1, 'admin@gmail.com', 'admin', 'Doctor', 'Gali', 'Joy', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment_tbl`
--
ALTER TABLE `appointment_tbl`
  ADD PRIMARY KEY (`appointment_id`),
  ADD KEY `patient_id` (`patient_id`),
  ADD KEY `doctor_id` (`doctor_id`);

--
-- Indexes for table `banner_tbl`
--
ALTER TABLE `banner_tbl`
  ADD PRIMARY KEY (`banner_id`);

--
-- Indexes for table `barangay_tbl`
--
ALTER TABLE `barangay_tbl`
  ADD PRIMARY KEY (`barangay_id`),
  ADD KEY `city_id` (`city_id`);

--
-- Indexes for table `billing_details_tbl`
--
ALTER TABLE `billing_details_tbl`
  ADD PRIMARY KEY (`billing_details_id`),
  ADD KEY `billing_id` (`billing_id`),
  ADD KEY `spec_service_id` (`spec_service_id`);

--
-- Indexes for table `billing_tbl`
--
ALTER TABLE `billing_tbl`
  ADD PRIMARY KEY (`billing_id`),
  ADD KEY `patient_id` (`patient_id`);

--
-- Indexes for table `city_tbl`
--
ALTER TABLE `city_tbl`
  ADD PRIMARY KEY (`city_id`);

--
-- Indexes for table `clinic_contact_tbl`
--
ALTER TABLE `clinic_contact_tbl`
  ADD PRIMARY KEY (`clinic_contact_id`);

--
-- Indexes for table `company_tbl`
--
ALTER TABLE `company_tbl`
  ADD PRIMARY KEY (`company_id`);

--
-- Indexes for table `contact_us_tbl`
--
ALTER TABLE `contact_us_tbl`
  ADD PRIMARY KEY (`contact_us_id`);

--
-- Indexes for table `expense_tbl`
--
ALTER TABLE `expense_tbl`
  ADD PRIMARY KEY (`expense_id`);

--
-- Indexes for table `faq_tbl`
--
ALTER TABLE `faq_tbl`
  ADD PRIMARY KEY (`faq_id`);

--
-- Indexes for table `features_tbl`
--
ALTER TABLE `features_tbl`
  ADD PRIMARY KEY (`features_id`);

--
-- Indexes for table `holiday_tbl`
--
ALTER TABLE `holiday_tbl`
  ADD PRIMARY KEY (`holiday_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `medical_file_record_tbl`
--
ALTER TABLE `medical_file_record_tbl`
  ADD PRIMARY KEY (`medical_file_record_id`),
  ADD KEY `medical_record_id` (`medical_record_id`);

--
-- Indexes for table `medical_records_tbl`
--
ALTER TABLE `medical_records_tbl`
  ADD PRIMARY KEY (`medical_record_id`),
  ADD KEY `patient_id` (`patient_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_tbl`
--
ALTER TABLE `news_tbl`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `official_receipt_tbl`
--
ALTER TABLE `official_receipt_tbl`
  ADD PRIMARY KEY (`or_id`),
  ADD KEY `patiend_id` (`billing_id`);

--
-- Indexes for table `other_services_tbl`
--
ALTER TABLE `other_services_tbl`
  ADD PRIMARY KEY (`other_services_id`);

--
-- Indexes for table `other_service_vid_tbl`
--
ALTER TABLE `other_service_vid_tbl`
  ADD PRIMARY KEY (`video_id`),
  ADD KEY `other_service_id` (`other_service_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `patient_information_tbl`
--
ALTER TABLE `patient_information_tbl`
  ADD PRIMARY KEY (`patient_info_id`),
  ADD KEY `patient_id` (`patient_id`);

--
-- Indexes for table `patient_tbl`
--
ALTER TABLE `patient_tbl`
  ADD PRIMARY KEY (`patient_id`);

--
-- Indexes for table `profile_tbl`
--
ALTER TABLE `profile_tbl`
  ADD PRIMARY KEY (`profile_id`);

--
-- Indexes for table `specialty_service_tbl`
--
ALTER TABLE `specialty_service_tbl`
  ADD PRIMARY KEY (`spec_service_id`);

--
-- Indexes for table `specialty_service_vid_tbl`
--
ALTER TABLE `specialty_service_vid_tbl`
  ADD PRIMARY KEY (`video_id`),
  ADD KEY `specialty_service_id` (`specialty_service_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_tbl`
--
ALTER TABLE `user_tbl`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment_tbl`
--
ALTER TABLE `appointment_tbl`
  MODIFY `appointment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `banner_tbl`
--
ALTER TABLE `banner_tbl`
  MODIFY `banner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `barangay_tbl`
--
ALTER TABLE `barangay_tbl`
  MODIFY `barangay_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=405;
--
-- AUTO_INCREMENT for table `billing_details_tbl`
--
ALTER TABLE `billing_details_tbl`
  MODIFY `billing_details_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `city_tbl`
--
ALTER TABLE `city_tbl`
  MODIFY `city_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `clinic_contact_tbl`
--
ALTER TABLE `clinic_contact_tbl`
  MODIFY `clinic_contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `company_tbl`
--
ALTER TABLE `company_tbl`
  MODIFY `company_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `contact_us_tbl`
--
ALTER TABLE `contact_us_tbl`
  MODIFY `contact_us_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `expense_tbl`
--
ALTER TABLE `expense_tbl`
  MODIFY `expense_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `faq_tbl`
--
ALTER TABLE `faq_tbl`
  MODIFY `faq_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `features_tbl`
--
ALTER TABLE `features_tbl`
  MODIFY `features_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `holiday_tbl`
--
ALTER TABLE `holiday_tbl`
  MODIFY `holiday_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `medical_file_record_tbl`
--
ALTER TABLE `medical_file_record_tbl`
  MODIFY `medical_file_record_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `medical_records_tbl`
--
ALTER TABLE `medical_records_tbl`
  MODIFY `medical_record_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `news_tbl`
--
ALTER TABLE `news_tbl`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `official_receipt_tbl`
--
ALTER TABLE `official_receipt_tbl`
  MODIFY `or_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `other_services_tbl`
--
ALTER TABLE `other_services_tbl`
  MODIFY `other_services_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `other_service_vid_tbl`
--
ALTER TABLE `other_service_vid_tbl`
  MODIFY `video_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `patient_information_tbl`
--
ALTER TABLE `patient_information_tbl`
  MODIFY `patient_info_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `patient_tbl`
--
ALTER TABLE `patient_tbl`
  MODIFY `patient_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `profile_tbl`
--
ALTER TABLE `profile_tbl`
  MODIFY `profile_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `specialty_service_tbl`
--
ALTER TABLE `specialty_service_tbl`
  MODIFY `spec_service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `specialty_service_vid_tbl`
--
ALTER TABLE `specialty_service_vid_tbl`
  MODIFY `video_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `user_tbl`
--
ALTER TABLE `user_tbl`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointment_tbl`
--
ALTER TABLE `appointment_tbl`
  ADD CONSTRAINT `appointment_tbl_ibfk_1` FOREIGN KEY (`patient_id`) REFERENCES `patient_tbl` (`patient_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `appointment_tbl_ibfk_2` FOREIGN KEY (`doctor_id`) REFERENCES `user_tbl` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `barangay_tbl`
--
ALTER TABLE `barangay_tbl`
  ADD CONSTRAINT `barangay_tbl_ibfk_1` FOREIGN KEY (`city_id`) REFERENCES `city_tbl` (`city_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `billing_details_tbl`
--
ALTER TABLE `billing_details_tbl`
  ADD CONSTRAINT `billing_details_tbl_ibfk_2` FOREIGN KEY (`spec_service_id`) REFERENCES `specialty_service_tbl` (`spec_service_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `billing_details_tbl_ibfk_3` FOREIGN KEY (`billing_id`) REFERENCES `billing_tbl` (`billing_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `billing_tbl`
--
ALTER TABLE `billing_tbl`
  ADD CONSTRAINT `billing_tbl_ibfk_2` FOREIGN KEY (`patient_id`) REFERENCES `patient_tbl` (`patient_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `holiday_tbl`
--
ALTER TABLE `holiday_tbl`
  ADD CONSTRAINT `holiday_tbl_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user_tbl` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `medical_file_record_tbl`
--
ALTER TABLE `medical_file_record_tbl`
  ADD CONSTRAINT `medical_file_record_tbl_ibfk_1` FOREIGN KEY (`medical_record_id`) REFERENCES `medical_records_tbl` (`medical_record_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `medical_records_tbl`
--
ALTER TABLE `medical_records_tbl`
  ADD CONSTRAINT `medical_records_tbl_ibfk_1` FOREIGN KEY (`patient_id`) REFERENCES `patient_tbl` (`patient_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `official_receipt_tbl`
--
ALTER TABLE `official_receipt_tbl`
  ADD CONSTRAINT `official_receipt_tbl_ibfk_1` FOREIGN KEY (`billing_id`) REFERENCES `billing_tbl` (`billing_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `other_service_vid_tbl`
--
ALTER TABLE `other_service_vid_tbl`
  ADD CONSTRAINT `other_service_vid_tbl_ibfk_1` FOREIGN KEY (`other_service_id`) REFERENCES `other_services_tbl` (`other_services_id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `patient_information_tbl`
--
ALTER TABLE `patient_information_tbl`
  ADD CONSTRAINT `patient_information_tbl_ibfk_1` FOREIGN KEY (`patient_id`) REFERENCES `patient_tbl` (`patient_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `specialty_service_vid_tbl`
--
ALTER TABLE `specialty_service_vid_tbl`
  ADD CONSTRAINT `specialty_service_vid_tbl_ibfk_1` FOREIGN KEY (`specialty_service_id`) REFERENCES `specialty_service_tbl` (`spec_service_id`) ON DELETE CASCADE ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
