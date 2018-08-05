-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2018 at 07:27 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `social`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(20) NOT NULL,
  `commenter_id` int(20) NOT NULL,
  `post_id` int(20) NOT NULL,
  `commentdate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `commenter_id`, `post_id`, `commentdate`, `text`) VALUES
(1, 21, 143, '2017-07-13 14:39:02', 'ok'),
(2, 21, 145, '2017-07-13 14:55:09', 'ok'),
(3, 21, 144, '2017-07-13 14:55:17', 'nice pic'),
(4, 21, 145, '2017-07-13 15:05:01', 'thik hai'),
(5, 21, 145, '2017-07-14 11:52:13', 'nice '),
(6, 21, 144, '2017-07-14 12:14:12', 'yes'),
(7, 31, 146, '2017-07-14 12:15:41', 'nice pic'),
(8, 23, 146, '2017-07-14 12:22:44', 'ok'),
(9, 23, 142, '2017-07-14 12:34:55', 'yes'),
(10, 23, 141, '2017-07-14 12:39:02', 'ok'),
(11, 23, 142, '2017-07-14 12:43:12', 'ok'),
(12, 23, 142, '2017-07-14 12:43:53', 'thanks'),
(13, 23, 142, '2017-07-14 12:44:49', 'thanks'),
(14, 23, 141, '2017-07-14 12:49:46', 'uh'),
(15, 23, 138, '2017-07-14 12:50:51', 'ok'),
(16, 23, 138, '2017-07-14 12:52:09', 'thik hai'),
(17, 23, 138, '2017-07-14 12:52:38', 'ok'),
(18, 23, 138, '2017-07-14 12:55:41', 'bye'),
(19, 23, 138, '2017-07-14 12:56:23', 'no'),
(20, 23, 138, '2017-07-14 12:57:25', 'ok'),
(21, 23, 137, '2017-07-14 12:58:01', 'ok'),
(22, 23, 137, '2017-07-14 12:59:04', 'yes'),
(23, 23, 137, '2017-07-14 12:59:33', 'nice'),
(24, 23, 136, '2017-07-14 13:00:43', 'nice pic'),
(25, 23, 136, '2017-07-14 13:03:33', 'nice pic'),
(26, 23, 136, '2017-07-14 13:04:25', 'bye'),
(27, 23, 146, '2017-07-14 13:12:18', 'nice'),
(28, 23, 146, '2017-07-14 13:12:54', 'sdsadd'),
(29, 23, 146, '2017-07-14 13:13:32', 'sfsfafs'),
(30, 23, 146, '2017-07-14 13:14:29', 'dsafasfdsfff'),
(31, 23, 146, '2017-07-14 13:15:01', 'yes'),
(32, 23, 138, '2017-07-14 13:18:32', 'thanks'),
(33, 23, 138, '2017-07-14 13:24:31', 'yes'),
(34, 23, 138, '2017-07-14 13:24:54', 'thanks'),
(35, 23, 137, '2017-07-14 13:30:12', 'ok'),
(36, 23, 137, '2017-07-14 13:31:00', 'nice'),
(37, 23, 137, '2017-07-14 13:31:18', 'ok'),
(38, 23, 137, '2017-07-14 13:31:57', 'yes'),
(39, 23, 137, '2017-07-14 13:32:56', 'thanks'),
(40, 23, 137, '2017-07-14 13:36:22', 'asdasdd'),
(41, 23, 136, '2017-07-14 13:36:48', 'bye'),
(42, 23, 136, '2017-07-14 13:37:31', 'no'),
(43, 23, 136, '2017-07-14 13:37:37', 'no'),
(44, 23, 135, '2017-07-14 13:38:37', 'hola'),
(45, 23, 135, '2017-07-14 13:39:09', 'bonjor'),
(46, 23, 135, '2017-07-14 13:39:41', 'si'),
(47, 23, 135, '2017-07-14 13:42:15', 'heya'),
(48, 23, 137, '2017-07-14 13:47:03', 'wow'),
(49, 23, 136, '2017-07-14 13:47:47', 'worked'),
(50, 23, 135, '2017-07-14 13:48:13', 'cool!'),
(51, 23, 136, '2017-07-14 13:49:17', 'ok'),
(52, 23, 136, '2017-07-14 13:49:26', 'yes'),
(53, 31, 138, '2017-07-14 14:00:13', 'nice'),
(54, 31, 142, '2017-07-14 14:00:36', 'yes'),
(55, 31, 137, '2017-07-14 14:06:38', 'ok'),
(56, 21, 145, '2017-07-14 14:20:22', 'nicwe'),
(57, 21, 145, '2017-07-14 14:20:25', 'yes'),
(58, 21, 144, '2017-07-14 14:20:34', 'bye'),
(59, 21, 145, '2017-07-14 14:20:50', 'thanks'),
(60, 21, 143, '2017-07-14 14:20:59', 'ni'),
(61, 21, 145, '2017-07-14 14:21:15', 'thanks'),
(62, 21, 145, '2017-07-14 14:22:50', 'bye'),
(63, 21, 144, '2017-07-14 14:23:00', 'oo akhil'),
(64, 21, 144, '2017-07-14 14:23:18', 'kjbkj'),
(65, 21, 145, '2017-07-14 14:23:23', 'jbjhv'),
(66, 21, 145, '2017-07-14 14:23:37', 'hvhvj'),
(67, 21, 142, '2017-07-14 14:24:46', 'bye'),
(68, 21, 142, '2017-07-14 14:25:30', 'ok'),
(69, 21, 138, '2017-07-14 14:26:37', 'no'),
(70, 21, 145, '2017-07-14 14:27:31', 'bye'),
(71, 21, 139, '2017-07-14 14:27:55', 'noe'),
(72, 21, 145, '2017-07-14 14:28:36', 'not workde'),
(73, 21, 145, '2017-07-14 14:29:14', 'asasdsad'),
(74, 21, 146, '2017-07-14 14:30:52', 'ok'),
(75, 21, 142, '2017-07-14 14:30:59', 'bye'),
(76, 21, 138, '2017-07-14 14:31:46', 'ok'),
(77, 21, 145, '2017-07-14 14:32:02', 'adsda'),
(78, 21, 145, '2017-07-14 14:32:17', 'ok'),
(79, 21, 101, '2017-07-14 14:33:04', 'bye'),
(80, 21, 145, '2017-07-14 14:35:27', 'yes'),
(81, 23, 145, '2017-07-14 14:35:50', 'thanks'),
(82, 23, 152, '2017-07-14 14:48:50', 'jhi'),
(83, 21, 145, '2017-07-16 12:27:33', 'nice'),
(84, 21, 152, '2017-07-21 08:59:37', 'hi'),
(85, 21, 144, '2017-10-31 13:54:49', 'ok'),
(86, 23, 153, '2017-11-06 19:00:08', 'nice'),
(87, 21, 154, '2017-11-08 11:33:42', 'nice mai be ho esme'),
(88, 21, 154, '2017-11-21 15:05:09', 'bus thik hai'),
(89, 21, 154, '2018-08-04 10:59:17', 'ok'),
(90, 21, 144, '2018-08-05 21:40:26', 'hi'),
(91, 21, 154, '2018-08-05 21:56:06', 'nice bhai'),
(92, 21, 156, '2018-08-05 22:21:30', 'nice'),
(93, 21, 158, '2018-08-05 22:34:13', 'hi'),
(94, 21, 158, '2018-08-05 22:37:20', 'ok'),
(95, 21, 159, '2018-08-05 22:45:40', 'Nice pIc bhai');

-- --------------------------------------------------------

--
-- Table structure for table `friendrequest`
--

CREATE TABLE `friendrequest` (
  `id` int(20) NOT NULL,
  `sender_id` int(20) NOT NULL,
  `receiver_id` int(20) NOT NULL,
  `createdate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `request` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `friendrequest`
