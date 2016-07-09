-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2016 at 11:17 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `codecup`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_agenda`
--

CREATE TABLE IF NOT EXISTS `tbl_agenda` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_aula` int(11) NOT NULL,
  `id_aluno` int(11) NOT NULL,
  `id_prof` int(11) NOT NULL,
  `data` date NOT NULL,
  `hora` time NOT NULL,
  `duracao` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_aulas`
--

CREATE TABLE IF NOT EXISTS `tbl_aulas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `titulo` varchar(150) NOT NULL,
  `descricao` mediumtext,
  `tags` text NOT NULL,
  `disponibilidade` tinyint(1) NOT NULL,
  `data_cadastro` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_avaliacoes`
--

CREATE TABLE IF NOT EXISTS `tbl_avaliacoes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_aula` int(11) NOT NULL,
  `id_aluno` int(11) NOT NULL,
  `nota` int(11) NOT NULL,
  `data_cadastro` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_historico`
--

CREATE TABLE IF NOT EXISTS `tbl_historico` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `qnt_coins` int(11) NOT NULL,
  `type` tinyint(1) NOT NULL,
  `data_cadastro` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_msg`
--

CREATE TABLE IF NOT EXISTS `tbl_msg` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_send` int(11) NOT NULL,
  `id_rec` int(11) NOT NULL,
  `msg` mediumtext,
  `anexo` varchar(255) DEFAULT NULL,
  `type` int(11) NOT NULL,
  `data_msg` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(20) NOT NULL,
  `cidade` int(11) NOT NULL,
  `estado` int(11) NOT NULL,
  `universidade` varchar(100) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `data_cadastro` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
