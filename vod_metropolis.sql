-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  mer. 31 oct. 2018 à 13:09
-- Version du serveur :  10.1.31-MariaDB
-- Version de PHP :  7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `vod_metropolis`
--

-- --------------------------------------------------------

--
-- Structure de la table `Acteurs`
--

CREATE TABLE `Acteurs` (
  `id_acteurs` int(11) NOT NULL,
  `Nom` varchar(250) NOT NULL,
  `Prenom` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `Acteurs`
--

INSERT INTO `Acteurs` (`id_acteurs`, `Nom`, `Prenom`) VALUES
(1, 'Cavill', 'Henry'),
(2, 'Adams', 'Amy'),
(3, 'Williams', 'Robin'),
(4, 'Hoffman', 'Dustin');

-- --------------------------------------------------------

--
-- Structure de la table `Administrateur`
--

CREATE TABLE `Administrateur` (
  `id_administrateur` int(11) NOT NULL,
  `Nom` varchar(250) NOT NULL,
  `Prenom` varchar(250) NOT NULL,
  `Email` varchar(250) NOT NULL,
  `Mot_de_Passe` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `Appartenir`
--

CREATE TABLE `Appartenir` (
  `id_genre` int(11) NOT NULL,
  `id_films` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `Appartenir`
--

INSERT INTO `Appartenir` (`id_genre`, `id_films`) VALUES
(1, 1),
(1, 2);

-- --------------------------------------------------------

--
-- Structure de la table `Favoris`
--

CREATE TABLE `Favoris` (
  `id_films` int(11) NOT NULL,
  `id_utilisateur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `Films`
--

CREATE TABLE `Films` (
  `id_films` int(11) NOT NULL,
  `Titre` varchar(250) NOT NULL,
  `Date_de_sortie` date NOT NULL,
  `Synopsis` text NOT NULL,
  `Affiche` varchar(250) NOT NULL,
  `Bande_Annonce` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `Films`
--

INSERT INTO `Films` (`id_films`, `Titre`, `Date_de_sortie`, `Synopsis`, `Affiche`, `Bande_Annonce`) VALUES
(1, 'Man of Steel', '2013-06-19', 'Un petit garçon découvre qu\'il possède des pouvoirs surnaturels et qu\'il n\'est pas né sur Terre. Plus tard, il s\'engage dans un périple afin de comprendre d\'où il vient et pourquoi il a été envoyé sur notre planète mais il devra devenir un héros s\'il veut sauver le monde de la destruction totale et incarner l\'espoir pour toute l\'humanité.', 'http://t3.gstatic.com/images?q=tbn:ANd9GcRwma2lwwI8eW077zsyj30zD7ppyKlHG6T_bCcEEzSRIvhWW2Tl', ''),
(2, 'Hook ou la Revanche du capitaine Crochet', '1992-04-01', 'Peter Pan est devenu adulte, malgré tout. Mais le Capitaine Crochet se venge et enlève ses enfants, forçant Peter à revenir au pays Imaginaire.', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS8lIvn0apKZnP8_6r5TwPxzCDFnKSiaPN6yIAsqgl5vFnxDFbx', '');

-- --------------------------------------------------------

--
-- Structure de la table `Genre`
--

CREATE TABLE `Genre` (
  `id_genre` int(11) NOT NULL,
  `Genre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `Genre`
--

INSERT INTO `Genre` (`id_genre`, `Genre`) VALUES
(1, 'Science-Fiction');

-- --------------------------------------------------------

--
-- Structure de la table `GERE`
--

CREATE TABLE `GERE` (
  `id_films` int(11) NOT NULL,
  `id_administrateur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `JOUE`
--

CREATE TABLE `JOUE` (
  `id_acteurs` int(11) NOT NULL,
  `id_films` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `JOUE`
--

INSERT INTO `JOUE` (`id_acteurs`, `id_films`) VALUES
(1, 1),
(2, 1),
(3, 2),
(4, 2);

-- --------------------------------------------------------

--
-- Structure de la table `Realisateurs`
--

CREATE TABLE `Realisateurs` (
  `id_realisateurs` int(11) NOT NULL,
  `Nom` varchar(250) NOT NULL,
  `Prenom` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `Realisateurs`
--

INSERT INTO `Realisateurs` (`id_realisateurs`, `Nom`, `Prenom`) VALUES
(1, 'Snyder', 'Zack'),
(2, 'Spielberg', 'Steven');

-- --------------------------------------------------------

--
-- Structure de la table `Realise`
--

CREATE TABLE `Realise` (
  `id_realisateurs` int(11) NOT NULL,
  `id_films` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `Realise`
--

INSERT INTO `Realise` (`id_realisateurs`, `id_films`) VALUES
(1, 1),
(2, 2);

-- --------------------------------------------------------

--
-- Structure de la table `Utilisateur`
--

CREATE TABLE `Utilisateur` (
  `id_utilisateur` int(11) NOT NULL,
  `Nom` varchar(250) NOT NULL,
  `Prenom` varchar(250) NOT NULL,
  `Email` varchar(250) NOT NULL,
  `Mot_de_passe` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `Acteurs`
--
ALTER TABLE `Acteurs`
  ADD PRIMARY KEY (`id_acteurs`);

--
-- Index pour la table `Administrateur`
--
ALTER TABLE `Administrateur`
  ADD PRIMARY KEY (`id_administrateur`);

--
-- Index pour la table `Appartenir`
--
ALTER TABLE `Appartenir`
  ADD PRIMARY KEY (`id_genre`,`id_films`),
  ADD KEY `Appartenir_Films0_FK` (`id_films`);

--
-- Index pour la table `Favoris`
--
ALTER TABLE `Favoris`
  ADD PRIMARY KEY (`id_films`,`id_utilisateur`),
  ADD KEY `Favoris_Utilisateur0_FK` (`id_utilisateur`);

--
-- Index pour la table `Films`
--
ALTER TABLE `Films`
  ADD PRIMARY KEY (`id_films`);

--
-- Index pour la table `Genre`
--
ALTER TABLE `Genre`
  ADD PRIMARY KEY (`id_genre`);

--
-- Index pour la table `GERE`
--
ALTER TABLE `GERE`
  ADD PRIMARY KEY (`id_films`,`id_administrateur`),
  ADD KEY `GERE_Administrateur0_FK` (`id_administrateur`);

--
-- Index pour la table `JOUE`
--
ALTER TABLE `JOUE`
  ADD PRIMARY KEY (`id_acteurs`,`id_films`),
  ADD KEY `JOUE_Films0_FK` (`id_films`);

--
-- Index pour la table `Realisateurs`
--
ALTER TABLE `Realisateurs`
  ADD PRIMARY KEY (`id_realisateurs`);

--
-- Index pour la table `Realise`
--
ALTER TABLE `Realise`
  ADD PRIMARY KEY (`id_realisateurs`,`id_films`),
  ADD KEY `Realise_Films0_FK` (`id_films`);

--
-- Index pour la table `Utilisateur`
--
ALTER TABLE `Utilisateur`
  ADD PRIMARY KEY (`id_utilisateur`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `Acteurs`
--
ALTER TABLE `Acteurs`
  MODIFY `id_acteurs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `Administrateur`
--
ALTER TABLE `Administrateur`
  MODIFY `id_administrateur` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Films`
--
ALTER TABLE `Films`
  MODIFY `id_films` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `Genre`
--
ALTER TABLE `Genre`
  MODIFY `id_genre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `Realisateurs`
--
ALTER TABLE `Realisateurs`
  MODIFY `id_realisateurs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `Utilisateur`
--
ALTER TABLE `Utilisateur`
  MODIFY `id_utilisateur` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `Appartenir`
--
ALTER TABLE `Appartenir`
  ADD CONSTRAINT `Appartenir_Films0_FK` FOREIGN KEY (`id_films`) REFERENCES `Films` (`id_films`),
  ADD CONSTRAINT `Appartenir_Genre_FK` FOREIGN KEY (`id_genre`) REFERENCES `Genre` (`id_genre`);

--
-- Contraintes pour la table `Favoris`
--
ALTER TABLE `Favoris`
  ADD CONSTRAINT `Favoris_Films_FK` FOREIGN KEY (`id_films`) REFERENCES `Films` (`id_films`),
  ADD CONSTRAINT `Favoris_Utilisateur0_FK` FOREIGN KEY (`id_utilisateur`) REFERENCES `Utilisateur` (`id_utilisateur`);

--
-- Contraintes pour la table `GERE`
--
ALTER TABLE `GERE`
  ADD CONSTRAINT `GERE_Administrateur0_FK` FOREIGN KEY (`id_administrateur`) REFERENCES `Administrateur` (`id_administrateur`),
  ADD CONSTRAINT `GERE_Films_FK` FOREIGN KEY (`id_films`) REFERENCES `Films` (`id_films`);

--
-- Contraintes pour la table `JOUE`
--
ALTER TABLE `JOUE`
  ADD CONSTRAINT `JOUE_Acteurs_FK` FOREIGN KEY (`id_acteurs`) REFERENCES `Acteurs` (`id_acteurs`),
  ADD CONSTRAINT `JOUE_Films0_FK` FOREIGN KEY (`id_films`) REFERENCES `Films` (`id_films`);

--
-- Contraintes pour la table `Realise`
--
ALTER TABLE `Realise`
  ADD CONSTRAINT `Realise_Films0_FK` FOREIGN KEY (`id_films`) REFERENCES `Films` (`id_films`),
  ADD CONSTRAINT `Realise_Realisateurs_FK` FOREIGN KEY (`id_realisateurs`) REFERENCES `Realisateurs` (`id_realisateurs`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
