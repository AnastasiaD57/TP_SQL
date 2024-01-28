-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : Dim 28 jan. 2024 à 11:04
-- Version du serveur :  8.0.35-0ubuntu0.20.04.1
-- Version de PHP : 8.2.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `module6`
--

-- --------------------------------------------------------

--
-- Structure de la table `etudiants`
--

CREATE TABLE `etudiants` (
  `id` int NOT NULL,
  `prenom` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `nom` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `cv` text COLLATE utf8mb4_general_ci NOT NULL,
  `dt_naissance` date NOT NULL,
  `isAdmin` tinyint(1) NOT NULL DEFAULT '0',
  `dt_mis_a_jour` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `etudiants`
--

INSERT INTO `etudiants` (`id`, `prenom`, `nom`, `email`, `cv`, `dt_naissance`, `isAdmin`, `dt_mis_a_jour`) VALUES
(1, 'Ana', 'Danilov', 'Danilov.a@hotmail.fr', 'CV de Ana', '1993-02-18', 1, '2024-01-28 10:49:19'),
(2, 'Fred', 'Roblot-Coulanges', 'fred@gmail.com', 'CV de Fred', '1978-12-26', 0, '2024-01-28 10:53:12'),
(3, 'Mathieu', 'Charles-Rolando', 'Mathieu@gmail.com', 'CV de Mathieu', '1992-10-15', 0, '2024-01-28 10:53:12'),
(4, 'Najwa', 'Najwa', 'Najwa@gmail.com', 'CV de Najwa', '1996-12-26', 0, '2024-01-28 10:59:50'),
(5, 'Hadjer', 'xxx', 'Hadjer@gmail.com', 'CV de Hadjer', '1999-10-15', 0, '2024-01-28 10:59:50'),
(6, 'JP', 'xxx', 'JP@gmail.com', 'CV de JP', '1977-10-15', 0, '2024-01-28 10:59:50'),
(7, 'Feras', 'xxx', 'Feras@gmail.com', 'CV de Feras', '1999-10-15', 0, '2024-01-28 10:59:50'),
(8, 'Habib', 'xxx', 'Habib@gmail.com', 'CV de Habib', '1977-10-15', 0, '2024-01-28 10:59:50'),
(9, 'Derik', 'xxx', 'Derik@gmail.com', 'CV de Derik', '1975-10-15', 0, '2024-01-28 10:59:50'),
(10, 'Marizia', 'xxx', 'Marizia@gmail.com', 'CV de Marizia', '1980-10-15', 0, '2024-01-28 10:59:50');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `etudiants`
--
ALTER TABLE `etudiants`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `etudiants`
--
ALTER TABLE `etudiants`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
