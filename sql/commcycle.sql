-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 26, 2017 at 05:20 PM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `commcycle`
--

-- --------------------------------------------------------

--
-- Table structure for table `deleteds`
--

CREATE TABLE `deleteds` (
  `id` int(10) UNSIGNED NOT NULL,
  `Name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Item` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Brand` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Price` int(11) NOT NULL,
  `Category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Pics` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `deleteds`
--

INSERT INTO `deleteds` (`id`, `Name`, `Email`, `Item`, `Brand`, `Price`, `Category`, `Pics`, `created_at`, `updated_at`) VALUES
(1, 'Akosua', 'mrdybes@gmail.com', 'Blouse', 'Gucci', 0, 'Ladies', NULL, '2017-07-15 05:17:14', '2017-07-15 05:17:14'),
(2, 'Akwesi', 'akwesi@yahoo.com', 'Bottle', 'Nike', 30, 'Other', 'storage/userImages/596349687f8cdbottle.jpg', '2017-07-15 05:22:47', '2017-07-15 05:22:47'),
(3, 'Paa', 'pongofrimi@gmail.com', 'Water', 'God', 0, 'Ladies', 'userImages/596e5a5fb2964brooke-lark-158019.jpg', '2017-07-26 08:32:14', '2017-07-26 08:32:14'),
(4, 'ssaa', 'mrfimpong@gmail.com', 'Samsung Phone', 'Sm', 0, 'Ladies', 'userImages/596e59a7d80c9k.jpg', '2017-07-26 08:56:16', '2017-07-26 08:56:16'),
(5, 'fdsah', 'kjsdfklmsdklm@fmaigi.com', 'hkjdashfkjh', 'kjhdslkfj [ Size: 34]', 37, 'Ladies', 'userImages/596e90b253182brooke-lark-158019.jpg', '2017-07-26 09:30:01', '2017-07-26 09:30:01'),
(6, 'asdfhjk', 'skjfa@fal.com', 'dsjahfgjhgadsjhfgjds', 'jsdghfajsgh [ Size: 676]', 44, 'Gents', NULL, '2017-07-26 09:35:47', '2017-07-26 09:35:47'),
(7, 'Pongo', 'Quantity:84', 'sdhh', 'Size:98', 7579, 'Info: Everything you upload here will be moved straight to your section', 'ladyB/596ea65ae7b06brooke-lark-158019.jpg', '2017-07-26 11:16:51', '2017-07-26 11:16:51'),
(8, 'Adjoa', 'Quantity:2', 'Skirt', 'Size:9', 700, 'Info: pload here will be moved straight to your section on the main commcycle website, and visible to everyone please do take care. Enjoy your patnership with commcycle', 'storage/ladyb/596be8948af76semo.jpg', '2017-07-26 11:40:13', '2017-07-26 11:40:13');

-- --------------------------------------------------------

--
-- Table structure for table `free`
--

CREATE TABLE `free` (
  `id` int(10) UNSIGNED NOT NULL,
  `Name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Item` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Brand` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Price` int(11) NOT NULL DEFAULT '0',
  `Category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Pics` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Info` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `free`
--

INSERT INTO `free` (`id`, `Name`, `Email`, `Item`, `Brand`, `Price`, `Category`, `Pics`, `Info`, `created_at`, `updated_at`) VALUES
(1, 'Lee', 'mrfi@gkalsd.com', 'Comb', 'Malawi', 0, 'Other', 'storage/userImages/59696764cf51ecomb.jpg', 'Any one with bushy hair can definitely have this', '2017-07-14 22:52:53', '2017-07-14 22:52:53'),
(2, 'Pong', 'mrfimpong@gmail.com', 'lol', 'lili', 0, 'Gents', 'storage/userImages/596ad0afd6f05Frimpi.jpg', '@commcycle.co. Everything you upload here will be moved straight to your section on the main commcycle website, and visible to everyone please do take care. Enjoy your patnership with commcycle', '2017-07-16 00:34:24', '2017-07-16 00:34:24'),
(3, 'Atongo', 'gog@fg.lo', 'Samsung Phone', 'Samsung', 0, 'Other', 'storage/userImages/596cf2d965970angry students.jpg', 'adsfjjhasdfkjasdhflkasjdfhl asjkdfhla skjdfhal skdjfhakls djhfklajsdf', '2017-07-17 15:24:41', '2017-07-17 15:24:41'),
(4, 'Mavis', 'mavis@yahoo.com', 'Pen', 'Bic', 0, 'Other', 'userImages/596e558ce77af$_57.jpg', 'uploading the item unto the Comm-Sector which indicates that your item is totally free and there are no strings attached. You shall not come back for your item after it has already been given out and been used.', '2017-07-18 16:38:05', '2017-07-18 16:38:05'),
(7, 'Elizabeth', 'eliza@gmail.com', 'Lb', 'ladyB', 0, 'Ladies', 'userImages/597860bd5dc45gahanfo).jpg', 'Mauris at libero pellentesque, eleifend risus in, maximus ante. Nullam eros dolor, luctus vel ultricies ut, aliquet eget diam. Nunc sit amet erat scelerisque elit euismod imperdiet. Praesent condimentum porta augue, facilisis scelerisque purus tristique eu. Donec non finibus justo. In ut diam at orci faucibus luctus a sed tellus. Quisque eleifend ullamcorper feugiat', '2017-07-26 07:28:30', '2017-07-26 07:28:30');

-- --------------------------------------------------------

--
-- Table structure for table `freefree`
--

CREATE TABLE `freefree` (
  `id` int(10) UNSIGNED NOT NULL,
  `Name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Item` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Price` int(11) NOT NULL DEFAULT '0',
  `Brand` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Info` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `freefree`
--

INSERT INTO `freefree` (`id`, `Name`, `Email`, `Item`, `Price`, `Brand`, `Category`, `Info`, `created_at`, `updated_at`) VALUES
(2, 'Kissi', 'kis@yahoo.com', 'Tablet', 0, 'Samsung', 'Gents', 'By uploading this image you certify that the item exists and you have no other plans for that item. You are uploading the item unto the Comm-Sector which indicates that your item is totally free and there are no strings', '2017-07-10 22:25:05', '2017-07-10 22:25:05');

-- --------------------------------------------------------

--
-- Table structure for table `ladyBorders`
--

CREATE TABLE `ladyBorders` (
  `id` int(10) UNSIGNED NOT NULL,
  `Name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Items` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ladyBorders`
--

INSERT INTO `ladyBorders` (`id`, `Name`, `Number`, `Email`, `Items`, `Price`, `Address`, `created_at`, `updated_at`) VALUES
(3, 'Yaa koto', '9083746747', 'kof@gmail.com', 'Lady - 1 - 550 , sdhh - 1 - 7579', '8129', 'Awoshie +455', '2017-07-18 23:38:20', '2017-07-18 23:38:20'),
(4, 'Akua', '0243985576', 'mrfimpong@gmail.com', 'safhghj - 1 - 8454.6', '8454.6', 'Ablekuma Fanmilk', '2017-07-26 08:39:24', '2017-07-26 08:39:24'),
(5, 'Char', '012737348', 'Char@yahoo.com', 'Gb - 1 - 8687.8 , SOm - 1 - 477.4 , lb - 1 - 990', '10155.199999999999', 'Kumasi', '2017-07-26 08:45:49', '2017-07-26 08:45:49');

-- --------------------------------------------------------

--
-- Table structure for table `ladybs`
--

CREATE TABLE `ladybs` (
  `id` int(10) UNSIGNED NOT NULL,
  `Item` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Quantity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Info` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Pics` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ladybs`
--

INSERT INTO `ladybs` (`id`, `Item`, `Price`, `Size`, `Quantity`, `Info`, `Pics`, `created_at`, `updated_at`) VALUES
(1, 'Round Chain', '30', '4', '10', 'The size and price must be numbers. Please note, if you encounter any issues with uploads, contact frimpong via frimpong@commcycle.co. Everything you upload here will be moved straight to your section on the main commcycle website, and visible to everyone please do take care. Enjoy your patnership with commcycle', 'storage/ladyb/596ad2641347beducation blog picture.jpg', '2017-07-16 00:41:40', '2017-07-16 00:41:40'),
(4, 'Lady', '550', '3', '32', 'Everything you upload here will be moved straight to your section', 'ladyB/596ea409cbc52Lady B Models.jpg', '2017-07-18 22:12:58', '2017-07-18 22:12:58'),
(5, 'lb', '990', '4', '884', 'Everything you upload here will be moved straight to your section', 'ladyB/596ea56e53843Bongoson.jpg', '2017-07-18 22:18:54', '2017-07-18 22:18:54'),
(7, 'SOm', '477.4', '45', '90', 'Everything you upload here will be moved straight to your section on the main commcycle website, and visible to everyone please do take care. Enjoy your patnership with commcycle', 'ladyB/596eb3cd8c7accornor dems.jpg', '2017-07-18 23:20:14', '2017-07-18 23:20:14'),
(8, 'Gb', '8687.8', '78979', '8798', '\'alertType\'=>\'danger\',', 'ladyB/596eb44fe2ebdlewsi.jpg', '2017-07-18 23:22:24', '2017-07-18 23:22:24'),
(9, 'safhghj', '8454.6', '76876', '876876', '\'alertType\'=>\'danger\',', 'ladyB/596eb5374c1d2bronii to.jpg', '2017-07-18 23:26:15', '2017-07-18 23:26:15');

-- --------------------------------------------------------

--
-- Table structure for table `lbadmins`
--

CREATE TABLE `lbadmins` (
  `id` int(10) UNSIGNED NOT NULL,
  `Name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lbadmins`
--

INSERT INTO `lbadmins` (`id`, `Name`, `Email`, `Password`, `type`, `created_at`, `updated_at`) VALUES
(1, 'shoshor', 'sho@yahoo.com', '1234', '', '2017-07-12 03:28:08', '2017-07-17 10:05:15'),
(2, 'Adjoa', 'Adjoa@yahoo.com', '419', 'superuser', '2017-07-17 10:14:02', '2017-07-17 10:14:02');

-- --------------------------------------------------------

--
-- Table structure for table `lblogs`
--

CREATE TABLE `lblogs` (
  `id` int(10) UNSIGNED NOT NULL,
  `happening` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lblogs`
--

INSERT INTO `lblogs` (`id`, `happening`, `created_at`, `updated_at`) VALUES
(1, 'Adjoa signed in to ladyB\'s section!', '2017-07-17 10:57:38', '2017-07-17 10:57:38'),
(2, 'Adjoa signed in to ladyB\'s section!', '2017-07-17 10:58:03', '2017-07-17 10:58:03'),
(3, 'shoshor signed in to ladyB\'s section!', '2017-07-17 10:58:28', '2017-07-17 10:58:28'),
(4, 'shoshor signed in to ladyB\'s section!', '2017-07-17 10:58:52', '2017-07-17 10:58:52'),
(5, 'shoshor signed in to ladyB\'s section!', '2017-07-17 11:01:44', '2017-07-17 11:01:44'),
(6, 'Adjoa signed in to ladyB\'s section!', '2017-07-17 11:11:46', '2017-07-17 11:11:46'),
(7, 'Adjoa signed in to ladyB\'s section!', '2017-07-17 11:13:27', '2017-07-17 11:13:27'),
(8, 'shoshor signed in to ladyB\'s section!', '2017-07-17 11:18:17', '2017-07-17 11:18:17'),
(9, 'shoshor signed in to ladyB\'s section!', '2017-07-17 11:22:18', '2017-07-17 11:22:18'),
(10, 'Adjoa signed in to ladyB\'s section!', '2017-07-17 11:22:34', '2017-07-17 11:22:34'),
(11, 'Adjoa posted unto ladyB\'s news board', '2017-07-17 12:04:10', '2017-07-17 12:04:10'),
(12, 'Adjoa posted unto ladyB\'s news board', '2017-07-17 12:06:14', '2017-07-17 12:06:14'),
(13, 'shoshor signed in to ladyB\'s admins office!', '2017-07-17 12:15:36', '2017-07-17 12:15:36'),
(14, 'shoshor posted unto ladyB\'s news board', '2017-07-17 12:42:14', '2017-07-17 12:42:14'),
(15, 'Adjoa signed in to ladyB\'s admins office!', '2017-07-17 12:57:46', '2017-07-17 12:57:46'),
(16, 'Adjoa signed in to ladyB\'s admins office!', '2017-07-17 13:01:29', '2017-07-17 13:01:29'),
(17, 'Adjoa signed in to ladyB\'s admins office!', '2017-07-17 13:15:29', '2017-07-17 13:15:29'),
(18, 'Adjoa signed in to ladyB\'s admins office!', '2017-07-17 13:35:02', '2017-07-17 13:35:02'),
(19, 'Adjoa signed in to ladyB\'s admins office!', '2017-07-17 13:37:56', '2017-07-17 13:37:56'),
(20, 'Adjoa signed in to ladyB\'s admins office!', '2017-07-17 13:41:40', '2017-07-17 13:41:40'),
(21, 'Pongo deleted Kojo\'s order worth ZAR 700', '2017-07-17 13:42:15', '2017-07-17 13:42:15'),
(22, 'Adjoa signed in to ladyB\'s admins office!', '2017-07-17 16:53:02', '2017-07-17 16:53:02'),
(23, 'Adjoa signed in to ladyB\'s admins office!', '2017-07-17 16:55:21', '2017-07-17 16:55:21'),
(24, 'Adjoa signed in to ladyB\'s admins office!', '2017-07-18 21:15:42', '2017-07-18 21:15:42'),
(25, 'Dear Pongo, are you sure you selected any image?', '2017-07-18 22:30:12', '2017-07-18 22:30:12'),
(26, 'Dear Adjoa, are you sure you selected any image?', '2017-07-18 22:31:23', '2017-07-18 22:31:23'),
(27, 'Adjoa, are you sure you selected any image?', '2017-07-18 22:33:33', '2017-07-18 22:33:33'),
(28, 'Adjoa signed in to ladyB\'s admins office!', '2017-07-18 22:55:23', '2017-07-18 22:55:23'),
(29, 'Adjoa, are you sure you selected any image?', '2017-07-18 23:03:32', '2017-07-18 23:03:32'),
(30, 'Adjoa, are you sure you selected any image?', '2017-07-18 23:04:03', '2017-07-18 23:04:03'),
(31, 'Adjoa, are you sure you selected any image?', '2017-07-18 23:04:26', '2017-07-18 23:04:26'),
(32, 'Adjoa, are you sure you selected any image?', '2017-07-18 23:09:02', '2017-07-18 23:09:02'),
(33, 'Adjoa, are you sure you selected any image?', '2017-07-18 23:11:30', '2017-07-18 23:11:30'),
(34, 'Adjoa, are you sure you selected any image?', '2017-07-18 23:12:38', '2017-07-18 23:12:38'),
(35, 'Adjoa, are you sure you selected any image?', '2017-07-18 23:16:49', '2017-07-18 23:16:49'),
(36, 'Adjoa, are you sure you selected any image?', '2017-07-18 23:19:08', '2017-07-18 23:19:08'),
(37, 'The upload was successfull, Adjoa', '2017-07-18 23:20:14', '2017-07-18 23:20:14'),
(38, 'The upload was successfull, Adjoa', '2017-07-18 23:22:24', '2017-07-18 23:22:24'),
(39, 'The upload was successfull, Adjoa', '2017-07-18 23:26:15', '2017-07-18 23:26:15'),
(40, 'Adjoa signed in to ladyB\'s admins office!', '2017-07-18 23:38:54', '2017-07-18 23:38:54'),
(41, 'Adjoa signed in to ladyB\'s admins office!', '2017-07-19 07:43:52', '2017-07-19 07:43:52'),
(42, 'Adjoa signed in to ladyB\'s admins office!', '2017-07-19 12:08:24', '2017-07-19 12:08:24'),
(43, 'Adjoa signed in to ladyB\'s admins office!', '2017-07-19 13:07:07', '2017-07-19 13:07:07'),
(44, 'Adjoa signed in to ladyB\'s admins office!', '2017-07-26 08:32:46', '2017-07-26 08:32:46'),
(45, 'Adjoa signed in to ladyB\'s admins office!', '2017-07-26 10:41:30', '2017-07-26 10:41:30'),
(46, 'Pongo deleted sdhh with price ZAR 7579', '2017-07-26 11:16:51', '2017-07-26 11:16:51'),
(47, 'Adjoa deleted Skirt with price ZAR 700', '2017-07-26 11:40:13', '2017-07-26 11:40:13'),
(48, 'Adjoa deleted James\'s order worth ZAR 30', '2017-07-26 11:48:43', '2017-07-26 11:48:43');

-- --------------------------------------------------------

--
-- Table structure for table `lbmsgs`
--

CREATE TABLE `lbmsgs` (
  `id` int(10) UNSIGNED NOT NULL,
  `Name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lbmsgs`
--

INSERT INTO `lbmsgs` (`id`, `Name`, `Email`, `Number`, `Message`, `created_at`, `updated_at`) VALUES
(1, 'Frim', 'mrfimpong@gmail.com', '02454545454', 'Lady Burgesson seeks to tap into the youth potential in Africa, while offering opportunities for employment and fostering the entrepreneurial spirit to grow the African Fashion Industry. Our bold vision is that by the year 2030, Lady Burgesson will employ sixty thousand people internationally through the adaptation and develo', '2017-07-17 17:02:02', '2017-07-17 17:02:02');

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `id` int(10) UNSIGNED NOT NULL,
  `happening` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`id`, `happening`, `created_at`, `updated_at`) VALUES
(1, 'frimpong deleted Akwesi with price Akwesi', '2017-07-15 05:22:47', '2017-07-15 05:22:47'),
(2, 'frimpong deleted Seewy\'s order.', '2017-07-15 05:41:07', '2017-07-15 05:41:07'),
(3, 'frimpong sent a message to all commcycle subscribers.', '2017-07-15 06:13:35', '2017-07-15 06:13:35'),
(4, 'Pongo signed in!', '2017-07-15 19:10:34', '2017-07-15 19:10:34'),
(5, 'Pongo signed in!', '2017-07-15 19:31:02', '2017-07-15 19:31:02'),
(6, 'Pongo signed in!', '2017-07-15 19:41:16', '2017-07-15 19:41:16'),
(7, 'Pongo signed in!', '2017-07-15 20:03:25', '2017-07-15 20:03:25'),
(8, ' signed in to ladyB\'s section!', '2017-07-15 21:34:08', '2017-07-15 21:34:08'),
(9, ' signed in to ladyB\'s section!', '2017-07-15 21:34:23', '2017-07-15 21:34:23'),
(10, 'Pongo signed in!', '2017-07-15 21:36:05', '2017-07-15 21:36:05'),
(11, 'Pongo signed in!', '2017-07-15 21:50:26', '2017-07-15 21:50:26'),
(12, 'Pongo signed in!', '2017-07-15 21:50:45', '2017-07-15 21:50:45'),
(13, ' signed in to ladyB\'s section!', '2017-07-15 22:02:45', '2017-07-15 22:02:45'),
(14, ' signed in to ladyB\'s section!', '2017-07-15 22:08:29', '2017-07-15 22:08:29'),
(15, ' signed in to ladyB\'s section!', '2017-07-16 07:16:43', '2017-07-16 07:16:43'),
(16, ' signed in to ladyB\'s section!', '2017-07-16 13:20:11', '2017-07-16 13:20:11'),
(17, 'Pongo signed in!', '2017-07-16 19:55:03', '2017-07-16 19:55:03'),
(18, ' signed in to ladyB\'s section!', '2017-07-16 19:57:08', '2017-07-16 19:57:08'),
(19, 'Pongo signed in!', '2017-07-16 20:23:21', '2017-07-16 20:23:21'),
(20, 'Pongo deleted Paakwesi\'s order!', '2017-07-16 20:24:00', '2017-07-16 20:24:00'),
(21, 'Pongo signed in!', '2017-07-16 20:25:29', '2017-07-16 20:25:29'),
(22, ' signed in to ladyB\'s section!', '2017-07-16 20:26:59', '2017-07-16 20:26:59'),
(23, ' signed in to ladyB\'s section!', '2017-07-16 21:13:33', '2017-07-16 21:13:33'),
(24, 'Pongo signed in!', '2017-07-16 21:14:03', '2017-07-16 21:14:03'),
(25, 'Pongo signed in!', '2017-07-16 21:18:50', '2017-07-16 21:18:50'),
(26, 'shoshor signed in to ladyB\'s section!', '2017-07-16 21:20:31', '2017-07-16 21:20:31'),
(27, 'shoshor signed in to ladyB\'s section!', '2017-07-17 09:06:38', '2017-07-17 09:06:38'),
(28, 'shoshor signed in to ladyB\'s section!', '2017-07-17 09:54:06', '2017-07-17 09:54:06'),
(29, 'shoshor signed in to ladyB\'s section!', '2017-07-17 10:02:49', '2017-07-17 10:02:49'),
(30, 'Adjoa signed in to ladyB\'s section!', '2017-07-17 10:57:38', '2017-07-17 10:57:38'),
(31, 'Adjoa signed in to ladyB\'s section!', '2017-07-17 10:58:03', '2017-07-17 10:58:03'),
(32, 'shoshor signed in to ladyB\'s section!', '2017-07-17 10:58:28', '2017-07-17 10:58:28'),
(33, 'shoshor signed in to ladyB\'s section!', '2017-07-17 10:58:52', '2017-07-17 10:58:52'),
(34, 'shoshor signed in to ladyB\'s section!', '2017-07-17 11:01:44', '2017-07-17 11:01:44'),
(35, 'Pongo signed in!', '2017-07-17 11:02:12', '2017-07-17 11:02:12'),
(36, 'Adjoa signed in to ladyB\'s section!', '2017-07-17 11:11:46', '2017-07-17 11:11:46'),
(37, 'Adjoa signed in to ladyB\'s section!', '2017-07-17 11:13:27', '2017-07-17 11:13:27'),
(38, 'shoshor signed in to ladyB\'s section!', '2017-07-17 11:18:17', '2017-07-17 11:18:17'),
(39, 'shoshor signed in to ladyB\'s section!', '2017-07-17 11:22:18', '2017-07-17 11:22:18'),
(40, 'Adjoa signed in to ladyB\'s section!', '2017-07-17 11:22:34', '2017-07-17 11:22:34'),
(41, 'shoshor signed in to ladyB\'s section!', '2017-07-17 12:15:36', '2017-07-17 12:15:36'),
(42, 'Pongo signed in!', '2017-07-17 12:44:01', '2017-07-17 12:44:01'),
(43, 'Pongo deleted James\'s order!', '2017-07-17 12:44:38', '2017-07-17 12:44:38'),
(44, 'Adjoa signed in to ladyB\'s section!', '2017-07-17 12:57:46', '2017-07-17 12:57:46'),
(45, 'Adjoa signed in to ladyB\'s section!', '2017-07-17 13:01:29', '2017-07-17 13:01:29'),
(46, 'Pongo signed in!', '2017-07-17 13:06:04', '2017-07-17 13:06:04'),
(47, 'Adjoa signed in to ladyB\'s section!', '2017-07-17 13:15:29', '2017-07-17 13:15:29'),
(48, 'Adjoa signed in to ladyB\'s section!', '2017-07-17 13:35:02', '2017-07-17 13:35:02'),
(49, 'Pongo signed in!', '2017-07-17 13:37:30', '2017-07-17 13:37:30'),
(50, 'Adjoa signed in to ladyB\'s section!', '2017-07-17 13:37:56', '2017-07-17 13:37:56'),
(51, 'Adjoa signed in to ladyB\'s section!', '2017-07-17 13:41:40', '2017-07-17 13:41:40'),
(52, 'Adjoa signed in to ladyB\'s section!', '2017-07-17 16:53:02', '2017-07-17 16:53:02'),
(53, 'Adjoa signed in to ladyB\'s section!', '2017-07-17 16:55:21', '2017-07-17 16:55:21'),
(54, 'Pongo signed in!', '2017-07-17 17:12:59', '2017-07-17 17:12:59'),
(55, 'Pongo signed in!', '2017-07-17 17:16:17', '2017-07-17 17:16:17'),
(56, 'Adjoa signed in to ladyB\'s section!', '2017-07-18 21:15:42', '2017-07-18 21:15:42'),
(57, 'Pongo signed in!', '2017-07-18 22:15:16', '2017-07-18 22:15:16'),
(58, 'Adjoa signed in to ladyB\'s section!', '2017-07-18 22:55:23', '2017-07-18 22:55:23'),
(59, 'Pongo signed in!', '2017-07-18 23:31:06', '2017-07-18 23:31:06'),
(60, 'Adjoa signed in to ladyB\'s section!', '2017-07-18 23:38:54', '2017-07-18 23:38:54'),
(61, 'Pongo signed in!', '2017-07-18 23:39:15', '2017-07-18 23:39:15'),
(62, 'Adjoa signed in to ladyB\'s section!', '2017-07-19 07:43:52', '2017-07-19 07:43:52'),
(63, 'Adjoa signed in to ladyB\'s section!', '2017-07-19 12:08:24', '2017-07-19 12:08:24'),
(64, 'Pongo signed in!', '2017-07-19 13:04:34', '2017-07-19 13:04:34'),
(65, 'Adjoa signed in to ladyB\'s section!', '2017-07-19 13:07:07', '2017-07-19 13:07:07'),
(66, 'Pongo signed in!', '2017-07-26 08:28:32', '2017-07-26 08:28:32'),
(67, 'Pongo deleted Kojo\'s order!', '2017-07-26 08:32:02', '2017-07-26 08:32:02'),
(68, 'Pongo deleted Water with price 0 ZAR uploaded by Paa', '2017-07-26 08:32:14', '2017-07-26 08:32:14'),
(69, 'Adjoa signed in to ladyB\'s section!', '2017-07-26 08:32:46', '2017-07-26 08:32:46'),
(70, 'Pongo signed in!', '2017-07-26 08:44:31', '2017-07-26 08:44:31'),
(71, 'Pongo deleted Samsung Phone with price 0 ZAR uploaded by ssaa', '2017-07-26 08:56:16', '2017-07-26 08:56:16'),
(72, 'Pongo deleted hkjdashfkjh with price 37 ZAR uploaded by fdsah', '2017-07-26 09:30:01', '2017-07-26 09:30:01'),
(73, 'Pongo deleted dsjahfgjhgadsjhfgjds with price 44 ZAR uploaded by asdfhjk', '2017-07-26 09:35:47', '2017-07-26 09:35:47'),
(74, 'Pongo deleted lizzy\'s order!', '2017-07-26 09:50:05', '2017-07-26 09:50:05'),
(75, 'Adjoa signed in to ladyB\'s section!', '2017-07-26 10:41:30', '2017-07-26 10:41:30');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(10) UNSIGNED NOT NULL,
  `Name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Number` int(11) NOT NULL,
  `Message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `Name`, `Email`, `Number`, `Message`, `created_at`, `updated_at`) VALUES
(1, 'Frimpong', 'mrfimpong@gmail.com', 245719783, 'Hi, you\'ve seen my name up there. This site is too much your guys are the best.', '2017-07-15 04:08:33', '2017-07-15 04:08:33'),
(2, 'Assan', 'gyimmi@gmail.com', 245719783, 'Dear admins, this site is lit. How can I be employed here', '2017-07-15 04:09:45', '2017-07-15 04:09:45'),
(3, 'Frimi', 'mrfimpong@gmail.com', 245719783, 'asfhjksadfgahgfhgfadhgfasdgf agsdfhg ahgsdfagsfdhga sgdf ahsgdfhgasdf ahgsdfhgafghefqwegfqwhgefhgfqtewqtrfwhefysfadhgfasdywftefdyshgdfgfewahgsdfhgsdoapfipofiapsodifopasdif[poiopiusdiufasuidfuiysdufashdfkahsgdfsdhfhjkdlhakjsdhfsdf', '2017-07-17 16:55:02', '2017-07-17 16:55:02');

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
(1, '2017_07_07_204822_create_commcycle_free_table', 1),
(2, '2017_07_07_205525_create_commcycle_shop_table', 1),
(3, '2017_07_07_210048_create_commcycle_shop_table_with_no_pics', 1),
(4, '2017_07_07_210229_create_commcycle_table_with_no_pics', 1),
(5, '2017_07_09_185221_create_subscribe_table', 2),
(8, '2017_07_14_122333_creat_custormers_order_table', 3),
(9, '2017_07_15_024826_create_messages_from_people', 4),
(10, '2017_07_15_025257_create_log_database_new', 4),
(11, '2017_07_15_025652_create_lady_b_table', 4),
(14, '2017_07_15_062112_create_commcycle_deletion_database', 5),
(15, '2017_07_16_031749_create_ladyB_order_table', 6),
(16, '2017_07_17_121532_create_lady_b_logs_table', 7),
(17, '2017_07_17_134137_create_lb_news_table', 8),
(18, '2017_07_17_183941_create_ladyB_messages_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(10) UNSIGNED NOT NULL,
  `News` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `News`, `created_at`, `updated_at`) VALUES
(1, 'Leoriodsiflk asdfjklMake Super-user</label> 		        					\r\n			        					<button type=\"submit\" class=\"btn btn-success pull-right solid-two\"><span class=\"fa fa-sign-up\"></span> Sign Up</button>', NULL, '2017-07-17 12:42:14');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `Name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Items` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Price` int(11) NOT NULL,
  `reason` text COLLATE utf8mb4_unicode_ci,
  `Address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `Name`, `Number`, `Email`, `Items`, `Price`, `reason`, `Address`, `created_at`, `updated_at`) VALUES
(10, 'Yaa koto', '9083746747', 'kof@gmail.com', 'Lady - 1 - 550 , sdhh - 1 - 7579 , Necklace - 1 - 70', 8199, NULL, 'Awoshie +455', '2017-07-18 23:38:20', '2017-07-18 23:38:20'),
(11, 'Akua', '0243985576', 'mrfimpong@gmail.com', 'safhghj - 1 - 8454.6 , Shoe - 1 - 300', 8755, NULL, 'Ablekuma Fanmilk', '2017-07-26 08:39:24', '2017-07-26 08:39:24'),
(12, 'Char', '012737348', 'Char@yahoo.com', 'Gb - 1 - 8687.8 , SOm - 1 - 477.4 , lb - 1 - 990', 10155, NULL, 'Kumasi', '2017-07-26 08:45:49', '2017-07-26 08:45:49');

-- --------------------------------------------------------

--
-- Table structure for table `shop`
--

CREATE TABLE `shop` (
  `id` int(10) UNSIGNED NOT NULL,
  `Name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Item` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Brand` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Price` int(11) NOT NULL,
  `Pics` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shop`
--

INSERT INTO `shop` (`id`, `Name`, `Email`, `Item`, `Brand`, `Category`, `Price`, `Pics`, `created_at`, `updated_at`) VALUES
(3, 'Adjoa', 'adjoa@yahoo.com', 'Necklace', 'Tunisia', 'Ladies', 70, 'storage/userImages/596349ed2209d19125212_1887704551480560_274297264_o.jpg', '2017-07-10 07:33:33', '2017-07-10 07:33:33'),
(4, 'Frimpong', 'mrfimpong@gmail.com', 'Game Controller', 'Apple [ Size: 16 inch]', 'Gents', 1200, 'storage/userImages/59634a33d9ae5k.jpg', '2017-07-10 07:34:43', '2017-07-10 07:34:43'),
(5, 'asjdfhakdjsh', 'kwas@FDKA.VOM', 'asdfjah', 'jhkasjdfhkjh [ Size: 678]', 'Other', 35, 'storage/userImages/596d020966f755679e93785952.image.jpg', '2017-07-17 16:29:29', '2017-07-17 16:29:29'),
(6, 'dsfasdf', 'mrfimpong@gmail.com', 'dsafjsj', 'hksdjfhlkj [ Size: 67]', 'Other', 37, 'userImages/596e9046dd2a1female.png', '2017-07-18 20:48:39', '2017-07-18 20:48:39');

-- --------------------------------------------------------

--
-- Table structure for table `shopfree`
--

CREATE TABLE `shopfree` (
  `id` int(10) UNSIGNED NOT NULL,
  `Name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Item` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Brand` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shopfree`
--

INSERT INTO `shopfree` (`id`, `Name`, `Email`, `Item`, `Brand`, `Category`, `Price`, `created_at`, `updated_at`) VALUES
(1, 'Kwame', 'kwame@yahoo.com', 'Shoe', 'Gucci [ Size: 32 small]', 'Gents', 300, '2017-07-09 23:10:10', '2017-07-09 23:10:10');

-- --------------------------------------------------------

--
-- Table structure for table `subscribe`
--

CREATE TABLE `subscribe` (
  `id` int(10) UNSIGNED NOT NULL,
  `Email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscribe`
--

INSERT INTO `subscribe` (`id`, `Email`, `created_at`, `updated_at`) VALUES
(2, 'mrfimpong@gmail.com', '2017-07-09 17:13:13', '2017-07-09 17:13:13');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Pongo', 'mrfimpong@gmail.com', 'Pongo123', NULL, '2017-07-14 02:09:18', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `deleteds`
--
ALTER TABLE `deleteds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `free`
--
ALTER TABLE `free`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `freefree`
--
ALTER TABLE `freefree`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ladyBorders`
--
ALTER TABLE `ladyBorders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ladybs`
--
ALTER TABLE `ladybs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lbadmins`
--
ALTER TABLE `lbadmins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `type` (`type`);

--
-- Indexes for table `lblogs`
--
ALTER TABLE `lblogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lbmsgs`
--
ALTER TABLE `lbmsgs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shop`
--
ALTER TABLE `shop`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shopfree`
--
ALTER TABLE `shopfree`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribe`
--
ALTER TABLE `subscribe`
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
-- AUTO_INCREMENT for table `deleteds`
--
ALTER TABLE `deleteds`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `free`
--
ALTER TABLE `free`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `freefree`
--
ALTER TABLE `freefree`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `ladyBorders`
--
ALTER TABLE `ladyBorders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `ladybs`
--
ALTER TABLE `ladybs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `lbadmins`
--
ALTER TABLE `lbadmins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `lblogs`
--
ALTER TABLE `lblogs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
--
-- AUTO_INCREMENT for table `lbmsgs`
--
ALTER TABLE `lbmsgs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;
--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `shop`
--
ALTER TABLE `shop`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `shopfree`
--
ALTER TABLE `shopfree`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `subscribe`
--
ALTER TABLE `subscribe`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
