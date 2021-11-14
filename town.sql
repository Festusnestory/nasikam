-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2021 at 10:07 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mortgagecare`
--

-- --------------------------------------------------------

--
-- Table structure for table `town`
--

CREATE TABLE `town` (
  `id` int(11) NOT NULL,
  `town` varchar(20) NOT NULL,
  `region_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `town`
--

INSERT INTO `town` (`id`, `town`, `region_id`) VALUES
(0, '', NULL),
(1, 'Windhoek West', 1),
(2, 'Okahandja', 5),
(3, 'Swakopmund', 10),
(4, 'Walvis Bay Rural', 10),
(5, 'Okaku', 7),
(6, 'Rundu Rural', 12),
(7, 'Okatana', 7),
(8, 'Aminuis', 4),
(9, 'Grootfontein', 5),
(10, 'Walvis Bay Urban', 10),
(11, 'Okatyali', 7),
(12, 'Karibib', 10),
(13, 'Karasburg East', 3),
(14, 'Katima Mulilo Rural', 14),
(15, 'keetmanshoop Rural', 3),
(16, 'Khorixas', 11),
(17, 'keetmanshoop Urban', 3),
(18, 'Mariental Rural', 2),
(19, 'Elim', 8),
(20, 'Omaruru', 10),
(21, 'Ompundja', 7),
(22, 'Ondangwa', 7),
(23, 'Otavi', 5),
(24, 'Otjiwarongo', 5),
(25, 'Outjo', 11),
(26, 'Mariental Urban', 2),
(27, 'Anamulenge', 8),
(28, 'Ongwediva', 7),
(29, 'Oshakati East', 7),
(30, 'Tsumeb', 6),
(31, 'Oshakati West', 7),
(32, 'Daures ', 10),
(33, 'Windhoek East', 1),
(34, 'Windhoek Rural', 1),
(35, 'Tobias Hainyeko', 1),
(36, 'Samora Machel', 1),
(37, 'Moses Garoeb', 1),
(38, 'Khomasdal North', 1),
(39, 'Katutura East', 1),
(40, 'Katutura Central', 1),
(41, 'John Pandeli', 1),
(42, 'Rehoboth Rural', 2),
(43, 'Rehoboth East Urban', 2),
(44, 'Rehoboth West Urban', 2),
(45, 'Aranos', 2),
(46, 'Daweb', 2),
(47, 'Gibeon', 2),
(48, 'Berseba', 3),
(49, 'Oranjemund', 3),
(50, 'Karasburg West', 3),
(51, 'Naminus', 3),
(52, 'Epukiro', 4),
(53, 'Gobabis', 4),
(54, 'Kalahari', 4),
(55, 'Otjinene', 4),
(56, 'Otjombinde', 4),
(57, 'Steinhausen', 4),
(58, 'Tsumkwe', 5),
(59, 'Okakarara', 5),
(60, 'Omatako', 5),
(83, 'Eengodi', 6),
(84, 'Guinas', 6),
(85, 'Okankolo', 6),
(86, 'Olukonda', 6),
(87, 'Omuntele', 6),
(88, 'Omuthiyagwiipundi', 6),
(89, 'Onayena', 6),
(90, 'Oniipa', 6),
(91, 'Onyaanya', 6),
(92, 'Uukwiyu', 7),
(93, 'Nehale lyaMpingana', 6),
(94, 'Uuvudhiya', 7),
(95, 'Ondangwa Urban', 7),
(96, 'Etayi', 8),
(97, 'Ogongo', 8),
(98, 'Okahao', 8),
(99, 'Okalongo', 8),
(100, 'Onesi', 8),
(101, 'Oshikuku', 8),
(102, 'Otamanzi', 8),
(103, 'Outapi', 8),
(104, 'Ruacana', 8),
(105, 'Tsandi', 8),
(106, 'Eenhana', 9),
(107, 'Endola', 9),
(108, 'Engela', 9),
(109, 'Epembe', 9),
(110, 'Ohangwena', 9),
(111, 'Okongo', 9),
(112, 'Omulonga', 9),
(113, 'Omundaungilo', 9),
(114, 'Ondobe', 9),
(115, 'Ongenga', 9),
(116, 'Oshikango', 9),
(117, 'Oshikunde ', 9),
(121, 'Arandis', 10),
(122, 'Epupa', 11),
(123, 'Kamanjab', 11),
(124, 'Opuwo', 11),
(125, 'Opuwo Rural', 11),
(126, 'Sesfontein', 11),
(127, 'Rundu Urban', 12),
(128, 'Ndonga Linena', 12),
(129, 'Ndiyona', 12),
(130, 'Mukwe', 12),
(131, 'Mashare', 12),
(132, 'Kapako', 13),
(133, 'Mankumpi', 13),
(134, 'Mpungu', 13),
(135, 'Musese', 13),
(136, 'Ncamangoro', 13),
(137, 'Ncuncuni', 13),
(138, 'Nkurenkuru', 13),
(139, 'Tondoro', 13),
(140, 'Katima Mulilo Urban', 14),
(141, 'Judea Lyaboloma', 14),
(142, 'Kabbe North', 14),
(143, 'Kabbe South', 14),
(144, 'Kongola', 14),
(145, 'Linyanti', 14),
(146, 'Sibbinda', 14),
(148, 'Windhoek', 1),
(149, 'Usakos', 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `town`
--
ALTER TABLE `town`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `town_UNIQUE` (`town`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `town`
--
ALTER TABLE `town`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=150;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
