-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 20 mars 2020 à 09:32
-- Version du serveur :  5.7.24
-- Version de PHP :  7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `php`
--

-- --------------------------------------------------------

--
-- Structure de la table `infos`
--

DROP TABLE IF EXISTS `infos`;
CREATE TABLE IF NOT EXISTS `infos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(1000) NOT NULL,
  `prenom` varchar(1000) NOT NULL,
  `descriptionperso` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `infos`
--

INSERT INTO `infos` (`id`, `nom`, `prenom`, `descriptionperso`) VALUES
(1, 'Pichard', 'Hugo', 'Etudiant en deuxiÃ¨me annÃ©e dâ€™un Dut MultimÃ©dia et Internet (MMI, anciennement SRC) Ã  lâ€™IUT Bordeaux Montaigne.');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$D/XMXNXEMxv0sto1fck2UeowHdfHZPOOwwTGU5uIodtTLi3oXvrSK');

-- --------------------------------------------------------

--
-- Structure de la table `works`
--

DROP TABLE IF EXISTS `works`;
CREATE TABLE IF NOT EXISTS `works` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(256) NOT NULL,
  `description` varchar(10000) NOT NULL,
  `img` varchar(1000) NOT NULL,
  `cat` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `works`
--

INSERT INTO `works` (`id`, `title`, `description`, `img`, `cat`) VALUES
(1, 'la communication interplanetaire', 'Projet etudiant de motion design', 'https://imgur.com/iWcnIBW.jpg', 'video'),
(2, 'photo1', 'photodesc1', '', 'photo'),
(3, 'print1', 'descprint1', '', 'print'),
(4, 'web1', 'descweb1', '', 'web');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
