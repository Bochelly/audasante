-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 21 jan. 2020 à 13:46
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
-- Structure de la table `code`
--

DROP TABLE IF EXISTS `code`;
CREATE TABLE IF NOT EXISTS `code` (
  `code` varchar(11) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `code`
--

INSERT INTO `code` (`code`) VALUES
('2195843391'),
('7632495546');

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
-- Structure de la table `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `id_sender` int(11) NOT NULL,
  `id_receiver` int(11) NOT NULL,
  `text` text NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Cette table stocke les messages des utilisateurs';

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
-- Structure de la table `sensors`
--

DROP TABLE IF EXISTS `sensors`;
CREATE TABLE IF NOT EXISTS `sensors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` text NOT NULL,
  `description` text NOT NULL,
  `etat` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `sensors`
--

INSERT INTO `sensors` (`id`, `nom`, `description`, `etat`) VALUES
(1, 'Température', 'Ce capteur servira à récupérer la température du patient.', 0),
(2, 'Rythme cardiaque', 'Ce capteur mesure les battements de coeur du patient, avant de l\'envoyer.\r\n', 1);

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
  `code_password` varchar(11) DEFAULT NULL,
  `last_connect` date DEFAULT NULL,
  `nb_try` int(16) NOT NULL DEFAULT '0',
  `n_secu_medic` bigint(13) DEFAULT NULL,
  `id_hospital` int(32) DEFAULT NULL,
  `facebook` varchar(100) DEFAULT NULL,
  `instagram` varchar(100) DEFAULT NULL,
  `twitter` varchar(100) DEFAULT NULL,
  `photo` varchar(255) NOT NULL,
  PRIMARY KEY (`n_secu`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`n_secu`, `medic`, `super_user`, `first_name`, `last_name`, `birth_date`, `e_mail`, `password`, `code_password`, `last_connect`, `nb_try`, `n_secu_medic`, `id_hospital`, `facebook`, `instagram`, `twitter`, `photo`) VALUES
(12345678910, 0x00, 0x00, 'thomas', 'hercule', '2019-11-26', 'thomas.hercule@isep.fr', '$2y$10$6QRCsl8Jeyj5BX2SLALrAey7vChrUpvgRqt7DkSkz54Kpw0Kysn2W', NULL, '2019-12-04', 2, NULL, NULL, NULL, NULL, NULL, ''),
(111111111, 0x01, 0x00, 'Félix', 'Nedelec', '1999-11-05', 'felix.nedelec75@gmail.com', '$2y$10$/W2CGamrtpAXATrMsZ7MYeU31cPFKndXsbdMOxkn1fVXRxxTzXgLm', NULL, '2019-12-15', 0, NULL, NULL, 'félix', 'felixndlc', 'Ouii', '111111111.jpg'),
(222222222, 0x00, 0x00, 'Jean', 'Bon', '1999-04-12', 'Jeanbon@gmail.com', '$2y$10$/YhaexL3UHQ1.8ejvSeB1.aXAOB8oo8hE.l2cKH1YAvnuQaj.yBDe', NULL, '2019-12-05', 0, 111111111, NULL, NULL, NULL, NULL, ''),
(333333333, 0x00, 0x00, 'Thomas', 'Lachico', '1999-10-21', 'Thomslachico@gmail.com', '$2y$10$BthEgWJhCFREnEeGmJOpfObZsM17tr4p4osqI48Q85RoXi5FE9z.y', NULL, '2019-12-10', 0, 111111111, NULL, NULL, NULL, NULL, ''),
(444444444, 0x00, 0x00, 'Cas', 'Lelache', '2000-07-28', 'Caslelache@gmail.com', '$2y$10$4b91hQMUVVBrD1D8mnlI5OQ1dcK8/xYpIXru4qIUhavuRn3KvLPvm', NULL, NULL, 0, 111111111, NULL, NULL, NULL, NULL, ''),
(555555555, 0x00, 0x00, 'Babzer', 'Zuccherro', '1999-10-19', 'babzer@gmail.com', '$2y$10$3mgjm1IcpNzBSDdpdAkPV.I6TE4pKPt/pGBLKB24.baN0GzeeyZ0C', NULL, NULL, 0, 111111111, NULL, NULL, NULL, NULL, ''),
(666666666, 0x00, 0x00, 'PH', 'Lesang', '1998-10-05', 'phles@gmail.com', '$2y$10$W1f.rLQnGe5anmzw1h3S9./GXmNhjXcrXbBrUHEZc3tfUhd4C0k16', NULL, '2019-12-15', 0, 111111111, NULL, NULL, NULL, NULL, '666666666.jpg'),
(1888888, 0x00, 0x00, 'Antoine', 'Borrelly', '2020-01-20', 'antoine.borrelly@isep.fr', '$2y$10$6Lo7jPWFVgXrb6S40V.Hsu7oKglTNTeiOfagPD1mRu0PvqM1mVfJm', NULL, '2020-01-21', 0, NULL, NULL, NULL, NULL, NULL, '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
