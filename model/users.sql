-- phpMyAdmin SQL Dump
-- version 4.7.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Erstellungszeit: 22. Apr 2021 um 09:41
-- Server-Version: 10.3.22-MariaDB-1:10.3.22+maria~stretch
-- PHP-Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `leowidmer`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `users`
--

CREATE TABLE `users` (
  `user_id` int(8) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pw` varchar(255) NOT NULL,
  `short` varchar(5) NOT NULL DEFAULT 'NEU',
  `usrgroup` varchar(5) NOT NULL DEFAULT 'USER'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `users`
--

INSERT INTO `users` (`user_id`, `email`, `pw`, `short`, `usrgroup`) VALUES
(1, 'leo.widmer@edu.tbz.ch', '7cfd4fc0177beb55ff0eb519cc691a7452dc88c48456c8abedb0c8ac1fef5c1a', 'LWI', 'ADMIN'),
(11, 'jonas.zehnder@edu.tbz.ch', '807a536aea81f4e80dbb00594fbd4d58202e16b9607e83fe1e8e49badc26cda8', 'NEU', 'USER'),
(12, 'sus@amog.us', '01000f8e007841fbc847f67a7af7dc7741a1edcfe8e5aa636daf6b6c46b1e579', 'NEU', 'USER'),
(13, 'paul@paul.russianfederation', 'ef797c8118f02dfb649607dd5d3f8c7623048c9c063d532cc95c5ed7a898a64f', 'PAU', 'USER');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
