-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Jun 2022 pada 18.43
-- Versi server: 10.4.20-MariaDB
-- Versi PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `cbeans`
--

CREATE TABLE `cbeans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `cbeans`
--

INSERT INTO `cbeans` (`id`, `nama`, `slug`, `isi`, `foto`, `created_at`, `updated_at`) VALUES
(1, 'Luwak', 'luwak', 'Kopi luwak menjadi kopi eksotis asal Sumatera dan beberapa daerah di Asia Tenggara. Minuman ini terbilang unik karena diolah dari kotoran hewan luwak yang termasuk keluarga musang. Hal ini bisa terjadi karena salah satu makanan luwak adalah ceri kopi, namun perutnya tak bisa memprosesnya dengan baik.', 'https://images.tokopedia.net/img/cache/500-square/product-1/2020/5/1/330941388/330941388_199b092f-c3eb-43a3-b963-29064f457ebb_600_600.jpg', '2022-06-09 07:04:44', '2022-06-09 07:04:44'),
(2, 'Arabika', 'arabika', 'ahbsxasbjdj ufjhuhxmxz', 'https://asset.kompas.com/crops/4fP8U62oSLmw8KRY3058k0dIzYU=/0x46:1000x712/750x500/data/photo/2019/10/29/5db817bc7275a.jpg', '2022-06-09 07:04:44', '2022-06-09 07:04:44'),
(3, 'Robusta', 'robusta', 'ahbsxasbjdj ufjhuhxmxz', 'https://s2.bukalapak.com/img/7943580092/large/Biji_Kopi_Robusta_Khas_kayumas_1kg.jpg.webp', '2022-06-09 07:04:44', '2022-06-09 07:04:44'),
(4, 'Liberika', 'liberika', 'ahbsxasbjdj ufjhuhxmxz', 'http://www.sadakoffie.com/wp-content/uploads/2017/11/liberica.jpg ', '2022-06-09 07:04:45', '2022-06-09 07:04:45'),
(5, 'Toraja', 'toraja', 'ahbsxasbjdj ufjhuhxmxz', 'https://img.my-best.id/press_component/images/519754d8d10820f57b36184a52f12c83.jpg?ixlib=rails-4.2.0&q=70&lossless=0&w=690&fit=max ', '2022-06-09 07:04:45', '2022-06-09 07:04:45'),
(6, 'Ekselsa', 'ekselsa', 'ahbsxasbjdj ufjhuhxmxz', 'https://cf.shopee.co.id/file/86df4d062810b89d0629b3532e8f38b8 ', '2022-06-09 07:04:45', '2022-06-09 07:04:45');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
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
-- Struktur dari tabel `kategoris`
--

CREATE TABLE `kategoris` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ikon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kategoris`
--

