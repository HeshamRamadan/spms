-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2016 at 07:53 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spms`
--

-- --------------------------------------------------------

--
-- Table structure for table `developers`
--

CREATE TABLE `developers` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `prog_langs` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `diagrames`
--

CREATE TABLE `diagrames` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `file_path` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `method_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `issues`
--

CREATE TABLE `issues` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `assigned_to` int(10) UNSIGNED NOT NULL,
  `rel_id` int(10) UNSIGNED NOT NULL,
  `status` int(11) NOT NULL,
  `desc` text COLLATE utf8_unicode_ci NOT NULL,
  `screenshot` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `managers`
--

CREATE TABLE `managers` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `xp_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mehtodologies`
--

CREATE TABLE `mehtodologies` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `p_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2016_05_15_1_create_users_table', 1),
('2016_05_15_2_create_developers_table', 1),
('2016_05_15_3_create_managers_table', 1),
('2016_05_15_4_create_testers_table', 1),
('2016_05_15_5_create_projects_table', 1),
('2016_05_15_6_create_releases_table', 1),
('2016_05_15_7_create_tasks_table', 1),
('2016_05_15_8_create_mehtodologies_table', 1),
('2016_05_15_91_create_issues_table', 1),
('2016_05_15_92_create_password_resets_table', 1),
('2016_05_15_9_create_diagrames_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `desc` text COLLATE utf8_unicode_ci NOT NULL,
  `dead_line` date NOT NULL,
  `requirements` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `releases` int(11) NOT NULL,
  `manager_id` int(10) UNSIGNED NOT NULL,
  `method_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `releases`
--

CREATE TABLE `releases` (
  `id` int(10) UNSIGNED NOT NULL,
  `desc` text COLLATE utf8_unicode_ci NOT NULL,
  `features` text COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `p_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `desc` text COLLATE utf8_unicode_ci NOT NULL,
  `start_date` datetime NOT NULL,
  `end_date` datetime NOT NULL,
  `status` int(11) NOT NULL,
  `dev_id` int(10) UNSIGNED NOT NULL,
  `rel_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `testers`
--

CREATE TABLE `testers` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `years_xp` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `job_type` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `phone`, `job_type`, `remember_token`, `created_at`, `updated_at`) VALUES
(4, 'Admin', 'a@a.a', '$2y$10$oPJN2CpnhpVjAMRnRQzT.uF4u3GJrkeoa55beO.nyCrEinioJ.enO', '01000717601', 1, 'viU3s2BvonSp49qBbHiUqX3UPL43eFNOn7eTtplNytCHKLIxRwmJtHTjWeZF', '2016-05-10 13:50:06', '2016-05-10 16:35:05'),
(5, 'ProjectManager', 'p@p.p', '$2y$10$IF1HopotzYVVwuzNXTFpB.SyGPHX6mOoefpyGKRpbt3rVLGPwmFDy', '010000000', 2, NULL, '2016-05-10 13:51:14', '2016-05-10 13:51:14'),
(6, 'Developer', 'd@d.d', '$2y$10$9lHVjS8Y/Ja6P8PBUc.y0eDF0OWjutzNB0nyau2zORauLXZpaCQsi', '0100111111', 3, NULL, '2016-05-10 13:52:31', '2016-05-10 13:52:31'),
(7, 'Tester', 't@t.t', '$2y$10$fMblODJZQ7hnDrBh6zk9LekK8FwGkhoGW1DOG2oa5bfKETx7oc3ZO', '011125458', 4, 'VgAISWdrG3EhjuliDwuX4M4c4p6UqgT0xZDC3XVf13DLSDKfSM5ugTb2IZaR', '2016-05-10 13:53:08', '2016-05-10 15:30:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `developers`
--
ALTER TABLE `developers`
  ADD KEY `developers_user_id_foreign` (`user_id`);

--
-- Indexes for table `diagrames`
--
ALTER TABLE `diagrames`
  ADD PRIMARY KEY (`id`),
  ADD KEY `diagrames_method_id_foreign` (`method_id`);

--
-- Indexes for table `issues`
--
ALTER TABLE `issues`
  ADD PRIMARY KEY (`id`),
  ADD KEY `issues_created_by_foreign` (`created_by`),
  ADD KEY `issues_assigned_to_foreign` (`assigned_to`),
  ADD KEY `issues_rel_id_foreign` (`rel_id`);

--
-- Indexes for table `managers`
--
ALTER TABLE `managers`
  ADD KEY `managers_user_id_foreign` (`user_id`);

--
-- Indexes for table `mehtodologies`
--
ALTER TABLE `mehtodologies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mehtodologies_p_id_foreign` (`p_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `projects_manager_id_foreign` (`manager_id`);

--
-- Indexes for table `releases`
--
ALTER TABLE `releases`
  ADD PRIMARY KEY (`id`),
  ADD KEY `releases_p_id_foreign` (`p_id`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tasks_dev_id_foreign` (`dev_id`),
  ADD KEY `tasks_rel_id_foreign` (`rel_id`);

--
-- Indexes for table `testers`
--
ALTER TABLE `testers`
  ADD KEY `testers_user_id_foreign` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_name_unique` (`name`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `diagrames`
--
ALTER TABLE `diagrames`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `issues`
--
ALTER TABLE `issues`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mehtodologies`
--
ALTER TABLE `mehtodologies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `releases`
--
ALTER TABLE `releases`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `developers`
--
ALTER TABLE `developers`
  ADD CONSTRAINT `developers_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `diagrames`
--
ALTER TABLE `diagrames`
  ADD CONSTRAINT `diagrames_method_id_foreign` FOREIGN KEY (`method_id`) REFERENCES `mehtodologies` (`id`);

--
-- Constraints for table `issues`
--
ALTER TABLE `issues`
  ADD CONSTRAINT `issues_assigned_to_foreign` FOREIGN KEY (`assigned_to`) REFERENCES `developers` (`user_id`),
  ADD CONSTRAINT `issues_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `issues_rel_id_foreign` FOREIGN KEY (`rel_id`) REFERENCES `releases` (`id`);

--
-- Constraints for table `managers`
--
ALTER TABLE `managers`
  ADD CONSTRAINT `managers_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `mehtodologies`
--
ALTER TABLE `mehtodologies`
  ADD CONSTRAINT `mehtodologies_p_id_foreign` FOREIGN KEY (`p_id`) REFERENCES `projects` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `projects`
--
ALTER TABLE `projects`
  ADD CONSTRAINT `projects_manager_id_foreign` FOREIGN KEY (`manager_id`) REFERENCES `managers` (`user_id`);

--
-- Constraints for table `releases`
--
ALTER TABLE `releases`
  ADD CONSTRAINT `releases_p_id_foreign` FOREIGN KEY (`p_id`) REFERENCES `projects` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tasks`
--
ALTER TABLE `tasks`
  ADD CONSTRAINT `tasks_dev_id_foreign` FOREIGN KEY (`dev_id`) REFERENCES `developers` (`user_id`),
  ADD CONSTRAINT `tasks_rel_id_foreign` FOREIGN KEY (`rel_id`) REFERENCES `releases` (`id`);

--
-- Constraints for table `testers`
--
ALTER TABLE `testers`
  ADD CONSTRAINT `testers_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
