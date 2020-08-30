-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Авг 30 2020 г., 16:26
-- Версия сервера: 5.7.29
-- Версия PHP: 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `phones`
--

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE `comments` (
  `id` int(2) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `good_id` int(2) NOT NULL,
  `comment` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `comments`
--

INSERT INTO `comments` (`id`, `user_name`, `good_id`, `comment`) VALUES
(144, 'Ярослав', 1, 'хороший товар'),
(145, 'Влад', 1, 'хрень'),
(146, 'Влад', 1, 'эппл скоро разорится, все это знают'),
(147, 'Маша', 1, 'купите мне его кто-нибудь');

-- --------------------------------------------------------

--
-- Структура таблицы `comments_samsung`
--

CREATE TABLE `comments_samsung` (
  `id` int(10) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `good_id` int(10) NOT NULL,
  `comment` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `comments_samsung`
--

INSERT INTO `comments_samsung` (`id`, `user_name`, `good_id`, `comment`) VALUES
(15, 'Костя', 3, 'хочу такой'),
(16, 'Маша', 3, 'слишком дорого, он столько не стоит');

-- --------------------------------------------------------

--
-- Структура таблицы `comments_xiaomi`
--

CREATE TABLE `comments_xiaomi` (
  `id` int(10) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `good_id` int(10) NOT NULL,
  `comment` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `comments_xiaomi`
--

INSERT INTO `comments_xiaomi` (`id`, `user_name`, `good_id`, `comment`) VALUES
(43, 'Кирилл', 2, 'топчик'),
(45, 'Миша', 2, 'айоны лучше'),
(46, 'Ярослав', 2, 'отстой'),
(47, 'Вера', 2, 'у меня такой же');

-- --------------------------------------------------------

--
-- Структура таблицы `off_comments`
--

CREATE TABLE `off_comments` (
  `id` int(2) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `good_id` int(10) NOT NULL,
  `comment` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `off_comments`
--

INSERT INTO `off_comments` (`id`, `user_name`, `good_id`, `comment`) VALUES
(2, '', 0, 'Возможность оставлять отзывы к данному товару пока отключена');

-- --------------------------------------------------------

--
-- Структура таблицы `phones`
--

CREATE TABLE `phones` (
  `id` int(2) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(100) NOT NULL,
  `link` varchar(100) NOT NULL,
  `type_db` varchar(100) NOT NULL,
  `characteristics` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `phones`
--

INSERT INTO `phones` (`id`, `name`, `price`, `link`, `type_db`, `characteristics`) VALUES
(1, 'Apple iPhone 11 64GB Black', 56490, '/img/apple.jpg', 'comments', 'Новая система двух камер не оставит никого из ваших друзей за кадром. Самый быстрый процессор iPhone и мощный аккумулятор позволят больше делать и тратить меньше времени на подзарядку. А высочайшее качество видео на iPhone означает, что ваши истории станут ещё ярче и детальнее.'),
(2, 'Xiaomi Redmi Note 9 128GB Forest Green', 16990, '/img/xiaomi.jpg', 'comments_xiaomi', 'Xiaomi Redmi Note 9 оснащен высокопроизводительным 8-ядерным процессором с максимальной частотой до 2,0 ГГц и графическим ускорителем с частотой 1000 МГц, которые обеспечивают улучшенную производительность устройства.'),
(3, 'Samsung Galaxy A51 64GB Black', 16490, '/img/samsung.jpg', 'comments_samsung', 'Возьми лучшее от каждого момента. Одно касание - и режим \"Мультикадр\" снимет видео, проанализирует при помощи искусственного интеллекта и предложит несколько фото и видео, включая ультраширокую панораму, фото с эффектом боке и многое другое.'),
(27, 'Nokia 3310', 5000, '/img/no_img.jpg', 'off_comments', 'Его невозможно убить');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `comments_samsung`
--
ALTER TABLE `comments_samsung`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `comments_xiaomi`
--
ALTER TABLE `comments_xiaomi`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `off_comments`
--
ALTER TABLE `off_comments`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `phones`
--
ALTER TABLE `phones`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=148;

--
-- AUTO_INCREMENT для таблицы `comments_samsung`
--
ALTER TABLE `comments_samsung`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT для таблицы `comments_xiaomi`
--
ALTER TABLE `comments_xiaomi`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT для таблицы `off_comments`
--
ALTER TABLE `off_comments`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `phones`
--
ALTER TABLE `phones`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
