-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Mer 05 Février 2014 à 11:44
-- Version du serveur: 5.5.25
-- Version de PHP: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données: `siham`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `login` varchar(65) NOT NULL,
  `password` varchar(65) NOT NULL,
  UNIQUE KEY `login` (`login`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `admin`
--

INSERT INTO `admin` (`login`, `password`) VALUES
('siham', '265e023839c74bf03160f58ba2c76d11');

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` text NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=51 ;

--
-- Contenu de la table `categories`
--

INSERT INTO `categories` (`Id`, `Nom`) VALUES
(48, 'Voyage'),
(49, 'Mode'),
(50, 'Voyages');

-- --------------------------------------------------------

--
-- Structure de la table `images`
--

CREATE TABLE `images` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(100) NOT NULL,
  `Image_serie` varchar(100) NOT NULL,
  `Creation` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Contenu de la table `images`
--

INSERT INTO `images` (`Id`, `Nom`, `Image_serie`, `Creation`) VALUES
(7, 'images/uploads/1526965_763596567001411_180798662_n (1).jpg', 'black_passion', '2014-01-28 16:44:46');

-- --------------------------------------------------------

--
-- Structure de la table `serie`
--

CREATE TABLE `serie` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` text NOT NULL,
  `Categorie_serie` text NOT NULL,
  `Illustration` text NOT NULL,
  `Url` varchar(100) NOT NULL,
  `Creation` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=42 ;

--
-- Contenu de la table `serie`
--

INSERT INTO `serie` (`Id`, `Nom`, `Categorie_serie`, `Illustration`, `Url`, `Creation`) VALUES
(39, 'ok', 'Voyage', 'images/thumb_immovicprod-5481360661.jpg', 'ok', '2014-01-28 17:12:38'),
(40, 'Cela', 'Voyage', 'images/thumb_3d261dbc-5e72-907347090.jpg', 'ca', '2014-01-28 17:13:05'),
(41, 'Dernier', 'Voyage', 'images/thumb_blackpassion_fy8-3180955429.jpg', 'cestd', '2014-01-28 17:13:35');
