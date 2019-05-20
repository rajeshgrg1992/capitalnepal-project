-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2019 at 02:28 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.0.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `capital`
--

-- --------------------------------------------------------

--
-- Table structure for table `adjacency_groups`
--

CREATE TABLE `adjacency_groups` (
  `id` smallint(4) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `adjacency_groups`
--

INSERT INTO `adjacency_groups` (`id`, `name`, `slug`) VALUES
(1, 'Primary Menu', 'All Menu');

-- --------------------------------------------------------

--
-- Table structure for table `all_values`
--

CREATE TABLE `all_values` (
  `id` int(11) NOT NULL,
  `type` varchar(100) NOT NULL,
  `sortname` varchar(3) NOT NULL,
  `name` varchar(150) NOT NULL,
  `value` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL DEFAULT '1',
  `name_ar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `all_values`
--

INSERT INTO `all_values` (`id`, `type`, `sortname`, `name`, `value`, `image`, `date`, `status`, `name_ar`) VALUES
(1, 'country', 'AF', 'Afghanistan', '93', '', '2017-08-01 21:22:16', 1, ''),
(2, 'country', 'AL', 'Albania', '355', '', '2017-08-01 21:22:16', 1, ''),
(3, 'country', 'DZ', 'Algeria', '213', '', '2017-08-01 21:22:16', 1, ''),
(4, 'country', 'AS', 'American Samoa', '1684', '', '2017-08-01 21:22:16', 1, ''),
(5, 'country', 'AD', 'Andorra', '376', '', '2017-08-01 21:22:16', 1, ''),
(6, 'country', 'AO', 'Angola', '244', '', '2017-08-01 21:22:16', 1, ''),
(7, 'country', 'AI', 'Anguilla', '1264', '', '2017-08-01 21:22:16', 1, ''),
(8, 'country', 'AQ', 'Antarctica', '672', '', '2017-08-01 21:22:16', 1, ''),
(9, 'country', 'AG', 'Antigua And Barbuda', '1268', '', '2017-08-01 21:22:16', 1, ''),
(10, 'country', 'AR', 'Argentina', '54', '', '2017-08-01 21:22:16', 1, ''),
(11, 'country', 'AM', 'Armenia', '374', '', '2017-08-01 21:22:16', 1, ''),
(13, 'country', 'AU', 'Australia', '61', '', '2017-08-01 21:22:16', 1, ''),
(14, 'country', 'AT', 'Austria', '43', '', '2017-08-01 21:22:16', 1, ''),
(15, 'country', 'AZ', 'Azerbaijan', '994', '', '2017-08-01 21:22:16', 1, ''),
(16, 'country', 'BS', 'Bahamas The', '1242', '', '2017-08-01 21:22:16', 1, ''),
(17, 'country', 'BH', 'Bahrain', '973', '', '2017-08-01 21:22:16', 1, ''),
(18, 'country', 'BD', 'Bangladesh', '880', '', '2017-08-01 21:22:16', 1, ''),
(19, 'country', 'BB', 'Barbados', '1246', '', '2017-08-01 21:22:16', 1, ''),
(20, 'country', 'BY', 'Belarus', '375', '', '2017-08-01 21:22:16', 1, ''),
(21, 'country', 'BE', 'Belgium', '32', '', '2017-08-01 21:22:16', 1, ''),
(22, 'country', 'BZ', 'Belize', '501', '', '2017-08-01 21:22:16', 1, ''),
(24, 'country', 'BM', 'Bermuda', '1441', '', '2017-08-01 21:22:16', 1, ''),
(25, 'country', 'BT', 'Bhutan', '975', '', '2017-08-01 21:22:16', 1, ''),
(26, 'country', 'BO', 'Bolivia', '591', '', '2017-08-01 21:22:16', 1, ''),
(27, 'country', 'BA', 'Bosnia and Herzegovina', '387', '', '2017-08-01 21:22:16', 1, ''),
(28, 'country', 'BW', 'Botswana', '267', '', '2017-08-01 21:22:16', 1, ''),
(29, 'country', 'BV', 'Bouvet Island', '0', '', '2017-08-01 21:22:16', 1, ''),
(30, 'country', 'BR', 'Brazil', '55', '', '2017-08-01 21:22:16', 1, ''),
(31, 'country', 'IO', 'British Indian Ocean Territory', '246', '', '2017-08-01 21:22:16', 1, ''),
(32, 'country', 'BN', 'Brunei', '673', '', '2017-08-01 21:22:16', 1, ''),
(33, 'country', 'BG', 'Bulgaria', '359', '', '2017-08-01 21:22:16', 1, ''),
(34, 'country', 'BF', 'Burkina Faso', '226', '', '2017-08-01 21:22:16', 1, ''),
(35, 'country', 'BI', 'Burundi', '257', '', '2017-08-01 21:22:16', 1, ''),
(36, 'country', 'KH', 'Cambodia', '855', '', '2017-08-01 21:22:16', 1, ''),
(37, 'country', 'CM', 'Cameroon', '237', '', '2017-08-01 21:22:16', 1, ''),
(38, 'country', 'CA', 'Canada', '1', '', '2017-08-01 21:22:16', 1, ''),
(39, 'country', 'CV', 'Cape Verde', '238', '', '2017-08-01 21:22:16', 1, ''),
(40, 'country', 'KY', 'Cayman Islands', '1345', '', '2017-08-01 21:22:16', 1, ''),
(41, 'country', 'CF', 'Central African Republic', '236', '', '2017-08-01 21:22:16', 1, ''),
(42, 'country', 'TD', 'Chad', '235', '', '2017-08-01 21:22:16', 1, ''),
(43, 'country', 'CL', 'Chile', '56', '', '2017-08-01 21:22:16', 1, ''),
(44, 'country', 'CN', 'China', '86', '', '2017-08-01 21:22:16', 1, ''),
(45, 'country', 'CX', 'Christmas Island', '61', '', '2017-08-01 21:22:16', 1, ''),
(46, 'country', 'CC', 'Cocos (Keeling) Islands', '61', '', '2017-08-01 21:22:16', 1, ''),
(47, 'country', 'CO', 'Colombia', '57', '', '2017-08-01 21:22:16', 1, ''),
(48, 'country', 'KM', 'Comoros', '269', '', '2017-08-01 21:22:16', 1, ''),
(49, 'country', 'CG', 'Congo', '0', '', '2017-08-01 21:22:16', 1, ''),
(50, 'country', 'CD', 'Congo The Democratic Republic Of The', '243', '', '2017-08-01 21:22:16', 1, ''),
(51, 'country', 'CK', 'Cook Islands', '682', '', '2017-08-01 21:22:16', 1, ''),
(52, 'country', 'CR', 'Costa Rica', '506', '', '2017-08-01 21:22:16', 1, ''),
(53, 'country', 'CI', 'Cote D\'Ivoire (Ivory Coast)', '0', '', '2017-08-01 21:22:16', 1, ''),
(54, 'country', 'HR', 'Croatia (Hrvatska)', '385', '', '2017-08-01 21:22:16', 1, ''),
(55, 'country', 'CU', 'Cuba', '53', '', '2017-08-01 21:22:16', 1, ''),
(56, 'country', 'CY', 'Cyprus', '599', '', '2017-08-01 21:22:16', 1, ''),
(57, 'country', 'CZ', 'Czech Republic', '420', '', '2017-08-01 21:22:16', 1, ''),
(58, 'country', 'DK', 'Denmark', '45', '', '2017-08-01 21:22:16', 1, ''),
(59, 'country', 'DJ', 'Djibouti', '253', '', '2017-08-01 21:22:16', 1, ''),
(60, 'country', 'DM', 'Dominica', '1767', '', '2017-08-01 21:22:16', 1, ''),
(61, 'country', 'DO', 'Dominican Republic', '1809', '', '2017-08-01 21:22:16', 1, ''),
(62, 'country', 'TP', 'East Timor', '670', '', '2017-08-01 21:22:16', 1, ''),
(63, 'country', 'EC', 'Ecuador', '593', '', '2017-08-01 21:22:16', 1, ''),
(64, 'country', 'EG', 'Egypt', '20', '', '2017-08-01 21:22:16', 1, ''),
(65, 'country', 'SV', 'El Salvador', '503', '', '2017-08-01 21:22:16', 1, ''),
(66, 'country', 'GQ', 'Equatorial Guinea', '240', '', '2017-08-01 21:22:16', 1, ''),
(67, 'country', 'ER', 'Eritrea', '291', '', '2017-08-01 21:22:16', 1, ''),
(68, 'country', 'EE', 'Estonia', '372', '', '2017-08-01 21:22:16', 1, ''),
(69, 'country', 'ET', 'Ethiopia', '251', '', '2017-08-01 21:22:16', 1, ''),
(70, 'country', 'XA', 'External Territories of Australia', '500', '', '2017-08-01 21:22:16', 1, ''),
(71, 'country', 'FK', 'Falkland Islands', '500', '', '2017-08-01 21:22:16', 1, ''),
(72, 'country', 'FO', 'Faroe Islands', '298', '', '2017-08-01 21:22:16', 1, ''),
(73, 'country', 'FJ', 'Fiji Islands', '679', '', '2017-08-01 21:22:16', 1, ''),
(74, 'country', 'FI', 'Finland', '358', '', '2017-08-01 21:22:16', 1, ''),
(75, 'country', 'FR', 'France', '33', '', '2017-08-01 21:22:16', 1, ''),
(76, 'country', 'GF', 'French Guiana', '0', '', '2017-08-01 21:22:16', 1, ''),
(77, 'country', 'PF', 'French Polynesia', '689', '', '2017-08-01 21:22:16', 1, ''),
(78, 'country', 'TF', 'French Southern Territories', '0', '', '2017-08-01 21:22:16', 1, ''),
(79, 'country', 'GA', 'Gabon', '241', '', '2017-08-01 21:22:16', 1, ''),
(80, 'country', 'GM', 'Gambia The', '220', '', '2017-08-01 21:22:16', 1, ''),
(81, 'country', 'GE', 'Georgia', '995', '', '2017-08-01 21:22:16', 1, ''),
(82, 'country', 'DE', 'Germany', '49', '', '2017-08-01 21:22:16', 1, ''),
(83, 'country', 'GH', 'Ghana', '233', '', '2017-08-01 21:22:16', 1, ''),
(84, 'country', 'GI', 'Gibraltar', '350', '', '2017-08-01 21:22:16', 1, ''),
(85, 'country', 'GR', 'Greece', '30', '', '2017-08-01 21:22:16', 1, ''),
(86, 'country', 'GL', 'Greenland', '299', '', '2017-08-01 21:22:16', 1, ''),
(87, 'country', 'GD', 'Grenada', '1473', '', '2017-08-01 21:22:16', 1, ''),
(88, 'country', 'GP', 'Guadeloupe', '1671', '', '2017-08-01 21:22:16', 1, ''),
(89, 'country', 'GU', 'Guam', '1671', '', '2017-08-01 21:22:16', 1, ''),
(90, 'country', 'GT', 'Guatemala', '502', '', '2017-08-01 21:22:16', 1, ''),
(91, 'country', 'XU', 'Guernsey and Alderney', '441481', '', '2017-08-01 21:22:16', 1, ''),
(92, 'country', 'GN', 'Guinea', '224', '', '2017-08-01 21:22:16', 1, ''),
(93, 'country', 'GW', 'Guinea-Bissau', '245', '', '2017-08-01 21:22:16', 1, ''),
(94, 'country', 'GY', 'Guyana', '592', '', '2017-08-01 21:22:16', 1, ''),
(95, 'country', 'HT', 'Haiti', '509', '', '2017-08-01 21:22:16', 1, ''),
(96, 'country', 'HM', 'Heard and McDonald Islands', '0', '', '2017-08-01 21:22:16', 1, ''),
(97, 'country', 'HN', 'Honduras', '504', '', '2017-08-01 21:22:16', 1, ''),
(98, 'country', 'HK', 'Hong Kong S.A.R.', '852', '', '2017-08-01 21:22:16', 1, ''),
(99, 'country', 'HU', 'Hungary', '36', '', '2017-08-01 21:22:16', 1, ''),
(100, 'country', 'IS', 'Iceland', '354', '', '2017-08-01 21:22:16', 1, ''),
(101, 'country', 'IN', 'India', '91', '', '2017-08-01 21:22:16', 1, ''),
(102, 'country', 'ID', 'Indonesia', '62', '', '2017-08-01 21:22:16', 1, ''),
(103, 'country', 'IR', 'Iran', '98', '', '2017-08-01 21:22:16', 1, ''),
(104, 'country', 'IQ', 'Iraq', '964', '', '2017-08-01 21:22:16', 1, ''),
(105, 'country', 'IE', 'Ireland', '353', '', '2017-08-01 21:22:16', 1, ''),
(106, 'country', 'IL', 'Israel', '972', '', '2017-08-01 21:22:16', 1, ''),
(107, 'country', 'IT', 'Italy', '39', '', '2017-08-01 21:22:16', 1, ''),
(108, 'country', 'JM', 'Jamaica', '1876', '', '2017-08-01 21:22:16', 1, ''),
(109, 'country', 'JP', 'Japan', '81', '', '2017-08-01 21:22:16', 1, ''),
(110, 'country', 'XJ', 'Jersey', '441534', '', '2017-08-01 21:22:16', 1, ''),
(111, 'country', 'JO', 'Jordan', '962', '', '2017-08-01 21:22:16', 1, ''),
(112, 'country', 'KZ', 'Kazakhstan', '7', '', '2017-08-01 21:22:16', 1, ''),
(113, 'country', 'KE', 'Kenya', '254', '', '2017-08-01 21:22:16', 1, ''),
(114, 'country', 'KI', 'Kiribati', '686', '', '2017-08-01 21:22:16', 1, ''),
(115, 'country', 'KP', 'Korea North', '0', '', '2017-08-01 21:22:16', 1, ''),
(116, 'country', 'KR', 'Korea South', '0', '', '2017-08-01 21:22:16', 1, ''),
(117, 'country', 'KW', 'Kuwait', '965', '', '2017-08-01 21:22:16', 1, ''),
(118, 'country', 'KG', 'Kyrgyzstan', '996', '', '2017-08-01 21:22:16', 1, ''),
(119, 'country', 'LA', 'Laos', '856', '', '2017-08-01 21:22:16', 1, ''),
(120, 'country', 'LV', 'Latvia', '371', '', '2017-08-01 21:22:16', 1, ''),
(121, 'country', 'LB', 'Lebanon', '961', '', '2017-08-01 21:22:16', 1, ''),
(122, 'country', 'LS', 'Lesotho', '266', '', '2017-08-01 21:22:16', 1, ''),
(123, 'country', 'LR', 'Liberia', '231', '', '2017-08-01 21:22:16', 1, ''),
(124, 'country', 'LY', 'Libya', '218', '', '2017-08-01 21:22:16', 1, ''),
(125, 'country', 'LI', 'Liechtenstein', '423', '', '2017-08-01 21:22:16', 1, ''),
(126, 'country', 'LT', 'Lithuania', '370', '', '2017-08-01 21:22:16', 1, ''),
(127, 'country', 'LU', 'Luxembourg', '352', '', '2017-08-01 21:22:16', 1, ''),
(128, 'country', 'MO', 'Macau S.A.R.', '853', '', '2017-08-01 21:22:16', 1, ''),
(129, 'country', 'MK', 'Macedonia', '389', '', '2017-08-01 21:22:16', 1, ''),
(130, 'country', 'MG', 'Madagascar', '261', '', '2017-08-01 21:22:16', 1, ''),
(131, 'country', 'MW', 'Malawi', '265', '', '2017-08-01 21:22:16', 1, ''),
(132, 'country', 'MY', 'Malaysia', '60', '', '2017-08-01 21:22:16', 1, ''),
(133, 'country', 'MV', 'Maldives', '960', '', '2017-08-01 21:22:16', 1, ''),
(134, 'country', 'ML', 'Mali', '223', '', '2017-08-01 21:22:16', 1, ''),
(135, 'country', 'MT', 'Malta', '356', '', '2017-08-01 21:22:16', 1, ''),
(136, 'country', 'XM', 'Man (Isle of)', '0', '', '2017-08-01 21:22:16', 1, ''),
(137, 'country', 'MH', 'Marshall Islands', '692', '', '2017-08-01 21:22:16', 1, ''),
(138, 'country', 'MQ', 'Martinique', '258', '', '2017-08-01 21:22:16', 1, ''),
(139, 'country', 'MR', 'Mauritania', '230', '', '2017-08-01 21:22:16', 1, ''),
(140, 'country', 'MU', 'Mauritius', '230', '', '2017-08-01 21:22:16', 1, ''),
(141, 'country', 'YT', 'Mayotte', '262', '', '2017-08-01 21:22:16', 1, ''),
(142, 'country', 'MX', 'Mexico', '52', '', '2017-08-01 21:22:16', 1, ''),
(143, 'country', 'FM', 'Micronesia', '691', '', '2017-08-01 21:22:16', 1, ''),
(144, 'country', 'MD', 'Moldova', '373', '', '2017-08-01 21:22:16', 1, ''),
(145, 'country', 'MC', 'Monaco', '377', '', '2017-08-01 21:22:16', 1, ''),
(146, 'country', 'MN', 'Mongolia', '976', '', '2017-08-01 21:22:16', 1, ''),
(147, 'country', 'MS', 'Montserrat', '1664', '', '2017-08-01 21:22:16', 1, ''),
(148, 'country', 'MA', 'Morocco', '212', '', '2017-08-01 21:22:16', 1, ''),
(149, 'country', 'MZ', 'Mozambique', '258', '', '2017-08-01 21:22:16', 1, ''),
(150, 'country', 'MM', 'Myanmar', '95', '', '2017-08-01 21:22:16', 1, ''),
(151, 'country', 'NA', 'Namibia', '264', '', '2017-08-01 21:22:16', 1, ''),
(152, 'country', 'NR', 'Nauru', '674', '', '2017-08-01 21:22:16', 1, ''),
(153, 'country', 'NP', 'Nepal', '977', '', '2017-08-01 21:22:16', 1, ''),
(154, 'country', 'AN', 'Netherlands Antilles', '31', '', '2017-08-01 21:22:16', 1, ''),
(155, 'country', 'NL', 'Netherlands The', '599', '', '2017-08-01 21:22:16', 1, ''),
(156, 'country', 'NC', 'New Caledonia', '687', '', '2017-08-01 21:22:16', 1, ''),
(157, 'country', 'NZ', 'New Zealand', '64', '', '2017-08-01 21:22:16', 1, ''),
(158, 'country', 'NI', 'Nicaragua', '505', '', '2017-08-01 21:22:16', 1, ''),
(159, 'country', 'NE', 'Niger', '227', '', '2017-08-01 21:22:16', 1, ''),
(160, 'country', 'NG', 'Nigeria', '234', '', '2017-08-01 21:22:16', 1, ''),
(161, 'country', 'NU', 'Niue', '683', '', '2017-08-01 21:22:16', 1, ''),
(162, 'country', 'NF', 'Norfolk Island', '0', '', '2017-08-01 21:22:16', 1, ''),
(163, 'country', 'MP', 'Northern Mariana Islands', '1670', '', '2017-08-01 21:22:16', 1, ''),
(164, 'country', 'NO', 'Norway', '47', '', '2017-08-01 21:22:16', 1, ''),
(165, 'country', 'OM', 'Oman', '968', '', '2017-08-01 21:22:16', 1, ''),
(166, 'country', 'PK', 'Pakistan', '92', '', '2017-08-01 21:22:16', 1, ''),
(167, 'country', 'PW', 'Palau', '680', '', '2017-08-01 21:22:16', 1, ''),
(168, 'country', 'PS', 'Palestinian Territory Occupied', '970', '', '2017-08-01 21:22:16', 1, ''),
(169, 'country', 'PA', 'Panama', '507', '', '2017-08-01 21:22:16', 1, ''),
(170, 'country', 'PG', 'Papua new Guinea', '675', '', '2017-08-01 21:22:16', 1, ''),
(171, 'country', 'PY', 'Paraguay', '595', '', '2017-08-01 21:22:16', 1, ''),
(172, 'country', 'PE', 'Peru', '51', '', '2017-08-01 21:22:16', 1, ''),
(173, 'country', 'PH', 'Philippines', '63', '', '2017-08-01 21:22:16', 1, ''),
(174, 'country', 'PN', 'Pitcairn Island', '64', '', '2017-08-01 21:22:16', 1, ''),
(175, 'country', 'PL', 'Poland', '48', '', '2017-08-01 21:22:16', 1, ''),
(176, 'country', 'PT', 'Portugal', '351', '', '2017-08-01 21:22:16', 1, ''),
(177, 'country', 'PR', 'Puerto Rico', '1787', '', '2017-08-01 21:22:16', 1, ''),
(178, 'country', 'QA', 'Qatar', '974', '', '2017-08-01 21:22:16', 1, ''),
(179, 'country', 'RE', 'Reunion', '262', '', '2017-08-01 21:22:16', 1, ''),
(180, 'country', 'RO', 'Romania', '40', '', '2017-08-01 21:22:16', 1, ''),
(181, 'country', 'RU', 'Russia', '7', '', '2017-08-01 21:22:16', 1, ''),
(182, 'country', 'RW', 'Rwanda', '250', '', '2017-08-01 21:22:16', 1, ''),
(183, 'country', 'SH', 'Saint Helena', '290', '', '2017-08-01 21:22:16', 1, ''),
(184, 'country', 'KN', 'Saint Kitts And Nevis', '1869', '', '2017-08-01 21:22:16', 1, ''),
(185, 'country', 'LC', 'Saint Lucia', '1758', '', '2017-08-01 21:22:16', 1, ''),
(186, 'country', 'PM', 'Saint Pierre and Miquelon', '508', '', '2017-08-01 21:22:16', 1, ''),
(187, 'country', 'VC', 'Saint Vincent And The Grenadines', '1784', '', '2017-08-01 21:22:16', 1, ''),
(188, 'country', 'WS', 'Samoa', '685', '', '2017-08-01 21:22:16', 1, ''),
(189, 'country', 'SM', 'San Marino', '378', '', '2017-08-01 21:22:16', 1, ''),
(190, 'country', 'ST', 'Sao Tome and Principe', '239', '', '2017-08-01 21:22:16', 1, ''),
(191, 'country', 'SA', 'Saudi Arabia', '966', '', '2017-08-01 21:22:16', 1, ''),
(192, 'country', 'SN', 'Senegal', '221', '', '2017-08-01 21:22:16', 1, ''),
(193, 'country', 'RS', 'Serbia', '381', '', '2017-08-01 21:22:16', 1, ''),
(194, 'country', 'SC', 'Seychelles', '248', '', '2017-08-01 21:22:16', 1, ''),
(195, 'country', 'SL', 'Sierra Leone', '232', '', '2017-08-01 21:22:16', 1, ''),
(196, 'country', 'SG', 'Singapore', '65', '', '2017-08-01 21:22:16', 1, ''),
(197, 'country', 'SK', 'Slovakia', '421', '', '2017-08-01 21:22:16', 1, ''),
(198, 'country', 'SI', 'Slovenia', '386', '', '2017-08-01 21:22:16', 1, ''),
(199, 'country', 'XG', 'Smaller Territories of the UK', '0', '', '2017-08-01 21:22:16', 1, ''),
(200, 'country', 'SB', 'Solomon Islands', '677', '', '2017-08-01 21:22:16', 1, ''),
(202, 'country', 'ZA', 'South Africa', '27', '', '2017-08-01 21:22:16', 1, ''),
(203, 'country', 'GS', 'South Georgia', '0', '', '2017-08-01 21:22:16', 1, ''),
(204, 'country', 'SS', 'South Sudan', '211', '', '2017-08-01 21:22:16', 1, ''),
(205, 'country', 'ES', 'Spain', '34', '', '2017-08-01 21:22:16', 1, ''),
(206, 'country', 'LK', 'Sri Lanka', '94', '', '2017-08-01 21:22:16', 1, ''),
(207, 'country', 'SD', 'Sudan', '249', '', '2017-08-01 21:22:16', 1, ''),
(208, 'country', 'SR', 'Suriname', '597', '', '2017-08-01 21:22:16', 1, ''),
(209, 'country', 'SJ', 'Svalbard And Jan Mayen Islands', '47', '', '2017-08-01 21:22:16', 1, ''),
(210, 'country', 'SZ', 'Swaziland', '268', '', '2017-08-01 21:22:16', 1, ''),
(211, 'country', 'SE', 'Sweden', '46', '', '2017-08-01 21:22:16', 1, ''),
(212, 'country', 'CH', 'Switzerland', '41', '', '2017-08-01 21:22:16', 1, ''),
(213, 'country', 'SY', 'Syria', '963', '', '2017-08-01 21:22:16', 1, ''),
(214, 'country', 'TW', 'Taiwan', '886', '', '2017-08-01 21:22:16', 1, ''),
(215, 'country', 'TJ', 'Tajikistan', '992', '', '2017-08-01 21:22:16', 1, ''),
(216, 'country', 'TZ', 'Tanzania', '255', '', '2017-08-01 21:22:16', 1, ''),
(217, 'country', 'TH', 'Thailand', '66', '', '2017-08-01 21:22:16', 1, ''),
(218, 'country', 'TG', 'Togo', '228', '', '2017-08-01 21:22:16', 1, ''),
(219, 'country', 'TK', 'Tokelau', '690', '', '2017-08-01 21:22:16', 1, ''),
(220, 'country', 'TO', 'Tonga', '676', '', '2017-08-01 21:22:16', 1, ''),
(221, 'country', 'TT', 'Trinidad And Tobago', '1868', '', '2017-08-01 21:22:16', 1, ''),
(222, 'country', 'TN', 'Tunisia', '216', '', '2017-08-01 21:22:16', 1, ''),
(223, 'country', 'TR', 'Turkey', '90', '', '2017-08-01 21:22:16', 1, ''),
(224, 'country', 'TM', 'Turkmenistan', '993', '', '2017-08-01 21:22:16', 1, ''),
(225, 'country', 'TC', 'Turks And Caicos Islands', '1649', '', '2017-08-01 21:22:16', 1, ''),
(226, 'country', 'TV', 'Tuvalu', '688', '', '2017-08-01 21:22:16', 1, ''),
(227, 'country', 'UG', 'Uganda', '256', '', '2017-08-01 21:22:16', 1, ''),
(228, 'country', 'UA', 'Ukraine', '380', '', '2017-08-01 21:22:16', 1, ''),
(229, 'country', 'AE', 'United Arab Emirates', '971', '', '2017-08-01 21:22:16', 1, ''),
(230, 'country', 'GB', 'United Kingdom', '44', '', '2017-08-01 21:22:16', 1, ''),
(231, 'country', 'US', 'United States', '1', '', '2017-08-01 21:22:16', 1, ''),
(232, 'country', 'UM', 'United States Minor Outlying Islands', '0', '', '2017-08-01 21:22:16', 1, ''),
(233, 'country', 'UY', 'Uruguay', '598', '', '2017-08-01 21:22:16', 1, ''),
(234, 'country', 'UZ', 'Uzbekistan', '998', '', '2017-08-01 21:22:16', 1, ''),
(235, 'country', 'VU', 'Vanuatu', '678', '', '2017-08-01 21:22:16', 1, ''),
(236, 'country', 'VA', 'Vatican City State (Holy See)', '379', '', '2017-08-01 21:22:16', 1, ''),
(237, 'country', 'VE', 'Venezuela', '58', '', '2017-08-01 21:22:16', 1, ''),
(238, 'country', 'VN', 'Vietnam', '84', '', '2017-08-01 21:22:16', 1, ''),
(239, 'country', 'VG', 'Virgin Islands (British)', '0', '', '2017-08-01 21:22:16', 1, ''),
(240, 'country', 'VI', 'Virgin Islands (US)', '0', '', '2017-08-01 21:22:16', 1, ''),
(241, 'country', 'WF', 'Wallis And Futuna Islands', '681', '', '2017-08-01 21:22:16', 1, ''),
(242, 'country', 'EH', 'Western Sahara', '212', '', '2017-08-01 21:22:16', 1, ''),
(243, 'country', 'YE', 'Yemen', '967', '', '2017-08-01 21:22:16', 1, ''),
(244, 'country', 'YU', 'Yugoslavia', '0', '', '2017-08-01 21:22:16', 1, ''),
(245, 'country', 'ZM', 'Zambia', '260', '', '2017-08-01 21:22:16', 1, ''),
(246, 'country', 'ZW', 'Zimbabwe', '263', '', '2017-08-01 21:22:16', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `igc_admin_email`
--

CREATE TABLE `igc_admin_email` (
  `admin_id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `active_status` enum('1','0') DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `delete_status` enum('1','0') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `igc_admin_email`
--

INSERT INTO `igc_admin_email` (`admin_id`, `full_name`, `email`, `active_status`, `created`, `updated`, `delete_status`) VALUES
(1, 'ashok', 'ashokidreams@gmail.com', '1', '2016-04-15 01:24:42', '2016-05-20 10:37:07', '1'),
(2, 'Admin', 'info@charteredtaxes.com', '1', '2016-05-20 10:24:35', '2017-11-18 12:45:19', '0');

-- --------------------------------------------------------

--
-- Table structure for table `igc_admin_mail_setting`
--

CREATE TABLE `igc_admin_mail_setting` (
  `type_id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `igc_admin_mail_setting`
--

INSERT INTO `igc_admin_mail_setting` (`type_id`, `admin_id`) VALUES
(1, 1),
(2, 1),
(1, 2),
(2, 2),
(3, 2),
(4, 2),
(5, 2),
(6, 2),
(7, 2);

-- --------------------------------------------------------

--
-- Table structure for table `igc_advertisement`
--

CREATE TABLE `igc_advertisement` (
  `ad_id` int(11) NOT NULL,
  `ad_title` varchar(255) NOT NULL,
  `ad_image` varchar(300) NOT NULL,
  `ad_url` varchar(300) NOT NULL,
  `ad_for` varchar(255) NOT NULL,
  `ad_sub_for` varchar(255) NOT NULL,
  `ad_placement` varchar(255) DEFAULT NULL,
  `ad_sub_placement` varchar(255) DEFAULT NULL,
  `description` text NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1',
  `delete_status` enum('0','1') NOT NULL DEFAULT '0',
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `igc_advertisement`
--

INSERT INTO `igc_advertisement` (`ad_id`, `ad_title`, `ad_image`, `ad_url`, `ad_for`, `ad_sub_for`, `ad_placement`, `ad_sub_placement`, `description`, `status`, `delete_status`, `created`, `updated`) VALUES
(1, 'fashion', '6a450490f238b4ddff085d66a916a206fashion_sample.jpg', 'https://www.facebook.com/eshoppingnep/', 'about', '', '', '', '<p>go to facebook page</p>\r\n', '1', '1', '2018-12-18 10:42:10', '2018-12-26 01:00:47'),
(2, 'fashion', '779748b3baa7be62d16f8a23844951aff1.jpg', 'https://www.youtube.com', 'categories', '1', 'side', '0', '<p>ads for fashion</p>\r\n', '1', '0', '2018-12-18 10:46:21', '0000-00-00 00:00:00'),
(3, 'Electronics', 'af50a8df9bf6c87ef204851a6a1d1918f3.jpg', '', 'categories', '2', 'side', '0', '<p>electronics ads</p>\r\n', '1', '0', '2018-12-18 10:49:59', '0000-00-00 00:00:00'),
(4, 'Digital', '19f560c0fc2e02c530e64152bb9ec137f4.jpg', '', 'categories', '3', 'side', '0', '<p>digital</p>\r\n', '1', '0', '2018-12-18 10:51:34', '0000-00-00 00:00:00'),
(5, 'fashion', '8aafebe10781ddaa12b4c873fd4e546eads2.jpg', '', 'categories', '1', 'top', 'first', '<p>fashion</p>\r\n', '1', '0', '2018-12-18 10:59:23', '0000-00-00 00:00:00'),
(6, 'fashion', 'e939047fc28d6f8d31c08856543a7367ads3.jpg', '', 'categories', '1', 'top', 'second', '<p>fashion</p>\r\n', '1', '0', '2018-12-18 11:00:01', '0000-00-00 00:00:00'),
(7, 'electronics', 'af13b9a22b3f1ea3ecabd22e6b78d549ads9.jpg', '', 'categories', '2', 'top', 'first', '', '1', '0', '2018-12-18 11:02:02', '2018-12-18 11:03:59'),
(8, 'electronics', '161a0bc87ac54b4297446a1b23b0b3e1ads8.jpg', '', 'categories', '2', 'top', 'second', '', '1', '0', '2018-12-18 11:02:41', '0000-00-00 00:00:00'),
(9, 'Digital', 'a3463daf638e9b125a98a20619c2671cads11.jpg', '', 'categories', '3', 'top', 'first', '', '1', '0', '2018-12-18 11:04:51', '2018-12-18 11:05:53'),
(10, 'Digital', 'a0164cbfe882aa11e433a6b503cb62dbads10.jpg', '', 'categories', '3', 'top', 'second', '', '1', '0', '2018-12-18 11:05:17', '0000-00-00 00:00:00'),
(11, 'fashion', '570badcfe14697bf2a244e2e25b93e59slide-cart2.jpg', '', 'categories', '1', 'banner', 'top_banner', '', '1', '0', '2018-12-18 11:10:53', '2018-12-18 11:14:37'),
(12, 'fashion', '7e9cb89a4d6f2837d06b6108b744c1fbslide-option2.jpg', '', 'categories', '1', 'banner', 'top_banner', '', '1', '0', '2018-12-18 11:13:42', '0000-00-00 00:00:00'),
(13, 'fashion', '1796a48fa1968edd5c5d10d42c7b1813slide-left3.png', '', 'categories', '1', 'banner', 'side_banner', '', '1', '0', '2018-12-18 11:15:51', '0000-00-00 00:00:00'),
(14, 'fashion', '6024f6421eb2bf25995d9dbe18504e25slide-left.jpg', '', 'categories', '1', 'banner', 'side_banner', '', '1', '0', '2018-12-18 11:16:18', '0000-00-00 00:00:00'),
(15, 'fashion', '22ee64535a462675b9066169a93091c8slide-left2.jpg', '', 'categories', '1', 'banner', 'side_banner', '', '1', '0', '2018-12-18 11:17:13', '0000-00-00 00:00:00'),
(16, 'slider', 'ffdc7fa7222f38cac5455d928f2b021bads1.jpg', '', 'slider', '', '', '', '', '1', '0', '2018-12-18 11:18:13', '0000-00-00 00:00:00'),
(17, 'bottom', '0eec9cfc8ea6b4edc679b19030b78d03banner-bottom2.jpg', '', 'bottom', '', 'first', '0', '', '1', '0', '2018-12-18 11:21:33', '0000-00-00 00:00:00'),
(18, 'bottom', '9ad869837fac24698bc56ead9e0dae24banner-botom1.jpg', '', 'bottom', '', 'second', '0', '', '1', '0', '2018-12-18 11:23:14', '0000-00-00 00:00:00'),
(19, 'blogs_list', 'cbe674ba9bc1702bf55e91103db4a022Funny-Fashion-Ads-Spring-2015.png', '', 'blog_list', '', '', '', '', '1', '0', '2018-12-19 03:48:13', '0000-00-00 00:00:00'),
(20, 'Bogs Detail', '56f2adb3621e53ea278ae1abba795d50sub-cat3.jpg', '', 'blog_detail', '', '', '', '', '1', '0', '2018-12-19 03:49:50', '0000-00-00 00:00:00'),
(21, 'New Ads', '0bae6e6182d08d4cb16f87505dcb60catop-ads.png', '', 'categories', '', 'above-menu', '0', '<p>New Ads</p>\r\n', '1', '0', '2019-05-17 13:47:57', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `igc_album`
--

CREATE TABLE `igc_album` (
  `album_id` int(11) NOT NULL,
  `image_id` int(11) DEFAULT NULL,
  `name` varchar(200) NOT NULL,
  `album_url` varchar(400) NOT NULL,
  `description` text,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `publish_status` enum('1','0') DEFAULT NULL,
  `delete_status` enum('1','0') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `igc_album`
--

INSERT INTO `igc_album` (`album_id`, `image_id`, `name`, `album_url`, `description`, `created`, `updated`, `publish_status`, `delete_status`) VALUES
(1, 39, 'PE30 - II POLES 3000 RPM', 'pe30---ii-poles-3000-rpm', 'sadsd', '2016-03-08 06:01:22', NULL, '1', '0'),
(2, 7, 'test12', 'test12-48', '', '2016-03-09 06:19:26', NULL, '1', '0'),
(3, 9, 'Al Mawadah IT', 'al-mawadah-it-1', 'Al Mawadah IT', '2017-08-23 21:32:01', NULL, '1', '0'),
(4, 24, 'sdafs', 'sdafs-49', 'fasd', '2017-08-24 08:37:06', NULL, '1', '0');

-- --------------------------------------------------------

--
-- Table structure for table `igc_breaking`
--

CREATE TABLE `igc_breaking` (
  `id` int(11) NOT NULL,
  `breaking_layout` varchar(255) DEFAULT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1',
  `delete_status` enum('0','1') NOT NULL DEFAULT '0',
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `igc_breaking`
--

INSERT INTO `igc_breaking` (`id`, `breaking_layout`, `status`, `delete_status`, `created`, `updated`) VALUES
(22, 'layout-second', '1', '1', '2019-05-19 07:33:40', '2019-05-19 07:40:23'),
(23, 'layout-second', '1', '0', '2019-05-19 07:41:26', '2019-05-20 11:19:55');

-- --------------------------------------------------------

--
-- Table structure for table `igc_category_packages`
--

CREATE TABLE `igc_category_packages` (
  `category_id` int(11) NOT NULL,
  `package_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `igc_category_packages`
--

INSERT INTO `igc_category_packages` (`category_id`, `package_id`) VALUES
(3, 2),
(3, 3),
(3, 1),
(4, 2),
(4, 3),
(4, 1),
(5, 2),
(5, 3),
(5, 1),
(2, 2),
(2, 3),
(2, 1),
(2, 4),
(6, 2),
(6, 3),
(10, 2),
(10, 3),
(11, 1),
(11, 4),
(9, 2),
(9, 3),
(7, 2),
(12, 2);

-- --------------------------------------------------------

--
-- Table structure for table `igc_contact_feedback`
--

CREATE TABLE `igc_contact_feedback` (
  `cf_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8_unicode_ci,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `publish_status` enum('1','0') COLLATE utf8_unicode_ci DEFAULT NULL,
  `delete_status` enum('1','0') COLLATE utf8_unicode_ci DEFAULT NULL,
  `active_status` enum('1','0','','') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `igc_contact_feedback`
--

INSERT INTO `igc_contact_feedback` (`cf_id`, `name`, `email`, `phone`, `message`, `created`, `updated`, `publish_status`, `delete_status`, `active_status`) VALUES
(1, 'Amrit', 'amritsparsha1@gmail.com', '9807555929', 'fsdfs', '2017-10-04 09:41:06', NULL, NULL, '0', '1'),
(2, 'Amirt', 'amritsparsha1@gmail.com', '9807555929', 'fsdfsd', '2017-10-04 09:49:35', NULL, NULL, '0', '1'),
(3, 'Amrit', 'amritsparsha1@gmail.com', '9807555929', '5245', '2017-10-04 09:51:38', NULL, NULL, '0', '1'),
(4, 'Amrit', 'amritsparsha1@gmail.com', '0525143357', 'fasfsd', '2017-10-07 00:28:37', '2017-11-15 16:52:35', NULL, '1', '1'),
(5, 'Amrit Sparsha', 'almawadait@gmail.com', '9807555929', 'fsdfsdfsdf', '2017-11-18 00:28:58', NULL, NULL, '0', '1'),
(6, 'AMRIT BAHADUR KHADKA', 'ca.amrit2012@gmail.com', '558586421', 'Hi', '2017-11-18 08:50:17', NULL, NULL, '0', '1'),
(7, 'Amrit', 'almawadait@gmail.com', '9807555929', 'Hello World', '2017-12-21 19:41:21', NULL, NULL, '0', '1'),
(8, 'alwarda', 'almawadait@gmail.com', 'dsfd', 'fsdaf', '2018-02-04 11:59:35', NULL, NULL, '0', '1'),
(9, 'Megan', 'meganmg96krodriguez@aol.com', '(805) 372-1751', 'Hi,\n  Based on your google rank Id say you are doing at least ok on your link building, but if your rank increased could you handle more visitors?  \n\nWe provide the Best Quality Contextual Link Building to Boost Your Site’s Ranking in Search Engines.\n\nWe also offer a 7 day free trial with free links so you have nothing to lose:\n\nhttps://www.leadaccelerator.online/seo?=eshoppingnepal.com\n\nRegards,\nMegan\nLink Building Specialist\nSEO Vale\n\n\n\n\n\n\n\n\n\n500 Westover Dr #12733\nSanford, NC 27330\n\nIf you prefer not to receive commercial messages regarding links for your website, please opt out here: https://www.leadaccelerator.online/out.php/?site=eshoppingnepal.com', '2019-01-02 13:00:34', NULL, NULL, '0', '1'),
(10, 'Lottie', 'lottie.jeter@gmail.com', '256-533-4625', 'These are The Best Fiverr SEO Gigs that are quick & simple:\n\n1) Improve SEO by increasing referring domains\n2) Catapult Your Rankings With My High Pr Seo Authority Links\n3) Boost Your Google SEO With Manual High Authority Backlinks And Trust Links\n4) Create A Full SEO Campaign For Your Website\n5) Omega V1 SEO Service, Link Building For Website Ranking\n6) Create A Diverse SEO Campaign For Your Website\n7) Pro1 SEO Package And Explode Your Ranking\n\n\nClick here to read more - http://www.serviprime.com/author/adelaidewyx/', '2019-02-05 15:26:07', NULL, NULL, '0', '1');

-- --------------------------------------------------------

--
-- Table structure for table `igc_content`
--

CREATE TABLE `igc_content` (
  `content_id` int(11) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `view_count` int(11) DEFAULT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tag_line` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `second_heading` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `show_reporter` int(11) NOT NULL DEFAULT '1',
  `by_line` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reporter_id` int(11) NOT NULL DEFAULT '1',
  `guest_id` int(11) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `video` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `short_content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `content` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `show_content` int(11) NOT NULL DEFAULT '1',
  `image` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `server_image` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `show_image` int(11) NOT NULL DEFAULT '1',
  `image_caption` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `is_flash` tinyint(1) NOT NULL,
  `is_special` tinyint(1) NOT NULL,
  `is_video` tinyint(1) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `modified_by` int(10) UNSIGNED NOT NULL,
  `meta_title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8_unicode_ci,
  `publish_status` int(11) DEFAULT '0',
  `delete_status` enum('1','0') CHARACTER SET latin1 DEFAULT '0',
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `publish_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `igc_content`
--

INSERT INTO `igc_content` (`content_id`, `title`, `view_count`, `slug`, `tag_line`, `second_heading`, `show_reporter`, `by_line`, `reporter_id`, `guest_id`, `user_id`, `video`, `short_content`, `content`, `show_content`, `image`, `server_image`, `show_image`, `image_caption`, `is_flash`, `is_special`, `is_video`, `status`, `created_by`, `modified_by`, `meta_title`, `meta_keywords`, `meta_description`, `publish_status`, `delete_status`, `created`, `publish_time`, `updated`) VALUES
(1, 'प्रधानमन्त्रीले गरे भेरी बबई–डाइभर्सन सुरुङमार्गको ‘ब्रेक थ्रु’', 0, '0', '', '', 1, '0', 1, 2, 0, '', '', '<p>इजिप्टको कायरोस्थित नेपाली दूतावासको पहलमा ती नेपालीलाई ट्रिपोलीमा रहेको अन्तराष्ट्रिय आप्रवासन संगठन (आईओएम) को क्याम्पमा राखिएको छ ।&nbsp;</p>\r\n\r\n<p>ट्रिपोलीमा रहेको संयुक्त राष्ट्रसंघीय शान्ति नियोगको नेपाली सेना र लिवियाको सुरक्षा निकाय तथा आईओएनसँग समन्वय तथा सहयोगमा इजिप्टस्थित नेपाली दूतावासले उनीहरुको उद्दार गरेको हो । &nbsp;शान्ति सेनासहितका सुरक्षा निकायले नेपालीको उद्धारमा निरन्तर सहयोग गरिरहेको पनि बताइएको छ ।&nbsp;</p>\r\n\r\n<p>दूतावासका अनुसार पूर्णबहादुर गुरुङ, गणेश थापा मगर, अमृत गुरुङ, भुवन आचार्य, सनम विश्वकर्मा, वुद्धि बहादुर अधिकारी क्षत्री, कृष्ण कोइराला, राजु विश्वकर्मा, गुप्त बहादुर विक, राजु विष्ट, शेखर खरेल, जयराम धामी, अजय कुमार चौधरी र प्रकाश विश्कर्मा र मनोहर कार्कीको उद्दार भएको छ&nbsp;।&nbsp;</p>\r\n\r\n<p>उनीहरु कार्यरत कम्पनीले डरत्रास देखाइ काममा लगाएको र नेपाल फर्कनका लागि राहदानी समेत नदिएकाले कायरोस्थित दुतावासले ट्राभल डकुमेन्ट बनाइदिएको थियो ।&nbsp;</p>\r\n\r\n<p>अहिले क्याम्पमा रहेका १५ जनालाई आईओएमले खान र बस्नको व्यवस्था मिलाउनुका साथै हजाइ टिकटको समेत व्यवस्था मिलाइदिने भएको छ ।&nbsp;</p>\r\n\r\n<p>यसअघि कायरो दूतावासकै पहलमा मे पहिलो साता पनि अलपत्र ७ नेपालीको उद्धार गरिएको थियो ।&nbsp;</p>\r\n\r\n<p>दूतावासको लगातारको प्रयासपछि किरण खड्का, सिरज रायमाझी, शम्भु प्रसाद पराजुली, रवि गुरुङ, प्रेमसिल थारु, प्रेमलाल गौतमको उद्धार गरिएको हो । इटाली पठाउने प्रलोभनमा उनीहरुलाई लिबिया पुर्याई अलपत्र पारिएको बताइएको छ ।&nbsp;</p>\r\n\r\n<p>दूतावासले आईओएमको क्षेत्रीय कार्यालय, संयुक्त राष्ट्रसंघीय शान्ति नियोगको नेपाली सेनासँग समेत नियमित सम्पर्क र समन्वयमा त्यहाँ अलपत्र परेका नेपाली कामदारको अवस्था बुझी उच्च प्राथमिकताका साथ उद्धार कार्यलाई जारी राखिएको जनाएको छ ।&nbsp;</p>\r\n\r\n<p>लिबियामा पछिल्लो समय हिंसात्मक सशस्त्र सङ्घर्ष जारी छ । सरकार समर्थित सैनिक र पूर्वी क्षेत्रमा सक्रिय जनरल हफ्तार समर्थित सैनिकबीच चलिरहेको भिषण युद्धका कारण सयौंको ज्यान गइसकेको छ ।</p>\r\n', 1, NULL, 'http://localhost/capitalnepal/uploads/download.jpg', 1, '', 0, 0, 0, 0, 0, 0, '0', '', '                                                                                                                                                                                                                                ', 1, '0', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2019-05-20 08:10:12'),
(2, 'उदण्ड वीरगन्ज, सभ्य भैरहवा', 0, '0', '', '', 1, '0', 1, 0, 0, '', '', '<p>इजिप्टको कायरोस्थित नेपाली दूतावासको पहलमा ती नेपालीलाई ट्रिपोलीमा रहेको अन्तराष्ट्रिय आप्रवासन संगठन (आईओएम) को क्याम्पमा राखिएको छ ।&nbsp;</p>\r\n\r\n<p>ट्रिपोलीमा रहेको संयुक्त राष्ट्रसंघीय शान्ति नियोगको नेपाली सेना र लिवियाको सुरक्षा निकाय तथा आईओएनसँग समन्वय तथा सहयोगमा इजिप्टस्थित नेपाली दूतावासले उनीहरुको उद्दार गरेको हो । &nbsp;शान्ति सेनासहितका सुरक्षा निकायले नेपालीको उद्धारमा निरन्तर सहयोग गरिरहेको पनि बताइएको छ ।&nbsp;</p>\r\n\r\n<p>दूतावासका अनुसार पूर्णबहादुर गुरुङ, गणेश थापा मगर, अमृत गुरुङ, भुवन आचार्य, सनम विश्वकर्मा, वुद्धि बहादुर अधिकारी क्षत्री, कृष्ण कोइराला, राजु विश्वकर्मा, गुप्त बहादुर विक, राजु विष्ट, शेखर खरेल, जयराम धामी, अजय कुमार चौधरी र प्रकाश विश्कर्मा र मनोहर कार्कीको उद्दार भएको छ&nbsp;।&nbsp;</p>\r\n\r\n<p>उनीहरु कार्यरत कम्पनीले डरत्रास देखाइ काममा लगाएको र नेपाल फर्कनका लागि राहदानी समेत नदिएकाले कायरोस्थित दुतावासले ट्राभल डकुमेन्ट बनाइदिएको थियो ।&nbsp;</p>\r\n\r\n<p>अहिले क्याम्पमा रहेका १५ जनालाई आईओएमले खान र बस्नको व्यवस्था मिलाउनुका साथै हजाइ टिकटको समेत व्यवस्था मिलाइदिने भएको छ ।&nbsp;</p>\r\n\r\n<p>यसअघि कायरो दूतावासकै पहलमा मे पहिलो साता पनि अलपत्र ७ नेपालीको उद्धार गरिएको थियो ।&nbsp;</p>\r\n\r\n<p>दूतावासको लगातारको प्रयासपछि किरण खड्का, सिरज रायमाझी, शम्भु प्रसाद पराजुली, रवि गुरुङ, प्रेमसिल थारु, प्रेमलाल गौतमको उद्धार गरिएको हो । इटाली पठाउने प्रलोभनमा उनीहरुलाई लिबिया पुर्याई अलपत्र पारिएको बताइएको छ ।&nbsp;</p>\r\n\r\n<p>दूतावासले आईओएमको क्षेत्रीय कार्यालय, संयुक्त राष्ट्रसंघीय शान्ति नियोगको नेपाली सेनासँग समेत नियमित सम्पर्क र समन्वयमा त्यहाँ अलपत्र परेका नेपाली कामदारको अवस्था बुझी उच्च प्राथमिकताका साथ उद्धार कार्यलाई जारी राखिएको जनाएको छ ।&nbsp;</p>\r\n\r\n<p>लिबियामा पछिल्लो समय हिंसात्मक सशस्त्र सङ्घर्ष जारी छ । सरकार समर्थित सैनिक र पूर्वी क्षेत्रमा सक्रिय जनरल हफ्तार समर्थित सैनिकबीच चलिरहेको भिषण युद्धका कारण सयौंको ज्यान गइसकेको छ ।</p>\r\n', 1, NULL, 'http://localhost/capitalnepal/uploads/bhairawa.png', 1, '', 1, 1, 0, 0, 0, 0, '0', '', '                                                                                                                                                                ', 1, '0', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2019-05-20 08:33:12'),
(3, 'जेट एयरवेजले काठमाडौं दिल्ली सेवा बन्द गरेपछि नेपाल वायुसेवाले थप्ने भयो २ उडान', 0, '0', 'दिल्ली सेवा बन्द गरेपछि ', 'दिल्ली सेवा बन्द गरेपछि ', 1, '0', 2, 1, 0, '1g1YGTZ0e_E', 'दिल्ली सेवा बन्द गरेपछि दिल्ली सेवा बन्द गरेपछि दिल्ली सेवा बन्द गरेपछि ', '<p>दिल्ली सेवा बन्द गरेपछि दिल्ली सेवा बन्द गरेपछि दिल्ली सेवा बन्द गरेपछि दिल्ली सेवा बन्द गरेपछि दिल्ली सेवा बन्द गरेपछि दिल्ली सेवा बन्द गरेपछि दिल्ली सेवा बन्द गरेपछि दिल्ली सेवा बन्द गरेपछि दिल्ली सेवा बन्द गरेपछि दिल्ली सेवा बन्द गरेपछि दिल्ली सेवा बन्द गरेपछि</p>\r\n\r\n<p>इजिप्टको कायरोस्थित नेपाली दूतावासको पहलमा ती नेपालीलाई ट्रिपोलीमा रहेको अन्तराष्ट्रिय आप्रवासन संगठन (आईओएम) को क्याम्पमा राखिएको छ ।&nbsp;</p>\r\n\r\n<p>ट्रिपोलीमा रहेको संयुक्त राष्ट्रसंघीय शान्ति नियोगको नेपाली सेना र लिवियाको सुरक्षा निकाय तथा आईओएनसँग समन्वय तथा सहयोगमा इजिप्टस्थित नेपाली दूतावासले उनीहरुको उद्दार गरेको हो । &nbsp;शान्ति सेनासहितका सुरक्षा निकायले नेपालीको उद्धारमा निरन्तर सहयोग गरिरहेको पनि बताइएको छ ।&nbsp;</p>\r\n\r\n<p>दूतावासका अनुसार पूर्णबहादुर गुरुङ, गणेश थापा मगर, अमृत गुरुङ, भुवन आचार्य, सनम विश्वकर्मा, वुद्धि बहादुर अधिकारी क्षत्री, कृष्ण कोइराला, राजु विश्वकर्मा, गुप्त बहादुर विक, राजु विष्ट, शेखर खरेल, जयराम धामी, अजय कुमार चौधरी र प्रकाश विश्कर्मा र मनोहर कार्कीको उद्दार भएको छ&nbsp;।&nbsp;</p>\r\n\r\n<p>उनीहरु कार्यरत कम्पनीले डरत्रास देखाइ काममा लगाएको र नेपाल फर्कनका लागि राहदानी समेत नदिएकाले कायरोस्थित दुतावासले ट्राभल डकुमेन्ट बनाइदिएको थियो ।&nbsp;</p>\r\n\r\n<p>अहिले क्याम्पमा रहेका १५ जनालाई आईओएमले खान र बस्नको व्यवस्था मिलाउनुका साथै हजाइ टिकटको समेत व्यवस्था मिलाइदिने भएको छ ।&nbsp;</p>\r\n\r\n<p>यसअघि कायरो दूतावासकै पहलमा मे पहिलो साता पनि अलपत्र ७ नेपालीको उद्धार गरिएको थियो ।&nbsp;</p>\r\n\r\n<p>दूतावासको लगातारको प्रयासपछि किरण खड्का, सिरज रायमाझी, शम्भु प्रसाद पराजुली, रवि गुरुङ, प्रेमसिल थारु, प्रेमलाल गौतमको उद्धार गरिएको हो । इटाली पठाउने प्रलोभनमा उनीहरुलाई लिबिया पुर्याई अलपत्र पारिएको बताइएको छ ।&nbsp;</p>\r\n\r\n<p>दूतावासले आईओएमको क्षेत्रीय कार्यालय, संयुक्त राष्ट्रसंघीय शान्ति नियोगको नेपाली सेनासँग समेत नियमित सम्पर्क र समन्वयमा त्यहाँ अलपत्र परेका नेपाली कामदारको अवस्था बुझी उच्च प्राथमिकताका साथ उद्धार कार्यलाई जारी राखिएको जनाएको छ ।&nbsp;</p>\r\n\r\n<p>लिबियामा पछिल्लो समय हिंसात्मक सशस्त्र सङ्घर्ष जारी छ । सरकार समर्थित सैनिक र पूर्वी क्षेत्रमा सक्रिय जनरल हफ्तार समर्थित सैनिकबीच चलिरहेको भिषण युद्धका कारण सयौंको ज्यान गइसकेको छ ।</p>\r\n', 1, NULL, 'http://localhost/capitalnepal/uploads/download%20(1).jpg', 1, '', 1, 1, 0, 0, 0, 0, '0', 'जेट एयरवेजले काठमाडौं दिल्ली सेवा बन्द गरेपछि नेपाल वायुसेवाले ', 'जेट एयरवेजले काठमाडौं दिल्ली सेवा बन्द गरेपछि नेपाल वायुसेवाले थप्ने भयो २ उडान                                                                                                                                                                                                                                                                                                                                                                                                ', 1, '0', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2019-05-20 08:12:49'),
(4, 'सरकारी प्रतिबन्धपछि पनि बन्द भएन, सेवाप्रदायक भन्छन्, समय लाग्छ', 0, '0', '', '', 1, '0', 0, 0, 0, '', '', '<p>इजिप्टको कायरोस्थित नेपाली दूतावासको पहलमा ती नेपालीलाई ट्रिपोलीमा रहेको अन्तराष्ट्रिय आप्रवासन संगठन (आईओएम) को क्याम्पमा राखिएको छ ।&nbsp;</p>\r\n\r\n<p>ट्रिपोलीमा रहेको संयुक्त राष्ट्रसंघीय शान्ति नियोगको नेपाली सेना र लिवियाको सुरक्षा निकाय तथा आईओएनसँग समन्वय तथा सहयोगमा इजिप्टस्थित नेपाली दूतावासले उनीहरुको उद्दार गरेको हो । &nbsp;शान्ति सेनासहितका सुरक्षा निकायले नेपालीको उद्धारमा निरन्तर सहयोग गरिरहेको पनि बताइएको छ ।&nbsp;</p>\r\n\r\n<p>दूतावासका अनुसार पूर्णबहादुर गुरुङ, गणेश थापा मगर, अमृत गुरुङ, भुवन आचार्य, सनम विश्वकर्मा, वुद्धि बहादुर अधिकारी क्षत्री, कृष्ण कोइराला, राजु विश्वकर्मा, गुप्त बहादुर विक, राजु विष्ट, शेखर खरेल, जयराम धामी, अजय कुमार चौधरी र प्रकाश विश्कर्मा र मनोहर कार्कीको उद्दार भएको छ&nbsp;।&nbsp;</p>\r\n\r\n<p>उनीहरु कार्यरत कम्पनीले डरत्रास देखाइ काममा लगाएको र नेपाल फर्कनका लागि राहदानी समेत नदिएकाले कायरोस्थित दुतावासले ट्राभल डकुमेन्ट बनाइदिएको थियो ।&nbsp;</p>\r\n\r\n<p>अहिले क्याम्पमा रहेका १५ जनालाई आईओएमले खान र बस्नको व्यवस्था मिलाउनुका साथै हजाइ टिकटको समेत व्यवस्था मिलाइदिने भएको छ ।&nbsp;</p>\r\n\r\n<p>यसअघि कायरो दूतावासकै पहलमा मे पहिलो साता पनि अलपत्र ७ नेपालीको उद्धार गरिएको थियो ।&nbsp;</p>\r\n\r\n<p>दूतावासको लगातारको प्रयासपछि किरण खड्का, सिरज रायमाझी, शम्भु प्रसाद पराजुली, रवि गुरुङ, प्रेमसिल थारु, प्रेमलाल गौतमको उद्धार गरिएको हो । इटाली पठाउने प्रलोभनमा उनीहरुलाई लिबिया पुर्याई अलपत्र पारिएको बताइएको छ ।&nbsp;</p>\r\n\r\n<p>दूतावासले आईओएमको क्षेत्रीय कार्यालय, संयुक्त राष्ट्रसंघीय शान्ति नियोगको नेपाली सेनासँग समेत नियमित सम्पर्क र समन्वयमा त्यहाँ अलपत्र परेका नेपाली कामदारको अवस्था बुझी उच्च प्राथमिकताका साथ उद्धार कार्यलाई जारी राखिएको जनाएको छ ।&nbsp;</p>\r\n\r\n<p>लिबियामा पछिल्लो समय हिंसात्मक सशस्त्र सङ्घर्ष जारी छ । सरकार समर्थित सैनिक र पूर्वी क्षेत्रमा सक्रिय जनरल हफ्तार समर्थित सैनिकबीच चलिरहेको भिषण युद्धका कारण सयौंको ज्यान गइसकेको छ ।</p>\r\n', 1, NULL, 'http://localhost/capitalnepal/uploads/user.gif', 1, '', 0, 0, 0, 0, 0, 0, '0', '', '                                                                                             ', 1, '0', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2019-05-20 08:17:02'),
(5, 'चिया उद्योग श्रम ऐन कार्यान्वयन गर्न तयार, अब कामदारले सञ्चयकोषको सुविधासँगै खाजा र महँगी भत्ता पनि पाउने', NULL, NULL, NULL, NULL, 1, NULL, 1, NULL, 0, NULL, NULL, NULL, 1, NULL, NULL, 1, NULL, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, 1, '1', '2018-12-25 06:45:12', '2019-04-22 00:37:31', '2018-12-25 00:49:34'),
(6, 'नेपालको सानदार जीत', 0, '0', 'नेपालको सानदार जीत', 'नेपालको सानदार जीत', 1, '0', 0, 0, 0, '', 'नेपालको सानदार जीत', '<p>काठमाडौं । मलेसियामा जारी आईसीसी यू&ndash;१९ एकदिवसीय विश्वकप क्रिकेट अन्तर्गत एसिया छनोटमा नेपालले ओमानलाई फराकिलो अन्तरले पराजित गरेको छ । मंगलबार भएको चौंथो खेलमा नेपालले ओमानलाई १५० रनको फराकिलो अन्तरले पराजित गरेको हो । शिलानगोर ट्रफ क्लबको मैदानमा नेपालले दिएको २३० रनको लक्ष्य पछ्याएको ओमान ४४ ओभर १ बलमा अलआउट हुँदै ७९ समेटियो ।</p>\r\n\r\n<p>इजिप्टको कायरोस्थित नेपाली दूतावासको पहलमा ती नेपालीलाई ट्रिपोलीमा रहेको अन्तराष्ट्रिय आप्रवासन संगठन (आईओएम) को क्याम्पमा राखिएको छ ।&nbsp;</p>\r\n\r\n<p>ट्रिपोलीमा रहेको संयुक्त राष्ट्रसंघीय शान्ति नियोगको नेपाली सेना र लिवियाको सुरक्षा निकाय तथा आईओएनसँग समन्वय तथा सहयोगमा इजिप्टस्थित नेपाली दूतावासले उनीहरुको उद्दार गरेको हो । &nbsp;शान्ति सेनासहितका सुरक्षा निकायले नेपालीको उद्धारमा निरन्तर सहयोग गरिरहेको पनि बताइएको छ ।&nbsp;</p>\r\n\r\n<p>दूतावासका अनुसार पूर्णबहादुर गुरुङ, गणेश थापा मगर, अमृत गुरुङ, भुवन आचार्य, सनम विश्वकर्मा, वुद्धि बहादुर अधिकारी क्षत्री, कृष्ण कोइराला, राजु विश्वकर्मा, गुप्त बहादुर विक, राजु विष्ट, शेखर खरेल, जयराम धामी, अजय कुमार चौधरी र प्रकाश विश्कर्मा र मनोहर कार्कीको उद्दार भएको छ&nbsp;।&nbsp;</p>\r\n\r\n<p>उनीहरु कार्यरत कम्पनीले डरत्रास देखाइ काममा लगाएको र नेपाल फर्कनका लागि राहदानी समेत नदिएकाले कायरोस्थित दुतावासले ट्राभल डकुमेन्ट बनाइदिएको थियो ।&nbsp;</p>\r\n\r\n<p>अहिले क्याम्पमा रहेका १५ जनालाई आईओएमले खान र बस्नको व्यवस्था मिलाउनुका साथै हजाइ टिकटको समेत व्यवस्था मिलाइदिने भएको छ ।&nbsp;</p>\r\n\r\n<p>यसअघि कायरो दूतावासकै पहलमा मे पहिलो साता पनि अलपत्र ७ नेपालीको उद्धार गरिएको थियो ।&nbsp;</p>\r\n\r\n<p>दूतावासको लगातारको प्रयासपछि किरण खड्का, सिरज रायमाझी, शम्भु प्रसाद पराजुली, रवि गुरुङ, प्रेमसिल थारु, प्रेमलाल गौतमको उद्धार गरिएको हो । इटाली पठाउने प्रलोभनमा उनीहरुलाई लिबिया पुर्याई अलपत्र पारिएको बताइएको छ ।&nbsp;</p>\r\n\r\n<p>दूतावासले आईओएमको क्षेत्रीय कार्यालय, संयुक्त राष्ट्रसंघीय शान्ति नियोगको नेपाली सेनासँग समेत नियमित सम्पर्क र समन्वयमा त्यहाँ अलपत्र परेका नेपाली कामदारको अवस्था बुझी उच्च प्राथमिकताका साथ उद्धार कार्यलाई जारी राखिएको जनाएको छ ।&nbsp;</p>\r\n\r\n<p>लिबियामा पछिल्लो समय हिंसात्मक सशस्त्र सङ्घर्ष जारी छ । सरकार समर्थित सैनिक र पूर्वी क्षेत्रमा सक्रिय जनरल हफ्तार समर्थित सैनिकबीच चलिरहेको भिषण युद्धका कारण सयौंको ज्यान गइसकेको छ ।</p>\r\n', 1, NULL, 'http://localhost/capitalnepal/uploads/khel.png', 1, '', 0, 0, 0, 0, 0, 0, '0', '0', '0                                                                                                ', 1, '0', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2019-05-20 08:19:10'),
(7, 'नेपालले ओमानलाई १५० रनले हरायो ', 0, '0', 'नेपालले ओमानलाई १५० रनले हरायो ', 'नेपालले ओमानलाई १५० रनले हरायो ', 1, '0', 2, 0, 0, '', 'नेपालले ओमानलाई १५० रनले हरायो ', '<p>इजिप्टको कायरोस्थित नेपाली दूतावासको पहलमा ती नेपालीलाई ट्रिपोलीमा रहेको अन्तराष्ट्रिय आप्रवासन संगठन (आईओएम) को क्याम्पमा राखिएको छ ।&nbsp;</p>\r\n\r\n<p>ट्रिपोलीमा रहेको संयुक्त राष्ट्रसंघीय शान्ति नियोगको नेपाली सेना र लिवियाको सुरक्षा निकाय तथा आईओएनसँग समन्वय तथा सहयोगमा इजिप्टस्थित नेपाली दूतावासले उनीहरुको उद्दार गरेको हो । &nbsp;शान्ति सेनासहितका सुरक्षा निकायले नेपालीको उद्धारमा निरन्तर सहयोग गरिरहेको पनि बताइएको छ ।&nbsp;</p>\r\n\r\n<p>दूतावासका अनुसार पूर्णबहादुर गुरुङ, गणेश थापा मगर, अमृत गुरुङ, भुवन आचार्य, सनम विश्वकर्मा, वुद्धि बहादुर अधिकारी क्षत्री, कृष्ण कोइराला, राजु विश्वकर्मा, गुप्त बहादुर विक, राजु विष्ट, शेखर खरेल, जयराम धामी, अजय कुमार चौधरी र प्रकाश विश्कर्मा र मनोहर कार्कीको उद्दार भएको छ&nbsp;।&nbsp;</p>\r\n\r\n<p>उनीहरु कार्यरत कम्पनीले डरत्रास देखाइ काममा लगाएको र नेपाल फर्कनका लागि राहदानी समेत नदिएकाले कायरोस्थित दुतावासले ट्राभल डकुमेन्ट बनाइदिएको थियो ।&nbsp;</p>\r\n\r\n<p>अहिले क्याम्पमा रहेका १५ जनालाई आईओएमले खान र बस्नको व्यवस्था मिलाउनुका साथै हजाइ टिकटको समेत व्यवस्था मिलाइदिने भएको छ ।&nbsp;</p>\r\n\r\n<p>यसअघि कायरो दूतावासकै पहलमा मे पहिलो साता पनि अलपत्र ७ नेपालीको उद्धार गरिएको थियो ।&nbsp;</p>\r\n\r\n<p>दूतावासको लगातारको प्रयासपछि किरण खड्का, सिरज रायमाझी, शम्भु प्रसाद पराजुली, रवि गुरुङ, प्रेमसिल थारु, प्रेमलाल गौतमको उद्धार गरिएको हो । इटाली पठाउने प्रलोभनमा उनीहरुलाई लिबिया पुर्याई अलपत्र पारिएको बताइएको छ ।&nbsp;</p>\r\n\r\n<p>दूतावासले आईओएमको क्षेत्रीय कार्यालय, संयुक्त राष्ट्रसंघीय शान्ति नियोगको नेपाली सेनासँग समेत नियमित सम्पर्क र समन्वयमा त्यहाँ अलपत्र परेका नेपाली कामदारको अवस्था बुझी उच्च प्राथमिकताका साथ उद्धार कार्यलाई जारी राखिएको जनाएको छ ।&nbsp;</p>\r\n\r\n<p>लिबियामा पछिल्लो समय हिंसात्मक सशस्त्र सङ्घर्ष जारी छ । सरकार समर्थित सैनिक र पूर्वी क्षेत्रमा सक्रिय जनरल हफ्तार समर्थित सैनिकबीच चलिरहेको भिषण युद्धका कारण सयौंको ज्यान गइसकेको छ ।</p>\r\n', 1, NULL, 'http://localhost/capitalnepal/uploads/tj88ikao_nepal-twitter_625x300_18_April_19.jpg', 1, '', 1, 1, 0, 0, 0, 0, '0', '0', '0                                ', 1, '0', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2019-05-20 08:25:29'),
(8, 'यू–१९ विश्वकप छनोटमा नेपालको शानदार सुरुवात, सिंगापुर २१७ रनले पराजित', 0, '0', '', '', 1, '0', 0, 0, 0, '', 'यू–१९ विश्वकप छनोटमा नेपालको शानदार सुरुवात, सिंगापुर २१७ रनले पराजित', '<p>इजिप्टको कायरोस्थित नेपाली दूतावासको पहलमा ती नेपालीलाई ट्रिपोलीमा रहेको अन्तराष्ट्रिय आप्रवासन संगठन (आईओएम) को क्याम्पमा राखिएको छ ।&nbsp;</p>\r\n\r\n<p>ट्रिपोलीमा रहेको संयुक्त राष्ट्रसंघीय शान्ति नियोगको नेपाली सेना र लिवियाको सुरक्षा निकाय तथा आईओएनसँग समन्वय तथा सहयोगमा इजिप्टस्थित नेपाली दूतावासले उनीहरुको उद्दार गरेको हो । &nbsp;शान्ति सेनासहितका सुरक्षा निकायले नेपालीको उद्धारमा निरन्तर सहयोग गरिरहेको पनि बताइएको छ ।&nbsp;</p>\r\n\r\n<p>दूतावासका अनुसार पूर्णबहादुर गुरुङ, गणेश थापा मगर, अमृत गुरुङ, भुवन आचार्य, सनम विश्वकर्मा, वुद्धि बहादुर अधिकारी क्षत्री, कृष्ण कोइराला, राजु विश्वकर्मा, गुप्त बहादुर विक, राजु विष्ट, शेखर खरेल, जयराम धामी, अजय कुमार चौधरी र प्रकाश विश्कर्मा र मनोहर कार्कीको उद्दार भएको छ&nbsp;।&nbsp;</p>\r\n\r\n<p>उनीहरु कार्यरत कम्पनीले डरत्रास देखाइ काममा लगाएको र नेपाल फर्कनका लागि राहदानी समेत नदिएकाले कायरोस्थित दुतावासले ट्राभल डकुमेन्ट बनाइदिएको थियो ।&nbsp;</p>\r\n\r\n<p>अहिले क्याम्पमा रहेका १५ जनालाई आईओएमले खान र बस्नको व्यवस्था मिलाउनुका साथै हजाइ टिकटको समेत व्यवस्था मिलाइदिने भएको छ ।&nbsp;</p>\r\n\r\n<p>यसअघि कायरो दूतावासकै पहलमा मे पहिलो साता पनि अलपत्र ७ नेपालीको उद्धार गरिएको थियो ।&nbsp;</p>\r\n\r\n<p>दूतावासको लगातारको प्रयासपछि किरण खड्का, सिरज रायमाझी, शम्भु प्रसाद पराजुली, रवि गुरुङ, प्रेमसिल थारु, प्रेमलाल गौतमको उद्धार गरिएको हो । इटाली पठाउने प्रलोभनमा उनीहरुलाई लिबिया पुर्याई अलपत्र पारिएको बताइएको छ ।&nbsp;</p>\r\n\r\n<p>दूतावासले आईओएमको क्षेत्रीय कार्यालय, संयुक्त राष्ट्रसंघीय शान्ति नियोगको नेपाली सेनासँग समेत नियमित सम्पर्क र समन्वयमा त्यहाँ अलपत्र परेका नेपाली कामदारको अवस्था बुझी उच्च प्राथमिकताका साथ उद्धार कार्यलाई जारी राखिएको जनाएको छ ।&nbsp;</p>\r\n\r\n<p>लिबियामा पछिल्लो समय हिंसात्मक सशस्त्र सङ्घर्ष जारी छ । सरकार समर्थित सैनिक र पूर्वी क्षेत्रमा सक्रिय जनरल हफ्तार समर्थित सैनिकबीच चलिरहेको भिषण युद्धका कारण सयौंको ज्यान गइसकेको छ ।</p>\r\n', 1, NULL, 'http://localhost/capitalnepal/uploads/download%20(2).jpg', 1, '', 1, 1, 0, 0, 0, 0, '0', '0', '0                                ', 1, '0', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2019-05-20 08:21:49'),
(9, 'पहिलोपटक मानव निर्मित भूउपग्रह प्रक्षेपण भएको ६ दशकपछि नेपाल \'अन्तरिक्ष युग’मा प्रवेश गर्दै छ ।', 0, '0', '', '', 1, '0', 0, 0, 0, '', '', '<p>पहिलोपटक मानव निर्मित भूउपग्रह प्रक्षेपण भएको ६ दशकपछि नेपाल &#39;अन्तरिक्ष युग&rsquo;मा प्रवेश गर्दै छ ।पहिलोपटक मानव निर्मित भूउपग्रह प्रक्षेपण भएको ६ दशकपछि नेपाल &#39;अन्तरिक्ष युग&rsquo;मा प्रवेश गर्दै छ ।पहिलोपटक मानव निर्मित भूउपग्रह प्रक्षेपण भएको ६ दशकपछि नेपाल &#39;अन्तरिक्ष युग&rsquo;मा प्रवेश गर्दै छ ।पहिलोपटक मानव निर्मित भूउपग्रह प्रक्षेपण भएको ६ दशकपछि नेपाल &#39;अन्तरिक्ष युग&rsquo;मा प्रवेश गर्दै छ ।पहिलोपटक मानव निर्मित भूउपग्रह प्रक्षेपण भएको ६ दशकपछि नेपाल &#39;अन्तरिक्ष युग&rsquo;मा प्रवेश गर्दै छ ।पहिलोपटक मानव निर्मित भूउपग्रह प्रक्षेपण भएको ६ दशकपछि नेपाल &#39;अन्तरिक्ष युग&rsquo;मा प्रवेश गर्दै छ ।</p>\r\n\r\n<p>इजिप्टको कायरोस्थित नेपाली दूतावासको पहलमा ती नेपालीलाई ट्रिपोलीमा रहेको अन्तराष्ट्रिय आप्रवासन संगठन (आईओएम) को क्याम्पमा राखिएको छ ।&nbsp;</p>\r\n\r\n<p>ट्रिपोलीमा रहेको संयुक्त राष्ट्रसंघीय शान्ति नियोगको नेपाली सेना र लिवियाको सुरक्षा निकाय तथा आईओएनसँग समन्वय तथा सहयोगमा इजिप्टस्थित नेपाली दूतावासले उनीहरुको उद्दार गरेको हो । &nbsp;शान्ति सेनासहितका सुरक्षा निकायले नेपालीको उद्धारमा निरन्तर सहयोग गरिरहेको पनि बताइएको छ ।&nbsp;</p>\r\n\r\n<p>दूतावासका अनुसार पूर्णबहादुर गुरुङ, गणेश थापा मगर, अमृत गुरुङ, भुवन आचार्य, सनम विश्वकर्मा, वुद्धि बहादुर अधिकारी क्षत्री, कृष्ण कोइराला, राजु विश्वकर्मा, गुप्त बहादुर विक, राजु विष्ट, शेखर खरेल, जयराम धामी, अजय कुमार चौधरी र प्रकाश विश्कर्मा र मनोहर कार्कीको उद्दार भएको छ&nbsp;।&nbsp;</p>\r\n\r\n<p>उनीहरु कार्यरत कम्पनीले डरत्रास देखाइ काममा लगाएको र नेपाल फर्कनका लागि राहदानी समेत नदिएकाले कायरोस्थित दुतावासले ट्राभल डकुमेन्ट बनाइदिएको थियो ।&nbsp;</p>\r\n\r\n<p>अहिले क्याम्पमा रहेका १५ जनालाई आईओएमले खान र बस्नको व्यवस्था मिलाउनुका साथै हजाइ टिकटको समेत व्यवस्था मिलाइदिने भएको छ ।&nbsp;</p>\r\n\r\n<p>यसअघि कायरो दूतावासकै पहलमा मे पहिलो साता पनि अलपत्र ७ नेपालीको उद्धार गरिएको थियो ।&nbsp;</p>\r\n\r\n<p>दूतावासको लगातारको प्रयासपछि किरण खड्का, सिरज रायमाझी, शम्भु प्रसाद पराजुली, रवि गुरुङ, प्रेमसिल थारु, प्रेमलाल गौतमको उद्धार गरिएको हो । इटाली पठाउने प्रलोभनमा उनीहरुलाई लिबिया पुर्याई अलपत्र पारिएको बताइएको छ ।&nbsp;</p>\r\n\r\n<p>दूतावासले आईओएमको क्षेत्रीय कार्यालय, संयुक्त राष्ट्रसंघीय शान्ति नियोगको नेपाली सेनासँग समेत नियमित सम्पर्क र समन्वयमा त्यहाँ अलपत्र परेका नेपाली कामदारको अवस्था बुझी उच्च प्राथमिकताका साथ उद्धार कार्यलाई जारी राखिएको जनाएको छ ।&nbsp;</p>\r\n\r\n<p>लिबियामा पछिल्लो समय हिंसात्मक सशस्त्र सङ्घर्ष जारी छ । सरकार समर्थित सैनिक र पूर्वी क्षेत्रमा सक्रिय जनरल हफ्तार समर्थित सैनिकबीच चलिरहेको भिषण युद्धका कारण सयौंको ज्यान गइसकेको छ ।</p>\r\n', 1, NULL, 'http://localhost/capitalnepal/uploads/news/satellite9.jpg', 1, '', 1, 1, 0, 0, 0, 0, '0', '0', '0                                ', 1, '0', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2019-05-20 08:23:21'),
(10, 'नेपाल अन्तरीक्ष युगमा प्रवेश गर्दै (भू–उपग्रहको तस्वीरसहित)', 0, '0', '', '', 1, '0', 0, NULL, 0, '', '', '<p>नेपाली नानो स्याटलाइटको संरचना एक घन इकाइ छ । लम्बाइ, चौडाइ र उचाइ १०&ndash;१० सेन्टिमिटर भएको यसको तौल १.३ केजी छ । बाहिरी भागमा नेपालको झन्डा, नेपाल प्रज्ञा प्रतिस्ठानको लोगो र भूउपग्रह निर्माता विद्यार्थीको नाम लेखिएको छ ।&nbsp;</p>\n\n<p>यो समाचार आजको नागरिक दैनिकमा छापिएको छ ।&nbsp;</p>\n', 1, NULL, 'http://amritnepali.com.np/capitalnepal/uploads/pictures/af988312978fad72c24e545c31bf8a49capital.png', 1, '', 1, 1, 0, 1, 0, 0, '0', '0', '0', 1, '0', '0000-00-00 00:00:00', '2019-04-22 00:37:31', '0000-00-00 00:00:00'),
(11, 'नेपाल अन्तरीक्ष युगमा प्रवेश गर्दै (भू–उपग्रहको तस्वीरसहित)', 0, '0', '', '', 1, '0', 0, NULL, 0, '', '', '<h1><a href=\"http://www.nepalpana.com/posts/10744#\" title=\"Title\">नेपाल अन्तरीक्ष युगमा प्रवेश गर्दै (भू&ndash;उपग्रहको तस्वीरसहित)</a></h1>\n', 1, NULL, '', 1, '', 1, 1, 0, 0, 0, 0, '0', '0', '0', 1, '0', '0000-00-00 00:00:00', '2019-04-22 00:37:31', '0000-00-00 00:00:00'),
(12, 'test', 0, '0', '', '', 1, '0', 0, NULL, 0, '', '', '<p>sfsdfsdf</p>\n', 1, NULL, '', 1, '', 1, 1, 0, 0, 0, 0, '0', '0', '0', 1, '', '0000-00-00 00:00:00', '2019-04-22 00:37:31', '0000-00-00 00:00:00'),
(13, 'teszt', 0, '0', '', '', 1, '0', 0, NULL, 0, '', '', '<p>zdsds</p>\n', 1, NULL, '', 1, '', 0, 0, 0, 0, 0, 0, '0', '0', '0', 1, '0', '0000-00-00 00:00:00', '2019-04-22 00:37:31', '0000-00-00 00:00:00'),
(16, 'हिमाली क्षेत्रमा मूल्यवृद्धि धेरै', 0, '0', 'हिमाली क्षेत्रमा मूल्यवृद्धि धेरै', 'हिमाली क्षेत्रमा मूल्यवृद्धि धेरै', 1, '0', 2, NULL, 0, '#4547y44', 'हिमाली क्षेत्रमा मूल्यवृद्धि धेरैहिमाली क्षेत्रमा मूल्यवृद्धि धेरै', '<p>काठमाडौं । हिमाली क्षेत्रमा मूल्य वृद्धि भएको पाइएको छ । नेपाल राष्ट्र बैंकले मंगलबार सार्वजनिक गरेको चालू आर्थिक वर्षको आठ महिनाको विवरणमा हिमाली क्षेत्रमा ५.५ प्रतिशत मूल्यवृद्धि भएको पाइएको छ ।&nbsp;</p>\n\n<p>&lsquo;देशको वर्तमान आर्थिक तथा वित्तीय स्थिति&rsquo;मा &nbsp;क्षेत्रगत उपभोक्ता मुद्रास्फीतिअनुसार पहाडी क्षेत्रमा ४.६, काठमाण्डौ उपत्यकामा ४.६ र तराईमा ३.६ प्रतिशत रहेको छ । अघिल्लो वर्षको यही अवधिमा यस्तो मुद्रास्फीति क्रमशः ६.०, ५.६, ४.५ र ६.३ प्रतिशत रहेको थियो ।</p>\n\n<p>यही अवधिमा गैरखाद्य तथा सेवा समूहको मुद्रास्फीति ५.८ प्रतिशत रहेको छ । अघिल्लो वर्षको यही अवधिमा उक्त मुद्रास्फीति ६.३ प्रतिशत रहेको केन्द्रीय बैंकले जनाएको छ ।&nbsp;</p>\n', 1, NULL, 'http://amritnepali.com.np/uploads/pictures/uchcha-adalat.jpg', 0, '', 1, 1, 0, 0, 0, 0, '0', '0', '0                                ', 1, '0', '0000-00-00 00:00:00', '2019-04-22 00:37:31', '0000-00-00 00:00:00'),
(17, 'पोखरा क्षेत्रीय अन्तर्राष्ट्रिय विमानस्थलको रनवेको काम सकियो', 0, '0', ' भौतिक संरचना सम्पन्न', '३५ प्रतिशत भौतिक संरचना सम्पन्न', 1, '0', 0, NULL, 0, '', 'निर्माणाधीन पोखरा क्षेत्रीय अन्तर्राष्ट्रिय विमानस्थलको रनवेको काम सकिएको छ । नेपाल नागरिक उड्डयन प्राधिकरण (क्यान)का इन्जिनियर मीनराज ओझाले रनवेको काम सकिएको जानकारी दिए ।', '<p>काठमाडौं । निर्माणाधीन पोखरा क्षेत्रीय अन्तर्राष्ट्रिय विमानस्थलको रनवेको काम सकिएको छ । नेपाल नागरिक उड्डयन प्राधिकरण (क्यान)का इन्जिनियर मीनराज ओझाले रनवेको काम सकिएको जानकारी दिए ।</p>\n\n<p>२ हजार ५ सय मिटरको सो रनवेको चौडाइ ६० मिटर छ । गत माघबाट सुरु गरिएको रनवेमा अब रङरोगन गर्न मात्र बाँकी छ ।</p>\n\n<p>सन् २०२१ को जुलाईसम्ममा सम्पन्न गर्ने अवधि रहे पनि ६ महिना अघि २०२० को डिसेम्बरभित्रै सम्पन्न गर्ने लक्ष्यका साथ आयोजनाको काम तीव्र गतिमा बढिरहेको इन्जिनियर ओझाको भनाइ छ ।</p>\n\n<p>हालसम्म आयोजनाको भौतिक प्रगति ३५ प्रतिशत रहेको जनाइएको छ । चीन सरकारको ऋण सहायतामा निर्माण भइरहेको सो आयोजनाको लागत करिब २२ अर्ब रुपैयाँ छ ।</p>\n\n<p>ठूला ३ र साना ८ ओटा जहाज अट्ने क्षमताको सो विमानस्थलमा १४ ओटा भवन निर्माण हुनेछन् । तीमध्ये ५ ओटा भवनको आरसीसी स्ट्रक्चरको काम सकिएको छ । अन्यको फाउन्डेसन पनि तयार भइरहेको ओझाको भनाइ छ ।</p>\n', 1, NULL, 'http://amritnepali.com.np/uploads/plan.jpg', 1, '', 1, 1, 0, 0, 0, 0, '0', '0', '0                                                                ', 1, '0', '0000-00-00 00:00:00', '2019-04-22 00:37:31', '0000-00-00 00:00:00'),
(19, 'राष्ट्र बैङ्कको दबावपछि लघुवित्तहरु मर्जरमा जान धमाधम विशेष साधारणसभा बोलाउँदै', 0, '0', 'धमाधम विशेष साधारणसभा बोलाउँदै', 'साधारणसभा बोलाउँदै', 1, '0', 0, 0, 0, '', '', '<p>काठमाडौं । नेपाल राष्ट्र बैङ्कले एकआपसमा गाभिन (मर्जरमा जान) दबाव दिएपछि लघुवित्त संस्थाले प्रक्रिया अघि बढाएका छन् । केहीले मर्जरमा जान समझदारीपत्र (एमओयू) गरेका छन् । केहीले विशेष साधारणसभा बोलाएका छन् । आरम्भ माइक्रोफाइनान्स वित्तीय संस्था लिमिटेडले मर्जरमा जाने प्रस्तावलाई पारित गराउन वैशाख २६ गते विशेष साधारणसभा बोलाएको छ ।</p>\n\n<p>यसअघि वोमी लघुवित्त वित्तीय संस्था लिमिटेड र नागरिक लघुवित्त वित्तीय संस्था लिमिटेडले मर्जरमा जान एमओयूमा हस्ताक्षर गरेका थिए । हालसम्म मर्जरका लागि कुनै संस्थासँग एमओयू नभए पनि बाटो खुला गर्न विशेष साधारणसभा बोलाएको आरम्भले जनाएको छ । साधारणसभाले प्रस्ताव पारित गरेपछि छलफल अघि बढ्ने छ ।</p>\n\n<p>केन्द्रीय बैङ्कले हकप्रद सेयर निष्कासन गर्न रोक लगाएर मर्जरमा जान दबाव दिएपछि लघुवित्त संस्थाहरुले विशेष साधारणसभा बोलाएर मर्जर र प्राप्ति (एक्विजिस)को प्रस्ताव पारित गर्न लागेका हुन् ।</p>\n\n<p>चुक्तापुँजी बढाउन लघुवित्त संस्थाहरुले हकप्रद सेयर निष्कासनका लागि स्वीकृति माग्न थालेपछि यसलाई निरुत्साहित गर्न केन्द्रीय बैङ्कले रोक लगाएको हो । हालसम्म विभिन्न १८ लघुवित्त संस्थाले हकप्रद निष्कासनका लागि निवेदन दिएको राष्ट्र बैङ्कका प्रवक्ता नारायणप्रसाद पौडेलले बताए । उनले मर्जरमा जान दबाव दिनका लागि हकप्रद निष्कासन अनुमति रोकेको स्पष्ट पारे ।</p>\n\n<p>राष्ट्र बैङ्कले लघुवित्तीय संस्थाको सङ्ख्या धेरै भएको भन्दै यसलाई फोर्स मर्जरमा जाने गरी आगामी मौद्रिक नीतिमा विशेष व्यवस्था गर्न लागेको छ । लघुवित्तीय संस्थालाई मर्जर गराएर विकास बैङ्कमा स्तरोन्नति गर्ने आन्तरिक गृहकार्य केन्द्रीय बैङ्कले गरेको छ । विकास बैङ्कमा स्तरोन्नति गरेर न्यूनतम ६० करोडदेखि अधिकतम १ अर्ब रुपैयाँसम्म चुक्तापुँजी पुर्याउने तयारी केन्द्रीय बैङकको छ ।</p>\n\n<p><strong>४३ ओटा लघुवित्त पाइपलाइनमा</strong></p>\n\n<p>राष्ट्र बैङ्कले मर्जरमा जान दबाव दिइरहेका बेला ४३ ओटा लघुवित्त संस्था खुल्नका लागि आवेदन परेको छ । अझै ३ दर्जन बढी लघुवित्त संस्था खोल्नका लागि आवेदन परेको प्रवक्ता पौडेलले बताए । &lsquo;निवेदनको अध्ययन गरिरहेको र आवश्यक परेमा अनुमति दिने छौं,&rsquo; उनले भने । हाल ७१ लघुवित्त संस्था सञ्चालनमा छन् । यी सबैले अनुमति पाएमा संस्थाको सङ्ख्या ११४ पुग्ने छ । खुल्ने तयारीमा रहेका अधिकांश लघुवित्त संस्था राष्ट्र बैङ्कका कर्मचारीको अप्रत्यक्ष लगानी रहेको स्रोतको भनाइ छ ।</p>\n', 1, NULL, 'http://amritnepali.com.np/uploads/news/logo.png', 1, '', 0, 0, 0, 0, 0, 0, '0', '0', '0', 1, '0', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(23, 'नेकपाका पत्रकारलाई धुम्बाराहीमा बोलाएर सम्झाइयो', 0, '0', '', 'सञ्चारमन्त्रीले भने– विधेयक फिर्ता हुँदैन, छलफल गर्न सकिन्छ', 1, '0', 0, 0, 0, '', '', '<p>५ वैशाख, काठमाडौं । सरकारले ल्याएको प्रेस स्वतन्त्रताविरोधी विधेयकको विरोधमा नेपाल पत्रकार महासंघ यतिबेला आन्दोलनरत छ । तर, महासंघको आन्दोलनलाई मथ्थर बनाउने उद्देश्यले नेकपाका नेताहरुले नेकपा निकट पत्रकारलाई सम्झाउने प्रक्रिया सुरु गरेका छन् ।</p>\r\n\r\n<p>यसैक्रममा आइतबार बिहानै नेकपाको पार्टी मुख्यालय धुम्बाराहीमा नेकपा निकट पत्रकार संगठनका नेताहरुलाई छलफलका लागि बोलाइएको छ ।</p>\r\n\r\n<p>छलफलमा पत्रकार फाँट हेर्ने नेता र प्रचार विभागका नेताहहरुका साथै सञ्चार मन्त्री गोकुलप्रसाद बास्कोटासमेत सहभागी थिए । छलफलमा पार्टीका तर्फबाट दलका उपनेता सुवासचन्द्र्र नेम्वाङका साथै पम्फा भुसाल र योगेश भट्टराई सहभागी थिए ।</p>\r\n\r\n<p>कार्यक्रममा प्रेस संगठन नेपालका केन्द्रीय नेता महेश्वर दाहाल लगायतका नेताहरु सहभागी छन् । संगठनका सहसंयोजक गणेश बस्नेत भने सहभागी भएनन् । आफू बिरामी भएकाले कार्यक्रममा उपस्थित हुन नसकेको बस्नेतले अनलाइनखबरलाई बताए ।</p>\r\n\r\n<p>त्यसैगरी नेकपानिकट पत्रकार मानिने प्रेस काउन्सिलका कार्यवाहक अध्यक्ष किशोर श्रेष्ठ पनि कार्यक्रममा उपस्थित थिएनन् । नेकपा निकट पत्रकारको भेलामा पत्रकार महासंघका अध्यक्ष गोविन्द आचार्यलाई पनि निम्त्याइएको थिएन । श्रेष्ठ र आचार्य दुवैले आफूहरुलाई सो भेलाबारे कुनै जानकारी नभएको अनलाइनखबरलाई प्रतिक्रिया दिए ।</p>\r\n\r\n<p>सरकारले संसदमा प्रस्तुत गरेको मिडिया काउन्सिलसम्बन्धी विधेयकमा पत्रकारलाई १० लाखसम्म जरिवाना तिराउने प्रावधान राखिएको भन्दै पत्रकार महासंघका अध्यक्ष गोविन्द आचार्य र प्रेस संगठन नेपालका सहसंयोजक गणेश बस्नेत विधेयकको विपक्षमा उभिँदै आएका छन् । प्रेस काउन्सिलका कार्यवाहक अध्यक्ष श्रेष्ठ पनि सरकारले ल्याएको विधेयकको विपक्षमा छन् ।</p>\r\n\r\n<p>सरकारले ल्याएको प्रेस स्वतन्त्रताविरोधी विधेयक नसच्याएसम्म महासंघको आन्दोलन नरोकिने आचार्यले बताउँदै आएका छन् ।</p>\r\n\r\n<p>सरकारले विधेयक नसच्याएसम्म पत्रकार महासंघको आन्दोलन जारी रहने आचार्यले अनलाइनखबरलाई बताए । उनले भने, &lsquo;सरकारले विधेयक फिर्ता लिनुपर्&zwj;यो, वा संसदमा यसलाई संशोधन गर्छौं भनेर रुलिङ पार्टीबाट आधिकारिकरुपमा आउनुपर्&zwj;यो । हाम्रो मुख्य माग भनेकै यो विधेयक सच्चिनुपर्&zwj;यो भन्ने हो ।&rsquo;</p>\r\n\r\n<p>नेकपाकै समर्थक रहेका पत्रकारहरुसमेत सरकारले ल्याएको विधेयकको विपक्षमा उभिएपछि सत्तारुढ नेकपाका नेताहरुले आफू निकटका पत्रकारहरुलाई सम्झाउन सुरु गरेको स्रोतले अनलाइनखबरलाई बतायो ।</p>\r\n\r\n<p>आइतबार धुम्बाराहीमा आयोजना गरिएको भेला त्यसैको सिलसिला भएको नेकपाका एक नेताले जानकारी दिए ।</p>\r\n\r\n<p>छलफलमा सहभागी मन्त्री बास्कोटाले विधेयक फिर्ता नहुने अडान राखेको भेलामा सहभागी एक पत्रकारले अनलाइनखबरलाई बताए । तर, त्यसमा परिमार्जन गर्नुपर्ने भएमा छलफल गर्न सकिने मन्त्री बास्कोटाले बताएका थिए ।</p>\r\n', 1, NULL, 'http://localhost/capitalnepal/uploads/nekapa-communist-party-office-1.jpg', 1, '', 0, 0, 0, 0, 0, 0, '0', '0', '0                                                                                                ', 1, '0', '2019-05-19 04:05:39', '0000-00-00 00:00:00', '2019-05-20 08:07:04'),
(24, 'न्युरोड क्षेत्रमा स्मार्ट पार्किङ सेवा थाल्न अन्तिम तयारी द्स्ग्स्द ', 0, '0', '', 'द्स्ग्स्द ', 1, '0', 0, 0, 0, '', '', '<p>जेठ, काठडमाडौं । काठमाडौंको व्यस्त बजार न्युरोड क्षेत्रमा स्मार्ट पार्किङ सेवा शुरु गर्न अन्तिम तयारी भइरहेको छ । काठमाडौं महानगरपालिकाले निजी क्षेत्रसँगको सहकार्यमा न्युरोड आसपासका पाँच ठाउँमा आगामी बैशाखदेखि स्मार्ट पार्किङ सेवा शुरु गर्न लागेको हो ।</p>\r\n\r\n<p>ब्हिल्स ट्रुली योर्स प्रालिसँगको सहकार्यमा न्युरोडको रामेश्वर मिठाई पछाडिको भाग, बिशाल बजार अगाडि इन्ऽचोक जाने सडक, धर्मपथ, पाको र आरबी कम्प्लेक्स अगाडिको स्थानमा स्मार्ट पार्किङको व्यवस्था गर्न लागिएको हो ।</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>यी स्थानमा बन्ने स्मार्ट पार्किङ स्टेशनमा एकपटकमा झण्डै ८ सय मोटरसाइकल र ४० वटा गाडी पार्किङ गर्न सकिने बताइएको छ । ब्हिल्स ट्रुली योर्स प्रालिका सूचना प्रविधि इञ्जिनियर हरिश अग्रवालका अनुसार ती ठाउँमा स्मार्ट अटोमेटेड पार्किङ सिस्टम बनाइनेछ ।</p>\r\n\r\n<p>अब न्युरोड जानु अघि उपभोक्ताले मोवाइलबाटै रियल टाइममा कुन ठाउँ खाली छ भनेर हेर्न र पार्किङ गर्ने ठाउँ बुकिङ गर्न सक्नेछन् ।</p>\r\n\r\n<p>ठाउँ रिजर्भ नगरी पुग्नेले अगाडि राखिएको स्क्रिन हेरेर पार्किङ गर्ने ठाउँ हेर्न सक्छन् । त्यस ठाउँको व्यवस्थापनका लागि गोप्रो क्यामरासहितका पार्किङ सहयोगी राखिनेछन् । उनीहरुसँग भएको क्यामराले त्यस क्षेत्रमा भएका गतिविधि आवाजसहित रेकर्ड गरेर राख्छन् ।</p>\r\n\r\n<p>ती क्षेत्रमा पार्किङ् गर्दा दुई पांग्रे सवारीका लागि प्रति घण्टा कर बाहेक २० रुपैयाँ, चार पाङ्ग्रेका लागि प्रति घण्टा ५० रुपैयाँ र ६ पांग्रे वा सो भन्दा माथिका लागि प्रति घण्टा २ सय रुपैयाँ शुल्क लिन प्रस्ताव गरिएको छ । यसरी संकलन गरिएको रकमबाट सञ्चालकले महानगरलाई राजस्व बुझाउनेछन् ।</p>\r\n\r\n<p>महानगर क्षेत्रका पार्किङ स्थललाई क्षेत्र अनुसार शुल्क निर्धारण गरिएको छ । न्युरोड, धर्मपथ, कान्तिपथ, दरबारमार्ग लगायत भित्री सहरी क्षेत्र क्षेत्र नम्बर २ मा पर्छन् ।</p>\r\n\r\n<p>त्रिपुरेश्वर, रत्नपार्क, भोटाहिटी, केशरमहल, लैनचौर, सोह्रखुट्टेबाट बिष्णुमती लिङ्करोड हुँदै टेकु र त्यहाँबाट त्रिपुरेश्वरसम्मको सडकले घेरिएको भाग भित्री सहरी क्षेत्र हो ।</p>\r\n\r\n<p>काठमाडौंमा सवारी पार्किङ व्यवस्थापनका लागि ट्वीन, पजल, मिनी रोटरी र टावर पार्किङ निर्माण तथा सञ्चालनमा ल्याउन सकिने प्रस्ताव आएका छन् ।</p>\r\n\r\n<p>यीमध्ये अहिले प्रयोगमा ल्याउन लागिएको प्रणालीमा सेन्सरमा आधारित छ । यसमा सवारी प्रवेश गरेको र निस्किएको रेकर्ड हुन्छ ।</p>\r\n\r\n<p>रिजर्भ गरेको समय, पार्किङ गरिएको स्थान र समय, पार्किङ शुल्कजस्ता बिवरण क्युआर कोडबाट पनि हेर्न सकिन्छ । यसका एप्लिकेसनहरु बनाउे र परीक्षण गर्ने काम अन्तिम चरणमा पुगेको महानगरपालिकाका सार्वजनिक-निजी साझेदारी महाशाखा प्रमुख महेश काफ्लेले बताए ।</p>\r\n\r\n<p>&lsquo;हामी अहिले लाइन मार्किङ गर्ने र प्रविधि परीक्षण गर्ने काम गरिरहेका छौं,&rsquo; उनले भने,&rsquo;१० दिनभित्र नै सेवा थाल्न सकिन्छ कि भन्ने अपेक्षा छ ।&rsquo;</p>\r\n\r\n<p>सेवाका लागि &lsquo;केएमसी पार्किङ&rsquo; एप एन्ड्रोइड र आइओएस दुवैमा डाउनलोड गर्न सकिनेछ ।</p>\r\n\r\n<p>काठमाडौंमा भएका सवारी साधनमध्ये औसतमा १० प्रतिशत समय मात्र सडकमा गुड्छन् । बाँकी समय पार्किङ गरिएका हुन्छन् । त्यसैले पार्किङको समस्या बढेको हो । पहिले एक परिवारमा एउटा मात्र सवारी साधन हुन्थ्यो ।</p>\r\n\r\n<p>तर, पछिल्लो समय एकै घरमा एक भन्दा बढी सवारी साधन हुन थालेका छन् । अब परम्परागत पार्किङले मात्र समस्या सुल्झने अवस्था छैन । यसका लागि प्रविधिमा आधारित व्यवस्था नगरि सुखै छैन ।</p>\r\n\r\n<p>न्युरोड क्षेत्रमा व्यवस्थित पार्किङ नहुँदा आवागमन अस्तव्यस्त हुने गरेको छ । त्यसक्षेत्रमा किनमेलका लागि जाने उपभोक्ता सवारी पार्किङ स्थान नपाएर दिक्क हुने गर्छन् ।</p>\r\n', 1, NULL, 'http://localhost/capitalnepal/uploads/smart-parking.png', 1, '', 0, 0, 0, 0, 0, 0, '0', '0', '0                                                                                                                                                                                                                                                                                                                                                                ', 1, '0', '2019-05-19 04:16:44', '0000-00-00 00:00:00', '2019-05-20 08:05:16'),
(26, 'नेपाल–भारत सीमा प्रयोग गरी महिला तथा बालबालिका हराउने क्रम बढ्दो', 0, '0', '', '', 1, '0', 0, 0, 5, '', '', '<p>बाँकेको नेपाल&ndash;भारत सीमानाका प्रयोग गरी रोजगारका लागि अवैधरुपमा भारत तथा खाडीमुलुक जाने महिला तथा बालबालिकाको सङ्ख्या यहाँ प्रत्येक वर्ष बढ्दै गएको छ ।&nbsp;भारत र खाडीमुलुक गएर हराएका प्रदेश नं ५ र ७ कर्णाली प्रदेशअन्तर्गतका विभिन्न जिल्लाका महिला तथा बालबालिकाका आफन्तले यहाँस्थित माइती नेपालको क्षेत्रीय कार्यालयमा खोजीका लागि दिएको निवदेनको चाङले यसको चित्रण गरेको छ ।&nbsp;</p>\r\n\r\n<p>&nbsp;यहाँको माइती नेपालमा आफन्त खोजीको निवेदन दिनेको सङ्ख्या विगत १६ वर्षको अवधिमा करीब पाँच हजार पुगेको तथ्याङ्कमा उल्लेख छ । यस वर्षको नौ महीनाको अवधिमा करीब ४०० भन्दा बढीले आफन्त हराएको निवेदन दिएका छन् ।&nbsp;</p>\r\n\r\n<p>माइती नेपालका क्षेत्रीय संयोजक केशव कोइरालाका अनुसार, भारत र खाडीमुलुकमा गएर हराएकामध्ये फेला परेका अधिकांश महिला तथा बालबालिकामाथि शारीरिक, मानसिक तथा यौनशोषण भएको पाइएको छ । &ldquo;बेपत्ता महिलामध्ये अधिकांश दलित, जनजाति तथा विपन्न परिवारका भएकाले अवैधरुपमा कामका लागि विदेशिने महिलाको मूल समस्या गरीबी नै हो भन्न सकिन्छ&rdquo;, संयोजक कोइरालाको भनाइ छ ।&nbsp;</p>\r\n\r\n<p>केही समय अघि मात्र दिल्ली पु&yen;याएर बन्धक बनाइएका यस क्षेत्रका १६ महिलाको उद्धार भारतीय प्रहरी र भारतीय महिला आयोगको सहयोगमा माइती नेपालले गरेको थियो । त्यसअघि पनि तीन जना महिलाको उद्धार दिल्लीबाटै भएको थियो ।&nbsp;</p>\r\n\r\n<p>कामको प्रलोभनमा अवैधरुपमा लगिएका महिला तथा बालबालिकामध्ये सबैभन्दा बढी खाडीमुलुक र केही भारतमा हराएको माइती नेपाल क्षेत्रीय कार्यालयको तथ्याङ्कमा उल्लेख छ । संयोजक कोइरालाका अनुसार, विगत वर्षभन्दा यस वर्ष भारतमा बेचिएका महिला तथा बालबालिकाको उद्धार सङ्ख्यासमेत बढेको छ ।&nbsp;</p>\r\n\r\n<p>राम्रो तथा सुरक्षित काम दिलाइ दिने प्रलोभनमा पारी महिलालाई अवैधरुपमा विदेश पठाउने दलालीमा महिलासमेत लागेका छन् । महिलाको विश्वास गर्न सकिने भएकाले पनि दलालीमा लागेका महिला सोझासाझा युवतीलाई फकाउन गाँउगाँउमा सक्रिय रहेको उनको भनाइ छ । माइती नेपालले जोखिमपूर्ण यात्रामा रहेका महिला तथा बालबालिकालाई बाँके जिल्लाको नेपाल&ndash;भारत सीमानाकाबाट फिर्तासमेत पठाउँदै आएको छ ।&nbsp;</p>\r\n', 1, NULL, 'http://localhost/capitalnepal/uploads/human-trafficking1_KpFgJdLqz9.jpg', 1, '', 1, 0, 0, 0, 0, 0, '0', '0', '0                                                                                                                                                                                                                                                                                                ', 1, '0', '2019-05-20 03:34:02', '0000-00-00 00:00:00', '2019-05-20 13:17:36');

-- --------------------------------------------------------

--
-- Table structure for table `igc_content_category`
--

CREATE TABLE `igc_content_category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `igc_content_category`
--

INSERT INTO `igc_content_category` (`category_id`, `category_name`, `created`, `updated`) VALUES
(1, 'Uncatgeorized', NULL, NULL),
(2, 'Uncatgeorized', NULL, NULL),
(3, 'Uncatgeorized', NULL, NULL),
(4, 'Uncatgeorized', NULL, NULL),
(5, 'Uncatgeorized', NULL, NULL),
(6, 'Uncatgeorized', NULL, NULL),
(7, 'Uncatgeorized', NULL, NULL),
(8, 'Uncatgeorized', NULL, NULL),
(9, 'Uncatgeorized', NULL, NULL),
(10, 'Uncatgeorized', NULL, NULL),
(11, 'Uncatgeorized', NULL, NULL),
(12, 'Uncatgeorized', NULL, NULL),
(13, 'Uncatgeorized', NULL, NULL),
(14, 'Uncatgeorized', NULL, NULL),
(15, 'Uncatgeorized', NULL, NULL),
(16, 'Uncatgeorized', NULL, NULL),
(17, 'Uncatgeorized', NULL, NULL),
(18, 'Uncatgeorized', NULL, NULL),
(19, 'Uncatgeorized', NULL, NULL),
(20, 'Uncatgeorized', NULL, NULL),
(21, 'Uncatgeorized', NULL, NULL),
(22, 'Uncatgeorized', NULL, NULL),
(23, 'Uncatgeorized', NULL, NULL),
(24, 'Uncatgeorized', NULL, NULL),
(25, 'Uncatgeorized', NULL, NULL),
(26, 'Uncatgeorized', NULL, NULL),
(27, 'Uncatgeorized', NULL, NULL),
(28, 'Uncatgeorized', NULL, NULL),
(29, 'Uncatgeorized', NULL, NULL),
(30, 'Uncatgeorized', NULL, NULL),
(31, 'Uncatgeorized', NULL, NULL),
(32, 'Uncatgeorized', NULL, NULL),
(33, 'Uncatgeorized', NULL, NULL),
(34, 'Uncatgeorized', NULL, NULL),
(35, 'Uncatgeorized', NULL, NULL),
(36, 'Uncatgeorized', NULL, NULL),
(37, 'Uncatgeorized', NULL, NULL),
(38, 'Uncatgeorized', NULL, NULL),
(39, 'Uncatgeorized', NULL, NULL),
(40, 'Uncatgeorized', NULL, NULL),
(41, 'Uncatgeorized', NULL, NULL),
(42, 'Uncatgeorized', NULL, NULL),
(43, 'Uncatgeorized', NULL, NULL),
(44, 'Uncatgeorized', NULL, NULL),
(45, 'Uncatgeorized', NULL, NULL),
(46, 'Uncatgeorized', NULL, NULL),
(47, 'Uncatgeorized', NULL, NULL),
(48, 'Uncatgeorized', NULL, NULL),
(49, 'Uncatgeorized', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `igc_content_comments`
--

CREATE TABLE `igc_content_comments` (
  `comment_id` int(11) NOT NULL,
  `content_id` int(11) NOT NULL,
  `sender_name` varchar(200) NOT NULL,
  `sender_email` varchar(200) NOT NULL,
  `message` varchar(800) DEFAULT NULL,
  `comment_date` datetime DEFAULT NULL,
  `approved_status` enum('1','0') DEFAULT NULL,
  `updated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `igc_content_comments`
--

INSERT INTO `igc_content_comments` (`comment_id`, `content_id`, `sender_name`, `sender_email`, `message`, `comment_date`, `approved_status`, `updated`) VALUES
(1, 18, 'asd', 'asdasdasd@gmail.com', 'assadasdasd', '2016-05-02 06:52:25', '0', NULL),
(2, 29, 'Amrit', 'developer@almawadahit.ae', 'Hello', '2017-08-24 17:14:15', '0', NULL),
(3, 70, '', '', 'fafdsfsdf', '2017-08-25 08:51:25', NULL, NULL),
(4, 107, '', '', 'sds', '2017-10-05 07:36:58', NULL, NULL),
(5, 107, '', '', 'sds', '2017-10-05 07:37:45', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `igc_content_emoji`
--

CREATE TABLE `igc_content_emoji` (
  `emoji_id` int(11) NOT NULL,
  `content_id` int(11) NOT NULL,
  `happy` int(11) NOT NULL DEFAULT '0',
  `sad` int(11) NOT NULL DEFAULT '0',
  `excited` int(11) NOT NULL DEFAULT '0',
  `amazed` int(11) NOT NULL DEFAULT '0',
  `angry` int(11) NOT NULL DEFAULT '0',
  `delete_status` enum('0','1') NOT NULL DEFAULT '0',
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `igc_content_emoji`
--

INSERT INTO `igc_content_emoji` (`emoji_id`, `content_id`, `happy`, `sad`, `excited`, `amazed`, `angry`, `delete_status`, `created`) VALUES
(1, 3, 8, 6, 5, 7, 8, '0', '2018-12-18 12:02:02'),
(2, 4, 40, 1, 37, 1, 20, '0', '2018-12-19 01:21:52');

-- --------------------------------------------------------

--
-- Table structure for table `igc_content_tabs`
--

CREATE TABLE `igc_content_tabs` (
  `tab_id` int(11) NOT NULL,
  `tab1` varchar(300) DEFAULT NULL,
  `description1` text,
  `tab2` varchar(300) DEFAULT NULL,
  `description2` text,
  `tab3` varchar(300) DEFAULT NULL,
  `description3` text,
  `tab4` varchar(300) DEFAULT NULL,
  `description4` text,
  `tab5` varchar(300) DEFAULT NULL,
  `description5` text,
  `tab6` varchar(300) DEFAULT NULL,
  `description6` text,
  `content_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `igc_content_tabs`
--

INSERT INTO `igc_content_tabs` (`tab_id`, `tab1`, `description1`, `tab2`, `description2`, `tab3`, `description3`, `tab4`, `description4`, `tab5`, `description5`, `tab6`, `description6`, `content_id`) VALUES
(1, '', '', '', '', '', '', '', '', '', '', '', '', 1),
(2, '', '', '', '', '', '', '', '', '', '', '', '', 2),
(3, '', '', '', '', '', '', '', '', '', '', '', '', 3),
(4, '', '', '', '', '', '', '', '', '', '', '', '', 5),
(5, '', '', '', '', '', '', '', '', '', '', '', '', 6),
(6, '', '', '', '', '', '', '', '', '', '', '', '', 7),
(7, 'Access to Nepal', '<p style=\"text-align:justify\"><strong>By Air</strong></p>\n\n<p style=\"text-align:justify\">The Tribhuvan airport in Kathmandu is Nepal’s only international airport. The main airlines that serve Kathmandu are Indian Airlines, Thai International, Bangladesh Biman, China Southwest Airlines, Druk Air, Qatar Airways, Gulf Air, Jet Air, Etihad, FlyDubai, Air Asia etc. The national carrier - Nepal Airlines Corporation (NAC), operates flights to Europe and Asia as well as regional destinations.</p>\n\n<p style=\"text-align:justify\"><strong>Via Asia</strong></p>\n\n<p style=\"text-align:justify\">You could travel to Kathmandu via Bangkok, Hong Kong and Singapore. There are daily flights to Kathmandu from Bangkok. If in India, you can fly to Nepal from Delhi, Mumbai, Calcutta, Bangalore and Varanasi. There is the spectacular flight from Lhasa to Kathmandu on Saturdays, Tuesdays and Thrusdays operated by China Southwest Airlines. You can also fly Druk Air from Paro in Bhutan, or take a flight from Dhaka, Bangladesh. </p>\n\n<p style=\"text-align:justify\"><strong>From Europe and Middle East</strong></p>\n\n<p style=\"text-align:justify\">Qatar Airways, Gulf Air, Oman Air, Etihad and Fly Dubai all operate daily flights to Kathmandu from Doha, Dubai, Abu Dhabi, Muscat and Bahrain. Bangladesh Biman and the above mentioned Middle Eastern airlines all offer flights from various cities in Europe with one stop over in the middle east, India or Bangladesh.</p>\n\n<p style=\"text-align:justify\"><strong>From North America</strong></p>\n\n<p style=\"text-align:justify\">Any of the middle Eastern or Asian Airlines will bring you to Kathmandu with a couple of stop over’s in Europe, the Middle East and South Asia.</p>\n\n<p style=\"text-align:justify\"><strong>From Australia</strong></p>\n\n<p style=\"text-align:justify\">From Australia and New Zealand, look for routes via Singapore, Hong Kong or Bangkok, usually with Thai International.</p>\n\n<p style=\"text-align:justify\"><strong>By Land</strong></p>\n\n<p style=\"text-align:justify\">There are many entry points into Nepal by land open to foreigners, from which most are from India and one from Tibet.</p>\n\n<p style=\"text-align:justify\"><strong>Via India</strong></p>\n\n<p style=\"text-align:justify\">The crossing points from India include Mahendranagar, Dhangadhi and Nepalgunj in the west, Sunali, Birganj and Kakarbhitta in the east. Make sure to book your tickets through a reputed agency to avoid getting duped. Also bear in mind that everyone has to change buses at the border whether they book a through ticket or not, and that despite claims to the contrary, there are no tourist buses on either side of the border. You can board direct buses to the Nepal border from Delhi, Varanasi, Calcutta, Patna and Darjeeling. From the border, you can board Nepali buses to Kathmandu.</p>\n\n<p style=\"text-align:justify\"><strong>Via Tibet</strong></p>\n\n<p style=\"text-align:justify\">You can cross the border into Nepal from Tibet via Kodari.<br />\n<br />\n<strong>Source: </strong><strong>Nepal Tourism Board</strong></p>\n', 'People of Nepal', '<p style=\"text-align:justify\">Placed on the southern slopes of the Himalayan Mountains, Nepal is ethnically very much diverse. The Nepalese are descendants of three major migrations. These migrations have taken place from India, Tibet, and Central Asia. Among the earliest inhabitants were the Newar of the Kathmandu Valley and aboriginal Tharu in the southern Tarai region. The ancestors of the Brahman and Chetri caste groups came from India while other ethnic groups including the Gurung and Magar in the west, Rai and Limbu in the east, and Sherpa and Bhotia in the north trace their origins to Central Asia and Tibet.<br />\n<br />\nIn the Tarai, which is a part of the Ganges basin, much of the population is physically and culturally similar to the Indo-Aryan people of northern India. People of Indo-Aryan and Mongoloid stock live in the hilly region. The mountainous highlands are sparsely populated. The Kathmandu Valley, in the mid-hill region, constitutes a small fraction of the nation\'s area but it is the most densely populated area with almost 5% of the total population.<br />\n<br />\nNepal\'s 2001 census enumerated 103 distinct caste/ethnic groups including an \"unidentified group\". The caste system of Nepal is rooted in the Hindu religion while the ethnic system is rooted in mutually exclusive origin, myths, historical base, mutual seclusion and the occasional state intervention.</p>\n\n<p style=\"text-align:justify\"><strong>Source: </strong><strong>Nepal Tourism Board</strong></p>\n', 'Culture and Religion', '<p style=\"text-align:justify\">Nepal is blessed with one of the richest cultures in the world. The culture has been called \'the way of life for an entire society\'. This statement holds particularly true in the case of Nepal where every aspect of life, food, clothing and even occupations are culturally guided. The culture of Nepal includes the codes of manners, dress, language, rituals, norms of behavior and systems of belief. <br />\n<br />\nReligion occupies an integral position in Nepalese life and society. In the early 1990s, Nepal was the only constitutionally declared Hindu state in the world. There is, however, a great deal of intermingling of Hindu and Buddhist beliefs. Many of the people regarded as Hindus in the 1981 census could, with as much justification, be called Buddhists.<br />\n<br />\nHindus can be seen worshiping at Buddhist temples and Buddhists can be seen worshiping at Hindu temples, the two dominant groups in Nepal have never engaged in any overt religious conflicts. Due to the dual faith practices and mutual respect, the differences between Hindus and Buddhists have been in general very subtle in nature. You will also find Christians, Muslims and Jains in Nepal. All Religions co-exist peacefully and respectfully.</p>\n\n<p style=\"text-align:justify\"><strong>Source: </strong><strong>Nepal Tourism Board</strong></p>\n', 'Festivals in Nepal', '<h4 style=\"text-align:justify\"><strong>Dashain / Vijaya Dashami </strong></h4>\n\n<p style=\"text-align:justify\">Dashain is a national festival of Nepal which lasts for 15 days. During this festival, every Nepali is stirred by the prospects of joy which the festival is supposed to bring with it. The change of mood is also induced psychologically by the turn of autumn season after a long spell of monsoon rains. Followed by clear and brilliant days, an azure blue sky and a green carpet of fields, the climate is also just ideal at this time; it is neither too cold nor too warm. The Nepalese cherish their Dashain as time for eating well and dressing well. Each house sets up a shrine to worship the Goddess at this time.</p>\n\n<h4 style=\"text-align:justify\"><br />\n<strong>Tihar</strong></h4>\n\n<p style=\"text-align:justify\">The 5-day festival is marked by worshiping different animals. On the first day of the festival, the crow is worshipped as it is believed to be a messenger of Lord Yamraj (God of death). On the second day, the dog is worshipped as it is believed to guard the gates of heaven. On the third day, the cow is worshipped as it is believed to be the representative of Goddess Laxmi (Goddess of wealth) and in the evening Goddess Laxmi, herself, is worshipped. The most endearing sight of this festival is presented by the illumination of the entire town with rows of tiny flickering lamps in the evening of Laxmi Puja. Goddess Laxmi is worshipped at every household and it is in her welcome that myriad of lamps are burnt. On the fourth day, Govardhan Puja is performed by worshipping the ox as it tills land and helps grow crops. It is also the New Year of the ethnic group of Newars and they celebrate Mha Puja (worshipping one’s self in self-aggrandizement) in the evening. In the evening of this day, people in groups also play Deusi Bhailo in which they go door to door and sing to collect money and food offerings. On the fifth day, sisters show their affection towards their brothers by performing Bhai Tika (worshipping brothers), and feed them delectable foods. They pray to Yamaraj for their brothers’ long lives.</p>\n\n<h4 style=\"text-align:justify\"><br />\n<strong>Bala Chaturdashi </strong></h4>\n\n<p style=\"text-align:justify\">A year after the death of a family member, the soul of the dead wanders around awaiting entrance to the underworld and it is the inescapable duty of living relatives to provide it with substance, comfort and peace once or twice each year and Bala Chaturdashi is one of them. The relatives pay homage to Pashupatinath and offer grains while taking a round of the temple.</p>\n\n<h4 style=\"text-align:justify\"><br />\n<strong>Maghe Sankranti </strong></h4>\n\n<p style=\"text-align:justify\">A Sankranti signifies the first day of any month in the Nepali calendar. The first day of the month of Magh, which falls in January is a sacred day in the Nepalese calendar because the sun, on this day, is believed to be astrologically in a good position. It starts on its northward journey in its heavenly course on this day. The Nepalese belief of this day marks the division of the winter and summer solstices. Bathing in rivers is prescribed on this day, especially at the river confluence. Feasting of specially prepared rich foods is common in the family.</p>\n\n<h4 style=\"text-align:justify\"><br />\n<strong>Basanta Panchami </strong></h4>\n\n<p style=\"text-align:justify\">On this day, Nepalese people bid farewell to the winter season and look forward to welcome the spring season. Most of the people of Nepal worship Saraswati, Goddess of learning. The people of the Kathmandu Valley go to a little shrine near Swayambhunath to worship this Goddess.</p>\n\n<h4 style=\"text-align:justify\"><br />\n<strong>Mahashivaratri </strong></h4>\n\n<p style=\"text-align:justify\">This is the most famous and celebrated festival of Nepal which attracts large crowds from far flung places, both in India & Nepal. The festival is consecrated in honor of Lord Shiva. It is observed by bathing and holding a religious fast. All Shiva shrines become the places of visit for ‘Darshan’, but the greatest attraction of all is held by the temple of Pashupatinath in Kathmandu. One gets to see thousands of Hindu devotees coming to visit the temple of Pashupati. Among the devotees are a large number of Sadhus and naked ascetics. Many people like to keep awake for the whole night keeping vigilance over an oil lamp burnt to please Shiva. Children are seen keeping awake similarly over a bonfire in many localities. In the afternoon, an official function is held to celebrate this festival at Tudikhel.</p>\n\n<h4 style=\"text-align:justify\"><br />\n<strong>Fagu Purnima </strong></h4>\n\n<p style=\"text-align:justify\">Holi is also known as the festival of colour. It is observed for eight days just before the full moon of the month of Falgun of the Nepalese calendar and during this time, people indulge in color throwing at each other. </p>\n\n<h4 style=\"text-align:justify\"><br />\n<strong>Ghode Jatra </strong></h4>\n\n<p style=\"text-align:justify\">The festival has two sides of its celebration. Its cultural side involves the Newars of Kathmandu, who celebrate it for several days. The idols of the gods of many localities are taken in a procession in their area in portable chariots. Every household will be feasting at this time. A demon called ‘Gurumapa’ is also propitiated at Tundikhel. The other aspect of the festival is provided by the function organized by the Nepalese Army at Tundikhel in the afternoon of the main day. Horse race and acrobatic shows are the attractions at this time.</p>\n\n<h4 style=\"text-align:justify\"><br />\n<strong>Seto Matsyendranath Jatra </strong></h4>\n\n<p style=\"text-align:justify\">On this day a popular festival is held in honour of the Seto Matsyendranath, who is actually the Padmapani Lokeswara, whose permanent shrine is situated at Matsyendra Bahal in Kel Tole in the middle of the bazaar in Kathmandu. A huge chariot of wood supported on four large wooden wheels and carrying a tall spire, covered with green foliage is made ready for receiving the image of the divinity on this occasion and the chariot is pulled through the thoroughfares of the core of Kathmandu. There is a spontaneous and heavy turnout of devotees to pay homage to this god, who is also said to be the ‘Embodiment of Compassion’ at this time.</p>\n\n<h4 style=\"text-align:justify\"><br />\n<strong>Ram Navami </strong></h4>\n\n<p style=\"text-align:justify\">This day celebrates the birth of Rama, one of the incarnations of Lord Vishnu, a prominent Hindu god. Religious fasting is observed and worship is offered to Rama. A special celebration takes place at the Rama Janaki Temple in Janakpur during this festival.</p>\n\n<h4 style=\"text-align:justify\"><br />\n<strong>Rato Macchindranath Jatra </strong></h4>\n\n<p style=\"text-align:justify\">This festival is the biggest socio-cultural event for the city of Patan. It begins with the chariot journeys of the most widely venerated deity of the Nepal valley, who resides in his twin shrines at Patan and Bungamati. His popular name is Bungamati, but non-Newars call him by the name of Rato Matsyendranath. The wheeled chariot is prepared at Pulchowk and pulled through the town of Patan in several stages for months until it reaches Jawalakhel for the final celebration of this festival called the Bhoto Jatra. The two Machhendranaths of Patan and Kathmandu are from the same cult of Avalokiteswara in the Mahayan religion.</p>\n\n<h4 style=\"text-align:justify\"><br />\n<strong>Buddha Jayanti </strong></h4>\n\n<p style=\"text-align:justify\">The day which falls on the full moon of the month of Baisakh of the Nepalese calendar is celebrated to commemorate the birth, attainment of enlightenment and the death of Siddhartha Gautam Buddha, the founder preacher of Buddhism, more than 2500 years ago. Prayers are made and worship is offered by the Buddhists in leading Buddhist shrines throughout the country including Lumbini in the Rupandehi district, which is the birth place of Buddha. A huge fair is held in Lumbini on this day.</p>\n\n<h4 style=\"text-align:justify\"><br />\n<strong>Janai Purnima </strong></h4>\n\n<p style=\"text-align:justify\">The full moon of the month of Shrawan, the day when this festival is observed, is considered a sacred day all over Nepal and is celebrated in different ways by various groups of people. Hindu men of the Brahmin and Chhetri castes take a ritual bath and change the sacred thread worn over their left shoulder. Everyone gets a sacred thread around the wrist from Brahman priests for protection throughout the year. This day is also held sacred for bathing in Gosainkunda. One can also see a pageantry of the Jhankris attired in their traditional costume as they come to bathe at Kumbheshwor in Patan. These Jhankris also visit the temple of Kailinchowk Bhagwati in Dolakha district where they go to revamp their healing powers as they are traditional healers of Nepalese villagers.</p>\n\n<h4 style=\"text-align:justify\"><strong>Gai Jatra / Cow Festival</strong></h4>\n\n<p style=\"text-align:justify\">The outlook of this festival is similar to the carnival in Europe. In this festival, young boys dressed up as cows, parade the streets of the town. This costume springs from the belief that cows help the family member/members who died within a year to smoothly travel to heaven. Some are also dressed up as an ascetic or a fool to achieve the same objective for the dead family member/members. Groups of mimics also improvise short satirical enactment on the current social scenes of the town for public entertainment of the public. The week beginning from Janai Purnima actually unfolds a season of many good religious and cultural activities. All the Buddhist monasteries open their gates to the visitors to view their bronze sculptures and collection of paintings for a week. In Patan, one observes the festival of Mataya at this time. The festivity of Gai Jatra itself lasts for a week enlivened by the performance of dance and drama in the different localities of the town. The spirit of this festival is being increasingly adapted by cultural centers, newspapers and magazines to fling humor and satire on the Nepalese social and political life.</p>\n\n<h4 style=\"text-align:justify\"><br />\n<strong>Krishnastami </strong></h4>\n\n<p style=\"text-align:justify\">The day is celebrated as the birth anniversary of Lord Krishna, one of the incarnations of Lord Vishnu. Religious fast is observed and Krishna temples are visited by devotees on this day. A procession goes around the town displaying the pictures of Lord Krishna, a practice which was started in the recent years by a social organization called the Sanatan Dharma Sewa Samiti.</p>\n\n<h4 style=\"text-align:justify\"><br />\n<strong>Teej </strong></h4>\n\n<p style=\"text-align:justify\">This is a festival for the female. On this day, Nepalese women go to Shiva temple in red colorful dresses to worship Lord Shiva. In the Kathmandu Valley, women go to Pashupatinath, where they worship Shiva to fulfill all their wishes.</p>\n\n<h4 style=\"text-align:justify\"><strong>Indra Jatra</strong></h4>\n\n<p style=\"text-align:justify\">This festival also heralds a week of religious and cultural festivity in Kathmandu. There are several phases of this festival. On the night when this festival begins, members of the Buddhist family in which death has taken place within a year, go round the town limits of Kathmandu burning incense and putting lamps along the route. The same morning a tall wooden pole representing the statue of Indra and large wooden masks of Bhairab are put on display in the bazaar. Several religious dances like the Devinach, Bhairava, Lakehnach, Pulukishi and Sawa Bhakku as well as the Mahakalinach come into life during this week. The week also commences with the pulling of the chariots of Ganesh, Bhairava and Kumari (the living Goddess) in the core areas of Kathmandu.</p>\n\n<p style=\"text-align:justify\"><strong>Source: </strong><strong>Nepal Tourism Board</strong></p>\n', 'General information about Nepal', '<h4 style=\"text-align:justify\">At a Glance:</h4>\n\n<table align=\"left\" border=\"0\" cellpadding=\"1\" cellspacing=\"1\">\n	<tbody>\n		<tr>\n			<td style=\"text-align:justify\">Location</td>\n			<td style=\"text-align:justify\">It borders with the Tibet Autonomous Region of the People\'s Republic of China in the North and India in the East, South and West.</td>\n		</tr>\n		<tr>\n			<td style=\"text-align:justify\">Area</td>\n			<td style=\"text-align:justify\">147,181 sq. kilometers (56,827 sq. miles)</td>\n		</tr>\n		<tr>\n			<td style=\"text-align:justify\">Altitude</td>\n			<td style=\"text-align:justify\">Varies from 70 meters to 8848 meters (230 feet to 29,029 feet) </td>\n		</tr>\n		<tr>\n			<td style=\"text-align:justify\">Capital</td>\n			<td style=\"text-align:justify\">Kathmandu </td>\n		</tr>\n		<tr>\n			<td style=\"text-align:justify\">Population</td>\n			<td style=\"text-align:justify\">Over 28 million</td>\n		</tr>\n		<tr>\n			<td style=\"text-align:justify\">Language</td>\n			<td style=\"text-align:justify\">Nepali is the national language of Nepal. Educated people understand and speak English as well.</td>\n		</tr>\n		<tr>\n			<td style=\"text-align:justify\">Religion</td>\n			<td style=\"text-align:justify\">Hinduism and Buddhism</td>\n		</tr>\n		<tr>\n			<td style=\"text-align:justify\">Time</td>\n			<td style=\"text-align:justify\">Nepal Time is 5 hours 45 minutes ahead of GMT and 15 minutes ahead of Indian standard time</td>\n		</tr>\n	</tbody>\n</table>\n\n<p style=\"text-align:justify\"> </p>\n\n<h4 style=\"text-align:justify\">Geography</h4>\n\n<p style=\"text-align:justify\"> </p>\n\n<p style=\"text-align:justify\">Nepal is a landlocked country which lies between the Tibetan Autonomous Region of China in the north and India in the south, east and west. The country is rectangular in shape stretching from east to west and has a length of approximately 550 miles (880 km) and breadth of 150 miles (240 km). Nepal covers an area of 56,827 square miles (147,181 square kilometers) and is divided lengthwise into three strips. The northernmost strip is the Himalayan Region which has 8 of the world\'s 10 highest peaks, including Mt. Everest, the roof of the world at an altitude of 29,029 ft (8848 m). The middle strip is the Mountainous Region which consists of hills and valleys. The southernmost region, which is the narrowest of the three strips, is the Terai Region which is an extension of the Gangetic plains of northern India. This region has fertile land and is called the bread basket of the country. It also has jungles with elephants, rhinoceroses, tigers and other wild animals and brds.  <br />\n<br />\n<strong>Source: </strong><strong>Nepal Tourism Board</strong></p>\n\n<p style=\"text-align:justify\"> </p>\n\n<h4 style=\"text-align:justify\">Climate</h4>\n\n<p style=\"text-align:justify\"> </p>\n\n<h4 style=\"text-align:justify\"><strong>Nepal’s Climate</strong>: <strong><em>Friendly weather patterns of immense proportions…</em></strong></h4>\n\n<p style=\"text-align:justify\"><br />\nNepal’s climate is an off-spring of its diverse seasons. Autumn and spring is a wonderful delight; not only for visitors heading to Nepal but also for the local people. Autumn commences from early September to early December and the skies are a sparkling blue with sunny days and colder full moon nights. Spring really begins from early February to May end with occasional rainfall. The monsoon starts from early June to September with scattered showers in October. Trekking is pretty difficult and uncomfortable this time around due to the humidity and everyday showers. The trails get slushy and are often leech-infested. And the mountains are generally hidden by clouds. But Nepal always has something in the bag for visitors and this is when expeditions gear up for summer climbing and trekking in the trans-Himalayan regions of Mustang, Narphu La, Dolpo and Tibet begin. These regions lie in the rain-shadow zones of the country and wonderfully receive significantly less precipitation than the more southerly areas.<br />\n </p>\n\n<h4 style=\"text-align:justify\"><strong>VITAL CLIMATE CONSIDERATION FOR TREKKING EXPEDITIONS:</strong></h4>\n\n<p style=\"text-align:justify\">The best seasons to trek on Nepal’s Himalayas are <strong>autumn</strong>, from mid September until end November and <strong>spring</strong>, from the beginning of March until mid May. <strong>However, with Global Warming creating erratic climatic conditions,</strong> <strong><em>NATURE CAN BE A BEAST WHEN LEAST EXPECTED.</em></strong> Some brief seasonal explanations follow below:<br />\n </p>\n\n<h4 style=\"text-align:justify\"><strong>Autumn (mid-September to end-November)</strong></h4>\n\n<p style=\"text-align:justify\">Trekking during this period is bliss. Generally, during autumn, the weather is clear with mild to warm days and chilly nights. However, on the higher altitudes, the nights can drop to freezing temperatures. At this time, the mountain views are amazingly clear.<br />\n </p>\n\n<h4 style=\"text-align:justify\"><strong>Approach to winter and the mid winter (end-November through March)</strong></h4>\n\n<p style=\"text-align:justify\">Trekking during the winter period is feasible, from December until the end of February. Daytime temperatures are cooler; however, the nights will often be bitterly cold. The days are generally clear but frequent winter storms can bring snow as low as 2000m. Early October through late November is also a hectic period for trekking. But in mid winter (January through March), trekking can be arduous on the higher altitudes with semi-regular snowfall followed by more winter storms, which break the long finer periods of early autumn. From mid-December to mid-February it’s the coldest time.<br />\n <br />\nDespite harder snowing, wind conditions remains stabilized in early winter, and climbing some trekking peaks are possible. Expeditions to Mera peak, Island peak, Chulu, and trekking in Annapurna, Everest and Langtang regions in early winter have been pretty popular over the past few years. <strong>But it’s always good to be prepared for the unpredictable.</strong></p>\n\n<h4 style=\"text-align:justify\"><strong>Spring and early summer (mid-March through May)</strong></h4>\n\n<p style=\"text-align:justify\">Spring is always welcome after the biting cold, the mornings are usually clear but the afternoon cloud build-up brings occasional thunder showers. The days are a rumble tumble with humidity and rain, and the colorful show of wildflowers like rhododendrons lighten up the environment. The whole country is a verdant flush and an abundance of greenery is seen every where during this time. This period invokes the second most popular and pleasant trekking season as this is rice-cultivation time. Late-march into April is especially gorgeous. We also get to see clear skies in April. Up to May, the weather gets misty and disturbed with puffy cloudy patterns.<br />\n </p>\n\n<h4 style=\"text-align:justify\"><strong>The monsoon (June to mid-September)</strong></h4>\n\n<p style=\"text-align:justify\">June to September is what we call the slushy monsoon season. Generally, the morning is cloudy and wispy cloudy chains randomly form on ridges and peaks. Trekking during this period is generally cumbersome and uncomfortable as the weather is hot and there are showers almost every day. The trails get muddy and are often leech-infested and the mountains are usually hidden by clouds. During April and May, the expectation of thunderstorms, hail showers and strong winds intermittently tend to occur during the fine periods. <strong><em>However, every dark cloud has a silver lining and there are wonderful possibilities for summer trekking in some of the most remote but beautiful trans-Himalayan regions of Mustang, Narphu La, Dolpa and Tibet. These regions fall in the rain-shadow areas of Nepal and therefore receive significantly less precipitation than the more southerly areas.</em></strong><br />\n <br />\n<strong>Consequently, since Nepal’s climatic conditions follow a friendlier pattern than imagined, there’s always space for a lifetime vacation in the sunshine of Nepal’s Himalayas and <em>Incentive</em></strong> <strong><em>Holidays</em> has numerous holiday options for a trip that only dreams are made off. Just let us know you plans and we’ll turn your dreams into realities.</strong><br />\n <br />\n<strong><em>PLEASE NOTE, ITS IMPORTANT TO TAKE SOME TIME AND READ ABOUT NEPAL’S CLIMATIC SITUATION BEFORE HEADING TO NEPAL AS THIS COULD GIVE YOU A GOOD HOLIDAY WITHOUT HASSLES AND PERHAPS EVEN MORE VITAL, SAVE YOUR LIFE…</em></strong><br />\n <br />\n<strong>For more information about Nepal’s climatic conditions, please visit: <u>www.dhm.gov.np</u> (official web site of the Department of Hydrology & Meteorology, Ministry of Environment).</strong><br />\n<br />\n<strong>Source: </strong><strong>Nepal Tourism Board</strong></p>\n\n<p style=\"text-align:justify\"> </p>\n\n<h4 style=\"text-align:justify\">Weather of Nepal</h4>\n\n<p style=\"text-align:justify\"> </p>\n\n<table border=\"0\" cellpadding=\"1\" cellspacing=\"1\">\n	<tbody>\n		<tr>\n			<th style=\"text-align:justify\">December – February</th>\n			<th style=\"text-align:justify\">March – May</th>\n			<th style=\"text-align:justify\">June - August</th>\n			<th style=\"text-align:justify\">September - November</th>\n		</tr>\n		<tr>\n			<td style=\"text-align:justify\">Winter</td>\n			<td style=\"text-align:justify\">Autumn</td>\n			<td style=\"text-align:justify\">Summer</td>\n			<td style=\"text-align:justify\">Spring</td>\n		</tr>\n		<tr>\n			<td style=\"text-align:justify\">Cool and a little damp</td>\n			<td style=\"text-align:justify\">Cloudy and cool</td>\n			<td style=\"text-align:justify\">Warm and hot</td>\n			<td style=\"text-align:justify\">Sunny days with cool nights</td>\n		</tr>\n		<tr>\n			<td style=\"text-align:justify\">Average temperature: 5°C - 10°C (41ºF - 50º)</td>\n			<td style=\"text-align:justify\">Average temperature: 11°C - 18°C (52ºF - 64ºF)</td>\n			<td style=\"text-align:justify\">Average temperature: 24°C - 26°C (75ºF - 79ºF) </td>\n			<td style=\"text-align:justify\">Average temperature: 20°C - 24°C (68ºF - 75ºF)</td>\n		</tr>\n		<tr>\n			<td style=\"text-align:justify\">Travel note: Bundle up as the weather may get freezing</td>\n			<td style=\"text-align:justify\">Travel note: Great time for walks</td>\n			<td style=\"text-align:justify\">Travel note: Drink plenty of water when going out and about. Expect rainy weather as well.</td>\n			<td style=\"text-align:justify\">Travel note: Best time to visit and trek the countryside</td>\n		</tr>\n	</tbody>\n</table>\n\n<p style=\"text-align:justify\"> </p>\n\n<h4 style=\"text-align:justify\">Clothing</h4>\n\n<p style=\"text-align:justify\"> </p>\n\n<p style=\"text-align:justify\">Warm clothing are required from November to February and tropical wear from March to October.<br />\n<br />\n<strong>Source: </strong><strong>Nepal Tourism Board</strong></p>\n\n<p style=\"text-align:justify\"> </p>\n\n<h4 style=\"text-align:justify\">Local Currency</h4>\n\n<p style=\"text-align:justify\">The major currency in Nepal is the Nepalese Rupees (NPR). Foreign currency must be exchanged through banks or authorized foreign exchange dealers. The receipts from such transactions are to be obtained and retained by visitors other than Indian nationals. They have to make their payments in convertible foreign currency at hotels, travel agencies, trekking agencies and while purchasing air tickets. In Nepal, Nepalese Rupees is subdivided into 100 Paisa. The denominations of currency notes available in circulation are 1, 2, 5, 10, 20, 50, 100, 500 & 1000 Rupees.<br />\n<br />\n<strong>Source: </strong><strong>Nepal Tourism Board</strong></p>\n\n<h4 style=\"text-align:justify\">Credit Cards</h4>\n\n<p style=\"text-align:justify\"> </p>\n\n<p style=\"text-align:justify\">Most International Cards are widely accepted by hotels and leading travel/trekking agents.<br />\n<br />\n<strong>Source: </strong><strong>Nepal Tourism Board</strong></p>\n\n<p style=\"text-align:justify\"> </p>\n\n<h4 style=\"text-align:justify\">Religion</h4>\n\n<p style=\"text-align:justify\"> </p>\n\n<p style=\"text-align:justify\">Nepal was declared a secular country by the Parliament on May 18, 2006. Religions practiced in Nepal are: Hinduism, Buddhism, Islam, Christianity, Jainism, Sikhism, Bon, ancestor worship and animism. The majority of the Nepalese are either Hindus or Buddhists. The two have co-existed in harmony for centuries.<br />\n<br />\n<strong>Source: </strong><strong>Nepal Tourism Board</strong></p>\n\n<p style=\"text-align:justify\"> </p>\n\n<h4 style=\"text-align:justify\">Language</h4>\n\n<p style=\"text-align:justify\"> </p>\n\n<p style=\"text-align:justify\">Nepali is the official language which is written in the Devanagari script. English is understood and spoken by the educated people and by people involved in the tourism industry. 123 languages are spoken in Nepal and most people speak more than one language.<br />\n<br />\n<strong>Source: </strong><strong>Nepal Tourism Board</strong></p>\n\n<p style=\"text-align:justify\"> </p>\n\n<h4 style=\"text-align:justify\">Water</h4>\n\n<p style=\"text-align:justify\"> </p>\n\n<p style=\"text-align:justify\">In Kathmandu, boiled and filtered water as well as mineral water is available in most of the hotels and restaurants. Elsewhere, it is advisable to use water sterilization tablets or stick to tea and soft drinks.<br />\n<br />\n<strong>Source: </strong><strong>Nepal Tourism Board</strong></p>\n\n<p style=\"text-align:justify\"> </p>\n\n<h4 style=\"text-align:justify\">Electricity</h4>\n\n<p style=\"text-align:justify\"> </p>\n\n<p style=\"text-align:justify\">In Nepal we use 220 volts AC, 50 cycles throughout the country. Power cuts are faced on a daily basis as per the pre-determined schedule.<br />\n<br />\n<strong>Source: </strong><strong>Nepal Tourism Board</strong></p>\n\n<p style=\"text-align:justify\"> </p>\n\n<h4 style=\"text-align:justify\">Official Weekly Holiday</h4>\n\n<p style=\"text-align:justify\">Saturday is the official weekly holiday in Nepal. Most of the shops are closed on this day, while Museums throughout the valley remain closed on Tuesday and other government holidays.<br />\n<br />\n<strong>Source: </strong><strong>Nepal Tourism Board</strong></p>\n\n<h4 style=\"text-align:justify\">Working hours and Holidays</h4>\n\n<p style=\"text-align:justify\">Official working hours are from 10:00 am to 5:00 pm. Nepal has a lot of festivals and religious holidays. If you happen to be in Nepal during such an occasion, do participate in the festivities, possibly with the help of a guide. <br />\n<br />\n<strong>Source: </strong><strong>Nepal Tourism Board</strong></p>\n\n<h4 style=\"text-align:justify\">Health</h4>\n\n<p style=\"text-align:justify\"> </p>\n\n<p style=\"text-align:justify\">International certificate of vaccination regarding current inoculation against cholera, typhoid and yellow fever are not required.<br />\n<br />\n<strong>Source: </strong><strong>Nepal Tourism Board</strong></p>\n', NULL, NULL, 8),
(8, '', '', '', '', '', '', '', '', '', '', '', '', 9),
(9, '', '', '', '', '', '', '', '', '', '', '', '', 10),
(10, '', '', '', '', '', '', '', '', '', '', '', '', 11),
(11, '', '', '', '', '', '', '', '', '', '', '', '', 12),
(12, '', '', '', '', '', '', '', '', '', '', '', '', 13),
(13, '', '', '', '', '', '', '', '', '', '', '', '', 14),
(14, '', '', '', '', '', '', '', '', '', '', NULL, NULL, 15),
(15, '', '', '', '', '', '', '', '', '', '', NULL, NULL, 16),
(16, '', '', '', '', '', '', '', '', '', '', NULL, NULL, 17),
(17, '', '', '', '', '', '', '', '', '', '', '', '', 18),
(18, 'Accomodation', '', 'Custom Formalities', '', 'Permits and Fees [Tour, trekking and mountaineering]', '', 'Cultural Etiquette', '<h4 style=\"text-align:justify\">Some tips on the common etiquettes practiced by Nepali people should be useful to visitors.</h4>\r\n\r\n<ul>\r\n	<li style=\"text-align:justify\">The form of greeting in Nepal is “Namaste” performing by joining both palms together. It literally means “the divine in me salutes the divine in you”.</li>\r\n	<li style=\"text-align:justify\">As a mark of respect Nepalis usually take their shoes off before entering someone’s house or place of worship.</li>\r\n	<li style=\"text-align:justify\">Food or material that has been touched by another person’s mouth is considered impure or “jutho” and, therefore, is not accepted unless among close friends or family.</li>\r\n	<li style=\"text-align:justify\">Touching something with feet or using the left hand to give or take may not be considered auspicious.</li>\r\n	<li style=\"text-align:justify\">Women wearing skimpy outfits are frowned upon especially in the rural parts of the country.</li>\r\n	<li style=\"text-align:justify\">As a part of the tradition some Hindu temples do not allow non Hindus to enter.</li>\r\n	<li style=\"text-align:justify\">Leather articles are prohibited inside some temple areas.</li>\r\n	<li style=\"text-align:justify\">Walking around temples or stupas is traditionally done clockwise.</li>\r\n	<li style=\"text-align:justify\">To avoid conflict photography is carried out after receiving permission from the object or person.</li>\r\n	<li style=\"text-align:justify\">Public displays of affection are considered scandalous.</li>\r\n	<li style=\"text-align:justify\">Nodding of head means “Yes” while shaking of head means a “No”. A slight dangling of head from left to right means “OK”.</li>\r\n</ul>\r\n', 'Responsible Tourism', '', '', '', 19),
(19, '', '', '', '', '', '', '', '', '', '', '', '', 20),
(20, '', '', '', '', '', '', '', '', '', '', NULL, NULL, 21),
(21, '', '', '', '', '', '', '', '', '', '', NULL, NULL, 22),
(22, '', '', '', '', '', '', '', '', '', '', '', '', 23),
(23, '', '', '', '', '', '', '', '', '', '', NULL, NULL, 25),
(24, '', '', '', '', '', '', '', '', '', '', '', '', 26),
(25, '', '', '', '', '', '', '', '', '', '', NULL, NULL, 27),
(26, '', '', '', '', '', '', '', '', '', '', '', '', 28),
(27, '', '', '', '', '', '', '', '', '', '', '', '', 29),
(28, '', '', '', '', '', '', '', '', '', '', '', '', 30),
(29, '', '', '', '', '', '', '', '', '', '', NULL, NULL, 31),
(30, '', '', '', '', '', '', '', '', '', '', NULL, NULL, 32),
(31, '', '', '', '', '', '', '', '', '', '', NULL, NULL, 33),
(32, '', '', '', '', '', '', '', '', '', '', NULL, NULL, 34),
(33, '', '', '', '', '', '', '', '', '', '', NULL, NULL, 35),
(34, '', '', '', '', '', '', '', '', '', '', NULL, NULL, 36),
(35, '', '', '', '', '', '', '', '', '', '', NULL, NULL, 37),
(36, '', '', '', '', '', '', '', '', '', '', NULL, NULL, 38),
(37, '', '', '', '', '', '', '', '', '', '', NULL, NULL, 39),
(38, '', '', '', '', '', '', '', '', '', '', NULL, NULL, 40),
(39, '', '', '', '', '', '', '', '', '', '', NULL, NULL, 41),
(40, '', '', '', '', '', '', '', '', '', '', '', '', 42),
(41, '', '', '', '', '', '', '', '', '', '', '', '', 43),
(42, '', '', '', '', '', '', '', '', '', '', NULL, NULL, 44),
(43, '', '', '', '', '', '', '', '', '', '', NULL, NULL, 45),
(44, '', '', '', '', '', '', '', '', '', '', NULL, NULL, 46),
(45, '', '', '', '', '', '', '', '', '', '', NULL, NULL, 47),
(46, '', '', '', '', '', '', '', '', '', '', NULL, NULL, 48),
(47, '', '', '', '', '', '', '', '', '', '', NULL, NULL, 49),
(48, '', '', '', '', '', '', '', '', '', '', NULL, NULL, 50),
(49, '', '', '', '', '', '', '', '', '', '', NULL, NULL, 51),
(50, '', '', '', '', '', '', '', '', '', '', NULL, NULL, 52),
(51, '', '', '', '', '', '', '', '', '', '', NULL, NULL, 53),
(52, '', '', '', '', '', '', '', '', '', '', NULL, NULL, 54),
(53, 'PROMPT DELIVERY', '<p>Python Motors can be deliver promptly all around the world with timely. Our world wide dealers can deliver the product to your home or industries.</p>\n', 'SUPPORT 24/7', '<p>Our support team always be happy to solve your issue, with respect to the machine our support and maintenace team always ready to solve problems.</p>\n', 'MANY STYLES AVAILABLE', '<p>Python researcha and development and production team is provide vairous model and styled electric motors to your local cities and town with prompt service.</p>\n', 'CONSULTING', '<p>We can provide our customer consuting servies about the electric motors, whic is benificial&nbsp;to our customer to get worlds best electric motor ever.</p>\n', 'WORLD WIDE DEALER', '<p>Python &nbsp;Electric Motors can give you dealership to you with continues support. Python will be happy to serve in your local town, villages and cities.</p>\n', 'RESEARCH & DEVELOPMENT', '<p>Our researcha and development team working hard to produce new technology which offer our customer new and innovative technology to use.</p>\n', 55),
(54, '', '', '', '', '', '', '', '', '', '', NULL, NULL, 56),
(55, '', '', '', '', '', '', '', '', '', '', NULL, NULL, 57),
(56, '', '', '', '', '', '', '', '', '', '', NULL, NULL, 58),
(57, '', '', '', '', '', '', '', '', '', '', NULL, NULL, 60),
(58, '', '', '', '', '', '', '', '', '', '', NULL, NULL, 61),
(59, '', '', '', '', '', '', '', '', '', '', NULL, NULL, 62),
(60, '', '', '', '', '', '', '', '', '', '', NULL, NULL, 63),
(61, '', '', '', '', '', '', '', '', '', '', NULL, NULL, 64),
(62, '', '', '', '', '', '', '', '', '', '', NULL, NULL, 65),
(63, '', '', '', '', '', '', '', '', '', '', '', '', 66),
(64, '', '', '', '', '', '', '', '', '', '', '', '', 67),
(65, '', '', '', '', '', '', '', '', '', '', '', '', 68),
(66, '', '', '', '', '', '', '', '', '', '', '', '', 69),
(67, '', '', '', '', '', '', '', '', '', '', '', '', 70),
(68, '', '', '', '', '', '', '', '', '', '', NULL, NULL, 71),
(69, '', '', '', '', '', '', '', '', '', '', NULL, NULL, 72),
(70, '', '', '', '', '', '', '', '', '', '', NULL, NULL, 73),
(71, '', '', '', '', '', '', '', '', '', '', '', '', 74),
(72, '', '', '', '', '', '', '', '', '', '', NULL, NULL, 75),
(73, '', '', '', '', '', '', '', '', '', '', '', '', 76),
(74, '', '', '', '', '', '', '', '', '', '', '', '', 77),
(75, '', '', '', '', '', '', '', '', '', '', '', '', 78),
(76, '', '', 'Electromechanical Equipment installation and Maintenance', '', '', '', '', '', 'Painting Contracting', '', '', '', 79),
(77, '', '', '', '', '', '', '', '', '', '', '', '', 80),
(78, '', '', '', '', '', '', '', '', '', '', '', '', 81),
(79, '', '', '', '', '', '', '', '', '', '', '', '', 82),
(80, '', '', '', '', '', '', '', '', '', '', '', '', 83),
(81, '', '', '', '', '', '', '', '', '', '', '', '', 84),
(82, '', '', '', '', '', '', '', '', '', '', '', '', 85),
(83, '', '', '', '', '', '', '', '', '', '', '', '', 86),
(84, '', '', '', '', '', '', '', '', '', '', '', '', 87),
(85, '', '', '', '', '', '', '', '', '', '', '', '', 88),
(86, '', '', '', '', '', '', '', '', '', '', '', '', 89),
(87, '', '', '', '', '', '', '', '', '', '', '', '', 90),
(88, '', '', '', '', '', '', '', '', '', '', '', '', 91),
(89, '', '', '', '', '', '', '', '', '', '', '', '', 92),
(90, '', '', '', '', '', '', '', '', '', '', '', '', 93),
(91, '', '', '', '', '', '', '', '', '', '', '', '', 94),
(92, '', '', '', '', '', '', '', '', '', '', '', '', 95),
(93, '', '', '', '', '', '', '', '', '', '', '', '', 96),
(94, '', '', '', '', '', '', '', '', '', '', '', '', 97),
(95, '', '', '', '', '', '', '', '', '', '', '', '', 98),
(96, '', '', '', '', '', '', '', '', '', '', '', '', 99),
(97, '', '', '', '', '', '', '', '', '', '', '', '', 100),
(98, '', '', '', '', '', '', '', '', '', '', '', '', 101),
(99, '', '', '', '', '', '', '', '', '', '', '', '', 102),
(100, '', '', '', '', '', '', '', '', '', '', '', '', 103),
(101, '', '', '', '', '', '', '', '', '', '', '', '', 104),
(102, '', '', '', '', '', '', '', '', '', '', '', '', 105),
(103, '', '', '', '', '', '', '', '', '', '', '', '', 106),
(104, '', '', '', '', '', '', '', '', '', '', '', '', 107),
(105, '', '', '', '', '', '', '', '', '', '', '', '', 108),
(106, '', '', '', '', '', '', '', '', '', '', '', '', 109),
(107, '', '', '', '', '', '', '', '', '', '', '', '', 110),
(108, '', '', '', '', '', '', '', '', '', '', '', '', 111),
(109, '', '', '', '', '', '', '', '', '', '', '', '', 112),
(110, '', '', '', '', '', '', '', '', '', '', '', '', 113),
(111, '', '', '', '', '', '', '', '', '', '', '', '', 114),
(112, '', '', '', '', '', '', '', '', '', '', '', '', 115),
(113, '', '', '', '', '', '', '', '', '', '', '', '', 116),
(114, '', '', '', '', '', '', '', '', '', '', '', '', 117),
(115, '', '', '', '', '', '', '', '', '', '', '', '', 118),
(116, '', '', '', '', '', '', '', '', '', '', '', '', 119),
(117, '', '', '', '', '', '', '', '', '', '', '', '', 120),
(118, '', '', '', '', '', '', '', '', '', '', '', '', 121),
(119, '', '', '', '', '', '', '', '', '', '', '', '', 122),
(120, '', '', '', '', '', '', '', '', '', '', '', '', 123),
(121, '', '', '', '', '', '', '', '', '', '', '', '', 124),
(122, '', '', '', '', '', '', '', '', '', '', '', '', 125),
(123, '', '', '', '', '', '', '', '', '', '', '', '', 126),
(124, '', '', '', '', '', '', '', '', '', '', '', '', 127),
(125, '', '', '', '', '', '', '', '', '', '', '', '', 128),
(126, '', '', '', '', '', '', '', '', '', '', '', '', 129),
(127, '', '', '', '', '', '', '', '', '', '', '', '', 130),
(128, '', '', '', '', '', '', '', '', '', '', '', '', 131),
(129, '', '', '', '', '', '', '', '', '', '', '', '', 132),
(130, '', '', '', '', '', '', '', '', '', '', '', '', 133),
(131, '', '', '', '', '', '', '', '', '', '', '', '', 134),
(132, '', '', '', '', '', '', '', '', '', '', '', '', 135),
(133, '', '', '', '', '', '', '', '', '', '', '', '', 136),
(134, '', '', '', '', '', '', '', '', '', '', '', '', 137),
(135, '', '', '', '', '', '', '', '', '', '', '', '', 138),
(136, '', '', '', '', '', '', '', '', '', '', '', '', 139),
(137, '', '', '', '', '', '', '', '', '', '', '', '', 140),
(138, '', '', '', '', '', '', '', '', '', '', '', '', 141),
(139, '', '', '', '', '', '', '', '', '', '', '', '', 142),
(140, '', '', '', '', '', '', '', '', '', '', '', '', 143),
(141, '', '', '', '', '', '', '', '', '', '', '', '', 144),
(142, '', '', '', '', '', '', '', '', '', '', '', '', 145),
(143, '', '', '', '', '', '', '', '', '', '', '', '', 146),
(144, '', '', '', '', '', '', '', '', '', '', '', '', 147),
(145, '', '', '', '', '', '', '', '', '', '', '', '', 148),
(146, '', '', '', '', '', '', '', '', '', '', '', '', 149),
(147, '', '', '', '', '', '', '', '', '', '', '', '', 150),
(148, '', '', '', '', '', '', '', '', '', '', '', '', 151),
(149, '', '', '', '', '', '', '', '', '', '', '', '', 152),
(150, '', '', '', '', '', '', '', '', '', '', '', '', 153),
(151, '', '', '', '', '', '', '', '', '', '', '', '', 154),
(152, '', '', '', '', '', '', '', '', '', '', '', '', 155),
(153, '', '', '', '', '', '', '', '', '', '', '', '', 156),
(154, '', '', '', '', '', '', '', '', '', '', '', '', 157),
(155, '', '', '', '', '', '', '', '', '', '', '', '', 158),
(156, '', '', '', '', '', '', '', '', '', '', '', '', 159),
(157, '', '', '', '', '', '', '', '', '', '', '', '', 160),
(158, '', '', '', '', '', '', '', '', '', '', '', '', 161),
(159, '', '', '', '', '', '', '', '', '', '', '', '', 162),
(160, '', '', '', '', '', '', '', '', '', '', '', '', 163),
(161, '', '', '', '', '', '', '', '', '', '', '', '', 164),
(162, '', '', '', '', '', '', '', '', '', '', '', '', 165),
(163, '', '', '', '', '', '', '', '', '', '', '', '', 166),
(164, '', '', '', '', '', '', '', '', '', '', '', '', 167),
(165, '', '', '', '', '', '', '', '', '', '', '', '', 168),
(166, '', '', '', '', '', '', '', '', '', '', '', '', 169),
(167, '', '', '', '', '', '', '', '', '', '', '', '', 170),
(168, '', '', '', '', '', '', '', '', '', '', '', '', 171),
(169, '', '', '', '', '', '', '', '', '', '', '', '', 172),
(170, '', '', '', '', '', '', '', '', '', '', '', '', 173),
(171, '', '', '', '', '', '', '', '', '', '', '', '', 1),
(172, '', '', '', '', '', '', '', '', '', '', '', '', 2),
(173, '', '', '', '', '', '', '', '', '', '', '', '', 3),
(174, '', '', '', '', '', '', '', '', '', '', '', '', 4),
(175, '', '', '', '', '', '', '', '', '', '', '', '', 5),
(176, '', '', '', '', '', '', '', '', '', '', '', '', 6),
(177, '', '', '', '', '', '', '', '', '', '', '', '', 7),
(178, '', '', '', '', '', '', '', '', '', '', '', '', 8),
(179, '', '', '', '', '', '', '', '', '', '', '', '', 9),
(180, '', '', '', '', '', '', '', '', '', '', '', '', 10),
(181, '', '', '', '', '', '', '', '', '', '', '', '', 11),
(182, '', '', '', '', '', '', '', '', '', '', '', '', 12),
(183, '', '', '', '', '', '', '', '', '', '', '', '', 13),
(184, '', '', '', '', '', '', '', '', '', '', '', '', 14),
(185, '', '', '', '', '', '', '', '', '', '', '', '', 15),
(186, '', '', '', '', '', '', '', '', '', '', '', '', 16),
(187, '', '', '', '', '', '', '', '', '', '', '', '', 17),
(188, '', '', '', '', '', '', '', '', '', '', '', '', 18),
(189, 'Accomodation', '', 'Custom Formalities', '', 'Permits and Fees [Tour, trekking and mountaineering]', '', 'Cultural Etiquette', '<h4 style=\"text-align:justify\">Some tips on the common etiquettes practiced by Nepali people should be useful to visitors.</h4>\r\n\r\n<ul>\r\n	<li style=\"text-align:justify\">The form of greeting in Nepal is “Namaste” performing by joining both palms together. It literally means “the divine in me salutes the divine in you”.</li>\r\n	<li style=\"text-align:justify\">As a mark of respect Nepalis usually take their shoes off before entering someone’s house or place of worship.</li>\r\n	<li style=\"text-align:justify\">Food or material that has been touched by another person’s mouth is considered impure or “jutho” and, therefore, is not accepted unless among close friends or family.</li>\r\n	<li style=\"text-align:justify\">Touching something with feet or using the left hand to give or take may not be considered auspicious.</li>\r\n	<li style=\"text-align:justify\">Women wearing skimpy outfits are frowned upon especially in the rural parts of the country.</li>\r\n	<li style=\"text-align:justify\">As a part of the tradition some Hindu temples do not allow non Hindus to enter.</li>\r\n	<li style=\"text-align:justify\">Leather articles are prohibited inside some temple areas.</li>\r\n	<li style=\"text-align:justify\">Walking around temples or stupas is traditionally done clockwise.</li>\r\n	<li style=\"text-align:justify\">To avoid conflict photography is carried out after receiving permission from the object or person.</li>\r\n	<li style=\"text-align:justify\">Public displays of affection are considered scandalous.</li>\r\n	<li style=\"text-align:justify\">Nodding of head means “Yes” while shaking of head means a “No”. A slight dangling of head from left to right means “OK”.</li>\r\n</ul>\r\n', 'Responsible Tourism', '', '', '', 19),
(190, '', '', '', '', '', '', '', '', '', '', '', '', 20),
(191, '', '', '', '', '', '', '', '', '', '', '', '', 21),
(192, '', '', '', '', '', '', '', '', '', '', '', '', 22),
(193, '', '', '', '', '', '', '', '', '', '', '', '', 23),
(194, '', '', '', '', '', '', '', '', '', '', '', '', 24),
(195, '', '', '', '', '', '', '', '', '', '', '', '', 25),
(196, '', '', '', '', '', '', '', '', '', '', '', '', 26),
(197, '', '', '', '', '', '', '', '', '', '', '', '', 1),
(198, '', '', '', '', '', '', '', '', '', '', '', '', 2),
(199, '', '', '', '', '', '', '', '', '', '', '', '', 3);
INSERT INTO `igc_content_tabs` (`tab_id`, `tab1`, `description1`, `tab2`, `description2`, `tab3`, `description3`, `tab4`, `description4`, `tab5`, `description5`, `tab6`, `description6`, `content_id`) VALUES
(200, '', '', '', '', '', '', '', '', '', '', '', '', 4),
(201, '', '', '', '', '', '', '', '', '', '', '', '', 5);

-- --------------------------------------------------------

--
-- Table structure for table `igc_content_tags`
--

CREATE TABLE `igc_content_tags` (
  `content_id` int(11) DEFAULT NULL,
  `term_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `igc_content_tags`
--

INSERT INTO `igc_content_tags` (`content_id`, `term_id`) VALUES
(3, 2),
(9, 5),
(45, 5),
(46, 5),
(47, 5),
(48, 5),
(49, 5),
(50, 5),
(51, 5),
(52, 5),
(53, 5),
(54, 5),
(57, 9),
(17, 10),
(58, 11),
(59, 12),
(59, 13),
(43, 14),
(19, 15),
(60, 3),
(60, 4),
(61, 16),
(35, 16),
(62, 16),
(63, 16),
(64, 16),
(65, 16),
(66, 16),
(67, 16),
(68, 16),
(69, 16),
(70, 16);

-- --------------------------------------------------------

--
-- Table structure for table `igc_gallery`
--

CREATE TABLE `igc_gallery` (
  `gallery_id` int(11) NOT NULL,
  `gallery_title` varchar(255) DEFAULT NULL,
  `gallery_caption` varchar(255) DEFAULT NULL,
  `gallery_image` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `publish_status` enum('1','0') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `igc_gallery`
--

INSERT INTO `igc_gallery` (`gallery_id`, `gallery_title`, `gallery_caption`, `gallery_image`, `created`, `updated`, `publish_status`) VALUES
(5, '100% tax free', '100% tax free', '3b9b75d89506b2e0e151e4729a140fa76.png', '2017-10-08 05:34:43', NULL, '1'),
(6, '100% foreign ownership of company', '100% foreign ownership of company', 'f040992952069002a631839dab0f8f329.png', '2017-10-08 05:35:35', NULL, '1'),
(7, '100% return of capital and profits', '100% return of capital and profits', 'e918ebf6cc1b911fcd52feda0407a6db4.png', '2017-10-08 05:35:59', NULL, '1'),
(8, 'Long-term corporate tax exemption', 'Long-term corporate tax exemption', '967efcbe2672b2446a0527ea071d4a815.png', '2017-10-08 05:36:49', NULL, '1'),
(9, 'Low cost of doing business', 'Low cost of doing business', 'a4751e2c08ca36ba6f58b98eadc8c235lc.png', '2017-10-08 05:37:58', NULL, '1'),
(10, 'Availability of flexi offices', 'Availability of flexi offices', '845ad9ff2ac28a26ebe91fe7a5bac9ea5f.png', '2017-10-08 05:38:33', NULL, '1'),
(11, 'Quick licenses', 'Quick licenses', 'b27877e8a1222328d0da1e41bc65cc73name-card-icon.png', '2017-10-08 05:39:26', '2017-10-08 05:40:34', '1'),
(12, 'Economical and variety of rental office space', 'Economical and variety of rental office space', 'e8ef519cf8a6a2ade3a18567aa977659Analytics-256.png', '2017-10-08 05:41:08', NULL, '1');

-- --------------------------------------------------------

--
-- Table structure for table `igc_guest`
--

CREATE TABLE `igc_guest` (
  `guest_id` int(11) NOT NULL,
  `guest_title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone_num` int(11) DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `adress` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `guest_caption` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `guest_description` mediumtext COLLATE utf8_unicode_ci,
  `guest_image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `publish_status` enum('1','0') COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `igc_guest`
--

INSERT INTO `igc_guest` (`guest_id`, `guest_title`, `facebook`, `twitter`, `phone_num`, `email`, `adress`, `slug`, `guest_caption`, `guest_description`, `guest_image`, `created`, `updated`, `publish_status`) VALUES
(1, 'अमृत ', NULL, NULL, NULL, NULL, NULL, '', 'guest reporter', '<p>अमृत&nbsp;</p>\n', 'b416f469d835dce0b1908f85223408fccapital.png', '2019-04-17 03:37:41', NULL, '1'),
(2, 'सन्जिब ', NULL, 'https://twitter.com/sanjib', NULL, NULL, NULL, '', 'reporter', '<p>सन्जिब&nbsp;</p>\n', '8f2aa98aede146b628b6c8ca2130bda6capital.png', '2019-04-17 03:43:28', '2019-04-17 03:43:39', '1');

-- --------------------------------------------------------

--
-- Table structure for table `igc_image`
--

CREATE TABLE `igc_image` (
  `image_id` int(11) NOT NULL,
  `album_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `caption` varchar(200) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `publish_status` enum('1','0') DEFAULT NULL,
  `delete_status` enum('1','0') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `igc_image`
--

INSERT INTO `igc_image` (`image_id`, `album_id`, `name`, `caption`, `created`, `updated`, `publish_status`, `delete_status`) VALUES
(1, 1, '865f80fd90df8ae20070b11be171c499d7497e8b2cea6397310fae11dbd6d799Everest1.jpg', '', '2016-03-09 06:19:14', NULL, '1', '1'),
(2, 1, '12967cc2a03871bd9eef46ed6da693981_annapurna-base-camp-trek.jpg', '', '2016-03-11 05:52:10', NULL, '0', '1'),
(3, 1, '22c1acb3539e1aeba278f7885ddb8d35package1.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ut ex vehicula nibh rhoncus viverra.', '2016-04-08 13:05:32', NULL, '1', '1'),
(4, 1, '22c1acb3539e1aeba278f7885ddb8d35package2.jpg', 'Etiam efficitur volutpat accumsan. Vestibulum consectetur leo ac risus molestie egestas', '2016-04-08 13:05:32', NULL, '1', '1'),
(5, 1, '22c1acb3539e1aeba278f7885ddb8d35package3.jpg', 'Maecenas posuere tellus metus, et pulvinar felis suscipit ut. Cras hendrerit nisl vitae est tristique', '2016-04-08 13:05:32', NULL, '1', '1'),
(6, 1, '22c1acb3539e1aeba278f7885ddb8d35package4.jpg', 'Praesent condimentum quis velit a dictum. Nulla lacinia risus vitae scelerisque dignissim', '2016-04-08 13:05:32', NULL, '1', '1'),
(7, 2, 'd210a16321048afb41103cccd097d9ebpackage1.jpg', 'annaprurna trek', '2016-04-10 07:45:35', NULL, '1', '0'),
(8, 2, 'd210a16321048afb41103cccd097d9ebpackage5.jpg', 'Gokyo', '2016-04-10 07:45:35', NULL, '1', '0'),
(9, 3, 'f418185daf34ef61913e33895a0f899626_1.png', '', '2017-08-23 21:34:36', NULL, '1', '0'),
(10, 1, '54229abfcfa5649e7003b83dd4755294b3.PNG', 'b3', '2017-08-23 22:13:18', NULL, '1', '1'),
(11, 1, '54229abfcfa5649e7003b83dd4755294b5.PNG', 'b5', '2017-08-23 22:13:18', NULL, '1', '1'),
(12, 1, '54229abfcfa5649e7003b83dd4755294b4.PNG', 'b14', '2017-08-23 22:13:18', NULL, '1', '1'),
(13, 1, '54229abfcfa5649e7003b83dd4755294b5.PNG', 'b5', '2017-08-23 22:13:18', NULL, '1', '1'),
(14, 1, '54229abfcfa5649e7003b83dd4755294b34.PNG', 'b34', '2017-08-23 22:13:18', NULL, '1', '1'),
(15, 1, '54229abfcfa5649e7003b83dd4755294b35.PNG', 'b35', '2017-08-23 22:13:18', NULL, '1', '1'),
(16, 1, 'dc8913dbc5afc5fe40f10ac6aabf68541.jpg', '', '2017-08-23 22:19:54', NULL, '1', '1'),
(17, 1, 'dc8913dbc5afc5fe40f10ac6aabf68543.jpg', '', '2017-08-23 22:19:54', NULL, '1', '1'),
(18, 1, 'dc8913dbc5afc5fe40f10ac6aabf68544.jpg', '', '2017-08-23 22:19:54', NULL, '1', '1'),
(19, 1, '8d917ee2013f097c962fa85297f0ffeab3.PNG', 'b3', '2017-08-23 22:21:01', NULL, '1', '1'),
(20, 4, 'b27a5a543f55bda3adeda94a76790bdb1.jpg', 'b', '2017-08-24 08:37:50', NULL, '1', '1'),
(21, 4, 'b27a5a543f55bda3adeda94a76790bdb2.jpg', 'fd', '2017-08-24 08:37:50', NULL, '1', '1'),
(22, 4, 'b27a5a543f55bda3adeda94a76790bdb3.jpg', 'fdd', '2017-08-24 08:37:50', NULL, '1', '1'),
(23, 4, 'b27a5a543f55bda3adeda94a76790bdb3.jpg', 'f', '2017-08-24 08:37:50', NULL, '1', '1'),
(24, 4, 'b27a5a543f55bda3adeda94a76790bdb4.jpg', 'fd', '2017-08-24 08:37:50', NULL, '1', '0'),
(25, 4, 'b27a5a543f55bda3adeda94a76790bdb1.jpg', 'dd', '2017-08-24 08:37:50', NULL, '1', '1'),
(26, 1, 'd1744bbff50dd9d5ee97ae053076295babout-us.png', '', '2017-09-28 17:23:40', NULL, '1', '1'),
(27, 1, 'd1744bbff50dd9d5ee97ae053076295bvolvo.jpg', '', '2017-09-28 17:23:40', NULL, '1', '1'),
(28, 1, 'd1744bbff50dd9d5ee97ae053076295btoyota.jpg', '', '2017-09-28 17:23:40', NULL, '1', '1'),
(29, 1, 'd1744bbff50dd9d5ee97ae053076295bchevrolet_camaro_z28_93750_1920x1080.jpg', '', '2017-09-28 17:23:40', NULL, '1', '1'),
(30, 1, 'd7a84628c025d30f7b2c52c958767e76chevrolet_camaro_z28_93750_1920x1080.jpg', '', '2017-09-28 17:25:52', NULL, '1', '1'),
(31, 1, 'd7a84628c025d30f7b2c52c958767e76chevrolet_camaro_z28_93750_1920x1080.jpg', '', '2017-09-28 17:25:52', NULL, '1', '1'),
(32, 1, 'd7a84628c025d30f7b2c52c958767e76chevrolet_camaro_z28_93750_1920x1080.jpg', '', '2017-09-28 17:25:52', NULL, '1', '1'),
(33, 1, '44151de6be734db545ec958e77b0f9dfproduct.png', '', '2017-09-28 17:44:02', NULL, '1', '1'),
(34, 1, '44151de6be734db545ec958e77b0f9dfproduct.png', '', '2017-09-28 17:44:02', NULL, '1', '1'),
(35, 1, '44151de6be734db545ec958e77b0f9dfproduct.png', '', '2017-09-28 17:44:02', NULL, '1', '1'),
(36, 1, '44151de6be734db545ec958e77b0f9dfproduct.png', '', '2017-09-28 17:44:02', NULL, '1', '1'),
(37, 1, '2227d753dc18505031869d44673728e2product.png', '', '2017-09-28 17:44:15', NULL, '1', '0'),
(38, 1, '9da6afb4840df51ceee399e5dea42598product.png', '', '2017-09-28 17:44:46', NULL, '1', '0'),
(39, 1, '9da6afb4840df51ceee399e5dea42598product.png', '', '2017-09-28 17:44:46', NULL, '1', '0'),
(40, 1, '9da6afb4840df51ceee399e5dea42598product.png', '', '2017-09-28 17:44:46', NULL, '1', '0');

-- --------------------------------------------------------

--
-- Table structure for table `igc_log_action`
--

CREATE TABLE `igc_log_action` (
  `action_id` int(11) NOT NULL,
  `action_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `igc_log_action`
--

INSERT INTO `igc_log_action` (`action_id`, `action_name`) VALUES
(1, 'Insert'),
(2, 'Update'),
(3, 'Delete');

-- --------------------------------------------------------

--
-- Table structure for table `igc_mailing_type`
--

CREATE TABLE `igc_mailing_type` (
  `type_id` int(11) NOT NULL,
  `type_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `igc_mailing_type`
--

INSERT INTO `igc_mailing_type` (`type_id`, `type_name`) VALUES
(1, 'Booking'),
(2, 'Booking Accept'),
(3, 'Booking Reject'),
(4, 'Booking Cancel'),
(5, 'Payment Success'),
(6, 'Quick Contact'),
(7, 'Trek Quote');

-- --------------------------------------------------------

--
-- Table structure for table `igc_mail_server_setting`
--

CREATE TABLE `igc_mail_server_setting` (
  `id` int(11) NOT NULL,
  `server_prefix` varchar(50) NOT NULL,
  `host` varchar(200) NOT NULL,
  `port` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(500) NOT NULL,
  `send_from_name` varchar(200) NOT NULL,
  `send_from_email` varchar(255) NOT NULL,
  `reply_to_name` varchar(200) NOT NULL,
  `reply_to_email` varchar(255) NOT NULL,
  `smtp_connect` enum('true','false') DEFAULT NULL,
  `active_status` enum('1','0') DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `delete_status` enum('1','0') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `igc_mail_server_setting`
--

INSERT INTO `igc_mail_server_setting` (`id`, `server_prefix`, `host`, `port`, `username`, `password`, `send_from_name`, `send_from_email`, `reply_to_name`, `reply_to_email`, `smtp_connect`, `active_status`, `created`, `updated`, `delete_status`) VALUES
(1, 'tls', 'smtp.gmail.com', 587, 'prabin2026@gmail.com', 'A+9z8KMyRI8VsE4OxqTKvglwCh6rQr2c2nxbKol6kXiPZTDW3bZjCwKMf/nBqmNrYP3nFlX9Y4WKk8oX6q14Fg==', 'Eshopping Nepal', 'prabin2026@gmail.com', 'Eshopping Nepal', 'prabin2026@gmail.com', 'true', '1', '2015-12-24 04:47:33', '2018-12-25 00:57:38', '0'),
(2, 'tls', 'smtp.zoho.com', 587, 'info@charteredtaxes.com', '6q6gX4ymhTJTH82DQoNtDpPtwITTozX8hkN2Z53sie+4CIL24BPLZyJwGZlwUy0yDs+yNaY/iU0gw7fJKRmmIQ==', 'Chartered Tax Consultant', 'info@charteredtaxes.com', 'Chartered Tax Consultant', 'info@charteredtaxes.com', 'true', '0', '2016-05-23 12:09:05', '2018-12-25 00:57:38', '1');

-- --------------------------------------------------------

--
-- Table structure for table `igc_package_adjacency_groups`
--

CREATE TABLE `igc_package_adjacency_groups` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `slug` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `igc_package_adjacency_groups`
--

INSERT INTO `igc_package_adjacency_groups` (`id`, `name`, `slug`) VALUES
(1, 'News Category', 'news-category');

-- --------------------------------------------------------

--
-- Table structure for table `igc_package_album`
--

CREATE TABLE `igc_package_album` (
  `album_id` int(11) NOT NULL,
  `package_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `igc_package_album`
--

INSERT INTO `igc_package_album` (`album_id`, `package_id`) VALUES
(2, 10),
(1, 9),
(2, 8),
(1, 7),
(2, 5),
(1, 195),
(4, 194),
(1, 4),
(1, 3),
(1, 2),
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `igc_package_category`
--

CREATE TABLE `igc_package_category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(200) CHARACTER SET utf8 NOT NULL,
  `category_code` enum('HM','LS','OT') CHARACTER SET utf8 DEFAULT NULL,
  `category_url` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  `featured_img` varchar(200) CHARACTER SET utf8 NOT NULL,
  `description` text CHARACTER SET utf8,
  `show_front` enum('1','0') NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `group_id` int(11) DEFAULT NULL,
  `position` int(11) NOT NULL DEFAULT '0',
  `show_mobile` enum('Y','N') NOT NULL DEFAULT 'N',
  `meta_description` text CHARACTER SET utf8,
  `meta_keywords` text CHARACTER SET utf8,
  `meta_title` text CHARACTER SET utf8,
  `delete_status` enum('1','0') NOT NULL,
  `publish_status` enum('1','0') DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `category_name_ar` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `description_ar` text CHARACTER SET utf8,
  `meta_description_ar` text CHARACTER SET utf8,
  `meta_keyword_ar` text CHARACTER SET utf8,
  `meta_title_ar` varchar(255) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `igc_package_category`
--

INSERT INTO `igc_package_category` (`category_id`, `category_name`, `category_code`, `category_url`, `featured_img`, `description`, `show_front`, `parent_id`, `group_id`, `position`, `show_mobile`, `meta_description`, `meta_keywords`, `meta_title`, `delete_status`, `publish_status`, `created`, `updated`, `category_name_ar`, `description_ar`, `meta_description_ar`, `meta_keyword_ar`, `meta_title_ar`) VALUES
(1, 'समाचार', 'HM', 'news', '0527b1b41d984cd95100beff3605d26elogo-icon-nect.png', '<p>समाचार</p>\r\n', '0', 0, 1, 1, 'Y', 'समाचार', 'समाचार', 'समाचार', '0', '1', '2019-04-04 07:06:24', NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'राजनीति', 'HM', 'politics', 'de7e76952411d036ca4b58ffcf37bfe7logo88.png', '<p>राजनीति</p>\r\n', '0', 0, 1, 2, 'Y', 'राजनीति', 'राजनीति', 'राजनीति', '0', '1', '2019-04-04 07:08:26', NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'मुख्य समाचार', 'OT', 'main-news-31', '', '', '0', 0, 1, 3, 'Y', '', '', '', '0', '1', '2019-04-16 08:35:38', '2019-04-16 17:34:08', NULL, NULL, NULL, NULL, NULL),
(4, 'अर्थ तन्त्र', 'HM', 'econimics', '', '', '0', 0, 1, 4, 'Y', '', '', '', '0', '1', '2019-04-16 08:36:54', '2019-04-16 08:37:40', NULL, NULL, NULL, NULL, NULL),
(5, 'बैङ्किङ', 'HM', 'banking', '', '', '0', 0, 1, 5, 'Y', '', '', '', '0', '1', '2019-04-16 08:37:19', NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'सेयर', 'HM', 'share', '', '', '0', 0, 1, 6, 'Y', '', '', '', '0', '1', '2019-04-16 08:38:14', NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'भिडियो', 'OT', 'video-1', '', '', '0', 0, 1, 7, 'Y', '', '', '', '0', '1', '2019-04-16 08:38:35', '2019-04-16 17:34:24', NULL, NULL, NULL, NULL, NULL),
(8, 'पूर्वाधार', 'HM', 'purbadhar', '', '', '0', 0, 1, 8, 'Y', '', '', '', '0', '1', '2019-04-16 08:38:59', NULL, NULL, NULL, NULL, NULL, NULL),
(9, 'पर्यटन', 'HM', 'tourism', '', '', '0', 0, 1, 9, 'Y', '', '', '', '0', '1', '2019-04-16 08:39:35', NULL, NULL, NULL, NULL, NULL, NULL),
(10, 'सूचना प्रविधि', 'OT', 'technology-30', '', '', '0', 0, 1, 10, 'Y', '', '', '', '0', '1', '2019-04-16 08:40:02', '2019-04-16 17:34:34', NULL, NULL, NULL, NULL, NULL),
(11, 'विचार', 'HM', 'opinion', '', '', '0', 0, 1, 11, 'Y', '', '', '', '0', '1', '2019-04-16 08:40:39', NULL, NULL, NULL, NULL, NULL, NULL),
(12, 'प्रदेश', 'OT', 'province-8', '', '', '0', 0, 1, 13, 'Y', '', '', '', '0', '1', '2019-04-16 08:41:00', '2019-04-16 17:33:48', NULL, NULL, NULL, NULL, NULL),
(13, 'बजार', 'HM', 'market', '', '', '0', 0, 1, 12, 'Y', '', '', '', '0', '1', '2019-04-16 08:41:22', NULL, NULL, NULL, NULL, NULL, NULL),
(14, ' प्रदेश -१', 'HM', 'province-1', '', '', '0', 12, 1, 14, 'Y', '', '', '', '0', '1', '2019-04-16 08:42:20', NULL, NULL, NULL, NULL, NULL, NULL),
(15, ' प्रदेश -२', 'HM', 'province-2', '', '', '0', 12, 1, 15, 'Y', '', '', '', '0', '1', '2019-04-16 08:42:39', NULL, NULL, NULL, NULL, NULL, NULL),
(16, ' प्रदेश -३', 'HM', 'proovince-3', '', '', '0', 12, 1, 16, 'Y', '', '', '', '0', '1', '2019-04-16 08:43:02', NULL, NULL, NULL, NULL, NULL, NULL),
(17, ' प्रदेश -४', 'HM', 'province-4', '', '', '0', 12, 1, 17, 'Y', '', '', '', '0', '1', '2019-04-16 08:43:25', '2019-04-16 08:43:39', NULL, NULL, NULL, NULL, NULL),
(18, ' प्रदेश -५', 'HM', 'province-5', '', '', '0', 12, 1, 18, 'Y', '', '', '', '0', '1', '2019-04-16 08:44:09', NULL, NULL, NULL, NULL, NULL, NULL),
(19, ' प्रदेश -७', 'HM', 'province-7', '', '', '0', 12, 1, 20, 'Y', '', '', '', '0', '1', '2019-04-16 08:44:25', NULL, NULL, NULL, NULL, NULL, NULL),
(20, ' प्रदेश -६', 'HM', 'province-6', '', '', '0', 12, 1, 19, 'Y', '', '', '', '0', '1', '2019-04-16 08:44:55', NULL, NULL, NULL, NULL, NULL, NULL),
(21, 'सिफारिस', 'HM', 'sifarish', '', '', '0', 0, 1, 21, 'Y', '', '', '', '0', '1', '2019-04-16 08:45:49', NULL, NULL, NULL, NULL, NULL, NULL),
(22, 'कला / साहित्य', 'OT', 'art-literature-29', '', '', '0', 0, 1, 22, 'Y', '', '', '', '0', '1', '2019-04-16 08:47:22', '2019-04-16 17:34:42', NULL, NULL, NULL, NULL, NULL),
(23, 'खेल', 'HM', 'sports', '', '', '0', 0, 1, 23, 'Y', '', '', '', '0', '1', '2019-04-16 08:47:39', NULL, NULL, NULL, NULL, NULL, NULL),
(24, 'सहकारी', 'OT', 'co-operative-44', '', '', '0', 0, 1, 24, 'Y', '', '', '', '0', '1', '2019-04-16 08:48:08', '2019-04-16 17:34:50', NULL, NULL, NULL, NULL, NULL),
(25, 'अन्तरबार्ता', 'OT', 'interview-40', '', '', '0', 0, 1, 25, 'Y', '', '', '', '0', '1', '2019-04-16 08:48:34', '2019-04-16 17:35:27', NULL, NULL, NULL, NULL, NULL),
(26, 'ब्लग', 'HM', 'blogs', '', '', '0', 0, 1, 26, 'Y', '', '', '', '0', '1', '2019-04-16 08:48:59', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `igc_pictures`
--

CREATE TABLE `igc_pictures` (
  `pictures_id` int(11) NOT NULL,
  `pictures_title` varchar(255) NOT NULL,
  `pictures_caption` varchar(255) DEFAULT NULL,
  `pictures_image` varchar(255) NOT NULL,
  `locate` enum('1','2','3','4','5','6','7') DEFAULT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  `publish_status` enum('1','0') NOT NULL,
  `delete_status` enum('1','0') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `igc_pictures`
--

INSERT INTO `igc_pictures` (`pictures_id`, `pictures_title`, `pictures_caption`, `pictures_image`, `locate`, `created`, `updated`, `publish_status`, `delete_status`) VALUES
(5, 'Top Header Background', 'Top Header Background', '93c89a4b9cb44ca5abe30785d226d695order-form-img.jpg', '6', '2017-10-02 02:52:57', '2017-12-22 13:24:00', '1', '0'),
(6, 'Navigation', 'Naviation', 'c91b95cae675d1368cf88f9a3da58e01block-bg-2.jpg', '3', '2017-10-02 03:22:47', '2017-12-22 11:36:23', '1', '0'),
(12, 'Logo', 'Logo', 'af988312978fad72c24e545c31bf8a49capital.png', '1', '2017-10-02 05:28:33', '2019-04-16 16:27:51', '1', '0'),
(15, 'Best Mid Logo', 'Best Mid Logo', '2572bd363583b4c28b31fcbb15df5837the-best-img.png', '2', '2017-10-07 00:01:20', '2017-12-22 11:31:25', '1', '0'),
(16, 'Our client', 'Our client', '57fab836f21e4a2a4a74ad5f8aa8f819block-bg-3.jpg', '4', '2017-12-22 11:39:55', '0000-00-00 00:00:00', '1', '0');

-- --------------------------------------------------------

--
-- Table structure for table `igc_popup`
--

CREATE TABLE `igc_popup` (
  `popup_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `body` longtext COLLATE utf8_unicode_ci NOT NULL,
  `publish_status` int(20) NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  `delete_status` int(20) NOT NULL DEFAULT '0',
  `popup_image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `link` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `igc_quick_contact_message`
--

CREATE TABLE `igc_quick_contact_message` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `message` varchar(300) NOT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `delete_status` enum('1','0') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `igc_reporter`
--

CREATE TABLE `igc_reporter` (
  `reporter_id` int(11) NOT NULL,
  `reporter_title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone_num` int(11) DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `adress` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `reporter_caption` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `reporter_description` mediumtext COLLATE utf8_unicode_ci,
  `reporter_image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `publish_status` enum('1','0') COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `igc_reporter`
--

INSERT INTO `igc_reporter` (`reporter_id`, `reporter_title`, `facebook`, `twitter`, `phone_num`, `email`, `adress`, `slug`, `reporter_caption`, `reporter_description`, `reporter_image`, `created`, `updated`, `publish_status`) VALUES
(1, 'क्यापिटल नेपाल', NULL, 'https://twitter.com/capitalnepal', NULL, NULL, NULL, '', 'Reporter', '<p>क्यापिटल नेपाल</p>\n', 'eade16b1d00161438946dd0d83a08aabcapital.png', '2019-04-17 03:31:52', '2019-04-17 03:33:01', '1'),
(2, 'सुजन ओली', NULL, NULL, NULL, NULL, NULL, '', 'reporter', '<p>सुजन ओली</p>\n', 'af0fa99bc462d69f7d44e93176fbc45ccapital.png', '2019-04-17 03:42:51', '2019-04-17 03:43:00', '1');

-- --------------------------------------------------------

--
-- Table structure for table `igc_review`
--

CREATE TABLE `igc_review` (
  `review_id` int(11) NOT NULL,
  `review_title` varchar(255) DEFAULT NULL,
  `review_url` varchar(255) DEFAULT NULL,
  `review_text` text,
  `review_by` varchar(255) DEFAULT NULL,
  `slider_image` varchar(255) DEFAULT NULL,
  `show_front` enum('1','0') DEFAULT '0',
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `publish_status` enum('1','0') DEFAULT NULL,
  `delete_status` enum('1','0') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `igc_review`
--

INSERT INTO `igc_review` (`review_id`, `review_title`, `review_url`, `review_text`, `review_by`, `slider_image`, `show_front`, `created`, `updated`, `publish_status`, `delete_status`) VALUES
(5, 'Divine Creation', 'divine-creation', '<p>It&#39;s not every day you run into people who genuinely care about other people, and these guys do. They are always doing good and ethical work. They&#39;re honest and reliable and there&#39;s no substitute for great customer service.</p>\n', 'John Daniel', 'b80d1ec3ddec44d03ab7b4d32a6ae480daniel.jpg', '0', '2017-08-24 13:33:27', '2017-10-09 00:57:08', '1', '0'),
(6, 'Jinvo corpoation', 'jinvo-corpoation', '<p>Dubaisetup is one of the best companies I have had the pleasure of working with. They are extremely thorough and truly take pride in what they do. I know I can trust python and his team with all of my motor needs!</p>\n', 'Smith Robert', '999c6838f46b9a572fc823ee0590dd15smith.jpg', '0', '2017-08-24 13:44:28', '2017-10-09 00:57:37', '1', '0');

-- --------------------------------------------------------

--
-- Table structure for table `igc_site_settings`
--

CREATE TABLE `igc_site_settings` (
  `id` int(11) NOT NULL,
  `site_name` varchar(200) NOT NULL,
  `site_slogan` tinytext,
  `site_url` tinytext NOT NULL,
  `feedback_email` varchar(255) NOT NULL,
  `site_logo` varchar(225) DEFAULT NULL,
  `skype` varchar(200) DEFAULT NULL,
  `facebook_link` varchar(255) DEFAULT NULL,
  `twiter_link` varchar(255) DEFAULT NULL,
  `youtube_link` varchar(255) DEFAULT NULL,
  `google_plus_link` varchar(255) DEFAULT NULL,
  `linked_in` varchar(500) DEFAULT NULL,
  `instagram` varchar(500) DEFAULT NULL,
  `location_map` text,
  `contact_details` text,
  `meta_title` varchar(255) NOT NULL,
  `meta_description` tinytext,
  `meta_keywords` text,
  `home_title` varchar(255) DEFAULT NULL,
  `home_description` text,
  `service_title_one` varchar(255) DEFAULT NULL,
  `service_description_one` text,
  `service_title_two` varchar(255) DEFAULT NULL,
  `service_description_two` text,
  `service_title_three` varchar(255) DEFAULT NULL,
  `service_description_three` text,
  `service_title_four` varchar(255) DEFAULT NULL,
  `service_description_four` text,
  `service_title_five` varchar(255) DEFAULT NULL,
  `service_description_five` text,
  `counter_one` varchar(255) DEFAULT NULL,
  `counter_one_description` varchar(255) DEFAULT NULL,
  `counter_two` varchar(255) DEFAULT NULL,
  `counter_two_description` varchar(255) DEFAULT NULL,
  `counter_three` varchar(255) DEFAULT NULL,
  `counter_three_description` varchar(255) DEFAULT NULL,
  `counter_four` varchar(255) DEFAULT NULL,
  `counter_four_description` varchar(255) DEFAULT NULL,
  `profile` varchar(255) DEFAULT NULL,
  `contact_number` varchar(255) DEFAULT NULL,
  `contact_address` varchar(255) DEFAULT NULL,
  `whatsapp` varchar(255) DEFAULT NULL,
  `time_hour` varchar(255) DEFAULT NULL,
  `tax` int(11) NOT NULL,
  `dollar` float(10,4) NOT NULL,
  `npr` float(10,4) NOT NULL,
  `inr` float(10,4) NOT NULL,
  `aed` float(10,4) NOT NULL,
  `euro` float(10,4) NOT NULL,
  `pound` float(10,4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `igc_site_settings`
--

INSERT INTO `igc_site_settings` (`id`, `site_name`, `site_slogan`, `site_url`, `feedback_email`, `site_logo`, `skype`, `facebook_link`, `twiter_link`, `youtube_link`, `google_plus_link`, `linked_in`, `instagram`, `location_map`, `contact_details`, `meta_title`, `meta_description`, `meta_keywords`, `home_title`, `home_description`, `service_title_one`, `service_description_one`, `service_title_two`, `service_description_two`, `service_title_three`, `service_description_three`, `service_title_four`, `service_description_four`, `service_title_five`, `service_description_five`, `counter_one`, `counter_one_description`, `counter_two`, `counter_two_description`, `counter_three`, `counter_three_description`, `counter_four`, `counter_four_description`, `profile`, `contact_number`, `contact_address`, `whatsapp`, `time_hour`, `tax`, `dollar`, `npr`, `inr`, `aed`, `euro`, `pound`) VALUES
(2, 'Capital Nepal', 'Capital Nepal', 'https://capitalnepal.com/', 'info@capitalnepal.com', NULL, 'https://skype.com', 'https://www.facebook.com/', 'https://twitter.com/', 'https://www.youtube.com/', 'https://plus.google.com/1', 'https://www.linkedin.com/', 'https://www.instagram.com/', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7066.791089810292!2d85.30946762373296!3d27.67416718122254!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19ccc9454ff9%3A0xf196445c0330168a!2sJawalakhel%2C+Patan+44600!5e0!3m2!1sen!2snp!4v1528345743751\" width=\"100%\" height=\"250\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', '<p>CAPITAL NEPAL PVT. LTD.<br />\r\nKalikasthan, Kathmandu, Nepal<br />\r\nTel: +9779807555929<br />\r\nEmail: info@capitalnepal.com</p>\r\n', 'Capital Nepal', 'Capital Nepal', 'Capital Nepal', '#', '#', '#', '#', '3', '#', '#', '#', NULL, NULL, '#', '#', '#', '#', '#', '#', '#', '#', '#', '#', 'https://capitalnepal.com/', '+9779807555929', 'Kalikasthanl, Kathmand, Nepal', '+9779807555929', '8 AM - 10 PM  <br /> Mon - Sun', 13, 1.0000, 112.2140, 70.6428, 3.6726, 0.8803, 0.7842);

-- --------------------------------------------------------

--
-- Table structure for table `igc_site_users`
--

CREATE TABLE `igc_site_users` (
  `customer_id` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `customer_title` char(5) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `middle_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `contact_no` varchar(255) DEFAULT NULL,
  `passport_no` varchar(255) DEFAULT NULL,
  `customer_type` enum('register','guest') DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `last_login` datetime DEFAULT NULL,
  `activation_code` varchar(400) DEFAULT NULL,
  `active_status` enum('Y','N') DEFAULT NULL,
  `delete_status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `igc_slider`
--

CREATE TABLE `igc_slider` (
  `slider_id` int(11) NOT NULL,
  `slider_title` varchar(255) NOT NULL,
  `slider_caption` varchar(255) DEFAULT NULL,
  `slider_link` varchar(255) DEFAULT NULL,
  `slider_image` varchar(255) CHARACTER SET utf8 NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  `publish_status` enum('1','0') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `igc_slider`
--

INSERT INTO `igc_slider` (`slider_id`, `slider_title`, `slider_caption`, `slider_link`, `slider_image`, `created`, `updated`, `publish_status`) VALUES
(6, 'Organic & Pure On Al Rukh Al Shami', 'Organic & Pure On Al Rukh Al Shami', 'http://www.eshoppingnepal.com', 'cb41f167917ec4b8d870a90c54afef7d165a6578691b4__desktop.jpg', '2018-01-13 08:28:21', '2018-12-20 08:07:56', '1'),
(7, 'Organic & Pure On Al Rukh Al Shami', 'Organic & Pure On Al Rukh Al Shami', 'https://www.facebook.com/eshoppingnep/', '2dae9d2217d0a6f4280b0ffc7a69cf7e349c7f07696ea__Desktop-24.jpg', '2018-01-13 08:28:53', '2018-12-20 08:08:45', '1'),
(8, 'as', 'as', 'https://www.nectardigit.com/', 'b6cda17abb967ed28ec9610137aa45f7slide.jpg', '2018-03-06 08:40:45', '2018-12-20 08:09:39', '1'),
(9, 'Four', 'Four', 'https://www..youtube.com', '96b8ee525c85be84c2536bd86564a5851c84f528c7ea6__EasternWear_Desktop.jpg', '2018-03-06 08:41:16', '2018-12-20 08:09:09', '1');

-- --------------------------------------------------------

--
-- Table structure for table `igc_subscribe_users`
--

CREATE TABLE `igc_subscribe_users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `active_status` enum('1','0') DEFAULT '1',
  `delete_status` enum('1','0') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `igc_subscribe_users`
--

INSERT INTO `igc_subscribe_users` (`id`, `email`, `created`, `updated`, `active_status`, `delete_status`) VALUES
(1, 'prabin2026@gmail.com', '2018-12-21 00:32:24', NULL, '0', '0'),
(2, 'ybalviny7@gmail.com', '2019-02-04 18:49:47', NULL, '0', '0'),
(3, 'paul.tyler.jones@gmail.com', '2019-02-05 17:58:37', NULL, '0', '0'),
(4, 'alexmosspro@gmail.com', '2019-02-06 05:09:16', NULL, '0', '0'),
(5, 'hashiali309@gmail.com', '2019-02-06 17:26:40', NULL, '0', '0'),
(6, 'andrestrinidad11@gmail.com', '2019-02-07 01:29:40', NULL, '0', '0'),
(7, 'dustykinz@gmail.com', '2019-02-07 01:35:10', NULL, '0', '0'),
(8, 'mrturcios@yahoo.com', '2019-02-07 02:54:02', NULL, '0', '0'),
(9, 'broadparkpayments@gmail.com', '2019-02-07 03:40:02', NULL, '0', '0'),
(10, 'mobilemanicure@yahoo.com', '2019-02-07 04:21:45', NULL, '0', '0'),
(11, 'dwerp5956@gmail.com', '2019-02-07 09:22:21', NULL, '0', '0'),
(12, 'gamelol493@gmail.com', '2019-02-07 13:59:24', NULL, '0', '0'),
(13, 'sole@gibertelectric.com', '2019-02-07 15:50:00', NULL, '0', '0'),
(14, 'klt3@sbcglobal.net', '2019-02-07 17:07:30', NULL, '0', '0'),
(15, 'fiona57ph@yahoo.com', '2019-02-07 23:46:14', NULL, '0', '0'),
(16, 'sebastian.wenning@freenet.de', '2019-02-08 01:46:41', NULL, '0', '0'),
(17, 'jrcons1@aol.com', '2019-02-08 01:53:46', NULL, '0', '0'),
(18, 'edmondson.christina@gmail.com', '2019-02-08 10:18:08', NULL, '0', '0'),
(19, 'citizen.charles@gmail.com', '2019-02-08 12:39:24', NULL, '0', '0'),
(20, 'jiannii203@gmail.com', '2019-02-08 13:02:54', NULL, '0', '0'),
(21, 'janetjohnson44@yahoo.com', '2019-02-08 13:33:31', NULL, '0', '0'),
(22, 'bitplane@gmail.com', '2019-02-08 16:07:20', NULL, '0', '0'),
(23, 'team@theccbuddies.com', '2019-02-08 20:27:23', NULL, '0', '0'),
(24, 'rommellagrange@gmail.com', '2019-02-09 00:54:56', NULL, '0', '0'),
(25, 'dankumar@yahoo.com', '2019-02-09 23:48:56', NULL, '0', '0'),
(26, 'a1234jacknetwalker@gmail.com', '2019-02-10 08:15:37', NULL, '0', '0'),
(27, 'brandocarper10@gmail.com', '2019-02-11 11:12:53', NULL, '0', '0'),
(28, 'electro.lemon@gmail.com', '2019-02-11 15:29:59', NULL, '0', '0'),
(29, 'dennytbo@gmail.com', '2019-02-11 23:20:14', NULL, '0', '0'),
(30, 'markvillaruel14@yahoo.com', '2019-02-12 00:16:39', NULL, '0', '0'),
(31, 'emushlitz11@gmail.com', '2019-02-12 04:00:48', NULL, '0', '0'),
(32, 'cmarty5445@yahoo.com', '2019-02-12 08:05:32', NULL, '0', '0'),
(33, 'lekevin1194@gmail.com', '2019-02-12 08:24:03', NULL, '0', '0'),
(34, 'alexlcole@gmail.com', '2019-02-12 08:45:14', NULL, '0', '0'),
(35, 'asqectpvp@gmail.com', '2019-02-12 11:42:33', NULL, '0', '0'),
(36, 'hpdelacerda@gmail.com', '2019-02-12 12:13:39', NULL, '0', '0'),
(37, 'cmorton557@gmail.com', '2019-02-12 14:36:36', NULL, '0', '0'),
(38, 'sreza1954@gmail.com', '2019-02-12 14:48:49', NULL, '0', '0'),
(39, 'jtaylorbarnett@gmail.com', '2019-02-12 16:58:39', NULL, '0', '0'),
(40, 'coryfurst@gmail.com', '2019-02-12 21:01:52', NULL, '0', '0'),
(41, 'staylor045@aol.com', '2019-02-13 09:53:00', NULL, '0', '0'),
(42, 'mrsreels56@yahoo.com', '2019-02-13 14:14:29', NULL, '0', '0'),
(43, 'kenneth.lee@intelsat.com', '2019-02-13 16:02:31', NULL, '0', '0'),
(44, 'plmiro6@gmail.com', '2019-02-13 18:13:31', NULL, '0', '0'),
(45, 'robinfwhiteside@gmail.com', '2019-02-13 22:04:07', NULL, '0', '0'),
(46, 'dylanfireyking007@gmail.com', '2019-02-13 22:04:22', NULL, '0', '0'),
(47, 'chrisfgilsenan@gmail.com', '2019-02-13 23:02:16', NULL, '0', '0'),
(48, 'joan.faubion@gmail.com', '2019-02-14 00:32:43', NULL, '0', '0'),
(49, 'nep_amrit99@yahoo.com', '2019-02-14 03:36:32', NULL, '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `igc_taxonomy_terms`
--

CREATE TABLE `igc_taxonomy_terms` (
  `term_id` int(11) NOT NULL,
  `term_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `igc_team`
--

CREATE TABLE `igc_team` (
  `team_id` int(11) NOT NULL,
  `team_title` varchar(255) DEFAULT NULL,
  `team_caption` varchar(255) DEFAULT NULL,
  `team_description` text,
  `team_image` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `publish_status` enum('1','0') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `igc_team`
--

INSERT INTO `igc_team` (`team_id`, `team_title`, `team_caption`, `team_description`, `team_image`, `created`, `updated`, `publish_status`) VALUES
(10, 'CA Milan Bhandari', 'BCom, ACA', '<p>Milan Bhandari is&nbsp;a qualified Chartered Accountant having an extensive knowledge and experience in the fields of Accounting, Auditing, Taxation and Finance. Milan&rsquo;s strength lies in stress management and he has successfully delivered under the most difficult circumstances and timelines.</p>\n\n<p>He has proved as a valuable resource in leading business houses and CA firms. He is the Founder, Chairman and Managing Partner of Chartered Tax Consultant. He assists clients on various indirect tax impact areas on their business and helps them in a smooth transition and implementation of the same. Apart from this he is experienced in handling complex compliances of large companies and for advisory on Indirect tax related matters in a complex transaction.</p>\n', 'bb95006d6471b4a6a030729c9b757360ginuspro.jpg', '2017-10-20 11:27:19', '2017-11-21 07:02:48', '1'),
(11, 'CA. Amrit Khadka ', 'Bcom, ACA', '<p>Amrit Khadka is a qualified Chartered Accountant having experience in the areas of Finance, Accounts, Auditing and Taxation. He has work experience in India, Nepal and UAE.He is the Founder and Managing Partner of Chartered Tax Consultant. He has an extensive knowledge on Value Added Tax (VAT)/ Central sales Tax(CST), Service Tax and Company law. He is experienced in impact assessment of VAT, implementation of VAT, Advisory role on VAT and Compliances across different industries and geographies.</p>\n', '889919b856f52798ff0ae98e86348009no_photo.jpg', '2017-10-20 11:31:19', '2017-11-21 07:03:57', '1'),
(12, 'Sahil Man Singh Pradhan', 'EMBA, Bcom', '<p>Sahil Man Singh pradhan is an EMBA in Marketing/ Marketing management from Kathmandu University (KU) Nepal.</p>\n', '2fbdeb3000f8dd8c7a1d9eef77872fd6businessman-307732_640.png', '2017-10-20 11:32:37', '2017-11-17 11:26:33', '1');

-- --------------------------------------------------------

--
-- Table structure for table `igc_title_setting`
--

CREATE TABLE `igc_title_setting` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `igc_title_setting`
--

INSERT INTO `igc_title_setting` (`id`, `name`) VALUES
(1, 'Mr.'),
(2, 'Mrs.'),
(3, 'Ms.'),
(4, 'Master');

-- --------------------------------------------------------

--
-- Table structure for table `igc_users`
--

CREATE TABLE `igc_users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `image_name` varchar(300) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `date_created` datetime NOT NULL,
  `updated` datetime DEFAULT NULL,
  `last_login` datetime NOT NULL,
  `status` enum('1','0') DEFAULT NULL,
  `permission` enum('0','1') DEFAULT NULL,
  `delete_status` enum('1','0') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `igc_users`
--

INSERT INTO `igc_users` (`user_id`, `username`, `image_name`, `email`, `password`, `date_created`, `updated`, `last_login`, `status`, `permission`, `delete_status`) VALUES
(5, 'admin', '7b4848a738dcc0cdec27a76906693b3elogo88.png', 'capbizmag@gmail.com', 'ef5b3191dd3356f07ae1c3e76da31df9', '2016-02-01 00:00:00', NULL, '2019-04-16 08:28:30', '1', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `igc_user_logs`
--

CREATE TABLE `igc_user_logs` (
  `log_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `module_name` varchar(255) DEFAULT NULL,
  `module_title` varchar(255) DEFAULT NULL,
  `action_id` int(11) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `ip_address` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `igc_user_logs`
--

INSERT INTO `igc_user_logs` (`log_id`, `user_id`, `module_name`, `module_title`, `action_id`, `date`, `ip_address`) VALUES
(1, 3, 'Slider', 'Slider-ad', 1, '2017-08-19 06:40:26', '::1'),
(2, 3, 'Slider', 'Slider-ads', 2, '2017-08-19 06:40:49', '::1'),
(3, 3, 'Slider', 'Slider-ads', 3, '2017-08-19 06:41:15', '::1'),
(4, 3, 'Slider', 'dffg', 1, '2017-08-19 06:41:27', '::1'),
(5, 3, 'Slider', 'dffg', 3, '2017-08-19 06:41:58', '::1'),
(6, 3, 'Slider', 'dfsf', 1, '2017-08-19 06:42:30', '::1'),
(7, 3, 'Slider', 'slider one', 1, '2017-08-19 06:46:11', '::1'),
(8, 3, 'Slider', 'Slider 2', 1, '2017-08-19 06:46:21', '::1'),
(9, 3, 'Content', 'Discover', 2, '2017-08-19 09:27:00', '::1'),
(10, 3, 'Content', 'Quick Links', 2, '2017-08-19 09:29:48', '::1'),
(11, 3, 'Subscribers', 'Subscribers Id (1)', 2, '2017-08-19 09:41:18', '::1'),
(12, 3, 'Subscribers', 'Subscribers Id (1)', 2, '2017-08-19 09:41:21', '::1'),
(13, 3, 'Content', 'Message from Executive Chairman', 2, '2017-08-19 10:12:34', '::1'),
(14, 3, 'Content', 'Corporate Social Responsibility', 2, '2017-08-19 10:14:17', '::1'),
(15, 3, 'Email Settings', 'Mail Server', 2, '2017-08-19 21:44:51', '::1'),
(16, 3, 'Email Settings', 'Admin Email', 2, '2017-08-19 21:45:15', '::1'),
(17, 3, 'Slider', 'Collection', 2, '2017-08-22 10:41:55', '::1'),
(18, 3, 'Slider', 'Desire', 2, '2017-08-22 10:42:07', '::1'),
(19, 3, 'Package', 'Motors', 2, '2017-08-22 16:36:03', '::1'),
(20, 3, 'Package', 'Motors', 2, '2017-08-22 16:40:46', '::1'),
(21, 3, 'Package', 'Three Phase Electric Motors - Cast Iron Frame', 2, '2017-08-22 16:41:37', '::1'),
(22, 3, 'Package', 'Three Phase Electric Brake Motor', 2, '2017-08-22 16:43:17', '::1'),
(23, 3, 'Package', 'Three Phase Electric Motors - Aluminum Frame', 2, '2017-08-22 16:44:11', '::1'),
(24, 3, 'Package', 'Universal Motors Inverters', 2, '2017-08-22 16:46:22', '::1'),
(25, 3, 'Package', 'BREAKFAST AT EVEREST (A)', 2, '2017-08-22 16:47:57', '::1'),
(26, 3, 'Package', 'Three Phase Electric Motors - Cast Iron Frames', 2, '2017-08-22 16:49:12', '::1'),
(27, 3, 'Package', 'Three Phase Electric Motors - Cast Iron for Frames  ', 2, '2017-08-22 16:50:07', '::1'),
(28, 3, 'Package', 'Three Phase Electrics Motors - Cast Iron Frame', 2, '2017-08-22 16:51:08', '::1'),
(29, 3, 'Package', 'Three Phases Electric Motors - Cast Iron Frame', 2, '2017-08-22 16:51:44', '::1'),
(30, 3, 'Package', 'Three Phase Electric Motors - Cast Iron Framess', 2, '2017-08-22 16:53:02', '::1'),
(31, 3, 'Package', 'Three Phase Electric Motors - Cast Iron for Frames  ', 2, '2017-08-22 16:53:43', '::1'),
(32, 3, 'Package', 'Three Phase Electrics Motors - Cast Iron Frame', 2, '2017-08-22 16:53:53', '::1'),
(33, 3, 'Package', 'Three Phases Electric Motors - Cast Iron Frame', 2, '2017-08-22 16:54:02', '::1'),
(34, 3, 'Package', 'Three Phase Electric Motors - Cast Iron Framess', 2, '2017-08-22 16:54:12', '::1'),
(35, 3, 'Package', 'Threess Phase Electric Motors - Cast Iron Frame', 2, '2017-08-22 16:55:27', '::1'),
(36, 3, 'Package', 'Three Phase Electricaa Motors - Cast Iron Frame', 2, '2017-08-22 16:55:56', '::1'),
(37, 3, 'Package', 'Three Phase Electricaa Motors - Cast Iron Frame', 2, '2017-08-22 16:56:18', '::1'),
(38, 3, 'Package', 'Three Phase Electric Motors - Cast Iron Framesss', 2, '2017-08-22 16:57:04', '::1'),
(39, 3, 'Package', 'Three Phase Electric Motors - Cast Iron Framesss', 2, '2017-08-22 16:57:20', '::1'),
(40, 3, 'Package', 'Three Phase Electric Motors - Cast Iron Framsess', 2, '2017-08-22 16:58:05', '::1'),
(41, 3, 'Package', 'Three Phase Electric Motors - Cast Iron Framsess', 2, '2017-08-22 17:01:49', '::1'),
(42, 3, 'Content', 'COMPANY OVERVIEW', 2, '2017-08-22 18:02:33', '::1'),
(43, 3, 'Content', 'OUR SERVICES', 2, '2017-08-22 18:02:45', '::1'),
(44, 3, 'Package', 'Three Phase Electric Motors - Cast Iron for Frames  ', 2, '2017-08-23 08:54:17', '::1'),
(45, 3, 'Package', 'Three Phase Electric Motors - Cast Iron for Frames ', 2, '2017-08-23 09:11:10', '::1'),
(46, 3, 'Package', 'Three Phase Electric Motors - Cast Iron for Frames ', 2, '2017-08-23 09:12:19', '::1'),
(47, 3, 'Package', 'Three Phase Electric Motors - Cast Iron for Frames ', 2, '2017-08-23 09:17:06', '::1'),
(48, 3, 'Package', 'Three Phase Electric Motors - Cast Iron for Frames ', 2, '2017-08-23 09:18:31', '::1'),
(49, 3, 'Package', 'Three Phase Electric Motors - Cast Iron for Frames ', 2, '2017-08-23 09:19:26', '::1'),
(50, 3, 'Package', 'Three Phase Electric Motors - Cast Iron for Frames ', 2, '2017-08-23 09:24:09', '::1'),
(51, 3, 'Package Category', 'Products', 2, '2017-08-23 09:32:02', '::1'),
(52, 3, 'Package', '2', 2, '2017-08-23 10:45:06', '::1'),
(53, 3, 'Package', '2', 2, '2017-08-23 12:27:28', '::1'),
(54, 3, 'Package Category', 'Products', 2, '2017-08-23 12:37:36', '::1'),
(55, 3, 'Package', '2', 2, '2017-08-23 12:39:36', '::1'),
(56, 3, 'Package', '2', 2, '2017-08-23 12:42:25', '::1'),
(57, 3, 'Package', 'PE30 80 M2 2 IE3', 2, '2017-08-23 12:47:08', '::1'),
(58, 3, 'Package', '2', 2, '2017-08-23 12:50:37', '::1'),
(59, 3, 'Package Category', 'Products', 2, '2017-08-23 12:51:15', '::1'),
(60, 3, 'Package', 'Unique trails through Unique Tamang Heritage Country ', 3, '2017-08-23 12:51:40', '::1'),
(61, 3, 'Package', '2', 2, '2017-08-23 12:54:17', '::1'),
(62, 3, 'Package', 'PE30 80 M2 2 IE3', 2, '2017-08-23 12:55:19', '::1'),
(63, 3, 'Package', 'Three Phase Electric Motors - Cast Iron Framesss', 3, '2017-08-23 12:56:42', '::1'),
(64, 3, 'Package', 'Three Phase Electric Motors - Cast Iron Framsess', 3, '2017-08-23 12:56:48', '::1'),
(65, 3, 'Package', 'Luxury Wildlife Tours', 3, '2017-08-23 12:56:50', '::1'),
(66, 3, 'Package', 'Kathmandu Valley Tour in Style', 3, '2017-08-23 12:56:54', '::1'),
(67, 3, 'Package', 'Corporate Retreat In Nepal', 3, '2017-08-23 12:56:58', '::1'),
(68, 3, 'Package', 'Kathmandu Nights', 3, '2017-08-23 12:57:06', '::1'),
(69, 3, 'Package', 'Luxury Tour at the City of Lakes', 3, '2017-08-23 12:57:09', '::1'),
(70, 3, 'Package', '‘Five Pearls’ [Panch Pokhari – 5 lakes – Jugal himal trek] ', 3, '2017-08-23 12:57:11', '::1'),
(71, 3, 'Package', 'Ghale Gaun… A wonderful village trek ', 3, '2017-08-23 12:57:14', '::1'),
(72, 3, 'Package', 'The Siklis Trek…slow and easy', 3, '2017-08-23 12:57:16', '::1'),
(73, 3, 'Package', 'Upper Mustang Overland Tour ', 3, '2017-08-23 12:57:19', '::1'),
(74, 3, 'Package', 'Upper Mustang Buddhist Pilgrimage Tour ', 3, '2017-08-23 12:57:21', '::1'),
(75, 3, 'Package', 'Corporate Retreat in Kathmandu', 3, '2017-08-23 12:57:23', '::1'),
(76, 3, 'Package', 'Three Phase Electric Motors - Cast Iron Frame', 3, '2017-08-23 12:57:25', '::1'),
(77, 3, 'Package', 'Muktinath Heli Tour', 3, '2017-08-23 12:57:28', '::1'),
(78, 3, 'Package', 'Kathmandu- Lhasa –Everest Base Camp Tour Price on Request', 3, '2017-08-23 12:57:30', '::1'),
(79, 3, 'Package', 'Three Phase Electric Motors - Aluminum Frame', 3, '2017-08-23 12:57:32', '::1'),
(80, 3, 'Package', 'Lhasa  Sojourn  Price on Request', 3, '2017-08-23 12:57:34', '::1'),
(81, 3, 'Package', 'Lhasa Delight Tour Price on Request', 3, '2017-08-23 12:57:36', '::1'),
(82, 3, 'Package', ' Tibetan Monasteries Tour Price on Request', 3, '2017-08-23 12:57:38', '::1'),
(83, 3, 'Package', 'Kailash Parikrama – Overland via Lhasa  Price on Request', 3, '2017-08-23 12:57:41', '::1'),
(84, 3, 'Package', 'Newari Wedding ', 3, '2017-08-23 12:57:44', '::1'),
(85, 3, 'Package', 'Kailash & Manasarovar Yatra ', 3, '2017-08-23 12:57:47', '::1'),
(86, 3, 'Package', 'Buddhist Wedding ', 3, '2017-08-23 12:57:50', '::1'),
(87, 3, 'Package', 'Sindhupalchowk Village Tour ', 3, '2017-08-23 12:57:53', '::1'),
(88, 3, 'Package', 'Cultural Village Tour', 3, '2017-08-23 12:57:55', '::1'),
(89, 3, 'Package', 'Nepali Village Tour (Lapsiphedi & Kathmandu) ', 3, '2017-08-23 12:57:57', '::1'),
(90, 3, 'Package', 'Mixed Bag of Adventures ', 3, '2017-08-23 12:57:59', '::1'),
(91, 3, 'Package', 'Nepali Wedding ', 3, '2017-08-23 12:58:02', '::1'),
(92, 3, 'Package', 'Three Phase Electric Motors - Cast Iron Frames', 3, '2017-08-23 12:58:04', '::1'),
(93, 3, 'Package', 'Trishuli River Rafting', 3, '2017-08-23 12:58:05', '::1'),
(94, 3, 'Package', 'Himalayan Thrills - (KTM, Dhulikhel & Pokhara) ', 3, '2017-08-23 12:58:07', '::1'),
(95, 3, 'Package', 'Sun Koshi River Adventure ', 3, '2017-08-23 12:58:09', '::1'),
(96, 3, 'Package', 'Enticing Nepal – Kathmandu, Chitwan & Pokhara', 3, '2017-08-23 12:58:12', '::1'),
(97, 3, 'Package', 'Romantic Honeymoon in Nepal', 3, '2017-08-23 12:58:13', '::1'),
(98, 3, 'Package', 'Fascinating Nepal Honeymoon Tour (Kathmandu & Nagarkot) ', 3, '2017-08-23 12:58:16', '::1'),
(99, 3, 'Package', 'Himalayan Odyssey - Kathmandu, Daman & Pokhara ', 3, '2017-08-23 12:58:17', '::1'),
(100, 3, 'Package', 'Mahadev & Narayan Darshan Yatra', 3, '2017-08-23 12:58:19', '::1'),
(101, 3, 'Package', 'Pashupatinath Darshan: Hindu Pilgrimage Tour', 3, '2017-08-23 12:58:21', '::1'),
(102, 3, 'Package', 'Halesi Mahadev Pilgrimage Tour ', 3, '2017-08-23 12:58:23', '::1'),
(103, 3, 'Package', 'Sacred Pilgrimage: Lumbini-Kathmandu', 3, '2017-08-23 12:58:25', '::1'),
(104, 3, 'Package', 'Scintillating Honeymoon (Kathmandu, Pokhara, Chitwan, Daman)', 3, '2017-08-23 12:58:27', '::1'),
(105, 3, 'Package', 'Om Mani Padme Hu: Buddhist Pilgrimage Tour ', 3, '2017-08-23 12:58:30', '::1'),
(106, 3, 'Package', 'Mystical Padma : Buddhist Pilgrimage Tour ', 3, '2017-08-23 12:58:32', '::1'),
(107, 3, 'Package', 'Sacred Buddhist Parikrama', 3, '2017-08-23 12:58:33', '::1'),
(108, 3, 'Package', 'Green Meadows Golf Tour (KTM-Nagarkot)', 3, '2017-08-23 12:58:35', '::1'),
(109, 3, 'Package', 'Nepal Golf Tour (Kathmandu-Pokhara) ', 3, '2017-08-23 12:58:37', '::1'),
(110, 3, 'Package', 'Kathmandu Golf Tour ', 3, '2017-08-23 12:58:40', '::1'),
(111, 3, 'Package', 'Honey Hunting Tour ', 3, '2017-08-23 12:58:42', '::1'),
(112, 3, 'Package', 'Himalayan Golf Tour ', 3, '2017-08-23 12:58:45', '::1'),
(113, 3, 'Package', 'Weekend at Casino: Players’ Delight ', 3, '2017-08-23 12:58:47', '::1'),
(114, 3, 'Package', 'Lower Mustang Tour (Road Trip)', 3, '2017-08-23 12:58:50', '::1'),
(115, 3, 'Package', 'Classic Buddhist Circuit ', 3, '2017-08-23 12:58:51', '::1'),
(116, 3, 'Package', 'Kathmandu & Nagarkot Tour', 3, '2017-08-23 12:58:53', '::1'),
(117, 3, 'Package', 'Kathmandu & Pokhara Tour', 3, '2017-08-23 12:58:56', '::1'),
(118, 3, 'Package', 'Casino - Beat the Odds ', 3, '2017-08-23 12:58:58', '::1'),
(119, 3, 'Package', 'Kuala Lumpur & Genting Tour', 3, '2017-08-23 12:59:00', '::1'),
(120, 3, 'Package', 'Cultural tour of Kathmandu & Bhutan', 3, '2017-08-23 12:59:04', '::1'),
(121, 3, 'Package', 'Dubai Tour', 3, '2017-08-23 12:59:06', '::1'),
(122, 3, 'Package', 'Bangkok & Pattaya Tour', 3, '2017-08-23 12:59:08', '::1'),
(123, 3, 'Package', 'SIEM REAP DISCOVERY', 3, '2017-08-23 12:59:10', '::1'),
(124, 3, 'Package', 'Kuala Lumpur, Genting & Singapore', 3, '2017-08-23 12:59:12', '::1'),
(125, 3, 'Package', 'Dashain & Tihar Dhamaka Malaysia Package', 3, '2017-08-23 12:59:14', '::1'),
(126, 3, 'Package', 'Cultural Bhutan Tour', 3, '2017-08-23 12:59:16', '::1'),
(127, 3, 'Package', 'Kuala Lumpur and Singapore', 3, '2017-08-23 12:59:18', '::1'),
(128, 3, 'Package', 'Kuala Lumpur, Langkawi & Penang', 3, '2017-08-23 12:59:21', '::1'),
(129, 3, 'Package', 'Essence of Bhutan', 3, '2017-08-23 12:59:23', '::1'),
(130, 3, 'Package', 'Kuala Lumpur and Singapore', 3, '2017-08-23 12:59:25', '::1'),
(131, 3, 'Package', 'Volunteer for School Building Construction & Cultural Exchange', 3, '2017-08-23 12:59:27', '::1'),
(132, 3, 'Package', 'Kuala Lumpur Tour', 3, '2017-08-23 12:59:29', '::1'),
(133, 3, 'Package', 'Kuala Lumpur & Genting Tour with Sunway Lagoon ', 3, '2017-08-23 12:59:31', '::1'),
(134, 3, 'Package', 'Volunteer for School Building Construction', 3, '2017-08-23 12:59:33', '::1'),
(135, 3, 'Package', 'Essence of Kathmandu & Bhutan Tour', 3, '2017-08-23 12:59:35', '::1'),
(136, 3, 'Package', 'Volunteer for School Building Construction & Cultural Exchange', 3, '2017-08-23 12:59:37', '::1'),
(137, 3, 'Package', '2', 2, '2017-08-23 13:04:24', '::1'),
(138, 3, 'Package', '2', 2, '2017-08-23 13:05:32', '::1'),
(139, 3, 'Package', '2', 2, '2017-08-23 13:05:52', '::1'),
(140, 3, 'Package', '2', 2, '2017-08-23 13:07:46', '::1'),
(141, 3, 'Package', '2', 2, '2017-08-23 13:12:41', '::1'),
(142, 3, 'Package', '2', 2, '2017-08-23 13:12:57', '::1'),
(143, 3, 'Package', '2', 2, '2017-08-23 13:13:12', '::1'),
(144, 3, 'Package', '2', 2, '2017-08-23 13:13:15', '::1'),
(145, 3, 'Package', '2', 2, '2017-08-23 13:13:18', '::1'),
(146, 3, 'Package', '2', 2, '2017-08-23 13:13:22', '::1'),
(147, 3, 'Package', 'PE30 80 M2 2 IE3', 2, '2017-08-23 13:13:26', '::1'),
(148, 3, 'Content', 'About Us', 2, '2017-08-23 13:17:50', '::1'),
(149, 3, 'Content', 'Services', 2, '2017-08-23 13:18:45', '::1'),
(150, 3, 'Content', 'Contact', 1, '2017-08-23 13:20:51', '::1'),
(151, 3, 'Content', 'Contact', 2, '2017-08-23 13:22:19', '::1'),
(152, 3, 'Content', 'Contact', 2, '2017-08-23 13:39:53', '::1'),
(153, 3, 'Package Category', 'THREE PHASE ELECTRIC MOTORS - ALUMINUM FRAME', 2, '2017-08-23 13:47:35', '::1'),
(154, 3, 'Package Category', 'THREE PHASE ELECTRIC MOTORS - CAST IRON FRAME', 2, '2017-08-23 13:48:54', '::1'),
(155, 3, 'Package Category', 'SINGLE PHASE ELECTRIC MOTORS', 2, '2017-08-23 13:49:18', '::1'),
(156, 3, 'Package Category', 'THREE PHASE ELECTRIC BRAKE MOTOR', 2, '2017-08-23 13:49:48', '::1'),
(157, 3, 'Package Category', 'ATEX MOTORS', 2, '2017-08-23 13:50:10', '::1'),
(158, 3, 'Package Category', 'UNIVERSAL MOTORS INVERTERS', 2, '2017-08-23 13:50:31', '::1'),
(159, 3, 'Package Category', 'INVERTERS', 2, '2017-08-23 13:50:55', '::1'),
(160, 3, 'Package Category', 'CONTROL PANEL', 2, '2017-08-23 13:51:11', '::1'),
(161, 3, 'Package Category', 'CONTROL PANEL', 2, '2017-08-23 13:51:28', '::1'),
(162, 3, 'Package Category', 'RIGHT ANGLE WORM GEAR', 2, '2017-08-23 13:53:07', '::1'),
(163, 3, 'Package Category', 'SQUARE WORM GEAR', 2, '2017-08-23 13:53:31', '::1'),
(164, 3, 'Package Category', 'COAXIAL ALUMINIUM GEAR BOX', 2, '2017-08-23 13:53:59', '::1'),
(165, 3, 'Package Category', 'COAXIAL CAST IRON GEAR BOX', 2, '2017-08-23 13:54:26', '::1'),
(166, 3, 'Package Category', 'HELICAL BEVEL GEAR BOX', 2, '2017-08-23 13:54:53', '::1'),
(167, 3, 'Package Category', 'SHAFT MOUNTED GEAR BOX', 2, '2017-08-23 13:55:37', '::1'),
(168, 3, 'Package Category', 'THREE PHASE ELECTRIC MOTORS ', 2, '2017-08-23 13:56:06', '::1'),
(169, 3, 'Package Category', 'THREE PHASE ELECTRIC MOTORS', 2, '2017-08-23 13:56:14', '::1'),
(170, 3, 'Package Category', 'Products', 2, '2017-08-23 13:57:18', '::1'),
(171, 3, 'Package Category', 'Products', 2, '2017-08-23 13:57:27', '::1'),
(172, 3, 'Package Category', 'Pilgrimage Circuits', 3, '2017-08-23 13:59:02', '::1'),
(173, 3, 'Package Category', 'INVERTERS', 3, '2017-08-23 13:59:06', '::1'),
(174, 3, 'Package Category', 'Dhaulagiri Trekking', 3, '2017-08-23 13:59:09', '::1'),
(175, 3, 'Package Category', 'Langtang Trekking', 3, '2017-08-23 13:59:17', '::1'),
(176, 3, 'Package Category', 'Karnali Trekking', 3, '2017-08-23 13:59:21', '::1'),
(177, 3, 'Package Category', 'Annapurna Trekking', 3, '2017-08-23 13:59:24', '::1'),
(178, 3, 'Package Category', 'Everest Trekking', 3, '2017-08-23 13:59:28', '::1'),
(179, 3, 'Package Category', 'Manaslu Trekking', 3, '2017-08-23 13:59:31', '::1'),
(180, 3, 'Package Category', 'Mustang Trekking', 3, '2017-08-23 13:59:34', '::1'),
(181, 3, 'Package Category', 'Dolpo Trekking', 3, '2017-08-23 13:59:37', '::1'),
(182, 3, 'Package Category', 'Kanchenjunga Trekking', 3, '2017-08-23 13:59:40', '::1'),
(183, 3, 'Package Category', 'Volunteering in Nepal ', 3, '2017-08-23 13:59:45', '::1'),
(184, 3, 'Package Category', 'Malaysia Tour ', 3, '2017-08-23 13:59:48', '::1'),
(185, 3, 'Package Category', 'Malaysia & Singapore Tour', 3, '2017-08-23 13:59:51', '::1'),
(186, 3, 'Package Category', 'Thailand Tour ', 3, '2017-08-23 13:59:54', '::1'),
(187, 3, 'Package Category', 'Dubai Tour', 3, '2017-08-23 13:59:57', '::1'),
(188, 3, 'Package Category', 'Vietnam Tour ', 3, '2017-08-23 14:00:00', '::1'),
(189, 3, 'Package Category', 'Cambodia Tour', 3, '2017-08-23 14:00:03', '::1'),
(190, 3, 'Package Category', 'Holidays in Bhutan ', 3, '2017-08-23 14:00:06', '::1'),
(191, 3, 'Package Category', 'Day Tours and Activities', 3, '2017-08-23 14:00:16', '::1'),
(192, 3, 'Package Category', 'Holidays in Tibet', 3, '2017-08-23 14:00:24', '::1'),
(193, 3, 'Package Category', 'SQUARE WORM GEAR', 3, '2017-08-23 14:00:31', '::1'),
(194, 3, 'Package Category', 'Valid for Indian Nationalities only', 3, '2017-08-23 14:00:38', '::1'),
(195, 3, 'Package Category', 'Holidays in India ', 3, '2017-08-23 14:00:45', '::1'),
(196, 3, 'Package Category', 'Hindu Circuits', 3, '2017-08-23 14:00:51', '::1'),
(197, 3, 'Package Category', 'RIGHT ANGLE WORM GEAR', 3, '2017-08-23 14:00:56', '::1'),
(198, 3, 'Package Category', 'Buddhist Circuits', 3, '2017-08-23 14:01:01', '::1'),
(199, 3, 'Package Category', 'Wedding: Get Married the Nepali Way', 3, '2017-08-23 14:01:10', '::1'),
(200, 3, 'Package Category', 'Get Married the Nepali Way', 3, '2017-08-23 14:01:22', '::1'),
(201, 3, 'Package Category', 'THREE PHASE ELECTRIC MOTORS ', 2, '2017-08-23 14:02:12', '::1'),
(202, 3, 'Package Category', 'THREE PHASE ELECTRIC BRAKE MOTOR', 2, '2017-08-23 14:02:34', '::1'),
(203, 3, 'Package Category', 'CONTROL PANEL', 2, '2017-08-23 14:02:44', '::1'),
(204, 3, 'Package Category', 'nn', 1, '2017-08-23 14:04:09', '::1'),
(205, 3, 'Package Category', 'nn', 3, '2017-08-23 14:05:02', '::1'),
(206, 3, 'Package Category', 'THREE PHASE ELECTRIC MOTORS ', 2, '2017-08-23 14:05:28', '::1'),
(207, 3, 'Package', '2', 2, '2017-08-23 14:06:47', '::1'),
(208, 3, 'Package Category', 'THREE PHASE ELECTRIC MOTORS ', 2, '2017-08-23 14:13:28', '::1'),
(209, 3, 'Package Category', 'Products', 2, '2017-08-23 14:13:36', '::1'),
(210, 3, 'Package Category', 'THREE PHASE ELECTRIC BRAKE MOTOR', 2, '2017-08-23 14:13:44', '::1'),
(211, 3, 'Package Category', 'SINGLE PHASE ELECTRIC MOTORS', 2, '2017-08-23 14:13:53', '::1'),
(212, 3, 'Package Category', 'CONTROL PANEL', 2, '2017-08-23 14:14:01', '::1'),
(213, 3, 'Package Category', 'ATEX MOTORS', 2, '2017-08-23 14:14:10', '::1'),
(214, 3, 'Package Category', 'SHAFT MOUNTED GEAR BOX', 2, '2017-08-23 14:14:20', '::1'),
(215, 3, 'Package Category', 'THREE PHASE ELECTRIC MOTORS', 2, '2017-08-23 14:14:30', '::1'),
(216, 3, 'Package Category', 'UNIVERSAL MOTORS INVERTERS', 2, '2017-08-23 14:14:40', '::1'),
(217, 3, 'Package Category', 'COAXIAL ALUMINIUM GEAR BOX', 2, '2017-08-23 14:14:48', '::1'),
(218, 3, 'Package Category', 'HELICAL BEVEL GEAR BOX', 2, '2017-08-23 14:15:01', '::1'),
(219, 3, 'Package Category', 'COAXIAL CAST IRON GEAR BOX', 2, '2017-08-23 14:15:12', '::1'),
(220, 3, 'Package', '2', 2, '2017-08-23 14:20:48', '::1'),
(221, 3, 'Package Category', 'COAXIAL CAST IRON GEAR BOX', 2, '2017-08-23 14:38:10', '::1'),
(222, 3, 'Package', '2', 2, '2017-08-23 16:48:13', '::1'),
(223, 3, 'Package', '2', 2, '2017-08-23 16:52:18', '::1'),
(224, 3, 'Package', '2', 2, '2017-08-23 17:02:33', '::1'),
(225, 3, 'Package', '2', 2, '2017-08-23 17:04:27', '::1'),
(226, 3, 'Package', '2', 2, '2017-08-23 17:05:12', '::1'),
(227, 3, 'Package', '2', 2, '2017-08-23 17:06:18', '::1'),
(228, 3, 'Package', '2', 2, '2017-08-23 17:08:49', '::1'),
(229, 3, 'Package', '2', 2, '2017-08-23 17:09:29', '::1'),
(230, 3, 'Package', '2', 2, '2017-08-23 17:09:50', '::1'),
(231, 3, 'Package', '2', 2, '2017-08-23 17:10:44', '::1'),
(232, 3, 'Package', '2', 2, '2017-08-23 17:11:40', '::1'),
(233, 3, 'Package', '2', 2, '2017-08-23 17:12:21', '::1'),
(234, 3, 'Package', '2', 2, '2017-08-23 17:12:41', '::1'),
(235, 3, 'Package', '2', 2, '2017-08-23 17:13:03', '::1'),
(236, 3, 'Package', '2', 2, '2017-08-23 17:13:29', '::1'),
(237, 3, 'Package', '2', 2, '2017-08-23 17:14:12', '::1'),
(238, 3, 'Subscribers', 'Subscribers Id (1)', 3, '2017-08-23 18:11:18', '::1'),
(239, 3, 'Album', 'test12 (e0afd7d95fb431e6cdc5a35e2a80072674_1_dest.png)', 1, '2017-08-23 18:12:24', '::1'),
(240, 3, 'Album', 'Al Mawadah IT', 1, '2017-08-23 21:32:02', '::1'),
(241, 3, 'Album', 'Al Mawadah IT (f418185daf34ef61913e33895a0f899626_1.png)', 1, '2017-08-23 21:34:36', '::1'),
(242, 3, 'Album', 'Al Mawadah IT', 2, '2017-08-23 21:34:55', '::1'),
(243, 3, 'Album', 'test12 (22c1acb3539e1aeba278f7885ddb8d35package1.jpg)', 3, '2017-08-23 22:12:08', '::1'),
(244, 3, 'Album', 'test12 (22c1acb3539e1aeba278f7885ddb8d35package2.jpg)', 3, '2017-08-23 22:12:11', '::1'),
(245, 3, 'Album', 'test12 (22c1acb3539e1aeba278f7885ddb8d35package3.jpg)', 3, '2017-08-23 22:12:14', '::1'),
(246, 3, 'Album', 'test12 (22c1acb3539e1aeba278f7885ddb8d35package4.jpg)', 3, '2017-08-23 22:12:15', '::1'),
(247, 3, 'Album', 'test12 (54229abfcfa5649e7003b83dd4755294b3.PNG)', 1, '2017-08-23 22:13:19', '::1'),
(248, 3, 'Album', 'test12 (54229abfcfa5649e7003b83dd4755294b5.PNG)', 1, '2017-08-23 22:13:19', '::1'),
(249, 3, 'Album', 'test12 (54229abfcfa5649e7003b83dd4755294b4.PNG)', 1, '2017-08-23 22:13:19', '::1'),
(250, 3, 'Album', 'test12 (54229abfcfa5649e7003b83dd4755294b5.PNG)', 1, '2017-08-23 22:13:19', '::1'),
(251, 3, 'Album', 'test12 (54229abfcfa5649e7003b83dd4755294b34.PNG)', 1, '2017-08-23 22:13:19', '::1'),
(252, 3, 'Album', 'test12 (54229abfcfa5649e7003b83dd4755294b35.PNG)', 1, '2017-08-23 22:13:19', '::1'),
(253, 3, 'Album', 'test12', 2, '2017-08-23 22:13:28', '::1'),
(254, 3, 'Album', 'PE30 - II POLES 3000 RPM', 2, '2017-08-23 22:18:34', '::1'),
(255, 3, 'Album', 'PE30 - II POLES 3000 RPM (54229abfcfa5649e7003b83dd4755294b3.PNG)', 3, '2017-08-23 22:18:43', '::1'),
(256, 3, 'Album', 'PE30 - II POLES 3000 RPM (54229abfcfa5649e7003b83dd4755294b5.PNG)', 3, '2017-08-23 22:18:45', '::1'),
(257, 3, 'Album', 'PE30 - II POLES 3000 RPM (54229abfcfa5649e7003b83dd4755294b4.PNG)', 3, '2017-08-23 22:18:46', '::1'),
(258, 3, 'Album', 'PE30 - II POLES 3000 RPM (54229abfcfa5649e7003b83dd4755294b5.PNG)', 3, '2017-08-23 22:18:47', '::1'),
(259, 3, 'Album', 'PE30 - II POLES 3000 RPM (dc8913dbc5afc5fe40f10ac6aabf68541.jpg)', 1, '2017-08-23 22:19:54', '::1'),
(260, 3, 'Album', 'PE30 - II POLES 3000 RPM (dc8913dbc5afc5fe40f10ac6aabf68543.jpg)', 1, '2017-08-23 22:19:54', '::1'),
(261, 3, 'Album', 'PE30 - II POLES 3000 RPM (dc8913dbc5afc5fe40f10ac6aabf68544.jpg)', 1, '2017-08-23 22:19:54', '::1'),
(262, 3, 'Album', 'PE30 - II POLES 3000 RPM', 2, '2017-08-23 22:20:04', '::1'),
(263, 3, 'Album', 'PE30 - II POLES 3000 RPM (dc8913dbc5afc5fe40f10ac6aabf68541.jpg)', 3, '2017-08-23 22:20:41', '::1'),
(264, 3, 'Album', 'PE30 - II POLES 3000 RPM (dc8913dbc5afc5fe40f10ac6aabf68543.jpg)', 3, '2017-08-23 22:20:42', '::1'),
(265, 3, 'Album', 'PE30 - II POLES 3000 RPM (dc8913dbc5afc5fe40f10ac6aabf68544.jpg)', 3, '2017-08-23 22:20:43', '::1'),
(266, 3, 'Album', 'PE30 - II POLES 3000 RPM', 2, '2017-08-23 22:20:45', '::1'),
(267, 3, 'Album', 'PE30 - II POLES 3000 RPM (8d917ee2013f097c962fa85297f0ffeab3.PNG)', 1, '2017-08-23 22:21:01', '::1'),
(268, 3, 'Album', 'PE30 - II POLES 3000 RPM', 2, '2017-08-23 22:21:09', '::1'),
(269, 3, 'Package', '2', 2, '2017-08-23 22:30:02', '::1'),
(270, 3, 'Package', '2', 2, '2017-08-23 22:32:44', '::1'),
(271, 3, 'Package', '2', 2, '2017-08-23 22:34:18', '::1'),
(272, 3, 'Package', '2', 2, '2017-08-23 22:36:00', '::1'),
(273, 3, 'Package', '2', 2, '2017-08-23 22:36:34', '::1'),
(274, 3, 'Package', '2', 2, '2017-08-23 22:37:03', '::1'),
(275, 3, 'Package', '2', 2, '2017-08-23 22:37:34', '::1'),
(276, 3, 'Package', '2', 2, '2017-08-23 22:38:02', '::1'),
(277, 3, 'Package', '2', 2, '2017-08-23 22:38:31', '::1'),
(278, 3, 'Package', '2', 2, '2017-08-23 22:40:18', '::1'),
(279, 3, 'Package', '2', 2, '2017-08-23 22:41:03', '::1'),
(280, 3, 'Package', '2', 2, '2017-08-23 22:41:47', '::1'),
(281, 3, 'Package', '2', 2, '2017-08-23 22:42:26', '::1'),
(282, 3, 'Package', '2', 2, '2017-08-23 22:43:02', '::1'),
(283, 3, 'Package', '2', 2, '2017-08-23 22:43:45', '::1'),
(284, 3, 'Package', '2', 2, '2017-08-23 22:46:45', '::1'),
(285, 3, 'Package', '2', 2, '2017-08-23 22:47:56', '::1'),
(286, 3, 'Package', '2', 2, '2017-08-23 22:48:43', '::1'),
(287, 3, 'Package', '2', 2, '2017-08-23 22:49:26', '::1'),
(288, 3, 'Package', '2', 2, '2017-08-23 22:50:03', '::1'),
(289, 3, 'Package', '2', 2, '2017-08-23 22:50:41', '::1'),
(290, 3, 'Package', '2', 2, '2017-08-23 22:51:13', '::1'),
(291, 3, 'Package', '2', 2, '2017-08-24 07:00:26', '::1'),
(292, 3, 'Package', '2', 2, '2017-08-24 07:01:06', '::1'),
(293, 3, 'Package', '2', 2, '2017-08-24 08:23:45', '::1'),
(294, 3, 'Package', '2', 2, '2017-08-24 08:27:41', '::1'),
(295, 3, 'Package', '2', 2, '2017-08-24 08:29:25', '::1'),
(296, 3, 'Album', 'sdafs', 1, '2017-08-24 08:37:06', '::1'),
(297, 3, 'Album', 'sdafs (b27a5a543f55bda3adeda94a76790bdb1.jpg)', 1, '2017-08-24 08:37:50', '::1'),
(298, 3, 'Album', 'sdafs (b27a5a543f55bda3adeda94a76790bdb2.jpg)', 1, '2017-08-24 08:37:50', '::1'),
(299, 3, 'Album', 'sdafs (b27a5a543f55bda3adeda94a76790bdb3.jpg)', 1, '2017-08-24 08:37:51', '::1'),
(300, 3, 'Album', 'sdafs (b27a5a543f55bda3adeda94a76790bdb3.jpg)', 1, '2017-08-24 08:37:51', '::1'),
(301, 3, 'Album', 'sdafs (b27a5a543f55bda3adeda94a76790bdb4.jpg)', 1, '2017-08-24 08:37:51', '::1'),
(302, 3, 'Album', 'sdafs (b27a5a543f55bda3adeda94a76790bdb1.jpg)', 1, '2017-08-24 08:37:51', '::1'),
(303, 3, 'Album', 'sdafs', 2, '2017-08-24 08:37:58', '::1'),
(304, 3, 'Album', 'sdafs (b27a5a543f55bda3adeda94a76790bdb1.jpg)', 3, '2017-08-24 08:39:03', '::1'),
(305, 3, 'Album', 'sdafs (b27a5a543f55bda3adeda94a76790bdb2.jpg)', 3, '2017-08-24 08:39:03', '::1'),
(306, 3, 'Album', 'sdafs (b27a5a543f55bda3adeda94a76790bdb3.jpg)', 3, '2017-08-24 08:39:04', '::1'),
(307, 3, 'Album', 'sdafs', 2, '2017-08-24 08:39:07', '::1'),
(308, 3, 'Album', 'sdafs (b27a5a543f55bda3adeda94a76790bdb3.jpg)', 3, '2017-08-24 08:39:22', '::1'),
(309, 3, 'Album', 'sdafs (b27a5a543f55bda3adeda94a76790bdb1.jpg)', 3, '2017-08-24 08:39:24', '::1'),
(310, 3, 'Album', 'sdafs', 2, '2017-08-24 08:39:27', '::1'),
(311, 3, 'Package', '2', 2, '2017-08-24 08:44:08', '::1'),
(312, 3, 'Package', '2', 2, '2017-08-24 08:45:34', '::1'),
(313, 3, 'Package', '2', 2, '2017-08-24 08:47:52', '::1'),
(314, 3, 'Package', '2', 2, '2017-08-24 08:50:25', '::1'),
(315, 3, 'Package', '2', 2, '2017-08-24 08:56:27', '::1'),
(316, 3, 'Package', '2', 2, '2017-08-24 08:58:59', '::1'),
(317, 3, 'Package', '2', 2, '2017-08-24 09:03:33', '::1'),
(318, 3, 'Package', '2', 2, '2017-08-24 09:07:01', '::1'),
(319, 3, 'Package', '2', 2, '2017-08-24 09:07:47', '::1'),
(320, 3, 'Package', '2', 2, '2017-08-24 09:09:13', '::1'),
(321, 3, 'Package', '2', 2, '2017-08-24 09:11:41', '::1'),
(322, 3, 'Package', '2', 2, '2017-08-24 09:12:25', '::1'),
(323, 3, 'Package', '2', 2, '2017-08-24 09:13:20', '::1'),
(324, 3, 'Package', '2', 2, '2017-08-24 09:14:10', '::1'),
(325, 3, 'Package', '2', 2, '2017-08-24 09:14:29', '::1'),
(326, 3, 'Package', '2', 2, '2017-08-24 09:14:51', '::1'),
(327, 3, 'Package', '2', 2, '2017-08-24 09:18:34', '::1'),
(328, 3, 'Package', '2', 2, '2017-08-24 09:29:16', '::1'),
(329, 3, 'Package', '2', 2, '2017-08-24 09:31:19', '::1'),
(330, 3, 'Package', '2', 2, '2017-08-24 09:33:20', '::1'),
(331, 3, 'Package', '2', 2, '2017-08-24 10:43:53', '::1'),
(332, 3, 'Package', '2', 2, '2017-08-24 10:44:01', '::1'),
(333, 3, 'Package', '2', 2, '2017-08-24 10:44:11', '::1'),
(334, 3, 'Package', '2', 2, '2017-08-24 10:44:20', '::1'),
(335, 3, 'Package', '2', 2, '2017-08-24 10:44:30', '::1'),
(336, 3, 'Package', '2', 2, '2017-08-24 10:44:38', '::1'),
(337, 3, 'Package Category', 'Products', 2, '2017-08-24 10:46:09', '::1'),
(338, 3, 'Content', 'About Us', 2, '2017-08-24 10:56:54', '::1'),
(339, 3, 'Content', 'About Us', 2, '2017-08-24 10:57:39', '::1'),
(340, 3, 'Content', 'About Us', 2, '2017-08-24 10:58:04', '::1'),
(341, 3, 'Content', 'About Us', 2, '2017-08-24 11:10:51', '::1'),
(342, 3, 'Content', 'Documents', 1, '2017-08-24 11:13:25', '::1'),
(343, 3, 'Content', 'Documents', 2, '2017-08-24 11:22:28', '::1'),
(344, 3, 'Content', 'Documents', 2, '2017-08-24 11:23:36', '::1'),
(345, 3, 'Content', 'Documents', 2, '2017-08-24 11:25:09', '::1'),
(346, 3, 'Content', 'Documents', 2, '2017-08-24 11:25:43', '::1'),
(347, 3, 'Content', 'Documents', 2, '2017-08-24 11:26:21', '::1'),
(348, 3, 'Content', 'Documents', 2, '2017-08-24 11:26:46', '::1'),
(349, 3, 'Content', 'Documents', 2, '2017-08-24 11:27:33', '::1'),
(350, 3, 'Content', 'Documents', 2, '2017-08-24 11:28:00', '::1'),
(351, 3, 'Content', 'Documents', 2, '2017-08-24 11:28:25', '::1'),
(352, 3, 'Content', 'Documents', 2, '2017-08-24 11:28:56', '::1'),
(353, 3, 'Content', 'Documents', 2, '2017-08-24 11:29:27', '::1'),
(354, 3, 'Package Review', 'dfsgdfg', 2, '2017-08-24 13:09:27', '::1'),
(355, 3, 'Package Review', 'fgsdfgfg', 2, '2017-08-24 13:09:33', '::1'),
(356, 3, 'Package Review', 'fasf', 1, '2017-08-24 13:11:39', '::1'),
(357, 3, 'Package Review', 'sdfsdafs', 1, '2017-08-24 13:11:49', '::1'),
(358, 3, 'Package Review', 'sdfsdafs', 3, '2017-08-24 13:31:43', '::1'),
(359, 3, 'Package Review', 'fasf', 3, '2017-08-24 13:31:46', '::1'),
(360, 3, 'Package Review', 'fgsdfgfg', 3, '2017-08-24 13:31:48', '::1'),
(361, 3, 'Package Review', 'dfsgdfg', 3, '2017-08-24 13:31:55', '::1'),
(362, 3, 'Package Review', 'Fantastic Support to us ', 1, '2017-08-24 13:33:28', '::1'),
(363, 3, 'Package Review', 'Awesome Motors Suppliers', 1, '2017-08-24 13:44:29', '::1'),
(364, 3, 'Package Review', 'Test', 1, '2017-08-24 14:09:30', '::1'),
(365, 3, 'Package Review', 'Fantastic Support to us ', 2, '2017-08-24 14:16:34', '::1'),
(366, 3, 'Package Review', 'Awesome Motors Suppliers', 2, '2017-08-24 14:16:41', '::1'),
(367, 3, 'Content', 'About Us', 2, '2017-08-24 14:47:56', '::1'),
(368, 3, 'Content', 'Contact', 2, '2017-08-24 14:48:25', '::1'),
(369, 3, 'Content', 'Services', 2, '2017-08-24 14:48:37', '::1'),
(370, 3, 'Content', 'About Us', 2, '2017-08-24 14:51:03', '::1'),
(371, 3, 'Content', 'About Us', 2, '2017-08-24 14:51:43', '::1'),
(372, 3, 'Content', 'About Us', 2, '2017-08-24 14:58:28', '::1'),
(373, 3, 'Content', 'About Us', 2, '2017-08-24 15:00:08', '::1'),
(374, 3, 'Content', 'Contact', 2, '2017-08-24 15:00:16', '::1'),
(375, 3, 'Content', 'About Us', 2, '2017-08-24 15:02:23', '::1'),
(376, 3, 'Content', 'About Us', 2, '2017-08-24 15:02:52', '::1'),
(377, 3, 'Content', 'About Us', 2, '2017-08-24 15:03:43', '::1'),
(378, 3, 'Content', 'About Us', 2, '2017-08-24 15:04:07', '::1'),
(379, 3, 'Content', 'About Us', 2, '2017-08-24 15:06:16', '::1'),
(380, 3, 'Content', 'About Us', 2, '2017-08-24 15:14:23', '::1'),
(381, 3, 'Content', 'About Us', 2, '2017-08-24 15:20:20', '::1'),
(382, 3, 'Content', 'About Us', 2, '2017-08-24 15:33:19', '::1'),
(383, 3, 'Content', 'About Us', 2, '2017-08-24 15:33:37', '::1'),
(384, 3, 'Content', 'About Us', 2, '2017-08-24 15:35:24', '::1'),
(385, 3, 'Content', 'About Us', 2, '2017-08-24 15:44:33', '::1'),
(386, 3, 'Content', 'About Us', 2, '2017-08-24 15:46:17', '::1'),
(387, 3, 'Content', 'About Us', 2, '2017-08-24 15:46:39', '::1'),
(388, 3, 'Content', 'Services', 2, '2017-08-24 16:06:41', '::1'),
(389, 3, 'Content', 'Contact', 2, '2017-08-24 16:14:47', '::1'),
(390, 3, 'Content', 'Contact', 2, '2017-08-24 16:15:10', '::1'),
(391, 3, 'Content', 'Contact', 2, '2017-08-24 16:52:55', '::1'),
(392, 3, 'Content', 'Contact', 2, '2017-08-24 16:53:07', '::1'),
(393, 3, 'Content', 'Contact', 2, '2017-08-24 16:55:14', '::1'),
(394, 3, 'Content', 'Contact', 2, '2017-08-24 17:00:12', '::1'),
(395, 3, 'Content', 'About Us', 2, '2017-08-24 17:09:55', '::1'),
(396, 3, 'Content', 'About Us', 2, '2017-08-24 17:15:16', '::1'),
(397, 3, 'Content', 'Contact', 2, '2017-08-24 17:15:26', '::1'),
(398, 3, 'Slider', 'Desire', 2, '2017-08-24 18:08:33', '::1'),
(399, 3, 'Slider', 'Collection', 2, '2017-08-24 18:09:51', '::1'),
(400, 3, 'Content', 'About Us', 2, '2017-08-24 21:41:29', '::1'),
(401, 3, 'Content', 'About Us', 2, '2017-08-24 21:46:43', '::1'),
(402, 3, 'Content', 'About Us', 2, '2017-08-24 21:49:55', '::1'),
(403, 3, 'Content', 'Services', 2, '2017-08-24 22:00:38', '::1'),
(404, 3, 'Content', 'Services', 2, '2017-08-24 22:01:09', '::1'),
(405, 3, 'Content', 'Services', 2, '2017-08-24 22:04:52', '::1'),
(406, 3, 'Content', 'Services', 2, '2017-08-24 22:05:14', '::1'),
(407, 3, 'Content', 'Services', 2, '2017-08-24 22:07:43', '::1'),
(408, 3, 'Content', 'Services', 2, '2017-08-24 22:11:00', '::1'),
(409, 3, 'Content', 'Services', 2, '2017-08-24 22:13:52', '::1'),
(410, 3, 'Content', 'Services', 2, '2017-08-24 22:23:50', '::1'),
(411, 3, 'Content', 'Services', 2, '2017-08-24 22:23:50', '::1'),
(412, 3, 'Content', 'Services', 2, '2017-08-24 22:25:08', '::1'),
(413, 3, 'Content', 'Services', 2, '2017-08-24 22:27:56', '::1'),
(414, 3, 'Content', 'Services', 2, '2017-08-24 22:28:13', '::1'),
(415, 3, 'Content', 'Services', 2, '2017-08-24 22:29:21', '::1'),
(416, 3, 'Content', 'Services', 2, '2017-08-24 22:29:40', '::1'),
(417, 3, 'Content', 'Services', 2, '2017-08-24 22:38:20', '::1'),
(418, 3, 'Content', 'Services', 2, '2017-08-24 22:39:51', '::1'),
(419, 3, 'Content', 'Services', 2, '2017-08-24 22:40:14', '::1'),
(420, 3, 'Content', 'Services', 2, '2017-08-24 22:42:20', '::1'),
(421, 3, 'Content', 'Services', 2, '2017-08-24 22:42:42', '::1'),
(422, 3, 'Content', 'Services', 2, '2017-08-24 22:42:55', '::1'),
(423, 3, 'Content', 'Services', 2, '2017-08-24 22:44:15', '::1'),
(424, 3, 'Content', 'Bandipur', 2, '2017-08-25 07:33:19', '::1'),
(425, 3, 'Content', 'Daman', 2, '2017-08-25 07:34:43', '::1'),
(426, 3, 'Content', 'Dhulikhel', 2, '2017-08-25 07:34:51', '::1'),
(427, 3, 'Content', 'Nagarkot', 2, '2017-08-25 07:34:59', '::1'),
(428, 3, 'Content', 'Godavari', 2, '2017-08-25 07:35:34', '::1'),
(429, 3, 'Content', 'Bandipur', 2, '2017-08-25 07:35:47', '::1'),
(430, 3, 'Content', 'Daman', 2, '2017-08-25 07:36:28', '::1'),
(431, 3, 'Content', 'Godavari', 2, '2017-08-25 07:36:42', '::1'),
(432, 3, 'Content', 'Dhulikhel', 2, '2017-08-25 07:37:06', '::1'),
(433, 3, 'Content', 'Nagarkot', 2, '2017-08-25 07:37:17', '::1'),
(434, 3, 'Content', 'Daman', 2, '2017-08-25 07:37:47', '::1'),
(435, 3, 'Content', 'Bandipur', 2, '2017-08-25 07:38:23', '::1'),
(436, 3, 'Package', '2', 2, '2017-08-25 07:30:49', '83.110.76.45'),
(437, 3, 'Package', '2', 2, '2017-08-25 07:36:21', '83.110.76.45'),
(438, 3, 'Package', '2', 2, '2017-08-25 07:41:37', '83.110.76.45'),
(439, 3, 'Package', '2', 2, '2017-08-25 07:55:29', '83.110.76.45'),
(440, 3, 'Package', '2', 2, '2017-08-25 08:03:08', '83.110.76.45'),
(441, 3, 'Package', '2', 3, '2017-08-25 08:03:34', '83.110.76.45'),
(442, 3, 'Package', '2', 2, '2017-08-25 08:07:44', '83.110.76.45'),
(443, 3, 'Package', '2', 2, '2017-08-25 08:11:56', '83.110.76.45'),
(444, 3, 'Package', '2', 2, '2017-08-25 08:16:04', '83.110.76.45'),
(445, 3, 'Content', 'Contact', 2, '2017-08-27 14:35:24', '83.110.76.45'),
(446, 3, 'Package', '2', 2, '2017-08-28 01:23:00', '83.110.76.45'),
(447, 3, 'Package', '2', 2, '2017-08-28 01:25:50', '83.110.76.45'),
(448, 3, 'Package', '2', 2, '2017-08-28 01:27:00', '83.110.76.45'),
(449, 3, 'Package', '2', 2, '2017-08-28 01:27:16', '83.110.76.45'),
(450, 3, 'Package', '2', 2, '2017-08-28 01:27:34', '83.110.76.45'),
(451, 3, 'Slider', 'We Always Provide You', 2, '2017-08-28 01:33:55', '83.110.76.45'),
(452, 3, 'Slider', 'We Provide to Our Clients', 2, '2017-08-28 01:38:02', '83.110.76.45'),
(453, 3, 'Slider', 'We Always Provide You', 2, '2017-08-28 01:39:13', '83.110.76.45'),
(454, 3, 'Content', 'About Gonepal Holiday', 3, '2017-08-30 02:56:48', '83.110.76.45'),
(455, 3, 'Content', 'About MICE in Nepal', 3, '2017-08-30 02:56:57', '83.110.76.45'),
(456, 3, 'Content', 'About Us', 2, '2017-08-30 03:00:06', '83.110.76.45'),
(457, 3, 'Content', 'About Us', 2, '2017-08-30 03:00:49', '83.110.76.45'),
(458, 3, 'Content', 'About Us', 2, '2017-08-30 03:01:18', '83.110.76.45'),
(459, 3, 'Content', 'Nepal Travel Tips', 3, '2017-08-30 03:06:21', '83.110.76.45'),
(460, 3, 'Content', 'E-magazine', 3, '2017-08-30 03:06:28', '83.110.76.45'),
(461, 3, 'Content', 'Everest Region', 3, '2017-08-30 03:06:35', '83.110.76.45'),
(462, 3, 'Content', 'Transportation Arrangement', 3, '2017-08-30 03:06:49', '83.110.76.45'),
(463, 3, 'Content', 'Helicopter Charter Service', 3, '2017-08-30 03:38:47', '83.110.76.45'),
(464, 3, 'Content', 'Transportation Services', 3, '2017-08-30 03:38:56', '83.110.76.45'),
(465, 3, 'Content', 'Hotel Reservation', 3, '2017-08-30 03:39:03', '83.110.76.45'),
(466, 3, 'Content', 'Services', 2, '2017-08-30 03:39:32', '83.110.76.45'),
(467, 3, 'Content', 'Services', 2, '2017-08-30 03:41:56', '83.110.76.45'),
(468, 3, 'Content', 'Message', 2, '2017-08-30 06:29:53', '83.110.76.45'),
(469, 3, 'Package Category', 'THREE PHASE ELECTRIC MOTORS ', 3, '2017-08-30 07:38:07', '83.110.76.45'),
(470, 3, 'Package Category', 'THREE PHASE ELECTRIC BRAKE MOTOR', 3, '2017-08-30 07:38:13', '83.110.76.45'),
(471, 3, 'Package Category', 'Products', 3, '2017-08-30 07:38:18', '83.110.76.45'),
(472, 3, 'Package Category', 'CONTROL PANEL', 3, '2017-08-30 07:38:27', '83.110.76.45'),
(473, 3, 'Package Category', 'COAXIAL ALUMINIUM GEAR BOX', 3, '2017-08-30 07:38:50', '83.110.76.45'),
(474, 3, 'Package Category', 'ATEX MOTORS', 3, '2017-08-30 07:38:58', '83.110.76.45'),
(475, 3, 'Package Category', 'COAXIAL CAST IRON GEAR BOX', 2, '2017-08-30 07:39:20', '83.110.76.45'),
(476, 3, 'Package Category', 'SINGLE PHASE ELECTRIC MOTORS', 2, '2017-08-30 07:40:05', '83.110.76.45'),
(477, 3, 'Package Category', 'SHAFT MOUNTED GEAR BOX', 2, '2017-08-30 07:40:24', '83.110.76.45'),
(478, 3, 'Package Category', 'THREE PHASE ELECTRIC MOTORS', 2, '2017-08-30 07:40:50', '83.110.76.45'),
(479, 3, 'Package Category', 'UNIVERSAL MOTORS INVERTERS', 2, '2017-08-30 07:41:05', '83.110.76.45'),
(480, 3, 'Package Category', 'HELICAL BEVEL GEAR BOX', 2, '2017-08-30 07:41:46', '83.110.76.45'),
(481, 3, 'Package Category', 'COAXIAL CAST IRON GEAR BOX', 2, '2017-08-30 07:45:45', '83.110.76.45'),
(482, 3, 'Package Category', 'SINGLE PHASE ELECTRIC MOTORS', 2, '2017-08-30 07:47:06', '83.110.76.45'),
(483, 3, 'Package Category', 'THREE PHASE ELECTRIC MOTORS', 2, '2017-08-30 07:47:17', '83.110.76.45'),
(484, 3, 'Package Category', 'THREE PHASE ELECTRIC MOTORS', 2, '2017-08-30 07:47:25', '83.110.76.45'),
(485, 3, 'Package Category', 'SHAFT MOUNTED GEAR BOX', 2, '2017-08-30 07:47:31', '83.110.76.45'),
(486, 3, 'Package Category', 'UNIVERSAL MOTORS INVERTERS', 2, '2017-08-30 07:47:39', '83.110.76.45'),
(487, 3, 'Package Category', 'COAXIAL CAST IRON GEAR BOX', 2, '2017-08-30 07:47:45', '83.110.76.45'),
(488, 3, 'Package Category', 'HELICAL BEVEL GEAR BOX', 2, '2017-08-30 07:48:06', '83.110.76.45'),
(489, 3, 'Package', '2', 2, '2017-08-30 10:22:41', '83.110.76.45'),
(490, 3, 'Package', '2', 2, '2017-08-30 10:23:16', '83.110.76.45'),
(491, 3, 'Package', '2', 2, '2017-08-30 10:23:29', '83.110.76.45'),
(492, 3, 'Package', '2', 2, '2017-08-30 10:23:41', '83.110.76.45'),
(493, 3, 'Package', '2', 2, '2017-08-30 10:23:51', '83.110.76.45'),
(494, 3, 'Package', '2', 2, '2017-08-30 11:17:29', '83.110.76.45'),
(495, 3, 'Package', '2', 2, '2017-08-30 11:17:41', '83.110.76.45'),
(496, 3, 'Package', '2', 2, '2017-08-30 11:17:56', '83.110.76.45'),
(497, 3, 'Package', '2', 2, '2017-08-30 11:18:12', '83.110.76.45'),
(498, 3, 'Package', '2', 2, '2017-08-30 11:18:41', '83.110.76.45'),
(499, 3, 'Package', '2', 2, '2017-08-30 11:23:31', '83.110.76.45'),
(500, 3, 'Package', '2', 2, '2017-08-30 11:24:09', '83.110.76.45'),
(501, 3, 'Package', '2', 2, '2017-08-30 11:24:51', '83.110.76.45'),
(502, 3, 'Package', '2', 2, '2017-08-30 11:25:56', '83.110.76.45'),
(503, 3, 'Package', '2', 2, '2017-08-30 11:26:32', '83.110.76.45'),
(504, 3, 'Content', 'About Us', 2, '2017-08-30 16:05:39', '83.110.76.45'),
(505, 3, 'Content', 'Services', 2, '2017-08-30 16:09:22', '83.110.76.45'),
(506, 3, 'Content', 'Services', 2, '2017-08-30 16:19:39', '83.110.76.45'),
(507, 3, 'Package Review', 'Fantastic Support to us ', 2, '2017-08-31 00:00:54', '83.110.76.45'),
(508, 3, 'Package Review', 'Awesome Motors Suppliers', 2, '2017-08-31 00:02:12', '83.110.76.45'),
(509, 3, 'Content', 'Terms & Conditions', 2, '2017-08-31 00:33:58', '83.110.76.45'),
(510, 3, 'Content', 'Terms & Conditions', 2, '2017-08-31 00:34:36', '83.110.76.45'),
(511, 3, 'Content', 'Terms & Conditions', 2, '2017-08-31 00:35:02', '83.110.76.45'),
(512, 3, 'Content', 'Volunteering in Nepal ', 3, '2017-08-31 00:37:17', '83.110.76.45'),
(513, 3, 'Content', 'International Flight Booking', 3, '2017-08-31 00:37:32', '83.110.76.45'),
(514, 3, 'Content', 'Special Tailored tour', 3, '2017-08-31 00:37:42', '83.110.76.45'),
(515, 3, 'Content', 'MICE in Nepal ', 3, '2017-08-31 00:37:50', '83.110.76.45'),
(516, 3, 'Content', 'Photography Arrangement', 3, '2017-08-31 00:37:59', '83.110.76.45'),
(517, 3, 'Content', 'Film Shooting Arrangement', 3, '2017-08-31 00:38:10', '83.110.76.45'),
(518, 3, 'Content', 'Wedding Arrangement', 3, '2017-08-31 00:38:19', '83.110.76.45'),
(519, 3, 'Content', 'Domestic Flight Booking', 3, '2017-08-31 00:38:30', '83.110.76.45'),
(520, 3, 'Email Settings', 'Mail Server', 2, '2017-08-31 00:47:41', '83.110.76.45'),
(521, 3, 'Email Settings', 'Mail Server', 2, '2017-08-31 00:48:40', '83.110.76.45'),
(522, 3, 'Email Settings', 'Admin Email', 2, '2017-08-31 00:51:26', '83.110.76.45'),
(523, 3, 'Content', 'Spouse Programs', 3, '2017-08-31 01:01:04', '83.110.76.45'),
(524, 3, 'Content', 'Spa and Wellness', 3, '2017-08-31 01:01:12', '83.110.76.45'),
(525, 3, 'Content', 'Hotels for MICE', 3, '2017-08-31 01:01:22', '83.110.76.45'),
(526, 3, 'Content', 'UNESCO World Heritage Sites', 3, '2017-08-31 01:01:30', '83.110.76.45'),
(527, 3, 'Content', 'Top Destinations', 3, '2017-08-31 01:01:40', '83.110.76.45'),
(528, 3, 'Content', 'MICE in Nepal', 3, '2017-08-31 01:01:50', '83.110.76.45'),
(529, 3, 'Content', 'Volunteering to Rebuild Nepal', 3, '2017-08-31 01:02:03', '83.110.76.45'),
(530, 3, 'Content', 'Pre Post-Event Tours', 3, '2017-08-31 01:02:35', '83.110.76.45'),
(531, 3, 'Content', 'Events', 3, '2017-08-31 01:02:45', '83.110.76.45'),
(532, 3, 'Content', 'Top Hiking Destinations', 3, '2017-08-31 01:03:04', '83.110.76.45'),
(533, 3, 'Content', 'OUR SERVICES', 3, '2017-08-31 01:04:42', '83.110.76.45'),
(534, 3, 'Content', 'Lumbini', 3, '2017-08-31 01:05:13', '83.110.76.45'),
(535, 3, 'Content', 'Documents', 3, '2017-08-31 01:05:18', '83.110.76.45'),
(536, 3, 'Content', 'Blog', 3, '2017-08-31 01:05:26', '83.110.76.45'),
(537, 3, 'Content', 'Nepal', 3, '2017-08-31 01:07:14', '83.110.76.45'),
(538, 3, 'Content', 'Others', 2, '2017-08-31 01:08:05', '83.110.76.45'),
(539, 3, 'Content', 'Our Services', 1, '2017-08-31 01:09:00', '83.110.76.45'),
(540, 3, 'Content', 'OUR SERVICES', 2, '2017-08-31 01:11:40', '83.110.76.45'),
(541, 3, 'Content', 'Kathmandu ', 3, '2017-08-31 01:12:08', '83.110.76.45'),
(542, 3, 'Content', 'Privacy Policy', 3, '2017-08-31 01:12:55', '83.110.76.45'),
(543, 3, 'Content', 'Pokhara', 3, '2017-08-31 01:13:12', '83.110.76.45'),
(544, 3, 'Content', 'Chitwan', 3, '2017-08-31 01:13:29', '83.110.76.45'),
(545, 3, 'Content', 'FAQs', 3, '2017-08-31 01:13:53', '83.110.76.45'),
(546, 3, 'Content', 'FAQ', 1, '2017-08-31 01:14:12', '83.110.76.45'),
(547, 3, 'Content', 'Terms & Conditions', 3, '2017-08-31 01:14:47', '83.110.76.45'),
(548, 3, 'Content', 'Terms & Conditions', 1, '2017-08-31 01:15:25', '83.110.76.45'),
(549, 3, 'Package Review', 'Fantastic Support to us ', 2, '2017-08-31 01:57:48', '83.110.76.45'),
(550, 3, 'Package Review', 'Awesome Motors Suppliers', 2, '2017-08-31 01:58:30', '83.110.76.45'),
(551, 3, 'Package Review', 'Fantastic Support to us ', 2, '2017-08-31 02:03:52', '83.110.76.45'),
(552, 3, 'Package Review', 'Awesome Motors Suppliers', 2, '2017-08-31 02:04:04', '83.110.76.45'),
(553, 3, 'Package Category', 'UNIVERSAL MOTORS INVERTERS', 3, '2017-09-04 04:15:43', '83.110.77.244'),
(554, 3, 'Package Category', 'HELICAL BEVEL GEAR BOX', 3, '2017-09-04 04:15:49', '83.110.77.244'),
(555, 3, 'Package Category', 'COAXIAL CAST IRON GEAR BOX', 3, '2017-09-04 04:15:55', '83.110.77.244'),
(556, 3, 'Package Category', 'THREE PHASE ELECTRIC MOTOR - ALUMINUM FRAME', 2, '2017-09-04 04:17:05', '83.110.77.244'),
(557, 3, 'Package Category', 'THREE PHASE ELECTRIC MOTORS - CAST IRON BODY', 2, '2017-09-04 04:17:23', '83.110.77.244'),
(558, 3, 'Content', 'Nagarkot', 3, '2017-09-04 04:35:52', '83.110.77.244'),
(559, 3, 'Content', 'Dhulikhel', 3, '2017-09-04 04:36:04', '83.110.77.244'),
(560, 3, 'Content', 'Contact', 3, '2017-09-04 04:36:11', '83.110.77.244'),
(561, 3, 'Content', 'Godavari', 3, '2017-09-04 04:36:17', '83.110.77.244'),
(562, 3, 'Content', 'Daman', 3, '2017-09-04 04:36:25', '83.110.77.244'),
(563, 3, 'Content', 'Corporate Social Responsibility', 3, '2017-09-04 04:36:31', '83.110.77.244'),
(564, 3, 'Content', 'Message', 3, '2017-09-04 04:37:03', '83.110.77.244'),
(565, 3, 'Content', 'Bandipur', 3, '2017-09-04 04:37:11', '83.110.77.244'),
(566, 3, 'Content', 'Others', 3, '2017-09-04 04:37:41', '83.110.77.244'),
(567, 3, 'Content', 'Services', 3, '2017-09-04 04:37:50', '83.110.77.244'),
(568, 3, 'Content', 'General Information', 3, '2017-09-04 04:38:20', '83.110.77.244'),
(569, 3, 'Content', 'OUR SERVICES', 3, '2017-09-04 04:40:57', '83.110.77.244'),
(570, 3, 'Content', 'Services', 1, '2017-09-05 16:42:28', '::1'),
(571, 3, 'Content', 'Contact', 1, '2017-09-05 16:42:48', '::1'),
(572, 3, 'Content', 'About Us', 2, '2017-09-05 18:33:10', '::1'),
(573, 3, 'Slider', 'We Always Provide You', 2, '2017-09-05 20:56:14', '::1'),
(574, 3, 'Slider', 'We Provide to Our Clients', 2, '2017-09-05 20:56:20', '::1'),
(575, 3, 'Slider', 'Cleaning', 1, '2017-09-05 20:57:06', '::1'),
(576, 3, 'Slider', 'Plumbing', 1, '2017-09-05 20:57:25', '::1'),
(577, 3, 'Slider', 'Plumbing', 2, '2017-09-05 20:57:53', '::1'),
(578, 3, 'Slider', 'We Always Provide You', 2, '2017-09-05 20:58:25', '::1'),
(579, 3, 'Slider', 'We Always Provide You', 2, '2017-09-05 20:58:51', '::1'),
(580, 3, 'Slider', 'We Provide to Our Clients', 2, '2017-09-05 20:58:58', '::1'),
(581, 3, 'Slider', 'We Always Provide You', 2, '2017-09-05 20:59:53', '::1'),
(582, 3, 'Slider', 'We Provide to Our Clients', 2, '2017-09-05 21:00:08', '::1'),
(583, 3, 'Slider', 'Plumbing', 2, '2017-09-05 21:00:26', '::1'),
(584, 3, 'Content', 'Services', 2, '2017-09-05 21:20:36', '::1'),
(585, 3, 'Content', 'Services', 2, '2017-09-05 21:38:28', '::1'),
(586, 3, 'Content', 'Services', 2, '2017-09-05 21:54:08', '::1'),
(587, 3, 'Content', 'Portfolio', 1, '2017-09-05 22:24:43', '::1'),
(588, 3, 'Content', 'Testimonials', 1, '2017-09-05 22:26:46', '::1'),
(589, 3, 'Content', 'Our projects', 1, '2017-09-05 22:28:04', '::1'),
(590, 3, 'Clients', 'Abc', 1, '2017-09-06 06:45:30', '::1'),
(591, 3, 'Clients', 'ac', 1, '2017-09-06 06:45:49', '::1'),
(592, 3, 'Clients', 'fsdf', 1, '2017-09-06 06:45:58', '::1'),
(593, 3, 'Clients', 'fsfsdf', 1, '2017-09-06 06:46:06', '::1'),
(594, 3, 'Clients', 'fsdfsd', 1, '2017-09-06 06:46:15', '::1'),
(595, 3, 'Clients', 'sfaf', 1, '2017-09-06 06:46:26', '::1'),
(596, 3, 'Gallery', 'test', 1, '2017-09-06 07:42:43', '::1'),
(597, 3, 'Gallery', 'test', 3, '2017-09-06 07:43:08', '::1'),
(598, 3, 'Gallery', 'test', 1, '2017-09-06 07:43:17', '::1'),
(599, 3, 'Gallery', 'test2', 1, '2017-09-06 07:43:29', '::1'),
(600, 3, 'Gallery', 'gta', 1, '2017-09-06 08:13:01', '::1'),
(601, 3, 'Package Review', 'Microsoft', 2, '2017-09-06 08:36:50', '::1'),
(602, 3, 'Package Review', 'Google', 2, '2017-09-06 08:37:30', '::1'),
(603, 3, 'Package Review', 'Google', 2, '2017-09-06 08:40:22', '::1'),
(604, 3, 'Package Review', 'Microsoft', 2, '2017-09-06 08:40:37', '::1'),
(605, 3, 'Package Review', 'Google', 2, '2017-09-06 08:40:54', '::1'),
(606, 3, 'Portfolio', 'Jamire', 1, '2017-09-06 09:05:18', '::1'),
(607, 3, 'Portfolio', 'Jamire', 2, '2017-09-06 09:05:44', '::1'),
(608, 3, 'Portfolio', 'df', 1, '2017-09-06 09:05:59', '::1'),
(609, 3, 'Portfolio', 'Jamire', 2, '2017-09-06 09:14:15', '::1'),
(610, 3, 'Portfolio', 'df', 2, '2017-09-06 09:14:25', '::1'),
(611, 3, 'Portfolio', 'Jamire', 2, '2017-09-06 09:14:58', '::1'),
(612, 3, 'Portfolio', 'df', 2, '2017-09-06 09:15:06', '::1'),
(613, 3, 'Portfolio', 'Jamire', 2, '2017-09-06 09:15:30', '::1'),
(614, 3, 'Portfolio', 'df', 2, '2017-09-06 09:15:36', '::1'),
(615, 3, 'Services', 'A/C Service', 1, '2017-09-06 09:32:05', '::1'),
(616, 3, 'Services', 'Dusting', 1, '2017-09-06 09:32:45', '::1'),
(617, 3, 'Services', 'Plumbing', 1, '2017-09-06 04:01:47', '83.110.76.45'),
(618, 3, 'Services', 'Tiles', 1, '2017-09-06 04:02:22', '83.110.76.45'),
(619, 3, 'Services', 'Electrician', 1, '2017-09-06 04:03:02', '83.110.76.45'),
(620, 3, 'Services', 'Massion', 1, '2017-09-06 04:03:52', '83.110.76.45'),
(621, 3, 'Services', 'Painting', 1, '2017-09-06 04:04:08', '83.110.76.45'),
(622, 3, 'Services', 'Maintenance', 1, '2017-09-06 04:05:10', '83.110.76.45'),
(623, 3, 'Services', 'Electrician', 2, '2017-09-06 04:05:26', '83.110.76.45'),
(624, 3, 'Content', 'About Us', 2, '2017-09-17 08:28:57', '83.110.138.123'),
(625, 3, 'Content', 'About Us', 2, '2017-09-17 08:37:28', '83.110.138.123'),
(626, 3, 'Content', 'About Us', 2, '2017-09-17 08:40:11', '83.110.138.123'),
(627, 3, 'Content', 'Services', 2, '2017-09-17 08:46:07', '83.110.138.123'),
(628, 3, 'Content', 'Services', 2, '2017-09-17 08:59:39', '83.110.138.123'),
(629, 3, 'Portfolio', 'Class Partition', 2, '2017-09-17 09:03:31', '83.110.138.123'),
(630, 3, 'Portfolio', 'Deara Partition', 2, '2017-09-17 09:04:01', '83.110.138.123'),
(631, 3, 'Portfolio', 'Design Artwork', 1, '2017-09-17 09:04:38', '83.110.138.123'),
(632, 3, 'Portfolio', 'Office', 1, '2017-09-17 09:05:25', '83.110.138.123'),
(633, 3, 'Gallery', 'Team on Service', 2, '2017-09-17 09:06:48', '83.110.138.123'),
(634, 3, 'Gallery', 'Hands together for Work', 2, '2017-09-17 09:07:11', '83.110.138.123'),
(635, 3, 'Gallery', 'Dubai City view from office', 2, '2017-09-17 09:07:37', '83.110.138.123'),
(636, 3, 'Content', 'Services', 2, '2017-09-17 09:55:12', '83.110.138.123'),
(637, 3, 'Content', 'Services', 2, '2017-09-17 10:08:18', '83.110.138.123'),
(638, 3, 'Content', 'Services', 2, '2017-09-17 10:08:18', '83.110.138.123'),
(639, 3, 'Content', 'Services', 2, '2017-09-17 10:09:35', '83.110.138.123'),
(640, 3, 'Package Review', 'Divine Creation', 2, '2017-09-17 10:28:12', '83.110.138.123'),
(641, 3, 'Package Review', 'Jinvo corpoation', 2, '2017-09-17 10:28:39', '83.110.138.123'),
(642, 3, 'Email Settings', 'Mail Server', 2, '2017-09-17 10:29:45', '83.110.138.123'),
(643, 3, 'Email Settings', 'Mail Server', 2, '2017-09-17 10:30:38', '83.110.138.123'),
(644, 3, 'Services', 'Air-Conditioning, Ventilations & Air Systems Installation & Maintenance', 2, '2017-09-17 10:35:58', '83.110.138.123'),
(645, 3, 'Services', 'Air-Conditioning, Ventilations & Air Systems Installation & Maintenance', 2, '2017-09-17 10:36:06', '83.110.138.123'),
(646, 3, 'Services', 'Electromechanical Equipment installation and Maintenance', 2, '2017-09-17 10:36:29', '83.110.138.123');
INSERT INTO `igc_user_logs` (`log_id`, `user_id`, `module_name`, `module_title`, `action_id`, `date`, `ip_address`) VALUES
(647, 3, 'Services', 'Electromechanical Equipment installation and Maintenance', 2, '2017-09-17 10:48:10', '83.110.138.123'),
(648, 3, 'Services', 'Air-Conditioning, Ventilations & Air Systems Installation & Maintenance', 2, '2017-09-17 10:48:20', '83.110.138.123'),
(649, 3, 'Services', 'Electromechanical Equipment installation and Maintenance', 2, '2017-09-17 10:50:15', '83.110.138.123'),
(650, 3, 'Services', 'Electromechanical Equipment installation and Maintenance', 2, '2017-09-17 10:51:16', '83.110.138.123'),
(651, 3, 'Services', 'Plumbing & Sanitary Contracting', 2, '2017-09-17 10:53:38', '83.110.138.123'),
(652, 3, 'Services', 'Electromechanical Equipment installation and Maintenance', 2, '2017-09-17 10:55:07', '83.110.138.123'),
(653, 3, 'Services', 'Floor & Wall Tiling Works', 2, '2017-09-17 10:56:49', '83.110.138.123'),
(654, 3, 'Services', 'Painting Contracting', 2, '2017-09-17 10:58:24', '83.110.138.123'),
(655, 3, 'Services', 'Carpentry & Flooring Contracting', 2, '2017-09-17 10:59:32', '83.110.138.123'),
(656, 3, 'Services', 'Wall Paper Fixing', 2, '2017-09-17 11:01:24', '83.110.138.123'),
(657, 3, 'Services', 'Partitions & False Ceiling Contracting', 2, '2017-09-17 11:02:43', '83.110.138.123'),
(658, 3, 'Services', 'Plaster & Cladding Works', 1, '2017-09-17 11:04:32', '83.110.138.123'),
(659, 3, 'Slider', 'We Always Provide You', 2, '2017-09-17 12:18:21', '83.110.138.123'),
(660, 3, 'Slider', 'Plumbing', 2, '2017-09-17 13:11:23', '83.110.138.123'),
(661, 3, 'Slider', 'We Always Provide You', 2, '2017-09-17 13:12:09', '83.110.138.123'),
(662, 3, 'Slider', ' Tile Marble Fixing', 1, '2017-09-17 13:13:24', '83.110.138.123'),
(663, 3, 'Content', 'Services', 2, '2017-09-17 14:14:19', '83.110.138.123'),
(664, 3, 'Content', 'Services', 2, '2017-09-17 14:14:54', '83.110.138.123'),
(665, 3, 'Content', 'Services', 2, '2017-09-17 14:15:46', '83.110.138.123'),
(666, 3, 'Content', 'Services', 2, '2017-09-17 14:17:45', '83.110.138.123'),
(667, 3, 'Slider', 'House painting', 1, '2017-09-17 14:32:25', '83.110.138.123'),
(668, 3, 'Slider', 'AC conditioner Services', 1, '2017-09-17 14:59:15', '83.110.138.123'),
(669, 3, 'Slider', ' Tile Marble Fixing', 3, '2017-09-17 15:00:16', '83.110.138.123'),
(670, 3, 'Slider', 'We Provide to Our Clients', 3, '2017-09-17 15:00:22', '83.110.138.123'),
(671, 3, 'Slider', 'Plumbing', 2, '2017-09-17 15:13:39', '83.110.138.123'),
(672, 3, 'Slider', 'Plumbing', 1, '2017-09-17 15:14:31', '83.110.138.123'),
(673, 3, 'Slider', 'Plumbing and Sanitary ', 1, '2017-09-17 15:21:33', '83.110.138.123'),
(674, 3, 'Slider', 'Plumbing and Sanitary ', 2, '2017-09-17 15:22:09', '83.110.138.123'),
(675, 3, 'Slider', 'Plumbing', 2, '2017-09-17 15:22:29', '83.110.138.123'),
(676, 3, 'Slider', 'Plumbing and Sanitary ', 2, '2017-09-17 15:26:23', '83.110.138.123'),
(677, 3, 'Content', 'Services', 2, '2017-09-17 23:59:54', '83.110.138.123'),
(678, 3, 'Content', 'Services', 2, '2017-09-18 00:02:24', '83.110.138.123'),
(679, 3, 'Content', 'Services', 2, '2017-09-18 00:03:46', '83.110.138.123'),
(680, 3, 'Slider', 'Plumbing', 3, '2017-09-27 20:33:41', '::1'),
(681, 3, 'Slider', 'Plumbing and Sanitary ', 3, '2017-09-27 20:33:45', '::1'),
(682, 3, 'Slider', 'AC conditioner Services', 3, '2017-09-27 20:33:49', '::1'),
(683, 3, 'Slider', 'House painting', 3, '2017-09-27 20:33:52', '::1'),
(684, 3, 'Slider', 'Plumbing', 2, '2017-09-27 20:34:00', '::1'),
(685, 3, 'Slider', 'Free Car Services With Al Toufiq', 2, '2017-09-27 20:36:33', '::1'),
(686, 3, 'Slider', 'Blizzak LM25-1   <span> Winter </span> tyre', 2, '2017-09-27 20:37:45', '::1'),
(687, 3, 'Slider', 'Free Car Services <span>With</span> Al Toufiq', 2, '2017-09-27 20:38:02', '::1'),
(688, 3, 'Slider', 'Summer Tyres   <span> Eagle </span> LS', 2, '2017-09-27 20:38:49', '::1'),
(689, 3, 'Clients', 'Abc', 2, '2017-09-27 21:16:36', '::1'),
(690, 3, 'Clients', 'ac', 2, '2017-09-27 21:16:44', '::1'),
(691, 3, 'Clients', 'fsdf', 2, '2017-09-27 21:16:51', '::1'),
(692, 3, 'Clients', 'fsfsdf', 2, '2017-09-27 21:16:59', '::1'),
(693, 3, 'Clients', 'fsdfsd', 2, '2017-09-27 21:17:09', '::1'),
(694, 3, 'Clients', 'sfaf', 2, '2017-09-27 21:17:19', '::1'),
(695, 3, 'Clients', 'bcz', 1, '2017-09-27 21:25:53', '::1'),
(696, 3, 'Clients', 'Abc', 2, '2017-09-27 21:26:08', '::1'),
(697, 3, 'Clients', 'ac', 2, '2017-09-27 21:26:18', '::1'),
(698, 3, 'Clients', 'ac', 2, '2017-09-27 21:26:25', '::1'),
(699, 3, 'Clients', 'fsdf', 2, '2017-09-27 21:26:28', '::1'),
(700, 3, 'Clients', 'fsfsdf', 2, '2017-09-27 21:26:31', '::1'),
(701, 3, 'Clients', 'fsdfsd', 2, '2017-09-27 21:26:34', '::1'),
(702, 3, 'Clients', 'sfaf', 2, '2017-09-27 21:26:38', '::1'),
(703, 3, 'Clients', 'bcz', 2, '2017-09-27 21:26:41', '::1'),
(704, 3, 'Content', 'Services', 2, '2017-09-27 21:37:42', '::1'),
(705, 3, 'Content', 'Services', 2, '2017-09-27 21:38:52', '::1'),
(706, 3, 'Services', 'Air-Conditioning, Ventilations & Air Systems Installation & Maintenance', 2, '2017-09-27 22:10:59', '::1'),
(707, 3, 'Services', 'Electromechanical Equipment installation and Maintenance', 2, '2017-09-27 22:11:26', '::1'),
(708, 3, 'Services', 'Electromechanical Equipment installation and Maintenance', 2, '2017-09-27 22:11:41', '::1'),
(709, 3, 'Services', 'Plumbing & Sanitary Contracting', 2, '2017-09-27 22:11:58', '::1'),
(710, 3, 'Services', 'Floor & Wall Tiling Works', 2, '2017-09-27 22:12:10', '::1'),
(711, 3, 'Services', 'Air-Conditioning, Ventilations & Air Systems Installation & Maintenance', 2, '2017-09-27 22:12:40', '::1'),
(712, 3, 'Services', 'Air-Conditioning, Ventilations & Air Systems Installation & Maintenance', 2, '2017-09-27 22:13:03', '::1'),
(713, 3, 'Services', 'Air-Conditioning, Ventilations & Air Systems Installation & Maintenance', 2, '2017-09-27 22:13:42', '::1'),
(714, 3, 'Team', 'Deara Partition', 2, '2017-09-27 22:41:45', '::1'),
(715, 3, 'Team', 'John Daniel', 2, '2017-09-27 22:41:59', '::1'),
(716, 3, 'Team', 'Mohammad Ansari', 2, '2017-09-27 22:42:21', '::1'),
(717, 3, 'Team', 'Auran Ansari', 2, '2017-09-27 22:42:56', '::1'),
(718, 3, 'Team', 'Ahmad Hussen', 2, '2017-09-27 22:43:30', '::1'),
(719, 3, 'Team', 'Ahmad Hussen', 2, '2017-09-27 22:43:39', '::1'),
(720, 3, 'Content', 'Our Team', 1, '2017-09-28 07:02:42', '::1'),
(721, 3, 'Content', 'Our Team', 2, '2017-09-28 07:07:39', '::1'),
(722, 3, 'Content', 'Our Team', 2, '2017-09-28 07:08:42', '::1'),
(723, 3, 'Content', 'Our Team', 2, '2017-09-28 07:09:05', '::1'),
(724, 3, 'Content', 'OUR PROFESSIONAL TEAM', 2, '2017-09-28 07:10:41', '::1'),
(725, 3, 'Content', 'OUR PRODUCTS', 1, '2017-09-28 07:14:36', '::1'),
(726, 3, 'Product Category', 'SINGLE PHASE ELECTRIC MOTORS', 3, '2017-09-28 07:39:37', '::1'),
(727, 3, 'Product Category', 'THREE PHASE ELECTRIC MOTOR - ALUMINUM FRAME', 3, '2017-09-28 07:39:40', '::1'),
(728, 3, 'Product Category', 'THREE PHASE ELECTRIC MOTORS - CAST IRON BODY', 3, '2017-09-28 07:39:42', '::1'),
(729, 3, 'Product Category', 'SUV & TRUCKS TIRES', 1, '2017-09-28 07:47:08', '::1'),
(730, 3, 'Product Category', 'SUV & TRUCKS TIRES', 1, '2017-09-28 07:48:10', '::1'),
(731, 3, 'Product Category', 'SPORT TIRES', 1, '2017-09-28 07:48:23', '::1'),
(732, 3, 'Product Category', 'WINTER TIRES', 1, '2017-09-28 07:48:41', '::1'),
(733, 3, 'Product Category', 'TRACTOR TYRES', 1, '2017-09-28 07:49:24', '::1'),
(734, 3, 'Product Category', 'MOTORCYCLE TYRES', 1, '2017-09-28 07:49:45', '::1'),
(735, 3, 'Content', 'Quick Links', 1, '2017-09-28 08:24:21', '::1'),
(736, 3, 'Content', 'OUR PRODUCTS', 2, '2017-09-28 08:24:30', '::1'),
(737, 3, 'Content', 'OUR PROFESSIONAL TEAM', 2, '2017-09-28 08:24:36', '::1'),
(738, 3, 'Content', 'OUR PROFESSIONAL TEAM', 2, '2017-09-28 08:24:43', '::1'),
(739, 3, 'Content', 'OUR PRODUCTS', 2, '2017-09-28 08:25:55', '::1'),
(740, 3, 'Content', 'OUR PROFESSIONAL TEAM', 2, '2017-09-28 08:26:05', '::1'),
(741, 3, 'Email Settings', 'Mail Server', 2, '2017-09-28 08:32:44', '::1'),
(742, 3, 'Email Settings', 'Mail Server', 2, '2017-09-28 08:33:16', '::1'),
(743, 3, 'Email Settings', 'Admin Email', 2, '2017-09-28 08:33:34', '::1'),
(744, 3, 'Content', 'Home', 1, '2017-09-28 08:48:52', '::1'),
(745, 3, 'Content', 'About Us', 2, '2017-09-28 08:49:18', '::1'),
(746, 3, 'Content', 'Services', 2, '2017-09-28 09:31:24', '::1'),
(747, 3, 'Content', 'Brands', 1, '2017-09-28 09:31:49', '::1'),
(748, 3, 'Content', 'Contact', 2, '2017-09-28 09:32:48', '::1'),
(749, 3, 'Content', 'Home', 3, '2017-09-28 09:48:55', '::1'),
(750, 3, 'Content', 'About Us', 2, '2017-09-28 10:01:26', '::1'),
(751, 3, 'Content', 'About Us', 2, '2017-09-28 10:02:11', '::1'),
(752, 3, 'Content', 'About Us', 2, '2017-09-28 10:04:20', '::1'),
(753, 3, 'Content', 'Services', 2, '2017-09-28 10:06:48', '::1'),
(754, 3, 'Content', 'Services', 2, '2017-09-28 10:13:03', '::1'),
(755, 3, 'Content', 'Brands', 2, '2017-09-28 10:25:36', '::1'),
(756, 3, 'Product', 'KUMHO', 1, '2017-09-28 10:43:46', '::1'),
(757, 3, 'Product', 'CINTURATO™ P7™ BLUE', 1, '2017-09-28 10:45:16', '::1'),
(758, 3, 'Product Category', 'SUV & TRUCKS TIRES', 2, '2017-09-28 10:45:36', '::1'),
(759, 3, 'Product Category', 'SPORT TIRES', 2, '2017-09-28 10:45:41', '::1'),
(760, 3, 'Product Category', 'WINTER TIRES', 2, '2017-09-28 10:45:45', '::1'),
(761, 3, 'Product Category', 'WINTER TIRES', 2, '2017-09-28 10:45:49', '::1'),
(762, 3, 'Product Category', 'TRACTOR TYRES', 2, '2017-09-28 10:45:56', '::1'),
(763, 3, 'Product Category', 'MOTORCYCLE TYRES', 2, '2017-09-28 10:46:02', '::1'),
(764, 3, 'Product', 'CINTURATO™ P7™ BLUE', 2, '2017-09-28 12:43:40', '::1'),
(765, 3, 'Product', 'KUMHO', 2, '2017-09-28 12:44:21', '::1'),
(766, 3, 'Product Category', 'SUV & TRUCKS TIRES', 2, '2017-09-28 12:47:24', '::1'),
(767, 3, 'Product Category', 'SUV & TRUCKS TIRES', 2, '2017-09-28 12:47:55', '::1'),
(768, 3, 'Product Category', 'SPORT TIRES', 2, '2017-09-28 12:48:04', '::1'),
(769, 3, 'Product Category', 'SUV & TRUCKS TIRES', 2, '2017-09-28 13:10:17', '::1'),
(770, 3, 'Product Category', 'SPORT TIRES', 2, '2017-09-28 13:10:20', '::1'),
(771, 3, 'Product Category', 'WINTER TIRES', 2, '2017-09-28 13:10:24', '::1'),
(772, 3, 'Product Category', 'TRACTOR TYRES', 2, '2017-09-28 13:10:27', '::1'),
(773, 3, 'Product Category', 'MOTORCYCLE TYRES', 2, '2017-09-28 13:10:31', '::1'),
(774, 3, 'Product Category', 'SUV & TRUCKS TIRES', 2, '2017-09-28 13:12:42', '::1'),
(775, 3, 'Product', 'fasf', 1, '2017-09-28 13:23:12', '::1'),
(776, 3, 'Product Category', 'SUV & TRUCKS TIRES', 2, '2017-09-28 13:23:37', '::1'),
(777, 3, 'Product Category', 'SUV & TRUCKS TIRES', 2, '2017-09-28 13:28:10', '::1'),
(778, 3, 'Product Category', 'SPORT TIRES', 2, '2017-09-28 13:43:24', '::1'),
(779, 3, 'Product Category', 'WINTER TIRES', 2, '2017-09-28 13:43:31', '::1'),
(780, 3, 'Product Category', 'WINTER TIRES', 2, '2017-09-28 13:43:34', '::1'),
(781, 3, 'Product Category', 'TRACTOR TYRES', 2, '2017-09-28 13:43:39', '::1'),
(782, 3, 'Product Category', 'MOTORCYCLE TYRES', 2, '2017-09-28 13:43:46', '::1'),
(783, 3, 'Product Category', 'MOTORCYCLE TYRES', 2, '2017-09-28 13:43:50', '::1'),
(784, 3, 'Product', 'fasf', 2, '2017-09-28 13:45:11', '::1'),
(785, 3, 'Product Category', 'SUV & TRUCKS TIRES', 2, '2017-09-28 14:13:26', '::1'),
(786, 3, 'Product Category', 'SPORT TIRES', 2, '2017-09-28 14:13:52', '::1'),
(787, 3, 'Product Category', 'WINTER TIRES', 2, '2017-09-28 14:14:00', '::1'),
(788, 3, 'Product Category', 'TRACTOR TYRES', 2, '2017-09-28 14:14:09', '::1'),
(789, 3, 'Product Category', 'MOTORCYCLE TYRES', 2, '2017-09-28 14:14:18', '::1'),
(790, 3, 'Product', 'POTENZA S001', 1, '2017-09-28 16:10:27', '::1'),
(791, 3, 'Product Category', 'SUV & TRUCKS TIRES', 2, '2017-09-28 16:11:17', '::1'),
(792, 3, 'Product Category', 'SPORT TIRES', 2, '2017-09-28 16:11:22', '::1'),
(793, 3, 'Product', 'POTENZA S001', 2, '2017-09-28 16:17:07', '::1'),
(794, 3, 'Album', 'PE30 - II POLES 3000 RPM (54229abfcfa5649e7003b83dd4755294b34.PNG)', 3, '2017-09-28 17:23:09', '::1'),
(795, 3, 'Album', 'PE30 - II POLES 3000 RPM (54229abfcfa5649e7003b83dd4755294b35.PNG)', 3, '2017-09-28 17:23:11', '::1'),
(796, 3, 'Album', 'PE30 - II POLES 3000 RPM (8d917ee2013f097c962fa85297f0ffeab3.PNG)', 3, '2017-09-28 17:23:12', '::1'),
(797, 3, 'Album', 'PE30 - II POLES 3000 RPM (d1744bbff50dd9d5ee97ae053076295babout-us.png)', 1, '2017-09-28 17:23:40', '::1'),
(798, 3, 'Album', 'PE30 - II POLES 3000 RPM (d1744bbff50dd9d5ee97ae053076295bvolvo.jpg)', 1, '2017-09-28 17:23:41', '::1'),
(799, 3, 'Album', 'PE30 - II POLES 3000 RPM (d1744bbff50dd9d5ee97ae053076295btoyota.jpg)', 1, '2017-09-28 17:23:41', '::1'),
(800, 3, 'Album', 'PE30 - II POLES 3000 RPM (d1744bbff50dd9d5ee97ae053076295bchevrolet_camaro_z28_93750_1920x1080.jpg)', 1, '2017-09-28 17:23:41', '::1'),
(801, 3, 'Album', 'PE30 - II POLES 3000 RPM', 2, '2017-09-28 17:23:48', '::1'),
(802, 3, 'Album', 'PE30 - II POLES 3000 RPM (d1744bbff50dd9d5ee97ae053076295btoyota.jpg)', 3, '2017-09-28 17:25:33', '::1'),
(803, 3, 'Album', 'PE30 - II POLES 3000 RPM (d1744bbff50dd9d5ee97ae053076295babout-us.png)', 3, '2017-09-28 17:25:34', '::1'),
(804, 3, 'Album', 'PE30 - II POLES 3000 RPM (d1744bbff50dd9d5ee97ae053076295bvolvo.jpg)', 3, '2017-09-28 17:25:37', '::1'),
(805, 3, 'Album', 'PE30 - II POLES 3000 RPM (d7a84628c025d30f7b2c52c958767e76chevrolet_camaro_z28_93750_1920x1080.jpg)', 1, '2017-09-28 17:25:52', '::1'),
(806, 3, 'Album', 'PE30 - II POLES 3000 RPM (d7a84628c025d30f7b2c52c958767e76chevrolet_camaro_z28_93750_1920x1080.jpg)', 1, '2017-09-28 17:25:52', '::1'),
(807, 3, 'Album', 'PE30 - II POLES 3000 RPM (d7a84628c025d30f7b2c52c958767e76chevrolet_camaro_z28_93750_1920x1080.jpg)', 1, '2017-09-28 17:25:52', '::1'),
(808, 3, 'Album', 'PE30 - II POLES 3000 RPM', 2, '2017-09-28 17:25:59', '::1'),
(809, 3, 'Album', 'PE30 - II POLES 3000 RPM (d1744bbff50dd9d5ee97ae053076295bchevrolet_camaro_z28_93750_1920x1080.jpg)', 3, '2017-09-28 17:43:22', '::1'),
(810, 3, 'Album', 'PE30 - II POLES 3000 RPM (d7a84628c025d30f7b2c52c958767e76chevrolet_camaro_z28_93750_1920x1080.jpg)', 3, '2017-09-28 17:43:23', '::1'),
(811, 3, 'Album', 'PE30 - II POLES 3000 RPM (d7a84628c025d30f7b2c52c958767e76chevrolet_camaro_z28_93750_1920x1080.jpg)', 3, '2017-09-28 17:43:24', '::1'),
(812, 3, 'Album', 'PE30 - II POLES 3000 RPM (d7a84628c025d30f7b2c52c958767e76chevrolet_camaro_z28_93750_1920x1080.jpg)', 3, '2017-09-28 17:43:25', '::1'),
(813, 3, 'Album', 'PE30 - II POLES 3000 RPM (44151de6be734db545ec958e77b0f9dfproduct.png)', 1, '2017-09-28 17:44:02', '::1'),
(814, 3, 'Album', 'PE30 - II POLES 3000 RPM (44151de6be734db545ec958e77b0f9dfproduct.png)', 1, '2017-09-28 17:44:02', '::1'),
(815, 3, 'Album', 'PE30 - II POLES 3000 RPM (44151de6be734db545ec958e77b0f9dfproduct.png)', 1, '2017-09-28 17:44:03', '::1'),
(816, 3, 'Album', 'PE30 - II POLES 3000 RPM (44151de6be734db545ec958e77b0f9dfproduct.png)', 1, '2017-09-28 17:44:03', '::1'),
(817, 3, 'Album', 'PE30 - II POLES 3000 RPM (2227d753dc18505031869d44673728e2product.png)', 1, '2017-09-28 17:44:15', '::1'),
(818, 3, 'Album', 'PE30 - II POLES 3000 RPM (44151de6be734db545ec958e77b0f9dfproduct.png)', 3, '2017-09-28 17:44:22', '::1'),
(819, 3, 'Album', 'PE30 - II POLES 3000 RPM (44151de6be734db545ec958e77b0f9dfproduct.png)', 3, '2017-09-28 17:44:29', '::1'),
(820, 3, 'Album', 'PE30 - II POLES 3000 RPM (44151de6be734db545ec958e77b0f9dfproduct.png)', 3, '2017-09-28 17:44:30', '::1'),
(821, 3, 'Album', 'PE30 - II POLES 3000 RPM (44151de6be734db545ec958e77b0f9dfproduct.png)', 3, '2017-09-28 17:44:32', '::1'),
(822, 3, 'Album', 'PE30 - II POLES 3000 RPM (9da6afb4840df51ceee399e5dea42598product.png)', 1, '2017-09-28 17:44:46', '::1'),
(823, 3, 'Album', 'PE30 - II POLES 3000 RPM (9da6afb4840df51ceee399e5dea42598product.png)', 1, '2017-09-28 17:44:46', '::1'),
(824, 3, 'Album', 'PE30 - II POLES 3000 RPM (9da6afb4840df51ceee399e5dea42598product.png)', 1, '2017-09-28 17:44:46', '::1'),
(825, 3, 'Album', 'PE30 - II POLES 3000 RPM', 2, '2017-09-28 17:44:52', '::1'),
(826, 3, 'Product', 'POTENZA S001', 2, '2017-10-01 11:09:54', '::1'),
(827, 3, 'Product', 'POTENZA S001', 2, '2017-10-01 11:10:07', '::1'),
(828, 3, 'Product', 'POTENZA S001', 2, '2017-10-01 11:11:06', '::1'),
(829, 3, 'Product', 'KUMHO', 2, '2017-10-01 11:26:23', '::1'),
(830, 3, 'Product', 'fasf', 2, '2017-10-01 11:30:12', '::1'),
(831, 3, 'Product', 'CINTURATO™ P7™ BLUE', 2, '2017-10-01 11:30:19', '::1'),
(832, 3, 'Product', 'POTENZA S001', 2, '2017-10-01 14:37:20', '::1'),
(833, 3, 'Product', 'fasf', 2, '2017-10-01 14:37:43', '::1'),
(834, 3, 'Product', 'CINTURATO™ P7™ BLUE', 2, '2017-10-01 14:37:58', '::1'),
(835, 3, 'Product', 'KUMHO', 2, '2017-10-01 14:38:15', '::1'),
(836, 3, 'Product', 'POTENZA S001', 2, '2017-10-01 15:05:31', '::1'),
(837, 3, 'Product', 'fasf', 2, '2017-10-01 15:05:41', '::1'),
(838, 3, 'Product', 'CINTURATO™ P7™ BLUE', 2, '2017-10-01 15:05:51', '::1'),
(839, 3, 'Product', 'KUMHO', 2, '2017-10-01 15:06:00', '::1'),
(840, 3, 'Content', 'Services', 2, '2017-10-01 15:32:34', '::1'),
(841, 3, 'Content', 'Window Tinting', 1, '2017-10-01 19:10:59', '::1'),
(842, 3, 'Content', 'Remote Control Installation', 1, '2017-10-01 19:11:21', '::1'),
(843, 3, 'Content', 'Remote Control Installation', 2, '2017-10-01 20:02:30', '::1'),
(844, 3, 'Content', 'Remote Control Installation', 2, '2017-10-01 20:08:56', '::1'),
(845, 3, 'Content', 'Window Tinting', 2, '2017-10-01 20:09:04', '::1'),
(846, 3, 'Content', 'Remote Control Installation', 2, '2017-10-01 20:16:26', '::1'),
(847, 3, 'Content', 'Window Tinting', 2, '2017-10-01 20:18:02', '::1'),
(848, 3, 'Content', 'Window Tinting', 2, '2017-10-01 20:18:26', '::1'),
(849, 3, 'Product', 'POTENZA S001', 2, '2017-10-01 20:25:10', '::1'),
(850, 3, 'Product', 'fasf', 2, '2017-10-01 20:25:14', '::1'),
(851, 3, 'Product', 'CINTURATO™ P7™ BLUE', 2, '2017-10-01 20:25:17', '::1'),
(852, 3, 'Product', 'KUMHO', 2, '2017-10-01 20:25:20', '::1'),
(853, 3, 'Product', 'CINTURATO P7 BLUE', 2, '2017-10-01 20:33:33', '::1'),
(854, 3, 'Content', 'About Us', 2, '2017-10-01 21:50:27', '::1'),
(855, 3, 'Subscribers', 'Subscribers Id (2)', 2, '2017-10-02 00:38:06', '83.110.138.123'),
(856, 3, 'Content', 'Services', 2, '2017-10-02 00:55:23', '83.110.138.123'),
(857, 3, 'Quick Contact', 'Message Id (1)', 3, '2017-10-02 01:03:07', '83.110.138.123'),
(858, 3, 'Content', 'Services', 2, '2017-10-02 01:18:22', '83.110.138.123'),
(859, 3, 'Content', 'fsdf', 1, '2017-10-02 01:22:29', '83.110.138.123'),
(860, 3, 'Content', 'fsdf', 3, '2017-10-02 01:23:33', '83.110.138.123'),
(861, 3, 'Subscribers', 'Subscribers Id (2)', 2, '2017-10-02 01:24:02', '83.110.138.123'),
(862, 3, 'Subscribers', 'Subscribers Id (10)', 3, '2017-10-02 01:24:08', '83.110.138.123'),
(863, 3, 'Subscribers', 'Subscribers Id (2)', 3, '2017-10-02 01:24:14', '83.110.138.123'),
(864, 3, 'Subscribers', 'Subscribers Id (3)', 3, '2017-10-02 01:24:17', '83.110.138.123'),
(865, 3, 'Subscribers', 'Subscribers Id (5)', 3, '2017-10-02 01:24:22', '83.110.138.123'),
(866, 3, 'Services', 'BEST PRICE', 2, '2017-10-02 01:48:03', '83.110.138.123'),
(867, 3, 'Services', 'EXPERIENCED TEAM', 2, '2017-10-02 01:48:40', '83.110.138.123'),
(868, 3, 'Services', 'GREAT VALUE', 2, '2017-10-02 01:49:32', '83.110.138.123'),
(869, 3, 'Services', 'QUICK SUPPORT', 2, '2017-10-02 01:50:03', '83.110.138.123'),
(870, 3, 'Content', 'Wheel Alignment', 1, '2017-10-02 02:10:17', '83.110.138.123'),
(871, 3, 'Content', 'Wheel Alignment', 2, '2017-10-02 02:11:06', '83.110.138.123'),
(872, 3, 'Content', 'Services', 2, '2017-10-02 02:15:37', '83.110.138.123'),
(873, 3, 'Content', 'Window Tinting', 2, '2017-10-02 02:21:36', '83.110.138.123'),
(874, 3, 'Content', 'Remote Control Installation', 2, '2017-10-02 02:21:43', '83.110.138.123'),
(875, 3, 'Content', 'Remote Control Installation', 2, '2017-10-02 02:22:34', '83.110.138.123'),
(876, 3, 'Content', 'Window Tinting', 2, '2017-10-02 02:22:43', '83.110.138.123'),
(877, 3, 'Content', 'Wheels Balancing', 1, '2017-10-02 02:23:28', '83.110.138.123'),
(878, 3, 'Content', 'Services', 2, '2017-10-02 02:23:52', '83.110.138.123'),
(879, 3, 'Content', 'Wheels Balancing', 2, '2017-10-02 02:28:56', '83.110.138.123'),
(880, 3, 'Content', 'Wheel Alignment', 2, '2017-10-02 02:39:26', '83.110.138.123'),
(881, 3, 'pictures', 'fsd', 1, '2017-10-02 02:52:57', '83.110.138.123'),
(882, 3, 'pictures', 'Summer Tyres   <span> Eagle </span> LS', 3, '2017-10-02 02:53:03', '83.110.138.123'),
(883, 3, 'pictures', 'Blizzak LM25-1   <span> Winter </span> tyre', 3, '2017-10-02 02:53:06', '83.110.138.123'),
(884, 3, 'pictures', 'Free Car Services <span>With</span> Al Toufiq', 3, '2017-10-02 02:53:10', '83.110.138.123'),
(885, 3, 'pictures', 'Background', 2, '2017-10-02 02:53:55', '83.110.138.123'),
(886, 3, 'Content', 'Tyre Maintenance', 1, '2017-10-02 02:54:29', '83.110.138.123'),
(887, 3, 'Content', 'Tyre Maintenance', 2, '2017-10-02 02:56:47', '83.110.138.123'),
(888, 3, 'Content', 'Tyre Maintenance', 2, '2017-10-02 02:59:45', '83.110.138.123'),
(889, 3, 'Content', 'Tyre Maintenance', 2, '2017-10-02 02:59:47', '83.110.138.123'),
(890, 3, 'pictures', 'Background', 2, '2017-10-02 03:04:05', '83.110.138.123'),
(891, 3, 'Content', 'Tyre Maintenance', 2, '2017-10-02 03:04:55', '83.110.138.123'),
(892, 3, 'Content', 'Battery Testing', 1, '2017-10-02 03:15:03', '83.110.138.123'),
(893, 3, 'Content', 'Window Tinting', 3, '2017-10-02 03:15:56', '83.110.138.123'),
(894, 3, 'Content', 'Remote Control Installation', 3, '2017-10-02 03:16:07', '83.110.138.123'),
(895, 3, 'pictures', 'Below Slider', 1, '2017-10-02 03:22:47', '83.110.138.123'),
(896, 3, 'pictures', 'Below Slider', 2, '2017-10-02 03:23:07', '83.110.138.123'),
(897, 3, 'pictures', 'Visa', 1, '2017-10-02 03:26:20', '83.110.138.123'),
(898, 3, 'pictures', 'Master Card', 1, '2017-10-02 03:26:47', '83.110.138.123'),
(899, 3, 'pictures', 'Nationwide', 1, '2017-10-02 03:27:05', '83.110.138.123'),
(900, 3, 'Content', 'Air conditioning ', 1, '2017-10-02 03:28:33', '83.110.138.123'),
(901, 3, 'Content', 'Air conditioning service', 2, '2017-10-02 03:30:42', '83.110.138.123'),
(902, 3, 'pictures', 'Footer logo', 1, '2017-10-02 03:40:04', '83.110.138.123'),
(903, 3, 'pictures', 'Nationwide', 3, '2017-10-02 03:40:50', '83.110.138.123'),
(904, 3, 'Content', 'Rotating tires', 1, '2017-10-02 03:46:55', '83.110.138.123'),
(905, 3, 'pictures', 'Footer Backgroynd', 1, '2017-10-02 03:47:58', '83.110.138.123'),
(906, 3, 'Content', 'Services', 2, '2017-10-02 03:52:54', '83.110.138.123'),
(907, 3, 'Content', 'Services', 2, '2017-10-02 03:54:19', '83.110.138.123'),
(908, 3, 'pictures', 'Footer logo', 3, '2017-10-02 03:55:41', '83.110.138.123'),
(909, 5, 'Slider', 'Free Car Services <span>With</span> Al Toufiq', 2, '2017-10-02 04:45:35', '83.110.138.123'),
(910, 5, 'Slider', 'Blizzak LM25-1   <span> Winter </span> tyre', 2, '2017-10-02 04:47:29', '83.110.138.123'),
(911, 5, 'Slider', 'Summer Tyres   <span> Eagle </span> LS', 2, '2017-10-02 04:48:26', '83.110.138.123'),
(912, 5, 'Content', 'OUR PROFESSIONAL TEAM', 2, '2017-10-02 05:16:26', '83.110.138.123'),
(913, 5, 'Content', 'OUR PROFESSIONAL TEAM', 2, '2017-10-02 05:17:56', '83.110.138.123'),
(914, 3, 'pictures', 'Logo', 1, '2017-10-02 05:28:33', '83.110.138.123'),
(915, 3, 'pictures', 'Footer Logo', 1, '2017-10-02 05:33:05', '83.110.138.123'),
(916, 5, 'Content', 'COMPANY OVERVIEW', 2, '2017-10-02 05:36:35', '83.110.138.123'),
(917, 5, 'Content', 'OUR PRODUCTS', 2, '2017-10-02 05:52:27', '83.110.138.123'),
(918, 5, 'Job', 'sadfsdf', 1, '2017-10-02 06:42:53', '83.110.138.123'),
(919, 5, 'Job', 'This is the Title of Newsletter', 2, '2017-10-02 06:47:29', '83.110.138.123'),
(920, 5, 'Job', 'Here Title of Newsltter', 2, '2017-10-02 06:49:01', '83.110.138.123'),
(921, 5, 'Job', 'My New Group', 1, '2017-10-03 01:55:40', '83.110.138.123'),
(922, 3, 'Content', 'COMPANY OVERVIEW', 2, '2017-10-03 02:03:18', '83.110.138.123'),
(923, 5, 'Job', 'My New Group', 2, '2017-10-03 02:10:23', '83.110.138.123'),
(924, 5, 'Job', 'My New Group', 2, '2017-10-03 02:10:45', '83.110.138.123'),
(925, 5, 'Job', 'My New Group', 2, '2017-10-03 02:13:00', '83.110.138.123'),
(926, 5, 'Job', 'This is Second Group', 1, '2017-10-03 02:39:22', '83.110.138.123'),
(927, 5, 'Job', 'Second Testing Newsletter', 1, '2017-10-03 02:45:08', '83.110.138.123'),
(928, 5, 'Job', 'Second Testing Newsletter', 2, '2017-10-03 02:53:31', '83.110.138.123'),
(929, 3, 'Email Settings', 'Mail Server', 2, '2017-10-03 04:39:51', '83.110.138.123'),
(930, 3, 'Email Settings', 'Mail Server', 2, '2017-10-03 05:07:04', '83.110.138.123'),
(931, 3, 'Email Settings', 'Admin Email', 2, '2017-10-03 05:07:42', '83.110.138.123'),
(932, 5, 'Job', 'My New Group', 2, '2017-10-03 05:24:17', '83.110.138.123'),
(933, 5, 'Job', 'Here Title of Newsltter', 3, '2017-10-03 05:50:29', '83.110.138.123'),
(934, 5, 'Job', 'This is Second Group', 3, '2017-10-03 05:56:44', '83.110.138.123'),
(935, 5, 'Job', 'My New Group', 2, '2017-10-03 05:57:14', '83.110.138.123'),
(936, 5, 'Job', 'New Test Group', 2, '2017-10-03 05:57:24', '83.110.138.123'),
(937, 5, 'Job', 'Testing Newsletter From Al Toufiq', 2, '2017-10-03 05:58:54', '83.110.138.123'),
(938, 5, 'Job', 'New Test Group', 2, '2017-10-03 06:06:22', '83.110.138.123'),
(939, 5, 'Job', 'New Test Group', 2, '2017-10-03 06:17:29', '83.110.138.123'),
(940, 3, 'Clients', 'Falken', 2, '2017-10-03 06:27:39', '83.110.138.123'),
(941, 3, 'Clients', 'Toyo Tires', 2, '2017-10-03 06:27:59', '83.110.138.123'),
(942, 3, 'Clients', 'Dunlop', 2, '2017-10-03 06:28:15', '83.110.138.123'),
(943, 3, 'Clients', 'Deestone', 2, '2017-10-03 06:28:32', '83.110.138.123'),
(944, 3, 'Clients', 'Zeetex', 2, '2017-10-03 06:28:47', '83.110.138.123'),
(945, 3, 'Clients', 'Continental', 2, '2017-10-03 06:29:02', '83.110.138.123'),
(946, 3, 'Clients', 'Nitto Tyre', 2, '2017-10-03 06:29:20', '83.110.138.123'),
(947, 3, 'Clients', 'Pirelli', 1, '2017-10-03 06:30:28', '83.110.138.123'),
(948, 3, 'Clients', 'Bridgestone', 1, '2017-10-03 06:30:53', '83.110.138.123'),
(949, 3, 'Clients', 'Michelin', 1, '2017-10-03 06:31:29', '83.110.138.123'),
(950, 3, 'Clients', 'Yokohama', 1, '2017-10-03 06:32:02', '83.110.138.123'),
(951, 3, 'Clients', 'Kumho', 1, '2017-10-03 06:32:27', '83.110.138.123'),
(952, 3, 'Clients', 'Hankook', 1, '2017-10-03 06:32:56', '83.110.138.123'),
(953, 3, 'Clients', 'BFGoodrich', 1, '2017-10-03 06:33:31', '83.110.138.123'),
(954, 3, 'Clients', 'Cooper', 1, '2017-10-03 06:34:08', '83.110.138.123'),
(955, 3, 'Clients', 'Nexen', 1, '2017-10-03 06:34:35', '83.110.138.123'),
(956, 3, 'Clients', 'China', 1, '2017-10-03 06:35:00', '83.110.138.123'),
(957, 3, 'Clients', 'Pirelli', 2, '2017-10-03 06:40:43', '83.110.138.123'),
(958, 3, 'Clients', 'Bridgestone', 2, '2017-10-03 06:40:56', '83.110.138.123'),
(959, 3, 'Clients', 'Michelin', 2, '2017-10-03 06:41:06', '83.110.138.123'),
(960, 3, 'Clients', 'Yokohama', 2, '2017-10-03 06:41:18', '83.110.138.123'),
(961, 3, 'Clients', 'Kumho', 2, '2017-10-03 06:41:37', '83.110.138.123'),
(962, 3, 'Clients', 'Hankook', 2, '2017-10-03 06:41:45', '83.110.138.123'),
(963, 3, 'Clients', 'BFGoodrich', 2, '2017-10-03 06:41:56', '83.110.138.123'),
(964, 3, 'Clients', 'Cooper', 2, '2017-10-03 06:42:10', '83.110.138.123'),
(965, 3, 'Clients', 'Nexen', 2, '2017-10-03 06:42:32', '83.110.138.123'),
(966, 3, 'Clients', 'China', 3, '2017-10-03 06:44:19', '83.110.138.123'),
(967, 3, 'Clients', 'Michelin', 2, '2017-10-03 06:46:54', '83.110.138.123'),
(968, 3, 'Clients', 'Cooper', 2, '2017-10-03 06:47:49', '83.110.138.123'),
(969, 3, 'Clients', 'Nexen', 2, '2017-10-03 06:48:02', '83.110.138.123'),
(970, 3, 'Product Category', 'ACCESSORIES', 1, '2017-10-03 07:11:40', '83.110.138.123'),
(971, 3, 'Product Category', 'MOTORCYCLE TYRES', 2, '2017-10-03 07:13:17', '83.110.138.123'),
(972, 3, 'Product Category', 'TRACTOR TYRES', 2, '2017-10-03 07:13:33', '83.110.138.123'),
(973, 3, 'Product Category', 'WINTER TIRES', 2, '2017-10-03 07:14:26', '83.110.138.123'),
(974, 3, 'Product Category', 'SPORT TIRES', 2, '2017-10-03 07:14:39', '83.110.138.123'),
(975, 3, 'Product Category', 'CAR WHEELS', 1, '2017-10-03 07:17:24', '83.110.138.123'),
(976, 3, 'Product Category', 'SUV & TRUCKS TIRES', 1, '2017-10-03 07:17:42', '83.110.138.123'),
(977, 3, 'Product Category', 'SPORTS WHEELS', 1, '2017-10-03 07:17:44', '83.110.138.123'),
(978, 3, 'Product Category', 'HUBCAPS & COVERS', 1, '2017-10-03 07:18:05', '83.110.138.123'),
(979, 3, 'Product Category', 'CAR & MINIVAN TIRES', 1, '2017-10-03 07:18:50', '83.110.138.123'),
(980, 3, 'Product Category', 'SUV & TRUCKS TIRES', 2, '2017-10-03 07:20:18', '83.110.138.123'),
(981, 3, 'Product Category', 'ACCESSORIES', 2, '2017-10-03 07:47:13', '83.110.138.123'),
(982, 3, 'Product Category', 'HUBCAPS & COVERS', 2, '2017-10-03 07:47:22', '83.110.138.123'),
(983, 3, 'Product Category', 'CAR & MINIVAN TIRES', 2, '2017-10-03 07:47:40', '83.110.138.123'),
(984, 3, 'Product Category', 'SPORTS WHEELS', 2, '2017-10-03 07:48:00', '83.110.138.123'),
(985, 3, 'Product Category', 'CAR WHEELS', 2, '2017-10-03 07:48:15', '83.110.138.123'),
(986, 3, 'Product Category', 'SUV & TRUCKS TIRES', 2, '2017-10-03 07:48:23', '83.110.138.123'),
(987, 3, 'Product Category', 'SUV & TRUCKS TIRES', 3, '2017-10-03 07:48:49', '83.110.138.123'),
(988, 3, 'Product Category', 'SUV & TRUCKS TIRES', 3, '2017-10-03 07:50:22', '83.110.138.123'),
(989, 3, 'Product Category', 'SUV & TRUCKS TIRES', 1, '2017-10-03 07:50:59', '83.110.138.123'),
(990, 3, 'Product Category', 'SUV & TRUCKS TIRES', 2, '2017-10-03 07:54:47', '83.110.138.123'),
(991, 3, 'Quick Contact', 'Message Id (2)', 3, '2017-10-03 08:48:59', '83.110.138.123'),
(992, 3, 'pictures', 'Logo', 2, '2017-10-04 08:34:37', '::1'),
(993, 3, 'pictures', 'Footer Backgroynd', 2, '2017-10-04 08:36:38', '::1'),
(994, 3, 'Content', 'QUICK LINK', 2, '2017-10-04 08:41:19', '::1'),
(995, 3, 'Slider', 'Summer Tyres   <span> Eagle </span> LS', 3, '2017-10-04 09:36:37', '::1'),
(996, 3, 'Slider', 'Making Business Fast And Safe', 2, '2017-10-04 09:37:44', '::1'),
(997, 3, 'Slider', 'We Value Your Time And Money', 2, '2017-10-04 09:38:23', '::1'),
(998, 3, 'Email Settings', 'Mail Server', 2, '2017-10-04 09:42:43', '::1'),
(999, 3, 'Email Settings', 'Admin Email', 2, '2017-10-04 09:42:50', '::1'),
(1000, 3, 'Slider', 'Making Business Fast And Safe', 2, '2017-10-04 09:58:59', '::1'),
(1001, 3, 'Slider', 'Making Business Fast And Safe', 2, '2017-10-04 10:02:09', '::1'),
(1002, 3, 'Slider', 'Making Business Fast And Safe', 2, '2017-10-04 10:03:34', '::1'),
(1003, 3, 'Slider', 'Making Business Fast And Safe', 2, '2017-10-04 10:05:33', '::1'),
(1004, 3, 'Slider', 'Making Business Fast And Safe', 2, '2017-10-04 10:07:01', '::1'),
(1005, 3, 'Subscribers', 'Subscribers Id (15)', 3, '2017-10-04 13:09:23', '::1'),
(1006, 3, 'Subscribers', 'Subscribers Id (21)', 3, '2017-10-04 13:19:57', '::1'),
(1007, 3, 'Package Booking', 'Message Id (11)', 3, '2017-10-04 14:09:16', '::1'),
(1008, 3, 'Package Booking', 'Message Id (2)', 3, '2017-10-04 14:16:08', '::1'),
(1009, 3, 'Package Booking', 'Message Id (1)', 3, '2017-10-04 14:16:11', '::1'),
(1010, 3, 'Package Booking', 'Message Id (12)', 3, '2017-10-04 14:16:13', '::1'),
(1011, 3, 'Package Booking', 'Message Id (10)', 3, '2017-10-04 14:16:16', '::1'),
(1012, 3, 'Enquiry', 'Message Id (3)', 3, '2017-10-04 14:19:39', '::1'),
(1013, 3, 'Clients', 'Falken', 2, '2017-10-04 14:30:57', '::1'),
(1014, 3, 'Clients', 'Toyo Tires', 2, '2017-10-04 14:31:04', '::1'),
(1015, 3, 'Clients', 'Dunlop', 2, '2017-10-04 14:31:11', '::1'),
(1016, 3, 'Clients', 'Deestone', 2, '2017-10-04 14:31:19', '::1'),
(1017, 3, 'Clients', 'Zeetex', 2, '2017-10-04 14:31:27', '::1'),
(1018, 3, 'Clients', 'Continental', 2, '2017-10-04 14:31:33', '::1'),
(1019, 3, 'Clients', 'Nitto Tyre', 2, '2017-10-04 14:31:40', '::1'),
(1020, 3, 'Clients', 'Pirelli', 2, '2017-10-04 14:31:47', '::1'),
(1021, 3, 'Clients', 'Bridgestone', 2, '2017-10-04 14:31:54', '::1'),
(1022, 3, 'Clients', 'Michelin', 2, '2017-10-04 14:32:01', '::1'),
(1023, 3, 'Clients', 'Yokohama', 2, '2017-10-04 14:32:08', '::1'),
(1024, 3, 'Clients', 'Kumho', 2, '2017-10-04 14:32:16', '::1'),
(1025, 3, 'Clients', 'Hankook', 2, '2017-10-04 14:32:26', '::1'),
(1026, 3, 'Clients', 'BFGoodrich', 2, '2017-10-04 14:32:34', '::1'),
(1027, 3, 'Clients', 'Cooper', 2, '2017-10-04 14:32:41', '::1'),
(1028, 3, 'Clients', 'Nexen', 3, '2017-10-04 14:32:45', '::1'),
(1029, 3, 'Content', 'PRO SERVICES', 2, '2017-10-04 15:38:01', '::1'),
(1030, 3, 'Content', 'COMPANY REGISTRATION', 2, '2017-10-04 15:38:29', '::1'),
(1031, 3, 'Content', 'TRADE LICENSE APPLICATION', 2, '2017-10-04 15:39:03', '::1'),
(1032, 3, 'Content', 'COMPANY INCORPORATION', 2, '2017-10-04 15:39:43', '::1'),
(1033, 3, 'Content', 'OPENING OF CORPORATE BANK ACCOUNTS', 2, '2017-10-04 15:40:12', '::1'),
(1034, 3, 'Content', 'SERVICED OFFICES', 2, '2017-10-04 15:40:34', '::1'),
(1035, 3, 'Content', 'Business Setup In Dubai Offices', 1, '2017-10-04 15:55:17', '::1'),
(1036, 3, 'Content', 'Business Setup In Dubai Services', 1, '2017-10-04 15:56:09', '::1'),
(1037, 3, 'Content', 'Business Setup In Dubai Services', 2, '2017-10-04 15:57:05', '::1'),
(1038, 3, 'Content', 'BUSINESS SETUP IN UAE', 1, '2017-10-04 16:11:28', '::1'),
(1039, 3, 'Content', 'BUSINESS SETUP IN RAS AL-KHAIMAH', 1, '2017-10-04 16:19:04', '::1'),
(1040, 3, 'Content', 'BUSINESS SETUP IN AJMAN', 1, '2017-10-04 16:20:21', '::1'),
(1041, 3, 'Content', 'BUSINESS SETUP IN RAS AL-KHAIMAH', 2, '2017-10-04 16:21:01', '::1'),
(1042, 3, 'Content', 'BUSINESS SETUP IN UAE', 2, '2017-10-04 16:22:41', '::1'),
(1043, 3, 'Content', 'BUSINESS SETUP IN SHARJAH', 1, '2017-10-04 16:24:26', '::1'),
(1044, 3, 'Content', 'BUSINESS SETUP IN DUBAI', 1, '2017-10-04 16:42:33', '::1'),
(1045, 3, 'Content', 'About Us', 2, '2017-10-04 17:21:53', '::1'),
(1046, 3, 'Content', 'About Us', 2, '2017-10-04 17:34:49', '::1'),
(1047, 3, 'Content', 'Our Team', 1, '2017-10-04 20:49:24', '::1'),
(1048, 3, 'Content', 'Our Team', 2, '2017-10-04 20:57:55', '::1'),
(1049, 3, 'Team', 'John Daniel', 2, '2017-10-04 21:30:09', '::1'),
(1050, 3, 'Team', 'Mohammad Ansari', 2, '2017-10-04 21:30:16', '::1'),
(1051, 3, 'Team', 'Auran Ansari', 2, '2017-10-04 21:30:24', '::1'),
(1052, 3, 'Team', 'Ahmad Hussen', 2, '2017-10-04 21:30:34', '::1'),
(1053, 3, 'Team', 'Mohamad Akhtar', 1, '2017-10-04 21:31:12', '::1'),
(1054, 3, 'Content', 'Massage From CEO', 1, '2017-10-04 21:47:58', '::1'),
(1055, 3, 'Content', 'Massage From CEO', 2, '2017-10-04 21:48:09', '::1'),
(1056, 3, 'Content', 'Massage From CEO', 2, '2017-10-04 21:49:21', '::1'),
(1057, 3, 'Content', 'Massage From CEO', 2, '2017-10-04 21:50:06', '::1'),
(1058, 3, 'Content', 'WHY DO I REQUIRE SPONSORSHIP FOR MY BUSINESS SETUP IN DUBAI', 1, '2017-10-04 21:53:04', '::1'),
(1059, 3, 'Content', 'HOW TO ESTABLISH YOUR BUSINESS SETUP IN DUBAI?', 1, '2017-10-04 22:03:55', '::1'),
(1060, 3, 'Content', 'HOW TO ESTABLISH YOUR BUSINESS SETUP IN DUBAI', 2, '2017-10-04 22:18:23', '::1'),
(1061, 3, 'Content', 'QUICK LINK', 2, '2017-10-05 07:25:47', '::1'),
(1062, 3, 'Content', 'Brands', 2, '2017-10-05 08:07:16', '::1'),
(1063, 3, 'Content', 'Services', 2, '2017-10-05 08:57:23', '::1'),
(1064, 3, 'Content', 'COMPANY REGISTRATION', 2, '2017-10-05 09:13:26', '::1'),
(1065, 3, 'Content', 'COMPANY REGISTRATION', 2, '2017-10-05 09:22:50', '::1'),
(1066, 3, 'Content', 'COMPANY REGISTRATION', 2, '2017-10-05 09:24:07', '::1'),
(1067, 3, 'Content', 'COMPANY REGISTRATION', 2, '2017-10-05 09:24:48', '::1'),
(1068, 3, 'Content', 'Massage From CEO', 2, '2017-10-05 09:40:50', '::1'),
(1069, 3, 'Content', 'Massage From CEO', 2, '2017-10-05 09:41:35', '::1'),
(1070, 3, 'Content', 'Terms of Service', 1, '2017-10-05 10:04:47', '::1'),
(1071, 3, 'Content', 'SERVICED OFFICES', 2, '2017-10-05 10:07:31', '::1'),
(1072, 3, 'Content', 'SERVICED OFFICES', 2, '2017-10-05 10:08:03', '::1'),
(1073, 3, 'Content', 'Serviced Offices', 2, '2017-10-05 10:08:27', '::1'),
(1074, 3, 'Content', 'Terms of Service', 2, '2017-10-05 10:11:39', '::1'),
(1075, 3, 'Content', 'Our Services', 2, '2017-10-05 10:12:57', '::1'),
(1076, 3, 'Content', 'Our Services', 2, '2017-10-05 10:13:27', '::1'),
(1077, 3, 'Content', 'Business Setup', 1, '2017-10-05 10:14:37', '::1'),
(1078, 3, 'Content', 'Business Setup in Sharjaha', 2, '2017-10-05 10:15:43', '::1'),
(1079, 3, 'Content', 'Business Setup in Ajman', 2, '2017-10-05 10:16:04', '::1'),
(1080, 3, 'Content', 'Business Setup in RAS Al-Khaimah', 2, '2017-10-05 10:16:33', '::1'),
(1081, 3, 'Content', 'Business Setup in UAE', 2, '2017-10-05 10:17:20', '::1'),
(1082, 3, 'Content', 'Our Professional Team ', 2, '2017-10-05 10:18:43', '::1'),
(1083, 3, 'Content', 'Our Team', 3, '2017-10-05 10:19:54', '::1'),
(1084, 3, 'Content', 'Our Team', 3, '2017-10-05 10:22:50', '::1'),
(1085, 3, 'Content', 'Our Professional Team ', 3, '2017-10-05 10:22:55', '::1'),
(1086, 3, 'Content', 'Our Professional Team', 1, '2017-10-05 10:23:24', '::1'),
(1087, 3, 'Content', 'Terms of Service', 2, '2017-10-05 10:28:24', '::1'),
(1088, 3, 'Content', 'OUR PRODUCTS', 2, '2017-10-05 10:30:18', '::1'),
(1089, 3, 'Content', ' Secure', 1, '2017-10-05 12:11:57', '::1'),
(1090, 3, 'Content', 'Trackable', 1, '2017-10-05 12:12:44', '::1'),
(1091, 3, 'Content', 'Fast', 1, '2017-10-05 12:13:57', '::1'),
(1092, 3, 'Content', 'Trackable', 2, '2017-10-05 12:14:06', '::1'),
(1093, 3, 'Content', ' Secure', 2, '2017-10-05 12:14:13', '::1'),
(1094, 3, 'Content', 'Reliable', 1, '2017-10-05 12:15:07', '::1'),
(1095, 3, 'Services', 'BEST PRICE', 3, '2017-10-05 07:51:46', '83.110.138.123'),
(1096, 3, 'Services', 'EXPERIENCED TEAM', 3, '2017-10-05 07:51:49', '83.110.138.123'),
(1097, 3, 'Services', 'GREAT VALUE', 3, '2017-10-05 07:51:52', '83.110.138.123'),
(1098, 3, 'Services', 'QUICK SUPPORT', 3, '2017-10-05 07:51:55', '83.110.138.123'),
(1099, 3, 'Services', 'Painting Contracting', 3, '2017-10-05 07:51:57', '83.110.138.123'),
(1100, 3, 'Services', 'Carpentry & Flooring Contracting', 3, '2017-10-05 07:52:00', '83.110.138.123'),
(1101, 3, 'Services', 'Wall Paper Fixing', 3, '2017-10-05 07:52:03', '83.110.138.123'),
(1102, 3, 'Services', 'Partitions & False Ceiling Contracting', 3, '2017-10-05 07:52:06', '83.110.138.123'),
(1103, 3, 'Services', 'Plaster & Cladding Works', 3, '2017-10-05 07:52:09', '83.110.138.123'),
(1104, 3, 'Services', 'test', 1, '2017-10-05 07:56:26', '83.110.138.123'),
(1105, 3, 'FAQ', 'sadfsd', 1, '2017-10-05 07:59:02', '83.110.138.123'),
(1106, 3, 'FAQ', 'fsdaf', 1, '2017-10-05 08:00:50', '83.110.138.123'),
(1107, 3, 'FAQ', 's', 1, '2017-10-05 08:01:38', '83.110.138.123'),
(1108, 3, 'FAQ', 's', 3, '2017-10-05 08:01:43', '83.110.138.123'),
(1109, 3, 'Content', 'FAQ', 2, '2017-10-05 08:10:33', '83.110.138.123'),
(1110, 3, 'FAQ', 'test', 3, '2017-10-05 08:29:41', '83.110.138.123'),
(1111, 3, 'FAQ', 'sadfsd', 3, '2017-10-05 08:29:44', '83.110.138.123'),
(1112, 3, 'FAQ', 'fsdaf', 3, '2017-10-05 08:29:46', '83.110.138.123'),
(1113, 3, 'FAQ', 'Why choose the United Arab Emirates to incorporate my company?', 1, '2017-10-05 08:31:11', '83.110.138.123'),
(1114, 3, 'FAQ', 'Why choose Dubai Setup to incorporate in the UAE?', 1, '2017-10-05 08:32:01', '83.110.138.123'),
(1115, 3, 'FAQ', 'What are the different types of company structures in the UAE?', 1, '2017-10-05 08:32:35', '83.110.138.123'),
(1116, 3, 'Content', 'Massage From CEO', 2, '2017-10-05 08:39:00', '83.110.138.123'),
(1117, 3, 'Content', 'Contact', 2, '2017-10-05 08:41:18', '83.110.138.123'),
(1118, 3, 'Content', 'Contact', 2, '2017-10-05 08:42:56', '83.110.138.123'),
(1119, 3, 'Content', 'Contact', 2, '2017-10-05 08:44:27', '83.110.138.123'),
(1120, 3, 'Content', 'Contact', 2, '2017-10-05 08:44:51', '83.110.138.123'),
(1121, 3, 'Content', 'Business Man Services', 2, '2017-10-05 08:49:42', '83.110.138.123'),
(1122, 3, 'Content', 'Business Setup in UAE', 3, '2017-10-05 08:50:50', '83.110.138.123'),
(1123, 3, 'Content', 'Business Setup In UAE', 2, '2017-10-05 08:51:14', '83.110.138.123'),
(1124, 3, 'Content', 'BUSINESS SETUP IN DUBAI', 2, '2017-10-05 08:52:41', '83.110.138.123'),
(1125, 3, 'Content', 'Get Expert Consultation <small>for company formation in UAE</small>', 2, '2017-10-05 08:53:19', '83.110.138.123'),
(1126, 3, 'Content', 'Get Expert Consultation <br /><small>for company formation in UAE</small>', 2, '2017-10-05 08:53:40', '83.110.138.123'),
(1127, 3, 'Content', 'Get Expert Consultation for company formation in UAE', 2, '2017-10-05 08:54:26', '83.110.138.123'),
(1128, 3, 'Content', 'Get Expert Consultation for company formation in UAE', 2, '2017-10-05 08:56:43', '83.110.138.123'),
(1129, 3, 'Content', 'Get Expert Consultation for company formation in UAE', 2, '2017-10-05 08:59:31', '83.110.138.123'),
(1130, 3, 'Content', 'Get Expert Consultation for company formation in UAE', 2, '2017-10-05 09:00:04', '83.110.138.123'),
(1131, 3, 'Content', 'Get Expert Consultation for company formation in UAE', 2, '2017-10-05 09:02:20', '83.110.138.123'),
(1132, 3, 'Content', 'Get Expert Consultation for company formation in UAE', 2, '2017-10-05 09:03:41', '83.110.138.123'),
(1133, 3, 'Slider', 'Get Your Residency in UAE and Enjpy life at it\'s best', 1, '2017-10-05 09:05:44', '83.110.138.123'),
(1134, 3, 'Slider', 'Get Your Residency in UAE and Enjpy life at it\'s best', 3, '2017-10-05 09:06:07', '83.110.138.123'),
(1135, 3, 'Content', 'Business Setup in RAS Al-Khaimah', 2, '2017-10-05 12:36:40', '83.110.138.123'),
(1136, 3, 'Content', 'Business Setup in RAS Al-Khaimah', 2, '2017-10-06 03:28:56', '83.110.138.123'),
(1137, 3, 'Content', 'Business Setup in RAS Al-Khaimah', 2, '2017-10-06 03:29:52', '83.110.138.123'),
(1138, 3, 'Content', 'Business Setup in RAS Al-Khaimah', 2, '2017-10-06 03:30:30', '83.110.138.123'),
(1139, 3, 'Content', 'Business Setup in RAS Al-Khaimah', 2, '2017-10-06 03:44:56', '83.110.138.123'),
(1140, 3, 'Content', 'Business Setup in RAS Al-Khaimah', 2, '2017-10-06 03:49:55', '83.110.138.123'),
(1141, 3, 'Content', 'Business Setup in RAS Al-Khaimah', 2, '2017-10-06 03:55:57', '83.110.138.123'),
(1142, 3, 'Content', 'Business Setup in RAS Al-Khaimah', 2, '2017-10-06 04:01:14', '83.110.138.123'),
(1143, 3, 'Content', 'Business Setup in RAS Al-Khaimah', 2, '2017-10-06 04:06:29', '83.110.138.123'),
(1144, 3, 'Content', 'Business Setup', 2, '2017-10-06 05:17:15', '83.110.138.123'),
(1145, 3, 'Content', 'Business Setup', 2, '2017-10-06 05:18:01', '83.110.138.123'),
(1146, 3, 'Content', 'Business Setup', 2, '2017-10-06 05:18:39', '83.110.138.123'),
(1147, 3, 'Content', 'Business Setup', 2, '2017-10-06 05:24:05', '83.110.138.123'),
(1148, 3, 'Content', 'Business Setup', 2, '2017-10-06 05:33:09', '83.110.138.123'),
(1149, 3, 'Content', 'Business Setup', 3, '2017-10-06 05:33:12', '83.110.138.123'),
(1150, 3, 'Content', 'Business Setup', 1, '2017-10-06 05:33:37', '83.110.138.123'),
(1151, 3, 'Content', 'Business Setup', 2, '2017-10-06 05:46:25', '83.110.138.123'),
(1152, 3, 'Content', 'Business Setup', 2, '2017-10-06 05:46:45', '83.110.138.123'),
(1153, 3, 'Content', 'Business Setup', 3, '2017-10-06 05:47:07', '83.110.138.123'),
(1154, 3, 'Content', 'Business Setup', 1, '2017-10-06 05:47:45', '83.110.138.123'),
(1155, 3, 'Content', 'Business Setup', 2, '2017-10-06 05:55:41', '83.110.138.123'),
(1156, 3, 'Content', 'Business Setup', 2, '2017-10-06 05:57:52', '83.110.138.123'),
(1157, 3, 'Content', 'Business Setup in RAS Al-Khaimah', 2, '2017-10-06 06:04:50', '83.110.138.123'),
(1158, 3, 'Content', 'Business Setup in RAS Al-Khaimah', 2, '2017-10-06 06:41:21', '83.110.138.123'),
(1159, 3, 'Content', 'Business Setup', 2, '2017-10-06 07:00:49', '83.110.138.123'),
(1160, 3, 'Content', 'Business Setup', 2, '2017-10-06 07:01:26', '83.110.138.123'),
(1161, 3, 'Content', 'Business Setup', 2, '2017-10-06 07:01:53', '83.110.138.123'),
(1162, 3, 'Content', 'Free Zone Ras Al Khaimah', 1, '2017-10-06 07:30:38', '83.110.138.123'),
(1163, 3, 'Content', 'Business Setup in RAS Al-Khaimah', 2, '2017-10-06 07:31:43', '83.110.138.123'),
(1164, 3, 'Content', 'Free Zone Ras Al Khaimah', 2, '2017-10-06 07:47:51', '83.110.138.123'),
(1165, 3, 'Content', 'Free Zone Ras Al Khaimah', 2, '2017-10-06 07:48:58', '83.110.138.123'),
(1166, 3, 'Gallery', 'Free enterprise system.', 2, '2017-10-06 08:40:51', '83.110.138.123'),
(1167, 3, 'Gallery', 'Highly developed transportation ', 2, '2017-10-06 08:41:17', '83.110.138.123'),
(1168, 3, 'Gallery', 'State-of-the-art telecommunications', 2, '2017-10-06 08:41:39', '83.110.138.123'),
(1169, 3, 'Content', 'Free Zone Ras Al Khaimah', 2, '2017-10-06 08:45:27', '83.110.138.123'),
(1170, 3, 'pictures', 'Navigation', 2, '2017-10-06 23:35:18', '83.110.138.123'),
(1171, 3, 'pictures', 'Navigation', 2, '2017-10-06 23:39:50', '83.110.138.123'),
(1172, 3, 'pictures', 'Top Header', 1, '2017-10-06 23:45:47', '83.110.138.123'),
(1173, 3, 'pictures', 'Top Header', 3, '2017-10-06 23:46:08', '83.110.138.123'),
(1174, 3, 'pictures', 'Top Header Background', 2, '2017-10-06 23:46:29', '83.110.138.123'),
(1175, 3, 'pictures', 'Free Zone Background', 1, '2017-10-07 00:01:20', '83.110.138.123'),
(1176, 3, 'pictures', 'Footer Logo', 3, '2017-10-07 00:03:59', '83.110.138.123'),
(1177, 3, 'pictures', 'Free Zone Background', 2, '2017-10-07 00:05:16', '83.110.138.123'),
(1178, 3, 'Content', 'Business Setup in RAS Al-Khaimah', 2, '2017-10-07 00:17:20', '83.110.138.123'),
(1179, 3, 'Content', 'Get Expert Consultation for company formation in Dubai', 2, '2017-10-07 00:42:32', '83.110.138.123'),
(1180, 3, 'Content', 'Professional', 2, '2017-10-07 14:50:28', '83.110.138.123'),
(1181, 3, 'Content', 'Business Setup in Ajman', 2, '2017-10-07 15:34:42', '83.110.138.123'),
(1182, 3, 'Content', 'Business Setup in Ajman', 2, '2017-10-07 15:37:21', '83.110.138.123'),
(1183, 3, 'Content', 'Free Zone Ras Al Khaimah', 2, '2017-10-07 15:42:57', '83.110.138.123'),
(1184, 3, 'Content', 'Businessmen Services', 2, '2017-10-08 00:36:55', '83.110.138.123'),
(1185, 3, 'Content', 'Business Setup In UAE', 2, '2017-10-08 00:38:21', '83.110.138.123'),
(1186, 3, 'Content', 'Get Expert Consultation for company formation in Dubai', 2, '2017-10-08 00:40:20', '83.110.138.123'),
(1187, 3, 'Content', 'Get Expert Consultation for company formation in Dubai', 2, '2017-10-08 00:43:36', '83.110.138.123'),
(1188, 3, 'Content', 'PRO SERVICES', 2, '2017-10-08 00:51:15', '83.110.138.123'),
(1189, 3, 'Content', 'COMPANY REGISTRATION', 2, '2017-10-08 00:53:18', '83.110.138.123'),
(1190, 3, 'Content', 'COMPANY REGISTRATION', 2, '2017-10-08 00:54:17', '83.110.138.123'),
(1191, 3, 'Content', 'TRADE LICENSE APPLICATION', 2, '2017-10-08 00:56:23', '83.110.138.123'),
(1192, 3, 'Content', 'COMPANY INCORPORATION', 3, '2017-10-08 00:56:44', '83.110.138.123'),
(1193, 3, 'Content', 'OPENING OF CORPORATE BANK ACCOUNTS', 2, '2017-10-08 00:58:30', '83.110.138.123'),
(1194, 3, 'Content', 'OPENING OF CORPORATE BANK ACCOUNTS', 2, '2017-10-08 01:01:29', '83.110.138.123'),
(1195, 3, 'Content', 'OPENING OF CORPORATE BANK ACCOUNTS', 2, '2017-10-08 01:01:56', '83.110.138.123'),
(1196, 3, 'Content', 'Serviced Offices', 2, '2017-10-08 01:03:41', '83.110.138.123'),
(1197, 3, 'Content', 'Serviced Offices', 2, '2017-10-08 01:05:25', '83.110.138.123'),
(1198, 3, 'Content', 'Serviced Offices', 2, '2017-10-08 01:06:40', '83.110.138.123'),
(1199, 3, 'Content', 'Serviced Offices', 2, '2017-10-08 01:07:14', '83.110.138.123'),
(1200, 3, 'Content', 'Serviced Offices', 2, '2017-10-08 01:07:49', '83.110.138.123'),
(1201, 3, 'Content', 'Our Services', 2, '2017-10-08 01:10:20', '83.110.138.123'),
(1202, 3, 'Content', 'Our Services', 2, '2017-10-08 01:12:24', '83.110.138.123'),
(1203, 3, 'Content', 'About Us', 2, '2017-10-08 01:14:21', '83.110.138.123'),
(1204, 3, 'Content', 'TRADE LICENSE APPLICATION', 2, '2017-10-08 01:21:39', '83.110.138.123'),
(1205, 3, 'Slider', 'Your Business Dream now will be reality', 1, '2017-10-08 01:26:18', '83.110.138.123'),
(1206, 3, 'Content', 'FREEZONES IN SHARJAH', 1, '2017-10-08 01:34:40', '83.110.138.123'),
(1207, 3, 'Content', 'Sharjah Mainland Business SetUp ', 1, '2017-10-08 01:36:03', '83.110.138.123'),
(1208, 3, 'Content', 'Business Setup in Sharjah', 2, '2017-10-08 01:38:52', '83.110.138.123'),
(1209, 3, 'Content', 'Sharjah Mainland Business Setup ', 2, '2017-10-08 01:40:29', '83.110.138.123'),
(1210, 3, 'Content', 'FREEZONES IN SHARJAH', 2, '2017-10-08 01:42:17', '83.110.138.123'),
(1211, 3, 'Content', 'FREEZONES IN SHARJAH', 2, '2017-10-08 01:42:53', '83.110.138.123'),
(1212, 3, 'Content', 'FREEZONES IN SHARJAH', 3, '2017-10-08 02:34:40', '83.110.138.123'),
(1213, 3, 'Content', 'Free Zone Ras Al Khaimah', 3, '2017-10-08 02:34:47', '83.110.138.123'),
(1214, 3, 'Content', 'Sharjah Airport Freezone (Saif Zone)', 1, '2017-10-08 02:37:05', '83.110.138.123'),
(1215, 3, 'Content', 'Hamriyah Free Zone Authority', 1, '2017-10-08 02:38:40', '83.110.138.123'),
(1216, 3, 'Content', 'Business Setup in Sharjah', 3, '2017-10-08 02:43:47', '83.110.138.123'),
(1217, 3, 'Content', 'BUSINESS SETUP IN ABU DHABI', 1, '2017-10-08 02:45:09', '83.110.138.123'),
(1218, 3, 'Content', 'BUSINESS SETUP IN FUJAIRAH', 1, '2017-10-08 02:45:31', '83.110.138.123'),
(1219, 3, 'Content', 'BUSINESS SETUP IN UMM AL-QUWAIN', 1, '2017-10-08 02:46:14', '83.110.138.123'),
(1220, 3, 'Content', 'BUSINESS SETUP IN DUBAI', 1, '2017-10-08 02:46:35', '83.110.138.123'),
(1221, 3, 'Content', 'BUSINESS SETUP IN SHARJAH', 1, '2017-10-08 02:46:56', '83.110.138.123'),
(1222, 3, 'Content', 'Setting up your business in Jafza', 1, '2017-10-08 02:50:50', '83.110.138.123'),
(1223, 3, 'Content', 'BUSINESS SETUP IN SHARJAH', 2, '2017-10-08 02:51:52', '83.110.138.123'),
(1224, 3, 'Content', 'Sharjah Airport Freezone (Saif Zone)', 2, '2017-10-08 03:03:30', '83.110.138.123'),
(1225, 3, 'Content', 'Sharjah Airport Freezone Saif Zone', 2, '2017-10-08 03:04:20', '83.110.138.123'),
(1226, 3, 'Content', 'BUSINESS SETUP IN ABU DHABI', 2, '2017-10-08 03:11:06', '83.110.138.123'),
(1227, 3, 'Content', 'BUSINESS SETUP IN FUJAIRAH', 2, '2017-10-08 03:11:42', '83.110.138.123'),
(1228, 3, 'Content', 'BUSINESS SETUP IN UMM AL-QUWAIN', 2, '2017-10-08 03:12:40', '83.110.138.123'),
(1229, 3, 'Content', 'BUSINESS SETUP IN FUJAIRAH', 2, '2017-10-08 03:13:17', '83.110.138.123'),
(1230, 3, 'Content', 'BUSINESS SETUP IN ABU DHABI', 2, '2017-10-08 03:13:54', '83.110.138.123'),
(1231, 3, 'Content', 'BUSINESS SETUP IN DUBAI', 2, '2017-10-08 03:15:13', '83.110.138.123'),
(1232, 3, 'Content', 'Excellence', 2, '2017-10-08 03:19:15', '83.110.138.123'),
(1233, 3, 'Content', 'Devoted', 2, '2017-10-08 03:20:25', '83.110.138.123'),
(1234, 3, 'Content', 'Reliable', 2, '2017-10-08 03:20:45', '83.110.138.123'),
(1235, 3, 'Content', 'Professional', 2, '2017-10-08 03:21:10', '83.110.138.123'),
(1236, 3, 'Content', 'RELOCATION SERVICES', 1, '2017-10-08 03:25:33', '83.110.138.123'),
(1237, 3, 'Content', 'OPENING OF CORPORATE BANK ACCOUNTS', 2, '2017-10-08 03:26:25', '83.110.138.123'),
(1238, 3, 'Content', 'OPENING OF CORPORATE BANK ACCOUNTS', 2, '2017-10-08 03:27:01', '83.110.138.123');
INSERT INTO `igc_user_logs` (`log_id`, `user_id`, `module_name`, `module_title`, `action_id`, `date`, `ip_address`) VALUES
(1239, 3, 'pictures', 'Logo', 2, '2017-10-08 03:48:24', '83.110.138.123'),
(1240, 3, 'Content', 'BUSINESS SETUP IN ABU DHABI', 2, '2017-10-08 05:15:57', '83.110.138.123'),
(1241, 3, 'Content', 'BUSINESS SETUP IN FUJAIRAH', 2, '2017-10-08 05:16:27', '83.110.138.123'),
(1242, 3, 'Content', 'BUSINESS SETUP IN UMM AL-QUWAIN', 2, '2017-10-08 05:16:45', '83.110.138.123'),
(1243, 3, 'Content', 'BUSINESS SETUP IN DUBAI', 2, '2017-10-08 05:17:07', '83.110.138.123'),
(1244, 3, 'Content', 'Hamriyah Free Zone Authority', 2, '2017-10-08 05:30:37', '83.110.138.123'),
(1245, 3, 'Content', 'Hamriyah Free Zone Authority', 2, '2017-10-08 05:31:34', '83.110.138.123'),
(1246, 3, 'Gallery', 'Free enterprise system.', 3, '2017-10-08 05:33:42', '83.110.138.123'),
(1247, 3, 'Gallery', 'Highly developed transportation ', 3, '2017-10-08 05:33:44', '83.110.138.123'),
(1248, 3, 'Gallery', 'State-of-the-art telecommunications', 3, '2017-10-08 05:33:47', '83.110.138.123'),
(1249, 3, 'Gallery', '100% tax free', 1, '2017-10-08 05:34:43', '83.110.138.123'),
(1250, 3, 'Gallery', '100% foreign ownership of company', 1, '2017-10-08 05:35:35', '83.110.138.123'),
(1251, 3, 'Gallery', '100% return of capital and profits', 1, '2017-10-08 05:35:59', '83.110.138.123'),
(1252, 3, 'Gallery', 'Long-term corporate tax exemption', 1, '2017-10-08 05:36:49', '83.110.138.123'),
(1253, 3, 'Gallery', 'Low cost of doing business', 1, '2017-10-08 05:37:58', '83.110.138.123'),
(1254, 3, 'Gallery', 'Availability of flexi offices', 1, '2017-10-08 05:38:33', '83.110.138.123'),
(1255, 3, 'Gallery', 'Quick licenses', 1, '2017-10-08 05:39:26', '83.110.138.123'),
(1256, 3, 'Gallery', 'Quick licenses', 2, '2017-10-08 05:40:34', '83.110.138.123'),
(1257, 3, 'Gallery', 'Economical and variety of rental office space', 1, '2017-10-08 05:41:08', '83.110.138.123'),
(1258, 3, 'Content', 'Sharjah Airport Freezone Saif Zone', 2, '2017-10-08 05:47:31', '83.110.138.123'),
(1259, 3, 'Content', 'Setting up your business in Jafza', 2, '2017-10-08 05:51:24', '83.110.138.123'),
(1260, 3, 'Content', 'Setting up your business in Jafza', 2, '2017-10-08 05:52:37', '83.110.138.123'),
(1261, 3, 'Content', 'Setting up your business in Jafza', 2, '2017-10-08 05:53:30', '83.110.138.123'),
(1262, 3, 'Content', 'Setting up your business in Jafza', 2, '2017-10-08 05:54:57', '83.110.138.123'),
(1263, 3, 'Content', 'Setting up your business in Jafza', 2, '2017-10-08 05:55:21', '83.110.138.123'),
(1264, 3, 'Content', 'Auto Zone', 1, '2017-10-08 05:59:18', '83.110.138.123'),
(1265, 3, 'Content', 'Auto Zone', 2, '2017-10-08 06:05:25', '83.110.138.123'),
(1266, 3, 'Content', 'Ras Al Khaimah Free Trade Zone', 1, '2017-10-08 06:13:01', '83.110.138.123'),
(1267, 3, 'Content', 'Ajman Free Zone', 1, '2017-10-08 06:21:37', '83.110.138.123'),
(1268, 3, 'Content', 'BUSINESS SETUP IN SHARJAH', 2, '2017-10-08 06:23:30', '83.110.138.123'),
(1269, 3, 'Content', 'Business Setup in Ajman', 2, '2017-10-08 06:24:16', '83.110.138.123'),
(1270, 3, 'Content', 'BUSINESS SETUP IN DUBAI', 2, '2017-10-08 06:24:53', '83.110.138.123'),
(1271, 3, 'Content', 'BUSINESS SETUP IN ABU DHABI', 2, '2017-10-08 06:26:05', '83.110.138.123'),
(1272, 3, 'Content', 'BUSINESS SETUP IN FUJAIRAH', 2, '2017-10-08 06:26:58', '83.110.138.123'),
(1273, 3, 'Content', 'BUSINESS SETUP IN UMM AL-QUWAIN', 2, '2017-10-08 06:28:44', '83.110.138.123'),
(1274, 3, 'Content', 'BUSINESS SETUP IN FUJAIRAH', 2, '2017-10-08 06:29:21', '83.110.138.123'),
(1275, 3, 'Content', 'BUSINESS SETUP IN FUJAIRAH', 2, '2017-10-08 06:31:25', '83.110.138.123'),
(1276, 3, 'Content', 'BUSINESS SETUP IN ABU DHABI', 2, '2017-10-08 06:31:47', '83.110.138.123'),
(1277, 3, 'Content', 'Business Setup in Ajman', 2, '2017-10-08 06:32:26', '83.110.138.123'),
(1278, 3, 'Content', 'BUSINESS SETUP IN UMM AL-QUWAIN', 2, '2017-10-08 06:33:09', '83.110.138.123'),
(1279, 3, 'Content', 'BUSINESS SETUP IN DUBAI', 2, '2017-10-08 06:33:46', '83.110.138.123'),
(1280, 3, 'Content', 'First Business Mate', 1, '2017-10-08 06:42:55', '83.110.138.123'),
(1281, 3, 'Content', 'First Business Mate', 2, '2017-10-08 06:46:46', '83.110.138.123'),
(1282, 3, 'Content', 'First Business Mate', 2, '2017-10-08 06:47:20', '83.110.138.123'),
(1283, 3, 'Content', 'About Us', 2, '2017-10-08 06:51:29', '83.110.138.123'),
(1284, 3, 'Content', 'Massage From CEO', 2, '2017-10-08 06:58:44', '83.110.138.123'),
(1285, 3, 'Content', 'Massage From CEO', 2, '2017-10-08 07:03:07', '83.110.138.123'),
(1286, 3, 'Content', 'Massage From CEO', 2, '2017-10-08 07:08:33', '83.110.138.123'),
(1287, 3, 'Content', 'Massage From CEO', 2, '2017-10-08 07:09:25', '83.110.138.123'),
(1288, 3, 'Content', 'Business Setup', 2, '2017-10-08 07:21:28', '83.110.138.123'),
(1289, 3, 'Content', 'Abu Dhabi Airports Company', 1, '2017-10-08 07:42:40', '83.110.138.123'),
(1290, 3, 'Content', 'Abu Dhabi Airports Company', 2, '2017-10-08 07:47:35', '83.110.138.123'),
(1291, 3, 'Content', 'Abu Dhabi Ports Company', 1, '2017-10-08 07:53:54', '83.110.138.123'),
(1292, 3, 'Content', 'Abu Dhabi Ports Company', 2, '2017-10-08 07:57:26', '83.110.138.123'),
(1293, 3, 'Content', 'Creative City free zone', 1, '2017-10-08 08:07:55', '83.110.138.123'),
(1294, 3, 'Content', 'Serviced Offices', 2, '2017-10-08 08:24:42', '83.110.138.123'),
(1295, 3, 'Content', 'Serviced Offices', 2, '2017-10-08 08:29:08', '83.110.138.123'),
(1296, 3, 'Content', 'Serviced Offices', 2, '2017-10-08 08:31:22', '83.110.138.123'),
(1297, 3, 'Content', 'Serviced Offices', 2, '2017-10-08 08:31:56', '83.110.138.123'),
(1298, 3, 'Content', 'Serviced Offices', 2, '2017-10-08 08:33:02', '83.110.138.123'),
(1299, 3, 'Content', 'Our Services', 2, '2017-10-08 08:38:12', '83.110.138.123'),
(1300, 3, 'Content', 'Professional', 2, '2017-10-08 08:42:24', '83.110.138.123'),
(1301, 3, 'Content', 'Professional', 2, '2017-10-08 08:57:04', '83.110.138.123'),
(1302, 3, 'Content', 'Professional', 2, '2017-10-08 09:02:30', '83.110.138.123'),
(1303, 3, 'Content', 'Professional', 2, '2017-10-08 09:04:30', '83.110.138.123'),
(1304, 3, 'Content', 'Professional', 2, '2017-10-08 09:06:22', '83.110.138.123'),
(1305, 3, 'Content', 'Reliable', 2, '2017-10-08 09:15:00', '83.110.138.123'),
(1306, 3, 'Content', 'Devoted', 2, '2017-10-08 09:24:23', '83.110.138.123'),
(1307, 3, 'Content', 'Excellence', 2, '2017-10-08 09:33:46', '83.110.138.123'),
(1308, 3, 'pictures', 'Navigation', 2, '2017-10-08 10:14:39', '83.110.138.123'),
(1309, 3, 'Content', 'fsdfsd', 1, '2017-10-08 10:36:13', '83.110.138.123'),
(1310, 3, 'Content', 'fsdfsd', 2, '2017-10-08 10:36:58', '83.110.138.123'),
(1311, 3, 'Content', 'fsdfsd', 2, '2017-10-08 10:38:30', '83.110.138.123'),
(1312, 3, 'Content', 'fsdfsd', 3, '2017-10-08 10:43:24', '83.110.138.123'),
(1313, 3, 'Content', 'Setting up your business in Jafza', 2, '2017-10-08 10:45:25', '83.110.138.123'),
(1314, 3, 'Content', 'Creative City free zone', 2, '2017-10-08 11:25:19', '83.110.138.123'),
(1315, 3, 'Content', 'Abu Dhabi Ports Company', 2, '2017-10-08 11:27:25', '83.110.138.123'),
(1316, 3, 'pictures', 'Navigation', 2, '2017-10-08 11:28:32', '83.110.138.123'),
(1317, 3, 'Content', 'Ajman Free Zone', 2, '2017-10-08 11:29:35', '83.110.138.123'),
(1318, 3, 'Content', 'Sharjah Mainland Business Setup ', 2, '2017-10-08 13:45:18', '83.110.138.123'),
(1319, 3, 'Slider', 'Making Business Fast And Safe', 2, '2017-10-08 14:42:35', '83.110.138.123'),
(1320, 3, 'Content', 'Businessmen Services', 2, '2017-10-08 14:49:21', '83.110.138.123'),
(1321, 3, 'Slider', 'We Value Your Time And Money', 2, '2017-10-08 14:50:29', '83.110.138.123'),
(1322, 3, 'Slider', 'Your Business Dream now will be reality', 2, '2017-10-08 14:52:18', '83.110.138.123'),
(1323, 3, 'Slider', 'Your Business Dream now will be reality', 2, '2017-10-08 14:55:45', '83.110.138.123'),
(1324, 3, 'Content', 'PRO SERVICES', 2, '2017-10-08 15:01:03', '83.110.138.123'),
(1325, 3, 'Content', 'PRO SERVICES', 2, '2017-10-08 15:01:47', '83.110.138.123'),
(1326, 3, 'Content', 'Business Setup In UAE', 2, '2017-10-08 15:07:01', '83.110.138.123'),
(1327, 3, 'Content', 'Get Expert Consultation for company formation in Dubai', 2, '2017-10-08 15:13:23', '83.110.138.123'),
(1328, 3, 'Content', 'Get Expert Consultation for company formation in Dubai', 2, '2017-10-08 15:14:48', '83.110.138.123'),
(1329, 3, 'Content', 'Get Expert Consultation for company formation in Dubai', 2, '2017-10-08 15:15:24', '83.110.138.123'),
(1330, 3, 'Content', 'Get Expert Consultation for company formation in Dubai', 2, '2017-10-08 15:16:54', '83.110.138.123'),
(1331, 3, 'Content', 'FREE BUSINESS CONSULTING', 1, '2017-10-08 15:32:58', '83.110.138.123'),
(1332, 3, 'Content', 'Abu Dhabi Airports Company', 2, '2017-10-08 15:38:19', '83.110.138.123'),
(1333, 3, 'Content', 'Abu Dhabi Airports Company', 2, '2017-10-08 15:40:22', '83.110.138.123'),
(1334, 3, 'Content', 'Abu Dhabi Airports Company', 2, '2017-10-08 15:44:26', '83.110.138.123'),
(1335, 3, 'Content', 'Sharjah Mainland Business Setup ', 3, '2017-10-08 15:45:36', '83.110.138.123'),
(1336, 3, 'Content', 'Sharjah Mainland Business Setup ', 1, '2017-10-08 15:54:46', '83.110.138.123'),
(1337, 3, 'Content', 'Dubai Mainland Business Setup', 1, '2017-10-08 16:10:03', '83.110.138.123'),
(1338, 3, 'Content', 'Dubai Mainland Business Setup', 2, '2017-10-08 16:17:05', '83.110.138.123'),
(1339, 3, 'Content', 'BUSINESS SETUP IN SHARJAH', 2, '2017-10-08 16:45:57', '83.110.138.123'),
(1340, 3, 'Content', 'HOW TO ESTABLISH YOUR BUSINESS SETUP IN DUBAI', 2, '2017-10-08 17:04:21', '83.110.138.123'),
(1341, 3, 'Content', 'Abudhabi Mainland Business setup', 1, '2017-10-09 00:02:14', '83.110.138.123'),
(1342, 3, 'Content', 'Abudhabi Mainland Business setup', 2, '2017-10-09 00:05:56', '83.110.138.123'),
(1343, 3, 'Content', 'Ajman Mainland Business Setup', 1, '2017-10-09 00:20:49', '83.110.138.123'),
(1344, 3, 'Content', 'Dubai Airport Freezone', 1, '2017-10-09 00:21:23', '83.110.138.123'),
(1345, 3, 'Content', 'UAQ Free trade Zone', 1, '2017-10-09 00:30:36', '83.110.138.123'),
(1346, 3, 'Content', 'Dubai Airport Freezone', 2, '2017-10-09 00:37:04', '83.110.138.123'),
(1347, 3, 'Content', 'Dubai Airport Freezone', 2, '2017-10-09 00:38:26', '83.110.138.123'),
(1348, 3, 'Slider', 'Your Business Dream now will be reality', 2, '2017-10-09 00:41:47', '83.110.138.123'),
(1349, 3, 'Content', 'Ahmed Bin Rashid Port & Free Zone Authority', 1, '2017-10-09 00:42:02', '83.110.138.123'),
(1350, 3, 'Content', 'Ras Al Khaimah Mainland', 1, '2017-10-09 00:54:54', '83.110.138.123'),
(1351, 3, 'Package Review', 'Divine Creation', 2, '2017-10-09 00:57:08', '83.110.138.123'),
(1352, 3, 'Package Review', 'Jinvo corpoation', 2, '2017-10-09 00:57:37', '83.110.138.123'),
(1353, 3, 'Content', 'Fujairah Mainland Business Setup', 1, '2017-10-09 01:09:03', '83.110.138.123'),
(1354, 3, 'Content', 'Umm al-Quwain Mainland Business Setup', 1, '2017-10-09 01:14:16', '83.110.138.123'),
(1355, 3, 'Content', 'Visa Service', 1, '2017-10-09 02:27:53', '83.110.138.123'),
(1356, 3, 'Content', 'Emirates ID Typing', 1, '2017-10-09 02:41:13', '83.110.138.123'),
(1357, 3, 'Content', 'Emirates ID Typing', 2, '2017-10-09 02:41:55', '83.110.138.123'),
(1358, 3, 'Content', 'License Renewal', 1, '2017-10-09 02:49:21', '83.110.138.123'),
(1359, 3, 'Content', 'Sponsorship', 1, '2017-10-09 02:59:58', '83.110.138.123'),
(1360, 3, 'Content', 'Dubai Mainland Business Setup', 2, '2017-10-09 03:05:21', '83.110.138.123'),
(1361, 3, 'Content', 'Fujairah Mainland Business Setup', 2, '2017-10-09 03:05:34', '83.110.138.123'),
(1362, 3, 'Content', 'Umm al-Quwain Mainland Business Setup', 2, '2017-10-09 03:05:47', '83.110.138.123'),
(1363, 3, 'Content', 'Ras Al Khaimah Mainland', 2, '2017-10-09 03:05:59', '83.110.138.123'),
(1364, 3, 'Content', 'Ajman Mainland Business Setup', 2, '2017-10-09 03:06:14', '83.110.138.123'),
(1365, 3, 'Content', 'Abudhabi Mainland Business setup', 2, '2017-10-09 03:06:28', '83.110.138.123'),
(1366, 3, 'Content', 'Sharjah Mainland Business Setup ', 2, '2017-10-09 03:07:29', '83.110.138.123'),
(1367, 3, 'Content', 'License Installment plan', 1, '2017-10-09 03:17:06', '83.110.138.123'),
(1368, 3, 'Content', 'License Installment plan', 2, '2017-10-09 03:25:52', '83.110.138.123'),
(1369, 3, 'Content', 'License Installment plan', 2, '2017-10-09 03:28:25', '83.110.138.123'),
(1370, 3, 'Content', 'Other typing services', 1, '2017-10-09 03:36:16', '83.110.138.123'),
(1371, 3, 'Content', 'OPENING OF CORPORATE BANK ACCOUNTS', 2, '2017-10-09 03:36:57', '83.110.138.123'),
(1372, 3, 'Content', 'OPENING OF CORPORATE BANK ACCOUNTS', 2, '2017-10-09 03:37:19', '83.110.138.123'),
(1373, 3, 'Content', 'License Installment plan', 2, '2017-10-09 03:44:29', '83.110.138.123'),
(1374, 3, 'Content', 'License &amp; Installment plan', 2, '2017-10-09 05:35:21', '83.110.138.123'),
(1375, 3, 'Content', 'License and office Installment plan', 2, '2017-10-09 05:36:09', '83.110.138.123'),
(1376, 3, 'Content', 'Business Setup in Ajman', 2, '2017-10-09 05:40:06', '83.110.138.123'),
(1377, 3, 'Content', 'Sponsorship', 2, '2017-10-09 05:41:07', '83.110.138.123'),
(1378, 3, 'Content', 'Sponsorship', 2, '2017-10-09 05:42:54', '83.110.138.123'),
(1379, 3, 'Content', 'Other typing services', 2, '2017-10-09 06:03:58', '83.110.138.123'),
(1380, 3, 'Content', 'HOW TO ESTABLISH YOUR BUSINESS SETUP IN DUBAI', 2, '2017-10-09 15:18:31', '83.110.138.123'),
(1381, 3, 'Content', 'WHY DO I NEED LOCAL SPONSORSHIP FOR MY BUSINESS SETUP IN DUBAI', 2, '2017-10-09 15:23:59', '83.110.138.123'),
(1382, 3, 'Content', 'HOW TO SETUP YOUR BUSINESS SETUP IN DUBAI', 2, '2017-10-09 15:26:52', '83.110.138.123'),
(1383, 3, 'Email Settings', 'Mail Server', 2, '2017-10-12 03:57:45', '83.110.138.123'),
(1384, 3, 'Email Settings', 'Admin Email', 2, '2017-10-12 03:57:54', '83.110.138.123'),
(1385, 3, 'Content', 'Other typing services', 2, '2017-10-12 11:12:01', '31.215.104.185'),
(1386, 3, 'FAQ', 'Why choose the United Arab Emirates to incorporate my company?', 2, '2017-10-12 12:30:18', '31.215.104.185'),
(1387, 3, 'Product', 'KUMHO', 3, '2017-11-14 20:54:09', '::1'),
(1388, 3, 'Email Settings', 'Mail Server', 2, '2017-11-15 07:49:29', '::1'),
(1389, 3, 'Email Settings', 'Mail Server', 2, '2017-11-15 07:50:31', '::1'),
(1390, 3, 'pictures', 'Logo', 2, '2017-11-15 08:24:28', '::1'),
(1391, 3, 'pictures', 'Logo', 2, '2017-11-15 08:29:20', '::1'),
(1392, 3, 'Product', 'CINTURATO P7 BLUE', 3, '2017-11-15 09:34:46', '::1'),
(1393, 3, 'Content', 'Other typing services', 3, '2017-11-15 09:37:03', '::1'),
(1394, 3, 'Content', 'License and office Installment plan', 3, '2017-11-15 09:37:08', '::1'),
(1395, 3, 'Content', 'Sponsorship', 3, '2017-11-15 09:37:11', '::1'),
(1396, 3, 'Content', 'PRO SERVICES', 3, '2017-11-15 09:37:14', '::1'),
(1397, 3, 'Content', 'License Renewal', 3, '2017-11-15 09:38:14', '::1'),
(1398, 3, 'Content', 'Ras Al Khaimah Mainland', 3, '2017-11-15 09:38:35', '::1'),
(1399, 3, 'Content', 'COMPANY REGISTRATION', 3, '2017-11-15 09:38:48', '::1'),
(1400, 3, 'Content', 'TRADE LICENSE APPLICATION', 3, '2017-11-15 09:38:49', '::1'),
(1401, 3, 'Content', 'tes', 1, '2017-11-15 09:39:07', '::1'),
(1402, 3, 'Content', 'tes', 3, '2017-11-15 09:39:23', '::1'),
(1403, 3, 'Content', 'OPENING OF CORPORATE BANK ACCOUNTS', 3, '2017-11-15 09:49:55', '::1'),
(1404, 3, 'Content', 'Emirates ID Typing', 3, '2017-11-15 09:51:05', '::1'),
(1405, 3, 'Content', 'Visa Service', 3, '2017-11-15 09:51:07', '::1'),
(1406, 3, 'Content', 'FREE BUSINESS CONSULTING', 3, '2017-11-15 09:51:09', '::1'),
(1407, 3, 'Content', 'RELOCATION SERVICES', 3, '2017-11-15 09:51:11', '::1'),
(1408, 3, 'Content', 'Vat registration, vat implementation and vat return Filing', 1, '2017-11-15 09:52:03', '::1'),
(1409, 3, 'Content', 'Vat registration, vat implementation and vat return Filing', 2, '2017-11-15 09:53:23', '::1'),
(1410, 3, 'Content', 'Vat registration, vat implementation and vat return Filing', 2, '2017-11-15 09:54:12', '::1'),
(1411, 3, 'Content', 'sdfs', 2, '2017-11-15 11:30:04', '::1'),
(1412, 3, 'Content', 'Vat registration,  implementation and vat return Filing', 2, '2017-11-15 11:31:06', '::1'),
(1413, 3, 'Content', 'Vat registration,  implementation and vat return Filing', 2, '2017-11-15 11:32:22', '::1'),
(1414, 3, 'Content', 'Vat registration,  implementation and vat return Filing', 2, '2017-11-15 11:33:54', '::1'),
(1415, 3, 'Content', 'Vat registration,  implementation and vat return Filing', 2, '2017-11-15 11:34:33', '::1'),
(1416, 3, 'Content', 'Vat registration,  implementation and vat return Filing', 2, '2017-11-15 11:43:11', '::1'),
(1417, 3, 'Content', 'Vat registration,  implementation &  vat return Filing', 2, '2017-11-15 11:43:40', '::1'),
(1418, 3, 'Content', 'Vat registration,  implementation &  vat return Filing', 2, '2017-11-15 11:44:09', '::1'),
(1419, 3, 'Content', 'Vat registration,  implementation and  vat return Filing', 2, '2017-11-15 11:45:20', '::1'),
(1420, 3, 'Content', 'Outsourced accounting and bookkeeping Services', 1, '2017-11-15 14:00:57', '::1'),
(1421, 3, 'Content', 'Setting up accounting Systems', 1, '2017-11-15 14:01:21', '::1'),
(1422, 3, 'Content', 'Internal Audit', 1, '2017-11-15 14:01:50', '::1'),
(1423, 3, 'Content', 'Management Audit', 1, '2017-11-15 14:02:12', '::1'),
(1424, 3, 'Subscribers', 'Subscribers Id (4)', 3, '2017-11-15 16:27:42', '::1'),
(1425, 3, 'Subscribers', 'Subscribers Id (24)', 3, '2017-11-15 16:27:57', '::1'),
(1426, 3, 'Subscribers', 'Subscribers Id (17)', 3, '2017-11-15 16:28:00', '::1'),
(1427, 3, 'Subscribers', 'Subscribers Id (7)', 2, '2017-11-15 16:28:33', '::1'),
(1428, 3, 'Subscribers', 'Subscribers Id (7)', 2, '2017-11-15 16:28:35', '::1'),
(1429, 3, 'Content', 'UAQ Free trade Zone', 3, '2017-11-15 16:30:08', '::1'),
(1430, 3, 'Content', 'Ajman Mainland Business Setup', 3, '2017-11-15 16:30:14', '::1'),
(1431, 3, 'Content', 'Management Audit', 3, '2017-11-15 16:31:30', '::1'),
(1432, 3, 'Content', 'Businessmen Services', 3, '2017-11-15 16:34:22', '::1'),
(1433, 3, 'Subscribers', 'Subscribers Id (7)', 2, '2017-11-15 16:38:12', '::1'),
(1434, 3, 'Subscribers', 'Subscribers Id (7)', 2, '2017-11-15 16:38:14', '::1'),
(1435, 3, 'Content', 'Dubai Mainland Business Setup', 3, '2017-11-15 16:47:37', '::1'),
(1436, 3, 'Content', 'Sharjah Mainland Business Setup ', 3, '2017-11-15 16:47:41', '::1'),
(1437, 3, 'Content', 'Creative City free zone', 3, '2017-11-15 16:47:45', '::1'),
(1438, 3, 'Content', 'Abu Dhabi Ports Company', 3, '2017-11-15 16:47:47', '::1'),
(1439, 3, 'Content', 'Abu Dhabi Airports Company', 3, '2017-11-15 16:47:50', '::1'),
(1440, 3, 'Content', 'First Business Mate', 3, '2017-11-15 16:47:53', '::1'),
(1441, 3, 'Content', 'Ajman Free Zone', 3, '2017-11-15 16:47:56', '::1'),
(1442, 3, 'Content', 'Ras Al Khaimah Free Trade Zone', 3, '2017-11-15 16:47:59', '::1'),
(1443, 3, 'Content', 'Auto Zone', 3, '2017-11-15 16:48:02', '::1'),
(1444, 3, 'Content', 'Setting up your business in Jafza', 3, '2017-11-15 16:48:05', '::1'),
(1445, 3, 'Content', 'BUSINESS SETUP IN SHARJAH', 3, '2017-11-15 16:48:08', '::1'),
(1446, 3, 'Content', 'BUSINESS SETUP IN DUBAI', 3, '2017-11-15 16:48:12', '::1'),
(1447, 3, 'Content', 'BUSINESS SETUP IN UMM AL-QUWAIN', 3, '2017-11-15 16:48:16', '::1'),
(1448, 3, 'Content', 'BUSINESS SETUP IN FUJAIRAH', 3, '2017-11-15 16:48:20', '::1'),
(1449, 3, 'Content', 'BUSINESS SETUP IN ABU DHABI', 3, '2017-11-15 16:48:23', '::1'),
(1450, 3, 'Content', 'Hamriyah Free Zone Authority', 3, '2017-11-15 16:48:25', '::1'),
(1451, 3, 'Content', 'Sharjah Airport Freezone Saif Zone', 3, '2017-11-15 16:48:28', '::1'),
(1452, 3, 'Content', 'Business Setup', 3, '2017-11-15 16:48:31', '::1'),
(1453, 3, 'Content', 'Excellence', 3, '2017-11-15 16:48:35', '::1'),
(1454, 3, 'Content', 'Devoted', 3, '2017-11-15 16:48:39', '::1'),
(1455, 3, 'Content', 'Reliable', 3, '2017-11-15 16:48:42', '::1'),
(1456, 3, 'Content', 'Professional', 3, '2017-11-15 16:48:45', '::1'),
(1457, 3, 'Content', 'Our Professional Team', 3, '2017-11-15 16:48:47', '::1'),
(1458, 3, 'Content', 'Abudhabi Mainland Business setup', 3, '2017-11-15 16:48:52', '::1'),
(1459, 3, 'Content', 'Dubai Airport Freezone', 3, '2017-11-15 16:48:57', '::1'),
(1460, 3, 'Content', 'Ahmed Bin Rashid Port & Free Zone Authority', 3, '2017-11-15 16:49:06', '::1'),
(1461, 3, 'Content', 'Fujairah Mainland Business Setup', 3, '2017-11-15 16:49:12', '::1'),
(1462, 3, 'Content', 'Umm al-Quwain Mainland Business Setup', 3, '2017-11-15 16:49:16', '::1'),
(1463, 3, 'Content', 'Business Setup in Ajman', 3, '2017-11-15 16:49:27', '::1'),
(1464, 3, 'Content', 'Business Setup In UAE', 3, '2017-11-15 16:49:33', '::1'),
(1465, 3, 'Content', 'Business Setup in RAS Al-Khaimah', 3, '2017-11-15 16:49:44', '::1'),
(1466, 3, 'Quick Contact', 'Message Id (4)', 3, '2017-11-15 16:52:35', '::1'),
(1467, 3, 'Content', 'Welcome to Chartered ', 2, '2017-11-15 17:10:54', '::1'),
(1468, 3, 'Content', 'Welcome to Chartered Tax Consultant', 2, '2017-11-15 17:11:18', '::1'),
(1469, 3, 'Content', 'Welcome to CTC', 2, '2017-11-15 17:11:39', '::1'),
(1470, 3, 'Content', 'Management Audit', 1, '2017-11-15 17:22:00', '::1'),
(1471, 3, 'Content', 'Working Capital management', 1, '2017-11-15 17:22:20', '::1'),
(1472, 3, 'Content', 'About Us', 2, '2017-11-15 17:24:42', '::1'),
(1473, 3, 'Content', 'About Us', 2, '2017-11-15 19:12:33', '::1'),
(1474, 3, 'Content', 'About Us', 2, '2017-11-15 19:20:32', '::1'),
(1475, 3, 'Content', 'Our Services', 2, '2017-11-15 19:35:40', '::1'),
(1476, 3, 'Content', 'Our Services', 2, '2017-11-15 19:38:54', '::1'),
(1477, 3, 'Content', 'Vat registration,  implementation and  vat return Filing', 2, '2017-11-15 19:51:06', '::1'),
(1478, 3, 'Content', 'Outsourced accounting and bookkeeping Services', 2, '2017-11-15 19:54:07', '::1'),
(1479, 3, 'Content', 'Setting up accounting Systems', 2, '2017-11-15 19:55:05', '::1'),
(1480, 3, 'Content', 'Working Capital management', 2, '2017-11-15 19:56:41', '::1'),
(1481, 3, 'Content', 'Internal Audit', 2, '2017-11-15 19:57:40', '::1'),
(1482, 3, 'Content', 'Management Audit', 2, '2017-11-15 19:58:38', '::1'),
(1483, 3, 'Content', 'Why Chartered Tax', 2, '2017-11-16 06:21:07', '::1'),
(1484, 3, 'Content', 'How does it works ?', 2, '2017-11-16 06:21:31', '::1'),
(1485, 3, 'Content', 'FAQ', 2, '2017-11-16 07:56:20', '::1'),
(1486, 3, 'FAQ', 'What are the different types of company structures in the UAE?', 3, '2017-11-16 13:33:03', '::1'),
(1487, 3, 'FAQ', 'Why choose the United Arab Emirates to incorporate my company?', 3, '2017-11-16 13:33:39', '::1'),
(1488, 3, 'FAQ', 'Why choose Dubai Setup to incorporate in the UAE?', 3, '2017-11-16 13:33:42', '::1'),
(1489, 3, 'FAQ', 'What is VAT ?', 1, '2017-11-16 13:34:20', '::1'),
(1490, 3, 'FAQ', 'How does it work ?', 1, '2017-11-16 13:40:39', '::1'),
(1491, 3, 'FAQ', 'How does it work ?', 2, '2017-11-16 13:43:03', '::1'),
(1492, 3, 'FAQ', 'Why a Consultant is needed?', 1, '2017-11-16 13:45:49', '::1'),
(1493, 3, 'FAQ', 'How CTC can help you ?', 1, '2017-11-16 13:46:24', '::1'),
(1494, 3, 'Content', 'Why Choose Us ?', 2, '2017-11-16 14:13:35', '::1'),
(1495, 3, 'Team', 'Akbar Sintal', 3, '2017-11-16 15:02:27', '::1'),
(1496, 3, 'Team', 'Simran Khan', 2, '2017-11-16 15:19:40', '::1'),
(1497, 3, 'Team', 'Simran Khan', 2, '2017-11-16 15:24:49', '::1'),
(1498, 3, 'Team', 'Simran Khan', 2, '2017-11-16 15:25:19', '::1'),
(1499, 3, 'Team', 'Birat Kohali', 2, '2017-11-16 15:25:32', '::1'),
(1500, 3, 'Team', 'Subash Ghai', 2, '2017-11-16 15:25:43', '::1'),
(1501, 3, 'Team', 'Seikh Al Rasid ', 1, '2017-11-16 15:26:47', '::1'),
(1502, 3, 'Content', 'Why Chartered Tax', 2, '2017-11-16 16:49:13', '::1'),
(1503, 3, 'Content', 'How does it works ?', 2, '2017-11-16 16:49:28', '::1'),
(1504, 3, 'Content', 'How does it works ?', 2, '2017-11-16 16:55:51', '::1'),
(1505, 3, 'Content', 'VAT registration,  Implementation and  VAT return Filing', 2, '2017-11-17 03:18:00', '83.110.136.62'),
(1506, 3, 'Content', 'VAT registration,  Implementation and  VAT return Filing', 2, '2017-11-17 03:18:48', '83.110.136.62'),
(1507, 3, 'Content', 'VAT registration,  Implementation and  VAT return Filing', 2, '2017-11-17 03:23:22', '83.110.136.62'),
(1508, 3, 'Content', 'VAT registration,  Implementation and  VAT return Filing', 2, '2017-11-17 03:25:45', '83.110.136.62'),
(1509, 3, 'Content', 'VAT registration,  Implementation and  VAT return Filing', 2, '2017-11-17 03:26:08', '83.110.136.62'),
(1510, 3, 'Content', 'VAT registration,  Implementation and  VAT return Filing', 2, '2017-11-17 03:27:23', '83.110.136.62'),
(1511, 3, 'Content', 'VAT registration,  Implementation and  VAT return Filing', 2, '2017-11-17 03:28:00', '83.110.136.62'),
(1512, 3, 'Content', ' VAT in UAE', 2, '2017-11-17 03:50:03', '83.110.136.62'),
(1513, 3, 'Content', 'Things know about VAT ', 2, '2017-11-17 04:01:32', '83.110.136.62'),
(1514, 3, 'Content', 'Things to  know about VAT ', 2, '2017-11-17 04:01:49', '83.110.136.62'),
(1515, 3, 'Content', 'VAT registration,  Implementation and  VAT return Filing', 2, '2017-11-17 04:04:30', '83.110.136.62'),
(1516, 3, 'Slider', 'fa', 1, '2017-11-17 08:35:15', '83.110.136.62'),
(1517, 3, 'Slider', 'fa', 1, '2017-11-17 08:35:51', '83.110.136.62'),
(1518, 3, 'Slider', 'fa', 2, '2017-11-17 08:36:05', '83.110.136.62'),
(1519, 3, 'Slider', 'Making Business Fast And Safe', 2, '2017-11-17 08:37:39', '83.110.136.62'),
(1520, 3, 'Slider', 'We Value Your Time And Money', 2, '2017-11-17 08:38:47', '83.110.136.62'),
(1521, 3, 'Slider', 'fa', 3, '2017-11-17 08:38:56', '83.110.136.62'),
(1522, 3, 'Slider', 'Your Business Dream now will be reality', 2, '2017-11-17 08:40:33', '83.110.136.62'),
(1523, 3, 'Slider', 'One of the best TAX Consultant in UAE', 2, '2017-11-17 08:43:03', '83.110.136.62'),
(1524, 3, 'Slider', 'One of the best TAX Consultant in UAE', 2, '2017-11-17 08:43:53', '83.110.136.62'),
(1525, 3, 'Slider', 'Making Business Fast And Safe', 2, '2017-11-17 08:45:28', '83.110.136.62'),
(1526, 3, 'Slider', 'Making Business Fast And Safe', 2, '2017-11-17 08:46:46', '83.110.136.62'),
(1527, 3, 'Slider', 'Making Business Fast And Safe', 2, '2017-11-17 09:01:18', '83.110.136.62'),
(1528, 3, 'Slider', 'Making Business Fast And Safe', 2, '2017-11-17 09:03:17', '83.110.136.62'),
(1529, 3, 'Slider', 'Making Business Fast And Safe', 2, '2017-11-17 09:03:53', '83.110.136.62'),
(1530, 3, 'Slider', 'Making Business Fast And Safe', 2, '2017-11-17 09:05:11', '83.110.136.62'),
(1531, 3, 'Slider', 'We Value Your Time And Money', 2, '2017-11-17 09:06:45', '83.110.136.62'),
(1532, 3, 'Slider', 'We Value Your Time And Money', 2, '2017-11-17 09:07:17', '83.110.136.62'),
(1533, 3, 'Slider', 'Your Business Dream now will be reality', 2, '2017-11-17 09:09:06', '83.110.136.62'),
(1534, 3, 'Slider', 'Your Business Dream now will be reality', 2, '2017-11-17 09:10:26', '83.110.136.62'),
(1535, 3, 'Slider', 'We Value Your Time And Money', 2, '2017-11-17 09:14:00', '83.110.136.62'),
(1536, 3, 'Slider', 'Your Business Dream now will be reality', 2, '2017-11-17 09:14:58', '83.110.136.62'),
(1537, 3, 'Content', 'Working Capital management', 2, '2017-11-17 09:55:32', '83.110.136.62'),
(1538, 3, 'Content', 'Management Audit', 2, '2017-11-17 09:55:44', '83.110.136.62'),
(1539, 3, 'Content', 'Internal Audit', 2, '2017-11-17 09:55:54', '83.110.136.62'),
(1540, 3, 'Content', 'Setting up accounting Systems', 2, '2017-11-17 09:56:06', '83.110.136.62'),
(1541, 3, 'Content', 'Outsourced accounting and bookkeeping Services', 2, '2017-11-17 09:57:17', '83.110.136.62'),
(1542, 3, 'Content', 'Outsourced accounting and bookkeeping Services', 2, '2017-11-17 09:57:57', '83.110.136.62'),
(1543, 3, 'Content', 'VAT registration,  Implementation and  VAT return Filing', 2, '2017-11-17 09:58:11', '83.110.136.62'),
(1544, 3, 'Content', 'VAT registration', 2, '2017-11-17 10:33:22', '83.110.136.62'),
(1545, 3, 'Content', 'VAT Implementation', 1, '2017-11-17 10:35:25', '83.110.136.62'),
(1546, 3, 'Content', 'VAT Implementation', 2, '2017-11-17 10:36:12', '83.110.136.62'),
(1547, 3, 'Content', 'VAT return Filing', 1, '2017-11-17 10:37:44', '83.110.136.62'),
(1548, 3, 'Content', 'VAT Implementation', 2, '2017-11-17 10:38:21', '83.110.136.62'),
(1549, 3, 'Content', 'VAT registration', 2, '2017-11-17 10:42:42', '83.110.136.62'),
(1550, 3, 'Content', 'VAT registration', 2, '2017-11-17 10:43:10', '83.110.136.62'),
(1551, 3, 'Content', 'Setting up accounting Systems', 2, '2017-11-17 10:45:51', '83.110.136.62'),
(1552, 3, 'Content', 'Internal Audit', 2, '2017-11-17 10:47:35', '83.110.136.62'),
(1553, 3, 'Content', 'Outsourced accounting and bookkeeping Services', 2, '2017-11-17 10:51:58', '83.110.136.62'),
(1554, 3, 'Content', 'Working Capital management', 2, '2017-11-17 10:57:30', '83.110.136.62'),
(1555, 3, 'Content', ' VAT in UAE', 2, '2017-11-17 10:58:10', '83.110.136.62'),
(1556, 3, 'Content', ' VAT in UAE', 2, '2017-11-17 10:58:45', '83.110.136.62'),
(1557, 3, 'Content', 'How to prepare invoice for VAT in UAE ?', 1, '2017-11-17 11:05:36', '83.110.136.62'),
(1558, 3, 'Content', 'How to prepare invoice for VAT in UAE ?', 2, '2017-11-17 11:06:52', '83.110.136.62'),
(1559, 3, 'Content', 'How to prepare invoice for VAT in UAE ?', 2, '2017-11-17 11:09:01', '83.110.136.62'),
(1560, 3, 'Content', 'How to prepare invoice for VAT in UAE ?', 2, '2017-11-17 11:11:06', '83.110.136.62'),
(1561, 3, 'Content', 'How to Register  VAT in the UAE ?', 1, '2017-11-17 11:15:57', '83.110.136.62'),
(1562, 3, 'Content', 'VAT registration', 2, '2017-11-17 11:18:46', '83.110.136.62'),
(1563, 3, 'Content', 'VAT registration', 2, '2017-11-17 11:19:49', '83.110.136.62'),
(1564, 3, 'Team', 'CA.Milan Bhandari', 2, '2017-11-17 11:21:33', '83.110.136.62'),
(1565, 3, 'Team', 'CA. Amrit Khadka ', 2, '2017-11-17 11:22:18', '83.110.136.62'),
(1566, 3, 'Team', 'Sahil Man Singh Pradhan', 2, '2017-11-17 11:23:09', '83.110.136.62'),
(1567, 3, 'Team', 'Seikh Al Rasid ', 3, '2017-11-17 11:23:13', '83.110.136.62'),
(1568, 3, 'Team', 'CA.Milan Bhandari', 2, '2017-11-17 11:26:10', '83.110.136.62'),
(1569, 3, 'Team', 'CA. Amrit Khadka ', 2, '2017-11-17 11:26:22', '83.110.136.62'),
(1570, 3, 'Team', 'Sahil Man Singh Pradhan', 2, '2017-11-17 11:26:33', '83.110.136.62'),
(1571, 3, 'Content', 'Why Choose Us ?', 2, '2017-11-17 11:28:30', '83.110.136.62'),
(1572, 3, 'Content', 'About Us', 2, '2017-11-17 11:30:00', '83.110.136.62'),
(1573, 3, 'Slider', 'Making Taxes Easy', 2, '2017-11-17 13:23:49', '83.110.136.62'),
(1574, 3, 'Slider', 'Trust, Quality, and Expertise.', 2, '2017-11-17 13:25:38', '83.110.136.62'),
(1575, 3, 'Content', 'VAT registration', 2, '2017-11-17 13:34:59', '83.110.136.62'),
(1576, 3, 'Content', 'Outsourced accounting and bookkeeping Services', 2, '2017-11-17 13:35:34', '83.110.136.62'),
(1577, 3, 'Content', 'Outsourced accounting and bookkeeping Services', 2, '2017-11-17 13:41:26', '83.110.136.62'),
(1578, 3, 'Content', 'Setting up accounting Systems', 2, '2017-11-17 13:41:41', '83.110.136.62'),
(1579, 3, 'Content', 'Management Audit', 2, '2017-11-17 13:42:38', '83.110.136.62'),
(1580, 3, 'Content', 'Working Capital management', 2, '2017-11-17 13:43:23', '83.110.136.62'),
(1581, 3, 'Content', 'VAT Implementation', 2, '2017-11-17 13:54:23', '83.110.136.62'),
(1582, 3, 'Content', 'VAT return Filing', 2, '2017-11-17 13:54:50', '83.110.136.62'),
(1583, 3, 'Content', 'Internal Audit', 2, '2017-11-17 13:55:09', '83.110.136.62'),
(1584, 3, 'Content', 'Setting up accounting Systems', 2, '2017-11-17 13:55:21', '83.110.136.62'),
(1585, 3, 'Content', 'Management Audit', 2, '2017-11-17 14:04:31', '83.110.136.62'),
(1586, 3, 'Subscribers', 'Subscribers Id (25)', 3, '2017-11-18 00:36:58', '83.110.136.62'),
(1587, 3, 'Subscribers', 'Subscribers Id (26)', 3, '2017-11-18 00:38:50', '83.110.136.62'),
(1588, 3, 'Email Settings', 'Admin Email', 2, '2017-11-18 00:45:19', '83.110.136.62'),
(1589, 3, 'Email Settings', 'Mail Server', 2, '2017-11-18 00:46:16', '83.110.136.62'),
(1590, 3, 'Email Settings', 'Mail Server', 2, '2017-11-18 00:48:03', '83.110.136.62'),
(1591, 3, 'Job', 'internal am', 1, '2017-11-18 00:57:38', '83.110.136.62'),
(1592, 3, 'Content', 'Things to  know about VAT ', 3, '2017-11-18 02:47:32', '83.110.136.62'),
(1593, 3, 'Content', 'How to Register  for VAT in the UAE ?', 2, '2017-11-21 07:00:31', '94.206.51.34'),
(1594, 3, 'Team', 'CA Milan Bhandari', 2, '2017-11-21 07:02:48', '94.206.51.34'),
(1595, 3, 'Team', 'CA. Amrit Khadka ', 2, '2017-11-21 07:03:57', '94.206.51.34'),
(1596, 3, 'Content', 'Test', 1, '2017-12-11 11:46:55', '83.110.6.154'),
(1597, 3, 'Content', 'tesdsfsafsdf', 1, '2017-12-11 11:49:51', '83.110.6.154'),
(1598, 3, 'Content', 'fsdfdsffdsa', 1, '2017-12-11 11:50:44', '83.110.6.154'),
(1599, 3, 'Content', 'tesdsfsafsdf', 3, '2017-12-11 11:56:01', '83.110.6.154'),
(1600, 3, 'Content', 'sdafsdfsafsdffadf', 2, '2017-12-11 11:56:19', '83.110.6.154'),
(1601, 3, 'Content', 'sdafsdfsafsdffadf', 2, '2017-12-11 12:06:40', '83.110.6.154'),
(1602, 3, 'Content', 'sdafsdfsafsdffadf', 3, '2017-12-11 12:07:47', '83.110.6.154'),
(1603, 3, 'Content', 'Test', 3, '2017-12-11 12:07:50', '83.110.6.154'),
(1604, 3, 'Content', 'What is Tax?', 1, '2017-12-11 12:09:49', '83.110.6.154'),
(1605, 3, 'Content', 'What is VAT?', 1, '2017-12-11 12:10:20', '83.110.6.154'),
(1606, 3, 'Content', 'What is the difference between VAT and Sales Tax?', 1, '2017-12-11 12:10:55', '83.110.6.154'),
(1607, 3, 'Content', 'Why is the UAE implementing VAT?', 1, '2017-12-11 12:11:24', '83.110.6.154'),
(1608, 3, 'pictures', 'Logo', 2, '2017-12-21 13:50:25', '::1'),
(1609, 3, 'Content', 'Cleaning With a Conscience', 2, '2017-12-21 14:11:02', '::1'),
(1610, 3, 'Content', 'Cleaning With a Conscience', 2, '2017-12-21 14:16:36', '::1'),
(1611, 3, 'Slider', 'Making Taxes Easy', 2, '2017-12-21 14:34:29', '::1'),
(1612, 3, 'Slider', 'Making Taxes Easy', 2, '2017-12-21 14:34:53', '::1'),
(1613, 3, 'Subscribers', 'Subscribers Id (18)', 3, '2017-12-21 19:16:59', '::1'),
(1614, 3, 'Subscribers', 'Subscribers Id (6)', 3, '2017-12-21 19:17:01', '::1'),
(1615, 3, 'Subscribers', 'Subscribers Id (7)', 3, '2017-12-21 19:17:04', '::1'),
(1616, 3, 'Subscribers', 'Subscribers Id (8)', 3, '2017-12-21 19:17:06', '::1'),
(1617, 3, 'Subscribers', 'Subscribers Id (9)', 3, '2017-12-21 19:17:09', '::1'),
(1618, 3, 'Subscribers', 'Subscribers Id (11)', 3, '2017-12-21 19:17:11', '::1'),
(1619, 3, 'Subscribers', 'Subscribers Id (12)', 3, '2017-12-21 19:17:13', '::1'),
(1620, 3, 'Subscribers', 'Subscribers Id (13)', 3, '2017-12-21 19:17:16', '::1'),
(1621, 3, 'Subscribers', 'Subscribers Id (14)', 3, '2017-12-21 19:17:20', '::1'),
(1622, 3, 'Subscribers', 'Subscribers Id (22)', 3, '2017-12-21 19:17:25', '::1'),
(1623, 3, 'Subscribers', 'Subscribers Id (19)', 3, '2017-12-21 19:17:29', '::1'),
(1624, 3, 'Subscribers', 'Subscribers Id (16)', 3, '2017-12-21 19:17:33', '::1'),
(1625, 3, 'Subscribers', 'Subscribers Id (23)', 3, '2017-12-21 19:17:36', '::1'),
(1626, 3, 'Email Settings', 'Mail Server', 2, '2017-12-21 19:18:53', '::1'),
(1627, 3, 'Content', 'Contact', 2, '2017-12-21 19:40:52', '::1'),
(1628, 3, 'Content', 'FAQ', 2, '2017-12-21 19:47:03', '::1'),
(1629, 3, 'Content', 'Our Services', 2, '2017-12-21 20:57:02', '::1'),
(1630, 3, 'Content', 'Our Services', 2, '2017-12-21 20:57:22', '::1'),
(1631, 3, 'Shine', 'Commercial Cleaning', 2, '2017-12-22 11:05:10', '::1'),
(1632, 3, 'Shine', 'Commercial Cleaning', 3, '2017-12-22 11:05:15', '::1'),
(1633, 3, 'Shine', 'CA. Amrit Khadka ', 3, '2017-12-22 11:05:20', '::1'),
(1634, 3, 'Shine', 'Sahil Man Singh Pradhan', 3, '2017-12-22 11:05:23', '::1'),
(1635, 3, 'Shine', 'Commercial Cleaning', 1, '2017-12-22 11:08:52', '::1'),
(1636, 3, 'Shine', 'Apartment Cleaning', 1, '2017-12-22 11:09:22', '::1'),
(1637, 3, 'Shine', 'Residential Cleaning', 1, '2017-12-22 11:10:00', '::1'),
(1638, 3, 'Shine', 'Move-in Move-out Cleaning', 1, '2017-12-22 11:10:38', '::1'),
(1639, 3, 'Shine', 'Office Cleaning', 1, '2017-12-22 11:11:03', '::1'),
(1640, 3, 'Shine', 'After Party Cleaning', 1, '2017-12-22 11:11:25', '::1'),
(1641, 3, 'pictures', 'Best Mid Logo', 2, '2017-12-22 11:31:25', '::1'),
(1642, 3, 'pictures', 'Navigation', 2, '2017-12-22 11:36:23', '::1'),
(1643, 3, 'pictures', 'Visa', 3, '2017-12-22 11:39:19', '::1'),
(1644, 3, 'pictures', 'Master Card', 3, '2017-12-22 11:39:22', '::1'),
(1645, 3, 'pictures', 'Our client', 1, '2017-12-22 11:39:55', '::1'),
(1646, 3, 'pictures', 'Top Header Background', 2, '2017-12-22 13:24:00', '::1'),
(1647, 3, 'pictures', 'Footer Backgroynd', 3, '2017-12-22 13:24:32', '::1'),
(1648, 3, 'Content', 'Why is the UAE implementing VAT?', 3, '2017-12-24 09:54:58', '::1'),
(1649, 3, 'Content', 'What is the difference between VAT and Sales Tax?', 3, '2017-12-24 09:55:01', '::1'),
(1650, 3, 'Content', 'What is VAT?', 3, '2017-12-24 09:55:05', '::1'),
(1651, 3, 'Content', 'What is Tax?', 3, '2017-12-24 09:55:08', '::1'),
(1652, 3, 'Content', 'How to Register  for VAT in the UAE ?', 3, '2017-12-24 09:55:12', '::1'),
(1653, 3, 'Content', 'How to prepare invoice for VAT in UAE ?', 3, '2017-12-24 09:55:15', '::1'),
(1654, 3, 'Content', 'VAT return Filing', 3, '2017-12-24 09:55:18', '::1'),
(1655, 3, 'Content', 'VAT Implementation', 3, '2017-12-24 09:55:22', '::1'),
(1656, 3, 'Content', 'Working Capital management', 3, '2017-12-24 09:55:24', '::1'),
(1657, 3, 'Content', 'Management Audit', 3, '2017-12-24 09:55:27', '::1'),
(1658, 3, 'Content', 'Internal Audit', 3, '2017-12-24 09:55:29', '::1'),
(1659, 3, 'Content', 'Setting up accounting Systems', 3, '2017-12-24 09:55:32', '::1'),
(1660, 3, 'Content', 'Outsourced accounting and bookkeeping Services', 3, '2017-12-24 09:55:35', '::1'),
(1661, 3, 'Content', 'VAT registration', 3, '2017-12-24 09:55:37', '::1'),
(1662, 3, 'Content', 'Testimonials', 3, '2017-12-24 09:56:27', '::1'),
(1663, 3, 'Content', 'Portfolio', 3, '2017-12-24 09:56:31', '::1'),
(1664, 3, 'Content', 'Our projects', 3, '2017-12-24 09:56:36', '::1'),
(1665, 3, 'Content', 'Terms of Service', 3, '2017-12-24 09:56:39', '::1'),
(1666, 3, 'Content', ' VAT in UAE', 3, '2017-12-24 09:56:42', '::1'),
(1667, 3, 'Content', 'Massage From CEO', 3, '2017-12-24 09:56:45', '::1'),
(1668, 3, 'Content', 'Cleaning With a Conscience', 3, '2017-12-24 09:56:49', '::1'),
(1669, 3, 'Content', 'Serviced Offices', 3, '2017-12-24 09:56:53', '::1'),
(1670, 3, 'Content', 'test', 1, '2017-12-25 08:20:00', '::1'),
(1671, 3, 'Content', 'test', 2, '2017-12-25 08:30:24', '::1'),
(1672, 3, 'Content', 'test', 2, '2017-12-25 08:36:05', '::1'),
(1673, 3, 'Content', 'test', 2, '2017-12-25 09:07:11', '::1'),
(1674, 3, 'Content', 'test', 2, '2017-12-25 09:09:15', '::1'),
(1675, 3, 'Content', 'test', 2, '2017-12-25 09:09:31', '::1'),
(1676, 3, 'Slider', 'asdf', 1, '2017-12-25 11:54:03', '::1'),
(1677, 3, 'Slider', 'asdf', 3, '2017-12-25 11:57:29', '::1'),
(1678, 5, 'pictures', 'Logo', 2, '2017-12-26 13:35:03', '::1'),
(1679, 5, 'pictures', 'Logo', 2, '2017-12-26 13:35:52', '::1'),
(1680, 5, 'Slider', 'One of the best TAX Consultant in UAE', 3, '2017-12-26 13:45:27', '::1'),
(1681, 5, 'Slider', 'Trust, Quality, and Expertise.', 3, '2017-12-26 13:45:29', '::1'),
(1682, 5, 'Slider', 'We Value Your Time And Money', 3, '2017-12-26 13:45:32', '::1'),
(1683, 5, 'Slider', 'Making Taxes Easy', 3, '2017-12-26 13:45:34', '::1'),
(1684, 5, 'Slider', '??? ???? ?????? ??????? ???????', 1, '2017-12-26 13:49:08', '::1'),
(1685, 5, 'Slider', '??? ???? ?????? ??????? ???????', 2, '2017-12-26 13:50:03', '::1'),
(1686, 5, 'Slider', '?????? ???????', 1, '2017-12-26 13:52:01', '::1'),
(1687, 5, 'Slider', '??????? ??????? ?????', 1, '2017-12-26 15:15:18', '::1'),
(1688, 5, 'Content', 'We are committed to total transparency about our products.', 2, '2017-12-26 15:25:45', '::1'),
(1689, 5, 'Content', 'Our Services', 1, '2017-12-26 16:52:35', '::1'),
(1690, 5, 'Content', 'Dairy Products', 1, '2017-12-26 16:56:25', '::1'),
(1691, 5, 'Content', 'Our Services', 2, '2017-12-26 16:56:39', '::1'),
(1692, 5, 'Content', 'Fresh, Chilled & Frozen Meats', 1, '2017-12-26 16:57:31', '::1'),
(1693, 5, 'Content', 'Frozen Poultry', 1, '2017-12-26 16:58:08', '::1'),
(1694, 5, 'Content', 'Fish & Meat Grilling', 1, '2017-12-26 16:58:46', '::1'),
(1695, 5, 'Content', 'Frozen Poultry', 2, '2017-12-26 17:00:21', '::1'),
(1696, 5, 'Content', 'Meet The Best Fresh & Frozen Meet House In Town', 1, '2017-12-26 17:16:53', '::1'),
(1697, 5, 'Content', 'NEWSLETTER SIGN-UP', 1, '2017-12-26 17:32:58', '::1'),
(1698, 5, 'Content', 'CUSTOMERS', 1, '2017-12-26 17:39:04', '::1'),
(1699, 5, 'Content', 'MEATS TYPE', 1, '2017-12-26 17:39:52', '::1'),
(1700, 5, 'Content', 'MEATS TYPE', 2, '2017-12-26 17:40:40', '::1'),
(1701, 5, 'Content', 'CUSTOMERS', 2, '2017-12-26 17:40:51', '::1'),
(1702, 5, 'Content', 'ORGANIC FARM', 1, '2017-12-26 17:42:02', '::1'),
(1703, 5, 'Content', 'OUTLET', 1, '2017-12-26 17:43:13', '::1'),
(1704, 5, 'Content', 'OUTLET', 2, '2017-12-26 17:50:59', '::1'),
(1705, 5, 'Content', 'ORGANIC FARM', 2, '2017-12-26 17:53:53', '::1'),
(1706, 5, 'Content', 'MEATS TYPE', 2, '2017-12-26 17:54:01', '::1'),
(1707, 5, 'Content', 'CUSTOMERS', 2, '2017-12-26 17:54:07', '::1'),
(1708, 5, 'Content', 'Fresh, Chilled & Frozen Meats', 2, '2017-12-26 21:00:41', '::1'),
(1709, 5, 'Content', 'Frozen Poultry', 2, '2017-12-26 21:01:21', '::1'),
(1710, 5, 'Content', 'Fish & Meat Grilling', 2, '2017-12-26 21:01:45', '::1'),
(1711, 5, 'Content', 'Dairy Products', 2, '2017-12-26 21:02:22', '::1'),
(1712, 5, 'Content', 'FRESH MUTTON CUTS', 1, '2017-12-26 21:55:52', '::1'),
(1713, 5, 'Content', 'FRESH MUTTON CUTS', 2, '2017-12-26 21:56:10', '::1'),
(1714, 5, 'Content', 'Our Featured Products', 1, '2017-12-26 21:59:25', '::1'),
(1715, 5, 'Content', 'Our Featured Products', 2, '2017-12-26 21:59:38', '::1'),
(1716, 5, 'Content', 'FRESH MUTTON CUTS', 2, '2017-12-26 22:06:55', '::1'),
(1717, 5, 'Content', 'PRIME BEEF CUTS', 1, '2017-12-26 22:08:07', '::1'),
(1718, 5, 'Content', 'FRESH CHICKEN CUTS', 1, '2017-12-26 22:10:20', '::1'),
(1719, 5, 'Content', 'FRESH FISH CUTS', 1, '2017-12-26 22:11:20', '::1'),
(1720, 5, 'Content', 'FRESH SHRIMP', 1, '2017-12-26 22:12:49', '::1'),
(1721, 5, 'Content', 'FRESH SHRIMP', 2, '2017-12-26 22:16:52', '::1'),
(1722, 5, 'Content', 'Contact Us', 1, '2017-12-27 08:56:35', '::1'),
(1723, 5, 'Content', 'Inquiry & Order', 1, '2017-12-27 09:02:08', '::1'),
(1724, 5, 'Content', 'Inquiry & Order', 2, '2017-12-27 09:16:35', '::1'),
(1725, 5, 'Content', 'Our Mission & Vision', 1, '2017-12-27 09:40:20', '::1'),
(1726, 5, 'Content', 'Our History', 1, '2017-12-27 09:40:57', '::1'),
(1727, 5, 'Content', 'Dairy Products', 2, '2018-01-05 14:08:50', '83.110.139.121'),
(1728, 5, 'Content', 'We are committed to total transparency about our products.', 2, '2018-01-05 14:14:08', '83.110.139.121'),
(1729, 5, 'Content', 'We are committed to total transparency about our products.', 2, '2018-01-05 14:15:31', '83.110.139.121'),
(1730, 5, 'Content', 'We are committed to total transparency about our products.', 2, '2018-01-05 14:16:16', '83.110.139.121'),
(1731, 5, 'Content', 'We are committed to total transparency about our products.', 2, '2018-01-05 14:16:47', '83.110.139.121'),
(1732, 5, 'Content', 'About Us', 2, '2018-01-05 23:40:43', '83.110.139.121'),
(1733, 5, 'Content', 'About Us', 2, '2018-01-05 23:43:45', '83.110.139.121'),
(1734, 5, 'Content', 'We are fully transparent about our products.', 2, '2018-01-05 23:44:56', '83.110.139.121'),
(1735, 5, 'Content', 'We are fully transparent about our products.', 2, '2018-01-05 23:46:09', '83.110.139.121'),
(1736, 5, 'Slider', 'Organic & Pure Meat', 2, '2018-01-13 08:20:15', '83.110.6.70'),
(1737, 5, 'Slider', 'Organic & Pure Meat', 2, '2018-01-13 08:21:02', '83.110.6.70'),
(1738, 5, 'Slider', 'Organic & Pure Meat', 1, '2018-01-13 08:23:56', '83.110.6.70'),
(1739, 5, 'Slider', 'Organic & Pure Meat', 1, '2018-01-13 08:25:06', '83.110.6.70'),
(1740, 5, 'Slider', 'Organic & Pure Meat', 3, '2018-01-13 08:27:15', '83.110.6.70'),
(1741, 5, 'Slider', 'Organic & Pure Meat', 3, '2018-01-13 08:27:21', '83.110.6.70'),
(1742, 5, 'Slider', 'Organic & Pure Meat', 3, '2018-01-13 08:27:26', '83.110.6.70'),
(1743, 5, 'Slider', 'Organic & Pure Meat', 3, '2018-01-13 08:27:30', '83.110.6.70'),
(1744, 5, 'Slider', 'Organic & Pure Meat', 3, '2018-01-13 08:27:32', '83.110.6.70'),
(1745, 5, 'Slider', '??????? ??????? ?? ????? ??????', 1, '2018-01-13 08:28:21', '83.110.6.70'),
(1746, 5, 'Slider', 'Organic & Pure On Al Rukh Al Shami', 1, '2018-01-13 08:28:53', '83.110.6.70'),
(1747, 5, 'Slider', 'Organic & Pure On Al Rukh Al Shami', 1, '2018-01-13 08:29:15', '83.110.6.70'),
(1748, 5, 'Email Settings', 'Mail Server', 2, '2018-01-19 00:39:31', '83.110.100.65'),
(1749, 5, 'Content', 'Dairy Products', 2, '2018-01-20 07:12:46', '83.110.100.65'),
(1750, 5, 'Content', 'Dairy Products', 2, '2018-01-20 07:13:28', '83.110.100.65'),
(1751, 5, 'Content', 'Fresh, Chilled & Frozen Meats', 2, '2018-01-20 07:18:51', '83.110.100.65'),
(1752, 5, 'Content', 'Fresh, Chilled & Frozen Meats', 2, '2018-01-20 07:23:36', '83.110.100.65'),
(1753, 5, 'Content', 'Frozen Poultry', 2, '2018-01-20 07:26:10', '83.110.100.65'),
(1754, 5, 'Content', 'Fish & Meat Grilling', 2, '2018-01-20 07:38:41', '83.110.100.65'),
(1755, 5, 'Slider', 'Organic & Pure On Al Rukh Al Shami', 3, '2018-01-20 07:45:38', '83.110.100.65'),
(1756, 5, 'Content', 'We are fully transparent about our products.', 2, '2018-01-20 07:57:35', '83.110.100.65'),
(1757, 5, 'Content', 'We are fully transparent about our products.', 2, '2018-01-20 08:07:50', '83.110.100.65'),
(1758, 5, 'Content', 'Contact Us', 2, '2018-01-21 09:20:08', '83.110.100.65'),
(1759, 5, 'Slider', 'Organic & Pure On Al Rukh Al Shami', 2, '2018-01-21 12:41:52', '83.110.100.65'),
(1760, 5, 'pictures', 'Logo', 2, '2018-01-25 05:25:25', '83.110.100.76'),
(1761, 5, 'pictures', 'Logo', 2, '2018-01-25 05:28:56', '83.110.100.76'),
(1762, 5, 'Content', 'Dairy Products', 2, '2018-01-25 05:38:39', '83.110.100.76'),
(1763, 5, 'Content', 'Fresh, Chilled & Frozen Meats', 2, '2018-01-25 05:39:39', '83.110.100.76'),
(1764, 5, 'Content', 'Frozen Poultry', 2, '2018-01-25 05:41:11', '83.110.100.76'),
(1765, 5, 'Content', 'Fish & Meat Grilling', 2, '2018-01-25 05:43:17', '83.110.100.76'),
(1766, 5, 'Content', 'Fish & Meat Grilling', 2, '2018-01-25 05:55:03', '83.110.100.76'),
(1767, 5, 'Content', 'Fish & Meat Grilling', 2, '2018-01-25 05:57:30', '83.110.100.76'),
(1768, 5, 'Content', 'Dairy Products', 2, '2018-01-25 06:01:48', '83.110.100.76'),
(1769, 5, 'Content', 'Frozen Poultry', 2, '2018-01-25 06:02:10', '83.110.100.76'),
(1770, 5, 'Content', 'Fresh, Chilled & Frozen Meats', 2, '2018-01-25 06:03:23', '83.110.100.76'),
(1771, 5, 'Content', 'BBQ Serving', 2, '2018-01-27 09:47:26', '83.110.100.76'),
(1772, 5, 'Content', 'BBQ Servings', 2, '2018-01-27 09:50:16', '83.110.100.76'),
(1773, 5, 'Content', 'BBQs Serving', 2, '2018-01-27 09:51:11', '83.110.100.76'),
(1774, 5, 'Content', 'BBqs Servings', 2, '2018-01-27 09:51:57', '83.110.100.76'),
(1775, 5, 'Content', 'BBQs Serving', 2, '2018-01-27 09:52:37', '83.110.100.76'),
(1776, 5, 'pictures', 'Logo', 2, '2018-01-27 10:56:16', '83.110.100.76'),
(1777, 5, 'Content', 'Meet The Best Fresh & Frozen Meat House In Town', 2, '2018-01-29 07:05:42', '83.110.100.76'),
(1778, 5, 'pictures', 'Logo', 2, '2018-01-29 07:45:00', '83.110.100.76'),
(1779, 5, 'pictures', 'Logo', 2, '2018-02-01 20:23:04', '::1'),
(1780, 5, 'pictures', 'Logo', 2, '2018-02-01 20:36:07', '::1'),
(1781, 5, 'pictures', 'Logo', 2, '2018-02-03 17:52:39', '::1'),
(1782, 5, 'pictures', 'Logo', 2, '2018-02-03 18:12:06', '::1'),
(1783, 5, 'Content', 'BBqs Servings', 2, '2018-02-04 06:46:44', '::1'),
(1784, 5, 'Content', 'BBQs Serving', 2, '2018-02-04 06:47:10', '::1'),
(1785, 5, 'Content', 'BBQ Servings', 2, '2018-02-04 06:47:20', '::1'),
(1786, 5, 'Content', 'BBQ Serving', 2, '2018-02-04 06:47:31', '::1'),
(1787, 5, 'pictures', 'Logo', 2, '2018-02-14 15:33:53', '::1'),
(1788, 5, 'pictures', 'Logo', 2, '2018-02-14 15:34:40', '::1'),
(1789, 5, 'pictures', 'Logo', 2, '2018-02-14 15:42:17', '::1'),
(1790, 5, 'Slider', 'Organic & Pure On Al Rukh Al Shami', 2, '2018-02-14 16:03:20', '::1'),
(1791, 5, 'Slider', 'Organic & Pure On Al Rukh Al Shami', 2, '2018-02-14 16:03:26', '::1'),
(1792, 5, 'Subscribers', 'Subscribers Id (29)', 3, '2018-02-14 16:34:58', '::1'),
(1793, 5, 'Subscribers', 'Subscribers Id (20)', 2, '2018-02-14 16:45:55', '::1'),
(1794, 5, 'Subscribers', 'Subscribers Id (20)', 2, '2018-02-14 16:45:58', '::1'),
(1795, 5, 'Content', 'We are fully transparent about our products.', 2, '2018-02-14 17:22:08', '::1'),
(1796, 5, 'Content', 'We are fully transparent about our products.', 2, '2018-02-14 17:23:43', '::1'),
(1797, 5, 'brands', 'Falken', 2, '2018-02-15 08:29:35', '::1'),
(1798, 5, 'brands', 'Toyo Tires', 2, '2018-02-15 08:29:42', '::1'),
(1799, 5, 'brands', 'Dunlop', 2, '2018-02-15 08:29:47', '::1'),
(1800, 5, 'brands', 'Deestone', 2, '2018-02-15 08:29:52', '::1'),
(1801, 5, 'brands', 'Zeetex', 2, '2018-02-15 08:30:09', '::1'),
(1802, 5, 'brands', 'Michelin', 3, '2018-02-15 08:30:16', '::1'),
(1803, 5, 'brands', 'Nitto Tyre', 3, '2018-02-15 08:30:20', '::1'),
(1804, 5, 'brands', 'Pirelli', 3, '2018-02-15 08:30:23', '::1'),
(1805, 5, 'brands', 'Yokohama', 3, '2018-02-15 08:30:27', '::1'),
(1806, 5, 'brands', 'Bridgestone', 3, '2018-02-15 08:30:30', '::1'),
(1807, 5, 'brands', 'Continental', 3, '2018-02-15 08:30:33', '::1'),
(1808, 5, 'brands', 'Kumho', 3, '2018-02-15 08:30:36', '::1'),
(1809, 5, 'brands', 'Hankook', 3, '2018-02-15 08:30:39', '::1'),
(1810, 5, 'brands', 'BFGoodrich', 3, '2018-02-15 08:30:42', '::1'),
(1811, 5, 'brands', 'Cooper', 3, '2018-02-15 08:30:45', '::1'),
(1812, 5, 'brands', 'Falken', 2, '2018-02-15 16:12:04', '::1'),
(1813, 5, 'brands', 'Toyo Tires', 2, '2018-02-15 16:12:09', '::1'),
(1814, 5, 'brands', 'Dunlop', 2, '2018-02-15 16:12:16', '::1'),
(1815, 5, 'brands', 'Deestone', 2, '2018-02-15 16:12:22', '::1'),
(1816, 5, 'brands', 'Zeetex', 2, '2018-02-15 16:12:29', '::1'),
(1817, 5, 'brands', 'Boss', 1, '2018-02-15 16:12:42', '::1'),
(1818, 5, 'brands', 'Fila', 1, '2018-02-15 16:12:54', '::1'),
(1819, 5, 'brands', 'Daewoo', 1, '2018-02-15 16:13:05', '::1'),
(1820, 5, 'brands', 'Creative', 1, '2018-02-15 16:13:15', '::1'),
(1821, 5, 'brands', 'Puma', 1, '2018-02-15 16:13:27', '::1'),
(1822, 5, 'brands', 'Rebook', 1, '2018-02-15 16:13:42', '::1'),
(1823, 5, 'brands', 'Samsung', 1, '2018-02-15 16:14:28', '::1'),
(1824, 5, 'brands', 'Sony', 1, '2018-02-15 16:14:42', '::1'),
(1825, 5, 'Content', 'New Arrivals', 2, '2018-02-15 16:15:43', '::1'),
(1826, 5, 'Content', 'We are fully transparent about our products.', 2, '2018-02-21 08:28:50', '::1'),
(1827, 5, 'Content', 'Contact Us', 2, '2018-02-22 06:45:04', '::1'),
(1828, 5, 'Content', 'Contact Us', 2, '2018-02-22 06:51:13', '::1'),
(1829, 5, 'Content', 'About us', 2, '2018-02-22 07:02:50', '::1'),
(1830, 5, 'Content', 'fafsdafsdfsdfsd', 1, '2018-02-22 07:50:44', '::1');
INSERT INTO `igc_user_logs` (`log_id`, `user_id`, `module_name`, `module_title`, `action_id`, `date`, `ip_address`) VALUES
(1831, 5, 'Content', 'eCommerce Solution', 2, '2018-02-22 07:56:59', '::1'),
(1832, 5, 'Email Settings', 'Mail Server', 2, '2018-02-23 13:32:46', '::1'),
(1833, 3, 'Slider', 'as', 1, '2018-03-06 08:40:45', '::1'),
(1834, 3, 'Slider', 'Four', 1, '2018-03-06 08:41:16', '::1'),
(1835, 3, 'Slider', 'Organic & Pure On Al Rukh Al Shami', 2, '2018-03-06 08:41:31', '::1'),
(1836, 3, 'Slider', 'Organic & Pure On Al Rukh Al Shami', 2, '2018-03-06 08:41:36', '::1'),
(1837, 3, 'pictures', 'Logo', 2, '2018-03-06 17:48:55', '::1'),
(1838, 5, 'pictures', 'Logo', 2, '2018-06-07 06:31:56', '::1'),
(1839, 5, 'Admin To Seller', 'Prabin', 1, '2018-11-23 09:17:22', '::1'),
(1840, 1, 'Sell-Store Sell', 'Rajeev', 1, '2018-11-23 11:06:26', '::1'),
(1841, 1, 'Sell-Store Sell', NULL, 2, '2018-11-23 11:06:41', '::1'),
(1842, 1, 'Sell-Store Sell', 'rajeev', 1, '2018-11-26 16:59:34', '::1'),
(1843, 1, 'Sell-Store Sell', 'Suresh', 1, '2018-11-28 07:12:11', '::1'),
(1844, 1, 'Sell-Store Sell', NULL, 2, '2018-11-28 07:12:19', '::1'),
(1845, 0, 'Seller Registration From Website', 'Rajeev', 1, '2018-12-03 06:22:58', '::1'),
(1846, 5, 'brands', 'Falken', 2, '2018-12-05 08:58:45', '::1'),
(1847, 5, 'brands', 'Falken', 2, '2018-12-05 09:14:27', '::1'),
(1848, 5, 'brands', 'Falken', 2, '2018-12-05 09:17:16', '::1'),
(1849, 5, 'brands', 'Toyo Tires', 2, '2018-12-05 10:06:11', '::1'),
(1850, 5, 'brands', 'Dunlop', 2, '2018-12-05 10:06:25', '::1'),
(1851, 5, 'brands', 'Deestone', 2, '2018-12-05 10:06:35', '::1'),
(1852, 5, 'brands', 'Zeetex', 2, '2018-12-05 10:06:44', '::1'),
(1853, 5, 'brands', 'Boss', 2, '2018-12-05 10:06:52', '::1'),
(1854, 5, 'brands', 'Fila', 2, '2018-12-05 10:07:03', '::1'),
(1855, 5, 'brands', 'Samsung', 2, '2018-12-05 10:07:16', '::1'),
(1856, 5, 'brands', 'Rebook', 2, '2018-12-05 10:11:41', '::1'),
(1857, 5, 'brands', 'Daewoo', 2, '2018-12-05 10:11:50', '::1'),
(1858, 5, 'brands', 'Creative', 2, '2018-12-05 10:11:59', '::1'),
(1859, 5, 'brands', 'Puma', 2, '2018-12-05 10:12:06', '::1'),
(1860, 5, 'brands', 'Sony', 2, '2018-12-05 10:12:16', '::1'),
(1861, 1, 'Sell-Store Sell', 'Rajeev Paudel', 1, '2018-12-11 06:42:54', '::1'),
(1862, 1, 'Sell-Store Sell', NULL, 2, '2018-12-11 06:43:14', '::1'),
(1863, 5, 'Content', 'BBqs Servings', 3, '2018-12-11 07:41:16', '::1'),
(1864, 5, 'Content', 'BBQ Serving', 3, '2018-12-11 07:42:14', '::1'),
(1865, 5, 'Content', 'BBQ Servings', 3, '2018-12-11 07:42:23', '::1'),
(1866, 5, 'Content', 'ORGANIC FARM', 3, '2018-12-11 07:42:38', '::1'),
(1867, 5, 'Content', 'Contact Us', 1, '2018-12-12 08:00:04', '::1'),
(1868, 5, 'Content', 'Contact Us', 2, '2018-12-12 08:00:31', '::1'),
(1869, 5, 'Content', 'Contact Us', 2, '2018-12-12 08:00:31', '::1'),
(1870, 5, 'Content', 'Contact Us', 2, '2018-12-12 08:00:38', '::1'),
(1871, 5, 'Content', 'Basketball Page', 1, '2018-12-12 12:09:09', '::1'),
(1872, 5, 'Content', 'Fashion', 1, '2018-12-12 12:14:19', '::1'),
(1873, 5, 'Content', 'Fashion is Life', 2, '2018-12-12 14:31:37', '::1'),
(1874, 5, 'Content', 'Fashion is Life', 2, '2018-12-12 14:37:10', '::1'),
(1875, 5, 'Content', 'About us', 2, '2018-12-12 15:18:42', '::1'),
(1876, 5, 'Content', 'About us', 2, '2018-12-12 15:19:11', '::1'),
(1877, 5, 'Content', 'About us', 2, '2018-12-12 15:31:44', '::1'),
(1878, 5, 'Content', 'About us', 2, '2018-12-12 15:32:28', '::1'),
(1879, 5, 'Content', 'About us', 2, '2018-12-12 15:32:42', '::1'),
(1880, 5, 'Email Settings', 'Mail Server', 2, '2018-12-14 11:05:33', '::1'),
(1881, 5, 'Email Settings', 'Mail Server', 3, '2018-12-14 11:05:39', '::1'),
(1882, 5, 'Admin To Seller', 'Prabin', 2, '2018-12-15 09:40:10', '::1'),
(1883, 5, 'Admin To Seller', 'Prabin', 2, '2018-12-15 09:40:16', '::1'),
(1884, 5, 'Admin To Seller', 'Rajeev', 2, '2018-12-15 09:40:19', '::1'),
(1885, 5, 'Content', 'About Us', 1, '2018-12-18 10:37:44', '::1'),
(1886, 5, 'Content', 'Contact Us', 1, '2018-12-18 11:25:21', '::1'),
(1887, 5, 'brands', 'Sony', 1, '2018-12-18 11:27:55', '::1'),
(1888, 5, 'brands', 'Sony', 2, '2018-12-18 11:28:18', '::1'),
(1889, 5, 'brands', 'Sony', 2, '2018-12-18 11:32:08', '::1'),
(1890, 5, 'brands', 'samsung', 1, '2018-12-18 11:36:53', '::1'),
(1891, 5, 'Content', 'Fashion is Life', 1, '2018-12-18 11:57:59', '::1'),
(1892, 5, 'Content', 'Fashion is Life', 2, '2018-12-18 11:59:50', '::1'),
(1893, 5, 'Content', 'Fashion is Life', 2, '2018-12-18 12:05:54', '::1'),
(1894, 5, 'Content', 'Fashion is Life', 2, '2018-12-18 14:12:26', '::1'),
(1895, 5, 'Content', 'Basketball is Life', 1, '2018-12-19 01:16:29', '27.34.20.74'),
(1896, 5, 'Email Settings', 'Mail Server', 2, '2018-12-19 04:00:45', '27.34.20.83'),
(1897, 5, 'Payment', 'Esewa', 1, '2018-12-20 12:10:26', '27.34.104.147'),
(1898, 5, 'Admin To Seller', 'banner_feature', 2, '2018-12-20 22:51:56', '27.34.20.246'),
(1899, 5, 'Admin To Seller', 'banner_feature', 2, '2018-12-20 23:03:30', '27.34.20.246'),
(1900, 5, 'Admin To Seller', 'banner_feature', 2, '2018-12-20 23:06:03', '27.34.20.246'),
(1901, 5, 'Admin To Seller', 'banner_feature', 2, '2018-12-20 23:10:24', '27.34.20.246'),
(1902, 5, 'Admin To Seller', 'banner_feature', 2, '2018-12-20 23:11:17', '27.34.20.246'),
(1903, 5, 'Footer', 'Contact', 1, '2018-12-20 23:12:32', '27.34.20.246'),
(1904, 5, 'Footer', 'About', 1, '2018-12-21 01:06:47', '27.34.20.246'),
(1905, 5, 'Payment', 'Khalti', 1, '2018-12-21 04:40:48', '27.34.20.87'),
(1906, 5, 'brands', 'Vodafone', 1, '2018-12-25 00:15:19', '27.34.16.48'),
(1907, 5, 'Footer', 'Contact', 2, '2018-12-25 00:44:07', '27.34.16.48'),
(1908, 5, 'Content', 'Eshopping Nepal', 1, '2018-12-25 00:45:12', '27.34.16.48'),
(1909, 5, 'Content', 'About Us', 2, '2018-12-25 00:47:05', '27.34.16.48'),
(1910, 5, 'Content', 'About Us', 2, '2018-12-25 00:48:25', '27.34.16.48'),
(1911, 5, 'Content', 'Eshopping Nepal', 3, '2018-12-25 00:49:34', '27.34.16.48'),
(1912, 5, 'Content', 'About Us', 2, '2018-12-25 00:49:57', '27.34.16.48'),
(1913, 5, 'Email Settings', 'Mail Server', 2, '2018-12-25 00:57:38', '27.34.16.48'),
(1914, 5, 'brands', 'Goldstar', 1, '2018-12-25 21:24:20', '43.245.86.19'),
(1915, 5, 'brands', 'Other', 1, '2018-12-25 21:34:23', '43.245.86.19'),
(1916, 5, 'brands', 'Naviforce', 1, '2018-12-26 01:18:49', '43.245.86.19'),
(1917, 5, 'Admin To Seller', 'banner_feature', 2, '2019-01-21 13:13:20', '103.10.28.160'),
(1918, 5, 'pictures', 'Logo', 2, '2019-02-14 18:01:29', '::1'),
(1919, 5, 'News Category', '??????', 1, '2019-04-04 07:06:24', '::1'),
(1920, 5, 'News Category', '???????', 1, '2019-04-04 07:08:26', '::1'),
(1921, 5, 'News Category', '????? ??????', 1, '2019-04-16 08:35:38', '::1'),
(1922, 5, 'News Category', '???? ??????', 1, '2019-04-16 08:36:54', '::1'),
(1923, 5, 'News Category', '???????', 1, '2019-04-16 08:37:20', '::1'),
(1924, 5, 'News Category', '???? ??????', 2, '2019-04-16 08:37:40', '::1'),
(1925, 5, 'News Category', '????', 1, '2019-04-16 08:38:14', '::1'),
(1926, 5, 'News Category', '??????', 1, '2019-04-16 08:38:35', '::1'),
(1927, 5, 'News Category', '?????????', 1, '2019-04-16 08:38:59', '::1'),
(1928, 5, 'News Category', '??????', 1, '2019-04-16 08:39:35', '::1'),
(1929, 5, 'News Category', '????? ???????', 1, '2019-04-16 08:40:02', '::1'),
(1930, 5, 'News Category', '?????', 1, '2019-04-16 08:40:39', '::1'),
(1931, 5, 'News Category', '??????', 1, '2019-04-16 08:41:00', '::1'),
(1932, 5, 'News Category', '????', 1, '2019-04-16 08:41:22', '::1'),
(1933, 5, 'News Category', ' ?????? -?', 1, '2019-04-16 08:42:20', '::1'),
(1934, 5, 'News Category', ' ?????? -?', 1, '2019-04-16 08:42:39', '::1'),
(1935, 5, 'News Category', ' ?????? -?', 1, '2019-04-16 08:43:02', '::1'),
(1936, 5, 'News Category', ' ?????? -?', 1, '2019-04-16 08:43:25', '::1'),
(1937, 5, 'News Category', ' ?????? -?', 2, '2019-04-16 08:43:39', '::1'),
(1938, 5, 'News Category', ' ?????? -?', 1, '2019-04-16 08:44:09', '::1'),
(1939, 5, 'News Category', ' ?????? -?', 1, '2019-04-16 08:44:25', '::1'),
(1940, 5, 'News Category', ' ?????? -?', 1, '2019-04-16 08:44:55', '::1'),
(1941, 5, 'News Category', '???????', 1, '2019-04-16 08:45:49', '::1'),
(1942, 5, 'News Category', '??? / ???????', 1, '2019-04-16 08:47:22', '::1'),
(1943, 5, 'News Category', '???', 1, '2019-04-16 08:47:39', '::1'),
(1944, 5, 'News Category', '??????', 1, '2019-04-16 08:48:08', '::1'),
(1945, 5, 'News Category', '???????????', 1, '2019-04-16 08:48:34', '::1'),
(1946, 5, 'News Category', '????', 1, '2019-04-16 08:48:59', '::1'),
(1947, 5, 'pictures', 'Logo', 2, '2019-04-16 16:27:51', '::1'),
(1948, 5, 'News Category', '??????', 2, '2019-04-16 17:33:48', '::1'),
(1949, 5, 'News Category', '????? ??????', 2, '2019-04-16 17:34:08', '::1'),
(1950, 5, 'News Category', '??????', 2, '2019-04-16 17:34:24', '::1'),
(1951, 5, 'News Category', '????? ???????', 2, '2019-04-16 17:34:34', '::1'),
(1952, 5, 'News Category', '??? / ???????', 2, '2019-04-16 17:34:42', '::1'),
(1953, 5, 'News Category', '??????', 2, '2019-04-16 17:34:50', '::1'),
(1954, 5, 'News Category', '???????????', 2, '2019-04-16 17:35:27', '::1'),
(1955, 5, 'Reporter', '???????? ?????', 1, '2019-04-17 03:28:23', '27.34.68.114'),
(1956, 5, 'Reporter', '???????? ?????', 1, '2019-04-17 03:29:13', '27.34.68.114'),
(1957, 5, 'Reporter', '???????? ?????', 1, '2019-04-17 03:31:52', '27.34.68.114'),
(1958, 5, 'Reporter', '???????? ?????', 2, '2019-04-17 03:33:01', '27.34.68.114'),
(1959, 5, 'Guest', '???? ', 1, '2019-04-17 03:37:41', '27.34.68.114'),
(1960, 5, 'Reporter', '???? ???', 1, '2019-04-17 03:42:51', '27.34.68.114'),
(1961, 5, 'Reporter', '???? ???', 2, '2019-04-17 03:43:00', '27.34.68.114'),
(1962, 5, 'Guest', '?????? ', 1, '2019-04-17 03:43:28', '27.34.68.114'),
(1963, 5, 'Guest', '?????? ', 2, '2019-04-17 03:43:39', '27.34.68.114'),
(1964, 5, 'News Category', '????? ', 1, '2019-05-20 07:15:32', '::1'),
(1965, 5, 'News Category', '????? ', 3, '2019-05-20 07:15:38', '::1');

-- --------------------------------------------------------

--
-- Table structure for table `newletter_create`
--

CREATE TABLE `newletter_create` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) DEFAULT '1',
  `delete_status` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `newletter_create`
--

INSERT INTO `newletter_create` (`id`, `name`, `title`, `photo`, `description`, `date`, `updated`, `status`, `delete_status`) VALUES
(1, 'This is Name of newsletter', 'Here Title of Newsltter', NULL, '<p>And here, the main content of newsletter.</p>\n', '2017-10-02 11:42:53', '2017-10-03:05:50:29', 1, 1),
(2, 'Second Test', 'Testing Newsletter From Al Toufiq', NULL, '<p><strong>24 Newsletter Content Ideas</strong></p>\n\n<p><strong>1. E-course or training: </strong>Often used a lead magnets to capture subscribers, training material makes a business newsletter something your customers look forward to receiving.</p>\n\n<p><strong>2. Letter from the CEO, President, or another executive:</strong> Letters like these humanize the company and make customers feel like they actually matter to the highest management.</p>\n\n<p><strong>3. Success stories or customer spotlights:</strong> Customers want to know about each other and how your product helps them, especially if you serve a more technical market. And never underestimate the power of a great story.</p>\n\n<p><img alt=\"\" src=\"https://writtent.com/blog/wp-content/uploads/2013/04/newsletter-content-ideas1.jpg\" style=\"height:267px; width:400px\" /></p>\n\n<p>&nbsp;</p>\n\n<p><strong>4. Testimonials:</strong> A pull-quote or two with testimonials about a specific product or service can boost your sales and shows that you are a great company to do business with.</p>\n\n<p><strong>5. Employee spotlight or profile: </strong>Like executive letters, employee profiles humanize the company and help strengthen the community around your brand.</p>\n\n<p><strong>6. Industry news: </strong>Business newsletters are an excellent way to inform your customers about what&rsquo;s new in the industry. This is especially great newsletter content if you handle work your clients outsource to you.</p>\n\n<p><strong>7. Company news: </strong>Anytime your business has anything newsworthy, it should go out in your newsletter as well as press releases and other venues. Company news could be anything from showcasing recent work you&rsquo;ve done for a client to announce a new location.</p>\n\n<p><strong>8. Feature stories:</strong> Also known as human interest stories or &ldquo;soft&rdquo; news, these engaging articles are not usually closely tied to a news event and tend to focus on a single individual. You can use them to portray the company&rsquo;s founders, a related historical event, a buyer persona, and more.</p>\n\n<p><strong>9. Editorials: </strong>An opinion piece was written by senior staff or the publisher, editorials reflect the opinion of your company on a certain subject. Letters to the editor serve a similar function from the perspective of your customers. This newsletter idea is one way to talk about trends in your industry, your company mission, and other topics.</p>\n\n<p><strong>10. Educational articles: </strong>Your newsletter is another place to publish the kinds of valuable content you already publish on your blog.</p>\n\n<p><strong>11. &ldquo;Classic&rdquo; reprints:</strong> Once you&rsquo;ve published your newsletter for a while, or if you have a large company blog or article marketing campaign, you can reprint popular or valuable articles originally published elsewhere. This newsletter content idea is great in a pinch, but should not be a regular thing.</p>\n\n<p><strong>12. Blog excerpts:</strong> If you&rsquo;re creating lots of awesome content for your blog, share excerpts in your newsletter such as &ldquo;Most Popular Blog Posts This Month&rdquo; or &ldquo;5 Posts You Should Read&rdquo; with links back to your blog.</p>\n\n<p><strong>13. Special offers or coupons:</strong> Like your blog and other content marketing efforts, your newsletter should generate leads. Encourage repeat purchases with valuable discounts, free trials, product demos, and other offers.</p>\n\n<p><strong>14. Q&amp;A: </strong>If one customer asks a question, you can bet other customers are wondering the same thing. A question and answer section helps them and reduces your customer support emails.</p>\n\n<p><strong>15. Regular &ldquo;column:&rdquo; </strong>Newspapers use columns to flavor hard news with personality and expertise. You could do the same with an employee with a unique flair and relevant experience.</p>\n\n<p><img alt=\"\" src=\"https://writtent.com/blog/wp-content/uploads/2013/04/newsletter-content-ideas11.jpg\" style=\"height:300px; width:400px\" /></p>\n\n<p><strong>16. Surveys, </strong>polls, and feedback: Ask your customers what they want. They will tell you, and you&rsquo;ll both be happier.</p>\n\n<p><strong>17. Statistics and/or infographics:</strong> Publishing statistics about your company, products, or industry can paint a very interesting and compelling picture about the state of affairs. Infographics distill that information in a pleasing way and could easily be leveraged for other content marketing.</p>\n\n<p><strong>18. Interviews: </strong>Make your newsletter more appealing by presenting another personality and their advice or experience, You could interview thought leaders, up-and-coming players in your industry, celebrities, and others.</p>\n\n<p><strong>19. Product reviews: </strong>Customers or third parties could review your products, or you could review another company&rsquo;s product that is complementary to yours.</p>\n\n<p><strong>20. New product/service announcements:</strong> Make your subscribers feel special by making them the first to know about a new product you&rsquo;re offering. Exclusive knowledge or access will make them repeat buyers and brand ambassadors, and help you build pre-launch buzz.</p>\n\n<p><strong>21. Event calendar:</strong> Tell subscribers about upcoming events in your company (like your monthly webinars or weekly podcasts) or industry (such as conferences and expos) so they can participate or trust you to pass things on.</p>\n\n<p><strong>22. Case studies and/or white papers</strong>: Show your expertise and how your products and services help your audience with these research-heavy newsletter content ideas.</p>\n\n<p><strong>23. Giveaway and contest announcements:</strong> These engagement-boosting newsletter ideas are also popular on social media. Involve your subscribers in addition to fans and followers, or make them subscribers-only for higher stakes.</p>\n\n<p><strong>24. Photos</strong>: Images capture attention and boost interest, can accompany almost all of the above content ideas. Show behind-the-scenes at your business, your product in action, a recent event, and more.</p>\n\n<p style=\"text-align:center\"><strong>Thanks</strong></p>\n\n<p>&nbsp;</p>\n', '2017-10-03 07:45:08', '', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `news_category`
--

CREATE TABLE `news_category` (
  `id` int(11) NOT NULL,
  `news_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news_category`
--

INSERT INTO `news_category` (`id`, `news_id`, `category_id`) VALUES
(1, 1, 2),
(2, 1, 5),
(3, 7, 3),
(4, 4, 3),
(5, 2, 4),
(6, 3, 3),
(7, 8, 2),
(8, 8, 3),
(9, 8, 4),
(10, 9, 1),
(11, 9, 2),
(12, 9, 3),
(13, 9, 4),
(14, 9, 5),
(15, 9, 6),
(16, 9, 7),
(17, 10, 1),
(18, 10, 4),
(19, 11, 2),
(20, 11, 3),
(21, 12, 1),
(22, 12, 2),
(23, 13, 2),
(24, 14, 2),
(25, 4, 2),
(26, 14, 3),
(27, 14, 4),
(28, 15, 2),
(29, 16, 1),
(30, 16, 2),
(31, 16, 3),
(32, 16, 4),
(33, 16, 5),
(34, 16, 6),
(35, 16, 7),
(36, 16, 8),
(37, 16, 9),
(38, 16, 10),
(39, 16, 11),
(40, 16, 12),
(41, 16, 13),
(42, 16, 14),
(43, 16, 18),
(44, 16, 21),
(45, 16, 24),
(46, 16, 26),
(47, 17, 1),
(48, 17, 2),
(49, 17, 3),
(50, 17, 4),
(51, 17, 5),
(52, 17, 6),
(53, 17, 7),
(54, 17, 8),
(55, 17, 9),
(56, 17, 10),
(73, 18, 2),
(74, 18, 3),
(75, 17, 11),
(76, 17, 12),
(77, 17, 13),
(78, 17, 14),
(79, 17, 15),
(80, 17, 16),
(81, 17, 17),
(82, 17, 18),
(83, 17, 19),
(84, 17, 20),
(85, 17, 21),
(86, 17, 22),
(87, 17, 23),
(88, 17, 24),
(89, 17, 25),
(90, 17, 26),
(91, 2, 1),
(92, 2, 2),
(93, 2, 3),
(94, 2, 5),
(95, 2, 6),
(96, 2, 7),
(97, 2, 8),
(98, 2, 9),
(99, 2, 10),
(100, 2, 11),
(101, 2, 12),
(102, 2, 13),
(103, 2, 14),
(104, 2, 15),
(105, 2, 16),
(106, 2, 17),
(107, 2, 21),
(108, 2, 22),
(109, 2, 23),
(110, 2, 24),
(111, 2, 25),
(112, 2, 26),
(113, 3, 13),
(114, 6, 1),
(115, 6, 13),
(116, 6, 21),
(117, 19, 2),
(118, 20, 1),
(119, 22, 1),
(120, 23, 1),
(121, 24, 1),
(122, 25, 1),
(123, 24, 2),
(124, 24, 3),
(125, 24, 4),
(126, 24, 5),
(127, 24, 6),
(128, 24, 7),
(129, 24, 8),
(130, 24, 9),
(131, 24, 10),
(132, 24, 11),
(133, 24, 12),
(134, 24, 13),
(135, 24, 14),
(136, 24, 15),
(137, 24, 16),
(138, 24, 17),
(139, 24, 18),
(140, 24, 19),
(141, 24, 20),
(142, 24, 21),
(143, 24, 22),
(144, 24, 23),
(145, 24, 24),
(146, 24, 25),
(147, 24, 26),
(148, 23, 2),
(149, 23, 3),
(150, 23, 4),
(151, 23, 5),
(152, 23, 6),
(153, 23, 7),
(154, 23, 8),
(155, 23, 9),
(156, 23, 10),
(157, 23, 11),
(158, 23, 12),
(159, 23, 13),
(160, 23, 14),
(161, 23, 15),
(162, 23, 16),
(163, 23, 17),
(164, 23, 18),
(165, 23, 19),
(166, 23, 20),
(167, 23, 21),
(168, 23, 22),
(169, 23, 23),
(170, 23, 24),
(171, 23, 25),
(172, 23, 26),
(173, 1, 1),
(174, 1, 3),
(175, 1, 4),
(176, 1, 6),
(177, 1, 7),
(178, 1, 8),
(179, 1, 9),
(180, 1, 10),
(181, 1, 11),
(182, 1, 12),
(183, 1, 13),
(184, 1, 14),
(185, 1, 15),
(186, 1, 16),
(187, 1, 17),
(188, 1, 18),
(189, 1, 19),
(190, 1, 20),
(191, 1, 21),
(192, 1, 22),
(193, 1, 23),
(194, 1, 24),
(195, 1, 25),
(196, 1, 26),
(197, 3, 1),
(198, 3, 2),
(199, 3, 4),
(200, 3, 5),
(201, 3, 6),
(202, 3, 7),
(203, 3, 8),
(204, 3, 9),
(205, 3, 10),
(206, 3, 11),
(207, 3, 12),
(208, 3, 14),
(209, 3, 15),
(210, 3, 16),
(211, 3, 17),
(212, 3, 18),
(213, 3, 19),
(214, 3, 20),
(215, 3, 21),
(216, 3, 22),
(217, 3, 23),
(218, 3, 24),
(219, 3, 25),
(220, 3, 26),
(221, 4, 1),
(222, 4, 4),
(223, 4, 5),
(224, 4, 6),
(225, 4, 7),
(226, 4, 8),
(227, 4, 9),
(228, 4, 10),
(229, 4, 11),
(230, 4, 12),
(231, 4, 13),
(232, 4, 14),
(233, 4, 15),
(234, 4, 16),
(235, 4, 17),
(236, 4, 18),
(237, 4, 19),
(238, 4, 20),
(239, 4, 21),
(240, 4, 22),
(241, 4, 23),
(242, 4, 24),
(243, 4, 25),
(244, 4, 26),
(245, 6, 2),
(246, 6, 3),
(247, 6, 4),
(248, 6, 5),
(249, 6, 6),
(250, 6, 7),
(251, 6, 8),
(252, 6, 9),
(253, 6, 10),
(254, 6, 11),
(255, 6, 12),
(256, 6, 14),
(257, 6, 15),
(258, 6, 16),
(259, 6, 17),
(260, 6, 18),
(261, 6, 19),
(262, 6, 20),
(263, 6, 22),
(264, 6, 23),
(265, 6, 24),
(266, 6, 25),
(267, 6, 26),
(268, 8, 1),
(269, 8, 5),
(270, 8, 6),
(271, 8, 7),
(272, 8, 8),
(273, 8, 9),
(274, 8, 10),
(275, 8, 11),
(276, 8, 12),
(277, 8, 13),
(278, 8, 14),
(279, 8, 15),
(280, 8, 16),
(281, 8, 17),
(282, 8, 18),
(283, 8, 19),
(284, 8, 20),
(285, 8, 21),
(286, 8, 22),
(287, 8, 23),
(288, 8, 24),
(289, 8, 25),
(290, 8, 26),
(291, 9, 8),
(292, 9, 9),
(293, 9, 10),
(294, 9, 11),
(295, 9, 12),
(296, 9, 13),
(297, 9, 14),
(298, 9, 15),
(299, 9, 16),
(300, 9, 17),
(301, 9, 18),
(302, 9, 19),
(303, 9, 20),
(304, 9, 21),
(305, 9, 22),
(306, 9, 23),
(307, 9, 24),
(308, 9, 25),
(309, 9, 26),
(310, 7, 1),
(311, 7, 2),
(312, 7, 4),
(313, 7, 5),
(314, 7, 6),
(315, 7, 7),
(316, 7, 8),
(317, 7, 9),
(318, 7, 10),
(319, 7, 11),
(320, 7, 12),
(321, 7, 13),
(322, 7, 14),
(323, 7, 15),
(324, 7, 16),
(325, 7, 17),
(326, 7, 18),
(327, 7, 19),
(328, 7, 20),
(329, 7, 21),
(330, 7, 22),
(331, 7, 23),
(332, 7, 24),
(333, 7, 25),
(334, 7, 26),
(335, 26, 1),
(336, 26, 2),
(337, 26, 3),
(338, 26, 4),
(339, 26, 5),
(340, 26, 6),
(341, 26, 7),
(342, 26, 8),
(343, 26, 9),
(344, 26, 10),
(345, 26, 11),
(346, 26, 12),
(347, 26, 13),
(348, 26, 14),
(349, 26, 15),
(350, 26, 16),
(351, 26, 17),
(352, 26, 18),
(353, 26, 19),
(354, 26, 20),
(355, 26, 21),
(356, 26, 22),
(357, 26, 23),
(358, 26, 24),
(359, 26, 25),
(360, 26, 26);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_code` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `product_category_id` int(11) DEFAULT NULL,
  `product_sub_cat_id` int(11) NOT NULL,
  `product_for` enum('men','women','children','other') COLLATE utf8_unicode_ci DEFAULT NULL,
  `product_country` int(11) DEFAULT NULL,
  `product_title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `product_sub_title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `product_slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `product_short_detail` text COLLATE utf8_unicode_ci NOT NULL,
  `product_full_detail` text COLLATE utf8_unicode_ci,
  `product_features` text COLLATE utf8_unicode_ci,
  `product_return_policy` text COLLATE utf8_unicode_ci,
  `product_color` text COLLATE utf8_unicode_ci NOT NULL,
  `product_size` text COLLATE utf8_unicode_ci NOT NULL,
  `product_condition` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `product_price_currency` char(10) COLLATE utf8_unicode_ci DEFAULT 'AED',
  `product_cost_price` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `product_old_sell_price` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `product_sell_price` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `product_offer_deal` enum('0','1') COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `product_buffer_sell_price` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `product_buffer_sell_percentage` int(11) NOT NULL,
  `product_offer_percentage` int(11) NOT NULL,
  `product_offer_price` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `product_offer_start_date` datetime DEFAULT NULL,
  `product_offer_end_date` datetime DEFAULT NULL,
  `product_weight` int(11) DEFAULT NULL,
  `product_unit` char(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `product_image_1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `product_image_2` varchar(252) COLLATE utf8_unicode_ci DEFAULT NULL,
  `product_image_3` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `product_image_4` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `counts` int(11) DEFAULT '1',
  `added_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `added_by` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `edit_date` date DEFAULT NULL,
  `edit_by` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `delete_status` int(11) DEFAULT '0',
  `admin_delete_status` enum('0','1') COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '1',
  `admin_status` enum('0','1') COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `admin_ref` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `seller_ref` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `seller_user_ref` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `new_arrival` enum('0','1') COLLATE utf8_unicode_ci DEFAULT '1',
  `sell_offer` enum('0','1') COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `sell_offer_percentage` int(11) NOT NULL,
  `sp_product_status` enum('0','1') COLLATE utf8_unicode_ci NOT NULL,
  `brands_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fa_icon` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `deleted_date` datetime DEFAULT NULL,
  `deleted_by` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_code`, `product_category_id`, `product_sub_cat_id`, `product_for`, `product_country`, `product_title`, `product_sub_title`, `product_slug`, `product_short_detail`, `product_full_detail`, `product_features`, `product_return_policy`, `product_color`, `product_size`, `product_condition`, `product_price_currency`, `product_cost_price`, `product_old_sell_price`, `product_sell_price`, `product_offer_deal`, `product_buffer_sell_price`, `product_buffer_sell_percentage`, `product_offer_percentage`, `product_offer_price`, `product_offer_start_date`, `product_offer_end_date`, `product_weight`, `product_unit`, `product_image_1`, `product_image_2`, `product_image_3`, `product_image_4`, `counts`, `added_date`, `added_by`, `edit_date`, `edit_by`, `delete_status`, `admin_delete_status`, `status`, `admin_status`, `admin_ref`, `seller_ref`, `seller_user_ref`, `new_arrival`, `sell_offer`, `sell_offer_percentage`, `sp_product_status`, `brands_id`, `fa_icon`, `deleted_date`, `deleted_by`) VALUES
(1, 'E81B157', 3, 8, '', 153, 'power bank Pb39a', NULL, 'power-bank-pb39a-1545473343', '<p>material : pb+abs</p>\n\n<p>Output : 5V,1A and 5V 2A</p>\n\n<p>Input 5V 2A</p>\n\n<p>Rated Capacity: 10000mah</p>\n\n<p>Actual capacity : 8000mah</p>\n\n<p>Color shipment will be random depending upon stock availability</p>\n', '<p>material : pb+abs</p>\n\n<p>Output : 5V,1A and 5V 2A</p>\n\n<p>Input 5V 2A</p>\n\n<p>Rated Capacity: 10000mah</p>\n\n<p>Actual capacity : 8000mah</p>\n\n<p>Color shipment will be random depending upon stock availability</p>\n', '<p>material : pb+abs</p>\n\n<p>Output : 5V,1A and 5V 2A</p>\n\n<p>Input 5V 2A</p>\n\n<p>Rated Capacity: 10000mah</p>\n\n<p>Actual capacity : 8000mah</p>\n\n<p>Color shipment will be random depending upon stock availability</p>\n', '<p>6 month of warrenty</p>\n', '', '', NULL, '$', NULL, '16.5', '16.5', '', '16.5', 0, 0, '0', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', 'jpg', '', '', '', 1, '2018-12-19 08:57:29', NULL, '2018-12-22', 'admin', 1, '0', 0, '1', '5', '', '', '1', '', 0, '0', '--- Select Brand ---', '0', '2019-01-21 12:11:27', 'admin'),
(3, '3923136', 2, 0, '', 0, 'SOMHO BLUETOOTH SPEAKER (S-311)	', NULL, 'somho-bluetooth-speaker-s-311', '<p>Forget all replicas and order Somho&rsquo;s s311 speaker for yourself. With great battery backup, it&rsquo;s best for gatherings, travelling and as home speaker.</p>\n', '<p>Contact: imo/viber/whatsapp: 9808529563<br />\nForget all replicas and order Somho&rsquo;s s311 speaker for yourself. With great battery backup, it&rsquo;s best for gatherings, travelling and as home speaker.<br />\nFeatures:<br />\n&ndash; Bluetooth V2.1 + EDR Technology, long transmission distance up to 10 meters<br />\n&ndash; Wirelessly control your music through the Bluetooth function<br />\n&ndash; Compatible with all Bluetooth devices<br />\n&ndash; Enable directly playing MP3 files music in TF card<br />\n&ndash; 3.5mm line-in function, support headphone insert<br />\n&ndash; FM radio, listen to world affairs<br />\n&ndash; With rechargeable lithium battery, charging by USB or other DC 5V<br />\n&ndash; Portable size design, ideal for outing and traveling.</p>\n', '<p>&ndash; Bluetooth V2.1 + EDR Technology, long transmission distance up to 10 meters<br />\n&ndash; Wirelessly control your music through the Bluetooth function<br />\n&ndash; Compatible with all Bluetooth devices<br />\n&ndash; Enable directly playing MP3 files music in TF card<br />\n&ndash; 3.5mm line-in function, support headphone insert<br />\n&ndash; FM radio, listen to world affairs<br />\n&ndash; With rechargeable lithium battery, charging by USB or other DC 5V<br />\n&ndash; Portable size design, ideal for outing and traveling.</p>\n', '', '', '', NULL, 'NPR', NULL, '1700', '1700', '', '1700', 0, 0, '0', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', 'jpg', '', '', '', 5, '2018-12-21 16:20:08', NULL, '2018-12-26', 'admin', 0, '0', 1, '1', '', '1', '', '1', '', 0, '0', '--- Select Brand ---', '0', NULL, NULL),
(4, '95A2661', 2, 13, '', 44, 'HBQ i7 TWS Wireless Earphone Headset-White', NULL, 'hbq-i7-tws-wireless-earphone-headset-white-1545809116', '<ul>\n	<li>One to two connections, headphones can be connected to two mobile phones;</li>\n</ul>\n', '<h2>Product details of HBQ i7 TWS Wireless Earphone Headset-White</h2>\n\n<ul>\n	<li>Bluetooth version: V4.2 EDR</li>\n	<li>Play time: 5-6H</li>\n	<li>Standby time: 100H</li>\n	<li>Battery capacity: 65mAh * 2</li>\n	<li>Full set of weight: 103g</li>\n	<li>Packing size: 8.1 * 4.1 * 13.1cm</li>\n	<li>Standard accessories: headset, charging line, manual, box</li>\n</ul>\n\n<ul>\n	<li>Listening to the song correct, support songs and then call;</li>\n	<li>Caller ID, all intelligent Chinese and English voice prompts, boot, pair, shut down the phone power is low voice prompts;</li>\n	<li>IOS power display, For Apple phone connected to the headset after the power display, you can always watch the headset power situation;</li>\n	<li>One to two connections, headphones can be connected to two mobile phones;</li>\n	<li>Bluetooth headset every time connected to the phone after the shutdown, and then open the Bluetooth headset will automatically connect back to the phone, but also more convenient;</li>\n	<li>Intelligent compatibility: support all with Bluetooth-enabled mobile phones, tablet, notebook. Compatible with more than 100% of the APP, player, TV, chat and other common</li>\n</ul>\n', '<ul>\n	<li>Listening to the song correct, support songs and then call;</li>\n	<li>Caller ID, all intelligent Chinese and English voice prompts, boot, pair, shut down the phone power is low voice prompts;</li>\n</ul>\n', '', 'White', '8.1 * 4,1 * 13.1 cm', NULL, 'NPR', NULL, '1400', '1330', '', '1330', 5, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 103, '', 'jpg', 'jpg', 'jpg', 'jpg', 10, '2018-12-26 03:54:11', NULL, '2018-12-26', 'admin', 0, '0', 1, '1', '5', '', '', '1', '1', 5, '0', '5', '0', NULL, NULL),
(5, '32C4817', 1, 7, 'men', 44, '5 in 1 Magnetic Glasses and especially for Night Vision', NULL, '5-in-1-magnetic-glasses-and-especially-for-night-vision', '', '<h2>&nbsp;</h2>\n\n<ul>\n	<li>Ideal For: Men &amp; Women</li>\n	<li>Type: Spectacle Sunglasses</li>\n	<li>Style Code: Polarized 5 In 1 Clip On Frame Plus</li>\n	<li>Frame: Full-frame</li>\n	<li>Lens Material: Fibre</li>\n	<li>Frame Material: Plastic</li>\n</ul>\n\n<ul>\n	<li><a>#Fashion</a><a>#Spectacle</a><a>#Frame</a><a>#Men</a>&amp;<a>#Women</a><a>#With</a>5<a>#Pieces</a><a>#Clip</a><a>#On</a><a>#Sunglasses</a>:-</li>\n	<li>***पावर हालेर पनि लगाउन मिल्ने***</li>\n	<li>* Frame</li>\n	<li>* Polarized Lens</li>\n	<li>* Blue Lens</li>\n	<li>* Mercury Lens</li>\n	<li>* Brown Lens</li>\n	<li>* Night Vision Lens</li>\n</ul>\n', '<p>It is very usefull in any environment and we can use any of the them as our desire.</p>\n\n<p>*पावर हालेर पनि लगाउन मिल्ने</p>\n', '', 'Black', 'XL, XXL', NULL, 'NPR', NULL, '1000', '930', '', '930', 7, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 250, 'gram', 'jpg', 'jpg', 'jpg', NULL, 10, '2018-12-26 04:32:53', NULL, '2018-12-26', 'admin', 0, '0', 1, '1', '5', '', '', '1', '1', 7, '0', '5', '0', NULL, NULL),
(6, 'CCD4816', 1, 7, 'men', 0, 'Yellow High Quality Night Vision Eyewear For Men', NULL, 'yellow-high-quality-night-vision-eyewear-for-men', '<p>&nbsp;Driver glasses</p>\n', '<h2>Product details of Yellow High Quality Night Vision Eyewear For Men</h2>\n\n<ul>\n	<li>Anti-UV rating: UV400</li>\n	<li>Visible light perspective: 99%</li>\n	<li>Night vision glasses: Driver glasses</li>\n	<li>Sunglasses Style: Fashion Vintage Retro Style Glasses, Elegant Style</li>\n</ul>\n\n<ul>\n	<li>Item Type: Eyewear</li>\n	<li>Gender: Men/Women</li>\n	<li>Lenses Optical Attribute: Gradient,UV400, Anti-Reflective</li>\n	<li>Lenses Material: Polycarbonate</li>\n	<li>Style: Pilot</li>\n	<li>Lens Width: 58mm</li>\n	<li>Frame Material: Plastic</li>\n	<li>Lens Height: 48mm</li>\n</ul>\n', '<p>Fashion Vintage Retro Style Glasses, Elegant Style</p>\n', '', 'Yellow', 'XL, XXL', NULL, 'NPR', NULL, '499', '499', '', '499', 0, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 150, 'gram', 'jpg', 'jpg', NULL, NULL, 20, '2018-12-26 04:45:55', NULL, NULL, NULL, 0, '0', 1, '1', '5', '', '', '1', '0', 0, '0', '5', '0', NULL, NULL),
(7, '9F3E366', 2, 14, 'other', 181, 'Instant Electric Water Heating Faucet Tap - (White)', NULL, 'instant-electric-water-heating-faucet-tap-white', '<ul>\n	<li>Fast &amp; efficient, Easy to use, Water temperature adjustable 30 to 60 Degree celsius</li>\n</ul>\n', '<ul>\n	<li>Low Consumption</li>\n	<li>Easy to install and operate</li>\n	<li>Just 3-5 Seconds</li>\n	<li>30-60 degree hot water for using</li>\n	<li>Need not preheat, provide hot water all the time</li>\n	<li>Water is seperate from electric</li>\n	<li>Absolute Safety</li>\n	<li>With Anti-leakage electric equipment Protection</li>\n	<li>Water flow switch, to ensure the electricity water power is cut off</li>\n	<li>Fast &amp; efficient, Easy to use, Water temperature adjustable 30 to 60 Degree celsius</li>\n</ul>\n\n<p>**SPECIFICATIONS**<br />\nPower Rating</p>\n\n<ul>\n	<li>Rated Power: 3000W</li>\n	<li>Power: 220V</li>\n	<li>Water Pressure: 0.04-0.5MPa</li>\n</ul>\n', '<ul>\n	<li>Low Consumption</li>\n	<li>Easy to install and operate</li>\n	<li>Just 3-5 Seconds</li>\n	<li>30-60 degree hot water for using</li>\n	<li>Need not preheat, provide hot water all the time</li>\n	<li>Water is seperate from electric</li>\n	<li>Absolute Safety</li>\n	<li>With Anti-leakage electric equipment Protection</li>\n	<li>Water flow switch, to ensure the electricity water power is cut off</li>\n	<li>Fast &amp; efficient, Easy to use, Water temperature adjustable 30 to 60 Degree celsius</li>\n</ul>\n', '', 'White', 'XL,XXL', NULL, 'NPR', NULL, '3500', '3185', '', '3185', 9, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 850, 'gram', 'jpg', 'jpg', 'jpg', NULL, 10, '2018-12-26 06:58:16', NULL, '2018-12-26', 'admin', 0, '0', 1, '1', '5', '', '', '1', '1', 9, '0', '5', '0', NULL, NULL),
(8, 'FA2A603', 15, 16, 'men', 109, 'NaviForce NF9110 Luxury Chronograph Analog Watch for Men', NULL, 'naviforce-nf9110-luxury-chronograph-analog-watch-for-men', '<p>100% genuine (The SELLER guarantees the authenticity of the product)</p>\n', '<ul>\n	<li>Movement : Quartz</li>\n	<li>Display Type : Analog</li>\n	<li>Window Material : Hardlex Glass</li>\n	<li>Case Material: Alloy</li>\n	<li>Dial Color: Black/White</li>\n	<li>Case Diameter: 45mm</li>\n	<li>Case Thickness: 13mm</li>\n	<li>Case Shape: Round</li>\n	<li>Strap Material: PU Leather</li>\n	<li>Band Length: 240mm</li>\n	<li>Band Width: 22mm</li>\n	<li>Strap Color: Black/White</li>\n	<li>Clasp Type: Needle Buckle</li>\n</ul>\n', '<ul>\n	<li>100% genuine (The SELLER guarantees the authenticity of the product)</li>\n	<li>Brand/Series : Navi Force</li>\n	<li>Model Number : NF9110</li>\n	<li>For: Men</li>\n	<li>Water Resistance: 30m water resistance depth such as rainwater splash or washing hands</li>\n	<li>Features: Date Week and 24 Hours display</li>\n</ul>\n', '', 'Black', 'XL, XXL', NULL, 'NPR', NULL, '2999', '2759.08', '', '2759.08', 8, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 250, 'gram', 'jpg', NULL, NULL, NULL, 5, '2018-12-26 07:28:47', NULL, NULL, NULL, 1, '0', 0, '1', '5', '', '', '1', '1', 8, '0', '6', '0', '2019-01-21 12:11:20', 'admin'),
(9, '084E90B', 19, 27, '', 0, 'Portable Mini Sewing Machine', NULL, 'portable-mini-sewing-machine-1548098249', '<p>This is a mini sewing machine that features double thread, double speed and automatic thread rewind&nbsp;<br />\n&nbsp;</p>\n', '<ul>\n	<li>Choice Of Foot Pedal Or Auto-Sewing Mode - If It&#39;s Not Convenient to Use The Foot Pedal, You Can Set The Sewing Speed To Either H For High Or L For Low</li>\n	<li>Sews in a Durable Chain Locking Stitch.</li>\n	<li>Small and Portable - Runs on Either AC/DCPower or 4 AA Batteries (Not Included).</li>\n	<li>Work Light - Concentrates Light Right Where You Need It. Colours as per Availability</li>\n	<li>Dimension: 18Cm X 9cm X 20cm</li>\n</ul>\n\n<p>This is a mini sewing machine that features double thread, double speed and automatic thread rewind&nbsp;<br />\n<br />\nYou can use hand switch or foot pedal to start. Foot pedal, adaptor, and thread bag included. Uses DC 6V power. The mini Sew Machine can stitch on any fabric from delicate silks to denims.With a top drop-in bobbin, this Sewing Machine makes threading the needle seem like a cake walk. The Sew Machine also has an automatic thread rewind feature and a simple on/off control button which saves your time and energy. Occasionally, the bobbin case may become loose and move freely within the throat of the machine, or it may pop out. This can be remedied by re-aligning the bobbin. The reposition of the bobbin can be done by hand by turning it and gently shaking back and forth. If the bobbin is stuck and you are not able to turn it or re-position it by hand, a screwdriver can be used gently to lift it in order to reposition correctly and place the black knob to the left side of the white plastic edge. Please be careful to gently lift the plastic edge with the screwdriver, applying too much pressure can make the plastic edge break&nbsp;<br />\n<strong>Note:Before you purchase ,please attention this Mini Sewing Machine is a basic level machine, it can&#39;t sewing the thick certain fabrics(thick jeans),just ordinary thin fabric&nbsp;</strong></p>\n', '<ul>\n	<li>Small and Portable - Runs on Either AC/DCPower or 4 AA Batteries (Not Included).</li>\n</ul>\n', '', 'White, Pink', '18Cm ,  9cm,  20cm', NULL, 'NPR', NULL, '1999', '1999', '0', '1999', 0, 0, '', '2019-01-22 00:00:00', '2019-01-24 00:00:00', 1, '', 'jpg', 'jpg', 'jpg', '', 15, '2018-12-30 11:31:32', NULL, '2019-01-21', 'admin', 0, '0', 1, '1', '5', '', '', '1', '0', 0, '1', '5', '0', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subscriber_group`
--

CREATE TABLE `subscriber_group` (
  `id` int(11) NOT NULL,
  `group_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lists` text COLLATE utf8_unicode_ci NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `delete_status` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `subscriber_group`
--

INSERT INTO `subscriber_group` (`id`, `group_name`, `lists`, `date`, `updated`, `status`, `delete_status`) VALUES
(1, 'New Test Group', 'a:9:{i:0;s:1:\"4\";i:1;s:1:\"9\";i:2;s:2:\"11\";i:3;s:2:\"13\";i:4;s:2:\"16\";i:5;s:2:\"17\";i:6;s:2:\"18\";i:7;s:2:\"19\";i:8;s:2:\"20\";}', '2017-10-03 06:55:40', '', 1, 0),
(2, 'This is Second Group', 'a:5:{i:0;s:1:\"8\";i:1;s:2:\"12\";i:2;s:2:\"13\";i:3;s:2:\"15\";i:4;s:2:\"17\";}', '2017-10-03 07:39:22', '2017-10-03:05:56:44', 1, 1),
(3, 'internal am', 'a:2:{i:0;s:2:\"23\";i:1;s:2:\"27\";}', '2017-11-18 06:57:38', '', 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adjacency_groups`
--
ALTER TABLE `adjacency_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `all_values`
--
ALTER TABLE `all_values`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `igc_admin_email`
--
ALTER TABLE `igc_admin_email`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `igc_admin_mail_setting`
--
ALTER TABLE `igc_admin_mail_setting`
  ADD KEY `fk_mtype_key` (`type_id`),
  ADD KEY `fk_madmin_key` (`admin_id`);

--
-- Indexes for table `igc_advertisement`
--
ALTER TABLE `igc_advertisement`
  ADD PRIMARY KEY (`ad_id`);

--
-- Indexes for table `igc_album`
--
ALTER TABLE `igc_album`
  ADD PRIMARY KEY (`album_id`);

--
-- Indexes for table `igc_breaking`
--
ALTER TABLE `igc_breaking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `igc_category_packages`
--
ALTER TABLE `igc_category_packages`
  ADD KEY `fk_cat_pkg1` (`category_id`),
  ADD KEY `fk_cat_pkg2` (`package_id`);

--
-- Indexes for table `igc_contact_feedback`
--
ALTER TABLE `igc_contact_feedback`
  ADD PRIMARY KEY (`cf_id`);

--
-- Indexes for table `igc_content`
--
ALTER TABLE `igc_content`
  ADD PRIMARY KEY (`content_id`);

--
-- Indexes for table `igc_content_category`
--
ALTER TABLE `igc_content_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `igc_content_comments`
--
ALTER TABLE `igc_content_comments`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `fk_content_cmt` (`content_id`);

--
-- Indexes for table `igc_content_emoji`
--
ALTER TABLE `igc_content_emoji`
  ADD PRIMARY KEY (`emoji_id`);

--
-- Indexes for table `igc_content_tabs`
--
ALTER TABLE `igc_content_tabs`
  ADD PRIMARY KEY (`tab_id`),
  ADD KEY `fk_content` (`content_id`);

--
-- Indexes for table `igc_content_tags`
--
ALTER TABLE `igc_content_tags`
  ADD KEY `fk_cont` (`content_id`),
  ADD KEY `fk_tax` (`term_id`);

--
-- Indexes for table `igc_gallery`
--
ALTER TABLE `igc_gallery`
  ADD PRIMARY KEY (`gallery_id`);

--
-- Indexes for table `igc_guest`
--
ALTER TABLE `igc_guest`
  ADD PRIMARY KEY (`guest_id`);

--
-- Indexes for table `igc_image`
--
ALTER TABLE `igc_image`
  ADD PRIMARY KEY (`image_id`),
  ADD KEY `album_id` (`album_id`);

--
-- Indexes for table `igc_log_action`
--
ALTER TABLE `igc_log_action`
  ADD PRIMARY KEY (`action_id`);

--
-- Indexes for table `igc_mailing_type`
--
ALTER TABLE `igc_mailing_type`
  ADD PRIMARY KEY (`type_id`);

--
-- Indexes for table `igc_mail_server_setting`
--
ALTER TABLE `igc_mail_server_setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `igc_package_adjacency_groups`
--
ALTER TABLE `igc_package_adjacency_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `igc_package_album`
--
ALTER TABLE `igc_package_album`
  ADD KEY `fk_pa_alb` (`album_id`),
  ADD KEY `fk_pa_pkg` (`package_id`);

--
-- Indexes for table `igc_package_category`
--
ALTER TABLE `igc_package_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `igc_pictures`
--
ALTER TABLE `igc_pictures`
  ADD PRIMARY KEY (`pictures_id`);

--
-- Indexes for table `igc_popup`
--
ALTER TABLE `igc_popup`
  ADD PRIMARY KEY (`popup_id`);

--
-- Indexes for table `igc_quick_contact_message`
--
ALTER TABLE `igc_quick_contact_message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `igc_reporter`
--
ALTER TABLE `igc_reporter`
  ADD PRIMARY KEY (`reporter_id`);

--
-- Indexes for table `igc_review`
--
ALTER TABLE `igc_review`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `igc_site_settings`
--
ALTER TABLE `igc_site_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `igc_site_users`
--
ALTER TABLE `igc_site_users`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `igc_slider`
--
ALTER TABLE `igc_slider`
  ADD PRIMARY KEY (`slider_id`);

--
-- Indexes for table `igc_subscribe_users`
--
ALTER TABLE `igc_subscribe_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `igc_taxonomy_terms`
--
ALTER TABLE `igc_taxonomy_terms`
  ADD PRIMARY KEY (`term_id`);

--
-- Indexes for table `igc_team`
--
ALTER TABLE `igc_team`
  ADD PRIMARY KEY (`team_id`);

--
-- Indexes for table `igc_users`
--
ALTER TABLE `igc_users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `igc_user_logs`
--
ALTER TABLE `igc_user_logs`
  ADD PRIMARY KEY (`log_id`);

--
-- Indexes for table `newletter_create`
--
ALTER TABLE `newletter_create`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_category`
--
ALTER TABLE `news_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `subscriber_group`
--
ALTER TABLE `subscriber_group`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adjacency_groups`
--
ALTER TABLE `adjacency_groups`
  MODIFY `id` smallint(4) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `all_values`
--
ALTER TABLE `all_values`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=247;

--
-- AUTO_INCREMENT for table `igc_admin_email`
--
ALTER TABLE `igc_admin_email`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `igc_advertisement`
--
ALTER TABLE `igc_advertisement`
  MODIFY `ad_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `igc_album`
--
ALTER TABLE `igc_album`
  MODIFY `album_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `igc_breaking`
--
ALTER TABLE `igc_breaking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `igc_contact_feedback`
--
ALTER TABLE `igc_contact_feedback`
  MODIFY `cf_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `igc_content`
--
ALTER TABLE `igc_content`
  MODIFY `content_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `igc_content_category`
--
ALTER TABLE `igc_content_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `igc_content_comments`
--
ALTER TABLE `igc_content_comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `igc_content_emoji`
--
ALTER TABLE `igc_content_emoji`
  MODIFY `emoji_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `igc_content_tabs`
--
ALTER TABLE `igc_content_tabs`
  MODIFY `tab_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=202;

--
-- AUTO_INCREMENT for table `igc_gallery`
--
ALTER TABLE `igc_gallery`
  MODIFY `gallery_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `igc_guest`
--
ALTER TABLE `igc_guest`
  MODIFY `guest_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `igc_image`
--
ALTER TABLE `igc_image`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `igc_package_category`
--
ALTER TABLE `igc_package_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `igc_pictures`
--
ALTER TABLE `igc_pictures`
  MODIFY `pictures_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `igc_reporter`
--
ALTER TABLE `igc_reporter`
  MODIFY `reporter_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `igc_review`
--
ALTER TABLE `igc_review`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `igc_site_users`
--
ALTER TABLE `igc_site_users`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `igc_slider`
--
ALTER TABLE `igc_slider`
  MODIFY `slider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `igc_subscribe_users`
--
ALTER TABLE `igc_subscribe_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `igc_taxonomy_terms`
--
ALTER TABLE `igc_taxonomy_terms`
  MODIFY `term_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `igc_team`
--
ALTER TABLE `igc_team`
  MODIFY `team_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `igc_user_logs`
--
ALTER TABLE `igc_user_logs`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1966;

--
-- AUTO_INCREMENT for table `newletter_create`
--
ALTER TABLE `newletter_create`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `news_category`
--
ALTER TABLE `news_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=361;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `subscriber_group`
--
ALTER TABLE `subscriber_group`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
