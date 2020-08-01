-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 12 Gru 2018, 12:22
-- Wersja serwera: 10.1.25-MariaDB
-- Wersja PHP: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `esp`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `data_from_engine`
--

CREATE TABLE `data_from_engine` (
  `id` int(11) NOT NULL,
  `ip` text NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `temp` float NOT NULL,
  `speed` int(11) NOT NULL,
  `value` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `data_from_engine`
--

INSERT INTO `data_from_engine` (`id`, `ip`, `date`, `time`, `temp`, `speed`, `value`) VALUES
(1, '192.168.2.101', '2018-02-08', '18:17:11', 78, 1689, 5689),
(2, '192.168.2.102', '2018-01-11', '18:03:26', -127, 0, 0),
(3, '192.168.2.103', '2018-01-11', '18:03:26', -127, 0, 0),
(4, '192.168.2.104', '2018-01-11', '18:03:26', -127, 0, 0),
(5, '192.168.2.105', '2018-01-11', '18:03:26', -127, 0, 3788),
(6, '192.168.2.106', '2018-01-11', '18:03:26', 69, 1589, 3788),
(7, '192.168.2.107', '2018-01-11', '18:03:26', -127, 0, 3788),
(8, '192.168.2.108', '2018-01-11', '18:03:26', -127, 0, 3788),
(9, '192.168.2.109', '2018-01-11', '18:03:26', 44, 2569, 3788),
(10, '192.168.2.110', '2018-01-11', '18:03:26', -127, 0, 3788);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `data_to_engine`
--

CREATE TABLE `data_to_engine` (
  `id` int(11) NOT NULL,
  `limit_engine` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `data_to_engine`
--

INSERT INTO `data_to_engine` (`id`, `limit_engine`) VALUES
(1, 0),
(2, 0),
(3, 5000),
(4, 0),
(5, 0),
(6, 0),
(7, 0),
(8, 0),
(9, 0),
(10, 0);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `data_from_engine`
--
ALTER TABLE `data_from_engine`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_to_engine`
--
ALTER TABLE `data_to_engine`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
