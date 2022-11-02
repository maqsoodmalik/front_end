-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2022 at 08:01 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `regaliafashion`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '0=Deactive, 1=Active',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `type`, `password`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'admin@gmail.com', 'Super Admin', '$2y$10$ojQKlytHNzu2tVX5ZZ24eew9snzTlXLlDw/Jykd/nP3xs7twGktky', 1, NULL, '2022-10-24 05:16:12', '2022-10-24 05:16:12');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `session_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qty` int(11) NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_tags` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT 0,
  `created_by` int(11) NOT NULL DEFAULT 0,
  `updated_by` int(11) NOT NULL DEFAULT 0,
  `deleted_by` int(11) NOT NULL DEFAULT 0,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `meta_tags`, `meta_description`, `parent_id`, `created_by`, `updated_by`, `deleted_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'NEW ARRIVALS', 'new-arrivals', '--Select Tags --', 'NEW ARRIVALS', 0, 0, 0, 0, NULL, '2022-10-24 05:20:55', '2022-10-24 05:20:55'),
(2, 'UNSTITCHED FABRICS', 'unstitched-fabrics', '--Select Tags --', 'UNSTITCHED FABRICS', 0, 0, 0, 0, NULL, '2022-10-24 05:21:22', '2022-10-24 05:21:22'),
(3, 'READY TO WEAR', 'ready-to-wear', '--Select Tags --', 'READY TO WEAR', 0, 0, 0, 0, NULL, '2022-10-24 05:21:36', '2022-10-25 01:41:30'),
(4, 'M.BASICS', 'mbasics', '--Select Tags --', 'M.BASICS', 0, 0, 0, 0, NULL, '2022-10-24 05:21:51', '2022-10-24 05:21:51');

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
(11, '2014_10_12_000000_create_users_table', 1),
(12, '2014_10_12_100000_create_password_resets_table', 1),
(13, '2019_08_19_000000_create_failed_jobs_table', 1),
(14, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(15, '2022_10_17_081626_create_admins_table', 1),
(16, '2022_10_17_103251_create_categories_table', 1),
(17, '2022_10_18_080648_create_products_table', 1),
(18, '2022_10_18_104104_create_product_metas_table', 1),
(19, '2022_10_18_133804_create_product_images_table', 1),
(20, '2022_10_19_082142_create_product_categories_table', 1),
(21, '2022_10_26_160652_create_carts_table', 2);

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
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `prod_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prod_sku` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prod_qty` int(211) DEFAULT NULL,
  `prod_fabric` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prod_color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prod_sizes` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `local_shipping` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `international_shipping` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `disclaimer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `long_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pkr_price` decimal(8,2) NOT NULL,
  `uae_price` decimal(8,2) NOT NULL,
  `qatari_price` decimal(8,2) NOT NULL,
  `saudi_price` decimal(8,2) NOT NULL,
  `us_price` decimal(8,2) NOT NULL,
  `uk_price` decimal(8,2) NOT NULL,
  `cad_price` decimal(8,2) NOT NULL,
  `euro_price` decimal(8,2) NOT NULL,
  `discount` int(11) NOT NULL DEFAULT 0,
  `net_price` decimal(8,2) DEFAULT NULL,
  `publish` enum('Yes','No') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'No',
  `status` enum('Approved','Rejected') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Rejected',
  `is_recommend` int(11) NOT NULL DEFAULT 0 COMMENT '0=No, 1=Yes',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_by` int(11) NOT NULL DEFAULT 0,
  `updated_by` int(11) NOT NULL DEFAULT 0,
  `deleted_by` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `prod_title`, `slug`, `prod_sku`, `prod_qty`, `prod_fabric`, `prod_color`, `prod_sizes`, `local_shipping`, `international_shipping`, `disclaimer`, `short_description`, `long_description`, `pkr_price`, `uae_price`, `qatari_price`, `saudi_price`, `us_price`, `uk_price`, `cad_price`, `euro_price`, `discount`, `net_price`, `publish`, `status`, `is_recommend`, `deleted_at`, `created_by`, `updated_by`, `deleted_by`, `created_at`, `updated_at`) VALUES
