-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 23 Cze 2022, 13:32
-- Wersja serwera: 10.4.24-MariaDB
-- Wersja PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `hurtownia`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `klienci`
--

CREATE TABLE `klienci` (
  `id` int(11) NOT NULL,
  `Typy_id` int(11) DEFAULT NULL,
  `imie` text DEFAULT NULL,
  `nazwisko` text DEFAULT NULL,
  `zdjecie` varchar(20) DEFAULT NULL,
  `punkty` int(11) DEFAULT NULL,
  `adres` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `klienci`
--

INSERT INTO `klienci` (`id`, `Typy_id`, `imie`, `nazwisko`, `zdjecie`, `punkty`, `adres`) VALUES
(1, 1, 'aaa', 'aaaa', 'Nowak.jpg', 2, NULL),
(2, 2, 'bbb', 'bbbb', 'Janusz.jpg', 1, NULL),
(3, 2, 'ccc', 'cccc', 'Nowak.jpg', 4, NULL),
(4, 1, 'ddd', 'dddd', 'Avatar.jpg', 3, NULL),
(5, 1, 'eee', 'eeee', 'Avatar.jpg', 2, NULL),
(6, 3, 'dsa', 'dsa', 'Avatar.jpg', 43, NULL);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `opinie`
--

CREATE TABLE `opinie` (
  `id` int(11) NOT NULL,
  `Klienci_id` int(11) DEFAULT NULL,
  `opinia` text DEFAULT NULL,
  `cena` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `opinie`
--

INSERT INTO `opinie` (`id`, `Klienci_id`, `opinia`, `cena`) VALUES
(1, 1, 'git', 20),
(2, 2, 'ok', 11),
(3, 2, 'dobre', 1),
(4, 6, 'nawet nawet', 33);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `typy`
--

CREATE TABLE `typy` (
  `id` int(11) NOT NULL,
  `nazwa` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `typy`
--

INSERT INTO `typy` (`id`, `nazwa`) VALUES
(1, 'żelazko'),
(2, 'stal'),
(3, 'owoce');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `klienci`
--
ALTER TABLE `klienci`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `opinie`
--
ALTER TABLE `opinie`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `typy`
--
ALTER TABLE `typy`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `klienci`
--
ALTER TABLE `klienci`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT dla tabeli `opinie`
--
ALTER TABLE `opinie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT dla tabeli `typy`
--
ALTER TABLE `typy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
