-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3309
-- Время создания: Янв 23 2022 г., 18:38
-- Версия сервера: 8.0.24
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `shopgb`
--

-- --------------------------------------------------------

--
-- Структура таблицы `basket`
--

CREATE TABLE `basket` (
  `id` int NOT NULL,
  `img` varchar(50) NOT NULL,
  `name` varchar(20) NOT NULL,
  `price` varchar(10) NOT NULL,
  `color` text NOT NULL,
  `size` varchar(10) NOT NULL,
  `count` int NOT NULL DEFAULT '1',
  `data_create` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` int NOT NULL,
  `good_id` int NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  `tel_user` varchar(20) NOT NULL,
  `email_user` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `basket`
--

INSERT INTO `basket` (`id`, `img`, `name`, `price`, `color`, `size`, `count`, `data_create`, `user_id`, `good_id`, `status`, `tel_user`, `email_user`) VALUES
(30, 'card5.png', 'Девушка', '700', 'белый', '48', 1, '2022-01-20 16:25:34', 5, 8, 2, '89633534676', 's.mi@l.com'),
(31, 'card2.png', 'Туфли', '200', 'чёрный', '38', 4, '2022-01-20 16:30:08', 5, 5, 3, '89633534676', 's.mi@l.com'),
(33, 'card2.png', 'Туфли', '200', 'чёрный', '38', 1, '2022-01-20 18:05:09', 4, 5, 1, '89633534676', 's.mi@l.com'),
(34, 'card5.png', 'Девушка', '700', 'белый', '48', 1, '2022-01-20 18:05:35', 5, 8, 1, '89633534676', 's.mi@l.com'),
(35, 'card2.png', 'Туфли', '200', 'чёрный', '38', 1, '2022-01-22 17:47:54', 1, 5, 1, '0', 'em@il.ru');

-- --------------------------------------------------------

--
-- Структура таблицы `collection`
--

CREATE TABLE `collection` (
  `id` int NOT NULL,
  `name` int NOT NULL,
  `img` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `comment`
--

CREATE TABLE `comment` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `text` text NOT NULL,
  `data_create` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `gender`
--

CREATE TABLE `gender` (
  `id` int NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `goods`
--

CREATE TABLE `goods` (
  `id` int NOT NULL,
  `name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `price` int DEFAULT NULL,
  `collection_id` int DEFAULT NULL,
  `color` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `size` int DEFAULT NULL,
  `img` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `data_create` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `views` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `goods`
--

INSERT INTO `goods` (`id`, `name`, `description`, `price`, `collection_id`, `color`, `size`, `img`, `data_create`, `views`) VALUES
(4, 'Куртка', 'Compellingly actualize fully researched processes before proactive outsourcing. Progressively syndicate collaborative architectures before cutting-edge services. Completely visualize parallel core competencies rather than exceptional portals.', 275, NULL, 'синий', 48, 'card1.png', '2022-01-15 12:11:53', NULL),
(5, 'Туфли', 'Compellingly actualize fully researched processes before proactive outsourcing. Progressively syndicate collaborative architectures before cutting-edge services. Completely visualize parallel core competencies rather than exceptional portals.', 200, NULL, 'чёрный', 38, 'card2.png', '2022-01-15 12:14:19', NULL),
(6, 'Шорты', 'Compellingly actualize fully researched processes before proactive outsourcing. Progressively syndicate collaborative architectures before cutting-edge services. Completely visualize parallel core competencies rather than exceptional portals.', 155, NULL, 'белый', 48, 'card3.png', '2022-01-15 12:15:16', NULL),
(7, 'Штаны', 'Compellingly actualize fully researched processes before proactive outsourcing. Progressively syndicate collaborative architectures before cutting-edge services. Completely visualize parallel core competencies rather than exceptional portals.', 275, NULL, 'бежевый', 48, 'card4.png', '2022-01-15 12:17:25', NULL),
(8, 'Девушка', 'Compellingly actualize fully researched processes before proactive outsourcing. Progressively syndicate collaborative architectures before cutting-edge services. Completely visualize parallel core competencies rather than exceptional portals.', 700, NULL, 'белый', 48, 'card5.png', '2022-01-15 12:18:49', NULL),
(9, 'Очки', 'Compellingly actualize fully researched processes before proactive outsourcing. Progressively syndicate collaborative architectures before cutting-edge services. Completely visualize parallel core competencies rather than exceptional portals.', 109, NULL, 'прозрачный', 3, 'card6.png', '2022-01-15 12:19:57', NULL),
(10, 'Пиджак', 'Compellingly actualize fully researched processes before proactive outsourcing. Progressively syndicate collaborative architectures before cutting-edge services. Completely visualize parallel core competencies rather than exceptional portals.', 225, NULL, 'голубой', 46, 'card5.png', '2022-01-15 12:50:34', NULL),
(11, 'Костюм', 'Compellingly actualize fully researched processes before proactive outsourcing. Progressively syndicate collaborative architectures before cutting-edge services. Completely visualize parallel core competencies rather than exceptional portals.', 324, NULL, 'чёрный', 46, 'card2.png', '2022-01-15 12:52:13', NULL),
(12, 'Толстовка', 'Compellingly actualize fully researched processes before proactive outsourcing. Progressively syndicate collaborative architectures before cutting-edge services. Completely visualize parallel core competencies rather than exceptional portals.', 123, NULL, 'чёрно-синий', 50, 'card3.png', '2022-01-15 12:53:18', NULL),
(13, '13', '13 13 13', 13, NULL, '13', 13, 'slide.png', '2022-01-23 17:44:01', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `name` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `email` varchar(30) NOT NULL,
  `pass` text NOT NULL,
  `data_create` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `tel` varchar(20) NOT NULL,
  `role` int DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `pass`, `data_create`, `tel`, `role`) VALUES
(1, 'ADMIN', 'em@il.ru', '827ccb0eea8a706c4c34a16891f84e7b', '2022-01-15 17:26:51', '0', 1),
(2, 'Витя', 'notem@il.ru', '827ccb0eea8a706c4c34a16891f84e7b', '2022-01-15 17:27:56', '0', 0),
(4, '12', '12@34.re', '25d55ad283aa400af464c76d713c07ad', '2022-01-17 08:28:16', '34', 0),
(5, 'Сеhutq Михайлов', 's.mi@l.com', '25d55ad283aa400af464c76d713c07ad', '2022-01-19 15:13:55', '89633534676', 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `basket`
--
ALTER TABLE `basket`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `collection`
--
ALTER TABLE `collection`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `gender`
--
ALTER TABLE `gender`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `goods`
--
ALTER TABLE `goods`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `basket`
--
ALTER TABLE `basket`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT для таблицы `collection`
--
ALTER TABLE `collection`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `gender`
--
ALTER TABLE `gender`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `goods`
--
ALTER TABLE `goods`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
