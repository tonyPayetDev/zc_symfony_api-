-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 19 avr. 2021 à 22:58
-- Version du serveur :  5.7.31
-- Version de PHP : 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `symfony_api_db`
--

-- --------------------------------------------------------

--
-- Structure de la table `car`
--

DROP TABLE IF EXISTS `car`;
CREATE TABLE IF NOT EXISTS `car` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `marque` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` int(11) NOT NULL,
  `motorisation` int(11) NOT NULL,
  `immatriculation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adresse` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `latitude` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `longitude` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `car`
--

INSERT INTO `car` (`id`, `marque`, `model`, `type`, `motorisation`, `immatriculation`, `photo`, `adresse`, `latitude`, `longitude`) VALUES
(1, 'peugeot', '206', 2, 1, 'string', 'https://www.automobile-magazine.fr/asset/cms/800x449/167149/config/115964/peugeot-208.jpg', 'Chemin de Mare A Martin, Grand-Îlet, Réunion', '-21.0148475', '55.4806922'),
(2, 'fiat', 'punto', 1, 2, 'string', 'https://sf2.auto-moto.com/wp-content/uploads/sites/9/2019/12/ok5-fiat500-750x410.jpg', 'Chemin Diore, Réunion', '-20.9891384', '55.6078462'),
(3, 'ford', 'focus', 1, 2, 'string', 'https://sf2.auto-moto.com/wp-content/uploads/sites/9/2019/12/ok5-fiat500-750x410.jpg', 'Chemin Rural N2, Sainte-Marie, Réunion', '-20.8998167', '55.5115203'),
(4, 'volkswagen', 'golf', 2, 2, 'string', 'https://s1.cdn.autoevolution.com/images/gallery/VOLKSWAGEN-Golf-GTD-6752_7.jpg', '1 Rue des Lanternes, La Plaine des Cafres, Réunion', '-21.2604213', '55.5372114'),
(5, 'volkswagen', 'golf', 1, 1, 'string', 'https://s1.cdn.autoevolution.com/images/gallery/VOLKSWAGEN-Golf-GTD-6752_7.jpg', 'Chemin Pierre Cadet, Réunion', '-21.2624162', '55.5303416'),
(6, 'fiat', 'punto', 1, 2, 'string', 'https://sf2.auto-moto.com/wp-content/uploads/sites/9/2019/12/ok5-fiat500-750x410.jpg', 'Rue Melvil Commins, Sainte-Marie, Réunion', '-20.8962591', '55.5293483'),
(7, 'volkswagen', 'golf', 1, 1, 'string', 'https://s1.cdn.autoevolution.com/images/gallery/VOLKSWAGEN-Golf-GTD-6752_7.jpg', 'Rue André Lardy, Sainte-Marie, Réunion', '-20.904614', '55.5281683');

-- --------------------------------------------------------

--
-- Structure de la table `motorisation`
--

DROP TABLE IF EXISTS `motorisation`;
CREATE TABLE IF NOT EXISTS `motorisation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `label` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `motorisation`
--

INSERT INTO `motorisation` (`id`, `label`, `value`) VALUES
(2, 'diesel', '2'),
(3, 'electrique', '1');

-- --------------------------------------------------------

--
-- Structure de la table `type`
--

DROP TABLE IF EXISTS `type`;
CREATE TABLE IF NOT EXISTS `type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `label` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `type`
--

INSERT INTO `type` (`id`, `value`, `label`) VALUES
(2, '1', 'Citadine'),
(3, '2', 'SUV');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
