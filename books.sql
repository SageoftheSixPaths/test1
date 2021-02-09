-- Adminer 4.7.8 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `books`;
CREATE TABLE `books` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `author` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `genre` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `checkedOut` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `books` (`id`, `title`, `author`, `genre`, `checkedOut`) VALUES
(10,	'test',	'test',	'test',	1),
(11,	'another test',	'another test',	'another test',	1),
(12,	'another test 2',	'another test 2',	'another test 2',	1),
(13,	'another test',	'another test',	'another test',	1),
(14,	'another test',	'another test',	'another test',	1),
(15,	'idk',	'idk',	'idk',	1),
(16,	'idk',	'idk',	'idk',	0);

-- 2021-02-09 04:34:26
