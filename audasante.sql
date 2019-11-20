-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 08 nov. 2019 à 12:24
-- Version du serveur :  5.7.26
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `audasante`
--
CREATE SCHEMA IF NOT EXISTS `audasante` DEFAULT CHARACTER SET utf8 ;
USE `audasante` ;
-- --------------------------------------------------------

--
-- Structure de la table `accuracy`
--

DROP TABLE IF EXISTS `accuracy`;
CREATE TABLE IF NOT EXISTS `accuracy` (
  `n_test` int(11) NOT NULL,
  `shift` int(11) NOT NULL,
  PRIMARY KEY (`n_test`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `medic`
--

DROP TABLE IF EXISTS `medic`;
CREATE TABLE IF NOT EXISTS `medic` (
  `n_secu` bigint(20) NOT NULL,
  `first_name` varchar(63) NOT NULL,
  `last_name` varchar(63) NOT NULL,
  `birth_date` date NOT NULL,
  `work_place` varchar(63) NOT NULL,
  `e_mail` varchar(63) NOT NULL,
  `password` varchar(63) NOT NULL,
  `last_connect` date NOT NULL,
  `nb_try` int(16) NOT NULL DEFAULT '0',
  PRIMARY KEY (`n_secu`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `patient`
--

DROP TABLE IF EXISTS `patient`;
CREATE TABLE IF NOT EXISTS `patient` (
  `n_secu` bigint(20) NOT NULL,
  `first_name` varchar(63) CHARACTER SET utf8 NOT NULL,
  `last_name` varchar(63) CHARACTER SET utf8 NOT NULL,
  `birth_date` date NOT NULL,
  `e_mail` varchar(63) CHARACTER SET utf8 NOT NULL,
  `password` varchar(63) CHARACTER SET utf8 NOT NULL,
  `last_connect` date NOT NULL,
  `nb_try` int(16) NOT NULL DEFAULT '0',
  PRIMARY KEY (`n_secu`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `reflex`
--

DROP TABLE IF EXISTS `reflex`;
CREATE TABLE IF NOT EXISTS `reflex` (
  `n_test` int(255) NOT NULL,
  `reaction_avg` int(12) NOT NULL,
  `reaction_min` int(12) NOT NULL,
  `reaction_max` int(12) NOT NULL,
  PRIMARY KEY (`n_test`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `rhythm`
--

DROP TABLE IF EXISTS `rhythm`;
CREATE TABLE IF NOT EXISTS `rhythm` (
  `n_test` int(255) NOT NULL,
  `shift_avg` int(12) NOT NULL,
  `shift_min` int(12) NOT NULL,
  `shift_max` int(12) NOT NULL,
  PRIMARY KEY (`n_test`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `test`
--

DROP TABLE IF EXISTS `test`;
CREATE TABLE IF NOT EXISTS `test` (
  `n_test` int(255) NOT NULL,
  `type_test` int(8) NOT NULL,
  `n_secu` int(128) NOT NULL,
  `test_start` datetime NOT NULL,
  `test_end` datetime NOT NULL,
  `n_case` int(32) NOT NULL,
  `heartbeat_avg` int(10) NOT NULL,
  `heartbeat_min` int(10) NOT NULL,
  `heartbeat_max` int(10) NOT NULL,
  `temp_avg` int(6) NOT NULL,
  `temp_min` int(6) NOT NULL,
  `temp_max` int(6) NOT NULL,
  PRIMARY KEY (`n_test`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
