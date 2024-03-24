-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : dim. 24 mars 2024 à 13:24
-- Version du serveur : 5.7.39
-- Version de PHP : 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `twitter`
--

-- --------------------------------------------------------

--
-- Structure de la table `tweet`
--

CREATE TABLE `tweet` (
  `id` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `content` varchar(280) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `tweet`
--

INSERT INTO `tweet` (`id`, `id_user`, `content`, `created_at`) VALUES
(36, 19, 'vdvddvdv', '2024-03-22 12:56:56'),
(58, 20, 'fefe', '2024-03-22 13:31:26'),
(59, 20, 'fefe', '2024-03-22 13:33:14'),
(60, 20, 'f\r\n', '2024-03-22 13:33:17'),
(61, 20, '\r\nv', '2024-03-22 13:33:18'),
(62, 20, 'df ', '2024-03-22 13:33:20'),
(63, 20, 'c', '2024-03-22 13:33:22'),
(64, 20, 'c', '2024-03-22 13:33:24'),
(65, 20, 'fd', '2024-03-22 13:33:28'),
(68, 22, 'fefe', '2024-03-24 13:23:40');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `createdAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `username`, `name`, `email`, `password`, `createdAt`) VALUES
(10, 'admin_admin', 'admin', 'nicolas.becharat.dev@gmail.com', 'eee', '2024-03-20 16:03:00'),
(17, 'iim', 'iim', 'iim@iim.fr', '$2y$10$eG4207LNkS1rZk8HgDqGB.PD93kMw2y19WBkgpGlS.5.FbxqNu24G', '2024-03-21 14:58:53'),
(18, 'miicolas', 'Nicolas', 'nicolas.becharatt@gmail.com', '$2y$10$8S2GrobpH4csKwX6/DJ1D.D5VZsiKyI.3hEuzshrxw8yESLDcE4mG', '2024-03-21 15:07:11'),
(19, 'admin', 'dm', 'nicolas.becharattt@gmail.com', '$2y$10$6Z5sntekJrbEyW4ZwrKWz.Xw234SM0Qi8u3lYmak.op12KVaRTx66', '2024-03-22 13:56:37'),
(20, 'admin_admin_admin', 'Nicolas', 'fefe@fefefff.com', '$2y$10$o4ibB4eC.HyQbAQwZi9SvOI8U1hdarx0eSGG.AlHOm2.eglr7whEO', '2024-03-22 13:57:37'),
(21, 'nico', 'nico', 'jfiejfojeoj@ofieofk.com', '$2y$10$9KtYipxaLYy/Ex7Ol0kCRu2qtwv30Rydjcg2E9HCmsUJ1va.mrGsy', '2024-03-22 14:42:12'),
(22, 'iiim', 'Jean', 'fefe@fefe.coml', '$2y$10$LY8R846NIwIssOiZmkZFBOSDgDTC86DnoN8W.vIGkot4bALBCY3va', '2024-03-24 14:23:32');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `tweet`
--
ALTER TABLE `tweet`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `tweet`
--
ALTER TABLE `tweet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `tweet`
--
ALTER TABLE `tweet`
  ADD CONSTRAINT `tweet_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
