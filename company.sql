-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 03 2019 г., 12:37
-- Версия сервера: 5.6.43
-- Версия PHP: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `company`
--

-- --------------------------------------------------------

--
-- Структура таблицы `comp`
--

CREATE TABLE `comp` (
  `id` int(11) NOT NULL,
  `name_company` varchar(255) NOT NULL,
  `info_company` varchar(255) NOT NULL,
  `mail_company` varchar(255) NOT NULL,
  `adres_company` varchar(255) NOT NULL,
  `fhone` varchar(255) NOT NULL,
  `internet_adres_company` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `comp`
--

INSERT INTO `comp` (`id`, `name_company`, `info_company`, `mail_company`, `adres_company`, `fhone`, `internet_adres_company`) VALUES
(1, 'фывфвы', 'фывфывфывфыв', 'фывфывфывфыв', 'фывфыв', 'фывфыв', 'фвыфыв'),
(2, 'фывфвы', 'фывфывфывфыв', 'фывфывфывфыв', 'фывфыв', 'фывфыв', 'фвыфыв');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `comp`
--
ALTER TABLE `comp`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `comp`
--
ALTER TABLE `comp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
