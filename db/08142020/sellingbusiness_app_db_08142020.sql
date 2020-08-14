-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 13, 2020 at 06:10 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
  `migration_name` varchar(100) DEFAULT NULL,
  `start_time` timestamp NULL DEFAULT NULL,
  `end_time` timestamp NULL DEFAULT NULL,
  `breakpoint` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `acl_phinxlog`
--

INSERT INTO `acl_phinxlog` (`version`, `migration_name`, `start_time`, `end_time`, `breakpoint`) VALUES
(20141229162641, 'CakePhpDbAcl', '2020-08-13 06:50:07', '2020-08-13 06:50:07', 0);

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
(1, NULL, NULL, NULL, 'controllers', 1, 100),
(2, 1, NULL, NULL, 'Groups', 2, 13),
(3, 2, NULL, NULL, 'index', 3, 4),
(4, 2, NULL, NULL, 'view', 5, 6),
(5, 2, NULL, NULL, 'add', 7, 8),
(6, 2, NULL, NULL, 'edit', 9, 10),
(7, 2, NULL, NULL, 'delete', 11, 12),
(8, 1, NULL, NULL, 'Pages', 14, 17),
(9, 8, NULL, NULL, 'display', 15, 16),
(10, 1, NULL, NULL, 'Posts', 18, 29),
(11, 10, NULL, NULL, 'index', 19, 20),
(12, 10, NULL, NULL, 'view', 21, 22),
(13, 10, NULL, NULL, 'add', 23, 24),
(14, 10, NULL, NULL, 'edit', 25, 26),
(15, 10, NULL, NULL, 'delete', 27, 28),
(16, 1, NULL, NULL, 'Users', 30, 45),
(17, 16, NULL, NULL, 'index', 31, 32),
(18, 16, NULL, NULL, 'view', 33, 34),
(19, 16, NULL, NULL, 'add', 35, 36),
(20, 16, NULL, NULL, 'edit', 37, 38),
(21, 16, NULL, NULL, 'delete', 39, 40),
(22, 16, NULL, NULL, 'login', 41, 42),
(23, 16, NULL, NULL, 'logout', 43, 44),
(24, 1, NULL, NULL, 'Widgets', 46, 57),
(25, 24, NULL, NULL, 'index', 47, 48),
(26, 24, NULL, NULL, 'view', 49, 50),
(27, 24, NULL, NULL, 'add', 51, 52),
(28, 24, NULL, NULL, 'edit', 53, 54),
(29, 24, NULL, NULL, 'delete', 55, 56),
(30, 1, NULL, NULL, 'Acl', 58, 59),
(31, 1, NULL, NULL, 'Bake', 60, 61),
(32, 1, NULL, NULL, 'DebugKit', 62, 97),
(33, 32, NULL, NULL, 'Composer', 63, 66),
(34, 33, NULL, NULL, 'checkDependencies', 64, 65),
(35, 32, NULL, NULL, 'Dashboard', 67, 72),
(36, 35, NULL, NULL, 'index', 68, 69),
(37, 35, NULL, NULL, 'reset', 70, 71),
(38, 32, NULL, NULL, 'DebugKit', 73, 74),
(39, 32, NULL, NULL, 'MailPreview', 75, 82),
(40, 39, NULL, NULL, 'index', 76, 77),
(41, 39, NULL, NULL, 'sent', 78, 79),
(42, 39, NULL, NULL, 'email', 80, 81),
(43, 32, NULL, NULL, 'Panels', 83, 88),
(44, 43, NULL, NULL, 'index', 84, 85),
(45, 43, NULL, NULL, 'view', 86, 87),
(46, 32, NULL, NULL, 'Requests', 89, 92),
(47, 46, NULL, NULL, 'view', 90, 91),
(48, 32, NULL, NULL, 'Toolbar', 93, 96),
(49, 48, NULL, NULL, 'clearCache', 94, 95),
(50, 1, NULL, NULL, 'Migrations', 98, 99);

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
(1, NULL, 'Groups', 8, NULL, 1, 2),
(2, NULL, 'Groups', 1, NULL, 3, 6),
(3, NULL, 'Groups', 2, NULL, 7, 12),
(4, 3, 'Users', 6, NULL, 8, 9),
(5, 2, 'Users', 1, NULL, 4, 5),
(6, 3, 'Users', 2, NULL, 10, 11),
(7, NULL, 'Groups', 1, NULL, 13, 14),
(8, NULL, 'Groups', 1, NULL, 15, 18),
(9, 8, 'Users', 1, NULL, 16, 17),
(10, NULL, 'Groups', 2, NULL, 19, 22),
(11, NULL, 'Groups', 3, NULL, 23, 24),
(12, NULL, 'Groups', 4, NULL, 25, 28),
(13, NULL, 'Groups', 5, NULL, 29, 30),
(14, 12, 'Users', 2, NULL, 26, 27),
(15, 10, 'Users', 3, NULL, 20, 21);

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
(1, 2, 1, '1', '1', '1', '1'),
(2, 3, 1, '1', '1', '1', '1'),
(3, 8, 1, '1', '1', '1', '1'),
(4, 10, 1, '-1', '-1', '-1', '-1'),
(5, 11, 1, '-1', '-1', '-1', '-1'),
(6, 12, 1, '-1', '-1', '-1', '-1'),
(7, 13, 1, '-1', '-1', '-1', '-1');

