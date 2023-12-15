-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-12-2023 a las 17:52:19
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tomgasco`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_photo` varchar(255) DEFAULT NULL,
  `song_id` bigint(20) UNSIGNED NOT NULL,
  `song_title` varchar(255) NOT NULL,
  `song_price` decimal(8,2) NOT NULL,
  `song_description` text DEFAULT NULL,
  `song_audio` varchar(255) NOT NULL,
  `song_photo` varchar(255) DEFAULT NULL,
  `song_keywords` varchar(255) DEFAULT NULL,
  `song_artist` varchar(255) NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `checkouts`
--

CREATE TABLE `checkouts` (
  `orderId` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `song_ids` varchar(255) DEFAULT NULL,
  `price` decimal(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cruds`
--

CREATE TABLE `cruds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `route` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL DEFAULT 'fas fa-bars',
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `built` tinyint(1) NOT NULL DEFAULT 0,
  `with_acl` tinyint(1) NOT NULL DEFAULT 0,
  `with_policy` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `cruds`
--

INSERT INTO `cruds` (`id`, `name`, `model`, `route`, `icon`, `active`, `built`, `with_acl`, `with_policy`, `created_at`, `updated_at`) VALUES
(3, 'Song', 'App\\Models\\Song', 'song', 'fas fa-music', 1, 1, 1, 1, '2023-12-04 20:25:02', '2023-12-06 02:38:59'),
(4, 'User', 'App\\Models\\User', 'user', 'fa fa-users', 1, 1, 1, 0, '2023-12-04 20:25:17', '2023-12-06 03:57:14'),
(5, 'Customer', 'App\\Models\\Customer', 'customer', 'fa fa-user', 0, 1, 1, 1, '2023-12-06 03:01:12', '2023-12-14 05:03:21'),
(6, 'Newsletter', 'App\\Models\\Newsletter', 'newsletter', 'fa fa-envelope', 0, 1, 1, 0, '2023-12-07 07:58:19', '2023-12-14 08:46:15'),
(9, 'Purchase', 'App\\Models\\Purchase', 'purchase', 'fas fa-dollar-sign', 1, 1, 1, 1, '2023-12-14 05:28:19', '2023-12-14 10:47:18');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `region` varchar(255) NOT NULL,
  `postalCode` varchar(255) NOT NULL,
  `phoneNumber` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `customers`
--

INSERT INTO `customers` (`id`, `name`, `lastName`, `email`, `country`, `region`, `postalCode`, `phoneNumber`, `created_at`, `updated_at`) VALUES
(1, 'MARTIN', 'Kong', 'martin.kong@tecsup.edu.pe', 'Trujillo', 'La Libertad', '13004', '99799999', '2023-12-06 03:53:39', '2023-12-06 04:04:33');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
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
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_12_01_235752_create_songs_table', 1),
(7, '2023_12_01_999999_create_cruds_table_easypanel', 1),
(8, '2023_12_01_999999_create_panel_admins_table_easypanel', 1),
(9, '2023_12_01_999999_create_roles_table', 1),
(10, '2023_12_02_000648_create_customers_table', 1),
(12, '2023_12_07_025515_create_newsletters_table', 2),
(13, '2023_12_12_025955_create_carts_table', 3),
(23, '2023_12_14_073659_create_checkouts_table', 5),
(24, '2023_12_02_002037_create_purchases_table', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `newsletters`
--

CREATE TABLE `newsletters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `newsletters`
--

INSERT INTO `newsletters` (`id`, `email`, `created_at`, `updated_at`) VALUES
(1, 'edwin@edwin4chg.com', '2023-12-07 08:02:56', '2023-12-07 08:02:56');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `panel_admins`
--

CREATE TABLE `panel_admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `is_superuser` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `panel_admins`
--

INSERT INTO `panel_admins` (`id`, `user_id`, `is_superuser`, `created_at`, `updated_at`) VALUES
(7, 1, 1, '2023-12-06 06:02:47', '2023-12-06 06:02:47'),
(8, 6, 0, '2023-12-06 06:03:42', '2023-12-06 06:03:42'),
(9, 7, 0, '2023-12-06 06:03:46', '2023-12-06 06:03:46'),
(10, 8, 0, '2023-12-06 06:03:48', '2023-12-06 06:03:48'),
(11, 10, 0, '2023-12-06 06:05:55', '2023-12-06 06:05:55');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
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
-- Estructura de tabla para la tabla `purchases`
--

CREATE TABLE `purchases` (
  `orderId` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `song_ids` varchar(255) DEFAULT NULL,
  `currency` varchar(255) NOT NULL,
  `mountpayed` decimal(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `purchases`
--

INSERT INTO `purchases` (`orderId`, `user_id`, `song_ids`, `currency`, `mountpayed`, `created_at`, `updated_at`) VALUES
(1, 1, '11,5', 'USD', 20.00, '2023-12-15 20:50:20', '2023-12-15 20:50:20');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `permissions` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `name`, `permissions`, `created_at`, `updated_at`) VALUES
(1, 'super_admin', 'a:1:{s:10:\"fullAccess\";i:1;}', '2023-12-04 20:21:31', '2023-12-04 20:21:31'),
(2, 'Traductor', 'a:1:{s:5:\"admin\";a:1:{s:11:\"translation\";s:1:\"1\";}}', '2023-12-06 05:32:49', '2023-12-06 05:32:49'),
(3, 'Admin', 'a:4:{s:10:\"admin.song\";a:4:{s:4:\"read\";s:1:\"1\";s:6:\"create\";s:1:\"1\";s:6:\"update\";s:1:\"1\";s:6:\"delete\";s:1:\"1\";}s:14:\"admin.customer\";a:1:{s:4:\"read\";s:1:\"1\";}s:10:\"admin.user\";a:1:{s:4:\"read\";s:1:\"1\";}s:14:\"admin.purchase\";a:1:{s:4:\"read\";s:1:\"1\";}}', '2023-12-06 05:35:57', '2023-12-06 05:35:57'),
(4, 'Marketing', 'a:4:{s:14:\"admin.purchase\";a:1:{s:4:\"read\";s:1:\"1\";}s:10:\"admin.song\";a:1:{s:4:\"read\";s:1:\"1\";}s:10:\"admin.user\";a:1:{s:4:\"read\";s:1:\"1\";}s:14:\"admin.customer\";a:1:{s:4:\"read\";s:1:\"1\";}}', '2023-12-06 05:52:47', '2023-12-06 05:52:47'),
(5, 'TomGasco', 'a:1:{s:10:\"fullAccess\";s:1:\"1\";}', '2023-12-06 06:05:10', '2023-12-06 06:05:10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `role_user`
--

CREATE TABLE `role_user` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `role_user`
--

INSERT INTO `role_user` (`role_id`, `user_id`) VALUES
(2, 6),
(3, 7),
(1, 1),
(4, 8),
(5, 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `songs`
--

CREATE TABLE `songs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `description` text DEFAULT NULL,
  `audio` varchar(255) NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `keywords` varchar(255) DEFAULT NULL,
  `artist` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `songs`
--

INSERT INTO `songs` (`id`, `title`, `price`, `description`, `audio`, `photo`, `keywords`, `artist`, `created_at`, `updated_at`) VALUES
(3, 'Yo te extrañaré', 99.00, 'YO TE EXTRAÑARÉ - TERCER CIELO - VIDEO OFICIAL', 'audios/1lVigx4TZmVE507hJ6kcexBzAGIXIMbRVtxgr8wm.mp3', 'photos/J3gPnyFupdKJg8Zp1OGYc9dqrT99MEmkCI5MXGhC.jpg', 'Tercer, cielo, yo te extrañare, trosteee', 'Tercer Cielo', '2023-12-06 03:22:04', '2023-12-07 09:25:37'),
(5, 'Cajamarquina', 5.00, 'Huayno Cajamarquino\n', 'audios/v2FTr2TM4bcEJgrn6jKHAlJV1ylL4DJzljFKwoCE.mp3', 'photos/KFS33OeDbdMskhyFdSVaqFai27aeVBVAIHwrwT2t.jpg', 'Cajamarquina', 'String Karma', '2023-12-06 05:17:10', '2023-12-07 08:57:13'),
(11, 'Motor y Motivo', 15.00, 'Motor y Motivo del Grupo 5 ', 'audios/D0wWdUPom3Fdyz3clyDBRZPFgu4H2tyx2l14xnP3.mp3', 'photos/v7Y6dcEzCsaKkOmnOvEnZnXuOVC7KV4CGVOBLS1p.jpg', 'motor y motivo', 'Grupo 5 ', '2023-12-07 08:22:56', '2023-12-07 09:01:44'),
(12, 'Tu y Yo', 120.00, 'Tu y Yo de Tommy Torres', 'audios/WO5dSnJnNFSfVg5iobT1ba0GqVAwgC6oNexdajiQ.mp3', 'photos/3YXrKccMfWIjyZJskcvbjIsSWhbOwPPYuGsKdxCp.jpg', 'tu, yo, tommy, torres', 'Tommy Torres', '2023-12-07 09:36:00', '2023-12-07 09:36:00'),
(13, 'You and I', 10.00, 'You and I', 'audios/kZ2TJoLhhsIzPiqcxws7AqKBaAKOcVjcFkW73jZy.mp3', 'photos/t7RswBJA8fUYhRiF2mTpeJsWLSfCvW8DDqRivrl2.jpg', 'you, i, song', 'Tommy Torres', '2023-12-08 01:33:00', '2023-12-08 01:33:00'),
(14, 'Como llora', 100.00, 'JuanFran - Como llora', 'audios/h4MBSBfuXEINe88WSiKR8KrH2MP6YUOICa84Cv3h.mp3', 'photos/Z4vMjHa17hBlPlrLPY0zwp1dVQjgPORg8AsRS32C.jpg', 'JuanFran, Como llora,', 'JuanFran', '2023-12-12 05:29:27', '2023-12-12 05:29:27'),
(15, 'Se acabó', 99.00, 'SanLuis, Chino y Nacho - Se Acabó', 'audios/QxZaTI1H13upflKiTt50sWURHONW9lemNxy0c6dK.mp3', 'photos/HZqQ3UTZsjOPDQKOy69uiuOAeM6gzEWuGNdaQsJY.jpg', 'SanLuis, Chino y Nacho, Se Acabó,', 'Chino y Nacho', '2023-12-12 05:31:46', '2023-12-12 05:31:46'),
(16, 'He llorado', 55.00, 'He Llorado (Como Un Niño)', 'audios/icZA7isrjxmlcKUcgJf2We2ENbdAf58iycrK6xNu.mp3', 'photos/D2KrYxDzqy3wGsB4Ith7R5TomWxmvsZaxP697OdM.png', 'Juan Magán, He Llorado, Como Un Niño', 'Juan Magán', '2023-12-12 05:34:09', '2023-12-12 05:34:09'),
(17, 'Créeme', 100.00, 'KAROL G, Maluma - Créeme', 'audios/XcCgiNaxSb7fCZPimXptYTyCeYdV4NRT2zkBetlC.mp3', 'photos/vhBFO8wfLZgegQ4zX3UQZaiMlhVbVLJEnO8fZAhq.jpg', 'maluma, karol, xd', 'KAROL G', '2023-12-12 05:38:13', '2023-12-12 05:42:07'),
(18, 'Ponte bonita', 50.00, 'Mario Hart - Ponte Bonita Ft. Wolfine ', 'audios/gB43fFc4XUTAyvKTD9ExBvqClYN5LiH3DUpzPMbq.mp3', 'photos/OkfprnZGBBpiErv7cHtsKOompYZkBjieBL02K2Eb.jpg', 'Mario Hart, Ponte Bonita, Wolfine ,', 'Mario Hart', '2023-12-12 05:41:39', '2023-12-12 05:41:39'),
(19, 'Titanic - My Heart Will Go On', 100.00, 'Titanic Sub Español', 'audios/HHmCn1N8NTEcHRm22YqnPLrFe48WTUamfibTlERi.mp3', 'photos/nPa0MqJKHTI2sU0UyyHhcJLoL1SRtzmksuunqKDF.jpg', 'My Heart Will Go On, Titanic', 'Titanic', '2023-12-12 05:46:23', '2023-12-12 05:46:23'),
(20, 'Traicionera', 50.00, 'Sebastián Yatra - Traicionera', 'audios/xXK3EVbPxTw3Bez2yYgtwdCQkkF5MlWj1S0Ngmd3.mp3', 'photos/Sjc1ZgtjqCHlj9nZMLYBPb0Q5yD7ETgSpe0KYdiY.jpg', 'Sebastián Yatra, Traicionera', 'Sebastián Yatra', '2023-12-12 05:48:24', '2023-12-12 05:48:24'),
(21, 'Toda la Vida', 10.00, 'Toda ', 'audios/JGXa5Gu6zNyDklCDaSupAQGYze3WC0ZGkEImtVpC.mp3', 'photos/jWy9tUZPHWzCWZIzHBBZIPsOwG7Y0Ba4jaTY6dMR.jpg', 'Toda', 'XXXX', '2023-12-14 22:02:11', '2023-12-14 22:02:11');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `photo`, `created_at`, `updated_at`) VALUES
(1, 'Edwin Chigne', 'edwin4chigne@gmail.com', '$2y$12$NzHQwLWnnjaYLNnS3GEu9.YsaYpOBKhTLddWPNToDWr2vM9xAs8WW', 'photos/q9IaW8AZyozv6U3PHZDP967qobrphdY1B9yfx5Pt.jpg', '2023-12-04 20:20:56', '2023-12-06 05:54:41'),
(6, 'Ulices Quiroz Valdivia', 'ulices.quiroz@tecsup.edu.pe', '$2y$12$zMBWWs1H6nsrYyOhSkDH4.Bdwdeij67FEstuhfgoTwGFsEu6HxVbC', 'photos/wVhRFYZ1vhu9TWE2oBJ9cHw0jj5ltdocsPyK0GwD.jpg', '2023-12-06 05:38:42', '2023-12-06 05:38:42'),
(7, 'Jhordan Sanchez Villegas', 'jhordan.sanchez@tecsup.edu.pe', '$2y$12$FyCcDKXPqthgnkIerT/B.eZ6aFIpTf9r.nO4T8UA8f3lVfmOofyom', 'photos/e2B5DJ4aYNKPsxYVFhygJEobNDdxkSKqTRZ5dm5y.jpg', '2023-12-06 05:50:11', '2023-12-06 05:50:11'),
(8, 'Auria Perez Barrera', 'auria.perez@tecsup.edu.pe', '$2y$12$LxwDNzVwKAKFmabQ.b32puqcoJahZ.U0BlrIzUsz6PJ2MIChUwmKi', 'photos/BErbN8ZbSl5i0pYYdD7yIiYmD1SQOz5bgLBjXwcw.jpg', '2023-12-06 05:54:27', '2023-12-06 05:54:27'),
(10, 'Tom Gasco', 'tom@gasco.com', '$2y$12$AjLgjLebzcVVCSzs7ynD5uXSrPR0phcxCBvpIx0aGnar.0aFC6VSC', 'photos/GzBaIQs76cUX5ICbgYPzy3bCysBiGWIoX2aF5Owl.jpg', '2023-12-06 06:05:42', '2023-12-06 06:05:42'),
(11, 'Jhordan', 'jhordansanchez385@gmail.com', '$2y$12$uQ7b2bWkTf2MvcYcpGJO5eJeOoWBUXYZ83iag.6AkU9Pdhyo.DKO6', NULL, '2023-12-14 00:52:37', '2023-12-14 00:52:37'),
(12, 'Jhordan', 'email0@test.com', '$2y$12$A4V0JQQ3j1JxPs3KDaiNBOWi99Ro3ZwsTkRTWG5gHGVMBGWaI2442', 'photos/19MCgV7m2u0BjinIpODZYcr7lD8A9OG1Mgmsw5Z5.jpg', '2023-12-14 00:54:41', '2023-12-14 00:54:41'),
(13, 'usuario25', 'admin@gmail.com', '$2y$12$t011j/t8QPTQiO80E.84pei5eu6sYlQwaYg7HEoMMmRZ34H1o.eRe', 'photos/DC7DxRhEXhHrgk8jbLmQIynsCOXLpUOH3tNFpGtj.jpg', '2023-12-14 01:05:28', '2023-12-14 01:05:28'),
(14, 'usuario25', 'sanchezlolito435@gail.com', '$2y$12$IKBnJJF.sIDq7CC4qEtzfe.qVAA8qOB7D3sacKnXkWM77zMDcVuAK', NULL, '2023-12-14 01:08:42', '2023-12-14 01:08:42'),
(15, 'Osmer', 'test@gmail.com', '$2y$12$/r4m8HsH.qdvW9jMJkWSweMTO1/LO.5PXDNHJZDYLmW7mFuR7ijHi', 'photos/8y63o6rOXR5iPahZC5xswADgU5xmoxJ7MHZCxwqn.jpg', '2023-12-14 01:43:55', '2023-12-14 01:43:55'),
(16, 'rebeca', 'rebeca.avila@tecsup.edu.pe', '$2y$12$LugoJHZ82ziJ9lxQEYJmrOUIoY61AKym8qX19xFShE.6dS9CmMmva', 'photos/YGXgVMJFWLT5Yig7wzOWe2J7gjGpZQmo6p9iJLbZ.jpg', '2023-12-14 21:18:12', '2023-12-14 21:18:12');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carts_user_id_foreign` (`user_id`),
  ADD KEY `carts_song_id_foreign` (`song_id`);

--
-- Indices de la tabla `checkouts`
--
ALTER TABLE `checkouts`
  ADD PRIMARY KEY (`orderId`),
  ADD KEY `checkouts_user_id_foreign` (`user_id`);

--
-- Indices de la tabla `cruds`
--
ALTER TABLE `cruds`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cruds_name_unique` (`name`),
  ADD UNIQUE KEY `cruds_model_unique` (`model`),
  ADD UNIQUE KEY `cruds_route_unique` (`route`);

--
-- Indices de la tabla `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `newsletters`
--
ALTER TABLE `newsletters`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `panel_admins`
--
ALTER TABLE `panel_admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `panel_admins_user_id_unique` (`user_id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `purchases`
--
ALTER TABLE `purchases`
  ADD PRIMARY KEY (`orderId`),
  ADD KEY `purchases_user_id_foreign` (`user_id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `role_user`
--
ALTER TABLE `role_user`
  ADD KEY `role_user_role_id_index` (`role_id`),
  ADD KEY `role_user_user_id_index` (`user_id`);

--
-- Indices de la tabla `songs`
--
ALTER TABLE `songs`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT de la tabla `checkouts`
--
ALTER TABLE `checkouts`
  MODIFY `orderId` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `cruds`
--
ALTER TABLE `cruds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `newsletters`
--
ALTER TABLE `newsletters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `panel_admins`
--
ALTER TABLE `panel_admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `purchases`
--
ALTER TABLE `purchases`
  MODIFY `orderId` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `songs`
--
ALTER TABLE `songs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_song_id_foreign` FOREIGN KEY (`song_id`) REFERENCES `songs` (`id`),
  ADD CONSTRAINT `carts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `checkouts`
--
ALTER TABLE `checkouts`
  ADD CONSTRAINT `checkouts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `panel_admins`
--
ALTER TABLE `panel_admins`
  ADD CONSTRAINT `panel_admins_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `purchases`
--
ALTER TABLE `purchases`
  ADD CONSTRAINT `purchases_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
