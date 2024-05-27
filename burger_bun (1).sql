-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2024 at 06:52 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `burger_bun`
--

-- --------------------------------------------------------

--
-- Table structure for table `area`
--

CREATE TABLE `area` (
  `area_id` bigint(20) UNSIGNED NOT NULL,
  `area_name` varchar(255) NOT NULL,
  `city_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `area`
--

INSERT INTO `area` (`area_id`, `area_name`, `city_id`, `created_at`, `updated_at`) VALUES
(1, 'Bapunagar', 1, '2024-02-08 10:55:09', '2024-02-08 10:55:09'),
(2, 'Nikol', 1, '2024-02-08 10:55:09', '2024-02-08 10:55:09');

-- --------------------------------------------------------

--
-- Table structure for table `book_table`
--

CREATE TABLE `book_table` (
  `b_id` bigint(20) UNSIGNED NOT NULL,
  `b_name` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `b_contact` bigint(20) NOT NULL,
  `b_date` date NOT NULL,
  `s_time` time NOT NULL,
  `e_time` time NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `book_table`
--

INSERT INTO `book_table` (`b_id`, `b_name`, `status`, `b_contact`, `b_date`, `s_time`, `e_time`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Vishva Kansagra', 'Pending', 9745683210, '2024-05-03', '12:17:00', '13:16:00', 4, '2024-05-01 23:17:01', '2024-05-01 23:21:13');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` bigint(20) UNSIGNED NOT NULL,
  `cat_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`, `created_at`, `updated_at`) VALUES
(1, 'Burgers', '2024-02-08 05:28:38', '2024-02-11 23:26:53'),
(2, 'Cold-drinks', '2024-03-12 09:09:56', '2024-03-12 09:09:56'),
(3, 'Chinease', '2024-03-23 22:40:51', '2024-03-23 22:40:51');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `city_id` bigint(20) UNSIGNED NOT NULL,
  `city_name` varchar(255) NOT NULL,
  `state_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`city_id`, `city_name`, `state_id`, `created_at`, `updated_at`) VALUES
(1, 'Ahmedabad', 1, '2024-02-08 10:54:51', '2024-02-08 10:54:51');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact_no` varchar(255) DEFAULT NULL,
  `subject` varchar(255) NOT NULL,
  `msg` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `contact_no`, `subject`, `msg`, `created_at`, `updated_at`) VALUES
(1, 'testing', 'test@gmail.com', '8574123690', 'test', 'testing...', '2024-02-08 05:31:25', '2024-02-08 05:31:25'),
(2, 'Krupali Savaliya', 'khebdi@gmail.com', '8574126930', 'order regarding', 'can you delivered order like home delivery or order-take-way like...', '2024-03-26 07:31:04', '2024-03-26 07:31:04'),
(3, 'Jinal Vora', 'jinal@gmail.com', '8574120369', 'payment process', 'payment process ..', '2024-03-27 07:28:47', '2024-03-27 07:28:47'),
(4, 'demo', 'demo@gmail.com', '8574120369', 'demo', 'demo', '2024-03-27 07:29:25', '2024-03-27 07:29:25'),
(5, 'Mihir mehta', 'mehta@gmail.com', '8574120369', 'tested', 'testing for pagination....', '2024-03-27 07:29:58', '2024-03-27 07:29:58'),
(6, 'R B institue', 'rb@gmail.com', '8574120369', 'Bulk-orders', 'What are the process of Bulk-orders...', '2024-03-27 07:30:42', '2024-03-27 07:30:42');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `f_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `rating` int(11) DEFAULT NULL,
  `msg` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`f_id`, `user_id`, `rating`, `msg`, `created_at`, `updated_at`) VALUES
(1, 2, 4, 'for tested...', '2024-02-08 05:31:44', '2024-02-08 05:31:44'),
(2, 3, 5, 'nice plateform...', '2024-02-11 23:31:19', '2024-02-11 23:31:19'),
(3, 5, 4, 'good plateform...', '2024-02-26 01:17:52', '2024-02-26 01:17:52'),
(4, 6, 4, 'Good service...', '2024-03-26 07:33:56', '2024-03-26 07:33:56'),
(5, 6, 5, 'good food according price..', '2024-03-27 07:31:41', '2024-03-27 07:31:41'),
(6, 3, 4, 'food is good..', '2024-03-27 07:32:24', '2024-03-27 07:32:24');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(29, '2014_10_12_000000_create_users_table', 1),
(30, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(31, '2019_08_19_000000_create_failed_jobs_table', 1),
(32, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(33, '2024_01_21_070958_create_category_table', 1),
(34, '2024_01_25_152539_create_contact_table', 1),
(35, '2024_01_26_053623_create_state_table', 1),
(36, '2024_01_26_053822_create_city_table', 1),
(37, '2024_01_26_054113_create_area_table', 1),
(38, '2024_02_02_143646_create_feedback_table', 1),
(39, '2024_02_06_112218_create_roles_table', 1),
(40, '2024_02_08_110420_create_product_table', 2),
(42, '2024_02_26_072524_create_event_table', 4),
(43, '2024_03_13_152708_add_title_to_event_table', 5),
(46, '2024_03_24_070934_create_order_table', 6),
(48, '2024_02_17_160728_add_gender_to_users_table', 8),
(49, '2024_05_02_035540_create_table_booking', 9);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `total_price` decimal(10,2) NOT NULL,
  `payment_method` varchar(255) NOT NULL,
  `payment_status` varchar(255) DEFAULT NULL,
  `order_status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`order_id`, `user_id`, `total_price`, `payment_method`, `payment_status`, `order_status`, `created_at`, `updated_at`) VALUES
