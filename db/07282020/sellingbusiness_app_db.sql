-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 28, 2020 at 11:01 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sellingbusiness_app_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `acl_phinxlog`
--

DROP TABLE IF EXISTS `acl_phinxlog`;
CREATE TABLE `acl_phinxlog` (
  `version` bigint(20) NOT NULL,
  `start_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `end_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `acl_phinxlog`
--

INSERT INTO `acl_phinxlog` (`version`, `start_time`, `end_time`) VALUES
(20141229162641, '2016-01-07 18:56:40', '2016-01-07 18:56:41');

-- --------------------------------------------------------

--
-- Table structure for table `acos`
--

DROP TABLE IF EXISTS `acos`;
CREATE TABLE `acos` (
  `id` int(11) NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `foreign_key` int(11) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `lft` int(11) DEFAULT NULL,
  `rght` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `acos`
--

INSERT INTO `acos` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES
(1, NULL, NULL, NULL, 'controllers', 1, 380),
(2, 1, NULL, NULL, 'Groups', 2, 15),
(3, 2, NULL, NULL, 'index', 3, 4),
(4, 2, NULL, NULL, 'view', 5, 6),
(5, 2, NULL, NULL, 'add', 7, 8),
(6, 2, NULL, NULL, 'edit', 9, 10),
(7, 2, NULL, NULL, 'delete', 11, 12),
(8, 2, NULL, NULL, 'isAuthorized', 13, 14),
(9, 1, NULL, NULL, 'Main', 16, 25),
(10, 9, NULL, NULL, 'index', 17, 18),
(12, 9, NULL, NULL, 'isAuthorized', 19, 20),
(13, 9, NULL, NULL, 'cell', 21, 22),
(14, 1, NULL, NULL, 'Users', 26, 53),
(15, 14, NULL, NULL, 'index', 27, 28),
(16, 14, NULL, NULL, 'dashboard', 29, 30),
(17, 14, NULL, NULL, 'view', 31, 32),
(18, 14, NULL, NULL, 'add', 33, 34),
(19, 14, NULL, NULL, 'edit', 35, 36),
(20, 14, NULL, NULL, 'delete', 37, 38),
(21, 14, NULL, NULL, 'login', 39, 40),
(22, 14, NULL, NULL, 'logout', 41, 42),
(23, 14, NULL, NULL, 'isAuthorized', 43, 44),
(24, 1, NULL, NULL, 'Acl', 54, 55),
(25, 1, NULL, NULL, 'Bake', 56, 57),
(26, 1, NULL, NULL, 'DebugKit', 58, 73),
(27, 26, NULL, NULL, 'Panels', 59, 64),
(28, 27, NULL, NULL, 'index', 60, 61),
(29, 27, NULL, NULL, 'view', 62, 63),
(30, 26, NULL, NULL, 'Requests', 65, 68),
(31, 30, NULL, NULL, 'view', 66, 67),
(32, 26, NULL, NULL, 'Toolbar', 69, 72),
(33, 32, NULL, NULL, 'clearCache', 70, 71),
(34, 1, NULL, NULL, 'Migrations', 74, 75),
(35, 1, NULL, NULL, 'Pages', 76, 95),
(36, 35, NULL, NULL, 'index', 77, 78),
(37, 35, NULL, NULL, 'view', 79, 80),
(38, 35, NULL, NULL, 'add', 81, 82),
(39, 35, NULL, NULL, 'edit', 83, 84),
(40, 35, NULL, NULL, 'delete', 85, 86),
(41, 35, NULL, NULL, 'isAuthorized', 87, 88),
(42, 1, NULL, NULL, 'Slides', 96, 115),
(43, 42, NULL, NULL, 'index', 97, 98),
(44, 42, NULL, NULL, 'view', 99, 100),
(45, 42, NULL, NULL, 'add', 101, 102),
(46, 42, NULL, NULL, 'edit', 103, 104),
(47, 42, NULL, NULL, 'delete', 105, 106),
(48, 42, NULL, NULL, 'isAuthorized', 107, 108),
(51, 35, NULL, NULL, 'frontview', 89, 90),
(53, 1, NULL, NULL, 'UserEntities', 116, 137),
(54, 53, NULL, NULL, 'index', 117, 118),
(55, 53, NULL, NULL, 'view', 119, 120),
(56, 53, NULL, NULL, 'add', 121, 122),
(57, 53, NULL, NULL, 'edit', 123, 124),
(58, 53, NULL, NULL, 'delete', 125, 126),
(59, 53, NULL, NULL, 'isAuthorized', 127, 128),
(63, 1, NULL, NULL, 'Debug', 138, 145),
(65, 63, NULL, NULL, 'isAuthorized', 139, 140),
(112, 1, NULL, NULL, 'Profile', 146, 157),
(113, 112, NULL, NULL, 'index', 147, 148),
(114, 112, NULL, NULL, 'edit', 149, 150),
(115, 112, NULL, NULL, 'isAuthorized', 151, 152),
(176, 112, NULL, NULL, 'change_profile_photo', 153, 154),
(277, 1, NULL, NULL, 'Ads', 158, 175),
(278, 277, NULL, NULL, 'index', 159, 160),
(279, 277, NULL, NULL, 'view', 161, 162),
(280, 277, NULL, NULL, 'add', 163, 164),
(281, 277, NULL, NULL, 'edit', 165, 166),
(282, 277, NULL, NULL, 'delete', 167, 168),
(283, 277, NULL, NULL, 'unpublish', 169, 170),
(284, 277, NULL, NULL, 'publish', 171, 172),
(285, 277, NULL, NULL, 'isAuthorized', 173, 174),
(286, 1, NULL, NULL, 'CompanyDetails', 176, 189),
(287, 286, NULL, NULL, 'index', 177, 178),
(288, 286, NULL, NULL, 'view', 179, 180),
(289, 286, NULL, NULL, 'add', 181, 182),
(290, 286, NULL, NULL, 'edit', 183, 184),
(291, 286, NULL, NULL, 'delete', 185, 186),
(292, 286, NULL, NULL, 'isAuthorized', 187, 188),
(293, 1, NULL, NULL, 'Coupons', 190, 203),
(294, 293, NULL, NULL, 'index', 191, 192),
(295, 293, NULL, NULL, 'view', 193, 194),
(296, 293, NULL, NULL, 'add', 195, 196),
(297, 293, NULL, NULL, 'edit', 197, 198),
(298, 293, NULL, NULL, 'delete', 199, 200),
(299, 293, NULL, NULL, 'isAuthorized', 201, 202),
(300, 63, NULL, NULL, 'debugFtpGet', 141, 142),
(301, 63, NULL, NULL, 'debugThreaded', 143, 144),
(302, 9, NULL, NULL, 'filter', 23, 24),
(303, 1, NULL, NULL, 'Newsletters', 204, 217),
(304, 303, NULL, NULL, 'index', 205, 206),
(305, 303, NULL, NULL, 'view', 207, 208),
(306, 303, NULL, NULL, 'add', 209, 210),
(307, 303, NULL, NULL, 'edit', 211, 212),
(308, 303, NULL, NULL, 'delete', 213, 214),
(309, 303, NULL, NULL, 'isAuthorized', 215, 216),
(310, 1, NULL, NULL, 'Owner', 218, 237),
(311, 310, NULL, NULL, 'dashboard', 219, 220),
(312, 310, NULL, NULL, 'products', 221, 222),
(313, 310, NULL, NULL, 'profile', 223, 224),
(314, 310, NULL, NULL, 'profile_edit', 225, 226),
(315, 310, NULL, NULL, 'change_profile_photo', 227, 228),
(316, 310, NULL, NULL, 'change_password', 229, 230),
(317, 310, NULL, NULL, 'add_product', 231, 232),
(318, 310, NULL, NULL, 'edit_product', 233, 234),
(319, 310, NULL, NULL, 'isAuthorized', 235, 236),
(320, 1, NULL, NULL, 'Owners', 238, 251),
(321, 320, NULL, NULL, 'index', 239, 240),
(322, 320, NULL, NULL, 'view', 241, 242),
(323, 320, NULL, NULL, 'add', 243, 244),
(324, 320, NULL, NULL, 'edit', 245, 246),
(325, 320, NULL, NULL, 'delete', 247, 248),
(326, 320, NULL, NULL, 'isAuthorized', 249, 250),
(327, 1, NULL, NULL, 'Packages', 252, 267),
(328, 327, NULL, NULL, 'index', 253, 254),
(329, 327, NULL, NULL, 'view', 255, 256),
(330, 327, NULL, NULL, 'add', 257, 258),
(331, 327, NULL, NULL, 'edit', 259, 260),
(332, 327, NULL, NULL, 'delete', 261, 262),
(333, 327, NULL, NULL, 'frontview', 263, 264),
(334, 327, NULL, NULL, 'isAuthorized', 265, 266),
(335, 35, NULL, NULL, 'publish', 91, 92),
(336, 35, NULL, NULL, 'unpublish', 93, 94),
(337, 1, NULL, NULL, 'ProductCategories', 268, 281),
(338, 337, NULL, NULL, 'index', 269, 270),
(339, 337, NULL, NULL, 'view', 271, 272),
(340, 337, NULL, NULL, 'add', 273, 274),
(341, 337, NULL, NULL, 'edit', 275, 276),
(342, 337, NULL, NULL, 'delete', 277, 278),
(343, 337, NULL, NULL, 'isAuthorized', 279, 280),
(344, 1, NULL, NULL, 'ProductImages', 282, 297),
(345, 344, NULL, NULL, 'index', 283, 284),
(346, 344, NULL, NULL, 'view', 285, 286),
(347, 344, NULL, NULL, 'add', 287, 288),
(348, 344, NULL, NULL, 'edit', 289, 290),
(349, 344, NULL, NULL, 'delete', 291, 292),
(350, 344, NULL, NULL, 'update_product_cover_image', 293, 294),
(351, 344, NULL, NULL, 'isAuthorized', 295, 296),
(352, 1, NULL, NULL, 'Products', 298, 327),
(353, 352, NULL, NULL, 'index', 299, 300),
(354, 352, NULL, NULL, 'view', 301, 302),
(355, 352, NULL, NULL, 'add', 303, 304),
(356, 352, NULL, NULL, 'edit', 305, 306),
(357, 352, NULL, NULL, 'delete', 307, 308),
(358, 352, NULL, NULL, 'publish', 309, 310),
(359, 352, NULL, NULL, 'unpublish', 311, 312),
(360, 352, NULL, NULL, 'frontview', 313, 314),
(361, 352, NULL, NULL, 'add_featured', 315, 316),
(362, 352, NULL, NULL, 'remove_featured', 317, 318),
(363, 352, NULL, NULL, 'listing', 319, 320),
(364, 352, NULL, NULL, 'approve', 321, 322),
(365, 352, NULL, NULL, 'disapprove', 323, 324),
(366, 352, NULL, NULL, 'isAuthorized', 325, 326),
(367, 112, NULL, NULL, 'change_password', 155, 156),
(368, 1, NULL, NULL, 'Promos', 328, 347),
(369, 368, NULL, NULL, 'index', 329, 330),
(370, 368, NULL, NULL, 'view', 331, 332),
(371, 368, NULL, NULL, 'add', 333, 334),
(372, 368, NULL, NULL, 'edit', 335, 336),
(373, 368, NULL, NULL, 'delete', 337, 338),
(374, 368, NULL, NULL, 'unpublish', 339, 340),
(375, 368, NULL, NULL, 'publish', 341, 342),
(376, 368, NULL, NULL, 'frontview', 343, 344),
(377, 368, NULL, NULL, 'isAuthorized', 345, 346),
(378, 1, NULL, NULL, 'ResetPassword', 348, 353),
(379, 378, NULL, NULL, 'index', 349, 350),
(380, 378, NULL, NULL, 'isAuthorized', 351, 352),
(381, 1, NULL, NULL, 'Search', 354, 359),
(382, 381, NULL, NULL, 'index', 355, 356),
(383, 381, NULL, NULL, 'isAuthorized', 357, 358),
(384, 42, NULL, NULL, 'jsonUpdateSort', 109, 110),
(385, 42, NULL, NULL, 'publish', 111, 112),
(386, 42, NULL, NULL, 'unpublish', 113, 114),
(387, 1, NULL, NULL, 'Tenant', 360, 365),
(388, 387, NULL, NULL, 'index', 361, 362),
(389, 387, NULL, NULL, 'isAuthorized', 363, 364),
(390, 1, NULL, NULL, 'Tenants', 366, 379),
(391, 390, NULL, NULL, 'index', 367, 368),
(392, 390, NULL, NULL, 'view', 369, 370),
(393, 390, NULL, NULL, 'add', 371, 372),
(394, 390, NULL, NULL, 'edit', 373, 374),
(395, 390, NULL, NULL, 'delete', 375, 376),
(396, 390, NULL, NULL, 'isAuthorized', 377, 378),
(397, 53, NULL, NULL, 'agency_users', 129, 130),
(398, 53, NULL, NULL, 'agency_add', 131, 132),
(399, 53, NULL, NULL, 'agency_edit', 133, 134),
(400, 53, NULL, NULL, 'agency_delete', 135, 136),
(401, 14, NULL, NULL, 'request_forgot_password', 45, 46),
(402, 14, NULL, NULL, 'change_password', 47, 48),
(403, 14, NULL, NULL, 'suspend', 49, 50),
(404, 14, NULL, NULL, 'activate', 51, 52);

-- --------------------------------------------------------

--
-- Table structure for table `ads`
--

DROP TABLE IF EXISTS `ads`;
CREATE TABLE `ads` (
  `id` int(11) NOT NULL,
  `owner_id` int(11) NOT NULL,
  `image` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `sort` int(11) DEFAULT NULL,
  `position` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_publish` smallint(1) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ads`
--

INSERT INTO `ads` (`id`, `owner_id`, `image`, `sort`, `position`, `is_publish`, `created`, `modified`) VALUES
(4, 2, '/ranta/webroot/upload/files/images/ads/gamercat_wp_vita5.jpg', 1, 'Top', 1, '2017-11-10 02:53:27', '2017-11-10 02:53:27'),
(5, 1, '/ranta/webroot/upload/files/images/ads/gamercat_wp_vita6.jpg', 2, 'Bottom', 0, '2017-11-10 02:53:39', '2017-11-10 03:03:00'),
(6, 1, '/ranta/webroot/upload/files/images/ads/gamercat_wp_vita5.jpg', 2, 'Top', 1, '2018-01-18 02:56:49', '2018-01-18 02:56:49');

-- --------------------------------------------------------

--
-- Table structure for table `aros`
--

DROP TABLE IF EXISTS `aros`;
CREATE TABLE `aros` (
  `id` int(11) NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `foreign_key` int(11) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `lft` int(11) DEFAULT NULL,
  `rght` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `aros`
--

INSERT INTO `aros` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES
(1, NULL, 'Groups', 1, NULL, 1, 46),
(2, NULL, 'Groups', 2, NULL, 47, 256),
(3, 1, 'Users', 1, NULL, 42, 43),
(4, NULL, 'Groups', 4, NULL, 257, 466),
(5, NULL, 'Groups', 5, NULL, 467, 748),
(6, 2, 'Users', 2, NULL, 200, 201),
(7, 2, 'Users', 3, NULL, 48, 49),
(8, 1, 'Users', 4, NULL, 2, 3),
(9, 1, 'Users', 5, NULL, 4, 5),
(10, 1, 'Users', 6, NULL, 6, 7),
(11, 1, 'Users', 7, NULL, 8, 9),
(12, 1, 'Users', 8, NULL, 10, 11),
(13, 2, 'Users', 9, NULL, 50, 51),
(14, 2, 'Users', 10, NULL, 52, 53),
(15, 2, 'Users', 11, NULL, 54, 55),
(16, 2, 'Users', 12, NULL, 56, 57),
(17, 2, 'Users', 13, NULL, 58, 59),
(18, 1, 'Users', 14, NULL, 30, 31),
(19, 1, 'Users', 15, NULL, 34, 35),
(20, 2, 'Users', 16, NULL, 128, 129),
(21, 2, 'Users', 17, NULL, 84, 85),
(22, 2, 'Users', 18, NULL, 60, 61),
(23, 2, 'Users', 19, NULL, 90, 91),
(24, 2, 'Users', 20, NULL, 94, 95),
(25, 4, 'Users', 21, NULL, 266, 267),
(26, 5, 'Users', 22, NULL, 468, 469),
(27, 5, 'Users', 23, NULL, 470, 471),
(28, 5, 'Users', 24, NULL, 472, 473),
(29, 1, 'Users', 25, NULL, 12, 13),
(30, 1, 'Users', 26, NULL, 14, 15),
(31, 1, 'Users', 27, NULL, 16, 17),
(32, 1, 'Users', 28, NULL, 18, 19),
(33, 1, 'Users', 2, NULL, 38, 39),
(34, 2, 'Users', 3, NULL, 62, 63),
(35, 2, 'Users', 4, NULL, 148, 149),
(36, 4, 'Users', 5, NULL, 258, 259),
(37, 4, 'Users', 6, NULL, 260, 261),
(38, 5, 'Users', 7, NULL, 474, 475),
(39, 4, 'Users', 8, NULL, 302, 303),
(40, 2, 'Users', 9, NULL, 64, 65),
(41, 2, 'Users', 10, NULL, 164, 165),
(42, 2, 'Users', 11, NULL, 66, 67),
(43, 2, 'Users', 12, NULL, 168, 169),
(44, 2, 'Users', 13, NULL, 232, 233),
(45, 2, 'Users', 14, NULL, 72, 73),
(46, 2, 'Users', 15, NULL, 76, 77),
(47, 2, 'Users', 16, NULL, 80, 81),
(48, 1, 'Users', 2, NULL, 22, 23),
(49, 1, 'Users', 3, NULL, 26, 27),
(50, 2, 'Users', 4, NULL, 134, 135),
(51, 4, 'Users', 5, NULL, 262, 263),
(52, 2, 'Users', 6, NULL, 194, 195),
(53, 4, 'Users', 7, NULL, 402, 403),
(54, 4, 'Users', 8, NULL, 286, 287),
(55, 2, 'Users', 9, NULL, 110, 111),
(56, 2, 'Users', 10, NULL, 114, 115),
(57, 2, 'Users', 11, NULL, 68, 69),
(58, 2, 'Users', 12, NULL, 120, 121),
(59, 2, 'Users', 13, NULL, 124, 125),
(60, 2, 'Users', 14, NULL, 70, 71),
(61, 2, 'Users', 15, NULL, 74, 75),
(62, 2, 'Users', 16, NULL, 78, 79),
(63, 2, 'Users', 17, NULL, 82, 83),
(64, 2, 'Users', 18, NULL, 86, 87),
(65, 2, 'Users', 19, NULL, 88, 89),
(66, 2, 'Users', 20, NULL, 92, 93),
(67, 4, 'Users', 21, NULL, 264, 265),
(68, 5, 'Users', 22, NULL, 484, 485),
(69, 5, 'Users', 23, NULL, 506, 507),
(70, 5, 'Users', 24, NULL, 504, 505),
(71, 5, 'Users', 25, NULL, 476, 477),
(72, 5, 'Users', 26, NULL, 478, 479),
(73, 4, 'Users', 27, NULL, 298, 299),
(74, 5, 'Users', 28, NULL, 480, 481),
(75, 5, 'Users', 29, NULL, 482, 483),
(76, 5, 'Users', 30, NULL, 508, 509),
(77, 4, 'Users', 31, NULL, 312, 313),
(78, 5, 'Users', 32, NULL, 510, 511),
(79, 4, 'Users', 33, NULL, 336, 337),
(80, 5, 'Users', 34, NULL, 486, 487),
(81, 5, 'Users', 35, NULL, 566, 567),
(82, 5, 'Users', 36, NULL, 564, 565),
(83, 5, 'Users', 37, NULL, 488, 489),
(84, 4, 'Users', 38, NULL, 462, 463),
(85, 5, 'Users', 39, NULL, 490, 491),
(86, 2, 'Users', 40, NULL, 254, 255),
(87, 2, 'Users', 41, NULL, 178, 179),
(88, 5, 'Users', 42, NULL, 590, 591),
(89, 5, 'Users', 43, NULL, 568, 569),
(90, 5, 'Users', 44, NULL, 570, 571),
(91, 2, 'Users', 45, NULL, 174, 175),
(92, 4, 'Users', 46, NULL, 318, 319),
(93, 5, 'Users', 47, NULL, 582, 583),
(94, 5, 'Users', 48, NULL, 576, 577),
(95, 5, 'Users', 49, NULL, 572, 573),
(96, 5, 'Users', 50, NULL, 492, 493),
(97, 5, 'Users', 51, NULL, 574, 575),
(98, 4, 'Users', 52, NULL, 334, 335),
(99, 5, 'Users', 53, NULL, 494, 495),
(100, 5, 'Users', 54, NULL, 578, 579),
(101, 4, 'Users', 55, NULL, 352, 353),
(102, 5, 'Users', 56, NULL, 496, 497),
(103, 5, 'Users', 57, NULL, 498, 499),
(104, 5, 'Users', 58, NULL, 580, 581),
(105, 5, 'Users', 59, NULL, 500, 501),
(106, 5, 'Users', 60, NULL, 502, 503),
(107, 5, 'Users', 61, NULL, 624, 625),
(108, 4, 'Users', 62, NULL, 344, 345),
(109, 5, 'Users', 63, NULL, 512, 513),
(110, 4, 'Users', 64, NULL, 350, 351),
(111, 5, 'Users', 65, NULL, 514, 515),
(112, 5, 'Users', 66, NULL, 516, 517),
(113, 5, 'Users', 67, NULL, 592, 593),
(114, 5, 'Users', 68, NULL, 586, 587),
(115, 5, 'Users', 69, NULL, 518, 519),
(116, 5, 'Users', 70, NULL, 520, 521),
(117, 5, 'Users', 71, NULL, 596, 597),
(118, 5, 'Users', 72, NULL, 522, 523),
(119, 5, 'Users', 73, NULL, 524, 525),
(120, 5, 'Users', 74, NULL, 594, 595),
(121, 5, 'Users', 75, NULL, 526, 527),
(122, 5, 'Users', 76, NULL, 598, 599),
(123, 5, 'Users', 77, NULL, 528, 529),
(124, 5, 'Users', 78, NULL, 530, 531),
(125, 5, 'Users', 79, NULL, 626, 627),
(126, 5, 'Users', 80, NULL, 532, 533),
(127, 5, 'Users', 81, NULL, 534, 535),
(128, 5, 'Users', 82, NULL, 646, 647),
(129, 4, 'Users', 83, NULL, 360, 361),
(130, 5, 'Users', 84, NULL, 536, 537),
(131, 5, 'Users', 85, NULL, 648, 649),
(132, 5, 'Users', 86, NULL, 538, 539),
(133, 5, 'Users', 87, NULL, 540, 541),
(134, 5, 'Users', 88, NULL, 600, 601),
(135, 5, 'Users', 89, NULL, 542, 543),
(136, 5, 'Users', 90, NULL, 544, 545),
(137, 5, 'Users', 91, NULL, 546, 547),
(138, 5, 'Users', 92, NULL, 548, 549),
(139, 5, 'Users', 93, NULL, 550, 551),
(140, 5, 'Users', 94, NULL, 552, 553),
(141, 5, 'Users', 95, NULL, 554, 555),
(142, 5, 'Users', 96, NULL, 556, 557),
(143, 5, 'Users', 97, NULL, 558, 559),
(144, 5, 'Users', 98, NULL, 560, 561),
(145, 5, 'Users', 99, NULL, 562, 563),
(146, 5, 'Users', 100, NULL, 644, 645),
(147, 5, 'Users', 101, NULL, 584, 585),
(148, 5, 'Users', 102, NULL, 588, 589),
(149, 2, 'Users', 103, NULL, 96, 97),
(150, 2, 'Users', 104, NULL, 98, 99),
(151, 5, 'Users', 105, NULL, 602, 603),
(152, 5, 'Users', 106, NULL, 604, 605),
(153, 5, 'Users', 107, NULL, 606, 607),
(154, 5, 'Users', 108, NULL, 608, 609),
(155, 5, 'Users', 109, NULL, 610, 611),
(156, 5, 'Users', 110, NULL, 612, 613),
(157, 5, 'Users', 111, NULL, 614, 615),
(158, 5, 'Users', 112, NULL, 616, 617),
(159, 5, 'Users', 113, NULL, 618, 619),
(160, 5, 'Users', 114, NULL, 620, 621),
(161, 5, 'Users', 115, NULL, 622, 623),
(162, 5, 'Users', 116, NULL, 628, 629),
(163, 5, 'Users', 117, NULL, 630, 631),
(164, 5, 'Users', 118, NULL, 632, 633),
(165, 5, 'Users', 119, NULL, 634, 635),
(166, 5, 'Users', 120, NULL, 636, 637),
(167, 5, 'Users', 121, NULL, 638, 639),
(168, 5, 'Users', 122, NULL, 640, 641),
(169, 5, 'Users', 123, NULL, 642, 643),
(170, 2, 'Users', 124, NULL, 100, 101),
(171, 2, 'Users', 125, NULL, 102, 103),
(172, 4, 'Users', 126, NULL, 268, 269),
(173, 4, 'Users', 127, NULL, 270, 271),
(174, 4, 'Users', 128, NULL, 272, 273),
(175, 4, 'Users', 129, NULL, 274, 275),
(176, 4, 'Users', 130, NULL, 276, 277),
(177, 2, 'Users', 131, NULL, 104, 105),
(178, 2, 'Users', 132, NULL, 106, 107),
(179, 4, 'Users', 133, NULL, 278, 279),
(180, 5, 'Users', 134, NULL, 650, 651),
(181, 5, 'Users', 135, NULL, 652, 653),
(182, 1, 'Users', 2, NULL, 20, 21),
(183, 1, 'Users', 3, NULL, 24, 25),
(184, NULL, 'Groups', 6, NULL, 749, 750),
(185, 2, 'Users', 6, NULL, 192, 193),
(186, 2, 'Users', 7, NULL, 138, 139),
(187, 2, 'Users', 8, NULL, 142, 143),
(188, 2, 'Users', 9, NULL, 108, 109),
(189, 2, 'Users', 10, NULL, 112, 113),
(190, 2, 'Users', 11, NULL, 116, 117),
(191, 2, 'Users', 12, NULL, 118, 119),
(192, 2, 'Users', 13, NULL, 122, 123),
(193, 1, 'Users', 14, NULL, 28, 29),
(194, 1, 'Users', 15, NULL, 32, 33),
(195, 2, 'Users', 16, NULL, 126, 127),
(196, 2, 'Users', 17, NULL, 130, 131),
(197, 1, 'Users', 2, NULL, 36, 37),
(198, 4, 'Users', 3, NULL, 368, 369),
(199, 2, 'Users', 4, NULL, 132, 133),
(200, 2, 'Users', 5, NULL, 158, 159),
(201, 2, 'Users', 6, NULL, 196, 197),
(202, 2, 'Users', 7, NULL, 136, 137),
(203, 2, 'Users', 8, NULL, 140, 141),
(204, 2, 'Users', 9, NULL, 144, 145),
(205, 1, 'Users', 2, NULL, 40, 41),
(206, 4, 'Users', 3, NULL, 366, 367),
(207, 2, 'Users', 4, NULL, 146, 147),
(208, 2, 'Users', 5, NULL, 150, 151),
(209, 4, 'Users', 6, NULL, 280, 281),
(210, 4, 'Users', 7, NULL, 282, 283),
(211, 4, 'Users', 8, NULL, 284, 285),
(212, 2, 'Users', 9, NULL, 210, 211),
(213, 2, 'Users', 10, NULL, 152, 153),
(214, 2, 'Users', 11, NULL, 154, 155),
(215, 2, 'Users', 12, NULL, 156, 157),
(216, 2, 'Users', 13, NULL, 230, 231),
(217, 2, 'Users', 14, NULL, 160, 161),
(218, 5, 'Users', 15, NULL, 654, 655),
(219, 4, 'Users', 16, NULL, 288, 289),
(220, 4, 'Users', 17, NULL, 300, 301),
(221, 2, 'Users', 18, NULL, 162, 163),
(222, 4, 'Users', 19, NULL, 290, 291),
(223, 4, 'Users', 20, NULL, 292, 293),
(224, 4, 'Users', 21, NULL, 294, 295),
(225, 5, 'Users', 22, NULL, 656, 657),
(226, 5, 'Users', 23, NULL, 690, 691),
(227, 5, 'Users', 24, NULL, 658, 659),
(228, 2, 'Users', 25, NULL, 166, 167),
(229, 5, 'Users', 26, NULL, 660, 661),
(230, 4, 'Users', 27, NULL, 296, 297),
(231, 5, 'Users', 28, NULL, 664, 665),
(232, 5, 'Users', 29, NULL, 662, 663),
(233, 4, 'Users', 30, NULL, 304, 305),
(234, 4, 'Users', 31, NULL, 306, 307),
(235, 4, 'Users', 32, NULL, 308, 309),
(236, 4, 'Users', 33, NULL, 310, 311),
(237, 5, 'Users', 34, NULL, 666, 667),
(238, 5, 'Users', 35, NULL, 668, 669),
(239, 5, 'Users', 36, NULL, 670, 671),
(240, 5, 'Users', 37, NULL, 678, 679),
(241, 4, 'Users', 38, NULL, 460, 461),
(242, 5, 'Users', 39, NULL, 672, 673),
(243, 2, 'Users', 40, NULL, 252, 253),
(244, 2, 'Users', 41, NULL, 170, 171),
(245, 5, 'Users', 42, NULL, 674, 675),
(246, 4, 'Users', 43, NULL, 314, 315),
(247, 5, 'Users', 44, NULL, 676, 677),
(248, 2, 'Users', 45, NULL, 172, 173),
(249, 4, 'Users', 46, NULL, 316, 317),
(250, 5, 'Users', 47, NULL, 700, 701),
(251, 5, 'Users', 48, NULL, 712, 713),
(252, 4, 'Users', 49, NULL, 320, 321),
(253, 4, 'Users', 50, NULL, 322, 323),
(254, 4, 'Users', 51, NULL, 324, 325),
(255, 4, 'Users', 52, NULL, 326, 327),
(256, 4, 'Users', 53, NULL, 328, 329),
(257, 4, 'Users', 54, NULL, 330, 331),
(258, 4, 'Users', 55, NULL, 332, 333),
(259, 5, 'Users', 56, NULL, 680, 681),
(260, 2, 'Users', 57, NULL, 176, 177),
(261, 5, 'Users', 58, NULL, 684, 685),
(262, 5, 'Users', 59, NULL, 682, 683),
(263, 5, 'Users', 60, NULL, 686, 687),
(264, 5, 'Users', 61, NULL, 688, 689),
(265, 4, 'Users', 62, NULL, 338, 339),
(266, 4, 'Users', 63, NULL, 340, 341),
(267, 4, 'Users', 64, NULL, 342, 343),
(268, 5, 'Users', 65, NULL, 698, 699),
(269, 5, 'Users', 66, NULL, 692, 693),
(270, 5, 'Users', 67, NULL, 694, 695),
(271, 5, 'Users', 68, NULL, 716, 717),
(272, 5, 'Users', 69, NULL, 696, 697),
(273, 5, 'Users', 70, NULL, 704, 705),
(274, 5, 'Users', 71, NULL, 702, 703),
(275, 5, 'Users', 72, NULL, 706, 707),
(276, 5, 'Users', 73, NULL, 708, 709),
(277, 4, 'Users', 74, NULL, 346, 347),
(278, 4, 'Users', 75, NULL, 348, 349),
(279, 5, 'Users', 76, NULL, 726, 727),
(280, 5, 'Users', 77, NULL, 710, 711),
(281, 5, 'Users', 78, NULL, 718, 719),
(282, 5, 'Users', 79, NULL, 714, 715),
(283, 5, 'Users', 80, NULL, 728, 729),
(284, 4, 'Users', 81, NULL, 354, 355),
(285, 4, 'Users', 82, NULL, 356, 357),
(286, 4, 'Users', 83, NULL, 358, 359),
(287, 2, 'Users', 84, NULL, 180, 181),
(288, 4, 'Users', 85, NULL, 362, 363),
(289, 5, 'Users', 86, NULL, 720, 721),
(290, 5, 'Users', 87, NULL, 722, 723),
(291, 5, 'Users', 88, NULL, 724, 725),
(292, 1, 'Users', 1, NULL, 44, 45),
(293, 4, 'Users', 3, NULL, 364, 365),
(294, 5, 'Users', 4, NULL, 730, 731),
(295, 4, 'Users', 5, NULL, 370, 371),
(296, 4, 'Users', 6, NULL, 372, 373),
(297, 4, 'Users', 7, NULL, 374, 375),
(298, 4, 'Users', 8, NULL, 376, 377),
(299, 4, 'Users', 9, NULL, 378, 379),
(300, 4, 'Users', 10, NULL, 380, 381),
(301, 4, 'Users', 11, NULL, 382, 383),
(302, 4, 'Users', 12, NULL, 384, 385),
(303, 2, 'Users', 13, NULL, 228, 229),
(304, 4, 'Users', 14, NULL, 410, 411),
(305, 5, 'Users', 15, NULL, 732, 733),
(306, 4, 'Users', 16, NULL, 386, 387),
(307, 4, 'Users', 17, NULL, 388, 389),
(308, 4, 'Users', 18, NULL, 390, 391),
(309, 4, 'Users', 19, NULL, 392, 393),
(310, 5, 'Users', 20, NULL, 734, 735),
(311, 5, 'Users', 21, NULL, 736, 737),
(312, 4, 'Users', 3, NULL, 394, 395),
(313, 5, 'Users', 4, NULL, 738, 739),
(314, 4, 'Users', 5, NULL, 396, 397),
(315, 4, 'Users', 6, NULL, 398, 399),
(316, 4, 'Users', 7, NULL, 400, 401),
(317, 4, 'Users', 8, NULL, 406, 407),
(318, 4, 'Users', 9, NULL, 404, 405),
(319, 5, 'Users', 10, NULL, 740, 741),
(320, 4, 'Users', 11, NULL, 420, 421),
(321, 4, 'Users', 12, NULL, 418, 419),
(322, 2, 'Users', 13, NULL, 226, 227),
(323, 4, 'Users', 14, NULL, 408, 409),
(324, 5, 'Users', 15, NULL, 742, 743),
(325, 5, 'Users', 4, NULL, 744, 745),
(326, 2, 'Users', 5, NULL, 198, 199),
(327, 4, 'Users', 8, NULL, 412, 413),
(328, 2, 'Users', 9, NULL, 208, 209),
(329, 5, 'Users', 10, NULL, 746, 747),
(330, 4, 'Users', 11, NULL, 414, 415),
(331, 4, 'Users', 12, NULL, 416, 417),
(332, 2, 'Users', 2, NULL, 182, 183),
(333, 2, 'Users', 3, NULL, 184, 185),
(334, 2, 'Users', 4, NULL, 186, 187),
(335, 2, 'Users', 5, NULL, 188, 189),
(336, 2, 'Users', 6, NULL, 190, 191),
(337, 2, 'Users', 7, NULL, 202, 203),
(338, 2, 'Users', 8, NULL, 204, 205),
(339, 2, 'Users', 9, NULL, 206, 207),
(340, 2, 'Users', 10, NULL, 212, 213),
(341, 2, 'Users', 11, NULL, 214, 215),
(342, 2, 'Users', 12, NULL, 216, 217),
(343, 2, 'Users', 13, NULL, 218, 219),
(344, 2, 'Users', 14, NULL, 220, 221),
(345, 2, 'Users', 15, NULL, 222, 223),
(346, 2, 'Users', 16, NULL, 224, 225),
(347, 4, 'Users', 17, NULL, 422, 423),
(348, 2, 'Users', 18, NULL, 234, 235),
(349, 2, 'Users', 19, NULL, 236, 237),
(350, 2, 'Users', 20, NULL, 238, 239),
(351, 2, 'Users', 21, NULL, 240, 241),
(352, 4, 'Users', 22, NULL, 424, 425),
(353, 4, 'Users', 23, NULL, 426, 427),
(354, 4, 'Users', 24, NULL, 428, 429),
(355, 4, 'Users', 25, NULL, 430, 431),
(356, 4, 'Users', 26, NULL, 432, 433),
(357, 4, 'Users', 27, NULL, 434, 435),
(358, 4, 'Users', 28, NULL, 436, 437),
(359, 4, 'Users', 29, NULL, 438, 439),
(360, 4, 'Users', 30, NULL, 440, 441),
(361, 4, 'Users', 31, NULL, 442, 443),
(362, 4, 'Users', 32, NULL, 444, 445),
(363, 4, 'Users', 33, NULL, 446, 447),
(364, 4, 'Users', 34, NULL, 448, 449),
(365, 4, 'Users', 35, NULL, 450, 451),
(366, 4, 'Users', 36, NULL, 452, 453),
(367, 4, 'Users', 37, NULL, 454, 455),
(368, 4, 'Users', 38, NULL, 456, 457),
(369, 4, 'Users', 39, NULL, 458, 459),
(370, 2, 'Users', 40, NULL, 242, 243),
(371, 2, 'Users', 41, NULL, 244, 245),
(372, 2, 'Users', 42, NULL, 246, 247),
(373, 2, 'Users', 43, NULL, 248, 249),
(374, 2, 'Users', 44, NULL, 250, 251),
(375, 4, 'Users', 45, NULL, 464, 465);

-- --------------------------------------------------------

--
-- Table structure for table `aros_acos`
--

DROP TABLE IF EXISTS `aros_acos`;
CREATE TABLE `aros_acos` (
  `id` int(11) NOT NULL,
  `aro_id` int(11) NOT NULL,
  `aco_id` int(11) NOT NULL,
  `_create` varchar(2) NOT NULL DEFAULT '0',
  `_read` varchar(2) NOT NULL DEFAULT '0',
  `_update` varchar(2) NOT NULL DEFAULT '0',
  `_delete` varchar(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `aros_acos`
--

INSERT INTO `aros_acos` (`id`, `aro_id`, `aco_id`, `_create`, `_read`, `_update`, `_delete`) VALUES
(1, 1, 1, '1', '1', '1', '1'),
(2, 2, 1, '-1', '-1', '-1', '-1'),
(3, 4, 1, '-1', '-1', '-1', '-1'),
(4, 5, 1, '-1', '-1', '-1', '-1'),
(5, 184, 1, '-1', '-1', '-1', '-1');

-- --------------------------------------------------------

--
-- Table structure for table `company_details`
--

DROP TABLE IF EXISTS `company_details`;
CREATE TABLE `company_details` (
  `id` int(11) NOT NULL,
  `name` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `logo` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `qr_image` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `inquiry_recipient` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `contact_number` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fax` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `google_analytics` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `longtitude` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `latitude` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `facebook` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `twitter` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `instagram` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `linkedin` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `company_details`
--

INSERT INTO `company_details` (`id`, `name`, `logo`, `qr_image`, `email`, `address`, `inquiry_recipient`, `contact_number`, `fax`, `google_analytics`, `longtitude`, `latitude`, `facebook`, `twitter`, `instagram`, `linkedin`, `created`, `modified`) VALUES
(1, 'Sample Company', NULL, NULL, 'admin@gmail.com', '<p>Lorem ipsum dolor sit amet, cum ea paulo percipitur, enim virtute accusamus nam te. Ei bonorum nusquam civibus est, qui id facete recusabo. Probo modus ut has. Utamur iudicabit abhorreant cum no.</p>\r\n', 'inquiry@gmail.com', '1234-567', '12345', '<script>\r\n  (function(i,s,o,g,r,a,m){i[\'GoogleAnalyticsObject\']=r;i[r]=i[r]||function(){\r\n  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),\r\n  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)\r\n  })(window,document,\'script\',\'https://www.google-analytics.com/analytics.js\',\'ga\');\r\n\r\n  ga(\'create\', \'UA-101002491-1\', \'auto\');\r\n  ga(\'send\', \'pageview\');\r\n\r\n</script>', '103.67841453967287', '1.523208409167528', 'http://facebook.com', 'http://twitter.com', 'http://instagram.com', 'http://linkedin.com', '2017-05-18 01:26:05', '2019-03-07 17:32:45');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

DROP TABLE IF EXISTS `groups`;
CREATE TABLE `groups` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(180) CHARACTER SET latin1 NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `created`, `modified`) VALUES
(1, 'Master Admin', '2017-11-11 10:37:56', '2017-11-11 10:37:56'),
(7, 'Business Brokers', '2020-07-28 15:34:31', '2020-07-28 15:34:31'),
(8, 'Administrators / Liquidators', '2020-07-28 15:34:43', '2020-07-28 15:35:20'),
(9, 'Franchise Groups', '2020-07-28 15:34:50', '2020-07-28 15:34:50'),
(10, 'Business Buyers / Sellers', '2020-07-28 15:34:59', '2020-07-28 15:35:30');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

DROP TABLE IF EXISTS `pages`;
CREATE TABLE `pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) CHARACTER SET latin1 NOT NULL,
  `body` text CHARACTER SET latin1 NOT NULL,
  `meta_title` text CHARACTER SET latin1 NOT NULL,
  `meta_keyword` text CHARACTER SET latin1 NOT NULL,
  `meta_description` text CHARACTER SET latin1 NOT NULL,
  `is_publish` smallint(2) NOT NULL,
  `sorting` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `slides`
--

DROP TABLE IF EXISTS `slides`;
CREATE TABLE `slides` (
  `id` int(11) NOT NULL,
  `title` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `caption` text COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(90) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(90) COLLATE utf8_unicode_ci NOT NULL,
  `sorting` int(11) NOT NULL,
  `is_publish` smallint(2) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `full_name` varchar(110) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `contact_number` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(80) CHARACTER SET latin1 NOT NULL,
  `password` varchar(255) CHARACTER SET latin1 NOT NULL,
  `photo` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `group_id` int(11) NOT NULL,
  `activation_code` varchar(180) COLLATE utf8_unicode_ci DEFAULT NULL,
  `reset_code` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_active` smallint(2) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `email`, `contact_number`, `username`, `password`, `photo`, `group_id`, `activation_code`, `reset_code`, `is_active`, `created`, `modified`) VALUES
(1, 'Admin Admin', 'admin@gmail.com', '', 'admin@gmail.com', '$2y$10$1gq/wAO44Uu1OE6LsmXc1erpe3JYBI69dL44QaQYak67CkHF6sHJG', '1516215607_985900.jpg', 1, NULL, NULL, 1, '2017-11-11 10:41:49', '2019-09-19 16:38:22');

-- --------------------------------------------------------

--
-- Table structure for table `user_entities`
--

DROP TABLE IF EXISTS `user_entities`;
CREATE TABLE `user_entities` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `lft` int(11) NOT NULL,
  `rght` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `account_id` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `wallet_amount` float(11,2) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acl_phinxlog`
--
ALTER TABLE `acl_phinxlog`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `acos`
--
ALTER TABLE `acos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lft` (`lft`,`rght`),
  ADD KEY `alias` (`alias`);

--
-- Indexes for table `ads`
--
ALTER TABLE `ads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aros`
--
ALTER TABLE `aros`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lft` (`lft`,`rght`),
  ADD KEY `alias` (`alias`);

--
-- Indexes for table `aros_acos`
--
ALTER TABLE `aros_acos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `aro_id` (`aro_id`,`aco_id`),
  ADD KEY `aco_id` (`aco_id`);

--
-- Indexes for table `company_details`
--
ALTER TABLE `company_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `group_id` (`group_id`);

--
-- Indexes for table `user_entities`
--
ALTER TABLE `user_entities`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acos`
--
ALTER TABLE `acos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=405;

--
-- AUTO_INCREMENT for table `ads`
--
ALTER TABLE `ads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `aros`
--
ALTER TABLE `aros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=376;

--
-- AUTO_INCREMENT for table `aros_acos`
--
ALTER TABLE `aros_acos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `company_details`
--
ALTER TABLE `company_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `slides`
--
ALTER TABLE `slides`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `user_entities`
--
ALTER TABLE `user_entities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
