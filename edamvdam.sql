-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 03 feb 2017 om 12:19
-- Serverversie: 5.7.14
-- PHP-versie: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `edamvdam`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `associations`
--

CREATE TABLE `associations` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_general_mysql500_ci NOT NULL,
  `kind` varchar(255) COLLATE utf8_general_mysql500_ci NOT NULL,
  `city` varchar(255) COLLATE utf8_general_mysql500_ci NOT NULL,
  `website` varchar(255) COLLATE utf8_general_mysql500_ci NOT NULL,
  `phonenumber` varchar(255) COLLATE utf8_general_mysql500_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1=Active, 0=Block'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `events`
--

INSERT INTO `events` (`id`, `title`, `date`, `created`, `modified`, `status`) VALUES
(1, 'Internet of Things World Forum', '2016-05-12', '2016-05-09 06:15:17', '2016-05-09 06:15:17', 1),
(2, 'The Future of Money and Technology Summit', '2016-05-26', '2016-05-09 06:15:17', '2016-05-09 06:15:17', 1),
(3, 'Chrome Dev Summit', '2016-05-26', '2016-05-09 06:15:17', '2016-05-09 06:15:17', 1),
(4, 'The Lean Startup Conference', '2016-05-17', '2016-05-09 06:15:17', '2016-05-09 06:15:17', 1),
(5, 'Web Submit for Developers', '2016-05-17', '2016-05-09 06:15:17', '2016-05-09 06:15:17', 1),
(6, 'Adolf hitler', '2017-02-03', '2017-02-02 11:09:57', '2017-02-02 11:09:57', 1),
(7, 'Hitler smaakt lekker', '2017-02-05', '2017-02-02 11:12:36', '2017-02-02 11:12:36', 1),
(8, 'Goedemiddag', '2017-02-12', '2017-02-02 11:13:27', '2017-02-02 11:13:27', 1),
(9, 'ochtend', '2017-02-12', '2017-02-02 11:13:37', '2017-02-02 11:13:37', 1);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `locations`
--

CREATE TABLE `locations` (
  `id` int(11) NOT NULL,
  `Name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_mysql500_ci NOT NULL,
  `City` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_mysql500_ci NOT NULL,
  `Type` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_mysql500_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_general_mysql500_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_general_mysql500_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_general_mysql500_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_general_mysql500_ci NOT NULL,
  `function` varchar(255) COLLATE utf8_general_mysql500_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `email`, `status`, `function`) VALUES
(1, 'nick', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 'nickdeenik@gmail.com', 'in afwachting', 'admin'),
(2, 'nick', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 'nickdeenik@gmail.com', 'in afwachting', 'admin'),
(3, 'nick', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 'nickdeenik@gmail.com', 'in afwachting', 'admin'),
(4, 'nick', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 'nickdeenik@gmail.com', 'in afwachting', 'admin'),
(5, 'nick', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 'nickdeenik@gmail.com', 'in afwachting', 'admin'),
(6, 'nick', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 'nickdeenik@gmail.com', 'in afwachting', 'admin'),
(7, 'nick', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 'nickdeenik@gmail.com', 'in afwachting', 'admin'),
(8, 'nick', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 'nickdeenik@gmail.com', 'in afwachting', 'admin'),
(9, 'nick', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 'nickdeenik@gmail.com', 'in afwachting', 'admin'),
(10, 'nick', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 'nickdeenik@gmail.com', 'in afwachting', 'admin'),
(11, 'nick', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 'nickdeenik@gmail.com', 'in afwachting', 'admin'),
(12, 'nick', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 'nickdeenik@gmail.com', 'in afwachting', 'admin'),
(13, 'nick', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 'nickdeenik@gmail.com', 'in afwachting', 'admin'),
(14, 'nick', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 'nickdeenik@gmail.com', 'in afwachting', 'admin'),
(15, 'nick', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 'nickdeenik@gmail.com', 'in afwachting', 'admin');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `associations`
--
ALTER TABLE `associations`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `associations`
--
ALTER TABLE `associations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT voor een tabel `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT voor een tabel `locations`
--
ALTER TABLE `locations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
