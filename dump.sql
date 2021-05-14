-- Adminer 4.7.8 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

USE `principia`;

DROP TABLE IF EXISTS `button`;
CREATE TABLE `button` (
  `presses` bigint(20) unsigned NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `button` (`presses`) VALUES
(0);

-- 2021-04-05 17:58:45
