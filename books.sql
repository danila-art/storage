-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 13 2019 г., 12:44
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
-- База данных: `books`
--

-- --------------------------------------------------------

--
-- Структура таблицы `apartament`
--

CREATE TABLE `apartament` (
  `apartament_id` int(11) NOT NULL,
  `house_id` int(11) NOT NULL,
  `apartament` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `authors`
--

CREATE TABLE `authors` (
  `author_id` int(11) NOT NULL,
  `author` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `book`
--

CREATE TABLE `book` (
  `isbn` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `buyers`
--

CREATE TABLE `buyers` (
  `number_buyers` int(11) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `patronymic` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `city`
--

CREATE TABLE `city` (
  `city_id` int(11) NOT NULL,
  `number_buyers` int(11) NOT NULL,
  `city` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `house`
--

CREATE TABLE `house` (
  `house_id` int(11) NOT NULL,
  `street_id` int(11) NOT NULL,
  `street` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `index_adress`
--

CREATE TABLE `index_adress` (
  `index_id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `index_adres` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `interval1`
--

CREATE TABLE `interval1` (
  `isbn` int(11) NOT NULL,
  `author_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `interval2`
--

CREATE TABLE `interval2` (
  `isbn` int(11) NOT NULL,
  `number_buyers` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `purchases`
--

CREATE TABLE `purchases` (
  `number_buyers` int(11) NOT NULL,
  `isbn` int(11) NOT NULL,
  `date_of_purchase` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `street`
--

CREATE TABLE `street` (
  `street_id` int(11) NOT NULL,
  `index_id` int(11) NOT NULL,
  `city` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `apartament`
--
ALTER TABLE `apartament`
  ADD PRIMARY KEY (`apartament_id`),
  ADD KEY `house_id` (`house_id`);

--
-- Индексы таблицы `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`author_id`);

--
-- Индексы таблицы `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`isbn`);

--
-- Индексы таблицы `buyers`
--
ALTER TABLE `buyers`
  ADD PRIMARY KEY (`number_buyers`);

--
-- Индексы таблицы `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`city_id`),
  ADD KEY `index_id` (`number_buyers`),
  ADD KEY `number_buyers` (`number_buyers`);

--
-- Индексы таблицы `house`
--
ALTER TABLE `house`
  ADD PRIMARY KEY (`house_id`),
  ADD KEY `street_id` (`street_id`);

--
-- Индексы таблицы `index_adress`
--
ALTER TABLE `index_adress`
  ADD PRIMARY KEY (`index_id`),
  ADD KEY `number_buyers` (`city_id`);

--
-- Индексы таблицы `interval1`
--
ALTER TABLE `interval1`
  ADD KEY `isbn` (`isbn`),
  ADD KEY `author_id` (`author_id`);

--
-- Индексы таблицы `interval2`
--
ALTER TABLE `interval2`
  ADD KEY `isbn` (`isbn`),
  ADD KEY `number_buyers` (`number_buyers`);

--
-- Индексы таблицы `purchases`
--
ALTER TABLE `purchases`
  ADD KEY `isbn` (`isbn`),
  ADD KEY `number_buyers` (`number_buyers`);

--
-- Индексы таблицы `street`
--
ALTER TABLE `street`
  ADD PRIMARY KEY (`street_id`),
  ADD KEY `city_id` (`index_id`);

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `apartament`
--
ALTER TABLE `apartament`
  ADD CONSTRAINT `apartament_ibfk_1` FOREIGN KEY (`house_id`) REFERENCES `house` (`house_id`);

--
-- Ограничения внешнего ключа таблицы `city`
--
ALTER TABLE `city`
  ADD CONSTRAINT `city_ibfk_1` FOREIGN KEY (`number_buyers`) REFERENCES `buyers` (`number_buyers`);

--
-- Ограничения внешнего ключа таблицы `house`
--
ALTER TABLE `house`
  ADD CONSTRAINT `house_ibfk_1` FOREIGN KEY (`street_id`) REFERENCES `street` (`street_id`);

--
-- Ограничения внешнего ключа таблицы `index_adress`
--
ALTER TABLE `index_adress`
  ADD CONSTRAINT `index_adress_ibfk_1` FOREIGN KEY (`city_id`) REFERENCES `city` (`city_id`);

--
-- Ограничения внешнего ключа таблицы `interval1`
--
ALTER TABLE `interval1`
  ADD CONSTRAINT `interval1_ibfk_1` FOREIGN KEY (`author_id`) REFERENCES `authors` (`author_id`),
  ADD CONSTRAINT `interval1_ibfk_2` FOREIGN KEY (`isbn`) REFERENCES `book` (`isbn`);

--
-- Ограничения внешнего ключа таблицы `interval2`
--
ALTER TABLE `interval2`
  ADD CONSTRAINT `interval2_ibfk_1` FOREIGN KEY (`isbn`) REFERENCES `book` (`isbn`),
  ADD CONSTRAINT `interval2_ibfk_2` FOREIGN KEY (`number_buyers`) REFERENCES `buyers` (`number_buyers`);

--
-- Ограничения внешнего ключа таблицы `purchases`
--
ALTER TABLE `purchases`
  ADD CONSTRAINT `purchases_ibfk_2` FOREIGN KEY (`number_buyers`) REFERENCES `buyers` (`number_buyers`);

--
-- Ограничения внешнего ключа таблицы `street`
--
ALTER TABLE `street`
  ADD CONSTRAINT `street_ibfk_1` FOREIGN KEY (`index_id`) REFERENCES `index_adress` (`index_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