(1, 4, 419.00, 'razorpay', 'Completed', 'Completed', '2024-03-29 01:43:00', '2024-03-29 01:43:00'),
(2, 2, 269.00, 'razorpay', 'Pending', 'Cancelled', '2024-03-29 01:57:21', '2024-03-29 01:57:21'),
(3, 2, 269.00, 'razorpay', 'Completed', 'Completed', '2024-03-29 01:57:37', '2024-03-29 01:57:37'),
(4, 2, 269.00, 'razorpay', 'Completed', 'Completed', '2024-03-29 01:58:46', '2024-03-29 01:58:46'),
(5, 2, 185.00, 'razorpay', 'Completed', 'Completed', '2024-03-29 05:44:37', '2024-03-29 05:44:37'),
(6, 7, 185.00, 'razorpay', 'Completed', 'Completed', '2024-04-08 21:49:40', '2024-04-08 21:49:40'),
(7, 8, 85.00, 'razorpay', 'Completed', 'Completed', '2024-04-09 07:36:04', '2024-04-09 07:36:04'),
(8, 8, 269.00, 'razorpay', 'Completed', 'Completed', '2024-04-09 10:47:21', '2024-04-09 10:47:21'),
(9, 5, 85.00, 'razorpay', 'Completed', 'Completed', '2024-04-12 05:30:53', '2024-04-12 05:30:53'),
(10, 5, 234.00, 'cash', 'Completed', 'Completed', '2024-04-12 05:33:35', '2024-04-12 05:33:35'),
(11, 4, 35.00, 'razorpay', 'Completed', 'Completed', '2024-04-29 05:44:15', '2024-04-29 05:44:15');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `item_id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `p_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`item_id`, `order_id`, `p_id`, `quantity`, `price`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 234.00, '2024-03-29 01:43:00', '2024-03-29 01:43:00'),
(2, 1, 4, 1, 150.00, '2024-03-29 01:43:00', '2024-03-29 01:43:00'),
(3, 1, 3, 1, 35.00, '2024-03-29 01:43:00', '2024-03-29 01:43:00'),
(4, 2, 1, 1, 234.00, '2024-03-29 01:57:21', '2024-03-29 01:57:21'),
(5, 2, 5, 1, 35.00, '2024-03-29 01:57:21', '2024-03-29 01:57:21'),
(6, 4, 1, 1, 234.00, '2024-03-29 01:58:46', '2024-03-29 01:58:46'),
(7, 4, 3, 1, 35.00, '2024-03-29 01:58:46', '2024-03-29 01:58:46'),
(8, 5, 4, 1, 150.00, '2024-03-29 05:44:37', '2024-03-29 05:44:37'),
(9, 5, 3, 1, 35.00, '2024-03-29 05:44:37', '2024-03-29 05:44:37'),
(10, 6, 4, 1, 150.00, '2024-04-08 21:49:40', '2024-04-08 21:49:40'),
(11, 6, 5, 1, 35.00, '2024-04-08 21:49:40', '2024-04-08 21:49:40'),
(12, 7, 2, 1, 50.00, '2024-04-09 07:36:04', '2024-04-09 07:36:04'),
(13, 7, 3, 1, 35.00, '2024-04-09 07:36:04', '2024-04-09 07:36:04'),
(14, 8, 1, 1, 234.00, '2024-04-09 10:47:21', '2024-04-09 10:47:21'),
(15, 8, 3, 1, 35.00, '2024-04-09 10:47:21', '2024-04-09 10:47:21'),
(16, 9, 2, 1, 50.00, '2024-04-12 05:30:53', '2024-04-12 05:30:53'),
(17, 9, 5, 1, 35.00, '2024-04-12 05:30:53', '2024-04-12 05:30:53'),
(18, 10, 1, 1, 234.00, '2024-04-12 05:33:35', '2024-04-12 05:33:35'),
(19, 11, 5, 1, 35.00, '2024-04-29 05:44:15', '2024-04-29 05:44:15');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `p_id` bigint(20) UNSIGNED NOT NULL,
  `p_name` varchar(255) NOT NULL,
  `p_image` varchar(255) DEFAULT NULL,
  `cat_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `is_delete` tinyint(1) NOT NULL DEFAULT 0,
  `description` text DEFAULT NULL,
  `price` double(15,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`p_id`, `p_name`, `p_image`, `cat_id`, `user_id`, `is_delete`, `description`, `price`, `created_at`, `updated_at`) VALUES
(1, 'pizaa', 'download.jpeg', 1, 1, 0, 'Delicios pizza', 234.00, '2024-02-09 09:39:39', '2024-02-09 09:39:39'),
(2, 'Aloo-tiki Burger', 'burger.jpeg', 1, 1, 0, 'burger', 50.00, '2024-02-09 11:04:30', '2024-02-09 11:04:30'),
(3, 'Sprite', 'sprite.jpeg', 2, 1, 0, 'Cold-Drinks', 35.00, '2024-02-10 10:51:21', '2024-02-10 10:51:21'),
(4, 'Manchurain', 'manchurian.jpeg', 3, 1, 0, 'Manchurian', 150.00, '2024-03-23 22:41:14', '2024-03-23 22:41:14'),
(5, 'Pepsi', 'th.jpeg', 2, 1, 0, 'Pepsi soft drink', 35.00, '2024-03-26 07:36:32', '2024-03-26 07:36:32'),
(6, 'Veg parcel', 'veg_parcel.jpg', 1, 1, 0, 'made with paneer, vegetables, flour', 60.00, '2024-03-28 01:47:45', '2024-03-28 01:47:45');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`role_id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', '2024-02-08 10:54:23', '2024-02-08 10:54:23'),
(2, 'User', '2024-02-08 10:54:23', '2024-02-08 10:54:23');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `state_id` bigint(20) UNSIGNED NOT NULL,
  `state_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`state_id`, `state_name`, `created_at`, `updated_at`) VALUES
(1, 'Gujarat', '2024-02-08 10:53:59', '2024-02-08 10:53:59');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` bigint(20) UNSIGNED DEFAULT NULL,
  `Contact` varchar(255) DEFAULT NULL,
  `address` text NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `area_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `email`, `email_verified_at`, `password`, `role_id`, `Contact`, `address`, `image`, `area_id`, `created_at`, `updated_at`, `gender`) VALUES
(1, 'Admin', 'admin@gmail.com', '2024-02-08 10:55:55', '$2y$12$NfsieCPZHP/qIJVj1wOOMOmnfV2JK2Rho.mKmLawzy6.bnA5TACl2', 1, '9712658293', 'Bapunagar', '00.jpg', 1, '2024-02-08 10:55:55', '2024-02-08 10:55:55', NULL),
(2, 'Harsh Shah', 'harshshah@gmail.com', '2024-02-08 05:29:55', '$2y$12$bD9SUW63EXIxCBVFjk30wefzh1iuPmcgmehvARShtqDrXlem1Wv9O', 2, '9712658293', 'bapunagar', '0000.jpg', 1, '2024-02-08 05:29:55', '2024-02-08 05:29:55', NULL),
(3, 'Vishva Kansagra', 'vishvakansagra@gmail.com', '2024-02-11 23:30:51', '$2y$12$9uH1S2619WTU5Zhe5Aj5UOMeYyGBUh.8WY2dL82IVHyvaKc9KHh8K', 2, '7496853210', 'hirawadi', 'IMG-20230923-WA0005.jpg', 1, '2024-02-11 23:30:52', '2024-02-11 23:30:52', NULL),
(4, 'Diya lagdhir', 'diya@gmail.com', '2024-02-17 10:56:39', '$2y$12$YXb7VPo7K.kddrYLLueZheBWUwtnNr96/bk7SorxEukDEC8/pYI1S', 2, '8574120369', 'Narol', 'vintagecar.jpg', 2, '2024-02-17 10:56:40', '2024-02-17 10:56:40', NULL),
(5, 'Harsh Prajapati', 'hvprajapati@gmail.com', '2024-02-26 01:17:12', '$2y$12$RvcdkSf7/fV/55WepwmKT.8z5UpgRAD0CMVm.g5oMWKXqBwv7mZPC', 2, '8574120369', 'Naroda', 'th.jpeg', 2, '2024-02-26 01:17:13', '2024-02-26 01:17:13', NULL),
(6, 'Krupali Savaliya', 'khebdi@gmail.com', '2024-03-26 07:32:32', '$2y$12$D7Fyb/qd2.aCPy/q9dB63uxTF5WArOoAO4BNbAqJU9rfncJFpqUee', 2, '8745963210', 'Nikol', 'RBIMS.png', 2, '2024-03-26 07:32:33', '2024-03-26 07:32:33', NULL),
(7, 'Raj vora', 'raj@gmail.com', '2024-04-08 20:00:20', '$2y$12$gsdpTHof.jL8h3V18CqSteyt5V6gtjpf2Gi2y.5nu.kwfTQVLIxtS', 2, '8574120369', 'aa', '20230729_122758.jpg', 1, '2024-04-08 20:00:21', '2024-04-08 20:00:21', NULL),
(8, 'Smit Panchal', 'smit@gmail.com', '2024-04-09 07:35:24', '$2y$12$nDfdv0FPyujmTNJIjhAD/uVYQ6pmSbSKippjI7G6OWWwD09cyTppC', 2, '9874563201', 'Odhav', 'th.jpeg', 1, '2024-04-09 07:35:25', '2024-04-09 07:35:25', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`area_id`),
  ADD KEY `area_city_id_foreign` (`city_id`);

--
-- Indexes for table `book_table`
--
ALTER TABLE `book_table`
  ADD PRIMARY KEY (`b_id`),
  ADD KEY `book_table_user_id_foreign` (`user_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`city_id`),
  ADD KEY `city_state_id_foreign` (`state_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`f_id`),
  ADD KEY `feedback_user_id_foreign` (`user_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `order_user_id_foreign` (`user_id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`item_id`),
  ADD KEY `order_items_order_id_foreign` (`order_id`),
  ADD KEY `order_items_p_id_foreign` (`p_id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`p_id`),
  ADD KEY `product_cat_id_foreign` (`cat_id`),
  ADD KEY `product_user_id_foreign` (`user_id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`state_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `role_id` (`role_id`),
  ADD KEY `area_id` (`area_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `area`
--
ALTER TABLE `area`
  MODIFY `area_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `book_table`
--
ALTER TABLE `book_table`
  MODIFY `b_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `city_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `f_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `order_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `item_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `p_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `role_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `state_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `area`
--
ALTER TABLE `area`
  ADD CONSTRAINT `area_city_id_foreign` FOREIGN KEY (`city_id`) REFERENCES `city` (`city_id`) ON DELETE SET NULL;

--
-- Constraints for table `book_table`
--
ALTER TABLE `book_table`
  ADD CONSTRAINT `book_table_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `city`
--
ALTER TABLE `city`
  ADD CONSTRAINT `city_state_id_foreign` FOREIGN KEY (`state_id`) REFERENCES `state` (`state_id`) ON DELETE SET NULL;

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE SET NULL;

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE;

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `order` (`order_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `order_items_p_id_foreign` FOREIGN KEY (`p_id`) REFERENCES `product` (`p_id`) ON DELETE CASCADE;

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_cat_id_foreign` FOREIGN KEY (`cat_id`) REFERENCES `category` (`cat_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `product_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `role` (`role_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `users_ibfk_2` FOREIGN KEY (`area_id`) REFERENCES `area` (`area_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
