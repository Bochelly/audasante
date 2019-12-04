-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Dec 04, 2019 at 09:57 AM
-- Server version: 5.7.26
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `audasante`
--

-- --------------------------------------------------------

--
-- Table structure for table `accuracy`
--

CREATE TABLE `accuracy` (
  `id_test` int(11) NOT NULL,
  `shift` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `case`
--

CREATE TABLE `case` (
  `id_case` int(32) NOT NULL,
  `id_hospital` int(32) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id` int(11) NOT NULL,
  `subject` varchar(256) NOT NULL,
  `answer` text NOT NULL,
  `frequency` int(11) NOT NULL DEFAULT '0',
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id`, `subject`, `answer`, `frequency`, `date`) VALUES
(1, 'Comment chercher un patient ?', 'Pour rechercher un patient, utiliser la barre de recherche à votre disposition en haut de l\'écran. Vous pouvez par exemple entrer le nom ou le prénom du patient recherché et il s\'affichera s\'il se trouve dans notre base de données. ', 0, '2019-12-03 18:16:40'),
(2, 'Comment ajouter un patient à la base de données ?', 'Dirigez-vous dans l\'onglet patients. Tous les patients qui sont liés à votre compte sont présents et vous pouvez utiliser le bouton \"ajouter un patient\" pour créer le compte d\'un patient et le lier automatiquement à votre compte.', 0, '2019-12-03 18:16:40'),
(3, 'Comment utiliser le calendrier Audasanté ?', 'C\'est très simple. Lier votre compte Audasanté avec votre compte Google afin que de lié le calendrier Audasanté à votre calendrier Google.', 0, '2019-12-03 18:16:40'),
(4, 'Que dois-je faire si ma question ne figure pas dans la FAQ ?', 'Si votre question question ne figure pas dans FAQ, vous pouvez nous contactez grâce aux moyens affichés dans l\'onglet \"Assistance\" du site Audasanté. Notre équipe est à votre écoute et vous répondra dans les plus brefs délais.', 0, '2019-12-03 18:16:40');

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE `hospital` (
  `id_hospital` int(32) NOT NULL,
  `nom` varchar(64) NOT NULL,
  `adresse` varchar(64) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `medic`
--

CREATE TABLE `medic` (
  `n_secu` bigint(20) NOT NULL,
  `first_name` varchar(63) NOT NULL,
  `last_name` varchar(63) NOT NULL,
  `birth_date` date NOT NULL,
  `work_place` varchar(63) NOT NULL,
  `e_mail` varchar(63) NOT NULL,
  `password` varchar(63) NOT NULL,
  `last_connect` date NOT NULL,
  `nb_try` int(16) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `medic`
--

INSERT INTO `medic` (`n_secu`, `first_name`, `last_name`, `birth_date`, `work_place`, `e_mail`, `password`, `last_connect`, `nb_try`) VALUES
(1, 'Antoine', 'BORRELLY', '2019-11-11', 'JuniorISEP', 'eniot94@gmail.com', 'G1C2A3I4A5', '2018-10-10', 0);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id_sender` int(11) NOT NULL,
  `id_receiver` int(11) NOT NULL,
  `text` text NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Cette table stocke les messages des utilisateurs';

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `n_secu` bigint(20) NOT NULL,
  `first_name` varchar(63) CHARACTER SET utf8 NOT NULL,
  `last_name` varchar(63) CHARACTER SET utf8 NOT NULL,
  `birth_date` date NOT NULL,
  `e_mail` varchar(63) CHARACTER SET utf8 NOT NULL,
  `password` varchar(63) CHARACTER SET utf8 NOT NULL,
  `last_connect` date NOT NULL,
  `nb_try` int(16) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reflex`
--

CREATE TABLE `reflex` (
  `id_test` int(255) NOT NULL,
  `reaction_avg` int(12) NOT NULL,
  `reaction_min` int(12) NOT NULL,
  `reaction_max` int(12) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `rhythm`
--

CREATE TABLE `rhythm` (
  `id_test` int(255) NOT NULL,
  `shift_avg` int(12) NOT NULL,
  `shift_min` int(12) NOT NULL,
  `shift_max` int(12) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
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
  `temp_max` int(6) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
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
  `id_hospital` int(32) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accuracy`
--
ALTER TABLE `accuracy`
  ADD PRIMARY KEY (`id_test`);

--
-- Indexes for table `case`
--
ALTER TABLE `case`
  ADD PRIMARY KEY (`id_case`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hospital`
--
ALTER TABLE `hospital`
  ADD PRIMARY KEY (`id_hospital`);

--
-- Indexes for table `medic`
--
ALTER TABLE `medic`
  ADD PRIMARY KEY (`n_secu`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`n_secu`);

--
-- Indexes for table `reflex`
--
ALTER TABLE `reflex`
  ADD PRIMARY KEY (`id_test`);

--
-- Indexes for table `rhythm`
--
ALTER TABLE `rhythm`
  ADD PRIMARY KEY (`id_test`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id_test`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`n_secu`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
