-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 08 Paź 2022, 23:40
-- Wersja serwera: 10.4.20-MariaDB
-- Wersja PHP: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `test`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `movies`
--

CREATE TABLE `movies` (
  `id` int(11) NOT NULL,
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_polish_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_polish_ci NOT NULL,
  `info-about` text CHARACTER SET utf8mb4 COLLATE utf8mb4_polish_ci NOT NULL,
  `poster_vertical` text CHARACTER SET utf8mb4 COLLATE utf8mb4_polish_ci NOT NULL,
  `poster_horizontal` text CHARACTER SET utf8mb4 COLLATE utf8mb4_polish_ci NOT NULL,
  `link` text CHARACTER SET utf16 COLLATE utf16_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `movies`
--

INSERT INTO `movies` (`id`, `name`, `description`, `info-about`, `poster_vertical`, `poster_horizontal`, `link`) VALUES
(1, 'Gwiezdne wojny: część IV – Nowa nadzieja', 'Młody chłopak z farmy, Luke Skywalker, zostaje wrzucony w wir galaktycznych przygód, gdy przechwytuje wezwanie pomocy od uwięzionej księżniczki Lei. Wkrótce wyruszy na śmiałą misję, aby uratować ją ze szponów Dartha Vadera i złego Imperium.', '2 godz. 5 min | 1977 | 12+ | Science fiction, Przygodowy', 'star-wars-episode-iv-new-hope-poster_vertical.jpg', 'star-wars-episode-iv-new-hope-poster_horizontal.jpg', 'https://www.disneyplus.com/pl-pl/movies/gwiezdne-wojny-nowa-nadzieja/12fVeZxD2fWJ'),
(2, 'Gwiezdne wojny: część V – Imperium kontratakuje', 'Po ataku na ich bazę na mroźnej planecie Hoth Rebelianci ratują się ucieczką. Han Solo i Księżniczka Leia wymykają się Imperium. Luke szkoli się pod okiem mistrza Yody, by zmierzyć się z Darthem Vaderem i odkryć straszną prawdę o swojej przeszłości.', '2 godz. 8 min | 1980 | 12+ | Science fiction, Przygodowy', 'star-wars-episode-v-empire-strikes-back-poster_vertical.jpg', 'star-wars-episode-v-empire-strikes-back-poster_horizontal.jpg', 'https://www.disneyplus.com/pl-pl/movies/star-wars-the-empire-strikes-back-episode-v/iqtDTZAewwYl'),
(3, 'Gwiezdne wojny: część VI – Powrót Jedi', 'Imperium chce roznieść Rebelię w pył z pomocą potężniejszej wersji Gwiazdy śmierci. Tymczasem rebeliancka flota szykuje zmasowany atak na tę stację kosmiczną. W obecności Imperatora Luke Skywalker staje do ostatecznego pojedynku z Darthem Vaderem.', '2 godz. 16 min | 1983 | 12+ | Science fiction, Przygodowy', 'star-wars-episode-vi-return-of-the-jedi-poster_vertical.jpg', 'star-wars-episode-vi-return-of-the-jedi-poster_horizontal.jpg', 'https://www.disneyplus.com/pl-pl/movies/gwiezdne-wojny-powrot-jedi/6QGKo5mjDBS8');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