(1, 'Suit Off White MKS-W22-26', 'suit-off-white-mks-w22-26', 'MKS-W22-26-OFF WHITE', NULL, 'WINTER-2022', 'WHITE', '2-4,4-6,6-8,8-10,10-12,12-14', 'Free', '8 to 10 Working Days Global Shipping', 'Product color may vary slightly due to photographic lighting or your device settings.', '4 Piece\r\nKoti fabric: Velvet\r\nShirt fabric: Jacquard\r\nTrouser fabric: Satin\r\nDupatta fabric: Tissue\r\nJacquard frock paired with embroidered velvet koti and matching churidar crushed tissue dupatta.', NULL, '9990.00', '9990.00', '9990.00', '9990.00', '9990.00', '9990.00', '9990.00', '9990.00', 90, '9990.00', 'No', 'Rejected', 0, NULL, 0, 0, 0, '2022-10-24 05:27:34', '2022-10-24 05:27:34'),
(2, 'Suit Pink SF-W22-33', 'suit-pink-sf-w22-33', 'SF-W22-33-PINK', NULL, 'WINTER-2022', 'PINK', 'XS, S, M, L, XL', 'Free', '8 to 10 Working Days Global Shipping', 'Product color may vary slightly due to photographic lighting or your device settings.', '3 Piece\r\nFrock fabric: Organza\r\nTrouser fabric: Cotton Satin\r\nDupatta fabric: Organza\r\nLong schiffli panelled frock with schiffli and tilla embroidery borders on sleeves and hem. Hand embellished neckline. Paired with matching straight pants and matching dupatta with schiffli and tilla embroidery four-sided border.', NULL, '26990.00', '26990.00', '26990.00', '26990.00', '26990.00', '26990.00', '26990.00', '26990.00', 90, '26990.00', 'No', 'Rejected', 0, NULL, 0, 0, 0, '2022-10-24 05:30:38', '2022-10-24 05:30:38'),
(3, 'Suit Teal DW-W22-33', 'suit-teal-dw-w22-33', 'DW-W22-33-TEAL', NULL, 'WINTER-2022', 'Black', 'XS, S, M, L, XL', 'Free', '8 to 10 Working Days Global Shipping', 'Product color may vary slightly due to photographic lighting or your device settings.', '3 Piece\r\nShirt fabric: Linen\r\nTrouser fabric: Linen\r\nShawl: Acrylic Print\r\nLinen angrakha embroidered frock with digital printed shawl and linen trouser.', NULL, '16990.00', '16990.00', '16990.00', '16990.00', '16990.00', '16990.00', '16990.00', '16990.00', 90, '16990.00', 'No', 'Rejected', 0, NULL, 0, 0, 0, '2022-10-24 05:34:17', '2022-10-24 05:34:17'),
(4, 'Suit Red MKS-W22-35', 'suit-red-mks-w22-35', 'MKS-W22-35-RED', NULL, 'WINTER-2022', 'RED', 'XS, S, M, L, XL', 'Free', '8 to 10 Working Days Global Shipping', 'Product color may vary slightly due to photographic lighting or your device settings.', '3 Piece\r\nShirt fabric: Raw Silk\r\nTrouser fabric: Raw Silk\r\nDupatta fabric: Tissue\r\nEmbroidered choli paired with lehenga and crushed tissue dupatta.', NULL, '10490.00', '10490.00', '10490.00', '10490.00', '10490.00', '10490.00', '10490.00', '10490.00', 90, '10490.00', 'No', 'Rejected', 0, NULL, 0, 0, 0, '2022-10-24 05:37:53', '2022-10-24 05:37:53'),
(5, 'Suit Green MKS-W22-03', 'suit-green-mks-w22-03', 'MKS-W22-03-GREEN', NULL, 'WINTER-2022', 'GREEN', '2-4,4-6,6-8,8-10,10-12,12-14', 'Free', '8 to 10 Working Days Global Shipping', 'Product color may vary slightly due to photographic lighting or your device settings.', '3 Piece\r\nShirt fabric: Organza\r\nTrouser fabric: Organza\r\nDupatta fabric: Chiffon\r\nEmbroidered straight shirt paired with organza gharara and chiffon dupatta.', NULL, '10290.00', '10290.00', '10290.00', '10290.00', '10290.00', '10290.00', '10290.00', '10290.00', 90, '10290.00', 'No', 'Rejected', 0, NULL, 0, 0, 0, '2022-10-24 05:41:44', '2022-10-24 05:41:44'),
(6, 'Unstitched Lawn D-2204-A', 'unstitched-lawn-d-2204-a', 'D-2204-A', NULL, 'SPRING SUMMER 2022', 'White', '2-4,4-6,6-8,8-10,10-12,12-14', 'Free', '8 to 10 Working Days Global Shipping', 'Product color may vary slightly due to photographic lighting or your device settings.', 'Embroidered Lawn Front\r\nEmbroidered Chiffon Sleeve\r\nPrinted Back\r\nPrinted Trouser\r\nPrinted Net Organza Dupatta\r\nEmbroidered Organza Neckline Patch\r\nEmbroidered Organza Sleeve Patches\r\nEmbroidered Organza Sleeve Lace\r\n3D Flowers and Leaves', NULL, '9863.00', '9863.00', '9863.00', '9863.00', '9863.00', '9863.00', '9863.00', '9863.00', 90, NULL, 'No', 'Rejected', 0, NULL, 0, 0, 0, '2022-10-24 05:47:24', '2022-10-24 05:47:24'),
(7, 'Unstitched Lawn D-2207-B', 'unstitched-lawn-d-2207-b', 'D-2207-B', NULL, 'SPRING SUMMER 2022', 'GREEN', 'XS, S, M, L, XL', 'Free', '8 to 10 Working Days Global Shipping', 'Product color may vary slightly due to photographic lighting or your device settings.', 'Embroidered Lawn Front and Sleeve\r\nPrinted Back\r\nPrinted Trouser\r\n100% Pure Chinese Silk Printed Dupatta\r\nEmbroidered Organza Ghera Lace\r\nEmbroidered Organza Sleeve Lace\r\nEmbroidered Organza Neckline Lace\r\nImported french Shoulder Lace', NULL, '9638.00', '9638.00', '9638.00', '9638.00', '9638.00', '9638.00', '9638.00', '9638.00', 90, '9638.00', 'No', 'Rejected', 0, NULL, 0, 0, 0, '2022-10-24 05:50:03', '2022-10-24 05:50:03'),
(8, 'Unstitched Lawn D-2208-B', 'unstitched-lawn-d-2208-b', 'D-2208-B', NULL, 'SPRING SUMMER 2022', 'BLUE', 'XS, S, M, L, XL', 'Free', '8 to 10 Working Days Global Shipping', 'Product color may vary slightly due to photographic lighting or your device settings.', 'Embroidered Broshia Front Center Panel\r\nEmbroidered Broshia Side Panels\r\nEmbroidered Broshia Sleeves\r\nPrinted Chiffon Dupatta\r\nPlain Trouser\r\nEmbroidered Organza Sleeve Patches\r\nEmbroidered Organza Sleeve Lace\r\nEmbroidered Organza Ghera Lace\r\nEmbroidered Organza Ghera Patch\r\nPlain Broshia back', NULL, '9638.00', '9638.00', '9638.00', '9638.00', '9638.00', '9638.00', '9638.00', '9638.00', 90, '9638.00', 'No', 'Rejected', 0, NULL, 0, 0, 0, '2022-10-24 05:53:05', '2022-10-24 05:53:05'),
(9, 'Unstitched Lawn D-2209-A', 'unstitched-lawn-d-2209-a', 'D-2209-A', NULL, 'SPRING SUMMER 2022', 'White', 'XS, S, M, L, XL', 'Free', '8 to 10 Working Days Global Shipping', 'Product color may vary slightly due to photographic lighting or your device settings.', 'Printed Lawn Embroidered Front\r\nPrinted Lawn Embroidered Sleeve\r\nPrinted Back\r\nPrinted Chiffon Dupatta\r\nPrinted Trouser\r\nEmbroidered Net Ghera Patch\r\nEmbroidered Net Sleeve Patches\r\nEmbroidered Lawn Ghera Patti', NULL, '9638.00', '9638.00', '9638.00', '9638.00', '9638.00', '9638.00', '9638.00', '9638.00', 90, '9638.00', 'No', 'Rejected', 0, NULL, 0, 0, 0, '2022-10-24 05:55:47', '2022-10-24 05:55:47'),
(10, 'Click on above image to view full picture       Unstitched Lawn D-2211-A', '-click-on-above-image-to-view-full-picture-unstitched-lawn-d-2211-a', 'D-2211-A', NULL, 'SPRING SUMMER 2022', 'GREEN', 'XS, S, M, L, XL', 'Free', '8 to 10 Working Days Global Shipping', 'Product color may vary slightly due to photographic lighting or your device settings.', 'Embroidered Organza Center Panel\r\nLawn Embroidered Side Panels\r\nPrinted Back\r\nPrinted Trouser\r\nLawn Embroidered Sleeve\r\nChantilly Lace Dupatta\r\nEmbroidered Organza Side Panel Patches (Left/Right)\r\nLawn Embroidered Sleeve\r\n3D Flower Lace\r\nEmbroidered Organza Sleeve Patches\r\nEmbroidered Organza Shoulder + Sleeve Lace\r\nEmbroidered Organza Ghera Lace 1\r\nEmbroidered Organza Ghera Lace 2\r\nCenter Panel Lining', NULL, '9863.00', '9863.00', '9863.00', '9863.00', '9863.00', '9863.00', '9863.00', '9863.00', 90, '9863.00', 'No', 'Rejected', 0, NULL, 0, 0, 0, '2022-10-24 05:59:06', '2022-10-24 05:59:06'),
(11, 'Suit Red SF-PF22-10', 'suit-red-sf-pf22-10', 'SF-PF22-10-RED', NULL, 'WINTER-2022', 'RED', 'XS, S, M, L, XL', 'Free', '8 to 10 Working Days Global Shipping', 'Product color may vary slightly due to photographic lighting or your device settings.', '3 Piece\r\nShirt fabric: Rawsilk\r\nTrouser fabric: Rawsilk\r\nDupatta fabric: Organza\r\nStraight long shirt with organza details on neckline followed by box pleate on front. Cutwork and 3D floral embroidery on sleeves. Paired with matching trouser with embroidered border. Matching dupatta with cutwork embroidered border on four sides', NULL, '26990.00', '26990.00', '26990.00', '26990.00', '26990.00', '26990.00', '26990.00', '26990.00', 90, '26990.00', 'No', 'Rejected', 0, NULL, 0, 0, 0, '2022-10-24 06:01:41', '2022-10-24 06:01:41'),
(12, 'Suit Pink SF-W22-13', 'suit-pink-sf-w22-13', 'SF-W22-13-PINK', NULL, 'WINTER-2022', 'PINK', 'XS, S, M, L, XL', 'Free', '8 to 10 Working Days Global Shipping', 'Product color may vary slightly due to photographic lighting or your device settings.', '3 Piece\r\nShirt fabric: Raw Silk\r\nSahara fabric: Raw Silk\r\nDupatta fabric: Organza\r\nStraight shirt with embroidered neckline and sleeves paired with matching sharara with all over embroidery spray. Contrast dupatta with four sided embroidered border and all over embroidery spray.', NULL, '24990.00', '24990.00', '24990.00', '24990.00', '24990.00', '24990.00', '24990.00', '24990.00', 90, '24990.00', 'No', 'Rejected', 0, NULL, 0, 0, 0, '2022-10-24 06:04:18', '2022-10-24 06:04:18'),
(13, 'Suit Green SF-W22-09', 'suit-green-sf-w22-09', 'SF-W22-09-GREEN', NULL, 'WINTER-2022', 'GREEN', 'XS, S, M, L, XL', 'Free', '8 to 10 Working Days Global Shipping', 'Product color may vary slightly due to photographic lighting or your device settings.', '4 Piece\r\nFrock fabric: Zari Net\r\nLehenga fabric: Tissue\r\nDupatta fabric: Zari Net\r\nLong panelled frock with embroidered jaal on front and back hand embellishment on neckline. Embroidered border on sleeves and hem paired with crushed lehenga and zari net dupatta with four sided embroidered border.', NULL, '35990.00', '35990.00', '35990.00', '35990.00', '35990.00', '35990.00', '35990.00', '35990.00', 90, NULL, 'No', 'Rejected', 0, NULL, 0, 0, 0, '2022-10-24 06:07:36', '2022-10-24 06:07:36'),
(14, 'Suit Black SF-W22-43', 'suit-black-sf-w22-43', 'SF-W22-43-BLACK', NULL, 'WINTER-2022', 'Black', 'XS, S, M, L, XL', 'Free', '8 to 10 Working Days Global Shipping', 'Product color may vary slightly due to photographic lighting or your device settings.', '3 Piece\r\nShirt fabric: Velvet\r\nTrouser fabric: Cotton Satin\r\nDupatta fabric: Zari Net\r\nEmbroidered velvet frock with embroidered detailed trouser along with zari net embroidered dupatta.', NULL, '32990.00', '32990.00', '32990.00', '32990.00', '32990.00', '32990.00', '32990.00', '32990.00', 90, '32990.00', 'No', 'Rejected', 0, NULL, 0, 0, 0, '2022-10-24 06:10:51', '2022-10-24 06:10:51'),
(15, 'Suit Maroon SF-W22-03', 'suit-maroon-sf-w22-03', 'SF-W22-03-MAROON', NULL, 'WINTER-2022', 'MAROON', 'XS, S, M, L, XL', 'Free', '8 to 10 Working Days Global Shipping', 'Product color may vary slightly due to photographic lighting or your device settings.', '3 Piece\r\nShirt fabric: Velvet\r\nTrouser fabric: Jacquard\r\nDupatta fabric: Organza\r\nStraight long shirt with embroidered panels, neckline and sleeves paired with matching straight trouser and embroidered dupatta with velvet embroidered four-sided border.', NULL, '31990.00', '31990.00', '31990.00', '31990.00', '31990.00', '31990.00', '31990.00', '31990.00', 90, '31990.00', 'No', 'Rejected', 0, NULL, 0, 0, 0, '2022-10-24 06:14:28', '2022-10-24 06:14:28'),
(16, 'Shirt Magenta MB-W22-208', 'shirt-magenta-mb-w22-208', 'MB-W22-208-MAGENTA', NULL, 'WINTER-2022', 'RED', 'XS, S, M, L, XL', 'Free', '8 to 10 Working Days Global Shipping', 'Product color may vary slightly due to photographic lighting or your device settings.', '1 Piece\r\nShirt fabric: Dobby Linen\r\nSolid gathered dress with lace deta and drawstrings.', NULL, '4590.00', '4590.00', '4590.00', '4590.00', '4590.00', '4590.00', '4590.00', '4590.00', 90, '4590.00', 'No', 'Rejected', 0, NULL, 0, 0, 0, '2022-10-24 06:20:40', '2022-10-24 06:20:40'),
(17, 'Shirt Zinc MB-W22-202', 'shirt-zinc-mb-w22-202', 'MB-W22-202-ZINC', NULL, 'WINTER-2022', 'BLUE', 'XS, S, M, L, XL', 'Free', '8 to 10 Working Days Global Shipping', 'Product color may vary slightly due to photographic lighting or your device settings.', '1 Piece\r\nShirt fabric: Linen\r\nKurta with embroidered sleeves and band collar.', NULL, '3290.00', '3290.00', '3290.00', '3290.00', '3290.00', '3290.00', '3290.00', '3290.00', 90, '3290.00', 'No', 'Rejected', 0, NULL, 0, 0, 0, '2022-10-24 06:23:43', '2022-10-24 06:23:43'),
(18, 'Shirt Blue MB-W22-105', 'shirt-blue-mb-w22-105', 'MB-W22-105-BLUE', NULL, 'WINTER-2022', 'BLUE', 'XS, S, M, L, XL', 'Free', '8 to 10 Working Days Global Shipping', 'Product color may vary slightly due to photographic lighting or your device settings.', '1 Piece\r\nShirt fabric: Khaddar\r\nPeplum top with neon lace.', NULL, '2490.00', '2490.00', '2490.00', '2490.00', '2490.00', '2490.00', '2490.00', '2490.00', 90, '2490.00', 'No', 'Rejected', 0, NULL, 0, 0, 0, '2022-10-24 06:27:10', '2022-10-24 06:27:10'),
(19, 'Shirt Magenta MB-W22-104', 'shirt-magenta-mb-w22-104', 'MB-W22-104-MAGENTA', NULL, 'WINTER-2022', 'RED', 'XS, S, M, L, XL', 'Free', '8 to 10 Working Days Global Shipping', 'Product color may vary slightly due to photographic lighting or your device settings.', '1 Piece\r\nShirt fabric: Cotton net\r\nUnder shirt fabric: Pk Raw Silk\r\nEmbroidered Kurta with tassel details.', NULL, '2990.00', '2990.00', '2990.00', '2990.00', '2990.00', '2990.00', '2990.00', '2990.00', 90, '2990.00', 'No', 'Rejected', 0, NULL, 0, 0, 0, '2022-10-24 06:30:46', '2022-10-24 06:30:46'),
(20, 'Shirt Brown MB-W22-329', 'shirt-brown-mb-w22-329', 'MB-W22-329-BROWN', NULL, 'WINTER-2022', 'BROWN', 'XS, S, M, L, XL', 'Free', '8 to 10 Working Days Global Shipping', 'Product color may vary slightly due to photographic lighting or your device settings.', '1 Piece\r\nShirt fabric: Khaddar\r\nRunning embroidered kurta featuring lace.', NULL, '5290.00', '5290.00', '5290.00', '5290.00', '5290.00', '5290.00', '5290.00', '5290.00', 90, '5290.00', 'No', 'Rejected', 0, NULL, 0, 0, 0, '2022-10-24 06:34:40', '2022-10-24 06:34:40');

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`id`, `product_id`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 2, 1, NULL, NULL),
(3, 3, 1, NULL, NULL),
(4, 4, 1, NULL, NULL),
(5, 5, 1, NULL, NULL),
(6, 6, 2, NULL, NULL),
(7, 7, 2, NULL, NULL),
(8, 8, 2, NULL, NULL),
(9, 9, 2, NULL, NULL),
(10, 10, 2, NULL, NULL),
(11, 11, 3, NULL, NULL),
(12, 12, 3, NULL, NULL),
(13, 13, 3, NULL, NULL),
(14, 14, 3, NULL, NULL),
(15, 15, 3, NULL, NULL),
(16, 16, 4, NULL, NULL),
(17, 17, 4, NULL, NULL),
(18, 18, 4, NULL, NULL),
(19, 19, 4, NULL, NULL),
(20, 20, 4, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `product_id`, `thumbnail`, `created_at`, `updated_at`) VALUES
(1, 1, 'public/product/chpQ9yQaUgqgAKApqCjHlwgligsqZxSUR6bZlulA.jpg', NULL, NULL),
(2, 1, 'public/product/yE1nKFURMpYS4Xxf3sTKg6JUFsCdrHToWBrxtOcv.jpg', NULL, NULL),
(3, 1, 'public/product/EcEpbaCXYZRohtcvi9KX7WOIam9qNPAopJZmyEqY.jpg', NULL, NULL),
(4, 1, 'public/product/MfAdFeZBtBPse4003xeYM66NiS0frtyz99YgoLEk.jpg', NULL, NULL),
(5, 2, 'public/product/3Y7cSHf3412RjLTGmGnSiHyo3QS1VBCu5IyXzAaY.jpg', NULL, NULL),
(6, 2, 'public/product/sCRVinUZWqRKlPKaOs0u28uK7aXnFm1XqIsWwtWd.jpg', NULL, NULL),
(7, 2, 'public/product/SveGEb62ODZXdswnwnRY1HqJJO58sAZ1ZA0TzF8r.jpg', NULL, NULL),
(8, 3, 'public/product/tIgbyOtwXhPT0hBMrlXyfI1nQA8tupDsIdM757f8.jpg', NULL, NULL),
(9, 3, 'public/product/xY6uMBgxCyU3ggnxPzGJS7B3SjX80uLqnFYHKgmQ.jpg', NULL, NULL),
(10, 3, 'public/product/IGc8Qa702NU3t6YMlls1U7y0o9dRgaMrLPYGKx7z.jpg', NULL, NULL),
(11, 4, 'public/product/ZqVZBxga3Gyt96sTwNPf8a2qdqQEM0oDEw68jZGb.jpg', NULL, NULL),
(12, 4, 'public/product/Yqugtm8NGO9Jypy6VtqCYphMfogJ43rdqsDY50C4.jpg', NULL, NULL),
(13, 4, 'public/product/yGqZyqzPuyUo6NwQsQ3oezNFjBBRnC5y0zrefyI0.jpg', NULL, NULL),
(14, 4, 'public/product/DqYgPEj9BenfnlhkZmxBcJ6894pwdQ82kRu2iZC3.jpg', NULL, NULL),
(15, 5, 'public/product/O44I6jowONuzvcch3saeLAI1ICheni0IFmPCJ3wW.jpg', NULL, NULL),
(16, 5, 'public/product/I5dINE1nqW4B4ih6lHKvN347dTBV6yNGfADIpEHg.jpg', NULL, NULL),
(17, 5, 'public/product/4URW0SPeUod0q6uoZfjNNErbrkyPxWTt4BxxRcMr.jpg', NULL, NULL),
(18, 5, 'public/product/LrCvOPi1EAoqAt4fkgW1wO27BwJqq1Z5XUIh2iJp.jpg', NULL, NULL),
(19, 6, 'public/product/f8YXy7IxgE2DE4Z4iLVZjERnfvi0oe9DZgJRVSee.jpg', NULL, NULL),
(20, 6, 'public/product/zkAJHrr2u46HkfhXz2KMyrUq9MKCX9jiV8ch8ev9.jpg', NULL, NULL),
(21, 6, 'public/product/ZIr0bhfsMoRKPW2rm12yXZmdRvx6pD0Q1veWezgY.jpg', NULL, NULL),
(22, 6, 'public/product/nUbW7mfJonAgFD2B40eRvy36dfvzLjly4xfeW8N8.jpg', NULL, NULL),
(23, 7, 'public/product/8qFIPt82pS2iH1c78L3OPKBD6OLzoQPMGoV62erl.jpg', NULL, NULL),
(24, 7, 'public/product/ShiuNMqgPpBn5WkTTptAn3OSeojeHtf95a4KDg52.jpg', NULL, NULL),
(25, 8, 'public/product/FgoyNSdWmnOIY1xgzQfl345j4ckBufmlZmHAOkKc.jpg', NULL, NULL),
(26, 8, 'public/product/TIavHBsnYqXtLoqHdhDRg5pQQqPfsTnbfHIGqo9g.jpg', NULL, NULL),
(27, 8, 'public/product/MLAXQWvH0NRO0LLRUq3KZkWIHyTLisKV3xZLEX8o.jpg', NULL, NULL),
(28, 9, 'public/product/mERIJsWXdua7S3iIhQIpRXerNiCHml0evG29u6yA.jpg', NULL, NULL),
(29, 9, 'public/product/GSSTcAoVOg4bzRRuKyzahx4jcSpme0EjsnIgL5k2.jpg', NULL, NULL),
(30, 9, 'public/product/ufCMRz9yUEkh48NejM7bjOCC0cEvHZNvMUC8lJLX.jpg', NULL, NULL),
(31, 9, 'public/product/y3Y42PzwlZYfcl0y7M2GBfmCY3h5DOcYUZesjsrB.jpg', NULL, NULL),
(32, 10, 'public/product/bnKPCbmhvzoau8NzuJA3XUiTB8QS5SQcJO7vQ0El.jpg', NULL, NULL),
(33, 10, 'public/product/igdPL50cvDwvrtbDqul9d86kuZ2FWz3Hxbj28BR3.jpg', NULL, NULL),
(34, 11, 'public/product/7qJGrfzBDpNDR7LWfZN3hdKUY8PpnsXjFrVtct1E.jpg', NULL, NULL),
(35, 11, 'public/product/rgXaUGXnvqTa6Ygi52Z0FD12yfv4BiC3RCVgmb28.jpg', NULL, NULL),
(36, 12, 'public/product/kMnAiPhngIJWTvo2Cv8iiRhBpLMswiFbcu68HfVU.jpg', NULL, NULL),
(37, 12, 'public/product/2NHeAtZnR25eRmEWqWE4QEbYuyWARFgZNosP72Dw.jpg', NULL, NULL),
(38, 13, 'public/product/xPuIQjXsrRLcFJBzmxCuOl6dFeZQoMdFXb4IpGAw.jpg', NULL, NULL),
(39, 13, 'public/product/kiRfPV7BnBr3lHTCvVLyZZaRUT23rknqTSkMPntV.jpg', NULL, NULL),
(40, 13, 'public/product/JrYMJGGpV6p1qedQrx9fDnrWBBNDL6U2AJY1jKXS.jpg', NULL, NULL),
(41, 13, 'public/product/oatTUfrLksIdR2rMyXmabGXD1iXUDn8LtFXWihwW.jpg', NULL, NULL),
(42, 14, 'public/product/hbh6P0BZEWMFRjXmIZqmuil0EKQSElLLHh3fiiUI.jpg', NULL, NULL),
(43, 14, 'public/product/BOIgevebxiy34vvGpru6OhTBrcHOBIUur9EkMaIv.jpg', NULL, NULL),
(44, 14, 'public/product/xi8LJoZ6Q0DZxlNBlA4XXHMFQbx6LBK53kj6WGAr.jpg', NULL, NULL),
(45, 14, 'public/product/ddJhgoUSA3PfcwBYGDKyr8ZfHNl6mDJT5Q86txJh.jpg', NULL, NULL),
(46, 15, 'public/product/YvZB65wVo6tmKnyj2QzHPz61KSsSptQY5Lr7eMOv.jpg', NULL, NULL),
(47, 15, 'public/product/2ncXM9u59LX70wRipqJ3FNWzGIJBA0mtB6o1NLie.jpg', NULL, NULL),
(48, 15, 'public/product/yasFVgK3Qz7nOnTrtRubThhiSElN2wVeD5ldt2bA.jpg', NULL, NULL),
(49, 15, 'public/product/QLpsaFpFh2z3HZQY2BL8OCXI8JFi5r92vFZ4JgAh.jpg', NULL, NULL),
(50, 16, 'public/product/ZHo7kSsnIwxxWA6lxB264uOmkIxWHqr1wO0pWp6y.jpg', NULL, NULL),
(51, 16, 'public/product/wnexC4wGt1mbUcWWIdSErDYnE95aSTEFbImQS657.jpg', NULL, NULL),
(52, 16, 'public/product/C5YeCC4btAAAXW40bfMj65SoJOvYpqmb5cDgRoTS.jpg', NULL, NULL),
(53, 16, 'public/product/X1xN857NfCVOYOd9b4qwqwwP9kdHi3m0xEzf3ZOV.jpg', NULL, NULL),
(54, 17, 'public/product/LRVQko1ZTIDFxiPAeyYKafo6xDc5U2vPLP6rnCrz.jpg', NULL, NULL),
(55, 17, 'public/product/alng61y8Tv8WUsvK8CHTNlcPk4QfAbAQyewtCBxp.jpg', NULL, NULL),
(56, 17, 'public/product/3mheAGEPQhPqHs2K4DYu3SnPUf1Cu0RYclf3gVlS.jpg', NULL, NULL),
(57, 17, 'public/product/lE6i5P1FEsyeEcZ4jnl3FAFaRQOa2x07KMrHCvLW.jpg', NULL, NULL),
(58, 18, 'public/product/oB6Kg06XuuVz1HKnhFvNoWfw4e7Db8LempU39ArK.jpg', NULL, NULL),
(59, 18, 'public/product/FzDlRprHYYGFYinqx5Ka3dJkNCoqi6EToeK56IwT.jpg', NULL, NULL),
(60, 18, 'public/product/rdVs42PMd66NZkhVzrGDXFvoUsrYkMdPS7w1vXPD.jpg', NULL, NULL),
(61, 18, 'public/product/3Wf2EtL1br4d1G9UpB8H3UWbVaNOeJYHb8m8Nc48.jpg', NULL, NULL),
(62, 19, 'public/product/YyeBFwJRRSh1tfDvPezBHTnFMdJYhBm2R4CZHvwT.jpg', NULL, NULL),
(63, 19, 'public/product/tYchWlbsiOA86NIIEEExF0hbMVmAFcAKSGNxq3kW.jpg', NULL, NULL),
(64, 19, 'public/product/DpNE4gZbYO67ySX6d21QTBnv0uaWFFDBKjAzEjf8.jpg', NULL, NULL),
(65, 19, 'public/product/WSy8WYQUhOF5acElnv5ScHuvItwsRbg0t7y2yq17.jpg', NULL, NULL),
(66, 20, 'public/product/3NNADfXh9jRX0egqyz3F26wQrvnTuhckmUveAAET.jpg', NULL, NULL),
(67, 20, 'public/product/u4uDOkweCeSV6NstIJP4xvgYlYQGirip4TXLd2XC.jpg', NULL, NULL),
(68, 20, 'public/product/ZcNTHJ0enbcKDxHcjRsYNJhoy6VBtRhFNNhRqSiV.jpg', NULL, NULL),
(69, 20, 'public/product/E0GVK064PL68XU1b9VCuwTctyuHJojVIYRsnnTB4.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_metas`
--

CREATE TABLE `product_metas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_tags` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_metas`
--

INSERT INTO `product_metas` (`id`, `product_id`, `meta_title`, `meta_tags`, `meta_description`, `created_at`, `updated_at`) VALUES
(1, 1, 'Suit Off White MKS-W22-26', '--Select Tags --', 'Suit Off White MKS-W22-26', '2022-10-24 05:27:34', '2022-10-24 05:27:34'),
(2, 2, 'Suit Pink SF-W22-33', '--Select Tags --', 'Suit Pink SF-W22-33', '2022-10-24 05:30:38', '2022-10-24 05:30:38'),
(3, 3, 'Suit Teal DW-W22-33', '--Select Tags --', 'Suit Teal DW-W22-33', '2022-10-24 05:34:17', '2022-10-24 05:34:17'),
(4, 4, 'Suit Red MKS-W22-35', '--Select Tags --', 'Suit Red MKS-W22-35', '2022-10-24 05:37:53', '2022-10-24 05:37:53'),
(5, 5, 'Suit Green MKS-W22-03', '--Select Tags --', 'Suit Green MKS-W22-03', '2022-10-24 05:41:44', '2022-10-24 05:41:44'),
(6, 6, 'Unstitched Lawn D-2204-A', '--Select Tags --', 'Unstitched Lawn D-2204-A', '2022-10-24 05:47:24', '2022-10-24 05:47:24'),
(7, 7, 'Unstitched Lawn D-2207-B', '--Select Tags --', 'Unstitched Lawn D-2207-B', '2022-10-24 05:50:03', '2022-10-24 05:50:03'),
(8, 8, 'Unstitched Lawn D-2208-B', '--Select Tags --', 'Unstitched Lawn D-2208-B', '2022-10-24 05:53:05', '2022-10-24 05:53:05'),
(9, 9, 'Unstitched Lawn D-2209-A', '--Select Tags --', 'Unstitched Lawn D-2209-A', '2022-10-24 05:55:48', '2022-10-24 05:55:48'),
(10, 10, 'Click on above image to view full picture       Unstitched Lawn D-2211-A', '--Select Tags --', 'Click on above image to view full picture       Unstitched Lawn D-2211-A', '2022-10-24 05:59:06', '2022-10-24 05:59:06'),
(11, 11, 'Suit Red SF-PF22-10', '--Select Tags --', 'Suit Red SF-PF22-10', '2022-10-24 06:01:41', '2022-10-24 06:01:41'),
(12, 12, 'Suit Pink SF-W22-13', '--Select Tags --', 'Suit Pink SF-W22-13', '2022-10-24 06:04:18', '2022-10-24 06:04:18'),
(13, 13, 'Suit Green SF-W22-09', '--Select Tags --', 'Suit Green SF-W22-09', '2022-10-24 06:07:36', '2022-10-24 06:07:36'),
(14, 14, 'Suit Black SF-W22-43', '--Select Tags --', 'Suit Black SF-W22-43', '2022-10-24 06:10:51', '2022-10-24 06:10:51'),
(15, 16, 'Shirt Magenta MB-W22-208', '--Select Tags --', 'Shirt Magenta MB-W22-208', '2022-10-24 06:20:40', '2022-10-24 06:20:40'),
(16, 18, 'Shirt Blue MB-W22-105', '--Select Tags --', 'Shirt Blue MB-W22-105', '2022-10-24 06:27:10', '2022-10-24 06:27:10'),
(17, 19, 'Shirt Magenta MB-W22-104', '--Select Tags --', 'Shirt Magenta MB-W22-104', '2022-10-24 06:30:46', '2022-10-24 06:30:46'),
(18, 20, 'Shirt Brown MB-W22-329', '--Select Tags --', 'Shirt Brown MB-W22-329', '2022-10-24 06:34:40', '2022-10-24 06:34:40');

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
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_deleted_at_unique` (`email`,`deleted_at`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carts_product_id_foreign` (`product_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_slug_deleted_at_unique` (`name`,`slug`,`deleted_at`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_prod_title_slug_prod_sku_deleted_at_unique` (`prod_title`,`slug`,`prod_sku`,`deleted_at`);

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_categories_product_id_foreign` (`product_id`),
  ADD KEY `product_categories_category_id_foreign` (`category_id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_images_product_id_foreign` (`product_id`);

--
-- Indexes for table `product_metas`
--
ALTER TABLE `product_metas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_metas_product_id_foreign` (`product_id`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `product_metas`
--
ALTER TABLE `product_metas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD CONSTRAINT `product_categories_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `product_categories_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `product_images`
--
ALTER TABLE `product_images`
  ADD CONSTRAINT `product_images_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `product_metas`
--
ALTER TABLE `product_metas`
  ADD CONSTRAINT `product_metas_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
