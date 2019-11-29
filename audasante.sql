-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 27 nov. 2019 à 20:54
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

-- --------------------------------------------------------

--
-- Structure de la table `accuracy`
--

DROP TABLE IF EXISTS `accuracy`;
CREATE TABLE IF NOT EXISTS `accuracy` (
  `id_test` int(11) NOT NULL,
  `shift` int(11) NOT NULL,
  PRIMARY KEY (`id_test`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `case`
--

DROP TABLE IF EXISTS `case`;
CREATE TABLE IF NOT EXISTS `case` (
  `id_case` int(32) NOT NULL,
  `id_hospital` int(32) NOT NULL,
  PRIMARY KEY (`id_case`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `hospital`
--

DROP TABLE IF EXISTS `hospital`;
CREATE TABLE IF NOT EXISTS `hospital` (
  `id_hospital` int(32) NOT NULL,
  `nom` varchar(64) NOT NULL,
  `adresse` varchar(64) NOT NULL,
  PRIMARY KEY (`id_hospital`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

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
  `id_test` int(255) NOT NULL,
  `reaction_avg` int(12) NOT NULL,
  `reaction_min` int(12) NOT NULL,
  `reaction_max` int(12) NOT NULL,
  PRIMARY KEY (`id_test`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

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
  `id_test` int(255) NOT NULL,
  `type_test` int(8) NOT NULL,
  `n_secu_medic` int(255) NOT NULL,
  `n_secu_patient` int(255) NOT NULL,
  `id_case` int(32) NOT NULL,
  `test_start` datetime NOT NULL,
  `test_end` datetime NOT NULL,
  `heartbeat_avg` int(10) NOT NULL,
  `heartbeat_min` int(10) NOT NULL,
  `heartbeat_max` int(10) NOT NULL,
  `temp_avg` int(6) NOT NULL,
  `temp_min` int(6) NOT NULL,
  `temp_max` int(6) NOT NULL,
  PRIMARY KEY (`id_test`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `n_secu` bigint(13) NOT NULL,
  `medic` binary(1) NOT NULL DEFAULT '\0',
  `super_user` binary(1) NOT NULL DEFAULT '\0',
  `first_name` varchar(63) NOT NULL,
  `last_name` varchar(63) NOT NULL,
  `birth_date` date NOT NULL,
  `e_mail` varchar(63) NOT NULL,
  `password` varchar(255) NOT NULL,
  `last_connect` date DEFAULT NULL,
  `nb_try` int(16) NOT NULL DEFAULT '0',
  `n_secu_medic` bigint(13) DEFAULT NULL,
  `id_hospital` int(32) DEFAULT NULL,
  PRIMARY KEY (`n_secu`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`n_secu`, `medic`, `super_user`, `first_name`, `last_name`, `birth_date`, `e_mail`, `password`, `last_connect`, `nb_try`, `n_secu_medic`, `id_hospital`) VALUES
(269054958815780, 0x00, 0x00, 'Thomas', 'Hercule', '1999-12-08', 'thomas.hercule@isep.fr', '$2y$10$z6Cysx1ncOxi14ij13m5Cepbnsy1ELjTC.QY.EE7KapuRhZzw5ziW', NULL, 0, NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
