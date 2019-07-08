-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июл 08 2019 г., 09:43
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
-- Структура таблицы `ad_faq`
--

CREATE TABLE `ad_faq` (
  `id` int(11) NOT NULL,
  `date_post` date DEFAULT NULL,
  `fio` varchar(255) NOT NULL,
  `q` text NOT NULL,
  `a` text,
  `status` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `ad_faq`
--

INSERT INTO `ad_faq` (`id`, `date_post`, `fio`, `q`, `a`, `status`) VALUES
(16, '2019-07-08', 'test', 'Тестовый вопрос', 'Тестовый ответ', 1),
(17, '2019-07-08', 'Test 2', 'Втрой тестовый вопрос', 'Второй тестовый ответ', 1),
(18, '2019-07-08', 'Тест 3', 'Неактивный вопрос', 'Неактивный ответ', 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `ad_faq`
--
ALTER TABLE `ad_faq`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `ad_faq`
--
ALTER TABLE `ad_faq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
