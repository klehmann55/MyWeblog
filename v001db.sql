-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 06. Dez 2019 um 14:06
-- Server-Version: 10.1.40-MariaDB
-- PHP-Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `v001db`
--
CREATE DATABASE IF NOT EXISTS `v001db` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `v001db`;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `qf1x_blog`
--

DROP TABLE IF EXISTS `qf1x_blog`;
CREATE TABLE `qf1x_blog` (
  `bid` int(10) UNSIGNED NOT NULL,
  `titel` varchar(100) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `content` varchar(500) NOT NULL,
  `author` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `qf1x_blog`
--

INSERT INTO `qf1x_blog` (`bid`, `titel`, `created`, `content`, `author`) VALUES
(1, 'Erster !', '2019-12-05 09:35:14', 'Juhu ich darf erster sein und schreib hier einfach mak feucht fröhlich drauf los zu schreiben.\r\nJetzt gehts los, wir holen die Löcher ausm Käse und tanzen eine riesenlange Bolognaise - blanke Näse - jetzt fängt die Stimmung an! ~*', 14),
(2, 'holy', '2019-12-05 09:37:41', '...nobel entwickelt sich die welt ()\r\n{\r\nexeption : tall guy with... charme and motivation\r\n}', 15),
(3, 'tall pail guy here again', '2019-12-05 09:41:42', '.....my name is Paul and i can look pretty', 15),
(4, 'Paul..', '2019-12-05 09:46:22', '.. you look always pretty ! \r\n\r\nHappy Birthdays Paul ! Paul ! Paul ! \r\n\r\nHoch soll er leben. Unendlich Mal Hoch !\r\n\r\nIch wünsche dir von ganzem Herzen nur das Beste vom Besten,\r\nund mögen all deine Träume, Wünsche und Sehnsüchte zum Wohle aller\r\nin Erfüllung gehen ~*', 16),
(5, '5. Beitrag', '2019-12-05 14:02:05', 'Nachträglich eingetragen', 18),
(6, 'test', '2019-12-05 11:05:19', 'testtttttw', 17),
(7, 'kleiner Gastbeitrag', '2019-12-05 12:04:18', 'Media-Query test.......... mal gucken wo genau er umbricht', 14),
(8, 'KLehmann am Start..', '2019-12-05 12:07:11', '..er rennt..\r\n..und läuft als erster über die Ziellinie ! Die Menge jubelt *yeah*', 18),
(9, 'Ideen für diese Website:', '2019-12-05 13:58:45', '- Kurznotizen\r\n- Tagebuch-Site\r\n- Bewerbungsprofil\r\n- Frage-Antwort-Spiel (random) siehe: Ilias MTA\'s\r\n', 18),
(10, 'Testi Test..', '2019-12-06 07:34:21', 'testet die Beitragsfunktion', 13),
(11, 'auch nochmal...', '2019-12-06 07:35:06', '..ein Test zum testen', 14);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `qf1x_users`
--

DROP TABLE IF EXISTS `qf1x_users`;
CREATE TABLE `qf1x_users` (
  `uid` int(10) UNSIGNED NOT NULL,
  `fname` varchar(60) NOT NULL,
  `lname` varchar(60) NOT NULL,
  `email` varchar(255) NOT NULL,
  `uname` varchar(60) NOT NULL,
  `pswd` varchar(255) NOT NULL,
  `rdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `uip` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='User data';

--
-- Daten für Tabelle `qf1x_users`
--

INSERT INTO `qf1x_users` (`uid`, `fname`, `lname`, `email`, `uname`, `pswd`, `rdate`, `uip`) VALUES
(5, 'Hallo', 'Die Waldfee', 'hallo@diewaldfee.de', 'hallo', '$2y$10$HGywfOQVDBc78zJFO/LeduhBbzVXmWoQtos5U9QBxI2V1l9mWOGQW', '2019-11-21 09:40:52', '::1'),
(10, 'first', 'last', 'user@user.de', 'user', '$2y$10$mcHpKxDHUc75qQr8KRTruebfnF3/3IvV3zZU8hFJb27nyRGBFnqPS', '2019-11-30 15:34:28', '127.0.0.1'),
(13, 'test', 'test', 'test@test.de', 'test', '$2y$10$apo1OMPndabPZie3hdQODu/EBDEHtGdrYyYBjeX4jqWCT778lDrMO', '2019-12-03 13:53:43', '127.0.0.1'),
(14, 'Gasti', 'Gast', 'gast@gast.de', 'gast', '$2y$10$DN/MbtuVoZgOZhucYACqMehib4XaThTV0XyL4QdnGrclYKNfPQUZq', '2019-12-03 13:58:39', '127.0.0.1'),
(15, 'the right guy', 'taking any chance', 'good.peson@onthisworld.de', 'GP', '$2y$10$qrayKUWlBous2ZOUVMDG6OPH0FC8er.REGwb20sVsXoi0Q6ibuUZy', '2019-12-05 09:36:47', '::1'),
(16, 'Kev', 'Licht', 'lichtkind@licht.de', 'lichtkind', '$2y$10$o0qYLzgcI25iV25t41p.XeeIiruaqumTzAi2AARp54MMkEiycnteG', '2019-12-05 09:43:23', '::1'),
(17, 'Sascha', 'Fröhlich', 'saf@web.de', 'safrö', '$2y$10$rldfRxLvzjEzBKrtEAYe6.my.16JuAxxt3B6oI976MU2fF4KRBTVm', '2019-12-05 11:03:48', '::1'),
(18, 'Kevin', 'Lehmann', 'klehmann@klehmann.de', 'KLehmann', '$2y$10$1fbIu8bVH2h/tvYEfjgBEeUnQaSDyoOqJ2oziCIn.Ir6OaRN1qNZS', '2019-12-05 12:06:01', '::1'),
(19, 'Mario', 'May', 'dmcmay@web.de', 'mariom', '$2y$10$gupv1ju7xkrn0joGtBJyBejoMtjS2vo2aTeA7DbKR5nvynsaSJb12', '2019-12-05 21:36:42', '::1');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `qf1x_blog`
--
ALTER TABLE `qf1x_blog`
  ADD PRIMARY KEY (`bid`),
  ADD KEY `fk_ref_author` (`author`) USING BTREE;

--
-- Indizes für die Tabelle `qf1x_users`
--
ALTER TABLE `qf1x_users`
  ADD PRIMARY KEY (`uid`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `uname` (`uname`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `qf1x_blog`
--
ALTER TABLE `qf1x_blog`
  MODIFY `bid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT für Tabelle `qf1x_users`
--
ALTER TABLE `qf1x_users`
  MODIFY `uid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints der exportierten Tabellen
--

--
-- Constraints der Tabelle `qf1x_blog`
--
ALTER TABLE `qf1x_blog`
  ADD CONSTRAINT `fk_ref_author` FOREIGN KEY (`author`) REFERENCES `qf1x_users` (`uid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
