-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Počítač: 127.0.0.1
-- Vytvořeno: Stř 13. pro 2023, 20:39
-- Verze serveru: 10.4.32-MariaDB
-- Verze PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáze: `udrzba_hrobu`
--

-- --------------------------------------------------------

--
-- Struktura tabulky `graves`
--

CREATE TABLE `graves` (
  `grave_id` int(2) NOT NULL,
  `grave_name` varchar(20) NOT NULL,
  `grave_size` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Vypisuji data pro tabulku `graves`
--

INSERT INTO `graves` (`grave_id`, `grave_name`, `grave_size`) VALUES
(1, 'urnový', 'small'),
(2, 'klasický', 'medium'),
(3, 'dvojhrob', 'large'),
(4, 'vlastní', 'other');

-- --------------------------------------------------------

--
-- Struktura tabulky `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `phone_number` varchar(30) NOT NULL,
  `service_type` varchar(20) NOT NULL,
  `grave_type` varchar(20) NOT NULL,
  `order_date` datetime NOT NULL DEFAULT current_timestamp(),
  `additional_notes` varchar(1500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktura tabulky `order_history`
--

CREATE TABLE `order_history` (
  `order_id` int(11) NOT NULL,
  `order_created` datetime NOT NULL,
  `service_ordered` varchar(20) NOT NULL,
  `grave` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktura tabulky `password_reset`
--

CREATE TABLE `password_reset` (
  `user_id` int(11) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktura tabulky `services`
--

CREATE TABLE `services` (
  `service_id` int(2) NOT NULL,
  `service_name` varchar(20) NOT NULL,
  `description` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Vypisuji data pro tabulku `services`
--

INSERT INTO `services` (`service_id`, `service_name`, `description`) VALUES
(1, 'Jednorázově', 'Jednorázová péče o hrob.'),
(2, 'Pravidelně 4', 'Pravidelná péče o hrob, 4x za rok.'),
(3, 'Pravidelně 6', 'Pravidelná péče o hrob, 6x za rok.'),
(4, 'Vlastní', 'Zákazník má specifické požadavky, které upřesní v objednávce.');

-- --------------------------------------------------------

--
-- Struktura tabulky `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` int(11) NOT NULL,
  `email` int(11) NOT NULL,
  `password` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexy pro exportované tabulky
--

--
-- Indexy pro tabulku `graves`
--
ALTER TABLE `graves`
  ADD PRIMARY KEY (`grave_id`),
  ADD KEY `grave_name` (`grave_name`);

--
-- Indexy pro tabulku `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `service_type` (`service_type`),
  ADD KEY `grave_type` (`grave_type`),
  ADD KEY `order_date` (`order_date`);

--
-- Indexy pro tabulku `order_history`
--
ALTER TABLE `order_history`
  ADD KEY `order_id` (`order_id`),
  ADD KEY `order_created` (`order_created`),
  ADD KEY `service_ordered` (`service_ordered`),
  ADD KEY `grave` (`grave`);

--
-- Indexy pro tabulku `password_reset`
--
ALTER TABLE `password_reset`
  ADD KEY `user_id` (`user_id`);

--
-- Indexy pro tabulku `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`service_id`),
  ADD KEY `service_name` (`service_name`);

--
-- Indexy pro tabulku `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT pro tabulky
--

--
-- AUTO_INCREMENT pro tabulku `graves`
--
ALTER TABLE `graves`
  MODIFY `grave_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pro tabulku `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pro tabulku `services`
--
ALTER TABLE `services`
  MODIFY `service_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pro tabulku `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Omezení pro exportované tabulky
--

--
-- Omezení pro tabulku `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Omezení pro tabulku `order_history`
--
ALTER TABLE `order_history`
  ADD CONSTRAINT `order_history_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `order_history_ibfk_2` FOREIGN KEY (`order_created`) REFERENCES `orders` (`order_date`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `order_history_ibfk_3` FOREIGN KEY (`service_ordered`) REFERENCES `orders` (`service_type`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `order_history_ibfk_4` FOREIGN KEY (`grave`) REFERENCES `orders` (`grave_type`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Omezení pro tabulku `password_reset`
--
ALTER TABLE `password_reset`
  ADD CONSTRAINT `password_reset_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
