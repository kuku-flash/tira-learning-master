-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2022 at 10:53 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tira-learning`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`, `type`) VALUES
(1, 'Admin', 'flash@gmail.com', '$2y$10$Aws2F4YlOAxq.LlpsyK21.zqOno/wZR5CIXSpvIwijiFwELU7QhWK', '2020-12-23 10:40:27', NULL, '2020-10-08 17:31:17', '2020-10-08 17:31:17', 'admin'),
(2, 'jesevop', 'wenetode@mailinator.com', '$2y$10$6vGCGBogLlgkQmQ17cMvNuZrTjLdDlGl/cfvBoZHZgGTeaqckb9.C', '2020-12-23 12:18:12', NULL, '2020-12-23 09:18:12', '2020-12-23 09:18:12', 'instructor'),
(3, 'jizuwarozi', 'myhenuva@mailinator.com', '$2y$10$axviEUcDxBQxc5fgAsMtWeudAxaTz9w.XyI4s7idJaA2y8dHhaS3W', '2020-12-23 13:30:08', NULL, '2020-12-23 10:30:08', '2020-12-23 10:30:08', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `alphabets`
--

CREATE TABLE `alphabets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `letter_id` int(11) DEFAULT NULL,
  `small_letter` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `capital_letter` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `letter_audio` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `illustration_text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `illustration_audio` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `illustration_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `illustration_text_trans_eng` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `illustration_text_trans_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `language_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `alphabets`
--

INSERT INTO `alphabets` (`id`, `letter_id`, `small_letter`, `capital_letter`, `letter_audio`, `illustration_text`, `illustration_audio`, `illustration_image`, `illustration_text_trans_eng`, `illustration_text_trans_ar`, `language_id`, `created_at`, `updated_at`) VALUES
(2, 1, 'a', 'A', 'a_1606074480.mp3', 'ahanggarr', 'ahangarr_1606255942.mp3', 'bed_1605738544.jpg', 'bed', 'السرير', 3, '2020-11-18 19:02:16', '2020-11-24 19:12:22'),
(3, 2, 'b', 'B', 'b_1609330084.mp3', 'bacum', 'bacum_1609330084.mp3', 'fox_1609330084.jpg', 'fox', 'ثعبان', 3, '2020-12-30 09:08:04', '2020-12-30 09:08:04'),
(4, 3, 'c', 'C', 'c_1606076039.mp3', 'cumu', 'cumu_1606076390.mp3', 'scorpion_1605738778.jpg', 'scorpion', 'عقرب', 3, '2020-11-18 19:32:58', '2020-11-22 17:19:50'),
(5, 4, 'd', 'D', 'd_1606077687.wav', 'diyo', 'diyo_1606077727.mp3', 'cow_1605739103.jpg', 'cow', 'بقرة', 3, '2020-11-18 19:38:23', '2020-11-22 17:42:07'),
(6, 5, 'dd', 'Dd', 'dd_1606079177.wav', 'addam', 'addam_1606079177.mp3', 'book_1605739409.jpg', 'book', 'كتاب', 3, '2020-11-18 19:43:29', '2020-11-22 18:06:17'),
(7, 6, 'e', 'E', 'e_1606080114.wav', 'ozengena', 'ozengena_1606080114.wav', 'hippopotamus_1605739898.jpg', 'hippopotamus', 'فرس نهر', 3, '2020-11-18 19:51:38', '2020-11-22 18:21:54'),
(8, 7, 'g', 'G', 'g_1606081433.mp3', 'zalagarray', 'zalagarray_1606081433.mp3', 'hyena_1605740016.jpg', 'heyna', 'ضبع', 3, '2020-11-18 19:53:36', '2020-11-22 18:43:53'),
(9, 8, 'h', 'H', 'h2_1606256286.mp3', 'hitti', 'hitti2_1606256286.mp3', 'plamleaf_1605740172.jpg', 'palm leaf', 'أوراق النخيل', 3, '2020-11-18 19:56:12', '2020-11-24 19:18:06'),
(10, 9, 'i', 'I', 'i_1606082799.mp3', 'irrdo', 'irrdo_1606082800.mp3', 'knife2_1606054076.jpg', 'knife', 'سكين', 3, '2020-11-22 11:07:57', '2020-11-22 19:06:40'),
(11, 10, 'j', 'J', 'J_1606238609.mp3', 'uji', 'uji_1606238609.mp3', 'person_1606054655.jpg', 'person', 'شخص', 3, '2020-11-22 11:17:35', '2020-11-24 14:23:29'),
(12, 11, 'k', 'K', 'K_1606239236.mp3', 'kambuz', 'kambuz_1606239236.mp3', 'skirt2_1606055697.jpg', 'skirt', 'تنورة', 3, '2020-11-22 11:34:57', '2020-11-24 14:33:56'),
(13, 12, 'l', 'L', 'l_1606244760.mp3', 'luli', 'luli_1606244760.mp3', 'frog_1606056063.jpg', 'frog', 'ضفدع', 3, '2020-11-22 11:41:03', '2020-11-24 16:06:00'),
(14, 13, 'm', 'M', 'm_1606245404.mp3', 'muzu', 'muzu_1606245404.mp3', 'lion_1606056430.jpg', 'lion', 'أسد', 3, '2020-11-22 11:47:10', '2020-11-24 16:16:44'),
(15, 14, 'n', 'N', 'n_1606245953.mp3', 'navala', 'navala_1606245953.mp3', 'cats_1606056589.jpg', 'cats', 'القطط', 3, '2020-11-22 11:49:49', '2020-11-24 16:25:54'),
(16, 15, 'ng', 'Ng', 'ng_1606246939.mp3', 'ngen', 'ngen_1606246939.mp3', 'dog_1606056996.jpg', 'dog', 'الكلب', 3, '2020-11-22 11:56:36', '2020-11-24 16:42:19'),
(17, 16, 'ny', 'Ny', 'ny_1606246961.mp3', 'nyén', 'nyen_1606246961.mp3', 'dogs_1606057074.jpg', 'dogs', 'كلاب', 3, '2020-11-22 11:57:54', '2020-11-24 16:42:41'),
(18, 17, 'o', 'O', 'o_1606247553.mp3', 'óru', 'oru_1606247553.mp3', 'chicken_1606057362.jpg', 'chicken', 'دجاج', 3, '2020-11-22 12:02:42', '2020-11-24 16:52:33'),
(19, 18, 'p', 'P', 'p_1606251059.mp3', 'pena', 'pena_1606251059.mp3', 'axe_1606057815.jpg', 'axe', 'فأس', 3, '2020-11-22 12:10:15', '2020-11-24 17:50:59'),
(20, 19, 'q', 'Q', 'q_1606251627.mp3', 'qmi', 'qmi_1606251627.mp3', 'fish_1606058323.jpg', 'fish', 'سمك', 3, '2020-11-22 12:18:43', '2020-11-24 18:00:27'),
(21, 20, 'r', 'R', 'r_1606252008.mp3', 'rongo', 'rongo_1606252008.mp3', 'snake_1606058887.jpg', 'snake', 'ثعبان', 3, '2020-11-22 12:28:07', '2020-11-24 18:06:48'),
(22, 21, 'rr', 'Rr', 'rr_1606252366.mp3', 'rromo', 'rromo_1606252366.mp3', 'sheep_1606059079.jpg', 'sheep', 'خروف', 3, '2020-11-22 12:31:19', '2020-11-24 18:12:46'),
(23, 22, 's', 'S', 's_1606252800.mp3', 'sohinggo', 'sohinggo_1606252800.mp3', 'donkey_1606059243.jpg', 'donkey', 'حمار', 3, '2020-11-22 12:34:03', '2020-11-24 18:20:00'),
(24, 23, 't', 'T', 't_1606253389.mp3', 'ta', 't_1606253389.mp3', 'head_1606059685.jpg', 'head', 'رأس', 3, '2020-11-22 12:41:25', '2020-11-24 18:29:49'),
(25, 24, 'tt', 'Tt', 'tt_1606253703.mp3', 'ttambaru', 'ttamburu_1606253703.mp3', 'monkey_1606059884.jpg', 'monkey', 'قرد', 3, '2020-11-22 12:44:44', '2020-11-24 18:35:03'),
(26, 25, 'u', 'U', 'u_1606254134.mp3', 'utturr', 'utturr_1606254134.mp3', 'pig_1606060188.jpg', 'pig', 'خنزير', 3, '2020-11-22 12:49:48', '2020-11-24 18:42:14'),
(27, 26, 'v', 'V', 'v_1606254444.mp3', 'overr', 'overr_1606254444.mp3', 'plane_1606060397.jpg', 'plane', 'طائرة', 3, '2020-11-22 12:53:17', '2020-11-24 18:47:24'),
(28, 27, 'w', 'W', 'w_1606254946.mp3', 'uwo', 'uwo_1606254946.mp3', 'moon_1606061675.jpg', 'moon', 'القمر', 3, '2020-11-22 13:14:35', '2020-11-24 18:55:46'),
(29, 28, 'x', 'X', 'x_1606255347.mp3', 'xddohol', 'xddolo_1606255347.mp3', 'turtle_1606061888.jpg', 'turtle', 'سلحفاة', 3, '2020-11-22 13:18:08', '2020-11-24 19:02:27'),
(30, 29, 'y', 'Y', 'y_1606255525.mp3', 'yupi', 'yupi_1606255525.mp3', 'pencil_1606062065.jpg', 'pencils', 'اقلام رصاص', 3, '2020-11-22 13:21:05', '2020-11-24 19:05:25'),
(31, 30, 'z', 'Z', 'z_1606255787.mp3', 'zuhú', 'zuhu_1606255787.mp3', 'ostrich_1606062404.jpg', 'ostrich', 'نعامة', 3, '2020-11-22 13:26:44', '2020-11-24 19:09:47');

-- --------------------------------------------------------

--
-- Table structure for table `days`
--

CREATE TABLE `days` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `day_id` int(11) DEFAULT NULL,
  `option` int(11) DEFAULT NULL,
  `day` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trans_eng` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trans_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `audio` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `days`
--

INSERT INTO `days` (`id`, `day_id`, `option`, `day`, `trans_eng`, `trans_ar`, `image`, `audio`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Kunyuru', 'Sunday', 'الأحد', '', '', NULL, '2021-07-04 01:34:32'),
(2, 2, 1, 'Kába', 'Monday', 'الاثنين ', '', '', NULL, '2021-07-06 09:10:08'),
(3, 3, 1, 'Kattay', 'Tuesday', 'الثلاثاء ', NULL, NULL, NULL, NULL),
(4, 4, 1, 'Muttulu', 'Wednesday', 'الأربعاء ', NULL, NULL, NULL, NULL),
(5, 5, 1, 'Zevaha', 'Thursday', 'الخميس ', NULL, NULL, NULL, NULL),
(6, 6, 1, 'Manddi', 'Friday', 'الجمعة ', NULL, NULL, NULL, NULL),
(7, 7, 1, 'Ttabari', 'Saturday', 'السبت ', NULL, NULL, NULL, NULL);

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
-- Table structure for table `greetings`
--

CREATE TABLE `greetings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `option` int(255) DEFAULT NULL,
  `main_word` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `question` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trans_eng` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trans_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `audio` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `topic_id` bigint(20) UNSIGNED DEFAULT NULL,
  `level_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `greetings`
--

INSERT INTO `greetings` (`id`, `option`, `main_word`, `question`, `trans_eng`, `trans_ar`, `image`, `audio`, `topic_id`, `level_id`, `created_at`, `updated_at`) VALUES
(51, 1, 'Necessitatibus atque', 'Enim qui cupidatat o', 'Et libero deleniti d', 'Ratione non molestia', NULL, NULL, NULL, NULL, '2021-11-26 19:12:38', '2021-11-26 19:12:38'),
(53, 1, 'Iddala', 'Ajuwez: Iddala, anaw, anaw pu, nyáraraw aso nyácilu?', 'Guest: Hello everyone! How are you? I hope you are all fine.', NULL, NULL, NULL, 30, 8, '2022-02-10 18:27:19', '2022-02-10 18:27:19'),
(54, 1, 'Iddage', 'Ajuwez: Iddage, anaw, anaw pu, araraw aso acilu?', NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-14 16:17:35', '2022-02-14 16:18:08'),
(55, 1, 'Oray', 'Ajuwez: Oray, anaw, anaw pu, araraw aso acilu?', NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-14 16:18:44', '2022-02-14 16:18:44'),
(56, 1, 'Abba', 'Ajuwez: Abba, anaw, anaw pu, araraw aso nyácilu?', NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-14 16:19:32', '2022-02-14 16:21:56'),
(57, 1, 'Ayya', 'Ajuwez: Ayya, anaw, anaw pu, araraw aso nyácilu?', NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-14 16:22:50', '2022-02-14 16:22:50'),
(58, 1, 'Nyuwa', 'Ajuwez: Nyuwa, anaw, anaw pu, nyáraraw aso nyácilu?', NULL, NULL, NULL, NULL, 30, NULL, '2022-02-14 16:31:16', '2022-02-14 16:31:16'),
(59, 1, 'Namal', 'Ajuwez: Namal, anaw, anaw pu, nyáraraw aso nyácilu?', NULL, NULL, NULL, NULL, 30, NULL, '2022-02-14 16:32:14', '2022-02-14 16:32:14'),
(60, 1, 'Ngora', 'Ajuwez: Ngora inganyi, anaw, anaw pu, nyáraraw aso nyácilu?', NULL, NULL, NULL, NULL, 30, NULL, '2022-02-14 16:33:02', '2022-02-14 16:33:02'),
(61, 1, 'Kole', 'Ajuwez: Kole, anaw pu, araraw aso acilu?', NULL, NULL, NULL, NULL, 30, NULL, '2022-02-14 16:35:20', '2022-02-14 16:35:20'),
(62, 1, 'Kamaha', 'Ajuwez: Kamaha, anaw pu, araraw aso acilu?', NULL, NULL, NULL, NULL, 30, NULL, '2022-02-14 16:36:12', '2022-02-14 16:36:12'),
(63, 1, 'Iddanga lehe', 'Ajuwez: Iddanga lehe, anaw, nyáraraw aso nyácilu?', NULL, NULL, NULL, NULL, 30, NULL, '2022-02-14 16:37:01', '2022-02-14 16:37:01'),
(64, 1, 'Imazay iganyi', 'Ajuwez: Imazay iganyi, anaw, anaw pu, araraw aso acilu?', NULL, NULL, NULL, NULL, 30, NULL, '2022-02-14 16:45:10', '2022-02-14 16:45:10'),
(65, 1, 'Lemazay ilanyi', 'Ajuwez: Lemazay ilanyi, anaw, anaw pu, nyáraraw aso nyácilu?', NULL, NULL, NULL, NULL, 30, NULL, '2022-02-14 16:45:56', '2022-02-14 16:45:56'),
(66, 1, 'Nddoba kicilanu', 'Ivarrttu: Nddoba kicilanu, iricoco anaw acilo? Liricoco anaw nyácilu?', NULL, NULL, NULL, NULL, 31, NULL, '2022-02-14 16:54:48', '2022-02-14 16:54:48'),
(67, 1, 'Kazinyen kicilanu', 'Ivarrttu: Kazinyen kicilanu, iricoco anaw acilo? Liricoco anaw nyácilu?', NULL, NULL, NULL, NULL, 31, NULL, '2022-02-14 16:55:45', '2022-02-14 16:55:45'),
(68, 1, 'Nerege kicilanu', 'Ivarrttu: Nerege kicilanu, iricoco anaw acilo? Liricoco anaw nyácilu?', NULL, NULL, NULL, NULL, 31, NULL, '2022-02-14 16:56:43', '2022-02-14 16:56:43'),
(69, 1, 'Ulingge kicilanu', 'Ivarrttu: Ulingge kicilanu, iricoco anaw acilo? Liricoco anaw nyácilu?', NULL, NULL, NULL, NULL, 31, NULL, '2022-02-14 16:57:30', '2022-02-14 16:57:30'),
(70, 1, 'Ittilo kicilanu', 'Ivarrttu: Ittilo kicilanu, iricoco anaw acilo? Liricoco anaw nyácilu?', NULL, NULL, NULL, NULL, 31, NULL, '2022-02-14 16:58:16', '2022-02-14 16:58:16'),
(71, 1, 'Amuze kicilanu', 'Ivarrttu: Amuze kicilanu, iricoco anaw acilo? Liricoco anaw aso nyácilu ja?', NULL, NULL, NULL, NULL, 31, NULL, '2022-02-14 16:59:00', '2022-02-14 16:59:00'),
(72, 1, 'Abutto Kicilanu', 'Ivarrttu: Abutto Kicilanu, anaw aso acilo?', NULL, NULL, NULL, NULL, 31, NULL, '2022-02-14 16:59:52', '2022-02-14 16:59:52'),
(73, 1, 'Imanu', 'Imanu, imatanu, nyalatemanu, nyamatanu', NULL, NULL, NULL, NULL, 32, NULL, '2022-02-14 17:02:54', '2022-02-14 17:02:54'),
(74, 1, 'Lorrlay', 'Lorrlay, ilanyi, nayya nga ilanyi, nabba nga ilanyi ne najuwez nerora', NULL, NULL, NULL, NULL, 32, NULL, '2022-02-14 17:04:02', '2022-02-14 17:04:02'),
(75, 1, 'Kole nga ilanyi', 'Kole nga ilanyi, lemazay ilanyi, ngora inganyi, lurrno ilanyi.', NULL, NULL, NULL, NULL, 32, NULL, '2022-02-14 17:04:45', '2022-02-14 17:04:45');

-- --------------------------------------------------------

--
-- Table structure for table `greeting_responses`
--

CREATE TABLE `greeting_responses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `option` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `response` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trans_eng` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trans_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `audio` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `greetings_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `greeting_responses`
--

INSERT INTO `greeting_responses` (`id`, `option`, `response`, `trans_eng`, `trans_ar`, `audio`, `greetings_id`, `created_at`, `updated_at`) VALUES
(53, '1', 'Deserunt itaque elig', 'Quas et minim placea', 'Labore repudiandae a', NULL, 51, '2021-11-26 19:13:41', '2021-11-26 19:13:41'),
(54, '1', 'Imanu: Aw aj, oo nyalawu nyacilu, oo nyacilu.', 'Response: Yes, we are fine. Yes, we are.', NULL, NULL, 53, '2022-02-10 18:27:59', '2022-02-10 18:27:59'),
(55, '1', 'Imanu: Aw ja, Oo inggawu yiculu, Oo yicilu.', NULL, NULL, NULL, 54, '2022-02-14 16:17:52', '2022-02-14 16:17:52'),
(56, '1', 'Imanu: Aw ja, Oo inggawu yicilu, Oo yicilu.', NULL, NULL, NULL, 55, '2022-02-14 16:18:59', '2022-02-14 16:18:59'),
(57, NULL, 'Imanu: Aw ja, Oo inggawu yicilu, Oo yicilu.', NULL, NULL, NULL, 56, '2022-02-14 16:19:43', '2022-02-14 16:19:43'),
(58, '1', 'Imanu: Aw ja, Oo inggawu yicilu, Oo yicilu.', NULL, NULL, NULL, 57, '2022-02-14 16:23:10', '2022-02-14 16:23:10'),
(59, '1', 'Imanu: Aw ja, Oo nyalawu yicilu, Oo yicilu.', NULL, NULL, NULL, 58, '2022-02-14 16:31:34', '2022-02-14 16:31:34'),
(60, '1', 'Imanu: Aw ja, Oo nyalawu yicilu, Oo yicilu.', NULL, NULL, NULL, 59, '2022-02-14 16:32:29', '2022-02-14 16:32:29'),
(61, '1', 'Imanu: Aw ja, Oo nyalawu yicilu, Oo yicilu.', NULL, NULL, NULL, 60, '2022-02-14 16:33:18', '2022-02-14 16:33:18'),
(62, '1', 'Imanu: Aw ja, Oo inggawu yicilu, Oo nyácilu.', NULL, NULL, NULL, 61, '2022-02-14 16:35:35', '2022-02-14 16:35:35'),
(63, '1', 'Imanu: Aw ja, Oo inggawu yicilu, Oo yicilu.', NULL, NULL, NULL, 62, '2022-02-14 16:36:28', '2022-02-14 16:36:28'),
(64, '1', 'Imanu: Aw ja, Oo nyalawy nyacilu, Oo nyácilu', NULL, NULL, NULL, 63, '2022-02-14 16:37:15', '2022-02-14 16:37:15'),
(65, '1', 'Imanu: Aw ja, Oo inggawu yicilu, Oo yicilu.', NULL, NULL, NULL, 64, '2022-02-14 16:45:23', '2022-02-14 16:45:23'),
(66, '1', 'Imanu: Aw ja, Oo nyalawu nyacilu, Oo nyacilu', NULL, NULL, NULL, 65, '2022-02-14 16:46:13', '2022-02-14 16:46:29'),
(67, '1', 'Iricoco / Liricoco: Nddoba Kicilanu Oo nyacilu, Oo icilu.', NULL, NULL, NULL, 66, '2022-02-14 16:55:06', '2022-02-14 16:55:06'),
(68, NULL, 'Iricoco / Liricoco: Kazinyen Kicilanu Oo nyacilu, Oo icilu.', NULL, NULL, NULL, 67, '2022-02-14 16:56:06', '2022-02-14 16:56:06'),
(69, '1', 'Iricoco / Liricoco: Nerege Kicilanu Oo nyacilu, Oo icilu.', NULL, NULL, NULL, 68, '2022-02-14 16:56:57', '2022-02-14 16:56:57'),
(70, '1', 'Iricoco / Liricoco: Ulingge Kicilanu Oo nyacilu, Oo icilu.', NULL, NULL, NULL, 69, '2022-02-14 16:57:44', '2022-02-14 16:57:44'),
(71, '1', 'Iricoco / Liricoco: Ittilo Kicilanu Oo nyacilu, Oo icilu.', NULL, NULL, NULL, 70, '2022-02-14 16:58:32', '2022-02-14 16:58:32'),
(72, '1', 'Iricoco / Liricoco: Aw ja, Oo nyacilu, Oo icilu.', NULL, NULL, NULL, 71, '2022-02-14 16:59:18', '2022-02-14 16:59:18'),
(73, NULL, 'Iricoco / Liricoco: Aw ja, Oo nyacilu, Oo icilu.', NULL, NULL, NULL, 72, '2022-02-14 17:00:14', '2022-02-14 17:00:14'),
(74, '1', NULL, NULL, NULL, NULL, 73, '2022-02-14 17:03:17', '2022-02-14 17:03:17'),
(75, '1', NULL, NULL, NULL, NULL, 74, '2022-02-14 17:04:09', '2022-02-14 17:04:09'),
(76, '1', NULL, NULL, NULL, NULL, 75, '2022-02-14 17:04:57', '2022-02-14 17:04:57');

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id`, `created_at`, `updated_at`, `name`) VALUES
(1, '2020-10-08 21:06:24', '2020-10-09 05:37:27', 'Arabic'),
(2, '2020-10-08 21:11:52', '2020-10-08 21:11:52', 'English'),
(3, '2020-10-08 21:12:08', '2020-10-08 21:12:08', 'Tira');

-- --------------------------------------------------------

--
-- Table structure for table `lessons`
--

CREATE TABLE `lessons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `lesson_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `eng_trans` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `native_trans` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ar_trans` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lesson_audio` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `topic_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `position` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `levels`
--

CREATE TABLE `levels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `levels`
--

INSERT INTO `levels` (`id`, `created_at`, `updated_at`, `level`) VALUES
(8, '2022-02-10 17:54:16', '2022-02-10 17:54:16', 'Level 1');

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
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2020_10_01_204648_create_sessions_table', 1),
(7, '2020_10_08_181534_create_admins_table', 2),
(8, '2020_10_08_215213_create_languages_table', 3),
(9, '2020_10_08_220139_create_levels_table', 3),
(10, '2020_10_08_220211_create_topics_table', 3),
(11, '2020_10_08_220235_create_lessons_table', 3),
(14, '2020_11_18_170040_create_alphabets_table', 4),
(15, '2020_11_26_143059_add_field_at_lessons_table', 5),
(20, '2020_11_26_174217_create_questions_table', 6),
(21, '2020_11_26_174247_create_options_table', 6),
(22, '2020_11_26_174316_create_results_table', 6),
(23, '2020_11_26_174345_create_question_results_table', 6),
(24, '2020_11_26_182344_add_relationship_field_in_questions_table', 7),
(25, '2020_12_23_103852_add_field_in_admins_table', 8),
(26, '2021_01_06_153546_create_teachers_table', 9),
(28, '2021_02_28_214248_create_greetings_table', 10),
(29, '2021_02_28_221226_create_greeting_responses_table', 10),
(30, '2021_07_04_003115_create_days_table', 11),
(31, '2021_07_04_003740_create_months_table', 11),
(32, '2021_07_04_005558_create_numbers_table', 11);

-- --------------------------------------------------------

--
-- Table structure for table `months`
--

CREATE TABLE `months` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `month_id` int(11) DEFAULT NULL,
  `option` int(11) DEFAULT NULL,
  `month` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `month_lenght` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trans_eng` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trans_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `audio` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `months`
--

INSERT INTO `months` (`id`, `month_id`, `option`, `month`, `month_lenght`, `trans_eng`, `trans_ar`, `image`, `audio`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Áyo', '30', 'January', 'يناير', NULL, NULL, NULL, NULL),
(2, 2, 1, 'Kottara', '28', 'Februray', 'فبراير', NULL, NULL, NULL, NULL),
(3, 3, 1, 'Ngáco', '31', 'March', 'مارس', NULL, NULL, NULL, NULL),
(4, 4, 1, 'Attiny', '30', 'April', 'أبريل', NULL, NULL, NULL, NULL),
(5, 5, 1, 'Kújum', '31', 'May', 'مايو', NULL, NULL, NULL, NULL),
(6, 6, 1, 'Káyo', '30', 'June', 'يونيو', NULL, NULL, NULL, NULL),
(7, 7, 1, 'Cóho', '31', 'July', 'يوليو', NULL, NULL, NULL, NULL),
(8, 8, 1, 'Áwe', '31', 'August', 'أغسطس', NULL, NULL, NULL, NULL),
(9, 9, 1, 'Cabiya', '30', 'September', 'سبتمبر', NULL, NULL, NULL, NULL),
(10, 10, 1, 'Zul', '31', 'October', 'أكتوبر', NULL, NULL, NULL, NULL),
(11, 11, 1, 'Zagaya', '30', 'November', 'نوفمبر', NULL, NULL, NULL, NULL),
(12, 12, 1, 'Veze', '31', 'December', 'ديسمبر', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `numbers`
--

CREATE TABLE `numbers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `number_topic` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `option` int(11) DEFAULT NULL,
  `number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `number_written` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trans_eng` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trans_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `audio` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `numbers`
--

INSERT INTO `numbers` (`id`, `number_topic`, `option`, `number`, `number_written`, `trans_eng`, `trans_ar`, `image`, `audio`, `created_at`, `updated_at`) VALUES
(2, 'Awumazino Yerr Libu Yelamottorr Levaranu', 3, '1', 'Kenne', 'One', NULL, NULL, NULL, '2021-07-06 10:44:24', '2021-07-06 10:44:24');

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE `options` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `option_text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `points` int(11) NOT NULL,
  `question_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question_text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lesson_id` bigint(20) UNSIGNED DEFAULT NULL,
  `level_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `topic_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `question_result`
--

CREATE TABLE `question_result` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `result_id` bigint(20) UNSIGNED DEFAULT NULL,
  `question_id` bigint(20) UNSIGNED DEFAULT NULL,
  `option_id` bigint(20) UNSIGNED DEFAULT NULL,
  `points` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `total_points` int(11) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `topic_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`id`, `total_points`, `user_id`, `topic_id`, `created_at`, `updated_at`) VALUES
(46, 0, 1, NULL, '2021-01-03 03:05:18', '2021-01-03 03:05:18'),
(47, 0, 1, NULL, '2021-01-03 03:08:56', '2021-01-03 03:08:56'),
(48, 0, 1, 2, '2021-01-03 03:10:56', '2021-01-03 03:10:56'),
(49, 1, 1, 8, '2021-01-03 03:12:26', '2021-01-03 03:12:26'),
(50, 1, 1, 8, '2021-01-03 03:15:30', '2021-01-03 03:15:30'),
(51, 1, 1, 2, '2021-01-03 03:16:01', '2021-01-03 03:16:01'),
(52, 0, 1, 2, '2021-01-06 06:51:02', '2021-01-06 06:51:02'),
(53, 1, 1, 2, '2021-01-06 06:51:16', '2021-01-06 06:51:16'),
(54, 1, 1, 8, '2021-01-06 08:30:14', '2021-01-06 08:30:14'),
(55, 1, 1, 8, '2021-01-06 08:30:24', '2021-01-06 08:30:24'),
(56, 1, 1, 8, '2021-01-06 08:30:29', '2021-01-06 08:30:29'),
(57, 1, 1, 8, '2021-01-06 08:30:34', '2021-01-06 08:30:34'),
(58, 0, 1, 8, '2021-01-06 08:30:40', '2021-01-06 08:30:40'),
(59, 0, 1, 2, '2021-01-06 11:14:29', '2021-01-06 11:14:29'),
(60, 0, 1, 2, '2021-01-06 11:14:37', '2021-01-06 11:14:37'),
(61, 2, 1, 2, '2021-01-06 11:14:48', '2021-01-06 11:14:48'),
(62, 1, 1, 6, '2021-01-06 16:45:23', '2021-01-06 16:45:23'),
(63, 0, 1, 6, '2021-01-06 16:45:33', '2021-01-06 16:45:33'),
(64, 2, 1, 2, '2021-01-07 07:21:12', '2021-01-07 07:21:12'),
(65, 2, 1, 2, '2021-01-07 07:21:13', '2021-01-07 07:21:13'),
(66, 1, 1, 6, '2021-01-07 08:57:03', '2021-01-07 08:57:03'),
(67, 0, 5, 6, '2021-01-07 09:12:40', '2021-01-07 09:12:40'),
(68, 0, 5, 2, '2021-01-07 09:12:58', '2021-01-07 09:12:58'),
(69, 0, 5, 2, '2021-01-07 09:12:59', '2021-01-07 09:12:59'),
(70, 3, 6, 2, '2021-01-08 06:27:10', '2021-01-08 06:27:10'),
(71, 1, 6, 2, '2021-01-08 06:27:46', '2021-01-08 06:27:46'),
(72, 0, 7, 2, '2021-01-08 07:44:55', '2021-01-08 07:44:55'),
(73, 3, 7, 2, '2021-01-08 07:45:20', '2021-01-08 07:45:20'),
(74, 3, 7, 2, '2021-01-08 07:45:20', '2021-01-08 07:45:20'),
(75, 1, 7, 26, '2021-01-08 08:05:12', '2021-01-08 08:05:12'),
(76, 1, 7, 26, '2021-01-08 08:05:13', '2021-01-08 08:05:13'),
(77, 0, 7, 26, '2021-01-08 08:05:28', '2021-01-08 08:05:28'),
(78, 1, 7, 2, '2021-01-08 09:19:09', '2021-01-08 09:19:09'),
(79, 0, 1, 26, '2021-01-08 13:03:42', '2021-01-08 13:03:42'),
(80, 1, 1, 26, '2021-01-08 13:03:56', '2021-01-08 13:03:56'),
(81, 0, 1, 2, '2021-01-15 09:57:45', '2021-01-15 09:57:45'),
(82, 1, 1, 2, '2021-01-15 09:57:57', '2021-01-15 09:57:57'),
(83, 0, 1, 26, '2021-01-15 19:54:50', '2021-01-15 19:54:50'),
(84, 1, 1, 26, '2021-01-15 19:54:55', '2021-01-15 19:54:55'),
(85, 0, 9, 26, '2021-04-23 13:05:41', '2021-04-23 13:05:41'),
(86, 1, 9, 26, '2021-04-23 13:05:47', '2021-04-23 13:05:47'),
(87, 0, 1, 2, '2021-07-05 17:32:43', '2021-07-05 17:32:43'),
(88, 2, 1, 2, '2021-07-05 17:32:54', '2021-07-05 17:32:54');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('AZIUNbkNtCCNFpSyUtYF4HFKnU6A3GnD4rjbBsB4', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiMWtPaXh6QjZmSVN2b0tRRWNIR0lsT0VmOFZnVDFSbkV5YUlZSktGUSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC91c2VyL2xldHRlci8yIjt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjE3OiJwYXNzd29yZF9oYXNoX3dlYiI7czo2MDoiJDJ5JDEwJGJlMFR0YWFITFNqV0ZSYTdENTNDSE9UNVBvQXdhUTUxbjBlVDk0WjFZUnZoVy56R2VKSU91Ijt9', 1655585539);

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `specialization` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `language_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `name`, `email`, `password`, `specialization`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`, `language_id`) VALUES
(1, 'kuku Avajani', 'kuku@gmail.com', '$2y$10$c0HLML.KgxXRhrfJMXJoZusqm7n9HaZiBQBt94cNwmU5zhmhV58Pq', 'Tira Specialist', '2021-01-08 09:34:36', NULL, '2021-01-06 13:23:22', '2021-01-06 13:23:22', 3);

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

CREATE TABLE `topics` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `topic_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `language_id` bigint(20) UNSIGNED NOT NULL,
  `level_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`id`, `created_at`, `updated_at`, `topic_name`, `language_id`, `level_id`) VALUES
(30, '2022-02-10 18:28:33', '2022-02-14 16:53:49', 'Alohyio Yittiro: Ajuwez, imanu, anginitto', 3, 8),
(31, '2022-02-14 16:53:31', '2022-02-14 16:53:31', 'Alohiyo Yaja: Ivarrttu ne Liricoco', 3, 8),
(32, '2022-02-14 17:01:21', '2022-02-14 17:01:21', 'Amanu kazunya ne kamonddono', 3, 8);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'kuku flash', 'flash@gmail.com', NULL, '$2y$10$be0TtaaHLSjWFRa7D53CHOT5PoAwaQ51n0eT94Z1YRvhW.zGeJIOu', NULL, NULL, '5bqIHDs8sGjjVH97qkueC3IQPAGHxEovV455kobZzaf7fgRJaFUrmtfp5NkR', NULL, 'profile-photos/TH2u7XnPcC0lCQ2pYJzmQbBH3jgBCDN0VXwPcqhQ.jpeg', '2020-10-01 18:15:59', '2021-03-22 11:00:03'),
(2, 'Signe Morton', 'morton@gmail.com', NULL, '$2y$10$uJ9xX/podi1BjKaIAbMFB./TsPIxKxJORQFsudBZrcHD/rK9fzx1y', NULL, NULL, NULL, NULL, NULL, '2020-10-02 03:05:33', '2020-10-02 04:16:49'),
(3, 'flasht kuku', 'flasht@gmail.com', NULL, '$2y$10$kYVkMqrDBsJSkzpHvmFqFee3VimwSeQaXREjcuedMdkpmxZrfz8oG', NULL, NULL, NULL, NULL, NULL, '2020-12-08 09:09:41', '2020-12-08 09:09:41'),
(4, 'Stacy Allen', 'hafogemug@mailinator.com', NULL, '$2y$10$tD9y7mMdKHN8GY.nhWntqOIeGIpCJS4xQK/4orhFNk6qCr.FVaAma', NULL, NULL, NULL, NULL, NULL, '2020-12-08 13:49:09', '2020-12-08 13:49:09'),
(5, 'Lard Campbell', 'bosim@mailinator.com', NULL, '$2y$10$3jU2CDUKYf/1id4rxzvk8elh2ajHs6vQSaj/pxCMphWvh7BfEzIym', NULL, NULL, NULL, NULL, NULL, '2021-01-07 09:05:11', '2021-01-07 09:10:52'),
(6, 'Valentine Walters', 'hybyb@mailinator.com', NULL, '$2y$10$xe6mmMeDSU64RVJ.R3lgbOxBa1TQ4E.WjkRkw0g0eccpvgwGLJFN6', NULL, NULL, NULL, NULL, NULL, '2021-01-08 06:14:11', '2021-01-08 06:14:11'),
(7, 'jared', 'jared@gmail.com', NULL, '$2y$10$8b1DZzCbWA24JFESWtVUVOYNeSTmFBbgIL8E/aG/y4e7px8rdQ7TG', NULL, NULL, NULL, NULL, NULL, '2021-01-08 07:35:05', '2021-01-08 07:46:34'),
(8, 'Amoko', 'amoko@gmail.com', NULL, '$2y$10$6VAMiqqBRrfYc.Fd3MqP5uxCPSJAJ4zoraoW5BGMV1ilaBzRsePTS', NULL, NULL, NULL, NULL, NULL, '2021-01-08 13:05:13', '2021-01-08 13:05:13'),
(9, 'Emmanuel Baird', 'nori@mailinator.com', NULL, '$2y$10$5JqayPr8ZyJmo.IaHGdXsuC/lEQxisqFOfNEpRRoHrro2F8tihmFG', NULL, NULL, NULL, NULL, NULL, '2021-04-23 13:02:37', '2021-04-23 13:02:37'),
(10, 'Tanya Phelps', 'xajywugiqi@mailinator.com', NULL, '$2y$10$drW2T9xlsMCCzUuXQ6Wlk.mLA05ZyYSxG8qHJs/3dEbYkE48E33M2', NULL, NULL, NULL, NULL, NULL, '2021-05-21 21:39:51', '2021-05-21 21:39:51'),
(11, 'Minerva Price', 'womaq@mailinator.com', NULL, '$2y$10$f8bck.RUt.vl/61EhXnO8urmtgOAzVKWJTdwwyY.cldinEeKQtDr.', NULL, NULL, NULL, NULL, NULL, '2021-05-30 16:59:29', '2021-05-30 16:59:29'),
(12, 'Audra Dejesus', 'xybafy@mailinator.com', NULL, '$2y$10$9NYAwY2TysvqxrstmJ3HouU1jYaplm.CxM4VETKJ7nLntbdEXsncW', NULL, NULL, NULL, NULL, NULL, '2022-05-13 08:06:27', '2022-05-13 08:06:27'),
(13, 'Kuku Fajak', 'kukufajak@gmail.com', NULL, '$2y$10$GRiS5inVhF2v0gKJOzaEI.u4iK0suwm4bp57ah9BihzywB/PxYC0y', NULL, NULL, NULL, NULL, NULL, '2022-05-13 09:14:44', '2022-05-13 09:14:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `alphabets`
--
ALTER TABLE `alphabets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `alphabets_language_id_foreign` (`language_id`);

--
-- Indexes for table `days`
--
ALTER TABLE `days`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `greetings`
--
ALTER TABLE `greetings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `greetings_topic_id_foreign` (`topic_id`),
  ADD KEY `greetings_level_id_foreign` (`level_id`);

--
-- Indexes for table `greeting_responses`
--
ALTER TABLE `greeting_responses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `greeting_responses_greetings_id_foreign` (`greetings_id`);

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lessons`
--
ALTER TABLE `lessons`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lessons_topic_id_foreign` (`topic_id`);

--
-- Indexes for table `levels`
--
ALTER TABLE `levels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `months`
--
ALTER TABLE `months`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `numbers`
--
ALTER TABLE `numbers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`id`),
  ADD KEY `options_question_id_foreign` (`question_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `questions_lesson_id_foreign` (`lesson_id`),
  ADD KEY `questions_level_id_foreign` (`level_id`),
  ADD KEY `questions_topic_id_foreign` (`topic_id`);

--
-- Indexes for table `question_result`
--
ALTER TABLE `question_result`
  ADD PRIMARY KEY (`id`),
  ADD KEY `question_results_result_id_foreign` (`result_id`),
  ADD KEY `question_results_question_id_foreign` (`question_id`),
  ADD KEY `question_results_option_id_foreign` (`option_id`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`id`),
  ADD KEY `results_user_id_foreign` (`user_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `teachers_email_unique` (`email`),
  ADD KEY `teachers_language_id_foreign` (`language_id`);

--
-- Indexes for table `topics`
--
ALTER TABLE `topics`
  ADD PRIMARY KEY (`id`),
  ADD KEY `topics_language_id_foreign` (`language_id`),
  ADD KEY `topics_level_id_foreign` (`level_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `alphabets`
--
ALTER TABLE `alphabets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `days`
--
ALTER TABLE `days`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `greetings`
--
ALTER TABLE `greetings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `greeting_responses`
--
ALTER TABLE `greeting_responses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `lessons`
--
ALTER TABLE `lessons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `levels`
--
ALTER TABLE `levels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `months`
--
ALTER TABLE `months`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `numbers`
--
ALTER TABLE `numbers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `options`
--
ALTER TABLE `options`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `question_result`
--
ALTER TABLE `question_result`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=187;

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `topics`
--
ALTER TABLE `topics`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `alphabets`
--
ALTER TABLE `alphabets`
  ADD CONSTRAINT `alphabets_language_id_foreign` FOREIGN KEY (`language_id`) REFERENCES `languages` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `greetings`
--
ALTER TABLE `greetings`
  ADD CONSTRAINT `greetings_level_id_foreign` FOREIGN KEY (`level_id`) REFERENCES `levels` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `greetings_topic_id_foreign` FOREIGN KEY (`topic_id`) REFERENCES `topics` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `greeting_responses`
--
ALTER TABLE `greeting_responses`
  ADD CONSTRAINT `greeting_responses_greetings_id_foreign` FOREIGN KEY (`greetings_id`) REFERENCES `greetings` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `lessons`
--
ALTER TABLE `lessons`
  ADD CONSTRAINT `lessons_topic_id_foreign` FOREIGN KEY (`topic_id`) REFERENCES `topics` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `options`
--
ALTER TABLE `options`
  ADD CONSTRAINT `options_question_id_foreign` FOREIGN KEY (`question_id`) REFERENCES `questions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `questions_lesson_id_foreign` FOREIGN KEY (`lesson_id`) REFERENCES `lessons` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `questions_level_id_foreign` FOREIGN KEY (`level_id`) REFERENCES `levels` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `questions_topic_id_foreign` FOREIGN KEY (`topic_id`) REFERENCES `topics` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `question_result`
--
ALTER TABLE `question_result`
  ADD CONSTRAINT `question_results_option_id_foreign` FOREIGN KEY (`option_id`) REFERENCES `options` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `question_results_question_id_foreign` FOREIGN KEY (`question_id`) REFERENCES `questions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `question_results_result_id_foreign` FOREIGN KEY (`result_id`) REFERENCES `results` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `results`
--
ALTER TABLE `results`
  ADD CONSTRAINT `results_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `teachers`
--
ALTER TABLE `teachers`
  ADD CONSTRAINT `teachers_language_id_foreign` FOREIGN KEY (`language_id`) REFERENCES `languages` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `topics`
--
ALTER TABLE `topics`
  ADD CONSTRAINT `topics_language_id_foreign` FOREIGN KEY (`language_id`) REFERENCES `languages` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `topics_level_id_foreign` FOREIGN KEY (`level_id`) REFERENCES `levels` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
