-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июл 09 2019 г., 17:15
-- Версия сервера: 5.7.19
-- Версия PHP: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `h12`
--

-- --------------------------------------------------------

--
-- Структура таблицы `ad_reviews`
--

CREATE TABLE `ad_reviews` (
  `id` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  `fio` varchar(255) DEFAULT NULL,
  `phone` text,
  `email` varchar(255) DEFAULT NULL,
  `message` text,
  `status` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `ad_reviews`
--

INSERT INTO `ad_reviews` (`id`, `date`, `fio`, `phone`, `email`, `message`, `status`) VALUES
(3, '2019-07-09', 'testov test', '777555555', 'testov@mail.ru', 'Привет, это отзыв', 0),
(4, '2019-07-09', 'testov test', '777555555', 'testov@mail.ru', 'Привет, это отзыв', 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `ad_reviews`
--
ALTER TABLE `ad_reviews`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `ad_reviews`
--
ALTER TABLE `ad_reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
