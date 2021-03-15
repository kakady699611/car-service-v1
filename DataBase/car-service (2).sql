-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 15 2021 г., 13:56
-- Версия сервера: 10.3.22-MariaDB
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `car-service`
--

-- --------------------------------------------------------

--
-- Структура таблицы `applications`
--

CREATE TABLE `applications` (
  `id` int(111) NOT NULL,
  `service_name` varchar(255) NOT NULL,
  `contacts` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `applications`
--

INSERT INTO `applications` (`id`, `service_name`, `contacts`, `comment`) VALUES
(7, 'Замена ремня ГРМ', '8 996 693 11 01', 'Обрыв ремня'),
(8, 'Ремонт ходовой части', '877799922233', 'asdsadsad'),
(9, 'Замена ремня ГРМ', 'asdasdas123', 'asdasd321'),
(10, 'Замена ремня ГРМ', 'фывфывфыв', 'фывфывф'),
(11, 'Замена ремня ГРМ', '89966931101', 'Описание поломки');

-- --------------------------------------------------------

--
-- Структура таблицы `gallery`
--

CREATE TABLE `gallery` (
  `id` int(111) NOT NULL,
  `image_link` varchar(256) NOT NULL,
  `alt` varchar(256) NOT NULL DEFAULT 'Изображение галереи'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `gallery`
--

INSERT INTO `gallery` (`id`, `image_link`, `alt`) VALUES
(1, 'img/1.jpg', '1'),
(2, 'img/2.jpg', '2'),
(3, 'img/3.jpg', '3'),
(4, 'img/4.jpg', '4'),
(5, 'img/5.jpg', '5'),
(6, 'img/6.jpg', '6'),
(7, 'img/7.jpg', '7'),
(8, 'img/8.jpg', '8');

-- --------------------------------------------------------

--
-- Структура таблицы `popular`
--

CREATE TABLE `popular` (
  `id` int(111) NOT NULL,
  `service_name` varchar(200) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` varchar(111) NOT NULL,
  `service_image` varchar(255) NOT NULL DEFAULT 'img/1.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `popular`
--

INSERT INTO `popular` (`id`, `service_name`, `description`, `price`, `service_image`) VALUES
(1, 'Диагностика', 'Сход-развал <br>\r\nИзнос двигателя <br>\r\nПроверка аккумулятора <br>\r\nи т.д.', '1000', 'img/1.jpg'),
(2, 'Замена ремня ГРМ', 'Установка нового ремня ГРМ <br>\r\nОбслуживание натяжных роликов <br>\r\nГарантия 20.000 км.', '6500', 'img/2.jpg'),
(3, 'Ремонт ходовой части', 'Сход-развал<br>\r\nИзнос двигателя<br>\r\nПроверка аккумулятора<br>\r\nи т.д.', '1000', 'img/1.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `services`
--

CREATE TABLE `services` (
  `id` int(111) NOT NULL,
  `service_name` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `price` varchar(30) NOT NULL,
  `image_link` varchar(255) NOT NULL DEFAULT 'img/1.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `services`
--

INSERT INTO `services` (`id`, `service_name`, `description`, `price`, `image_link`) VALUES
(1, 'Диагностика', 'Сход-развал<br>\r\nИзнос двигателя<br>\r\nПроверка аккумулятора<br>\r\nи т.д.', '1000', 'img/1.jpg'),
(2, 'Замена ремня ГРМ', 'Установка нового ремня ГРМ<br>\r\nОбслуживание натяжных роликов<br>\r\nГарантия 20.000 км.', '6500', 'img/2.jpg'),
(3, 'Ремонт ходовой части', 'Сход-развал<br>\r\nИзнос двигателя<br>\r\nПроверка аккумулятора<br>\r\nи т.д.', '1000', 'img/1.jpg'),
(4, 'Замена ремня ГРМ', 'Установка нового ремня ГРМ<br>\r\nОбслуживание натяжных роликов<br>\r\nГарантия 20.000 км.', '6500', 'img/1.jpg'),
(5, 'Замена масла в ДВС', 'Замена масла', '500', '1.jpg'),
(6, 'Замена свечей зажигания', 'Замена свечей зажигания', '300', '1.jpg'),
(7, 'Ремонт ГБЦ', 'Замена направляющих для клапанов <br> Замена и притирка клапанов <br> Замена прокладки ГБЦ', '5000', '1.jpg'),
(8, 'Ремонт тормозной системы', 'Замена тормозных дисков и колодок <br> Замена тормозной жидкости', '2000', '1.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL DEFAULT 'Новый пользователь',
  `email` varchar(50) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(6, 'Новый пользователь', 'mail@mail.com', '02f69316152d5acc04cae454ca3cec7e'),
(7, 'Новый пользователь', 'admin@admin.com', '93318443db3aafe06b3c677c3c6f78c4'),
(9, 'Новый пользователь', 'adminsitrator@mail.ru', '93318443db3aafe06b3c677c3c6f78c4'),
(10, 'Новый пользователь', 'valera@mail.ru', '93318443db3aafe06b3c677c3c6f78c4');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `applications`
--
ALTER TABLE `applications`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `popular`
--
ALTER TABLE `popular`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `services`
--
ALTER TABLE `services`
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
-- AUTO_INCREMENT для таблицы `applications`
--
ALTER TABLE `applications`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT для таблицы `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `popular`
--
ALTER TABLE `popular`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `services`
--
ALTER TABLE `services`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