INSERT INTO `kategoris` (`id`, `nama`, `slug`, `ikon`, `foto`, `created_at`, `updated_at`) VALUES
(1, 'Coffee', 'coffee', 'img/coffee.png', 'https://www.runtastic.com/blog/wp-content/uploads/2017/04/thumbnail_energy-without-coffee_1200x800-1024x683.jpg', '2022-06-09 07:04:43', '2022-06-09 07:04:43'),
(2, 'Bakery', 'bakery', 'img/bakery.png', 'https://i.pinimg.com/564x/d1/79/e8/d179e8a37d315510244b7979ae2214fc.jpg', '2022-06-09 07:04:43', '2022-06-09 07:04:43');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_05_31_072055_create_kategoris_table', 1),
(6, '2022_05_31_134644_create_posts_table', 1),
(7, '2022_06_08_153845_create_cbeans_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
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
-- Struktur dari tabel `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `idKategori` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bahan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tutorial` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Publish` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `posts`
--

INSERT INTO `posts` (`id`, `idKategori`, `nama`, `slug`, `bahan`, `tutorial`, `foto`, `Publish`, `created_at`, `updated_at`) VALUES
(1, 1, 'Aisu Kohi', 'aisu-kohi', 'ms msndnuwundkn e dwjnjndje', 'ahbsxasbjdj ufjhuhxmxz', 'https://img-global.cpcdn.com/recipes/4983fd4024f8188f/680x482cq70/aisu-kohi-es-kopi-ala-jepang-foto-resep-utama.webp', '2022-06-09 14:04:43', '2022-06-09 07:04:43', '2022-06-09 07:04:43'),
(2, 1, 'Kopi Susu Cinnamon', 'kopi-susu-cinnamon', 'ms msndnuwundkn e dwjnjndje', 'ahbsxasbjdj ufjhuhxmxz', 'https://majalah.ottenstatic.com/uploads/2017/09/Starbucks-Cinnamon-Dolce-Latte-via-Diethood.jpg', '2022-06-09 14:04:43', '2022-06-09 07:04:43', '2022-06-09 07:04:43'),
(3, 1, 'Ice Cube Coffee Milk', 'ice-cube-coffee-milk', 'ms msndnuwundkn e dwjnjndje', 'ahbsxasbjdj ufjhuhxmxz', 'https://coffeeatthree.com/wp-content/uploads/coffee-ice-cubes-8.jpg', '2022-06-09 14:04:43', '2022-06-09 07:04:43', '2022-06-09 07:04:43'),
(4, 1, 'Ice Coffee Lemonade', 'ice-coffee-lemonade', 'ms msndnuwundkn e dwjnjndje', 'ahbsxasbjdj ufjhuhxmxz', 'https://www.glueandglitter.com/wp-content/uploads/2016/07/hard-iced-coffee-lemonade-1.jpg', '2022-06-09 14:04:43', '2022-06-09 07:04:43', '2022-06-09 07:04:43'),
(5, 1, 'Greek Frappe Coffee', 'greek-frappe-coffee', 'ms msndnuwundkn e dwjnjndje', 'ahbsxasbjdj ufjhuhxmxz', 'https://www.all-thats-jas.com/wp-content/uploads/2021/08/authentic-greek-frappe-drink-1200x1800.jpg', '2022-06-09 14:04:44', '2022-06-09 07:04:44', '2022-06-09 07:04:44'),
(6, 1, 'Ice Milk Coffee With Butterfly Pea', 'ice-milk-coffee-with-butterfly-pea', 'ms msndnuwundkn e dwjnjndje', 'ahbsxasbjdj ufjhuhxmxz', 'https://i.pinimg.com/564x/f8/4e/f5/f84ef536bb6beee5e3ae6f43f7d2b985.jpg', '2022-06-09 14:04:44', '2022-06-09 07:04:44', '2022-06-09 07:04:44'),
(7, 1, 'Matcha Coffee Milk Ice', 'matcha-coffee-milk-ice', 'ms msndnuwundkn e dwjnjndje', 'ahbsxasbjdj ufjhuhxmxz', 'https://www.siftandsimmer.com/wp-content/uploads/2021/03/matcha-espresso-fusion4-683x1024.jpg', '2022-06-09 14:04:44', '2022-06-09 07:04:44', '2022-06-09 07:04:44'),
(8, 1, 'Mint Mojito Iced Coffee', 'mint-mojito-iced-coffee', 'ms msndnuwundkn e dwjnjndje', 'ahbsxasbjdj ufjhuhxmxz', 'https://i.pinimg.com/564x/6b/29/2c/6b292c8c9f451586b46f153d7fe89583.jpg', '2022-06-09 14:04:44', '2022-06-09 07:04:44', '2022-06-09 07:04:44'),
(9, 1, 'Ice Float Coffee', 'ice-float-coffee', 'ms msndnuwundkn e dwjnjndje', 'ahbsxasbjdj ufjhuhxmxz', 'https://i.pinimg.com/564x/63/f4/48/63f44873d471ac25131150693ef00e22.jpg', '2022-06-09 14:04:44', '2022-06-09 07:04:44', '2022-06-09 07:04:44'),
(10, 2, 'Ham Kucai Bread', 'ham-kucai-bread', 'ms msndnuwundkn e dwjnjndje', 'ahbsxasbjdj ufjhuhxmxz', 'https://img-global.cpcdn.com/recipes/f7a230b5a2d30e97/680x482cq70/roti-ham-kucai-ala-bakery-terkenal-korea-62thn-bahan-simple-foto-resep-utama.jpg', '2022-06-09 14:04:44', '2022-06-09 07:04:44', '2022-06-09 07:04:44'),
(11, 2, 'Conchas Bread', 'conchas-bread', 'ms msndnuwundkn e dwjnjndje', 'ahbsxasbjdj ufjhuhxmxz', 'https://breadpartners.com/wp-content/uploads/2020/11/Concha1024.jpg', '2022-06-09 14:04:44', '2022-06-09 07:04:44', '2022-06-09 07:04:44'),
(12, 2, 'Kompyang Bread', 'kompyang-bread', 'ms msndnuwundkn e dwjnjndje', 'ahbsxasbjdj ufjhuhxmxz', 'https://i.pinimg.com/564x/86/43/ea/8643ea6aba08ff7963376bc3553d89cb.jpg', '2022-06-09 14:04:44', '2022-06-09 07:04:44', '2022-06-09 07:04:44'),
(13, 2, 'Floss Roll Bread', 'floss-roll-bread', 'ms msndnuwundkn e dwjnjndje', 'ahbsxasbjdj ufjhuhxmxz', 'https://i.pinimg.com/564x/71/64/39/71643950dc091724326d6f726ba41ac6.jpg', '2022-06-09 14:04:44', '2022-06-09 07:04:44', '2022-06-09 07:04:44'),
(14, 2, 'Hokaido Milk Bread', 'hokaido-milk-bread', 'ms msndnuwundkn e dwjnjndje', 'ahbsxasbjdj ufjhuhxmxz', 'https://i.pinimg.com/564x/96/7a/a9/967aa9a71a4d30bf3b6ea8cd6c34d934.jpg', '2022-06-09 14:04:44', '2022-06-09 07:04:44', '2022-06-09 07:04:44'),
(15, 2, 'Bubble Bread', 'bubble-bread', 'ms msndnuwundkn e dwjnjndje', 'ahbsxasbjdj ufjhuhxmxz', 'https://i.pinimg.com/736x/4f/18/ea/4f18eaef6bded1dd95a7ccb9110f3f38.jpg', '2022-06-09 14:04:44', '2022-06-09 07:04:44', '2022-06-09 07:04:44'),
(16, 2, 'Chigiri Crumble Cheese Bread', 'chigiri-crumble-cheese-bread', 'ms msndnuwundkn e dwjnjndje', 'ahbsxasbjdj ufjhuhxmxz', 'https://resepmamiku.com/wp-content/uploads/2021/10/242290705_118209470570760_4950128885361690390_n-760x760.jpg', '2022-06-09 14:04:44', '2022-06-09 07:04:44', '2022-06-09 07:04:44'),
(17, 2, 'Choco Wassant Bread', 'choco-wassant-bread', 'ms msndnuwundkn e dwjnjndje', 'ahbsxasbjdj ufjhuhxmxz', 'https://img-global.cpcdn.com/recipes/a14c09e71ffb3d54/680x482cq70/chocolate-wassant-bread-foto-resep-utama.webp', '2022-06-09 14:04:44', '2022-06-09 07:04:44', '2022-06-09 07:04:44'),
(18, 2, 'Wool Roll Potato Bread', 'wool-roll-potato-bread', 'ms msndnuwundkn e dwjnjndje', 'ahbsxasbjdj ufjhuhxmxz', 'https://i.pinimg.com/564x/e6/44/a7/e644a7df787f64462c08eab629d9cb28.jpg', '2022-06-09 14:04:44', '2022-06-09 07:04:44', '2022-06-09 07:04:44');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
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
-- Indeks untuk tabel `cbeans`
--
ALTER TABLE `cbeans`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cbeans_slug_unique` (`slug`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `kategoris`
--
ALTER TABLE `kategoris`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kategoris_nama_unique` (`nama`),
  ADD UNIQUE KEY `kategoris_slug_unique` (`slug`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `cbeans`
--
ALTER TABLE `cbeans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kategoris`
--
ALTER TABLE `kategoris`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
