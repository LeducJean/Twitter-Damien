-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : ven. 31 mars 2023 à 16:47
-- Version du serveur : 10.5.18-MariaDB-0+deb11u1
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
-- Structure de la table `like`
--

CREATE TABLE `like` (
  `id` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  `idMessage` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `like`
--

INSERT INTO `like` (`id`, `idUser`, `idMessage`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

CREATE TABLE `messages` (
  `id` int(6) UNSIGNED NOT NULL,
  `user_id` int(6) UNSIGNED DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `message` text NOT NULL,
  `Date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `messages`
--

INSERT INTO `messages` (`id`, `user_id`, `avatar`, `message`, `Date`) VALUES
(233, 96, NULL, 'dadad', '0000-00-00 00:00:00'),
(234, 96, NULL, 'zaa', '0000-00-00 00:00:00'),
(235, 97, NULL, 'dza', '0000-00-00 00:00:00'),
(236, 96, NULL, 'faf', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `logname` varchar(50) NOT NULL,
  `logpass` varchar(50) NOT NULL,
  `logemail` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
(102, 'lucasfilm', '123456789', 'lucasburguet22020@gmail.com'),
(104, 'Anonymous', '1234', 'anonymous@gmail.com'),
(105, 'faustinou', 'fofo', 'faustinou@gmail.com');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `like`
--
ALTER TABLE `like`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `idUser` (`idUser`,`idMessage`);

--
-- Index pour la table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `logname` (`logname`),
  ADD UNIQUE KEY `logemail` (`logemail`),
  ADD UNIQUE KEY `logname_2` (`logname`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `like`
--
ALTER TABLE `like`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=237;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
