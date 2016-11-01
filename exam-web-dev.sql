-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Gegenereerd op: 31 okt 2016 om 23:15
-- Serverversie: 5.7.15-0ubuntu0.16.04.1
-- PHP-versie: 7.0.8-0ubuntu0.16.04.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `exam-web-dev`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `contestants`
--

CREATE TABLE `contestants` (
  `id` int(10) UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `adres` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `woonplaats` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ip` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contest_id` int(10) UNSIGNED NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `contestants`
--

INSERT INTO `contestants` (`id`, `code`, `name`, `adres`, `woonplaats`, `ip`, `contest_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '123456789', 'Lander Verschueren', 'Kapelstraat 10', 'Nieuwenrode', '192.168.96.1', 1, NULL, '2016-10-31 21:09:54', '2016-10-31 21:09:54'),
(2, '987654321', 'Anke Verschueren', 'Kapelstraat 10', 'Nieuwenrode', '192.168.96.1', 1, NULL, '2016-10-31 21:09:54', '2016-10-31 21:09:54'),
(3, '654897321', 'Emma Moortgat', 'Kapelstraat 10', 'Nieuwenrode', '192.168.96.1', 1, NULL, '2016-10-31 21:09:54', '2016-10-31 21:09:54'),
(4, '987321654', 'Lander Verschueren', 'Kapelstraat 10', 'Nieuwenrode', '192.168.96.1', 2, NULL, '2016-10-31 21:09:54', '2016-10-31 21:09:54'),
(5, '456987123', 'Anke Verschueren', 'Kapelstraat 10', 'Nieuwenrode', '192.168.96.1', 2, NULL, '2016-10-31 21:09:54', '2016-10-31 21:09:54'),
(6, '321654789', 'Emma Moortgat', 'Kapelstraat 10', 'Nieuwenrode', '192.168.96.1', 2, NULL, '2016-10-31 21:09:54', '2016-10-31 21:09:54');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `contests`
--

CREATE TABLE `contests` (
  `id` int(10) UNSIGNED NOT NULL,
  `winner` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `winning_code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prize` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `contests`
--

INSERT INTO `contests` (`id`, `winner`, `start_date`, `end_date`, `winning_code`, `prize`, `image`, `created_at`, `updated_at`) VALUES
(1, '', '2016-10-17', '2016-10-24', '123456789', 'Koelkast', 'koelkast.png', NULL, NULL),
(2, '', '2016-10-24', '2016-10-31', '456987123', 'Fiets', 'fiets.png', NULL, NULL),
(3, '', '2016-10-31', '2016-11-07', '123789456', 'Laptop', 'laptop.png', NULL, NULL),
(4, '', '2016-11-07', '2016-11-14', '789123456', 'Tablet', 'tablet.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(49, '2014_10_12_000000_create_users_table', 1),
(50, '2014_10_12_100000_create_password_resets_table', 1),
(51, '2016_10_28_154835_contest', 1),
(52, '2016_10_30_134201_contestant', 1);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`id`, `first_name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Lander', 'verschueren@live.nl', '$2y$10$LLyHesUw2PPbb22HuuBD3OFwvicegL8DYvQ3h3d8mrMQ52wSrz7Qa', NULL, NULL, NULL);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `contestants`
--
ALTER TABLE `contestants`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `contestants_code_unique` (`code`),
  ADD KEY `contestants_contest_id_foreign` (`contest_id`);

--
-- Indexen voor tabel `contests`
--
ALTER TABLE `contests`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `contests_winning_code_unique` (`winning_code`);

--
-- Indexen voor tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexen voor tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `contestants`
--
ALTER TABLE `contestants`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT voor een tabel `contests`
--
ALTER TABLE `contests`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT voor een tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `contestants`
--
ALTER TABLE `contestants`
  ADD CONSTRAINT `contestants_contest_id_foreign` FOREIGN KEY (`contest_id`) REFERENCES `contests` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
