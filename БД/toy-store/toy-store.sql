-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 17 2020 г., 22:19
-- Версия сервера: 10.3.13-MariaDB-log
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
-- База данных: `toy-store`
--

-- --------------------------------------------------------

--
-- Структура таблицы `discounts`
--

CREATE TABLE `discounts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `intro` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `discounts`
--

INSERT INTO `discounts` (`id`, `title`, `img`, `intro`) VALUES
(1, 'LEGO', 'https://cdn.toy.ru/upload/iblock/498/502x182_lego.jpg', 'Скидка 60% на некоторые наборы'),
(2, 'duplo подарок', 'https://cdn.toy.ru/upload/iblock/6d0/502x182_lego.jpg', 'Игрушка в подарок при покупке набора duplo от 1499 руб');

-- --------------------------------------------------------

--
-- Структура таблицы `partners`
--

CREATE TABLE `partners` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `intro` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `partners`
--

INSERT INTO `partners` (`id`, `title`, `img`, `intro`) VALUES
(1, 'Monopoly', 'https://cdn.toy.ru/upload/iblock/e34/monopoly_ipad_logos.png', 'Настольная игра Монополия от Hasbro'),
(2, 'Disney Princess', 'https://cdn.toy.ru/upload/iblock/5a6/disney_princess.png', 'Героини мультфильмов студии Уолта Диснея'),
(4, 'Lego', 'https://cdn.toy.ru/upload/iblock/8e8/lego.png', 'Живая классика, свобода творчества и конструирования'),
(5, 'Fortnite', 'https://cdn.toy.ru/upload/iblock/45f/97865.jpg', 'Игровые наборы по компьютерной игре'),
(6, 'My Little Pony', 'https://cdn.toy.ru/upload/iblock/f9b/my-little-pony.png', 'Герои популярного мультсериала Мой маленький пони: дружба — это чудо!');

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `intro` text NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `reviews_count` int(11) NOT NULL,
  `reviews_score` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `title`, `img`, `intro`, `price`, `reviews_count`, `reviews_score`) VALUES
(1, 'Зверушки', 'http://2.bp.blogspot.com/_U6lTVBnn_Nw/TLgYqpk5A9I/AAAAAAAAA-0/vlmVKsJ5Kpc/s320/bebek.jpg', 'Веселые зверушки для всей семьи. Очень мягкие тигренок,мартышка и слоненок', '700', 545, 5),
(2, 'Lego-замок', 'https://www.stavebnice-hry.cz/ImgZbozi/Detail/mega-bloks-cislice-20-dilu-32718.jpg', 'Популярные кубики для развития моторики рук ', '500', 423, 5),
(3, 'Набор \"Юный танкист\"', 'http://1.bp.blogspot.com/-F_Jp4ZteyyY/TorzsoyrDZI/AAAAAAAAAbM/jTbXVdeiAB0/s320/%25D1%2582%25D0%25B5%25D1%2585%25D0%25BD%25D0%25B8%25D0%25BA%25D0%25B0+%25D0%2593%25D0%2594%25D0%25A0.JPG', 'Техника изготовленная на Тульском патронном заводе.Для детей от 6 лет', '400', 135, 3);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `discounts`
--
ALTER TABLE `discounts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `discounts`
--
ALTER TABLE `discounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `partners`
--
ALTER TABLE `partners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
