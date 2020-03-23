-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 19. Mrz 2019 um 14:56
-- Server-Version: 10.1.33-MariaDB
-- PHP-Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `m183-union`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `kontakte`
--

CREATE TABLE `kontakte` (
  `kid` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `vorname` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `kontakte`
--

INSERT INTO `kontakte` (`kid`, `name`, `vorname`) VALUES
(1, 'gurtner', 'theo'),
(2, 'moser', 'susanne'),
(3, 'zahnd', 'frederik');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `user`
--

CREATE TABLE `user` (
  `pid` int(11) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `user`
--

INSERT INTO `user` (`pid`, `username`, `password`) VALUES
(1, 'meier', '12345678'),
(2, 'zoller', '3Utorsoooa'),
(3, 'aeschbacher', '$ERerccsc44'),
(4, 'koller', '123Beorta'),
(5, 'rudiger', '12$.Gutop');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `kontakte`
--
ALTER TABLE `kontakte`
  ADD PRIMARY KEY (`kid`);

--
-- Indizes für die Tabelle `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`pid`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `kontakte`
--
ALTER TABLE `kontakte`
  MODIFY `kid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT für Tabelle `user`
--
ALTER TABLE `user`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
