-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2021 at 05:03 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `audit_trail`
--

CREATE TABLE `audit_trail` (
  `id` int(11) NOT NULL,
  `query` text NOT NULL,
  `other` varchar(160) NOT NULL,
  `date_time` datetime NOT NULL DEFAULT current_timestamp(),
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `audit_trail`
--

INSERT INTO `audit_trail` (`id`, `query`, `other`, `date_time`, `username`) VALUES
(0, 'UPDATE login_activity SET `username` = \'admin\',`key` = \'d045365e905dee9cc413\',`datetime_active` = \'2021-11-09 19:45:31\' WHERE `id` = \'0\'', '', '2021-11-09 20:45:32', 'admin'),
(0, 'UPDATE login_activity SET `username` = \'admin\',`key` = \'d045365e905dee9cc413\',`datetime_active` = \'2021-11-09 19:46:53\' WHERE `id` = \'0\'', '', '2021-11-09 20:46:53', 'admin'),
(0, 'UPDATE login_activity SET `username` = \'admin\',`key` = \'d045365e905dee9cc413\',`datetime_active` = \'2021-11-09 19:52:29\' WHERE `id` = \'0\'', '', '2021-11-09 20:52:29', 'admin'),
(0, 'UPDATE login_activity SET `username` = \'admin\',`key` = \'d045365e905dee9cc413\',`datetime_active` = \'2021-11-09 19:54:03\' WHERE `id` = \'0\'', '', '2021-11-09 20:54:03', 'admin'),
(0, 'UPDATE login_activity SET `username` = \'admin\',`key` = \'d045365e905dee9cc413\',`datetime_active` = \'2021-11-09 19:55:09\' WHERE `id` = \'0\'', '', '2021-11-09 20:55:09', 'admin'),
(0, 'UPDATE login_activity SET `username` = \'admin\',`key` = \'d045365e905dee9cc413\',`datetime_active` = \'2021-11-09 19:58:38\' WHERE `id` = \'0\'', '', '2021-11-09 20:58:38', 'admin'),
(0, 'UPDATE login_activity SET `username` = \'admin\',`key` = \'d045365e905dee9cc413\',`datetime_active` = \'2021-11-09 19:59:55\' WHERE `id` = \'0\'', '', '2021-11-09 20:59:55', 'admin'),
(0, 'INSERT INTO users(`user_id`,`name`,`surname`,`ID`) VALUES(\'\',\'Festus\',\'David\',\'90080701238\')', '', '2021-11-09 20:59:56', 'admin'),
(0, 'UPDATE login_activity SET `username` = \'admin\',`key` = \'d045365e905dee9cc413\',`datetime_active` = \'2021-11-09 20:06:02\' WHERE `id` = \'0\'', '', '2021-11-09 21:06:02', 'admin'),
(0, 'INSERT INTO users(`user_id`,`name`,`surname`,`ID`) VALUES(\'\',\'John\',\'Tomas\',\'57101274691\')', '', '2021-11-09 21:06:03', 'admin'),
(0, 'INSERT INTO users(`user_id`,`name`,`surname`,`ID`) VALUES(\'\',\'Sara\',\'Chris\',\'88010202170\')', '', '2021-11-09 21:06:03', 'admin'),
(0, 'INSERT INTO users(`user_id`,`name`,`surname`,`ID`) VALUES(\'\',\'James\',\'Brown\',\'75111232911\')', '', '2021-11-09 21:06:03', 'admin'),
(0, 'UPDATE login_activity SET `username` = \'admin\',`key` = \'d045365e905dee9cc413\',`datetime_active` = \'2021-11-09 20:16:35\' WHERE `id` = \'0\'', '', '2021-11-09 21:16:35', 'admin'),
(0, 'INSERT INTO users(`user_id`,`name`,`surname`,`ID`) VALUES(\'\',\'Festus\',\'David\',\'90080701238\')', '', '2021-11-09 21:16:36', 'admin'),
(0, 'UPDATE login_activity SET `username` = \'admin\',`key` = \'d045365e905dee9cc413\',`datetime_active` = \'2021-11-09 20:17:32\' WHERE `id` = \'0\'', '', '2021-11-09 21:17:32', 'admin'),
(0, 'UPDATE login_activity SET `username` = \'admin\',`key` = \'d045365e905dee9cc413\',`datetime_active` = \'2021-11-09 20:17:50\' WHERE `id` = \'0\'', '', '2021-11-09 21:17:50', 'admin'),
(0, 'UPDATE login_activity SET `username` = \'admin\',`key` = \'d045365e905dee9cc413\',`datetime_active` = \'2021-11-09 20:18:51\' WHERE `id` = \'0\'', '', '2021-11-09 21:18:51', 'admin'),
(0, 'UPDATE login_activity SET `username` = \'admin\',`key` = \'d045365e905dee9cc413\',`datetime_active` = \'2021-11-09 20:20:00\' WHERE `id` = \'0\'', '', '2021-11-09 21:20:00', 'admin'),
(0, 'UPDATE login_activity SET `username` = \'admin\',`key` = \'d045365e905dee9cc413\',`datetime_active` = \'2021-11-09 20:20:15\' WHERE `id` = \'0\'', '', '2021-11-09 21:20:15', 'admin'),
(0, 'UPDATE login_activity SET `username` = \'admin\',`key` = \'d045365e905dee9cc413\',`datetime_active` = \'2021-11-09 20:23:28\' WHERE `id` = \'0\'', '', '2021-11-09 21:23:28', 'admin'),
(0, 'UPDATE login_activity SET `username` = \'admin\',`key` = \'d045365e905dee9cc413\',`datetime_active` = \'2021-11-09 20:24:21\' WHERE `id` = \'0\'', '', '2021-11-09 21:24:21', 'admin'),
(0, 'UPDATE login_activity SET `username` = \'admin\',`key` = \'d045365e905dee9cc413\',`datetime_active` = \'2021-11-09 20:24:27\' WHERE `id` = \'0\'', '', '2021-11-09 21:24:27', 'admin'),
(0, 'UPDATE login_activity SET `username` = \'admin\',`key` = \'d045365e905dee9cc413\',`datetime_active` = \'2021-11-09 20:25:56\' WHERE `id` = \'0\'', '', '2021-11-09 21:25:56', 'admin'),
(0, 'UPDATE login_activity SET `username` = \'admin\',`key` = \'d045365e905dee9cc413\',`datetime_active` = \'2021-11-09 20:25:59\' WHERE `id` = \'0\'', '', '2021-11-09 21:25:59', 'admin'),
(0, 'UPDATE login_activity SET `username` = \'admin\',`key` = \'d045365e905dee9cc413\',`datetime_active` = \'2021-11-09 20:26:12\' WHERE `id` = \'0\'', '', '2021-11-09 21:26:12', 'admin'),
(0, 'UPDATE login_activity SET `username` = \'admin\',`key` = \'d045365e905dee9cc413\',`datetime_active` = \'2021-11-09 20:26:26\' WHERE `id` = \'0\'', '', '2021-11-09 21:26:27', 'admin'),
(0, 'UPDATE login_activity SET `username` = \'admin\',`key` = \'d045365e905dee9cc413\',`datetime_active` = \'2021-11-09 20:26:32\' WHERE `id` = \'0\'', '', '2021-11-09 21:26:32', 'admin'),
(0, 'UPDATE login_activity SET `username` = \'admin\',`key` = \'d045365e905dee9cc413\',`datetime_active` = \'2021-11-09 20:26:51\' WHERE `id` = \'0\'', '', '2021-11-09 21:26:51', 'admin'),
(0, 'UPDATE login_activity SET `username` = \'admin\',`key` = \'d045365e905dee9cc413\',`datetime_active` = \'2021-11-09 20:27:17\' WHERE `id` = \'0\'', '', '2021-11-09 21:27:17', 'admin'),
(0, 'UPDATE login_activity SET `username` = \'admin\',`key` = \'d045365e905dee9cc413\',`datetime_active` = \'2021-11-09 20:27:23\' WHERE `id` = \'0\'', '', '2021-11-09 21:27:23', 'admin'),
(0, 'UPDATE login_activity SET `username` = \'admin\',`key` = \'d045365e905dee9cc413\',`datetime_active` = \'2021-11-09 20:30:07\' WHERE `id` = \'0\'', '', '2021-11-09 21:30:07', 'admin'),
(0, 'UPDATE login_activity SET `username` = \'admin\',`key` = \'d045365e905dee9cc413\',`datetime_active` = \'2021-11-09 20:30:22\' WHERE `id` = \'0\'', '', '2021-11-09 21:30:22', 'admin'),
(0, 'UPDATE login_activity SET `username` = \'admin\',`key` = \'d045365e905dee9cc413\',`datetime_active` = \'2021-11-09 20:30:31\' WHERE `id` = \'0\'', '', '2021-11-09 21:30:31', 'admin'),
(0, 'UPDATE login_activity SET `username` = \'admin\',`key` = \'d045365e905dee9cc413\',`datetime_active` = \'2021-11-09 20:31:04\' WHERE `id` = \'0\'', '', '2021-11-09 21:31:04', 'admin'),
(0, 'UPDATE login_activity SET `username` = \'admin\',`key` = \'d045365e905dee9cc413\',`datetime_active` = \'2021-11-09 20:31:07\' WHERE `id` = \'0\'', '', '2021-11-09 21:31:07', 'admin'),
(0, 'UPDATE login_activity SET `username` = \'admin\',`key` = \'d045365e905dee9cc413\',`datetime_active` = \'2021-11-09 20:39:40\' WHERE `id` = \'0\'', '', '2021-11-09 21:39:40', 'admin'),
(0, 'UPDATE login_activity SET `username` = \'admin\',`key` = \'d045365e905dee9cc413\',`datetime_active` = \'2021-11-09 20:39:44\' WHERE `id` = \'0\'', '', '2021-11-09 21:39:45', 'admin'),
(0, 'UPDATE login_activity SET `username` = \'admin\',`key` = \'d045365e905dee9cc413\',`datetime_active` = \'2021-11-09 20:40:20\' WHERE `id` = \'0\'', '', '2021-11-09 21:40:21', 'admin'),
(0, 'UPDATE login_activity SET `username` = \'admin\',`key` = \'d045365e905dee9cc413\',`datetime_active` = \'2021-11-09 20:40:35\' WHERE `id` = \'0\'', '', '2021-11-09 21:40:35', 'admin'),
(0, 'UPDATE login_activity SET `username` = \'admin\',`key` = \'d045365e905dee9cc413\',`datetime_active` = \'2021-11-09 20:40:56\' WHERE `id` = \'0\'', '', '2021-11-09 21:40:56', 'admin'),
(0, 'UPDATE login_activity SET `username` = \'admin\',`key` = \'d045365e905dee9cc413\',`datetime_active` = \'2021-11-09 20:41:07\' WHERE `id` = \'0\'', '', '2021-11-09 21:41:07', 'admin'),
(0, 'UPDATE login_activity SET `username` = \'admin\',`key` = \'d045365e905dee9cc413\',`datetime_active` = \'2021-11-09 20:41:16\' WHERE `id` = \'0\'', '', '2021-11-09 21:41:16', 'admin'),
(0, 'UPDATE login_activity SET `username` = \'admin\',`key` = \'d045365e905dee9cc413\',`datetime_active` = \'2021-11-09 20:41:51\' WHERE `id` = \'0\'', '', '2021-11-09 21:41:51', 'admin'),
(0, 'UPDATE login_activity SET `username` = \'admin\',`key` = \'d045365e905dee9cc413\',`datetime_active` = \'2021-11-09 20:41:56\' WHERE `id` = \'0\'', '', '2021-11-09 21:41:56', 'admin'),
(0, 'UPDATE login_activity SET `username` = \'admin\',`key` = \'d045365e905dee9cc413\',`datetime_active` = \'2021-11-09 20:42:11\' WHERE `id` = \'0\'', '', '2021-11-09 21:42:12', 'admin'),
(0, 'UPDATE login_activity SET `username` = \'admin\',`key` = \'d045365e905dee9cc413\',`datetime_active` = \'2021-11-09 20:42:15\' WHERE `id` = \'0\'', '', '2021-11-09 21:42:15', 'admin'),
(0, 'UPDATE login_activity SET `username` = \'admin\',`key` = \'d045365e905dee9cc413\',`datetime_active` = \'2021-11-09 20:42:19\' WHERE `id` = \'0\'', '', '2021-11-09 21:42:19', 'admin'),
(0, 'UPDATE login_activity SET `username` = \'admin\',`key` = \'d045365e905dee9cc413\',`datetime_active` = \'2021-11-09 20:42:43\' WHERE `id` = \'0\'', '', '2021-11-09 21:42:43', 'admin'),
(0, 'UPDATE login_activity SET `username` = \'admin\',`key` = \'d045365e905dee9cc413\',`datetime_active` = \'2021-11-09 21:53:46\' WHERE `id` = \'0\'', '', '2021-11-09 22:53:47', 'admin'),
(0, 'UPDATE login_activity SET `username` = \'admin\',`key` = \'d045365e905dee9cc413\',`datetime_active` = \'2021-11-09 22:48:37\' WHERE `id` = \'0\'', '', '2021-11-09 23:48:38', 'admin'),
(0, 'UPDATE login_activity SET `username` = \'admin\',`key` = \'d045365e905dee9cc413\',`datetime_active` = \'2021-11-09 23:12:05\' WHERE `id` = \'0\'', '', '2021-11-10 00:12:10', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `currency`
--

CREATE TABLE `currency` (
  `country` varchar(100) DEFAULT NULL,
  `currency` varchar(100) DEFAULT NULL,
  `code` varchar(100) DEFAULT NULL,
  `symbol` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `currency`
--

INSERT INTO `currency` (`country`, `currency`, `code`, `symbol`) VALUES
('Albania', 'Leke', 'ALL', 'Lek'),
('America', 'Dollars', 'USD', '$'),
('Afghanistan', 'Afghanis', 'AFN', '?'),
('Argentina', 'Pesos', 'ARS', '$'),
('Aruba', 'Guilders', 'AWG', 'ƒ'),
('Australia', 'Dollars', 'AUD', '$'),
('Azerbaijan', 'New Manats', 'AZN', '???'),
('Bahamas', 'Dollars', 'BSD', '$'),
('Barbados', 'Dollars', 'BBD', '$'),
('Belarus', 'Rubles', 'BYR', 'p.'),
('Belgium', 'Euro', 'EUR', '€'),
('Beliz', 'Dollars', 'BZD', 'BZ$'),
('Bermuda', 'Dollars', 'BMD', '$'),
('Bolivia', 'Bolivianos', 'BOB', '$b'),
('Bosnia and Herzegovina', 'Convertible Marka', 'BAM', 'KM'),
('Botswana', 'Pula', 'BWP', 'P'),
('Bulgaria', 'Leva', 'BGN', '??'),
('Brazil', 'Reais', 'BRL', 'R$'),
('Britain (United Kingdom)', 'Pounds', 'GBP', '£'),
('Brunei Darussalam', 'Dollars', 'BND', '$'),
('Cambodia', 'Riels', 'KHR', '?'),
('Canada', 'Dollars', 'CAD', '$'),
('Cayman Islands', 'Dollars', 'KYD', '$'),
('Chile', 'Pesos', 'CLP', '$'),
('China', 'Yuan Renminbi', 'CNY', '¥'),
('Colombia', 'Pesos', 'COP', '$'),
('Costa Rica', 'Colón', 'CRC', '?'),
('Croatia', 'Kuna', 'HRK', 'kn'),
('Cuba', 'Pesos', 'CUP', '?'),
('Cyprus', 'Euro', 'EUR', '€'),
('Czech Republic', 'Koruny', 'CZK', 'K?'),
('Denmark', 'Kroner', 'DKK', 'kr'),
('Dominican Republic', 'Pesos', 'DOP ', 'RD$'),
('East Caribbean', 'Dollars', 'XCD', '$'),
('Egypt', 'Pounds', 'EGP', '£'),
('El Salvador', 'Colones', 'SVC', '$'),
('England (United Kingdom)', 'Pounds', 'GBP', '£'),
('Euro', 'Euro', 'EUR', '€'),
('Falkland Islands', 'Pounds', 'FKP', '£'),
('Fiji', 'Dollars', 'FJD', '$'),
('France', 'Euro', 'EUR', '€'),
('Ghana', 'Cedis', 'GHC', '¢'),
('Gibraltar', 'Pounds', 'GIP', '£'),
('Greece', 'Euro', 'EUR', '€'),
('Guatemala', 'Quetzales', 'GTQ', 'Q'),
('Guernsey', 'Pounds', 'GGP', '£'),
('Guyana', 'Dollars', 'GYD', '$'),
('Holland (Netherlands)', 'Euro', 'EUR', '€'),
('Honduras', 'Lempiras', 'HNL', 'L'),
('Hong Kong', 'Dollars', 'HKD', '$'),
('Hungary', 'Forint', 'HUF', 'Ft'),
('Iceland', 'Kronur', 'ISK', 'kr'),
('India', 'Rupees', 'INR', 'Rp'),
('Indonesia', 'Rupiahs', 'IDR', 'Rp'),
('Iran', 'Rials', 'IRR', '?'),
('Ireland', 'Euro', 'EUR', '€'),
('Isle of Man', 'Pounds', 'IMP', '£'),
('Israel', 'New Shekels', 'ILS', '?'),
('Italy', 'Euro', 'EUR', '€'),
('Jamaica', 'Dollars', 'JMD', 'J$'),
('Japan', 'Yen', 'JPY', '¥'),
('Jersey', 'Pounds', 'JEP', '£'),
('Kazakhstan', 'Tenge', 'KZT', '??'),
('Korea (North)', 'Won', 'KPW', '?'),
('Korea (South)', 'Won', 'KRW', '?'),
('Kyrgyzstan', 'Soms', 'KGS', '??'),
('Laos', 'Kips', 'LAK', '?'),
('Latvia', 'Lati', 'LVL', 'Ls'),
('Lebanon', 'Pounds', 'LBP', '£'),
('Liberia', 'Dollars', 'LRD', '$'),
('Liechtenstein', 'Switzerland Francs', 'CHF', 'CHF'),
('Lithuania', 'Litai', 'LTL', 'Lt'),
('Luxembourg', 'Euro', 'EUR', '€'),
('Macedonia', 'Denars', 'MKD', '???'),
('Malaysia', 'Ringgits', 'MYR', 'RM'),
('Malta', 'Euro', 'EUR', '€'),
('Mauritius', 'Rupees', 'MUR', '?'),
('Mexico', 'Pesos', 'MXN', '$'),
('Mongolia', 'Tugriks', 'MNT', '?'),
('Mozambique', 'Meticais', 'MZN', 'MT'),
('Namibia', 'Dollars', 'NAD', 'N$'),
('Nepal', 'Rupees', 'NPR', '?'),
('Netherlands Antilles', 'Guilders', 'ANG', 'ƒ'),
('Netherlands', 'Euro', 'EUR', '€'),
('New Zealand', 'Dollars', 'NZD', '$'),
('Nicaragua', 'Cordobas', 'NIO', 'C$'),
('Nigeria', 'Nairas', 'NGN', '?'),
('North Korea', 'Won', 'KPW', '?'),
('Norway', 'Krone', 'NOK', 'kr'),
('Oman', 'Rials', 'OMR', '?'),
('Pakistan', 'Rupees', 'PKR', '?'),
('Panama', 'Balboa', 'PAB', 'B/.'),
('Paraguay', 'Guarani', 'PYG', 'Gs'),
('Peru', 'Nuevos Soles', 'PEN', 'S/.'),
('Philippines', 'Pesos', 'PHP', 'Php'),
('Poland', 'Zlotych', 'PLN', 'z?'),
('Qatar', 'Rials', 'QAR', '?'),
('Romania', 'New Lei', 'RON', 'lei'),
('Russia', 'Rubles', 'RUB', '???'),
('Saint Helena', 'Pounds', 'SHP', '£'),
('Saudi Arabia', 'Riyals', 'SAR', '?'),
('Serbia', 'Dinars', 'RSD', '???.'),
('Seychelles', 'Rupees', 'SCR', '?'),
('Singapore', 'Dollars', 'SGD', '$'),
('Slovenia', 'Euro', 'EUR', '€'),
('Solomon Islands', 'Dollars', 'SBD', '$'),
('Somalia', 'Shillings', 'SOS', 'S'),
('South Africa', 'Rand', 'ZAR', 'R'),
('South Korea', 'Won', 'KRW', '?'),
('Spain', 'Euro', 'EUR', '€'),
('Sri Lanka', 'Rupees', 'LKR', '?'),
('Sweden', 'Kronor', 'SEK', 'kr'),
('Switzerland', 'Francs', 'CHF', 'CHF'),
('Suriname', 'Dollars', 'SRD', '$'),
('Syria', 'Pounds', 'SYP', '£'),
('Taiwan', 'New Dollars', 'TWD', 'NT$'),
('Thailand', 'Baht', 'THB', '?'),
('Trinidad and Tobago', 'Dollars', 'TTD', 'TT$'),
('Turkey', 'Lira', 'TRY', 'TL'),
('Turkey', 'Liras', 'TRL', '£'),
('Tuvalu', 'Dollars', 'TVD', '$'),
('Ukraine', 'Hryvnia', 'UAH', '?'),
('United Kingdom', 'Pounds', 'GBP', '£'),
('United States of America', 'Dollars', 'USD', '$'),
('Uruguay', 'Pesos', 'UYU', '$U'),
('Uzbekistan', 'Sums', 'UZS', '??'),
('Vatican City', 'Euro', 'EUR', '€'),
('Venezuela', 'Bolivares Fuertes', 'VEF', 'Bs'),
('Vietnam', 'Dong', 'VND', '?'),
('Yemen', 'Rials', 'YER', '?'),
('Zimbabwe', 'Zimbabwe Dollars', 'ZWD', 'Z$'),
('India', 'Rupees', 'INR', '?');

-- --------------------------------------------------------

--
-- Table structure for table `employee_permitions`
--

CREATE TABLE `employee_permitions` (
  `id` int(11) NOT NULL,
  `emp_permition_id` varchar(15) NOT NULL,
  `emp_access_level` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(45) NOT NULL,
  `password` varchar(45) DEFAULT NULL,
  `emp_id` varchar(45) NOT NULL,
  `profile_photo` varchar(80) DEFAULT NULL,
  `password_date` datetime NOT NULL,
  `confirmation_code` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login_activity`
--

CREATE TABLE `login_activity` (
  `id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `key` varchar(25) NOT NULL,
  `datetime_active` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_activity`
--

INSERT INTO `login_activity` (`id`, `username`, `key`, `datetime_active`) VALUES
(0, 'admin', 'd045365e905dee9cc413', '2021-11-09 23:12:05');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `menuType` varchar(50) DEFAULT NULL,
  `menuItem` varchar(50) DEFAULT NULL,
  `script` varchar(500) DEFAULT NULL,
  `param` varchar(150) DEFAULT NULL,
  `date_created` datetime DEFAULT NULL,
  `created_by` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `menu_access`
--

CREATE TABLE `menu_access` (
  `id` int(11) NOT NULL,
  `menuId` int(11) NOT NULL,
  `access_level` varchar(50) DEFAULT NULL,
  `date_assigned` datetime NOT NULL,
  `assigned_by` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `surname` varchar(40) NOT NULL,
  `ID` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `surname`, `ID`) VALUES
(1, 'Festus', 'David', '90080701238'),
(2, 'John', 'Tomas', '57101274691'),
(3, 'Sara', 'Chris', '88010202170'),
(4, 'James', 'Brown', '75111232911');

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_menu_access`
-- (See below for the actual view)
--
CREATE TABLE `view_menu_access` (
`menu_access_id` int(11)
,`menuId` int(11)
,`access_level` varchar(50)
,`date_assigned` datetime
,`assigned_by` varchar(50)
,`menuType` varchar(50)
,`menuItem` varchar(50)
,`script` varchar(500)
,`param` varchar(150)
,`date_created` datetime
,`created_by` varchar(50)
);

-- --------------------------------------------------------

--
-- Structure for view `view_menu_access`
--
DROP TABLE IF EXISTS `view_menu_access`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_menu_access`  AS  select `menu_access`.`id` AS `menu_access_id`,`menu_access`.`menuId` AS `menuId`,`menu_access`.`access_level` AS `access_level`,`menu_access`.`date_assigned` AS `date_assigned`,`menu_access`.`assigned_by` AS `assigned_by`,`menu`.`menuType` AS `menuType`,`menu`.`menuItem` AS `menuItem`,`menu`.`script` AS `script`,`menu`.`param` AS `param`,`menu`.`date_created` AS `date_created`,`menu`.`created_by` AS `created_by` from (`menu_access` left join `menu` on(`menu`.`id` = `menu_access`.`menuId`)) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `ID` (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
