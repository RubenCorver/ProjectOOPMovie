-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 21 feb 2020 om 12:07
-- Serverversie: 10.1.37-MariaDB
-- PHP-versie: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oopmovie`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `movie`
--

CREATE TABLE `movie` (
  `idfilm` int(11) NOT NULL,
  `imdbid` int(11) NOT NULL,
  `seen` tinyint(4) DEFAULT NULL,
  `rating` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `movie_has_user`
--

CREATE TABLE `movie_has_user` (
  `movie_idfilm` int(11) NOT NULL,
  `user_iduser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `user`
--

CREATE TABLE `user` (
  `iduser` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`idfilm`);

--
-- Indexen voor tabel `movie_has_user`
--
ALTER TABLE `movie_has_user`
  ADD PRIMARY KEY (`movie_idfilm`,`user_iduser`),
  ADD KEY `fk_movie_has_user_user1_idx` (`user_iduser`),
  ADD KEY `fk_movie_has_user_movie_idx` (`movie_idfilm`);

--
-- Indexen voor tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `movie`
--
ALTER TABLE `movie`
  MODIFY `idfilm` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `user`
--
ALTER TABLE `user`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT;

--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `movie_has_user`
--
ALTER TABLE `movie_has_user`
  ADD CONSTRAINT `fk_movie_has_user_movie` FOREIGN KEY (`movie_idfilm`) REFERENCES `mydb`.`movie` (`idfilm`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_movie_has_user_user1` FOREIGN KEY (`user_iduser`) REFERENCES `user` (`iduser`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
