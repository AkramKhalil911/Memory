-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 04 mrt 2021 om 11:46
-- Serverversie: 10.4.14-MariaDB
-- PHP-versie: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `memory`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `cards`
--

CREATE TABLE `cards` (
  `ID` int(11) NOT NULL,
  `cardBG` varchar(255) NOT NULL,
  `cardShow` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `cards`
--

INSERT INTO `cards` (`ID`, `cardBG`, `cardShow`) VALUES
(1, 'cardBG.jpg', 'cardShow1.jpg'),
(2, 'cardBG.jpg', 'cardShow2.jpg'),
(3, 'cardBG.jpg', 'cardShow3.jpg'),
(4, 'cardBG.jpg', 'cardShow4.jpg'),
(5, 'cardBG.jpg', 'cardShow5.jpg'),
(6, 'cardBG.jpg', 'cardShow6.jpg'),
(7, 'cardBG.jpg', 'cardShow7.jpg'),
(8, 'cardBG.jpg', 'cardShow8.jpg');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `memoryscore`
--

CREATE TABLE `memoryscore` (
  `id` int(12) NOT NULL,
  `naam` varchar(16) DEFAULT NULL,
  `tijd` varchar(40) DEFAULT NULL,
  `highscore` int(12) DEFAULT NULL,
  `flips` int(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `memoryscore`
--

INSERT INTO `memoryscore` (`id`, `naam`, `tijd`, `highscore`, `flips`) VALUES
(1, 'HELLO', '0 minuten 40 seconden', 150, 2);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `cards`
--
ALTER TABLE `cards`
  ADD PRIMARY KEY (`ID`);

--
-- Indexen voor tabel `memoryscore`
--
ALTER TABLE `memoryscore`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `cards`
--
ALTER TABLE `cards`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT voor een tabel `memoryscore`
--
ALTER TABLE `memoryscore`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
