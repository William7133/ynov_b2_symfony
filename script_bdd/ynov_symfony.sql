-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 03 juil. 2020 à 15:14
-- Version du serveur :  10.4.13-MariaDB
-- Version de PHP : 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `ynov_symfony`
--

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_date` datetime NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`id`, `email`, `subject`, `message`, `contact_date`, `created`) VALUES
(11, 'contact1@gmail.com', 'Demande d\'informations', 'Message numéro 1', '2020-07-03 00:00:33', '2020-07-03 00:00:33'),
(12, 'contact2@gmail.com', 'Demande d\'informations', 'Message numéro 2', '2020-07-03 00:00:33', '2020-07-03 00:00:33'),
(13, 'contact3@gmail.com', 'Demande d\'informations', 'Message numéro 3', '2020-07-03 00:00:33', '2020-07-03 00:00:33'),
(14, 'contact4@gmail.com', 'Demande d\'informations', 'Message numéro 4', '2020-07-03 00:00:33', '2020-07-03 00:00:33'),
(15, 'contact5@gmail.com', 'Demande d\'informations', 'Message numéro 5', '2020-07-03 00:00:33', '2020-07-03 00:00:33'),
(16, 'test@gmail.com', 'azdaz', 'azdazda', '2020-07-03 00:37:44', '2020-07-03 00:37:44'),
(17, 'ada@gmail.com', 'azdaz', 'azdazd', '2020-07-03 00:40:18', '2020-07-03 00:40:18'),
(18, 'ada@gmail.com', 'azdaz', 'azdazd', '2020-07-03 00:40:39', '2020-07-03 00:40:39');

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `promo` tinyint(1) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id`, `name`, `picture`, `description`, `promo`, `created`) VALUES
(11, 'Produit 1', 'http://lorempixel.com/400/200/technics/1', 'Produit numéro 1', 0, '2020-07-03 00:00:33'),
(12, 'Produit 2', 'http://lorempixel.com/400/200/technics/2', 'Produit numéro 2', 1, '2020-07-03 00:00:33'),
(13, 'Produit 3', 'http://lorempixel.com/400/200/technics/3', 'Produit numéro 3', 1, '2020-07-03 00:00:33'),
(14, 'Produit 4', 'http://lorempixel.com/400/200/technics/4', 'Produit numéro 4', 0, '2020-07-03 00:00:33'),
(15, 'Produit 5', 'http://lorempixel.com/400/200/technics/5', 'Produit numéro 5', 0, '2020-07-03 00:00:33');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
