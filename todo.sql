-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 15 2022 г., 11:35
-- Версия сервера: 8.0.30
-- Версия PHP: 8.0.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `todo`
--

-- --------------------------------------------------------

--
-- Структура таблицы `list`
--

CREATE TABLE `list` (
  `id` int NOT NULL,
  `id_user` int DEFAULT NULL,
  `active` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `done` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `notdone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `list`
--

INSERT INTO `list` (`id`, `id_user`, `active`, `done`, `notdone`) VALUES
(61, 1, 'Сделать уроки', NULL, NULL),
(62, 1, NULL, NULL, 'Помыть посуду'),
(63, 1, NULL, 'Погулять с собакой', NULL),
(64, 4, NULL, NULL, NULL),
(65, 4, NULL, NULL, NULL),
(66, 2, 'gjgido', NULL, NULL),
(67, 2, 'sjhskjdgh', NULL, NULL),
(68, 4, NULL, NULL, NULL),
(69, 4, NULL, 'Сделать уроки', NULL),
(70, 4, NULL, 'Убраться ', NULL),
(71, 4, NULL, 'Погулять с собакой', NULL),
(72, 4, NULL, NULL, 'Приготовить обед'),
(73, 4, 'Почитать', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`) VALUES
(1, 'test', 'test@mail.ru', '098f6bcd4621d373cade4e832627b4f6'),
(2, 'Павел', 'pavel@mail.ru', 'ef1652b79c940145b600de7a2fe0288e'),
(3, '111', '111@mail.ru', '698d51a19d8a121ce581499d7b701668'),
(4, 'qwerty', 'qwerty@mail.ru', 'd8578edf8458ce06fbc5bb76a58c5ca4'),
(5, 'Павел', 'pavel@mail.ru', 'ef1652b79c940145b600de7a2fe0288e'),
(6, 'Павел', 'pavel@mail.ru', 'ef1652b79c940145b600de7a2fe0288e'),
(7, '1', '1@mail.ru', 'c4ca4238a0b923820dcc509a6f75849b');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `list`
--
ALTER TABLE `list`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `list`
--
ALTER TABLE `list`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