--

INSERT INTO `friendrequest` (`id`, `sender_id`, `receiver_id`, `createdate`, `request`) VALUES
(2, 21, 23, '2017-07-08 14:14:26', 2),
(3, 21, 31, '2017-07-08 14:41:22', 2),
(4, 21, 30, '2017-07-08 19:30:19', 2),
(5, 33, 21, '2017-07-08 19:33:09', 2),
(6, 33, 23, '2017-07-08 19:33:12', 1),
(7, 33, 28, '2017-07-08 19:33:13', 1),
(8, 34, 21, '2017-07-14 14:44:05', 2),
(9, 21, 32, '2017-11-06 18:56:14', 1),
(10, 35, 21, '2017-11-06 19:18:45', 2),
(11, 23, 30, '2017-11-08 10:08:07', 1),
(12, 36, 21, '2017-11-08 11:32:52', 2),
(13, 36, 31, '2017-11-08 11:32:54', 1),
(14, 38, 21, '2018-08-05 22:44:50', 2),
(15, 38, 28, '2018-08-05 22:44:52', 1);

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `id` int(20) NOT NULL,
  `post_id` int(20) NOT NULL,
  `liker_id` int(20) NOT NULL,
  `createdate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`id`, `post_id`, `liker_id`, `createdate`) VALUES
(5, 142, 23, '2017-07-12 19:08:32'),
(6, 146, 31, '2017-07-12 19:12:30'),
(11, 138, 23, '2017-07-12 19:14:47'),
(17, 99, 21, '2017-07-13 11:54:05'),
(26, 144, 21, '2017-07-13 11:57:37'),
(27, 98, 21, '2017-07-13 11:57:40'),
(30, 142, 31, '2017-07-13 12:01:46'),
(31, 56, 21, '2017-07-13 12:43:19'),
(35, 146, 21, '2017-07-13 12:50:22'),
(38, 139, 21, '2017-07-13 12:54:44'),
(43, 140, 21, '2017-07-13 12:55:18'),
(45, 142, 21, '2017-07-14 12:13:47'),
(46, 144, 31, '2017-07-14 12:15:18'),
(49, 152, 23, '2017-07-14 14:48:23'),
(51, 145, 21, '2017-07-21 08:57:08'),
(52, 152, 21, '2017-07-21 08:59:30'),
(53, 143, 21, '2017-09-02 10:25:30'),
(56, 153, 23, '2017-11-06 19:00:03'),
(57, 153, 35, '2017-11-06 19:19:48'),
(58, 152, 35, '2017-11-06 19:19:51'),
(59, 151, 35, '2017-11-06 19:19:53'),
(60, 145, 23, '2017-11-08 10:08:51'),
(61, 153, 21, '2017-11-08 10:18:16'),
(62, 154, 36, '2017-11-08 11:32:31'),
(65, 154, 21, '2017-11-08 11:33:49'),
(66, 153, 36, '2017-11-08 11:34:04'),
(67, 152, 36, '2017-11-08 11:34:05'),
(68, 151, 36, '2017-11-08 11:34:08'),
(69, 155, 21, '2017-11-08 15:02:53'),
(70, 158, 21, '2018-08-04 11:00:23'),
(71, 157, 21, '2018-08-05 17:08:13'),
(72, 156, 21, '2018-08-05 17:08:14'),
(73, 158, 23, '2018-08-05 22:38:59'),
(74, 157, 23, '2018-08-05 22:39:01'),
(75, 156, 23, '2018-08-05 22:39:09'),
(76, 159, 38, '2018-08-05 22:44:36'),
(77, 159, 21, '2018-08-05 22:45:31');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(20) NOT NULL,
  `content` longtext NOT NULL,
  `user` int(20) NOT NULL,
  `createdate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `content`, `user`, `createdate`) VALUES
