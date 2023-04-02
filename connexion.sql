-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : dim. 02 avr. 2023 à 19:20
-- Version du serveur : 8.0.31
-- Version de PHP : 7.4.33

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
-- Structure de la table `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int UNSIGNED DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_general_ci NOT NULL,
  `Date` datetime NOT NULL,
  `likes` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=441 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `messages`
--

INSERT INTO `messages` (`id`, `user_id`, `avatar`, `message`, `Date`, `likes`) VALUES
(438, 97, NULL, 'dadad', '2023-04-02 18:16:46', 0),
(439, 97, NULL, 'dadadazra', '2023-04-02 18:16:48', 5),
(440, 97, NULL, 'eaeae', '2023-04-02 18:17:03', 0);

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
) ENGINE=InnoDB AUTO_INCREMENT=111 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `logname`, `logpass`, `logemail`) VALUES
(1, 'root', 'roote', 'BelleGosse@gmail.com'),
(88, 'damienlps', 'dada', 'damso@gmail.Com'),
(89, 'dadadadada', 'adadadad', 'dadadada@gmail.com'),
(93, 'dlv', 'dada', 'damienlopes80@gmail.com'),
(95, 'test', 'test', 'test@gmail.com'),
(96, 'jesuite', 'jesuite', 'jesuite@gmail.com'),
(97, 'jean', 'jean', 'jean@gmail.com'),
(99, 'jcvdd', 'jcvdd', 'jcvdd@gmail.com'),
(100, 'tibo', 'tibo', 'tibo@gmail.com'),
(101, 'blunaax', 'root', 'tomlefevre60@gmail.com'),
(102, 'lucasfilm', '123456789', 'lucasburguet22020@gmail.com'),
(104, 'Anonymous', '1234', 'anonymous@gmail.com'),
(105, 'faustinou', 'fofo', 'faustinou@gmail.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
