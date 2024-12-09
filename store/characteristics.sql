-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: database:3306
-- Время создания: Дек 09 2024 г., 06:31
-- Версия сервера: 8.2.0
-- Версия PHP: 8.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `store`
--

-- --------------------------------------------------------

--
-- Структура таблицы `characteristics`
--

CREATE TABLE `characteristics` (
  `id` int NOT NULL,
  `date_time` datetime DEFAULT NULL,
  `product_id` int DEFAULT NULL,
  `amount` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `characteristics`
--

INSERT INTO `characteristics` (`id`, `date_time`, `product_id`, `amount`) VALUES
(1, '2024-12-12 13:06:13', 1, 30),
(2, '2024-12-04 13:06:13', 2, 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `characteristics`
--
ALTER TABLE `characteristics`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `characteristics`
--
ALTER TABLE `characteristics`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
