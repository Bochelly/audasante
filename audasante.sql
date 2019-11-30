-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 29 nov. 2019 à 13:39
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
-- Structure de la table `faq`
--

DROP TABLE IF EXISTS `faq`;
CREATE TABLE IF NOT EXISTS `faq` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `subject` varchar(256) NOT NULL,
  `answer` text NOT NULL,
  `frequency` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `faq`
--

INSERT INTO `faq` (`id`, `subject`, `answer`, `frequency`) VALUES
(1, 'Comment chercher un patient ?', 'Pour rechercher un patient, utiliser la barre de recherche à votre disposition en haut de l\'écran. Vous pouvez par exemple entrer le nom ou le prénom du patient recherché et il s\'affichera s\'il se trouve dans notre base de données. ', 0),
(2, 'Comment ajouter un patient à la base de données ?', 'Dirigez-vous dans l\'onglet patients. Tous les patients qui sont liés à votre compte sont présents et vous pouvez utiliser le bouton \"ajouter un patient\" pour créer le compte d\'un patient et le lier automatiquement à votre compte.', 0),
(3, 'Comment utiliser le calendrier Audasanté ?', 'C\'est très simple. Lier votre compte Audasanté avec votre compte Google afin que de lié le calendrier Audasanté à votre calendrier Google.', 0),
(4, 'Que dois-je faire si ma question ne figure pas dans la FAQ ?', 'Si votre question question ne figure pas dans FAQ, vous pouvez nous contactez grâce aux moyens affichés dans l\'onglet \"Assistance\" du site Audasanté. Notre équipe est à votre écoute et vous répondra dans les plus brefs délais.', 0);

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
  `id_test` int(255) NOT NULL,
  `shift_avg` int(12) NOT NULL,
  `shift_min` int(12) NOT NULL,
  `shift_max` int(12) NOT NULL,
  PRIMARY KEY (`id_test`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

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
  `n_secu` int(255) NOT NULL,
  `medic` binary(1) NOT NULL,
  `super_user` binary(1) NOT NULL,
  `first_name` varchar(63) NOT NULL,
  `last_name` varchar(63) NOT NULL,
  `birth_date` date NOT NULL,
  `e_mail` varchar(63) NOT NULL,
  `password` varchar(63) NOT NULL,
  `last_connect` date NOT NULL,
  `nb_try` int(16) NOT NULL DEFAULT '0',
  `n_secu_medic` int(255) DEFAULT NULL,
  `id_hospital` int(32) DEFAULT NULL,
  PRIMARY KEY (`n_secu`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
