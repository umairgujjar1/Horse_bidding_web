-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2023 at 06:56 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bidding_website`
--

-- --------------------------------------------------------

--
-- Table structure for table `autions`
--

CREATE TABLE `autions` (
  `id` int(11) NOT NULL,
  `title` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `categorey_name` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` varchar(100) DEFAULT NULL,
  `height` varchar(100) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `weight` varchar(245) NOT NULL,
  `price` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `end_data` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `autions`
--

INSERT INTO `autions` (`id`, `title`, `categorey_name`, `type`, `age`, `height`, `description`, `weight`, `price`, `image`, `start_date`, `end_data`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Rosie', 'Mustang', 'Ranch Horse', '6 years', '15 hands', 'Rosie, a hardy Mustang, is an invaluable asset on the ranch, displaying intelligence and versatility in herding cattle and navigating rugged terrain', '1100 lbs', '4200', '1693384436.jpg', '2022-11-23', '2024-03-07', 'Active', '2023-09-20 18:51:07', '2023-09-20 18:51:07'),
(2, 'Chief', 'Belgian Draft', 'Workhorse', '9 years', '17.3 hands', 'Chief, a robust Belgian Draft horse, is a true workhorse, capable of pulling heavy loads with his impressive strength and gentle temperament', '2000 lbs', '7500', '1693384523.jpg', '2023-04-17', '2024-01-02', 'Active', '2023-09-20 18:51:07', '2023-09-20 18:51:07'),
(3, 'Whisper', 'Endurance Horse', 'Workhorse', '7 years', '15.2 hands', 'Whisper, an agile Arabian, conquers endurance races with its unwavering stamina and deep connection with its rider', '950 lbs', '10500', '1693384642.jpg', '2023-03-15', '2024-05-29', 'Active', '2023-09-20 18:51:07', '2023-09-20 18:51:07'),
(4, 'Zeus', 'Clydesdale', 'Show Hitch', '4 years', '18 hands', 'Zeus, a majestic Clydesdale, steals the show in elaborate hitches, displaying strength and elegance while pulling ornate wagons', '2200 lbs', '25000', '1693384712.jpg', '2023-08-09', '2023-10-18', 'Active', '2023-09-20 18:51:07', '2023-09-20 18:51:07'),
(5, 'Misty', 'Welsh Pony', 'Children\'s Pony', '10 years', '12.1 hands', 'Misty, an adorable Welsh Pony, brings joy to children with its manageable size and gentle nature, making it an ideal first pony', '450 lbs', '3000', '1693384772.jpg', '2023-08-01', '2023-12-26', 'Active', '2023-09-20 18:51:07', '2023-09-20 18:51:07'),
(6, 'Tango', 'Paso Fino', 'Gaited Horse', '5 years', '14.3 hands', 'Tango, a charismatic Paso Fino, wows riders with its unique and smooth four-beat gait, providing a comfortable ride', '1000 lbs', '6200', '1693384834.jpg', '2023-08-09', '2023-10-31', 'Active', '2023-09-20 18:51:07', '2023-09-20 18:51:07'),
(7, 'Maverick', 'American Quarter Horse', 'Cutting Horse', '8 years', '15.1 hands', 'Maverick, an agile American Quarter Horse, showcases exceptional cow sense and quick reflexes, making it a standout in cutting competitions', '1200 lbs', '7800', '1693384901.jpg', '2023-08-17', '2023-11-07', 'Active', '2023-09-20 18:51:07', '2023-09-20 18:51:07'),
(8, 'Serenity', 'Morgan', 'All-Around Horse', '11 years', '14.3 hands', 'Serenity, a versatile Morgan horse, lives up to its breed\'s reputation by excelling in various disciplines, from trail riding to dressage, with a calm and adaptable nature.', '1100 lbs', '5000', '1693384961.jpg', '2023-08-02', '2023-11-23', 'Active', '2023-09-20 18:51:07', '2023-09-20 18:51:07'),
(9, 'Heera', 'Endurance Horse', 'Workhorse', '6 Year', '15.2 hands', 'Heera, an agile Arabian, conquers endurance races with its unwavering stamina and deep connection with its rider', '950 lbs', '10500', '1693384642.jpg', '', '', 'Active', '2023-09-21 02:15:43', '2023-09-21 02:15:43');

-- --------------------------------------------------------

--
-- Table structure for table `bids`
--

CREATE TABLE `bids` (
  `id` int(11) NOT NULL,
  `aution_id` int(225) NOT NULL,
  `horse_name` varchar(222) NOT NULL,
  `status` varchar(100) DEFAULT NULL,
  `user_id` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `aution_price` int(100) DEFAULT NULL,
  `bid_amount` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `bid_date` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `winner_date` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` varchar(250) NOT NULL,
  `updated_at` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bids`
--

INSERT INTO `bids` (`id`, `aution_id`, `horse_name`, `status`, `user_id`, `aution_price`, `bid_amount`, `bid_date`, `winner_date`, `created_at`, `updated_at`) VALUES
(12, 9, 'Heera', 'approved', '8', 10500, '9000', NULL, NULL, '2023-09-21 03:17:35', '2023-09-21 11:26:27'),
(13, 4, 'Zeus', 'cancel', '8', 25000, '350', NULL, NULL, '2023-09-22 06:04:49', '2023-09-22 06:11:32');

-- --------------------------------------------------------

--
-- Table structure for table `brand_catagorey`
--

CREATE TABLE `brand_catagorey` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brand_catagorey` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `member_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `catagorey`
--

CREATE TABLE `catagorey` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `member_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `categorey_name` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `categorey_name`, `status`) VALUES
(1, 'Working Horse', 'Active');

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
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `name` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `message`, `date`) VALUES
(3, 'zohiab', 'zohaib@gmail.com', '03097136235', 'jkgsaf  ahflkjafsfi dif lhl');

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_06_09_104452_create_catagorey_table', 1),
(5, '2021_06_12_090627_create-brand_table', 1),
(6, '2021_06_12_100215_create-sub_table', 1),
(8, '2023_08_06_190600_create_subscribers_table', 2);

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
-- Table structure for table `subcribers`
--

CREATE TABLE `subcribers` (
  `id` int(11) NOT NULL,
  `email` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `subcribe_date` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subscribed_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`id`, `email`, `subscribed_date`, `created_at`, `updated_at`) VALUES
(2, 'umair@gmail.com', '2023-08-31', '2023-08-31 04:17:49', '2023-08-31 04:17:49'),
(3, 'muzamil1@gmail.com', '2023-09-21', '2023-09-20 21:28:28', '2023-09-20 21:28:28');

-- --------------------------------------------------------

--
-- Table structure for table `sub_catagorey`
--

CREATE TABLE `sub_catagorey` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sub_catagorey` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `member_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `role`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(8, 'Umair', 'User', 'user@gmail.com', NULL, '$2y$10$wa4mt8CDjSYqS9yvaXxExONVHv0m07JcbPbhvk0BkA4JB/TpCLu4a', NULL, '2023-09-20 21:19:07', '2023-09-20 21:20:32'),
(9, 'Admin', 'admin', 'admin@gmail.com', NULL, '$2y$10$jB9Hx0D1Wz0mawuIwmFIguGUXrHfvQhpT3EsjSRoFLZdeb4VpZu/a', NULL, '2023-09-20 21:19:42', '2023-09-20 21:19:42'),
(10, 'rana', 'admin', 'rana@gmail.com', '2023-09-22 06:10:20', '$2y$10$fLt0iF1VXVcrFh9UcYs4e./aj0lg9urr27l1xQEK7hlGiGzZGx4ci', NULL, '2023-09-22 01:09:22', '2023-09-22 01:09:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `autions`
--
ALTER TABLE `autions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bids`
--
ALTER TABLE `bids`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brand_catagorey`
--
ALTER TABLE `brand_catagorey`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `catagorey`
--
ALTER TABLE `catagorey`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `subscribers_email_unique` (`email`);

--
-- Indexes for table `sub_catagorey`
--
ALTER TABLE `sub_catagorey`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `autions`
--
ALTER TABLE `autions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `bids`
--
ALTER TABLE `bids`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `brand_catagorey`
--
ALTER TABLE `brand_catagorey`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `catagorey`
--
ALTER TABLE `catagorey`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sub_catagorey`
--
ALTER TABLE `sub_catagorey`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