(31, 'hi', 21, '2017-06-30 12:35:43'),
(32, 'ok', 21, '2017-06-30 12:36:36'),
(33, 'nhi ho rha hai', 21, '2017-06-30 16:04:14'),
(34, 'jai mata di\n', 21, '2017-06-30 18:57:09'),
(35, 'ok', 21, '2017-06-30 18:57:17'),
(37, 'hi\n', 29, '2017-06-30 19:19:49'),
(38, 'yes', 21, '2017-07-04 14:23:04'),
(39, 'hi', 23, '2017-07-04 16:32:17'),
(40, 'hi', 30, '2017-07-04 18:59:28'),
(41, 'ho gya', 30, '2017-07-04 18:59:54'),
(42, 'okkk', 29, '2017-07-04 19:01:43'),
(43, 'tik hai', 21, '2017-07-04 21:36:30'),
(44, 'thik hai', 21, '2017-07-04 23:33:17'),
(45, 'hi\nok\nssasa\n', 21, '2017-07-05 12:54:34'),
(46, 'ooo yes', 29, '2017-07-05 13:36:57'),
(47, 'thik hai', 29, '2017-07-05 13:37:08'),
(48, 'lets enjoy', 29, '2017-07-05 13:37:40'),
(49, 'yes\n', 29, '2017-07-05 13:37:45'),
(50, 'thik hai', 29, '2017-07-05 16:04:39'),
(51, 'thik hai', 29, '2017-07-05 17:06:15'),
(52, 'thanks', 23, '2017-07-05 22:16:56'),
(53, 'yes', 21, '2017-07-06 13:38:59'),
(54, 'hello', 21, '2017-07-06 13:41:48'),
(55, 'hi', 21, '2017-07-06 13:41:56'),
(56, 'yes', 21, '2017-07-06 13:53:59'),
(57, 'thik hai', 21, '2017-07-06 13:54:05'),
(58, 'ooo', 21, '2017-07-06 13:54:11'),
(59, 'yes', 21, '2017-07-06 13:54:42'),
(60, 'ooo', 21, '2017-07-06 13:54:49'),
(61, 'yes', 21, '2017-07-06 13:59:46'),
(62, 'thik hai', 23, '2017-07-06 14:04:38'),
(63, 'yes', 23, '2017-07-06 14:16:46'),
(64, 'ooo', 23, '2017-07-06 14:17:14'),
(65, 'hi', 23, '2017-07-06 14:17:32'),
(66, 'hi', 23, '2017-07-06 14:30:46'),
(67, 'yes', 23, '2017-07-06 14:45:05'),
(68, 'ooo', 23, '2017-07-06 14:45:56'),
(69, 'yes', 23, '2017-07-06 14:46:26'),
(70, 'hi', 23, '2017-07-06 14:49:55'),
(71, 'thanks', 23, '2017-07-06 14:56:51'),
(72, 'yes', 23, '2017-07-06 14:57:20'),
(73, 'hi', 23, '2017-07-06 15:05:38'),
(74, 'hi', 23, '2017-07-06 15:06:12'),
(75, 'yes', 23, '2017-07-06 15:06:24'),
(76, 'hi', 23, '2017-07-06 15:07:07'),
(77, 'yes', 23, '2017-07-06 15:09:58'),
(78, 'hi', 21, '2017-07-06 15:14:31'),
(79, 'ok', 23, '2017-07-06 15:16:59'),
(80, 'yes', 21, '2017-07-07 11:57:59'),
(81, 'ok', 21, '2017-07-07 11:58:19'),
(82, 'thik hai', 21, '2017-07-07 11:58:46'),
(83, 'yes', 23, '2017-07-07 12:00:54'),
(84, 'yes', 23, '2017-07-07 12:05:31'),
(85, 'thik hai', 23, '2017-07-07 12:05:38'),
(86, 'ok', 23, '2017-07-07 12:05:50'),
(87, 'hiii', 23, '2017-07-07 12:06:35'),
(88, 'yes', 23, '2017-07-07 12:06:43'),
(89, 'hi', 23, '2017-07-07 12:06:56'),
(90, 'hhhh', 23, '2017-07-07 12:07:10'),
(91, 'yes', 23, '2017-07-07 12:07:24'),
(92, 'okkokok', 23, '2017-07-07 12:07:54'),
(93, 'ok', 23, '2017-07-07 12:08:09'),
(94, 'yes', 23, '2017-07-07 12:11:11'),
(95, 'ok', 23, '2017-07-07 12:11:33'),
(96, 'ok', 23, '2017-07-07 12:11:46'),
(97, 'oooo', 23, '2017-07-07 12:12:42'),
(98, 'hsdasdasd', 23, '2017-07-07 12:13:34'),
(99, 'yes', 23, '2017-07-07 12:14:33'),
(100, 'hiii', 23, '2017-07-07 12:14:41'),
(101, 'hiii', 23, '2017-07-07 12:16:09'),
(102, 'hhhh', 21, '2017-07-07 12:17:29'),
(103, 'ok', 21, '2017-07-07 12:17:49'),
(104, 'yes', 21, '2017-07-07 12:18:04'),
(105, 'hii', 21, '2017-07-07 12:23:24'),
(106, 'yes', 21, '2017-07-07 12:27:00'),
(107, 'yes', 21, '2017-07-07 12:27:08'),
(108, 'superman vs batman', 21, '2017-07-07 12:27:34'),
(109, 'superman vs batman', 21, '2017-07-07 12:28:11'),
(110, 'oo', 21, '2017-07-07 12:30:22'),
(111, 'superman vs batman', 21, '2017-07-07 12:30:42'),
(112, 'this', 21, '2017-07-07 12:31:22'),
(113, 'superman vs batman', 21, '2017-07-07 12:31:41'),
(114, 'hi', 21, '2017-07-07 12:32:18'),
(115, 'tomb', 21, '2017-07-07 12:32:33'),
(116, 'jghg', 21, '2017-07-07 12:32:43'),
(117, 'hiii', 21, '2017-07-07 12:32:54'),
(118, 'this', 21, '2017-07-07 12:33:03'),
(119, 'yes', 21, '2017-07-07 12:33:55'),
(120, 'sadsdsad', 21, '2017-07-07 12:35:01'),
(121, 'sadasdsd', 21, '2017-07-07 12:35:13'),
(122, 'dasdasd', 21, '2017-07-07 12:35:33'),
(123, 'asdasdas', 21, '2017-07-07 12:35:44'),
(124, 'yes', 21, '2017-07-07 12:37:45'),
(125, 'ok', 21, '2017-07-07 12:41:20'),
(126, 'ok', 21, '2017-07-07 12:41:26'),
(127, 'yes', 21, '2017-07-07 12:44:27'),
(128, 'ok', 21, '2017-07-07 12:44:30'),
(129, 'hii', 21, '2017-07-07 12:44:32'),
(130, 'thik hai', 21, '2017-07-07 12:44:47'),
(131, 'hi', 21, '2017-07-07 13:20:11'),
(132, 'hi', 21, '2017-07-07 13:20:41'),
(133, 'oo yee', 21, '2017-07-07 13:31:30'),
(134, 'Mr.Beam', 21, '2017-07-07 13:31:48'),
(135, 'ok', 21, '2017-07-07 13:34:26'),
(136, 'ant man', 21, '2017-07-07 13:34:59'),
(137, 'Tomb Rider', 21, '2017-07-07 19:47:35'),
(138, 'ok', 21, '2017-07-07 22:49:58'),
(139, 'im siya', 33, '2017-07-08 19:32:31'),
(140, 'my family', 33, '2017-07-08 19:32:50'),
(141, 'hi', 21, '2017-07-09 15:43:58'),
(142, 'oo yeh', 21, '2017-07-11 19:16:56'),
(143, 'oo yes', 23, '2017-07-11 19:19:58'),
(144, 'tushar ho hai', 31, '2017-07-11 22:01:59'),
(145, 'yes', 23, '2017-07-12 11:59:32'),
(146, 'ok', 21, '2017-07-12 19:12:00'),
(147, 'bhi', 34, '2017-07-14 14:44:22'),
(148, 'hi', 34, '2017-07-14 14:44:30'),
(149, 'hi', 21, '2017-07-14 14:46:28'),
(150, 'ok', 21, '2017-07-14 14:46:40'),
(151, 'hi', 21, '2017-07-14 14:46:50'),
(152, 'ok', 21, '2017-07-14 14:47:49'),
(153, 'summer training project', 21, '2017-11-06 18:57:47'),
(154, 'logon ', 36, '2017-11-08 11:32:23'),
(155, 'hi', 21, '2017-11-08 15:02:41'),
(156, 'bhbvhbhv', 21, '2017-11-08 16:11:21'),
(157, 'gvvgvg', 21, '2017-11-08 16:11:35'),
(158, 'Hi', 21, '2018-08-04 11:00:15'),
(159, 'ok', 38, '2018-08-05 22:44:26');

