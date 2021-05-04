-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Mag 04, 2021 alle 21:35
-- Versione del server: 10.4.18-MariaDB
-- Versione PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbmagda`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `lemiepiante`
--

CREATE TABLE `lemiepiante` (
  `pianteID` int(11) NOT NULL,
  `utentiID` varchar(11) DEFAULT NULL,
  `specie` varchar(128) DEFAULT NULL,
  `nickname` varchar(128) NOT NULL,
  `inizio` date NOT NULL,
  `intervallo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `lemiepiante`
--

INSERT INTO `lemiepiante` (`pianteID`, `utentiID`, `specie`, `nickname`, `inizio`, `intervallo`) VALUES
(12, '8', 'Ciclamino', 'kanye', '2021-05-04', 3),
(13, '8', 'Geranio', 'travis', '2021-05-04', 3),
(14, '8', 'Rosa', 'lil uzi', '2021-05-04', 3),
(15, '8', 'Lavanda', 'Juice', '2021-05-04', 5),
(16, '8', 'Photinia', 'bones', '2021-05-04', 10);

-- --------------------------------------------------------

--
-- Struttura della tabella `newsletter`
--

CREATE TABLE `newsletter` (
  `email` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struttura della tabella `piante`
--

CREATE TABLE `piante` (
  `specie` varchar(128) NOT NULL,
  `intervallo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `piante`
--

INSERT INTO `piante` (`specie`, `intervallo`) VALUES
('Ciclamino', 3),
('Erica', 2),
('Falso papiro', 1),
('Geranio', 3),
('Lavanda', 5),
('Orchidea', 7),
('Photinia', 10),
('Rosa', 3),
('Rosmarino', 9),
('Salvia', 5),
('Valeriana rossa', 4),
('Violetta africana', 6);

-- --------------------------------------------------------

--
-- Struttura della tabella `utenti`
--

CREATE TABLE `utenti` (
  `utentiID` int(11) NOT NULL,
  `nome` varchar(128) NOT NULL,
  `cognome` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `utentepassword` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `utenti`
--


--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `lemiepiante`
--
ALTER TABLE `lemiepiante`
  ADD PRIMARY KEY (`pianteID`);

--
-- Indici per le tabelle `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`email`);

--
-- Indici per le tabelle `piante`
--
ALTER TABLE `piante`
  ADD PRIMARY KEY (`specie`);

--
-- Indici per le tabelle `utenti`
--
ALTER TABLE `utenti`
  ADD PRIMARY KEY (`utentiID`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `lemiepiante`
--
ALTER TABLE `lemiepiante`
  MODIFY `pianteID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT per la tabella `utenti`
--
ALTER TABLE `utenti`
  MODIFY `utentiID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
