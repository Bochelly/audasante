-- MySQL Workbench Forward Engineering

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema audasante
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema audasante
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `audasante` DEFAULT CHARACTER SET utf8 ;
USE `audasante` ;

-- -----------------------------------------------------
-- Table `hospital`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `hospital`;
CREATE TABLE IF NOT EXISTS `hospital` (
  `id_hospital` INT(32) NOT NULL,
  `nom` VARCHAR(64) NOT NULL,
  `adresse` VARCHAR(64) NOT NULL,
  PRIMARY KEY (`id_hospital`))
ENGINE=MyISAM DEFAULT CHARSET=utf8;



-- -----------------------------------------------------
-- Table `user`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `n_secu` INT(128) NOT NULL,
  `medic` BLOB NOT NULL,
  `super_user` BLOB NOT NULL,
  `first_name` VARCHAR(63) NOT NULL,
  `last_name` VARCHAR(63) NOT NULL,
  `birth_date` DATE NOT NULL,
  `e_mail` VARCHAR(63) NOT NULL,
  `password` VARCHAR(63) NOT NULL,
  `last_connect` DATE NOT NULL,
  `nb_try` INT(16) NOT NULL DEFAULT '0',
  `n_secu_medic` INT(128) NULL,
  `id_hospital` INT(32) NULL,
  PRIMARY KEY (`n_secu`)
)
ENGINE=MyISAM DEFAULT CHARSET=utf8;



-- -----------------------------------------------------
-- Table `test`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `test`;
CREATE TABLE IF NOT EXISTS `test` (
  `id_test` INT(255) NOT NULL,
  `type_test` INT(8) NOT NULL,
  `n_secu_medic` INT(128) NOT NULL,
  `n_secu_patient` INT(128) NOT NULL,
  `id_case` INT(32) NOT NULL,
  `test_start` DATETIME NOT NULL,
  `test_end` DATETIME NOT NULL,
  `heartbeat_avg` INT(10) NOT NULL,
  `heartbeat_min` INT(10) NOT NULL,
  `heartbeat_max` INT(10) NOT NULL,
  `temp_avg` INT(6) NOT NULL,
  `temp_min` INT(6) NOT NULL,
  `temp_max` INT(6) NOT NULL,
  PRIMARY KEY (`id_test`))
ENGINE=MyISAM DEFAULT CHARSET=utf8;



-- -----------------------------------------------------
-- Table `accuracy`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `accuracy`;
CREATE TABLE IF NOT EXISTS `accuracy` (
  `id_test` INT(11) NOT NULL,
  `shift` INT(11) NOT NULL,
  PRIMARY KEY (`id_test`))
ENGINE=MyISAM DEFAULT CHARSET=utf8;



-- -----------------------------------------------------
-- Table `reflex`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `reflex`;
CREATE TABLE IF NOT EXISTS `reflex` (
  `id_test` INT(255) NOT NULL,
  `reaction_avg` INT(12) NOT NULL,
  `reaction_min` INT(12) NOT NULL,
  `reaction_max` INT(12) NOT NULL,
  PRIMARY KEY (`id_test`))
ENGINE=MyISAM DEFAULT CHARSET=utf8;



-- -----------------------------------------------------
-- Table `rhythm`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `rythm`;
CREATE TABLE IF NOT EXISTS `rhythm` (
  `id_test` INT(255) NOT NULL,
  `shift_avg` INT(12) NOT NULL,
  `shift_min` INT(12) NOT NULL,
  `shift_max` INT(12) NOT NULL,
  PRIMARY KEY (`id_test`))
ENGINE=MyISAM DEFAULT CHARSET=utf8;



-- -----------------------------------------------------
-- Table `case`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `case`;
CREATE TABLE IF NOT EXISTS `case` (
  `id_case` INT(32) NOT NULL,
  `id_hospital` INT(32) NOT NULL,
  PRIMARY KEY (`id_case`)
)
ENGINE=MyISAM DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;