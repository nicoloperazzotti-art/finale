-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Set 08, 2026 alle 03:11
-- Versione del server: 10.4.32-MariaDB
-- Versione PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `human_safari`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `prenotazioni`
--

CREATE TABLE `prenotazioni` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `id_viaggio` int(11) NOT NULL,
  `data` date NOT NULL,
  `persone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `prenotazioni`
--

INSERT INTO `prenotazioni` (`id`, `username`, `id_viaggio`, `data`, `persone`) VALUES
(1, 'mazzino', 7, '2026-04-09', 2),
(2, 'maurosa', 4, '2026-04-24', 1),
(3, 'mazzino', 11, '2026-07-15', 4),
(4, 'perazio', 6, '2026-09-27', 10),
(5, 'perazio', 12, '2026-09-29', 9),
(6, 'mario', 10, '2026-09-26', 5);

-- --------------------------------------------------------

--
-- Struttura della tabella `utenti`
--

CREATE TABLE `utenti` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `cognome` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `utenti`
--

INSERT INTO `utenti` (`username`, `password`, `email`, `nome`, `cognome`) VALUES
('maurillo2', 'maurillo222', 'mauripiri@gmail.com', 'Maurizio', 'Pirillo'),
('maurosa', 'maurosa123', 'maurosa@gmail.com', 'Mauro', 'Rosa'),
('mazzino', 'mazzino222', 'mazzitelli@gmail.com', 'Max', 'Mazzi'),
('paolino2', 'pullup2222', 'paolino@gmail.com', 'Paolo', 'Rossi'),
('perazio', 'perazio11', 'perazio@gmail.com', 'Nick', 'Laper');

-- --------------------------------------------------------

--
-- Struttura della tabella `viaggi`
--

CREATE TABLE `viaggi` (
  `id` int(11) NOT NULL,
  `titolo` varchar(255) NOT NULL,
  `tipo` varchar(40) NOT NULL,
  `prezzo` int(11) NOT NULL,
  `descrizione` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `viaggi`
--

INSERT INTO `viaggi` (`id`, `titolo`, `tipo`, `prezzo`, `descrizione`) VALUES
(1, 'Kenya', 'Safari', 2400, 'Due settimane tra Masai Mara e lago Nakuru, con guide locali e campi tendati nella savana.'),
(2, 'Tanzania', 'Safari', 2700, 'Serengeti e cratere di Ngorongoro nel periodo della grande migrazione.'),
(3, 'Botswana', 'Safari', 3100, 'Delta dell Okavango in mokoro, con avvistamento di elefanti e ippopotami.'),
(4, 'Antartide', 'Avventura', 8900, 'Navigazione tra i ghiacci della penisola antartica, colonie di pinguini e balene.'),
(5, 'Patagonia', 'Avventura', 3600, 'Trekking tra Torres del Paine e ghiacciaio Perito Moreno.'),
(6, 'Islanda', 'Avventura', 2200, 'Giro dell isola tra vulcani, cascate e sorgenti termali, con aurora boreale.'),
(7, 'Cina', 'Culturale', 2900, 'Pechino, Xian e i guerrieri di terracotta, con tratto sulla Grande Muraglia.'),
(8, 'Uzbekistan', 'Culturale', 1900, 'Le citta della via della seta: Samarcanda, Bukhara e Khiva.'),
(9, 'Egitto', 'Culturale', 1700, 'Il Cairo, Luxor e crociera sul Nilo tra i templi della valle dei re.'),
(11, 'Maldive', 'Mare', 2500, 'Atollo di Ari, soggiorno in resort con immersioni sulla barriera corallina.'),
(12, 'Seychelles', 'Mare', 2800, 'Mahe, Praslin e La Digue, tra spiagge di granito e riserve naturali.'),
(14, 'Courmayer', 'Montagna', 700, ' Viaggio in montagna tra Courmayer e altre valli.');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `prenotazioni`
--
ALTER TABLE `prenotazioni`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `utenti`
--
ALTER TABLE `utenti`
  ADD PRIMARY KEY (`username`);

--
-- Indici per le tabelle `viaggi`
--
ALTER TABLE `viaggi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `prenotazioni`
--
ALTER TABLE `prenotazioni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT per la tabella `viaggi`
--
ALTER TABLE `viaggi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
