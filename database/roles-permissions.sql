-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307:3307
-- Generation Time: Jul 08, 2023 at 08:22 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `roles-permissions`
--

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
-- Table structure for table `frontusers`
--

CREATE TABLE `frontusers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `frontusers`
--

INSERT INTO `frontusers` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Test', 'test@gmail.com', NULL, '$2y$10$MgpSIbD45vl5ZmU2X/pdn.R/hIADAe5/ItrNBRw.m4tvFte6/a8Su', NULL, '2023-07-07 10:53:27', '2023-07-07 10:53:27');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `publish` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `title`, `description`, `user_id`, `publish`, `created_at`, `updated_at`) VALUES
(3, 'This is Test Job', 'This is test job description ff', 1, 1, '2023-07-07 12:31:30', '2023-07-08 12:10:05');

-- --------------------------------------------------------

--
-- Table structure for table `mailsettings`
--

CREATE TABLE `mailsettings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mail_transport` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail_host` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail_port` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail_username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail_encryption` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail_from` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mailsettings`
--

INSERT INTO `mailsettings` (`id`, `mail_transport`, `mail_host`, `mail_port`, `mail_username`, `mail_password`, `mail_encryption`, `mail_from`, `created_at`, `updated_at`) VALUES
(1, 'smtp', 'smtp.mailtrap.io', '2525', 'ed3caa94a48fd1', 'baf29d92154c72', 'tls', 'ajayyadavexpo@gmail.com', '2023-07-07 10:48:48', '2023-07-07 10:48:48');

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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_10_24_052122_create_frontusers_table', 1),
(6, '2021_10_24_055150_create_permission_tables', 1),
(7, '2021_10_31_101342_create_posts_table', 1),
(8, '2022_05_01_060321_add_profile_to_users_table', 1),
(9, '2022_05_19_122208_create_mailsettings_table', 1),
(10, '2023_07_07_165729_create_jobs_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(2, 'App\\Models\\User', 2),
(2, 'App\\Models\\User', 3),
(2, 'App\\Models\\User', 4);

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Post access', 'web', '2023-07-07 10:48:23', '2023-07-07 10:48:23'),
(2, 'Post edit', 'web', '2023-07-07 10:48:24', '2023-07-07 10:48:24'),
(3, 'Post create', 'web', '2023-07-07 10:48:24', '2023-07-07 10:48:24'),
(4, 'Post delete', 'web', '2023-07-07 10:48:24', '2023-07-07 10:48:24'),
(5, 'Role access', 'web', '2023-07-07 10:48:24', '2023-07-07 10:48:24'),
(6, 'Role edit', 'web', '2023-07-07 10:48:24', '2023-07-07 10:48:24'),
(7, 'Role create', 'web', '2023-07-07 10:48:24', '2023-07-07 10:48:24'),
(8, 'Role delete', 'web', '2023-07-07 10:48:25', '2023-07-07 10:48:25'),
(9, 'User access', 'web', '2023-07-07 10:48:25', '2023-07-07 10:48:25'),
(10, 'User edit', 'web', '2023-07-07 10:48:25', '2023-07-07 10:48:25'),
(11, 'User create', 'web', '2023-07-07 10:48:25', '2023-07-07 10:48:25'),
(12, 'User delete', 'web', '2023-07-07 10:48:25', '2023-07-07 10:48:25'),
(13, 'Permission access', 'web', '2023-07-07 10:48:25', '2023-07-07 10:48:25'),
(14, 'Permission edit', 'web', '2023-07-07 10:48:26', '2023-07-07 10:48:26'),
(15, 'Permission create', 'web', '2023-07-07 10:48:26', '2023-07-07 10:48:26'),
(16, 'Permission delete', 'web', '2023-07-07 10:48:26', '2023-07-07 10:48:26'),
(17, 'Mail access', 'web', '2023-07-07 10:48:26', '2023-07-07 10:48:26'),
(18, 'Mail edit', 'web', '2023-07-07 10:48:26', '2023-07-07 10:48:26'),
(19, 'Job create', 'web', '2023-07-07 11:19:19', '2023-07-07 11:20:52'),
(20, 'Job edit', 'web', '2023-07-07 11:19:28', '2023-07-07 11:20:40'),
(21, 'Job delete', 'web', '2023-07-07 11:19:39', '2023-07-07 11:20:28'),
(23, 'Job access', 'web', '2023-07-07 11:43:03', '2023-07-07 11:43:03'),
(24, 'Report access', 'web', '2023-07-08 12:21:50', '2023-07-08 12:21:50'),
(25, 'Report edit', 'web', '2023-07-08 12:22:04', '2023-07-08 12:22:04'),
(26, 'Report delete', 'web', '2023-07-08 12:22:19', '2023-07-08 12:22:19');

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
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `publish` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `description`, `user_id`, `publish`, `created_at`, `updated_at`) VALUES
(1, 'Molestias nobis quia aliquam possimus. Libero voluptas alias cupiditate.', 'Placeat consequatur minima consequatur quam. Tempora error possimus nostrum sed quasi. Ea porro voluptatem officiis. Doloribus facilis odio eligendi voluptatem et autem ut.', 2, 1, '2023-07-07 10:48:30', '2023-07-07 10:51:14'),
(2, 'Nostrum at ut quasi minima. Nulla aperiam nihil eius mollitia et nam. Labore qui eos sunt nisi repellendus. Delectus architecto harum ullam aut eum.', 'Ipsum assumenda doloribus deserunt maxime. Sint cum saepe cum quis. Nam illo inventore autem alias. Eveniet eius dolorem voluptate possimus qui quis corrupti. Praesentium natus consequatur mollitia.', 2, 1, '2023-07-07 10:48:30', '2023-07-07 10:48:30'),
(3, 'Omnis praesentium non ut eum facere aspernatur. Itaque ut quam aliquam consectetur assumenda omnis in.', 'Voluptatum consequatur sunt ut quibusdam. Asperiores laudantium perferendis cum explicabo odio possimus quia. Aperiam et sunt non deserunt.', 1, 1, '2023-07-07 10:48:30', '2023-07-07 10:48:30'),
(4, 'Modi in tenetur aut vero qui. Minima possimus eveniet vitae a debitis non molestias error.', 'Ipsam tenetur quidem possimus repellat nobis rem minus. Totam quod vero voluptatibus ut voluptatem. Ea est molestias ducimus culpa corrupti. Veniam voluptatibus quam voluptate dicta quod voluptatem est.', 1, 0, '2023-07-07 10:48:30', '2023-07-07 10:48:30'),
(5, 'Itaque doloremque et perspiciatis quas. Eum sunt iste repellat omnis sed. Et ratione ab occaecati deleniti cupiditate quam illo. Consequatur omnis amet voluptas.', 'Sint quia veritatis nesciunt iusto. Non omnis neque magni velit maxime veritatis.', 2, 0, '2023-07-07 10:48:31', '2023-07-07 10:48:31'),
(6, 'Consequuntur voluptatem beatae molestiae in modi illum. Similique rerum officiis aut distinctio.', 'Esse est expedita porro beatae velit quas nisi. Nisi cum consequatur nostrum velit molestiae quo vitae. Quod officiis sapiente possimus. Labore numquam cumque atque inventore.', 2, 0, '2023-07-07 10:48:31', '2023-07-07 10:48:31'),
(7, 'Quisquam quo aut enim velit voluptas fuga eligendi. Sapiente qui delectus ut id mollitia. Est fuga quae sint totam sit. Nihil minus optio harum autem. In ut ut distinctio saepe consequatur.', 'Odio quidem nobis necessitatibus error et. Quia explicabo assumenda officia consequatur. Voluptas ut laboriosam qui natus quia quia quidem. Vel beatae quasi facere aut id neque soluta eaque. Et natus cum quisquam veniam dolores optio.', 2, 0, '2023-07-07 10:48:31', '2023-07-07 10:48:31'),
(8, 'Accusantium quia sint aut. Dolores debitis accusantium sed. Veniam sed debitis id et numquam. Atque nisi corrupti et quaerat. Similique ea ipsam quia.', 'Qui provident voluptatem ad. Nesciunt suscipit cumque molestiae unde. Totam consequatur voluptas repellat et quaerat fugiat. Est asperiores vel doloremque voluptates ipsam alias est.', 1, 1, '2023-07-07 10:48:31', '2023-07-07 10:48:31'),
(9, 'Nemo perferendis minus expedita velit. Veritatis ut velit cum incidunt voluptatum esse voluptatibus iure. Et itaque corporis iusto magnam.', 'Quia maxime blanditiis aut non. Iure ex molestiae quod. Labore hic id porro reprehenderit et.', 2, 1, '2023-07-07 10:48:31', '2023-07-07 10:48:31'),
(10, 'Et temporibus ipsa fuga et. Qui atque sunt tenetur iusto et. Vero maiores voluptatem voluptas neque dolorem. Consequuntur sint veniam laboriosam quo.', 'Veritatis ex enim deserunt quasi. Qui corporis delectus qui sunt eum. Voluptate vitae dolores aperiam non deleniti. Qui officia non ex pariatur natus.', 1, 0, '2023-07-07 10:48:31', '2023-07-07 10:48:31'),
(11, 'Nesciunt maiores reiciendis eum nisi cum. Molestiae eum culpa officiis nostrum veritatis architecto eveniet. Omnis totam animi ullam odio velit et.', 'Suscipit debitis blanditiis eveniet vero dolorem esse et reprehenderit. Ut magni enim explicabo voluptas corporis. Labore est eum est atque.', 1, 0, '2023-07-07 10:48:32', '2023-07-07 10:48:32'),
(12, 'Labore sunt et nihil placeat porro. Nesciunt cum dolor sunt ipsa voluptatem tempore. Aspernatur et velit excepturi id eum cum.', 'Ut voluptas illum tempora. Possimus et rerum qui fugit atque doloremque rerum. Quia laborum rerum doloremque et temporibus quam repellat.', 1, 0, '2023-07-07 10:48:32', '2023-07-07 10:48:32'),
(13, 'Inventore earum delectus sint dignissimos dolorem veritatis. Quae sit consequatur amet aliquid quisquam ratione sunt. In praesentium repudiandae neque laudantium in.', 'Voluptatem illo suscipit et qui. Qui dolor totam optio. Enim a earum voluptates nemo et amet eos. Deserunt beatae voluptatibus ducimus quia quas voluptas voluptas iure.', 1, 1, '2023-07-07 10:48:32', '2023-07-07 10:48:32'),
(14, 'Hic est quae neque rerum aut iure. Inventore ipsa sapiente sed molestiae mollitia. Commodi nemo repellat harum quia id molestiae. Minima et reiciendis est iste.', 'Molestiae qui consequatur esse totam doloribus praesentium. Aliquam nulla ut incidunt et. Deserunt tenetur aut aut dolor animi veniam. Quos aut voluptatem dicta voluptas perferendis facilis sunt necessitatibus.', 2, 0, '2023-07-07 10:48:32', '2023-07-07 10:48:32'),
(15, 'Ipsum quo ut provident quasi. A perferendis aut tempore harum sed ut qui. Rerum voluptatem et eius iusto.', 'Ut sed reprehenderit accusantium consequatur ex ut. Aliquam ad magnam quis aut quibusdam quis sit sint. Laboriosam maiores est quae dicta consequatur aut. Quaerat animi est odit asperiores.', 1, 1, '2023-07-07 10:48:32', '2023-07-07 10:48:32'),
(16, 'Expedita veniam incidunt placeat inventore. Aut architecto distinctio et mollitia consequatur iure. Ut voluptatem provident consectetur fugiat quo rerum. Dignissimos perspiciatis aut non.', 'Quos officiis alias debitis velit. Qui sunt laboriosam omnis eos rerum. Repellat quo temporibus facere possimus tenetur aut dolor. Velit ipsam qui sit eveniet totam quod aliquam ab. Dolor hic culpa vel voluptates.', 1, 0, '2023-07-07 10:48:32', '2023-07-07 10:48:32'),
(17, 'Laborum tempora dolor dolores perspiciatis atque eos. Eum doloremque et rerum saepe aut. Animi laborum architecto est aut. Aliquam repellat totam commodi et.', 'Quas nisi rerum ab magnam veniam animi. Voluptatibus ut ea aut. Vel doloremque et rem reiciendis explicabo officia voluptatem non.', 2, 1, '2023-07-07 10:48:33', '2023-07-07 10:48:33'),
(18, 'Et ut quibusdam dignissimos ducimus. Quia et et qui sed. Occaecati non quia et voluptas. Ea debitis illo quod laboriosam facere magnam omnis.', 'Ab dolorum molestias tempora hic. Sunt quasi nemo omnis laborum dignissimos expedita. Dolorem deserunt sunt enim est voluptatem dolorem vitae. Molestias et illum similique.', 1, 0, '2023-07-07 10:48:33', '2023-07-07 10:48:33'),
(19, 'Dolorem neque necessitatibus nihil. Consequuntur sit est occaecati eius. Atque rerum quia est voluptatibus.', 'Quaerat iste ut vero dolorum. Eum aut accusantium repellendus voluptas harum dolorem fugiat labore. Laudantium ipsum porro incidunt odio.', 1, 1, '2023-07-07 10:48:33', '2023-07-07 10:48:33'),
(20, 'Eius praesentium aliquam deleniti voluptas dicta eius. Quo nostrum eum repellendus iste rerum. Et necessitatibus ex eius ut rem unde numquam. Voluptatem amet eveniet quia sed.', 'Omnis nostrum eum ipsa sunt mollitia saepe. Officiis dicta itaque consequatur architecto qui. Dolor mollitia itaque expedita nemo. Voluptas cumque aliquam alias aut iste.', 1, 1, '2023-07-07 10:48:33', '2023-07-07 10:48:33'),
(21, 'Rerum modi exercitationem repudiandae quam voluptatem tenetur. Similique minima optio numquam autem dolorum. Dicta nulla rerum et rerum quo. Cumque facilis modi totam maxime voluptatem reprehenderit.', 'Voluptatem expedita incidunt ea necessitatibus. Minus sequi quia ex in. Incidunt excepturi corrupti ipsam iste quibusdam dicta ut qui. Aut sequi quos alias vero et quasi.', 2, 0, '2023-07-07 10:48:33', '2023-07-07 10:48:33'),
(22, 'Mollitia dolores laboriosam ipsa laboriosam odio adipisci. Alias quibusdam ea omnis voluptas amet eos porro. Sunt quae et veniam vitae dolorem.', 'Nam ea fugiat animi aut rerum. Pariatur dolor facere quaerat error quasi autem cupiditate qui. Ut quos qui dolorum error velit vitae voluptatem. Beatae doloribus officia et voluptatibus fugit voluptatem.', 1, 1, '2023-07-07 10:48:34', '2023-07-07 10:48:34'),
(23, 'Iure rerum omnis est tempore ut. Soluta dolore ut voluptas. Laboriosam consequuntur esse nihil. Beatae rerum enim aut qui qui et. Illo quia voluptas rerum quaerat. Omnis laboriosam porro ut a in.', 'Dolores sequi eos et laudantium. Officiis dolorum aliquam sunt aliquam corrupti ipsa expedita libero. Soluta fugit maxime nam unde tempore repudiandae debitis.', 1, 0, '2023-07-07 10:48:34', '2023-07-07 10:48:34'),
(24, 'Maxime ducimus tempore doloremque amet quam. Voluptas veniam nesciunt unde. Qui ea quos et doloremque illo distinctio voluptas eaque.', 'Doloribus blanditiis nobis quia laboriosam. Culpa eum quia enim consequatur. Fugit corporis ut qui iure. Et molestias aperiam expedita repudiandae ex sed iusto veritatis. Qui officia sint doloribus ea.', 2, 0, '2023-07-07 10:48:34', '2023-07-07 10:48:34'),
(25, 'In nostrum enim asperiores nam. Ipsam nam ipsa consequatur est. Incidunt vel facilis libero ipsum corporis voluptatem.', 'Earum ex veritatis et. Saepe aut in ducimus corrupti fugit impedit quibusdam. Harum dolor distinctio architecto dignissimos.', 1, 1, '2023-07-07 10:48:34', '2023-07-07 10:48:34'),
(26, 'Magnam fuga est odit quos. Est voluptas aut expedita adipisci quis temporibus. Nemo vitae atque repudiandae voluptates non. Debitis ut sit laborum sint natus facere unde. Eum dicta mollitia qui.', 'Esse ratione ab est dicta. Vitae sapiente delectus quae est commodi alias. Est quo maiores magnam magni.', 1, 0, '2023-07-07 10:48:34', '2023-07-07 10:48:34'),
(27, 'Eaque aut iure veniam facere eius magnam aut doloribus. Nemo itaque exercitationem quas eveniet rerum voluptate ut.', 'Et suscipit quibusdam assumenda eos quo voluptatibus perferendis. Illo et est minus voluptatem labore blanditiis. Ut rem quasi eaque delectus. Tempora porro quo voluptatem odit occaecati.', 1, 1, '2023-07-07 10:48:35', '2023-07-07 10:48:35'),
(28, 'Incidunt dolorum et omnis distinctio alias quisquam voluptatem sint. Vel quos ut fugit officia quasi culpa omnis voluptate. Ipsam maiores aut amet rem totam consequatur.', 'Unde sunt ad dolor aliquam ut dolorem quia. Animi a excepturi exercitationem distinctio incidunt reiciendis. Molestiae a expedita quas perspiciatis et dicta ipsam. Mollitia laudantium aspernatur omnis ex adipisci.', 1, 1, '2023-07-07 10:48:35', '2023-07-07 10:48:35'),
(29, 'Fugiat fuga impedit et sint aut sunt. Nemo distinctio consequatur ut libero dolore fuga quo illum. Dolor odit deleniti qui. Quidem consequatur assumenda dignissimos fugit rerum tenetur ipsum.', 'Quod alias ut nesciunt sapiente repudiandae minima. Ut non autem nesciunt ad quod. Tempore nemo facilis repudiandae doloribus reprehenderit iure odit. Est quo harum officiis veniam.', 1, 0, '2023-07-07 10:48:35', '2023-07-07 10:48:35'),
(30, 'Ullam libero est et corrupti dolorum et. Voluptatem est reprehenderit nulla sapiente corrupti in error. Perferendis omnis id quia. Modi aliquid qui architecto et.', 'Tempore est et odit. Excepturi error quod qui provident. Est cumque sint nemo optio ea at suscipit rem.', 1, 1, '2023-07-07 10:48:35', '2023-07-07 10:48:35'),
(31, 'Voluptatem sint rerum dolorem in a quos sit. Enim id qui rerum cum cupiditate ab. Qui est ex illo est ducimus.', 'Quis asperiores magni maiores ratione et odio exercitationem. Explicabo ex minima vel eius. Fugit vitae debitis beatae ipsam laboriosam tempora. Provident at nisi eaque. Qui a id rerum in non voluptates.', 1, 1, '2023-07-07 10:48:35', '2023-07-07 10:48:35'),
(32, 'Rerum aspernatur ipsa quam omnis. Vero sint unde sed dolor dignissimos ut sit. Quas explicabo explicabo corrupti similique dolores molestiae ut distinctio. Officia ea eligendi quidem quis.', 'Modi voluptate magni voluptates molestiae rerum maxime possimus. Ut omnis et ipsam enim quas porro adipisci. Similique facere sit qui autem commodi voluptas. Sit qui quia minima.', 1, 1, '2023-07-07 10:48:35', '2023-07-07 10:48:35'),
(33, 'Ipsam voluptas et voluptas qui. Eos rem delectus eos debitis. Facere eveniet similique ut minima tempora et.', 'Fuga consequatur exercitationem soluta quia consequuntur. Quisquam quia sequi nesciunt veritatis accusantium laboriosam error. Dolorum est nisi fugiat qui.', 1, 0, '2023-07-07 10:48:36', '2023-07-07 10:48:36'),
(34, 'Repellendus et cum saepe sed quia. Repellendus aperiam temporibus omnis commodi ducimus. Non non eaque aliquam non magni. Totam distinctio nostrum sed natus.', 'Sint dolor nam explicabo consequuntur consequatur rerum. Delectus odit ut ullam. Sit ea quia delectus autem blanditiis a.', 2, 0, '2023-07-07 10:48:36', '2023-07-07 10:48:36'),
(35, 'Rerum ut ad error inventore vero error. Nostrum laudantium blanditiis blanditiis qui repudiandae. Reiciendis commodi eligendi tempora temporibus eum autem velit.', 'Harum laborum eos sit sit eum ad. Mollitia eos ipsam molestias eum ea voluptatem. Qui et libero possimus laudantium ea sit.', 2, 0, '2023-07-07 10:48:36', '2023-07-07 10:48:36'),
(36, 'Non odit id sint nisi quaerat. Itaque repellat quae omnis voluptas possimus et. Quis corrupti quis incidunt sapiente.', 'Nobis commodi maiores facere assumenda iure. Hic delectus autem sapiente deleniti. Accusantium adipisci eos nisi est maxime rerum itaque.', 1, 0, '2023-07-07 10:48:36', '2023-07-07 10:48:36'),
(37, 'Repudiandae aut fuga molestias quo iusto minima. Odio vero neque aut et corrupti doloremque occaecati. Quo est ut reiciendis. Soluta eum deserunt suscipit nulla enim aperiam.', 'Nesciunt corrupti hic autem eum. Et quaerat amet aut aut. Delectus dignissimos vel dolorum blanditiis quia similique suscipit.', 1, 0, '2023-07-07 10:48:36', '2023-07-07 10:48:36'),
(38, 'Qui quis illo sit illo voluptatem voluptatem. Iure iste sit aut cupiditate non quam. Reprehenderit repudiandae unde voluptas vel architecto.', 'Voluptatibus quia cumque laborum nihil. Sed quasi est ut quam dolorum accusantium.', 1, 0, '2023-07-07 10:48:36', '2023-07-07 10:48:36'),
(39, 'Earum vero ipsa commodi architecto amet architecto et. Nemo assumenda eos provident et et velit voluptas. Facere possimus molestiae quam voluptatum et. Iure aperiam quo deserunt nihil voluptatum.', 'Qui est quam voluptas consequatur vel. Voluptas nam consequuntur sit at aspernatur quia. Corporis quam eum et et. Adipisci voluptatem et sunt et harum ab. Rem nisi id molestias sed vel.', 1, 0, '2023-07-07 10:48:37', '2023-07-07 10:48:37'),
(40, 'Iste aut inventore iste non aut possimus. Hic rerum consequatur aliquid nostrum et. Quod id et ratione cumque excepturi deserunt. Quisquam aut cum eveniet.', 'Assumenda ut eveniet maxime velit. Eligendi qui at aut omnis et vel quia. Enim saepe et vero quaerat et.', 1, 0, '2023-07-07 10:48:37', '2023-07-07 10:48:37'),
(41, 'Quis repudiandae aut rerum. Doloremque cum quisquam eos vel amet et quae. Aliquid necessitatibus excepturi sint alias sit non a sit.', 'Labore rerum repellendus aliquid odio illo sed recusandae. Nihil ratione necessitatibus at quisquam. Aspernatur ea est qui eius iusto est. Pariatur quia quasi rerum et qui doloremque molestiae.', 2, 0, '2023-07-07 10:48:37', '2023-07-07 10:48:37'),
(42, 'Facere nihil et suscipit sed voluptate id. Velit enim accusamus aut porro id. Hic doloribus amet ut qui aut corporis voluptate. Error eveniet repellat quasi error sed.', 'Saepe incidunt cumque rem veritatis sed iusto qui. Optio excepturi et natus cupiditate accusantium blanditiis voluptas. Sunt inventore laudantium dicta eos dicta ex velit. Recusandae est distinctio sit qui sint.', 1, 0, '2023-07-07 10:48:37', '2023-07-07 10:48:37'),
(43, 'Omnis ut dolor atque. Optio voluptatibus ut non quibusdam quia. Molestiae eligendi natus esse saepe sequi. Animi suscipit facilis laudantium enim accusantium iusto eum.', 'Nisi similique adipisci nostrum nisi quod voluptas. Porro sed qui iste rerum. Debitis ducimus officia aut amet eligendi accusantium sunt veritatis. Nihil sunt architecto consequatur tempore.', 1, 1, '2023-07-07 10:48:37', '2023-07-07 10:48:37'),
(44, 'Ea nam sunt ut ut quibusdam consequuntur aspernatur. Consequatur aliquam dolorum assumenda perspiciatis aperiam sint. Animi qui ipsum accusamus similique. Omnis cum at aut voluptatem a.', 'Sunt voluptatem vitae sapiente facilis. Dolor molestias at totam quia aut aliquid.', 2, 0, '2023-07-07 10:48:37', '2023-07-07 10:48:37'),
(45, 'Quibusdam est beatae quo voluptas alias. Numquam rem et perspiciatis reprehenderit beatae aut est. Ipsa quisquam ipsa nihil explicabo quisquam nostrum. Voluptas et quaerat qui maiores quia.', 'Amet dolorem blanditiis veniam itaque dicta deleniti. Doloribus et libero asperiores dolorem fugit veniam repudiandae. Reprehenderit ea quia soluta architecto autem velit alias. Suscipit quis sunt qui laboriosam velit doloribus incidunt.', 2, 1, '2023-07-07 10:48:37', '2023-07-07 10:48:37'),
(46, 'Sit officia dolor exercitationem qui. Earum dolores ab vitae quod praesentium nostrum nostrum. Tempore nostrum vel incidunt cumque.', 'Voluptas optio et sed neque eligendi laboriosam. Et at illum et. Rerum dolorem inventore voluptatem fugit magnam ut inventore. Necessitatibus excepturi illum similique consectetur id sed.', 2, 1, '2023-07-07 10:48:38', '2023-07-07 10:48:38'),
(47, 'Magnam ut delectus magnam et qui eum. Facilis omnis voluptate iusto consequatur incidunt vitae. Et molestias quo voluptates quibusdam nesciunt vitae.', 'Est illum hic officiis minus dicta et. Voluptates ullam repellendus et necessitatibus. Modi dolor impedit non doloremque veritatis omnis sunt.', 1, 1, '2023-07-07 10:48:38', '2023-07-07 10:48:38'),
(48, 'Error ad rerum ipsam excepturi fugiat magnam. Accusamus labore nisi voluptatum porro minus. Asperiores cumque qui perspiciatis atque corporis qui sit.', 'Cum quisquam voluptatibus culpa non. Laboriosam est aliquid quis est delectus sunt. Ipsa sunt suscipit nam quod. Sint omnis velit esse.', 1, 1, '2023-07-07 10:48:38', '2023-07-07 10:48:38'),
(49, 'Nostrum sapiente beatae sapiente illo inventore consequuntur rerum sequi. Non atque dolorum expedita distinctio omnis recusandae enim velit. Aspernatur harum et magnam minus pariatur sunt illo.', 'Quae quia fuga explicabo vitae saepe rerum. Dolores repellendus est non quos iure et.', 2, 1, '2023-07-07 10:48:38', '2023-07-07 10:48:38'),
(50, 'Cupiditate distinctio minus dolorem similique ducimus suscipit. Omnis quia provident debitis itaque distinctio. Quae fuga consequatur similique cupiditate possimus recusandae illo eligendi.', 'Voluptate dolores corrupti incidunt fugit aliquam. Sequi laborum soluta quaerat totam rerum facilis est provident. Incidunt molestias neque qui possimus impedit placeat. Sed fugit omnis officia amet qui. Sunt ea omnis possimus nulla.', 1, 0, '2023-07-07 10:48:39', '2023-07-07 10:48:39'),
(51, 'Ab voluptate sequi atque. Et quia eos iure natus. Neque tempore enim fugiat rem qui corporis.', 'Ducimus dolores cum voluptate doloribus et fugiat. Beatae aut quam minima sed quibusdam possimus. Dolorum asperiores eligendi laboriosam est iure velit.', 2, 0, '2023-07-07 10:48:39', '2023-07-07 10:48:39'),
(52, 'Beatae quae et similique quo assumenda consequuntur illum. Culpa et aut sunt accusantium et. Ut ex voluptates eum consequatur nostrum et maxime porro.', 'Qui eligendi et possimus eligendi iste. Accusamus ullam sint ut laudantium molestias sit. Non autem esse ut sunt dignissimos. Iusto nostrum laborum quis tenetur a soluta.', 1, 1, '2023-07-07 10:48:39', '2023-07-07 10:48:39'),
(53, 'Harum et assumenda quia porro explicabo autem id error. Dolore facere provident dolores. Dolorem nam et minus qui sed non.', 'Id harum quidem adipisci quam sit. Autem perferendis culpa repellendus consequuntur eum qui fuga. Molestiae enim in quae sit hic.', 2, 1, '2023-07-07 10:48:39', '2023-07-07 10:48:39'),
(54, 'Sed facere laborum assumenda quia at amet. Quibusdam voluptas deserunt cupiditate ut atque dolor. Consectetur provident fugiat sit incidunt corrupti laboriosam molestiae.', 'Tempora officia pariatur dicta voluptas quia at. Enim unde quos et aut sunt. Corrupti distinctio rerum beatae voluptates aut. Vel repellendus quam nihil est.', 2, 1, '2023-07-07 10:48:39', '2023-07-07 10:48:39'),
(55, 'Adipisci ut explicabo quo et est illo. Voluptas debitis officia quos numquam. Eveniet veniam ut totam ex. Nostrum omnis ex veritatis veritatis.', 'Praesentium error repellendus exercitationem quae placeat placeat nobis cumque. Ipsum voluptates veritatis et est deserunt ea. Qui deleniti fugiat odio. Voluptate in ea consectetur cupiditate.', 1, 0, '2023-07-07 10:48:40', '2023-07-07 10:48:40'),
(56, 'Qui officiis ex autem sunt enim. Non totam quam atque. Fugiat incidunt nobis harum et dolores.', 'Libero officiis quos molestias. Nisi quis ex iste deserunt minima id fugiat ea. Necessitatibus nihil expedita dolore.', 1, 1, '2023-07-07 10:48:40', '2023-07-07 10:48:40'),
(57, 'Temporibus vero natus voluptatum. Quod tempora ipsam maxime id nostrum dolore ut.', 'Est deleniti iure est eaque reprehenderit. Ducimus sequi quibusdam possimus id et. Qui fugit et assumenda molestiae quo qui numquam.', 2, 1, '2023-07-07 10:48:40', '2023-07-07 10:48:40'),
(58, 'Distinctio reprehenderit repellat magni at ducimus est. Et sed ducimus at voluptates consequatur.', 'Ullam illo consequatur fuga sit expedita. Iusto fugiat explicabo non alias iste magnam laboriosam voluptatum. Et accusantium nihil rerum.', 2, 1, '2023-07-07 10:48:40', '2023-07-07 10:48:40'),
(59, 'Repellendus optio aliquam sint delectus quisquam id repellendus. Eaque modi aut et saepe voluptatibus ab vel.', 'Sed quis voluptatem fugiat. Eum quisquam delectus laudantium animi voluptas corrupti facere illo.', 2, 1, '2023-07-07 10:48:40', '2023-07-07 10:48:40'),
(60, 'Adipisci optio omnis saepe quas tempora et quia. Sit autem incidunt animi voluptatem sed. Deleniti aliquid magni rerum id reiciendis consectetur dicta ullam.', 'Perferendis non dolor repudiandae. Doloremque itaque totam aut voluptatem impedit perspiciatis. Reiciendis illo est velit quaerat vel. Veritatis repellendus deserunt soluta ea.', 1, 1, '2023-07-07 10:48:40', '2023-07-07 10:48:40'),
(61, 'Quia sed consequatur eveniet explicabo. Eveniet voluptas provident hic doloribus distinctio. Deleniti velit nihil ea sunt.', 'Omnis autem repudiandae qui est molestiae qui. Eum magni vitae maxime. Quo ipsa dolorem occaecati sit blanditiis sint.', 1, 0, '2023-07-07 10:48:41', '2023-07-07 10:48:41'),
(62, 'Ab quos sed quaerat inventore. Maxime ut quasi velit et et architecto. Sequi iure sint quasi omnis dolore distinctio. Aut voluptatibus enim dolorum aut.', 'Enim alias est quos quisquam commodi. Necessitatibus quo sed non quis quia. Adipisci magni non autem asperiores officia et.', 1, 0, '2023-07-07 10:48:41', '2023-07-07 10:48:41'),
(63, 'Et eligendi dignissimos placeat debitis voluptatem sed. Dicta distinctio vel provident excepturi beatae rem. Est illum et ut est et error et. Et consequatur ea excepturi et nobis culpa et.', 'Veritatis voluptatem culpa tenetur dolorum. Neque consectetur pariatur eius. Eveniet id quam nihil nobis possimus dicta aliquam. Atque dolor veritatis id at consequatur molestias veritatis iste. Aut quo rem molestiae doloribus recusandae iure.', 1, 1, '2023-07-07 10:48:41', '2023-07-07 10:48:41'),
(64, 'Enim iusto repudiandae qui modi quia. Id aliquid odit eaque assumenda. Quas unde vero eos in totam voluptas sit. Consequatur temporibus quaerat iusto minus quod ea.', 'Perferendis autem aut perferendis inventore. Culpa et quis expedita id eius. Ratione eos qui corporis vel necessitatibus tempore unde omnis. Ipsa quos quidem omnis praesentium odit aliquam.', 2, 0, '2023-07-07 10:48:41', '2023-07-07 10:48:41'),
(65, 'Earum alias quae voluptatibus sit maiores. Et porro neque est. Vel consequuntur ipsam ut dicta.', 'Nihil qui soluta voluptatem accusamus dicta blanditiis tempore. Sint enim culpa amet aut qui. Voluptatem maxime corrupti qui reprehenderit et ex omnis quae.', 1, 0, '2023-07-07 10:48:41', '2023-07-07 10:48:41'),
(66, 'Officiis sunt quis ut assumenda possimus. Animi amet tempore nisi voluptas. Molestiae molestiae aut dicta dolor. Corrupti est deleniti veritatis quia non ut. Dolor maiores animi mollitia dolor.', 'Amet corporis ullam atque impedit aut occaecati. Delectus magnam assumenda autem. Et minus est minima quos.', 1, 1, '2023-07-07 10:48:42', '2023-07-07 10:48:42'),
(67, 'Perspiciatis saepe omnis quia beatae. Ut asperiores repellat est fugiat reprehenderit eum quo.', 'Nulla dolores ipsum qui alias fuga doloremque. Quas optio repudiandae facilis. Ut quia deserunt esse eveniet accusamus natus est.', 1, 1, '2023-07-07 10:48:42', '2023-07-07 10:48:42'),
(68, 'Voluptas blanditiis nobis ut ad mollitia voluptatem libero. Et culpa est iure neque quia quia dolor. Doloremque expedita adipisci aut sint porro voluptatem maxime.', 'Ea voluptatibus esse molestiae dignissimos alias labore nam. Doloribus tenetur iure quia asperiores corporis ipsa omnis. Porro facilis eveniet id eaque. Mollitia architecto qui ut expedita incidunt.', 2, 1, '2023-07-07 10:48:42', '2023-07-07 10:48:42'),
(69, 'Ut at magnam accusamus rerum corrupti sint. Similique tenetur sed et aperiam voluptas ullam optio.', 'Et nisi et soluta cumque rem enim. Repudiandae et quo suscipit id earum odio rerum eius.', 2, 0, '2023-07-07 10:48:42', '2023-07-07 10:48:42'),
(70, 'Ea necessitatibus sed expedita voluptates qui ex dolores impedit. Dolorum corrupti nemo et. Dicta libero qui aut occaecati tempora quo occaecati error.', 'Et aut occaecati rerum quas possimus. Aliquid numquam omnis officiis pariatur voluptates neque culpa aut. Adipisci ut maiores possimus iusto dolor incidunt officia. Impedit porro quae ab neque reprehenderit.', 1, 1, '2023-07-07 10:48:42', '2023-07-07 10:48:42'),
(71, 'Aut nesciunt earum dolores tempore. Ullam molestiae quod aperiam at. Necessitatibus aut dolore ducimus omnis. Quaerat nihil sint id accusamus voluptatem.', 'Minus eum officia pariatur occaecati doloribus. Officia consequatur tempore impedit sit natus quia aut. Qui eum fugit dolor necessitatibus. At asperiores molestiae ratione corporis porro.', 2, 0, '2023-07-07 10:48:43', '2023-07-07 10:48:43'),
(72, 'Similique ut dolor non architecto aut ea molestiae voluptatem. Nostrum aut quia molestiae.', 'Velit laboriosam veniam dolorum animi culpa. Laboriosam dolorem ut recusandae quasi. Ut eius aliquid adipisci unde.', 2, 0, '2023-07-07 10:48:43', '2023-07-07 10:48:43'),
(73, 'Natus voluptates harum ipsa animi. Repellendus ad delectus dignissimos tempora commodi. Velit aut perspiciatis voluptatem eveniet tempora. Unde aut voluptas dolores magni quia neque sequi beatae.', 'Iusto repellendus vitae molestiae nesciunt qui sapiente ad. Maiores nulla omnis omnis. Ipsa quam aut vitae hic dolore voluptas debitis. Corrupti voluptatem illum sed qui est animi.', 1, 1, '2023-07-07 10:48:43', '2023-07-07 10:48:43'),
(74, 'Et cumque ad qui aut. Ut dolorem velit nihil aut earum. Ut totam hic dignissimos voluptatibus ut consequuntur. Ut soluta error rem nesciunt dicta qui voluptates alias.', 'Eligendi dolor culpa nostrum. Ut et at nam laboriosam voluptate assumenda sed. Id ab quae provident eos eaque quia praesentium veritatis.', 2, 1, '2023-07-07 10:48:43', '2023-07-07 10:48:43'),
(75, 'Delectus aliquid et autem veniam. Sit rerum sed illum quod. Architecto laudantium consequatur magni doloribus quia. Ad omnis quia tempore enim expedita ducimus qui voluptatum.', 'Assumenda dolor vel eos id excepturi magni. Sed dolorum sed quam nemo. Praesentium debitis laudantium ea rerum.', 1, 1, '2023-07-07 10:48:43', '2023-07-07 10:48:43'),
(76, 'Sint maiores sed distinctio eum tempora in. Quia aut omnis omnis cupiditate quisquam optio et. Tenetur quisquam labore quam eligendi totam.', 'Fuga cumque neque et ipsa quam. Est minima quae debitis ut. Labore maiores molestiae rerum. Eum neque ut laborum quo doloribus rem et.', 2, 1, '2023-07-07 10:48:43', '2023-07-07 10:48:43'),
(77, 'Eius ut ad nostrum dolor dolor maiores natus. Dolore mollitia at dolore velit exercitationem. Quas necessitatibus et non quidem aut.', 'Alias voluptatem corporis sunt doloremque veniam. Numquam nihil soluta occaecati vero consequatur sed. Ipsa numquam doloremque et dolorem officia libero quia. Mollitia optio sed amet sint. Distinctio ratione modi possimus error voluptates.', 2, 0, '2023-07-07 10:48:44', '2023-07-07 10:48:44'),
(78, 'Doloremque quis id dolor perspiciatis qui. Atque pariatur consequuntur ut ut distinctio quisquam. Distinctio aut voluptate alias ut facilis qui. Non labore eum dolorem iste suscipit est fuga.', 'Aut laboriosam ab incidunt explicabo culpa doloribus. Et ut totam est sint inventore quas provident. Ipsa non sint nihil hic in dolore.', 1, 0, '2023-07-07 10:48:44', '2023-07-07 10:48:44'),
(79, 'Et vitae minus et. Et nostrum sint ea eligendi velit recusandae. In cupiditate vel velit reprehenderit eos. Doloremque maxime maiores sequi autem et commodi et.', 'Dolore dolores cum amet. Est totam qui nesciunt ipsam et odit sit. Ipsa atque consectetur perferendis dolor. Dicta tempore quidem eum est maxime necessitatibus.', 2, 1, '2023-07-07 10:48:44', '2023-07-07 10:48:44'),
(80, 'Aut temporibus dolorem fugiat. Facilis ratione consequatur dolorem qui ab. Voluptas dolorem harum voluptas. Architecto est itaque hic quidem non suscipit.', 'Sed vel nobis qui eum. Eligendi quia illo nihil rerum aut quasi et. Repellat labore esse architecto sit ut. Dolorem accusantium eius minus quo. Eum eius eos dicta.', 1, 1, '2023-07-07 10:48:44', '2023-07-07 10:48:44'),
(81, 'Fugiat ut est ad soluta ut quam harum. Sint quidem quis quo. Voluptatem et quo corporis autem. Et omnis eos et doloremque ut assumenda unde.', 'Praesentium maiores ut adipisci repudiandae. Recusandae excepturi doloribus sit ea sint vitae aperiam. Vel ut natus qui aut quibusdam voluptas sequi consequatur.', 1, 1, '2023-07-07 10:48:44', '2023-07-07 10:48:44'),
(82, 'Porro quis atque sed sapiente. Autem quisquam voluptas adipisci nobis sit. Id ut minus sed commodi. Doloribus molestias aut optio incidunt fugit facere.', 'Velit ut ipsam voluptates sit. Consequatur accusantium quae deleniti architecto. Beatae soluta iure sit eos cum totam. Voluptatem quo nulla dolorem provident.', 2, 1, '2023-07-07 10:48:44', '2023-07-07 10:48:44'),
(83, 'Labore esse velit eos et magnam aspernatur. A labore et beatae totam doloremque ab magnam. Sed deleniti exercitationem quo sint consequatur qui.', 'Accusantium sed qui unde consequatur delectus veniam natus. Est quidem omnis fugiat aliquid. Ducimus occaecati voluptatem recusandae sint ad ducimus.', 1, 0, '2023-07-07 10:48:44', '2023-07-07 10:48:44'),
(84, 'Provident vero facere quia maxime aut. In aliquam id mollitia ipsam. Deleniti saepe suscipit sed est. Aspernatur temporibus quam magni quasi. Tenetur voluptas est laudantium nam totam ut adipisci.', 'Quibusdam et cupiditate tempora sunt quia aliquid ex iure. Ipsa omnis sint provident molestias nostrum. Quidem quia quae porro voluptatem autem omnis.', 2, 1, '2023-07-07 10:48:45', '2023-07-07 10:48:45'),
(85, 'Quidem consequatur non labore rerum qui neque porro. Distinctio tempore sint qui. Repellendus quo eius nihil eos. Quia ut eius eos consequuntur distinctio cumque eius.', 'Fugiat laboriosam officia delectus reprehenderit et. Voluptas id dicta voluptatem veritatis. Facere delectus at molestias blanditiis. Provident porro sint fuga possimus.', 1, 1, '2023-07-07 10:48:45', '2023-07-07 10:48:45'),
(86, 'Fugit velit deserunt beatae maiores voluptate eveniet dolorum aut. Laborum quis repellat ut molestias recusandae iusto quisquam. Et molestiae ea est cum labore aliquid rerum quia.', 'Odit facilis tenetur velit. Qui aut rerum praesentium dolorum et libero quia.', 1, 0, '2023-07-07 10:48:45', '2023-07-07 10:48:45'),
(87, 'Quam debitis magni est facere. Omnis rerum autem quam dolores officiis veniam.', 'Ut distinctio aut a est placeat. Corporis consequatur occaecati id ea voluptatem sint repellat. Voluptatum dolor qui sit autem.', 1, 0, '2023-07-07 10:48:45', '2023-07-07 10:48:45'),
(88, 'Dolores mollitia esse ea perferendis voluptas eum. Vel dolorum velit unde aut magnam facilis. Aliquam dolorem maxime fugiat a est. Ducimus ut tempore et sequi qui optio.', 'Odio rerum fuga quo. Rerum eos aut non hic voluptatem facere. Sapiente assumenda dolorem tempora et maiores explicabo quidem. Distinctio perferendis est non quisquam.', 2, 0, '2023-07-07 10:48:45', '2023-07-07 10:48:45'),
(89, 'Possimus et consequatur illo qui odio et. Ut accusamus doloremque suscipit dolorum debitis eum. Et earum ex et natus libero.', 'Dolores asperiores magnam ut culpa id quod. Dolorem quibusdam consectetur nobis eligendi pariatur suscipit voluptatibus provident. Minima voluptates id laborum nisi est ex.', 2, 0, '2023-07-07 10:48:45', '2023-07-07 10:48:45'),
(90, 'Rerum molestiae ipsa excepturi rem et. Voluptatibus nostrum quisquam qui beatae voluptas molestiae at rerum. Placeat totam doloremque quam delectus.', 'Nihil molestiae distinctio numquam molestias nemo voluptatem. Velit consequatur doloribus omnis atque quos molestiae. Officia magnam ut earum. Ducimus natus est adipisci totam veritatis qui iste. Ipsa atque eligendi perspiciatis qui corporis qui.', 2, 0, '2023-07-07 10:48:46', '2023-07-07 10:48:46'),
(91, 'Aut repudiandae et exercitationem iste illum. Debitis perspiciatis aspernatur soluta quae vel et qui quos.', 'Similique adipisci nemo est voluptas quod. Repellendus eos eaque est deserunt cupiditate omnis omnis. Adipisci veniam eos ut pariatur dolore sit quod. Qui debitis distinctio sed voluptas.', 1, 1, '2023-07-07 10:48:46', '2023-07-07 10:48:46'),
(92, 'Et eos distinctio a maxime dolorem eius est. Necessitatibus maxime voluptatum quia quia. Natus ut eligendi ex amet ut.', 'Eaque enim laborum quis magni porro et. Quod voluptatem velit laboriosam tempora voluptates qui beatae. Aut adipisci et fugiat consequatur. Expedita aut consequatur eum illum.', 1, 0, '2023-07-07 10:48:46', '2023-07-07 10:48:46'),
(93, 'Enim iste ut sunt sit praesentium id. Eius ut deleniti quibusdam nulla quibusdam. Sequi tempore sit autem qui. Qui odit voluptates molestias et nostrum.', 'Dolores itaque enim asperiores quo. Ducimus voluptatem nostrum a minus. Et voluptatem dignissimos ut ea qui expedita dicta.', 1, 1, '2023-07-07 10:48:46', '2023-07-07 10:48:46'),
(94, 'Corrupti a id et sapiente quidem rerum qui. Saepe sint beatae hic cum fugit voluptas. Et magnam maxime iusto consequatur.', 'Beatae laudantium veritatis distinctio pariatur fugit ut molestias. Velit rerum ea ea qui quaerat. Et optio reprehenderit sint quis voluptatem. Excepturi explicabo quasi id quasi.', 1, 1, '2023-07-07 10:48:46', '2023-07-07 10:48:46'),
(95, 'Tempore quae et exercitationem. Rem est aut enim facilis ab. Labore iure doloribus nihil amet deserunt qui.', 'Ullam dolorem explicabo aut velit sint ullam quas nemo. Dignissimos id excepturi sed cum. Voluptas commodi quaerat repellat maxime aut sint.', 1, 1, '2023-07-07 10:48:47', '2023-07-07 10:48:47'),
(96, 'Molestiae iste id illo sunt. Quisquam quia quaerat corporis culpa vel consequatur. Et aut quo aut dolorem. Provident neque quia est omnis repellat quo est.', 'Eius quo quis rerum et vel qui nobis. Voluptas repellendus beatae eaque qui cum. Vitae laborum et tenetur qui itaque asperiores rerum dolore.', 2, 0, '2023-07-07 10:48:47', '2023-07-07 10:48:47'),
(97, 'Voluptas iure et facere facere ad modi rerum accusantium. Beatae est voluptatibus hic totam.', 'Sunt reprehenderit eos iure modi et. Corporis repudiandae sint molestiae tempora quibusdam et.', 1, 1, '2023-07-07 10:48:47', '2023-07-07 10:48:47'),
(98, 'Quisquam ipsam labore aut temporibus rerum. Saepe dolor nulla est ullam corrupti eaque et. Enim voluptatem ipsum ut reprehenderit. Consectetur corrupti ipsam aut excepturi et dolores.', 'Necessitatibus recusandae aspernatur ratione enim qui laboriosam eos. Quod similique minima nam consequuntur impedit nam. Aliquid pariatur magnam aut quia consequuntur. Et aut officia molestiae et nisi ut.', 2, 0, '2023-07-07 10:48:47', '2023-07-07 10:48:47'),
(99, 'Accusantium neque harum unde in atque. Est veniam dolor veniam eaque eum modi. Eum necessitatibus asperiores dolorem fuga quis perferendis sit est. Et et quia suscipit.', 'Ex dolores qui eos in eveniet. Modi consequuntur quo commodi nihil. Hic omnis optio eligendi eius delectus delectus. Ut praesentium assumenda nesciunt qui nulla.', 2, 1, '2023-07-07 10:48:47', '2023-07-07 10:48:47'),
(100, 'Esse ipsam voluptas perspiciatis qui. Ut dolorum in ut quis quo aut. Magni quis voluptate optio corrupti voluptatem minus. Ut doloribus reiciendis repudiandae dolor et nisi ullam.', 'Quod laborum nemo nisi odit voluptatum nulla. Omnis ex ad est sapiente dolore provident voluptate quae. Totam ex sit incidunt ea. Voluptatem sit atque deleniti tempore reiciendis voluptates praesentium omnis. A placeat et alias aut quis commodi natus.', 1, 0, '2023-07-07 10:48:48', '2023-07-07 10:48:48'),
(101, 'Test Post', 'This is test post for', 3, 1, '2023-07-07 10:51:45', '2023-07-07 10:51:45'),
(102, 'Test Job', 'This is Test job', 1, 1, '2023-07-07 11:52:19', '2023-07-07 11:52:19'),
(103, 'Test Post Job', 'This is test description', 1, 1, '2023-07-08 11:45:50', '2023-07-08 11:45:50');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'web', '2023-07-07 10:48:23', '2023-07-07 10:48:23'),
(2, 'writer', 'web', '2023-07-07 10:48:23', '2023-07-07 10:48:23'),
(3, 'Editor', 'web', '2023-07-08 08:59:56', '2023-07-08 08:59:56'),
(4, 'Subscriber', 'web', '2023-07-08 12:39:07', '2023-07-08 12:39:07');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(1, 3),
(1, 4),
(2, 1),
(2, 3),
(3, 1),
(3, 3),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(19, 2),
(20, 1),
(20, 2),
(21, 1),
(21, 2),
(23, 1),
(23, 2),
(23, 4),
(24, 1),
(25, 1),
(26, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `profile`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@admin.com', 'user.avif', NULL, '$2y$10$wxWRo46vbOG5Kx4LHsvrDORyyqxQWN5OEfbiTG9jmTLBhCLFDwEo6', NULL, '2023-07-07 10:48:23', '2023-07-07 10:48:23'),
(2, 'writer', 'writer@writer.com', NULL, NULL, '$2y$10$9cytQDpty4Aj4CHSuTtygeCv9llJThwnrzLan8nCXRCVQ/XRr5wo6', NULL, '2023-07-07 10:48:23', '2023-07-07 10:48:23'),
(3, 'Test User', 'testuser@gmail.com', NULL, NULL, '$2y$10$R2GbYvTXqFebUtWnSeIbYOTF.h71eiUmJWEkkDvMnTYf7I3bYFlc2', NULL, '2023-07-07 10:50:18', '2023-07-07 11:40:45'),
(4, 'Test writer', 'testwriter@gmail.com', NULL, NULL, '$2y$10$s31VlfeW45PT/s5VYU/yBeB4etRGEOPV78SD1NKdCeS2qtgVSxHVW', NULL, '2023-07-08 12:41:58', '2023-07-08 12:41:58');

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
-- Indexes for table `frontusers`
--
ALTER TABLE `frontusers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `frontusers_email_unique` (`email`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_user_id_foreign` (`user_id`);

--
-- Indexes for table `mailsettings`
--
ALTER TABLE `mailsettings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_user_id_foreign` (`user_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `frontusers`
--
ALTER TABLE `frontusers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `mailsettings`
--
ALTER TABLE `mailsettings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jobs`
--
ALTER TABLE `jobs`
  ADD CONSTRAINT `jobs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
