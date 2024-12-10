-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2024 at 06:39 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `real_estate`
--

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
-- Table structure for table `inquiries`
--

CREATE TABLE `inquiries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `client_demand` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `inquiries`
--

INSERT INTO `inquiries` (`id`, `name`, `phone`, `client_demand`, `message`, `created_at`, `updated_at`) VALUES
(1, 'John', '024555553', 'land', 'I need a property for rent', '2024-12-07 09:00:07', '2024-12-07 09:00:07');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_12_06_141633_create_users_table', 2),
(6, '2024_12_07_141902_create_inquiries_table', 3),
(7, '2024_12_07_184943_alter_users_table', 4),
(8, '2024_12_08_070045_create_properties_table', 5),
(9, '2024_12_08_180921_alter_properties_table', 6),
(10, '2024_12_08_203622_create_orders_table', 7),
(11, '2024_12_08_203751_alter_orders_table', 8),
(12, '2024_12_08_205723_alter_orders_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `property_name` varchar(255) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `paid_amount` decimal(10,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `order_number` varchar(255) NOT NULL,
  `user_id` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `property_name`, `customer_name`, `email`, `phone`, `paid_amount`, `created_at`, `updated_at`, `order_number`, `user_id`) VALUES
(1, 'Maple Hollow Retreat', 'John', 'John@mail.net', '026478412', 489.00, '2024-12-08 15:31:30', '2024-12-08 15:31:30', '#ORD-6756092A66AF7', '2'),
(2, 'Whispering Pines Cottage', 'james', 'james@gmail.com', '9876543210', 599.00, '2024-12-09 06:09:40', '2024-12-09 06:09:40', '#ORD-6756D6FC38130', '1');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE `properties` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `property_name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `rent` decimal(10,2) NOT NULL,
  `location` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`id`, `property_name`, `image`, `rent`, `location`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Whispering Pines Cottage', 'uploads/1733642778.png', 599.00, 'Australia', 'Whispering Pines Cottage is a charming and secluded retreat nestled amidst a dense forest of towering pines, offering the perfect blend of tranquility and rustic elegance. This idyllic cottage features a picturesque stone facade with ivy climbing along the walls, creating an atmosphere of timeless beauty. The interior is a cozy haven, with hardwood floors, exposed beams, and a large stone fireplace that serves as the heart of the living area.\r\n\r\nLarge windows allow natural light to flood the space, while offering breathtaking views of the surrounding forest. The open-concept living room and kitchen are designed for comfort and functionality, with luxurious touches like polished granite countertops and handcrafted wooden cabinetry. A peaceful bedroom with soft, plush linens opens up to a private balcony, where the whisper of the pines and the gentle rustling of leaves create a soothing soundtrack.\r\n\r\nThe outdoor space is equally enchanting, with a stone patio, a bubbling creek nearby, and a firepit perfect for cool evenings. Guests can spend their days exploring the nearby trails, breathing in the fresh pine-scented air, or simply relax by the cozy fire, listening to the peaceful sounds of nature.\r\n\r\nWhispering Pines Cottage is the ultimate escape from the hustle and bustle of city life, offering an unforgettable experience of peace, nature, and luxury.', '2024-12-08 01:56:18', '2024-12-08 01:56:18'),
(3, 'Maple Hollow Retreat', 'uploads/1733681288.png', 489.00, 'America', 'Tucked away in the heart of a charming rural valley, Maple Hollow Retreat is a cozy, rustic cabin surrounded by towering maple trees. With a warm stone fireplace, hand-hewn wooden beams, and a large wrap-around porch, the retreat is perfect for weekend escapes or longer stays. A serene creek flows through the property', '2024-12-08 12:38:08', '2024-12-08 12:38:08'),
(4, 'Valeshore Bay', 'uploads/1733685495.png', 1999.00, 'Canada', 'A serene coastal town on the edge of the Sapphire Sea, Valeshore Bay is known for its stunning beaches, clear turquoise waters, and bustling harbor. The town is famous for its seaside promenade lined with colorful shops, restaurants, and art galleries. Valeshore Bay is a popular destination for sailing, whale watching, and enjoying the vibrant sunsets that light up the horizon.', '2024-12-08 12:51:38', '2024-12-08 13:48:15');

-- --------------------------------------------------------

--
-- Table structure for table `property_details`
--

CREATE TABLE `property_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `property_id` bigint(20) UNSIGNED NOT NULL,
  `no_of_bathrooms` int(11) NOT NULL,
  `no_of_bedrooms` int(11) NOT NULL,
  `no_of_garages` int(11) NOT NULL,
  `area` int(11) NOT NULL,
  `no_of_parkings` int(11) NOT NULL,
  `available_wifi` tinyint(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `property_details`
--

INSERT INTO `property_details` (`id`, `property_id`, `no_of_bathrooms`, `no_of_bedrooms`, `no_of_garages`, `area`, `no_of_parkings`, `available_wifi`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 4, 2, 1800, 1, 1, '2024-12-10 05:36:16', '2024-12-10 05:36:16'),
(2, 3, 2, 3, 2, 1200, 1, 1, '2024-12-10 05:36:16', '2024-12-10 05:36:16'),
(3, 4, 4, 6, 2, 2500, 2, 1, '2024-12-10 05:36:16', '2024-12-10 05:36:16');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `address`, `created_at`, `updated_at`, `role`) VALUES
(1, 'admin', 'admin@gmail.com', '12345678', '', '2024-12-07 08:10:48', '2024-12-07 08:10:48', 1),
(2, 'Tom', 'Tom@mail.net', '12345678', '2897 Burke Street\nWeymouth, MA 02189', '2024-12-08 12:58:11', '2024-12-08 12:58:11', 0),
(3, 'Colin K. Beaty', 'ColinKBeaty@teleworm.us', '12345678', '3470 Morningview Lane Latimer, IA 50452', '2024-12-09 04:41:21', '2024-12-09 04:41:21', 0),
(4, 'Bruce M. Zander', 'BruceMZander@jourrapide.com', '12345678', '2897 Burke Street Weymouth, MA 02189', '2024-12-09 04:52:28', '2024-12-09 04:52:28', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `inquiries`
--
ALTER TABLE `inquiries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `orders_order_number_unique` (`order_number`);

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
-- Indexes for table `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `property_details`
--
ALTER TABLE `property_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk12` (`property_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `inquiries`
--
ALTER TABLE `inquiries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `property_details`
--
ALTER TABLE `property_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `property_details`
--
ALTER TABLE `property_details`
  ADD CONSTRAINT `fk12` FOREIGN KEY (`property_id`) REFERENCES `properties` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
