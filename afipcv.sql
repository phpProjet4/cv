-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le :  mer. 07 nov. 2018 à 10:00
-- Version du serveur :  5.7.21
-- Version de PHP :  7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `afipcv`
--

-- --------------------------------------------------------

--
-- Structure de la table `commerciaux`
--

CREATE TABLE `commerciaux` (
  `idcommerciaux` int(11) NOT NULL,
  `nom` varchar(45) DEFAULT NULL,
  `prenom` varchar(45) DEFAULT NULL,
  `login` varchar(45) NOT NULL,
  `mot_de_passe` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `commerciaux`
--

INSERT INTO `commerciaux` (`idcommerciaux`, `nom`, `prenom`, `login`, `mot_de_passe`) VALUES
(1, 'Kara', 'Karim', 'kkara', 'afip'),
(2, 'Sayadi', 'Mohamed', 'msayadi', 'afip'),
(3, 'Jin', 'Caifeng', 'cjin', 'afip');

-- --------------------------------------------------------

--
-- Structure de la table `diplomes`
--

CREATE TABLE `diplomes` (
  `iddiplomes` int(11) NOT NULL,
  `intitule` varchar(45) DEFAULT NULL,
  `date_obtention` date DEFAULT NULL,
  `niveau_diplome` varchar(45) DEFAULT NULL,
  `lieu_obtention` varchar(45) DEFAULT NULL,
  `stagiaires_idstagiaires` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `diplomes`
--

INSERT INTO `diplomes` (`iddiplomes`, `intitule`, `date_obtention`, `niveau_diplome`, `lieu_obtention`, `stagiaires_idstagiaires`) VALUES
(1, 'vendeur', '1990-06-21', 'bac pro', 'Metz', 1),
(2, 'boulanger', '2014-07-12', 'cap', 'Lyon', 2),
(3, 'plombier', '1998-06-21', 'cap', 'Lyon', 2),
(4, 'assistante de direction', '1993-07-12', 'bac+2', 'Tunis', 3),
(5, 'mecanicien auto', '2004-07-12', 'cap', 'Marseille', 4),
(6, 'professeur', '1987-07-13', 'bac+3', 'Paris', 5);

-- --------------------------------------------------------

--
-- Structure de la table `entreprises`
--

CREATE TABLE `entreprises` (
  `identreprises` int(11) NOT NULL,
  `nom_referant` varchar(45) DEFAULT NULL,
  `prenom_referant` varchar(45) DEFAULT NULL,
  `nom_entreprise` varchar(45) DEFAULT NULL,
  `adresse` varchar(45) DEFAULT NULL,
  `code_postal` varchar(45) DEFAULT NULL,
  `ville` varchar(45) DEFAULT NULL,
  `telephone` varchar(45) DEFAULT NULL,
  `mail` varchar(45) DEFAULT NULL,
  `siret` varchar(45) DEFAULT NULL,
  `mot_de_passe` varchar(45) NOT NULL,
  `autorisation` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `entreprises`
--

INSERT INTO `entreprises` (`identreprises`, `nom_referant`, `prenom_referant`, `nom_entreprise`, `adresse`, `code_postal`, `ville`, `telephone`, `mail`, `siret`, `mot_de_passe`, `autorisation`) VALUES
(1, 'Gates', 'Bill', 'Microsoft', '1 rue de la fortune', '75001', 'Paris', '0134234565', 'microsoft_entreprise@outlook.com', '765GHGG7676868', 'milliard', 0),
(2, 'Jobs', 'Steve', 'Apple', 'rue de la pomme', '75006', 'Paris', '01.80.90.70.00', 'steve.jobs.apple@icloud.com', '32212091600208', 'pomme', 1);

-- --------------------------------------------------------

--
-- Structure de la table `experiences`
--

CREATE TABLE `experiences` (
  `idexperiences` int(11) NOT NULL,
  `intitule` varchar(45) DEFAULT NULL,
  `date_debut` date DEFAULT NULL,
  `date_fin` date DEFAULT NULL,
  `nom_entreprise` varchar(45) DEFAULT NULL,
  `stagiaires_idstagiaires` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `experiences`
--

INSERT INTO `experiences` (`idexperiences`, `intitule`, `date_debut`, `date_fin`, `nom_entreprise`, `stagiaires_idstagiaires`) VALUES
(1, 'cuisinier', '2015-01-20', '2018-08-06', 'Paul Bocuse', 1),
(2, 'vendeur', '2010-06-12', '2014-12-25', 'Nike', 1),
(3, 'boulanger', '2015-03-17', '2018-04-18', 'Paul', 2),
(4, 'plombier', '1999-05-21', '2015-02-13', 'plomberie service', 2),
(5, 'assistante de direction', '1994-06-01', '2018-06-21', 'orange', 3),
(9, 'mecanicien', '2005-04-12', '2008-07-28', 'Renault', 4),
(10, 'mecanicien', '2009-07-12', '2014-12-23', 'Peugeot', 4),
(11, 'mecanicien', '2015-01-13', '2018-05-26', 'Mercedes', 4),
(12, 'professeur', '1988-03-21', '2018-07-19', 'Education nationale', 5);

-- --------------------------------------------------------

--
-- Structure de la table `stagiaires`
--

CREATE TABLE `stagiaires` (
  `idstagiaires` int(11) NOT NULL,
  `nom` varchar(45) DEFAULT NULL,
  `prenom` varchar(45) DEFAULT NULL,
  `telephone` varchar(45) DEFAULT NULL,
  `mail` varchar(45) DEFAULT NULL,
  `url_cv` varchar(45) DEFAULT NULL,
  `date_ajout` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `stagiaires`
--

INSERT INTO `stagiaires` (`idstagiaires`, `nom`, `prenom`, `telephone`, `mail`, `url_cv`, `date_ajout`) VALUES
(1, 'Dupont', 'Pierre', '0606070809', 'dupont.pierre@gmail.com', NULL, '2018-11-02'),
(2, 'Durand', 'Michel', '0608050904', 'durand.michel@gmail.com', NULL, '2018-11-02'),
(3, 'Zitoun', 'Nadia', '0767452343', 'zitoun.nadia@gmail.com', NULL, '2018-11-02'),
(4, 'popof', 'sergei', '0654123423', 'popof.sergei@gmail.com', NULL, '2018-11-05'),
(5, 'Pesto', 'maria', '0745899800', 'pesto.maria@gmail.com', NULL, '2018-11-05');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `commerciaux`
--
ALTER TABLE `commerciaux`
  ADD PRIMARY KEY (`idcommerciaux`);

--
-- Index pour la table `diplomes`
--
ALTER TABLE `diplomes`
  ADD PRIMARY KEY (`iddiplomes`),
  ADD KEY `fk_diplomes_stagiaires1_idx` (`stagiaires_idstagiaires`);

--
-- Index pour la table `entreprises`
--
ALTER TABLE `entreprises`
  ADD PRIMARY KEY (`identreprises`);

--
-- Index pour la table `experiences`
--
ALTER TABLE `experiences`
  ADD PRIMARY KEY (`idexperiences`),
  ADD KEY `fk_experiences_stagiaires_idx` (`stagiaires_idstagiaires`);

--
-- Index pour la table `stagiaires`
--
ALTER TABLE `stagiaires`
  ADD PRIMARY KEY (`idstagiaires`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `commerciaux`
--
ALTER TABLE `commerciaux`
  MODIFY `idcommerciaux` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `diplomes`
--
ALTER TABLE `diplomes`
  MODIFY `iddiplomes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `entreprises`
--
ALTER TABLE `entreprises`
  MODIFY `identreprises` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `experiences`
--
ALTER TABLE `experiences`
  MODIFY `idexperiences` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `stagiaires`
--
ALTER TABLE `stagiaires`
  MODIFY `idstagiaires` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `diplomes`
--
ALTER TABLE `diplomes`
  ADD CONSTRAINT `fk_diplomes_stagiaires1` FOREIGN KEY (`stagiaires_idstagiaires`) REFERENCES `stagiaires` (`idstagiaires`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `experiences`
--
ALTER TABLE `experiences`
  ADD CONSTRAINT `fk_experiences_stagiaires` FOREIGN KEY (`stagiaires_idstagiaires`) REFERENCES `stagiaires` (`idstagiaires`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
