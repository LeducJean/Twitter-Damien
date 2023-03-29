-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 28 mars 2023 à 21:11
-- Version du serveur : 8.0.31
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `connexion`
--

-- --------------------------------------------------------

--
-- Structure de la table `like`
--

DROP TABLE IF EXISTS `like`;
CREATE TABLE IF NOT EXISTS `like` (
  `id` int NOT NULL AUTO_INCREMENT,
  `idUser` int NOT NULL,
  `idMessage` int NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `idUser` (`idUser`,`idMessage`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `like`
--

INSERT INTO `like` (`id`, `idUser`, `idMessage`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

DROP TABLE IF EXISTS `message`;
CREATE TABLE IF NOT EXISTS `message` (
  `id` int NOT NULL AUTO_INCREMENT,
  `dateHeure` datetime NOT NULL,
  `idUser` int NOT NULL,
  `message` varchar(500) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idUser` (`idUser`)
) ENGINE=InnoDB AUTO_INCREMENT=960 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `message`
--

INSERT INTO `message` (`id`, `dateHeure`, `idUser`, `message`) VALUES
(955, '2023-03-28 20:49:57', 1, 'rdéa'),
(956, '2023-03-28 20:50:22', 1, 'da'),
(957, '2023-03-28 20:50:41', 1, 'da'),
(958, '2023-03-28 20:50:44', 1, 'da'),
(959, '2023-03-28 20:50:48', 1, 'bonjour');

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int UNSIGNED DEFAULT NULL,
  `message` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=80 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `messages`
--

INSERT INTO `messages` (`id`, `user_id`, `message`) VALUES
(79, 96, 'dada'),
(78, 93, 'dada'),
(77, 93, 'dada'),
(76, 93, 'salut'),
(75, 93, 'dada'),
(74, 96, 'dada'),
(72, 96, ''),
(73, 96, ''),
(71, 96, ''),
(70, 96, '');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `logname` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `logpass` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `logemail` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `logname` (`logname`),
  UNIQUE KEY `logemail` (`logemail`),
  UNIQUE KEY `logname_2` (`logname`)
) ENGINE=InnoDB AUTO_INCREMENT=103 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `logname`, `logpass`, `logemail`) VALUES
(1, 'root', 'roote', 'BelleGosse@gmail.com'),
(88, 'damienlps', 'dada', 'damso@gmail.Com'),
(89, 'dadadadada', 'adadadad', 'dadadada@gmail.com'),
(93, 'dlv', 'dada', 'damienlopes80@gmail.com'),
(95, 'test', 'test', 'tetst@gmail.com'),
(96, 'jesuite', 'jesuite', 'jesuite@gmail.com'),
(97, 'jean', 'jean', 'jean@gmail.com'),
(99, 'jcvdd', 'jcvdd', 'jcvdd@gmail.com'),
(100, 'tibo', 'tibo', 'tibo@gmail.com'),
(101, 'blunaax', 'root', 'tomlefevre60@gmail.com'),
(102, 'lucasfilm', '123456789', 'lucasburguet22020@gmail.com');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `message`
--
ALTER TABLE `message`
  ADD CONSTRAINT `Message_ibfk_1` FOREIGN KEY (`idUser`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
