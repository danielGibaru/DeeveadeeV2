-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Lun 15 Janvier 2018 à 08:49
-- Version du serveur :  5.7.11
-- Version de PHP :  5.6.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `deeveadee_bdd`
--

-- --------------------------------------------------------

--
-- Structure de la table `acteur`
--

CREATE TABLE `acteur` (
  `id` int(11) NOT NULL,
  `nomA` varchar(255) NOT NULL,
  `prenomA` varchar(255) NOT NULL,
  `ageA` date NOT NULL,
  `sexeA` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `acteur`
--

INSERT INTO `acteur` (`id`, `nomA`, `prenomA`, `ageA`, `sexeA`) VALUES
(1, 'Watson', 'Emma', '1990-04-15', 1),
(2, 'Radcliffe', 'Daniel', '1989-07-23', 0),
(3, 'Grint', 'Rupert ', '1988-07-24', 0);

-- --------------------------------------------------------

--
-- Structure de la table `adresse`
--

CREATE TABLE `adresse` (
  `id` int(11) NOT NULL,
  `numeroAD` int(11) NOT NULL,
  `rueAD` varchar(255) NOT NULL,
  `villeAD` varchar(255) NOT NULL,
  `codePostalAD` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `adresse`
--

INSERT INTO `adresse` (`id`, `numeroAD`, `rueAD`, `villeAD`, `codePostalAD`) VALUES
(3, 139, 'rue du chocolat', 'narbonne', 11500),
(4, 34, 'rue de bretagne', 'breziers', 34500);

-- --------------------------------------------------------

--
-- Structure de la table `casting`
--

CREATE TABLE `casting` (
  `id` int(11) NOT NULL,
  `IDD` int(11) NOT NULL,
  `IDA` int(11) NOT NULL,
  `roleC` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `casting`
--

INSERT INTO `casting` (`id`, `IDD`, `IDA`, `roleC`) VALUES
(1, 1, 1, 'Hermione Granger'),
(2, 1, 2, 'Harry Potter'),
(3, 1, 3, 'Ron Weasley');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `id` int(11) NOT NULL,
  `nomCL` varchar(255) NOT NULL,
  `prenomCL` varchar(255) NOT NULL,
  `IDAD` int(11) DEFAULT NULL,
  `pseudoCL` varchar(255) NOT NULL,
  `mailCL` varchar(255) NOT NULL,
  `passwordCL` varchar(255) NOT NULL,
  `droitCL` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `client`
--

INSERT INTO `client` (`id`, `nomCL`, `prenomCL`, `IDAD`, `pseudoCL`, `mailCL`, `passwordCL`, `droitCL`) VALUES
(10, 'Gibaru', 'Daniel', NULL, 'dannfrnoi', 'daniel.gibaru@gmail.com', '590b31294c4dfb0ea51992e8c728265c', 0),
(11, 'Gibaru', 'Daniel', NULL, 'dan', 'dada', '590b31294c4dfb0ea51992e8c728265c', 0),
(12, 'Gibaru', 'Daniel', NULL, 'dafezefr', 'daniel.gibaru@gmail.com', 'b5a4c309c4990af323a878c5193e9320', 0);

-- --------------------------------------------------------

--
-- Structure de la table `dvd`
--

CREATE TABLE `dvd` (
  `id` int(11) NOT NULL,
  `titreD` varchar(255) NOT NULL,
  `synopsisD` varchar(1200) NOT NULL,
  `IDR` int(11) NOT NULL,
  `annéeD` date NOT NULL,
  `imgD` varchar(255) DEFAULT NULL,
  `backgroudD` varchar(255) DEFAULT NULL,
  `dateAchatD` date DEFAULT NULL,
  `nombreD` int(11) NOT NULL,
  `IDS` int(11) NOT NULL,
  `IDG1` int(11) NOT NULL,
  `IDG2` int(11) NOT NULL,
  `IDG3` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `dvd`
--

INSERT INTO `dvd` (`id`, `titreD`, `synopsisD`, `IDR`, `annéeD`, `imgD`, `backgroudD`, `dateAchatD`, `nombreD`, `IDS`, `IDG1`, `IDG2`, `IDG3`) VALUES
(1, 'Harry Potter à l\'école des sorciers', 'Harry Potter, un jeune orphelin, est élevé par son oncle Vernon et sa tante Pétunia qui le détestent. Alors qu\'il était haut comme trois pommes, ces derniers lui ont raconté que ses parents étaient morts dans un accident de voiture.\r\nLe jour de son onzième anniversaire, Harry reçoit la visite inattendue d\'un homme gigantesque se nommant Rubeus Hagrid. Celui-ci lui révèle qu\'il est en fait le fils de deux puissants magiciens et qu\'il possède lui aussi d\'extraordinaires pouvoirs.\r\nC\'est avec joie que le garçon accepte de suivre des cours à Poudlard, la célèbre école de sorcellerie. Il a enfin la chance de se faire des amis. Blâmé par le professeur Severus Rogue qui lui enseigne les potions et protégé par Albus Dumbledore, le directeur de l\'établissement, Harry va tenter d\'élucider le mystère de la pierre philosophale. ', 1, '2001-12-05', NULL, NULL, NULL, 4, 1, 19, 2, 1);

-- --------------------------------------------------------

--
-- Structure de la table `employe`
--

CREATE TABLE `employe` (
  `id` int(11) NOT NULL,
  `numSecuE` int(11) NOT NULL,
  `nomE` varchar(255) NOT NULL,
  `prenomE` varchar(255) NOT NULL,
  `IDAD` int(11) NOT NULL,
  `IDS` int(11) NOT NULL,
  `sexeE` tinyint(1) NOT NULL,
  `danteNaissanceE` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `emprunt`
--

CREATE TABLE `emprunt` (
  `id` int(11) NOT NULL,
  `IDD` int(11) NOT NULL,
  `dateE` date NOT NULL,
  `IDCL` int(11) NOT NULL,
  `duréeE` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `genre1`
--

CREATE TABLE `genre1` (
  `id` int(11) NOT NULL,
  `genre1` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `genre1`
--

INSERT INTO `genre1` (`id`, `genre1`) VALUES
(1, 'Action'),
(2, 'Animation'),
(3, 'Biographique'),
(4, 'Catastrophe'),
(5, 'Biographique'),
(6, 'Comédie'),
(7, 'Comédie Dramatique'),
(8, 'Comédie Musicale'),
(9, 'Comédie Policière'),
(10, 'Comédie Romantique'),
(11, 'Court Métrage'),
(12, 'Dessin Animé'),
(13, 'Documentaire'),
(14, 'Drame'),
(15, 'Drame Psychologique'),
(16, 'Epouvante'),
(17, 'Espionnage'),
(18, 'Essai'),
(19, 'Fantastique'),
(20, 'Film à Sketches'),
(21, 'Film Musical'),
(22, 'Guerre'),
(23, 'Film Musical'),
(24, 'Historique'),
(25, 'Horreur'),
(26, 'Karaté'),
(27, 'Manga'),
(28, 'Mélodrame'),
(29, 'Muet'),
(30, 'Science Fiction'),
(31, 'Spectacle'),
(32, 'Thriller'),
(33, 'Western'),
(34, 'Aventure');

-- --------------------------------------------------------

--
-- Structure de la table `genre2`
--

CREATE TABLE `genre2` (
  `id` int(11) NOT NULL,
  `genre2` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `genre2`
--

INSERT INTO `genre2` (`id`, `genre2`) VALUES
(1, 'Action'),
(2, 'Aventure'),
(3, 'Biographique'),
(4, 'Catastrophe'),
(5, 'Biographique'),
(6, 'Comédie'),
(7, 'Comédie Dramatique'),
(8, 'Comédie Musicale'),
(9, 'Comédie Policière'),
(10, 'Comédie Romantique'),
(11, 'Court Métrage'),
(12, 'Dessin Animé'),
(13, 'Documentaire'),
(14, 'Drame'),
(15, 'Drame Psychologique'),
(16, 'Epouvante'),
(17, 'Espionnage'),
(18, 'Essai'),
(19, 'Fantastique'),
(20, 'Film à Sketches'),
(21, 'Film Musical'),
(22, 'Guerre'),
(23, 'Film Musical'),
(24, 'Historique'),
(25, 'Horreur'),
(26, 'Karaté'),
(27, 'Manga'),
(28, 'Mélodrame'),
(29, 'Muet'),
(30, 'Science Fiction'),
(31, 'Spectacle'),
(32, 'Thriller'),
(33, 'Western');

-- --------------------------------------------------------

--
-- Structure de la table `genre3`
--

CREATE TABLE `genre3` (
  `id` int(11) NOT NULL,
  `genre3` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `genre3`
--

INSERT INTO `genre3` (`id`, `genre3`) VALUES
(1, 'Action'),
(2, 'Aventure'),
(3, 'Biographique'),
(4, 'Catastrophe'),
(5, 'Biographique'),
(6, 'Comédie'),
(7, 'Comédie Dramatique'),
(8, 'Comédie Musicale'),
(9, 'Comédie Policière'),
(10, 'Comédie Romantique'),
(11, 'Court Métrage'),
(12, 'Dessin Animé'),
(13, 'Documentaire'),
(14, 'Drame'),
(15, 'Drame Psychologique'),
(16, 'Epouvante'),
(17, 'Espionnage'),
(18, 'Essai'),
(19, 'Fantastique'),
(20, 'Film à Sketches'),
(21, 'Film Musical'),
(22, 'Guerre'),
(23, 'Film Musical'),
(24, 'Historique'),
(25, 'Horreur'),
(26, 'Karaté'),
(27, 'Manga'),
(28, 'Mélodrame'),
(29, 'Muet'),
(30, 'Science Fiction'),
(31, 'Spectacle'),
(32, 'Thriller'),
(33, 'Western');

-- --------------------------------------------------------

--
-- Structure de la table `realisateur`
--

CREATE TABLE `realisateur` (
  `id` int(11) NOT NULL,
  `nomR` varchar(255) NOT NULL,
  `prenomR` varchar(255) NOT NULL,
  `sexeR` tinyint(1) NOT NULL,
  `dateNaisanceR` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `realisateur`
--

INSERT INTO `realisateur` (`id`, `nomR`, `prenomR`, `sexeR`, `dateNaisanceR`) VALUES
(1, 'Columbus', 'Chris ', 0, '1958-09-10'),
(2, 'Cuarón', 'Alfonso ', 0, '1961-11-28');

-- --------------------------------------------------------

--
-- Structure de la table `societe`
--

CREATE TABLE `societe` (
  `id` int(11) NOT NULL,
  `nomS` varchar(255) NOT NULL,
  `IDAD` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `societe`
--

INSERT INTO `societe` (`id`, `nomS`, `IDAD`) VALUES
(1, 'VhS', 3);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `acteur`
--
ALTER TABLE `acteur`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `adresse`
--
ALTER TABLE `adresse`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `casting`
--
ALTER TABLE `casting`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDD` (`IDD`),
  ADD KEY `IDA` (`IDA`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDAD` (`IDAD`);

--
-- Index pour la table `dvd`
--
ALTER TABLE `dvd`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDS` (`IDS`),
  ADD KEY `IDR` (`IDR`),
  ADD KEY `IDG1` (`IDG1`),
  ADD KEY `IDG2` (`IDG2`),
  ADD KEY `IDG3` (`IDG3`);

--
-- Index pour la table `employe`
--
ALTER TABLE `employe`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDAD` (`IDAD`),
  ADD KEY `IDS` (`IDS`);

--
-- Index pour la table `emprunt`
--
ALTER TABLE `emprunt`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDD` (`IDD`),
  ADD KEY `IDCL` (`IDCL`);

--
-- Index pour la table `genre1`
--
ALTER TABLE `genre1`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `genre2`
--
ALTER TABLE `genre2`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `genre3`
--
ALTER TABLE `genre3`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `realisateur`
--
ALTER TABLE `realisateur`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `societe`
--
ALTER TABLE `societe`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDAD` (`IDAD`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `acteur`
--
ALTER TABLE `acteur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `adresse`
--
ALTER TABLE `adresse`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `casting`
--
ALTER TABLE `casting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT pour la table `dvd`
--
ALTER TABLE `dvd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `employe`
--
ALTER TABLE `employe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `emprunt`
--
ALTER TABLE `emprunt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `genre1`
--
ALTER TABLE `genre1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT pour la table `genre2`
--
ALTER TABLE `genre2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT pour la table `genre3`
--
ALTER TABLE `genre3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT pour la table `realisateur`
--
ALTER TABLE `realisateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `societe`
--
ALTER TABLE `societe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `casting`
--
ALTER TABLE `casting`
  ADD CONSTRAINT `casting_ibfk_1` FOREIGN KEY (`IDD`) REFERENCES `dvd` (`id`),
  ADD CONSTRAINT `casting_ibfk_2` FOREIGN KEY (`IDA`) REFERENCES `acteur` (`id`);

--
-- Contraintes pour la table `client`
--
ALTER TABLE `client`
  ADD CONSTRAINT `client_ibfk_1` FOREIGN KEY (`IDAD`) REFERENCES `adresse` (`id`);

--
-- Contraintes pour la table `dvd`
--
ALTER TABLE `dvd`
  ADD CONSTRAINT `dvd_ibfk_1` FOREIGN KEY (`IDG2`) REFERENCES `genre2` (`id`),
  ADD CONSTRAINT `dvd_ibfk_2` FOREIGN KEY (`IDG1`) REFERENCES `genre1` (`id`),
  ADD CONSTRAINT `dvd_ibfk_3` FOREIGN KEY (`IDG3`) REFERENCES `genre3` (`id`),
  ADD CONSTRAINT `dvd_ibfk_5` FOREIGN KEY (`IDR`) REFERENCES `realisateur` (`id`),
  ADD CONSTRAINT `dvd_ibfk_6` FOREIGN KEY (`IDS`) REFERENCES `societe` (`id`);

--
-- Contraintes pour la table `employe`
--
ALTER TABLE `employe`
  ADD CONSTRAINT `employe_ibfk_1` FOREIGN KEY (`IDAD`) REFERENCES `adresse` (`id`),
  ADD CONSTRAINT `employe_ibfk_2` FOREIGN KEY (`IDS`) REFERENCES `societe` (`id`);

--
-- Contraintes pour la table `emprunt`
--
ALTER TABLE `emprunt`
  ADD CONSTRAINT `emprunt_ibfk_1` FOREIGN KEY (`IDD`) REFERENCES `dvd` (`id`),
  ADD CONSTRAINT `emprunt_ibfk_2` FOREIGN KEY (`IDCL`) REFERENCES `client` (`id`);

--
-- Contraintes pour la table `societe`
--
ALTER TABLE `societe`
  ADD CONSTRAINT `societe_ibfk_1` FOREIGN KEY (`IDAD`) REFERENCES `adresse` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
