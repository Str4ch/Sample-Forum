SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE DATABASE IF NOT EXISTS `forum` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `forum`;

CREATE TABLE `user` (
                           `id` int(11) NOT NULL,
                           `name` varchar(255) NOT NULL,
                           `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `user` (`id`, `name`, `password`) VALUES
    (0, 'Username', 'password'),
    (1, 'TanKu_B_TaHkax', 'PaHku_B_TanKaX'),
    (2, 'BoP229', 'password');

CREATE TABLE `thread` (
                        `id` int(11) NOT NULL,
                        `topic` varchar(255) NOT NULL,
                        `author` varchar(255),
                        `author_id` int(11),
                        `date` DATETIME
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `thread` (`id`, `topic`,`author`, `author_id`, `date`) VALUES
         (0, 'First thread', 'Username', 0, '2024-05-09 00:03:04');


CREATE TABLE `message` (
                          `id` int(11) NOT NULL,
                          `thread_id` int(11) NOT NULL,
                          `author` varchar(255),
                          `author_id` int(11),
                          `message` varchar(4095),
                          `date` DATETIME
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `message` (`id`, `thread_id`, `author`, `author_id`, `message`, `date`) VALUES
    (0, 0,'Username', 0,'If you see this message everything works great', '2024-05-09 00:03:05');