-- --------------------------------------------------------

--
-- Table structure for table `business`
--

DROP TABLE IF EXISTS `business`;
CREATE TABLE `business` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `taking` varchar(255) NOT NULL,
  `weekly_turnover` varchar(255) NOT NULL,
  `average_weekly_takings` varchar(255) NOT NULL,
  `annual_return` varchar(255) NOT NULL,
  `cover_photo` varchar(255) NOT NULL,
  `business_listing_title` varchar(255) NOT NULL,
  `business_description` text NOT NULL,
  `state` varchar(255) NOT NULL,
  `postal_code` varchar(255) NOT NULL,
  `primary_agent` varchar(255) NOT NULL,
  `business_type_id` int(255) NOT NULL,
  `office` varchar(255) NOT NULL,
  `sales_authority_id` int(255) NOT NULL,
  `authority_start_date` date NOT NULL,
  `authority_end_date` date NOT NULL,
  `business_category_id` int(11) NOT NULL,
  `feature_listing` varchar(255) NOT NULL,
  `estate_building` varchar(255) NOT NULL,
  `unit_prefix` varchar(255) NOT NULL,
  `unit_number` varchar(255) NOT NULL,
  `street_lot_number` varchar(255) NOT NULL,
  `street_name` varchar(255) NOT NULL,
  `listing_suburb` varchar(255) NOT NULL,
  `advertising_suburb` varchar(255) NOT NULL,
  `google_maps_address` text NOT NULL,
  `marketing_sales_price` varchar(255) NOT NULL,
  `marketing_price_text` varchar(255) NOT NULL,
  `annual_lease_price` varchar(255) NOT NULL,
  `actual_sales_price` varchar(255) NOT NULL,
  `price_comment` text NOT NULL,
  `lease_terms` varchar(255) NOT NULL,
  `parking` varchar(255) NOT NULL,
  `lease_comments` text NOT NULL,
  `other_feature` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `business_categories`
--