-- --------------------------------------------------------

--
-- Table structure for table `posts_image`
--

CREATE TABLE `posts_image` (
  `id` int(20) NOT NULL,
  `image` text NOT NULL,
  `user` int(20) NOT NULL,
  `createdate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `post_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts_image`
--

INSERT INTO `posts_image` (`id`, `image`, `user`, `createdate`, `post_id`) VALUES
(2, 'uploads/29/homeuploads/IMG_20170326_172325.jpg', 29, '2017-07-05 17:50:29', 0),
(3, 'uploads/21/homeuploads/IMG_20170126_214311_024.jpg', 21, '2017-07-05 20:59:59', 0),
(4, 'uploads/21/homeuploads/IMG_20160617_114543.jpg', 21, '2017-07-05 21:04:23', 0),
(5, 'uploads/21/homeuploads/IMG_20160617_114543.jpg', 21, '2017-07-05 21:07:03', 0),
(6, 'uploads/21/homeuploads/IMG_20161224_164255.jpg', 21, '2017-07-05 21:08:52', 0),
(7, 'uploads/21/homeuploads/IMG_20161224_160756.jpg', 21, '2017-07-06 11:57:43', 0),
(8, 'uploads/21/homeuploads/IMG_20161224_160934.jpg', 21, '2017-07-06 13:48:20', 0),
(9, 'uploads/21/homeuploads/IMG_20161224_160934.jpg', 21, '2017-07-06 13:48:22', 0),
(10, 'uploads/21/homeuploads/IMG_20161224_160934.jpg', 21, '2017-07-06 13:48:22', 0),
(11, 'uploads/21/homeuploads/IMG_20161224_160934.jpg', 21, '2017-07-06 13:48:22', 0),
(12, 'uploads/21/homeuploads/IMG_20161224_160934.jpg', 21, '2017-07-06 13:48:29', 0),
(13, 'uploads/21/homeuploads/IMG_20161224_160841.jpg', 21, '2017-07-06 13:49:58', 0),
(14, 'uploads/21/homeuploads/IMG_20161224_160934.jpg', 21, '2017-07-06 13:50:30', 0),
(15, 'uploads/21/homeuploads/IMG_20161224_162826.jpg', 21, '2017-07-06 14:02:49', 0),
(16, 'uploads/23/homeuploads/IMG_20161224_161220.jpg', 23, '2017-07-06 14:18:10', 0),
(17, 'uploads/23/homeuploads/IMG_20161224_161220.jpg', 23, '2017-07-06 14:18:14', 0),
(18, 'uploads/23/homeuploads/IMG_20161224_161220.jpg', 23, '2017-07-06 14:18:19', 0),
(19, 'uploads/23/homeuploads/IMG_20161224_161220.jpg', 23, '2017-07-06 14:18:19', 0),
(20, 'uploads/23/homeuploads/IMG_20161224_161220.jpg', 23, '2017-07-06 14:18:19', 0),
(21, 'uploads/23/homeuploads/IMG_20161224_161220.jpg', 23, '2017-07-06 14:18:19', 0),
(22, 'uploads/23/homeuploads/IMG_20161224_161220.jpg', 23, '2017-07-06 14:18:19', 0),
(23, 'uploads/23/homeuploads/IMG_20161224_161220.jpg', 23, '2017-07-06 14:18:19', 0),
(24, 'uploads/23/homeuploads/IMG_20161224_161220.jpg', 23, '2017-07-06 14:18:20', 0),
(25, 'uploads/23/homeuploads/IMG_20161224_161220.jpg', 23, '2017-07-06 14:18:20', 0),
(26, 'uploads/23/homeuploads/IMG_20161224_161220.jpg', 23, '2017-07-06 14:18:20', 0),
(27, 'uploads/23/homeuploads/IMG_20161224_161220.jpg', 23, '2017-07-06 14:20:16', 0),
(28, 'uploads/23/homeuploads/IMG_20161224_161220.jpg', 23, '2017-07-06 14:20:16', 0),
(29, 'uploads/23/homeuploads/IMG_20161224_161220.jpg', 23, '2017-07-06 14:20:16', 0),
(30, 'uploads/23/homeuploads/IMG_20161224_161220.jpg', 23, '2017-07-06 14:20:17', 0),
(31, 'uploads/23/homeuploads/IMG_20161224_161220.jpg', 23, '2017-07-06 14:20:17', 0),
(32, 'uploads/23/homeuploads/IMG_20161224_161220.jpg', 23, '2017-07-06 14:20:17', 0),
(33, 'uploads/23/homeuploads/IMG_20161224_161220.jpg', 23, '2017-07-06 14:20:17', 0),
(34, 'uploads/23/homeuploads/IMG_20161224_161220.jpg', 23, '2017-07-06 14:20:17', 0),
(35, 'uploads/23/homeuploads/IMG_20161224_161220.jpg', 23, '2017-07-06 14:20:17', 0),
(36, 'uploads/23/homeuploads/IMG_20161224_161220.jpg', 23, '2017-07-06 14:20:18', 0),
(37, 'uploads/23/homeuploads/IMG_20161224_161220.jpg', 23, '2017-07-06 14:20:20', 0),
(38, 'uploads/23/homeuploads/IMG_20161224_161220.jpg', 23, '2017-07-06 14:20:20', 0),
(39, 'uploads/23/homeuploads/IMG_20161224_161220.jpg', 23, '2017-07-06 14:20:21', 0),
(40, 'uploads/23/homeuploads/IMG_20161224_161220.jpg', 23, '2017-07-06 14:20:21', 0),
(41, 'uploads/23/homeuploads/IMG_20161224_161220.jpg', 23, '2017-07-06 14:20:21', 0),
(42, 'uploads/23/homeuploads/IMG_20161224_161220.jpg', 23, '2017-07-06 14:20:21', 0),
(43, 'uploads/23/homeuploads/IMG_20161224_160919.jpg', 23, '2017-07-06 14:21:35', 0),
(44, 'uploads/23/homeuploads/IMG_20161224_160919.jpg', 23, '2017-07-06 14:21:36', 0),
(45, 'uploads/23/homeuploads/IMG_20161224_160919.jpg', 23, '2017-07-06 14:21:36', 0),
(46, 'uploads/23/homeuploads/IMG_20161224_160919.jpg', 23, '2017-07-06 14:21:36', 0),
(47, 'uploads/23/homeuploads/IMG_20161224_160919.jpg', 23, '2017-07-06 14:21:37', 0),
(48, 'uploads/23/homeuploads/IMG_20161224_160919.jpg', 23, '2017-07-06 14:21:38', 0),
(49, 'uploads/23/homeuploads/IMG_20161224_160919.jpg', 23, '2017-07-06 14:21:38', 0),
(50, 'uploads/23/homeuploads/IMG_20161224_160919.jpg', 23, '2017-07-06 14:21:38', 0),
(51, 'uploads/23/homeuploads/IMG_20161224_160919.jpg', 23, '2017-07-06 14:21:38', 0),
(52, 'uploads/23/homeuploads/IMG_20161224_160919.jpg', 23, '2017-07-06 14:21:39', 0),
(53, 'uploads/23/homeuploads/IMG_20161224_160919.jpg', 23, '2017-07-06 14:21:42', 0),
(54, 'uploads/23/homeuploads/IMG_20161224_160919.jpg', 23, '2017-07-06 14:21:42', 0),
(55, 'uploads/23/homeuploads/IMG_20161224_160919.jpg', 23, '2017-07-06 14:21:42', 0),
(56, 'uploads/23/homeuploads/IMG_20161224_160919.jpg', 23, '2017-07-06 14:21:42', 0),
(57, 'uploads/23/homeuploads/IMG_20161224_160919.jpg', 23, '2017-07-06 14:21:42', 0),
(58, 'uploads/23/homeuploads/IMG_20161224_160919.jpg', 23, '2017-07-06 14:21:42', 0),
(59, 'uploads/23/homeuploads/IMG_20161224_160919.jpg', 23, '2017-07-06 14:21:42', 0),
(60, 'uploads/23/homeuploads/IMG_20161224_160841.jpg', 23, '2017-07-06 14:23:02', 0),
(61, 'uploads/23/homeuploads/IMG_20161224_160919.jpg', 23, '2017-07-06 14:23:18', 0),
(62, 'uploads/23/homeuploads/IMG_20161224_160919.jpg', 23, '2017-07-06 14:23:23', 0),
(63, 'uploads/23/homeuploads/IMG_20161224_160919.jpg', 23, '2017-07-06 14:23:23', 0),
(64, 'uploads/23/homeuploads/IMG_20161224_160919.jpg', 23, '2017-07-06 14:23:23', 0),
(65, 'uploads/23/homeuploads/IMG_20161224_161734.jpg', 23, '2017-07-06 14:24:24', 0),
(66, 'uploads/23/homeuploads/IMG_20161224_160930.jpg', 23, '2017-07-06 14:24:47', 0),
(67, 'uploads/23/homeuploads/IMG_20161224_160756.jpg', 23, '2017-07-06 14:25:42', 0),
(68, 'uploads/23/homeuploads/IMG_20161224_162833.jpg', 23, '2017-07-06 14:27:46', 0),
(69, 'uploads/23/homeuploads/IMG_20161224_161738.jpg', 23, '2017-07-06 14:29:55', 0),
(70, 'uploads/23/homeuploads/IMG_20161224_161738.jpg', 23, '2017-07-06 14:30:26', 0),
(71, 'uploads/23/homeuploads/IMG_20161224_160934.jpg', 23, '2017-07-06 14:49:29', 0),
(72, 'uploads/23/homeuploads/IMG_20161224_160934.jpg', 23, '2017-07-06 14:49:40', 0),
(73, 'uploads/23/homeuploads/IMG_20161224_160756.jpg', 23, '2017-07-06 14:56:44', 0),
(74, 'uploads/23/homeuploads/IMG_20161224_161220.jpg', 23, '2017-07-06 14:57:14', 72),
(75, 'uploads/23/homeuploads/IMG_20161224_160841.jpg', 23, '2017-07-06 15:05:35', 73),
(76, 'uploads/23/homeuploads/IMG_20161224_160934.jpg', 23, '2017-07-06 15:07:02', 76),
(77, 'uploads/23/homeuploads/IMG_20161224_160934.jpg', 23, '2017-07-06 15:09:55', 77),
(78, 'uploads/21/homeuploads/IMG_20161224_160841.jpg', 21, '2017-07-06 15:14:26', 78),
(79, 'uploads/23/homeuploads/IMG_20161224_160932.jpg', 23, '2017-07-06 15:16:56', 79),
(80, 'uploads/21/homeuploads/IMG_20161224_160756.jpg', 21, '2017-07-07 11:58:12', 82),
(81, 'uploads/23/homeuploads/IMG_20161224_160841.jpg', 23, '2017-07-07 12:05:44', 88),
(82, 'uploads/21/homeuploads/Batman-V-Superman-Dawn-Of-Justice-Wallpapers.jpg', 21, '2017-07-07 12:17:45', 104),
(83, 'uploads/21/homeuploads/Batman-V-Superman-Movie-2016-Logo-Dark-Black-.jpg', 21, '2017-07-07 12:23:18', 105),
(84, 'uploads/21/homeuploads/Batman-V-Superman-Logo-HD-Wallpaper.jpg', 21, '2017-07-07 12:26:22', 0),
(85, 'uploads/21/homeuploads/Batman-V-Superman-Logo-HD-Wallpaper.jpg', 21, '2017-07-07 12:27:27', 108),
(86, 'uploads/21/homeuploads/Batman-V-Superman-Logo-HD-Wallpaper.jpg', 21, '2017-07-07 12:28:03', 109),
(87, 'uploads/21/homeuploads/animated-desktop-background.jpg', 21, '2017-07-07 12:30:19', 110),
(88, 'uploads/21/homeuploads/Batman-V-Superman-Logo-HD-Wallpaper.jpg', 21, '2017-07-07 12:30:34', 111),
(89, 'uploads/21/homeuploads/happy-new-year-2016-wallpapers.jpg', 21, '2017-07-07 12:31:15', 112),
(90, 'uploads/21/homeuploads/Batman-V-Superman-Logo-HD-Wallpaper.jpg', 21, '2017-07-07 12:31:33', 113),
(91, 'uploads/21/homeuploads/Batman-V-Superman-Logo-HD-Wallpaper.jpg', 21, '2017-07-07 12:32:15', 114),
(92, 'uploads/21/homeuploads/rise_of_the_tomb_raider_2015-wide.jpg', 21, '2017-07-07 12:32:27', 115),
(93, 'uploads/21/homeuploads/avengers_infinity_war_concept-HD.jpg', 21, '2017-07-07 12:32:40', 116),
(94, 'uploads/21/homeuploads/train_journey_mountains-HD.jpg', 21, '2017-07-07 12:32:51', 117),
(95, 'uploads/21/homeuploads/train_journey_mountains-HD.jpg', 21, '2017-07-07 12:33:02', 118),
(96, 'uploads/21/homeuploads/train_journey_mountains-HD.jpg', 21, '2017-07-07 12:33:52', 119),
(97, 'uploads/21/homeuploads/bonsai-tree.jpg', 21, '2017-07-07 12:34:57', 120),
(98, 'uploads/21/homeuploads/Batman-V-Superman-Logo-HD-Wallpaper.jpg', 21, '2017-07-07 12:35:09', 121),
(99, 'uploads/21/homeuploads/bonsai-tree.jpg', 21, '2017-07-07 12:35:30', 122),
(100, 'uploads/21/homeuploads/Batman-V-Superman-Logo-HD-Wallpaper.jpg', 21, '2017-07-07 12:35:41', 123),
(101, 'uploads/21/homeuploads/Batman-V-Superman-Logo-HD-Wallpaper.jpg', 21, '2017-07-07 12:37:41', 124),
(102, 'uploads/21/homeuploads/HD-quality-wallpapers.jpg', 21, '2017-07-07 12:44:39', 130),
(103, 'uploads/21/homeuploads/mr-bean-funny.jpg', 21, '2017-07-07 13:31:41', 134),
(104, 'uploads/21/homeuploads/yellowjacket_ant_man-HD.jpg', 21, '2017-07-07 13:34:37', 0),
(105, 'uploads/21/homeuploads/yellowjacket_ant_man-HD.jpg', 21, '2017-07-07 13:34:37', 0),
(106, 'uploads/21/homeuploads/yellowjacket_ant_man-HD.jpg', 21, '2017-07-07 13:34:51', 136),
(107, 'uploads/21/homeuploads/rise_of_the_tomb_raider_2015-wide.jpg', 21, '2017-07-07 19:47:30', 137),
(108, 'uploads/21/homeuploads/IMG_20160926_151533.jpg', 21, '2017-07-07 22:49:57', 138),
(109, 'uploads/33/homeuploads/15.jpg', 33, '2017-07-08 19:32:42', 140),
(110, 'uploads/21/homeuploads/IMG_20160625_184742.jpg', 21, '2017-07-11 19:16:55', 142),
(111, 'uploads/23/homeuploads/IMG_20160617_114543.jpg', 23, '2017-07-11 19:19:57', 143),
(112, 'uploads/31/homeuploads/IMG_20160615_191405.jpg', 31, '2017-07-11 22:01:58', 144),
(113, 'uploads/21/homeuploads/IMG_20160803_112636.jpg', 21, '2017-07-12 19:11:59', 146),
(114, 'uploads/34/homeuploads/IMG_20160615_191405.jpg', 34, '2017-07-14 14:44:27', 148),
(115, 'uploads/21/homeuploads/IMG_20160629_201056.jpg', 21, '2017-07-14 14:46:36', 150),
(116, 'uploads/21/homeuploads/avengers_infinity_war_concept-HD.jpg', 21, '2017-07-14 14:47:48', 152),
(117, 'uploads/21/homeuploads/Love-On-Water-Wallpaper-HD.jpg', 21, '2017-11-06 18:57:46', 153),
(118, 'uploads/36/homeuploads/IMG_20170304_184715.jpg', 36, '2017-11-08 11:32:16', 154),
(119, 'uploads/21/homeuploads/IMG_20161224_160841.jpg', 21, '2018-08-04 11:00:12', 158),
(120, 'uploads/38/homeuploads/IMG_20170326_171513.jpg', 38, '2018-08-05 22:44:17', 159);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `Username`, `Email`, `Password`) VALUES
(21, 'abhi', 'abhi.kumar736@gmail.com', 'Abhi'),
(28, 'amit', 'amit@gmial.com', 'abhi'),
(30, 'shivi', 'shivam@gmail.com', 'shivam'),
(31, 'tanu', 'tushar@gmail.com', 'tushar'),
(32, 'rahul', 'rahul@gmail.com', 'rahul'),
(35, 'rishi raj', 'rishi@gmail.com', 'Eishi'),
(38, 'Akhil', 'akhil@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `users_meta`
--

CREATE TABLE `users_meta` (
  `id` int(10) NOT NULL,
  `Firstname` varchar(255) NOT NULL,
  `Lastname` varchar(255) NOT NULL,
  `Mobile` varchar(20) NOT NULL,
  `userid` int(10) NOT NULL,
  `image` text NOT NULL,
  `profilecover` text NOT NULL,
  `Profileimage` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_meta`
--

INSERT INTO `users_meta` (`id`, `Firstname`, `Lastname`, `Mobile`, `userid`, `image`, `profilecover`, `Profileimage`) VALUES
(21, 'abhi', 'sharma', '9888328585', 21, '', 'uploads/21/Love-On-Water-Wallpaper-HD.jpg', 'uploads/Profile/IMG_20160625_184742.jpg'),
(28, 'amit', 'sharma', '9888728585', 28, '', 'uploads/28/IMG_20161106_143241.jpg', ''),
(30, 'shivam', 'sharma', '9465092097', 30, '', 'uploads/cool-hd-wallpaper.jpg', ''),
(31, 'tushar', 'choudhary', '9888328585', 31, '', 'uploads/31/IMG_20160616_214251.jpg', 'uploads/Profile/IMG_20161106_172618.jpg'),
(32, 'rahul', 'choudhary', '9888328585', 32, '', '', ''),
(35, 'rishi', 'raj', '9888328585', 35, '', 'uploads/35/6843_dragon_ball_z_hd_wallpapers.jpg', 'uploads/Profile/Water-Drop-on-Leaf.jpg'),
(36, 'pranav', 'gupta', '9906902048', 36, '', 'uploads/36/rise_of_the_tomb_raider_2015-wide.jpg', 'uploads/Profile/IMG_20161106_175816.jpg'),
(39, 'akhil', 'sooden', '9888328585', 38, '', 'uploads/38/avengers_infinity_war_concept-HD.jpg', 'uploads/Profile/IMG_20161106_143241.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `friendrequest`
--
ALTER TABLE `friendrequest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts_image`
--
ALTER TABLE `posts_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_meta`
--
ALTER TABLE `users_meta`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;
--
-- AUTO_INCREMENT for table `friendrequest`
--
ALTER TABLE `friendrequest`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=160;
--
-- AUTO_INCREMENT for table `posts_image`
--
ALTER TABLE `posts_image`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `users_meta`
--
ALTER TABLE `users_meta`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