DROP TABLE IF EXISTS `business_categories`;
CREATE TABLE `business_categories` (
  `id` int(11) NOT NULL,
  `name` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `business_categories`
--

INSERT INTO `business_categories` (`id`, `name`, `created`, `modified`) VALUES
(1, 'CAT A', '2020-08-03 23:09:13', '2020-08-03 23:09:28');

-- --------------------------------------------------------

--
-- Table structure for table `business_types`
--

DROP TABLE IF EXISTS `business_types`;
CREATE TABLE `business_types` (
  `id` int(11) NOT NULL,
  `name` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `business_types`
--

INSERT INTO `business_types` (`id`, `name`, `created`, `modified`) VALUES
(1, 'TEST ABB', '2020-08-03 23:04:37', '2020-08-03 23:09:01'),
(2, 'AAAA', '2020-08-11 14:57:19', '2020-08-11 14:57:19');

-- --------------------------------------------------------

--
-- Table structure for table `company_details`
--

DROP TABLE IF EXISTS `company_details`;
CREATE TABLE `company_details` (
  `id` int(11) NOT NULL,
  `name` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `logo` text COLLATE utf8_unicode_ci,
  `qr_image` text COLLATE utf8_unicode_ci,
  `email` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `inquiry_recipient` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `contact_number` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fax` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `google_analytics` text COLLATE utf8_unicode_ci,
  `longtitude` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `latitude` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `facebook` text COLLATE utf8_unicode_ci,
  `twitter` text COLLATE utf8_unicode_ci,
  `instagram` text COLLATE utf8_unicode_ci,
  `linkedin` text COLLATE utf8_unicode_ci,
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
(1, 'Master Admin', '2020-08-13 23:03:15', '2020-08-13 23:03:15'),
(2, 'Business Brokers', '2020-08-13 23:04:07', '2020-08-13 23:04:07'),
(3, 'Administrators / Liquidators', '2020-08-13 23:04:13', '2020-08-13 23:04:13'),
(4, 'Franchise Groups', '2020-08-13 23:04:17', '2020-08-13 23:04:17'),
(5, 'Business Buyers / Sellers', '2020-08-13 23:04:22', '2020-08-13 23:04:22');

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
-- Table structure for table `sales_authorities`
--

DROP TABLE IF EXISTS `sales_authorities`;
CREATE TABLE `sales_authorities` (
  `id` int(11) NOT NULL,
  `name` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sales_authorities`
--

INSERT INTO `sales_authorities` (`id`, `name`, `created`, `modified`) VALUES
(1, 'AUTH 1', '2020-08-03 23:09:37', '2020-08-03 23:09:37');

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
  `firstname` varchar(110) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(110) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `contact_number` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(80) CHARACTER SET latin1 NOT NULL,
  `password` varchar(255) CHARACTER SET latin1 NOT NULL,
  `photo` text COLLATE utf8_unicode_ci,
  `group_id` int(11) NOT NULL,
  `activation_code` varchar(180) COLLATE utf8_unicode_ci DEFAULT NULL,
  `reset_code` text COLLATE utf8_unicode_ci,
  `is_active` smallint(2) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `contact_number`, `username`, `password`, `photo`, `group_id`, `activation_code`, `reset_code`, `is_active`, `created`, `modified`) VALUES
(1, 'Admin', 'Admin', 'admin@gmail.com', '', 'admin@gmail.com', '$2y$10$r.VI3eSTqxFNuZTB7eE.TecCoGF7CsmvJn4HrZjJOGjshnIFqZw3K', NULL, 1, NULL, NULL, 1, '2020-08-13 23:03:45', '2020-08-13 23:03:45'),
(2, 'Franchise', 'Franchise', 'franchise@gmail.com', '', 'franchise@gmail.com', '$2y$10$/ryHOBrHzKTB4BBQr6jypu8asJ7oxPvaa7QrelSdMFvcXlgOLRbiy', NULL, 4, NULL, NULL, 1, '2020-08-13 23:05:05', '2020-08-13 23:05:05'),
(3, 'Brokers', 'Brokers', 'broker@gmail.com', '', 'brokera@gmail.com', '$2y$10$5wBv/mU993uJGMrHCfMUdOmVWvAl4/t/NHOnKq9JCa8.iF6w3RAUm', NULL, 2, NULL, NULL, 1, '2020-08-13 23:06:41', '2020-08-13 23:06:41');

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
-- Indexes for table `business`
--
ALTER TABLE `business`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ID` (`id`) USING BTREE,
  ADD KEY `Title` (`business_listing_title`(191)) USING BTREE,
  ADD KEY `user_id` (`user_id`) USING BTREE;

--
-- Indexes for table `business_categories`
--
ALTER TABLE `business_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `business_types`
--
ALTER TABLE `business_types`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `sales_authorities`
--
ALTER TABLE `sales_authorities`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `aros`
--
ALTER TABLE `aros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `aros_acos`
--
ALTER TABLE `aros_acos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `business`
--
ALTER TABLE `business`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `business_categories`
--
ALTER TABLE `business_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `business_types`
--
ALTER TABLE `business_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `company_details`
--
ALTER TABLE `company_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sales_authorities`
--
ALTER TABLE `sales_authorities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `slides`
--
ALTER TABLE `slides`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_entities`
--
ALTER TABLE `user_entities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
